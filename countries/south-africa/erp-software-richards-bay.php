<?php
$page_title = "ERP Software Richards Bay | Heavy Industry, Mining Supply &amp; Port Logistics ERP";
$page_description = "Heavy-duty ERP software in Richards Bay (KwaZulu-Natal) for mining supply chains, aluminum smelting vendors, heavy engineering, and bulk port logistics.";
$canonical_url = "https://digifysoft.com/erp-software-richards-bay.php";
include __DIR__ . '/../../header.php';
?>

<style>
/* South Africa Theme Styles */
:root {
    --sa-green: #007A4D;
    --sa-gold: #FFB612;
    --sa-navy: #0F172A;
    --sa-light-bg: #F8FAFC;
    --sa-border: #E2E8F0;
    --sa-accent: #0284C7;
}

.sa-hero {
    background: linear-gradient(135deg, #064E3B 0%, #0F172A 100%);
    color: #ffffff;
    padding: 85px 0 65px;
    position: relative;
    overflow: hidden;
}

.sa-hero::before {
    content: '';
    position: absolute;
    top: 0; right: 0; bottom: 0; left: 0;
    background: radial-gradient(circle at 80% 20%, rgba(0, 122, 77, 0.25) 0%, transparent 60%);
    pointer-events: none;
}

.sa-hero-badge {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    background: rgba(255, 255, 255, 0.12);
    border: 1px solid rgba(255, 255, 255, 0.25);
    padding: 7px 18px;
    border-radius: 50px;
    font-size: 0.88rem;
    font-weight: 600;
    color: #FCD34D;
    margin-bottom: 22px;
}

.sa-hero h1 {
    font-size: 2.7rem;
    font-weight: 800;
    line-height: 1.25;
    margin-bottom: 18px;
    letter-spacing: -0.02em;
    color: #FFFFFF;
}

.sa-hero-tagline {
    font-size: 1.25rem;
    color: #E2E8F0;
    font-weight: 500;
    margin-bottom: 16px;
}

.sa-hero-intro {
    font-size: 1.05rem;
    color: #CBD5E1;
    line-height: 1.7;
    max-width: 820px;
    margin-bottom: 35px;
}

.sa-hero-cta-group {
    display: flex;
    flex-wrap: wrap;
    gap: 15px;
    align-items: center;
}

.sa-btn-primary {
    background: linear-gradient(135deg, #007A4D 0%, #047857 100%);
    color: #FFFFFF;
    font-weight: 700;
    padding: 14px 28px;
    border-radius: 8px;
    text-decoration: none;
    display: inline-flex;
    align-items: center;
    gap: 10px;
    box-shadow: 0 4px 14px rgba(0, 122, 77, 0.35);
    transition: all 0.25s ease;
}

.sa-btn-primary:hover {
    background: linear-gradient(135deg, #047857 0%, #065F46 100%);
    transform: translateY(-2px);
    box-shadow: 0 6px 20px rgba(0, 122, 77, 0.45);
    color: #FFFFFF;
}

.sa-btn-secondary {
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

.sa-btn-secondary:hover {
    background: rgba(255, 255, 255, 0.2);
    color: #FFFFFF;
}

.section {
    padding: 70px 0;
}

.bg-light-sa {
    background-color: var(--sa-light-bg);
}

.section-header {
    margin-bottom: 50px;
}

.section-badge {
    display: inline-block;
    background: #E6F4EA;
    color: #007A4D;
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
    border: 1px solid var(--sa-border);
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
    background: #E6F4EA;
    color: #007A4D;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1.4rem;
    margin-bottom: 20px;
}

.feature-card h3 {
    font-size: 1.22rem;
    font-weight: 700;
    color: var(--sa-navy);
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
    border-top: 1px solid var(--sa-border);
    border-bottom: 1px solid var(--sa-border);
}

.workflow-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(180px, 1fr));
    gap: 15px;
    margin-top: 30px;
}

.workflow-step {
    background: var(--sa-light-bg);
    border: 1px solid var(--sa-border);
    border-radius: 10px;
    padding: 20px 15px;
    text-align: center;
    position: relative;
    transition: all 0.25s ease;
}

.workflow-step:hover {
    background: #E6F4EA;
    border-color: #007A4D;
}

.wf-num {
    width: 32px;
    height: 32px;
    border-radius: 50%;
    background: #007A4D;
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
    color: var(--sa-navy);
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
    border: 1px solid var(--sa-border);
    border-radius: 12px;
    padding: 32px;
    box-shadow: 0 4px 12px rgba(0,0,0,0.03);
}

.target-sectors-card h3, .tax-compliance-card h3 {
    font-size: 1.25rem;
    font-weight: 700;
    color: var(--sa-navy);
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
    color: #007A4D;
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
    border: 1px solid var(--sa-border);
    border-radius: 10px;
    padding: 18px 20px;
    text-decoration: none;
    color: var(--sa-navy);
    display: flex;
    align-items: center;
    justify-content: space-between;
    font-weight: 700;
    font-size: 0.95rem;
    transition: all 0.2s ease;
}

.hub-card:hover {
    background: #E6F4EA;
    border-color: #007A4D;
    color: #007A4D;
    transform: translateX(3px);
}

/* FAQ */
.faq-box {
    background: #FFFFFF;
    border: 1px solid var(--sa-border);
    border-radius: 12px;
    padding: 28px;
    margin-top: 35px;
    box-shadow: 0 4px 12px rgba(0,0,0,0.03);
}

.faq-box h3 {
    font-size: 1.2rem;
    font-weight: 700;
    color: var(--sa-navy);
    margin-bottom: 10px;
}

.faq-box p {
    font-size: 0.98rem;
    color: #475569;
    line-height: 1.7;
    margin: 0;
}

@media (max-width: 991px) {
    .sa-hero { padding: 50px 0 45px; }
    .sa-hero h1 { font-size: 2.2rem; }
    .sa-hero-tagline { font-size: 1.1rem; }
}

@media (max-width: 768px) {
    .sa-hero { padding: 30px 0 35px; }
    .sa-hero-badge { font-size: 0.78rem; padding: 5px 12px; margin-bottom: 14px; white-space: normal; line-height: 1.35; }
    .sa-hero h1 { font-size: 1.55rem; line-height: 1.3; margin-bottom: 12px; }
    .sa-hero-tagline { font-size: 0.95rem; line-height: 1.4; margin-bottom: 10px; }
    .sa-hero-intro { font-size: 0.88rem; line-height: 1.6; margin-bottom: 20px; }
    .sa-hero-cta-group { flex-direction: column; width: 100%; gap: 10px; }
    .sa-btn-primary, .sa-btn-secondary { width: 100%; justify-content: center; padding: 12px 16px; font-size: 0.9rem; }
    .target-list { grid-template-columns: 1fr; }
    .section { padding: 45px 0; }
    .features-grid { grid-template-columns: 1fr; }
    .feature-card { padding: 20px; }
}
</style>

<!-- Hero Section -->
<section class="sa-hero">
    <div class="container">
        <div class="sa-hero-badge">🇿🇦 King Cetshwayo District • Richards Bay</div>
        <h1>ERP Software in Richards Bay for Heavy Industry &amp; Port Logistics</h1>
        <div class="sa-hero-tagline">Mining Supplies, Heavy Engineering, Port Bulk Logistics &amp; Industrial Maintenance</div>
        <p class="sa-hero-intro">Tailored for Richards Bay’s major industrial ecosystem—supporting mining equipment suppliers, aluminum smelting engineering contractors, bulk coal logistics, and heavy maintenance workshops.</p>
        <div class="sa-hero-cta-group">
            <a href="contact.php?country=south-africa" class="sa-btn-primary">
                <i class="fa-solid fa-calendar-check"></i> Book South Africa Demo
            </a>
            <a href="erp-software-south-africa.php" class="sa-btn-secondary">
                <i class="fa-solid fa-arrow-left"></i> All South Africa ERP Solutions
            </a>
            <a href="https://wa.me/917425016636?text=Hello%20Digify%2C%20I%20am%20interested%20in%20South%20Africa%20ERP%20solutions." target="_blank" class="sa-btn-secondary">
                <i class="fa-brands fa-whatsapp"></i> Chat on WhatsApp
            </a>
        </div>
    </div>
</section>

<!-- Core Features Section -->
<section class="section bg-light-sa">
    <div class="container">
        <div class="section-header text-center">
            <span class="section-badge">Enterprise Functionality</span>
            <h2>Core ERP Capabilities for South African Operations</h2>
            <p class="text-muted">Built to streamline operational efficiency, improve margins, and ensure SARS 15% VAT readiness.</p>
        </div>
        <div class="features-grid">
                        <div class="feature-card">
                <div class="feature-icon"><i class="fa-solid fa-anchor"></i></div>
                <h3>Heavy Industrial &amp; Mining Equipment Supply</h3>
                <p>Manage wear parts, heavy pumps, valves, and conveyor equipment catalogs with tender quotation tracking.</p>
            </div>            <div class="feature-card">
                <div class="feature-icon"><i class="fa-solid fa-anchor"></i></div>
                <h3>Plant Maintenance &amp; Industrial Services</h3>
                <p>Preventive maintenance work orders, technician time logging, heavy tooling allocation, and contractor SLA tracking.</p>
            </div>            <div class="feature-card">
                <div class="feature-icon"><i class="fa-solid fa-anchor"></i></div>
                <h3>Bulk Freight &amp; Port Transport Logistics</h3>
                <p>Coordinate road and rail transport dispatches, weighbridge integration, trip expense logs, and freight billing.</p>
            </div>            <div class="feature-card">
                <div class="feature-icon"><i class="fa-solid fa-anchor"></i></div>
                <h3>Project Costing &amp; Engineering Contracts</h3>
                <p>Track fabrication budgets, material purchases, subcontractor claims, and milestone invoices for heavy engineering projects.</p>
            </div>
        </div>

        <div class="details-grid">
                    <div class="target-sectors-card">
            <h3><i class="fa-solid fa-crosshairs"></i> Target Sectors in South Africa</h3>
            <ul class="target-list">
                <li><i class="fa-solid fa-check-circle"></i> Mining &amp; Mineral Suppliers</li><li><i class="fa-solid fa-check-circle"></i> Heavy Engineering Contractors</li><li><i class="fa-solid fa-check-circle"></i> Bulk Port Transport Operators</li><li><i class="fa-solid fa-check-circle"></i> Plant Maintenance Service Providers</li><li><i class="fa-solid fa-check-circle"></i> Industrial Equipment Wholesalers</li>
            </ul>
        </div>

            <div class="tax-compliance-card">
                <h3><i class="fa-solid fa-file-invoice-dollar"></i> South Africa VAT & Financial Integrity</h3>
                <p style="color: #475569; line-height: 1.65; margin-bottom: 15px;">
                    South Africa’s standard VAT rate is <strong>15%</strong>. Digify maintains structured transaction ledgers, electronic tax invoices, and debtor/creditor balance tracking to assist businesses with audit-ready tax compliance.
                </p>
                <div style="background: #F1F5F9; padding: 12px 16px; border-radius: 8px; font-size: 0.88rem; color: #334155;">
                    <i class="fa-solid fa-shield-halved" style="color: #007A4D;"></i> <strong>Compliance Notice:</strong> Digify produces organized VAT records and ledgers to simplify financial reporting and manual SARS VAT201 filing.
                </div>
            </div>
        </div>
    </div>
</section>



<!-- Strategic City Hubs -->
<section class="section bg-light-sa">
    <div class="container">
        <div class="section-header text-center">
            <span class="section-badge">Regional Coverage</span>
            <h2>South Africa Regional Commercial Hubs</h2>
            <p class="text-muted">Localized ERP solutions deployed across major industrial and business corridors.</p>
        </div>
        <div class="hubs-grid">
            <a href="erp-software-johannesburg.php" class="hub-card">
                <span><i class="fa-solid fa-city"></i> Johannesburg (Gauteng)</span>
                <i class="fa-solid fa-arrow-right"></i>
            </a>
            <a href="erp-software-pretoria.php" class="hub-card">
                <span><i class="fa-solid fa-gears"></i> Pretoria (Tshwane)</span>
                <i class="fa-solid fa-arrow-right"></i>
            </a>
            <a href="erp-software-durban.php" class="hub-card">
                <span><i class="fa-solid fa-ship"></i> Durban (KZN)</span>
                <i class="fa-solid fa-arrow-right"></i>
            </a>
            <a href="erp-software-cape-town.php" class="hub-card">
                <span><i class="fa-solid fa-mountain-sun"></i> Cape Town (Western Cape)</span>
                <i class="fa-solid fa-arrow-right"></i>
            </a>
            <a href="erp-software-gqeberha.php" class="hub-card">
                <span><i class="fa-solid fa-car-side"></i> Gqeberha (Eastern Cape)</span>
                <i class="fa-solid fa-arrow-right"></i>
            </a>
            <a href="erp-software-east-london.php" class="hub-card">
                <span><i class="fa-solid fa-industry"></i> East London (Buffalo City)</span>
                <i class="fa-solid fa-arrow-right"></i>
            </a>
            <a href="erp-software-richards-bay.php" class="hub-card">
                <span><i class="fa-solid fa-anchor"></i> Richards Bay (KZN)</span>
                <i class="fa-solid fa-arrow-right"></i>
            </a>
            <a href="erp-software-bloemfontein.php" class="hub-card">
                <span><i class="fa-solid fa-tractor"></i> Bloemfontein (Free State)</span>
                <i class="fa-solid fa-arrow-right"></i>
            </a>
        </div>

        <div class="faq-box">
            <h3><i class="fa-solid fa-circle-question" style="color: #007A4D;"></i> How does Digify support heavy engineering and plant contractors in Richards Bay?</h3>
            <p>Digify combines project budgeting, industrial work order tracking, mobile technician labor logs, and equipment hire costing into one cohesive platform.</p>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="section" style="background: linear-gradient(135deg, #007A4D 0%, #0F172A 100%); color: #FFFFFF; text-align: center;">
    <div class="container">
        <h2 style="font-size: 2.3rem; font-weight: 800; color: #FFFFFF; margin-bottom: 15px;">Ready to Scale Your South African Business with Digify?</h2>
        <p style="font-size: 1.1rem; color: #E2E8F0; max-width: 680px; margin: 0 auto 30px;">
            Experience industry-specific workflows, real-time stock control, SARS 15% VAT readiness, and multi-branch intelligence.
        </p>
        <div style="display: flex; justify-content: center; gap: 15px; flex-wrap: wrap;">
            <a href="contact.php?country=south-africa" class="sa-btn-primary" style="background: #FCD34D; color: #0F172A; font-weight: 800;">
                <i class="fa-solid fa-calendar-check"></i> Request Free Demo
            </a>
            <a href="https://wa.me/917425016636?text=Hi%20Digify%2C%20I%20would%20like%20to%20consult%20with%20an%20ERP%20expert%20for%20South%20Africa." target="_blank" class="sa-btn-secondary">
                <i class="fa-brands fa-whatsapp"></i> Chat with ERP Specialist
            </a>
        </div>
    </div>
</section>

<?php include __DIR__ . '/../../footer.php'; ?>