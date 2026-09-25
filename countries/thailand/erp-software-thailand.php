<?php 
include_once(__DIR__ . '/../../db.php');
include_once(__DIR__ . '/../../fetch_meta.php');

$pageTitle = "ERP Software in Thailand | Manufacturing, Trading, Retail & Business ERP";
$pageDescription = "ERP software in Thailand for manufacturing, automotive, electronics, trading, distribution, retail, food processing, agriculture, logistics, tourism and SMEs. Manage inventory, accounting, CRM, sales and automation.";
$pageKeywords = "ERP software Thailand, ERP software in Thailand, best ERP software Thailand, cloud ERP Thailand, manufacturing ERP Thailand, automotive ERP Thailand, EV ERP Thailand, electronics ERP Thailand, food processing ERP Thailand, agriculture ERP Thailand, rice trading ERP Thailand, rubber ERP Thailand, trading ERP Thailand, distribution ERP Thailand, retail ERP Thailand, tourism ERP Thailand, Thailand VAT software, e-Tax Invoice software Thailand, Thai English ERP, ERP Bangkok, ERP Chonburi, ERP Rayong";
$pageCanonical = "https://www.digifysoft.in/erp-software-thailand";

include(__DIR__ . '/../../top.php');
include(__DIR__ . '/../../header.php');
?>

<style>
/* Thailand Master Suite Design System */
.th-page-wrapper {
    font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
    color: #1e293b;
    overflow-x: hidden;
}
.th-font {
    font-family: 'Prompt', 'Sarabun', -apple-system, BlinkMacSystemFont, sans-serif !important;
}

/* Hero Section */
.th-hero {
    background: linear-gradient(135deg, #091a2e 0%, #1e3a5f 45%, #2b1219 100%);
    color: #ffffff;
    padding: 75px 0 90px;
    position: relative;
    overflow: hidden;
    border-bottom: 4px solid #ef4444;
}
.th-hero::before {
    content: '';
    position: absolute;
    top: -15%;
    right: -10%;
    width: 720px;
    height: 720px;
    background: radial-gradient(circle, rgba(239, 68, 68, 0.22) 0%, rgba(59, 130, 246, 0.18) 50%, rgba(0, 0, 0, 0) 75%);
    border-radius: 50%;
    pointer-events: none;
}
.text-gradient-th {
    background: linear-gradient(135deg, #60a5fa 0%, #f87171 50%, #fde047 100%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    display: inline-block;
}
.th-hero-badge {
    background: rgba(239, 68, 68, 0.18);
    border: 1px solid rgba(248, 113, 113, 0.45);
    color: #fca5a5;
    font-size: 13px;
    font-weight: 700;
    padding: 7px 18px;
    border-radius: 30px;
    display: inline-flex;
    align-items: center;
    gap: 8px;
    margin-bottom: 18px;
}
.th-hero h1 {
    font-size: 42px;
    font-weight: 900;
    line-height: 1.25;
    margin-bottom: 18px;
    letter-spacing: -0.5px;
}
.th-hero-sub {
    font-size: 18px;
    font-weight: 600;
    color: #fde047;
    line-height: 1.5;
    margin-bottom: 14px;
}
.th-hero-desc {
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
    background: #ef4444;
    color: #ffffff;
    box-shadow: 0 2px 10px rgba(239, 68, 68, 0.5);
}

/* Economy Stat Badge */
.eco-badge-th {
    background: linear-gradient(135deg, rgba(59, 130, 246, 0.2) 0%, rgba(239, 68, 68, 0.2) 100%);
    border: 1px solid rgba(248, 113, 113, 0.4);
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
.th-lead-card {
    background: #ffffff;
    border-radius: 20px;
    padding: 34px 30px;
    color: #1e293b;
    box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.35);
    border: 1px solid rgba(255, 255, 255, 0.3);
}
.th-lead-card h3 {
    font-size: 22px;
    font-weight: 800;
    color: #0f172a;
    margin-bottom: 8px;
}
.th-lead-card p {
    font-size: 13px;
    color: #64748b;
    margin-bottom: 20px;
}
.th-lead-card .form-control, .th-lead-card .form-select {
    border-radius: 10px;
    border: 1px solid #cbd5e1;
    padding: 11px 14px;
    font-size: 14px;
}
.th-lead-card .form-control:focus, .th-lead-card .form-select:focus {
    border-color: #ef4444;
    box-shadow: 0 0 0 3px rgba(239, 68, 68, 0.2);
}

/* Buttons */
.btn-th-primary {
    background: linear-gradient(135deg, #ef4444 0%, #b91c1c 100%);
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
    box-shadow: 0 10px 20px -5px rgba(239, 68, 68, 0.4);
    text-decoration: none;
}
.btn-th-primary:hover {
    background: linear-gradient(135deg, #dc2626 0%, #991b1b 100%);
    color: #ffffff;
    transform: translateY(-2px);
}
.btn-th-outline {
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
.btn-th-outline:hover {
    background: rgba(255, 255, 255, 0.18);
    color: #ffffff;
    transform: translateY(-2px);
}

/* Section styling */
.th-section { padding: 75px 0; }
.bg-light-th { background-color: #f8fafc; }
.bg-dark-th { background: #091a2e; color: #ffffff; }
.section-badge-th {
    display: inline-block;
    background: #fee2e2;
    color: #b91c1c;
    font-size: 12px;
    font-weight: 800;
    text-transform: uppercase;
    letter-spacing: 0.8px;
    padding: 6px 14px;
    border-radius: 20px;
    margin-bottom: 12px;
    border: 1px solid #fecaca;
}
.section-badge-th-dark {
    display: inline-block;
    background: rgba(239, 68, 68, 0.18);
    color: #fca5a5;
    font-size: 12px;
    font-weight: 800;
    text-transform: uppercase;
    letter-spacing: 0.8px;
    padding: 6px 14px;
    border-radius: 20px;
    margin-bottom: 12px;
    border: 1px solid rgba(248, 113, 113, 0.4);
}
.section-title-th {
    font-size: 34px;
    font-weight: 900;
    color: #0f172a;
    line-height: 1.3;
    margin-bottom: 16px;
    letter-spacing: -0.5px;
}
.section-title-th-dark {
    font-size: 34px;
    font-weight: 900;
    color: #ffffff;
    line-height: 1.3;
    margin-bottom: 16px;
    letter-spacing: -0.5px;
}
.section-sub-th {
    font-size: 16px;
    color: #64748b;
    max-width: 780px;
    margin: 0 auto 40px;
    line-height: 1.7;
}

/* Feature Cards & Grid */
.th-card {
    background: #ffffff;
    border: 1px solid #e2e8f0;
    border-radius: 16px;
    padding: 26px;
    transition: all 0.3s ease;
    height: 100%;
    display: flex;
    flex-direction: column;
}
.th-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 20px 30px -10px rgba(0, 0, 0, 0.08);
    border-color: #ef4444;
}
.th-card-icon {
    width: 52px;
    height: 52px;
    border-radius: 14px;
    background: #fee2e2;
    color: #dc2626;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 22px;
    margin-bottom: 18px;
}
.th-card h4 {
    font-size: 19px;
    font-weight: 800;
    color: #0f172a;
    margin-bottom: 12px;
}
.th-card p {
    font-size: 14px;
    color: #64748b;
    line-height: 1.6;
    margin-bottom: 16px;
    flex-grow: 1;
}

/* Vertical / Category Card */
.th-vertical-card {
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
.th-vertical-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 15px 30px rgba(239, 68, 68, 0.18);
    border-color: #ef4444;
    color: inherit;
}
.th-vertical-card::after {
    content: '';
    position: absolute;
    bottom: 0;
    left: 0;
    width: 0%;
    height: 4px;
    background: linear-gradient(135deg, #ef4444 0%, #3b82f6 100%);
    transition: width 0.3s ease;
}
.th-vertical-card:hover::after {
    width: 100%;
}
.th-vertical-icon {
    width: 48px;
    height: 48px;
    border-radius: 12px;
    background: #fee2e2;
    color: #dc2626;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 20px;
    margin-bottom: 16px;
}
.th-vertical-card h5 {
    font-size: 17px;
    font-weight: 800;
    color: #0f172a;
    margin-bottom: 8px;
}
.th-vertical-card p {
    font-size: 13px;
    color: #64748b;
    line-height: 1.5;
    margin-bottom: 14px;
    flex-grow: 1;
}
.th-vertical-link {
    font-size: 13px;
    font-weight: 700;
    color: #dc2626;
    display: inline-flex;
    align-items: center;
    gap: 6px;
}

/* Accordion */
.accordion-th .accordion-item {
    border: 1px solid #e2e8f0;
    border-radius: 12px !important;
    margin-bottom: 14px;
    overflow: hidden;
}
.accordion-th .accordion-button {
    font-size: 16px;
    font-weight: 700;
    color: #0f172a;
    padding: 20px 24px;
    background: #ffffff;
    box-shadow: none;
}
.accordion-th .accordion-button:not(.collapsed) {
    background: #fee2e2;
    color: #b91c1c;
}
.accordion-th .accordion-body {
    font-size: 14px;
    line-height: 1.7;
    color: #475569;
    padding: 0 24px 20px;
}

/* City Pills */
.city-pill-th {
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
.city-pill-th:hover {
    border-color: #ef4444;
    background: #fee2e2;
    color: #b91c1c;
    transform: translateY(-2px);
}
</style>

<div class="th-page-wrapper">
    <!-- 1. HERO SECTION -->
    <section class="th-hero">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7 mb-4 mb-lg-0">
                    <div class="lang-toggle-bar">
                        <button type="button" class="lang-pill active" id="btn-lang-en" onclick="setThLang('en')">
                            <i class="fa-solid fa-globe me-1"></i> English
                        </button>
                        <button type="button" class="lang-pill" id="btn-lang-th" onclick="setThLang('th')">
                            🇹🇭 ภาษาไทย (Thailand)
                        </button>
                    </div>
                    <br>
                    <div class="eco-badge-th">
                        <i class="fa-solid fa-chart-line"></i>
                        <span class="th-trans" data-en="Aligned with Thailand BOI Strategic Hubs & $297B+ Export Engine" data-th="สอดคล้องกับยุทธศาสตร์การส่งเสริมการลงทุน BOI และการส่งออกกว่า 297 พันล้านดอลลาร์">Aligned with Thailand BOI Strategic Hubs & $297B+ Export Engine</span>
                    </div>
                    <div class="th-hero-badge">
                        <span class="th-trans" data-en="🇹🇭 Enterprise Cloud ERP, Manufacturing & e-Tax Suite in Thailand" data-th="🇹🇭 ระบบ ERP คลาวด์สำหรับโรงงานอุตสาหกรรม การค้า และระบบภาษีอิเล็กทรอนิกส์ในไทย">🇹🇭 Enterprise Cloud ERP, Manufacturing & e-Tax Suite in Thailand</span>
                    </div>
                    <h1 class="th-trans" 
                        data-en="ERP Software in Thailand for <span class='text-gradient-th'>Growing Businesses & Enterprises</span>"
                        data-th="โปรแกรม ERP ในประเทศไทยสำหรับ <span class='text-gradient-th'>ธุรกิจที่กำลังเติบโตและโรงงานอุตสาหกรรม</span>">
                        ERP Software in Thailand for <span class="text-gradient-th">Growing Businesses & Enterprises</span>
                    </h1>
                    <div class="th-hero-sub th-trans"
                        data-en="Manage Your Thailand Business with One Powerful ERP Platform"
                        data-th="บริหารจัดการธุรกิจในประเทศไทยด้วยแพลตฟอร์ม ERP อันทรงพลังเพียงหนึ่งเดียว">
                        Manage Your Thailand Business with One Powerful ERP Platform
                    </div>
                    <p class="th-hero-desc th-trans"
                        data-en="Digify Soft Solutions provides integrated ERP and business management software for businesses across Thailand. Manage manufacturing production, BOM, automotive supply, food processing, sales, purchasing, inventory, accounting, 7% VAT, e-Tax Invoice workflows, CRM, and multi-branch operations from one centralized platform."
                        data-th="ดิจิฟาย ซอฟต์ โซลูชั่นส์ ให้บริการระบบ ERP และซอฟต์แวร์บริหารธุรกิจแบบครบวงจรสำหรับธุรกิจทั่วประเทศไทย จัดการการผลิต สูตรการผลิต (BOM) อุตสาหกรรมยานยนต์และชิ้นส่วน แปรรูปอาหาร บัญชีและภาษีมูลค่าเพิ่ม 7% ใบกำกับภาษีอิเล็กทรอนิกส์ (e-Tax Invoice) และคลังสินค้าจากศูนย์กลาง">
                        Digify Soft Solutions provides integrated ERP and business management software for businesses across Thailand. Manage manufacturing production, BOM, automotive supply, food processing, sales, purchasing, inventory, accounting, 7% VAT, e-Tax Invoice workflows, CRM, and multi-branch operations from one centralized platform.
                    </p>
                    <div class="d-flex flex-wrap gap-3">
                        <a href="javascript:void(0)" class="btn-th-primary" data-bs-toggle="modal" data-bs-target="#trialModal">
                            <i class="fa-solid fa-calendar-check"></i>
                            <span class="th-trans" data-en="Request a Free Thailand ERP Demo" data-th="ขอนัดหมายสาธิตระบบ ERP ฟรี">Request a Free Thailand ERP Demo</span>
                        </a>
                        <a href="#thailand-verticals" class="btn-th-outline">
                            <i class="fa-solid fa-layer-group"></i>
                            <span class="th-trans" data-en="Explore 25+ Thailand Verticals" data-th="ดูโซลูชัน 25+ กลุ่มธุรกิจในไทย">Explore 25+ Thailand Verticals</span>
                        </a>
                    </div>
                </div>

                <!-- Right Hero Lead Card -->
                <div class="col-lg-5">
                    <div class="th-lead-card">
                        <h3 class="th-trans" data-en="Get Your Thailand ERP Solution" data-th="ขอรับคำปรึกษาระบบ ERP ในไทย">Get Your Thailand ERP Solution</h3>
                        <p class="th-trans" data-en="Talk directly to our Thailand ERP deployment & manufacturing experts." data-th="ปรึกษาผู้เชี่ยวชาญด้านการวางระบบ ERP และโรงงานในประเทศไทย">Talk directly to our Thailand ERP deployment & manufacturing experts.</p>
                        
                        <form action="send_mail.php" method="POST" id="thailandMasterLeadForm">
                            <input type="hidden" name="source" value="Thailand Master ERP Page">
                            <input type="hidden" name="country" value="Thailand">
                            <div class="mb-3">
                                <label class="form-label small fw-bold th-trans" data-en="Your Name" data-th="ชื่อ-นามสกุล">Your Name</label>
                                <input type="text" name="name" class="form-control" placeholder="Somchai Prasert" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label small fw-bold th-trans" data-en="Company / Factory Name" data-th="ชื่อบริษัท / โรงงาน">Company / Factory Name</label>
                                <input type="text" name="company_name" class="form-control" placeholder="Siam Manufacturing & Trading Co., Ltd." required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label small fw-bold th-trans" data-en="Phone / WhatsApp / LINE ID" data-th="เบอร์โทรศัพท์ / LINE ID">Phone / WhatsApp / LINE ID</label>
                                <input type="tel" name="phone" class="form-control" placeholder="+66 8X XXX XXXX" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label small fw-bold th-trans" data-en="Target Sector" data-th="ประเภทธุรกิจ / อุตสาหกรรม">Target Sector</label>
                                <select name="industry" class="form-select" required>
                                    <option value="Manufacturing & Industrial">Manufacturing & Industrial (โรงงานและการผลิต)</option>
                                    <option value="Automotive & EV Parts">Automotive & EV Parts (ยานยนต์และชิ้นส่วน EV)</option>
                                    <option value="Electronics & Electrical">Electronics & Electrical (อิเล็กทรอนิกส์และเครื่องใช้ไฟฟ้า)</option>
                                    <option value="Food Processing & Agriculture">Food Processing & Agriculture (แปรรูปอาหารและการเกษตร)</option>
                                    <option value="Trading & Distribution">Trading & Distribution (การค้า นำเข้า-ส่งออก และการกระจายสินค้า)</option>
                                    <option value="Retail & Supermarkets">Retail & Supermarkets (ค้าปลีกและซูเปอร์มาร์เก็ต)</option>
                                    <option value="Logistics & Warehousing">Logistics & Warehousing (โลจิสติกส์และคลังสินค้า)</option>
                                    <option value="Tourism & Hospitality">Tourism & Hospitality (การท่องเที่ยวและการโรงแรม)</option>
                                    <option value="Other Industry">Other Industry (กลุ่มธุรกิจอื่นๆ)</option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-th-primary w-100 justify-content-center">
                                <i class="fa-solid fa-paper-plane me-2"></i>
                                <span class="th-trans" data-en="Schedule Free Consultation" data-th="ส่งข้อมูลเพื่อนัดหมายสาธิต">Schedule Free Consultation</span>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 2. SIX CORE THAILAND VALUE PILLARS -->
    <section class="th-section bg-light-th">
        <div class="container">
            <div class="text-center">
                <span class="section-badge-th th-trans" data-en="Strategic Framework" data-th="เสาหลักทางยุทธศาสตร์">Strategic Framework</span>
                <h2 class="section-title-th th-trans"
                    data-en="Built for Thailand's Manufacturing & Export Leadership"
                    data-ar="Engineered for Thai Industrial Powerhouses"
                    data-th="ออกแบบมาเพื่อความเป็นผู้นำด้านการผลิตและการส่งออกของไทย">
                    Built for Thailand's Manufacturing & Export Leadership
                </h2>
                <p class="section-sub-th th-trans"
                    data-en="Connecting factory shop floors, automotive supply chains, agro-commodities, 7% VAT, and e-Tax readiness."
                    data-th="เชื่อมต่อระบบสายการผลิต ซัพพลายเชนยานยนต์ สินค้าเกษตรแปรรูป ภาษีมูลค่าเพิ่ม 7% และใบกำกับภาษีอิเล็กทรอนิกส์:">
                    Connecting factory shop floors, automotive supply chains, agro-commodities, 7% VAT, and e-Tax readiness.
                </p>
            </div>

            <div class="row g-4">
                <div class="col-lg-4 col-md-6">
                    <div class="th-card">
                        <div class="th-card-icon"><i class="fa-solid fa-industry"></i></div>
                        <h4 class="th-trans" data-en="Manufacturing & Shop Floor" data-th="การผลิตและสายการประกอบ">Manufacturing & Shop Floor</h4>
                        <p class="th-trans" 
                            data-en="Multi-level Bill of Materials (BOM), raw material tracking, machine output logs, scrap management, and unit production costing."
                            data-th="สูตรการผลิตหลายระดับ (BOM) การติดตามวัตถุดิบ บันทึกผลผลิตรายเครื่องจักร การจัดการของเสีย และการคำนวณต้นทุนการผลิต">
                            Multi-level Bill of Materials (BOM), raw material tracking, machine output logs, scrap management, and unit production costing.
                        </p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="th-card">
                        <div class="th-card-icon"><i class="fa-solid fa-car"></i></div>
                        <h4 class="th-trans" data-en="Automotive, EV & Electronics" data-th="ยานยนต์ ชิ้นส่วน EV และอิเล็กทรอนิกส์">Automotive, EV & Electronics</h4>
                        <p class="th-trans" 
                            data-en="OEM part interchange, battery & PCB component tracking, batch traceability, quality control signoffs, and tiered supply chain orders."
                            data-th="การจัดการหมายเลขชิ้นส่วน OEM แบตเตอรี่ ชิ้นส่วน PCB การตรวจสอบย้อนกลับแบบล็อต และการควบคุมคุณภาพ">
                            OEM part interchange, battery & PCB component tracking, batch traceability, quality control signoffs, and tiered supply chain orders.
                        </p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="th-card">
                        <div class="th-card-icon"><i class="fa-solid fa-bowl-rice"></i></div>
                        <h4 class="th-trans" data-en="Agro-Processing, Rice & Rubber" data-th="แปรรูปอาหาร ข้าว และยางพารา">Agro-Processing, Rice & Rubber</h4>
                        <p class="th-trans" 
                            data-en="Raw ingredient recipe management, perishable cold chain tracking, rice mill batches, and rubber sheet processing records."
                            data-th="การจัดการสูตรอาหาร คลังสินค้าควบคุมอุณหภูมิ การแปรรูปโรงสีข้าว และการบันทึกการผลิตผลิตภัณฑ์ยางพารา">
                            Raw ingredient recipe management, perishable cold chain tracking, rice mill batches, and rubber sheet processing records.
                        </p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="th-card">
                        <div class="th-card-icon"><i class="fa-solid fa-file-invoice-dollar"></i></div>
                        <h4 class="th-trans" data-en="Thailand 7% VAT & Tax Ledgers" data-th="ภาษีมูลค่าเพิ่ม 7% และรายงานภาษี">Thailand 7% VAT & Tax Ledgers</h4>
                        <p class="th-trans" 
                            data-en="Standard 7% VAT calculation, customer/vendor 13-digit Tax ID validation, zero-rated export workflows, and monthly purchase/sales tax books."
                            data-th="คำนวณภาษีมูลค่าเพิ่ม 7% ตรวจสอบเลขประจำตัวผู้เสียภาษี 13 หลัก การส่งออกอัตรา 0% และรายงานภาษีซื้อ-ภาษีขาย">
                            Standard 7% VAT calculation, customer/vendor 13-digit Tax ID validation, zero-rated export workflows, and monthly purchase/sales tax books.
                        </p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="th-card">
                        <div class="th-card-icon"><i class="fa-solid fa-qrcode"></i></div>
                        <h4 class="th-trans" data-en="e-Tax Invoice & e-Receipt Ready" data-th="พร้อมรองรับ e-Tax Invoice และ e-Receipt">e-Tax Invoice & e-Receipt Ready</h4>
                        <p class="th-trans" 
                            data-en="Structured electronic data formats, digital receipt generation, prompt pay QR codes, and tamper-evident audit records."
                            data-th="โครงสร้างข้อมูลดิจิทัลตามมาตรฐาน การสร้างใบกำกับภาษีอิเล็กทรอนิกส์ รหัสพร้อมเพย์ QR และบันทึกการตรวจสอบ">
                            Structured electronic data formats, digital receipt generation, prompt pay QR codes, and tamper-evident audit records.
                        </p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="th-card">
                        <div class="th-card-icon"><i class="fa-solid fa-language"></i></div>
                        <h4 class="th-trans" data-en="Bilingual Thai & English" data-th="รองรับ 2 ภาษา (ไทยและอังกฤษ)">Bilingual Thai & English</h4>
                        <p class="th-trans" 
                            data-en="Complete bilingual capability, Thai tax invoice printing, dual-language product and customer master records, and multi-currency ledgers."
                            data-th="ระบบรองรับภาษาไทยและภาษาอังกฤษอย่างสมบูรณ์ พิมพ์เอกสารภาษาไทย บันทึกข้อมูลคู่ค้า 2 ภาษา และรองรับหลายสกุลเงิน">
                            Complete bilingual capability, Thai tax invoice printing, dual-language product and customer master records, and multi-currency ledgers.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 3. THAILAND 7% VAT & E-TAX SECTION -->
    <section class="th-section bg-white">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <span class="section-badge-th th-trans" data-en="Revenue Department Compliance" data-th="การปฏิบัติตามข้อกำหนดกรมสรรพากร">Revenue Department Compliance</span>
                    <h2 class="section-title-th th-trans"
                        data-en="Thailand 7% VAT Management & e-Tax Invoice Readiness"
                        data-th="การจัดการภาษีมูลค่าเพิ่ม 7% และความพร้อมสำหรับ e-Tax Invoice">
                        Thailand 7% VAT Management & e-Tax Invoice Readiness
                    </h2>
                    <p class="text-muted th-trans" style="line-height: 1.8; font-size: 15px;"
                        data-en="Manage sales, purchases, expenses, customer transactions, and financial records through a centralized accounting environment designed for Thailand business workflows. Support standard 7% VAT calculations, input/output tax reconciliations, and structured electronic invoicing."
                        data-th="จัดการการขาย การจัดซื้อ ค่าใช้จ่าย ธุรกรรมลูกค้า และบันทึกทางการเงินผ่านระบบบัญชีที่ออกแบบมาเพื่อธุรกิจในไทยโดยเฉพาะ รองรับการคำนวณ VAT 7% ภาษีซื้อ-ภาษีขาย และการจัดทำใบกำกับภาษีอิเล็กทรอนิกส์">
                        Manage sales, purchases, expenses, customer transactions, and financial records through a centralized accounting environment designed for Thailand business workflows. Support standard 7% VAT calculations, input/output tax reconciliations, and structured electronic invoicing.
                    </p>

                    <div class="p-3 mb-3 bg-light-th rounded-3 border-start border-4 border-danger shadow-sm">
                        <p class="mb-0 small text-muted th-trans"
                            data-en="<strong class='text-dark'>Standard 7% VAT Engine:</strong> Automated application of reduced 7% rate (confirmed through Sept 2027), Head Office/Branch Tax IDs, zero-rated exports, and monthly P.P.30 summaries."
                            data-th="<strong class='text-dark'>ระบบคำนวณ VAT 7%:</strong> คำนวณอัตรา 7% อัตโนมัติ รองรับสาขา/สำนักงานใหญ่ เลขประจำตัวผู้เสียภาษี 13 หลัก การส่งออก 0% และรายงาน ภ.พ.30">
                            <strong class="text-dark">Standard 7% VAT Engine:</strong> Automated application of reduced 7% rate (confirmed through Sept 2027), Head Office/Branch Tax IDs, zero-rated exports, and monthly P.P.30 summaries.
                        </p>
                    </div>

                    <div class="p-3 bg-light-th rounded-3 border-start border-4 border-primary shadow-sm">
                        <p class="mb-0 small text-muted th-trans"
                            data-en="<strong class='text-dark'>e-Tax & e-Receipt Architecture:</strong> Maintain structured digital invoice records, electronic credit/debit notes, cryptographic hashes, and immutable audit logs."
                            data-th="<strong class='text-dark'>โครงสร้าง e-Tax และ e-Receipt:</strong> บันทึกข้อมูลใบกำกับภาษีอิเล็กทรอนิกส์ ใบลดหนี้/ใบเพิ่มหนี้ และประวัติการทำรายการที่แก้ไขไม่ได้เพื่อการตรวจสอบ">
                            <strong class="text-dark">e-Tax & e-Receipt Architecture:</strong> Maintain structured digital invoice records, electronic credit/debit notes, cryptographic hashes, and immutable audit logs.
                        </p>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="row g-3">
                        <div class="col-sm-6">
                            <div class="p-4 bg-light-th rounded-3 border h-100 shadow-sm">
                                <i class="fa-solid fa-calculator text-danger fs-3 mb-3"></i>
                                <h5 class="fw-bold th-trans" data-en="7% VAT Automation" data-th="คำนวณภาษีมูลค่าเพิ่ม 7%">7% VAT Automation</h5>
                                <p class="small text-muted mb-0 th-trans"
                                    data-en="Line-item tax computation, withholding tax (WHT) records, and net payable summaries."
                                    data-th="คำนวณภาษีต่อรายการ บันทึกภาษีหัก ณ ที่จ่าย และสรุปยอดชำระสุทธิ">
                                    Line-item tax computation, withholding tax (WHT) records, and net payable summaries.
                                </p>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="p-4 bg-light-th rounded-3 border h-100 shadow-sm">
                                <i class="fa-solid fa-file-invoice text-danger fs-3 mb-3"></i>
                                <h5 class="fw-bold th-trans" data-en="Bilingual Tax Invoices" data-th="ใบกำกับภาษี 2 ภาษา">Bilingual Tax Invoices</h5>
                                <p class="small text-muted mb-0 th-trans"
                                    data-en="Print standard A4 and POS receipts with Thai headers, 13-digit Tax ID, and PromptPay QR."
                                    data-th="พิมพ์ใบกำกับภาษี/ใบเสร็จรับเงินภาษาไทย-อังกฤษ พร้อมเลขผู้เสียภาษีและ PromptPay QR">
                                    Print standard A4 and POS receipts with Thai headers, 13-digit Tax ID, and PromptPay QR.
                                </p>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="p-4 bg-light-th rounded-3 border h-100 shadow-sm">
                                <i class="fa-solid fa-book-bookmark text-danger fs-3 mb-3"></i>
                                <h5 class="fw-bold th-trans" data-en="Tax Sales & Purchase Books" data-th="รายงานภาษีซื้อ-ภาษีขาย">Tax Sales & Purchase Books</h5>
                                <p class="small text-muted mb-0 th-trans"
                                    data-en="Organized monthly sales registers and purchase books ready for corporate tax accountants and auditors."
                                    data-th="สมุดรายงานภาษีซื้อและภาษีขายรายเดือน พร้อมสำหรับการยื่นแบบและตรวจสอบบัญชี">
                                    Organized monthly sales registers and purchase books ready for corporate tax accountants and auditors.
                                </p>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="p-4 bg-light-th rounded-3 border h-100 shadow-sm">
                                <i class="fa-solid fa-shield-halved text-danger fs-3 mb-3"></i>
                                <h5 class="fw-bold th-trans" data-en="Audit Trails & Security" data-th="ระบบความปลอดภัยและตรวจสอบ">Audit Trails & Security</h5>
                                <p class="small text-muted mb-0 th-trans"
                                    data-en="Sequential invoice numbering, timestamped user logs, and immutable financial history."
                                    data-th="ระบบรันเลขที่เอกสารต่อเนื่อง บันทึกเวลาผู้ใช้งาน และประวัติทางบัญชีที่ปลอดภัย">
                                    Sequential invoice numbering, timestamped user logs, and immutable financial history.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 4. 25+ THAILAND INDUSTRY VERTICALS GRID -->
    <section class="th-section bg-light-th" id="thailand-verticals">
        <div class="container">
            <div class="text-center">
                <span class="section-badge-th th-trans" data-en="Industry Solutions" data-th="โซลูชันตามกลุ่มอุตสาหกรรม">Industry Solutions</span>
                <h2 class="section-title-th th-trans"
                    data-en="Explore 25+ Dedicated Thailand ERP Verticals"
                    data-th="สำรวจโซลูชัน ERP เฉพาะทางกว่า 25 กลุ่มธุรกิจในประเทศไทย">
                    Explore 25+ Dedicated Thailand ERP Verticals
                </h2>
                <p class="section-sub-th th-trans"
                    data-en="Custom operational workflows, BOM formulas, and compliance templates engineered for Thailand's core sectors."
                    data-th="ระบบการทำงานเฉพาะทาง สูตรการผลิต และแบบฟอร์มที่ออกแบบมาเพื่อธุรกิจในไทยโดยเฉพาะ:">
                    Custom operational workflows, BOM formulas, and compliance templates engineered for Thailand's core sectors.
                </p>
            </div>

            <div class="row g-4">
                <!-- 1. Manufacturing ERP -->
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <a href="manufacturing-erp-software-thailand.php" class="th-vertical-card">
                        <div class="th-vertical-icon"><i class="fa-solid fa-industry"></i></div>
                        <h5 class="th-trans" data-en="Manufacturing ERP" data-th="ERP โรงงานอุตสาหกรรม">Manufacturing ERP</h5>
                        <p class="th-trans" data-en="BOM, raw materials, WIP shop floor, machine output, and unit costing." data-th="สูตรการผลิต วัตถุดิบ ขั้นตอน WIP ผลผลิตเครื่องจักร และต้นทุน">BOM, raw materials, WIP shop floor, machine output, and unit costing.</p>
                        <span class="th-vertical-link"><span class="th-trans" data-en="View Solution" data-th="ดูรายละเอียด">View Solution</span> <i class="fa-solid fa-arrow-right"></i></span>
                    </a>
                </div>

                <!-- 2. Automotive ERP -->
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <a href="automotive-erp-software-thailand.php" class="th-vertical-card">
                        <div class="th-vertical-icon"><i class="fa-solid fa-car"></i></div>
                        <h5 class="th-trans" data-en="Automotive & Parts" data-th="ERP ยานยนต์และชิ้นส่วน">Automotive & Parts</h5>
                        <p class="th-trans" data-en="OEM part numbers, tier 1/2 supplier tracking, and assembly lines." data-th="หมายเลขชิ้นส่วน OEM การจัดการซัพพลายเออร์ และสายการประกอบ">OEM part numbers, tier 1/2 supplier tracking, and assembly lines.</p>
                        <span class="th-vertical-link"><span class="th-trans" data-en="View Solution" data-th="ดูรายละเอียด">View Solution</span> <i class="fa-solid fa-arrow-right"></i></span>
                    </a>
                </div>

                <!-- 3. EV ERP -->
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <a href="ev-erp-software-thailand.php" class="th-vertical-card">
                        <div class="th-vertical-icon"><i class="fa-solid fa-bolt"></i></div>
                        <h5 class="th-trans" data-en="EV & Electric Mobility" data-th="ERP ยานยนต์ไฟฟ้า (EV)">EV & Electric Mobility</h5>
                        <p class="th-trans" data-en="Battery cell tracking, charging equipment, electrical parts, and QC." data-th="การติดตามแบตเตอรี่ อุปกรณ์ชาร์จ และการควบคุมคุณภาพชิ้นส่วน">Battery cell tracking, charging equipment, electrical parts, and QC.</p>
                        <span class="th-vertical-link"><span class="th-trans" data-en="View Solution" data-th="ดูรายละเอียด">View Solution</span> <i class="fa-solid fa-arrow-right"></i></span>
                    </a>
                </div>

                <!-- 4. Electronics ERP -->
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <a href="electronics-erp-software-thailand.php" class="th-vertical-card">
                        <div class="th-vertical-icon"><i class="fa-solid fa-microchip"></i></div>
                        <h5 class="th-trans" data-en="Electronics & Electrical" data-th="ERP อิเล็กทรอนิกส์และเครื่องใช้ไฟฟ้า">Electronics & Electrical</h5>
                        <p class="th-trans" data-en="PCB components, appliance assembly, clean room batches, and testing." data-th="ชิ้นส่วนแผงวงจร PCB การประกอบเครื่องใช้ไฟฟ้า และการทดสอบ">PCB components, appliance assembly, clean room batches, and testing.</p>
                        <span class="th-vertical-link"><span class="th-trans" data-en="View Solution" data-th="ดูรายละเอียด">View Solution</span> <i class="fa-solid fa-arrow-right"></i></span>
                    </a>
                </div>

                <!-- 5. Food Processing ERP -->
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <a href="food-processing-erp-software-thailand.php" class="th-vertical-card">
                        <div class="th-vertical-icon"><i class="fa-solid fa-utensils"></i></div>
                        <h5 class="th-trans" data-en="Food Processing ERP" data-th="ERP โรงงานแปรรูปอาหาร">Food Processing ERP</h5>
                        <p class="th-trans" data-en="Recipe formulation, batch yield, cold storage, and export compliance." data-th="สูตรผสมอาหาร การแปรรูป คลังสินค้าห้องเย็น และมาตรฐานส่งออก">Recipe formulation, batch yield, cold storage, and export compliance.</p>
                        <span class="th-vertical-link"><span class="th-trans" data-en="View Solution" data-th="ดูรายละเอียด">View Solution</span> <i class="fa-solid fa-arrow-right"></i></span>
                    </a>
                </div>

                <!-- 6. Agriculture ERP -->
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <a href="agriculture-erp-software-thailand.php" class="th-vertical-card">
                        <div class="th-vertical-icon"><i class="fa-solid fa-seedling"></i></div>
                        <h5 class="th-trans" data-en="Agriculture & Cooperatives" data-th="ERP การเกษตรและสหกรณ์">Agriculture & Cooperatives</h5>
                        <p class="th-trans" data-en="Farm produce, fertilizer distribution, crop seasons, and agri-trading." data-th="ผลผลิตการเกษตร ปุ๋ยและสารเคมี รอบการเพาะปลูก และสหกรณ์">Farm produce, fertilizer distribution, crop seasons, and agri-trading.</p>
                        <span class="th-vertical-link"><span class="th-trans" data-en="View Solution" data-th="ดูรายละเอียด">View Solution</span> <i class="fa-solid fa-arrow-right"></i></span>
                    </a>
                </div>

                <!-- 7. Rice Trading ERP -->
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <a href="rice-trading-erp-software-thailand.php" class="th-vertical-card">
                        <div class="th-vertical-icon"><i class="fa-solid fa-bowl-rice"></i></div>
                        <h5 class="th-trans" data-en="Rice Trading & Mills" data-th="ERP โรงสีและการค้าข้าว">Rice Trading & Mills</h5>
                        <p class="th-trans" data-en="Paddy purchasing, milling batches, export bagging, and silo inventory." data-th="การรับซื้อข้าวเปลือก การสีข้าว การบรรจุกระสอบส่งออก และคลังไซโล">Paddy purchasing, milling batches, export bagging, and silo inventory.</p>
                        <span class="th-vertical-link"><span class="th-trans" data-en="View Solution" data-th="ดูรายละเอียด">View Solution</span> <i class="fa-solid fa-arrow-right"></i></span>
                    </a>
                </div>

                <!-- 8. Rubber ERP -->
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <a href="rubber-erp-software-thailand.php" class="th-vertical-card">
                        <div class="th-vertical-icon"><i class="fa-solid fa-tree"></i></div>
                        <h5 class="th-trans" data-en="Rubber Industry ERP" data-th="ERP อุตสาหกรรมยางพารา">Rubber Industry ERP</h5>
                        <p class="th-trans" data-en="Latex collection, ribbed smoked sheets, glove manufacturing, and export." data-th="การรับน้ำยาง ยางแผ่นรมควัน การผลิตถุงมือยาง และการส่งออก">Latex collection, ribbed smoked sheets, glove manufacturing, and export.</p>
                        <span class="th-vertical-link"><span class="th-trans" data-en="View Solution" data-th="ดูรายละเอียด">View Solution</span> <i class="fa-solid fa-arrow-right"></i></span>
                    </a>
                </div>

                <!-- 9. Garment & Textile ERP -->
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <a href="garment-erp-software-thailand.php" class="th-vertical-card">
                        <div class="th-vertical-icon"><i class="fa-solid fa-shirt"></i></div>
                        <h5 class="th-trans" data-en="Garment & Textile ERP" data-th="ERP เสื้อผ้าและสิ่งทอ">Garment & Textile ERP</h5>
                        <p class="th-trans" data-en="Fabric rolls, cutting, sewing lines, size/color matrix, and export packing." data-th="ม้วนผ้า แผนกตัด แผนกเย็บ ตารางขนาด/สี และการแพ็คส่งออก">Fabric rolls, cutting, sewing lines, size/color matrix, and export packing.</p>
                        <span class="th-vertical-link"><span class="th-trans" data-en="View Solution" data-th="ดูรายละเอียด">View Solution</span> <i class="fa-solid fa-arrow-right"></i></span>
                    </a>
                </div>

                <!-- 10. Trading ERP -->
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <a href="trading-erp-software-thailand.php" class="th-vertical-card">
                        <div class="th-vertical-icon"><i class="fa-solid fa-boxes-packing"></i></div>
                        <h5 class="th-trans" data-en="Trading ERP" data-th="ERP การค้าและนำเข้า-ส่งออก">Trading ERP</h5>
                        <p class="th-trans" data-en="General trading, multi-currency purchasing, customer credit, and P&L." data-th="การค้าทั่วไป นำเข้า-ส่งออก วงเงินเครดิต และกำไรขาดทุน">General trading, multi-currency purchasing, customer credit, and P&L.</p>
                        <span class="th-vertical-link"><span class="th-trans" data-en="View Solution" data-th="ดูรายละเอียด">View Solution</span> <i class="fa-solid fa-arrow-right"></i></span>
                    </a>
                </div>

                <!-- 11. Distribution ERP -->
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <a href="distribution-erp-software-thailand.php" class="th-vertical-card">
                        <div class="th-vertical-icon"><i class="fa-solid fa-truck-ramp-box"></i></div>
                        <h5 class="th-trans" data-en="Distribution ERP" data-th="ERP การกระจายสินค้า">Distribution ERP</h5>
                        <p class="th-trans" data-en="Multi-warehouse stock, van route delivery, and retail credit control." data-th="คลังสินค้าหลายสาขา หน่วยรถกระจายสินค้า และการควบคุมเครดิต">Multi-warehouse stock, van route delivery, and retail credit control.</p>
                        <span class="th-vertical-link"><span class="th-trans" data-en="View Solution" data-th="ดูรายละเอียด">View Solution</span> <i class="fa-solid fa-arrow-right"></i></span>
                    </a>
                </div>

                <!-- 12. Retail & Supermarket -->
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <a href="retail-erp-software-thailand.php" class="th-vertical-card">
                        <div class="th-vertical-icon"><i class="fa-solid fa-cart-shopping"></i></div>
                        <h5 class="th-trans" data-en="Retail & POS Software" data-th="ERP ค้าปลีกและหน้าร้าน POS">Retail & POS Software</h5>
                        <p class="th-trans" data-en="Barcode billing, mall outlet sync, customer loyalty, and PromptPay." data-th="ระบบสแกนบาร์โค้ด หน้าร้านสาขา ระบบสมาชิก และพร้อมเพย์">Barcode billing, mall outlet sync, customer loyalty, and PromptPay.</p>
                        <span class="th-vertical-link"><span class="th-trans" data-en="View Solution" data-th="ดูรายละเอียด">View Solution</span> <i class="fa-solid fa-arrow-right"></i></span>
                    </a>
                </div>

                <!-- 13. Tourism & Hospitality -->
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <a href="tourism-erp-software-thailand.php" class="th-vertical-card">
                        <div class="th-vertical-icon"><i class="fa-solid fa-hotel"></i></div>
                        <h5 class="th-trans" data-en="Tourism & Hospitality" data-th="ERP การท่องเที่ยวและการโรงแรม">Tourism & Hospitality</h5>
                        <p class="th-trans" data-en="Resorts, boutique hotels, restaurants, guest billing, and staff payroll." data-th="รีสอร์ท โรงแรม ร้านอาหาร การเรียกเก็บเงิน และเงินเดือนพนักงาน">Resorts, boutique hotels, restaurants, guest billing, and staff payroll.</p>
                        <span class="th-vertical-link"><span class="th-trans" data-en="View Solution" data-th="ดูรายละเอียด">View Solution</span> <i class="fa-solid fa-arrow-right"></i></span>
                    </a>
                </div>

                <!-- 14. Travel Agency ERP -->
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <a href="travel-agency-erp-software-thailand.php" class="th-vertical-card">
                        <div class="th-vertical-icon"><i class="fa-solid fa-plane-departure"></i></div>
                        <h5 class="th-trans" data-en="Travel Agency ERP" data-th="ERP ตัวแทนท่องเที่ยว">Travel Agency ERP</h5>
                        <p class="th-trans" data-en="Tour packages, transport vouchers, client quotes, and supplier payments." data-th="แพ็กเกจทัวร์ การจองยานพาหนะ ใบเสนอราคา และการจ่ายผู้ให้บริการ">Tour packages, transport vouchers, client quotes, and supplier payments.</p>
                        <span class="th-vertical-link"><span class="th-trans" data-en="View Solution" data-th="ดูรายละเอียด">View Solution</span> <i class="fa-solid fa-arrow-right"></i></span>
                    </a>
                </div>

                <!-- 15. Logistics ERP -->
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <a href="logistics-erp-software-thailand.php" class="th-vertical-card">
                        <div class="th-vertical-icon"><i class="fa-solid fa-truck-fast"></i></div>
                        <h5 class="th-trans" data-en="Logistics & Fleet ERP" data-th="ERP โลจิสติกส์และยานพาหนะ">Logistics & Fleet ERP</h5>
                        <p class="th-trans" data-en="Fleet tracking, driver trips, fuel logs, delivery waybills, and freight billing." data-th="การจัดการยานพาหนะ บันทึกคนขับ ค่าน้ำมัน ใบส่งของ และค่าขนส่ง">Fleet tracking, driver trips, fuel logs, delivery waybills, and freight billing.</p>
                        <span class="th-vertical-link"><span class="th-trans" data-en="View Solution" data-th="ดูรายละเอียด">View Solution</span> <i class="fa-solid fa-arrow-right"></i></span>
                    </a>
                </div>

                <!-- 16. Chemical & Petrochemical -->
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <a href="chemical-erp-software-thailand.php" class="th-vertical-card">
                        <div class="th-vertical-icon"><i class="fa-solid fa-flask-vial"></i></div>
                        <h5 class="th-trans" data-en="Chemical & Petrochemical" data-th="ERP เคมีภัณฑ์และปิโตรเคมี">Chemical & Petrochemical</h5>
                        <p class="th-trans" data-en="Bulk liquid storage, hazard safety sheets, polymer recipes, and batch logs." data-th="คลังสารเคมีเหลว เอกสารความปลอดภัย สูตรโพลิเมอร์ และล็อตการผลิต">Bulk liquid storage, hazard safety sheets, polymer recipes, and batch logs.</p>
                        <span class="th-vertical-link"><span class="th-trans" data-en="View Solution" data-th="ดูรายละเอียด">View Solution</span> <i class="fa-solid fa-arrow-right"></i></span>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- 5. STRATEGIC ECONOMIC HUBS -->
    <section class="th-section bg-dark-th">
        <div class="container">
            <div class="text-center">
                <span class="section-badge-th-dark th-trans" data-en="Regional Industrial Footprint" data-th="ศูนย์กลางอุตสาหกรรมและภูมิภาค">Regional Industrial Footprint</span>
                <h2 class="section-title-th-dark th-trans"
                    data-en="Serving Industrial Hubs & Commercial Centers Across Thailand"
                    data-th="ครอบคลุมศูนย์กลางเศรษฐกิจและนิคมอุตสาหกรรมทั่วไทย">
                    Serving Industrial Hubs & Commercial Centers Across Thailand
                </h2>
                <p class="section-sub-th text-white-50 th-trans"
                    data-en="Connecting Bangkok headquarters, Eastern Economic Corridor (EEC) factories, Chiang Mai tourism, and Phuket hospitality."
                    data-th="เชื่อมต่อสำนักงานใหญ่ในกรุงเทพฯ โรงงานในเขต EEC ธุรกิจท่องเที่ยวเชียงใหม่และภูเก็ต:">
                    Connecting Bangkok headquarters, Eastern Economic Corridor (EEC) factories, Chiang Mai tourism, and Phuket hospitality.
                </p>
            </div>

            <div class="d-flex flex-wrap justify-content-center gap-3 mb-4">
                <a href="erp-software-bangkok.php" class="city-pill-th">
                    <i class="fa-solid fa-city text-danger"></i>
                    <div>
                        <div class="fw-bold">Bangkok (กรุงเทพมหานคร)</div>
                        <small class="text-muted th-trans" data-en="Commercial HQ & Trading" data-th="ศูนย์กลางการค้าและสำนักงานใหญ่">Commercial HQ & Trading</small>
                    </div>
                </a>
                <a href="erp-software-chonburi.php" class="city-pill-th">
                    <i class="fa-solid fa-industry text-danger"></i>
                    <div>
                        <div class="fw-bold">Chonburi EEC (ชลบุรี)</div>
                        <small class="text-muted th-trans" data-en="Automotive & Electronics Hub" data-th="นิคมอุตสาหกรรมยานยนต์และอิเล็กทรอนิกส์">Automotive & Electronics Hub</small>
                    </div>
                </a>
                <a href="erp-software-rayong.php" class="city-pill-th">
                    <i class="fa-solid fa-flask text-danger"></i>
                    <div>
                        <div class="fw-bold">Rayong (ระยอง)</div>
                        <small class="text-muted th-trans" data-en="Petrochemicals & Heavy Industry" data-th="ปิโตรเคมีและอุตสาหกรรมหนัก">Petrochemicals & Heavy Industry</small>
                    </div>
                </a>
                <a href="erp-software-chiang-mai.php" class="city-pill-th">
                    <i class="fa-solid fa-mountain text-danger"></i>
                    <div>
                        <div class="fw-bold">Chiang Mai (เชียงใหม่)</div>
                        <small class="text-muted th-trans" data-en="Tourism, Agro & Craft Retail" data-th="ท่องเที่ยว เกษตร และหัตถกรรม">Tourism, Agro & Craft Retail</small>
                    </div>
                </a>
                <a href="erp-software-phuket.php" class="city-pill-th">
                    <i class="fa-solid fa-umbrella-beach text-danger"></i>
                    <div>
                        <div class="fw-bold">Phuket (ภูเก็ต)</div>
                        <small class="text-muted th-trans" data-en="Hospitality, Resorts & Marine" data-th="โรงแรม รีสอร์ท และบริการทางทะเล">Hospitality, Resorts & Marine</small>
                    </div>
                </a>
            </div>
        </div>
    </section>

    <!-- 6. FREQUENTLY ASKED QUESTIONS -->
    <section class="th-section bg-light-th">
        <div class="container" style="max-width: 960px;">
            <div class="text-center">
                <span class="section-badge-th th-trans" data-en="Thailand FAQs" data-th="คำถามที่พบบ่อย">Thailand FAQs</span>
                <h2 class="section-title-th th-trans"
                    data-en="Frequently Asked Questions About Thailand ERP"
                    data-th="คำถามที่พบบ่อยเกี่ยวกับระบบ ERP ในประเทศไทย">
                    Frequently Asked Questions About Thailand ERP
                </h2>
                <p class="section-sub-th th-trans"
                    data-en="Key insights into implementing Digify ERP for manufacturing, trading, and compliance in Thailand."
                    data-th="ข้อควรรู้เกี่ยวกับการติดตั้งใช้งานระบบ ERP สำหรับโรงงานและการค้าในไทย:">
                    Key insights into implementing Digify ERP for manufacturing, trading, and compliance in Thailand.
                </p>
            </div>

            <div class="accordion accordion-th" id="thailandFaqAccordion">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="faqTH1">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faqTC1">
                            <span class="th-trans" data-en="What is ERP software in Thailand?" data-th="โปรแกรม ERP ในประเทศไทยคืออะไร?">What is ERP software in Thailand?</span>
                        </button>
                    </h2>
                    <div id="faqTC1" class="accordion-collapse collapse show" data-bs-parent="#thailandFaqAccordion">
                        <div class="accordion-body th-trans"
                            data-en="ERP software in Thailand is a centralized business management platform connecting manufacturing production, BOM, sales, purchasing, inventory, CRM, HR, and accounting into one unified system."
                            data-th="โปรแกรม ERP ในประเทศไทยคือแพลตฟอร์มบริหารจัดการธุรกิจที่เชื่อมต่อกระบวนการผลิต สูตรการผลิต (BOM) การขาย การจัดซื้อ คลังสินค้า ลูกค้าสัมพันธ์ และบัญชีเข้าด้วยกันอย่างสมบูรณ์">
                            ERP software in Thailand is a centralized business management platform connecting manufacturing production, BOM, sales, purchasing, inventory, CRM, HR, and accounting into one unified system.
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header" id="faqTH2">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqTC2">
                            <span class="th-trans" data-en="Can manufacturing plants manage multi-level BOM and raw materials?" data-th="โรงงานสามารถจัดการสูตรการผลิต (BOM) และวัตถุดิบได้หรือไม่?">Can manufacturing plants manage multi-level BOM and raw materials?</span>
                        </button>
                    </h2>
                    <div id="faqTC2" class="accordion-collapse collapse" data-bs-parent="#thailandFaqAccordion">
                        <div class="accordion-body th-trans"
                            data-en="Yes. Digify enables complex multi-level Bill of Materials (BOM), shop floor work-in-progress (WIP) tracking, machine output logs, scrap tracking, and actual unit costing."
                            data-th="ได้ ระบบรองรับสูตรการผลิต (BOM) หลายระดับ การติดตามขั้นตอนงานระหว่างทำ (WIP) บันทึกผลผลิตรายเครื่องจักร การจัดการของเสีย และการคำนวณต้นทุนจริง">
                            Yes. Digify enables complex multi-level Bill of Materials (BOM), shop floor work-in-progress (WIP) tracking, machine output logs, scrap tracking, and actual unit costing.
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header" id="faqTH3">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqTC3">
                            <span class="th-trans" data-en="How does Digify support Thailand 7% VAT & e-Tax Invoice workflows?" data-th="ระบบรองรับภาษีมูลค่าเพิ่ม 7% และ e-Tax Invoice อย่างไร?">How does Digify support Thailand 7% VAT & e-Tax Invoice workflows?</span>
                        </button>
                    </h2>
                    <div id="faqTC3" class="accordion-collapse collapse" data-bs-parent="#thailandFaqAccordion">
                        <div class="accordion-body th-trans"
                            data-en="Digify applies standard 7% VAT, records customer 13-digit Tax ID numbers, tracks zero-rated exports, generates monthly tax purchase/sales books, and maintains structured data for e-Tax invoicing."
                            data-th="ระบบคำนวณภาษีมูลค่าเพิ่ม 7% อัตโนมัติ บันทึกเลขประจำตัวผู้เสียภาษี 13 หลัก รองรับการส่งออก 0% จัดทำรายงานภาษีซื้อ-ภาษีขาย และโครงสร้างข้อมูลสำหรับ e-Tax Invoice">
                            Digify applies standard 7% VAT, records customer 13-digit Tax ID numbers, tracks zero-rated exports, generates monthly tax purchase/sales books, and maintains structured data for e-Tax invoicing.
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header" id="faqTH4">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqTC4">
                            <span class="th-trans" data-en="Does Digify support bilingual Thai and English interfaces?" data-th="ระบบรองรับการใช้งานทั้งภาษาไทยและภาษาอังกฤษหรือไม่?">Does Digify support bilingual Thai and English interfaces?</span>
                        </button>
                    </h2>
                    <div id="faqTC4" class="accordion-collapse collapse" data-bs-parent="#thailandFaqAccordion">
                        <div class="accordion-body th-trans"
                            data-en="Yes. Digify provides full bilingual support with Thai and English interfaces, dual-language product descriptions, and official Thai tax invoice document printing."
                            data-th="ใช่ ระบบรองรับการทำงานทั้งภาษาไทยและภาษาอังกฤษอย่างเต็มรูปแบบ รวมถึงการพิมพ์ใบกำกับภาษีและเอกสารทางธุรกิจเป็นภาษาไทย">
                            Yes. Digify provides full bilingual support with Thai and English interfaces, dual-language product descriptions, and official Thai tax invoice document printing.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 7. FINAL CALL TO ACTION -->
    <section class="py-5" style="background: linear-gradient(135deg, #091a2e 0%, #1e3a5f 100%); color: #ffffff;">
        <div class="container text-center py-4">
            <h2 class="fw-bold mb-3 th-trans"
                data-en="Transform Your Thailand Business with a Modern ERP Platform"
                data-th="ยกระดับธุรกิจและโรงงานของคุณในไทยด้วยระบบ ERP ที่ทันสมัย">
                Transform Your Thailand Business with a Modern ERP Platform
            </h2>
            <p class="mx-auto mb-4 text-white-50 th-trans" style="max-width: 760px; font-size: 17px;"
                data-en="Manage Manufacturing, Automotive Parts, Agro-Processing, Sales, Inventory, Accounting, 7% VAT, and Business Operations from one centralized system."
                data-th="ควบคุมการผลิต ชิ้นส่วนยานยนต์ แปรรูปสินค้าเกษตร การขาย คลังสินค้า บัญชี และภาษีมูลค่าเพิ่ม 7% จากระบบศูนย์กลางเดียว">
                Manage Manufacturing, Automotive Parts, Agro-Processing, Sales, Inventory, Accounting, 7% VAT, and Business Operations from one centralized system.
            </p>
            <div class="d-flex justify-content-center flex-wrap gap-3">
                <button type="button" class="btn btn-danger px-4 py-3 fw-bold text-white rounded-pill" data-bs-toggle="modal" data-bs-target="#trialModal">
                    <i class="fa-solid fa-calendar-check me-2"></i> <span class="th-trans" data-en="Request a Free Thailand ERP Demo" data-th="ขอนัดหมายสาธิตระบบ ERP ฟรี">Request a Free Thailand ERP Demo</span>
                </button>
                <a href="tel:+917425016636" class="btn btn-outline-light px-4 py-3 fw-bold rounded-pill">
                    <i class="fa-solid fa-phone me-2"></i> +91 7425016636
                </a>
            </div>
        </div>
    </section>
</div>

<script>
function setThLang(lang) {
    try {
        localStorage.setItem('digify_thailand_lang', lang);
    } catch(e) {}
    
    document.querySelectorAll('.lang-pill').forEach(btn => btn.classList.remove('active'));
    if (lang === 'th') {
        const btnTh = document.getElementById('btn-lang-th');
        if (btnTh) btnTh.classList.add('active');
        document.querySelectorAll('.th-trans').forEach(el => {
            const val = el.getAttribute('data-th');
            if (val) el.innerHTML = val;
        });
        document.documentElement.lang = 'th';
        document.body.classList.add('th-font');
    } else {
        const btnEn = document.getElementById('btn-lang-en');
        if (btnEn) btnEn.classList.add('active');
        document.querySelectorAll('.th-trans').forEach(el => {
            const val = el.getAttribute('data-en');
            if (val) el.innerHTML = val;
        });
        document.documentElement.lang = 'en';
        document.body.classList.remove('th-font');
    }
}

document.addEventListener('DOMContentLoaded', function() {
    const urlParams = new URLSearchParams(window.location.search);
    const urlLang = urlParams.get('lang');
    let savedLang = 'en';
    try {
        savedLang = localStorage.getItem('digify_thailand_lang') || 'en';
    } catch(e) {}
    
    if (urlLang === 'th' || savedLang === 'th') {
        setThLang('th');
    }
});
</script>

<?php include('trial_modal.php'); ?>
<?php include(__DIR__ . '/../../footer.php'); ?>
