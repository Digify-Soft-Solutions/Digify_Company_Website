<?php
/**
 * Digify Soft Solutions - Directory Webhook Handler
 * Ensures requests to /webhook or /webhook/ are handled natively by Apache
 * without depending on mod_rewrite or .htaccess
 */
require_once dirname(__DIR__) . '/whatsapp_webhook.php';
