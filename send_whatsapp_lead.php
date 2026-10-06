<?php
header('Content-Type: application/json');
include_once __DIR__ . '/db.php';  
require_once __DIR__ . '/whatsapp_config.php';

$input = json_decode(file_get_contents("php://input"), true);

$lead_name = (isset($conn) && $conn) ? mysqli_real_escape_string($conn, $input['lead_name'] ?? '') : addslashes($input['lead_name'] ?? '');
$phone     = (isset($conn) && $conn) ? mysqli_real_escape_string($conn, $input['phone'] ?? '') : addslashes($input['phone'] ?? '');
$message   = (isset($conn) && $conn) ? mysqli_real_escape_string($conn, $input['message'] ?? '') : addslashes($input['message'] ?? '');
$source    = 'WhatsApp Icon';
$response  = [];

if (!empty($lead_name) && !empty($phone)) {

    // --- Insert Lead ---
    $insert = false;
    if (isset($conn) && $conn) {
        $insertSql = "INSERT INTO leads_master (lead_name, phone, message, source, created_at)
                      VALUES ('$lead_name', '$phone', '$message', '$source', NOW())";
        $insert = @mysqli_query($conn, $insertSql);
    }

    if ($insert || !isset($conn) || !$conn) {
        // --- Call AutoBotChat / Innuvis WhatsApp Template API ---
        $cleanPhone = preg_replace('/\D/', '', $phone);
        $campaignName = "Website Lead - " . (!empty($lead_name) ? $lead_name : "Visitor");
        
        // Use approved template: lmsnewlead (Template ID: 38377)
        $apiResult = send_whatsapp_template_broadcast($cleanPhone, 'lmsnewlead', $campaignName);

        $response['status'] = $apiResult['success'] ? 'success' : 'partial_success';
        $response['msg'] = 'Lead saved and WhatsApp AutoBotChat API triggered.';
        $response['api_response'] = $apiResult['response'];
        if (!$apiResult['success']) {
            $response['api_error'] = $apiResult['error'];
        }

    } else {
        $response['status'] = 'error';
        $response['msg'] = 'Failed to insert lead into database.';
        $response['sql_error'] = (isset($conn) && $conn) ? mysqli_error($conn) : 'No database connection';
    }
} else {
    $response['status'] = 'error';
    $response['msg'] = 'Missing required fields (lead_name and phone).';
}

echo json_encode($response);
