<?php 
include_once(__DIR__ . '/../../db.php');
include_once(__DIR__ . '/../../fetch_meta.php');

$pageTitle = "Distribution ERP Software in Afghanistan | Supply Chain & Depot ERP";
$pageDescription = "Manage large-scale distribution networks, multi-depot stock transfers, route van sales, and B2B receivables in Afghanistan with Digify Distribution ERP.";
$pageKeywords = "Distribution ERP Afghanistan, Supply chain software Kabul, Depot management software Afghanistan, B2B distribution Kabul, Afghan supply chain ERP";
$pageCanonical = "https://www.digifysoft.in/distribution-erp-software-afghanistan";

include(__DIR__ . '/../../top.php');
include(__DIR__ . '/../../header.php');
?>

<style>
.afds-page-wrapper {
    font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
    color: #1e293b;
    overflow-x: hidden;
}
.rtl-mode { direction: rtl; text-align: right; }
.rtl-mode .text-center { text-align: center !important; }
.rtl-mode .me-2 { margin-left: 0.5rem !important; margin-right: 0 !important; }
.rtl-mode .ms-2 { margin-right: 0.5rem !important; margin-left: 0 !important; }

.afds-hero {
    background: linear-gradient(135deg, #0f172a 0%, #1e293b 50%, #0369a1 100%);
    color: #ffffff;
    padding: 70px 0 85px;
    position: relative;
    overflow: hidden;
    border-bottom: 4px solid #0284c7;
}
.afds-hero::before {
    content: '';
    position: absolute;
    top: -15%;
    right: -10%;
    width: 650px;
    height: 650px;
    background: radial-gradient(circle, rgba(2, 132, 199, 0.28) 0%, rgba(30, 41, 59, 0.15) 50%, rgba(0, 0, 0, 0) 75%);
    border-radius: 50%;
    pointer-events: none;
}
.afds-hero-badge {
    background: rgba(2, 132, 199, 0.25);
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
.afds-hero h1 { font-size: 42px; font-weight: 900; line-height: 1.25; margin-bottom: 18px; letter-spacing: -0.5px; }
.afds-hero-sub { font-size: 18px; font-weight: 600; color: #e0f2fe; line-height: 1.5; margin-bottom: 14px; }
.afds-hero-desc { font-size: 16px; line-height: 1.7; color: rgba(255, 255, 255, 0.88); max-width: 700px; margin-bottom: 28px; }

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
.lang-pill.active { background: #0284c7; color: #ffffff; box-shadow: 0 2px 6px rgba(0,0,0,0.2); }

.afds-hero-form-card {
    background: #ffffff;
    border-radius: 16px;
    padding: 28px 24px;
    box-shadow: 0 20px 45px rgba(0, 0, 0, 0.35);
    color: #1e293b;
    border: 1px solid rgba(255, 255, 255, 0.2);
}
.afds-hero-form-card h3 { font-size: 20px; font-weight: 800; color: #0f172a; margin-bottom: 6px; }
.afds-hero-form-card p { font-size: 13px; color: #64748b; margin-bottom: 18px; }

.btn-afds-primary {
    background: #0284c7;
    color: #ffffff;
    font-weight: 700;
    border-radius: 8px;
    padding: 12px 24px;
    border: none;
    transition: all 0.2s;
}
.btn-afds-primary:hover { background: #0369a1; color: #ffffff; box-shadow: 0 6px 16px rgba(2, 132, 199, 0.35); }
.btn-afds-outline {
    border: 2px solid rgba(255,255,255,0.4);
    color: #ffffff;
    font-weight: 700;
    border-radius: 8px;
    padding: 12px 24px;
    background: transparent;
}
.btn-afds-outline:hover { background: #ffffff; color: #0f172a; }

@media (max-width: 991px) {
    .afds-hero { padding: 45px 0 60px; text-align: center; }
    .afds-hero h1 { font-size: 30px; }
    .afds-hero-desc { margin: 0 auto 24px; }
    .afds-hero-form-card { margin-top: 30px; text-align: left; }
    .rtl-mode .afds-hero-form-card { text-align: right; }
}
</style>

<div class="afds-page-wrapper" id="afdsWrapper">

    <!-- HERO SECTION -->
    <section class="afds-hero">
        <div class="container">
            <div class="text-center text-lg-start mb-2">
                <div class="lang-toggle-bar">
                    <button type="button" class="lang-pill active" id="btnDsLangEn" onclick="switchDsLang('en')">🇬🇧 English</button>
                    <button type="button" class="lang-pill" id="btnDsLangFa" onclick="switchDsLang('fa')">🇦🇫 دری (Farsi)</button>
                    <button type="button" class="lang-pill" id="btnDsLangPs" onclick="switchDsLang('ps')">🇦🇫 پښتو (Pashto)</button>
                </div>
            </div>

            <div class="row align-items-center">
                <div class="col-lg-7">
                    <div class="afds-hero-badge afds-trans" 
                        data-en="🚚 Supply Chain & Regional Distribution ERP in Afghanistan" 
                        data-fa="🚚 سیستم پیشرفته شبکه توزیع، گدام‌های منطقه‌ای و زنجیره تأمین در افغانستان" 
                        data-ps="🚚 په افغانستان کې د سیمه ییزو ګودامونو او د وېشلو د شبکې ERP">
                        🚚 Supply Chain & Regional Distribution ERP in Afghanistan
                    </div>
                    <h1 class="afds-trans"
                        data-en="Distribution ERP Software in Afghanistan"
                        data-fa="نرم‌افزار جامع مدیریت شبکه توزیع و پخش در افغانستان"
                        data-ps="په افغانستان کې د توکو د وېش او اکمالاتو لپاره ERP سافټویر">
                        Distribution ERP Software in Afghanistan
                    </h1>
                    <div class="afds-hero-sub afds-trans"
                        data-en="Central Godown • Regional Depots • Stock Requisitions • Fleet Dispatch"
                        data-fa="گدام مرکزی • دیپوهای ولایتی • حواله تقاضای جنس • بارگیری ناوگان موتری"
                        data-ps="مرکزي ګودام • ولایتي ډیپوګانې • د مالونو حوالې • د موټرو بارګیري">
                        Central Godown • Regional Depots • Stock Requisitions • Fleet Dispatch
                    </div>
                    <p class="afds-hero-desc afds-trans"
                        data-en="Connect your central warehouse in Kabul with provincial distribution hubs in Herat, Mazar, Kandahar, Kunduz, and Jalalabad with live stock visibility and automated reordering."
                        data-fa="ارتباط گدام مرکزی کابل با مراکز پخش ولایات هرات، بلخ، قندهار، کندز و ننگرهار با دید زنده بر موجودی و ثبت خودکار درخواست کالا با دیجی‌فای."
                        data-ps="په کابل او ولایتونو کې د خپلو مرکزي او سیمه ییزو ګودامونو اړیکه وساتئ او د مالونو موجودي په شفاف ډول وګورئ.">
                        Connect your central warehouse in Kabul with provincial distribution hubs in Herat, Mazar, Kandahar, Kunduz, and Jalalabad with live stock visibility and automated reordering.
                    </p>
                    <div class="d-flex gap-3 flex-wrap justify-content-center justify-content-lg-start">
                        <a href="#demo-form" class="btn btn-afds-primary"><i class="fas fa-network-wired me-2"></i> <span class="afds-trans" data-en="Get Distribution Demo" data-fa="درخواست دموی شبکه توزیع" data-ps="د وېش سافټویر ډیمو">Get Distribution Demo</span></a>
                        <a href="tel:+919876543210" class="btn btn-afds-outline"><i class="fas fa-headset me-2"></i> <span class="afds-trans" data-en="Talk to Supply Chain Expert" data-fa="تماس با کارشناس" data-ps="د متخصص سره اړیکه">Talk to Supply Chain Expert</span></a>
                    </div>
                </div>

                <!-- Form Card -->
                <div class="col-lg-5" id="demo-form">
                    <div class="afds-hero-form-card">
                        <h3 class="afds-trans" data-en="Request Distribution Consultation" data-fa="درخواست مشاوره شبکه پخش" data-ps="د وېش سيستم مشوره">Request Distribution Consultation</h3>
                        <p class="afds-trans" data-en="For master distributors & regional supply hubs." data-fa="ویژه شرکت‌های توزیع سراسری و گدام‌های مرکزی." data-ps="د عمومي وېشونکو او لویو شرکتونو لپاره.">For master distributors & regional supply hubs.</p>
                        
                        <form action="send_lead.php" method="POST">
                            <div class="mb-3">
                                <label class="form-label small fw-bold afds-trans" data-en="Full Name" data-fa="نام و تخلص" data-ps="بشپړ نوم">Full Name</label>
                                <input type="text" name="name" class="form-control" placeholder="e.g. Haji Esmatullah" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label small fw-bold afds-trans" data-en="Company Name" data-fa="نام شرکت توزیع" data-ps="د شرکت نوم">Company Name</label>
                                <input type="text" name="company" class="form-control" placeholder="e.g. Ariana National Distribution" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label small fw-bold afds-trans" data-en="WhatsApp / Phone" data-fa="شماره تماس" data-ps="د واټساپ شمېره">WhatsApp / Phone</label>
                                <input type="tel" name="phone" class="form-control" placeholder="+93 7X XXX XXXX" required>
                            </div>
                            <button type="submit" class="btn btn-afds-primary w-100 py-2 fw-bold afds-trans"
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
    <section class="afds-section bg-dark text-white text-center" style="background: #0f172a !important; padding: 60px 0;">
        <div class="container">
            <h2 class="fw-bold mb-3 afds-trans" 
                data-en="Control Your Nationwide Distribution Network with Digify" 
                data-fa="شبکه توزیع سراسری خود را در افغانستان با دیجی‌فای دقیق مدیریت کنید"
                data-ps="په ټول افغانستان کې خپل د وېش شبکه منظمه او کنټرول کړئ">
                Control Your Nationwide Distribution Network with Digify
            </h2>
            <div class="d-flex justify-content-center gap-3 flex-wrap">
                <a href="#demo-form" class="btn btn-afds-primary px-4 py-3"><i class="fas fa-calendar-check me-2"></i> <span class="afds-trans" data-en="Request Distribution Demo" data-fa="درخواست دمو" data-ps="ډیمو ترلاسه کړئ">Request Distribution Demo</span></a>
                <a href="erp-software-afghanistan.php" class="btn btn-afds-outline px-4 py-3"><i class="fas fa-arrow-left me-2"></i> <span class="afds-trans" data-en="Back to Afghanistan ERP" data-fa="صفحه اصلی افغانستان" data-ps="د افغانستان عمومي پاڼه">Back to Afghanistan ERP</span></a>
            </div>
        </div>
    </section>

</div>

<script>
function switchDsLang(lang) {
    var btnEn = document.getElementById('btnDsLangEn');
    var btnFa = document.getElementById('btnDsLangFa');
    var btnPs = document.getElementById('btnDsLangPs');
    var wrapper = document.getElementById('afdsWrapper');
    
    localStorage.setItem('digify_af_lang', lang);
    
    [btnEn, btnFa, btnPs].forEach(function(b) { if(b) b.classList.remove('active'); });
    if (lang === 'fa' && btnFa) btnFa.classList.add('active');
    else if (lang === 'ps' && btnPs) btnPs.classList.add('active');
    else if (btnEn) btnEn.classList.add('active');
    
    if (wrapper) {
        if (lang === 'fa' || lang === 'ps') wrapper.classList.add('rtl-mode');
        else wrapper.classList.remove('rtl-mode');
    }
    
    document.querySelectorAll('.afds-trans').forEach(function(el) {
        var text = el.getAttribute('data-' + lang);
        if (text) { el.innerHTML = text; }
    });
}

document.addEventListener('DOMContentLoaded', function() {
    var savedLang = localStorage.getItem('digify_af_lang') || 'en';
    switchDsLang(savedLang);
});
</script>

<?php include(__DIR__ . '/../../footer.php'); ?>
