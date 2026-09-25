<?php
header('Content-Type: application/json');
ini_set('display_errors', 0);
error_reporting(0);

include_once __DIR__ . '/db.php';
require_once __DIR__ . '/includes/mail_helper.php';

$inputJSON = file_get_contents('php://input');
$input = json_decode($inputJSON, true);

$name    = trim($input['name'] ?? '');
$phone   = trim($input['phone'] ?? '');
$source  = trim($input['source'] ?? 'Digify AI Chatbot');
$service = trim($input['service'] ?? 'General Inquiry');
$date    = trim($input['date'] ?? '');
$slot    = trim($input['slot'] ?? '');
$notes   = trim($input['notes'] ?? '');

if (empty($name) || empty($phone)) {
    echo json_encode(['status' => 'error', 'message' => 'Name and phone are required']);
    exit;
}

// 1. Insert into Database if connection available
$inserted = false;
if (isset($conn) && $conn) {
    $name_esc    = mysqli_real_escape_string($conn, $name);
    $phone_esc   = mysqli_real_escape_string($conn, $phone);
    $source_esc  = mysqli_real_escape_string($conn, $source);
    $service_esc = mysqli_real_escape_string($conn, $service);
    $notes_esc   = mysqli_real_escape_string($conn, $notes);

    $sql = "INSERT INTO crm_leads (name, mobile, whatsapp, location, industry, firm, remark, created_at)
            VALUES ('$name_esc', '$phone_esc', '$phone_esc', 'Chatbot', '$service_esc', '$source_esc', '$notes_esc', NOW())";
    @mysqli_query($conn, $sql);

    $sql2 = "INSERT INTO leads_master (lead_name, phone, message, source, created_at)
             VALUES ('$name_esc', '$phone_esc', 'Service: $service_esc | Notes: $notes_esc', '$source_esc', NOW())";
    @mysqli_query($conn, $sql2);
}

// 2. Prepare & Send Email via Digify SMTP / Mail Helper
$to = 'webdev.digifysoft@gmail.com,support@digifysoft.in';
$subject = "New Digify AI Lead Captured: $name ($service)";

$body  = "You have received a new lead from Digify AI Chatbot\n\n";
$body .= "Name: $name\n";
$body .= "WhatsApp / Mobile: $phone\n";
$body .= "Lead Source: $source\n";
$body .= "Selected Service: $service\n";
if (!empty($date)) {
    $body .= "Preferred Date: $date\n";
}
if (!empty($slot)) {
    $body .= "Time Slot: $slot\n";
}
if (!empty($notes)) {
    $body .= "\nMessage / Requirement:\n$notes\n";
}

$headers = "From: Digify AI Lead <webdev.digifysoft@gmail.com>\r\n";
$headers .= "Reply-To: webdev.digifysoft@gmail.com\r\n";

$mailSent = @send_lead_email($to, $subject, $body, $headers);

echo json_encode([
    'status' => 'success',
    'message' => 'Lead saved and notification sent to webdev.digifysoft@gmail.com',
    'mail_sent' => $mailSent
]);
