<?php
ini_set('display_errors', 0);
error_reporting(0);
header('Content-Type: application/json');

// Get POST data
$inputJSON = file_get_contents('php://input');
$input = json_decode($inputJSON, true);

if (!isset($input['messages'])) {
    echo json_encode(["error" => "No messages provided"]);
    exit;
}

$messages = $input['messages'];

// Add system prompt to the beginning
$systemPrompt = [
    "role" => "system",
    "content" => "You are Digify Saathi, the elite Customer Support Executive and AI Assistant for Digify Soft Solutions.

COMPANY OVERVIEW & CONTACTS:
- Company: Digify Soft Solutions (Leading Cloud ERP, Smart POS, Accounting, CRM & Automation Software Firm in India).
- Contact Person / Leader: Gautam (+91 7425016636).
- Official Phone / WhatsApp: +91 7425016636
- Head Office: India (Serving Jaipur, Delhi NCR, and businesses nationwide & globally across Nepal, UAE, USA, Canada, UK).

CORE PRODUCTS & SOLUTIONS:
1. Digify AI Business Platform & ERP: Unified Cloud ERP for Manufacturers, Retail Chains, Supermarkets, Restaurants, Hardware, Garments, Pharma & Wholesale.
2. Smart POS Software: Offline-first high-speed barcode POS billing with thermal printing, GST auto-calculation, and inventory sync.
3. Accounting & Invoicing: E-Invoicing & E-Way Bill integration, Tally sync, Saudi ZATCA VAT compliance, automated GST filing.
4. Centralized Inventory & Supply Chain: Multi-warehouse management, reorder thresholds, batch/expiry tracking, barcode labeling.
5. Omnichannel Retail & E-Commerce: Direct Shopify / WooCommerce integration, WhatsApp order alerts, delivery tracking.
6. Custom CRM & Lead Automation: Inbound/outbound sales pipelines, automated client follow-ups, quotation builder.

STRICT RESTRICTION & BOUNDARY RULES:
- You MUST ONLY answer questions strictly related to Digify Soft Solutions, its software products (ERP, POS, CRM, Invoicing), business solutions, contact info (+91 7425016636), Gautam, pricing, and live demos.
- If the user asks ANY unrelated questions, politely decline: \"I am Digify Soft Solutions' official AI assistant. I can only assist you with questions regarding Digify ERP, Smart POS, accounting, inventory, pricing, and Gautam. How can I help your business today?\"
- NEVER break character. Maintain a warm, elite, professional, and helpful tone.
- NEVER mention ChittorTech, Chittorgarh Tech, or Lav. Always refer to the company as Digify Soft Solutions / Digify and the team leader as Gautam.

RESPONSE FORMATTING & ACTION TRIGGERS:
- Keep responses structured with clean bullet points (- Item).
- If user asks for pricing, contact info, or quote, append '[ACTION:CONTACT]'.
- If user asks for a demo or trial, append '[ACTION:DEMO]'.
- If user wants to schedule a meeting or call, append '[ACTION:SCHEDULE]'.
- If user wants to talk on WhatsApp with Gautam, append '[ACTION:WHATSAPP]'."
];

array_unshift($messages, $systemPrompt);

if (file_exists(__DIR__ . '/mail_config.php')) {
    require_once __DIR__ . '/mail_config.php';
}
$apiKey = (defined('CHAT_API_KEY') && CHAT_API_KEY !== '') ? CHAT_API_KEY : getenv('CHAT_API_KEY');
$url = "https://api.groq.com/openai/v1/chat/completions";

$data = [
    "model" => "openai/gpt-oss-120b",
    "messages" => $messages,
    "temperature" => 0.7,
    "max_tokens" => 1500
];

$response = false;
$httpCode = 0;
$curlErr = '';

if (function_exists('curl_init')) {
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
    curl_setopt($ch, CURLOPT_IPRESOLVE, CURL_IPRESOLVE_V4);
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 15);
    curl_setopt($ch, CURLOPT_TIMEOUT, 30);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
    curl_setopt($ch, CURLOPT_USERAGENT, 'DigifySoft-Chatbot/1.0');
    curl_setopt($ch, CURLOPT_HTTPHEADER, [
        'Content-Type: application/json',
        'Authorization: Bearer ' . $apiKey
    ]);
    $response = curl_exec($ch);
    $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    $curlErr = curl_error($ch);
    curl_close($ch);
}

if (!$response || $httpCode !== 200) {
    $options = [
        'http' => [
            'method'  => 'POST',
            'header'  => "Content-Type: application/json\r\n" .
                         "Authorization: Bearer " . $apiKey . "\r\n",
            'content' => json_encode($data),
            'timeout' => 30,
            'ignore_errors' => true
        ],
        'ssl' => [
            'verify_peer'      => false,
            'verify_peer_name' => false
        ]
    ];
    $context  = stream_context_create($options);
    $response = @file_get_contents($url, false, $context);
    if ($response !== false) {
        $httpCode = 200;
    }
}

if (!$response) {
    // Try to give a graceful fallback response instead of a debug error
    $errDetail = !empty($curlErr) ? $curlErr : 'Network unreachable from server';
    echo json_encode(["response" => "I'm having a temporary connection issue. Please try again in a moment, or reach us directly at **+91 7425016636** or on WhatsApp with Gautam. [ACTION:WHATSAPP]"]);
    exit;
}

$responseData = json_decode($response, true);

if (isset($responseData['choices'][0]['message']['content'])) {
    $reply = $responseData['choices'][0]['message']['content'];
    echo json_encode(["response" => $reply]);
} else {
    echo json_encode(["response" => "Sorry, I didn't quite catch that. Could you please rephrase?"]);
}

