<?php 
include_once(__DIR__ . '/../../db.php');
include_once(__DIR__ . '/../../fetch_meta.php');

$pageTitle = "Textile ERP Software in Afghanistan | Fabric Mills & Yarn Inventory";
$pageDescription = "Manage fabric weaving mills, spinning factories, raw yarn inventory, dye chemicals, wholesale fabric rolls, and textile trading in Afghanistan with Digify ERP.";
$pageKeywords = "Textile ERP Afghanistan, Fabric mill software Kabul, Yarn inventory Afghanistan, Weaving mill software Afghanistan, Afghan textile trading ERP";
$pageCanonical = "https://www.digifysoft.in/textile-erp-software-afghanistan";

include(__DIR__ . '/../../top.php');
include(__DIR__ . '/../../header.php');
?>

<style>
.aftx-page-wrapper {
    font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
    color: #1e293b;
    overflow-x: hidden;
}
.rtl-mode { direction: rtl; text-align: right; }
.rtl-mode .text-center { text-align: center !important; }
.rtl-mode .me-2 { margin-left: 0.5rem !important; margin-right: 0 !important; }
.rtl-mode .ms-2 { margin-right: 0.5rem !important; margin-left: 0 !important; }

.aftx-hero {
    background: linear-gradient(135deg, #064e3b 0%, #047857 50%, #059669 100%);
    color: #ffffff;
    padding: 70px 0 85px;
    position: relative;
    overflow: hidden;
    border-bottom: 4px solid #10b981;
}
.aftx-hero::before {
    content: '';
    position: absolute;
    top: -15%;
    right: -10%;
    width: 650px;
    height: 650px;
    background: radial-gradient(circle, rgba(16, 185, 129, 0.28) 0%, rgba(4, 120, 87, 0.15) 50%, rgba(0, 0, 0, 0) 75%);
    border-radius: 50%;
    pointer-events: none;
}
.aftx-hero-badge {
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
.aftx-hero h1 { font-size: 42px; font-weight: 900; line-height: 1.25; margin-bottom: 18px; letter-spacing: -0.5px; }
.aftx-hero-sub { font-size: 18px; font-weight: 600; color: #d1fae5; line-height: 1.5; margin-bottom: 14px; }
.aftx-hero-desc { font-size: 16px; line-height: 1.7; color: rgba(255, 255, 255, 0.88); max-width: 700px; margin-bottom: 28px; }

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
.lang-pill.active { background: #10b981; color: #ffffff; box-shadow: 0 2px 6px rgba(0,0,0,0.2); }

.aftx-hero-form-card {
    background: #ffffff;
    border-radius: 16px;
    padding: 28px 24px;
    box-shadow: 0 20px 45px rgba(0, 0, 0, 0.35);
    color: #1e293b;
    border: 1px solid rgba(255, 255, 255, 0.2);
}
.aftx-hero-form-card h3 { font-size: 20px; font-weight: 800; color: #0f172a; margin-bottom: 6px; }
.aftx-hero-form-card p { font-size: 13px; color: #64748b; margin-bottom: 18px; }

.btn-aftx-primary {
    background: #059669;
    color: #ffffff;
    font-weight: 700;
    border-radius: 8px;
    padding: 12px 24px;
    border: none;
    transition: all 0.2s;
}
.btn-aftx-primary:hover { background: #047857; color: #ffffff; box-shadow: 0 6px 16px rgba(5, 150, 105, 0.35); }
.btn-aftx-outline {
    border: 2px solid rgba(255,255,255,0.4);
    color: #ffffff;
    font-weight: 700;
    border-radius: 8px;
    padding: 12px 24px;
    background: transparent;
}
.btn-aftx-outline:hover { background: #ffffff; color: #064e3b; }

@media (max-width: 991px) {
    .aftx-hero { padding: 45px 0 60px; text-align: center; }
    .aftx-hero h1 { font-size: 30px; }
    .aftx-hero-desc { margin: 0 auto 24px; }
    .aftx-hero-form-card { margin-top: 30px; text-align: left; }
    .rtl-mode .aftx-hero-form-card { text-align: right; }
}
</style>

<div class="aftx-page-wrapper" id="aftxWrapper">

    <!-- HERO SECTION -->
    <section class="aftx-hero">
        <div class="container">
            <div class="text-center text-lg-start mb-2">
                <div class="lang-toggle-bar">
                    <button type="button" class="lang-pill active" id="btnTxLangEn" onclick="switchTxLang('en')">🇬🇧 English</button>
                    <button type="button" class="lang-pill" id="btnTxLangFa" onclick="switchTxLang('fa')">🇦🇫 دری (Farsi)</button>
                    <button type="button" class="lang-pill" id="btnTxLangPs" onclick="switchTxLang('ps')">🇦🇫 پښتو (Pashto)</button>
                </div>
            </div>

            <div class="row align-items-center">
                <div class="col-lg-7">
                    <div class="aftx-hero-badge aftx-trans" 
                        data-en="🧵 Textile & Fabric Weaving ERP in Afghanistan" 
                        data-fa="🧵 سیستم مدیریت فابریکات نساجی، ریسندگی و گدام طاقه‌های پارچه" 
                        data-ps="🧵 په افغانستان کې د نساجۍ او ټوکر اوبدلو فابریکو لپاره ERP">
                        🧵 Textile & Fabric Weaving ERP in Afghanistan
                    </div>
                    <h1 class="aftx-trans"
                        data-en="Textile ERP Software in Afghanistan"
                        data-fa="نرم‌افزار جامع مدیریت صنعت نساجی و تکه‌فروشی در افغانستان"
                        data-ps="په افغانستان کې د نساجۍ او ټوکرانو د تجارت لپاره ERP سافټویر">
                        Textile ERP Software in Afghanistan
                    </h1>
                    <div class="aftx-hero-sub aftx-trans"
                        data-en="Raw Yarn Cones • Dyeing Batches • Fabric Rolls (Thaan) • Weaving Looms"
                        data-fa="کون‌های نخ خام • لات‌های رنگرزی • طاقه‌های پارچه • دستگاه‌های بافندگی"
                        data-ps="د تارونو کونونه • د رنګولو بېچونه • د ټوکر طاقې • د نساجۍ ماشینونه">
                        Raw Yarn Cones • Dyeing Batches • Fabric Rolls (Thaan) • Weaving Looms
                    </div>
                    <p class="aftx-hero-desc aftx-trans"
                        data-en="Manage cotton and synthetic spinning, shuttle/rapier weaving loom efficiency, chemical dye color formulations, finished fabric roll grading, and Mandawi wholesale distribution."
                        data-fa="مدیریت ریسندگی نخ، دستگاه‌های بافندگی، فرمول‌های رنگرزی، درجه‌بندی کیفیت طاقه‌های تکه و توزیع عمده در مندوی کابل، هرات و مزار شریف با دیجی‌فای."
                        data-ps="د پنبې او تارونو ریسندګي، د ټوکر اوبدل، د رنګولو کارخانې او د ټوکرانو عمده خرڅلاو په یو شفاف سیسټم کې ثبت کړئ.">
                        Manage cotton and synthetic spinning, shuttle/rapier weaving loom efficiency, chemical dye color formulations, finished fabric roll grading, and Mandawi wholesale distribution.
                    </p>
                    <div class="d-flex gap-3 flex-wrap justify-content-center justify-content-lg-start">
                        <a href="#demo-form" class="btn btn-aftx-primary"><i class="fas fa-scroll me-2"></i> <span class="aftx-trans" data-en="Get Textile ERP Demo" data-fa="درخواست دموی نساجی" data-ps="د نساجۍ سافټویر ډیمو">Get Textile ERP Demo</span></a>
                        <a href="tel:+919876543210" class="btn btn-aftx-outline"><i class="fas fa-headset me-2"></i> <span class="aftx-trans" data-en="Talk to Textile Expert" data-fa="تماس با کارشناس" data-ps="د متخصص سره اړیکه">Talk to Textile Expert</span></a>
                    </div>
                </div>

                <!-- Form Card -->
                <div class="col-lg-5" id="demo-form">
                    <div class="aftx-hero-form-card">
                        <h3 class="aftx-trans" data-en="Request Textile ERP Demo" data-fa="درخواست مشاوره نساجی" data-ps="د نساجۍ سيستم مشوره">Request Textile ERP Demo</h3>
                        <p class="aftx-trans" data-en="For weaving mills, spinning plants & fabric importers." data-fa="ویژه فابریکات نساجی، ریسندگی و واردکنندگان تکه." data-ps="د نساجۍ فابریکو او ټوکر واردوونکو لپاره.">For weaving mills, spinning plants & fabric importers.</p>
                        
                        <form action="send_lead.php" method="POST">
                            <div class="mb-3">
                                <label class="form-label small fw-bold aftx-trans" data-en="Full Name" data-fa="نام و تخلص" data-ps="بشپړ نوم">Full Name</label>
                                <input type="text" name="name" class="form-control" placeholder="e.g. Haji Qudratullah" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label small fw-bold aftx-trans" data-en="Textile Mill / Company" data-fa="نام فابریکه / شرکت" data-ps="د فابریکې نوم">Textile Mill / Company</label>
                                <input type="text" name="company" class="form-control" placeholder="e.g. Balkh Textile Mills" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label small fw-bold aftx-trans" data-en="WhatsApp / Phone" data-fa="شماره تماس" data-ps="د واټساپ شمېره">WhatsApp / Phone</label>
                                <input type="tel" name="phone" class="form-control" placeholder="+93 7X XXX XXXX" required>
                            </div>
                            <button type="submit" class="btn btn-aftx-primary w-100 py-2 fw-bold aftx-trans"
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
    <section class="aftx-section bg-dark text-white text-center" style="background: #064e3b !important; padding: 60px 0;">
        <div class="container">
            <h2 class="fw-bold mb-3 aftx-trans" 
                data-en="Modernize Fabric Production & Textile Trading in Afghanistan" 
                data-fa="تولید و تجارت تکه و نساجی خود را در افغانستان با دیجی‌فای هوشمند سازید"
                data-ps="په افغانستان کې د خپلو ټوکرانو فابریکه او سوداګري ډیجیټل کړئ">
                Modernize Fabric Production & Textile Trading in Afghanistan
            </h2>
            <div class="d-flex justify-content-center gap-3 flex-wrap">
                <a href="#demo-form" class="btn btn-aftx-primary px-4 py-3"><i class="fas fa-calendar-check me-2"></i> <span class="aftx-trans" data-en="Request Textile Demo" data-fa="درخواست دمو" data-ps="ډیمو ترلاسه کړئ">Request Textile Demo</span></a>
                <a href="erp-software-afghanistan.php" class="btn btn-aftx-outline px-4 py-3"><i class="fas fa-arrow-left me-2"></i> <span class="aftx-trans" data-en="Back to Afghanistan ERP" data-fa="صفحه اصلی افغانستان" data-ps="د افغانستان عمومي پاڼه">Back to Afghanistan ERP</span></a>
            </div>
        </div>
    </section>

</div>

<script>
function switchTxLang(lang) {
    var btnEn = document.getElementById('btnTxLangEn');
    var btnFa = document.getElementById('btnTxLangFa');
    var btnPs = document.getElementById('btnTxLangPs');
    var wrapper = document.getElementById('aftxWrapper');
    
    localStorage.setItem('digify_af_lang', lang);
    
    [btnEn, btnFa, btnPs].forEach(function(b) { if(b) b.classList.remove('active'); });
    if (lang === 'fa' && btnFa) btnFa.classList.add('active');
    else if (lang === 'ps' && btnPs) btnPs.classList.add('active');
    else if (btnEn) btnEn.classList.add('active');
    
    if (wrapper) {
        if (lang === 'fa' || lang === 'ps') wrapper.classList.add('rtl-mode');
        else wrapper.classList.remove('rtl-mode');
    }
    
    document.querySelectorAll('.aftx-trans').forEach(function(el) {
        var text = el.getAttribute('data-' + lang);
        if (text) { el.innerHTML = text; }
    });
}

document.addEventListener('DOMContentLoaded', function() {
    var savedLang = localStorage.getItem('digify_af_lang') || 'en';
    switchTxLang(savedLang);
});
</script>

<?php include(__DIR__ . '/../../footer.php'); ?>
