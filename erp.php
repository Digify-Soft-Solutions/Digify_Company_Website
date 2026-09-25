<?php
  include 'db.php';
  include 'fetch_meta.php';

  $pageMeta = getPageMeta('erp');
  $pageTitle = $pageMeta['page_title'] ?? 'AI-Powered Cloud ERP Software for Manufacturing & Enterprise – Digify Soft Solutions';
  $pageDescription = $pageMeta['page_description'] ?? 'Digify AI-Powered Cloud ERP Software unifies Multi-Plant Manufacturing, Supply Chain, Multi-Location Inventory, GST Accounting, and 24/7 AI Copilot for fast-growing enterprises.';
  $pageKeywords = $pageMeta['page_keywords'] ?? 'AI ERP, Cloud ERP India, Manufacturing ERP, Enterprise ERP Software, Digify Soft Solutions';

  include 'top.php';
  include 'header.php';
?>

<!-- Custom Styling for AI ERP Page -->
<style>
  .ai-erp-hero {
    background: linear-gradient(135deg, #0f172a 0%, #1e293b 60%, #0f172a 100%);
    color: #ffffff;
    padding: 100px 0 90px;
    position: relative;
    overflow: hidden;
  }
  .ai-erp-hero::before {
    content: '';
    position: absolute;
    top: -30%;
    right: -10%;
    width: 700px;
    height: 700px;
    background: radial-gradient(circle, rgba(224, 105, 48, 0.22) 0%, rgba(224, 105, 48, 0) 70%);
    border-radius: 50%;
    pointer-events: none;
  }
  .hero-badge-pill {
    background: rgba(224, 105, 48, 0.15);
    border: 1px solid rgba(224, 105, 48, 0.4);
    color: #fbc145;
    font-size: 13px;
    font-weight: 700;
    padding: 7px 20px;
    border-radius: 30px;
    display: inline-flex;
    align-items: center;
    gap: 8px;
  }
  .ai-erp-title {
    font-size: clamp(34px, 5vw, 58px);
    font-weight: 900;
    line-height: 1.12;
    letter-spacing: -1px;
  }
  .ai-erp-title span {
    background: linear-gradient(135deg, #e06930 0%, #fbc145 100%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
  }
  .ai-erp-subtitle {
    font-size: 18px;
    color: #cbd5e1;
    line-height: 1.65;
    max-width: 680px;
  }
  .ai-stat-card {
    background: rgba(255, 255, 255, 0.06);
    border: 1px solid rgba(255, 255, 255, 0.15);
    border-radius: 16px;
    padding: 24px;
    backdrop-filter: blur(10px);
  }
  .ai-stat-number {
    font-size: 34px;
    font-weight: 900;
    color: #fbc145;
  }
  .ai-feature-card {
    background: #ffffff;
    border: 1px solid #e2e8f0;
    border-radius: 20px;
    padding: 32px;
    height: 100%;
    transition: all 0.3s ease;
    box-shadow: 0 4px 20px rgba(0,0,0,0.03);
  }
  .ai-feature-card:hover {
    transform: translateY(-8px);
    box-shadow: 0 15px 40px rgba(224, 105, 48, 0.14);
    border-color: #e06930;
  }
  .feature-icon-box {
    width: 60px;
    height: 60px;
    border-radius: 16px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 26px;
    margin-bottom: 22px;
  }
  .vertical-pill-card {
    background: #ffffff;
    border: 1px solid #e2e8f0;
    border-radius: 18px;
    padding: 28px;
    height: 100%;
    transition: all 0.3s ease;
    box-shadow: 0 4px 15px rgba(0,0,0,0.02);
  }
  .vertical-pill-card:hover {
    border-color: #cbd5e1;
    box-shadow: 0 10px 30px rgba(0,0,0,0.08);
    transform: translateY(-4px);
  }
  .btn-demo-primary {
    background: linear-gradient(135deg, #e06930 0%, #d05820 100%);
    color: #ffffff !important;
    font-weight: 700;
    padding: 16px 38px;
    border-radius: 50px;
    border: none;
    box-shadow: 0 8px 24px rgba(224, 105, 48, 0.35);
    transition: all 0.3s ease;
  }
  .btn-demo-primary:hover {
    transform: translateY(-2px);
    box-shadow: 0 14px 32px rgba(224, 105, 48, 0.5);
  }
  .btn-demo-secondary {
    background: rgba(255, 255, 255, 0.1);
    color: #ffffff !important;
    border: 1px solid rgba(255, 255, 255, 0.25);
    font-weight: 600;
    padding: 16px 32px;
    border-radius: 50px;
    transition: all 0.3s ease;
  }
  .btn-demo-secondary:hover {
    background: rgba(255, 255, 255, 0.2);
  }
  .advantage-step-box {
    background: #ffffff;
    border-left: 4px solid #e06930;
    border-radius: 14px;
    padding: 24px 28px;
    box-shadow: 0 4px 15px rgba(0,0,0,0.03);
    margin-bottom: 20px;
  }
  .faq-accordion-item {
    background: #ffffff;
    border: 1px solid #e2e8f0;
    border-radius: 14px;
    margin-bottom: 14px;
    overflow: hidden;
  }
  .faq-question {
    padding: 20px 24px;
    font-weight: 700;
    font-size: 16.5px;
    color: #0f172a;
    cursor: pointer;
    display: flex;
    justify-content: space-between;
    align-items: center;
  }
  .faq-answer {
    padding: 0 24px 20px;
    font-size: 14.5px;
    color: #475569;
    line-height: 1.65;
  }
  .module-deep-card {
    background: #ffffff;
    border-radius: 16px;
    padding: 28px;
    border: 1px solid #e2e8f0;
    margin-bottom: 24px;
    box-shadow: 0 4px 15px rgba(0,0,0,0.02);
  }
</style>

<!-- SECTION 1: HERO BANNER -->
<section class="ai-erp-hero">
  <div class="container">
    <div class="row align-items-center g-5">
      <div class="col-lg-7">
        <div class="hero-badge-pill mb-3">
          <i class="fas fa-brain"></i> DIGIFY AI ENTERPRISE SUITE 2026
        </div>
        <h1 class="ai-erp-title mb-4">
          Next-Generation <span>AI-Powered Cloud ERP</span> for Modern Enterprises
        </h1>
        <p class="ai-erp-subtitle mb-4">
          Stop struggling with fragmented software and delayed reporting. Digify AI ERP seamlessly unifies Multi-Plant Manufacturing floor operations, Real-Time Warehouse Inventory, Automated GST Accounting, Omnichannel Distribution, and 24/7 AI Business Copilot into one intelligent operating system.
        </p>

        <div class="d-flex flex-wrap gap-3 mb-5">
          <a href="contact-us.php" class="btn btn-demo-primary" data-bs-toggle="modal" data-bs-target="#trialModal">
            <i class="fas fa-calendar-check me-2"></i> Book Free Live Demo
          </a>
          <a href="#ai-advantages" class="btn btn-demo-secondary">
            <i class="fas fa-microchip me-2"></i> Why Choose Digify AI ERP?
          </a>
        </div>

        <div class="row g-3">
          <div class="col-sm-4">
            <div class="ai-stat-card">
              <div class="ai-stat-number">3.5x</div>
              <div style="font-size: 13.5px; color: #cbd5e1; font-weight: 600;">Faster Production &amp; Order Cycle</div>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="ai-stat-card">
              <div class="ai-stat-number">45%</div>
              <div style="font-size: 13.5px; color: #cbd5e1; font-weight: 600;">Lower Carrying Costs &amp; Wastage</div>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="ai-stat-card">
              <div class="ai-stat-number">100%</div>
              <div style="font-size: 13.5px; color: #cbd5e1; font-weight: 600;">GST &amp; E-Invoicing Automated</div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-5">
        <div class="position-relative">
          <img src="assets/images/ai_erp_banner_1.jpg" alt="Digify AI Cloud ERP Platform" class="img-fluid rounded-4 shadow-lg border border-secondary" style="border-color: rgba(255,255,255,0.15) !important;">
          <!-- Floating AI Copilot Card -->
          <div style="background: #0f172a; border: 1px solid rgba(224,105,48,0.5); border-radius: 16px; padding: 18px; position: absolute; bottom: -24px; left: -20px; right: -20px; box-shadow: 0 20px 45px rgba(0,0,0,0.5);" class="d-none d-sm-block">
            <div class="d-flex align-items-center justify-content-between mb-2">
              <span style="color: #fbc145; font-size: 12.5px; font-weight: 800;">
                <i class="fas fa-bolt me-1"></i> DIGIFY AI COPILOT — LIVE SIGNAL
              </span>
              <span class="badge bg-success" style="font-size: 10px; letter-spacing: 0.5px;">ACTIVE</span>
            </div>
            <p style="font-size: 13px; color: #e2e8f0; margin: 0; line-height: 1.45;">
              <strong style="color: #4ade80;">Smart Indent Created:</strong> Raw material stock for 2 active batch orders below buffer threshold. WhatsApp purchase order generated for manager 1-click approval.
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- SECTION 2: EXECUTIVE SUMMARY & THE DIGIFY DIFFERENCE -->
<section class="py-5" style="background: #f8fafc; border-bottom: 1px solid #e2e8f0;">
  <div class="container py-4">
    <div class="row align-items-center g-5">
      <div class="col-lg-6">
        <span class="sub-badge mb-2" style="background: rgba(224,105,48,0.1); color: #e06930; font-weight: 700; font-size: 12px; padding: 6px 18px; border-radius: 30px;">
          <i class="fas fa-lightbulb me-1"></i> THE ENTERPRISE PROBLEM
        </span>
        <h2 style="font-size: 34px; font-weight: 900; color: #0f172a;" class="mt-2 mb-3">
          Legacy ERPs Waste Time. Digify AI ERP Drives Profitability.
        </h2>
        <p style="font-size: 15.5px; color: #475569; line-height: 1.7;">
          Traditional ERP systems were built 20 years ago as glorified digital ledgers. They demand thousands of manual data entries every day, produce static end-of-month reports when it's too late to fix losses, and take 12 to 18 months to deploy.
        </p>
        <p style="font-size: 15.5px; color: #475569; line-height: 1.7;">
          <strong>Digify AI Cloud ERP is different.</strong> Built from the ground up with autonomous AI intelligence, it connects your factory floor, multi-location warehouses, billing terminals, and finance department in real time. It predicts bottlenecks before they occur, automates supplier reordering, and sends 1-click decision alerts directly to your phone.
        </p>
      </div>
      <div class="col-lg-6">
        <div class="p-4 bg-white rounded-4 shadow-sm border" style="border-color: #cbd5e1 !important;">
          <h4 style="font-size: 20px; font-weight: 800; color: #0f172a;" class="mb-3">
            <i class="fas fa-check-circle me-2 text-success"></i> Key Enterprise Benefits at a Glance
          </h4>
          <div class="d-flex align-items-start gap-3 mb-3">
            <div style="background: #eff6ff; color: #2563eb; width: 36px; height: 36px; border-radius: 10px; display: flex; align-items: center; justify-content: center; flex-shrink: 0; font-weight: 800;">1</div>
            <div>
              <h5 style="font-size: 16px; font-weight: 700; color: #0f172a; margin: 0;">Go Live in 48 Hours to 7 Days</h5>
              <p style="font-size: 13.5px; color: #64748b; margin: 2px 0 0;">Pre-configured industry workflows for Textile, Manufacturing, Retail &amp; Wholesale.</p>
            </div>
          </div>
          <div class="d-flex align-items-start gap-3 mb-3">
            <div style="background: #fff7ed; color: #ea580c; width: 36px; height: 36px; border-radius: 10px; display: flex; align-items: center; justify-content: center; flex-shrink: 0; font-weight: 800;">2</div>
            <div>
              <h5 style="font-size: 16px; font-weight: 700; color: #0f172a; margin: 0;">0% Financial &amp; GST Audit Errors</h5>
              <p style="font-size: 13.5px; color: #64748b; margin: 2px 0 0;">Automatic GSTR-1, GSTR-3B filings, NIC E-Way bills &amp; E-Invoicing built right in.</p>
            </div>
          </div>
          <div class="d-flex align-items-start gap-3 mb-3">
            <div style="background: #f0fdf4; color: #16a34a; width: 36px; height: 36px; border-radius: 10px; display: flex; align-items: center; justify-content: center; flex-shrink: 0; font-weight: 800;">3</div>
            <div>
              <h5 style="font-size: 16px; font-weight: 700; color: #0f172a; margin: 0;">Real-Time Multi-Plant &amp; Store Sync</h5>
              <p style="font-size: 13.5px; color: #64748b; margin: 2px 0 0;">Live inventory tracking across central warehouses, regional hubs, and retail outlets.</p>
            </div>
          </div>
          <div class="d-flex align-items-start gap-3">
            <div style="background: #faf5ff; color: #9333ea; width: 36px; height: 36px; border-radius: 10px; display: flex; align-items: center; justify-content: center; flex-shrink: 0; font-weight: 800;">4</div>
            <div>
              <h5 style="font-size: 16px; font-weight: 700; color: #0f172a; margin: 0;">Native WhatsApp AI Virtual Employees</h5>
              <p style="font-size: 13.5px; color: #64748b; margin: 2px 0 0;">Automate vendor purchase orders, customer reorders, invoice delivery, and daily P&amp;L briefings.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- SECTION 3: CORE ADVANTAGES & BUSINESS VALUE -->
<section id="ai-advantages" class="py-5" style="background: #ffffff;">
  <div class="container py-4">
    <div class="text-center mb-5">
      <span class="sub-badge" style="background: rgba(224,105,48,0.1); color: #e06930; font-weight: 700; font-size: 12px; padding: 6px 18px; border-radius: 30px;">
        <i class="fas fa-shield-alt me-1"></i> CORE ADVANTAGES
      </span>
      <h2 style="font-size: 38px; font-weight: 900; color: #0f172a; margin-top: 12px;">
        Why Business Leaders Choose <span style="color: #e06930;">Digify AI ERP</span>
      </h2>
      <p style="color: #64748b; max-width: 700px; margin: 8px auto 0; font-size: 16px;">
        Explore how our 6 core AI pillars eliminate operational friction, reduce inventory holding costs, and maximize business profit margins.
      </p>
    </div>

    <div class="row g-4">
      <!-- Advantage 1 -->
      <div class="col-lg-4 col-md-6">
        <div class="ai-feature-card">
          <div class="feature-icon-box" style="background: #fff7ed; color: #ea580c;">
            <i class="fas fa-brain"></i>
          </div>
          <h3 style="font-size: 21px; font-weight: 800; color: #0f172a;">24/7 AI Business Copilot</h3>
          <p style="font-size: 14.5px; color: #475569; line-height: 1.6;">
            Your autonomous operational assistant. Continuously checks production schedules, machine uptime, stock levels, and revenue leaks.
          </p>
          <ul style="font-size: 13.5px; color: #475569; padding-left: 18px;" class="mb-0">
            <li class="mb-1"><strong>Delay Alerts:</strong> Predicts production bottlenecks 48 hours early</li>
            <li class="mb-1"><strong>Daily WhatsApp Briefings:</strong> P&amp;L summary delivered to owner's phone</li>
            <li><strong>Leak Prevention:</strong> Flags unauthorized stock movements &amp; cost spikes</li>
          </ul>
        </div>
      </div>

      <!-- Advantage 2 -->
      <div class="col-lg-4 col-md-6">
        <div class="ai-feature-card">
          <div class="feature-icon-box" style="background: #f0f9ff; color: #0284c7;">
            <i class="fas fa-industry"></i>
          </div>
          <h3 style="font-size: 21px; font-weight: 800; color: #0f172a;">Multi-Stage Manufacturing &amp; BOM</h3>
          <p style="font-size: 14.5px; color: #475569; line-height: 1.6;">
            End-to-end shop floor control with multi-level Bill of Materials (BOM), sub-assembly routing, and batch costing.
          </p>
          <ul style="font-size: 13.5px; color: #475569; padding-left: 18px;" class="mb-0">
            <li class="mb-1"><strong>Auto-BOM Costing:</strong> Real-time material &amp; labor cost calculation</li>
            <li class="mb-1"><strong>Shop Floor WIP:</strong> Track job cards &amp; stage-wise work progress</li>
            <li><strong>Quality Control (QC):</strong> Defect logging &amp; scrap management</li>
          </ul>
        </div>
      </div>

      <!-- Advantage 3 -->
      <div class="col-lg-4 col-md-6">
        <div class="ai-feature-card">
          <div class="feature-icon-box" style="background: #f0fdf4; color: #16a34a;">
            <i class="fas fa-boxes-stacked"></i>
          </div>
          <h3 style="font-size: 21px; font-weight: 800; color: #0f172a;">Smart Inventory &amp; Reorder AI</h3>
          <p style="font-size: 14.5px; color: #475569; line-height: 1.6;">
            Never lose sales to stockouts or suffer working capital lockups in dead inventory.
          </p>
          <ul style="font-size: 13.5px; color: #475569; padding-left: 18px;" class="mb-0">
            <li class="mb-1"><strong>Dynamic Reordering:</strong> AI calculates reorder points based on seasonality</li>
            <li class="mb-1"><strong>Multi-Warehouse Sync:</strong> Live stock transfers across branches</li>
            <li><strong>Batch &amp; Expiry Tracking:</strong> FIFO/FEFO automated rotation</li>
          </ul>
        </div>
      </div>

      <!-- Advantage 4 -->
      <div class="col-lg-4 col-md-6">
        <div class="ai-feature-card">
          <div class="feature-icon-box" style="background: #faf5ff; color: #9333ea;">
            <i class="fas fa-file-invoice-dollar"></i>
          </div>
          <h3 style="font-size: 21px; font-weight: 800; color: #0f172a;">Autonomous GST Accounting</h3>
          <p style="font-size: 14.5px; color: #475569; line-height: 1.6;">
            Double-entry financial accounting integrated directly with sales, purchasing, and GST filing portals.
          </p>
          <ul style="font-size: 13.5px; color: #475569; padding-left: 18px;" class="mb-0">
            <li class="mb-1"><strong>1-Click E-Invoicing &amp; E-Way Bill:</strong> Direct NIC portal integration</li>
            <li class="mb-1"><strong>Auto-Reconciliation:</strong> Bank feeds &amp; GSTR-2A/2B match</li>
            <li><strong>Financial Reports:</strong> Real-time P&amp;L, Trial Balance &amp; Ledger</li>
          </ul>
        </div>
      </div>

      <!-- Advantage 5 -->
      <div class="col-lg-4 col-md-6">
        <div class="ai-feature-card">
          <div class="feature-icon-box" style="background: #fef2f2; color: #dc2626;">
            <i class="fas fa-chart-line"></i>
          </div>
          <h3 style="font-size: 21px; font-weight: 800; color: #0f172a;">Omnichannel &amp; B2B Distribution</h3>
          <p style="font-size: 14.5px; color: #475569; line-height: 1.6;">
            Seamlessly connect retail outlets, B2B wholesale portals, e-commerce, and field salesmen.
          </p>
          <ul style="font-size: 13.5px; color: #475569; padding-left: 18px;" class="mb-0">
            <li class="mb-1"><strong>Credit Limit Alerts:</strong> Prevent shipping to defaulted accounts</li>
            <li class="mb-1"><strong>Distributor Price Lists:</strong> Tiered pricing &amp; volume schemes</li>
            <li><strong>Salesman Order App:</strong> Mobile booking with geo-location tags</li>
          </ul>
        </div>
      </div>

      <!-- Advantage 6 -->
      <div class="col-lg-4 col-md-6">
        <div class="ai-feature-card">
          <div class="feature-icon-box" style="background: #ecfdf5; color: #059669;">
            <i class="fab fa-whatsapp"></i>
          </div>
          <h3 style="font-size: 21px; font-weight: 800; color: #0f172a;">WhatsApp AI Employees</h3>
          <p style="font-size: 14.5px; color: #475569; line-height: 1.6;">
            Deploy 24/7 AI virtual agents directly on WhatsApp to automate reorders, send PDF invoices, and process payments.
          </p>
          <ul style="font-size: 13.5px; color: #475569; padding-left: 18px;" class="mb-0">
            <li class="mb-1"><strong>WhatsApp B2B Ordering:</strong> Catalog browsing &amp; instant PO</li>
            <li class="mb-1"><strong>Payment Reminders:</strong> Automated payment link messaging</li>
            <li><strong>Customer Support AI:</strong> Instant order tracking &amp; query resolution</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- SECTION 4: DEEP DIVE INTO 8 CORE ERP MODULES -->
<section class="py-5" style="background: #f8fafc; border-top: 1px solid #e2e8f0; border-bottom: 1px solid #e2e8f0;">
  <div class="container py-4">
    <div class="text-center mb-5">
      <span class="sub-badge" style="background: rgba(15,23,42,0.06); color: #0f172a; font-weight: 700; font-size: 12px; padding: 6px 18px; border-radius: 30px;">
        <i class="fas fa-th-large me-1"></i> FULL MODULE BREAKDOWN
      </span>
      <h2 style="font-size: 36px; font-weight: 900; color: #0f172a; margin-top: 12px;">
        Complete 8-in-1 Enterprise ERP Architecture
      </h2>
      <p style="color: #64748b; max-width: 680px; margin: 8px auto 0; font-size: 16px;">
        Every module is deeply interconnected so data entered anywhere updates your entire enterprise ecosystem in real time.
      </p>
    </div>

    <div class="row g-4">
      <div class="col-lg-6">
        <div class="module-deep-card">
          <div class="d-flex align-items-center gap-3 mb-3">
            <div style="background: #e06930; color: #fff; width: 44px; height: 44px; border-radius: 12px; display: flex; align-items: center; justify-content: center; font-size: 20px;">
              <i class="fas fa-boxes-stacked"></i>
            </div>
            <div>
              <h4 style="font-size: 18px; font-weight: 800; color: #0f172a; margin: 0;">1. Smart Inventory &amp; Warehouse AI</h4>
              <span style="font-size: 12px; color: #e06930; font-weight: 700;">Multi-Warehouse &amp; Batch Control</span>
            </div>
          </div>
          <p style="font-size: 14px; color: #475569; line-height: 1.6;">
            Track raw materials, packaging, WIP, and finished goods across unlimited warehouses. Features automatic batch allocation, expiry tracking, barcode printing, and stock level variance alerts.
          </p>
        </div>
      </div>

      <div class="col-lg-6">
        <div class="module-deep-card">
          <div class="d-flex align-items-center gap-3 mb-3">
            <div style="background: #0284c7; color: #fff; width: 44px; height: 44px; border-radius: 12px; display: flex; align-items: center; justify-content: center; font-size: 20px;">
              <i class="fas fa-industry"></i>
            </div>
            <div>
              <h4 style="font-size: 18px; font-weight: 800; color: #0f172a; margin: 0;">2. Manufacturing &amp; Work Orders</h4>
              <span style="font-size: 12px; color: #0284c7; font-weight: 700;">BOM, Routing &amp; Shop Floor QC</span>
            </div>
          </div>
          <p style="font-size: 14px; color: #475569; line-height: 1.6;">
            Create multi-level BOMs, issue production work orders, monitor shop floor stage routing, manage sub-contractor job work challans, and enforce strict quality control checkpoints.
          </p>
        </div>
      </div>

      <div class="col-lg-6">
        <div class="module-deep-card">
          <div class="d-flex align-items-center gap-3 mb-3">
            <div style="background: #16a34a; color: #fff; width: 44px; height: 44px; border-radius: 12px; display: flex; align-items: center; justify-content: center; font-size: 20px;">
              <i class="fas fa-file-invoice-dollar"></i>
            </div>
            <div>
              <h4 style="font-size: 18px; font-weight: 800; color: #0f172a; margin: 0;">3. Accounting &amp; GST Compliance</h4>
              <span style="font-size: 12px; color: #16a34a; font-weight: 700;">Double-Entry Ledger &amp; Tax Portal</span>
            </div>
          </div>
          <p style="font-size: 14px; color: #475569; line-height: 1.6;">
            Complete financial ledgers, auto-reconciliation of bank feeds, 1-click GSTR-1 &amp; GSTR-3B filings, direct NIC E-Invoicing &amp; E-Way Bill generation with zero manual errors.
          </p>
        </div>
      </div>

      <div class="col-lg-6">
        <div class="module-deep-card">
          <div class="d-flex align-items-center gap-3 mb-3">
            <div style="background: #9333ea; color: #fff; width: 44px; height: 44px; border-radius: 12px; display: flex; align-items: center; justify-content: center; font-size: 20px;">
              <i class="fas fa-cart-flatbed"></i>
            </div>
            <div>
              <h4 style="font-size: 18px; font-weight: 800; color: #0f172a; margin: 0;">4. Purchase &amp; Supplier Management</h4>
              <span style="font-size: 12px; color: #9333ea; font-weight: 700;">RFQ, Vendor Audit &amp; Landed Cost</span>
            </div>
          </div>
          <p style="font-size: 14px; color: #475569; line-height: 1.6;">
            Automate purchase indents based on sales orders, compare supplier RFQ quotes, track vendor delivery performance scores, and calculate landed costs including customs &amp; freight.
          </p>
        </div>
      </div>

      <div class="col-lg-6">
        <div class="module-deep-card">
          <div class="d-flex align-items-center gap-3 mb-3">
            <div style="background: #dc2626; color: #fff; width: 44px; height: 44px; border-radius: 12px; display: flex; align-items: center; justify-content: center; font-size: 20px;">
              <i class="fas fa-cash-register"></i>
            </div>
            <div>
              <h4 style="font-size: 18px; font-weight: 800; color: #0f172a; margin: 0;">5. Retail POS &amp; Omnichannel</h4>
              <span style="font-size: 12px; color: #dc2626; font-weight: 700;">3-Second Checkout &amp; Loyalty</span>
            </div>
          </div>
          <p style="font-size: 14px; color: #475569; line-height: 1.6;">
            Ultra-fast retail billing counters with barcode scanning, weighing scale sync, offline billing backup, centralized price promotions, and customer loyalty rewards.
          </p>
        </div>
      </div>

      <div class="col-lg-6">
        <div class="module-deep-card">
          <div class="d-flex align-items-center gap-3 mb-3">
            <div style="background: #059669; color: #fff; width: 44px; height: 44px; border-radius: 12px; display: flex; align-items: center; justify-content: center; font-size: 20px;">
              <i class="fas fa-users-gear"></i>
            </div>
            <div>
              <h4 style="font-size: 18px; font-weight: 800; color: #0f172a; margin: 0;">6. CRM &amp; Lead Intelligence</h4>
              <span style="font-size: 12px; color: #059669; font-weight: 700;">Sales Pipeline &amp; Follow-up Bot</span>
            </div>
          </div>
          <p style="font-size: 14px; color: #475569; line-height: 1.6;">
            Track customer lead pipelines from inquiry to closure. Automated WhatsApp follow-up messaging, quotation generation, salesman targets, and credit limit enforcement.
          </p>
        </div>
      </div>

      <div class="col-lg-6">
        <div class="module-deep-card">
          <div class="d-flex align-items-center gap-3 mb-3">
            <div style="background: #ea580c; color: #fff; width: 44px; height: 44px; border-radius: 12px; display: flex; align-items: center; justify-content: center; font-size: 20px;">
              <i class="fas fa-user-check"></i>
            </div>
            <div>
              <h4 style="font-size: 18px; font-weight: 800; color: #0f172a; margin: 0;">7. HR, Staff &amp; Payroll Management</h4>
              <span style="font-size: 12px; color: #ea580c; font-weight: 700;">Biometric Attendance &amp; Salary</span>
            </div>
          </div>
          <p style="font-size: 14px; color: #475569; line-height: 1.6;">
            Biometric thumb &amp; face attendance integration, automated monthly salary slip calculation, PF/ESI statutory compliance deductions, and staff advance loan tracking.
          </p>
        </div>
      </div>

      <div class="col-lg-6">
        <div class="module-deep-card">
          <div class="d-flex align-items-center gap-3 mb-3">
            <div style="background: #2563eb; color: #fff; width: 44px; height: 44px; border-radius: 12px; display: flex; align-items: center; justify-content: center; font-size: 20px;">
              <i class="fas fa-screwdriver-wrench"></i>
            </div>
            <div>
              <h4 style="font-size: 18px; font-weight: 800; color: #0f172a; margin: 0;">8. Field Service &amp; Asset Management</h4>
              <span style="font-size: 12px; color: #2563eb; font-weight: 700;">Serial Warranty &amp; AMC Renewal</span>
            </div>
          </div>
          <p style="font-size: 14px; color: #475569; line-height: 1.6;">
            Manage Serial/IMEI warranties for machinery &amp; electronics. Dispatch field service engineers, manage spare parts RMA inventory, and automate annual AMC contract renewals.
          </p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- SECTION 5: HOW DIGIFY AI ERP WORKS (STEP-BY-STEP WORKFLOW) -->
<section class="py-5" style="background: #ffffff;">
  <div class="container py-4">
    <div class="text-center mb-5">
      <span class="sub-badge" style="background: rgba(15,23,42,0.06); color: #0f172a; font-weight: 700; font-size: 12px; padding: 6px 18px; border-radius: 30px;">
        <i class="fas fa-cogs me-1"></i> HOW IT WORKS
      </span>
      <h2 style="font-size: 36px; font-weight: 900; color: #0f172a; margin-top: 12px;">
        End-to-End Autonomous Business Workflow
      </h2>
      <p style="color: #64748b; max-width: 650px; margin: 8px auto 0; font-size: 16px;">
        See how Digify AI ERP connects every department from procurement to final ledger entry automatically.
      </p>
    </div>

    <div class="row g-4">
      <div class="col-md-6">
        <div class="advantage-step-box">
          <div class="d-flex align-items-center gap-3 mb-2">
            <span class="badge" style="background: #e06930; color: #fff; font-size: 14px; padding: 6px 12px;">STEP 1</span>
            <h4 style="font-size: 18px; font-weight: 800; color: #0f172a; margin: 0;">Sales Demand &amp; AI Forecast</h4>
          </div>
          <p style="font-size: 14px; color: #475569; margin: 0;">
            Sales orders from WhatsApp, retail POS, or B2B distributors automatically feed into the AI demand engine. Inventory buffer is evaluated instantly.
          </p>
        </div>
      </div>

      <div class="col-md-6">
        <div class="advantage-step-box">
          <div class="d-flex align-items-center gap-3 mb-2">
            <span class="badge" style="background: #2563eb; color: #fff; font-size: 14px; padding: 6px 12px;">STEP 2</span>
            <h4 style="font-size: 18px; font-weight: 800; color: #0f172a; margin: 0;">Automated Purchase &amp; BOM Costing</h4>
          </div>
          <p style="font-size: 14px; color: #475569; margin: 0;">
            If raw material is missing, AI creates supplier indents with 1-click manager approval. Multi-level BOM calculates precise batch production costs.
          </p>
        </div>
      </div>

      <div class="col-md-6">
        <div class="advantage-step-box">
          <div class="d-flex align-items-center gap-3 mb-2">
            <span class="badge" style="background: #16a34a; color: #fff; font-size: 14px; padding: 6px 12px;">STEP 3</span>
            <h4 style="font-size: 18px; font-weight: 800; color: #0f172a; margin: 0;">Shop Floor Production &amp; QC Check</h4>
          </div>
          <p style="font-size: 14px; color: #475569; margin: 0;">
            Work orders are issued to shop floor machines. Stage-by-stage WIP tracking and Quality Control (QC) ensure zero defective goods leave the factory.
          </p>
        </div>
      </div>

      <div class="col-md-6">
        <div class="advantage-step-box">
          <div class="d-flex align-items-center gap-3 mb-2">
            <span class="badge" style="background: #9333ea; color: #fff; font-size: 14px; padding: 6px 12px;">STEP 4</span>
            <h4 style="font-size: 18px; font-weight: 800; color: #0f172a; margin: 0;">Dispatch, GST E-Invoicing &amp; P&amp;L Sync</h4>
          </div>
          <p style="font-size: 14px; color: #475569; margin: 0;">
            Finished goods are dispatched with auto-generated E-Way bills &amp; E-Invoices. General ledger, P&amp;L statement, and customer ledgers update automatically.
          </p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- SECTION 6: COMPARISON TABLE SECTION -->
<section class="py-5" style="background: #f8fafc; border-top: 1px solid #e2e8f0;">
  <div class="container py-4">
    <div class="text-center mb-5">
      <h2 style="font-size: 34px; font-weight: 900; color: #0f172a;">
        Digify AI ERP vs. Legacy Traditional ERP Systems
      </h2>
      <p style="color: #64748b;">Compare Digify Cloud AI Platform with traditional legacy ERP software.</p>
    </div>

    <div class="table-responsive shadow-sm rounded-4 border bg-white">
      <table class="table align-middle mb-0" style="font-size: 14.5px;">
        <thead style="background: #0f172a; color: #ffffff;">
          <tr>
            <th class="p-4" style="width: 35%;">Key Operational Metric</th>
            <th class="p-4 text-center" style="width: 32%; background: #e06930; color: #ffffff;">Digify AI Cloud ERP</th>
            <th class="p-4 text-center" style="width: 33%;">Legacy Generic ERPs</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class="p-4 fw-bold text-dark">Deployment &amp; Go-Live Time</td>
            <td class="p-4 text-center fw-bold text-success"><i class="fas fa-check-circle me-1"></i> 48 Hours to 7 Days</td>
            <td class="p-4 text-center text-muted"><i class="fas fa-times-circle me-1"></i> 6 to 18 Months</td>
          </tr>
          <tr>
            <td class="p-4 fw-bold text-dark">24/7 AI Business Intelligence</td>
            <td class="p-4 text-center fw-bold text-success"><i class="fas fa-check-circle me-1"></i> Built-in Autonomous AI Signals</td>
            <td class="p-4 text-center text-muted"><i class="fas fa-times-circle me-1"></i> None (Static Monthly Reports)</td>
          </tr>
          <tr>
            <td class="p-4 fw-bold text-dark">GST &amp; E-Invoicing Portal</td>
            <td class="p-4 text-center fw-bold text-success"><i class="fas fa-check-circle me-1"></i> 1-Click Direct NIC Integration</td>
            <td class="p-4 text-center text-muted"><i class="fas fa-times-circle me-1"></i> Manual CSV Exports &amp; Uploads</td>
          </tr>
          <tr>
            <td class="p-4 fw-bold text-dark">WhatsApp Native Integration</td>
            <td class="p-4 text-center fw-bold text-success"><i class="fas fa-check-circle me-1"></i> Native AI Sales &amp; Support Agents</td>
            <td class="p-4 text-center text-muted"><i class="fas fa-times-circle me-1"></i> Third-Party Costly Plugin Needed</td>
          </tr>
          <tr>
            <td class="p-4 fw-bold text-dark">Pricing Transparency</td>
            <td class="p-4 text-center fw-bold text-success"><i class="fas fa-check-circle me-1"></i> Affordable Monthly Subscriptions</td>
            <td class="p-4 text-center text-muted"><i class="fas fa-times-circle me-1"></i> Massive Upfront License Fees</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</section>

<!-- SECTION 7: ENTERPRISE FAQ SECTION -->
<section class="py-5" style="background: #ffffff;">
  <div class="container py-4">
    <div class="text-center mb-5">
      <span class="sub-badge" style="background: rgba(224,105,48,0.1); color: #e06930; font-weight: 700; font-size: 12px; padding: 6px 18px; border-radius: 30px;">
        <i class="fas fa-question-circle me-1"></i> FREQUENTLY ASKED QUESTIONS
      </span>
      <h2 style="font-size: 34px; font-weight: 900; color: #0f172a; margin-top: 12px;">
        Got Questions About Digify AI Cloud ERP?
      </h2>
      <p style="color: #64748b;">Find clear answers to common questions about deployment, data migration, and security.</p>
    </div>

    <div class="row justify-content-center">
      <div class="col-lg-10">
        <div class="faq-accordion-item">
          <div class="faq-question">
            <span>1. How fast can our business migrate to Digify AI Cloud ERP?</span>
            <i class="fas fa-chevron-down text-muted"></i>
          </div>
          <div class="faq-answer">
            Most businesses go live within <strong>48 hours to 7 days</strong>. We provide pre-built data migration templates for Tally, Busy, SAP, and Excel spreadsheets to import your item master, customer ledgers, and opening stock seamlessly.
          </div>
        </div>

        <div class="faq-accordion-item">
          <div class="faq-question">
            <span>2. Does Digify AI ERP support multi-plant manufacturing and multi-warehouse stock?</span>
            <i class="fas fa-chevron-down text-muted"></i>
          </div>
          <div class="faq-answer">
            Yes! Digify AI ERP supports unlimited manufacturing plants, sub-contractor job-work locations, central warehouses, and retail outlets with real-time stock transfer challans and inter-branch accounting.
          </div>
        </div>

        <div class="faq-accordion-item">
          <div class="faq-question">
            <span>3. How does the 24/7 WhatsApp AI Copilot work for business owners?</span>
            <i class="fas fa-chevron-down text-muted"></i>
          </div>
          <div class="faq-answer">
            The AI Copilot connects directly to your ERP database. It sends automated delay risk alerts when raw materials drop below reorder buffers, sends 1-click purchase order approval requests to managers, and delivers an evening P&amp;L audio/text briefing to leadership on WhatsApp.
          </div>
        </div>

        <div class="faq-accordion-item">
          <div class="faq-question">
            <span>4. Is Digify AI ERP compliant with GST, E-Invoicing, and E-Way Bill regulations in India?</span>
            <i class="fas fa-chevron-down text-muted"></i>
          </div>
          <div class="faq-answer">
            100% compliant. Digify is directly integrated with the Government NIC GSP server, enabling 1-click E-Invoicing generation with QR codes, instant E-Way bill creation, and automated GSTR-1 &amp; GSTR-3B return filings.
          </div>
        </div>

        <div class="faq-accordion-item">
          <div class="faq-question">
            <span>5. Can Digify AI ERP be customized for specialized industry workflows?</span>
            <i class="fas fa-chevron-down text-muted"></i>
          </div>
          <div class="faq-answer">
            Yes! We offer pre-built industry modules for Textile &amp; Garments, Pharma &amp; Chemicals, Electronics Assembly, FMCG Wholesale, Retail POS Chains, and After-Sales Warranty Service.
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- SECTION 8: CALL TO ACTION -->
<section class="py-5" style="background: linear-gradient(135deg, #0f172a 0%, #1e293b 100%); color: #ffffff;">
  <div class="container py-4 text-center">
    <span class="hero-badge-pill mb-3">
      <i class="fas fa-rocket"></i> TRANSFORM YOUR BUSINESS TODAY
    </span>
    <h2 style="font-size: 38px; font-weight: 900; margin-bottom: 16px;">
      Ready to Experience Digify AI ERP Live?
    </h2>
    <p style="font-size: 17px; color: #cbd5e1; max-width: 600px; margin: 0 auto 32px;">
      Schedule a personalized live demo with our solution architects today and see Digify AI ERP in action for your business.
    </p>
    <a href="contact-us.php" class="btn btn-demo-primary btn-lg" data-bs-toggle="modal" data-bs-target="#trialModal">
      <i class="fas fa-calendar-check me-2"></i> Schedule Free Live Demo
    </a>
  </div>
</section>

<?php include 'footer.php'; ?>
