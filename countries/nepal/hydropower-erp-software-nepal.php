<?php 
include_once(__DIR__ . '/../../db.php');
include_once(__DIR__ . '/../../fetch_meta.php');

$pageTitle = "Hydropower & Energy ERP Software in Nepal | Project & Asset ERP";
$pageDescription = "Specialized ERP software in Nepal for hydropower projects, energy contractors, and power infrastructure companies. Manage procurement, plant equipment, spare parts, and contractor expenses.";
$pageKeywords = "Hydropower ERP Nepal, Energy project software Nepal, Hydropower procurement Kathmandu, Power plant equipment inventory Nepal, Hydro construction ERP Nepal, Turbine spare parts software Nepal";
$pageCanonical = "https://www.digifysoft.in/hydropower-erp-software-nepal";

include(__DIR__ . '/../../top.php');
include(__DIR__ . '/../../header.php');
?>

<style>
/* Nepal Vertical Suite Design System */
.npv-wrapper {
    font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
    color: #1e293b;
    overflow-x: hidden;
}

.npv-hero {
    background: linear-gradient(135deg, #090e1f 0%, #151a33 50%, #20132b 100%);
    color: #ffffff;
    padding: 70px 0 85px;
    position: relative;
    overflow: hidden;
    border-bottom: 4px solid #dc2626;
}
.npv-hero::before {
    content: '';
    position: absolute;
    top: -15%;
    right: -10%;
    width: 650px;
    height: 650px;
    background: radial-gradient(circle, rgba(220, 38, 38, 0.22) 0%, rgba(245, 158, 11, 0.12) 50%, rgba(0, 0, 0, 0) 75%);
    border-radius: 50%;
    pointer-events: none;
}
.text-gradient-npv {
    background: linear-gradient(135deg, #f87171 0%, #facc15 50%, #fb923c 100%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    display: inline-block;
}
.npv-badge {
    background: rgba(220, 38, 38, 0.18);
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
.npv-hero h1 {
    font-size: 40px;
    font-weight: 900;
    line-height: 1.25;
    margin-bottom: 18px;
    letter-spacing: -0.5px;
}
.npv-hero-desc {
    font-size: 16px;
    line-height: 1.7;
    color: rgba(255, 255, 255, 0.88);
    max-width: 700px;
    margin-bottom: 28px;
}
.npv-hero-btn {
    background: linear-gradient(135deg, #dc2626 0%, #b91c1c 100%);
    color: #ffffff;
    font-weight: 700;
    font-size: 15px;
    padding: 12px 26px;
    border-radius: 12px;
    border: none;
    transition: all 0.3s ease;
    display: inline-flex;
    align-items: center;
    gap: 8px;
    box-shadow: 0 10px 20px -5px rgba(220, 38, 38, 0.5);
    text-decoration: none;
}
.npv-hero-btn:hover {
    background: linear-gradient(135deg, #b91c1c 0%, #991b1b 100%);
    color: #ffffff;
    transform: translateY(-2px);
}
.npv-outline-btn {
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
.npv-outline-btn:hover {
    background: rgba(255, 255, 255, 0.18);
    color: #ffffff;
    transform: translateY(-2px);
}

/* Card Styles */
.npv-lead-card {
    background: #ffffff;
    border-radius: 20px;
    padding: 32px 28px;
    box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.35);
    color: #0f172a;
    border: 1px solid #e2e8f0;
}
.npv-highlight-card {
    background: #ffffff;
    border: 1px solid #e2e8f0;
    border-radius: 16px;
    padding: 24px;
    display: flex;
    gap: 18px;
    align-items: flex-start;
    height: 100%;
    transition: all 0.3s ease;
}
.npv-highlight-card:hover {
    transform: translateY(-4px);
    box-shadow: 0 15px 30px rgba(0, 0, 0, 0.08);
    border-color: #dc2626;
}
.npv-hl-icon {
    width: 52px;
    height: 52px;
    border-radius: 12px;
    background: #fef2f2;
    color: #dc2626;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 22px;
    flex-shrink: 0;
}
.npv-feature-pill {
    background: #ffffff;
    border: 1px solid #e2e8f0;
    padding: 14px 18px;
    border-radius: 12px;
    font-weight: 600;
    font-size: 14px;
    display: flex;
    align-items: center;
    height: 100%;
    box-shadow: 0 2px 5px rgba(0,0,0,0.03);
}

/* Language Toggle */
.np-lang-bar {
    display: inline-flex;
    background: rgba(255, 255, 255, 0.08);
    border: 1px solid rgba(255, 255, 255, 0.2);
    border-radius: 30px;
    padding: 4px;
    gap: 4px;
    margin-bottom: 20px;
}
.np-lang-btn {
    background: transparent;
    border: none;
    color: rgba(255, 255, 255, 0.8);
    font-size: 13px;
    font-weight: 700;
    padding: 6px 16px;
    border-radius: 20px;
    cursor: pointer;
    transition: all 0.25s ease;
}
.np-lang-btn.active {
    background: linear-gradient(135deg, #dc2626 0%, #b91c1c 100%);
    color: #ffffff;
    box-shadow: 0 4px 12px rgba(220, 38, 38, 0.4);
}
</style>

<div class="npv-wrapper">
    <!-- Hero Section -->
    <section class="npv-hero">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7 mb-4 mb-lg-0">
                    <div class="np-lang-bar">
                        <button type="button" class="np-lang-btn active" onclick="setNpLang('en')"><i class="fa-solid fa-globe me-1"></i> English</button>
                        <button type="button" class="np-lang-btn" onclick="setNpLang('np')">🇳🇵 नेपाली</button>
                    </div>
                    <br>
                    <div class="npv-badge">
                        <span>⚡ Tailored for Nepal Hydropower & Energy Infrastructure</span>
                    </div>
                    <h1 class="np-trans" data-en="Hydropower &amp; Energy Project ERP Software in Nepal" data-np="नेपालमा हाइड्रोपावर तथा ऊर्जा (Hydropower) ERP सफ्टवेयर">
                        Hydropower &amp; Energy Project ERP Software in Nepal
                    </h1>
                    <p class="npv-hero-desc np-trans" data-en="Manage capital procurement, heavy plant equipment assets, turbine spare parts inventory, on-site contractor expenses, and project financial records across Nepal’s energy sector." data-np="जलविद्युत आयोजना, हाइड्रोपावर निर्माण कम्पनी र इन्जिनियरिङ फर्महरूका लागि मेसिनरी, स्पेयर पार्ट्स, ठेकेदार बिलिङ र आयोजना बजेट व्यवस्थापन।">
                        Manage capital procurement, heavy plant equipment assets, turbine spare parts inventory, on-site contractor expenses, and project financial records across Nepal’s energy sector.
                    </p>
                    <div class="d-flex flex-wrap gap-3">
                        <a href="javascript:void(0)" class="npv-hero-btn" data-bs-toggle="modal" data-bs-target="#trialModal">
                            <i class="fa-solid fa-calendar-check"></i>
                            <span class="np-trans" data-en="Book Free Nepal Demo" data-np="निःशुल्क डेमो बुक गर्नुहोस्">Book Free Nepal Demo</span>
                        </a>
                        <a href="erp-software-nepal.php" class="npv-outline-btn">
                            <i class="fa-solid fa-arrow-left"></i>
                            <span class="np-trans" data-en="Back to Nepal Main ERP" data-np="नेपाल मुख्य ERP पृष्ठ">Back to Nepal Main ERP</span>
                        </a>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="npv-lead-card">
                        <h3 class="np-trans" data-en="Get a Free ERP Consultation" data-np="निःशुल्क परामर्श प्राप्त गर्नुहोस्">Get a Free ERP Consultation</h3>
                        <p class="np-trans" data-en="Tailored for Hydropower &amp; Energy Project ERP Software in Nepal across Nepal." data-np="नेपालभरका व्यवसायहरूका लागि अनुकूलित ERP प्रणाली।">Tailored for Hydropower &amp; Energy Project ERP Software in Nepal across Nepal.</p>
                        
                        <form action="send_mail.php" method="POST" id="nepalVerticalLeadForm">
                            <input type="hidden" name="source" value="Nepal Hydropower &amp; Energy Project ERP Software in Nepal Page">
                            <input type="hidden" name="country" value="Nepal">
                            <div class="mb-3">
                                <label class="form-label small fw-bold np-trans" data-en="Your Name" data-np="तपाईंको नाम">Your Name</label>
                                <input type="text" name="name" class="form-control" placeholder="Ram Shrestha" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label small fw-bold np-trans" data-en="Company / Business Name" data-np="कम्पनी / व्यवसायको नाम">Company / Business Name</label>
                                <input type="text" name="company_name" class="form-control" placeholder="Business Name" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label small fw-bold np-trans" data-en="WhatsApp / Mobile Number" data-np="ह्वाट्सएप / मोबाइल नम्बर">WhatsApp / Mobile Number</label>
                                <input type="tel" name="phone" class="form-control" placeholder="+977 98XXXXXXXX" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label small fw-bold np-trans" data-en="City / Location" data-np="शहर / स्थान">City / Location</label>
                                <select name="city" class="form-select" required>
                                    <option value="Kathmandu">Kathmandu (काठमाडौं)</option>
                                    <option value="Pokhara">Pokhara (पोखरा)</option>
                                    <option value="Biratnagar">Biratnagar (विराटनगर)</option>
                                    <option value="Birgunj">Birgunj (वीरगञ्ज)</option>
                                    <option value="Chitwan">Chitwan / Bharatpur (चितवन)</option>
                                    <option value="Lalitpur">Lalitpur (पाटन)</option>
                                    <option value="Bhaktapur">Bhaktapur (भक्तपुर)</option>
                                    <option value="Butwal">Butwal (बुटवल)</option>
                                    <option value="Dharan">Dharan (धरान)</option>
                                    <option value="Other Nepal City">Other Location</option>
                                </select>
                            </div>
                            <button type="submit" class="btn w-100 py-2 fw-bold text-white" style="background: linear-gradient(135deg, #dc2626 0%, #b91c1c 100%); border-radius: 10px;">
                                <i class="fa-solid fa-paper-plane me-2"></i> <span class="np-trans" data-en="Request Free Demo" data-np="निःशुल्क डेमो अनुरोध गर्नुहोस्">Request Free Demo</span>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Key Highlights -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="text-center mb-5">
                <span class="badge bg-danger text-white px-3 py-2 rounded-pill mb-2 np-trans" data-en="Industry Architecture" data-np="विशेष क्षमताहरू">Industry Architecture</span>
                <h2 class="fw-bold text-dark np-trans" data-en="Core Capabilities for Nepal Market" data-np="नेपालको बजारका लागि मुख्य सुविधाहरू">Core Capabilities for Nepal Market</h2>
                <p class="text-muted mx-auto" style="max-width: 650px;">Engineered to streamline high-volume operations, stock movements, supplier purchasing, and customer receivables.</p>
            </div>
            <div class="row">
                
                <div class="col-lg-6 mb-4">
                    <div class="npv-highlight-card">
                        <div class="npv-hl-icon"><i class="fa-solid fa-screwdriver-wrench"></i></div>
                        <div>
                            <h4 class="npv-hl-title np-trans" data-en="Turbine, Generator &amp; Heavy Plant Asset Logs">Turbine, Generator &amp; Heavy Plant Asset Logs</h4>
                            <p class="npv-hl-desc np-trans" data-en="Catalog heavy electromechanical and hydromechanical assets with maintenance schedules and serial numbers.">Catalog heavy electromechanical and hydromechanical assets with maintenance schedules and serial numbers.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mb-4">
                    <div class="npv-highlight-card">
                        <div class="npv-hl-icon"><i class="fa-solid fa-boxes-stacked"></i></div>
                        <div>
                            <h4 class="npv-hl-title np-trans" data-en="Site-Level Spare Parts &amp; Consumables Stock">Site-Level Spare Parts &amp; Consumables Stock</h4>
                            <p class="npv-hl-desc np-trans" data-en="Control inventory at powerhouse and powerhouse site stores with minimum threshold alerts for critical spares.">Control inventory at powerhouse and powerhouse site stores with minimum threshold alerts for critical spares.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mb-4">
                    <div class="npv-highlight-card">
                        <div class="npv-hl-icon"><i class="fa-solid fa-file-contract"></i></div>
                        <div>
                            <h4 class="npv-hl-title np-trans" data-en="EPC Contractor &amp; Supplier Requisitions">EPC Contractor &amp; Supplier Requisitions</h4>
                            <p class="npv-hl-desc np-trans" data-en="Organize procurement requests, contractor progress billing, advance adjustments, and retention ledgers.">Organize procurement requests, contractor progress billing, advance adjustments, and retention ledgers.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mb-4">
                    <div class="npv-highlight-card">
                        <div class="npv-hl-icon"><i class="fa-solid fa-chart-line"></i></div>
                        <div>
                            <h4 class="npv-hl-title np-trans" data-en="Project Budgeting &amp; Expense Tracking">Project Budgeting &amp; Expense Tracking</h4>
                            <p class="npv-hl-desc np-trans" data-en="Monitor actual site capital expenditures (CAPEX) versus sanctioned project budgets in real time.">Monitor actual site capital expenditures (CAPEX) versus sanctioned project budgets in real time.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Target Businesses & Features Matrix -->
    <section class="py-5 bg-white">
        <div class="container">
            <div class="row align-items-center mb-5">
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <span class="badge bg-warning text-dark px-3 py-2 rounded-pill mb-2 np-trans" data-en="Target Sectors" data-np="लक्षित व्यवसायहरू">Target Sectors</span>
                    <h3 class="fw-bold text-dark np-trans" data-en="Businesses Benefiting from this Solution" data-np="यो समाधानबाट लाभान्वित हुने व्यवसायहरू">Businesses Benefiting from this Solution</h3>
                    <p class="text-muted">Designed specifically to meet the daily workflow and operational demands of growing Nepalese enterprises.</p>
                    <ul class="list-unstyled mt-4" style="line-height: 2.2; font-size: 16px;">
                        <li class="np-trans" data-en="Independent Power Producers (IPPs)"><i class="fa-solid fa-circle-check text-danger me-2"></i> Independent Power Producers (IPPs)</li><li class="np-trans" data-en="Hydropower Construction Contractors"><i class="fa-solid fa-circle-check text-danger me-2"></i> Hydropower Construction Contractors</li><li class="np-trans" data-en="Electromechanical Engineering Firms"><i class="fa-solid fa-circle-check text-danger me-2"></i> Electromechanical Engineering Firms</li><li class="np-trans" data-en="Transmission &amp; Substation Builders"><i class="fa-solid fa-circle-check text-danger me-2"></i> Transmission &amp; Substation Builders</li><li class="np-trans" data-en="Solar &amp; Renewable Energy Developers"><i class="fa-solid fa-circle-check text-danger me-2"></i> Solar &amp; Renewable Energy Developers</li><li class="np-trans" data-en="Hydropower Maintenance &amp; Spares Suppliers"><i class="fa-solid fa-circle-check text-danger me-2"></i> Hydropower Maintenance &amp; Spares Suppliers</li>
                    </ul>
                </div>
                <div class="col-lg-6">
                    <div class="p-4 p-md-5 rounded-4" style="background: linear-gradient(135deg, #090e1f 0%, #151a33 100%); color: #fff;">
                        <h4 class="fw-bold text-warning mb-3 np-trans" data-en="Why Nepalese Enterprises Choose Digify" data-np="नेपाली व्यवसायहरूले किन Digify रोज्छन्?">Why Nepalese Enterprises Choose Digify</h4>
                        <p class="text-white-50">Say goodbye to isolated spreadsheets and disjointed desktop tools. Digify connects your sales counters, warehouse godowns, accounting ledgers, and field staff onto a single centralized cloud platform.</p>
                        <div class="d-flex align-items-center gap-3 mt-4 pt-3 border-top border-secondary">
                            <i class="fa-solid fa-headset fs-2 text-danger"></i>
                            <div>
                                <h6 class="mb-0 fw-bold">Dedicated Onboarding & Support</h6>
                                <p class="small text-white-50 mb-0">Fast 48-hour onboarding and staff workflow training.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Features Grid -->
            <div class="pt-4 border-top">
                <h4 class="fw-bold text-dark text-center mb-4 np-trans" data-en="Integrated Module Checklist" data-np="एकीकृत मोड्युल सूची">Integrated Module Checklist</h4>
                <div class="row">
                    <div class="col-md-6 col-lg-3 mb-3"><div class="npv-feature-pill"><i class="fa-solid fa-check text-success me-2"></i><span class="np-trans" data-en="Capital Equipment Records">Capital Equipment Records</span></div></div><div class="col-md-6 col-lg-3 mb-3"><div class="npv-feature-pill"><i class="fa-solid fa-check text-success me-2"></i><span class="np-trans" data-en="Critical Spare Parts Inventory">Critical Spare Parts Inventory</span></div></div><div class="col-md-6 col-lg-3 mb-3"><div class="npv-feature-pill"><i class="fa-solid fa-check text-success me-2"></i><span class="np-trans" data-en="Site Store Requisitions">Site Store Requisitions</span></div></div><div class="col-md-6 col-lg-3 mb-3"><div class="npv-feature-pill"><i class="fa-solid fa-check text-success me-2"></i><span class="np-trans" data-en="Contractor Progress Billings">Contractor Progress Billings</span></div></div><div class="col-md-6 col-lg-3 mb-3"><div class="npv-feature-pill"><i class="fa-solid fa-check text-success me-2"></i><span class="np-trans" data-en="CAPEX Budget vs Actual Reports">CAPEX Budget vs Actual Reports</span></div></div><div class="col-md-6 col-lg-3 mb-3"><div class="npv-feature-pill"><i class="fa-solid fa-check text-success me-2"></i><span class="np-trans" data-en="Purchase Order Approval Workflows">Purchase Order Approval Workflows</span></div></div><div class="col-md-6 col-lg-3 mb-3"><div class="npv-feature-pill"><i class="fa-solid fa-check text-success me-2"></i><span class="np-trans" data-en="Maintenance Work Logs">Maintenance Work Logs</span></div></div><div class="col-md-6 col-lg-3 mb-3"><div class="npv-feature-pill"><i class="fa-solid fa-check text-success me-2"></i><span class="np-trans" data-en="Multi-Site Financial Reporting">Multi-Site Financial Reporting</span></div></div>
                </div>
            </div>
        </div>
    </section>

    <!-- Bottom CTA -->
    <section class="py-5" style="background: linear-gradient(135deg, #dc2626 0%, #991b1b 100%); color: #fff;">
        <div class="container text-center">
            <h2 class="fw-bold mb-3 np-trans" data-en="Digitize Your Nepal Business Today" data-np="आजै आफ्नो व्यवसाय डिजिटल बनाउनुहोस्">Digitize Your Nepal Business Today</h2>
            <p class="mx-auto mb-4 text-white-50" style="max-width: 680px; font-size: 17px;">Experience a personalized 15-minute system walkthrough calibrated for Hydropower &amp; Energy Project ERP Software in Nepal.</p>
            <div class="d-flex justify-content-center flex-wrap gap-3">
                <button type="button" class="btn btn-light px-4 py-3 fw-bold text-danger rounded-pill" data-bs-toggle="modal" data-bs-target="#trialModal">
                    <i class="fa-solid fa-calendar-check me-2"></i> <span class="np-trans" data-en="Book Free Live Demo" data-np="निःशुल्क लाइभ डेमो बुक गर्नुहोस्">Book Free Live Demo</span>
                </button>
                <a href="erp-software-nepal.php" class="btn btn-outline-light px-4 py-3 fw-bold rounded-pill">
                    <i class="fa-solid fa-list me-2"></i> <span class="np-trans" data-en="Explore All 20+ Nepal Verticals" data-np="सबै २०+ नेपाल भर्टिकलहरू हेर्नुहोस्">Explore All 20+ Nepal Verticals</span>
                </a>
            </div>
        </div>
    </section>
</div>

<script>
function setNpLang(lang) {
    document.querySelectorAll('.np-lang-btn').forEach(btn => btn.classList.remove('active'));
    if (lang === 'np') {
        const btnNp = document.querySelectorAll('.np-lang-btn')[1];
        if (btnNp) btnNp.classList.add('active');
        document.querySelectorAll('.np-trans').forEach(el => {
            const val = el.getAttribute('data-np');
            if (val) el.innerHTML = val;
        });
    } else {
        const btnEn = document.querySelectorAll('.np-lang-btn')[0];
        if (btnEn) btnEn.classList.add('active');
        document.querySelectorAll('.np-trans').forEach(el => {
            const val = el.getAttribute('data-en');
            if (val) el.innerHTML = val;
        });
    }
}
</script>

<?php include('trial_modal.php'); ?>
<?php include(__DIR__ . '/../../footer.php'); ?>
