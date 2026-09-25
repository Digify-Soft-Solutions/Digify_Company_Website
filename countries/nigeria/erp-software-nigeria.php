<?php 
include_once(__DIR__ . '/../../db.php');
include_once(__DIR__ . '/../../fetch_meta.php');

$pageTitle = "ERP Software Nigeria | Retail POS, FMCG Distribution & Inventory ERP";
$pageDescription = "Industry-leading ERP & POS software for Nigerian retailers, FMCG distributors, wholesalers, supermarkets and growing businesses. Manage POS, inventory, sales, purchasing, CRM, multi-branch and WhatsApp customer workflows.";
$pageKeywords = "ERP software Nigeria, ERP software in Nigeria, best ERP software Nigeria, POS software Nigeria, retail POS Nigeria, supermarket software Nigeria, FMCG distribution ERP Nigeria, wholesale software Nigeria, inventory management software Nigeria, warehouse management software Nigeria, WhatsApp CRM Nigeria, credit sales software Nigeria, multi-branch ERP Nigeria, ERP Lagos, ERP Abuja, ERP Kano, ERP Onitsha, ERP Port Harcourt, ERP Ibadan, ERP Aba, ERP Ogun";
$pageCanonical = "https://www.digifysoft.in/countries/nigeria/erp-software-nigeria.php";
$page_title = $pageTitle;
$page_description = $pageDescription;

include(__DIR__ . '/../../top.php');
include(__DIR__ . '/../../header.php');
?>

<style>
/* Nigeria Master Suite Design System */
.ng-page-wrapper {
    font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
    color: #1e293b;
    overflow-x: hidden;
    width: 100%;
}

/* Hero Section */
.ng-hero {
    background: linear-gradient(135deg, #022c1e 0%, #0f172a 50%, #064e3b 100%);
    color: #ffffff;
    padding: 60px 0 80px;
    position: relative;
    overflow: hidden;
    border-bottom: 4px solid #008751;
}
.ng-hero::before {
    content: '';
    position: absolute;
    top: -15%;
    right: -10%;
    width: 600px;
    height: 600px;
    max-width: 100vw;
    background: radial-gradient(circle, rgba(0, 135, 81, 0.28) 0%, rgba(245, 158, 11, 0.15) 50%, rgba(0, 0, 0, 0) 75%);
    border-radius: 50%;
    pointer-events: none;
}
.text-gradient-ng {
    background: linear-gradient(135deg, #34d399 0%, #fbbf24 50%, #6ee7b7 100%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    display: inline-block;
}
.ng-hero-badge {
    background: rgba(0, 135, 81, 0.25);
    border: 1px solid rgba(52, 211, 153, 0.45);
    color: #6ee7b7;
    font-size: 13px;
    font-weight: 700;
    padding: 6px 14px;
    border-radius: 30px;
    display: inline-flex;
    align-items: center;
    gap: 8px;
    margin-bottom: 16px;
    flex-wrap: wrap;
}
.ng-hero h1 {
    font-size: clamp(24px, 4vw, 38px);
    font-weight: 900;
    line-height: 1.25;
    margin-bottom: 14px;
    letter-spacing: -0.5px;
    color: #ffffff;
    word-break: break-word;
}
.ng-hero-sub {
    font-size: clamp(15px, 2.5vw, 17px);
    font-weight: 600;
    color: #fde047;
    line-height: 1.5;
    margin-bottom: 12px;
}
.ng-hero-desc {
    font-size: clamp(14px, 2vw, 15.5px);
    line-height: 1.65;
    color: rgba(255, 255, 255, 0.88);
    max-width: 720px;
    margin-bottom: 22px;
}

/* Language Switcher Bar */
.ng-lang-bar {
    background: rgba(15, 23, 42, 0.85);
    border: 1px solid rgba(52, 211, 153, 0.35);
    border-radius: 12px;
    padding: 8px 12px;
    display: inline-flex;
    align-items: center;
    gap: 6px;
    flex-wrap: wrap;
    margin-bottom: 20px;
    backdrop-filter: blur(8px);
}
.ng-lang-lbl {
    font-size: 12px;
    font-weight: 700;
    color: #94a3b8;
    text-transform: uppercase;
    letter-spacing: 0.5px;
    margin-right: 4px;
    display: flex;
    align-items: center;
    gap: 5px;
}
.ng-lang-btn {
    background: rgba(255, 255, 255, 0.08);
    border: 1px solid rgba(255, 255, 255, 0.15);
    color: #e2e8f0;
    font-size: 12px;
    font-weight: 600;
    padding: 5px 12px;
    border-radius: 8px;
    cursor: pointer;
    transition: all 0.2s ease;
}
.ng-lang-btn:hover {
    background: rgba(52, 211, 153, 0.25);
    color: #ffffff;
    border-color: #34d399;
}
.ng-lang-btn.active {
    background: #008751;
    color: #ffffff;
    border-color: #34d399;
    box-shadow: 0 2px 8px rgba(0, 135, 81, 0.4);
}

.btn-ng-primary {
    background: linear-gradient(135deg, #008751 0%, #059669 100%);
    color: #ffffff !important;
    font-weight: 700;
    padding: 12px 22px;
    border-radius: 10px;
    border: 1px solid rgba(52, 211, 153, 0.5);
    display: inline-flex;
    align-items: center;
    justify-content: center;
    gap: 8px;
    transition: all 0.3s ease;
    text-decoration: none;
    box-shadow: 0 4px 15px rgba(0, 135, 81, 0.35);
    font-size: 14px;
}
.btn-ng-primary:hover {
    background: linear-gradient(135deg, #059669 0%, #047857 100%);
    color: #ffffff !important;
    transform: translateY(-2px);
}
.btn-ng-outline {
    background: rgba(255, 255, 255, 0.08);
    color: #ffffff !important;
    border: 1px solid rgba(255, 255, 255, 0.25);
    font-weight: 600;
    padding: 12px 20px;
    border-radius: 10px;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    gap: 8px;
    transition: all 0.3s ease;
    text-decoration: none;
    font-size: 14px;
    backdrop-filter: blur(6px);
}
.btn-ng-outline:hover {
    background: rgba(255, 255, 255, 0.18);
    color: #ffffff !important;
    border-color: rgba(255, 255, 255, 0.5);
    transform: translateY(-2px);
}

/* Sections */
.ng-section {
    padding: 60px 0;
}
.bg-light-ng {
    background: #f8fafc;
}
.section-badge-ng {
    background: #dcfce7;
    color: #008751;
    font-size: 12px;
    font-weight: 800;
    text-transform: uppercase;
    letter-spacing: 1px;
    padding: 5px 14px;
    border-radius: 20px;
    display: inline-block;
    margin-bottom: 12px;
}
.section-title-ng {
    font-size: clamp(22px, 3.5vw, 32px);
    font-weight: 900;
    color: #0f172a;
    margin-bottom: 14px;
}

/* Cards */
.ng-card {
    background: #ffffff;
    border: 1px solid #e2e8f0;
    border-radius: 14px;
    padding: 24px 20px;
    transition: all 0.3s ease;
    height: 100%;
    display: flex;
    flex-direction: column;
}
.ng-card:hover {
    transform: translateY(-4px);
    box-shadow: 0 15px 25px -8px rgba(0, 0, 0, 0.08);
    border-color: #008751;
}
.ng-card-icon {
    width: 48px;
    height: 48px;
    border-radius: 12px;
    background: #dcfce7;
    color: #008751;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 20px;
    margin-bottom: 16px;
}
.ng-card h4 {
    font-size: 17px;
    font-weight: 800;
    color: #0f172a;
    margin-bottom: 8px;
}
.ng-card p {
    font-size: 13.5px;
    color: #64748b;
    line-height: 1.55;
    margin-bottom: 14px;
    flex-grow: 1;
}
.ng-card-link {
    color: #008751;
    font-weight: 700;
    font-size: 13px;
    text-decoration: none;
    display: inline-flex;
    align-items: center;
    gap: 6px;
}
.ng-card-link:hover {
    color: #047857;
    text-decoration: underline;
}

/* Metrics Grid */
.ng-stats-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 8px;
    width: 100%;
}
.ng-stat-box {
    background: rgba(255, 255, 255, 0.08);
    border: 1px solid rgba(255, 255, 255, 0.16);
    border-radius: 10px;
    padding: 10px 8px;
    text-align: center;
    backdrop-filter: blur(8px);
    min-width: 0;
}
.ng-stat-val {
    font-size: clamp(14px, 2.5vw, 18px);
    font-weight: 800;
    color: #FFB612;
    line-height: 1.2;
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
}
.ng-stat-lbl {
    font-size: 10px;
    color: #E2E8F0;
    margin-top: 3px;
    font-weight: 600;
    text-transform: uppercase;
    letter-spacing: 0.4px;
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
}

/* Strategic Hub Links */
.ng-hub-card {
    background: #ffffff;
    border: 1px solid #e2e8f0;
    border-radius: 10px;
    padding: 14px 16px;
    display: flex;
    align-items: center;
    justify-content: space-between;
    text-decoration: none;
    color: #0f172a;
    font-weight: 700;
    font-size: 0.9rem;
    transition: all 0.25s ease;
}
.ng-hub-card:hover {
    background: #dcfce7;
    border-color: #008751;
    color: #008751;
    transform: translateX(4px);
}

/* Responsive Overrides */
@media (max-width: 767px) {
    .ng-hero { padding: 45px 0 60px; }
    .ng-section { padding: 45px 0; }
    .btn-ng-primary, .btn-ng-outline { width: 100%; }
    .ng-stats-grid { grid-template-columns: repeat(3, 1fr); gap: 6px; }
    .ng-stat-box { padding: 8px 4px; }
    .ng-lang-bar { width: 100%; justify-content: flex-start; }
}
@media (max-width: 480px) {
    .ng-stats-grid { grid-template-columns: 1fr; gap: 8px; }
    .ng-stat-box { padding: 10px 12px; display: flex; justify-content: space-between; align-items: center; }
    .ng-stat-lbl { margin-top: 0; }
}
</style>

<div class="ng-page-wrapper">
    <!-- HERO SECTION -->
    <section class="ng-hero">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7 mb-4 mb-lg-0">
                    <div class="ng-hero-badge">
                        <i class="fa-solid fa-flag"></i>
                        <span id="txt-hero-badge">🇳🇬 Nigeria • Retail POS, FMCG Distribution & Business ERP</span>
                    </div>

                    <!-- Multi-Language Switcher for Indigenous Nigerian Languages -->
                    <div class="ng-lang-bar">
                        <span class="ng-lang-lbl"><i class="fa-solid fa-language"></i> Select Language:</span>
                        <button type="button" class="ng-lang-btn active" onclick="switchNgLang('en')">English</button>
                        <button type="button" class="ng-lang-btn" onclick="switchNgLang('ha')">Hausa (Kano / North)</button>
                        <button type="button" class="ng-lang-btn" onclick="switchNgLang('yo')">Yoruba (Lagos / West)</button>
                        <button type="button" class="ng-lang-btn" onclick="switchNgLang('ig')">Igbo (Onitsha / East)</button>
                        <button type="button" class="ng-lang-btn" onclick="switchNgLang('pidgin')">Pidgin</button>
                    </div>

                    <!-- DYNAMIC HERO TEXT -->
                    <h1 id="txt-hero-h1">
                        Business Management Software Built for <span class="text-gradient-ng">Nigerian Commerce & Enterprises</span>
                    </h1>
                    <div class="ng-hero-sub" id="txt-hero-sub">
                        Connect POS, inventory, purchasing, sales, customer collections, warehouses, CRM, and WhatsApp workflows in one centralized platform.
                    </div>
                    <p class="ng-hero-desc" id="txt-hero-desc">
                        Engineered for Nigerian retailers, FMCG distributors, wholesalers, supermarkets, importers, manufacturers, and multi-branch operations across Lagos, Abuja, Kano, Onitsha, Port Harcourt, and Ibadan.
                    </p>

                    <div class="d-flex flex-wrap gap-2 mb-4">
                        <a href="contact.php?country=nigeria" class="btn-ng-primary" id="btn-demo-primary">
                            <i class="fa-solid fa-calendar-check"></i>
                            <span id="txt-btn-demo">Get Free Nigeria ERP Demo</span>
                        </a>
                        <a href="#ng-modules" class="btn-ng-outline">
                            <i class="fa-solid fa-layer-group"></i>
                            <span id="txt-btn-solutions">Explore Industry Solutions</span>
                        </a>
                        <a href="https://wa.me/917425016636?text=Hello%20Digify%2C%20I%20am%20interested%20in%20Nigeria%20ERP%20and%20POS%20software." target="_blank" class="btn-ng-outline">
                            <i class="fa-brands fa-whatsapp"></i>
                            <span id="txt-btn-whatsapp">WhatsApp Chat</span>
                        </a>
                    </div>

                    <!-- Quick Metrics Grid -->
                    <div class="ng-stats-grid">
                        <div class="ng-stat-box">
                            <div class="ng-stat-val" id="stat-1-val">3-Sec POS</div>
                            <div class="ng-stat-lbl" id="stat-1-lbl">Ultra-Fast Till</div>
                        </div>
                        <div class="ng-stat-box">
                            <div class="ng-stat-val" id="stat-2-val">₦ Naira</div>
                            <div class="ng-stat-lbl" id="stat-2-lbl">Multi-Branch</div>
                        </div>
                        <div class="ng-stat-box">
                            <div class="ng-stat-val" id="stat-3-val">WhatsApp</div>
                            <div class="ng-stat-lbl" id="stat-3-lbl">Auto Invoices</div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-5">
                    <div class="p-4 bg-white rounded-4 shadow-lg text-dark">
                        <h4 class="fw-bold text-dark mb-2" id="txt-form-title">Request Nigeria ERP Consultation</h4>
                        <p class="small text-muted mb-3" id="txt-form-sub">Speak directly with our Nigerian commercial software specialists.</p>
                        
                        <form action="contact-us.php" method="POST">
                            <input type="hidden" name="lead_source" value="Nigeria Pillar Page / Master ERP">
                            <input type="hidden" name="country" value="Nigeria">
                            
                            <div class="mb-3">
                                <label class="form-label small fw-bold" id="lbl-form-name">Your Name</label>
                                <input type="text" name="name" class="form-control" placeholder="e.g. Emeka Okafor / Babatunde Adeleke" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label small fw-bold" id="lbl-form-company">Company / Enterprise Name</label>
                                <input type="text" name="company_name" class="form-control" placeholder="e.g. Lagos Commercial Hub Ltd" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label small fw-bold" id="lbl-form-phone">Phone / WhatsApp Number</label>
                                <input type="tel" name="phone" class="form-control" placeholder="+234 80X XXX XXXX" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label small fw-bold" id="lbl-form-city">State / Commercial Hub</label>
                                <select name="city" class="form-select" required>
                                    <option value="">Select State / City</option>
                                    <option value="Lagos (Alaba, Trade Fair, Ikeja, Lekki)">Lagos (Alaba, Trade Fair, Ikeja, Lekki)</option>
                                    <option value="Abuja (FCT)">Abuja (FCT)</option>
                                    <option value="Kano (Kano Main City)">Kano (Kano Main City)</option>
                                    <option value="Onitsha (Anambra)">Onitsha (Anambra)</option>
                                    <option value="Aba (Abia)">Aba (Abia)</option>
                                    <option value="Port Harcourt (Rivers)">Port Harcourt (Rivers)</option>
                                    <option value="Ibadan (Oyo)">Ibadan (Oyo)</option>
                                    <option value="Ogun (Industrial Corridor)">Ogun (Industrial Corridor)</option>
                                    <option value="Other State">Other Nigerian State</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label class="form-label small fw-bold" id="lbl-form-sector">Business Sector</label>
                                <select name="industry" class="form-select" required>
                                    <option value="Retail & Supermarket">Supermarket / Retail POS</option>
                                    <option value="FMCG & Food Distribution">FMCG & Food Distribution</option>
                                    <option value="Wholesale & Import">Wholesale & Import / Export</option>
                                    <option value="Electronics & Phones">Electronics & Mobile Retail</option>
                                    <option value="Building Materials">Building Materials & Hardware</option>
                                    <option value="Automotive & Spare Parts">Auto Spare Parts & Workshop</option>
                                    <option value="Pharmacy & Healthcare">Pharmacy & Medical Distribution</option>
                                    <option value="Manufacturing & Agro-Processing">Manufacturing & Agro-Processing</option>
                                    <option value="Logistics & Fleet">Logistics & Freight Haulage</option>
                                </select>
                            </div>
                            
                            <button type="submit" class="btn btn-warning w-100 fw-bold py-2 shadow-sm text-dark" id="btn-form-submit">
                                <i class="fa-solid fa-paper-plane me-1"></i> Submit Consultation Request
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CORE VERTICAL SUITES -->
    <section class="ng-section bg-light-ng" id="ng-modules">
        <div class="container">
            <div class="text-center mb-5">
                <span class="section-badge-ng" id="txt-mod-badge">Complete Operational Suite</span>
                <h2 class="section-title-ng" id="txt-mod-title">All-in-One Enterprise ERP & POS Modules for Nigeria</h2>
                <p class="text-muted" style="max-width: 750px; margin: 0 auto;" id="txt-mod-desc">
                    Engineered for Nigerian high-speed counter retail, multi-warehouse distribution, B2B trade, and customer credit collections.
                </p>
            </div>

            <div class="row g-4">
                <!-- 1. Retail POS & Supermarkets -->
                <div class="col-md-6 col-lg-4">
                    <div class="ng-card">
                        <div class="ng-card-icon"><i class="fa-solid fa-cash-register"></i></div>
                        <h4 id="card-1-title">Retail POS & Supermarket ERP</h4>
                        <p id="card-1-desc">Sub-second barcode scanning, dual price tiers, offline billing resilience, cashier shift balancing, and thermal receipt printing for supermarkets and retail stores.</p>
                        <a href="countries/nigeria/retail-pos-software-nigeria.php" class="ng-card-link"><span id="card-1-link">Explore Retail POS</span> <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>

                <!-- 2. FMCG & Van Sales -->
                <div class="col-md-6 col-lg-4">
                    <div class="ng-card">
                        <div class="ng-card-icon"><i class="fa-solid fa-truck-moving"></i></div>
                        <h4 id="card-2-title">FMCG Distribution & Van Sales</h4>
                        <p id="card-2-desc">Mobile van route tracking, field orders, delivery agent cash reconciliations, bulk carton break-downs, and distribution depot dispatch management.</p>
                        <a href="countries/nigeria/fmcg-distribution-erp-software-nigeria.php" class="ng-card-link"><span id="card-2-link">Explore FMCG ERP</span> <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>

                <!-- 3. Wholesale Trading & Importers -->
                <div class="col-md-6 col-lg-4">
                    <div class="ng-card">
                        <div class="ng-card-icon"><i class="fa-solid fa-warehouse"></i></div>
                        <h4 id="card-3-title">Wholesale & Importer ERP</h4>
                        <p id="card-3-desc">Multi-tier wholesale pricing, landed cost auto-calculation for Apapa/Tin Can containers, carton pack conversions, and volume discount management.</p>
                        <a href="countries/nigeria/wholesale-erp-software-nigeria.php" class="ng-card-link"><span id="card-3-link">Explore Wholesale ERP</span> <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>

                <!-- 4. Inventory & Warehouse Management -->
                <div class="col-md-6 col-lg-4">
                    <div class="ng-card">
                        <div class="ng-card-icon"><i class="fa-solid fa-boxes-stacked"></i></div>
                        <h4 id="card-4-title">Inventory & Multi-Warehouse WMS</h4>
                        <p id="card-4-desc">Real-time multi-location stock tracking, batch expiry alerts, barcode bin tagging, inter-branch stock transfers, and automated reorder triggers.</p>
                        <a href="countries/nigeria/inventory-management-software-nigeria.php" class="ng-card-link"><span id="card-4-link">Explore Inventory WMS</span> <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>

                <!-- 5. WhatsApp CRM & Automation -->
                <div class="col-md-6 col-lg-4">
                    <div class="ng-card">
                        <div class="ng-card-icon"><i class="fa-brands fa-whatsapp"></i></div>
                        <h4 id="card-5-title">WhatsApp CRM & Automation</h4>
                        <p id="card-5-desc">Automatic invoice delivery, payment reminders, statement dispatch, customer order confirmations, and AI-assisted chat sales directly via WhatsApp.</p>
                        <a href="countries/nigeria/whatsapp-business-automation-nigeria.php" class="ng-card-link"><span id="card-5-link">Explore WhatsApp CRM</span> <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>

                <!-- 6. Customer Credit & Debt Recovery -->
                <div class="col-md-6 col-lg-4">
                    <div class="ng-card">
                        <div class="ng-card-icon"><i class="fa-solid fa-hand-holding-dollar"></i></div>
                        <h4 id="card-6-title">Credit Sales & Debt Recovery</h4>
                        <p id="card-6-desc">Enforce strict customer credit limits, track 30/60/90-day overdue debtor aging ledgers, post partial collections, and automatically lock defaulters.</p>
                        <a href="countries/nigeria/credit-sales-management-software-nigeria.php" class="ng-card-link"><span id="card-6-link">Explore Credit Management</span> <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>

                <!-- 7. Building Materials & Hardware -->
                <div class="col-md-6 col-lg-4">
                    <div class="ng-card">
                        <div class="ng-card-icon"><i class="fa-solid fa-trowel-bricks"></i></div>
                        <h4 id="card-7-title">Building Material & Hardware ERP</h4>
                        <p id="card-7-desc">Contractor credit accounts, bulk unit conversion (tons, pieces, meters), yard stock dispatches, and delivery notes for cement and steel.</p>
                        <a href="countries/nigeria/building-material-erp-software-nigeria.php" class="ng-card-link"><span id="card-7-link">Explore Building Materials</span> <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>

                <!-- 8. Pharmacy & Medical Distribution -->
                <div class="col-md-6 col-lg-4">
                    <div class="ng-card">
                        <div class="ng-card-icon"><i class="fa-solid fa-prescription-bottle-medical"></i></div>
                        <h4 id="card-8-title">Pharmacy & Medical Supply ERP</h4>
                        <p id="card-8-desc">Front-shop retail POS, batch expiry tracking, automated reordering to pharmaceutical wholesalers, and wholesale medical distribution.</p>
                        <a href="countries/nigeria/pharmacy-erp-software-nigeria.php" class="ng-card-link"><span id="card-8-link">Explore Pharmacy ERP</span> <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>

                <!-- 9. Logistics & Fleet Haulage -->
                <div class="col-md-6 col-lg-4">
                    <div class="ng-card">
                        <div class="ng-card-icon"><i class="fa-solid fa-truck-fast"></i></div>
                        <h4 id="card-9-title">Logistics & Fleet Transport ERP</h4>
                        <p id="card-9-desc">Waybill management, vehicle trip dispatches, fuel and driver allowance logging, proof of delivery (POD), and haulage billing.</p>
                        <a href="countries/nigeria/logistics-erp-software-nigeria.php" class="ng-card-link"><span id="card-9-link">Explore Logistics ERP</span> <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- NIGERIA STRATEGIC COMMERCIAL HUBS -->
    <section class="ng-section">
        <div class="container">
            <div class="text-center mb-5">
                <span class="section-badge-ng" id="txt-hubs-badge">Regional Footprint</span>
                <h2 class="section-title-ng" id="txt-hubs-title">Serving Key Nigerian Commercial & Industrial Hubs</h2>
                <p class="text-muted" style="max-width: 750px; margin: 0 auto;" id="txt-hubs-desc">
                    Deploying cloud ERP and POS solutions tailored for Nigeria’s most vibrant commercial centers.
                </p>
            </div>

            <div class="row g-3">
                <div class="col-md-6 col-lg-3">
                    <a href="countries/nigeria/erp-software-lagos.php" class="ng-hub-card">
                        <span><i class="fa-solid fa-city text-success me-2"></i> <span id="hub-1-name">Lagos (Commercial Capital)</span></span>
                        <i class="fa-solid fa-arrow-right text-muted"></i>
                    </a>
                </div>
                <div class="col-md-6 col-lg-3">
                    <a href="countries/nigeria/erp-software-abuja.php" class="ng-hub-card">
                        <span><i class="fa-solid fa-landmark text-success me-2"></i> <span id="hub-2-name">Abuja (Federal Capital)</span></span>
                        <i class="fa-solid fa-arrow-right text-muted"></i>
                    </a>
                </div>
                <div class="col-md-6 col-lg-3">
                    <a href="countries/nigeria/erp-software-kano.php" class="ng-hub-card">
                        <span><i class="fa-solid fa-store text-success me-2"></i> <span id="hub-3-name">Kano (Northern Trade)</span></span>
                        <i class="fa-solid fa-arrow-right text-muted"></i>
                    </a>
                </div>
                <div class="col-md-6 col-lg-3">
                    <a href="countries/nigeria/erp-software-onitsha.php" class="ng-hub-card">
                        <span><i class="fa-solid fa-dolly text-success me-2"></i> <span id="hub-4-name">Onitsha (Commercial Hub)</span></span>
                        <i class="fa-solid fa-arrow-right text-muted"></i>
                    </a>
                </div>
                <div class="col-md-6 col-lg-3">
                    <a href="countries/nigeria/erp-software-aba.php" class="ng-hub-card">
                        <span><i class="fa-solid fa-shirt text-success me-2"></i> <span id="hub-5-name">Aba (Manufacturing / Ariaria)</span></span>
                        <i class="fa-solid fa-arrow-right text-muted"></i>
                    </a>
                </div>
                <div class="col-md-6 col-lg-3">
                    <a href="countries/nigeria/erp-software-port-harcourt.php" class="ng-hub-card">
                        <span><i class="fa-solid fa-oil-well text-success me-2"></i> <span id="hub-6-name">Port Harcourt (Rivers)</span></span>
                        <i class="fa-solid fa-arrow-right text-muted"></i>
                    </a>
                </div>
                <div class="col-md-6 col-lg-3">
                    <a href="countries/nigeria/erp-software-ibadan.php" class="ng-hub-card">
                        <span><i class="fa-solid fa-seedling text-success me-2"></i> <span id="hub-7-name">Ibadan (Oyo Hub)</span></span>
                        <i class="fa-solid fa-arrow-right text-muted"></i>
                    </a>
                </div>
                <div class="col-md-6 col-lg-3">
                    <a href="countries/nigeria/erp-software-ogun.php" class="ng-hub-card">
                        <span><i class="fa-solid fa-industry text-success me-2"></i> <span id="hub-8-name">Ogun (Industrial Corridor)</span></span>
                        <i class="fa-solid fa-arrow-right text-muted"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- NIGERIA TAX & COMPLIANCE SECTION -->
    <section class="ng-section bg-light-ng">
        <div class="container">
            <div class="row align-items-center g-5">
                <div class="col-lg-6">
                    <span class="section-badge-ng" id="txt-tax-badge">Financial Control & Transparency</span>
                    <h2 class="section-title-ng" id="txt-tax-title">Nigeria Tax-Aware Financial & Transaction Records</h2>
                    <p class="text-muted" style="line-height: 1.7;" id="txt-tax-desc">
                        In accordance with the updated Nigerian tax framework (including the Nigeria Tax Act 2025 reforms), Digify organizes all sales invoices, input VAT receipts, supplier withholding records, and financial books into audit-ready digital ledgers.
                    </p>
                    <ul class="list-unstyled">
                        <li class="d-flex align-items-start gap-2 mb-3">
                            <i class="fa-solid fa-circle-check text-success mt-1"></i>
                            <div><strong id="txt-tax-pt1-title">Structured Transaction Data:</strong> <span id="txt-tax-pt1-desc">Automatically records standard VAT on sales and purchases with line-item tax breakdowns.</span></div>
                        </li>
                        <li class="d-flex align-items-start gap-2 mb-3">
                            <i class="fa-solid fa-circle-check text-success mt-1"></i>
                            <div><strong id="txt-tax-pt2-title">Customer & Vendor Tax ID Records:</strong> <span id="txt-tax-pt2-desc">Store TIN (Tax Identification Numbers) on all customer profiles and official invoice PDFs.</span></div>
                        </li>
                        <li class="d-flex align-items-start gap-2 mb-3">
                            <i class="fa-solid fa-circle-check text-success mt-1"></i>
                            <div><strong id="txt-tax-pt3-title">Bank & CBN Payment Reconciliation:</strong> <span id="txt-tax-pt3-desc">Match electronic transfers, POS card settlements, and cash floats against posted sales daily.</span></div>
                        </li>
                    </ul>
                </div>

                <div class="col-lg-6">
                    <div class="p-4 p-md-5 bg-white rounded-4 shadow-sm border">
                        <h4 class="fw-bold text-dark mb-4" id="txt-why-title"><i class="fa-solid fa-chart-line text-success me-2"></i> Why Nigerian Businesses Choose Digify</h4>
                        <div class="d-flex align-items-start gap-3 mb-4">
                            <div class="ng-card-icon" style="min-width: 44px; width: 44px; height: 44px; font-size: 18px; margin-bottom: 0;"><i class="fa-solid fa-bolt"></i></div>
                            <div>
                                <h6 class="fw-bold text-dark mb-1" id="why-1-title">High Transaction Velocity</h6>
                                <p class="small text-muted mb-0" id="why-1-desc">Built to handle thousands of daily counter sales, fast barcode scans, and continuous warehouse dispatches without slowdowns.</p>
                            </div>
                        </div>
                        <div class="d-flex align-items-start gap-3 mb-4">
                            <div class="ng-card-icon" style="min-width: 44px; width: 44px; height: 44px; font-size: 18px; margin-bottom: 0;"><i class="fa-solid fa-file-invoice-dollar"></i></div>
                            <div>
                                <h6 class="fw-bold text-dark mb-1" id="why-2-title">Strict Credit Sales Control</h6>
                                <p class="small text-muted mb-0" id="why-2-desc">Lock customer accounts when credit limits or 30/60-day terms are breached to protect your cash flow and margins.</p>
                            </div>
                        </div>
                        <div class="d-flex align-items-start gap-3">
                            <div class="ng-card-icon" style="min-width: 44px; width: 44px; height: 44px; font-size: 18px; margin-bottom: 0;"><i class="fa-brands fa-whatsapp"></i></div>
                            <div>
                                <h6 class="fw-bold text-dark mb-1" id="why-3-title">WhatsApp Customer Engagement</h6>
                                <p class="small text-muted mb-0" id="why-3-desc">Engage customers where they already are with automated invoice delivery, payment reminders, and order tracking via WhatsApp.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- NIGERIAN INDIGENOUS LANGUAGES & MULTI-REGIONAL COMMERCE -->
    <section class="ng-section" style="background: #091a13; color: #ffffff;">
        <div class="container">
            <div class="text-center mb-5">
                <span class="section-badge-ng" style="background: rgba(52, 211, 153, 0.2); color: #6ee7b7; border: 1px solid rgba(52, 211, 153, 0.3);">
                    <i class="fa-solid fa-language me-1"></i> Multilingual Support
                </span>
                <h2 class="section-title-ng text-white" id="txt-lang-sec-title">Engineered for Nigeria's Major Indigenous Languages & Hubs</h2>
                <p class="text-white-50" style="max-width: 750px; margin: 0 auto; font-size: 15px;" id="txt-lang-sec-desc">
                    Operate in English, Hausa, Yoruba, or Igbo. Provide your cashiers, store staff, and warehouse teams with an intuitive interface and bilingual printed thermal receipts.
                </p>
            </div>

            <div class="row g-4">
                <!-- Hausa -->
                <div class="col-md-6 col-lg-3">
                    <div class="p-4 rounded-4 h-100" style="background: rgba(255, 255, 255, 0.05); border: 1px solid rgba(52, 211, 153, 0.2);">
                        <div class="d-flex align-items-center gap-2 mb-3">
                            <span class="badge bg-success" style="font-size: 11px;">KANO • KADUNA • ABUJA</span>
                        </div>
                        <h4 class="fw-bold text-white mb-2">Harshen Hausa</h4>
                        <p class="small text-white-50 mb-3">Domin masu shaguna da dillalan kaya a Arewacin Najeriya.</p>
                        <ul class="list-unstyled small text-white-50">
                            <li class="mb-2"><i class="fa-solid fa-check text-success me-2"></i> <strong>Sayarwa:</strong> POS da Lissafi</li>
                            <li class="mb-2"><i class="fa-solid fa-check text-success me-2"></i> <strong>Kaya:</strong> Adadin Kayan Shago</li>
                            <li class="mb-2"><i class="fa-solid fa-check text-success me-2"></i> <strong>Kuɗi:</strong> Biyan Naira (₦)</li>
                        </ul>
                    </div>
                </div>

                <!-- Yoruba -->
                <div class="col-md-6 col-lg-3">
                    <div class="p-4 rounded-4 h-100" style="background: rgba(255, 255, 255, 0.05); border: 1px solid rgba(52, 211, 153, 0.2);">
                        <div class="d-flex align-items-center gap-2 mb-3">
                            <span class="badge bg-warning text-dark" style="font-size: 11px;">LAGOS • IBADAN • OGUN</span>
                        </div>
                        <h4 class="fw-bold text-white mb-2">Èdè Yorùbá</h4>
                        <p class="small text-white-50 mb-3">Fun gbogbo awon oniṣowo ati olutaja ni Iwo-Oorun Naijiria.</p>
                        <ul class="list-unstyled small text-white-50">
                            <li class="mb-2"><i class="fa-solid fa-check text-success me-2"></i> <strong>Titaja:</strong> Eto POS kiakia</li>
                            <li class="mb-2"><i class="fa-solid fa-check text-success me-2"></i> <strong>Awon Oja:</strong> Isiro Ile-itaja</li>
                            <li class="mb-2"><i class="fa-solid fa-check text-success me-2"></i> <strong>Gbigba Owo:</strong> Isiro Owo Naira (₦)</li>
                        </ul>
                    </div>
                </div>

                <!-- Igbo -->
                <div class="col-md-6 col-lg-3">
                    <div class="p-4 rounded-4 h-100" style="background: rgba(255, 255, 255, 0.05); border: 1px solid rgba(52, 211, 153, 0.2);">
                        <div class="d-flex align-items-center gap-2 mb-3">
                            <span class="badge bg-primary" style="font-size: 11px;">ONITSHA • ABA • P/HARCOURT</span>
                        </div>
                        <h4 class="fw-bold text-white mb-2">Asụsụ Igbo</h4>
                        <p class="small text-white-50 mb-3">Maka ndị ahịa na ndị na-ebubata ngwaahịa na South-East.</p>
                        <ul class="list-unstyled small text-white-50">
                            <li class="mb-2"><i class="fa-solid fa-check text-success me-2"></i> <strong>Ahịa:</strong> POS na Ndepụta</li>
                            <li class="mb-2"><i class="fa-solid fa-check text-success me-2"></i> <strong>Ngwaahịa:</strong> Ụlọ Nkwakọba Ihe</li>
                            <li class="mb-2"><i class="fa-solid fa-check text-success me-2"></i> <strong>Ego:</strong> Nchịkwa Ụgwọ Naira (₦)</li>
                        </ul>
                    </div>
                </div>

                <!-- Nigerian Pidgin -->
                <div class="col-md-6 col-lg-3">
                    <div class="p-4 rounded-4 h-100" style="background: rgba(255, 255, 255, 0.05); border: 1px solid rgba(52, 211, 153, 0.2);">
                        <div class="d-flex align-items-center gap-2 mb-3">
                            <span class="badge bg-info text-dark" style="font-size: 11px;">NATIONWIDE • ALL MARKETS</span>
                        </div>
                        <h4 class="fw-bold text-white mb-2">Nigerian Pidgin</h4>
                        <p class="small text-white-50 mb-3">Everyday market commerce for sharp business owners.</p>
                        <ul class="list-unstyled small text-white-50">
                            <li class="mb-2"><i class="fa-solid fa-check text-success me-2"></i> <strong>Quick Billing:</strong> 3-Second Checkout</li>
                            <li class="mb-2"><i class="fa-solid fa-check text-success me-2"></i> <strong>Stock Balance:</strong> No Lost Item</li>
                            <li class="mb-2"><i class="fa-solid fa-check text-success me-2"></i> <strong>WhatsApp Slip:</strong> Sharp-Sharp Receipts</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CALL TO ACTION -->
    <section class="ng-section text-center text-white" style="background: linear-gradient(135deg, #008751 0%, #0f172a 100%);">
        <div class="container">
            <h2 class="display-6 fw-bold text-white mb-3" id="txt-cta-title">Ready to Scale Your Nigerian Business with Digify?</h2>
            <p class="text-white-50 fs-5 mb-4" style="max-width: 700px; margin-left: auto; margin-right: auto;" id="txt-cta-desc">
                Join retailers, wholesalers, FMCG distributors, and growing enterprises across Nigeria running on unified ERP and POS technology.
            </p>
            <div class="d-flex flex-wrap justify-content-center gap-3">
                <a href="contact.php?country=nigeria" class="btn btn-warning btn-lg px-4 py-3 fw-bold rounded-pill text-dark shadow">
                    <i class="fa-solid fa-calendar-check me-2"></i> <span id="txt-cta-btn1">Book Free Nigeria Demo</span>
                </a>
                <a href="https://wa.me/917425016636?text=Hello%20Digify%2C%20I%20would%20like%20to%20request%20a%20demo%20for%20Nigeria." target="_blank" class="btn btn-outline-light btn-lg px-4 py-3 fw-semibold rounded-pill">
                    <i class="fa-brands fa-whatsapp me-2"></i> <span id="txt-cta-btn2">Chat with ERP Specialist</span>
                </a>
            </div>
        </div>
    </section>
</div>

<!-- FULL NIGERIAN MULTILINGUAL ENGINE SCRIPT -->
<script>
var ngTranslations = {
    en: {
        badge: "🇳🇬 Nigeria • Retail POS, FMCG Distribution & Business ERP",
        h1: 'Business Management Software Built for <span class="text-gradient-ng">Nigerian Commerce & Enterprises</span>',
        sub: "Connect POS, inventory, purchasing, sales, customer collections, warehouses, CRM, and WhatsApp workflows in one centralized platform.",
        desc: "Engineered for Nigerian retailers, FMCG distributors, wholesalers, supermarkets, importers, manufacturers, and multi-branch operations across Lagos, Abuja, Kano, Onitsha, Port Harcourt, and Ibadan.",
        btnDemo: "Get Free Nigeria ERP Demo",
        btnSolutions: "Explore Industry Solutions",
        btnWhatsapp: "WhatsApp Chat",
        stat1Val: "3-Sec POS", stat1Lbl: "Ultra-Fast Till",
        stat2Val: "₦ Naira", stat2Lbl: "Multi-Branch",
        stat3Val: "WhatsApp", stat3Lbl: "Auto Invoices",
        formTitle: "Request Nigeria ERP Consultation",
        formSub: "Speak directly with our Nigerian commercial software specialists.",
        formName: "Your Name", formCompany: "Company / Enterprise Name",
        formPhone: "Phone / WhatsApp Number", formCity: "State / Commercial Hub",
        formSector: "Business Sector", formSubmit: "Submit Consultation Request",
        modBadge: "Complete Operational Suite",
        modTitle: "All-in-One Enterprise ERP & POS Modules for Nigeria",
        modDesc: "Engineered for Nigerian high-speed counter retail, multi-warehouse distribution, B2B trade, and customer credit collections.",
        card1Title: "Retail POS & Supermarket ERP", card1Desc: "Sub-second barcode scanning, dual price tiers, offline billing resilience, cashier shift balancing, and thermal receipt printing for supermarkets and retail stores.", card1Link: "Explore Retail POS",
        card2Title: "FMCG Distribution & Van Sales", card2Desc: "Mobile van route tracking, field orders, delivery agent cash reconciliations, bulk carton break-downs, and distribution depot dispatch management.", card2Link: "Explore FMCG ERP",
        card3Title: "Wholesale & Importer ERP", card3Desc: "Multi-tier wholesale pricing, landed cost auto-calculation for Apapa/Tin Can containers, carton pack conversions, and volume discount management.", card3Link: "Explore Wholesale ERP",
        card4Title: "Inventory & Multi-Warehouse WMS", card4Desc: "Real-time multi-location stock tracking, batch expiry alerts, barcode bin tagging, inter-branch stock transfers, and automated reorder triggers.", card4Link: "Explore Inventory WMS",
        card5Title: "WhatsApp CRM & Automation", card5Desc: "Automatic invoice delivery, payment reminders, statement dispatch, customer order confirmations, and AI-assisted chat sales directly via WhatsApp.", card5Link: "Explore WhatsApp CRM",
        card6Title: "Credit Sales & Debt Recovery", card6Desc: "Enforce strict customer credit limits, track 30/60/90-day overdue debtor aging ledgers, post partial collections, and automatically lock defaulters.", card6Link: "Explore Credit Management",
        card7Title: "Building Material & Hardware ERP", card7Desc: "Contractor credit accounts, bulk unit conversion (tons, pieces, meters), yard stock dispatches, and delivery notes for cement and steel.", card7Link: "Explore Building Materials",
        card8Title: "Pharmacy & Medical Supply ERP", card8Desc: "Front-shop retail POS, batch expiry tracking, automated reordering to pharmaceutical wholesalers, and wholesale medical distribution.", card8Link: "Explore Pharmacy ERP",
        card9Title: "Logistics & Fleet Transport ERP", card9Desc: "Waybill management, vehicle trip dispatches, fuel and driver allowance logging, proof of delivery (POD), and haulage billing.", card9Link: "Explore Logistics ERP",
        hubsBadge: "Regional Footprint", hubsTitle: "Serving Key Nigerian Commercial & Industrial Hubs", hubsDesc: "Deploying cloud ERP and POS solutions tailored for Nigeria’s most vibrant commercial centers.",
        hub1: "Lagos (Commercial Capital)", hub2: "Abuja (Federal Capital)", hub3: "Kano (Northern Trade)", hub4: "Onitsha (Commercial Hub)",
        hub5: "Aba (Manufacturing / Ariaria)", hub6: "Port Harcourt (Rivers)", hub7: "Ibadan (Oyo Hub)", hub8: "Ogun (Industrial Corridor)",
        taxBadge: "Financial Control & Transparency", taxTitle: "Nigeria Tax-Aware Financial & Transaction Records", taxDesc: "In accordance with the updated Nigerian tax framework (including the Nigeria Tax Act 2025 reforms), Digify organizes all sales invoices, input VAT receipts, supplier withholding records, and financial books into audit-ready digital ledgers.",
        taxPt1Title: "Structured Transaction Data:", taxPt1Desc: "Automatically records standard VAT on sales and purchases with line-item tax breakdowns.",
        taxPt2Title: "Customer & Vendor Tax ID Records:", taxPt2Desc: "Store TIN (Tax Identification Numbers) on all customer profiles and official invoice PDFs.",
        taxPt3Title: "Bank & CBN Payment Reconciliation:", taxPt3Desc: "Match electronic transfers, POS card settlements, and cash floats against posted sales daily.",
        whyTitle: "Why Nigerian Businesses Choose Digify",
        why1Title: "High Transaction Velocity", why1Desc: "Built to handle thousands of daily counter sales, fast barcode scans, and continuous warehouse dispatches without slowdowns.",
        why2Title: "Strict Credit Sales Control", why2Desc: "Lock customer accounts when credit limits or 30/60-day terms are breached to protect your cash flow and margins.",
        why3Title: "WhatsApp Customer Engagement", why3Desc: "Engage customers where they already are with automated invoice delivery, payment reminders, and order tracking via WhatsApp.",
        ctaTitle: "Ready to Scale Your Nigerian Business with Digify?",
        ctaDesc: "Join retailers, wholesalers, FMCG distributors, and growing enterprises across Nigeria running on unified ERP and POS technology.",
        ctaBtn1: "Book Free Nigeria Demo", ctaBtn2: "Chat with ERP Specialist"
    },
    ha: {
        badge: "🇳🇬 Najeriya • POS na Sayarwa, Rarraba FMCG & Tsarin Kasuwanci",
        h1: 'Tsarin Sarrafa Kasuwanci & POS don <span class="text-gradient-ng">Masu Kasuwanci a Najeriya</span>',
        sub: "Hadawa da sarrafa POS, lissafin kaya, saye da sayarwa, bin basussukan abokan ciniki, ma'ajiya da WhatsApp a wuri guda.",
        desc: "An gina shi musamman don shaguna, dillalan FMCG, manyan kasuwannin Kano (Kantin Kwari, Sabon Gari), Kaduna, da Abuja. Sarrafa kuɗin Naira (₦) cikin sauƙi ba tare da kuskure ba.",
        btnDemo: "Nemi Gwajin Digify Kyauta",
        btnSolutions: "Duba Fannonin Kasuwanci",
        btnWhatsapp: "Yi Magana a WhatsApp",
        stat1Val: "POS a Daƙiƙa 3", stat1Lbl: "Biyan Kuɗi Cikin Sauri",
        stat2Val: "Kuɗin Naira (₦)", stat2Lbl: "Reshe Da Yawa",
        stat3Val: "WhatsApp", stat3Lbl: "Rasit na Kai Tsaye",
        formTitle: "Nemi Shawarar ERP a Najeriya",
        formSub: "Yi magana kai tsaye da kwararrun masana software na kasuwancin Najeriya.",
        formName: "Sunanku", formCompany: "Sunan Kamfani / Shago",
        formPhone: "Lambar Waya / WhatsApp", formCity: "Jiha / Birnin Kasuwanci",
        formSector: "Bangaren Kasuwanci", formSubmit: "Aika Neman Shawara",
        modBadge: "Cikakken Tsarin Aiki",
        modTitle: "Duk Abubuwan ERP & POS Na Zamani Don Kasuwancin Najeriya",
        modDesc: "An kera shi don saurin biyan kuɗi a teburi, rarraba kaya daga ma'ajiya, da bin diddigin basussukan abokan ciniki.",
        card1Title: "POS na Shaguna & Supermarket", card1Desc: "Duba lambar barcode cikin daƙiƙa 1, aiki koda babu intanet, daidaita kuɗin mai karɓar kuɗi, da buga rasit.", card1Link: "Bincika POS na Shago",
        card2Title: "Rarraba FMCG & Tallan Mota", card2Desc: "Bin diddigin motocin kaya, odar ma'aikatan waje, daidaita kuɗin direbobi, da sauke katon a ma'ajiya.", card2Link: "Bincika Tsarin FMCG",
        card3Title: "Kasuwancin Sari & Shigo da Kaya", card3Desc: "Farashin sari mai matakai daban-daban, lissafin kuɗin kwastan na tashar Apapa/Tin Can, da ragi mai yawa.", card3Link: "Bincika Tsarin Sari",
        card4Title: "Kula da Kaya & Ma'ajiya (WMS)", card4Desc: "Lissafin kayan shago a lokaci guda, gargadin karewar lokaci, canja kaya tsakanin rassa, da sake yin oda.", card4Link: "Bincika Kula da Kaya",
        card5Title: "WhatsApp CRM & Ayyukan Kai Tsaye", card5Desc: "Aika rasit kai tsaye, tunatar da bashi, tabbatar da oda, da sayar da kaya ta hanyar WhatsApp.", card5Link: "Bincika WhatsApp CRM",
        card6Title: "Kula da Bashi & Karɓar Kuɗi", card6Desc: "Kayyade iyakar bashi, bin diddigin tsoffin basussuka na kwanaki 30/60/90, da kulle masu kin biya.", card6Link: "Bincika Kula da Bashi",
        card7Title: "Kayan Gini & Hardwea ERP", card7Desc: "Asusun bashi na yan kwangila, lissafin ton da mita, fitar da siminti da ƙarfe daga yadi.", card7Link: "Bincika Kayan Gini",
        card8Title: "Kantin Magani & Rarraba Magunguna", card8Desc: "POS na gaba-shago, bin lokacin karewar magunguna (expiry), da yin odar magunguna cikin sauƙi.", card8Link: "Bincika Kantin Magani",
        card9Title: "Sufuri & Kula da Motocin Kaya", card9Desc: "Kula da takardar waybill, man mota, alawus na direbobi, da tabbatar da isar kaya ga mai shi.", card9Link: "Bincika Tsarin Sufuri",
        hubsBadge: "Wuraren Kasuwanci", hubsTitle: "Muna Aiki a Manyan Biranen Kasuwancin Najeriya", hubsDesc: "Muna samar da fasahar ERP da POS don manyan cibiyoyin kasuwanci a faɗin Najeriya.",
        hub1: "Lagos (Babban Cibiyar Kasuwanci)", hub2: "Abuja (Babban Birnin Ƙasa)", hub3: "Kano (Cibiyar Kasuwancin Arewa)", hub4: "Onitsha (Babban Kasuwa)",
        hub5: "Aba (Kera Kayan Sawa / Ariaria)", hub6: "Port Harcourt (Rivers)", hub7: "Ibadan (Cibiyar Oyo)", hub8: "Ogun (Yankin Masana'antu)",
        taxBadge: "Kula da Kuɗi & Dokokin Haraji", taxTitle: "Tsarukan Lissafi & Haraji na Kasuwancin Najeriya", taxDesc: "Bisa sabon tsarin haraji na Najeriya (Nigeria Tax Act 2025), Digify yana tsara dukkan rasit na VAT da lissafin kudi a shirye don binciken haraji.",
        taxPt1Title: "Tsara Bayanan Sayarwa:", taxPt1Desc: "Yana lissafa harajin VAT akan dukkan saye da sayarwa kai tsaye.",
        taxPt2Title: "Lambar Haraji ta TIN:", taxPt2Desc: "Ajiye lambar TIN ta abokan ciniki da kamfanoni akan takardun kudi.",
        taxPt3Title: "Daidaita Kuɗin Banki & CBN:", taxPt3Desc: "Daidaita canja wurin kuɗi ta waya, katin POS, da kuɗin hannu a kowace rana.",
        whyTitle: "Dalilin da Ya Sa 'Yan Kasuwar Najeriya Suka Zaɓi Digify",
        why1Title: "Gudun Aiki Mai Sauri", why1Desc: "An gina shi don jure dubban ciniki a kowace rana da duban barcode ba tare da tsayawa ba.",
        why2Title: "Kariya Kan Basussuka", why2Desc: "Kulle asusun abokin ciniki idan ya wuce iyakar bashin da aka dibar masa don kare jarin ku.",
        why3Title: "Haɗin Kai ta WhatsApp", why3Desc: "Sada zumunci da abokan ciniki ta hanyar tura musu rasit da tunatar da bashi ta WhatsApp.",
        ctaTitle: "Kuna Shirye Ku Haɓaka Kasuwancinku a Najeriya?",
        ctaDesc: "Ku kasance tare da 'yan kasuwa, dillalai, da masana'antu a faɗin Najeriya da ke amfani da Digify ERP da POS.",
        ctaBtn1: "Nemi Gwaji Kyauta a Najeriya", ctaBtn2: "Tattauna da Masani a WhatsApp"
    },
    yo: {
        badge: "🇳🇬 Nigeria • Eto POS, Ìpínkiri FMCG & Ìṣàkóso Ìṣòwò",
        h1: 'Eto Kọmputa fun POS, Itaja & Isiro fun <span class="text-gradient-ng">Awọn Onisowo ni Nigeria</span>',
        sub: "So POS, iṣakoso oja, rira ati tita, gbigba owo lowo onibara, ile-ipamọ oja ati WhatsApp pọ lori pẹpẹ kan.",
        desc: "Ti a kọ fun awọn oniṣowo ni Lagos (Alaba, Balogun, Trade Fair), Ibadan, Ogun ati gbogbo ilu Naijiria. Se isiro owo Naira (₦) ati titaja re ni kiakia laisi asise.",
        btnDemo: "Gba Idanwo Ọfẹ ni Nigeria",
        btnSolutions: "Wo Awọn Solusan Iṣowo",
        btnWhatsapp: "Ba wa Sọrọ lori WhatsApp",
        stat1Val: "Iṣẹju-aaya 3 POS", stat1Lbl: "Titaja Kiakia",
        stat2Val: "Owo Naira (₦)", stat2Lbl: "Ẹka Pupọ",
        stat3Val: "WhatsApp", stat3Lbl: "Iwe Owo Aifọwọyi",
        formTitle: "Beere fun Igbaninimoran ERP ni Nigeria",
        formSub: "Ba awọn alamọja eto kọmputa iṣowo wa sọrọ taara.",
        formName: "Orukọ Rẹ", formCompany: "Orukọ Ile-iṣẹ / Ile-itaja",
        formPhone: "Nọmba Foonu / WhatsApp", formCity: "Ipinle / Ilu Iṣowo",
        formSector: "Ẹka Iṣowo", formSubmit: "Fi Ibeere Ranṣẹ",
        modBadge: "Eto Iṣẹ Pipe",
        modTitle: "Gbogbo Awọn Eto ERP & POS fun Awọn Oniṣowo ni Nigeria",
        modDesc: "Ti a ṣe fun titaja counter iyara to gaju, pinpin ọja lati ile-itọju, ati gbigba owo gbese onibara.",
        card1Title: "POS Itaja & Supermarket", card1Desc: "Ṣiṣayẹwo koodu barcode ni iṣẹju-aaya kan, sise laisi intanẹẹti, iwọntunwọnsi owo olutaja, ati titẹ iwe-ẹri.", card1Link: "Wo POS Itaja",
        card2Title: "Pipin FMCG & Tita Ọkọ ayọkẹlẹ", card2Desc: "Titele awọn ọkọ ayọkẹlẹ tita, aṣẹ lati ọdọ awọn aṣoju, ati isiro owo ọkọ ni kiakia.", card2Link: "Wo Eto FMCG",
        card3Title: "Titaja Sari & Gbigbe Ọja Wọle", card3Desc: "Iye owo osunwon oriṣiriṣi, iṣiro owo kọsitọmu lati ibudo Apapa/Tin Can, ati ẹdinwo nla.", card3Link: "Wo Eto Osunwon",
        card4Title: "Iṣakoso Ọja & Ile-Itọju (WMS)", card4Desc: "Mọ gbogbo oja ti o wa lẹsẹkẹsẹ, iwifunni ọjọ ipari, ati gbigbe ọja laarin awọn ẹka.", card4Link: "Wo Iṣakoso Ọja",
        card5Title: "WhatsApp CRM & Iṣe Aifọwọyi", card5Desc: "Firanṣẹ iwe-ẹri owo laifọwọyi, olurannileti gbese, ati tita ọja taara lori WhatsApp.", card5Link: "Wo WhatsApp CRM",
        card6Title: "Iṣakoso Gbese & Gbigba Owo", card6Desc: "Ṣeto opin gbese ti o muna, tọpinpin awọn onigbese ti ọjọ 30/60/90 ti kọja, ki o ti awọn ti ko sanwo.", card6Link: "Wo Iṣakoso Gbese",
        card7Title: "Ohun elo Ikole & Hardwea ERP", card7Desc: "Akọọlẹ gbese fun awọn kọntirakito, isiro tọọnu ati mita, pinpin simenti ati irin.", card7Link: "Wo Ohun elo Ikole",
        card8Title: "Ile-itaja Oogun & Pinpin Egbogi", card8Desc: "POS itaja oogun, titele ọjọ ipari oogun, ati pipaṣẹ oogun tuntun laisi wahala.", card8Link: "Wo Eto Ile-itaja Oogun",
        card9Title: "Eto Ọkọ & Gbigbe Ẹru", card9Desc: "Iṣakoso iwe waybill, epo ọkọ, owo awọn awakọ, ati ijẹrisi pe ẹru ti de ọwọ oluwa rẹ.", card9Link: "Wo Eto Ọkọ",
        hubsBadge: "Awọn Ilu Iṣowo", hubsTitle: "Nṣiṣẹ ni Awọn Gbọngan Iṣowo Pataki ni Nigeria", hubsDesc: "A n pese imọ-ẹrọ ERP ati POS fun awọn ilu iṣowo ti o tobi julọ kaakiri orilẹ-ede Naijiria.",
        hub1: "Lagos (Olu-ilu Iṣowo)", hub2: "Abuja (Olu-ilu Orilẹ-ede)", hub3: "Kano (Iṣowo Ariwa)", hub4: "Onitsha (Ibi Iṣowo nla)",
        hub5: "Aba (Ilu Aṣọ & Bata / Ariaria)", hub6: "Port Harcourt (Rivers)", hub7: "Ibadan (Aarin Oyo)", hub8: "Ogun (Agbegbe Ile-iṣẹ)",
        taxBadge: "Iṣakoso Owo & Ofin Owo-ori", taxTitle: "Awọn Akọsilẹ Isiro Owo-ori fun Iṣowo Nigeria", taxDesc: "Gẹgẹbi ofin owo-ori titun ti Nigeria (Nigeria Tax Act 2025), Digify n ṣeto gbogbo iwe-ẹri VAT ati iwe-owo si apẹrẹ ti o ṣetan fun iṣayẹwo.",
        taxPt1Title: "Iṣeto Data Tita:", taxPt1Desc: "Ṣe igbasilẹ owo-ori VAT lori rira ati tita laifọwọyi.",
        taxPt2Title: "Nọmba Idanimọ Owo-ori TIN:", taxPt2Desc: "Fipamọ nọmba TIN ti awọn onibara lori gbogbo iwe-owo PDF.",
        taxPt3Title: "Iwọntunwọnsi Owo Banki & CBN:", taxPt3Desc: "Ṣe afiwe gbigbe owo itanna, ẹrọ kaadi POS, ati owo owo lojoojumọ.",
        whyTitle: "Kini Idi ti Awọn Oniṣowo fi Yan Digify",
        why1Title: "Iyara Titaja Giga", why1Desc: "Ti a ṣe lati mu ẹgbẹẹgbẹrun tita ni gbogbo ọjọ laisi didaduro.",
        why2Title: "Iṣakoso Gbese ti o muna", why2Desc: "Ti akọọlẹ onibara ti o ba kọja opin gbese rẹ lati daabobo owo ati ere rẹ.",
        why3Title: "Ibapọ lori WhatsApp", why3Desc: "Firanṣẹ iwe-ẹri ati olurannileti sisanwo si awọn onibara rẹ lori WhatsApp.",
        ctaTitle: "Ṣe O Ṣetan lati Mu Iṣowo Rẹ Dagba ni Nigeria?",
        ctaDesc: "Darapọ mọ awọn oniṣowo, awọn olupin kaakiri, ati awọn ile-iṣẹ kaakiri Nigeria ti nlo Digify ERP ati POS.",
        ctaBtn1: "Beere Idanwo Ọfẹ", ctaBtn2: "Sọrọ pẹlu Alamọja lori WhatsApp"
    },
    ig: {
        badge: "🇳🇬 Nigeria • POS Azụmahịa, Nkesa FMCG & Njikwa Ụlọ Ọrụ",
        h1: 'Ngwanrọ Azụmahịa & POS Maka <span class="text-gradient-ng">Ndị Ahịa na Ụlọ Ọrụ na Nigeria</span>',
        sub: "Jikọọ POS, ndepụta ngwaahịa, ịzụrụ na ire ahịa, nchịkọta ụgwọ ndị ahịa, ụlọ nkwakọba ihe na WhatsApp n'otu ebe.",
        desc: "E mere ya maka ndị na-ere ahịa na Onitsha Main Market, Aba Ariaria, Port Harcourt na gafee Nigeria. Mara ngụkọta ego Naira (₦) na azụmahịa gị n'ụzọ dị mfe.",
        btnDemo: "Nweta Nlele N'efu na Nigeria",
        btnSolutions: "Lelee Ụzọ Azụmahịa",
        btnWhatsapp: "Kparịta na WhatsApp",
        stat1Val: "Sekọnd 3 POS", stat1Lbl: "Ịkwụ Ụgwọ Ngwa Ngwa",
        stat2Val: "Ego Naira (₦)", stat2Lbl: "Ọtụtụ Alaka",
        stat3Val: "WhatsApp", stat3Lbl: "Akwụkwọ Ụgwọ Akpaaka",
        formTitle: "Rịọ Ndụmọdụ ERP maka Nigeria",
        formSub: "Gwa ndị ọkachamara ngwanrọ azụmahịa anyị okwu ozugbo.",
        formName: "Aha Gị", formCompany: "Aha Ụlọ Ọrụ / Ahịa Gị",
        formPhone: "Nọmba Ekwentị / WhatsApp", formCity: "Steeti / Obodo Azụmahịa",
        formSector: "Ụdị Azụmahịa", formSubmit: "Zipu Arịrịọ Ndụmọdụ",
        modBadge: "Usoro Ọrụ Zuru Ezu",
        modTitle: "Ngwunye ERP & POS Zuru Ezu Maka Azụmahịa Nigeria",
        modDesc: "Emere maka ire ahịa ngwa ngwa n'elu tebụl, nkesa ngwaahịa site n'ụlọ nkwakọba ihe, na nchịkọta ụgwọ ndị ahịa.",
        card1Title: "POS Ahịa & Supermarket", card1Desc: "Nyochaa koodu barcode n'otu sekọnd, na-arụ ọrụ mgbe intaneti na-adịghị, hazie ego onye na-anata ego, ma bipụta akwụkwọ ọnụahịa.", card1Link: "Lelee POS Ahịa",
        card2Title: "Nkesa FMCG & Ahịa Ụgbọala", card2Desc: "Ndepụta ụgbọ ala na-ebuga ngwaahịa, iwu ahịa site n'aka ndị ọrụ n'èzí, na ngụkọta ego.", card2Link: "Lelee Eto FMCG",
        card3Title: "Ire Ahịa n'Ọnụ Ọgụgụ & Mbubata", card3Desc: "Ọnụ ahịa dị iche iche maka ndị na-azụ ọtụtụ, ngụkọta ego kọstọm site n'ọdụ ụgbọ mmiri Apapa/Tin Can.", card3Link: "Lelee Ahịa Ọnụ Ọgụgụ",
        card4Title: "Njikwa Ngwaahịa & Ụlọ Nkwakọba (WMS)", card4Desc: "Mara ngwaahịa niile fọdụrụ n'otu ntabi anya, ịdọ aka ná ntị maka ụbọchị mmebi, na ịkwaga ngwaahịa n'etiti alaka.", card4Link: "Lelee Njikwa Ngwaahịa",
        card5Title: "WhatsApp CRM & Omume Akpaaka", card5Desc: "Zipu akwụkwọ ọnụahịa na akpaaka, ncheta ụgwọ, na ire ahịa ozugbo site na WhatsApp.", card5Link: "Lelee WhatsApp CRM",
        card6Title: "Njikwa Ụgwọ & Nchịkọta Ego", card6Desc: "Debe oke ụgwọ siri ike, lelee ndị ji ụgwọ gafere ụbọchị 30/60/90, ma mechie ndị jụrụ ịkwụ ụgwọ.", card6Link: "Lelee Njikwa Ụgwọ",
        card7Title: "Ihe Eji Ewu Ụlọ & Hardwea ERP", card7Desc: "Akaụntụ ụgwọ maka ndị ọrụ nkwekọrịta, ngụkọta tọn na mita, na nkesa simenti na ígwè.", card7Link: "Lelee Ihe Ewu Ụlọ",
        card8Title: "Ụlọ Ahịa Ọgwụ & Nkesa Ọgwụ", card8Desc: "POS ụlọ ahịa ọgwụ, nlekota ụbọchị mmebi ọgwụ (expiry), na ịtụ ọgwụ ọhụrụ n'enweghị nsogbu.", card8Link: "Lelee Ahịa Ọgwụ",
        card9Title: "Njem & Nbufe Ibu ERP", card9Desc: "Njikwa akwụkwọ waybill, mmanụ ụgbọala, ụgwọ ndị ọkwọ ụgbọala, na nkwenye na ngwaahịa erutela.", card9Link: "Lelee Eto Njem",
        hubsBadge: "Obodo Azụmahịa", hubsTitle: "Na-arụ Ọrụ n'Ebe Azụmahịa Ndị Dị Mkpa na Nigeria", hubsDesc: "Anyị na-enye teknụzụ ERP na POS maka nnukwu ebe azụmahịa gafee Nigeria.",
        hub1: "Lagos (Isi Obodo Azụmahịa)", hub2: "Abuja (Isi Obodo Gọọmentị)", hub3: "Kano (Ahịa Ebe Ugwu)", hub4: "Onitsha (Nnukwu Ahịa)",
        hub5: "Aba (Ime Akwa na Akpụkpọ Ụkwụ / Ariaria)", hub6: "Port Harcourt (Rivers)", hub7: "Ibadan (Etiti Oyo)", hub8: "Ogun (Ebe Nrụpụta)",
        taxBadge: "Njikwa Ego & Iwu Ụtụ Isi", taxTitle: "Ndekọ Ego maka Ụtụ Isi na Azụmahịa Nigeria", taxDesc: "Dị ka iwu ụtụ isi ọhụrụ nke Nigeria (Nigeria Tax Act 2025) si dị, Digify na-ahazi akwụkwọ ọnụahịa VAT niile n'ụzọ dị njikere maka nyocha.",
        taxPt1Title: "Nhazi Data Ịzụ Ahịa:", taxPt1Desc: "Na-edekọ ụtụ isi VAT na ahịa na ịzụrụ ihe na akpaaka.",
        taxPt2Title: "Nọmba TIN Maka Ụtụ Isi:", taxPt2Desc: "Chekwaa nọmba TIN nke ndị ahịa na akwụkwọ ọnụahịa PDF niile.",
        taxPt3Title: "Njikọ Ego Ụlọ Akụ & CBN:", taxPt3Desc: "Tulee ego ezigara site na waya, igwe kaadị POS, na ego aka kwa ụbọchị.",
        whyTitle: "Ihe Mere Ndị Ọchụnta Ego Nigeria Ji Họrọ Digify",
        why1Title: "Ọsọ Ọrụ Dị Elu", why1Desc: "Emere iji nagide ọtụtụ puku azụmahịa kwa ụbọchị n'egbughị oge.",
        why2Title: "Njikwa Ụgwọ Siri Ike", why2Desc: "Mechie akaụntụ onye ahịa ma ọ gafere oke ụgwọ ya iji chebe ego na uru gị.",
        why3Title: "Mmekọrịta na WhatsApp", why3Desc: "Zipu akwụkwọ ọnụahịa na ncheta ịkwụ ụgwọ nye ndị ahịa gị na WhatsApp.",
        ctaTitle: "Ị Dị Njikere Ịbawanye Azụmahịa Gị na Nigeria?",
        ctaDesc: "Soro ndị na-ere ahịa, ndị na-ekesa ngwaahịa, na ụlọ ọrụ gafee Nigeria na-eji Digify ERP na POS.",
        ctaBtn1: "Rịọ Nlele N'efu", ctaBtn2: "Kparịta na WhatsApp"
    },
    pidgin: {
        badge: "🇳🇬 Nigeria • Sharp POS, FMCG Distribution & Beta ERP",
        h1: 'Beta ERP & POS Software Wey Go <span class="text-gradient-ng">Grow Your Business Sharp-Sharp</span>',
        sub: "Connect your POS, stock count, sales, customer debtors, warehouse and WhatsApp receipt together without headache.",
        desc: "Made for sharp Nigerian business owners for Lagos, Abuja, Kano, Onitsha, Aba and Port Harcourt. Bill customers in 3 seconds and track all your Naira (₦) money smoothly!",
        btnDemo: "Get Free Demo Sharp-Sharp",
        btnSolutions: "See Business Solutions",
        btnWhatsapp: "Chat Us on WhatsApp",
        stat1Val: "3-Sec POS", stat1Lbl: "Sharp-Sharp Billing",
        stat2Val: "₦ Naira", stat2Lbl: "All Your Branches",
        stat3Val: "WhatsApp", stat3Lbl: "Instant Receipt",
        formTitle: "Ask for Free Nigeria Demo",
        formSub: "Talk direct to our software people wey sabi Nigerian business well-well.",
        formName: "Your Name", formCompany: "Your Shop or Business Name",
        formPhone: "Phone / WhatsApp Number", formCity: "Your State / Market Area",
        formSector: "Which Business You Dey Do?", formSubmit: "Send My Demo Request",
        modBadge: "Complete Full Package",
        modTitle: "All The Complete Tools Wey Your Business Need For Nigeria",
        modDesc: "Built for sharp counter sales, storehouse stock, wholesale carton sales and debtor follow-up.",
        card1Title: "Retail POS & Supermarket", card1Desc: "Scan barcode in 1 second, sell even when light or internet cut, balance cashier money and print receipt clean.", card1Link: "Check Retail POS",
        card2Title: "FMCG Supply & Van Sales", card2Desc: "Follow your market motor, driver money calculation, carton breakdown and depot supply without story.", card2Link: "Check FMCG Supply",
        card3Title: "Wholesale & Container Import", card3Desc: "Wholesale carton price, wharf clearing cost from Apapa/Tin Can, and bulk buyer discount management.", card3Link: "Check Wholesale Suite",
        card4Title: "Stock Count & Storehouse (WMS)", card4Desc: "Know every single stock left for shop, expiry alert, move goods from one branch to another easily.", card4Link: "Check Stock Count",
        card5Title: "WhatsApp Invoices & Sales", card5Desc: "Send receipt to customer WhatsApp sharp-sharp, send debtor reminder and sell goods easily.", card5Link: "Check WhatsApp CRM",
        card6Title: "Customer Credit & Debt Recovery", card6Desc: "Set credit limit for customer, check 30/60/90 days old debt, lock stubborn debtors wey no wan pay.", card6Link: "Check Debt Recovery",
        card7Title: "Building Material & Rod / Cement", card7Desc: "Contractor credit book, count in tons and meters, dispatch cement and iron rod straight from yard.", card7Link: "Check Building Material",
        card8Title: "Pharmacy & Chemist POS", card8Desc: "Front chemist counter POS, expiry date tracker, and order new medicines straight from wholesale.", card8Link: "Check Pharmacy POS",
        card9Title: "Truck Transport & Waybill ERP", card9Desc: "Waybill paper, motor fuel log, driver allowance, and delivery proof so nobody go play you.", card9Link: "Check Transport ERP",
        hubsBadge: "Our Commercial Towns", hubsTitle: "We Dey Work Across Major Nigerian Market Towns", hubsDesc: "We provide solid cloud ERP and POS for sharp businesses across all parts of Nigeria.",
        hub1: "Lagos (Alaba, Trade Fair, Ikeja)", hub2: "Abuja (FCT Main Town)", hub3: "Kano (Kantin Kwari & Sabon Gari)", hub4: "Onitsha (Main Market Hub)",
        hub5: "Aba (Ariaria & Shoe Making)", hub6: "Port Harcourt (Oil & Commerce)", hub7: "Ibadan (Bodija & Dugbe)", hub8: "Ogun (Factories Corridor)",
        taxBadge: "Proper Money & Tax Records", taxTitle: "Clean Money Records & Tax Book for Nigerian Business", taxDesc: "Under Nigerian tax laws (including Nigeria Tax Act 2025), Digify keep all your sales receipts and VAT record clean for your auditor.",
        taxPt1Title: "Proper Daily Sales Record:", taxPt1Desc: "Record VAT tax on all your sales and market purchases automatically.",
        taxPt2Title: "Customer TIN Number Record:", taxPt2Desc: "Save company TIN tax number on top invoice PDF papers.",
        taxPt3Title: "Bank Transfer & POS Match:", taxPt3Desc: "Match bank alert, transfer, POS card swipe, and cash money every evening.",
        whyTitle: "Why Nigerian Business Owners Love Digify",
        why1Title: "Fast-Fast Daily Speed", why1Desc: "Handle thousands of customers for counter without computer freeze or hanging.",
        why2Title: "No More Customer Debt Loss", why2Desc: "Lock debtors when their time reach so your business money no go hang for outside.",
        why3Title: "Customer WhatsApp Receipt", why3Desc: "Send invoice and payment reminder straight to your customer WhatsApp phone.",
        ctaTitle: "You Dey Ready to Grow Your Business with Digify?",
        ctaDesc: "Join sharp shop owners, wholesalers, distributors, and factory owners across Nigeria using Digify ERP & POS.",
        ctaBtn1: "Book Free Demo Now", ctaBtn2: "Chat Us on WhatsApp"
    }
};

function switchNgLang(lang) {
    var d = ngTranslations[lang];
    if (!d) return;

    // Update active button state
    var btns = document.querySelectorAll('.ng-lang-btn');
    btns.forEach(function(btn) {
        btn.classList.remove('active');
    });
    if (event && event.target) {
        event.target.classList.add('active');
    }

    // Update Hero Text
    document.getElementById('txt-hero-badge').innerHTML = d.badge;
    document.getElementById('txt-hero-h1').innerHTML = d.h1;
    document.getElementById('txt-hero-sub').innerHTML = d.sub;
    document.getElementById('txt-hero-desc').innerHTML = d.desc;
    document.getElementById('txt-btn-demo').innerText = d.btnDemo;
    document.getElementById('txt-btn-solutions').innerText = d.btnSolutions;
    document.getElementById('txt-btn-whatsapp').innerText = d.btnWhatsapp;
    document.getElementById('stat-1-val').innerText = d.stat1Val;
    document.getElementById('stat-1-lbl').innerText = d.stat1Lbl;
    document.getElementById('stat-2-val').innerText = d.stat2Val;
    document.getElementById('stat-2-lbl').innerText = d.stat2Lbl;
    document.getElementById('stat-3-val').innerText = d.stat3Val;
    document.getElementById('stat-3-lbl').innerText = d.stat3Lbl;

    // Update Form Labels
    document.getElementById('txt-form-title').innerText = d.formTitle;
    document.getElementById('txt-form-sub').innerText = d.formSub;
    document.getElementById('lbl-form-name').innerText = d.formName;
    document.getElementById('lbl-form-company').innerText = d.formCompany;
    document.getElementById('lbl-form-phone').innerText = d.formPhone;
    document.getElementById('lbl-form-city').innerText = d.formCity;
    document.getElementById('lbl-form-sector').innerText = d.formSector;
    document.getElementById('btn-form-submit').innerHTML = '<i class="fa-solid fa-paper-plane me-1"></i> ' + d.formSubmit;

    // Update Modules Section
    document.getElementById('txt-mod-badge').innerText = d.modBadge;
    document.getElementById('txt-mod-title').innerText = d.modTitle;
    document.getElementById('txt-mod-desc').innerText = d.modDesc;

    // Update 9 Core Cards
    for (var i = 1; i <= 9; i++) {
        var t = document.getElementById('card-' + i + '-title');
        var desc = document.getElementById('card-' + i + '-desc');
        var link = document.getElementById('card-' + i + '-link');
        if (t && d['card' + i + 'Title']) t.innerText = d['card' + i + 'Title'];
        if (desc && d['card' + i + 'Desc']) desc.innerText = d['card' + i + 'Desc'];
        if (link && d['card' + i + 'Link']) link.innerText = d['card' + i + 'Link'];
    }

    // Update Regional Hubs Section
    document.getElementById('txt-hubs-badge').innerText = d.hubsBadge;
    document.getElementById('txt-hubs-title').innerText = d.hubsTitle;
    document.getElementById('txt-hubs-desc').innerText = d.hubsDesc;
    for (var h = 1; h <= 8; h++) {
        var hubEl = document.getElementById('hub-' + h + '-name');
        if (hubEl && d['hub' + h]) hubEl.innerText = d['hub' + h];
    }

    // Update Tax Section
    document.getElementById('txt-tax-badge').innerText = d.taxBadge;
    document.getElementById('txt-tax-title').innerText = d.taxTitle;
    document.getElementById('txt-tax-desc').innerText = d.taxDesc;
    document.getElementById('txt-tax-pt1-title').innerText = d.taxPt1Title;
    document.getElementById('txt-tax-pt1-desc').innerText = d.taxPt1Desc;
    document.getElementById('txt-tax-pt2-title').innerText = d.taxPt2Title;
    document.getElementById('txt-tax-pt2-desc').innerText = d.taxPt2Desc;
    document.getElementById('txt-tax-pt3-title').innerText = d.taxPt3Title;
    document.getElementById('txt-tax-pt3-desc').innerText = d.taxPt3Desc;

    // Update Why Digify Box
    document.getElementById('txt-why-title').innerHTML = '<i class="fa-solid fa-chart-line text-success me-2"></i> ' + d.whyTitle;
    document.getElementById('why-1-title').innerText = d.why1Title;
    document.getElementById('why-1-desc').innerText = d.why1Desc;
    document.getElementById('why-2-title').innerText = d.why2Title;
    document.getElementById('why-2-desc').innerText = d.why2Desc;
    document.getElementById('why-3-title').innerText = d.why3Title;
    document.getElementById('why-3-desc').innerText = d.why3Desc;

    // Update CTA Section
    document.getElementById('txt-cta-title').innerText = d.ctaTitle;
    document.getElementById('txt-cta-desc').innerText = d.ctaDesc;
    document.getElementById('txt-cta-btn1').innerText = d.ctaBtn1;
    document.getElementById('txt-cta-btn2').innerText = d.ctaBtn2;
}
</script>

<?php include(__DIR__ . '/../../footer.php'); ?>
