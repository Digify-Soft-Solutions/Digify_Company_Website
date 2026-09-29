<?php
/**
 * Digify Soft Solutions - Lightweight Keep-Alive / Health Endpoint
 * Use this URL with UptimeRobot / Cron-job.org to keep Render alive 24/7:
 * https://digify-company-website.onrender.com/ping.php
 */
header('Content-Type: application/json');
echo json_encode([
    "status"    => "alive",
    "service"   => "Digify Web Service",
    "timestamp" => date('Y-m-d H:i:s'),
    "memory_kb" => round(memory_get_usage() / 1024)
]);
