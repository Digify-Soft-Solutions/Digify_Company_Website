<?php
$page_title = "Accounting Software Nigeria | General Ledger, Invoicing &amp; Tax Records";
$page_description = "Comprehensive Accounting-linked ERP software in Nigeria for general ledger, debtor management, supplier payments, cash flow, and tax-aware financial reporting.";
$pageTitle = $page_title;
$pageDescription = $page_description;
$pageCanonical = "https://www.digifysoft.in/accounting-software-nigeria.php";
include __DIR__ . '/../../top.php';
include __DIR__ . '/../../header.php';
?>

<style>
/* Nigeria Theme Styles */
:root {
    --ng-green: #008751;
    --ng-emerald: #059669;
    --ng-gold: #F59E0B;
    --ng-navy: #0F172A;
    --ng-light-bg: #F8FAFC;
    --ng-border: #E2E8F0;
    --ng-accent: #10B981;
}

.ng-hero {
    background: linear-gradient(135deg, #022C1E 0%, #0F172A 100%);
    color: #ffffff;
    padding: 85px 0 65px;
    position: relative;
    overflow: hidden;
}

.ng-hero::before {
    content: '';
    position: absolute;
    top: 0; right: 0; bottom: 0; left: 0;
    background: radial-gradient(circle at 80% 20%, rgba(0, 135, 81, 0.28) 0%, transparent 60%);
    pointer-events: none;
}

.ng-hero-badge {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    background: rgba(255, 255, 255, 0.12);
    border: 1px solid rgba(255, 255, 255, 0.25);
    padding: 7px 18px;
    border-radius: 50px;
    font-size: 0.88rem;
    font-weight: 600;
    color: #6EE7B7;
    margin-bottom: 22px;
}

.ng-hero h1 {
    font-size: 2.7rem;
    font-weight: 800;
    line-height: 1.25;
    margin-bottom: 18px;
    letter-spacing: -0.02em;
    color: #FFFFFF;
}

.ng-hero-tagline {
    font-size: 1.25rem;
    color: #E2E8F0;
    font-weight: 500;
    margin-bottom: 16px;
}

.ng-hero-intro {
    font-size: 1.05rem;
    color: #CBD5E1;
    line-height: 1.7;
    max-width: 820px;
    margin-bottom: 35px;
}

.ng-hero-cta-group {
    display: flex;
    flex-wrap: wrap;
    gap: 15px;
    align-items: center;
}

.ng-btn-primary {
    background: linear-gradient(135deg, #008751 0%, #059669 100%);
    color: #FFFFFF;
    font-weight: 700;
    padding: 14px 28px;
    border-radius: 8px;
    text-decoration: none;
    display: inline-flex;
    align-items: center;
    gap: 10px;
    box-shadow: 0 4px 14px rgba(0, 135, 81, 0.35);
    transition: all 0.25s ease;
}

.ng-btn-primary:hover {
    background: linear-gradient(135deg, #059669 0%, #047857 100%);
    transform: translateY(-2px);
    box-shadow: 0 6px 20px rgba(0, 135, 81, 0.45);
    color: #FFFFFF;
}

.ng-btn-secondary {
    background: rgba(255, 255, 255, 0.1);
    border: 1px solid rgba(255, 255, 255, 0.3);
    color: #FFFFFF;
    font-weight: 600;
    padding: 14px 26px;
    border-radius: 8px;
    text-decoration: none;
    display: inline-flex;
    align-items: center;
    gap: 8px;
    transition: all 0.25s ease;
}

.ng-btn-secondary:hover {
    background: rgba(255, 255, 255, 0.2);
    color: #FFFFFF;
}

.section {
    padding: 70px 0;
}

.bg-light-ng {
    background-color: var(--ng-light-bg);
}

.section-header {
    margin-bottom: 50px;
}

.section-badge {
    display: inline-block;
    background: #DCFCE7;
    color: #008751;
    padding: 5px 14px;
    border-radius: 30px;
    font-size: 0.85rem;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 0.05em;
    margin-bottom: 12px;
}

.features-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
    gap: 25px;
}

.feature-card {
    background: #FFFFFF;
    border: 1px solid var(--ng-border);
    border-radius: 12px;
    padding: 30px;
    transition: all 0.3s ease;
    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.04);
}

.feature-card:hover {
    transform: translateY(-4px);
    box-shadow: 0 12px 28px rgba(0, 0, 0, 0.08);
    border-color: #A7F3D0;
}

.feature-icon {
    width: 50px;
    height: 50px;
    border-radius: 10px;
    background: #DCFCE7;
    color: #008751;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1.4rem;
    margin-bottom: 20px;
}

.feature-card h3 {
    font-size: 1.22rem;
    font-weight: 700;
    color: var(--ng-navy);
    margin-bottom: 12px;
}

.feature-card p {
    font-size: 0.95rem;
    color: #475569;
    line-height: 1.65;
    margin: 0;
}

/* Workflow Grid */
.workflow-section {
    background: #FFFFFF;
    border-top: 1px solid var(--ng-border);
    border-bottom: 1px solid var(--ng-border);
}

.workflow-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(180px, 1fr));
    gap: 15px;
    margin-top: 30px;
}

.workflow-step {
    background: var(--ng-light-bg);
    border: 1px solid var(--ng-border);
    border-radius: 10px;
    padding: 20px 15px;
    text-align: center;
    position: relative;
    transition: all 0.25s ease;
}

.workflow-step:hover {
    background: #DCFCE7;
    border-color: #008751;
}

.wf-num {
    width: 32px;
    height: 32px;
    border-radius: 50%;
    background: #008751;
    color: #FFFFFF;
    font-weight: 700;
    font-size: 0.85rem;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto 10px;
}

.wf-text {
    font-size: 0.92rem;
    font-weight: 700;
    color: var(--ng-navy);
}

/* Target & Tax Highlights */
.details-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
    gap: 30px;
    margin-top: 40px;
}

.target-sectors-card, .tax-compliance-card {
    background: #FFFFFF;
    border: 1px solid var(--ng-border);
    border-radius: 12px;
    padding: 32px;
    box-shadow: 0 4px 12px rgba(0,0,0,0.03);
}

.target-sectors-card h3, .tax-compliance-card h3 {
    font-size: 1.25rem;
    font-weight: 700;
    color: var(--ng-navy);
    margin-bottom: 20px;
    display: flex;
    align-items: center;
    gap: 10px;
}

.target-list {
    list-style: none;
    padding: 0;
    margin: 0;
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 12px;
}

.target-list li {
    font-size: 0.93rem;
    color: #334155;
    display: flex;
    align-items: center;
    gap: 8px;
}

.target-list li i {
    color: #008751;
    font-size: 0.9rem;
}

/* Hub Links Section */
.hubs-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
    gap: 15px;
    margin-top: 25px;
}

.hub-card {
    background: #FFFFFF;
    border: 1px solid var(--ng-border);
    border-radius: 10px;
    padding: 18px 20px;
    text-decoration: none;
    color: var(--ng-navy);
    display: flex;
    align-items: center;
    justify-content: space-between;
    font-weight: 700;
    font-size: 0.95rem;
    transition: all 0.2s ease;
}

.hub-card:hover {
    background: #DCFCE7;
    border-color: #008751;
    color: #008751;
    transform: translateX(3px);
}

/* FAQ */
.faq-box {
    background: #FFFFFF;
    border: 1px solid var(--ng-border);
    border-radius: 12px;
    padding: 28px;
    margin-top: 35px;
    box-shadow: 0 4px 12px rgba(0,0,0,0.03);
}

.faq-box h3 {
    font-size: 1.2rem;
    font-weight: 700;
    color: var(--ng-navy);
    margin-bottom: 10px;
}

.faq-box p {
    font-size: 0.98rem;
    color: #475569;
    line-height: 1.7;
    margin: 0;
}

@media (max-width: 991px) {
    .ng-hero { padding: 50px 0 45px; }
    .ng-hero h1 { font-size: 2.2rem; }
    .ng-hero-tagline { font-size: 1.1rem; }
}

@media (max-width: 768px) {
    .ng-hero { padding: 30px 0 35px; }
    .ng-hero-badge { font-size: 0.78rem; padding: 5px 12px; margin-bottom: 14px; white-space: normal; line-height: 1.35; }
    .ng-hero h1 { font-size: 1.55rem; line-height: 1.3; margin-bottom: 12px; }
    .ng-hero-tagline { font-size: 0.95rem; line-height: 1.4; margin-bottom: 10px; }
    .ng-hero-intro { font-size: 0.88rem; line-height: 1.6; margin-bottom: 20px; }
    .ng-hero-cta-group { flex-direction: column; width: 100%; gap: 10px; }
    .ng-btn-primary, .ng-btn-secondary { width: 100%; justify-content: center; padding: 12px 16px; font-size: 0.9rem; }
    .target-list { grid-template-columns: 1fr; }
    .section { padding: 45px 0; }
    .features-grid { grid-template-columns: 1fr; }
    .feature-card { padding: 20px; }
}
</style>

<!-- Hero Section -->
<section class="ng-hero">
    <div class="container">
        <div class="ng-hero-badge">🇳🇬 Financial Control &amp; Tax-Aware Ledgers</div>
        <h1>Accounting &amp; Financial Management ERP in Nigeria</h1>
        <div class="ng-hero-tagline">General Ledger, Debtor Aging, Supplier Payables, Cash Flow &amp; Financial Statements</div>
        <p class="ng-hero-intro">Eliminate disconnected spreadsheets by linking daily sales, purchasing, inventory, and payroll workflows directly into an audit-ready general ledger.</p>
        <div class="ng-hero-cta-group">
            <a href="contact.php?country=nigeria" class="ng-btn-primary">
                <i class="fa-solid fa-calendar-check"></i> Book Nigeria Demo
            </a>
            <a href="erp-software-nigeria.php" class="ng-btn-secondary">
                <i class="fa-solid fa-arrow-left"></i> All Nigeria ERP Solutions
            </a>
            <a href="https://wa.me/917425016636?text=Hello%20Digify%2C%20I%20am%20interested%20in%20Nigeria%20ERP%20solutions." target="_blank" class="ng-btn-secondary">
                <i class="fa-brands fa-whatsapp"></i> Chat on WhatsApp
            </a>
        </div>
    </div>
</section>

<!-- Core Features Section -->
<section class="section bg-light-ng">
    <div class="container">
        <div class="section-header text-center">
            <span class="section-badge">Enterprise Functionality</span>
            <h2>Core ERP Capabilities for Nigerian Operations</h2>
            <p class="text-muted">Built for high transaction speeds, customer credit control, and multi-branch efficiency.</p>
        </div>
        <div class="features-grid">
                        <div class="feature-card">
                <div class="feature-icon"><i class="fa-solid fa-calculator"></i></div>
                <h3>Comprehensive General Ledger &amp; Chart of Accounts</h3>
                <p>Structured chart of accounts with automated double-entry journal postings from operational modules.</p>
            </div>            <div class="feature-card">
                <div class="feature-icon"><i class="fa-solid fa-calculator"></i></div>
                <h3>Tax-Aware Sales &amp; Purchase Ledgers</h3>
                <p>Automated calculation of standard VAT and withholding tax tracking to assist in preparing tax returns under Nigerian tax laws.</p>
            </div>            <div class="feature-card">
                <div class="feature-icon"><i class="fa-solid fa-calculator"></i></div>
                <h3>Accounts Receivable &amp; Debtor Aging</h3>
                <p>Track outstanding customer balances with 30/60/90-day debtor aging reports, automated reminders, and collection logs.</p>
            </div>            <div class="feature-card">
                <div class="feature-icon"><i class="fa-solid fa-calculator"></i></div>
                <h3>Accounts Payable &amp; Supplier Settlements</h3>
                <p>Manage vendor payment terms, schedule bank transfers, track advance deposits, and reconcile monthly supplier statements.</p>
            </div>            <div class="feature-card">
                <div class="feature-icon"><i class="fa-solid fa-calculator"></i></div>
                <h3>Bank Reconciliation &amp; Cash Flow Monitoring</h3>
                <p>Match bank account feeds against recorded cash receipts and electronic transfers for accurate cash position forecasting.</p>
            </div>            <div class="feature-card">
                <div class="feature-icon"><i class="fa-solid fa-calculator"></i></div>
                <h3>Real-Time Financial Statements (P&amp;L &amp; Balance Sheet)</h3>
                <p>Generate executive Profit &amp; Loss statements, balance sheets, trial balances, and branch profitability reports with one click.</p>
            </div>
        </div>

        <div class="details-grid">
                    <div class="target-sectors-card">
            <h3><i class="fa-solid fa-crosshairs"></i> Target Sectors in Nigeria</h3>
            <ul class="target-list">
                <li><i class="fa-solid fa-check-circle"></i> Trading Enterprises</li><li><i class="fa-solid fa-check-circle"></i> FMCG Distributors</li><li><i class="fa-solid fa-check-circle"></i> Manufacturing Plants</li><li><i class="fa-solid fa-check-circle"></i> Retail Chains</li><li><i class="fa-solid fa-check-circle"></i> Contractors &amp; Service Firms</li>
            </ul>
        </div>

            <div class="tax-compliance-card">
                <h3><i class="fa-solid fa-file-invoice-dollar"></i> Nigerian Tax-Aware Financial Ledgers</h3>
                <p style="color: #475569; line-height: 1.65; margin-bottom: 15px;">
                    In accordance with the <strong>Nigeria Tax Act 2025</strong> reforms, Digify organizes sales invoices, input VAT receipts, withholding tax schedules, and financial books into audit-ready digital ledgers.
                </p>
                <div style="background: #F1F5F9; padding: 12px 16px; border-radius: 8px; font-size: 0.88rem; color: #334155;">
                    <i class="fa-solid fa-shield-halved" style="color: #008751;"></i> <strong>Compliance Notice:</strong> Digify produces organized transaction records to assist businesses and accountants with tax preparation.
                </div>
            </div>
        </div>
    </div>
</section>



<!-- Strategic Commercial Hubs -->
<section class="section bg-light-ng">
    <div class="container">
        <div class="section-header text-center">
            <span class="section-badge">Regional Coverage</span>
            <h2>Key Nigerian Commercial & Trading Hubs</h2>
            <p class="text-muted">Localized ERP solutions deployed across major commercial markets and industrial corridors.</p>
        </div>
        <div class="hubs-grid">
            <a href="erp-software-lagos.php" class="hub-card">
                <span><i class="fa-solid fa-city"></i> Lagos (Commercial Hub)</span>
                <i class="fa-solid fa-arrow-right"></i>
            </a>
            <a href="erp-software-abuja.php" class="hub-card">
                <span><i class="fa-solid fa-landmark"></i> Abuja (Federal Capital)</span>
                <i class="fa-solid fa-arrow-right"></i>
            </a>
            <a href="erp-software-kano.php" class="hub-card">
                <span><i class="fa-solid fa-store"></i> Kano (Northern Trade)</span>
                <i class="fa-solid fa-arrow-right"></i>
            </a>
            <a href="erp-software-onitsha.php" class="hub-card">
                <span><i class="fa-solid fa-dolly"></i> Onitsha (Commercial Hub)</span>
                <i class="fa-solid fa-arrow-right"></i>
            </a>
            <a href="erp-software-aba.php" class="hub-card">
                <span><i class="fa-solid fa-shirt"></i> Aba (Manufacturing / Ariaria)</span>
                <i class="fa-solid fa-arrow-right"></i>
            </a>
            <a href="erp-software-port-harcourt.php" class="hub-card">
                <span><i class="fa-solid fa-oil-well"></i> Port Harcourt (Rivers)</span>
                <i class="fa-solid fa-arrow-right"></i>
            </a>
            <a href="erp-software-ibadan.php" class="hub-card">
                <span><i class="fa-solid fa-seedling"></i> Ibadan (Oyo Hub)</span>
                <i class="fa-solid fa-arrow-right"></i>
            </a>
            <a href="erp-software-ogun.php" class="hub-card">
                <span><i class="fa-solid fa-industry"></i> Ogun (Industrial Corridor)</span>
                <i class="fa-solid fa-arrow-right"></i>
            </a>
        </div>

        <div class="faq-box">
            <h3><i class="fa-solid fa-circle-question" style="color: #008751;"></i> How does Digify support Nigerian tax-aware financial record keeping?</h3>
            <p>Digify maintains structured sales and purchase tax ledgers with line-item VAT calculations, customer TIN capture, and audit-ready summary reports to assist in tax preparation.</p>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="section" style="background: linear-gradient(135deg, #008751 0%, #0F172A 100%); color: #FFFFFF; text-align: center;">
    <div class="container">
        <h2 style="font-size: 2.3rem; font-weight: 800; color: #FFFFFF; margin-bottom: 15px;">Ready to Scale Your Nigerian Business with Digify?</h2>
        <p style="font-size: 1.1rem; color: #E2E8F0; max-width: 680px; margin: 0 auto 30px;">
            Experience high-speed POS, real-time stock control, debtor collections, and WhatsApp automation.
        </p>
        <div style="display: flex; justify-content: center; gap: 15px; flex-wrap: wrap;">
            <a href="contact.php?country=nigeria" class="ng-btn-primary" style="background: #F59E0B; color: #0F172A; font-weight: 800;">
                <i class="fa-solid fa-calendar-check"></i> Request Free Demo
            </a>
            <a href="https://wa.me/917425016636?text=Hi%20Digify%2C%20I%20would%20like%20to%20consult%20with%20an%20ERP%20expert%20for%20Nigeria." target="_blank" class="ng-btn-secondary">
                <i class="fa-brands fa-whatsapp"></i> Chat with ERP Specialist
            </a>
        </div>
    </div>
</section>

<?php include __DIR__ . '/../../footer.php'; ?>