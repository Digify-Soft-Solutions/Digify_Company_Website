<?php
/**
 * Digify Soft Solutions - WhatsApp AI Chatbot Webhook
 * Integrates AutoBotChat / Meta WhatsApp Cloud API with Digify AI Assistant (Groq LLM)
 */

ini_set('display_errors', 0);
error_reporting(0);
header('Content-Type: application/json; charset=utf-8');

// Health / Ping / Test check via browser GET
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    if (isset($_GET['hub_mode']) && $_GET['hub_mode'] === 'subscribe') {
        echo $_GET['hub_challenge'] ?? 'OK';
        exit;
    }
    if (isset($_GET['challenge'])) {
        echo $_GET['challenge'];
        exit;
    }
    if (isset($_GET['test']) || isset($_GET['ping']) || empty($_GET)) {
        echo json_encode([
            "status"    => "active",
            "service"   => "Digify WhatsApp AI Webhook",
            "timestamp" => date('Y-m-d H:i:s'),
            "message"   => "Webhook endpoint is operational and ready to process WhatsApp messages."
        ], JSON_UNESCAPED_UNICODE);
        exit;
    }
}

// Helper to clean and normalize WhatsApp phone numbers (e.g. 8233816674 -> 918233816674)
if (!function_exists('normalize_wa_phone')) {
    function normalize_wa_phone($num) {
        $clean = preg_replace('/\D/', '', (string)$num);
        if (strlen($clean) === 10) {
            $clean = '91' . $clean;
        }
        return $clean;
    }
}

// Log incoming request to data directory for debugging
$logDir = __DIR__ . '/data';
if (!is_dir($logDir)) {
    @mkdir($logDir, 0777, true);
}
$logFile = $logDir . '/webhook_log.json';

$rawInput = file_get_contents('php://input');
$requestHeaders = function_exists('getallheaders') ? getallheaders() : [];
$logData = date('Y-m-d H:i:s') . " - " . $_SERVER['REQUEST_METHOD'] . " " . ($_SERVER['REQUEST_URI'] ?? '') . "\n"
         . "Headers: " . json_encode($requestHeaders) . "\n"
         . "Raw: " . $rawInput . "\n";
@file_put_contents($logFile, $logData, FILE_APPEND);

$input = json_decode($rawInput, true) ?? [];
if (empty($input) && !empty($_POST)) {
    $input = $_POST;
}

// Ignore status updates or outgoing echo messages to prevent infinite reply loops
if (
    (isset($input['event']) && in_array(strtolower($input['event']), ['status', 'delivery', 'sent', 'read', 'delivered', 'failed'])) ||
    isset($input['statuses']) ||
    !empty($input['from_me']) ||
    (isset($input['direction']) && strtolower($input['direction']) === 'outgoing') ||
    (isset($input['type']) && strtolower($input['type']) === 'status')
) {
    $ignoreResponse = [
        "status" => "ignored",
        "reason" => "Message status or outgoing notification received, no action required."
    ];
    @file_put_contents($logFile, date('Y-m-d H:i:s') . " - " . json_encode($ignoreResponse) . "\n\n", FILE_APPEND);
    echo json_encode($ignoreResponse);
    exit;
}

// Extract customer phone candidates from all known Innuvis / Meta webhook fields
$rawCandidates = [];
if (!empty($input['receiver'])) {
    $r = is_array($input['receiver']) ? ($input['receiver']['number'] ?? $input['receiver']['phone'] ?? '') : $input['receiver'];
    if (!empty($r)) $rawCandidates[] = $r;
}
if (!empty($input['from'])) {
    $f = is_array($input['from']) ? ($input['from']['number'] ?? $input['from']['phone'] ?? '') : $input['from'];
    if (!empty($f)) $rawCandidates[] = $f;
}
if (!empty($input['sender_id'])) $rawCandidates[] = $input['sender_id'];
if (!empty($input['sender'])) {
    $s = is_array($input['sender']) ? ($input['sender']['number'] ?? $input['sender']['phone'] ?? '') : $input['sender'];
    if (!empty($s)) $rawCandidates[] = $s;
}
if (!empty($input['phone'])) $rawCandidates[] = $input['phone'];
if (!empty($input['mobile'])) $rawCandidates[] = $input['mobile'];
if (!empty($input['wa_id'])) $rawCandidates[] = $input['wa_id'];
if (!empty($input['contact'])) {
    $c = is_array($input['contact']) ? ($input['contact']['wa_id'] ?? $input['contact']['phone'] ?? '') : $input['contact'];
    if (!empty($c)) $rawCandidates[] = $c;
}
if (!empty($input['contacts'][0]['wa_id'])) $rawCandidates[] = $input['contacts'][0]['wa_id'];
if (!empty($input['data']['from'])) $rawCandidates[] = $input['data']['from'];
if (!empty($input['data']['receiver'])) $rawCandidates[] = $input['data']['receiver'];
if (!empty($input['data']['sender'])) $rawCandidates[] = $input['data']['sender'];
if (isset($input['entry'][0]['changes'][0]['value']['messages'][0]['from'])) {
    $rawCandidates[] = $input['entry'][0]['changes'][0]['value']['messages'][0]['from'];
}

$normalizedCandidates = [];
foreach ($rawCandidates as $cand) {
    $norm = normalize_wa_phone($cand);
    if (!empty($norm) && strlen($norm) >= 10) {
        $normalizedCandidates[] = $norm;
    }
}
$normalizedCandidates = array_values(array_unique($normalizedCandidates));

// Filter out bot numbers so we never reply to our own WABA profile
$botNumbers = ['917425016636', '7425016636', '918005934184', '8005934184'];
$customerRecipients = array_values(array_filter($normalizedCandidates, function($num) use ($botNumbers) {
    return !in_array($num, $botNumbers);
}));

$sender = !empty($customerRecipients) ? $customerRecipients[0] : '';

// Extract text message content from various formats
$userMessage = '';
if (isset($input['text'])) {
    $userMessage = is_array($input['text']) ? ($input['text']['body'] ?? $input['text']['message'] ?? '') : $input['text'];
} elseif (isset($input['message'])) {
    $userMessage = is_array($input['message']) ? ($input['message']['text'] ?? $input['message']['body'] ?? $input['message']['caption'] ?? '') : $input['message'];
} elseif (isset($input['body'])) {
    $userMessage = $input['body'];
} elseif (isset($input['msg'])) {
    $userMessage = $input['msg'];
} elseif (!empty($input['data']['message'])) {
    $userMessage = is_array($input['data']['message']) ? ($input['data']['message']['text'] ?? $input['data']['message']['body'] ?? '') : $input['data']['message'];
} elseif (!empty($input['data']['text'])) {
    $userMessage = $input['data']['text'];
} elseif (isset($input['entry'][0]['changes'][0]['value']['messages'][0]['text']['body'])) {
    $userMessage = $input['entry'][0]['changes'][0]['value']['messages'][0]['text']['body'];
}

// Extract interactive button or list reply if clicked
$interactiveId = '';
$interactiveTitle = '';
if (isset($input['interactive']['button_reply'])) {
    $interactiveId = $input['interactive']['button_reply']['id'] ?? '';
    $interactiveTitle = $input['interactive']['button_reply']['title'] ?? '';
} elseif (isset($input['interactive']['list_reply'])) {
    $interactiveId = $input['interactive']['list_reply']['id'] ?? '';
    $interactiveTitle = $input['interactive']['list_reply']['title'] ?? '';
} elseif (isset($input['entry'][0]['changes'][0]['value']['messages'][0]['interactive'])) {
    $inter = $input['entry'][0]['changes'][0]['value']['messages'][0]['interactive'];
    if (isset($inter['button_reply'])) {
        $interactiveId = $inter['button_reply']['id'] ?? '';
        $interactiveTitle = $inter['button_reply']['title'] ?? '';
    } elseif (isset($inter['list_reply'])) {
        $interactiveId = $inter['list_reply']['id'] ?? '';
        $interactiveTitle = $inter['list_reply']['title'] ?? '';
    }
}

if (!empty($interactiveTitle) && empty($userMessage)) {
    $userMessage = $interactiveTitle;
}
if (!empty($interactiveId) && empty($userMessage)) {
    $userMessage = $interactiveId;
}

// If no valid message or sender found, exit gracefully
if (empty($sender) || (empty($userMessage) && empty($interactiveId))) {
    $response = [
        "status" => "ignored",
        "reason" => "No valid message or sender detected",
        "detected_candidates" => $normalizedCandidates,
        "received_keys" => array_keys($input)
    ];
    @file_put_contents($logFile, date('Y-m-d H:i:s') . " - Ignored: " . json_encode($response) . "\n\n", FILE_APPEND);
    echo json_encode($response);
    exit;
}

// --- Deduplication & Debounce ---
$incomingMsgId = $input['id'] ?? ($input['message_id'] ?? ($input['msg_id'] ?? ($input['entry'][0]['changes'][0]['value']['messages'][0]['id'] ?? ($input['data']['id'] ?? ''))));
$hasMsgId = !empty($incomingMsgId);
$dedupKey = $hasMsgId ? ('id_' . $incomingMsgId) : ('txt_' . $sender . '_' . md5(strtolower(trim((string)$userMessage))));
$debounceSeconds = $hasMsgId ? 300 : 6;

$dedupFile = sys_get_temp_dir() . '/digify_wa_webhook_dedup.json';
$nowTime = time();
$dedupCache = [];
if (file_exists($dedupFile)) {
    $rawCache = @file_get_contents($dedupFile);
    $dedupCache = json_decode($rawCache, true) ?: [];
}

foreach ($dedupCache as $k => $ts) {
    if ($nowTime - $ts > 300) {
        unset($dedupCache[$k]);
    }
}

if (isset($dedupCache[$dedupKey]) && ($nowTime - $dedupCache[$dedupKey] < $debounceSeconds)) {
    $dupResponse = [
        "status"    => "ignored",
        "reason"    => "Duplicate message / retry debounce (already handled within {$debounceSeconds}s)",
        "dedup_key" => $dedupKey
    ];
    @file_put_contents($logFile, date('Y-m-d H:i:s') . " - Duplicate Ignored: " . json_encode($dupResponse) . "\n\n", FILE_APPEND);
    echo json_encode($dupResponse);
    exit;
}

$dedupCache[$dedupKey] = $nowTime;
@file_put_contents($dedupFile, json_encode($dedupCache));

// Require configuration / API keys
if (file_exists(__DIR__ . '/whatsapp_config.php')) {
    require_once __DIR__ . '/whatsapp_config.php';
}
if (file_exists(__DIR__ . '/mail_config.php')) {
    require_once __DIR__ . '/mail_config.php';
}

// Save lead to database if db.php is available
if (file_exists(__DIR__ . '/db.php')) {
    include_once __DIR__ . '/db.php';
    if (isset($conn) && $conn) {
        $safePhone = mysqli_real_escape_string($conn, $sender);
        $safeMsg   = mysqli_real_escape_string($conn, (string)$userMessage);
        @mysqli_query($conn, "INSERT INTO leads_master (lead_name, phone, message, source, created_at) VALUES ('WhatsApp User', '$safePhone', '$safeMsg', 'WhatsApp Chatbot', NOW())");
    }
}

// Clean and format text strictly for WhatsApp
function formatForWhatsApp($text) {
    if (empty($text)) return '';

    // Convert markdown bold **text** to WhatsApp native bold *text*
    $text = preg_replace('/\*\*(.*?)\*\*/s', '*$1*', $text);

    // Convert markdown headers ### Header or ## Header to *Header*
    $text = preg_replace('/^#{1,6}\s*(.+)$/m', '*$1*', $text);

    // Strip bracketed action tags
    $text = preg_replace('/\[\s*ACTION\s*:[^\]]*\]/i', '', $text);

    // Replace 3+ consecutive newlines with 2
    $text = preg_replace("/\n{3,}/", "\n\n", trim($text));

    // Ensure response does not cut off in the middle of a sentence
    $text = trim($text);
    $lastChar = mb_substr($text, -1, 1, 'UTF-8');
    if (!in_array($lastChar, ['.', '!', '?', "\n", ':', '*'])) {
        $lastPunct = max(
            mb_strrpos($text, '.', 0, 'UTF-8') ?: 0,
            mb_strrpos($text, "\n", 0, 'UTF-8') ?: 0,
            mb_strrpos($text, '!', 0, 'UTF-8') ?: 0,
            mb_strrpos($text, '?', 0, 'UTF-8') ?: 0
        );
        if ($lastPunct > 50) {
            $text = mb_substr($text, 0, $lastPunct + 1, 'UTF-8');
        }
    }

    return trim($text);
}

// =========================================================================
// BUTTON DEFINITIONS (Strictly <= 20 chars for Meta WhatsApp API compliance)
// =========================================================================
$btnDemo    = ['id' => 'btn_demo',   'title' => 'Book Free Demo 📞'];  // 16 chars
$btnExplore = ['id' => 'btn_menu',   'title' => 'Explore Services 📋']; // 18 chars
$btnGautam  = ['id' => 'btn_gautam', 'title' => 'Chat with Gautam 💬']; // 18 chars

$allThreeButtons = [$btnDemo, $btnExplore, $btnGautam]; // Welcome / AI Fallback
$serviceButtons  = [$btnDemo, $btnGautam];               // After viewing a service
$demoButtons     = [$btnExplore, $btnGautam];            // After booking demo
$gautamButtons   = [$btnDemo, $btnExplore];              // After Chat Gautam
$pricingButtons  = [$btnDemo, $btnGautam];               // After pricing query

$targetPhone = preg_replace('/\D/', '', (string)$sender);
$sendResults = [];

$msgTrimmed = trim((string)$userMessage);
$msgLower   = strtolower($msgTrimmed);

// =========================================================================
// 10-ITEM CATALOGUE (Meta compliant: title <= 24ch, desc <= 60ch)
// =========================================================================
$catalogueSections = [
    [
        'title' => 'Retail & Business',
        'rows'  => [
            ['id' => 'pos',         'title' => 'Smart POS ⚡',      'description' => 'Fast billing & retail management'],
            ['id' => 'erp',         'title' => 'Cloud ERP 🏢',      'description' => 'Complete business management'],
            ['id' => 'inventory',   'title' => 'Inventory 📦',      'description' => 'Stock & warehouse control'],
            ['id' => 'crm',         'title' => 'CRM 👥',            'description' => 'Customers & loyalty'],
            ['id' => 'omnichannel', 'title' => 'Omnichannel 🌐',    'description' => 'Online + offline sales'],
        ]
    ],
    [
        'title' => 'Industry & Digital',
        'rows'  => [
            ['id' => 'smart_retail',     'title' => 'Smart Retail 🤖',    'description' => 'AI-powered retail'],
            ['id' => 'restaurant',       'title' => 'Restaurant 🍽️',     'description' => 'POS, KOT & food operations'],
            ['id' => 'manufacturing',    'title' => 'Manufacturing 🏭',  'description' => 'Production & shop-floor'],
            ['id' => 'education',        'title' => 'Education ERP 🎓',  'description' => 'School & institution mgmt'],
            ['id' => 'digital_services', 'title' => 'Digital Services 💻', 'description' => 'Web, apps, SEO & software'],
        ]
    ]
];

// Digital Services Sub-List
$digitalSubSections = [
    [
        'title' => 'Digital Solutions',
        'rows'  => [
            ['id' => 'ds_web',    'title' => 'Web Development 🌐', 'description' => 'Business & custom websites'],
            ['id' => 'ds_ecomm',  'title' => 'E-Commerce 🛒',      'description' => 'Online stores & platforms'],
            ['id' => 'ds_mobile', 'title' => 'Mobile Apps 📱',     'description' => 'Android & iOS applications'],
            ['id' => 'ds_seo',    'title' => 'SEO & Marketing 📈', 'description' => 'Search & digital growth'],
            ['id' => 'ds_social', 'title' => 'Social Media 📢',    'description' => 'Social media marketing'],
            ['id' => 'ds_custom', 'title' => 'Custom Software ⚙️', 'description' => 'Tailored business software'],
        ]
    ]
];

// =========================================================================
// FLOW 1: WELCOME / GREETING
// =========================================================================
$isInitialGreeting = (
    empty($interactiveId) &&
    preg_match('/^\s*(hi+|hello+|hey+|namaste|namaskar|start|hola|hy|hii+|helo|hai|good\s*(morning|afternoon|evening)|kya\s*hai|help)[\s!.]*$/iu', $msgTrimmed)
);

if ($isInitialGreeting) {
    $greetingText = "👋 *Welcome to Digify Soft Solutions!*\n\n"
                  . "We help businesses with POS, ERP, Inventory, CRM, AI & digital solutions.\n\n"
                  . "What would you like to do?";

    $r = send_whatsapp_interactive_buttons($targetPhone, $greetingText, $allThreeButtons, "Digify Soft Solutions", "Choose an option 👇");
    $sendResults[$targetPhone] = ['method' => 'greeting', 'send_status' => $r['success'] ? 'success' : 'failed', 'details' => $r['response']];
    echo json_encode(['status' => 'success', 'mode' => 'greeting', 'deliveries' => $sendResults], JSON_UNESCAPED_UNICODE);
    exit;
}

// =========================================================================
// FLOW 2: EXPLORE SERVICES — 10-item Interactive List
// =========================================================================
$isMenuRequested = (
    in_array($interactiveId, ['btn_menu', 'btn_services', 'btn_explore']) ||
    preg_match('/^\s*(menu|services|all services|explore|explore services|options|catalog|catalogue|solutions|products)\s*$/i', $msgTrimmed)
);

if ($isMenuRequested) {
    $menuBody = "📋 *Explore Digify Solutions*\n\n"
              . "Choose what you need. I'll show you the most relevant solution for your business.";

    $r = send_whatsapp_interactive_list($targetPhone, "Digify Soft Solutions", $menuBody, "View Solutions", $catalogueSections, "Tap any solution to learn more");
    $sendResults[$targetPhone] = ['method' => 'explore_list', 'send_status' => $r['success'] ? 'success' : 'failed', 'details' => $r['response']];
    echo json_encode(['status' => 'success', 'mode' => 'interactive_menu', 'deliveries' => $sendResults], JSON_UNESCAPED_UNICODE);
    exit;
}

// =========================================================================
// FLOW 3: DIGITAL SERVICES SUB-MENU
// =========================================================================
if ($interactiveId === 'digital_services') {
    $dsBody = "💻 *Digital Services*\n\n"
            . "We build digital solutions tailored to your business.\n\n"
            . "• Websites  • E-commerce  • Mobile Apps\n"
            . "• SEO & Marketing  • Social Media  • Custom Software\n\n"
            . "Which service do you need?";

    $r = send_whatsapp_interactive_list($targetPhone, "Digital Services", $dsBody, "Choose a Service", $digitalSubSections, "Select a digital solution");
    $sendResults[$targetPhone] = ['method' => 'digital_sub_menu', 'send_status' => $r['success'] ? 'success' : 'failed', 'details' => $r['response']];
    echo json_encode(['status' => 'success', 'mode' => 'digital_services_menu', 'deliveries' => $sendResults], JSON_UNESCAPED_UNICODE);
    exit;
}

// =========================================================================
// FLOW 4: BOOK FREE DEMO
// =========================================================================
$isDemoRequested = (
    $interactiveId === 'btn_demo' ||
    preg_match('/\b(book demo|free demo|book a demo|trial|schedule demo|book meeting|demo)\b/i', $msgTrimmed)
);

if ($isDemoRequested) {
    $demoText = "🎯 *Book Your Free Demo*\n\n"
              . "Our experts will understand your workflow and demonstrate the ideal Digify solution for your business.\n\n"
              . "📞 +91 7425016636\n"
              . "👤 Lead Consultant: Gautam\n\n"
              . "Submit your requirement online:\nhttps://www.digifysoft.in/contact-us.php\n\n"
              . "Ready to schedule a quick call?";

    $r = send_whatsapp_interactive_buttons($targetPhone, $demoText, $demoButtons, "Digify Soft Solutions", "Next steps 👇");
    $sendResults[$targetPhone] = ['method' => 'demo_flow', 'send_status' => $r['success'] ? 'success' : 'failed', 'details' => $r['response']];
    echo json_encode(['status' => 'success', 'mode' => 'demo_flow', 'deliveries' => $sendResults], JSON_UNESCAPED_UNICODE);
    exit;
}

// =========================================================================
// FLOW 5: CHAT WITH GAUTAM
// =========================================================================
$isGautamRequested = (
    $interactiveId === 'btn_gautam' ||
    preg_match('/\b(chat with gautam|talk to gautam|contact gautam|gautam|human|agent|support|person)\b/i', $msgTrimmed)
);

if ($isGautamRequested) {
    $gautamText = "💬 *Chat with Gautam*\n\n"
                . "Connect directly with Gautam, Lead Consultant at Digify Soft Solutions.\n\n"
                . "📞 Call: +91 7425016636\n"
                . "💬 WhatsApp: https://wa.me/917425016636\n\n"
                . "He can assist with solution design, custom pricing and live product demos.";

    $r = send_whatsapp_interactive_buttons($targetPhone, $gautamText, $gautamButtons, "Digify Soft Solutions", "Next steps 👇");
    $sendResults[$targetPhone] = ['method' => 'gautam_flow', 'send_status' => $r['success'] ? 'success' : 'failed', 'details' => $r['response']];
    echo json_encode(['status' => 'success', 'mode' => 'gautam_flow', 'deliveries' => $sendResults], JSON_UNESCAPED_UNICODE);
    exit;
}

// =========================================================================
// FLOW 6: PRICING QUESTION
// =========================================================================
if (preg_match('/\b(price|pricing|cost|kitna|how much|rate|charges|fees|paisa|budget|quote|quotation)\b/i', $msgLower)) {
    $pricingText = "💰 *Pricing is requirement-based.*\n\n"
                 . "It depends on:\n"
                 . "• Modules needed\n"
                 . "• Number of users & outlets\n"
                 . "• Third-party integrations\n"
                 . "• Custom workflows\n\n"
                 . "Our team can give you an exact quote after understanding your requirements.\n\n"
                 . "Would you like a free consultation & demo?";

    $r = send_whatsapp_interactive_buttons($targetPhone, $pricingText, $pricingButtons, "Digify Soft Solutions", "Choose an option 👇");
    $sendResults[$targetPhone] = ['method' => 'pricing_flow', 'send_status' => $r['success'] ? 'success' : 'failed', 'details' => $r['response']];
    echo json_encode(['status' => 'success', 'mode' => 'pricing_flow', 'deliveries' => $sendResults], JSON_UNESCAPED_UNICODE);
    exit;
}

// =========================================================================
// FLOW 7: SERVICE DETAIL CARDS (300-500 chars max, punchy & clean)
// Buttons: [Book Free Demo 📞, Chat with Gautam 💬]
// =========================================================================
$serviceDetails = [
    'pos' => "⚡ *Digify Smart POS*\n\nA complete POS solution for modern retail businesses.\n\n• Fast billing & barcode scanning\n• GST invoices & thermal printing\n• Real-time inventory sync\n• Multi-store & customer loyalty\n\nLearn more:\nhttps://www.digifysoft.in/pos.php",

    'erp' => "🏢 *Digify Cloud ERP*\n\nManage billing, inventory, accounting, CRM, GST and multi-location from one platform.\n\n• Multi-store & warehouse control\n• GST billing, e-way bills & accounts\n• CRM, loyalty & order tracking\n• E-commerce & Tally integration\n\nLearn more:\nhttps://www.digifysoft.in/erp.php",

    'inventory' => "📦 *Inventory Management*\n\nTrack stock across stores and warehouses with full visibility.\n\n• Real-time stock & barcode tracking\n• Purchase orders & vendor control\n• Low-stock & expiry alerts\n• Multi-location warehouse sync\n\nLearn more:\nhttps://www.digifysoft.in/inventory.php",

    'crm' => "👥 *CRM Solution*\n\nManage customers, leads and loyalty from one connected system.\n\n• Customer database & purchase history\n• Automated follow-ups & pipelines\n• Loyalty points & promo campaigns\n• Direct WhatsApp & SMS alerts\n\nLearn more:\nhttps://www.digifysoft.in/crm.php",

    'omnichannel' => "🌐 *Omnichannel ERP*\n\nConnect your physical retail stores and online channels seamlessly.\n\n• Sync Shopify, WooCommerce & POS\n• Unified inventory across channels\n• Centralized order & dispatch mgmt\n• Real-time sales reporting\n\nLearn more:\nhttps://www.digifysoft.in/omnichannel.php",

    'smart_retail' => "🤖 *Smart Retail*\n\nUpgrade traditional retail with modern AI-driven technology.\n\n• Smart checkout & self-checkout kiosks\n• AI product detection & scan\n• Footfall & customer analytics\n• Integrated POS & loyalty suite\n\nLearn more:\nhttps://www.digifysoft.in/smart-retail.php",

    'restaurant' => "🍽️ *Restaurant POS Solution*\n\nManage restaurant operations smoothly from table to kitchen.\n\n• Fast table billing & split bills\n• Kitchen Order Tickets (KOT / KDS)\n• Recipe costing & raw inventory\n• Multi-outlet & online delivery sync\n\nLearn more:\nhttps://www.digifysoft.in/restaurant.php",

    'manufacturing' => "🏭 *Manufacturing ERP*\n\nStreamline production, raw materials and shop-floor operations.\n\n• Production planning & scheduling\n• Bill of Materials (BOM) & MRP\n• Raw material stock & batch tracking\n• Quality control & cost reports\n\nLearn more:\nhttps://www.digifysoft.in/ai-manufacturing.php",

    'education' => "🎓 *Education ERP*\n\nComplete institution management for schools, colleges and institutes.\n\n• Student admissions & fee collection\n• Attendance, timetable & exams\n• Library & transport tracking\n• Parent portal & SMS notifications\n\nLearn more:\nhttps://www.digifysoft.in/education.php",

    'ds_web' => "🌐 *Web Development*\n\nProfessional, high-converting websites built for business growth.\n\n• Corporate sites & landing pages\n• Fast loading & mobile-responsive\n• SEO-optimized architecture\n• Custom web portals & dashboards\n\nLearn more:\nhttps://www.digifysoft.in/web-development-services.php",

    'ds_ecomm' => "🛒 *E-Commerce Development*\n\nHigh-speed online stores designed to scale sales.\n\n• Shopify, WooCommerce & Custom stores\n• Payment gateway & logistics sync\n• Inventory & catalog automation\n• Mobile-first checkout experience\n\nLearn more:\nhttps://www.digifysoft.in/e-commerce-website-development.php",

    'ds_mobile' => "📱 *Mobile App Development*\n\nNative and cross-platform apps built for iOS and Android.\n\n• Android (Kotlin) & iOS (Swift)\n• Flutter cross-platform apps\n• POS & field agent billing apps\n• Secure offline-ready data sync\n\nLearn more:\nhttps://www.digifysoft.in/android-application.php",

    'ds_seo' => "📈 *SEO & Digital Marketing*\n\nBoost Google rankings and generate high-intent inbound leads.\n\n• Technical & On-Page SEO\n• Local SEO & Google Business Profile\n• Google Ads (PPC) & conversions\n• Monthly ranking & traffic reports\n\nLearn more:\nhttps://www.digifysoft.in/search-engine-optimization.php",

    'ds_social' => "📢 *Social Media Marketing*\n\nBuild brand authority and drive customer engagement online.\n\n• Content creation & graphic design\n• Instagram, Facebook & LinkedIn growth\n• High-ROI paid social campaigns\n• Community & message management\n\nLearn more:\nhttps://www.digifysoft.in/social-media-optimization.php",

    'ds_custom' => "⚙️ *Custom Software Development*\n\nTailored software solutions engineered for your exact business workflows.\n\n• Custom ERP & specialized CRM\n• API integrations & workflow automation\n• Legacy software modernization\n• Cloud SaaS product development\n\nLearn more:\nhttps://www.digifysoft.in/web-development-services.php",
];

// Legacy IDs mapping
$legacyMap = [
    'srv_erp'         => 'erp',
    'srv_pos'         => 'pos',
    'srv_crm'         => 'crm',
    'srv_after_sales' => 'ds_custom',
    'srv_ai_ocr'      => 'ds_custom',
    'srv_lead_gen'    => 'crm',
    'srv_app_dev'     => 'ds_mobile',
    'srv_web_dev'     => 'ds_web',
    'srv_seo_smo'     => 'ds_seo',
    'srv_email_bimi'  => 'ds_custom',
];

$matchedKey = null;

if (!empty($interactiveId)) {
    if (isset($serviceDetails[$interactiveId])) {
        $matchedKey = $interactiveId;
    } elseif (isset($legacyMap[$interactiveId])) {
        $matchedKey = $legacyMap[$interactiveId];
    }
}

// Keyword matching for free-text messages
if (!$matchedKey) {
    if      (preg_match('/\b(smart pos|pos|retail billing|kirana|supermarket|barcode billing|dukan)\b/i', $msgLower))      $matchedKey = 'pos';
    elseif  (preg_match('/\b(cloud erp|enterprise resource|multi.store erp|accounts erp|tally)\b/i', $msgLower))          $matchedKey = 'erp';
    elseif  (preg_match('/\b(inventory|stock|warehouse|godown|stock management|maal)\b/i', $msgLower))                    $matchedKey = 'inventory';
    elseif  (preg_match('/\b(crm|customer management|loyalty program|customer database)\b/i', $msgLower))                 $matchedKey = 'crm';
    elseif  (preg_match('/\b(omnichannel|omni.channel|online.*offline|shopify.*erp)\b/i', $msgLower))                     $matchedKey = 'omnichannel';
    elseif  (preg_match('/\b(smart retail|ai.*retail|self.?checkout|footfall|ai checkout)\b/i', $msgLower))               $matchedKey = 'smart_retail';
    elseif  (preg_match('/\b(restaurant|hotel|food|kitchen|kot|kds|recipe|dhaba|cafe)\b/i', $msgLower))                   $matchedKey = 'restaurant';
    elseif  (preg_match('/\b(manufacturing|factory|production|bom|mrp|shop.floor|udyog)\b/i', $msgLower))                 $matchedKey = 'manufacturing';
    elseif  (preg_match('/\b(education|school|college|institution|student|fees management|institute)\b/i', $msgLower))    $matchedKey = 'education';
    elseif  (preg_match('/\b(ecommerce|e-commerce|online store|shopify|woocommerce|online shop)\b/i', $msgLower))         $matchedKey = 'ds_ecomm';
    elseif  (preg_match('/\b(mobile app|android app|ios app|flutter|app development|app banao)\b/i', $msgLower))          $matchedKey = 'ds_mobile';
    elseif  (preg_match('/\b(seo|google ranking|search engine|google ads|digital marketing)\b/i', $msgLower))             $matchedKey = 'ds_seo';
    elseif  (preg_match('/\b(social media|instagram|facebook|linkedin|smm|social marketing)\b/i', $msgLower))             $matchedKey = 'ds_social';
    elseif  (preg_match('/\b(website|web development|web portal|landing page|site banao)\b/i', $msgLower))                $matchedKey = 'ds_web';
    elseif  (preg_match('/\b(custom software|custom erp|custom crm|tailored software|software banana)\b/i', $msgLower))   $matchedKey = 'ds_custom';
    elseif  (preg_match('/\b(digital service|digital solution|web.*app.*seo)\b/i', $msgLower))                            $matchedKey = 'digital_services';
}

// Digital Services -> open sub-list
if ($matchedKey === 'digital_services') {
    $dsBody = "💻 *Digital Services*\n\n"
            . "We build digital solutions tailored to your business.\n\n"
            . "• Websites  • E-commerce  • Mobile Apps\n"
            . "• SEO & Marketing  • Social Media  • Custom Software\n\n"
            . "Which service do you need?";

    $r = send_whatsapp_interactive_list($targetPhone, "Digital Services", $dsBody, "Choose a Service", $digitalSubSections, "Select a digital solution");
    $sendResults[$targetPhone] = ['method' => 'digital_sub_menu', 'send_status' => $r['success'] ? 'success' : 'failed', 'details' => $r['response']];
    echo json_encode(['status' => 'success', 'mode' => 'digital_services_menu', 'deliveries' => $sendResults], JSON_UNESCAPED_UNICODE);
    exit;
}

// Send service detail card
if ($matchedKey && isset($serviceDetails[$matchedKey])) {
    $r = send_whatsapp_interactive_buttons(
        $targetPhone, $serviceDetails[$matchedKey], $serviceButtons,
        "Digify Soft Solutions", "Next step 👇"
    );
    $sendResults[$targetPhone] = ['method' => 'service_detail', 'service' => $matchedKey, 'send_status' => $r['success'] ? 'success' : 'failed', 'details' => $r['response']];
    echo json_encode(['status' => 'success', 'mode' => 'service_buttons', 'deliveries' => $sendResults], JSON_UNESCAPED_UNICODE);
    exit;
}

// =========================================================================
// FLOW 8: FREE-TEXT AI CONSULTATIVE ASSISTANT (Groq LLM)
// =========================================================================
$apiKey = getenv('GROQ_API_KEY') ?: (getenv('CHAT_API_KEY') ?: (defined('GROQ_API_KEY') ? GROQ_API_KEY : (defined('CHAT_API_KEY') ? CHAT_API_KEY : '')));

$systemPromptContent = <<<PROMPT
You are Digify Saathi, the official WhatsApp AI business consultant for Digify Soft Solutions (+91 7425016636, Lead Consultant: Gautam).

YOUR GOAL:
Understand the customer's business problem, recommend the right Digify software/digital solution, and guide them to book a free demo with Gautam.

STRICT WRITING RULES:
1. Always complete your response cleanly. NEVER cut off mid-sentence.
2. Keep length between 70 to 140 words. Short, punchy, and easy to read on mobile.
3. Use bullet points (•) and WhatsApp bold (*word*).
4. If user writes in Hindi or Hinglish, reply in natural Hinglish. If in English, reply in crisp English.
5. Ask exactly ONE clear qualifying question to keep the conversation going.
6. End by inviting them to book a free demo or connect with Gautam at +91 7425016636.

DIGIFY SOLUTIONS:
- Smart Cloud POS: Retail billing, barcodes, thermal print, inventory sync (digifysoft.in/pos.php)
- Cloud ERP: Multi-store, GST, accounting, warehouse & Tally sync (digifysoft.in/erp.php)
- Inventory Management: Stock tracking, alerts, multi-warehouse (digifysoft.in/inventory.php)
- CRM Suite: Customer database, lead automation, loyalty (digifysoft.in/crm.php)
- Omnichannel: Connect offline stores with Shopify & WooCommerce (digifysoft.in/omnichannel.php)
- Smart Retail: AI checkout, kiosks, footfall analytics (digifysoft.in/smart-retail.php)
- Restaurant Solution: POS, KOT/KDS, table billing, recipe costing (digifysoft.in/restaurant.php)
- Manufacturing ERP: BOM, production planning, raw materials (digifysoft.in/ai-manufacturing.php)
- Education ERP: School/college fees, attendance, admissions (digifysoft.in/education.php)
- Digital Services: Websites, Mobile Apps, SEO, Social Media, Custom Software (digifysoft.in)
PROMPT;

$messages = [
    ['role' => 'system', 'content' => $systemPromptContent],
    ['role' => 'user',   'content' => (string)$userMessage]
];

function queryGroqAI($apiKey, $messages) {
    if (empty($apiKey)) return null;
    $models  = ['llama-3.3-70b-versatile', 'openai/gpt-oss-120b', 'llama-3.1-8b-instant'];
    $groqUrl = 'https://api.groq.com/openai/v1/chat/completions';

    foreach ($models as $model) {
        $payload = ['model' => $model, 'messages' => $messages, 'temperature' => 0.65, 'max_tokens' => 4020];
        $ch = curl_init($groqUrl);
        curl_setopt_array($ch, [
            CURLOPT_RETURNTRANSFER => true, CURLOPT_POST => true,
            CURLOPT_POSTFIELDS     => json_encode($payload),
            CURLOPT_SSL_VERIFYPEER => false, CURLOPT_SSL_VERIFYHOST => 0,
            CURLOPT_IPRESOLVE      => CURL_IPRESOLVE_V4,
            CURLOPT_CONNECTTIMEOUT => 6, CURLOPT_TIMEOUT => 14,
            CURLOPT_HTTPHEADER     => ['Content-Type: application/json', 'Authorization: Bearer ' . $apiKey],
        ]);
        $res      = curl_exec($ch);
        $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);
        if ($httpCode === 200 && $res) {
            $json = json_decode($res, true);
            if (!empty($json['choices'][0]['message']['content'])) {
                return trim($json['choices'][0]['message']['content']);
            }
        }
    }
    return null;
}

$rawReply = queryGroqAI($apiKey, $messages);
if ($rawReply && trim($rawReply) !== '') {
    $replyText = formatForWhatsApp($rawReply);
} else {
    $replyText = "👋 *Welcome to Digify Soft Solutions!*\n\n"
               . "We help businesses with:\n"
               . "• POS & ERP  • Inventory & CRM\n"
               . "• Restaurants & Manufacturing\n"
               . "• Websites, Mobile Apps & SEO\n\n"
               . "Tell us your business requirement and our team will recommend the right solution. 😊";
}

// Deliver response with interactive navigation buttons
$r = send_whatsapp_interactive_buttons($targetPhone, $replyText, $allThreeButtons, "Digify Soft Solutions", "Choose an option 👇");
if ($r['success']) {
    $sendResults[$targetPhone] = ['method' => 'ai_reply', 'send_status' => 'success', 'details' => $r['response']];
} else {
    $v6r = send_whatsapp_session_message($targetPhone, $replyText);
    $sendResults[$targetPhone] = ['method' => 'ai_text_fallback', 'send_status' => $v6r['success'] ? 'success' : 'failed', 'details' => $v6r['response']];
}

$resultData = [
    'status' => 'success', 'target_phone' => $targetPhone,
    'user_message' => $userMessage, 'reply' => $replyText, 'deliveries' => $sendResults
];
@file_put_contents($logFile, date('Y-m-d H:i:s') . " - Result: " . json_encode($resultData, JSON_UNESCAPED_UNICODE) . "\n\n", FILE_APPEND);
echo json_encode($resultData, JSON_UNESCAPED_UNICODE);
