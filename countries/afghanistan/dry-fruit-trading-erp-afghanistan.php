<?php 
include_once(__DIR__ . '/../../db.php');
include_once(__DIR__ . '/../../fetch_meta.php');

$pageTitle = "Dry Fruit & Agricultural Trading ERP in Afghanistan | Export Software";
$pageDescription = "Manage dry fruits, almonds, raisins, pistachios, saffron, warehouses, export orders and trading operations with Digify's Dry Fruit Trading ERP in Afghanistan.";
$pageKeywords = "Dry fruit ERP Afghanistan, Raisins export software Afghanistan, Almond trading software Afghanistan, Saffron ERP Afghanistan, Pistachio trading ERP Kabul, Afghan dry fruit management";
$pageCanonical = "https://www.digifysoft.in/dry-fruit-trading-erp-afghanistan";

include(__DIR__ . '/../../top.php');
include(__DIR__ . '/../../header.php');
?>

<style>
/* Afghanistan Dry Fruit Suite Design System */
.afdf-page-wrapper {
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
.afdf-hero {
    background: linear-gradient(135deg, #78350f 0%, #92400e 50%, #1c1917 100%);
    color: #ffffff;
    padding: 70px 0 85px;
    position: relative;
    overflow: hidden;
    border-bottom: 4px solid #f59e0b;
}
.afdf-hero::before {
    content: '';
    position: absolute;
    top: -15%;
    right: -10%;
    width: 650px;
    height: 650px;
    background: radial-gradient(circle, rgba(245, 158, 11, 0.28) 0%, rgba(220, 38, 38, 0.12) 50%, rgba(0, 0, 0, 0) 75%);
    border-radius: 50%;
    pointer-events: none;
}
.afdf-hero-badge {
    background: rgba(245, 158, 11, 0.18);
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
.afdf-hero h1 {
    font-size: 42px;
    font-weight: 900;
    line-height: 1.25;
    margin-bottom: 18px;
    letter-spacing: -0.5px;
}
.afdf-hero-sub {
    font-size: 18px;
    font-weight: 600;
    color: #fef08a;
    line-height: 1.5;
    margin-bottom: 14px;
}
.afdf-hero-desc {
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
    background: linear-gradient(135deg, #d97706 0%, #f59e0b 100%);
    color: #ffffff;
    box-shadow: 0 4px 12px rgba(245, 158, 11, 0.4);
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
.btn-afdf-primary {
    background: linear-gradient(135deg, #d97706 0%, #b45309 100%);
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
    box-shadow: 0 10px 20px -5px rgba(217, 119, 6, 0.4);
    text-decoration: none;
}
.btn-afdf-primary:hover {
    background: linear-gradient(135deg, #b45309 0%, #92400e 100%);
    color: #ffffff;
    transform: translateY(-2px);
}
.btn-afdf-outline {
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
.btn-afdf-outline:hover {
    background: rgba(255, 255, 255, 0.18);
    color: #ffffff;
    transform: translateY(-2px);
}

/* Sections */
.afdf-section { padding: 75px 0; }
.bg-light-afdf { background-color: #f8fafc; }
.section-badge-afdf {
    display: inline-block;
    background: #fffbeb;
    color: #b45309;
    font-size: 12px;
    font-weight: 800;
    text-transform: uppercase;
    letter-spacing: 0.8px;
    padding: 6px 14px;
    border-radius: 20px;
    margin-bottom: 12px;
    border: 1px solid #fde68a;
}
.section-title-afdf {
    font-size: 34px;
    font-weight: 900;
    color: #0f172a;
    line-height: 1.3;
    margin-bottom: 16px;
    letter-spacing: -0.5px;
}

/* Feature Cards */
.afdf-card {
    background: #ffffff;
    border: 1px solid #e2e8f0;
    border-radius: 16px;
    padding: 26px;
    transition: all 0.3s ease;
    height: 100%;
    display: flex;
    flex-direction: column;
}
.afdf-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 20px 30px -10px rgba(0, 0, 0, 0.08);
    border-color: #f59e0b;
}
.afdf-card-icon {
    width: 52px;
    height: 52px;
    border-radius: 14px;
    background: linear-gradient(135deg, #fffbeb 0%, #fef3c7 100%);
    color: #b45309;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 22px;
    margin-bottom: 18px;
}
.afdf-card h4 {
    font-size: 18px;
    font-weight: 800;
    color: #0f172a;
    margin-bottom: 10px;
}
.afdf-card p {
    font-size: 14px;
    color: #64748b;
    line-height: 1.6;
    margin-bottom: 16px;
    flex-grow: 1;
}
.afdf-checklist {
    list-style: none;
    padding: 0;
    margin: 0;
}
.afdf-checklist li {
    font-size: 13.5px;
    color: #334155;
    margin-bottom: 8px;
    display: flex;
    align-items: center;
    gap: 8px;
}
.afdf-checklist li i {
    color: #d97706;
    font-size: 14px;
    flex-shrink: 0;
}

/* Category Grid Card */
.product-box-afdf {
    background: #ffffff;
    border: 1px solid #e2e8f0;
    border-radius: 14px;
    padding: 16px 12px;
    text-align: center;
    transition: all 0.3s ease;
    height: 100%;
}
.product-box-afdf:hover {
    border-color: #d97706;
    background: #fffbeb;
    transform: translateY(-3px);
}
.product-box-afdf i {
    font-size: 24px;
    color: #d97706;
    margin-bottom: 8px;
    display: inline-block;
}
.product-box-afdf h6 {
    font-size: 13.5px;
    font-weight: 800;
    color: #0f172a;
    margin-bottom: 3px;
}
.product-box-afdf p {
    font-size: 11.5px;
    color: #64748b;
    margin: 0;
}

@media (max-width: 991px) {
    .afdf-hero { padding: 45px 0 55px; }
    .afdf-hero h1 { font-size: 28px; line-height: 1.3; }
    .hero-lead-card { margin-top: 25px; padding: 24px 20px; }
    .section-title-afdf { font-size: 24px; }
}
@media (max-width: 576px) {
    .afdf-hero { padding: 35px 0 45px; }
    .afdf-hero h1 { font-size: 23px; }
    .btn-afdf-primary, .btn-afdf-outline { width: 100%; justify-content: center; }
}
</style>

<div class="afdf-page-wrapper" id="afdfWrapper">

    <!-- HERO SECTION -->
    <section class="afdf-hero" id="hero">
        <div class="container position-relative" style="z-index: 2;">
            <div class="row align-items-center g-4">
                <div class="col-lg-7">
                    <!-- Language Switcher -->
                    <div class="lang-toggle-bar">
                        <button class="lang-pill active" id="btnDfLangEn" onclick="switchDfLang('en')">🇬🇧 English</button>
                        <button class="lang-pill" id="btnDfLangFa" onclick="switchDfLang('fa')">🇦🇫 دری (Dari)</button>
                        <button class="lang-pill" id="btnDfLangPs" onclick="switchDfLang('ps')">🇦🇫 پښتو (Pashto)</button>
                    </div>

                    <div class="afdf-hero-badge">
                        <span>🍇</span>
                        <span class="afdf-trans" 
                            data-en="75% of Afghanistan Exports • World Bank Monitor" 
                            data-fa="۷۵٪ کل صادرات کشور • بخش میوه خشک و محصولات زراعتی"
                            data-ps="د هیواد د ټولو صادراتو ۷۵٪ • وچه او تازه میوه">
                            75% of Afghanistan Exports • World Bank Monitor
                        </span>
                    </div>

                    <h1 class="afdf-trans" 
                        data-en="Dry Fruit & Agricultural Trading ERP Software in Afghanistan" 
                        data-fa="نرم‌افزار مدیریت و صادرات میوه خشک در افغانستان"
                        data-ps="په افغانستان کې د وچو میوو او صادراتو د مدیریت ERP سافټویر">
                        Dry Fruit & Agricultural Trading ERP Software in Afghanistan
                    </h1>

                    <div class="afdf-hero-sub afdf-trans"
                        data-en="Manage dry fruits, agricultural products, suppliers, warehouses, purchasing, sales and trading operations with one integrated ERP platform."
                        data-fa="مدیریت کشمش، بادام، پسته، زعفران، انجیر، انار و قراردادهای بین‌المللی با سیستم اختصاصی دیجی‌فای."
                        data-ps="د کشمشو، بادامو، پستې، زعفرانو او نړیوالو قراردادونو مدیریت په یو ځانګړي سیسټم کې.">
                        Manage dry fruits, agricultural products, suppliers, warehouses, purchasing, sales and trading operations with one integrated ERP platform.
                    </div>

                    <p class="afdf-hero-desc afdf-trans"
                        data-en="Food products represent 75% of Afghanistan exports. Digify provides product quality grading, batch lot management, export proforma invoices, bonded warehouse tracking, and multi-currency international payments."
                        data-fa="محصولات غذایی بخش اعظم صادرات افغانستان را تشکیل می‌دهند. دیجی‌فای امکانات درجه‌بندی، بسته‌بندی، ثبت دسته‌ها (Batch) و فاکتورهای چند ارزی صادرات به هند، امارات و اروپا را فراهم می‌کند."
                        data-ps="ډیجیفای د وچې میوې د درجې، بسته بندۍ، د بستو ثبت او هند، اماراتو او نورو هیوادونو ته د صادراتو فاکتورونه په اسانۍ برابروي.">
                        Food products represent 75% of Afghanistan exports. Digify provides product quality grading, batch lot management, export proforma invoices, bonded warehouse tracking, and multi-currency international payments.
                    </p>

                    <div class="d-flex flex-wrap gap-3 mb-4">
                        <a href="#demo-form" class="btn btn-afdf-primary">
                            <i class="fas fa-calendar-check"></i>
                            <span class="afdf-trans" data-en="Request Dry Fruit ERP Demo" data-fa="درخواست دموی میوه خشک" data-ps="د وچې میوې ډیمو وغواړئ">Request Dry Fruit ERP Demo</span>
                        </a>
                        <a href="erp-software-afghanistan.php" class="btn btn-afdf-outline">
                            <i class="fas fa-arrow-left"></i>
                            <span class="afdf-trans" data-en="Back to Afghanistan Main ERP" data-fa="بازگشت به صفحه اصلی افغانستان" data-ps="د افغانستان اصلي پاڼې ته ستنیدل">Back to Afghanistan Main ERP</span>
                        </a>
                    </div>
                </div>

                <!-- Right Form -->
                <div class="col-lg-5" id="demo-form">
                    <div class="hero-lead-card">
                        <div class="d-flex align-items-center justify-content-between mb-2">
                            <span class="badge bg-warning text-dark px-3 py-1 rounded-pill font-monospace afdf-trans" data-en="🍇 DRY FRUIT SUITE" data-fa="🍇 سیستم میوه خشک" data-ps="🍇 د وچې میوې سیسټم">🍇 DRY FRUIT SUITE</span>
                            <span class="text-muted small"><i class="fas fa-clock text-warning"></i> <span class="afdf-trans" data-en="15-Min Live Demo" data-fa="دموی ۱۵ دقیقه‌ای" data-ps="۱۵ دقیقې ډیمو">15-Min Live Demo</span></span>
                        </div>
                        <h3 class="afdf-trans" data-en="Schedule Dry Fruit Demo" data-fa="ثبت نوبت دموی میوه خشک" data-ps="د وچې میوې ډیمو مهالویش">Schedule Dry Fruit Demo</h3>
                        <p class="small text-muted mb-3 afdf-trans" data-en="See lot grading, export proformas, and multi-currency sales live." data-fa="درجه‌بندی بار، صدور فاکتور صادراتی و معاملات ارزی را زنده مشاهده کنید." data-ps="د بارونو درجه بندي او صادراتي فاکتورونه په ژوندي ډول وګورئ.">See lot grading, export proformas, and multi-currency sales live.</p>
                        
                        <form action="send_mail.php" method="POST" id="afghanistanDryFruitForm">
                            <input type="hidden" name="source" value="Afghanistan Dry Fruit ERP Page">
                            <input type="hidden" name="country" value="Afghanistan">
                            
                            <div class="mb-2">
                                <label class="form-label small fw-bold text-dark afdf-trans" data-en="Full Name" data-fa="نام و تخلص" data-ps="بشپړ نوم">Full Name</label>
                                <input type="text" name="name" class="form-control afdf-trans-ph" placeholder="e.g. Haji Baryalai" data-en-ph="e.g. Haji Baryalai" data-fa-ph="مثال: حاجی بریالی" data-ps-ph="مثال: حاجي بریالی" required>
                            </div>

                            <div class="mb-2">
                                <label class="form-label small fw-bold text-dark afdf-trans" data-en="Trading Company Name" data-fa="نام شرکت تجارتی / صادرکننده" data-ps="د صادراتي شرکت نوم">Trading Company Name</label>
                                <input type="text" name="company" class="form-control afdf-trans-ph" placeholder="e.g. Kandahar Raisins & Dry Fruit Co." data-en-ph="e.g. Kandahar Raisins & Dry Fruit Co." data-fa-ph="مثال: شرکت میوه خشک قندهار" data-ps-ph="مثال: د کندهار د وچې میوې شرکت" required>
                            </div>

                            <div class="row g-2 mb-2">
                                <div class="col-6">
                                    <label class="form-label small fw-bold text-dark afdf-trans" data-en="WhatsApp / Phone" data-fa="شماره تماس / واتساپ" data-ps="د اړیکې شمېره">WhatsApp / Phone</label>
                                    <input type="tel" name="phone" class="form-control" placeholder="+93 7X XXX XXXX" required>
                                </div>
                                <div class="col-6">
                                    <label class="form-label small fw-bold text-dark afdf-trans" data-en="Primary Product" data-fa="محصول اصلی" data-ps="اصلي محصول">Primary Product</label>
                                    <select name="product" class="form-select" required>
                                        <option value="Raisins (Kishmish)" class="afdf-trans" data-en="Raisins (Kishmish)" data-fa="کشمش (سبز، سیاه، سرخ)" data-ps="کشمش (شنه، تور، سره)">Raisins (Kishmish)</option>
                                        <option value="Almonds (Badam)" class="afdf-trans" data-en="Almonds (Badam)" data-fa="بادام (ستاربایی، کاغذی)" data-ps="بادام (کاغذي، ستاربایي)">Almonds (Badam)</option>
                                        <option value="Pistachios (Pista)" class="afdf-trans" data-en="Pistachios (Pista)" data-fa="پسته و مغزیات" data-ps="پسته او مغزیات">Pistachios (Pista)</option>
                                        <option value="Saffron" class="afdf-trans" data-en="Saffron (Zafran)" data-fa="زعفران هرات" data-ps="د هرات زعفران">Saffron (Zafran)</option>
                                        <option value="Figs & Dried Apricots" class="afdf-trans" data-en="Figs & Dried Apricots" data-fa="انجیر و قیسی" data-ps="انځر او قیسي">Figs & Dried Apricots</option>
                                        <option value="General Agri Commodities" class="afdf-trans" data-en="General Agri Commodities" data-fa="تجارت عمومی میوه خشک" data-ps="د وچې میوې عمومي تجارت">General Agri Commodities</option>
                                    </select>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-afdf-primary w-100 py-2 mt-2">
                                <span class="afdf-trans" data-en="Schedule Live Dry Fruit Demo" data-fa="ثبت نوبت دموی زنده" data-ps="ژوندی ډیمو پیل کړئ">Schedule Live Dry Fruit Demo</span>
                                <i class="fas fa-arrow-right ms-2"></i>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 10 CORE DRY FRUITS & COMMODITIES -->
    <section class="afdf-section bg-light-afdf" id="dry-fruits-grid">
        <div class="container">
            <div class="text-center mb-5">
                <span class="section-badge-afdf afdf-trans" data-en="Afghan Export Commodities" data-fa="اقلام عمده صادراتی میوه خشک افغانستان" data-ps="د افغانستان د وچې میوې صادراتي توکي">Afghan Export Commodities</span>
                <h2 class="section-title-afdf afdf-trans" 
                    data-en="Commodity-Level Batch & Quality Tracking" 
                    data-fa="مدیریت دسته‌بندی و کنترل کیفیت بر اساس نوعیت جنس"
                    data-ps="د جنس د نوعیت له مخې د بستو او کیفیت کنټرول">
                    Commodity-Level Batch & Quality Tracking
                </h2>
            </div>

            <div class="row g-3 row-cols-2 row-cols-md-3 row-cols-lg-5">
                <div class="col"><div class="product-box-afdf"><i class="fas fa-seedling"></i><h6 class="afdf-trans" data-en="Green & Black Raisins" data-fa="کشمش سبز و سیاه" data-ps="شنه او تور کشمش">Green & Black Raisins</h6><p class="afdf-trans" data-en="Shundokhani, Kishmish & Abjosh" data-fa="شندوخانی، کشمش آفتابی و آبجوش" data-ps="شندوخاني او افتابي کشمش">Shundokhani, Kishmish & Abjosh</p></div></div>
                <div class="col"><div class="product-box-afdf"><i class="fas fa-tree"></i><h6 class="afdf-trans" data-en="Afghan Almonds" data-fa="بادام اعلا" data-ps="افغاني بادام">Afghan Almonds</h6><p class="afdf-trans" data-en="Satarbayi, Kaghazi & Qambari" data-fa="ستاربایی، کاغذی و سنگک" data-ps="ستاربایي، کاغذي او سنګک">Satarbayi, Kaghazi & Qambari</p></div></div>
                <div class="col"><div class="product-box-afdf"><i class="fas fa-leaf"></i><h6 class="afdf-trans" data-en="Pistachios" data-fa="پسته خندان" data-ps="پسته او مغز">Pistachios</h6><p class="afdf-trans" data-en="Badghis wild & cultivated kernels" data-fa="پسته بادغیس و مغز پسته صادراتی" data-ps="د بادغیس پسته او مغز">Badghis wild & cultivated kernels</p></div></div>
                <div class="col"><div class="product-box-afdf"><i class="fas fa-spa"></i><h6 class="afdf-trans" data-en="Herat Saffron" data-fa="زعفران هرات" data-ps="د هرات زعفران">Herat Saffron</h6><p class="afdf-trans" data-en="Super Negin, Negin & Sargol grams" data-fa="سوپر نگین، سرگل و گرمی صادراتی" data-ps="سوپر نګین او سرګل">Super Negin, Negin & Sargol grams</p></div></div>
                <div class="col"><div class="product-box-afdf"><i class="fas fa-apple-alt"></i><h6 class="afdf-trans" data-en="Dried Figs & Apricots" data-fa="انجیر و قیسی" data-ps="انځر او قیسي">Dried Figs & Apricots</h6><p class="afdf-trans" data-en="Kandahar string figs & Qaisi" data-fa="انجیر ریسه‌ای قندهار و قیسی اعلا" data-ps="د کندهار انځر او قیسي">Kandahar string figs & Qaisi</p></div></div>
                <div class="col"><div class="product-box-afdf"><i class="fas fa-shield-alt"></i><h6 class="afdf-trans" data-en="Walnuts & Pine Nuts" data-fa="چهارمغز و جلغوزه" data-ps="چارمغز او ځنګلي جلغوزې">Walnuts & Pine Nuts</h6><p class="afdf-trans" data-en="Paktia pine nuts & shelled kernels" data-fa="جلغوزه سیاه پکتیا و مغز چهارمغز" data-ps="د پکتیا تورې جلغوزې او چارمغز">Paktia pine nuts & shelled kernels</p></div></div>
                <div class="col"><div class="product-box-afdf"><i class="fas fa-heart"></i><h6 class="afdf-trans" data-en="Kandahar Pomegranates" data-fa="انار قندهار" data-ps="د کندهار انار">Kandahar Pomegranates</h6><p class="afdf-trans" data-en="Fresh export crates & Anardana" data-fa="انار تازه صادراتی و دانه‌انار خشک" data-ps="تازه انار او د انارو دانې">Fresh export crates & Anardana</p></div></div>
                <div class="col"><div class="product-box-afdf"><i class="fas fa-cubes"></i><h6 class="afdf-trans" data-en="Cumin & Spices" data-fa="زیره و مصالحه‌جات" data-ps="زیره او مصالحې">Cumin & Spices</h6><p class="afdf-trans" data-en="Black zira & natural caraway" data-fa="زیره سیاه وطنی و تخم گشنیز" data-ps="توره زیره او د خاورو پاکول">Black zira & natural caraway</p></div></div>
                <div class="col"><div class="product-box-afdf"><i class="fas fa-box-open"></i><h6 class="afdf-trans" data-en="Packaging Boxes" data-fa="کارتن و بسته‌بندی" data-ps="کارتن او بسته بندي">Packaging Boxes</h6><p class="afdf-trans" data-en="Vacuum packs, tins & export cartons" data-fa="بسته‌های وکیوم، قطی و کارتن چاپ شده" data-ps="وکیوم او چاپ شوي کارتنونه">Vacuum packs, tins & export cartons</p></div></div>
                <div class="col"><div class="product-box-afdf"><i class="fas fa-truck-loading"></i><h6 class="afdf-trans" data-en="Container Loads" data-fa="کانتینرهای صادراتی" data-ps="صادراتي کانتینرونه">Container Loads</h6><p class="afdf-trans" data-en="Torkham, Spin Boldak & Hairatan" data-fa="بارگیری ترانزیتی از تورخم، بولدک و حیرتان" data-ps="د تورخم او بولدک له لارې بارونه">Torkham, Spin Boldak & Hairatan</p></div></div>
            </div>
        </div>
    </section>

    <!-- CORE DRY FRUIT ERP MODULES -->
    <section class="afdf-section" id="dry-fruit-features">
        <div class="container">
            <div class="row g-4">
                <div class="col-md-6 col-lg-3">
                    <div class="afdf-card">
                        <div class="afdf-card-icon"><i class="fas fa-layer-group"></i></div>
                        <h4 class="afdf-trans" data-en="Grading & Sorting" data-fa="سورت و درجه‌بندی بار" data-ps="د بار درجه بندي او سورت">Grading & Sorting</h4>
                        <p class="afdf-trans" data-en="Record raw intake lots, cleaning losses, sorting waste, and Grade A/B/C finished stock yields." data-fa="ثبت بار خام، کسر خاک و ضایعات، سورتینگ و تفکیک به درجه یک، دو و سه." data-ps="د خامو بارونو ثبت، د خاورو او ضایعاتو کمول او د لوړ کیفیت جلا کول.">Record raw intake lots, cleaning losses, sorting waste, and Grade A/B/C finished stock yields.</p>
                        <ul class="afdf-checklist">
                            <li class="afdf-trans" data-en="<i class='fas fa-check-circle'></i> Cleaning & moisture weight deductions" data-fa="<i class='fas fa-check-circle'></i> کسر ضایعات پاک‌کاری و نم" data-ps="<i class='fas fa-check-circle'></i> د لندبل او پاکولو ضایعات"><i class="fas fa-check-circle"></i> Cleaning & moisture weight deductions</li>
                            <li class="afdf-trans" data-en="<i class='fas fa-check-circle'></i> Batch yield calculation" data-fa="<i class='fas fa-check-circle'></i> محاسبه خروجی خالص هر بسته" data-ps="<i class='fas fa-check-circle'></i> د هرې بستې خالص محصول"><i class="fas fa-check-circle"></i> Batch yield calculation</li>
                            <li class="afdf-trans" data-en="<i class='fas fa-check-circle'></i> Grading barcode tags" data-fa="<i class='fas fa-check-circle'></i> چاپ لیبل بارکود بر اساس درجه" data-ps="<i class='fas fa-check-circle'></i> د درجې له مخې د بارکوډ لیبل"><i class="fas fa-check-circle"></i> Grading barcode tags</li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3">
                    <div class="afdf-card">
                        <div class="afdf-card-icon"><i class="fas fa-file-invoice-dollar"></i></div>
                        <h4 class="afdf-trans" data-en="Export Invoicing & LC" data-fa="فاکتور صادراتی و حواله صرافی" data-ps="صادراتي فاکتور او حوالې">Export Invoicing & LC</h4>
                        <p class="afdf-trans" data-en="Issue international Proforma Invoices in USD/EUR/AED, track buyer LC advances, and Sarafi exchange transfers." data-fa="صدور فاکتور پرفورما ارزی، پیگیری پیش‌پرداخت مشتری خارجی و حواله‌های صرافی سرای شهزاده." data-ps="په بهرنیو اسعارو کې د فاکتور جوړول او د شهزاده سرای د صرافۍ حوالې.">Issue international Proforma Invoices in USD/EUR/AED, track buyer LC advances, and Sarafi exchange transfers.</p>
                        <ul class="afdf-checklist">
                            <li class="afdf-trans" data-en="<i class='fas fa-check-circle'></i> Multi-currency export contracts" data-fa="<i class='fas fa-check-circle'></i> قراردادهای بین‌المللی با اسعار مختلف" data-ps="<i class='fas fa-check-circle'></i> په څو اسعارو صادراتي قراردادونه"><i class="fas fa-check-circle"></i> Multi-currency export contracts</li>
                            <li class="afdf-trans" data-en="<i class='fas fa-check-circle'></i> Container packing manifest generator" data-fa="<i class='fas fa-check-circle'></i> ساخت مانیفست و پکینگ لست کانتینر" data-ps="<i class='fas fa-check-circle'></i> د کانتینر د پیکنګ لست جوړول"><i class="fas fa-check-circle"></i> Container packing manifest generator</li>
                            <li class="afdf-trans" data-en="<i class='fas fa-check-circle'></i> Sarafi exchange currency conversion" data-fa="<i class='fas fa-check-circle'></i> ثبت نرخ تبادله و حواله صرافی" data-ps="<i class='fas fa-check-circle'></i> د صرافۍ د تبادلې نرخ ثبت"><i class="fas fa-check-circle"></i> Sarafi exchange currency conversion</li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3">
                    <div class="afdf-card">
                        <div class="afdf-card-icon"><i class="fas fa-warehouse"></i></div>
                        <h4 class="afdf-trans" data-en="Cold Storage & Godowns" data-fa="گدام‌های سردخانه و مرکزی" data-ps="سړې خونې او مرکزي ګودامونه">Cold Storage & Godowns</h4>
                        <p class="afdf-trans" data-en="Monitor stock levels across Mandawi warehouses, regional cold rooms in Kabul & Kandahar, and port staging hubs." data-fa="کنترل کارتن‌های موجود در سردخانه‌های کابل و قندهار و گدام‌های مرزی." data-ps="په کابل، کندهار او سرحدي ګودامونو کې د کارتنونو دقیق حساب.">Monitor stock levels across Mandawi warehouses, regional cold rooms in Kabul & Kandahar, and port staging hubs.</p>
                        <ul class="afdf-checklist">
                            <li class="afdf-trans" data-en="<i class='fas fa-check-circle'></i> Carton & sack barcode inventory" data-fa="<i class='fas fa-check-circle'></i> بارکود کارتن‌ها و بوجی‌ها" data-ps="<i class='fas fa-check-circle'></i> د کارتنونو او بوریو بارکوډ"><i class="fas fa-check-circle"></i> Carton & sack barcode inventory</li>
                            <li class="afdf-trans" data-en="<i class='fas fa-check-circle'></i> Cold storage rent & space tracking" data-fa="<i class='fas fa-check-circle'></i> محاسبه کرایه و فضای سردخانه" data-ps="<i class='fas fa-check-circle'></i> د سړې خونې د کرایې حساب"><i class="fas fa-check-circle"></i> Cold storage rent & space tracking</li>
                            <li class="afdf-trans" data-en="<i class='fas fa-check-circle'></i> Inter-warehouse transfer waybills" data-fa="<i class='fas fa-check-circle'></i> بارنامه انتقال جنس بین گدام‌ها" data-ps="<i class='fas fa-check-circle'></i> د ګودامونو ترمنځ د انتقال بارنامه"><i class="fas fa-check-circle"></i> Inter-warehouse transfer waybills</li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3">
                    <div class="afdf-card">
                        <div class="afdf-card-icon"><i class="fas fa-chart-pie"></i></div>
                        <h4 class="afdf-trans" data-en="Profit by Shipment" data-fa="محاسبه مفاد هر کانتینر/محموله" data-ps="د هر کانتینر خالص ګټه">Profit by Shipment</h4>
                        <p class="afdf-trans" data-en="Calculate true landed cost per kg including purchase price, packaging, freight, customs fees, and insurance." data-fa="محاسبه دقیق قیمت تمام شده فی کیلو به شمول خرید، بسته‌بندی، کرایه موتر و محصول گمرک." data-ps="د هر کیلو اصلي بیه د پیرود، بسته بندۍ، ترانسپورت او ګمرک سره حسابول.">Calculate true landed cost per kg including purchase price, packaging, freight, customs fees, and insurance.</p>
                        <ul class="afdf-checklist">
                            <li class="afdf-trans" data-en="<i class='fas fa-check-circle'></i> Landed cost per kilogram auto-calc" data-fa="<i class='fas fa-check-circle'></i> محاسبه اتومات نرخ فی کیلو تمام شد" data-ps="<i class='fas fa-check-circle'></i> د هر کیلو تمامه شوې بیه"><i class="fas fa-check-circle"></i> Landed cost per kilogram auto-calc</li>
                            <li class="afdf-trans" data-en="<i class='fas fa-check-circle'></i> Buyer order profitability summary" data-fa="<i class='fas fa-check-circle'></i> خلاصه مفاد و نقص فرمایش خریدار" data-ps="<i class='fas fa-check-circle'></i> د پیرودونکي د فرمایش د ګټې راپور"><i class="fas fa-check-circle"></i> Buyer order profitability summary</li>
                            <li class="afdf-trans" data-en="<i class='fas fa-check-circle'></i> Executive revenue analytics" data-fa="<i class='fas fa-check-circle'></i> نمودارهای تحلیلی عواید صادرات" data-ps="<i class='fas fa-check-circle'></i> د صادراتي عوایدو چارټونه"><i class="fas fa-check-circle"></i> Executive revenue analytics</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FINAL CTA -->
    <section class="afdf-section bg-dark text-white text-center" style="background: #78350f !important;">
        <div class="container">
            <h2 class="fw-bold mb-3 afdf-trans" 
                data-en="Scale Your Afghanistan Dry Fruit & Export Trading Operations" 
                data-fa="صادرات میوه خشک خود را با سیستم پیشرفته دیجی‌فای گسترش دهید"
                data-ps="خپل د وچې میوې صادرات د ډیجیفای پرمختللي سیسټم سره پراخه کړئ">
                Scale Your Afghanistan Dry Fruit & Export Trading Operations
            </h2>
            <p class="text-light opacity-75 max-w-700 mx-auto mb-4 afdf-trans"
                data-en="Eliminate calculation errors, control supplier ledgers, and streamline container shipments from Kandahar, Kabul and Herat."
                data-fa="با دیجی‌فای خطاهای محاسباتی را حذف کنید، حساب باغداران و تجار را شفاف نگه دارید و محموله‌های صادراتی را به سرعت ارسال نمایید."
                data-ps="د ډیجیفای سره مالي تیروتنې له منځه یوسئ، د باغدارانو حساب روښانه وساتئ او خپل بارونه پر وخت صادر کړئ.">
                Eliminate calculation errors, control supplier ledgers, and streamline container shipments from Kandahar, Kabul and Herat.
            </p>
            <div class="d-flex justify-content-center gap-3 flex-wrap">
                <a href="#demo-form" class="btn btn-afdf-primary px-4 py-3"><i class="fas fa-calendar-check me-2"></i> <span class="afdf-trans" data-en="Request Dry Fruit ERP Demo" data-fa="درخواست دموی میوه خشک" data-ps="د وچې میوې ډیمو ترلاسه کړئ">Request Dry Fruit ERP Demo</span></a>
                <a href="erp-software-afghanistan.php" class="btn btn-afdf-outline px-4 py-3"><i class="fas fa-arrow-left me-2"></i> <span class="afdf-trans" data-en="View Main Afghanistan ERP" data-fa="صفحه اصلی ERP افغانستان" data-ps="د افغانستان اصلي پاڼه">View Main Afghanistan ERP</span></a>
            </div>
        </div>
    </section>

</div>

<script>
function switchDfLang(lang) {
    var btnEn = document.getElementById('btnDfLangEn');
    var btnFa = document.getElementById('btnDfLangFa');
    var btnPs = document.getElementById('btnDfLangPs');
    var wrapper = document.getElementById('afdfWrapper');
    
    localStorage.setItem('digify_af_lang', lang);
    
    [btnEn, btnFa, btnPs].forEach(function(b) { if(b) b.classList.remove('active'); });
    if (lang === 'fa' && btnFa) btnFa.classList.add('active');
    else if (lang === 'ps' && btnPs) btnPs.classList.add('active');
    else if (btnEn) btnEn.classList.add('active');
    
    if (wrapper) {
        if (lang === 'fa' || lang === 'ps') wrapper.classList.add('rtl-mode');
        else wrapper.classList.remove('rtl-mode');
    }
    
    document.querySelectorAll('.afdf-trans').forEach(function(el) {
        var text = el.getAttribute('data-' + lang);
        if (text) { el.innerHTML = text; }
    });
    document.querySelectorAll('.afdf-trans-ph').forEach(function(el) {
        var ph = el.getAttribute('data-' + lang + '-ph');
        if (ph) { el.setAttribute('placeholder', ph); }
    });
}

document.addEventListener('DOMContentLoaded', function() {
    var savedLang = localStorage.getItem('digify_af_lang') || 'en';
    switchDfLang(savedLang);
});
</script>

<?php include(__DIR__ . '/../../footer.php'); ?>
