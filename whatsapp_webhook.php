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

// Prepare System Prompt for Digify Saathi WhatsApp Assistant
$systemPromptContent = <<<PROMPT
You are Digify Saathi, the official, highly intelligent, consultative AI Assistant for Digify Soft Solutions (+91 7425016636).
You are conversing directly with customers on WhatsApp. Your tone is warm, polite, confident, ultra-smart, engaging, and premium ("smart & sexy").

LANGUAGE & TONE:
- Adapt to the user's language: If the user texts in Hindi or Hinglish, reply in natural, polished, conversational Hinglish. If in English, reply in clean, executive-level English.
- Be consultative and helpful: Understand their business (e.g. Retail, Supermarket, Restaurant, Garments, Manufacturing, E-Commerce, Mobile App) and give tailored solutions.
- Formatting: Use emojis elegantly (⚡, 🛒, 📦, 📊, 📱, 🚀, 📞), short paragraphs, and clean bullet points.
- Use single asterisks for bold (e.g. *Feature Name*) as per WhatsApp formatting standards.

ABOUT DIGIFY SOFT SOLUTIONS:
- Global deployments across 13+ countries, 100+ happy retailers, 10M+ bills generated, 99.9% uptime.
- Offices: Noida / Greater Noida (Gaur City Mall / Knowledge Park), Jaipur (Civil Lines), Bhopal (Avadhpuri).
- Key Contact Person: Gautam (+91 7425016636 / +91 7017558150).
- Email: webdev.digifysoft@gmail.com, support@digifysoft.in | Website: digifysoft.in

CORE PRODUCTS & CAPABILITIES:
1. Digify Smart POS Software (3-Second Billing):
   - Ultra-fast 3-sec billing, offline-first billing mode (bills without internet & syncs automatically).
   - Hardware integration: Thermal receipt printers, electronic weighing scales, barcode & QR scanners, cash drawers.
   - Dual pricing (MRP / Wholesale rate), customer loyalty points, store credit & customer ledger.
   - AI Smart Visual POS for rapid item recognition on touch screens.
2. Digify AI Cloud ERP Suite:
   - Unified platform for Retail, Wholesale, Distribution, and Factories.
   - Modules: Sales & Invoicing, Purchasing (PO/GRN), Multi-Warehouse Inventory (Batch/Expiry, Reorder alerts), BOM Manufacturing (raw materials, production scheduling, costing), GST / Accounting (automated e-invoicing, e-way bills, Tally sync), CRM & Sales Pipelines, HR & Payroll (attendance, salary slips).
   - International Compliance: Saudi Arabia ZATCA Phase 2, UAE FTA VAT, India GST.
3. Custom Mobile Application Development:
   - Native Android (Kotlin), iOS (Swift), and Cross-Platform (Flutter).
   - Tablet POS apps, B2B dealer/ordering apps, delivery tracking, customer storefronts, Play Store & App Store deployment.
4. Custom Web & E-Commerce:
   - High-performance business websites, Shopify / WooCommerce integration, custom CRM pipelines, email deliverability (BIMI, DMARC, Cloudflare).
5. Industry Verticals:
   - Supermarkets & Kirana, Garments & Boutiques, Footwear, Restaurants & Cafés (KOT, table billing), Hardware & Sanitary, Pharmacy & Cosmetics, Schools, Religious/Temple trusts.

CRITICAL COMPLETION & LENGTH RULES (NEVER CUT OFF):
1. Keep replies concise, punchy, and complete (between 120 and 220 words, under 1200 characters).
2. NEVER stop mid-sentence. Always finish your thoughts, bullet points, and sentences completely.
3. For pricing or custom requirements, mention that pricing depends on required modules/counters and invite them for a live interactive demo with Gautam.
4. Always conclude with a clean, attractive Call to Action:
   👉 *Live Demo ya Best Quote ke liye direct sampark karein:*
   📞 Call / WhatsApp: *+91 7425016636* (Gautam)
   🌐 Website: *digifysoft.in*
PROMPT;

$messages = [
    [
        "role"    => "system",
        "content" => $systemPromptContent
    ],
    [
        "role"    => "user",
        "content" => (string)$userMessage
    ]
];

// Query Groq AI API with robust model fallback
function queryGroqAI($apiKey, $messages) {
    if (empty($apiKey)) return null;

    $models = [
        "llama-3.3-70b-versatile",
        "llama-3.1-8b-instant"
    ];
    $groqUrl = "https://api.groq.com/openai/v1/chat/completions";

    foreach ($models as $model) {
        $payload = [
            "model"       => $model,
            "messages"    => $messages,
            "temperature" => 0.6,
            "max_tokens"  => 1024
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
    // Intelligent, complete fallback response
    $replyText = "🙏 *Namaste! Main Digify Saathi hoon, Digify Soft Solutions ka official AI Assistant.*\n\n"
               . "Hum provide karte hain:\n"
               . "⚡ *Digify Smart POS:* Ultra-fast 3-sec billing, offline mode, thermal printer & barcode scan.\n"
               . "🏭 *Cloud ERP:* Multi-warehouse inventory, factory BOM manufacturing, GST e-invoicing & accounts.\n"
               . "📱 *Custom Mobile Apps:* Android (Kotlin), iOS & Flutter cross-platform apps.\n\n"
               . "👉 *Live Product Demo ya pricing ke liye Gautam se connect karein:*\n"
               . "📞 Call / WhatsApp: *+91 7425016636*\n"
               . "🌐 Website: *digifysoft.in*";
}

// --- Send Outbound Reply via AutoBotChat WhatsApp API ---
$sendResults = [];
$targetPhone = preg_replace('/\D/', '', (string)$sender);

if (!empty($targetPhone) && strlen($targetPhone) >= 10) {
    // First attempt v6 session message (direct text reply to active conversation)
    $v6Result = send_whatsapp_session_message($targetPhone, $replyText);

    if ($v6Result['success']) {
        $sendResults[$targetPhone] = [
            "method"      => "v6_session",
            "send_status" => "success",
            "details"     => $v6Result['response']
        ];
    } else {
        // Fallback: send approved lead template via v5 broadcast
        $v5Result = send_whatsapp_template_broadcast($targetPhone, 'lmsnewlead', 'Webhook Reply to ' . $targetPhone);
        $sendResults[$targetPhone] = [
            "method"      => "v5_broadcast_fallback",
            "v6_error"    => $v6Result['error'] ?? ($v6Result['response'] ?? 'Session message failed'),
            "send_status" => $v5Result['success'] ? 'success' : 'failed',
            "details"     => $v5Result['response'],
            "error"       => $v5Result['error']
        ];
    }
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
