<?php 
include_once(__DIR__ . '/../../db.php');
include_once(__DIR__ . '/../../fetch_meta.php');

$pageTitle = "ERP Software in Afghanistan | Business Management & Accounting ERP";
$pageDescription = "Powerful ERP software in Afghanistan for retail, supermarkets, wholesale, agriculture, mining, manufacturing, construction, logistics and growing businesses.";
$pageKeywords = "ERP software Afghanistan, ERP software in Afghanistan, best ERP software Afghanistan, business management software Afghanistan, ERP system Afghanistan, cloud ERP Afghanistan, accounting software Afghanistan, inventory management software Afghanistan, POS software Afghanistan, retail ERP Afghanistan, supermarket ERP Afghanistan, wholesale ERP Afghanistan, distribution ERP Afghanistan, agriculture ERP Afghanistan, mining ERP Afghanistan, mining management software Afghanistan, manufacturing ERP Afghanistan, construction ERP Afghanistan, logistics ERP Afghanistan, FMCG ERP Afghanistan, garment ERP Afghanistan, textile ERP Afghanistan, carpet business software Afghanistan, food processing ERP Afghanistan, pharmacy ERP Afghanistan, import export ERP Afghanistan, trading ERP Afghanistan, multi branch ERP Afghanistan, business software Kabul, ERP software Kabul, business management software Kabul";
$pageCanonical = "https://www.digifysoft.in/erp-software-afghanistan";

include(__DIR__ . '/../../top.php');
include(__DIR__ . '/../../header.php');
?>

<style>
/* Afghanistan Suite Design System */
.af-page-wrapper {
    font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
    color: #1e293b;
    overflow-x: hidden;
}

/* RTL Support for Dari & Pashto */
.rtl-mode {
    direction: rtl;
    text-align: right;
}
.rtl-mode .text-center { text-align: center !important; }
.rtl-mode .me-2 { margin-left: 0.5rem !important; margin-right: 0 !important; }
.rtl-mode .ms-2 { margin-right: 0.5rem !important; margin-left: 0 !important; }
.rtl-mode .challenge-card { border-left: 1px solid #fecaca; border-right: 5px solid #ef4444; }
.rtl-mode .accordion-button::after { margin-left: 0; margin-right: auto; }

/* Hero Section */
.af-hero {
    background: linear-gradient(135deg, #111827 0%, #1f2937 40%, #064e3b 100%);
    color: #ffffff;
    padding: 70px 0 85px;
    position: relative;
    overflow: hidden;
    border-bottom: 4px solid #10b981;
}
.af-hero::before {
    content: '';
    position: absolute;
    top: -15%;
    right: -10%;
    width: 680px;
    height: 680px;
    background: radial-gradient(circle, rgba(16, 185, 129, 0.25) 0%, rgba(245, 158, 11, 0.15) 50%, rgba(0, 0, 0, 0) 75%);
    border-radius: 50%;
    pointer-events: none;
}
.text-gradient-af {
    background: linear-gradient(135deg, #34d399 0%, #facc15 50%, #f87171 100%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    display: inline-block;
}
.af-hero-badge {
    background: rgba(16, 185, 129, 0.18);
    border: 1px solid rgba(52, 211, 153, 0.45);
    color: #6ee7b7;
    font-size: 13px;
    font-weight: 700;
    padding: 7px 18px;
    border-radius: 30px;
    display: inline-flex;
    align-items: center;
    gap: 8px;
    margin-bottom: 18px;
}
.af-hero h1 {
    font-size: 42px;
    font-weight: 900;
    line-height: 1.25;
    margin-bottom: 18px;
    letter-spacing: -0.5px;
}
.af-hero-sub {
    font-size: 18px;
    font-weight: 600;
    color: #fde047;
    line-height: 1.5;
    margin-bottom: 14px;
}
.af-hero-desc {
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
    padding: 6px 14px;
    border-radius: 20px;
    cursor: pointer;
    transition: all 0.25s ease;
}
.lang-pill.active {
    background: linear-gradient(135deg, #059669 0%, #10b981 100%);
    color: #ffffff;
    box-shadow: 0 4px 12px rgba(16, 185, 129, 0.4);
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
.btn-af-primary {
    background: linear-gradient(135deg, #059669 0%, #047857 100%);
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
    box-shadow: 0 10px 20px -5px rgba(5, 150, 105, 0.4);
    text-decoration: none;
}
.btn-af-primary:hover {
    background: linear-gradient(135deg, #047857 0%, #065f46 100%);
    color: #ffffff;
    transform: translateY(-2px);
}
.btn-af-outline {
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
.btn-af-outline:hover {
    background: rgba(255, 255, 255, 0.18);
    color: #ffffff;
    transform: translateY(-2px);
}

/* Sections */
.af-section { padding: 75px 0; }
.bg-light-af { background-color: #f8fafc; }
.bg-dark-af { background: #0b1320; color: #ffffff; }
.section-badge-af {
    display: inline-block;
    background: #ecfdf5;
    color: #047857;
    font-size: 12px;
    font-weight: 800;
    text-transform: uppercase;
    letter-spacing: 0.8px;
    padding: 6px 14px;
    border-radius: 20px;
    margin-bottom: 12px;
    border: 1px solid #a7f3d0;
}
.section-badge-af-dark {
    display: inline-block;
    background: rgba(16, 185, 129, 0.18);
    color: #6ee7b7;
    font-size: 12px;
    font-weight: 800;
    text-transform: uppercase;
    letter-spacing: 0.8px;
    padding: 6px 14px;
    border-radius: 20px;
    margin-bottom: 12px;
    border: 1px solid rgba(16, 185, 129, 0.4);
}
.section-title-af {
    font-size: 34px;
    font-weight: 900;
    color: #0f172a;
    line-height: 1.3;
    margin-bottom: 16px;
    letter-spacing: -0.5px;
}
.section-title-af-dark {
    font-size: 34px;
    font-weight: 900;
    color: #ffffff;
    line-height: 1.3;
    margin-bottom: 16px;
    letter-spacing: -0.5px;
}
.section-sub-af {
    font-size: 16px;
    color: #64748b;
    max-width: 780px;
    margin: 0 auto 40px;
    line-height: 1.7;
}
.section-sub-af-dark {
    font-size: 16px;
    color: rgba(255, 255, 255, 0.75);
    max-width: 780px;
    margin: 0 auto 40px;
    line-height: 1.7;
}

/* Feature Cards */
.af-card {
    background: #ffffff;
    border: 1px solid #e2e8f0;
    border-radius: 16px;
    padding: 26px;
    transition: all 0.3s ease;
    height: 100%;
    display: flex;
    flex-direction: column;
}
.af-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 20px 30px -10px rgba(0, 0, 0, 0.08);
    border-color: #6ee7b7;
}
.af-card-icon {
    width: 52px;
    height: 52px;
    border-radius: 14px;
    background: linear-gradient(135deg, #ecfdf5 0%, #d1fae5 100%);
    color: #059669;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 22px;
    margin-bottom: 18px;
}
.af-card h4 {
    font-size: 18px;
    font-weight: 800;
    color: #0f172a;
    margin-bottom: 10px;
}
.af-card p {
    font-size: 14px;
    color: #64748b;
    line-height: 1.6;
    margin-bottom: 16px;
    flex-grow: 1;
}
.af-checklist {
    list-style: none;
    padding: 0;
    margin: 0;
}
.af-checklist li {
    font-size: 13.5px;
    color: #334155;
    margin-bottom: 8px;
    display: flex;
    align-items: center;
    gap: 8px;
}
.af-checklist li i {
    color: #059669;
    font-size: 14px;
    flex-shrink: 0;
}

/* Vertical Promotion Cards */
.vertical-box-af {
    background: #ffffff;
    border: 1px solid #e2e8f0;
    border-radius: 20px;
    padding: 32px;
    position: relative;
    overflow: hidden;
    transition: all 0.3s ease;
    height: 100%;
}
.vertical-box-af:hover {
    border-color: #059669;
    box-shadow: 0 20px 40px -15px rgba(5, 150, 105, 0.15);
    transform: translateY(-4px);
}
.vertical-tag-af {
    position: absolute;
    top: 20px;
    right: 20px;
    background: #d1fae5;
    color: #047857;
    font-size: 12px;
    font-weight: 800;
    padding: 4px 12px;
    border-radius: 20px;
}
.rtl-mode .vertical-tag-af {
    right: auto;
    left: 20px;
}

/* Industry Grid Card */
.industry-grid-card-af {
    background: #ffffff;
    border: 1px solid #e2e8f0;
    border-radius: 16px;
    padding: 22px 18px;
    text-align: center;
    transition: all 0.3s ease;
    height: 100%;
    text-decoration: none;
    display: block;
    color: inherit;
}
.industry-grid-card-af:hover {
    border-color: #059669;
    background: #ecfdf5;
    transform: translateY(-4px);
    box-shadow: 0 15px 30px -10px rgba(0, 0, 0, 0.06);
    color: inherit;
}
.industry-grid-card-af i {
    font-size: 30px;
    color: #059669;
    margin-bottom: 12px;
    display: inline-block;
}
.industry-grid-card-af h5 {
    font-size: 15px;
    font-weight: 800;
    color: #0f172a;
    margin-bottom: 6px;
}
.industry-grid-card-af p {
    font-size: 12.5px;
    color: #64748b;
    line-height: 1.45;
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
    font-size: 16.5px;
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
.stat-box-af {
    background: rgba(255, 255, 255, 0.06);
    border: 1px solid rgba(255, 255, 255, 0.15);
    border-radius: 14px;
    padding: 16px 12px;
    text-align: center;
    transition: all 0.3s ease;
}
.stat-box-af:hover {
    background: rgba(255, 255, 255, 0.1);
    transform: translateY(-2px);
}
.stat-box-af h3 {
    font-size: 26px;
    font-weight: 900;
    color: #facc15;
    margin-bottom: 4px;
    line-height: 1.1;
}
.stat-box-af p {
    font-size: 12px;
    font-weight: 600;
    color: rgba(255, 255, 255, 0.85);
    margin: 0;
    line-height: 1.35;
}

/* FAQ Accordion */
.accordion-af .accordion-item {
    border: 1px solid #e2e8f0;
    border-radius: 12px !important;
    margin-bottom: 14px;
    overflow: hidden;
}
.accordion-af .accordion-button {
    font-weight: 700;
    font-size: 16px;
    color: #0f172a;
    background: #ffffff;
    padding: 18px 22px;
}
.accordion-af .accordion-button:not(.collapsed) {
    color: #047857;
    background: #ecfdf5;
    box-shadow: none;
}
.accordion-af .accordion-body {
    font-size: 14.5px;
    color: #475569;
    line-height: 1.7;
    padding: 20px 22px;
    background: #ffffff;
}

@media (max-width: 991px) {
    .af-hero { padding: 45px 0 55px; }
    .af-hero h1 { font-size: 28px; line-height: 1.3; }
    .af-hero-sub { font-size: 16px; }
    .af-hero-desc { font-size: 14px; }
    .hero-lead-card { margin-top: 25px; padding: 24px 20px; }
    .stat-box-af { padding: 12px 8px; }
    .stat-box-af h3 { font-size: 20px; }
    .stat-box-af p { font-size: 11px; }
    .section-title-af, .section-title-af-dark { font-size: 24px; }
    .vertical-box-af { padding: 20px; }
}
@media (max-width: 576px) {
    .af-hero { padding: 35px 0 45px; }
    .af-hero-badge { font-size: 11px; padding: 6px 12px; white-space: normal; line-height: 1.4; }
    .af-hero h1 { font-size: 23px; }
    .stat-box-af { padding: 10px 6px; border-radius: 10px; }
    .stat-box-af h3 { font-size: 17px; margin-bottom: 2px; }
    .stat-box-af p { font-size: 10px; line-height: 1.25; }
    .btn-af-primary, .btn-af-outline { width: 100%; justify-content: center; }
}
</style>

<div class="af-page-wrapper" id="afWrapper">

    <!-- 1. HERO SECTION -->
    <section class="af-hero" id="hero">
        <div class="container position-relative" style="z-index: 2;">
            <div class="row align-items-center g-4">
                <div class="col-lg-7">
                    <!-- 3-Way Language Switcher -->
                    <div class="lang-toggle-bar">
                        <button class="lang-pill active" id="btnAfLangEn" onclick="switchAfLang('en')">🇬🇧 English</button>
                        <button class="lang-pill" id="btnAfLangFa" onclick="switchAfLang('fa')">🇦🇫 دری (Dari)</button>
                        <button class="lang-pill" id="btnAfLangPs" onclick="switchAfLang('ps')">🇦🇫 پښتو (Pashto)</button>
                    </div>

                    <div class="af-hero-badge">
                        <span>🇦🇫</span>
                        <span class="af-trans" 
                            data-en="Built for Afghanistan Businesses • Trade, Agriculture, Mining & Retail" 
                            data-fa="طراحی شده برای مشاغل افغانستان • تجارت، زراعت، معادن و پرچون‌فروشی"
                            data-ps="د افغانستان سوداګریو لپاره جوړ شوی • تجارت، کرنه، کانونه او پرچون پلور">
                            Built for Afghanistan Businesses • Trade, Agriculture, Mining & Retail
                        </span>
                    </div>

                    <h1 class="af-trans" 
                        data-en="ERP Software in Afghanistan for Modern Business Management" 
                        data-fa="نرم‌افزار ERP در افغانستان برای مدیریت مدرن کسب‌وکار"
                        data-ps="په افغانستان کې د پرمختللي سوداګرۍ مدیریت لپاره ERP سافټویر">
                        ERP Software in Afghanistan for Modern Business Management
                    </h1>

                    <div class="af-hero-sub af-trans"
                        data-en="Run Your Afghanistan Business with One Powerful ERP Platform"
                        data-fa="کسب‌وکار خود در افغانستان را با یک پلتفرم قدرتمند ERP مدیریت کنید"
                        data-ps="خپله سوداګري په افغانستان کې د یوې ځواکمنې ERP پلتفارم سره پرمخ یوسئ">
                        Run Your Afghanistan Business with One Powerful ERP Platform
                    </div>

                    <p class="af-hero-desc af-trans"
                        data-en="Digify Soft Solutions provides cloud-ready business management software for Afghanistan businesses across retail, supermarkets, wholesale, distribution, agriculture, food processing, mining, manufacturing, construction, logistics, textiles, carpets, hospitality and e-commerce."
                        data-fa="دیجی‌فای سافت سلوشنز سیستم جامع مدیریت ابری را برای شرکت‌ها و فروشگاه‌های افغانستان در بخش‌های سوپرمارکت، زراعت، میوه خشک، استخراج معادن، ساختمانی، ترانسپورت، قالین و تجارت عمومی فراهم می‌سازد."
                        data-ps="ډیجیفای سافټ حلونه په افغانستان کې د سوپرمارکیټونو، کرنې، وچې میوې، کانونو استخراج، ساختماني چارو، ترانسپورت، قالینو او سوداګرۍ لپاره د ERP سافټویر وړاندې کوي.">
                        Digify Soft Solutions provides cloud-ready business management software for Afghanistan businesses across retail, supermarkets, wholesale, distribution, agriculture, food processing, mining, manufacturing, construction, logistics, textiles, carpets, hospitality and e-commerce.
                    </p>

                    <div class="d-flex flex-wrap gap-3 mb-4">
                        <a href="#demo-form" class="btn btn-af-primary">
                            <i class="fas fa-calendar-check"></i>
                            <span class="af-trans" data-en="Get a Free ERP Demo" data-fa="درخواست نسخه آزمایشی رایگان" data-ps="وړیا ډیمو ترلاسه کړئ">Get a Free ERP Demo</span>
                        </a>
                        <a href="https://wa.me/919914444588?text=Hello%20Digify%20Afghanistan%20ERP%20Team" target="_blank" class="btn btn-af-outline">
                            <i class="fab fa-whatsapp text-success"></i>
                            <span class="af-trans" data-en="Talk to Our ERP Team" data-fa="تماس با تیم متخصصین ERP" data-ps="زموږ د ERP ټیم سره خبرې وکړئ">Talk to Our ERP Team</span>
                        </a>
                    </div>

                    <!-- Quick Highlights -->
                    <div class="row g-3 pt-2">
                        <div class="col-4">
                            <div class="stat-box-af">
                                <h3>+15%</h3>
                                <p class="af-trans" data-en="Construction Growth" data-fa="رشد بخش ساختمانی" data-ps="د ساختماني چارو وده">Construction Growth</p>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="stat-box-af">
                                <h3>75%</h3>
                                <p class="af-trans" data-en="Agri & Food Exports" data-fa="صادرات زراعتی و میوه خشک" data-ps="د کرنې او خوراکي صادرات">Agri & Food Exports</p>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="stat-box-af">
                                <h3>Mining</h3>
                                <p class="af-trans" data-en="Mineral & Site Logs" data-fa="مدیریت معادن و تجهیزات" data-ps="د کانونو او وسایلو مدیریت">Mineral & Site Logs</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Right Form -->
                <div class="col-lg-5" id="demo-form">
                    <div class="hero-lead-card">
                        <div class="d-flex align-items-center justify-content-between mb-2">
                            <span class="badge bg-success text-white px-3 py-1 rounded-pill font-monospace af-trans" data-en="🇦🇫 AFGHANISTAN FAST-TRACK" data-fa="🇦🇫 نسخه اختصاصی افغانستان" data-ps="🇦🇫 د افغانستان ځانګړې نسخه">🇦🇫 AFGHANISTAN FAST-TRACK</span>
                            <span class="text-muted small"><i class="fas fa-clock text-warning"></i> <span class="af-trans" data-en="15-Min Live Demo" data-fa="دموی ۱۵ دقیقه‌ای" data-ps="۱۵ دقیقې ژوندی ډیمو">15-Min Live Demo</span></span>
                        </div>
                        <h3 class="af-trans" data-en="Request Afghanistan ERP Solution" data-fa="درخواست سیستم ERP افغانستان" data-ps="د افغانستان د ERP حل غوښتنه">Request Afghanistan ERP Solution</h3>
                        <p class="af-trans" data-en="Discover how Digify unifies operations for your business in Kabul, Herat, Mazar-i-Sharif, Kandahar, Jalalabad & across Afghanistan." data-fa="ببینید چگونه دیجی‌فای عملیات تجارتی شما را در کابل، هرات، مزار شریف، قندهار و سراسر افغانستان یکپارچه می‌سازد." data-ps="وګورئ چې څنګه ډیجیفای په کابل، هرات، مزارشریف، کندهار او ټول افغانستان کې ستاسو سوداګریز چارې یوځای کوي.">Discover how Digify unifies operations for your business in Kabul, Herat, Mazar-i-Sharif, Kandahar, Jalalabad & across Afghanistan.</p>
                        
                        <form action="send_mail.php" method="POST" id="afghanistanHeroLeadForm">
                            <input type="hidden" name="source" value="Afghanistan Main ERP Page">
                            <input type="hidden" name="country" value="Afghanistan">
                            
                            <div class="mb-2">
                                <label class="form-label small fw-bold text-dark af-trans" data-en="Full Name" data-fa="نام و تخلص" data-ps="بشپړ نوم">Full Name</label>
                                <input type="text" name="name" class="form-control af-trans-ph" placeholder="e.g. Ahmad Popal / Mohammad Wahid" data-en-ph="e.g. Ahmad Popal / Mohammad Wahid" data-fa-ph="مثال: احمد پوپل / محمد وحید" data-ps-ph="مثال: احمد پوپل / محمد وحید" required>
                            </div>

                            <div class="mb-2">
                                <label class="form-label small fw-bold text-dark af-trans" data-en="Company / Business Name" data-fa="نام شرکت / فروشگاه" data-ps="د شرکت / هټۍ نوم">Company / Business Name</label>
                                <input type="text" name="company" class="form-control af-trans-ph" placeholder="e.g. Kabul Supermarket / Afghan Dry Fruits" data-en-ph="e.g. Kabul Supermarket / Afghan Dry Fruits" data-fa-ph="مثال: سوپرمارکت کابل / صادرات میوه خشک افغان" data-ps-ph="مثال: کابل سوپرمارکیټ / افغان وچې میوې" required>
                            </div>

                            <div class="row g-2 mb-2">
                                <div class="col-6">
                                    <label class="form-label small fw-bold text-dark af-trans" data-en="WhatsApp / Phone" data-fa="شماره واتساپ / تلیفون" data-ps="د واټساپ / ټلیفون شمېره">WhatsApp / Phone</label>
                                    <input type="tel" name="phone" class="form-control" placeholder="+93 7X XXX XXXX" required>
                                </div>
                                <div class="col-6">
                                    <label class="form-label small fw-bold text-dark af-trans" data-en="Work Email" data-fa="ایمیل کاری" data-ps="کاري بریښنالیک">Work Email</label>
                                    <input type="email" name="email" class="form-control" placeholder="info@company.af" required>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label class="form-label small fw-bold text-dark af-trans" data-en="Select Industry" data-fa="انتخاب سکتور کسب‌وکار" data-ps="د سوداګرۍ سکتور وټاکئ">Select Industry</label>
                                <select name="industry" class="form-select" required>
                                    <option value="" selected disabled class="af-trans" data-en="Select your business sector..." data-fa="سکتور کاری خود را انتخاب کنید..." data-ps="خپل کاري سکتور وټاکئ...">Select your business sector...</option>
                                    <option value="Supermarket & Retail" class="af-trans" data-en="Supermarket & Retail Store" data-fa="سوپرمارکت و پرچون‌فروشی" data-ps="سوپرمارکیټ او پرچون پلورنځی">Supermarket & Retail Store</option>
                                    <option value="Agriculture & Dry Fruits" class="af-trans" data-en="Agriculture & Dry Fruit Trading" data-fa="زراعت و تجارت میوه خشک" data-ps="کرنه او د وچو میوو تجارت">Agriculture & Dry Fruit Trading</option>
                                    <option value="Mining & Quarrying" class="af-trans" data-en="Mining & Minerals Extraction" data-fa="استخراج معادن و سنگ‌های قیمتی" data-ps="د کانونو او منرالونو استخراج">Mining & Minerals Extraction</option>
                                    <option value="Construction & Building Materials" class="af-trans" data-en="Construction & Building Supplies" data-fa="شرکت ساختمانی و مواد اولیه" data-ps="ساختماني شرکت او توکي">Construction & Building Supplies</option>
                                    <option value="Wholesale & FMCG Distribution" class="af-trans" data-en="Wholesale & FMCG Distribution" data-fa="تجارت عمده و توزیع FMCG" data-ps="عمده پلور او د FMCG ویش">Wholesale & FMCG Distribution</option>
                                    <option value="Carpet Business & Handicrafts" class="af-trans" data-en="Carpet Business & Handicrafts" data-fa="تجارت و تولید قالین افغانی" data-ps="د افغاني قالینو تولید او تجارت">Carpet Business & Handicrafts</option>
                                    <option value="Textile & Garment" class="af-trans" data-en="Textile & Garment Manufacturing" data-fa="تولید لباس و نساجی" data-ps="د جامو او ټوکرانو تولید">Textile & Garment Manufacturing</option>
                                    <option value="Food Processing" class="af-trans" data-en="Food & Beverage Processing" data-fa="پروسس مواد غذایی و آرد" data-ps="د خوراکي توکو او اوړو پروسس">Food & Beverage Processing</option>
                                    <option value="Pharmacy & Healthcare" class="af-trans" data-en="Pharmacy & Healthcare Retail" data-fa="دواخانه و تجهیزات طبی" data-ps="درملتون او روغتیايي توکي">Pharmacy & Healthcare Retail</option>
                                    <option value="Import & Export Trading" class="af-trans" data-en="Import & Export Trading" data-fa="واردات و صادرات بین‌المللی" data-ps="نړیوال واردات او صادرات">Import & Export Trading</option>
                                    <option value="Logistics & Transport" class="af-trans" data-en="Logistics, Freight & Warehousing" data-fa="ترانسپورت، گمرک و گدام‌ها" data-ps="ټرانسپورټ، ګمرک او ګودامونه">Logistics, Freight & Warehousing</option>
                                    <option value="Auto Parts & Electronics" class="af-trans" data-en="Electronics, Mobile & Auto Parts" data-fa="الکترونیک، موبایل و پرزه جات موتر" data-ps="الکترونیک، موبایل او پرزې">Electronics, Mobile & Auto Parts</option>
                                </select>
                            </div>

                            <button type="submit" class="btn btn-af-primary w-100 py-2">
                                <span class="af-trans" data-en="Schedule My Live Demo" data-fa="ثبت نوبت دموی زنده" data-ps="زما د ژوندي ډیمو مهالویش وکړئ">Schedule My Live Demo</span>
                                <i class="fas fa-arrow-right ms-2"></i>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 2. WHY DIGIFY ERP FOR AFGHANISTAN? -->
    <section class="af-section" id="why-afghanistan">
        <div class="container">
            <div class="text-center mb-5">
                <span class="section-badge-af af-trans" data-en="Integrated Cloud ERP" data-fa="سیستم ابری یکپارچه" data-ps="یوځای شوی کلاوډ ERP">Integrated Cloud ERP</span>
                <h2 class="section-title-af af-trans" 
                    data-en="Why ERP Software for Afghanistan Businesses?" 
                    data-fa="چرا نرم‌افزار ERP برای کسب‌وکارهای افغانستان ضروری است؟"
                    data-ps="ولې په افغانستان کې د سوداګرۍ لپاره ERP سافټویر مهم دی؟">
                    Why ERP Software for Afghanistan Businesses?
                </h2>
                <p class="section-sub-af af-trans" 
                    data-en="Afghanistan businesses often operate across complex purchasing, distribution, inventory, cash sales, supplier management and cross-border trade workflows. Digify Soft Solutions helps businesses bring these operations together in one centralized ERP environment. From Kabul-based retailers and wholesalers to agricultural businesses, manufacturers, mining companies, construction firms and distributors, business owners can manage day-to-day operations with better visibility."
                    data-fa="مشاغل در افغانستان غالباً با معاملات نقدی، توزیع پیچیده، مدیریت گدام‌ها و تجارت‌های مرزی روبرو هستند. دیجی‌فای به شرکت‌های کابل، هرات، مزار و سایر ولایات کمک می‌کند تا حسابداری، فروشات، خریدها و کنترل گدام را با شفافیت کامل مدیریت کنند."
                    data-ps="په افغانستان کې سوداګرۍ اکثرا د نغدي معاملو، د ګودامونو مدیریت او سرحدي تجارت سره مخ دي. ډیجیفای تاسو سره مرسته کوي چې مالي چارې، پلور او پیرود په اسانۍ سره کنټرول کړئ.">
                    Afghanistan businesses often operate across complex purchasing, distribution, inventory, cash sales, supplier management and cross-border trade workflows. Digify Soft Solutions helps businesses bring these operations together in one centralized ERP environment. From Kabul-based retailers and wholesalers to agricultural businesses, manufacturers, mining companies, construction firms and distributors, business owners can manage day-to-day operations with better visibility.
                </p>
            </div>

            <div class="row g-4">
                <div class="col-md-4">
                    <div class="af-card">
                        <div class="af-card-icon"><i class="fas fa-network-wired"></i></div>
                        <h4 class="af-trans" data-en="Zero Disconnected Silos" data-fa="حذف سیستم‌های پراکنده" data-ps="د جلا سیسټمونو یوځای کول">Zero Disconnected Silos</h4>
                        <p class="af-trans" data-en="Connect retail POS, central warehouses, purchasing departments, supplier balances, and customer credit ledgers into a single unified cloud database." data-fa="سیستم فروش POS، گدام‌های مرکزی، طلبات مشتریان و حسابات تمویل‌کنندگان را به یک دیتابیس واحد وصل کنید." data-ps="د پلور POS، مرکزي ګودامونه، د پیرودونکو پورونه او د عرضه کونکو حسابونه یوځای کړئ.">Connect retail POS, central warehouses, purchasing departments, supplier balances, and customer credit ledgers into a single unified cloud database.</p>
                        <ul class="af-checklist">
                            <li class="af-trans" data-en="<i class='fas fa-check-circle'></i> Multi-branch live stock sync" data-fa="<i class='fas fa-check-circle'></i> همگام‌سازی لحظه‌ای گدام در شعبات" data-ps="<i class='fas fa-check-circle'></i> په څانګو کې د ګودام ژوندۍ همغږي"><i class="fas fa-check-circle"></i> Multi-branch live stock sync</li>
                            <li class="af-trans" data-en="<i class='fas fa-check-circle'></i> Customer & supplier ledger tracking" data-fa="<i class='fas fa-check-circle'></i> دفتر کل حسابات مشتریان و تمویل‌کنندگان" data-ps="<i class='fas fa-check-circle'></i> د پیرودونکو او عرضه کونکو حساب کتاب"><i class="fas fa-check-circle"></i> Customer & supplier ledger tracking</li>
                            <li class="af-trans" data-en="<i class='fas fa-check-circle'></i> Cash & bank transaction logs" data-fa="<i class='fas fa-check-circle'></i> ثبت دقیق معاملات نقدی و بانکی" data-ps="<i class='fas fa-check-circle'></i> د نغدي او بانکي معاملو ثبت"><i class="fas fa-check-circle"></i> Cash & bank transaction logs</li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="af-card">
                        <div class="af-card-icon"><i class="fas fa-file-invoice-dollar"></i></div>
                        <h4 class="af-trans" data-en="Business Tax & Financial Records" data-fa="تنظیم اسناد مالی و مالیاتی" data-ps="مالي او مالیاتي اسنادو مدیریت">Business Tax & Financial Records</h4>
                        <p class="af-trans" data-en="Maintain organized sales, purchase, expense and financial records to support your business accounting and official tax/customs-related workflows." data-fa="اسناد فروشات، خریدها، مصارف و فاکتورها را به صورت منظم نگهداری کنید تا پروسه‌های مالیاتی و گمرکی به آسانی انجام شود." data-ps="د پلور، پیرود او لګښتونو منظم ریکارډ وساتئ ترڅو ستاسو د مالیاتو او ګمرکونو چارې اسانه شي.">Maintain organized sales, purchase, expense and financial records to support your business accounting and official tax/customs-related workflows.</p>
                        <ul class="af-checklist">
                            <li class="af-trans" data-en="<i class='fas fa-check-circle'></i> Serialized invoice generation" data-fa="<i class='fas fa-check-circle'></i> صدور فاکتور با شماره مسلسل" data-ps="<i class='fas fa-check-circle'></i> د مسلسل نمبر سره فاکتور جوړول"><i class="fas fa-check-circle"></i> Serialized invoice generation</li>
                            <li class="af-trans" data-en="<i class='fas fa-check-circle'></i> Customs & landed cost records" data-fa="<i class='fas fa-check-circle'></i> ثبت مصارف گمرکی و قیمت تمام شده" data-ps="<i class='fas fa-check-circle'></i> د ګمرک لګښتونو او اصلي بیې ثبت"><i class="fas fa-check-circle"></i> Customs & landed cost records</li>
                            <li class="af-trans" data-en="<i class='fas fa-check-circle'></i> Audit-ready financial statements" data-fa="<i class='fas fa-check-circle'></i> گزارشات مالی آماده بررسی و تفتیش" data-ps="<i class='fas fa-check-circle'></i> د تفتیش لپاره چمتو مالي راپورونه"><i class="fas fa-check-circle"></i> Audit-ready financial statements</li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="af-card">
                        <div class="af-card-icon"><i class="fas fa-chart-line"></i></div>
                        <h4 class="af-trans" data-en="Multi-Currency Trade Intelligence" data-fa="تجارت با ارزهای مختلف (AFN, USD, PKR)" data-ps="په څو اسعارو کې سوداګري">Multi-Currency Trade Intelligence</h4>
                        <p class="af-trans" data-en="Support cross-border commerce with multi-currency invoicing across AFN (Afghani), USD, EUR, and regional currencies with real-time conversion rates." data-fa="انجام معاملات و صدور فاکتور با افغانی (AFN)، دالر، یورو و سایر اسعار منطقوی با نرخ مبادله لحظه‌ای." data-ps="په افغانۍ (AFN)، ډالر او نورو اسعارو کې د فاکتورونو او معاملو ترسره کول.">Support cross-border commerce with multi-currency invoicing across AFN (Afghani), USD, EUR, and regional currencies with real-time conversion rates.</p>
                        <ul class="af-checklist">
                            <li class="af-trans" data-en="<i class='fas fa-check-circle'></i> Multi-currency sales & purchases" data-fa="<i class='fas fa-check-circle'></i> خرید و فروش چند ارزی" data-ps="<i class='fas fa-check-circle'></i> په څو اسعارو پلور او پیرود"><i class="fas fa-check-circle"></i> Multi-currency sales & purchases</li>
                            <li class="af-trans" data-en="<i class='fas fa-check-circle'></i> Real-time exchange rate logs" data-fa="<i class='fas fa-check-circle'></i> ثبت نوسانات نرخ اسعار" data-ps="<i class='fas fa-check-circle'></i> د اسعارو د تبادلې نرخ ثبت"><i class="fas fa-check-circle"></i> Real-time exchange rate logs</li>
                            <li class="af-trans" data-en="<i class='fas fa-check-circle'></i> Executive profitability dashboards" data-fa="<i class='fas fa-check-circle'></i> داشبورد مدیریت مفاد و نقص" data-ps="<i class='fas fa-check-circle'></i> د ګټې او تاوان مدیریتي راپور"><i class="fas fa-check-circle"></i> Executive profitability dashboards</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 3. TOP TARGET INDUSTRIES IN AFGHANISTAN (20 VERTICAL CARDS WITH LINKS) -->
    <section class="af-section bg-light-af" id="industries-afghanistan">
        <div class="container">
            <div class="text-center mb-5">
                <span class="section-badge-af af-trans" data-en="20 Core Industry Verticals" data-fa="۲۰ سکتور کلیدی اقتصادی" data-ps="۲۰ مهم صنعتي او اقتصادي سکتورونه">20 Core Industry Verticals</span>
                <h2 class="section-title-af af-trans" 
                    data-en="Dedicated ERP Solutions for Every Sector in Afghanistan" 
                    data-fa="راهکارهای اختصاصی ERP برای تمامی صنایع افغانستان"
                    data-ps="په افغانستان کې د هر سکتور لپاره ځانګړي ERP حلونه">
                    Dedicated ERP Solutions for Every Sector in Afghanistan
                </h2>
                <p class="section-sub-af af-trans" 
                    data-en="From high-volume Kabul supermarkets and fruit exporters to Kandahar pomegranate traders, Herat saffron merchants, and northern mining sites — Digify powers your complete workflow."
                    data-fa="از سوپرمارکت‌های کابل و صادرکنندگان میوه خشک تا تاجران زعفران هرات و معادن شمال — دیجی‌فای همراه مطمئن شماست."
                    data-ps="د کابل له لویو سوپرمارکیټونو څخه تر د کندهار او هرات تر صادراتي سوداګریو او شمالي کانونو پورې — ډیجیفای ستاسو کارونه اسانه کوي.">
                    From high-volume Kabul supermarkets and fruit exporters to Kandahar pomegranate traders, Herat saffron merchants, and northern mining sites — Digify powers your complete workflow.
                </p>
            </div>

            <div class="row g-3 row-cols-2 row-cols-md-3 row-cols-lg-4">
                <div class="col">
                    <a href="supermarket-erp-software-afghanistan.php" class="industry-grid-card-af">
                        <i class="fas fa-shopping-cart"></i>
                        <h5 class="af-trans" data-en="1. Supermarket & Retail" data-fa="۱. سوپرمارکت و پرچون" data-ps="۱. سوپرمارکیټ او پرچون">1. Supermarket & Retail</h5>
                        <p class="af-trans" data-en="Barcode POS, weighing scales & 15 product categories" data-fa="بارکود POS، ترازو دیجیتال و ۱۵ کتگوری اجناس" data-ps="بارکوډ POS، ډیجیټل تله او ۱۵ کټګورۍ">Barcode POS, weighing scales & 15 product categories</p>
                    </a>
                </div>

                <div class="col">
                    <a href="agriculture-erp-software-afghanistan.php" class="industry-grid-card-af">
                        <i class="fas fa-seedling"></i>
                        <h5 class="af-trans" data-en="2. Agriculture ERP" data-fa="۲. زراعت و محصولات زراعتی" data-ps="۲. کرنه او زراعتي توکي">2. Agriculture ERP</h5>
                        <p class="af-trans" data-en="Grain, wheat, rice, saffron, seeds & fertilizer" data-fa="گندم، برنج، زعفران، تخم‌های اصلاح شده و کود" data-ps="غنم، وریجې، زعفران، اصلاح شوي تخمونه او کیمیاوي سره">Grain, wheat, rice, saffron, seeds & fertilizer</p>
                    </a>
                </div>

                <div class="col">
                    <a href="dry-fruit-trading-erp-afghanistan.php" class="industry-grid-card-af">
                        <i class="fas fa-apple-alt"></i>
                        <h5 class="af-trans" data-en="3. Dry Fruit & Trading" data-fa="۳. میوه خشک و صادرات" data-ps="۳. وچه میوه او صادرات">3. Dry Fruit & Trading</h5>
                        <p class="af-trans" data-en="Raisins, almonds, pistachios, figs & export orders" data-fa="کشمش، بادام، پسته، انجیر، انار و فاکتور صادراتی" data-ps="کشمش، بادام، پسته، انځر او صادراتي اسناد">Raisins, almonds, pistachios, figs & export orders</p>
                    </a>
                </div>

                <div class="col">
                    <a href="mining-erp-software-afghanistan.php" class="industry-grid-card-af">
                        <i class="fas fa-gem"></i>
                        <h5 class="af-trans" data-en="4. Mining & Extraction" data-fa="۴. استخراج معادن و سنگ‌ها" data-ps="۴. کان کیندنه او منرالونه">4. Mining & Extraction</h5>
                        <p class="af-trans" data-en="Iron ore, copper, gems, equipment & site logs" data-fa="آهن، مس، زمرد، پرزه جات و تیل ماشینری" data-ps="اوسپنه، مس، قیمتي ډبرې او د ماشینونو تېل">Iron ore, copper, gems, equipment & site logs</p>
                    </a>
                </div>

                <div class="col">
                    <a href="construction-erp-software-afghanistan.php" class="industry-grid-card-af">
                        <i class="fas fa-hard-hat"></i>
                        <h5 class="af-trans" data-en="5. Construction ERP" data-fa="۵. شرکت‌های ساختمانی" data-ps="۵. ساختماني شرکتونه">5. Construction ERP</h5>
                        <p class="af-trans" data-en="Project costing, contractors, cement & steel" data-fa="پروژه‌ها، سیمنت، سیخ گول، قراردادی‌ها و مصارف" data-ps="پروژې، سمنټ، سیخ ګول او د قراردادیانو لګښتونه">Project costing, contractors, cement & steel</p>
                    </a>
                </div>

                <div class="col">
                    <a href="manufacturing-erp-software-afghanistan.php" class="industry-grid-card-af">
                        <i class="fas fa-industry"></i>
                        <h5 class="af-trans" data-en="6. Manufacturing ERP" data-fa="۶. فابریکات تولیدی" data-ps="۶. تولیدي فابریکې">6. Manufacturing ERP</h5>
                        <p class="af-trans" data-en="BOM formulas, raw materials & yield tracking" data-fa="فرمول تولید (BOM)، مواد خام و محصول نهایی" data-ps="د تولید فورمول (BOM)، خام مواد او بشپړ توکي">BOM formulas, raw materials & yield tracking</p>
                    </a>
                </div>

                <div class="col">
                    <a href="garment-erp-software-afghanistan.php" class="industry-grid-card-af">
                        <i class="fas fa-tshirt"></i>
                        <h5 class="af-trans" data-en="7. Textile & Garment" data-fa="۷. نساجی و تولید پوشاک" data-ps="۷. ټوکر او د جامو تولید">7. Textile & Garment</h5>
                        <p class="af-trans" data-en="Style/Size/Color 3D matrix, fabric rolls & trims" data-fa="ماتریکس سایز/رنگ، رول پارچه و لوازم دوزندگی" data-ps="د اندازې او رنګ ماتریکس، ټوکر او د خیاطۍ لوازم">Style/Size/Color 3D matrix, fabric rolls & trims</p>
                    </a>
                </div>

                <div class="col">
                    <a href="carpet-erp-software-afghanistan.php" class="industry-grid-card-af">
                        <i class="fas fa-scroll"></i>
                        <h5 class="af-trans" data-en="8. Carpet Business ERP" data-fa="۸. تجارت و بافندگی قالین" data-ps="۸. د قالینو تولید او تجارت">8. Carpet Business ERP</h5>
                        <p class="af-trans" data-en="Handmade carpets, artisan records & wool lots" data-fa="قالین دستباف، حساب بافندگان، پشم و صادرات" data-ps="لاسي قالینې، د اوبدونکو حسابونه او د وړیو ګودام">Handmade carpets, artisan records & wool lots</p>
                    </a>
                </div>

                <div class="col">
                    <a href="wholesale-erp-software-afghanistan.php" class="industry-grid-card-af">
                        <i class="fas fa-warehouse"></i>
                        <h5 class="af-trans" data-en="9. Wholesale & Distribution" data-fa="۹. عمده‌فروشی و توزیع" data-ps="۹. عمده پلور او ویش">9. Wholesale & Distribution</h5>
                        <p class="af-trans" data-en="Tiered pricing, credit limits & dispatch orders" data-fa="قیمت‌های عمده، کنترل قرضداری و ارسال بار" data-ps="عمده بیې، د پور کنټرول او د توکو لیږل">Tiered pricing, credit limits & dispatch orders</p>
                    </a>
                </div>

                <div class="col">
                    <a href="import-export-erp-software-afghanistan.php" class="industry-grid-card-af">
                        <i class="fas fa-globe-asia"></i>
                        <h5 class="af-trans" data-en="10. Import & Export ERP" data-fa="۱۰. واردات و صادرات" data-ps="۱۰. واردات او صادرات">10. Import & Export ERP</h5>
                        <p class="af-trans" data-en="Cross-border shipments, customs logs & LC" data-fa="تجارت مرزی، اسناد گمرکی، کانتینرها و LC" data-ps="سرحدي سوداګري، ګمرکي اسناد او LC">Cross-border shipments, customs logs & LC</p>
                    </a>
                </div>

                <div class="col">
                    <a href="food-processing-erp-software-afghanistan.php" class="industry-grid-card-af">
                        <i class="fas fa-mortar-pestle"></i>
                        <h5 class="af-trans" data-en="11. Food Processing" data-fa="۱۱. صنایع غذایی و آسیاب‌ها" data-ps="۱۱. خوراکي توکي او ژرندې">11. Food Processing</h5>
                        <p class="af-trans" data-en="Flour mills, dairy, fruit canning & juices" data-fa="آسیاب‌های آرد، لبنیات، آبمیوه و بسته‌بندی" data-ps="د اوړو ژرندې، لبنیات، جوس او بسته بندي">Flour mills, dairy, fruit canning & juices</p>
                    </a>
                </div>

                <div class="col">
                    <a href="pharmacy-erp-software-afghanistan.php" class="industry-grid-card-af">
                        <i class="fas fa-pills"></i>
                        <h5 class="af-trans" data-en="12. Pharmacy & Healthcare" data-fa="۱۲. دواخانه‌ها و طبابت" data-ps="۱۲. درملتونونه او طبي توکي">12. Pharmacy & Healthcare</h5>
                        <p class="af-trans" data-en="Medicine catalog, prescription sales & stock" data-fa="کتگوری ادویه، فروش با نسخه و کنترل تاریخ" data-ps="د درملو کټګورۍ، د نسخې پلور او د تاریخ کنټرول">Medicine catalog, prescription sales & stock</p>
                    </a>
                </div>

                <div class="col">
                    <a href="building-material-erp-software-afghanistan.php" class="industry-grid-card-af">
                        <i class="fas fa-cubes"></i>
                        <h5 class="af-trans" data-en="13. Building Materials" data-fa="۱۳. مصالح ساختمانی" data-ps="۱۳. ساختماني توکي">13. Building Materials</h5>
                        <p class="af-trans" data-en="Cement, bricks, steel rods & hardware items" data-fa="سیمنت، خشت، رنگ، لوله‌ها و ابزارآلات" data-ps="سمنټ، خښتې، رنګ، پایپونه او وسایل">Cement, bricks, steel rods & hardware items</p>
                    </a>
                </div>

                <div class="col">
                    <a href="fmcg-erp-software-afghanistan.php" class="industry-grid-card-af">
                        <i class="fas fa-boxes"></i>
                        <h5 class="af-trans" data-en="14. FMCG Distribution" data-fa="۱۴. توزیع مواد مصرفی" data-ps="۱۴. د FMCG توکو ویش">14. FMCG Distribution</h5>
                        <p class="af-trans" data-en="Van sales routes, grocery supply & batch logs" data-fa="فروش با موتر (Van Sales) و توزیع به دکاکین" data-ps="د موټرو له لارې پلور او هټیو ته د توکو ویش">Van sales routes, grocery supply & batch logs</p>
                    </a>
                </div>

                <div class="col">
                    <a href="logistics-erp-software-afghanistan.php" class="industry-grid-card-af">
                        <i class="fas fa-truck-moving"></i>
                        <h5 class="af-trans" data-en="15. Logistics & Transport" data-fa="۱۵. ترانسپورت و لوژستیک" data-ps="۱۵. ترانسپورت او لوژستیک">15. Logistics & Transport</h5>
                        <p class="af-trans" data-en="Freight forwarding, cargo & warehouse bins" data-fa="باربری، گدام‌های گمرکی و رهگیری اموال" data-ps="بار وړل، ګمرکي ګودامونه او د اموالو تعقیب">Freight forwarding, cargo & warehouse bins</p>
                    </a>
                </div>

                <div class="col">
                    <a href="electronics-erp-software-afghanistan.php" class="industry-grid-card-af">
                        <i class="fas fa-mobile-alt"></i>
                        <h5 class="af-trans" data-en="16. Electronics & Mobile" data-fa="۱۶. موبایل و الکترونیک" data-ps="۱۶. موبایل او الکترونیک">16. Electronics & Mobile</h5>
                        <p class="af-trans" data-en="IMEI tracking, smartphone accessories & parts" data-fa="ثبت سریال نمبر IMEI، پرزه جات و لپ‌تاپ" data-ps="د IMEI ثبت، پرزې او لپټاپونه">IMEI tracking, smartphone accessories & parts</p>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- 4. CORE PLATFORM MODULES -->
    <section class="af-section" id="core-modules-afghanistan">
        <div class="container">
            <div class="text-center mb-5">
                <span class="section-badge-af af-trans" data-en="Comprehensive ERP Architecture" data-fa="معماری جامع پلتفرم ERP" data-ps="د ERP هراړخیز سیسټم">Comprehensive ERP Architecture</span>
                <h2 class="section-title-af af-trans" 
                    data-en="Core Business Engines in Digify Afghanistan ERP" 
                    data-fa="ماډل‌های اصلی و کاربردی نرم‌افزار دیجی‌فای در افغانستان"
                    data-ps="په ډیجیفای ERP کې اصلي کاري ماډلونه">
                    Core Business Engines in Digify Afghanistan ERP
                </h2>
                <p class="section-sub-af af-trans" 
                    data-en="Everything required to control sales, procurement, multi-warehouse stock, ledger accounting, employees, and executive dashboards."
                    data-fa="تمام امکانات لازم برای فروش، تدارکات، مدیریت گدام‌های متعدد، حسابداری و حقوق کارمندان در یک نرم‌افزار."
                    data-ps="د پلور، تدارکاتو، ګودامونو، حسابدارۍ او کارمندانو مدیریت لپاره ټول اړین امکانات.">
                    Everything required to control sales, procurement, multi-warehouse stock, ledger accounting, employees, and executive dashboards.
                </p>
            </div>

            <div class="row g-4">
                <div class="col-md-6 col-lg-3">
                    <div class="af-card">
                        <div class="af-card-icon"><i class="fas fa-cash-register"></i></div>
                        <h4 class="af-trans" data-en="POS & High-Speed Retail" data-fa="سیستم فروش و POS" data-ps="د پلور POS سیسټم">POS & High-Speed Retail</h4>
                        <p class="af-trans" data-en="Touchscreen checkout, thermal receipts, barcode guns, weighed items, and cashier cash drawer audits." data-fa="فروش سریع با بارکودخوان، ترازو دیجیتال، چاپ فاکتور حرارتی و بررسی دخل نقدی." data-ps="د بارکوډ او ډیجیټل تلې سره چټک پلور او د نغدو پیسو کنټرول.">Touchscreen checkout, thermal receipts, barcode guns, weighed items, and cashier cash drawer audits.</p>
                        <ul class="af-checklist">
                            <li class="af-trans" data-en="<i class='fas fa-check-circle'></i> Multi-counter sales tracking" data-fa="<i class='fas fa-check-circle'></i> مدیریت چند دخل فروش همزمان" data-ps="<i class='fas fa-check-circle'></i> په یو وخت د څو دخلونو کنټرول"><i class="fas fa-check-circle"></i> Multi-counter sales tracking</li>
                            <li class="af-trans" data-en="<i class='fas fa-check-circle'></i> Instant discounts & returns" data-fa="<i class='fas fa-check-circle'></i> تخفیفات و ثبت اجناس مرجوعی" data-ps="<i class='fas fa-check-circle'></i> تخفیفونه او بیرته راستانه شوي توکي"><i class="fas fa-check-circle"></i> Instant discounts & returns</li>
                            <li class="af-trans" data-en="<i class='fas fa-check-circle'></i> Daily counter shift closing" data-fa="<i class='fas fa-check-circle'></i> بستن نوبت روزانه با حساب دقیق" data-ps="<i class='fas fa-check-circle'></i> د نغدو پیسو ورځنی حساب بندول"><i class="fas fa-check-circle"></i> Daily counter shift closing</li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3">
                    <div class="af-card">
                        <div class="af-card-icon"><i class="fas fa-boxes"></i></div>
                        <h4 class="af-trans" data-en="Multi-Warehouse Inventory" data-fa="کنترل گدام و موجودی" data-ps="د ګودام او توکو کنټرول">Multi-Warehouse Inventory</h4>
                        <p class="af-trans" data-en="Live stock counts across central warehouses, wholesale godowns, and branch stores with transfer notes." data-fa="ثبت موجودی زنده در تمام گدام‌های مرکزی و ولایتی همراه با حواله انتقال جنس." data-ps="په ټولو مرکزي او ولایتي ګودامونو کې د توکو ژوندۍ شمیره.">Live stock counts across central warehouses, wholesale godowns, and branch stores with transfer notes.</p>
                        <ul class="af-checklist">
                            <li class="af-trans" data-en="<i class='fas fa-check-circle'></i> Low stock & shortage alerts" data-fa="<i class='fas fa-check-circle'></i> هشدار خودکار برای کمبود جنس" data-ps="<i class='fas fa-check-circle'></i> د توکو د کمښت اتومات خبرداری"><i class="fas fa-check-circle"></i> Low stock & shortage alerts</li>
                            <li class="af-trans" data-en="<i class='fas fa-check-circle'></i> Inter-warehouse stock transfers" data-fa="<i class='fas fa-check-circle'></i> حواله انتقال جنس بین گدام‌ها" data-ps="<i class='fas fa-check-circle'></i> د ګودامونو ترمنځ د توکو لیږد"><i class="fas fa-check-circle"></i> Inter-warehouse stock transfers</li>
                            <li class="af-trans" data-en="<i class='fas fa-check-circle'></i> Stock valuation (FIFO / Avg Cost)" data-fa="<i class='fas fa-check-circle'></i> ارزش‌گذاری موجودی و نرخ تمام شد" data-ps="<i class='fas fa-check-circle'></i> د شته توکو اصلي مالي ارزښت"><i class="fas fa-check-circle"></i> Stock valuation (FIFO / Avg Cost)</li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3">
                    <div class="af-card">
                        <div class="af-card-icon"><i class="fas fa-calculator"></i></div>
                        <h4 class="af-trans" data-en="Accounting & Financials" data-fa="حسابداری و مالیه" data-ps="حسابداري او مالي چارې">Accounting & Financials</h4>
                        <p class="af-trans" data-en="Automated General Ledger, customer credit limits, supplier balance aging, and real-time Profit & Loss." data-fa="دفتر کل اتوماتیک، مدیریت قرضداری مشتریان، حساب طلب تمویل‌کنندگان و بیلانس مفاد/نقص." data-ps="عمومي دفتر، د پیرودونکو پورونه، د عرضه کونکو حساب او مالي بیلانټ.">Automated General Ledger, customer credit limits, supplier balance aging, and real-time Profit & Loss.</p>
                        <ul class="af-checklist">
                            <li class="af-trans" data-en="<i class='fas fa-check-circle'></i> Accounts Receivable (AR) & AP" data-fa="<i class='fas fa-check-circle'></i> حسابات قابل دریافت و قابل پرداخت" data-ps="<i class='fas fa-check-circle'></i> د ترلاسه کیدو او تادیه کیدو حسابونه"><i class="fas fa-check-circle"></i> Accounts Receivable (AR) & AP</li>
                            <li class="af-trans" data-en="<i class='fas fa-check-circle'></i> Expense categories & vouchers" data-fa="<i class='fas fa-check-circle'></i> ثبت سوانح و مصارف متفرقه" data-ps="<i class='fas fa-check-circle'></i> د لګښتونو کټګورۍ او واوچرونه"><i class="fas fa-check-circle"></i> Expense categories & vouchers</li>
                            <li class="af-trans" data-en="<i class='fas fa-check-circle'></i> Visual balance sheets & cash flow" data-fa="<i class='fas fa-check-circle'></i> بیلانس شیت و جریان نقدینگی" data-ps="<i class='fas fa-check-circle'></i> بیلانس شیټ او نغدي جریان"><i class="fas fa-check-circle"></i> Visual balance sheets & cash flow</li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3">
                    <div class="af-card">
                        <div class="af-card-icon"><i class="fas fa-user-shield"></i></div>
                        <h4 class="af-trans" data-en="Role-Based Security" data-fa="صلاحیت‌ها و امنیت کاربران" data-ps="امنیت او د کاروونکو واکونه">Role-Based Security</h4>
                        <p class="af-trans" data-en="Granular permissions for Business Owner, Administrator, Accountant, Salesperson, and Warehouse Manager." data-fa="تعیین صلاحیت‌های مجزا برای مالک، مدیر، صراف/محاسب، فروشنده و تحویلدار گدام." data-ps="د مالک، مدیر، محاسب، پلورونکي او د ګودام ساتونکي لپاره جلا واکونه.">Granular permissions for Business Owner, Administrator, Accountant, Salesperson, and Warehouse Manager.</p>
                        <ul class="af-checklist">
                            <li class="af-trans" data-en="<i class='fas fa-check-circle'></i> Restrict cost prices from staff" data-fa="<i class='fas fa-check-circle'></i> مخفی ساختن نرخ خرید از کارمندان" data-ps="<i class='fas fa-check-circle'></i> له کارمندانو د اصلي بیې پټول"><i class="fas fa-check-circle"></i> Restrict cost prices from staff</li>
                            <li class="af-trans" data-en="<i class='fas fa-check-circle'></i> Comprehensive action audit logs" data-fa="<i class='fas fa-check-circle'></i> ثبت تاریخچه و فعالیت کاربران" data-ps="<i class='fas fa-check-circle'></i> د کاروونکو د کړنو بشپړ ریکارډ"><i class="fas fa-check-circle"></i> Comprehensive action audit logs</li>
                            <li class="af-trans" data-en="<i class='fas fa-check-circle'></i> Branch-level access isolation" data-fa="<i class='fas fa-check-circle'></i> تفکیک دسترسی بر اساس هر شعبه" data-ps="<i class='fas fa-check-circle'></i> د څانګو له مخې د لاسرسي محدودیت"><i class="fas fa-check-circle"></i> Branch-level access isolation</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 5. AFGHANISTAN BUSINESS CHALLENGES & HOW DIGIFY HELPS -->
    <section class="af-section bg-light-af" id="challenges-afghanistan">
        <div class="container">
            <div class="text-center mb-5">
                <span class="section-badge-af af-trans" data-en="Overcoming Bottlenecks" data-fa="حل چالش‌های مدیریتی" data-ps="د سوداګریزو ستونزو حل">Overcoming Bottlenecks</span>
                <h2 class="section-title-af af-trans" 
                    data-en="Common Business Management Challenges in Afghanistan" 
                    data-fa="چالش‌های رایج مدیریت کسب‌وکار در افغانستان و راهکار دیجی‌فای"
                    data-ps="په افغانستان کې عامې سوداګریزې ننګونې او د ډیجیفای حل لارې">
                    Common Business Management Challenges in Afghanistan
                </h2>
            </div>

            <div class="row g-4 mb-5">
                <div class="col-md-4">
                    <div class="challenge-card">
                        <h5 class="af-trans" data-en="<i class='fas fa-exclamation-triangle me-2'></i> 1. Disconnected Manual Books" data-fa="<i class='fas fa-exclamation-triangle me-2'></i> ۱. حسابداری سنتی و کتابچه‌ای" data-ps="<i class='fas fa-exclamation-triangle me-2'></i> ۱. دودیز او کتابچې حساب کتاب"><i class="fas fa-exclamation-triangle me-2"></i> 1. Disconnected Manual Books</h5>
                        <p class="af-trans" data-en="Spreadsheets and manual notebooks create blind spots and calculation mistakes. Digify unifies all transactions in one secure database." data-fa="دفاتر سنتی و اکسل باعث گم شدن حسابات و اشتباه در محاسبه می‌شوند. دیجی‌فای همه اطلاعات را در یک سیستم امن یکپارچه می‌سازد." data-ps="کتابچې او اکسل د حسابونو د ګډوډۍ لامل کیږي. ډیجیفای ټول معلومات په یو ډیټابیس کې راټولوي.">Spreadsheets and manual notebooks create blind spots and calculation mistakes. Digify unifies all transactions in one secure database.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="challenge-card">
                        <h5 class="af-trans" data-en="<i class='fas fa-exclamation-triangle me-2'></i> 2. Customer Credit & Loan Defaults" data-fa="<i class='fas fa-exclamation-triangle me-2'></i> ۲. قرضداری زیاد و عدم پیگیری طلبات" data-ps="<i class='fas fa-exclamation-triangle me-2'></i> ۲. د پورونو راټولولو کې ستونزې"><i class="fas fa-exclamation-triangle me-2"></i> 2. Customer Credit & Loan Defaults</h5>
                        <p class="af-trans" data-en="Wholesale credit without automated limit controls leads to cash crunches. Digify enforces hard credit caps and tracks aging balances." data-fa="دادن جنس به صورت قرض بدون سیستم هشدار دهنده به کسب‌وکار صدمه می‌زند. دیجی‌فای سقف قرضداری را خودکار کنترول می‌کند." data-ps="بې حده پور ورکول سوداګرۍ ته تاوان رسوي. ډیجیفای د پور حد ټاکي او په وخت خبرداری ورکوي.">Wholesale credit without automated limit controls leads to cash crunches. Digify enforces hard credit caps and tracks aging balances.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="challenge-card">
                        <h5 class="af-trans" data-en="<i class='fas fa-exclamation-triangle me-2'></i> 3. Warehouse Theft & Stockouts" data-fa="<i class='fas fa-exclamation-triangle me-2'></i> ۳. کمبود جنس و نقص در گدام" data-ps="<i class='fas fa-exclamation-triangle me-2'></i> ۳. په ګودام کې د توکو کمښت او زیان"><i class="fas fa-exclamation-triangle me-2"></i> 3. Warehouse Theft & Stockouts</h5>
                        <p class="af-trans" data-en="Lack of real-time inventory visibility across branches causes stock shrinkage. Digify gives instant counts with automated low-stock alerts." data-fa="نبود آمار دقیق گدام سبب تمام شدن بی‌خبر اجناس و ضرر مالی می‌شود. دیجی‌فای موجودی لحظه‌ای را نمایش می‌دهد." data-ps="د ګودام د ناڅرګندتیا له امله توکي بې وخته خلاصیږي. ډیجیفای ژوندی حساب کتاب وړاندې کوي.">Lack of real-time inventory visibility across branches causes stock shrinkage. Digify gives instant counts with automated low-stock alerts.</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="challenge-card">
                        <h5 class="af-trans" data-en="<i class='fas fa-exclamation-triangle me-2'></i> 4. Multi-Branch Coordination" data-fa="<i class='fas fa-exclamation-triangle me-2'></i> ۴. مشکلات هماهنگی بین ولایات و شعبات" data-ps="<i class='fas fa-exclamation-triangle me-2'></i> ۴. د ولایتي څانګو د کنټرول ننګونې"><i class="fas fa-exclamation-triangle me-2"></i> 4. Multi-Branch Coordination</h5>
                        <p class="af-trans" data-en="Managing sales across Kabul, Herat, and Kandahar stores manually is difficult. Digify provides a centralized dashboard with instant inter-branch transfers." data-fa="مدیریت همزمان دکان‌ها و گدام‌ها در ولایات مختلف کاری دشوار است. دیجی‌فای همه را به یک پورتال مرکزی وصل می‌کند." data-ps="په کابل، هرات او کندهار کې د څانګو څارنه سخته ده. ډیجیفای دا ټول په یو مرکزي ډشبورډ کې نښلوي.">Managing sales across Kabul, Herat, and Kandahar stores manually is difficult. Digify provides a centralized dashboard with instant inter-branch transfers.</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="challenge-card">
                        <h5 class="af-trans" data-en="<i class='fas fa-exclamation-triangle me-2'></i> 5. Delayed Financial Insights" data-fa="<i class='fas fa-exclamation-triangle me-2'></i> ۵. عدم آگاهی دقیق از مفاد و ضرر روزانه" data-ps="<i class='fas fa-exclamation-triangle me-2'></i> ۵. د ورځنۍ ګټې او تاوان نه خبرتیا"><i class="fas fa-exclamation-triangle me-2"></i> 5. Delayed Financial Insights</h5>
                        <p class="af-trans" data-en="Waiting weeks to know business profitability paralyzes decision-making. Digify offers instant automated P&L statements." data-fa="انتظار کشیدن تا آخر سال برای دانستن سود و زیان تصمیم‌گیری را دشوار می‌سازد. دیجی‌فای راپور لحظه‌ای مفاد ارائه می‌دهد." data-ps="د کال تر پایه پورې د ګټې او تاوان نه معلومیدل پریکړې ځنډوي. ډیجیفای فوري مالي راپورونه جوړوي.">Waiting weeks to know business profitability paralyzes decision-making. Digify offers instant automated P&L statements.</p>
                    </div>
                </div>
            </div>

            <!-- Economic Reality Banner -->
            <div class="p-4 bg-white rounded-4 border shadow-sm">
                <div class="row align-items-center g-4">
                    <div class="col-lg-8">
                        <span class="badge bg-success text-white px-3 py-1 rounded-pill mb-2 af-trans" data-en="Economic Dynamics" data-fa="واقعیت‌های اقتصادی افغانستان" data-ps="د افغانستان اقتصادي واقعیتونه">Economic Dynamics</span>
                        <h4 class="fw-bold text-dark mb-2 af-trans" data-en="Built for Afghanistan's Trade & Agricultural Economy" data-fa="طراحی شده برای اقتصاد زراعتی، تجارتی و ساختمانی افغانستان" data-ps="د افغانستان د زراعتي او سوداګریز اقتصاد لپاره مناسب">Built for Afghanistan's Trade & Agricultural Economy</h4>
                        <p class="text-muted mb-0 af-trans" 
                            data-en="World Bank assessments indicate that agriculture expanded 6% in 2024, construction grew 15%, and food products represent 75% of exports. Digify delivers specialized capabilities for agricultural dry fruit traders, supermarkets, mining companies, and builders."
                            data-fa="گزارشات نهادهای بین‌المللی نشان می‌دهد زراعت و محصولات غذایی بیش از ۷۵٪ صادرات افغانستان را تشکیل می‌دهند و سکتور ساختمانی رشد ۱۵ درصدی داشته است. دیجی‌فای به بهترین شکل پاسخگوی این صنایع می‌باشد."
                            data-ps="راپورونه ښيي چې ۷۵٪ صادرات کرنیز او خوراکي توکي جوړوي او ساختماني سکتور ۱۵٪ وده کړې ده. ډیجیفای د دغو سکتورونو لپاره ځانګړي امکانات لري.">
                            World Bank assessments indicate that agriculture expanded 6% in 2024, construction grew 15%, and food products represent 75% of exports. Digify delivers specialized capabilities for agricultural dry fruit traders, supermarkets, mining companies, and builders.
                        </p>
                    </div>
                    <div class="col-lg-4 text-center">
                        <div class="d-flex justify-content-around">
                            <div><h3 class="fw-bold text-success mb-0">75%</h3><small class="text-muted af-trans" data-en="Food Exports" data-fa="صادرات غذایی" data-ps="خوراکي صادرات">Food Exports</small></div>
                            <div><h3 class="fw-bold text-success mb-0">+15%</h3><small class="text-muted af-trans" data-en="Construction" data-fa="ساختمان" data-ps="ساختماني">Construction</small></div>
                            <div><h3 class="fw-bold text-success mb-0">+6%</h3><small class="text-muted af-trans" data-en="Agriculture" data-fa="زراعت" data-ps="کرنه">Agriculture</small></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 6. FAQS SECTION -->
    <section class="af-section" id="faqs-afghanistan">
        <div class="container">
            <div class="text-center mb-5">
                <span class="section-badge-af af-trans" data-en="Frequently Asked Questions" data-fa="سوالات متداول" data-ps="پرله پسې پوښتنې">Frequently Asked Questions</span>
                <h2 class="section-title-af af-trans" 
                    data-en="Afghanistan Cloud ERP & Operations FAQs" 
                    data-fa="سوالات رایج در مورد نرم‌افزار ERP در افغانستان"
                    data-ps="په افغانستان کې د ERP په اړه عامې پوښتنې">
                    Afghanistan Cloud ERP & Operations FAQs
                </h2>
            </div>

            <div class="max-w-800 mx-auto" style="max-width: 840px;">
                <div class="accordion accordion-af" id="afFaqAccordion">
                    
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed af-trans" type="button" data-bs-toggle="collapse" data-bs-target="#afFaq1"
                                data-en="Q1. What is ERP software in Afghanistan?"
                                data-fa="سوال ۱. نرم‌افزار ERP در افغانستان چیست و چه کاربردی دارد؟"
                                data-ps="پوښتنه ۱. په افغانستان کې د ERP سافټویر څه دی او څه ګټه لري؟">
                                Q1. What is ERP software in Afghanistan?
                            </button>
                        </h2>
                        <div id="afFaq1" class="accordion-collapse collapse" data-bs-parent="#afFaqAccordion">
                            <div class="accordion-body af-trans"
                                data-en="ERP software in Afghanistan is a centralized business management system that helps organizations manage sales, purchasing, inventory, accounting, customers, suppliers, employees and business reporting."
                                data-fa="نرم‌افزار ERP یک پلتفرم مدیریت همه‌جانبه است که فروشات، خریدها، گدام‌ها، حسابداری، طلبات، سوانح کارمندان و گزارشات مالی را به صورت یکپارچه اداره می‌کند."
                                data-ps="د ERP سافټویر یو مرکزي مدیریتي سیسټم دی چې د پلور، پیرود، ګودامونو، حسابدارۍ، پیرودونکو، کارمندانو او مالي راپورونو اداره کولو کې مرسته کوي.">
                                ERP software in Afghanistan is a centralized business management system that helps organizations manage sales, purchasing, inventory, accounting, customers, suppliers, employees and business reporting.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed af-trans" type="button" data-bs-toggle="collapse" data-bs-target="#afFaq2"
                                data-en="Q2. Which businesses can use Digify ERP in Afghanistan?"
                                data-fa="سوال ۲. کدام شرکت‌ها و فروشگاه‌ها می‌توانند از دیجی‌فای در افغانستان استفاده کنند؟"
                                data-ps="پوښتنه ۲. کومې سوداګرۍ کولی شي په افغانستان کې ډیجیفای وکاروي؟">
                                Q2. Which businesses can use Digify ERP in Afghanistan?
                            </button>
                        </h2>
                        <div id="afFaq2" class="accordion-collapse collapse" data-bs-parent="#afFaqAccordion">
                            <div class="accordion-body af-trans"
                                data-en="Digify ERP is designed for retailers, supermarkets, wholesalers, distributors, agricultural businesses, manufacturers, construction companies, mining businesses, logistics companies, pharmacies, restaurants, carpet businesses and growing enterprises."
                                data-fa="دیجی‌فای برای سوپرمارکت‌ها، عمده‌فروشان، تجار میوه خشک، فابریکات تولیدی، شرکت‌های ساختمانی، شرکت‌های معادن، قالین‌بافان، دواخانه‌ها و شرکت‌های وارداتی مناسب است."
                                data-ps="ډیجیفای د سوپرمارکیټونو، عمده پلورونکو، د وچې میوې سوداګرو، تولیدي فابریکو، ساختماني شرکتونو، درملتونونو او قالین پلورونکو لپاره چمتو شوی دی.">
                                Digify ERP is designed for retailers, supermarkets, wholesalers, distributors, agricultural businesses, manufacturers, construction companies, mining businesses, logistics companies, pharmacies, restaurants, carpet businesses and growing enterprises.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed af-trans" type="button" data-bs-toggle="collapse" data-bs-target="#afFaq3"
                                data-en="Q3. Can supermarkets use ERP software in Afghanistan?"
                                data-fa="سوال ۳. آیا سوپرمارکت‌های افغانستان می‌توانند از سیستم POS و ERP استفاده کنند؟"
                                data-ps="پوښتنه ۳. ایا سوپرمارکیټونه په افغانستان کې د ERP سافټویر کارولی شي؟">
                                Q3. Can supermarkets use ERP software in Afghanistan?
                            </button>
                        </h2>
                        <div id="afFaq3" class="accordion-collapse collapse" data-bs-parent="#afFaqAccordion">
                            <div class="accordion-body af-trans"
                                data-en="Yes. Supermarkets can use ERP software to manage products, POS sales, purchasing, inventory, suppliers, customers, expenses and branch-level business reporting across 15+ product categories."
                                data-fa="بله. سوپرمارکت‌ها می‌توانند از بارکودخوان، ترازو دیجیتال، چاپ فاکتور سریع، مدیریت تاریخ انقضا و حسابداری در ۱۵ کتگوری اجناس استفاده نمایند."
                                data-ps="هو. سوپرمارکیټونه کولی شي د بارکوډ سکینر، ډیجیټل تلې او د ګړندي فاکتور له لارې خپل پلور او ګودام کنټرول کړي.">
                                Yes. Supermarkets can use ERP software to manage products, POS sales, purchasing, inventory, suppliers, customers, expenses and branch-level business reporting across 15+ product categories.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed af-trans" type="button" data-bs-toggle="collapse" data-bs-target="#afFaq4"
                                data-en="Q4. Can agricultural dry fruit exporters use Digify ERP?"
                                data-fa="سوال ۴. تجار و صادرکنندگان میوه خشک چگونه می‌توانند از ERP استفاده کنند؟"
                                data-ps="پوښتنه ۴. د وچې میوې صادروونکي څنګه کولی شي دغه سافټویر وکاروي؟">
                                Q4. Can agricultural dry fruit exporters use Digify ERP?
                            </button>
                        </h2>
                        <div id="afFaq4" class="accordion-collapse collapse" data-bs-parent="#afFaqAccordion">
                            <div class="accordion-body af-trans"
                                data-en="Yes. Dry fruit exporters (raisins, almonds, pistachios, saffron, figs) can manage purchase lots, grading, warehouse stock, packaging, export proformas, and multi-currency international payments."
                                data-fa="بله. صادرکنندگان کشمش، بادام، پسته، زعفران و انجیر می‌توانند درجه‌بندی کیفیت، گدام‌داری، بسته‌بندی و فاکتورهای چند ارزی صادراتی را مدیریت کنند."
                                data-ps="هو. د کشمشو، بادامو، پستې او زعفرانو صادرونکي کولی شي د ګودامونو توکي او صادراتي فاکتورونه په اسانۍ سره ثبت کړي.">
                                Yes. Dry fruit exporters (raisins, almonds, pistachios, saffron, figs) can manage purchase lots, grading, warehouse stock, packaging, export proformas, and multi-currency international payments.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed af-trans" type="button" data-bs-toggle="collapse" data-bs-target="#afFaq5"
                                data-en="Q5. Can mining and extraction companies use Digify ERP?"
                                data-fa="سوال ۵. شرکت‌های استخراج معادن در افغانستان چه استفاده‌ای از ERP دارند؟"
                                data-ps="پوښتنه ۵. د کانونو استخراجي شرکتونه څنګه ترې ګټه اخلي؟">
                                Q5. Can mining and extraction companies use Digify ERP?
                            </button>
                        </h2>
                        <div id="afFaq5" class="accordion-collapse collapse" data-bs-parent="#afFaqAccordion">
                            <div class="accordion-body af-trans"
                                data-en="ERP can support mining businesses with procurement, equipment maintenance logs, spare parts inventory, fuel consumption tracking, mine-site expenses, and project-level financial reporting."
                                data-fa="شرکت‌های معادن می‌توانند پرزه جات ماشینری، تیل و مصارف ساحوی، تدارکات و مصارف پروژه‌های استخراج را به صورت شفاف ثبت و پیگیری کنند."
                                data-ps="د کانونو شرکتونه کولی شي د ماشینونو پرزې، تېل او د کار ساحې لګښتونه په شفاف ډول ثبت کړي.">
                                ERP can support mining businesses with procurement, equipment maintenance logs, spare parts inventory, fuel consumption tracking, mine-site expenses, and project-level financial reporting.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed af-trans" type="button" data-bs-toggle="collapse" data-bs-target="#afFaq6"
                                data-en="Q6. Does Digify ERP support multiple branches and warehouses?"
                                data-fa="سوال ۶. آیا دیجی‌فای از چندین شعبه و گدام در ولایات مختلف پشتیبانی می‌کند؟"
                                data-ps="پوښتنه ۶. ایا ډیجیفای په مختلفو ولایتونو کې د څو څانګو ملاتړ کوي؟">
                                Q6. Does Digify ERP support multiple branches and warehouses?
                            </button>
                        </h2>
                        <div id="afFaq6" class="accordion-collapse collapse" data-bs-parent="#afFaqAccordion">
                            <div class="accordion-body af-trans"
                                data-en="Yes. The platform supports multi-location operations including branch-wise inventory, inter-branch stock transfers, central warehouse dispatch, and consolidated profit & loss statements."
                                data-fa="بله. پلتفرم قابلیت مدیریت همزمان شعبات در کابل، هرات، قندهار، بلخ و سایر ولایات همراه با انتقال بین‌الگدامی را دارا می‌باشد."
                                data-ps="هو. تاسو کولی شئ په کابل، هرات، کندهار او نورو ولایتونو کې خپلې څانګې په یو وخت کنټرول کړئ.">
                                Yes. The platform supports multi-location operations including branch-wise inventory, inter-branch stock transfers, central warehouse dispatch, and consolidated profit & loss statements.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed af-trans" type="button" data-bs-toggle="collapse" data-bs-target="#afFaq7"
                                data-en="Q7. Is Digify ERP cloud based and secure?"
                                data-fa="سوال ۷. آیا نرم‌افزار دیجی‌فای ابری (Cloud) و امن است؟"
                                data-ps="پوښتنه ۷. ایا ډیجیفای کلاوډ او خوندي دی؟">
                                Q7. Is Digify ERP cloud based and secure?
                            </button>
                        </h2>
                        <div id="afFaq7" class="accordion-collapse collapse" data-bs-parent="#afFaqAccordion">
                            <div class="accordion-body af-trans"
                                data-en="Digify provides centralized access to business data through secure cloud-ready deployment architecture with automated daily backups and SSL encryption."
                                data-fa="بله. دیجی‌فای بر روی سرورهای فوق‌العاده امن ابری با بک‌آپ اتوماتیک روزانه کار می‌کند تا اطلاعات تجارتی شما همیشه مصون بماند."
                                data-ps="هو. ډیجیفای په خوندي کلاوډ سرورونو کې کار کوي او هره ورځ اتوماتیک بیک اپ اخلي.">
                                Digify provides centralized access to business data through secure cloud-ready deployment architecture with automated daily backups and SSL encryption.
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!-- 7. FINAL CTA SECTION -->
    <section class="af-section bg-dark-af text-center">
        <div class="container">
            <span class="section-badge-af-dark af-trans" data-en="Digitize Your Business in Afghanistan" data-fa="کسب‌وکار خود را در افغانستان دیجیتالی کنید" data-ps="په افغانستان کې خپله سوداګري ډیجیټل کړئ">Digitize Your Business in Afghanistan</span>
            <h2 class="section-title-af-dark mb-3 af-trans" 
                data-en="Ready to Modernize Your Operations with Digify ERP?" 
                data-fa="آماده‌اید کسب‌وکار خود را با سیستم مدرن ERP متحول سازید؟"
                data-ps="ایا چمتو یاست چې خپله سوداګري په عصري ERP سره بدله کړئ؟">
                Ready to Modernize Your Operations with Digify ERP?
            </h2>
            <p class="section-sub-af-dark mx-auto mb-4 af-trans"
                data-en="Whether you operate a supermarket in Kabul, a wholesale trading company in Herat, a dry fruit export house in Kandahar, a construction firm or a manufacturing unit — Digify brings sales, inventory, purchasing and accounting together."
                data-fa="چه یک سوپرمارکت در کابل داشته باشید، چه شرکت تجارتی در هرات یا صادرکننده میوه خشک در قندهار — دیجی‌فای تمامی بخش‌های کاری شما را یکپارچه می‌سازد."
                data-ps="که تاسو په کابل کې سوپرمارکیټ لرئ، یا په هرات او کندهار کې سوداګري — ډیجیفای ستاسو پلور، ګودام او حسابداري یوځای کوي.">
                Whether you operate a supermarket in Kabul, a wholesale trading company in Herat, a dry fruit export house in Kandahar, a construction firm or a manufacturing unit — Digify brings sales, inventory, purchasing and accounting together.
            </p>
            <div class="d-flex justify-content-center gap-3 flex-wrap">
                <a href="#demo-form" class="btn btn-af-primary px-4 py-3">
                    <i class="fas fa-calendar-check me-2"></i>
                    <span class="af-trans" data-en="Request a Free Demo" data-fa="درخواست دموی رایگان" data-ps="وړیا ډیمو وغواړئ">Request a Free Demo</span>
                </a>
                <a href="https://wa.me/919914444588?text=Hello%20Digify%20Afghanistan%20ERP%20Team" target="_blank" class="btn btn-af-outline px-4 py-3">
                    <i class="fab fa-whatsapp text-success me-2"></i>
                    <span class="af-trans" data-en="Talk to Our ERP Team" data-fa="تماس با تیم دیجی‌فای" data-ps="زموږ له ټیم سره اړیکه">Talk to Our ERP Team</span>
                </a>
            </div>
        </div>
    </section>

</div>

<!-- Language Switcher & Persistence Script -->
<script>
function switchAfLang(lang) {
    var btnEn = document.getElementById('btnAfLangEn');
    var btnFa = document.getElementById('btnAfLangFa');
    var btnPs = document.getElementById('btnAfLangPs');
    var wrapper = document.getElementById('afWrapper');
    
    localStorage.setItem('digify_af_lang', lang);
    
    // Toggle active buttons
    [btnEn, btnFa, btnPs].forEach(function(b) { if(b) b.classList.remove('active'); });
    if (lang === 'fa' && btnFa) btnFa.classList.add('active');
    else if (lang === 'ps' && btnPs) btnPs.classList.add('active');
    else if (btnEn) btnEn.classList.add('active');
    
    // Toggle RTL for Dari & Pashto
    if (wrapper) {
        if (lang === 'fa' || lang === 'ps') {
            wrapper.classList.add('rtl-mode');
        } else {
            wrapper.classList.remove('rtl-mode');
        }
    }
    
    // Translate all .af-trans elements
    document.querySelectorAll('.af-trans').forEach(function(el) {
        var text = el.getAttribute('data-' + lang);
        if (text) {
            el.innerHTML = text;
        }
    });
    
    // Translate placeholders
    document.querySelectorAll('.af-trans-ph').forEach(function(el) {
        var ph = el.getAttribute('data-' + lang + '-ph');
        if (ph) {
            el.setAttribute('placeholder', ph);
        }
    });
}

document.addEventListener('DOMContentLoaded', function() {
    var savedLang = localStorage.getItem('digify_af_lang') || 'en';
    switchAfLang(savedLang);
});
</script>

<?php include(__DIR__ . '/../../footer.php'); ?>
