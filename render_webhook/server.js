const http = require('http');

const PORT = process.env.PORT || 3000;
const GROQ_API_KEY = process.env.GROQ_API_KEY || '';
const GOSHORT_TOKEN = process.env.GOSHORT_TOKEN || '';
const GOSHORT_API_URL = 'https://wa20.nuke.co.in/v5/api/index.php/addbroadcast';

const server = http.createServer((req, res) => {
  // CORS & Header
  res.setHeader('Access-Control-Allow-Origin', '*');
  res.setHeader('Access-Control-Allow-Methods', 'GET, POST, OPTIONS');
  res.setHeader('Access-Control-Allow-Headers', 'Content-Type');

  if (req.method === 'OPTIONS') {
    res.writeHead(204);
    res.end();
    return;
  }

  // Health check endpoint
  if (req.method === 'GET' && (req.url === '/' || req.url === '/health')) {
    res.writeHead(200, { 'Content-Type': 'application/json' });
    res.end(JSON.stringify({ status: 'active', message: 'Digify WhatsApp AI Webhook Bot is Running live on Render!' }));
    return;
  }

  // Webhook verification challenge (if any)
  if (req.method === 'GET' && req.url.includes('/webhook')) {
    const urlObj = new URL(req.url, `http://${req.headers.host}`);
    const challenge = urlObj.searchParams.get('hub.challenge') || urlObj.searchParams.get('challenge') || 'OK';
    res.writeHead(200, { 'Content-Type': 'text/plain' });
    res.end(challenge);
    return;
  }

  // Handle incoming POST Webhook from GoShort
  if (req.method === 'POST' && (req.url === '/webhook' || req.url === '/')) {
    let body = '';
    req.on('data', chunk => { body += chunk.toString(); });
    req.on('end', async () => {
      try {
        console.log('--- Incoming GoShort Webhook Request ---');
        console.log(body);

        let input = {};
        try {
          input = JSON.parse(body);
        } catch (e) {
          console.error('Invalid JSON payload:', body);
        }

        // Extract sender and message text
        let sender = '';
        let userMessage = '';

        if (input.from) sender = String(input.from).replace(/\D/g, '');
        else if (input.sender) sender = String(input.sender).replace(/\D/g, '');
        else if (input.phone) sender = String(input.phone).replace(/\D/g, '');

        if (typeof input.message === 'string') userMessage = input.message;
        else if (input.message && input.message.text) userMessage = input.message.text;
        else if (input.message && input.message.body) userMessage = input.message.body;
        else if (typeof input.text === 'string') userMessage = input.text;
        else if (input.text && input.text.body) userMessage = input.text.body;
        else if (input.body) userMessage = input.body;

        if (!sender || !userMessage) {
          console.log('Ignored: missing sender or message text');
          res.writeHead(200, { 'Content-Type': 'application/json' });
          res.end(JSON.stringify({ status: 'ignored', reason: 'Missing sender or message' }));
          return;
        }

        console.log(`Processing message from ${sender}: "${userMessage}"`);

        // Generate AI Response using Groq LLM API
        const messages = [
          {
            role: "system",
            content: `You are Digify Saathi, the official AI Assistant for Digify Soft Solutions responding directly via WhatsApp on +91 7425016636.
Keep replies short, polite, helpful, clear, and optimized for WhatsApp chat (use bullet points and line breaks).

COMPANY OVERVIEW & CONTACTS:
- Company: Digify Soft Solutions (Cloud ERP, Smart POS, Accounting, CRM & Automation Software Firm).
- Bot / Official WhatsApp: +91 7425016636
- Contact Person / Founder: Gautam (+91 7425016636)

PRODUCTS & SERVICES:
1. Digify AI Business Platform & ERP: Cloud ERP for Manufacturers, Retail Chains, Supermarkets, Restaurants, Garments, Pharma & Wholesale.
2. Smart POS Software: Offline-first high-speed billing, thermal printing, GST calculation, inventory sync.
3. Accounting & Invoicing: E-Invoicing & E-Way Bill integration, Tally sync, ZATCA VAT compliance, auto GST filing.
4. Centralized Inventory & Supply Chain: Multi-warehouse management, reorder alerts, batch/expiry tracking.
5. Omnichannel Retail & E-Commerce: Direct Shopify / WooCommerce integration, WhatsApp order alerts.
6. Custom CRM & Lead Automation: Inbound/outbound sales pipelines, follow-ups, quotation builder.

RULES:
- Answer ONLY questions strictly related to Digify Soft Solutions, its software products, pricing, and live demos.
- Do NOT write long essays. Keep answers structured for mobile screens.
- If asked for demo, pricing or call, invite them to speak directly with Gautam on +91 7425016636 or book a live demo.`
          },
          {
            role: "user",
            content: userMessage
          }
        ];

        // Call Groq API via fetch
        const groqRes = await fetch('https://api.groq.com/openai/v1/chat/completions', {
          method: 'POST',
          headers: {
            'Content-Type': 'application/json',
            'Authorization': `Bearer ${GROQ_API_KEY}`
          },
          body: JSON.stringify({
            model: "openai/gpt-oss-120b",
            messages: messages,
            temperature: 0.7,
            max_tokens: 500
          })
        });

        const groqData = await groqRes.json();
        const replyText = (groqData.choices && groqData.choices[0] && groqData.choices[0].message) 
          ? groqData.choices[0].message.content 
          : "Thank you for contacting Digify Soft Solutions! How can we assist your business today?";

        console.log(`Generated AI Reply for ${sender}:`, replyText);

        // Send outbound reply back via GoShort API
        const sendPayload = {
          broadcast_service: "whatsApp_credits",
          broadcast_name: "Chatbot Reply to " + sender,
          template_id: "digify",
          contacts: sender,
          custom_message: replyText
        };

        const goShortRes = await fetch(GOSHORT_API_URL, {
          method: 'POST',
          headers: {
            'Authorization': GOSHORT_TOKEN,
            'Content-Type': 'application/json'
          },
          body: JSON.stringify(sendPayload)
        });

        const goShortData = await goShortRes.json();
        console.log('GoShort API Response:', goShortData);

        res.writeHead(200, { 'Content-Type': 'application/json' });
        res.end(JSON.stringify({
          status: 'success',
          sender: sender,
          reply: replyText,
          goshort_response: goShortData
        }));

      } catch (err) {
        console.error('Error handling webhook:', err);
        res.writeHead(500, { 'Content-Type': 'application/json' });
        res.end(JSON.stringify({ error: err.message }));
      }
    });
    return;
  }

  res.writeHead(404, { 'Content-Type': 'text/plain' });
  res.end('Not Found');
});

server.listen(PORT, () => {
  console.log(`Digify WhatsApp Webhook Server listening on port ${PORT}`);
});
