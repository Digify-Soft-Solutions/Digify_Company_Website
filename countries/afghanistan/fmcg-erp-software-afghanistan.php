<?php 
include_once(__DIR__ . '/../../db.php');
include_once(__DIR__ . '/../../fetch_meta.php');

$pageTitle = "FMCG ERP Software in Afghanistan | Consumer Goods Distribution";
$pageDescription = "Manage FMCG distribution, van sales, route replenishment, packaged consumer goods, shopkeeper credit, and multi-depot inventory in Afghanistan with Digify ERP.";
$pageKeywords = "FMCG ERP Afghanistan, Consumer goods software Kabul, Van sales software Afghanistan, FMCG distribution ERP Afghanistan, Packaged food distribution software";
$pageCanonical = "https://www.digifysoft.in/fmcg-erp-software-afghanistan";

include(__DIR__ . '/../../top.php');
include(__DIR__ . '/../../header.php');
?>

<style>
.affmcg-page-wrapper {
    font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
    color: #1e293b;
    overflow-x: hidden;
}
.rtl-mode { direction: rtl; text-align: right; }
.rtl-mode .text-center { text-align: center !important; }
.rtl-mode .me-2 { margin-left: 0.5rem !important; margin-right: 0 !important; }
.rtl-mode .ms-2 { margin-right: 0.5rem !important; margin-left: 0 !important; }

.affmcg-hero {
    background: linear-gradient(135deg, #1e3a8a 0%, #1d4ed8 50%, #2563eb 100%);
    color: #ffffff;
    padding: 70px 0 85px;
    position: relative;
    overflow: hidden;
    border-bottom: 4px solid #60a5fa;
}
.affmcg-hero::before {
    content: '';
    position: absolute;
    top: -15%;
    right: -10%;
    width: 650px;
    height: 650px;
    background: radial-gradient(circle, rgba(96, 165, 250, 0.28) 0%, rgba(37, 99, 235, 0.15) 50%, rgba(0, 0, 0, 0) 75%);
    border-radius: 50%;
    pointer-events: none;
}
.affmcg-hero-badge {
    background: rgba(96, 165, 250, 0.25);
    border: 1px solid rgba(191, 219, 254, 0.4);
    color: #bfdbfe;
    font-size: 13px;
    font-weight: 700;
    padding: 7px 18px;
    border-radius: 30px;
    display: inline-flex;
    align-items: center;
    gap: 8px;
    margin-bottom: 18px;
}
.affmcg-hero h1 { font-size: 42px; font-weight: 900; line-height: 1.25; margin-bottom: 18px; letter-spacing: -0.5px; }
.affmcg-hero-sub { font-size: 18px; font-weight: 600; color: #dbeafe; line-height: 1.5; margin-bottom: 14px; }
.affmcg-hero-desc { font-size: 16px; line-height: 1.7; color: rgba(255, 255, 255, 0.88); max-width: 700px; margin-bottom: 28px; }

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
.lang-pill.active { background: #60a5fa; color: #1e3a8a; box-shadow: 0 2px 6px rgba(0,0,0,0.2); }

.affmcg-hero-form-card {
    background: #ffffff;
    border-radius: 16px;
    padding: 28px 24px;
    box-shadow: 0 20px 45px rgba(0, 0, 0, 0.35);
    color: #1e293b;
    border: 1px solid rgba(255, 255, 255, 0.2);
}
.affmcg-hero-form-card h3 { font-size: 20px; font-weight: 800; color: #0f172a; margin-bottom: 6px; }
.affmcg-hero-form-card p { font-size: 13px; color: #64748b; margin-bottom: 18px; }

.affmcg-section { padding: 60px 0; }
.affmcg-section-title { font-size: 32px; font-weight: 800; color: #0f172a; margin-bottom: 12px; letter-spacing: -0.3px; }
.affmcg-section-sub { font-size: 16px; color: #64748b; max-width: 680px; margin: 0 auto 40px; }

.affmcg-card {
    background: #ffffff;
    border: 1px solid #e2e8f0;
    border-radius: 14px;
    padding: 24px;
    height: 100%;
    transition: all 0.3s ease;
    box-shadow: 0 4px 6px -1px rgba(0,0,0,0.05);
}
.affmcg-card:hover { transform: translateY(-4px); box-shadow: 0 15px 30px rgba(0,0,0,0.08); border-color: #2563eb; }
.affmcg-card-icon {
    width: 52px;
    height: 52px;
    border-radius: 12px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 24px;
    margin-bottom: 16px;
    background: rgba(37, 99, 235, 0.1);
    color: #2563eb;
}
.affmcg-card h4 { font-size: 18px; font-weight: 700; color: #0f172a; margin-bottom: 10px; }
.affmcg-card p { font-size: 14px; color: #64748b; line-height: 1.6; margin-bottom: 0; }

.btn-affmcg-primary {
    background: #2563eb;
    color: #ffffff;
    font-weight: 700;
    border-radius: 8px;
    padding: 12px 24px;
    border: none;
    transition: all 0.2s;
}
.btn-affmcg-primary:hover { background: #1d4ed8; color: #ffffff; box-shadow: 0 6px 16px rgba(37, 99, 235, 0.35); }
.btn-affmcg-outline {
    border: 2px solid rgba(255,255,255,0.4);
    color: #ffffff;
    font-weight: 700;
    border-radius: 8px;
    padding: 12px 24px;
    background: transparent;
}
.btn-affmcg-outline:hover { background: #ffffff; color: #1e3a8a; }

@media (max-width: 991px) {
    .affmcg-hero { padding: 45px 0 60px; text-align: center; }
    .affmcg-hero h1 { font-size: 30px; }
    .affmcg-hero-desc { margin: 0 auto 24px; }
    .affmcg-hero-form-card { margin-top: 30px; text-align: left; }
    .rtl-mode .affmcg-hero-form-card { text-align: right; }
}
</style>

<div class="affmcg-page-wrapper" id="affmcgWrapper">

    <!-- HERO SECTION -->
    <section class="affmcg-hero">
        <div class="container">
            <div class="text-center text-lg-start mb-2">
                <div class="lang-toggle-bar">
                    <button type="button" class="lang-pill active" id="btnFmcgLangEn" onclick="switchFmcgLang('en')">🇬🇧 English</button>
                    <button type="button" class="lang-pill" id="btnFmcgLangFa" onclick="switchFmcgLang('fa')">🇦🇫 دری (Farsi)</button>
                    <button type="button" class="lang-pill" id="btnFmcgLangPs" onclick="switchFmcgLang('ps')">🇦🇫 پښتو (Pashto)</button>
                </div>
            </div>

            <div class="row align-items-center">
                <div class="col-lg-7">
                    <div class="affmcg-hero-badge affmcg-trans" 
                        data-en="🏪 FMCG & Fast-Moving Consumer Goods ERP in Afghanistan" 
                        data-fa="🏪 سیستم توزیع مویرگی و پخش FMCG در افغانستان" 
                        data-ps="🏪 په افغانستان کې د ګړندي مصرفي توکو (FMCG) وېش سافټویر">
                        🏪 FMCG & Fast-Moving Consumer Goods ERP in Afghanistan
                    </div>
                    <h1 class="affmcg-trans"
                        data-en="FMCG ERP Software in Afghanistan"
                        data-fa="نرم‌افزار جامع مدیریت توزیع و پخش FMCG در افغانستان"
                        data-ps="په افغانستان کې د FMCG توکو د وېش او خرڅلاو ERP سافټویر">
                        FMCG ERP Software in Afghanistan
                    </h1>
                    <div class="affmcg-hero-sub affmcg-trans"
                        data-en="Route Sales • Van Inventory • Retailer Credit • Master Cartons • Live Sync"
                        data-fa="فروش موتری • انبار سیار موتر • حساب دوکانداران • کارتن و بسته • همگام‌سازی آنلاین"
                        data-ps="د موټرو له لارې وېش • د دوکاندارانو حسابونه • د کارتنونو ذخیره • چټک راپورونه">
                        Route Sales • Van Inventory • Retailer Credit • Master Cartons • Live Sync
                    </div>
                    <p class="affmcg-hero-desc affmcg-trans"
                        data-en="Manage beverage distribution, packaged snacks, hygiene soaps, detergents, cooking oil, tea, and confectionery distribution across supermarkets and neighborhood grocers throughout Afghanistan."
                        data-fa="مدیریت پخش نوشیدنی، خواربار، روغن نباتی، چای، صابون، پودر کالا شویی و شیرینی‌باب به هزاران دکان در سراسر کابل و ولایات با دیجی‌فای."
                        data-ps="د چای، غوړیو، صابونونو، خوراکي توکو او جوسونو وېش دوکان په دوکان په منظمه توګه کنټرول کړئ.">
                        Manage beverage distribution, packaged snacks, hygiene soaps, detergents, cooking oil, tea, and confectionery distribution across supermarkets and neighborhood grocers throughout Afghanistan.
                    </p>
                    <div class="d-flex gap-3 flex-wrap justify-content-center justify-content-lg-start">
                        <a href="#demo-form" class="btn btn-affmcg-primary"><i class="fas fa-truck me-2"></i> <span class="affmcg-trans" data-en="Get FMCG ERP Demo" data-fa="درخواست دموی پخش FMCG" data-ps="د FMCG سافټویر ډیمو">Get FMCG ERP Demo</span></a>
                        <a href="tel:+919876543210" class="btn btn-affmcg-outline"><i class="fas fa-headset me-2"></i> <span class="affmcg-trans" data-en="Talk to Distribution Expert" data-fa="گفتگو با متخصص پخش" data-ps="د وېش متخصص سره اړیکه">Talk to Distribution Expert</span></a>
                    </div>
                </div>

                <!-- Form Card -->
                <div class="col-lg-5" id="demo-form">
                    <div class="affmcg-hero-form-card">
                        <h3 class="affmcg-trans" data-en="Request FMCG ERP Consultation" data-fa="درخواست مشاوره شرکت پخش" data-ps="د توزیع شرکت مشوره">Request FMCG ERP Consultation</h3>
                        <p class="affmcg-trans" data-en="For consumer goods importers, brand agencies & van distributors." data-fa="ویژه واردکنندگان کالای مصرفی، نمایندگی‌های برند و پخش موتری." data-ps="د مصرفي توکو واردوونکو او موټرو وېش شرکتونو لپاره.">For consumer goods importers, brand agencies & van distributors.</p>
                        
                        <form action="send_lead.php" method="POST">
                            <div class="mb-3">
                                <label class="form-label small fw-bold affmcg-trans" data-en="Full Name" data-fa="نام و تخلص" data-ps="بشپړ نوم">Full Name</label>
                                <input type="text" name="name" class="form-control affmcg-trans-ph" placeholder="e.g. Haji Sayed Jalal" data-en-ph="e.g. Haji Sayed Jalal" data-fa-ph="مثال: حاجی سید جلال" data-ps-ph="مثال: حاجي سید جلال" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label small fw-bold affmcg-trans" data-en="FMCG Agency Name" data-fa="نام شرکت پخش / نمایندگی" data-ps="د شرکت نوم">FMCG Agency Name</label>
                                <input type="text" name="company" class="form-control affmcg-trans-ph" placeholder="e.g. Afghan Express FMCG" data-en-ph="e.g. Afghan Express FMCG" data-fa-ph="مثال: شرکت پخش افغان اکسپرس" data-ps-ph="مثال: د افغان ایکسپریس توزیع شرکت" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label small fw-bold affmcg-trans" data-en="WhatsApp / Phone" data-fa="شماره تماس" data-ps="د اړیکې شمېره">WhatsApp / Phone</label>
                                <input type="tel" name="phone" class="form-control" placeholder="+93 7X XXX XXXX" required>
                            </div>
                            <button type="submit" class="btn btn-affmcg-primary w-100 py-2 fw-bold affmcg-trans"
                                data-en="Request Free Demonstration"
                                data-fa="دریافت دمو رایگان"
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
    <section class="affmcg-section bg-dark text-white text-center" style="background: #1e3a8a !important;">
        <div class="container">
            <h2 class="fw-bold mb-3 affmcg-trans" 
                data-en="Automate Fast-Moving Goods Distribution Across Afghanistan" 
                data-fa="توزیع کالاهای مصرفی خود را در سراسر کشور اتوماتیک سازید"
                data-ps="په ټول افغانستان کې د خپلو مصرفي توکو وېش اتومات کړئ">
                Automate Fast-Moving Goods Distribution Across Afghanistan
            </h2>
            <div class="d-flex justify-content-center gap-3 flex-wrap">
                <a href="#demo-form" class="btn btn-affmcg-primary px-4 py-3"><i class="fas fa-calendar-check me-2"></i> <span class="affmcg-trans" data-en="Request FMCG Demo" data-fa="درخواست دمو" data-ps="ډیمو ترلاسه کړئ">Request FMCG Demo</span></a>
                <a href="erp-software-afghanistan.php" class="btn btn-affmcg-outline px-4 py-3"><i class="fas fa-arrow-left me-2"></i> <span class="affmcg-trans" data-en="Back to Afghanistan ERP" data-fa="صفحه اصلی افغانستان" data-ps="د افغانستان عمومي پاڼه">Back to Afghanistan ERP</span></a>
            </div>
        </div>
    </section>

</div>

<script>
function switchFmcgLang(lang) {
    var btnEn = document.getElementById('btnFmcgLangEn');
    var btnFa = document.getElementById('btnFmcgLangFa');
    var btnPs = document.getElementById('btnFmcgLangPs');
    var wrapper = document.getElementById('affmcgWrapper');
    
    localStorage.setItem('digify_af_lang', lang);
    
    [btnEn, btnFa, btnPs].forEach(function(b) { if(b) b.classList.remove('active'); });
    if (lang === 'fa' && btnFa) btnFa.classList.add('active');
    else if (lang === 'ps' && btnPs) btnPs.classList.add('active');
    else if (btnEn) btnEn.classList.add('active');
    
    if (wrapper) {
        if (lang === 'fa' || lang === 'ps') wrapper.classList.add('rtl-mode');
        else wrapper.classList.remove('rtl-mode');
    }
    
    document.querySelectorAll('.affmcg-trans').forEach(function(el) {
        var text = el.getAttribute('data-' + lang);
        if (text) { el.innerHTML = text; }
    });
    document.querySelectorAll('.affmcg-trans-ph').forEach(function(el) {
        var ph = el.getAttribute('data-' + lang + '-ph');
        if (ph) { el.setAttribute('placeholder', ph); }
    });
}

document.addEventListener('DOMContentLoaded', function() {
    var savedLang = localStorage.getItem('digify_af_lang') || 'en';
    switchFmcgLang(savedLang);
});
</script>

<?php include(__DIR__ . '/../../footer.php'); ?>
