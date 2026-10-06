<?php
/**
 * Digify Soft Solutions - WhatsApp AI Chatbot Webhook
 * Integrates AutoBotChat / Meta WhatsApp Cloud API with Digify AI Assistant (Groq LLM)
 */

// Prevent PHP error leakage in JSON output
ini_set('display_errors', 0);
error_reporting(0);
header('Content-Type: application/json');

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
        ]);
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

// Check for status updates or outgoing echo messages and ignore them to prevent reply loops
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

// --- Deduplication & Debounce: Prevent duplicate reply if gateway fires retry within 8 seconds ---
$incomingMsgId = $input['id'] ?? ($input['message_id'] ?? ($input['msg_id'] ?? ($input['entry'][0]['changes'][0]['value']['messages'][0]['id'] ?? ($input['data']['id'] ?? ''))));
$hasMsgId = !empty($incomingMsgId);
$dedupKey = $hasMsgId ? ('id_' . $incomingMsgId) : ('txt_' . $sender . '_' . md5(strtolower(trim((string)$userMessage))));
$debounceSeconds = $hasMsgId ? 300 : 8; // If unique message ID, ignore for 5 min; if text hash, debounce only 8s

$dedupFile = sys_get_temp_dir() . '/digify_wa_webhook_dedup.json';
$nowTime = time();
$dedupCache = [];
if (file_exists($dedupFile)) {
    $rawCache = @file_get_contents($dedupFile);
    $dedupCache = json_decode($rawCache, true) ?: [];
}

// Clean entries older than 300 seconds
foreach ($dedupCache as $k => $ts) {
    if ($nowTime - $ts > 300) {
        unset($dedupCache[$k]);
    }
}

// If duplicate message arrived within debounce window, ignore immediately
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

// Mark key as seen right now (before AI processing)
$dedupCache[$dedupKey] = $nowTime;
@file_put_contents($dedupFile, json_encode($dedupCache));

// Require configuration / API keys
if (file_exists(__DIR__ . '/whatsapp_config.php')) {
    require_once __DIR__ . '/whatsapp_config.php';
}
if (file_exists(__DIR__ . '/mail_config.php')) {
    require_once __DIR__ . '/mail_config.php';
}

$apiKey = getenv('GROQ_API_KEY') ?: (getenv('CHAT_API_KEY') ?: (defined('GROQ_API_KEY') ? GROQ_API_KEY : (defined('CHAT_API_KEY') ? CHAT_API_KEY : '')));

// Save lead to database if db.php is available
if (file_exists(__DIR__ . '/db.php')) {
    include_once __DIR__ . '/db.php';
    if (isset($conn) && $conn) {
        $safePhone = mysqli_real_escape_string($conn, $sender);
        $safeMsg   = mysqli_real_escape_string($conn, (string)$userMessage);
        @mysqli_query($conn, "INSERT INTO leads_master (lead_name, phone, message, source, created_at) VALUES ('WhatsApp User', '$safePhone', '$safeMsg', 'WhatsApp Chatbot', NOW())");
    }
}

// Helper to format text perfectly for WhatsApp and strictly enforce Meta limits
function formatForWhatsApp($text) {
    if (empty($text)) return '';

    // Convert markdown bold **text** to WhatsApp native bold *text*
    $text = preg_replace('/\*\*(.*?)\*\*/s', '*$1*', $text);

    // Convert markdown headers ### Header or ## Header to *Header*
    $text = preg_replace('/^#{1,6}\s*(.+)$/m', '*$1*', $text);

    // Strip bracketed action tags if present
    $text = preg_replace('/\[\s*ACTION\s*:[^\]]*\]/i', '', $text);

    // Replace multiple consecutive blank lines with double newline
    $text = preg_replace("/\n{3,}/", "\n\n", trim($text));

    // Meta WhatsApp Cloud API limit is 4096 characters.
    // If text exceeds 3500 characters, truncate at the last full sentence boundary.
    if (mb_strlen($text, 'UTF-8') > 3500) {
        $trimmed = mb_substr($text, 0, 3400, 'UTF-8');
        $lastPunct = max(
            mb_strrpos($trimmed, '.', 0, 'UTF-8') ?: 0,
            mb_strrpos($trimmed, "\n", 0, 'UTF-8') ?: 0,
            mb_strrpos($trimmed, '!', 0, 'UTF-8') ?: 0,
            mb_strrpos($trimmed, '?', 0, 'UTF-8') ?: 0
        );
        if ($lastPunct > 1500) {
            $text = mb_substr($trimmed, 0, $lastPunct, 'UTF-8') . "\n\nðŸ“ž *Call / WhatsApp Gautam:* +91 7425016636\nðŸŒ digifysoft.in";
        }
    }

    return trim($text);
}

// =========================================================================
// CORE BUTTON DEFINITIONS
// =========================================================================
$btnDemo    = ['id' => 'btn_demo',   'title' => 'Book Free Demo ðŸ“ž'];
$btnExplore = ['id' => 'btn_menu',   'title' => 'Explore Services ðŸ“‹'];
$btnGautam  = ['id' => 'btn_gautam', 'title' => 'Chat with Gautam ðŸ’¬'];

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
// MAIN 10-ITEM CATALOGUE (Meta compliant: title â‰¤ 20ch, desc â‰¤ 60ch)
// =========================================================================
$catalogueSections = [
    [
        'title' => 'Retail & Business',
        'rows'  => [
            ['id' => 'pos',          'title' => 'Smart POS âš¡',       'description' => 'Fast billing & retail management'],
            ['id' => 'erp',          'title' => 'Cloud ERP ðŸ­',       'description' => 'Complete business management'],
            ['id' => 'inventory',    'title' => 'Inventory ðŸ“¦',       'description' => 'Stock & warehouse control'],
            ['id' => 'crm',          'title' => 'CRM ðŸ‘¥',             'description' => 'Customers & loyalty'],
            ['id' => 'omnichannel',  'title' => 'Omnichannel ðŸŒ',     'description' => 'Online + offline sales'],
        ]
    ],
    [
        'title' => 'Industry & Digital',
        'rows'  => [
            ['id' => 'smart_retail',     'title' => 'Smart Retail ðŸ¤–',    'description' => 'AI-powered retail'],
            ['id' => 'restaurant',       'title' => 'Restaurant ðŸ½ï¸',      'description' => 'POS, KOT & food operations'],
            ['id' => 'manufacturing',    'title' => 'Manufacturing ðŸ—ï¸',   'description' => 'Production & shop-floor'],
            ['id' => 'education',        'title' => 'Education ERP ðŸŽ“',   'description' => 'School & institution mgmt'],
            ['id' => 'digital_services', 'title' => 'Digital Services ðŸ’»','description' => 'Web, apps, SEO & software'],
        ]
    ]
];

// Digital Services Sub-List
$digitalSubSections = [
    [
        'title' => 'Digital Solutions',
        'rows'  => [
            ['id' => 'ds_web',    'title' => 'Web Development ðŸŒ',  'description' => 'Business & custom websites'],
            ['id' => 'ds_ecomm',  'title' => 'E-Commerce ðŸ›’',       'description' => 'Online stores & platforms'],
            ['id' => 'ds_mobile', 'title' => 'Mobile Apps ðŸ“±',      'description' => 'Android & iOS applications'],
            ['id' => 'ds_seo',    'title' => 'SEO & Marketing ðŸ“ˆ',  'description' => 'Search & digital growth'],
            ['id' => 'ds_social', 'title' => 'Social Media ðŸ“£',     'description' => 'Social media marketing'],
            ['id' => 'ds_custom', 'title' => 'Custom Software âš™ï¸',  'description' => 'Tailored business software'],
        ]
    ]
];

// =========================================================================
// FLOW 1: WELCOME / INITIAL GREETING
// =========================================================================
$isInitialGreeting = (
    empty($interactiveId) &&
    preg_match('/^(hi|hello|hey|namaste|start|hola|hy|hii|helo|hai|namaskar)$/i', $msgTrimmed)
);

if ($isInitialGreeting) {
    $greetingText = "ðŸ‘‹ *Welcome to Digify Soft Solutions!*\n\n"
                  . "We help businesses with POS, ERP, Inventory, CRM, AI & digital solutions.\n\n"
                  . "What would you like to do?";

    $r = send_whatsapp_interactive_buttons($targetPhone, $greetingText, $allThreeButtons, "Digify Soft Solutions", "Choose an option ðŸ‘‡");
    $sendResults[$targetPhone] = ['method' => 'greeting', 'send_status' => $r['success'] ? 'success' : 'failed', 'details' => $r['response']];
    echo json_encode(['status' => 'success', 'mode' => 'greeting', 'deliveries' => $sendResults]);
    exit;
}

// =========================================================================
// FLOW 2: EXPLORE SERVICES â€” 10-item Interactive List
// =========================================================================
$isMenuRequested = (
    in_array($interactiveId, ['btn_menu', 'btn_services', 'btn_explore']) ||
    preg_match('/^(menu|services|all services|explore|explore services|options|catalog|catalogue|solutions|products)$/i', $msgTrimmed)
);

if ($isMenuRequested) {
    $menuBody = "ðŸ“‹ *Explore Digify Solutions*\n\n"
              . "Choose what you need. I'll show you the most relevant solution for your business.";

    $r = send_whatsapp_interactive_list($targetPhone, "Digify Soft Solutions", $menuBody, "View Solutions", $catalogueSections, "Tap any solution to learn more");
    $sendResults[$targetPhone] = ['method' => 'explore_list', 'send_status' => $r['success'] ? 'success' : 'failed', 'details' => $r['response']];
    echo json_encode(['status' => 'success', 'mode' => 'interactive_menu', 'deliveries' => $sendResults]);
    exit;
}

// =========================================================================
// FLOW 3: DIGITAL SERVICES SUB-MENU
// =========================================================================
if ($interactiveId === 'digital_services') {
    $dsBody = "ðŸ’» *Digital Services*\n\n"
            . "We build digital solutions tailored to your business.\n\n"
            . "â€¢ Websites  â€¢ E-commerce  â€¢ Mobile Apps\n"
            . "â€¢ SEO & Marketing  â€¢ Social Media  â€¢ Custom Software\n\n"
            . "Which service do you need?";

    $r = send_whatsapp_interactive_list($targetPhone, "Digital Services", $dsBody, "Choose a Service", $digitalSubSections, "Select a digital solution");
    $sendResults[$targetPhone] = ['method' => 'digital_sub_menu', 'send_status' => $r['success'] ? 'success' : 'failed', 'details' => $r['response']];
    echo json_encode(['status' => 'success', 'mode' => 'digital_services_menu', 'deliveries' => $sendResults]);
    exit;
}

// =========================================================================
// FLOW 4: BOOK FREE DEMO
// =========================================================================
$isDemoRequested = (
    $interactiveId === 'btn_demo' ||
    preg_match('/\b(demo|book demo|free demo|book a demo|trial|schedule demo|book meeting)\b/i', $msgTrimmed)
);

if ($isDemoRequested) {
    $demoText = "ðŸŽ¯ *Book Your Free Demo*\n\n"
              . "Our team will understand your business and recommend the right Digify solution.\n\n"
              . "ðŸ“ž +91 7425016636\n"
              . "ðŸ‘¤ Lead Consultant: Gautam\n\n"
              . "Submit your requirement:\nhttps://www.digifysoft.in/contact-us.php\n\n"
              . "Ready to connect?";

    $r = send_whatsapp_interactive_buttons($targetPhone, $demoText, $demoButtons, "Digify Soft Solutions", "Next steps ðŸ‘‡");
    $sendResults[$targetPhone] = ['method' => 'demo_flow', 'send_status' => $r['success'] ? 'success' : 'failed', 'details' => $r['response']];
    echo json_encode(['status' => 'success', 'mode' => 'demo_flow', 'deliveries' => $sendResults]);
    exit;
}

// =========================================================================
// FLOW 5: CHAT WITH GAUTAM
// =========================================================================
$isGautamRequested = (
    $interactiveId === 'btn_gautam' ||
    preg_match('/\b(gautam|chat with gautam|talk to gautam|contact gautam|human|agent|support|person)\b/i', $msgTrimmed)
);

if ($isGautamRequested) {
    $gautamText = "ðŸ’¬ *Chat with Gautam*\n\n"
                . "Connect directly with Gautam, Lead Consultant at Digify Soft Solutions.\n\n"
                . "ðŸ“ž +91 7425016636\n\n"
                . "WhatsApp:\nhttps://wa.me/917425016636\n\n"
                . "He can help with requirements, solutions and demos.";

    $r = send_whatsapp_interactive_buttons($targetPhone, $gautamText, $gautamButtons, "Digify Soft Solutions", "Next steps ðŸ‘‡");
    $sendResults[$targetPhone] = ['method' => 'gautam_flow', 'send_status' => $r['success'] ? 'success' : 'failed', 'details' => $r['response']];
    echo json_encode(['status' => 'success', 'mode' => 'gautam_flow', 'deliveries' => $sendResults]);
    exit;
}

// =========================================================================
// FLOW 6: PRICING QUESTION
// =========================================================================
if (preg_match('/\b(price|pricing|cost|kitna|how much|rate|charges|fees|paisa|budget|quote|quotation)\b/i', $msgLower)) {
    $pricingText = "ðŸ’° *Pricing is requirement-based.*\n\n"
                 . "It depends on:\n"
                 . "â€¢ Modules  â€¢ Users  â€¢ Outlets\n"
                 . "â€¢ Integrations  â€¢ Customization\n\n"
                 . "Our team can give you an accurate recommendation after understanding your needs.\n\n"
                 . "Would you like a free demo?";

    $r = send_whatsapp_interactive_buttons($targetPhone, $pricingText, $pricingButtons, "Digify Soft Solutions", "Choose an option ðŸ‘‡");
    $sendResults[$targetPhone] = ['method' => 'pricing_flow', 'send_status' => $r['success'] ? 'success' : 'failed', 'details' => $r['response']];
    echo json_encode(['status' => 'success', 'mode' => 'pricing_flow', 'deliveries' => $sendResults]);
    exit;
}

// =========================================================================
// FLOW 7: SERVICE DETAIL CARDS
// Buttons: [Book Free Demo, Chat with Gautam] ONLY â€” zero redundancy
// =========================================================================
$serviceDetails = [
    'pos' => "âš¡ *Digify Smart POS*\n\nA complete POS solution for modern retail businesses.\n\nâœ“ Fast billing  âœ“ Barcode management\nâœ“ GST billing  âœ“ Inventory sync\nâœ“ Customer management  âœ“ Multi-store\nâœ“ AI-powered features\n\nLearn more:\nhttps://www.digifysoft.in/pos.php",

    'erp' => "ðŸš€ *Digify Cloud ERP*\n\nManage billing, inventory, accounting, CRM, GST and multi-location from one platform.\n\nâœ“ Multi-store  âœ“ Inventory & barcode\nâœ“ GST & accounting  âœ“ CRM & loyalty\nâœ“ E-commerce integration  âœ“ Dashboards\n\nLearn more:\nhttps://www.digifysoft.in/erp.php",

    'inventory' => "ðŸ“¦ *Inventory Management*\n\nTrack your stock across stores and warehouses with better visibility.\n\nâœ“ Real-time stock  âœ“ Barcode management\nâœ“ Purchase & sales  âœ“ Multi-location\nâœ“ Stock reports  âœ“ ERP integration\n\nLearn more:\nhttps://www.digifysoft.in/inventory.php",

    'crm' => "ðŸ‘¥ *CRM Solution*\n\nManage customers, interactions and loyalty from one connected system.\n\nâœ“ Customer database  âœ“ Sales tracking\nâœ“ Loyalty management  âœ“ Customer insights\nâœ“ CRM + ERP integration\n\nLearn more:\nhttps://www.digifysoft.in/crm.php",

    'omnichannel' => "ðŸŒ *Omnichannel ERP*\n\nConnect your physical stores and online business.\n\nâœ“ Multi-channel orders  âœ“ Inventory sync\nâœ“ Multi-warehouse  âœ“ Shopify / WooCommerce\nâœ“ CRM  âœ“ Order management\n\nLearn more:\nhttps://www.digifysoft.in/omnichannel.php",

    'smart_retail' => "ðŸ¤– *Smart Retail*\n\nUpgrade traditional retail with AI-powered technology.\n\nâœ“ Smart checkout  âœ“ Self-checkout\nâœ“ AI product detection  âœ“ Smart kiosks\nâœ“ Footfall analytics  âœ“ POS + CRM\n\nLearn more:\nhttps://www.digifysoft.in/smart-retail.php",

    'restaurant' => "ðŸ½ï¸ *Restaurant Solution*\n\nManage restaurant operations from billing to kitchen.\n\nâœ“ POS billing  âœ“ KOT / KDS\nâœ“ Recipe costing  âœ“ Inventory\nâœ“ Food operations  âœ“ Multi-outlet\n\nLearn more:\nhttps://www.digifysoft.in/restaurant.php",

    'manufacturing' => "ðŸ­ *Manufacturing ERP*\n\nManage production, materials and shop-floor operations.\n\nâœ“ Production planning  âœ“ BOM / MRP\nâœ“ Raw materials  âœ“ Inventory\nâœ“ Shop-floor tracking  âœ“ Reports\n\nLearn more:\nhttps://www.digifysoft.in/ai-manufacturing.php",

    'education' => "ðŸŽ“ *Education ERP*\n\nComplete management system for schools and institutions.\n\nâœ“ Student management  âœ“ Fee collection\nâœ“ Attendance tracking  âœ“ Result management\nâœ“ Library & transport  âœ“ Parent portal\n\nLearn more:\nhttps://www.digifysoft.in/education.php",

    'ds_web' => "ðŸŒ *Web Development*\n\nProfessional websites built for business growth.\n\nâœ“ Corporate websites  âœ“ Landing pages\nâœ“ Custom web portals  âœ“ Fast & SEO-ready\nâœ“ Mobile-responsive  âœ“ CMS integration\n\nLearn more:\nhttps://www.digifysoft.in/web-development-services.php",

    'ds_ecomm' => "ðŸ›’ *E-Commerce Development*\n\nBuild a powerful online store for your business.\n\nâœ“ Shopify & WooCommerce  âœ“ Custom stores\nâœ“ Payment integration  âœ“ Inventory sync\nâœ“ Order management  âœ“ Multi-vendor\n\nLearn more:\nhttps://www.digifysoft.in/e-commerce-website-development.php",

    'ds_mobile' => "ðŸ“± *Mobile App Development*\n\nNative Android & iOS apps for your business needs.\n\nâœ“ Android (Kotlin)  âœ“ iOS (Swift)\nâœ“ Flutter cross-platform  âœ“ Offline-capable\nâœ“ POS apps  âœ“ Delivery & field apps\n\nLearn more:\nhttps://www.digifysoft.in/android-application.php",

    'ds_seo' => "ðŸ“ˆ *SEO & Digital Marketing*\n\nGet found on Google and grow your business online.\n\nâœ“ Technical & On-Page SEO  âœ“ Local SEO\nâœ“ Google Ads  âœ“ Backlink building\nâœ“ Keyword ranking  âœ“ Monthly reports\n\nLearn more:\nhttps://www.digifysoft.in/search-engine-optimization.php",

    'ds_social' => "ðŸ“£ *Social Media Marketing*\n\nBuild your brand across Instagram, Facebook & LinkedIn.\n\nâœ“ Content creation  âœ“ Post scheduling\nâœ“ Paid ad campaigns  âœ“ Follower growth\nâœ“ Engagement strategy  âœ“ Analytics\n\nLearn more:\nhttps://www.digifysoft.in/social-media-optimization.php",

    'ds_custom' => "âš™ï¸ *Custom Software Development*\n\nTailored business software built to your exact needs.\n\nâœ“ Custom ERP / CRM  âœ“ Web portals\nâœ“ API integrations  âœ“ Automation tools\nâœ“ Legacy system upgrades  âœ“ SaaS\n\nLearn more:\nhttps://www.digifysoft.in/web-development-services.php",
];

// Legacy IDs from old catalogue â†’ map to new IDs
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

// Resolve matched service key
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
    if      (preg_match('/\b(smart pos|pos|billing|retail billing|kirana|supermarket|barcode billing|dukan)\b/i', $msgLower))     $matchedKey = 'pos';
    elseif  (preg_match('/\b(cloud erp|erp|enterprise resource|multi.store erp|accounts erp|tally)\b/i', $msgLower))             $matchedKey = 'erp';
    elseif  (preg_match('/\b(inventory|stock|warehouse|godown|stock management|maal)\b/i', $msgLower))                           $matchedKey = 'inventory';
    elseif  (preg_match('/\b(crm|customer management|loyalty program|customer database)\b/i', $msgLower))                        $matchedKey = 'crm';
    elseif  (preg_match('/\b(omnichannel|omni.channel|online.*offline|shopify.*erp)\b/i', $msgLower))                            $matchedKey = 'omnichannel';
    elseif  (preg_match('/\b(smart retail|ai.*retail|self.?checkout|footfall|ai checkout)\b/i', $msgLower))                      $matchedKey = 'smart_retail';
    elseif  (preg_match('/\b(restaurant|hotel|food|kitchen|kot|kds|recipe|dhaba|cafe)\b/i', $msgLower))                          $matchedKey = 'restaurant';
    elseif  (preg_match('/\b(manufacturing|factory|production|bom|mrp|shop.floor|udyog)\b/i', $msgLower))                        $matchedKey = 'manufacturing';
    elseif  (preg_match('/\b(education|school|college|institution|student|fees management|institute)\b/i', $msgLower))           $matchedKey = 'education';
    elseif  (preg_match('/\b(ecommerce|e-commerce|online store|shopify|woocommerce|online shop)\b/i', $msgLower))                $matchedKey = 'ds_ecomm';
    elseif  (preg_match('/\b(mobile app|android app|ios app|flutter|app development|app banao)\b/i', $msgLower))                 $matchedKey = 'ds_mobile';
    elseif  (preg_match('/\b(seo|google ranking|search engine|google ads|digital marketing)\b/i', $msgLower))                    $matchedKey = 'ds_seo';
    elseif  (preg_match('/\b(social media|instagram|facebook|linkedin|smm|social marketing)\b/i', $msgLower))                    $matchedKey = 'ds_social';
    elseif  (preg_match('/\b(website|web development|web portal|landing page|site banao)\b/i', $msgLower))                       $matchedKey = 'ds_web';
    elseif  (preg_match('/\b(custom software|custom erp|custom crm|tailored software|software banana)\b/i', $msgLower))          $matchedKey = 'ds_custom';
    elseif  (preg_match('/\b(digital service|digital solution|web.*app.*seo)\b/i', $msgLower))                                   $matchedKey = 'digital_services';
}

// Digital Services â†’ open sub-list instead of detail card
if ($matchedKey === 'digital_services') {
    $dsBody = "ðŸ’» *Digital Services*\n\n"
            . "We build digital solutions tailored to your business.\n\n"
            . "â€¢ Websites  â€¢ E-commerce  â€¢ Mobile Apps\n"
            . "â€¢ SEO & Marketing  â€¢ Social Media  â€¢ Custom Software\n\n"
            . "Which service do you need?";

    $r = send_whatsapp_interactive_list($targetPhone, "Digital Services", $dsBody, "Choose a Service", $digitalSubSections, "Select a digital solution");
    $sendResults[$targetPhone] = ['method' => 'digital_sub_menu', 'send_status' => $r['success'] ? 'success' : 'failed', 'details' => $r['response']];
    echo json_encode(['status' => 'success', 'mode' => 'digital_services_menu', 'deliveries' => $sendResults]);
    exit;
}

// Send service detail card
if ($matchedKey && isset($serviceDetails[$matchedKey])) {
    $r = send_whatsapp_interactive_buttons(
        $targetPhone, $serviceDetails[$matchedKey], $serviceButtons,
        "Digify Soft Solutions", "Next step ðŸ‘‡"
    );
    $sendResults[$targetPhone] = ['method' => 'service_detail', 'service' => $matchedKey, 'send_status' => $r['success'] ? 'success' : 'failed', 'details' => $r['response']];
    echo json_encode(['status' => 'success', 'mode' => 'service_buttons', 'deliveries' => $sendResults]);
    exit;
}

// =========================================================================
// FLOW 8: FREE-TEXT AI FALLBACK â€” Consultative, short, qualifying
// =========================================================================
$apiKey = getenv('GROQ_API_KEY') ?: (getenv('CHAT_API_KEY') ?: (defined('GROQ_API_KEY') ? GROQ_API_KEY : (defined('CHAT_API_KEY') ? CHAT_API_KEY : '')));

$systemPromptContent = <<<PROMPT
You are Digify Saathi, WhatsApp AI assistant for Digify Soft Solutions (+91 7425016636, Consultant: Gautam).

YOUR ROLE: Warm, smart business consultant. Quickly understand the customer's business problem and guide them toward a free demo with Gautam.

RESPONSE RULES â€” STRICT:
1. Reply in 80 to 180 words MAX. Short, punchy, scannable. No walls of text.
2. Use bullet points if listing things. WhatsApp bold = *single asterisk*.
3. Detect the customer's business type (retail, restaurant, manufacturing, school, website etc.) and name the right Digify solution.
4. Ask exactly ONE qualifying follow-up question to continue the conversation.
5. Always end by inviting them to book a free demo or WhatsApp Gautam: +91 7425016636.
6. NEVER cut off mid-sentence. Always complete your thought.
7. Language: Hindi/Hinglish input â†’ reply in natural Hinglish. English input â†’ reply in English.

DIGIFY SOLUTIONS (for reference):
POS â†’ digifysoft.in/pos.php | ERP â†’ digifysoft.in/erp.php | Inventory â†’ digifysoft.in/inventory.php
CRM â†’ digifysoft.in/crm.php | Restaurant â†’ digifysoft.in/restaurant.php | Manufacturing â†’ digifysoft.in/ai-manufacturing.php
Education ERP â†’ digifysoft.in/education.php | Smart Retail â†’ digifysoft.in/smart-retail.php
Web/Apps/SEO â†’ digifysoft.in/web-development-services.php
PROMPT;

$messages = [
    ['role' => 'system', 'content' => $systemPromptContent],
    ['role' => 'user',   'content' => (string)$userMessage]
];

function queryGroqAI($apiKey, $messages) {
    if (empty($apiKey)) return null;
    $models  = ['openai/gpt-oss-120b', 'openai/gpt-oss-20b'];
    $groqUrl = 'https://api.groq.com/openai/v1/chat/completions';

    foreach ($models as $model) {
        $payload = ['model' => $model, 'messages' => $messages, 'temperature' => 0.65, 'max_tokens' => 300];
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
    $replyText = "ðŸ‘‹ *Hi! I'm Digify Saathi.*\n\n"
               . "We help businesses with:\n"
               . "â€¢ POS & ERP  â€¢ Inventory & CRM\n"
               . "â€¢ Restaurants & Manufacturing\n"
               . "â€¢ Websites, Apps & SEO\n\n"
               . "Tell me your business type and I'll suggest the right solution. ðŸ˜Š";
}

// AI replies use all 3 buttons so user can navigate anywhere
$r = send_whatsapp_interactive_buttons($targetPhone, $replyText, $allThreeButtons, "Digify Soft Solutions", "Choose an option ðŸ‘‡");
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
@file_put_contents($logFile, date('Y-m-d H:i:s') . " - Result: " . json_encode($resultData) . "\n\n", FILE_APPEND);
echo json_encode($resultData);
