<?php 
include_once(__DIR__ . '/../../db.php');
include_once(__DIR__ . '/../../fetch_meta.php');

$pageTitle = "Garment & Textile ERP Software in Afghanistan | Apparel Management ERP";
$pageDescription = "Manage garment factories, fabric rolls, 3D style/size/color SKU matrices, stitching lines, and wholesale clothing distribution in Afghanistan with Digify ERP.";
$pageKeywords = "Garment ERP Afghanistan, Textile software Kabul, Clothing factory software Afghanistan, Apparel ERP Afghanistan, Afghan fashion ERP, Fabric inventory software";
$pageCanonical = "https://www.digifysoft.in/garment-erp-software-afghanistan";

include(__DIR__ . '/../../top.php');
include(__DIR__ . '/../../header.php');
?>

<style>
/* Afghanistan Garment Suite Design System */
.afgm-page-wrapper {
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
.afgm-hero {
    background: linear-gradient(135deg, #064e3b 0%, #065f46 50%, #047857 100%);
    color: #ffffff;
    padding: 70px 0 85px;
    position: relative;
    overflow: hidden;
    border-bottom: 4px solid #10b981;
}
.afgm-hero::before {
    content: '';
    position: absolute;
    top: -15%;
    right: -10%;
    width: 650px;
    height: 650px;
    background: radial-gradient(circle, rgba(16, 185, 129, 0.28) 0%, rgba(5, 150, 105, 0.15) 50%, rgba(0, 0, 0, 0) 75%);
    border-radius: 50%;
    pointer-events: none;
}
.afgm-hero-badge {
    background: rgba(16, 185, 129, 0.25);
    border: 1px solid rgba(167, 243, 208, 0.4);
    color: #a7f3d0;
    font-size: 13px;
    font-weight: 700;
    padding: 7px 18px;
    border-radius: 30px;
    display: inline-flex;
    align-items: center;
    gap: 8px;
    margin-bottom: 18px;
}
.afgm-hero h1 {
    font-size: 42px;
    font-weight: 900;
    line-height: 1.25;
    margin-bottom: 18px;
    letter-spacing: -0.5px;
}
.afgm-hero-sub {
    font-size: 18px;
    font-weight: 600;
    color: #d1fae5;
    line-height: 1.5;
    margin-bottom: 14px;
}
.afgm-hero-desc {
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
    background: #10b981;
    color: #ffffff;
    box-shadow: 0 2px 6px rgba(0,0,0,0.2);
}

/* Form */
.afgm-hero-form-card {
    background: #ffffff;
    border-radius: 16px;
    padding: 28px 24px;
    box-shadow: 0 20px 45px rgba(0, 0, 0, 0.35);
    color: #1e293b;
    border: 1px solid rgba(255, 255, 255, 0.2);
}
.afgm-hero-form-card h3 {
    font-size: 20px;
    font-weight: 800;
    color: #0f172a;
    margin-bottom: 6px;
}
.afgm-hero-form-card p {
    font-size: 13px;
    color: #64748b;
    margin-bottom: 18px;
}

/* Section styling */
.afgm-section { padding: 60px 0; }
.afgm-section-title {
    font-size: 32px;
    font-weight: 800;
    color: #0f172a;
    margin-bottom: 12px;
    letter-spacing: -0.3px;
}
.afgm-section-sub {
    font-size: 16px;
    color: #64748b;
    max-width: 680px;
    margin: 0 auto 40px;
}

/* Cards */
.afgm-card {
    background: #ffffff;
    border: 1px solid #e2e8f0;
    border-radius: 14px;
    padding: 24px;
    height: 100%;
    transition: all 0.3s ease;
    box-shadow: 0 4px 6px -1px rgba(0,0,0,0.05);
}
.afgm-card:hover {
    transform: translateY(-4px);
    box-shadow: 0 15px 30px rgba(0,0,0,0.08);
    border-color: #10b981;
}
.afgm-card-icon {
    width: 52px;
    height: 52px;
    border-radius: 12px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 24px;
    margin-bottom: 16px;
    background: rgba(16, 185, 129, 0.1);
    color: #059669;
}
.afgm-card h4 {
    font-size: 18px;
    font-weight: 700;
    color: #0f172a;
    margin-bottom: 10px;
}
.afgm-card p {
    font-size: 14px;
    color: #64748b;
    line-height: 1.6;
    margin-bottom: 0;
}

/* Buttons */
.btn-afgm-primary {
    background: #059669;
    color: #ffffff;
    font-weight: 700;
    border-radius: 8px;
    padding: 12px 24px;
    border: none;
    transition: all 0.2s;
}
.btn-afgm-primary:hover {
    background: #047857;
    color: #ffffff;
    box-shadow: 0 6px 16px rgba(5, 150, 105, 0.35);
}
.btn-afgm-outline {
    border: 2px solid rgba(255,255,255,0.4);
    color: #ffffff;
    font-weight: 700;
    border-radius: 8px;
    padding: 12px 24px;
    background: transparent;
}
.btn-afgm-outline:hover {
    background: #ffffff;
    color: #064e3b;
}

@media (max-width: 991px) {
    .afgm-hero { padding: 45px 0 60px; text-align: center; }
    .afgm-hero h1 { font-size: 30px; }
    .afgm-hero-desc { margin: 0 auto 24px; }
    .afgm-hero-form-card { margin-top: 30px; text-align: left; }
    .rtl-mode .afgm-hero-form-card { text-align: right; }
}
</style>

<div class="afgm-page-wrapper" id="afgmWrapper">

    <!-- HERO SECTION -->
    <section class="afgm-hero">
        <div class="container">
            <!-- Language Switcher Bar -->
            <div class="text-center text-lg-start mb-2">
                <div class="lang-toggle-bar">
                    <button type="button" class="lang-pill active" id="btnGmLangEn" onclick="switchGmLang('en')">🇬🇧 English</button>
                    <button type="button" class="lang-pill" id="btnGmLangFa" onclick="switchGmLang('fa')">🇦🇫 دری (Farsi)</button>
                    <button type="button" class="lang-pill" id="btnGmLangPs" onclick="switchGmLang('ps')">🇦🇫 پښتو (Pashto)</button>
                </div>
            </div>

            <div class="row align-items-center">
                <div class="col-lg-7">
                    <div class="afgm-hero-badge afgm-trans" 
                        data-en="🧵 Specialized Garment & Textile ERP in Afghanistan" 
                        data-fa="🧵 نرم‌افزار تخصصی صنعت خیاطی، پوشاک و نساجی افغانستان" 
                        data-ps="🧵 په افغانستان کې د کالیو ګنډلو او نساجۍ ځانګړی ERP">
                        🧵 Specialized Garment & Textile ERP in Afghanistan
                    </div>
                    <h1 class="afgm-trans"
                        data-en="Garment & Textile ERP Software in Afghanistan"
                        data-fa="نرم‌افزار جامع مدیریت فابریکات البسه و پوشاک در افغانستان"
                        data-ps="په افغانستان کې د جامو او ټوکرانو تولید لپاره ERP سافټویر">
                        Garment & Textile ERP Software in Afghanistan
                    </h1>
                    <div class="afgm-hero-sub afgm-trans"
                        data-en="Style Matrix • Fabric Rolls (Thaan) • Stitching Lines • Wholesale Dispatch"
                        data-fa="ماتریس سایز و رنگ • گدام طاقه‌های تکه • مدیریت خطوط دوخت • توزیع عمده در مندوی"
                        data-ps="د سایز او رنګ مټریکس • د ټوکرانو طاقې • د خیاطۍ لیکې • عمده وېش">
                        Style Matrix • Fabric Rolls (Thaan) • Stitching Lines • Wholesale Dispatch
                    </div>
                    <p class="afgm-hero-desc afgm-trans"
                        data-en="Manage fashion brands, tailoring factories, uniform producers, fabric rolls, button/zipper accessories, piece-rate worker wages, and wholesale dispatches across Kabul, Herat, and regional markets."
                        data-fa="مدیریت شرکت‌های تولید لباس، کارگاه‌های خیاطی، یونیفرم، موجودی تکه و پارچه، محاسبه دستمزد دانه‌ای خیاطان و فروش به دکانداران سراسر کشور با دیجی‌فای."
                        data-ps="د جامو تولید، یونیفورم جوړول، د ټوکرانو ګودام، د خیاطانو د دانې په حساب معاشونه او په مارکیټونو کې عمده پلور په یو سافټویر کې سمبال کړئ.">
                        Manage fashion brands, tailoring factories, uniform producers, fabric rolls, button/zipper accessories, piece-rate worker wages, and wholesale dispatches across Kabul, Herat, and regional markets.
                    </p>
                    <div class="d-flex gap-3 flex-wrap justify-content-center justify-content-lg-start">
                        <a href="#demo-form" class="btn btn-afgm-primary"><i class="fas fa-tshirt me-2"></i> <span class="afgm-trans" data-en="Get Garment ERP Demo" data-fa="درخواست دموی پوشاک" data-ps="د جامو سافټویر ډیمو">Get Garment ERP Demo</span></a>
                        <a href="tel:+919876543210" class="btn btn-afgm-outline"><i class="fas fa-headset me-2"></i> <span class="afgm-trans" data-en="Talk to Textile Expert" data-fa="تماس با کارشناس نساجی" data-ps="د نساجۍ متخصص سره خبرې">Talk to Textile Expert</span></a>
                    </div>
                </div>

                <!-- Form Card -->
                <div class="col-lg-5" id="demo-form">
                    <div class="afgm-hero-form-card">
                        <h3 class="afgm-trans" data-en="Request Garment ERP Consultation" data-fa="درخواست مشاوره کارگاه پوشاک" data-ps="د کالیو د فابریکې مشوره">Request Garment ERP Consultation</h3>
                        <p class="afgm-trans" data-en="Built for apparel makers, uniform workshops & fabric traders." data-fa="ویژه تولیدکنندگان لباس، کارگاه‌های دوخت و تاجران تکه." data-ps="د جامو ګنډونکو او ټوکر پلورونکو لپاره.">Built for apparel makers, uniform workshops & fabric traders.</p>
                        
                        <form action="send_lead.php" method="POST">
                            <div class="mb-3">
                                <label class="form-label small fw-bold afgm-trans" data-en="Full Name" data-fa="نام و تخلص" data-ps="بشپړ نوم">Full Name</label>
                                <input type="text" name="name" class="form-control afgm-trans-ph" placeholder="e.g. Massoud Tailoring" data-en-ph="e.g. Massoud Tailoring" data-fa-ph="مثال: کارگاه خیاطی مسعود" data-ps-ph="مثال: د مسعود خیاطي شرکت" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label small fw-bold afgm-trans" data-en="Garment Business Name" data-fa="نام برند / فابریکه پوشاک" data-ps="د شرکت یا برانډ نوم">Garment Business Name</label>
                                <input type="text" name="company" class="form-control afgm-trans-ph" placeholder="e.g. Kabul Elegance Apparel" data-en-ph="e.g. Kabul Elegance Apparel" data-fa-ph="مثال: پوشاک شیک کابل" data-ps-ph="مثال: د کابل ښکلا جامې" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label small fw-bold afgm-trans" data-en="WhatsApp / Phone" data-fa="شماره واتساپ" data-ps="د واټساپ شمېره">WhatsApp / Phone</label>
                                <input type="tel" name="phone" class="form-control" placeholder="+93 7X XXX XXXX" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label small fw-bold afgm-trans" data-en="Business Category" data-fa="نوعیت فعالیت" data-ps="د کار ډول">Business Category</label>
                                <select name="business_type" class="form-select">
                                    <option value="Men & Women Fashion">Men & Women Fashion</option>
                                    <option value="Traditional Afghan Attire (Perahan Tunban)">Traditional Afghan Attire (Perahan Tunban)</option>
                                    <option value="Uniforms & Workwear">Uniforms & Workwear</option>
                                    <option value="Fabric Roll Import & Wholesale">Fabric Roll Import & Wholesale</option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-afgm-primary w-100 py-2 fw-bold afgm-trans"
                                data-en="Request Free Demonstration"
                                data-fa="ارسال و دریافت مشاوره"
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
    <section class="afgm-section">
        <div class="container">
            <div class="text-center">
                <h2 class="afgm-section-title afgm-trans"
                    data-en="Dedicated Garment Production & Retail Features"
                    data-fa="امکانات تخصصی مدیریت خط دوخت و پوشاک"
                    data-ps="د جامو ګنډلو او خرڅلاو ځانګړي امکانات">
                    Dedicated Garment Production & Retail Features
                </h2>
                <p class="afgm-section-sub afgm-trans"
                    data-en="Streamline style sampling, cutting optimization, piece-rate sewing wages, and wholesale cartons."
                    data-fa="از نمونه‌گیری مدل و برش دقیق الگو تا دستمزد خیاطان و بسته‌بندی کارتن‌های عمده."
                    data-ps="د نمونو اخیستلو څخه تر ګنډلو، معاشونو او د کارتنونو تر عمده وېش پورې.">
                    Streamline style sampling, cutting optimization, piece-rate sewing wages, and wholesale cartons.
                </p>
            </div>

            <div class="row g-4">
                <div class="col-md-6 col-lg-4">
                    <div class="afgm-card">
                        <div class="afgm-card-icon"><i class="fas fa-th"></i></div>
                        <h4 class="afgm-trans" data-en="Multi-Dimension Style Matrix" data-fa="ماتریس چندبعدی مدل، سایز و رنگ" data-ps="د سټایل، سایز او رنګ مټریکس">Multi-Dimension Style Matrix</h4>
                        <p class="afgm-trans"
                            data-en="Auto-generate barcodes for every SKU combination: Style x Fabric x Color x Size (S, M, L, XL, XXL) in seconds."
                            data-fa="ایجاد خودکار بارکد برای تمام ترکیب‌های سایز و رنگ بدون نیاز به ثبت دستی دانه به دانه."
                            data-ps="د هر سټایل، رنګ او سایز لپاره په اوتومات ډول ځانګړي بارکوډونه جوړ کړئ.">
                            Auto-generate barcodes for every SKU combination: Style x Fabric x Color x Size (S, M, L, XL, XXL) in seconds.
                        </p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="afgm-card">
                        <div class="afgm-card-icon"><i class="fas fa-scroll"></i></div>
                        <h4 class="afgm-trans" data-en="Fabric Roll (Thaan) & Meters" data-fa="ردیابی طاقه‌های پارچه بر اساس متر" data-ps="د ټوکرانو طاقې او متره">Fabric Roll (Thaan) & Meters</h4>
                        <p class="afgm-trans"
                            data-en="Track individual fabric rolls with meterage, shrinkage allowance, shade lot number, and cutting wastage."
                            data-fa="ثبت طاقه‌های تکه با متراژ دقیق، شماره لات رنگ، میزان آبرفت و کنترل دقیق کسر پارچه."
                            data-ps="د ټوکر هره طاقه په متر، د رنګ شمېره او د پرې کولو ضایعات په جلا ډول وساتئ.">
                            Track individual fabric rolls with meterage, shrinkage allowance, shade lot number, and cutting wastage.
                        </p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="afgm-card">
                        <div class="afgm-card-icon"><i class="fas fa-user-clock"></i></div>
                        <h4 class="afgm-trans" data-en="Piece-Rate Tailor Wages" data-fa="محاسبه دستمزد دانه‌ای خیاطان" data-ps="د خیاطانو د دانې په سر مزدوري">Piece-Rate Tailor Wages</h4>
                        <p class="afgm-trans"
                            data-en="Calculate accurate piecewise payouts for master cutters, collar makers, stitchers, button fixers, and pressers."
                            data-fa="محاسبه اتوماتیک معاش خیاط بر اساس تعداد یقه، دکمه، دوخت و اتوکاری انجام‌شده."
                            data-ps="د هر کالي، ګریوان، تڼیو او اوتو کولو د شمېر له مخې د خیاطانو دقیق حساب وکړئ.">
                            Calculate accurate piecewise payouts for master cutters, collar makers, stitchers, button fixers, and pressers.
                        </p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="afgm-card">
                        <div class="afgm-card-icon"><i class="fas fa-boxes-packing"></i></div>
                        <h4 class="afgm-trans" data-en="Trims & Accessories Inventory" data-fa="انبار دکمه، زیپ، نخ و مارک" data-ps="د تڼیو، ځنځیرونو او تارونو ګودام">Trims & Accessories Inventory</h4>
                        <p class="afgm-trans"
                            data-en="Keep exact counts of threads, branded woven labels, zippers, elastic bands, and polybag packaging."
                            data-fa="موجودی دقیق انواع تار، زیپ، دکمه، مارک‌های دوخته‌شده و خریطه‌های بسته‌بندی."
                            data-ps="د تارونو، مارکونو، تڼیو او بسته بندۍ د پلاستیکونو دقیق حساب.">
                            Keep exact counts of threads, branded woven labels, zippers, elastic bands, and polybag packaging.
                        </p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="afgm-card">
                        <div class="afgm-card-icon"><i class="fas fa-dolly"></i></div>
                        <h4 class="afgm-trans" data-en="B2B Wholesale Carton Packing" data-fa="فروش کارتنی و عمده به ولایات" data-ps="ولایتونو ته کارتن کارتن عمده خرڅلاو">B2B Wholesale Carton Packing</h4>
                        <p class="afgm-trans"
                            data-en="Pack assorted size/color ratios into master cartons, print outer carton labels, and issue transport manifests."
                            data-fa="بسته‌بندی کارتنی با تناسب سایزها، چاپ لیبل کارتن مادر و صدور بارنامه موتر برای ولایات."
                            data-ps="په کارتنونو کې د مختلفو سایزونو برابرول، د کارتن لېبل او بارنامه جوړول.">
                            Pack assorted size/color ratios into master cartons, print outer carton labels, and issue transport manifests.
                        </p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="afgm-card">
                        <div class="afgm-card-icon"><i class="fas fa-cash-register"></i></div>
                        <h4 class="afgm-trans" data-en="Boutique & Retail POS" data-fa="صندوق فروشگاهی و تخفیفات پوشاک" data-ps="د جامو د دوکان POS او تخفیفونه">Boutique & Retail POS</h4>
                        <p class="afgm-trans"
                            data-en="High-speed barcode scanner checkout, season sale promotions, exchange/return management, and SMS receipts."
                            data-fa="فروش بارکدی سریع در فروشگاه، مدیریت تخفیفات فصلی، تعویض لباس و رسید پیامکی."
                            data-ps="د بارکوډ له لارې ګړندی خرڅلاو، د جامو بدلول او د مشتریانو د تخفیفونو اداره.">
                            High-speed barcode scanner checkout, season sale promotions, exchange/return management, and SMS receipts.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FINAL CTA -->
    <section class="afgm-section bg-dark text-white text-center" style="background: #064e3b !important;">
        <div class="container">
            <h2 class="fw-bold mb-3 afgm-trans" 
                data-en="Power Your Afghan Apparel Business with Digify" 
                data-fa="کارگاه و تجارت پوشاک خود را با دیجی‌فای هوشمند سازید"
                data-ps="خپل د کالیو کار او فابریکه د ډیجیفای سره پرمختللې کړئ">
                Power Your Afghan Apparel Business with Digify
            </h2>
            <p class="text-light opacity-75 max-w-700 mx-auto mb-4 afgm-trans"
                data-en="Save fabric waste, pay tailors accurately, and distribute thousands of garments with flawless precision."
                data-fa="از ضایعات تکه جلوگیری کنید، معاش خیاطان را شفاف سازید و هزاران دست لباس را با دقت بالا به بازار برسانید."
                data-ps="د ټوکرانو ضایعات صفر کړئ، د خیاطانو مزدوري پاکه وساتئ او زرګونه کالي په اسانۍ وپلورئ.">
                Save fabric waste, pay tailors accurately, and distribute thousands of garments with flawless precision.
            </p>
            <div class="d-flex justify-content-center gap-3 flex-wrap">
                <a href="#demo-form" class="btn btn-afgm-primary px-4 py-3"><i class="fas fa-calendar-check me-2"></i> <span class="afgm-trans" data-en="Request Garment ERP Demo" data-fa="درخواست دمو پوشاک" data-ps="د جامو سافټویر غوښتنه">Request Garment ERP Demo</span></a>
                <a href="erp-software-afghanistan.php" class="btn btn-afgm-outline px-4 py-3"><i class="fas fa-arrow-left me-2"></i> <span class="afgm-trans" data-en="Back to Afghanistan ERP" data-fa="صفحه اصلی افغانستان" data-ps="د افغانستان عمومي پاڼه">Back to Afghanistan ERP</span></a>
            </div>
        </div>
    </section>

</div>

<script>
function switchGmLang(lang) {
    var btnEn = document.getElementById('btnGmLangEn');
    var btnFa = document.getElementById('btnGmLangFa');
    var btnPs = document.getElementById('btnGmLangPs');
    var wrapper = document.getElementById('afgmWrapper');
    
    localStorage.setItem('digify_af_lang', lang);
    
    [btnEn, btnFa, btnPs].forEach(function(b) { if(b) b.classList.remove('active'); });
    if (lang === 'fa' && btnFa) btnFa.classList.add('active');
    else if (lang === 'ps' && btnPs) btnPs.classList.add('active');
    else if (btnEn) btnEn.classList.add('active');
    
    if (wrapper) {
        if (lang === 'fa' || lang === 'ps') wrapper.classList.add('rtl-mode');
        else wrapper.classList.remove('rtl-mode');
    }
    
    document.querySelectorAll('.afgm-trans').forEach(function(el) {
        var text = el.getAttribute('data-' + lang);
        if (text) { el.innerHTML = text; }
    });
    document.querySelectorAll('.afgm-trans-ph').forEach(function(el) {
        var ph = el.getAttribute('data-' + lang + '-ph');
        if (ph) { el.setAttribute('placeholder', ph); }
    });
}

document.addEventListener('DOMContentLoaded', function() {
    var savedLang = localStorage.getItem('digify_af_lang') || 'en';
    switchGmLang(savedLang);
});
</script>

<?php include(__DIR__ . '/../../footer.php'); ?>
