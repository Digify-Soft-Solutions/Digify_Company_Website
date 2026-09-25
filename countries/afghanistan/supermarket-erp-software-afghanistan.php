<?php 
include_once(__DIR__ . '/../../db.php');
include_once(__DIR__ . '/../../fetch_meta.php');

$pageTitle = "Supermarket ERP Software in Afghanistan | POS & Grocery Management";
$pageDescription = "Manage supermarket POS, inventory, purchasing, suppliers, products, customers and multiple branches through Digify's integrated Supermarket ERP in Afghanistan.";
$pageKeywords = "Supermarket ERP Afghanistan, Supermarket POS Afghanistan, Grocery store software Afghanistan, Retail ERP Afghanistan, FMCG retail software Kabul, Multi branch supermarket ERP Afghanistan";
$pageCanonical = "https://www.digifysoft.in/supermarket-erp-software-afghanistan";

include(__DIR__ . '/../../top.php');
include(__DIR__ . '/../../header.php');
?>

<style>
/* Afghanistan Supermarket Design System */
.afsm-page-wrapper {
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
.afsm-hero {
    background: linear-gradient(135deg, #064e3b 0%, #065f46 50%, #111827 100%);
    color: #ffffff;
    padding: 70px 0 85px;
    position: relative;
    overflow: hidden;
    border-bottom: 4px solid #10b981;
}
.afsm-hero::before {
    content: '';
    position: absolute;
    top: -15%;
    right: -10%;
    width: 650px;
    height: 650px;
    background: radial-gradient(circle, rgba(16, 185, 129, 0.28) 0%, rgba(245, 158, 11, 0.12) 50%, rgba(0, 0, 0, 0) 75%);
    border-radius: 50%;
    pointer-events: none;
}
.text-gradient-afsm {
    background: linear-gradient(135deg, #6ee7b7 0%, #fde047 50%, #f87171 100%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    display: inline-block;
}
.afsm-hero-badge {
    background: rgba(16, 185, 129, 0.18);
    border: 1px solid rgba(110, 231, 183, 0.45);
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
.afsm-hero h1 {
    font-size: 42px;
    font-weight: 900;
    line-height: 1.25;
    margin-bottom: 18px;
    letter-spacing: -0.5px;
}
.afsm-hero-sub {
    font-size: 18px;
    font-weight: 600;
    color: #fde047;
    line-height: 1.5;
    margin-bottom: 14px;
}
.afsm-hero-desc {
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
.btn-afsm-primary {
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
.btn-afsm-primary:hover {
    background: linear-gradient(135deg, #047857 0%, #065f46 100%);
    color: #ffffff;
    transform: translateY(-2px);
}
.btn-afsm-outline {
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
.btn-afsm-outline:hover {
    background: rgba(255, 255, 255, 0.18);
    color: #ffffff;
    transform: translateY(-2px);
}

/* Sections */
.afsm-section { padding: 75px 0; }
.bg-light-afsm { background-color: #f8fafc; }
.section-badge-afsm {
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
.section-title-afsm {
    font-size: 34px;
    font-weight: 900;
    color: #0f172a;
    line-height: 1.3;
    margin-bottom: 16px;
    letter-spacing: -0.5px;
}

/* Feature Cards */
.afsm-card {
    background: #ffffff;
    border: 1px solid #e2e8f0;
    border-radius: 16px;
    padding: 26px;
    transition: all 0.3s ease;
    height: 100%;
    display: flex;
    flex-direction: column;
}
.afsm-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 20px 30px -10px rgba(0, 0, 0, 0.08);
    border-color: #6ee7b7;
}
.afsm-card-icon {
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
.afsm-card h4 {
    font-size: 18px;
    font-weight: 800;
    color: #0f172a;
    margin-bottom: 10px;
}
.afsm-card p {
    font-size: 14px;
    color: #64748b;
    line-height: 1.6;
    margin-bottom: 16px;
    flex-grow: 1;
}
.afsm-checklist {
    list-style: none;
    padding: 0;
    margin: 0;
}
.afsm-checklist li {
    font-size: 13.5px;
    color: #334155;
    margin-bottom: 8px;
    display: flex;
    align-items: center;
    gap: 8px;
}
.afsm-checklist li i {
    color: #059669;
    font-size: 14px;
    flex-shrink: 0;
}

/* Category Grid Card */
.category-box-af {
    background: #ffffff;
    border: 1px solid #e2e8f0;
    border-radius: 14px;
    padding: 16px 12px;
    text-align: center;
    transition: all 0.3s ease;
    height: 100%;
}
.category-box-af:hover {
    border-color: #059669;
    background: #ecfdf5;
    transform: translateY(-3px);
}
.category-box-af i {
    font-size: 24px;
    color: #059669;
    margin-bottom: 8px;
    display: inline-block;
}
.category-box-af h6 {
    font-size: 13.5px;
    font-weight: 800;
    color: #0f172a;
    margin-bottom: 3px;
}
.category-box-af p {
    font-size: 11.5px;
    color: #64748b;
    margin: 0;
}

@media (max-width: 991px) {
    .afsm-hero { padding: 45px 0 55px; }
    .afsm-hero h1 { font-size: 28px; line-height: 1.3; }
    .hero-lead-card { margin-top: 25px; padding: 24px 20px; }
    .section-title-afsm { font-size: 24px; }
}
@media (max-width: 576px) {
    .afsm-hero { padding: 35px 0 45px; }
    .afsm-hero h1 { font-size: 23px; }
    .btn-afsm-primary, .btn-afsm-outline { width: 100%; justify-content: center; }
}
</style>

<div class="afsm-page-wrapper" id="afsmWrapper">

    <!-- HERO SECTION -->
    <section class="afsm-hero" id="hero">
        <div class="container position-relative" style="z-index: 2;">
            <div class="row align-items-center g-4">
                <div class="col-lg-7">
                    <!-- 3-Way Language Switcher -->
                    <div class="lang-toggle-bar">
                        <button class="lang-pill active" id="btnSmLangEn" onclick="switchSmLang('en')">🇬🇧 English</button>
                        <button class="lang-pill" id="btnSmLangFa" onclick="switchSmLang('fa')">🇦🇫 دری (Dari)</button>
                        <button class="lang-pill" id="btnSmLangPs" onclick="switchSmLang('ps')">🇦🇫 پښتو (Pashto)</button>
                    </div>

                    <div class="afsm-hero-badge">
                        <span>🛒</span>
                        <span class="afsm-trans" 
                            data-en="Supermarket & Retail POS Architecture in Afghanistan" 
                            data-fa="سیستم فروش و مدیریت سوپرمارکت در افغانستان"
                            data-ps="په افغانستان کې د سوپرمارکیټونو او پرچون پلور مدیریت">
                            Supermarket & Retail POS Architecture in Afghanistan
                        </span>
                    </div>

                    <h1 class="afsm-trans" 
                        data-en="Supermarket ERP Software in Afghanistan" 
                        data-fa="نرم‌افزار مدیریت سوپرمارکت در افغانستان"
                        data-ps="په افغانستان کې د سوپرمارکیټونو لپاره ERP سافټویر">
                        Supermarket ERP Software in Afghanistan
                    </h1>

                    <div class="afsm-hero-sub afsm-trans"
                        data-en="Manage your supermarket, grocery store or retail chain with a centralized ERP platform designed for high-volume sales, inventory and purchasing."
                        data-fa="سوپرمارکت، مارکت زنجیره‌ای یا دکان خود را با سیستم پیشرفته فروشات، گدام‌داری و خرید مدیریت کنید."
                        data-ps="خپل سوپرمارکیټ یا هټۍ د پلور، ګودام او پیرود د پرمختللي سیسټم سره اداره کړئ.">
                        Manage your supermarket, grocery store or retail chain with a centralized ERP platform designed for high-volume sales, inventory and purchasing.
                    </div>

                    <p class="afsm-hero-desc afsm-trans"
                        data-en="Track products, stock, suppliers, purchases, sales, customers, expenses, payments and branch performance from one unified dashboard."
                        data-fa="ثبت هزاران قلم جنس با بارکود، اتصال به ترازو، چاپ فاکتور سریع، هشدار کمبود موجودی و حساب دقیق مفاد و ضرر."
                        data-ps="د بارکوډ سره د زرګونو توکو ثبت، د تلې نښلول، چټک فاکتور او د ګټې او تاوان دقیق حساب.">
                        Track products, stock, suppliers, purchases, sales, customers, expenses, payments and branch performance from one unified dashboard.
                    </p>

                    <div class="d-flex flex-wrap gap-3 mb-4">
                        <a href="#demo-form" class="btn btn-afsm-primary">
                            <i class="fas fa-calendar-check"></i>
                            <span class="afsm-trans" data-en="Request Supermarket Demo" data-fa="درخواست دموی سوپرمارکت" data-ps="د سوپرمارکیټ ډیمو وغواړئ">Request Supermarket Demo</span>
                        </a>
                        <a href="erp-software-afghanistan.php" class="btn btn-afsm-outline">
                            <i class="fas fa-arrow-left"></i>
                            <span class="afsm-trans" data-en="Back to Afghanistan Main ERP" data-fa="بازگشت به صفحه اصلی افغانستان" data-ps="د افغانستان اصلي پاڼې ته ستنیدل">Back to Afghanistan Main ERP</span>
                        </a>
                    </div>
                </div>

                <!-- Right Form -->
                <div class="col-lg-5" id="demo-form">
                    <div class="hero-lead-card">
                        <div class="d-flex align-items-center justify-content-between mb-2">
                            <span class="badge bg-success text-white px-3 py-1 rounded-pill font-monospace afsm-trans" data-en="🛒 SUPERMARKET DEMO" data-fa="🛒 دموی سوپرمارکت" data-ps="🛒 سوپرمارکیټ ډیمو">🛒 SUPERMARKET DEMO</span>
                            <span class="text-muted small"><i class="fas fa-clock text-warning"></i> <span class="afsm-trans" data-en="15-Min Live Demo" data-fa="دموی ۱۵ دقیقه‌ای" data-ps="۱۵ دقیقې ډیمو">15-Min Live Demo</span></span>
                        </div>
                        <h3 class="afsm-trans" data-en="Schedule Supermarket Walkthrough" data-fa="ثبت نوبت دموی سوپرمارکت" data-ps="د سوپرمارکیټ ډیمو مهالویش">Schedule Supermarket Walkthrough</h3>
                        <p class="small text-muted mb-3 afsm-trans" data-en="See barcode scanning, scale integration, and multi-branch inventory live." data-fa="اسکن بارکود، ترازو دیجیتال و مدیریت شعبات را زنده مشاهده کنید." data-ps="د بارکوډ سکین، تله او د څانګو مدیریت په ژوندي ډول وګورئ.">See barcode scanning, scale integration, and multi-branch inventory live.</p>
                        
                        <form action="send_mail.php" method="POST" id="afghanistanSupermarketForm">
                            <input type="hidden" name="source" value="Afghanistan Supermarket ERP Page">
                            <input type="hidden" name="country" value="Afghanistan">
                            
                            <div class="mb-2">
                                <label class="form-label small fw-bold text-dark afsm-trans" data-en="Full Name" data-fa="نام و تخلص" data-ps="بشپړ نوم">Full Name</label>
                                <input type="text" name="name" class="form-control afsm-trans-ph" placeholder="e.g. Mohammad Bilal" data-en-ph="e.g. Mohammad Bilal" data-fa-ph="مثال: محمد بلال" data-ps-ph="مثال: محمد بلال" required>
                            </div>

                            <div class="mb-2">
                                <label class="form-label small fw-bold text-dark afsm-trans" data-en="Supermarket / Store Name" data-fa="نام سوپرمارکت یا فروشگاه" data-ps="د سوپرمارکیټ نوم">Supermarket / Store Name</label>
                                <input type="text" name="company" class="form-control afsm-trans-ph" placeholder="e.g. Kabul City Supermarket" data-en-ph="e.g. Kabul City Supermarket" data-fa-ph="مثال: سوپرمارکت شهر کابل" data-ps-ph="مثال: کابل ښار سوپرمارکیټ" required>
                            </div>

                            <div class="row g-2 mb-2">
                                <div class="col-6">
                                    <label class="form-label small fw-bold text-dark afsm-trans" data-en="WhatsApp / Phone" data-fa="شماره تماس / واتساپ" data-ps="د اړیکې شمېره">WhatsApp / Phone</label>
                                    <input type="tel" name="phone" class="form-control" placeholder="+93 7X XXX XXXX" required>
                                </div>
                                <div class="col-6">
                                    <label class="form-label small fw-bold text-dark afsm-trans" data-en="Number of Outlets" data-fa="تعداد شعبات" data-ps="د څانګو شمیر">Number of Outlets</label>
                                    <select name="outlets" class="form-select" required>
                                        <option value="1 Store" class="afsm-trans" data-en="1 Store" data-fa="۱ فروشگاه" data-ps="۱ پلورنځی">1 Store</option>
                                        <option value="2-5 Stores" class="afsm-trans" data-en="2 - 5 Stores" data-fa="۲ تا ۵ شعبه" data-ps="۲ تر ۵ څانګې">2 - 5 Stores</option>
                                        <option value="6+ Stores" class="afsm-trans" data-en="6+ Stores / Chain" data-fa="بیش از ۶ شعبه" data-ps="له ۶ ډیرې څانګې">6+ Stores / Chain</option>
                                    </select>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-afsm-primary w-100 py-2 mt-2">
                                <span class="afsm-trans" data-en="Schedule Live Supermarket Demo" data-fa="ثبت نوبت دموی زنده" data-ps="ژوندی ډیمو پیل کړئ">Schedule Live Supermarket Demo</span>
                                <i class="fas fa-arrow-right ms-2"></i>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 15 PRODUCT CATEGORIES GRID -->
    <section class="afsm-section bg-light-afsm" id="product-categories">
        <div class="container">
            <div class="text-center mb-5">
                <span class="section-badge-afsm afsm-trans" data-en="Comprehensive Retail Coverage" data-fa="پوشش تمامی اجناس سوپرمارکت" data-ps="د سوپرمارکیټ د ټولو توکو پوښښ">Comprehensive Retail Coverage</span>
                <h2 class="section-title-afsm afsm-trans" 
                    data-en="15 Supermarket Product Categories Supported" 
                    data-fa="پشتیبانی از ۱۵ کتگوری اصلی محصولات سوپرمارکت"
                    data-ps="د سوپرمارکیټ د ۱۵ اصلي کټګوریو ملاتړ">
                    15 Supermarket Product Categories Supported
                </h2>
                <p class="text-muted max-w-700 mx-auto afsm-trans" 
                    data-en="From weighed fresh produce to packaged FMCG, frozen foods, dairy, imported snacks, and household essentials."
                    data-fa="از سبزیجات و میوه‌جات وزنی تا مواد شوینده، لبنیات، اجناس وارداتی و لوازم مصرفی منزل."
                    data-ps="له وزن کیدونکو تازه سبزیو څخه تر لبنیاتو، وارداتي خوراکونو او د کور اړینو توکو پورې.">
                    From weighed fresh produce to packaged FMCG, frozen foods, dairy, imported snacks, and household essentials.
                </p>
            </div>

            <div class="row g-3 row-cols-2 row-cols-md-3 row-cols-lg-5">
                <div class="col"><div class="category-box-af"><i class="fas fa-shopping-basket"></i><h6 class="afsm-trans" data-en="Grocery" data-fa="مواد خوراکه" data-ps="خوراکي توکي">Grocery</h6><p class="afsm-trans" data-en="Rice, flour, oil & spices" data-fa="برنج، آرد، روغن و مصالحه‌جات" data-ps="وریجې، اوړه، غوړي او مسالې">Rice, flour, oil & spices</p></div></div>
                <div class="col"><div class="category-box-af"><i class="fas fa-glass-whiskey"></i><h6 class="afsm-trans" data-en="Beverages" data-fa="نوشیدنی‌ها" data-ps="څښاکونه">Beverages</h6><p class="afsm-trans" data-en="Juices, tea & soft drinks" data-fa="چای، آبمیوه و نوشابه‌ها" data-ps="چای، جوس او شربتونه">Juices, tea & soft drinks</p></div></div>
                <div class="col"><div class="category-box-af"><i class="fas fa-cheese"></i><h6 class="afsm-trans" data-en="Dairy" data-fa="لبنیات" data-ps="لبنیات">Dairy</h6><p class="afsm-trans" data-en="Milk, cheese, yogurt & butter" data-fa="شیر، ماست، پنیر و قیماق" data-ps="شیدې، مستې او کوچ">Milk, cheese, yogurt & butter</p></div></div>
                <div class="col"><div class="category-box-af"><i class="fas fa-bread-slice"></i><h6 class="afsm-trans" data-en="Bakery" data-fa="نان و کیک" data-ps="ډوډۍ او کیکونه">Bakery</h6><p class="afsm-trans" data-en="Fresh bread, biscuits & sweets" data-fa="نان تازه، کلچه و بسکویت" data-ps="تازه ډوډۍ، کلچې او بسکټ">Fresh bread, biscuits & sweets</p></div></div>
                <div class="col"><div class="category-box-af"><i class="fas fa-apple-alt"></i><h6 class="afsm-trans" data-en="Fresh Food" data-fa="سبزی و میوه" data-ps="تازه میوه او سبزي">Fresh Food</h6><p class="afsm-trans" data-en="Vegetables & weighed fruits" data-fa="میوه‌جات و ترکاری وزنی" data-ps="وزن کیدونکې تازه میوې">Vegetables & weighed fruits</p></div></div>
                <div class="col"><div class="category-box-af"><i class="fas fa-snowflake"></i><h6 class="afsm-trans" data-en="Frozen Food" data-fa="مواد منجمد" data-ps="یخ کړي توکي">Frozen Food</h6><p class="afsm-trans" data-en="Frozen meat, fish & chicken" data-fa="گوشت، ماهی و مرغ منجمد" data-ps="یخه شوې غوښه او کب">Frozen meat, fish & chicken</p></div></div>
                <div class="col"><div class="category-box-af"><i class="fas fa-pump-soap"></i><h6 class="afsm-trans" data-en="Personal Care" data-fa="صحی و نظافت" data-ps="شخصي روغتیا">Personal Care</h6><p class="afsm-trans" data-en="Soaps, shampoos & creams" data-fa="صابون، شامپو و خمیردندان" data-ps="صابون، شامپو او کریم">Soaps, shampoos & creams</p></div></div>
                <div class="col"><div class="category-box-af"><i class="fas fa-home"></i><h6 class="afsm-trans" data-en="Household" data-fa="لوازم خانه" data-ps="د کور سامان">Household</h6><p class="afsm-trans" data-en="Kitchenware & plastics" data-fa="ظروف پلاستیکی و آشپزخانه" data-ps="پلاستیکي لوښي او سامان">Kitchenware & plastics</p></div></div>
                <div class="col"><div class="category-box-af"><i class="fas fa-spray-can"></i><h6 class="afsm-trans" data-en="Cleaning" data-fa="مواد شوینده" data-ps="وینځونکي توکي">Cleaning</h6><p class="afsm-trans" data-en="Detergents & dishwashing" data-fa="پودر کالا شویی و مایع ظرف" data-ps="د کالو او لوښو صابون">Detergents & dishwashing</p></div></div>
                <div class="col"><div class="category-box-af"><i class="fas fa-baby"></i><h6 class="afsm-trans" data-en="Baby Products" data-fa="لوازم اطفال" data-ps="د ماشومانو توکي">Baby Products</h6><p class="afsm-trans" data-en="Diapers, milk & baby food" data-fa="پمپر، شیر خشک و سرلاک" data-ps="پمپر او شیدې">Diapers, milk & baby food</p></div></div>
                <div class="col"><div class="category-box-af"><i class="fas fa-cookie"></i><h6 class="afsm-trans" data-en="Snacks" data-fa="تنقلات" data-ps="خوراکونه">Snacks</h6><p class="afsm-trans" data-en="Chips, chocolates & sweets" data-fa="چپس، چاکلیت و پاپ‌کورن" data-ps="چپس او چاکلیټ">Chips, chocolates & sweets</p></div></div>
                <div class="col"><div class="category-box-af"><i class="fas fa-plane-arrival"></i><h6 class="afsm-trans" data-en="Imported Goods" data-fa="اجناس وارداتی" data-ps="وارداتي توکي">Imported Goods</h6><p class="afsm-trans" data-en="Turkish, Dubai & Iran brands" data-fa="محصولات ترکیه، دبی و ایران" data-ps="ترکي او دوبۍ توکي">Turkish, Dubai & Iran brands</p></div></div>
                <div class="col"><div class="category-box-af"><i class="fas fa-flag"></i><h6 class="afsm-trans" data-en="Local Products" data-fa="محصولات وطنی" data-ps="وطني تولیدات">Local Products</h6><p class="afsm-trans" data-en="Afghan honey, jams & dry fruits" data-fa="عسل وطنی، مربا و میوه خشک" data-ps="وطنۍ شات او وچه میوه">Afghan honey, jams & dry fruits</p></div></div>
                <div class="col"><div class="category-box-af"><i class="fas fa-plug"></i><h6 class="afsm-trans" data-en="Electronics" data-fa="الکترونیک کوچک" data-ps="واړه برقي توکي">Electronics</h6><p class="afsm-trans" data-en="Batteries, chargers & bulbs" data-fa="بطری، چارجر و گروپ" data-ps="بټرۍ او چارجرونه">Batteries, chargers & bulbs</p></div></div>
                <div class="col"><div class="category-box-af"><i class="fas fa-pen-alt"></i><h6 class="afsm-trans" data-en="Stationery" data-fa="قرطاسیه" data-ps="قرطاسیه">Stationery</h6><p class="afsm-trans" data-en="Notebooks, pens & supplies" data-fa="کتابچه، قلم و لوازم مکتب" data-ps="کتابچې او قلمونه">Notebooks, pens & supplies</p></div></div>
            </div>
        </div>
    </section>

    <!-- CORE SUPERMARKET FEATURES -->
    <section class="afsm-section" id="modules">
        <div class="container">
            <div class="row g-4">
                <div class="col-md-6 col-lg-3">
                    <div class="afsm-card">
                        <div class="afsm-card-icon"><i class="fas fa-barcode"></i></div>
                        <h4 class="afsm-trans" data-en="High-Speed POS" data-fa="فروش سریع و اسکن بارکود" data-ps="ګړندی POS او بارکوډ">High-Speed POS</h4>
                        <p class="afsm-trans" data-en="Process customer checkout queues under 15 seconds with barcode guns and digital scale weight sync." data-fa="صدور فاکتور در کمتر از ۱۵ ثانیه با بارکود اسکنر و ترازو دیجیتال بدون معطلی مشتری." data-ps="په ۱۵ ثانیو کې د بارکوډ او ډیجیټل تلې له لارې د پیرودونکي د فاکتور جوړول.">Process customer checkout queues under 15 seconds with barcode guns and digital scale weight sync.</p>
                        <ul class="afsm-checklist">
                            <li class="afsm-trans" data-en="<i class='fas fa-check-circle'></i> Digital weighing scale sync" data-fa="<i class='fas fa-check-circle'></i> خواندن خودکار وزن از ترازو" data-ps="<i class='fas fa-check-circle'></i> له تلې څخه اتومات وزن اخیستل"><i class="fas fa-check-circle"></i> Digital weighing scale sync</li>
                            <li class="afsm-trans" data-en="<i class='fas fa-check-circle'></i> Fast thermal receipt printing" data-fa="<i class='fas fa-check-circle'></i> چاپ سریع فاکتور حرارتی" data-ps="<i class='fas fa-check-circle'></i> د فاکتور چټک چاپ"><i class="fas fa-check-circle"></i> Fast thermal receipt printing</li>
                            <li class="afsm-trans" data-en="<i class='fas fa-check-circle'></i> Cash drawer shift audit" data-fa="<i class='fas fa-check-circle'></i> تسلیم و تحویل دخل نقدی" data-ps="<i class='fas fa-check-circle'></i> د نغدو پیسو سم حساب کول"><i class="fas fa-check-circle"></i> Cash drawer shift audit</li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3">
                    <div class="afsm-card">
                        <div class="afsm-card-icon"><i class="fas fa-boxes"></i></div>
                        <h4 class="afsm-trans" data-en="Inventory Control" data-fa="کنترل گدام و انقضا" data-ps="د ګودام او تاریخ کنټرول">Inventory Control</h4>
                        <p class="afsm-trans" data-en="Real-time stock counts across backroom storage, display shelves, and central distribution godowns." data-fa="موجودی لحظه‌ای قفسه‌ها و گدام پشتی همراه با ثبت تاریخ انقضا و جلوگیری از هدررفت اجناس." data-ps="په الماریو او ګودام کې د توکو ژوندی حساب او د تاریخ پای ته رسیدو کنټرول.">Real-time stock counts across backroom storage, display shelves, and central distribution godowns.</p>
                        <ul class="afsm-checklist">
                            <li class="afsm-trans" data-en="<i class='fas fa-check-circle'></i> Low-stock & shortage alerts" data-fa="<i class='fas fa-check-circle'></i> هشدار کمبود موجودی جنس" data-ps="<i class='fas fa-check-circle'></i> د توکو د ختمیدو خبرداری"><i class="fas fa-check-circle"></i> Low-stock & shortage alerts</li>
                            <li class="afsm-trans" data-en="<i class='fas fa-check-circle'></i> Expiry date & batch tracking" data-fa="<i class='fas fa-check-circle'></i> ثبت تاریخ مصرف و دسته جنس" data-ps="<i class='fas fa-check-circle'></i> د مصرف تاریخ ثبتول"><i class="fas fa-check-circle"></i> Expiry date & batch tracking</li>
                            <li class="afsm-trans" data-en="<i class='fas fa-check-circle'></i> Fast vs slow moving SKUs" data-fa="<i class='fas fa-check-circle'></i> تشخیص اجناس پرفروش و کم‌فروش" data-ps="<i class='fas fa-check-circle'></i> ډیر پلورل کیدونکي توکي"><i class="fas fa-check-circle"></i> Fast vs slow moving SKUs</li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3">
                    <div class="afsm-card">
                        <div class="afsm-card-icon"><i class="fas fa-truck-loading"></i></div>
                        <h4 class="afsm-trans" data-en="Purchasing & Suppliers" data-fa="خریداری و حساب تمویل‌کنندگان" data-ps="پیرود او عرضه کوونکي">Purchasing & Suppliers</h4>
                        <p class="afsm-trans" data-en="Manage supplier rates, automated reordering thresholds, Goods Received Notes (GRN), and balance aging." data-fa="ثبت فاکتورهای خرید عمده، مقایسه قیمت تمویل‌کنندگان و حساب باقی‌داری شرکت‌های پخش." data-ps="د عمده پیرود فاکتورونه او د عرضه کونکو د حسابونو کنټرول.">Manage supplier rates, automated reordering thresholds, Goods Received Notes (GRN), and balance aging.</p>
                        <ul class="afsm-checklist">
                            <li class="afsm-trans" data-en="<i class='fas fa-check-circle'></i> Supplier ledger & balances" data-fa="<i class='fas fa-check-circle'></i> دفتر حساب و تصفیه با تمویل‌کننده" data-ps="<i class='fas fa-check-circle'></i> د عرضه کونکو د پور حساب"><i class="fas fa-check-circle"></i> Supplier ledger & balances</li>
                            <li class="afsm-trans" data-en="<i class='fas fa-check-circle'></i> Purchase orders & receiving" data-fa="<i class='fas fa-check-circle'></i> فرمایش خرید و رسید جنس (GRN)" data-ps="<i class='fas fa-check-circle'></i> د پیرود غوښتنه او رسید"><i class="fas fa-check-circle"></i> Purchase orders & receiving</li>
                            <li class="afsm-trans" data-en="<i class='fas fa-check-circle'></i> Landed cost calculation" data-fa="<i class='fas fa-check-circle'></i> محاسبه دقیق نرخ تمام شده جنس" data-ps="<i class='fas fa-check-circle'></i> د جنس اصلي تمامه شوې بیه"><i class="fas fa-check-circle"></i> Landed cost calculation</li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3">
                    <div class="afsm-card">
                        <div class="afsm-card-icon"><i class="fas fa-store-alt"></i></div>
                        <h4 class="afsm-trans" data-en="Multi-Branch Chains" data-fa="مدیریت شعبات و فروشگاه‌ها" data-ps="د څانګو مرکزي کنټرول">Multi-Branch Chains</h4>
                        <p class="afsm-trans" data-en="Orchestrate 2 to 20+ retail branches across Kabul, Herat, and other provinces with zero friction." data-fa="مدیریت همزمان چندین شعبه در سطح کابل یا ولایات با انتقال بین‌الگدامی و راپور مجموعی." data-ps="په کابل یا ولایتونو کې د څو څانګو مرکزي کنټرول او راپور ورکول.">Orchestrate 2 to 20+ retail branches across Kabul, Herat, and other provinces with zero friction.</p>
                        <ul class="afsm-checklist">
                            <li class="afsm-trans" data-en="<i class='fas fa-check-circle'></i> Inter-branch stock transfers" data-fa="<i class='fas fa-check-circle'></i> انتقال جنس بین شعبات" data-ps="<i class='fas fa-check-circle'></i> د څانګو ترمنځ د توکو لیږد"><i class="fas fa-check-circle"></i> Inter-branch stock transfers</li>
                            <li class="afsm-trans" data-en="<i class='fas fa-check-circle'></i> Centralized catalog management" data-fa="<i class='fas fa-check-circle'></i> تعریف واحد اجناس برای کل شعبات" data-ps="<i class='fas fa-check-circle'></i> د ټولو څانګو لپاره یو لست"><i class="fas fa-check-circle"></i> Centralized catalog management</li>
                            <li class="afsm-trans" data-en="<i class='fas fa-check-circle'></i> Consolidated chain P&L" data-fa="<i class='fas fa-check-circle'></i> گزارش کلی مفاد و نقص تمام شعبات" data-ps="<i class='fas fa-check-circle'></i> د ټولو څانګو د ګټې راپور"><i class="fas fa-check-circle"></i> Consolidated chain P&L</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FINAL CTA -->
    <section class="afsm-section bg-dark text-white text-center" style="background: #064e3b !important;">
        <div class="container">
            <h2 class="fw-bold mb-3 afsm-trans" 
                data-en="Modernize Your Afghanistan Supermarket & Retail Chain" 
                data-fa="سوپرمارکت و فروشگاه خود در افغانستان را مدرن و منظم سازید"
                data-ps="په افغانستان کې خپل سوپرمارکیټ پرمختللی او منظم کړئ">
                Modernize Your Afghanistan Supermarket & Retail Chain
            </h2>
            <p class="text-light opacity-75 max-w-700 mx-auto mb-4 afsm-trans"
                data-en="Eliminate inventory shrinkage, speed up cashier queues, and gain complete multi-store visibility with Digify Supermarket ERP."
                data-fa="با نرم‌افزار سوپرمارکت دیجی‌فای از کمبود جنس جلوگیری کنید، سرعت دخل‌ها را بالا ببرید و سود واقعی خود را مشاهده نمایید."
                data-ps="د ډیجیفای سره د توکو له ضایع کیدو مخنیوی وکړئ او خپل ټول پلور په اسانۍ سره کنټرول کړئ.">
                Eliminate inventory shrinkage, speed up cashier queues, and gain complete multi-store visibility with Digify Supermarket ERP.
            </p>
            <div class="d-flex justify-content-center gap-3 flex-wrap">
                <a href="#demo-form" class="btn btn-afsm-primary px-4 py-3"><i class="fas fa-calendar-check me-2"></i> <span class="afsm-trans" data-en="Request Supermarket Demo" data-fa="درخواست دموی سوپرمارکت" data-ps="د سوپرمارکیټ ډیمو ترلاسه کړئ">Request Supermarket Demo</span></a>
                <a href="erp-software-afghanistan.php" class="btn btn-afsm-outline px-4 py-3"><i class="fas fa-arrow-left me-2"></i> <span class="afsm-trans" data-en="View Main Afghanistan ERP" data-fa="صفحه اصلی ERP افغانستان" data-ps="د افغانستان اصلي پاڼه">View Main Afghanistan ERP</span></a>
            </div>
        </div>
    </section>

</div>

<script>
function switchSmLang(lang) {
    var btnEn = document.getElementById('btnSmLangEn');
    var btnFa = document.getElementById('btnSmLangFa');
    var btnPs = document.getElementById('btnSmLangPs');
    var wrapper = document.getElementById('afsmWrapper');
    
    localStorage.setItem('digify_af_lang', lang);
    
    [btnEn, btnFa, btnPs].forEach(function(b) { if(b) b.classList.remove('active'); });
    if (lang === 'fa' && btnFa) btnFa.classList.add('active');
    else if (lang === 'ps' && btnPs) btnPs.classList.add('active');
    else if (btnEn) btnEn.classList.add('active');
    
    if (wrapper) {
        if (lang === 'fa' || lang === 'ps') wrapper.classList.add('rtl-mode');
        else wrapper.classList.remove('rtl-mode');
    }
    
    document.querySelectorAll('.afsm-trans').forEach(function(el) {
        var text = el.getAttribute('data-' + lang);
        if (text) { el.innerHTML = text; }
    });
    document.querySelectorAll('.afsm-trans-ph').forEach(function(el) {
        var ph = el.getAttribute('data-' + lang + '-ph');
        if (ph) { el.setAttribute('placeholder', ph); }
    });
}

document.addEventListener('DOMContentLoaded', function() {
    var savedLang = localStorage.getItem('digify_af_lang') || 'en';
    switchSmLang(savedLang);
});
</script>

<?php include(__DIR__ . '/../../footer.php'); ?>
