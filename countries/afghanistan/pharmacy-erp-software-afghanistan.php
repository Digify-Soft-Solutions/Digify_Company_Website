<?php 
include_once(__DIR__ . '/../../db.php');
include_once(__DIR__ . '/../../fetch_meta.php');

$pageTitle = "Pharmacy ERP Software in Afghanistan | Medicine & Healthcare Retail";
$pageDescription = "Manage pharmacies, medicine distributors, batch tracking, expiry date alerts, generic names, wholesale pharmaceutical supply, and POS billing in Afghanistan with Digify ERP.";
$pageKeywords = "Pharmacy ERP Afghanistan, Medicine inventory software Kabul, Pharmaceutical software Afghanistan, Pharmacy POS Kabul, Drug store ERP Afghanistan";
$pageCanonical = "https://www.digifysoft.in/pharmacy-erp-software-afghanistan";

include(__DIR__ . '/../../top.php');
include(__DIR__ . '/../../header.php');
?>

<style>
.afph-page-wrapper {
    font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
    color: #1e293b;
    overflow-x: hidden;
}
.rtl-mode { direction: rtl; text-align: right; }
.rtl-mode .text-center { text-align: center !important; }
.rtl-mode .me-2 { margin-left: 0.5rem !important; margin-right: 0 !important; }
.rtl-mode .ms-2 { margin-right: 0.5rem !important; margin-left: 0 !important; }

.afph-hero {
    background: linear-gradient(135deg, #0f766e 0%, #0d9488 50%, #14b8a6 100%);
    color: #ffffff;
    padding: 70px 0 85px;
    position: relative;
    overflow: hidden;
    border-bottom: 4px solid #5eead4;
}
.afph-hero::before {
    content: '';
    position: absolute;
    top: -15%;
    right: -10%;
    width: 650px;
    height: 650px;
    background: radial-gradient(circle, rgba(94, 234, 212, 0.28) 0%, rgba(20, 184, 166, 0.15) 50%, rgba(0, 0, 0, 0) 75%);
    border-radius: 50%;
    pointer-events: none;
}
.afph-hero-badge {
    background: rgba(94, 234, 212, 0.25);
    border: 1px solid rgba(204, 251, 241, 0.4);
    color: #ccfbf1;
    font-size: 13px;
    font-weight: 700;
    padding: 7px 18px;
    border-radius: 30px;
    display: inline-flex;
    align-items: center;
    gap: 8px;
    margin-bottom: 18px;
}
.afph-hero h1 { font-size: 42px; font-weight: 900; line-height: 1.25; margin-bottom: 18px; letter-spacing: -0.5px; }
.afph-hero-sub { font-size: 18px; font-weight: 600; color: #f0fdfa; line-height: 1.5; margin-bottom: 14px; }
.afph-hero-desc { font-size: 16px; line-height: 1.7; color: rgba(255, 255, 255, 0.88); max-width: 700px; margin-bottom: 28px; }

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
.lang-pill.active { background: #5eead4; color: #0f766e; box-shadow: 0 2px 6px rgba(0,0,0,0.2); }

.afph-hero-form-card {
    background: #ffffff;
    border-radius: 16px;
    padding: 28px 24px;
    box-shadow: 0 20px 45px rgba(0, 0, 0, 0.35);
    color: #1e293b;
    border: 1px solid rgba(255, 255, 255, 0.2);
}
.afph-hero-form-card h3 { font-size: 20px; font-weight: 800; color: #0f172a; margin-bottom: 6px; }
.afph-hero-form-card p { font-size: 13px; color: #64748b; margin-bottom: 18px; }

.afph-section { padding: 60px 0; }
.afph-section-title { font-size: 32px; font-weight: 800; color: #0f172a; margin-bottom: 12px; letter-spacing: -0.3px; }
.afph-section-sub { font-size: 16px; color: #64748b; max-width: 680px; margin: 0 auto 40px; }

.afph-card {
    background: #ffffff;
    border: 1px solid #e2e8f0;
    border-radius: 14px;
    padding: 24px;
    height: 100%;
    transition: all 0.3s ease;
    box-shadow: 0 4px 6px -1px rgba(0,0,0,0.05);
}
.afph-card:hover { transform: translateY(-4px); box-shadow: 0 15px 30px rgba(0,0,0,0.08); border-color: #0d9488; }
.afph-card-icon {
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
.afph-card h4 { font-size: 18px; font-weight: 700; color: #0f172a; margin-bottom: 10px; }
.afph-card p { font-size: 14px; color: #64748b; line-height: 1.6; margin-bottom: 0; }

.btn-afph-primary {
    background: #0d9488;
    color: #ffffff;
    font-weight: 700;
    border-radius: 8px;
    padding: 12px 24px;
    border: none;
    transition: all 0.2s;
}
.btn-afph-primary:hover { background: #0f766e; color: #ffffff; box-shadow: 0 6px 16px rgba(13, 148, 136, 0.35); }
.btn-afph-outline {
    border: 2px solid rgba(255,255,255,0.4);
    color: #ffffff;
    font-weight: 700;
    border-radius: 8px;
    padding: 12px 24px;
    background: transparent;
}
.btn-afph-outline:hover { background: #ffffff; color: #0f766e; }

@media (max-width: 991px) {
    .afph-hero { padding: 45px 0 60px; text-align: center; }
    .afph-hero h1 { font-size: 30px; }
    .afph-hero-desc { margin: 0 auto 24px; }
    .afph-hero-form-card { margin-top: 30px; text-align: left; }
    .rtl-mode .afph-hero-form-card { text-align: right; }
}
</style>

<div class="afph-page-wrapper" id="afphWrapper">

    <!-- HERO SECTION -->
    <section class="afph-hero">
        <div class="container">
            <div class="text-center text-lg-start mb-2">
                <div class="lang-toggle-bar">
                    <button type="button" class="lang-pill active" id="btnPhLangEn" onclick="switchPhLang('en')">🇬🇧 English</button>
                    <button type="button" class="lang-pill" id="btnPhLangFa" onclick="switchPhLang('fa')">🇦🇫 دری (Farsi)</button>
                    <button type="button" class="lang-pill" id="btnPhLangPs" onclick="switchPhLang('ps')">🇦🇫 پښتو (Pashto)</button>
                </div>
            </div>

            <div class="row align-items-center">
                <div class="col-lg-7">
                    <div class="afph-hero-badge afph-trans" 
                        data-en="💊 Pharmacy, Medicine & Clinic ERP in Afghanistan" 
                        data-fa="💊 سیستم جامع مدیریت درملتون و شرکت‌های دارویی در افغانستان" 
                        data-ps="💊 په افغانستان کې د درملتونونو او درملو وېشلو ERP">
                        💊 Pharmacy, Medicine & Clinic ERP in Afghanistan
                    </div>
                    <h1 class="afph-trans"
                        data-en="Pharmacy ERP Software in Afghanistan"
                        data-fa="نرم‌افزار جامع مدیریت درملتون و ادویه در افغانستان"
                        data-ps="په افغانستان کې د درملتون او ادویې پلورلو لپاره ERP سافټویر">
                        Pharmacy ERP Software in Afghanistan
                    </h1>
                    <div class="afph-hero-sub afph-trans"
                        data-en="Batch Tracking • Expiry Alerts • Generic Composition • Hospital Wholesale"
                        data-fa="ردیابی بچ ادویه • هشدار تاریخ انقضا • فرمول ژنریک ادویه • فروش عمده به شفاخانه‌ها"
                        data-ps="د ادویو بیچونه • د تاریخ پای خبرداری • جنریک نومونه • شفاخانو ته عمده وېش">
                        Batch Tracking • Expiry Alerts • Generic Composition • Hospital Wholesale
                    </div>
                    <p class="afph-hero-desc afph-trans"
                        data-en="Manage retail pharmacies, wholesale drug importers, clinics, hospital supplies, expiry dates, batch numbers, supplier balances, and fast POS billing."
                        data-fa="مدیریت درملتون‌های پرچون، شرکت‌های تورید ادویه، شفاخانه‌ها، کنترل تاریخ مصرف و انقضا، ثبت شماره بچ و فروش سریع با بارکدخوان."
                        data-ps="د درملتونونو، درمل واردوونکو شرکتونو، د تاریخ تېرېدو څارنه او د درملو خرڅلاو ټول په یو منظم سافټویر کې سمبال کړئ.">
                        Manage retail pharmacies, wholesale drug importers, clinics, hospital supplies, expiry dates, batch numbers, supplier balances, and fast POS billing.
                    </p>
                    <div class="d-flex gap-3 flex-wrap justify-content-center justify-content-lg-start">
                        <a href="#demo-form" class="btn btn-afph-primary"><i class="fas fa-pills me-2"></i> <span class="afph-trans" data-en="Get Pharmacy ERP Demo" data-fa="درخواست دموی درملتون" data-ps="د درملتون سافټویر ډیمو">Get Pharmacy ERP Demo</span></a>
                        <a href="tel:+919876543210" class="btn btn-afph-outline"><i class="fas fa-headset me-2"></i> <span class="afph-trans" data-en="Talk to Healthcare Specialist" data-fa="تماس با کارشناس درملتون" data-ps="د متخصص سره اړیکه">Talk to Healthcare Specialist</span></a>
                    </div>
                </div>

                <!-- Form Card -->
                <div class="col-lg-5" id="demo-form">
                    <div class="afph-hero-form-card">
                        <h3 class="afph-trans" data-en="Request Pharmacy Demo" data-fa="درخواست مشاوره درملتون" data-ps="د درملتون ډیمو غوښتنه">Request Pharmacy Demo</h3>
                        <p class="afph-trans" data-en="For retail pharmacies, medicine wholesalers & clinics." data-fa="ویژه درملتون‌ها، شرکت‌های توزیع ادویه و کلینیک‌ها." data-ps="د درملتونونو او د درملو د شرکتونو لپاره.">For retail pharmacies, medicine wholesalers & clinics.</p>
                        
                        <form action="send_lead.php" method="POST">
                            <div class="mb-3">
                                <label class="form-label small fw-bold afph-trans" data-en="Full Name" data-fa="نام و تخلص" data-ps="بشپړ نوم">Full Name</label>
                                <input type="text" name="name" class="form-control afph-trans-ph" placeholder="e.g. Dr. Mohammad Omar" data-en-ph="e.g. Dr. Mohammad Omar" data-fa-ph="مثال: داکتر محمد عمر" data-ps-ph="مثال: ډاکټر محمد عمر" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label small fw-bold afph-trans" data-en="Pharmacy / Company Name" data-fa="نام درملتون / شرکت ادویه" data-ps="د درملتون نوم">Pharmacy / Company Name</label>
                                <input type="text" name="company" class="form-control afph-trans-ph" placeholder="e.g. Shifa Central Pharmacy" data-en-ph="e.g. Shifa Central Pharmacy" data-fa-ph="مثال: درملتون شفا" data-ps-ph="مثال: د شفا مرکزي درملتون" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label small fw-bold afph-trans" data-en="WhatsApp / Phone" data-fa="شماره واتساپ" data-ps="د واټساپ شمېره">WhatsApp / Phone</label>
                                <input type="tel" name="phone" class="form-control" placeholder="+93 7X XXX XXXX" required>
                            </div>
                            <button type="submit" class="btn btn-afph-primary w-100 py-2 fw-bold afph-trans"
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

    <!-- FINAL CTA -->
    <section class="afph-section bg-dark text-white text-center" style="background: #0f766e !important;">
        <div class="container">
            <h2 class="fw-bold mb-3 afph-trans" 
                data-en="Modernize Your Pharmacy Operations in Afghanistan" 
                data-fa="درملتون و شرکت توزیع ادویه خود را دقیق و مدرن سازید"
                data-ps="خپل درملتون او د ادویو کار په خوندي توګه اداره کړئ">
                Modernize Your Pharmacy Operations in Afghanistan
            </h2>
            <div class="d-flex justify-content-center gap-3 flex-wrap">
                <a href="#demo-form" class="btn btn-afph-primary px-4 py-3"><i class="fas fa-calendar-check me-2"></i> <span class="afph-trans" data-en="Request Pharmacy Demo" data-fa="درخواست دمو" data-ps="ډیمو ترلاسه کړئ">Request Pharmacy Demo</span></a>
                <a href="erp-software-afghanistan.php" class="btn btn-afph-outline px-4 py-3"><i class="fas fa-arrow-left me-2"></i> <span class="afph-trans" data-en="Back to Afghanistan ERP" data-fa="صفحه اصلی افغانستان" data-ps="د افغانستان عمومي پاڼه">Back to Afghanistan ERP</span></a>
            </div>
        </div>
    </section>

</div>

<script>
function switchPhLang(lang) {
    var btnEn = document.getElementById('btnPhLangEn');
    var btnFa = document.getElementById('btnPhLangFa');
    var btnPs = document.getElementById('btnPhLangPs');
    var wrapper = document.getElementById('afphWrapper');
    
    localStorage.setItem('digify_af_lang', lang);
    
    [btnEn, btnFa, btnPs].forEach(function(b) { if(b) b.classList.remove('active'); });
    if (lang === 'fa' && btnFa) btnFa.classList.add('active');
    else if (lang === 'ps' && btnPs) btnPs.classList.add('active');
    else if (btnEn) btnEn.classList.add('active');
    
    if (wrapper) {
        if (lang === 'fa' || lang === 'ps') wrapper.classList.add('rtl-mode');
        else wrapper.classList.remove('rtl-mode');
    }
    
    document.querySelectorAll('.afph-trans').forEach(function(el) {
        var text = el.getAttribute('data-' + lang);
        if (text) { el.innerHTML = text; }
    });
    document.querySelectorAll('.afph-trans-ph').forEach(function(el) {
        var ph = el.getAttribute('data-' + lang + '-ph');
        if (ph) { el.setAttribute('placeholder', ph); }
    });
}

document.addEventListener('DOMContentLoaded', function() {
    var savedLang = localStorage.getItem('digify_af_lang') || 'en';
    switchPhLang(savedLang);
});
</script>

<?php include(__DIR__ . '/../../footer.php'); ?>
