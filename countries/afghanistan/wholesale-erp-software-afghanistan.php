<?php 
include_once(__DIR__ . '/../../db.php');
include_once(__DIR__ . '/../../fetch_meta.php');

$pageTitle = "Wholesale & Distribution ERP Software in Afghanistan | B2B Trading ERP";
$pageDescription = "Manage wholesale distribution, Mandawi B2B sales, customer credit limits, multi-depot inventory, and Sarafi accounts in Afghanistan with Digify ERP.";
$pageKeywords = "Wholesale ERP Afghanistan, Distribution software Kabul, Mandawi wholesale software Afghanistan, B2B trading ERP Afghanistan, FMCG wholesale software, Afghan distribution ERP";
$pageCanonical = "https://www.digifysoft.in/wholesale-erp-software-afghanistan";

include(__DIR__ . '/../../top.php');
include(__DIR__ . '/../../header.php');
?>

<style>
/* Afghanistan Wholesale Suite Design System */
.afws-page-wrapper {
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
.afws-hero {
    background: linear-gradient(135deg, #0c4a6e 0%, #0369a1 50%, #0284c7 100%);
    color: #ffffff;
    padding: 70px 0 85px;
    position: relative;
    overflow: hidden;
    border-bottom: 4px solid #38bdf8;
}
.afws-hero::before {
    content: '';
    position: absolute;
    top: -15%;
    right: -10%;
    width: 650px;
    height: 650px;
    background: radial-gradient(circle, rgba(56, 189, 248, 0.28) 0%, rgba(2, 132, 199, 0.15) 50%, rgba(0, 0, 0, 0) 75%);
    border-radius: 50%;
    pointer-events: none;
}
.afws-hero-badge {
    background: rgba(56, 189, 248, 0.25);
    border: 1px solid rgba(186, 230, 253, 0.4);
    color: #bae6fd;
    font-size: 13px;
    font-weight: 700;
    padding: 7px 18px;
    border-radius: 30px;
    display: inline-flex;
    align-items: center;
    gap: 8px;
    margin-bottom: 18px;
}
.afws-hero h1 {
    font-size: 42px;
    font-weight: 900;
    line-height: 1.25;
    margin-bottom: 18px;
    letter-spacing: -0.5px;
}
.afws-hero-sub {
    font-size: 18px;
    font-weight: 600;
    color: #e0f2fe;
    line-height: 1.5;
    margin-bottom: 14px;
}
.afws-hero-desc {
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
    background: #38bdf8;
    color: #0c4a6e;
    box-shadow: 0 2px 6px rgba(0,0,0,0.2);
}

/* Form */
.afws-hero-form-card {
    background: #ffffff;
    border-radius: 16px;
    padding: 28px 24px;
    box-shadow: 0 20px 45px rgba(0, 0, 0, 0.35);
    color: #1e293b;
    border: 1px solid rgba(255, 255, 255, 0.2);
}
.afws-hero-form-card h3 {
    font-size: 20px;
    font-weight: 800;
    color: #0f172a;
    margin-bottom: 6px;
}
.afws-hero-form-card p {
    font-size: 13px;
    color: #64748b;
    margin-bottom: 18px;
}

/* Section styling */
.afws-section { padding: 60px 0; }
.afws-section-title {
    font-size: 32px;
    font-weight: 800;
    color: #0f172a;
    margin-bottom: 12px;
    letter-spacing: -0.3px;
}
.afws-section-sub {
    font-size: 16px;
    color: #64748b;
    max-width: 680px;
    margin: 0 auto 40px;
}

/* Cards */
.afws-card {
    background: #ffffff;
    border: 1px solid #e2e8f0;
    border-radius: 14px;
    padding: 24px;
    height: 100%;
    transition: all 0.3s ease;
    box-shadow: 0 4px 6px -1px rgba(0,0,0,0.05);
}
.afws-card:hover {
    transform: translateY(-4px);
    box-shadow: 0 15px 30px rgba(0,0,0,0.08);
    border-color: #0284c7;
}
.afws-card-icon {
    width: 52px;
    height: 52px;
    border-radius: 12px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 24px;
    margin-bottom: 16px;
    background: rgba(2, 132, 199, 0.1);
    color: #0284c7;
}
.afws-card h4 {
    font-size: 18px;
    font-weight: 700;
    color: #0f172a;
    margin-bottom: 10px;
}
.afws-card p {
    font-size: 14px;
    color: #64748b;
    line-height: 1.6;
    margin-bottom: 0;
}

/* Buttons */
.btn-afws-primary {
    background: #0284c7;
    color: #ffffff;
    font-weight: 700;
    border-radius: 8px;
    padding: 12px 24px;
    border: none;
    transition: all 0.2s;
}
.btn-afws-primary:hover {
    background: #0369a1;
    color: #ffffff;
    box-shadow: 0 6px 16px rgba(2, 132, 199, 0.35);
}
.btn-afws-outline {
    border: 2px solid rgba(255,255,255,0.4);
    color: #ffffff;
    font-weight: 700;
    border-radius: 8px;
    padding: 12px 24px;
    background: transparent;
}
.btn-afws-outline:hover {
    background: #ffffff;
    color: #0c4a6e;
}

@media (max-width: 991px) {
    .afws-hero { padding: 45px 0 60px; text-align: center; }
    .afws-hero h1 { font-size: 30px; }
    .afws-hero-desc { margin: 0 auto 24px; }
    .afws-hero-form-card { margin-top: 30px; text-align: left; }
    .rtl-mode .afws-hero-form-card { text-align: right; }
}
</style>

<div class="afws-page-wrapper" id="afwsWrapper">

    <!-- HERO SECTION -->
    <section class="afws-hero">
        <div class="container">
            <!-- Language Switcher Bar -->
            <div class="text-center text-lg-start mb-2">
                <div class="lang-toggle-bar">
                    <button type="button" class="lang-pill active" id="btnWsLangEn" onclick="switchWsLang('en')">🇬🇧 English</button>
                    <button type="button" class="lang-pill" id="btnWsLangFa" onclick="switchWsLang('fa')">🇦🇫 دری (Farsi)</button>
                    <button type="button" class="lang-pill" id="btnWsLangPs" onclick="switchWsLang('ps')">🇦🇫 پښتو (Pashto)</button>
                </div>
            </div>

            <div class="row align-items-center">
                <div class="col-lg-7">
                    <div class="afws-hero-badge afws-trans" 
                        data-en="📦 #1 Wholesale, Mandawi & Distribution ERP in Afghanistan" 
                        data-fa="📦 قدرتمندترین سیستم عمده‌فروشی، گدام‌داری و مندوی افغانستان" 
                        data-ps="📦 په افغانستان کې د مندوي او عمده پلورلو مخکښ سافټویر">
                        📦 #1 Wholesale, Mandawi & Distribution ERP in Afghanistan
                    </div>
                    <h1 class="afws-trans"
                        data-en="Wholesale & Distribution ERP Software in Afghanistan"
                        data-fa="نرم‌افزار جامع مدیریت عمده‌فروشی و توزیع در افغانستان"
                        data-ps="په افغانستان کې د عمده خرڅلاو او وېش لپاره ERP سافټویر">
                        Wholesale & Distribution ERP Software in Afghanistan
                    </h1>
                    <div class="afws-hero-sub afws-trans"
                        data-en="Tiered B2B Pricing • Customer Credit Limits • Sarafi Accounts • Provincial Godowns"
                        data-fa="قیمت‌گذاری چندسطحی • کنترول طلبکاری و سقف اعتبار • حسابات صرافی • گدام‌های ولایتی"
                        data-ps="د پېرودونکو د پورونو کنټرول • د صرافۍ راکړه ورکړه • ولایتي ګودامونه • څو ډوله بیې">
                        Tiered B2B Pricing • Customer Credit Limits • Sarafi Accounts • Provincial Godowns
                    </div>
                    <p class="afws-hero-desc afws-trans"
                        data-en="Accelerate bulk order fulfillment, prevent bad debts, track driver dispatches, manage supplier payables, and sync multi-branch Godowns across Kabul, Herat, Mazar-i-Sharif, Kandahar, and Jalalabad."
                        data-fa="مدیریت سفارشات کارتنی و کانتینری، تسویه حساب با دکانداران، توزیع موتری به ولایات، ثبت پرداخت‌های صرافی و گزارش مانده موجودی گدام‌ها با دیجی‌فای."
                        data-ps="په کابل، هرات، مزار، کندهار او ننګرهار کې د خپلو ګودامونو، د موټرو بارنامو او د پیرودونکو د پورونو حسابونه په ډاډه توګه اداره کړئ.">
                        Accelerate bulk order fulfillment, prevent bad debts, track driver dispatches, manage supplier payables, and sync multi-branch Godowns across Kabul, Herat, Mazar-i-Sharif, Kandahar, and Jalalabad.
                    </p>
                    <div class="d-flex gap-3 flex-wrap justify-content-center justify-content-lg-start">
                        <a href="#demo-form" class="btn btn-afws-primary"><i class="fas fa-boxes-packing me-2"></i> <span class="afws-trans" data-en="Get Wholesale ERP Demo" data-fa="درخواست دموی عمده‌فروشی" data-ps="د عمده پلور ډیمو ترلاسه کړئ">Get Wholesale ERP Demo</span></a>
                        <a href="tel:+919876543210" class="btn btn-afws-outline"><i class="fas fa-headset me-2"></i> <span class="afws-trans" data-en="Talk to Trading Expert" data-fa="گفتگو با کارشناس تجارت" data-ps="د سوداګرۍ متخصص سره خبرې">Talk to Trading Expert</span></a>
                    </div>
                </div>

                <!-- Form Card -->
                <div class="col-lg-5" id="demo-form">
                    <div class="afws-hero-form-card">
                        <h3 class="afws-trans" data-en="Request Wholesale ERP Consultation" data-fa="درخواست مشاوره عمده‌فروشی" data-ps="د عمده پلور مشورې غوښتنه">Request Wholesale ERP Consultation</h3>
                        <p class="afws-trans" data-en="Built for Mandawi traders, FMCG distributors & importers." data-fa="ویژه تجار مندوی، شرکت‌های پخش FMCG و واردکنندگان." data-ps="د مندوي سوداګرو، واردوونکو او توزیع کونکو لپاره.">Built for Mandawi traders, FMCG distributors & importers.</p>
                        
                        <form action="send_lead.php" method="POST">
                            <div class="mb-3">
                                <label class="form-label small fw-bold afws-trans" data-en="Full Name" data-fa="نام و تخلص" data-ps="بشپړ نوم">Full Name</label>
                                <input type="text" name="name" class="form-control afws-trans-ph" placeholder="e.g. Haji Baryalai" data-en-ph="e.g. Haji Baryalai" data-fa-ph="مثال: حاجی بریالی" data-ps-ph="مثال: حاجي بریالی" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label small fw-bold afws-trans" data-en="Company / Mandawi Agency Name" data-fa="نام شرکت / سرای تجارتی" data-ps="د شرکت یا دوکان نوم">Company / Mandawi Agency Name</label>
                                <input type="text" name="company" class="form-control afws-trans-ph" placeholder="e.g. Kabul Central Trading Ltd." data-en-ph="e.g. Kabul Central Trading Ltd." data-fa-ph="مثال: شرکت تجارتی کابل سنترال" data-ps-ph="مثال: د کابل سنټرل سوداګریز شرکت" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label small fw-bold afws-trans" data-en="WhatsApp / Phone" data-fa="شماره واتساپ" data-ps="د واټساپ شمېره">WhatsApp / Phone</label>
                                <input type="tel" name="phone" class="form-control" placeholder="+93 7X XXX XXXX" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label small fw-bold afws-trans" data-en="Wholesale Domain" data-fa="حوزه فعالیت عمده‌فروشی" data-ps="د فعالیت برخه">Wholesale Domain</label>
                                <select name="business_type" class="form-select">
                                    <option value="FMCG & Packaged Food Distribution">FMCG & Packaged Food Distribution</option>
                                    <option value="Electronics & Mobile Accessories">Electronics & Mobile Accessories</option>
                                    <option value="Building Materials & Hardware">Building Materials & Hardware</option>
                                    <option value="Cosmetics & Personal Care">Cosmetics & Personal Care</option>
                                    <option value="General Mandawi Trading">General Mandawi Trading</option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-afws-primary w-100 py-2 fw-bold afws-trans"
                                data-en="Book Free Demo"
                                data-fa="ارسال درخواست و دریافت دمو"
                                data-ps="وړیا ډیمو ترلاسه کړئ">
                                Book Free Demo
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CORE MODULES -->
    <section class="afws-section">
        <div class="container">
            <div class="text-center">
                <h2 class="afws-section-title afws-trans"
                    data-en="Essential Modules for Afghan Wholesalers & Distributors"
                    data-fa="ماژول‌های اختصاصی عمده‌فروشی و بازرگانی در افغانستان"
                    data-ps="د عمده پلورلو او وېش ځانګړې برخې">
                    Essential Modules for Afghan Wholesalers & Distributors
                </h2>
                <p class="afws-section-sub afws-trans"
                    data-en="Eliminate paper notebooks, control credit debt exposure, and know your true inventory across all Godowns."
                    data-fa="دفترچه‌های کاغذی سنتی را کنار بگذارید، از انباشت طلب‌های سوخت‌شده جلوگیری کنید و موجودی لحظه‌ای انبارها را ببینید."
                    data-ps="د کاغذي حسابونو پر ځای عصري سیستم وکاروئ، خپل پورونه په وخت ترلاسه کړئ او د ګودام موجودي وڅارئ.">
                    Eliminate paper notebooks, control credit debt exposure, and know your true inventory across all Godowns.
                </p>
            </div>

            <div class="row g-4">
                <div class="col-md-6 col-lg-4">
                    <div class="afws-card">
                        <div class="afws-card-icon"><i class="fas fa-hand-holding-usd"></i></div>
                        <h4 class="afws-trans" data-en="Credit Limits & Overdue Locks" data-fa="سقف اعتبار و قفل فاکتور مشتریان بدحساب" data-ps="د پور اندازه او د حساب بندیز">Credit Limits & Overdue Locks</h4>
                        <p class="afws-trans"
                            data-en="Assign maximum credit limits per shopkeeper. System automatically warns or locks billing if past credit remains unpaid."
                            data-fa="تعیین سقف طلبکاری برای هر دکاندار با قفل خودکار صدور فاکتور جدید در صورت عدم تسویه به موقع."
                            data-ps="د هر دوکاندار لپاره د پور حد ټاکل او د زړو پورونو په پاتې کیدو سره د نوي فاکتور بندول.">
                            Assign maximum credit limits per shopkeeper. System automatically warns or locks billing if past credit remains unpaid.
                        </p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="afws-card">
                        <div class="afws-card-icon"><i class="fas fa-tags"></i></div>
                        <h4 class="afws-trans" data-en="Tiered Wholesale Pricing" data-fa="نرخ‌بندی چندگانه (مندوی، ولایات، پرچون)" data-ps="د بیو بېلابېل لېسټونه">Tiered Wholesale Pricing</h4>
                        <p class="afws-trans"
                            data-en="Setup automatic price tiers for Master Distributors, Regional Dealers, and Walk-in Cash Wholesalers based on order volume."
                            data-fa="قیمت‌گذاری خودکار بر اساس حجم خرید: نرخ کانتینری، نرخ کارتنی و نرخ نقدی برای نمایندگی‌های ولایات."
                            data-ps="د کارتن او کانتینر د اندازې له مخې د ولایتونو او عمده پېرودونکو لپاره ځانګړې بیې.">
                            Setup automatic price tiers for Master Distributors, Regional Dealers, and Walk-in Cash Wholesalers based on order volume.
                        </p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="afws-card">
                        <div class="afws-card-icon"><i class="fas fa-warehouse"></i></div>
                        <h4 class="afws-trans" data-en="Multi-Godown Stock Transfers" data-fa="انتقال بین گدام‌های ولایتی" data-ps="د ولایتي ګودامونو ترمنځ انتقال">Multi-Godown Stock Transfers</h4>
                        <p class="afws-trans"
                            data-en="Transfer full truckloads between Kabul central depot and Herat, Mazar, or Kandahar branches with gate dispatch slips."
                            data-fa="انتقال موترهای باربری بین گدام مرکزی کابل و شعبات هرات، مزار و قندهار با حواله خروج رسمی."
                            data-ps="له مرکزي ګودام څخه ولایتي څانګو ته د مالونو د لیږد حوالې او رسیدونه.">
                            Transfer full truckloads between Kabul central depot and Herat, Mazar, or Kandahar branches with gate dispatch slips.
                        </p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="afws-card">
                        <div class="afws-card-icon"><i class="fas fa-route"></i></div>
                        <h4 class="afws-trans" data-en="Van Sales & Route Distribution" data-fa="فروش موتری و ویزیتوری ساحوی" data-ps="د موټرو له لارې وېش او خرڅلاو">Van Sales & Route Distribution</h4>
                        <p class="afws-trans"
                            data-en="Equip salesmen with mobile apps to take retail shop orders on routes, issue on-spot Bluetooth receipts, and collect payments."
                            data-fa="ثبت سفارش ویزیتورها در بازار با مبایل، چاپ بل با پرینتر بلوتوث و تسویه نقدی روزانه رانندگان."
                            data-ps="ویزیتورانو ته په موبایل کې د فرمایش اخیستلو، بل چاپولو او د پیسو راټولولو اسانتیا.">
                            Equip salesmen with mobile apps to take retail shop orders on routes, issue on-spot Bluetooth receipts, and collect payments.
                        </p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="afws-card">
                        <div class="afws-card-icon"><i class="fas fa-coins"></i></div>
                        <h4 class="afws-trans" data-en="Sarafi Hawala & Multi-Currency" data-fa="ثبت حواله‌های صرافی و تسویه چندارزی" data-ps="د صرافۍ حسابونه او بهرني اسعار">Sarafi Hawala & Multi-Currency</h4>
                        <p class="afws-trans"
                            data-en="Seamlessly manage customer payments via Sarai Shahzada Sarafi brokers in AFN, USD, PKR, and AED with exchange gain/loss calculations."
                            data-fa="ثبت آسان حواله‌های سرای شهزاده به افغانی، دالر، کلدار و درهم با محاسبه دقیق سود و زیان تسعیر ارز."
                            data-ps="د شهزاده سرای د صرافانو حوالې په افغانیو، ډالرو، کلدارو او درهمو کې په دقیق ډول ثبت کړئ.">
                            Seamlessly manage customer payments via Sarai Shahzada Sarafi brokers in AFN, USD, PKR, and AED with exchange gain/loss calculations.
                        </p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="afws-card">
                        <div class="afws-card-icon"><i class="fas fa-chart-line"></i></div>
                        <h4 class="afws-trans" data-en="Live B2B Statement & Aging" data-fa="صورتحساب روزانه و گزارش کهنگی طلبات" data-ps="د پورونو او حسابونو ورځنی راپور">Live B2B Statement & Aging</h4>
                        <p class="afws-trans"
                            data-en="Instantly generate and share shopkeeper balance statements via WhatsApp (PDF) showing invoice breakdown and outstanding balance."
                            data-fa="ارسال صورتحساب مانده حساب مشتریان به صورت PDF از طریق واتساپ در یک ثانیه."
                            data-ps="د دوکاندارانو د حسابونو تفصیلي راپور په یو کلیک سره د واټساپ له لارې پی ډی ایف واستوئ.">
                            Instantly generate and share shopkeeper balance statements via WhatsApp (PDF) showing invoice breakdown and outstanding balance.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FINAL CTA -->
    <section class="afws-section bg-dark text-white text-center" style="background: #0c4a6e !important;">
        <div class="container">
            <h2 class="fw-bold mb-3 afws-trans" 
                data-en="Take Your Afghan Distribution Business to the Next Level" 
                data-fa="تجارت عمده‌فروشی خود را با دیجی‌فای متحول سازید"
                data-ps="خپل عمده کاروبار په ډیجیټل او خوندي ډول سمبال کړئ">
                Take Your Afghan Distribution Business to the Next Level
            </h2>
            <p class="text-light opacity-75 max-w-700 mx-auto mb-4 afws-trans"
                data-en="Stop debt losses, control multiple warehouses, and double your sales velocity with Digify Wholesale ERP."
                data-fa="از ضایع شدن طلبکاری‌ها جلوگیری کنید، گدام‌ها را کنترل نمایید و فروش عمده را دوبرابر کنید."
                data-ps="خپل پورونه خوندي کړئ، ګودامونه کنټرول کړئ او خپل خرڅلاو دوه چنده زیات کړئ.">
                Stop debt losses, control multiple warehouses, and double your sales velocity with Digify Wholesale ERP.
            </p>
            <div class="d-flex justify-content-center gap-3 flex-wrap">
                <a href="#demo-form" class="btn btn-afws-primary px-4 py-3"><i class="fas fa-calendar-check me-2"></i> <span class="afws-trans" data-en="Request Wholesale ERP Demo" data-fa="درخواست دموی عمده‌فروشی" data-ps="د عمده پلور ډیمو غوښتنه">Request Wholesale ERP Demo</span></a>
                <a href="erp-software-afghanistan.php" class="btn btn-afws-outline px-4 py-3"><i class="fas fa-arrow-left me-2"></i> <span class="afws-trans" data-en="Back to Afghanistan ERP" data-fa="صفحه اصلی افغانستان" data-ps="د افغانستان عمومي پاڼه">Back to Afghanistan ERP</span></a>
            </div>
        </div>
    </section>

</div>

<script>
function switchWsLang(lang) {
    var btnEn = document.getElementById('btnWsLangEn');
    var btnFa = document.getElementById('btnWsLangFa');
    var btnPs = document.getElementById('btnWsLangPs');
    var wrapper = document.getElementById('afwsWrapper');
    
    localStorage.setItem('digify_af_lang', lang);
    
    [btnEn, btnFa, btnPs].forEach(function(b) { if(b) b.classList.remove('active'); });
    if (lang === 'fa' && btnFa) btnFa.classList.add('active');
    else if (lang === 'ps' && btnPs) btnPs.classList.add('active');
    else if (btnEn) btnEn.classList.add('active');
    
    if (wrapper) {
        if (lang === 'fa' || lang === 'ps') wrapper.classList.add('rtl-mode');
        else wrapper.classList.remove('rtl-mode');
    }
    
    document.querySelectorAll('.afws-trans').forEach(function(el) {
        var text = el.getAttribute('data-' + lang);
        if (text) { el.innerHTML = text; }
    });
    document.querySelectorAll('.afws-trans-ph').forEach(function(el) {
        var ph = el.getAttribute('data-' + lang + '-ph');
        if (ph) { el.setAttribute('placeholder', ph); }
    });
}

document.addEventListener('DOMContentLoaded', function() {
    var savedLang = localStorage.getItem('digify_af_lang') || 'en';
    switchWsLang(savedLang);
});
</script>

<?php include(__DIR__ . '/../../footer.php'); ?>
