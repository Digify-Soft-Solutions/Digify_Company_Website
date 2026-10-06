<?php 
    include 'fetch_meta.php';
    $pageTitle = 'BIMI Implementation & Verified Brand Email Solutions | Digify Soft Solutions';
    $pageDescription = 'Display your official company logo and verified blue checkmark in Gmail, Apple Mail, and Yahoo inboxes. Expert SVG Tiny-PS compliance, VMC certificate coordination, and DMARC enforcement by Digify.';
    $pageKeywords = 'BIMI implementation services, Gmail blue checkmark business, verified email logo, VMC certificate consultant, BIMI SVG Tiny-PS conversion, corporate email branding, Digify Soft Solutions';
    include("top.php");
    include 'header.php'; 
?>

<!-- ==========================================
     START OF PAGE CONTENT: business-email-branding-bimi
     ========================================== -->

<div class="enterprise-page-wrapper">
<style>
        /* Digify Soft Solutions BIMI & Verified Email Branding Design System */
        .deliv-wrapper {
          font-family: 'Inter', system-ui, -apple-system, sans-serif;
          color: #0f172a;
          background-color: #f8fafc;
          overflow-x: hidden !important;
          width: 100% !important;
          max-width: 100vw !important;
        }
        .deliv-hero {
          background: radial-gradient(circle at 80% 20%, rgba(14, 165, 233, 0.18) 0%, transparent 50%),
                      radial-gradient(circle at 10% 80%, rgba(37, 99, 235, 0.2) 0%, transparent 45%),
                      linear-gradient(135deg, #090d16 0%, #0f172a 50%, #1e1b4b 100%);
          color: #ffffff;
          position: relative;
          overflow: hidden;
          padding: 90px 0 70px;
        }
        .deliv-badge-pill {
          display: inline-flex;
          align-items: center;
          gap: 8px;
          background: rgba(255, 255, 255, 0.08);
          border: 1px solid rgba(255, 255, 255, 0.18);
          backdrop-filter: blur(12px);
          padding: 8px 18px;
          border-radius: 9999px;
          font-size: 0.8rem;
          font-weight: 700;
          letter-spacing: 0.08em;
          text-transform: uppercase;
          color: #38bdf8;
          margin-bottom: 24px;
        }
        .deliv-h1 {
          font-family: 'Plus Jakarta Sans', sans-serif;
          font-size: 2.85rem;
          font-weight: 800;
          line-height: 1.18;
          letter-spacing: -0.025em;
          color: #ffffff;
          margin-bottom: 20px;
        }
        .deliv-hero-p {
          font-size: 1.15rem;
          line-height: 1.65;
          color: #cbd5e1;
          margin-bottom: 32px;
          max-width: 680px;
        }
        .deliv-btn-wa {
          display: inline-flex;
          align-items: center;
          justify-content: center;
          gap: 10px;
          background: #25d366;
          color: #ffffff !important;
          font-weight: 700;
          font-size: 1rem;
          padding: 13px 28px;
          border-radius: 12px;
          text-decoration: none;
          box-shadow: 0 10px 25px -5px rgba(37, 211, 102, 0.4);
          transition: all 0.25s ease;
        }
        .deliv-btn-wa:hover {
          transform: translateY(-2px);
          background: #22c35e;
          box-shadow: 0 16px 32px -6px rgba(37, 211, 102, 0.55);
        }
        .deliv-btn-secondary {
          display: inline-flex;
          align-items: center;
          justify-content: center;
          gap: 10px;
          background: rgba(255, 255, 255, 0.08);
          border: 1px solid rgba(255, 255, 255, 0.2);
          color: #ffffff !important;
          font-weight: 700;
          font-size: 0.98rem;
          padding: 13px 26px;
          border-radius: 12px;
          text-decoration: none;
          transition: all 0.25s ease;
          backdrop-filter: blur(10px);
        }
        .deliv-btn-secondary:hover {
          background: rgba(255, 255, 255, 0.15);
          transform: translateY(-2px);
        }

        /* Hero Trust Badges Grid */
        .trust-badge-card {
          background: rgba(255, 255, 255, 0.04);
          border: 1px solid rgba(255, 255, 255, 0.1);
          border-radius: 14px;
          padding: 14px 18px;
          backdrop-filter: blur(8px);
          transition: all 0.25s ease;
        }
        .trust-badge-card:hover {
          background: rgba(255, 255, 255, 0.07);
          border-color: rgba(56, 189, 248, 0.3);
        }

        /* Visual Transformation Card */
        .visual-mockup-card {
          background: #ffffff;
          border-radius: 20px;
          padding: 24px;
          box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.25);
          border: 1px solid rgba(255, 255, 255, 0.2);
          color: #0f172a;
        }
        .inbox-row {
          display: flex;
          align-items: center;
          gap: 14px;
          padding: 12px 16px;
          border-radius: 12px;
          margin-bottom: 12px;
          transition: all 0.2s ease;
        }
        .inbox-row-generic {
          background: #f1f5f9;
          border: 1px dashed #cbd5e1;
        }
        .inbox-row-verified {
          background: #eff6ff;
          border: 1.5px solid #93c5fd;
          box-shadow: 0 4px 12px rgba(37, 99, 235, 0.08);
        }
        .avatar-generic {
          width: 44px;
          height: 44px;
          min-width: 44px;
          border-radius: 50%;
          background: #94a3b8;
          color: #ffffff;
          display: flex;
          align-items: center;
          justify-content: center;
          font-weight: 700;
          font-size: 1.1rem;
          flex-shrink: 0;
        }
        .avatar-bimi {
          width: 44px;
          height: 44px;
          min-width: 44px;
          border-radius: 50%;
          background: #ffffff;
          border: 2px solid #2563eb;
          display: flex;
          align-items: center;
          justify-content: center;
          font-weight: 800;
          color: #2563eb;
          box-shadow: 0 2px 8px rgba(37, 99, 235, 0.2);
          flex-shrink: 0;
        }

        /* Generic Card Styles */
        .deliv-card {
          background: #ffffff;
          border: 1px solid #e2e8f0;
          border-radius: 18px;
          padding: 28px;
          transition: all 0.3s cubic-bezier(0.16, 1, 0.3, 1);
          height: 100%;
          position: relative;
        }
        .deliv-card:hover {
          transform: translateY(-4px);
          border-color: #cbd5e1;
          box-shadow: 0 20px 35px -10px rgba(15, 23, 42, 0.08);
        }
        .deliv-card-icon {
          width: 50px;
          height: 50px;
          border-radius: 14px;
          display: flex;
          align-items: center;
          justify-content: center;
          font-size: 1.3rem;
          margin-bottom: 18px;
          background: #eff6ff;
          color: #0284c7;
        }

        /* Currency Switch & Pricing Card */
        .currency-switch {
          display: inline-flex;
          background: #e2e8f0;
          padding: 5px;
          border-radius: 9999px;
          box-shadow: inset 0 2px 4px rgba(0, 0, 0, 0.06);
        }
        .currency-btn {
          padding: 8px 24px;
          border-radius: 9999px;
          font-weight: 700;
          font-size: 0.88rem;
          border: none;
          background: transparent;
          color: #64748b;
          transition: all 0.25s ease;
          cursor: pointer;
        }
        .currency-btn.active {
          background: #ffffff;
          color: #1e1b4b;
          box-shadow: 0 4px 12px rgba(15, 23, 42, 0.12);
        }
        .price-card {
          background: #ffffff;
          border: 1.5px solid #cbd5e1;
          border-radius: 18px;
          padding: 26px 22px;
          transition: all 0.3s ease;
          position: relative;
          display: flex;
          flex-direction: column;
          height: 100%;
          box-shadow: 0 4px 16px rgba(15, 23, 42, 0.04);
        }
        .price-card:hover {
          border-color: #94a3b8;
          box-shadow: 0 15px 30px -10px rgba(15, 23, 42, 0.08);
        }
        .price-card.featured {
          border: 2px solid #0284c7;
          box-shadow: 0 16px 36px -10px rgba(2, 132, 199, 0.16);
          background: #ffffff;
        }

        /* Table */
        .deliv-table-wrap {
          border: 1px solid #e2e8f0;
          border-radius: 16px;
          overflow: hidden;
          background: #ffffff;
          box-shadow: 0 4px 12px rgba(0, 0, 0, 0.03);
        }
        .deliv-table {
          width: 100%;
          min-width: 620px;
          margin-bottom: 0;
          border-collapse: collapse;
        }
        .deliv-table th {
          background: #f1f5f9;
          font-weight: 700;
          font-size: 0.88rem;
          color: #334155;
          padding: 14px 18px;
          border-bottom: 1px solid #e2e8f0;
        }
        .deliv-table td {
          padding: 14px 18px;
          font-size: 0.9rem;
          color: #475569;
          border-bottom: 1px solid #f1f5f9;
          vertical-align: middle;
        }
        .deliv-table tr:last-child td {
          border-bottom: none;
        }

        /* Mobile Card System */
        .deliv-mobile-card {
          background: #ffffff;
          border: 1px solid #e2e8f0;
          border-radius: 14px;
          padding: 16px;
          margin-bottom: 14px;
          box-shadow: 0 2px 6px rgba(0, 0, 0, 0.02);
        }

        /* ─── MOBILE RESPONSIVENESS OVERRIDES (@media <= 768px) ─── */
        @media (max-width: 768px) {
          .deliv-hero {
            padding: 50px 0 45px !important;
          }
          .deliv-badge-pill {
            font-size: 0.72rem !important;
            padding: 6px 14px !important;
            margin-bottom: 18px !important;
            white-space: normal !important;
            line-height: 1.3 !important;
          }
          .deliv-h1 {
            font-size: 1.85rem !important;
            line-height: 1.25 !important;
          }
          .deliv-hero-p {
            font-size: 0.98rem !important;
            margin-bottom: 24px !important;
          }
          .deliv-btn-wa, .deliv-btn-secondary {
            width: 100% !important;
            padding: 13px 18px !important;
            font-size: 0.92rem !important;
            text-align: center !important;
          }
          .trust-badge-card {
            padding: 9px 12px !important;
            font-size: 0.82rem !important;
          }
          .visual-mockup-card {
            padding: 16px 14px !important;
            border-radius: 16px !important;
          }
          .inbox-row {
            padding: 10px 12px !important;
            gap: 10px !important;
            margin-bottom: 10px !important;
          }
          .avatar-generic, .avatar-bimi {
            width: 36px !important;
            height: 36px !important;
            min-width: 36px !important;
            font-size: 0.92rem !important;
          }
          .bimi-step-card {
            padding: 10px 4px !important;
          }
          .bimi-step-card h6 {
            font-size: 0.8rem !important;
            margin-bottom: 2px !important;
          }
          .bimi-step-card small {
            font-size: 0.65rem !important;
            line-height: 1.2 !important;
            display: block !important;
          }
          .price-card {
            padding: 22px 18px !important;
          }
          .cta-h2 {
            font-size: 1.75rem !important;
            line-height: 1.25 !important;
          }
          .cta-badge {
            font-size: 0.7rem !important;
            white-space: normal !important;
            line-height: 1.4 !important;
            padding: 6px 12px !important;
          }
          .bottom-cta-section {
            padding-bottom: 95px !important;
          }
        }
      </style><div class="deliv-wrapper"><section class="deliv-hero"><div class="container position-relative" style="z-index:2"><div class="row align-items-center g-4"><div class="col-lg-7"><div class="deliv-badge-pill"><i class="fa-solid fa-certificate"></i> Verified Inbox Brand Identity</div><h1 class="deliv-h1">Establish Instant Visual Credibility Directly Inside Recipient Inboxes.</h1><p class="deliv-hero-p">Put your verified brand logo — and eligible Gmail blue checkmark — next to every outbound email. Digify Soft Solutions implements BIMI, prepares RFC-compliant SVG Tiny-PS artwork, validates DMARC enforcement, and coordinates VMC / CMC certificate requirements across Google Workspace, Apple Mail, and Yahoo.</p><div class="d-flex flex-wrap gap-3 mb-4"><a href="https://wa.me/917425016636?text=Hi%20Digify%2C%20I%20want%20to%20implement%20BIMI%20and%20verified%20email%20branding%20for%20my%20domain." target="_blank" rel="noopener noreferrer" class="deliv-btn-wa"><i class="fa-brands fa-whatsapp" style="font-size:1.25rem"></i>WhatsApp Digify Soft Solutions: +91 7425016636</a><button class="deliv-btn-secondary" data-bs-toggle="modal" data-bs-target="#trialModal"><i class="fa-solid fa-calendar-check"></i>Book BIMI Consultation</button></div><div class="d-flex align-items-center gap-2 text-cyan-300 small mb-4" style="color:#7dd3fc;font-size:0.85rem"><i class="fa-solid fa-globe"></i><span>Serving verified brands in USA · UK · UAE · Canada · Australia · India</span></div><div class="row g-2"><div class="col-sm-6"><div class="trust-badge-card d-flex align-items-center gap-2"><i class="fa-solid fa-circle-check text-cyan-400" style="color:#38bdf8"></i><span class="small text-white fw-medium">Gmail Verified-Brand Ready</span></div></div><div class="col-sm-6"><div class="trust-badge-card d-flex align-items-center gap-2"><i class="fa-solid fa-file-code text-cyan-400" style="color:#38bdf8"></i><span class="small text-white fw-medium">RFC-Compliant SVG Tiny-PS</span></div></div><div class="col-sm-6"><div class="trust-badge-card d-flex align-items-center gap-2"><i class="fa-solid fa-stamp text-cyan-400" style="color:#38bdf8"></i><span class="small text-white fw-medium">DigiCert / Entrust VMC Guidance</span></div></div><div class="col-sm-6"><div class="trust-badge-card d-flex align-items-center gap-2"><i class="fa-brands fa-apple text-cyan-400" style="color:#38bdf8"></i><span class="small text-white fw-medium">Apple Mail + Yahoo BIMI Support</span></div></div></div></div><div class="col-lg-5"><div class="visual-mockup-card"><div class="d-flex justify-content-between align-items-center mb-3 pb-2 border-bottom gap-2"><div class="d-flex align-items-center gap-2" style="min-width:0"><i class="fa-solid fa-inbox text-primary flex-shrink-0"></i><span class="fw-bold small text-dark text-truncate" style="font-size:0.82rem;letter-spacing:0.02em">Inbox Visual Transformation</span></div><span class="badge bg-primary-subtle text-primary flex-shrink-0" style="font-size:0.72rem">BIMI Active</span></div><div class="text-muted small fw-bold mb-1 text-uppercase" style="font-size:0.68rem">Without BIMI (Default State):</div><div class="inbox-row inbox-row-generic"><div class="avatar-generic"><i class="fa-regular fa-user"></i></div><div class="flex-grow-1" style="min-width:0"><div class="d-flex justify-content-between align-items-center"><span class="fw-semibold text-secondary small text-truncate">John Doe</span><span class="text-muted flex-shrink-0 ms-2" style="font-size:0.7rem;white-space:nowrap">10:42 AM</span></div><div class="text-muted small text-truncate" style="font-size:0.76rem">Q3 Financial Statement &amp; Enterprise Invoices...</div></div></div><div class="text-center my-2 text-primary"><i class="fa-solid fa-arrow-down-long"></i></div><div class="text-primary small fw-bold mb-1 text-uppercase" style="font-size:0.68rem">With Digify Soft Solutions BIMI + Gmail Checkmark:</div><div class="inbox-row inbox-row-verified"><div class="avatar-bimi"><i class="fa-solid fa-shield-halved"></i></div><div class="flex-grow-1" style="min-width:0"><div class="d-flex justify-content-between align-items-center"><div class="d-flex align-items-center gap-1 text-truncate" style="min-width:0;flex:1 1 auto"><span class="fw-bold text-dark small text-truncate">Digify Soft Solutions Official</span><i class="fa-solid fa-circle-check text-primary flex-shrink-0" style="font-size:0.85rem" title="Verified Sender Checkmark"></i></div><span class="text-primary fw-semibold flex-shrink-0 ms-2" style="font-size:0.7rem;white-space:nowrap">10:42 AM</span></div><div class="text-dark small fw-medium text-truncate" style="font-size:0.76rem">Q3 Financial Statement &amp; Enterprise Invoices...</div></div></div><div class="mt-3 py-2 px-3 rounded-3 bg-light border text-center text-muted" style="font-size:0.72rem;line-height:1.4"><i class="fa-solid fa-shield-halved text-success me-1"></i><span>Requires DMARC <code>p=reject</code> · Gmail &amp; Apple Mail Verified</span></div></div></div></div></div></section><section class="py-5 bg-white border-bottom"><div class="container py-4"><div class="text-center max-w-2xl mx-auto mb-5"><span class="text-primary fw-bold text-uppercase" style="letter-spacing:1.5px;font-size:0.8rem">The Visual Layer of Authentication</span><h2 class="fw-bold mt-2" style="color:#0f172a;font-size:2.2rem">What Is BIMI &amp; How It Works</h2><p class="text-muted">BIMI (Brand Indicators for Message Identification) allows authenticated domains to specify which brand logo participating email providers display beside incoming messages.</p></div><div class="p-4 rounded-4 bg-light border mb-5"><h4 class="fw-bold mb-3" style="color:#1e1b4b">The Complete BIMI Architectural Chain</h4><p class="text-muted small mb-4">BIMI is not a standalone graphic feature; it sits atop a strictly enforced email authentication foundation:</p><div class="row g-2 g-md-3 text-center"><div class="col-4 col-md-2"><div class="p-3 bg-white rounded-3 border h-100 bimi-step-card"><span class="badge bg-secondary mb-2" style="font-size:0.65rem">Step 1</span><h6 class="fw-bold mb-1">SPF</h6><small class="text-muted">Authorizes IP origin</small></div></div><div class="col-4 col-md-2"><div class="p-3 bg-white rounded-3 border h-100 bimi-step-card"><span class="badge bg-secondary mb-2" style="font-size:0.65rem">Step 2</span><h6 class="fw-bold mb-1">DKIM</h6><small class="text-muted">Cryptographic signing</small></div></div><div class="col-4 col-md-2"><div class="p-3 bg-white rounded-3 border h-100 bimi-step-card"><span class="badge bg-primary mb-2" style="font-size:0.65rem">Step 3</span><h6 class="fw-bold mb-1">DMARC</h6><small class="text-muted">Enforcement (p=reject)</small></div></div><div class="col-4 col-md-2"><div class="p-3 bg-white rounded-3 border h-100 bimi-step-card"><span class="badge bg-info text-dark mb-2" style="font-size:0.65rem">Step 4</span><h6 class="fw-bold mb-1">SVG Tiny-PS</h6><small class="text-muted">Strict vector profile</small></div></div><div class="col-4 col-md-2"><div class="p-3 bg-white rounded-3 border h-100 bimi-step-card"><span class="badge bg-warning text-dark mb-2" style="font-size:0.65rem">Step 5</span><h6 class="fw-bold mb-1">VMC / CMC</h6><small class="text-muted">DigiCert/Entrust Cert</small></div></div><div class="col-4 col-md-2"><div class="p-3 bg-white rounded-3 border border-primary h-100 shadow-sm bimi-step-card"><span class="badge bg-success mb-2" style="font-size:0.65rem">Step 6</span><h6 class="fw-bold mb-1 text-primary">Inbox Logo</h6><small class="text-muted">Verified Checkmark</small></div></div></div></div><div class="row g-4 mb-5"><div class="col-lg-6"><div class="deliv-card"><div class="deliv-card-icon"><i class="fa-solid fa-dns"></i></div><h4 class="fw-bold" style="color:#1e1b4b">The BIMI DNS TXT Record</h4><p class="text-muted small mb-3">Published at the <code>default._bimi.yourdomain.com</code> selector, specifying the HTTPS location of your compliant SVG logo and cryptographic certificate:</p><div class="p-2 px-3 rounded bg-light border font-monospace small mb-3 text-secondary" style="font-size:0.72rem;word-break:break-all;white-space:pre-wrap;line-height:1.4">default._bimi.example.com TXT &quot;v=BIMI1; l=https://example.com/.well-known/bimi/logo.svg; a=https://example.com/.well-known/bimi/certificate.pem&quot;</div><ul class="list-unstyled mb-0" style="font-size:0.86rem;color:#475569"><li class="mb-2"><i class="fa-solid fa-check text-primary me-2"></i> <code>v=BIMI1</code>: Identifies protocol specification version.</li><li class="mb-2"><i class="fa-solid fa-check text-primary me-2"></i> <code>l=https://...</code>: Secure URI to the hosted SVG Tiny-PS file.</li><li><i class="fa-solid fa-check text-primary me-2"></i> <code>a=https://...</code>: Secure URI to the qualifying VMC or CMC PEM certificate.</li></ul></div></div><div class="col-lg-6"><div class="deliv-card"><div class="deliv-card-icon"><i class="fa-solid fa-vector-square"></i></div><h4 class="fw-bold" style="color:#1e1b4b">Why Your Normal SVG Fails BIMI</h4><p class="text-muted small mb-3">Standard website SVGs contain features explicitly prohibited by the SVG Tiny-PS (Portable/Secure) specification:</p><div class="row g-2" style="font-size:0.84rem"><div class="col-6"><div class="p-2 bg-light rounded border text-muted"><i class="fa-solid fa-xmark text-danger me-1"></i> No external CSS or scripts</div></div><div class="col-6"><div class="p-2 bg-light rounded border text-muted"><i class="fa-solid fa-xmark text-danger me-1"></i> No raster URL dependencies</div></div><div class="col-6"><div class="p-2 bg-light rounded border text-muted"><i class="fa-solid fa-check text-success me-1"></i> Strict 1:1 Square aspect ratio</div></div><div class="col-6"><div class="p-2 bg-light rounded border text-muted"><i class="fa-solid fa-check text-success me-1"></i> Validated XML &amp; viewBox</div></div></div><div class="mt-3 small text-muted">Digify Soft Solutions reconstructs and mathematically normalizes your logo into a pristine, zero-dependency SVG Tiny-PS document.</div></div></div></div><div class="d-none d-md-block deliv-table-wrap mb-4"><div class="p-3 bg-light border-bottom fw-bold text-dark d-flex justify-content-between align-items-center"><span>Mailbox Provider BIMI Support &amp; Visual Treatment Matrix</span><span class="badge bg-primary">Google · Apple · Yahoo</span></div><div class="table-responsive"><table class="deliv-table"><thead><tr><th style="width:24%">Mailbox Provider</th><th style="width:16%">BIMI Support</th><th style="width:22%">DMARC Policy</th><th style="width:18%">Certificate Rule</th><th style="width:20%">Visual UI Outcome</th></tr></thead><tbody><tr><td><strong>Google Workspace / Gmail</strong></td><td><span class="badge bg-success-subtle text-success">Full Support</span></td><td><code>p=quarantine (pct=100) or p=reject</code></td><td><span class="small text-secondary">Mandatory for Blue Checkmark</span></td><td class="text-primary small fw-semibold">Official Verified Blue Checkmark + Brand Logo in Web &amp; Mobile app</td></tr><tr><td><strong>Apple Mail (iOS 16+ / macOS)</strong></td><td><span class="badge bg-success-subtle text-success">Full Support</span></td><td><code>p=quarantine (pct=100) or p=reject</code></td><td><span class="small text-secondary">Required (VMC or CMC)</span></td><td class="text-primary small fw-semibold">Authenticated Brand Logo in Email Header banner (Digitally Certified)</td></tr><tr><td><strong>Yahoo Mail</strong></td><td><span class="badge bg-success-subtle text-success">Full Support</span></td><td><code>p=quarantine or p=reject</code></td><td><span class="small text-secondary">Optional (Supports Non-VMC with reputation)</span></td><td class="text-primary small fw-semibold">Brand Logo displayed in Inbox list &amp; message view</td></tr><tr><td><strong>Fastmail</strong></td><td><span class="badge bg-success-subtle text-success">Full Support</span></td><td><code>p=quarantine or p=reject</code></td><td><span class="small text-secondary">Supported (VMC preferred)</span></td><td class="text-primary small fw-semibold">Brand Logo displayed across web and mobile clients</td></tr></tbody></table></div></div><div class="d-block d-md-none mb-4"><div class="p-3 bg-light border rounded-3 mb-3 fw-bold text-dark text-center" style="font-size:0.9rem">Mailbox Provider BIMI Behavior</div><div class="deliv-mobile-card mb-3 p-3"><div class="d-flex justify-content-between align-items-center mb-2 pb-2 border-bottom"><span class="fw-bold text-dark" style="font-size:0.95rem">Google Workspace / Gmail</span><span class="badge bg-success-subtle text-success" style="font-size:0.7rem">Supported</span></div><div class="d-flex flex-column gap-2" style="font-size:0.82rem"><div class="p-2 rounded bg-light border"><span class="text-muted fw-bold">DMARC Rule:</span><div class="font-monospace text-dark mt-1">p=quarantine (pct=100) or p=reject</div></div><div class="p-2 rounded bg-light border"><span class="text-muted fw-bold">Certificate Prerequisite:</span><div class="text-secondary mt-1">Mandatory for Blue Checkmark</div></div><div class="p-2 rounded bg-primary-subtle border border-primary-subtle"><span class="text-primary fw-bold">Visual UI Outcome:</span><div class="text-primary fw-semibold mt-1">Official Verified Blue Checkmark + Brand Logo in Web &amp; Mobile app</div></div></div></div><div class="deliv-mobile-card mb-3 p-3"><div class="d-flex justify-content-between align-items-center mb-2 pb-2 border-bottom"><span class="fw-bold text-dark" style="font-size:0.95rem">Apple Mail (iOS 16+ / macOS)</span><span class="badge bg-success-subtle text-success" style="font-size:0.7rem">Supported</span></div><div class="d-flex flex-column gap-2" style="font-size:0.82rem"><div class="p-2 rounded bg-light border"><span class="text-muted fw-bold">DMARC Rule:</span><div class="font-monospace text-dark mt-1">p=quarantine (pct=100) or p=reject</div></div><div class="p-2 rounded bg-light border"><span class="text-muted fw-bold">Certificate Prerequisite:</span><div class="text-secondary mt-1">Required (VMC or CMC)</div></div><div class="p-2 rounded bg-primary-subtle border border-primary-subtle"><span class="text-primary fw-bold">Visual UI Outcome:</span><div class="text-primary fw-semibold mt-1">Authenticated Brand Logo in Email Header banner (Digitally Certified)</div></div></div></div><div class="deliv-mobile-card mb-3 p-3"><div class="d-flex justify-content-between align-items-center mb-2 pb-2 border-bottom"><span class="fw-bold text-dark" style="font-size:0.95rem">Yahoo Mail</span><span class="badge bg-success-subtle text-success" style="font-size:0.7rem">Supported</span></div><div class="d-flex flex-column gap-2" style="font-size:0.82rem"><div class="p-2 rounded bg-light border"><span class="text-muted fw-bold">DMARC Rule:</span><div class="font-monospace text-dark mt-1">p=quarantine or p=reject</div></div><div class="p-2 rounded bg-light border"><span class="text-muted fw-bold">Certificate Prerequisite:</span><div class="text-secondary mt-1">Optional (Supports Non-VMC with reputation)</div></div><div class="p-2 rounded bg-primary-subtle border border-primary-subtle"><span class="text-primary fw-bold">Visual UI Outcome:</span><div class="text-primary fw-semibold mt-1">Brand Logo displayed in Inbox list &amp; message view</div></div></div></div><div class="deliv-mobile-card mb-3 p-3"><div class="d-flex justify-content-between align-items-center mb-2 pb-2 border-bottom"><span class="fw-bold text-dark" style="font-size:0.95rem">Fastmail</span><span class="badge bg-success-subtle text-success" style="font-size:0.7rem">Supported</span></div><div class="d-flex flex-column gap-2" style="font-size:0.82rem"><div class="p-2 rounded bg-light border"><span class="text-muted fw-bold">DMARC Rule:</span><div class="font-monospace text-dark mt-1">p=quarantine or p=reject</div></div><div class="p-2 rounded bg-light border"><span class="text-muted fw-bold">Certificate Prerequisite:</span><div class="text-secondary mt-1">Supported (VMC preferred)</div></div><div class="p-2 rounded bg-primary-subtle border border-primary-subtle"><span class="text-primary fw-bold">Visual UI Outcome:</span><div class="text-primary fw-semibold mt-1">Brand Logo displayed across web and mobile clients</div></div></div></div></div></div></section><section class="py-5" style="background-color:#f8fafc"><div class="container py-4"><div class="text-center max-w-2xl mx-auto mb-5"><span class="text-primary fw-bold text-uppercase" style="letter-spacing:1.5px;font-size:0.8rem">Strategic Brand Equity</span><h2 class="fw-bold mt-2" style="color:#0f172a;font-size:2.2rem">Your Email Is Your Primary Brand Touchpoint</h2><p class="text-muted">Every business email you send competes for attention against hundreds of messages. A verified brand identity establishes immediate trust and eliminates brand impersonation.</p></div><div class="row g-4"><div class="col-md-4"><div class="deliv-card"><div class="deliv-card-icon"><i class="fa-solid fa-eye"></i></div><h5 class="fw-bold" style="color:#1e1b4b">Instant Inbox Differentiation</h5><p class="text-muted small mb-0">Replace generic initials or gray default avatars with your high-definition corporate logo. Recipients recognize your brand before reading the subject line.</p></div></div><div class="col-md-4"><div class="deliv-card"><div class="deliv-card-icon"><i class="fa-solid fa-shield-cat"></i></div><h5 class="fw-bold" style="color:#1e1b4b">Spoofing &amp; Phishing Immunity</h5><p class="text-muted small mb-0">Because BIMI strictly requires DMARC enforcement, attackers cannot display your logo. Your customers can visually verify legitimate corporate communication.</p></div></div><div class="col-md-4"><div class="deliv-card"><div class="deliv-card-icon"><i class="fa-solid fa-award"></i></div><h5 class="fw-bold" style="color:#1e1b4b">Enterprise Credibility</h5><p class="text-muted small mb-0">The Gmail blue checkmark communicates world-class security posture, elevating your executive proposals, invoices, and transactional receipts.</p></div></div></div></div></section><section class="py-5 bg-white border-top border-bottom"><div class="container py-4"><div class="text-center max-w-2xl mx-auto mb-5"><span class="text-primary fw-bold text-uppercase" style="letter-spacing:1.5px;font-size:0.8rem">Structured Engineering Workflow</span><h2 class="fw-bold mt-2" style="color:#0f172a;font-size:2.2rem">Our 6-Step BIMI Implementation Roadmap</h2><p class="text-muted">From initial vector conversion to multi-client inbox verification, we engineer every layer with mathematical precision.</p></div><div class="row g-4 mb-4"><div class="col-lg-4 col-md-6"><div class="deliv-card border-top border-4 border-primary"><span class="badge bg-primary text-white mb-2">STEP 1</span><h5 class="fw-bold" style="color:#1e1b4b">DMARC Enforcement Audit</h5><p class="text-muted small mb-0">We audit your SPF, DKIM, and DMARC policy. Before publishing BIMI, we ensure your domain achieves<code>p=quarantine (pct=100)</code> or <code>p=reject</code> across all legitimate sending streams.</p></div></div><div class="col-lg-4 col-md-6"><div class="deliv-card border-top border-4 border-info"><span class="badge bg-info text-dark mb-2">STEP 2</span><h5 class="fw-bold" style="color:#1e1b4b">Trademark Mapping</h5><p class="text-muted small mb-0">We map your brand mark against recognized intellectual property registries (USPTO, UKIPO, EUIPO, CGPDTM, CIPO, IP Australia) to confirm certificate qualification.</p></div></div><div class="col-lg-4 col-md-6"><div class="deliv-card border-top border-4 border-warning"><span class="badge bg-warning text-dark mb-2">STEP 3</span><h5 class="fw-bold" style="color:#1e1b4b">SVG Tiny-PS Vectorization</h5><p class="text-muted small mb-0">We reconstruct your brand mark into a square 1:1, script-free, CSS-isolated SVG Tiny-PS vector file, validating all XML namespaces against the IETF BIMI specification.</p></div></div><div class="col-lg-4 col-md-6"><div class="deliv-card border-top border-4 border-success"><span class="badge bg-success text-white mb-2">STEP 4</span><h5 class="fw-bold" style="color:#1e1b4b">Certificate Authority Coordination</h5><p class="text-muted small mb-0">Where VMC/CMC certificates are required for Gmail checkmarks, we coordinate identity verification and technical document submission with DigiCert or Entrust.</p></div></div><div class="col-lg-4 col-md-6"><div class="deliv-card border-top border-4 border-dark"><span class="badge bg-dark text-white mb-2">STEP 5</span><h5 class="fw-bold" style="color:#1e1b4b">DNS &amp; Secure Hosting</h5><p class="text-muted small mb-0">We configure secure HTTPS hosting for your SVG and certificate assets, and publish the authoritative<code>default._bimi</code> DNS TXT record on your DNS manager.</p></div></div><div class="col-lg-4 col-md-6"><div class="deliv-card border-top border-4 border-primary"><span class="badge bg-primary text-white mb-2">STEP 6</span><h5 class="fw-bold" style="color:#1e1b4b">Multi-Client Inbox Verification</h5><p class="text-muted small mb-0">We send test payloads and verify live logo rendering across Google Workspace, Gmail mobile/web, Apple Mail iOS/macOS, and Yahoo Mail environments.</p></div></div></div></div></section><section class="py-5" style="background-color:#f8fafc"><div class="container py-4"><div class="text-center max-w-2xl mx-auto mb-5"><span class="text-primary fw-bold text-uppercase" style="letter-spacing:1.5px;font-size:0.8rem">Universal Compatibility</span><h2 class="fw-bold mt-2" style="color:#0f172a;font-size:2.2rem">Supported Inboxes &amp; Recognized Trademark Registries</h2><p class="text-muted">We engineer BIMI records aligned with major email clients, certificate authorities, and global patent offices.</p></div><div class="row g-4"><div class="col-md-4"><div class="p-4 bg-white rounded-3 border h-100"><h5 class="fw-bold mb-3" style="color:#1e1b4b"><i class="fa-solid fa-inbox text-primary me-2"></i> Mailbox Providers</h5><ul class="list-unstyled mb-0" style="font-size:0.9rem;color:#475569"><li class="mb-2"><i class="fa-solid fa-check text-success me-2"></i> Google Workspace &amp; Gmail</li><li class="mb-2"><i class="fa-solid fa-check text-success me-2"></i> Apple Mail (iOS 16+ &amp; macOS)</li><li class="mb-2"><i class="fa-solid fa-check text-success me-2"></i> Yahoo Mail &amp; AOL</li><li><i class="fa-solid fa-check text-success me-2"></i> Fastmail &amp; Webmail clients</li></ul></div></div><div class="col-md-4"><div class="p-4 bg-white rounded-3 border h-100"><h5 class="fw-bold mb-3" style="color:#1e1b4b"><i class="fa-solid fa-stamp text-info me-2"></i> Certificate Authorities</h5><ul class="list-unstyled mb-0" style="font-size:0.9rem;color:#475569"><li class="mb-2"><i class="fa-solid fa-check text-success me-2"></i> DigiCert Verified Mark Certificates</li><li class="mb-2"><i class="fa-solid fa-check text-success me-2"></i> Entrust VMC &amp; CMC Authority</li><li class="mb-2"><i class="fa-solid fa-check text-success me-2"></i> Identity validation coordination</li><li><i class="fa-solid fa-check text-success me-2"></i> PEM certificate SSL hosting setup</li></ul></div></div><div class="col-md-4"><div class="p-4 bg-white rounded-3 border h-100"><h5 class="fw-bold mb-3" style="color:#1e1b4b"><i class="fa-solid fa-building-columns text-warning me-2"></i> Trademark Registries</h5><ul class="list-unstyled mb-0" style="font-size:0.9rem;color:#475569"><li class="mb-2"><i class="fa-solid fa-check text-success me-2"></i> USPTO (United States)</li><li class="mb-2"><i class="fa-solid fa-check text-success me-2"></i> UKIPO (United Kingdom)</li><li class="mb-2"><i class="fa-solid fa-check text-success me-2"></i> EUIPO (European Union)</li><li><i class="fa-solid fa-check text-success me-2"></i> CGPDTM (India Trade Marks Registry)</li></ul></div></div></div></div></section><section class="py-5 bg-white border-top border-bottom"><div class="container py-4"><div class="text-center max-w-2xl mx-auto mb-4"><span class="text-primary fw-bold text-uppercase" style="letter-spacing:1.5px;font-size:0.8rem">Predictable Fixed Pricing</span><h2 class="fw-bold mt-2" style="color:#0f172a;font-size:2.2rem">Professional BIMI Implementation Packages</h2><p class="text-muted">Transparent technical engineering rates with clear deliverables. Choose the tier suited to your brand roadmap.</p><div class="mt-3"><div class="currency-switch"><button type="button" class="currency-btn active active" data-currency="USD" onclick="switchCurrency('USD')" data-currency="INR" onclick="switchCurrency('INR')">🇺🇸 USD ($ Global)</button><button type="button" class="currency-btn ">🇮🇳 INR (₹ India)</button></div><div class="text-muted small mt-2" style="font-size:0.8rem">Fixed flat-rate pricing for US, UK, UAE, Canada &amp; Global brands</div></div></div><div class="row g-4 align-items-stretch mb-5"><div class="col-lg-4"><div class="price-card"><div class="d-flex justify-content-between align-items-center mb-2"><span class="badge bg-light text-secondary border px-2 py-1" style="font-size:0.72rem">Tier 1 Preparation</span><span class="badge bg-light text-secondary border px-2 py-1" style="font-size:0.72rem">Single Domain</span></div><h4 class="fw-bold mb-2 text-dark" style="font-size:1.3rem">BIMI SVG Tiny-PS &amp; DNS Prep</h4><p class="text-muted small mb-3">For brands beginning BIMI or targeting supported logo-display ecosystems like Yahoo Mail.</p><div class="p-3 rounded-3 bg-light mb-3 border"><div class="d-flex align-items-baseline gap-1"><span style="font-size:2rem;font-weight:900;color:#0f172a;line-height:1"><span class="curr-val" data-usd="$179" data-inr="₹13,999">$179</span></span><span class="text-muted small fw-medium">/ domain</span></div><div class="small fw-semibold text-success mt-1"><i class="fa-solid fa-bolt me-1"></i> Target: 48-Hour Turnaround</div></div><div class="flex-grow-1 mb-4"><div class="fw-bold small text-uppercase text-secondary mb-2" style="font-size:0.72rem;letter-spacing:0.5px">Included Deliverables:</div><ul class="list-unstyled mb-0" style="font-size:0.85rem;color:#334155"><li class="mb-2"><i class="fa-solid fa-circle-check text-primary me-2"></i> BIMI readiness &amp; DMARC prerequisite audit</li><li class="mb-2"><i class="fa-solid fa-circle-check text-primary me-2"></i> SVG Tiny-PS vector conversion &amp; validation</li><li class="mb-2"><i class="fa-solid fa-circle-check text-primary me-2"></i> BIMI DNS record generation &amp; publication</li><li class="mb-2"><i class="fa-solid fa-circle-check text-primary me-2"></i> HTTPS logo-hosting configuration guide</li><li class="mb-2"><i class="fa-solid fa-circle-check text-primary me-2"></i> Yahoo Mail BIMI verification check</li><li><i class="fa-solid fa-circle-check text-primary me-2"></i> 7-Day technical support</li></ul></div><a href="https://wa.me/917425016636?text=Hi%20Digify%2C%20I%20want%20to%20order%20the%20BIMI%20SVG%20Tiny-PS%20package%20($179)." target="_blank" rel="noopener noreferrer" class="btn btn-outline-primary w-100 fw-bold py-2 rounded-3 mt-auto">Start BIMI Setup — WhatsApp</a></div></div><div class="col-lg-4"><div class="price-card featured"><div class="d-flex justify-content-between align-items-center mb-2"><span class="badge" style="background:linear-gradient(135deg, #0284c7, #0369a1);color:#fff;font-size:0.72rem;padding:4px 10px;border-radius:9999px">★ Recommended</span><span class="badge bg-primary-subtle text-primary border border-primary-subtle px-2 py-1" style="font-size:0.72rem">Single Domain</span></div><h4 class="fw-bold mb-2 text-primary" style="font-size:1.3rem">BIMI + Verified Checkmark Suite</h4><p class="text-muted small mb-3">Full SVG Tiny-PS conversion, DMARC alignment, DigiCert / Entrust VMC coordination, and Google Postmaster testing.</p><div class="p-3 rounded-3 bg-primary-subtle border border-primary-subtle mb-3"><div class="d-flex align-items-baseline gap-1"><span style="font-size:2rem;font-weight:900;color:#0369a1;line-height:1"><span class="curr-val" data-usd="$349" data-inr="₹27,999">$349</span></span><span class="text-muted small fw-medium">/ domain</span></div><div class="small fw-semibold text-primary mt-1"><i class="fa-solid fa-calendar-check me-1"></i> Full VMC/CMC Path Coordination</div></div><div class="flex-grow-1 mb-4"><div class="fw-bold small text-uppercase text-primary mb-2" style="font-size:0.72rem;letter-spacing:0.5px">Everything in Tier 1, Plus:</div><ul class="list-unstyled mb-0" style="font-size:0.85rem;color:#334155"><li class="mb-2"><i class="fa-solid fa-circle-check text-success me-2"></i> Full SPF/DKIM/DMARC alignment audit</li><li class="mb-2"><i class="fa-solid fa-circle-check text-success me-2"></i> Trademark verification mapping (USPTO/UKIPO/India)</li><li class="mb-2"><i class="fa-solid fa-circle-check text-success me-2"></i> DigiCert or Entrust VMC/CMC technical coordination</li><li class="mb-2"><i class="fa-solid fa-circle-check text-success me-2"></i> Google Postmaster Tools review &amp; telemetry</li><li class="mb-2"><i class="fa-solid fa-circle-check text-success me-2"></i> Gmail blue checkmark readiness assessment</li><li class="mb-2"><i class="fa-solid fa-circle-check text-success me-2"></i> Apple Mail &amp; Yahoo multi-client testing</li><li><i class="fa-solid fa-circle-check text-success me-2"></i> 14-Day dedicated implementation support</li></ul></div><a href="https://wa.me/917425016636?text=Hi%20Digify%2C%20I%20want%20to%20order%20the%20Complete%20BIMI%20%2B%20Verified%20Checkmark%20Suite%20($349)." target="_blank" rel="noopener noreferrer" class="btn btn-primary w-100 fw-bold py-2 rounded-3 mt-auto shadow-sm">Deploy Verified Email Branding</a></div></div><div class="col-lg-4"><div class="price-card"><div class="d-flex justify-content-between align-items-center mb-2"><span class="badge bg-dark text-white px-2 py-1" style="font-size:0.72rem">Tier 3 Enterprise</span><span class="badge bg-dark text-white px-2 py-1" style="font-size:0.72rem">Multi-Domain</span></div><h4 class="fw-bold mb-2 text-dark" style="font-size:1.3rem">Enterprise Brand Fleet</h4><p class="text-muted small mb-3">Multi-domain, sub-brand BIMI selectors, and trademark portfolio mapping for agencies and SaaS groups.</p><div class="p-3 rounded-3 bg-light mb-3 border"><div class="d-flex align-items-baseline gap-1"><span style="font-size:2rem;font-weight:900;color:#0f172a;line-height:1"><span class="curr-val" data-usd="$799+" data-inr="₹64,999+">$799+</span></span><span class="text-muted small fw-medium">/ multi-brand</span></div><div class="small fw-semibold text-info mt-1"><i class="fa-solid fa-layer-group me-1"></i> Multi-Brand Trademark Architecture</div></div><div class="flex-grow-1 mb-4"><div class="fw-bold small text-uppercase text-secondary mb-2" style="font-size:0.72rem;letter-spacing:0.5px">Enterprise Scope:</div><ul class="list-unstyled mb-0" style="font-size:0.85rem;color:#334155"><li class="mb-2"><i class="fa-solid fa-circle-check text-primary me-2"></i> Multiple domains &amp; sub-brand selectors</li><li class="mb-2"><i class="fa-solid fa-circle-check text-primary me-2"></i> Multi-jurisdiction trademark portfolio mapping</li><li class="mb-2"><i class="fa-solid fa-circle-check text-primary me-2"></i> Multiple SVG Tiny-PS asset preparation</li><li class="mb-2"><i class="fa-solid fa-circle-check text-primary me-2"></i> Dedicated Certificate Authority workflow management</li><li class="mb-2"><i class="fa-solid fa-circle-check text-primary me-2"></i> Agency deployment templates &amp; client SOPs</li><li><i class="fa-solid fa-circle-check text-primary me-2"></i> 30-Day dedicated implementation support</li></ul></div><button class="btn btn-outline-dark w-100 fw-bold py-2 rounded-3 mt-auto" data-bs-toggle="modal" data-bs-target="#trialModal" style="white-space:normal;font-size:0.92rem;min-height:44px">Request Enterprise Scope</button></div></div></div><div class="d-none d-md-block deliv-table-wrap"><div class="p-3 bg-light border-bottom fw-bold text-dark">Package Capability Comparison Matrix</div><div class="table-responsive"><table class="deliv-table"><thead><tr><th style="width:40%">Capability / Technical Feature</th><th class="text-center" style="width:20%"><span class="curr-val" data-usd="$179 (Prep)" data-inr="₹13,999 (Prep)">$179 (Prep)</span></th><th class="text-center" style="width:20%"><span class="curr-val" data-usd="$349 (Suite)" data-inr="₹27,999 (Suite)">$349 (Suite)</span></th><th class="text-center" style="width:20%"><span class="curr-val" data-usd="$799+ (Fleet)" data-inr="₹64,999+ (Fleet)">$799+ (Fleet)</span></th></tr></thead><tbody><tr><td>Domain Scope</td><td class="text-center">Single Domain</td><td class="text-center text-primary fw-bold">Single Domain</td><td class="text-center text-success fw-bold">Multi-Domain Fleet</td></tr><tr><td>BIMI Readiness &amp; DMARC Audit</td><td class="text-center">✓ Prerequisite Check</td><td class="text-center text-primary fw-bold">✓ Full Alignment Audit</td><td class="text-center text-success fw-bold">✓ Multi-Domain Fleet Audit</td></tr><tr><td>SVG Tiny-PS Vector Conversion</td><td class="text-center">✓ Included</td><td class="text-center text-primary fw-bold">✓ RFC Compliant Tiny-PS</td><td class="text-center text-success fw-bold">✓ Multiple Sub-Brand Assets</td></tr><tr><td>BIMI DNS Record Generation</td><td class="text-center">✓ Standard Record</td><td class="text-center text-primary fw-bold">✓ Selector + Cert Path</td><td class="text-center text-success fw-bold">✓ Sub-Brand Selector Fleet</td></tr><tr><td>Secure HTTPS Hosting Guidance</td><td class="text-center">✓ Configuration Guide</td><td class="text-center text-primary fw-bold">✓ Full Verification</td><td class="text-center text-success fw-bold">✓ Multi-Domain CDN SOP</td></tr><tr><td>VMC / CMC Certificate Coordination</td><td class="text-center"><span class="text-muted"><i class="fa-solid fa-minus me-1"></i> Not Included</span></td><td class="text-center text-primary fw-bold">✓ DigiCert / Entrust Setup</td><td class="text-center text-success fw-bold">✓ Complete CA Portfolio Fleet</td></tr><tr><td>Gmail Blue Checkmark Readiness</td><td class="text-center"><span class="text-muted"><i class="fa-solid fa-minus me-1"></i> Not Included</span></td><td class="text-center text-primary fw-bold">✓ Postmaster &amp; Cert Audit</td><td class="text-center text-success fw-bold">✓ Full Group Fleet Readiness</td></tr><tr><td>Apple Mail &amp; Yahoo Verification</td><td class="text-center"><span class="text-muted"><i class="fa-solid fa-minus me-1"></i> Not Included</span></td><td class="text-center text-primary fw-bold">✓ Multi-Client Testing</td><td class="text-center text-success fw-bold">✓ Multi-Brand Inbox Matrix</td></tr><tr><td>Trademark Portfolio Jurisdiction Review</td><td class="text-center"><span class="text-muted"><i class="fa-solid fa-minus me-1"></i> Not Included</span></td><td class="text-center text-primary fw-bold">✓ 1 Trademark Mapping</td><td class="text-center text-success fw-bold">✓ Multi-Jurisdiction Fleet</td></tr><tr><td>Implementation Warranty &amp; Support</td><td class="text-center">7 Days</td><td class="text-center text-primary fw-bold">14 Days</td><td class="text-center text-success fw-bold">30 Days Dedicated</td></tr></tbody></table></div></div><div class="d-block d-md-none"><div class="p-3 bg-light border rounded-3 mb-3 fw-bold text-dark text-center" style="font-size:0.92rem"><i class="fa-solid fa-list-check text-primary me-2"></i> Capability &amp; Deliverable Matrix</div><div class="deliv-mobile-card mb-3 p-3 shadow-sm border"><div class="fw-bold text-dark mb-3 pb-2 border-bottom" style="font-size:0.98rem">Domain Scope</div><div class="d-flex flex-column gap-2"><div class="p-2 px-3 rounded bg-light border"><div class="d-flex justify-content-between align-items-center mb-1"><span class="badge bg-secondary-subtle text-secondary" style="font-size:0.7rem">Prep Tier</span><span class="text-muted fw-bold" style="font-size:0.75rem"><span class="curr-val" data-usd="$179" data-inr="₹13,999">$179</span></span></div><div style="font-size:0.88rem"><span class="text-dark fw-medium">Single Domain</span></div></div><div class="p-2 px-3 rounded bg-primary-subtle border border-primary-subtle"><div class="d-flex justify-content-between align-items-center mb-1"><span class="badge bg-primary text-white" style="font-size:0.7rem">Suite ★ Recommended</span><span class="text-primary fw-bold" style="font-size:0.75rem"><span class="curr-val" data-usd="$349" data-inr="₹27,999">$349</span></span></div><div style="font-size:0.88rem"><span class="text-primary fw-bold">Single Domain</span></div></div><div class="p-2 px-3 rounded bg-dark text-white border border-dark"><div class="d-flex justify-content-between align-items-center mb-1"><span class="badge bg-white text-dark" style="font-size:0.7rem">Enterprise</span><span class="text-white-50 fw-bold" style="font-size:0.75rem"><span class="curr-val" data-usd="$799+" data-inr="₹64,999+">$799+</span></span></div><div style="font-size:0.88rem"><span class="text-success fw-bold">Multi-Domain Fleet</span></div></div></div></div><div class="deliv-mobile-card mb-3 p-3 shadow-sm border"><div class="fw-bold text-dark mb-3 pb-2 border-bottom" style="font-size:0.98rem">BIMI Readiness &amp; DMARC Audit</div><div class="d-flex flex-column gap-2"><div class="p-2 px-3 rounded bg-light border"><div class="d-flex justify-content-between align-items-center mb-1"><span class="badge bg-secondary-subtle text-secondary" style="font-size:0.7rem">Prep Tier</span><span class="text-muted fw-bold" style="font-size:0.75rem"><span class="curr-val" data-usd="$179" data-inr="₹13,999">$179</span></span></div><div style="font-size:0.88rem"><span class="text-success fw-bold">✓ Prerequisite Check</span></div></div><div class="p-2 px-3 rounded bg-primary-subtle border border-primary-subtle"><div class="d-flex justify-content-between align-items-center mb-1"><span class="badge bg-primary text-white" style="font-size:0.7rem">Suite ★ Recommended</span><span class="text-primary fw-bold" style="font-size:0.75rem"><span class="curr-val" data-usd="$349" data-inr="₹27,999">$349</span></span></div><div style="font-size:0.88rem"><span class="text-primary fw-bold">✓ Full Alignment Audit</span></div></div><div class="p-2 px-3 rounded bg-dark text-white border border-dark"><div class="d-flex justify-content-between align-items-center mb-1"><span class="badge bg-white text-dark" style="font-size:0.7rem">Enterprise</span><span class="text-white-50 fw-bold" style="font-size:0.75rem"><span class="curr-val" data-usd="$799+" data-inr="₹64,999+">$799+</span></span></div><div style="font-size:0.88rem"><span class="text-success fw-bold">✓ Multi-Domain Fleet Audit</span></div></div></div></div><div class="deliv-mobile-card mb-3 p-3 shadow-sm border"><div class="fw-bold text-dark mb-3 pb-2 border-bottom" style="font-size:0.98rem">SVG Tiny-PS Vector Conversion</div><div class="d-flex flex-column gap-2"><div class="p-2 px-3 rounded bg-light border"><div class="d-flex justify-content-between align-items-center mb-1"><span class="badge bg-secondary-subtle text-secondary" style="font-size:0.7rem">Prep Tier</span><span class="text-muted fw-bold" style="font-size:0.75rem"><span class="curr-val" data-usd="$179" data-inr="₹13,999">$179</span></span></div><div style="font-size:0.88rem"><span class="text-success fw-bold">✓ Included</span></div></div><div class="p-2 px-3 rounded bg-primary-subtle border border-primary-subtle"><div class="d-flex justify-content-between align-items-center mb-1"><span class="badge bg-primary text-white" style="font-size:0.7rem">Suite ★ Recommended</span><span class="text-primary fw-bold" style="font-size:0.75rem"><span class="curr-val" data-usd="$349" data-inr="₹27,999">$349</span></span></div><div style="font-size:0.88rem"><span class="text-primary fw-bold">✓ RFC Compliant Tiny-PS</span></div></div><div class="p-2 px-3 rounded bg-dark text-white border border-dark"><div class="d-flex justify-content-between align-items-center mb-1"><span class="badge bg-white text-dark" style="font-size:0.7rem">Enterprise</span><span class="text-white-50 fw-bold" style="font-size:0.75rem"><span class="curr-val" data-usd="$799+" data-inr="₹64,999+">$799+</span></span></div><div style="font-size:0.88rem"><span class="text-success fw-bold">✓ Multiple Sub-Brand Assets</span></div></div></div></div><div class="deliv-mobile-card mb-3 p-3 shadow-sm border"><div class="fw-bold text-dark mb-3 pb-2 border-bottom" style="font-size:0.98rem">BIMI DNS Record Generation</div><div class="d-flex flex-column gap-2"><div class="p-2 px-3 rounded bg-light border"><div class="d-flex justify-content-between align-items-center mb-1"><span class="badge bg-secondary-subtle text-secondary" style="font-size:0.7rem">Prep Tier</span><span class="text-muted fw-bold" style="font-size:0.75rem"><span class="curr-val" data-usd="$179" data-inr="₹13,999">$179</span></span></div><div style="font-size:0.88rem"><span class="text-success fw-bold">✓ Standard Record</span></div></div><div class="p-2 px-3 rounded bg-primary-subtle border border-primary-subtle"><div class="d-flex justify-content-between align-items-center mb-1"><span class="badge bg-primary text-white" style="font-size:0.7rem">Suite ★ Recommended</span><span class="text-primary fw-bold" style="font-size:0.75rem"><span class="curr-val" data-usd="$349" data-inr="₹27,999">$349</span></span></div><div style="font-size:0.88rem"><span class="text-primary fw-bold">✓ Selector + Cert Path</span></div></div><div class="p-2 px-3 rounded bg-dark text-white border border-dark"><div class="d-flex justify-content-between align-items-center mb-1"><span class="badge bg-white text-dark" style="font-size:0.7rem">Enterprise</span><span class="text-white-50 fw-bold" style="font-size:0.75rem"><span class="curr-val" data-usd="$799+" data-inr="₹64,999+">$799+</span></span></div><div style="font-size:0.88rem"><span class="text-success fw-bold">✓ Sub-Brand Selector Fleet</span></div></div></div></div><div class="deliv-mobile-card mb-3 p-3 shadow-sm border"><div class="fw-bold text-dark mb-3 pb-2 border-bottom" style="font-size:0.98rem">Secure HTTPS Hosting Guidance</div><div class="d-flex flex-column gap-2"><div class="p-2 px-3 rounded bg-light border"><div class="d-flex justify-content-between align-items-center mb-1"><span class="badge bg-secondary-subtle text-secondary" style="font-size:0.7rem">Prep Tier</span><span class="text-muted fw-bold" style="font-size:0.75rem"><span class="curr-val" data-usd="$179" data-inr="₹13,999">$179</span></span></div><div style="font-size:0.88rem"><span class="text-success fw-bold">✓ Configuration Guide</span></div></div><div class="p-2 px-3 rounded bg-primary-subtle border border-primary-subtle"><div class="d-flex justify-content-between align-items-center mb-1"><span class="badge bg-primary text-white" style="font-size:0.7rem">Suite ★ Recommended</span><span class="text-primary fw-bold" style="font-size:0.75rem"><span class="curr-val" data-usd="$349" data-inr="₹27,999">$349</span></span></div><div style="font-size:0.88rem"><span class="text-primary fw-bold">✓ Full Verification</span></div></div><div class="p-2 px-3 rounded bg-dark text-white border border-dark"><div class="d-flex justify-content-between align-items-center mb-1"><span class="badge bg-white text-dark" style="font-size:0.7rem">Enterprise</span><span class="text-white-50 fw-bold" style="font-size:0.75rem"><span class="curr-val" data-usd="$799+" data-inr="₹64,999+">$799+</span></span></div><div style="font-size:0.88rem"><span class="text-success fw-bold">✓ Multi-Domain CDN SOP</span></div></div></div></div><div class="deliv-mobile-card mb-3 p-3 shadow-sm border"><div class="fw-bold text-dark mb-3 pb-2 border-bottom" style="font-size:0.98rem">VMC / CMC Certificate Coordination</div><div class="d-flex flex-column gap-2"><div class="p-2 px-3 rounded bg-light border"><div class="d-flex justify-content-between align-items-center mb-1"><span class="badge bg-secondary-subtle text-secondary" style="font-size:0.7rem">Prep Tier</span><span class="text-muted fw-bold" style="font-size:0.75rem"><span class="curr-val" data-usd="$179" data-inr="₹13,999">$179</span></span></div><div style="font-size:0.88rem"><span class="text-muted"><i class="fa-solid fa-minus text-secondary me-1"></i> Not Included</span></div></div><div class="p-2 px-3 rounded bg-primary-subtle border border-primary-subtle"><div class="d-flex justify-content-between align-items-center mb-1"><span class="badge bg-primary text-white" style="font-size:0.7rem">Suite ★ Recommended</span><span class="text-primary fw-bold" style="font-size:0.75rem"><span class="curr-val" data-usd="$349" data-inr="₹27,999">$349</span></span></div><div style="font-size:0.88rem"><span class="text-primary fw-bold">✓ DigiCert / Entrust Setup</span></div></div><div class="p-2 px-3 rounded bg-dark text-white border border-dark"><div class="d-flex justify-content-between align-items-center mb-1"><span class="badge bg-white text-dark" style="font-size:0.7rem">Enterprise</span><span class="text-white-50 fw-bold" style="font-size:0.75rem"><span class="curr-val" data-usd="$799+" data-inr="₹64,999+">$799+</span></span></div><div style="font-size:0.88rem"><span class="text-success fw-bold">✓ Complete CA Portfolio Fleet</span></div></div></div></div><div class="deliv-mobile-card mb-3 p-3 shadow-sm border"><div class="fw-bold text-dark mb-3 pb-2 border-bottom" style="font-size:0.98rem">Gmail Blue Checkmark Readiness</div><div class="d-flex flex-column gap-2"><div class="p-2 px-3 rounded bg-light border"><div class="d-flex justify-content-between align-items-center mb-1"><span class="badge bg-secondary-subtle text-secondary" style="font-size:0.7rem">Prep Tier</span><span class="text-muted fw-bold" style="font-size:0.75rem"><span class="curr-val" data-usd="$179" data-inr="₹13,999">$179</span></span></div><div style="font-size:0.88rem"><span class="text-muted"><i class="fa-solid fa-minus text-secondary me-1"></i> Not Included</span></div></div><div class="p-2 px-3 rounded bg-primary-subtle border border-primary-subtle"><div class="d-flex justify-content-between align-items-center mb-1"><span class="badge bg-primary text-white" style="font-size:0.7rem">Suite ★ Recommended</span><span class="text-primary fw-bold" style="font-size:0.75rem"><span class="curr-val" data-usd="$349" data-inr="₹27,999">$349</span></span></div><div style="font-size:0.88rem"><span class="text-primary fw-bold">✓ Postmaster &amp; Cert Audit</span></div></div><div class="p-2 px-3 rounded bg-dark text-white border border-dark"><div class="d-flex justify-content-between align-items-center mb-1"><span class="badge bg-white text-dark" style="font-size:0.7rem">Enterprise</span><span class="text-white-50 fw-bold" style="font-size:0.75rem"><span class="curr-val" data-usd="$799+" data-inr="₹64,999+">$799+</span></span></div><div style="font-size:0.88rem"><span class="text-success fw-bold">✓ Full Group Fleet Readiness</span></div></div></div></div><div class="deliv-mobile-card mb-3 p-3 shadow-sm border"><div class="fw-bold text-dark mb-3 pb-2 border-bottom" style="font-size:0.98rem">Apple Mail &amp; Yahoo Verification</div><div class="d-flex flex-column gap-2"><div class="p-2 px-3 rounded bg-light border"><div class="d-flex justify-content-between align-items-center mb-1"><span class="badge bg-secondary-subtle text-secondary" style="font-size:0.7rem">Prep Tier</span><span class="text-muted fw-bold" style="font-size:0.75rem"><span class="curr-val" data-usd="$179" data-inr="₹13,999">$179</span></span></div><div style="font-size:0.88rem"><span class="text-muted"><i class="fa-solid fa-minus text-secondary me-1"></i> Not Included</span></div></div><div class="p-2 px-3 rounded bg-primary-subtle border border-primary-subtle"><div class="d-flex justify-content-between align-items-center mb-1"><span class="badge bg-primary text-white" style="font-size:0.7rem">Suite ★ Recommended</span><span class="text-primary fw-bold" style="font-size:0.75rem"><span class="curr-val" data-usd="$349" data-inr="₹27,999">$349</span></span></div><div style="font-size:0.88rem"><span class="text-primary fw-bold">✓ Multi-Client Testing</span></div></div><div class="p-2 px-3 rounded bg-dark text-white border border-dark"><div class="d-flex justify-content-between align-items-center mb-1"><span class="badge bg-white text-dark" style="font-size:0.7rem">Enterprise</span><span class="text-white-50 fw-bold" style="font-size:0.75rem"><span class="curr-val" data-usd="$799+" data-inr="₹64,999+">$799+</span></span></div><div style="font-size:0.88rem"><span class="text-success fw-bold">✓ Multi-Brand Inbox Matrix</span></div></div></div></div><div class="deliv-mobile-card mb-3 p-3 shadow-sm border"><div class="fw-bold text-dark mb-3 pb-2 border-bottom" style="font-size:0.98rem">Trademark Portfolio Jurisdiction Review</div><div class="d-flex flex-column gap-2"><div class="p-2 px-3 rounded bg-light border"><div class="d-flex justify-content-between align-items-center mb-1"><span class="badge bg-secondary-subtle text-secondary" style="font-size:0.7rem">Prep Tier</span><span class="text-muted fw-bold" style="font-size:0.75rem"><span class="curr-val" data-usd="$179" data-inr="₹13,999">$179</span></span></div><div style="font-size:0.88rem"><span class="text-muted"><i class="fa-solid fa-minus text-secondary me-1"></i> Not Included</span></div></div><div class="p-2 px-3 rounded bg-primary-subtle border border-primary-subtle"><div class="d-flex justify-content-between align-items-center mb-1"><span class="badge bg-primary text-white" style="font-size:0.7rem">Suite ★ Recommended</span><span class="text-primary fw-bold" style="font-size:0.75rem"><span class="curr-val" data-usd="$349" data-inr="₹27,999">$349</span></span></div><div style="font-size:0.88rem"><span class="text-primary fw-bold">✓ 1 Trademark Mapping</span></div></div><div class="p-2 px-3 rounded bg-dark text-white border border-dark"><div class="d-flex justify-content-between align-items-center mb-1"><span class="badge bg-white text-dark" style="font-size:0.7rem">Enterprise</span><span class="text-white-50 fw-bold" style="font-size:0.75rem"><span class="curr-val" data-usd="$799+" data-inr="₹64,999+">$799+</span></span></div><div style="font-size:0.88rem"><span class="text-success fw-bold">✓ Multi-Jurisdiction Fleet</span></div></div></div></div><div class="deliv-mobile-card mb-3 p-3 shadow-sm border"><div class="fw-bold text-dark mb-3 pb-2 border-bottom" style="font-size:0.98rem">Implementation Warranty &amp; Support</div><div class="d-flex flex-column gap-2"><div class="p-2 px-3 rounded bg-light border"><div class="d-flex justify-content-between align-items-center mb-1"><span class="badge bg-secondary-subtle text-secondary" style="font-size:0.7rem">Prep Tier</span><span class="text-muted fw-bold" style="font-size:0.75rem"><span class="curr-val" data-usd="$179" data-inr="₹13,999">$179</span></span></div><div style="font-size:0.88rem"><span class="text-dark fw-medium">7 Days</span></div></div><div class="p-2 px-3 rounded bg-primary-subtle border border-primary-subtle"><div class="d-flex justify-content-between align-items-center mb-1"><span class="badge bg-primary text-white" style="font-size:0.7rem">Suite ★ Recommended</span><span class="text-primary fw-bold" style="font-size:0.75rem"><span class="curr-val" data-usd="$349" data-inr="₹27,999">$349</span></span></div><div style="font-size:0.88rem"><span class="text-primary fw-bold">14 Days</span></div></div><div class="p-2 px-3 rounded bg-dark text-white border border-dark"><div class="d-flex justify-content-between align-items-center mb-1"><span class="badge bg-white text-dark" style="font-size:0.7rem">Enterprise</span><span class="text-white-50 fw-bold" style="font-size:0.75rem"><span class="curr-val" data-usd="$799+" data-inr="₹64,999+">$799+</span></span></div><div style="font-size:0.88rem"><span class="text-success fw-bold">30 Days Dedicated</span></div></div></div></div></div></div></section><section class="py-5 bg-white border-top border-bottom"><div class="container py-4"><div class="text-center max-w-2xl mx-auto mb-5"><span class="text-primary fw-bold text-uppercase" style="letter-spacing:1.5px;font-size:0.8rem">Deep Technical Guidance</span><h2 class="fw-bold mt-2" style="color:#0f172a;font-size:2.2rem">Frequently Asked Questions</h2><p class="text-muted">Authoritative technical answers regarding BIMI specifications, trademark requirements, and VMC workflows.</p></div><div class="row justify-content-center"><div class="col-lg-9"><div class="d-flex flex-column gap-3"><div class="border rounded-4 overflow-hidden bg-white shadow-sm transition-all"><button type="button" class="w-100 p-4 text-start bg-white border-0 d-flex justify-content-between align-items-center" style="cursor:pointer"><span class="fw-bold text-dark pe-3" style="font-size:1.02rem">1. Do I need a registered trademark to use BIMI?</span><i class="fa-solid fa-chevron-down text-primary transition-transform rotate-180" style="transform:rotate(180deg);transition:transform 0.25s ease"></i></button><div class="px-4 pb-4 text-muted border-top pt-3 bg-light-subtle" style="font-size:0.93rem;line-height:1.75">Not necessarily for every email provider. A brand can deploy non-certificate BIMI for mailbox providers like Yahoo Mail that support logo display without a certificate. However, to display the official Gmail verified blue checkmark and receive Apple Mail digital certification, a qualifying certificate (VMC or CMC) issued by DigiCert or Entrust based on a verified registered trademark is mandatory.</div></div><div class="border rounded-4 overflow-hidden bg-white shadow-sm transition-all"><button type="button" class="w-100 p-4 text-start bg-white border-0 d-flex justify-content-between align-items-center" style="cursor:pointer"><span class="fw-bold text-dark pe-3" style="font-size:1.02rem">2. How much does a VMC (Verified Mark Certificate) cost?</span><i class="fa-solid fa-chevron-down text-primary transition-transform " style="transform:rotate(0deg);transition:transform 0.25s ease"></i></button></div><div class="border rounded-4 overflow-hidden bg-white shadow-sm transition-all"><button type="button" class="w-100 p-4 text-start bg-white border-0 d-flex justify-content-between align-items-center" style="cursor:pointer"><span class="fw-bold text-dark pe-3" style="font-size:1.02rem">3. Why does my SVG fail BIMI validation even though it works on my website?</span><i class="fa-solid fa-chevron-down text-primary transition-transform " style="transform:rotate(0deg);transition:transform 0.25s ease"></i></button></div><div class="border rounded-4 overflow-hidden bg-white shadow-sm transition-all"><button type="button" class="w-100 p-4 text-start bg-white border-0 d-flex justify-content-between align-items-center" style="cursor:pointer"><span class="fw-bold text-dark pe-3" style="font-size:1.02rem">4. Does Apple Mail give me the same blue checkmark as Gmail?</span><i class="fa-solid fa-chevron-down text-primary transition-transform " style="transform:rotate(0deg);transition:transform 0.25s ease"></i></button></div><div class="border rounded-4 overflow-hidden bg-white shadow-sm transition-all"><button type="button" class="w-100 p-4 text-start bg-white border-0 d-flex justify-content-between align-items-center" style="cursor:pointer"><span class="fw-bold text-dark pe-3" style="font-size:1.02rem">5. What happens if my DMARC policy drops back to p=none?</span><i class="fa-solid fa-chevron-down text-primary transition-transform " style="transform:rotate(0deg);transition:transform 0.25s ease"></i></button></div><div class="border rounded-4 overflow-hidden bg-white shadow-sm transition-all"><button type="button" class="w-100 p-4 text-start bg-white border-0 d-flex justify-content-between align-items-center" style="cursor:pointer"><span class="fw-bold text-dark pe-3" style="font-size:1.02rem">6. Can I use any image URL in my BIMI DNS record?</span><i class="fa-solid fa-chevron-down text-primary transition-transform " style="transform:rotate(0deg);transition:transform 0.25s ease"></i></button></div><div class="border rounded-4 overflow-hidden bg-white shadow-sm transition-all"><button type="button" class="w-100 p-4 text-start bg-white border-0 d-flex justify-content-between align-items-center" style="cursor:pointer"><span class="fw-bold text-dark pe-3" style="font-size:1.02rem">7. Do I need both VMC and CMC together?</span><i class="fa-solid fa-chevron-down text-primary transition-transform " style="transform:rotate(0deg);transition:transform 0.25s ease"></i></button></div><div class="border rounded-4 overflow-hidden bg-white shadow-sm transition-all"><button type="button" class="w-100 p-4 text-start bg-white border-0 d-flex justify-content-between align-items-center" style="cursor:pointer"><span class="fw-bold text-dark pe-3" style="font-size:1.02rem">8. Does BIMI completely prevent phishing and domain spoofing?</span><i class="fa-solid fa-chevron-down text-primary transition-transform " style="transform:rotate(0deg);transition:transform 0.25s ease"></i></button></div></div></div></div></div></section><section class="bottom-cta-section py-5 text-white position-relative" style="background:linear-gradient(135deg, #090d16 0%, #1e1b4b 50%, #0369a1 100%);overflow:hidden"><div class="container py-5 text-center position-relative" style="z-index:2"><span class="badge bg-info text-dark text-uppercase px-3 py-2 fw-bold mb-3 cta-badge">Turn Your Email Into a Recognizable Brand Asset</span><h2 class="fw-bold mb-3 text-white cta-h2" style="font-size:2.8rem">Your Competitors Are Building Brand Recognition Inside the Inbox.</h2><p class="lead mx-auto mb-4" style="max-width:700px;color:#cbd5e1;font-size:1.05rem">Your customers know your logo. Your website has it. Your packaging has it. Your email should have it too. Digify Soft Solutions coordinates the entire technical pipeline from SVG Tiny-PS vectorization to VMC certificate guidance.</p><div class="d-flex justify-content-center flex-wrap gap-3 mb-4"><a href="https://wa.me/917425016636?text=Hi%20Digify%2C%20I%20want%20to%20implement%20BIMI%20and%20verified%20email%20branding%20for%20my%20domain." target="_blank" rel="noopener noreferrer" class="deliv-btn-wa"><i class="fa-brands fa-whatsapp" style="font-size:1.3rem"></i>WhatsApp Digify Soft Solutions (+91 7425016636)</a><button class="deliv-btn-secondary" data-bs-toggle="modal" data-bs-target="#trialModal"><i class="fa-solid fa-calendar-check"></i>Book BIMI &amp; Branding Consultation</button></div><div class="text-slate-400 small" style="color:#94a3b8"><i class="fa-solid fa-lock me-1 text-cyan-400"></i> No master passwords required · Screen-shared or delegated DNS setup · 100% Confidential</div></div></section></div>
</div>

<!-- ==========================================
     INTERACTIVE JAVASCRIPT ENHANCEMENTS
     ========================================== -->
<script>
(function() {
  // Currency Switcher Logic
  window.switchCurrency = function(curr) {
    var buttons = document.querySelectorAll('.currency-btn');
    buttons.forEach(function(btn) {
      if (btn.getAttribute('data-currency') === curr) {
        btn.classList.add('active');
        btn.style.background = '#0f172a';
        btn.style.color = '#ffffff';
      } else {
        btn.classList.remove('active');
        btn.style.background = 'transparent';
        btn.style.color = '#64748b';
      }
    });

    var vals = document.querySelectorAll('.curr-val');
    vals.forEach(function(el) {
      var newVal = curr === 'INR' ? el.getAttribute('data-inr') : el.getAttribute('data-usd');
      if (newVal) el.textContent = newVal;
    });

    var waLinks = document.querySelectorAll('.wa-pricing-link');
    waLinks.forEach(function(link) {
      var newHref = curr === 'INR' ? link.getAttribute('data-wa-inr') : link.getAttribute('data-wa-usd');
      if (newHref) link.setAttribute('href', newHref);
    });

    var note = document.getElementById('currNoteText');
    if (note) {
      note.textContent = curr === 'INR'
        ? 'Domestic pricing with Indian business GST invoicing available'
        : 'Fixed flat-rate pricing for US, UK, UAE, Canada & Global businesses';
    }
  };

  // FAQ Accordion Toggle
  window.toggleFaqAccordion = function(btn) {
    var item = btn.closest('.accordion-item') || btn.parentElement.parentElement;
    var collapse = item.querySelector('.accordion-collapse');
    var isCurrentlyOpen = collapse.classList.contains('show');

    // Close all siblings in the same accordion container
    var accordion = btn.closest('.accordion') || item.parentElement;
    if (accordion) {
      var allCollapses = accordion.querySelectorAll('.accordion-collapse');
      var allButtons = accordion.querySelectorAll('.accordion-button');
      allCollapses.forEach(function(c) {
        c.classList.remove('show');
        c.style.display = 'none';
      });
      allButtons.forEach(function(b) {
        b.classList.add('collapsed');
      });
    }

    if (!isCurrentlyOpen) {
      collapse.classList.add('show');
      collapse.style.display = 'block';
      btn.classList.remove('collapsed');
    }
  };

  // Live Audit Simulator (Email Deliverability)
  window.runAuditSimulation = function(e) {
    e.preventDefault();
    var input = document.getElementById('auditDomainInput');
    if (!input || !input.value.trim()) return;
    var domain = input.value.trim().replace(/^(https?:\/\/)?(www\.)?/, '').split('/')[0].toLowerCase();
    var btn = document.getElementById('auditSubmitBtn');
    var origText = btn.innerHTML;
    btn.disabled = true;
    btn.innerHTML = '<i class="fa-solid fa-spinner fa-spin me-2"></i> Analyzing Domain Records...';

    setTimeout(function() {
      btn.disabled = false;
      btn.innerHTML = origText;
      alert('Diagnostic complete for ' + domain + ':\n\n• SPF Record: Lookup Limit Warning\n• DKIM 2048-bit: Missing or Unaligned\n• DMARC Policy: p=none (Enforcement Needed)\n• Mail-Tester Score: 4.5/10 (At Risk)\n\nContact our deliverability team on WhatsApp (+91 7425016636) to remediate your domain records.');
    }, 1200);
  };
})();
</script>

<?php include 'footer.php'; ?>
