<?php 
include_once(__DIR__ . '/../../db.php');
include_once(__DIR__ . '/../../fetch_meta.php');

$pageTitle = "Manufacturing ERP Software in Afghanistan | Production & Factory Management";
$pageDescription = "Manage manufacturing plants, raw material inventory, multi-level BOM, production work orders, and factory accounting with Digify Manufacturing ERP in Afghanistan.";
$pageKeywords = "Manufacturing ERP Afghanistan, Factory software Kabul, Production management Afghanistan, BOM software Afghanistan, Industrial ERP Afghanistan, Afghan manufacturing software";
$pageCanonical = "https://www.digifysoft.in/manufacturing-erp-software-afghanistan";

include(__DIR__ . '/../../top.php');
include(__DIR__ . '/../../header.php');
?>

<style>
/* Afghanistan Manufacturing Suite Design System */
.afmf-page-wrapper {
    font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
    color: #1e293b;
    overflow-x: hidden;
}

/* RTL Mode */
.rtl-mode { direction: rtl; text-align: right; }
.rtl-mode .text-center { text-align: center !important; }
.rtl-mode .me-2 { margin-left: 0.5rem !important; margin-right: 0 !important; }
.rtl-mode .ms-2 { margin-right: 0.5rem !important; margin-left: 0 !important; }

/* Hero */
.afmf-hero {
    background: linear-gradient(135deg, #1e1b4b 0%, #312e81 50%, #4338ca 100%);
    color: #ffffff;
    padding: 70px 0 85px;
    position: relative;
    overflow: hidden;
    border-bottom: 4px solid #6366f1;
}
.afmf-hero::before {
    content: '';
    position: absolute;
    top: -15%;
    right: -10%;
    width: 650px;
    height: 650px;
    background: radial-gradient(circle, rgba(99, 102, 241, 0.28) 0%, rgba(67, 56, 202, 0.15) 50%, rgba(0, 0, 0, 0) 75%);
    border-radius: 50%;
    pointer-events: none;
}
.afmf-hero-badge {
    background: rgba(99, 102, 241, 0.25);
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
.afmf-hero h1 {
    font-size: 42px;
    font-weight: 900;
    line-height: 1.25;
    margin-bottom: 18px;
    letter-spacing: -0.5px;
}
.afmf-hero-sub {
    font-size: 18px;
    font-weight: 600;
    color: #e0e7ff;
    line-height: 1.5;
    margin-bottom: 14px;
}
.afmf-hero-desc {
    font-size: 16px;
    line-height: 1.7;
    color: rgba(255, 255, 255, 0.88);
    max-width: 700px;
    margin-bottom: 28px;
}

/* Language Switcher */
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
    background: #6366f1;
    color: #ffffff;
    box-shadow: 0 2px 6px rgba(0,0,0,0.2);
}

/* Form */
.afmf-hero-form-card {
    background: #ffffff;
    border-radius: 16px;
    padding: 28px 24px;
    box-shadow: 0 20px 45px rgba(0, 0, 0, 0.35);
    color: #1e293b;
    border: 1px solid rgba(255, 255, 255, 0.2);
}
.afmf-hero-form-card h3 {
    font-size: 20px;
    font-weight: 800;
    color: #0f172a;
    margin-bottom: 6px;
}
.afmf-hero-form-card p {
    font-size: 13px;
    color: #64748b;
    margin-bottom: 18px;
}

/* Section styling */
.afmf-section { padding: 60px 0; }
.afmf-section-title {
    font-size: 32px;
    font-weight: 800;
    color: #0f172a;
    margin-bottom: 12px;
    letter-spacing: -0.3px;
}
.afmf-section-sub {
    font-size: 16px;
    color: #64748b;
    max-width: 680px;
    margin: 0 auto 40px;
}

/* Cards */
.afmf-card {
    background: #ffffff;
    border: 1px solid #e2e8f0;
    border-radius: 14px;
    padding: 24px;
    height: 100%;
    transition: all 0.3s ease;
    box-shadow: 0 4px 6px -1px rgba(0,0,0,0.05);
}
.afmf-card:hover {
    transform: translateY(-4px);
    box-shadow: 0 15px 30px rgba(0,0,0,0.08);
    border-color: #6366f1;
}
.afmf-card-icon {
    width: 52px;
    height: 52px;
    border-radius: 12px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 24px;
    margin-bottom: 16px;
    background: rgba(99, 102, 241, 0.1);
    color: #4f46e5;
}
.afmf-card h4 {
    font-size: 18px;
    font-weight: 700;
    color: #0f172a;
    margin-bottom: 10px;
}
.afmf-card p {
    font-size: 14px;
    color: #64748b;
    line-height: 1.6;
    margin-bottom: 0;
}

/* Buttons */
.btn-afmf-primary {
    background: #4f46e5;
    color: #ffffff;
    font-weight: 700;
    border-radius: 8px;
    padding: 12px 24px;
    border: none;
    transition: all 0.2s;
}
.btn-afmf-primary:hover {
    background: #4338ca;
    color: #ffffff;
    box-shadow: 0 6px 16px rgba(79, 70, 229, 0.35);
}
.btn-afmf-outline {
    border: 2px solid rgba(255,255,255,0.4);
    color: #ffffff;
    font-weight: 700;
    border-radius: 8px;
    padding: 12px 24px;
    background: transparent;
}
.btn-afmf-outline:hover {
    background: #ffffff;
    color: #312e81;
}

@media (max-width: 991px) {
    .afmf-hero { padding: 45px 0 60px; text-align: center; }
    .afmf-hero h1 { font-size: 30px; }
    .afmf-hero-desc { margin: 0 auto 24px; }
    .afmf-hero-form-card { margin-top: 30px; text-align: left; }
    .rtl-mode .afmf-hero-form-card { text-align: right; }
}
</style>

<div class="afmf-page-wrapper" id="afmfWrapper">

    <!-- HERO SECTION -->
    <section class="afmf-hero">
        <div class="container">
            <!-- Language Switcher Bar -->
            <div class="text-center text-lg-start mb-2">
                <div class="lang-toggle-bar">
                    <button type="button" class="lang-pill active" id="btnMfLangEn" onclick="switchMfLang('en')">🇬🇧 English</button>
                    <button type="button" class="lang-pill" id="btnMfLangFa" onclick="switchMfLang('fa')">🇦🇫 دری (Farsi)</button>
                    <button type="button" class="lang-pill" id="btnMfLangPs" onclick="switchMfLang('ps')">🇦🇫 پښتو (Pashto)</button>
                </div>
            </div>

            <div class="row align-items-center">
                <div class="col-lg-7">
                    <div class="afmf-hero-badge afmf-trans" 
                        data-en="🏭 Advanced Factory & Production ERP for Afghanistan" 
                        data-fa="🏭 نرم‌افزار تخصصی مدیریت تولید و فابریکات صنعتی افغانستان" 
                        data-ps="🏭 په افغانستان کې د تولیدي کارخانو او فابریکو پرمختللی ERP">
                        🏭 Advanced Factory & Production ERP for Afghanistan
                    </div>
                    <h1 class="afmf-trans"
                        data-en="Manufacturing ERP Software in Afghanistan"
                        data-fa="نرم‌افزار جامع مدیریت تولید و فابریکات در افغانستان"
                        data-ps="په افغانستان کې د تولیدي فابریکو لپاره جامع ERP سافټویر">
                        Manufacturing ERP Software in Afghanistan
                    </h1>
                    <div class="afmf-hero-sub afmf-trans"
                        data-en="Multi-Level BOM • Raw Materials • Production Work Orders • Wastage Control"
                        data-fa="فرمولاسیون تولید (BOM) • انبار مواد خام • دستورات کارگاه • کنترول ضایعات"
                        data-ps="د تولید فورمولونه (BOM) • د خامو توکو ګودام • کاري امرونه • د ضایعاتو کنټرول">
                        Multi-Level BOM • Raw Materials • Production Work Orders • Wastage Control
                    </div>
                    <p class="afmf-hero-desc afmf-trans"
                        data-en="Manage manufacturing inventory, imported raw materials, finished products, batch costing, factory floor operations, machine downtime, and wholesale distribution across Afghanistan."
                        data-fa="مدیریت انبار مواد خام، کالای ساخته‌شده، بهای تمام‌شده هر واحد تولید، کارگاه‌های صنعتی و فروش عمده در سراسر کابل، هرات، بلخ، ننگرهار و قندهار."
                        data-ps="د تولیدي فابریکو خام مواد، تیار شوي توکي، د تولید لګښت، او د عمده پلور وېش ټول په یو شفاف سافټویر کې سمبال کړئ.">
                        Manage manufacturing inventory, imported raw materials, finished products, batch costing, factory floor operations, machine downtime, and wholesale distribution across Afghanistan.
                    </p>
                    <div class="d-flex gap-3 flex-wrap justify-content-center justify-content-lg-start">
                        <a href="#demo-form" class="btn btn-afmf-primary"><i class="fas fa-industry me-2"></i> <span class="afmf-trans" data-en="Request Factory ERP Demo" data-fa="درخواست دموی فابریکات" data-ps="د فابریکو ډیمو ترلاسه کړئ">Request Factory ERP Demo</span></a>
                        <a href="tel:+919876543210" class="btn btn-afmf-outline"><i class="fas fa-headset me-2"></i> <span class="afmf-trans" data-en="Talk to Manufacturing Expert" data-fa="گفتگو با متخصص صنایع" data-ps="د تولید متخصص سره خبرې">Talk to Manufacturing Expert</span></a>
                    </div>
                </div>

                <!-- Form Card -->
                <div class="col-lg-5" id="demo-form">
                    <div class="afmf-hero-form-card">
                        <h3 class="afmf-trans" data-en="Get Factory ERP Consultation" data-fa="درخواست مشاوره کارخانجات" data-ps="د فابریکو د سیسټم مشوره">Get Factory ERP Consultation</h3>
                        <p class="afmf-trans" data-en="Customized for food, plastic, furniture, metal & processing plants." data-fa="ویژه صنایع غذایی، پلاستیک، مبلمان، فلزات و بسته‌بندی." data-ps="د خوړو، پلاستیک، فرنیچر او فلزاتو کارخانو لپاره.">Customized for food, plastic, furniture, metal & processing plants.</p>
                        
                        <form action="send_lead.php" method="POST">
                            <div class="mb-3">
                                <label class="form-label small fw-bold afmf-trans" data-en="Full Name" data-fa="نام و تخلص" data-ps="بشپړ نوم">Full Name</label>
                                <input type="text" name="name" class="form-control afmf-trans-ph" placeholder="e.g. Engineer Farhad" data-en-ph="e.g. Engineer Farhad" data-fa-ph="مثال: انجنیر فرهاد" data-ps-ph="مثال: انجنیر فرهاد" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label small fw-bold afmf-trans" data-en="Factory / Plant Name" data-fa="نام شرکت / فابریکه" data-ps="د فابریکې یا شرکت نوم">Factory / Plant Name</label>
                                <input type="text" name="company" class="form-control afmf-trans-ph" placeholder="e.g. Afghan Steel & Pipe Factory" data-en-ph="e.g. Afghan Steel & Pipe Factory" data-fa-ph="مثال: فابریکه تولیدی کابل" data-ps-ph="مثال: د کابل تولیدي فابریکه" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label small fw-bold afmf-trans" data-en="WhatsApp / Phone" data-fa="شماره تماس / واتساپ" data-ps="د واټساپ شمېره">WhatsApp / Phone</label>
                                <input type="tel" name="phone" class="form-control" placeholder="+93 7X XXX XXXX" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label small fw-bold afmf-trans" data-en="Manufacturing Sector" data-fa="بخش تولیدی" data-ps="د تولید سکټور">Manufacturing Sector</label>
                                <select name="business_type" class="form-select">
                                    <option value="Food & Beverage Processing">Food & Beverage Processing</option>
                                    <option value="Plastics & Packaging">Plastics & Packaging</option>
                                    <option value="Furniture & Woodwork">Furniture & Woodwork</option>
                                    <option value="Metal & Steel Fabrication">Metal & Steel Fabrication</option>
                                    <option value="Chemicals & Detergents">Chemicals & Detergents</option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-afmf-primary w-100 py-2 fw-bold afmf-trans"
                                data-en="Request Free Factory Demo"
                                data-fa="ارسال درخواست و دریافت دمو"
                                data-ps="وړیا ډیمو ترلاسه کړئ">
                                Request Free Factory Demo
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CORE MODULES -->
    <section class="afmf-section">
        <div class="container">
            <div class="text-center">
                <h2 class="afmf-section-title afmf-trans"
                    data-en="Comprehensive Manufacturing & Assembly Modules"
                    data-fa="ماژول‌های تخصصی مدیریت خط تولید و فابریکه"
                    data-ps="د تولید او فابریکې مهمې برخې">
                    Comprehensive Manufacturing & Assembly Modules
                </h2>
                <p class="afmf-section-sub afmf-trans"
                    data-en="Complete visibility over raw ingredients, worker hours, electricity/fuel costs, and finished batch quality."
                    data-fa="دید کامل بر موجودی گدام مواد خام، ساعات کار کارگران، مصرف انرژی و کیفیت محصول نهایی."
                    data-ps="د خامو توکو، د کارګرانو کاري ساعتونو، لګښتونو او د تیارو شویو اجناسو بشپړ کنټرول.">
                    Complete visibility over raw ingredients, worker hours, electricity/fuel costs, and finished batch quality.
                </p>
            </div>

            <div class="row g-4">
                <div class="col-md-6 col-lg-4">
                    <div class="afmf-card">
                        <div class="afmf-card-icon"><i class="fas fa-sitemap"></i></div>
                        <h4 class="afmf-trans" data-en="Bill of Materials (BOM) & Recipes" data-fa="فرمولاسیون و بل مواد (BOM)" data-ps="د توکو فورمول او ترکیب (BOM)">Bill of Materials (BOM) & Recipes</h4>
                        <p class="afmf-trans"
                            data-en="Define multi-level BOMs including primary raw materials, secondary additives, packaging materials, and labor overheads."
                            data-fa="تعریف فرمول دقیق تولید با احتساب مواد خام اصلی، مواد بسته بندی و هزینه‌های سربار دستمزد."
                            data-ps="د تولید دقیق ترکیب جوړول، د بسته بندۍ توکي او مستقیم لګښتونه مشخص کول.">
                            Define multi-level BOMs including primary raw materials, secondary additives, packaging materials, and labor overheads.
                        </p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="afmf-card">
                        <div class="afmf-card-icon"><i class="fas fa-tasks"></i></div>
                        <h4 class="afmf-trans" data-en="Production Work Orders" data-fa="دستورات کارگاه و تولید مرحله‌ای" data-ps="د فابریکې کاري امرونه">Production Work Orders</h4>
                        <p class="afmf-trans"
                            data-en="Issue production orders to shop floors. Automatically deduct consumed raw materials from inventory and credit finished stock."
                            data-fa="صدور سفارش کار به کارگاه، کسر اتوماتیک مواد مصرفی از انبار و اضافه شدن محصول آماده به موجودی."
                            data-ps="کارخانې ته کاري امرونه سپارل، له ګودام څخه د خامو توکو کمول او د تیارو توکو اضافه کول.">
                            Issue production orders to shop floors. Automatically deduct consumed raw materials from inventory and credit finished stock.
                        </p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="afmf-card">
                        <div class="afmf-card-icon"><i class="fas fa-trash-alt"></i></div>
                        <h4 class="afmf-trans" data-en="Scrap & Wastage Management" data-fa="کنترل ضایعات و بازیافت مواد" data-ps="د ضایعاتو او کثافاتو کنټرول">Scrap & Wastage Management</h4>
                        <p class="afmf-trans"
                            data-en="Log material cutting waste, defective output, and scrap re-melting to keep actual manufacturing cost per unit accurate."
                            data-fa="ثبت ضایعات برش، محصولات معیوب و مواد قابل بازیافت جهت محاسبه دقیق بهای تمام‌شده هر دانه."
                            data-ps="د پرې کولو ضایعات، خراب شوي توکي او بیا کارول کېدونکي مواد په دقیق ډول ثبت کړئ.">
                            Log material cutting waste, defective output, and scrap re-melting to keep actual manufacturing cost per unit accurate.
                        </p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="afmf-card">
                        <div class="afmf-card-icon"><i class="fas fa-boxes-stacked"></i></div>
                        <h4 class="afmf-trans" data-en="Dual Warehouse (Raw vs Finished)" data-fa="گدام مجزای مواد خام و محصول نهایی" data-ps="د خامو او تیارو توکو بیل ګودامونه">Dual Warehouse (Raw vs Finished)</h4>
                        <p class="afmf-trans"
                            data-en="Isolate raw material storage from wholesale finished goods warehouses with automated internal stock transfer receipts."
                            data-fa="تفکیک کامل انبار مواد خام از انبار محصول نهایی با حواله‌های انتقال داخلی مکانیزه."
                            data-ps="د خامو توکو ګودام د خرڅلاو له ګودام څخه جلا ساتل او د انتقال حوالې ثبتول.">
                            Isolate raw material storage from wholesale finished goods warehouses with automated internal stock transfer receipts.
                        </p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="afmf-card">
                        <div class="afmf-card-icon"><i class="fas fa-calculator"></i></div>
                        <h4 class="afmf-trans" data-en="Unit Costing & Profit Margins" data-fa="محاسبه بهای تمام‌شده و مفاد خالص" data-ps="د هر واحد لګښت او خالص ګټه">Unit Costing & Profit Margins</h4>
                        <p class="afmf-trans"
                            data-en="Incorporate raw material costs, freight landed costs, electricity, generator fuel, and worker wages into final price calculation."
                            data-fa="محاسبه قیمت تمام‌شده با در نظر گرفتن هزینه خرید، کرایه، تیل جنراتور و معاشات پرسونل."
                            data-ps="د خامو توکو، ترانسپورټ، د جنراتور تېلو او د کاریګرو د معاشونو له مخې د تولید لګښت معلومول.">
                            Incorporate raw material costs, freight landed costs, electricity, generator fuel, and worker wages into final price calculation.
                        </p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="afmf-card">
                        <div class="afmf-card-icon"><i class="fas fa-truck-moving"></i></div>
                        <h4 class="afmf-trans" data-en="Wholesale Dispatch & Invoicing" data-fa="فروش عمده و بارگیری به ولایات" data-ps="عمده خرڅلاو او ولایتونو ته لېږد">Wholesale Dispatch & Invoicing</h4>
                        <p class="afmf-trans"
                            data-en="Generate wholesale tax-ready invoices, gate passes, driver transport waybills, and customer credit balance ledgers."
                            data-fa="صدور فاکتور عمده‌فروشی، برگه خروج گیت‌پاس، بارنامه موتر و صورتحساب طلبکاری مشتریان ولایتی."
                            data-ps="عمده فاکتورونه، د وتلو ګیټ پاس، د موټر بارنامه او د پېرودونکو د پورونو حسابونه.">
                            Generate wholesale tax-ready invoices, gate passes, driver transport waybills, and customer credit balance ledgers.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FINAL CTA -->
    <section class="afmf-section bg-dark text-white text-center" style="background: #1e1b4b !important;">
        <div class="container">
            <h2 class="fw-bold mb-3 afmf-trans" 
                data-en="Upgrade Your Afghan Factory to Smart Manufacturing" 
                data-fa="فابریکه خود را به سطح تولید هوشمند ارتقا دهید"
                data-ps="خپله فابریکه په هوښیار او منظم تولید بدل کړئ">
                Upgrade Your Afghan Factory to Smart Manufacturing
            </h2>
            <p class="text-light opacity-75 max-w-700 mx-auto mb-4 afmf-trans"
                data-en="Eliminate production bottlenecks, stop raw material pilferage, and maximize industrial profit with Digify ERP."
                data-fa="با دیجی‌فای توقف خط تولید را به صفر برسانید، حیف و میل مواد خام را متوقف کنید و مفاد کارخانه را افزایش دهید."
                data-ps="د تولید خنډونه له منځه یوسئ، د خامو توکو ضایعات بند کړئ او خپله ګټه ډېره کړئ.">
                Eliminate production bottlenecks, stop raw material pilferage, and maximize industrial profit with Digify ERP.
            </p>
            <div class="d-flex justify-content-center gap-3 flex-wrap">
                <a href="#demo-form" class="btn btn-afmf-primary px-4 py-3"><i class="fas fa-calendar-check me-2"></i> <span class="afmf-trans" data-en="Book Factory Demonstration" data-fa="درخواست جلسه و دمو" data-ps="د ډیمو غوښتنه وکړئ">Book Factory Demonstration</span></a>
                <a href="erp-software-afghanistan.php" class="btn btn-afmf-outline px-4 py-3"><i class="fas fa-arrow-left me-2"></i> <span class="afmf-trans" data-en="View Afghanistan ERP Suite" data-fa="مشاهده بسته کامل افغانستان" data-ps="د افغانستان ټول سیستمونه">View Afghanistan ERP Suite</span></a>
            </div>
        </div>
    </section>

</div>

<script>
function switchMfLang(lang) {
    var btnEn = document.getElementById('btnMfLangEn');
    var btnFa = document.getElementById('btnMfLangFa');
    var btnPs = document.getElementById('btnMfLangPs');
    var wrapper = document.getElementById('afmfWrapper');
    
    localStorage.setItem('digify_af_lang', lang);
    
    [btnEn, btnFa, btnPs].forEach(function(b) { if(b) b.classList.remove('active'); });
    if (lang === 'fa' && btnFa) btnFa.classList.add('active');
    else if (lang === 'ps' && btnPs) btnPs.classList.add('active');
    else if (btnEn) btnEn.classList.add('active');
    
    if (wrapper) {
        if (lang === 'fa' || lang === 'ps') wrapper.classList.add('rtl-mode');
        else wrapper.classList.remove('rtl-mode');
    }
    
    document.querySelectorAll('.afmf-trans').forEach(function(el) {
        var text = el.getAttribute('data-' + lang);
        if (text) { el.innerHTML = text; }
    });
    document.querySelectorAll('.afmf-trans-ph').forEach(function(el) {
        var ph = el.getAttribute('data-' + lang + '-ph');
        if (ph) { el.setAttribute('placeholder', ph); }
    });
}

document.addEventListener('DOMContentLoaded', function() {
    var savedLang = localStorage.getItem('digify_af_lang') || 'en';
    switchMfLang(savedLang);
});
</script>

<?php include(__DIR__ . '/../../footer.php'); ?>
