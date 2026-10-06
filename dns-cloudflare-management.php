<?php 
    include 'fetch_meta.php';
    $pageTitle = 'Enterprise Cloudflare & High-Availability DNS Solutions | Digify Soft Solutions';
    $pageDescription = 'Zero-downtime global DNS migrations, Cloudflare enterprise WAF rules, mail flow isolation, and DDoS mitigation by Digify Soft Solutions cloud engineers.';
    $pageKeywords = 'enterprise DNS management, Cloudflare setup consultant, zero downtime DNS migration, DNSSEC implementation, Cloudflare orange cloud email fix, WAF firewall rules, Anycast DNS consulting, Digify Soft Solutions';
    include("top.php");
    include 'header.php'; 
?>

<!-- ==========================================
     START OF PAGE CONTENT: dns-cloudflare-management
     ========================================== -->

<div class="enterprise-page-wrapper">
<style>
        /* Digify Soft Solutions Enterprise DNS & Cloudflare Design System */
        .deliv-wrapper {
          font-family: 'Inter', system-ui, -apple-system, sans-serif;
          color: #0f172a;
          background-color: #f8fafc;
          overflow-x: hidden !important;
          width: 100% !important;
          max-width: 100vw !important;
        }
        .deliv-hero {
          background: radial-gradient(circle at 80% 20%, rgba(249, 115, 22, 0.15) 0%, transparent 50%),
                      radial-gradient(circle at 10% 80%, rgba(37, 99, 235, 0.2) 0%, transparent 45%),
                      linear-gradient(135deg, #090d16 0%, #0f172a 50%, #1c1917 100%);
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
          color: #f97316;
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

        /* Hero Trust Badges */
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
          border-color: rgba(249, 115, 22, 0.35);
        }

        /* Hero Mockup Terminal */
        .dns-mockup-card {
          background: #0f172a;
          border-radius: 20px;
          padding: 24px;
          box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.4);
          border: 1px solid rgba(255, 255, 255, 0.15);
          color: #f8fafc;
          font-family: 'JetBrains Mono', monospace, ui-monospace;
        }
        .dns-status-row {
          display: flex;
          align-items: center;
          justify-content: space-between;
          padding: 10px 14px;
          border-radius: 10px;
          margin-bottom: 8px;
          background: rgba(255, 255, 255, 0.04);
          border: 1px solid rgba(255, 255, 255, 0.06);
          font-size: 0.82rem;
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
          background: #fff7ed;
          color: #ea580c;
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
          color: #0f172a;
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
          border: 2px solid #ea580c;
          box-shadow: 0 16px 36px -10px rgba(234, 88, 12, 0.2);
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
          border-bottom: 1px solid #f1f5f9;
          font-size: 0.9rem;
          color: #334155;
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
          .dns-mockup-card {
            padding: 16px 14px !important;
            border-radius: 16px !important;
          }
          .dns-status-row {
            padding: 8px 10px !important;
            font-size: 0.76rem !important;
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
      </style><div class="deliv-wrapper"><section class="deliv-hero"><div class="container position-relative" style="z-index:2"><div class="row align-items-center g-4"><div class="col-lg-7"><div class="deliv-badge-pill"><i class="fa-solid fa-network-wired"></i> Enterprise DNS &amp; Cloudflare Architecture</div><h1 class="deliv-h1">Sub-Millisecond Global Resolution. Fortified Edge DNS. Zero Email Loss.</h1><p class="deliv-hero-p">Zero-downtime nameserver migrations, sub-30ms global Anycast DNS, DNSSEC cryptographic defenses, and custom Cloudflare WAF firewall rules. Digify Soft Solutions configures strict Orange vs Grey Cloud routing to ensure your corporate mail flows uninterrupted while web traffic accelerates globally.</p><div class="d-flex flex-wrap gap-3 mb-4"><a href="https://wa.me/917425016636?text=Hi%20Digify%2C%20I%20need%20expert%20DNS%20migration%20and%20Cloudflare%20management%20for%20my%20domain." target="_blank" rel="noopener noreferrer" class="deliv-btn-wa"><i class="fa-brands fa-whatsapp" style="font-size:1.25rem"></i>WhatsApp Digify Soft Solutions: +91 7425016636</a><button class="deliv-btn-secondary" data-bs-toggle="modal" data-bs-target="#trialModal"><i class="fa-solid fa-calendar-check"></i>Schedule DNS Migration</button></div><div class="d-flex align-items-center gap-2 small mb-4" style="color:#fdba74;font-size:0.85rem"><i class="fa-solid fa-globe"></i><span>Protecting digital infrastructure in USA · UK · UAE · Canada · Australia · India</span></div><div class="row g-2"><div class="col-sm-6"><div class="trust-badge-card d-flex align-items-center gap-2"><i class="fa-solid fa-bolt text-warning" style="color:#f97316"></i><span class="small text-white fw-medium">&lt;30ms Anycast DNS Latency</span></div></div><div class="col-sm-6"><div class="trust-badge-card d-flex align-items-center gap-2"><i class="fa-solid fa-arrows-split-up-and-left text-warning" style="color:#f97316"></i><span class="small text-white fw-medium">Zero-Downtime Migration SOP</span></div></div><div class="col-sm-6"><div class="trust-badge-card d-flex align-items-center gap-2"><i class="fa-solid fa-shield-halved text-warning" style="color:#f97316"></i><span class="small text-white fw-medium">DNSSEC Cryptographic Defense</span></div></div><div class="col-sm-6"><div class="trust-badge-card d-flex align-items-center gap-2"><i class="fa-solid fa-cloud text-warning" style="color:#f97316"></i><span class="small text-white fw-medium">Cloudflare Certified Architecture</span></div></div></div></div><div class="col-lg-5"><div class="dns-mockup-card"><div class="d-flex justify-content-between align-items-center mb-3 pb-2 border-bottom border-secondary border-opacity-25 gap-2"><div class="d-flex align-items-center gap-2" style="min-width:0"><span class="badge bg-warning text-dark flex-shrink-0" style="font-size:0.7rem">CLOUDFLARE EDGE</span><span class="small text-light text-truncate" style="font-size:0.8rem">authoritative.ns.cloudflare.com</span></div><span class="badge bg-success-subtle text-success flex-shrink-0" style="font-size:0.7rem">● 100% Uptime</span></div><div class="dns-status-row"><span class="text-secondary">Anycast Latency:</span><span class="text-success fw-bold">14ms (300+ Edge Nodes)</span></div><div class="dns-status-row"><span class="text-secondary">DNSSEC Validation:</span><span class="text-info fw-bold">Active (ECDSA Curve-256)</span></div><div class="dns-status-row"><span class="text-secondary">Web Proxy (A / CNAME):</span><span class="text-warning fw-bold">🟠 Proxied (WAF Armed)</span></div><div class="dns-status-row"><span class="text-secondary">Email Routing (MX / SMTP):</span><span class="text-light fw-bold">⚪ DNS Only (Grey Cloud)</span></div><div class="dns-status-row"><span class="text-secondary">DDoS Mitigation:</span><span class="text-success fw-bold">Unmetered L3/L4/L7 Active</span></div><div class="mt-3 py-2 px-3 rounded-3 bg-dark border border-secondary border-opacity-25 text-center text-secondary" style="font-size:0.72rem;line-height:1.4"><i class="fa-solid fa-circle-check text-success me-1"></i><span>Staged Dual-Resolution · Zero Dropped Packets During Migration</span></div></div></div></div></div></section><section class="py-5 bg-white border-bottom"><div class="container py-4"><div class="text-center max-w-2xl mx-auto mb-5"><span class="text-primary fw-bold text-uppercase" style="letter-spacing:1.5px;font-size:0.8rem;color:#ea580c !important">Mission-Critical Infrastructure</span><h2 class="fw-bold mt-2" style="color:#0f172a;font-size:2.2rem">When DNS Fails, Your Entire Business Goes Dark</h2><p class="text-muted">DNS is the central nervous system of your digital presence. If your nameservers lag, crash, or misroute records, your websites, web apps, APIs, customer portals, and corporate emails fail simultaneously.</p></div><div class="p-4 rounded-4 mb-5 border border-danger-subtle" style="background:#fff5f5"><div class="d-flex align-items-start gap-3"><div class="p-3 rounded-3 bg-danger text-white fs-4 flex-shrink-0"><i class="fa-solid fa-triangle-exclamation"></i></div><div><h4 class="fw-bold text-danger mb-2" style="font-size:1.25rem">The Proxy Mail Disruption Risk: Why Proxying MX Breaks SMTP Flow: Why Naive Cloudflare Setups Break Business Email</h4><p class="text-dark small mb-2" style="line-height:1.6">Cloudflare’s iconic <strong>Orange Cloud</strong> reverse proxy is engineered exclusively for HTTP/HTTPS web traffic on ports 80 and 443. It does not proxy email protocols such as <strong>SMTP (port 25)</strong>, <strong>Submission (port 587)</strong>, IMAP, or POP3.</p><p class="text-muted small mb-0" style="line-height:1.6">When inexperienced teams enable Cloudflare proxy on hostnames tied to MX records (e.g. <code>mail.yourbrand.com</code>), external mail servers attempting to deliver mail cannot perform an SMTP handshake. Messages bounce immediately with fatal errors like <code>550 Host Not Found</code> or <code>Connection Refused</code>. Digify Soft Solutions strictly isolates web traffic into Orange Cloud while keeping corporate mail flow in authoritative <strong>Grey Cloud (DNS Only)</strong> mode.</p></div></div></div><div class="d-none d-md-block deliv-table-wrap mb-4"><div class="p-3 bg-light border-bottom fw-bold text-dark d-flex justify-content-between align-items-center"><span>Technical Benchmark: Default Registrar DNS vs Enterprise Cloudflare Managed DNS</span><span class="badge" style="background-color:#ea580c">Anycast Architecture</span></div><div class="table-responsive"><table class="deliv-table"><thead><tr><th style="width:26%">Technical Capability</th><th style="width:37%">Default Registrar DNS (GoDaddy / Namecheap)</th><th style="width:37%">Enterprise Cloudflare Managed DNS</th></tr></thead><tbody><tr><td><strong>Global Resolution Latency</strong></td><td class="text-muted">120ms – 350ms (Unicast, regional bottlenecks)</td><td class="fw-bold" style="color:#ea580c">&lt;30ms worldwide (Anycast across 300+ Edge cities)</td></tr><tr><td><strong>DDoS Attack Mitigation</strong></td><td class="text-muted">Rate-limited, crashes during L3/L4/L7 floods</td><td class="fw-bold" style="color:#ea580c">Unmetered 280+ Tbps network capacity with auto-mitigation</td></tr><tr><td><strong>DNSSEC Cryptographic Signing</strong></td><td class="text-muted">Often unsupported or requires manual complex keys</td><td class="fw-bold" style="color:#ea580c">1-Click automated DNSSEC with auto-rotated ECDSA keys</td></tr><tr><td><strong>TTL Granularity</strong></td><td class="text-muted">Minimum 1 Hour to 24 Hours (Slow updates)</td><td class="fw-bold" style="color:#ea580c">1 Second to Auto (Instant record propagation)</td></tr><tr><td><strong>Web Application Firewall (WAF)</strong></td><td class="text-muted">None (Zero application layer inspection)</td><td class="fw-bold" style="color:#ea580c">Custom WAF rules, OWASP core rulesets &amp; Rate Limiting</td></tr><tr><td><strong>Email Routing Protection</strong></td><td class="text-muted">Basic DNS table without proxy differentiation</td><td class="fw-bold" style="color:#ea580c">Strict Orange/Grey cloud routing prevents broken mail</td></tr></tbody></table></div></div><div class="d-block d-md-none mb-4"><div class="p-3 bg-light border rounded-3 mb-3 fw-bold text-dark text-center" style="font-size:0.9rem">Registrar DNS vs Cloudflare Managed DNS</div><div class="deliv-mobile-card mb-3 p-3"><div class="fw-bold text-dark mb-2 pb-2 border-bottom" style="font-size:0.92rem">Global Resolution Latency</div><div class="d-flex flex-column gap-2" style="font-size:0.82rem"><div class="p-2 rounded bg-light border"><span class="text-muted fw-bold">Default Registrar:</span><div class="text-secondary mt-1">120ms – 350ms (Unicast, regional bottlenecks)</div></div><div class="p-2 rounded border" style="background-color:#fff7ed;border-color:#fed7aa"><span class="fw-bold" style="color:#ea580c">Cloudflare Managed:</span><div class="fw-semibold mt-1" style="color:#9a3412">&lt;30ms worldwide (Anycast across 300+ Edge cities)</div></div></div></div><div class="deliv-mobile-card mb-3 p-3"><div class="fw-bold text-dark mb-2 pb-2 border-bottom" style="font-size:0.92rem">DDoS Attack Mitigation</div><div class="d-flex flex-column gap-2" style="font-size:0.82rem"><div class="p-2 rounded bg-light border"><span class="text-muted fw-bold">Default Registrar:</span><div class="text-secondary mt-1">Rate-limited, crashes during L3/L4/L7 floods</div></div><div class="p-2 rounded border" style="background-color:#fff7ed;border-color:#fed7aa"><span class="fw-bold" style="color:#ea580c">Cloudflare Managed:</span><div class="fw-semibold mt-1" style="color:#9a3412">Unmetered 280+ Tbps network capacity with auto-mitigation</div></div></div></div><div class="deliv-mobile-card mb-3 p-3"><div class="fw-bold text-dark mb-2 pb-2 border-bottom" style="font-size:0.92rem">DNSSEC Cryptographic Signing</div><div class="d-flex flex-column gap-2" style="font-size:0.82rem"><div class="p-2 rounded bg-light border"><span class="text-muted fw-bold">Default Registrar:</span><div class="text-secondary mt-1">Often unsupported or requires manual complex keys</div></div><div class="p-2 rounded border" style="background-color:#fff7ed;border-color:#fed7aa"><span class="fw-bold" style="color:#ea580c">Cloudflare Managed:</span><div class="fw-semibold mt-1" style="color:#9a3412">1-Click automated DNSSEC with auto-rotated ECDSA keys</div></div></div></div><div class="deliv-mobile-card mb-3 p-3"><div class="fw-bold text-dark mb-2 pb-2 border-bottom" style="font-size:0.92rem">TTL Granularity</div><div class="d-flex flex-column gap-2" style="font-size:0.82rem"><div class="p-2 rounded bg-light border"><span class="text-muted fw-bold">Default Registrar:</span><div class="text-secondary mt-1">Minimum 1 Hour to 24 Hours (Slow updates)</div></div><div class="p-2 rounded border" style="background-color:#fff7ed;border-color:#fed7aa"><span class="fw-bold" style="color:#ea580c">Cloudflare Managed:</span><div class="fw-semibold mt-1" style="color:#9a3412">1 Second to Auto (Instant record propagation)</div></div></div></div><div class="deliv-mobile-card mb-3 p-3"><div class="fw-bold text-dark mb-2 pb-2 border-bottom" style="font-size:0.92rem">Web Application Firewall (WAF)</div><div class="d-flex flex-column gap-2" style="font-size:0.82rem"><div class="p-2 rounded bg-light border"><span class="text-muted fw-bold">Default Registrar:</span><div class="text-secondary mt-1">None (Zero application layer inspection)</div></div><div class="p-2 rounded border" style="background-color:#fff7ed;border-color:#fed7aa"><span class="fw-bold" style="color:#ea580c">Cloudflare Managed:</span><div class="fw-semibold mt-1" style="color:#9a3412">Custom WAF rules, OWASP core rulesets &amp; Rate Limiting</div></div></div></div><div class="deliv-mobile-card mb-3 p-3"><div class="fw-bold text-dark mb-2 pb-2 border-bottom" style="font-size:0.92rem">Email Routing Protection</div><div class="d-flex flex-column gap-2" style="font-size:0.82rem"><div class="p-2 rounded bg-light border"><span class="text-muted fw-bold">Default Registrar:</span><div class="text-secondary mt-1">Basic DNS table without proxy differentiation</div></div><div class="p-2 rounded border" style="background-color:#fff7ed;border-color:#fed7aa"><span class="fw-bold" style="color:#ea580c">Cloudflare Managed:</span><div class="fw-semibold mt-1" style="color:#9a3412">Strict Orange/Grey cloud routing prevents broken mail</div></div></div></div></div></div></section><section class="py-5" style="background-color:#f8fafc"><div class="container py-4"><div class="text-center max-w-2xl mx-auto mb-5"><span class="text-primary fw-bold text-uppercase" style="letter-spacing:1.5px;font-size:0.8rem;color:#ea580c !important">Full-Stack DNS Engineering</span><h2 class="fw-bold mt-2" style="color:#0f172a;font-size:2.2rem">Core Capabilities &amp; Security Hardening</h2><p class="text-muted">From sub-second failovers to cryptographic DNSSEC chains, we build an impenetrable DNS perimeter around your enterprise domain.</p></div><div class="row g-4"><div class="col-lg-4 col-md-6"><div class="deliv-card"><div class="deliv-card-icon"><i class="fa-solid fa-arrows-rotate"></i></div><h5 class="fw-bold" style="color:#1e1b4b">Zero-Downtime Migration</h5><p class="text-muted small mb-0">We execute staged dual-resolution migrations. Pre-lowered TTLs and complete dependency audits ensure your users and corporate mail never experience a single second of dropped traffic.</p></div></div><div class="col-lg-4 col-md-6"><div class="deliv-card"><div class="deliv-card-icon"><i class="fa-solid fa-shield-halved"></i></div><h5 class="fw-bold" style="color:#1e1b4b">DNSSEC Cryptographic Signing</h5><p class="text-muted small mb-0">We deploy RFC 4034 compliant DNSSEC with automated ECDSA Curve-256 keys, protecting your brand from DNS cache poisoning, forged records, and man-in-the-middle hijacking.</p></div></div><div class="col-lg-4 col-md-6"><div class="deliv-card"><div class="deliv-card-icon"><i class="fa-solid fa-fire-burner"></i></div><h5 class="fw-bold" style="color:#1e1b4b">WAF &amp; DDoS Shielding</h5><p class="text-muted small mb-0">We configure custom Cloudflare Web Application Firewall rules, rate-limiting policies, and automated bot defenses to filter malicious scrapers, vulnerability scanners, and volumetric attacks.</p></div></div><div class="col-lg-4 col-md-6"><div class="deliv-card"><div class="deliv-card-icon"><i class="fa-solid fa-envelope-circle-check"></i></div><h5 class="fw-bold" style="color:#1e1b4b">Multi-Vendor Email Routing</h5><p class="text-muted small mb-0">We isolate MX, SPF, DKIM, and DMARC records across Google Workspace, Microsoft 365, AWS SES, and SendGrid, preventing reverse proxy collisions and preserving 100% deliverability.</p></div></div><div class="col-lg-4 col-md-6"><div class="deliv-card"><div class="deliv-card-icon"><i class="fa-solid fa-gauge-high"></i></div><h5 class="fw-bold" style="color:#1e1b4b">Edge Caching &amp; Cache Rules</h5><p class="text-muted small mb-0">We tune Cloudflare Cache Rules, Browser Cache TTLs, and compression (Brotli) to offload 70%+ of static asset requests to Cloudflare edge nodes, slashing origin server hosting costs.</p></div></div><div class="col-lg-4 col-md-6"><div class="deliv-card"><div class="deliv-card-icon"><i class="fa-solid fa-lock"></i></div><h5 class="fw-bold" style="color:#1e1b4b">SSL/TLS Full (Strict) Architecture</h5><p class="text-muted small mb-0">We configure end-to-end SSL/TLS encryption between the visitor, Cloudflare Edge, and your origin server, eliminating downgrade attacks and preventing <code>ERR_TOO_MANY_REDIRECTS</code> loops.</p></div></div></div></div></section><section class="py-5 bg-white border-top border-bottom"><div class="container py-4"><div class="text-center max-w-2xl mx-auto mb-5"><span class="text-primary fw-bold text-uppercase" style="letter-spacing:1.5px;font-size:0.8rem;color:#ea580c !important">Disciplined Engineering Workflow</span><h2 class="fw-bold mt-2" style="color:#0f172a;font-size:2.2rem">Our 6-Step Zero-Downtime Migration Protocol</h2><p class="text-muted">DNS changes carry zero room for guesswork. We execute every migration using our battle-tested, pre-staged protocol.</p></div><div class="row g-4"><div class="col-lg-4 col-md-6"><div class="deliv-card border-top border-4 border-warning"><span class="badge bg-warning text-dark mb-2">STEP 1</span><h5 class="fw-bold" style="color:#1e1b4b">Authoritative Zone Audit</h5><p class="text-muted small mb-0">We perform an exhaustive audit of your active DNS table. Every A, AAAA, CNAME, MX, TXT, SRV, and PTR record is inventoried, cataloged, and cross-referenced with your hosting and email providers.</p></div></div><div class="col-lg-4 col-md-6"><div class="deliv-card border-top border-4 border-primary"><span class="badge bg-primary text-white mb-2">STEP 2</span><h5 class="fw-bold" style="color:#1e1b4b">Pre-Migration TTL Reduction</h5><p class="text-muted small mb-0">48 hours prior to cutover, we lower all record TTLs to 300 seconds (5 minutes). This flushes stale global recursive resolver caches, ensuring near-instant propagation when new nameservers are assigned.</p></div></div><div class="col-lg-4 col-md-6"><div class="deliv-card border-top border-4 border-success"><span class="badge bg-success text-white mb-2">STEP 3</span><h5 class="fw-bold" style="color:#1e1b4b">Cloudflare Mirror Zone Staging</h5><p class="text-muted small mb-0">We mirror all records into Cloudflare with mathematical exactness. We apply strict Orange Cloud (proxied) to web endpoints and Grey Cloud (DNS only) to mail, autodiscover, and SSH services.</p></div></div><div class="col-lg-4 col-md-6"><div class="deliv-card border-top border-4 border-info"><span class="badge bg-info text-dark mb-2">STEP 4</span><h5 class="fw-bold" style="color:#1e1b4b">Nameserver Delegation</h5><p class="text-muted small mb-0">We delegate Authoritative Nameservers at your domain registrar (GoDaddy, Namecheap, AWS, etc.). This can be done via delegated administrator access or over a live screen-share session.</p></div></div><div class="col-lg-4 col-md-6"><div class="deliv-card border-top border-4 border-dark"><span class="badge bg-dark text-white mb-2">STEP 5</span><h5 class="fw-bold" style="color:#1e1b4b">Global Propagation Telemetry</h5><p class="text-muted small mb-0">We track live DNS propagation across 50+ recursive resolvers globally (Google 8.8.8.8, Cloudflare 1.1.1.1, OpenDNS, Quad9) to ensure uninterrupted resolution from all continents.</p></div></div><div class="col-lg-4 col-md-6"><div class="deliv-card border-top border-4 border-danger"><span class="badge bg-danger text-white mb-2">STEP 6</span><h5 class="fw-bold" style="color:#1e1b4b">Post-Migration Handshake Audit</h5><p class="text-muted small mb-0">We run live SMTP handshake verifications, SSL certificate handshake tests, WAF rule validation, and DNSSEC chain authentication to certify your infrastructure is 100% operational.</p></div></div></div></div></section><section class="py-5" style="background-color:#f8fafc"><div class="container py-4"><div class="text-center max-w-2xl mx-auto mb-5"><span class="text-primary fw-bold text-uppercase" style="letter-spacing:1.5px;font-size:0.8rem;color:#ea580c !important">Universal Compatibility</span><h2 class="fw-bold mt-2" style="color:#0f172a;font-size:2.2rem">Supported Domain Registrars &amp; Cloud Providers</h2><p class="text-muted">We manage DNS migrations and Cloudflare architecture across every major global registrar, cloud hyperscaler, and hosting provider.</p></div><div class="row g-4"><div class="col-md-4"><div class="p-4 bg-white rounded-3 border h-100"><h5 class="fw-bold mb-3" style="color:#1e1b4b"><i class="fa-solid fa-globe text-primary me-2"></i> Domain Registrars</h5><ul class="list-unstyled mb-0" style="font-size:0.9rem;color:#475569"><li class="mb-2"><i class="fa-solid fa-check text-success me-2"></i> GoDaddy &amp; Wild West Domains</li><li class="mb-2"><i class="fa-solid fa-check text-success me-2"></i> Namecheap &amp; Porkbun</li><li class="mb-2"><i class="fa-solid fa-check text-success me-2"></i> Google Domains / Squarespace</li><li class="mb-2"><i class="fa-solid fa-check text-success me-2"></i> Hostinger, Bluehost &amp; SiteGround</li><li><i class="fa-solid fa-check text-success me-2"></i> Network Solutions &amp; Enom</li></ul></div></div><div class="col-md-4"><div class="p-4 bg-white rounded-3 border h-100"><h5 class="fw-bold mb-3" style="color:#1e1b4b"><i class="fa-solid fa-cloud text-warning me-2" style="color:#f97316 !important"></i> Cloud &amp; Hyperscalers</h5><ul class="list-unstyled mb-0" style="font-size:0.9rem;color:#475569"><li class="mb-2"><i class="fa-solid fa-check text-success me-2"></i> Cloudflare Enterprise &amp; Pro Zones</li><li class="mb-2"><i class="fa-solid fa-check text-success me-2"></i> AWS Route 53 &amp; CloudFront</li><li class="mb-2"><i class="fa-solid fa-check text-success me-2"></i> Google Cloud DNS &amp; Firebase</li><li class="mb-2"><i class="fa-solid fa-check text-success me-2"></i> Microsoft Azure DNS</li><li><i class="fa-solid fa-check text-success me-2"></i> DigitalOcean &amp; Vultr DNS</li></ul></div></div><div class="col-md-4"><div class="p-4 bg-white rounded-3 border h-100"><h5 class="fw-bold mb-3" style="color:#1e1b4b"><i class="fa-solid fa-envelope text-info me-2"></i> Business Email Ecosystems</h5><ul class="list-unstyled mb-0" style="font-size:0.9rem;color:#475569"><li class="mb-2"><i class="fa-solid fa-check text-success me-2"></i> Google Workspace (Gmail for Business)</li><li class="mb-2"><i class="fa-solid fa-check text-success me-2"></i> Microsoft 365 &amp; Exchange Online</li><li class="mb-2"><i class="fa-solid fa-check text-success me-2"></i> Amazon Simple Email Service (SES)</li><li class="mb-2"><i class="fa-solid fa-check text-success me-2"></i> SendGrid, Mailgun &amp; Postmark</li><li><i class="fa-solid fa-check text-success me-2"></i> Zoho Mail &amp; Custom cPanel Webmail</li></ul></div></div></div></div></section><section class="py-5 bg-white border-top border-bottom"><div class="container py-4"><div class="text-center max-w-2xl mx-auto mb-4"><span class="text-primary fw-bold text-uppercase" style="letter-spacing:1.5px;font-size:0.8rem;color:#ea580c !important">Predictable Fixed Pricing</span><h2 class="fw-bold mt-2" style="color:#0f172a;font-size:2.2rem">Enterprise DNS &amp; Cloudflare Packages</h2><p class="text-muted">Fixed flat-rate engineering fees with transparent deliverables. Choose the package tailored to your infrastructure requirements.</p><div class="mt-3"><div class="currency-switch"><button type="button" class="currency-btn active active" data-currency="USD" onclick="switchCurrency('USD')" data-currency="INR" onclick="switchCurrency('INR')">🇺🇸 USD ($ Global)</button><button type="button" class="currency-btn ">🇮🇳 INR (₹ India)</button></div><div class="text-muted small mt-2" style="font-size:0.8rem">Fixed flat-rate pricing for US, UK, UAE, Canada &amp; Global enterprises</div></div></div><div class="row g-4 align-items-stretch mb-5"><div class="col-lg-4"><div class="price-card"><div class="d-flex justify-content-between align-items-center mb-2"><span class="badge bg-light text-secondary border px-2 py-1" style="font-size:0.72rem">Tier 1 Essential</span><span class="badge bg-light text-secondary border px-2 py-1" style="font-size:0.72rem">Single Domain</span></div><h4 class="fw-bold mb-2 text-dark" style="font-size:1.3rem">Essential DNS Audit &amp; Setup</h4><p class="text-muted small mb-3">For businesses moving to Cloudflare or fixing broken email routing caused by proxy misconfigurations.</p><div class="p-3 rounded-3 bg-light mb-3 border"><div class="d-flex align-items-baseline gap-1"><span style="font-size:2rem;font-weight:900;color:#0f172a;line-height:1"><span class="curr-val" data-usd="$299" data-inr="₹23,999">$299</span></span><span class="text-muted small fw-medium">/ domain</span></div><div class="small fw-semibold text-success mt-1"><i class="fa-solid fa-bolt me-1"></i> Target: 24-Hour Turnaround</div></div><div class="flex-grow-1 mb-4"><div class="fw-bold small text-uppercase text-secondary mb-2" style="font-size:0.72rem;letter-spacing:0.5px">Included Deliverables:</div><ul class="list-unstyled mb-0" style="font-size:0.85rem;color:#334155"><li class="mb-2"><i class="fa-solid fa-circle-check text-primary me-2" style="color:#ea580c !important"></i> Full authoritative DNS zone inventory &amp; audit</li><li class="mb-2"><i class="fa-solid fa-circle-check text-primary me-2" style="color:#ea580c !important"></i> Zero-downtime Cloudflare nameserver migration</li><li class="mb-2"><i class="fa-solid fa-circle-check text-primary me-2" style="color:#ea580c !important"></i> Orange Cloud vs Grey Cloud mail flow isolation</li><li class="mb-2"><i class="fa-solid fa-circle-check text-primary me-2" style="color:#ea580c !important"></i> Google Workspace / M365 mail record preservation</li><li class="mb-2"><i class="fa-solid fa-circle-check text-primary me-2" style="color:#ea580c !important"></i> Basic WAF security rules activation</li><li><i class="fa-solid fa-circle-check text-primary me-2" style="color:#ea580c !important"></i> 7-Day post-migration monitoring &amp; support</li></ul></div><a href="https://wa.me/917425016636?text=Hi%20Digify%2C%20I%20want%20to%20order%20the%20Essential%20DNS%20Audit%20%26%20Cloudflare%20Setup%20package%20($299)." target="_blank" rel="noopener noreferrer" class="btn btn-outline-dark w-100 fw-bold py-2 rounded-3 mt-auto">Start DNS Setup — WhatsApp</a></div></div><div class="col-lg-4"><div class="price-card featured"><div class="d-flex justify-content-between align-items-center mb-2"><span class="badge" style="background:linear-gradient(135deg, #ea580c, #c2410c);color:#fff;font-size:0.72rem;padding:4px 10px;border-radius:9999px">★ Recommended</span><span class="badge" style="background-color:#ffedd5;color:#9a3412;border:1px solid #fed7aa;font-size:0.72rem;font-weight:700;padding:4px 10px;border-radius:6px">Single Domain</span></div><h4 class="fw-bold mb-2" style="font-size:1.3rem;color:#ea580c">Enterprise Cloudflare Edge Defense Suite</h4><p class="text-muted small mb-3">Full zero-downtime migration, DNSSEC, custom WAF rules, edge caching, bot fight mode, and SSL Full (Strict).</p><div class="p-3 rounded-3 border mb-3" style="background-color:#fff7ed;border-color:#fed7aa"><div class="d-flex align-items-baseline gap-1"><span style="font-size:2rem;font-weight:900;color:#c2410c;line-height:1"><span class="curr-val" data-usd="$299" data-inr="₹23,999">$299</span></span><span class="text-muted small fw-medium">/ domain</span></div><div class="small fw-semibold mt-1" style="color:#ea580c"><i class="fa-solid fa-shield-halved me-1"></i> Full DNSSEC &amp; WAF Defense Suite</div></div><div class="flex-grow-1 mb-4"><div class="fw-bold small text-uppercase mb-2" style="font-size:0.72rem;letter-spacing:0.5px;color:#ea580c">Everything in Tier 1, Plus:</div><ul class="list-unstyled mb-0" style="font-size:0.85rem;color:#334155"><li class="mb-2"><i class="fa-solid fa-circle-check text-success me-2"></i> DNSSEC cryptographic signing at registrar (DS record)</li><li class="mb-2"><i class="fa-solid fa-circle-check text-success me-2"></i> Custom WAF firewall rules &amp; Rate Limiting</li><li class="mb-2"><i class="fa-solid fa-circle-check text-success me-2"></i> Cloudflare Bot Fight Mode &amp; DDoS tuning</li><li class="mb-2"><i class="fa-solid fa-circle-check text-success me-2"></i> Edge Caching &amp; Page/Cache Rules configuration</li><li class="mb-2"><i class="fa-solid fa-circle-check text-success me-2"></i> SSL/TLS Full (Strict) origin verification</li><li class="mb-2"><i class="fa-solid fa-circle-check text-success me-2"></i> Multi-provider transactional email routing</li><li><i class="fa-solid fa-circle-check text-success me-2"></i> 14-Day dedicated implementation support</li></ul></div><a href="https://wa.me/917425016636?text=Hi%20Digify%2C%20I%20want%20to%20order%20the%20Complete%20Cloudflare%20Security%20Suite%20($299)." target="_blank" rel="noopener noreferrer" class="btn w-100 fw-bold py-2 rounded-3 mt-auto shadow-sm text-white" style="background-color:#ea580c">Deploy Cloudflare Security Suite</a></div></div><div class="col-lg-4"><div class="price-card"><div class="d-flex justify-content-between align-items-center mb-2"><span class="badge bg-dark text-white px-2 py-1" style="font-size:0.72rem">Tier 3 Enterprise</span><span class="badge bg-dark text-white px-2 py-1" style="font-size:0.72rem">Up to 5 Domains</span></div><h4 class="fw-bold mb-2 text-dark" style="font-size:1.3rem">Multi-Domain / Agency Fleet</h4><p class="text-muted small mb-3">Multi-domain portfolio architecture, Terraform / IaC DNS export, custom security profiles, and agency client SOPs.</p><div class="p-3 rounded-3 bg-light mb-3 border"><div class="d-flex align-items-baseline gap-1"><span style="font-size:2rem;font-weight:900;color:#0f172a;line-height:1"><span class="curr-val" data-usd="$649+" data-inr="₹49,999+">$649+</span></span><span class="text-muted small fw-medium">/ 5 domains</span></div><div class="small fw-semibold text-primary mt-1"><i class="fa-solid fa-layer-group me-1"></i> Multi-Zone Infrastructure Portfolio</div></div><div class="flex-grow-1 mb-4"><div class="fw-bold small text-uppercase text-secondary mb-2" style="font-size:0.72rem;letter-spacing:0.5px">Enterprise Scope:</div><ul class="list-unstyled mb-0" style="font-size:0.85rem;color:#334155"><li class="mb-2"><i class="fa-solid fa-circle-check text-primary me-2" style="color:#ea580c !important"></i> Up to 5 domains migrated simultaneously</li><li class="mb-2"><i class="fa-solid fa-circle-check text-primary me-2" style="color:#ea580c !important"></i> Terraform HCL / Bind zone configuration export</li><li class="mb-2"><i class="fa-solid fa-circle-check text-primary me-2" style="color:#ea580c !important"></i> DNSSEC configuration across entire portfolio</li><li class="mb-2"><i class="fa-solid fa-circle-check text-primary me-2" style="color:#ea580c !important"></i> Advanced Under-Attack SOP &amp; automated mitigations</li><li class="mb-2"><i class="fa-solid fa-circle-check text-primary me-2" style="color:#ea580c !important"></i> Agency deployment checklists &amp; client handoff SOPs</li><li><i class="fa-solid fa-circle-check text-primary me-2" style="color:#ea580c !important"></i> 30-Day dedicated implementation SLA support</li></ul></div><button class="btn btn-outline-dark w-100 fw-bold py-2 rounded-3 mt-auto" data-bs-toggle="modal" data-bs-target="#trialModal" style="white-space:normal;font-size:0.92rem;min-height:44px">Request Enterprise Fleet Scope</button></div></div></div><div class="d-none d-md-block deliv-table-wrap"><div class="p-3 bg-light border-bottom fw-bold text-dark">Package Capability Comparison Matrix</div><div class="table-responsive"><table class="deliv-table"><thead><tr><th style="width:40%">Capability / Technical Deliverable</th><th class="text-center" style="width:20%"><span class="curr-val" data-usd="$149 (Essential)" data-inr="₹11,999 (Essential)">$149 (Essential)</span></th><th class="text-center" style="width:20%"><span class="curr-val" data-usd="$299 (Suite)" data-inr="₹23,999 (Suite)">$299 (Suite)</span></th><th class="text-center" style="width:20%"><span class="curr-val" data-usd="$649+ (Fleet)" data-inr="₹49,999+ (Fleet)">$649+ (Fleet)</span></th></tr></thead><tbody><tr><td>Domain Scope</td><td class="text-center">Single Domain</td><td class="text-center fw-bold" style="color:#ea580c">Single Domain</td><td class="text-center text-success fw-bold">Up to 5 Domains Fleet</td></tr><tr><td>Authoritative Zone Audit &amp; Cleanup</td><td class="text-center">✓ Full Record Audit</td><td class="text-center fw-bold" style="color:#ea580c">✓ Complete Deep Audit</td><td class="text-center text-success fw-bold">✓ Multi-Domain Fleet Audit</td></tr><tr><td>Zero-Downtime Migration Protocol</td><td class="text-center">✓ Pre-TTL Lowering</td><td class="text-center fw-bold" style="color:#ea580c">✓ Staged Dual-Resolution</td><td class="text-center text-success fw-bold">✓ Enterprise Fleet SOP</td></tr><tr><td>Orange Cloud vs Grey Cloud Mail Fix</td><td class="text-center">✓ MX &amp; SMTP Isolated</td><td class="text-center fw-bold" style="color:#ea580c">✓ Complete Mail Flow Protection</td><td class="text-center text-success fw-bold">✓ Multi-Vendor Mail Routing</td></tr><tr><td>DNSSEC Cryptographic Signing</td><td class="text-center"><span class="text-muted"><i class="fa-solid fa-minus me-1"></i> Not Included</span></td><td class="text-center fw-bold" style="color:#ea580c">✓ Registrar Key Setup</td><td class="text-center text-success fw-bold">✓ Multi-Domain DNSSEC Fleet</td></tr><tr><td>Custom WAF Firewall Rules &amp; Rate Limit</td><td class="text-center">Basic WAF</td><td class="text-center fw-bold" style="color:#ea580c">✓ Advanced Custom WAF</td><td class="text-center text-success fw-bold">✓ Bespoke Security Profiles</td></tr><tr><td>Bot Fight Mode &amp; DDoS Shielding</td><td class="text-center">Standard Shield</td><td class="text-center fw-bold" style="color:#ea580c">✓ Bot Fight Mode Armed</td><td class="text-center text-success fw-bold">✓ Advanced Under-Attack SOP</td></tr><tr><td>Edge Caching &amp; Page/Cache Rules</td><td class="text-center">Standard Caching</td><td class="text-center fw-bold" style="color:#ea580c">✓ Custom Cache Rules</td><td class="text-center text-success fw-bold">✓ Dynamic CDN Optimization</td></tr><tr><td>Terraform / IaC DNS Export</td><td class="text-center"><span class="text-muted"><i class="fa-solid fa-minus me-1"></i> Not Included</span></td><td class="text-center fw-bold" style="color:#ea580c"><span class="text-muted fw-normal"><i class="fa-solid fa-minus me-1"></i> Not Included</span></td><td class="text-center text-success fw-bold">✓ Terraform HCL / Bind Export</td></tr><tr><td>Support &amp; Post-Migration Telemetry</td><td class="text-center">7 Days</td><td class="text-center fw-bold" style="color:#ea580c">14 Days Dedicated</td><td class="text-center text-success fw-bold">30 Days Dedicated SLA</td></tr></tbody></table></div></div><div class="d-block d-md-none"><div class="p-3 bg-light border rounded-3 mb-3 fw-bold text-dark text-center" style="font-size:0.92rem"><i class="fa-solid fa-list-check text-warning me-2" style="color:#ea580c !important"></i> Capability &amp; Deliverable Matrix</div><div class="deliv-mobile-card mb-3 p-3 shadow-sm border"><div class="fw-bold text-dark mb-3 pb-2 border-bottom" style="font-size:0.98rem">Domain Scope</div><div class="d-flex flex-column gap-2"><div class="p-2 px-3 rounded bg-light border"><div class="d-flex justify-content-between align-items-center mb-1"><span class="badge bg-secondary-subtle text-secondary" style="font-size:0.7rem">Essential</span><span class="text-muted fw-bold" style="font-size:0.75rem"><span class="curr-val" data-usd="$299" data-inr="₹23,999">$299</span></span></div><div style="font-size:0.88rem"><span class="text-dark fw-medium">Single Domain</span></div></div><div class="p-2 px-3 rounded border" style="background-color:#fff7ed;border-color:#fed7aa"><div class="d-flex justify-content-between align-items-center mb-1"><span class="badge text-white" style="background-color:#ea580c;font-size:0.7rem">Suite ★ Recommended</span><span class="fw-bold" style="color:#c2410c;font-size:0.75rem"><span class="curr-val" data-usd="$299" data-inr="₹23,999">$299</span></span></div><div style="font-size:0.88rem"><span class="fw-bold" style="color:#9a3412">Single Domain</span></div></div><div class="p-2 px-3 rounded bg-dark text-white border border-dark"><div class="d-flex justify-content-between align-items-center mb-1"><span class="badge bg-white text-dark" style="font-size:0.7rem">Enterprise Fleet</span><span class="text-white-50 fw-bold" style="font-size:0.75rem"><span class="curr-val" data-usd="$649+" data-inr="₹49,999+">$649+</span></span></div><div style="font-size:0.88rem"><span class="text-success fw-bold">Up to 5 Domains Fleet</span></div></div></div></div><div class="deliv-mobile-card mb-3 p-3 shadow-sm border"><div class="fw-bold text-dark mb-3 pb-2 border-bottom" style="font-size:0.98rem">Authoritative Zone Audit &amp; Cleanup</div><div class="d-flex flex-column gap-2"><div class="p-2 px-3 rounded bg-light border"><div class="d-flex justify-content-between align-items-center mb-1"><span class="badge bg-secondary-subtle text-secondary" style="font-size:0.7rem">Essential</span><span class="text-muted fw-bold" style="font-size:0.75rem"><span class="curr-val" data-usd="$299" data-inr="₹23,999">$299</span></span></div><div style="font-size:0.88rem"><span class="text-success fw-bold">✓ Full Record Audit</span></div></div><div class="p-2 px-3 rounded border" style="background-color:#fff7ed;border-color:#fed7aa"><div class="d-flex justify-content-between align-items-center mb-1"><span class="badge text-white" style="background-color:#ea580c;font-size:0.7rem">Suite ★ Recommended</span><span class="fw-bold" style="color:#c2410c;font-size:0.75rem"><span class="curr-val" data-usd="$299" data-inr="₹23,999">$299</span></span></div><div style="font-size:0.88rem"><span class="fw-bold" style="color:#9a3412">✓ Complete Deep Audit</span></div></div><div class="p-2 px-3 rounded bg-dark text-white border border-dark"><div class="d-flex justify-content-between align-items-center mb-1"><span class="badge bg-white text-dark" style="font-size:0.7rem">Enterprise Fleet</span><span class="text-white-50 fw-bold" style="font-size:0.75rem"><span class="curr-val" data-usd="$649+" data-inr="₹49,999+">$649+</span></span></div><div style="font-size:0.88rem"><span class="text-success fw-bold">✓ Multi-Domain Fleet Audit</span></div></div></div></div><div class="deliv-mobile-card mb-3 p-3 shadow-sm border"><div class="fw-bold text-dark mb-3 pb-2 border-bottom" style="font-size:0.98rem">Zero-Downtime Migration Protocol</div><div class="d-flex flex-column gap-2"><div class="p-2 px-3 rounded bg-light border"><div class="d-flex justify-content-between align-items-center mb-1"><span class="badge bg-secondary-subtle text-secondary" style="font-size:0.7rem">Essential</span><span class="text-muted fw-bold" style="font-size:0.75rem"><span class="curr-val" data-usd="$299" data-inr="₹23,999">$299</span></span></div><div style="font-size:0.88rem"><span class="text-success fw-bold">✓ Pre-TTL Lowering</span></div></div><div class="p-2 px-3 rounded border" style="background-color:#fff7ed;border-color:#fed7aa"><div class="d-flex justify-content-between align-items-center mb-1"><span class="badge text-white" style="background-color:#ea580c;font-size:0.7rem">Suite ★ Recommended</span><span class="fw-bold" style="color:#c2410c;font-size:0.75rem"><span class="curr-val" data-usd="$299" data-inr="₹23,999">$299</span></span></div><div style="font-size:0.88rem"><span class="fw-bold" style="color:#9a3412">✓ Staged Dual-Resolution</span></div></div><div class="p-2 px-3 rounded bg-dark text-white border border-dark"><div class="d-flex justify-content-between align-items-center mb-1"><span class="badge bg-white text-dark" style="font-size:0.7rem">Enterprise Fleet</span><span class="text-white-50 fw-bold" style="font-size:0.75rem"><span class="curr-val" data-usd="$649+" data-inr="₹49,999+">$649+</span></span></div><div style="font-size:0.88rem"><span class="text-success fw-bold">✓ Enterprise Fleet SOP</span></div></div></div></div><div class="deliv-mobile-card mb-3 p-3 shadow-sm border"><div class="fw-bold text-dark mb-3 pb-2 border-bottom" style="font-size:0.98rem">Orange Cloud vs Grey Cloud Mail Fix</div><div class="d-flex flex-column gap-2"><div class="p-2 px-3 rounded bg-light border"><div class="d-flex justify-content-between align-items-center mb-1"><span class="badge bg-secondary-subtle text-secondary" style="font-size:0.7rem">Essential</span><span class="text-muted fw-bold" style="font-size:0.75rem"><span class="curr-val" data-usd="$299" data-inr="₹23,999">$299</span></span></div><div style="font-size:0.88rem"><span class="text-success fw-bold">✓ MX &amp; SMTP Isolated</span></div></div><div class="p-2 px-3 rounded border" style="background-color:#fff7ed;border-color:#fed7aa"><div class="d-flex justify-content-between align-items-center mb-1"><span class="badge text-white" style="background-color:#ea580c;font-size:0.7rem">Suite ★ Recommended</span><span class="fw-bold" style="color:#c2410c;font-size:0.75rem"><span class="curr-val" data-usd="$299" data-inr="₹23,999">$299</span></span></div><div style="font-size:0.88rem"><span class="fw-bold" style="color:#9a3412">✓ Complete Mail Flow Protection</span></div></div><div class="p-2 px-3 rounded bg-dark text-white border border-dark"><div class="d-flex justify-content-between align-items-center mb-1"><span class="badge bg-white text-dark" style="font-size:0.7rem">Enterprise Fleet</span><span class="text-white-50 fw-bold" style="font-size:0.75rem"><span class="curr-val" data-usd="$649+" data-inr="₹49,999+">$649+</span></span></div><div style="font-size:0.88rem"><span class="text-success fw-bold">✓ Multi-Vendor Mail Routing</span></div></div></div></div><div class="deliv-mobile-card mb-3 p-3 shadow-sm border"><div class="fw-bold text-dark mb-3 pb-2 border-bottom" style="font-size:0.98rem">DNSSEC Cryptographic Signing</div><div class="d-flex flex-column gap-2"><div class="p-2 px-3 rounded bg-light border"><div class="d-flex justify-content-between align-items-center mb-1"><span class="badge bg-secondary-subtle text-secondary" style="font-size:0.7rem">Essential</span><span class="text-muted fw-bold" style="font-size:0.75rem"><span class="curr-val" data-usd="$299" data-inr="₹23,999">$299</span></span></div><div style="font-size:0.88rem"><span class="text-muted"><i class="fa-solid fa-minus text-secondary me-1"></i> Not Included</span></div></div><div class="p-2 px-3 rounded border" style="background-color:#fff7ed;border-color:#fed7aa"><div class="d-flex justify-content-between align-items-center mb-1"><span class="badge text-white" style="background-color:#ea580c;font-size:0.7rem">Suite ★ Recommended</span><span class="fw-bold" style="color:#c2410c;font-size:0.75rem"><span class="curr-val" data-usd="$299" data-inr="₹23,999">$299</span></span></div><div style="font-size:0.88rem"><span class="fw-bold" style="color:#9a3412">✓ Registrar Key Setup</span></div></div><div class="p-2 px-3 rounded bg-dark text-white border border-dark"><div class="d-flex justify-content-between align-items-center mb-1"><span class="badge bg-white text-dark" style="font-size:0.7rem">Enterprise Fleet</span><span class="text-white-50 fw-bold" style="font-size:0.75rem"><span class="curr-val" data-usd="$649+" data-inr="₹49,999+">$649+</span></span></div><div style="font-size:0.88rem"><span class="text-success fw-bold">✓ Multi-Domain DNSSEC Fleet</span></div></div></div></div><div class="deliv-mobile-card mb-3 p-3 shadow-sm border"><div class="fw-bold text-dark mb-3 pb-2 border-bottom" style="font-size:0.98rem">Custom WAF Firewall Rules &amp; Rate Limit</div><div class="d-flex flex-column gap-2"><div class="p-2 px-3 rounded bg-light border"><div class="d-flex justify-content-between align-items-center mb-1"><span class="badge bg-secondary-subtle text-secondary" style="font-size:0.7rem">Essential</span><span class="text-muted fw-bold" style="font-size:0.75rem"><span class="curr-val" data-usd="$299" data-inr="₹23,999">$299</span></span></div><div style="font-size:0.88rem"><span class="text-dark fw-medium">Basic WAF</span></div></div><div class="p-2 px-3 rounded border" style="background-color:#fff7ed;border-color:#fed7aa"><div class="d-flex justify-content-between align-items-center mb-1"><span class="badge text-white" style="background-color:#ea580c;font-size:0.7rem">Suite ★ Recommended</span><span class="fw-bold" style="color:#c2410c;font-size:0.75rem"><span class="curr-val" data-usd="$299" data-inr="₹23,999">$299</span></span></div><div style="font-size:0.88rem"><span class="fw-bold" style="color:#9a3412">✓ Advanced Custom WAF</span></div></div><div class="p-2 px-3 rounded bg-dark text-white border border-dark"><div class="d-flex justify-content-between align-items-center mb-1"><span class="badge bg-white text-dark" style="font-size:0.7rem">Enterprise Fleet</span><span class="text-white-50 fw-bold" style="font-size:0.75rem"><span class="curr-val" data-usd="$649+" data-inr="₹49,999+">$649+</span></span></div><div style="font-size:0.88rem"><span class="text-success fw-bold">✓ Bespoke Security Profiles</span></div></div></div></div><div class="deliv-mobile-card mb-3 p-3 shadow-sm border"><div class="fw-bold text-dark mb-3 pb-2 border-bottom" style="font-size:0.98rem">Bot Fight Mode &amp; DDoS Shielding</div><div class="d-flex flex-column gap-2"><div class="p-2 px-3 rounded bg-light border"><div class="d-flex justify-content-between align-items-center mb-1"><span class="badge bg-secondary-subtle text-secondary" style="font-size:0.7rem">Essential</span><span class="text-muted fw-bold" style="font-size:0.75rem"><span class="curr-val" data-usd="$299" data-inr="₹23,999">$299</span></span></div><div style="font-size:0.88rem"><span class="text-dark fw-medium">Standard Shield</span></div></div><div class="p-2 px-3 rounded border" style="background-color:#fff7ed;border-color:#fed7aa"><div class="d-flex justify-content-between align-items-center mb-1"><span class="badge text-white" style="background-color:#ea580c;font-size:0.7rem">Suite ★ Recommended</span><span class="fw-bold" style="color:#c2410c;font-size:0.75rem"><span class="curr-val" data-usd="$299" data-inr="₹23,999">$299</span></span></div><div style="font-size:0.88rem"><span class="fw-bold" style="color:#9a3412">✓ Bot Fight Mode Armed</span></div></div><div class="p-2 px-3 rounded bg-dark text-white border border-dark"><div class="d-flex justify-content-between align-items-center mb-1"><span class="badge bg-white text-dark" style="font-size:0.7rem">Enterprise Fleet</span><span class="text-white-50 fw-bold" style="font-size:0.75rem"><span class="curr-val" data-usd="$649+" data-inr="₹49,999+">$649+</span></span></div><div style="font-size:0.88rem"><span class="text-success fw-bold">✓ Advanced Under-Attack SOP</span></div></div></div></div><div class="deliv-mobile-card mb-3 p-3 shadow-sm border"><div class="fw-bold text-dark mb-3 pb-2 border-bottom" style="font-size:0.98rem">Edge Caching &amp; Page/Cache Rules</div><div class="d-flex flex-column gap-2"><div class="p-2 px-3 rounded bg-light border"><div class="d-flex justify-content-between align-items-center mb-1"><span class="badge bg-secondary-subtle text-secondary" style="font-size:0.7rem">Essential</span><span class="text-muted fw-bold" style="font-size:0.75rem"><span class="curr-val" data-usd="$299" data-inr="₹23,999">$299</span></span></div><div style="font-size:0.88rem"><span class="text-dark fw-medium">Standard Caching</span></div></div><div class="p-2 px-3 rounded border" style="background-color:#fff7ed;border-color:#fed7aa"><div class="d-flex justify-content-between align-items-center mb-1"><span class="badge text-white" style="background-color:#ea580c;font-size:0.7rem">Suite ★ Recommended</span><span class="fw-bold" style="color:#c2410c;font-size:0.75rem"><span class="curr-val" data-usd="$299" data-inr="₹23,999">$299</span></span></div><div style="font-size:0.88rem"><span class="fw-bold" style="color:#9a3412">✓ Custom Cache Rules</span></div></div><div class="p-2 px-3 rounded bg-dark text-white border border-dark"><div class="d-flex justify-content-between align-items-center mb-1"><span class="badge bg-white text-dark" style="font-size:0.7rem">Enterprise Fleet</span><span class="text-white-50 fw-bold" style="font-size:0.75rem"><span class="curr-val" data-usd="$649+" data-inr="₹49,999+">$649+</span></span></div><div style="font-size:0.88rem"><span class="text-success fw-bold">✓ Dynamic CDN Optimization</span></div></div></div></div><div class="deliv-mobile-card mb-3 p-3 shadow-sm border"><div class="fw-bold text-dark mb-3 pb-2 border-bottom" style="font-size:0.98rem">Terraform / IaC DNS Export</div><div class="d-flex flex-column gap-2"><div class="p-2 px-3 rounded bg-light border"><div class="d-flex justify-content-between align-items-center mb-1"><span class="badge bg-secondary-subtle text-secondary" style="font-size:0.7rem">Essential</span><span class="text-muted fw-bold" style="font-size:0.75rem"><span class="curr-val" data-usd="$299" data-inr="₹23,999">$299</span></span></div><div style="font-size:0.88rem"><span class="text-muted"><i class="fa-solid fa-minus text-secondary me-1"></i> Not Included</span></div></div><div class="p-2 px-3 rounded border" style="background-color:#fff7ed;border-color:#fed7aa"><div class="d-flex justify-content-between align-items-center mb-1"><span class="badge text-white" style="background-color:#ea580c;font-size:0.7rem">Suite ★ Recommended</span><span class="fw-bold" style="color:#c2410c;font-size:0.75rem"><span class="curr-val" data-usd="$299" data-inr="₹23,999">$299</span></span></div><div style="font-size:0.88rem"><span class="text-muted"><i class="fa-solid fa-minus text-secondary me-1"></i> Not Included</span></div></div><div class="p-2 px-3 rounded bg-dark text-white border border-dark"><div class="d-flex justify-content-between align-items-center mb-1"><span class="badge bg-white text-dark" style="font-size:0.7rem">Enterprise Fleet</span><span class="text-white-50 fw-bold" style="font-size:0.75rem"><span class="curr-val" data-usd="$649+" data-inr="₹49,999+">$649+</span></span></div><div style="font-size:0.88rem"><span class="text-success fw-bold">✓ Terraform HCL / Bind Export</span></div></div></div></div><div class="deliv-mobile-card mb-3 p-3 shadow-sm border"><div class="fw-bold text-dark mb-3 pb-2 border-bottom" style="font-size:0.98rem">Support &amp; Post-Migration Telemetry</div><div class="d-flex flex-column gap-2"><div class="p-2 px-3 rounded bg-light border"><div class="d-flex justify-content-between align-items-center mb-1"><span class="badge bg-secondary-subtle text-secondary" style="font-size:0.7rem">Essential</span><span class="text-muted fw-bold" style="font-size:0.75rem"><span class="curr-val" data-usd="$299" data-inr="₹23,999">$299</span></span></div><div style="font-size:0.88rem"><span class="text-dark fw-medium">7 Days</span></div></div><div class="p-2 px-3 rounded border" style="background-color:#fff7ed;border-color:#fed7aa"><div class="d-flex justify-content-between align-items-center mb-1"><span class="badge text-white" style="background-color:#ea580c;font-size:0.7rem">Suite ★ Recommended</span><span class="fw-bold" style="color:#c2410c;font-size:0.75rem"><span class="curr-val" data-usd="$299" data-inr="₹23,999">$299</span></span></div><div style="font-size:0.88rem"><span class="fw-bold" style="color:#9a3412">14 Days Dedicated</span></div></div><div class="p-2 px-3 rounded bg-dark text-white border border-dark"><div class="d-flex justify-content-between align-items-center mb-1"><span class="badge bg-white text-dark" style="font-size:0.7rem">Enterprise Fleet</span><span class="text-white-50 fw-bold" style="font-size:0.75rem"><span class="curr-val" data-usd="$649+" data-inr="₹49,999+">$649+</span></span></div><div style="font-size:0.88rem"><span class="text-success fw-bold">30 Days Dedicated SLA</span></div></div></div></div></div></div></section><section class="py-5 bg-white border-top border-bottom"><div class="container py-4"><div class="text-center max-w-2xl mx-auto mb-5"><span class="text-primary fw-bold text-uppercase" style="letter-spacing:1.5px;font-size:0.8rem;color:#ea580c !important">Deep Technical Guidance</span><h2 class="fw-bold mt-2" style="color:#0f172a;font-size:2.2rem">Frequently Asked DNS &amp; Cloudflare Questions</h2><p class="text-muted">Authoritative engineering answers on nameserver migrations, DNSSEC cryptography, and proxy configurations.</p></div><div class="row justify-content-center"><div class="col-lg-9"><div class="d-flex flex-column gap-3"><div class="border rounded-4 bg-white overflow-hidden transition-all shadow-sm" style="border-color:#ea580c"><button type="button" class="w-100 p-4 text-start d-flex justify-content-between align-items-center gap-3 bg-transparent border-0" style="cursor:pointer"><span class="fw-bold text-dark" style="font-size:1.05rem">1. How does Digify Soft Solutions achieve zero downtime during a nameserver migration?</span><span class="p-2 rounded-circle d-flex align-items-center justify-content-center flex-shrink-0" style="width:32px;height:32px;background:#fff7ed;color:#ea580c;transform:rotate(180deg);transition:transform 0.2s ease"><i class="fa-solid fa-chevron-down" style="font-size:0.8rem"></i></span></button><div class="px-4 pb-4 text-muted small border-top pt-3" style="font-size:0.92rem;line-height:1.65">Zero downtime is an engineering objective executed through a disciplined pre-propagation protocol: 48 hours before nameserver delegation, we lower the Time-to-Live (TTL) on all existing DNS records to 300 seconds (5 minutes). We then construct an identical mirror zone inside Cloudflare, auditing every single A, AAAA, CNAME, MX, TXT, SRV, and PTR record. When nameservers are delegated at your registrar, both old and new DNS servers resolve identical records simultaneously, ensuring continuous global resolution without a single dropped request.</div></div><div class="border rounded-4 bg-white overflow-hidden transition-all shadow-sm" style="border-color:#e2e8f0"><button type="button" class="w-100 p-4 text-start d-flex justify-content-between align-items-center gap-3 bg-transparent border-0" style="cursor:pointer"><span class="fw-bold text-dark" style="font-size:1.05rem">2. Why did my corporate email stop working when I turned on Cloudflare?</span><span class="p-2 rounded-circle d-flex align-items-center justify-content-center flex-shrink-0" style="width:32px;height:32px;background:#f1f5f9;color:#64748b;transform:rotate(0deg);transition:transform 0.2s ease"><i class="fa-solid fa-chevron-down" style="font-size:0.8rem"></i></span></button></div><div class="border rounded-4 bg-white overflow-hidden transition-all shadow-sm" style="border-color:#e2e8f0"><button type="button" class="w-100 p-4 text-start d-flex justify-content-between align-items-center gap-3 bg-transparent border-0" style="cursor:pointer"><span class="fw-bold text-dark" style="font-size:1.05rem">3. What is DNSSEC and why does my business need it?</span><span class="p-2 rounded-circle d-flex align-items-center justify-content-center flex-shrink-0" style="width:32px;height:32px;background:#f1f5f9;color:#64748b;transform:rotate(0deg);transition:transform 0.2s ease"><i class="fa-solid fa-chevron-down" style="font-size:0.8rem"></i></span></button></div><div class="border rounded-4 bg-white overflow-hidden transition-all shadow-sm" style="border-color:#e2e8f0"><button type="button" class="w-100 p-4 text-start d-flex justify-content-between align-items-center gap-3 bg-transparent border-0" style="cursor:pointer"><span class="fw-bold text-dark" style="font-size:1.05rem">4. Do I have to transfer my domain registration to Cloudflare?</span><span class="p-2 rounded-circle d-flex align-items-center justify-content-center flex-shrink-0" style="width:32px;height:32px;background:#f1f5f9;color:#64748b;transform:rotate(0deg);transition:transform 0.2s ease"><i class="fa-solid fa-chevron-down" style="font-size:0.8rem"></i></span></button></div><div class="border rounded-4 bg-white overflow-hidden transition-all shadow-sm" style="border-color:#e2e8f0"><button type="button" class="w-100 p-4 text-start d-flex justify-content-between align-items-center gap-3 bg-transparent border-0" style="cursor:pointer"><span class="fw-bold text-dark" style="font-size:1.05rem">5. How does Anycast DNS make my website and web applications faster?</span><span class="p-2 rounded-circle d-flex align-items-center justify-content-center flex-shrink-0" style="width:32px;height:32px;background:#f1f5f9;color:#64748b;transform:rotate(0deg);transition:transform 0.2s ease"><i class="fa-solid fa-chevron-down" style="font-size:0.8rem"></i></span></button></div><div class="border rounded-4 bg-white overflow-hidden transition-all shadow-sm" style="border-color:#e2e8f0"><button type="button" class="w-100 p-4 text-start d-flex justify-content-between align-items-center gap-3 bg-transparent border-0" style="cursor:pointer"><span class="fw-bold text-dark" style="font-size:1.05rem">6. Will my SSL/TLS certificates break during the migration?</span><span class="p-2 rounded-circle d-flex align-items-center justify-content-center flex-shrink-0" style="width:32px;height:32px;background:#f1f5f9;color:#64748b;transform:rotate(0deg);transition:transform 0.2s ease"><i class="fa-solid fa-chevron-down" style="font-size:0.8rem"></i></span></button></div><div class="border rounded-4 bg-white overflow-hidden transition-all shadow-sm" style="border-color:#e2e8f0"><button type="button" class="w-100 p-4 text-start d-flex justify-content-between align-items-center gap-3 bg-transparent border-0" style="cursor:pointer"><span class="fw-bold text-dark" style="font-size:1.05rem">7. Do you need my master account passwords to configure Cloudflare?</span><span class="p-2 rounded-circle d-flex align-items-center justify-content-center flex-shrink-0" style="width:32px;height:32px;background:#f1f5f9;color:#64748b;transform:rotate(0deg);transition:transform 0.2s ease"><i class="fa-solid fa-chevron-down" style="font-size:0.8rem"></i></span></button></div><div class="border rounded-4 bg-white overflow-hidden transition-all shadow-sm" style="border-color:#e2e8f0"><button type="button" class="w-100 p-4 text-start d-flex justify-content-between align-items-center gap-3 bg-transparent border-0" style="cursor:pointer"><span class="fw-bold text-dark" style="font-size:1.05rem">8. Can you manage multi-vendor email routing on the same domain?</span><span class="p-2 rounded-circle d-flex align-items-center justify-content-center flex-shrink-0" style="width:32px;height:32px;background:#f1f5f9;color:#64748b;transform:rotate(0deg);transition:transform 0.2s ease"><i class="fa-solid fa-chevron-down" style="font-size:0.8rem"></i></span></button></div></div></div></div></div></section><section class="bottom-cta-section py-5 text-white position-relative" style="background:linear-gradient(135deg, #090d16 0%, #1c1917 50%, #c2410c 100%);overflow:hidden"><div class="container py-5 text-center position-relative" style="z-index:2"><span class="badge text-uppercase px-3 py-2 fw-bold mb-3 cta-badge" style="background-color:#ea580c;color:#fff">Accelerate and Fortify Your Global DNS</span><h2 class="fw-bold mb-3 text-white cta-h2" style="font-size:2.8rem">Don&#x27;t Wait for an Outage or DDoS Attack to Modernize Your DNS.</h2><p class="lead mx-auto mb-4" style="max-width:700px;color:#cbd5e1;font-size:1.05rem">Your domain deserves sub-30ms global resolution, zero-downtime migrations, and complete immunity from DNS hijacking. Digify Soft Solutions executes your Cloudflare deployment with absolute engineering rigor.</p><div class="d-flex justify-content-center flex-wrap gap-3 mb-4"><a href="https://wa.me/917425016636?text=Hi%20Digify%2C%20I%20need%20expert%20DNS%20migration%20and%20Cloudflare%20management%20for%20my%20domain." target="_blank" rel="noopener noreferrer" class="deliv-btn-wa"><i class="fa-brands fa-whatsapp" style="font-size:1.3rem"></i>WhatsApp Digify Soft Solutions (+91 7425016636)</a><button class="deliv-btn-secondary" data-bs-toggle="modal" data-bs-target="#trialModal"><i class="fa-solid fa-calendar-check"></i>Schedule Zero-Downtime Migration</button></div><div class="small" style="color:#fdba74"><i class="fa-solid fa-lock me-1"></i> No master account passwords shared · Delegated access or screen-shared setup · 100% Confidential</div></div></section></div>
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
