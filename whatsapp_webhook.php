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

// Standard follow-up quick reply buttons
$standardButtons = [
    ['id' => 'btn_demo',   'title' => 'Book Free Demo 📞'],
    ['id' => 'btn_menu',   'title' => 'Explore Services 📋'],
    ['id' => 'btn_gautam', 'title' => 'Chat with Gautam 💬']
];

$targetPhone = preg_replace('/\D/', '', (string)$sender);
$sendResults = [];

// CHECK 1: If Greeting or Main Menu requested -> Send 10-Solution Interactive Menu
$isGreetingOrMenu = preg_match('/^(hi|hello|hey|namaste|menu|services|start|help|options)$/i', trim((string)$userMessage)) || in_array($interactiveId, ['btn_menu', 'btn_services']);

if ($isGreetingOrMenu) {
    $menuBody = "Namaste! 🙏 Welcome to *Digify Soft Solutions*.\n\n"
              . "Hum provide karte hain complete Enterprise Software, AI Automation, Mobile App & Web Development services.\n\n"
              . "Niche diye gaye button par click karke hamari poori services list dekhein 👇";

    $listResult = send_whatsapp_interactive_list(
        $targetPhone,
        "Digify Soft Solutions",
        $menuBody,
        "Explore Services 📋",
        $catalogueSections,
        "Official Digify Saathi Menu"
    );

    $sendResults[$targetPhone] = [
        "method"      => "interactive_list_menu",
        "send_status" => $listResult['success'] ? 'success' : 'failed',
        "details"     => $listResult['response']
    ];

    echo json_encode(["status" => "success", "mode" => "interactive_menu", "deliveries" => $sendResults]);
    exit;
}

// CHECK 2: Specific Service Details by ID or Keyword
$serviceDetails = [
    'srv_erp' => [
        'title' => "🏭 *Digify Cloud ERP Suite*",
        'text'  => "🏭 *Digify AI Cloud ERP Platform*\n\n"
                 . "Complete operations suite for Retail, Wholesale, Distribution & Factories:\n\n"
                 . "• *Multi-Warehouse Inventory:* Real-time stock alerts, batch & expiry tracking.\n"
                 . "• *BOM & Manufacturing:* Raw material planning, production orders & unit costing.\n"
                 . "• *GST, E-Invoicing & Tally Sync:* Automated compliance, E-Way bills & ZATCA Phase 2.\n"
                 . "• *Sales & Purchasing:* PO/GRN, vendor portal, customer ledger.\n"
                 . "• *HR & Payroll:* Biometric sync, salary slips, attendance management.\n\n"
                 . "👉 *Live Demo dekhna chahte hain?*"
    ],
    'srv_pos' => [
        'title' => "⚡ *Digify Smart Cloud POS*",
        'text'  => "⚡ *Digify Smart Cloud POS Software*\n\n"
                 . "Lightning-fast billing system for Supermarkets, Garments, Kirana & Retail:\n\n"
                 . "• *3-Second Billing:* Ultra-fast barcode/QR scanning.\n"
                 . "• *Offline-First Mode:* Internet band hone par bhi non-stop billing, automatic sync.\n"
                 . "• *Hardware Sync:* Thermal printer, weighing scale, barcode scanner, cash drawer.\n"
                 . "• *Dual Pricing:* MRP vs Wholesale price, customer loyalty reward points.\n"
                 . "• *AI Visual POS:* Touchscreen product image recognition.\n\n"
                 . "👉 *POS Demo counter schedule karein?*"
    ],
    'srv_crm' => [
        'title' => "🎯 *Digify Custom CRM Suite*",
        'text'  => "🎯 *Digify Custom CRM & Sales Automation*\n\n"
                 . "Inbound aur outbound sales pipelines ko automate karein:\n\n"
                 . "• *Lead Capture:* Website, WhatsApp, IndiaMART, Facebook leads ka auto sync.\n"
                 . "• *Auto Follow-ups:* WhatsApp & Email drip campaigns.\n"
                 . "• *Quotation & Deal Pipeline:* Stage-wise deal tracking, team performance.\n"
                 . "• *WhatsApp Chatbots:* AI bots jo 24/7 leads qualify karein.\n\n"
                 . "👉 *CRM demo ke liye niche button dabayein:*"
    ],
    'srv_after_sales' => [
        'title' => "🛠️ *Digify After-Sales & Warranty*",
        'text'  => "🛠️ *After-Sales, AMC & Warranty Management*\n\n"
                 . "Electronics, machinery aur equipment brands ke service operations automate karein:\n\n"
                 . "• *Serial / IMEI Tracking:* Product purchase date & warranty status check.\n"
                 . "• *Service Tickets:* Complaint booking, automated job-sheet creation.\n"
                 . "• *Technician App:* Field engineers ke liye real-time job update.\n"
                 . "• *AMC Contracts:* Annual Maintenance Contract renewals & auto-reminders.\n\n"
                 . "👉 *Free consultation ke liye connect karein:*"
    ],
    'srv_ai_ocr' => [
        'title' => "🤖 *AI OCR Bill Scanner*",
        'text'  => "🤖 *Digify AI OCR Bill & Invoice Scanner*\n\n"
                 . "Purchase invoices aur bills ki manual entry hamesha ke liye khatam karein:\n\n"
                 . "• *Instant Extraction:* PDF ya photo upload karte hi item name, qty, rate, GST auto-read.\n"
                 . "• *Zero Manual Error:* 99.8% extraction accuracy.\n"
                 . "• *Direct ERP / Tally Sync:* Direct purchase voucher create ho jata hai bina typing ke.\n"
                 . "• *Multi-Format Support:* Hand-written ya printed sabhi bills support karta hai.\n\n"
                 . "👉 *AI OCR ka live trial dekhna chahte hain?*"
    ],
    'srv_lead_gen' => [
        'title' => "🚀 *B2B Lead Generation*",
        'text'  => "🚀 *Digify B2B Lead Generation & Outreach*\n\n"
                 . "Apne business ke liye high-intent corporate B2B clients generate karein:\n\n"
                 . "• *Targeted Industry Leads:* Verified business owners, directors & purchase heads.\n"
                 . "• *City & Sector Filtering:* Pan-India ya export markets ke database.\n"
                 . "• *Automated WhatsApp Outreach:* 1-click broadcast campaigns with templates.\n"
                 . "• *High Conversion Pipelines:* Direct leads aapke CRM me connect hoti hain.\n\n"
                 . "👉 *Lead sample dekhne ke liye tap karein:*"
    ],
    'srv_app_dev' => [
        'title' => "📱 *Custom Mobile App Development*",
        'text'  => "📱 *Mobile Application Development (iOS & Android)*\n\n"
                 . "High-performance enterprise aur consumer mobile applications:\n\n"
                 . "• *Native Android:* Kotlin & Java, offline DB, high-speed execution.\n"
                 . "• *iOS Apps:* Swift & SwiftUI, Apple App Store compliance.\n"
                 . "• *Cross-Platform:* Flutter & React Native for cost-effective multi-platform apps.\n"
                 . "• *Solutions:* Tablet POS Apps, B2B Dealer Ordering, Delivery Apps, E-Commerce.\n\n"
                 . "👉 *Apna app idea discuss karne ke liye connect karein:*"
    ],
    'srv_web_dev' => [
        'title' => "🌐 *Web & E-Commerce Development*",
        'text'  => "🌐 *Modern Web & E-Commerce Development*\n\n"
                 . "Modern, ultra-fast aur high-converting business websites:\n\n"
                 . "• *Corporate Websites:* Lightning-fast loading, sleek animations, premium UI.\n"
                 . "• *E-Commerce Portals:* Custom Shopify, WooCommerce ya Full-Stack MERN/PHP.\n"
                 . "• *ERP / POS Sync:* Website par live inventory aur auto order billing.\n"
                 . "• *Global Infrastructure:* Cloudflare CDN, AWS, Render deployment.\n\n"
                 . "👉 *Free website audit ya quotation ke liye tap karein:*"
    ],
    'srv_seo_smo' => [
        'title' => "📈 *SEO & Digital Growth*",
        'text'  => "📈 *SEO & Digital Marketing Services*\n\n"
                 . "Google par Top #1 Ranking aur organic customer growth:\n\n"
                 . "• *Technical & On-Page SEO:* Core Web Vitals, speed optimization, schema markup.\n"
                 . "• *High-Authority Backlinks:* Off-page SEO aur brand authority building.\n"
                 . "• *Local SEO & Google Maps:* Local city commercial hubs me top ranking.\n"
                 . "• *Social Media (SMO):* LinkedIn, Instagram aur Facebook brand management.\n\n"
                 . "👉 *Apni website ka Free SEO Audit report chahiye?*"
    ],
    'srv_email_bimi' => [
        'title' => "📧 *Email Deliverability & BIMI*",
        'text'  => "📧 *Email Deliverability & BIMI Branding Suite*\n\n"
                 . "Apni corporate emails ko Spam folder se bacha kar direct Primary Inbox me layein:\n\n"
                 . "• *BIMI Setup with VMC:* Gmail me company ka blue checkmark aur verified logo.\n"
                 . "• *SPF, DKIM & DMARC (p=reject):* 100% email authentication against spoofing.\n"
                 . "• *Spam Blacklist Removal:* Domain aur IP reputation recovery.\n"
                 . "• *99% Inbox Delivery:* Cold email aur transactional email delivery assurance.\n\n"
                 . "👉 *Domain health checkup ke liye sampark karein:*"
    ],
    'btn_demo' => [
        'title' => "📞 *Book Live Demo*",
        'text'  => "📞 *Book Live Product Demo with Gautam*\n\n"
                 . "Hamari team aapke business requirements ke mutabiq live personalized screen-share demo degi:\n\n"
                 . "👤 *Consultant:* Gautam (Digify Soft Solutions)\n"
                 . "📱 *Direct Phone / WhatsApp:* +91 7425016636\n"
                 . "📞 *Alternate:* +91 7017558150\n"
                 . "📧 *Email:* webdev.digifysoft@gmail.com\n"
                 . "🌐 *Offices:* Noida (Gaur City) | Jaipur | Bhopal\n\n"
                 . "Aap kis time demo attend karna chahenge? Hum slot confirm kar denge!"
    ],
    'btn_gautam' => [
        'title' => "💬 *Chat with Gautam*",
        'text'  => "💬 *Connect Directly with Gautam*\n\n"
                 . "Aap directly call ya WhatsApp par Gautam se project discussion kar sakte hain:\n\n"
                 . "📱 *Phone / WhatsApp:* +91 7425016636\n"
                 . "⏰ *Availability:* Mon - Sat (10:00 AM - 8:00 PM IST)\n"
                 . "🌐 *Website:* https://digifysoft.in\n\n"
                 . "Aap apna requirement summary ya phone number yahan type kar sakte hain, hum call kar lenge!"
    ]
];

// Check if matched service ID or direct button
$matchedKey = null;
if (!empty($interactiveId) && isset($serviceDetails[$interactiveId])) {
    $matchedKey = $interactiveId;
} else {
    // Check keyword matching in text
    $msgLower = strtolower((string)$userMessage);
    if (strpos($msgLower, 'erp') !== false) $matchedKey = 'srv_erp';
    elseif (strpos($msgLower, 'pos') !== false || strpos($msgLower, 'billing') !== false) $matchedKey = 'srv_pos';
    elseif (strpos($msgLower, 'ocr') !== false) $matchedKey = 'srv_ai_ocr';
    elseif (strpos($msgLower, 'crm') !== false || strpos($msgLower, 'lead') !== false) $matchedKey = 'srv_crm';
    elseif (strpos($msgLower, 'app') !== false || strpos($msgLower, 'android') !== false || strpos($msgLower, 'ios') !== false) $matchedKey = 'srv_app_dev';
    elseif (strpos($msgLower, 'web') !== false || strpos($msgLower, 'ecommerce') !== false || strpos($msgLower, 'shopify') !== false) $matchedKey = 'srv_web_dev';
    elseif (strpos($msgLower, 'seo') !== false || strpos($msgLower, 'ranking') !== false) $matchedKey = 'srv_seo_smo';
    elseif (strpos($msgLower, 'email') !== false || strpos($msgLower, 'bimi') !== false || strpos($msgLower, 'dmarc') !== false) $matchedKey = 'srv_email_bimi';
    elseif (strpos($msgLower, 'after-sales') !== false || strpos($msgLower, 'amc') !== false || strpos($msgLower, 'warranty') !== false) $matchedKey = 'srv_after_sales';
    elseif (strpos($msgLower, 'demo') !== false) $matchedKey = 'btn_demo';
    elseif (strpos($msgLower, 'gautam') !== false) $matchedKey = 'btn_gautam';
}

if ($matchedKey && isset($serviceDetails[$matchedKey])) {
    $btnResult = send_whatsapp_interactive_buttons(
        $targetPhone,
        $serviceDetails[$matchedKey]['text'],
        $standardButtons,
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

$apiKey = getenv('GROQ_API_KEY') ?: (getenv('CHAT_API_KEY') ?: (defined('GROQ_API_KEY') ? GROQ_API_KEY : (defined('CHAT_API_KEY') ? CHAT_API_KEY : '')));

// Prepare System Prompt for Digify Saathi WhatsApp Assistant
$systemPromptContent = <<<PROMPT
You are Digify Saathi, official WhatsApp AI Assistant for Digify Soft Solutions (+91 7425016636).
You are responding directly on WhatsApp. Your tone is warm, polite, consultative, ultra-smart, and engaging.

LANGUAGE:
- If customer writes in Hindi/Hinglish, reply in natural, polished Hinglish. If in English, reply in crisp English.
- Use emojis elegantly, bullet points, and WhatsApp bold with single asterisks (*word*).

COMPLETE SOLUTIONS CATALOG:
1. Cloud ERP: Multi-warehouse inventory, factory BOM manufacturing, GST e-invoicing & accounts, ZATCA Phase 2.
2. Smart Cloud POS: 3-sec offline billing, thermal printer, barcode, weighing scale, dual pricing.
3. Custom Mobile Apps: Android (Kotlin), iOS (Swift), Flutter cross-platform, Tablet POS apps.
4. Web & E-Commerce: High-speed corporate websites, Shopify/WooCommerce, full-stack portals.
5. AI OCR Bill Scanner: Automated purchase bill data extraction directly into ERP/Tally.
6. B2B Lead Gen & CRM: Target corporate leads, WhatsApp automated campaigns, deal pipelines.
7. SEO & Digital Marketing: Google Top #1 ranking, technical audits, social media management.
8. Email Deliverability & BIMI: Verified VMC logos in Gmail, 100% DMARC, SPF, spam blacklist recovery.
9. After-Sales & Warranty: Serial/IMEI tracking, AMC contracts, service ticket dispatching.

CRITICAL META LENGTH RULES:
- Keep answers self-contained and punchy (100 to 200 words).
- NEVER cut off mid-sentence. Always finish your thoughts completely.
- Conclude with an invitation to book a free demo with Gautam (+91 7425016636).
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
    $standardButtons,
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
