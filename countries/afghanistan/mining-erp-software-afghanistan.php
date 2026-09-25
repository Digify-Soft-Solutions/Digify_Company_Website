<?php 
include_once(__DIR__ . '/../../db.php');
include_once(__DIR__ . '/../../fetch_meta.php');

$pageTitle = "Mining ERP Software in Afghanistan | Minerals & Equipment ERP";
$pageDescription = "Manage mining business operations, procurement, inventory, equipment, suppliers, expenses, workforce and financial reporting with Digify's Mining ERP in Afghanistan.";
$pageKeywords = "Mining ERP Afghanistan, Mining management software Afghanistan, Mineral extraction software Afghanistan, Mining equipment management Afghanistan, Quarry software Afghanistan, Afghan mining accounting";
$pageCanonical = "https://www.digifysoft.in/mining-erp-software-afghanistan";

include(__DIR__ . '/../../top.php');
include(__DIR__ . '/../../header.php');
?>

<style>
/* Afghanistan Mining Suite Design System */
.afmn-page-wrapper {
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
.afmn-hero {
    background: linear-gradient(135deg, #0f172a 0%, #1e293b 50%, #334155 100%);
    color: #ffffff;
    padding: 70px 0 85px;
    position: relative;
    overflow: hidden;
    border-bottom: 4px solid #f59e0b;
}
.afmn-hero::before {
    content: '';
    position: absolute;
    top: -15%;
    right: -10%;
    width: 650px;
    height: 650px;
    background: radial-gradient(circle, rgba(245, 158, 11, 0.28) 0%, rgba(20, 184, 166, 0.12) 50%, rgba(0, 0, 0, 0) 75%);
    border-radius: 50%;
    pointer-events: none;
}
.afmn-hero-badge {
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
.afmn-hero h1 {
    font-size: 42px;
    font-weight: 900;
    line-height: 1.25;
    margin-bottom: 18px;
    letter-spacing: -0.5px;
}
.afmn-hero-sub {
    font-size: 18px;
    font-weight: 600;
    color: #fef08a;
    line-height: 1.5;
    margin-bottom: 14px;
}
.afmn-hero-desc {
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
.btn-afmn-primary {
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
.btn-afmn-primary:hover {
    background: linear-gradient(135deg, #b45309 0%, #92400e 100%);
    color: #ffffff;
    transform: translateY(-2px);
}
.btn-afmn-outline {
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
.btn-afmn-outline:hover {
    background: rgba(255, 255, 255, 0.18);
    color: #ffffff;
    transform: translateY(-2px);
}

/* Sections */
.afmn-section { padding: 75px 0; }
.bg-light-afmn { background-color: #f8fafc; }
.section-badge-afmn {
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
.section-title-afmn {
    font-size: 34px;
    font-weight: 900;
    color: #0f172a;
    line-height: 1.3;
    margin-bottom: 16px;
    letter-spacing: -0.5px;
}

/* Feature Cards */
.afmn-card {
    background: #ffffff;
    border: 1px solid #e2e8f0;
    border-radius: 16px;
    padding: 26px;
    transition: all 0.3s ease;
    height: 100%;
    display: flex;
    flex-direction: column;
}
.afmn-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 20px 30px -10px rgba(0, 0, 0, 0.08);
    border-color: #f59e0b;
}
.afmn-card-icon {
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
.afmn-card h4 {
    font-size: 18px;
    font-weight: 800;
    color: #0f172a;
    margin-bottom: 10px;
}
.afmn-card p {
    font-size: 14px;
    color: #64748b;
    line-height: 1.6;
    margin-bottom: 16px;
    flex-grow: 1;
}
.afmn-checklist {
    list-style: none;
    padding: 0;
    margin: 0;
}
.afmn-checklist li {
    font-size: 13.5px;
    color: #334155;
    margin-bottom: 8px;
    display: flex;
    align-items: center;
    gap: 8px;
}
.afmn-checklist li i {
    color: #d97706;
    font-size: 14px;
    flex-shrink: 0;
}

@media (max-width: 991px) {
    .afmn-hero { padding: 45px 0 55px; }
    .afmn-hero h1 { font-size: 28px; line-height: 1.3; }
    .hero-lead-card { margin-top: 25px; padding: 24px 20px; }
    .section-title-afmn { font-size: 24px; }
}
@media (max-width: 576px) {
    .afmn-hero { padding: 35px 0 45px; }
    .afmn-hero h1 { font-size: 23px; }
    .btn-afmn-primary, .btn-afmn-outline { width: 100%; justify-content: center; }
}
</style>

<div class="afmn-page-wrapper" id="afmnWrapper">

    <!-- HERO SECTION -->
    <section class="afmn-hero" id="hero">
        <div class="container position-relative" style="z-index: 2;">
            <div class="row align-items-center g-4">
                <div class="col-lg-7">
                    <!-- Language Switcher -->
                    <div class="lang-toggle-bar">
                        <button class="lang-pill active" id="btnMnLangEn" onclick="switchMnLang('en')">🇬🇧 English</button>
                        <button class="lang-pill" id="btnMnLangFa" onclick="switchMnLang('fa')">🇦🇫 دری (Dari)</button>
                        <button class="lang-pill" id="btnMnLangPs" onclick="switchMnLang('ps')">🇦🇫 پښتو (Pashto)</button>
                    </div>

                    <div class="afmn-hero-badge">
                        <span>⛏️</span>
                        <span class="afmn-trans" 
                            data-en="Mineral Extraction, Hydrocarbons & Quarry Operations" 
                            data-fa="استخراج معادن، سنگ‌های قیمتی و عملیات معدن‌کاری"
                            data-ps="د کانونو استخراج، قیمتي ډبرې او د کیندنې عملیات">
                            Mineral Extraction, Hydrocarbons & Quarry Operations
                        </span>
                    </div>

                    <h1 class="afmn-trans" 
                        data-en="Mining ERP Software in Afghanistan" 
                        data-fa="نرم‌افزار مدیریت استخراج معادن در افغانستان"
                        data-ps="په افغانستان کې د کانونو د مدیریت ERP سافټویر">
                        Mining ERP Software in Afghanistan
                    </h1>

                    <div class="afmn-hero-sub afmn-trans"
                        data-en="Manage mining business operations, procurement, inventory, equipment, suppliers, expenses, workforce and financial reporting with an integrated ERP."
                        data-fa="مدیریت تجهیزات سنگین، پرزه جات، تیل ماشینری، سوانح کارگران معدن و مصارف ساحوی با دیجی‌فای."
                        data-ps="د درنو وسایلو، پرزو، تېلو او د کان د کارګرانو لګښتونه په یو پرمختللي سافټویر کې اداره کړئ.">
                        Manage mining business operations, procurement, inventory, equipment, suppliers, expenses, workforce and financial reporting with an integrated ERP.
                    </div>

                    <p class="afmn-hero-desc afmn-trans"
                        data-en="Afghanistan possesses vast natural mineral resources including iron ore, copper, gold, lithium, coal, and precious gemstones. Digify empowers mining enterprises to maintain total control over project-level expenses, spare parts, fuel logs, and mineral dispatch batches."
                        data-fa="افغانستان دارای معادن عظیم آهن، مس، زمرد، لاجورد، سنگ مرمر و ذغال‌سنگ است. دیجی‌فای به شرکت‌های معدنی کمک می‌کند تا تدارکات، مصارف و فروشات مواد معدنی را با دقت رصد کنند."
                        data-ps="افغانستان د اوسپنې، مسو، زمرود، لاجوردو او ډبرو سکرو پراخ کانونه لري. ډیجیفای د کانونو له شرکتونو سره د لګښتونو او استخراج په کنټرول کې مرسته کوي.">
                        Afghanistan possesses vast natural mineral resources including iron ore, copper, gold, lithium, coal, and precious gemstones. Digify empowers mining enterprises to maintain total control over project-level expenses, spare parts, fuel logs, and mineral dispatch batches.
                    </p>

                    <div class="d-flex flex-wrap gap-3 mb-4">
                        <a href="#demo-form" class="btn btn-afmn-primary">
                            <i class="fas fa-calendar-check"></i>
                            <span class="afmn-trans" data-en="Request Mining ERP Demo" data-fa="درخواست دموی معادن" data-ps="د کانونو ډیمو وغواړئ">Request Mining ERP Demo</span>
                        </a>
                        <a href="erp-software-afghanistan.php" class="btn btn-afmn-outline">
                            <i class="fas fa-arrow-left"></i>
                            <span class="afmn-trans" data-en="Back to Afghanistan Main ERP" data-fa="بازگشت به صفحه اصلی افغانستان" data-ps="د افغانستان اصلي پاڼې ته ستنیدل">Back to Afghanistan Main ERP</span>
                        </a>
                    </div>
                </div>

                <!-- Right Form -->
                <div class="col-lg-5" id="demo-form">
                    <div class="hero-lead-card">
                        <div class="d-flex align-items-center justify-content-between mb-2">
                            <span class="badge bg-warning text-dark px-3 py-1 rounded-pill font-monospace afmn-trans" data-en="⛏️ MINING SUITE" data-fa="⛏️ سیستم معادن" data-ps="⛏️ د کانونو سیسټم">⛏️ MINING SUITE</span>
                            <span class="text-muted small"><i class="fas fa-clock text-warning"></i> <span class="afmn-trans" data-en="15-Min Live Demo" data-fa="دموی ۱۵ دقیقه‌ای" data-ps="۱۵ دقیقې ډیمو">15-Min Live Demo</span></span>
                        </div>
                        <h3 class="afmn-trans" data-en="Schedule Mining Demo" data-fa="ثبت نوبت دموی معادن" data-ps="د کانونو ډیمو مهالویش">Schedule Mining Demo</h3>
                        <p class="small text-muted mb-3 afmn-trans" data-en="See spare parts inventory, equipment logs, and site expense tracking live." data-fa="گدام پرزه جات، تیل ماشینری و مصارف ساحوی را زنده مشاهده کنید." data-ps="د پرزو ګودام، د تېلو مصرف او ساحوي لګښتونه په ژوندي ډول وګورئ.">See spare parts inventory, equipment logs, and site expense tracking live.</p>
                        
                        <form action="send_mail.php" method="POST" id="afghanistanMiningForm">
                            <input type="hidden" name="source" value="Afghanistan Mining ERP Page">
                            <input type="hidden" name="country" value="Afghanistan">
                            
                            <div class="mb-2">
                                <label class="form-label small fw-bold text-dark afmn-trans" data-en="Full Name" data-fa="نام و تخلص" data-ps="بشپړ نوم">Full Name</label>
                                <input type="text" name="name" class="form-control afmn-trans-ph" placeholder="e.g. Eng. Abdul Rahim" data-en-ph="e.g. Eng. Abdul Rahim" data-fa-ph="مثال: انجنیر عبدالرحیم" data-ps-ph="مثال: انجنیر عبدالرحیم" required>
                            </div>

                            <div class="mb-2">
                                <label class="form-label small fw-bold text-dark afmn-trans" data-en="Mining Company Name" data-fa="نام شرکت استخراج / معدن" data-ps="د کان کیندنې شرکت نوم">Mining Company Name</label>
                                <input type="text" name="company" class="form-control afmn-trans-ph" placeholder="e.g. Afghan Mineral Exploration Co." data-en-ph="e.g. Afghan Mineral Exploration Co." data-fa-ph="مثال: شرکت استخراج معادن افغان" data-ps-ph="مثال: د افغان منرالونو شرکت" required>
                            </div>

                            <div class="row g-2 mb-2">
                                <div class="col-6">
                                    <label class="form-label small fw-bold text-dark afmn-trans" data-en="WhatsApp / Phone" data-fa="شماره تماس / واتساپ" data-ps="د اړیکې شمېره">WhatsApp / Phone</label>
                                    <input type="tel" name="phone" class="form-control" placeholder="+93 7X XXX XXXX" required>
                                </div>
                                <div class="col-6">
                                    <label class="form-label small fw-bold text-dark afmn-trans" data-en="Mineral Type" data-fa="نوعیت ماده معدنی" data-ps="د منرال ډول">Mineral Type</label>
                                    <select name="mineral_type" class="form-select" required>
                                        <option value="Coal & Fuel" class="afmn-trans" data-en="Coal & Energy" data-fa="ذغال‌سنگ و سوخت" data-ps="د ډبرو سکاره">Coal & Energy</option>
                                        <option value="Gemstones & Lapis" class="afmn-trans" data-en="Gemstones, Emerald & Lapis" data-fa="زمرد، لاجورد و سنگ‌های قیمتی" data-ps="زمرود، لاجورد او قیمتي ډبرې">Gemstones, Emerald & Lapis</option>
                                        <option value="Marble & Granite" class="afmn-trans" data-en="Marble & Building Stones" data-fa="سنگ رخام، مرمر و گرانیت" data-ps="مرمر او ډبرې">Marble & Building Stones</option>
                                        <option value="Metallic Minerals" class="afmn-trans" data-en="Iron, Copper & Gold" data-fa="آهن، مس، طلا و سرب" data-ps="اوسپنه، مس او سره زر">Iron, Copper & Gold</option>
                                    </select>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-afmn-primary w-100 py-2 mt-2">
                                <span class="afmn-trans" data-en="Schedule Live Mining Demo" data-fa="ثبت نوبت دموی زنده" data-ps="ژوندی ډیمو پیل کړئ">Schedule Live Mining Demo</span>
                                <i class="fas fa-arrow-right ms-2"></i>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CORE MINING MODULES -->
    <section class="afmn-section bg-light-afmn" id="mining-modules">
        <div class="container">
            <div class="text-center mb-5">
                <span class="section-badge-afmn afmn-trans" data-en="Mine Site & Fleet Control" data-fa="مدیریت ساحه معدن و ماشینری" data-ps="د کان د ساحې او ماشینونو کنټرول">Mine Site & Fleet Control</span>
                <h2 class="section-title-afmn afmn-trans" 
                    data-en="Comprehensive Mining Operations Management" 
                    data-fa="سیستم یکپارچه عملیات و تدارکات معادن در افغانستان"
                    data-ps="په افغانستان کې د کانونو د عملیاتو بشپړ مدیریت">
                    Comprehensive Mining Operations Management
                </h2>
            </div>

            <div class="row g-4">
                <div class="col-md-6 col-lg-3">
                    <div class="afmn-card">
                        <div class="afmn-card-icon"><i class="fas fa-cogs"></i></div>
                        <h4 class="afmn-trans" data-en="Equipment & Spare Parts" data-fa="ماشینری و گدام پرزه جات" data-ps="ماشینونه او د پرزو ګودام">Equipment & Spare Parts</h4>
                        <p class="afmn-trans" data-en="Track excavators, dump trucks, crushers, drill rigs, maintenance schedules, and spare parts bins." data-fa="ثبت بلدوزر، لودر، کرشرها، تاریخچه ترمیمات و موجودی پرزه جات مصرفی." data-ps="د بلدوزرو، کرشرونو، ترمیماتو او د پرزو د ګودام ثبت.">Track excavators, dump trucks, crushers, drill rigs, maintenance schedules, and spare parts bins.</p>
                        <ul class="afmn-checklist">
                            <li class="afmn-trans" data-en="<i class='fas fa-check-circle'></i> Machine-wise maintenance logs" data-fa="<i class='fas fa-check-circle'></i> ثبت سوانح ترمیم هر واسطه" data-ps="<i class='fas fa-check-circle'></i> د هر موټر د ترمیم ثبت"><i class="fas fa-check-circle"></i> Machine-wise maintenance logs</li>
                            <li class="afmn-trans" data-en="<i class='fas fa-check-circle'></i> Spare parts reorder alerts" data-fa="<i class='fas fa-check-circle'></i> هشدار اتمام پرزه در گدام ساحه" data-ps="<i class='fas fa-check-circle'></i> د پرزو د کمښت خبرداری"><i class="fas fa-check-circle"></i> Spare parts reorder alerts</li>
                            <li class="afmn-trans" data-en="<i class='fas fa-check-circle'></i> Equipment running hour meters" data-fa="<i class='fas fa-check-circle'></i> محاسبه ساعت کارکرد ماشینری" data-ps="<i class='fas fa-check-circle'></i> د ماشینونو د کار ساعتونه"><i class="fas fa-check-circle"></i> Equipment running hour meters</li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3">
                    <div class="afmn-card">
                        <div class="afmn-card-icon"><i class="fas fa-gas-pump"></i></div>
                        <h4 class="afmn-trans" data-en="Fuel & Consumables" data-fa="کنترل تیل و مواد سوخت" data-ps="د تېلو او سون توکو کنټرول">Fuel & Consumables</h4>
                        <p class="afmn-trans" data-en="Log diesel intake, fuel pump dispensations per vehicle/generator, and eliminate fuel leakage on remote sites." data-fa="ثبت ورود تیل به تانکر ساحه، توزیع روزانه به جنراتور و موترها و جلوگیری از سرقت تیل." data-ps="ټانکر ته د تېلو داخلیدل او موټرو او جنراتورونو ته د تېلو ویش.">Log diesel intake, fuel pump dispensations per vehicle/generator, and eliminate fuel leakage on remote sites.</p>
                        <ul class="afmn-checklist">
                            <li class="afmn-trans" data-en="<i class='fas fa-check-circle'></i> Tank fuel level monitoring" data-fa="<i class='fas fa-check-circle'></i> ثبت موجودی لحظه‌ای تانکر تیل" data-ps="<i class='fas fa-check-circle'></i> د تېلو د ټانکر څارنه"><i class="fas fa-check-circle"></i> Tank fuel level monitoring</li>
                            <li class="afmn-trans" data-en="<i class='fas fa-check-circle'></i> Fuel consumption per hour/km" data-fa="<i class='fas fa-check-circle'></i> محاسبه مصرف تیل فی ساعت ماشین" data-ps="<i class='fas fa-check-circle'></i> په هر ساعت د تېلو مصرف"><i class="fas fa-check-circle"></i> Fuel consumption per hour/km</li>
                            <li class="afmn-trans" data-en="<i class='fas fa-check-circle'></i> Explosives & chemical logs" data-fa="<i class='fas fa-check-circle'></i> ثبت مواد انفجاری و کیمیاوی با مجوز" data-ps="<i class='fas fa-check-circle'></i> د کیمیاوي موادو ثبت"><i class="fas fa-check-circle"></i> Explosives & chemical logs</li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3">
                    <div class="afmn-card">
                        <div class="afmn-card-icon"><i class="fas fa-truck-moving"></i></div>
                        <h4 class="afmn-trans" data-en="Mineral Extraction & Dispatch" data-fa="استخراج، وزن پل و بارگیری" data-ps="استخراج، تله او بار وړل">Mineral Extraction & Dispatch</h4>
                        <p class="afmn-trans" data-en="Weighbridge integration for dumper trucks, mineral grade categorization, and customer gate passes." data-fa="ثبت وزن پل لاری‌ها در دروازه خروجی معدن، صدور پارچه وزن و فاکتور فروش." data-ps="د موټرو د تلې وزن ثبتول، د وتلو اجازه او د پلور فاکتور.">Weighbridge integration for dumper trucks, mineral grade categorization, and customer gate passes.</p>
                        <ul class="afmn-checklist">
                            <li class="afmn-trans" data-en="<i class='fas fa-check-circle'></i> Weighbridge automated weight capture" data-fa="<i class='fas fa-check-circle'></i> ثبت اتومات وزن پل (ناخالص/خالص)" data-ps="<i class='fas fa-check-circle'></i> د تلې اتومات وزن اخیستل"><i class="fas fa-check-circle"></i> Weighbridge automated weight capture</li>
                            <li class="afmn-trans" data-en="<i class='fas fa-check-circle'></i> Mineral grade & tonnage records" data-fa="<i class='fas fa-check-circle'></i> ثبت تناژ و درجه خلوص ماده معدنی" data-ps="<i class='fas fa-check-circle'></i> د منرال درجه او وزن"><i class="fas fa-check-circle"></i> Mineral grade & tonnage records</li>
                            <li class="afmn-trans" data-en="<i class='fas fa-check-circle'></i> Security gate pass dispatch slips" data-fa="<i class='fas fa-check-circle'></i> صدور پاس امنیتی خروج موتر" data-ps="<i class='fas fa-check-circle'></i> د ګیټ پاس صادرول"><i class="fas fa-check-circle"></i> Security gate pass dispatch slips</li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3">
                    <div class="afmn-card">
                        <div class="afmn-card-icon"><i class="fas fa-file-invoice-dollar"></i></div>
                        <h4 class="afmn-trans" data-en="Project Costing & Accounts" data-fa="حسابداری و مصارف پروژه" data-ps="د پروژې لګښتونه او حساب">Project Costing & Accounts</h4>
                        <p class="afmn-trans" data-en="Track labor wages, contractor equipment hire, site camp food/lodging, royalties, and net mine margin." data-fa="محاسبه دقیق معاش کارگران، کرایه موترها، مصارف کمپ و مفاد خالص استخراج." data-ps="د کارګرانو معاشونه، د ماشینونو کرایه، د کمپ لګښتونه او خالص ګټه.">Track labor wages, contractor equipment hire, site camp food/lodging, royalties, and net mine margin.</p>
                        <ul class="afmn-checklist">
                            <li class="afmn-trans" data-en="<i class='fas fa-check-circle'></i> Site worker attendance & payroll" data-fa="<i class='fas fa-check-circle'></i> حاضری و معاش کارگران ساحه" data-ps="<i class='fas fa-check-circle'></i> د ساحوي کارګرانو حاضري او معاش"><i class="fas fa-check-circle"></i> Site worker attendance & payroll</li>
                            <li class="afmn-trans" data-en="<i class='fas fa-check-circle'></i> Cost per ton of extracted mineral" data-fa="<i class='fas fa-check-circle'></i> محاسبه قیمت تمام شده فی تن سنگ" data-ps="<i class='fas fa-check-circle'></i> د هر ټن د استخراج اصلي بیه"><i class="fas fa-check-circle"></i> Cost per ton of extracted mineral</li>
                            <li class="afmn-trans" data-en="<i class='fas fa-check-circle'></i> Government revenue & royalty logs" data-fa="<i class='fas fa-check-circle'></i> ثبت سوانح مالیات و رویالتی معدن" data-ps="<i class='fas fa-check-circle'></i> د رویالټي او مالیاتو ثبت"><i class="fas fa-check-circle"></i> Government revenue & royalty logs</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FINAL CTA -->
    <section class="afmn-section bg-dark text-white text-center" style="background: #0f172a !important;">
        <div class="container">
            <h2 class="fw-bold mb-3 afmn-trans" 
                data-en="Take Control of Your Mining Operations in Afghanistan" 
                data-fa="عملیات استخراج معادن خود را با دیجی‌فای دقیق و شفاف سازید"
                data-ps="په افغانستان کې د خپلو کانونو استخراج شفاف او منظم کړئ">
                Take Control of Your Mining Operations in Afghanistan
            </h2>
            <p class="text-light opacity-75 max-w-700 mx-auto mb-4 afmn-trans"
                data-en="Eliminate fuel losses, maintain heavy machinery uptime, and track every ton of extracted minerals with Digify Mining ERP."
                data-fa="با دیجی‌فای از هدررفت تیل جلوگیری کنید، ماشینری را سرپا نگه دارید و هر تن ماده معدنی را به آسانی ردیابی نمایید."
                data-ps="د ډیجیفای سره د تېلو د ضایعاتو مخه ونیسئ، ماشینونه فعال وساتئ او خپل استخراج کنټرول کړئ.">
                Eliminate fuel losses, maintain heavy machinery uptime, and track every ton of extracted minerals with Digify Mining ERP.
            </p>
            <div class="d-flex justify-content-center gap-3 flex-wrap">
                <a href="#demo-form" class="btn btn-afmn-primary px-4 py-3"><i class="fas fa-calendar-check me-2"></i> <span class="afmn-trans" data-en="Request Mining ERP Demo" data-fa="درخواست دموی معادن" data-ps="د کانونو ډیمو ترلاسه کړئ">Request Mining ERP Demo</span></a>
                <a href="erp-software-afghanistan.php" class="btn btn-afmn-outline px-4 py-3"><i class="fas fa-arrow-left me-2"></i> <span class="afmn-trans" data-en="View Main Afghanistan ERP" data-fa="صفحه اصلی ERP افغانستان" data-ps="د افغانستان اصلي پاڼه">View Main Afghanistan ERP</span></a>
            </div>
        </div>
    </section>

</div>

<script>
function switchMnLang(lang) {
    var btnEn = document.getElementById('btnMnLangEn');
    var btnFa = document.getElementById('btnMnLangFa');
    var btnPs = document.getElementById('btnMnLangPs');
    var wrapper = document.getElementById('afmnWrapper');
    
    localStorage.setItem('digify_af_lang', lang);
    
    [btnEn, btnFa, btnPs].forEach(function(b) { if(b) b.classList.remove('active'); });
    if (lang === 'fa' && btnFa) btnFa.classList.add('active');
    else if (lang === 'ps' && btnPs) btnPs.classList.add('active');
    else if (btnEn) btnEn.classList.add('active');
    
    if (wrapper) {
        if (lang === 'fa' || lang === 'ps') wrapper.classList.add('rtl-mode');
        else wrapper.classList.remove('rtl-mode');
    }
    
    document.querySelectorAll('.afmn-trans').forEach(function(el) {
        var text = el.getAttribute('data-' + lang);
        if (text) { el.innerHTML = text; }
    });
    document.querySelectorAll('.afmn-trans-ph').forEach(function(el) {
        var ph = el.getAttribute('data-' + lang + '-ph');
        if (ph) { el.setAttribute('placeholder', ph); }
    });
}

document.addEventListener('DOMContentLoaded', function() {
    var savedLang = localStorage.getItem('digify_af_lang') || 'en';
    switchMnLang(savedLang);
});
</script>

<?php include(__DIR__ . '/../../footer.php'); ?>
