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

// If no valid message or sender found, exit gracefully
if (empty($sender) || empty($userMessage)) {
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
            $text = mb_substr($trimmed, 0, $lastPunct, 'UTF-8') . "\n\n📞 *Call / WhatsApp Gautam:* +91 7425016636\n🌐 digifysoft.in";
        }
    }

    return trim($text);
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

// 1. Full 10-Service Catalogue Definition (Meta 24-character title compliant)
$catalogueSections = [
    [
        'title' => 'Business Software',
        'rows'  => [
            [
                'id'          => 'srv_erp',
                'title'       => 'Cloud ERP Suite 🏭',
                'description' => 'Multi-warehouse inventory, BOM, GST & accounts'
            ],
            [
                'id'          => 'srv_pos',
                'title'       => 'Smart Cloud POS ⚡',
                'description' => '3-sec offline billing, barcode & thermal printer'
            ],
            [
                'id'          => 'srv_crm',
                'title'       => 'Custom CRM Suite 🎯',
                'description' => 'Automated sales pipelines, leads & WhatsApp CRM'
            ],
            [
                'id'          => 'srv_after_sales',
                'title'       => 'After-Sales & AMC 🛠️',
                'description' => 'Service tickets, warranty & technician tracking'
            ]
        ]
    ],
    [
        'title' => 'AI & Lead Generation',
        'rows'  => [
            [
                'id'          => 'srv_ai_ocr',
                'title'       => 'AI OCR Bill Scanner 🤖',
                'description' => 'Auto purchase bill extraction & ERP posting'
            ],
            [
                'id'          => 'srv_lead_gen',
                'title'       => 'B2B Lead Generation 🚀',
                'description' => 'Verified corporate leads & automated campaigns'
            ]
        ]
    ],
    [
        'title' => 'Development & SEO',
        'rows'  => [
            [
                'id'          => 'srv_app_dev',
                'title'       => 'Mobile App Dev 📱',
                'description' => 'Native Android Kotlin, iOS & Flutter apps'
            ],
            [
                'id'          => 'srv_web_dev',
                'title'       => 'Web & E-Commerce 🌐',
                'description' => 'High-speed business sites, Shopify & portals'
            ],
            [
                'id'          => 'srv_seo_smo',
                'title'       => 'SEO & Growth 📈',
                'description' => 'Google #1 ranking, technical SEO & SMO'
            ],
            [
                'id'          => 'srv_email_bimi',
                'title'       => 'Email Deliverability 📧',
                'description' => 'BIMI branding, DMARC, SPF & inbox placement'
            ]
        ]
    ]
];

// Button Definitions
$btnDemo    = ['id' => 'btn_demo',   'title' => 'Book Free Demo 📞'];
$btnExplore = ['id' => 'btn_menu',   'title' => 'Explore Services 📋'];
$btnGautam  = ['id' => 'btn_gautam', 'title' => 'Chat with Gautam 💬'];

// Standard 3 buttons for initial greeting and general inquiries
$allThreeButtons = [$btnDemo, $btnExplore, $btnGautam];

$targetPhone = preg_replace('/\D/', '', (string)$sender);
$sendResults = [];

$msgTrimmed = trim((string)$userMessage);
$msgLower   = strtolower($msgTrimmed);

// =========================================================================
// FLOW 1: INITIAL GREETING ("Hi", "Hello", "Namaste", "Hey", "Start")
// -> Welcome intro with ALL 3 buttons
// =========================================================================
$isInitialGreeting = (empty($interactiveId) && preg_match('/^(hi|hello|hey|namaste|start|hola)$/i', $msgTrimmed));

if ($isInitialGreeting) {
    $greetingText = "🙏 *Namaste! Welcome to Digify Soft Solutions.*\n\n"
                  . "Hum deliver karte hain High-Performance Cloud ERP, Smart POS, Custom Mobile Apps, Modern Websites, AI OCR Bill Automation, aur Email Deliverability solutions.\n\n"
                  . "🌐 *Official Website:* https://digifysoft.in\n\n"
                  . "Aap kaise explore karna chahenge? Niche diye gaye option par tap karein 👇";

    $btnResult = send_whatsapp_interactive_buttons(
        $targetPhone,
        $greetingText,
        $allThreeButtons,
        "Digify Soft Solutions",
        "Select an option 👇"
    );

    $sendResults[$targetPhone] = [
        "method"      => "greeting_buttons",
        "send_status" => $btnResult['success'] ? 'success' : 'failed',
        "details"     => $btnResult['response']
    ];

    echo json_encode(["status" => "success", "mode" => "greeting", "deliveries" => $sendResults]);
    exit;
}

// =========================================================================
// FLOW 2: EXPLORE SERVICES REQUEST (btn_menu or keywords "services", "menu")
// -> Sends 10-Service Interactive List Menu
// =========================================================================
$isMenuRequested = ($interactiveId === 'btn_menu' || $interactiveId === 'btn_services' || preg_match('/^(menu|services|all services|explore|explore services|options|catalog)$/i', $msgTrimmed));

if ($isMenuRequested) {
    $menuBody = "🙏 Hamare sabhi enterprise software aur digital growth solutions neeche diye gaye hain.\n\n"
              . "Kisi bhi service ki feature details aur official website link dekhne ke liye menu me se choose karein 👇";

    $listResult = send_whatsapp_interactive_list(
        $targetPhone,
        "Digify Soft Solutions",
        $menuBody,
        "View All Services 📋",
        $catalogueSections,
        "Select any solution"
    );

    $sendResults[$targetPhone] = [
        "method"      => "interactive_list_menu",
        "send_status" => $listResult['success'] ? 'success' : 'failed',
        "details"     => $listResult['response']
    ];

    echo json_encode(["status" => "success", "mode" => "interactive_menu", "deliveries" => $sendResults]);
    exit;
}

// =========================================================================
// FLOW 3: BOOK FREE DEMO (btn_demo or keyword "demo", "book demo")
// -> Demo link https://digifysoft.in/contact-us.php
// -> Buttons: ONLY [Explore Services, Chat with Gautam] (Book Demo omitted)
// =========================================================================
$isDemoRequested = ($interactiveId === 'btn_demo' || preg_match('/^(demo|book demo|free demo|book a demo|trial|schedule demo)$/i', $msgTrimmed));

if ($isDemoRequested) {
    $demoText = "📞 *Book Free Live Demo - Digify Soft Solutions*\n\n"
              . "Hamari technical team aapke business requirements ke mutabiq personalized screen-share demo arrange karegi:\n\n"
              . "🔗 *Online Demo Booking Form:*\n"
              . "👉 https://digifysoft.in/contact-us.php\n\n"
              . "Aap direct call ya WhatsApp par bhi instant slot confirm kar sakte hain:\n"
              . "👤 *Consultant:* Gautam (+91 7425016636)\n"
              . "⏰ *Timing:* Mon - Sat (10:00 AM - 8:00 PM IST)\n\n"
              . "Aap website form par slot book kar sakte hain ya yahan apna preferred time share karein!";

    // Remaining buttons: Explore Services + Chat with Gautam
    $demoButtons = [$btnExplore, $btnGautam];

    $btnResult = send_whatsapp_interactive_buttons(
        $targetPhone,
        $demoText,
        $demoButtons,
        "Digify Soft Solutions",
        "Next steps 👇"
    );

    $sendResults[$targetPhone] = [
        "method"      => "demo_buttons",
        "send_status" => $btnResult['success'] ? 'success' : 'failed',
        "details"     => $btnResult['response']
    ];

    echo json_encode(["status" => "success", "mode" => "demo_flow", "deliveries" => $sendResults]);
    exit;
}

// =========================================================================
// FLOW 4: CHAT WITH GAUTAM (btn_gautam or keyword "gautam", "human", "talk")
// -> Gautam contact details + direct WhatsApp wa.me link
// -> Buttons: ONLY [Book Free Demo, Explore Services] (Chat with Gautam omitted)
// =========================================================================
$isGautamRequested = ($interactiveId === 'btn_gautam' || preg_match('/^(gautam|chat with gautam|talk to gautam|contact gautam|human|talk to human|support)$/i', $msgTrimmed));

if ($isGautamRequested) {
    $gautamText = "💬 *Connect Directly with Gautam (Digify Soft Solutions)*\n\n"
                . "Project discussion, software customization, pricing ya technical architecture ke liye direct baat karein:\n\n"
                . "📱 *Call / WhatsApp:* +91 7425016636\n"
                . "💬 *1-Click WhatsApp:* https://wa.me/917425016636\n"
                . "📧 *Email:* webdev.digifysoft@gmail.com\n"
                . "🌐 *Website:* https://digifysoft.in\n"
                . "📍 *Offices:* Noida (Gaur City) | Jaipur | Bhopal\n\n"
                . "Aap yahan apna project brief ya phone number chhod sakte hain, Gautam personally revert karenge.";

    // Remaining buttons: Book Free Demo + Explore Services
    $gautamButtons = [$btnDemo, $btnExplore];

    $btnResult = send_whatsapp_interactive_buttons(
        $targetPhone,
        $gautamText,
        $gautamButtons,
        "Digify Soft Solutions",
        "Next steps 👇"
    );

    $sendResults[$targetPhone] = [
        "method"      => "gautam_buttons",
        "send_status" => $btnResult['success'] ? 'success' : 'failed',
        "details"     => $btnResult['response']
    ];

    echo json_encode(["status" => "success", "mode" => "gautam_flow", "deliveries" => $sendResults]);
    exit;
}

// =========================================================================
// FLOW 5: SPECIFIC SERVICE DETAILS
// -> Feature summary + Embedded Website URL
// -> Buttons: ONLY [Book Free Demo, Chat with Gautam] (Explore Services omitted!)
// =========================================================================
$serviceDetails = [
    'srv_erp' => [
        'title' => "🏭 *Digify Cloud ERP*",
        'text'  => "🏭 *Digify Cloud ERP Platform*\n\n"
                 . "Manufacturing, Wholesale, Retail & Distribution operations ka complete cloud suite:\n\n"
                 . "• *Multi-Warehouse Inventory:* Real-time stock alerts, batch & expiry tracking.\n"
                 . "• *BOM & Manufacturing:* Raw material planning, work orders & unit costing.\n"
                 . "• *GST, E-Invoicing & Accounts:* Direct compliance, E-Way bills & ZATCA Phase 2.\n"
                 . "• *Sales & Purchase:* Automated PO/GRN, vendor portal & customer ledgers.\n\n"
                 . "🔗 *Product Details & Specs:*\n👉 https://digifysoft.in/erp.php\n\n"
                 . "👉 *Aage badhne ke liye option select karein:*"
    ],
    'srv_pos' => [
        'title' => "⚡ *Digify Smart POS*",
        'text'  => "⚡ *Digify Smart Cloud POS Software*\n\n"
                 . "Supermarket, Kirana, Garments & Retail counters ke liye high-speed billing system:\n\n"
                 . "• *3-Second Billing:* Lightning fast barcode scan & thermal printing.\n"
                 . "• *Offline-First Mode:* Internet band hone par bhi non-stop billing & auto sync.\n"
                 . "• *Hardware Ready:* Weighing scale, barcode scanner, cash drawer & dual display.\n"
                 . "• *Loyalty & Multi-Price:* MRP vs Wholesale pricing, loyalty points.\n\n"
                 . "🔗 *Product Details & Specs:*\n👉 https://digifysoft.in/pos.php\n\n"
                 . "👉 *Aage badhne ke liye option select karein:*"
    ],
    'srv_crm' => [
        'title' => "🎯 *Digify Custom CRM*",
        'text'  => "🎯 *Digify Custom CRM & Sales Pipeline*\n\n"
                 . "Inbound aur outbound sales pipelines ko automate karke revenue grow karein:\n\n"
                 . "• *Multi-Channel Lead Sync:* Website, WhatsApp, IndiaMART, Facebook leads auto-capture.\n"
                 . "• *Automated Follow-ups:* Smart WhatsApp & Email drip campaigns.\n"
                 . "• *Deal Pipeline:* Stage-wise sales tracking, team performance & instant quotes.\n\n"
                 . "🔗 *Product Details & Specs:*\n👉 https://digifysoft.in/custom-crm-solutions.php\n\n"
                 . "👉 *Aage badhne ke liye option select karein:*"
    ],
    'srv_after_sales' => [
        'title' => "🛠️ *Digify After-Sales & AMC*",
        'text'  => "🛠️ *After-Sales, AMC & Warranty Management*\n\n"
                 . "Electronics, machinery aur equipment brands ke service operations automate karein:\n\n"
                 . "• *Serial / IMEI Tracking:* Product purchase date & warranty status verification.\n"
                 . "• *Service Tickets:* Complaint booking & automated technician job-sheets.\n"
                 . "• *AMC Contracts:* Annual contract renewal alerts & preventive maintenance.\n\n"
                 . "🔗 *Product Details & Specs:*\n👉 https://digifysoft.in/After-Sale-Service.php\n\n"
                 . "👉 *Aage badhne ke liye option select karein:*"
    ],
    'srv_ai_ocr' => [
        'title' => "🤖 *AI OCR Bill Scanner*",
        'text'  => "🤖 *Digify AI OCR Bill & Invoice Scanner*\n\n"
                 . "Purchase bills aur invoices ki manual entry hamesha ke liye band karein:\n\n"
                 . "• *Instant Extraction:* PDF ya photo upload karte hi item name, qty, rate, GST auto-read.\n"
                 . "• *Zero Manual Error:* 99.8% extraction accuracy with AI verification.\n"
                 . "• *Direct ERP & Tally Sync:* Direct purchase voucher create ho jata hai bina typing ke.\n\n"
                 . "🔗 *Product Details & Specs:*\n👉 https://digifysoft.in/ai-ocr.php\n\n"
                 . "👉 *Aage badhne ke liye option select karein:*"
    ],
    'srv_lead_gen' => [
        'title' => "🚀 *B2B Lead Generation*",
        'text'  => "🚀 *Digify B2B Lead Generation & Outreach*\n\n"
                 . "Apne business ke liye high-intent verified corporate clients generate karein:\n\n"
                 . "• *Verified Decision Makers:* Pan-India business owners, purchase heads & directors.\n"
                 . "• *Targeted Segments:* City, industry & turnover based verified database.\n"
                 . "• *WhatsApp Outreach:* 1-click broadcast templates with verified delivery.\n\n"
                 . "🔗 *Product Details & Specs:*\n👉 https://digifysoft.in/lead-management.php\n\n"
                 . "👉 *Aage badhne ke liye option select karein:*"
    ],
    'srv_app_dev' => [
        'title' => "📱 *Custom Mobile Apps*",
        'text'  => "📱 *Mobile Application Development (iOS & Android)*\n\n"
                 . "High-performance enterprise aur consumer mobile applications:\n\n"
                 . "• *Native Android:* Kotlin & Java, offline DB, high-speed execution.\n"
                 . "• *Native iOS:* Swift & SwiftUI, Apple App Store standard security.\n"
                 . "• *Cross-Platform:* Flutter & React Native for cost-effective development.\n"
                 . "• *Solutions:* Tablet POS Apps, B2B Dealer Apps, Delivery & Field Sales Apps.\n\n"
                 . "🔗 *Portfolio & Case Studies:*\n👉 https://digifysoft.in/android-application.php\n\n"
                 . "👉 *Aage badhne ke liye option select karein:*"
    ],
    'srv_web_dev' => [
        'title' => "🌐 *Web & E-Commerce Development*",
        'text'  => "🌐 *Modern Web & E-Commerce Development*\n\n"
                 . "Ultra-fast, high-converting corporate websites aur e-commerce portals:\n\n"
                 . "• *Corporate Websites:* Next.js / PHP, sleek modern UI, super-fast loading.\n"
                 . "• *E-Commerce Portals:* Custom Shopify, WooCommerce ya Full-Stack MERN.\n"
                 . "• *ERP / POS Sync:* Website par live inventory aur auto order billing.\n\n"
                 . "🔗 *Services & Portfolio:*\n👉 https://digifysoft.in/web-development-services.php\n\n"
                 . "👉 *Aage badhne ke liye option select karein:*"
    ],
    'srv_seo_smo' => [
        'title' => "📈 *SEO & Digital Growth*",
        'text'  => "📈 *SEO & Digital Marketing Services*\n\n"
                 . "Google par Top #1 Ranking aur consistent organic business leads:\n\n"
                 . "• *Technical & On-Page SEO:* Core Web Vitals, speed optimization, schema markup.\n"
                 . "• *High-Authority Backlinks:* Off-page SEO aur domain authority boost.\n"
                 . "• *Local SEO & Maps:* Local city commercial searches me top ranking.\n\n"
                 . "🔗 *SEO Packages & Details:*\n👉 https://digifysoft.in/digital-marketing-services.php\n\n"
                 . "👉 *Aage badhne ke liye option select karein:*"
    ],
    'srv_email_bimi' => [
        'title' => "📧 *Email Deliverability & BIMI*",
        'text'  => "📧 *Email Deliverability & BIMI Branding*\n\n"
                 . "Corporate emails ko Spam se bacha kar direct Primary Inbox me layein:\n\n"
                 . "• *BIMI Setup with VMC:* Gmail me company ka blue checkmark & verified logo.\n"
                 . "• *SPF, DKIM & DMARC (p=reject):* Complete domain spoofing protection.\n"
                 . "• *99% Inbox Delivery:* Blacklist removal & sender domain reputation recovery.\n\n"
                 . "🔗 *Email Services & Pricing:*\n👉 https://digifysoft.in/business-email-branding-bimi.php\n\n"
                 . "👉 *Aage badhne ke liye option select karein:*"
    ]
];

// Check if matched service ID or keyword in user message
$matchedKey = null;
if (!empty($interactiveId) && isset($serviceDetails[$interactiveId])) {
    $matchedKey = $interactiveId;
} else {
    if (strpos($msgLower, 'erp') !== false) $matchedKey = 'srv_erp';
    elseif (strpos($msgLower, 'pos') !== false || strpos($msgLower, 'billing') !== false) $matchedKey = 'srv_pos';
    elseif (strpos($msgLower, 'ocr') !== false || strpos($msgLower, 'bill scan') !== false || strpos($msgLower, 'invoice') !== false) $matchedKey = 'srv_ai_ocr';
    elseif (strpos($msgLower, 'crm') !== false || strpos($msgLower, 'lead management') !== false) $matchedKey = 'srv_crm';
    elseif (strpos($msgLower, 'lead') !== false || strpos($msgLower, 'b2b') !== false) $matchedKey = 'srv_lead_gen';
    elseif (strpos($msgLower, 'app') !== false || strpos($msgLower, 'android') !== false || strpos($msgLower, 'ios') !== false) $matchedKey = 'srv_app_dev';
    elseif (strpos($msgLower, 'web') !== false || strpos($msgLower, 'website') !== false || strpos($msgLower, 'ecommerce') !== false || strpos($msgLower, 'shopify') !== false) $matchedKey = 'srv_web_dev';
    elseif (strpos($msgLower, 'seo') !== false || strpos($msgLower, 'ranking') !== false || strpos($msgLower, 'marketing') !== false) $matchedKey = 'srv_seo_smo';
    elseif (strpos($msgLower, 'email') !== false || strpos($msgLower, 'bimi') !== false || strpos($msgLower, 'dmarc') !== false || strpos($msgLower, 'inbox') !== false) $matchedKey = 'srv_email_bimi';
    elseif (strpos($msgLower, 'after-sales') !== false || strpos($msgLower, 'amc') !== false || strpos($msgLower, 'warranty') !== false || strpos($msgLower, 'service ticket') !== false) $matchedKey = 'srv_after_sales';
}

if ($matchedKey && isset($serviceDetails[$matchedKey])) {
    // Buttons under service detail: Strictly [Book Free Demo, Chat with Gautam]
    // "Explore Services" is intentionally removed as user is already viewing the service!
    $serviceActionButtons = [$btnDemo, $btnGautam];

    $btnResult = send_whatsapp_interactive_buttons(
        $targetPhone,
        $serviceDetails[$matchedKey]['text'],
        $serviceActionButtons,
        "Digify Soft Solutions",
        "Select next step 👇"
    );

    $sendResults[$targetPhone] = [
        "method"      => "interactive_buttons_service",
        "service"     => $matchedKey,
        "send_status" => $btnResult['success'] ? 'success' : 'failed',
        "details"     => $btnResult['response']
    ];

    echo json_encode(["status" => "success", "mode" => "service_buttons", "deliveries" => $sendResults]);
    exit;
}

// =========================================================================
// FLOW 6: FREE-FORM CONSULTATIVE INQUIRY VIA GROQ AI (openai/gpt-oss-120b)
// =========================================================================
$apiKey = getenv('GROQ_API_KEY') ?: (getenv('CHAT_API_KEY') ?: (defined('GROQ_API_KEY') ? GROQ_API_KEY : (defined('CHAT_API_KEY') ? CHAT_API_KEY : '')));

$systemPromptContent = <<<PROMPT
You are Digify Saathi, official WhatsApp AI Assistant for Digify Soft Solutions (+91 7425016636).
You are responding directly on WhatsApp. Your tone is warm, polite, consultative, ultra-smart, and engaging.

LANGUAGE:
- If customer writes in Hindi/Hinglish, reply in natural, polished Hinglish. If in English, reply in crisp English.
- Use emojis elegantly, bullet points, and WhatsApp bold with single asterisks (*word*).

OFFICIAL WEBSITE REFERENCE LINKS:
- Main Website: https://digifysoft.in
- Demo / Contact Form: https://digifysoft.in/contact-us.php
- Cloud ERP: https://digifysoft.in/erp.php
- Smart Cloud POS: https://digifysoft.in/pos.php
- AI OCR Bill Scanner: https://digifysoft.in/ai-ocr.php
- Custom CRM & Leads: https://digifysoft.in/custom-crm-solutions.php
- Mobile App Dev: https://digifysoft.in/android-application.php
- Web & E-Commerce: https://digifysoft.in/web-development-services.php
- SEO & Digital Marketing: https://digifysoft.in/digital-marketing-services.php
- Email Deliverability & BIMI: https://digifysoft.in/business-email-branding-bimi.php
- After-Sales & Warranty (AMC): https://digifysoft.in/After-Sale-Service.php

CRITICAL META LENGTH RULES:
- Keep answers self-contained and punchy (100 to 200 words).
- Embed the relevant website link from above so the customer can check full details on the site.
- NEVER cut off mid-sentence. Always finish your thoughts completely.
- Conclude with an invitation to book a free demo or connect with Gautam (+91 7425016636).
PROMPT;

$messages = [
    ["role" => "system", "content" => $systemPromptContent],
    ["role" => "user",   "content" => (string)$userMessage]
];

function queryGroqAI($apiKey, $messages) {
    if (empty($apiKey)) return null;

    $models = [
        "openai/gpt-oss-120b",
        "openai/gpt-oss-20b"
    ];
    $groqUrl = "https://api.groq.com/openai/v1/chat/completions";

    foreach ($models as $model) {
        $payload = [
            "model"       => $model,
            "messages"    => $messages,
            "temperature" => 0.6,
            "max_tokens"  => 800
        ];

        $ch = curl_init($groqUrl);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($payload));
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_IPRESOLVE, CURL_IPRESOLVE_V4);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 6);
        curl_setopt($ch, CURLOPT_TIMEOUT, 14);
        curl_setopt($ch, CURLOPT_HTTPHEADER, [
            'Content-Type: application/json',
            'Authorization: Bearer ' . $apiKey
        ]);
        $res = curl_exec($ch);
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
    $replyText = "🙏 *Namaste! Main Digify Saathi hoon.*\n\n"
               . "Digify Soft Solutions ke complete enterprise products:\n"
               . "• *Cloud ERP & Smart POS:* Inventory, BOM, 3-sec offline billing\n"
               . "• *AI OCR Bill Scanner:* Auto invoice data extraction\n"
               . "• *Mobile & Web Apps:* Native Android, iOS, Shopify & portals\n"
               . "• *Email BIMI & SEO:* 100% Inbox placement & Google #1 ranking\n\n"
               . "👉 *Demo ke liye sampark karein:*\n"
               . "📞 Call/WhatsApp: *+91 7425016636* (Gautam)";
}

// Send AI reply with Quick Reply Buttons so the customer can continue exploring!
$btnResult = send_whatsapp_interactive_buttons(
    $targetPhone,
    $replyText,
    $allThreeButtons,
    "Digify Soft Solutions",
    "Select an option 👇"
);

if ($btnResult['success']) {
    $sendResults[$targetPhone] = [
        "method"      => "v6_interactive_buttons",
        "send_status" => "success",
        "details"     => $btnResult['response']
    ];
} else {
    // Fallback to text session message
    $v6Result = send_whatsapp_session_message($targetPhone, $replyText);
    $sendResults[$targetPhone] = [
        "method"      => "v6_session_fallback",
        "send_status" => $v6Result['success'] ? 'success' : 'failed',
        "details"     => $v6Result['response']
    ];
}

$resultData = [
    "status"         => "success",
    "target_phone"   => $targetPhone,
    "user_message"   => $userMessage,
    "reply"          => $replyText,
    "deliveries"     => $sendResults
];

@file_put_contents($logFile, date('Y-m-d H:i:s') . " - Result: " . json_encode($resultData) . "\n\n", FILE_APPEND);

echo json_encode($resultData);
