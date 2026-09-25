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
- Company: Digify Soft Solutions (Leading Cloud ERP, Smart POS, IT Services, Web & Mobile App Development Company).
- Contact Person / Leader: Gautam (+91 7425016636).
- Official Phone / WhatsApp: +91 7425016636
- Email: webdev.digifysoft@gmail.com, support@digifysoft.in
- Headquarters: India (Serving India, UAE, Saudi Arabia, South Africa, Kenya, Nepal, Sri Lanka, USA, UK, Canada).

COMPLETE CATALOG OF PRODUCTS, SERVICES & SOLUTIONS:
1. Digify Cloud ERP & Smart POS:
   - Smart POS Software: 3-Second high-speed barcode billing, thermal printing, offline billing mode, GST auto-calculation.
   - Cloud ERP Suites: Manufacturing ERP (BOM, WIP, shop-floor QC, batch costing), Retail & Supermarket ERP, Garments & Apparel ERP (size/color matrix, barcode tags), Kirana & Mini-Marts, Footwear, Fashion Boutiques, Departmental Stores, Books & Stationery.
   - Food & Hospitality: Restaurant & Café POS, KOT Kitchen Displays, Table & Menu Management, Swiggy/Zomato Integration.
   - Special Industry Solutions: Pharma & Chemicals, Electronics & Assembly, Consumer Goods, Industrial Machinery, After-Sales & Warranty Suite, AMC Management, Wholesale & Trade, B2B Distribution, Cosmetics & Wellness, Home Decor, Jewellery & Gems, Schools & Education, Hospitals & Clinics, Trust & Temple Management.

2. Accounting, Compliance & AI Automation:
   - Accounting & Invoicing: E-Invoicing & E-Way Bill automation, Tally Data Sync, Saudi ZATCA VAT Phase-2 Compliance, Auto GST return filing.
   - Inventory & Supply Chain: Multi-warehouse management, reorder alerts, batch & expiry tracking, serial numbers.
   - CRM & Lead Intelligence: Automated sales pipelines, quotation builder, customer scoring, WhatsApp lead automation.
   - Staff & Payroll Management: Attendance tracking, salary processing, employee management.
   - AI Business Intelligence: Real-time predictive signals, inventory forecasting, shop-floor AI automation, 24/7 WhatsApp AI Agents.

3. IT SERVICES & SOFTWARE DEVELOPMENT:
   - Android App Development: High-performance native Android apps, tablet POS apps, Play Store publishing, UI/UX design, app maintenance & API integration.
   - iOS App Development: Native iPhone & iPad apps, Swift development, Apple ecosystem integration, App Store deployment.
   - Web Development & E-Commerce: Custom responsive websites, Shopify & WooCommerce integration, high-speed landing pages, web applications.
   - SEO & Digital Growth Services: On-page SEO, Technical SEO, Off-page link building, Social Media Optimization (SMO), organic lead generation audits.

STRICT RESTRICTION & BOUNDARY RULES:
- You MUST answer all questions regarding Digify Soft Solutions, its ERP, POS, IT Services (Android App Development, iOS App Development, Web Development, SEO), pricing, Gautam (+91 7425016636), and live demos.
- If the user asks about Android/iOS app development, web development, or SEO, explain Digify's expertise in detail and invite them to discuss their project with Gautam (+91 7425016636).
- If the user asks ANY completely unrelated non-business question, politely decline: \"I am Digify Soft Solutions' official AI assistant. I can assist you with Digify ERP, Smart POS, Mobile App Development, Web Development, SEO, and Gautam's contact info (+91 7425016636). How can I help your business today?\"
- Always refer to the company strictly as Digify Soft Solutions / Digify and the team leader as Gautam (+91 7425016636).

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
$apiKey = getenv('CHAT_API_KEY') ?: (getenv('GROQ_API_KEY') ?: (defined('CHAT_API_KEY') ? CHAT_API_KEY : ''));
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

