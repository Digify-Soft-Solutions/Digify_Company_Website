<?php 
include_once(__DIR__ . '/../../db.php');
include_once(__DIR__ . '/../../fetch_meta.php');

$pageTitle = "Pharmacy ERP & POS Software in Saudi Arabia | Batch & Expiry";
$pageDescription = "Specialized Pharmacy ERP and POS software in Saudi Arabia for retail pharmacies and medical supply distributors with batch/expiry tracking and supplier purchasing.";
$pageKeywords = "Pharmacy ERP Software in Saudi Arabia, ERP software Saudi Arabia, enterprise ERP Saudi Arabia, ZATCA e-invoicing Saudi Arabia, Saudi 15% VAT, ERP Riyadh, ERP Jeddah, ERP Dammam, Digify Soft Solutions";
$pageCanonical = "https://www.digifysoft.in/pharmacy-erp-software-saudi-arabia";

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
    font-size: 38px;
    font-weight: 900;
    line-height: 1.25;
    margin-bottom: 18px;
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
.sa-section { padding: 75px 0; }
.bg-light-sa { background-color: #f8fafc; }
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
.section-title-sa {
    font-size: 34px;
    font-weight: 900;
    color: #064e3b;
    line-height: 1.3;
    margin-bottom: 16px;
    letter-spacing: -0.5px;
}
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
    font-size: 18px;
    font-weight: 800;
    color: #064e3b;
    margin-bottom: 10px;
}
.sa-card p {
    font-size: 14px;
    color: #64748b;
    line-height: 1.6;
    margin-bottom: 0;
}
</style>

<div class="sa-page-wrapper">
    <!-- HERO -->
    <section class="sa-hero">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7 mb-4 mb-lg-0">
                    <div class="sa-hero-badge">
                        <span>🇸🇦 Pharmacy &amp; Healthcare Retail</span>
                    </div>
                    <h1>Pharmacy ERP Software in Saudi Arabia</h1>
                    <div class="sa-hero-sub">Batch / Lot Numbers, Expiry Date Alerts, Fast POS &amp; Supplier Purchases</div>
                    <p class="sa-hero-desc">Manage retail pharmacies, medical supply distributors, and healthcare clinics across Saudi Arabia with strict batch/expiry tracking, barcode checkout, and purchase order management.</p>
                    <div class="d-flex flex-wrap gap-3 mb-4">
                        <a href="javascript:void(0)" class="btn-sa-primary" data-bs-toggle="modal" data-bs-target="#trialModal">
                            <i class="fa-solid fa-calendar-check"></i>
                            <span>Schedule Saudi Demo</span>
                        </a>
                        <a href="erp-software-saudi-arabia.php" class="btn-sa-outline">
                            <i class="fa-solid fa-arrow-left"></i>
                            <span>Saudi Master ERP Suite</span>
                        </a>
                    </div>
                    <div class="pt-2">
                        <div class="small text-white-50 mb-2 fw-bold text-uppercase">Target Sectors & Applications:</div>
                        <span class="badge bg-light text-dark border p-2 px-3 fw-bold me-2 mb-2"><i class="fa-solid fa-check text-success me-1"></i> Retail Pharmacies</span><span class="badge bg-light text-dark border p-2 px-3 fw-bold me-2 mb-2"><i class="fa-solid fa-check text-success me-1"></i> Pharmacy Chains</span><span class="badge bg-light text-dark border p-2 px-3 fw-bold me-2 mb-2"><i class="fa-solid fa-check text-success me-1"></i> Medical Supply Distributors</span><span class="badge bg-light text-dark border p-2 px-3 fw-bold me-2 mb-2"><i class="fa-solid fa-check text-success me-1"></i> Clinic Dispensaries</span><span class="badge bg-light text-dark border p-2 px-3 fw-bold me-2 mb-2"><i class="fa-solid fa-check text-success me-1"></i> Veterinary Pharmacies</span>
                    </div>
                </div>

                <div class="col-lg-5">
                    <div class="p-4 bg-white rounded-4 shadow-lg text-dark">
                        <h4 class="fw-bold text-success mb-2">Request Tailored Saudi Solution</h4>
                        <p class="small text-muted mb-3">Speak directly with our Saudi Arabia ERP implementation consultants.</p>
                        
                        <form action="send_mail.php" method="POST">
                            <input type="hidden" name="source" value="Pharmacy ERP Software in Saudi Arabia">
                            <input type="hidden" name="country" value="Saudi Arabia">
                            <div class="mb-3">
                                <label class="form-label small fw-bold">Your Name</label>
                                <input type="text" name="name" class="form-control" placeholder="Abdullah Al-Ghamdi" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label small fw-bold">Company / Establishment Name</label>
                                <input type="text" name="company_name" class="form-control" placeholder="Saudi Enterprise Co." required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label small fw-bold">WhatsApp / Mobile Number</label>
                                <input type="tel" name="phone" class="form-control" placeholder="+966 5X XXX XXXX" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label small fw-bold">Target City</label>
                                <select name="city" class="form-select" required>
                                    <option value="Riyadh">Riyadh (الرياض)</option>
                                    <option value="Jeddah">Jeddah (جدة)</option>
                                    <option value="Dammam">Dammam (الدمام)</option>
                                    <option value="Al-Khobar">Al-Khobar (الخبر)</option>
                                    <option value="Jubail">Jubail (الجبيل)</option>
                                    <option value="Other">Other Saudi City</option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-sa-primary w-100 justify-content-center">
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
    <section class="sa-section bg-light-sa">
        <div class="container">
            <div class="text-center mb-5">
                <span class="section-badge-sa">System Capabilities</span>
                <h2 class="section-title-sa">Key Functional Modules & Architecture</h2>
                <p class="text-muted mx-auto" style="max-width: 700px;">Engineered to streamline business processes, ensure ZATCA e-invoicing readiness, and maintain 15% VAT compliance across Saudi Arabia.</p>
            </div>

            <div class="row g-4">
                
                <div class="col-md-6 col-lg-4">
                    <div class="sa-card">
                        <div class="sa-card-icon"><i class="fa-solid fa-pills"></i></div>
                        <h4 class="sa-trans" data-en="Batch &amp; Expiry Date Management" data-ar="Batch &amp; Expiry Date Management">Batch &amp; Expiry Date Management</h4>
                        <p class="sa-trans" data-en="Strict First-Expiry-First-Out (FEFO) dispensing to prevent expired medication sales and minimize inventory loss." data-ar="Strict First-Expiry-First-Out (FEFO) dispensing to prevent expired medication sales and minimize inventory loss.">Strict First-Expiry-First-Out (FEFO) dispensing to prevent expired medication sales and minimize inventory loss.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="sa-card">
                        <div class="sa-card-icon"><i class="fa-solid fa-pills"></i></div>
                        <h4 class="sa-trans" data-en="Fast Pharmacy Counter POS" data-ar="Fast Pharmacy Counter POS">Fast Pharmacy Counter POS</h4>
                        <p class="sa-trans" data-en="Quick barcode scanning of medicine packs, alternative drug lookups, and instant thermal receipt printing." data-ar="Quick barcode scanning of medicine packs, alternative drug lookups, and instant thermal receipt printing.">Quick barcode scanning of medicine packs, alternative drug lookups, and instant thermal receipt printing.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="sa-card">
                        <div class="sa-card-icon"><i class="fa-solid fa-pills"></i></div>
                        <h4 class="sa-trans" data-en="Pharma Supplier Purchase Orders" data-ar="Pharma Supplier Purchase Orders">Pharma Supplier Purchase Orders</h4>
                        <p class="sa-trans" data-en="Automated reorders from approved pharmaceutical distributors with bonus pack handling and discount terms." data-ar="Automated reorders from approved pharmaceutical distributors with bonus pack handling and discount terms.">Automated reorders from approved pharmaceutical distributors with bonus pack handling and discount terms.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="sa-card">
                        <div class="sa-card-icon"><i class="fa-solid fa-pills"></i></div>
                        <h4 class="sa-trans" data-en="Near-Expiry Stock Alerts" data-ar="Near-Expiry Stock Alerts">Near-Expiry Stock Alerts</h4>
                        <p class="sa-trans" data-en="Automated notifications for items nearing expiration (30/60/90 days) to facilitate supplier returns or discounts." data-ar="Automated notifications for items nearing expiration (30/60/90 days) to facilitate supplier returns or discounts.">Automated notifications for items nearing expiration (30/60/90 days) to facilitate supplier returns or discounts.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="sa-card">
                        <div class="sa-card-icon"><i class="fa-solid fa-pills"></i></div>
                        <h4 class="sa-trans" data-en="Controlled Substance Records" data-ar="Controlled Substance Records">Controlled Substance Records</h4>
                        <p class="sa-trans" data-en="Detailed dispensing logs, doctor prescription records, and customer identification archiving." data-ar="Detailed dispensing logs, doctor prescription records, and customer identification archiving.">Detailed dispensing logs, doctor prescription records, and customer identification archiving.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="sa-card">
                        <div class="sa-card-icon"><i class="fa-solid fa-pills"></i></div>
                        <h4 class="sa-trans" data-en="Multi-Branch Pharmacy Sync" data-ar="Multi-Branch Pharmacy Sync">Multi-Branch Pharmacy Sync</h4>
                        <p class="sa-trans" data-en="Check medicine stock availability across nearby chain branches to satisfy customer prescriptions." data-ar="Check medicine stock availability across nearby chain branches to satisfy customer prescriptions.">Check medicine stock availability across nearby chain branches to satisfy customer prescriptions.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FISCAL COMPLIANCE & ZATCA SECTION -->
    <section class="sa-section bg-white">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <span class="section-badge-sa">Saudi Business Localization</span>
                    <h2 class="section-title-sa">Arabic-Ready, 15% VAT & ZATCA Invoicing Architecture</h2>
                    <p class="text-muted" style="line-height: 1.8;">
                        Digify Soft Solutions delivers full compliance alignment for Saudi businesses, incorporating standard 15% VAT calculations, bilingual Arabic and English document printing, buyer Tax Identification Number (TIN) validation, and cryptographic QR code generation.
                    </p>
                    <div class="d-flex flex-wrap gap-2 mt-3">
                        <span class="badge bg-success bg-opacity-10 text-success border border-success p-2 px-3 fw-bold">✓ Arabic & English UI</span>
                        <span class="badge bg-success bg-opacity-10 text-success border border-success p-2 px-3 fw-bold">✓ Standard 15% VAT</span>
                        <span class="badge bg-success bg-opacity-10 text-success border border-success p-2 px-3 fw-bold">✓ Structured QR Invoices</span>
                        <span class="badge bg-success bg-opacity-10 text-success border border-success p-2 px-3 fw-bold">✓ Multi-Branch Ready</span>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="p-4 bg-light-sa rounded-4 border">
                        <h5 class="fw-bold text-success mb-3"><i class="fa-solid fa-circle-question me-2"></i> Frequently Asked Question</h5>
                        <h6 class="fw-bold text-dark mb-2">How does the system ensure near-expiry medicines are identified in time?</h6>
                        <p class="text-muted small mb-0" style="line-height: 1.7;">Digify includes automated near-expiry dashboard reports and alerts, highlighting all batches reaching critical dates so staff can initiate supplier return claims.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FINAL CTA -->
    <section class="py-5" style="background: linear-gradient(135deg, #064e3b 0%, #062b1b 100%); color: #ffffff;">
        <div class="container text-center py-4">
            <h2 class="fw-bold mb-3">Deploy Pharmacy ERP Software in Saudi Arabia</h2>
            <p class="mx-auto mb-4 text-white-50" style="max-width: 720px; font-size: 16px;">
                Centralize your operations with Digify's localized cloud platform built for Saudi enterprises.
            </p>
            <div class="d-flex justify-content-center flex-wrap gap-3">
                <button type="button" class="btn btn-light px-4 py-3 fw-bold text-success rounded-pill" data-bs-toggle="modal" data-bs-target="#trialModal">
                    <i class="fa-solid fa-calendar-check me-2"></i> Request Live Demo
                </button>
                <a href="erp-software-saudi-arabia.php" class="btn btn-outline-light px-4 py-3 fw-bold rounded-pill">
                    <i class="fa-solid fa-layer-group me-2"></i> Explore All Saudi Verticals
                </a>
            </div>
        </div>
    </section>
</div>

<?php include('trial_modal.php'); ?>
<?php include(__DIR__ . '/../../footer.php'); ?>
