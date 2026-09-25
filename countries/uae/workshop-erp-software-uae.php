<?php 
include_once(__DIR__ . '/../../db.php');
include_once(__DIR__ . '/../../fetch_meta.php');

$pageTitle = "Workshop ERP Software in UAE | Automotive & Repair Job Cards";
$pageDescription = "Specialized Workshop ERP software in UAE for car repair workshops, auto service centers, tyre shops, and equipment maintenance with digital job cards.";
$pageKeywords = "Workshop ERP Software in UAE for Automotive & Service Centers, ERP software UAE, enterprise ERP UAE, trading ERP UAE, UAE 5% VAT, ERP Dubai, ERP Abu Dhabi, ERP Sharjah, Digify Soft Solutions";
$pageCanonical = "https://www.digifysoft.in/workshop-erp-software-uae";

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
    font-size: 38px;
    font-weight: 900;
    line-height: 1.25;
    margin-bottom: 18px;
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
.uae-section { padding: 75px 0; }
.bg-light-uae { background-color: #f8fafc; }
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
.section-title-uae {
    font-size: 34px;
    font-weight: 900;
    color: #0f2444;
    line-height: 1.3;
    margin-bottom: 16px;
    letter-spacing: -0.5px;
}
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
    font-size: 18px;
    font-weight: 800;
    color: #0f2444;
    margin-bottom: 10px;
}
.uae-card p {
    font-size: 14px;
    color: #64748b;
    line-height: 1.6;
    margin-bottom: 0;
}
</style>

<div class="uae-page-wrapper">
    <!-- HERO -->
    <section class="uae-hero">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7 mb-4 mb-lg-0">
                    <div class="uae-hero-badge">
                        <span>🇦🇪 Auto Workshops &amp; Service Centers</span>
                    </div>
                    <h1>Workshop ERP Software in UAE for Automotive &amp; Service Centers</h1>
                    <div class="uae-hero-sub">Customer Vehicles, Digital Job Cards, Spare Parts Inventory &amp; Technician Logs</div>
                    <p class="uae-hero-desc">Streamline auto repair workshops, car service centers, tyre fitment centers, and mechanical/electrical maintenance garages across Dubai, Sharjah, and Ajman with digital job cards and spare parts tracking.</p>
                    <div class="d-flex flex-wrap gap-3 mb-4">
                        <a href="javascript:void(0)" class="btn-uae-primary" data-bs-toggle="modal" data-bs-target="#trialModal">
                            <i class="fa-solid fa-calendar-check"></i>
                            <span>Schedule UAE Demo</span>
                        </a>
                        <a href="erp-software-uae.php" class="btn-uae-outline">
                            <i class="fa-solid fa-arrow-left"></i>
                            <span>UAE Master ERP Suite</span>
                        </a>
                    </div>
                    <div class="pt-2">
                        <div class="small text-white-50 mb-2 fw-bold text-uppercase">Target Sectors & Applications:</div>
                        <span class="badge bg-light text-dark border p-2 px-3 fw-bold me-2 mb-2"><i class="fa-solid fa-check text-warning me-1"></i> Auto Repair Workshops</span><span class="badge bg-light text-dark border p-2 px-3 fw-bold me-2 mb-2"><i class="fa-solid fa-check text-warning me-1"></i> Car Service Centers</span><span class="badge bg-light text-dark border p-2 px-3 fw-bold me-2 mb-2"><i class="fa-solid fa-check text-warning me-1"></i> Tyre &amp; Wheel Alignment Shops</span><span class="badge bg-light text-dark border p-2 px-3 fw-bold me-2 mb-2"><i class="fa-solid fa-check text-warning me-1"></i> AC &amp; Electrical Garages</span><span class="badge bg-light text-dark border p-2 px-3 fw-bold me-2 mb-2"><i class="fa-solid fa-check text-warning me-1"></i> Heavy Equipment Maintenance</span><span class="badge bg-light text-dark border p-2 px-3 fw-bold me-2 mb-2"><i class="fa-solid fa-check text-warning me-1"></i> Fleet Service Yards</span>
                    </div>
                </div>

                <div class="col-lg-5">
                    <div class="p-4 bg-white rounded-4 shadow-lg text-dark">
                        <h4 class="fw-bold text-dark mb-2">Request Tailored UAE Solution</h4>
                        <p class="small text-muted mb-3">Speak directly with our UAE ERP implementation consultants.</p>
                        
                        <form action="send_mail.php" method="POST">
                            <input type="hidden" name="source" value="Workshop ERP Software in UAE for Automotive &amp; Service Centers">
                            <input type="hidden" name="country" value="UAE">
                            <div class="mb-3">
                                <label class="form-label small fw-bold">Your Name</label>
                                <input type="text" name="name" class="form-control" placeholder="Tariq Mansoor" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label small fw-bold">Company / Establishment Name</label>
                                <input type="text" name="company_name" class="form-control" placeholder="Emirates Commercial Co." required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label small fw-bold">WhatsApp / Mobile Number</label>
                                <input type="tel" name="phone" class="form-control" placeholder="+971 5X XXX XXXX" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label small fw-bold">Target Emirate</label>
                                <select name="city" class="form-select" required>
                                    <option value="Dubai">Dubai (دبي)</option>
                                    <option value="Abu Dhabi">Abu Dhabi (أبوظبي)</option>
                                    <option value="Sharjah">Sharjah (الشارقة)</option>
                                    <option value="Ajman">Ajman (عجمان)</option>
                                    <option value="Ras Al Khaimah">Ras Al Khaimah (رأس الخيمة)</option>
                                    <option value="Fujairah">Fujairah (الفجيرة)</option>
                                    <option value="Umm Al Quwain">Umm Al Quwain (أم القيوين)</option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-uae-primary w-100 justify-content-center">
                                <i class="fa-solid fa-paper-plane me-2"></i>
                                <span>Get Free Consultation</span>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CORE MODULES -->
    <section class="uae-section bg-light-uae">
        <div class="container">
            <div class="text-center mb-5">
                <span class="section-badge-uae">System Architecture</span>
                <h2 class="section-title-uae">Core Capabilities & Functional Modules</h2>
                <p class="text-muted mx-auto" style="max-width: 700px;">Designed to streamline business processes, ensure UAE 5% VAT accuracy, organize corporate tax records, and maintain multi-warehouse visibility.</p>
            </div>

            <div class="row g-4">
                
                <div class="col-md-6 col-lg-4">
                    <div class="uae-card">
                        <div class="uae-card-icon"><i class="fa-solid fa-wrench"></i></div>
                        <h4 class="uae-trans" data-en="Vehicle Master &amp; VIN/Chassis Records" data-ar="Vehicle Master &amp; VIN/Chassis Records">Vehicle Master &amp; VIN/Chassis Records</h4>
                        <p class="uae-trans" data-en="Maintain complete customer vehicle profiles, license plate numbers, chassis/VIN records, and past service history." data-ar="Maintain complete customer vehicle profiles, license plate numbers, chassis/VIN records, and past service history.">Maintain complete customer vehicle profiles, license plate numbers, chassis/VIN records, and past service history.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="uae-card">
                        <div class="uae-card-icon"><i class="fa-solid fa-wrench"></i></div>
                        <h4 class="uae-trans" data-en="Digital Job Cards &amp; Status Tracking" data-ar="Digital Job Cards &amp; Status Tracking">Digital Job Cards &amp; Status Tracking</h4>
                        <p class="uae-trans" data-en="Create job cards detailing customer complaints, inspection checklists, required repairs, and job status (In-Progress / Completed)." data-ar="Create job cards detailing customer complaints, inspection checklists, required repairs, and job status (In-Progress / Completed).">Create job cards detailing customer complaints, inspection checklists, required repairs, and job status (In-Progress / Completed).</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="uae-card">
                        <div class="uae-card-icon"><i class="fa-solid fa-wrench"></i></div>
                        <h4 class="uae-trans" data-en="Spare Parts Inventory &amp; Counter Sales" data-ar="Spare Parts Inventory &amp; Counter Sales">Spare Parts Inventory &amp; Counter Sales</h4>
                        <p class="uae-trans" data-en="Track spare parts stock, engine oil, filters, and brake pads; issue parts directly to job cards or over-the-counter sales." data-ar="Track spare parts stock, engine oil, filters, and brake pads; issue parts directly to job cards or over-the-counter sales.">Track spare parts stock, engine oil, filters, and brake pads; issue parts directly to job cards or over-the-counter sales.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="uae-card">
                        <div class="uae-card-icon"><i class="fa-solid fa-wrench"></i></div>
                        <h4 class="uae-trans" data-en="Technician Time &amp; Labor Costing" data-ar="Technician Time &amp; Labor Costing">Technician Time &amp; Labor Costing</h4>
                        <p class="uae-trans" data-en="Assign jobs to technicians, track labor hours, and calculate mechanic productivity and commission." data-ar="Assign jobs to technicians, track labor hours, and calculate mechanic productivity and commission.">Assign jobs to technicians, track labor hours, and calculate mechanic productivity and commission.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="uae-card">
                        <div class="uae-card-icon"><i class="fa-solid fa-wrench"></i></div>
                        <h4 class="uae-trans" data-en="Customer Cost Estimation &amp; Approval" data-ar="Customer Cost Estimation &amp; Approval">Customer Cost Estimation &amp; Approval</h4>
                        <p class="uae-trans" data-en="Generate preliminary quotation estimates for parts and labor, sending WhatsApp approval links before initiating repair." data-ar="Generate preliminary quotation estimates for parts and labor, sending WhatsApp approval links before initiating repair.">Generate preliminary quotation estimates for parts and labor, sending WhatsApp approval links before initiating repair.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="uae-card">
                        <div class="uae-card-icon"><i class="fa-solid fa-wrench"></i></div>
                        <h4 class="uae-trans" data-en="Final Tax Invoicing &amp; 5% VAT" data-ar="Final Tax Invoicing &amp; 5% VAT">Final Tax Invoicing &amp; 5% VAT</h4>
                        <p class="uae-trans" data-en="Combined invoice itemizing parts supplied, labor charges, vehicle mileage, and 5% VAT with QR code receipt." data-ar="Combined invoice itemizing parts supplied, labor charges, vehicle mileage, and 5% VAT with QR code receipt.">Combined invoice itemizing parts supplied, labor charges, vehicle mileage, and 5% VAT with QR code receipt.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FISCAL COMPLIANCE SECTION -->
    <section class="uae-section bg-white">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <span class="section-badge-uae">UAE Business Localization</span>
                    <h2 class="section-title-uae">Bilingual Arabic/English, 5% VAT & Corporate Tax Records</h2>
                    <p class="text-muted" style="line-height: 1.8;">
                        Digify Soft Solutions delivers full compliance alignment for UAE enterprises, incorporating standard 5% VAT calculations, bilingual Arabic and English document printing, buyer Tax Registration Number (TRN) validation, structured e-invoicing data models, and corporate tax ledger organization.
                    </p>
                    <div class="d-flex flex-wrap gap-2 mt-3">
                        <span class="badge bg-warning bg-opacity-10 text-dark border border-warning p-2 px-3 fw-bold">✓ Arabic & English UI</span>
                        <span class="badge bg-warning bg-opacity-10 text-dark border border-warning p-2 px-3 fw-bold">✓ Standard 5% VAT</span>
                        <span class="badge bg-warning bg-opacity-10 text-dark border border-warning p-2 px-3 fw-bold">✓ 9% Corporate Tax Ledgers</span>
                        <span class="badge bg-warning bg-opacity-10 text-dark border border-warning p-2 px-3 fw-bold">✓ Structured QR Invoices</span>
                        <span class="badge bg-warning bg-opacity-10 text-dark border border-warning p-2 px-3 fw-bold">✓ Multi-Warehouse Sync</span>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="p-4 bg-light-uae rounded-4 border">
                        <h5 class="fw-bold text-dark mb-3"><i class="fa-solid fa-circle-question text-warning me-2"></i> Frequently Asked Question</h5>
                        <h6 class="fw-bold text-dark mb-2">Can customers review and approve repair cost estimates before work starts?</h6>
                        <p class="text-muted small mb-0" style="line-height: 1.7;">Yes. Workshops can generate digital job estimates itemizing parts and labor, which can be sent via WhatsApp or email for instant customer approval.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FINAL CTA -->
    <section class="py-5" style="background: linear-gradient(135deg, #09152b 0%, #112240 100%); color: #ffffff;">
        <div class="container text-center py-4">
            <h2 class="fw-bold mb-3">Deploy Workshop ERP Software in UAE for Automotive &amp; Service Centers</h2>
            <p class="mx-auto mb-4 text-white-50" style="max-width: 720px; font-size: 16px;">
                Centralize your operations with Digify's customizable cloud platform built for UAE businesses.
            </p>
            <div class="d-flex justify-content-center flex-wrap gap-3">
                <button type="button" class="btn btn-warning px-4 py-3 fw-bold text-dark rounded-pill" data-bs-toggle="modal" data-bs-target="#trialModal">
                    <i class="fa-solid fa-calendar-check me-2"></i> Request Live Demo
                </button>
                <a href="erp-software-uae.php" class="btn btn-outline-light px-4 py-3 fw-bold rounded-pill">
                    <i class="fa-solid fa-layer-group me-2"></i> Explore All UAE Verticals
                </a>
            </div>
        </div>
    </section>
</div>

<?php include('trial_modal.php'); ?>
<?php include(__DIR__ . '/../../footer.php'); ?>
