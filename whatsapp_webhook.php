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

// Log incoming request for debugging
$rawInput = file_get_contents('php://input');
$requestHeaders = function_exists('getallheaders') ? getallheaders() : [];
$logData = date('Y-m-d H:i:s') . " - " . $_SERVER['REQUEST_METHOD'] . " " . ($_SERVER['REQUEST_URI'] ?? '') . "\n"
         . "Headers: " . json_encode($requestHeaders) . "\n"
         . "Raw: " . $rawInput . "\n";
@file_put_contents(__DIR__ . '/whatsapp_webhook_log.json', $logData, FILE_APPEND);

$input = json_decode($rawInput, true) ?? [];
if (empty($input) && !empty($_POST)) {
    $input = $_POST;
}

// Check for status updates or outgoing echo messages and ignore them to prevent reply loops
if (
    isset($input['event']) && in_array(strtolower($input['event']), ['status', 'delivery', 'sent', 'read', 'delivered', 'failed']) ||
    isset($input['statuses']) ||
    !empty($input['from_me']) ||
    (isset($input['direction']) && strtolower($input['direction']) === 'outgoing') ||
    (isset($input['type']) && strtolower($input['type']) === 'status')
) {
    $ignoreResponse = [
        "status" => "ignored",
        "reason" => "Message status or outgoing notification received, no action required."
    ];
    @file_put_contents(__DIR__ . '/whatsapp_webhook_log.json', date('Y-m-d H:i:s') . " - " . json_encode($ignoreResponse) . "\n\n", FILE_APPEND);
    echo json_encode($ignoreResponse);
    exit;
}

// Extract recipient phone numbers from various GoShort/Meta/WhatsApp payload structures
$recipients = [];
if (!empty($input['receiver'])) {
    $recipients[] = preg_replace('/\D/', '', (string)$input['receiver']);
}
if (!empty($input['from'])) {
    $f = is_array($input['from']) ? ($input['from']['number'] ?? $input['from']['phone'] ?? '') : $input['from'];
    if (!empty($f)) $recipients[] = preg_replace('/\D/', '', (string)$f);
}
if (!empty($input['sender_id'])) {
    $recipients[] = preg_replace('/\D/', '', (string)$input['sender_id']);
}
if (!empty($input['sender'])) {
    $s = is_array($input['sender']) ? ($input['sender']['number'] ?? $input['sender']['phone'] ?? '') : $input['sender'];
    if (!empty($s)) $recipients[] = preg_replace('/\D/', '', (string)$s);
}
if (!empty($input['phone'])) {
    $recipients[] = preg_replace('/\D/', '', (string)$input['phone']);
}
if (!empty($input['mobile'])) {
    $recipients[] = preg_replace('/\D/', '', (string)$input['mobile']);
}
if (!empty($input['wa_id'])) {
    $recipients[] = preg_replace('/\D/', '', (string)$input['wa_id']);
}
if (!empty($input['contact'])) {
    $c = is_array($input['contact']) ? ($input['contact']['wa_id'] ?? $input['contact']['phone'] ?? '') : $input['contact'];
    if (!empty($c)) $recipients[] = preg_replace('/\D/', '', (string)$c);
}
if (!empty($input['contacts'][0]['wa_id'])) {
    $recipients[] = preg_replace('/\D/', '', (string)$input['contacts'][0]['wa_id']);
}
if (!empty($input['data']['from'])) {
    $recipients[] = preg_replace('/\D/', '', (string)$input['data']['from']);
}
if (isset($input['entry'][0]['changes'][0]['value']['messages'][0]['from'])) {
    $recipients[] = preg_replace('/\D/', '', (string)$input['entry'][0]['changes'][0]['value']['messages'][0]['from']);
}

$recipients = array_values(array_unique(array_filter($recipients)));

// Filter out the bot's own WABA numbers so the bot replies to the customer and not itself
$botNumbers = ['917425016636', '7425016636', '918005934184', '8005934184'];
$customerRecipients = array_values(array_filter($recipients, function($num) use ($botNumbers) {
    return !in_array($num, $botNumbers);
}));

if (!empty($customerRecipients)) {
    $recipients = $customerRecipients;
}
$sender = !empty($recipients) ? $recipients[0] : '';

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
        "received_keys" => array_keys($input)
    ];
    @file_put_contents(__DIR__ . '/whatsapp_webhook_log.json', date('Y-m-d H:i:s') . " - Ignored: " . json_encode($response) . "\n\n", FILE_APPEND);
    echo json_encode($response);
    exit;
}

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

// Prepare System Prompt for Digify Saathi WhatsApp Assistant
$systemPromptContent = <<<PROMPT
You are Digify Saathi, official WhatsApp AI Assistant for Digify Soft Solutions (+91 7425016636).
Keep replies concise, polite, helpful, clear, and perfectly formatted for WhatsApp mobile screens.
Use bullet points, emojis, and short paragraphs. Avoid walls of text.

COMPANY OVERVIEW & CONTACTS:
- Company: Digify Soft Solutions (Cloud ERP, Smart POS, Mobile App & Web Development, AI Automation).
- Founder: Gautam (+91 7425016636 / +91 7017558150)
- WhatsApp / Phone: +91 7425016636
- Email: webdev.digifysoft@gmail.com, support@digifysoft.in
- Offices: Noida/Greater Noida, Jaipur, Bhopal. Serving clients across 13+ countries.

CORE PRODUCTS & SERVICES:
1. Digify AI Business ERP:
   - Unified cloud platform for Retail, Wholesale, Manufacturing, Supermarkets & Restaurants.
   - Modules: Sales, Purchasing, Multi-warehouse Inventory, BOM Manufacturing, Accounting & GST, CRM, HR/Payroll.
2. Digify Smart POS:
   - Ultra-fast 3-second billing, barcode scanning, offline-first billing mode.
   - Hardware integration: thermal printer, weighing scale, barcode scanner.
   - Dual pricing (MRP/Selling price), wholesale rates, loyalty points, customer ledger.
3. Custom Mobile Application Development:
   - Native Android (Kotlin) & iOS (Swift), Cross-platform (Flutter).
   - Tablet POS apps, B2B customer apps, delivery apps, Play Store publishing.
4. Accounting, GST & Compliance:
   - Automated E-Invoicing & E-Way Bill generation, Tally sync, ZATCA Phase 2 (Saudi Arabia) & UAE FTA VAT compliance.
5. Custom Web & E-Commerce:
   - High-performance business websites, Shopify / WooCommerce integration, custom CRM pipelines.

COMMUNICATION GUIDELINES:
- Answer user questions directly, clearly, and concisely.
- For pricing or custom requirements, mention that pricing depends on required modules/counters and invite them to speak with Gautam on +91 7425016636.
- Always include Gautam's contact (+91 7425016636) for live demos or direct consultation.
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
        "openai/gpt-oss-120b",
        "llama-3.3-70b-versatile",
        "llama-3.1-8b-instant"
    ];
    $groqUrl = "https://api.groq.com/openai/v1/chat/completions";

    foreach ($models as $model) {
        $payload = [
            "model"       => $model,
            "messages"    => $messages,
            "temperature" => 0.7,
            "max_tokens"  => 400
        ];

        $ch = curl_init($groqUrl);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($payload));
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_IPRESOLVE, CURL_IPRESOLVE_V4);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 6);
        curl_setopt($ch, CURLOPT_TIMEOUT, 12);
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
                $content = trim($json['choices'][0]['message']['content']);
                // Strip bracketed action tags if present
                $content = preg_replace('/\[\s*ACTION\s*:[^\]]*\]/i', '', $content);
                return trim($content);
            }
        }
    }
    return null;
}

$replyText = queryGroqAI($apiKey, $messages);

if (!$replyText) {
    $replyText = "Hello! Namaste from Digify Soft Solutions.\n\nWe provide Cloud ERP, Smart POS (3-sec billing), Custom Mobile App & Web Development, and CRM Automation.\n\nTo schedule a live product demo or discuss your project, contact Gautam directly at +91 7425016636 or visit https://digifysoft.in.";
}

// --- Send Outbound Reply via AutoBotChat WhatsApp API ---
$sendResults = [];
foreach ($recipients as $targetPhone) {
    if (empty($targetPhone) || strlen($targetPhone) < 10) continue;

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
    "recipients"     => $recipients,
    "user_message"   => $userMessage,
    "reply"          => $replyText,
    "deliveries"     => $sendResults
];

@file_put_contents(__DIR__ . '/whatsapp_webhook_log.json', date('Y-m-d H:i:s') . " - Result: " . json_encode($resultData) . "\n\n", FILE_APPEND);

echo json_encode($resultData);
