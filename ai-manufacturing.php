<?php
  include 'db.php';
  include 'fetch_meta.php';

  $pageMeta = getPageMeta('ai-manufacturing');
  $pageTitle = $pageMeta['page_title'] ?? 'Smart Manufacturing AI ERP Software – Digify Soft Solutions';
  $pageDescription = $pageMeta['page_description'] ?? 'Digify Smart Manufacturing AI ERP software automates factory floor production, BOM costing, quality control, machine yield telemetry, and WIP inventory tracking for discrete & process manufacturers.';
  $pageKeywords = $pageMeta['page_keywords'] ?? 'Manufacturing ERP, Factory Software, BOM Routing, Quality Control, Digify Soft Solutions';

  include 'top.php';
  include 'header.php';
?>

<!-- Styling for AI Manufacturing Page -->
<style>
  .mfg-hero-sec {
    background: linear-gradient(135deg, #0f172a 0%, #1e293b 70%, #0f172a 100%);
    color: #ffffff;
    padding: 95px 0 85px;
    position: relative;
    overflow: hidden;
  }
  .mfg-hero-title {
    font-size: clamp(34px, 4.8vw, 56px);
    font-weight: 900;
    line-height: 1.12;
    letter-spacing: -1px;
  }
  .mfg-hero-title span {
    background: linear-gradient(135deg, #e06930 0%, #fbc145 100%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
  }
  .mfg-card {
    background: #ffffff;
    border: 1px solid #e2e8f0;
    border-radius: 18px;
    padding: 28px;
    height: 100%;
    transition: all 0.3s ease;
    box-shadow: 0 4px 15px rgba(0,0,0,0.03);
  }
  .mfg-card:hover {
    transform: translateY(-6px);
    border-color: #e06930;
    box-shadow: 0 12px 30px rgba(224, 105, 48, 0.12);
  }
  .mfg-icon-wrap {
    width: 56px;
    height: 56px;
    border-radius: 14px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 24px;
    margin-bottom: 20px;
  }
  .mfg-badge {
    background: rgba(224, 105, 48, 0.15);
    border: 1px solid rgba(224, 105, 48, 0.4);
    color: #fbc145;
    font-size: 13px;
    font-weight: 700;
    padding: 6px 18px;
    border-radius: 30px;
    display: inline-flex;
    align-items: center;
    gap: 8px;
  }
  .workflow-card-mfg {
    background: #ffffff;
    border-left: 4px solid #0284c7;
    border-radius: 14px;
    padding: 24px;
    box-shadow: 0 4px 15px rgba(0,0,0,0.02);
    margin-bottom: 20px;
  }
</style>

<!-- SECTION 1: HERO SECTION -->
<section class="mfg-hero-sec">
  <div class="container">
    <div class="row align-items-center g-5">
      <div class="col-lg-7">
        <div class="mfg-badge mb-3">
          <i class="fas fa-industry"></i> SMART MANUFACTURING AI SUITE 2026
        </div>
        <h1 class="mfg-hero-title mb-4">
          Intelligent Factory Floor &amp; <span>Manufacturing AI ERP</span>
        </h1>
        <p style="font-size: 17.5px; color: #cbd5e1; line-height: 1.65;" class="mb-4">
          Transform your factory floor operations. Digify Manufacturing AI unifies Multi-Level Bill of Materials (BOM), Work-In-Progress (WIP) tracking, machine yield telemetry, automated Quality Control (QC), and sub-contractor job-work billing into one powerful cloud ERP.
        </p>
        <div class="d-flex flex-wrap gap-3 mb-4">
          <a href="contact-us.php" class="btn btn-hero-primary" data-bs-toggle="modal" data-bs-target="#trialModal" style="background: linear-gradient(135deg, #e06930, #d05820); color: #fff; font-weight: 700; padding: 15px 34px; border-radius: 50px;">
            <i class="fas fa-calendar-check me-2"></i> Book Factory Demo
          </a>
          <a href="#mfg-modules" class="btn btn-hero-secondary" style="background: rgba(255,255,255,0.1); color: #fff; border: 1px solid rgba(255,255,255,0.25); font-weight: 600; padding: 15px 30px; border-radius: 50px;">
            <i class="fas fa-microchip me-2"></i> View AI Modules
          </a>
        </div>
        <div class="row g-3 mt-2">
          <div class="col-sm-4">
            <div style="background: rgba(255,255,255,0.06); border: 1px solid rgba(255,255,255,0.15); border-radius: 12px; padding: 16px; text-align: center;">
              <div style="font-size: 26px; font-weight: 900; color: #fbc145;">40%</div>
              <div style="font-size: 12.5px; color: #cbd5e1;">Scrap &amp; Waste Reduction</div>
            </div>
          </div>
          <div class="col-sm-4">
            <div style="background: rgba(255,255,255,0.06); border: 1px solid rgba(255,255,255,0.15); border-radius: 12px; padding: 16px; text-align: center;">
              <div style="font-size: 26px; font-weight: 900; color: #fbc145;">99.8%</div>
              <div style="font-size: 12.5px; color: #cbd5e1;">QC Inspection Pass Rate</div>
            </div>
          </div>
          <div class="col-sm-4">
            <div style="background: rgba(255,255,255,0.06); border: 1px solid rgba(255,255,255,0.15); border-radius: 12px; padding: 16px; text-align: center;">
              <div style="font-size: 26px; font-weight: 900; color: #fbc145;">3x</div>
              <div style="font-size: 12.5px; color: #cbd5e1;">Factory Floor Throughput</div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-5">
        <img src="assets/images/ai_erp_banner_2.jpg" alt="Smart Manufacturing AI" class="img-fluid rounded-4 shadow-lg border border-secondary" style="border-color: rgba(255,255,255,0.15) !important;">
      </div>
    </div>
  </div>
</section>

<!-- SECTION 2: INDUSTRY 4.0 MANUFACTURING MODULES -->
<section id="mfg-modules" class="py-5" style="background: #ffffff;">
  <div class="container py-4">
    <div class="text-center mb-5">
      <span class="sub-badge" style="background: rgba(224,105,48,0.1); color: #e06930; font-weight: 700; font-size: 12px; padding: 6px 18px; border-radius: 30px;">
        <i class="fas fa-microchip me-1"></i> INDUSTRY 4.0 CAPABILITIES
      </span>
      <h2 style="font-size: 36px; font-weight: 900; color: #0f172a; margin-top: 12px;">
        Comprehensive Manufacturing ERP Capabilities
      </h2>
      <p style="color: #64748b; max-width: 680px; margin: 8px auto 0; font-size: 16px;">
        Built specifically for discrete manufacturing, process chemical plants, garment factories, electronics assembly lines, and industrial fabricators.
      </p>
    </div>

    <div class="row g-4">
      <!-- Module 1 -->
      <div class="col-lg-4 col-md-6">
        <div class="mfg-card">
          <div class="mfg-icon-wrap" style="background: #fff7ed; color: #ea580c;">
            <i class="fas fa-sitemap"></i>
          </div>
          <h3 style="font-size: 20px; font-weight: 800; color: #0f172a;">Multi-Level BOM &amp; Recipe Management</h3>
          <p style="font-size: 14px; color: #475569; line-height: 1.6;">
            Define complex raw material requirements, scrap percentages, and multi-stage sub-assemblies. Auto-recalculates batch costs when raw material prices fluctuate.
          </p>
          <ul style="font-size: 13px; color: #64748b; padding-left: 18px;" class="mb-0">
            <li>Dynamic material yield &amp; scrap tolerance</li>
            <li>Alternative raw material substitution AI</li>
            <li>Revision tracking &amp; version control</li>
          </ul>
        </div>
      </div>

      <!-- Module 2 -->
      <div class="col-lg-4 col-md-6">
        <div class="mfg-card">
          <div class="mfg-icon-wrap" style="background: #f0f9ff; color: #0284c7;">
            <i class="fas fa-list-check"></i>
          </div>
          <h3 style="font-size: 20px; font-weight: 800; color: #0f172a;">Shop Floor Work-In-Progress (WIP)</h3>
          <p style="font-size: 14px; color: #475569; line-height: 1.6;">
            Track work orders across cutting, welding, dyeing, assembly, and packaging stages. Identify production bottlenecks in real time.
          </p>
          <ul style="font-size: 13px; color: #64748b; padding-left: 18px;" class="mb-0">
            <li>Barcode &amp; QR job card tracking</li>
            <li>Machine stage routing &amp; operator logs</li>
            <li>Real-time work order status dashboard</li>
          </ul>
        </div>
      </div>

      <!-- Module 3 -->
      <div class="col-lg-4 col-md-6">
        <div class="mfg-card">
          <div class="mfg-icon-wrap" style="background: #f0fdf4; color: #16a34a;">
            <i class="fas fa-clipboard-check"></i>
          </div>
          <h3 style="font-size: 20px; font-weight: 800; color: #0f172a;">Automated Quality Control (QC)</h3>
          <p style="font-size: 14px; color: #475569; line-height: 1.6;">
            Enforce mandatory quality inspection checkpoints at raw material arrival, in-process manufacturing, and pre-dispatch final audit.
          </p>
          <ul style="font-size: 13px; color: #64748b; padding-left: 18px;" class="mb-0">
            <li>Pass/fail tolerance parameter checks</li>
            <li>Rework vs Scrap allocation tags</li>
            <li>Supplier defect scorecards &amp; rating</li>
          </ul>
        </div>
      </div>

      <!-- Module 4 -->
      <div class="col-lg-4 col-md-6">
        <div class="mfg-card">
          <div class="mfg-icon-wrap" style="background: #faf5ff; color: #9333ea;">
            <i class="fas fa-truck-pickup"></i>
          </div>
          <h3 style="font-size: 20px; font-weight: 800; color: #0f172a;">Job-Work &amp; Sub-Contractor Portal</h3>
          <p style="font-size: 14px; color: #475569; line-height: 1.6;">
            Seamlessly issue raw materials to external job-work vendors, track returned semi-finished goods, and calculate vendor labor bills.
          </p>
          <ul style="font-size: 13px; color: #64748b; padding-left: 18px;" class="mb-0">
            <li>Job-work challan &amp; material tracking</li>
            <li>Process loss reconciliation</li>
            <li>Vendor payment &amp; credit control</li>
          </ul>
        </div>
      </div>

      <!-- Module 5 -->
      <div class="col-lg-4 col-md-6">
        <div class="mfg-card">
          <div class="mfg-icon-wrap" style="background: #fef2f2; color: #dc2626;">
            <i class="fas fa-boxes-packing"></i>
          </div>
          <h3 style="font-size: 20px; font-weight: 800; color: #0f172a;">Batch Costing &amp; Landed Expenses</h3>
          <p style="font-size: 14px; color: #475569; line-height: 1.6;">
            Calculate exact per-unit production cost by combining raw material, electricity, machine depreciation, labor overheads, and freight.
          </p>
          <ul style="font-size: 13px; color: #64748b; padding-left: 18px;" class="mb-0">
            <li>Actual vs Standard cost variance reports</li>
            <li>Landed cost allocation on imports</li>
            <li>Margin analysis by finished product SKU</li>
          </ul>
        </div>
      </div>

      <!-- Module 6 -->
      <div class="col-lg-4 col-md-6">
        <div class="mfg-card">
          <div class="mfg-icon-wrap" style="background: #ecfdf5; color: #059669;">
            <i class="fas fa-plug-circle-bolt"></i>
          </div>
          <h3 style="font-size: 20px; font-weight: 800; color: #0f172a;">Predictive Machine Telemetry AI</h3>
          <p style="font-size: 14px; color: #475569; line-height: 1.6;">
            Monitor machine operating hours, downtime logs, and preventative maintenance schedules to avoid expensive breakdowns.
          </p>
          <ul style="font-size: 13px; color: #64748b; padding-left: 18px;" class="mb-0">
            <li>Machine uptime &amp; OEE analytics</li>
            <li>Preventative service reminders</li>
            <li>Tooling &amp; spare part inventory buffer</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- SECTION 3: STEP-BY-STEP FACTORY WORKFLOW -->
<section class="py-5" style="background: #f8fafc; border-top: 1px solid #e2e8f0; border-bottom: 1px solid #e2e8f0;">
  <div class="container py-4">
    <div class="text-center mb-5">
      <span class="sub-badge" style="background: rgba(15,23,42,0.06); color: #0f172a; font-weight: 700; font-size: 12px; padding: 6px 18px; border-radius: 30px;">
        <i class="fas fa-diagram-project me-1"></i> FACTORY WORKFLOW
      </span>
      <h2 style="font-size: 36px; font-weight: 900; color: #0f172a; margin-top: 12px;">
        How Digify AI Manages Your Factory Floor
      </h2>
      <p style="color: #64748b; max-width: 650px; margin: 8px auto 0; font-size: 16px;">
        From purchase order indenting to final quality check and dispatch.
      </p>
    </div>

    <div class="row g-4">
      <div class="col-md-6">
        <div class="workflow-card-mfg">
          <div class="d-flex align-items-center gap-3 mb-2">
            <span class="badge" style="background: #0284c7; color: #fff; font-size: 13px; padding: 6px 12px;">STAGE 1</span>
            <h4 style="font-size: 18px; font-weight: 800; color: #0f172a; margin: 0;">Sales Order &amp; Material Planning (MRP)</h4>
          </div>
          <p style="font-size: 14px; color: #475569; margin: 0;">
            Incoming customer sales orders automatically trigger Bill of Materials (BOM) explosion. AI identifies raw material shortfalls and auto-generates purchase indents.
          </p>
        </div>
      </div>

      <div class="col-md-6">
        <div class="workflow-card-mfg">
          <div class="d-flex align-items-center gap-3 mb-2">
            <span class="badge" style="background: #ea580c; color: #fff; font-size: 13px; padding: 6px 12px;">STAGE 2</span>
            <h4 style="font-size: 18px; font-weight: 800; color: #0f172a; margin: 0;">Work Order Dispatch &amp; Job Cards</h4>
          </div>
          <p style="font-size: 14px; color: #475569; margin: 0;">
            Work orders are released to machine centers with barcoded job cards. Operators scan QR codes at each station to update stage-wise Work-In-Progress (WIP).
          </p>
        </div>
      </div>

      <div class="col-md-6">
        <div class="workflow-card-mfg">
          <div class="d-flex align-items-center gap-3 mb-2">
            <span class="badge" style="background: #16a34a; color: #fff; font-size: 13px; padding: 6px 12px;">STAGE 3</span>
            <h4 style="font-size: 18px; font-weight: 800; color: #0f172a; margin: 0;">In-Line &amp; Final Quality Control (QC)</h4>
          </div>
          <p style="font-size: 14px; color: #475569; margin: 0;">
            Inspectors log quality parameters directly into tablets. Rejection items are assigned to scrap or rework logs before items proceed to finished goods warehouse.
          </p>
        </div>
      </div>

      <div class="col-md-6">
        <div class="workflow-card-mfg">
          <div class="d-flex align-items-center gap-3 mb-2">
            <span class="badge" style="background: #9333ea; color: #fff; font-size: 13px; padding: 6px 12px;">STAGE 4</span>
            <h4 style="font-size: 18px; font-weight: 800; color: #0f172a; margin: 0;">Dispatch, GST E-Way Bill &amp; Cost Variance</h4>
          </div>
          <p style="font-size: 14px; color: #475569; margin: 0;">
            Finished goods are packed, weighed, and dispatched with instant E-Way bills &amp; E-Invoices. AI computes actual vs standard batch cost variance for P&amp;L analysis.
          </p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- SECTION 4: INDUSTRY VERTICAL USE CASES -->
<section class="py-5" style="background: #ffffff;">
  <div class="container py-4">
    <div class="text-center mb-5">
      <h2 style="font-size: 34px; font-weight: 900; color: #0f172a;">
        Tailored Solutions for Specialized Manufacturing Industries
      </h2>
      <p style="color: #64748b;">Pre-configured workflows tailored to your specific manufacturing vertical.</p>
    </div>

    <div class="row g-4">
      <div class="col-md-4">
        <div class="p-4 rounded-4 border bg-white h-100 shadow-sm">
          <div class="d-flex align-items-center gap-3 mb-3">
            <i class="fas fa-shirt text-primary" style="font-size: 26px;"></i>
            <h4 style="font-size: 18px; font-weight: 800; color: #0f172a; margin: 0;">Textile &amp; Garments</h4>
          </div>
          <p style="font-size: 13.5px; color: #475569; line-height: 1.6;">
            Fabric roll inventory, color-size matrix, dyeing batch recipe, embroidery job work challans, and stitched garment packing list generation.
          </p>
        </div>
      </div>

      <div class="col-md-4">
        <div class="p-4 rounded-4 border bg-white h-100 shadow-sm">
          <div class="d-flex align-items-center gap-3 mb-3">
            <i class="fas fa-flask text-success" style="font-size: 26px;"></i>
            <h4 style="font-size: 18px; font-weight: 800; color: #0f172a; margin: 0;">Chemicals &amp; Pharma</h4>
          </div>
          <p style="font-size: 13.5px; color: #475569; line-height: 1.6;">
            Active Pharmaceutical Ingredient (API) batch tracking, COA quality compliance certificates, expiry date control, and excise reporting.
          </p>
        </div>
      </div>

      <div class="col-md-4">
        <div class="p-4 rounded-4 border bg-white h-100 shadow-sm">
          <div class="d-flex align-items-center gap-3 mb-3">
            <i class="fas fa-gears text-warning" style="font-size: 26px;"></i>
            <h4 style="font-size: 18px; font-weight: 800; color: #0f172a; margin: 0;">Industrial Equipment</h4>
          </div>
          <p style="font-size: 13.5px; color: #475569; line-height: 1.6;">
            Serial number tracking, assembly sub-parts, drawing revision control, raw metal weight calculations, and custom engineering job cards.
          </p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- SECTION 5: CALL TO ACTION -->
<section class="py-5" style="background: linear-gradient(135deg, #0f172a 0%, #1e293b 100%); color: #ffffff;">
  <div class="container py-4 text-center">
    <h2 style="font-size: 36px; font-weight: 900; margin-bottom: 16px;">
      Upgrade Your Factory Floor to Digify Smart Manufacturing AI
    </h2>
    <p style="font-size: 16px; color: #cbd5e1; max-width: 600px; margin: 0 auto 30px;">
      Book a dedicated factory demo with our manufacturing solution architects today.
    </p>
    <a href="contact-us.php" class="btn btn-hero-primary btn-lg" data-bs-toggle="modal" data-bs-target="#trialModal" style="background: linear-gradient(135deg, #e06930, #d05820); color: #fff; font-weight: 700; padding: 15px 36px; border-radius: 50px;">
      <i class="fas fa-calendar-check me-2"></i> Schedule Factory Live Demo
    </a>
  </div>
</section>

<?php include 'footer.php'; ?>