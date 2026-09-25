<?php 
include_once(__DIR__ . '/../../db.php');
include_once(__DIR__ . '/../../fetch_meta.php');

$pageTitle = "Retail ERP Software in Afghanistan | POS & Store Management ERP";
$pageDescription = "Manage retail shops, shopping centers, multi-store POS, barcode billing, cashier shifts, customer loyalty, and daily sales in Afghanistan with Digify ERP.";
$pageKeywords = "Retail ERP Afghanistan, POS software Kabul, Retail store software Afghanistan, Retail management Kabul, Afghan retail billing software";
$pageCanonical = "https://www.digifysoft.in/retail-erp-software-afghanistan";

include(__DIR__ . '/../../top.php');
include(__DIR__ . '/../../header.php');
?>

<style>
.afrt-page-wrapper {
    font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
    color: #1e293b;
    overflow-x: hidden;
}
.rtl-mode { direction: rtl; text-align: right; }
.rtl-mode .text-center { text-align: center !important; }
.rtl-mode .me-2 { margin-left: 0.5rem !important; margin-right: 0 !important; }
.rtl-mode .ms-2 { margin-right: 0.5rem !important; margin-left: 0 !important; }

.afrt-hero {
    background: linear-gradient(135deg, #047857 0%, #059669 50%, #10b981 100%);
    color: #ffffff;
    padding: 70px 0 85px;
    position: relative;
    overflow: hidden;
    border-bottom: 4px solid #34d399;
}
.afrt-hero::before {
    content: '';
    position: absolute;
    top: -15%;
    right: -10%;
    width: 650px;
    height: 650px;
    background: radial-gradient(circle, rgba(52, 211, 153, 0.28) 0%, rgba(16, 185, 129, 0.15) 50%, rgba(0, 0, 0, 0) 75%);
    border-radius: 50%;
    pointer-events: none;
}
.afrt-hero-badge {
    background: rgba(52, 211, 153, 0.25);
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
.afrt-hero h1 { font-size: 42px; font-weight: 900; line-height: 1.25; margin-bottom: 18px; letter-spacing: -0.5px; }
.afrt-hero-sub { font-size: 18px; font-weight: 600; color: #d1fae5; line-height: 1.5; margin-bottom: 14px; }
.afrt-hero-desc { font-size: 16px; line-height: 1.7; color: rgba(255, 255, 255, 0.88); max-width: 700px; margin-bottom: 28px; }

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
.lang-pill.active { background: #34d399; color: #064e3b; box-shadow: 0 2px 6px rgba(0,0,0,0.2); }

.afrt-hero-form-card {
    background: #ffffff;
    border-radius: 16px;
    padding: 28px 24px;
    box-shadow: 0 20px 45px rgba(0, 0, 0, 0.35);
    color: #1e293b;
    border: 1px solid rgba(255, 255, 255, 0.2);
}
.afrt-hero-form-card h3 { font-size: 20px; font-weight: 800; color: #0f172a; margin-bottom: 6px; }
.afrt-hero-form-card p { font-size: 13px; color: #64748b; margin-bottom: 18px; }

.btn-afrt-primary {
    background: #059669;
    color: #ffffff;
    font-weight: 700;
    border-radius: 8px;
    padding: 12px 24px;
    border: none;
    transition: all 0.2s;
}
.btn-afrt-primary:hover { background: #047857; color: #ffffff; box-shadow: 0 6px 16px rgba(5, 150, 105, 0.35); }
.btn-afrt-outline {
    border: 2px solid rgba(255,255,255,0.4);
    color: #ffffff;
    font-weight: 700;
    border-radius: 8px;
    padding: 12px 24px;
    background: transparent;
}
.btn-afrt-outline:hover { background: #ffffff; color: #064e3b; }

@media (max-width: 991px) {
    .afrt-hero { padding: 45px 0 60px; text-align: center; }
    .afrt-hero h1 { font-size: 30px; }
    .afrt-hero-desc { margin: 0 auto 24px; }
    .afrt-hero-form-card { margin-top: 30px; text-align: left; }
    .rtl-mode .afrt-hero-form-card { text-align: right; }
}
</style>

<div class="afrt-page-wrapper" id="afrtWrapper">

    <!-- HERO SECTION -->
    <section class="afrt-hero">
        <div class="container">
            <div class="text-center text-lg-start mb-2">
                <div class="lang-toggle-bar">
                    <button type="button" class="lang-pill active" id="btnRtLangEn" onclick="switchRtLang('en')">🇬🇧 English</button>
                    <button type="button" class="lang-pill" id="btnRtLangFa" onclick="switchRtLang('fa')">🇦🇫 دری (Farsi)</button>
                    <button type="button" class="lang-pill" id="btnRtLangPs" onclick="switchRtLang('ps')">🇦🇫 پښتو (Pashto)</button>
                </div>
            </div>

            <div class="row align-items-center">
                <div class="col-lg-7">
                    <div class="afrt-hero-badge afrt-trans" 
                        data-en="🛍️ Retail Shop & Multi-Branch POS Software in Afghanistan" 
                        data-fa="🛍️ قدرتمندترین سیستم مدیریت دوکان‌ها و فروشگاه‌های پرچون در افغانستان" 
                        data-ps="🛍️ په افغانستان کې د دوکانونو او پرچون پلورنځیو لپاره پرمختللی POS">
                        🛍️ Retail Shop & Multi-Branch POS Software in Afghanistan
                    </div>
                    <h1 class="afrt-trans"
                        data-en="Retail ERP Software in Afghanistan"
                        data-fa="نرم‌افزار جامع مدیریت فروشگاه و دوکان در افغانستان"
                        data-ps="په افغانستان کې د پرچون پلور او دوکانونو لپاره ERP سافټویر">
                        Retail ERP Software in Afghanistan
                    </h1>
                    <div class="afrt-hero-sub afrt-trans"
                        data-en="Barcode Billing • Cashier Shift Reconciliation • Low Stock SMS • Customer Loyalty"
                        data-fa="فروش بارکدی سریع • تسویه شیفت دخل • هشدار کسری جنس • حسابات وفاداری مشتریان"
                        data-ps="د بارکوډ بل جوړول • د کیشیر ورځنی حساب • د جنس کمښت خبرداری • پېرودونکو حساب">
                        Barcode Billing • Cashier Shift Reconciliation • Low Stock SMS • Customer Loyalty
                    </div>
                    <p class="afrt-hero-desc afrt-trans"
                        data-en="Equip your retail shops, boutique showrooms, cosmetic outlets, footwear stores, and general retail businesses across Kabul and provincial shopping plazas with instant POS checkout and multi-store control."
                        data-fa="مدیریت دوکان‌های لباس، بوت‌فروشی، لوازم آرایشی، فروشگاه‌های زنجیره‌ای و دوکان‌های شهری با صندوق فروش پرسرعت و گزارش دخل روزانه با دیجی‌فای."
                        data-ps="خپل دوکانونه، د بوټانو او کالیو پلورنځي، د سینګار توکو دوکانونه او عمومي پلورنځي په اسانۍ کنټرول کړئ.">
                        Equip your retail shops, boutique showrooms, cosmetic outlets, footwear stores, and general retail businesses across Kabul and provincial shopping plazas with instant POS checkout and multi-store control.
                    </p>
                    <div class="d-flex gap-3 flex-wrap justify-content-center justify-content-lg-start">
                        <a href="#demo-form" class="btn btn-afrt-primary"><i class="fas fa-cash-register me-2"></i> <span class="afrt-trans" data-en="Get Retail ERP Demo" data-fa="درخواست دموی فروشگاهی" data-ps="د پرچون سافټویر ډیمو">Get Retail ERP Demo</span></a>
                        <a href="tel:+919876543210" class="btn btn-afrt-outline"><i class="fas fa-headset me-2"></i> <span class="afrt-trans" data-en="Talk to Retail Expert" data-fa="تماس با کارشناس" data-ps="د متخصص سره اړیکه">Talk to Retail Expert</span></a>
                    </div>
                </div>

                <!-- Form Card -->
                <div class="col-lg-5" id="demo-form">
                    <div class="afrt-hero-form-card">
                        <h3 class="afrt-trans" data-en="Request Retail Demo" data-fa="درخواست مشاوره فروشگاهی" data-ps="د دوکان سيستم مشوره">Request Retail Demo</h3>
                        <p class="afcr-trans" data-en="Tailored for shops, plazas, multi-branch stores." data-fa="ویژه دکان‌ها، مارکیت‌ها و شعبات فروشگاهی." data-ps="د دوکانونو او مارکېټونو لپاره.">Tailored for shops, plazas, multi-branch stores.</p>
                        
                        <form action="send_lead.php" method="POST">
                            <div class="mb-3">
                                <label class="form-label small fw-bold afrt-trans" data-en="Full Name" data-fa="نام و تخلص" data-ps="بشپړ نوم">Full Name</label>
                                <input type="text" name="name" class="form-control" placeholder="e.g. Ahmad Tariq" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label small fw-bold afrt-trans" data-en="Shop / Business Name" data-fa="نام دوکان / فروشگاه" data-ps="د دوکان نوم">Shop / Business Name</label>
                                <input type="text" name="company" class="form-control" placeholder="e.g. Kabul Style Plaza" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label small fw-bold afrt-trans" data-en="WhatsApp / Phone" data-fa="شماره تماس" data-ps="د واټساپ شمېره">WhatsApp / Phone</label>
                                <input type="tel" name="phone" class="form-control" placeholder="+93 7X XXX XXXX" required>
                            </div>
                            <button type="submit" class="btn btn-afrt-primary w-100 py-2 fw-bold afrt-trans"
                                data-en="Request Free Demonstration"
                                data-fa="ارسال درخواست دمو"
                                data-ps="وړیا ډیمو غوښتنه وکړئ">
                                Request Free Demonstration
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FINAL CTA -->
    <section class="afrt-section bg-dark text-white text-center" style="background: #047857 !important; padding: 60px 0;">
        <div class="container">
            <h2 class="fw-bold mb-3 afrt-trans" 
                data-en="Modernize Your Retail Shops in Afghanistan with Digify POS" 
                data-fa="دوکان و فروشگاه خود را با صندوق فروشگاهی دیجی‌فای مجهز سازید"
                data-ps="خپل دوکان د ډیجیفای له لارې عصري او ګړندی کړئ">
                Modernize Your Retail Shops in Afghanistan with Digify POS
            </h2>
            <div class="d-flex justify-content-center gap-3 flex-wrap">
                <a href="#demo-form" class="btn btn-afrt-primary px-4 py-3"><i class="fas fa-calendar-check me-2"></i> <span class="afrt-trans" data-en="Request Retail Demo" data-fa="درخواست دمو" data-ps="ډیمو ترلاسه کړئ">Request Retail Demo</span></a>
                <a href="erp-software-afghanistan.php" class="btn btn-afrt-outline px-4 py-3"><i class="fas fa-arrow-left me-2"></i> <span class="afrt-trans" data-en="Back to Afghanistan ERP" data-fa="صفحه اصلی افغانستان" data-ps="د افغانستان عمومي پاڼه">Back to Afghanistan ERP</span></a>
            </div>
        </div>
    </section>

</div>

<script>
function switchRtLang(lang) {
    var btnEn = document.getElementById('btnRtLangEn');
    var btnFa = document.getElementById('btnRtLangFa');
    var btnPs = document.getElementById('btnRtLangPs');
    var wrapper = document.getElementById('afrtWrapper');
    
    localStorage.setItem('digify_af_lang', lang);
    
    [btnEn, btnFa, btnPs].forEach(function(b) { if(b) b.classList.remove('active'); });
    if (lang === 'fa' && btnFa) btnFa.classList.add('active');
    else if (lang === 'ps' && btnPs) btnPs.classList.add('active');
    else if (btnEn) btnEn.classList.add('active');
    
    if (wrapper) {
        if (lang === 'fa' || lang === 'ps') wrapper.classList.add('rtl-mode');
        else wrapper.classList.remove('rtl-mode');
    }
    
    document.querySelectorAll('.afrt-trans').forEach(function(el) {
        var text = el.getAttribute('data-' + lang);
        if (text) { el.innerHTML = text; }
    });
}

document.addEventListener('DOMContentLoaded', function() {
    var savedLang = localStorage.getItem('digify_af_lang') || 'en';
    switchRtLang(savedLang);
});
</script>

<?php include(__DIR__ . '/../../footer.php'); ?>
