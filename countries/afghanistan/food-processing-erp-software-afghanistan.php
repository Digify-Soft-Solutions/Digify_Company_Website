<?php 
include_once(__DIR__ . '/../../db.php');
include_once(__DIR__ . '/../../fetch_meta.php');

$pageTitle = "Food Processing ERP Software in Afghanistan | Agri-Food Production ERP";
$pageDescription = "Manage food processing plants, flour mills, rice processing, fruit juices, dairy, bakery, and packaging in Afghanistan with Digify ERP.";
$pageKeywords = "Food processing ERP Afghanistan, Flour mill software Afghanistan, Rice mill ERP Kabul, Dairy processing software Afghanistan, Fruit processing ERP Afghanistan";
$pageCanonical = "https://www.digifysoft.in/food-processing-erp-software-afghanistan";

include(__DIR__ . '/../../top.php');
include(__DIR__ . '/../../header.php');
?>

<style>
.affp-page-wrapper {
    font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
    color: #1e293b;
    overflow-x: hidden;
}
.rtl-mode { direction: rtl; text-align: right; }
.rtl-mode .text-center { text-align: center !important; }
.rtl-mode .me-2 { margin-left: 0.5rem !important; margin-right: 0 !important; }
.rtl-mode .ms-2 { margin-right: 0.5rem !important; margin-left: 0 !important; }

.affp-hero {
    background: linear-gradient(135deg, #14532d 0%, #15803d 50%, #16a34a 100%);
    color: #ffffff;
    padding: 70px 0 85px;
    position: relative;
    overflow: hidden;
    border-bottom: 4px solid #4ade80;
}
.affp-hero::before {
    content: '';
    position: absolute;
    top: -15%;
    right: -10%;
    width: 650px;
    height: 650px;
    background: radial-gradient(circle, rgba(74, 222, 128, 0.28) 0%, rgba(22, 163, 74, 0.15) 50%, rgba(0, 0, 0, 0) 75%);
    border-radius: 50%;
    pointer-events: none;
}
.affp-hero-badge {
    background: rgba(74, 222, 128, 0.25);
    border: 1px solid rgba(187, 247, 208, 0.4);
    color: #bbf7d0;
    font-size: 13px;
    font-weight: 700;
    padding: 7px 18px;
    border-radius: 30px;
    display: inline-flex;
    align-items: center;
    gap: 8px;
    margin-bottom: 18px;
}
.affp-hero h1 {
    font-size: 42px;
    font-weight: 900;
    line-height: 1.25;
    margin-bottom: 18px;
    letter-spacing: -0.5px;
}
.affp-hero-sub {
    font-size: 18px;
    font-weight: 600;
    color: #dcfce7;
    line-height: 1.5;
    margin-bottom: 14px;
}
.affp-hero-desc {
    font-size: 16px;
    line-height: 1.7;
    color: rgba(255, 255, 255, 0.88);
    max-width: 700px;
    margin-bottom: 28px;
}

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
    background: #4ade80;
    color: #14532d;
    box-shadow: 0 2px 6px rgba(0,0,0,0.2);
}

.affp-hero-form-card {
    background: #ffffff;
    border-radius: 16px;
    padding: 28px 24px;
    box-shadow: 0 20px 45px rgba(0, 0, 0, 0.35);
    color: #1e293b;
    border: 1px solid rgba(255, 255, 255, 0.2);
}
.affp-hero-form-card h3 { font-size: 20px; font-weight: 800; color: #0f172a; margin-bottom: 6px; }
.affp-hero-form-card p { font-size: 13px; color: #64748b; margin-bottom: 18px; }

.affp-section { padding: 60px 0; }
.affp-section-title { font-size: 32px; font-weight: 800; color: #0f172a; margin-bottom: 12px; letter-spacing: -0.3px; }
.affp-section-sub { font-size: 16px; color: #64748b; max-width: 680px; margin: 0 auto 40px; }

.affp-card {
    background: #ffffff;
    border: 1px solid #e2e8f0;
    border-radius: 14px;
    padding: 24px;
    height: 100%;
    transition: all 0.3s ease;
    box-shadow: 0 4px 6px -1px rgba(0,0,0,0.05);
}
.affp-card:hover { transform: translateY(-4px); box-shadow: 0 15px 30px rgba(0,0,0,0.08); border-color: #16a34a; }
.affp-card-icon {
    width: 52px;
    height: 52px;
    border-radius: 12px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 24px;
    margin-bottom: 16px;
    background: rgba(22, 163, 74, 0.1);
    color: #16a34a;
}
.affp-card h4 { font-size: 18px; font-weight: 700; color: #0f172a; margin-bottom: 10px; }
.affp-card p { font-size: 14px; color: #64748b; line-height: 1.6; margin-bottom: 0; }

.btn-affp-primary {
    background: #16a34a;
    color: #ffffff;
    font-weight: 700;
    border-radius: 8px;
    padding: 12px 24px;
    border: none;
    transition: all 0.2s;
}
.btn-affp-primary:hover { background: #15803d; color: #ffffff; box-shadow: 0 6px 16px rgba(22, 163, 74, 0.35); }
.btn-affp-outline {
    border: 2px solid rgba(255,255,255,0.4);
    color: #ffffff;
    font-weight: 700;
    border-radius: 8px;
    padding: 12px 24px;
    background: transparent;
}
.btn-affp-outline:hover { background: #ffffff; color: #14532d; }

@media (max-width: 991px) {
    .affp-hero { padding: 45px 0 60px; text-align: center; }
    .affp-hero h1 { font-size: 30px; }
    .affp-hero-desc { margin: 0 auto 24px; }
    .affp-hero-form-card { margin-top: 30px; text-align: left; }
    .rtl-mode .affp-hero-form-card { text-align: right; }
}
</style>

<div class="affp-page-wrapper" id="affpWrapper">

    <!-- HERO SECTION -->
    <section class="affp-hero">
        <div class="container">
            <div class="text-center text-lg-start mb-2">
                <div class="lang-toggle-bar">
                    <button type="button" class="lang-pill active" id="btnFpLangEn" onclick="switchFpLang('en')">🇬🇧 English</button>
                    <button type="button" class="lang-pill" id="btnFpLangFa" onclick="switchFpLang('fa')">🇦🇫 دری (Farsi)</button>
                    <button type="button" class="lang-pill" id="btnFpLangPs" onclick="switchFpLang('ps')">🇦🇫 پښتو (Pashto)</button>
                </div>
            </div>

            <div class="row align-items-center">
                <div class="col-lg-7">
                    <div class="affp-hero-badge affp-trans" 
                        data-en="🍎 Food Processing & Packaging ERP for Afghanistan" 
                        data-fa="🍎 نرم‌افزار تخصصی صنایع غذایی و بسته‌بندی در افغانستان" 
                        data-ps="🍎 په افغانستان کې د خوراکي توکو پروسس او بسته بندۍ ERP">
                        🍎 Food Processing & Packaging ERP for Afghanistan
                    </div>
                    <h1 class="affp-trans"
                        data-en="Food Processing ERP Software in Afghanistan"
                        data-fa="نرم‌افزار جامع مدیریت فابریکات صنایع غذایی در افغانستان"
                        data-ps="په افغانستان کې د خوراکي تولیداتو او پروسس لپاره ERP سافټویر">
                        Food Processing ERP Software in Afghanistan
                    </h1>
                    <div class="affp-hero-sub affp-trans"
                        data-en="Flour Mills • Rice Processing • Dairy Plants • Fruit Juices • Bakery"
                        data-fa="آسیاب‌های آرد • پروسس برنج • کارخانجات لبنیات • آبمیوه و جوس • نان‌پزی و قنادی"
                        data-ps="د اوړو ژرندې • د وریجو فابریکې • لبنیات • د مېوو جوسونه • کلچې او بسکټ">
                        Flour Mills • Rice Processing • Dairy Plants • Fruit Juices • Bakery
                    </div>
                    <p class="affp-hero-desc affp-trans"
                        data-en="Manage agricultural raw materials, grain silos, batch recipe formulation, hygiene expiry dates, packaging materials, and provincial wholesale distribution."
                        data-fa="مدیریت مواد خام زراعتی، سیلوهای غله، فرمولاسیون ترکیبی مواد غذایی، تاریخ انقضا و بسته‌بندی، و توزیع عمده در ولایات با دیجی‌فای."
                        data-ps="د خامو زراعتي توکو، د غلو سیلوګانو، د خوړو د فورمولونو او د تاریخ تېرېدو کنټرول په بشپړ ډول سمبال کړئ.">
                        Manage agricultural raw materials, grain silos, batch recipe formulation, hygiene expiry dates, packaging materials, and provincial wholesale distribution.
                    </p>
                    <div class="d-flex gap-3 flex-wrap justify-content-center justify-content-lg-start">
                        <a href="#demo-form" class="btn btn-affp-primary"><i class="fas fa-utensils me-2"></i> <span class="affp-trans" data-en="Get Food ERP Demo" data-fa="درخواست دموی صنایع غذایی" data-ps="د خوړو سافټویر ډیمو">Get Food ERP Demo</span></a>
                        <a href="tel:+919876543210" class="btn btn-affp-outline"><i class="fas fa-headset me-2"></i> <span class="affp-trans" data-en="Talk to Food Tech Specialist" data-fa="تماس با کارشناس صنایع غذایی" data-ps="د خوراکي متخصص سره اړیکه">Talk to Food Tech Specialist</span></a>
                    </div>
                </div>

                <!-- Form Card -->
                <div class="col-lg-5" id="demo-form">
                    <div class="affp-hero-form-card">
                        <h3 class="affp-trans" data-en="Request Food Processing Consultation" data-fa="درخواست مشاوره صنایع غذایی" data-ps="د خوړو د فابریکې مشوره">Request Food Processing Consultation</h3>
                        <p class="affp-trans" data-en="For flour mills, fruit packers, beverage plants & food factories." data-fa="ویژه کارخانجات آرد، بسته‌بندی میوه، آبمیوه و صنایع غذایی." data-ps="د اوړو ژرندو، مېوو پروسس او جوس جوړولو فابریکو لپاره.">For flour mills, fruit packers, beverage plants & food factories.</p>
                        
                        <form action="send_lead.php" method="POST">
                            <div class="mb-3">
                                <label class="form-label small fw-bold affp-trans" data-en="Full Name" data-fa="نام و تخلص" data-ps="بشپړ نوم">Full Name</label>
                                <input type="text" name="name" class="form-control affp-trans-ph" placeholder="e.g. Haji Najibullah" data-en-ph="e.g. Haji Najibullah" data-fa-ph="مثال: حاجی نجیب‌الله" data-ps-ph="مثال: حاجي نجیب‌الله" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label small fw-bold affp-trans" data-en="Food Processing Plant Name" data-fa="نام شرکت / فابریکه غذایی" data-ps="د تولیدي شرکت نوم">Food Processing Plant Name</label>
                                <input type="text" name="company" class="form-control affp-trans-ph" placeholder="e.g. Pamir Pure Flour & Foods" data-en-ph="e.g. Pamir Pure Flour & Foods" data-fa-ph="مثال: فابریکه آرد پامیر" data-ps-ph="مثال: د پامیر اوړو او خوراکي توکو فابریکه" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label small fw-bold affp-trans" data-en="WhatsApp / Phone" data-fa="شماره واتساپ" data-ps="د واټساپ شمېره">WhatsApp / Phone</label>
                                <input type="tel" name="phone" class="form-control" placeholder="+93 7X XXX XXXX" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label small fw-bold affp-trans" data-en="Processing Category" data-fa="نوعیت خط تولید" data-ps="د پروسس څانګه">Processing Category</label>
                                <select name="business_type" class="form-select">
                                    <option value="Flour & Grain Milling">Flour & Grain Milling</option>
                                    <option value="Rice Sorting & Milling">Rice Sorting & Milling</option>
                                    <option value="Fruit Juice & Beverage Bottling">Fruit Juice & Beverage Bottling</option>
                                    <option value="Dairy & Milk Processing">Dairy & Milk Processing</option>
                                    <option value="Bakery, Biscuit & Confectionery">Bakery, Biscuit & Confectionery</option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-affp-primary w-100 py-2 fw-bold affp-trans"
                                data-en="Request Demonstration"
                                data-fa="ارسال درخواست دمو"
                                data-ps="وړیا ډیمو ترلاسه کړئ">
                                Request Demonstration
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CORE MODULES -->
    <section class="affp-section">
        <div class="container">
            <div class="text-center">
                <h2 class="affp-section-title affp-trans"
                    data-en="Specialized Food Manufacturing Modules"
                    data-fa="امکانات تخصصی خط تولید و فرآوری مواد غذایی"
                    data-ps="د خوراکي تولیداتو او پروسس مهمې اسانتیاوې">
                    Specialized Food Manufacturing Modules
                </h2>
                <p class="affp-section-sub affp-trans"
                    data-en="Recipe precision, moisture tracking, packaging stock, and expiry date management."
                    data-fa="دقت در فرمولاسیون، کنترل رطوبت و افت وزنی، انبار پاکت و کارتن و نظارت بر تاریخ انقضا."
                    data-ps="د فورمولونو سموالی، د غلو رطوبت، د کارتنونو ذخیره او د تاریخ څارنه.">
                    Recipe precision, moisture tracking, packaging stock, and expiry date management.
                </p>
            </div>

            <div class="row g-4">
                <div class="col-md-6 col-lg-4">
                    <div class="affp-card">
                        <div class="affp-card-icon"><i class="fas fa-flask"></i></div>
                        <h4 class="affp-trans" data-en="Recipe & Formulation Master" data-fa="فرمولاسیون و استاندارد ترکیب" data-ps="د ترکیب او جوړښت فورمولونه">Recipe & Formulation Master</h4>
                        <p class="affp-trans"
                            data-en="Lock confidential mixing recipes for beverages, sauces, biscuits, or blended flours with automatic ingredient deduction per batch."
                            data-fa="تعریف و قفل فرمول‌های محرمانه تولید جوس، بسکیت، آرد ترکیبی و سس‌ها با کسر اتوماتیک مواد اولیه."
                            data-ps="د جوسونو، بسکټو او اوړو پټ او دقیق ترکیبونه خوندي او په اوتومات ډول کم کړئ.">
                            Lock confidential mixing recipes for beverages, sauces, biscuits, or blended flours with automatic ingredient deduction per batch.
                        </p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="affp-card">
                        <div class="afcr-card-icon"><i class="fas fa-calendar-times"></i></div>
                        <h4 class="affp-trans" data-en="Batch Expiry & Shelf-Life" data-fa="نظارت بر تاریخ انقضا و ماندگاری" data-ps="د تاریخ تېرېدو او ساتنې څارنه">Batch Expiry & Shelf-Life</h4>
                        <p class="affp-trans"
                            data-en="Print manufacturing and expiry date stamps on packaging, with FEFO (First Expired First Out) warehouse dispatch logic."
                            data-fa="چاپ تاریخ تولید و انقضا روی بسته‌بندی‌ها و اجرای سیستم توزیع خروج جنس نزدیک به انقضا اول (FEFO)."
                            data-ps="په بسته بندۍ د تولید او پای نیټه وهل، او د هغو مالونو ژر ایستل چې تاریخ یې لنډ وي.">
                            Print manufacturing and expiry date stamps on packaging, with FEFO (First Expired First Out) warehouse dispatch logic.
                        </p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="affp-card">
                        <div class="affp-card-icon"><i class="fas fa-box-open"></i></div>
                        <h4 class="affp-trans" data-en="Packaging Materials & Bottles" data-fa="انبار پاکت، بطری و کارتن بسته‌بندی" data-ps="د بوتلونو او کارتنونو ګودام">Packaging Materials & Bottles</h4>
                        <p class="affp-trans"
                            data-en="Track PET preforms, glass bottles, metal caps, printed polybags, inner foil pouches, and corrugated shipping cartons."
                            data-fa="مدیریت موجودی پریفرم بطری، سرپوش، خریطه‌های چاپ‌شده، فویل و کارتن‌های بسته‌بندی موتر."
                            data-ps="د بوتلونو، سرپوښونو، چاپ شوو کڅوړو او د موټر د کارتنونو دقیق حساب.">
                            Track PET preforms, glass bottles, metal caps, printed polybags, inner foil pouches, and corrugated shipping cartons.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FINAL CTA -->
    <section class="affp-section bg-dark text-white text-center" style="background: #14532d !important;">
        <div class="container">
            <h2 class="fw-bold mb-3 affp-trans" 
                data-en="Digitize Food Production & Milling in Afghanistan" 
                data-fa="خط تولید و آسیاب‌های غذایی خود را با دیجی‌فای متحول سازید"
                data-ps="خپله د خوراکي توکو فابریکه په ډیجیټل سیستم سمبال کړئ">
                Digitize Food Production & Milling in Afghanistan
            </h2>
            <p class="text-light opacity-75 max-w-700 mx-auto mb-4 affp-trans"
                data-en="Ensure hygiene standards, eliminate raw material wastage, and scale your food brand nationwide."
                data-fa="کیفیت و استانداردهای صحی را رعایت نمایید، ضایعات را به صفر برسانید و محصولات غذایی خود را در سراسر افغانستان توزیع کنید."
                data-ps="د خوراکي تولیداتو کیفیت لوړ کړئ او په ټول هیواد کې خپل تولیدات وپلورئ.">
                Ensure hygiene standards, eliminate raw material wastage, and scale your food brand nationwide.
            </p>
            <div class="d-flex justify-content-center gap-3 flex-wrap">
                <a href="#demo-form" class="btn btn-affp-primary px-4 py-3"><i class="fas fa-calendar-check me-2"></i> <span class="affp-trans" data-en="Request Food ERP Demo" data-fa="درخواست دمو صنایع غذایی" data-ps="د خوړو سافټویر ډیمو">Request Food ERP Demo</span></a>
                <a href="erp-software-afghanistan.php" class="btn btn-affp-outline px-4 py-3"><i class="fas fa-arrow-left me-2"></i> <span class="affp-trans" data-en="Back to Afghanistan ERP" data-fa="صفحه اصلی افغانستان" data-ps="د افغانستان عمومي پاڼه">Back to Afghanistan ERP</span></a>
            </div>
        </div>
    </section>

</div>

<script>
function switchFpLang(lang) {
    var btnEn = document.getElementById('btnFpLangEn');
    var btnFa = document.getElementById('btnFpLangFa');
    var btnPs = document.getElementById('btnFpLangPs');
    var wrapper = document.getElementById('affpWrapper');
    
    localStorage.setItem('digify_af_lang', lang);
    
    [btnEn, btnFa, btnPs].forEach(function(b) { if(b) b.classList.remove('active'); });
    if (lang === 'fa' && btnFa) btnFa.classList.add('active');
    else if (lang === 'ps' && btnPs) btnPs.classList.add('active');
    else if (btnEn) btnEn.classList.add('active');
    
    if (wrapper) {
        if (lang === 'fa' || lang === 'ps') wrapper.classList.add('rtl-mode');
        else wrapper.classList.remove('rtl-mode');
    }
    
    document.querySelectorAll('.affp-trans').forEach(function(el) {
        var text = el.getAttribute('data-' + lang);
        if (text) { el.innerHTML = text; }
    });
    document.querySelectorAll('.affp-trans-ph').forEach(function(el) {
        var ph = el.getAttribute('data-' + lang + '-ph');
        if (ph) { el.setAttribute('placeholder', ph); }
    });
}

document.addEventListener('DOMContentLoaded', function() {
    var savedLang = localStorage.getItem('digify_af_lang') || 'en';
    switchFpLang(savedLang);
});
</script>

<?php include(__DIR__ . '/../../footer.php'); ?>
