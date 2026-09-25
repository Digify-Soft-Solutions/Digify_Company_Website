<?php 
include_once(__DIR__ . '/../../db.php');
include_once(__DIR__ . '/../../fetch_meta.php');

$pageTitle = "Mining ERP Software Kenya | Quarry & Mineral Management";
$pageDescription = "Digify Soft Solutions provides specialized mining & quarry ERP software for Kenya. Manage remote site procurement, equipment maintenance, spare parts, fuel monitoring, suppliers, workforce, and cost accounting.";
$pageKeywords = "Mining ERP Kenya, Mining software Kenya, Mining management software Kenya, Mining inventory software Kenya, Mining accounting software Kenya, Mining procurement software Kenya, Mining business management software Kenya, Mining ERP system Kenya, Quarry management software Kenya, Mining inventory management Kenya, Mining procurement management Kenya, Mining supplier management Kenya, Mining equipment management software Kenya, Mining financial management software Kenya, Mining reporting software Kenya";
$pageCanonical = "https://www.digifysoft.in/mining-erp-software-kenya";

include(__DIR__ . '/../../top.php');
include(__DIR__ . '/../../header.php');
?>

<style>
/* Kenya Mining Suite Styling */
.mn-page-wrapper {
    font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
    color: #1e293b;
    overflow-x: hidden;
}

/* Mining Hero */
.mn-hero {
    background: linear-gradient(135deg, #18181b 0%, #27272a 50%, #09090b 100%);
    color: #ffffff;
    padding: 70px 0 85px;
    position: relative;
    overflow: hidden;
    border-bottom: 4px solid #eab308;
}
.mn-hero::before {
    content: '';
    position: absolute;
    top: -20%;
    right: -10%;
    width: 650px;
    height: 650px;
    background: radial-gradient(circle, rgba(234, 179, 8, 0.22) 0%, rgba(245, 158, 11, 0.08) 60%, rgba(0, 0, 0, 0) 80%);
    border-radius: 50%;
    pointer-events: none;
}
.text-gradient-mn {
    background: linear-gradient(135deg, #fde047 0%, #f59e0b 100%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    display: inline-block;
}
.mn-hero-badge {
    background: rgba(234, 179, 8, 0.18);
    border: 1px solid rgba(234, 179, 8, 0.5);
    color: #fde047;
    font-size: 13px;
    font-weight: 700;
    padding: 7px 18px;
    border-radius: 30px;
    display: inline-flex;
    align-items: center;
    gap: 8px;
    margin-bottom: 18px;
}
.mn-hero h1 {
    font-size: 42px;
    font-weight: 900;
    line-height: 1.25;
    margin-bottom: 18px;
    letter-spacing: -0.5px;
}
.mn-hero-sub {
    font-size: 18px;
    font-weight: 600;
    color: #fef08a;
    line-height: 1.5;
    margin-bottom: 14px;
}
.mn-hero-desc {
    font-size: 16px;
    line-height: 1.7;
    color: rgba(255, 255, 255, 0.88);
    max-width: 700px;
    margin-bottom: 28px;
}

/* Language Toggle */
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
    cursor: pointer;
    transition: all 0.25s ease;
}
.lang-pill.active {
    background: linear-gradient(135deg, #d97706 0%, #eab308 100%);
    color: #18181b;
    font-weight: 800;
    box-shadow: 0 4px 12px rgba(234, 179, 8, 0.4);
}

/* Lead Card */
.hero-lead-card {
    background: #ffffff;
    border-radius: 20px;
    padding: 32px 28px;
    box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.35);
    color: #0f172a;
    border: 1px solid #e2e8f0;
}
.hero-lead-card h3 {
    font-size: 20px;
    font-weight: 800;
    color: #0f172a;
    margin-bottom: 6px;
}
.hero-lead-card p {
    font-size: 13px;
    color: #64748b;
    margin-bottom: 20px;
}
.hero-lead-card .form-control, .hero-lead-card .form-select {
    font-size: 14px;
    padding: 10px 14px;
    border-radius: 10px;
    border: 1px solid #cbd5e1;
    margin-bottom: 12px;
}
.btn-mn-primary {
    background: linear-gradient(135deg, #d97706 0%, #b45309 100%);
    color: #ffffff;
    font-weight: 700;
    font-size: 15px;
    padding: 12px 24px;
    border-radius: 12px;
    border: none;
    transition: all 0.3s ease;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    gap: 8px;
    box-shadow: 0 10px 20px -5px rgba(217, 119, 6, 0.4);
    text-decoration: none;
}
.btn-mn-primary:hover {
    background: linear-gradient(135deg, #b45309 0%, #92400e 100%);
    color: #ffffff;
    transform: translateY(-2px);
}
.btn-mn-outline {
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
.btn-mn-outline:hover {
    background: rgba(255, 255, 255, 0.18);
    color: #ffffff;
    transform: translateY(-2px);
}

/* Section styling */
.mn-section {
    padding: 75px 0;
}
.bg-light-mn {
    background-color: #fafaf9;
}
.bg-dark-mn {
    background-color: #18181b;
    color: #ffffff;
}
.section-badge-mn {
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
.section-title-mn {
    font-size: 34px;
    font-weight: 900;
    color: #0f172a;
    line-height: 1.3;
    margin-bottom: 16px;
    letter-spacing: -0.5px;
}
.section-title-mn-dark {
    font-size: 34px;
    font-weight: 900;
    color: #ffffff;
    line-height: 1.3;
    margin-bottom: 16px;
    letter-spacing: -0.5px;
}
.section-sub-mn {
    font-size: 16px;
    color: #64748b;
    max-width: 780px;
    margin: 0 auto 40px;
    line-height: 1.7;
}

/* Feature Cards */
.mn-card {
    background: #ffffff;
    border: 1px solid #e2e8f0;
    border-radius: 16px;
    padding: 26px;
    transition: all 0.3s ease;
    height: 100%;
    display: flex;
    flex-direction: column;
}
.mn-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 20px 30px -10px rgba(0, 0, 0, 0.08);
    border-color: #f59e0b;
}
.mn-card-icon {
    width: 52px;
    height: 52px;
    border-radius: 14px;
    background: linear-gradient(135deg, #fef3c7 0%, #fde68a 100%);
    color: #b45309;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 22px;
    margin-bottom: 18px;
}
.mn-card h4 {
    font-size: 18px;
    font-weight: 800;
    color: #0f172a;
    margin-bottom: 10px;
}
.mn-card p {
    font-size: 14px;
    color: #64748b;
    line-height: 1.6;
    margin-bottom: 14px;
    flex-grow: 1;
}

.mn-checklist {
    list-style: none;
    padding: 0;
    margin: 0 0 16px 0;
}
.mn-checklist li {
    font-size: 13.5px;
    color: #334155;
    margin-bottom: 7px;
    display: flex;
    align-items: flex-start;
    gap: 8px;
}
.mn-checklist li i {
    color: #d97706;
    margin-top: 3px;
    font-size: 12px;
}

/* Economic Context Callout */
.eco-box {
    background: #fffbeb;
    border: 1px solid #fde68a;
    border-left: 5px solid #f59e0b;
    border-radius: 12px;
    padding: 20px 24px;
    margin-bottom: 30px;
}
.eco-box h4 {
    color: #92400e;
    font-size: 16px;
    font-weight: 800;
    margin-bottom: 6px;
}
.eco-box p {
    font-size: 14px;
    color: #78350f;
    margin: 0;
    line-height: 1.6;
}

/* Keyword Pills */
.keyword-tag {
    display: inline-block;
    background: #f1f5f9;
    border: 1px solid #cbd5e1;
    color: #475569;
    font-size: 12px;
    font-weight: 600;
    padding: 5px 12px;
    border-radius: 20px;
    margin: 3px;
}

@media (max-width: 991px) {
    .mn-hero h1 { font-size: 32px; }
    .section-title-mn, .section-title-mn-dark { font-size: 26px; }
}
</style>

<div class="mn-page-wrapper">

    <!-- HERO SECTION (Point 17) -->
    <section class="mn-hero" id="hero">
        <div class="container position-relative" style="z-index: 2;">
            <div class="row align-items-center g-4">
                <div class="col-lg-7">
                    <!-- Language Switcher -->
                    <div class="lang-toggle-bar">
                        <button class="lang-pill active" id="btnMnLangEn" onclick="switchMnLang('en')">🇬🇧 English</button>
                        <button class="lang-pill" id="btnMnLangSw" onclick="switchMnLang('sw')">🇰🇪 Kiswahili</button>
                    </div>

                    <div class="mn-hero-badge">
                        <span>⛏️</span>
                        <span class="mn-trans" data-en="Dedicated Kenya Mining & Quarrying ERP Edition" data-sw="Toleo Maalum la ERP ya Madini na Machimbo Kenya">Dedicated Kenya Mining & Quarrying ERP Edition</span>
                    </div>

                    <h1 class="mn-trans" 
                        data-en="Mining ERP Software for Businesses in Kenya" 
                        data-sw="Programu ya ERP ya Shughuli za Madini na Machimbo Kenya">
                        Mining ERP Software for Businesses in Kenya
                    </h1>

                    <div class="mn-hero-sub mn-trans" 
                        data-en="Manage mining-related procurement, inventory, suppliers, equipment records, workforce data, finance and operational information through an integrated ERP platform."
                        data-sw="Simamia ununuzi wa migodi, orodha ya vifaa, wauzaji, rekodi za mitambo, taarifa za wafanyakazi, fedha na shughuli za uendeshaji kupitia mfumo mmoja wa ERP.">
                        Manage mining-related procurement, inventory, suppliers, equipment records, workforce data, finance and operational information through an integrated ERP platform.
                    </div>

                    <p class="mn-hero-desc mn-trans" 
                        data-en="Kenya's 2026 Economic Survey reports that Mining & Quarrying rebounded strongly in 2025, growing 14.9%, partly driven by increased production of minerals used in cement production and emerging critical mineral investments."
                        data-sw="Utafiti wa Kiuchumi wa Kenya unaonyesha Sekta ya Madini na Machimbo ilikua kwa 14.9% mnamo 2025, ikichochewa na uzalishaji wa madini ya saruji, lithiamu, grafaiti, shaba, niobiamu na madini adimu.">
                        Kenya's 2026 Economic Survey reports that Mining & Quarrying rebounded strongly in 2025, growing 14.9%, partly driven by increased production of minerals used in cement production and emerging critical mineral investments.
                    </p>

                    <div class="d-flex flex-wrap gap-3 mb-4">
                        <a href="#demo-form" class="btn btn-mn-primary">
                            <i class="fas fa-calendar-check"></i>
                            <span class="mn-trans" data-en="Request Mining ERP Demo" data-sw="Omba Onyesho la ERP ya Madini">Request Mining ERP Demo</span>
                        </a>
                        <a href="https://wa.me/919914444588?text=Hello%20Digify%20Kenya%20Mining%20Team" target="_blank" class="btn btn-mn-outline">
                            <i class="fab fa-whatsapp text-warning"></i>
                            <span class="mn-trans" data-en="Consult Mining ERP Expert" data-sw="Ongea na Mtaalamu wa Madini">Consult Mining ERP Expert</span>
                        </a>
                    </div>
                </div>

                <!-- Right Form -->
                <div class="col-lg-5" id="demo-form">
                    <div class="hero-lead-card">
                        <div class="d-flex align-items-center justify-content-between mb-2">
                            <span class="badge bg-warning text-dark px-3 py-1 rounded-pill font-monospace fw-bold mn-trans" data-en="MINING & QUARRY SUITE" data-sw="HUDUMA YA MADINI NA MACHIMBO">MINING & QUARRY SUITE</span>
                            <span class="text-muted small mn-trans" data-en="<i class='fas fa-shield-alt text-warning'></i> Enterprise Grade" data-sw="<i class='fas fa-shield-alt text-warning'></i> Kiwango cha Biashara Kubwa"><i class="fas fa-shield-alt text-warning"></i> Enterprise Grade</span>
                        </div>
                        <h3 class="mn-trans" data-en="Get a Mining ERP Walkthrough" data-sw="Pata Maelezo ya ERP ya Madini">Get a Mining ERP Walkthrough</h3>
                        <p class="mn-trans" data-en="See heavy equipment logging, site inventory transfers, fuel usage tracking, and cost analytics." data-sw="Tazama usimamizi wa mitambo, uhamishaji wa vifaa kwenye machimbo, na udhibiti wa mafuta.">See heavy equipment logging, site inventory transfers, fuel usage tracking, and cost analytics.</p>
                        
                        <form action="send_mail.php" method="POST">
                            <input type="hidden" name="source" value="Kenya Mining Dedicated ERP Page">
                            <input type="hidden" name="country" value="Kenya">
                            
                            <div class="mb-2">
                                <label class="form-label small fw-bold text-dark mn-trans" data-en="Full Name" data-sw="Jina Kamili">Full Name</label>
                                <input type="text" name="name" class="form-control" placeholder="e.g. Peter Mutua / Joseph Kiprono" required>
                            </div>

                            <div class="mb-2">
                                <label class="form-label small fw-bold text-dark mn-trans" data-en="Mining / Quarry Company Name" data-sw="Jina la Kampuni ya Madini / Machimbo">Mining / Quarry Company Name</label>
                                <input type="text" name="company" class="form-control" placeholder="e.g. Rift Valley Quarries Ltd / Kenya Minerals Corp" required>
                            </div>

                            <div class="row g-2 mb-2">
                                <div class="col-6">
                                    <label class="form-label small fw-bold text-dark mn-trans" data-en="WhatsApp / Phone" data-sw="Simu / WhatsApp">WhatsApp / Phone</label>
                                    <input type="tel" name="phone" class="form-control" placeholder="+254 7XX XXX XXX" required>
                                </div>
                                <div class="col-6">
                                    <label class="form-label small fw-bold text-dark mn-trans" data-en="Primary Operation" data-sw="Shughuli Kuu">Primary Operation</label>
                                    <select name="operation_type" id="mnOperationSelect" class="form-select">
                                        <option value="Stone & Aggregate Quarry">Quarry & Aggregates</option>
                                        <option value="Cement Minerals (Limestone/Gypsum)">Cement Minerals</option>
                                        <option value="Base & Critical Minerals">Lithium / Graphite / Copper</option>
                                        <option value="Industrial Sand & Clays">Industrial Minerals</option>
                                        <option value="Mining Equipment & Supplies">Mining Supplies Supplier</option>
                                    </select>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label class="form-label small fw-bold text-dark mn-trans" data-en="Work Email" data-sw="Barua Pepe">Work Email</label>
                                <input type="email" name="email" class="form-control" placeholder="operations@mining.co.ke" required>
                            </div>

                            <button type="submit" class="btn btn-mn-primary w-100 py-2">
                                <span class="mn-trans" data-en="Schedule Mining Demo" data-sw="Panga Onyesho la Madini">Schedule Mining Demo</span>
                                <i class="fas fa-arrow-right ms-2"></i>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ECONOMIC CONTEXT BOX -->
    <section class="py-4 bg-light-mn">
        <div class="container">
            <div class="eco-box m-0">
                <h4 class="mn-trans" data-en="<i class='fas fa-chart-line text-warning me-2'></i> Kenya Mining Sector Growth & Opportunities (2025-2026)" data-sw="<i class='fas fa-chart-line text-warning me-2'></i> Ukuaji na Fursa za Sekta ya Madini Kenya (2025-2026)"><i class="fas fa-chart-line text-warning me-2"></i> Kenya Mining Sector Growth & Opportunities (2025-2026)</h4>
                <p class="mn-trans" data-en="According to Kenya's State Department for Mining and official Economic Surveys, mining activity rebounded strongly with 14.9% growth, supported by major domestic cement production minerals as well as strategic reforms unlocking exploration in lithium, graphite, copper, niobium, tantalum, and rare earth elements." data-sw="Kulingana na Idara ya Serikali ya Madini ya Kenya na Tafiti Rasmi za Kiuchumi, sekta ya madini ilikua kwa 14.9% mnamo 2025, ikichochewa na uzalishaji wa madini ya saruji na uwekezaji mpya katika lithiamu, grafaiti, shaba, niobiamu na madini adimu.">According to Kenya's State Department for Mining and official Economic Surveys, mining activity rebounded strongly with 14.9% growth, supported by major domestic cement production minerals as well as strategic reforms unlocking exploration in lithium, graphite, copper, niobium, tantalum, and rare earth elements.</p>
            </div>
        </div>
    </section>

    <!-- 18 to 23. MINING MODULES -->
    <section class="mn-section" id="modules">
        <div class="container">
            <div class="text-center mb-5">
                <span class="section-badge-mn mn-trans" data-en="Sections 18-23: Mining Operations Core" data-sw="Sehemu ya 18-23: Msingi wa Shughuli za Migodi">Sections 18-23: Mining Operations Core</span>
                <h2 class="section-title-mn mn-trans" 
                    data-en="Dedicated Mining & Quarry Management Capabilities" 
                    data-sw="Uwezo Maalum wa Usimamizi wa Madini na Machimbo">
                    Dedicated Mining & Quarry Management Capabilities
                </h2>
                <p class="section-sub-mn mn-trans" data-en="Purpose-built software to organize procurement, heavy site inventory, equipment records, and operational expenditures." data-sw="Programu maalum ya kuratibu ununuzi, vifaa vizito kwenye maeneo ya machimbo, kumbukumbu za mitambo na matumizi ya uendeshaji.">Purpose-built software to organize procurement, heavy site inventory, equipment records, and operational expenditures.</p>
            </div>

            <div class="row g-4">
                <!-- 18. Mining Procurement & Supplier Management -->
                <div class="col-lg-6">
                    <div class="mn-card">
                        <div class="mn-card-icon"><i class="fas fa-shopping-cart"></i></div>
                        <h4 class="mn-trans" data-en="18. Mining Procurement & Supplier Management" data-sw="18. Ununuzi wa Migodi na Wauzaji">18. Mining Procurement & Supplier Management</h4>
                        <p class="mn-trans" data-en="Centralize all site procurement orders, vendor price comparisons, and long-term industrial supply contracts." data-sw="Kusanya maagizo yote ya ununuzi wa machimbo, ulinganishaji wa bei za wauzaji, na mikataba ya usambazaji.">Centralize all site procurement orders, vendor price comparisons, and long-term industrial supply contracts.</p>
                        
                        <div class="row g-2">
                            <div class="col-sm-6"><div class="p-2 bg-light border rounded small"><i class="fas fa-check text-warning me-1"></i> <span class="mn-trans" data-en="Heavy Mining Equipment POs" data-sw="Maagizo ya Ununuzi ya Mitambo Mizito">Heavy Mining Equipment POs</span></div></div>
                            <div class="col-sm-6"><div class="p-2 bg-light border rounded small"><i class="fas fa-check text-warning me-1"></i> <span class="mn-trans" data-en="Spare Parts Requisitions" data-sw="Maombi ya Vipuri vya Mitambo">Spare Parts Requisitions</span></div></div>
                            <div class="col-sm-6"><div class="p-2 bg-light border rounded small"><i class="fas fa-check text-warning me-1"></i> <span class="mn-trans" data-en="Bulk Fuel & Lubricants" data-sw="Mafuta ya Jumla na Vilainishi">Bulk Fuel & Lubricants</span></div></div>
                            <div class="col-sm-6"><div class="p-2 bg-light border rounded small"><i class="fas fa-check text-warning me-1"></i> <span class="mn-trans" data-en="Personal Safety Equipment (PPE)" data-sw="Vifaa vya Kujikinga na Usalama (PPE)">Personal Safety Equipment (PPE)</span></div></div>
                            <div class="col-sm-6"><div class="p-2 bg-light border rounded small"><i class="fas fa-check text-warning me-1"></i> <span class="mn-trans" data-en="Tools & Industrial Supplies" data-sw="Zana na Vifaa vya Viwandani">Tools & Industrial Supplies</span></div></div>
                            <div class="col-sm-6"><div class="p-2 bg-light border rounded small"><i class="fas fa-check text-warning me-1"></i> <span class="mn-trans" data-en="Maintenance Materials & Consumables" data-sw="Vifaa vya Matengenezo na Vilainishi">Maintenance Materials & Consumables</span></div></div>
                            <div class="col-sm-6"><div class="p-2 bg-light border rounded small"><i class="fas fa-check text-warning me-1"></i> <span class="mn-trans" data-en="Supplier Long-Term Contracts" data-sw="Mikataba ya Muda Mrefu ya Wasambazaji">Supplier Long-Term Contracts</span></div></div>
                            <div class="col-sm-6"><div class="p-2 bg-light border rounded small"><i class="fas fa-check text-warning me-1"></i> <span class="mn-trans" data-en="Multi-Level Purchase Approvals" data-sw="Idhini za Ununuzi za Ngazi Mbalimbali">Multi-Level Purchase Approvals</span></div></div>
                        </div>
                    </div>
                </div>

                <!-- 19. Mining Inventory Management -->
                <div class="col-lg-6">
                    <div class="mn-card">
                        <div class="mn-card-icon"><i class="fas fa-warehouse"></i></div>
                        <h4 class="mn-trans" data-en="19. Mining Inventory Management" data-sw="19. Usimamizi wa Orodha ya Vifaa vya Madini">19. Mining Inventory Management</h4>
                        <p class="mn-trans" data-en="Track equipment, spare parts, consumables, tools and operational inventory across mining sites, yards and central warehouses." data-sw="Fuatilia mitambo, vipuri, vifaa vinavyotumika na orodha ya bidhaa katika machimbo na maghala.">Track equipment, spare parts, consumables, tools and operational inventory across mining sites, yards and central warehouses.</p>
                        
                        <div class="row g-2">
                            <div class="col-sm-6"><div class="p-2 bg-light border rounded small"><i class="fas fa-check text-warning me-1"></i> <span class="mn-trans" data-en="Site Stock vs Warehouse Stock" data-sw="Hisa za Machimbo dhidi ya Bohari Kuu">Site Stock vs Warehouse Stock</span></div></div>
                            <div class="col-sm-6"><div class="p-2 bg-light border rounded small"><i class="fas fa-check text-warning me-1"></i> <span class="mn-trans" data-en="Spare Parts Bin Allocations" data-sw="Upangaji wa Vipuri kwenye Rafu">Spare Parts Bin Allocations</span></div></div>
                            <div class="col-sm-6"><div class="p-2 bg-light border rounded small"><i class="fas fa-check text-warning me-1"></i> <span class="mn-trans" data-en="Fuel Reserve & Tank Monitoring" data-sw="Ufuatiliaji wa Akiba ya Mafuta na Matangi">Fuel Reserve & Tank Monitoring</span></div></div>
                            <div class="col-sm-6"><div class="p-2 bg-light border rounded small"><i class="fas fa-check text-warning me-1"></i> <span class="mn-trans" data-en="Safety Stock & Reorder Triggers" data-sw="Hisa ya Dharura na Vigezo vya Kuagiza">Safety Stock & Reorder Triggers</span></div></div>
                            <div class="col-sm-6"><div class="p-2 bg-light border rounded small"><i class="fas fa-check text-warning me-1"></i> <span class="mn-trans" data-en="Drills, Blades & Wear Consumables" data-sw="Mabapa na Visu Vinavyochakaa">Drills, Blades & Wear Consumables</span></div></div>
                            <div class="col-sm-6"><div class="p-2 bg-light border rounded small"><i class="fas fa-check text-warning me-1"></i> <span class="mn-trans" data-en="Inter-Site Stock Transfer Orders" data-sw="Uhamisho wa Vifaa Kati ya Machimbo">Inter-Site Stock Transfer Orders</span></div></div>
                        </div>
                    </div>
                </div>

                <!-- 20. Mining Equipment & Asset Records -->
                <div class="col-lg-6">
                    <div class="mn-card">
                        <div class="mn-card-icon"><i class="fas fa-truck-monster"></i></div>
                        <h4 class="mn-trans" data-en="20. Mining Equipment & Asset Records" data-sw="20. Kumbukumbu za Mitambo na Mali za Migodi">20. Mining Equipment & Asset Records</h4>
                        <p class="mn-trans" data-en="Maintain centralized records for heavy machinery, crushers, haulage trucks, generators and operational assets." data-sw="Hifadhi kumbukumbu za mitambo mikubwa, mashine za kusaga mawe, lori za kubeba mawe na jenereta.">Maintain centralized records for heavy machinery, crushers, haulage trucks, generators and operational assets.</p>
                        <ul class="mn-checklist">
                            <li class="mn-trans" data-en="<i class='fas fa-check'></i> Equipment Details & Serial Number Records" data-sw="<i class='fas fa-check'></i> Maelezo ya Mitambo na Kumbukumbu za Nambari"><i class="fas fa-check"></i> Equipment Details & Serial Number Records</li>
                            <li class="mn-trans" data-en="<i class='fas fa-check'></i> Asset Identification & Barcode Tags" data-sw="<i class='fas fa-check'></i> Utambulisho wa Mali na Lebo za Barcode/QR"><i class="fas fa-check"></i> Asset Identification & Barcode Tags</li>
                            <li class="mn-trans" data-en="<i class='fas fa-check'></i> Current Site Location & Relocation History" data-sw="<i class='fas fa-check'></i> Eneo la Sasa la Mtambo na Historia ya Uhamisho"><i class="fas fa-check"></i> Current Site Location & Relocation History</li>
                            <li class="mn-trans" data-en="<i class='fas fa-check'></i> Purchase Information & Original Valuation" data-sw="<i class='fas fa-check'></i> Taarifa za Ununuzi na Thamani ya Awali ya Mali"><i class="fas fa-check"></i> Purchase Information & Original Valuation</li>
                            <li class="mn-trans" data-en="<i class='fas fa-check'></i> Equipment Supplier & Warranty Reference" data-sw="<i class='fas fa-check'></i> Msambazaji wa Mtambo na Hati za Dhamana"><i class="fas fa-check"></i> Equipment Supplier & Warranty Reference</li>
                            <li class="mn-trans" data-en="<i class='fas fa-check'></i> Operational Status (Active, Idle, Under Repair)" data-sw="<i class='fas fa-check'></i> Hali ya Utendaji (Inafanya Kazi, Imesimama, Ukarabati)"><i class="fas fa-check"></i> Operational Status (Active, Idle, Under Repair)</li>
                        </ul>
                    </div>
                </div>

                <!-- 21. Mining Equipment Maintenance Records -->
                <div class="col-lg-6">
                    <div class="mn-card">
                        <div class="mn-card-icon"><i class="fas fa-wrench"></i></div>
                        <h4 class="mn-trans" data-en="21. Mining Equipment Maintenance Management" data-sw="21. Usimamizi wa Matengenezo ya Mitambo">21. Mining Equipment Maintenance Management</h4>
                        <p class="mn-trans" data-en="Maintain comprehensive equipment-related records and maintenance workflows to improve operational visibility across quarry sites." data-sw="Hifadhi kumbukumbu za matengenezo ya mitambo na huduma za kiufundi ili kuongeza ufanisi.">Maintain comprehensive equipment-related records and maintenance workflows to improve operational visibility across quarry sites.</p>
                        <ul class="mn-checklist">
                            <li class="mn-trans" data-en="<i class='fas fa-check'></i> Complete Maintenance & Breakdown History" data-sw="<i class='fas fa-check'></i> Historia Kamili ya Matengenezo na Uharibifu"><i class="fas fa-check"></i> Complete Maintenance & Breakdown History</li>
                            <li class="mn-trans" data-en="<i class='fas fa-check'></i> Service Records & Technician Work Logs" data-sw="<i class='fas fa-check'></i> Rekodi za Huduma na Kazi za Mafundi"><i class="fas fa-check"></i> Service Records & Technician Work Logs</li>
                            <li class="mn-trans" data-en="<i class='fas fa-check'></i> Spare Parts Utilized per Repair Job" data-sw="<i class='fas fa-check'></i> Vipuri Vilivyotumika kwa Kila Ukarabati"><i class="fas fa-check"></i> Spare Parts Utilized per Repair Job</li>
                            <li class="mn-trans" data-en="<i class='fas fa-check'></i> Cumulative Maintenance Costs Tracking" data-sw="<i class='fas fa-check'></i> Ufuatiliaji wa Gharama Zote za Matengenezo"><i class="fas fa-check"></i> Cumulative Maintenance Costs Tracking</li>
                            <li class="mn-trans" data-en="<i class='fas fa-check'></i> Live Equipment Operational Status" data-sw="<i class='fas fa-check'></i> Hali ya Sasa ya Ufanyaji Kazi wa Mtambo"><i class="fas fa-check"></i> Live Equipment Operational Status</li>
                            <li class="mn-trans" data-en="<i class='fas fa-check'></i> Periodic Routine Service Schedule Logs" data-sw="<i class='fas fa-check'></i> Ratiba na Kumbukumbu za Huduma za Mara kwa Mara"><i class="fas fa-check"></i> Periodic Routine Service Schedule Logs</li>
                        </ul>
                    </div>
                </div>

                <!-- 22 & 23. Cost Management & Mining Reporting Engine -->
                <div class="col-lg-12">
                    <div class="p-4 bg-light rounded-4 border">
                        <div class="row g-4 align-items-center">
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center gap-3 mb-3">
                                    <div class="mn-card-icon m-0"><i class="fas fa-coins"></i></div>
                                    <div>
                                        <h4 class="fw-bold m-0 fs-5 mn-trans" data-en="22. Mining Cost & Financial Visibility" data-sw="22. Ufuatiliaji wa Gharama na Fedha za Migodi">22. Mining Cost & Financial Visibility</h4>
                                        <small class="text-muted mn-trans" data-en="Rigorous tracking of heavy extraction expenses" data-sw="Ufuatiliaji makini wa matumizi ya uchimbaji na uendeshaji">Rigorous tracking of heavy extraction expenses</small>
                                    </div>
                                </div>
                                <p class="text-muted small mb-3 mn-trans" data-en="Monitor purchasing budgets, site inventory consumption rates, supplier transactions, contractor bills, fuel expenses, and overall extraction cost per metric ton." data-sw="Fuatilia bajeti za ununuzi, matumizi ya vifaa kwenye maeneo ya kazi, malipo ya wauzaji, bili za wakandarasi, matumizi ya mafuta, na wastani wa gharama ya uchimbaji kwa kila tani.">Monitor purchasing budgets, site inventory consumption rates, supplier transactions, contractor bills, fuel expenses, and overall extraction cost per metric ton.</p>
                                <ul class="mn-checklist small">
                                    <li class="mn-trans" data-en="<i class='fas fa-check'></i> Site-wise cost center accounting" data-sw="<i class='fas fa-check'></i> Uhasibu wa vituo vya gharama kwa kila eneo la machimbo"><i class="fas fa-check"></i> Site-wise cost center accounting</li>
                                    <li class="mn-trans" data-en="<i class='fas fa-check'></i> Direct material & consumables burn rate" data-sw="<i class='fas fa-check'></i> Kasi ya matumizi ya vifaa na malighafi za moja kwa moja"><i class="fas fa-check"></i> Direct material & consumables burn rate</li>
                                </ul>
                            </div>

                            <div class="col-lg-6 border-start-lg">
                                <div class="d-flex align-items-center gap-3 mb-3">
                                    <div class="mn-card-icon m-0"><i class="fas fa-file-invoice"></i></div>
                                    <div>
                                        <h4 class="fw-bold m-0 fs-5 mn-trans" data-en="23. Mining Operational & Financial Reports" data-sw="23. Ripoti za Uendeshaji na Fedha za Migodi">23. Mining Operational & Financial Reports</h4>
                                        <small class="text-muted mn-trans" data-en="Executive business intelligence for mining leaders" data-sw="Taarifa za kiutendaji kwa viongozi na mameneja wa migodi">Executive business intelligence for mining leaders</small>
                                    </div>
                                </div>
                                <div class="d-flex flex-wrap gap-2">
                                    <span class="badge bg-white text-dark border p-2 mn-trans" data-en="<i class='fas fa-file-alt text-warning me-1'></i> Procurement Reports" data-sw="<i class='fas fa-file-alt text-warning me-1'></i> Ripoti za Ununuzi"><i class="fas fa-file-alt text-warning me-1"></i> Procurement Reports</span>
                                    <span class="badge bg-white text-dark border p-2 mn-trans" data-en="<i class='fas fa-file-alt text-warning me-1'></i> Inventory Reports" data-sw="<i class='fas fa-file-alt text-warning me-1'></i> Ripoti za Vifaa"><i class="fas fa-file-alt text-warning me-1"></i> Inventory Reports</span>
                                    <span class="badge bg-white text-dark border p-2 mn-trans" data-en="<i class='fas fa-file-alt text-warning me-1'></i> Supplier Reports" data-sw="<i class='fas fa-file-alt text-warning me-1'></i> Ripoti za Wasambazaji"><i class="fas fa-file-alt text-warning me-1"></i> Supplier Reports</span>
                                    <span class="badge bg-white text-dark border p-2 mn-trans" data-en="<i class='fas fa-file-alt text-warning me-1'></i> Equipment Asset Reports" data-sw="<i class='fas fa-file-alt text-warning me-1'></i> Ripoti za Mali na Mitambo"><i class="fas fa-file-alt text-warning me-1"></i> Equipment Asset Reports</span>
                                    <span class="badge bg-white text-dark border p-2 mn-trans" data-en="<i class='fas fa-file-alt text-warning me-1'></i> Expense Reports" data-sw="<i class='fas fa-file-alt text-warning me-1'></i> Ripoti za Matumizi"><i class="fas fa-file-alt text-warning me-1"></i> Expense Reports</span>
                                    <span class="badge bg-white text-dark border p-2 mn-trans" data-en="<i class='fas fa-file-alt text-warning me-1'></i> Purchase Reports" data-sw="<i class='fas fa-file-alt text-warning me-1'></i> Ripoti za Manunuzi"><i class="fas fa-file-alt text-warning me-1"></i> Purchase Reports</span>
                                    <span class="badge bg-white text-dark border p-2 mn-trans" data-en="<i class='fas fa-file-alt text-warning me-1'></i> Financial P&L Reports" data-sw="<i class='fas fa-file-alt text-warning me-1'></i> Ripoti za Mapato na Hasara (P&L)"><i class="fas fa-file-alt text-warning me-1"></i> Financial P&L Reports</span>
                                    <span class="badge bg-white text-dark border p-2 mn-trans" data-en="<i class='fas fa-file-alt text-warning me-1'></i> Operational Site Reports" data-sw="<i class='fas fa-file-alt text-warning me-1'></i> Ripoti za Shughuli za Machimbo"><i class="fas fa-file-alt text-warning me-1"></i> Operational Site Reports</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA SECTION -->
    <section class="mn-section bg-dark-mn text-center">
        <div class="container">
            <h2 class="section-title-mn-dark mb-3 mn-trans" data-en="Modernize Your Kenya Mining & Quarry Operations" data-sw="Boresha Shughuli Zako za Madini na Machimbo Kenya">Modernize Your Kenya Mining & Quarry Operations</h2>
            <p class="text-light opacity-75 max-w-700 mx-auto mb-4 mn-trans" data-en="Gain full visibility over remote site inventories, equipment logs, fuel consumption, and procurement budgets." data-sw="Pata udhibiti kamili wa orodha ya vifaa, kumbukumbu za mitambo, matumizi ya mafuta, na bajeti za ununuzi.">Gain full visibility over remote site inventories, equipment logs, fuel consumption, and procurement budgets.</p>
            <div class="d-flex justify-content-center gap-3 flex-wrap">
                <a href="#demo-form" class="btn btn-mn-primary px-4 py-3"><i class="fas fa-calendar-check me-2"></i> <span class="mn-trans" data-en="Request Mining Demo" data-sw="Omba Onyesho la Madini">Request Mining Demo</span></a>
                <a href="erp-software-kenya.php" class="btn btn-mn-outline px-4 py-3"><i class="fas fa-arrow-left me-2"></i> <span class="mn-trans" data-en="View Main Kenya ERP Platform" data-sw="Tazama Mfumo Mkuu wa ERP wa Kenya">View Main Kenya ERP Platform</span></a>
            </div>
        </div>
    </section>

</div>

<script>
function switchMnLang(lang) {
    var btnEn = document.getElementById('btnMnLangEn');
    var btnSw = document.getElementById('btnMnLangSw');
    
    if (lang === 'sw') {
        if (btnEn) btnEn.classList.remove('active');
        if (btnSw) btnSw.classList.add('active');
    } else {
        if (btnSw) btnSw.classList.remove('active');
        if (btnEn) btnEn.classList.add('active');
    }

    var elements = document.querySelectorAll('.mn-trans');
    elements.forEach(function(el) {
        var text = el.getAttribute('data-' + lang);
        if (text) {
            el.innerHTML = text;
        }
    });

    var opSel = document.getElementById('mnOperationSelect');
    if (opSel) {
        if (lang === 'sw') {
            opSel.options[0].text = "Machimbo ya Mawe na Kokoto";
            opSel.options[1].text = "Madini ya Saruji (Chokaa/Jasi)";
            opSel.options[2].text = "Lithiamu / Grafaiti / Shaba";
            opSel.options[3].text = "Madini ya Viwandani na Udongo";
            opSel.options[4].text = "Msambazaji wa Vifaa vya Migodi";
        } else {
            opSel.options[0].text = "Quarry & Aggregates";
            opSel.options[1].text = "Cement Minerals";
            opSel.options[2].text = "Lithium / Graphite / Copper";
            opSel.options[3].text = "Industrial Minerals";
            opSel.options[4].text = "Mining Supplies Supplier";
        }
    }
}
</script>

<?php 
include(__DIR__ . '/../../footer.php');
?>