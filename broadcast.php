<?php
// broadcast.php — WhatsApp AutoBotChat Broadcast Sender
require_once __DIR__ . '/whatsapp_config.php';

$response = '';
$status = '';
$sentJson = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $broadcastService = trim($_POST['broadcast_service'] ?? 'whatsapp_credits');
    $broadcastName    = trim($_POST['broadcast_name'] ?? 'Campaign');
    $templateId       = trim($_POST['template_id'] ?? 'lmsnewlead');
    $contactsRaw      = trim($_POST['contacts'] ?? '');

    // Format contacts as clean comma-separated phone string
    $contactsArray = array_filter(array_map(function($c) {
        return preg_replace('/\D/', '', trim($c));
    }, explode(',', $contactsRaw)));
    $contactsString = implode(',', $contactsArray);

    $data = [
        "brodcast_service" => $broadcastService,
        "broadcast_name"   => $broadcastName,
        "template_id"      => $templateId,
        "contacts"         => $contactsString
    ];
    $sentJson = json_encode($data, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES);

    $ch = curl_init(AUTOBOTCHAT_V5_BROADCAST_API);
    curl_setopt_array($ch, [
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_POST           => true,
        CURLOPT_SSL_VERIFYPEER => false,
        CURLOPT_SSL_VERIFYHOST => 0,
        CURLOPT_HTTPHEADER     => [
            'Content-Type: application/json',
            'Authorization: ' . AUTOBOTCHAT_JWT_TOKEN
        ],
        CURLOPT_POSTFIELDS     => json_encode($data, JSON_UNESCAPED_SLASHES)
    ]);

    $response = curl_exec($ch);
    if ($response === false) {
        $status = 'cURL Error: ' . curl_error($ch);
    } else {
        $status = 'HTTP ' . curl_getinfo($ch, CURLINFO_HTTP_CODE);
    }
    curl_close($ch);
}

$templates = $GLOBALS['DIGIFY_WA_TEMPLATES'] ?? [];
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>AutoBotChat WhatsApp Broadcast Sender - Digify Soft</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body { font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, sans-serif; background: #0f172a; padding: 40px 20px; color: #f1f5f9; margin: 0; }
.container { max-width: 650px; margin: auto; background: #1e293b; padding: 30px; border-radius: 16px; box-shadow: 0 10px 30px rgba(0,0,0,0.4); border: 1px solid #334155; }
h2 { display: flex; align-items: center; gap: 12px; color: #22c55e; margin-top: 0; font-size: 22px; }
svg { width: 28px; height: 28px; }
.badge { background: rgba(34, 197, 94, 0.15); color: #4ade80; padding: 4px 10px; border-radius: 6px; font-size: 12px; font-weight: 600; }
label { display: block; margin-top: 16px; font-weight: 600; color: #cbd5e1; font-size: 13px; text-transform: uppercase; letter-spacing: 0.5px; }
input, select, textarea { width: 100%; box-sizing: border-box; padding: 12px; background: #0f172a; border: 1px solid #334155; border-radius: 8px; margin-top: 6px; font-size: 14px; color: #f8fafc; outline: none; transition: border-color 0.2s; }
input:focus, select:focus, textarea:focus { border-color: #22c55e; }
textarea { resize: vertical; min-height: 70px; font-family: monospace; }
.hint { font-size: 12px; color: #94a3b8; margin-top: 4px; }
button { margin-top: 24px; background: #22c55e; color: #0f172a; font-weight: 700; border: none; padding: 14px 22px; font-size: 15px; border-radius: 8px; cursor: pointer; display: flex; align-items: center; justify-content: center; gap: 8px; width: 100%; transition: background 0.2s; }
button:hover { background: #16a34a; color: #fff; }
.response { margin-top: 25px; white-space: pre-wrap; background: #090d16; border: 1px solid #334155; padding: 15px; border-radius: 8px; font-family: monospace; font-size: 13px; color: #38bdf8; overflow-x: auto; }
.info-box { background: rgba(56, 189, 248, 0.1); border: 1px solid rgba(56, 189, 248, 0.2); border-radius: 8px; padding: 12px; margin-bottom: 20px; font-size: 13px; line-height: 1.5; color: #bae6fd; }
</style>
</head>
<body>
<div class="container">
  <h2>
    <svg viewBox="0 0 32 32"><path fill="#22c55e" d="M16 0C7.2 0 0 7.1 0 15.9c0 2.8.7 5.5 2 7.9L0 32l8.5-2.2c2.3 1.2 4.9 1.8 7.5 1.8 8.8 0 16-7.1 16-15.9S24.8 0 16 0z"/><path fill="#FFF" d="M24 21.2c-.3-.1-1.8-.9-2-1-.3-.1-.5-.2-.7.2-.2.3-.7 1-.9 1.2-.2.2-.3.2-.6.1-1.6-.8-2.8-1.4-3.9-3.1-.3-.4.3-.4.9-1.3.1-.2.1-.3 0-.5-.1-.1-.7-1.6-.9-2.3-.2-.6-.5-.5-.7-.6-.2 0-.4 0-.6 0-.2 0-.6.1-.9.4-.3.3-1.1 1-1.1 2.5s1 2.8 1.2 3.1c.1.2 2.3 3.4 5.6 4.6 3.3 1.2 3.3.8 3.9.7.6-.1 1.8-.7 2.1-1.4.3-.7.3-1.3.2-1.5-.1-.1-.3-.2-.6-.3z"/></svg>
    AutoBotChat Broadcast Sender
    <span class="badge">Innuvis v5 API</span>
  </h2>

  <div class="info-box">
    <strong>Sender Account:</strong> <?= htmlspecialchars(AUTOBOTCHAT_USERNAME) ?> (<?= htmlspecialchars(BOT_PHONE_NUMBER) ?>)<br>
    <strong>API:</strong> <?= htmlspecialchars(AUTOBOTCHAT_V5_BROADCAST_API) ?>
  </div>

  <form method="POST">
    <label>Broadcast Service</label>
    <input type="text" name="broadcast_service" value="whatsapp_credits" required>

    <label>Campaign Name</label>
    <input type="text" name="broadcast_name" value="lms_campaign" required>

    <label>Select Approved Template</label>
    <select name="template_id" required>
      <?php foreach ($templates as $key => $tmpl): ?>
        <option value="<?= htmlspecialchars($tmpl['name']) ?>">
          <?= htmlspecialchars($tmpl['name']) ?> (ID: <?= htmlspecialchars($tmpl['id']) ?>) &mdash; <?= htmlspecialchars($tmpl['desc']) ?>
        </option>
      <?php endforeach; ?>
    </select>
    <div class="hint">Templates approved in Innuvis Dashboard for Digify_soft</div>

    <label>Recipient Contacts (Comma separated with country code)</label>
    <textarea name="contacts" placeholder="917425016636, 918233816675" required>917425016636</textarea>
    <div class="hint">Example: 917425016636, 918233816675 (without + or spaces)</div>

    <button type="submit">
      <svg viewBox="0 0 24 24"><path fill="currentColor" d="M2 21l21-9L2 3v7l15 2-15 2z"/></svg>
      Send WhatsApp Broadcast
    </button>
  </form>

  <?php if ($_SERVER['REQUEST_METHOD'] === 'POST'): ?>
  <div class="response">
<b>HTTP Status:</b> <?= htmlspecialchars($status) . "\n\n" ?>
<b>Sent Request Payload:</b>
<?= htmlspecialchars($sentJson) . "\n\n" ?>
<b>AutoBotChat Server Response:</b>
<?= htmlspecialchars($response ?: 'No response received') ?>
  </div>
  <?php endif; ?>
</div>
</body>
</html>
