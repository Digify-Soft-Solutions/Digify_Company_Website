<?php 
include_once(__DIR__ . '/../../db.php');
include_once(__DIR__ . '/../../fetch_meta.php');

$pageTitle = "E-Commerce ERP Software in Afghanistan | Online Order & COD ERP";
$pageDescription = "Connect online stores, social media sales, Cash On Delivery (COD) courier tracking, inventory sync, and customer orders in Afghanistan with Digify ERP.";
$pageKeywords = "Ecommerce ERP Afghanistan, Online shop software Kabul, COD courier software Afghanistan, Social media order management Afghanistan, Multi-channel ecommerce ERP";
$pageCanonical = "https://www.digifysoft.in/ecommerce-erp-software-afghanistan";

include(__DIR__ . '/../../top.php');
include(__DIR__ . '/../../header.php');
?>

<style>
.afec-page-wrapper {
    font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
    color: #1e293b;
    overflow-x: hidden;
}
.rtl-mode { direction: rtl; text-align: right; }
.rtl-mode .text-center { text-align: center !important; }
.rtl-mode .me-2 { margin-left: 0.5rem !important; margin-right: 0 !important; }
.rtl-mode .ms-2 { margin-right: 0.5rem !important; margin-left: 0 !important; }

.afec-hero {
    background: linear-gradient(135deg, #581c87 0%, #7e22ce 50%, #9333ea 100%);
    color: #ffffff;
    padding: 70px 0 85px;
    position: relative;
    overflow: hidden;
    border-bottom: 4px solid #c084fc;
}
.afec-hero::before {
    content: '';
    position: absolute;
    top: -15%;
    right: -10%;
    width: 650px;
    height: 650px;
    background: radial-gradient(circle, rgba(192, 132, 252, 0.28) 0%, rgba(147, 51, 234, 0.15) 50%, rgba(0, 0, 0, 0) 75%);
    border-radius: 50%;
    pointer-events: none;
}
.afec-hero-badge {
    background: rgba(192, 132, 252, 0.25);
    border: 1px solid rgba(233, 213, 255, 0.4);
    color: #f3e8ff;
    font-size: 13px;
    font-weight: 700;
    padding: 7px 18px;
    border-radius: 30px;
    display: inline-flex;
    align-items: center;
    gap: 8px;
    margin-bottom: 18px;
}
.afec-hero h1 { font-size: 42px; font-weight: 900; line-height: 1.25; margin-bottom: 18px; letter-spacing: -0.5px; }
.afec-hero-sub { font-size: 18px; font-weight: 600; color: #fae8ff; line-height: 1.5; margin-bottom: 14px; }
.afec-hero-desc { font-size: 16px; line-height: 1.7; color: rgba(255, 255, 255, 0.88); max-width: 700px; margin-bottom: 28px; }

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
.lang-pill.active { background: #c084fc; color: #3b0764; box-shadow: 0 2px 6px rgba(0,0,0,0.2); }

.afec-hero-form-card {
    background: #ffffff;
    border-radius: 16px;
    padding: 28px 24px;
    box-shadow: 0 20px 45px rgba(0, 0, 0, 0.35);
    color: #1e293b;
    border: 1px solid rgba(255, 255, 255, 0.2);
}
.afec-hero-form-card h3 { font-size: 20px; font-weight: 800; color: #0f172a; margin-bottom: 6px; }
.afec-hero-form-card p { font-size: 13px; color: #64748b; margin-bottom: 18px; }

.btn-afec-primary {
    background: #9333ea;
    color: #ffffff;
    font-weight: 700;
    border-radius: 8px;
    padding: 12px 24px;
    border: none;
    transition: all 0.2s;
}
.btn-afec-primary:hover { background: #7e22ce; color: #ffffff; box-shadow: 0 6px 16px rgba(147, 51, 234, 0.35); }
.btn-afec-outline {
    border: 2px solid rgba(255,255,255,0.4);
    color: #ffffff;
    font-weight: 700;
    border-radius: 8px;
    padding: 12px 24px;
    background: transparent;
}
.btn-afec-outline:hover { background: #ffffff; color: #581c87; }

@media (max-width: 991px) {
    .afec-hero { padding: 45px 0 60px; text-align: center; }
    .afec-hero h1 { font-size: 30px; }
    .afec-hero-desc { margin: 0 auto 24px; }
    .afec-hero-form-card { margin-top: 30px; text-align: left; }
    .rtl-mode .afec-hero-form-card { text-align: right; }
}
</style>

<div class="afec-page-wrapper" id="afecWrapper">

    <!-- HERO SECTION -->
    <section class="afec-hero">
        <div class="container">
            <div class="text-center text-lg-start mb-2">
                <div class="lang-toggle-bar">
                    <button type="button" class="lang-pill active" id="btnEcLangEn" onclick="switchEcLang('en')">🇬🇧 English</button>
                    <button type="button" class="lang-pill" id="btnEcLangFa" onclick="switchEcLang('fa')">🇦🇫 دری (Farsi)</button>
                    <button type="button" class="lang-pill" id="btnEcLangPs" onclick="switchEcLang('ps')">🇦🇫 پښتو (Pashto)</button>
                </div>
            </div>

            <div class="row align-items-center">
                <div class="col-lg-7">
                    <div class="afec-hero-badge afec-trans" 
                        data-en="🛍️ E-Commerce & Cash on Delivery (COD) ERP" 
                        data-fa="🛍️ سیستم مدیریت فروشگاه آنلاین، سفارشات انترنتی و تصفیه COD" 
                        data-ps="🛍️ په افغانستان کې د آنلاین پلورنځیو او COD کنټرول سافټویر">
                        🛍️ E-Commerce & Cash on Delivery (COD) ERP
                    </div>
                    <h1 class="afec-trans"
                        data-en="E-Commerce ERP Software in Afghanistan"
                        data-fa="نرم‌افزار جامع مدیریت فروشگاه آنلاین و تجارت الکترونیک در افغانستان"
                        data-ps="په افغانستان کې د برېښنايي سوداګرۍ او انلاین دوکانونو لپاره ERP">
                        E-Commerce ERP Software in Afghanistan
                    </h1>
                    <div class="afec-hero-sub afec-trans"
                        data-en="Social Media Orders • COD Courier Reconciliation • Auto Inventory Sync • Customer CRM"
                        data-fa="ثبت سفارشات فیسبوک و واتساپ • تصفیه پول موترهای دلیوری • همگام‌سازی انبار • CRM مشتریان"
                        data-ps="د ټولنیزو رسنیو فرمایشونه • د ډیلیورۍ د پیسو تصفیه • د انبار همغږي • د پیرودونکو راپورونه">
                        Social Media Orders • COD Courier Reconciliation • Auto Inventory Sync • Customer CRM
                    </div>
                    <p class="afec-hero-desc afec-trans"
                        data-en="Centralize orders from your website, Facebook, TikTok, WhatsApp, and physical shops into one dashboard. Track dispatch rider cash collection (COD), courier reconciliation, and inventory allocation in real time."
                        data-fa="سفارشات آنلاین، شبکه‌های اجتماعی و دکان فیزیکی خود را در یکجا جمع کنید. پول‌های نقد تحویل درب منزل (COD)، کرایه دلیوری و موجودی کالاها را با دیجی‌فای دقیق مدیریت کنید."
                        data-ps="خپل انلاین فرمایشونه، د فیسبوک او واټساپ خرڅلاو، او د کور پر سر د پیسو اخیستل (COD) ټول په یو ځای کنټرول کړئ.">
                        Centralize orders from your website, Facebook, TikTok, WhatsApp, and physical shops into one dashboard. Track dispatch rider cash collection (COD), courier reconciliation, and inventory allocation in real time.
                    </p>
                    <div class="d-flex gap-3 flex-wrap justify-content-center justify-content-lg-start">
                        <a href="#demo-form" class="btn btn-afec-primary"><i class="fas fa-shopping-cart me-2"></i> <span class="afec-trans" data-en="Get E-Commerce ERP Demo" data-fa="درخواست دموی فروشگاه آنلاین" data-ps="د انلاین پلورنځي ډیمو">Get E-Commerce ERP Demo</span></a>
                        <a href="tel:+919876543210" class="btn btn-afec-outline"><i class="fas fa-headset me-2"></i> <span class="afec-trans" data-en="Talk to E-Com Expert" data-fa="تماس با کارشناس" data-ps="د متخصص سره اړیکه">Talk to E-Com Expert</span></a>
                    </div>
                </div>

                <!-- Form Card -->
                <div class="col-lg-5" id="demo-form">
                    <div class="afec-hero-form-card">
                        <h3 class="afec-trans" data-en="Request E-Commerce ERP Demo" data-fa="درخواست مشاوره فروشگاه آنلاین" data-ps="د انلاین سوداګرۍ مشوره">Request E-Commerce ERP Demo</h3>
                        <p class="afec-trans" data-en="For online brands, Instagram stores & delivery hubs." data-fa="ویژه برندهای انترنتی، فروشگاه‌های فیسبوک و پیک‌های شهری." data-ps="د انلاین سوداګرو او ډیلیوري شرکتونو لپاره.">For online brands, Instagram stores & delivery hubs.</p>
                        
                        <form action="send_lead.php" method="POST">
                            <div class="mb-3">
                                <label class="form-label small fw-bold afec-trans" data-en="Full Name" data-fa="نام و تخلص" data-ps="بشپړ نوم">Full Name</label>
                                <input type="text" name="name" class="form-control" placeholder="e.g. Rohullah" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label small fw-bold afec-trans" data-en="Online Store Name" data-fa="نام فروشگاه آنلاین" data-ps="د پلورنځي نوم">Online Store Name</label>
                                <input type="text" name="company" class="form-control" placeholder="e.g. Kabul Express Online" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label small fw-bold afec-trans" data-en="WhatsApp / Phone" data-fa="شماره تماس" data-ps="د واټساپ شمېره">WhatsApp / Phone</label>
                                <input type="tel" name="phone" class="form-control" placeholder="+93 7X XXX XXXX" required>
                            </div>
                            <button type="submit" class="btn btn-afec-primary w-100 py-2 fw-bold afec-trans"
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
    <section class="afec-section bg-dark text-white text-center" style="background: #581c87 !important; padding: 60px 0;">
        <div class="container">
            <h2 class="fw-bold mb-3 afec-trans" 
                data-en="Scale Your E-Commerce Business in Afghanistan" 
                data-fa="کسب‌وکار انترنتی و فروش آنلاین خود را در افغانستان وسعت بخشید"
                data-ps="په افغانستان کې خپله انلاین سوداګري خوندي او ګړندۍ کړئ">
                Scale Your E-Commerce Business in Afghanistan
            </h2>
            <div class="d-flex justify-content-center gap-3 flex-wrap">
                <a href="#demo-form" class="btn btn-afec-primary px-4 py-3"><i class="fas fa-calendar-check me-2"></i> <span class="afec-trans" data-en="Request E-Commerce Demo" data-fa="درخواست دمو" data-ps="ډیمو ترلاسه کړئ">Request E-Commerce Demo</span></a>
                <a href="erp-software-afghanistan.php" class="btn btn-afec-outline px-4 py-3"><i class="fas fa-arrow-left me-2"></i> <span class="afec-trans" data-en="Back to Afghanistan ERP" data-fa="صفحه اصلی افغانستان" data-ps="د افغانستان عمومي پاڼه">Back to Afghanistan ERP</span></a>
            </div>
        </div>
    </section>

</div>

<script>
function switchEcLang(lang) {
    var btnEn = document.getElementById('btnEcLangEn');
    var btnFa = document.getElementById('btnEcLangFa');
    var btnPs = document.getElementById('btnEcLangPs');
    var wrapper = document.getElementById('afecWrapper');
    
    localStorage.setItem('digify_af_lang', lang);
    
    [btnEn, btnFa, btnPs].forEach(function(b) { if(b) b.classList.remove('active'); });
    if (lang === 'fa' && btnFa) btnFa.classList.add('active');
    else if (lang === 'ps' && btnPs) btnPs.classList.add('active');
    else if (btnEn) btnEn.classList.add('active');
    
    if (wrapper) {
        if (lang === 'fa' || lang === 'ps') wrapper.classList.add('rtl-mode');
        else wrapper.classList.remove('rtl-mode');
    }
    
    document.querySelectorAll('.afec-trans').forEach(function(el) {
        var text = el.getAttribute('data-' + lang);
        if (text) { el.innerHTML = text; }
    });
}

document.addEventListener('DOMContentLoaded', function() {
    var savedLang = localStorage.getItem('digify_af_lang') || 'en';
    switchEcLang(savedLang);
});
</script>

<?php include(__DIR__ . '/../../footer.php'); ?>
