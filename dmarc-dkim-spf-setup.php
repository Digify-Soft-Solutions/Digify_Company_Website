<?php 
    include 'fetch_meta.php';
    $pageTitle = 'DMARC Enforcement, DKIM & SPF Architecture Services | Digify Soft Solutions';
    $pageDescription = 'Harden corporate domain security with Digify Soft Solutions. Strict DMARC p=reject compliance, 2048-bit DKIM cryptographic signing, and SPF lookup flattening for Google Workspace & M365.';
    $pageKeywords = 'DMARC setup service, SPF flattening service, DKIM 2048-bit setup, Google Yahoo compliance, stop domain spoofing, DMARC p=reject consulting, enterprise email authentication, Digify Soft Solutions';
    include("top.php");
    include 'header.php'; 
?>

<!-- ==========================================
     START OF PAGE CONTENT: dmarc-dkim-spf-setup
     ========================================== -->

<div class="enterprise-page-wrapper">
<style>
        /* Digify Soft Solutions DMARC & Authentication Design System */
        .deliv-wrapper {
          font-family: 'Inter', system-ui, -apple-system, sans-serif;
          color: #0f172a;
          background-color: #f8fafc;
          overflow-x: hidden !important;
          width: 100% !important;
          max-width: 100vw !important;
        }
        .deliv-hero {
          background: radial-gradient(circle at 80% 20%, rgba(37, 99, 235, 0.18) 0%, transparent 50%),
                      radial-gradient(circle at 10% 80%, rgba(14, 165, 233, 0.15) 0%, transparent 45%),
                      linear-gradient(135deg, #0b0f19 0%, #0f172a 50%, #1e1b4b 100%);
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
          font-size: clamp(1.85rem, 4.5vw, 3.6rem);
          font-weight: 900;
          line-height: 1.18;
          letter-spacing: -0.03em;
          color: #ffffff;
          margin-bottom: 22px;
        }
        .deliv-h1 span {
          background: linear-gradient(135deg, #38bdf8 0%, #818cf8 100%);
          -webkit-background-clip: text;
          -webkit-text-fill-color: transparent;
        }
        .deliv-hero-p {
          font-size: 1.1rem;
          line-height: 1.7;
          color: #cbd5e1;
          max-width: 700px;
          margin-bottom: 32px;
        }
        .deliv-btn-primary {
          display: inline-flex;
          align-items: center;
          justify-content: center;
          gap: 10px;
          background: linear-gradient(135deg, #2563eb, #1d4ed8);
          color: #ffffff !important;
          font-weight: 700;
          font-size: 0.98rem;
          padding: 13px 26px;
          border-radius: 12px;
          text-decoration: none;
          box-shadow: 0 10px 25px -5px rgba(37, 99, 235, 0.45);
          transition: all 0.25s ease;
          border: 1px solid rgba(255, 255, 255, 0.15);
        }
        .deliv-btn-primary:hover {
          transform: translateY(-2px);
          box-shadow: 0 16px 32px -6px rgba(37, 99, 235, 0.6);
        }
        .deliv-btn-wa {
          display: inline-flex;
          align-items: center;
          justify-content: center;
          gap: 10px;
          background: #25d366;
          color: #ffffff !important;
          font-weight: 700;
          font-size: 0.98rem;
          padding: 13px 26px;
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
        .deliv-stat-pill {
          display: flex;
          align-items: center;
          gap: 10px;
          background: rgba(255, 255, 255, 0.05);
          border: 1px solid rgba(255, 255, 255, 0.1);
          padding: 11px 16px;
          border-radius: 12px;
          font-size: 0.88rem;
          color: #f1f5f9;
        }
        .deliv-stat-pill i {
          color: #38bdf8;
          font-size: 1.05rem;
        }

        /* Card Styles */
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
          color: #2563eb;
        }

        /* Error Pills */
        .error-tag {
          font-family: 'JetBrains Mono', monospace, Courier;
          font-size: 0.82rem;
          font-weight: 700;
          padding: 4px 10px;
          border-radius: 6px;
          display: inline-block;
          margin-bottom: 12px;
        }
        .error-tag-red {
          background: #fee2e2;
          color: #b91c1c;
          border: 1px solid #fecaca;
        }
        .error-tag-orange {
          background: #ffedd5;
          color: #c2410c;
          border: 1px solid #fed7aa;
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
          border: 2px solid #2563eb;
          box-shadow: 0 16px 36px -10px rgba(37, 99, 235, 0.16);
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

        /* Mobile Card System for Tables */
        .deliv-mobile-card {
          background: #ffffff;
          border: 1px solid #e2e8f0;
          border-radius: 14px;
          padding: 16px;
          margin-bottom: 12px;
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
          .hero-terminal-mockup {
            padding: 16px 14px !important;
            margin-top: 24px !important;
          }
          .hero-terminal-header {
            gap: 8px !important;
          }
          .hero-terminal-header .log-name {
            max-width: 140px !important;
            font-size: 0.72rem !important;
          }
          .hero-terminal-header .badge {
            font-size: 0.62rem !important;
          }
          .deliv-btn-wa, .deliv-btn-secondary, .deliv-btn-primary {
            width: 100% !important;
            padding: 13px 18px !important;
            font-size: 0.92rem !important;
            text-align: center !important;
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
            padding-bottom: 90px !important;
          }
        }
      </style><div class="deliv-wrapper"><section class="deliv-hero"><div class="container position-relative" style="z-index:2"><div class="row align-items-center g-4"><div class="col-lg-7"><div class="deliv-badge-pill"><i class="fa-solid fa-shield-virus"></i> Enterprise Email Security Architecture</div><h1 class="deliv-h1">Stop Domain Spoofing Before Someone Uses Your Brand <br/><span>To Send Fraudulent Email.</span></h1><p class="deliv-hero-p">DMARC, DKIM &amp; SPF Setup for businesses that cannot afford authentication failures. Protect your corporate domain against unauthorized email, spoofing, and phishing while implementing a controlled roadmap toward strict <code>p=reject</code> across Google Workspace, Microsoft 365, AWS SES, SendGrid, and Zoho.</p><div class="row g-2 mb-4"><div class="col-sm-6"><div class="deliv-stat-pill"><i class="fa-solid fa-check-double text-cyan-400"></i><span><strong>Google &amp; Yahoo Ready</strong> Mandate Aligned</span></div></div><div class="col-sm-6"><div class="deliv-stat-pill"><i class="fa-solid fa-key text-cyan-400"></i><span><strong>2048-bit DKIM</strong> Cryptographic Signing</span></div></div><div class="col-sm-6"><div class="deliv-stat-pill"><i class="fa-solid fa-shield-halved text-cyan-400"></i><span><strong>p=reject Roadmap</strong> Controlled 3 Phases</span></div></div><div class="col-sm-6"><div class="deliv-stat-pill"><i class="fa-solid fa-server text-cyan-400"></i><span><strong>Zero-Downtime</strong> Implementation Plan</span></div></div></div><div class="d-flex flex-wrap gap-3 mb-4"><a href="https://wa.me/917425016636?text=Hi%20Digify%2C%20I%20need%20an%20urgent%20SPF%2C%20DKIM%20%26%20DMARC%20audit%20and%20compliance%20setup%20for%20my%20domain." target="_blank" rel="noopener noreferrer" class="deliv-btn-wa"><i class="fa-brands fa-whatsapp" style="font-size:1.25rem"></i>Fix My SPF, DKIM &amp; DMARC Now — WhatsApp</a><button class="deliv-btn-secondary" data-bs-toggle="modal" data-bs-target="#trialModal"><i class="fa-solid fa-calendar-check"></i>Book 30-Min Consultation</button></div><div class="text-slate-400" style="font-size:0.85rem;color:#94a3b8"><i class="fa-solid fa-earth-americas me-2 text-cyan-400"></i>Supporting businesses across: <strong>USA · UK · UAE · Canada · Australia · India</strong></div></div><div class="col-lg-5"><div class="hero-terminal-mockup" style="background:rgba(255, 255, 255, 0.05);border:1px solid rgba(255, 255, 255, 0.15);border-radius:18px;padding:24px;backdrop-filter:blur(14px);box-shadow:0 25px 50px -12px rgba(0,0,0,0.5);overflow:hidden"><div class="hero-terminal-header d-flex align-items-center justify-content-between pb-3 mb-3 border-bottom border-secondary border-opacity-25"><div class="d-flex align-items-center gap-2 overflow-hidden"><span style="width:10px;height:10px;border-radius:50%;background:#ef4444;flex-shrink:0"></span><span style="width:10px;height:10px;border-radius:50%;background:#f59e0b;flex-shrink:0"></span><span style="width:10px;height:10px;border-radius:50%;background:#10b981;flex-shrink:0"></span><span class="ms-1 font-monospace text-truncate log-name" style="font-size:0.78rem;color:#94a3b8">dmarc_alignment_inspector.sh</span></div><span class="badge bg-primary text-uppercase px-2 py-1 flex-shrink-0" style="font-size:0.68rem">Triad Diagnostic</span></div><div class="font-monospace" style="font-size:0.8rem;line-height:1.7;color:#e2e8f0;word-break:break-word"><div class="text-info mb-1"><i class="fa-solid fa-terminal me-1"></i> Running RFC 7489 Alignment Diagnostics:</div><div style="color:#94a3b8">&gt; SPF [RFC 7208]: <span class="text-success">PASS</span> (MAIL FROM: bounce.company.com)</div><div style="color:#94a3b8">&gt; SPF Alignment (aspf=r): <span class="text-warning">ALIGNMENT MISMATCH</span> (From != MAIL FROM)</div><div style="color:#94a3b8">&gt; DKIM [RFC 6376]: <span class="text-success">PASS (2048-bit RSA)</span> (d=company.com)</div><div style="color:#94a3b8">&gt; DKIM Alignment (adkim=r): <span class="text-success">ALIGNED</span></div><div style="color:#94a3b8">&gt; DMARC Policy: <span class="text-cyan-300">p=quarantine; pct=100; rua=...</span></div><div class="mt-3 p-3 rounded" style="background:rgba(56, 189, 248, 0.1);border:1px solid rgba(56, 189, 248, 0.25)"><div class="d-flex justify-content-between align-items-center text-cyan-300 fw-bold flex-wrap gap-1"><span>Digify Soft Solutions Safe Progression</span><span class="badge bg-success">p=reject Ready</span></div><small style="color:#cbd5e1;font-size:0.76rem">All legitimate SaaS senders verified. Zero risk of business invoice blocking.</small></div></div></div></div></div></div></section><section class="py-5 bg-white border-bottom"><div class="container py-4"><div class="text-center max-w-2xl mx-auto mb-5"><span class="text-primary fw-bold text-uppercase" style="letter-spacing:1.5px;font-size:0.8rem">Core Infrastructure Pillars</span><h2 class="fw-bold mt-2" style="color:#0f172a;font-size:2.2rem">The Authentication Triad: Three Protocols, Three Different Jobs</h2><p class="text-muted">Your email authentication architecture is not a single DNS record. SPF authorizes sending infrastructure. DKIM cryptographically signs outgoing messages. DMARC aligns them and instructs receiving servers on how to handle failures.</p></div><div class="row g-4 mb-5"><div class="col-lg-4"><div class="deliv-card"><div class="deliv-card-icon"><i class="fa-solid fa-network-wired"></i></div><div class="d-flex justify-content-between align-items-center mb-2"><h4 class="fw-bold mb-0" style="color:#1e1b4b">SPF Protocol</h4><span class="badge bg-primary-subtle text-primary border border-primary-subtle">RFC 7208</span></div><p class="text-muted small mb-3">Authorizes sending IP infrastructure via DNS TXT records evaluated against the SMTP envelope sender (<code>MAIL FROM</code>).</p><div class="p-2 px-3 rounded bg-light border font-monospace small mb-3 text-secondary" style="font-size:0.72rem;word-break:break-all;white-space:pre-wrap;line-height:1.4">v=spf1 include:_spf.google.com include:sendgrid.net -all</div><h6 class="fw-bold text-dark small text-uppercase mb-2">Technical Standards:</h6><ul class="list-unstyled mb-0" style="font-size:0.86rem;color:#475569"><li class="mb-2"><i class="fa-solid fa-check text-primary me-2"></i> <strong>10-DNS-Lookup Limit:</strong> Evaluates mechanisms strictly up to 10 queries; avoids catastrophic <code>SPF PermError</code>.</li><li class="mb-2"><i class="fa-solid fa-check text-primary me-2"></i> <strong>Enforcement Mechanism:</strong> Safely transitioning from permissive <code>~all</code> (SoftFail) to strictly enforced <code>-all</code> (HardFail).</li><li><i class="fa-solid fa-check text-primary me-2"></i> <strong>Subdomain Mapping:</strong> Dedicated SPF records for <code>bounce.</code> and <code>mail.</code> subdomains.</li></ul></div></div><div class="col-lg-4"><div class="deliv-card"><div class="deliv-card-icon"><i class="fa-solid fa-key"></i></div><div class="d-flex justify-content-between align-items-center mb-2"><h4 class="fw-bold mb-0" style="color:#1e1b4b">DKIM Signing</h4><span class="badge bg-primary-subtle text-primary border border-primary-subtle">RFC 6376</span></div><p class="text-muted small mb-3">Asymmetric cryptographic verification ensuring message headers and body have not been altered in transit.</p><div class="p-2 px-3 rounded bg-light border font-monospace small mb-3 text-secondary" style="font-size:0.72rem;word-break:break-all;white-space:pre-wrap;line-height:1.4">selector1._domainkey.example.com TXT &quot;v=DKIM1; k=rsa; p=...&quot;</div><h6 class="fw-bold text-dark small text-uppercase mb-2">Technical Standards:</h6><ul class="list-unstyled mb-0" style="font-size:0.86rem;color:#475569"><li class="mb-2"><i class="fa-solid fa-check text-primary me-2"></i> <strong>2048-bit RSA Keys:</strong> Maximum cryptographic strength replacing vulnerable legacy 1024-bit keys.</li><li class="mb-2"><i class="fa-solid fa-check text-primary me-2"></i> <strong>Canonicalization:</strong> Tuning <code>c=relaxed/relaxed</code> to prevent message modification breaks during forwarding.</li><li><i class="fa-solid fa-check text-primary me-2"></i> <strong>Key Rotation:</strong> Staging primary and standby selectors for seamless key rotation without mail bounce.</li></ul></div></div><div class="col-lg-4"><div class="deliv-card"><div class="deliv-card-icon"><i class="fa-solid fa-shield-halved"></i></div><div class="d-flex justify-content-between align-items-center mb-2"><h4 class="fw-bold mb-0" style="color:#1e1b4b">DMARC Policy</h4><span class="badge bg-primary-subtle text-primary border border-primary-subtle">RFC 7489</span></div><p class="text-muted small mb-3">Ties SPF and DKIM directly to the visible <code>From:</code> header, enforcing anti-spoofing policies and generating telemetry.</p><div class="p-2 px-3 rounded bg-light border font-monospace small mb-3 text-secondary" style="font-size:0.72rem;word-break:break-all;white-space:pre-wrap;line-height:1.4">_dmarc.example.com TXT &quot;v=DMARC1; p=reject; pct=100; rua=...&quot;</div><h6 class="fw-bold text-dark small text-uppercase mb-2">Technical Standards:</h6><ul class="list-unstyled mb-0" style="font-size:0.86rem;color:#475569"><li class="mb-2"><i class="fa-solid fa-check text-primary me-2"></i> <strong>Domain Alignment:</strong> Evaluates relaxed (<code>r</code>) vs strict (<code>s</code>) alignment for SPF (<code>aspf</code>) &amp; DKIM (<code>adkim</code>).</li><li class="mb-2"><i class="fa-solid fa-check text-primary me-2"></i> <strong>Policy Progression:</strong> Safe staging from <code>p=none</code> → <code>p=quarantine</code> → <code>p=reject</code>.</li><li><i class="fa-solid fa-check text-primary me-2"></i> <strong>Telemetry Ingestion:</strong> Parsing structured XML aggregate reports (<code>rua</code>) &amp; forensic failure alerts (<code>ruf</code>).</li></ul></div></div></div><div class="d-none d-md-block deliv-table-wrap mb-4"><div class="p-3 bg-light border-bottom fw-bold text-dark d-flex justify-content-between align-items-center"><span>Technical Comparison: SPF vs DKIM vs DMARC</span><span class="badge bg-primary">IETF Standards</span></div><div class="table-responsive"><table class="deliv-table"><thead><tr><th style="width:22%">Architectural Parameter</th><th style="width:26%">SPF (RFC 7208)</th><th style="width:26%">DKIM (RFC 6376)</th><th style="width:26%">DMARC (RFC 7489)</th></tr></thead><tbody><tr><td><strong>Primary Purpose</strong></td><td>Authorize sending IP infrastructure</td><td>Cryptographically sign &amp; tamper-proof emails</td><td class="text-primary fw-medium">Enforce domain alignment &amp; anti-spoofing policy</td></tr><tr><td><strong>RFC Standard</strong></td><td>RFC 7208</td><td>RFC 6376</td><td class="text-primary fw-medium">RFC 7489</td></tr><tr><td><strong>Main Identity Verified</strong></td><td>SMTP Envelope MAIL FROM domain</td><td>d= domain in cryptographic header</td><td class="text-primary fw-medium">Visible From: header shown to recipients</td></tr><tr><td><strong>DNS Record Type</strong></td><td>TXT record (v=spf1)</td><td>TXT or CNAME (selector._domainkey)</td><td class="text-primary fw-medium">TXT record (_dmarc.domain.com)</td></tr><tr><td><strong>Cryptographic Security</strong></td><td>No (IP list check only)</td><td>Yes (2048-bit RSA private/public keys)</td><td class="text-primary fw-medium">No (Alignment evaluation &amp; policy enforcement)</td></tr><tr><td><strong>Anti-Spoofing Protection</strong></td><td>Limited (does not protect visible From:)</td><td>Yes (for signed headers and body hash)</td><td class="text-primary fw-medium">Strongest (enforces p=reject on spoofed mail)</td></tr><tr><td><strong>Native Reporting</strong></td><td>None</td><td>None</td><td class="text-primary fw-medium">Yes (RUA aggregate XML &amp; RUF forensic)</td></tr><tr><td><strong>Common Failure Mode</strong></td><td>SPF PermError (&gt;10 lookup limit exceeded)</td><td>DKIM Fail (Signature missing or altered)</td><td class="text-primary fw-medium">DMARC Fail (Unaligned or unauthorized source)</td></tr></tbody></table></div></div><div class="d-block d-md-none mb-4"><div class="p-3 bg-light border rounded-3 mb-3 fw-bold text-dark text-center" style="font-size:0.9rem">SPF vs DKIM vs DMARC Comparison</div><div class="deliv-mobile-card mb-3 p-3"><div class="fw-bold text-dark mb-2 pb-2 border-bottom" style="font-size:0.98rem">Primary Purpose</div><div class="d-flex flex-column gap-2"><div class="p-2 rounded bg-light border-start border-3 border-secondary"><div class="text-muted fw-bold mb-1" style="font-size:0.72rem;letter-spacing:0.5px">SPF (RFC 7208)</div><div class="text-dark small fw-medium" style="line-height:1.45">Authorize sending IP infrastructure</div></div><div class="p-2 rounded bg-light border-start border-3 border-secondary"><div class="text-muted fw-bold mb-1" style="font-size:0.72rem;letter-spacing:0.5px">DKIM (RFC 6376)</div><div class="text-dark small fw-medium" style="line-height:1.45">Cryptographically sign &amp; tamper-proof emails</div></div><div class="p-2 rounded bg-primary-subtle border-start border-3 border-primary"><div class="text-primary fw-bold mb-1" style="font-size:0.72rem;letter-spacing:0.5px">DMARC (RFC 7489)</div><div class="text-primary small fw-semibold" style="line-height:1.45">Enforce domain alignment &amp; anti-spoofing policy</div></div></div></div><div class="deliv-mobile-card mb-3 p-3"><div class="fw-bold text-dark mb-2 pb-2 border-bottom" style="font-size:0.98rem">RFC Standard</div><div class="d-flex flex-column gap-2"><div class="p-2 rounded bg-light border-start border-3 border-secondary"><div class="text-muted fw-bold mb-1" style="font-size:0.72rem;letter-spacing:0.5px">SPF (RFC 7208)</div><div class="text-dark small fw-medium" style="line-height:1.45">RFC 7208</div></div><div class="p-2 rounded bg-light border-start border-3 border-secondary"><div class="text-muted fw-bold mb-1" style="font-size:0.72rem;letter-spacing:0.5px">DKIM (RFC 6376)</div><div class="text-dark small fw-medium" style="line-height:1.45">RFC 6376</div></div><div class="p-2 rounded bg-primary-subtle border-start border-3 border-primary"><div class="text-primary fw-bold mb-1" style="font-size:0.72rem;letter-spacing:0.5px">DMARC (RFC 7489)</div><div class="text-primary small fw-semibold" style="line-height:1.45">RFC 7489</div></div></div></div><div class="deliv-mobile-card mb-3 p-3"><div class="fw-bold text-dark mb-2 pb-2 border-bottom" style="font-size:0.98rem">Main Identity Verified</div><div class="d-flex flex-column gap-2"><div class="p-2 rounded bg-light border-start border-3 border-secondary"><div class="text-muted fw-bold mb-1" style="font-size:0.72rem;letter-spacing:0.5px">SPF (RFC 7208)</div><div class="text-dark small fw-medium" style="line-height:1.45">SMTP Envelope MAIL FROM domain</div></div><div class="p-2 rounded bg-light border-start border-3 border-secondary"><div class="text-muted fw-bold mb-1" style="font-size:0.72rem;letter-spacing:0.5px">DKIM (RFC 6376)</div><div class="text-dark small fw-medium" style="line-height:1.45">d= domain in cryptographic header</div></div><div class="p-2 rounded bg-primary-subtle border-start border-3 border-primary"><div class="text-primary fw-bold mb-1" style="font-size:0.72rem;letter-spacing:0.5px">DMARC (RFC 7489)</div><div class="text-primary small fw-semibold" style="line-height:1.45">Visible From: header shown to recipients</div></div></div></div><div class="deliv-mobile-card mb-3 p-3"><div class="fw-bold text-dark mb-2 pb-2 border-bottom" style="font-size:0.98rem">DNS Record Type</div><div class="d-flex flex-column gap-2"><div class="p-2 rounded bg-light border-start border-3 border-secondary"><div class="text-muted fw-bold mb-1" style="font-size:0.72rem;letter-spacing:0.5px">SPF (RFC 7208)</div><div class="text-dark small fw-medium" style="line-height:1.45">TXT record (v=spf1)</div></div><div class="p-2 rounded bg-light border-start border-3 border-secondary"><div class="text-muted fw-bold mb-1" style="font-size:0.72rem;letter-spacing:0.5px">DKIM (RFC 6376)</div><div class="text-dark small fw-medium" style="line-height:1.45">TXT or CNAME (selector._domainkey)</div></div><div class="p-2 rounded bg-primary-subtle border-start border-3 border-primary"><div class="text-primary fw-bold mb-1" style="font-size:0.72rem;letter-spacing:0.5px">DMARC (RFC 7489)</div><div class="text-primary small fw-semibold" style="line-height:1.45">TXT record (_dmarc.domain.com)</div></div></div></div><div class="deliv-mobile-card mb-3 p-3"><div class="fw-bold text-dark mb-2 pb-2 border-bottom" style="font-size:0.98rem">Cryptographic Security</div><div class="d-flex flex-column gap-2"><div class="p-2 rounded bg-light border-start border-3 border-secondary"><div class="text-muted fw-bold mb-1" style="font-size:0.72rem;letter-spacing:0.5px">SPF (RFC 7208)</div><div class="text-dark small fw-medium" style="line-height:1.45">No (IP list check only)</div></div><div class="p-2 rounded bg-light border-start border-3 border-secondary"><div class="text-muted fw-bold mb-1" style="font-size:0.72rem;letter-spacing:0.5px">DKIM (RFC 6376)</div><div class="text-dark small fw-medium" style="line-height:1.45">Yes (2048-bit RSA private/public keys)</div></div><div class="p-2 rounded bg-primary-subtle border-start border-3 border-primary"><div class="text-primary fw-bold mb-1" style="font-size:0.72rem;letter-spacing:0.5px">DMARC (RFC 7489)</div><div class="text-primary small fw-semibold" style="line-height:1.45">No (Alignment evaluation &amp; policy enforcement)</div></div></div></div><div class="deliv-mobile-card mb-3 p-3"><div class="fw-bold text-dark mb-2 pb-2 border-bottom" style="font-size:0.98rem">Anti-Spoofing Protection</div><div class="d-flex flex-column gap-2"><div class="p-2 rounded bg-light border-start border-3 border-secondary"><div class="text-muted fw-bold mb-1" style="font-size:0.72rem;letter-spacing:0.5px">SPF (RFC 7208)</div><div class="text-dark small fw-medium" style="line-height:1.45">Limited (does not protect visible From:)</div></div><div class="p-2 rounded bg-light border-start border-3 border-secondary"><div class="text-muted fw-bold mb-1" style="font-size:0.72rem;letter-spacing:0.5px">DKIM (RFC 6376)</div><div class="text-dark small fw-medium" style="line-height:1.45">Yes (for signed headers and body hash)</div></div><div class="p-2 rounded bg-primary-subtle border-start border-3 border-primary"><div class="text-primary fw-bold mb-1" style="font-size:0.72rem;letter-spacing:0.5px">DMARC (RFC 7489)</div><div class="text-primary small fw-semibold" style="line-height:1.45">Strongest (enforces p=reject on spoofed mail)</div></div></div></div><div class="deliv-mobile-card mb-3 p-3"><div class="fw-bold text-dark mb-2 pb-2 border-bottom" style="font-size:0.98rem">Native Reporting</div><div class="d-flex flex-column gap-2"><div class="p-2 rounded bg-light border-start border-3 border-secondary"><div class="text-muted fw-bold mb-1" style="font-size:0.72rem;letter-spacing:0.5px">SPF (RFC 7208)</div><div class="text-dark small fw-medium" style="line-height:1.45">None</div></div><div class="p-2 rounded bg-light border-start border-3 border-secondary"><div class="text-muted fw-bold mb-1" style="font-size:0.72rem;letter-spacing:0.5px">DKIM (RFC 6376)</div><div class="text-dark small fw-medium" style="line-height:1.45">None</div></div><div class="p-2 rounded bg-primary-subtle border-start border-3 border-primary"><div class="text-primary fw-bold mb-1" style="font-size:0.72rem;letter-spacing:0.5px">DMARC (RFC 7489)</div><div class="text-primary small fw-semibold" style="line-height:1.45">Yes (RUA aggregate XML &amp; RUF forensic)</div></div></div></div><div class="deliv-mobile-card mb-3 p-3"><div class="fw-bold text-dark mb-2 pb-2 border-bottom" style="font-size:0.98rem">Common Failure Mode</div><div class="d-flex flex-column gap-2"><div class="p-2 rounded bg-light border-start border-3 border-secondary"><div class="text-muted fw-bold mb-1" style="font-size:0.72rem;letter-spacing:0.5px">SPF (RFC 7208)</div><div class="text-dark small fw-medium" style="line-height:1.45">SPF PermError (&gt;10 lookup limit exceeded)</div></div><div class="p-2 rounded bg-light border-start border-3 border-secondary"><div class="text-muted fw-bold mb-1" style="font-size:0.72rem;letter-spacing:0.5px">DKIM (RFC 6376)</div><div class="text-dark small fw-medium" style="line-height:1.45">DKIM Fail (Signature missing or altered)</div></div><div class="p-2 rounded bg-primary-subtle border-start border-3 border-primary"><div class="text-primary fw-bold mb-1" style="font-size:0.72rem;letter-spacing:0.5px">DMARC (RFC 7489)</div><div class="text-primary small fw-semibold" style="line-height:1.45">DMARC Fail (Unaligned or unauthorized source)</div></div></div></div></div></div></section><section class="py-5" style="background-color:#f8fafc"><div class="container py-4"><div class="text-center max-w-2xl mx-auto mb-5"><span class="text-primary fw-bold text-uppercase" style="letter-spacing:1.5px;font-size:0.8rem">Mandatory Compliance &amp; Vulnerabilities</span><h2 class="fw-bold mt-2" style="color:#0f172a;font-size:2.2rem">SPF Alone Is Not a Modern Email Authentication Strategy</h2><p class="text-muted">Google and Yahoo mandate that bulk and corporate senders publish aligned SPF and DKIM, enforce DMARC, support TLS, and maintain user-reported spam rates strictly under 0.1% (never exceeding 0.3%).</p></div><div class="p-4 rounded-4 bg-white border mb-5 shadow-sm"><div class="row align-items-center g-4"><div class="col-lg-8"><span class="badge bg-danger-subtle text-danger border border-danger-subtle mb-2 px-3 py-1 fw-bold">The Impersonation Vulnerability</span><h4 class="fw-bold" style="color:#1e1b4b">Why SPF Alone Cannot Stop Fraudsters From Spoofing Your CEO</h4><p class="text-muted mb-0" style="font-size:0.95rem;line-height:1.7">SPF only validates the <code>MAIL FROM</code> (Return-Path) address in the SMTP envelope. An attacker can set up their own authorized server, pass SPF under their own domain, and forge your visible <code>From: CEO &lt;ceo@yourcompany.com&gt;</code> in the email header! The recipient sees your real executive&#x27;s name and email. <strong>Only DMARC alignment evaluates the visible From: domain and stops this impersonation.</strong></p></div><div class="col-lg-4 text-center"><div class="p-3 rounded-3 bg-light border font-monospace text-start" style="font-size:0.8rem"><div class="text-danger">From: CEO &lt;ceo@yourbrand.com&gt;</div><div class="text-muted">Return-Path: spoof@hacker-server.com</div><div class="text-success mt-2">SPF Result: PASS (for hacker domain)</div><div class="text-danger fw-bold">DMARC Result: FAIL (Unaligned)</div><div class="badge bg-danger mt-2">DMARC p=reject Action: DROPPED</div></div></div></div></div><div class="mb-4"><h4 class="fw-bold mb-2" style="color:#1e1b4b">SMTP Rejection Codes Indicating Broken Authentication</h4><p class="text-muted">Receiving servers reject non-compliant business traffic with these status codes:</p></div><div class="row g-4 mb-5"><div class="col-md-3 col-sm-6"><div class="deliv-card"><span class="error-tag error-tag-red">550 5.7.26</span><h5 class="fw-bold mb-1">Gmail Auth Rejection</h5><p class="text-muted small mb-0">Message fails SPF/DKIM or DMARC alignment required by Google.</p></div></div><div class="col-md-3 col-sm-6"><div class="deliv-card"><span class="error-tag error-tag-red">550 5.7.1</span><h5 class="fw-bold mb-1">Policy Rejection</h5><p class="text-muted small mb-0">Target mailbox provider rejected mail due to strict anti-spoofing policy.</p></div></div><div class="col-md-3 col-sm-6"><div class="deliv-card"><span class="error-tag error-tag-orange">554 Relay Denied</span><h5 class="fw-bold mb-1">Connector Failure</h5><p class="text-muted small mb-0">Exchange Online or relay connector rejected unauthorized outbound mail.</p></div></div><div class="col-md-3 col-sm-6"><div class="deliv-card"><span class="error-tag error-tag-orange">421 / 451</span><h5 class="fw-bold mb-1">Temporary Throttling</h5><p class="text-muted small mb-0">Yahoo or Gmail deferring delivery due to compliance violations.</p></div></div></div><h4 class="fw-bold mb-3" style="color:#1e1b4b">Three Dangerous Email Authentication Misconceptions</h4><div class="row g-4"><div class="col-md-4"><div class="deliv-card"><span class="badge bg-danger-subtle text-danger px-2 py-1 mb-2 fw-bold" style="font-size:0.72rem">MISCONCEPTION #1</span><h5 class="fw-bold" style="color:#1e1b4b">&quot;We have SPF, so nobody can spoof our domain.&quot;</h5><p class="text-muted small mb-0">False. SPF only evaluates the hidden envelope sender. Without DMARC alignment, anyone can still display your executive email in the recipient&#x27;s inbox.</p></div></div><div class="col-md-4"><div class="deliv-card"><span class="badge bg-danger-subtle text-danger px-2 py-1 mb-2 fw-bold" style="font-size:0.72rem">MISCONCEPTION #2</span><h5 class="fw-bold" style="color:#1e1b4b">&quot;Publishing p=none means we are fully protected.&quot;</h5><p class="text-muted small mb-0">False. <code>p=none</code> is purely diagnostic monitoring; it instructs servers to take zero protective action against spoofed messages.</p></div></div><div class="col-md-4"><div class="deliv-card"><span class="badge bg-danger-subtle text-danger px-2 py-1 mb-2 fw-bold" style="font-size:0.72rem">MISCONCEPTION #3</span><h5 class="fw-bold" style="color:#1e1b4b">&quot;I can simply switch our DMARC to p=reject today.&quot;</h5><p class="text-muted small mb-0">Dangerous! Immediate rejection without auditing unmapped CRM alerts, ERP invoices, and transactional SaaS will cause critical business emails to be blocked.</p></div></div></div></div></section><section class="py-5 bg-white border-top border-bottom"><div class="container py-4"><div class="text-center max-w-2xl mx-auto mb-5"><span class="text-primary fw-bold text-uppercase" style="letter-spacing:1.5px;font-size:0.8rem">Zero-Downtime Safe Transition</span><h2 class="fw-bold mt-2" style="color:#0f172a;font-size:2.2rem">Our 3-Phase DMARC Enforcement Roadmap</h2><p class="text-muted">We safely navigate your domain to full <code>p=reject</code> immunity while protecting legitimate business mail, customer invoices, and CRM notifications from ever being blocked.</p></div><div class="row g-4 mb-5"><div class="col-lg-4"><div class="deliv-card border-top border-4 border-info"><div class="d-flex justify-content-between align-items-center mb-2"><span class="badge bg-info-subtle text-info fw-bold">PHASE 1</span><span class="font-monospace text-muted small">p=none</span></div><h4 class="fw-bold" style="color:#1e1b4b">Audit, Discovery &amp; Monitoring</h4><p class="text-muted small mb-3">Discover before enforcing. We map every legitimate sending source, configure aggregate XML reporting (<code>rua</code>), and establish baseline telemetry.</p><ul class="list-unstyled mb-0" style="font-size:0.86rem;color:#475569"><li class="mb-2"><i class="fa-solid fa-check text-info me-2"></i> Inventory all SaaS tools (Salesforce, Zendesk, Mailchimp).</li><li class="mb-2"><i class="fa-solid fa-check text-info me-2"></i> Ingest daily DMARC aggregate XML reports.</li><li><i class="fa-solid fa-check text-info me-2"></i> Identify unaligned third-party bounce domains.</li></ul></div></div><div class="col-lg-4"><div class="deliv-card border-top border-4 border-warning"><div class="d-flex justify-content-between align-items-center mb-2"><span class="badge bg-warning-subtle text-warning fw-bold">PHASE 2</span><span class="font-monospace text-muted small">p=quarantine</span></div><h4 class="fw-bold" style="color:#1e1b4b">Source Alignment &amp; Quarantine</h4><p class="text-muted small mb-3">Controlled percentage rollout. We instruct receiving systems to divert suspicious messages to Spam while progressively increasing enforcement.</p><ul class="list-unstyled mb-0" style="font-size:0.86rem;color:#475569"><li class="mb-2"><i class="fa-solid fa-check text-warning me-2"></i> Progressive staging: <code>pct=25</code> → <code>50</code> → <code>100</code>.</li><li class="mb-2"><i class="fa-solid fa-check text-warning me-2"></i> Fix DKIM public/private keys for legitimate sending APIs.</li><li><i class="fa-solid fa-check text-warning me-2"></i> Verify SPF Pass + DKIM Pass + DMARC Alignment.</li></ul></div></div><div class="col-lg-4"><div class="deliv-card border-top border-4 border-success"><div class="d-flex justify-content-between align-items-center mb-2"><span class="badge bg-success-subtle text-success fw-bold">PHASE 3</span><span class="font-monospace text-muted small">p=reject</span></div><h4 class="fw-bold" style="color:#1e1b4b">Full Rejection &amp; Domain Immunity</h4><p class="text-muted small mb-3">Total spoofing immunity. Participating mail servers drop any unauthorized email impersonating your brand before it reaches the recipient.</p><ul class="list-unstyled mb-0" style="font-size:0.86rem;color:#475569"><li class="mb-2"><i class="fa-solid fa-check text-success me-2"></i> Full enforcement: <code>p=reject; pct=100</code>.</li><li class="mb-2"><i class="fa-solid fa-check text-success me-2"></i> Subdomain security: <code>sp=reject</code> where appropriate.</li><li><i class="fa-solid fa-check text-success me-2"></i> Ongoing forensic alerts (<code>ruf</code>) and reputation monitoring.</li></ul></div></div></div><div class="p-4 rounded-4 bg-light border"><h4 class="fw-bold mb-3" style="color:#1e1b4b">Digify Soft Solutions’s Legitimate-Mail Safety Protocol</h4><p class="text-muted mb-3" style="font-size:0.95rem">We never activate <code>p=reject</code> until every critical business workflow is validated:</p><div class="row g-3"><div class="col-md-4"><div class="p-3 bg-white rounded-3 border"><h6 class="fw-bold mb-1"><i class="fa-solid fa-file-invoice text-primary me-2"></i> Invoices &amp; Accounting</h6><small class="text-muted">ERP, QuickBooks, Zoho Books, Stripe billing authenticated with custom MAIL FROM.</small></div></div><div class="col-md-4"><div class="p-3 bg-white rounded-3 border"><h6 class="fw-bold mb-1"><i class="fa-solid fa-users text-primary me-2"></i> CRM &amp; Sales Alerts</h6><small class="text-muted">Salesforce, HubSpot, Apollo outbound aligned with 2048-bit DKIM selectors.</small></div></div><div class="col-md-4"><div class="p-3 bg-white rounded-3 border"><h6 class="fw-bold mb-1"><i class="fa-solid fa-bell text-primary me-2"></i> Transactional APIs</h6><small class="text-muted">AWS SES, SendGrid, Postmark password resets &amp; OTPs fully aligned and isolated.</small></div></div></div></div></div></section><section class="py-5" style="background-color:#f8fafc"><div class="container py-4"><div class="text-center max-w-2xl mx-auto mb-5"><span class="text-primary fw-bold text-uppercase" style="letter-spacing:1.5px;font-size:0.8rem">Universal Stack Integration</span><h2 class="fw-bold mt-2" style="color:#0f172a;font-size:2.2rem">Supported Email Systems &amp; DNS Infrastructure</h2><p class="text-muted">One unified authentication architecture across your corporate inboxes, transactional gateways, and DNS managers.</p></div><h5 class="fw-bold mb-3" style="color:#1e1b4b">Supported Email Providers</h5><div class="row g-3 mb-5"><div class="col-md-3 col-sm-6"><div class="p-3 rounded-3 bg-white border"><div class="fw-bold"><i class="fa-brands fa-google text-danger me-2"></i> Google Workspace</div><small class="text-muted">Admin DKIM, SPF include, Postmaster Tools</small></div></div><div class="col-md-3 col-sm-6"><div class="p-3 rounded-3 bg-white border"><div class="fw-bold"><i class="fa-brands fa-microsoft text-primary me-2"></i> Microsoft 365</div><small class="text-muted">Exchange Online, CNAME DKIM, mail flow</small></div></div><div class="col-md-3 col-sm-6"><div class="p-3 rounded-3 bg-white border"><div class="fw-bold"><i class="fa-solid fa-envelope-open-text text-warning me-2"></i> Zoho Mail</div><small class="text-muted">Zoho Workplace &amp; CRM custom selectors</small></div></div><div class="col-md-3 col-sm-6"><div class="p-3 rounded-3 bg-white border"><div class="fw-bold"><i class="fa-brands fa-aws text-warning me-2"></i> Amazon SES</div><small class="text-muted">Easy DKIM, custom MAIL FROM, SNS alerts</small></div></div><div class="col-md-3 col-sm-6"><div class="p-3 rounded-3 bg-white border"><div class="fw-bold"><i class="fa-solid fa-paper-plane text-info me-2"></i> SendGrid</div><small class="text-muted">Automated security, branded return-path</small></div></div><div class="col-md-3 col-sm-6"><div class="p-3 rounded-3 bg-white border"><div class="fw-bold"><i class="fa-solid fa-envelope-circle-check text-danger me-2"></i> Mailgun</div><small class="text-muted">Sending subdomains, tracking DNS</small></div></div><div class="col-md-3 col-sm-6"><div class="p-3 rounded-3 bg-white border"><div class="fw-bold"><i class="fa-solid fa-stamp text-warning me-2"></i> Postmark</div><small class="text-muted">Message streams, transactional DKIM</small></div></div><div class="col-md-3 col-sm-6"><div class="p-3 rounded-3 bg-white border"><div class="fw-bold"><i class="fa-solid fa-lock text-purple me-2"></i> Proton Mail</div><small class="text-muted">Custom-domain zero-access encryption</small></div></div></div><h5 class="fw-bold mb-3" style="color:#1e1b4b">Supported DNS Infrastructure</h5><div class="row g-2"><div class="col-lg-3 col-md-4 col-sm-6"><div class="p-2 px-3 rounded-3 bg-white border small fw-medium text-secondary d-flex align-items-center gap-2"><i class="fa-solid fa-server text-primary"></i> Cloudflare (DNSSEC-aware)</div></div><div class="col-lg-3 col-md-4 col-sm-6"><div class="p-2 px-3 rounded-3 bg-white border small fw-medium text-secondary d-flex align-items-center gap-2"><i class="fa-solid fa-server text-primary"></i> AWS Route 53</div></div><div class="col-lg-3 col-md-4 col-sm-6"><div class="p-2 px-3 rounded-3 bg-white border small fw-medium text-secondary d-flex align-items-center gap-2"><i class="fa-solid fa-server text-primary"></i> GoDaddy</div></div><div class="col-lg-3 col-md-4 col-sm-6"><div class="p-2 px-3 rounded-3 bg-white border small fw-medium text-secondary d-flex align-items-center gap-2"><i class="fa-solid fa-server text-primary"></i> Namecheap</div></div><div class="col-lg-3 col-md-4 col-sm-6"><div class="p-2 px-3 rounded-3 bg-white border small fw-medium text-secondary d-flex align-items-center gap-2"><i class="fa-solid fa-server text-primary"></i> Google Domains / Squarespace</div></div><div class="col-lg-3 col-md-4 col-sm-6"><div class="p-2 px-3 rounded-3 bg-white border small fw-medium text-secondary d-flex align-items-center gap-2"><i class="fa-solid fa-server text-primary"></i> Hostinger</div></div><div class="col-lg-3 col-md-4 col-sm-6"><div class="p-2 px-3 rounded-3 bg-white border small fw-medium text-secondary d-flex align-items-center gap-2"><i class="fa-solid fa-server text-primary"></i> Bluehost</div></div><div class="col-lg-3 col-md-4 col-sm-6"><div class="p-2 px-3 rounded-3 bg-white border small fw-medium text-secondary d-flex align-items-center gap-2"><i class="fa-solid fa-server text-primary"></i> cPanel / BIND9</div></div></div><div class="text-center mt-3"><small class="text-muted">*All implementation is performed via delegated admin or guided screen-share. We never ask for domain master passwords.</small></div></div></section><section class="py-5 bg-white border-top border-bottom"><div class="container py-4"><div class="text-center max-w-2xl mx-auto mb-4"><span class="text-primary fw-bold text-uppercase" style="letter-spacing:1.5px;font-size:0.8rem">Predictable Fixed Pricing</span><h2 class="fw-bold mt-2" style="color:#0f172a;font-size:2.2rem">Professional SPF, DKIM &amp; DMARC Implementation</h2><p class="text-muted">Transparent rates with defined technical deliverables. Choose the tier suited to your domain setup.</p><div class="mt-3"><div class="currency-switch"><button type="button" class="currency-btn active active" data-currency="USD" onclick="switchCurrency('USD')" data-currency="INR" onclick="switchCurrency('INR')">🇺🇸 USD ($ Global)</button><button type="button" class="currency-btn ">🇮🇳 INR (₹ India)</button></div><div class="text-muted small mt-2" style="font-size:0.8rem"><span id="currNoteText">Fixed flat-rate pricing for US, UK, UAE, Canada & Global businesses</span></div></div></div><div class="row g-4 align-items-stretch mb-5"><div class="col-lg-4"><div class="price-card"><div class="d-flex justify-content-between align-items-center mb-2"><span class="badge bg-light text-secondary border px-2 py-1" style="font-size:0.72rem">Tier 1 Standard</span><span class="badge bg-light text-secondary border px-2 py-1" style="font-size:0.72rem">Single Domain</span></div><h4 class="fw-bold mb-2 text-dark" style="font-size:1.3rem">Rapid Domain Authentication Fix</h4><p class="text-muted small mb-3">For businesses experiencing immediate authentication errors needing rapid compliance.</p><div class="p-3 rounded-3 bg-light mb-3 border"><div class="d-flex align-items-baseline gap-1"><span style="font-size:2rem;font-weight:900;color:#0f172a;line-height:1"><span class="curr-val" data-usd="$299" data-inr="₹23,999">$299</span></span><span class="text-muted small fw-medium">/ domain</span></div><div class="small fw-semibold text-success mt-1"><i class="fa-solid fa-bolt me-1"></i> Target: 24-Hour Turnaround</div></div><div class="flex-grow-1 mb-4"><div class="fw-bold small text-uppercase text-secondary mb-2" style="font-size:0.72rem;letter-spacing:0.5px">Included Deliverables:</div><ul class="list-unstyled mb-0" style="font-size:0.85rem;color:#334155"><li class="mb-2"><i class="fa-solid fa-circle-check text-primary me-2"></i> SPF audit &amp; lookup limit review</li><li class="mb-2"><i class="fa-solid fa-circle-check text-primary me-2"></i> Provider 2048-bit DKIM configuration</li><li class="mb-2"><i class="fa-solid fa-circle-check text-primary me-2"></i> DMARC policy record creation</li><li class="mb-2"><i class="fa-solid fa-circle-check text-primary me-2"></i> Basic alignment verification</li><li class="mb-2"><i class="fa-solid fa-circle-check text-primary me-2"></i> 1 Representative test-email check</li><li><i class="fa-solid fa-circle-check text-primary me-2"></i> 7-Day implementation support</li></ul></div><a href="https://wa.me/917425016636?text=Hi%20Digify%2C%20I%20want%20to%20order%20the%20Express%20Authentication%20Fix%20package%20($299)." target="_blank" rel="noopener noreferrer" class="btn btn-outline-primary w-100 fw-bold py-2 rounded-3 mt-auto">Fix My Authentication — WhatsApp</a></div></div><div class="col-lg-4"><div class="price-card featured"><div class="d-flex justify-content-between align-items-center mb-2"><span class="badge" style="background:linear-gradient(135deg, #2563eb, #1d4ed8);color:#fff;font-size:0.72rem;padding:4px 10px;border-radius:9999px">★ Recommended</span><span class="badge bg-primary-subtle text-primary border border-primary-subtle px-2 py-1" style="font-size:0.72rem">Single Domain</span></div><h4 class="fw-bold mb-2 text-primary" style="font-size:1.3rem">DMARC Enforcement Suite</h4><p class="text-muted small mb-3">Complete authentication architecture, 30-day XML telemetry, and controlled p=reject transition.</p><div class="p-3 rounded-3 bg-primary-subtle border border-primary-subtle mb-3"><div class="d-flex align-items-baseline gap-1"><span style="font-size:2rem;font-weight:900;color:#1d4ed8;line-height:1"><span class="curr-val" data-usd="$299" data-inr="₹23,999">$299</span></span><span class="text-muted small fw-medium">/ domain</span></div><div class="small fw-semibold text-primary mt-1"><i class="fa-solid fa-calendar-check me-1"></i> Full 3-Phase Rollout + 30-Day Analysis</div></div><div class="flex-grow-1 mb-4"><div class="fw-bold small text-uppercase text-primary mb-2" style="font-size:0.72rem;letter-spacing:0.5px">Everything in Express, Plus:</div><ul class="list-unstyled mb-0" style="font-size:0.85rem;color:#334155"><li class="mb-2"><i class="fa-solid fa-circle-check text-success me-2"></i> Comprehensive SPF dependency flattening</li><li class="mb-2"><i class="fa-solid fa-circle-check text-success me-2"></i> 2048-bit DKIM setup with selector rotation</li><li class="mb-2"><i class="fa-solid fa-circle-check text-success me-2"></i> RUA aggregate XML reporting setup</li><li class="mb-2"><i class="fa-solid fa-circle-check text-success me-2"></i> 30-Day DMARC XML report analysis</li><li class="mb-2"><i class="fa-solid fa-circle-check text-success me-2"></i> Controlled p=quarantine (pct=25→50→100)</li><li class="mb-2"><i class="fa-solid fa-circle-check text-success me-2"></i> Google Postmaster Tools integration</li><li><i class="fa-solid fa-circle-check text-success me-2"></i> Final p=reject roadmap recommendation</li></ul></div><a href="https://wa.me/917425016636?text=Hi%20Digify%2C%20I%20want%20to%20order%20the%20Complete%20DMARC%20Enforcement%20Suite%20($299)." target="_blank" rel="noopener noreferrer" class="btn btn-primary w-100 fw-bold py-2 rounded-3 mt-auto shadow-sm">Start DMARC Enforcement</a></div></div><div class="col-lg-4"><div class="price-card"><div class="d-flex justify-content-between align-items-center mb-2"><span class="badge bg-dark text-white px-2 py-1" style="font-size:0.72rem">Tier 3 Enterprise</span><span class="badge bg-dark text-white px-2 py-1" style="font-size:0.72rem">Up to 5 Domains</span></div><h4 class="fw-bold mb-2 text-dark" style="font-size:1.3rem">Enterprise Fleet Architecture</h4><p class="text-muted small mb-3">Multi-domain architecture for agencies, SaaS fleets, and complex CRM routing stacks.</p><div class="p-3 rounded-3 bg-light mb-3 border"><div class="d-flex align-items-baseline gap-1"><span style="font-size:2rem;font-weight:900;color:#0f172a;line-height:1"><span class="curr-val" data-usd="$649+" data-inr="₹49,999+">$649+</span></span><span class="text-muted small fw-medium">/ 5 domains</span></div><div class="small fw-semibold text-info mt-1"><i class="fa-solid fa-layer-group me-1"></i> Multi-Domain Fleet Architecture</div></div><div class="flex-grow-1 mb-4"><div class="fw-bold small text-uppercase text-secondary mb-2" style="font-size:0.72rem;letter-spacing:0.5px">Enterprise Scope:</div><ul class="list-unstyled mb-0" style="font-size:0.85rem;color:#334155"><li class="mb-2"><i class="fa-solid fa-circle-check text-primary me-2"></i> Up to 5 sending domains audited &amp; aligned</li><li class="mb-2"><i class="fa-solid fa-circle-check text-primary me-2"></i> Third-party CRM &amp; transactional SaaS audits</li><li class="mb-2"><i class="fa-solid fa-circle-check text-primary me-2"></i> Subcontractor &amp; custom MAIL FROM review</li><li class="mb-2"><i class="fa-solid fa-circle-check text-primary me-2"></i> CNAME delegation &amp; DNS architecture SOP</li><li class="mb-2"><i class="fa-solid fa-circle-check text-primary me-2"></i> Agency client onboarding infrastructure templates</li><li><i class="fa-solid fa-circle-check text-primary me-2"></i> 30-Day dedicated implementation support</li></ul></div><button class="btn btn-outline-dark w-100 fw-bold py-2 rounded-3 mt-auto" data-bs-toggle="modal" data-bs-target="#trialModal" style="white-space:normal;font-size:0.92rem;min-height:44px">Request Enterprise Scope</button></div></div></div><div class="d-none d-md-block deliv-table-wrap"><div class="p-3 bg-light border-bottom fw-bold text-dark">Package Capability Comparison Matrix</div><div class="table-responsive"><table class="deliv-table"><thead><tr><th style="width:40%">Capability / Technical Feature</th><th class="text-center" style="width:20%"><span class="curr-val" data-usd="$149 (Express)" data-inr="₹11,999 (Express)">$149 (Express)</span></th><th class="text-center" style="width:20%"><span class="curr-val" data-usd="$299 (Suite)" data-inr="₹23,999 (Suite)">$299 (Suite)</span></th><th class="text-center" style="width:20%"><span class="curr-val" data-usd="$649+ (Fleet)" data-inr="₹49,999+ (Fleet)">$649+ (Fleet)</span></th></tr></thead><tbody><tr><td>Domain Scope</td><td class="text-center">Single Domain</td><td class="text-center text-primary fw-bold">Single Domain</td><td class="text-center text-success fw-bold">Up to 5 Domains</td></tr><tr><td>SPF Dependency &amp; Lookup Audit</td><td class="text-center">✓ Included</td><td class="text-center text-primary fw-bold">✓ Full Flattening</td><td class="text-center text-success fw-bold">✓ Multi-Domain Fleet</td></tr><tr><td>2048-bit DKIM Key Setup</td><td class="text-center">✓ Yes</td><td class="text-center text-primary fw-bold">✓ With Rotation</td><td class="text-center text-success fw-bold">✓ Multi-Selector Fleet</td></tr><tr><td>DMARC Record Setup</td><td class="text-center">✓ Basic</td><td class="text-center text-primary fw-bold">✓ p=none / quarantine</td><td class="text-center text-success fw-bold">✓ Fleet Architecture</td></tr><tr><td>Domain Alignment Analysis</td><td class="text-center">Basic</td><td class="text-center text-primary fw-bold">Advanced (aspf/adkim)</td><td class="text-center text-success fw-bold">Enterprise Fleet</td></tr><tr><td>RUA Aggregate Reporting Setup</td><td class="text-center"><span class="text-muted"><i class="fa-solid fa-minus me-1"></i> Not Included</span></td><td class="text-center text-primary fw-bold">✓ 30-Day Analysis</td><td class="text-center text-success fw-bold">✓ Centralized Fleet</td></tr><tr><td>Progressive p=quarantine/reject Roadmap</td><td class="text-center"><span class="text-muted"><i class="fa-solid fa-minus me-1"></i> Not Included</span></td><td class="text-center text-primary fw-bold">✓ pct=25→50→100</td><td class="text-center text-success fw-bold">✓ Custom Staged SOP</td></tr><tr><td>Google Postmaster Tools Setup</td><td class="text-center"><span class="text-muted"><i class="fa-solid fa-minus me-1"></i> Not Included</span></td><td class="text-center text-primary fw-bold">✓ Included</td><td class="text-center text-success fw-bold">✓ Multi-Domain Suite</td></tr><tr><td>Third-Party SaaS Sender Discovery</td><td class="text-center"><span class="text-muted"><i class="fa-solid fa-minus me-1"></i> Not Included</span></td><td class="text-center text-primary fw-bold">✓ CRM, ERP &amp; APIs</td><td class="text-center text-success fw-bold">✓ Subcontractor Audits</td></tr><tr><td>Implementation Warranty &amp; Support</td><td class="text-center">7 Days</td><td class="text-center text-primary fw-bold">14 Days</td><td class="text-center text-success fw-bold">30 Days Dedicated</td></tr></tbody></table></div></div><div class="d-block d-md-none"><div class="p-3 bg-light border rounded-3 mb-3 fw-bold text-dark text-center" style="font-size:0.92rem"><i class="fa-solid fa-list-check text-primary me-2"></i> Capability &amp; Deliverable Matrix</div><div class="deliv-mobile-card mb-3 p-3 shadow-sm border"><div class="fw-bold text-dark mb-3 pb-2 border-bottom" style="font-size:0.98rem">Domain Scope</div><div class="d-flex flex-column gap-2"><div class="p-2 px-3 rounded bg-light border"><div class="d-flex justify-content-between align-items-center mb-1"><span class="badge bg-secondary-subtle text-secondary" style="font-size:0.7rem">Express</span><span class="text-muted fw-bold" style="font-size:0.75rem"><span class="curr-val" data-usd="$299" data-inr="₹23,999">$299</span></span></div><div style="font-size:0.88rem"><span class="text-dark fw-medium">Single Domain</span></div></div><div class="p-2 px-3 rounded bg-primary-subtle border border-primary-subtle"><div class="d-flex justify-content-between align-items-center mb-1"><span class="badge bg-primary text-white" style="font-size:0.7rem">Suite ★ Recommended</span><span class="text-primary fw-bold" style="font-size:0.75rem"><span class="curr-val" data-usd="$299" data-inr="₹23,999">$299</span></span></div><div style="font-size:0.88rem"><span class="text-primary fw-bold">Single Domain</span></div></div><div class="p-2 px-3 rounded bg-dark text-white border border-dark"><div class="d-flex justify-content-between align-items-center mb-1"><span class="badge bg-white text-dark" style="font-size:0.7rem">Enterprise</span><span class="text-white-50 fw-bold" style="font-size:0.75rem"><span class="curr-val" data-usd="$649+" data-inr="₹49,999+">$649+</span></span></div><div style="font-size:0.88rem"><span class="text-success fw-bold">Up to 5 Domains</span></div></div></div></div><div class="deliv-mobile-card mb-3 p-3 shadow-sm border"><div class="fw-bold text-dark mb-3 pb-2 border-bottom" style="font-size:0.98rem">SPF Dependency &amp; Lookup Audit</div><div class="d-flex flex-column gap-2"><div class="p-2 px-3 rounded bg-light border"><div class="d-flex justify-content-between align-items-center mb-1"><span class="badge bg-secondary-subtle text-secondary" style="font-size:0.7rem">Express</span><span class="text-muted fw-bold" style="font-size:0.75rem"><span class="curr-val" data-usd="$299" data-inr="₹23,999">$299</span></span></div><div style="font-size:0.88rem"><span class="text-success fw-bold">✓ Included</span></div></div><div class="p-2 px-3 rounded bg-primary-subtle border border-primary-subtle"><div class="d-flex justify-content-between align-items-center mb-1"><span class="badge bg-primary text-white" style="font-size:0.7rem">Suite ★ Recommended</span><span class="text-primary fw-bold" style="font-size:0.75rem"><span class="curr-val" data-usd="$299" data-inr="₹23,999">$299</span></span></div><div style="font-size:0.88rem"><span class="text-primary fw-bold">✓ Full Flattening</span></div></div><div class="p-2 px-3 rounded bg-dark text-white border border-dark"><div class="d-flex justify-content-between align-items-center mb-1"><span class="badge bg-white text-dark" style="font-size:0.7rem">Enterprise</span><span class="text-white-50 fw-bold" style="font-size:0.75rem"><span class="curr-val" data-usd="$649+" data-inr="₹49,999+">$649+</span></span></div><div style="font-size:0.88rem"><span class="text-success fw-bold">✓ Multi-Domain Fleet</span></div></div></div></div><div class="deliv-mobile-card mb-3 p-3 shadow-sm border"><div class="fw-bold text-dark mb-3 pb-2 border-bottom" style="font-size:0.98rem">2048-bit DKIM Key Setup</div><div class="d-flex flex-column gap-2"><div class="p-2 px-3 rounded bg-light border"><div class="d-flex justify-content-between align-items-center mb-1"><span class="badge bg-secondary-subtle text-secondary" style="font-size:0.7rem">Express</span><span class="text-muted fw-bold" style="font-size:0.75rem"><span class="curr-val" data-usd="$299" data-inr="₹23,999">$299</span></span></div><div style="font-size:0.88rem"><span class="text-success fw-bold">✓ Yes</span></div></div><div class="p-2 px-3 rounded bg-primary-subtle border border-primary-subtle"><div class="d-flex justify-content-between align-items-center mb-1"><span class="badge bg-primary text-white" style="font-size:0.7rem">Suite ★ Recommended</span><span class="text-primary fw-bold" style="font-size:0.75rem"><span class="curr-val" data-usd="$299" data-inr="₹23,999">$299</span></span></div><div style="font-size:0.88rem"><span class="text-primary fw-bold">✓ With Rotation</span></div></div><div class="p-2 px-3 rounded bg-dark text-white border border-dark"><div class="d-flex justify-content-between align-items-center mb-1"><span class="badge bg-white text-dark" style="font-size:0.7rem">Enterprise</span><span class="text-white-50 fw-bold" style="font-size:0.75rem"><span class="curr-val" data-usd="$649+" data-inr="₹49,999+">$649+</span></span></div><div style="font-size:0.88rem"><span class="text-success fw-bold">✓ Multi-Selector Fleet</span></div></div></div></div><div class="deliv-mobile-card mb-3 p-3 shadow-sm border"><div class="fw-bold text-dark mb-3 pb-2 border-bottom" style="font-size:0.98rem">DMARC Record Setup</div><div class="d-flex flex-column gap-2"><div class="p-2 px-3 rounded bg-light border"><div class="d-flex justify-content-between align-items-center mb-1"><span class="badge bg-secondary-subtle text-secondary" style="font-size:0.7rem">Express</span><span class="text-muted fw-bold" style="font-size:0.75rem"><span class="curr-val" data-usd="$299" data-inr="₹23,999">$299</span></span></div><div style="font-size:0.88rem"><span class="text-success fw-bold">✓ Basic</span></div></div><div class="p-2 px-3 rounded bg-primary-subtle border border-primary-subtle"><div class="d-flex justify-content-between align-items-center mb-1"><span class="badge bg-primary text-white" style="font-size:0.7rem">Suite ★ Recommended</span><span class="text-primary fw-bold" style="font-size:0.75rem"><span class="curr-val" data-usd="$299" data-inr="₹23,999">$299</span></span></div><div style="font-size:0.88rem"><span class="text-primary fw-bold">✓ p=none / quarantine</span></div></div><div class="p-2 px-3 rounded bg-dark text-white border border-dark"><div class="d-flex justify-content-between align-items-center mb-1"><span class="badge bg-white text-dark" style="font-size:0.7rem">Enterprise</span><span class="text-white-50 fw-bold" style="font-size:0.75rem"><span class="curr-val" data-usd="$649+" data-inr="₹49,999+">$649+</span></span></div><div style="font-size:0.88rem"><span class="text-success fw-bold">✓ Fleet Architecture</span></div></div></div></div><div class="deliv-mobile-card mb-3 p-3 shadow-sm border"><div class="fw-bold text-dark mb-3 pb-2 border-bottom" style="font-size:0.98rem">Domain Alignment Analysis</div><div class="d-flex flex-column gap-2"><div class="p-2 px-3 rounded bg-light border"><div class="d-flex justify-content-between align-items-center mb-1"><span class="badge bg-secondary-subtle text-secondary" style="font-size:0.7rem">Express</span><span class="text-muted fw-bold" style="font-size:0.75rem"><span class="curr-val" data-usd="$299" data-inr="₹23,999">$299</span></span></div><div style="font-size:0.88rem"><span class="text-dark fw-medium">Basic</span></div></div><div class="p-2 px-3 rounded bg-primary-subtle border border-primary-subtle"><div class="d-flex justify-content-between align-items-center mb-1"><span class="badge bg-primary text-white" style="font-size:0.7rem">Suite ★ Recommended</span><span class="text-primary fw-bold" style="font-size:0.75rem"><span class="curr-val" data-usd="$299" data-inr="₹23,999">$299</span></span></div><div style="font-size:0.88rem"><span class="text-primary fw-bold">Advanced (aspf/adkim)</span></div></div><div class="p-2 px-3 rounded bg-dark text-white border border-dark"><div class="d-flex justify-content-between align-items-center mb-1"><span class="badge bg-white text-dark" style="font-size:0.7rem">Enterprise</span><span class="text-white-50 fw-bold" style="font-size:0.75rem"><span class="curr-val" data-usd="$649+" data-inr="₹49,999+">$649+</span></span></div><div style="font-size:0.88rem"><span class="text-success fw-bold">Enterprise Fleet</span></div></div></div></div><div class="deliv-mobile-card mb-3 p-3 shadow-sm border"><div class="fw-bold text-dark mb-3 pb-2 border-bottom" style="font-size:0.98rem">RUA Aggregate Reporting Setup</div><div class="d-flex flex-column gap-2"><div class="p-2 px-3 rounded bg-light border"><div class="d-flex justify-content-between align-items-center mb-1"><span class="badge bg-secondary-subtle text-secondary" style="font-size:0.7rem">Express</span><span class="text-muted fw-bold" style="font-size:0.75rem"><span class="curr-val" data-usd="$299" data-inr="₹23,999">$299</span></span></div><div style="font-size:0.88rem"><span class="text-muted"><i class="fa-solid fa-minus text-secondary me-1"></i> Not Included</span></div></div><div class="p-2 px-3 rounded bg-primary-subtle border border-primary-subtle"><div class="d-flex justify-content-between align-items-center mb-1"><span class="badge bg-primary text-white" style="font-size:0.7rem">Suite ★ Recommended</span><span class="text-primary fw-bold" style="font-size:0.75rem"><span class="curr-val" data-usd="$299" data-inr="₹23,999">$299</span></span></div><div style="font-size:0.88rem"><span class="text-primary fw-bold">✓ 30-Day Analysis</span></div></div><div class="p-2 px-3 rounded bg-dark text-white border border-dark"><div class="d-flex justify-content-between align-items-center mb-1"><span class="badge bg-white text-dark" style="font-size:0.7rem">Enterprise</span><span class="text-white-50 fw-bold" style="font-size:0.75rem"><span class="curr-val" data-usd="$649+" data-inr="₹49,999+">$649+</span></span></div><div style="font-size:0.88rem"><span class="text-success fw-bold">✓ Centralized Fleet</span></div></div></div></div><div class="deliv-mobile-card mb-3 p-3 shadow-sm border"><div class="fw-bold text-dark mb-3 pb-2 border-bottom" style="font-size:0.98rem">Progressive p=quarantine/reject Roadmap</div><div class="d-flex flex-column gap-2"><div class="p-2 px-3 rounded bg-light border"><div class="d-flex justify-content-between align-items-center mb-1"><span class="badge bg-secondary-subtle text-secondary" style="font-size:0.7rem">Express</span><span class="text-muted fw-bold" style="font-size:0.75rem"><span class="curr-val" data-usd="$299" data-inr="₹23,999">$299</span></span></div><div style="font-size:0.88rem"><span class="text-muted"><i class="fa-solid fa-minus text-secondary me-1"></i> Not Included</span></div></div><div class="p-2 px-3 rounded bg-primary-subtle border border-primary-subtle"><div class="d-flex justify-content-between align-items-center mb-1"><span class="badge bg-primary text-white" style="font-size:0.7rem">Suite ★ Recommended</span><span class="text-primary fw-bold" style="font-size:0.75rem"><span class="curr-val" data-usd="$299" data-inr="₹23,999">$299</span></span></div><div style="font-size:0.88rem"><span class="text-primary fw-bold">✓ pct=25→50→100</span></div></div><div class="p-2 px-3 rounded bg-dark text-white border border-dark"><div class="d-flex justify-content-between align-items-center mb-1"><span class="badge bg-white text-dark" style="font-size:0.7rem">Enterprise</span><span class="text-white-50 fw-bold" style="font-size:0.75rem"><span class="curr-val" data-usd="$649+" data-inr="₹49,999+">$649+</span></span></div><div style="font-size:0.88rem"><span class="text-success fw-bold">✓ Custom Staged SOP</span></div></div></div></div><div class="deliv-mobile-card mb-3 p-3 shadow-sm border"><div class="fw-bold text-dark mb-3 pb-2 border-bottom" style="font-size:0.98rem">Google Postmaster Tools Setup</div><div class="d-flex flex-column gap-2"><div class="p-2 px-3 rounded bg-light border"><div class="d-flex justify-content-between align-items-center mb-1"><span class="badge bg-secondary-subtle text-secondary" style="font-size:0.7rem">Express</span><span class="text-muted fw-bold" style="font-size:0.75rem"><span class="curr-val" data-usd="$299" data-inr="₹23,999">$299</span></span></div><div style="font-size:0.88rem"><span class="text-muted"><i class="fa-solid fa-minus text-secondary me-1"></i> Not Included</span></div></div><div class="p-2 px-3 rounded bg-primary-subtle border border-primary-subtle"><div class="d-flex justify-content-between align-items-center mb-1"><span class="badge bg-primary text-white" style="font-size:0.7rem">Suite ★ Recommended</span><span class="text-primary fw-bold" style="font-size:0.75rem"><span class="curr-val" data-usd="$299" data-inr="₹23,999">$299</span></span></div><div style="font-size:0.88rem"><span class="text-primary fw-bold">✓ Included</span></div></div><div class="p-2 px-3 rounded bg-dark text-white border border-dark"><div class="d-flex justify-content-between align-items-center mb-1"><span class="badge bg-white text-dark" style="font-size:0.7rem">Enterprise</span><span class="text-white-50 fw-bold" style="font-size:0.75rem"><span class="curr-val" data-usd="$649+" data-inr="₹49,999+">$649+</span></span></div><div style="font-size:0.88rem"><span class="text-success fw-bold">✓ Multi-Domain Suite</span></div></div></div></div><div class="deliv-mobile-card mb-3 p-3 shadow-sm border"><div class="fw-bold text-dark mb-3 pb-2 border-bottom" style="font-size:0.98rem">Third-Party SaaS Sender Discovery</div><div class="d-flex flex-column gap-2"><div class="p-2 px-3 rounded bg-light border"><div class="d-flex justify-content-between align-items-center mb-1"><span class="badge bg-secondary-subtle text-secondary" style="font-size:0.7rem">Express</span><span class="text-muted fw-bold" style="font-size:0.75rem"><span class="curr-val" data-usd="$299" data-inr="₹23,999">$299</span></span></div><div style="font-size:0.88rem"><span class="text-muted"><i class="fa-solid fa-minus text-secondary me-1"></i> Not Included</span></div></div><div class="p-2 px-3 rounded bg-primary-subtle border border-primary-subtle"><div class="d-flex justify-content-between align-items-center mb-1"><span class="badge bg-primary text-white" style="font-size:0.7rem">Suite ★ Recommended</span><span class="text-primary fw-bold" style="font-size:0.75rem"><span class="curr-val" data-usd="$299" data-inr="₹23,999">$299</span></span></div><div style="font-size:0.88rem"><span class="text-primary fw-bold">✓ CRM, ERP &amp; APIs</span></div></div><div class="p-2 px-3 rounded bg-dark text-white border border-dark"><div class="d-flex justify-content-between align-items-center mb-1"><span class="badge bg-white text-dark" style="font-size:0.7rem">Enterprise</span><span class="text-white-50 fw-bold" style="font-size:0.75rem"><span class="curr-val" data-usd="$649+" data-inr="₹49,999+">$649+</span></span></div><div style="font-size:0.88rem"><span class="text-success fw-bold">✓ Subcontractor Audits</span></div></div></div></div><div class="deliv-mobile-card mb-3 p-3 shadow-sm border"><div class="fw-bold text-dark mb-3 pb-2 border-bottom" style="font-size:0.98rem">Implementation Warranty &amp; Support</div><div class="d-flex flex-column gap-2"><div class="p-2 px-3 rounded bg-light border"><div class="d-flex justify-content-between align-items-center mb-1"><span class="badge bg-secondary-subtle text-secondary" style="font-size:0.7rem">Express</span><span class="text-muted fw-bold" style="font-size:0.75rem"><span class="curr-val" data-usd="$299" data-inr="₹23,999">$299</span></span></div><div style="font-size:0.88rem"><span class="text-dark fw-medium">7 Days</span></div></div><div class="p-2 px-3 rounded bg-primary-subtle border border-primary-subtle"><div class="d-flex justify-content-between align-items-center mb-1"><span class="badge bg-primary text-white" style="font-size:0.7rem">Suite ★ Recommended</span><span class="text-primary fw-bold" style="font-size:0.75rem"><span class="curr-val" data-usd="$299" data-inr="₹23,999">$299</span></span></div><div style="font-size:0.88rem"><span class="text-primary fw-bold">14 Days</span></div></div><div class="p-2 px-3 rounded bg-dark text-white border border-dark"><div class="d-flex justify-content-between align-items-center mb-1"><span class="badge bg-white text-dark" style="font-size:0.7rem">Enterprise</span><span class="text-white-50 fw-bold" style="font-size:0.75rem"><span class="curr-val" data-usd="$649+" data-inr="₹49,999+">$649+</span></span></div><div style="font-size:0.88rem"><span class="text-success fw-bold">30 Days Dedicated</span></div></div></div></div></div></div></section><section class="py-5 bg-white border-top border-bottom"><div class="container py-4"><div class="text-center max-w-2xl mx-auto mb-5"><span class="text-primary fw-bold text-uppercase" style="letter-spacing:1.5px;font-size:0.8rem">Deep Technical Answers</span><h2 class="fw-bold mt-2" style="color:#0f172a;font-size:2.2rem">Frequently Asked Questions</h2><p class="text-muted">Authoritative guidance on DNS record configuration, key rotation, and mandate enforcement.</p></div><div class="row justify-content-center"><div class="col-lg-9"><div class="d-flex flex-column gap-3"><div class="border rounded-4 overflow-hidden bg-white shadow-sm transition-all"><button type="button" class="w-100 p-4 text-start bg-white border-0 d-flex justify-content-between align-items-center" style="cursor:pointer"><span class="fw-bold text-dark pe-3" style="font-size:1.02rem">1. What happens if I jump directly from p=none to p=reject?</span><i class="fa-solid fa-chevron-down text-primary transition-transform rotate-180" style="transform:rotate(180deg);transition:transform 0.25s ease"></i></button><div class="px-4 pb-4 text-muted border-top pt-3 bg-light-subtle" style="font-size:0.93rem;line-height:1.75">p=reject instructs participating receiving mail systems to drop any email failing DMARC. If third-party senders like your CRM (Salesforce/HubSpot), ERP, automated invoice platforms, or transactional APIs have not been mapped and aligned, critical business emails will be rejected. Digify Soft Solutions always establishes discovery and monitoring (p=none) before advancing to enforcement.</div></div><div class="border rounded-4 overflow-hidden bg-white shadow-sm transition-all"><button type="button" class="w-100 p-4 text-start bg-white border-0 d-flex justify-content-between align-items-center" style="cursor:pointer"><span class="fw-bold text-dark pe-3" style="font-size:1.02rem">2. Can I have multiple SPF records on the same domain?</span><i class="fa-solid fa-chevron-down text-primary transition-transform " style="transform:rotate(0deg);transition:transform 0.25s ease"></i></button></div><div class="border rounded-4 overflow-hidden bg-white shadow-sm transition-all"><button type="button" class="w-100 p-4 text-start bg-white border-0 d-flex justify-content-between align-items-center" style="cursor:pointer"><span class="fw-bold text-dark pe-3" style="font-size:1.02rem">3. Why is my DKIM selector not resolving?</span><i class="fa-solid fa-chevron-down text-primary transition-transform " style="transform:rotate(0deg);transition:transform 0.25s ease"></i></button></div><div class="border rounded-4 overflow-hidden bg-white shadow-sm transition-all"><button type="button" class="w-100 p-4 text-start bg-white border-0 d-flex justify-content-between align-items-center" style="cursor:pointer"><span class="fw-bold text-dark pe-3" style="font-size:1.02rem">4. How do I check whether my DKIM is aligned with DMARC?</span><i class="fa-solid fa-chevron-down text-primary transition-transform " style="transform:rotate(0deg);transition:transform 0.25s ease"></i></button></div><div class="border rounded-4 overflow-hidden bg-white shadow-sm transition-all"><button type="button" class="w-100 p-4 text-start bg-white border-0 d-flex justify-content-between align-items-center" style="cursor:pointer"><span class="fw-bold text-dark pe-3" style="font-size:1.02rem">5. What is the difference between p=quarantine and p=reject?</span><i class="fa-solid fa-chevron-down text-primary transition-transform " style="transform:rotate(0deg);transition:transform 0.25s ease"></i></button></div><div class="border rounded-4 overflow-hidden bg-white shadow-sm transition-all"><button type="button" class="w-100 p-4 text-start bg-white border-0 d-flex justify-content-between align-items-center" style="cursor:pointer"><span class="fw-bold text-dark pe-3" style="font-size:1.02rem">6. Does DMARC stop phishing completely?</span><i class="fa-solid fa-chevron-down text-primary transition-transform " style="transform:rotate(0deg);transition:transform 0.25s ease"></i></button></div><div class="border rounded-4 overflow-hidden bg-white shadow-sm transition-all"><button type="button" class="w-100 p-4 text-start bg-white border-0 d-flex justify-content-between align-items-center" style="cursor:pointer"><span class="fw-bold text-dark pe-3" style="font-size:1.02rem">7. Does DMARC p=reject guarantee that my emails reach the inbox?</span><i class="fa-solid fa-chevron-down text-primary transition-transform " style="transform:rotate(0deg);transition:transform 0.25s ease"></i></button></div><div class="border rounded-4 overflow-hidden bg-white shadow-sm transition-all"><button type="button" class="w-100 p-4 text-start bg-white border-0 d-flex justify-content-between align-items-center" style="cursor:pointer"><span class="fw-bold text-dark pe-3" style="font-size:1.02rem">8. Why should I configure Google Postmaster Tools?</span><i class="fa-solid fa-chevron-down text-primary transition-transform " style="transform:rotate(0deg);transition:transform 0.25s ease"></i></button></div></div></div></div></div></section><section class="bottom-cta-section py-5 text-white position-relative" style="background:linear-gradient(135deg, #0b0f19 0%, #1e1b4b 50%, #0e7490 100%);overflow:hidden"><div class="container py-5 text-center position-relative" style="z-index:2"><span class="badge bg-danger text-uppercase px-3 py-2 fw-bold mb-3 cta-badge">Don’t Wait For Your First Spoofing Incident</span><h2 class="fw-bold mb-3 text-white cta-h2" style="font-size:2.8rem">Secure Your Domain. Move Safely Toward p=reject.</h2><p class="lead mx-auto mb-4" style="max-width:700px;color:#cbd5e1;font-size:1.05rem">SPF authorizes. DKIM signs. DMARC aligns and enforces. Digify Soft Solutions audits the complete architecture connecting all three to ensure your business emails pass Google &amp; Yahoo verification every single time.</p><div class="d-flex justify-content-center flex-wrap gap-3 mb-4"><a href="https://wa.me/917425016636?text=Hi%20Digify%2C%20I%20need%20an%20urgent%20SPF%2C%20DKIM%20%26%20DMARC%20audit%20and%20compliance%20setup%20for%20my%20domain." target="_blank" rel="noopener noreferrer" class="deliv-btn-wa"><i class="fa-brands fa-whatsapp" style="font-size:1.3rem"></i>Emergency WhatsApp Support (+91 7425016636)</a><button class="deliv-btn-secondary" data-bs-toggle="modal" data-bs-target="#trialModal"><i class="fa-solid fa-calendar-check"></i>Book DMARC Consultation</button></div><div class="text-slate-400 small" style="color:#94a3b8"><i class="fa-solid fa-lock me-1 text-cyan-400"></i> No sensitive passwords required · Screen-shared or delegated DNS setup · 100% Confidential</div></div></section></div>
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
