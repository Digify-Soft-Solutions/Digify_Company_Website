<?php
/**
 * Digify Soft Solutions - WhatsApp AI Chatbot Webhook
 * Automated, predictable, and guided WhatsApp assistant (Digify Saathi)
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

// Ignore status updates or outgoing echo messages to prevent reply loops
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

// Extract customer phone candidates
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

// Extract text message content
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
$debounceSeconds = $hasMsgId ? 300 : 5;

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
        "reason"    => "Duplicate message debounce",
        "dedup_key" => $dedupKey
    ];
    @file_put_contents($logFile, date('Y-m-d H:i:s') . " - Duplicate Ignored: " . json_encode($dupResponse) . "\n\n", FILE_APPEND);
    echo json_encode($dupResponse);
    exit;
}

$dedupCache[$dedupKey] = $nowTime;
@file_put_contents($dedupFile, json_encode($dedupCache));

// Require configuration
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

// =========================================================================
// PREDEFINED TWO-BUTTON CORE NAVIGATION (Clean & strictly <= 20 chars)
// =========================================================================
$btnDemo    = ['id' => 'btn_demo', 'title' => 'Book Free Demo 📞'];   // 16 chars
$btnExplore = ['id' => 'btn_menu', 'title' => 'Explore Services 📋'];  // 18 chars

$twoButtons   = [$btnDemo, $btnExplore]; // Used in Welcome, Services, Guidance, Pricing
$demoOnlyBtn  = [$btnExplore];           // After demo is requested

$targetPhone = preg_replace('/\D/', '', (string)$sender);
$sendResults = [];

$msgTrimmed = trim((string)$userMessage);
$msgLower   = strtolower($msgTrimmed);

// Strip emojis and non-alphanumeric characters for 100% reliable button matching
$msgClean = preg_replace('/[^\p{L}\p{N}\s]/u', '', (string)$userMessage);
$msgClean = strtolower(trim(preg_replace('/\s+/', ' ', (string)$msgClean)));

// =========================================================================
// 10-ITEM SERVICES CATALOGUE (Interactive List)
// =========================================================================
$catalogueSections = [
    [
        'title' => 'Retail & Business',
        'rows'  => [
            ['id' => 'pos',         'title' => 'Smart POS ⚡',      'description' => 'Fast billing & retail management'],
            ['id' => 'erp',         'title' => 'Cloud ERP 🏢',      'description' => 'Complete business management'],
            ['id' => 'inventory',   'title' => 'Inventory 📦',      'description' => 'Stock & warehouse control'],
            ['id' => 'crm',         'title' => 'CRM Solutions 👥',  'description' => 'Customers & loyalty'],
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
// FLOW 1: WELCOME GREETING ("hi", "hello", etc.)
// =========================================================================
$isInitialGreeting = (
    empty($interactiveId) &&
    preg_match('/^(hi+|hello+|hey+|namaste|namaskar|start|hola|hy|hii+|helo|hai|good\s*(morning|afternoon|evening)|help)$/i', $msgClean)
);

if ($isInitialGreeting) {
    $greetingText = "👋 *I am Digify Saathi*, your WhatsApp AI consultant from *Digify Soft Solutions*.\n\n"
                  . "We provide high-performance POS, Cloud ERP, Inventory, CRM, AI and complete digital software solutions.\n\n"
                  . "How would you like to proceed?";

    $r = send_whatsapp_interactive_buttons($targetPhone, $greetingText, $twoButtons, "Digify Soft Solutions", "Select an option 👇");
    $sendResults[$targetPhone] = ['method' => 'greeting', 'send_status' => $r['success'] ? 'success' : 'failed', 'details' => $r['response']];
    echo json_encode(['status' => 'success', 'mode' => 'greeting', 'deliveries' => $sendResults], JSON_UNESCAPED_UNICODE);
    exit;
}

// =========================================================================
// FLOW 2: EXPLORE SERVICES (Interactive List)
// =========================================================================
$isMenuRequested = (
    in_array($interactiveId, ['btn_menu', 'btn_services', 'btn_explore']) ||
    strpos($msgClean, 'explore') !== false ||
    strpos($msgClean, 'service') !== false ||
    strpos($msgClean, 'menu') !== false ||
    strpos($msgClean, 'catalog') !== false ||
    strpos($msgClean, 'solution') !== false
);

if ($isMenuRequested) {
    $menuBody = "📋 *Explore Digify Solutions*\n\n"
              . "Please select what you need from our solutions list. I will share the complete details and website link:";

    $r = send_whatsapp_interactive_list($targetPhone, "Digify Soft Solutions", $menuBody, "View Services", $catalogueSections, "Tap any service to view");
    $sendResults[$targetPhone] = ['method' => 'explore_list', 'send_status' => $r['success'] ? 'success' : 'failed', 'details' => $r['response']];
    echo json_encode(['status' => 'success', 'mode' => 'interactive_menu', 'deliveries' => $sendResults], JSON_UNESCAPED_UNICODE);
    exit;
}

// =========================================================================
// FLOW 3: DIGITAL SERVICES SUB-MENU
// =========================================================================
if ($interactiveId === 'digital_services' || strpos($msgClean, 'digital service') !== false) {
    $dsBody = "💻 *Digital Services*\n\n"
            . "We craft end-to-end digital experiences tailored for your business growth.\n\n"
            . "Please select a digital service to view details and live links:";

    $r = send_whatsapp_interactive_list($targetPhone, "Digital Services", $dsBody, "Choose Service", $digitalSubSections, "Tap to view details");
    $sendResults[$targetPhone] = ['method' => 'digital_sub_menu', 'send_status' => $r['success'] ? 'success' : 'failed', 'details' => $r['response']];
    echo json_encode(['status' => 'success', 'mode' => 'digital_services_menu', 'deliveries' => $sendResults], JSON_UNESCAPED_UNICODE);
    exit;
}

// =========================================================================
// FLOW 4: BOOK FREE DEMO
// =========================================================================
$isDemoRequested = (
    $interactiveId === 'btn_demo' ||
    strpos($msgClean, 'demo') !== false ||
    strpos($msgClean, 'trial') !== false ||
    strpos($msgClean, 'book') !== false
);

if ($isDemoRequested) {
    $demoText = "🎯 *Book Your Free Demo*\n\n"
              . "Our experts will understand your workflow and demonstrate the ideal Digify software for your business.\n\n"
              . "📞 *Call / WhatsApp Gautam:* +91 7425016636\n"
              . "🌐 *Submit Requirement Online:*\nhttps://www.digifysoft.in/contact-us.php\n\n"
              . "Tap below to explore our services:";

    $r = send_whatsapp_interactive_buttons($targetPhone, $demoText, $demoOnlyBtn, "Digify Soft Solutions", "Explore solutions 👇");
    $sendResults[$targetPhone] = ['method' => 'demo_flow', 'send_status' => $r['success'] ? 'success' : 'failed', 'details' => $r['response']];
    echo json_encode(['status' => 'success', 'mode' => 'demo_flow', 'deliveries' => $sendResults], JSON_UNESCAPED_UNICODE);
    exit;
}

// =========================================================================
// FLOW 5: PRICING QUERY
// =========================================================================
if (preg_match('/\b(price|pricing|cost|kitna|how much|rate|charges|fees|paisa|budget|quote|quotation)\b/i', $msgClean)) {
    $pricingText = "💰 *Pricing is Requirement-Based*\n\n"
                 . "Digify software pricing depends on:\n"
                 . "• Modules required (POS, ERP, CRM, etc.)\n"
                 . "• Number of stores, branches & users\n"
                 . "• Hardware and third-party integrations\n\n"
                 . "Connect with us to get an exact customized quotation:\n"
                 . "📞 *Call / WhatsApp Gautam:* +91 7425016636\n"
                 . "🌐 https://www.digifysoft.in/contact-us.php";

    $r = send_whatsapp_interactive_buttons($targetPhone, $pricingText, $twoButtons, "Digify Soft Solutions", "Next steps 👇");
    $sendResults[$targetPhone] = ['method' => 'pricing_flow', 'send_status' => $r['success'] ? 'success' : 'failed', 'details' => $r['response']];
    echo json_encode(['status' => 'success', 'mode' => 'pricing_flow', 'deliveries' => $sendResults], JSON_UNESCAPED_UNICODE);
    exit;
}

// =========================================================================
// FLOW 6: SERVICE DETAIL CARDS (Content + Website Link + Predefined 2 Buttons)
// =========================================================================
$serviceDetails = [
    'pos' => "⚡ *Digify Smart POS*\n\nA complete high-speed billing and retail POS system.\n\n• 3-Second offline billing & barcode scanning\n• GST invoice generation & thermal printing\n• Real-time stock sync & multi-store support\n• Customer ledger & loyalty points\n\n🔗 *Official Website & Details:*\nhttps://www.digifysoft.in/pos.php",

    'erp' => "🏢 *Digify Cloud ERP*\n\nAll-in-one business management from billing to accounting.\n\n• Multi-branch & warehouse management\n• GST filing, e-way bills & financial accounts\n• Purchase orders, vendor tracking & reports\n• Tally & E-commerce integration\n\n🔗 *Official Website & Details:*\nhttps://www.digifysoft.in/erp.php",

    'inventory' => "📦 *Inventory Management*\n\nGain complete real-time visibility over your stock.\n\n• Barcode scanning & batch / expiry alerts\n• Multi-warehouse transfers & re-order points\n• Purchase, sales & damage stock reports\n• Live inventory synchronization\n\n🔗 *Official Website & Details:*\nhttps://www.digifysoft.in/inventory.php",

    'crm' => "👥 *CRM Solutions*\n\nManage leads, customer relations and sales pipelines.\n\n• Centralized customer profile & history\n• Automated follow-up reminders & tasks\n• WhatsApp & SMS campaign automation\n• Loyalty rewards & retention tracking\n\n🔗 *Official Website & Details:*\nhttps://www.digifysoft.in/crm.php",

    'omnichannel' => "🌐 *Omnichannel ERP*\n\nBridge your retail counters with your digital storefronts.\n\n• Shopify & WooCommerce inventory sync\n• Centralized order dispatch & tracking\n• Multi-channel sales analytics\n• Single inventory for online & offline\n\n🔗 *Official Website & Details:*\nhttps://www.digifysoft.in/omnichannel.php",

    'smart_retail' => "🤖 *Smart Retail AI*\n\nEmpower modern stores with cutting-edge AI technology.\n\n• Self-checkout kiosks & digital billing\n• AI product detection & theft deterrence\n• Footfall analytics & heatmaps\n• Smart digital shelf management\n\n🔗 *Official Website & Details:*\nhttps://www.digifysoft.in/smart-retail.php",

    'restaurant' => "🍽️ *Restaurant POS Solution*\n\nEffortless food operations from table to kitchen.\n\n• Fast table billing & split check support\n• Kitchen Order Tickets (KOT / KDS)\n• Recipe costing & ingredient stock tracking\n• Online aggregator (Zomato/Swiggy) sync\n\n🔗 *Official Website & Details:*\nhttps://www.digifysoft.in/restaurant.php",

    'manufacturing' => "🏭 *Manufacturing ERP*\n\nOptimize production workflows and raw materials.\n\n• Bill of Materials (BOM) & Material Planning (MRP)\n• Raw material batch tracking & wastage control\n• Shop-floor production tracking\n• Accurate unit costing & quality reports\n\n🔗 *Official Website & Details:*\nhttps://www.digifysoft.in/ai-manufacturing.php",

    'education' => "🎓 *Education ERP*\n\nComplete automation for schools, colleges and institutes.\n\n• Student admissions & automated fee collection\n• Attendance, exam marks & digital report cards\n• Library, hostel & bus GPS tracking\n• Dedicated parent portal & instant SMS alerts\n\n🔗 *Official Website & Details:*\nhttps://www.digifysoft.in/education.php",

    'ds_web' => "🌐 *Web Development*\n\nHigh-speed, SEO-optimized business websites.\n\n• Modern corporate websites & landing pages\n• 100% Mobile responsive & ultra-fast loading\n• Custom web applications & client portals\n• Built-in SEO architecture\n\n🔗 *Official Website & Details:*\nhttps://www.digifysoft.in/web-development-services.php",

    'ds_ecomm' => "🛒 *E-Commerce Development*\n\nTurn visitors into repeat buyers with high-converting online stores.\n\n• Shopify, WooCommerce & Custom eCommerce\n• Seamless payment gateway & courier integration\n• Mobile-first checkout experience\n• Automated order & catalog sync\n\n🔗 *Official Website & Details:*\nhttps://www.digifysoft.in/e-commerce-website-development.php",

    'ds_mobile' => "📱 *Mobile App Development*\n\nNative & cross-platform mobile apps for Android and iOS.\n\n• Android (Kotlin) & iOS (Swift) native apps\n• Flutter cross-platform apps\n• Enterprise field staff & POS tablet apps\n• High security & offline data caching\n\n🔗 *Official Website & Details:*\nhttps://www.digifysoft.in/android-application.php",

    'ds_seo' => "📈 *SEO & Digital Marketing*\n\nRank on Page #1 of Google and drive high-intent leads.\n\n• Technical & On-Page SEO optimization\n• Local SEO & Google Business Profile (GBP)\n• High-ROI Google Ads (PPC) campaigns\n• Comprehensive monthly rank reports\n\n🔗 *Official Website & Details:*\nhttps://www.digifysoft.in/search-engine-optimization.php",

    'ds_social' => "📢 *Social Media Marketing*\n\nBuild brand authority and engaged communities.\n\n• Creative graphics & video reel content\n• Instagram, Facebook & LinkedIn management\n• Targeted paid ad lead generation campaigns\n• Community engagement & inquiry management\n\n🔗 *Official Website & Details:*\nhttps://www.digifysoft.in/social-media-optimization.php",

    'ds_custom' => "⚙️ *Custom Software Development*\n\nSoftware engineered specifically for your exact workflows.\n\n• Bespoke ERP, CRM & operations portals\n• Third-party REST API integrations\n• Legacy system migration & database overhaul\n• Secure cloud SaaS platforms\n\n🔗 *Official Website & Details:*\nhttps://www.digifysoft.in/web-development-services.php",
];

// Match service key from interactive selection or keywords
$matchedKey = null;

if (!empty($interactiveId) && isset($serviceDetails[$interactiveId])) {
    $matchedKey = $interactiveId;
} else {
    if      (strpos($msgClean, 'pos') !== false || strpos($msgClean, 'billing') !== false)              $matchedKey = 'pos';
    elseif  (strpos($msgClean, 'erp') !== false)                                                        $matchedKey = 'erp';
    elseif  (strpos($msgClean, 'inventory') !== false || strpos($msgClean, 'stock') !== false)        $matchedKey = 'inventory';
    elseif  (strpos($msgClean, 'crm') !== false || strpos($msgClean, 'customer') !== false)           $matchedKey = 'crm';
    elseif  (strpos($msgClean, 'omnichannel') !== false || strpos($msgClean, 'omni') !== false)       $matchedKey = 'omnichannel';
    elseif  (strpos($msgClean, 'retail') !== false || strpos($msgClean, 'smart retail') !== false)    $matchedKey = 'smart_retail';
    elseif  (strpos($msgClean, 'restaurant') !== false || strpos($msgClean, 'food') !== false)        $matchedKey = 'restaurant';
    elseif  (strpos($msgClean, 'manufacturing') !== false || strpos($msgClean, 'factory') !== false)  $matchedKey = 'manufacturing';
    elseif  (strpos($msgClean, 'education') !== false || strpos($msgClean, 'school') !== false)       $matchedKey = 'education';
    // Digital Sub-services
    elseif  (strpos($msgClean, 'web') !== false || strpos($msgClean, 'website') !== false)            $matchedKey = 'ds_web';
    elseif  (strpos($msgClean, 'ecomm') !== false || strpos($msgClean, 'commerce') !== false || strpos($msgClean, 'store') !== false) $matchedKey = 'ds_ecomm';
    elseif  (strpos($msgClean, 'mobile') !== false || strpos($msgClean, 'app') !== false)            $matchedKey = 'ds_mobile';
    elseif  (strpos($msgClean, 'seo') !== false || strpos($msgClean, 'marketing') !== false)          $matchedKey = 'ds_seo';
    elseif  (strpos($msgClean, 'social') !== false)                                                     $matchedKey = 'ds_social';
    elseif  (strpos($msgClean, 'custom') !== false || strpos($msgClean, 'software') !== false)        $matchedKey = 'ds_custom';
}

if ($matchedKey === 'digital_services') {
    $dsBody = "💻 *Digital Services*\n\n"
            . "We craft end-to-end digital experiences tailored for your business growth.\n\n"
            . "Please select a digital service to view details and live links:";

    $r = send_whatsapp_interactive_list($targetPhone, "Digital Services", $dsBody, "Choose Service", $digitalSubSections, "Tap to view details");
    $sendResults[$targetPhone] = ['method' => 'digital_sub_menu', 'send_status' => $r['success'] ? 'success' : 'failed', 'details' => $r['response']];
    echo json_encode(['status' => 'success', 'mode' => 'digital_services_menu', 'deliveries' => $sendResults], JSON_UNESCAPED_UNICODE);
    exit;
}

if ($matchedKey && isset($serviceDetails[$matchedKey])) {
    $r = send_whatsapp_interactive_buttons(
        $targetPhone, $serviceDetails[$matchedKey], $twoButtons,
        "Digify Soft Solutions", "Select next step 👇"
    );
    $sendResults[$targetPhone] = ['method' => 'service_detail', 'service' => $matchedKey, 'send_status' => $r['success'] ? 'success' : 'failed', 'details' => $r['response']];
    echo json_encode(['status' => 'success', 'mode' => 'service_buttons', 'deliveries' => $sendResults], JSON_UNESCAPED_UNICODE);
    exit;
}

// =========================================================================
// FLOW 7: PREDEFINED GUIDANCE MESSAGE (For any custom/unrecognized text)
// Keeps user guided on predefined buttons without confusion
// =========================================================================
$guidanceText = "👋 *Namaste!*\n\n"
              . "Main hoon *Digify Saathi*, aapka WhatsApp AI Consultant from *Digify Soft Solutions*.\n\n"
              . "Kripya niche diye gaye predefined options me se select karein taaki hum aapko sahi solution tak guide kar sakein:\n\n"
              . "Direct consultation ke liye:\n"
              . "📞 *Call / WhatsApp Gautam:* +91 7425016636";

$r = send_whatsapp_interactive_buttons($targetPhone, $guidanceText, $twoButtons, "Digify Soft Solutions", "Choose an option 👇");
$sendResults[$targetPhone] = ['method' => 'guidance_menu', 'send_status' => $r['success'] ? 'success' : 'failed', 'details' => $r['response']];

$resultData = [
    'status'       => 'success',
    'target_phone' => $targetPhone,
    'user_message' => $userMessage,
    'mode'         => 'guidance_buttons',
    'deliveries'   => $sendResults
];
@file_put_contents($logFile, date('Y-m-d H:i:s') . " - Result: " . json_encode($resultData, JSON_UNESCAPED_UNICODE) . "\n\n", FILE_APPEND);
echo json_encode($resultData, JSON_UNESCAPED_UNICODE);
