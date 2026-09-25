<?php 
include_once(__DIR__ . '/../../db.php');
include_once(__DIR__ . '/../../fetch_meta.php');

$pageTitle = "ERP Software South Africa | Manufacturing, Retail & Field Service ERP";
$pageDescription = "Industry-focused ERP software for South African manufacturers, wholesalers, retailers, distributors and service businesses. Manage inventory, sales, purchasing, CRM, warehouses and operations.";
$pageKeywords = "ERP software South Africa, ERP software in South Africa, best ERP software South Africa, manufacturing ERP South Africa, automotive ERP South Africa, retail chain ERP South Africa, field service management South Africa, wholesale ERP South Africa, mining supplier ERP South Africa, logistics ERP South Africa, textile ERP South Africa, SARS 15% VAT software, ERP Johannesburg, ERP Durban, ERP Cape Town, ERP Pretoria";
$pageCanonical = "https://www.digifysoft.in/erp-software-south-africa";

include(__DIR__ . '/../../top.php');
include(__DIR__ . '/../../header.php');
?>

<style>
/* South Africa Master Suite Design System */
.sa-page-wrapper {
    font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
    color: #1e293b;
    overflow-x: hidden;
}

/* Hero Section */
.sa-hero {
    background: linear-gradient(135deg, #071c14 0%, #0c2b3d 50%, #1e1305 100%);
    color: #ffffff;
    padding: 75px 0 90px;
    position: relative;
    overflow: hidden;
    border-bottom: 4px solid #16a34a;
}
.sa-hero::before {
    content: '';
    position: absolute;
    top: -15%;
    right: -10%;
    width: 720px;
    height: 720px;
    background: radial-gradient(circle, rgba(22, 163, 74, 0.22) 0%, rgba(217, 119, 6, 0.18) 50%, rgba(0, 0, 0, 0) 75%);
    border-radius: 50%;
    pointer-events: none;
}
.text-gradient-sa {
    background: linear-gradient(135deg, #4ade80 0%, #fbbf24 50%, #60a5fa 100%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    display: inline-block;
}
.sa-hero-badge {
    background: rgba(22, 163, 74, 0.2);
    border: 1px solid rgba(74, 222, 128, 0.45);
    color: #86efac;
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
    font-size: 40px;
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

.btn-sa-primary {
    background: linear-gradient(135deg, #007A4D 0%, #059669 100%);
    color: #ffffff !important;
    font-weight: 700;
    padding: 13px 28px;
    border-radius: 10px;
    border: 1px solid rgba(16, 185, 129, 0.5);
    display: inline-flex;
    align-items: center;
    gap: 10px;
    transition: all 0.3s ease;
    text-decoration: none;
    box-shadow: 0 6px 20px rgba(0, 122, 77, 0.35);
}
.btn-sa-primary:hover {
    background: linear-gradient(135deg, #059669 0%, #047857 100%);
    color: #ffffff !important;
    transform: translateY(-2px);
    box-shadow: 0 10px 25px rgba(0, 122, 77, 0.5);
}
.btn-sa-outline {
    background: rgba(255, 255, 255, 0.08);
    color: #ffffff !important;
    border: 1px solid rgba(255, 255, 255, 0.25);
    font-weight: 600;
    padding: 13px 26px;
    border-radius: 10px;
    display: inline-flex;
    align-items: center;
    gap: 8px;
    transition: all 0.3s ease;
    text-decoration: none;
    backdrop-filter: blur(6px);
}
.btn-sa-outline:hover {
    background: rgba(255, 255, 255, 0.18);
    color: #ffffff !important;
    border-color: rgba(255, 255, 255, 0.5);
    transform: translateY(-2px);
}

/* Sections */
.sa-section {
    padding: 75px 0;
}
.bg-light-sa {
    background: #f8fafc;
}
.section-badge-sa {
    background: #dcfce7;
    color: #15803d;
    font-size: 12px;
    font-weight: 800;
    text-transform: uppercase;
    letter-spacing: 1px;
    padding: 6px 16px;
    border-radius: 20px;
    display: inline-block;
    margin-bottom: 14px;
}
.section-title-sa {
    font-size: 34px;
    font-weight: 900;
    color: #0f172a;
    margin-bottom: 16px;
}

/* Cards */
.sa-card {
    background: #ffffff;
    border: 1px solid #e2e8f0;
    border-radius: 16px;
    padding: 28px 24px;
    transition: all 0.3s ease;
    height: 100%;
    display: flex;
    flex-direction: column;
}
.sa-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 20px 30px -10px rgba(0, 0, 0, 0.08);
    border-color: #16a34a;
}
.sa-card-icon {
    width: 52px;
    height: 52px;
    border-radius: 14px;
    background: #dcfce7;
    color: #15803d;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 22px;
    margin-bottom: 18px;
}
.sa-card h4 {
    font-size: 18px;
    font-weight: 800;
    color: #0f172a;
    margin-bottom: 10px;
}
.sa-card p {
    font-size: 14px;
    color: #64748b;
    line-height: 1.6;
    margin-bottom: 16px;
    flex-grow: 1;
}
.sa-card-link {
    color: #15803d;
    font-weight: 700;
    font-size: 13px;
    text-decoration: none;
    display: inline-flex;
    align-items: center;
    gap: 6px;
}
.sa-card-link:hover {
    color: #166534;
    text-decoration: underline;
}

/* Metric / Stat box */
.sa-stat-box {
    background: rgba(255, 255, 255, 0.06);
    border: 1px solid rgba(255, 255, 255, 0.15);
    border-radius: 12px;
    padding: 14px 10px;
    text-align: center;
    backdrop-filter: blur(8px);
}
.sa-stat-val {
    font-size: 22px;
    font-weight: 800;
    color: #FFB612;
    line-height: 1.2;
}
.sa-stat-lbl {
    font-size: 11px;
    color: #E2E8F0;
    margin-top: 4px;
    font-weight: 500;
    text-transform: uppercase;
    letter-spacing: 0.5px;
}

/* Fluid Badges & List Enhancements */
.sa-page-wrapper .badge {
    white-space: normal !important;
    text-align: left;
    display: inline-flex;
    align-items: center;
    line-height: 1.4;
    font-size: 0.85rem;
}

/* ===================================================
   RESPONSIVE ENHANCEMENTS (Desktop, Tablet, Mobile)
   =================================================== */
@media (max-width: 991px) {
    .sa-hero {
        padding: 45px 0 55px;
    }
    .sa-hero h1 {
        font-size: 30px;
    }
    .sa-hero-sub {
        font-size: 16px;
    }
    .section-title-sa {
        font-size: 28px;
    }
}

@media (max-width: 768px) {
    .sa-hero {
        padding: 30px 0 40px;
    }
    .sa-hero-badge {
        font-size: 11.5px;
        padding: 5px 12px;
        white-space: normal;
        line-height: 1.4;
    }
    .sa-hero h1 {
        font-size: 23px;
        line-height: 1.3;
        margin-bottom: 12px;
    }
    .sa-hero-sub {
        font-size: 14px;
        line-height: 1.45;
        margin-bottom: 10px;
    }
    .sa-hero-desc {
        font-size: 13.5px;
        line-height: 1.6;
        margin-bottom: 18px;
    }
    .btn-sa-primary, .btn-sa-outline {
        width: 100%;
        justify-content: center;
        padding: 12px 18px;
        font-size: 14px;
    }
    .sa-stat-box {
        padding: 10px 4px;
    }
    .sa-stat-val {
        font-size: 17px;
    }
    .sa-stat-lbl {
        font-size: 10px;
        letter-spacing: 0;
    }
    .sa-section {
        padding: 40px 0;
    }
    .section-title-sa {
        font-size: 22px;
    }
    .sa-card {
        padding: 20px 18px;
    }
}

@media (max-width: 480px) {
    .sa-hero h1 {
        font-size: 20px;
    }
    .sa-stat-val {
        font-size: 14px;
    }
    .sa-stat-lbl {
        font-size: 9px;
    }
}
</style>

<div class="sa-page-wrapper">
    <!-- HERO -->
    <section class="sa-hero">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7 mb-4 mb-lg-0">
                    <div class="sa-hero-badge">
                        <i class="fa-solid fa-flag"></i>
                        <span>🇿🇦 South Africa • Manufacturing, Retail & Field Service ERP</span>
                    </div>
                    <h1>
                        ERP Software in South Africa for <span class="text-gradient-sa">Manufacturing, Retail & Field Service</span>
                    </h1>
                    <div class="sa-hero-sub">
                        Connect manufacturing, inventory, purchasing, sales, distribution, CRM, field service and business operations through one centralized platform.
                    </div>
                    <p class="sa-hero-desc">
                        Built for South African manufacturers, wholesalers, distributors, retail chains, automotive plants, logistics operators, mining suppliers, and service organizations. 100% aligned with SARS 15% VAT and multi-branch operations.
                    </p>

                    <div class="d-flex flex-wrap gap-3 mb-4">
                        <a href="javascript:void(0)" class="btn-sa-primary" data-bs-toggle="modal" data-bs-target="#trialModal">
                            <i class="fa-solid fa-calendar-check"></i>
                            <span>Schedule South Africa Demo</span>
                        </a>
                        <a href="#sa-modules" class="btn-sa-outline">
                            <i class="fa-solid fa-layer-group"></i>
                            <span>Explore Industry Suites</span>
                        </a>
                    </div>

                    <!-- Market Context Quick Metrics -->
                    <div class="row g-2 pt-2">
                        <div class="col-4">
                            <div class="sa-stat-box">
                                <div class="sa-stat-val">22.6%</div>
                                <div class="sa-stat-lbl">Automotive Output Share</div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="sa-stat-box">
                                <div class="sa-stat-val">15% VAT</div>
                                <div class="sa-stat-lbl">SARS Tax Standard</div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="sa-stat-box">
                                <div class="sa-stat-val">414K+</div>
                                <div class="sa-stat-lbl">Vehicles Exported (2025)</div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-5">
                    <div class="p-4 bg-white rounded-4 shadow-lg text-dark">
                        <h4 class="fw-bold text-dark mb-2">Request South Africa Solution</h4>
                        <p class="small text-muted mb-3">Speak directly with our South African ERP consultants.</p>
                        
                        <form action="send_mail.php" method="POST">
                            <input type="hidden" name="source" value="South Africa Pillar Page / Main ERP">
                            <input type="hidden" name="country" value="South Africa">
                            
                            <div class="mb-3">
                                <label class="form-label small fw-bold">Your Name</label>
                                <input type="text" name="name" class="form-control" placeholder="Johan Van Der Merwe" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label small fw-bold">Company / Enterprise Name</label>
                                <input type="text" name="company_name" class="form-control" placeholder="Gauteng Industrial Supplies (Pty) Ltd" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label small fw-bold">Phone / WhatsApp</label>
                                <input type="tel" name="phone" class="form-control" placeholder="+27 8X XXX XXXX" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label small fw-bold">Province / City</label>
                                <select name="city" class="form-select" required>
                                    <option value="Johannesburg">Johannesburg (Gauteng)</option>
                                    <option value="Pretoria">Pretoria / Tshwane (Gauteng)</option>
                                    <option value="Durban">Durban (KwaZulu-Natal)</option>
                                    <option value="Cape Town">Cape Town (Western Cape)</option>
                                    <option value="Gqeberha">Gqeberha / Port Elizabeth (Eastern Cape)</option>
                                    <option value="East London">East London (Eastern Cape)</option>
                                    <option value="Richards Bay">Richards Bay (KwaZulu-Natal)</option>
                                    <option value="Bloemfontein">Bloemfontein (Free State)</option>
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

    <!-- MARKET STRUCTURE & INDUSTRY CONTEXT -->
    <section class="sa-section bg-white">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <span class="section-badge-sa">South Africa Market Overview</span>
                    <h2 class="section-title-sa">Mature & Competitive Industrial Economy</h2>
                    <p class="text-muted" style="line-height: 1.8;">
                        South Africa is a mature business software market with established enterprises and sophisticated operational expectations. Businesses increasingly require more than basic accounting and inventory software—they require connected operational systems covering manufacturing, supply chain, field service, retail POS, and multi-branch management.
                    </p>
                    <p class="text-muted" style="line-height: 1.8;">
                        InvestSA and Stats SA data show robust commercial expansion: retail trade grew 3.7% in 2025, while the automotive manufacturing sector exported 414,268 vehicles across 7 global OEMs and 500+ component suppliers, representing 22.6% of national manufacturing output.
                    </p>
                    <div class="d-flex flex-wrap gap-2 mt-3">
                        <span class="badge bg-success bg-opacity-10 text-success border border-success p-2 px-3 fw-bold">✓ Manufacturing & OEM Auto Hub</span>
                        <span class="badge bg-success bg-opacity-10 text-success border border-success p-2 px-3 fw-bold">✓ Field Service & Industrial Maintenance</span>
                        <span class="badge bg-success bg-opacity-10 text-success border border-success p-2 px-3 fw-bold">✓ Retail Chains & Supermarkets</span>
                        <span class="badge bg-success bg-opacity-10 text-success border border-success p-2 px-3 fw-bold">✓ SARS 15% VAT & ZAR Currency</span>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="p-4 bg-light-sa rounded-4 border">
                        <h5 class="fw-bold text-dark mb-3"><i class="fa-solid fa-circle-check text-success me-2"></i> Why Industry-Specific ERP Matters</h5>
                        <p class="text-muted small" style="line-height: 1.7;">
                            South African businesses have distinct operational workflows that generic off-the-shelf software cannot solve:
                        </p>
                        <ul class="list-unstyled mb-0" style="line-height: 2;">
                            <li><i class="fa-solid fa-check text-success me-2"></i> <strong>Manufacturers:</strong> Multi-level BOMs, work-in-progress, and scrap loss</li>
                            <li><i class="fa-solid fa-check text-success me-2"></i> <strong>Automotive & OEM:</strong> JIT delivery releases and batch traceability</li>
                            <li><i class="fa-solid fa-check text-success me-2"></i> <strong>Distributors:</strong> Van sales, multi-warehouse stock, and dealer credit</li>
                            <li><i class="fa-solid fa-check text-success me-2"></i> <strong>Retail Chains:</strong> Fast POS, mall synchronization, and central buying</li>
                            <li><i class="fa-solid fa-check text-success me-2"></i> <strong>Field Service:</strong> Technician dispatch, job cards, parts used, and SLA tracking</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CORE PRIMARY VERTICALS (TIER 1) -->
    <section class="sa-section bg-light-sa" id="sa-modules">
        <div class="container">
            <div class="text-center mb-5">
                <span class="section-badge-sa">Primary Industry Suites</span>
                <h2 class="section-title-sa">Tailored ERP Solutions for South African Sectors</h2>
                <p class="text-muted mx-auto" style="max-width: 720px;">Engineered to handle high-complexity manufacturing, distribution, multi-store retail, and industrial field maintenance.</p>
            </div>

            <div class="row g-4">
                <!-- 1. Manufacturing ERP -->
                <div class="col-md-6 col-lg-4">
                    <div class="sa-card">
                        <div class="sa-card-icon"><i class="fa-solid fa-industry"></i></div>
                        <h4>Manufacturing ERP (#1 Vertical)</h4>
                        <p>Multi-level BOMs, work-in-progress (WIP), machine cycle tracking, raw material consumption, and landed batch costing.</p>
                        <a href="manufacturing-erp-software-south-africa.php" class="sa-card-link">Explore Manufacturing ERP <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>

                <!-- 2. Automotive ERP -->
                <div class="col-md-6 col-lg-4">
                    <div class="sa-card">
                        <div class="sa-card-icon"><i class="fa-solid fa-car-side"></i></div>
                        <h4>Automotive & OEM Parts ERP</h4>
                        <p>Tier-1/2 component suppliers, OEM release schedules, aftermarket parts catalog, and export shipment tracking.</p>
                        <a href="automotive-erp-software-south-africa.php" class="sa-card-link">Explore Automotive ERP <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>

                <!-- 3. Wholesale ERP -->
                <div class="col-md-6 col-lg-4">
                    <div class="sa-card">
                        <div class="sa-card-icon"><i class="fa-solid fa-dolly"></i></div>
                        <h4>Wholesale ERP</h4>
                        <p>Customer-specific pricing, bulk container purchasing, dealer credit limits, and multi-depot stock allocation.</p>
                        <a href="wholesale-erp-software-south-africa.php" class="sa-card-link">Explore Wholesale ERP <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>

                <!-- 4. Distribution ERP -->
                <div class="col-md-6 col-lg-4">
                    <div class="sa-card">
                        <div class="sa-card-icon"><i class="fa-solid fa-truck-ramp-box"></i></div>
                        <h4>Distribution ERP</h4>
                        <p>FMCG, food, hardware, and industrial distribution across Gauteng, KZN, and Western Cape with van sales routes.</p>
                        <a href="distribution-erp-software-south-africa.php" class="sa-card-link">Explore Distribution ERP <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>

                <!-- 5. Retail Chains -->
                <div class="col-md-6 col-lg-4">
                    <div class="sa-card">
                        <div class="sa-card-icon"><i class="fa-solid fa-cart-shopping"></i></div>
                        <h4>Retail Chain ERP & POS</h4>
                        <p>High-speed barcode checkout, mall chain inventory sync, SnapScan/card payments, VIP loyalty, and shift cash audits.</p>
                        <a href="retail-chain-erp-software-south-africa.php" class="sa-card-link">Explore Retail Chain ERP <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>

                <!-- 6. Field Service Management -->
                <div class="col-md-6 col-lg-4">
                    <div class="sa-card">
                        <div class="sa-card-icon"><i class="fa-solid fa-screwdriver-wrench"></i></div>
                        <h4>Field Service Management</h4>
                        <p>Technician dispatch, digital job cards, site visits, spare parts used, labor hours, and client sign-off invoices.</p>
                        <a href="field-service-management-software-south-africa.php" class="sa-card-link">Explore Field Service <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>

                <!-- 7. Workshop ERP -->
                <div class="col-md-6 col-lg-4">
                    <div class="sa-card">
                        <div class="sa-card-icon"><i class="fa-solid fa-wrench"></i></div>
                        <h4>Workshop & Repair ERP</h4>
                        <p>Vehicle registration lookup, mechanic labor rates, spare parts consumption, repair estimates, and combined tax invoices.</p>
                        <a href="workshop-erp-software-south-africa.php" class="sa-card-link">Explore Workshop ERP <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>

                <!-- 8. Mining Suppliers ERP -->
                <div class="col-md-6 col-lg-4">
                    <div class="sa-card">
                        <div class="sa-card-icon"><i class="fa-solid fa-mountain"></i></div>
                        <h4>Mining & Industrial Supplier ERP</h4>
                        <p>Heavy machinery spare parts, hydraulic hoses, consumables, plant maintenance contractors, and bulk supply billing.</p>
                        <a href="mining-supplier-erp-software-south-africa.php" class="sa-card-link">Explore Mining Supplier ERP <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>

                <!-- 9. Logistics & Transport -->
                <div class="col-md-6 col-lg-4">
                    <div class="sa-card">
                        <div class="sa-card-icon"><i class="fa-solid fa-truck-fast"></i></div>
                        <h4>Logistics & Fleet ERP</h4>
                        <p>Transport dispatches, driver trip allowances, fuel card logs, fleet maintenance, and freight billing across South Africa.</p>
                        <a href="logistics-erp-software-south-africa.php" class="sa-card-link">Explore Logistics ERP <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>

                <!-- 10. Clothing & Textiles -->
                <div class="col-md-6 col-lg-4">
                    <div class="sa-card">
                        <div class="sa-card-icon"><i class="fa-solid fa-shirt"></i></div>
                        <h4>Clothing, Textile & Apparel ERP</h4>
                        <p>Style-color-size matrix, fabric roll inventory, cut-order planning, CMT piece rates, and seasonal fashion collections.</p>
                        <a href="textile-garment-erp-software-south-africa.php" class="sa-card-link">Explore Textile ERP <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>

                <!-- 11. Food & Agro-Processing -->
                <div class="col-md-6 col-lg-4">
                    <div class="sa-card">
                        <div class="sa-card-icon"><i class="fa-solid fa-bowl-food"></i></div>
                        <h4>Food & Agro-Processing ERP</h4>
                        <p>Recipe scaling, cold storage batching, expiry FEFO picking, packaging materials, and food safety traceability.</p>
                        <a href="food-processing-erp-software-south-africa.php" class="sa-card-link">Explore Food Processing <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>

                <!-- 12. Equipment Rental -->
                <div class="col-md-6 col-lg-4">
                    <div class="sa-card">
                        <div class="sa-card-icon"><i class="fa-solid fa-handshake"></i></div>
                        <h4>Equipment Rental ERP</h4>
                        <p>Asset availability calendar, rental agreements, security deposits, meter reading logs, and recurring rental billing.</p>
                        <a href="equipment-rental-erp-software-south-africa.php" class="sa-card-link">Explore Equipment Rental <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- SECONDARY & SPECIALIZED VERTICALS (TIER 2 & 3) -->
    <section class="sa-section bg-white">
        <div class="container">
            <div class="text-center mb-5">
                <span class="section-badge-sa">Comprehensive Industry Coverage</span>
                <h2 class="section-title-sa">Secondary & Specialized Industry Suites</h2>
                <p class="text-muted mx-auto" style="max-width: 720px;">Extending into construction, FMCG, chemicals, pharmaceuticals, agriculture, and building supplies.</p>
            </div>

            <div class="row g-3">
                <div class="col-md-6 col-lg-3">
                    <div class="p-3 border rounded-3 bg-light-sa h-100">
                        <h6 class="fw-bold text-dark mb-2"><i class="fa-solid fa-boxes-stacked text-success me-2"></i> FMCG ERP</h6>
                        <p class="small text-muted mb-2">High-turnover stock, route replenishment, volume trade schemes, and supermarket billing.</p>
                        <a href="fmcg-erp-software-south-africa.php" class="small fw-bold text-success text-decoration-none">View Suite &rarr;</a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="p-3 border rounded-3 bg-light-sa h-100">
                        <h6 class="fw-bold text-dark mb-2"><i class="fa-solid fa-flask-vial text-success me-2"></i> Chemical ERP</h6>
                        <p class="small text-muted mb-2">Recipe blending, industrial coatings, cleaning chemicals, and hazardous inventory control.</p>
                        <a href="chemical-erp-software-south-africa.php" class="small fw-bold text-success text-decoration-none">View Suite &rarr;</a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="p-3 border rounded-3 bg-light-sa h-100">
                        <h6 class="fw-bold text-dark mb-2"><i class="fa-solid fa-trowel-bricks text-success me-2"></i> Building Materials ERP</h6>
                        <p class="small text-muted mb-2">Structural steel, cement, hardware, dimensional unit conversions, and contractor credit.</p>
                        <a href="building-material-erp-software-south-africa.php" class="small fw-bold text-success text-decoration-none">View Suite &rarr;</a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="p-3 border rounded-3 bg-light-sa h-100">
                        <h6 class="fw-bold text-dark mb-2"><i class="fa-solid fa-helmet-safety text-success me-2"></i> Construction ERP</h6>
                        <p class="small text-muted mb-2">Project BOQ budgeting, site material requisitions, subcontractor billing, and cash flow.</p>
                        <a href="construction-erp-software-south-africa.php" class="small fw-bold text-success text-decoration-none">View Suite &rarr;</a>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3">
                    <div class="p-3 border rounded-3 bg-light-sa h-100">
                        <h6 class="fw-bold text-dark mb-2"><i class="fa-solid fa-prescription-bottle-medical text-success me-2"></i> Pharmacy ERP</h6>
                        <p class="small text-muted mb-2">Drug batch expiry tracking, FEFO dispensing, prescription records, and OTC POS billing.</p>
                        <a href="pharmacy-erp-software-south-africa.php" class="small fw-bold text-success text-decoration-none">View Suite &rarr;</a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="p-3 border rounded-3 bg-light-sa h-100">
                        <h6 class="fw-bold text-dark mb-2"><i class="fa-solid fa-truck-medical text-success me-2"></i> Medical Distribution ERP</h6>
                        <p class="small text-muted mb-2">Hospital consignment stock, medical device serialization, UDI tracking, and B2B billing.</p>
                        <a href="medical-distribution-erp-software-south-africa.php" class="small fw-bold text-success text-decoration-none">View Suite &rarr;</a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="p-3 border rounded-3 bg-light-sa h-100">
                        <h6 class="fw-bold text-dark mb-2"><i class="fa-solid fa-seedling text-success me-2"></i> Agribusiness ERP</h6>
                        <p class="small text-muted mb-2">Harvest tracking, cold storage packhouses, fruit export pallets, and seed/fertilizer inputs.</p>
                        <a href="agriculture-erp-software-south-africa.php" class="small fw-bold text-success text-decoration-none">View Suite &rarr;</a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="p-3 border rounded-3 bg-light-sa h-100">
                        <h6 class="fw-bold text-dark mb-2"><i class="fa-solid fa-basket-shopping text-success me-2"></i> Supermarket ERP</h6>
                        <p class="small text-muted mb-2">Weighing scale barcode integration, fast checkout lanes, fresh produce, and FMCG reorders.</p>
                        <a href="supermarket-erp-software-south-africa.php" class="small fw-bold text-success text-decoration-none">View Suite &rarr;</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- SARS 15% VAT & FINANCIAL COMPLIANCE SECTION -->
    <section class="sa-section bg-light-sa">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <span class="section-badge-sa">SARS 15% VAT & Financial Accounting</span>
                    <h2 class="section-title-sa">South African VAT-Aware Business Management</h2>
                    <p class="text-muted" style="line-height: 1.8;">
                        Manage sales, purchases, invoices, customer accounts, supplier ledgers, and transaction information in an organized ERP environment. South Africa's standard VAT rate is <strong>15%</strong>.
                    </p>
                    <p class="text-muted" style="line-height: 1.8;">
                        Compulsory VAT registration applies when taxable turnover exceeds <strong>R2.3 million</strong> in a 12-month period (with voluntary registration available above R120,000). Digify Soft Solutions structures transaction records, sequential tax invoices, and monthly VAT ledgers for accurate tax audit preparation.
                    </p>
                    <div class="d-flex flex-wrap gap-2 mt-3">
                        <span class="badge bg-success bg-opacity-10 text-success border border-success p-2 px-3 fw-bold">✓ Standard 15% VAT Calculations</span>
                        <span class="badge bg-success bg-opacity-10 text-success border border-success p-2 px-3 fw-bold">✓ ZAR (R) Currency Support</span>
                        <span class="badge bg-success bg-opacity-10 text-success border border-success p-2 px-3 fw-bold">✓ Customer VAT Registration Number Validation</span>
                        <span class="badge bg-success bg-opacity-10 text-success border border-success p-2 px-3 fw-bold">✓ Multi-Warehouse & Inter-Branch Auditing</span>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="p-4 bg-white rounded-4 border shadow-sm">
                        <h5 class="fw-bold text-dark mb-3"><i class="fa-solid fa-shield-halved text-success me-2"></i> Compliance & Tax Positioning Notice</h5>
                        <p class="text-muted small" style="line-height: 1.8;">
                            Digify Soft Solutions provides business management and accounting tools to organize sales, purchases, and VAT records.
                        </p>
                        <p class="text-muted small mb-0" style="line-height: 1.8;">
                            <em>*Notice: Digify provides software tools for internal business accounting and record-keeping. Businesses should confirm their specific tax filings and SARS obligations with registered South African tax practitioners.</em>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- SOUTH AFRICA STRATEGIC CITY HUBS -->
    <section class="sa-section bg-white">
        <div class="container">
            <div class="text-center mb-5">
                <span class="section-badge-sa">Regional Commercial Clusters</span>
                <h2 class="section-title-sa">Dedicated City & Regional Hubs in South Africa</h2>
                <p class="text-muted mx-auto" style="max-width: 700px;">Tailored solutions for businesses operating in South Africa's key industrial, commercial, and port corridors.</p>
            </div>

            <div class="row g-4">
                <div class="col-md-6 col-lg-3">
                    <div class="p-4 bg-light-sa rounded-4 border h-100">
                        <h5 class="fw-bold text-dark mb-2"><i class="fa-solid fa-city text-success me-2"></i> Johannesburg</h5>
                        <p class="small text-muted mb-3">Commercial headquarters, industrial manufacturing, wholesale distribution, mining suppliers, and retail chain operations.</p>
                        <a href="erp-software-johannesburg.php" class="btn btn-sm btn-outline-success rounded-pill fw-bold">Joburg ERP Hub &rarr;</a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="p-4 bg-light-sa rounded-4 border h-100">
                        <h5 class="fw-bold text-dark mb-2"><i class="fa-solid fa-industry text-success me-2"></i> Pretoria / Tshwane</h5>
                        <p class="small text-muted mb-3">Automotive OEM manufacturing, industrial engineering, heavy fabrication, and government supplier operations.</p>
                        <a href="erp-software-pretoria.php" class="btn btn-sm btn-outline-success rounded-pill fw-bold">Pretoria ERP Hub &rarr;</a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="p-4 bg-light-sa rounded-4 border h-100">
                        <h5 class="fw-bold text-dark mb-2"><i class="fa-solid fa-ship text-success me-2"></i> Durban</h5>
                        <p class="small text-muted mb-3">Port logistics, freight forwarding, automotive assembly, wholesale trade, FMCG distribution, and chemicals in KZN.</p>
                        <a href="erp-software-durban.php" class="btn btn-sm btn-outline-success rounded-pill fw-bold">Durban ERP Hub &rarr;</a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="p-4 bg-light-sa rounded-4 border h-100">
                        <h5 class="fw-bold text-dark mb-2"><i class="fa-solid fa-mountain text-success me-2"></i> Cape Town</h5>
                        <p class="small text-muted mb-3">Retail headquarters, agro-processing, wine/food export, technology companies, and tourism hospitality.</p>
                        <a href="erp-software-cape-town.php" class="btn btn-sm btn-outline-success rounded-pill fw-bold">Cape Town ERP Hub &rarr;</a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="p-4 bg-light-sa rounded-4 border h-100">
                        <h5 class="fw-bold text-dark mb-2"><i class="fa-solid fa-car text-success me-2"></i> Gqeberha</h5>
                        <p class="small text-muted mb-3">Automotive assembly plants, component suppliers, port logistics, and export manufacturing in Eastern Cape.</p>
                        <a href="erp-software-gqeberha.php" class="btn btn-sm btn-outline-success rounded-pill fw-bold">Gqeberha ERP Hub &rarr;</a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="p-4 bg-light-sa rounded-4 border h-100">
                        <h5 class="fw-bold text-dark mb-2"><i class="fa-solid fa-anchor text-success me-2"></i> Richards Bay</h5>
                        <p class="small text-muted mb-3">Deep-water dry bulk port, coal/mineral exports, heavy industrial suppliers, and chemical logistics in KZN.</p>
                        <a href="erp-software-richards-bay.php" class="btn btn-sm btn-outline-success rounded-pill fw-bold">Richards Bay ERP &rarr;</a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="p-4 bg-light-sa rounded-4 border h-100">
                        <h5 class="fw-bold text-dark mb-2"><i class="fa-solid fa-building text-success me-2"></i> East London</h5>
                        <p class="small text-muted mb-3">Automotive manufacturing corridor, industrial IDZ plants, textile mills, and coastal distribution.</p>
                        <a href="erp-software-east-london.php" class="btn btn-sm btn-outline-success rounded-pill fw-bold">East London ERP &rarr;</a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="p-4 bg-light-sa rounded-4 border h-100">
                        <h5 class="fw-bold text-dark mb-2"><i class="fa-solid fa-wheat-awn text-success me-2"></i> Bloemfontein</h5>
                        <p class="small text-muted mb-3">Free State agricultural processing, regional logistics hub, wholesale distribution, and commercial retail.</p>
                        <a href="erp-software-bloemfontein.php" class="btn btn-sm btn-outline-success rounded-pill fw-bold">Bloemfontein ERP &rarr;</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQS -->
    <section class="sa-section bg-light-sa">
        <div class="container">
            <div class="text-center mb-5">
                <span class="section-badge-sa">Questions & Answers</span>
                <h2 class="section-title-sa">Frequently Asked Questions</h2>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="accordion" id="saFaqAccordion">
                        <div class="accordion-item mb-3 border rounded-3 overflow-hidden">
                            <h2 class="accordion-header">
                                <button class="accordion-button fw-bold text-dark" type="button" data-bs-toggle="collapse" data-bs-target="#faq1">
                                    What is ERP software in South Africa and how does it support growing businesses?
                                </button>
                            </h2>
                            <div id="faq1" class="accordion-collapse collapse show" data-bs-parent="#saFaqAccordion">
                                <div class="accordion-body text-muted small" style="line-height: 1.8;">
                                    ERP software in South Africa integrates manufacturing, purchasing, multi-warehouse stock, sales orders, field service dispatch, retail POS, and financial accounting into one unified platform, eliminating siloed spreadsheets and manual delays.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item mb-3 border rounded-3 overflow-hidden">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed fw-bold text-dark" type="button" data-bs-toggle="collapse" data-bs-target="#faq2">
                                    Does Digify support South Africa's standard 15% VAT?
                                </button>
                            </h2>
                            <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#saFaqAccordion">
                                <div class="accordion-body text-muted small" style="line-height: 1.8;">
                                    Yes. Digify automatically calculates South Africa's standard 15% VAT on taxable sales and purchases, validates customer and supplier VAT registration numbers, and produces audit-ready monthly tax ledgers.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item mb-3 border rounded-3 overflow-hidden">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed fw-bold text-dark" type="button" data-bs-toggle="collapse" data-bs-target="#faq3">
                                    Can manufacturing and automotive component plants track Bill of Materials (BOM) and WIP?
                                </button>
                            </h2>
                            <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#saFaqAccordion">
                                <div class="accordion-body text-muted small" style="line-height: 1.8;">
                                    Yes. Digify supports multi-level BOMs, shop-floor work orders, raw material consumption tracking, machine hours, and work-in-progress (WIP) costing with complete lot traceability.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item mb-3 border rounded-3 overflow-hidden">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed fw-bold text-dark" type="button" data-bs-toggle="collapse" data-bs-target="#faq4">
                                    How does Digify coordinate field service technicians and maintenance jobs?
                                </button>
                            </h2>
                            <div id="faq4" class="accordion-collapse collapse" data-bs-parent="#saFaqAccordion">
                                <div class="accordion-body text-muted small" style="line-height: 1.8;">
                                    Digify enables service managers to dispatch technicians, track digital job cards on mobile, deduct spare parts used directly from van stock, record billable labor hours, and generate client invoices instantly.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FINAL CTA -->
    <section class="py-5" style="background: linear-gradient(135deg, #071c14 0%, #0c2b3d 100%); color: #ffffff;">
        <div class="container text-center py-4">
            <h2 class="fw-bold mb-3">Empower Your South African Business with Digify ERP</h2>
            <p class="mx-auto mb-4 text-white-50" style="max-width: 720px; font-size: 16px;">
                Connect manufacturing, wholesale distribution, retail chains, field service, and 15% VAT accounting in one scalable cloud platform.
            </p>
            <div class="d-flex justify-content-center flex-wrap gap-3">
                <button type="button" class="btn btn-success px-4 py-3 fw-bold rounded-pill" data-bs-toggle="modal" data-bs-target="#trialModal">
                    <i class="fa-solid fa-calendar-check me-2"></i> Request South Africa Demo
                </button>
                <a href="#sa-modules" class="btn btn-outline-light px-4 py-3 fw-bold rounded-pill">
                    <i class="fa-solid fa-list-check me-2"></i> Browse All Industry Suites
                </a>
            </div>
        </div>
    </section>
</div>

<?php include('trial_modal.php'); ?>
<?php include(__DIR__ . '/../../footer.php'); ?>
