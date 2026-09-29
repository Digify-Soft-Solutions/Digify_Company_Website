<?php
/**
 * Digify Soft Solutions - B2B Lead Engine Cloud Backend API
 * Running on Render.com Web Service
 * Endpoint: https://digify-company-website.onrender.com/b2b_leads_api.php
 */

header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST, OPTIONS');
header('Access-Control-Allow-Headers: Content-Type, Authorization, X-Requested-With');

// Handle preflight CORS OPTIONS request
if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
    http_response_code(200);
    exit(0);
}

ini_set('display_errors', 0);
error_reporting(0);

$dataDir = __DIR__ . '/data';
if (!is_dir($dataDir)) {
    @mkdir($dataDir, 0777, true);
}
$dataFile = $dataDir . '/digify_b2b_leads.json';

// Helper to load leads from file
function loadLeadsFromFile($file) {
    if (!file_exists($file)) {
        return [];
    }
    $raw = @file_get_contents($file);
    if (empty($raw)) {
        return [];
    }
    $decoded = json_decode($raw, true);
    return is_array($decoded) ? $decoded : [];
}

// Helper to safely write leads to file
function saveLeadsToFile($file, $leads) {
    $json = json_encode($leads, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
    return @file_put_contents($file, $json, LOCK_EX) !== false;
}

$method = $_SERVER['REQUEST_METHOD'];

if ($method === 'GET') {
    $leads = loadLeadsFromFile($dataFile);
    $lastModified = file_exists($dataFile) ? date('c', filemtime($dataFile)) : null;

    echo json_encode([
        "status"        => "success",
        "service"       => "Digify Render Cloud Lead Storage",
        "count"         => count($leads),
        "leads"         => $leads,
        "last_synced"   => $lastModified,
        "server_time"   => date('c')
    ]);
    exit;
}

if ($method === 'POST') {
    $inputRaw = file_get_contents('php://input');
    $input = json_decode($inputRaw, true);

    if (!is_array($input)) {
        echo json_encode(["status" => "error", "message" => "Invalid JSON payload"]);
        exit;
    }

    $action = $input['action'] ?? 'save_all';

    if ($action === 'save_all' || isset($input['leads'])) {
        $newLeads = $input['leads'] ?? [];
        if (!is_array($newLeads)) {
            echo json_encode(["status" => "error", "message" => "Leads payload must be an array"]);
            exit;
        }

        $ok = saveLeadsToFile($dataFile, $newLeads);
        if ($ok) {
            echo json_encode([
                "status"        => "success",
                "message"       => "Leads saved to Render Cloud successfully",
                "count"         => count($newLeads),
                "timestamp"     => date('c')
            ]);
        } else {
            echo json_encode(["status" => "error", "message" => "Failed to write data file on server"]);
        }
        exit;
    }

    if ($action === 'update_lead') {
        $leadId = $input['leadId'] ?? null;
        $updates = $input['updates'] ?? [];

        if (!$leadId || !is_array($updates)) {
            echo json_encode(["status" => "error", "message" => "leadId and updates required"]);
            exit;
        }

        $leads = loadLeadsFromFile($dataFile);
        $found = false;

        foreach ($leads as &$lead) {
            if (($lead['id'] ?? '') === $leadId) {
                foreach ($updates as $k => $v) {
                    $lead[$k] = $v;
                }
                $lead['updatedAt'] = date('c');
                $found = true;
                break;
            }
        }
        unset($lead);

        if ($found) {
            saveLeadsToFile($dataFile, $leads);
            echo json_encode(["status" => "success", "message" => "Lead updated on Render Cloud"]);
        } else {
            echo json_encode(["status" => "error", "message" => "Lead ID not found"]);
        }
        exit;
    }

    if ($action === 'clear_all') {
        saveLeadsToFile($dataFile, []);
        echo json_encode(["status" => "success", "message" => "All leads cleared from Render Cloud"]);
        exit;
    }

    echo json_encode(["status" => "error", "message" => "Unknown action"]);
    exit;
}

http_response_code(405);
echo json_encode(["status" => "error", "message" => "Method not allowed"]);
