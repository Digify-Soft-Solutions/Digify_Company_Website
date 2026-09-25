<?php 
include_once(__DIR__ . '/../../db.php');
include_once(__DIR__ . '/../../fetch_meta.php');

$pageTitle = "Electronics & Mobile Phone ERP Software in Thailand | IMEI & Serial Tracking";
$pageDescription = "Modern Electronics & Mobile Shop ERP software in Thailand for smartphone retailers, laptop dealers, gadget stores, and repair counters with IMEI tracking.";
$pageKeywords = "Electronics & Mobile Phone ERP Software in Thailand, IMEI & Serial Tracking, ERP software Thailand, Thailand VAT, e-Tax Invoice, BOI Thailand, Digify ERP";
$pageCanonical = "https://www.digifysoft.in/electronics-mobile-erp-software-thailand";

include(__DIR__ . '/../../top.php');
include(__DIR__ . '/../../header.php');
?>

<style>
/* Thailand Vertical Suite Design System */
.th-page-wrapper {
    font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
    color: #1e293b;
    overflow-x: hidden;
}
.th-hero {
    background: linear-gradient(135deg, #091a2e 0%, #1e3a5f 50%, #2b1219 100%);
    color: #ffffff;
    padding: 75px 0 85px;
    position: relative;
    overflow: hidden;
    border-bottom: 4px solid #ef4444;
}
.th-hero::before {
    content: '';
    position: absolute;
    top: -15%;
    right: -10%;
    width: 650px;
    height: 650px;
    background: radial-gradient(circle, rgba(239, 68, 68, 0.2) 0%, rgba(59, 130, 246, 0.15) 50%, rgba(0, 0, 0, 0) 75%);
    border-radius: 50%;
    pointer-events: none;
}
.th-hero-badge {
    background: rgba(239, 68, 68, 0.18);
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
.th-hero h1 {
    font-size: 38px;
    font-weight: 900;
    line-height: 1.25;
    margin-bottom: 15px;
    letter-spacing: -0.5px;
}
.th-hero-sub {
    font-size: 17px;
    font-weight: 600;
    color: #fde047;
    margin-bottom: 15px;
    line-height: 1.5;
}
.th-hero-desc {
    font-size: 15px;
    line-height: 1.7;
    color: rgba(255, 255, 255, 0.88);
    max-width: 680px;
    margin-bottom: 25px;
}
.btn-th-primary {
    background: linear-gradient(135deg, #ef4444 0%, #dc2626 100%);
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
    box-shadow: 0 10px 20px -5px rgba(239, 68, 68, 0.4);
}
.btn-th-primary:hover {
    background: linear-gradient(135deg, #dc2626 0%, #b91c1c 100%);
    color: #ffffff;
    transform: translateY(-2px);
    box-shadow: 0 15px 25px -5px rgba(239, 68, 68, 0.5);
}
.btn-th-outline {
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
.btn-th-outline:hover {
    background: rgba(255, 255, 255, 0.2);
    color: #ffffff;
    border-color: rgba(255, 255, 255, 0.6);
}
.th-section {
    padding: 70px 0;
}
.bg-light-th {
    background: #f8fafc;
}
.section-badge-th {
    background: #fee2e2;
    color: #dc2626;
    font-size: 12px;
    font-weight: 800;
    text-transform: uppercase;
    letter-spacing: 1px;
    padding: 6px 14px;
    border-radius: 20px;
    display: inline-block;
    margin-bottom: 12px;
}
.section-title-th {
    font-size: 32px;
    font-weight: 800;
    color: #0f172a;
    margin-bottom: 15px;
}
.th-card {
    background: #ffffff;
    border: 1px solid #e2e8f0;
    border-radius: 16px;
    padding: 28px 24px;
    transition: all 0.3s ease;
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
    font-size: 18px;
    font-weight: 800;
    color: #0f172a;
    margin-bottom: 10px;
}
.th-card p {
    font-size: 14px;
    color: #64748b;
    line-height: 1.6;
    margin-bottom: 0;
}
</style>

<div class="th-page-wrapper">
    <!-- HERO -->
    <section class="th-hero">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7 mb-4 mb-lg-0">
                    <div class="th-hero-badge">
                        <span>🇹🇭 Mobile &amp; Consumer Tech Retail</span>
                    </div>
                    <h1>Electronics &amp; Mobile Phone ERP Software in Thailand</h1>
                    <div class="th-hero-sub">IMEI Serial Tracking, Brand Warranty, Accessory POS &amp; Repair Desk</div>
                    <p class="th-hero-desc">Manage fast-moving smartphones, laptops, audio gadgets, and accessories across Thailand&#039;s tech malls (MBK, Fortune Town, Pantip) with Digify Mobile ERP.</p>
                    <div class="d-flex flex-wrap gap-3 mb-4">
                        <a href="javascript:void(0)" class="btn-th-primary" data-bs-toggle="modal" data-bs-target="#trialModal">
                            <i class="fa-solid fa-calendar-check"></i>
                            <span>Request Thailand Demo</span>
                        </a>
                        <a href="erp-software-thailand.php" class="btn-th-outline">
                            <i class="fa-solid fa-arrow-left"></i>
                            <span>Thailand Master Suite</span>
                        </a>
                    </div>
                    <div class="pt-2">
                        <div class="small text-white-50 mb-2 fw-bold text-uppercase">Target Sectors & Applications:</div>
                        <div class="d-flex flex-wrap gap-2"><span class="badge bg-white bg-opacity-15 text-white border border-light border-opacity-25 px-3 py-2 fw-semibold"><i class="fa-solid fa-check text-warning me-1"></i> Smartphone Retail Stores</span><span class="badge bg-white bg-opacity-15 text-white border border-light border-opacity-25 px-3 py-2 fw-semibold"><i class="fa-solid fa-check text-warning me-1"></i> Laptop &amp; Computer Dealers</span><span class="badge bg-white bg-opacity-15 text-white border border-light border-opacity-25 px-3 py-2 fw-semibold"><i class="fa-solid fa-check text-warning me-1"></i> Audio &amp; Gaming Gadget Stores</span><span class="badge bg-white bg-opacity-15 text-white border border-light border-opacity-25 px-3 py-2 fw-semibold"><i class="fa-solid fa-check text-warning me-1"></i> Mobile Accessories Chains</span><span class="badge bg-white bg-opacity-15 text-white border border-light border-opacity-25 px-3 py-2 fw-semibold"><i class="fa-solid fa-check text-warning me-1"></i> Mobile Repair Workshops</span><span class="badge bg-white bg-opacity-15 text-white border border-light border-opacity-25 px-3 py-2 fw-semibold"><i class="fa-solid fa-check text-warning me-1"></i> Electronics Megastores</span></div>
                    </div>
                </div>

                <div class="col-lg-5">
                    <div class="p-4 bg-white rounded-4 shadow-lg text-dark">
                        <h4 class="fw-bold text-dark mb-2">Request Tailored Thailand ERP</h4>
                        <p class="small text-muted mb-3">Consult directly with our Thailand business software specialists.</p>
                        
                        <form action="send_mail.php" method="POST">
                            <input type="hidden" name="source" value="Electronics &amp; Mobile Phone ERP Software in Thailand">
                            <input type="hidden" name="country" value="Thailand">
                            <div class="mb-3">
                                <label class="form-label small fw-bold">Your Name / ชื่อของคุณ</label>
                                <input type="text" name="name" class="form-control" placeholder="Somchai Prasert" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label small fw-bold">Company Name / ชื่อบริษัท</label>
                                <input type="text" name="company_name" class="form-control" placeholder="Siam Enterprise Co., Ltd." required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label small fw-bold">Phone / WhatsApp / Line</label>
                                <input type="tel" name="phone" class="form-control" placeholder="+66 8X XXX XXXX" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label small fw-bold">Province / Region (จังหวัด)</label>
                                <select name="city" class="form-select" required>
                                    <option value="Bangkok">Bangkok (กรุงเทพมหานคร)</option>
                                    <option value="Chonburi">Chonburi / EEC (ชลบุรี)</option>
                                    <option value="Rayong">Rayong / EEC (ระยอง)</option>
                                    <option value="Samut Prakan">Samut Prakan (สมุทรปราการ)</option>
                                    <option value="Pathum Thani">Pathum Thani (ปทุมธานี)</option>
                                    <option value="Ayutthaya">Ayutthaya (พระนครศรีอยุธยา)</option>
                                    <option value="Chiang Mai">Chiang Mai (เชียงใหม่)</option>
                                    <option value="Phuket">Phuket (ภูเก็ต)</option>
                                    <option value="Khon Kaen">Khon Kaen (ขอนแก่น)</option>
                                    <option value="Songkhla">Songkhla / Hatyai (สงขลา)</option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-th-primary w-100 justify-content-center">
                                <i class="fa-solid fa-paper-plane me-2"></i>
                                <span>Get Free Consultation (ปรึกษาฟรี)</span>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CORE MODULES -->
    <section class="th-section bg-light-th">
        <div class="container">
            <div class="text-center mb-5">
                <span class="section-badge-th">System Architecture</span>
                <h2 class="section-title-th">Core Capabilities & Functional Workflows</h2>
                <p class="text-muted mx-auto" style="max-width: 700px;">Designed to streamline business operations, ensure Thai 7% VAT accuracy, organize e-Tax Invoice records, and maintain multi-warehouse visibility.</p>
            </div>

            <div class="row g-4">
                
                <div class="col-md-6 col-lg-4">
                    <div class="th-card h-100">
                        <div class="th-card-icon">
                            <i class="fa-solid fa-mobile-screen-button"></i>
                        </div>
                        <h4>Dual IMEI &amp; Serial Number Tracking</h4>
                        <p>Scan individual IMEI/Serial numbers at goods receiving and customer checkout for 100% device traceability.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="th-card h-100">
                        <div class="th-card-icon">
                            <i class="fa-solid fa-mobile-screen-button"></i>
                        </div>
                        <h4>Warranty Registration &amp; Service Tracking</h4>
                        <p>Record manufacturer warranty duration, store warranty periods, and generate automated proof of purchase records.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="th-card h-100">
                        <div class="th-card-icon">
                            <i class="fa-solid fa-mobile-screen-button"></i>
                        </div>
                        <h4>Device Repair Desk &amp; Spare Parts Billing</h4>
                        <p>Issue repair tickets for screen/battery replacements, assign technician labor, and bill replacement components.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="th-card h-100">
                        <div class="th-card-icon">
                            <i class="fa-solid fa-mobile-screen-button"></i>
                        </div>
                        <h4>Trade-In / Buy-Back Valuation Workflow</h4>
                        <p>Assess second-hand phone trade-in condition, generate purchase receipts, and refurbish or resell traded stock.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="th-card h-100">
                        <div class="th-card-icon">
                            <i class="fa-solid fa-mobile-screen-button"></i>
                        </div>
                        <h4>Thai 7% VAT &amp; Installment Payment Plans</h4>
                        <p>Support credit card 0% installment plans, PromptPay, TrueMoney, and issue full Thai tax invoices with IMEI printed.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="th-card h-100">
                        <div class="th-card-icon">
                            <i class="fa-solid fa-mobile-screen-button"></i>
                        </div>
                        <h4>Multi-Branch Mall Store Inventory Transfers</h4>
                        <p>Transfer high-value stock between branches with secure IMEI barcode dispatch and receiving confirmation.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FISCAL & COMPLIANCE SECTION -->
    <section class="th-section bg-white">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <span class="section-badge-th">Thailand Business Localization</span>
                    <h2 class="section-title-th">Thai & English Interface, 7% VAT & e-Tax Readiness</h2>
                    <p class="text-muted" style="line-height: 1.8;">
                        Digify Soft Solutions delivers full compliance alignment for Thai enterprises, incorporating standard 7% VAT calculations (extended through Sept 30, 2027), 13-digit Tax ID verification, Head Office/Branch codes, structured e-Tax Invoice data models, and Thai Withholding Tax (WHT 50 Tawi) ledgers.
                    </p>
                    <div class="d-flex flex-wrap gap-2 mt-3">
                        <span class="badge bg-danger bg-opacity-10 text-danger border border-danger p-2 px-3 fw-bold">✓ Thai & English UI</span>
                        <span class="badge bg-danger bg-opacity-10 text-danger border border-danger p-2 px-3 fw-bold">✓ Standard 7% VAT</span>
                        <span class="badge bg-danger bg-opacity-10 text-danger border border-danger p-2 px-3 fw-bold">✓ e-Tax & e-Receipt Ready</span>
                        <span class="badge bg-danger bg-opacity-10 text-danger border border-danger p-2 px-3 fw-bold">✓ 13-Digit Tax ID & Branch</span>
                        <span class="badge bg-danger bg-opacity-10 text-danger border border-danger p-2 px-3 fw-bold">✓ Multi-Warehouse Sync</span>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="p-4 bg-light-th rounded-4 border">
                        <h5 class="fw-bold text-dark mb-3"><i class="fa-solid fa-circle-question text-danger me-2"></i> Frequently Asked Question</h5>
                        <h6 class="fw-bold text-dark mb-2">Can IMEI numbers be printed directly on Thai tax invoices and thermal cash receipts?</h6>
                        <p class="text-muted small mb-0" style="line-height: 1.7;">Yes. Scanned IMEI and serial numbers automatically appear on customer receipts and A4 tax invoices for seamless warranty verification.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FINAL CTA -->
    <section class="py-5" style="background: linear-gradient(135deg, #091a2e 0%, #1e3a5f 100%); color: #ffffff;">
        <div class="container text-center py-4">
            <h2 class="fw-bold mb-3">Deploy Electronics &amp; Mobile Phone ERP Software in Thailand</h2>
            <p class="mx-auto mb-4 text-white-50" style="max-width: 720px; font-size: 16px;">
                Centralize your operations with Digify's customizable cloud platform built for Thailand enterprises.
            </p>
            <div class="d-flex justify-content-center flex-wrap gap-3">
                <button type="button" class="btn btn-danger px-4 py-3 fw-bold rounded-pill" data-bs-toggle="modal" data-bs-target="#trialModal">
                    <i class="fa-solid fa-calendar-check me-2"></i> Request Live Demo
                </button>
                <a href="erp-software-thailand.php" class="btn btn-outline-light px-4 py-3 fw-bold rounded-pill">
                    <i class="fa-solid fa-layer-group me-2"></i> Explore All Thailand Verticals
                </a>
            </div>
        </div>
    </section>
</div>

<?php include('trial_modal.php'); ?>
<?php include(__DIR__ . '/../../footer.php'); ?>
