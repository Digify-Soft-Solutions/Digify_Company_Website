<?php 
include_once(__DIR__ . '/../../db.php');
include_once(__DIR__ . '/../../fetch_meta.php');

$pageTitle = "Construction ERP Software in Afghanistan | Project & Contractor ERP";
$pageDescription = "Manage construction projects, building materials, cement, steel, contractors, purchases and project costing with Digify's Construction ERP in Afghanistan.";
$pageKeywords = "Construction ERP Afghanistan, Construction project software Afghanistan, Building materials ERP Afghanistan, Cement steel inventory Afghanistan, Contractor management Kabul";
$pageCanonical = "https://www.digifysoft.in/construction-erp-software-afghanistan";

include(__DIR__ . '/../../top.php');
include(__DIR__ . '/../../header.php');
?>

<style>
/* Afghanistan Construction Design System */
.afcn-page-wrapper {
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
.afcn-hero {
    background: linear-gradient(135deg, #1e293b 0%, #334155 50%, #0f766e 100%);
    color: #ffffff;
    padding: 70px 0 85px;
    position: relative;
    overflow: hidden;
    border-bottom: 4px solid #14b8a6;
}
.afcn-hero::before {
    content: '';
    position: absolute;
    top: -15%;
    right: -10%;
    width: 650px;
    height: 650px;
    background: radial-gradient(circle, rgba(20, 184, 166, 0.28) 0%, rgba(245, 158, 11, 0.12) 50%, rgba(0, 0, 0, 0) 75%);
    border-radius: 50%;
    pointer-events: none;
}
.afcn-hero-badge {
    background: rgba(20, 184, 166, 0.18);
    border: 1px solid rgba(94, 234, 212, 0.45);
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
.afcn-hero h1 {
    font-size: 42px;
    font-weight: 900;
    line-height: 1.25;
    margin-bottom: 18px;
    letter-spacing: -0.5px;
}
.afcn-hero-sub {
    font-size: 18px;
    font-weight: 600;
    color: #fde047;
    line-height: 1.5;
    margin-bottom: 14px;
}
.afcn-hero-desc {
    font-size: 16px;
    line-height: 1.7;
    color: rgba(255, 255, 255, 0.88);
    max-width: 700px;
    margin-bottom: 28px;
}

/* Language Switcher */
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
.btn-afcn-primary {
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
.btn-afcn-primary:hover {
    background: linear-gradient(135deg, #0f766e 0%, #115e59 100%);
    color: #ffffff;
    transform: translateY(-2px);
}
.btn-afcn-outline {
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
.btn-afcn-outline:hover {
    background: rgba(255, 255, 255, 0.18);
    color: #ffffff;
    transform: translateY(-2px);
}

/* Sections */
.afcn-section { padding: 75px 0; }
.bg-light-afcn { background-color: #f8fafc; }
.section-badge-afcn {
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
.section-title-afcn {
    font-size: 34px;
    font-weight: 900;
    color: #0f172a;
    line-height: 1.3;
    margin-bottom: 16px;
    letter-spacing: -0.5px;
}

/* Feature Cards */
.afcn-card {
    background: #ffffff;
    border: 1px solid #e2e8f0;
    border-radius: 16px;
    padding: 26px;
    transition: all 0.3s ease;
    height: 100%;
    display: flex;
    flex-direction: column;
}
.afcn-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 20px 30px -10px rgba(0, 0, 0, 0.08);
    border-color: #5eead4;
}
.afcn-card-icon {
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
.afcn-card h4 {
    font-size: 18px;
    font-weight: 800;
    color: #0f172a;
    margin-bottom: 10px;
}
.afcn-card p {
    font-size: 14px;
    color: #64748b;
    line-height: 1.6;
    margin-bottom: 16px;
    flex-grow: 1;
}
.afcn-checklist {
    list-style: none;
    padding: 0;
    margin: 0;
}
.afcn-checklist li {
    font-size: 13.5px;
    color: #334155;
    margin-bottom: 8px;
    display: flex;
    align-items: center;
    gap: 8px;
}
.afcn-checklist li i {
    color: #0d9488;
    font-size: 14px;
    flex-shrink: 0;
}

@media (max-width: 991px) {
    .afcn-hero { padding: 45px 0 55px; }
    .afcn-hero h1 { font-size: 28px; line-height: 1.3; }
    .hero-lead-card { margin-top: 25px; padding: 24px 20px; }
    .section-title-afcn { font-size: 24px; }
}
@media (max-width: 576px) {
    .afcn-hero { padding: 35px 0 45px; }
    .afcn-hero h1 { font-size: 23px; }
    .btn-afcn-primary, .btn-afcn-outline { width: 100%; justify-content: center; }
}
</style>

<div class="afcn-page-wrapper" id="afcnWrapper">

    <!-- HERO SECTION -->
    <section class="afcn-hero" id="hero">
        <div class="container position-relative" style="z-index: 2;">
            <div class="row align-items-center g-4">
                <div class="col-lg-7">
                    <!-- Language Switcher -->
                    <div class="lang-toggle-bar">
                        <button class="lang-pill active" id="btnCnLangEn" onclick="switchCnLang('en')">🇬🇧 English</button>
                        <button class="lang-pill" id="btnCnLangFa" onclick="switchCnLang('fa')">🇦🇫 دری (Dari)</button>
                        <button class="lang-pill" id="btnCnLangPs" onclick="switchCnLang('ps')">🇦🇫 پښتو (Pashto)</button>
                    </div>

                    <div class="afcn-hero-badge">
                        <span>🏗️</span>
                        <span class="afcn-trans" 
                            data-en="15% Industrial Growth in Afghanistan • World Bank 2024" 
                            data-fa="۱۵٪ رشد سکتور ساختمانی در افغانستان • بانک جهانی"
                            data-ps="په افغانستان کې د ساختماني سکتور ۱۵٪ وده">
                            15% Industrial Growth in Afghanistan • World Bank 2024
                        </span>
                    </div>

                    <h1 class="afcn-trans" 
                        data-en="Construction ERP Software in Afghanistan" 
                        data-fa="نرم‌افزار مدیریت شرکت‌های ساختمانی در افغانستان"
                        data-ps="په افغانستان کې د ساختماني شرکتونو د مدیریت ERP سافټویر">
                        Construction ERP Software in Afghanistan
                    </h1>

                    <div class="afcn-hero-sub afcn-trans"
                        data-en="Manage construction projects, materials, suppliers, purchases, expenses, inventory, contractors and project financial information from one platform."
                        data-fa="مدیریت مصالح ساختمانی، سیمنت، سیخ گول، قراردادی‌های فرعی، ماشینری و بودجه هر پروژه با دیجی‌فای."
                        data-ps="د ودانیزو توکو، سمنټو، سیخ ګول او د قراردادیانو لګښتونه په یو مالي سیسټم کې کنټرول کړئ.">
                        Manage construction projects, materials, suppliers, purchases, expenses, inventory, contractors and project financial information from one platform.
                    </div>

                    <p class="afcn-hero-desc afcn-trans"
                        data-en="Construction was one of the strongest parts of Afghanistan's industrial activity with estimated growth of 15%. Digify provides site-wise material inventory, contractor billings, daily expense logs, and project profitability statements."
                        data-fa="سکتور ساختمانی یکی از پویاترین بخش‌های اقتصادی افغانستان است. دیجی‌فای به شرکت‌های سرک‌سازی، ساختمانی و فروشندگان مواد اولیه کمک می‌کند تا بر مصارف و تحویلی اجناس نظارت کامل داشته باشند."
                        data-ps="ساختماني سکتور په افغانستان کې په چټکۍ سره د ودې په حال کې دی. ډیجیفای د ودانیزو شرکتونو سره د لګښتونو او موادو په سم مدیریت کې مرسته کوي.">
                        Construction was one of the strongest parts of Afghanistan's industrial activity with estimated growth of 15%. Digify provides site-wise material inventory, contractor billings, daily expense logs, and project profitability statements.
                    </p>

                    <div class="d-flex flex-wrap gap-3 mb-4">
                        <a href="#demo-form" class="btn btn-afcn-primary">
                            <i class="fas fa-calendar-check"></i>
                            <span class="afcn-trans" data-en="Request Construction Demo" data-fa="درخواست دموی ساختمانی" data-ps="د ساختماني ډیمو غوښتنه">Request Construction Demo</span>
                        </a>
                        <a href="erp-software-afghanistan.php" class="btn btn-afcn-outline">
                            <i class="fas fa-arrow-left"></i>
                            <span class="afcn-trans" data-en="Back to Afghanistan Main ERP" data-fa="بازگشت به صفحه اصلی افغانستان" data-ps="د افغانستان اصلي پاڼې ته ستنیدل">Back to Afghanistan Main ERP</span>
                        </a>
                    </div>
                </div>

                <!-- Right Form -->
                <div class="col-lg-5" id="demo-form">
                    <div class="hero-lead-card">
                        <div class="d-flex align-items-center justify-content-between mb-2">
                            <span class="badge bg-teal text-white px-3 py-1 rounded-pill font-monospace afcn-trans" style="background-color: #0d9488;" data-en="🏗️ CONSTRUCTION SUITE" data-fa="🏗️ سیستم ساختمانی" data-ps="🏗️ ساختماني سیسټم">🏗️ CONSTRUCTION SUITE</span>
                            <span class="text-muted small"><i class="fas fa-clock text-warning"></i> <span class="afcn-trans" data-en="15-Min Live Demo" data-fa="دموی ۱۵ دقیقه‌ای" data-ps="۱۵ دقیقې ډیمو">15-Min Live Demo</span></span>
                        </div>
                        <h3 class="afcn-trans" data-en="Schedule Construction Demo" data-fa="ثبت نوبت دموی ساختمانی" data-ps="د ساختماني ډیمو مهالویش">Schedule Construction Demo</h3>
                        <p class="small text-muted mb-3 afcn-trans" data-en="See project costing, site inventory, and contractor ledger tracking live." data-fa="مصارف هر پروژه، گدام ساحه و حساب قراردادی‌ها را زنده مشاهده کنید." data-ps="د پروژو لګښتونه او د ګودام توکي په ژوندي ډول وګورئ.">See project costing, site inventory, and contractor ledger tracking live.</p>
                        
                        <form action="send_mail.php" method="POST" id="afghanistanConstructionForm">
                            <input type="hidden" name="source" value="Afghanistan Construction ERP Page">
                            <input type="hidden" name="country" value="Afghanistan">
                            
                            <div class="mb-2">
                                <label class="form-label small fw-bold text-dark afcn-trans" data-en="Full Name" data-fa="نام و تخلص" data-ps="بشپړ نوم">Full Name</label>
                                <input type="text" name="name" class="form-control afcn-trans-ph" placeholder="e.g. Eng. Mohammad Tariq" data-en-ph="e.g. Eng. Mohammad Tariq" data-fa-ph="مثال: انجنیر محمد طارق" data-ps-ph="مثال: انجنیر محمد طارق" required>
                            </div>

                            <div class="mb-2">
                                <label class="form-label small fw-bold text-dark afcn-trans" data-en="Construction Firm / Trader Name" data-fa="نام شرکت ساختمانی یا فروشگاه مصالح" data-ps="د ساختماني شرکت نوم">Construction Firm / Trader Name</label>
                                <input type="text" name="company" class="form-control afcn-trans-ph" placeholder="e.g. Kabul Builders & Contracting" data-en-ph="e.g. Kabul Builders & Contracting" data-fa-ph="مثال: شرکت ساختمانی و سرک‌سازی کابل" data-ps-ph="مثال: د کابل ساختماني شرکت" required>
                            </div>

                            <div class="row g-2 mb-2">
                                <div class="col-6">
                                    <label class="form-label small fw-bold text-dark afcn-trans" data-en="WhatsApp / Phone" data-fa="شماره تماس / واتساپ" data-ps="د اړیکې شمېره">WhatsApp / Phone</label>
                                    <input type="tel" name="phone" class="form-control" placeholder="+93 7X XXX XXXX" required>
                                </div>
                                <div class="col-6">
                                    <label class="form-label small fw-bold text-dark afcn-trans" data-en="Sector Activity" data-fa="نوعیت فعالیت" data-ps="د فعالیت ډول">Sector Activity</label>
                                    <select name="activity" class="form-select" required>
                                        <option value="General Construction Contractor" class="afcn-trans" data-en="Construction Contractor" data-fa="شرکت ساختمانی و پیمانکاری" data-ps="ساختماني او قراردادي شرکت">Construction Contractor</option>
                                        <option value="Building Materials Trader" class="afcn-trans" data-en="Building Materials Wholesaler" data-fa="عمده‌فروشی سیمنت و سیخ گول" data-ps="د سمنټو او سیخ ګول پلورونکی">Building Materials Wholesaler</option>
                                        <option value="Roads & Infrastructure" class="afcn-trans" data-en="Roads & Infrastructure" data-fa="سرک‌سازی و زیربنا" data-ps="سرک جوړونه او زیربناوې">Roads & Infrastructure</option>
                                    </select>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-afcn-primary w-100 py-2 mt-2">
                                <span class="afcn-trans" data-en="Schedule Live Construction Demo" data-fa="ثبت نوبت دموی زنده" data-ps="ژوندی ډیمو پیل کړئ">Schedule Live Construction Demo</span>
                                <i class="fas fa-arrow-right ms-2"></i>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CORE CONSTRUCTION MODULES -->
    <section class="afcn-section bg-light-afcn" id="construction-features">
        <div class="container">
            <div class="text-center mb-5">
                <span class="section-badge-afcn afcn-trans" data-en="Site & Materials Intelligence" data-fa="مدیریت ساحه و مصالح ساختمانی" data-ps="د ساحې او توکو مدیریت">Site & Materials Intelligence</span>
                <h2 class="section-title-afcn afcn-trans" 
                    data-en="Complete Construction Project & Inventory Architecture" 
                    data-fa="سیستم کنترل پروژه، گدام ساحه و حساب قراردادی‌ها"
                    data-ps="د پروژو، ساحوي ګودام او قراردادیانو د کنټرول سیسټم">
                    Complete Construction Project & Inventory Architecture
                </h2>
            </div>

            <div class="row g-4">
                <div class="col-md-6 col-lg-3">
                    <div class="afcn-card">
                        <div class="afcn-card-icon"><i class="fas fa-cubes"></i></div>
                        <h4 class="afcn-trans" data-en="Site-Wise Material Stock" data-fa="موجودی مصالح در هر ساحه" data-ps="په ساحه کې د توکو موجودي">Site-Wise Material Stock</h4>
                        <p class="afcn-trans" data-en="Track cement bags, steel tonnage, bricks, sand, gravel, and plumbing fixtures per project site." data-fa="ثبت دقیق خریطه‌های سیمنت، تناژ سیخ گول، خشت، جغل و پلاستیک در گدام هر پروژه." data-ps="په هره پروژه کې د سمنټو، سیخ ګول، خښتو او جغل دقیق حساب.">Track cement bags, steel tonnage, bricks, sand, gravel, and plumbing fixtures per project site.</p>
                        <ul class="afcn-checklist">
                            <li class="afcn-trans" data-en="<i class='fas fa-check-circle'></i> Multi-unit measurement conversions" data-fa="<i class='fas fa-check-circle'></i> تبدیل واحدها (بوجی، تن، متر، خشت)" data-ps="<i class='fas fa-check-circle'></i> د واحدونو بدلون (بوجۍ، ټن، متر)"><i class="fas fa-check-circle"></i> Multi-unit measurement conversions</li>
                            <li class="afcn-trans" data-en="<i class='fas fa-check-circle'></i> Delivery dispatch notes & GRN" data-fa="<i class='fas fa-check-circle'></i> پارچه تحویلی و رسید جنس در ساحه" data-ps="<i class='fas fa-check-circle'></i> د موادو د رسید او تسلیمۍ پارچه"><i class="fas fa-check-circle"></i> Delivery dispatch notes & GRN</li>
                            <li class="afcn-trans" data-en="<i class='fas fa-check-circle'></i> Material wastage & theft control" data-fa="<i class='fas fa-check-circle'></i> جلوگیری از هدررفت و سرقت مصالح" data-ps="<i class='fas fa-check-circle'></i> د توکو د ضایع کیدو مخنیوی"><i class="fas fa-check-circle"></i> Material wastage & theft control</li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3">
                    <div class="afcn-card">
                        <div class="afcn-card-icon"><i class="fas fa-user-friends"></i></div>
                        <h4 class="afcn-trans" data-en="Subcontractor Ledgers" data-fa="حساب قراردادی‌ها و گلکاران" data-ps="د فرعي قراردادیانو حساب">Subcontractor Ledgers</h4>
                        <p class="afcn-trans" data-en="Manage plumbing, electrical, concrete pouring, and masonry subcontractors with milestone billings." data-fa="ثبت قراردادهای فرعی، پیش‌پرداخت، صورت وضعیت کارکرد و تصفیه حساب مرحله‌ای." data-ps="د برښنا، نل دوانۍ او ساختماني قراردادیانو د کارونو او پیسو حساب.">Manage plumbing, electrical, concrete pouring, and masonry subcontractors with milestone billings.</p>
                        <ul class="afcn-checklist">
                            <li class="afcn-trans" data-en="<i class='fas fa-check-circle'></i> Milestone progress tracking" data-fa="<i class='fas fa-check-circle'></i> پرداخت بر اساس پیشرفت کار" data-ps="<i class='fas fa-check-circle'></i> د کار د پرمختګ له مخې تادیه"><i class="fas fa-check-circle"></i> Milestone progress tracking</li>
                            <li class="afcn-trans" data-en="<i class='fas fa-check-circle'></i> Retention money deduction logs" data-fa="<i class='fas fa-check-circle'></i> کسر تضمین حسن انجام کار" data-ps="<i class='fas fa-check-circle'></i> د کار د ضمانت کسر ثبت"><i class="fas fa-check-circle"></i> Retention money deduction logs</li>
                            <li class="afcn-trans" data-en="<i class='fas fa-check-circle'></i> Contractor running balances" data-fa="<i class='fas fa-check-circle'></i> باقی‌داری و صورت حساب قراردادی" data-ps="<i class='fas fa-check-circle'></i> د قراردادي د حساب پاڼه"><i class="fas fa-check-circle"></i> Contractor running balances</li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3">
                    <div class="afcn-card">
                        <div class="afcn-card-icon"><i class="fas fa-truck"></i></div>
                        <h4 class="afcn-trans" data-en="Equipment & Fuel" data-fa="ماشینری و مصرف تیل ساحه" data-ps="ماشینونه او د تېلو مصرف">Equipment & Fuel</h4>
                        <p class="afcn-trans" data-en="Track crane rentals, concrete mixer trucks, generator diesel logs, and machinery maintenance." data-fa="ثبت کرایه جرثقیل، میکسر کانکریت، جنراتورها، مصرف تیل و سرویس ماشینری." data-ps="د کرین، مکسر او جنراتورونو د تېلو مصرف او کرایه ثبتول.">Track crane rentals, concrete mixer trucks, generator diesel logs, and machinery maintenance.</p>
                        <ul class="afcn-checklist">
                            <li class="afcn-trans" data-en="<i class='fas fa-check-circle'></i> Equipment rental hour logs" data-fa="<i class='fas fa-check-circle'></i> ثبت ساعت کارکرد موترهای کرایه‌ای" data-ps="<i class='fas fa-check-circle'></i> د کرایي موټرو د ساعتونو حساب"><i class="fas fa-check-circle"></i> Equipment rental hour logs</li>
                            <li class="afcn-trans" data-en="<i class='fas fa-check-circle'></i> Generator diesel distribution" data-fa="<i class='fas fa-check-circle'></i> ثبت دقیق مصرف تیل جنراتور ساحه" data-ps="<i class='fas fa-check-circle'></i> د جنراتور د تېلو ثبت"><i class="fas fa-check-circle"></i> Generator diesel distribution</li>
                            <li class="afcn-trans" data-en="<i class='fas fa-check-circle'></i> Spare parts & repair vouchers" data-fa="<i class='fas fa-check-circle'></i> سند مصرف ترمیمات و پرزه جات" data-ps="<i class='fas fa-check-circle'></i> د ترمیماتو لګښتونه"><i class="fas fa-check-circle"></i> Spare parts & repair vouchers</li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3">
                    <div class="afcn-card">
                        <div class="afcn-card-icon"><i class="fas fa-calculator"></i></div>
                        <h4 class="afcn-trans" data-en="Project P&L & Budget" data-fa="مفاد و نقص و بودجه پروژه" data-ps="د پروژې مالي راپور او ګټه">Project P&L & Budget</h4>
                        <p class="afcn-trans" data-en="Compare initial BOQ budget against actual incurred expenses to protect profit margins on every contract." data-fa="مقایسه برآورد اولیه با مصارف واقعی ساحه جهت جلوگیری از ضرر در پروژه‌ها." data-ps="د اټکل شوي لګښت او اصلي لګښت پرتله کول ترڅو ګټه خوندي پاتې شي.">Compare initial BOQ budget against actual incurred expenses to protect profit margins on every contract.</p>
                        <ul class="afcn-checklist">
                            <li class="afcn-trans" data-en="<i class='fas fa-check-circle'></i> Budget vs Actual cost analysis" data-fa="<i class='fas fa-check-circle'></i> مقایسه بودجه با مصرف واقعی" data-ps="<i class='fas fa-check-circle'></i> د بودیجې او مصرف پرتله"><i class="fas fa-check-circle"></i> Budget vs Actual cost analysis</li>
                            <li class="afcn-trans" data-en="<i class='fas fa-check-circle'></i> Project-wise net margin reports" data-fa="<i class='fas fa-check-circle'></i> گزارش مفاد خالص به تفکیک هر پروژه" data-ps="<i class='fas fa-check-circle'></i> د هرې پروژې د ګټې راپور"><i class="fas fa-check-circle"></i> Project-wise net margin reports</li>
                            <li class="afcn-trans" data-en="<i class='fas fa-check-circle'></i> Client installment payment tracking" data-fa="<i class='fas fa-check-circle'></i> پیگیری اقساط و طلبات از صاحب پروژه" data-ps="<i class='fas fa-check-circle'></i> له پیرودونکي د قسطونو اخیستل"><i class="fas fa-check-circle"></i> Client installment payment tracking</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FINAL CTA -->
    <section class="afcn-section bg-dark text-white text-center" style="background: #1e293b !important;">
        <div class="container">
            <h2 class="fw-bold mb-3 afcn-trans" 
                data-en="Deliver Construction Projects on Time & Within Budget in Afghanistan" 
                data-fa="پروژه‌های ساختمانی خود را به موقع و با بودجه دقیق تکمیل کنید"
                data-ps="په افغانستان کې خپلې ساختماني پروژې پر وخت او په ټاکلې بودیجه بشپړې کړئ">
                Deliver Construction Projects on Time & Within Budget in Afghanistan
            </h2>
            <p class="text-light opacity-75 max-w-700 mx-auto mb-4 afcn-trans"
                data-en="Control material deliveries, eliminate site leakage, and maintain complete financial visibility with Digify Construction ERP."
                data-fa="با دیجی‌فای از گم شدن مصالح در ساحه جلوگیری کنید، حساب قراردادی‌ها را شفاف سازید و مفاد نهایی هر پروژه را تضمین نمایید."
                data-ps="د ډیجیفای سره د ودانیزو توکو د ضایع کیدو مخه ونیسئ او د خپلو پروژو مالي حساب روښانه وساتئ.">
                Control material deliveries, eliminate site leakage, and maintain complete financial visibility with Digify Construction ERP.
            </p>
            <div class="d-flex justify-content-center gap-3 flex-wrap">
                <a href="#demo-form" class="btn btn-afcn-primary px-4 py-3"><i class="fas fa-calendar-check me-2"></i> <span class="afcn-trans" data-en="Request Construction Demo" data-fa="درخواست دموی ساختمانی" data-ps="د ساختماني ډیمو غوښتنه">Request Construction Demo</span></a>
                <a href="erp-software-afghanistan.php" class="btn btn-afcn-outline px-4 py-3"><i class="fas fa-arrow-left me-2"></i> <span class="afcn-trans" data-en="View Main Afghanistan ERP" data-fa="صفحه اصلی ERP افغانستان" data-ps="د افغانستان اصلي پاڼه">View Main Afghanistan ERP</span></a>
            </div>
        </div>
    </section>

</div>

<script>
function switchCnLang(lang) {
    var btnEn = document.getElementById('btnCnLangEn');
    var btnFa = document.getElementById('btnCnLangFa');
    var btnPs = document.getElementById('btnCnLangPs');
    var wrapper = document.getElementById('afcnWrapper');
    
    localStorage.setItem('digify_af_lang', lang);
    
    [btnEn, btnFa, btnPs].forEach(function(b) { if(b) b.classList.remove('active'); });
    if (lang === 'fa' && btnFa) btnFa.classList.add('active');
    else if (lang === 'ps' && btnPs) btnPs.classList.add('active');
    else if (btnEn) btnEn.classList.add('active');
    
    if (wrapper) {
        if (lang === 'fa' || lang === 'ps') wrapper.classList.add('rtl-mode');
        else wrapper.classList.remove('rtl-mode');
    }
    
    document.querySelectorAll('.afcn-trans').forEach(function(el) {
        var text = el.getAttribute('data-' + lang);
        if (text) { el.innerHTML = text; }
    });
    document.querySelectorAll('.afcn-trans-ph').forEach(function(el) {
        var ph = el.getAttribute('data-' + lang + '-ph');
        if (ph) { el.setAttribute('placeholder', ph); }
    });
}

document.addEventListener('DOMContentLoaded', function() {
    var savedLang = localStorage.getItem('digify_af_lang') || 'en';
    switchCnLang(savedLang);
});
</script>

<?php include(__DIR__ . '/../../footer.php'); ?>
