<?php 
include_once(__DIR__ . '/../../db.php');
include_once(__DIR__ . '/../../fetch_meta.php');

$pageTitle = "ERP Software in UAE | Trading, Distribution, Retail & Business Management";
$pageDescription = "ERP software in UAE for trading, distribution, retail, workshops, manufacturing, services and SMEs. Manage inventory, accounting, CRM, purchasing, sales, VAT, corporate tax records and business automation.";
$pageKeywords = "ERP software UAE, ERP software in UAE, best ERP software UAE, ERP system UAE, business management software UAE, cloud ERP UAE, SME ERP UAE, ERP software Dubai, ERP software Abu Dhabi, ERP software Sharjah, trading ERP UAE, distribution ERP UAE, wholesale ERP UAE, retail ERP UAE, supermarket ERP UAE, workshop ERP UAE, UAE VAT accounting software, UAE corporate tax software, UAE e invoicing software, Arabic ERP UAE, AI business automation UAE";
$pageCanonical = "https://www.digifysoft.in/erp-software-uae";

include(__DIR__ . '/../../top.php');
include(__DIR__ . '/../../header.php');
?>

<style>
/* UAE Master Suite Design System */
.uae-page-wrapper {
    font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
    color: #1e293b;
    overflow-x: hidden;
}
.uae-arabic-font {
    font-family: 'Cairo', 'Segoe UI', Tahoma, Arial, sans-serif !important;
}

/* Hero Section */
.uae-hero {
    background: linear-gradient(135deg, #09152b 0%, #112240 45%, #1b0a24 100%);
    color: #ffffff;
    padding: 75px 0 90px;
    position: relative;
    overflow: hidden;
    border-bottom: 4px solid #f59e0b;
}
.uae-hero::before {
    content: '';
    position: absolute;
    top: -15%;
    right: -10%;
    width: 720px;
    height: 720px;
    background: radial-gradient(circle, rgba(245, 158, 11, 0.22) 0%, rgba(16, 185, 129, 0.15) 50%, rgba(0, 0, 0, 0) 75%);
    border-radius: 50%;
    pointer-events: none;
}
.text-gradient-uae {
    background: linear-gradient(135deg, #fbbf24 0%, #34d399 50%, #fde047 100%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    display: inline-block;
}
.uae-hero-badge {
    background: rgba(245, 158, 11, 0.18);
    border: 1px solid rgba(251, 191, 36, 0.45);
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
.uae-hero h1 {
    font-size: 42px;
    font-weight: 900;
    line-height: 1.25;
    margin-bottom: 18px;
    letter-spacing: -0.5px;
}
.uae-hero-sub {
    font-size: 18px;
    font-weight: 600;
    color: #fde047;
    line-height: 1.5;
    margin-bottom: 14px;
}
.uae-hero-desc {
    font-size: 16px;
    line-height: 1.7;
    color: rgba(255, 255, 255, 0.88);
    max-width: 720px;
    margin-bottom: 28px;
}

/* Language Toggle Bar */
.lang-toggle-bar {
    display: inline-flex;
    background: rgba(255, 255, 255, 0.08);
    border: 1px solid rgba(255, 255, 255, 0.2);
    border-radius: 30px;
    padding: 4px;
    gap: 4px;
    margin-bottom: 22px;
}
.lang-pill {
    background: transparent;
    border: none;
    color: rgba(255, 255, 255, 0.8);
    font-size: 13px;
    font-weight: 700;
    padding: 6px 16px;
    border-radius: 20px;
    transition: all 0.25s ease;
    cursor: pointer;
    display: inline-flex;
    align-items: center;
    gap: 6px;
}
.lang-pill.active {
    background: #f59e0b;
    color: #09152b;
    font-weight: 800;
    box-shadow: 0 2px 10px rgba(245, 158, 11, 0.5);
}

/* Economy Stat Badge */
.eco-badge {
    background: linear-gradient(135deg, rgba(16, 185, 129, 0.2) 0%, rgba(245, 158, 11, 0.2) 100%);
    border: 1px solid rgba(245, 158, 11, 0.4);
    color: #fef08a;
    font-size: 12px;
    font-weight: 800;
    padding: 6px 14px;
    border-radius: 20px;
    display: inline-flex;
    align-items: center;
    gap: 6px;
    margin-bottom: 12px;
}

/* Lead Form Card */
.uae-lead-card {
    background: #ffffff;
    border-radius: 20px;
    padding: 34px 30px;
    color: #1e293b;
    box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.35);
    border: 1px solid rgba(255, 255, 255, 0.3);
}
.uae-lead-card h3 {
    font-size: 22px;
    font-weight: 800;
    color: #0f2444;
    margin-bottom: 8px;
}
.uae-lead-card p {
    font-size: 13px;
    color: #64748b;
    margin-bottom: 20px;
}
.uae-lead-card .form-control, .uae-lead-card .form-select {
    border-radius: 10px;
    border: 1px solid #cbd5e1;
    padding: 11px 14px;
    font-size: 14px;
}
.uae-lead-card .form-control:focus, .uae-lead-card .form-select:focus {
    border-color: #f59e0b;
    box-shadow: 0 0 0 3px rgba(245, 158, 11, 0.2);
}

/* Buttons */
.btn-uae-primary {
    background: linear-gradient(135deg, #f59e0b 0%, #d97706 100%);
    color: #09152b;
    font-weight: 800;
    font-size: 15px;
    padding: 13px 26px;
    border-radius: 12px;
    border: none;
    transition: all 0.3s ease;
    display: inline-flex;
    align-items: center;
    gap: 8px;
    box-shadow: 0 10px 20px -5px rgba(245, 158, 11, 0.4);
    text-decoration: none;
}
.btn-uae-primary:hover {
    background: linear-gradient(135deg, #d97706 0%, #b45309 100%);
    color: #ffffff;
    transform: translateY(-2px);
}
.btn-uae-outline {
    background: rgba(255, 255, 255, 0.08);
    border: 1px solid rgba(255, 255, 255, 0.25);
    color: #ffffff;
    font-weight: 700;
    font-size: 15px;
    padding: 12px 24px;
    border-radius: 12px;
    transition: all 0.3s ease;
    display: inline-flex;
    align-items: center;
    gap: 8px;
    text-decoration: none;
}
.btn-uae-outline:hover {
    background: rgba(255, 255, 255, 0.18);
    color: #ffffff;
    transform: translateY(-2px);
}

/* Section styling */
.uae-section { padding: 75px 0; }
.bg-light-uae { background-color: #f8fafc; }
.bg-dark-uae { background: #09152b; color: #ffffff; }
.section-badge-uae {
    display: inline-block;
    background: #fef3c7;
    color: #b45309;
    font-size: 12px;
    font-weight: 800;
    text-transform: uppercase;
    letter-spacing: 0.8px;
    padding: 6px 14px;
    border-radius: 20px;
    margin-bottom: 12px;
    border: 1px solid #fde68a;
}
.section-badge-uae-dark {
    display: inline-block;
    background: rgba(245, 158, 11, 0.18);
    color: #fef08a;
    font-size: 12px;
    font-weight: 800;
    text-transform: uppercase;
    letter-spacing: 0.8px;
    padding: 6px 14px;
    border-radius: 20px;
    margin-bottom: 12px;
    border: 1px solid rgba(251, 191, 36, 0.4);
}
.section-title-uae {
    font-size: 34px;
    font-weight: 900;
    color: #0f2444;
    line-height: 1.3;
    margin-bottom: 16px;
    letter-spacing: -0.5px;
}
.section-title-uae-dark {
    font-size: 34px;
    font-weight: 900;
    color: #ffffff;
    line-height: 1.3;
    margin-bottom: 16px;
    letter-spacing: -0.5px;
}
.section-sub-uae {
    font-size: 16px;
    color: #64748b;
    max-width: 780px;
    margin: 0 auto 40px;
    line-height: 1.7;
}

/* Feature Cards & Grid */
.uae-card {
    background: #ffffff;
    border: 1px solid #e2e8f0;
    border-radius: 16px;
    padding: 26px;
    transition: all 0.3s ease;
    height: 100%;
    display: flex;
    flex-direction: column;
}
.uae-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 20px 30px -10px rgba(0, 0, 0, 0.08);
    border-color: #f59e0b;
}
.uae-card-icon {
    width: 52px;
    height: 52px;
    border-radius: 14px;
    background: #fef3c7;
    color: #d97706;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 22px;
    margin-bottom: 18px;
}
.uae-card h4 {
    font-size: 19px;
    font-weight: 800;
    color: #0f2444;
    margin-bottom: 12px;
}
.uae-card p {
    font-size: 14px;
    color: #64748b;
    line-height: 1.6;
    margin-bottom: 16px;
    flex-grow: 1;
}

/* Vertical / Category Card */
.uae-vertical-card {
    background: #ffffff;
    border: 1px solid #e2e8f0;
    border-radius: 16px;
    padding: 22px;
    transition: all 0.3s ease;
    height: 100%;
    display: flex;
    flex-direction: column;
    text-decoration: none;
    color: inherit;
    position: relative;
    overflow: hidden;
}
.uae-vertical-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 15px 30px rgba(245, 158, 11, 0.18);
    border-color: #f59e0b;
    color: inherit;
}
.uae-vertical-card::after {
    content: '';
    position: absolute;
    bottom: 0;
    left: 0;
    width: 0%;
    height: 4px;
    background: linear-gradient(135deg, #f59e0b 0%, #10b981 100%);
    transition: width 0.3s ease;
}
.uae-vertical-card:hover::after {
    width: 100%;
}
.uae-vertical-icon {
    width: 48px;
    height: 48px;
    border-radius: 12px;
    background: #fef3c7;
    color: #d97706;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 20px;
    margin-bottom: 16px;
}
.uae-vertical-card h5 {
    font-size: 17px;
    font-weight: 800;
    color: #0f2444;
    margin-bottom: 8px;
}
.uae-vertical-card p {
    font-size: 13px;
    color: #64748b;
    line-height: 1.5;
    margin-bottom: 14px;
    flex-grow: 1;
}
.uae-vertical-link {
    font-size: 13px;
    font-weight: 700;
    color: #d97706;
    display: inline-flex;
    align-items: center;
    gap: 6px;
}

/* Accordion */
.accordion-uae .accordion-item {
    border: 1px solid #e2e8f0;
    border-radius: 12px !important;
    margin-bottom: 14px;
    overflow: hidden;
}
.accordion-uae .accordion-button {
    font-size: 16px;
    font-weight: 700;
    color: #0f2444;
    padding: 20px 24px;
    background: #ffffff;
    box-shadow: none;
}
.accordion-uae .accordion-button:not(.collapsed) {
    background: #fef3c7;
    color: #b45309;
}
.accordion-uae .accordion-body {
    font-size: 14px;
    line-height: 1.7;
    color: #475569;
    padding: 0 24px 20px;
}

/* City Pills */
.city-pill-uae {
    background: #ffffff;
    border: 1px solid #cbd5e1;
    padding: 12px 20px;
    border-radius: 12px;
    font-weight: 700;
    font-size: 14px;
    color: #1e293b;
    display: inline-flex;
    align-items: center;
    gap: 10px;
    transition: all 0.25s ease;
    text-decoration: none;
}
.city-pill-uae:hover {
    border-color: #f59e0b;
    background: #fef3c7;
    color: #b45309;
    transform: translateY(-2px);
}
</style>

<div class="uae-page-wrapper">
    <!-- 1. HERO SECTION -->
    <section class="uae-hero">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7 mb-4 mb-lg-0">
                    <div class="lang-toggle-bar">
                        <button type="button" class="lang-pill active" id="btn-lang-en" onclick="setUaeLang('en')">
                            <i class="fa-solid fa-globe me-1"></i> English
                        </button>
                        <button type="button" class="lang-pill" id="btn-lang-ar" onclick="setUaeLang('ar')">
                            🇦🇪 العربية (الإمارات)
                        </button>
                    </div>
                    <br>
                    <div class="eco-badge">
                        <i class="fa-solid fa-chart-line"></i>
                        <span class="uae-trans" data-en="Powering UAE's 75.5% Non-Oil Economic Hubs" data-ar="دعم نمو الاقتصاد غير النفطي في الإمارات بنسبة 75.5%">Powering UAE's 75.5% Non-Oil Economic Hubs</span>
                    </div>
                    <div class="uae-hero-badge">
                        <span class="uae-trans" data-en="🇦🇪 Enterprise Cloud ERP, Trading & AI Automation Suite in UAE" data-ar="🇦🇪 نظام تخطيط موارد المؤسسات، التجارة والأتمتة الذكية في الإمارات">🇦🇪 Enterprise Cloud ERP, Trading & AI Automation Suite in UAE</span>
                    </div>
                    <h1 class="uae-trans" 
                        data-en="ERP Software in UAE for <span class='text-gradient-uae'>Growing Businesses & SMEs</span>"
                        data-ar="برنامج ERP في الإمارات <span class='text-gradient-uae'>لتسريع نمو الشركات والمؤسسات</span>">
                        ERP Software in UAE for <span class="text-gradient-uae">Growing Businesses & SMEs</span>
                    </h1>
                    <div class="uae-hero-sub uae-trans"
                        data-en="Manage Your UAE Business with One Powerful ERP Platform"
                        data-ar="أدر أعمالك في الإمارات بمنصة سحابية متكاملة وقوية">
                        Manage Your UAE Business with One Powerful ERP Platform
                    </div>
                    <p class="uae-hero-desc uae-trans"
                        data-en="Digify Soft Solutions provides integrated ERP and business management software for businesses across the United Arab Emirates. Manage sales, purchasing, inventory, accounting, CRM, suppliers, expenses, employees, branches, 5% VAT, corporate tax records and AI business automation from one centralized platform."
                        data-ar="توفر ديجيفاي سوفت سوليوشنز برمجيات متكاملة لإدارة المؤسسات في الإمارات عبر قطاعات التجارة، التوزيع، التجزئة، الورش، التصنيع، والمقاولات. تحكم في المبيعات، المشتريات، المخازن، المحاسبة، علاقات العملاء، ضريبة القيمة المضافة 5%، وسجلات ضريبة الشركات من منصة واحدة موحدة.">
                        Digify Soft Solutions provides integrated ERP and business management software for businesses across the United Arab Emirates. Manage sales, purchasing, inventory, accounting, CRM, suppliers, expenses, employees, branches, 5% VAT, corporate tax records and AI business automation from one centralized platform.
                    </p>
                    <div class="d-flex flex-wrap gap-3">
                        <a href="javascript:void(0)" class="btn-uae-primary" data-bs-toggle="modal" data-bs-target="#trialModal">
                            <i class="fa-solid fa-calendar-check"></i>
                            <span class="uae-trans" data-en="Request a Free UAE ERP Demo" data-ar="طلب عرض توضيحي مجاني في الإمارات">Request a Free UAE ERP Demo</span>
                        </a>
                        <a href="#uae-verticals" class="btn-uae-outline">
                            <i class="fa-solid fa-layer-group"></i>
                            <span class="uae-trans" data-en="Explore 25+ UAE Verticals" data-ar="استكشف أكثر من 25 قطاعاً في الإمارات">Explore 25+ UAE Verticals</span>
                        </a>
                    </div>
                </div>

                <!-- Right Hero Lead Card -->
                <div class="col-lg-5">
                    <div class="uae-lead-card">
                        <h3 class="uae-trans" data-en="Get Your UAE Business ERP Solution" data-ar="احصل على حلول ERP لأعمالك في الإمارات">Get Your UAE Business ERP Solution</h3>
                        <p class="uae-trans" data-en="Talk directly to our UAE ERP deployment & compliance experts." data-ar="تحدث مباشرة مع خبرائنا لتطبيق نظام ERP متوافق ومخصص لأعمالك.">Talk directly to our UAE ERP deployment & compliance experts.</p>
                        
                        <form action="send_mail.php" method="POST" id="uaeMasterLeadForm">
                            <input type="hidden" name="source" value="UAE Master ERP Page">
                            <input type="hidden" name="country" value="UAE">
                            <div class="mb-3">
                                <label class="form-label small fw-bold uae-trans" data-en="Your Name" data-ar="الاسم الكامل">Your Name</label>
                                <input type="text" name="name" class="form-control" placeholder="Rashid Al-Nuaimi" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label small fw-bold uae-trans" data-en="Company / Establishment Name" data-ar="اسم الشركة / المؤسسة">Company / Establishment Name</label>
                                <input type="text" name="company_name" class="form-control" placeholder="Dubai Horizon Trading LLC" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label small fw-bold uae-trans" data-en="WhatsApp / Mobile Number" data-ar="رقم الجوال / واتساب">WhatsApp / Mobile Number</label>
                                <input type="tel" name="phone" class="form-control" placeholder="+971 5X XXX XXXX" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label small fw-bold uae-trans" data-en="Business Sector" data-ar="مجال العمل / القطاع">Business Sector</label>
                                <select name="industry" class="form-select" required>
                                    <option value="General Trading & Import/Export">General Trading & Import/Export (التجارة العامة والاستيراد)</option>
                                    <option value="Distribution & Wholesale">Distribution & Wholesale (التوزيع والجملة)</option>
                                    <option value="Retail & Supermarkets">Retail & Supermarkets (التجزئة والسوبرماركت)</option>
                                    <option value="Auto Workshops & Parts">Auto Workshops & Parts (ورش السيارات وقطع الغيار)</option>
                                    <option value="Manufacturing & Packaging">Manufacturing & Packaging (التصنيع والتعبئة)</option>
                                    <option value="Construction & Contractors">Construction & Contractors (المقاولات والإنشاءات)</option>
                                    <option value="Logistics & Freight">Logistics & Freight (اللوجستيات والشحن)</option>
                                    <option value="Services & Digital Agency">Services & Digital Agency (الخدمات والشركات المهنية)</option>
                                    <option value="Hospitality & Restaurants">Hospitality & Restaurants (المطاعم والضيافة)</option>
                                    <option value="Other SME Enterprise">Other SME Enterprise (قطاع آخر)</option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-uae-primary w-100 justify-content-center">
                                <i class="fa-solid fa-paper-plane me-2"></i>
                                <span class="uae-trans" data-en="Schedule Free Consultation" data-ar="حجز استشارة مجانية الآن">Schedule Free Consultation</span>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 2. FOUR CORE UAE VALUE PILLARS -->
    <section class="uae-section bg-light-uae">
        <div class="container">
            <div class="text-center">
                <span class="section-badge-uae uae-trans" data-en="UAE SME Engine" data-ar="محرك نمو الشركات">UAE SME Engine</span>
                <h2 class="section-title-uae uae-trans"
                    data-en="Engineered for UAE's Trading & Commercial Realities"
                    data-ar="مصمم خصيصاً ليلبي متطلبات قطاع التجارة والأعمال في الإمارات">
                    Engineered for UAE's Trading & Commercial Realities
                </h2>
                <p class="section-sub-uae uae-trans"
                    data-en="Affordable, customizable ERP without the complexity and bloated costs of traditional software."
                    data-ar="نظام ERP مرن، سريع، وقابل للتخصيص دون التعقيدات والتكاليف الباهظة للأنظمة التقليدية:">
                    Affordable, customizable ERP without the complexity and bloated costs of traditional software.
                </p>
            </div>

            <div class="row g-4">
                <div class="col-lg-3 col-md-6">
                    <div class="uae-card">
                        <div class="uae-card-icon"><i class="fa-solid fa-boxes-stacked"></i></div>
                        <h4 class="uae-trans" data-en="Trading & Distribution" data-ar="التجارة والتوزيع">Trading & Distribution</h4>
                        <p class="uae-trans" 
                            data-en="Multi-warehouse stock, landed cost computation, international supplier billing, customs duty allocation, and client credit limits."
                            data-ar="المستودعات المتعددة، احتساب تكلفة البضاعة الواصلة، المشتريات الدولية، الرسوم الجمركية، وحدود الائتمان.">
                            Multi-warehouse stock, landed cost computation, international supplier billing, customs duty allocation, and client credit limits.
                        </p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="uae-card">
                        <div class="uae-card-icon"><i class="fa-solid fa-file-invoice-dollar"></i></div>
                        <h4 class="uae-trans" data-en="5% VAT & 9% Corporate Tax" data-ar="ضريبة القيمة المضافة 5% والشركات 9%">5% VAT & 9% Corporate Tax</h4>
                        <p class="uae-trans" 
                            data-en="Standard 5% VAT calculations, audit-ready sales/purchase registers, expense ledgers, and organized corporate tax financial records."
                            data-ar="احتساب ضريبة القيمة المضافة 5%، دفاتر المبيعات والمشتريات، وسجلات المحاسبة المنظمة لضريبة الشركات.">
                            Standard 5% VAT calculations, audit-ready sales/purchase registers, expense ledgers, and organized corporate tax financial records.
                        </p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="uae-card">
                        <div class="uae-card-icon"><i class="fa-solid fa-robot"></i></div>
                        <h4 class="uae-trans" data-en="AI & WhatsApp Automation" data-ar="الأتمتة الذكية والواتساب">AI & WhatsApp Automation</h4>
                        <p class="uae-trans" 
                            data-en="Automated OCR document scanning, smart customer WhatsApp prompts, sales pipeline tracking, and instant manager alerts."
                            data-ar="مسح الفواتير رقمياً عبر الذكاء الاصطناعي، رسائل وتنبيهات الواتساب الآلية للعملاء، وتتبع خطوط المبيعات.">
                            Automated OCR document scanning, smart customer WhatsApp prompts, sales pipeline tracking, and instant manager alerts.
                        </p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="uae-card">
                        <div class="uae-card-icon"><i class="fa-solid fa-language"></i></div>
                        <h4 class="uae-trans" data-en="Bilingual Arabic & English" data-ar="ثنائي اللغة بالكامل">Bilingual Arabic & English</h4>
                        <p class="uae-trans" 
                            data-en="Bilingual user experience, Arabic & English invoice templates, dual-language customer profiles, and multi-currency ledgers."
                            data-ar="تجربة مستخدم باللغتين العربية والإنجليزية، طباعة الفواتير ثنائية اللغة، ومحاسبة متعددة العملات (AED/USD/EUR).">
                            Bilingual user experience, Arabic & English invoice templates, dual-language customer profiles, and multi-currency ledgers.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 3. UAE VAT, CORPORATE TAX & E-INVOICING SECTION -->
    <section class="uae-section bg-white">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <span class="section-badge-uae uae-trans" data-en="Fiscal Framework" data-ar="الامتثال والضرائب في الإمارات">Fiscal Framework</span>
                    <h2 class="section-title-uae uae-trans"
                        data-en="UAE VAT, Corporate Tax & E-Invoicing Ready Architecture"
                        data-ar="إدارة ضريبة القيمة المضافة 5%، ضريبة الشركات 9% والفوترة الإلكترونية">
                        UAE VAT, Corporate Tax & E-Invoicing Ready Architecture
                    </h2>
                    <p class="text-muted uae-trans" style="line-height: 1.8; font-size: 15px;"
                        data-en="Maintain organized accounting and financial records to support UAE VAT filings and corporate tax compliance. Centralize revenue, expenses, customer transactions, supplier balances, and profit/loss statements in one structured ERP environment."
                        data-ar="حافظ على تنظيم السجلات المحاسبية والمالية لدعم إقرارات ضريبة القيمة المضافة والامتثال لضريبة الشركات في دولة الإمارات. وحد الإيرادات، المصروفات، معاملات العملاء والموردين في نظام مالي موثوق.">
                        Maintain organized accounting and financial records to support UAE VAT filings and corporate tax compliance. Centralize revenue, expenses, customer transactions, supplier balances, and profit/loss statements in one structured ERP environment.
                    </p>

                    <div class="p-3 mb-3 bg-light-uae rounded-3 border-start border-4 border-warning shadow-sm">
                        <p class="mb-0 small text-muted uae-trans"
                            data-en="<strong class='text-dark'>UAE 5% VAT Management:</strong> Automated 5% VAT application, customer/supplier TRN validation, zero-rated export workflows, and monthly tax summaries."
                            data-ar="<strong class='text-dark'>إدارة ضريبة القيمة المضافة 5%:</strong> تطبيق آلي للضريبة، التحقق من الأرقام الضريبية (TRN)، معالجة الصادرات الصفرية، وتلخيص الضرائب الدورية.">
                            <strong class="text-dark">UAE 5% VAT Management:</strong> Automated 5% VAT application, customer/supplier TRN validation, zero-rated export workflows, and monthly tax summaries.
                        </p>
                    </div>

                    <div class="p-3 mb-3 bg-light-uae rounded-3 border-start border-4 border-success shadow-sm">
                        <p class="mb-0 small text-muted uae-trans"
                            data-en="<strong class='text-dark'>Corporate Tax Financial Organization:</strong> Centralize accounting records to support corporate tax requirements (9% standard rate above AED 375,000 / 0% under AED 375,000)."
                            data-ar="<strong class='text-dark'>تنظيم حسابات ضريبة الشركات:</strong> سجلات أرباح وخسائر ومصروفات منظمة لدعم متطلبات ضريبة الشركات (معدل 9% فوق 375,000 درهم).">
                            <strong class="text-dark">Corporate Tax Financial Organization:</strong> Centralize accounting records to support corporate tax requirements (9% standard rate above AED 375,000 / 0% under AED 375,000).
                        </p>
                    </div>

                    <div class="p-3 bg-light-uae rounded-3 border-start border-4 border-primary shadow-sm">
                        <p class="mb-0 small text-muted uae-trans"
                            data-en="<strong class='text-dark'>E-Invoicing Readiness:</strong> Prepare your enterprise for structured digital invoice data formats, QR code verification, and audit logs."
                            data-ar="<strong class='text-dark'>جاهزية الفوترة الرقمية:</strong> تهيئة المؤسسة لبيانات الفواتير الرقمية المهيكلة ورموز الاستجابة السريعة وسجلات التدقيق.">
                            <strong class="text-dark">E-Invoicing Readiness:</strong> Prepare your enterprise for structured digital invoice data formats, QR code verification, and audit logs.
                        </p>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="row g-3">
                        <div class="col-sm-6">
                            <div class="p-4 bg-light-uae rounded-3 border h-100 shadow-sm">
                                <i class="fa-solid fa-calculator text-warning fs-3 mb-3"></i>
                                <h5 class="fw-bold uae-trans" data-en="5% Standard VAT" data-ar="ضريبة 5% الآلية">5% Standard VAT</h5>
                                <p class="small text-muted mb-0 uae-trans"
                                    data-en="Itemized line tax computation, discount adjustments, and net payable summaries."
                                    data-ar="حساب آلي للضريبة لكل بند مع معالجة الخصومات وصافي المبالغ المستحقة.">
                                    Itemized line tax computation, discount adjustments, and net payable summaries.
                                </p>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="p-4 bg-light-uae rounded-3 border h-100 shadow-sm">
                                <i class="fa-solid fa-file-invoice text-warning fs-3 mb-3"></i>
                                <h5 class="fw-bold uae-trans" data-en="Bilingual QR Invoices" data-ar="فواتير QR ثنائية اللغة">Bilingual QR Invoices</h5>
                                <p class="small text-muted mb-0 uae-trans"
                                    data-en="Print official A4 and POS receipts with TRN numbers, QR codes, and Arabic terms."
                                    data-ar="طباعة فواتير رسمية ورقية وحرارية تحتوي على الرقم الضريبي ورمز QR واللغة العربية.">
                                    Print official A4 and POS receipts with TRN numbers, QR codes, and Arabic terms.
                                </p>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="p-4 bg-light-uae rounded-3 border h-100 shadow-sm">
                                <i class="fa-solid fa-building-columns text-warning fs-3 mb-3"></i>
                                <h5 class="fw-bold uae-trans" data-en="Corporate Tax Ledgers" data-ar="سجلات ضريبة الشركات">Corporate Tax Ledgers</h5>
                                <p class="small text-muted mb-0 uae-trans"
                                    data-en="Organized income, allowable business expense ledgers, and period-wise P&L."
                                    data-ar="سجلات منظمة للإيرادات والمصروفات المؤهلة وتقارير الأرباح والخسائر الدورية.">
                                    Organized income, allowable business expense ledgers, and period-wise P&L.
                                </p>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="p-4 bg-light-uae rounded-3 border h-100 shadow-sm">
                                <i class="fa-solid fa-shield-halved text-warning fs-3 mb-3"></i>
                                <h5 class="fw-bold uae-trans" data-en="Audit Trails & Controls" data-ar="سجلات التدقيق والأمان">Audit Trails & Controls</h5>
                                <p class="small text-muted mb-0 uae-trans"
                                    data-en="Sequential invoice numbering, timestamped user logs, and immutable financial history."
                                    data-ar="ترقيم فواتير تسلسلي غير قابل للتكرار وتتبع لكافة العمليات المالية.">
                                    Sequential invoice numbering, timestamped user logs, and immutable financial history.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 4. 25+ UAE DEDICATED INDUSTRY VERTICALS GRID -->
    <section class="uae-section bg-light-uae" id="uae-verticals">
        <div class="container">
            <div class="text-center">
                <span class="section-badge-uae uae-trans" data-en="Industry Solutions" data-ar="القطاعات الصناعية والتجارية">Industry Solutions</span>
                <h2 class="section-title-uae uae-trans"
                    data-en="Explore 25+ Dedicated UAE ERP Verticals"
                    data-ar="استكشف أكثر من 25 قطاعاً تخصصياً في دولة الإمارات">
                    Explore 25+ Dedicated UAE ERP Verticals
                </h2>
                <p class="section-sub-uae uae-trans"
                    data-en="Custom modules, landed cost engines, and operational workflows tailored for every UAE economic sector."
                    data-ar="وحدات برمجية مخصصة لإدارة العمليات التجارية والمالية والتوزيع في كافة قطاعات الأعمال:">
                    Custom modules, landed cost engines, and operational workflows tailored for every UAE economic sector.
                </p>
            </div>

            <div class="row g-4">
                <!-- 1. Trading ERP -->
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <a href="trading-erp-software-uae.php" class="uae-vertical-card">
                        <div class="uae-vertical-icon"><i class="fa-solid fa-boxes-packing"></i></div>
                        <h5 class="uae-trans" data-en="Trading ERP" data-ar="ERP التجارة العامة">Trading ERP</h5>
                        <p class="uae-trans" data-en="General trading, multi-currency, purchase-to-sales, and customer credit." data-ar="التجارة العامة، المبيعات والمشتريات، وتتبع حدود الائتمان للعملاء.">General trading, multi-currency, purchase-to-sales, and customer credit.</p>
                        <span class="uae-vertical-link"><span class="uae-trans" data-en="View Solution" data-ar="عرض الحل">View Solution</span> <i class="fa-solid fa-arrow-right"></i></span>
                    </a>
                </div>

                <!-- 2. Distribution ERP -->
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <a href="distribution-erp-software-uae.php" class="uae-vertical-card">
                        <div class="uae-vertical-icon"><i class="fa-solid fa-truck-ramp-box"></i></div>
                        <h5 class="uae-trans" data-en="Distribution ERP" data-ar="ERP التوزيع والجملة">Distribution ERP</h5>
                        <p class="uae-trans" data-en="Multi-warehouse stock, van delivery, wholesale credit, and dispatch." data-ar="المستودعات المتعددة، مبيعات سيارات التوزيع، ومتابعة التحصيلات.">Multi-warehouse stock, van delivery, wholesale credit, and dispatch.</p>
                        <span class="uae-vertical-link"><span class="uae-trans" data-en="View Solution" data-ar="عرض الحل">View Solution</span> <i class="fa-solid fa-arrow-right"></i></span>
                    </a>
                </div>

                <!-- 3. Wholesale ERP -->
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <a href="wholesale-erp-software-uae.php" class="uae-vertical-card">
                        <div class="uae-vertical-icon"><i class="fa-solid fa-dolly"></i></div>
                        <h5 class="uae-trans" data-en="Wholesale ERP" data-ar="ERP تجارة الجملة">Wholesale ERP</h5>
                        <p class="uae-trans" data-en="Bulk purchasing, tiered quantity pricing, supplier balances, and B2B orders." data-ar="المشتريات الكبرى، أسعار الجملة حسب الكمية، وحسابات كبار العملاء.">Bulk purchasing, tiered quantity pricing, supplier balances, and B2B orders.</p>
                        <span class="uae-vertical-link"><span class="uae-trans" data-en="View Solution" data-ar="عرض الحل">View Solution</span> <i class="fa-solid fa-arrow-right"></i></span>
                    </a>
                </div>

                <!-- 4. Retail ERP -->
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <a href="retail-erp-software-uae.php" class="uae-vertical-card">
                        <div class="uae-vertical-icon"><i class="fa-solid fa-cart-shopping"></i></div>
                        <h5 class="uae-trans" data-en="Retail POS & ERP" data-ar="ERP نقاط البيع والتجزئة">Retail POS & ERP</h5>
                        <p class="uae-trans" data-en="Barcode scanning, mall outlet sync, customer loyalty, and daily sales." data-ar="الفوترة السريعة بالباركود، مزامنة فروع المولات، وبرامج الولاء.">Barcode scanning, mall outlet sync, customer loyalty, and daily sales.</p>
                        <span class="uae-vertical-link"><span class="uae-trans" data-en="View Solution" data-ar="عرض الحل">View Solution</span> <i class="fa-solid fa-arrow-right"></i></span>
                    </a>
                </div>

                <!-- 5. Supermarket ERP -->
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <a href="supermarket-erp-software-uae.php" class="uae-vertical-card">
                        <div class="uae-vertical-icon"><i class="fa-solid fa-basket-shopping"></i></div>
                        <h5 class="uae-trans" data-en="Supermarket ERP" data-ar="ERP السوبرماركت">Supermarket ERP</h5>
                        <p class="uae-trans" data-en="Weigh scale barcode sync, fast checkout lanes, fresh food, and FMCG stock." data-ar="باركود الموازين، مسارات الدفع السريعة، وإدارة السلع الاستهلاكية.">Weigh scale barcode sync, fast checkout lanes, fresh food, and FMCG stock.</p>
                        <span class="uae-vertical-link"><span class="uae-trans" data-en="View Solution" data-ar="عرض الحل">View Solution</span> <i class="fa-solid fa-arrow-right"></i></span>
                    </a>
                </div>

                <!-- 6. Workshop ERP -->
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <a href="workshop-erp-software-uae.php" class="uae-vertical-card">
                        <div class="uae-vertical-icon"><i class="fa-solid fa-wrench"></i></div>
                        <h5 class="uae-trans" data-en="Workshop ERP" data-ar="ERP ورش الصيانة">Workshop ERP</h5>
                        <p class="uae-trans" data-en="Job cards, spare parts inventory, technician logs, and vehicle service records." data-ar="بطاقات العمل (Job Cards)، مخزون قطع الغيار، وسجلات صيانة المركبات.">Job cards, spare parts inventory, technician logs, and vehicle service records.</p>
                        <span class="uae-vertical-link"><span class="uae-trans" data-en="View Solution" data-ar="عرض الحل">View Solution</span> <i class="fa-solid fa-arrow-right"></i></span>
                    </a>
                </div>

                <!-- 7. Automotive ERP -->
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <a href="automotive-erp-software-uae.php" class="uae-vertical-card">
                        <div class="uae-vertical-icon"><i class="fa-solid fa-car"></i></div>
                        <h5 class="uae-trans" data-en="Automotive & Spare Parts" data-ar="ERP قطع غيار السيارات">Automotive & Spare Parts</h5>
                        <p class="uae-trans" data-en="Part numbers, OEM interchange, tyre shops, and auto accessories." data-ar="أرقام القطع والبدائل، محلات الإطارات، وموزعي إكسسوارات السيارات.">Part numbers, OEM interchange, tyre shops, and auto accessories.</p>
                        <span class="uae-vertical-link"><span class="uae-trans" data-en="View Solution" data-ar="عرض الحل">View Solution</span> <i class="fa-solid fa-arrow-right"></i></span>
                    </a>
                </div>

                <!-- 8. Service Business ERP -->
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <a href="service-business-erp-software-uae.php" class="uae-vertical-card">
                        <div class="uae-vertical-icon"><i class="fa-solid fa-briefcase"></i></div>
                        <h5 class="uae-trans" data-en="Service Business ERP" data-ar="ERP الشركات الخدمية">Service Business ERP</h5>
                        <p class="uae-trans" data-en="IT firms, digital agencies, consulting, facilities, and maintenance." data-ar="شركات تقنية المعلومات، الاستشارات، إدارة المرافق، والخدمات المهنية.">IT firms, digital agencies, consulting, facilities, and maintenance.</p>
                        <span class="uae-vertical-link"><span class="uae-trans" data-en="View Solution" data-ar="عرض الحل">View Solution</span> <i class="fa-solid fa-arrow-right"></i></span>
                    </a>
                </div>

                <!-- 9. Manufacturing ERP -->
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <a href="manufacturing-erp-software-uae.php" class="uae-vertical-card">
                        <div class="uae-vertical-icon"><i class="fa-solid fa-industry"></i></div>
                        <h5 class="uae-trans" data-en="Manufacturing ERP" data-ar="ERP الصناعة والتصنيع">Manufacturing ERP</h5>
                        <p class="uae-trans" data-en="Raw materials, BOM formulas, production stages, scrap, and costing." data-ar="المواد الخام، قوائم التركيب، مراحل الإنتاج، والهالك وتكاليف المصانع.">Raw materials, BOM formulas, production stages, scrap, and costing.</p>
                        <span class="uae-vertical-link"><span class="uae-trans" data-en="View Solution" data-ar="عرض الحل">View Solution</span> <i class="fa-solid fa-arrow-right"></i></span>
                    </a>
                </div>

                <!-- 10. Construction ERP -->
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <a href="construction-erp-software-uae.php" class="uae-vertical-card">
                        <div class="uae-vertical-icon"><i class="fa-solid fa-trowel-bricks"></i></div>
                        <h5 class="uae-trans" data-en="Construction ERP" data-ar="ERP الإنشاءات والبناء">Construction ERP</h5>
                        <p class="uae-trans" data-en="Civil projects, site material indents, machinery logs, and progress billing." data-ar="مشاريع البناء، طلبات المواد للمواقع، وسندات ومستخلصات الإنجاز.">Civil projects, site material indents, machinery logs, and progress billing.</p>
                        <span class="uae-vertical-link"><span class="uae-trans" data-en="View Solution" data-ar="عرض الحل">View Solution</span> <i class="fa-solid fa-arrow-right"></i></span>
                    </a>
                </div>

                <!-- 11. Contractor ERP -->
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <a href="contractor-erp-software-uae.php" class="uae-vertical-card">
                        <div class="uae-vertical-icon"><i class="fa-solid fa-helmet-safety"></i></div>
                        <h5 class="uae-trans" data-en="Contractor & Fit-Out ERP" data-ar="ERP المقاولات والديكور">Contractor & Fit-Out ERP</h5>
                        <p class="uae-trans" data-en="MEP, interior fit-out, subcontractor claims, and retention tracking." data-ar="مقاولات الأعمال الكهروميكانيكية، الديكور الداخلي، ومستخلصات الباطن.">MEP, interior fit-out, subcontractor claims, and retention tracking.</p>
                        <span class="uae-vertical-link"><span class="uae-trans" data-en="View Solution" data-ar="عرض الحل">View Solution</span> <i class="fa-solid fa-arrow-right"></i></span>
                    </a>
                </div>

                <!-- 12. Logistics ERP -->
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <a href="logistics-erp-software-uae.php" class="uae-vertical-card">
                        <div class="uae-vertical-icon"><i class="fa-solid fa-truck-fast"></i></div>
                        <h5 class="uae-trans" data-en="Logistics & Fleet ERP" data-ar="ERP الخدمات اللوجستية">Logistics & Fleet ERP</h5>
                        <p class="uae-trans" data-en="Fleet records, driver trips, fuel logs, delivery tracking, and freight." data-ar="سجلات الأسطول، رحلات السائقين، تتبع الوقود، وفواتير الشحن والنقل.">Fleet records, driver trips, fuel logs, delivery tracking, and freight.</p>
                        <span class="uae-vertical-link"><span class="uae-trans" data-en="View Solution" data-ar="عرض الحل">View Solution</span> <i class="fa-solid fa-arrow-right"></i></span>
                    </a>
                </div>

                <!-- 13. Import & Export ERP -->
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <a href="import-export-erp-software-uae.php" class="uae-vertical-card">
                        <div class="uae-vertical-icon"><i class="fa-solid fa-ship"></i></div>
                        <h5 class="uae-trans" data-en="Import & Export ERP" data-ar="ERP الاستيراد والتصدير">Import & Export ERP</h5>
                        <p class="uae-trans" data-en="Jebel Ali port clearance, multi-currency invoices, and landed cost." data-ar="التخليص الجمركي بميناء جبل علي، الفواتير الدولية، وحساب التكلفة.">Jebel Ali port clearance, multi-currency invoices, and landed cost.</p>
                        <span class="uae-vertical-link"><span class="uae-trans" data-en="View Solution" data-ar="عرض الحل">View Solution</span> <i class="fa-solid fa-arrow-right"></i></span>
                    </a>
                </div>

                <!-- 14. Building Material ERP -->
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <a href="building-material-erp-software-uae.php" class="uae-vertical-card">
                        <div class="uae-vertical-icon"><i class="fa-solid fa-cubes-stacked"></i></div>
                        <h5 class="uae-trans" data-en="Building Materials" data-ar="ERP مواد البناء">Building Materials</h5>
                        <p class="uae-trans" data-en="Steel, cement, tiles, sanitary supplies, yard inventory, and fleet dispatch." data-ar="تجارة وتوزيع الحديد، الإسمنت، السيراميك، ومواد البناء والتشطيب.">Steel, cement, tiles, sanitary supplies, yard inventory, and fleet dispatch.</p>
                        <span class="uae-vertical-link"><span class="uae-trans" data-en="View Solution" data-ar="عرض الحل">View Solution</span> <i class="fa-solid fa-arrow-right"></i></span>
                    </a>
                </div>

                <!-- 15. Electronics & Mobile ERP -->
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <a href="electronics-erp-software-uae.php" class="uae-vertical-card">
                        <div class="uae-vertical-icon"><i class="fa-solid fa-mobile-screen-button"></i></div>
                        <h5 class="uae-trans" data-en="Electronics & Mobile" data-ar="ERP الإلكترونيات والهواتف">Electronics & Mobile</h5>
                        <p class="uae-trans" data-en="IMEI tracking, smartphone accessories, warranty logs, and retail POS." data-ar="تتبع السيريال/IMEI، إكسسوارات الهواتف، الضمان، ومبيعات التجزئة.">IMEI tracking, smartphone accessories, warranty logs, and retail POS.</p>
                        <span class="uae-vertical-link"><span class="uae-trans" data-en="View Solution" data-ar="عرض الحل">View Solution</span> <i class="fa-solid fa-arrow-right"></i></span>
                    </a>
                </div>

                <!-- 16. Pharmacy ERP -->
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <a href="pharmacy-erp-software-uae.php" class="uae-vertical-card">
                        <div class="uae-vertical-icon"><i class="fa-solid fa-pills"></i></div>
                        <h5 class="uae-trans" data-en="Pharmacy & Healthcare" data-ar="ERP الصيدليات">Pharmacy & Healthcare</h5>
                        <p class="uae-trans" data-en="Batch numbers, expiry date monitoring, supplier orders, and counter POS." data-ar="مراقبة أرقام التشغيلات وتواريخ الصلاحية، وطلبيات الموردين.">Batch numbers, expiry date monitoring, supplier orders, and counter POS.</p>
                        <span class="uae-vertical-link"><span class="uae-trans" data-en="View Solution" data-ar="عرض الحل">View Solution</span> <i class="fa-solid fa-arrow-right"></i></span>
                    </a>
                </div>

                <!-- 17. Restaurant & F&B ERP -->
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <a href="restaurant-erp-software-uae.php" class="uae-vertical-card">
                        <div class="uae-vertical-icon"><i class="fa-solid fa-utensils"></i></div>
                        <h5 class="uae-trans" data-en="Restaurant & F&B" data-ar="ERP المطاعم والمقاهي">Restaurant & F&B</h5>
                        <p class="uae-trans" data-en="KDS kitchen display, recipe ingredient costing, split checks, and POS." data-ar="شاشات المطابخ KDS، تكاليف مكونات الوصفات، ونقاط البيع السريعة.">KDS kitchen display, recipe ingredient costing, split checks, and POS.</p>
                        <span class="uae-vertical-link"><span class="uae-trans" data-en="View Solution" data-ar="عرض الحل">View Solution</span> <i class="fa-solid fa-arrow-right"></i></span>
                    </a>
                </div>

                <!-- 18. Hospitality ERP -->
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <a href="hospitality-erp-software-uae.php" class="uae-vertical-card">
                        <div class="uae-vertical-icon"><i class="fa-solid fa-hotel"></i></div>
                        <h5 class="uae-trans" data-en="Hospitality & Catering" data-ar="ERP الضيافة والفنادق">Hospitality & Catering</h5>
                        <p class="uae-trans" data-en="Boutique hotels, catering events, food inventory, and staff rosters." data-ar="الفنادق، شركات التموين والحفلات، مخزون الأغذية، ومسيرات الرواتب.">Boutique hotels, catering events, food inventory, and staff rosters.</p>
                        <span class="uae-vertical-link"><span class="uae-trans" data-en="View Solution" data-ar="عرض الحل">View Solution</span> <i class="fa-solid fa-arrow-right"></i></span>
                    </a>
                </div>

                <!-- 19. FMCG ERP -->
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <a href="fmcg-erp-software-uae.php" class="uae-vertical-card">
                        <div class="uae-vertical-icon"><i class="fa-solid fa-bottle-water"></i></div>
                        <h5 class="uae-trans" data-en="FMCG Distribution" data-ar="ERP السلع الاستهلاكية">FMCG Distribution</h5>
                        <p class="uae-trans" data-en="Fast moving consumer goods, batch tracking, van sales, and retail credit." data-ar="السلع الاستهلاكية سريعة الدوران، مبيعات المناديب، وتوزيع التجزئة.">Fast moving consumer goods, batch tracking, van sales, and retail credit.</p>
                        <span class="uae-vertical-link"><span class="uae-trans" data-en="View Solution" data-ar="عرض الحل">View Solution</span> <i class="fa-solid fa-arrow-right"></i></span>
                    </a>
                </div>

                <!-- 20. E-Commerce ERP -->
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <a href="ecommerce-erp-software-uae.php" class="uae-vertical-card">
                        <div class="uae-vertical-icon"><i class="fa-solid fa-bag-shopping"></i></div>
                        <h5 class="uae-trans" data-en="E-Commerce ERP" data-ar="ERP المتاجر الإلكترونية">E-Commerce ERP</h5>
                        <p class="uae-trans" data-en="Centralize online orders, multi-warehouse stock, returns, and dispatch." data-ar="توحيد طلبات المتاجر الإلكترونية، المخزون، المرتجعات، والشحن.">Centralize online orders, multi-warehouse stock, returns, and dispatch.</p>
                        <span class="uae-vertical-link"><span class="uae-trans" data-en="View Solution" data-ar="عرض الحل">View Solution</span> <i class="fa-solid fa-arrow-right"></i></span>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- 5. FUNCTIONAL & FISCAL SPECIALTY SUITES -->
    <section class="uae-section bg-white">
        <div class="container">
            <div class="text-center mb-5">
                <span class="section-badge-uae uae-trans" data-en="Core Capabilities" data-ar="الأنظمة الوظيفية المتخصصة">Core Capabilities</span>
                <h2 class="section-title-uae uae-trans"
                    data-en="Specialized Accounting, HRMS, CRM & AI Automation Suites"
                    data-ar="منظومات المحاسبة، الموارد البشرية، CRM والأتمتة الذكية">
                    Specialized Accounting, HRMS, CRM & AI Automation Suites
                </h2>
                <p class="section-sub-uae uae-trans"
                    data-en="Dedicated enterprise modules engineered for UAE legal, fiscal, and operational workflows."
                    data-ar="وحدات متخصصة تدعم كافة المتطلبات الإدارية والمالية للشركات في الإمارات:">
                    Dedicated enterprise modules engineered for UAE legal, fiscal, and operational workflows.
                </p>
            </div>

            <div class="row g-4">
                <div class="col-md-4 col-sm-6">
                    <a href="accounting-software-uae.php" class="p-4 rounded-3 border h-100 d-block text-decoration-none text-dark bg-light-uae">
                        <i class="fa-solid fa-calculator text-warning fs-3 mb-3"></i>
                        <h5 class="fw-bold uae-trans" data-en="Accounting & Ledgers" data-ar="المحاسبة والدفاتر المالية">Accounting & Ledgers</h5>
                        <p class="small text-muted mb-0 uae-trans" data-en="Income, expenses, receivables, payables, multi-currency and audit reports." data-ar="الإيرادات، المصروفات، المدينين، الدائنين، والتقارير المالية المجمعة.">Income, expenses, receivables, payables, multi-currency and audit reports.</p>
                    </a>
                </div>
                <div class="col-md-4 col-sm-6">
                    <a href="crm-software-uae.php" class="p-4 rounded-3 border h-100 d-block text-decoration-none text-dark bg-light-uae">
                        <i class="fa-solid fa-handshake-angle text-warning fs-3 mb-3"></i>
                        <h5 class="fw-bold uae-trans" data-en="CRM & Sales Pipeline" data-ar="إدارة علاقات العملاء CRM">CRM & Sales Pipeline</h5>
                        <p class="small text-muted mb-0 uae-trans" data-en="Lead stages, fast quotation generation, customer 360°, and follow-ups." data-ar="مراحل الصفقات، عروض الأسعار السريعة، وسجل تعاملات العملاء.">Lead stages, fast quotation generation, customer 360°, and follow-ups.</p>
                    </a>
                </div>
                <div class="col-md-4 col-sm-6">
                    <a href="hrms-software-uae.php" class="p-4 rounded-3 border h-100 d-block text-decoration-none text-dark bg-light-uae">
                        <i class="fa-solid fa-user-gear text-warning fs-3 mb-3"></i>
                        <h5 class="fw-bold uae-trans" data-en="HRMS & Document Vault" data-ar="الموارد البشرية والمستندات">HRMS & Document Vault</h5>
                        <p class="small text-muted mb-0 uae-trans" data-en="Employee profiles, visa/passport expiry reminders, attendance, and leave workflows." data-ar="سجلات الموظفين، متابعة انتهاء التأشيرات والجوازات، والإجازات.">Employee profiles, visa/passport expiry reminders, attendance, and leave workflows.</p>
                    </a>
                </div>
                <div class="col-md-4 col-sm-6">
                    <a href="payroll-software-uae.php" class="p-4 rounded-3 border h-100 d-block text-decoration-none text-dark bg-light-uae">
                        <i class="fa-solid fa-money-check-dollar text-warning fs-3 mb-3"></i>
                        <h5 class="fw-bold uae-trans" data-en="Payroll Software" data-ar="نظام مسيرات الرواتب">Payroll Software</h5>
                        <p class="small text-muted mb-0 uae-trans" data-en="Salary records, allowances, deductions, advances, and payroll registers." data-ar="مسيرات الرواتب، البدلات، الخصومات، السلف، وإصدار قسائم الرواتب.">Salary records, allowances, deductions, advances, and payroll registers.</p>
                    </a>
                </div>
                <div class="col-md-4 col-sm-6">
                    <a href="ai-business-automation-uae.php" class="p-4 rounded-3 border h-100 d-block text-decoration-none text-dark bg-light-uae">
                        <i class="fa-solid fa-brain text-warning fs-3 mb-3"></i>
                        <h5 class="fw-bold uae-trans" data-en="AI Business Automation" data-ar="الأتمتة بالذكاء الاصطناعي">AI Business Automation</h5>
                        <p class="small text-muted mb-0 uae-trans" data-en="OCR invoice scanning, WhatsApp customer bots, and intelligent dashboards." data-ar="مسح الفواتير بالـ OCR، بوتات الواتساب، والتحليلات الذكية.">OCR invoice scanning, WhatsApp customer bots, and intelligent dashboards.</p>
                    </a>
                </div>
                <div class="col-md-4 col-sm-6">
                    <a href="uae-corporate-tax-software.php" class="p-4 rounded-3 border h-100 d-block text-decoration-none text-dark bg-light-uae">
                        <i class="fa-solid fa-scale-balanced text-warning fs-3 mb-3"></i>
                        <h5 class="fw-bold uae-trans" data-en="UAE Corporate Tax Records" data-ar="سجلات ضريبة الشركات">UAE Corporate Tax Records</h5>
                        <p class="small text-muted mb-0 uae-trans" data-en="9% Corporate Tax financial preparation, revenue, and expense classification." data-ar="تنظيم السجلات المالية لضريبة الشركات 9% وتصنيف المصروفات.">9% Corporate Tax financial preparation, revenue, and expense classification.</p>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- 6. SEVEN EMIRATES REGIONAL FOOTPRINT -->
    <section class="uae-section bg-dark-uae">
        <div class="container">
            <div class="text-center">
                <span class="section-badge-uae-dark uae-trans" data-en="All 7 Emirates" data-ar="تغطية الإمارات السبع">All 7 Emirates</span>
                <h2 class="section-title-uae-dark uae-trans"
                    data-en="Supporting Businesses Across the 7 United Arab Emirates"
                    data-ar="نخدم الشركات والمؤسسات في كافة إمارات الدولة السبع">
                    Supporting Businesses Across the 7 United Arab Emirates
                </h2>
                <p class="section-sub-uae text-white-50 uae-trans"
                    data-en="Connecting corporate headquarters, free zones, industrial areas, and retail malls across every Emirate."
                    data-ar="ربط الفروع والمستودعات والمناطق الحرة في دبي، أبوظبي، الشارقة وكافة الإمارات:">
                    Connecting corporate headquarters, free zones, industrial areas, and retail malls across every Emirate.
                </p>
            </div>

            <div class="d-flex flex-wrap justify-content-center gap-3 mb-4">
                <a href="erp-software-dubai.php" class="city-pill-uae">
                    <i class="fa-solid fa-city text-warning"></i>
                    <div>
                        <div class="fw-bold">Dubai (دبي)</div>
                        <small class="text-muted uae-trans" data-en="Global Commercial & Tech Hub" data-ar="المركز التجاري والمالي العالمي">Global Commercial & Tech Hub</small>
                    </div>
                </a>
                <a href="erp-software-abu-dhabi.php" class="city-pill-uae">
                    <i class="fa-solid fa-landmark text-warning"></i>
                    <div>
                        <div class="fw-bold">Abu Dhabi (أبوظبي)</div>
                        <small class="text-muted uae-trans" data-en="Capital & Industrial Hub" data-ar="العاصمة والمشاريع الكبرى">Capital & Industrial Hub</small>
                    </div>
                </a>
                <a href="erp-software-sharjah.php" class="city-pill-uae">
                    <i class="fa-solid fa-industry text-warning"></i>
                    <div>
                        <div class="fw-bold">Sharjah (الشارقة)</div>
                        <small class="text-muted uae-trans" data-en="Manufacturing & Trade" data-ar="الصناعة والتجارة العامة">Manufacturing & Trade</small>
                    </div>
                </a>
                <a href="erp-software-ajman.php" class="city-pill-uae">
                    <i class="fa-solid fa-wrench text-warning"></i>
                    <div>
                        <div class="fw-bold">Ajman (عجمان)</div>
                        <small class="text-muted uae-trans" data-en="Workshops & SME Trading" data-ar="الورش والتجارة والمؤسسات">Workshops & SME Trading</small>
                    </div>
                </a>
                <a href="erp-software-ras-al-khaimah.php" class="city-pill-uae">
                    <i class="fa-solid fa-cubes-stacked text-warning"></i>
                    <div>
                        <div class="fw-bold">Ras Al Khaimah (رأس الخيمة)</div>
                        <small class="text-muted uae-trans" data-en="Ceramics, Cement & Industry" data-ar="الصناعات الثقيلة ومواد البناء">Ceramics, Cement & Industry</small>
                    </div>
                </a>
                <a href="erp-software-fujairah.php" class="city-pill-uae">
                    <i class="fa-solid fa-ship text-warning"></i>
                    <div>
                        <div class="fw-bold">Fujairah (الفجيرة)</div>
                        <small class="text-muted uae-trans" data-en="Bunkering, Port & Mining" data-ar="الميناء والخدمات البحرية">Bunkering, Port & Mining</small>
                    </div>
                </a>
                <a href="erp-software-umm-al-quwain.php" class="city-pill-uae">
                    <i class="fa-solid fa-boxes-packing text-warning"></i>
                    <div>
                        <div class="fw-bold">Umm Al Quwain (أم القيوين)</div>
                        <small class="text-muted uae-trans" data-en="Free Zone & Trade" data-ar="المنطقة الحرة والخدمات">Free Zone & Trade</small>
                    </div>
                </a>
            </div>
        </div>
    </section>

    <!-- 7. FREQUENTLY ASKED QUESTIONS -->
    <section class="uae-section bg-light-uae">
        <div class="container" style="max-width: 960px;">
            <div class="text-center">
                <span class="section-badge-uae uae-trans" data-en="UAE FAQs" data-ar="الأسئلة الشائعة">UAE FAQs</span>
                <h2 class="section-title-uae uae-trans"
                    data-en="Frequently Asked Questions About UAE ERP"
                    data-ar="الأسئلة الشائعة حول برامج تخطيط موارد المؤسسات في الإمارات">
                    Frequently Asked Questions About UAE ERP
                </h2>
                <p class="section-sub-uae uae-trans"
                    data-en="Key insights into implementing Digify ERP for UAE businesses and SMEs."
                    data-ar="إجابات شاملة حول تطبيق النظام والتوافق الضريبي وإدارة الأعمال في الإمارات:">
                    Key insights into implementing Digify ERP for UAE businesses and SMEs.
                </p>
            </div>

            <div class="accordion accordion-uae" id="uaeFaqAccordion">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="faqUH1">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faqUC1">
                            <span class="uae-trans" data-en="What is ERP software in UAE?" data-ar="ما هو برنامج ERP في الإمارات؟">What is ERP software in UAE?</span>
                        </button>
                    </h2>
                    <div id="faqUC1" class="accordion-collapse collapse show" data-bs-parent="#uaeFaqAccordion">
                        <div class="accordion-body uae-trans"
                            data-en="ERP software in UAE is a centralized business management platform that connects accounting, sales, purchasing, inventory, CRM, HRMS, and business reporting workflows into one connected system."
                            data-ar="برنامج ERP في الإمارات هو منصة لإدارة الأعمال تربط المحاسبة، المبيعات، المشتريات، المخازن، علاقات العملاء، والموارد البشرية في نظام مركزي موحد.">
                            ERP software in UAE is a centralized business management platform that connects accounting, sales, purchasing, inventory, CRM, HRMS, and business reporting workflows into one connected system.
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header" id="faqUH2">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqUC2">
                            <span class="uae-trans" data-en="How does Digify support UAE 5% VAT workflows?" data-ar="كيف يدعم النظام ضريبة القيمة المضافة 5% في الإمارات؟">How does Digify support UAE 5% VAT workflows?</span>
                        </button>
                    </h2>
                    <div id="faqUC2" class="accordion-collapse collapse" data-bs-parent="#uaeFaqAccordion">
                        <div class="accordion-body uae-trans"
                            data-en="Digify automatically calculates standard 5% VAT, validates buyer/supplier Tax Registration Numbers (TRN), tracks zero-rated exports, and maintains organized monthly sales and purchase ledgers."
                            data-ar="يقوم النظام باحتساب ضريبة 5% تلقائياً، والتحقق من الأرقام الضريبية TRN، ومعالجة الصادرات، وتنظيم سجلات المبيعات والمشتريات لتقديم الإقرارات الضريبية بسهولة.">
                            Digify automatically calculates standard 5% VAT, validates buyer/supplier Tax Registration Numbers (TRN), tracks zero-rated exports, and maintains organized monthly sales and purchase ledgers.
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header" id="faqUH3">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqUC3">
                            <span class="uae-trans" data-en="How does Digify help with UAE Corporate Tax records?" data-ar="كيف يساعد النظام في تنظيم حسابات ضريبة الشركات؟">How does Digify help with UAE Corporate Tax records?</span>
                        </button>
                    </h2>
                    <div id="faqUC3" class="accordion-collapse collapse" data-bs-parent="#uaeFaqAccordion">
                        <div class="accordion-body uae-trans"
                            data-en="Digify organizes commercial revenues, allowable business expenses, and depreciation to generate structured Profit & Loss statements supporting corporate tax compliance (standard 9% rate above AED 375,000)."
                            data-ar="ينظم النظام الإيرادات والمصروفات المؤهلة وإهلاك الأصول لإصدار قوائم أرباح وخسائر دقيقة تدعم متطلبات ضريبة الشركات (9% فوق 375,000 درهم).">
                            Digify organizes commercial revenues, allowable business expenses, and depreciation to generate structured Profit & Loss statements supporting corporate tax compliance (standard 9% rate above AED 375,000).
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header" id="faqUH4">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqUC4">
                            <span class="uae-trans" data-en="Can trading and distribution companies manage landed costs?" data-ar="هل تستطيع شركات التجارة والتوزيع احتساب تكلفة البضاعة الواصلة؟">Can trading and distribution companies manage landed costs?</span>
                        </button>
                    </h2>
                    <div id="faqUC4" class="accordion-collapse collapse" data-bs-parent="#uaeFaqAccordion">
                        <div class="accordion-body uae-trans"
                            data-en="Yes. Digify allocates ocean freight, customs tariffs, clearing fees, and local transport charges into item unit costs, giving exact gross margin visibility across multi-currency purchases."
                            data-ar="نعم. يقوم النظام بتوزيع تكاليف الشحن البحري والجمارك والتخليص على تكلفة وحدة المنتج، مما يوفر رؤية دقيقة لهوامش الأرباح.">
                            Yes. Digify allocates ocean freight, customs tariffs, clearing fees, and local transport charges into item unit costs, giving exact gross margin visibility across multi-currency purchases.
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header" id="faqUH5">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqUC5">
                            <span class="uae-trans" data-en="Does Digify support automotive workshops and job cards?" data-ar="هل يدعم النظام ورش صيانة السيارات وبطاقات العمل؟">Does Digify support automotive workshops and job cards?</span>
                        </button>
                    </h2>
                    <div id="faqUH5" class="accordion-collapse collapse" data-bs-parent="#uaeFaqAccordion">
                        <div class="accordion-body uae-trans"
                            data-en="Yes. Workshop modules track customer vehicles, chassis/VIN numbers, digital job cards, spare parts issued from inventory, technician labor hours, and final invoice settlement."
                            data-ar="نعم. تتيح وحدة الورش تتبع سيارات العملاء، رقم الشاسيه، إصدار بطاقات العمل الإلكترونية، صرف قطع الغيار من المستودع، وحساب ساعات الفنيين والفاتورة النهائية.">
                            Yes. Workshop modules track customer vehicles, chassis/VIN numbers, digital job cards, spare parts issued from inventory, technician labor hours, and final invoice settlement.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 8. FINAL CALL TO ACTION -->
    <section class="py-5" style="background: linear-gradient(135deg, #09152b 0%, #112240 100%); color: #ffffff;">
        <div class="container text-center py-4">
            <h2 class="fw-bold mb-3 uae-trans"
                data-en="Transform Your UAE Business with a Modern ERP Platform"
                data-ar="طور أعمال شركتك في الإمارات بنظام ERP سحابي متطور">
                Transform Your UAE Business with a Modern ERP Platform
            </h2>
            <p class="mx-auto mb-4 text-white-50 uae-trans" style="max-width: 760px; font-size: 17px;"
                data-en="Manage Sales, Inventory, Purchasing, Accounting, CRM, Customers, Suppliers, Employees and Business Operations from one centralized system. Built for UAE trading companies, distributors, retailers, workshops, and growing SMEs."
                data-ar="تحكم في المبيعات، المخازن، المشتريات، المحاسبة، علاقات العملاء، والموارد البشرية من منصة مركزية موحدة مصممة لبيئة الأعمال في الإمارات.">
                Manage Sales, Inventory, Purchasing, Accounting, CRM, Customers, Suppliers, Employees and Business Operations from one centralized system. Built for UAE trading companies, distributors, retailers, workshops, and growing SMEs.
            </p>
            <div class="d-flex justify-content-center flex-wrap gap-3">
                <button type="button" class="btn btn-warning px-4 py-3 fw-bold text-dark rounded-pill" data-bs-toggle="modal" data-bs-target="#trialModal">
                    <i class="fa-solid fa-calendar-check me-2"></i> <span class="uae-trans" data-en="Request a Free UAE ERP Demo" data-ar="احجز عرضاً توضيحياً مجانياً الآن">Request a Free UAE ERP Demo</span>
                </button>
                <a href="tel:+917425016636" class="btn btn-outline-light px-4 py-3 fw-bold rounded-pill">
                    <i class="fa-solid fa-phone me-2"></i> +91 7425016636
                </a>
            </div>
        </div>
    </section>
</div>

<script>
function setUaeLang(lang) {
    try {
        localStorage.setItem('digify_uae_lang', lang);
    } catch(e) {}
    
    document.querySelectorAll('.lang-pill').forEach(btn => btn.classList.remove('active'));
    if (lang === 'ar') {
        const btnAr = document.getElementById('btn-lang-ar');
        if (btnAr) btnAr.classList.add('active');
        document.querySelectorAll('.uae-trans').forEach(el => {
            const val = el.getAttribute('data-ar');
            if (val) el.innerHTML = val;
        });
        document.documentElement.setAttribute('dir', 'rtl');
        document.documentElement.lang = 'ar';
        document.body.classList.add('uae-arabic-font');
    } else {
        const btnEn = document.getElementById('btn-lang-en');
        if (btnEn) btnEn.classList.add('active');
        document.querySelectorAll('.uae-trans').forEach(el => {
            const val = el.getAttribute('data-en');
            if (val) el.innerHTML = val;
        });
        document.documentElement.setAttribute('dir', 'ltr');
        document.documentElement.lang = 'en';
        document.body.classList.remove('uae-arabic-font');
    }
}

document.addEventListener('DOMContentLoaded', function() {
    const urlParams = new URLSearchParams(window.location.search);
    const urlLang = urlParams.get('lang');
    let savedLang = 'en';
    try {
        savedLang = localStorage.getItem('digify_uae_lang') || 'en';
    } catch(e) {}
    
    if (urlLang === 'ar' || savedLang === 'ar') {
        setUaeLang('ar');
    }
});
</script>

<?php include('trial_modal.php'); ?>
<?php include(__DIR__ . '/../../footer.php'); ?>
