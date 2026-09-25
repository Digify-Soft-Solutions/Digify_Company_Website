<?php 
include_once(__DIR__ . '/../../db.php');
include_once(__DIR__ . '/../../fetch_meta.php');

$pageTitle = "Import & Export ERP Software in Afghanistan | Cross-Border Trade ERP";
$pageDescription = "Manage import-export operations, customs documentation, transit corridors, container manifests, multi-currency Sarafi exchange, and landed costs in Afghanistan with Digify ERP.";
$pageKeywords = "Import export ERP Afghanistan, Cross border trade software Kabul, Customs clearance ERP Afghanistan, Afghan export software, Transit trade software Hairatan Islam Qala Torkham, Multi currency trade ERP";
$pageCanonical = "https://www.digifysoft.in/import-export-erp-software-afghanistan";

include(__DIR__ . '/../../top.php');
include(__DIR__ . '/../../header.php');
?>

<style>
/* Afghanistan Import-Export Suite Design System */
.afie-page-wrapper {
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
.afie-hero {
    background: linear-gradient(135deg, #134e4a 0%, #0f766e 50%, #0d9488 100%);
    color: #ffffff;
    padding: 70px 0 85px;
    position: relative;
    overflow: hidden;
    border-bottom: 4px solid #2dd4bf;
}
.afie-hero::before {
    content: '';
    position: absolute;
    top: -15%;
    right: -10%;
    width: 650px;
    height: 650px;
    background: radial-gradient(circle, rgba(45, 212, 191, 0.28) 0%, rgba(13, 148, 136, 0.15) 50%, rgba(0, 0, 0, 0) 75%);
    border-radius: 50%;
    pointer-events: none;
}
.afie-hero-badge {
    background: rgba(45, 212, 191, 0.25);
    border: 1px solid rgba(153, 246, 228, 0.4);
    color: #99f6e4;
    font-size: 13px;
    font-weight: 700;
    padding: 7px 18px;
    border-radius: 30px;
    display: inline-flex;
    align-items: center;
    gap: 8px;
    margin-bottom: 18px;
}
.afie-hero h1 {
    font-size: 42px;
    font-weight: 900;
    line-height: 1.25;
    margin-bottom: 18px;
    letter-spacing: -0.5px;
}
.afie-hero-sub {
    font-size: 18px;
    font-weight: 600;
    color: #ccfbf1;
    line-height: 1.5;
    margin-bottom: 14px;
}
.afie-hero-desc {
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
    background: #2dd4bf;
    color: #134e4a;
    box-shadow: 0 2px 6px rgba(0,0,0,0.2);
}

/* Form */
.afie-hero-form-card {
    background: #ffffff;
    border-radius: 16px;
    padding: 28px 24px;
    box-shadow: 0 20px 45px rgba(0, 0, 0, 0.35);
    color: #1e293b;
    border: 1px solid rgba(255, 255, 255, 0.2);
}
.afie-hero-form-card h3 {
    font-size: 20px;
    font-weight: 800;
    color: #0f172a;
    margin-bottom: 6px;
}
.afie-hero-form-card p {
    font-size: 13px;
    color: #64748b;
    margin-bottom: 18px;
}

/* Section styling */
.afie-section { padding: 60px 0; }
.afie-section-title {
    font-size: 32px;
    font-weight: 800;
    color: #0f172a;
    margin-bottom: 12px;
    letter-spacing: -0.3px;
}
.afie-section-sub {
    font-size: 16px;
    color: #64748b;
    max-width: 680px;
    margin: 0 auto 40px;
}

/* Cards */
.afie-card {
    background: #ffffff;
    border: 1px solid #e2e8f0;
    border-radius: 14px;
    padding: 24px;
    height: 100%;
    transition: all 0.3s ease;
    box-shadow: 0 4px 6px -1px rgba(0,0,0,0.05);
}
.afie-card:hover {
    transform: translateY(-4px);
    box-shadow: 0 15px 30px rgba(0,0,0,0.08);
    border-color: #0d9488;
}
.afie-card-icon {
    width: 52px;
    height: 52px;
    border-radius: 12px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 24px;
    margin-bottom: 16px;
    background: rgba(13, 148, 136, 0.1);
    color: #0f766e;
}
.afie-card h4 {
    font-size: 18px;
    font-weight: 700;
    color: #0f172a;
    margin-bottom: 10px;
}
.afie-card p {
    font-size: 14px;
    color: #64748b;
    line-height: 1.6;
    margin-bottom: 0;
}

/* Buttons */
.btn-afie-primary {
    background: #0d9488;
    color: #ffffff;
    font-weight: 700;
    border-radius: 8px;
    padding: 12px 24px;
    border: none;
    transition: all 0.2s;
}
.btn-afie-primary:hover {
    background: #0f766e;
    color: #ffffff;
    box-shadow: 0 6px 16px rgba(13, 148, 136, 0.35);
}
.btn-afie-outline {
    border: 2px solid rgba(255,255,255,0.4);
    color: #ffffff;
    font-weight: 700;
    border-radius: 8px;
    padding: 12px 24px;
    background: transparent;
}
.btn-afie-outline:hover {
    background: #ffffff;
    color: #134e4a;
}

@media (max-width: 991px) {
    .afie-hero { padding: 45px 0 60px; text-align: center; }
    .afie-hero h1 { font-size: 30px; }
    .afie-hero-desc { margin: 0 auto 24px; }
    .afie-hero-form-card { margin-top: 30px; text-align: left; }
    .rtl-mode .afie-hero-form-card { text-align: right; }
}
</style>

<div class="afie-page-wrapper" id="afieWrapper">

    <!-- HERO SECTION -->
    <section class="afie-hero">
        <div class="container">
            <!-- Language Switcher Bar -->
            <div class="text-center text-lg-start mb-2">
                <div class="lang-toggle-bar">
                    <button type="button" class="lang-pill active" id="btnIeLangEn" onclick="switchIeLang('en')">🇬🇧 English</button>
                    <button type="button" class="lang-pill" id="btnIeLangFa" onclick="switchIeLang('fa')">🇦🇫 دری (Farsi)</button>
                    <button type="button" class="lang-pill" id="btnIeLangPs" onclick="switchIeLang('ps')">🇦🇫 پښتو (Pashto)</button>
                </div>
            </div>

            <div class="row align-items-center">
                <div class="col-lg-7">
                    <div class="afie-hero-badge afie-trans" 
                        data-en="🌍 International Trade & Cross-Border ERP for Afghanistan" 
                        data-fa="🌍 نرم‌افزار جامع مدیریت صادرات، واردات و ترانزیت بین‌المللی" 
                        data-ps="🌍 په افغانستان کې د صادراتو، وارداتو او ترانزیت پرمختللی ERP">
                        🌍 International Trade & Cross-Border ERP for Afghanistan
                    </div>
                    <h1 class="afie-trans"
                        data-en="Import & Export ERP Software in Afghanistan"
                        data-fa="نرم‌افزار جامع مدیریت صادرات و واردات در افغانستان"
                        data-ps="په افغانستان کې د صادراتو او وارداتو سوداګریز ERP سافټویر">
                        Import & Export ERP Software in Afghanistan
                    </h1>
                    <div class="afie-hero-sub afie-trans"
                        data-en="Customs Transit • Landed Costing • Sarafi Hawala • Cross-Border Corridors"
                        data-fa="ترانزیت گمرکی • بهای تمام‌شده کانتینر • حواله‌های صرافی • بنادر تورخم، اسلام‌قلعه و حیرتان"
                        data-ps="ګمرکي ترانزیت • د کانتینر لګښت • د صرافۍ حوالې • د حیرتان، اسلام قلعه او تورخم لارې">
                        Customs Transit • Landed Costing • Sarafi Hawala • Cross-Border Corridors
                    </div>
                    <p class="afie-hero-desc afie-trans"
                        data-en="Streamline international purchasing from China, UAE, Iran, Turkey, Pakistan, and India, calculate total landed costs including customs duties and transport tariffs, and manage export shipments of Afghan food, carpets, and mineral products."
                        data-fa="ثبت خریدهای خارجی از چین، دوبی، ایران، ترکیه و پاکستان، محاسبه دقیق بهای تمام‌شده کالا شامل محصول گمرکی و کرایه موتر، و صدور بارنامه و اسناد صادراتی محصولات افغانستان با دیجی‌فای."
                        data-ps="له چین، دوبۍ، ایران، ترکیې او پاکستان څخه د وارداتو ثبت، د ګمرک او ټرانسپورټ لګښتونو محاسبه، او بهر ته د افغاني تولیداتو صادرات په اسانۍ سره اداره کړئ.">
                        Streamline international purchasing from China, UAE, Iran, Turkey, Pakistan, and India, calculate total landed costs including customs duties and transport tariffs, and manage export shipments of Afghan food, carpets, and mineral products.
                    </p>
                    <div class="d-flex gap-3 flex-wrap justify-content-center justify-content-lg-start">
                        <a href="#demo-form" class="btn btn-afie-primary"><i class="fas fa-ship me-2"></i> <span class="afie-trans" data-en="Get Trade ERP Demo" data-fa="درخواست دموی صادرات و واردات" data-ps="د سوداګرۍ ډیمو ترلاسه کړئ">Get Trade ERP Demo</span></a>
                        <a href="tel:+919876543210" class="btn btn-afie-outline"><i class="fas fa-headset me-2"></i> <span class="afie-trans" data-en="Talk to Trade Consultant" data-fa="تماس با مشاور بازرگانی" data-ps="د سوداګریز مشاور سره خبرې">Talk to Trade Consultant</span></a>
                    </div>
                </div>

                <!-- Form Card -->
                <div class="col-lg-5" id="demo-form">
                    <div class="afie-hero-form-card">
                        <h3 class="afie-trans" data-en="Request Trade ERP Demo" data-fa="درخواست مشاوره بازرگانی خارجی" data-ps="د سوداګرۍ سیسټم غوښتنه">Request Trade ERP Demo</h3>
                        <p class="afie-trans" data-en="Specialized for trading companies, customs brokers & freight forwarders." data-fa="ویژه تجار ملی، ترخیص‌کاران گمرک و شرکت‌های باربری بین‌المللی." data-ps="د سوداګرو، ګمرکي اجنټانو او ترانسپورتي شرکتونو لپاره.">Specialized for trading companies, customs brokers & freight forwarders.</p>
                        
                        <form action="send_lead.php" method="POST">
                            <div class="mb-3">
                                <label class="form-label small fw-bold afie-trans" data-en="Full Name" data-fa="نام و تخلص" data-ps="بشپړ نوم">Full Name</label>
                                <input type="text" name="name" class="form-control afie-trans-ph" placeholder="e.g. Haji Bashir Ahmad" data-en-ph="e.g. Haji Bashir Ahmad" data-fa-ph="مثال: حاجی بشیر احمد" data-ps-ph="مثال: حاجي بشیر احمد" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label small fw-bold afie-trans" data-en="Trading Company Name" data-fa="نام شرکت تجارتی" data-ps="د سوداګریز شرکت نوم">Trading Company Name</label>
                                <input type="text" name="company" class="form-control afie-trans-ph" placeholder="e.g. Silk Road Global Trade" data-en-ph="e.g. Silk Road Global Trade" data-fa-ph="مثال: شرکت تجارتی راه ابریشم" data-ps-ph="مثال: د وریښمو لارې سوداګریز شرکت" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label small fw-bold afie-trans" data-en="WhatsApp / Phone" data-fa="شماره واتساپ" data-ps="د واټساپ شمېره">WhatsApp / Phone</label>
                                <input type="tel" name="phone" class="form-control" placeholder="+93 7X XXX XXXX" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label small fw-bold afie-trans" data-en="Trade Operations" data-fa="حوزه بازرگانی" data-ps="د سوداګرۍ ډول">Trade Operations</label>
                                <select name="business_type" class="form-select">
                                    <option value="General Import (China, Dubai, Iran)">General Import (China, Dubai, Iran)</option>
                                    <option value="Agricultural & Food Export">Agricultural & Food Export</option>
                                    <option value="Mineral & Resource Export">Mineral & Resource Export</option>
                                    <option value="Customs Clearance & Transit Broker">Customs Clearance & Transit Broker</option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-afie-primary w-100 py-2 fw-bold afie-trans"
                                data-en="Request Free Demonstration"
                                data-fa="ارسال درخواست و مشاوره"
                                data-ps="وړیا ډیمو ترلاسه کړئ">
                                Request Free Demonstration
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CORE MODULES -->
    <section class="afie-section">
        <div class="container">
            <div class="text-center">
                <h2 class="afie-section-title afie-trans"
                    data-en="Cross-Border Trade Features Built for Afghan Corridors"
                    data-fa="امکانات تخصصی بازرگانی در بنادر و مرزهای افغانستان"
                    data-ps="د افغانستان د پولو او بندرونو لپاره ځانګړي امکانات">
                    Cross-Border Trade Features Built for Afghan Corridors
                </h2>
                <p class="afie-section-sub afie-trans"
                    data-en="Track shipments crossing Hairatan, Islam Qala, Torkham, Spin Boldak, Zaranj, and Torghundi ports."
                    data-fa="ردیابی محموله‌ها در بنادر حیرتان، اسلام‌قلعه، تورخم، اسپین بولدک، زرنج و تورغندی."
                    data-ps="په حیرتان، اسلام قلعه، تورخم، سپین بولدک او نورو بندرونو کې د خپلو مالونو تګ راتګ وڅارئ.">
                    Track shipments crossing Hairatan, Islam Qala, Torkham, Spin Boldak, Zaranj, and Torghundi ports.
                </p>
            </div>

            <div class="row g-4">
                <div class="col-md-6 col-lg-4">
                    <div class="afie-card">
                        <div class="afie-card-icon"><i class="fas fa-calculator"></i></div>
                        <h4 class="afie-trans" data-en="Automated Landed Costing" data-fa="محاسبه دقیق بهای تمام‌شده کالا در گدام" data-ps="ګودام ته د رسیدو ټول لګښت">Automated Landed Costing</h4>
                        <p class="afie-trans"
                            data-en="Distribute container freight, customs duties, port charges, border clearance, and truck freight proportionally to product unit cost."
                            data-fa="تسهیم دقیق کرایه کانتینر، تعرفه گمرکی، هزینه ترخیص و باربری روی قیمت تمام‌شده هر قلم جنس."
                            data-ps="د کانتینر کرایه، ګمرکي محصول او د موټر لګښت په دقیق ډول د هر جنس پر قیمت ووېشئ.">
                            Distribute container freight, customs duties, port charges, border clearance, and truck freight proportionally to product unit cost.
                        </p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="afie-card">
                        <div class="afie-card-icon"><i class="fas fa-file-contract"></i></div>
                        <h4 class="afie-trans" data-en="Export Proformas & Packing Lists" data-fa="صدور پروفرما و پکینگ لیست صادراتی" data-ps="صادراتي پروفرما او پیکنګ لیسټ">Export Proformas & Packing Lists</h4>
                        <p class="afie-trans"
                            data-en="Generate international trade documents: Commercial Invoices, Packing Lists, Certificates of Origin, and container weight sheets."
                            data-fa="صدور اسناد بین‌المللی: فاکتور تجاری (Commercial Invoice)، لیست بارگیری، گواهی مبدأ و مشخصات کانتینر."
                            data-ps="نړیوال سوداګریز فاکتورونه، پیکنګ لیسټونه او د توکو د وزن پاڼې په اسانۍ سره جوړې کړئ.">
                            Generate international trade documents: Commercial Invoices, Packing Lists, Certificates of Origin, and container weight sheets.
                        </p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="afie-card">
                        <div class="afie-card-icon"><i class="fas fa-money-check-dollar"></i></div>
                        <h4 class="afie-trans" data-en="Multi-Currency & Sarafi Clearing" data-fa="تسویه ارزی و اسناد حواله صرافی" data-ps="څو اسعار او د صرافانو تصفیه">Multi-Currency & Sarafi Clearing</h4>
                        <p class="afie-trans"
                            data-en="Maintain ledger balances in USD, CNY, AED, EUR, PKR, INR, and AFN with real-time conversion rates and foreign supplier advances."
                            data-fa="دفتر کل به دالر، یوان چین، درهم، یورو، کلدار و افغانی همراه با محاسبه سود و زیان نوسانات ارزی."
                            data-ps="په ډالرو، یوان، درهمو، یورو او افغانیو کې حسابونه او بهرنیو عرضه کونکو ته د مخکینیو تادیاتو ثبت.">
                            Maintain ledger balances in USD, CNY, AED, EUR, PKR, INR, and AFN with real-time conversion rates and foreign supplier advances.
                        </p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="afie-card">
                        <div class="afie-card-icon"><i class="fas fa-truck-fast"></i></div>
                        <h4 class="afie-trans" data-en="Container & Transit Tracking" data-fa="ردیابی موترهای ترانزیتی و کانتینرها" data-ps="د کانتینرونو او موټرو تعقیب">Container & Transit Tracking</h4>
                        <p class="afie-trans"
                            data-en="Monitor container numbers, driver phone contacts, border checkpoint status, and estimated arrival at Kabul or provincial godowns."
                            data-fa="ثبت شماره کانتینر، نام درایور، وضعیت در گمرک مرزی و تاریخ تخمینی تخلیه در گدام مقصد."
                            data-ps="د کانتینر شمېره، د ډریور اړیکه، په پوله د ګمرک حالت او ګودام ته د رارسیدو وخت وڅارئ.">
                            Monitor container numbers, driver phone contacts, border checkpoint status, and estimated arrival at Kabul or provincial godowns.
                        </p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="afie-card">
                        <div class="afie-card-icon"><i class="fas fa-file-invoice"></i></div>
                        <h4 class="afie-trans" data-en="Customs Tariff & Duty Records" data-fa="ثبت سوابق تعرفه و اسناد گمرکی" data-ps="د ګمرکي تعرفو او اسنادو ثبت">Customs Tariff & Duty Records</h4>
                        <p class="afie-trans"
                            data-en="Maintain digital archives of customs clearance documents, HS codes, tariff payment receipts, and inspection certificates."
                            data-fa="آرشیو دیجیتال برگه‌های اظهارنامه گمرک، کدهای HS، رسیدهای پرداخت تعرفه و تاییدیه‌های بازرسی."
                            data-ps="د ګمرکي اظهارنامو، ایچ ایس کوډونو او د محصول د تادیې د رسیدونو ډیجیټل خوندي کول.">
                            Maintain digital archives of customs clearance documents, HS codes, tariff payment receipts, and inspection certificates.
                        </p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="afie-card">
                        <div class="afie-card-icon"><i class="fas fa-boxes-stacked"></i></div>
                        <h4 class="afie-trans" data-en="Cross-Border Batch & Lot Traceability" data-fa="ردیابی لات کالا از بندر تا فروش" data-ps="له بندر څخه تر پلوره د بار څارنه">Cross-Border Batch & Lot Traceability</h4>
                        <p class="afie-trans"
                            data-en="Track product batches from foreign port of loading down to regional wholesaler delivery with full shipment history."
                            data-fa="ردیابی محموله‌ها از مبدأ بارگیری خارجی تا زمان تحویل به دکانداران ولایات با تاریخچه کامل."
                            data-ps="له بهرني بارګیرۍ څخه تر ولایتي پیرودونکي پورې د ټولو بارونو بشپړ تاریخچه وساتئ.">
                            Track product batches from foreign port of loading down to regional wholesaler delivery with full shipment history.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FINAL CTA -->
    <section class="afie-section bg-dark text-white text-center" style="background: #134e4a !important;">
        <div class="container">
            <h2 class="fw-bold mb-3 afie-trans" 
                data-en="Manage Global Trade Seamlessly with Digify ERP" 
                data-fa="تجارت بین‌المللی و مرزی خود را با دیجی‌فای دقیق و شفاف سازید"
                data-ps="خپله نړیواله او سرحدي سوداګري د ډیجیفای له لارې اسانه او منظمه کړئ">
                Manage Global Trade Seamlessly with Digify ERP
            </h2>
            <p class="text-light opacity-75 max-w-700 mx-auto mb-4 afie-trans"
                data-en="Gain complete financial control over foreign suppliers, border transit corridors, and export shipments."
                data-fa="دید کامل بر حسابات تأمین‌کنندگان خارجی، کرایه موترهای ترانزیتی و اسناد صادراتی محصولات کشور."
                data-ps="د بهرنیو شرکتونو، ترانزیتي لګښتونو او صادراتي بارونو بشپړ مالي کنټرول ترلاسه کړئ.">
                Gain complete financial control over foreign suppliers, border transit corridors, and export shipments.
            </p>
            <div class="d-flex justify-content-center gap-3 flex-wrap">
                <a href="#demo-form" class="btn btn-afie-primary px-4 py-3"><i class="fas fa-calendar-check me-2"></i> <span class="afie-trans" data-en="Request Trade ERP Demo" data-fa="درخواست دموی بازرگانی" data-ps="د سوداګرۍ ډیمو غوښتنه">Request Trade ERP Demo</span></a>
                <a href="erp-software-afghanistan.php" class="btn btn-afie-outline px-4 py-3"><i class="fas fa-arrow-left me-2"></i> <span class="afie-trans" data-en="Back to Afghanistan ERP" data-fa="صفحه اصلی افغانستان" data-ps="د افغانستان عمومي پاڼه">Back to Afghanistan ERP</span></a>
            </div>
        </div>
    </section>

</div>

<script>
function switchIeLang(lang) {
    var btnEn = document.getElementById('btnIeLangEn');
    var btnFa = document.getElementById('btnIeLangFa');
    var btnPs = document.getElementById('btnIeLangPs');
    var wrapper = document.getElementById('afieWrapper');
    
    localStorage.setItem('digify_af_lang', lang);
    
    [btnEn, btnFa, btnPs].forEach(function(b) { if(b) b.classList.remove('active'); });
    if (lang === 'fa' && btnFa) btnFa.classList.add('active');
    else if (lang === 'ps' && btnPs) btnPs.classList.add('active');
    else if (btnEn) btnEn.classList.add('active');
    
    if (wrapper) {
        if (lang === 'fa' || lang === 'ps') wrapper.classList.add('rtl-mode');
        else wrapper.classList.remove('rtl-mode');
    }
    
    document.querySelectorAll('.afie-trans').forEach(function(el) {
        var text = el.getAttribute('data-' + lang);
        if (text) { el.innerHTML = text; }
    });
    document.querySelectorAll('.afie-trans-ph').forEach(function(el) {
        var ph = el.getAttribute('data-' + lang + '-ph');
        if (ph) { el.setAttribute('placeholder', ph); }
    });
}

document.addEventListener('DOMContentLoaded', function() {
    var savedLang = localStorage.getItem('digify_af_lang') || 'en';
    switchIeLang(savedLang);
});
</script>

<?php include(__DIR__ . '/../../footer.php'); ?>
