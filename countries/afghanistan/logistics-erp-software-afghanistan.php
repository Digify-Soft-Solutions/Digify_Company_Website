<?php 
include_once(__DIR__ . '/../../db.php');
include_once(__DIR__ . '/../../fetch_meta.php');

$pageTitle = "Logistics & Transport ERP Software in Afghanistan | Fleet & Freight ERP";
$pageDescription = "Manage freight forwarding, trucking fleets, transit corridors, container waybills, fuel tracking, and border logistics across Afghanistan with Digify Logistics ERP.";
$pageKeywords = "Logistics ERP Afghanistan, Transport software Kabul, Freight forwarding ERP Afghanistan, Trucking software Afghanistan, Fleet management Kabul";
$pageCanonical = "https://www.digifysoft.in/logistics-erp-software-afghanistan";

include(__DIR__ . '/../../top.php');
include(__DIR__ . '/../../header.php');
?>

<style>
.aflg-page-wrapper {
    font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
    color: #1e293b;
    overflow-x: hidden;
}
.rtl-mode { direction: rtl; text-align: right; }
.rtl-mode .text-center { text-align: center !important; }
.rtl-mode .me-2 { margin-left: 0.5rem !important; margin-right: 0 !important; }
.rtl-mode .ms-2 { margin-right: 0.5rem !important; margin-left: 0 !important; }

.aflg-hero {
    background: linear-gradient(135deg, #1e293b 0%, #334155 50%, #475569 100%);
    color: #ffffff;
    padding: 70px 0 85px;
    position: relative;
    overflow: hidden;
    border-bottom: 4px solid #38bdf8;
}
.aflg-hero::before {
    content: '';
    position: absolute;
    top: -15%;
    right: -10%;
    width: 650px;
    height: 650px;
    background: radial-gradient(circle, rgba(56, 189, 248, 0.25) 0%, rgba(71, 85, 105, 0.15) 50%, rgba(0, 0, 0, 0) 75%);
    border-radius: 50%;
    pointer-events: none;
}
.aflg-hero-badge {
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
.aflg-hero h1 { font-size: 42px; font-weight: 900; line-height: 1.25; margin-bottom: 18px; letter-spacing: -0.5px; }
.aflg-hero-sub { font-size: 18px; font-weight: 600; color: #e0f2fe; line-height: 1.5; margin-bottom: 14px; }
.aflg-hero-desc { font-size: 16px; line-height: 1.7; color: rgba(255, 255, 255, 0.88); max-width: 700px; margin-bottom: 28px; }

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
.lang-pill.active { background: #38bdf8; color: #0f172a; box-shadow: 0 2px 6px rgba(0,0,0,0.2); }

.aflg-hero-form-card {
    background: #ffffff;
    border-radius: 16px;
    padding: 28px 24px;
    box-shadow: 0 20px 45px rgba(0, 0, 0, 0.35);
    color: #1e293b;
    border: 1px solid rgba(255, 255, 255, 0.2);
}
.aflg-hero-form-card h3 { font-size: 20px; font-weight: 800; color: #0f172a; margin-bottom: 6px; }
.aflg-hero-form-card p { font-size: 13px; color: #64748b; margin-bottom: 18px; }

.aflg-section { padding: 60px 0; }
.aflg-section-title { font-size: 32px; font-weight: 800; color: #0f172a; margin-bottom: 12px; letter-spacing: -0.3px; }
.aflg-section-sub { font-size: 16px; color: #64748b; max-width: 680px; margin: 0 auto 40px; }

.btn-aflg-primary {
    background: #0284c7;
    color: #ffffff;
    font-weight: 700;
    border-radius: 8px;
    padding: 12px 24px;
    border: none;
    transition: all 0.2s;
}
.btn-aflg-primary:hover { background: #0369a1; color: #ffffff; box-shadow: 0 6px 16px rgba(2, 132, 199, 0.35); }
.btn-aflg-outline {
    border: 2px solid rgba(255,255,255,0.4);
    color: #ffffff;
    font-weight: 700;
    border-radius: 8px;
    padding: 12px 24px;
    background: transparent;
}
.btn-aflg-outline:hover { background: #ffffff; color: #0f172a; }

@media (max-width: 991px) {
    .aflg-hero { padding: 45px 0 60px; text-align: center; }
    .aflg-hero h1 { font-size: 30px; }
    .aflg-hero-desc { margin: 0 auto 24px; }
    .aflg-hero-form-card { margin-top: 30px; text-align: left; }
    .rtl-mode .aflg-hero-form-card { text-align: right; }
}
</style>

<div class="aflg-page-wrapper" id="aflgWrapper">

    <!-- HERO SECTION -->
    <section class="aflg-hero">
        <div class="container">
            <div class="text-center text-lg-start mb-2">
                <div class="lang-toggle-bar">
                    <button type="button" class="lang-pill active" id="btnLgLangEn" onclick="switchLgLang('en')">🇬🇧 English</button>
                    <button type="button" class="lang-pill" id="btnLgLangFa" onclick="switchLgLang('fa')">🇦🇫 دری (Farsi)</button>
                    <button type="button" class="lang-pill" id="btnLgLangPs" onclick="switchLgLang('ps')">🇦🇫 پښتو (Pashto)</button>
                </div>
            </div>

            <div class="row align-items-center">
                <div class="col-lg-7">
                    <div class="aflg-hero-badge aflg-trans" 
                        data-en="🚚 Logistics, Freight & Fleet ERP in Afghanistan" 
                        data-fa="🚚 سیستم پیشرفته ترانسپورت باربری، گمرک و مدیریت موترهای باربری" 
                        data-ps="🚚 په افغانستان کې د بار وړونکو موټرو او ترانسپورتي شرکتونو ERP">
                        🚚 Logistics, Freight & Fleet ERP in Afghanistan
                    </div>
                    <h1 class="aflg-trans"
                        data-en="Logistics & Transport ERP Software in Afghanistan"
                        data-fa="نرم‌افزار جامع مدیریت ترانسپورت و لجستیک در افغانستان"
                        data-ps="په افغانستان کې د ترانسپورت او لوژستیک لپاره ERP سافټویر">
                        Logistics & Transport ERP Software in Afghanistan
                    </h1>
                    <div class="aflg-hero-sub aflg-trans"
                        data-en="Waybills • Driver Accounts • Diesel Fuel Logs • Border Corridors • Freight Ledgers"
                        data-fa="بارنامه موتر • حساب درایوران • مصرف تیل • ترانزیت بنادر • کرایه باربری"
                        data-ps="د موټرو بارنامه • د ډریورانو حساب • د تېلو مصرف • د سرحدونو لګښتونه">
                        Waybills • Driver Accounts • Diesel Fuel Logs • Border Corridors • Freight Ledgers
                    </div>
                    <p class="aflg-hero-desc aflg-trans"
                        data-en="Manage cross-border trucking, provincial transport between Kabul and all 34 provinces, driver advances, toll taxes, fuel consumption, and customer freight billing."
                        data-fa="مدیریت موترهای ترانزیتی و باربری بین کابل و ۳۴ ولایت، پیش‌پرداخت درایور، مصرف دیزل و صدور فاکتور کرایه برای شرکت‌های بازرگانی با دیجی‌فای."
                        data-ps="د کابل او ټولو ولایتونو ترمنځ د بار وړونکو موټرو تګ راتګ، د ډریورانو پیشکي، د تېلو مصرف او د بارونو کرایې په یو منظم پروګرام کې ثبت کړئ.">
                        Manage cross-border trucking, provincial transport between Kabul and all 34 provinces, driver advances, toll taxes, fuel consumption, and customer freight billing.
                    </p>
                    <div class="d-flex gap-3 flex-wrap justify-content-center justify-content-lg-start">
                        <a href="#demo-form" class="btn btn-aflg-primary"><i class="fas fa-truck-moving me-2"></i> <span class="aflg-trans" data-en="Get Logistics Demo" data-fa="درخواست دموی لجستیک" data-ps="د ترانسپورت سافټویر ډیمو">Get Logistics Demo</span></a>
                        <a href="tel:+919876543210" class="btn btn-aflg-outline"><i class="fas fa-headset me-2"></i> <span class="afcr-trans" data-en="Talk to Logistics Expert" data-fa="تماس با کارشناس ترانسپورت" data-ps="د متخصص سره اړیکه">Talk to Logistics Expert</span></a>
                    </div>
                </div>

                <!-- Form Card -->
                <div class="col-lg-5" id="demo-form">
                    <div class="aflg-hero-form-card">
                        <h3 class="aflg-trans" data-en="Request Logistics Consultation" data-fa="درخواست مشاوره ترانسپورت" data-ps="د ترانسپورتي سیسټم مشوره">Request Logistics Consultation</h3>
                        <p class="aflg-trans" data-en="For freight forwarders, fleet owners & transit agencies." data-fa="ویژه شرکت‌های باربری، مالکان موترهای کاماز/ماک و ترانزیت." data-ps="د بار وړونکو موټرو او باربري شرکتونو لپاره.">For freight forwarders, fleet owners & transit agencies.</p>
                        
                        <form action="send_lead.php" method="POST">
                            <div class="mb-3">
                                <label class="form-label small fw-bold aflg-trans" data-en="Full Name" data-fa="نام و تخلص" data-ps="بشپړ نوم">Full Name</label>
                                <input type="text" name="name" class="form-control" placeholder="e.g. Haji Najib" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label small fw-bold aflg-trans" data-en="Transport / Logistics Company" data-fa="نام شرکت ترانسپورتی" data-ps="د ترانسپورت شرکت نوم">Transport / Logistics Company</label>
                                <input type="text" name="company" class="form-control" placeholder="e.g. Afghan Transit Freight" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label small fw-bold aflg-trans" data-en="WhatsApp / Phone" data-fa="شماره تماس" data-ps="د واټساپ شمېره">WhatsApp / Phone</label>
                                <input type="tel" name="phone" class="form-control" placeholder="+93 7X XXX XXXX" required>
                            </div>
                            <button type="submit" class="btn btn-aflg-primary w-100 py-2 fw-bold aflg-trans"
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
    <section class="aflg-section bg-dark text-white text-center" style="background: #1e293b !important;">
        <div class="container">
            <h2 class="fw-bold mb-3 aflg-trans" 
                data-en="Streamline Fleet Management & Cargo Transit in Afghanistan" 
                data-fa="ناوگان ترانسپورتی و باربری خود را در سراسر افغانستان هوشمند سازید"
                data-ps="خپل باربري موټر او ترانسپورتي چارې په دقیق ډول سمبال کړئ">
                Streamline Fleet Management & Cargo Transit in Afghanistan
            </h2>
            <div class="d-flex justify-content-center gap-3 flex-wrap">
                <a href="#demo-form" class="btn btn-aflg-primary px-4 py-3"><i class="fas fa-calendar-check me-2"></i> <span class="aflg-trans" data-en="Request Logistics Demo" data-fa="درخواست دمو" data-ps="ډیمو ترلاسه کړئ">Request Logistics Demo</span></a>
                <a href="erp-software-afghanistan.php" class="btn btn-aflg-outline px-4 py-3"><i class="fas fa-arrow-left me-2"></i> <span class="aflg-trans" data-en="Back to Afghanistan ERP" data-fa="صفحه اصلی افغانستان" data-ps="د افغانستان عمومي پاڼه">Back to Afghanistan ERP</span></a>
            </div>
        </div>
    </section>

</div>

<script>
function switchLgLang(lang) {
    var btnEn = document.getElementById('btnLgLangEn');
    var btnFa = document.getElementById('btnLgLangFa');
    var btnPs = document.getElementById('btnLgLangPs');
    var wrapper = document.getElementById('aflgWrapper');
    
    localStorage.setItem('digify_af_lang', lang);
    
    [btnEn, btnFa, btnPs].forEach(function(b) { if(b) b.classList.remove('active'); });
    if (lang === 'fa' && btnFa) btnFa.classList.add('active');
    else if (lang === 'ps' && btnPs) btnPs.classList.add('active');
    else if (btnEn) btnEn.classList.add('active');
    
    if (wrapper) {
        if (lang === 'fa' || lang === 'ps') wrapper.classList.add('rtl-mode');
        else wrapper.classList.remove('rtl-mode');
    }
    
    document.querySelectorAll('.aflg-trans').forEach(function(el) {
        var text = el.getAttribute('data-' + lang);
        if (text) { el.innerHTML = text; }
    });
}

document.addEventListener('DOMContentLoaded', function() {
    var savedLang = localStorage.getItem('digify_af_lang') || 'en';
    switchLgLang(savedLang);
});
</script>

<?php include(__DIR__ . '/../../footer.php'); ?>
