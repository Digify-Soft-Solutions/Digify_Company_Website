<?php 
include_once(__DIR__ . '/../../db.php');
include_once(__DIR__ . '/../../fetch_meta.php');

$pageTitle = "ERP Software Kenya | Cloud ERP for Retail, Mining, Manufacturing & Wholesale";
$pageDescription = "Digify Soft Solutions provides cloud ERP software for Kenyan businesses with accounting, eTIMS-ready invoicing workflows, inventory, POS, CRM, payroll, purchasing, manufacturing, mining operations and business analytics.";
$pageKeywords = "ERP Software Kenya, ERP software in Kenya, Cloud ERP Kenya, Supermarket ERP Kenya, Mining ERP Kenya, Wholesale retail ERP Kenya, FMCG ERP Kenya, Mining inventory software Kenya, KRA tax invoice software Kenya, Retail POS Kenya, Manufacturing ERP Kenya, Agriculture ERP Kenya, Logistics ERP Kenya, Business management software Kenya";
$pageCanonical = "https://www.digifysoft.in/erp-software-kenya";

include(__DIR__ . '/../../top.php');
include(__DIR__ . '/../../header.php');
?>

<style>
/* Kenya Suite Design System */
.ke-page-wrapper {
    font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
    color: #1e293b;
    overflow-x: hidden;
}

/* Hero Section */
.ke-hero {
    background: linear-gradient(135deg, #061e12 0%, #0c2e1c 45%, #183b27 100%);
    color: #ffffff;
    padding: 70px 0 85px;
    position: relative;
    overflow: hidden;
    border-bottom: 4px solid #16a34a;
}
.ke-hero::before {
    content: '';
    position: absolute;
    top: -15%;
    right: -10%;
    width: 680px;
    height: 680px;
    background: radial-gradient(circle, rgba(22, 163, 74, 0.22) 0%, rgba(224, 105, 48, 0.15) 50%, rgba(0, 0, 0, 0) 75%);
    border-radius: 50%;
    pointer-events: none;
}
.text-gradient-ke {
    background: linear-gradient(135deg, #22c55e 0%, #facc15 50%, #fb923c 100%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    display: inline-block;
}
.ke-hero-badge {
    background: rgba(34, 197, 94, 0.16);
    border: 1px solid rgba(34, 197, 94, 0.45);
    color: #86efac;
    font-size: 13px;
    font-weight: 700;
    padding: 7px 18px;
    border-radius: 30px;
    display: inline-flex;
    align-items: center;
    gap: 8px;
    margin-bottom: 18px;
}
.ke-hero h1 {
    font-size: 42px;
    font-weight: 900;
    line-height: 1.25;
    margin-bottom: 18px;
    letter-spacing: -0.5px;
}
.ke-hero-sub {
    font-size: 18px;
    font-weight: 600;
    color: #fde047;
    line-height: 1.5;
    margin-bottom: 14px;
}
.ke-hero-desc {
    font-size: 16px;
    line-height: 1.7;
    color: rgba(255, 255, 255, 0.88);
    max-width: 700px;
    margin-bottom: 28px;
}

/* Language Toggle Bar */
.lang-toggle-bar {
    display: inline-flex;
    background: rgba(255, 255, 255, 0.08);
    border: 1px solid rgba(255, 255, 255, 0.2);
    border-radius: 30px;
    padding: 4px;
    gap: 4px;
    margin-bottom: 22px;
}
.lang-pill {
    background: transparent;
    border: none;
    color: rgba(255, 255, 255, 0.8);
    font-size: 13px;
    font-weight: 700;
    padding: 6px 16px;
    border-radius: 20px;
    cursor: pointer;
    transition: all 0.25s ease;
}
.lang-pill.active {
    background: linear-gradient(135deg, #16a34a 0%, #22c55e 100%);
    color: #ffffff;
    box-shadow: 0 4px 12px rgba(22, 163, 74, 0.4);
}

/* Lead Card */
.hero-lead-card {
    background: #ffffff;
    border-radius: 20px;
    padding: 32px 28px;
    box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.35);
    color: #0f172a;
    border: 1px solid #e2e8f0;
}
.hero-lead-card h3 {
    font-size: 20px;
    font-weight: 800;
    color: #0f172a;
    margin-bottom: 6px;
}
.hero-lead-card p {
    font-size: 13px;
    color: #64748b;
    margin-bottom: 20px;
}
.hero-lead-card .form-control, .hero-lead-card .form-select {
    font-size: 14px;
    padding: 10px 14px;
    border-radius: 10px;
    border: 1px solid #cbd5e1;
    margin-bottom: 12px;
}
.btn-ke-primary {
    background: linear-gradient(135deg, #16a34a 0%, #15803d 100%);
    color: #ffffff;
    font-weight: 700;
    font-size: 15px;
    padding: 12px 24px;
    border-radius: 12px;
    border: none;
    transition: all 0.3s ease;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    gap: 8px;
    box-shadow: 0 10px 20px -5px rgba(22, 163, 74, 0.4);
    text-decoration: none;
}
.btn-ke-primary:hover {
    background: linear-gradient(135deg, #15803d 0%, #166534 100%);
    color: #ffffff;
    transform: translateY(-2px);
}
.btn-ke-outline {
    background: rgba(255, 255, 255, 0.08);
    border: 1px solid rgba(255, 255, 255, 0.25);
    color: #ffffff;
    font-weight: 700;
    font-size: 15px;
    padding: 12px 24px;
    border-radius: 12px;
    transition: all 0.3s ease;
    display: inline-flex;
    align-items: center;
    gap: 8px;
    text-decoration: none;
}
.btn-ke-outline:hover {
    background: rgba(255, 255, 255, 0.18);
    color: #ffffff;
    transform: translateY(-2px);
}

/* Section styling */
.ke-section { padding: 75px 0; }
.bg-light-ke { background-color: #f8fafc; }
.bg-dark-ke { background: #091a10; color: #ffffff; }
.section-badge-ke {
    display: inline-block;
    background: #ecfdf5;
    color: #15803d;
    font-size: 12px;
    font-weight: 800;
    text-transform: uppercase;
    letter-spacing: 0.8px;
    padding: 6px 14px;
    border-radius: 20px;
    margin-bottom: 12px;
    border: 1px solid #bbf7d0;
}
.section-badge-ke-dark {
    display: inline-block;
    background: rgba(34, 197, 94, 0.18);
    color: #86efac;
    font-size: 12px;
    font-weight: 800;
    text-transform: uppercase;
    letter-spacing: 0.8px;
    padding: 6px 14px;
    border-radius: 20px;
    margin-bottom: 12px;
    border: 1px solid rgba(34, 197, 94, 0.4);
}
.section-title-ke {
    font-size: 34px;
    font-weight: 900;
    color: #0f172a;
    line-height: 1.3;
    margin-bottom: 16px;
    letter-spacing: -0.5px;
}
.section-title-ke-dark {
    font-size: 34px;
    font-weight: 900;
    color: #ffffff;
    line-height: 1.3;
    margin-bottom: 16px;
    letter-spacing: -0.5px;
}
.section-sub-ke {
    font-size: 16px;
    color: #64748b;
    max-width: 780px;
    margin: 0 auto 40px;
    line-height: 1.7;
}

/* Feature & Industry Cards */
.ke-card {
    background: #ffffff;
    border: 1px solid #e2e8f0;
    border-radius: 16px;
    padding: 26px;
    transition: all 0.3s ease;
    height: 100%;
    display: flex;
    flex-direction: column;
}
.ke-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 20px 30px -10px rgba(0, 0, 0, 0.08);
    border-color: #86efac;
}
.ke-card-icon {
    width: 52px;
    height: 52px;
    border-radius: 14px;
    background: linear-gradient(135deg, #ecfdf5 0%, #d1fae5 100%);
    color: #15803d;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 22px;
    margin-bottom: 18px;
}
.ke-card h4 {
    font-size: 18px;
    font-weight: 800;
    color: #0f172a;
    margin-bottom: 10px;
}
.ke-card p {
    font-size: 14px;
    color: #64748b;
    line-height: 1.6;
    margin-bottom: 14px;
    flex-grow: 1;
}

/* List Items with Checks */
.ke-checklist {
    list-style: none;
    padding: 0;
    margin: 0 0 16px 0;
}
.ke-checklist li {
    font-size: 13.5px;
    color: #334155;
    margin-bottom: 7px;
    display: flex;
    align-items: flex-start;
    gap: 8px;
}
.ke-checklist li i {
    color: #16a34a;
    margin-top: 3px;
    font-size: 12px;
}

/* Compliance Notice Box */
.compliance-box-ke {
    background: #f0fdf4;
    border: 1px solid #86efac;
    border-left: 5px solid #16a34a;
    border-radius: 14px;
    padding: 24px 28px;
    margin-bottom: 30px;
}
.compliance-box-ke h4 {
    font-size: 18px;
    font-weight: 800;
    color: #166534;
    margin-bottom: 8px;
    display: flex;
    align-items: center;
    gap: 10px;
}
.compliance-box-ke p {
    font-size: 14.5px;
    color: #1e3a2b;
    line-height: 1.7;
    margin: 0;
}

/* Vertical Highlights */
.vertical-box-ke {
    background: linear-gradient(135deg, #ffffff 0%, #f8fafc 100%);
    border: 2px solid #e2e8f0;
    border-radius: 20px;
    padding: 36px;
    margin-bottom: 30px;
    transition: all 0.3s ease;
}
.vertical-box-ke:hover {
    border-color: #16a34a;
    box-shadow: 0 20px 40px -15px rgba(22, 163, 74, 0.12);
}
.vertical-tag {
    display: inline-block;
    background: #0f172a;
    color: #facc15;
    font-size: 12px;
    font-weight: 800;
    padding: 4px 12px;
    border-radius: 8px;
    margin-bottom: 12px;
}

/* Category Grid */
.category-pill {
    background: #f1f5f9;
    border: 1px solid #cbd5e1;
    color: #334155;
    font-size: 13px;
    font-weight: 600;
    padding: 8px 14px;
    border-radius: 10px;
    display: inline-flex;
    align-items: center;
    gap: 6px;
    margin: 4px;
}
.category-pill i {
    color: #16a34a;
}

/* Stats Counter Box */
.stat-box-ke {
    background: rgba(255, 255, 255, 0.06);
    border: 1px solid rgba(255, 255, 255, 0.15);
    border-radius: 14px;
    padding: 16px 12px;
    text-align: center;
    transition: all 0.3s ease;
}
.stat-box-ke:hover {
    background: rgba(255, 255, 255, 0.1);
    transform: translateY(-2px);
}
.stat-box-ke h3 {
    font-size: 26px;
    font-weight: 900;
    color: #facc15;
    margin-bottom: 4px;
    line-height: 1.1;
}
.stat-box-ke p {
    font-size: 12px;
    font-weight: 600;
    color: rgba(255, 255, 255, 0.85);
    margin: 0;
    line-height: 1.35;
}

/* FAQ Accordion */
.accordion-ke .accordion-item {
    border: 1px solid #e2e8f0;
    border-radius: 12px !important;
    margin-bottom: 14px;
    overflow: hidden;
}
.accordion-ke .accordion-button {
    font-weight: 700;
    font-size: 16px;
    color: #0f172a;
    background: #ffffff;
    padding: 18px 22px;
}
.accordion-ke .accordion-button:not(.collapsed) {
    color: #16a34a;
    background: #f0fdf4;
    box-shadow: none;
}
.accordion-ke .accordion-body {
    font-size: 14.5px;
    color: #475569;
    line-height: 1.7;
    padding: 20px 22px;
    background: #ffffff;
}

@media (max-width: 991px) {
    .ke-hero { padding: 45px 0 55px; }
    .ke-hero h1 { font-size: 28px; line-height: 1.3; }
    .ke-hero-sub { font-size: 16px; }
    .ke-hero-desc { font-size: 14px; }
    .hero-lead-card { margin-top: 25px; padding: 24px 20px; }
    .stat-box-ke { padding: 12px 8px; }
    .stat-box-ke h3 { font-size: 20px; }
    .stat-box-ke p { font-size: 11px; }
    .section-title-ke, .section-title-ke-dark { font-size: 24px; }
    .vertical-box-ke { padding: 20px; }
}
@media (max-width: 576px) {
    .ke-hero { padding: 35px 0 45px; }
    .ke-hero-badge { font-size: 11px; padding: 6px 12px; white-space: normal; line-height: 1.4; }
    .ke-hero h1 { font-size: 23px; }
    .stat-box-ke { padding: 10px 6px; border-radius: 10px; }
    .stat-box-ke h3 { font-size: 17px; margin-bottom: 2px; }
    .stat-box-ke p { font-size: 10px; line-height: 1.25; }
    .btn-ke-primary, .btn-ke-outline { width: 100%; justify-content: center; }
}
</style>

<div class="ke-page-wrapper">

    <!-- 1. HERO SECTION -->
    <section class="ke-hero" id="hero">
        <div class="container position-relative" style="z-index: 2;">
            <div class="row align-items-center g-4">
                <div class="col-lg-7">
                    <!-- Language Switcher -->
                    <div class="lang-toggle-bar">
                        <button class="lang-pill active" id="btnKeLangEn" onclick="switchKeLang('en')">🇬🇧 English</button>
                        <button class="lang-pill" id="btnKeLangSw" onclick="switchKeLang('sw')">🇰🇪 Kiswahili</button>
                    </div>

                    <div class="ke-hero-badge">
                        <span>🇰🇪</span>
                        <span class="ke-trans" data-en="Built for Kenyan Businesses • Retail, Mining, Agribusiness & Manufacturing" data-sw="Imejengwa kwa Biashara za Kenya • Rejareja, Madini, Kilimo-biashara na Viwanda">Built for Kenyan Businesses • Retail, Mining, Agribusiness & Manufacturing</span>
                    </div>

                    <h1 class="ke-trans" 
                        data-en="Cloud ERP Software for Businesses in Kenya" 
                        data-sw="Programu ya Cloud ERP kwa Biashara za Kenya">
                        Cloud ERP Software for Businesses in Kenya
                    </h1>

                    <div class="ke-hero-sub ke-trans" 
                        data-en="Manage your entire business with a powerful cloud ERP platform built for Kenya's retail, wholesale, distribution, manufacturing, mining, agriculture and growing business sectors."
                        data-sw="Simamia biashara yako yote kupitia jukwaa thabiti la wingu la ERP lililoundwa kwa ajili ya rejareja, jumla, usambazaji, viwanda, uchimbaji madini, kilimo na sekta zinazokua nchini Kenya.">
                        Manage your entire business with a powerful cloud ERP platform built for Kenya's retail, wholesale, distribution, manufacturing, mining, agriculture and growing business sectors.
                    </div>

                    <p class="ke-hero-desc ke-trans" 
                        data-en="Digify Soft Solutions brings accounting, inventory, POS, sales, purchasing, CRM, payroll, manufacturing and business analytics together in one integrated cloud ERP platform."
                        data-sw="Digify Soft Solutions inaleta uhasibu, orodha ya bidhaa, POS, mauzo, ununuzi, CRM, mishahara, uzalishaji wa viwandani na uchanganuzi wa biashara pamoja katika jukwaa moja la ERP.">
                        Digify Soft Solutions brings accounting, inventory, POS, sales, purchasing, CRM, payroll, manufacturing and business analytics together in one integrated cloud ERP platform.
                    </p>

                    <div class="d-flex flex-wrap gap-3 mb-4">
                        <a href="#demo-form" class="btn btn-ke-primary">
                            <i class="fas fa-calendar-check"></i>
                            <span class="ke-trans" data-en="Request a Free Demo" data-sw="Omba Onyesho la Bure">Request a Free Demo</span>
                        </a>
                        <a href="https://wa.me/919914444588?text=Hello%20Digify%20Kenya%20ERP%20Team" target="_blank" class="btn btn-ke-outline">
                            <i class="fab fa-whatsapp text-success"></i>
                            <span class="ke-trans" data-en="Talk to an ERP Expert" data-sw="Ongea na Mtaalamu wa ERP">Talk to an ERP Expert</span>
                        </a>
                    </div>

                    <!-- Quick Highlights -->
                    <div class="row g-3 pt-2">
                        <div class="col-4">
                            <div class="stat-box-ke">
                                <h3>16%</h3>
                                <p class="ke-trans" data-en="Kenya VAT & Invoicing Ready" data-sw="Tayari kwa VAT 16% na Ankara">Kenya VAT & Invoicing Ready</p>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="stat-box-ke">
                                <h3>eTIMS</h3>
                                <p class="ke-trans" data-en="Digital Tax Data Ready" data-sw="Rekodi za Kidijitali za Kodi">Digital Tax Data Ready</p>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="stat-box-ke">
                                <h3>16+</h3>
                                <p class="ke-trans" data-en="Kenya Sector Modules" data-sw="Sekta Kuu za Kenya">Kenya Sector Modules</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Right Form -->
                <div class="col-lg-5" id="demo-form">
                    <div class="hero-lead-card">
                        <div class="d-flex align-items-center justify-content-between mb-2">
                            <span class="badge bg-success text-white px-3 py-1 rounded-pill font-monospace ke-trans" data-en="🇰🇪 KENYA FAST-TRACK" data-sw="🇰🇪 KENYA FAST-TRACK">🇰🇪 KENYA FAST-TRACK</span>
                            <span class="text-muted small"><i class="fas fa-clock text-warning"></i> <span class="ke-trans" data-en="15-Min Live Demo" data-sw="Onyesho la Dakika 15">15-Min Live Demo</span></span>
                        </div>
                        <h3 class="ke-trans" data-en="Get a Customized Kenya Demo" data-sw="Pata Onyesho Maalum la Kenya">Get a Customized Kenya Demo</h3>
                        <p class="ke-trans" data-en="Discover how Digify unifies operations for your business in Nairobi, Mombasa, Kisumu, Eldoret & across Kenya." data-sw="Tazama jinsi Digify inavyounganisha shughuli za biashara yako Nairobi, Mombasa, Kisumu, Eldoret na kote Kenya.">Discover how Digify unifies operations for your business in Nairobi, Mombasa, Kisumu, Eldoret & across Kenya.</p>
                        
                        <form action="send_mail.php" method="POST" id="kenyaHeroLeadForm">
                            <input type="hidden" name="source" value="Kenya Main ERP Page">
                            <input type="hidden" name="country" value="Kenya">
                            
                            <div class="mb-2">
                                <label class="form-label small fw-bold text-dark ke-trans" data-en="Full Name" data-sw="Jina Kamili">Full Name</label>
                                <input type="text" name="name" class="form-control" placeholder="e.g. John Kamau / Sarah Omondi" required>
                            </div>

                            <div class="mb-2">
                                <label class="form-label small fw-bold text-dark ke-trans" data-en="Company / Business Name" data-sw="Jina la Kampuni / Biashara">Company / Business Name</label>
                                <input type="text" name="company" class="form-control" placeholder="e.g. Rift Valley Distributors / Nairobi Mart" required>
                            </div>

                            <div class="row g-2 mb-2">
                                <div class="col-6">
                                    <label class="form-label small fw-bold text-dark ke-trans" data-en="WhatsApp / Phone" data-sw="Simu / WhatsApp">WhatsApp / Phone</label>
                                    <input type="tel" name="phone" class="form-control" placeholder="+254 7XX XXX XXX" required>
                                </div>
                                <div class="col-6">
                                    <label class="form-label small fw-bold text-dark ke-trans" data-en="Work Email" data-sw="Barua Pepe">Work Email</label>
                                    <input type="email" name="email" class="form-control" placeholder="info@company.co.ke" required>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label class="form-label small fw-bold text-dark ke-trans" data-en="Select Industry" data-sw="Chagua Sekta Yako">Select Industry</label>
                                <select name="industry" class="form-select" required>
                                    <option value="" selected disabled>Select your business sector...</option>
                                    <option value="Supermarket & Retail">Supermarket & Retail Store</option>
                                    <option value="Wholesale & Distribution">Wholesale & FMCG Distribution</option>
                                    <option value="Mining & Quarrying">Mining & Quarrying</option>
                                    <option value="Manufacturing & Processing">Manufacturing & Assembly</option>
                                    <option value="Agriculture & Agribusiness">Agriculture, Tea/Coffee & Horticulture</option>
                                    <option value="Food Processing">Food & Beverage Processing</option>
                                    <option value="Logistics & Freight">Logistics, Transport & Warehousing</option>
                                    <option value="Construction & Materials">Construction & Hardware Materials</option>
                                    <option value="Hospitality & Restaurant">Hospitality, Hotel & Restaurant</option>
                                    <option value="Pharmacy & Healthcare">Pharmacy & Healthcare Supply</option>
                                    <option value="E-commerce & SME">E-commerce / Growing SME</option>
                                </select>
                            </div>

                            <button type="submit" class="btn btn-ke-primary w-100 py-2">
                                <span class="ke-trans" data-en="Schedule My Live Demo" data-sw="Panga Onyesho Langu la Moja kwa Moja">Schedule My Live Demo</span>
                                <i class="fas fa-arrow-right ms-2"></i>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 2. WHY DIGIFY ERP FOR KENYA? -->
    <section class="ke-section" id="why-kenya">
        <div class="container">
            <div class="text-center mb-5">
                <span class="section-badge-ke ke-trans" data-en="Centralized Cloud ERP" data-sw="ERP ya Wingu Moja">Centralized Cloud ERP</span>
                <h2 class="section-title-ke ke-trans" 
                    data-en="One Integrated ERP Platform for Kenyan Businesses" 
                    data-sw="Jukwaa Moja Lililounganishwa la ERP kwa Biashara za Kenya">
                    One Integrated ERP Platform for Kenyan Businesses
                </h2>
                <p class="section-sub-ke ke-trans" 
                    data-en="Kenyan businesses operate across diverse industries ranging from retail and wholesale to manufacturing, agriculture, mining, logistics and professional services. Digify Soft Solutions helps businesses bring their core operations together through one centralized cloud ERP platform. Manage sales, purchasing, inventory, accounting, customers, employees and operational data without relying on disconnected business systems."
                    data-sw="Biashara za Kenya zinafanya kazi katika sekta mbalimbali kuanzia rejareja na jumla hadi viwanda, kilimo, madini, usafirishaji na huduma za kitaalamu. Digify Soft Solutions inasaidia biashara kuunganisha shughuli zao zote kuu kupitia jukwaa moja la ERP. Simamia mauzo, ununuzi, orodha ya bidhaa, uhasibu, wateja, wafanyakazi na data ya uendeshaji bila kutegemea mifumo iliyotengana.">
                    Kenyan businesses operate across diverse industries ranging from retail and wholesale to manufacturing, agriculture, mining, logistics and professional services. Digify Soft Solutions helps businesses bring their core operations together through one centralized cloud ERP platform. Manage sales, purchasing, inventory, accounting, customers, employees and operational data without relying on disconnected business systems.
                </p>
            </div>

            <div class="row g-4">
                <div class="col-md-4">
                    <div class="ke-card">
                        <div class="ke-card-icon"><i class="fas fa-layer-group"></i></div>
                        <h4 class="ke-trans" data-en="Zero Disconnected Silos" data-sw="Hakuna Mifumo Iliyotengana">Zero Disconnected Silos</h4>
                        <p class="ke-trans" data-en="Connect POS, store branches, central warehouses, purchasing departments, and accounting books into a unified cloud database with real-time sync." data-sw="Unganisha POS, matawi ya maduka, bohari kuu, vitengo vya ununuzi, na vitabu vya uhasibu katika mfumo mmoja wa wingu wenye ulandanishi wa wakati halisi.">Connect POS, store branches, central warehouses, purchasing departments, and accounting books into a unified cloud database with real-time sync.</p>
                        <ul class="ke-checklist">
                            <li class="ke-trans" data-en="<i class='fas fa-check-circle'></i> Multi-branch live stock sync" data-sw="<i class='fas fa-check-circle'></i> Ulandanishi wa hisa za matawi kwa wakati halisi"><i class="fas fa-check-circle"></i> Multi-branch live stock sync</li>
                            <li class="ke-trans" data-en="<i class='fas fa-check-circle'></i> Centralized product master" data-sw="<i class='fas fa-check-circle'></i> Katalogi kuu ya bidhaa"><i class="fas fa-check-circle"></i> Centralized product master</li>
                            <li class="ke-trans" data-en="<i class='fas fa-check-circle'></i> Automated ledger entries" data-sw="<i class='fas fa-check-circle'></i> Kumbukumbu za kiotomatiki za leja"><i class="fas fa-check-circle"></i> Automated ledger entries</li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="ke-card">
                        <div class="ke-card-icon"><i class="fas fa-file-invoice-dollar"></i></div>
                        <h4 class="ke-trans" data-en="Organized Tax & Financial Records" data-sw="Rekodi Sahihi za Kodi na Fedha">Organized Tax & Financial Records</h4>
                        <p class="ke-trans" data-en="Capture accurate transaction-level details with standard 16% VAT rates, automated credit/debit notes, and structured electronic transaction records." data-sw="Nasa maelezo sahihi ya miamala kwa viwango rasmi vya VAT 16%, hati za mkopo/debiti za kiotomatiki, na rekodi za kielektroniki za miamala.">Capture accurate transaction-level details with standard 16% VAT rates, automated credit/debit notes, and structured electronic transaction records.</p>
                        <ul class="ke-checklist">
                            <li class="ke-trans" data-en="<i class='fas fa-check-circle'></i> 16% VAT automated calculations" data-sw="<i class='fas fa-check-circle'></i> Hesabu za kiotomatiki za VAT 16%"><i class="fas fa-check-circle"></i> 16% VAT automated calculations</li>
                            <li class="ke-trans" data-en="<i class='fas fa-check-circle'></i> Standard electronic transaction logs" data-sw="<i class='fas fa-check-circle'></i> Kumbukumbu rasmi za ankara za kidijitali"><i class="fas fa-check-circle"></i> Standard electronic transaction logs</li>
                            <li class="ke-trans" data-en="<i class='fas fa-check-circle'></i> Exportable audit trails" data-sw="<i class='fas fa-check-circle'></i> Njia za ukaguzi zinazoweza kupakuliwa"><i class="fas fa-check-circle"></i> Exportable audit trails</li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="ke-card">
                        <div class="ke-card-icon"><i class="fas fa-chart-line"></i></div>
                        <h4 class="ke-trans" data-en="Data-Driven Growth" data-sw="Ukuaji Unaotokana na Data">Data-Driven Growth</h4>
                        <p class="ke-trans" data-en="Empower executives and managers with branch profitability, product margins, supplier performance metrics, and inventory turnover dashboards." data-sw="Wezesha wakurugenzi na mameneja kwa takwimu za faida ya matawi, faida ya bidhaa, utendaji wa wasambazaji, na ripoti za mzunguko wa bidhaa.">Empower executives and managers with branch profitability, product margins, supplier performance metrics, and inventory turnover dashboards.</p>
                        <ul class="ke-checklist">
                            <li class="ke-trans" data-en="<i class='fas fa-check-circle'></i> Branch-wise P&L statements" data-sw="<i class='fas fa-check-circle'></i> Ripoti za faida na hasara kwa kila tawi"><i class="fas fa-check-circle"></i> Branch-wise P&L statements</li>
                            <li class="ke-trans" data-en="<i class='fas fa-check-circle'></i> Fast vs slow moving inventory" data-sw="<i class='fas fa-check-circle'></i> Bidhaa zinazotembea haraka na taratibu"><i class="fas fa-check-circle"></i> Fast vs slow moving inventory</li>
                            <li class="ke-trans" data-en="<i class='fas fa-check-circle'></i> Executive decision dashboards" data-sw="<i class='fas fa-check-circle'></i> Dashibodi za maamuzi ya usimamizi"><i class="fas fa-check-circle"></i> Executive decision dashboards</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 3. KENYA DIGITAL TAX ENVIRONMENT & 4. VAT SECTION -->
    <section class="ke-section bg-light-ke" id="digital-tax-kenya">
        <div class="container">
            <div class="compliance-box-ke">
                <h4><i class="fas fa-landmark"></i> <span class="ke-trans" data-en="ERP for Kenya's Digital Tax & Invoicing Environment" data-sw="ERP kwa Mazingira ya Kodi ya Kidijitali na Ankara nchini Kenya">ERP for Kenya's Digital Tax & Invoicing Environment</span></h4>
                <p class="ke-trans" 
                    data-en="Kenya has moved strongly toward digital tax administration and electronic invoicing. Digify Soft Solutions provides centralized sales, purchase, invoice and financial transaction management capabilities to help businesses organize their business data in a digital environment. In accordance with KRA guidelines, all persons engaged in business are required to onboard onto eTIMS and issue electronic tax invoices (eTIMS is not limited to VAT-registered businesses). Manage sales transactions, invoices, purchases and business records through a centralized digital ERP environment."
                    data-sw="Kenya imepiga hatua kubwa kuelekea usimamizi wa kodi wa kidijitali na utoaji wa ankara za kielektroniki. Digify Soft Solutions inatoa uwezo wa usimamizi wa mauzo, ununuzi, ankara na miamala ya kifedha ili kusaidia biashara kupanga data zao katika mazingira ya kidijitali. Kulingana na miongozo ya KRA, watu wote wanaofanya biashara wanatakiwa kujiunga na eTIMS na kutoa ankara za kodi za kielektroniki (eTIMS haizuiliwi kwa biashara zilizosajiliwa VAT pekee). Simamia miamala ya mauzo, ankara, ununuzi na rekodi za biashara kupitia mazingira ya kati ya kidijitali ya ERP.">
                    Kenya has moved strongly toward digital tax administration and electronic invoicing. Digify Soft Solutions provides centralized sales, purchase, invoice and financial transaction management capabilities to help businesses organize their business data in a digital environment. In accordance with KRA guidelines, all persons engaged in business are required to onboard onto eTIMS and issue electronic tax invoices (eTIMS is not limited to VAT-registered businesses). Manage sales transactions, invoices, purchases and business records through a centralized digital ERP environment.
                </p>
            </div>

            <div class="row align-items-center g-4 mt-2">
                <div class="col-lg-6">
                    <span class="section-badge-ke ke-trans" data-en="Section 4: Tax & Finance" data-sw="Sehemu ya 4: Kodi na Fedha">Section 4: Tax & Finance</span>
                    <h2 class="section-title-ke ke-trans" 
                        data-en="VAT & Financial Management for Kenyan Businesses" 
                        data-sw="Usimamizi wa VAT na Fedha kwa Biashara za Kenya">
                        VAT & Financial Management for Kenyan Businesses
                    </h2>
                    <p class="ke-trans" 
                        data-en="Manage sales, purchases, invoices, expenses, customers, suppliers and financial transactions through one centralized ERP environment. In Kenya, the standard VAT rate is 16%, and monthly VAT returns and payments are generally due by the 20th of the following month, with electronic tax invoice data tied into digital reporting."
                        data-sw="Simamia mauzo, ununuzi, ankara, matumizi, wateja, wauzaji na miamala ya kifedha kupitia mfumo mmoja wa ERP. Nchini Kenya, kiwango cha kawaida cha VAT ni 16%, na ripoti na malipo ya kila mwezi ya VAT hulipwa kabla ya tarehe 20 ya mwezi unaofuata, huku ankara za kidijitali zikiunganishwa na ripoti rasmi.">
                        Manage sales, purchases, invoices, expenses, customers, suppliers and financial transactions through one centralized ERP environment. In Kenya, the standard VAT rate is 16%, and monthly VAT returns and payments are generally due by the 20th of the following month, with electronic tax invoice data tied into digital reporting.
                    </p>

                    <div class="row g-2 mt-3">
                        <div class="col-sm-6">
                            <div class="p-3 bg-white border rounded-3">
                                <i class="fas fa-receipt text-success me-2"></i>
                                <strong class="ke-trans" data-en="Sales Transaction Records" data-sw="Kumbukumbu za Mauzo">Sales Transaction Records</strong>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="p-3 bg-white border rounded-3">
                                <i class="fas fa-shopping-bag text-success me-2"></i>
                                <strong class="ke-trans" data-en="Purchase Transaction Logs" data-sw="Kumbukumbu za Ununuzi">Purchase Transaction Logs</strong>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="p-3 bg-white border rounded-3">
                                <i class="fas fa-file-invoice text-success me-2"></i>
                                <strong class="ke-trans" data-en="Invoice Management" data-sw="Usimamizi wa Ankara">Invoice Management</strong>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="p-3 bg-white border rounded-3">
                                <i class="fas fa-users text-success me-2"></i>
                                <strong class="ke-trans" data-en="Customer Records (PIN/TIN)" data-sw="Kumbukumbu za Wateja (KRA PIN)">Customer Records (PIN/TIN)</strong>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="p-3 bg-white border rounded-3">
                                <i class="fas fa-truck-loading text-success me-2"></i>
                                <strong class="ke-trans" data-en="Supplier Records & Bills" data-sw="Kumbukumbu za Wauzaji na Ankara">Supplier Records & Bills</strong>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="p-3 bg-white border rounded-3">
                                <i class="fas fa-exchange-alt text-success me-2"></i>
                                <strong class="ke-trans" data-en="Credit & Debit Notes" data-sw="Hati za Mkopo na Debiti">Credit & Debit Notes</strong>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="ke-card p-4 shadow-sm border-2">
                        <div class="d-flex align-items-center justify-content-between border-bottom pb-3 mb-3">
                            <h5 class="m-0 fw-bold"><i class="fas fa-shield-alt text-success me-2"></i> <span class="ke-trans" data-en="Kenya Financial Reporting Engine" data-sw="Injini ya Ripoti za Kifedha Kenya">Kenya Financial Reporting Engine</span></h5>
                            <span class="badge bg-success-subtle text-success border border-success-subtle px-3 py-1 rounded-pill ke-trans" data-en="16% VAT Automated" data-sw="VAT 16% Imejumuishwa">16% VAT Automated</span>
                        </div>
                        <p class="small text-muted mb-3 ke-trans" data-en="Centralized ledger, journal vouchers, profit & loss, balance sheets, and tax-ready summaries designed for Kenyan accountants and business managers." data-sw="Leja kuu, vocha za matumizi, ripoti za faida na hasara, mizania, na muhtasari wa kodi iliyoundwa kwa wahasibu na wasimamizi wa biashara nchini Kenya.">Centralized ledger, journal vouchers, profit & loss, balance sheets, and tax-ready summaries designed for Kenyan accountants and business managers.</p>
                        
                        <div class="table-responsive">
                            <table class="table table-sm table-bordered m-0 align-middle">
                                <thead class="table-light">
                                    <tr>
                                        <th class="ke-trans" data-en="Report Type" data-sw="Aina ya Ripoti">Report Type</th>
                                        <th class="ke-trans" data-en="Frequency" data-sw="Muda">Frequency</th>
                                        <th class="ke-trans" data-en="Output Format" data-sw="Umbizo">Output Format</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><strong class="ke-trans" data-en="VAT Transaction Register" data-sw="Daftari la Miamala ya VAT">VAT Transaction Register</strong></td>
                                        <td class="ke-trans" data-en="Monthly (Due 20th)" data-sw="Kila Mwezi (Tarehe 20)">Monthly (Due 20th)</td>
                                        <td><span class="badge bg-light text-dark border ke-trans" data-en="Excel / PDF" data-sw="Excel / PDF">Excel / PDF</span></td>
                                    </tr>
                                    <tr>
                                        <td><strong class="ke-trans" data-en="Sales Invoicing Audit Trail" data-sw="Ukaguzi wa Ankara za Mauzo">Sales Invoicing Audit Trail</strong></td>
                                        <td class="ke-trans" data-en="Real-time" data-sw="Wakati Halisi">Real-time</td>
                                        <td><span class="badge bg-light text-dark border ke-trans" data-en="CSV / XML" data-sw="CSV / XML">CSV / XML</span></td>
                                    </tr>
                                    <tr>
                                        <td><strong class="ke-trans" data-en="Purchasing & Withholding Log" data-sw="Kumbukumbu za Ununuzi na Kodi">Purchasing & Withholding Log</strong></td>
                                        <td class="ke-trans" data-en="Daily / Monthly" data-sw="Kila Siku / Mwezi">Daily / Monthly</td>
                                        <td><span class="badge bg-light text-dark border ke-trans" data-en="Structured Data" data-sw="Data Iliyopangwa">Structured Data</span></td>
                                    </tr>
                                    <tr>
                                        <td><strong class="ke-trans" data-en="Credit & Debit Note Ledger" data-sw="Leja ya Hati za Mkopo na Debiti">Credit & Debit Note Ledger</strong></td>
                                        <td class="ke-trans" data-en="Per Occurrence" data-sw="Kila Muamala">Per Occurrence</td>
                                        <td><span class="badge bg-light text-dark border ke-trans" data-en="Linked to Invoices" data-sw="Imeunganishwa na Ankara">Linked to Invoices</span></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 5 to 14. SUPERMARKET ERP SHOWCASE & DEDICATED LINK -->
    <section class="ke-section" id="supermarket-kenya">
        <div class="container">
            <div class="row align-items-center mb-4">
                <div class="col-lg-8">
                    <span class="section-badge-ke ke-trans" data-en="Sections 5-14: Retail Flagship" data-sw="Sehemu ya 5-14: Rejareja na Maduka Makubwa"><i class="fas fa-shopping-cart me-1"></i> Sections 5-14: Retail Flagship</span>
                    <h2 class="section-title-ke ke-trans" 
                        data-en="Supermarket ERP Software for Businesses in Kenya" 
                        data-sw="Programu ya ERP ya Maduka Makubwa (Supermarket) nchini Kenya">
                        Supermarket ERP Software for Businesses in Kenya
                    </h2>
                    <p class="text-muted m-0 ke-trans" 
                        data-en="Run your supermarket, retail store or multi-branch grocery business with integrated POS, inventory, purchasing, suppliers, customers and business analytics. Digify Soft Solutions provides a centralized ERP platform designed to help supermarkets manage thousands of products, multiple suppliers, stores, warehouses, sales transactions and inventory movements."
                        data-sw="Endesha duka lako kubwa, duka la rejareja au mtandao wa maduka ya vyakula ukiwa na POS iliyounganishwa, orodha ya bidhaa, ununuzi, wauzaji, wateja na uchanganuzi wa biashara. Digify Soft Solutions inatoa jukwaa la ERP lililoundwa kusaidia maduka makubwa kusimamia maelfu ya bidhaa, wauzaji wengi, maduka, maghala na mauzo.">
                        Run your supermarket, retail store or multi-branch grocery business with integrated POS, inventory, purchasing, suppliers, customers and business analytics. Digify Soft Solutions provides a centralized ERP platform designed to help supermarkets manage thousands of products, multiple suppliers, stores, warehouses, sales transactions and inventory movements.
                    </p>
                </div>
                <div class="col-lg-4 text-lg-end mt-3 mt-lg-0">
                    <a href="supermarket-erp-software-kenya.php" class="btn btn-ke-primary">
                        <i class="fas fa-store"></i>
                        <span class="ke-trans" data-en="Explore Kenya Supermarket ERP" data-sw="Tazama ERP ya Supermarket Kenya">Explore Kenya Supermarket ERP</span>
                    </a>
                </div>
            </div>

            <!-- Product Catalogue 14 Categories (Section 6) -->
            <div class="p-4 bg-light-ke rounded-4 border mb-4">
                <h5 class="fw-bold mb-3"><i class="fas fa-boxes text-success me-2"></i> <span class="ke-trans" data-en="6. Centralized Supermarket Product Catalogue (14 Categories)" data-sw="6. Katalogi Kuu ya Bidhaa za Supermarket (Kategoria 14)">6. Centralized Supermarket Product Catalogue (14 Categories)</span></h5>
                <div class="d-flex flex-wrap">
                    <span class="category-pill ke-trans" data-en="<i class='fas fa-shopping-basket'></i> Food & Groceries" data-sw="<i class='fas fa-shopping-basket'></i> Vyakula na Vyakula vya Kawaida"><i class="fas fa-shopping-basket"></i> Food & Groceries</span>
                    <span class="category-pill ke-trans" data-en="<i class='fas fa-wine-bottle'></i> Beverages" data-sw="<i class='fas fa-wine-bottle'></i> Vinywaji"><i class="fas fa-wine-bottle"></i> Beverages</span>
                    <span class="category-pill ke-trans" data-en="<i class='fas fa-cheese'></i> Dairy Products" data-sw="<i class='fas fa-cheese'></i> Maziwa na Bidhaa za Maziwa"><i class="fas fa-cheese"></i> Dairy Products</span>
                    <span class="category-pill ke-trans" data-en="<i class='fas fa-bread-slice'></i> Bakery Products" data-sw="<i class='fas fa-bread-slice'></i> Mikate na Keki"><i class="fas fa-bread-slice"></i> Bakery Products</span>
                    <span class="category-pill ke-trans" data-en="<i class='fas fa-carrot'></i> Fresh Produce" data-sw="<i class='fas fa-carrot'></i> Mboga na Matunda Safi"><i class="fas fa-carrot"></i> Fresh Produce</span>
                    <span class="category-pill ke-trans" data-en="<i class='fas fa-drumstick-bite'></i> Meat & Poultry" data-sw="<i class='fas fa-drumstick-bite'></i> Nyama na Kuku"><i class="fas fa-drumstick-bite"></i> Meat & Poultry</span>
                    <span class="category-pill ke-trans" data-en="<i class='fas fa-couch'></i> Household Products" data-sw="<i class='fas fa-couch'></i> Bidhaa za Nyumbani"><i class="fas fa-couch"></i> Household Products</span>
                    <span class="category-pill ke-trans" data-en="<i class='fas fa-spa'></i> Personal Care" data-sw="<i class='fas fa-spa'></i> Huduma ya Kibinafsi"><i class="fas fa-spa"></i> Personal Care</span>
                    <span class="category-pill ke-trans" data-en="<i class='fas fa-pump-soap'></i> Cleaning Products" data-sw="<i class='fas fa-pump-soap'></i> Sabuni na Usafi"><i class="fas fa-pump-soap"></i> Cleaning Products</span>
                    <span class="category-pill ke-trans" data-en="<i class='fas fa-tv'></i> Electronics" data-sw="<i class='fas fa-tv'></i> Vifaa vya Umeme"><i class="fas fa-tv"></i> Electronics</span>
                    <span class="category-pill ke-trans" data-en="<i class='fas fa-pen-nib'></i> Stationery" data-sw="<i class='fas fa-pen-nib'></i> Vifaa vya Ofisi na Shule"><i class="fas fa-pen-nib"></i> Stationery</span>
                    <span class="category-pill ke-trans" data-en="<i class='fas fa-baby'></i> Baby Products" data-sw="<i class='fas fa-baby'></i> Bidhaa za Watoto"><i class="fas fa-baby"></i> Baby Products</span>
                    <span class="category-pill ke-trans" data-en="<i class='fas fa-pills'></i> Pharmaceutical & Health Products" data-sw="<i class='fas fa-pills'></i> Dawa na Afya"><i class="fas fa-pills"></i> Pharmaceutical & Health Products</span>
                    <span class="category-pill ke-trans" data-en="<i class='fas fa-tshirt'></i> Clothing & Apparel" data-sw="<i class='fas fa-tshirt'></i> Nguo na Mavazi"><i class="fas fa-tshirt"></i> Clothing & Apparel</span>
                </div>
            </div>

            <!-- Supermarket Core Modules Grid (Sections 7-14) -->
            <div class="row g-4">
                <!-- 7. Supermarket POS -->
                <div class="col-lg-4 col-md-6">
                    <div class="ke-card">
                        <div class="ke-card-icon"><i class="fas fa-cash-register"></i></div>
                        <h4 class="ke-trans" data-en="Powerful POS for Kenyan Supermarkets" data-sw="Mfumo Thabiti wa POS ya Supermarket">Powerful POS for Kenyan Supermarkets</h4>
                        <p class="ke-trans" data-en="Process retail transactions quickly while keeping sales and inventory information connected to the central ERP system." data-sw="Fanya miamala ya rejareja haraka huku mauzo na stoo vikiwa vimeunganishwa moja kwa moja.">Process retail transactions quickly while keeping sales and inventory information connected to the central ERP system.</p>
                        <ul class="ke-checklist">
                            <li class="ke-trans" data-en="<i class='fas fa-check'></i> High-Speed Barcode Scanning & Product Search" data-sw="<i class='fas fa-check'></i> Usomaji wa haraka wa barcode na utafutaji"><i class="fas fa-check"></i> High-Speed Barcode Scanning & Product Search</li>
                            <li class="ke-trans" data-en="<i class='fas fa-check'></i> Multiple Payment Methods (Cash/M-Pesa/Card)" data-sw="<i class='fas fa-check'></i> Njia nyingi za malipo (Pesa Taslimu/M-Pesa/Kadi)"><i class="fas fa-check"></i> Multiple Payment Methods (Cash/M-Pesa/Card)</li>
                            <li class="ke-trans" data-en="<i class='fas fa-check'></i> Customer Management, Discounts, Returns & Refunds" data-sw="<i class='fas fa-check'></i> Usimamizi wa wateja, punguzo na kurudisha bidhaa"><i class="fas fa-check"></i> Customer Management, Discounts, Returns & Refunds</li>
                            <li class="ke-trans" data-en="<i class='fas fa-check'></i> Cashier Management & Daily Sales Reports" data-sw="<i class='fas fa-check'></i> Usimamizi wa makeshia na ripoti za kila siku za mauzo"><i class="fas fa-check"></i> Cashier Management & Daily Sales Reports</li>
                            <li class="ke-trans" data-en="<i class='fas fa-check'></i> Shift Management & Branch-level Sales Tracking" data-sw="<i class='fas fa-check'></i> Usimamizi wa zamu na ufuatiliaji wa mauzo ya matawi"><i class="fas fa-check"></i> Shift Management & Branch-level Sales Tracking</li>
                        </ul>
                    </div>
                </div>

                <!-- 8. Inventory & 10. Reordering -->
                <div class="col-lg-4 col-md-6">
                    <div class="ke-card">
                        <div class="ke-card-icon"><i class="fas fa-warehouse"></i></div>
                        <h4 class="ke-trans" data-en="Real-Time Supermarket Inventory Management" data-sw="Usimamizi wa Orodha ya Supermarket ya Wakati Halisi">Real-Time Supermarket Inventory Management</h4>
                        <p class="ke-trans" data-en="Track inventory across stores, warehouses and distribution locations through one centralized inventory system." data-sw="Fuatilia bidhaa katika maduka na maghala ili kuzuia kukosekana kwa bidhaa na kupunguza uharibifu.">Track inventory across stores, warehouses and distribution locations through one centralized inventory system.</p>
                        <ul class="ke-checklist">
                            <li class="ke-trans" data-en="<i class='fas fa-check'></i> Stock In, Stock Out & Stock Transfers" data-sw="<i class='fas fa-check'></i> Kuingiza, kutoa na kuhamisha hisa"><i class="fas fa-check"></i> Stock In, Stock Out & Stock Transfers</li>
                            <li class="ke-trans" data-en="<i class='fas fa-check'></i> Low Stock & Out-of-Stock Products" data-sw="<i class='fas fa-check'></i> Tahadhari ya bidhaa zilizopungua au kuisha"><i class="fas fa-check"></i> Low Stock & Out-of-Stock Products</li>
                            <li class="ke-trans" data-en="<i class='fas fa-check'></i> Fast-Moving vs Slow-Moving Products" data-sw="<i class='fas fa-check'></i> Bidhaa zinazotembea haraka na polepole"><i class="fas fa-check"></i> Fast-Moving vs Slow-Moving Products</li>
                            <li class="ke-trans" data-en="<i class='fas fa-check'></i> Expired / Damaged Stock Tracking" data-sw="<i class='fas fa-check'></i> Ufuatiliaji wa bidhaa zilizoharibika au kuisha muda"><i class="fas fa-check"></i> Expired / Damaged Stock Tracking</li>
                            <li class="ke-trans" data-en="<i class='fas fa-check'></i> Warehouse Stock & Store Stock" data-sw="<i class='fas fa-check'></i> Ulinganisho wa hisa za bohari na rafu za duka"><i class="fas fa-check"></i> Warehouse Stock & Store Stock</li>
                        </ul>
                    </div>
                </div>

                <!-- 9. Procurement & 11. Multi-Branch -->
                <div class="col-lg-4 col-md-6">
                    <div class="ke-card">
                        <div class="ke-card-icon"><i class="fas fa-sitemap"></i></div>
                        <h4 class="ke-trans" data-en="Smart Purchasing for Supermarkets" data-sw="Ununuzi Mahiri kwa Maduka Makubwa">Smart Purchasing for Supermarkets</h4>
                        <p class="ke-trans" data-en="Manage suppliers, purchase orders, product quantities, purchasing history and procurement workflows from one ERP platform." data-sw="Simamia wauzaji, maagizo ya ununuzi, bei za wauzaji, na usambazaji wa maduka mengi.">Manage suppliers, purchase orders, product quantities, purchasing history and procurement workflows from one ERP platform.</p>
                        <ul class="ke-checklist">
                            <li class="ke-trans" data-en="<i class='fas fa-check'></i> Supplier Management & Supplier Pricing" data-sw="<i class='fas fa-check'></i> Usimamizi wa wauzaji na bei zao"><i class="fas fa-check"></i> Supplier Management & Supplier Pricing</li>
                            <li class="ke-trans" data-en="<i class='fas fa-check'></i> Purchase Orders & Purchase History" data-sw="<i class='fas fa-check'></i> Maagizo ya ununuzi na historia ya manunuzi"><i class="fas fa-check"></i> Purchase Orders & Purchase History</li>
                            <li class="ke-trans" data-en="<i class='fas fa-check'></i> Product Reordering & Purchase Reports" data-sw="<i class='fas fa-check'></i> Kuagiza upya bidhaa na ripoti za ununuzi"><i class="fas fa-check"></i> Product Reordering & Purchase Reports</li>
                            <li class="ke-trans" data-en="<i class='fas fa-check'></i> Supplier Performance Analysis" data-sw="<i class='fas fa-check'></i> Tathmini ya utendaji wa wasambazaji"><i class="fas fa-check"></i> Supplier Performance Analysis</li>
                        </ul>
                    </div>
                </div>

                <!-- 10. Avoid Stockouts with Better Replenishment Visibility & 11. Multi-Branch -->
                <div class="col-lg-6">
                    <div class="ke-card">
                        <div class="ke-card-icon"><i class="fas fa-cubes"></i></div>
                        <h4 class="ke-trans" data-en="Avoid Stockouts with Better Replenishment Visibility" data-sw="Kuzuia Uhaba wa Bidhaa kwa Kujaza kwa Wakati">Avoid Stockouts with Better Replenishment Visibility</h4>
                        <p class="ke-trans" data-en="Monitor product movement and inventory levels to help purchasing teams identify products that require replenishment." data-sw="Fuatilia mzunguko wa bidhaa ili kusaidia timu ya ununuzi kutambua bidhaa zinazohitaji kuagizwa upya mara moja.">Monitor product movement and inventory levels to help purchasing teams identify products that require replenishment.</p>
                        <div class="row g-2">
                            <div class="col-sm-6"><div class="p-2 bg-light border rounded small"><i class="fas fa-check text-success me-1"></i> <span class="ke-trans" data-en="Minimum Stock Level" data-sw="Kiwango cha Chini cha Hisa">Minimum Stock Level</span></div></div>
                            <div class="col-sm-6"><div class="p-2 bg-light border rounded small"><i class="fas fa-check text-success me-1"></i> <span class="ke-trans" data-en="Current Stock Visibility" data-sw="Ufahamu wa Hisa ya Sasa">Current Stock Visibility</span></div></div>
                            <div class="col-sm-6"><div class="p-2 bg-light border rounded small"><i class="fas fa-check text-success me-1"></i> <span class="ke-trans" data-en="Reorder Quantity Calculations" data-sw="Hesabu ya Idadi ya Kuagiza">Reorder Quantity Calculations</span></div></div>
                            <div class="col-sm-6"><div class="p-2 bg-light border rounded small"><i class="fas fa-check text-success me-1"></i> <span class="ke-trans" data-en="Supplier Routing & Product Demand" data-sw="Mahitaji ya Bidhaa na Wasambazaji">Supplier Routing & Product Demand</span></div></div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="ke-card">
                        <div class="ke-card-icon"><i class="fas fa-sitemap"></i></div>
                        <h4 class="ke-trans" data-en="Multi-Branch Supermarket Management" data-sw="Usimamizi wa Maduka Makubwa ya Matawi Mengi">Multi-Branch Supermarket Management</h4>
                        <p class="ke-trans" data-en="Manage multiple supermarkets, branches and warehouses from one centralized ERP environment." data-sw="Simamia maduka mengi, matawi na maghala kupitia mfumo mmoja wa ERP.">Manage multiple supermarkets, branches and warehouses from one centralized ERP environment.</p>
                        <div class="row g-2">
                            <div class="col-sm-6"><div class="p-2 bg-light border rounded small"><i class="fas fa-check text-success me-1"></i> <span class="ke-trans" data-en="Branch-wise Inventory" data-sw="Hisa kwa Kila Tawi">Branch-wise Inventory</span></div></div>
                            <div class="col-sm-6"><div class="p-2 bg-light border rounded small"><i class="fas fa-check text-success me-1"></i> <span class="ke-trans" data-en="Branch-wise Sales" data-sw="Mauzo kwa Kila Tawi">Branch-wise Sales</span></div></div>
                            <div class="col-sm-6"><div class="p-2 bg-light border rounded small"><i class="fas fa-check text-success me-1"></i> <span class="ke-trans" data-en="Central Warehouse Logistics" data-sw="Usafirishaji wa Bohari Kuu">Central Warehouse Logistics</span></div></div>
                            <div class="col-sm-6"><div class="p-2 bg-light border rounded small"><i class="fas fa-check text-success me-1"></i> <span class="ke-trans" data-en="Inter-branch Stock Transfers" data-sw="Uhamisho wa Hisa Kati ya Matawi">Inter-branch Stock Transfers</span></div></div>
                            <div class="col-sm-6"><div class="p-2 bg-light border rounded small"><i class="fas fa-check text-success me-1"></i> <span class="ke-trans" data-en="Branch Purchasing" data-sw="Ununuzi wa Tawi">Branch Purchasing</span></div></div>
                            <div class="col-sm-6"><div class="p-2 bg-light border rounded small"><i class="fas fa-check text-success me-1"></i> <span class="ke-trans" data-en="Consolidated Reports" data-sw="Ripoti Zilizounganishwa">Consolidated Reports</span></div></div>
                        </div>
                    </div>
                </div>

                <!-- 12. Customers, 13. Analytics & 14. Benefits -->
                <div class="col-lg-12">
                    <div class="p-4 bg-light rounded-4 border">
                        <div class="row g-4">
                            <div class="col-md-4">
                                <h5 class="fw-bold mb-2"><i class="fas fa-user-tag text-success me-2"></i> <span class="ke-trans" data-en="Customer Management for Supermarkets" data-sw="Usimamizi wa Wateja wa Supermarket">Customer Management for Supermarkets</span></h5>
                                <p class="small text-muted mb-2 ke-trans" data-en="Build a centralized view of customers, purchases and customer activity across retail operations." data-sw="Jenga mtazamo mkuu wa wateja, ununuzi wao na shughuli zao za madukani.">Build a centralized view of customers, purchases and customer activity across retail operations.</p>
                                <ul class="ke-checklist small">
                                    <li class="ke-trans" data-en="<i class='fas fa-check'></i> Customer Profiles & Purchase History" data-sw="<i class='fas fa-check'></i> Wasifu wa wateja na historia ya ununuzi"><i class="fas fa-check"></i> Customer Profiles & Purchase History</li>
                                    <li class="ke-trans" data-en="<i class='fas fa-check'></i> Customer Segments & Communication" data-sw="<i class='fas fa-check'></i> Makundi ya wateja na mawasiliano"><i class="fas fa-check"></i> Customer Segments & Communication</li>
                                </ul>
                            </div>
                            <div class="col-md-4">
                                <h5 class="fw-bold mb-2"><i class="fas fa-chart-pie text-success me-2"></i> <span class="ke-trans" data-en="Supermarket Analytics & Reports" data-sw="Ripoti na Takwimu za Supermarket">Supermarket Analytics & Reports</span></h5>
                                <p class="small text-muted mb-2 ke-trans" data-en="Daily Sales, Monthly Sales, Branch Sales, Product Sales, Category Sales, Inventory Valuation, Stock Movement, Purchase Analysis, Supplier Analysis, Cashier Performance, Customer Analysis, Profitability Reports." data-sw="Mauzo ya Kila Siku, Mauzo ya Mwezi, Mauzo ya Tawi, Mauzo ya Bidhaa, Tathmini ya Hisa, Mzunguko wa Hisa, Uchambuzi wa Ununuzi, Utendaji wa Makeshia, Ripoti za Faida.">Daily Sales, Monthly Sales, Branch Sales, Product Sales, Category Sales, Inventory Valuation, Stock Movement, Purchase Analysis, Supplier Analysis, Cashier Performance, Customer Analysis, Profitability Reports.</p>
                            </div>
                            <div class="col-md-4">
                                <h5 class="fw-bold mb-2"><i class="fas fa-trophy text-success me-2"></i> <span class="ke-trans" data-en="Supermarket Business Benefits" data-sw="Manufaa ya Biashara ya Supermarket">Supermarket Business Benefits</span></h5>
                                <p class="small text-muted mb-2 ke-trans" data-en="Better inventory visibility, faster retail operations, centralized purchasing, improved supplier management, multi-branch visibility, reduced manual data entry, better sales reporting, improved stock planning, centralized business information." data-sw="Uonekanaji bora wa hisa, huduma ya haraka kwa wateja, ununuzi wa pamoja, usimamizi bora wa wauzaji, kupunguza kazi za mikono, na ripoti sahihi za mauzo.">Better inventory visibility, faster retail operations, centralized purchasing, improved supplier management, multi-branch visibility, reduced manual data entry, better sales reporting, improved stock planning, centralized business information.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 15. WHOLESALE & DISTRIBUTION & 16. FMCG -->
    <section class="ke-section bg-light-ke" id="wholesale-fmcg">
        <div class="container">
            <div class="row g-4">
                <!-- 15. Wholesale & Distribution -->
                <div class="col-lg-6">
                    <div class="vertical-box-ke h-100">
                        <span class="vertical-tag ke-trans" data-en="Section 15: Wholesale" data-sw="Sehemu ya 15: Biashara ya Jumla">Section 15: Wholesale</span>
                        <h3 class="fw-bold mb-3"><i class="fas fa-boxes-stacked text-success me-2"></i> <span class="ke-trans" data-en="Wholesale & Distribution ERP Software in Kenya" data-sw="ERP ya Biashara ya Jumla na Usambazaji Kenya">Wholesale & Distribution ERP Software in Kenya</span></h3>
                        <p class="text-muted ke-trans" data-en="Manage distributors, wholesalers, suppliers, warehouses, customers, sales orders and inventory through one integrated ERP platform." data-sw="Simamia wasambazaji, wauzaji wa jumla, maghala, wateja, maagizo ya mauzo na hisa kupitia jukwaa moja la ERP.">Manage distributors, wholesalers, suppliers, warehouses, customers, sales orders and inventory through one integrated ERP platform.</p>
                        
                        <div class="row g-2 mb-3">
                            <div class="col-6"><div class="p-2 bg-white border rounded small"><i class="fas fa-check text-success me-1"></i> <span class="ke-trans" data-en="Wholesale Customer Portals" data-sw="Milango ya Wateja wa Jumla">Wholesale Customer Portals</span></div></div>
                            <div class="col-6"><div class="p-2 bg-white border rounded small"><i class="fas fa-check text-success me-1"></i> <span class="ke-trans" data-en="Distributor Price Tiers" data-sw="Viwango vya Bei vya Wasambazaji">Distributor Price Tiers</span></div></div>
                            <div class="col-6"><div class="p-2 bg-white border rounded small"><i class="fas fa-check text-success me-1"></i> <span class="ke-trans" data-en="Bulk Sales Orders & Quotations" data-sw="Maagizo ya Mauzo ya Wingi">Bulk Sales Orders & Quotations</span></div></div>
                            <div class="col-6"><div class="p-2 bg-white border rounded small"><i class="fas fa-check text-success me-1"></i> <span class="ke-trans" data-en="Credit Sales & Payment Terms" data-sw="Mauzo ya Mkopo na Masharti">Credit Sales & Payment Terms</span></div></div>
                            <div class="col-6"><div class="p-2 bg-white border rounded small"><i class="fas fa-check text-success me-1"></i> <span class="ke-trans" data-en="Warehouse Multi-Location Stock" data-sw="Hisa za Maghala Mengi">Warehouse Multi-Location Stock</span></div></div>
                            <div class="col-6"><div class="p-2 bg-white border rounded small"><i class="fas fa-check text-success me-1"></i> <span class="ke-trans" data-en="Invoices & Statement Tracking" data-sw="Ankara na Ufuatiliaji wa Taarifa">Invoices & Statement Tracking</span></div></div>
                        </div>
                    </div>
                </div>

                <!-- 16. FMCG -->
                <div class="col-lg-6">
                    <div class="vertical-box-ke h-100">
                        <span class="vertical-tag ke-trans" data-en="Section 16: FMCG Market" data-sw="Sehemu ya 16: Soko la FMCG">Section 16: FMCG Market</span>
                        <h3 class="fw-bold mb-3"><i class="fas fa-shipping-fast text-success me-2"></i> <span class="ke-trans" data-en="FMCG ERP Software for Kenya" data-sw="Programu ya ERP ya FMCG nchini Kenya">FMCG ERP Software for Kenya</span></h3>
                        <p class="text-muted ke-trans" data-en="Manage fast-moving consumer goods across purchasing, warehouses, distribution, wholesale, retail and sales operations. InvestKenya identifies food & beverage as the largest manufacturing subsector, with an estimated packaged-food market exceeding $5 billion." data-sw="Simamia bidhaa za watumiaji zinazotembea haraka kote katika ununuzi, maghala, usambazaji, jumla na rejareja. InvestKenya inatambua vyakula na vinywaji kama sekta ndogo kubwa zaidi yenye thamani ya zaidi ya dola bilioni 5.">Manage fast-moving consumer goods across purchasing, warehouses, distribution, wholesale, retail and sales operations. InvestKenya identifies food & beverage as the largest manufacturing subsector, with an estimated packaged-food market exceeding $5 billion.</p>
                        
                        <div class="row g-2 mb-3">
                            <div class="col-6"><div class="p-2 bg-white border rounded small"><i class="fas fa-tag text-success me-1"></i> <span class="ke-trans" data-en="Food Distributors" data-sw="Wasambazaji wa Vyakula">Food Distributors</span></div></div>
                            <div class="col-6"><div class="p-2 bg-white border rounded small"><i class="fas fa-tag text-success me-1"></i> <span class="ke-trans" data-en="Beverage Distributors" data-sw="Wasambazaji wa Vinywaji">Beverage Distributors</span></div></div>
                            <div class="col-6"><div class="p-2 bg-white border rounded small"><i class="fas fa-tag text-success me-1"></i> <span class="ke-trans" data-en="Consumer Goods Wholesalers" data-sw="Wauzaji wa Jumla wa Bidhaa">Consumer Goods Wholesalers</span></div></div>
                            <div class="col-6"><div class="p-2 bg-white border rounded small"><i class="fas fa-tag text-success me-1"></i> <span class="ke-trans" data-en="Household Product Distributors" data-sw="Wasambazaji wa Vifaa vya Nyumbani">Household Product Distributors</span></div></div>
                            <div class="col-6"><div class="p-2 bg-white border rounded small"><i class="fas fa-tag text-success me-1"></i> <span class="ke-trans" data-en="Personal Care Distributors" data-sw="Wasambazaji wa Vipodozi na Afya">Personal Care Distributors</span></div></div>
                            <div class="col-6"><div class="p-2 bg-white border rounded small"><i class="fas fa-tag text-success me-1"></i> <span class="ke-trans" data-en="Fast-Growing FMCG Retailers" data-sw="Maduka ya FMCG Yanayokua Haraka">Fast-Growing FMCG Retailers</span></div></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 17 to 23. MINING ERP — KENYA (Dedicated Vertical) -->
    <section class="ke-section bg-dark-ke" id="mining-kenya">
        <div class="container">
            <div class="row align-items-center mb-5">
                <div class="col-lg-8">
                    <span class="section-badge-ke-dark ke-trans" data-en="Sections 17-23: Mining & Quarrying Vertical" data-sw="Sehemu ya 17-23: Sekta ya Madini na Machimbo"><i class="fas fa-gem me-1"></i> Sections 17-23: Mining & Quarrying Vertical</span>
                    <h2 class="section-title-ke-dark ke-trans" 
                        data-en="Mining ERP Software for Businesses in Kenya" 
                        data-sw="Programu ya ERP ya Shughuli za Madini na Machimbo Kenya">
                        Mining ERP Software for Businesses in Kenya
                    </h2>
                    <p class="text-light opacity-75 m-0 ke-trans" 
                        data-en="Manage mining-related procurement, inventory, suppliers, equipment records, workforce data, finance and operational information through an integrated ERP platform. Kenya's Economic Survey reports that Mining & Quarrying rebounded strongly in 2025, growing 14.9%, partly driven by increased mineral production for cement and critical minerals like lithium, graphite, copper, niobium, tantalum, and rare earths."
                        data-sw="Simamia ununuzi wa shughuli za madini, orodha ya vifaa, wauzaji, rekodi za mitambo, taarifa za wafanyakazi na fedha. Ripoti za Kiuchumi za Kenya zinaonyesha sekta ya madini ilikua kwa 14.9% mnamo 2025.">
                        Manage mining-related procurement, inventory, suppliers, equipment records, workforce data, finance and operational information through an integrated ERP platform. Kenya's Economic Survey reports that Mining & Quarrying rebounded strongly in 2025, growing 14.9%, partly driven by increased mineral production for cement and critical minerals like lithium, graphite, copper, niobium, tantalum, and rare earths.
                    </p>
                </div>
                <div class="col-lg-4 text-lg-end mt-3 mt-lg-0">
                    <a href="mining-erp-software-kenya.php" class="btn btn-warning fw-bold px-4 py-2 rounded-3 text-dark">
                        <i class="fas fa-hard-hat me-1"></i>
                        <span class="ke-trans" data-en="Explore Mining ERP Kenya" data-sw="Tazama ERP ya Madini Kenya">Explore Mining ERP Kenya</span>
                    </a>
                </div>
            </div>

            <!-- Mining Grid 18-23 -->
            <div class="row g-4">
                <!-- 18. Mining Procurement & Supplier Management -->
                <div class="col-md-6 col-lg-3">
                    <div class="p-4 rounded-4 h-100" style="background: rgba(255,255,255,0.06); border: 1px solid rgba(255,255,255,0.12);">
                        <div class="text-warning fs-3 mb-2"><i class="fas fa-shopping-cart"></i></div>
                        <h4 class="text-white fw-bold fs-6 ke-trans" data-en="Mining Procurement & Supplier Management" data-sw="Ununuzi wa Migodi na Wasambazaji">Mining Procurement & Supplier Management</h4>
                        <p class="text-light opacity-75 small mb-3 ke-trans" data-en="Procure heavy equipment, spare parts, fuel, safety gear, tools, industrial supplies, maintenance materials, consumables, and supplier contracts." data-sw="Nunua mitambo mizito, vipuri, mafuta, vifaa vya usalama, zana, na mikataba ya wauzaji.">Procure heavy equipment, spare parts, fuel, safety gear, tools, industrial supplies, maintenance materials, consumables, and supplier contracts.</p>
                        <ul class="list-unstyled small text-light opacity-75 m-0">
                            <li class="ke-trans" data-en="<i class='fas fa-check text-warning me-2'></i> Equipment & Spare Parts" data-sw="<i class='fas fa-check text-warning me-2'></i> Mitambo na Vipuri"><i class="fas fa-check text-warning me-2"></i> Equipment & Spare Parts</li>
                            <li class="ke-trans" data-en="<i class='fas fa-check text-warning me-2'></i> Fuel & Safety Equipment" data-sw="<i class='fas fa-check text-warning me-2'></i> Mafuta na Vifaa vya Usalama"><i class="fas fa-check text-warning me-2"></i> Fuel & Safety Equipment</li>
                            <li class="ke-trans" data-en="<i class='fas fa-check text-warning me-2'></i> Supplier Contracts & POs" data-sw="<i class='fas fa-check text-warning me-2'></i> Mikataba ya Wauzaji na Maagizo"><i class="fas fa-check text-warning me-2"></i> Supplier Contracts & POs</li>
                        </ul>
                    </div>
                </div>

                <!-- 19. Mining Inventory Management -->
                <div class="col-md-6 col-lg-3">
                    <div class="p-4 rounded-4 h-100" style="background: rgba(255,255,255,0.06); border: 1px solid rgba(255,255,255,0.12);">
                        <div class="text-warning fs-3 mb-2"><i class="fas fa-cubes"></i></div>
                        <h4 class="text-white fw-bold fs-6 ke-trans" data-en="Mining Inventory Management" data-sw="Usimamizi wa Hisa za Migodi">Mining Inventory Management</h4>
                        <p class="text-light opacity-75 small mb-3 ke-trans" data-en="Track equipment, spare parts, consumables, tools, fuel and safety stock across mining sites, yards and warehouses." data-sw="Fuatilia mitambo, vipuri, vifaa vinavyotumika, mafuta na hisa za usalama katika machimbo na maghala.">Track equipment, spare parts, consumables, tools, fuel and safety stock across mining sites, yards and warehouses.</p>
                        <ul class="list-unstyled small text-light opacity-75 m-0">
                            <li class="ke-trans" data-en="<i class='fas fa-check text-warning me-2'></i> Warehouse Stock vs Site Stock" data-sw="<i class='fas fa-check text-warning me-2'></i> Hisa za Bohari Kuu na Machimbo"><i class="fas fa-check text-warning me-2"></i> Warehouse Stock vs Site Stock</li>
                            <li class="ke-trans" data-en="<i class='fas fa-check text-warning me-2'></i> Fuel & Consumables" data-sw="<i class='fas fa-check text-warning me-2'></i> Mafuta na Vifaa Vinavyotumika"><i class="fas fa-check text-warning me-2"></i> Fuel & Consumables</li>
                            <li class="ke-trans" data-en="<i class='fas fa-check text-warning me-2'></i> Spare Parts & Tools Tracking" data-sw="<i class='fas fa-check text-warning me-2'></i> Ufuatiliaji wa Vipuri na Zana"><i class="fas fa-check text-warning me-2"></i> Spare Parts & Tools Tracking</li>
                        </ul>
                    </div>
                </div>

                <!-- 20. Mining Equipment & Asset Records -->
                <div class="col-md-6 col-lg-3">
                    <div class="p-4 rounded-4 h-100" style="background: rgba(255,255,255,0.06); border: 1px solid rgba(255,255,255,0.12);">
                        <div class="text-warning fs-3 mb-2"><i class="fas fa-truck-monster"></i></div>
                        <h4 class="text-white fw-bold fs-6 ke-trans" data-en="Mining Equipment & Asset Records" data-sw="Kumbukumbu za Mitambo na Mali">Mining Equipment & Asset Records</h4>
                        <p class="text-light opacity-75 small mb-3 ke-trans" data-en="Maintain centralized records for equipment details, asset identification, location, supplier and operational status." data-sw="Hifadhi kumbukumbu za mitambo mikubwa, utambulisho wa mali, eneo lilipo na hali yake ya kazi.">Maintain centralized records for equipment details, asset identification, location, supplier and operational status.</p>
                        <ul class="list-unstyled small text-light opacity-75 m-0">
                            <li class="ke-trans" data-en="<i class='fas fa-check text-warning me-2'></i> Asset ID & Serial Records" data-sw="<i class='fas fa-check text-warning me-2'></i> Nambari za Mali na Nambari za Seri"><i class="fas fa-check text-warning me-2"></i> Asset ID & Serial Records</li>
                            <li class="ke-trans" data-en="<i class='fas fa-check text-warning me-2'></i> Location & Relocation Logs" data-sw="<i class='fas fa-check text-warning me-2'></i> Kumbukumbu za Mahali na Uhamisho"><i class="fas fa-check text-warning me-2"></i> Location & Relocation Logs</li>
                            <li class="ke-trans" data-en="<i class='fas fa-check text-warning me-2'></i> Operational Status Tracking" data-sw="<i class='fas fa-check text-warning me-2'></i> Ufuatiliaji wa Hali ya Uendeshaji"><i class="fas fa-check text-warning me-2"></i> Operational Status Tracking</li>
                        </ul>
                    </div>
                </div>

                <!-- 21. Mining Equipment Maintenance Management -->
                <div class="col-md-6 col-lg-3">
                    <div class="p-4 rounded-4 h-100" style="background: rgba(255,255,255,0.06); border: 1px solid rgba(255,255,255,0.12);">
                        <div class="text-warning fs-3 mb-2"><i class="fas fa-tools"></i></div>
                        <h4 class="text-white fw-bold fs-6 ke-trans" data-en="Mining Equipment Maintenance Management" data-sw="Usimamizi wa Matengenezo ya Mitambo">Mining Equipment Maintenance Management</h4>
                        <p class="text-light opacity-75 small mb-3 ke-trans" data-en="Maintain equipment-related records and maintenance workflows to improve operational visibility across quarry sites." data-sw="Hifadhi kumbukumbu za matengenezo ya mitambo na huduma za kiufundi ili kuongeza ufanisi.">Maintain equipment-related records and maintenance workflows to improve operational visibility across quarry sites.</p>
                        <ul class="list-unstyled small text-light opacity-75 m-0">
                            <li class="ke-trans" data-en="<i class='fas fa-check text-warning me-2'></i> Maintenance & Service History" data-sw="<i class='fas fa-check text-warning me-2'></i> Historia ya Huduma na Matengenezo"><i class="fas fa-check text-warning me-2"></i> Maintenance & Service History</li>
                            <li class="ke-trans" data-en="<i class='fas fa-check text-warning me-2'></i> Spare Parts & Repair Costs" data-sw="<i class='fas fa-check text-warning me-2'></i> Gharama za Vipuri na Matengenezo"><i class="fas fa-check text-warning me-2"></i> Spare Parts & Repair Costs</li>
                            <li class="ke-trans" data-en="<i class='fas fa-check text-warning me-2'></i> Routine Service Schedules" data-sw="<i class='fas fa-check text-warning me-2'></i> Ratiba za Huduma za Mara kwa Mara"><i class="fas fa-check text-warning me-2"></i> Routine Service Schedules</li>
                        </ul>
                    </div>
                </div>

                <!-- 22. Mining Cost Management & 23. Mining Reporting -->
                <div class="col-md-12">
                    <div class="p-4 rounded-4" style="background: rgba(255,255,255,0.04); border: 1px solid rgba(255,255,255,0.1);">
                        <div class="row g-4 align-items-center">
                            <div class="col-lg-6">
                                <h4 class="text-white fw-bold fs-5 mb-2 ke-trans" data-en="<i class='fas fa-coins text-warning me-2'></i> Mining Cost & Financial Visibility" data-sw="<i class='fas fa-coins text-warning me-2'></i> Gharama za Madini na Uwazi wa Kifedha"><i class="fas fa-coins text-warning me-2"></i> Mining Cost & Financial Visibility</h4>
                                <p class="text-light opacity-75 small m-0 ke-trans" data-en="Monitor purchasing, inventory, supplier transactions, expenses and financial information related to mining operations." data-sw="Fuatilia manunuzi, hisa, miamala ya wauzaji, matumizi na taarifa za kifedha zinazohusiana na shughuli za migodi.">Monitor purchasing, inventory, supplier transactions, expenses and financial information related to mining operations.</p>
                            </div>
                            <div class="col-lg-6">
                                <h4 class="text-white fw-bold fs-5 mb-2 ke-trans" data-en="<i class='fas fa-file-contract text-warning me-2'></i> Mining Operational & Financial Reports" data-sw="<i class='fas fa-file-contract text-warning me-2'></i> Ripoti za Uendeshaji na Fedha za Migodi"><i class="fas fa-file-contract text-warning me-2"></i> Mining Operational & Financial Reports</h4>
                                <div class="d-flex flex-wrap gap-2">
                                    <span class="badge bg-dark border border-secondary px-3 py-2 ke-trans" data-en="Procurement Reports" data-sw="Ripoti za Ununuzi">Procurement Reports</span>
                                    <span class="badge bg-dark border border-secondary px-3 py-2 ke-trans" data-en="Inventory Reports" data-sw="Ripoti za Hisa">Inventory Reports</span>
                                    <span class="badge bg-dark border border-secondary px-3 py-2 ke-trans" data-en="Supplier Reports" data-sw="Ripoti za Wauzaji">Supplier Reports</span>
                                    <span class="badge bg-dark border border-secondary px-3 py-2 ke-trans" data-en="Equipment Reports" data-sw="Ripoti za Mitambo">Equipment Reports</span>
                                    <span class="badge bg-dark border border-secondary px-3 py-2 ke-trans" data-en="Expense Reports" data-sw="Ripoti za Matumizi">Expense Reports</span>
                                    <span class="badge bg-dark border border-secondary px-3 py-2 ke-trans" data-en="Purchase Reports" data-sw="Ripoti za Manunuzi">Purchase Reports</span>
                                    <span class="badge bg-dark border border-secondary px-3 py-2 ke-trans" data-en="Financial Reports" data-sw="Ripoti za Kifedha">Financial Reports</span>
                                    <span class="badge bg-dark border border-secondary px-3 py-2 ke-trans" data-en="Operational Reports" data-sw="Ripoti za Uendeshaji">Operational Reports</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 24 & 25. MANUFACTURING ERP — KENYA -->
    <section class="ke-section" id="manufacturing-kenya">
        <div class="container">
            <div class="row align-items-center g-4 mb-4">
                <div class="col-lg-7">
                    <span class="section-badge-ke ke-trans" data-en="Sections 24-25: Manufacturing" data-sw="Sehemu ya 24-25: Sekta ya Viwanda">Sections 24-25: Manufacturing</span>
                    <h2 class="section-title-ke ke-trans" 
                        data-en="Manufacturing ERP Software for Kenya" 
                        data-sw="Programu ya ERP ya Viwanda vya Kenya">
                        Manufacturing ERP Software for Kenya
                    </h2>
                    <p class="text-muted ke-trans" 
                        data-en="Kenya's manufacturing sector contributes 7.3% to GDP and supports over 370,000 formal jobs according to InvestKenya. Digify ERP provides end-to-end management for raw materials, Bill of Materials, production batches, finished goods, and cost accounting."
                        data-sw="Sekta ya viwanda nchini Kenya inachangia 7.3% katika GDP na kusaidia zaidi ya ajira 370,000 kulingana na InvestKenya. Digify ERP inasimamia malighafi, uzalishaji, na bidhaa zilizokamilika.">
                        Kenya's manufacturing sector contributes 7.3% to GDP and supports over 370,000 formal jobs according to InvestKenya. Digify ERP provides end-to-end management for raw materials, Bill of Materials, production batches, finished goods, and cost accounting.
                    </p>
                </div>
                <div class="col-lg-5">
                    <div class="p-3 bg-light-ke border rounded-3">
                        <strong class="d-block mb-2 text-dark small fw-bold ke-trans" data-en="Target Manufacturing Value Chains:" data-sw="Minyororo ya Thamani ya Viwanda:">Target Manufacturing Value Chains:</strong>
                        <div class="d-flex flex-wrap gap-1">
                            <span class="badge bg-white text-dark border ke-trans" data-en="Food & Beverage" data-sw="Vyakula na Vinywaji">Food & Beverage</span>
                            <span class="badge bg-white text-dark border ke-trans" data-en="Textiles & Apparel" data-sw="Nguo na Mavazi">Textiles & Apparel</span>
                            <span class="badge bg-white text-dark border ke-trans" data-en="Pharmaceuticals" data-sw="Dawa na Afya">Pharmaceuticals</span>
                            <span class="badge bg-white text-dark border ke-trans" data-en="Chemicals" data-sw="Kemikali">Chemicals</span>
                            <span class="badge bg-white text-dark border ke-trans" data-en="Plastics & Rubber" data-sw="Plastiki na Mpira">Plastics & Rubber</span>
                            <span class="badge bg-white text-dark border ke-trans" data-en="Electrical & Electronics" data-sw="Vifaa vya Umeme">Electrical & Electronics</span>
                            <span class="badge bg-white text-dark border ke-trans" data-en="Metal Products" data-sw="Bidhaa za Chuma">Metal Products</span>
                            <span class="badge bg-white text-dark border ke-trans" data-en="Building Materials" data-sw="Vifaa vya Ujenzi">Building Materials</span>
                            <span class="badge bg-white text-dark border ke-trans" data-en="Packaging" data-sw="Vifungashio">Packaging</span>
                            <span class="badge bg-white text-dark border ke-trans" data-en="Consumer Goods" data-sw="Bidhaa za Watumiaji">Consumer Goods</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row g-4">
                <div class="col-md-4">
                    <div class="ke-card">
                        <div class="ke-card-icon"><i class="fas fa-industry"></i></div>
                        <h4 class="ke-trans" data-en="Production & BOM Tracking" data-sw="Ufuatiliaji wa Uzalishaji na BOM">Production & BOM Tracking</h4>
                        <p class="ke-trans" data-en="Define multi-level Bill of Materials (BOM), track work-in-progress (WIP), and monitor stage-by-stage assembly lines." data-sw="Bainisha Orodha ya Vifaa (BOM), fuatilia kazi inayoendelea (WIP), na uangalie hatua za uzalishaji.">Define multi-level Bill of Materials (BOM), track work-in-progress (WIP), and monitor stage-by-stage assembly lines.</p>
                        <ul class="ke-checklist">
                            <li class="ke-trans" data-en="<i class='fas fa-check'></i> Raw material allocation" data-sw="<i class='fas fa-check'></i> Mgawanyo wa malighafi"><i class="fas fa-check"></i> Raw material allocation</li>
                            <li class="ke-trans" data-en="<i class='fas fa-check'></i> Scrap & waste reduction tracking" data-sw="<i class='fas fa-check'></i> Kupunguza upotevu na uchafu"><i class="fas fa-check"></i> Scrap & waste reduction tracking</li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="ke-card">
                        <div class="ke-card-icon"><i class="fas fa-boxes"></i></div>
                        <h4 class="ke-trans" data-en="Raw Material & Finished Goods" data-sw="Malighafi na Bidhaa Zilizokamilika">Raw Material & Finished Goods</h4>
                        <p class="ke-trans" data-en="Complete traceability from supplier raw materials to lot-numbered finished products ready for distribution." data-sw="Ufuatiliaji kamili kuanzia malighafi za wauzaji hadi bidhaa zilizokamilika tayari kwa usambazaji.">Complete traceability from supplier raw materials to lot-numbered finished products ready for distribution.</p>
                        <ul class="ke-checklist">
                            <li class="ke-trans" data-en="<i class='fas fa-check'></i> Batch & lot tracking" data-sw="<i class='fas fa-check'></i> Ufuatiliaji wa bechi na nambari za kundi"><i class="fas fa-check"></i> Batch & lot tracking</li>
                            <li class="ke-trans" data-en="<i class='fas fa-check'></i> Warehouse quarantine & QA checks" data-sw="<i class='fas fa-check'></i> Ukaguzi wa ubora (QA) ghalani"><i class="fas fa-check"></i> Warehouse quarantine & QA checks</li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="ke-card">
                        <div class="ke-card-icon"><i class="fas fa-calculator"></i></div>
                        <h4 class="ke-trans" data-en="Job Costing & Financials" data-sw="Gharama za Kazi na Fedha">Job Costing & Financials</h4>
                        <p class="ke-trans" data-en="Calculate direct material, direct labor, and overhead absorption for accurate landed and manufactured unit costs." data-sw="Hesabu gharama za malighafi, nguvu kazi, na uendeshaji ili kupata gharama halisi ya kila bidhaa.">Calculate direct material, direct labor, and overhead absorption for accurate landed and manufactured unit costs.</p>
                        <ul class="ke-checklist">
                            <li class="ke-trans" data-en="<i class='fas fa-check'></i> Landed cost calculation" data-sw="<i class='fas fa-check'></i> Hesabu ya gharama zote zilizotumika"><i class="fas fa-check"></i> Landed cost calculation</li>
                            <li class="ke-trans" data-en="<i class='fas fa-check'></i> Production profit margins" data-sw="<i class='fas fa-check'></i> Faida halisi ya uzalishaji"><i class="fas fa-check"></i> Production profit margins</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 26, 27 & 28. AGRICULTURE, AGRIBUSINESS & FOOD PROCESSING -->
    <section class="ke-section bg-light-ke" id="agriculture-kenya">
        <div class="container">
            <div class="text-center mb-5">
                <span class="section-badge-ke ke-trans" data-en="Sections 26-28: Agriculture Backbone" data-sw="Sehemu ya 26-28: Nguzo ya Kilimo">Sections 26-28: Agriculture Backbone</span>
                <h2 class="section-title-ke ke-trans" 
                    data-en="Agriculture, Agribusiness & Food Processing ERP Kenya" 
                    data-sw="ERP ya Kilimo, Kilimo-Biashara na Usindikaji wa Vyakula Kenya">
                    Agriculture, Agribusiness & Food Processing ERP Kenya
                </h2>
                <p class="section-sub-ke ke-trans" 
                    data-en="InvestKenya recognizes agriculture and livestock as Kenya's foundational economic pillar, driving over 20% of GDP. Digify ERP provides robust tools for farm businesses, agro-processors, produce distributors, dairy operations, tea & coffee estates, and horticulture exporters."
                    data-sw="InvestKenya inatambua kilimo na mifugo kama nguzo kuu ya kiuchumi ya Kenya inayochangia zaidi ya 20% ya GDP. Digify ERP inatoa zana madhubuti kwa biashara za mashambani, wasindikaji, wasambazaji, na wauzaji wa maua na chai nje ya nchi.">
                    InvestKenya recognizes agriculture and livestock as Kenya's foundational economic pillar, driving over 20% of GDP. Digify ERP provides robust tools for farm businesses, agro-processors, produce distributors, dairy operations, tea & coffee estates, and horticulture exporters.
                </p>
            </div>

            <div class="row g-4">
                <div class="col-lg-4">
                    <div class="ke-card">
                        <div class="ke-card-icon"><i class="fas fa-seedling"></i></div>
                        <h4 class="ke-trans" data-en="26. Agribusiness Sectors" data-sw="26. Sekta za Kilimo-Biashara">26. Agribusiness Sectors</h4>
                        <p class="ke-trans" data-en="Tailored workflows for tea, coffee, fresh flowers, dairy, horticulture, and livestock enterprises across Kenya." data-sw="Mtiririko wa kazi ulioundwa kwa chai, kahawa, maua safi, maziwa, mboga na mifugo kote Kenya.">Tailored workflows for tea, coffee, fresh flowers, dairy, horticulture, and livestock enterprises across Kenya.</p>
                        <ul class="ke-checklist">
                            <li class="ke-trans" data-en="<i class='fas fa-check'></i> Tea & Coffee Estate Management" data-sw="<i class='fas fa-check'></i> Usimamizi wa mashamba ya chai na kahawa"><i class="fas fa-check"></i> Tea & Coffee Estate Management</li>
                            <li class="ke-trans" data-en="<i class='fas fa-check'></i> Fresh Cut Flowers (Naivasha Hubs)" data-sw="<i class='fas fa-check'></i> Maua safi (Vituo vya Naivasha)"><i class="fas fa-check"></i> Fresh Cut Flowers (Naivasha Hubs)</li>
                            <li class="ke-trans" data-en="<i class='fas fa-check'></i> Dairy & Milk Collection Centers" data-sw="<i class='fas fa-check'></i> Vituo vya kukusanya maziwa"><i class="fas fa-check"></i> Dairy & Milk Collection Centers</li>
                            <li class="ke-trans" data-en="<i class='fas fa-check'></i> Meat, Poultry & Leather Processors" data-sw="<i class='fas fa-check'></i> Wasindikaji wa nyama, kuku na ngozi"><i class="fas fa-check"></i> Meat, Poultry & Leather Processors</li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="ke-card">
                        <div class="ke-card-icon"><i class="fas fa-tractor"></i></div>
                        <h4 class="ke-trans" data-en="27. Agribusiness ERP Modules" data-sw="27. Moduli za ERP ya Kilimo">27. Agribusiness ERP Modules</h4>
                        <p class="ke-trans" data-en="Connect farm inputs, outgrower purchasing, cold-chain storage, distribution, accounting, and farmer payments." data-sw="Unganisha pembejeo za shamba, ununuzi kutoka kwa wakulima, hifadhi ya ubaridi, usambazaji na malipo ya wakulima.">Connect farm inputs, outgrower purchasing, cold-chain storage, distribution, accounting, and farmer payments.</p>
                        <ul class="ke-checklist">
                            <li class="ke-trans" data-en="<i class='fas fa-check'></i> Outgrower & Supplier Management" data-sw="<i class='fas fa-check'></i> Usimamizi wa wakulima wadogo na wauzaji"><i class="fas fa-check"></i> Outgrower & Supplier Management</li>
                            <li class="ke-trans" data-en="<i class='fas fa-check'></i> Batch Weighbridge & Intake Recording" data-sw="<i class='fas fa-check'></i> Rekodi za upimaji wa mizani na mapokezi"><i class="fas fa-check"></i> Batch Weighbridge & Intake Recording</li>
                            <li class="ke-trans" data-en="<i class='fas fa-check'></i> Produce Warehouse & Lot Storage" data-sw="<i class='fas fa-check'></i> Bohari ya mazao na hifadhi"><i class="fas fa-check"></i> Produce Warehouse & Lot Storage</li>
                            <li class="ke-trans" data-en="<i class='fas fa-check'></i> Distribution & Export Shipping Orders" data-sw="<i class='fas fa-check'></i> Usambazaji na maagizo ya kusafirisha nje"><i class="fas fa-check"></i> Distribution & Export Shipping Orders</li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="ke-card">
                        <div class="ke-card-icon"><i class="fas fa-utensils"></i></div>
                        <h4 class="ke-trans" data-en="28. Food Processing ERP" data-sw="28. ERP ya Usindikaji wa Vyakula">28. Food Processing ERP</h4>
                        <p class="ke-trans" data-en="Manage raw farm produce, recipe formulas, pasteurization/packaging lines, food safety traceability, and wholesale channels." data-sw="Simamia mazao ghafi, fomula za mapishi, vifungashio, usalama wa chakula na njia za jumla.">Manage raw farm produce, recipe formulas, pasteurization/packaging lines, food safety traceability, and wholesale channels.</p>
                        <ul class="ke-checklist">
                            <li class="ke-trans" data-en="<i class='fas fa-check'></i> Raw Ingredient Purchasing & Inspections" data-sw="<i class='fas fa-check'></i> Ununuzi wa viungo na ukaguzi"><i class="fas fa-check"></i> Raw Ingredient Purchasing & Inspections</li>
                            <li class="ke-trans" data-en="<i class='fas fa-check'></i> Recipe & Formulation Management" data-sw="<i class='fas fa-check'></i> Usimamizi wa mapishi na uundaji"><i class="fas fa-check"></i> Recipe & Formulation Management</li>
                            <li class="ke-trans" data-en="<i class='fas fa-check'></i> Finished Packaged Food Inventory" data-sw="<i class='fas fa-check'></i> Hisa za vyakula vilivyofungashwa"><i class="fas fa-check"></i> Finished Packaged Food Inventory</li>
                            <li class="ke-trans" data-en="<i class='fas fa-check'></i> Retail & Wholesale Distribution Tracking" data-sw="<i class='fas fa-check'></i> Ufuatiliaji wa usambazaji wa rejareja na jumla"><i class="fas fa-check"></i> Retail & Wholesale Distribution Tracking</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 29 to 34. HEALTHCARE, LOGISTICS, CONSTRUCTION, HOSPITALITY, E-COMMERCE & SMES -->
    <section class="ke-section" id="specialized-sectors">
        <div class="container">
            <div class="text-center mb-5">
                <span class="section-badge-ke ke-trans" data-en="Sections 29-34: Sector Solutions" data-sw="Sehemu ya 29-34: Suluhu za Sekta">Sections 29-34: Sector Solutions</span>
                <h2 class="section-title-ke ke-trans" 
                    data-en="Specialized ERP Solutions for Key Kenyan Industries" 
                    data-sw="Suluhu Maalum za ERP kwa Sekta Kuu za Kenya">
                    Specialized ERP Solutions for Key Kenyan Industries
                </h2>
                <p class="section-sub-ke ke-trans" data-en="Tailored business management workflows built for Kenya's high-growth commercial landscape." data-sw="Mtiririko wa biashara ulioundwa maalum kwa mazingira ya kiuchumi ya Kenya.">Tailored business management workflows built for Kenya's high-growth commercial landscape.</p>
            </div>

            <div class="row g-4">
                <!-- 29. Pharmacy & Healthcare -->
                <div class="col-lg-4 col-md-6">
                    <div class="ke-card">
                        <div class="ke-card-icon"><i class="fas fa-pills"></i></div>
                        <h4 class="ke-trans" data-en="29. Pharmacy & Healthcare Supply" data-sw="29. Famasia na Vifaa vya Afya">29. Pharmacy & Healthcare Supply</h4>
                        <p class="ke-trans" data-en="Manage medicine inventories, batch expiry dates, wholesale purchasing, supplier orders, pharmacy POS counters, and financial records." data-sw="Simamia orodha ya dawa, tarehe za mwisho wa matumizi, ununuzi wa jumla, maagizo ya wauzaji na POS ya famasia.">Manage medicine inventories, batch expiry dates, wholesale purchasing, supplier orders, pharmacy POS counters, and financial records.</p>
                        <ul class="ke-checklist">
                            <li class="ke-trans" data-en="<i class='fas fa-check'></i> Batch expiry & FEFO stock control" data-sw="<i class='fas fa-check'></i> Usimamizi wa tarehe za mwisho na FEFO"><i class="fas fa-check"></i> Batch expiry & FEFO stock control</li>
                            <li class="ke-trans" data-en="<i class='fas fa-check'></i> Fast dispensary point-of-sale" data-sw="<i class='fas fa-check'></i> POS ya haraka ya kutoa dawa"><i class="fas fa-check"></i> Fast dispensary point-of-sale</li>
                        </ul>
                    </div>
                </div>

                <!-- 30. Logistics & Distribution -->
                <div class="col-lg-4 col-md-6">
                    <div class="ke-card">
                        <div class="ke-card-icon"><i class="fas fa-ship"></i></div>
                        <h4 class="ke-trans" data-en="30. Logistics & Freight Corridors" data-sw="30. Usafirishaji na Bandari za Mizigo">30. Logistics & Freight Corridors</h4>
                        <p class="ke-trans" data-en="Capitalize on Mombasa & Lamu ports, SGR railway networks, and cross-border Northern Corridor transport with synchronized inventory ERP." data-sw="Tumia faida ya bandari za Mombasa na Lamu, mtandao wa reli ya SGR, na njia za usafirishaji kwa hisa zilizounganishwa.">Capitalize on Mombasa & Lamu ports, SGR railway networks, and cross-border Northern Corridor transport with synchronized inventory ERP.</p>
                        <ul class="ke-checklist">
                            <li class="ke-trans" data-en="<i class='fas fa-check'></i> Cross-docking & warehouse freight" data-sw="<i class='fas fa-check'></i> Uhamisho wa haraka wa mizigo ghalani"><i class="fas fa-check"></i> Cross-docking & warehouse freight</li>
                            <li class="ke-trans" data-en="<i class='fas fa-check'></i> Landed freight & customs costing" data-sw="<i class='fas fa-check'></i> Gharama za ushuru na forodha"><i class="fas fa-check"></i> Landed freight & customs costing</li>
                        </ul>
                    </div>
                </div>

                <!-- 31. Construction ERP -->
                <div class="col-lg-4 col-md-6">
                    <div class="ke-card">
                        <div class="ke-card-icon"><i class="fas fa-building"></i></div>
                        <h4 class="ke-trans" data-en="31. Construction & Hardware" data-sw="31. Ujenzi na Vifaa vya Hardware">31. Construction & Hardware</h4>
                        <p class="ke-trans" data-en="Manage building materials, quarry supplies, cement distribution, project material requisitions, contractor billing, and equipment records (growing 6.8% in Kenya)." data-sw="Simamia vifaa vya ujenzi, usambazaji wa saruji, maombi ya vifaa vya miradi na ankara za wakandarasi (ukuaji wa 6.8% nchini Kenya).">Manage building materials, quarry supplies, cement distribution, project material requisitions, contractor billing, and equipment records (growing 6.8% in Kenya).</p>
                        <ul class="ke-checklist">
                            <li class="ke-trans" data-en="<i class='fas fa-check'></i> Material site requisitions & dispatch" data-sw="<i class='fas fa-check'></i> Maombi na usafirishaji wa vifaa tovuti"><i class="fas fa-check"></i> Material site requisitions & dispatch</li>
                            <li class="ke-trans" data-en="<i class='fas fa-check'></i> Supplier price agreements" data-sw="<i class='fas fa-check'></i> Makubaliano ya bei na wasambazaji"><i class="fas fa-check"></i> Supplier price agreements</li>
                        </ul>
                    </div>
                </div>

                <!-- 32. Hospitality & Restaurant -->
                <div class="col-lg-4 col-md-6">
                    <div class="ke-card">
                        <div class="ke-card-icon"><i class="fas fa-hotel"></i></div>
                        <h4 class="ke-trans" data-en="32. Hospitality & Food Services" data-sw="32. Hoteli na Migahawa">32. Hospitality & Food Services</h4>
                        <p class="ke-trans" data-en="Power hotel restaurants, cafes, and catering businesses (growing 15.6% in 2025) with table billing POS, kitchen orders, recipe costing, and ingredient replenishment." data-sw="Wezesha migahawa ya hoteli, mikahawa, na huduma za chakula (ukuaji wa 15.6% mnamo 2025) kwa POS ya mezani, maagizo ya jikoni na mapishi.">Power hotel restaurants, cafes, and catering businesses (growing 15.6% in 2025) with table billing POS, kitchen orders, recipe costing, and ingredient replenishment.</p>
                        <ul class="ke-checklist">
                            <li class="ke-trans" data-en="<i class='fas fa-check'></i> Touchscreen restaurant POS" data-sw="<i class='fas fa-check'></i> POS ya mgahawa ya skrini ya kugusa"><i class="fas fa-check"></i> Touchscreen restaurant POS</li>
                            <li class="ke-trans" data-en="<i class='fas fa-check'></i> Ingredient recipe depletion" data-sw="<i class='fas fa-check'></i> Kupunguza viungo kulingana na mapishi"><i class="fas fa-check"></i> Ingredient recipe depletion</li>
                        </ul>
                    </div>
                </div>

                <!-- 33. E-commerce -->
                <div class="col-lg-4 col-md-6">
                    <div class="ke-card">
                        <div class="ke-card-icon"><i class="fas fa-globe"></i></div>
                        <h4 class="ke-trans" data-en="33. E-commerce & Omnichannel" data-sw="33. Biashara ya Mtandaoni (E-commerce)">33. E-commerce & Omnichannel</h4>
                        <p class="ke-trans" data-en="Centralize catalog items, online orders, marketplace dispatches, inventory reserves, payment confirmations, and customer shipping records." data-sw="Kusanya bidhaa za mtandaoni, maagizo ya mtandao, uthibitishaji wa malipo na usafirishaji wa wateja.">Centralize catalog items, online orders, marketplace dispatches, inventory reserves, payment confirmations, and customer shipping records.</p>
                        <ul class="ke-checklist">
                            <li class="ke-trans" data-en="<i class='fas fa-check'></i> Live multi-channel stock sync" data-sw="<i class='fas fa-check'></i> Ulandanishi wa hisa za njia nyingi moja kwa moja"><i class="fas fa-check"></i> Live multi-channel stock sync</li>
                            <li class="ke-trans" data-en="<i class='fas fa-check'></i> Automated order invoicing" data-sw="<i class='fas fa-check'></i> Ankara za kiotomatiki za maagizo"><i class="fas fa-check"></i> Automated order invoicing</li>
                        </ul>
                    </div>
                </div>

                <!-- 34. SME ERP -->
                <div class="col-lg-4 col-md-6">
                    <div class="ke-card">
                        <div class="ke-card-icon"><i class="fas fa-chart-pie"></i></div>
                        <h4 class="ke-trans" data-en="34. ERP Software for Kenyan SMEs" data-sw="34. ERP kwa Biashara Ndogo na za Kati (SMEs)">34. ERP Software for Kenyan SMEs</h4>
                        <p class="ke-trans" data-en="Scalable, modular cloud software designed for growing Kenyan small and medium businesses seeking to graduate from spreadsheets to automated ERP." data-sw="Programu ya wingu inayoweza kupanuka, iliyoundwa kwa biashara ndogo na za kati za Kenya zinazotaka kuondokana na majedwali ya kawaida.">Scalable, modular cloud software designed for growing Kenyan small and medium businesses seeking to graduate from spreadsheets to automated ERP.</p>
                        <ul class="ke-checklist">
                            <li class="ke-trans" data-en="<i class='fas fa-check'></i> Easy onboarding & affordable setup" data-sw="<i class='fas fa-check'></i> Usanidi rahisi na wa gharama nafuu"><i class="fas fa-check"></i> Easy onboarding & affordable setup</li>
                            <li class="ke-trans" data-en="<i class='fas fa-check'></i> Scales as you add branches & users" data-sw="<i class='fas fa-check'></i> Hupanuka kadri unavyoongeza matawi"><i class="fas fa-check"></i> Scales as you add branches & users</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 35 to 39. CORE PLATFORM CAPABILITIES -->
    <section class="ke-section bg-light-ke" id="core-platform">
        <div class="container">
            <div class="text-center mb-5">
                <span class="section-badge-ke ke-trans" data-en="Sections 35-39: Core Engine" data-sw="Sehemu ya 35-39: Injini Kuu ya Mfumo">Sections 35-39: Core Engine</span>
                <h2 class="section-title-ke ke-trans" 
                    data-en="Enterprise Cloud Modules Built for Kenya" 
                    data-sw="Moduli za Wingu za Biashara Zilizoundwa kwa Kenya">
                    Enterprise Cloud Modules Built for Kenya
                </h2>
                <p class="section-sub-ke ke-trans" data-en="Everything you need to operate a modern, efficient, and profitable business." data-sw="Kila kitu unachohitaji kuendesha biashara ya kisasa, yenye ufanisi na faida.">Everything you need to operate a modern, efficient, and profitable business.</p>
            </div>

            <div class="row g-4">
                <!-- 35. Multi-Branch -->
                <div class="col-md-6 col-lg-4">
                    <div class="ke-card">
                        <div class="ke-card-icon"><i class="fas fa-network-wired"></i></div>
                        <h4 class="ke-trans" data-en="35. Multi-Branch ERP" data-sw="35. ERP ya Matawi Mengi">35. Multi-Branch ERP</h4>
                        <p class="ke-trans" data-en="Manage stores and warehouses across Nairobi, Mombasa, Nakuru, Eldoret, Kisumu, and regional locations from one unified dashboard." data-sw="Simamia maduka na maghala Nairobi, Mombasa, Nakuru, Eldoret, Kisumu na kote nchini kupitia dashibodi moja.">Manage stores and warehouses across Nairobi, Mombasa, Nakuru, Eldoret, Kisumu, and regional locations from one unified dashboard.</p>
                        <ul class="ke-checklist">
                            <li class="ke-trans" data-en="<i class='fas fa-check'></i> Inter-branch stock transfer orders" data-sw="<i class='fas fa-check'></i> Maagizo ya uhamisho wa hisa kati ya matawi"><i class="fas fa-check"></i> Inter-branch stock transfer orders</li>
                            <li class="ke-trans" data-en="<i class='fas fa-check'></i> Branch-specific user permissions" data-sw="<i class='fas fa-check'></i> Ruhusa maalum za watumiaji kwa kila tawi"><i class="fas fa-check"></i> Branch-specific user permissions</li>
                            <li class="ke-trans" data-en="<i class='fas fa-check'></i> Consolidated group financial reports" data-sw="<i class='fas fa-check'></i> Ripoti za fedha zilizojumuishwa za kundi zima"><i class="fas fa-check"></i> Consolidated group financial reports</li>
                        </ul>
                    </div>
                </div>

                <!-- 36. CRM -->
                <div class="col-md-6 col-lg-4">
                    <div class="ke-card">
                        <div class="ke-card-icon"><i class="fas fa-user-friends"></i></div>
                        <h4 class="ke-trans" data-en="36. CRM & Customer Management" data-sw="36. CRM na Usimamizi wa Wateja">36. CRM & Customer Management</h4>
                        <p class="ke-trans" data-en="Track customer leads, sales rep activities, quotation follow-ups, contract renewals, and customer relationship pipelines." data-sw="Fuatilia wateja wanaotarajiwa, shughuli za wauzaji, ufuatiliaji wa nukuu za bei na mikataba.">Track customer leads, sales rep activities, quotation follow-ups, contract renewals, and customer relationship pipelines.</p>
                        <ul class="ke-checklist">
                            <li class="ke-trans" data-en="<i class='fas fa-check'></i> Lead pipeline & deals tracking" data-sw="<i class='fas fa-check'></i> Ufuatiliaji wa miamala na wateja watarajiwa"><i class="fas fa-check"></i> Lead pipeline & deals tracking</li>
                            <li class="ke-trans" data-en="<i class='fas fa-check'></i> Customer communication history" data-sw="<i class='fas fa-check'></i> Historia ya mawasiliano na wateja"><i class="fas fa-check"></i> Customer communication history</li>
                            <li class="ke-trans" data-en="<i class='fas fa-check'></i> Sales rep targets & performance" data-sw="<i class='fas fa-check'></i> Malengo na utendaji wa timu ya mauzo"><i class="fas fa-check"></i> Sales rep targets & performance</li>
                        </ul>
                    </div>
                </div>

                <!-- 37. Accounting -->
                <div class="col-md-6 col-lg-4">
                    <div class="ke-card">
                        <div class="ke-card-icon"><i class="fas fa-calculator"></i></div>
                        <h4 class="ke-trans" data-en="37. Cloud Accounting & Finance" data-sw="37. Uhasibu wa Wingu na Fedha">37. Cloud Accounting & Finance</h4>
                        <p class="ke-trans" data-en="Double-entry general ledger, Accounts Receivable, Accounts Payable, bank reconciliation, expense vouchers, and balance sheets." data-sw="Uhasibu wa kina, madai, madeni, usuluhisho wa benki, hati za matumizi na mizania.">Double-entry general ledger, Accounts Receivable, Accounts Payable, bank reconciliation, expense vouchers, and balance sheets.</p>
                        <ul class="ke-checklist">
                            <li class="ke-trans" data-en="<i class='fas fa-check'></i> Automated journal entries from sales & POs" data-sw="<i class='fas fa-check'></i> Ingizo la kiotomatiki la leja kutoka mauzo na ununuzi"><i class="fas fa-check"></i> Automated journal entries from sales & POs</li>
                            <li class="ke-trans" data-en="<i class='fas fa-check'></i> Customer aging & credit limit controls" data-sw="<i class='fas fa-check'></i> Usimamizi wa madeni na mipaka ya mkopo"><i class="fas fa-check"></i> Customer aging & credit limit controls</li>
                            <li class="ke-trans" data-en="<i class='fas fa-check'></i> Real-time Cashflow statements" data-sw="<i class='fas fa-check'></i> Taarifa za mtiririko wa pesa taslimu"><i class="fas fa-check"></i> Real-time Cashflow statements</li>
                        </ul>
                    </div>
                </div>

                <!-- 38. Payroll & HR -->
                <div class="col-md-6 col-lg-6">
                    <div class="ke-card">
                        <div class="ke-card-icon"><i class="fas fa-users-cog"></i></div>
                        <h4 class="ke-trans" data-en="38. Payroll & HR Management" data-sw="38. Mishahara na Usimamizi wa Wafanyakazi">38. Payroll & HR Management</h4>
                        <p class="ke-trans" data-en="Maintain complete employee databases, biometric attendance sync, leave requests, shift schedules, and automated payroll calculations with payslips." data-sw="Hifadhi kumbukumbu za wafanyakazi, mahudhurio, maombi ya likizo, ratiba za zamu na kutoa hati za mishahara kiotomatiki.">Maintain complete employee databases, biometric attendance sync, leave requests, shift schedules, and automated payroll calculations with payslips.</p>
                        <ul class="ke-checklist">
                            <li class="ke-trans" data-en="<i class='fas fa-check'></i> Employee profiles & document repository" data-sw="<i class='fas fa-check'></i> Wasifu wa wafanyakazi na hifadhi ya nyaraka"><i class="fas fa-check"></i> Employee profiles & document repository</li>
                            <li class="ke-trans" data-en="<i class='fas fa-check'></i> Biometric device integration & attendance logs" data-sw="<i class='fas fa-check'></i> Kuunganisha vifaa vya alama za vidole na mahudhurio"><i class="fas fa-check"></i> Biometric device integration & attendance logs</li>
                            <li class="ke-trans" data-en="<i class='fas fa-check'></i> Automated salary disbursement sheets" data-sw="<i class='fas fa-check'></i> Majedwali ya malipo ya mishahara ya kiotomatiki"><i class="fas fa-check"></i> Automated salary disbursement sheets</li>
                        </ul>
                    </div>
                </div>

                <!-- 39. Business Analytics -->
                <div class="col-md-6 col-lg-6">
                    <div class="ke-card">
                        <div class="ke-card-icon"><i class="fas fa-chart-bar"></i></div>
                        <h4 class="ke-trans" data-en="39. Business Intelligence & Analytics" data-sw="39. Takwimu na Ripoti za Biashara">39. Business Intelligence & Analytics</h4>
                        <p class="ke-trans" data-en="Executive visual dashboards providing instant visibility into branch revenues, product margins, inventory aging, supplier lead times, and profit trends." data-sw="Dashibodi za picha zinazotoa taarifa za haraka kuhusu mapato ya matawi, faida ya bidhaa, orodha ya bidhaa na mwenendo wa faida.">Executive visual dashboards providing instant visibility into branch revenues, product margins, inventory aging, supplier lead times, and profit trends.</p>
                        <ul class="ke-checklist">
                            <li class="ke-trans" data-en="<i class='fas fa-check'></i> Daily, monthly & yearly comparative sales" data-sw="<i class='fas fa-check'></i> Mauzo ya kulinganisha ya kila siku, mwezi na mwaka"><i class="fas fa-check"></i> Daily, monthly & yearly comparative sales</li>
                            <li class="ke-trans" data-en="<i class='fas fa-check'></i> Fast-moving product & category breakdown" data-sw="<i class='fas fa-check'></i> Mgawanyo wa bidhaa na kategoria zinazotembea haraka"><i class="fas fa-check"></i> Fast-moving product & category breakdown</li>
                            <li class="ke-trans" data-en="<i class='fas fa-check'></i> Cashier and sales team KPI reports" data-sw="<i class='fas fa-check'></i> Ripoti za utendaji kazi (KPI) za makeshia na wauzaji"><i class="fas fa-check"></i> Cashier and sales team KPI reports</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 40. KENYA-SPECIFIC BUSINESS BENEFITS & 41. WHY KENYA IS A GOOD MARKET -->
    <section class="ke-section" id="benefits-kenya">
        <div class="container">
            <div class="row align-items-center g-4">
                <div class="col-lg-6">
                    <span class="section-badge-ke ke-trans" data-en="Section 40: Business Impact" data-sw="Sehemu ya 40: Manufaa ya Biashara">Section 40: Business Impact</span>
                    <h2 class="section-title-ke ke-trans" 
                        data-en="10 Strategic Benefits for Kenyan Businesses" 
                        data-sw="Manufaa 10 Muhimu kwa Biashara za Kenya">
                        10 Strategic Benefits for Kenyan Businesses
                    </h2>
                    <p class="text-muted mb-4 ke-trans" data-en="Empowering modern Kenyan enterprises with end-to-end operational mastery." data-sw="Kuziwezesha biashara za kisasa za Kenya kwa ufanisi wa kina wa kiutendaji.">Empowering modern Kenyan enterprises with end-to-end operational mastery.</p>

                    <div class="row g-2">
                        <div class="col-sm-6"><div class="p-3 bg-light rounded-3 border"><i class="fas fa-check-circle text-success me-1"></i> <strong class="ke-trans" data-en="1. Centralized Business Operations" data-sw="1. Uendeshaji wa Kati wa Biashara">1. Centralized Business Operations</strong></div></div>
                        <div class="col-sm-6"><div class="p-3 bg-light rounded-3 border"><i class="fas fa-check-circle text-success me-1"></i> <strong class="ke-trans" data-en="2. Improved Inventory Visibility" data-sw="2. Ufahamu Bora wa Hisa">2. Improved Inventory Visibility</strong></div></div>
                        <div class="col-sm-6"><div class="p-3 bg-light rounded-3 border"><i class="fas fa-check-circle text-success me-1"></i> <strong class="ke-trans" data-en="3. Better Purchasing Control" data-sw="3. Udhibiti Bora wa Manunuzi">3. Better Purchasing Control</strong></div></div>
                        <div class="col-sm-6"><div class="p-3 bg-light rounded-3 border"><i class="fas fa-check-circle text-success me-1"></i> <strong class="ke-trans" data-en="4. Multi-Branch Management" data-sw="4. Usimamizi wa Matawi Mengi">4. Multi-Branch Management</strong></div></div>
                        <div class="col-sm-6"><div class="p-3 bg-light rounded-3 border"><i class="fas fa-check-circle text-success me-1"></i> <strong class="ke-trans" data-en="5. Integrated High-Speed POS" data-sw="5. POS ya Haraka Iliyounganishwa">5. Integrated High-Speed POS</strong></div></div>
                        <div class="col-sm-6"><div class="p-3 bg-light rounded-3 border"><i class="fas fa-check-circle text-success me-1"></i> <strong class="ke-trans" data-en="6. Centralized Customer Data" data-sw="6. Taarifa za Kati za Wateja">6. Centralized Customer Data</strong></div></div>
                        <div class="col-sm-6"><div class="p-3 bg-light rounded-3 border"><i class="fas fa-check-circle text-success me-1"></i> <strong class="ke-trans" data-en="7. Better Financial Visibility" data-sw="7. Uwazi Bora wa Fedha">7. Better Financial Visibility</strong></div></div>
                        <div class="col-sm-6"><div class="p-3 bg-light rounded-3 border"><i class="fas fa-check-circle text-success me-1"></i> <strong class="ke-trans" data-en="8. Digital Transaction Management" data-sw="8. Usimamizi wa Miamala ya Kidijitali">8. Digital Transaction Management</strong></div></div>
                        <div class="col-sm-6"><div class="p-3 bg-light rounded-3 border"><i class="fas fa-check-circle text-success me-1"></i> <strong class="ke-trans" data-en="9. Scalable Cloud Operations" data-sw="9. Mfumo wa Wingu Unaopanuka">9. Scalable Cloud Operations</strong></div></div>
                        <div class="col-sm-6"><div class="p-3 bg-light rounded-3 border"><i class="fas fa-check-circle text-success me-1"></i> <strong class="ke-trans" data-en="10. Business Analytics & Reporting" data-sw="10. Takwimu na Ripoti za Biashara">10. Business Analytics & Reporting</strong></div></div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="vertical-box-ke p-4">
                        <span class="vertical-tag ke-trans" data-en="Section 41: Economic Powerhouse" data-sw="Sehemu ya 41: Kitovu cha Uchumi">Section 41: Economic Powerhouse</span>
                        <h3 class="fw-bold mb-3 ke-trans" 
                            data-en="Built for Kenya's Growing Business Economy" 
                            data-sw="Imejengwa kwa Ajili ya Uchumi Unaokua wa Kenya">
                            Built for Kenya's Growing Business Economy
                        </h3>
                        <p class="text-muted ke-trans" 
                            data-en="Kenya combines a growing domestic market with strong regional trade, logistics infrastructure and expanding opportunities across manufacturing, agriculture, technology, retail and emerging industries."
                            data-sw="Kenya inachanganya soko linalokua la ndani na biashara imara ya kikanda, miundombinu ya usafirishaji na fursa zinazopanuka katika viwanda, kilimo, teknolojia na rejareja.">
                            Kenya combines a growing domestic market with strong regional trade, logistics infrastructure and expanding opportunities across manufacturing, agriculture, technology, retail and emerging industries.
                        </p>
                        <p class="text-muted small ke-trans" 
                            data-en="InvestKenya currently positions Kenya as an East African regional hub with domestic demand across agriculture, textiles and apparel, leather, mining, technology and BPO, supported by world-class ports, rail and airport infrastructure."
                            data-sw="InvestKenya inaiweka Kenya kama kitovu cha kikanda cha Afrika Mashariki chenye mahitaji ya ndani katika kilimo, nguo, ngozi, madini, na teknolojia, ikisaidiwa na bandari za kisasa, reli na viwanja vya ndege.">
                            InvestKenya currently positions Kenya as an East African regional hub with domestic demand across agriculture, textiles and apparel, leather, mining, technology and BPO, supported by world-class ports, rail and airport infrastructure.
                        </p>
                        <div class="d-flex gap-2 mt-3 flex-wrap">
                            <a href="#demo-form" class="btn btn-ke-primary btn-sm px-3 ke-trans" data-en="Request Kenya Demo" data-sw="Omba Onyesho la Kenya">Request Kenya Demo</a>
                            <a href="supermarket-erp-software-kenya.php" class="btn btn-outline-secondary btn-sm px-3 ke-trans" data-en="Supermarket Solution" data-sw="Suluhu ya Supermarket">Supermarket Solution</a>
                            <a href="mining-erp-software-kenya.php" class="btn btn-outline-secondary btn-sm px-3 ke-trans" data-en="Mining Solution" data-sw="Suluhu ya Madini">Mining Solution</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 42. KENYA INDUSTRY GRID (16 Cards) -->
    <section class="ke-section bg-light-ke" id="industry-grid">
        <div class="container">
            <div class="text-center mb-5">
                <span class="section-badge-ke ke-trans" data-en="Section 42: Industry Matrix" data-sw="Sehemu ya 42: Sekta za Viwanda">Section 42: Industry Matrix</span>
                <h2 class="section-title-ke ke-trans" 
                    data-en="16 Industry Verticals Powered by Digify Kenya" 
                    data-sw="Sekta 16 za Viwanda Zinazoendeshwa na Digify Kenya">
                    16 Industry Verticals Powered by Digify Kenya
                </h2>
                <p class="section-sub-ke ke-trans" data-en="Comprehensive cloud ERP tailored to every major Kenyan commercial sector." data-sw="ERP kamili ya wingu iliyoundwa kwa kila sekta kuu ya kibiashara nchini Kenya.">Comprehensive cloud ERP tailored to every major Kenyan commercial sector.</p>
            </div>

            <div class="row g-3">
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="ke-card text-center p-3">
                        <div class="ke-card-icon mx-auto"><i class="fas fa-shopping-cart"></i></div>
                        <h5 class="fw-bold fs-6 ke-trans" data-en="1. Supermarkets & Retail" data-sw="1. Maduka Makubwa na Rejareja">1. Supermarkets & Retail</h5>
                        <p class="small text-muted m-0 ke-trans" data-en="High-speed POS, multi-branch inventory, and barcode billing." data-sw="POS ya haraka, hisa za matawi mengi, na malipo ya barcode.">High-speed POS, multi-branch inventory, and barcode billing.</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="ke-card text-center p-3">
                        <div class="ke-card-icon mx-auto"><i class="fas fa-boxes-stacked"></i></div>
                        <h5 class="fw-bold fs-6 ke-trans" data-en="2. Wholesale & Distribution" data-sw="2. Biashara ya Jumla na Usambazaji">2. Wholesale & Distribution</h5>
                        <p class="small text-muted m-0 ke-trans" data-en="Bulk orders, credit limits, price tiers, and invoice dispatch." data-sw="Maagizo ya wingi, mipaka ya mkopo, na utoaji wa ankara.">Bulk orders, credit limits, price tiers, and invoice dispatch.</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="ke-card text-center p-3">
                        <div class="ke-card-icon mx-auto"><i class="fas fa-shipping-fast"></i></div>
                        <h5 class="fw-bold fs-6 ke-trans" data-en="3. FMCG" data-sw="3. Bidhaa za FMCG">3. FMCG</h5>
                        <p class="small text-muted m-0 ke-trans" data-en="Packaged food, beverage lines, and fast warehouse replenishment." data-sw="Vyakula vilivyofungashwa, vinywaji, na kujaza bidhaa ghalani haraka.">Packaged food, beverage lines, and fast warehouse replenishment.</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="ke-card text-center p-3">
                        <div class="ke-card-icon mx-auto"><i class="fas fa-gem"></i></div>
                        <h5 class="fw-bold fs-6 ke-trans" data-en="4. Mining & Quarrying" data-sw="4. Madini na Machimbo">4. Mining & Quarrying</h5>
                        <p class="small text-muted m-0 ke-trans" data-en="Heavy equipment records, fuel tracking, and quarry procurement." data-sw="Kumbukumbu za mitambo mizito, mafuta na ununuzi wa machimbo.">Heavy equipment records, fuel tracking, and quarry procurement.</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="ke-card text-center p-3">
                        <div class="ke-card-icon mx-auto"><i class="fas fa-industry"></i></div>
                        <h5 class="fw-bold fs-6 ke-trans" data-en="5. Manufacturing" data-sw="5. Viwanda na Uzalishaji">5. Manufacturing</h5>
                        <p class="small text-muted m-0 ke-trans" data-en="BOM recipes, raw material planning, WIP, and production runs." data-sw="Mapishi ya BOM, mipango ya malighafi, na mizunguko ya uzalishaji.">BOM recipes, raw material planning, WIP, and production runs.</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="ke-card text-center p-3">
                        <div class="ke-card-icon mx-auto"><i class="fas fa-seedling"></i></div>
                        <h5 class="fw-bold fs-6 ke-trans" data-en="6. Agriculture & Agribusiness" data-sw="6. Kilimo na Kilimo-Biashara">6. Agriculture & Agribusiness</h5>
                        <p class="small text-muted m-0 ke-trans" data-en="Tea, coffee, horticulture, outgrower intake, and farm supplies." data-sw="Chai, kahawa, maua, mapokezi ya wakulima na vifaa vya shamba.">Tea, coffee, horticulture, outgrower intake, and farm supplies.</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="ke-card text-center p-3">
                        <div class="ke-card-icon mx-auto"><i class="fas fa-utensils"></i></div>
                        <h5 class="fw-bold fs-6 ke-trans" data-en="7. Food Processing" data-sw="7. Usindikaji wa Vyakula">7. Food Processing</h5>
                        <p class="small text-muted m-0 ke-trans" data-en="Formulation control, lot packaging, and cold store inventory." data-sw="Udhibiti wa uundaji, vifungashio vya bechi, na hifadhi ya baridi.">Formulation control, lot packaging, and cold store inventory.</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="ke-card text-center p-3">
                        <div class="ke-card-icon mx-auto"><i class="fas fa-tshirt"></i></div>
                        <h5 class="fw-bold fs-6 ke-trans" data-en="8. Textiles & Apparel" data-sw="8. Nguo na Mavazi">8. Textiles & Apparel</h5>
                        <p class="small text-muted m-0 ke-trans" data-en="Size/color matrices, apparel retail POS, and fabric stocks." data-sw="Mizani ya ukubwa/rangi, POS ya mavazi, na hisa za vitambaa.">Size/color matrices, apparel retail POS, and fabric stocks.</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="ke-card text-center p-3">
                        <div class="ke-card-icon mx-auto"><i class="fas fa-pills"></i></div>
                        <h5 class="fw-bold fs-6 ke-trans" data-en="9. Pharmaceuticals" data-sw="9. Famasia na Dawa">9. Pharmaceuticals</h5>
                        <p class="small text-muted m-0 ke-trans" data-en="Batch expiry, medicine catalog, and retail dispensary POS." data-sw="Tarehe za mwisho za bechi, katalogi ya dawa, na POS ya famasia.">Batch expiry, medicine catalog, and retail dispensary POS.</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="ke-card text-center p-3">
                        <div class="ke-card-icon mx-auto"><i class="fas fa-hard-hat"></i></div>
                        <h5 class="fw-bold fs-6 ke-trans" data-en="10. Construction" data-sw="10. Ujenzi na Hardware">10. Construction</h5>
                        <p class="small text-muted m-0 ke-trans" data-en="Building supplies, site requisitions, and cement/hardware billing." data-sw="Vifaa vya ujenzi, maombi ya tovuti, na ankara za saruji na vifaa.">Building supplies, site requisitions, and cement/hardware billing.</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="ke-card text-center p-3">
                        <div class="ke-card-icon mx-auto"><i class="fas fa-truck"></i></div>
                        <h5 class="fw-bold fs-6 ke-trans" data-en="11. Logistics & Distribution" data-sw="11. Usafirishaji na Usambazaji">11. Logistics & Distribution</h5>
                        <p class="small text-muted m-0 ke-trans" data-en="Port freight stock, warehouse hubs, and transport order logs." data-sw="Hisa za mizigo ya bandari, vituo vya bohari, na kumbukumbu za usafiri.">Port freight stock, warehouse hubs, and transport order logs.</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="ke-card text-center p-3">
                        <div class="ke-card-icon mx-auto"><i class="fas fa-hotel"></i></div>
                        <h5 class="fw-bold fs-6 ke-trans" data-en="12. Hospitality & Restaurants" data-sw="12. Hoteli na Migahawa">12. Hospitality & Restaurants</h5>
                        <p class="small text-muted m-0 ke-trans" data-en="Table orders, bar POS, kitchen printing, and recipe depletion." data-sw="Maagizo ya mezani, POS ya baa, uchapishaji wa jikoni, na mapishi.">Table orders, bar POS, kitchen printing, and recipe depletion.</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="ke-card text-center p-3">
                        <div class="ke-card-icon mx-auto"><i class="fas fa-globe"></i></div>
                        <h5 class="fw-bold fs-6 ke-trans" data-en="13. E-commerce" data-sw="13. Biashara ya Mtandaoni">13. E-commerce</h5>
                        <p class="small text-muted m-0 ke-trans" data-en="Online shop order sync, dispatch packing, and invoice printing." data-sw="Ulandanishi wa maagizo ya mtandaoni, ufungashaji na uchapishaji wa ankara.">Online shop order sync, dispatch packing, and invoice printing.</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="ke-card text-center p-3">
                        <div class="ke-card-icon mx-auto"><i class="fas fa-heartbeat"></i></div>
                        <h5 class="fw-bold fs-6 ke-trans" data-en="14. Healthcare Businesses" data-sw="14. Biashara za Huduma ya Afya">14. Healthcare Businesses</h5>
                        <p class="small text-muted m-0 ke-trans" data-en="Medical equipment supplies, clinic billing, and supplier credit." data-sw="Usambazaji wa vifaa vya matibabu, ankara za kliniki, na mikopo.">Medical equipment supplies, clinic billing, and supplier credit.</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="ke-card text-center p-3">
                        <div class="ke-card-icon mx-auto"><i class="fas fa-briefcase"></i></div>
                        <h5 class="fw-bold fs-6 ke-trans" data-en="15. Professional Services" data-sw="15. Huduma za Kitaalamu">15. Professional Services</h5>
                        <p class="small text-muted m-0 ke-trans" data-en="Client project billing, timesheets, expenses, and tax invoices." data-sw="Ankara za miradi ya wateja, muda wa kazi, matumizi na ankara za kodi.">Client project billing, timesheets, expenses, and tax invoices.</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="ke-card text-center p-3">
                        <div class="ke-card-icon mx-auto"><i class="fas fa-rocket"></i></div>
                        <h5 class="fw-bold fs-6 ke-trans" data-en="16. SMEs" data-sw="16. Biashara Ndogo na za Kati">16. SMEs</h5>
                        <p class="small text-muted m-0 ke-trans" data-en="All-in-one affordable cloud starter packs for Kenyan entrepreneurs." data-sw="Vifurushi nafuu vya wingu kwa wajasiriamali wa Kenya.">All-in-one affordable cloud starter packs for Kenyan entrepreneurs.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQS SECTION -->
    <section class="ke-section bg-light-ke" id="faqs-kenya">
        <div class="container">
            <div class="text-center mb-5">
                <span class="section-badge-ke ke-trans" data-en="Frequently Asked Questions" data-sw="Maswali Yanayoulizwa Mara kwa Mara">Frequently Asked Questions</span>
                <h2 class="section-title-ke ke-trans" 
                    data-en="Kenya Cloud ERP & Operations FAQs" 
                    data-sw="Maswali Yanayoulizwa Mara kwa Mara Kuhusu ERP Kenya">
                    Kenya Cloud ERP & Operations FAQs
                </h2>
                <p class="section-sub-ke ke-trans" data-en="Answers to common questions from Kenyan business executives, retailers, and industrialists." data-sw="Majibu ya maswali ya kawaida kutoka kwa wafanyabiashara na wamiliki wa viwanda nchini Kenya.">Answers to common questions from Kenyan business executives, retailers, and industrialists.</p>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-9">
                    <div class="accordion accordion-ke" id="kenyaFaqAccordion">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="kfq1">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseKfq1" aria-expanded="true">
                                    <span class="ke-trans" data-en="How does Digify ERP handle Kenya's digital tax and electronic invoicing requirements?" data-sw="Je, Digify ERP inashughulikia vipi mahitaji ya kodi ya kidijitali na ankara za kielektroniki nchini Kenya?">How does Digify ERP handle Kenya's digital tax and electronic invoicing requirements?</span>
                                </button>
                            </h2>
                            <div id="collapseKfq1" class="accordion-collapse collapse show" data-bs-parent="#kenyaFaqAccordion">
                                <div class="accordion-body ke-trans" data-en="Digify ERP provides structured data management for sales transactions, purchases, electronic invoices, credit notes, and customer PIN details. It formats financial transaction records ready for digital tax administration, ensuring seamless alignment with Kenya's 16% standard VAT and business recordkeeping standards." data-sw="Digify ERP inatoa usimamizi thabiti wa data ya mauzo, ununuzi, ankara za kielektroniki, hati za mkopo na PIN ya KRA ya mteja, ikipanga rekodi za kifedha tayari kwa utawala wa kodi ya kidijitali na kiwango cha VAT cha 16%.">
                                    Digify ERP provides structured data management for sales transactions, purchases, electronic invoices, credit notes, and customer PIN details. It formats financial transaction records ready for digital tax administration, ensuring seamless alignment with Kenya's 16% standard VAT and business recordkeeping standards.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="kfq2">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseKfq2">
                                    <span class="ke-trans" data-en="Can Digify manage multi-branch supermarkets across different Kenyan counties?" data-sw="Je, Digify inaweza kusimamia maduka makubwa yenye matawi mengi katika kaunti mbalimbali za Kenya?">Can Digify manage multi-branch supermarkets across different Kenyan counties?</span>
                                </button>
                            </h2>
                            <div id="collapseKfq2" class="accordion-collapse collapse" data-bs-parent="#kenyaFaqAccordion">
                                <div class="accordion-body ke-trans" data-en="Yes. Digify ERP features centralized multi-branch architecture. You can monitor live stock levels, cashier shifts, sales receipts, and branch profitability across Nairobi, Mombasa, Kisumu, Nakuru, Eldoret, and other regions from a single cloud console with instant inter-branch transfers." data-sw="Ndiyo. Digify ERP inakuwezesha kufuatilia hisa za moja kwa moja, zamu za makeshia, risiti za mauzo na faida ya matawi kote Nairobi, Mombasa, Kisumu, Nakuru, Eldoret na mikoa mingine kutoka kwenye kiweko kimoja cha wingu.">
                                    Yes. Digify ERP features centralized multi-branch architecture. You can monitor live stock levels, cashier shifts, sales receipts, and branch profitability across Nairobi, Mombasa, Kisumu, Nakuru, Eldoret, and other regions from a single cloud console with instant inter-branch transfers.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="kfq3">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseKfq3">
                                    <span class="ke-trans" data-en="Does Digify support mining sites and quarry procurement in remote locations?" data-sw="Je, Digify inasaidia ununuzi wa machimbo na tovuti za uchimbaji madini katika maeneo ya mbali?">Does Digify support mining sites and quarry procurement in remote locations?</span>
                                </button>
                            </h2>
                            <div id="collapseKfq3" class="accordion-collapse collapse" data-bs-parent="#kenyaFaqAccordion">
                                <div class="accordion-body ke-trans" data-en="Yes. Digify's Mining & Quarrying module tracks heavy equipment assets, spare parts consumption, fuel allocations, safety equipment, and site-level purchase requisitions across remote extraction sites and central supply warehouses." data-sw="Ndiyo. Moduli ya Madini na Machimbo ya Digify inafuatilia mitambo mizito, matumizi ya vipuri, mgao wa mafuta, vifaa vya usalama na maombi ya ununuzi ya maeneo ya machimbo.">
                                    Yes. Digify's Mining & Quarrying module tracks heavy equipment assets, spare parts consumption, fuel allocations, safety equipment, and site-level purchase requisitions across remote extraction sites and central supply warehouses.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="kfq4">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseKfq4">
                                    <span class="ke-trans" data-en="What payment methods are supported at the POS counter in Kenya?" data-sw="Je, ni njia gani za malipo zinazokubalika kwenye kaunta ya POS nchini Kenya?">What payment methods are supported at the POS counter in Kenya?</span>
                                </button>
                            </h2>
                            <div id="collapseKfq4" class="accordion-collapse collapse" data-bs-parent="#kenyaFaqAccordion">
                                <div class="accordion-body ke-trans" data-en="Digify POS supports multi-tender checkout including Cash (KES), M-Pesa mobile money reference recording, Visa/Mastercard debit/credit cards, and customer store credit or loyalty vouchers." data-sw="Digify POS inakubali malipo mbalimbali ikiwa ni pamoja na Pesa Taslimu (KES), M-Pesa, kadi za benki za Visa/Mastercard, na vocha za uaminifu za wateja.">
                                    Digify POS supports multi-tender checkout including Cash (KES), M-Pesa mobile money reference recording, Visa/Mastercard debit/credit cards, and customer store credit or loyalty vouchers.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- BOTTOM CTA BANNER -->
    <section class="ke-section bg-dark-ke text-center">
        <div class="container">
            <span class="badge bg-success text-white px-3 py-1 rounded-pill mb-3 ke-trans" data-en="Transform Your Kenyan Enterprise" data-sw="Badilisha Biashara Yako ya Kenya">Transform Your Kenyan Enterprise</span>
            <h2 class="section-title-ke-dark mb-3 ke-trans" 
                data-en="Ready to Centralize Your Operations in Kenya?" 
                data-sw="Uko Tayari Kuunganisha Shughuli Zako za Biashara Kenya?">
                Ready to Centralize Your Operations in Kenya?
            </h2>
            <p class="text-light opacity-75 max-w-700 mx-auto mb-4 ke-trans" 
                data-en="Join forward-thinking supermarkets, wholesalers, manufacturers, mines, and agribusinesses in Kenya scaling with Digify Cloud ERP." 
                data-sw="Jiunge na biashara zinazokua za maduka makubwa, wauzaji wa jumla, viwanda, migodi na kilimo-biashara nchini Kenya zinazotumia Digify Cloud ERP.">
                Join forward-thinking supermarkets, wholesalers, manufacturers, mines, and agribusinesses in Kenya scaling with Digify Cloud ERP.
            </p>
            <div class="d-flex justify-content-center gap-3 flex-wrap">
                <a href="#demo-form" class="btn btn-ke-primary px-4 py-3">
                    <i class="fas fa-calendar-alt me-2"></i>
                    <span class="ke-trans" data-en="Book a Free Live Demo" data-sw="Weka Nafasi ya Onyesho la Bure">Book a Free Live Demo</span>
                </a>
                <a href="https://wa.me/919914444588?text=Hello%20Digify%20Kenya%20ERP%20Team" target="_blank" class="btn btn-ke-outline px-4 py-3">
                    <i class="fab fa-whatsapp text-success me-2"></i>
                    <span class="ke-trans" data-en="Chat with Kenya ERP Specialist" data-sw="Ongea na Mtaalamu wa Kenya">Chat with Kenya ERP Specialist</span>
                </a>
            </div>
        </div>
    </section>

</div>

<script>
function switchKeLang(lang) {
    var btnEn = document.getElementById('btnKeLangEn');
    var btnSw = document.getElementById('btnKeLangSw');

    if (lang === 'sw') {
        if (btnEn) btnEn.classList.remove('active');
        if (btnSw) btnSw.classList.add('active');
    } else {
        if (btnSw) btnSw.classList.remove('active');
        if (btnEn) btnEn.classList.add('active');
    }

    var elements = document.querySelectorAll('.ke-trans');
    elements.forEach(function(el) {
        var text = el.getAttribute('data-' + lang);
        if (text) {
            el.innerHTML = text;
        }
    });

    // Translate form industry select options
    var sel = document.querySelector('#demo-form select[name="industry"]');
    if (sel) {
        if (lang === 'sw') {
            sel.options[0].text = "Chagua sekta ya biashara yako...";
            sel.options[1].text = "Maduka Makubwa na Rejareja (Supermarket)";
            sel.options[2].text = "Biashara ya Jumla na Usambazaji (FMCG)";
            sel.options[3].text = "Uchimbaji Madini na Machimbo";
            sel.options[4].text = "Viwanda na Uzalishaji";
            sel.options[5].text = "Kilimo, Chai, Kahawa na Maua";
            sel.options[6].text = "Usindikaji wa Vyakula na Vinywaji";
            sel.options[7].text = "Usafirishaji, Bandari na Maghala";
            sel.options[8].text = "Ujenzi na Vifaa vya Hardware";
            sel.options[9].text = "Hoteli na Migahawa";
            sel.options[10].text = "Famasia na Vifaa vya Afya";
            sel.options[11].text = "Biashara ya Mtandaoni / SME";
        } else {
            sel.options[0].text = "Select your business sector...";
            sel.options[1].text = "Supermarket & Retail Store";
            sel.options[2].text = "Wholesale & FMCG Distribution";
            sel.options[3].text = "Mining & Quarrying";
            sel.options[4].text = "Manufacturing & Assembly";
            sel.options[5].text = "Agriculture, Tea/Coffee & Horticulture";
            sel.options[6].text = "Food & Beverage Processing";
            sel.options[7].text = "Logistics, Transport & Warehousing";
            sel.options[8].text = "Construction & Hardware Materials";
            sel.options[9].text = "Hospitality, Hotel & Restaurant";
            sel.options[10].text = "Pharmacy & Healthcare Supply";
            sel.options[11].text = "E-commerce / Growing SME";
        }
    }
    localStorage.setItem('digify_ke_lang', lang);
}

document.addEventListener('DOMContentLoaded', function() {
    var savedLang = localStorage.getItem('digify_ke_lang');
    if (savedLang) {
        switchKeLang(savedLang);
    }
});
</script>

<?php 
include(__DIR__ . '/../../footer.php');
?>
