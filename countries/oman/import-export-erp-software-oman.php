<?php 
include_once(__DIR__ . '/../../db.php');
include_once(__DIR__ . '/../../fetch_meta.php');

$pageTitle = "Import & Export ERP Software in Oman | Sohar & Salalah Port Shipments";
$pageDescription = "Comprehensive Import & Export ERP software in Oman for trading companies, customs clearance, container logistics, landed cost calculation, and forex accounting.";
$pageKeywords = "Import & Export ERP Software in Oman, Sohar & Salalah Port Shipments, ERP software Oman, Oman VAT, Fawtara ERP, Oman Tax Authority, Digify ERP";
$pageCanonical = "https://www.digifysoft.in/import-export-erp-software-oman";

include(__DIR__ . '/../../top.php');
include(__DIR__ . '/../../header.php');
?>

<style>
/* Oman Vertical Suite Design System */
.om-page-wrapper {
    font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
    color: #1e293b;
    overflow-x: hidden;
}
.om-hero {
    background: linear-gradient(135deg, #091b2e 0%, #0d3824 50%, #2a1114 100%);
    color: #ffffff;
    padding: 75px 0 85px;
    position: relative;
    overflow: hidden;
    border-bottom: 4px solid #c53030;
}
.om-hero::before {
    content: '';
    position: absolute;
    top: -15%;
    right: -10%;
    width: 650px;
    height: 650px;
    background: radial-gradient(circle, rgba(197, 48, 48, 0.2) 0%, rgba(13, 148, 80, 0.15) 50%, rgba(0, 0, 0, 0) 75%);
    border-radius: 50%;
    pointer-events: none;
}
.om-hero-badge {
    background: rgba(197, 48, 48, 0.2);
    border: 1px solid rgba(248, 113, 113, 0.45);
    color: #fca5a5;
    font-size: 13px;
    font-weight: 700;
    padding: 6px 16px;
    border-radius: 30px;
    display: inline-flex;
    align-items: center;
    gap: 8px;
    margin-bottom: 18px;
}
.om-hero h1 {
    font-size: 38px;
    font-weight: 900;
    line-height: 1.25;
    margin-bottom: 15px;
    letter-spacing: -0.5px;
}
.om-hero-sub {
    font-size: 17px;
    font-weight: 600;
    color: #fde047;
    margin-bottom: 15px;
    line-height: 1.5;
}
.om-hero-desc {
    font-size: 15px;
    line-height: 1.7;
    color: rgba(255, 255, 255, 0.88);
    max-width: 680px;
    margin-bottom: 25px;
}
.btn-om-primary {
    background: linear-gradient(135deg, #c53030 0%, #991b1b 100%);
    color: #ffffff;
    font-weight: 700;
    padding: 13px 28px;
    border-radius: 30px;
    border: none;
    display: inline-flex;
    align-items: center;
    gap: 8px;
    transition: all 0.3s ease;
    text-decoration: none;
    box-shadow: 0 10px 20px -5px rgba(197, 48, 48, 0.4);
}
.btn-om-primary:hover {
    background: linear-gradient(135deg, #991b1b 0%, #7f1d1d 100%);
    color: #ffffff;
    transform: translateY(-2px);
    box-shadow: 0 15px 25px -5px rgba(197, 48, 48, 0.5);
}
.btn-om-outline {
    background: rgba(255, 255, 255, 0.1);
    color: #ffffff;
    border: 1px solid rgba(255, 255, 255, 0.3);
    font-weight: 600;
    padding: 13px 26px;
    border-radius: 30px;
    display: inline-flex;
    align-items: center;
    gap: 8px;
    transition: all 0.3s ease;
    text-decoration: none;
}
.btn-om-outline:hover {
    background: rgba(255, 255, 255, 0.2);
    color: #ffffff;
    border-color: rgba(255, 255, 255, 0.6);
}
.om-section {
    padding: 70px 0;
}
.bg-light-om {
    background: #f8fafc;
}
.section-badge-om {
    background: #fee2e2;
    color: #c53030;
    font-size: 12px;
    font-weight: 800;
    text-transform: uppercase;
    letter-spacing: 1px;
    padding: 6px 14px;
    border-radius: 20px;
    display: inline-block;
    margin-bottom: 12px;
}
.section-title-om {
    font-size: 32px;
    font-weight: 800;
    color: #0f172a;
    margin-bottom: 15px;
}
.om-card {
    background: #ffffff;
    border: 1px solid #e2e8f0;
    border-radius: 16px;
    padding: 28px 24px;
    transition: all 0.3s ease;
}
.om-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 20px 30px -10px rgba(0, 0, 0, 0.08);
    border-color: #c53030;
}
.om-card-icon {
    width: 52px;
    height: 52px;
    border-radius: 14px;
    background: #fee2e2;
    color: #c53030;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 22px;
    margin-bottom: 18px;
}
.om-card h4 {
    font-size: 18px;
    font-weight: 800;
    color: #0f172a;
    margin-bottom: 10px;
}
.om-card p {
    font-size: 14px;
    color: #64748b;
    line-height: 1.6;
    margin-bottom: 0;
}
</style>

<div class="om-page-wrapper">
    <!-- HERO -->
    <section class="om-hero">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7 mb-4 mb-lg-0">
                    <div class="om-hero-badge">
                        <span>🇴🇲 Global Trade &amp; Port Logistics</span>
                    </div>
                    <h1>Import &amp; Export ERP Software in Oman</h1>
                    <div class="om-hero-sub">Customs Clearance, Landed Costs, Container Tracking &amp; Multi-Currency</div>
                    <p class="om-hero-desc">Master international supply chains operating through Sohar Port, Salalah Port, and Muscat Airport. Digify Import/Export ERP automates landed cost allocation, multi-currency accounting, commercial invoices, and customs paperwork.</p>
                    <div class="d-flex flex-wrap gap-3 mb-4">
                        <a href="javascript:void(0)" class="btn-om-primary" data-bs-toggle="modal" data-bs-target="#trialModal">
                            <i class="fa-solid fa-calendar-check"></i>
                            <span>Schedule Oman Demo</span>
                        </a>
                        <a href="erp-software-oman.php" class="btn-om-outline">
                            <i class="fa-solid fa-arrow-left"></i>
                            <span>Oman Master ERP Suite</span>
                        </a>
                    </div>
                    <div class="pt-2">
                        <div class="small text-white-50 mb-2 fw-bold text-uppercase">Target Sectors & Applications:</div>
                        <div class="d-flex flex-wrap gap-2"><span class="badge bg-white bg-opacity-15 text-white border border-light border-opacity-25 px-3 py-2 fw-semibold"><i class="fa-solid fa-check text-warning me-1"></i> Import/Export Trading Firms</span><span class="badge bg-white bg-opacity-15 text-white border border-light border-opacity-25 px-3 py-2 fw-semibold"><i class="fa-solid fa-check text-warning me-1"></i> Customs Clearance Agents</span><span class="badge bg-white bg-opacity-15 text-white border border-light border-opacity-25 px-3 py-2 fw-semibold"><i class="fa-solid fa-check text-warning me-1"></i> Global Commodity Traders</span><span class="badge bg-white bg-opacity-15 text-white border border-light border-opacity-25 px-3 py-2 fw-semibold"><i class="fa-solid fa-check text-warning me-1"></i> Machinery Importers</span><span class="badge bg-white bg-opacity-15 text-white border border-light border-opacity-25 px-3 py-2 fw-semibold"><i class="fa-solid fa-check text-warning me-1"></i> Consumer Goods Exporters</span><span class="badge bg-white bg-opacity-15 text-white border border-light border-opacity-25 px-3 py-2 fw-semibold"><i class="fa-solid fa-check text-warning me-1"></i> Freezone Operators</span></div>
                    </div>
                </div>

                <div class="col-lg-5">
                    <div class="p-4 bg-white rounded-4 shadow-lg text-dark">
                        <h4 class="fw-bold text-dark mb-2">Request Tailored Oman Solution</h4>
                        <p class="small text-muted mb-3">Speak directly with our Oman ERP implementation consultants.</p>
                        
                        <form action="send_mail.php" method="POST">
                            <input type="hidden" name="source" value="Import &amp; Export ERP Software in Oman">
                            <input type="hidden" name="country" value="Oman">
                            <div class="mb-3">
                                <label class="form-label small fw-bold">Your Name / الاسم</label>
                                <input type="text" name="name" class="form-control" placeholder="Salim Al-Harthy" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label small fw-bold">Company Name / اسم الشركة</label>
                                <input type="text" name="company_name" class="form-control" placeholder="Muscat Commercial LLC" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label small fw-bold">Phone / WhatsApp / الهاتف</label>
                                <input type="tel" name="phone" class="form-control" placeholder="+968 9X XXX XXX" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label small fw-bold">Governorate / Region (المحافظة)</label>
                                <select name="city" class="form-select" required>
                                    <option value="Muscat">Muscat (مسقط)</option>
                                    <option value="Sohar">Sohar (صحار)</option>
                                    <option value="Salalah">Salalah (صلالة)</option>
                                    <option value="Nizwa">Nizwa (نزوى)</option>
                                    <option value="Duqm">Duqm SEZ (الدقم)</option>
                                    <option value="Sur">Sur (صور)</option>
                                    <option value="Buraimi">Al Buraimi (البريمي)</option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-om-primary w-100 justify-content-center">
                                <i class="fa-solid fa-paper-plane me-2"></i>
                                <span>Get Free Consultation (طلب استشارة)</span>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CORE MODULES -->
    <section class="om-section bg-light-om">
        <div class="container">
            <div class="text-center mb-5">
                <span class="section-badge-om">System Architecture</span>
                <h2 class="section-title-om">Core Capabilities & Functional Modules</h2>
                <p class="text-muted mx-auto" style="max-width: 700px;">Designed to streamline business processes, ensure Oman 5% VAT accuracy, organize Fawtara e-invoicing records, and maintain multi-warehouse visibility.</p>
            </div>

            <div class="row g-4">
                
                <div class="col-md-6 col-lg-4">
                    <div class="om-card h-100">
                        <div class="om-card-icon">
                            <i class="fa-solid fa-ship"></i>
                        </div>
                        <h4>Complete Landed Cost Computation</h4>
                        <p>Apportion ocean freight, terminal handling charges (THC), Omani customs duties, clearing fees, and inland transport into item unit costs.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="om-card h-100">
                        <div class="om-card-icon">
                            <i class="fa-solid fa-ship"></i>
                        </div>
                        <h4>Commercial Invoices &amp; International Packing Lists</h4>
                        <p>Generate export documentation in USD, EUR, or AED including commercial invoices, certificates of origin, and packing declarations.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="om-card h-100">
                        <div class="om-card-icon">
                            <i class="fa-solid fa-ship"></i>
                        </div>
                        <h4>Multi-Currency Forex Gain/Loss Accounting</h4>
                        <p>Track currency fluctuations between purchase order booking, goods receipt date, and final foreign currency bank settlement.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="om-card h-100">
                        <div class="om-card-icon">
                            <i class="fa-solid fa-ship"></i>
                        </div>
                        <h4>Container &amp; Bill of Lading (B/L) Tracking</h4>
                        <p>Link purchase orders to specific container numbers, vessel names, ETA schedules, and demurrage detention risk windows.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="om-card h-100">
                        <div class="om-card-icon">
                            <i class="fa-solid fa-ship"></i>
                        </div>
                        <h4>Free Zone &amp; Bonded Yard Inventory</h4>
                        <p>Maintain specialized inventory ledgers for bonded warehouses and free zones in Sohar, Salalah, and Duqm.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="om-card h-100">
                        <div class="om-card-icon">
                            <i class="fa-solid fa-ship"></i>
                        </div>
                        <h4>Oman 5% VAT &amp; Zero-Rated Export Filings</h4>
                        <p>Correctly record 0% VAT on international export sales and recover import VAT paid at customs entry points.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FISCAL COMPLIANCE SECTION -->
    <section class="om-section bg-white">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <span class="section-badge-om">Oman Business Localization</span>
                    <h2 class="section-title-om">Bilingual Arabic/English, 5% VAT & Fawtara Readiness</h2>
                    <p class="text-muted" style="line-height: 1.8;">
                        Digify Soft Solutions delivers compliance alignment for Omani SMEs and trading enterprises, incorporating standard 5% VAT calculations, bilingual Arabic and English document printing, customer Tax ID validation, structured electronic invoice records, and multi-warehouse sync.
                    </p>
                    <div class="d-flex flex-wrap gap-2 mt-3">
                        <span class="badge bg-danger bg-opacity-10 text-danger border border-danger p-2 px-3 fw-bold">✓ Arabic & English UI</span>
                        <span class="badge bg-danger bg-opacity-10 text-danger border border-danger p-2 px-3 fw-bold">✓ Standard 5% VAT</span>
                        <span class="badge bg-danger bg-opacity-10 text-danger border border-danger p-2 px-3 fw-bold">✓ Fawtara-Ready Data</span>
                        <span class="badge bg-danger bg-opacity-10 text-danger border border-danger p-2 px-3 fw-bold">✓ Tax ID & CR Verification</span>
                        <span class="badge bg-danger bg-opacity-10 text-danger border border-danger p-2 px-3 fw-bold">✓ Multi-Warehouse Sync</span>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="p-4 bg-light-om rounded-4 border">
                        <h5 class="fw-bold text-dark mb-3"><i class="fa-solid fa-circle-question text-danger me-2"></i> Frequently Asked Question</h5>
                        <h6 class="fw-bold text-dark mb-2">How does Digify allocate ocean freight and customs duties to imported product costs in Oman?</h6>
                        <p class="text-muted small mb-0" style="line-height: 1.7;">You can allocate landing expenses across shipment items based on weight, volume, or invoice value, giving you exact gross margin calculations for every product in OMR.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FINAL CTA -->
    <section class="py-5" style="background: linear-gradient(135deg, #091b2e 0%, #0d3824 100%); color: #ffffff;">
        <div class="container text-center py-4">
            <h2 class="fw-bold mb-3">Deploy Import &amp; Export ERP Software in Oman</h2>
            <p class="mx-auto mb-4 text-white-50" style="max-width: 720px; font-size: 16px;">
                Centralize your operations with Digify's customizable cloud platform built for Oman businesses.
            </p>
            <div class="d-flex justify-content-center flex-wrap gap-3">
                <button type="button" class="btn btn-danger px-4 py-3 fw-bold rounded-pill" data-bs-toggle="modal" data-bs-target="#trialModal">
                    <i class="fa-solid fa-calendar-check me-2"></i> Request Live Demo
                </button>
                <a href="erp-software-oman.php" class="btn btn-outline-light px-4 py-3 fw-bold rounded-pill">
                    <i class="fa-solid fa-layer-group me-2"></i> Explore All Oman Verticals
                </a>
            </div>
        </div>
    </section>
</div>

<?php include('trial_modal.php'); ?>
<?php include(__DIR__ . '/../../footer.php'); ?>
