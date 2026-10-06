<?php
/**
 * Digify Soft Solutions - AutoBotChat / Innuvis WhatsApp Configuration & Helper
 */

// 1. Function to parse and load .env file if present
function load_digify_env($envPath = __DIR__ . '/.env') {
    if (!file_exists($envPath)) {
        return;
    }
    $lines = file($envPath, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    foreach ($lines as $line) {
        $line = trim($line);
        if (empty($line) || strpos($line, '#') === 0) {
            continue;
        }
        if (strpos($line, '=') !== false) {
            list($key, $val) = explode('=', $line, 2);
            $key = trim($key);
            $val = trim($val);
            // Remove surrounding quotes if present
            $val = trim($val, "\"'");
            if (!isset($_ENV[$key])) {
                $_ENV[$key] = $val;
            }
            if (getenv($key) === false) {
                putenv("$key=$val");
            }
        }
    }
}

// Automatically load .env
load_digify_env();

// 2. Constants & Settings
if (!defined('AUTOBOTCHAT_USERNAME')) {
    define('AUTOBOTCHAT_USERNAME', getenv('AUTOBOTCHAT_USERNAME') ?: 'Digify_soft');
}
if (!defined('AUTOBOTCHAT_JWT_TOKEN')) {
    define('AUTOBOTCHAT_JWT_TOKEN', getenv('AUTOBOTCHAT_JWT_TOKEN') ?: 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpYXQiOjE3NjA3MDY0NDYsImRhdGEiOnsidXNlcm5hbWUiOiJEaWdpZnlfc29mdCIsIm5hbWUiOiJEaWdpZnlfc29mdCJ9fQ.lbhITMYPzs0RvDRf-YhqbJ5r63rFUPnInfTnIG_T998');
}
if (!defined('BOT_PHONE_NUMBER')) {
    define('BOT_PHONE_NUMBER', getenv('BOT_PHONE_NUMBER') ?: '917425016636');
}
if (!defined('AUTOBOTCHAT_V5_BROADCAST_API')) {
    define('AUTOBOTCHAT_V5_BROADCAST_API', getenv('AUTOBOTCHAT_V5_BROADCAST_API') ?: 'https://wa20.nuke.co.in/v5/api/index.php/addbroadcast');
}
if (!defined('AUTOBOTCHAT_V6_SESSION_API')) {
    define('AUTOBOTCHAT_V6_SESSION_API', getenv('AUTOBOTCHAT_V6_SESSION_API') ?: 'https://wa20.nuke.co.in/v6/api/whatsapp/24/Digify_soft/messages');
}

// Approved Templates
$GLOBALS['DIGIFY_WA_TEMPLATES'] = [
    'lmsnewlead'            => ['id' => '38377', 'name' => 'lmsnewlead',            'desc' => 'Automated reply on getting new lead'],
    'pnpenterpreneurgroup'  => ['id' => '38382', 'name' => 'pnpenterpreneurgroup',  'desc' => 'Entrepreneur group welcome/intro'],
    'lmsinterestedpostdemo' => ['id' => '38376', 'name' => 'lmsinterestedpostdemo', 'desc' => 'Post-demo interested follow-up'],
    'lmsproposalneeded'     => ['id' => '38375', 'name' => 'lmsproposalneeded',     'desc' => 'Proposal needed post-demo'],
    'lmsfollowupneeded'     => ['id' => '38374', 'name' => 'lmsfollowupneeded',     'desc' => 'Follow-up cases post-demo']
];

/**
 * Send WhatsApp Template Message (v5 Broadcast API)
 * 
 * @param string|array $contacts Comma-separated string or array of numbers (e.g., '917425016636')
 * @param string $templateId Template Name or ID (e.g., 'lmsnewlead' or '38377')
 * @param string $broadcastName Campaign label
 * @return array ['success' => bool, 'http_code' => int, 'response' => array|string, 'error' => string|null]
 */
function send_whatsapp_template_broadcast($contacts, $templateId = 'lmsnewlead', $broadcastName = 'Digify Website Lead') {
    if (is_array($contacts)) {
        // v5 requires comma-separated string, NOT a JSON array
        $contactsStr = implode(',', array_filter(array_map(function($num) {
            return preg_replace('/\D/', '', (string)$num);
        }, $contacts)));
    } else {
        $contactsStr = preg_replace('/\D/', '', (string)$contacts);
    }

    if (empty($contactsStr)) {
        return [
            'success'   => false,
            'http_code' => 400,
            'error'     => 'Empty or invalid contacts provided'
        ];
    }

    $payload = [
        'brodcast_service' => 'whatsapp_credits',
        'broadcast_name'   => $broadcastName,
        'template_id'      => (string)$templateId,
        'contacts'         => $contactsStr
    ];

    $ch = curl_init(AUTOBOTCHAT_V5_BROADCAST_API);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
    curl_setopt($ch, CURLOPT_TIMEOUT, 15);
    curl_setopt($ch, CURLOPT_HTTPHEADER, [
        'Authorization: ' . AUTOBOTCHAT_JWT_TOKEN,
        'Content-Type: application/json'
    ]);
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($payload));

    $raw = curl_exec($ch);
    $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    $curlErr = curl_error($ch);
    curl_close($ch);

    $json = json_decode($raw, true);
    $isSuccess = ($httpCode === 200 && is_array($json) && !empty($json['status']) && $json['status'] === true);

    return [
        'success'   => $isSuccess,
        'http_code' => $httpCode,
        'response'  => $json ?: $raw,
        'error'     => $curlErr ?: null
    ];
}

/**
 * Send WhatsApp Session / Interactive Message (v6 Session API)
 * Note: Session messages can be sent within 24 hours of customer inbound conversation.
 */
function send_whatsapp_session_message($toPhone, $messageText) {
    $cleanPhone = preg_replace('/\D/', '', (string)$toPhone);
    if (empty($cleanPhone) || empty($messageText)) {
        return ['success' => false, 'error' => 'Missing phone or message text'];
    }

    $payload = [
        'messaging_product' => 'whatsapp',
        'recipient_type'    => 'individual',
        'to'                => $cleanPhone,
        'type'              => 'text',
        'text'              => [
            'preview_url' => false,
            'body'        => $messageText
        ]
    ];

    $ch = curl_init(AUTOBOTCHAT_V6_SESSION_API);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
    curl_setopt($ch, CURLOPT_TIMEOUT, 15);
    curl_setopt($ch, CURLOPT_HTTPHEADER, [
        'Authorization: Bearer ' . AUTOBOTCHAT_JWT_TOKEN,
        'Content-Type: application/json'
    ]);
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($payload));

    $raw = curl_exec($ch);
    $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    $curlErr = curl_error($ch);
    curl_close($ch);

    $json = json_decode($raw, true);
    $isSuccess = ($httpCode === 200);

    return [
        'success'   => $isSuccess,
        'http_code' => $httpCode,
        'response'  => $json ?: $raw,
        'error'     => $curlErr ?: null
    ];
}
