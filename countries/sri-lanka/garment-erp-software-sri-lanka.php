<?php 
include_once(__DIR__ . '/../../db.php');
include_once(__DIR__ . '/../../fetch_meta.php');

$pageTitle = "Garment ERP Software Sri Lanka | Apparel & Clothing ERP";
$pageDescription = "Manage garment inventory, fabric rolls, trims, cut-to-pack production workflows, purchasing, wholesale orders and export proformas through Digify's Apparel ERP in Sri Lanka.";
$pageKeywords = "Garment ERP Sri Lanka, Apparel ERP Sri Lanka, Textile ERP Sri Lanka, Clothing manufacturing software Sri Lanka, RMG software Sri Lanka, Cut to pack ERP Sri Lanka, Fabric roll inventory Sri Lanka";
$pageCanonical = "https://www.digifysoft.in/garment-erp-software-sri-lanka";

include(__DIR__ . '/../../top.php');
include(__DIR__ . '/../../header.php');
?>

<style>
/* Sri Lanka Garment Suite Design System */
.lkgm-page-wrapper {
    font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
    color: #1e293b;
    overflow-x: hidden;
}

/* Hero */
.lkgm-hero {
    background: linear-gradient(135deg, #18181b 0%, #0f302b 50%, #0d4a3e 100%);
    color: #ffffff;
    padding: 70px 0 85px;
    position: relative;
    overflow: hidden;
    border-bottom: 4px solid #0d9488;
}
.lkgm-hero::before {
    content: '';
    position: absolute;
    top: -15%;
    right: -10%;
    width: 650px;
    height: 650px;
    background: radial-gradient(circle, rgba(13, 148, 136, 0.28) 0%, rgba(245, 158, 11, 0.15) 50%, rgba(0, 0, 0, 0) 75%);
    border-radius: 50%;
    pointer-events: none;
}
.text-gradient-lkgm {
    background: linear-gradient(135deg, #2dd4bf 0%, #fde047 50%, #fb923c 100%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    display: inline-block;
}
.lkgm-hero-badge {
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
.lkgm-hero h1 {
    font-size: 42px;
    font-weight: 900;
    line-height: 1.25;
    margin-bottom: 18px;
    letter-spacing: -0.5px;
}
.lkgm-hero-sub {
    font-size: 18px;
    font-weight: 600;
    color: #fde047;
    line-height: 1.5;
    margin-bottom: 14px;
}
.lkgm-hero-desc {
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
.btn-lkgm-primary {
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
.btn-lkgm-primary:hover {
    background: linear-gradient(135deg, #0f766e 0%, #115e59 100%);
    color: #ffffff;
    transform: translateY(-2px);
}
.btn-lkgm-outline {
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
.btn-lkgm-outline:hover {
    background: rgba(255, 255, 255, 0.18);
    color: #ffffff;
    transform: translateY(-2px);
}

/* Sections */
.lkgm-section { padding: 75px 0; }
.bg-light-lkgm { background-color: #f8fafc; }
.section-badge-lkgm {
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
.section-title-lkgm {
    font-size: 34px;
    font-weight: 900;
    color: #0f172a;
    line-height: 1.3;
    margin-bottom: 16px;
    letter-spacing: -0.5px;
}

/* Feature Cards */
.lkgm-card {
    background: #ffffff;
    border: 1px solid #e2e8f0;
    border-radius: 16px;
    padding: 26px;
    transition: all 0.3s ease;
    height: 100%;
    display: flex;
    flex-direction: column;
}
.lkgm-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 20px 30px -10px rgba(0, 0, 0, 0.08);
    border-color: #5eead4;
}
.lkgm-card-icon {
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
.lkgm-card h4 {
    font-size: 18px;
    font-weight: 800;
    color: #0f172a;
    margin-bottom: 10px;
}
.lkgm-card p {
    font-size: 14px;
    color: #64748b;
    line-height: 1.6;
    margin-bottom: 16px;
    flex-grow: 1;
}
.lkgm-checklist {
    list-style: none;
    padding: 0;
    margin: 0;
}
.lkgm-checklist li {
    font-size: 13.5px;
    color: #334155;
    margin-bottom: 8px;
    display: flex;
    align-items: center;
    gap: 8px;
}
.lkgm-checklist li i {
    color: #0d9488;
    font-size: 14px;
    flex-shrink: 0;
}

@media (max-width: 991px) {
    .lkgm-hero { padding: 45px 0 55px; }
    .lkgm-hero h1 { font-size: 28px; line-height: 1.3; }
    .hero-lead-card { margin-top: 25px; padding: 24px 20px; }
    .section-title-lkgm { font-size: 24px; }
}
@media (max-width: 576px) {
    .lkgm-hero { padding: 35px 0 45px; }
    .lkgm-hero h1 { font-size: 23px; }
    .btn-lkgm-primary, .btn-lkgm-outline { width: 100%; justify-content: center; }
}
</style>

<div class="lkgm-page-wrapper">

    <!-- HERO SECTION -->
    <section class="lkgm-hero" id="hero">
        <div class="container position-relative" style="z-index: 2;">
            <div class="row align-items-center g-4">
                <div class="col-lg-7">
                    <!-- Language Switcher -->
                    <div class="lang-toggle-bar">
                        <button class="lang-pill active" id="btnGmLangEn" onclick="switchGmLang('en')">🇬🇧 English</button>
                        <button class="lang-pill" id="btnGmLangSi" onclick="switchGmLang('si')">🇱🇰 සිංහල</button>
                    </div>

                    <div class="lkgm-hero-badge">
                        <span>🧵</span>
                        <span class="lkgm-trans" data-en="Sri Lanka Garment & Apparel Production Suite" data-si="ශ්‍රී ලංකා ඇඟලුම් සහ රෙදිපිළි නිෂ්පාදන පද්ධතිය">Sri Lanka Garment & Apparel Production Suite</span>
                    </div>

                    <h1 class="lkgm-trans" 
                        data-en="Garment & Apparel ERP Software for Sri Lankan Businesses" 
                        data-si="ශ්‍රී ලංකාවේ ඇඟලුම් සහ රෙදිපිළි ව්‍යාපාර සඳහා ERP">
                        Garment & Apparel ERP Software for Sri Lankan Businesses
                    </h1>

                    <div class="lkgm-hero-sub lkgm-trans"
                        data-en="Manage garment inventory, fabric roll tracking, accessories/trims, BOM, cut-to-pack production, purchasing, suppliers and export proformas."
                        data-si="රෙදි රෝල් තොග, උපාංග, BOM වට්ටෝරු, කැපුමේ සිට ඇසුරුම් දක්වා නිෂ්පාදනය සහ අපනයන ඉන්වොයිසි එකම පද්ධතියකින් කළමනාකරණය කරන්න.">
                        Manage garment inventory, fabric roll tracking, accessories/trims, BOM, cut-to-pack production, purchasing, suppliers and export proformas.
                    </div>

                    <p class="lkgm-hero-desc lkgm-trans"
                        data-en="Sri Lanka's Ministry of Foreign Affairs identifies textiles & garments as one of the country's primary economic pillars. Digify provides purpose-built 3D matrix (Style/Size/Color) inventory and factory production workflows."
                        data-si="ශ්‍රී ලංකාවේ ප්‍රධානතම ආර්ථික එන්ජිම වන ඇඟලුම් ක්ෂේත්‍රය සඳහා විලාසිතා, ප්‍රමාණ සහ වර්ණ Matrix සහිත නවීන තාක්ෂණය.">
                        Sri Lanka's Ministry of Foreign Affairs identifies textiles & garments as one of the country's primary economic pillars. Digify provides purpose-built 3D matrix (Style/Size/Color) inventory and factory production workflows.
                    </p>

                    <div class="d-flex flex-wrap gap-3 mb-4">
                        <a href="#demo-form" class="btn btn-lkgm-primary">
                            <i class="fas fa-calendar-check"></i>
                            <span class="lkgm-trans" data-en="Request Garment ERP Demo" data-si="ඇඟලුම් ERP ඩෙමෝ එකක් ඉල්ලන්න">Request Garment ERP Demo</span>
                        </a>
                        <a href="erp-software-sri-lanka.php" class="btn btn-lkgm-outline">
                            <i class="fas fa-arrow-left"></i>
                            <span class="lkgm-trans" data-en="Back to Sri Lanka Main ERP" data-si="ප්‍රධාන ශ්‍රී ලංකා ERP පිටුව">Back to Sri Lanka Main ERP</span>
                        </a>
                    </div>
                </div>

                <!-- Right Form -->
                <div class="col-lg-5" id="demo-form">
                    <div class="hero-lead-card">
                        <div class="d-flex align-items-center justify-content-between flex-wrap gap-2 mb-2 pb-1 border-bottom">
                            <span class="badge bg-success text-white px-2 py-1 rounded-pill font-monospace lkgm-trans" style="font-size: 11px;" data-en="🧵 APPAREL ERP DEMO" data-si="🧵 ඇඟලුම් ERP ඩෙමෝ">🧵 APPAREL ERP DEMO</span>
                            <span class="text-muted small text-nowrap"><i class="fas fa-clock text-warning me-1"></i> <span class="lk-trans" data-en="15-Min Live Demo" data-si="මිනිත්තු 15 ක සජීවී ඩෙමෝ">15-Min Live Demo</span></span>
                        </div>
                        <h3 class="lkgm-trans mt-2" data-en="Schedule Garment Demo" data-si="ඇඟලුම් ඩෙමෝවක් වෙන්කරගන්න">Schedule Garment Demo</h3>
                        <p class="small text-muted mb-3 lkgm-trans" data-en="See fabric roll tracking, size/color matrix, and cut-to-pack workflows live." data-si="රෙදි රෝල් ලුහුබැඳීම, ප්‍රමාණ/වර්ණ Matrix සහ Cut-to-Pack සජීවීව නරඹන්න.">See fabric roll tracking, size/color matrix, and cut-to-pack workflows live.</p>
                        
                        <form action="send_mail.php" method="POST" id="sriLankaGarmentForm">
                            <input type="hidden" name="source" value="Sri Lanka Garment ERP Page">
                            <input type="hidden" name="country" value="Sri Lanka">
                            
                            <div class="mb-2">
                                <label class="form-label small fw-bold text-dark lkgm-trans" data-en="Full Name" data-si="සම්පූර්ණ නම">Full Name</label>
                                <input type="text" name="name" class="form-control lkgm-trans-ph" placeholder="e.g. Kasun Fernando" data-en-ph="e.g. Kasun Fernando" data-si-ph="උදා: කසුන් ප්‍රනාන්දු" required>
                            </div>

                            <div class="mb-2">
                                <label class="form-label small fw-bold text-dark lkgm-trans" data-en="Factory / Apparel Brand Name" data-si="කර්මාන්තශාලාවේ / සන්නාමයේ නම">Factory / Apparel Brand Name</label>
                                <input type="text" name="company" class="form-control lkgm-trans-ph" placeholder="e.g. Ceylon Garments Ltd / StyleHub" data-en-ph="e.g. Ceylon Garments Ltd / StyleHub" data-si-ph="උදා: සිලෝන් ගාමන්ට්ස් ලිමිටඩ් / ස්ටයිල්හබ්" required>
                            </div>

                            <div class="row g-2 mb-2">
                                <div class="col-6">
                                    <label class="form-label small fw-bold text-dark lkgm-trans" data-en="WhatsApp / Phone" data-si="දුරකථන අංකය">WhatsApp / Phone</label>
                                    <input type="tel" name="phone" class="form-control" placeholder="+94 7X XXX XXXX" required>
                                </div>
                                <div class="col-6">
                                    <label class="form-label small fw-bold text-dark lkgm-trans" data-en="Apparel Segment" data-si="ඇඟලුම් අංශය">Apparel Segment</label>
                                    <select name="segment" class="form-select" required>
                                        <option value="Garment Manufacturer" class="lkgm-trans" data-en="Garment Manufacturer" data-si="ඇඟලුම් නිෂ්පාදක">Garment Manufacturer</option>
                                        <option value="Fashion Brand" class="lkgm-trans" data-en="Fashion Retail Brand" data-si="විලාසිතා සිල්ලර සන්නාම">Fashion Retail Brand</option>
                                        <option value="Clothing Wholesaler" class="lkgm-trans" data-en="Clothing Wholesaler" data-si="ඇඳුම් තොග වෙළඳුන්">Clothing Wholesaler</option>
                                        <option value="Textile & Fabric" class="lkgm-trans" data-en="Textile & Fabric Supplier" data-si="රෙදිපිළි සැපයුම්කරු">Textile & Fabric Supplier</option>
                                        <option value="Uniforms / Sportswear" class="lkgm-trans" data-en="Uniforms & Sportswear" data-si="නිල ඇඳුම් සහ ක්‍රීඩා ඇඳුම්">Uniforms & Sportswear</option>
                                        <option value="Export Apparel" class="lkgm-trans" data-en="Export-Oriented Apparel" data-si="අපනයන ඇඟලුම්">Export-Oriented Apparel</option>
                                    </select>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-lkgm-primary w-100 py-2 mt-2">
                                <span class="lkgm-trans" data-en="Schedule Live Garment Demo" data-si="සජීවී ඇඟලුම් ඩෙමෝව වෙන්කරගන්න">Schedule Live Garment Demo</span>
                                <i class="fas fa-arrow-right ms-2"></i>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CORE APPAREL MODULES GRID -->
    <section class="lkgm-section bg-light-lkgm" id="apparel-modules">
        <div class="container">
            <div class="text-center mb-5">
                <span class="section-badge-lkgm lkgm-trans" data-en="Complete Apparel Lifecycle" data-si="සම්පූර්ණ ඇඟලුම් ක්‍රියාවලිය">Complete Apparel Lifecycle</span>
                <h2 class="section-title-lkgm lkgm-trans" 
                    data-en="Purpose-Built Features for Sri Lanka's Garment Industry" 
                    data-si="ශ්‍රී ලංකාවේ ඇඟලුම් ක්ෂේත්‍රය සඳහා විශේෂිත පහසුකම්">
                    Purpose-Built Features for Sri Lanka's Garment Industry
                </h2>
                <p class="text-muted max-w-700 mx-auto lkgm-trans" 
                    data-en="From fabric roll inspection and BOM costing to line balancing, wholesale showroom POS, and Colombo Port container export packing lists."
                    data-si="රෙදි රෝල් පරීක්ෂාව සහ BOM පිරිවැය ගණනයේ සිට නිෂ්පාදන පෙළ සමබර කිරීම, තොග POS සහ කොළඹ වරාය අපනයන ලේඛන දක්වා.">
                    From fabric roll inspection and BOM costing to line balancing, wholesale showroom POS, and Colombo Port container export packing lists.
                </p>
            </div>

            <div class="row g-4">
                <div class="col-md-6 col-lg-4">
                    <div class="lkgm-card">
                        <div class="lkgm-card-icon"><i class="fas fa-th"></i></div>
                        <h4 class="lkgm-trans" data-en="Style, Size & Color 3D Matrix" data-si="විලාසිතා, ප්‍රමාණ සහ වර්ණ Matrix">Style, Size & Color 3D Matrix</h4>
                        <p class="lkgm-trans" data-en="Track millions of apparel variants seamlessly without catalog bloating across XS to XXL and multiple seasonal color shades." data-si="XS සිට XXL දක්වා සියලු ප්‍රමාණ සහ වර්ණ කාණ්ඩ එකම තැනකින් පහසුවෙන් පාලනය කරන්න.">Track millions of apparel variants seamlessly without catalog bloating across XS to XXL and multiple seasonal color shades.</p>
                        <ul class="lkgm-checklist">
                            <li class="lkgm-trans" data-en="<i class='fas fa-check-circle'></i> Single-click size/color creation" data-si="<i class='fas fa-check-circle'></i> එක් ක්ලික් එකකින් ප්‍රමාණ/වර්ණ සෑදීම"><i class="fas fa-check-circle"></i> Single-click size/color creation</li>
                            <li class="lkgm-trans" data-en="<i class='fas fa-check-circle'></i> Barcode generation per variant" data-si="<i class='fas fa-check-circle'></i> එක් එක් මාදිලියට බාර්කෝඩ් සැකසීම"><i class="fas fa-check-circle"></i> Barcode generation per variant</li>
                            <li class="lkgm-trans" data-en="<i class='fas fa-check-circle'></i> Matrix stock lookup on POS" data-si="<i class='fas fa-check-circle'></i> POS හි Matrix තොග සෙවීම"><i class="fas fa-check-circle"></i> Matrix stock lookup on POS</li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="lkgm-card">
                        <div class="lkgm-card-icon"><i class="fas fa-scroll"></i></div>
                        <h4 class="lkgm-trans" data-en="Fabric Roll & Trims Inventory" data-si="රෙදි රෝල් සහ උපාංග තොග">Fabric Roll & Trims Inventory</h4>
                        <p class="lkgm-trans" data-en="Track fabric rolls by roll number, GSM, shrinkage rate, meterage/yardage, and shade lot with trims consumption logs." data-si="රෝල් අංකය, GSM, හැකිලීමේ ප්‍රතිශතය, මීටර්/යාර ප්‍රමාණය සහ සෙවන කාණ්ඩය අනුව රෙදි රෝල් නිරීක්ෂණය.">Track fabric rolls by roll number, GSM, shrinkage rate, meterage/yardage, and shade lot with trims consumption logs.</p>
                        <ul class="lkgm-checklist">
                            <li class="lkgm-trans" data-en="<i class='fas fa-check-circle'></i> Roll-by-roll barcode tagging" data-si="<i class='fas fa-check-circle'></i> රෝල් මට්ටමේ බාර්කෝඩ් ලේබල්"><i class="fas fa-check-circle"></i> Roll-by-roll barcode tagging</li>
                            <li class="lkgm-trans" data-en="<i class='fas fa-check-circle'></i> GSM, shrinkage & shade batching" data-si="<i class='fas fa-check-circle'></i> GSM සහ සෙවන කාණ්ඩගත කිරීම"><i class="fas fa-check-circle"></i> GSM, shrinkage & shade batching</li>
                            <li class="lkgm-trans" data-en="<i class='fas fa-check-circle'></i> Zippers, buttons & thread logs" data-si="<i class='fas fa-check-circle'></i> සිපර්, බොත්තම් සහ නූල් වාර්තා"><i class="fas fa-check-circle"></i> Zippers, buttons & thread logs</li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="lkgm-card">
                        <div class="lkgm-card-icon"><i class="fas fa-cut"></i></div>
                        <h4 class="lkgm-trans" data-en="Cut-to-Pack Manufacturing Floor" data-si="Cut-to-Pack නිෂ්පාදන මට්ටම">Cut-to-Pack Manufacturing Floor</h4>
                        <p class="lkgm-trans" data-en="Monitor cutting table yield, bundling, stitching lines, AQL quality inspections, and final carton packing." data-si="කැපුම් මේස අස්වැන්න, මිටි බැඳීම, මැහුම් පෙළ, AQL තත්ත්ව පරීක්ෂණ සහ කාටන් ඇසුරුම්.">Monitor cutting table yield, bundling, stitching lines, AQL quality inspections, and final carton packing.</p>
                        <ul class="lkgm-checklist">
                            <li class="lkgm-trans" data-en="<i class='fas fa-check-circle'></i> Cutting order yield & wastage" data-si="<i class='fas fa-check-circle'></i> කැපුම් අස්වැන්න සහ අපතේ යාම"><i class="fas fa-check-circle"></i> Cutting order yield & wastage</li>
                            <li class="lkgm-trans" data-en="<i class='fas fa-check-circle'></i> Stitching line job-card tracking" data-si="<i class='fas fa-check-circle'></i> මැහුම් පෙළ රැකියා කාඩ්පත්"><i class="fas fa-check-circle"></i> Stitching line job-card tracking</li>
                            <li class="lkgm-trans" data-en="<i class='fas fa-check-circle'></i> AQL 2.5 / 4.0 QC inspection logs" data-si="<i class='fas fa-check-circle'></i> AQL තත්ත්ව පරීක්ෂණ වාර්තා"><i class="fas fa-check-circle"></i> AQL 2.5 / 4.0 QC inspection logs</li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="lkgm-card">
                        <div class="lkgm-card-icon"><i class="fas fa-file-invoice-dollar"></i></div>
                        <h4 class="lkgm-trans" data-en="Export-Oriented BOI Invoicing" data-si="අපනයන BOI ඉන්වොයිසි">Export-Oriented BOI Invoicing</h4>
                        <p class="lkgm-trans" data-en="Multi-currency export proformas, Letter of Credit (L/C) tracking, bonded warehouse stock, and container packing manifests." data-si="බහු-මුදල් අපනයන ලේඛන, LC ණයවර ලිපි, බදු රහිත ගබඩා තොග සහ බහාලුම් ඇසුරුම් ලැයිස්තු.">Multi-currency export proformas, Letter of Credit (L/C) tracking, bonded warehouse stock, and container packing manifests.</p>
                        <ul class="lkgm-checklist">
                            <li class="lkgm-trans" data-en="<i class='fas fa-check-circle'></i> Multi-currency (USD, EUR, GBP)" data-si="<i class='fas fa-check-circle'></i> බහු-මුදල් (USD, EUR, GBP)"><i class="fas fa-check-circle"></i> Multi-currency (USD, EUR, GBP)</li>
                            <li class="lkgm-trans" data-en="<i class='fas fa-check-circle'></i> Export packing list generator" data-si="<i class='fas fa-check-circle'></i> අපනයන ඇසුරුම් ලැයිස්තු සැකසීම"><i class="fas fa-check-circle"></i> Export packing list generator</li>
                            <li class="lkgm-trans" data-en="<i class='fas fa-check-circle'></i> BOI customs compliance logs" data-si="<i class='fas fa-check-circle'></i> BOI රේගු අනුකූලතා වාර්තා"><i class="fas fa-check-circle"></i> BOI customs compliance logs</li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="lkgm-card">
                        <div class="lkgm-card-icon"><i class="fas fa-store"></i></div>
                        <h4 class="lkgm-trans" data-en="Wholesale Showroom & Retail POS" data-si="තොග ප්‍රදර්ශනාගාර සහ POS">Wholesale Showroom & Retail POS</h4>
                        <p class="lkgm-trans" data-en="Manage Pettah/Colombo wholesale bulk buyer rates, customer credit ledgers, and retail brand showroom checkouts." data-si="පිටකොටුව/කොළඹ තොග ගැණුම්කරු මිල ගණන්, පාරිභෝගික ණය සීමා සහ ප්‍රදර්ශනාගාර POS බිල්පත්.">Manage Pettah/Colombo wholesale bulk buyer rates, customer credit ledgers, and retail brand showroom checkouts.</p>
                        <ul class="lkgm-checklist">
                            <li class="lkgm-trans" data-en="<i class='fas fa-check-circle'></i> Tiered wholesale buyer pricing" data-si="<i class='fas fa-check-circle'></i> ස්ථර අනුව තොග මිල ගණන්"><i class="fas fa-check-circle"></i> Tiered wholesale buyer pricing</li>
                            <li class="lkgm-trans" data-en="<i class='fas fa-check-circle'></i> Customer credit limit control" data-si="<i class='fas fa-check-circle'></i> පාරිභෝගික ණය සීමා පාලනය"><i class="fas fa-check-circle"></i> Customer credit limit control</li>
                            <li class="lkgm-trans" data-en="<i class='fas fa-check-circle'></i> Barcode thermal receipt printing" data-si="<i class='fas fa-check-circle'></i> බාර්කෝඩ් තාප රිසිට්පත් මුද්‍රණය"><i class="fas fa-check-circle"></i> Barcode thermal receipt printing</li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="lkgm-card">
                        <div class="lkgm-card-icon"><i class="fas fa-chart-line"></i></div>
                        <h4 class="lkgm-trans" data-en="Garment Costing & Profitability" data-si="ඇඟලුම් පිරිවැය සහ ලාභදායිතාවය">Garment Costing & Profitability</h4>
                        <p class="lkgm-trans" data-en="Calculate pre-order costing vs actual landed production cost per piece to protect factory margins on every buyer PO." data-si="සෑම ගැනුම්කරු ඇණවුමකදීම කර්මාන්තශාලා ලාභය ආරක්ෂා කර ගැනීමට ඇස්තමේන්තු සහ සැබෑ පිරිවැය සංසන්දනය.">Calculate pre-order costing vs actual landed production cost per piece to protect factory margins on every buyer PO.</p>
                        <ul class="lkgm-checklist">
                            <li class="lkgm-trans" data-en="<i class='fas fa-check-circle'></i> Landed cost auto-distribution" data-si="<i class='fas fa-check-circle'></i> වියදම් ස්වයංක්‍රීයව බෙදාහැරීම"><i class="fas fa-check-circle"></i> Landed cost auto-distribution</li>
                            <li class="lkgm-trans" data-en="<i class='fas fa-check-circle'></i> Direct labor + overhead tracking" data-si="<i class='fas fa-check-circle'></i> ශ්‍රම සහ පොදු කාර්ය පිරිවැය"><i class="fas fa-check-circle"></i> Direct labor + overhead tracking</li>
                            <li class="lkgm-trans" data-en="<i class='fas fa-check-circle'></i> Order-wise profit & loss summary" data-si="<i class='fas fa-check-circle'></i> ඇණවුම් මට්ටමේ ලාභ-අලාභ වාර්තා"><i class="fas fa-check-circle"></i> Order-wise profit & loss summary</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FINAL CTA -->
    <section class="lkgm-section bg-dark text-white text-center" style="background: #0f302b !important;">
        <div class="container">
            <h2 class="fw-bold mb-3 lkgm-trans" data-en="Scale Your Sri Lanka Garment & Apparel Operations" data-si="ඔබේ ඇඟලුම් ව්‍යාපාරය දියුණු කරගන්න">Scale Your Sri Lanka Garment & Apparel Operations</h2>
            <p class="text-light opacity-75 max-w-700 mx-auto mb-4 lkgm-trans"
                data-en="Eliminate fabric wastage, control trims inventory, and gain 100% real-time visibility from cutting table to export container shipping."
                data-si="රෙදි නාස්තිය අවම කර, උපාංග තොග පාලනය කර, කැපුම් මේසයේ සිට අපනයන නැව්ගත කිරීම දක්වා 100% සජීවී දැක්මක් ලබාගන්න.">
                Eliminate fabric wastage, control trims inventory, and gain 100% real-time visibility from cutting table to export container shipping.
            </p>
            <div class="d-flex justify-content-center gap-3 flex-wrap">
                <a href="#demo-form" class="btn btn-lkgm-primary px-4 py-3">
                    <i class="fas fa-calendar-check me-2"></i>
                    <span class="lkgm-trans" data-en="Request Garment ERP Demo" data-si="ඇඟලුම් ERP ඩෙමෝ එකක් ඉල්ලන්න">Request Garment ERP Demo</span>
                </a>
                <a href="erp-software-sri-lanka.php" class="btn btn-lkgm-outline px-4 py-3">
                    <i class="fas fa-arrow-left me-2"></i>
                    <span class="lkgm-trans" data-en="View Main Sri Lanka ERP" data-si="ප්‍රධාන ශ්‍රී ලංකා ERP පිටුව">View Main Sri Lanka ERP</span>
                </a>
            </div>
        </div>
    </section>

</div>

<script>
function switchGmLang(lang) {
    var btnEn = document.getElementById('btnGmLangEn');
    var btnSi = document.getElementById('btnGmLangSi');
    
    localStorage.setItem('digify_lk_lang', lang);
    
    if (lang === 'si') {
        if (btnSi) btnSi.classList.add('active');
        if (btnEn) btnEn.classList.remove('active');
        document.querySelectorAll('.lkgm-trans').forEach(function(el) {
            var siText = el.getAttribute('data-si');
            if (siText) { el.innerHTML = siText; }
        });
        document.querySelectorAll('.lkgm-trans-ph').forEach(function(el) {
            var siPh = el.getAttribute('data-si-ph');
            if (siPh) { el.setAttribute('placeholder', siPh); }
        });
    } else {
        if (btnEn) btnEn.classList.add('active');
        if (btnSi) btnSi.classList.remove('active');
        document.querySelectorAll('.lkgm-trans').forEach(function(el) {
            var enText = el.getAttribute('data-en');
            if (enText) { el.innerHTML = enText; }
        });
        document.querySelectorAll('.lkgm-trans-ph').forEach(function(el) {
            var enPh = el.getAttribute('data-en-ph');
            if (enPh) { el.setAttribute('placeholder', enPh); }
        });
    }
}

document.addEventListener('DOMContentLoaded', function() {
    var savedLang = localStorage.getItem('digify_lk_lang');
    if (savedLang) {
        switchGmLang(savedLang);
    }
});
</script>

<?php include(__DIR__ . '/../../footer.php'); ?>
