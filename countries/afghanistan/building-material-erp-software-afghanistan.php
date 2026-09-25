<?php 
include_once(__DIR__ . '/../../db.php');
include_once(__DIR__ . '/../../fetch_meta.php');

$pageTitle = "Building Material ERP Software in Afghanistan | Construction Supplies ERP";
$pageDescription = "Manage cement, steel, bricks, gravel, sanitary, electrical, plumbing, and hardware trading in Afghanistan with Digify Building Material ERP.";
$pageKeywords = "Building material ERP Afghanistan, Cement trading software Kabul, Steel inventory ERP Afghanistan, Hardware shop software Afghanistan, Construction supply ERP";
$pageCanonical = "https://www.digifysoft.in/building-material-erp-software-afghanistan";

include(__DIR__ . '/../../top.php');
include(__DIR__ . '/../../header.php');
?>

<style>
.afbm-page-wrapper {
    font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
    color: #1e293b;
    overflow-x: hidden;
}
.rtl-mode { direction: rtl; text-align: right; }
.rtl-mode .text-center { text-align: center !important; }
.rtl-mode .me-2 { margin-left: 0.5rem !important; margin-right: 0 !important; }
.rtl-mode .ms-2 { margin-right: 0.5rem !important; margin-left: 0 !important; }

.afbm-hero {
    background: linear-gradient(135deg, #78350f 0%, #92400e 50%, #b45309 100%);
    color: #ffffff;
    padding: 70px 0 85px;
    position: relative;
    overflow: hidden;
    border-bottom: 4px solid #f59e0b;
}
.afbm-hero::before {
    content: '';
    position: absolute;
    top: -15%;
    right: -10%;
    width: 650px;
    height: 650px;
    background: radial-gradient(circle, rgba(245, 158, 11, 0.28) 0%, rgba(180, 83, 9, 0.15) 50%, rgba(0, 0, 0, 0) 75%);
    border-radius: 50%;
    pointer-events: none;
}
.afbm-hero-badge {
    background: rgba(245, 158, 11, 0.25);
    border: 1px solid rgba(253, 224, 71, 0.4);
    color: #fef08a;
    font-size: 13px;
    font-weight: 700;
    padding: 7px 18px;
    border-radius: 30px;
    display: inline-flex;
    align-items: center;
    gap: 8px;
    margin-bottom: 18px;
}
.afbm-hero h1 { font-size: 42px; font-weight: 900; line-height: 1.25; margin-bottom: 18px; letter-spacing: -0.5px; }
.afbm-hero-sub { font-size: 18px; font-weight: 600; color: #fef3c7; line-height: 1.5; margin-bottom: 14px; }
.afbm-hero-desc { font-size: 16px; line-height: 1.7; color: rgba(255, 255, 255, 0.88); max-width: 700px; margin-bottom: 28px; }

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
.lang-pill.active { background: #f59e0b; color: #78350f; box-shadow: 0 2px 6px rgba(0,0,0,0.2); }

.afbm-hero-form-card {
    background: #ffffff;
    border-radius: 16px;
    padding: 28px 24px;
    box-shadow: 0 20px 45px rgba(0, 0, 0, 0.35);
    color: #1e293b;
    border: 1px solid rgba(255, 255, 255, 0.2);
}
.afbm-hero-form-card h3 { font-size: 20px; font-weight: 800; color: #0f172a; margin-bottom: 6px; }
.afbm-hero-form-card p { font-size: 13px; color: #64748b; margin-bottom: 18px; }

.afbm-section { padding: 60px 0; }
.afbm-section-title { font-size: 32px; font-weight: 800; color: #0f172a; margin-bottom: 12px; letter-spacing: -0.3px; }
.afbm-section-sub { font-size: 16px; color: #64748b; max-width: 680px; margin: 0 auto 40px; }

.afbm-card {
    background: #ffffff;
    border: 1px solid #e2e8f0;
    border-radius: 14px;
    padding: 24px;
    height: 100%;
    transition: all 0.3s ease;
    box-shadow: 0 4px 6px -1px rgba(0,0,0,0.05);
}
.afbm-card:hover { transform: translateY(-4px); box-shadow: 0 15px 30px rgba(0,0,0,0.08); border-color: #b45309; }
.afbm-card-icon {
    width: 52px;
    height: 52px;
    border-radius: 12px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 24px;
    margin-bottom: 16px;
    background: rgba(180, 83, 9, 0.1);
    color: #b45309;
}
.afbm-card h4 { font-size: 18px; font-weight: 700; color: #0f172a; margin-bottom: 10px; }
.afbm-card p { font-size: 14px; color: #64748b; line-height: 1.6; margin-bottom: 0; }

.btn-afbm-primary {
    background: #b45309;
    color: #ffffff;
    font-weight: 700;
    border-radius: 8px;
    padding: 12px 24px;
    border: none;
    transition: all 0.2s;
}
.btn-afbm-primary:hover { background: #92400e; color: #ffffff; box-shadow: 0 6px 16px rgba(180, 83, 9, 0.35); }
.btn-afbm-outline {
    border: 2px solid rgba(255,255,255,0.4);
    color: #ffffff;
    font-weight: 700;
    border-radius: 8px;
    padding: 12px 24px;
    background: transparent;
}
.btn-afbm-outline:hover { background: #ffffff; color: #78350f; }

@media (max-width: 991px) {
    .afbm-hero { padding: 45px 0 60px; text-align: center; }
    .afbm-hero h1 { font-size: 30px; }
    .afbm-hero-desc { margin: 0 auto 24px; }
    .afbm-hero-form-card { margin-top: 30px; text-align: left; }
    .rtl-mode .afbm-hero-form-card { text-align: right; }
}
</style>

<div class="afbm-page-wrapper" id="afbmWrapper">

    <!-- HERO SECTION -->
    <section class="afbm-hero">
        <div class="container">
            <div class="text-center text-lg-start mb-2">
                <div class="lang-toggle-bar">
                    <button type="button" class="lang-pill active" id="btnBmLangEn" onclick="switchBmLang('en')">🇬🇧 English</button>
                    <button type="button" class="lang-pill" id="btnBmLangFa" onclick="switchBmLang('fa')">🇦🇫 دری (Farsi)</button>
                    <button type="button" class="lang-pill" id="btnBmLangPs" onclick="switchBmLang('ps')">🇦🇫 پښتو (Pashto)</button>
                </div>
            </div>

            <div class="row align-items-center">
                <div class="col-lg-7">
                    <div class="afbm-hero-badge afbm-trans" 
                        data-en="🏢 Building Materials & Hardware ERP in Afghanistan" 
                        data-fa="🏢 سیستم تخصصی فروش مواد ساختمانی، سیمان، سیخ‌گول و آهن‌آلات" 
                        data-ps="🏢 په افغانستان کې د ساختماني توکو، سمنټو او سیخ ګول پلورلو ERP">
                        🏢 Building Materials & Hardware ERP in Afghanistan
                    </div>
                    <h1 class="afbm-trans"
                        data-en="Building Material ERP Software in Afghanistan"
                        data-fa="نرم‌افزار جامع مدیریت فروش و گدام مواد ساختمانی در افغانستان"
                        data-ps="په افغانستان کې د ساختماني موادو د سوداګرۍ لپاره ERP سافټویر">
                        Building Material ERP Software in Afghanistan
                    </h1>
                    <div class="afbm-hero-sub afbm-trans"
                        data-en="Cement Bags • Steel Tonnes • Bricks • Sanitary • Contractor Credit Accounts"
                        data-fa="بوری سیمان • تن سیخ‌گول • خشت و جغل • لوازم برقی و نلدوانی • حساب قراردادی‌ها"
                        data-ps="د سمنټو بورۍ • د سیخ ټنونه • خښتې • نل او برښنايي سامانونه • د ټیکه دارانو حساب">
                        Cement Bags • Steel Tonnes • Bricks • Sanitary • Contractor Credit Accounts
                    </div>
                    <p class="afbm-hero-desc afbm-trans"
                        data-en="Manage cement depots, rebar steel wholesale, PVC pipes, ceramic tiles, sanitary fittings, contractor credit ledgers, and weighbridge truck dispatching."
                        data-fa="مدیریت گدام‌های سیمان غوری و جبل‌السراج، سیخ‌گول، لوله‌های پی‌وی‌سی، کاشی و سرامیک، ثبت طلب‌های قراردادی‌ها و صدور بارنامه موتر با دیجی‌فای."
                        data-ps="د سمنټو، سیخانو، رنګونو، ټایلونو او ودانیزو توکو ګودامونه، د موټرو بارنامې او د پیرودونکو پورونه په اسانۍ کنټرول کړئ.">
                        Manage cement depots, rebar steel wholesale, PVC pipes, ceramic tiles, sanitary fittings, contractor credit ledgers, and weighbridge truck dispatching.
                    </p>
                    <div class="d-flex gap-3 flex-wrap justify-content-center justify-content-lg-start">
                        <a href="#demo-form" class="btn btn-afbm-primary"><i class="fas fa-cubes me-2"></i> <span class="afbm-trans" data-en="Get Building Material Demo" data-fa="درخواست دموی مواد ساختمانی" data-ps="د ودانیزو توکو ډیمو">Get Building Material Demo</span></a>
                        <a href="tel:+919876543210" class="btn btn-afbm-outline"><i class="fas fa-headset me-2"></i> <span class="afbm-trans" data-en="Talk to Industry Specialist" data-fa="تماس با کارشناس" data-ps="د متخصص سره اړیکه">Talk to Industry Specialist</span></a>
                    </div>
                </div>

                <!-- Form Card -->
                <div class="col-lg-5" id="demo-form">
                    <div class="afbm-hero-form-card">
                        <h3 class="afbm-trans" data-en="Request ERP Consultation" data-fa="درخواست مشاوره مواد ساختمانی" data-ps="د ودانیزو توکو سيستم مشوره">Request ERP Consultation</h3>
                        <p class="afbm-trans" data-en="For cement traders, steel stockists, hardware & paint shops." data-fa="ویژه تجار سیمان، آهن‌فروشان، رنگ و لوازم نلدوانی." data-ps="د سمنټو، سیخ ګول او رنګ پلورونکو لپاره.">For cement traders, steel stockists, hardware & paint shops.</p>
                        
                        <form action="send_lead.php" method="POST">
                            <div class="mb-3">
                                <label class="form-label small fw-bold afbm-trans" data-en="Full Name" data-fa="نام و تخلص" data-ps="بشپړ نوم">Full Name</label>
                                <input type="text" name="name" class="form-control afbm-trans-ph" placeholder="e.g. Haji Gul Mohammad" data-en-ph="e.g. Haji Gul Mohammad" data-fa-ph="مثال: حاجی گل محمد" data-ps-ph="مثال: حاجي ګل محمد" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label small fw-bold afbm-trans" data-en="Business / Depot Name" data-fa="نام شرکت / گدام" data-ps="د شرکت نوم">Business / Depot Name</label>
                                <input type="text" name="company" class="form-control afbm-trans-ph" placeholder="e.g. Kabul Steel & Cement Depot" data-en-ph="e.g. Kabul Steel & Cement Depot" data-fa-ph="مثال: شرکت آهن و سیمان کابل" data-ps-ph="مثال: د کابل اوسپنې او سمنټو شرکت" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label small fw-bold afbm-trans" data-en="WhatsApp / Phone" data-fa="شماره واتساپ" data-ps="د واټساپ شمېره">WhatsApp / Phone</label>
                                <input type="tel" name="phone" class="form-control" placeholder="+93 7X XXX XXXX" required>
                            </div>
                            <button type="submit" class="btn btn-afbm-primary w-100 py-2 fw-bold afbm-trans"
                                data-en="Request Free Demonstration"
                                data-fa="ارسال درخواست دمو"
                                data-ps="وړیا ډیمو غوښتنه">
                                Request Free Demonstration
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FINAL CTA -->
    <section class="afbm-section bg-dark text-white text-center" style="background: #78350f !important;">
        <div class="container">
            <h2 class="fw-bold mb-3 afbm-trans" 
                data-en="Modernize Your Building Material Business with Digify" 
                data-fa="گدام و فروشگاه مواد ساختمانی خود را با دیجی‌فای هوشمند سازید"
                data-ps="خپل د ساختماني توکو ګودام او دوکان په منظمه توګه کنټرول کړئ">
                Modernize Your Building Material Business with Digify
            </h2>
            <div class="d-flex justify-content-center gap-3 flex-wrap">
                <a href="#demo-form" class="btn btn-afbm-primary px-4 py-3"><i class="fas fa-calendar-check me-2"></i> <span class="afbm-trans" data-en="Request Building Material Demo" data-fa="درخواست دمو" data-ps="ډیمو ترلاسه کړئ">Request Building Material Demo</span></a>
                <a href="erp-software-afghanistan.php" class="btn btn-afbm-outline px-4 py-3"><i class="fas fa-arrow-left me-2"></i> <span class="afbm-trans" data-en="Back to Afghanistan ERP" data-fa="صفحه اصلی افغانستان" data-ps="د افغانستان عمومي پاڼه">Back to Afghanistan ERP</span></a>
            </div>
        </div>
    </section>

</div>

<script>
function switchBmLang(lang) {
    var btnEn = document.getElementById('btnBmLangEn');
    var btnFa = document.getElementById('btnBmLangFa');
    var btnPs = document.getElementById('btnBmLangPs');
    var wrapper = document.getElementById('afbmWrapper');
    
    localStorage.setItem('digify_af_lang', lang);
    
    [btnEn, btnFa, btnPs].forEach(function(b) { if(b) b.classList.remove('active'); });
    if (lang === 'fa' && btnFa) btnFa.classList.add('active');
    else if (lang === 'ps' && btnPs) btnPs.classList.add('active');
    else if (btnEn) btnEn.classList.add('active');
    
    if (wrapper) {
        if (lang === 'fa' || lang === 'ps') wrapper.classList.add('rtl-mode');
        else wrapper.classList.remove('rtl-mode');
    }
    
    document.querySelectorAll('.afbm-trans').forEach(function(el) {
        var text = el.getAttribute('data-' + lang);
        if (text) { el.innerHTML = text; }
    });
    document.querySelectorAll('.afbm-trans-ph').forEach(function(el) {
        var ph = el.getAttribute('data-' + lang + '-ph');
        if (ph) { el.setAttribute('placeholder', ph); }
    });
}

document.addEventListener('DOMContentLoaded', function() {
    var savedLang = localStorage.getItem('digify_af_lang') || 'en';
    switchBmLang(savedLang);
});
</script>

<?php include(__DIR__ . '/../../footer.php'); ?>
