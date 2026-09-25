<?php
/**
 * Digify Soft Solutions - WhatsApp AI Chatbot Webhook
 * Integrates GoShort / Meta WhatsApp API with Digify AI Assistant (Groq LLM)
 */

header('Content-Type: application/json');

// Log incoming request for debugging
$rawInput = file_get_contents('php://input');
$logData = date('Y-m-d H:i:s') . " - Method: " . $_SERVER['REQUEST_METHOD'] . " - Raw: " . $rawInput . "\n";
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

if (!empty($input['sender_id'])) {
    $sender = $input['sender_id'];
} elseif (!empty($input['from'])) {
    $sender = is_array($input['from']) ? ($input['from']['number'] ?? '') : $input['from'];
} elseif (!empty($input['sender'])) {
    $sender = is_array($input['sender']) ? ($input['sender']['number'] ?? '') : $input['sender'];
} elseif (!empty($input['phone'])) {
    $sender = $input['phone'];
} elseif (!empty($input['mobile'])) {
    $sender = $input['mobile'];
} elseif (!empty($input['wa_id'])) {
    $sender = $input['wa_id'];
} elseif (isset($input['entry'][0]['changes'][0]['value']['messages'][0]['from'])) {
    $sender = $input['entry'][0]['changes'][0]['value']['messages'][0]['from'];
}

$sender = preg_replace('/\D/', '', (string)$sender);

if (isset($input['text'])) {
    $userMessage = is_array($input['text']) ? ($input['text']['body'] ?? '') : $input['text'];
} elseif (isset($input['message'])) {
    $userMessage = is_array($input['message']) ? ($input['message']['text'] ?? $input['message']['body'] ?? $input['message']['caption'] ?? '') : $input['message'];
} elseif (isset($input['body'])) {
    $userMessage = $input['body'];
} elseif (isset($input['msg'])) {
    $userMessage = $input['msg'];
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
    @file_put_contents(__DIR__ . '/whatsapp_webhook_log.json', date('Y-m-d H:i:s') . " - Ignored: " . json_encode($response) . "\n", FILE_APPEND);
    echo json_encode($response);
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
        "content" => "You are Digify Saathi, official AI Assistant for Digify Soft Solutions on WhatsApp (+91 7425016636).
Keep replies concise, polite, clear, and formatted for WhatsApp mobile screens (use short lines and emojis).

COMPANY OVERVIEW & CONTACTS:
- Company: Digify Soft Solutions (Cloud ERP, Smart POS, Mobile Apps & Web Development).
- Founder: Gautam (+91 7425016636)
- Contact / WhatsApp: +91 7425016636

PRODUCTS & SERVICES:
1. Digify AI Business ERP & POS: Cloud ERP for Retail, Manufacturers, Restaurants & Supermarkets.
2. Android & iOS App Development: Kotlin, Swift, Flutter custom mobile apps.
3. Accounting & GST: E-Invoicing, E-Way bill, Tally sync.

RULES:
- Answer ONLY Digify software, mobile app/web development, pricing, and demo questions.
- Keep replies short. Invite to call/WhatsApp Gautam (+91 7425016636)."
    ],
    [
        "role" => "user",
        "content" => (string)$userMessage
    ]
];

// Query Groq AI API
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
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
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
curl_setopt($chSend, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($chSend, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($chSend, CURLOPT_HTTPHEADER, [
    "Authorization: $goshortToken",
    "Content-Type: application/json"
]);
curl_setopt($chSend, CURLOPT_POSTFIELDS, json_encode($sendPayload));
$sendResult = curl_exec($chSend);
$sendHttpCode = curl_getinfo($chSend, CURLINFO_HTTP_CODE);
$sendErr = curl_error($chSend);
curl_close($chSend);

$resultData = [
    "status"         => "success",
    "sender"         => $sender,
    "user_message"   => $userMessage,
    "reply"          => $replyText,
    "send_http_code" => $sendHttpCode,
    "send_error"     => $sendErr,
    "send_result"    => json_decode($sendResult, true) ?? $sendResult
];

@file_put_contents(__DIR__ . '/whatsapp_webhook_log.json', date('Y-m-d H:i:s') . " - Result: " . json_encode($resultData) . "\n", FILE_APPEND);

echo json_encode($resultData);


