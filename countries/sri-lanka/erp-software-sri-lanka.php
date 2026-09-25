<?php 
include_once(__DIR__ . '/../../db.php');
include_once(__DIR__ . '/../../fetch_meta.php');

$pageTitle = "ERP Software Sri Lanka | Cloud ERP for Retail, Manufacturing & Distribution";
$pageDescription = "Digify Soft Solutions provides cloud ERP software for Sri Lankan businesses with accounting, VAT-ready invoicing workflows, inventory, POS, CRM, payroll, purchasing, manufacturing and business analytics.";
$pageKeywords = "ERP software Sri Lanka, ERP system Sri Lanka, Cloud ERP Sri Lanka, ERP solution Sri Lanka, Business management software Sri Lanka, Accounting ERP Sri Lanka, VAT ERP Sri Lanka, Tax invoice software Sri Lanka, Inventory management software Sri Lanka, Retail ERP Sri Lanka, Supermarket ERP Sri Lanka, Supermarket POS Sri Lanka, Wholesale ERP Sri Lanka, Distribution ERP Sri Lanka, Garment ERP Sri Lanka, Apparel ERP Sri Lanka, Textile ERP Sri Lanka, Tea ERP Sri Lanka, Tea business software Sri Lanka, Agriculture ERP Sri Lanka, Agribusiness ERP Sri Lanka, Food processing ERP Sri Lanka, Manufacturing ERP Sri Lanka, Tourism ERP Sri Lanka, Hospitality ERP Sri Lanka, Restaurant POS Sri Lanka, Pharmacy ERP Sri Lanka, Logistics ERP Sri Lanka, Construction ERP Sri Lanka, E-commerce ERP Sri Lanka, CRM software Sri Lanka, Payroll software Sri Lanka, Warehouse management software Sri Lanka, Multi branch ERP Sri Lanka";
$pageCanonical = "https://www.digifysoft.in/erp-software-sri-lanka";

include(__DIR__ . '/../../top.php');
include(__DIR__ . '/../../header.php');
?>

<style>
/* Sri Lanka Suite Design System */
.lk-page-wrapper {
    font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
    color: #1e293b;
    overflow-x: hidden;
}

/* Hero Section */
.lk-hero {
    background: linear-gradient(135deg, #091e1d 0%, #0d3835 45%, #134e4a 100%);
    color: #ffffff;
    padding: 70px 0 85px;
    position: relative;
    overflow: hidden;
    border-bottom: 4px solid #0d9488;
}
.lk-hero::before {
    content: '';
    position: absolute;
    top: -15%;
    right: -10%;
    width: 680px;
    height: 680px;
    background: radial-gradient(circle, rgba(13, 148, 136, 0.25) 0%, rgba(245, 158, 11, 0.15) 50%, rgba(0, 0, 0, 0) 75%);
    border-radius: 50%;
    pointer-events: none;
}
.text-gradient-lk {
    background: linear-gradient(135deg, #2dd4bf 0%, #facc15 50%, #fb923c 100%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    display: inline-block;
}
.lk-hero-badge {
    background: rgba(13, 148, 136, 0.18);
    border: 1px solid rgba(45, 212, 191, 0.45);
    color: #5eead4;
    font-size: 13px;
    font-weight: 700;
    padding: 7px 18px;
    border-radius: 30px;
    display: inline-flex;
    align-items: center;
    gap: 8px;
    margin-bottom: 18px;
}
.lk-hero h1 {
    font-size: 42px;
    font-weight: 900;
    line-height: 1.25;
    margin-bottom: 18px;
    letter-spacing: -0.5px;
}
.lk-hero-sub {
    font-size: 18px;
    font-weight: 600;
    color: #fde047;
    line-height: 1.5;
    margin-bottom: 14px;
}
.lk-hero-desc {
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
    background: linear-gradient(135deg, #0d9488 0%, #14b8a6 100%);
    color: #ffffff;
    box-shadow: 0 4px 12px rgba(13, 148, 136, 0.4);
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
.btn-lk-primary {
    background: linear-gradient(135deg, #0d9488 0%, #0f766e 100%);
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
    box-shadow: 0 10px 20px -5px rgba(13, 148, 136, 0.4);
    text-decoration: none;
}
.btn-lk-primary:hover {
    background: linear-gradient(135deg, #0f766e 0%, #115e59 100%);
    color: #ffffff;
    transform: translateY(-2px);
}
.btn-lk-outline {
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
.btn-lk-outline:hover {
    background: rgba(255, 255, 255, 0.18);
    color: #ffffff;
    transform: translateY(-2px);
}

/* Section styling */
.lk-section { padding: 75px 0; }
.bg-light-lk { background-color: #f8fafc; }
.bg-dark-lk { background: #071917; color: #ffffff; }
.section-badge-lk {
    display: inline-block;
    background: #f0fdfa;
    color: #0f766e;
    font-size: 12px;
    font-weight: 800;
    text-transform: uppercase;
    letter-spacing: 0.8px;
    padding: 6px 14px;
    border-radius: 20px;
    margin-bottom: 12px;
    border: 1px solid #99f6e4;
}
.section-badge-lk-dark {
    display: inline-block;
    background: rgba(45, 212, 191, 0.18);
    color: #5eead4;
    font-size: 12px;
    font-weight: 800;
    text-transform: uppercase;
    letter-spacing: 0.8px;
    padding: 6px 14px;
    border-radius: 20px;
    margin-bottom: 12px;
    border: 1px solid rgba(45, 212, 191, 0.4);
}
.section-title-lk {
    font-size: 34px;
    font-weight: 900;
    color: #0f172a;
    line-height: 1.3;
    margin-bottom: 16px;
    letter-spacing: -0.5px;
}
.section-title-lk-dark {
    font-size: 34px;
    font-weight: 900;
    color: #ffffff;
    line-height: 1.3;
    margin-bottom: 16px;
    letter-spacing: -0.5px;
}
.section-sub-lk {
    font-size: 16px;
    color: #64748b;
    max-width: 780px;
    margin: 0 auto 40px;
    line-height: 1.7;
}
.section-sub-lk-dark {
    font-size: 16px;
    color: rgba(255, 255, 255, 0.75);
    max-width: 780px;
    margin: 0 auto 40px;
    line-height: 1.7;
}

/* Feature Cards */
.lk-card {
    background: #ffffff;
    border: 1px solid #e2e8f0;
    border-radius: 16px;
    padding: 26px;
    transition: all 0.3s ease;
    height: 100%;
    display: flex;
    flex-direction: column;
}
.lk-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 20px 30px -10px rgba(0, 0, 0, 0.08);
    border-color: #5eead4;
}
.lk-card-icon {
    width: 52px;
    height: 52px;
    border-radius: 14px;
    background: linear-gradient(135deg, #f0fdfa 0%, #ccfbf1 100%);
    color: #0f766e;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 22px;
    margin-bottom: 18px;
}
.lk-card h4 {
    font-size: 18px;
    font-weight: 800;
    color: #0f172a;
    margin-bottom: 10px;
}
.lk-card p {
    font-size: 14px;
    color: #64748b;
    line-height: 1.6;
    margin-bottom: 16px;
    flex-grow: 1;
}
.lk-checklist {
    list-style: none;
    padding: 0;
    margin: 0;
}
.lk-checklist li {
    font-size: 13.5px;
    color: #334155;
    margin-bottom: 8px;
    display: flex;
    align-items: center;
    gap: 8px;
}
.lk-checklist li i {
    color: #0d9488;
    font-size: 14px;
    flex-shrink: 0;
}

/* Compliance Box */
.compliance-box-lk {
    background: linear-gradient(135deg, #f0fdfa 0%, #e6fffa 100%);
    border: 2px solid #5eead4;
    border-radius: 18px;
    padding: 32px;
    margin-bottom: 30px;
}
.compliance-box-lk h4 {
    font-size: 22px;
    font-weight: 800;
    color: #0f766e;
    margin-bottom: 12px;
    display: flex;
    align-items: center;
    gap: 10px;
}
.compliance-box-lk p {
    font-size: 15px;
    color: #134e4a;
    line-height: 1.7;
    margin: 0;
}

/* Vertical Promotion Cards */
.vertical-box-lk {
    background: #ffffff;
    border: 1px solid #e2e8f0;
    border-radius: 20px;
    padding: 32px;
    position: relative;
    overflow: hidden;
    transition: all 0.3s ease;
    height: 100%;
}
.vertical-box-lk:hover {
    border-color: #0d9488;
    box-shadow: 0 20px 40px -15px rgba(13, 148, 136, 0.15);
    transform: translateY(-4px);
}
.vertical-tag-lk {
    position: absolute;
    top: 20px;
    right: 20px;
    background: #ccfbf1;
    color: #0f766e;
    font-size: 12px;
    font-weight: 800;
    padding: 4px 12px;
    border-radius: 20px;
}

/* Industry Grid */
.industry-grid-card {
    background: #ffffff;
    border: 1px solid #e2e8f0;
    border-radius: 16px;
    padding: 24px;
    text-align: center;
    transition: all 0.3s ease;
    height: 100%;
}
.industry-grid-card:hover {
    border-color: #0d9488;
    background: #f0fdfa;
    transform: translateY(-4px);
    box-shadow: 0 15px 30px -10px rgba(0, 0, 0, 0.06);
}
.industry-grid-card i {
    font-size: 32px;
    color: #0d9488;
    margin-bottom: 14px;
    display: inline-block;
}
.industry-grid-card h5 {
    font-size: 16px;
    font-weight: 800;
    color: #0f172a;
    margin-bottom: 8px;
}
.industry-grid-card p {
    font-size: 13px;
    color: #64748b;
    line-height: 1.5;
    margin: 0;
}

/* Challenge Cards */
.challenge-card {
    background: #ffffff;
    border: 1px solid #fecaca;
    border-left: 5px solid #ef4444;
    border-radius: 14px;
    padding: 24px;
    height: 100%;
}
.challenge-card h5 {
    font-size: 17px;
    font-weight: 800;
    color: #991b1b;
    margin-bottom: 8px;
}
.challenge-card p {
    font-size: 13.5px;
    color: #475569;
    line-height: 1.6;
    margin: 0;
}

/* Stats Counter Box */
.stat-box-lk {
    background: rgba(255, 255, 255, 0.06);
    border: 1px solid rgba(255, 255, 255, 0.15);
    border-radius: 14px;
    padding: 16px 12px;
    text-align: center;
    transition: all 0.3s ease;
}
.stat-box-lk:hover {
    background: rgba(255, 255, 255, 0.1);
    transform: translateY(-2px);
}
.stat-box-lk h3 {
    font-size: 26px;
    font-weight: 900;
    color: #facc15;
    margin-bottom: 4px;
    line-height: 1.1;
}
.stat-box-lk p {
    font-size: 12px;
    font-weight: 600;
    color: rgba(255, 255, 255, 0.85);
    margin: 0;
    line-height: 1.35;
}

/* FAQ Accordion */
.accordion-lk .accordion-item {
    border: 1px solid #e2e8f0;
    border-radius: 12px !important;
    margin-bottom: 14px;
    overflow: hidden;
}
.accordion-lk .accordion-button {
    font-weight: 700;
    font-size: 16px;
    color: #0f172a;
    background: #ffffff;
    padding: 18px 22px;
}
.accordion-lk .accordion-button:not(.collapsed) {
    color: #0f766e;
    background: #f0fdfa;
    box-shadow: none;
}
.accordion-lk .accordion-body {
    font-size: 14.5px;
    color: #475569;
    line-height: 1.7;
    padding: 20px 22px;
    background: #ffffff;
}

@media (max-width: 991px) {
    .lk-hero { padding: 45px 0 55px; }
    .lk-hero h1 { font-size: 28px; line-height: 1.3; }
    .lk-hero-sub { font-size: 16px; }
    .lk-hero-desc { font-size: 14px; }
    .hero-lead-card { margin-top: 25px; padding: 24px 20px; }
    .stat-box-lk { padding: 12px 8px; }
    .stat-box-lk h3 { font-size: 20px; }
    .stat-box-lk p { font-size: 11px; }
    .section-title-lk, .section-title-lk-dark { font-size: 24px; }
    .vertical-box-lk { padding: 20px; }
}
@media (max-width: 576px) {
    .lk-hero { padding: 30px 0 40px; }
    .lk-hero-badge { font-size: 11px; padding: 6px 12px; white-space: normal; line-height: 1.4; }
    .lk-hero h1 { font-size: 22px; }
    .lk-hero-sub { font-size: 14px; }
    .lk-hero-desc { font-size: 13.5px; }
    .hero-lead-card { padding: 18px 16px; margin-top: 20px; border-radius: 16px; }
    .hero-lead-card h3 { font-size: 18px; }
    .hero-lead-card p { font-size: 12.5px; margin-bottom: 14px; }
    .stat-box-lk { padding: 8px 4px; border-radius: 8px; }
    .stat-box-lk h3 { font-size: 15px; margin-bottom: 2px; }
    .stat-box-lk p { font-size: 9.5px; line-height: 1.2; }
    .btn-lk-primary, .btn-lk-outline { width: 100%; justify-content: center; }
}
</style>

<div class="lk-page-wrapper">

    <!-- 1. HERO SECTION -->
    <section class="lk-hero" id="hero">
        <div class="container position-relative" style="z-index: 2;">
            <div class="row align-items-center g-4">
                <div class="col-lg-7">
                    <!-- Language Switcher -->
                    <div class="lang-toggle-bar">
                        <button class="lang-pill active" id="btnLkLangEn" onclick="switchLkLang('en')">🇬🇧 English</button>
                        <button class="lang-pill" id="btnLkLangSi" onclick="switchLkLang('si')">🇱🇰 සිංහල</button>
                    </div>

                    <div class="lk-hero-badge">
                        <span>🇱🇰</span>
                        <span class="lk-trans" data-en="Built for Sri Lankan Businesses • Retail, Tea, Garments & Tourism" data-si="ශ්‍රී ලාංකික ව්‍යාපාර සඳහා නිර්මාණය කර ඇත • සිල්ලර, තේ, ඇඟලුම් සහ සංචාරක">Built for Sri Lankan Businesses • Retail, Tea, Garments & Tourism</span>
                    </div>

                    <h1 class="lk-trans" 
                        data-en="Cloud ERP Software for Businesses in Sri Lanka" 
                        data-si="ශ්‍රී ලංකාවේ ව්‍යාපාර සඳහා ක්ලවුඩ් ERP මෘදුකාංගය">
                        Cloud ERP Software for Businesses in Sri Lanka
                    </h1>

                    <div class="lk-hero-sub lk-trans"
                        data-en="Manage your entire business with a powerful cloud ERP platform built for Sri Lanka's retail, wholesale, manufacturing, apparel, agriculture, tea, tourism and growing business sectors."
                        data-si="ශ්‍රී ලංකාවේ සිල්ලර, තොග, නිෂ්පාදන, ඇඟලුම්, කෘෂිකර්ම, තේ, සංචාරක සහ වර්ධනය වන ව්‍යාපාරික අංශ සඳහා බලවත් ක්ලවුඩ් ERP පද්ධතියක්.">
                        Manage your entire business with a powerful cloud ERP platform built for Sri Lanka's retail, wholesale, manufacturing, apparel, agriculture, tea, tourism and growing business sectors.
                    </div>

                    <p class="lk-hero-desc lk-trans"
                        data-en="Digify Soft Solutions brings accounting, inventory, POS, sales, purchasing, CRM, payroll, manufacturing and business analytics together in one integrated cloud ERP platform."
                        data-si="Digify Soft Solutions ගිණුම්කරණය, තොග කළමනාකරණය, POS, විකුණුම්, මිලදී ගැනීම්, CRM, වැටුප්, නිෂ්පාදනය සහ ව්‍යාපාර විශ්ලේෂණ එකම ක්ලවුඩ් ERP පද්ධතියකට ගෙන එයි.">
                        Digify Soft Solutions brings accounting, inventory, POS, sales, purchasing, CRM, payroll, manufacturing and business analytics together in one integrated cloud ERP platform.
                    </p>

                    <div class="d-flex flex-wrap gap-3 mb-4">
                        <a href="#demo-form" class="btn btn-lk-primary">
                            <i class="fas fa-calendar-check"></i>
                            <span class="lk-trans" data-en="Request a Free Demo" data-si="නොමිලේ ඩෙමෝ එකක් ඉල්ලන්න">Request a Free Demo</span>
                        </a>
                        <a href="https://wa.me/919914444588?text=Hello%20Digify%20Sri%20Lanka%20ERP%20Team" target="_blank" class="btn btn-lk-outline">
                            <i class="fab fa-whatsapp text-success"></i>
                            <span class="lk-trans" data-en="Talk to an ERP Expert" data-si="ERP විශේෂඥයෙකු අමතන්න">Talk to an ERP Expert</span>
                        </a>
                    </div>

                    <!-- Quick Highlights -->
                    <div class="row g-3 pt-2">
                        <div class="col-4">
                            <div class="stat-box-lk">
                                <h3>VAT 2026</h3>
                                <p class="lk-trans" data-en="RAMIS & SVAT Ready" data-si="RAMIS & SVAT අනුකූල">RAMIS & SVAT Ready</p>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="stat-box-lk">
                                <h3>Apparel</h3>
                                <p class="lk-trans" data-en="Garment & Cut-to-Pack" data-si="ඇඟලුම් සහ නිෂ්පාදන">Garment & Cut-to-Pack</p>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="stat-box-lk">
                                <h3>Tea & Agri</h3>
                                <p class="lk-trans" data-en="Estate & Auction Logs" data-si="තේ වතු සහ වෙන්දේසි">Estate & Auction Logs</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Right Form -->
                <div class="col-lg-5" id="demo-form">
                    <div class="hero-lead-card">
                        <div class="d-flex align-items-center justify-content-between flex-wrap gap-2 mb-2 pb-1 border-bottom">
                            <span class="badge bg-success text-white px-2 py-1 rounded-pill font-monospace lk-trans" style="font-size: 11px;" data-en="🇱🇰 SRI LANKA FAST-TRACK" data-si="🇱🇰 ශ්‍රී ලංකා වේගවත් ඩෙමෝ">🇱🇰 SRI LANKA FAST-TRACK</span>
                            <span class="text-muted small text-nowrap"><i class="fas fa-clock text-warning me-1"></i> <span class="lk-trans" data-en="15-Min Live Demo" data-si="මිනිත්තු 15 ක සජීවී ඩෙමෝ">15-Min Live Demo</span></span>
                        </div>
                        <h3 class="lk-trans mt-2" data-en="Get a Customized Sri Lanka Demo" data-si="ශ්‍රී ලංකා ඩෙමෝ එකක් ලබාගන්න">Get a Customized Sri Lanka Demo</h3>
                        <p class="lk-trans" data-en="Discover how Digify unifies operations for your business in Colombo, Kandy, Galle, Gampaha & across Sri Lanka." data-si="කොළඹ, මහනුවර, ගාල්ල, ගම්පහ සහ මුළු ශ්‍රී ලංකාව පුරාම ඔබේ ව්‍යාපාරය කළමනාකරණය කරගන්න.">Discover how Digify unifies operations for your business in Colombo, Kandy, Galle, Gampaha & across Sri Lanka.</p>
                        
                        <form action="send_mail.php" method="POST" id="sriLankaHeroLeadForm">
                            <input type="hidden" name="source" value="Sri Lanka Main ERP Page">
                            <input type="hidden" name="country" value="Sri Lanka">
                            
                            <div class="mb-2">
                                <label class="form-label small fw-bold text-dark lk-trans" data-en="Full Name" data-si="සම්පූර්ණ නම">Full Name</label>
                                <input type="text" name="name" class="form-control lk-trans-ph" placeholder="e.g. Kasun Perera / Dilshan Silva" data-en-ph="e.g. Kasun Perera / Dilshan Silva" data-si-ph="උදා: කසුන් පෙරේරා / ඩිල්ෂාන් සිල්වා" required>
                            </div>

                            <div class="mb-2">
                                <label class="form-label small fw-bold text-dark lk-trans" data-en="Company / Business Name" data-si="සමාගමේ / ව්‍යාපාරයේ නම">Company / Business Name</label>
                                <input type="text" name="company" class="form-control lk-trans-ph" placeholder="e.g. Ceylon Exports / Colombo Supermart" data-en-ph="e.g. Ceylon Exports / Colombo Supermart" data-si-ph="උදා: සිලෝන් එක්ස්පෝර්ට්ස් / කොළඹ සුපර්මාර්ට්" required>
                            </div>

                            <div class="row g-2 mb-2">
                                <div class="col-6">
                                    <label class="form-label small fw-bold text-dark lk-trans" data-en="WhatsApp / Phone" data-si="දුරකථන අංකය">WhatsApp / Phone</label>
                                    <input type="tel" name="phone" class="form-control" placeholder="+94 7X XXX XXXX" required>
                                </div>
                                <div class="col-6">
                                    <label class="form-label small fw-bold text-dark lk-trans" data-en="Work Email" data-si="විද්‍යුත් තැපෑල">Work Email</label>
                                    <input type="email" name="email" class="form-control" placeholder="info@company.lk" required>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label class="form-label small fw-bold text-dark lk-trans" data-en="Select Industry" data-si="ව්‍යාපාර ක්ෂේත්‍රය තෝරන්න">Select Industry</label>
                                <select name="industry" class="form-select" required>
                                    <option value="" selected disabled class="lk-trans" data-en="Select your business sector..." data-si="ඔබේ ව්‍යාපාර ක්ෂේත්‍රය තෝරන්න...">Select your business sector...</option>
                                    <option value="Supermarket & Retail" class="lk-trans" data-en="Supermarket & Retail Store" data-si="සුපිරි වෙළඳසැල් සහ සිල්ලර අලෙවිසැල්">Supermarket & Retail Store</option>
                                    <option value="Garments & Apparel" class="lk-trans" data-en="Garments & Apparel Manufacturing" data-si="ඇඟලුම් සහ ඇඳුම් නිෂ්පාදනය">Garments & Apparel Manufacturing</option>
                                    <option value="Tea & Processing" class="lk-trans" data-en="Tea Processing, Estates & Export" data-si="තේ සැකසුම්, වතු සහ අපනයනය">Tea Processing, Estates & Export</option>
                                    <option value="Wholesale & Distribution" class="lk-trans" data-en="Wholesale & FMCG Distribution" data-si="තොග වෙළඳාම සහ FMCG බෙදාහැරීම">Wholesale & FMCG Distribution</option>
                                    <option value="Agriculture & Spices" class="lk-trans" data-en="Agriculture, Cinnamon & Spices" data-si="කෘෂිකර්මාන්තය, කුරුඳු සහ කුළුබඩු">Agriculture, Cinnamon & Spices</option>
                                    <option value="Tourism & Hospitality" class="lk-trans" data-en="Tourism, Hotels & Beach Resorts" data-si="සංචාරක, හෝටල් සහ නිවාඩු නිකේතන">Tourism, Hotels & Beach Resorts</option>
                                    <option value="Food Processing" class="lk-trans" data-en="Food & Beverage Processing" data-si="ආහාර සහ පාන සැකසුම්">Food & Beverage Processing</option>
                                    <option value="Manufacturing & Assembly" class="lk-trans" data-en="General Manufacturing & Job Work" data-si="සාමාන්‍ය නිෂ්පාදන සහ කාර්මික">General Manufacturing & Job Work</option>
                                    <option value="Logistics & Warehousing" class="lk-trans" data-en="Logistics & Freight Distribution" data-si="ප්‍රවාහන සහ ගබඩා මෙහෙයුම්">Logistics & Freight Distribution</option>
                                    <option value="Pharmacy & Healthcare" class="lk-trans" data-en="Pharmacy & Healthcare Retail" data-si="ඖෂධහල් සහ සෞඛ්‍ය සිල්ලර">Pharmacy & Healthcare Retail</option>
                                    <option value="Construction & Hardware" class="lk-trans" data-en="Construction & Hardware Materials" data-si="ඉදිකිරීම් සහ දෘඩාංග ද්‍රව්‍ය">Construction & Hardware Materials</option>
                                    <option value="E-commerce & SME" class="lk-trans" data-en="E-commerce / Growing Enterprise" data-si="ඊ-වාණිජ්‍යය / වර්ධනය වන ව්‍යාපාර">E-commerce / Growing Enterprise</option>
                                </select>
                            </div>

                            <button type="submit" class="btn btn-lk-primary w-100 py-2">
                                <span class="lk-trans" data-en="Schedule My Live Demo" data-si="මගේ සජීවී ඩෙමෝව වෙන්කරගන්න">Schedule My Live Demo</span>
                                <i class="fas fa-arrow-right ms-2"></i>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 2. WHY DIGIFY ERP FOR SRI LANKA? -->
    <section class="lk-section" id="why-sri-lanka">
        <div class="container">
            <div class="text-center mb-5">
                <span class="section-badge-lk lk-trans" data-en="Centralized Cloud ERP" data-si="මධ්‍යගත ක්ලවුඩ් ERP">Centralized Cloud ERP</span>
                <h2 class="section-title-lk lk-trans" 
                    data-en="One Integrated ERP Platform for Sri Lankan Businesses" 
                    data-si="ශ්‍රී ලාංකික ව්‍යාපාර සඳහා එකම ඒකාබද්ධ ERP පද්ධතිය">
                    One Integrated ERP Platform for Sri Lankan Businesses
                </h2>
                <p class="section-sub-lk lk-trans" 
                    data-en="Sri Lankan businesses operate across diverse industries including retail, wholesale, manufacturing, apparel, agriculture, tea, food processing, tourism, logistics and professional services. Digify Soft Solutions helps businesses centralize their sales, inventory, purchasing, accounting, customer management and operational workflows through one cloud-based ERP environment. Replace disconnected spreadsheets and legacy systems with a centralized platform designed to improve operational visibility and business management."
                    data-si="සිල්ලර, තොග, ඇඟලුම්, තේ, කෘෂිකර්ම, සංචාරක සහ සැපයුම් ඇතුළු විවිධ ක්ෂේත්‍රවල ශ්‍රී ලාංකික ව්‍යාපාර සඳහා Digify Soft Solutions පූර්ණ කළමනාකරණ පහසුකම් සලසයි. විසිරී ඇති එක්සෙල් ශීට් වෙනුවට නවීන ක්ලවුඩ් ERP පද්ධතියක් භාවිත කරන්න.">
                    Sri Lankan businesses operate across diverse industries including retail, wholesale, manufacturing, apparel, agriculture, tea, food processing, tourism, logistics and professional services. Digify Soft Solutions helps businesses centralize their sales, inventory, purchasing, accounting, customer management and operational workflows through one cloud-based ERP environment. Replace disconnected spreadsheets and legacy systems with a centralized platform designed to improve operational visibility and business management.
                </p>
            </div>

            <div class="row g-4">
                <div class="col-md-4">
                    <div class="lk-card">
                        <div class="lk-card-icon"><i class="fas fa-network-wired"></i></div>
                        <h4 class="lk-trans" data-en="Zero Disconnected Systems" data-si="විසිරුණු පද්ධති නැත">Zero Disconnected Systems</h4>
                        <p class="lk-trans" data-en="Connect retail POS, multi-branch showrooms, central warehouses, purchasing departments, and bank ledgers into a unified cloud database with real-time sync." data-si="සිල්ලර POS, ශාඛා, ගබඩා, මිලදී ගැනීම් සහ ගිණුම් එකම ක්ලවුඩ් දත්ත ගබඩාවකට සම්බන්ධ කරන්න.">Connect retail POS, multi-branch showrooms, central warehouses, purchasing departments, and bank ledgers into a unified cloud database with real-time sync.</p>
                        <ul class="lk-checklist">
                            <li class="lk-trans" data-en="<i class='fas fa-check-circle'></i> Multi-branch live stock sync" data-si="<i class='fas fa-check-circle'></i> සජීවී බහු-ශාඛා තොග යාවත්කාලීන"><i class="fas fa-check-circle"></i> Multi-branch live stock sync</li>
                            <li class="lk-trans" data-en="<i class='fas fa-check-circle'></i> Centralized product master" data-si="<i class='fas fa-check-circle'></i> මධ්‍යගත නිෂ්පාදන නාමාවලිය"><i class="fas fa-check-circle"></i> Centralized product master</li>
                            <li class="lk-trans" data-en="<i class='fas fa-check-circle'></i> Automated ledger postings" data-si="<i class='fas fa-check-circle'></i> ස්වයංක්‍රීය ලෙජර් සටහන්"><i class="fas fa-check-circle"></i> Automated ledger postings</li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="lk-card">
                        <div class="lk-card-icon"><i class="fas fa-file-invoice-dollar"></i></div>
                        <h4 class="lk-trans" data-en="Organized Tax & Financial Records" data-si="සංවිධානාත්මක බදු සහ මූල්‍ය වාර්තා">Organized Tax & Financial Records</h4>
                        <p class="lk-trans" data-en="Capture accurate transaction-level details with revised 2026 VAT rules, simplified SVAT vouchers, and structured serial invoice records." data-si="2026 සංශෝධිත VAT නීති සහ SVAT වවුචර සමඟ නිවැරදි ගනුදෙනු විස්තර සටහන් කරගන්න.">Capture accurate transaction-level details with revised 2026 VAT rules, simplified SVAT vouchers, and structured serial invoice records.</p>
                        <ul class="lk-checklist">
                            <li class="lk-trans" data-en="<i class='fas fa-check-circle'></i> Supplier & Purchaser TIN Tracking" data-si="<i class='fas fa-check-circle'></i> TIN අංක ලුහුබැඳීම"><i class="fas fa-check-circle"></i> Supplier & Purchaser TIN Tracking</li>
                            <li class="lk-trans" data-en="<i class='fas fa-check-circle'></i> Formatted Tax Invoice Receipts" data-si="<i class='fas fa-check-circle'></i> නීත්‍යානුකූල බදු ඉන්වොයිසි"><i class="fas fa-check-circle"></i> Formatted Tax Invoice Receipts</li>
                            <li class="lk-trans" data-en="<i class='fas fa-check-circle'></i> Exportable RAMIS Audit Trails" data-si="<i class='fas fa-check-circle'></i> RAMIS සඳහා සුදුසු වාර්තා"><i class="fas fa-check-circle"></i> Exportable RAMIS Audit Trails</li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="lk-card">
                        <div class="lk-card-icon"><i class="fas fa-chart-pie"></i></div>
                        <h4 class="lk-trans" data-en="Multi-Currency & Export Intelligence" data-si="බහු-මුදල් සහ අපනයන විශ්ලේෂණ">Multi-Currency & Export Intelligence</h4>
                        <p class="lk-trans" data-en="Empower leadership with branch profitability, gross margins, tea auction batches, and multi-currency invoicing across LKR, USD, EUR, and GBP." data-si="LKR, USD, EUR සමඟ බහු-මුදල් ඉන්වොයිසි සහ ශාඛා ලාභදායිතා වාර්තා ලබාගන්න.">Empower leadership with branch profitability, gross margins, tea auction batches, and multi-currency invoicing across LKR, USD, EUR, and GBP.</p>
                        <ul class="lk-checklist">
                            <li class="lk-trans" data-en="<i class='fas fa-check-circle'></i> Multi-currency sales & purchases" data-si="<i class='fas fa-check-circle'></i> බහු-මුදල් විකුණුම් සහ මිලදී ගැනීම්"><i class="fas fa-check-circle"></i> Multi-currency sales & purchases</li>
                            <li class="lk-trans" data-en="<i class='fas fa-check-circle'></i> Fast vs slow moving stock" data-si="<i class='fas fa-check-circle'></i> වේගයෙන් අලෙවි වන භාණ්ඩ විශ්ලේෂණය"><i class="fas fa-check-circle"></i> Fast vs slow moving stock</li>
                            <li class="lk-trans" data-en="<i class='fas fa-check-circle'></i> Executive decision dashboards" data-si="<i class='fas fa-check-circle'></i> කළමනාකරණ තීරණ ගැනීමේ පුවරු"><i class="fas fa-check-circle"></i> Executive decision dashboards</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 3. SRI LANKA VAT & TAX INVOICE SECTION -->
    <section class="lk-section bg-light-lk" id="vat-tax-sri-lanka">
        <div class="container">
            <div class="compliance-box-lk">
                <h4><i class="fas fa-receipt"></i> <span class="lk-trans" data-en="ERP for Sri Lanka's Digital Tax & VAT Environment" data-si="ශ්‍රී ලංකාවේ බදු සහ VAT පරිසරය සඳහා ERP පද්ධතිය">ERP for Sri Lanka's Digital Tax & VAT Environment</span></h4>
                <p class="lk-trans" 
                    data-en="Sri Lanka's tax administration continues to strengthen standardized and digital financial processes. Digify Soft Solutions provides centralized sales, purchasing, invoice and financial transaction management capabilities for businesses operating in Sri Lanka. Sri Lanka IRD's 2026 revised VAT Tax Invoice specification became effective from 1 July 2026. The requirements include supplier TIN, registered business name/address, purchaser information where applicable, and a prescribed invoice serial number structure. Manage sales transactions, purchases, invoices and financial records through a centralized ERP environment designed to support structured business workflows."
                    data-si="ශ්‍රී ලංකාවේ දේශීය ආදායම් දෙපාර්තමේන්තුවේ (IRD) 2026 සංශෝධිත VAT බදු ඉන්වොයිසි රෙගුලාසි අනුව සැපයුම්කරුගේ TIN අංකය, ලියාපදිංචි ව්‍යාපාරික නම සහ ස්ථාවර අනුක්‍රමික ඉන්වොයිස් අංක ඇතුළත් කර මූල්‍ය වාර්තා නිවැරදිව පවත්වා ගැනීමට Digify ERP උපකාරී වේ.">
                    Sri Lanka's tax administration continues to strengthen standardized and digital financial processes. Digify Soft Solutions provides centralized sales, purchasing, invoice and financial transaction management capabilities for businesses operating in Sri Lanka. Sri Lanka IRD's 2026 revised VAT Tax Invoice specification became effective from 1 July 2026. The requirements include supplier TIN, registered business name/address, purchaser information where applicable, and a prescribed invoice serial number structure. Manage sales transactions, purchases, invoices and financial records through a centralized ERP environment designed to support structured business workflows.
                </p>
            </div>

            <div class="row align-items-center g-4 mt-2">
                <div class="col-lg-6">
                    <span class="section-badge-lk lk-trans" data-en="Section 3: Fiscal Workflows" data-si="3 වන කොටස: බදු කාර්ය ප්‍රවාහ">Section 3: Fiscal Workflows</span>
                    <h2 class="section-title-lk lk-trans" 
                        data-en="VAT Invoicing & Financial Record-Keeping Capabilities" 
                        data-si="VAT ඉන්වොයිසි සහ මූල්‍ය වාර්තා තබා ගැනීමේ හැකියාව">
                        VAT Invoicing & Financial Record-Keeping Capabilities
                    </h2>
                    <p class="text-muted lk-trans" 
                        data-en="Sri Lanka's VAT Act specifies required tax-invoice information including supplier and customer identification, invoice date, unique serial numbering, detailed supply descriptions, quantity/volume, taxable value, and tax charged."
                        data-si="ශ්‍රී ලංකාවේ VAT පනත අනුව සැපයුම්කරුගේ සහ ගැණුම්කරුගේ විස්තර, දිනය, අනුක්‍රමික අංකය, භාණ්ඩ ප්‍රමාණය, අගය සහ අය කරන ලද බදු ප්‍රමාණය නිවැරදිව සඳහන් කළ යුතුය.">
                        Sri Lanka's VAT Act specifies required tax-invoice information including supplier and customer identification, invoice date, unique serial numbering, detailed supply descriptions, quantity/volume, taxable value, and tax charged.
                    </p>
                    
                    <div class="row g-2 mt-2">
                        <div class="col-sm-6">
                            <ul class="lk-checklist">
                                <li class="lk-trans" data-en="<i class='fas fa-check-circle'></i> Tax Invoice Management" data-si="<i class='fas fa-check-circle'></i> බදු ඉන්වොයිස් කළමනාකරණය"><i class="fas fa-check-circle"></i> Tax Invoice Management</li>
                                <li class="lk-trans" data-en="<i class='fas fa-check-circle'></i> Supplier TIN & Details" data-si="<i class='fas fa-check-circle'></i> සැපයුම්කරුගේ TIN විස්තර"><i class="fas fa-check-circle"></i> Supplier TIN & Details</li>
                                <li class="lk-trans" data-en="<i class='fas fa-check-circle'></i> Customer Information & TIN" data-si="<i class='fas fa-check-circle'></i> පාරිභෝගික තොරතුරු සහ TIN"><i class="fas fa-check-circle"></i> Customer Information & TIN</li>
                                <li class="lk-trans" data-en="<i class='fas fa-check-circle'></i> Prescribed Serial Numbers" data-si="<i class='fas fa-check-circle'></i> අනුක්‍රමික අංකකරණය"><i class="fas fa-check-circle"></i> Prescribed Serial Numbers</li>
                            </ul>
                        </div>
                        <div class="col-sm-6">
                            <ul class="lk-checklist">
                                <li class="lk-trans" data-en="<i class='fas fa-check-circle'></i> Quantity & Tax Breakdown" data-si="<i class='fas fa-check-circle'></i> ප්‍රමාණය සහ බදු වර්ගීකරණය"><i class="fas fa-check-circle"></i> Quantity & Tax Breakdown</li>
                                <li class="lk-trans" data-en="<i class='fas fa-check-circle'></i> Simplified SVAT Form 4 Logs" data-si="<i class='fas fa-check-circle'></i> SVAT Form 4 වවුචර"><i class="fas fa-check-circle"></i> Simplified SVAT Form 4 Logs</li>
                                <li class="lk-trans" data-en="<i class='fas fa-check-circle'></i> Complete Invoice History" data-si="<i class='fas fa-check-circle'></i> සම්පූර්ණ ඉන්වොයිස් ඉතිහාසය"><i class="fas fa-check-circle"></i> Complete Invoice History</li>
                                <li class="lk-trans" data-en="<i class='fas fa-check-circle'></i> Audit-Ready Financial Logs" data-si="<i class='fas fa-check-circle'></i> විගණනයට සූදානම් වාර්තා"><i class="fas fa-check-circle"></i> Audit-Ready Financial Logs</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="p-4 bg-white rounded-4 border shadow-sm">
                        <h5 class="fw-bold text-dark mb-3"><i class="fas fa-shield-alt text-teal me-2" style="color: #0d9488;"></i> <span class="lk-trans" data-en="Standard Tax Invoice Data Structure" data-si="සම්මත බදු ඉන්වොයිස් දත්ත ව්‍යුහය">Standard Tax Invoice Data Structure</span></h5>
                        <div class="table-responsive">
                            <table class="table table-sm table-bordered align-middle mb-0" style="font-size: 13px;">
                                <thead class="table-light">
                                    <tr>
                                        <th class="lk-trans" data-en="Field Requirement" data-si="අවශ්‍ය දත්ත ක්ෂේත්‍රය">Field Requirement</th>
                                        <th class="lk-trans" data-en="Digify ERP Implementation" data-si="Digify ERP ක්‍රියාත්මක කිරීම">Digify ERP Implementation</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><strong class="lk-trans" data-en="Supplier Identity & TIN" data-si="සැපයුම්කරුගේ අනන්‍යතාවය සහ TIN">Supplier Identity & TIN</strong></td>
                                        <td class="lk-trans" data-en="Stored in Business Profile, printed on header of all Tax Invoices" data-si="ව්‍යාපාරික පැතිකඩෙහි ගබඩා කර සියලු බදු ඉන්වොයිසි ශීර්ෂයේ මුද්‍රණය කෙරේ">Stored in Business Profile, printed on header of all Tax Invoices</td>
                                    </tr>
                                    <tr>
                                        <td><strong class="lk-trans" data-en="Customer TIN (B2B)" data-si="ගැණුම්කරුගේ TIN අංකය (B2B)">Customer TIN (B2B)</strong></td>
                                        <td class="lk-trans" data-en="Captured in Customer Master & automatically populated on checkout" data-si="පාරිභෝගික ගිණුමෙන් ස්වයංක්‍රීයව බිල්පතට එක් කෙරේ">Captured in Customer Master & automatically populated on checkout</td>
                                    </tr>
                                    <tr>
                                        <td><strong class="lk-trans" data-en="Invoice Serial Number" data-si="ඉන්වොයිස් අනුක්‍රමික අංකය">Invoice Serial Number</strong></td>
                                        <td class="lk-trans" data-en="Sequential, non-duplicating invoice IDs with fiscal year prefixes" data-si="මූල්‍ය වර්ෂ උපසර්ග සමඟ නොකැඩෙන අනුක්‍රමික අංක">Sequential, non-duplicating invoice IDs with fiscal year prefixes</td>
                                    </tr>
                                    <tr>
                                        <td><strong class="lk-trans" data-en="Tax Rate & Calculation" data-si="බදු අනුපාතය සහ ගණනය කිරීම">Tax Rate & Calculation</strong></td>
                                        <td class="lk-trans" data-en="Automatic standard VAT rate application, exemptions & SVAT vouchers" data-si="ස්වයංක්‍රීය VAT ගණනය කිරීම්, නිදහස් කිරීම් සහ SVAT වවුචර">Automatic standard VAT rate application, exemptions & SVAT vouchers</td>
                                    </tr>
                                    <tr>
                                        <td><strong class="lk-trans" data-en="Multi-Currency Settlement" data-si="බහු-මුදල් පියවීම්">Multi-Currency Settlement</strong></td>
                                        <td class="lk-trans" data-en="LKR base currency with real-time USD/EUR conversion rates for exporters" data-si="අපනයනකරුවන් සඳහා LKR, USD, EUR සජීවී විනිමය අනුපාත">LKR base currency with real-time USD/EUR conversion rates for exporters</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 4. RETAIL ERP & 5. SUPERMARKET ERP SECTION -->
    <section class="lk-section" id="retail-supermarket-sri-lanka">
        <div class="container">
            <div class="text-center mb-5">
                <span class="section-badge-lk lk-trans" data-en="Core Verticals: Retail & Supermarket" data-si="ප්‍රධාන ක්ෂේත්‍ර: සිල්ලර සහ සුපිරි වෙළඳසැල්">Core Verticals: Retail & Supermarket</span>
                <h2 class="section-title-lk lk-trans" 
                    data-en="High-Speed Retail & Supermarket ERP Software in Sri Lanka" 
                    data-si="ශ්‍රී ලංකාවේ සිල්ලර සහ සුපිරි වෙළඳසැල් සඳහා ERP">
                    High-Speed Retail & Supermarket ERP Software in Sri Lanka
                </h2>
                <p class="section-sub-lk lk-trans" 
                    data-en="Designed for high-throughput retail stores, grocery chains, departmental stores, and hypermarkets across Colombo, Pettah, Kandy, Galle, and Negombo."
                    data-si="කොළඹ, පිටකොටුව, මහනුවර, ගාල්ල ඇතුළු ප්‍රධාන නගරවල සිල්ලර සහ සුපිරි වෙළඳසැල් සඳහා විශේෂයෙන් නිර්මාණය කර ඇත.">
                    Designed for high-throughput retail stores, grocery chains, departmental stores, and hypermarkets across Colombo, Pettah, Kandy, Galle, and Negombo.
                </p>
            </div>

            <!-- PROMINENT DEDICATED SUPERMARKET BANNER -->
            <div class="row mb-5">
                <div class="col-12">
                    <div class="vertical-box-lk border-teal" style="background: linear-gradient(135deg, #f0fdfa 0%, #ffffff 100%); border: 2px solid #0d9488;">
                        <span class="vertical-tag-lk lk-trans" data-en="⭐ Highly Prominent in Sri Lanka" data-si="⭐ ශ්‍රී ලංකාවේ ප්‍රමුඛතම">⭐ Highly Prominent in Sri Lanka</span>
                        <div class="row align-items-center g-4">
                            <div class="col-lg-8">
                                <span class="badge bg-teal text-white px-3 py-1 rounded-pill mb-2 lk-trans" style="background-color: #0d9488;" data-en="Vertical Suite" data-si="ක්ෂේත්‍ර මෘදුකාංග">Vertical Suite</span>
                                <h3 class="fw-bold text-dark mb-2 lk-trans" data-en="Supermarket ERP Software for Sri Lankan Businesses" data-si="ශ්‍රී ලංකාවේ සුපිරි වෙළඳසැල් සඳහා Supermarket ERP මෘදුකාංගය">Supermarket ERP Software for Sri Lankan Businesses</h3>
                                <p class="text-muted mb-3 lk-trans" data-en="Manage supermarket POS, inventory, purchasing, suppliers, products, customers and multiple branches through one integrated ERP platform. Complete coverage across 14 product categories." data-si="සුපිරි වෙළඳසැල් POS, තොග, මිලදී ගැනීම්, සැපයුම්කරුවන් සහ බහු ශාඛා කළමනාකරණය එකම පද්ධතියකින් සිදුකරන්න. නිෂ්පාදන කාණ්ඩ 14 ක් සඳහා පූර්ණ ආවරණය.">Manage supermarket POS, inventory, purchasing, suppliers, products, customers and multiple branches through one integrated ERP platform. Complete coverage across 14 product categories.</p>
                                
                                <div class="d-flex flex-wrap gap-2 mb-3">
                                    <span class="badge bg-light text-dark border lk-trans" data-en="<i class='fas fa-shopping-basket text-success me-1'></i> Groceries & FMCG" data-si="<i class='fas fa-shopping-basket text-success me-1'></i> සිල්ලර හා FMCG"><i class="fas fa-shopping-basket text-success me-1"></i> Groceries & FMCG</span>
                                    <span class="badge bg-light text-dark border lk-trans" data-en="<i class='fas fa-apple-alt text-danger me-1'></i> Fresh Produce" data-si="<i class='fas fa-apple-alt text-danger me-1'></i> එළවළු හා පලතුරු"><i class="fas fa-apple-alt text-danger me-1"></i> Fresh Produce</span>
                                    <span class="badge bg-light text-dark border lk-trans" data-en="<i class='fas fa-bread-slice text-warning me-1'></i> Bakery & Dairy" data-si="<i class='fas fa-bread-slice text-warning me-1'></i> බේකරි සහ කිරි නිෂ්පාදන"><i class="fas fa-bread-slice text-warning me-1"></i> Bakery & Dairy</span>
                                    <span class="badge bg-light text-dark border lk-trans" data-en="<i class='fas fa-fish text-primary me-1'></i> Meat & Seafood" data-si="<i class='fas fa-fish text-primary me-1'></i> මස් සහ මාළු"><i class="fas fa-fish text-primary me-1"></i> Meat & Seafood</span>
                                    <span class="badge bg-light text-dark border lk-trans" data-en="<i class='fas fa-pump-soap text-info me-1'></i> Personal Care" data-si="<i class='fas fa-pump-soap text-info me-1'></i> පුද්ගලික සත්කාර"><i class="fas fa-pump-soap text-info me-1"></i> Personal Care</span>
                                    <span class="badge bg-light text-dark border lk-trans" data-en="<i class='fas fa-pills text-success me-1'></i> Pharmacy Items" data-si="<i class='fas fa-pills text-success me-1'></i> ඖෂධ භාණ්ඩ"><i class="fas fa-pills text-success me-1"></i> Pharmacy Items</span>
                                </div>

                                <a href="supermarket-erp-software-sri-lanka.php" class="btn btn-lk-primary">
                                    <i class="fas fa-store me-2"></i>
                                    <span class="lk-trans" data-en="Explore Full Supermarket ERP Page" data-si="සම්පූර්ණ සුපර්මාර්කට් ERP පිටුව බලන්න">Explore Full Supermarket ERP Page</span>
                                    <i class="fas fa-arrow-right ms-2"></i>
                                </a>
                            </div>

                            <div class="col-lg-4 text-center">
                                <div class="p-4 bg-white rounded-4 border shadow-sm">
                                    <i class="fas fa-cash-register fa-3x text-teal mb-3" style="color: #0d9488;"></i>
                                    <h5 class="fw-bold lk-trans" data-en="Supermarket POS & Multi-Store" data-si="සුපර්මාර්කට් POS සහ බහු වෙළඳසැල්">Supermarket POS & Multi-Store</h5>
                                    <p class="small text-muted mb-0 lk-trans" data-en="Barcode scanning, digital weighing scale integration, cashier shift reconciliation, and automated stock reordering." data-si="බාර්කෝඩ් ස්කෑන්, ඩිජිටල් තරාදි සම්බන්ධතාවය, කැෂියර් මුදල් සැසඳීම සහ ස්වයංක්‍රීය නැවත ඇණවුම් කිරීම්.">Barcode scanning, digital weighing scale integration, cashier shift reconciliation, and automated stock reordering.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Retail & Supermarket Sub-Modules Grid (Sections 6, 7, 8, 9) -->
            <div class="row g-4">
                <div class="col-md-6 col-lg-3">
                    <div class="lk-card">
                        <div class="lk-card-icon"><i class="fas fa-barcode"></i></div>
                        <h4 class="lk-trans" data-en="6. Supermarket POS" data-si="6. සුපර්මාර්කට් POS">6. Supermarket POS</h4>
                        <p class="lk-trans" data-en="Process transactions efficiently while keeping sales and inventory connected with the central ERP system." data-si="විකුණුම් සහ තොග දත්ත මධ්‍යම පද්ධතියට සම්බන්ධ කරමින් වේගවත් බිල්පත් නිකුත් කරන්න.">Process transactions efficiently while keeping sales and inventory connected with the central ERP system.</p>
                        <ul class="lk-checklist">
                            <li class="lk-trans" data-en="<i class='fas fa-check-circle'></i> High-speed barcode scanning" data-si="<i class='fas fa-check-circle'></i> වේගවත් බාර්කෝඩ් ස්කෑන්"><i class="fas fa-check-circle"></i> High-speed barcode scanning</li>
                            <li class="lk-trans" data-en="<i class='fas fa-check-circle'></i> Cashier shift management" data-si="<i class='fas fa-check-circle'></i> කැෂියර් මුර කළමනාකරණය"><i class="fas fa-check-circle"></i> Cashier shift management</li>
                            <li class="lk-trans" data-en="<i class='fas fa-check-circle'></i> Discounts, returns & refunds" data-si="<i class='fas fa-check-circle'></i> වට්ටම් සහ ආපසු ලබාගැනීම්"><i class="fas fa-check-circle"></i> Discounts, returns & refunds</li>
                            <li class="lk-trans" data-en="<i class='fas fa-check-circle'></i> Daily counter sales reports" data-si="<i class='fas fa-check-circle'></i> දෛනික විකුණුම් වාර්තා"><i class="fas fa-check-circle"></i> Daily counter sales reports</li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3">
                    <div class="lk-card">
                        <div class="lk-card-icon"><i class="fas fa-boxes"></i></div>
                        <h4 class="lk-trans" data-en="7. Inventory Control" data-si="7. තොග පාලනය">7. Inventory Control</h4>
                        <p class="lk-trans" data-en="Track products across stores, warehouses and distribution hubs through one centralized environment." data-si="සියලුම වෙළඳසැල් සහ ගබඩා හරහා භාණ්ඩ තොග සජීවීව නිරීක්ෂණය කරන්න.">Track products across stores, warehouses and distribution hubs through one centralized environment.</p>
                        <ul class="lk-checklist">
                            <li class="lk-trans" data-en="<i class='fas fa-check-circle'></i> Stock In / Out / Transfers" data-si="<i class='fas fa-check-circle'></i> තොග ඇතුළුවීම් සහ මාරු කිරීම්"><i class="fas fa-check-circle"></i> Stock In / Out / Transfers</li>
                            <li class="lk-trans" data-en="<i class='fas fa-check-circle'></i> Low stock & out-of-stock alerts" data-si="<i class='fas fa-check-circle'></i> අවම තොග අනතුරු ඇඟවීම්"><i class="fas fa-check-circle"></i> Low stock & out-of-stock alerts</li>
                            <li class="lk-trans" data-en="<i class='fas fa-check-circle'></i> Fast vs slow moving analysis" data-si="<i class='fas fa-check-circle'></i> වේගයෙන් අලෙවි වන භාණ්ඩ"><i class="fas fa-check-circle"></i> Fast vs slow moving analysis</li>
                            <li class="lk-trans" data-en="<i class='fas fa-check-circle'></i> Damaged & expired stock logs" data-si="<i class='fas fa-check-circle'></i> හානි වූ භාණ්ඩ වාර්තා"><i class="fas fa-check-circle"></i> Damaged & expired stock logs</li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3">
                    <div class="lk-card">
                        <div class="lk-card-icon"><i class="fas fa-truck-loading"></i></div>
                        <h4 class="lk-trans" data-en="8. Smart Purchasing" data-si="8. ස්මාර්ට් මිලදී ගැනීම්">8. Smart Purchasing</h4>
                        <p class="lk-trans" data-en="Manage suppliers, purchase orders, pricing tiers, purchase histories and automated reordering." data-si="සැපයුම්කරුවන්, ඇණවුම් සහ ස්වයංක්‍රීය නැවත ඇණවුම් කිරීම් කළමනාකරණය කරන්න.">Manage suppliers, purchase orders, pricing tiers, purchase histories and automated reordering.</p>
                        <ul class="lk-checklist">
                            <li class="lk-trans" data-en="<i class='fas fa-check-circle'></i> Supplier profiles & rate lists" data-si="<i class='fas fa-check-circle'></i> සැපයුම්කරු මිල ගණන්"><i class="fas fa-check-circle"></i> Supplier profiles & rate lists</li>
                            <li class="lk-trans" data-en="<i class='fas fa-check-circle'></i> Automated purchase orders (PO)" data-si="<i class='fas fa-check-circle'></i> ස්වයංක්‍රීය මිලදී ගැනීමේ ඇණවුම්"><i class="fas fa-check-circle"></i> Automated purchase orders (PO)</li>
                            <li class="lk-trans" data-en="<i class='fas fa-check-circle'></i> Goods Received Notes (GRN)" data-si="<i class='fas fa-check-circle'></i> භාණ්ඩ ලැබීමේ සටහන් (GRN)"><i class="fas fa-check-circle"></i> Goods Received Notes (GRN)</li>
                            <li class="lk-trans" data-en="<i class='fas fa-check-circle'></i> Supplier performance metrics" data-si="<i class='fas fa-check-circle'></i> සැපයුම්කරු කාර්යක්ෂමතාව"><i class="fas fa-check-circle"></i> Supplier performance metrics</li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3">
                    <div class="lk-card">
                        <div class="lk-card-icon"><i class="fas fa-store-alt"></i></div>
                        <h4 class="lk-trans" data-en="9. Multi-Branch Chains" data-si="9. බහු ශාඛා පාලනය">9. Multi-Branch Chains</h4>
                        <p class="lk-trans" data-en="Manage multiple supermarkets, branches and warehouses from one centralized ERP environment." data-si="ශාඛා කිහිපයක් සහ ප්‍රධාන ගබඩාව එකම මධ්‍යගත පද්ධතියකින් පාලනය කරන්න.">Manage multiple supermarkets, branches and warehouses from one centralized ERP environment.</p>
                        <ul class="lk-checklist">
                            <li class="lk-trans" data-en="<i class='fas fa-check-circle'></i> Branch-wise inventory & sales" data-si="<i class='fas fa-check-circle'></i> ශාඛා මට්ටමේ තොග සහ විකුණුම්"><i class="fas fa-check-circle"></i> Branch-wise inventory & sales</li>
                            <li class="lk-trans" data-en="<i class='fas fa-check-circle'></i> Central warehouse dispatching" data-si="<i class='fas fa-check-circle'></i> මධ්‍යම ගබඩා බෙදාහැරීම"><i class="fas fa-check-circle"></i> Central warehouse dispatching</li>
                            <li class="lk-trans" data-en="<i class='fas fa-check-circle'></i> Inter-branch stock transfers" data-si="<i class='fas fa-check-circle'></i> ශාඛා අතර තොග මාරු කිරීම්"><i class="fas fa-check-circle"></i> Inter-branch stock transfers</li>
                            <li class="lk-trans" data-en="<i class='fas fa-check-circle'></i> Consolidated business reports" data-si="<i class='fas fa-check-circle'></i> ඒකාබද්ධ ව්‍යාපාරික වාර්තා"><i class="fas fa-check-circle"></i> Consolidated business reports</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 10. WHOLESALE & 11. FMCG SECTION -->
    <section class="lk-section bg-light-lk" id="wholesale-fmcg-sri-lanka">
        <div class="container">
            <div class="row align-items-center g-4">
                <div class="col-lg-6">
                    <span class="section-badge-lk lk-trans" data-en="Sections 10 & 11: Trading & Logistics" data-si="10 සහ 11 කොටස්: තොග සහ FMCG">Sections 10 & 11: Trading & Logistics</span>
                    <h2 class="section-title-lk lk-trans" 
                        data-en="Wholesale, Distribution & FMCG ERP in Sri Lanka" 
                        data-si="ශ්‍රී ලංකාවේ තොග වෙළඳාම, බෙදාහැරීම සහ FMCG ERP">
                        Wholesale, Distribution & FMCG ERP in Sri Lanka
                    </h2>
                    <p class="text-muted lk-trans" 
                        data-en="Manage bulk orders, wholesale price tiers, trade credit limits, customer-specific pricing, and warehouse logistics across Pettah, Colombo Free Trade Zones, and regional distributor hubs."
                        data-si="තොග පාරිභෝගික ණය සීමා, තොග මිල ගණන් සහ ප්‍රධාන බෙදාහැරීම් ගබඩා කළමනාකරණය කරන්න.">
                        Manage bulk orders, wholesale price tiers, trade credit limits, customer-specific pricing, and warehouse logistics across Pettah, Colombo Free Trade Zones, and regional distributor hubs.
                    </p>

                    <div class="row g-3 mt-2">
                        <div class="col-sm-6">
                            <div class="p-3 bg-white rounded-3 border">
                                <h6 class="fw-bold text-dark mb-1 lk-trans" data-en="<i class='fas fa-warehouse text-teal me-2'></i> Wholesale Suite" data-si="<i class='fas fa-warehouse text-teal me-2'></i> තොග වෙළඳ මෘදුකාංග"><i class="fas fa-warehouse text-teal me-2" style="color: #0d9488;"></i> Wholesale Suite</h6>
                                <p class="small text-muted mb-0 lk-trans" data-en="Customer-specific price lists, bulk sales orders, delivery dispatch manifests, and aging credit balance tracking." data-si="පාරිභෝගික මිල ලැයිස්තු, තොග ඇණවුම් සහ ණය පාලනය.">Customer-specific price lists, bulk sales orders, delivery dispatch manifests, and aging credit balance tracking.</p>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="p-3 bg-white rounded-3 border">
                                <h6 class="fw-bold text-dark mb-1 lk-trans" data-en="<i class='fas fa-boxes text-warning me-2'></i> FMCG Distribution" data-si="<i class='fas fa-boxes text-warning me-2'></i> FMCG බෙදාහැරීම"><i class="fas fa-boxes text-warning me-2"></i> FMCG Distribution</h6>
                                <p class="small text-muted mb-0 lk-trans" data-en="Van sales sync, route delivery planning, food & beverage distributor inventory, and batch expiry tracking." data-si="වෑන් රථ විකුණුම්, බෙදාහැරීම් මාර්ග සැලසුම් සහ කල් ඉකුත්වීමේ පාලනය.">Van sales sync, route delivery planning, food & beverage distributor inventory, and batch expiry tracking.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="p-4 bg-white rounded-4 border shadow-sm">
                        <h5 class="fw-bold text-dark mb-3 lk-trans" data-en="<i class='fas fa-users text-teal me-2'></i> Target Wholesale & Distribution Businesses" data-si="<i class='fas fa-users text-teal me-2'></i> ඉලක්කගත තොග සහ බෙදාහැරීමේ ව්‍යාපාර"><i class="fas fa-users text-teal me-2" style="color: #0d9488;"></i> Target Wholesale & Distribution Businesses</h5>
                        <div class="d-flex flex-wrap gap-2">
                            <span class="badge bg-light text-dark border p-2 lk-trans" data-en="<i class='fas fa-truck text-success me-1'></i> Food & Beverage Distributors" data-si="<i class='fas fa-truck text-success me-1'></i> ආහාර පාන බෙදාහරින්නන්"><i class="fas fa-truck text-success me-1"></i> Food & Beverage Distributors</span>
                            <span class="badge bg-light text-dark border p-2 lk-trans" data-en="<i class='fas fa-box text-primary me-1'></i> Consumer Goods Wholesalers" data-si="<i class='fas fa-box text-primary me-1'></i> පාරිභෝගික භාණ්ඩ තොග වෙළඳුන්"><i class="fas fa-box text-primary me-1"></i> Consumer Goods Wholesalers</span>
                            <span class="badge bg-light text-dark border p-2 lk-trans" data-en="<i class='fas fa-soap text-info me-1'></i> Household Product Distributors" data-si="<i class='fas fa-soap text-info me-1'></i> ගෘහස්ථ භාණ්ඩ බෙදාහරින්නන්"><i class="fas fa-soap text-info me-1"></i> Household Product Distributors</span>
                            <span class="badge bg-light text-dark border p-2 lk-trans" data-en="<i class='fas fa-spray-can text-danger me-1'></i> Personal Care & Cosmetics" data-si="<i class='fas fa-spray-can text-danger me-1'></i> රූපලාවණ්‍ය සහ විලවුන්"><i class="fas fa-spray-can text-danger me-1"></i> Personal Care & Cosmetics</span>
                            <span class="badge bg-light text-dark border p-2 lk-trans" data-en="<i class='fas fa-store text-warning me-1'></i> FMCG Supermarket Suppliers" data-si="<i class='fas fa-store text-warning me-1'></i> සුපර්මාර්කට් FMCG සැපයුම්කරුවන්"><i class="fas fa-store text-warning me-1"></i> FMCG Supermarket Suppliers</span>
                            <span class="badge bg-light text-dark border p-2 lk-trans" data-en="<i class='fas fa-wine-bottle text-secondary me-1'></i> Beverage & Bottling Distributors" data-si="<i class='fas fa-wine-bottle text-secondary me-1'></i> බීම සහ බෝතල් කිරීමේ බෙදාහරින්නන්"><i class="fas fa-wine-bottle text-secondary me-1"></i> Beverage & Bottling Distributors</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 12. APPAREL & GARMENTS (STRATEGIC VERTICAL) -->
    <section class="lk-section" id="garments-apparel-sri-lanka">
        <div class="container">
            <div class="vertical-box-lk" style="background: linear-gradient(135deg, #ffffff 0%, #f0fdfa 100%); border: 2px solid #0d9488;">
                <span class="vertical-tag-lk lk-trans" data-en="🧵 National Economic Pillar" data-si="🧵 ප්‍රධාන ආර්ථික ක්ෂේත්‍රය">🧵 National Economic Pillar</span>
                
                <div class="row align-items-center g-4">
                    <div class="col-lg-8">
                        <span class="badge bg-teal text-white px-3 py-1 rounded-pill mb-2 lk-trans" style="background-color: #0d9488;" data-en="Section 12 Vertical Suite" data-si="12 වන කොටස: ඇඟලුම් මෘදුකාංග">Section 12 Vertical Suite</span>
                        <h2 class="section-title-lk mb-2 lk-trans" data-en="Garment & Apparel ERP Software for Sri Lanka" data-si="ශ්‍රී ලංකාවේ ඇඟලුම් සහ රෙදිපිළි සඳහා Garment ERP">Garment & Apparel ERP Software for Sri Lanka</h2>
                        <p class="text-muted mb-3 lk-trans" 
                            data-en="Sri Lanka's Ministry of Foreign Affairs identifies textiles & garments as one of the country's major economic engines. Manage garment inventory, fabric roll tracking, accessories/trims, BOM, cutting/stitching production workflows, wholesale orders, and export packing lists."
                            data-si="ශ්‍රී ලංකාවේ ප්‍රධානතම අපනයන ආදායම් මාර්ගය වන ඇඟලුම් සහ රෙදිපිළි ක්ෂේත්‍රය සඳහා රෙදි රෝල්, උපාංග, කැපුම් සහ මැහුම් ක්‍රියාවලි, සහ අපනයන ලේඛන කළමනාකරණය.">
                            Sri Lanka's Ministry of Foreign Affairs identifies textiles & garments as one of the country's major economic engines. Manage garment inventory, fabric roll tracking, accessories/trims, BOM, cutting/stitching production workflows, wholesale orders, and export packing lists.
                        </p>

                        <div class="row g-2 mb-3">
                            <div class="col-sm-6">
                                <ul class="lk-checklist">
                                    <li class="lk-trans" data-en="<i class='fas fa-check-circle'></i> Style, Size & Colour Matrix (3D SKU)" data-si="<i class='fas fa-check-circle'></i> විලාසිතා, ප්‍රමාණ සහ වර්ණ Matrix"><i class="fas fa-check-circle"></i> Style, Size & Colour Matrix (3D SKU)</li>
                                    <li class="lk-trans" data-en="<i class='fas fa-check-circle'></i> Fabric roll inventory by GSM & shade" data-si="<i class='fas fa-check-circle'></i> රෙදි රෝල් තොග පාලනය"><i class="fas fa-check-circle"></i> Fabric roll inventory by GSM & shade</li>
                                    <li class="lk-trans" data-en="<i class='fas fa-check-circle'></i> Accessories & trims consumption" data-si="<i class='fas fa-check-circle'></i> බොත්තම්, සිපර් සහ උපාංග"><i class="fas fa-check-circle"></i> Accessories & trims consumption</li>
                                </ul>
                            </div>
                            <div class="col-sm-6">
                                <ul class="lk-checklist">
                                    <li class="lk-trans" data-en="<i class='fas fa-check-circle'></i> Cut-to-Pack production tracking" data-si="<i class='fas fa-check-circle'></i> කැපුමේ සිට ඇසුරුම් දක්වා"><i class="fas fa-check-circle"></i> Cut-to-Pack production tracking</li>
                                    <li class="lk-trans" data-en="<i class='fas fa-check-circle'></i> BOI export invoices & packing lists" data-si="<i class='fas fa-check-circle'></i> BOI අපනයන ඉන්වොයිසි"><i class="fas fa-check-circle"></i> BOI export invoices & packing lists</li>
                                    <li class="lk-trans" data-en="<i class='fas fa-check-circle'></i> Wholesale showroom billing & POS" data-si="<i class='fas fa-check-circle'></i> ප්‍රදර්ශනාගාර POS බිල්පත්"><i class="fas fa-check-circle"></i> Wholesale showroom billing & POS</li>
                                </ul>
                            </div>
                        </div>

                        <a href="garment-erp-software-sri-lanka.php" class="btn btn-lk-primary">
                            <i class="fas fa-tshirt me-2"></i>
                            <span class="lk-trans" data-en="Explore Full Garment ERP Page" data-si="සම්පූර්ණ Garment ERP පිටුව බලන්න">Explore Full Garment ERP Page</span>
                            <i class="fas fa-arrow-right ms-2"></i>
                        </a>
                    </div>

                    <div class="col-lg-4 text-center">
                        <div class="p-4 bg-white rounded-4 border shadow-sm">
                            <i class="fas fa-cut fa-3x text-teal mb-3" style="color: #0d9488;"></i>
                            <h5 class="fw-bold lk-trans" data-en="Apparel & Textile Production" data-si="ඇඟලුම් සහ රෙදිපිළි නිෂ්පාදනය">Apparel & Textile Production</h5>
                            <p class="small text-muted mb-0 lk-trans" data-en="From fabric inspection to job-card assignment, line balancing, quality inspection, and Colombo Port container shipment tracking." data-si="රෙදි පරීක්ෂාවේ සිට රැකියා කාඩ්පත්, තත්ත්ව පරීක්ෂණ සහ කොළඹ වරාය බහාලුම් ලුහුබැඳීම දක්වා.">From fabric inspection to job-card assignment, line balancing, quality inspection, and Colombo Port container shipment tracking.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 13. TEA BUSINESS & 14. AGRICULTURE SECTION -->
    <section class="lk-section bg-light-lk" id="tea-agriculture-sri-lanka">
        <div class="container">
            <div class="row align-items-center g-4">
                <div class="col-lg-6">
                    <div class="p-4 bg-white rounded-4 border h-100">
                        <span class="section-badge-lk lk-trans" data-en="Section 13: Localized Opportunity" data-si="13 වන කොටස: තේ කර්මාන්තය">Section 13: Localized Opportunity</span>
                        <h3 class="fw-bold text-dark mb-2 lk-trans" data-en="Tea & Tea Business ERP Software Sri Lanka" data-si="ශ්‍රී ලංකාවේ තේ ව්‍යාපාර සඳහා ERP">Tea & Tea Business ERP Software Sri Lanka</h3>
                        <p class="text-muted small mb-3 lk-trans" 
                            data-en="Manage purchasing, green leaf intake weights, fermentation/rolling batch logs, Colombo tea auction lot cataloguing, and export proforma invoicing across Nuwara Eliya, Kandy, Galle and Ratnapura."
                            data-si="අමු දළු බර මැනීම, තේ සැකසුම් කාණ්ඩ, කොළඹ තේ වෙන්දේසි අංක සහ අපනයන ලේඛන කළමනාකරණය.">
                            Manage purchasing, green leaf intake weights, fermentation/rolling batch logs, Colombo tea auction lot cataloguing, and export proforma invoicing across Nuwara Eliya, Kandy, Galle and Ratnapura.
                        </p>
                        <ul class="lk-checklist">
                            <li class="lk-trans" data-en="<i class='fas fa-check-circle'></i> Green leaf intake & smallholder ledgers" data-si="<i class='fas fa-check-circle'></i> අමු දළු බර සහ සැපයුම්කරු ලෙජර"><i class="fas fa-check-circle"></i> Green leaf intake & smallholder ledgers</li>
                            <li class="lk-trans" data-en="<i class='fas fa-check-circle'></i> Factory processing logs & tea grading (BOP, FBOP, OP)" data-si="<i class='fas fa-check-circle'></i> තේ වර්ගීකරණය සහ සැකසුම් වාර්තා"><i class="fas fa-check-circle"></i> Factory processing logs & tea grading (BOP, FBOP, OP)</li>
                            <li class="lk-trans" data-en="<i class='fas fa-check-circle'></i> Colombo Auction catalogue & export invoicing" data-si="<i class='fas fa-check-circle'></i> වෙන්දේසි සහ අපනයන ඉන්වොයිසි"><i class="fas fa-check-circle"></i> Colombo Auction catalogue & export invoicing</li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="p-4 bg-white rounded-4 border h-100">
                        <span class="section-badge-lk lk-trans" data-en="Section 14: 26% Employed Population" data-si="14 වන කොටස: කෘෂිකර්මාන්තය">Section 14: 26% Employed Population</span>
                        <h3 class="fw-bold text-dark mb-2 lk-trans" data-en="Agriculture & Agribusiness ERP Sri Lanka" data-si="කෘෂිකාර්මික හා කුළුබඩු ව්‍යාපාර සඳහා ERP">Agriculture & Agribusiness ERP Sri Lanka</h3>
                        <p class="text-muted small mb-3 lk-trans" 
                            data-en="According to Department of Census and Statistics (DCS), 26.0% of Sri Lanka's employed population works in agriculture. Digify manages Ceylon Cinnamon, spices, coconut products, produce grading, and wholesale farmer procurement."
                            data-si="ශ්‍රී ලංකාවේ රැකියා නියුක්තිකයන්ගෙන් 26% ක් කෘෂිකර්මාන්තයේ නියැලී සිටී. කුරුඳු, කුළුබඩු සහ පොල් නිෂ්පාදන සඳහා පූර්ණ කළමනාකරණය.">
                            According to Department of Census and Statistics (DCS), 26.0% of Sri Lanka's employed population works in agriculture. Digify manages Ceylon Cinnamon, spices, coconut products, produce grading, and wholesale farmer procurement.
                        </p>
                        <ul class="lk-checklist">
                            <li class="lk-trans" data-en="<i class='fas fa-check-circle'></i> Ceylon Cinnamon, Pepper & Spice Grading" data-si="<i class='fas fa-check-circle'></i> කුරුඳු සහ කුළුබඩු වර්ගීකරණය"><i class="fas fa-check-circle"></i> Ceylon Cinnamon, Pepper & Spice Grading</li>
                            <li class="lk-trans" data-en="<i class='fas fa-check-circle'></i> Coconut kernel, oil & coir production logs" data-si="<i class='fas fa-check-circle'></i> පොල් ආශ්‍රිත නිෂ්පාදන වාර්තා"><i class="fas fa-check-circle"></i> Coconut kernel, oil & coir production logs</li>
                            <li class="lk-trans" data-en="<i class='fas fa-check-circle'></i> Multi-currency export accounting (USD / EUR)" data-si="<i class='fas fa-check-circle'></i> බහු-මුදල් අපනයන ගිණුම්කරණය"><i class="fas fa-check-circle"></i> Multi-currency export accounting (USD / EUR)</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 15. FOOD PROCESSING, 16. TOURISM & 17. RESTAURANTS -->
    <section class="lk-section" id="tourism-hospitality-sri-lanka">
        <div class="container">
            <div class="text-center mb-5">
                <span class="section-badge-lk lk-trans" data-en="Sections 15, 16 & 17: Tourism, F&B and Food Processing" data-si="15, 16 සහ 17 කොටස්: සංචාරක, හෝටල් සහ ආහාර සැකසුම්">Sections 15, 16 & 17: Tourism, F&B and Food Processing</span>
                <h2 class="section-title-lk lk-trans" 
                    data-en="Tourism, Hospitality, Restaurant POS & Food Processing in Sri Lanka" 
                    data-si="සංචාරක, හෝටල්, අවන්හල් POS සහ ආහාර සැකසුම් මෘදුකාංග">
                    Tourism, Hospitality, Restaurant POS & Food Processing in Sri Lanka
                </h2>
                <p class="section-sub-lk lk-trans" 
                    data-en="Sri Lanka recorded 2,053,465 tourist arrivals in 2024 with tourism receipts of approx. Rs. 957.3 Billion (DCS data). Digify powers tourism retail, restaurant billing, multi-currency dining, and food processing plants."
                    data-si="2024 දී සංචාරකයින් 2,053,465 ක් ශ්‍රී ලංකාවට පැමිණි අතර රු. බිලියන 957.3 ක ආදායමක් උපයා ඇත. සංචාරක අලෙවිසැල් සහ අවන්හල් සඳහා Digify මනා විසඳුමකි.">
                    Sri Lanka recorded 2,053,465 tourist arrivals in 2024 with tourism receipts of approx. Rs. 957.3 Billion (DCS data). Digify powers tourism retail, restaurant billing, multi-currency dining, and food processing plants.
                </p>
            </div>

            <div class="row g-4">
                <div class="col-md-4">
                    <div class="lk-card">
                        <div class="lk-card-icon"><i class="fas fa-hotel"></i></div>
                        <h4 class="lk-trans" data-en="16. Tourism & Hospitality POS" data-si="16. සංචාරක සහ හෝටල් POS">16. Tourism & Hospitality POS</h4>
                        <p class="lk-trans" data-en="Manage tourism retail, souvenir shops, beach resort dining POS, guest tour ticketing, and foreign currency exchange rate transactions." data-si="සංචාරක සිහිවටන අලෙවිසැල්, හෝටල් අවන්හල් POS සහ විදේශ මුදල් ගනුදෙනු කළමනාකරණය.">Manage tourism retail, souvenir shops, beach resort dining POS, guest tour ticketing, and foreign currency exchange rate transactions.</p>
                        <ul class="lk-checklist">
                            <li class="lk-trans" data-en="<i class='fas fa-check-circle'></i> Multi-currency POS billing (USD, LKR, EUR)" data-si="<i class='fas fa-check-circle'></i> බහු-මුදල් බිල්පත් (USD, LKR, EUR)"><i class="fas fa-check-circle"></i> Multi-currency POS billing (USD, LKR, EUR)</li>
                            <li class="lk-trans" data-en="<i class='fas fa-check-circle'></i> Resort boutique & gift shop inventory" data-si="<i class='fas fa-check-circle'></i> සිහිවටන අලෙවිසැල් තොග පාලනය"><i class="fas fa-check-circle"></i> Resort boutique & gift shop inventory</li>
                            <li class="lk-trans" data-en="<i class='fas fa-check-circle'></i> Daily revenue & expense auditing" data-si="<i class='fas fa-check-circle'></i> දෛනික ආදායම් විගණන වාර්තා"><i class="fas fa-check-circle"></i> Daily revenue & expense auditing</li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="lk-card">
                        <div class="lk-card-icon"><i class="fas fa-utensils"></i></div>
                        <h4 class="lk-trans" data-en="17. Restaurant & Café POS" data-si="17. අවන්හල් සහ කැෆේ POS">17. Restaurant & Café POS</h4>
                        <p class="lk-trans" data-en="Touchscreen POS, table order management, Kitchen Order Tickets (KOT), recipe ingredient costing, and split-bill payments." data-si="ස්පර්ශ තිර POS, මේස ඇණවුම්, KOT මුළුතැන්ගෙයි මුද්‍රණය සහ වට්ටෝරු පිරිවැය ගණනය.">Touchscreen POS, table order management, Kitchen Order Tickets (KOT), recipe ingredient costing, and split-bill payments.</p>
                        <ul class="lk-checklist">
                            <li class="lk-trans" data-en="<i class='fas fa-check-circle'></i> Kitchen Display Systems (KDS) & KOT" data-si="<i class='fas fa-check-circle'></i> KOT මුළුතැන්ගෙයි ඇණවුම් පත්‍රිකා"><i class="fas fa-check-circle"></i> Kitchen Display Systems (KDS) & KOT</li>
                            <li class="lk-trans" data-en="<i class='fas fa-check-circle'></i> Recipe ingredient cost auto-deduction" data-si="<i class='fas fa-check-circle'></i> අමුද්‍රව්‍ය ස්වයංක්‍රීයව අඩුකිරීම"><i class="fas fa-check-circle"></i> Recipe ingredient cost auto-deduction</li>
                            <li class="lk-trans" data-en="<i class='fas fa-check-circle'></i> Service charge & VAT calculations" data-si="<i class='fas fa-check-circle'></i> සේවා ගාස්තු සහ VAT ගණනය"><i class="fas fa-check-circle"></i> Service charge & VAT calculations</li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="lk-card">
                        <div class="lk-card-icon"><i class="fas fa-mortar-pestle"></i></div>
                        <h4 class="lk-trans" data-en="15. Food Processing" data-si="15. ආහාර සැකසුම් කර්මාන්ත">15. Food Processing</h4>
                        <p class="lk-trans" data-en="Manage raw ingredients, recipe batch scaling, packaging materials, expiry dates, and distribution proformas." data-si="අමුද්‍රව්‍ය, ඇසුරුම් ද්‍රව්‍ය, කල් ඉකුත්වීමේ දින සහ බෙදාහැරීම් කළමනාකරණය.">Manage raw ingredients, recipe batch scaling, packaging materials, expiry dates, and distribution proformas.</p>
                        <ul class="lk-checklist">
                            <li class="lk-trans" data-en="<i class='fas fa-check-circle'></i> Batch yield calculation & loss tracking" data-si="<i class='fas fa-check-circle'></i> නිෂ්පාදන අස්වැන්න සහ නාස්තිය"><i class="fas fa-check-circle"></i> Batch yield calculation & loss tracking</li>
                            <li class="lk-trans" data-en="<i class='fas fa-check-circle'></i> Expiry date alerts & FEFO distribution" data-si="<i class='fas fa-check-circle'></i> කල් ඉකුත්වීමේ අනතුරු ඇඟවීම්"><i class="fas fa-check-circle"></i> Expiry date alerts & FEFO distribution</li>
                            <li class="lk-trans" data-en="<i class='fas fa-check-circle'></i> Finished goods warehouse transfers" data-si="<i class='fas fa-check-circle'></i> නිමි භාණ්ඩ ගබඩා මාරු කිරීම්"><i class="fas fa-check-circle"></i> Finished goods warehouse transfers</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 18. PHARMACY, 19. MANUFACTURING, 20. CONSTRUCTION, 21. LOGISTICS & 22. E-COMMERCE -->
    <section class="lk-section bg-light-lk" id="more-sectors-sri-lanka">
        <div class="container">
            <div class="text-center mb-5">
                <span class="section-badge-lk lk-trans" data-en="Specialized Sector Modules" data-si="විශේෂිත ක්ෂේත්‍ර මොඩියුල">Specialized Sector Modules</span>
                <h2 class="section-title-lk lk-trans" 
                    data-en="Enterprise ERP Capabilities for Every Sri Lankan Industry" 
                    data-si="සෑම ශ්‍රී ලාංකික කර්මාන්තයක් සඳහාම ERP පහසුකම්">
                    Enterprise ERP Capabilities for Every Sri Lankan Industry
                </h2>
                <p class="section-sub-lk lk-trans" 
                    data-en="Comprehensive operational modules purpose-built for manufacturing, healthcare, building supplies, transport, and digital commerce."
                    data-si="නිෂ්පාදන, සෞඛ්‍ය, ඉදිකිරීම් සහ ඊ-වාණිජ්‍යය සඳහා විශේෂයෙන් සකස් කරන ලද මෙහෙයුම් මොඩියුල.">
                    Comprehensive operational modules purpose-built for manufacturing, healthcare, building supplies, transport, and digital commerce.
                </p>
            </div>

            <div class="row g-4">
                <div class="col-md-6 col-lg-4">
                    <div class="lk-card">
                        <div class="lk-card-icon"><i class="fas fa-industry"></i></div>
                        <h4 class="lk-trans" data-en="19. Manufacturing ERP" data-si="19. නිෂ්පාදන ERP">19. Manufacturing ERP</h4>
                        <p class="lk-trans" data-en="Bill of Materials (BOM), production work orders, raw material requisitions, finished goods yield tracking, and machine job cards." data-si="BOM වට්ටෝරු, නිෂ්පාදන කාර්ය නියෝග සහ අමුද්‍රව්‍ය භාවිත වාර්තා.">Bill of Materials (BOM), production work orders, raw material requisitions, finished goods yield tracking, and machine job cards.</p>
                        <ul class="lk-checklist">
                            <li class="lk-trans" data-en="<i class='fas fa-check-circle'></i> Multilevel BOM & work orders" data-si="<i class='fas fa-check-circle'></i> බහු-මට්ටමේ BOM සහ කාර්ය ඇණවුම්"><i class="fas fa-check-circle"></i> Multilevel BOM & work orders</li>
                            <li class="lk-trans" data-en="<i class='fas fa-check-circle'></i> Scrap & waste tracking" data-si="<i class='fas fa-check-circle'></i> අපතේ යාම් හා නාස්තිය පාලනය"><i class="fas fa-check-circle"></i> Scrap & waste tracking</li>
                            <li class="lk-trans" data-en="<i class='fas fa-check-circle'></i> Landed production costing" data-si="<i class='fas fa-check-circle'></i> සමස්ත නිෂ්පාදන පිරිවැය ගණනය"><i class="fas fa-check-circle"></i> Landed production costing</li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="lk-card">
                        <div class="lk-card-icon"><i class="fas fa-pills"></i></div>
                        <h4 class="lk-trans" data-en="18. Pharmacy & Healthcare Retail" data-si="18. ඖෂධහල් සහ සෞඛ්‍ය සිල්ලර">18. Pharmacy & Healthcare Retail</h4>
                        <p class="lk-trans" data-en="Medicine catalogue, supplier POs, prescription counter billing, fast drug lookups, and customer accounts." data-si="ඖෂධ නාමාවලිය, කවුන්ටර බිල්පත් සහ සැපයුම්කරු මිලදී ගැනීම්.">Medicine catalogue, supplier POs, prescription counter billing, fast drug lookups, and customer accounts.</p>
                        <ul class="lk-checklist">
                            <li class="lk-trans" data-en="<i class='fas fa-check-circle'></i> High-speed pharmacy POS" data-si="<i class='fas fa-check-circle'></i> වේගවත් ඖෂධහල් POS"><i class="fas fa-check-circle"></i> High-speed pharmacy POS</li>
                            <li class="lk-trans" data-en="<i class='fas fa-check-circle'></i> Supplier drug purchasing" data-si="<i class='fas fa-check-circle'></i> ඖෂධ මිලදී ගැනීම් කළමනාකරණය"><i class="fas fa-check-circle"></i> Supplier drug purchasing</li>
                            <li class="lk-trans" data-en="<i class='fas fa-check-circle'></i> Sales & margin reports" data-si="<i class='fas fa-check-circle'></i> විකුණුම් හා ලාභ වාර්තා"><i class="fas fa-check-circle"></i> Sales & margin reports</li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="lk-card">
                        <div class="lk-card-icon"><i class="fas fa-hard-hat"></i></div>
                        <h4 class="lk-trans" data-en="20. Construction & Hardware" data-si="20. ඉදිකිරීම් සහ දෘඩාංග">20. Construction & Hardware</h4>
                        <p class="lk-trans" data-en="Multi-unit measurements (sacks, rods, cubes, meters), contractor credit ledgers, supplier purchasing, and delivery notes." data-si="බහු-ඒකක මිනුම්, කොන්ත්‍රාත්කරු ණය ගිණුම් සහ බෙදාහැරීම් සටහන්.">Multi-unit measurements (sacks, rods, cubes, meters), contractor credit ledgers, supplier purchasing, and delivery notes.</p>
                        <ul class="lk-checklist">
                            <li class="lk-trans" data-en="<i class='fas fa-check-circle'></i> Contractor credit accounts" data-si="<i class='fas fa-check-circle'></i> කොන්ත්‍රාත්කරු ණය ගිණුම්"><i class="fas fa-check-circle"></i> Contractor credit accounts</li>
                            <li class="lk-trans" data-en="<i class='fas fa-check-circle'></i> Multi-unit stock conversions" data-si="<i class='fas fa-check-circle'></i> බහු-ඒකක තොග පරිවර්තන"><i class="fas fa-check-circle"></i> Multi-unit stock conversions</li>
                            <li class="lk-trans" data-en="<i class='fas fa-check-circle'></i> Site delivery manifests" data-si="<i class='fas fa-check-circle'></i> භූමි බෙදාහැරීම් සටහන්"><i class="fas fa-check-circle"></i> Site delivery manifests</li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="lk-card">
                        <div class="lk-card-icon"><i class="fas fa-truck-moving"></i></div>
                        <h4 class="lk-trans" data-en="21. Logistics & Distribution" data-si="21. සැපයුම් සහ බෙදාහැරීම්">21. Logistics & Distribution</h4>
                        <p class="lk-trans" data-en="Manage customer sales orders, freight forwarding ledgers, customs clearing landed costs, and warehouse dispatch." data-si="පාරිභෝගික ඇණවුම්, ප්‍රවාහන ලෙජර සහ ගබඩා පිටත්කිරීම් කළමනාකරණය.">Manage customer sales orders, freight forwarding ledgers, customs clearing landed costs, and warehouse dispatch.</p>
                        <ul class="lk-checklist">
                            <li class="lk-trans" data-en="<i class='fas fa-check-circle'></i> Customer sales order tracking" data-si="<i class='fas fa-check-circle'></i> විකුණුම් ඇණවුම් ලුහුබැඳීම"><i class="fas fa-check-circle"></i> Customer sales order tracking</li>
                            <li class="lk-trans" data-en="<i class='fas fa-check-circle'></i> Landed cost auto-distribution" data-si="<i class='fas fa-check-circle'></i> වියදම් ස්වයංක්‍රීයව බෙදාහැරීම"><i class="fas fa-check-circle"></i> Landed cost auto-distribution</li>
                            <li class="lk-trans" data-en="<i class='fas fa-check-circle'></i> Warehouse location bin tagging" data-si="<i class='fas fa-check-circle'></i> ගබඩා රාක්ක සහ ස්ථාන ලකුණු කිරීම"><i class="fas fa-check-circle"></i> Warehouse location bin tagging</li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="lk-card">
                        <div class="lk-card-icon"><i class="fas fa-shopping-cart"></i></div>
                        <h4 class="lk-trans" data-en="22. E-Commerce & Omnichannel" data-si="22. ඊ-වාණිජ්‍යය සහ ඔන්ලයින් වෙළඳාම">22. E-Commerce & Omnichannel</h4>
                        <p class="lk-trans" data-en="Synchronize online orders, physical store inventory, customer database, and courier tracking numbers." data-si="ඔන්ලයින් ඇණවුම්, වෙළඳසැල් තොග සහ කුරියර් ලුහුබැඳීම් එකට සම්බන්ධ කරන්න.">Synchronize online orders, physical store inventory, customer database, and courier tracking numbers.</p>
                        <ul class="lk-checklist">
                            <li class="lk-trans" data-en="<i class='fas fa-check-circle'></i> Real-time catalog & price sync" data-si="<i class='fas fa-check-circle'></i> සජීවී නාමාවලි සහ මිල යාවත්කාලීන"><i class="fas fa-check-circle"></i> Real-time catalog & price sync</li>
                            <li class="lk-trans" data-en="<i class='fas fa-check-circle'></i> Courier delivery status sync" data-si="<i class='fas fa-check-circle'></i> කුරියර් බෙදාහැරීම් තත්ත්වය"><i class="fas fa-check-circle"></i> Courier delivery status sync</li>
                            <li class="lk-trans" data-en="<i class='fas fa-check-circle'></i> Centralized order fulfillment" data-si="<i class='fas fa-check-circle'></i> මධ්‍යගත ඇණවුම් ඉටුකිරීම"><i class="fas fa-check-circle"></i> Centralized order fulfillment</li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="lk-card">
                        <div class="lk-card-icon"><i class="fas fa-sitemap"></i></div>
                        <h4 class="lk-trans" data-en="23. Multi-Branch Operations" data-si="23. බහු-ශාඛා මෙහෙයුම්">23. Multi-Branch Operations</h4>
                        <p class="lk-trans" data-en="Centralize branch inventory, inter-branch transfers, regional price lists, and consolidated P&L statements." data-si="ශාඛා තොග, අන්තර්-ශාඛා මාරු කිරීම් සහ ඒකාබද්ධ ලාභ-අලාභ වාර්තා.">Centralize branch inventory, inter-branch transfers, regional price lists, and consolidated P&L statements.</p>
                        <ul class="lk-checklist">
                            <li class="lk-trans" data-en="<i class='fas fa-check-circle'></i> Live branch stock visibility" data-si="<i class='fas fa-check-circle'></i> සජීවී ශාඛා තොග දැක්ම"><i class="fas fa-check-circle"></i> Live branch stock visibility</li>
                            <li class="lk-trans" data-en="<i class='fas fa-check-circle'></i> Inter-branch transfer notes" data-si="<i class='fas fa-check-circle'></i> ශාඛා අතර මාරු කිරීමේ සටහන්"><i class="fas fa-check-circle"></i> Inter-branch transfer notes</li>
                            <li class="lk-trans" data-en="<i class='fas fa-check-circle'></i> Consolidated company P&L" data-si="<i class='fas fa-check-circle'></i> ඒකාබද්ධ ලාභ-අලාභ වාර්තා"><i class="fas fa-check-circle"></i> Consolidated company P&L</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 24. CRM, 25. PAYROLL, 26. ACCOUNTING & 27. ANALYTICS -->
    <section class="lk-section" id="core-platform-modules">
        <div class="container">
            <div class="text-center mb-5">
                <span class="section-badge-lk lk-trans" data-en="Sections 24 - 27: Core Platform Engines" data-si="24 - 27 කොටස්: ප්‍රධාන පද්ධති මොඩියුල">Sections 24 - 27: Core Platform Engines</span>
                <h2 class="section-title-lk lk-trans" 
                    data-en="Complete Business Suite: CRM, Payroll, Accounting & Analytics" 
                    data-si="සම්පූර්ණ ව්‍යාපාරික පද්ධතිය: CRM, වැටුප්, ගිණුම්කරණය සහ විශ්ලේෂණ">
                    Complete Business Suite: CRM, Payroll, Accounting & Analytics
                </h2>
                <p class="section-sub-lk lk-trans" 
                    data-en="Everything you need to manage people, customer relationships, fiscal ledgers, and executive intelligence."
                    data-si="සේවකයින්, පාරිභෝගිකයින්, මූල්‍ය ලෙජර සහ තීරණ ගැනීමේ වාර්තා කළමනාකරණයට අවශ්‍ය සියල්ල.">
                    Everything you need to manage people, customer relationships, fiscal ledgers, and executive intelligence.
                </p>
            </div>

            <div class="row g-4">
                <div class="col-md-6 col-lg-3">
                    <div class="lk-card">
                        <div class="lk-card-icon"><i class="fas fa-user-friends"></i></div>
                        <h4 class="lk-trans" data-en="24. CRM & Sales" data-si="24. CRM සහ විකුණුම්">24. CRM & Sales</h4>
                        <p class="lk-trans" data-en="Manage leads, customer profiles, follow-ups, quotation proformas, and sales pipeline stages." data-si="ගනුදෙනුකරුවන්, මිල කැඳවීම් සහ විකුණුම් කටයුතු කළමනාකරණය කරන්න.">Manage leads, customer profiles, follow-ups, quotation proformas, and sales pipeline stages.</p>
                        <ul class="lk-checklist">
                            <li class="lk-trans" data-en="<i class='fas fa-check-circle'></i> Lead capture & assignment" data-si="<i class='fas fa-check-circle'></i> අවස්ථා ලියාපදිංචිය සහ පැවරීම"><i class="fas fa-check-circle"></i> Lead capture & assignment</li>
                            <li class="lk-trans" data-en="<i class='fas fa-check-circle'></i> Quotation-to-Invoice conversion" data-si="<i class='fas fa-check-circle'></i> මිල කැඳවීම් ඉන්වොයිස් බවට පත්කිරීම"><i class="fas fa-check-circle"></i> Quotation-to-Invoice conversion</li>
                            <li class="lk-trans" data-en="<i class='fas fa-check-circle'></i> Customer purchase history" data-si="<i class='fas fa-check-circle'></i> පාරිභෝගික මිලදී ගැනීමේ ඉතිහාසය"><i class="fas fa-check-circle"></i> Customer purchase history</li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3">
                    <div class="lk-card">
                        <div class="lk-card-icon"><i class="fas fa-id-card-alt"></i></div>
                        <h4 class="lk-trans" data-en="25. Payroll & HR" data-si="25. වැටුප් සහ මානව සම්පත්">25. Payroll & HR</h4>
                        <p class="lk-trans" data-en="Employee directory, attendance logs, salary slips, deductions, and staff shift scheduling." data-si="සේවක තොරතුරු, පැමිණීම, වැටුප් පත්‍රිකා සහ මුර කාලසටහන්.">Employee directory, attendance logs, salary slips, deductions, and staff shift scheduling.</p>
                        <ul class="lk-checklist">
                            <li class="lk-trans" data-en="<i class='fas fa-check-circle'></i> Staff master & KYC files" data-si="<i class='fas fa-check-circle'></i> සේවක තොරතුරු ගොනු"><i class="fas fa-check-circle"></i> Staff master & KYC files</li>
                            <li class="lk-trans" data-en="<i class='fas fa-check-circle'></i> Monthly salary slip generation" data-si="<i class='fas fa-check-circle'></i> මාසික වැටුප් පත්‍රිකා සකස් කිරීම"><i class="fas fa-check-circle"></i> Monthly salary slip generation</li>
                            <li class="lk-trans" data-en="<i class='fas fa-check-circle'></i> Attendance & leave logs" data-si="<i class='fas fa-check-circle'></i> පැමිණීම් සහ නිවාඩු වාර්තා"><i class="fas fa-check-circle"></i> Attendance & leave logs</li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3">
                    <div class="lk-card">
                        <div class="lk-card-icon"><i class="fas fa-calculator"></i></div>
                        <h4 class="lk-trans" data-en="26. Cloud Accounting" data-si="26. ක්ලවුඩ් ගිණුම්කරණය">26. Cloud Accounting</h4>
                        <p class="lk-trans" data-en="Accounts receivable, accounts payable, expense vouchers, bank reconciliations, and P&L balances." data-si="ලැබිය යුතු සහ ගෙවිය යුතු මුදල්, වියදම් වවුචර සහ බැංකු සැසඳුම්.">Accounts receivable, accounts payable, expense vouchers, bank reconciliations, and P&L balances.</p>
                        <ul class="lk-checklist">
                            <li class="lk-trans" data-en="<i class='fas fa-check-circle'></i> Real-time General Ledger" data-si="<i class='fas fa-check-circle'></i> සජීවී ප්‍රධාන ලෙජරය"><i class="fas fa-check-circle"></i> Real-time General Ledger</li>
                            <li class="lk-trans" data-en="<i class='fas fa-check-circle'></i> Accounts Receivable (AR) & AP" data-si="<i class='fas fa-check-circle'></i> ලැබිය යුතු හා ගෙවිය යුතු මුදල්"><i class="fas fa-check-circle"></i> Accounts Receivable (AR) & AP</li>
                            <li class="lk-trans" data-en="<i class='fas fa-check-circle'></i> Audit-ready Balance Sheets" data-si="<i class='fas fa-check-circle'></i> විගණනයට සූදානම් ශේෂ පත්‍ර"><i class="fas fa-check-circle"></i> Audit-ready Balance Sheets</li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3">
                    <div class="lk-card">
                        <div class="lk-card-icon"><i class="fas fa-chart-line"></i></div>
                        <h4 class="lk-trans" data-en="27. Business Intelligence" data-si="27. ව්‍යාපාරික බුද්ධිය">27. Business Intelligence</h4>
                        <p class="lk-trans" data-en="Live sales dashboards, gross margin reports, inventory turnover rates, and branch performance." data-si="සජීවී විකුණුම් පුවරු, ලාභ ආන්තික සහ ශාඛා ක්‍රියාකාරීත්ව වාර්තා.">Live sales dashboards, gross margin reports, inventory turnover rates, and branch performance.</p>
                        <ul class="lk-checklist">
                            <li class="lk-trans" data-en="<i class='fas fa-check-circle'></i> Real-time visual graphs" data-si="<i class='fas fa-check-circle'></i> සජීවී දෘශ්‍ය ප්‍රස්තාර"><i class="fas fa-check-circle"></i> Real-time visual graphs</li>
                            <li class="lk-trans" data-en="<i class='fas fa-check-circle'></i> Product & category margins" data-si="<i class='fas fa-check-circle'></i> භාණ්ඩ හා කාණ්ඩ ලාභ ආන්තික"><i class="fas fa-check-circle"></i> Product & category margins</li>
                            <li class="lk-trans" data-en="<i class='fas fa-check-circle'></i> Automated daily email summaries" data-si="<i class='fas fa-check-circle'></i> ස්වයංක්‍රීය දෛනික විද්‍යුත් තැපැල් වාර්තා"><i class="fas fa-check-circle"></i> Automated daily email summaries</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 28. SRI LANKA INDUSTRY GRID -->
    <section class="lk-section bg-light-lk" id="industry-grid">
        <div class="container">
            <div class="text-center mb-5">
                <span class="section-badge-lk lk-trans" data-en="Section 28: 17 Industry Verticals" data-si="28 වන කොටස: ප්‍රධාන කර්මාන්ත 17 ක්">Section 28: 17 Industry Verticals</span>
                <h2 class="section-title-lk lk-trans" 
                    data-en="Industries Thriving on Digify ERP in Sri Lanka" 
                    data-si="Digify ERP භාවිතා කරන ශ්‍රී ලාංකික කර්මාන්ත">
                    Industries Thriving on Digify ERP in Sri Lanka
                </h2>
                <p class="section-sub-lk lk-trans" 
                    data-en="Purpose-built workflows tailored for high-volume transactions, fast checkouts, and multi-location inventory."
                    data-si="වේගවත් බිල්පත් සහ බහු-ස්ථාන තොග පාලනය සඳහා විශේෂිත කාර්ය ප්‍රවාහ.">
                    Purpose-built workflows tailored for high-volume transactions, fast checkouts, and multi-location inventory.
                </p>
            </div>

            <div class="row g-3 row-cols-2 row-cols-md-3 row-cols-lg-4">
                <div class="col"><div class="industry-grid-card"><i class="fas fa-store"></i><h5 class="lk-trans" data-en="Retail & Supermarkets" data-si="සිල්ලර සහ සුපිරි වෙළඳසැල්">Retail & Supermarkets</h5><p class="lk-trans" data-en="Fast barcode POS & weighed scales" data-si="වේගවත් බාර්කෝඩ් POS සහ තරාදි">Fast barcode POS & weighed scales</p></div></div>
                <div class="col"><div class="industry-grid-card"><i class="fas fa-tshirt"></i><h5 class="lk-trans" data-en="Garments & Apparel" data-si="ඇඟලුම් සහ රෙදිපිළි">Garments & Apparel</h5><p class="lk-trans" data-en="Style, Size, Color & cut-to-pack" data-si="විලාසිතා, ප්‍රමාණ සහ Cut-to-Pack">Style, Size, Color & cut-to-pack</p></div></div>
                <div class="col"><div class="industry-grid-card"><i class="fas fa-leaf"></i><h5 class="lk-trans" data-en="Tea & Processing" data-si="තේ සහ සැකසුම් කර්මාන්ත">Tea & Processing</h5><p class="lk-trans" data-en="Estate leaf intake & auction lots" data-si="අමු දළු බර සහ වෙන්දේසි අංක">Estate leaf intake & auction lots</p></div></div>
                <div class="col"><div class="industry-grid-card"><i class="fas fa-warehouse"></i><h5 class="lk-trans" data-en="Wholesale & Distribution" data-si="තොග වෙළඳාම සහ බෙදාහැරීම">Wholesale & Distribution</h5><p class="lk-trans" data-en="Bulk pricing tiers & credit ledger" data-si="තොග මිල ගණන් සහ ණය ලෙජරය">Bulk pricing tiers & credit ledger</p></div></div>
                <div class="col"><div class="industry-grid-card"><i class="fas fa-seedling"></i><h5 class="lk-trans" data-en="Agribusiness & Spices" data-si="කෘෂිකර්මය සහ කුළුබඩු">Agribusiness & Spices</h5><p class="lk-trans" data-en="Ceylon Cinnamon & spice grading" data-si="ලංකා කුරුඳු සහ කුළුබඩු වර්ගීකරණය">Ceylon Cinnamon & spice grading</p></div></div>
                <div class="col"><div class="industry-grid-card"><i class="fas fa-hotel"></i><h5 class="lk-trans" data-en="Tourism & Hospitality" data-si="සංචාරක සහ හෝටල්">Tourism & Hospitality</h5><p class="lk-trans" data-en="Resort retail & foreign currency POS" data-si="නිවාඩු නිකේතන සහ විදේශ මුදල් POS">Resort retail & foreign currency POS</p></div></div>
                <div class="col"><div class="industry-grid-card"><i class="fas fa-utensils"></i><h5 class="lk-trans" data-en="Restaurants & Cafés" data-si="අවන්හල් සහ කැෆේ">Restaurants & Cafés</h5><p class="lk-trans" data-en="Touchscreen KOT & recipe costing" data-si="ස්පර්ශ තිර KOT සහ වට්ටෝරු පිරිවැය">Touchscreen KOT & recipe costing</p></div></div>
                <div class="col"><div class="industry-grid-card"><i class="fas fa-industry"></i><h5 class="lk-trans" data-en="Manufacturing & Assembly" data-si="නිෂ්පාදන සහ එකලස් කිරීම">Manufacturing & Assembly</h5><p class="lk-trans" data-en="BOM, work orders & job costing" data-si="BOM, කාර්ය ඇණවුම් සහ පිරිවැය">BOM, work orders & job costing</p></div></div>
                <div class="col"><div class="industry-grid-card"><i class="fas fa-boxes"></i><h5 class="lk-trans" data-en="FMCG Distribution" data-si="FMCG බෙදාහැරීම">FMCG Distribution</h5><p class="lk-trans" data-en="Van sales route & batch tracking" data-si="වෑන් රථ විකුණුම් සහ කාණ්ඩ ලුහුබැඳීම">Van sales route & batch tracking</p></div></div>
                <div class="col"><div class="industry-grid-card"><i class="fas fa-mortar-pestle"></i><h5 class="lk-trans" data-en="Food Processing" data-si="ආහාර සැකසුම්">Food Processing</h5><p class="lk-trans" data-en="Recipe batch scaling & expiry dates" data-si="වට්ටෝරු පරිමාණය සහ කල් ඉකුත්වීම">Recipe batch scaling & expiry dates</p></div></div>
                <div class="col"><div class="industry-grid-card"><i class="fas fa-pills"></i><h5 class="lk-trans" data-en="Pharmacy & Healthcare" data-si="ඖෂධහල් සහ සෞඛ්‍ය">Pharmacy & Healthcare</h5><p class="lk-trans" data-en="Prescription POS & drug catalogue" data-si="බෙහෙත් වට්ටෝරු POS සහ නාමාවලිය">Prescription POS & drug catalogue</p></div></div>
                <div class="col"><div class="industry-grid-card"><i class="fas fa-hard-hat"></i><h5 class="lk-trans" data-en="Construction & Hardware" data-si="ඉදිකිරීම් සහ දෘඩාංග">Construction & Hardware</h5><p class="lk-trans" data-en="Multi-unit measures & site notes" data-si="බහු-ඒකක මිනුම් සහ භූමි සටහන්">Multi-unit measures & site notes</p></div></div>
                <div class="col"><div class="industry-grid-card"><i class="fas fa-truck-moving"></i><h5 class="lk-trans" data-en="Logistics & Transport" data-si="ප්‍රවාහන සහ සැපයුම්">Logistics & Transport</h5><p class="lk-trans" data-en="Port clearance & landed cost logs" data-si="වරාය නිශ්කාශනය සහ ප්‍රවාහන වියදම්">Port clearance & landed cost logs</p></div></div>
                <div class="col"><div class="industry-grid-card"><i class="fas fa-shopping-bag"></i><h5 class="lk-trans" data-en="E-Commerce Brands" data-si="ඊ-වාණිජ්‍ය සන්නාම">E-Commerce Brands</h5><p class="lk-trans" data-en="Online store inventory & couriers" data-si="ඔන්ලයින් තොග සහ කුරියර් පාලනය">Online store inventory & couriers</p></div></div>
                <div class="col"><div class="industry-grid-card"><i class="fas fa-briefcase"></i><h5 class="lk-trans" data-en="Professional Services" data-si="වෘත්තීය සේවා">Professional Services</h5><p class="lk-trans" data-en="Project billing & client ledgers" data-si="ව්යාපෘති බිල්පත් සහ සේවාදායක ලෙජර">Project billing & client ledgers</p></div></div>
                <div class="col"><div class="industry-grid-card"><i class="fas fa-gem"></i><h5 class="lk-trans" data-en="Jewellery & Gems" data-si="මැණික් හා ස්වර්ණාභරණ">Jewellery & Gems</h5><p class="lk-trans" data-en="Carat grading, certs & metal weights" data-si="කැරට් වර්ගීකරණය සහ ලෝහ බර">Carat grading, certs & metal weights</p></div></div>
                <div class="col"><div class="industry-grid-card"><i class="fas fa-cut"></i><h5 class="lk-trans" data-en="Textiles & Fabrics" data-si="රෙදිපිළි සහ නූල්">Textiles & Fabrics</h5><p class="lk-trans" data-en="Roll-by-roll GSM & shade lots" data-si="රෝල් මට්ටමේ GSM සහ වර්ණ කාණ්ඩ">Roll-by-roll GSM & shade lots</p></div></div>
                <div class="col"><div class="industry-grid-card"><i class="fas fa-rocket"></i><h5 class="lk-trans" data-en="Growing SMEs" data-si="වර්ධනය වන සුළු හා මධ්‍ය පරිමාණ ව්‍යාපාර">Growing SMEs</h5><p class="lk-trans" data-en="Unified accounting, POS & inventory" data-si="ඒකාබද්ධ ගිණුම්කරණය, POS සහ තොග">Unified accounting, POS & inventory</p></div></div>
            </div>
        </div>
    </section>

    <!-- 29. BUSINESS CHALLENGES & 30. WHY DIGIFY -->
    <section class="lk-section" id="challenges-sri-lanka">
        <div class="container">
            <div class="text-center mb-5">
                <span class="section-badge-lk lk-trans" data-en="Sections 29 & 30: Overcoming Bottlenecks" data-si="29 සහ 30 කොටස්: අභියෝග ජයගැනීම">Sections 29 & 30: Overcoming Bottlenecks</span>
                <h2 class="section-title-lk lk-trans" 
                    data-en="Solve Common Business Management Challenges in Sri Lanka" 
                    data-si="ශ්‍රී ලංකාවේ ව්‍යාපාර මුහුණ දෙන අභියෝග සඳහා විසඳුම්">
                    Solve Common Business Management Challenges in Sri Lanka
                </h2>
            </div>

            <div class="row g-4 mb-5">
                <div class="col-md-4">
                    <div class="challenge-card">
                        <h5 class="lk-trans" data-en="<i class='fas fa-exclamation-triangle me-2'></i> 1. Disconnected Systems" data-si="<i class='fas fa-exclamation-triangle me-2'></i> 1. විසිරුණු පද්ධති"><i class="fas fa-exclamation-triangle me-2"></i> 1. Disconnected Systems</h5>
                        <p class="lk-trans" data-en="Spreadsheets and fragmented point-of-sale software create blind spots. Digify unifies POS, inventory, purchasing, and accounting in one database." data-si="එක්සෙල් ශීට් සහ විවිධ මෘදුකාංග භාවිතය නිසා දත්ත අපැහැදිලි වේ. Digify සියලු POS, තොග, මිලදී ගැනීම් සහ ගිණුම් එකම දත්ත ගබඩාවකට ගෙන එයි.">Spreadsheets and fragmented point-of-sale software create blind spots. Digify unifies POS, inventory, purchasing, and accounting in one database.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="challenge-card">
                        <h5 class="lk-trans" data-en="<i class='fas fa-exclamation-triangle me-2'></i> 2. Stock Shrinkage & Blind Spots" data-si="<i class='fas fa-exclamation-triangle me-2'></i> 2. තොග හිඟවීම් සහ හානි"><i class="fas fa-exclamation-triangle me-2"></i> 2. Stock Shrinkage & Blind Spots</h5>
                        <p class="lk-trans" data-en="Lack of real-time inventory visibility across branches leads to stockouts. Digify delivers live multi-branch stock counts and automated replenishment." data-si="ශාඛා අතර සජීවී තොග දත්ත නොමැතිකම නිසා භාණ්ඩ හිඟවීම් සිදුවේ. Digify සජීවී බහු-ශාඛා තොග ගණනය සහ ස්වයංක්‍රීය නැවත ඇණවුම් ලබාදෙයි.">Lack of real-time inventory visibility across branches leads to stockouts. Digify delivers live multi-branch stock counts and automated replenishment.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="challenge-card">
                        <h5 class="lk-trans" data-en="<i class='fas fa-exclamation-triangle me-2'></i> 3. Manual Tax Calculations" data-si="<i class='fas fa-exclamation-triangle me-2'></i> 3. අතින් බදු ගණනය කිරීම්"><i class="fas fa-exclamation-triangle me-2"></i> 3. Manual Tax Calculations</h5>
                        <p class="lk-trans" data-en="Handling 2026 VAT changes and SVAT vouchers by hand leads to errors. Digify generates structured Tax Invoices with accurate rate applications." data-si="2026 VAT සංශෝධන සහ SVAT වවුචර අතින් හැසිරවීමෙන් වැරදි සිදුවේ. Digify නිවැරදි බදු අනුපාත සමඟ නීත්‍යානුකූල බදු ඉන්වොයිසි ජනනය කරයි.">Handling 2026 VAT changes and SVAT vouchers by hand leads to errors. Digify generates structured Tax Invoices with accurate rate applications.</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="challenge-card">
                        <h5 class="lk-trans" data-en="<i class='fas fa-exclamation-triangle me-2'></i> 4. Multi-Branch Complexity" data-si="<i class='fas fa-exclamation-triangle me-2'></i> 4. බහු-ශාඛා පාලනයේ සංකීර්ණතා"><i class="fas fa-exclamation-triangle me-2"></i> 4. Multi-Branch Complexity</h5>
                        <p class="lk-trans" data-en="Managing store transfers, regional price differences, and disparate sales figures. Digify provides a centralized dashboard with instant inter-branch transfers." data-si="ශාඛා අතර භාණ්ඩ මාරු කිරීම, මිල වෙනස්කම් සහ විකුණුම් සංසන්දනය කිරීමේ අපහසුතා. Digify මධ්‍යගත පාලක පුවරුවක් සමඟ ක්ෂණික විසඳුම් ලබාදෙයි.">Managing store transfers, regional price differences, and disparate sales figures. Digify provides a centralized dashboard with instant inter-branch transfers.</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="challenge-card">
                        <h5 class="lk-trans" data-en="<i class='fas fa-exclamation-triangle me-2'></i> 5. Delayed Financial Insights" data-si="<i class='fas fa-exclamation-triangle me-2'></i> 5. ප්‍රමාද වන මූල්‍ය වාර්තා"><i class="fas fa-exclamation-triangle me-2"></i> 5. Delayed Financial Insights</h5>
                        <p class="lk-trans" data-en="Waiting weeks for month-end accountants to compile P&L figures. Digify offers instant automated P&L statements and visual executive dashboards." data-si="ලාභ-අලාභ වාර්තා ලබාගැනීමට මාස ගණන් බලා සිටීමට සිදුවීම. Digify ක්ෂණික ස්වයංක්‍රීය මූල්‍ය ප්‍රකාශන සහ දෘශ්‍ය පාලක පුවරු සපයයි.">Waiting weeks for month-end accountants to compile P&L figures. Digify offers instant automated P&L statements and visual executive dashboards.</p>
                    </div>
                </div>
            </div>

            <!-- Section 31. Sri Lanka Opportunity -->
            <div class="p-4 bg-light-lk rounded-4 border">
                <div class="row align-items-center g-4">
                    <div class="col-lg-8">
                        <span class="badge bg-teal text-white px-3 py-1 rounded-pill mb-2 lk-trans" style="background-color: #0d9488;" data-en="Section 31 Economic Reality" data-si="31 වන කොටස: ආර්ථික යථාර්ථය">Section 31 Economic Reality</span>
                        <h4 class="fw-bold text-dark mb-2 lk-trans" data-en="Built for Sri Lanka's Diverse Business Economy" data-si="ශ්‍රී ලංකාවේ විවිධාංගීකරණය වූ ආර්ථිකය සඳහා නිර්මාණය කර ඇත">Built for Sri Lanka's Diverse Business Economy</h4>
                        <p class="text-muted mb-0 lk-trans" 
                            data-en="Sri Lanka's official employment distribution (48.5% Services, 25.6% Industry, and 26.0% Agriculture - DCS statistics) demands a flexible, modular ERP. Digify covers the entire spectrum from tea estates and garment factories to modern supermarkets, tourism resorts, and wholesale logistics."
                            data-si="ශ්‍රී ලංකාවේ රැකියා බෙදීයාම (48.5% සේවා, 25.6% කර්මාන්ත, සහ 26.0% කෘෂිකර්මය) අනුව නම්‍යශීලී ERP පද්ධතියක් අවශ්‍ය වේ. Digify තේ වතු, ඇඟලුම් කම්හල්, සුපිරි වෙළඳසැල් සහ සංචාරක හෝටල් සියල්ලටම ගැලපේ.">
                            Sri Lanka's official employment distribution (48.5% Services, 25.6% Industry, and 26.0% Agriculture - DCS statistics) demands a flexible, modular ERP. Digify covers the entire spectrum from tea estates and garment factories to modern supermarkets, tourism resorts, and wholesale logistics.
                        </p>
                    </div>
                    <div class="col-lg-4 text-center">
                        <div class="d-flex justify-content-around">
                            <div><h3 class="fw-bold text-teal mb-0" style="color: #0d9488;">48.5%</h3><small class="text-muted lk-trans" data-en="Services" data-si="සේවා අංශය">Services</small></div>
                            <div><h3 class="fw-bold text-teal mb-0" style="color: #0d9488;">25.6%</h3><small class="text-muted lk-trans" data-en="Industry" data-si="කර්මාන්ත">Industry</small></div>
                            <div><h3 class="fw-bold text-teal mb-0" style="color: #0d9488;">26.0%</h3><small class="text-muted lk-trans" data-en="Agriculture" data-si="කෘෂිකර්මය">Agriculture</small></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 34. FAQS SECTION -->
    <section class="lk-section bg-light-lk" id="faqs-sri-lanka">
        <div class="container">
            <div class="text-center mb-5">
                <span class="section-badge-lk lk-trans" data-en="Section 34: Business FAQs" data-si="34 වන කොටස: නිතර අසන ප්‍රශ්න">Section 34: Business FAQs</span>
                <h2 class="section-title-lk lk-trans" 
                    data-en="Sri Lanka Cloud ERP & Operations FAQs" 
                    data-si="ශ්‍රී ලංකා ERP සම්බන්ධයෙන් නිතර අසන ප්‍රශ්න">
                    Sri Lanka Cloud ERP & Operations FAQs
                </h2>
            </div>

            <div class="max-w-800 mx-auto" style="max-width: 840px;">
                <div class="accordion accordion-lk" id="lkFaqAccordion">
                    
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed lk-trans" type="button" data-bs-toggle="collapse" data-bs-target="#lkFaq1"
                                data-en="Q1. What is ERP software in Sri Lanka?"
                                data-si="ප්‍රශ්නය 1. ශ්‍රී ලංකාවේ ERP මෘදුකාංගයක් යනු කුමක්ද?">
                                Q1. What is ERP software in Sri Lanka?
                            </button>
                        </h2>
                        <div id="lkFaq1" class="accordion-collapse collapse" data-bs-parent="#lkFaqAccordion">
                            <div class="accordion-body lk-trans"
                                data-en="ERP software in Sri Lanka helps businesses manage accounting, sales, inventory, purchasing, customers, employees and operational processes through one integrated platform."
                                data-si="ශ්‍රී ලංකාවේ ERP මෘදුකාංගයක් මඟින් ව්‍යාපාරවල ගිණුම්කරණය, විකුණුම්, තොග, මිලදී ගැනීම්, පාරිභෝගිකයින්, සේවකයින් සහ මෙහෙයුම් ක්‍රියාවලීන් එකම ඒකාබද්ධ පද්ධතියකින් කළමනාකරණය කිරීමට උපකාරී වේ.">
                                ERP software in Sri Lanka helps businesses manage accounting, sales, inventory, purchasing, customers, employees and operational processes through one integrated platform.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed lk-trans" type="button" data-bs-toggle="collapse" data-bs-target="#lkFaq2"
                                data-en="Q2. Can Digify ERP be used by supermarkets in Sri Lanka?"
                                data-si="ප්‍රශ්නය 2. ශ්‍රී ලංකාවේ සුපිරි වෙළඳසැල් සඳහා Digify ERP භාවිත කළ හැකිද?">
                                Q2. Can Digify ERP be used by supermarkets in Sri Lanka?
                            </button>
                        </h2>
                        <div id="lkFaq2" class="accordion-collapse collapse" data-bs-parent="#lkFaqAccordion">
                            <div class="accordion-body lk-trans"
                                data-en="Yes. Digify ERP supports supermarket and retail workflows including fast barcode POS, digital weighing scale integration, inventory tracking across 14 product categories, purchasing, suppliers, customers and consolidated multi-branch reporting."
                                data-si="ඔව්. Digify ERP සුපිරි වෙළඳසැල් සහ සිල්ලර අලෙවිසැල් සඳහා වේගවත් බාර්කෝඩ් POS, ඩිජිටල් තරාදි සම්බන්ධතාවය, භාණ්ඩ කාණ්ඩ 14 ක් පුරා තොග පාලනය, මිලදී ගැනීම්, සැපයුම්කරුවන් සහ බහු-ශාඛා වාර්තාකරණයට පූර්ණ සහාය දක්වයි.">
                                Yes. Digify ERP supports supermarket and retail workflows including fast barcode POS, digital weighing scale integration, inventory tracking across 14 product categories, purchasing, suppliers, customers and consolidated multi-branch reporting.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed lk-trans" type="button" data-bs-toggle="collapse" data-bs-target="#lkFaq3"
                                data-en="Q3. Can Digify ERP support garment and apparel businesses?"
                                data-si="ප්‍රශ්නය 3. ඇඟලුම් සහ රෙදිපිළි ව්‍යාපාර සඳහා Digify සහාය දක්වනවාද?">
                                Q3. Can Digify ERP support garment and apparel businesses?
                            </button>
                        </h2>
                        <div id="lkFaq3" class="accordion-collapse collapse" data-bs-parent="#lkFaqAccordion">
                            <div class="accordion-body lk-trans"
                                data-en="Digify supports garment businesses through multi-dimensional Style/Size/Color SKU matrices, fabric roll inventory by GSM and shade, trims/accessories consumption, BOM, cut-to-pack workflows, wholesale orders, and export packing lists."
                                data-si="විලාසිතා/ප්‍රමාණ/වර්ණ Matrix, GSM අනුව රෙදි රෝල් තොග, උපාංග භාවිතය, BOM, Cut-to-Pack නිෂ්පාදන ක්‍රියාවලි සහ අපනයන ලේඛන කළමනාකරණයට Digify සහාය දක්වයි.">
                                Digify supports garment businesses through multi-dimensional Style/Size/Color SKU matrices, fabric roll inventory by GSM and shade, trims/accessories consumption, BOM, cut-to-pack workflows, wholesale orders, and export packing lists.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed lk-trans" type="button" data-bs-toggle="collapse" data-bs-target="#lkFaq4"
                                data-en="Q4. Can Digify ERP support tea businesses and processing factories?"
                                data-si="ප්‍රශ්නය 4. තේ වතු සහ සැකසුම් කර්මාන්තශාලා සඳහා Digify ERP භාවිත කළ හැකිද?">
                                Q4. Can Digify ERP support tea businesses and processing factories?
                            </button>
                        </h2>
                        <div id="lkFaq4" class="accordion-collapse collapse" data-bs-parent="#lkFaqAccordion">
                            <div class="accordion-body lk-trans"
                                data-en="Yes. Tea businesses can use ERP capabilities for smallholder green leaf intake weights, fermentation/rolling batch logs, Colombo tea auction lot cataloguing, warehouse bin storage, and multi-currency export proforma invoicing."
                                data-si="ඔව්. අමු දළු බර මැනීම, තේ සැකසුම් කාණ්ඩ, කොළඹ තේ වෙන්දේසි අංක, ගබඩා පාලනය සහ බහු-මුදල් අපනයන ඉන්වොයිසි සඳහා තේ ව්‍යාපාරවලට Digify ERP භාවිත කළ හැක.">
                                Yes. Tea businesses can use ERP capabilities for smallholder green leaf intake weights, fermentation/rolling batch logs, Colombo tea auction lot cataloguing, warehouse bin storage, and multi-currency export proforma invoicing.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed lk-trans" type="button" data-bs-toggle="collapse" data-bs-target="#lkFaq5"
                                data-en="Q5. Does Digify ERP support Sri Lankan VAT and 2026 Tax Invoice requirements?"
                                data-si="ප්‍රශ්නය 5. ශ්‍රී ලංකාවේ VAT සහ 2026 බදු ඉන්වොයිස් නීතිවලට Digify අනුකූලද?">
                                Q5. Does Digify ERP support Sri Lankan VAT and 2026 Tax Invoice requirements?
                            </button>
                        </h2>
                        <div id="lkFaq5" class="accordion-collapse collapse" data-bs-parent="#lkFaqAccordion">
                            <div class="accordion-body lk-trans"
                                data-en="Digify provides financial and transaction management capabilities designed to support structured business workflows under Sri Lanka's 2026 revised VAT specifications, including supplier/purchaser TIN fields, sequential non-duplicating serial numbers, and audit-ready tax reports."
                                data-si="ශ්‍රී ලංකාවේ 2026 සංශෝධිත VAT බදු රෙගුලාසි අනුව TIN අංක, අනුක්‍රමික ඉන්වොයිස් අංකකරණය සහ විගණනයට සූදානම් බදු වාර්තා සැකසීමට Digify පහසුකම් සලසයි.">
                                Digify provides financial and transaction management capabilities designed to support structured business workflows under Sri Lanka's 2026 revised VAT specifications, including supplier/purchaser TIN fields, sequential non-duplicating serial numbers, and audit-ready tax reports.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed lk-trans" type="button" data-bs-toggle="collapse" data-bs-target="#lkFaq6"
                                data-en="Q6. Can Digify manage multiple branches and central warehouses?"
                                data-si="ප්‍රශ්නය 6. ශාඛා කිහිපයක් සහ ප්‍රධාන ගබඩා කළමනාකරණය කළ හැකිද?">
                                Q6. Can Digify manage multiple branches and central warehouses?
                            </button>
                        </h2>
                        <div id="lkFaq6" class="accordion-collapse collapse" data-bs-parent="#lkFaqAccordion">
                            <div class="accordion-body lk-trans"
                                data-en="Yes. The platform is designed to support multi-location operations including branch-wise inventory, showroom POS, inter-branch stock transfers, central warehouse dispatch, and consolidated management reports."
                                data-si="ඔව්. ශාඛා මට්ටමේ තොග, ප්‍රදර්ශනාගාර POS, ශාඛා අතර තොග මාරු කිරීම්, මධ්‍යම ගබඩා පිටත්කිරීම් සහ ඒකාබද්ධ කළමනාකරණ වාර්තා ලබාදෙයි.">
                                Yes. The platform is designed to support multi-location operations including branch-wise inventory, showroom POS, inter-branch stock transfers, central warehouse dispatch, and consolidated management reports.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed lk-trans" type="button" data-bs-toggle="collapse" data-bs-target="#lkFaq7"
                                data-en="Q7. Can manufacturing companies use Digify ERP?"
                                data-si="ප්‍රශ්නය 7. නිෂ්පාදන සමාගම් සඳහා Digify ERP භාවිත කළ හැකිද?">
                                Q7. Can manufacturing companies use Digify ERP?
                            </button>
                        </h2>
                        <div id="lkFaq7" class="accordion-collapse collapse" data-bs-parent="#lkFaqAccordion">
                            <div class="accordion-body lk-trans"
                                data-en="Yes. Manufacturing businesses can use ERP capabilities for Bill of Materials (BOM), production work orders, raw material requisitions, finished goods yield tracking, landed cost allocation, and job work reporting."
                                data-si="ඔව්. BOM වට්ටෝරු, නිෂ්පාදන කාර්ය ඇණවුම්, අමුද්‍රව්‍ය භාවිතය, නිමි භාණ්ඩ අස්වැන්න සහ කාර්මික රැකියා වාර්තා සඳහා නිෂ්පාදන සමාගම්වලට භාවිත කළ හැක.">
                                Yes. Manufacturing businesses can use ERP capabilities for Bill of Materials (BOM), production work orders, raw material requisitions, finished goods yield tracking, landed cost allocation, and job work reporting.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed lk-trans" type="button" data-bs-toggle="collapse" data-bs-target="#lkFaq8"
                                data-en="Q8. Is Digify suitable for Sri Lankan SMEs and growing enterprises?"
                                data-si="ප්‍රශ්නය 8. සුළු හා මධ්‍ය පරිමාණ (SME) ව්‍යාපාර සඳහා Digify සුදුසුද?">
                                Q8. Is Digify suitable for Sri Lankan SMEs and growing enterprises?
                            </button>
                        </h2>
                        <div id="lkFaq8" class="accordion-collapse collapse" data-bs-parent="#lkFaqAccordion">
                            <div class="accordion-body lk-trans"
                                data-en="Yes. Digify offers scalable flat monthly and annual subscription plans with zero expensive hardware lock-ins, making it ideal for growing Sri Lankan SMEs, single storefronts, and mid-sized enterprise chains alike."
                                data-si="ඔව්. මිල අධික දෘඩාංග අවශ්‍ය නොවන අතර, පහසු මාසික හෝ වාර්ෂික පැකේජ යටතේ ශ්‍රී ලංකාවේ වර්ධනය වන ඕනෑම SME ව්‍යාපාරයකට ඉතා සුදුසු වේ.">
                                Yes. Digify offers scalable flat monthly and annual subscription plans with zero expensive hardware lock-ins, making it ideal for growing Sri Lankan SMEs, single storefronts, and mid-sized enterprise chains alike.
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!-- 35. FINAL CTA SECTION -->
    <section class="lk-section bg-dark-lk text-center">
        <div class="container">
            <span class="section-badge-lk-dark lk-trans" data-en="Get Started Today" data-si="අදම ආරම්භ කරන්න">Get Started Today</span>
            <h2 class="section-title-lk-dark mb-3 lk-trans" 
                data-en="Ready to Transform Your Business with Cloud ERP?" 
                data-si="ක්ලවුඩ් ERP සමඟින් ඔබේ ව්‍යාපාරය පරිවර්තනය කිරීමට සූදානම්ද?">
                Ready to Transform Your Business with Cloud ERP?
            </h2>
            <p class="section-sub-lk-dark mx-auto mb-4 lk-trans"
                data-en="From supermarkets and garment businesses to tea companies, manufacturers, distributors, agriculture businesses and hospitality organizations, Digify Soft Solutions helps Sri Lankan businesses centralize their operations through one integrated ERP platform."
                data-si="සුපිරි වෙළඳසැල් සහ ඇඟලුම් ව්‍යාපාරවල සිට තේ සමාගම්, නිෂ්පාදකයින්, බෙදාහරින්නන් සහ හෝටල් දක්වා සියලුම ශ්‍රී ලාංකික ව්‍යාපාර සඳහා එකම ඒකාබද්ධ ERP විසඳුම.">
                From supermarkets and garment businesses to tea companies, manufacturers, distributors, agriculture businesses and hospitality organizations, Digify Soft Solutions helps Sri Lankan businesses centralize their operations through one integrated ERP platform.
            </p>
            <div class="d-flex justify-content-center gap-3 flex-wrap">
                <a href="#demo-form" class="btn btn-lk-primary px-4 py-3">
                    <i class="fas fa-calendar-check me-2"></i>
                    <span class="lk-trans" data-en="Request a Free Demo" data-si="නොමිලේ ඩෙමෝ එකක් ඉල්ලන්න">Request a Free Demo</span>
                </a>
                <a href="https://wa.me/919914444588?text=Hello%20Digify%20Sri%20Lanka%20ERP%20Team" target="_blank" class="btn btn-lk-outline px-4 py-3">
                    <i class="fab fa-whatsapp text-success me-2"></i>
                    <span class="lk-trans" data-en="Talk to Our ERP Team" data-si="අපගේ කණ්ඩායම අමතන්න">Talk to Our ERP Team</span>
                </a>
            </div>
        </div>
    </section>

</div>

<script>
function switchLkLang(lang) {
    var btnEn = document.getElementById('btnLkLangEn');
    var btnSi = document.getElementById('btnLkLangSi');
    
    localStorage.setItem('digify_lk_lang', lang);
    
    if (lang === 'si') {
        if (btnSi) btnSi.classList.add('active');
        if (btnEn) btnEn.classList.remove('active');
        document.querySelectorAll('.lk-trans').forEach(function(el) {
            var siText = el.getAttribute('data-si');
            if (siText) {
                el.innerHTML = siText;
            }
        });
        document.querySelectorAll('.lk-trans-ph').forEach(function(el) {
            var siPh = el.getAttribute('data-si-ph');
            if (siPh) {
                el.setAttribute('placeholder', siPh);
            }
        });
    } else {
        if (btnEn) btnEn.classList.add('active');
        if (btnSi) btnSi.classList.remove('active');
        document.querySelectorAll('.lk-trans').forEach(function(el) {
            var enText = el.getAttribute('data-en');
            if (enText) {
                el.innerHTML = enText;
            }
        });
        document.querySelectorAll('.lk-trans-ph').forEach(function(el) {
            var enPh = el.getAttribute('data-en-ph');
            if (enPh) {
                el.setAttribute('placeholder', enPh);
            }
        });
    }
}

document.addEventListener('DOMContentLoaded', function() {
    var savedLang = localStorage.getItem('digify_lk_lang');
    if (savedLang) {
        switchLkLang(savedLang);
    }
});
</script>

<?php include(__DIR__ . '/../../footer.php'); ?>
