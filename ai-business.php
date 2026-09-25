<?php
  include 'db.php';
  include 'fetch_meta.php';

  $pageMeta = getPageMeta('ai-business');
  $pageTitle = $pageMeta['page_title'] ?? 'AI for Business & AI CRM Automation – Digify Soft Solutions';
  $pageDescription = $pageMeta['page_description'] ?? 'Deploy 24/7 WhatsApp AI Sales Representatives, Automated CRM Lead Intelligence, AI Service Agents, and Executive Daily P&L Briefings with Digify Soft Solutions.';
  $pageKeywords = $pageMeta['page_keywords'] ?? 'AI for Business, WhatsApp AI Agents, AI CRM, Lead Automation, Digify Soft Solutions';

  include 'top.php';
  include 'header.php';
?>

<!-- Styling for AI Business Page -->
<style>
  .aib-hero-sec {
    background: linear-gradient(135deg, #0f172a 0%, #1e293b 70%, #0f172a 100%);
    color: #ffffff;
    padding: 95px 0 85px;
    position: relative;
    overflow: hidden;
  }
  .aib-hero-title {
    font-size: clamp(34px, 4.8vw, 56px);
    font-weight: 900;
    line-height: 1.12;
    letter-spacing: -1px;
  }
  .aib-hero-title span {
    background: linear-gradient(135deg, #e06930 0%, #fbc145 100%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
  }
  .aib-card {
    background: #ffffff;
    border: 1px solid #e2e8f0;
    border-radius: 18px;
    padding: 28px;
    height: 100%;
    transition: all 0.3s ease;
    box-shadow: 0 4px 15px rgba(0,0,0,0.03);
  }
  .aib-card:hover {
    transform: translateY(-6px);
    border-color: #2563eb;
    box-shadow: 0 12px 30px rgba(37, 99, 235, 0.12);
  }
  .aib-icon-wrap {
    width: 56px;
    height: 56px;
    border-radius: 14px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 24px;
    margin-bottom: 20px;
  }
  .aib-badge {
    background: rgba(37, 99, 235, 0.15);
    border: 1px solid rgba(37, 99, 235, 0.4);
    color: #60a5fa;
    font-size: 13px;
    font-weight: 700;
    padding: 6px 18px;
    border-radius: 30px;
    display: inline-flex;
    align-items: center;
    gap: 8px;
  }
</style>

<!-- SECTION 1: HERO SECTION -->
<section class="aib-hero-sec">
  <div class="container">
    <div class="row align-items-center g-5">
      <div class="col-lg-7">
        <div class="aib-badge mb-3">
          <i class="fas fa-brain"></i> DIGIFY AI BUSINESS &amp; CRM PLATFORM 2026
        </div>
        <h1 class="aib-hero-title mb-4">
          Autonomous <span>AI Employees &amp; CRM</span> for Modern Enterprises
        </h1>
        <p style="font-size: 17.5px; color: #cbd5e1; line-height: 1.65;" class="mb-4">
          Supercharge your sales team and customer operations. Deploy 24/7 WhatsApp AI Sales Representatives, automated lead scoring, AI customer service agents, and real-time executive P&amp;L briefings directly connected to your ERP.
        </p>
        <div class="d-flex flex-wrap gap-3 mb-4">
          <a href="contact-us.php" class="btn btn-hero-primary" data-bs-toggle="modal" data-bs-target="#trialModal" style="background: linear-gradient(135deg, #2563eb, #1d4ed8); color: #fff; font-weight: 700; padding: 15px 34px; border-radius: 50px;">
            <i class="fas fa-calendar-check me-2"></i> Book AI Demo
          </a>
          <a href="#ai-capabilities" class="btn btn-hero-secondary" style="background: rgba(255,255,255,0.1); color: #fff; border: 1px solid rgba(255,255,255,0.25); font-weight: 600; padding: 15px 30px; border-radius: 50px;">
            <i class="fas fa-microchip me-2"></i> Explore Capabilities
          </a>
        </div>
        <div class="row g-3 mt-2">
          <div class="col-sm-4">
            <div style="background: rgba(255,255,255,0.06); border: 1px solid rgba(255,255,255,0.15); border-radius: 12px; padding: 16px; text-align: center;">
              <div style="font-size: 26px; font-weight: 900; color: #60a5fa;">2x</div>
              <div style="font-size: 12.5px; color: #cbd5e1;">Sales Lead Conversion Rate</div>
            </div>
          </div>
          <div class="col-sm-4">
            <div style="background: rgba(255,255,255,0.06); border: 1px solid rgba(255,255,255,0.15); border-radius: 12px; padding: 16px; text-align: center;">
              <div style="font-size: 26px; font-weight: 900; color: #60a5fa;">24/7</div>
              <div style="font-size: 12.5px; color: #cbd5e1;">Instant WhatsApp AI Response</div>
            </div>
          </div>
          <div class="col-sm-4">
            <div style="background: rgba(255,255,255,0.06); border: 1px solid rgba(255,255,255,0.15); border-radius: 12px; padding: 16px; text-align: center;">
              <div style="font-size: 26px; font-weight: 900; color: #60a5fa;">30%</div>
              <div style="font-size: 12.5px; color: #cbd5e1;">Faster Receivables Collection</div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-5">
        <img src="assets/images/ai_crm_banner_1.jpg" alt="AI Business & CRM" class="img-fluid rounded-4 shadow-lg border border-secondary" style="border-color: rgba(255,255,255,0.15) !important;">
      </div>
    </div>
  </div>
</section>

<!-- SECTION 2: DEEP ENTERPRISE AI CAPABILITIES -->
<section id="ai-capabilities" class="py-5" style="background: #ffffff;">
  <div class="container py-4">
    <div class="text-center mb-5">
      <span class="sub-badge" style="background: rgba(37,99,235,0.1); color: #2563eb; font-weight: 700; font-size: 12px; padding: 6px 18px; border-radius: 30px;">
        <i class="fas fa-comments me-1"></i> ENTERPRISE AI CAPABILITIES
      </span>
      <h2 style="font-size: 36px; font-weight: 900; color: #0f172a; margin-top: 12px;">
        Transform Operations with Autonomous AI Layer
      </h2>
      <p style="color: #64748b; max-width: 650px; margin: 8px auto 0; font-size: 16px;">
        Empower your business with AI agents that work 24/7 alongside your human team to drive sales, qualify leads, and optimize workflows.
      </p>
    </div>

    <div class="row g-4">
      <!-- Capability 1 -->
      <div class="col-lg-4 col-md-6">
        <div class="aib-card">
          <div class="aib-icon-wrap" style="background: #ecfdf5; color: #059669;">
            <i class="fab fa-whatsapp"></i>
          </div>
          <h3 style="font-size: 20px; font-weight: 800; color: #0f172a;">24/7 WhatsApp AI Sales Representatives</h3>
          <p style="font-size: 14px; color: #475569; line-height: 1.6;">
            Engage incoming customer inquiries on WhatsApp instantly. AI answers product questions, shares catalog images, checks live inventory stock, and collects order details.
          </p>
          <ul style="font-size: 13px; color: #64748b; padding-left: 18px;" class="mb-0">
            <li>Instant 2-second response time</li>
            <li>Multi-lingual support (Hindi, English, Arabic)</li>
            <li>Automatic lead capture into Digify CRM</li>
          </ul>
        </div>
      </div>

      <!-- Capability 2 -->
      <div class="col-lg-4 col-md-6">
        <div class="aib-card">
          <div class="aib-icon-wrap" style="background: #eff6ff; color: #2563eb;">
            <i class="fas fa-filter-circle-dollar"></i>
          </div>
          <h3 style="font-size: 20px; font-weight: 800; color: #0f172a;">Automated Lead Qualification &amp; Scoring</h3>
          <p style="font-size: 14px; color: #475569; line-height: 1.6;">
            Stop wasting time on cold leads. AI analyzes customer intent, budget, timeline, and company profile to automatically score leads and assign high-value deals to senior reps.
          </p>
          <ul style="font-size: 13px; color: #64748b; padding-left: 18px;" class="mb-0">
            <li>Hot / Warm / Cold automated tagging</li>
            <li>Predictive conversion probability</li>
            <li>Sales team activity tracking &amp; alerts</li>
          </ul>
        </div>
      </div>

      <!-- Capability 3 -->
      <div class="col-lg-4 col-md-6">
        <div class="aib-card">
          <div class="aib-icon-wrap" style="background: #fdf4ff; color: #c026d3;">
            <i class="fas fa-user-shield"></i>
          </div>
          <h3 style="font-size: 20px; font-weight: 800; color: #0f172a;">AI Customer Service &amp; Ticket Resolution</h3>
          <p style="font-size: 14px; color: #475569; line-height: 1.6;">
            Resolve up to 80% of routine customer service inquiries, shipment tracking requests, warranty status checks, and invoice requests automatically.
          </p>
          <ul style="font-size: 13px; color: #64748b; padding-left: 18px;" class="mb-0">
            <li>Automated invoice PDF generation</li>
            <li>Live order delivery tracking</li>
            <li>Seamless escalation to human manager</li>
          </ul>
        </div>
      </div>

      <!-- Capability 4 -->
      <div class="col-lg-4 col-md-6">
        <div class="aib-card">
          <div class="aib-icon-wrap" style="background: #fff7ed; color: #ea580c;">
            <i class="fas fa-chart-pie"></i>
          </div>
          <h3 style="font-size: 20px; font-weight: 800; color: #0f172a;">Executive Daily P&amp;L &amp; Operational Briefing</h3>
          <p style="font-size: 14px; color: #475569; line-height: 1.6;">
            Get a concise AI audio or text briefing every evening at 8 PM detailing daily total sales, gross profit margin, pending dispatches, and overdue customer payments.
          </p>
          <ul style="font-size: 13px; color: #64748b; padding-left: 18px;" class="mb-0">
            <li>Daily revenue vs target comparison</li>
            <li>Cash flow &amp; working capital alerts</li>
            <li>Top selling products &amp; store performance</li>
          </ul>
        </div>
      </div>

      <!-- Capability 5 -->
      <div class="col-lg-4 col-md-6">
        <div class="aib-card">
          <div class="aib-icon-wrap" style="background: #f0fdf4; color: #16a34a;">
            <i class="fas fa-paper-plane"></i>
          </div>
          <h3 style="font-size: 20px; font-weight: 800; color: #0f172a;">Automated Payment Links &amp; Reminders</h3>
          <p style="font-size: 14px; color: #475569; line-height: 1.6;">
            Accelerate receivables collection. AI automatically tracks customer payment due dates and sends polite WhatsApp reminders with UPI / card payment links.
          </p>
          <ul style="font-size: 13px; color: #64748b; padding-left: 18px;" class="mb-0">
            <li>Dynamic Razorpay / PayU payment link generation</li>
            <li>Automatic ledger reconciliation upon payment</li>
            <li>30% reduction in overdue receivables (DSO)</li>
          </ul>
        </div>
      </div>

      <!-- Capability 6 -->
      <div class="col-lg-4 col-md-6">
        <div class="aib-card">
          <div class="aib-icon-wrap" style="background: #fef2f2; color: #dc2626;">
            <i class="fas fa-network-wired"></i>
          </div>
          <h3 style="font-size: 20px; font-weight: 800; color: #0f172a;">Native Digify ERP Integration</h3>
          <p style="font-size: 14px; color: #475569; line-height: 1.6;">
            Unlike standalone chatbots, Digify AI is deeply integrated into your ERP inventory, accounting ledger, manufacturing work orders, and POS checkout systems.
          </p>
          <ul style="font-size: 13px; color: #64748b; padding-left: 18px;" class="mb-0">
            <li>Zero manual data entry required</li>
            <li>Real-time database synchronization</li>
            <li>Enterprise data security &amp; encryption</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- SECTION 3: COMPARISON (TRADITIONAL MANUAL SALES VS DIGIFY AUTONOMOUS AI SALES) -->
<section class="py-5" style="background: #f8fafc; border-top: 1px solid #e2e8f0; border-bottom: 1px solid #e2e8f0;">
  <div class="container py-4">
    <div class="text-center mb-5">
      <h2 style="font-size: 34px; font-weight: 900; color: #0f172a;">
        Digify Autonomous AI Sales vs Traditional Manual Sales
      </h2>
      <p style="color: #64748b;">See how AI automation eliminates lost sales opportunities.</p>
    </div>

    <div class="table-responsive shadow-sm rounded-4 border bg-white">
      <table class="table align-middle mb-0" style="font-size: 14.5px;">
        <thead style="background: #0f172a; color: #ffffff;">
          <tr>
            <th class="p-4" style="width: 35%;">Sales &amp; CRM Capability</th>
            <th class="p-4 text-center" style="width: 32%; background: #2563eb; color: #ffffff;">Digify AI CRM Layer</th>
            <th class="p-4 text-center" style="width: 33%;">Manual Traditional Process</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class="p-4 fw-bold text-dark">First Response Time</td>
            <td class="p-4 text-center fw-bold text-success"><i class="fas fa-check-circle me-1"></i> Instant 2 Seconds (24/7)</td>
            <td class="p-4 text-center text-muted"><i class="fas fa-times-circle me-1"></i> 4 to 24 Hours Delay</td>
          </tr>
          <tr>
            <td class="p-4 fw-bold text-dark">WhatsApp Catalog &amp; Reorder Bot</td>
            <td class="p-4 text-center fw-bold text-success"><i class="fas fa-check-circle me-1"></i> Automated B2B Catalog &amp; PO</td>
            <td class="p-4 text-center text-muted"><i class="fas fa-times-circle me-1"></i> Manual PDF Chatting &amp; Calls</td>
          </tr>
          <tr>
            <td class="p-4 fw-bold text-dark">Lead Qualification &amp; Scoring</td>
            <td class="p-4 text-center fw-bold text-success"><i class="fas fa-check-circle me-1"></i> AI Intent &amp; Budget Scoring</td>
            <td class="p-4 text-center text-muted"><i class="fas fa-times-circle me-1"></i> Equal Time Wasted on Bad Leads</td>
          </tr>
          <tr>
            <td class="p-4 fw-bold text-dark">Receivables Collection Reminders</td>
            <td class="p-4 text-center fw-bold text-success"><i class="fas fa-check-circle me-1"></i> Automated WhatsApp Payment Links</td>
            <td class="p-4 text-center text-muted"><i class="fas fa-times-circle me-1"></i> Uncomfortable Manual Follow-up Calls</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</section>

<!-- SECTION 4: CALL TO ACTION -->
<section class="py-5" style="background: linear-gradient(135deg, #0f172a 0%, #1e293b 100%); color: #ffffff;">
  <div class="container py-4 text-center">
    <h2 style="font-size: 36px; font-weight: 900; margin-bottom: 16px;">
      Deploy Digify AI Employees for Your Business Today
    </h2>
    <p style="font-size: 16px; color: #cbd5e1; max-width: 600px; margin: 0 auto 30px;">
      Schedule a live AI demonstration to see how Digify AI CRM &amp; Business Automation can double your sales conversion.
    </p>
    <a href="contact-us.php" class="btn btn-hero-primary btn-lg" data-bs-toggle="modal" data-bs-target="#trialModal" style="background: linear-gradient(135deg, #2563eb, #1d4ed8); color: #fff; font-weight: 700; padding: 15px 36px; border-radius: 50px;">
      <i class="fas fa-calendar-check me-2"></i> Schedule AI Demo
    </a>
  </div>
</section>

<?php include 'footer.php'; ?>