<?php
/**
 * Digify Soft Solutions - WhatsApp AI Chatbot Webhook
 * Integrates GoShort / Meta WhatsApp API with Digify AI Assistant (Groq LLM)
 */

header('Content-Type: application/json');

// Log incoming request for debugging
$rawInput = file_get_contents('php://input');
$logData = date('Y-m-d H:i:s') . " - Method: " . $_SERVER['REQUEST_METHOD'] . " - Raw: " . $rawInput . " - POST: " . json_encode($_POST) . "\n";
@file_put_contents(__DIR__ . '/whatsapp_webhook_log.json', $logData, FILE_APPEND);

$input = json_decode($rawInput, true) ?? [];
if (empty($input) && !empty($_POST)) {
    $input = $_POST;
}

// Support verification requests / handshake if required by webhook gateway
if (isset($_GET['hub_mode']) && $_GET['hub_mode'] === 'subscribe') {
    echo $_GET['hub_challenge'] ?? 'OK';
    exit;
}
if (isset($_GET['challenge'])) {
    echo $_GET['challenge'];
    exit;
}

// Extract sender number and text message from various GoShort/WhatsApp JSON payload formats
$sender = '';
$userMessage = '';

if (isset($input['from'])) {
    $sender = is_array($input['from']) ? ($input['from']['number'] ?? '') : $input['from'];
} elseif (isset($input['sender'])) {
    $sender = is_array($input['sender']) ? ($input['sender']['number'] ?? '') : $input['sender'];
} elseif (isset($input['phone'])) {
    $sender = $input['phone'];
} elseif (isset($input['mobile'])) {
    $sender = $input['mobile'];
} elseif (isset($input['wa_id'])) {
    $sender = $input['wa_id'];
} elseif (isset($input['entry'][0]['changes'][0]['value']['messages'][0]['from'])) {
    $sender = $input['entry'][0]['changes'][0]['value']['messages'][0]['from'];
}

$sender = preg_replace('/\D/', '', (string)$sender);

if (isset($input['message'])) {
    $userMessage = is_array($input['message']) ? ($input['message']['text'] ?? $input['message']['body'] ?? $input['message']['caption'] ?? '') : $input['message'];
} elseif (isset($input['text'])) {
    $userMessage = is_array($input['text']) ? ($input['text']['body'] ?? '') : $input['text'];
} elseif (isset($input['body'])) {
    $userMessage = $input['body'];
} elseif (isset($input['msg'])) {
    $userMessage = $input['msg'];
} elseif (isset($input['entry'][0]['changes'][0]['value']['messages'][0]['text']['body'])) {
    $userMessage = $input['entry'][0]['changes'][0]['value']['messages'][0]['text']['body'];
}

// If no valid message or sender found, exit gracefully
if (empty($sender) || empty($userMessage)) {
    echo json_encode([
        "status" => "ignored", 
        "reason" => "No valid message or sender detected",
        "received_keys" => array_keys($input)
    ]);
    exit;
}

// Require configuration
if (file_exists(__DIR__ . '/mail_config.php')) {
    require_once __DIR__ . '/mail_config.php';
}

$apiKey = getenv('CHAT_API_KEY') ?: (getenv('GROQ_API_KEY') ?: (defined('CHAT_API_KEY') ? CHAT_API_KEY : ''));

// Save lead to database if db.php is available
if (file_exists(__DIR__ . '/db.php')) {
    include_once __DIR__ . '/db.php';
    if (isset($conn) && $conn) {
        $safePhone = mysqli_real_escape_string($conn, $sender);
        $safeMsg   = mysqli_real_escape_string($conn, (string)$userMessage);
        @mysqli_query($conn, "INSERT INTO leads_master (lead_name, phone, message, source, created_at) VALUES ('WhatsApp User', '$safePhone', '$safeMsg', 'WhatsApp Chatbot', NOW())");
    }
}

// Prepare System Prompt for Digify Saathi AI Assistant
$messages = [
    [
        "role" => "system",
        "content" => "You are Digify Saathi, the official AI Assistant for Digify Soft Solutions responding directly via WhatsApp (+91 7425016636).
Keep replies concise, polite, clear, and formatted nicely for WhatsApp mobile screens (use line breaks and emojis).

COMPANY OVERVIEW & CONTACTS:
- Company: Digify Soft Solutions (Cloud ERP, Smart POS, Accounting, Mobile App & Web Development Firm).
- Founder / Director: Gautam (+91 7425016636)
- Official WhatsApp / Contact: +91 7425016636

PRODUCTS & SERVICES:
1. Digify AI Business Platform & ERP: Unified Cloud ERP for Manufacturers, Retail Chains, Supermarkets, Restaurants, Garments, Pharma & Wholesale.
2. Smart POS Software: Offline-first high-speed billing, thermal printing, GST calculation, weighing scale sync.
3. Android & iOS App Development: Custom Kotlin/Swift mobile applications, tablet POS, Play Store / App Store publishing.
4. Accounting & Invoicing: E-Invoicing, E-Way Bill, Tally sync, ZATCA VAT compliance, auto GST filing.
5. Custom CRM & Lead Automation: Pipeline tracking, automated follow-ups, quotation builder.

RULES:
- Answer ONLY questions strictly related to Digify Soft Solutions, software products, mobile app/web development, pricing, and demos.
- Keep responses short and easy to read on WhatsApp.
- If asked for demo, pricing or human call, invite them to speak directly with Gautam on +91 7425016636."
    ],
    [
        "role" => "user",
        "content" => (string)$userMessage
    ]
];

// Function to query Groq API with model fallback
function queryGroqAI($apiKey, $messages) {
    if (empty($apiKey)) return null;

    $models = ["llama-3.3-70b-versatile", "llama-3.1-8b-instant", "mixtral-8x7b-32768"];
    $groqUrl = "https://api.groq.com/openai/v1/chat/completions";

    foreach ($models as $model) {
        $payload = [
            "model" => $model,
            "messages" => $messages,
            "temperature" => 0.7,
            "max_tokens" => 500
        ];

        $ch = curl_init($groqUrl);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($payload));
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_TIMEOUT, 15);
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
                return $json['choices'][0]['message']['content'];
            }
        }
    }
    return null;
}

$replyText = queryGroqAI($apiKey, $messages);

if (!$replyText) {
    $replyText = "Hello! Thank you for contacting Digify Soft Solutions.\n\nWe provide Cloud ERP, Smart POS, Mobile App & Web Development, and CRM solutions.\n\nTalk directly with Gautam at +91 7425016636 or visit https://digifysoft.in for a live demo!";
}

// --- Send Reply back via GoShort / WhatsApp API ---
$goshortApiUrl = "https://wa20.nuke.co.in/v5/api/index.php/addbroadcast";
$goshortToken  = "Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpYXQiOjE3NjA3MDY0NDYsImRhdGEiOnsidXNlcm5hbWUiOiJEaWdpZnlfc29mdCIsIm5hbWUiOiJEaWdpZnlfc29mdCJ9fQ.lbhITMYPzs0RvDRf-YhqbJ5r63rFUPnInfTnIG_T998";

$sendPayload = [
    "broadcast_service" => "whatsApp_credits",
    "broadcast_name"    => "Chatbot Reply to " . $sender,
    "template_id"       => "digify",
    "contacts"          => $sender,
    "custom_message"    => $replyText
];

$chSend = curl_init($goshortApiUrl);
curl_setopt($chSend, CURLOPT_RETURNTRANSFER, true);
curl_setopt($chSend, CURLOPT_POST, true);
curl_setopt($chSend, CURLOPT_HTTPHEADER, [
    "Authorization: $goshortToken",
    "Content-Type: application/json"
]);
curl_setopt($chSend, CURLOPT_POSTFIELDS, json_encode($sendPayload));
$sendResult = curl_exec($chSend);
curl_close($chSend);

echo json_encode([
    "status"      => "success",
    "sender"      => $sender,
    "reply"       => $replyText,
    "send_result" => json_decode($sendResult, true)
]);

