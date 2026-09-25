<?php 
include_once(__DIR__ . '/../../db.php');
include_once(__DIR__ . '/../../fetch_meta.php');

$pageTitle = "Carpet Business ERP Software in Afghanistan | Handmade Rugs & Export ERP";
$pageDescription = "Manage Afghan handmade carpets, designs, master artisans, raw wool inventory, export orders, and international payments with Digify Carpet ERP in Afghanistan.";
$pageKeywords = "Carpet ERP Afghanistan, Afghan carpet software, handmade rug ERP Afghanistan, carpet export software Kabul, artisan management software Afghanistan, wool inventory ERP";
$pageCanonical = "https://www.digifysoft.in/carpet-erp-software-afghanistan";

include(__DIR__ . '/../../top.php');
include(__DIR__ . '/../../header.php');
?>

<style>
/* Afghanistan Carpet Suite Design System */
.afcr-page-wrapper {
    font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
    color: #1e293b;
    overflow-x: hidden;
}

/* RTL Mode */
.rtl-mode { direction: rtl; text-align: right; }
.rtl-mode .text-center { text-align: center !important; }
.rtl-mode .me-2 { margin-left: 0.5rem !important; margin-right: 0 !important; }
.rtl-mode .ms-2 { margin-right: 0.5rem !important; margin-left: 0 !important; }

/* Hero */
.afcr-hero {
    background: linear-gradient(135deg, #450a0a 0%, #7f1d1d 50%, #991b1b 100%);
    color: #ffffff;
    padding: 70px 0 85px;
    position: relative;
    overflow: hidden;
    border-bottom: 4px solid #f59e0b;
}
.afcr-hero::before {
    content: '';
    position: absolute;
    top: -15%;
    right: -10%;
    width: 650px;
    height: 650px;
    background: radial-gradient(circle, rgba(245, 158, 11, 0.25) 0%, rgba(220, 38, 38, 0.15) 50%, rgba(0, 0, 0, 0) 75%);
    border-radius: 50%;
    pointer-events: none;
}
.afcr-hero-badge {
    background: rgba(245, 158, 11, 0.2);
    border: 1px solid rgba(253, 224, 71, 0.45);
    color: #fde047;
    font-size: 13px;
    font-weight: 700;
    padding: 7px 18px;
    border-radius: 30px;
    display: inline-flex;
    align-items: center;
    gap: 8px;
    margin-bottom: 18px;
}
.afcr-hero h1 {
    font-size: 42px;
    font-weight: 900;
    line-height: 1.25;
    margin-bottom: 18px;
    letter-spacing: -0.5px;
}
.afcr-hero-sub {
    font-size: 18px;
    font-weight: 600;
    color: #fef08a;
    line-height: 1.5;
    margin-bottom: 14px;
}
.afcr-hero-desc {
    font-size: 16px;
    line-height: 1.7;
    color: rgba(255, 255, 255, 0.88);
    max-width: 700px;
    margin-bottom: 28px;
}

/* Language Switcher */
.lang-toggle-bar {
    display: inline-flex;
    background: rgba(255, 255, 255, 0.1);
    border: 1px solid rgba(255, 255, 255, 0.2);
    border-radius: 30px;
    padding: 4px;
    gap: 4px;
    margin-bottom: 22px;
}
.lang-pill {
    background: transparent;
    border: none;
    color: rgba(255, 255, 255, 0.85);
    font-size: 13px;
    font-weight: 700;
    padding: 6px 14px;
    border-radius: 20px;
    cursor: pointer;
    transition: all 0.2s ease;
}
.lang-pill.active {
    background: #f59e0b;
    color: #1e293b;
    box-shadow: 0 2px 6px rgba(0,0,0,0.2);
}

/* Form */
.afcr-hero-form-card {
    background: #ffffff;
    border-radius: 16px;
    padding: 28px 24px;
    box-shadow: 0 20px 45px rgba(0, 0, 0, 0.35);
    color: #1e293b;
    border: 1px solid rgba(255, 255, 255, 0.2);
}
.afcr-hero-form-card h3 {
    font-size: 20px;
    font-weight: 800;
    color: #0f172a;
    margin-bottom: 6px;
}
.afcr-hero-form-card p {
    font-size: 13px;
    color: #64748b;
    margin-bottom: 18px;
}

/* Section styling */
.afcr-section { padding: 60px 0; }
.afcr-section-title {
    font-size: 32px;
    font-weight: 800;
    color: #0f172a;
    margin-bottom: 12px;
    letter-spacing: -0.3px;
}
.afcr-section-sub {
    font-size: 16px;
    color: #64748b;
    max-width: 680px;
    margin: 0 auto 40px;
}

/* Cards */
.afcr-card {
    background: #ffffff;
    border: 1px solid #e2e8f0;
    border-radius: 14px;
    padding: 24px;
    height: 100%;
    transition: all 0.3s ease;
    box-shadow: 0 4px 6px -1px rgba(0,0,0,0.05);
}
.afcr-card:hover {
    transform: translateY(-4px);
    box-shadow: 0 15px 30px rgba(0,0,0,0.08);
    border-color: #f59e0b;
}
.afcr-card-icon {
    width: 52px;
    height: 52px;
    border-radius: 12px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 24px;
    margin-bottom: 16px;
    background: rgba(185, 28, 28, 0.1);
    color: #b91c1c;
}
.afcr-card h4 {
    font-size: 18px;
    font-weight: 700;
    color: #0f172a;
    margin-bottom: 10px;
}
.afcr-card p {
    font-size: 14px;
    color: #64748b;
    line-height: 1.6;
    margin-bottom: 0;
}

/* Rug Types Pills */
.carpet-type-badge {
    background: #f8fafc;
    border: 1px solid #e2e8f0;
    padding: 10px 16px;
    border-radius: 8px;
    font-size: 14px;
    font-weight: 600;
    color: #334155;
    display: flex;
    align-items: center;
    gap: 8px;
    transition: all 0.2s ease;
}
.carpet-type-badge:hover {
    background: #fef2f2;
    border-color: #ef4444;
    color: #991b1b;
}

/* Buttons */
.btn-afcr-primary {
    background: #dc2626;
    color: #ffffff;
    font-weight: 700;
    border-radius: 8px;
    padding: 12px 24px;
    border: none;
    transition: all 0.2s;
}
.btn-afcr-primary:hover {
    background: #b91c1c;
    color: #ffffff;
    box-shadow: 0 6px 16px rgba(220, 38, 38, 0.35);
}
.btn-afcr-outline {
    border: 2px solid rgba(255,255,255,0.4);
    color: #ffffff;
    font-weight: 700;
    border-radius: 8px;
    padding: 12px 24px;
    background: transparent;
}
.btn-afcr-outline:hover {
    background: #ffffff;
    color: #7f1d1d;
}

/* Accordion */
.accordion-button:not(.collapsed) {
    background-color: #fef2f2;
    color: #991b1b;
    font-weight: 700;
}

@media (max-width: 991px) {
    .afcr-hero { padding: 45px 0 60px; text-align: center; }
    .afcr-hero h1 { font-size: 30px; }
    .afcr-hero-desc { margin: 0 auto 24px; }
    .afcr-hero-form-card { margin-top: 30px; text-align: left; }
    .rtl-mode .afcr-hero-form-card { text-align: right; }
}
</style>

<div class="afcr-page-wrapper" id="afcrWrapper">

    <!-- HERO SECTION -->
    <section class="afcr-hero">
        <div class="container">
            <!-- Language Switcher Bar -->
            <div class="text-center text-lg-start mb-2">
                <div class="lang-toggle-bar">
                    <button type="button" class="lang-pill active" id="btnCrLangEn" onclick="switchCrLang('en')">🇬🇧 English</button>
                    <button type="button" class="lang-pill" id="btnCrLangFa" onclick="switchCrLang('fa')">🇦🇫 دری (Farsi)</button>
                    <button type="button" class="lang-pill" id="btnCrLangPs" onclick="switchCrLang('ps')">🇦🇫 پښتو (Pashto)</button>
                </div>
            </div>

            <div class="row align-items-center">
                <div class="col-lg-7">
                    <div class="afcr-hero-badge afcr-trans" 
                        data-en="🧶 #1 Handcrafted Carpet & Rug ERP in Afghanistan" 
                        data-fa="🧶 سیستم پیشرفته مدیریت قالین و گلیم دستی در افغانستان" 
                        data-ps="🧶 په افغانستان کې د لاسي غاليو او ټغرونو مخکښ سيستم">
                        🧶 #1 Handcrafted Carpet & Rug ERP in Afghanistan
                    </div>
                    <h1 class="afcr-trans"
                        data-en="Carpet Business ERP Software in Afghanistan"
                        data-fa="نرم‌افزار جامع مدیریت تجارت قالین و قالین‌بافی در افغانستان"
                        data-ps="په افغانستان کې د غاليو د سوداګرۍ او توليد لپاره ERP سافټویر">
                        Carpet Business ERP Software in Afghanistan
                    </h1>
                    <div class="afcr-hero-sub afcr-trans"
                        data-en="Artisan Records • Raw Wool Inventory • Knot Density Specs • Global Export Proformas"
                        data-fa="ثبت بافنده‌ها • موجودی تار و پشم • مشخصات گره و طرح • اسناد صادرات بین‌المللی"
                        data-ps="د اوبدونکو حسابونه • د وړیو ذخیره • د ګوتو مشخصات • نړیوال صادراتي اسناد">
                        Artisan Records • Raw Wool Inventory • Knot Density Specs • Global Export Proformas
                    </div>
                    <p class="afcr-hero-desc afcr-trans"
                        data-en="Manage handmade carpets, Kazak designs, Chobi rugs, artisan wages, raw silk/wool inventory, multi-warehouse stock, wholesale dispatches, and export shipments with one integrated ERP platform."
                        data-fa="مدیریت قالین‌های دستباف، طرح‌های چوبی و قزاق، دستمزد قالین‌بافان، موجودی پشم و ابریشم، گدام‌های مرکزی و صادرات به بازارهای جهانی را با دیجی‌فای دیجیتالی سازید."
                        data-ps="لاسي غالي، چوبي او قزاق ډیزاینونه، د بافندګانو مزدوري، د تارونو او وړیو موجودي او نړیوال صادرات ټول په یو ډیجیټل سیسټم کې اداره کړئ.">
                        Manage handmade carpets, Kazak designs, Chobi rugs, artisan wages, raw silk/wool inventory, multi-warehouse stock, wholesale dispatches, and export shipments with one integrated ERP platform.
                    </p>
                    <div class="d-flex gap-3 flex-wrap justify-content-center justify-content-lg-start">
                        <a href="#demo-form" class="btn btn-afcr-primary"><i class="fas fa-file-invoice me-2"></i> <span class="afcr-trans" data-en="Get Free Carpet ERP Demo" data-fa="درخواست دموی قالین ERP" data-ps="د غاليو وړیا ډیمو ترلاسه کړئ">Get Free Carpet ERP Demo</span></a>
                        <a href="tel:+919876543210" class="btn btn-afcr-outline"><i class="fas fa-headset me-2"></i> <span class="afcr-trans" data-en="Talk to Carpet ERP Expert" data-fa="تماس با کارشناس قالین" data-ps="د متخصص سره اړیکه">Talk to Carpet ERP Expert</span></a>
                    </div>
                </div>

                <!-- Form Card -->
                <div class="col-lg-5" id="demo-form">
                    <div class="afcr-hero-form-card">
                        <h3 class="afcr-trans" data-en="Request Carpet ERP Consultation" data-fa="درخواست مشاوره تخصصی قالین" data-ps="د غاليو سيستم مشاوره غوښتنه">Request Carpet ERP Consultation</h3>
                        <p class="afcr-trans" data-en="Tailored for carpet exporters, looms, artisans & showrooms." data-fa="ویژه صادرکنندگان قالین، کارگاه‌های بافندگی و نمایشگاه‌ها." data-ps="د غاليو صادروونکو، کارخانو او دوکانونو لپاره.">Tailored for carpet exporters, looms, artisans & showrooms.</p>
                        
                        <form action="send_lead.php" method="POST">
                            <div class="mb-3">
                                <label class="form-label small fw-bold afcr-trans" data-en="Full Name" data-fa="نام مکمل" data-ps="بشپړ نوم">Full Name</label>
                                <input type="text" name="name" class="form-control afcr-trans-ph" placeholder="e.g. Haji Ahmadullah" data-en-ph="e.g. Haji Ahmadullah" data-fa-ph="مثال: حاجی احمدالله" data-ps-ph="مثال: حاجي احمدالله" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label small fw-bold afcr-trans" data-en="Carpet Company / Loom Name" data-fa="نام شرکت قالین / کارگاه" data-ps="د شرکت یا کارخانې نوم">Carpet Company / Loom Name</label>
                                <input type="text" name="company" class="form-control afcr-trans-ph" placeholder="e.g. Kabul Silk & Wool Rugs" data-en-ph="e.g. Kabul Silk & Wool Rugs" data-fa-ph="مثال: شرکت قالین‌بافی کابل" data-ps-ph="مثال: د کابل قالین تولیدي شرکت" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label small fw-bold afcr-trans" data-en="WhatsApp / Phone Number" data-fa="شماره واتساپ / تماس" data-ps="د واټساپ / اړیکې شمېره">WhatsApp / Phone Number</label>
                                <input type="tel" name="phone" class="form-control" placeholder="+93 7X XXX XXXX" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label small fw-bold afcr-trans" data-en="Business Focus" data-fa="نوعیت فعالیت" data-ps="د سوداګرۍ ډول">Business Focus</label>
                                <select name="business_type" class="form-select">
                                    <option value="Carpet Export & Wholesale">Carpet Export & Wholesale</option>
                                    <option value="Loom & Weaver Management">Loom & Weaver Management</option>
                                    <option value="Showroom & Retail Gallery">Showroom & Retail Gallery</option>
                                    <option value="Wool & Dye Processing">Wool & Dye Processing</option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-afcr-primary w-100 py-2 fw-bold afcr-trans"
                                data-en="Request Free Demonstration"
                                data-fa="ارسال درخواست دمو رایگان"
                                data-ps="وړیا ډیمو غوښتنه واستوئ">
                                Request Free Demonstration
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CARPET VARIETIES & TRADITIONAL CRAFT SECTION -->
    <section class="afcr-section bg-light">
        <div class="container">
            <div class="text-center">
                <h2 class="afcr-section-title afcr-trans" 
                    data-en="Engineered for Afghan Carpet Traditions & Export Standards"
                    data-fa="سازگار با اصالت قالین افغانستان و استانداردهای صادرات جهانی"
                    data-ps="د افغاني غاليو له دودیز کیفیت او نړیوالو صادراتي معیارونو سره برابر">
                    Engineered for Afghan Carpet Traditions & Export Standards
                </h2>
                <p class="afcr-section-sub afcr-trans"
                    data-en="Manage distinct carpet collections with high-resolution photo cataloging, exact dimensions in meters and feet, knot density (KPSI), and dye origin."
                    data-fa="مدیریت انواع قالین با کاتالوگ تصویری باکیفیت، ابعاد دقیق، شمارش گره‌ها و منشأ رنگ‌های طبیعی."
                    data-ps="د غاليو بېلابېل ډولونه د لوړ کیفیت انځورونو، دقیقو اندازو او د غوټو د شمیر سره ثبت کړئ.">
                    Manage distinct carpet collections with high-resolution photo cataloging, exact dimensions in meters and feet, knot density (KPSI), and dye origin.
                </p>
            </div>

            <div class="row g-3 justify-content-center">
                <div class="col-6 col-md-4 col-lg-3"><div class="carpet-type-badge"><i class="fas fa-layer-group text-danger"></i> <span>Chobi Rugs (چوبی)</span></div></div>
                <div class="col-6 col-md-4 col-lg-3"><div class="carpet-type-badge"><i class="fas fa-layer-group text-danger"></i> <span>Kazak Designs (قزاق)</span></div></div>
                <div class="col-6 col-md-4 col-lg-3"><div class="carpet-type-badge"><i class="fas fa-layer-group text-danger"></i> <span>Maurish & Turkmen (موری)</span></div></div>
                <div class="col-6 col-md-4 col-lg-3"><div class="carpet-type-badge"><i class="fas fa-layer-group text-danger"></i> <span>Kunduz Khal Mohammadi</span></div></div>
                <div class="col-6 col-md-4 col-lg-3"><div class="carpet-type-badge"><i class="fas fa-layer-group text-danger"></i> <span>Herati & Silk Carpets (ابریشم)</span></div></div>
                <div class="col-6 col-md-4 col-lg-3"><div class="carpet-type-badge"><i class="fas fa-layer-group text-danger"></i> <span>Balkh Kilims & Soumaks (گلیم)</span></div></div>
                <div class="col-6 col-md-4 col-lg-3"><div class="carpet-type-badge"><i class="fas fa-layer-group text-danger"></i> <span>Vegetable Dye Rugs (رنگ گیاهی)</span></div></div>
                <div class="col-6 col-md-4 col-lg-3"><div class="carpet-type-badge"><i class="fas fa-layer-group text-danger"></i> <span>Antique & Vintage Restored</span></div></div>
            </div>
        </div>
    </section>

    <!-- CORE MODULES -->
    <section class="afcr-section">
        <div class="container">
            <div class="text-center">
                <h2 class="afcr-section-title afcr-trans"
                    data-en="Complete Carpet Business Management Modules"
                    data-fa="بخش‌های کلیدی نرم‌افزار مدیریت قالین"
                    data-ps="د غاليو سوداګرۍ مهمې برخې">
                    Complete Carpet Business Management Modules
                </h2>
                <p class="afcr-section-sub afcr-trans"
                    data-en="From loom-side artisan raw wool issuance to air cargo export manifests and Sarafi exchange payments."
                    data-fa="از تحویل پشم خام به بافنده تا بارنامه گمرکی، صادرات هوایی و تسویه حساب صرافی."
                    data-ps="بافندګانو ته د خامو توکو ورکړې څخه تر هوايي بار او صرافۍ حسابونو پورې.">
                    From loom-side artisan raw wool issuance to air cargo export manifests and Sarafi exchange payments.
                </p>
            </div>

            <div class="row g-4">
                <!-- Card 1 -->
                <div class="col-md-6 col-lg-4">
                    <div class="afcr-card">
                        <div class="afcr-card-icon"><i class="fas fa-users-cog"></i></div>
                        <h4 class="afcr-trans" data-en="Master Artisan & Loom Contracts" data-fa="مدیریت بافنده‌ها و کارگاه‌های خانگی" data-ps="د اوبدونکو او کارخانو مدیریت">Master Artisan & Loom Contracts</h4>
                        <p class="afcr-trans"
                            data-en="Assign designs, wool rolls, and silk bobbins to weavers. Track progress, square meter completion rate, and piecewise artisan wages."
                            data-fa="ثبت مشخصات بافنده‌ها، توزیع پشم و تار، ثبت پیشرفت بافت و محاسبه دقیق دستمزد بر اساس متر مربع."
                            data-ps="بافندګانو ته د وړیو او نقشو سپارل، د بافت پرمختګ څارنه او د متر مربع له مخې د مزدورۍ حساب کول.">
                            Assign designs, wool rolls, and silk bobbins to weavers. Track progress, square meter completion rate, and piecewise artisan wages.
                        </p>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="col-md-6 col-lg-4">
                    <div class="afcr-card">
                        <div class="afcr-card-icon"><i class="fas fa-boxes"></i></div>
                        <h4 class="afcr-trans" data-en="Raw Wool & Dye Warehouse" data-fa="انبار پشم، ابریشم و مواد رنگرزی" data-ps="د وړیو، ابریشمو او رنګونو ګودام">Raw Wool & Dye Warehouse</h4>
                        <p class="afcr-trans"
                            data-en="Maintain raw Ghazni wool stock, chemical vs. vegetable dyes, warp threads, and finished yarn inventory with low-stock alerts."
                            data-fa="مدیریت موجودی پشم غزنی، رنگ‌های گیاهی و کیمیاوی، تار چله و نخ بافت همراه با هشدارهای کمبود مواد."
                            data-ps="د غزني د وړیو موجودي، طبیعي او کیمیاوي رنګونه، او د کمښت پر مهال سمدستي خبرتیاوې.">
                            Maintain raw Ghazni wool stock, chemical vs. vegetable dyes, warp threads, and finished yarn inventory with low-stock alerts.
                        </p>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="col-md-6 col-lg-4">
                    <div class="afcr-card">
                        <div class="afcr-card-icon"><i class="fas fa-qrcode"></i></div>
                        <h4 class="afcr-trans" data-en="Single-Piece Barcode & Tagging" data-fa="بارکد و شناسه اختصاصی هر تخته قالین" data-ps="د هرې غالۍ ځانګړی بارکوډ او ټیګ">Single-Piece Barcode & Tagging</h4>
                        <p class="afcr-trans"
                            data-en="Generate unique QR/barcodes for each finished rug containing length, width, knot count, artisan ID, photo, and quality grade."
                            data-fa="صدور بارکد و QR اختصاصی برای هر تخته قالین شامل ابعاد، تعداد گره، نام بافنده، عکس و درجه کیفیت."
                            data-ps="د هرې غالۍ لپاره ځانګړی کیو آر کوډ، چې اوږدوالی، سور، د بافنده نوم او کیفیت پکې درج وي.">
                            Generate unique QR/barcodes for each finished rug containing length, width, knot count, artisan ID, photo, and quality grade.
                        </p>
                    </div>
                </div>

                <!-- Card 4 -->
                <div class="col-md-6 col-lg-4">
                    <div class="afcr-card">
                        <div class="afcr-card-icon"><i class="fas fa-plane-departure"></i></div>
                        <h4 class="afcr-trans" data-en="Global Export Proforma & Manifests" data-fa="پیش‌فاکتور و اسناد صادرات خارجی" data-ps="بهرني صادراتي اسناد او پروفرما">Global Export Proforma & Manifests</h4>
                        <p class="afcr-trans"
                            data-en="Issue export proformas, packing lists, customs weight declarations, and certificate of origin attachments for US, EU, and Gulf clients."
                            data-fa="صدور پروفرما، پکینگ لیست صادراتی، اظهارنامه گمرکی وزن و اسناد اصالت قالین برای خریداران بین‌المللی."
                            data-ps="صادراتي پیکنګ لېسټ، د ګمرک د وزن فورمې او د امریکا او اروپا پیرودونکو لپاره د کیفیت تصدیق پاڼې.">
                            Issue export proformas, packing lists, customs weight declarations, and certificate of origin attachments for US, EU, and Gulf clients.
                        </p>
                    </div>
                </div>

                <!-- Card 5 -->
                <div class="col-md-6 col-lg-4">
                    <div class="afcr-card">
                        <div class="afcr-card-icon"><i class="fas fa-money-bill-transfer"></i></div>
                        <h4 class="afcr-trans" data-en="Sarafi & Multi-Currency Ledgers" data-fa="حسابات صرافی و تسویه چندارزی" data-ps="د صرافۍ حسابونه او اسعار">Sarafi & Multi-Currency Ledgers</h4>
                        <p class="afcr-trans"
                            data-en="Track transactions across AFN, USD, EUR, and AED. Maintain Sarafi hawala deposit records, customer advances, and export balances."
                            data-fa="مدیریت حسابات به افغانی، دالر، یورو و درهم. ثبت حواله‌های صرافی، پیش‌پرداخت مشتریان خارجی و مانده حساب‌ها."
                            data-ps="په افغانۍ، ډالرو، یورو او درهمو کې راکړه ورکړه، د صرافۍ حوالې او د پېرودونکو پاتې حسابونه ثبت کړئ.">
                            Track transactions across AFN, USD, EUR, and AED. Maintain Sarafi hawala deposit records, customer advances, and export balances.
                        </p>
                    </div>
                </div>

                <!-- Card 6 -->
                <div class="col-md-6 col-lg-4">
                    <div class="afcr-card">
                        <div class="afcr-card-icon"><i class="fas fa-store"></i></div>
                        <h4 class="afcr-trans" data-en="Showroom & Gallery POS" data-fa="فروشگاه و گالری نمایشگاهی قالین" data-ps="د غاليو دوکان او نندارتون POS">Showroom & Gallery POS</h4>
                        <p class="afcr-trans"
                            data-en="Fast retail checkout for local and tourist buyers, multi-rug comparative billing, consignment sales, and layaway reserve tracking."
                            data-fa="سیستم فروش سریع برای نمایشگاه‌ها، فروش امانی قالین، ثبت بیعانه و فاکتور مشتریان داخلی و توریست‌ها."
                            data-ps="د غاليو نندارتونونو لپاره ګړندی خرڅلاو، د بیعانې حسابونه او د نندارې لپاره د امانت ایښودلو ثبت.">
                            Fast retail checkout for local and tourist buyers, multi-rug comparative billing, consignment sales, and layaway reserve tracking.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ SECTION -->
    <section class="afcr-section bg-light">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="afcr-section-title afcr-trans" data-en="Frequently Asked Questions" data-fa="سوالات متداول درباره قالین ERP" data-ps="د قالین ERP په اړه ډېرې پوښتل شوې پوښتنې">Frequently Asked Questions</h2>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="accordion" id="carpetFaq">
                        <div class="accordion-item mb-3 border rounded">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed afcr-trans" type="button" data-bs-toggle="collapse" data-bs-target="#cf1"
                                    data-en="Can we track each unique carpet individually with its photo and dimensions?"
                                    data-fa="آیا می‌توان هر تخته قالین را با عکس و ابعاد منحصر‌به‌فرد ثبت کرد؟"
                                    data-ps="ایا موږ کولی شو هره غالۍ د خپل انځور او اندازې سره جلا ثبت کړو؟">
                                    Can we track each unique carpet individually with its photo and dimensions?
                                </button>
                            </h2>
                            <div id="cf1" class="accordion-collapse collapse" data-bs-parent="#carpetFaq">
                                <div class="accordion-body text-muted afcr-trans"
                                    data-en="Yes. Digify generates unique serialized barcodes for every single rug, recording width, length, square meters, knot density, artisan details, and catalog images."
                                    data-fa="بلی. سیستم برای هر تخته قالین بارکد و شناسه اختصاصی ایجاد می‌کند و طول، عرض، مساحت، تراکم گره و تصویر آن را ذخیره می‌نماید."
                                    data-ps="هو. ډیجیفای د هرې غالۍ لپاره ځانګړی بارکوډ جوړوي او ټول مشخصات پکې خوندي کوي.">
                                    Yes. Digify generates unique serialized barcodes for every single rug, recording width, length, square meters, knot density, artisan details, and catalog images.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item mb-3 border rounded">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed afcr-trans" type="button" data-bs-toggle="collapse" data-bs-target="#cf2"
                                    data-en="Does the system support Sarafi hawala payments and foreign currencies?"
                                    data-fa="آیا این نرم‌افزار از پرداخت‌های حواله صرافی و ارزهای خارجی پشتیبانی می‌کند؟"
                                    data-ps="ایا دا سیسټم د صرافۍ حوالو او بهرنیو اسعارو ملاتړ کوي؟">
                                    Does the system support Sarafi hawala payments and foreign currencies?
                                </button>
                            </h2>
                            <div id="cf2" class="accordion-collapse collapse" data-bs-parent="#carpetFaq">
                                <div class="accordion-body text-muted afcr-trans"
                                    data-en="Yes. Digify has native multi-currency accounting built-in, allowing carpet exporters to manage balances in USD, EUR, AED, and AFN with Sarafi ledger records."
                                    data-fa="بلی. سیستم دارای حسابداری چندارزی است که به صادرکنندگان اجازه می‌دهد دریافتی‌ها را به دالر، یورو، درهم و افغانی با اسناد صرافی ثبت کنند."
                                    data-ps="هو. ډیجیفای په اسانۍ سره د صرافۍ د حوالو او څو اسعارو حسابونه اداره کوي.">
                                    Yes. Digify has native multi-currency accounting built-in, allowing carpet exporters to manage balances in USD, EUR, AED, and AFN with Sarafi ledger records.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FINAL CTA -->
    <section class="afcr-section bg-dark text-white text-center" style="background: #450a0a !important;">
        <div class="container">
            <h2 class="fw-bold mb-3 afcr-trans" 
                data-en="Modernize Your Afghan Carpet Business Today" 
                data-fa="تجارت قالین خود را با دیجی‌فای به استانداردهای جهانی برسانید"
                data-ps="خپله د غاليو سوداګري د ډیجیفای له لارې عصري کړئ">
                Modernize Your Afghan Carpet Business Today
            </h2>
            <p class="text-light opacity-75 max-w-700 mx-auto mb-4 afcr-trans"
                data-en="Protect weaver relationships, track valuable inventory, and fulfill international orders with confidence."
                data-fa="روابط با بافندگان را مدیریت کنید، موجودی گران‌بهای قالین را محافظت نمایید و سفارشات خارجی را به موقع ارسال کنید."
                data-ps="د اوبدونکو حسابونه روښانه کړئ او نړیوال فرمایشونه په ډاډه زړه بشپړ کړئ.">
                Protect weaver relationships, track valuable inventory, and fulfill international orders with confidence.
            </p>
            <div class="d-flex justify-content-center gap-3 flex-wrap">
                <a href="#demo-form" class="btn btn-afcr-primary px-4 py-3"><i class="fas fa-calendar-check me-2"></i> <span class="afcr-trans" data-en="Request Carpet ERP Demo" data-fa="درخواست دموی قالین" data-ps="د غاليو ډیمو غوښتنه">Request Carpet ERP Demo</span></a>
                <a href="erp-software-afghanistan.php" class="btn btn-afcr-outline px-4 py-3"><i class="fas fa-arrow-left me-2"></i> <span class="afcr-trans" data-en="View Main Afghanistan ERP" data-fa="صفحه اصلی ERP افغانستان" data-ps="د افغانستان اصلي پاڼه">View Main Afghanistan ERP</span></a>
            </div>
        </div>
    </section>

</div>

<script>
function switchCrLang(lang) {
    var btnEn = document.getElementById('btnCrLangEn');
    var btnFa = document.getElementById('btnCrLangFa');
    var btnPs = document.getElementById('btnCrLangPs');
    var wrapper = document.getElementById('afcrWrapper');
    
    localStorage.setItem('digify_af_lang', lang);
    
    [btnEn, btnFa, btnPs].forEach(function(b) { if(b) b.classList.remove('active'); });
    if (lang === 'fa' && btnFa) btnFa.classList.add('active');
    else if (lang === 'ps' && btnPs) btnPs.classList.add('active');
    else if (btnEn) btnEn.classList.add('active');
    
    if (wrapper) {
        if (lang === 'fa' || lang === 'ps') wrapper.classList.add('rtl-mode');
        else wrapper.classList.remove('rtl-mode');
    }
    
    document.querySelectorAll('.afcr-trans').forEach(function(el) {
        var text = el.getAttribute('data-' + lang);
        if (text) { el.innerHTML = text; }
    });
    document.querySelectorAll('.afcr-trans-ph').forEach(function(el) {
        var ph = el.getAttribute('data-' + lang + '-ph');
        if (ph) { el.setAttribute('placeholder', ph); }
    });
}

document.addEventListener('DOMContentLoaded', function() {
    var savedLang = localStorage.getItem('digify_af_lang') || 'en';
    switchCrLang(savedLang);
});
</script>

<?php include(__DIR__ . '/../../footer.php'); ?>
