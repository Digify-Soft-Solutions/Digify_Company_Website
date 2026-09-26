<?php 
    include 'fetch_meta.php';
    $pageMeta = getPageMeta('index');
    $pageTitle = $pageMeta['page_title'] ?? 'index';
    $pageDescription = $pageMeta['page_description'] ?? '';
    include("top.php");
    include 'header.php'; 
?>

<div class="premium-home-body">

    <!-- 1. HERO BANNER -->
    <section class="premium-hero">
        <div class="hero-glow-blob"></div>
        <div class="container">
            <div class="row align-items-center g-5">
                <div class="col-lg-6 text-center text-lg-start">
                    <span class="hero-badge gsap-hero-item">
                        <i class="fas fa-sparkles me-1 text-warning"></i> Autonomous AI Business Operating Platform
                    </span>
                    <h1 class="hero-title mt-4 gsap-hero-item">
                        One Platform to Scale Your Business.<br><span>Supercharged by Autonomous AI.</span>
                    </h1>
                    <p class="hero-subtitle mt-3 mx-auto mx-lg-0 gsap-hero-item">
                        Empower your entire enterprise with real-time AI intelligence. Unify factory production, multi-store retail, Smart POS billing, inventory forecasting, and auto GST compliance into one seamless, intelligent ecosystem.
                    </p>

                    <!-- Transparent Pricing Hook -->
                    <div class="hero-pricing-banner gsap-hero-item">
                        <span class="pricing-tag"><i class="fas fa-bolt me-1"></i> Transparent Pricing</span>
                        <span>Retail &amp; Restaurant: <strong class="pricing-highlight">₹1,000 Onwards / month</strong></span>
                        <span class="d-none d-sm-inline">•</span>
                        <span>Manufacturing: <strong class="pricing-highlight">₹10,000 Onwards / month</strong></span>
                        <span class="text-muted" style="font-size: 11px;">(Up to 100 Users)</span>
                    </div>

                    <div class="hero-ctas justify-content-center justify-content-lg-start gsap-hero-item">
                        <a href="contact-us.php" class="btn btn-hero-primary" data-bs-toggle="modal" data-bs-target="#trialModal">
                            <i class="fas fa-calendar-check me-2"></i> Book Free Live Demo
                        </a>
                        <a href="#choose-business" class="btn btn-hero-secondary">
                            <i class="fas fa-compass me-2"></i> Choose Your Business <i class="fas fa-arrow-down ms-1"></i>
                        </a>
                    </div>

                    <!-- Digify AI Intelligence Command Center Card -->
                    <div class="ai-copilot-floating-card mt-4 p-3 rounded-4 shadow-lg gsap-hero-item" style="background: linear-gradient(135deg, rgba(15, 23, 42, 0.96), rgba(30, 41, 59, 0.96)) !important; border: 1px solid rgba(59, 130, 246, 0.35) !important; backdrop-filter: blur(12px);">
                        <div class="d-flex align-items-center justify-content-between pb-2 mb-2" style="border-bottom: 1px solid rgba(255,255,255,0.12) !important;">
                            <div style="color: #60a5fa !important; font-size: 13.5px; font-weight: 800; display: flex; align-items: center; gap: 7px;">
                                <i class="fa-solid fa-wand-magic-sparkles text-warning fs-6"></i>
                                <span>Digify AI Copilot — Real-Time Intelligence</span>
                            </div>
                            <span class="badge rounded-pill px-2.5 py-1" style="background: rgba(34, 197, 94, 0.25); color: #4ade80; font-size: 11px; border: 1px solid rgba(34, 197, 94, 0.4); font-weight: 700;">
                                <i class="fas fa-circle-dot text-success me-1"></i> Engine Active
                            </span>
                        </div>
                        
                        <div class="row g-2 text-white" style="font-size: 12.5px;">
                            <div class="col-6">
                                <div class="p-2 rounded-3" style="background: rgba(255,255,255,0.05); border: 1px solid rgba(255,255,255,0.08);">
                                    <div class="text-muted small" style="font-size: 11px; color: #94a3b8 !important;"><i class="fas fa-chart-line text-info me-1"></i> Smart Inventory AI</div>
                                    <div class="fw-bold text-white mt-1" style="font-size: 12.5px; color: #f8fafc !important;">Auto Stock Indents &amp; Reorder Alerts</div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="p-2 rounded-3" style="background: rgba(255,255,255,0.05); border: 1px solid rgba(255,255,255,0.08);">
                                    <div class="text-muted small" style="font-size: 11px; color: #94a3b8 !important;"><i class="fas fa-robot text-warning me-1"></i> Lead &amp; Sales AI</div>
                                    <div class="fw-bold text-white mt-1" style="font-size: 12.5px; color: #f8fafc !important;">Instant WhatsApp Lead Capture</div>
                                </div>
                            </div>
                        </div>

                        <div class="d-flex align-items-center justify-content-between mt-2 pt-2" style="border-top: 1px dashed rgba(255,255,255,0.12); font-size: 11.5px; color: #cbd5e1;">
                            <span style="color: #e2e8f0 !important;"><i class="fas fa-shield-check text-success me-1"></i> Auto GST, E-Invoicing &amp; Tally Sync</span>
                            <span class="fw-bold" style="color: #38bdf8 !important;"><i class="fas fa-bolt text-warning me-1"></i> Real-Time Insights</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <!-- Hero Banner Carousel (100% Complete & Uncropped 1:1 Aspect Ratio) -->
                    <div class="hero-mockup-wrapper mt-4 mt-lg-0 gsap-hero-dashboard">
                        <div class="hero-banner-slider-wrapper">
                            <div id="heroBannersCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="4000">
                                <!-- Carousel Slides -->
                                <div class="carousel-inner">
                                    <div class="carousel-item active" data-bs-interval="4000">
                                        <img src="assets/images/banner_south_africa.jpg" class="hero-banner-img" alt="Digify Soft Solutions South Africa - AI ERP & Supply Chain Solutions">
                                    </div>
                                    <div class="carousel-item" data-bs-interval="4000">
                                        <img src="assets/images/banner_kenya.jpg" class="hero-banner-img" alt="Digify Soft Solutions Kenya - Smart POS & Retail Automation">
                                    </div>
                                    <div class="carousel-item" data-bs-interval="4000">
                                        <img src="assets/images/banner_uae.jpg" class="hero-banner-img" alt="Digify Soft Solutions UAE - ZATCA E-Invoicing & Enterprise ERP">
                                    </div>
                                    <div class="carousel-item" data-bs-interval="4000">
                                        <img src="assets/images/hero_banner_1.jpg" class="hero-banner-img" alt="Why Businesses Choose Digify Soft Solutions">
                                    </div>
                                    <div class="carousel-item" data-bs-interval="4000">
                                        <img src="assets/images/ai_erp_banner_1.jpg" class="hero-banner-img" alt="AI Powered Enterprise ERP">
                                    </div>
                                    <div class="carousel-item" data-bs-interval="4000">
                                        <img src="assets/images/ai_erp_banner_2.jpg" class="hero-banner-img" alt="Smart Manufacturing AI ERP">
                                    </div>
                                    <div class="carousel-item" data-bs-interval="4000">
                                        <img src="assets/images/ai_crm_banner_1.jpg" class="hero-banner-img" alt="AI Powered CRM & Lead Intelligence">
                                    </div>
                                    <div class="carousel-item" data-bs-interval="4000">
                                        <img src="assets/images/hero_banner_2.jpg" class="hero-banner-img" alt="OCR and AI Powered Retail ERP">
                                    </div>
                                    <div class="carousel-item" data-bs-interval="4000">
                                        <img src="assets/images/hero_banner_3.jpg" class="hero-banner-img" alt="Garment Boutique ERP Solutions">
                                    </div>
                                    <div class="carousel-item" data-bs-interval="4000">
                                        <img src="assets/images/hero_banner_4.jpg" class="hero-banner-img" alt="Restaurant Management Software">
                                    </div>
                                </div>

                                <!-- Controls -->
                                <button class="carousel-control-prev hero-carousel-control hero-carousel-control-prev" type="button" data-bs-target="#heroBannersCarousel" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon hero-carousel-control-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next hero-carousel-control hero-carousel-control-next" type="button" data-bs-target="#heroBannersCarousel" data-bs-slide="next">
                                    <span class="carousel-control-next-icon hero-carousel-control-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CHOOSE YOUR BUSINESS SELECTOR SECTION -->
    <section id="choose-business" class="choose-business-sec">
        <div class="container">
            <div class="choose-business-heading">
                <span class="sub-badge"><i class="fas fa-layer-group me-1"></i> Tailored Industry Suites</span>
                <h2>Choose Your <span>Business Vertical</span></h2>
                <p>Don't settle for rigid, generic software. Digify adapts to the exact operational workflow of your industry with automated intelligence built in.</p>
            </div>

            <div class="row g-4">
                <!-- 1. Manufacturing -->
                <div class="col-lg-4 col-md-6">
                    <a href="ai-manufacturing.php" class="business-choice-card card-manufacturing">
                        <div>
                            <div class="choice-icon-wrap">
                                <i class="fa-solid fa-industry"></i>
                            </div>
                            <h3>Manufacturing ERP</h3>
                            <p class="choice-desc">Run your factory floor to ledger. Multi-level Bill of Materials (BOM), WIP tracking, shop-floor QC, and accurate batch costing.</p>
                            <div class="choice-tags">
                                <span>BOM &amp; Routing</span>
                                <span>WIP Tracking</span>
                                <span>Quality Control</span>
                                <span>Batch Costing</span>
                                <span>AI Insights</span>
                            </div>
                        </div>
                        <div class="choice-footer">
                            <div class="choice-price">₹10,000 Onwards <small>/ month</small></div>
                            <span class="choice-link-text">Explore Suite <i class="fa-solid fa-arrow-right"></i></span>
                        </div>
                    </a>
                </div>

                <!-- 2. Retail & Supermarket -->
                <div class="col-lg-4 col-md-6">
                    <a href="pos.php" class="business-choice-card card-retail">
                        <div>
                            <div class="choice-icon-wrap">
                                <i class="fa-solid fa-store"></i>
                            </div>
                            <h3>Retail &amp; POS Billing</h3>
                            <p class="choice-desc">3-second high-speed checkout, barcode scanning, real-time multi-store inventory sync, customer CRM, and dead-stock alerts.</p>
                            <div class="choice-tags">
                                <span>3-Sec POS</span>
                                <span>Multi-Store Sync</span>
                                <span>Barcode / GST</span>
                                <span>CRM Loyalty</span>
                                <span>Dead Stock Alert</span>
                            </div>
                        </div>
                        <div class="choice-footer">
                            <div class="choice-price">₹2,000 Onwards <small>/ month</small></div>
                            <span class="choice-link-text">Explore Suite <i class="fa-solid fa-arrow-right"></i></span>
                        </div>
                    </a>
                </div>

                <!-- 3. Restaurant & Café -->
                <div class="col-lg-4 col-md-6">
                    <a href="restaurant.php" class="business-choice-card card-restaurant">
                        <div>
                            <div class="choice-icon-wrap">
                                <i class="fa-solid fa-utensils"></i>
                            </div>
                            <h3>Restaurant &amp; Café OS</h3>
                            <p class="choice-desc">Instant Kitchen Order Tickets (KOT), visual table floor plans, raw ingredient recipe costing, and unified Swiggy/Zomato sync.</p>
                            <div class="choice-tags">
                                <span>Fast KOT / KDS</span>
                                <span>Table Floor Plan</span>
                                <span>Recipe Costing</span>
                                <span>Wastage Control</span>
                                <span>Aggregator Sync</span>
                            </div>
                        </div>
                        <div class="choice-footer">
                            <div class="choice-price">₹1,000 Onwards <small>/ month</small></div>
                            <span class="choice-link-text">Explore Suite <i class="fa-solid fa-arrow-right"></i></span>
                        </div>
                    </a>
                </div>

                <!-- 4. After-Sales & Warranty -->
                <div class="col-lg-6 col-md-6">
                    <a href="After-Sale-Service.php" class="business-choice-card card-warranty">
                        <div>
                            <div class="choice-icon-wrap">
                                <i class="fa-solid fa-screwdriver-wrench"></i>
                            </div>
                            <h3>After-Sales &amp; Warranty Fulfilment</h3>
                            <p class="choice-desc">Complete post-sales lifecycle management for Electronics, Appliances, HVAC, Solar, and Machinery. Track warranties via Serial/IMEI, dispatch field service engineers, manage spare parts inventory, and automate AMC renewals.</p>
                            <div class="choice-tags">
                                <span>Serial / IMEI Tracking</span>
                                <span>Digital Warranty Portal</span>
                                <span>Field Engineer Dispatch</span>
                                <span>AMC Contracts</span>
                                <span>RMA &amp; Spares</span>
                            </div>
                        </div>
                        <div class="choice-footer">
                            <div class="choice-price">Specialized B2B Suite</div>
                            <span class="choice-link-text">Explore Service Suite <i class="fa-solid fa-arrow-right"></i></span>
                        </div>
                    </a>
                </div>

                <!-- 5. AI & WhatsApp Automation -->
                <div class="col-lg-6 col-md-12">
                    <a href="ai-business.php" class="business-choice-card card-ai">
                        <div>
                            <div class="choice-icon-wrap">
                                <i class="fa-solid fa-robot"></i>
                            </div>
                            <h3>AI Intelligence &amp; WhatsApp Employees</h3>
                            <p class="choice-desc">Deploy 24/7 AI agents directly on WhatsApp and your website. AI Sales Executives qualify leads into CRM, AI Service Agents resolve customer queries, and AI Management Copilot alerts leadership on operational bottlenecks.</p>
                            <div class="choice-tags">
                                <span>WhatsApp AI Agents</span>
                                <span>AI Sales Executive</span>
                                <span>Lead Qualification</span>
                                <span>ERP Connectors</span>
                                <span>Daily Owner P&amp;L</span>
                            </div>
                        </div>
                        <div class="choice-footer">
                            <div class="choice-price">AI Automation Layer</div>
                            <span class="choice-link-text">Explore AI Platform <i class="fa-solid fa-arrow-right"></i></span>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- DIGIFY BUSINESS-FIT PROMISE SECTION -->
    <section class="business-fit-promise-sec py-5" style="background: linear-gradient(180deg, #f8fafc 0%, #ffffff 100%); color: #0f172a; position: relative; overflow: hidden; border-top: 1px solid #e2e8f0; border-bottom: 1px solid #e2e8f0;">
        <div class="container position-relative" style="z-index: 2;">
            <div class="text-center mb-5">
                <span class="badge rounded-pill px-3.5 py-2 mb-3 shadow-sm" style="background: rgba(224, 105, 48, 0.12); color: #c2410c !important; border: 1px solid rgba(224, 105, 48, 0.3); font-size: 13px; font-weight: 800;">
                    <i class="fas fa-shield-check me-1.5"></i> OUR CORE USP GUARANTEE
                </span>
                <h2 style="font-size: 36px; font-weight: 800; color: #0f172a !important;" class="mb-2">
                    DIGIFY <span style="background: linear-gradient(135deg, #e06930, #fbc145); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">BUSINESS-FIT PROMISE</span>
                </h2>
                <p style="color: #1e293b !important; font-weight: 600; font-size: 15px; max-width: 850px; margin: 0 auto 24px; line-height: 1.6;">
                    Digify ERP Suite — One Integrated Ecosystem. PO / Quote / Multi-Platform Lead Management / Sales Order / Purchase / Production / Customer Engagement / Inventory / Invoicing / Despatches / After-Sales Warranty Management.
                </p>

                <!-- Tagline Callout -->
                <div class="d-inline-block p-3.5 px-4 rounded-4 shadow-sm my-2" style="background: linear-gradient(135deg, #fff7ed 0%, #ffedd5 100%); border: 1.5px dashed #f97316;">
                    <div style="font-size: 17.5px; font-weight: 800; color: #9a3412 !important;">
                        <i class="fas fa-quote-left me-2 text-warning opacity-75"></i>
                        Don't just run your business on software. Make your business intelligent.
                        <i class="fas fa-quote-right ms-2 text-warning opacity-75"></i>
                    </div>
                    <div style="font-size: 14px; color: #7c2d12 !important; margin-top: 5px; font-weight: 700;">
                        <em>Digify digitizes your business. AutomateX makes it intelligent.</em>
                    </div>
                </div>

                <!-- Transparent Pricing Buttons Grid -->
                <div class="d-flex flex-wrap justify-content-center mt-4" style="gap: 16px !important;">
                    <span class="btn btn-sm rounded-pill px-4 py-2.5 fw-bold shadow-sm" style="background: #dbeafe; border: 1.5px solid #93c5fd; color: #1e40af !important; font-size: 13.5px; cursor: default; margin: 4px;">
                        <i class="fas fa-bullseye me-1.5 text-primary"></i> ERP that fits your business — not your business forced to fit the ERP
                    </span>
                    <span class="btn btn-sm rounded-pill px-4 py-2.5 fw-bold shadow-sm" style="background: #dcfce7; border: 1.5px solid #86efac; color: #166534 !important; font-size: 13.5px; cursor: default; margin: 4px;">
                        <i class="fas fa-check-circle me-1.5 text-success"></i> No Per-User Licence Hassle
                    </span>
                    <span class="btn btn-sm rounded-pill px-4 py-2.5 fw-bold shadow-sm" style="background: #fef3c7; border: 1.5px solid #fde047; color: #92400e !important; font-size: 13.5px; cursor: default; margin: 4px;">
                        <i class="fas fa-tag me-1.5 text-warning"></i> No Hidden Software Charges
                    </span>
                </div>
            </div>

            <!-- 7 Pillars Grid -->
            <div class="row g-4 justify-content-center">
                <!-- 1. Your Process First -->
                <div class="col-lg-4 col-md-6">
                    <div class="p-4 rounded-4 h-100 bg-white shadow-sm" style="border: 1.5px solid #cbd5e1; transition: transform 0.3s ease;">
                        <div class="d-flex align-items-center mb-3">
                            <div class="rounded-circle me-3" style="background: rgba(224, 105, 48, 0.15); color: #c2410c !important; font-size: 18px; width: 44px; height: 44px; display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                                <i class="fas fa-user-check"></i>
                            </div>
                            <h4 style="font-size: 17px; font-weight: 800; color: #0f172a !important; margin: 0;">1. Your Process First</h4>
                        </div>
                        <p style="color: #1e293b !important; font-size: 14.5px; font-weight: 600; margin: 0; line-height: 1.6;">We understand your business process thoroughly before configuring the software to match your exact workflows.</p>
                    </div>
                </div>

                <!-- 2. Predictable Pricing -->
                <div class="col-lg-4 col-md-6">
                    <div class="p-4 rounded-4 h-100 bg-white shadow-sm" style="border: 1.5px solid #cbd5e1; transition: transform 0.3s ease;">
                        <div class="d-flex align-items-center mb-3">
                            <div class="rounded-circle me-3" style="background: rgba(34, 197, 94, 0.15); color: #15803d !important; font-size: 18px; width: 44px; height: 44px; display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                                <i class="fas fa-file-invoice-dollar"></i>
                            </div>
                            <h4 style="font-size: 17px; font-weight: 800; color: #0f172a !important; margin: 0;">2. Predictable Pricing</h4>
                        </div>
                        <p style="color: #1e293b !important; font-size: 14.5px; font-weight: 600; margin: 0; line-height: 1.6;">No surprise licence escalation within the agreed plan. Clear, transparent, and fixed pricing commitment.</p>
                    </div>
                </div>

                <!-- 3. No Per-User Licence Anxiety -->
                <div class="col-lg-4 col-md-6">
                    <div class="p-4 rounded-4 h-100 bg-white shadow-sm" style="border: 1.5px solid #cbd5e1; transition: transform 0.3s ease;">
                        <div class="d-flex align-items-center mb-3">
                            <div class="rounded-circle me-3" style="background: rgba(59, 130, 246, 0.15); color: #1d4ed8 !important; font-size: 18px; width: 44px; height: 44px; display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                                <i class="fas fa-users-slash"></i>
                            </div>
                            <h4 style="font-size: 17px; font-weight: 800; color: #0f172a !important; margin: 0;">3. No Per-User Licence Anxiety</h4>
                        </div>
                        <p style="color: #1e293b !important; font-size: 14.5px; font-weight: 600; margin: 0; line-height: 2.0;">
                            Generous user limits: <span class="badge" style="background: #1e40af; color: #ffffff !important; font-size: 13px; font-weight: 800; padding: 5px 10px; border-radius: 6px; display: inline-block; vertical-align: middle; margin: 2px 4px; line-height: 1.2;">50 users</span> for Retail/Restaurant and <span class="badge" style="background: #1e40af; color: #ffffff !important; font-size: 13px; font-weight: 800; padding: 5px 10px; border-radius: 6px; display: inline-block; vertical-align: middle; margin: 2px 4px; line-height: 1.2;">100 users</span> for Manufacturing.
                        </p>
                    </div>
                </div>

                <!-- 4. Minor Changes Included -->
                <div class="col-lg-4 col-md-6">
                    <div class="p-4 rounded-4 h-100 bg-white shadow-sm" style="border: 1.5px solid #cbd5e1; transition: transform 0.3s ease;">
                        <div class="d-flex align-items-center mb-3">
                            <div class="rounded-circle me-3" style="background: rgba(245, 158, 11, 0.15); color: #b45309 !important; font-size: 18px; width: 44px; height: 44px; display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                                <i class="fas fa-sliders-h"></i>
                            </div>
                            <h4 style="font-size: 17px; font-weight: 800; color: #0f172a !important; margin: 0;">4. Minor Changes Included</h4>
                        </div>
                        <p style="color: #1e293b !important; font-size: 14.5px; font-weight: 600; margin: 0; line-height: 1.6;">Reasonable process changes and minor operational adjustments can be accommodated seamlessly.</p>
                    </div>
                </div>

                <!-- 5. Implementation Handholding -->
                <div class="col-lg-4 col-md-6">
                    <div class="p-4 rounded-4 h-100 bg-white shadow-sm" style="border: 1.5px solid #cbd5e1; transition: transform 0.3s ease;">
                        <div class="d-flex align-items-center mb-3">
                            <div class="rounded-circle me-3" style="background: rgba(168, 85, 247, 0.15); color: #7e22ce !important; font-size: 18px; width: 44px; height: 44px; display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                                <i class="fas fa-hands-holding"></i>
                            </div>
                            <h4 style="font-size: 17px; font-weight: 800; color: #0f172a !important; margin: 0;">5. Implementation Handholding</h4>
                        </div>
                        <p style="color: #1e293b !important; font-size: 14.5px; font-weight: 600; margin: 0; line-height: 1.6;">We don't just send login credentials. Dedicated implementation experts guide your team throughout deployment.</p>
                    </div>
                </div>

                <!-- 6. Comprehensive Integrations -->
                <div class="col-lg-4 col-md-6">
                    <div class="p-4 rounded-4 h-100 bg-white shadow-sm" style="border: 1.5px solid #cbd5e1; transition: transform 0.3s ease;">
                        <div class="d-flex align-items-center mb-3">
                            <div class="rounded-circle me-3" style="background: rgba(236, 72, 153, 0.15); color: #be185d !important; font-size: 18px; width: 44px; height: 44px; display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                                <i class="fas fa-network-wired"></i>
                            </div>
                            <h4 style="font-size: 17px; font-weight: 800; color: #0f172a !important; margin: 0;">6. Comprehensive Integrations</h4>
                        </div>
                        <p style="color: #1e293b !important; font-size: 14.5px; font-weight: 600; margin: 0; line-height: 1.6;">Integrations with Website, WhatsApp, Email, SMS, Tally, Busy, SAP, E-commerce, CRM, and REST APIs.</p>
                    </div>
                </div>

                <!-- 7. One Technology Partner -->
                <div class="col-lg-12">
                    <div class="p-4 rounded-4 text-center shadow-lg" style="background: linear-gradient(135deg, #0f172a 0%, #1e293b 100%); border: 1.5px solid #3b82f6; color: #ffffff !important;">
                        <h4 style="font-size: 19px; font-weight: 800; color: #fbc145 !important;" class="mb-2">
                            <i class="fas fa-star me-2 text-warning"></i>7. One Technology Partner
                        </h4>
                        <p style="color: #ffffff !important; font-size: 15px; margin: 0; font-weight: 600;">
                            <span style="color: #60a5fa !important; font-weight: 700;">ERP • CRM • Website • App • AI • Automation</span> — <span style="color: #ffffff !important;">Lead management to despatch, all unified under one roof.</span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 2. INFINITE BRAND MARQUEE -->
    <section class="brand-marquee-sec py-4">
        <div class="marquee-container">
            <div class="marquee-track">
                <img src="assets/images/c1.jpg" alt="Client 1">
                <img src="assets/images/c2.png" alt="Client 2">
                <img src="assets/images/c3.png" alt="Client 3">
                <img src="assets/images/c4.jpg" alt="Client 4">
                <img src="assets/images/c5.jpg" alt="Client 5">
                <img src="assets/images/c6.jpg" alt="Client 6">
                <img src="assets/images/c7.jpg" alt="Client 7">
                <img src="assets/images/c8.jpg" alt="Client 8">
                <!-- Loop duplicates for seamless scrolling -->
                <img src="assets/images/c1.jpg" alt="Client 1">
                <img src="assets/images/c2.png" alt="Client 2">
                <img src="assets/images/c3.png" alt="Client 3">
                <img src="assets/images/c4.jpg" alt="Client 4">
                <img src="assets/images/c5.jpg" alt="Client 5">
                <img src="assets/images/c6.jpg" alt="Client 6">
                <img src="assets/images/c7.jpg" alt="Client 7">
                <img src="assets/images/c8.jpg" alt="Client 8">
            </div>
        </div>
    </section>

    <!-- AI IN ERP & CRM BANNERS SHOWCASE SECTION -->
    <section class="ai-banners-showcase py-5" style="background: linear-gradient(180deg, #f8fafc 0%, #ffffff 100%); border-top: 1px solid #e2e8f0; border-bottom: 1px solid #e2e8f0;">
        <div class="container">
            <div class="text-center mb-4">
                <span class="sub-badge" style="background: rgba(15, 23, 42, 0.05); color: #0f172a; border: 1px solid #cbd5e1; font-weight: 700; font-size: 12px; padding: 6px 16px; border-radius: 20px;">
                    <i class="fas fa-brain me-1" style="color: #e06930;"></i> AI-POWERED SOLUTIONS
                </span>
                <h2 style="font-size: 32px; font-weight: 800; color: #0f172a; margin-top: 12px;">
                    Enterprise AI Banners — <span style="background: linear-gradient(135deg, #e06930, #fbc145); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">AI in ERP &amp; AI in CRM</span>
                </h2>
                <p style="color: #64748b; max-width: 600px; margin: 8px auto 0; font-size: 15px;">
                    Explore our next-generation AI modules designed to transform manufacturing, inventory planning, customer lead qualification, and sales automation.
                </p>
            </div>

            <div class="row g-4 align-items-center">
                <!-- AI in ERP Banner 1 -->
                <div class="col-lg-4 col-md-6">
                    <div class="card h-100 shadow-sm border-0 rounded-4 overflow-hidden" style="border: 1px solid #e2e8f0 !important; transition: transform 0.3s ease;">
                        <div class="position-relative">
                            <img src="assets/images/ai_erp_banner_1.jpg" class="img-fluid w-100" alt="AI Powered ERP" style="object-fit: cover; aspect-ratio: 1/1;">
                            <span class="badge position-absolute top-0 start-0 m-3 px-3 py-2 rounded-pill" style="background: #e06930; color: #ffffff; font-weight: 700;">
                                <i class="fas fa-microchip me-1"></i> AI in ERP
                            </span>
                        </div>
                        <div class="card-body p-4 text-center">
                            <h4 style="font-size: 18px; font-weight: 800; color: #0f172a;" class="mb-2">AI-Driven Enterprise ERP</h4>
                            <p style="font-size: 13.5px; color: #475569;" class="mb-3">Predictive stock replenishment, automated BOM costing, and 24/7 copilot signals across manufacturing &amp; inventory.</p>
                            <a href="erp.php" class="btn btn-sm btn-outline-primary rounded-pill px-4" style="border-color: #e06930; color: #e06930; font-weight: 700;">
                                Explore ERP AI <i class="fas fa-arrow-right ms-1"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- AI in ERP Banner 2 -->
                <div class="col-lg-4 col-md-6">
                    <div class="card h-100 shadow-sm border-0 rounded-4 overflow-hidden" style="border: 1px solid #e2e8f0 !important; transition: transform 0.3s ease;">
                        <div class="position-relative">
                            <img src="assets/images/ai_erp_banner_2.jpg" class="img-fluid w-100" alt="Smart Manufacturing ERP" style="object-fit: cover; aspect-ratio: 1/1;">
                            <span class="badge position-absolute top-0 start-0 m-3 px-3 py-2 rounded-pill" style="background: #0f172a; color: #ffffff; font-weight: 700;">
                                <i class="fas fa-industry me-1"></i> Smart Manufacturing
                            </span>
                        </div>
                        <div class="card-body p-4 text-center">
                            <h4 style="font-size: 18px; font-weight: 800; color: #0f172a;" class="mb-2">Smart Manufacturing AI</h4>
                            <p style="font-size: 13.5px; color: #475569;" class="mb-3">Real-time shop floor machine telemetry, automated quality control alerts, and yield optimization.</p>
                            <a href="ai-manufacturing.php" class="btn btn-sm btn-outline-primary rounded-pill px-4" style="border-color: #0f172a; color: #0f172a; font-weight: 700;">
                                Manufacturing AI <i class="fas fa-arrow-right ms-1"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- AI in CRM Banner 1 -->
                <div class="col-lg-4 col-md-12">
                    <div class="card h-100 shadow-sm border-0 rounded-4 overflow-hidden" style="border: 1px solid #e2e8f0 !important; transition: transform 0.3s ease;">
                        <div class="position-relative">
                            <img src="assets/images/ai_crm_banner_1.jpg" class="img-fluid w-100" alt="AI Powered CRM" style="object-fit: cover; aspect-ratio: 1/1;">
                            <span class="badge position-absolute top-0 start-0 m-3 px-3 py-2 rounded-pill" style="background: #2563eb; color: #ffffff; font-weight: 700;">
                                <i class="fas fa-comments me-1"></i> AI in CRM
                            </span>
                        </div>
                        <div class="card-body p-4 text-center">
                            <h4 style="font-size: 18px; font-weight: 800; color: #0f172a;" class="mb-2">AI CRM &amp; Lead Intelligence</h4>
                            <p style="font-size: 13.5px; color: #475569;" class="mb-3">WhatsApp AI Sales Representatives, instant lead qualification, automated follow-ups, and conversion tracking.</p>
                            <a href="ai-business.php" class="btn btn-sm btn-outline-primary rounded-pill px-4" style="border-color: #2563eb; color: #2563eb; font-weight: 700;">
                                Explore CRM AI <i class="fas fa-arrow-right ms-1"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- GLOBAL REACH COUNTRIES SECTION -->
    <section class="global-countries-sec py-5" style="background: #f8fafc; overflow: hidden; position: relative;">
        
        <div class="container py-2" style="position:relative; z-index:1;">
            <div class="text-center mb-5">
                <span style="background: rgba(224,105,48,0.1); border: 1px solid rgba(224,105,48,0.25); color: #e06930; font-size: 12px; font-weight: 700; padding: 5px 16px; border-radius: 30px; letter-spacing: 1px; display: inline-flex; align-items: center; gap: 6px; margin-bottom: 16px;">
                    <i class="fas fa-globe-asia"></i> GLOBAL PRESENCE
                </span>
                <h2 style="font-size: clamp(26px, 4vw, 40px); font-weight: 900; color: #0f172a; margin: 0 0 12px; letter-spacing: -1px;">
                    Expanding Operations Across <span style="background: linear-gradient(135deg, #e06930, #fbc145); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">11+ Countries</span>
                </h2>
                <p style="font-size: 15px; color: #64748b; max-width: 560px; margin: 0 auto; line-height: 1.6;">Cloud ERP, Smart POS &amp; AI Automation — localized for tax compliance, payments &amp; global market expansion.</p>
            </div>

            <!-- Countries Grid (11 Featured Global Markets) -->
            <div style="display: grid; grid-template-columns: repeat(auto-fill, minmax(140px, 1fr)); gap: 14px; max-width: 1000px; margin: 0 auto 36px;">
                <?php
                require_once(__DIR__ . '/includes/country_profiles_master.php');
                $featured11 = ['saudi-arabia', 'uae', 'nepal', 'bangladesh', 'kenya', 'afghanistan', 'sri-lanka', 'thailand', 'south-africa', 'oman', 'nigeria'];
                foreach ($featured11 as $slug) {
                    if (!isset($countryProfiles[$slug])) continue;
                    $cp = $countryProfiles[$slug];
                    $flag = htmlspecialchars($cp['flag'] ?? '🌐');
                    $name = htmlspecialchars($cp['name'] ?? ucwords(str_replace('-',' ',$slug)));
                    echo '<a href="country.php?country=' . urlencode($slug) . '" style="display:flex; flex-direction:column; align-items:center; justify-content:center; gap:8px; padding:16px 12px; background: #ffffff; border: 1px solid #cbd5e1; border-radius: 14px; text-decoration:none; transition: all 0.25s ease; cursor:pointer; box-shadow: 0 2px 8px rgba(0,0,0,0.03);" onmouseover="this.style.background=\'rgba(224,105,48,0.08)\'; this.style.borderColor=\'#e06930\'; this.style.transform=\'translateY(-4px)\'; this.style.boxShadow=\'0 8px 20px rgba(224,105,48,0.15)\';" onmouseout="this.style.background=\'#ffffff\'; this.style.borderColor=\'#cbd5e1\'; this.style.transform=\'translateY(0)\'; this.style.boxShadow=\'0 2px 8px rgba(0,0,0,0.03)\';">' .
                        '<span style="font-size:32px; line-height:1;">' . $flag . '</span>' .
                        '<span style="font-size:12px; font-weight:700; color:#0f172a; text-align:center; line-height:1.3;">' . $name . '</span>' .
                    '</a>';
                }
                ?>
            </div>

            <!-- CTA -->
            <div class="text-center">
                <a href="country.php" style="display: inline-flex; align-items: center; gap: 10px; background: linear-gradient(135deg, #e06930 0%, #fbc145 100%); color: #fff; font-weight: 700; font-size: 14px; padding: 13px 32px; border-radius: 30px; text-decoration: none; box-shadow: 0 6px 20px rgba(224,105,48,0.35); transition: all 0.3s ease;" onmouseover="this.style.transform='translateY(-2px)'; this.style.boxShadow='0 10px 28px rgba(224,105,48,0.5)';" onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 6px 20px rgba(224,105,48,0.35)';">
                    <i class="fas fa-globe"></i> Explore All Country Solutions
                    <i class="fas fa-arrow-right"></i>
                </a>
            </div>
        </div>
    </section>

    <!-- 3. SMART SOLUTIONS GRID -->
    <section id="solutions" class="solutions-grid-sec py-5">
        <div class="container text-center py-3">
            <h2 class="section-title">Smart <span>Solutions</span></h2>
            <p class="section-desc">Tailor-made cloud automation for Jaipur, Delhi NCR, and growing businesses worldwide.</p>
            
            <div class="row g-4 mt-4 justify-content-center">
                <div class="col-lg-2 col-md-4 col-6">
                    <a href="pos.php" class="category-card card-gradient-orange">
                        <div class="category-icon"><i class="fa-solid fa-cash-register"></i></div>
                        <h3>Smart POS</h3>
                        <p>3-Sec Billing</p>
                    </a>
                </div>
                <div class="col-lg-2 col-md-4 col-6">
                    <a href="erp.php" class="category-card card-gradient-blue">
                        <div class="category-icon"><i class="fa-solid fa-network-wired"></i></div>
                        <h3>AI ERP</h3>
                        <p>B2B Automations</p>
                    </a>
                </div>
                <div class="col-lg-2 col-md-4 col-6">
                    <a href="accounting.php" class="category-card card-gradient-green">
                        <div class="category-icon"><i class="fa-solid fa-file-invoice-dollar"></i></div>
                        <h3>Accounting</h3>
                        <p>GST & Returns</p>
                    </a>
                </div>
                <div class="col-lg-2 col-md-4 col-6">
                    <a href="inventory.php" class="category-card card-gradient-purple">
                        <div class="category-icon"><i class="fa-solid fa-boxes-stacked"></i></div>
                        <h3>Inventory</h3>
                        <p>Real-Time Stock</p>
                    </a>
                </div>
                <div class="col-lg-2 col-md-4 col-6">
                    <a href="crm.php" class="category-card card-gradient-cyan">
                        <div class="category-icon"><i class="fa-solid fa-users"></i></div>
                        <h3>CRM Tool</h3>
                        <p>Loyalty Program</p>
                    </a>
                </div>
                <div class="col-lg-2 col-md-4 col-6">
                    <a href="omnichannel.php" class="category-card card-gradient-red">
                        <div class="category-icon"><i class="fa-solid fa-arrows-spin"></i></div>
                        <h3>Omnichannel</h3>
                        <p>Store Syncing</p>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- DIGIFY AI ERP ADVANTAGES -->
    <section class="ai-erp-advantages-sec py-5" style="background: #ffffff; position: relative; overflow: hidden;">

        <div class="container py-3" style="position:relative; z-index:1;">
            <!-- Section Header -->
            <div class="text-center mb-5">
                <span style="background: rgba(224,105,48,0.1); border: 1px solid rgba(224,105,48,0.25); color: #e06930; font-size: 12px; font-weight: 700; padding: 5px 16px; border-radius: 30px; letter-spacing: 1px; display: inline-flex; align-items: center; gap: 6px; margin-bottom: 16px;">
                    <i class="fa-solid fa-brain"></i> AI-FIRST ARCHITECTURE
                </span>
                <h2 style="font-size: clamp(26px, 4vw, 42px); font-weight: 900; color: #0f172a; margin: 0 0 12px; letter-spacing: -1px;">
                    DIGIFY <span style="background: linear-gradient(135deg, #e06930, #fbc145); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">AI ERP</span> — Intelligence Built In
                </h2>
                <p style="font-size: 15px; color: #64748b; max-width: 620px; margin: 0 auto; line-height: 1.65;">Not just software — an AI Operating System that thinks, predicts, and automates your entire business in real time.</p>
            </div>

            <!-- AI Metric Stats Bar -->
            <div style="display: grid; grid-template-columns: repeat(4, 1fr); gap: 16px; max-width: 900px; margin-left: auto; margin-right: auto; margin-bottom: 48px;">
                <div style="text-align:center; padding: 20px 10px; background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 16px;">
                    <div style="font-size: 32px; font-weight: 900; background: linear-gradient(135deg,#e06930,#fbc145); -webkit-background-clip:text; -webkit-text-fill-color:transparent;">3x</div>
                    <div style="font-size: 12px; color: #64748b; margin-top:4px; font-weight: 600;">Faster Operations</div>
                </div>
                <div style="text-align:center; padding: 20px 10px; background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 16px;">
                    <div style="font-size: 32px; font-weight: 900; background: linear-gradient(135deg,#e06930,#fbc145); -webkit-background-clip:text; -webkit-text-fill-color:transparent;">40%</div>
                    <div style="font-size: 12px; color: #64748b; margin-top:4px; font-weight: 600;">Cost Reduction</div>
                </div>
                <div style="text-align:center; padding: 20px 10px; background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 16px;">
                    <div style="font-size: 32px; font-weight: 900; background: linear-gradient(135deg,#e06930,#fbc145); -webkit-background-clip:text; -webkit-text-fill-color:transparent;">99%</div>
                    <div style="font-size: 12px; color: #64748b; margin-top:4px; font-weight: 600;">Billing Accuracy</div>
                </div>
                <div style="text-align:center; padding: 20px 10px; background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 16px;">
                    <div style="font-size: 32px; font-weight: 900; background: linear-gradient(135deg,#e06930,#fbc145); -webkit-background-clip:text; -webkit-text-fill-color:transparent;">24/7</div>
                    <div style="font-size: 12px; color: #64748b; margin-top:4px; font-weight: 600;">AI Auto-Pilot</div>
                </div>
            </div>

            <!-- AI Feature Cards Grid -->
            <div class="row g-4">
                <!-- Card 1 -->
                <div class="col-lg-4 col-md-6">
                    <div style="background: #ffffff; border: 1px solid #e2e8f0; border-top: 4px solid #e06930; border-radius: 18px; padding: 28px 24px; height:100%; transition: all 0.3s ease; position: relative; overflow: hidden;" onmouseover="this.style.borderColor='rgba(224,105,48,0.6)'; this.style.transform='translateY(-4px)'; this.style.boxShadow='0 16px 40px rgba(224,105,48,0.15)';" onmouseout="this.style.borderColor='rgba(224,105,48,0.25)'; this.style.transform=''; this.style.boxShadow='';">
                        <div style="width:48px; height:48px; border-radius:14px; background: linear-gradient(135deg,#e06930,#ea580c); display:flex; align-items:center; justify-content:center; font-size:20px; color:#fff; margin-bottom:16px; box-shadow: 0 6px 16px rgba(224,105,48,0.35);">
                            <i class="fa-solid fa-network-wired"></i>
                        </div>
                        <h3 style="font-size:16px; font-weight:800; color:#0f172a; margin-bottom:10px; letter-spacing:-0.2px;">AI-Integrated ERP & POS Framework</h3>
                        <p style="font-size:13.5px; color:#475569; line-height:1.65; margin:0;">AI connects POS billing, inventory, manufacturing, and accounting into one unified system — eliminating silos and manual data entry.</p>
                        <div style="margin-top:16px; display:flex; flex-wrap:wrap; gap:6px;">
                            <span style="font-size:10px; font-weight:700; background:#fff7ed; border:1px solid #fed7aa; color:#c2410c; padding:3px 9px; border-radius:20px;">Unified Modules</span>
                            <span style="font-size:10px; font-weight:700; background:#fff7ed; border:1px solid #fed7aa; color:#c2410c; padding:3px 9px; border-radius:20px;">Zero Manual Entry</span>
                        </div>
                    </div>
                </div>
                <!-- Card 2 -->
                <div class="col-lg-4 col-md-6">
                    <div style="background: #ffffff; border: 1px solid #e2e8f0; border-top: 4px solid #3b82f6; border-radius: 18px; padding: 28px 24px; height:100%; transition: all 0.3s ease;" onmouseover="this.style.borderColor='rgba(59,130,246,0.55)'; this.style.transform='translateY(-4px)'; this.style.boxShadow='0 16px 40px rgba(59,130,246,0.15)';" onmouseout="this.style.borderColor='rgba(59,130,246,0.25)'; this.style.transform=''; this.style.boxShadow='';">
                        <div style="width:48px; height:48px; border-radius:14px; background: linear-gradient(135deg,#3b82f6,#1d4ed8); display:flex; align-items:center; justify-content:center; font-size:20px; color:#fff; margin-bottom:16px; box-shadow:0 6px 16px rgba(59,130,246,0.35);">
                            <i class="fa-solid fa-chart-line"></i>
                        </div>
                        <h3 style="font-size:16px; font-weight:800; color:#0f172a; margin-bottom:10px;">AI-Driven Real-Time Data Flow</h3>
                        <p style="font-size:13.5px; color:#475569; line-height:1.65; margin:0;">Sales, stock, production, and financial data synchronize instantly across all departments. AI flags anomalies before they become problems.</p>
                        <div style="margin-top:16px; display:flex; flex-wrap:wrap; gap:6px;">
                            <span style="font-size:10px; font-weight:700; background:#eff6ff; border:1px solid #bfdbfe; color:#1d4ed8; padding:3px 9px; border-radius:20px;">Live Sync</span>
                            <span style="font-size:10px; font-weight:700; background:#eff6ff; border:1px solid #bfdbfe; color:#1d4ed8; padding:3px 9px; border-radius:20px;">Anomaly Detection</span>
                        </div>
                    </div>
                </div>
                <!-- Card 3 -->
                <div class="col-lg-4 col-md-6">
                    <div style="background: #ffffff; border: 1px solid #e2e8f0; border-top: 4px solid #10b981; border-radius: 18px; padding: 28px 24px; height:100%; transition: all 0.3s ease;" onmouseover="this.style.borderColor='rgba(16,185,129,0.55)'; this.style.transform='translateY(-4px)'; this.style.boxShadow='0 16px 40px rgba(16,185,129,0.15)';" onmouseout="this.style.borderColor='rgba(16,185,129,0.25)'; this.style.transform=''; this.style.boxShadow='';">
                        <div style="width:48px; height:48px; border-radius:14px; background:linear-gradient(135deg,#10b981,#059669); display:flex; align-items:center; justify-content:center; font-size:20px; color:#fff; margin-bottom:16px; box-shadow:0 6px 16px rgba(16,185,129,0.35);">
                            <i class="fa-solid fa-cash-register"></i>
                        </div>
                        <h3 style="font-size:16px; font-weight:800; color:#0f172a; margin-bottom:10px;">Intelligent POS Billing</h3>
                        <p style="font-size:13.5px; color:#475569; line-height:1.65; margin:0;">AI speeds up checkout, detects pricing errors, auto-applies GST, dynamic discounts, and loyalty points — all in under 3 seconds per bill.</p>
                        <div style="margin-top:16px; display:flex; flex-wrap:wrap; gap:6px;">
                            <span style="font-size:10px; font-weight:700; background:#f0fdf4; border:1px solid #bbf7d0; color:#059669; padding:3px 9px; border-radius:20px;">3-Sec Billing</span>
                            <span style="font-size:10px; font-weight:700; background:#f0fdf4; border:1px solid #bbf7d0; color:#059669; padding:3px 9px; border-radius:20px;">GST Auto-Calc</span>
                        </div>
                    </div>
                </div>
                <!-- Card 4 -->
                <div class="col-lg-4 col-md-6">
                    <div style="background: #ffffff; border: 1px solid #e2e8f0; border-top: 4px solid #fbc145; border-radius: 18px; padding: 28px 24px; height:100%; transition: all 0.3s ease;" onmouseover="this.style.borderColor='rgba(251,193,69,0.55)'; this.style.transform='translateY(-4px)'; this.style.boxShadow='0 16px 40px rgba(251,193,69,0.15)';" onmouseout="this.style.borderColor='rgba(251,193,69,0.25)'; this.style.transform=''; this.style.boxShadow='';">
                        <div style="width:48px; height:48px; border-radius:14px; background:linear-gradient(135deg,#fbc145,#f59e0b); display:flex; align-items:center; justify-content:center; font-size:20px; color:#fff; margin-bottom:16px; box-shadow:0 6px 16px rgba(251,193,69,0.35);">
                            <i class="fa-solid fa-boxes-stacked"></i>
                        </div>
                        <h3 style="font-size:16px; font-weight:800; color:#0f172a; margin-bottom:10px;">Smart Inventory Optimization</h3>
                        <p style="font-size:13.5px; color:#475569; line-height:1.65; margin:0;">AI analyzes demand trends, predicts reorder needs, flags dead stock, and auto-generates purchase orders before you run out.</p>
                        <div style="margin-top:16px; display:flex; flex-wrap:wrap; gap:6px;">
                            <span style="font-size:10px; font-weight:700; background:#fffbeb; border:1px solid #fde68a; color:#b45309; padding:3px 9px; border-radius:20px;">Demand Forecast</span>
                            <span style="font-size:10px; font-weight:700; background:#fffbeb; border:1px solid #fde68a; color:#b45309; padding:3px 9px; border-radius:20px;">Auto Reorder</span>
                        </div>
                    </div>
                </div>
                <!-- Card 5 -->
                <div class="col-lg-4 col-md-6">
                    <div style="background: #ffffff; border: 1px solid #e2e8f0; border-top: 4px solid #8b5cf6; border-radius: 18px; padding: 28px 24px; height:100%; transition: all 0.3s ease;" onmouseover="this.style.borderColor='rgba(139,92,246,0.55)'; this.style.transform='translateY(-4px)'; this.style.boxShadow='0 16px 40px rgba(139,92,246,0.15)';" onmouseout="this.style.borderColor='rgba(139,92,246,0.25)'; this.style.transform=''; this.style.boxShadow='';">
                        <div style="width:48px; height:48px; border-radius:14px; background:linear-gradient(135deg,#8b5cf6,#6d28d9); display:flex; align-items:center; justify-content:center; font-size:20px; color:#fff; margin-bottom:16px; box-shadow:0 6px 16px rgba(139,92,246,0.35);">
                            <i class="fa-solid fa-industry"></i>
                        </div>
                        <h3 style="font-size:16px; font-weight:800; color:#0f172a; margin-bottom:10px;">AI Manufacturing Control</h3>
                        <p style="font-size:13.5px; color:#475569; line-height:1.65; margin:0;">Production planning, BOM auto-calculation, WIP tracking, and machine efficiency monitoring — all AI-assisted and real-time.</p>
                        <div style="margin-top:16px; display:flex; flex-wrap:wrap; gap:6px;">
                            <span style="font-size:10px; font-weight:700; background:#f5f3ff; border:1px solid #ddd6fe; color:#6d28d9; padding:3px 9px; border-radius:20px;">BOM Auto-Calc</span>
                            <span style="font-size:10px; font-weight:700; background:#f5f3ff; border:1px solid #ddd6fe; color:#6d28d9; padding:3px 9px; border-radius:20px;">WIP Tracking</span>
                        </div>
                    </div>
                </div>
                <!-- Card 6 -->
                <div class="col-lg-4 col-md-6">
                    <div style="background: #ffffff; border: 1px solid #e2e8f0; border-top: 4px solid #06b6d4; border-radius: 18px; padding: 28px 24px; height:100%; transition: all 0.3s ease;" onmouseover="this.style.borderColor='rgba(6,182,212,0.55)'; this.style.transform='translateY(-4px)'; this.style.boxShadow='0 16px 40px rgba(6,182,212,0.15)';" onmouseout="this.style.borderColor='rgba(6,182,212,0.25)'; this.style.transform=''; this.style.boxShadow='';">
                        <div style="width:48px; height:48px; border-radius:14px; background:linear-gradient(135deg,#06b6d4,#0284c7); display:flex; align-items:center; justify-content:center; font-size:20px; color:#fff; margin-bottom:16px; box-shadow:0 6px 16px rgba(6,182,212,0.35);">
                            <i class="fa-solid fa-chart-pie"></i>
                        </div>
                        <h3 style="font-size:16px; font-weight:800; color:#0f172a; margin-bottom:10px;">Predictive Business Intelligence</h3>
                        <p style="font-size:13.5px; color:#475569; line-height:1.65; margin:0;">AI algorithms turn raw data into forecasts. Sales trends, profitability projections, and risk alerts — delivered to your phone every morning.</p>
                        <div style="margin-top:16px; display:flex; flex-wrap:wrap; gap:6px;">
                            <span style="font-size:10px; font-weight:700; background:#ecfeff; border:1px solid #a5f3fc; color:#0284c7; padding:3px 9px; border-radius:20px;">Sales Forecast</span>
                            <span style="font-size:10px; font-weight:700; background:#ecfeff; border:1px solid #a5f3fc; color:#0284c7; padding:3px 9px; border-radius:20px;">Daily P&L</span>
                        </div>
                    </div>
                </div>
                <!-- Card 7 -->
                <div class="col-lg-4 col-md-6">
                    <div style="background: #ffffff; border: 1px solid #e2e8f0; border-top: 4px solid #ef4444; border-radius: 18px; padding: 28px 24px; height:100%; transition: all 0.3s ease;" onmouseover="this.style.borderColor='rgba(239,68,68,0.55)'; this.style.transform='translateY(-4px)'; this.style.boxShadow='0 16px 40px rgba(239,68,68,0.15)';" onmouseout="this.style.borderColor='rgba(239,68,68,0.25)'; this.style.transform=''; this.style.boxShadow='';">
                        <div style="width:48px; height:48px; border-radius:14px; background:linear-gradient(135deg,#ef4444,#b91c1c); display:flex; align-items:center; justify-content:center; font-size:20px; color:#fff; margin-bottom:16px; box-shadow:0 6px 16px rgba(239,68,68,0.35);">
                            <i class="fa-solid fa-file-invoice-dollar"></i>
                        </div>
                        <h3 style="font-size:16px; font-weight:800; color:#0f172a; margin-bottom:10px;">Automated Accounting & Compliance</h3>
                        <p style="font-size:13.5px; color:#475569; line-height:1.65; margin:0;">GST returns, E-Invoicing, E-Way Bills, TDS, Saudi ZATCA VAT — auto-filed with zero errors. AI catches discrepancies before ITR filing.</p>
                        <div style="margin-top:16px; display:flex; flex-wrap:wrap; gap:6px;">
                            <span style="font-size:10px; font-weight:700; background:#fef2f2; border:1px solid #fecaca; color:#b91c1c; padding:3px 9px; border-radius:20px;">GST Auto-File</span>
                            <span style="font-size:10px; font-weight:700; background:#fef2f2; border:1px solid #fecaca; color:#b91c1c; padding:3px 9px; border-radius:20px;">E-Invoicing</span>
                        </div>
                    </div>
                </div>
                <!-- Card 8 -->
                <div class="col-lg-4 col-md-6">
                    <div style="background: #ffffff; border: 1px solid #e2e8f0; border-top: 4px solid #4576ba; border-radius: 18px; padding: 28px 24px; height:100%; transition: all 0.3s ease;" onmouseover="this.style.borderColor='rgba(69,118,186,0.55)'; this.style.transform='translateY(-4px)'; this.style.boxShadow='0 16px 40px rgba(69,118,186,0.15)';" onmouseout="this.style.borderColor='rgba(69,118,186,0.25)'; this.style.transform=''; this.style.boxShadow='';">
                        <div style="width:48px; height:48px; border-radius:14px; background:linear-gradient(135deg,#4576ba,#1d4ed8); display:flex; align-items:center; justify-content:center; font-size:20px; color:#fff; margin-bottom:16px; box-shadow:0 6px 16px rgba(69,118,186,0.35);">
                            <i class="fa-solid fa-map-location-dot"></i>
                        </div>
                        <h3 style="font-size:16px; font-weight:800; color:#0f172a; margin-bottom:10px;">Centralized Multi-Location Management</h3>
                        <p style="font-size:13.5px; color:#475569; line-height:1.65; margin:0;">Manage 100+ stores, warehouses, and factories from one screen. AI ensures consistent data across all locations in real time.</p>
                        <div style="margin-top:16px; display:flex; flex-wrap:wrap; gap:6px;">
                            <span style="font-size:10px; font-weight:700; background:#eff6ff; border:1px solid #bfdbfe; color:#1d4ed8; padding:3px 9px; border-radius:20px;">Multi-Store</span>
                            <span style="font-size:10px; font-weight:700; background:#eff6ff; border:1px solid #bfdbfe; color:#1d4ed8; padding:3px 9px; border-radius:20px;">Live Sync</span>
                        </div>
                    </div>
                </div>
                <!-- Card 9 -->
                <div class="col-lg-4 col-md-6">
                    <div style="background: #ffffff; border: 1px solid #e2e8f0; border-top: 4px solid #291fbc; border-radius: 18px; padding: 28px 24px; height:100%; transition: all 0.3s ease;" onmouseover="this.style.borderColor='rgba(41,31,188,0.6)'; this.style.transform='translateY(-4px)'; this.style.boxShadow='0 16px 40px rgba(41,31,188,0.2)';" onmouseout="this.style.borderColor='rgba(41,31,188,0.3)'; this.style.transform=''; this.style.boxShadow='';">
                        <div style="width:48px; height:48px; border-radius:14px; background:linear-gradient(135deg,#291fbc,#1e1a91); display:flex; align-items:center; justify-content:center; font-size:20px; color:#fff; margin-bottom:16px; box-shadow:0 6px 16px rgba(41,31,188,0.4);">
                            <i class="fa-solid fa-cloud"></i>
                        </div>
                        <h3 style="font-size:16px; font-weight:800; color:#0f172a; margin-bottom:10px;">Adaptive Cloud & Offline Architecture</h3>
                        <p style="font-size:13.5px; color:#475569; line-height:1.65; margin:0;">Works perfectly offline. AI manages data queuing, syncing, and recovery — your business never stops even without internet.</p>
                        <div style="margin-top:16px; display:flex; flex-wrap:wrap; gap:6px;">
                            <span style="font-size:10px; font-weight:700; background:#eef2ff; border:1px solid #c7d2fe; color:#3730a3; padding:3px 9px; border-radius:20px;">Offline First</span>
                            <span style="font-size:10px; font-weight:700; background:#eef2ff; border:1px solid #c7d2fe; color:#3730a3; padding:3px 9px; border-radius:20px;">Auto Sync</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Bottom CTA -->
            <div class="text-center mt-5">
                <a href="erp.php" style="display:inline-flex; align-items:center; gap:10px; background: linear-gradient(135deg,#e06930 0%,#fbc145 100%); color:#fff; font-weight:700; font-size:15px; padding:14px 36px; border-radius:30px; text-decoration:none; box-shadow:0 8px 24px rgba(224,105,48,0.35); transition:all 0.3s ease;" onmouseover="this.style.transform='translateY(-3px)'; this.style.boxShadow='0 12px 32px rgba(224,105,48,0.5)';" onmouseout="this.style.transform=''; this.style.boxShadow='0 8px 24px rgba(224,105,48,0.35)';">
                    <i class="fa-solid fa-brain"></i> Explore Full AI ERP Platform
                    <i class="fa-solid fa-arrow-right"></i>
                </a>
                <a href="contact-us.php" class="ms-3" data-bs-toggle="modal" data-bs-target="#trialModal" style="display:inline-flex; align-items:center; gap:8px; background:#f1f5f9; border:1px solid #e2e8f0; color:#334155; font-weight:600; font-size:14px; padding:14px 28px; border-radius:30px; text-decoration:none; transition:all 0.3s ease;" onmouseover="this.style.background='#e2e8f0'; this.style.borderColor='#cbd5e1';" onmouseout="this.style.background='#f1f5f9'; this.style.borderColor='#e2e8f0';">
                    <i class="fa-solid fa-calendar-check"></i> Book Free Demo
                </a>
            </div>
        </div>
    </section>


    <!-- PREMIUM SERVICES RESTORED -->

  <!--  services section start here -->
  <section class="services-sec">
       <div class="container">
           <div class="row">
               <div class="col-md-12">
                   <div class="heading-wrap">
                      <span class="text-primary fw-bold mb-2 d-block">What We Offer</span>
                      <h2>Our Premium<span> Services</span> </h2>
                      <p>Empowering your business with smart, reliable, and customized digital solutions.</p>
                   </div>
                   <div class="row">
                       <div class="col-md-4 col-sm-6">
                           <div class="services-box">
                               <div class="ser-icon">
                                 <img src="assets/images/sol1.png" alt="Digital Marketing & SEO ">
                               </div>
                               <h3>Digital Marketing & SEO </h3>
                               <p>Boost online visibility using meta‑tag optimization, social media engagement, reputation monitoring, content strategy, data analytics, and ongoing campaigns tailored to convert.</p>
                               <a href="digital-marketing-services.php">Read More <i style="transform: rotateZ(45deg);" class="fa-solid fa-arrow-up"></i></a>
                           </div>
                       </div>
                       <div class="col-md-4 col-sm-6">
                           <div class="services-box">
                               <div class="ser-icon">
                                 <img src="assets/images/sol2.png" alt="Web Development">
                               </div>
                               <h3>Web Development</h3>
                               <p>Creating responsive, results‑oriented websites that convert traffic into customers. Custom builds for your brand identity, CMS integrations like WordPress, e‑commerce platforms, and ongoing support to maintain performance.</p>
                               <a href="e-commerce-website-development.php">Read More <i style="transform: rotateZ(45deg);" class="fa-solid fa-arrow-up"></i></a>
                           </div>
                       </div>
                       <div class="col-md-4 col-sm-6">
                           <div class="services-box">
                               <div class="ser-icon">
                                 <img src="assets/images/sol3.png" alt="Mobile App Development">
                               </div>
                               <h3> Mobile App Development</h3>
                               <p>Building native (iOS/Android), hybrid, or React Native/Flutter apps that are user‑friendly and scalable for business growth. Expertise in grocery, education, e‑commerce, fitness, and more.</p>
                               <a href="android-application.php">Read More <i style="transform: rotateZ(45deg);" class="fa-solid fa-arrow-up"></i></a>
                           </div>
                       </div>
                       <div class="col-md-4 col-sm-6">
                           <div class="services-box">
                               <div class="ser-icon">
                                 <img src="assets/images/sol4.png" alt="Web Design">
                               </div>
                               <h3>Web Design</h3>
                               <p>Designing visually engaging site layouts focused on UX, clean navigation, SEO optimization, and mobile responsiveness—from mockups to final deployment.</p>
                               <a href="modern-responsive-website-design.php">Read More <i style="transform: rotateZ(45deg);" class="fa-solid fa-arrow-up"></i></a>
                           </div>
                       </div>
                       <div class="col-md-4 col-sm-6">
                           <div class="services-box">
                               <div class="ser-icon">
                                 <img src="assets/images/sol5.png" alt="Social Media Marketing">
                               </div>
                               <h3>Social Media Marketing</h3>
                               <p>Digify Soft Solutions leads Jaipur with effective social media strategies that increase your brand’s visibility, engagement, and sales across major platforms.</p>
                               <a href="social-media-optimization.php">Read More <i style="transform: rotateZ(45deg);" class="fa-solid fa-arrow-up"></i></a>
                           </div>
                       </div>
                       <div class="col-md-4 col-sm-6">
                           <div class="services-box">
                               <div class="ser-icon">
                                 <img src="assets/images/sol6.png" alt="CRM Development">
                               </div>
                               <h3>CRM Development</h3>
                               <p>Customized Software Development, Product Development, Web Application Development..</p>
                               <a href="custom-crm-solutions.php">Read More <i style="transform: rotateZ(45deg);" class="fa-solid fa-arrow-up"></i></a>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
       </div>
  </section>
  <!-- services section end here -->


    <!-- 4. CORE AUTOMATIONS -->
    <section class="automations-sec py-5">
        <div class="container py-3">
            <h2 class="section-title text-center">Core <span>Automations</span></h2>
            <p class="section-desc text-center">Powering your daily retail and wholesale operations with advanced AI integrations.</p>
            
            <div class="swipe-container mt-4">
                <div class="swipe-track">
                    
                    <!-- Card 1 -->
                    <div class="swipe-item">
                        <div class="swipe-card">
                            <span class="card-badge ai">AI-Powered</span>
                            <h3>Smart Image POS</h3>
                            <p>AI automatically recognizes products on-screen for swift billing. Speed up your cash counters and prevent long checkout queues.</p>
                            <a href="pos.php" class="card-btn">Learn More <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>

                    <!-- Card 2 -->
                    <div class="swipe-item">
                        <div class="swipe-card">
                            <span class="card-badge ocr">OCR Scanning</span>
                            <h3>AI Bill Scanner</h3>
                            <p>Instantly upload supplier bills. Our OCR tool reads line items automatically and registers stock without manual typing.</p>
                            <a href="inventory.php" class="card-btn">Learn More <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>

                    <!-- Card 3 -->
                    <div class="swipe-item">
                        <div class="swipe-card">
                            <span class="card-badge cloud">Cloud Synced</span>
                            <h3>Multi-Store Sync</h3>
                            <p>Control purchases, stock levels, GST tax invoices, and retail dispatches across all your branch offices in real-time.</p>
                            <a href="smart-retail.php" class="card-btn">Learn More <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>

                    <!-- Duplicates for seamless marquee loop on all screens -->
                    <div class="swipe-item">
                        <div class="swipe-card">
                            <span class="card-badge ai">AI-Powered</span>
                            <h3>Smart Image POS</h3>
                            <p>AI automatically recognizes products on-screen for swift billing. Speed up your cash counters and prevent long checkout queues.</p>
                            <a href="pos.php" class="card-btn">Learn More <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="swipe-item">
                        <div class="swipe-card">
                            <span class="card-badge ocr">OCR Scanning</span>
                            <h3>AI Bill Scanner</h3>
                            <p>Instantly upload supplier bills. Our OCR tool reads line items automatically and registers stock without manual typing.</p>
                            <a href="inventory.php" class="card-btn">Learn More <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="swipe-item">
                        <div class="swipe-card">
                            <span class="card-badge cloud">Cloud Synced</span>
                            <h3>Multi-Store Sync</h3>
                            <p>Control purchases, stock levels, GST tax invoices, and retail dispatches across all your branch offices in real-time.</p>
                            <a href="smart-retail.php" class="card-btn">Learn More <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!-- 5. LIVE STATISTICS COUNTERS -->
    <section class="stats-sec py-5">
        <div class="container py-2">
            <div class="row g-4">
                <div class="col-lg-3 col-6">
                    <div class="stat-card">
                        <h3>100+</h3>
                        <p>Happy Retailers</p>
                    </div>
                </div>
                <div class="col-lg-3 col-6">
                    <div class="stat-card">
                        <h3>10M+</h3>
                        <p>Bills Generated</p>
                    </div>
                </div>
                <div class="col-lg-3 col-6">
                    <div class="stat-card">
                        <h3>99.9%</h3>
                        <p>Server Uptime</p>
                    </div>
                </div>
                <div class="col-lg-3 col-6">
                    <div class="stat-card">
                        <h3>24/7</h3>
                        <p>Expert Support</p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- SOLVING BUSINESS RESTORED -->

 <section class="solving-business-sec">
   <div class="container">
       <div class="row">
           <div class="col-md-10 mx-auto">
               <div class="heading-wrap">
                  <h2>Smart Solutions for<span> Every Industry</span> </h2>
                  <p>Whether it’s retail, wholesale, or manufacturing, Digify Soft Solutions provides the right ERP and smart business solutions to streamline operations and boost efficiency.</p>
               </div>
                <div class="innovative-tabs solving-business-tabs">
                  <!-- Nav Tabs -->
                  <div class="nav nav-tabs mb-3" id="nav-tab-wholesale" role="tablist">
                    <button class="nav-link active" id="nav-wholesale-tab" data-bs-toggle="tab" data-bs-target="#nav-wholesale" type="button" role="tab" aria-controls="nav-wholesale" aria-selected="true">Smarter retail</button>
                    <button class="nav-link" id="nav-distribution-tab" data-bs-toggle="tab" data-bs-target="#nav-distribution" type="button" role="tab" aria-controls="nav-distribution" aria-selected="false">Manufacturing</button>
                  </div>

                  <!-- Tab Content -->
                  <div class="tab-content" id="nav-tabContent-wholesale">

                    <!-- Retail Tab -->
                    <div class="tab-pane fade show active" id="nav-wholesale" role="tabpanel" aria-labelledby="nav-wholesale-tab">
                       <div class="row align-items-center bg-shape">
                            <div class="col-md-7">
                                <div class="innovative-silder">
                                    <div class="owl-carousel store-silder owl-theme">
                                       <div class="item">
                                           <div class="store-box">
                                              <h3>Apparel & Footwear</h3>
                                              <ul>
                                                 <li>
                                                    <figure>
                                                       <a href="bridal-store.php"><img src="assets/images/img301.webp" alt="Bridal Store"></a>
                                                    </figure>
                                                    <h6>Bridal Store</h6>
                                                 </li>
                                                 <li>
                                                    <figure>
                                                       <a href="boutique-store.php"><img src="assets/images/img302.webp" alt="Boutique Store"></a>
                                                    </figure>
                                                    <h6>Boutique Store</h6>
                                                 </li>
                                                 <li>
                                                    <figure>
                                                       <a href="readymade-garment.php"><img src="assets/images/img303.webp" alt="Readymade Garment"></a>
                                                    </figure>
                                                    <h6>readymade-garment</h6>
                                                 </li>
                                                 <li>
                                                    <figure>
                                                       <a href="footwear-store.php"><img src="assets/images/img304.webp" alt="Footwear Store"></a>
                                                    </figure>
                                                    <h6>footwear-store</h6>
                                                 </li>
                                              </ul>
                                           </div>
                                       </div>

                                       <div class="item">
                                           <div class="store-box">
                                              <h3>Books & Office Supplies</h3>
                                              <ul>
                                                 <li>
                                                    <figure>
                                                       <a href="book-store.php"><img src="assets/images/img305.webp" alt="Book Store"></a>
                                                    </figure>
                                                    <h6>Book Store</h6>
                                                 </li>
                                                 <li>
                                                    <figure>
                                                       <a href="stationery-store.php"><img src="assets/images/img306.webp" alt="Office Supplies"></a>
                                                    </figure>
                                                    <h6>Stationery Store</h6>
                                                 </li>
                                              </ul>
                                           </div>
                                       </div>

<!--                                        <div class="item">
                                           <div class="store-box">
                                              <h3>Food & Confectionery</h3>
                                              <ul>
                                                 <li>
                                                    <figure>
                                                       <a href="#"><img src="assets/images/img307.webp" alt="Bakery Shop"></a>
                                                    </figure>
                                                    <h6>Bakery Shop</h6>
                                                 </li>
                                                 <li>
                                                    <figure>
                                                       <a href="#"><img src="assets/images/img308.webp" alt="Ice Cream Shop"></a>
                                                    </figure>
                                                    <h6>Ice Cream Shop</h6>
                                                 </li>
                                                 <li>
                                                    <figure>
                                                       <a href="#"><img src="assets/images/img309.webp" alt="Sweet Shop"></a>
                                                    </figure>
                                                    <h6>Sweet Shop</h6>
                                                 </li>
                                              </ul>
                                           </div>
                                       </div> -->

                                       <div class="item">
                                           <div class="store-box">
                                              <h3>Hypermarket & Departmental Store</h3>
                                              <ul>
                                                 <li>
                                                    <figure>
                                                       <a href="convenience-store.php"><img src="assets/images/img310.webp" alt="Convenience Store"></a>
                                                    </figure>
                                                    <h6>Convenience Store</h6>
                                                 </li>
                                                 <li>
                                                    <figure>
                                                       <a href="departmental-store.php"><img src="assets/images/img311.webp" alt="Departmental Store"></a>
                                                    </figure>
                                                    <h6>Departmental Store</h6>
                                                 </li>
                                                 <li>
                                                    <figure>
                                                       <a href="hypermarket.php"><img src="assets/images/img312.webp" alt="Hypermarket"></a>
                                                    </figure>
                                                    <h6>Hypermarket</h6>
                                                 </li>
                                              </ul>
                                           </div>
                                       </div>

                                       <div class="item">
                                           <div class="store-box">
                                              <h3>Lifestyle</h3>
                                              <ul>
                                                 <li>
                                                    <figure>
                                                       <a href="cosmetic-store.php"><img src="assets/images/img313.webp" alt="Cosmetic Store"></a>
                                                    </figure>
                                                    <h6>Cosmetic Store</h6>
                                                 </li>
                                                 <li>
                                                    <figure>
                                                       <a href="home-decor-furniture.php"><img src="assets/images/img314.webp" alt="Home Decor"></a>
                                                    </figure>
                                                    <h6>Home Decor & Furniture</h6>
                                                 </li>
                                                 <li>
                                                    <figure>
                                                       <a href="imitation-jewellery.php"><img src="assets/images/img315.webp" alt="Imitation Jewellery"></a>
                                                    </figure>
                                                    <h6>Imitation Jewellery</h6>
                                                 </li>
                                              </ul>
                                           </div>
                                       </div>

                                       <div class="item">
                                           <div class="store-box">
                                              <h3>Supermarket & Groceries</h3>
                                              <ul>
                                                 <li>
                                                    <figure>
                                                       <a href="fruits-vegetable-shop.php"><img src="assets/images/img316.webp" alt="Fruits & Vegetables"></a>
                                                    </figure>
                                                    <h6>Fruits & Vegetable</h6>
                                                 </li>
                                                 <li>
                                                    <figure>
                                                       <a href="grocery-store.php"><img src="assets/images/img317.webp" alt="Grocery Store"></a>
                                                    </figure>
                                                    <h6>Grocery Store</h6>
                                                 </li>
                                                 <li>
                                                    <figure>
                                                       <a href="kirana-store.php"><img src="assets/images/img318.webp" alt="Kirana Store"></a>
                                                    </figure>
                                                    <h6>Kirana Store</h6>
                                                 </li>
                                                 <li>
                                                    <figure>
                                                       <a href="minimart.php"><img src="assets/images/img319.webp" alt="Minimart"></a>
                                                    </figure>
                                                    <h6>Minimart</h6>
                                                 </li>
                                                 <li>
                                                    <figure>
                                                       <a href="supermarket.php"><img src="assets/images/img320.webp" alt="Supermarket"></a>
                                                    </figure>
                                                    <h6>Supermarket</h6>
                                                 </li>
                                              </ul>
                                           </div>
                                       </div>

                                       <div class="item">
                                           <div class="store-box">
                                              <h3>Specialized in Retail</h3>
                                              <ul>
      <!--                                            <li>
                                                    <figure>
                                                       <a href="#"><img src="assets/images/img321.webp" alt="Auto Spare Part Shop"></a>
                                                    </figure>
                                                    <h6>Auto Spare Part Shop</h6>
                                                 </li> -->
                                                 <li>
                                                    <figure>
                                                       <a href="gift-shop.php"><img src="assets/images/img322.webp" alt="Gift Shop"></a>
                                                    </figure>
                                                    <h6>Gift Shop</h6>
                                                 </li>
                                                 <li>
                                                    <figure>
                                                       <a href="hardware-store.php"><img src="assets/images/img323.webp" alt="Hardware Store"></a>
                                                    </figure>
                                                    <h6>Hardware Store</h6>
                                                 </li>
                                                 <li>
                                                    <figure>
                                                       <a href="liquor-store.php"><img src="assets/images/img324.webp" alt="Liquor Store"></a>
                                                    </figure>
                                                    <h6>Liquor Store</h6>
                                                 </li>
                                                 <li>
                                                    <figure>
                                                       <a href="pet-shop.php"><img src="assets/images/img325.webp" alt="Pet Shop"></a>
                                                    </figure>
                                                    <h6>Pet Shop</h6>
                                                 </li>
                                                 <li>
                                                    <figure>
                                                       <a href="shopping-mall.php"><img src="assets/images/img326.webp" alt="Shopping Mall"></a>
                                                    </figure>
                                                    <h6>Shopping Mall</h6>
                                                 </li>
                                                 <li>
                                                    <figure>
                                                       <a href="sports-shop.php"><img src="assets/images/img327.webp" alt="Sports Shop"></a>
                                                    </figure>
                                                    <h6>Sports Shop</h6>
                                                 </li>
                                                 <li>
                                                    <figure>
                                                       <a href="toy-store.php"><img src="assets/images/img328.webp" alt="Toy Store"></a>
                                                    </figure>
                                                    <h6>Toy Store</h6>
                                                 </li>
                                              </ul>
                                           </div>
                                       </div>
                                   </div>
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="solving-business-img">
                                    <figure>
                                       <img src="assets/images/retail-store.webp" alt="Wholesale Solution">
                                    </figure>
                                </div>
                            </div>
                       </div>
                    </div>

                    <!-- Manufacturing Tab -->
                    <div class="tab-pane fade" id="nav-distribution" role="tabpanel" aria-labelledby="nav-distribution-tab">
                      <div class="row align-items-center bg-shape">
                            <div class="col-md-7">
                                <div class="innovative-silder">
                                    <div class="owl-carousel store-silder owl-theme">
                                       <div class="item">
                                           <div class="store-box">
                                              <h3>Manufacturing</h3>
                                              <ul>
                                                 <li>
                                                    <figure>
                                                       <a href="consumer-goods.php"><img src="assets/images/store1.webp" alt="FMCG"></a>
                                                    </figure>
                                                    <h6>FMCG</h6>
                                                 </li>
<!--                                                  <li>
                                                    <figure>
                                                       <a href="#"><img src="assets/images/store2.webp" alt="Food & Beverages"></a>
                                                    </figure>
                                                    <h6>Food & Beverages</h6>
                                                 </li> -->
                                                 <li>
                                                    <figure>
                                                       <a href="footwear-store.php"><img src="assets/images/store3.webp" alt="Footwear"></a>
                                                    </figure>
                                                    <h6>Footwear</h6>
                                                 </li>
                                                 <li>
                                                    <figure>
                                                       <a href="garments.php"><img src="assets/images/store4.webp" alt="Garment & Apparel"></a>
                                                    </figure>
                                                    <h6>Garment & Apparel</h6>
                                                 </li>
                                                 <li>
                                                    <figure>
                                                       <a href="industrial-products.php"><img src="assets/images/store5.webp" alt="Steel"></a>
                                                    </figure>
                                                    <h6>Steel</h6>
                                                 </li>
                                                 <li>
                                                    <figure>
                                                       <a href="textile.php"><img src="assets/images/store6.webp" alt="Textile"></a>
                                                    </figure>
                                                    <h6>Textile</h6>
                                                 </li>
                                              </ul>
                                           </div>
                                       </div>
                                   </div>
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="solving-business-img">
                                    <figure>
                                       <img src="assets/images/Manufacturing-image.webp" alt="Distribution Solution">
                                    </figure>
                                </div>
                            </div>
                       </div>
                    </div>

                  </div>
                </div>
           </div>
       </div>
   </div>
</section>

   <!-- Solving business section end here -->


    <!-- 6. INTEGRATION PARTNERS -->
    <section class="integrations-sec py-5">
        <div class="container py-3">
            <div class="row justify-content-center text-center mb-5">
                <div class="col-lg-8">
                    <h2 class="section-title">Integration <span>Partners</span></h2>
                    <p class="section-desc">We connect smoothly with all leading e-commerce, logistics, and billing platforms to streamline your operations.</p>
                </div>
            </div>
            
            <!-- Desktop Tabs and Grid (Visible on large screens) -->
            <div class="d-none d-lg-block">
                <div class="desktop-integration-wrapper">
                    <div class="row g-4">
                        <div class="col-lg-4">
                            <div class="integration-tabs" id="desktopIntNav">
                                <button class="int-pill-btn active" onclick="switchIntTab('payment')"><i class="fa-solid fa-credit-card me-2"></i> Payment Solutions</button>
                                <button class="int-pill-btn" onclick="switchIntTab('shipping')"><i class="fa-solid fa-truck-fast me-2"></i> Shipping & Logistics</button>
                                <button class="int-pill-btn" onclick="switchIntTab('ecommerce')"><i class="fa-solid fa-cart-shopping me-2"></i> E-commerce Platforms</button>
                                <button class="int-pill-btn" onclick="switchIntTab('business')"><i class="fa-solid fa-briefcase me-2"></i> Business Apps</button>
                                <button class="int-pill-btn" onclick="switchIntTab('communication')"><i class="fa-solid fa-comments me-2"></i> Marketing & Chats</button>
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <div class="integration-content-wrapper" id="desktopIntGrid">
                                <!-- Payment Group -->
                                <div class="int-group active" id="int-payment">
                                    <div class="int-logo-grid">
                                        <div class="int-logo-box"><img src="assets/images/paytm.webp" alt="Paytm"></div>
                                        <div class="int-logo-box"><img src="assets/images/razorpay.webp" alt="Razorpay"></div>
                                        <div class="int-logo-box"><img src="assets/images/phonepe.webp" alt="PhonePe"></div>
                                        <div class="int-logo-box"><img src="assets/images/pinelabs.webp" alt="Pine Labs"></div>
                                        <div class="int-logo-box"><img src="assets/images/tally.webp" alt="Tally"></div>
                                    </div>
                                </div>
                                
                                <!-- Shipping Group -->
                                <div class="int-group" id="int-shipping">
                                    <div class="int-logo-grid">
                                        <div class="int-logo-box"><img src="assets/images/shiprocket.webp" alt="Shiprocket"></div>
                                        <div class="int-logo-box"><img src="assets/images/e-invoice.webp" alt="E-Invoice"></div>
                                        <div class="int-logo-box"><img src="assets/images/eway-bill.webp" alt="E-Way Bill"></div>
                                    </div>
                                </div>
                                
                                <!-- E-commerce Group -->
                                <div class="int-group" id="int-ecommerce">
                                    <div class="int-logo-grid">
                                        <div class="int-logo-box"><img src="assets/images/shopify.webp" alt="Shopify"></div>
                                        <div class="int-logo-box"><img src="assets/images/woocommerce.webp" alt="WooCommerce"></div>
                                    </div>
                                </div>
                                
                                <!-- Business Group -->
                                <div class="int-group" id="int-business">
                                    <div class="int-logo-grid">
                                        <div class="int-logo-box"><img src="assets/images/paytm.webp" alt="Paytm"></div>
                                        <div class="int-logo-box"><img src="assets/images/razorpay.webp" alt="Razorpay"></div>
                                        <div class="int-logo-box"><img src="assets/images/phonepe.webp" alt="PhonePe"></div>
                                        <div class="int-logo-box"><img src="assets/images/pinelabs.webp" alt="Pine Labs"></div>
                                        <div class="int-logo-box"><img src="assets/images/tally.webp" alt="Tally"></div>
                                    </div>
                                </div>
                                
                                <!-- Communication Group -->
                                <div class="int-group" id="int-communication">
                                    <div class="int-logo-grid">
                                        <div class="int-logo-box"><img src="assets/images/interakt.webp" alt="Interakt"></div>
                                        <div class="int-logo-box"><img src="assets/images/msg91.webp" alt="MSG91"></div>
                                        <div class="int-logo-box"><img src="assets/images/twilio.webp" alt="Twilio"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Mobile Scrolling Marquee (Visible on mobile/tablet screens) -->
            <div class="d-lg-none">
                <div class="brand-marquee-sec py-2 border-0 bg-transparent">
                    <div class="marquee-container">
                        <div class="mobile-int-marquee-track">
                            <img src="assets/images/paytm.webp" alt="Paytm">
                            <img src="assets/images/razorpay.webp" alt="Razorpay">
                            <img src="assets/images/phonepe.webp" alt="PhonePe">
                            <img src="assets/images/pinelabs.webp" alt="Pine Labs">
                            <img src="assets/images/tally.webp" alt="Tally">
                            <img src="assets/images/shiprocket.webp" alt="Shiprocket">
                            <img src="assets/images/e-invoice.webp" alt="E-Invoice">
                            <img src="assets/images/eway-bill.webp" alt="E-Way Bill">
                            <img src="assets/images/shopify.webp" alt="Shopify">
                            <img src="assets/images/woocommerce.webp" alt="WooCommerce">
                            <img src="assets/images/interakt.webp" alt="Interakt">
                            <img src="assets/images/msg91.webp" alt="MSG91">
                            <!-- Duplicates -->
                            <img src="assets/images/paytm.webp" alt="Paytm">
                            <img src="assets/images/razorpay.webp" alt="Razorpay">
                            <img src="assets/images/phonepe.webp" alt="PhonePe">
                            <img src="assets/images/pinelabs.webp" alt="Pine Labs">
                            <img src="assets/images/tally.webp" alt="Tally">
                            <img src="assets/images/shiprocket.webp" alt="Shiprocket">
                            <img src="assets/images/e-invoice.webp" alt="E-Invoice">
                            <img src="assets/images/eway-bill.webp" alt="E-Way Bill">
                            <img src="assets/images/shopify.webp" alt="Shopify">
                            <img src="assets/images/woocommerce.webp" alt="WooCommerce">
                            <img src="assets/images/interakt.webp" alt="Interakt">
                            <img src="assets/images/msg91.webp" alt="MSG91">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 7. CLIENT TESTIMONIALS -->
    <section class="testimonials-sec py-5">
        <div class="container py-3">
            <div class="row justify-content-center text-center mb-5">
                <div class="col-lg-8">
                    <h2 class="section-title">Client <span>Success</span></h2>
                    <p class="section-desc">Hear directly from the business owners who scaled their production and retail stores with us.</p>
                </div>
            </div>
            
            <div class="row g-4 d-none d-lg-flex">
                <div class="col-lg-4">
                    <div class="testimonial-card-new">
                        <div class="stars-rating mb-3">★★★★★</div>
                        <p class="testimonial-quote-new">"With Digify Soft ERP, we've streamlined our entire textile production cycle—from order to export. Real-time tracking and automated billing have cut manual work drastically. It's truly transformed how we manage operations."</p>
                        <div class="author-info-new mt-4">
                            <span class="name d-block">Akshat Mittal</span>
                            <span class="role text-muted">PP International</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="testimonial-card-new">
                        <div class="stars-rating mb-3">★★★★★</div>
                        <p class="testimonial-quote-new">"Digify Soft ERP has simplified our handloom trading and export operations. Order management, stock tracking, and billing are all handled seamlessly in one system. We've reduced paperwork and improved accuracy."</p>
                        <div class="author-info-new mt-4">
                            <span class="name d-block">Raman Aneja</span>
                            <span class="role text-muted">Great Eastern Exports</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="testimonial-card-new">
                        <div class="stars-rating mb-3">★★★★★</div>
                        <p class="testimonial-quote-new">"Digify Soft ERP has made managing our snacks vending business effortless. From tracking machine sales to managing stock refills, everything is centralized, accurate, and incredibly helpful."</p>
                        <div class="author-info-new mt-4">
                            <span class="name d-block">Snaxsmart</span>
                            <span class="role text-muted">Vending Solutions</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Mobile view testimonial touch list -->
            <div class="d-lg-none">
                <div class="testimonial-card-new">
                    <div class="stars-rating mb-3">★★★★★</div>
                    <p class="testimonial-quote-new">"With Digify Soft ERP, we've streamlined our entire textile production cycle—from order to export. Real-time tracking and automated billing have cut manual work drastically."</p>
                    <div class="author-info-new mt-4">
                        <span class="name d-block">Akshat Mittal</span>
                        <span class="role text-muted">PP International</span>
                    </div>
                </div>
                <div class="testimonial-card-new mt-3">
                    <div class="stars-rating mb-3">★★★★★</div>
                    <p class="testimonial-quote-new">"Digify Soft ERP has simplified our handloom trading and export operations. We've reduced paperwork, improved accuracy, and sped up deliveries."</p>
                    <div class="author-info-new mt-4">
                        <span class="name d-block">Raman Aneja</span>
                        <span class="role text-muted">Great Eastern Exports</span>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <!-- 9. ACTIVE ON SOCIALS -->
    <section class="socials-sec py-5">
        <div class="container text-center py-2">
            <h2 class="section-title">Active on <span>Socials</span></h2>
            <p class="section-desc">Follow @digifysoft for tech updates, product features, and business growth tips.</p>
            
            <div class="row g-3 mt-4 justify-content-center">
                <div class="col-md-4 col-6">
                    <div class="insta-post-new">
                        <img src="assets/images/social_post1.png" alt="AI POS Mockup">
                        <div class="insta-overlay-new"><i class="fab fa-instagram"></i></div>
                    </div>
                </div>
                <div class="col-md-4 col-6">
                    <div class="insta-post-new">
                        <img src="assets/images/social_post2.png" alt="AI Inventory Mockup">
                        <div class="insta-overlay-new"><i class="fab fa-instagram"></i></div>
                    </div>
                </div>
                <div class="col-md-4 col-6 d-none d-md-block">
                    <div class="insta-post-new">
                        <img src="assets/images/social_post3.png" alt="B2B ERP Dashboard">
                        <div class="insta-overlay-new"><i class="fab fa-instagram"></i></div>
                    </div>
                </div>
            </div>
            
            <div class="mt-5">
                <a href="https://instagram.com/digifysoft" target="_blank" class="btn-insta-premium">
                    <i class="fab fa-instagram"></i> Follow @digifysoft
                </a>
            </div>
        </div>
    </section>

</div>

<!-- Interactive Switching Script for Integration Partners -->
<script>
function switchIntTab(tabName) {
    // 1. Remove active class from all tab buttons
    const buttons = document.querySelectorAll('#desktopIntNav .int-pill-btn');
    buttons.forEach(btn => btn.classList.remove('active'));

    // 2. Add active class to clicked button
    const clickedBtn = Array.from(buttons).find(btn => btn.getAttribute('onclick').includes(tabName));
    if (clickedBtn) {
        clickedBtn.classList.add('active');
    }

    // 3. Hide all logo grids
    const groups = document.querySelectorAll('#desktopIntGrid .int-group');
    groups.forEach(group => group.classList.remove('active'));

    // 4. Show target logo grid
    const targetGroup = document.getElementById('int-' + tabName);
    if (targetGroup) {
        targetGroup.classList.add('active');
    }
}
</script>

<?php include 'footer.php'; ?>




