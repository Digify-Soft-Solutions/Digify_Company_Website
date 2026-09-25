<?php
  include 'db.php';
  include 'fetch_meta.php';

  $pageMeta = getPageMeta('restaurant');
  $pageTitle = $pageMeta['page_title'] ?? 'Best Restaurant & Café Management Software, POS & KOT Billing – Digify';
  $pageDescription = $pageMeta['page_description'] ?? 'Cloud-based Restaurant & Café POS, Kitchen Order Ticket (KOT), Table Management, Recipe Costing, and Multi-Outlet ERP starting at ₹1,000/month.';
  $pageKeywords = $pageMeta['page_keywords'] ?? 'restaurant pos software india, cafe billing software, KOT software, restaurant inventory and food cost software, multi-outlet restaurant erp';

  include 'top.php';
  include 'header.php';
?>

<!-- Custom World-Class Scoped Styles for Restaurant Page -->
<style>
/* ==========================================================================
   🏆 WORLD-CLASS RESTAURANT & CAFÉ OPERATING SYSTEM DESIGN
   ========================================================================== */
.rest-page-wrapper {
    font-family: 'Raleway', sans-serif;
    color: #1e293b;
    overflow-x: hidden;
}

/* 1. HERO SECTION */
.rest-hero {
    position: relative;
    padding: 70px 0 80px;
    background: radial-gradient(circle at 85% 20%, rgba(224, 105, 48, 0.18), transparent 45%),
                radial-gradient(circle at 15% 85%, rgba(59, 130, 246, 0.15), transparent 45%),
                linear-gradient(135deg, #0a0f1d 0%, #0f172a 50%, #1e293b 100%);
    color: #ffffff;
    overflow: hidden;
}

.rest-hero-blob {
    position: absolute;
    width: 600px;
    height: 600px;
    background: radial-gradient(circle, rgba(224, 105, 48, 0.12) 0%, transparent 70%);
    top: -150px;
    right: -100px;
    filter: blur(60px);
    pointer-events: none;
}

.rest-badge {
    background: rgba(224, 105, 48, 0.15);
    border: 1px solid rgba(224, 105, 48, 0.4);
    color: #fbc145;
    padding: 6px 18px;
    border-radius: 30px;
    font-size: 13px;
    font-weight: 700;
    letter-spacing: 0.5px;
    display: inline-flex;
    align-items: center;
    gap: 8px;
    margin-bottom: 20px;
}

.rest-hero-title {
    font-size: 46px;
    font-weight: 900;
    line-height: 1.15;
    letter-spacing: -1px;
    color: #ffffff;
    margin-bottom: 20px;
}

.rest-hero-title span.highlight {
    background: linear-gradient(135deg, #e06930 0%, #fbc145 100%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    display: inline-block;
}

.rest-hero-subtitle {
    font-size: 16.5px;
    line-height: 1.7;
    color: #cbd5e1;
    font-weight: 400;
    max-width: 580px;
    margin-bottom: 28px;
}

/* Pricing Hero Pill */
.rest-pricing-card {
    background: rgba(255, 255, 255, 0.06);
    border: 1px solid rgba(255, 255, 255, 0.12);
    border-radius: 16px;
    padding: 16px 20px;
    display: flex;
    align-items: center;
    gap: 16px;
    max-width: 540px;
    margin-bottom: 30px;
    backdrop-filter: blur(10px);
}

.rest-pricing-badge {
    background: linear-gradient(135deg, #e06930 0%, #fbc145 100%);
    color: #ffffff;
    border-radius: 12px;
    padding: 10px 18px;
    text-align: center;
    min-width: 120px;
}

.rest-pricing-badge .label {
    font-size: 10.5px;
    text-transform: uppercase;
    font-weight: 800;
    display: block;
    letter-spacing: 0.5px;
}

.rest-pricing-badge .amount {
    font-size: 24px;
    font-weight: 900;
    line-height: 1;
}

.rest-pricing-info {
    font-size: 13.5px;
    line-height: 1.5;
    color: #e2e8f0;
}

.rest-pricing-info strong {
    color: #fbc145;
}

/* Action Buttons */
.btn-rest-primary {
    background: linear-gradient(135deg, #e06930 0%, #fbc145 100%);
    color: #ffffff !important;
    font-weight: 700;
    font-size: 15px;
    padding: 14px 32px;
    border-radius: 30px;
    border: none;
    box-shadow: 0 8px 25px rgba(224, 105, 48, 0.35);
    transition: all 0.3s ease;
    display: inline-flex;
    align-items: center;
    gap: 8px;
}

.btn-rest-primary:hover {
    transform: translateY(-2px);
    box-shadow: 0 12px 30px rgba(224, 105, 48, 0.45);
}

.btn-rest-secondary {
    background: rgba(255, 255, 255, 0.08);
    border: 1px solid rgba(255, 255, 255, 0.2);
    color: #ffffff !important;
    font-weight: 600;
    font-size: 15px;
    padding: 14px 28px;
    border-radius: 30px;
    transition: all 0.3s ease;
    display: inline-flex;
    align-items: center;
    gap: 8px;
}

.btn-rest-secondary:hover {
    background: rgba(255, 255, 255, 0.15);
    transform: translateY(-2px);
}

/* Hero Screen Visual Showcase */
.rest-mockup-frame {
    position: relative;
    border-radius: 22px;
    padding: 10px;
    background: rgba(255, 255, 255, 0.06);
    border: 1px solid rgba(255, 255, 255, 0.15);
    box-shadow: 0 25px 60px rgba(0, 0, 0, 0.5), 0 0 40px rgba(224, 105, 48, 0.2);
    backdrop-filter: blur(12px);
}

.rest-mockup-img {
    width: 100%;
    height: auto;
    border-radius: 16px;
    display: block;
    box-shadow: 0 8px 25px rgba(0, 0, 0, 0.3);
}

.floating-kds-badge {
    position: absolute;
    bottom: -15px;
    left: 25px;
    background: #0f172a;
    border: 1px solid rgba(255, 255, 255, 0.2);
    border-radius: 30px;
    padding: 8px 20px;
    display: flex;
    align-items: center;
    gap: 10px;
    font-size: 12.5px;
    font-weight: 700;
    color: #f8fafc;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.4);
}

.floating-kds-badge .pulse-dot {
    width: 10px;
    height: 10px;
    background: #22c55e;
    border-radius: 50%;
    box-shadow: 0 0 10px #22c55e;
    animation: pulse 2s infinite;
}

@keyframes pulse {
    0% { transform: scale(0.95); box-shadow: 0 0 0 0 rgba(34, 197, 94, 0.7); }
    70% { transform: scale(1); box-shadow: 0 0 0 8px rgba(34, 197, 94, 0); }
    100% { transform: scale(0.95); box-shadow: 0 0 0 0 rgba(34, 197, 94, 0); }
}

/* 2. STATS BAR */
.rest-stats-sec {
    background: #0a0f1d;
    border-bottom: 1px solid rgba(255, 255, 255, 0.08);
    padding: 30px 0;
}

.stat-box {
    text-align: center;
    padding: 10px 15px;
}

.stat-box .num {
    font-size: 32px;
    font-weight: 900;
    background: linear-gradient(135deg, #e06930, #fbc145);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    display: block;
    line-height: 1.1;
    margin-bottom: 6px;
}

.stat-box .lbl {
    font-size: 13px;
    color: #94a3b8;
    font-weight: 600;
    text-transform: uppercase;
    letter-spacing: 0.5px;
}

/* 3. TRANSFORMATION: STRUGGLE VS DIGIFY */
.rest-compare-sec {
    padding: 70px 0;
    background: #f8fafc;
}

.rest-card-struggle {
    background: #ffffff;
    border: 1px solid #fecdd3;
    border-radius: 20px;
    padding: 32px 28px;
    height: 100%;
    box-shadow: 0 10px 30px rgba(244, 63, 94, 0.06);
}

.rest-card-solution {
    background: #ffffff;
    border: 1px solid #bbf7d0;
    border-radius: 20px;
    padding: 32px 28px;
    height: 100%;
    box-shadow: 0 10px 30px rgba(34, 197, 94, 0.08);
    position: relative;
    overflow: hidden;
}

.rest-card-solution::before {
    content: '';
    position: absolute;
    top: 0; left: 0; right: 0;
    height: 4px;
    background: linear-gradient(90deg, #10b981, #059669);
}

/* 4. INTERACTIVE FEATURE TABS */
.rest-tabs-sec {
    padding: 80px 0;
    background: #ffffff;
}

.nav-pills-rest {
    display: flex;
    justify-content: center;
    gap: 12px;
    flex-wrap: wrap;
    margin-bottom: 40px;
}

.nav-pills-rest .nav-link {
    background: #f1f5f9;
    color: #334155;
    font-weight: 700;
    font-size: 14px;
    padding: 12px 24px;
    border-radius: 30px;
    transition: all 0.3s ease;
    border: 1px solid transparent;
}

.nav-pills-rest .nav-link:hover {
    background: #e2e8f0;
}

.nav-pills-rest .nav-link.active {
    background: linear-gradient(135deg, #e06930 0%, #fbc145 100%) !important;
    color: #ffffff !important;
    box-shadow: 0 6px 18px rgba(224, 105, 48, 0.35);
}

.feature-showcase-box {
    background: #f8fafc;
    border: 1px solid #e2e8f0;
    border-radius: 24px;
    padding: 40px;
    box-shadow: 0 15px 40px rgba(0, 0, 0, 0.04);
}

/* 5. FOOD FORMATS GRID */
.food-formats-sec {
    padding: 70px 0;
    background: #0f172a;
    color: #ffffff;
}

.format-card {
    background: rgba(30, 41, 59, 0.7);
    border: 1px solid rgba(255, 255, 255, 0.08);
    border-radius: 18px;
    padding: 26px 22px;
    height: 100%;
    transition: all 0.3s ease;
}

.format-card:hover {
    transform: translateY(-6px);
    border-color: rgba(224, 105, 48, 0.4);
    background: rgba(30, 41, 59, 0.95);
    box-shadow: 0 15px 35px rgba(0, 0, 0, 0.3);
}

.format-icon {
    width: 48px;
    height: 48px;
    border-radius: 12px;
    background: rgba(224, 105, 48, 0.15);
    color: #fbc145;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 22px;
    margin-bottom: 16px;
}

/* 6. COMPARISON MATRIX */
.rest-matrix-sec {
    padding: 70px 0;
    background: #ffffff;
}

.matrix-table {
    width: 100%;
    border-collapse: separate;
    border-spacing: 0;
    border-radius: 16px;
    overflow: hidden;
    border: 1px solid #e2e8f0;
}

.matrix-table th {
    background: #0f172a;
    color: #ffffff;
    padding: 16px 20px;
    font-size: 14.5px;
    font-weight: 700;
}

.matrix-table td {
    padding: 14px 20px;
    font-size: 13.5px;
    border-bottom: 1px solid #f1f5f9;
}

.matrix-table tr:nth-child(even) {
    background: #f8fafc;
}

/* 7. FINAL CTA */
.rest-cta-sec {
    padding: 80px 0;
    background: radial-gradient(circle at 50% 50%, rgba(224, 105, 48, 0.25), transparent 60%),
                linear-gradient(135deg, #0a0f1d, #1e293b);
    color: #ffffff;
    text-align: center;
    position: relative;
}

/* RESPONSIVENESS */
@media (max-width: 991px) {
    .rest-hero-title {
        font-size: 32px !important;
    }
    .rest-hero-subtitle {
        font-size: 14.5px !important;
    }
    .rest-pricing-card {
        flex-direction: column;
        align-items: flex-start;
    }
    .feature-showcase-box {
        padding: 24px;
    }
}

@media (max-width: 576px) {
    .rest-hero {
        padding: 40px 0 50px;
    }
    .rest-hero-title {
        font-size: 25px !important;
    }
    .btn-rest-primary,
    .btn-rest-secondary {
        width: 100%;
        justify-content: center;
    }
    .stat-box .num {
        font-size: 26px;
    }
}
</style>

<div class="rest-page-wrapper">

    <!-- 1. HERO SECTION -->
    <section class="rest-hero">
        <div class="rest-hero-blob"></div>
        <div class="container position-relative" style="z-index: 2;">
            <div class="row align-items-center g-5">
                <div class="col-lg-6 text-center text-lg-start">
                    <div class="rest-badge">
                        <i class="fa-solid fa-utensils"></i> #1 All-In-One Restaurant Operating System
                    </div>
                    <h1 class="rest-hero-title">
                        Transform Your Restaurant Into a <span class="highlight">High-Profit Machine.</span>
                    </h1>
                    <p class="rest-hero-subtitle">
                        Fast 3-second billing, instant kitchen KOT printing, automated ingredient recipe costing, and unified Swiggy/Zomato delivery — all from one powerful screen.
                    </p>

                    <!-- Transparent Pricing Hero Card -->
                    <div class="rest-pricing-card">
                        <div class="rest-pricing-badge">
                            <span class="label">Disruptive Pricing</span>
                            <span class="amount">₹1,000</span><span style="font-size: 12px;"> / mo</span>
                        </div>
                        <div class="rest-pricing-info">
                            <strong>Up to 100 users included.</strong><br>
                            Zero commissions on orders • Free menu onboarding • 24/7 dedicated support
                        </div>
                    </div>

                    <div class="d-flex flex-wrap gap-3 justify-content-center justify-content-lg-start">
                        <button type="button" class="btn-rest-primary" data-bs-toggle="modal" data-bs-target="#trialModal">
                            <i class="fas fa-calendar-check"></i> Book Free Live Demo
                        </button>
                        <a href="#features" class="btn-rest-secondary">
                            Explore Live Features <i class="fas fa-arrow-down"></i>
                        </a>
                    </div>
                </div>

                <!-- Right Hero: Photorealistic POS Tablet Graphic -->
                <div class="col-lg-6">
                    <div class="rest-mockup-frame mt-4 mt-lg-0">
                        <img src="assets/images/restaurant_pos_hero.jpg" alt="Digify Restaurant POS Tablet Interface" class="rest-mockup-img">
                        <div class="floating-kds-badge d-none d-sm-flex">
                            <div class="pulse-dot"></div>
                            <span>Kitchen Order Ticket (KOT) Dispatched: 0.3s</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 2. STATS & CREDIBILITY STRIP -->
    <section class="rest-stats-sec">
        <div class="container">
            <div class="row g-4 justify-content-center">
                <div class="col-6 col-md-3">
                    <div class="stat-box">
                        <span class="num">0.3s</span>
                        <span class="lbl">KOT Print Speed</span>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="stat-box">
                        <span class="num">35%</span>
                        <span class="lbl">Avg. Food Wastage Reduced</span>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="stat-box">
                        <span class="num">₹0</span>
                        <span class="lbl">Order Commission Charged</span>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="stat-box">
                        <span class="num">100</span>
                        <span class="lbl">Users Included in ₹1k/mo</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 3. STRUGGLE VS DIGIFY (THE TRANSFORMATION) -->
    <section class="rest-compare-sec">
        <div class="container">
            <div class="text-center mb-5">
                <span class="text-uppercase fw-bold text-warning" style="font-size: 12px; letter-spacing: 1.5px;">The Real Difference</span>
                <h2 class="fw-bold text-dark mt-1" style="font-size: 34px;">Why Traditional Restaurants Leak Money</h2>
                <p class="text-muted mx-auto" style="max-width: 650px;">Most restaurants don't fail because of poor recipes; they fail because of ingredient pilferage, delayed kitchen tickets, and blind cash registers.</p>
            </div>

            <div class="row g-4">
                <!-- Old Way -->
                <div class="col-lg-6">
                    <div class="rest-card-struggle">
                        <div class="d-flex align-items-center gap-3 text-danger mb-4">
                            <div class="rounded-circle p-2 bg-danger bg-opacity-10">
                                <i class="fas fa-times-circle fa-xl"></i>
                            </div>
                            <h4 class="fw-bold mb-0" style="font-size: 20px;">The Daily Kitchen Nightmare</h4>
                        </div>
                        <ul class="list-unstyled d-flex flex-column gap-3 mb-0" style="font-size: 14.5px; color: #475569;">
                            <li class="d-flex align-items-start gap-3">
                                <i class="fas fa-xmark text-danger mt-1"></i>
                                <span><strong>Lost Paper KOTs:</strong> Orders get lost or delayed in kitchen rush hours, resulting in angry diners and cancelled food checks.</span>
                            </li>
                            <li class="d-flex align-items-start gap-3">
                                <i class="fas fa-xmark text-danger mt-1"></i>
                                <span><strong>Untracked Raw Material Leaks:</strong> Expensive meats, dairy, cheese, and alcohol vanish without recipe deduction.</span>
                            </li>
                            <li class="d-flex align-items-start gap-3">
                                <i class="fas fa-xmark text-danger mt-1"></i>
                                <span><strong>Aggregator Tablet Chaos:</strong> Juggling separate tablets for Zomato, Swiggy, and walk-ins leads to wrong billing and double entries.</span>
                            </li>
                            <li class="d-flex align-items-start gap-3">
                                <i class="fas fa-xmark text-danger mt-1"></i>
                                <span><strong>Blind Nightly Closings:</strong> Owners discover actual monthly profits weeks later, after losses have already occurred.</span>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Digify Way -->
                <div class="col-lg-6">
                    <div class="rest-card-solution">
                        <div class="d-flex align-items-center gap-3 text-success mb-4">
                            <div class="rounded-circle p-2 bg-success bg-opacity-10">
                                <i class="fas fa-check-circle fa-xl"></i>
                            </div>
                            <h4 class="fw-bold mb-0" style="font-size: 20px;">With Digify Restaurant Operating System</h4>
                        </div>
                        <ul class="list-unstyled d-flex flex-column gap-3 mb-0" style="font-size: 14.5px; color: #475569;">
                            <li class="d-flex align-items-start gap-3">
                                <i class="fas fa-check text-success mt-1"></i>
                                <span><strong>Digital KDS & Instant Thermal KOT:</strong> Waiter punches on mobile; kitchen station thermal printer prints ticket in 0.3 seconds.</span>
                            </li>
                            <li class="d-flex align-items-start gap-3">
                                <i class="fas fa-check text-success mt-1"></i>
                                <span><strong>Automated Ingredient BOM Deduction:</strong> Selling a pizza auto-deducts 200g dough, 80g mozzarella, and 40g sauce immediately from stock.</span>
                            </li>
                            <li class="d-flex align-items-start gap-3">
                                <i class="fas fa-check text-success mt-1"></i>
                                <span><strong>Unified Delivery Aggregator Hub:</strong> Accept, manage, and dispatch Swiggy, Zomato, and dine-in orders from 1 unified screen.</span>
                            </li>
                            <li class="d-flex align-items-start gap-3">
                                <i class="fas fa-check text-success mt-1"></i>
                                <span><strong>11 PM WhatsApp Owner P&L:</strong> Receive exact daily revenue, gross profit, food cost %, and wastage reports on WhatsApp before bed.</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 4. INTERACTIVE FEATURE DEEP-DIVE -->
    <section id="features" class="rest-tabs-sec">
        <div class="container">
            <div class="text-center mb-5">
                <span class="text-uppercase fw-bold text-warning" style="font-size: 12px; letter-spacing: 1.5px;">Engineered For Perfection</span>
                <h2 class="fw-bold text-dark mt-1" style="font-size: 34px;">Everything You Need To Operate At Scale</h2>
                <p class="text-muted mx-auto" style="max-width: 600px;">Explore how each module powers your front-of-house, kitchen, and management back-office.</p>
            </div>

            <!-- Tab Buttons -->
            <ul class="nav nav-pills nav-pills-rest" id="featureTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="tab-pos-btn" data-bs-toggle="pill" data-bs-target="#tab-pos" type="button" role="tab">
                        <i class="fa-solid fa-cash-register me-2"></i> 3-Sec POS Billing
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="tab-kds-btn" data-bs-toggle="pill" data-bs-target="#tab-kds" type="button" role="tab">
                        <i class="fa-solid fa-print me-2"></i> Kitchen Display &amp; KOT
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="tab-recipe-btn" data-bs-toggle="pill" data-bs-target="#tab-recipe" type="button" role="tab">
                        <i class="fa-solid fa-calculator me-2"></i> Recipe &amp; Food Costing
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="tab-delivery-btn" data-bs-toggle="pill" data-bs-target="#tab-delivery" type="button" role="tab">
                        <i class="fa-solid fa-motorcycle me-2"></i> Swiggy / Zomato Hub
                    </button>
                </li>
            </ul>

            <!-- Tab Content Panes -->
            <div class="tab-content" id="featureTabContent">

                <!-- 1. POS Billing -->
                <div class="tab-pane fade show active" id="tab-pos" role="tabpanel">
                    <div class="feature-showcase-box">
                        <div class="row align-items-center g-5">
                            <div class="col-lg-6">
                                <span class="badge bg-warning bg-opacity-15 text-warning fw-bold px-3 py-1 rounded-pill mb-2" style="font-size: 11px;">FRONT-OF-HOUSE MASTERY</span>
                                <h3 class="fw-bold text-dark mb-3" style="font-size: 28px;">Speed That Keeps Up With Peak Dinner Rush</h3>
                                <p class="text-muted mb-4" style="font-size: 15px; line-height: 1.7;">
                                    Designed with high-touch ergonomics for waiters and cashiers. Take orders on any touch terminal, tablet, or smartphone.
                                </p>
                                <div class="row g-3">
                                    <div class="col-sm-6">
                                        <div class="p-3 bg-white rounded-3 border">
                                            <h6 class="fw-bold text-dark mb-1"><i class="fa-solid fa-split text-warning me-2"></i> Split &amp; Transfer Bills</h6>
                                            <p class="text-muted mb-0" style="font-size: 12.5px;">Split by guest, seat, or item with 1 tap.</p>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="p-3 bg-white rounded-3 border">
                                            <h6 class="fw-bold text-dark mb-1"><i class="fa-solid fa-qrcode text-warning me-2"></i> Dynamic UPI QR</h6>
                                            <p class="text-muted mb-0" style="font-size: 12.5px;">Customer scans and pays in 2 seconds.</p>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="p-3 bg-white rounded-3 border">
                                            <h6 class="fw-bold text-dark mb-1"><i class="fa-solid fa-table-cells text-warning me-2"></i> Floor &amp; Table Map</h6>
                                            <p class="text-muted mb-0" style="font-size: 12.5px;">Visual colors: Vacant, Occupied, Billed.</p>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="p-3 bg-white rounded-3 border">
                                            <h6 class="fw-bold text-dark mb-1"><i class="fa-solid fa-shield-halved text-warning me-2"></i> Anti-Theft PINs</h6>
                                            <p class="text-muted mb-0" style="font-size: 12.5px;">Manager approvals on voids and discounts.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <img src="assets/images/restaurant_pos_hero.jpg" alt="Restaurant POS" class="img-fluid rounded-4 shadow-lg">
                            </div>
                        </div>
                    </div>
                </div>

                <!-- 2. KDS & KOT -->
                <div class="tab-pane fade" id="tab-kds" role="tabpanel">
                    <div class="feature-showcase-box">
                        <div class="row align-items-center g-5">
                            <div class="col-lg-6">
                                <span class="badge bg-primary bg-opacity-15 text-primary fw-bold px-3 py-1 rounded-pill mb-2" style="font-size: 11px;">KITCHEN AUTOMATION</span>
                                <h3 class="fw-bold text-dark mb-3" style="font-size: 28px;">Zero Delays. Zero Missing Tickets.</h3>
                                <p class="text-muted mb-4" style="font-size: 15px; line-height: 1.7;">
                                    Eliminate chaotic paper strips with smart digital Kitchen Display Systems (KDS) or high-speed thermal printers routed automatically to specific food prep stations.
                                </p>
                                <ul class="list-unstyled d-flex flex-column gap-3 mb-0" style="font-size: 14.5px; color: #475569;">
                                    <li class="d-flex align-items-center gap-3">
                                        <i class="fa-solid fa-circle-check text-success fa-lg"></i>
                                        <span><strong>Multi-Station Routing:</strong> Starters to Pantry, Cocktails to Bar, Steaks to Grill station.</span>
                                    </li>
                                    <li class="d-flex align-items-center gap-3">
                                        <i class="fa-solid fa-circle-check text-success fa-lg"></i>
                                        <span><strong>Order Timers &amp; Delay Alerts:</strong> Visual color badges (Green &lt;10m, Amber &gt;15m, Red &gt;20m).</span>
                                    </li>
                                    <li class="d-flex align-items-center gap-3">
                                        <i class="fa-solid fa-circle-check text-success fa-lg"></i>
                                        <span><strong>Waiter Notification:</strong> Captain gets vibration alert on phone when dish is marked "Ready" by chef.</span>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-lg-6">
                                <img src="assets/images/restaurant_kds_screen.jpg" alt="Kitchen Display System" class="img-fluid rounded-4 shadow-lg">
                            </div>
                        </div>
                    </div>
                </div>

                <!-- 3. Recipe BOM -->
                <div class="tab-pane fade" id="tab-recipe" role="tabpanel">
                    <div class="feature-showcase-box">
                        <div class="row align-items-center g-5">
                            <div class="col-lg-6">
                                <span class="badge bg-success bg-opacity-15 text-success fw-bold px-3 py-1 rounded-pill mb-2" style="font-size: 11px;">MARGIN PROTECTION</span>
                                <h3 class="fw-bold text-dark mb-3" style="font-size: 28px;">Exact Recipe Costing Down To Every Gram</h3>
                                <p class="text-muted mb-4" style="font-size: 15px; line-height: 1.7;">
                                    Know your food cost percentage for every single dish before you price your menu. Auto-deduct raw ingredients upon every sale to catch pilferage instantly.
                                </p>
                                <div class="p-3 bg-white rounded-3 border mb-3">
                                    <div class="d-flex justify-content-between align-items-center mb-2">
                                        <strong class="text-dark">Paneer Butter Masala (Full)</strong>
                                        <span class="badge bg-success text-white">Food Cost: 26.4%</span>
                                    </div>
                                    <div class="small text-muted">
                                        Auto-deducts: 220g Fresh Paneer • 45g Butter • 80g Tomato Gravy • 30ml Fresh Cream • Spice Mix #2
                                    </div>
                                </div>
                                <div class="p-3 bg-white rounded-3 border">
                                    <h6 class="fw-bold text-danger mb-1"><i class="fa-solid fa-triangle-exclamation me-2"></i> Low Stock &amp; Wastage Alerts</h6>
                                    <p class="text-muted mb-0" style="font-size: 12.5px;">Auto-creates purchase indents when dairy or cooking oil hits reorder threshold.</p>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="p-4 bg-white rounded-4 border shadow-sm">
                                    <h5 class="fw-bold text-dark border-bottom pb-3 mb-3">Live Ingredient Auto-Deduction Engine</h5>
                                    <div class="d-flex justify-content-between py-2 border-bottom">
                                        <span>Raw Material Stock (Paneer)</span>
                                        <strong class="text-dark">18.5 kg in stock</strong>
                                    </div>
                                    <div class="d-flex justify-content-between py-2 border-bottom text-danger">
                                        <span>Order #142 (2x Paneer Masala)</span>
                                        <strong>- 440 grams</strong>
                                    </div>
                                    <div class="d-flex justify-content-between py-2 border-bottom text-success fw-bold">
                                        <span>Updated Physical Stock</span>
                                        <span>18.06 kg remaining</span>
                                    </div>
                                    <div class="mt-3 p-3 rounded-3 bg-light text-center small text-muted">
                                        <i class="fa-solid fa-robot text-warning me-1"></i> Digify AI detects <strong>0% pilferage risk</strong> for this batch.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- 4. Delivery Hub -->
                <div class="tab-pane fade" id="tab-delivery" role="tabpanel">
                    <div class="feature-showcase-box">
                        <div class="row align-items-center g-5">
                            <div class="col-lg-6">
                                <span class="badge bg-danger bg-opacity-15 text-danger fw-bold px-3 py-1 rounded-pill mb-2" style="font-size: 11px;">OMNICHANNEL DELIVERY</span>
                                <h3 class="fw-bold text-dark mb-3" style="font-size: 28px;">Swiggy, Zomato &amp; Direct Orders on 1 Screen</h3>
                                <p class="text-muted mb-4" style="font-size: 15px; line-height: 1.7;">
                                    Stop maintaining 4 different tablets at the front desk. Sync your entire restaurant menu, pricing, stock-outs, and order acceptance from Digify POS.
                                </p>
                                <div class="d-flex flex-column gap-3">
                                    <div class="d-flex align-items-center gap-3 p-3 bg-white rounded-3 border">
                                        <div class="rounded-circle p-2 bg-warning bg-opacity-15 text-warning">
                                            <i class="fa-solid fa-arrows-rotate fa-lg"></i>
                                        </div>
                                        <div>
                                            <h6 class="fw-bold text-dark mb-0">1-Click Menu &amp; Stock Sync</h6>
                                            <small class="text-muted">Turn off sold-out dishes on Swiggy &amp; Zomato simultaneously with 1 button.</small>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center gap-3 p-3 bg-white rounded-3 border">
                                        <div class="rounded-circle p-2 bg-success bg-opacity-15 text-success">
                                            <i class="fa-solid fa-bolt fa-lg"></i>
                                        </div>
                                        <div>
                                            <h6 class="fw-bold text-dark mb-0">Auto-Order Acceptance</h6>
                                            <small class="text-muted">Direct kitchen KOT dispatch without manual intervention or missed rider pickups.</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 text-center">
                                <div class="p-4 bg-white rounded-4 border shadow-sm">
                                    <h6 class="fw-bold text-dark mb-3">Single Unified Aggregator Gateway</h6>
                                    <div class="d-flex justify-content-center align-items-center gap-4 py-4">
                                        <span class="badge p-3 rounded-3" style="background: #fc8019; color: white; font-size: 14px;"><i class="fa-solid fa-utensils me-1"></i> Swiggy</span>
                                        <span class="badge p-3 rounded-3" style="background: #e23744; color: white; font-size: 14px;"><i class="fa-solid fa-bowl-food me-1"></i> Zomato</span>
                                        <span class="badge p-3 rounded-3" style="background: #25d366; color: white; font-size: 14px;"><i class="fab fa-whatsapp me-1"></i> Direct QR</span>
                                    </div>
                                    <p class="text-muted small mb-0">All routed into Digify POS Kitchen KDS with automated accounting ledger entries.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- 5. TAILORED FOR EVERY FORMAT -->
    <section class="food-formats-sec">
        <div class="container">
            <div class="text-center mb-5">
                <span class="text-uppercase fw-bold text-warning" style="font-size: 12px; letter-spacing: 1.5px;">Tailored Solutions</span>
                <h2 class="fw-bold text-white mt-1" style="font-size: 34px;">Built For Every Food &amp; Hospitality Format</h2>
                <p class="text-light opacity-75 mx-auto" style="max-width: 600px;">From single artisanal bakeries to 30-outlet dining franchises.</p>
            </div>

            <div class="row g-4">
                <div class="col-lg-4 col-md-6">
                    <div class="format-card">
                        <div class="format-icon"><i class="fa-solid fa-mug-saucer"></i></div>
                        <h4 class="fw-bold text-white mb-2" style="font-size: 19px;">Cafés &amp; Bakeries</h4>
                        <p class="text-light opacity-75 mb-0" style="font-size: 13.5px; line-height: 1.6;">Fast counter checkout, barcode scanning for packaged beans &amp; treats, and custom modifier options (oat milk, extra shot).</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="format-card">
                        <div class="format-icon"><i class="fa-solid fa-burger"></i></div>
                        <h4 class="fw-bold text-white mb-2" style="font-size: 19px;">Quick Service (QSR)</h4>
                        <p class="text-light opacity-75 mb-0" style="font-size: 13.5px; line-height: 1.6;">High-speed 3-second billing, token calling screens, combo discounts, and automated takeaway packaging tracking.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="format-card">
                        <div class="format-icon"><i class="fa-solid fa-wine-glass"></i></div>
                        <h4 class="fw-bold text-white mb-2" style="font-size: 19px;">Fine Dining &amp; Family Restros</h4>
                        <p class="text-light opacity-75 mb-0" style="font-size: 13.5px; line-height: 1.6;">Floor plan layout, multi-course firing (Appetizers then Mains), captain tablets, and split checks by individual diner.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="format-card">
                        <div class="format-icon"><i class="fa-solid fa-fire-burner"></i></div>
                        <h4 class="fw-bold text-white mb-2" style="font-size: 19px;">Cloud Kitchens</h4>
                        <p class="text-light opacity-75 mb-0" style="font-size: 13.5px; line-height: 1.6;">Manage 5+ virtual brands from a single kitchen terminal with automated aggregator routing and rider dispatch tracking.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="format-card">
                        <div class="format-icon"><i class="fa-solid fa-beer-mug-empty"></i></div>
                        <h4 class="fw-bold text-white mb-2" style="font-size: 19px;">Bars, Pubs &amp; Breweries</h4>
                        <p class="text-light opacity-75 mb-0" style="font-size: 13.5px; line-height: 1.6;">Bottle &amp; peg-level liquor inventory, excise compliant reporting, running guest bar tabs, and happy hour auto-switching.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="format-card">
                        <div class="format-icon"><i class="fa-solid fa-network-wired"></i></div>
                        <h4 class="fw-bold text-white mb-2" style="font-size: 19px;">Multi-Outlet Franchises</h4>
                        <p class="text-light opacity-75 mb-0" style="font-size: 13.5px; line-height: 1.6;">Central kitchen procurement, branch indent management, inter-store stock transfers, and unified owner analytics across cities.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 6. COMPARISON MATRIX (DIGIFY VS LEGACY) -->
    <section class="rest-matrix-sec">
        <div class="container">
            <div class="text-center mb-5">
                <span class="text-uppercase fw-bold text-warning" style="font-size: 12px; letter-spacing: 1.5px;">Honest Evaluation</span>
                <h2 class="fw-bold text-dark mt-1" style="font-size: 34px;">How Digify Compares With Legacy Vendors</h2>
                <p class="text-muted mx-auto" style="max-width: 650px;">See why restaurant owners are switching away from high-commission legacy systems to Digify.</p>
            </div>

            <div class="table-responsive">
                <table class="matrix-table shadow-sm">
                    <thead>
                        <tr>
                            <th>Feature / Capability</th>
                            <th style="background: linear-gradient(135deg, #e06930, #fbc145); color: #fff;">Digify Restaurant OS</th>
                            <th>Traditional Competitors</th>
                            <th>Free / Basic POS Apps</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><strong>Monthly Cost</strong></td>
                            <td class="fw-bold text-success" style="font-size: 15px;">₹1,000 / month (Flat)</td>
                            <td>₹20,000 – ₹35,000 upfront + annual AMC</td>
                            <td>Free (with hidden payment charges)</td>
                        </tr>
                        <tr>
                            <td><strong>Users &amp; Staff Included</strong></td>
                            <td class="fw-bold text-success">Up to 100 Users</td>
                            <td>1 to 3 Users (₹2,500/extra user)</td>
                            <td>1 User only</td>
                        </tr>
                        <tr>
                            <td><strong>Order Commissions</strong></td>
                            <td class="fw-bold text-success">0% (Keep 100% of your sales)</td>
                            <td>Often 1% – 2% per bill</td>
                            <td>High transaction fees</td>
                        </tr>
                        <tr>
                            <td><strong>Recipe BOM &amp; Food Costing</strong></td>
                            <td class="fw-bold text-success"><i class="fa-solid fa-check text-success me-1"></i> Included Standard</td>
                            <td><i class="fa-solid fa-times text-danger me-1"></i> Costly Add-on Module</td>
                            <td><i class="fa-solid fa-times text-danger me-1"></i> Not Available</td>
                        </tr>
                        <tr>
                            <td><strong>Multi-Station Digital KDS</strong></td>
                            <td class="fw-bold text-success"><i class="fa-solid fa-check text-success me-1"></i> Unlimited Devices</td>
                            <td>Extra license per screen</td>
                            <td><i class="fa-solid fa-times text-danger me-1"></i> Not Available</td>
                        </tr>
                        <tr>
                            <td><strong>11 PM WhatsApp Owner P&amp;L</strong></td>
                            <td class="fw-bold text-success"><i class="fa-solid fa-check text-success me-1"></i> AI Powered Daily Digest</td>
                            <td><i class="fa-solid fa-times text-danger me-1"></i> Clunky Web Dashboards</td>
                            <td><i class="fa-solid fa-times text-danger me-1"></i> Not Available</td>
                        </tr>
                        <tr>
                            <td><strong>Hardware Lock-In</strong></td>
                            <td class="fw-bold text-success">None (Runs on PC, Mac, Tablet, Phone)</td>
                            <td>Forced proprietary POS terminal</td>
                            <td>Mobile app only</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>

    <!-- 7. FINAL CONVERSION BANNER -->
    <section class="rest-cta-sec">
        <div class="container position-relative" style="z-index: 2;">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <span class="badge px-3 py-2 rounded-pill mb-3" style="background: rgba(224,105,48,0.2); color: #fbc145; font-size: 13px; font-weight: 700;">
                        Join Growing Indian Restaurants
                    </span>
                    <h2 class="display-5 fw-bold text-white mb-3">
                        Stop Losing Margin to Food Wastage. <br>
                        <span style="background: linear-gradient(135deg, #e06930, #fbc145); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">Start With Digify Today.</span>
                    </h2>
                    <p class="text-light opacity-75 mb-4" style="font-size: 17px;">
                        Set up in under 24 hours. Full menu onboarding assistance provided by our team with our flat ₹1,000/month transparent pricing.
                    </p>
                    <div class="d-flex flex-wrap gap-3 justify-content-center">
                        <button type="button" class="btn-rest-primary btn-lg px-5 py-3" data-bs-toggle="modal" data-bs-target="#trialModal">
                            <i class="fas fa-calendar-check me-1"></i> Schedule Your 15-Min Live Demo
                        </button>
                        <a href="tel:+917425016636" class="btn-rest-secondary btn-lg px-4 py-3">
                            <i class="fas fa-phone-alt me-1"></i> Call Specialist: +91 7425016636
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

</div>

<?php include 'footer.php'; ?>
