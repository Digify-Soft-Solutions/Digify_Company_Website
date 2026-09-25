<?php 
include_once(__DIR__ . '/../../db.php');
include_once(__DIR__ . '/../../fetch_meta.php');

$pageTitle = "ERP Software in Oman | Trading, Inventory & Accounting ERP";
$pageDescription = "Oman ERP software for SMEs, trading companies, distributors, retailers, workshops and service businesses. Manage inventory, sales, purchasing, accounting, CRM and operations.";
$pageKeywords = "ERP software Oman, ERP software in Oman, best ERP software Oman, cloud ERP Oman, trading ERP Oman, inventory software Oman, accounting ERP Oman, workshop ERP Oman, logistics ERP Oman, SME ERP Oman, Oman VAT software, Fawtara software Oman, Fawtara ready ERP, ERP Muscat, ERP Sohar, ERP Salalah, ERP Duqm";
$pageCanonical = "https://www.digifysoft.in/erp-software-oman";

include(__DIR__ . '/../../top.php');
include(__DIR__ . '/../../header.php');
?>

<style>
/* Oman Master Suite Design System */
.om-page-wrapper {
    font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
    color: #1e293b;
    overflow-x: hidden;
}
.om-ar-font {
    font-family: 'Cairo', 'Tajawal', 'Segoe UI', sans-serif !important;
}

/* Hero Section */
.om-hero {
    background: linear-gradient(135deg, #091b2e 0%, #0d3824 45%, #2a1114 100%);
    color: #ffffff;
    padding: 75px 0 90px;
    position: relative;
    overflow: hidden;
    border-bottom: 4px solid #c53030;
}
.om-hero::before {
    content: '';
    position: absolute;
    top: -15%;
    right: -10%;
    width: 700px;
    height: 700px;
    background: radial-gradient(circle, rgba(197, 48, 48, 0.22) 0%, rgba(13, 148, 80, 0.18) 50%, rgba(0, 0, 0, 0) 75%);
    border-radius: 50%;
    pointer-events: none;
}
.text-gradient-om {
    background: linear-gradient(135deg, #34d399 0%, #f87171 50%, #fde047 100%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    display: inline-block;
}
.om-hero-badge {
    background: rgba(197, 48, 48, 0.2);
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
.om-hero h1 {
    font-size: 40px;
    font-weight: 900;
    line-height: 1.25;
    margin-bottom: 18px;
    letter-spacing: -0.5px;
}
.om-hero-sub {
    font-size: 18px;
    font-weight: 600;
    color: #fde047;
    line-height: 1.5;
    margin-bottom: 14px;
}
.om-hero-desc {
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
    padding: 6px 18px;
    border-radius: 20px;
    cursor: pointer;
    transition: all 0.3s ease;
}
.lang-pill.active {
    background: #c53030;
    color: #ffffff;
    box-shadow: 0 4px 12px rgba(197, 48, 48, 0.4);
}

.btn-om-primary {
    background: linear-gradient(135deg, #c53030 0%, #991b1b 100%);
    color: #ffffff;
    font-weight: 700;
    padding: 14px 32px;
    border-radius: 30px;
    border: none;
    display: inline-flex;
    align-items: center;
    gap: 10px;
    transition: all 0.3s ease;
    text-decoration: none;
    box-shadow: 0 10px 25px -5px rgba(197, 48, 48, 0.45);
}
.btn-om-primary:hover {
    background: linear-gradient(135deg, #991b1b 0%, #7f1d1d 100%);
    color: #ffffff;
    transform: translateY(-2px);
    box-shadow: 0 15px 30px -5px rgba(197, 48, 48, 0.6);
}
.btn-om-outline {
    background: rgba(255, 255, 255, 0.1);
    color: #ffffff;
    border: 1px solid rgba(255, 255, 255, 0.3);
    font-weight: 600;
    padding: 14px 28px;
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

/* Sections */
.om-section {
    padding: 75px 0;
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
    padding: 6px 16px;
    border-radius: 20px;
    display: inline-block;
    margin-bottom: 14px;
}
.section-title-om {
    font-size: 34px;
    font-weight: 900;
    color: #0f172a;
    margin-bottom: 16px;
}

/* Cards */
.om-card {
    background: #ffffff;
    border: 1px solid #e2e8f0;
    border-radius: 16px;
    padding: 28px 24px;
    transition: all 0.3s ease;
    height: 100%;
    display: flex;
    flex-direction: column;
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
    margin-bottom: 16px;
    flex-grow: 1;
}
.om-card-link {
    color: #c53030;
    font-weight: 700;
    font-size: 13px;
    text-decoration: none;
    display: inline-flex;
    align-items: center;
    gap: 6px;
}
.om-card-link:hover {
    color: #991b1b;
    text-decoration: underline;
}

/* Metric / Stat box */
.om-stat-box {
    background: rgba(255, 255, 255, 0.08);
    border: 1px solid rgba(255, 255, 255, 0.15);
    border-radius: 14px;
    padding: 16px;
    text-align: center;
}
.om-stat-val {
    font-size: 26px;
    font-weight: 900;
    color: #fde047;
}
.om-stat-lbl {
    font-size: 12px;
    color: rgba(255, 255, 255, 0.8);
    margin-top: 4px;
}
</style>

<div class="om-page-wrapper">
    <!-- HERO -->
    <section class="om-hero">
        <div class="container">
            <!-- Language Switcher -->
            <div class="d-flex justify-content-end mb-2">
                <div class="lang-toggle-bar">
                    <button class="lang-pill active" id="lang-en-btn" onclick="setOmanLang('en')">English</button>
                    <button class="lang-pill" id="lang-ar-btn" onclick="setOmanLang('ar')">العربية (Arabic)</button>
                </div>
            </div>

            <div class="row align-items-center">
                <div class="col-lg-7 mb-4 mb-lg-0">
                    <div class="om-hero-badge">
                        <i class="fa-solid fa-flag text-danger"></i>
                        <span data-i18n="hero_badge">🇴🇲 Sultanate of Oman • SME, Trading & Service ERP</span>
                    </div>
                    <h1 data-i18n="hero_title">
                        ERP Software in Oman for <span class="text-gradient-om">SMEs, Trading & Service</span> Businesses
                    </h1>
                    <div class="om-hero-sub" data-i18n="hero_sub">
                        Manage sales, purchasing, inventory, accounting, CRM, customers, suppliers, warehouses and daily operations from one connected platform.
                    </div>
                    <p class="om-hero-desc" data-i18n="hero_desc">
                        Built for Omani SMEs, trading companies, distributors, retailers, workshops, service businesses, and logistics operations. Fully aligned with Oman 5% VAT and Fawtara e-invoicing transition.
                    </p>

                    <div class="d-flex flex-wrap gap-3 mb-4">
                        <a href="javascript:void(0)" class="btn-om-primary" data-bs-toggle="modal" data-bs-target="#trialModal">
                            <i class="fa-solid fa-calendar-check"></i>
                            <span data-i18n="cta_demo">Get a Free ERP Consultation</span>
                        </a>
                        <a href="#oman-modules" class="btn-om-outline">
                            <i class="fa-solid fa-layer-group"></i>
                            <span data-i18n="cta_explore">Explore ERP Solutions</span>
                        </a>
                    </div>

                    <!-- Market Context Quick Metrics -->
                    <div class="row g-2 pt-2">
                        <div class="col-4">
                            <div class="om-stat-box">
                                <div class="om-stat-val">130K+</div>
                                <div class="om-stat-lbl" data-i18n="stat_smes">Riyada SMEs in Oman</div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="om-stat-box">
                                <div class="om-stat-val">5% VAT</div>
                                <div class="om-stat-lbl" data-i18n="stat_vat">Standard Oman Tax</div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="om-stat-box">
                                <div class="om-stat-val">Fawtara</div>
                                <div class="om-stat-lbl" data-i18n="stat_einv">E-Invoicing Ready</div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-5">
                    <div class="p-4 bg-white rounded-4 shadow-lg text-dark">
                        <h4 class="fw-bold text-dark mb-2" data-i18n="form_title">Get Tailored Oman ERP Demo</h4>
                        <p class="small text-muted mb-3" data-i18n="form_sub">Consult directly with our Oman business ERP implementation team.</p>
                        
                        <form action="send_mail.php" method="POST">
                            <input type="hidden" name="source" value="Oman Pillar Page / Main ERP">
                            <input type="hidden" name="country" value="Oman">
                            
                            <div class="mb-3">
                                <label class="form-label small fw-bold" data-i18n="f_name">Your Name / الاسم</label>
                                <input type="text" name="name" class="form-control" placeholder="Salim Al-Harthy" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label small fw-bold" data-i18n="f_company">Company Name / اسم الشركة</label>
                                <input type="text" name="company_name" class="form-control" placeholder="Muscat Commercial Trading LLC" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label small fw-bold" data-i18n="f_phone">Phone / WhatsApp / الهاتف</label>
                                <input type="tel" name="phone" class="form-control" placeholder="+968 9X XXX XXX" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label small fw-bold" data-i18n="f_city">Target Region / المنطقة</label>
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
                                <span data-i18n="f_submit">Request Free Consultation (طلب استشارة)</span>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- MARKET OVERVIEW -->
    <section class="om-section bg-white">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <span class="section-badge-om" data-i18n="sec_overview">Oman Market Overview</span>
                    <h2 class="section-title-om" data-i18n="over_title">Accessible SME & Commercial Trading Ecosystem</h2>
                    <p class="text-muted" style="line-height: 1.8;" data-i18n="over_desc1">
                        Oman represents a focused ERP opportunity centered around SMEs, trading businesses, distributors, workshops, service companies, and operationally complex growing enterprises.
                    </p>
                    <p class="text-muted" style="line-height: 1.8;" data-i18n="over_desc2">
                        Oman's official SME authority reported <strong>130,359 SMEs registered in Riyada</strong> during 2025, including 110,479 micro, 18,804 small, and 1,076 medium enterprises. Digify Soft Solutions helps these businesses solve practical everyday challenges: stock visibility, supplier disbursements, customer receivables, and 5% VAT accounting.
                    </p>
                    <div class="d-flex flex-wrap gap-2 mt-3">
                        <span class="badge bg-danger bg-opacity-10 text-danger border border-danger p-2 px-3 fw-bold">✓ 130,000+ Riyada SMEs</span>
                        <span class="badge bg-danger bg-opacity-10 text-danger border border-danger p-2 px-3 fw-bold">✓ 5% Standard VAT</span>
                        <span class="badge bg-danger bg-opacity-10 text-danger border border-danger p-2 px-3 fw-bold">✓ Fawtara E-Invoicing Ready</span>
                        <span class="badge bg-danger bg-opacity-10 text-danger border border-danger p-2 px-3 fw-bold">✓ OMR Currency & Bilingual UI</span>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="p-4 bg-light-om rounded-4 border">
                        <h5 class="fw-bold text-dark mb-3"><i class="fa-solid fa-circle-check text-danger me-2"></i> Key Operational Pain Points Solved</h5>
                        <ul class="list-unstyled mb-0" style="line-height: 2;">
                            <li><i class="fa-solid fa-check text-success me-2"></i> <strong>Inventory Visibility:</strong> Real-time tracking across warehouses and shops</li>
                            <li><i class="fa-solid fa-check text-success me-2"></i> <strong>Purchasing & Supplier Ledger:</strong> POs, landed costs, and supplier payments</li>
                            <li><i class="fa-solid fa-check text-success me-2"></i> <strong>Sales & Customer Credit:</strong> Aging analysis, credit limits, and collections</li>
                            <li><i class="fa-solid fa-check text-success me-2"></i> <strong>Oman 5% VAT & Invoices:</strong> Automated VAT books and Tax Invoices</li>
                            <li><i class="fa-solid fa-check text-success me-2"></i> <strong>Workshops & Job Cards:</strong> Vehicle history, parts used, and labor billing</li>
                            <li><i class="fa-solid fa-check text-success me-2"></i> <strong>Multi-Branch Sync:</strong> Muscat, Sohar, Salalah, Nizwa, and Duqm</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- TIER 1 PRIMARY VERTICALS -->
    <section class="om-section bg-light-om" id="oman-modules">
        <div class="container">
            <div class="text-center mb-5">
                <span class="section-badge-om" data-i18n="badge_tier1">Primary Market Focus</span>
                <h2 class="section-title-om" data-i18n="title_tier1">Core ERP Solutions for Omani Enterprises</h2>
                <p class="text-muted mx-auto" style="max-width: 720px;" data-i18n="desc_tier1">Built for practical SME operations, trading workflows, stock distribution, workshop job cards, and accounting.</p>
            </div>

            <div class="row g-4">
                <!-- 1. Trading ERP -->
                <div class="col-md-6 col-lg-4">
                    <div class="om-card">
                        <div class="om-card-icon"><i class="fa-solid fa-boxes-packing"></i></div>
                        <h4 data-i18n="mod_trade_t">Trading ERP Software</h4>
                        <p data-i18n="mod_trade_d">Purchase orders, multi-currency foreign purchasing, customer credit limits, landed cost tracking, and 5% VAT invoicing.</p>
                        <a href="trading-erp-software-oman.php" class="om-card-link"><span data-i18n="btn_explore">Explore Solution</span> <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>

                <!-- 2. Distribution ERP -->
                <div class="col-md-6 col-lg-4">
                    <div class="om-card">
                        <div class="om-card-icon"><i class="fa-solid fa-truck-ramp-box"></i></div>
                        <h4 data-i18n="mod_dist_t">Distribution ERP</h4>
                        <p data-i18n="mod_dist_d">FMCG, food, spare parts, and wholesale distribution across Muscat, Sohar, and Salalah with van sales and dealer credit.</p>
                        <a href="distribution-erp-software-oman.php" class="om-card-link"><span data-i18n="btn_explore">Explore Solution</span> <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>

                <!-- 3. Wholesale ERP -->
                <div class="col-md-6 col-lg-4">
                    <div class="om-card">
                        <div class="om-card-icon"><i class="fa-solid fa-dolly"></i></div>
                        <h4 data-i18n="mod_whole_t">Wholesale ERP</h4>
                        <p data-i18n="mod_whole_d">Tiered bulk pricing, contractor accounts, customer credit terms, container purchasing, and inter-branch transfers.</p>
                        <a href="wholesale-erp-software-oman.php" class="om-card-link"><span data-i18n="btn_explore">Explore Solution</span> <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>

                <!-- 4. Inventory Management -->
                <div class="col-md-6 col-lg-4">
                    <div class="om-card">
                        <div class="om-card-icon"><i class="fa-solid fa-warehouse"></i></div>
                        <h4 data-i18n="mod_inv_t">Inventory Management</h4>
                        <p data-i18n="mod_inv_d">Multi-warehouse stock, barcode tracking, low stock alerts, stock valuation, and fast/slow-moving SKU analytics.</p>
                        <a href="inventory-management-software-oman.php" class="om-card-link"><span data-i18n="btn_explore">Explore Solution</span> <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>

                <!-- 5. Accounting-Linked ERP -->
                <div class="col-md-6 col-lg-4">
                    <div class="om-card">
                        <div class="om-card-icon"><i class="fa-solid fa-calculator"></i></div>
                        <h4 data-i18n="mod_acc_t">Accounting-Linked ERP</h4>
                        <p data-i18n="mod_acc_d">General ledger, Oman 5% VAT records, accounts payable/receivable, expense vouchers, cash/bank journals, and P&L reports.</p>
                        <a href="accounting-erp-software-oman.php" class="om-card-link"><span data-i18n="btn_explore">Explore Solution</span> <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>

                <!-- 6. Service Business ERP -->
                <div class="col-md-6 col-lg-4">
                    <div class="om-card">
                        <div class="om-card-icon"><i class="fa-solid fa-screwdriver-wrench"></i></div>
                        <h4 data-i18n="mod_srv_t">Service Business ERP</h4>
                        <p data-i18n="mod_srv_d">Quotations, job tracking, technician assignment, parts used, customer history, and service billing for HVAC/IT/maintenance.</p>
                        <a href="service-business-erp-software-oman.php" class="om-card-link"><span data-i18n="btn_explore">Explore Solution</span> <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>

                <!-- 7. Workshop ERP -->
                <div class="col-md-6 col-lg-4">
                    <div class="om-card">
                        <div class="om-card-icon"><i class="fa-solid fa-wrench"></i></div>
                        <h4 data-i18n="mod_ws_t">Workshop & Auto Service ERP</h4>
                        <p data-i18n="mod_ws_d">Vehicle registration lookup, digital job cards, mechanic labor tracking, spare parts consumption, and combined invoices.</p>
                        <a href="workshop-erp-software-oman.php" class="om-card-link"><span data-i18n="btn_explore">Explore Solution</span> <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>

                <!-- 8. Automotive ERP -->
                <div class="col-md-6 col-lg-4">
                    <div class="om-card">
                        <div class="om-card-icon"><i class="fa-solid fa-car-side"></i></div>
                        <h4 data-i18n="mod_auto_t">Automotive & Spare Parts ERP</h4>
                        <p data-i18n="mod_auto_d">OEM part numbers, cross-reference interchange, tyre inventory, dealership sales, and warranty service management.</p>
                        <a href="automotive-erp-software-oman.php" class="om-card-link"><span data-i18n="btn_explore">Explore Solution</span> <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>

                <!-- 9. Logistics ERP -->
                <div class="col-md-6 col-lg-4">
                    <div class="om-card">
                        <div class="om-card-icon"><i class="fa-solid fa-truck-fast"></i></div>
                        <h4 data-i18n="mod_log_t">Logistics & Fleet ERP</h4>
                        <p data-i18n="mod_log_d">Transport dispatches, driver trip allowances, fuel logs, vehicle maintenance, and freight billing across Omani transport corridors.</p>
                        <a href="logistics-erp-software-oman.php" class="om-card-link"><span data-i18n="btn_explore">Explore Solution</span> <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>

                <!-- 10. Retail & POS -->
                <div class="col-md-6 col-lg-4">
                    <div class="om-card">
                        <div class="om-card-icon"><i class="fa-solid fa-cart-shopping"></i></div>
                        <h4 data-i18n="mod_ret_t">Retail ERP & POS</h4>
                        <p data-i18n="mod_ret_d">Fast barcode checkout, mall store chain synchronization, Thawani payment integration, loyalty rewards, and shift audits.</p>
                        <a href="retail-erp-software-oman.php" class="om-card-link"><span data-i18n="btn_explore">Explore Solution</span> <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>

                <!-- 11. Import & Export ERP -->
                <div class="col-md-6 col-lg-4">
                    <div class="om-card">
                        <div class="om-card-icon"><i class="fa-solid fa-ship"></i></div>
                        <h4 data-i18n="mod_impex_t">Import & Export ERP</h4>
                        <p data-i18n="mod_impex_d">Sohar Port & Salalah Port shipments, landed cost calculation, customs tariffs, container tracking, and forex accounting.</p>
                        <a href="import-export-erp-software-oman.php" class="om-card-link"><span data-i18n="btn_explore">Explore Solution</span> <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>

                <!-- 12. Fawtara E-Invoicing -->
                <div class="col-md-6 col-lg-4">
                    <div class="om-card">
                        <div class="om-card-icon"><i class="fa-solid fa-qrcode"></i></div>
                        <h4 data-i18n="mod_fawt_t">Fawtara E-Invoicing Ready</h4>
                        <p data-i18n="mod_fawt_d">Structured electronic invoices, digital audit trails, customer Tax ID verification, and preparedness for Oman Fawtara phased rollout.</p>
                        <a href="oman-e-invoicing-software.php" class="om-card-link"><span data-i18n="btn_explore">Explore Solution</span> <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- TIER 2 & TIER 3 SPECIALIZED VERTICALS -->
    <section class="om-section bg-white">
        <div class="container">
            <div class="text-center mb-5">
                <span class="section-badge-om" data-i18n="badge_tier2">Industry Depth</span>
                <h2 class="section-title-om" data-i18n="title_tier2">Secondary & Specialized Industry Suites</h2>
                <p class="text-muted mx-auto" style="max-width: 720px;" data-i18n="desc_tier2">Covering manufacturing, fisheries, building materials, food processing, and mining supply.</p>
            </div>

            <div class="row g-3">
                <div class="col-md-6 col-lg-3">
                    <div class="p-3 border rounded-3 bg-light-om h-100">
                        <h6 class="fw-bold text-dark mb-2"><i class="fa-solid fa-fish text-danger me-2"></i> <span data-i18n="spec_fish_t">Fisheries ERP</span></h6>
                        <p class="small text-muted mb-2" data-i18n="spec_fish_d">Seafood wholesale, cold storage batches, fisherman intake slips, and export documentation in Duqm & Salalah.</p>
                        <a href="fisheries-erp-software-oman.php" class="small fw-bold text-danger text-decoration-none"><span data-i18n="btn_view">View Suite</span> &rarr;</a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="p-3 border rounded-3 bg-light-om h-100">
                        <h6 class="fw-bold text-dark mb-2"><i class="fa-solid fa-industry text-danger me-2"></i> <span data-i18n="spec_mfg_t">Manufacturing ERP</span></h6>
                        <p class="small text-muted mb-2" data-i18n="spec_mfg_d">BOM formulation, work-in-progress, machine hours, scrap tracking, and Sohar industrial cluster management.</p>
                        <a href="manufacturing-erp-software-oman.php" class="small fw-bold text-danger text-decoration-none"><span data-i18n="btn_view">View Suite</span> &rarr;</a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="p-3 border rounded-3 bg-light-om h-100">
                        <h6 class="fw-bold text-dark mb-2"><i class="fa-solid fa-bowl-food text-danger me-2"></i> <span data-i18n="spec_food_t">Food Processing ERP</span></h6>
                        <p class="small text-muted mb-2" data-i18n="spec_food_d">Recipe scaling, expiry FEFO picking, packaging materials, and food safety batch tracking.</p>
                        <a href="food-processing-erp-software-oman.php" class="small fw-bold text-danger text-decoration-none"><span data-i18n="btn_view">View Suite</span> &rarr;</a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="p-3 border rounded-3 bg-light-om h-100">
                        <h6 class="fw-bold text-dark mb-2"><i class="fa-solid fa-trowel-bricks text-danger me-2"></i> <span data-i18n="spec_bldg_t">Building Materials ERP</span></h6>
                        <p class="small text-muted mb-2" data-i18n="spec_bldg_d">Cement, structural steel, tiles, dimensional unit conversions, and contractor credit lines.</p>
                        <a href="building-material-erp-software-oman.php" class="small fw-bold text-danger text-decoration-none"><span data-i18n="btn_view">View Suite</span> &rarr;</a>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3">
                    <div class="p-3 border rounded-3 bg-light-om h-100">
                        <h6 class="fw-bold text-dark mb-2"><i class="fa-solid fa-helmet-safety text-danger me-2"></i> <span data-i18n="spec_const_t">Construction ERP</span></h6>
                        <p class="small text-muted mb-2" data-i18n="spec_const_d">Project BOQ budgeting, site material requisitions, subcontractor billing, and project cash flow.</p>
                        <a href="construction-erp-software-oman.php" class="small fw-bold text-danger text-decoration-none"><span data-i18n="btn_view">View Suite</span> &rarr;</a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="p-3 border rounded-3 bg-light-om h-100">
                        <h6 class="fw-bold text-dark mb-2"><i class="fa-solid fa-mountain text-danger me-2"></i> <span data-i18n="spec_mine_t">Mining Supplier ERP</span></h6>
                        <p class="small text-muted mb-2" data-i18n="spec_mine_d">Heavy machinery spare parts, consumables, hydraulic fittings, and maintenance contractors for Yanqul & Sohar.</p>
                        <a href="mining-supplier-erp-software-oman.php" class="small fw-bold text-danger text-decoration-none"><span data-i18n="btn_view">View Suite</span> &rarr;</a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="p-3 border rounded-3 bg-light-om h-100">
                        <h6 class="fw-bold text-dark mb-2"><i class="fa-solid fa-basket-shopping text-danger me-2"></i> <span data-i18n="spec_sm_t">Supermarket ERP</span></h6>
                        <p class="small text-muted mb-2" data-i18n="spec_sm_d">Weighing scale barcode integration, fast checkout lanes, fresh produce, and FMCG reorders.</p>
                        <a href="supermarket-erp-software-oman.php" class="small fw-bold text-danger text-decoration-none"><span data-i18n="btn_view">View Suite</span> &rarr;</a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="p-3 border rounded-3 bg-light-om h-100">
                        <h6 class="fw-bold text-dark mb-2"><i class="fa-solid fa-prescription-bottle-medical text-danger me-2"></i> <span data-i18n="spec_pharma_t">Pharmacy ERP</span></h6>
                        <p class="small text-muted mb-2" data-i18n="spec_pharma_d">Drug batch expiry tracking, FEFO dispensing, prescription records, and OTC POS billing.</p>
                        <a href="pharmacy-erp-software-oman.php" class="small fw-bold text-danger text-decoration-none"><span data-i18n="btn_view">View Suite</span> &rarr;</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- OMAN TAX & FAWTARA COMPLIANCE SECTION -->
    <section class="om-section bg-light-om">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <span class="section-badge-om" data-i18n="badge_tax">Tax & Digital Invoicing</span>
                    <h2 class="section-title-om" data-i18n="title_tax">Oman 5% VAT & Fawtara-Ready Financial Architecture</h2>
                    <p class="text-muted" style="line-height: 1.8;" data-i18n="desc_tax1">
                        Businesses operating in Oman are required to maintain structured accounting records under the Oman Tax Authority guidelines. Oman's standard VAT rate is <strong>5%</strong>, with mandatory VAT registration at <strong>OMR 38,500</strong> annual taxable supplies.
                    </p>
                    <p class="text-muted" style="line-height: 1.8;" data-i18n="desc_tax2">
                        Oman's Tax Authority is introducing the <strong>Fawtara e-invoicing framework</strong> using a 5-corner model. Digify Soft Solutions provides structured transaction logs, customer Tax IDs, and digital invoice archiving ready for future e-invoicing compliance.
                    </p>
                    <div class="d-flex flex-wrap gap-2 mt-3">
                        <span class="badge bg-danger bg-opacity-10 text-danger border border-danger p-2 px-3 fw-bold" data-i18n="tag_vat5">✓ Standard 5% VAT Calculations</span>
                        <span class="badge bg-danger bg-opacity-10 text-danger border border-danger p-2 px-3 fw-bold" data-i18n="tag_omr">✓ OMR Currency & Dual Language</span>
                        <span class="badge bg-danger bg-opacity-10 text-danger border border-danger p-2 px-3 fw-bold" data-i18n="tag_fawt">✓ Structured Fawtara Data Models</span>
                        <span class="badge bg-danger bg-opacity-10 text-danger border border-danger p-2 px-3 fw-bold" data-i18n="tag_multi">✓ Multi-Warehouse & Inter-Branch Ledgers</span>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="p-4 bg-white rounded-4 border shadow-sm">
                        <h5 class="fw-bold text-dark mb-3"><i class="fa-solid fa-shield-halved text-danger me-2"></i> <span data-i18n="box_tax_t">Compliance & Tax Positioning Notice</span></h5>
                        <p class="text-muted small" style="line-height: 1.8;" data-i18n="box_tax_d1">
                            Digify Soft Solutions supports organized financial records, tax invoices, and reporting required for Oman VAT compliance. 
                        </p>
                        <p class="text-muted small mb-0" style="line-height: 1.8;" data-i18n="box_tax_d2">
                            <em>*Note: Digify provides software tools for VAT and electronic transaction record-keeping. Businesses should verify their specific tax and e-invoicing filing obligations with the Oman Tax Authority or certified tax consultants.</em>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- OMAN STRATEGIC CITIES -->
    <section class="om-section bg-white">
        <div class="container">
            <div class="text-center mb-5">
                <span class="section-badge-om" data-i18n="badge_city">Regional Footprint</span>
                <h2 class="section-title-om" data-i18n="title_city">Dedicated Regional & Industrial Hubs in Oman</h2>
                <p class="text-muted mx-auto" style="max-width: 700px;" data-i18n="desc_city">Tailored solutions for businesses operating in Oman\'s key commercial and industrial centers.</p>
            </div>

            <div class="row g-4">
                <div class="col-md-6 col-lg-4">
                    <div class="p-4 bg-light-om rounded-4 border h-100">
                        <h5 class="fw-bold text-dark mb-2"><i class="fa-solid fa-city text-danger me-2"></i> Muscat (مسقط)</h5>
                        <p class="small text-muted mb-3" data-i18n="city_mct_d">Headquarters, commercial trading companies, retail mall chains, corporate services, and regional distribution centers in the capital.</p>
                        <a href="erp-software-muscat.php" class="btn btn-sm btn-outline-danger rounded-pill fw-bold"><span data-i18n="btn_hub">Muscat ERP Hub</span> &rarr;</a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="p-4 bg-light-om rounded-4 border h-100">
                        <h5 class="fw-bold text-dark mb-2"><i class="fa-solid fa-industry text-danger me-2"></i> Sohar (صحار)</h5>
                        <p class="small text-muted mb-3" data-i18n="city_shr_d">Sohar Port & Freezone manufacturing plants, industrial suppliers, metal fabrication, logistics, and building materials.</p>
                        <a href="erp-software-sohar.php" class="btn btn-sm btn-outline-danger rounded-pill fw-bold"><span data-i18n="btn_hub">Sohar ERP Hub</span> &rarr;</a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="p-4 bg-light-om rounded-4 border h-100">
                        <h5 class="fw-bold text-dark mb-2"><i class="fa-solid fa-water text-danger me-2"></i> Salalah (صلالة)</h5>
                        <p class="small text-muted mb-3" data-i18n="city_sll_d">Dhofar regional distribution, Salalah Port transshipment, fisheries, food processing, tourism, and freezone trade.</p>
                        <a href="erp-software-salalah.php" class="btn btn-sm btn-outline-danger rounded-pill fw-bold"><span data-i18n="btn_hub">Salalah ERP Hub</span> &rarr;</a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6">
                    <div class="p-4 bg-light-om rounded-4 border h-100">
                        <h5 class="fw-bold text-dark mb-2"><i class="fa-solid fa-landmark text-danger me-2"></i> Nizwa & Ad Dakhiliyah (نزوى)</h5>
                        <p class="small text-muted mb-3" data-i18n="city_nzw_d">Interior trading, retail businesses, agricultural processing, automotive workshops, and building materials supply.</p>
                        <a href="erp-software-nizwa.php" class="btn btn-sm btn-outline-danger rounded-pill fw-bold"><span data-i18n="btn_hub">Nizwa ERP Hub</span> &rarr;</a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6">
                    <div class="p-4 bg-light-om rounded-4 border h-100">
                        <h5 class="fw-bold text-dark mb-2"><i class="fa-solid fa-anchor text-danger me-2"></i> Duqm Special Economic Zone (الدقم)</h5>
                        <p class="small text-muted mb-3" data-i18n="city_dqm_d">Duqm SEZ mega-projects, marine fisheries processing, heavy industrial contractors, port logistics, and bonded yard operations.</p>
                        <a href="erp-software-duqm.php" class="btn btn-sm btn-outline-danger rounded-pill fw-bold"><span data-i18n="btn_hub">Duqm ERP Hub</span> &rarr;</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQS -->
    <section class="om-section bg-light-om">
        <div class="container">
            <div class="text-center mb-5">
                <span class="section-badge-om" data-i18n="badge_faq">Questions & Answers</span>
                <h2 class="section-title-om" data-i18n="title_faq">Frequently Asked Questions</h2>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="accordion" id="omanFaqAccordion">
                        <div class="accordion-item mb-3 border rounded-3 overflow-hidden">
                            <h2 class="accordion-header">
                                <button class="accordion-button fw-bold text-dark" type="button" data-bs-toggle="collapse" data-bs-target="#faq1">
                                    <span data-i18n="faq_q1">What is ERP software in Oman and how does it help SMEs?</span>
                                </button>
                            </h2>
                            <div id="faq1" class="accordion-collapse collapse show" data-bs-parent="#omanFaqAccordion">
                                <div class="accordion-body text-muted small" style="line-height: 1.8;" data-i18n="faq_a1">
                                    ERP software in Oman connects sales, purchases, inventory, accounting records, customers, suppliers, and multi-branch operations into one unified system, eliminating disconnected spreadsheets and manual errors.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item mb-3 border rounded-3 overflow-hidden">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed fw-bold text-dark" type="button" data-bs-toggle="collapse" data-bs-target="#faq2">
                                    <span data-i18n="faq_q2">What VAT rate applies in Oman and does Digify manage it?</span>
                                </button>
                            </h2>
                            <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#omanFaqAccordion">
                                <div class="accordion-body text-muted small" style="line-height: 1.8;" data-i18n="faq_a2">
                                    Oman's standard VAT rate is 5%. Digify automates 5% VAT calculations on sales and purchases, validates customer Tax IDs, issues compliant tax invoices, and produces monthly tax audit registers.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item mb-3 border rounded-3 overflow-hidden">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed fw-bold text-dark" type="button" data-bs-toggle="collapse" data-bs-target="#faq3">
                                    <span data-i18n="faq_q3">How does Digify prepare businesses for Oman Fawtara e-invoicing?</span>
                                </button>
                            </h2>
                            <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#omanFaqAccordion">
                                <div class="accordion-body text-muted small" style="line-height: 1.8;" data-i18n="faq_a3">
                                    Digify organizes invoice and customer data into structured electronic formats with digital identifiers and tamper-evident audit logs, ensuring seamless readiness for Oman's phased Fawtara e-invoicing rollout.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item mb-3 border rounded-3 overflow-hidden">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed fw-bold text-dark" type="button" data-bs-toggle="collapse" data-bs-target="#faq4">
                                    <span data-i18n="faq_q4">Can Digify manage multiple warehouses and branches across Muscat, Sohar, and Salalah?</span>
                                </button>
                            </h2>
                            <div id="faq4" class="accordion-collapse collapse" data-bs-parent="#omanFaqAccordion">
                                <div class="accordion-body text-muted small" style="line-height: 1.8;" data-i18n="faq_a4">
                                    Yes. Digify provides true real-time cloud multi-warehouse management with inter-branch stock transfers, minimum stock alerts, and consolidated executive reporting across all Omani governorates.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FINAL CTA -->
    <section class="py-5" style="background: linear-gradient(135deg, #091b2e 0%, #0d3824 100%); color: #ffffff;">
        <div class="container text-center py-4">
            <h2 class="fw-bold mb-3" data-i18n="cta_h2">Empower Your Oman Business with Digify ERP</h2>
            <p class="mx-auto mb-4 text-white-50" style="max-width: 720px; font-size: 16px;" data-i18n="cta_p">
                Connect sales, purchasing, inventory, 5% VAT accounting, CRM, and branch operations in one modern, scalable platform.
            </p>
            <div class="d-flex justify-content-center flex-wrap gap-3">
                <button type="button" class="btn btn-danger px-4 py-3 fw-bold rounded-pill" data-bs-toggle="modal" data-bs-target="#trialModal">
                    <i class="fa-solid fa-calendar-check me-2"></i> <span data-i18n="cta_b1">Request Free Oman Demo</span>
                </button>
                <a href="#oman-modules" class="btn btn-outline-light px-4 py-3 fw-bold rounded-pill">
                    <i class="fa-solid fa-list-check me-2"></i> <span data-i18n="cta_b2">Browse All Oman Verticals</span>
                </a>
            </div>
        </div>
    </section>
</div>

<script>
// Bilingual Switcher for Oman Pillar Page
const omanI18n = {
    en: {
        hero_badge: "🇴🇲 Sultanate of Oman • SME, Trading & Service ERP",
        hero_title: 'ERP Software in Oman for <span class="text-gradient-om">SMEs, Trading & Service</span> Businesses',
        hero_sub: "Manage sales, purchasing, inventory, accounting, CRM, customers, suppliers, warehouses and daily operations from one connected platform.",
        hero_desc: "Built for Omani SMEs, trading companies, distributors, retailers, workshops, service businesses, and logistics operations. Fully aligned with Oman 5% VAT and Fawtara e-invoicing transition.",
        cta_demo: "Get a Free ERP Consultation",
        cta_explore: "Explore ERP Solutions",
        stat_smes: "Riyada SMEs in Oman",
        stat_vat: "Standard Oman Tax",
        stat_einv: "E-Invoicing Ready",
        form_title: "Get Tailored Oman ERP Demo",
        form_sub: "Consult directly with our Oman business ERP implementation team.",
        f_name: "Your Name / الاسم",
        f_company: "Company Name / اسم الشركة",
        f_phone: "Phone / WhatsApp / الهاتف",
        f_city: "Target Region / المنطقة",
        f_submit: "Request Free Consultation (طلب استشارة)",
        sec_overview: "Oman Market Overview",
        over_title: "Accessible SME & Commercial Trading Ecosystem",
        over_desc1: "Oman represents a focused ERP opportunity centered around SMEs, trading businesses, distributors, workshops, service companies, and operationally complex growing enterprises.",
        over_desc2: "Oman's official SME authority reported 130,359 SMEs registered in Riyada during 2025, including 110,479 micro, 18,804 small, and 1,076 medium enterprises. Digify Soft Solutions helps these businesses solve practical everyday challenges.",
        badge_tier1: "Primary Market Focus",
        title_tier1: "Core ERP Solutions for Omani Enterprises",
        desc_tier1: "Built for practical SME operations, trading workflows, stock distribution, workshop job cards, and accounting.",
        btn_explore: "Explore Solution",
        mod_trade_t: "Trading ERP Software",
        mod_trade_d: "Purchase orders, multi-currency foreign purchasing, customer credit limits, landed cost tracking, and 5% VAT invoicing.",
        mod_dist_t: "Distribution ERP",
        mod_dist_d: "FMCG, food, spare parts, and wholesale distribution across Muscat, Sohar, and Salalah with van sales and dealer credit.",
        mod_whole_t: "Wholesale ERP",
        mod_whole_d: "Tiered bulk pricing, contractor accounts, customer credit terms, container purchasing, and inter-branch transfers.",
        mod_inv_t: "Inventory Management",
        mod_inv_d: "Multi-warehouse stock, barcode tracking, low stock alerts, stock valuation, and fast/slow-moving SKU analytics.",
        mod_acc_t: "Accounting-Linked ERP",
        mod_acc_d: "General ledger, Oman 5% VAT records, accounts payable/receivable, expense vouchers, cash/bank journals, and P&L reports.",
        mod_srv_t: "Service Business ERP",
        mod_srv_d: "Quotations, job tracking, technician assignment, parts used, customer history, and service billing for HVAC/IT/maintenance.",
        mod_ws_t: "Workshop & Auto Service ERP",
        mod_ws_d: "Vehicle registration lookup, digital job cards, mechanic labor tracking, spare parts consumption, and combined invoices.",
        mod_auto_t: "Automotive & Spare Parts ERP",
        mod_auto_d: "OEM part numbers, cross-reference interchange, tyre inventory, dealership sales, and warranty service management.",
        mod_log_t: "Logistics & Fleet ERP",
        mod_log_d: "Transport dispatches, driver trip allowances, fuel logs, vehicle maintenance, and freight billing across Omani transport corridors.",
        mod_ret_t: "Retail ERP & POS",
        mod_ret_d: "Fast barcode checkout, mall store chain synchronization, Thawani payment integration, loyalty rewards, and shift audits.",
        mod_impex_t: "Import & Export ERP",
        mod_impex_d: "Sohar Port & Salalah Port shipments, landed cost calculation, customs tariffs, container tracking, and forex accounting.",
        mod_fawt_t: "Fawtara E-Invoicing Ready",
        mod_fawt_d: "Structured electronic invoices, digital audit trails, customer Tax ID verification, and preparedness for Oman Fawtara phased rollout.",
        badge_tier2: "Industry Depth",
        title_tier2: "Secondary & Specialized Industry Suites",
        desc_tier2: "Covering manufacturing, fisheries, building materials, food processing, and mining supply.",
        btn_view: "View Suite",
        spec_fish_t: "Fisheries ERP",
        spec_fish_d: "Seafood wholesale, cold storage batches, fisherman intake slips, and export documentation in Duqm & Salalah.",
        spec_mfg_t: "Manufacturing ERP",
        spec_mfg_d: "BOM formulation, work-in-progress, machine hours, scrap tracking, and Sohar industrial cluster management.",
        spec_food_t: "Food Processing ERP",
        spec_food_d: "Recipe scaling, expiry FEFO picking, packaging materials, and food safety batch tracking.",
        spec_bldg_t: "Building Materials ERP",
        spec_bldg_d: "Cement, structural steel, tiles, dimensional unit conversions, and contractor credit lines.",
        spec_const_t: "Construction ERP",
        spec_const_d: "Project BOQ budgeting, site material requisitions, subcontractor billing, and project cash flow.",
        spec_mine_t: "Mining Supplier ERP",
        spec_mine_d: "Heavy machinery spare parts, consumables, hydraulic fittings, and maintenance contractors for Yanqul & Sohar.",
        spec_sm_t: "Supermarket ERP",
        spec_sm_d: "Weighing scale barcode integration, fast checkout lanes, fresh produce, and FMCG reorders.",
        spec_pharma_t: "Pharmacy ERP",
        spec_pharma_d: "Drug batch expiry tracking, FEFO dispensing, prescription records, and OTC POS billing.",
        badge_tax: "Tax & Digital Invoicing",
        title_tax: "Oman 5% VAT & Fawtara-Ready Financial Architecture",
        desc_tax1: "Businesses operating in Oman are required to maintain structured accounting records under the Oman Tax Authority guidelines. Oman's standard VAT rate is 5%, with mandatory VAT registration at OMR 38,500 annual taxable supplies.",
        desc_tax2: "Oman's Tax Authority is introducing the Fawtara e-invoicing framework using a 5-corner model. Digify Soft Solutions provides structured transaction logs, customer Tax IDs, and digital invoice archiving ready for future e-invoicing compliance.",
        tag_vat5: "✓ Standard 5% VAT Calculations",
        tag_omr: "✓ OMR Currency & Dual Language",
        tag_fawt: "✓ Structured Fawtara Data Models",
        tag_multi: "✓ Multi-Warehouse & Inter-Branch Ledgers",
        box_tax_t: "Compliance & Tax Positioning Notice",
        box_tax_d1: "Digify Soft Solutions supports organized financial records, tax invoices, and reporting required for Oman VAT compliance.",
        box_tax_d2: "*Note: Digify provides software tools for VAT and electronic transaction record-keeping. Businesses should verify their specific tax and e-invoicing filing obligations with the Oman Tax Authority or certified tax consultants.",
        badge_city: "Regional Footprint",
        title_city: "Dedicated Regional & Industrial Hubs in Oman",
        desc_city: "Tailored solutions for businesses operating in Oman's key commercial and industrial centers.",
        btn_hub: "Explore ERP Hub",
        city_mct_d: "Headquarters, commercial trading companies, retail mall chains, corporate services, and regional distribution centers in the capital.",
        city_shr_d: "Sohar Port & Freezone manufacturing plants, industrial suppliers, metal fabrication, logistics, and building materials.",
        city_sll_d: "Dhofar regional distribution, Salalah Port transshipment, fisheries, food processing, tourism, and freezone trade.",
        city_nzw_d: "Interior trading, retail businesses, agricultural processing, automotive workshops, and building materials supply.",
        city_dqm_d: "Duqm SEZ mega-projects, marine fisheries processing, heavy industrial contractors, port logistics, and bonded yard operations.",
        badge_faq: "Questions & Answers",
        title_faq: "Frequently Asked Questions",
        faq_q1: "What is ERP software in Oman and how does it help SMEs?",
        faq_a1: "ERP software in Oman connects sales, purchases, inventory, accounting records, customers, suppliers, and multi-branch operations into one unified system, eliminating disconnected spreadsheets and manual errors.",
        faq_q2: "What VAT rate applies in Oman and does Digify manage it?",
        faq_a2: "Oman's standard VAT rate is 5%. Digify automates 5% VAT calculations on sales and purchases, validates customer Tax IDs, issues compliant tax invoices, and produces monthly tax audit registers.",
        faq_q3: "How does Digify prepare businesses for Oman Fawtara e-invoicing?",
        faq_a3: "Digify organizes invoice and customer data into structured electronic formats with digital identifiers and tamper-evident audit logs, ensuring seamless readiness for Oman's phased Fawtara e-invoicing rollout.",
        faq_q4: "Can Digify manage multiple warehouses and branches across Muscat, Sohar, and Salalah?",
        faq_a4: "Yes. Digify provides true real-time cloud multi-warehouse management with inter-branch stock transfers, minimum stock alerts, and consolidated executive reporting across all Omani governorates.",
        cta_h2: "Empower Your Oman Business with Digify ERP",
        cta_p: "Connect sales, purchasing, inventory, 5% VAT accounting, CRM, and branch operations in one modern, scalable platform.",
        cta_b1: "Request Free Oman Demo",
        cta_b2: "Browse All Oman Verticals"
    },
    ar: {
        hero_badge: "🇴🇲 سلطنة عُمان • نظام ERP للمؤسسات والتجارة والخدمات",
        hero_title: 'برنامج ERP في سلطنة عُمان <span class="text-gradient-om">للشركات والتجارة والخدمات</span>',
        hero_sub: "إدارة المبيعات، المشتريات، المخزون، الحسابات، إدارة العملاء، الموردين، المستودعات والعمليات اليومية من منصة سحابية موحدة.",
        hero_desc: "مصمم خصيصاً للمؤسسات والشركات العمانية، شركات التجارة والتوزيع والمتاجر والورش واللوجستيات، ومتوافق تماماً مع ضريبة القيمة المضافة 5% ونظام الفوترة الإلكترونية (فاتورة).",
        cta_demo: "طلب استشارة مجانية",
        cta_explore: "استكشف حلول ERP",
        stat_smes: "مؤسسة مسجلة في ريادة",
        stat_vat: "ضريبة القيمة المضافة",
        stat_einv: "جاهز للفوترة الإلكترونية",
        form_title: "طلب عرض تجريبي مخصص لعُمان",
        form_sub: "تحدث مباشرة مع فريق استشاريي أنظمة تخطيط الموارد في عُمان.",
        f_name: "الاسم الكريم",
        f_company: "اسم الشركة / المؤسسة",
        f_phone: "رقم الهاتف / الواتساب",
        f_city: "المحافظة / المنطقة",
        f_submit: "طلب استشارة مجانية الآن",
        sec_overview: "نظرة عامة على السوق العماني",
        over_title: "بيئة أعمال حيوية للمؤسسات والشركات التجارية",
        over_desc1: "تمثل سلطنة عُمان بيئة اقتصادية نشطة للمؤسسات الصغيرة والمتوسطة وشركات الاستيراد والتصدير والتوزيع والخدمات.",
        over_desc2: "مع وجود أكثر من 130,359 مؤسسة مسجلة في ريادة، يقدم ديجيفاي حلولاً عملية لإدارة المخزون، وفواتير الضريبة 5%، ومتابعة حسابات الموردين والعملاء.",
        badge_tier1: "الحلول الرئيسية",
        title_tier1: "أنظمة ERP الأساسية للمؤسسات العمانية",
        desc_tier1: "مصممة لإدارة العمليات التجارية اليومية وحسابات الضريبة وبطاقات عمل الورش ومستودعات التوزيع.",
        btn_explore: "استكشف الحل",
        mod_trade_t: "برنامج ERP للشركات التجارية",
        mod_trade_d: "أوامر الشراء، الاستيراد بالعملات الأجنبية، احتساب التكلفة الإجمالية الواصلة، وحدود ائتمان العملاء، وفواتير الضريبة 5%.",
        mod_dist_t: "نظام ERP لشركات التوزيع",
        mod_dist_d: "توزيع السلع الاستهلاكية والمواد الغذائية وقطع الغيار عبر مسقط وصحار وصلالة مع مبيعات الفان (Van Sales).",
        mod_whole_t: "نظام ERP لتجارة الجملة",
        mod_whole_d: "تسعير الكميات المتدرج، حسابات المقاولين والشركات، وإدارة ائتمان العملاء، وحاويات الاستيراد.",
        mod_inv_t: "إدارة المخزون والمستودعات",
        mod_inv_d: "تتبع المخزون في مستودعات متعددة، الباركود، تنبيهات نقص المخزون، وتقييم البضائع بالريال العماني.",
        mod_acc_t: "المحاسبة والضريبة 5%",
        mod_acc_d: "دفتر الأستاذ العام، دفاتر المشتريات والمبيعات لضريبة القيمة المضافة 5%، والمدفوعات والمقبوضات وقوائم الأرباح.",
        mod_srv_t: "نظام إدارة الخدمات والصيانة",
        mod_srv_d: "عروض الأسعار، متابعة مهام الفنيين في الموقع، استهلاك قطع الغيار، وفواتير عقود الصيانة السنوية (AMC).",
        mod_ws_t: "برنامج إدارة ورش السيارات",
        mod_ws_d: "تسجيل المركبات برقم اللوحة، بطاقات العمل الرقمية (Job Cards)، أجور الميكانيكيين، وقطع الغيار المستخدمة.",
        mod_auto_t: "نظام قطع غيار السيارات",
        mod_auto_d: "كتالوج أرقام القطع الأصلية (OEM)، البدائل المتوافقة، إدارة الإطارات، ومبيعات الكاونتر ومحلات التجزئة.",
        mod_log_t: "إدارة النقل واللوجستيات",
        mod_log_d: "أوامر النقل والشحن، مخصصات السائقين، استهلاك الوقود، وصيانة الشاحنات عبر الموانئ والمحافظات.",
        mod_ret_t: "نقاط البيع ومحلات التجزئة",
        mod_ret_d: "كاشير فائق السرعة، مزامنة فروع المولات، الدفع الرقمي عبر ثواني والبطاقات البنكية، ونظام الولاء.",
        mod_impex_t: "الاستيراد والتصدير والموانئ",
        mod_impex_d: "شحنات ميناء صحار وميناء صلالة، التعرفة الجمركية، تتبع الحاويات، وفروقات أسعار الصرف الأجنبي.",
        mod_fawt_t: "جاهز للفوترة الإلكترونية (فاتورة)",
        mod_fawt_d: "فواتير إلكترونية منظمة، رمز الاستجابة السريع QR، سجلات تدقيق رقمية، والجاهزية لمراحل مشروع فاتورة.",
        badge_tier2: "القطاعات التخصصية",
        title_tier2: "حلول سحابية متخصصة للقطاعات الحيوية",
        desc_tier2: "تغطي قطاعات التصنيع، الثروة السمكية، مواد البناء، الصناعات الغذائية، وموردي التعدين.",
        btn_view: "عرض النظام",
        spec_fish_t: "إدارة الثروة السمكية والمأكولات البحرية",
        spec_fish_d: "استلام صيد الصيادين، مستودعات التجميد والتبريد، تصنيف الجودة، ووثائق التصدير في الدقم وصلالة.",
        spec_mfg_t: "نظام إدارة التصنيع والإنتاج",
        spec_mfg_d: "هياكل المنتجات (BOM)، تتبع أوامر التشغيل، استهلاك المواد الخام، ومصانع منطقة صحار الصناعية.",
        spec_food_t: "تصنيع الأغذية والمخابز",
        spec_food_d: "معادلات الوصفات، تتبع تواريخ الصلاحية (FEFO)، مواد التعبئة والتغليف، وتوزيع المواد الغذائية.",
        spec_bldg_t: "إدارة تجارة مواد البناء والحديد",
        spec_bldg_d: "الأسمنت، حديد التسليح، السيراميك، وحدات القياس المزدوجة، وحسابات ائتمان المقاولين.",
        spec_const_t: "برنامج شركات المقاولات والإنشاءات",
        spec_const_d: "ميزانيات جداول الكميات (BOQ)، صرف المواد للمواقع، مستخلصات مقاولي الباطن، وتدفقات السيولة.",
        spec_mine_t: "موردو معدات وقطع التعدين",
        spec_mine_d: "قطع غيار المعدات الثقيلة، خراطيم الهيدروليك، عقود صيانة الكسارات في ينقل وصحار.",
        spec_sm_t: "إدارة السوبرماركت والمواد التموينية",
        spec_sm_d: "ربط موازين الباركود الإلكترونية، مسارات الدفع السريع، وإعادة طلب السلع الاستهلاكية.",
        spec_pharma_t: "إدارة الصيدليات والمستلزمات الطبية",
        spec_pharma_d: "تتبع تشغيلات الأدوية (Batch)، تواريخ الانتهاء، صرف الوصفات، ومبيعات الكاونتر.",
        badge_tax: "الضريبة والفوترة الرقمية",
        title_tax: "هيكلية مالية متوافقة مع ضريبة القيمة المضافة 5% والفوترة الإلكترونية",
        desc_tax1: "يتطلب العمل في سلطنة عُمان تنظيم السجلات المحاسبية والضريبية بدقة؛ تبلغ النسبة الأساسية لضريبة القيمة المضافة 5% مع حد التسجيل الإلزامي 38,500 ريال عماني سنوياً.",
        desc_tax2: "تعمل جهاز الضرائب في عُمان على تطبيق نظام الفوترة الإلكترونية (مشروع فاتورة)، ويوفر ديجيفاي تنسيقاً رقمياً آمناً لبيانات المعاملات والفواتير بما يضمن جاهزية المؤسسة.",
        tag_vat5: "✓ احتساب دقيق للضريبة 5%",
        tag_omr: "✓ العملة بالريال العماني وواجهة ثنائية اللغة",
        tag_fawt: "✓ جاهزية لنظام فاتورة الإلكتروني",
        tag_multi: "✓ سجلات محاسبية موحدة للمستودعات والفروع",
        box_tax_t: "إشعار التوافق والامتثال الضريبي",
        box_tax_d1: "يدعم نظام ديجيفاي تنظيم الفواتير والسجلات المحاسبية المطلوبة للامتثال الضريبي في سلطنة عُمان.",
        box_tax_d2: "*ملاحظة: يوفر ديجيفاي الأدوات البرمجية لحفظ السجلات وإصدار الفواتير، وينبغي للشركات مراجعة متطلبات التسجيل والإقرار مع جهاز الضرائب أو المستشار الضريبي المعتمد.",
        badge_city: "التواجد الجغرافي",
        title_city: "مراكز الأعمال والمناطق الصناعية في سلطنة عُمان",
        desc_city: "حلول مهيأة للشركات العاملة في أهم المحافظات والمناطق الاقتصادية.",
        btn_hub: "استكشف النظام للمحافظة",
        city_mct_d: "المقرات الرئيسية، الشركات التجارية، سلاسل التجزئة في المولات، والخدمات المهنية ومراكز التوزيع بالعاصمة.",
        city_shr_d: "مصانع ميناء ومنطقة صحار الحرة، موردي المعدات، تشكيل المعادن، والخدمات اللوجستية ومواد البناء.",
        city_sll_d: "التوزيع الإقليمي في ظفار، ميناء صلالة، معالجة الأسماك، الصناعات الغذائية، والسياحة ومتاجر المنطقة الحرة.",
        city_nzw_d: "التجارة الداخلية، متاجر التجزئة، تصنيع وتعبئة التمور، ورش صيانة السيارات، وموردي مواد البناء.",
        city_dqm_d: "المشاريع الكبرى بالمنطقة الاقتصادية الخاصة بالدقم، معالجة الأسماك، مقاولو الإنشاءات، واللوجستيات البحرية.",
        badge_faq: "الأسئلة الشائعة",
        title_faq: "الأسئلة الأكثر تكراراً حول النظام في عُمان",
        faq_q1: "ما هو نظام ERP في عُمان وكيف يفيد المؤسسات؟",
        faq_a1: "نظام تخطيط موارد المؤسسات يربط المبيعات والمشتريات والمخزون والحسابات وإدارة العملاء والفروع في قاعدة بيانات واحدة موحدة، مما يقضي على تكرار البيانات والأخطاء اليدوية.",
        faq_q2: "ما هي نسبة ضريبة القيمة المضافة في عُمان وهل يدعمها النظام؟",
        faq_a2: "النسبة الأساسية للضريبة في سلطنة عُمان هي 5%. يقوم النظام بحساب الضريبة تلقائياً وإصدار الفواتير الضريبية وتوليد كشوفات الإقرار الضريبي الشهرية والربع سنوية.",
        faq_q3: "كيف يجهز النظام الشركات العمانية لمشروع فاتورة الإلكتروني؟",
        faq_a3: "ينظم ديجيفاي بيانات العملاء والأصناف والفواتير بصيغ إلكترونية منظمة مع رمز التحقق QR وتشفير السجلات لضمان التوافق التام مع متطلبات الفوترة الرقمية.",
        faq_q4: "هل يمكن إدارة فروع ومستودعات متعددة عبر مسقط وصحار وصلالة؟",
        faq_a4: "نعم، يوفر النظام إدارة سحابية لحظية للمستودعات المتعددة مع تحويلات البضائع بين الفروع وتنبيهات مستويات الأمان وتقارير الأرباح الموحدة.",
        cta_h2: "طوّر أعمال مؤسستك في عُمان مع نظام ديجيفاي ERP",
        cta_p: "اربط المبيعات والمشتريات والمخزون وحسابات الضريبة 5% وإدارة الفروع في منصة سحابية واحدة قوية.",
        cta_b1: "طلب عرض تجريبي مجاني لعُمان",
        cta_b2: "تصفح كافة حلول القطاعات في عُمان"
    }
};

function setOmanLang(lang) {
    const dict = omanI18n[lang];
    if (!dict) return;
    
    document.querySelectorAll('[data-i18n]').forEach(el => {
        const key = el.getAttribute('data-i18n');
        if (dict[key]) {
            el.innerHTML = dict[key];
        }
    });

    document.getElementById('lang-en-btn').classList.toggle('active', lang === 'en');
    document.getElementById('lang-ar-btn').classList.toggle('active', lang === 'ar');
    
    const wrapper = document.querySelector('.om-page-wrapper');
    if (lang === 'ar') {
        wrapper.classList.add('om-ar-font');
        wrapper.setAttribute('dir', 'rtl');
    } else {
        wrapper.classList.remove('om-ar-font');
        wrapper.removeAttribute('dir');
    }
}
</script>

<?php include('trial_modal.php'); ?>
<?php include(__DIR__ . '/../../footer.php'); ?>

