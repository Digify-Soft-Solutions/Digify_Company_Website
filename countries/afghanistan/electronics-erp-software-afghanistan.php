<?php 
include_once(__DIR__ . '/../../db.php');
include_once(__DIR__ . '/../../fetch_meta.php');

$pageTitle = "Electronics & Mobile Retail ERP in Afghanistan | IMEI & Serial ERP";
$pageDescription = "Manage mobile phone shops, laptops, consumer electronics, IMEI/serial number tracking, warranty, and spare parts in Afghanistan with Digify ERP.";
$pageKeywords = "Electronics ERP Afghanistan, Mobile shop software Kabul, IMEI tracking software Afghanistan, Laptop retail software Afghanistan, Afghan mobile POS";
$pageCanonical = "https://www.digifysoft.in/electronics-erp-software-afghanistan";

include(__DIR__ . '/../../top.php');
include(__DIR__ . '/../../header.php');
?>

<style>
.afel-page-wrapper {
    font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
    color: #1e293b;
    overflow-x: hidden;
}
.rtl-mode { direction: rtl; text-align: right; }
.rtl-mode .text-center { text-align: center !important; }
.rtl-mode .me-2 { margin-left: 0.5rem !important; margin-right: 0 !important; }
.rtl-mode .ms-2 { margin-right: 0.5rem !important; margin-left: 0 !important; }

.afel-hero {
    background: linear-gradient(135deg, #312e81 0%, #4338ca 50%, #4f46e5 100%);
    color: #ffffff;
    padding: 70px 0 85px;
    position: relative;
    overflow: hidden;
    border-bottom: 4px solid #818cf8;
}
.afel-hero::before {
    content: '';
    position: absolute;
    top: -15%;
    right: -10%;
    width: 650px;
    height: 650px;
    background: radial-gradient(circle, rgba(129, 140, 248, 0.28) 0%, rgba(79, 70, 229, 0.15) 50%, rgba(0, 0, 0, 0) 75%);
    border-radius: 50%;
    pointer-events: none;
}
.afel-hero-badge {
    background: rgba(129, 140, 248, 0.25);
    border: 1px solid rgba(199, 210, 254, 0.4);
    color: #c7d2fe;
    font-size: 13px;
    font-weight: 700;
    padding: 7px 18px;
    border-radius: 30px;
    display: inline-flex;
    align-items: center;
    gap: 8px;
    margin-bottom: 18px;
}
.afel-hero h1 { font-size: 42px; font-weight: 900; line-height: 1.25; margin-bottom: 18px; letter-spacing: -0.5px; }
.afel-hero-sub { font-size: 18px; font-weight: 600; color: #e0e7ff; line-height: 1.5; margin-bottom: 14px; }
.afel-hero-desc { font-size: 16px; line-height: 1.7; color: rgba(255, 255, 255, 0.88); max-width: 700px; margin-bottom: 28px; }

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
.lang-pill.active { background: #818cf8; color: #1e1b4b; box-shadow: 0 2px 6px rgba(0,0,0,0.2); }

.afel-hero-form-card {
    background: #ffffff;
    border-radius: 16px;
    padding: 28px 24px;
    box-shadow: 0 20px 45px rgba(0, 0, 0, 0.35);
    color: #1e293b;
    border: 1px solid rgba(255, 255, 255, 0.2);
}
.afel-hero-form-card h3 { font-size: 20px; font-weight: 800; color: #0f172a; margin-bottom: 6px; }
.afel-hero-form-card p { font-size: 13px; color: #64748b; margin-bottom: 18px; }

.afel-section { padding: 60px 0; }
.afel-section-title { font-size: 32px; font-weight: 800; color: #0f172a; margin-bottom: 12px; letter-spacing: -0.3px; }
.afel-section-sub { font-size: 16px; color: #64748b; max-width: 680px; margin: 0 auto 40px; }

.btn-afel-primary {
    background: #4f46e5;
    color: #ffffff;
    font-weight: 700;
    border-radius: 8px;
    padding: 12px 24px;
    border: none;
    transition: all 0.2s;
}
.btn-afel-primary:hover { background: #4338ca; color: #ffffff; box-shadow: 0 6px 16px rgba(79, 70, 229, 0.35); }
.btn-afel-outline {
    border: 2px solid rgba(255,255,255,0.4);
    color: #ffffff;
    font-weight: 700;
    border-radius: 8px;
    padding: 12px 24px;
    background: transparent;
}
.btn-afel-outline:hover { background: #ffffff; color: #312e81; }

@media (max-width: 991px) {
    .afel-hero { padding: 45px 0 60px; text-align: center; }
    .afel-hero h1 { font-size: 30px; }
    .afel-hero-desc { margin: 0 auto 24px; }
    .afel-hero-form-card { margin-top: 30px; text-align: left; }
    .rtl-mode .afel-hero-form-card { text-align: right; }
}
</style>

<div class="afel-page-wrapper" id="afelWrapper">

    <!-- HERO SECTION -->
    <section class="afel-hero">
        <div class="container">
            <div class="text-center text-lg-start mb-2">
                <div class="lang-toggle-bar">
                    <button type="button" class="lang-pill active" id="btnElLangEn" onclick="switchElLang('en')">🇬🇧 English</button>
                    <button type="button" class="lang-pill" id="btnElLangFa" onclick="switchElLang('fa')">🇦🇫 دری (Farsi)</button>
                    <button type="button" class="lang-pill" id="btnElLangPs" onclick="switchElLang('ps')">🇦🇫 پښتو (Pashto)</button>
                </div>
            </div>

            <div class="row align-items-center">
                <div class="col-lg-7">
                    <div class="afel-hero-badge afel-trans" 
                        data-en="📱 Electronics & Mobile IMEI Management ERP" 
                        data-fa="📱 سیستم مدیریت مبایل‌فروشی، شماره IMEI و لوازم الکترونیکی" 
                        data-ps="📱 په افغانستان کې د موبایلونو او الکترونیکي وسایلو د خرڅلاو ERP">
                        📱 Electronics & Mobile IMEI Management ERP
                    </div>
                    <h1 class="afel-trans"
                        data-en="Electronics & Mobile Retail ERP in Afghanistan"
                        data-fa="نرم‌افزار جامع فروشگاه‌های مبایل و لوازم برقی در افغانستان"
                        data-ps="په افغانستان کې د مبایلونو او برښنايي توکو د دوکانونو لپاره ERP">
                        Electronics & Mobile Retail ERP in Afghanistan
                    </h1>
                    <div class="afel-hero-sub afel-trans"
                        data-en="Dual IMEI Scanning • Warranty Tracking • Repair Service Job Cards • Spare Parts"
                        data-fa="اسکن دوگانه IMEI • ثبت وارنتی و ضمانت • کارت تعمیرگاه مبایل • پرزه‌جات"
                        data-ps="دوه ګونی IMEI ثبت • د ورانټۍ تعقیب • د ترمیم کاري کارډ • د پرزو ګودام">
                        Dual IMEI Scanning • Warranty Tracking • Repair Service Job Cards • Spare Parts
                    </div>
                    <p class="afel-hero-desc afel-trans"
                        data-en="Manage smartphones, chargers, power banks, laptops, home appliances, IMEI barcode scanning at checkout, repair department job cards, and wholesale distributor accounts."
                        data-fa="مدیریت اسمارت‌فون، لپ‌تاپ، لوازم جانبی مبایل، ثبت نمبر IMEI هنگام فروش، مدیریت بخش ترمیمات و فاکتور عمده‌فروشی با دیجی‌فای."
                        data-ps="د مبایلونو دوکانونه، لپ ټاپونه، د IMEI ثبت، د موبایلونو د ترمیم څانګه او د عمده پلور حسابونه په اسانۍ کنټرول کړئ.">
                        Manage smartphones, chargers, power banks, laptops, home appliances, IMEI barcode scanning at checkout, repair department job cards, and wholesale distributor accounts.
                    </p>
                    <div class="d-flex gap-3 flex-wrap justify-content-center justify-content-lg-start">
                        <a href="#demo-form" class="btn btn-afel-primary"><i class="fas fa-mobile-alt me-2"></i> <span class="afel-trans" data-en="Get Electronics ERP Demo" data-fa="درخواست دموی مبایل" data-ps="د موبایل سافټویر ډیمو">Get Electronics ERP Demo</span></a>
                        <a href="tel:+919876543210" class="btn btn-afel-outline"><i class="fas fa-headset me-2"></i> <span class="afel-trans" data-en="Talk to Retail Expert" data-fa="تماس با کارشناس" data-ps="د متخصص سره اړیکه">Talk to Retail Expert</span></a>
                    </div>
                </div>

                <!-- Form Card -->
                <div class="col-lg-5" id="demo-form">
                    <div class="afel-hero-form-card">
                        <h3 class="afel-trans" data-en="Request Mobile ERP Demo" data-fa="درخواست مشاوره فروشگاه مبایل" data-ps="د مبایل سيستم مشوره">Request Mobile ERP Demo</h3>
                        <p class="afel-trans" data-en="For mobile markets, electronics showrooms & computer shops." data-fa="ویژه دکانداران مارکیت داوودزی، گلبهار سنتر و فروشگاه‌های صوتی‌تصویری." data-ps="د داودزي مارکېټ او ټول افغانستان د مبایل پلورونکو لپاره.">For mobile markets, electronics showrooms & computer shops.</p>
                        
                        <form action="send_lead.php" method="POST">
                            <div class="mb-3">
                                <label class="form-label small fw-bold afel-trans" data-en="Full Name" data-fa="نام و تخلص" data-ps="بشپړ نوم">Full Name</label>
                                <input type="text" name="name" class="form-control" placeholder="e.g. Ahmad Fawad" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label small fw-bold afel-trans" data-en="Shop / Company Name" data-fa="نام دوکان / شرکت" data-ps="د دوکان نوم">Shop / Company Name</label>
                                <input type="text" name="company" class="form-control" placeholder="e.g. Kabul Digital Plaza" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label small fw-bold afel-trans" data-en="WhatsApp / Phone" data-fa="شماره تماس" data-ps="د واټساپ شمېره">WhatsApp / Phone</label>
                                <input type="tel" name="phone" class="form-control" placeholder="+93 7X XXX XXXX" required>
                            </div>
                            <button type="submit" class="btn btn-afel-primary w-100 py-2 fw-bold afel-trans"
                                data-en="Request Free Demonstration"
                                data-fa="ارسال درخواست دمو"
                                data-ps="وړیا ډیمو ترلاسه کړئ">
                                Request Free Demonstration
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FINAL CTA -->
    <section class="afel-section bg-dark text-white text-center" style="background: #312e81 !important;">
        <div class="container">
            <h2 class="fw-bold mb-3 afel-trans" 
                data-en="Track Every Device with 100% IMEI Accuracy" 
                data-fa="هر دستگاه مبایل را با دقت ۱۰۰٪ بر اساس IMEI ردیابی کنید"
                data-ps="خپل ټول مبایلونه د IMEI له مخې په پوره ډاډ سره وپلورئ او ثبت کړئ">
                Track Every Device with 100% IMEI Accuracy
            </h2>
            <div class="d-flex justify-content-center gap-3 flex-wrap">
                <a href="#demo-form" class="btn btn-afel-primary px-4 py-3"><i class="fas fa-calendar-check me-2"></i> <span class="afel-trans" data-en="Request Mobile Demo" data-fa="درخواست دمو" data-ps="ډیمو ترلاسه کړئ">Request Mobile Demo</span></a>
                <a href="erp-software-afghanistan.php" class="btn btn-afel-outline px-4 py-3"><i class="fas fa-arrow-left me-2"></i> <span class="afel-trans" data-en="Back to Afghanistan ERP" data-fa="صفحه اصلی افغانستان" data-ps="د افغانستان عمومي پاڼه">Back to Afghanistan ERP</span></a>
            </div>
        </div>
    </section>

</div>

<script>
function switchElLang(lang) {
    var btnEn = document.getElementById('btnElLangEn');
    var btnFa = document.getElementById('btnElLangFa');
    var btnPs = document.getElementById('btnElLangPs');
    var wrapper = document.getElementById('afelWrapper');
    
    localStorage.setItem('digify_af_lang', lang);
    
    [btnEn, btnFa, btnPs].forEach(function(b) { if(b) b.classList.remove('active'); });
    if (lang === 'fa' && btnFa) btnFa.classList.add('active');
    else if (lang === 'ps' && btnPs) btnPs.classList.add('active');
    else if (btnEn) btnEn.classList.add('active');
    
    if (wrapper) {
        if (lang === 'fa' || lang === 'ps') wrapper.classList.add('rtl-mode');
        else wrapper.classList.remove('rtl-mode');
    }
    
    document.querySelectorAll('.afel-trans').forEach(function(el) {
        var text = el.getAttribute('data-' + lang);
        if (text) { el.innerHTML = text; }
    });
}

document.addEventListener('DOMContentLoaded', function() {
    var savedLang = localStorage.getItem('digify_af_lang') || 'en';
    switchElLang(savedLang);
});
</script>

<?php include(__DIR__ . '/../../footer.php'); ?>
