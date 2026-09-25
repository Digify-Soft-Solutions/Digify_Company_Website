<?php 
include_once('db.php');
include_once('fetch_meta.php');

$pageTitle = "Saudi VAT Accounting Software | 15% VAT & Financial Management";
$pageDescription = "Comprehensive Saudi VAT accounting software for 15% VAT calculation, monthly sales/purchase books, supplier ledgers, P&L, and balance sheets.";
$pageKeywords = "Saudi VAT & Financial Management Software, ERP software Saudi Arabia, enterprise ERP Saudi Arabia, ZATCA e-invoicing Saudi Arabia, Saudi 15% VAT, ERP Riyadh, ERP Jeddah, ERP Dammam, Digify Soft Solutions";
$pageCanonical = "https://www.digifysoft.in/saudi-vat-accounting-software";

include('top.php');
include('header.php');
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
                        <span>🇸🇦 Corporate Accounting &amp; Tax</span>
                    </div>
                    <h1>Saudi VAT &amp; Financial Management Software</h1>
                    <div class="sa-hero-sub">Centralized 15% VAT Accounting, Financial Statements &amp; Ledger Controls</div>
                    <p class="sa-hero-desc">Manage sales, purchases, expenses, customer transactions, and financial records through a centralized accounting environment designed to support Saudi business workflows and standard 15% VAT.</p>
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
                        <span class="badge bg-light text-dark border p-2 px-3 fw-bold me-2 mb-2"><i class="fa-solid fa-check text-success me-1"></i> Corporate Accounting Teams</span><span class="badge bg-light text-dark border p-2 px-3 fw-bold me-2 mb-2"><i class="fa-solid fa-check text-success me-1"></i> Trading Companies</span><span class="badge bg-light text-dark border p-2 px-3 fw-bold me-2 mb-2"><i class="fa-solid fa-check text-success me-1"></i> Manufacturers</span><span class="badge bg-light text-dark border p-2 px-3 fw-bold me-2 mb-2"><i class="fa-solid fa-check text-success me-1"></i> Contracting Groups</span><span class="badge bg-light text-dark border p-2 px-3 fw-bold me-2 mb-2"><i class="fa-solid fa-check text-success me-1"></i> Retailers</span><span class="badge bg-light text-dark border p-2 px-3 fw-bold me-2 mb-2"><i class="fa-solid fa-check text-success me-1"></i> Logistics Operators</span>
                    </div>
                </div>

                <div class="col-lg-5">
                    <div class="p-4 bg-white rounded-4 shadow-lg text-dark">
                        <h4 class="fw-bold text-success mb-2">Request Tailored Saudi Solution</h4>
                        <p class="small text-muted mb-3">Speak directly with our Saudi Arabia ERP implementation consultants.</p>
                        
                        <form action="send_mail.php" method="POST">
                            <input type="hidden" name="source" value="Saudi VAT &amp; Financial Management Software">
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
                        <div class="sa-card-icon"><i class="fa-solid fa-calculator"></i></div>
                        <h4 class="sa-trans" data-en="Automated 15% VAT Computation" data-ar="Automated 15% VAT Computation">Automated 15% VAT Computation</h4>
                        <p class="sa-trans" data-en="Accurate line-by-line VAT calculations for standard sales, capital goods purchases, input tax recovery, and exempt supplies." data-ar="Accurate line-by-line VAT calculations for standard sales, capital goods purchases, input tax recovery, and exempt supplies.">Accurate line-by-line VAT calculations for standard sales, capital goods purchases, input tax recovery, and exempt supplies.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="sa-card">
                        <div class="sa-card-icon"><i class="fa-solid fa-calculator"></i></div>
                        <h4 class="sa-trans" data-en="Monthly Sales &amp; Purchase Books" data-ar="Monthly Sales &amp; Purchase Books">Monthly Sales &amp; Purchase Books</h4>
                        <p class="sa-trans" data-en="Comprehensive sales ledgers and purchase books formatted for corporate tax accountants and internal audit review." data-ar="Comprehensive sales ledgers and purchase books formatted for corporate tax accountants and internal audit review.">Comprehensive sales ledgers and purchase books formatted for corporate tax accountants and internal audit review.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="sa-card">
                        <div class="sa-card-icon"><i class="fa-solid fa-calculator"></i></div>
                        <h4 class="sa-trans" data-en="Multi-Currency Foreign Exchange Ledgers" data-ar="Multi-Currency Foreign Exchange Ledgers">Multi-Currency Foreign Exchange Ledgers</h4>
                        <p class="sa-trans" data-en="Manage supplier invoices in USD, EUR, GBP, or AED with automatic SAR exchange rate conversions and realized forex gains/losses." data-ar="Manage supplier invoices in USD, EUR, GBP, or AED with automatic SAR exchange rate conversions and realized forex gains/losses.">Manage supplier invoices in USD, EUR, GBP, or AED with automatic SAR exchange rate conversions and realized forex gains/losses.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="sa-card">
                        <div class="sa-card-icon"><i class="fa-solid fa-calculator"></i></div>
                        <h4 class="sa-trans" data-en="Complete Financial Statements" data-ar="Complete Financial Statements">Complete Financial Statements</h4>
                        <p class="sa-trans" data-en="Real-time Profit &amp; Loss (P&amp;L), Balance Sheet, Trial Balance, and Cash Flow statements for single and multi-branch entities." data-ar="Real-time Profit &amp; Loss (P&amp;L), Balance Sheet, Trial Balance, and Cash Flow statements for single and multi-branch entities.">Real-time Profit &amp; Loss (P&amp;L), Balance Sheet, Trial Balance, and Cash Flow statements for single and multi-branch entities.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="sa-card">
                        <div class="sa-card-icon"><i class="fa-solid fa-calculator"></i></div>
                        <h4 class="sa-trans" data-en="Bank &amp; Cash Reconciliation" data-ar="Bank &amp; Cash Reconciliation">Bank &amp; Cash Reconciliation</h4>
                        <p class="sa-trans" data-en="Import bank statements, match incoming customer payments and outgoing supplier disbursements with audit-verified reconciliation." data-ar="Import bank statements, match incoming customer payments and outgoing supplier disbursements with audit-verified reconciliation.">Import bank statements, match incoming customer payments and outgoing supplier disbursements with audit-verified reconciliation.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="sa-card">
                        <div class="sa-card-icon"><i class="fa-solid fa-calculator"></i></div>
                        <h4 class="sa-trans" data-en="Cost Center &amp; Branch Accounting" data-ar="Cost Center &amp; Branch Accounting">Cost Center &amp; Branch Accounting</h4>
                        <p class="sa-trans" data-en="Allocate revenues and overhead expenses across specific projects, branches, divisions, and business departments." data-ar="Allocate revenues and overhead expenses across specific projects, branches, divisions, and business departments.">Allocate revenues and overhead expenses across specific projects, branches, divisions, and business departments.</p>
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
                        <h6 class="fw-bold text-dark mb-2">Does the software generate reports for quarterly VAT filings?</h6>
                        <p class="text-muted small mb-0" style="line-height: 1.7;">Yes. Digify provides summarized VAT return reports classifying standard rated sales, zero-rated exports, input tax on purchases, and net VAT payable/refundable.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FINAL CTA -->
    <section class="py-5" style="background: linear-gradient(135deg, #064e3b 0%, #062b1b 100%); color: #ffffff;">
        <div class="container text-center py-4">
            <h2 class="fw-bold mb-3">Deploy Saudi VAT &amp; Financial Management Software</h2>
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
<?php include('footer.php'); ?>
