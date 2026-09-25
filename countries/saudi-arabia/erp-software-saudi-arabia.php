<?php 
include_once(__DIR__ . '/../../db.php');
include_once(__DIR__ . '/../../fetch_meta.php');

$pageTitle = "ERP Software in Saudi Arabia | ZATCA E-Invoicing, HRMS & Business ERP";
$pageDescription = "Enterprise ERP software in Saudi Arabia for manufacturing, distribution, contractors, HRMS, CRM, retail and service businesses with Arabic support, ZATCA e-invoicing workflows and business automation.";
$pageKeywords = "ERP software Saudi Arabia, ERP software in Saudi Arabia, best ERP software Saudi Arabia, enterprise ERP Saudi Arabia, cloud ERP Saudi Arabia, ZATCA e invoicing software, ZATCA ERP software, FATOORA ERP, Saudi e invoicing software, Arabic ERP software, Arabic English ERP Saudi Arabia, Saudi VAT ERP, manufacturing ERP Saudi Arabia, distribution ERP Saudi Arabia, contractor ERP Saudi Arabia, HRMS Saudi Arabia, payroll software Saudi Arabia, CRM Saudi Arabia, logistics ERP Saudi Arabia, retail ERP Saudi Arabia, ERP Riyadh, ERP Jeddah, ERP Dammam, ERP Khobar, ERP Jubail";
$pageCanonical = "https://www.digifysoft.in/erp-software-saudi-arabia";

include(__DIR__ . '/../../top.php');
include(__DIR__ . '/../../header.php');
?>

<style>
/* Saudi Master Suite Design System */
.sa-page-wrapper {
    font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
    color: #1e293b;
    overflow-x: hidden;
}
.sa-arabic-font {
    font-family: 'Cairo', 'Segoe UI', Tahoma, Arial, sans-serif !important;
}

/* Hero Section */
.sa-hero {
    background: linear-gradient(135deg, #062b1b 0%, #0d4029 45%, #051d13 100%);
    color: #ffffff;
    padding: 75px 0 90px;
    position: relative;
    overflow: hidden;
    border-bottom: 4px solid #10b981;
}
.sa-hero::before {
    content: '';
    position: absolute;
    top: -15%;
    right: -10%;
    width: 700px;
    height: 700px;
    background: radial-gradient(circle, rgba(16, 185, 129, 0.25) 0%, rgba(245, 158, 11, 0.12) 50%, rgba(0, 0, 0, 0) 75%);
    border-radius: 50%;
    pointer-events: none;
}
.text-gradient-sa {
    background: linear-gradient(135deg, #34d399 0%, #facc15 50%, #6ee7b7 100%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    display: inline-block;
}
.sa-hero-badge {
    background: rgba(16, 185, 129, 0.18);
    border: 1px solid rgba(52, 211, 153, 0.45);
    color: #6ee7b7;
    font-size: 13px;
    font-weight: 700;
    padding: 7px 18px;
    border-radius: 30px;
    display: inline-flex;
    align-items: center;
    gap: 8px;
    margin-bottom: 18px;
}
.sa-hero h1 {
    font-size: 42px;
    font-weight: 900;
    line-height: 1.25;
    margin-bottom: 18px;
    letter-spacing: -0.5px;
}
.sa-hero-sub {
    font-size: 18px;
    font-weight: 600;
    color: #fde047;
    line-height: 1.5;
    margin-bottom: 14px;
}
.sa-hero-desc {
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
    background: #10b981;
    color: #ffffff;
    box-shadow: 0 2px 10px rgba(16, 185, 129, 0.5);
}

/* Vision 2030 Badge */
.vision-badge {
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
.sa-lead-card {
    background: #ffffff;
    border-radius: 20px;
    padding: 34px 30px;
    color: #1e293b;
    box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.35);
    border: 1px solid rgba(255, 255, 255, 0.3);
}
.sa-lead-card h3 {
    font-size: 22px;
    font-weight: 800;
    color: #064e3b;
    margin-bottom: 8px;
}
.sa-lead-card p {
    font-size: 13px;
    color: #64748b;
    margin-bottom: 20px;
}
.sa-lead-card .form-control, .sa-lead-card .form-select {
    border-radius: 10px;
    border: 1px solid #cbd5e1;
    padding: 11px 14px;
    font-size: 14px;
}
.sa-lead-card .form-control:focus, .sa-lead-card .form-select:focus {
    border-color: #10b981;
    box-shadow: 0 0 0 3px rgba(16, 185, 129, 0.2);
}

/* Buttons */
.btn-sa-primary {
    background: linear-gradient(135deg, #10b981 0%, #059669 100%);
    color: #ffffff;
    font-weight: 700;
    font-size: 15px;
    padding: 13px 26px;
    border-radius: 12px;
    border: none;
    transition: all 0.3s ease;
    display: inline-flex;
    align-items: center;
    gap: 8px;
    box-shadow: 0 10px 20px -5px rgba(16, 185, 129, 0.4);
    text-decoration: none;
}
.btn-sa-primary:hover {
    background: linear-gradient(135deg, #059669 0%, #047857 100%);
    color: #ffffff;
    transform: translateY(-2px);
}
.btn-sa-outline {
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
.btn-sa-outline:hover {
    background: rgba(255, 255, 255, 0.18);
    color: #ffffff;
    transform: translateY(-2px);
}

/* Section styling */
.sa-section { padding: 75px 0; }
.bg-light-sa { background-color: #f8fafc; }
.bg-dark-sa { background: #062b1b; color: #ffffff; }
.section-badge-sa {
    display: inline-block;
    background: #ecfdf5;
    color: #059669;
    font-size: 12px;
    font-weight: 800;
    text-transform: uppercase;
    letter-spacing: 0.8px;
    padding: 6px 14px;
    border-radius: 20px;
    margin-bottom: 12px;
    border: 1px solid #a7f3d0;
}
.section-badge-sa-dark {
    display: inline-block;
    background: rgba(16, 185, 129, 0.18);
    color: #6ee7b7;
    font-size: 12px;
    font-weight: 800;
    text-transform: uppercase;
    letter-spacing: 0.8px;
    padding: 6px 14px;
    border-radius: 20px;
    margin-bottom: 12px;
    border: 1px solid rgba(52, 211, 153, 0.4);
}
.section-title-sa {
    font-size: 34px;
    font-weight: 900;
    color: #064e3b;
    line-height: 1.3;
    margin-bottom: 16px;
    letter-spacing: -0.5px;
}
.section-title-sa-dark {
    font-size: 34px;
    font-weight: 900;
    color: #ffffff;
    line-height: 1.3;
    margin-bottom: 16px;
    letter-spacing: -0.5px;
}
.section-sub-sa {
    font-size: 16px;
    color: #64748b;
    max-width: 780px;
    margin: 0 auto 40px;
    line-height: 1.7;
}

/* Feature Cards & Grid */
.sa-card {
    background: #ffffff;
    border: 1px solid #e2e8f0;
    border-radius: 16px;
    padding: 26px;
    transition: all 0.3s ease;
    height: 100%;
    display: flex;
    flex-direction: column;
}
.sa-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 20px 30px -10px rgba(0, 0, 0, 0.08);
    border-color: #10b981;
}
.sa-card-icon {
    width: 52px;
    height: 52px;
    border-radius: 14px;
    background: #ecfdf5;
    color: #059669;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 22px;
    margin-bottom: 18px;
}
.sa-card h4 {
    font-size: 19px;
    font-weight: 800;
    color: #064e3b;
    margin-bottom: 12px;
}
.sa-card p {
    font-size: 14px;
    color: #64748b;
    line-height: 1.6;
    margin-bottom: 16px;
    flex-grow: 1;
}

/* Vertical / Category Card */
.sa-vertical-card {
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
.sa-vertical-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 15px 30px rgba(16, 185, 129, 0.15);
    border-color: #10b981;
    color: inherit;
}
.sa-vertical-card::after {
    content: '';
    position: absolute;
    bottom: 0;
    left: 0;
    width: 0%;
    height: 4px;
    background: linear-gradient(135deg, #10b981 0%, #f59e0b 100%);
    transition: width 0.3s ease;
}
.sa-vertical-card:hover::after {
    width: 100%;
}
.sa-vertical-icon {
    width: 48px;
    height: 48px;
    border-radius: 12px;
    background: #ecfdf5;
    color: #059669;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 20px;
    margin-bottom: 16px;
}
.sa-vertical-card h5 {
    font-size: 17px;
    font-weight: 800;
    color: #064e3b;
    margin-bottom: 8px;
}
.sa-vertical-card p {
    font-size: 13px;
    color: #64748b;
    line-height: 1.5;
    margin-bottom: 14px;
    flex-grow: 1;
}
.sa-vertical-link {
    font-size: 13px;
    font-weight: 700;
    color: #059669;
    display: inline-flex;
    align-items: center;
    gap: 6px;
}

/* Accordion */
.accordion-sa .accordion-item {
    border: 1px solid #e2e8f0;
    border-radius: 12px !important;
    margin-bottom: 14px;
    overflow: hidden;
}
.accordion-sa .accordion-button {
    font-size: 16px;
    font-weight: 700;
    color: #064e3b;
    padding: 20px 24px;
    background: #ffffff;
    box-shadow: none;
}
.accordion-sa .accordion-button:not(.collapsed) {
    background: #ecfdf5;
    color: #059669;
}
.accordion-sa .accordion-body {
    font-size: 14px;
    line-height: 1.7;
    color: #475569;
    padding: 0 24px 20px;
}

/* City Pills */
.city-pill-sa {
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
.city-pill-sa:hover {
    border-color: #10b981;
    background: #ecfdf5;
    color: #059669;
    transform: translateY(-2px);
}
</style>

<div class="sa-page-wrapper">
    <!-- 1. HERO SECTION -->
    <section class="sa-hero">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7 mb-4 mb-lg-0">
                    <div class="lang-toggle-bar">
                        <button type="button" class="lang-pill active" id="btn-lang-en" onclick="setSaLang('en')">
                            <i class="fa-solid fa-globe me-1"></i> English
                        </button>
                        <button type="button" class="lang-pill" id="btn-lang-ar" onclick="setSaLang('ar')">
                            🇸🇦 العربية (السعودية)
                        </button>
                    </div>
                    <br>
                    <div class="vision-badge">
                        <i class="fa-solid fa-bolt"></i>
                        <span class="sa-trans" data-en="Aligned with Saudi Vision 2030 Digital Transformation" data-ar="متوافق مع التحول الرقمي ورؤية السعودية 2030">Aligned with Saudi Vision 2030 Digital Transformation</span>
                    </div>
                    <div class="sa-hero-badge">
                        <span class="sa-trans" data-en="🇸🇦 Enterprise Cloud ERP, HRMS & Automation Platform" data-ar="🇸🇦 نظام تخطيط موارد المؤسسات والموارد البشرية والأتمتة بالسعودية">🇸🇦 Enterprise Cloud ERP, HRMS & Automation Platform</span>
                    </div>
                    <h1 class="sa-trans" 
                        data-en="Enterprise ERP Software in Saudi Arabia for <span class='text-gradient-sa'>Smarter Business Operations</span>"
                        data-ar="برنامج ERP متكامل في المملكة العربية السعودية <span class='text-gradient-sa'>لإدارة العمليات بذكاء وكفاءة</span>">
                        Enterprise ERP Software in Saudi Arabia for <span class="text-gradient-sa">Smarter Business Operations</span>
                    </h1>
                    <div class="sa-hero-sub sa-trans"
                        data-en="Run Your Saudi Business with a Powerful, Localized ERP Platform"
                        data-ar="أدر أعمالك في المملكة العربية السعودية بنظام سحابي قوي ومتوافق محلياً">
                        Run Your Saudi Business with a Powerful, Localized ERP Platform
                    </div>
                    <p class="sa-hero-desc sa-trans"
                        data-en="Digify Soft Solutions provides integrated ERP and business management software for Saudi Arabian businesses across manufacturing, distribution, contracting, services, retail, trading and growing enterprises. Manage accounting, sales, purchasing, inventory, HR, payroll, CRM, suppliers, projects and business reporting from one centralized platform."
                        data-ar="توفر ديجيفاي سوفت سوليوشنز برمجيات متكاملة لإدارة المؤسسات والشركات في السعودية في قطاعات التصنيع، التوزيع، المقاولات، الخدمات، التجزئة والتجارة. تحكم في المحاسبة، المبيعات، المشتريات، المخازن، الموارد البشرية، الرواتب، وإدارة المشاريع والتقارير من منصة مركزية موحدة.">
                        Digify Soft Solutions provides integrated ERP and business management software for Saudi Arabian businesses across manufacturing, distribution, contracting, services, retail, trading and growing enterprises. Manage accounting, sales, purchasing, inventory, HR, payroll, CRM, suppliers, projects and business reporting from one centralized platform.
                    </p>
                    <div class="d-flex flex-wrap gap-3">
                        <a href="javascript:void(0)" class="btn-sa-primary" data-bs-toggle="modal" data-bs-target="#trialModal">
                            <i class="fa-solid fa-calendar-check"></i>
                            <span class="sa-trans" data-en="Request a Saudi Arabia ERP Demo" data-ar="طلب عرض توضيحي في السعودية">Request a Saudi Arabia ERP Demo</span>
                        </a>
                        <a href="#saudi-verticals" class="btn-sa-outline">
                            <i class="fa-solid fa-layer-group"></i>
                            <span class="sa-trans" data-en="Explore 20+ Saudi Verticals" data-ar="استكشف أكثر من 20 قطاعاً متخصصاً">Explore 20+ Saudi Verticals</span>
                        </a>
                    </div>
                </div>

                <!-- Right Hero Lead Card -->
                <div class="col-lg-5">
                    <div class="sa-lead-card">
                        <h3 class="sa-trans" data-en="Request Saudi ERP Solution" data-ar="طلب استشارة نظام ERP في السعودية">Request Saudi ERP Solution</h3>
                        <p class="sa-trans" data-en="Talk directly to our Saudi enterprise ERP deployment experts." data-ar="تحدث مباشرة مع مستشاري نشر أنظمة تخطيط موارد المؤسسات.">Talk directly to our Saudi enterprise ERP deployment experts.</p>
                        
                        <form action="send_mail.php" method="POST" id="saudiMasterLeadForm">
                            <input type="hidden" name="source" value="Saudi Arabia Master ERP Page">
                            <input type="hidden" name="country" value="Saudi Arabia">
                            <div class="mb-3">
                                <label class="form-label small fw-bold sa-trans" data-en="Your Name" data-ar="الاسم الكامل">Your Name</label>
                                <input type="text" name="name" class="form-control" placeholder="Mohammed Al-Otaibi" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label small fw-bold sa-trans" data-en="Company / Establishment Name" data-ar="اسم الشركة / المؤسسة">Company / Establishment Name</label>
                                <input type="text" name="company_name" class="form-control" placeholder="Al-Riyadh Trading & Contracting" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label small fw-bold sa-trans" data-en="WhatsApp / Mobile Number" data-ar="رقم الجوال / واتساب">WhatsApp / Mobile Number</label>
                                <input type="tel" name="phone" class="form-control" placeholder="+966 5X XXX XXXX" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label small fw-bold sa-trans" data-en="Target Sector / Industry" data-ar="القطاع المستهدف">Target Sector / Industry</label>
                                <select name="industry" class="form-select" required>
                                    <option value="Manufacturing">Manufacturing (الصناعة والإنتاج)</option>
                                    <option value="Distribution & Wholesale">Distribution & Wholesale (التوزيع والجملة)</option>
                                    <option value="Contracting & Construction">Contracting & Construction (المقاولات والإنشاءات)</option>
                                    <option value="HRMS & Payroll">HRMS & Payroll (الموارد البشرية والرواتب)</option>
                                    <option value="Retail & Supermarkets">Retail & Supermarkets (التجزئة والسوبرماركت)</option>
                                    <option value="Logistics & Warehousing">Logistics & Warehousing (الخدمات اللوجستية والمستودعات)</option>
                                    <option value="Import & Trading">Import & Trading (الاستيراد والتجارة)</option>
                                    <option value="Healthcare & Pharmacy">Healthcare & Pharmacy (الصيدليات والرعاية الصحية)</option>
                                    <option value="Hospitality & Catering">Hospitality & Catering (الضيافة والمطاعم)</option>
                                    <option value="Other Enterprise">Other Enterprise (قطاع آخر)</option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-sa-primary w-100 justify-content-center">
                                <i class="fa-solid fa-paper-plane me-2"></i>
                                <span class="sa-trans" data-en="Build Your Saudi ERP Solution" data-ar="ابدأ تصميم نظامك الآن">Build Your Saudi ERP Solution</span>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 2. FOUR CORE SAUDI FOCUS PILLARS -->
    <section class="sa-section bg-light-sa">
        <div class="container">
            <div class="text-center">
                <span class="section-badge-sa sa-trans" data-en="Strategic Framework" data-ar="الركائز الأساسية">Strategic Framework</span>
                <h2 class="section-title-sa sa-trans"
                    data-en="Engineered for Saudi Arabia's Enterprise Scale"
                    data-ar="مصمم خصيصاً ليتناسب مع متطلبات السوق السعودي المتنامي">
                    Engineered for Saudi Arabia's Enterprise Scale
                </h2>
                <p class="section-sub-sa sa-trans"
                    data-en="Combining Arabic-ready interfaces, ZATCA e-invoicing architecture, 15% VAT financial management, and multi-branch industrial workflows."
                    data-ar="يجمع بين الواجهات العربية المتكاملة، البنية المهيأة لنظام الفوترة الإلكترونية (فاتورة)، إدارة ضريبة القيمة المضافة 15%، وتشغيل الفروع والمصانع المتعددة.">
                    Combining Arabic-ready interfaces, ZATCA e-invoicing architecture, 15% VAT financial management, and multi-branch industrial workflows.
                </p>
            </div>

            <div class="row g-4">
                <div class="col-lg-3 col-md-6">
                    <div class="sa-card">
                        <div class="sa-card-icon"><i class="fa-solid fa-industry"></i></div>
                        <h4 class="sa-trans" data-en="Manufacturing & Projects" data-ar="التصنيع وإدارة المشاريع">Manufacturing & Projects</h4>
                        <p class="sa-trans" 
                            data-en="Bill of materials (BOM), material consumption tracking, plant procurement, job-costing, and site material management for contractors."
                            data-ar="إدارة قوائم المواد (BOM)، استهلاك المواد الخام، مشتريات المصانع، تكاليف المشاريع، وإدارة مواقع المقاولات.">
                            Bill of materials (BOM), material consumption tracking, plant procurement, job-costing, and site material management for contractors.
                        </p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="sa-card">
                        <div class="sa-card-icon"><i class="fa-solid fa-file-invoice-dollar"></i></div>
                        <h4 class="sa-trans" data-en="ZATCA & 15% VAT Workflows" data-ar="مسارات الفوترة وضريبة 15%">ZATCA & 15% VAT Workflows</h4>
                        <p class="sa-trans" 
                            data-en="Standard 15% VAT calculations, compliant e-invoicing record architecture, tax ledgers, audit registers, and purchase-to-sales books."
                            data-ar="حساب ضريبة القيمة المضافة بنسبة 15%، بنية متوافقة لبيانات الفواتير الإلكترونية، دفاتر ضريبية، وسجلات المشتريات والمبيعات.">
                            Standard 15% VAT calculations, compliant e-invoicing record architecture, tax ledgers, audit registers, and purchase-to-sales books.
                        </p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="sa-card">
                        <div class="sa-card-icon"><i class="fa-solid fa-users-gear"></i></div>
                        <h4 class="sa-trans" data-en="Integrated HRMS & Payroll" data-ar="الموارد البشرية والرواتب">Integrated HRMS & Payroll</h4>
                        <p class="sa-trans" 
                            data-en="Centralize employee profiles, department hierarchies, leave management, biometric attendance sync, allowances, and salary registers."
                            data-ar="إدارة ملفات الموظفين، الهيكل الإداري، الإجازات، ربط أجهزة البصمة، البدلات، وإعداد مسيرات الرواتب المركزية.">
                            Centralize employee profiles, department hierarchies, leave management, biometric attendance sync, allowances, and salary registers.
                        </p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="sa-card">
                        <div class="sa-card-icon"><i class="fa-solid fa-language"></i></div>
                        <h4 class="sa-trans" data-en="Bilingual Arabic & English" data-ar="ثنائي اللغة (عربي وإنجليزي)">Bilingual Arabic & English</h4>
                        <p class="sa-trans" 
                            data-en="Bilingual user experience, Arabic invoice printing, multi-currency accounting, and dual-language product and customer master records."
                            data-ar="تجربة مستخدم ثنائية اللغة، طباعة الفواتير باللغة العربية، محاسبة متعددة العملات وسجلات ثنائية للمنتجات والعملاء.">
                            Bilingual user experience, Arabic invoice printing, multi-currency accounting, and dual-language product and customer master records.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 3. ZATCA & SAUDI VAT DEEP DIVE -->
    <section class="sa-section bg-white">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <span class="section-badge-sa sa-trans" data-en="Fiscal & Invoicing Architecture" data-ar="الامتثال والفوترة الإلكترونية">Fiscal & Invoicing Architecture</span>
                    <h2 class="section-title-sa sa-trans"
                        data-en="ZATCA E-Invoicing Ready Business Workflows & 15% VAT"
                        data-ar="مسارات الفوترة الإلكترونية المتوافقة مع متطلبات (فاتورة) وضريبة القيمة المضافة 15%">
                        ZATCA E-Invoicing Ready Business Workflows & 15% VAT
                    </h2>
                    <p class="text-muted sa-trans" style="line-height: 1.8; font-size: 15px;"
                        data-en="Saudi businesses need structured electronic invoicing processes aligned with the Kingdom's evolving regulatory framework. Digify Soft Solutions provides structured invoicing, customer VAT identification, automated 15% VAT calculation, and audit-ready sales and purchase registers."
                        data-ar="تحتاج الشركات في المملكة العربية السعودية إلى عمليات فوترة إلكترونية منظمة تتوافق مع الأطر التنظيمية لهيئة الزكاة والضريبة والجمارك (ZATCA). يوفر نظام ديجيفاي هيكلة رقمية للفواتير، وتوثيق الأرقام الضريبية، وحساب الضريبة بنسبة 15% مع تقارير تدقيق شاملة.">
                        Saudi businesses need structured electronic invoicing processes aligned with the Kingdom's evolving regulatory framework. Digify Soft Solutions provides structured invoicing, customer VAT identification, automated 15% VAT calculation, and audit-ready sales and purchase registers.
                    </p>

                    <div class="p-3 mb-3 bg-light-sa rounded-3 border-start border-4 border-success shadow-sm">
                        <p class="mb-0 small text-muted sa-trans"
                            data-en="<strong class='text-dark'>E-Invoicing Architecture:</strong> Designed to support structured invoice metadata, buyer/seller Tax Identification Numbers (TIN), itemized VAT rates, and audit logs."
                            data-ar="<strong class='text-dark'>بنية الفوترة الإلكترونية:</strong> مصممة لتضمين البيانات الوصفية للفواتير، الأرقام الضريبية للبائع والمشتري، وتفصيل معدلات الضريبة وسجلات التدقيق.">
                            <strong class="text-dark">E-Invoicing Architecture:</strong> Designed to support structured invoice metadata, buyer/seller Tax Identification Numbers (TIN), itemized VAT rates, and audit logs.
                        </p>
                    </div>

                    <div class="p-3 bg-light-sa rounded-3 border-start border-4 border-warning shadow-sm">
                        <p class="mb-0 small text-muted sa-trans"
                            data-en="<strong class='text-dark'>Saudi 15% VAT Engine:</strong> Automated standard 15% rate application, zero-rated export workflows, VAT-exempt transactions, and period-wise VAT return summaries."
                            data-ar="<strong class='text-dark'>محرك ضريبة 15%:</strong> تطبيق آلي لمعدل 15% القياسي، معالجة الصادرات الصفرية، المعاملات المعفاة، وتلخيص الإقرارات الضريبية الدورية.">
                            <strong class="text-dark">Saudi 15% VAT Engine:</strong> Automated standard 15% rate application, zero-rated export workflows, VAT-exempt transactions, and period-wise VAT return summaries.
                        </p>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="row g-3">
                        <div class="col-sm-6">
                            <div class="p-4 bg-light-sa rounded-3 border h-100 shadow-sm">
                                <i class="fa-solid fa-qrcode text-success fs-3 mb-3"></i>
                                <h5 class="fw-bold sa-trans" data-en="Bilingual QR Invoices" data-ar="فواتير QR ثنائية اللغة">Bilingual QR Invoices</h5>
                                <p class="small text-muted mb-0 sa-trans"
                                    data-en="Instant thermal and A4 invoice formats with structured QR codes, VAT breakdown, and Arabic text."
                                    data-ar="فواتير مطبوعة A4 ورقية وحرارية تحتوي على رمز الاستجابة السريعة QR وتفصيل الضريبة باللغتين.">
                                    Instant thermal and A4 invoice formats with structured QR codes, VAT breakdown, and Arabic text.
                                </p>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="p-4 bg-light-sa rounded-3 border h-100 shadow-sm">
                                <i class="fa-solid fa-calculator text-success fs-3 mb-3"></i>
                                <h5 class="fw-bold sa-trans" data-en="15% VAT Automation" data-ar="حساب الضريبة الآلي 15%">15% VAT Automation</h5>
                                <p class="small text-muted mb-0 sa-trans"
                                    data-en="Automated line-item tax calculation, discount handling, and net payable summaries."
                                    data-ar="احتساب آلي لضريبة القيمة المضافة على كل بند، مع معالجة الخصومات وصافي المبالغ المستحقة.">
                                    Automated line-item tax calculation, discount handling, and net payable summaries.
                                </p>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="p-4 bg-light-sa rounded-3 border h-100 shadow-sm">
                                <i class="fa-solid fa-book-bookmark text-success fs-3 mb-3"></i>
                                <h5 class="fw-bold sa-trans" data-en="Tax Sales & Purchase Ledgers" data-ar="سجلات المبيعات والمشتريات">Tax Sales & Purchase Ledgers</h5>
                                <p class="small text-muted mb-0 sa-trans"
                                    data-en="Comprehensive monthly sales and purchase books ready for corporate tax accountants and auditors."
                                    data-ar="دفاتر مبيعات ومشتريات شهرية شاملة جاهزة للاستخدام من قِبل المحاسبين القانونيين ومدققي الحسابات.">
                                    Comprehensive monthly sales and purchase books ready for corporate tax accountants and auditors.
                                </p>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="p-4 bg-light-sa rounded-3 border h-100 shadow-sm">
                                <i class="fa-solid fa-shield-halved text-success fs-3 mb-3"></i>
                                <h5 class="fw-bold sa-trans" data-en="Audit Trails & Security" data-ar="سجلات التدقيق والأمان">Audit Trails & Security</h5>
                                <p class="small text-muted mb-0 sa-trans"
                                    data-en="Tamper-evident transaction logs, role-based access controls, and timestamped user actions."
                                    data-ar="سجلات تدقيق غير قابلة للتعديل، صلاحيات مستخدمين دقيقة، وتتبع لكافة العمليات المالية بالتاريخ والوقت.">
                                    Tamper-evident transaction logs, role-based access controls, and timestamped user actions.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 4. CORE ERP + HRMS + CRM SUITE MODULES -->
    <section class="sa-section bg-light-sa">
        <div class="container">
            <div class="text-center">
                <span class="section-badge-sa sa-trans" data-en="Complete Business Platform" data-ar="المنظومة المتكاملة">Complete Business Platform</span>
                <h2 class="section-title-sa sa-trans"
                    data-en="ERP + HRMS + CRM in One Unified Platform"
                    data-ar="نظام ERP + الموارد البشرية (HRMS) + إدارة علاقات العملاء (CRM) في منصة واحدة">
                    ERP + HRMS + CRM in One Unified Platform
                </h2>
                <p class="section-sub-sa sa-trans"
                    data-en="Eliminate fragmented point solutions. Unify finance, inventory, multi-branch supply chains, human capital, and customer pipelines."
                    data-ar="تخلص من البرامج المنفصلة. وحد الإدارة المالية، المخازن، سلاسل الإمداد المتعددة، الموارد البشرية والمبيعات تحت سقف واحد.">
                    Eliminate fragmented point solutions. Unify finance, inventory, multi-branch supply chains, human capital, and customer pipelines.
                </p>
            </div>

            <div class="row g-4">
                <!-- Module 1: Manufacturing ERP -->
                <div class="col-lg-4 col-md-6">
                    <div class="sa-card">
                        <div class="sa-card-icon"><i class="fa-solid fa-gears"></i></div>
                        <h4 class="sa-trans" data-en="Manufacturing ERP" data-ar="إدارة التصنيع والإنتاج">Manufacturing ERP</h4>
                        <ul class="list-unstyled small text-muted" style="line-height: 2;">
                            <li class="sa-trans" data-en="<i class='fa-solid fa-check text-success me-2'></i> Multi-level Bill of Materials (BOM)" data-ar="<i class='fa-solid fa-check text-success me-2'></i> قوائم المواد متعددة المستويات (BOM)"><i class="fa-solid fa-check text-success me-2"></i> Multi-level Bill of Materials (BOM)</li>
                            <li class="sa-trans" data-en="<i class='fa-solid fa-check text-success me-2'></i> Raw Material Consumption & Scrap" data-ar="<i class='fa-solid fa-check text-success me-2'></i> استهلاك المواد الخام وتتبع الهالك"><i class="fa-solid fa-check text-success me-2"></i> Raw Material Consumption & Scrap</li>
                            <li class="sa-trans" data-en="<i class='fa-solid fa-check text-success me-2'></i> Work-in-Progress (WIP) Stages" data-ar="<i class='fa-solid fa-check text-success me-2'></i> مراحل الإنتاج تحت التشغيل (WIP)"><i class="fa-solid fa-check text-success me-2"></i> Work-in-Progress (WIP) Stages</li>
                            <li class="sa-trans" data-en="<i class='fa-solid fa-check text-success me-2'></i> Production Costing & Overhead Allocation" data-ar="<i class='fa-solid fa-check text-success me-2'></i> احتساب تكاليف الإنتاج والمصروفات الإضافية"><i class="fa-solid fa-check text-success me-2"></i> Production Costing & Overhead Allocation</li>
                            <li class="sa-trans" data-en="<i class='fa-solid fa-check text-success me-2'></i> Batch & Lot Number Tracking" data-ar="<i class='fa-solid fa-check text-success me-2'></i> تتبع أرقام التشغيلات واللوت"><i class="fa-solid fa-check text-success me-2"></i> Batch & Lot Number Tracking</li>
                        </ul>
                    </div>
                </div>

                <!-- Module 2: Distribution & Multi-Warehouse -->
                <div class="col-lg-4 col-md-6">
                    <div class="sa-card">
                        <div class="sa-card-icon"><i class="fa-solid fa-boxes-stacked"></i></div>
                        <h4 class="sa-trans" data-en="Distribution & Warehousing" data-ar="التوزيع وإدارة المستودعات">Distribution & Warehousing</h4>
                        <ul class="list-unstyled small text-muted" style="line-height: 2;">
                            <li class="sa-trans" data-en="<i class='fa-solid fa-check text-success me-2'></i> Multi-Warehouse Stock Transfers" data-ar="<i class='fa-solid fa-check text-success me-2'></i> مناقلات المخزون بين المستودعات والفروع"><i class="fa-solid fa-check text-success me-2"></i> Multi-Warehouse Stock Transfers</li>
                            <li class="sa-trans" data-en="<i class='fa-solid fa-check text-success me-2'></i> Landed Cost Calculation" data-ar="<i class='fa-solid fa-check text-success me-2'></i> احتساب تكلفة البضاعة الواصلة والجمارك"><i class="fa-solid fa-check text-success me-2"></i> Landed Cost Calculation</li>
                            <li class="sa-trans" data-en="<i class='fa-solid fa-check text-success me-2'></i> Reorder Points & Low Stock Alerts" data-ar="<i class='fa-solid fa-check text-success me-2'></i> نقاط إعادة الطلب وتنبيهات نفاد الكمية"><i class="fa-solid fa-check text-success me-2"></i> Reorder Points & Low Stock Alerts</li>
                            <li class="sa-trans" data-en="<i class='fa-solid fa-check text-success me-2'></i> Customer Credit Limits & Aging Analysis" data-ar="<i class='fa-solid fa-check text-success me-2'></i> حدود الائتمان وأعمار الديون للعملاء"><i class="fa-solid fa-check text-success me-2"></i> Customer Credit Limits & Aging Analysis</li>
                            <li class="sa-trans" data-en="<i class='fa-solid fa-check text-success me-2'></i> Barcode & QR Label Printing" data-ar="<i class='fa-solid fa-check text-success me-2'></i> طباعة ملصقات الباركود والـ QR"><i class="fa-solid fa-check text-success me-2"></i> Barcode & QR Label Printing</li>
                        </ul>
                    </div>
                </div>

                <!-- Module 3: Contractor & Project ERP -->
                <div class="col-lg-4 col-md-6">
                    <div class="sa-card">
                        <div class="sa-card-icon"><i class="fa-solid fa-trowel-bricks"></i></div>
                        <h4 class="sa-trans" data-en="Contractor & Projects" data-ar="المقاولات وإدارة المشاريع">Contractor & Projects</h4>
                        <ul class="list-unstyled small text-muted" style="line-height: 2;">
                            <li class="sa-trans" data-en="<i class='fa-solid fa-check text-success me-2'></i> Project-wise Budgeting & Expenses" data-ar="<i class='fa-solid fa-check text-success me-2'></i> ميزانية وتكاليف كل مشروع على حدة"><i class="fa-solid fa-check text-success me-2"></i> Project-wise Budgeting & Expenses</li>
                            <li class="sa-trans" data-en="<i class='fa-solid fa-check text-success me-2'></i> Site Material Indents & Issues" data-ar="<i class='fa-solid fa-check text-success me-2'></i> طلبات وصرف المواد لمواقع العمل"><i class="fa-solid fa-check text-success me-2"></i> Site Material Indents & Issues</li>
                            <li class="sa-trans" data-en="<i class='fa-solid fa-check text-success me-2'></i> Subcontractor Billing & Retention" data-ar="<i class='fa-solid fa-check text-success me-2'></i> مستخلصات مقاولي الباطن ودفعة الضمان"><i class="fa-solid fa-check text-success me-2"></i> Subcontractor Billing & Retention</li>
                            <li class="sa-trans" data-en="<i class='fa-solid fa-check text-success me-2'></i> Equipment & Vehicle Fuel Tracking" data-ar="<i class='fa-solid fa-check text-success me-2'></i> تتبع المعدات ومصروفات المحروقات"><i class="fa-solid fa-check text-success me-2"></i> Equipment & Vehicle Fuel Tracking</li>
                            <li class="sa-trans" data-en="<i class='fa-solid fa-check text-success me-2'></i> Project Profitability Reports" data-ar="<i class='fa-solid fa-check text-success me-2'></i> تقارير ربحية المشاريع وإنجاز الأعمال"><i class="fa-solid fa-check text-success me-2"></i> Project Profitability Reports</li>
                        </ul>
                    </div>
                </div>

                <!-- Module 4: HRMS & Payroll -->
                <div class="col-lg-4 col-md-6">
                    <div class="sa-card">
                        <div class="sa-card-icon"><i class="fa-solid fa-user-tie"></i></div>
                        <h4 class="sa-trans" data-en="HRMS & Payroll System" data-ar="نظام الموارد البشرية والرواتب">HRMS & Payroll System</h4>
                        <ul class="list-unstyled small text-muted" style="line-height: 2;">
                            <li class="sa-trans" data-en="<i class='fa-solid fa-check text-success me-2'></i> Employee Master & Iqama/ID Records" data-ar="<i class='fa-solid fa-check text-success me-2'></i> سجلات الموظفين وتواريخ الإقامات والوثائق"><i class="fa-solid fa-check text-success me-2"></i> Employee Master & Iqama/ID Records</li>
                            <li class="sa-trans" data-en="<i class='fa-solid fa-check text-success me-2'></i> Department Hierarchy & Org Structure" data-ar="<i class='fa-solid fa-check text-success me-2'></i> الهيكل التنظيمي وإدارة الأقسام"><i class="fa-solid fa-check text-success me-2"></i> Department Hierarchy & Org Structure</li>
                            <li class="sa-trans" data-en="<i class='fa-solid fa-check text-success me-2'></i> Biometric Attendance & Shift Rosters" data-ar="<i class='fa-solid fa-check text-success me-2'></i> الحضور بالبصمة وإدارة الورديات"><i class="fa-solid fa-check text-success me-2"></i> Biometric Attendance & Shift Rosters</li>
                            <li class="sa-trans" data-en="<i class='fa-solid fa-check text-success me-2'></i> Leave Requests & Approval Workflows" data-ar="<i class='fa-solid fa-check text-success me-2'></i> طلبات الإجازات ومسارات الموافقة"><i class="fa-solid fa-check text-success me-2"></i> Leave Requests & Approval Workflows</li>
                            <li class="sa-trans" data-en="<i class='fa-solid fa-check text-success me-2'></i> Allowances, Deductions & Payroll Registers" data-ar="<i class='fa-solid fa-check text-success me-2'></i> احتساب البدلات والخصومات ومسيرات الرواتب"><i class="fa-solid fa-check text-success me-2"></i> Allowances, Deductions & Payroll Registers</li>
                        </ul>
                    </div>
                </div>

                <!-- Module 5: CRM & Sales Pipeline -->
                <div class="col-lg-4 col-md-6">
                    <div class="sa-card">
                        <div class="sa-card-icon"><i class="fa-solid fa-handshake-angle"></i></div>
                        <h4 class="sa-trans" data-en="CRM & Sales Automation" data-ar="إدارة العملاء وخطوط البيع">CRM & Sales Automation</h4>
                        <ul class="list-unstyled small text-muted" style="line-height: 2;">
                            <li class="sa-trans" data-en="<i class='fa-solid fa-check text-success me-2'></i> Lead Tracking & Deal Stages" data-ar="<i class='fa-solid fa-check text-success me-2'></i> تتبع العملاء المحتملين ومراحل الصفقات"><i class="fa-solid fa-check text-success me-2"></i> Lead Tracking & Deal Stages</li>
                            <li class="sa-trans" data-en="<i class='fa-solid fa-check text-success me-2'></i> Quotation to Sales Order Conversion" data-ar="<i class='fa-solid fa-check text-success me-2'></i> تحويل عروض الأسعار إلى أوامر بيع"><i class="fa-solid fa-check text-success me-2"></i> Quotation to Sales Order Conversion</li>
                            <li class="sa-trans" data-en="<i class='fa-solid fa-check text-success me-2'></i> Sales Executive KPI & Target Metrics" data-ar="<i class='fa-solid fa-check text-success me-2'></i> مؤشرات أداء مناديب وفرق المبيعات"><i class="fa-solid fa-check text-success me-2"></i> Sales Executive KPI & Target Metrics</li>
                            <li class="sa-trans" data-en="<i class='fa-solid fa-check text-success me-2'></i> Automated WhatsApp Follow-up Prompts" data-ar="<i class='fa-solid fa-check text-success me-2'></i> متابعة وتنبيهات تلقائية عبر الواتساب"><i class="fa-solid fa-check text-success me-2"></i> Automated WhatsApp Follow-up Prompts</li>
                            <li class="sa-trans" data-en="<i class='fa-solid fa-check text-success me-2'></i> Customer Purchase History & Statement" data-ar="<i class='fa-solid fa-check text-success me-2'></i> كشوفات حسابات وسجل مشتريات العملاء"><i class="fa-solid fa-check text-success me-2"></i> Customer Purchase History & Statement</li>
                        </ul>
                    </div>
                </div>

                <!-- Module 6: Business Automation -->
                <div class="col-lg-4 col-md-6">
                    <div class="sa-card">
                        <div class="sa-card-icon"><i class="fa-solid fa-robot"></i></div>
                        <h4 class="sa-trans" data-en="Business Automation" data-ar="أتمتة الأعمال وسير العمليات">Business Automation</h4>
                        <ul class="list-unstyled small text-muted" style="line-height: 2;">
                            <li class="sa-trans" data-en="<i class='fa-solid fa-check text-success me-2'></i> Multi-level Purchase Approval Rules" data-ar="<i class='fa-solid fa-check text-success me-2'></i> مستويات اعتماد أوامر الشراء والمصروفات"><i class="fa-solid fa-check text-success me-2"></i> Multi-level Purchase Approval Rules</li>
                            <li class="sa-trans" data-en="<i class='fa-solid fa-check text-success me-2'></i> Automated Inventory Stock Alerts" data-ar="<i class='fa-solid fa-check text-success me-2'></i> تنبيهات آلية عند وصول المخزون للحد الحرج"><i class="fa-solid fa-check text-success me-2"></i> Automated Inventory Stock Alerts</li>
                            <li class="sa-trans" data-en="<i class='fa-solid fa-check text-success me-2'></i> OCR & Digital Document Processing" data-ar="<i class='fa-solid fa-check text-success me-2'></i> مسح المستندات وقراءة الفواتير رقمياً"><i class="fa-solid fa-check text-success me-2"></i> OCR & Digital Document Processing</li>
                            <li class="sa-trans" data-en="<i class='fa-solid fa-check text-success me-2'></i> Scheduled Management Reports by Email" data-ar="<i class='fa-solid fa-check text-success me-2'></i> تقارير إدارية مجدولة ترسل عبر البريد الإلكتروني"><i class="fa-solid fa-check text-success me-2"></i> Scheduled Management Reports by Email</li>
                            <li class="sa-trans" data-en="<i class='fa-solid fa-check text-success me-2'></i> Multi-Currency Foreign Supplier Invoices" data-ar="<i class='fa-solid fa-check text-success me-2'></i> معالجة فواتير الموردين بالعملات الأجنبية"><i class="fa-solid fa-check text-success me-2"></i> Multi-Currency Foreign Supplier Invoices</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 5. 20+ SAUDI INDUSTRY VERTICALS GRID -->
    <section class="sa-section bg-white" id="saudi-verticals">
        <div class="container">
            <div class="text-center">
                <span class="section-badge-sa sa-trans" data-en="Specialized Verticals" data-ar="القطاعات الصناعية والتجارية">Specialized Verticals</span>
                <h2 class="section-title-sa sa-trans"
                    data-en="Explore 20+ Dedicated Saudi Arabia ERP Verticals"
                    data-ar="استكشف أكثر من 20 قطاعاً متخصصاً في المملكة العربية السعودية">
                    Explore 20+ Dedicated Saudi Arabia ERP Verticals
                </h2>
                <p class="section-sub-sa sa-trans"
                    data-en="Tailored modules, compliance templates, and operational workflows designed for every Saudi economic sector."
                    data-ar="وحدات برمجية ونماذج تشغيل مخصصة لكل قطاع تجاري وصناعي في المملكة:">
                    Tailored modules, compliance templates, and operational workflows designed for every Saudi economic sector.
                </p>
            </div>

            <div class="row g-4">
                <!-- 1. Manufacturing ERP -->
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <a href="manufacturing-erp-software-saudi-arabia.php" class="sa-vertical-card">
                        <div class="sa-vertical-icon"><i class="fa-solid fa-industry"></i></div>
                        <h5 class="sa-trans" data-en="Manufacturing ERP" data-ar="ERP الصناعة والتصنيع">Manufacturing ERP</h5>
                        <p class="sa-trans" data-en="BOM, raw materials, batch records, scrap control, and factory production." data-ar="قوائم المواد، المواد الخام، سجلات التشغيل، والهالك الصناعي.">BOM, raw materials, batch records, scrap control, and factory production.</p>
                        <span class="sa-vertical-link"><span class="sa-trans" data-en="View Solution" data-ar="عرض الحل">View Solution</span> <i class="fa-solid fa-arrow-right"></i></span>
                    </a>
                </div>

                <!-- 2. Distribution ERP -->
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <a href="distribution-erp-software-saudi-arabia.php" class="sa-vertical-card">
                        <div class="sa-vertical-icon"><i class="fa-solid fa-truck-ramp-box"></i></div>
                        <h5 class="sa-trans" data-en="Distribution ERP" data-ar="ERP التوزيع والجملة">Distribution ERP</h5>
                        <p class="sa-trans" data-en="Multi-warehouse stock, van sales, credit limits, and purchase-to-sales." data-ar="المستودعات المتعددة، مبيعات المناديب، حدود الائتمان، وسلاسل التوريد.">Multi-warehouse stock, van sales, credit limits, and purchase-to-sales.</p>
                        <span class="sa-vertical-link"><span class="sa-trans" data-en="View Solution" data-ar="عرض الحل">View Solution</span> <i class="fa-solid fa-arrow-right"></i></span>
                    </a>
                </div>

                <!-- 3. Contractor ERP -->
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <a href="contractor-erp-software-saudi-arabia.php" class="sa-vertical-card">
                        <div class="sa-vertical-icon"><i class="fa-solid fa-trowel-bricks"></i></div>
                        <h5 class="sa-trans" data-en="Contractor ERP" data-ar="ERP المقاولات والإنشاءات">Contractor ERP</h5>
                        <p class="sa-trans" data-en="MEP, civil, project job-costing, site materials, and subcontractor claims." data-ar="المقاولات العامة والمدنية والكهربائية، تكاليف المشاريع ومستخلصات الباطن.">MEP, civil, project job-costing, site materials, and subcontractor claims.</p>
                        <span class="sa-vertical-link"><span class="sa-trans" data-en="View Solution" data-ar="عرض الحل">View Solution</span> <i class="fa-solid fa-arrow-right"></i></span>
                    </a>
                </div>

                <!-- 4. HRMS Software -->
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <a href="hrms-software-saudi-arabia.php" class="sa-vertical-card">
                        <div class="sa-vertical-icon"><i class="fa-solid fa-user-gear"></i></div>
                        <h5 class="sa-trans" data-en="HRMS Software" data-ar="نظام إدارة الموارد البشرية">HRMS Software</h5>
                        <p class="sa-trans" data-en="Employee profiles, attendance, leaves, Iqama records, and org hierarchy." data-ar="سجلات الموظفين، البصمة، الإجازات، متابعة الإقامات، والهيكل الإداري.">Employee profiles, attendance, leaves, Iqama records, and org hierarchy.</p>
                        <span class="sa-vertical-link"><span class="sa-trans" data-en="View Solution" data-ar="عرض الحل">View Solution</span> <i class="fa-solid fa-arrow-right"></i></span>
                    </a>
                </div>

                <!-- 5. Payroll Software -->
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <a href="payroll-software-saudi-arabia.php" class="sa-vertical-card">
                        <div class="sa-vertical-icon"><i class="fa-solid fa-money-check-dollar"></i></div>
                        <h5 class="sa-trans" data-en="Payroll Software" data-ar="نظام مسيرات الرواتب">Payroll Software</h5>
                        <p class="sa-trans" data-en="Salary records, allowances, deductions, advances, and payroll registers." data-ar="مسيرات الرواتب، البدلات، الخصومات، السلف، وسجلات الصرف.">Salary records, allowances, deductions, advances, and payroll registers.</p>
                        <span class="sa-vertical-link"><span class="sa-trans" data-en="View Solution" data-ar="عرض الحل">View Solution</span> <i class="fa-solid fa-arrow-right"></i></span>
                    </a>
                </div>

                <!-- 6. CRM Software -->
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <a href="crm-software-saudi-arabia.php" class="sa-vertical-card">
                        <div class="sa-vertical-icon"><i class="fa-solid fa-handshake"></i></div>
                        <h5 class="sa-trans" data-en="CRM Software" data-ar="برنامج إدارة علاقات العملاء">CRM Software</h5>
                        <p class="sa-trans" data-en="Lead pipeline, quotation tracking, sales activities, and customer histories." data-ar="متابعة العملاء، عروض الأسعار، أنشطة المبيعات، وتاريخ تعاملات العملاء.">Lead pipeline, quotation tracking, sales activities, and customer histories.</p>
                        <span class="sa-vertical-link"><span class="sa-trans" data-en="View Solution" data-ar="عرض الحل">View Solution</span> <i class="fa-solid fa-arrow-right"></i></span>
                    </a>
                </div>

                <!-- 7. Business Automation -->
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <a href="business-automation-software-saudi-arabia.php" class="sa-vertical-card">
                        <div class="sa-vertical-icon"><i class="fa-solid fa-bolt"></i></div>
                        <h5 class="sa-trans" data-en="Business Automation" data-ar="أتمتة الأعمال والعمليات">Business Automation</h5>
                        <p class="sa-trans" data-en="Approval workflows, OCR purchase processing, and automatic alerts." data-ar="مسارات الاعتماد والموافقات، مسح الفواتير آلياً، والتنبيهات المجدولة.">Approval workflows, OCR purchase processing, and automatic alerts.</p>
                        <span class="sa-vertical-link"><span class="sa-trans" data-en="View Solution" data-ar="عرض الحل">View Solution</span> <i class="fa-solid fa-arrow-right"></i></span>
                    </a>
                </div>

                <!-- 8. ZATCA E-Invoicing -->
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <a href="zatca-e-invoicing-software-saudi-arabia.php" class="sa-vertical-card">
                        <div class="sa-vertical-icon"><i class="fa-solid fa-file-invoice"></i></div>
                        <h5 class="sa-trans" data-en="ZATCA E-Invoicing" data-ar="برنامج الفوترة الإلكترونية (فاتورة)">ZATCA E-Invoicing</h5>
                        <p class="sa-trans" data-en="Structured e-invoicing workflows, QR codes, and audit-ready data logs." data-ar="فواتير إلكترونية مهيأة لمتطلبات فاتورة ورمز الاستجابة السريعة وسجلات التدقيق.">Structured e-invoicing workflows, QR codes, and audit-ready data logs.</p>
                        <span class="sa-vertical-link"><span class="sa-trans" data-en="View Solution" data-ar="عرض الحل">View Solution</span> <i class="fa-solid fa-arrow-right"></i></span>
                    </a>
                </div>

                <!-- 9. Saudi VAT Accounting -->
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <a href="saudi-vat-accounting-software.php" class="sa-vertical-card">
                        <div class="sa-vertical-icon"><i class="fa-solid fa-calculator"></i></div>
                        <h5 class="sa-trans" data-en="Saudi 15% VAT Accounting" data-ar="المحاسبة وضريبة القيمة المضافة 15%">Saudi 15% VAT Accounting</h5>
                        <p class="sa-trans" data-en="15% VAT calculation, sales books, purchase registers, and tax returns." data-ar="حساب ضريبة 15%، دفاتر المبيعات والمشتريات، وتجهيز الإقرارات الضريبية.">15% VAT calculation, sales books, purchase registers, and tax returns.</p>
                        <span class="sa-vertical-link"><span class="sa-trans" data-en="View Solution" data-ar="عرض الحل">View Solution</span> <i class="fa-solid fa-arrow-right"></i></span>
                    </a>
                </div>

                <!-- 10. Retail & Supermarket -->
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <a href="retail-erp-software-saudi-arabia.php" class="sa-vertical-card">
                        <div class="sa-vertical-icon"><i class="fa-solid fa-cart-shopping"></i></div>
                        <h5 class="sa-trans" data-en="Retail & Supermarket ERP" data-ar="ERP التجزئة ونقاط البيع">Retail & Supermarket ERP</h5>
                        <p class="sa-trans" data-en="High-speed barcode POS, multi-branch counters, and stock sync." data-ar="نقاط بيع سريعة بالباركود، مزامنة الفروع، وإدارة المخزون والتسعير.">High-speed barcode POS, multi-branch counters, and stock sync.</p>
                        <span class="sa-vertical-link"><span class="sa-trans" data-en="View Solution" data-ar="عرض الحل">View Solution</span> <i class="fa-solid fa-arrow-right"></i></span>
                    </a>
                </div>

                <!-- 11. Logistics ERP -->
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <a href="logistics-erp-software-saudi-arabia.php" class="sa-vertical-card">
                        <div class="sa-vertical-icon"><i class="fa-solid fa-truck-fast"></i></div>
                        <h5 class="sa-trans" data-en="Logistics & Fleet ERP" data-ar="ERP الخدمات اللوجستية والأسطول">Logistics & Fleet ERP</h5>
                        <p class="sa-trans" data-en="Fleet records, driver expenses, fuel tracking, and logistics hubs." data-ar="إدارة الأسطول، مصروفات السائقين، تتبع الوقود، ومراكز الشحن والتوزيع.">Fleet records, driver expenses, fuel tracking, and logistics hubs.</p>
                        <span class="sa-vertical-link"><span class="sa-trans" data-en="View Solution" data-ar="عرض الحل">View Solution</span> <i class="fa-solid fa-arrow-right"></i></span>
                    </a>
                </div>

                <!-- 12. Import & Export Trading -->
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <a href="import-export-erp-software-saudi-arabia.php" class="sa-vertical-card">
                        <div class="sa-vertical-icon"><i class="fa-solid fa-ship"></i></div>
                        <h5 class="sa-trans" data-en="Import & Export ERP" data-ar="ERP الاستيراد والتصدير">Import & Export ERP</h5>
                        <p class="sa-trans" data-en="Foreign currency billing, landed cost, customs, and port clearing." data-ar="الفوترة بالعملات الأجنبية، تكاليف الشحن والجمارك، والموردين الدوليين.">Foreign currency billing, landed cost, customs, and port clearing.</p>
                        <span class="sa-vertical-link"><span class="sa-trans" data-en="View Solution" data-ar="عرض الحل">View Solution</span> <i class="fa-solid fa-arrow-right"></i></span>
                    </a>
                </div>

                <!-- 13. Hospitality & Food Service -->
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <a href="hospitality-erp-software-saudi-arabia.php" class="sa-vertical-card">
                        <div class="sa-vertical-icon"><i class="fa-solid fa-utensils"></i></div>
                        <h5 class="sa-trans" data-en="Hospitality & Restaurants" data-ar="ERP المطاعم والضيافة">Hospitality & Restaurants</h5>
                        <p class="sa-trans" data-en="Kitchen order display (KDS), recipe inventory costing, and POS." data-ar="إدارة المطابخ (KDS)، تكاليف الوصفات والمخزون، ونقاط البيع السريعة.">Kitchen order display (KDS), recipe inventory costing, and POS.</p>
                        <span class="sa-vertical-link"><span class="sa-trans" data-en="View Solution" data-ar="عرض الحل">View Solution</span> <i class="fa-solid fa-arrow-right"></i></span>
                    </a>
                </div>

                <!-- 14. Pharmacy & Healthcare -->
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <a href="pharmacy-erp-software-saudi-arabia.php" class="sa-vertical-card">
                        <div class="sa-vertical-icon"><i class="fa-solid fa-pills"></i></div>
                        <h5 class="sa-trans" data-en="Pharmacy & Healthcare" data-ar="ERP الصيدليات والمستلزمات الطبية">Pharmacy & Healthcare</h5>
                        <p class="sa-trans" data-en="Batch/expiry monitoring, supplier purchases, and counter POS." data-ar="مراقبة تواريخ الصلاحية والتشغيلات، مشتريات الأدوية، والبيع السريع.">Batch/expiry monitoring, supplier purchases, and counter POS.</p>
                        <span class="sa-vertical-link"><span class="sa-trans" data-en="View Solution" data-ar="عرض الحل">View Solution</span> <i class="fa-solid fa-arrow-right"></i></span>
                    </a>
                </div>

                <!-- 15. Building Materials -->
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <a href="building-material-erp-saudi-arabia.php" class="sa-vertical-card">
                        <div class="sa-vertical-icon"><i class="fa-solid fa-cubes-stacked"></i></div>
                        <h5 class="sa-trans" data-en="Building Materials ERP" data-ar="ERP مواد البناء">Building Materials ERP</h5>
                        <p class="sa-trans" data-en="Bulk quantity pricing, yard inventory, contractor credit, and fleet." data-ar="تسعير الكميات، مخزون الساحات، حسابات المقاولين، ونقل المواد.">Bulk quantity pricing, yard inventory, contractor credit, and fleet.</p>
                        <span class="sa-vertical-link"><span class="sa-trans" data-en="View Solution" data-ar="عرض الحل">View Solution</span> <i class="fa-solid fa-arrow-right"></i></span>
                    </a>
                </div>

                <!-- 16. Food Manufacturing -->
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <a href="food-manufacturing-erp-saudi-arabia.php" class="sa-vertical-card">
                        <div class="sa-vertical-icon"><i class="fa-solid fa-bowl-food"></i></div>
                        <h5 class="sa-trans" data-en="Food Manufacturing" data-ar="تصنيع الأغذية والمشروبات">Food Manufacturing</h5>
                        <p class="sa-trans" data-en="Recipe management, shelf-life expiry, batch yields, and cold storage." data-ar="إدارة الوصفات والخلطات، فترات الصلاحية، نسب الإنتاج، ومستودعات التبريد.">Recipe management, shelf-life expiry, batch yields, and cold storage.</p>
                        <span class="sa-vertical-link"><span class="sa-trans" data-en="View Solution" data-ar="عرض الحل">View Solution</span> <i class="fa-solid fa-arrow-right"></i></span>
                    </a>
                </div>

                <!-- 17. Plastic Manufacturing -->
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <a href="plastic-manufacturing-erp-saudi-arabia.php" class="sa-vertical-card">
                        <div class="sa-vertical-icon"><i class="fa-solid fa-bottle-water"></i></div>
                        <h5 class="sa-trans" data-en="Plastic Manufacturing" data-ar="صناعة البلاستيك والبوليمر">Plastic Manufacturing</h5>
                        <p class="sa-trans" data-en="Granule batching, mold tracking, machine output, and regrind cycles." data-ar="خلطات الحبيبات، إدارة القوالب، مخرجات المكائن، وتدوير الزوائد.">Granule batching, mold tracking, machine output, and regrind cycles.</p>
                        <span class="sa-vertical-link"><span class="sa-trans" data-en="View Solution" data-ar="عرض الحل">View Solution</span> <i class="fa-solid fa-arrow-right"></i></span>
                    </a>
                </div>

                <!-- 18. Metal Manufacturing -->
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <a href="metal-manufacturing-erp-saudi-arabia.php" class="sa-vertical-card">
                        <div class="sa-vertical-icon"><i class="fa-solid fa-wrench"></i></div>
                        <h5 class="sa-trans" data-en="Metal & Fabrication" data-ar="الصناعات المعدنية والتشكيل">Metal & Fabrication</h5>
                        <p class="sa-trans" data-en="Coil cutting, metal gauge tracking, job cards, and coating costs." data-ar="تقطيع الصاج، قياسات المعادن، بطاقات التشغيل، وتكاليف الدهان والجلفنة.">Coil cutting, metal gauge tracking, job cards, and coating costs.</p>
                        <span class="sa-vertical-link"><span class="sa-trans" data-en="View Solution" data-ar="عرض الحل">View Solution</span> <i class="fa-solid fa-arrow-right"></i></span>
                    </a>
                </div>

                <!-- 19. Packaging Manufacturing -->
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <a href="packaging-erp-software-saudi-arabia.php" class="sa-vertical-card">
                        <div class="sa-vertical-icon"><i class="fa-solid fa-box-open"></i></div>
                        <h5 class="sa-trans" data-en="Packaging Industry ERP" data-ar="صناعة التعبئة والتغليف">Packaging Industry ERP</h5>
                        <p class="sa-trans" data-en="Corrugated carton specs, print run sheets, die cutters, and delivery." data-ar="مواصفات الكرتون المضلع، أوامر الطباعة، قوالب التكسير، وتوريد الطلبيات.">Corrugated carton specs, print run sheets, die cutters, and delivery.</p>
                        <span class="sa-vertical-link"><span class="sa-trans" data-en="View Solution" data-ar="عرض الحل">View Solution</span> <i class="fa-solid fa-arrow-right"></i></span>
                    </a>
                </div>

                <!-- 20. Supermarket ERP -->
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <a href="supermarket-erp-software-saudi-arabia.php" class="sa-vertical-card">
                        <div class="sa-vertical-icon"><i class="fa-solid fa-basket-shopping"></i></div>
                        <h5 class="sa-trans" data-en="Supermarket & Grocery" data-ar="السوبرماركت والهايبرماركت">Supermarket & Grocery</h5>
                        <p class="sa-trans" data-en="Weigh scale barcodes, fast checkout lanes, promo pricing, and FMCG stock." data-ar="باركود الموازين، مسارات الدفع السريعة، العروض الترويجية، ومخزون السلع.">Weigh scale barcodes, fast checkout lanes, promo pricing, and FMCG stock.</p>
                        <span class="sa-vertical-link"><span class="sa-trans" data-en="View Solution" data-ar="عرض الحل">View Solution</span> <i class="fa-solid fa-arrow-right"></i></span>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- 6. MULTI-BRANCH & MULTI-WAREHOUSE ENTERPRISE ARCHITECTURE -->
    <section class="sa-section bg-dark-sa">
        <div class="container">
            <div class="text-center">
                <span class="section-badge-sa-dark sa-trans" data-en="Enterprise Scalability" data-ar="بنية المؤسسات متعددة الفروع">Enterprise Scalability</span>
                <h2 class="section-title-sa-dark sa-trans"
                    data-en="Centralized Control for Multi-Branch & Multi-Warehouse Operations"
                    data-ar="تحكم مركزي شامل للشركات متعددة الفروع والمستودعات في السعودية">
                    Centralized Control for Multi-Branch & Multi-Warehouse Operations
                </h2>
                <p class="section-sub-sa text-white-50 sa-trans"
                    data-en="From Riyadh headquarters to plants in Jubail, warehouses in Jeddah, and retail outlets in Dammam, keep all operations perfectly synchronized."
                    data-ar="من المقر الرئيسي في الرياض إلى مصانع الجبيل، ومستودعات جدة، وفروع التجزئة في الدمام — مزامنة لحظية لكافة العمليات:">
                    From Riyadh headquarters to plants in Jubail, warehouses in Jeddah, and retail outlets in Dammam, keep all operations perfectly synchronized.
                </p>
            </div>

            <div class="row g-4 text-start">
                <div class="col-lg-3 col-md-6">
                    <div class="p-4 rounded-3 h-100" style="background: rgba(255, 255, 255, 0.05); border: 1px solid rgba(255, 255, 255, 0.1);">
                        <i class="fa-solid fa-building-columns text-success fs-3 mb-3"></i>
                        <h5 class="fw-bold text-white sa-trans" data-en="Central HQ Consolidation" data-ar="توحيد الإدارة المركزية">Central HQ Consolidation</h5>
                        <p class="small text-white-50 mb-0 sa-trans"
                            data-en="Real-time consolidated profit & loss, company-wide balance sheets, and executive KPI dashboards."
                            data-ar="قوائم أرباح وخسائر مجمعة لحظياً، ميزانية عمومية موحدة، ولوحات قيادة للإدارة العليا.">
                            Real-time consolidated profit & loss, company-wide balance sheets, and executive KPI dashboards.
                        </p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="p-4 rounded-3 h-100" style="background: rgba(255, 255, 255, 0.05); border: 1px solid rgba(255, 255, 255, 0.1);">
                        <i class="fa-solid fa-arrows-split-up-and-left text-success fs-3 mb-3"></i>
                        <h5 class="fw-bold text-white sa-trans" data-en="Inter-Branch Stock Transfers" data-ar="مناقلات الفروع والمستودعات">Inter-Branch Stock Transfers</h5>
                        <p class="small text-white-50 mb-0 sa-trans"
                            data-en="Stock transfer orders with transit dispatch tracking, receiving verification, and gate pass notes."
                            data-ar="أوامر مناقلة المخزون مع تتبع بضاعة الطريق، مطابقة الاستلام، وإصدار سندات خروج الشاحنات.">
                            Stock transfer orders with transit dispatch tracking, receiving verification, and gate pass notes.
                        </p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="p-4 rounded-3 h-100" style="background: rgba(255, 255, 255, 0.05); border: 1px solid rgba(255, 255, 255, 0.1);">
                        <i class="fa-solid fa-user-shield text-success fs-3 mb-3"></i>
                        <h5 class="fw-bold text-white sa-trans" data-en="13+ Granular User Roles" data-ar="أكثر من 13 مستوى صلاحيات">13+ Granular User Roles</h5>
                        <p class="small text-white-50 mb-0 sa-trans"
                            data-en="Role-based permissions for CEOs, CFOs, accountants, store managers, plant supervisors, and cashiers."
                            data-ar="صلاحيات محددة للمدراء التنفيذيين، المدراء الماليين، المحاسبين، مدراء المستودعات والمشرفين.">
                            Role-based permissions for CEOs, CFOs, accountants, store managers, plant supervisors, and cashiers.
                        </p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="p-4 rounded-3 h-100" style="background: rgba(255, 255, 255, 0.05); border: 1px solid rgba(255, 255, 255, 0.1);">
                        <i class="fa-solid fa-cloud-arrow-up text-success fs-3 mb-3"></i>
                        <h5 class="fw-bold text-white sa-trans" data-en="Cloud Reliability & Uptime" data-ar="استقرار سحابي وأمان فائق">Cloud Reliability & Uptime</h5>
                        <p class="small text-white-50 mb-0 sa-trans"
                            data-en="99.9% cloud uptime, automated encrypted backups, SSL security, and localized low-latency access."
                            data-ar="جاهزية سحابية 99.9%، نسخ احتياطي مشفر وتلقائي، حماية SSL وسرعة استجابة عالية.">
                            99.9% cloud uptime, automated encrypted backups, SSL security, and localized low-latency access.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 7. SAUDI CITIES & REGIONS COVERAGE -->
    <section class="sa-section bg-white">
        <div class="container">
            <div class="text-center">
                <span class="section-badge-sa sa-trans" data-en="Regional Footprint" data-ar="تغطية المدن والمناطق الصناعية">Regional Footprint</span>
                <h2 class="section-title-sa sa-trans"
                    data-en="Serving Enterprise Businesses Across Saudi Arabia"
                    data-ar="نخدم الشركات والمصانع في كافة مدن ومحافظات المملكة">
                    Serving Enterprise Businesses Across Saudi Arabia
                </h2>
                <p class="section-sub-sa sa-trans"
                    data-en="Supporting manufacturing parks, commercial centers, and distribution hubs throughout the Kingdom."
                    data-ar="دعم كامل للمدن الصناعية والمراكز التجارية ومناطق التوزيع اللوجستية في السعودية:">
                    Supporting manufacturing parks, commercial centers, and distribution hubs throughout the Kingdom.
                </p>
            </div>

            <div class="d-flex flex-wrap justify-content-center gap-3 mb-5">
                <a href="erp-software-riyadh.php" class="city-pill-sa">
                    <i class="fa-solid fa-city text-success"></i>
                    <div>
                        <div class="fw-bold">Riyadh (الرياض)</div>
                        <small class="text-muted sa-trans" data-en="Commercial & Tech Hub" data-ar="العاصمة والمركز المالي">Commercial & Tech Hub</small>
                    </div>
                </a>
                <a href="erp-software-jeddah.php" class="city-pill-sa">
                    <i class="fa-solid fa-ship text-success"></i>
                    <div>
                        <div class="fw-bold">Jeddah (جدة)</div>
                        <small class="text-muted sa-trans" data-en="Port & Import Trading" data-ar="الميناء والتجارة والاستيراد">Port & Import Trading</small>
                    </div>
                </a>
                <a href="erp-software-dammam.php" class="city-pill-sa">
                    <i class="fa-solid fa-boxes-packing text-success"></i>
                    <div>
                        <div class="fw-bold">Dammam (الدمام)</div>
                        <small class="text-muted sa-trans" data-en="Eastern Province Logistics" data-ar="لوجستيات المنطقة الشرقية">Eastern Province Logistics</small>
                    </div>
                </a>
                <a href="erp-software-khobar.php" class="city-pill-sa">
                    <i class="fa-solid fa-briefcase text-success"></i>
                    <div>
                        <div class="fw-bold">Al-Khobar (الخبر)</div>
                        <small class="text-muted sa-trans" data-en="Corporate Services & Oil Support" data-ar="خدمات الشركات والأعمال">Corporate Services & Oil Support</small>
                    </div>
                </a>
                <a href="erp-software-jubail.php" class="city-pill-sa">
                    <i class="fa-solid fa-industry text-success"></i>
                    <div>
                        <div class="fw-bold">Jubail (الجبيل الصناعية)</div>
                        <small class="text-muted sa-trans" data-en="Petrochemical & Heavy Industry" data-ar="المدينة الصناعية الكبرى">Petrochemical & Heavy Industry</small>
                    </div>
                </a>
            </div>

            <!-- Partnership Opportunity Callout -->
            <div class="p-4 rounded-3 border text-center bg-light-sa" style="max-width: 900px; margin: 0 auto;">
                <h4 class="fw-bold text-success mb-2 sa-trans" data-en="Local Implementation & Partnership Opportunities" data-ar="فرص الشراكة والتطبيق المحلي في المملكة">Local Implementation & Partnership Opportunities</h4>
                <p class="text-muted small mb-0 sa-trans"
                    data-en="Digify Soft Solutions collaborates with IT consultants, ERP implementation partners, accounting firms, and business advisors to provide smooth on-ground deployment and responsive local client assistance across Saudi Arabia."
                    data-ar="تتعاون ديجيفاي سوفت سوليوشنز مع مستشاري تقنية المعلومات، وشركاء تطبيق أنظمة ERP، والمكاتب المحاسبية لتقديم خدمات النشر والدعم المحلي المتميز في كافة مناطق المملكة.">
                    Digify Soft Solutions collaborates with IT consultants, ERP implementation partners, accounting firms, and business advisors to provide smooth on-ground deployment and responsive local client assistance across Saudi Arabia.
                </p>
            </div>
        </div>
    </section>

    <!-- 8. FREQUENTLY ASKED QUESTIONS -->
    <section class="sa-section bg-light-sa">
        <div class="container" style="max-width: 960px;">
            <div class="text-center">
                <span class="section-badge-sa sa-trans" data-en="Saudi FAQs" data-ar="الأسئلة الشائعة">Saudi FAQs</span>
                <h2 class="section-title-sa sa-trans"
                    data-en="Frequently Asked Questions About Saudi ERP"
                    data-ar="الأسئلة الشائعة حول برامج تخطيط موارد المؤسسات في السعودية">
                    Frequently Asked Questions About Saudi ERP
                </h2>
                <p class="section-sub-sa sa-trans"
                    data-en="Everything you need to know about implementing Digify ERP in Saudi Arabia."
                    data-ar="إجابات وافية حول تطبيق النظام والفوترة الإلكترونية والموارد البشرية:">
                    Everything you need to know about implementing Digify ERP in Saudi Arabia.
                </p>
            </div>

            <div class="accordion accordion-sa" id="saudiFaqAccordion">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="faqH1">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faqC1">
                            <span class="sa-trans" data-en="What is ERP software in Saudi Arabia?" data-ar="ما هو برنامج ERP في المملكة العربية السعودية؟">What is ERP software in Saudi Arabia?</span>
                        </button>
                    </h2>
                    <div id="faqC1" class="accordion-collapse collapse show" data-bs-parent="#saudiFaqAccordion">
                        <div class="accordion-body sa-trans"
                            data-en="ERP software in Saudi Arabia is a centralized business management platform that connects finance, sales, purchasing, inventory, HRMS, CRM, manufacturing, projects, and reporting workflows into one single source of truth."
                            data-ar="برنامج ERP في السعودية هو منصة إدارة أعمال مركزية تربط الإدارة المالية، المبيعات، المشتريات، المخازن، الموارد البشرية، علاقات العملاء، التصنيع والمشاريع في قاعدة بيانات موحدة.">
                            ERP software in Saudi Arabia is a centralized business management platform that connects finance, sales, purchasing, inventory, HRMS, CRM, manufacturing, projects, and reporting workflows into one single source of truth.
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header" id="faqH2">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqC2">
                            <span class="sa-trans" data-en="Does the ERP support ZATCA e-invoicing workflows?" data-ar="هل يدعم النظام مسارات الفوترة الإلكترونية ومتطلبات ZATCA؟">Does the ERP support ZATCA e-invoicing workflows?</span>
                        </button>
                    </h2>
                    <div id="faqC2" class="accordion-collapse collapse" data-bs-parent="#saudiFaqAccordion">
                        <div class="accordion-body sa-trans"
                            data-en="Yes. Digify is architected to support electronic invoicing workflows required by Saudi businesses, including structured invoice data, customer Tax Identification Numbers (TIN), 15% VAT calculation, and audit trails."
                            data-ar="نعم. تم تصميم بنية نظام ديجيفاي لدعم مسارات الفوترة الإلكترونية المطلوبة في السعودية، بما في ذلك هيكلة بيانات الفواتير، الأرقام الضريبية للعملاء، احتساب ضريبة 15% وسجلات التدقيق.">
                            Yes. Digify is architected to support electronic invoicing workflows required by Saudi businesses, including structured invoice data, customer Tax Identification Numbers (TIN), 15% VAT calculation, and audit trails.
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header" id="faqH3">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqC3">
                            <span class="sa-trans" data-en="Does Digify support Arabic and English bilingual operations?" data-ar="هل يدعم النظام التشغيل ثنائي اللغة باللغتين العربية والإنجليزية؟">Does Digify support Arabic and English bilingual operations?</span>
                        </button>
                    </h2>
                    <div id="faqC3" class="accordion-collapse collapse" data-bs-parent="#saudiFaqAccordion">
                        <div class="accordion-body sa-trans"
                            data-en="Yes. Digify provides full bilingual support with Arabic and English interfaces, bilingual customer and product descriptions, and Arabic invoice/receipt printing."
                            data-ar="نعم. يوفر النظام دعماً ثنائي اللغة بالكامل مع واجهات عربية وإنجليزية، وأسماء منتجات وعملاء ثنائية، وطباعة الفواتير والسندات باللغة العربية.">
                            Yes. Digify provides full bilingual support with Arabic and English interfaces, bilingual customer and product descriptions, and Arabic invoice/receipt printing.
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header" id="faqH4">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqC4">
                            <span class="sa-trans" data-en="Can Saudi manufacturing and contracting companies use Digify?" data-ar="هل يمكن لشركات التصنيع والمقاولات السعودية استخدام ديجيفاي؟">Can Saudi manufacturing and contracting companies use Digify?</span>
                        </button>
                    </h2>
                    <div id="faqC4" class="accordion-collapse collapse" data-bs-parent="#saudiFaqAccordion">
                        <div class="accordion-body sa-trans"
                            data-en="Absolutely. Manufacturing companies can manage Bills of Materials (BOM), batch tracking, and raw material consumption. Contracting companies can manage project budgets, site material indents, and subcontractor billing."
                            data-ar="بالتأكيد. يمكن لشركات التصنيع إدارة قوائم المواد (BOM) وتتبع التشغيلات واستهلاك الخامات، كما يمكن لشركات المقاولات إدارة ميزانيات المشاريع وصرف المواد ومستخلصات مقاولي الباطن.">
                            Absolutely. Manufacturing companies can manage Bills of Materials (BOM), batch tracking, and raw material consumption. Contracting companies can manage project budgets, site material indents, and subcontractor billing.
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header" id="faqH5">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqC5">
                            <span class="sa-trans" data-en="How does the HRMS and payroll module assist Saudi enterprises?" data-ar="كيف يساعد نظام الموارد البشرية والرواتب الشركات في السعودية؟">How does the HRMS and payroll module assist Saudi enterprises?</span>
                        </button>
                    </h2>
                    <div id="faqC5" class="accordion-collapse collapse" data-bs-parent="#saudiFaqAccordion">
                        <div class="accordion-body sa-trans"
                            data-en="The integrated HRMS manages employee personal master data, Iqama/ID expiries, biometric attendance tracking, leave requests, salary advances, allowances, deductions, and department-wise payroll registers."
                            data-ar="يدير نظام الموارد البشرية ملفات الموظفين وسجلات الإقامات، ربط أجهزة البصمة، طلبات الإجازات، السلف، البدلات والخصومات ومسيرات الرواتب الشهرية لكل قسم.">
                            The integrated HRMS manages employee personal master data, Iqama/ID expiries, biometric attendance tracking, leave requests, salary advances, allowances, deductions, and department-wise payroll registers.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 9. FINAL CALL TO ACTION -->
    <section class="py-5" style="background: linear-gradient(135deg, #064e3b 0%, #062b1b 100%); color: #ffffff;">
        <div class="container text-center py-4">
            <h2 class="fw-bold mb-3 sa-trans"
                data-en="Transform Your Saudi Business with a Modern ERP Platform"
                data-ar="طور أعمال شركتك في السعودية بنظام ERP سحابي متطور">
                Transform Your Saudi Business with a Modern ERP Platform
            </h2>
            <p class="mx-auto mb-4 text-white-50 sa-trans" style="max-width: 760px; font-size: 17px;"
                data-en="Manage Finance, Sales, Purchasing, Inventory, HR, CRM, and Multi-Branch Operations from one centralized system. Built for Saudi businesses across manufacturing, distribution, contracting, trading, retail, logistics, and services."
                data-ar="تحكم في الإدارة المالية، المبيعات، المشتريات، المخازن، الموارد البشرية، وعلاقات العملاء من منصة مركزية واحدة مهيأة لمتطلبات الأعمال السعودية.">
                Manage Finance, Sales, Purchasing, Inventory, HR, CRM, and Multi-Branch Operations from one centralized system. Built for Saudi businesses across manufacturing, distribution, contracting, trading, retail, logistics, and services.
            </p>
            <div class="d-flex justify-content-center flex-wrap gap-3">
                <button type="button" class="btn btn-light px-4 py-3 fw-bold text-success rounded-pill" data-bs-toggle="modal" data-bs-target="#trialModal">
                    <i class="fa-solid fa-calendar-check me-2"></i> <span class="sa-trans" data-en="Request a Free Saudi ERP Demo" data-ar="احجز عرضاً توضيحياً مجانياً الآن">Request a Free Saudi ERP Demo</span>
                </button>
                <a href="tel:+917425016636" class="btn btn-outline-light px-4 py-3 fw-bold rounded-pill">
                    <i class="fa-solid fa-phone me-2"></i> +91 7425016636
                </a>
            </div>
        </div>
    </section>
</div>

<script>
function setSaLang(lang) {
    try {
        localStorage.setItem('digify_saudi_lang', lang);
    } catch(e) {}
    
    document.querySelectorAll('.lang-pill').forEach(btn => btn.classList.remove('active'));
    if (lang === 'ar') {
        const btnAr = document.getElementById('btn-lang-ar');
        if (btnAr) btnAr.classList.add('active');
        document.querySelectorAll('.sa-trans').forEach(el => {
            const val = el.getAttribute('data-ar');
            if (val) el.innerHTML = val;
        });
        document.documentElement.setAttribute('dir', 'rtl');
        document.documentElement.lang = 'ar';
        document.body.classList.add('sa-arabic-font');
    } else {
        const btnEn = document.getElementById('btn-lang-en');
        if (btnEn) btnEn.classList.add('active');
        document.querySelectorAll('.sa-trans').forEach(el => {
            const val = el.getAttribute('data-en');
            if (val) el.innerHTML = val;
        });
        document.documentElement.setAttribute('dir', 'ltr');
        document.documentElement.lang = 'en';
        document.body.classList.remove('sa-arabic-font');
    }
}

document.addEventListener('DOMContentLoaded', function() {
    const urlParams = new URLSearchParams(window.location.search);
    const urlLang = urlParams.get('lang');
    let savedLang = 'en';
    try {
        savedLang = localStorage.getItem('digify_saudi_lang') || 'en';
    } catch(e) {}
    
    if (urlLang === 'ar' || savedLang === 'ar') {
        setSaLang('ar');
    }
});
</script>

<?php include('trial_modal.php'); ?>
<?php include(__DIR__ . '/../../footer.php'); ?>
