<?php
/**
 * Digify Soft Solutions - WhatsApp AI Chatbot Webhook
 * Integrates GoShort / Meta WhatsApp API with Digify AI Assistant (Groq LLM)
 */

header('Content-Type: application/json');

// Log incoming request for debugging
$rawInput = file_get_contents('php://input');
if (!empty($rawInput)) {
    @file_put_contents(__DIR__ . '/whatsapp_webhook_log.json', date('Y-m-d H:i:s') . ' - ' . $rawInput . "\n", FILE_APPEND);
}

$input = json_decode($rawInput, true);

// Support verification requests (if any webhook handshake is required)
if (isset($_GET['hub_mode']) && $_GET['hub_mode'] === 'subscribe') {
    echo $_GET['hub_challenge'] ?? 'OK';
    exit;
}

// Extract sender number and text message from various GoShort/WhatsApp JSON payload formats
$sender = '';
$userMessage = '';

if (isset($input['from'])) {
    $sender = preg_replace('/\D/', '', $input['from']);
} elseif (isset($input['sender'])) {
    $sender = preg_replace('/\D/', '', $input['sender']);
} elseif (isset($input['phone'])) {
    $sender = preg_replace('/\D/', '', $input['phone']);
} elseif (isset($input['entry'][0]['changes'][0]['value']['messages'][0]['from'])) {
    $sender = preg_replace('/\D/', '', $input['entry'][0]['changes'][0]['value']['messages'][0]['from']);
}

if (isset($input['message'])) {
    $userMessage = is_array($input['message']) ? ($input['message']['text'] ?? $input['message']['body'] ?? '') : $input['message'];
} elseif (isset($input['text'])) {
    $userMessage = is_array($input['text']) ? ($input['text']['body'] ?? '') : $input['text'];
} elseif (isset($input['body'])) {
    $userMessage = $input['body'];
} elseif (isset($input['entry'][0]['changes'][0]['value']['messages'][0]['text']['body'])) {
    $userMessage = $input['entry'][0]['changes'][0]['value']['messages'][0]['text']['body'];
}

// If no valid message or sender found, exit gracefully
if (empty($sender) || empty($userMessage)) {
    echo json_encode(["status" => "ignored", "reason" => "No valid message or sender"]);
    exit;
}

// Require configuration & database if present
if (file_exists(__DIR__ . '/mail_config.php')) {
    require_once __DIR__ . '/mail_config.php';
}

$apiKey = (defined('CHAT_API_KEY') && CHAT_API_KEY !== '') ? CHAT_API_KEY : getenv('CHAT_API_KEY');

// Save lead to database if db.php is available
if (file_exists(__DIR__ . '/db.php')) {
    include_once __DIR__ . '/db.php';
    if (isset($conn) && $conn) {
        $safePhone = mysqli_real_escape_string($conn, $sender);
        $safeMsg   = mysqli_real_escape_string($conn, $userMessage);
        @mysqli_query($conn, "INSERT INTO leads_master (lead_name, phone, message, source, created_at) VALUES ('WhatsApp User', '$safePhone', '$safeMsg', 'WhatsApp Chatbot', NOW())");
    }
}

// Prepare System Prompt for Digify Saathi AI Assistant
$messages = [
    [
        "role" => "system",
        "content" => "You are Digify Saathi, the official AI Assistant for Digify Soft Solutions responding directly via WhatsApp on +91 7425016636.
Keep replies short, polite, helpful, clear, and optimized for WhatsApp chat (use line breaks and emojis where appropriate).

COMPANY OVERVIEW & CONTACTS:
- Company: Digify Soft Solutions (Cloud ERP, Smart POS, Accounting, CRM & Automation Software Firm).
- Official WhatsApp / Bot Number: +91 7425016636
- Contact Person / Founder: Gautam (+91 7425016636)

PRODUCTS & SERVICES:
1. Digify AI Business Platform & ERP: Unified Cloud ERP for Manufacturers, Retail Chains, Supermarkets, Restaurants, Hardware, Garments, Pharma & Wholesale.
2. Smart POS Software: Offline-first high-speed billing, thermal printing, GST calculation, inventory sync.
3. Accounting & Invoicing: E-Invoicing & E-Way Bill integration, Tally sync, ZATCA VAT compliance, auto GST filing.
4. Centralized Inventory & Supply Chain: Multi-warehouse management, reorder alerts, batch/expiry tracking.
5. Omnichannel Retail & E-Commerce: Direct Shopify / WooCommerce integration, WhatsApp order alerts.
6. Custom CRM & Lead Automation: Inbound/outbound sales pipelines, follow-ups, quotation builder.

RULES:
- Answer ONLY questions strictly related to Digify Soft Solutions, its software products, pricing, and live demos.
- Do NOT make long essays; WhatsApp users prefer quick, informative answers.
- If asked for demo, pricing or call, invite them to speak directly with Gautam on +91 7425016636 or book a live demo."
    ],
    [
        "role" => "user",
        "content" => $userMessage
    ]
];

// Call Groq API
$groqUrl = "https://api.groq.com/openai/v1/chat/completions";
$payload = [
    "model" => "openai/gpt-oss-120b",
    "messages" => $messages,
    "temperature" => 0.7,
    "max_tokens" => 500
];

$ch = curl_init($groqUrl);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($payload));
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_HTTPHEADER, [
    'Content-Type: application/json',
    'Authorization: Bearer ' . $apiKey
]);
$aiRawResponse = curl_exec($ch);
curl_close($ch);

$aiData = json_decode($aiRawResponse, true);
$replyText = $aiData['choices'][0]['message']['content'] ?? "Thank you for contacting Digify Soft Solutions! How can we assist your business today?";

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
