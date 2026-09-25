<?php 
include_once(__DIR__ . '/../../db.php');
include_once(__DIR__ . '/../../fetch_meta.php');

$pageTitle = "Agriculture ERP Software in Afghanistan | Farm & Grain Management";
$pageDescription = "Digitize agricultural purchasing, inventory, sales, suppliers, farm operations and agricultural product distribution with Digify's Agriculture ERP in Afghanistan.";
$pageKeywords = "Agriculture ERP Afghanistan, Farm management software Afghanistan, Wheat grain ERP Afghanistan, Saffron ERP Afghanistan, Fertilizer seed software Afghanistan, Agribusiness software Kabul";
$pageCanonical = "https://www.digifysoft.in/agriculture-erp-software-afghanistan";

include(__DIR__ . '/../../top.php');
include(__DIR__ . '/../../header.php');
?>

<style>
/* Afghanistan Agriculture Design System */
.afag-page-wrapper {
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
.afag-hero {
    background: linear-gradient(135deg, #14532d 0%, #166534 50%, #064e3b 100%);
    color: #ffffff;
    padding: 70px 0 85px;
    position: relative;
    overflow: hidden;
    border-bottom: 4px solid #22c55e;
}
.afag-hero::before {
    content: '';
    position: absolute;
    top: -15%;
    right: -10%;
    width: 650px;
    height: 650px;
    background: radial-gradient(circle, rgba(34, 197, 94, 0.28) 0%, rgba(245, 158, 11, 0.12) 50%, rgba(0, 0, 0, 0) 75%);
    border-radius: 50%;
    pointer-events: none;
}
.afag-hero-badge {
    background: rgba(34, 197, 94, 0.18);
    border: 1px solid rgba(134, 239, 172, 0.45);
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
.afag-hero h1 {
    font-size: 42px;
    font-weight: 900;
    line-height: 1.25;
    margin-bottom: 18px;
    letter-spacing: -0.5px;
}
.afag-hero-sub {
    font-size: 18px;
    font-weight: 600;
    color: #fde047;
    line-height: 1.5;
    margin-bottom: 14px;
}
.afag-hero-desc {
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
    background: linear-gradient(135deg, #15803d 0%, #22c55e 100%);
    color: #ffffff;
    box-shadow: 0 4px 12px rgba(34, 197, 94, 0.4);
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
.btn-afag-primary {
    background: linear-gradient(135deg, #15803d 0%, #166534 100%);
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
    box-shadow: 0 10px 20px -5px rgba(21, 128, 61, 0.4);
    text-decoration: none;
}
.btn-afag-primary:hover {
    background: linear-gradient(135deg, #166534 0%, #14532d 100%);
    color: #ffffff;
    transform: translateY(-2px);
}
.btn-afag-outline {
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
.btn-afag-outline:hover {
    background: rgba(255, 255, 255, 0.18);
    color: #ffffff;
    transform: translateY(-2px);
}

/* Sections */
.afag-section { padding: 75px 0; }
.bg-light-afag { background-color: #f8fafc; }
.section-badge-afag {
    display: inline-block;
    background: #f0fdf4;
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
.section-title-afag {
    font-size: 34px;
    font-weight: 900;
    color: #0f172a;
    line-height: 1.3;
    margin-bottom: 16px;
    letter-spacing: -0.5px;
}

/* Feature Cards */
.afag-card {
    background: #ffffff;
    border: 1px solid #e2e8f0;
    border-radius: 16px;
    padding: 26px;
    transition: all 0.3s ease;
    height: 100%;
    display: flex;
    flex-direction: column;
}
.afag-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 20px 30px -10px rgba(0, 0, 0, 0.08);
    border-color: #86efac;
}
.afag-card-icon {
    width: 52px;
    height: 52px;
    border-radius: 14px;
    background: linear-gradient(135deg, #f0fdf4 0%, #dcfce7 100%);
    color: #15803d;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 22px;
    margin-bottom: 18px;
}
.afag-card h4 {
    font-size: 18px;
    font-weight: 800;
    color: #0f172a;
    margin-bottom: 10px;
}
.afag-card p {
    font-size: 14px;
    color: #64748b;
    line-height: 1.6;
    margin-bottom: 16px;
    flex-grow: 1;
}
.afag-checklist {
    list-style: none;
    padding: 0;
    margin: 0;
}
.afag-checklist li {
    font-size: 13.5px;
    color: #334155;
    margin-bottom: 8px;
    display: flex;
    align-items: center;
    gap: 8px;
}
.afag-checklist li i {
    color: #15803d;
    font-size: 14px;
    flex-shrink: 0;
}

@media (max-width: 991px) {
    .afag-hero { padding: 45px 0 55px; }
    .afag-hero h1 { font-size: 28px; line-height: 1.3; }
    .hero-lead-card { margin-top: 25px; padding: 24px 20px; }
    .section-title-afag { font-size: 24px; }
}
@media (max-width: 576px) {
    .afag-hero { padding: 35px 0 45px; }
    .afag-hero h1 { font-size: 23px; }
    .btn-afag-primary, .btn-afag-outline { width: 100%; justify-content: center; }
}
</style>

<div class="afag-page-wrapper" id="afagWrapper">

    <!-- HERO SECTION -->
    <section class="afag-hero" id="hero">
        <div class="container position-relative" style="z-index: 2;">
            <div class="row align-items-center g-4">
                <div class="col-lg-7">
                    <!-- Language Switcher -->
                    <div class="lang-toggle-bar">
                        <button class="lang-pill active" id="btnAgLangEn" onclick="switchAgLang('en')">🇬🇧 English</button>
                        <button class="lang-pill" id="btnAgLangFa" onclick="switchAgLang('fa')">🇦🇫 دری (Dari)</button>
                        <button class="lang-pill" id="btnAgLangPs" onclick="switchAgLang('ps')">🇦🇫 پښتو (Pashto)</button>
                    </div>

                    <div class="afag-hero-badge">
                        <span>🌾</span>
                        <span class="afag-trans" 
                            data-en="National Economic Engine • 25% of Afghanistan GDP" 
                            data-fa="ستون اصلی اقتصاد افغانستان • ۲۵٪ تولید ناخالص ملی"
                            data-ps="د افغانستان د اقتصاد اصلي بنسټ • ۲۵٪ ناخالص ملي تولید">
                            National Economic Engine • 25% of Afghanistan GDP
                        </span>
                    </div>

                    <h1 class="afag-trans" 
                        data-en="Agriculture ERP Software in Afghanistan" 
                        data-fa="نرم‌افزار مدیریت زراعت و غلات در افغانستان"
                        data-ps="په افغانستان کې د کرنې او غلو دانو ERP سافټویر">
                        Agriculture ERP Software in Afghanistan
                    </h1>

                    <div class="afag-hero-sub afag-trans"
                        data-en="Digitize agricultural purchasing, inventory, sales, suppliers, farm operations and agricultural product distribution with an integrated ERP platform."
                        data-fa="مدیریت خرید حاصلات، گدام غلات، حساب دهقانان و توزیع کود و تخم‌های اصلاح شده در سراسر ولایات."
                        data-ps="د حاصلاتو پیرود، د غلو ګودامونه، د بزګرانو حسابونه او د اصلاح شویو تخمونو ویش په یو سیسټم کې.">
                        Digitize agricultural purchasing, inventory, sales, suppliers, farm operations and agricultural product distribution with an integrated ERP platform.
                    </div>

                    <p class="afag-hero-desc afag-trans"
                        data-en="Agriculture accounts for around a quarter of Afghanistan's national economy. Digify manages wheat, rice, saffron, grain silos, fertilizer distribution, and wholesale agricultural markets."
                        data-fa="زراعت حدود یک‌چهارم اقتصاد افغانستان را تشکیل می‌دهد. دیجی‌فای پروسه خرید گندم، برنج، زعفران، سیلوهای گدام و توزیع کود کیمیاوی را دیجیتالی می‌سازد."
                        data-ps="کرنه د افغانستان د اقتصاد شاوخوا څلورمه برخه جوړوي. ډیجیفای د غنمو، وریجو، زعفرانو او کیمیاوي سرې ویش په بشپړ ډول کنټرولوي.">
                        Agriculture accounts for around a quarter of Afghanistan's national economy. Digify manages wheat, rice, saffron, grain silos, fertilizer distribution, and wholesale agricultural markets.
                    </p>

                    <div class="d-flex flex-wrap gap-3 mb-4">
                        <a href="#demo-form" class="btn btn-afag-primary">
                            <i class="fas fa-calendar-check"></i>
                            <span class="afag-trans" data-en="Request Agriculture Demo" data-fa="درخواست دموی سیستم زراعت" data-ps="د کرنې ډیمو ترلاسه کړئ">Request Agriculture Demo</span>
                        </a>
                        <a href="erp-software-afghanistan.php" class="btn btn-afag-outline">
                            <i class="fas fa-arrow-left"></i>
                            <span class="afag-trans" data-en="Back to Afghanistan Main ERP" data-fa="بازگشت به صفحه اصلی افغانستان" data-ps="د افغانستان اصلي پاڼې ته ستنیدل">Back to Afghanistan Main ERP</span>
                        </a>
                    </div>
                </div>

                <!-- Right Form -->
                <div class="col-lg-5" id="demo-form">
                    <div class="hero-lead-card">
                        <div class="d-flex align-items-center justify-content-between mb-2">
                            <span class="badge bg-success text-white px-3 py-1 rounded-pill font-monospace afag-trans" data-en="🌾 AGRI ERP DEMO" data-fa="🌾 دموی زراعت" data-ps="🌾 د کرنې ډیمو">🌾 AGRI ERP DEMO</span>
                            <span class="text-muted small"><i class="fas fa-clock text-warning"></i> <span class="afag-trans" data-en="15-Min Live Demo" data-fa="دموی ۱۵ دقیقه‌ای" data-ps="۱۵ دقیقې ډیمو">15-Min Live Demo</span></span>
                        </div>
                        <h3 class="afag-trans" data-en="Schedule Agriculture Demo" data-fa="ثبت نوبت دموی زراعت" data-ps="د کرنې ډیمو مهالویش کړئ">Schedule Agriculture Demo</h3>
                        <p class="small text-muted mb-3 afag-trans" data-en="See harvest inventory, farmer ledgers, and grain lot tracking live." data-fa="گدام غلات، حساب دهقانان و دسته‌بندی محصولات را زنده مشاهده کنید." data-ps="د حاصلاتو ګودام او د بزګرانو حساب کتاب په ژوندي ډول وګورئ.">See harvest inventory, farmer ledgers, and grain lot tracking live.</p>
                        
                        <form action="send_mail.php" method="POST" id="afghanistanAgriForm">
                            <input type="hidden" name="source" value="Afghanistan Agriculture ERP Page">
                            <input type="hidden" name="country" value="Afghanistan">
                            
                            <div class="mb-2">
                                <label class="form-label small fw-bold text-dark afag-trans" data-en="Full Name" data-fa="نام و تخلص" data-ps="بشپړ نوم">Full Name</label>
                                <input type="text" name="name" class="form-control afag-trans-ph" placeholder="e.g. Haji Ghulam Nabi" data-en-ph="e.g. Haji Ghulam Nabi" data-fa-ph="مثال: حاجی غلام نبی" data-ps-ph="مثال: حاجي غلام نبي" required>
                            </div>

                            <div class="mb-2">
                                <label class="form-label small fw-bold text-dark afag-trans" data-en="Agri Business / Trading Name" data-fa="نام شرکت زراعتی یا تجارت‌خانه" data-ps="د شرکت یا سوداګرۍ نوم">Agri Business / Trading Name</label>
                                <input type="text" name="company" class="form-control afag-trans-ph" placeholder="e.g. Herat Saffron / Afghan Grain Traders" data-en-ph="e.g. Herat Saffron / Afghan Grain Traders" data-fa-ph="مثال: زعفران هرات / تجارت غلات افغان" data-ps-ph="مثال: د هرات زعفران / د غلو سوداګري" required>
                            </div>

                            <div class="row g-2 mb-2">
                                <div class="col-6">
                                    <label class="form-label small fw-bold text-dark afag-trans" data-en="WhatsApp / Phone" data-fa="شماره تماس / واتساپ" data-ps="د اړیکې شمېره">WhatsApp / Phone</label>
                                    <input type="tel" name="phone" class="form-control" placeholder="+93 7X XXX XXXX" required>
                                </div>
                                <div class="col-6">
                                    <label class="form-label small fw-bold text-dark afag-trans" data-en="Business Type" data-fa="نوع فعالیت" data-ps="د فعالیت ډول">Business Type</label>
                                    <select name="business_type" class="form-select" required>
                                        <option value="Grain & Wheat Trading" class="afag-trans" data-en="Grain & Wheat Trading" data-fa="تجارت گندم و غلات" data-ps="د غنمو او غلو سوداګري">Grain & Wheat Trading</option>
                                        <option value="Saffron Business" class="afag-trans" data-en="Saffron Business" data-fa="تولید و تجارت زعفران" data-ps="د زعفرانو سوداګري">Saffron Business</option>
                                        <option value="Seeds & Fertilizer" class="afag-trans" data-en="Seeds & Fertilizer Dealer" data-fa="فروش تخم و کود کیمیاوی" data-ps="تخم او کیمیاوي سره">Seeds & Fertilizer Dealer</option>
                                        <option value="Fruit & Produce Wholesale" class="afag-trans" data-en="Fruit & Produce Wholesale" data-fa="عمده‌فروشی میوه و ترکاری" data-ps="د تازه میوو عمده پلور">Fruit & Produce Wholesale</option>
                                    </select>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-afag-primary w-100 py-2 mt-2">
                                <span class="afag-trans" data-en="Schedule Live Agri ERP Demo" data-fa="ثبت نوبت دموی زنده" data-ps="ژوندی ډیمو پیل کړئ">Schedule Live Agri ERP Demo</span>
                                <i class="fas fa-arrow-right ms-2"></i>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CORE AGRICULTURE MODULES -->
    <section class="afag-section bg-light-afag" id="agri-modules">
        <div class="container">
            <div class="text-center mb-5">
                <span class="section-badge-afag afag-trans" data-en="Complete Agricultural Engine" data-fa="امکانات تخصصی سیستم زراعت" data-ps="د کرنې ځانګړي امکانات">Complete Agricultural Engine</span>
                <h2 class="section-title-afag afag-trans" 
                    data-en="Purpose-Built Features for Afghan Agribusinesses" 
                    data-fa="قابلیت‌های ویژه برای سکتور زراعت و غلات افغانستان"
                    data-ps="د افغانستان د کرنیز سکتور لپاره ځانګړي امکانات">
                    Purpose-Built Features for Afghan Agribusinesses
                </h2>
            </div>

            <div class="row g-4">
                <div class="col-md-6 col-lg-3">
                    <div class="afag-card">
                        <div class="afag-card-icon"><i class="fas fa-users"></i></div>
                        <h4 class="afag-trans" data-en="Farmer & Supplier Ledgers" data-fa="حساب دهقانان و تمویل‌کنندگان" data-ps="د بزګرانو حساب کتاب">Farmer & Supplier Ledgers</h4>
                        <p class="afag-trans" data-en="Track crop advances, harvest intake weights, quality deductions, and net payouts to farmers." data-fa="ثبت پیش‌پرداخت به دهقانان، وزن حاصلات، کسر افت کیفیت و تصفیه حساب نهایی." data-ps="بزګرانو ته د مخکینیو پیسو ورکړه او د حاصلاتو د وزن مطابق حساب تصفیه کول.">Track crop advances, harvest intake weights, quality deductions, and net payouts to farmers.</p>
                        <ul class="afag-checklist">
                            <li class="afag-trans" data-en="<i class='fas fa-check-circle'></i> Weighbridge & sack intake logs" data-fa="<i class='fas fa-check-circle'></i> ثبت وزن پل و خریطه‌های حاصلات" data-ps="<i class='fas fa-check-circle'></i> د تلې وزن او د بوریو ثبت"><i class="fas fa-check-circle"></i> Weighbridge & sack intake logs</li>
                            <li class="afag-trans" data-en="<i class='fas fa-check-circle'></i> Moisture & impurity deductions" data-fa="<i class='fas fa-check-circle'></i> کسر رطوبت و ناخالصی جنس" data-ps="<i class='fas fa-check-circle'></i> د لندبل او خځلو کمول"><i class="fas fa-check-circle"></i> Moisture & impurity deductions</li>
                            <li class="afag-trans" data-en="<i class='fas fa-check-circle'></i> Farmer balance statements" data-fa="<i class='fas fa-check-circle'></i> صورت حساب انفرادی دهقانان" data-ps="<i class='fas fa-check-circle'></i> د هر بزګر جلا حساب پاڼه"><i class="fas fa-check-circle"></i> Farmer balance statements</li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3">
                    <div class="afag-card">
                        <div class="afag-card-icon"><i class="fas fa-warehouse"></i></div>
                        <h4 class="afag-trans" data-en="Silo & Grain Inventory" data-fa="سیلوها و گدام‌های غلات" data-ps="د غلو سیلوګانې او ګودامونه">Silo & Grain Inventory</h4>
                        <p class="afag-trans" data-en="Manage wheat, rice, barley, and grain stock across silos and regional storage warehouses." data-fa="کنترل موجودی گندم، برنج، جو و حبوبات در سیلوهای مرکزی و ولایتی." data-ps="په مرکزي او ولایتي سیلوګانو کې د غنمو، وریجو او غلو دانو ساتنه.">Manage wheat, rice, barley, and grain stock across silos and regional storage warehouses.</p>
                        <ul class="afag-checklist">
                            <li class="afag-trans" data-en="<i class='fas fa-check-circle'></i> Silo bin-wise grain tracking" data-fa="<i class='fas fa-check-circle'></i> تفکیک موجودی بر اساس هر سیلو" data-ps="<i class='fas fa-check-circle'></i> د هرې سیلو جلا حساب"><i class="fas fa-check-circle"></i> Silo bin-wise grain tracking</li>
                            <li class="afag-trans" data-en="<i class='fas fa-check-circle'></i> Fumigation & pest control logs" data-fa="<i class='fas fa-check-circle'></i> ثبت دواپاشی و کنترل آفت‌ها" data-ps="<i class='fas fa-check-circle'></i> د درمل شیندلو ثبت"><i class="fas fa-check-circle"></i> Fumigation & pest control logs</li>
                            <li class="afag-trans" data-en="<i class='fas fa-check-circle'></i> Loss & shrinkage reporting" data-fa="<i class='fas fa-check-circle'></i> محاسبه افت و کمبود طبیعی وزن" data-ps="<i class='fas fa-check-circle'></i> د وزن د کمښت راپور"><i class="fas fa-check-circle"></i> Loss & shrinkage reporting</li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3">
                    <div class="afag-card">
                        <div class="afag-card-icon"><i class="fas fa-box"></i></div>
                        <h4 class="afag-trans" data-en="Seeds & Fertilizers" data-fa="تخم، کود و ادویه زراعتی" data-ps="تخم، کیمیاوي سره او درمل">Seeds & Fertilizers</h4>
                        <p class="afag-trans" data-en="Manage input supplies, batch numbers, supplier purchases, and distribution to regional farmers." data-fa="مدیریت توزیع کود سیاه/سفید، تخم‌های بذری، ادویه‌جات زراعتی و پرزه جات واترپمپ." data-ps="د کیمیاوي سرې، اصلاح شویو تخمونو او زراعتي درملو د ویش مدیریت.">Manage input supplies, batch numbers, supplier purchases, and distribution to regional farmers.</p>
                        <ul class="afag-checklist">
                            <li class="afag-trans" data-en="<i class='fas fa-check-circle'></i> Batch & expiry management" data-fa="<i class='fas fa-check-circle'></i> تاریخ انقضا و شماره دسته کود" data-ps="<i class='fas fa-check-circle'></i> د سرې د ختمیدو تاریخ"><i class="fas fa-check-circle"></i> Batch & expiry management</li>
                            <li class="afag-trans" data-en="<i class='fas fa-check-circle'></i> Bulk farmer credit distribution" data-fa="<i class='fas fa-check-circle'></i> توزیع قرضه تخم و کود به دهقان" data-ps="<i class='fas fa-check-circle'></i> بزګرانو ته په پور د سرې ورکړه"><i class="fas fa-check-circle"></i> Bulk farmer credit distribution</li>
                            <li class="afag-trans" data-en="<i class='fas fa-check-circle'></i> Supplier procurement orders" data-fa="<i class='fas fa-check-circle'></i> فرمایش خرید از تمویل‌کننده" data-ps="<i class='fas fa-check-circle'></i> د پیرودلو رسمي فرمایش"><i class="fas fa-check-circle"></i> Supplier procurement orders</li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3">
                    <div class="afag-card">
                        <div class="afag-card-icon"><i class="fas fa-truck"></i></div>
                        <h4 class="afag-trans" data-en="Wholesale Sales & Market" data-fa="فروش عمده و تجارت مندی" data-ps="عمده پلور او د منډوي تجارت">Wholesale Sales & Market</h4>
                        <p class="afag-trans" data-en="Manage Mandawi wholesale sales orders, truck dispatch manifests, and customer credit ledger balances." data-fa="فروش عمده در مندی‌های کابل، قندهار، هرات و مزار با ثبت بارنامه لاری و طلبات." data-ps="په منډویانو کې د غلو عمده پلور او د بار وړونکو موټرو ثبت.">Manage Mandawi wholesale sales orders, truck dispatch manifests, and customer credit ledger balances.</p>
                        <ul class="afag-checklist">
                            <li class="afag-trans" data-en="<i class='fas fa-check-circle'></i> Mandawi bulk sales invoicing" data-fa="<i class='fas fa-check-circle'></i> فاکتور فروش عمده مندی" data-ps="<i class='fas fa-check-circle'></i> د منډوي عمده فاکتور"><i class="fas fa-check-circle"></i> Mandawi bulk sales invoicing</li>
                            <li class="afag-trans" data-en="<i class='fas fa-check-circle'></i> Truck dispatch waybills" data-fa="<i class='fas fa-check-circle'></i> صدور بارنامه و حواله موتر" data-ps="<i class='fas fa-check-circle'></i> د موټر بارنامه او لست"><i class="fas fa-check-circle"></i> Truck dispatch waybills</li>
                            <li class="afag-trans" data-en="<i class='fas fa-check-circle'></i> Customer payment tracking" data-fa="<i class='fas fa-check-circle'></i> پیگیری وصولی و طلبات تجار" data-ps="<i class='fas fa-check-circle'></i> د پورونو او پیسو راټولول"><i class="fas fa-check-circle"></i> Customer payment tracking</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FINAL CTA -->
    <section class="afag-section bg-dark text-white text-center" style="background: #14532d !important;">
        <div class="container">
            <h2 class="fw-bold mb-3 afag-trans" 
                data-en="Modernize Your Afghanistan Agriculture & Grain Operations" 
                data-fa="مدیریت زراعت، غلات و تخم‌های اصلاح شده خود را مدرن سازید"
                data-ps="خپله کرنیزه سوداګري او د غلو دانو چارې پرمختللې کړئ">
                Modernize Your Afghanistan Agriculture & Grain Operations
            </h2>
            <p class="text-light opacity-75 max-w-700 mx-auto mb-4 afag-trans"
                data-en="Gain full visibility from farmer advances and crop intake to silo storage and wholesale distribution with Digify Agriculture ERP."
                data-fa="از ثبت حساب دهقانان تا گدام‌داری سیلوها و فروش عمده مندی — همه را با دیجی‌فای هوشمندانه اداره کنید."
                data-ps="د بزګرانو له حساب څخه تر سیلوګانو او عمده پلور پورې ټول کارونه په ډیجیفای سره پرمخ یوسئ.">
                Gain full visibility from farmer advances and crop intake to silo storage and wholesale distribution with Digify Agriculture ERP.
            </p>
            <div class="d-flex justify-content-center gap-3 flex-wrap">
                <a href="#demo-form" class="btn btn-afag-primary px-4 py-3"><i class="fas fa-calendar-check me-2"></i> <span class="afag-trans" data-en="Request Agriculture Demo" data-fa="درخواست دموی زراعت" data-ps="د کرنې ډیمو ترلاسه کړئ">Request Agriculture Demo</span></a>
                <a href="erp-software-afghanistan.php" class="btn btn-afag-outline px-4 py-3"><i class="fas fa-arrow-left me-2"></i> <span class="afag-trans" data-en="View Main Afghanistan ERP" data-fa="صفحه اصلی ERP افغانستان" data-ps="د افغانستان اصلي پاڼه">View Main Afghanistan ERP</span></a>
            </div>
        </div>
    </section>

</div>

<script>
function switchAgLang(lang) {
    var btnEn = document.getElementById('btnAgLangEn');
    var btnFa = document.getElementById('btnAgLangFa');
    var btnPs = document.getElementById('btnAgLangPs');
    var wrapper = document.getElementById('afagWrapper');
    
    localStorage.setItem('digify_af_lang', lang);
    
    [btnEn, btnFa, btnPs].forEach(function(b) { if(b) b.classList.remove('active'); });
    if (lang === 'fa' && btnFa) btnFa.classList.add('active');
    else if (lang === 'ps' && btnPs) btnPs.classList.add('active');
    else if (btnEn) btnEn.classList.add('active');
    
    if (wrapper) {
        if (lang === 'fa' || lang === 'ps') wrapper.classList.add('rtl-mode');
        else wrapper.classList.remove('rtl-mode');
    }
    
    document.querySelectorAll('.afag-trans').forEach(function(el) {
        var text = el.getAttribute('data-' + lang);
        if (text) { el.innerHTML = text; }
    });
    document.querySelectorAll('.afag-trans-ph').forEach(function(el) {
        var ph = el.getAttribute('data-' + lang + '-ph');
        if (ph) { el.setAttribute('placeholder', ph); }
    });
}

document.addEventListener('DOMContentLoaded', function() {
    var savedLang = localStorage.getItem('digify_af_lang') || 'en';
    switchAgLang(savedLang);
});
</script>

<?php include(__DIR__ . '/../../footer.php'); ?>
