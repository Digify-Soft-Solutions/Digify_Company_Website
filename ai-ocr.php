<?php 
    include 'fetch_meta.php';
    $pageTitle = 'AI Powered OCR & Document Intelligence | Digify Soft Solutions';
    $pageDescription = 'Transform paper invoices, bank statements, and factory registers into real-time ERP data with Digify AI OCR.';
    include("top.php");
    include 'header.php'; 
?>

<div class="premium-home-body">

    <!-- HERO SECTION -->
    <section class="premium-hero py-5" style="background: linear-gradient(135deg, #0f172a 0%, #1e293b 100%) !important; position: relative; overflow: hidden; border-bottom: 2px solid #e06930;">
        <div class="hero-glow-blob"></div>
        <div class="container text-center text-white py-4 position-relative" style="z-index: 2;">
            <span class="badge rounded-pill px-3.5 py-2 mb-3 shadow-sm" style="background: rgba(59, 130, 246, 0.25) !important; color: #60a5fa !important; border: 1px solid rgba(59, 130, 246, 0.5) !important; font-size: 13px !important; font-weight: 800 !important;">
                <i class="fas fa-eye me-1.5 text-warning"></i> DIGIFY AI DOCUMENT INTELLIGENCE
            </span>
            <h1 class="display-4 fw-extrabold text-white mb-3" style="color: #ffffff !important; font-weight: 800 !important;">
                Don't Type the Document.<br>
                <span style="background: linear-gradient(135deg, #60a5fa, #38bdf8); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">Let AI Read &amp; Post It.</span>
            </h1>
            <p class="lead mx-auto mb-4" style="max-width: 820px; color: #e2e8f0 !important; font-size: 17px !important; font-weight: 500 !important; line-height: 1.6 !important;">
                Transform physical purchase bills, bank statements, and manual factory registers into structured ERP data in seconds. Implemented across all Digify modules.
            </p>
            <div class="d-flex flex-wrap justify-content-center gap-3">
                <a href="contact-us.php" class="btn px-4 py-3 fw-bold" style="background: linear-gradient(135deg, #e06930, #fbc145) !important; color: #ffffff !important; border: none !important; border-radius: 10px !important; font-size: 15px !important; font-weight: 800 !important;" data-bs-toggle="modal" data-bs-target="#trialModal">
                    <i class="fas fa-wand-magic-sparkles me-2"></i> Book Live AI OCR Demo
                </a>
                <a href="#ocr-use-cases" class="btn px-4 py-3 fw-bold" style="background: rgba(255,255,255,0.12) !important; color: #ffffff !important; border: 1px solid rgba(255,255,255,0.3) !important; border-radius: 10px !important; font-size: 15px !important; font-weight: 700 !important;">
                    <i class="fas fa-layer-group me-2"></i> Explore 3 Core Use Cases
                </a>
            </div>
        </div>
    </section>

    <!-- 3 BIG USE CASES SECTION -->
    <section id="ocr-use-cases" class="py-5" style="background: #f8fafc !important;">
        <div class="container py-4">
            <div class="text-center mb-5">
                <span class="sub-badge" style="background: rgba(224, 105, 48, 0.12) !important; color: #c2410c !important; border: 1px solid rgba(224, 105, 48, 0.3) !important; font-weight: 800 !important; font-size: 13px !important; padding: 6px 16px !important; border-radius: 20px !important;">
                    <i class="fas fa-sparkles me-1 text-warning"></i> 3 Core AI-OCR Automation Modules
                </span>
                <h2 style="font-size: 34px !important; font-weight: 800 !important; color: #0f172a !important;" class="mt-3 mb-2">Just Scan &amp; Do It</h2>
                <p style="color: #334155 !important; font-weight: 600 !important; max-width: 750px; margin: 0 auto; font-size: 16px !important; line-height: 1.6 !important;">
                    Eliminate bottleneck manual typing across your procurement, accounting, and factory floor operations.
                </p>
            </div>

            <!-- USE CASE 1: PURCHASE BILLS -->
            <div class="card border-0 rounded-4 shadow-sm mb-5 overflow-hidden" style="border: 1.5px solid #cbd5e1 !important; background: #ffffff !important;">
                <div class="card-body p-4 p-lg-5">
                    <div class="row align-items-center g-4">
                        <div class="col-lg-6">
                            <span class="badge px-3.5 py-2 rounded-pill mb-3" style="background: #1d4ed8 !important; color: #ffffff !important; font-weight: 800 !important; font-size: 12px !important;">
                                USE CASE 01 • PROCUREMENT &amp; ACCOUNTS
                            </span>
                            <h3 style="font-size: 26px !important; font-weight: 800 !important; color: #0f172a !important;" class="mb-3">1. Purchase Bills &amp; Invoice OCR</h3>
                            <p style="color: #1e293b !important; font-size: 15px !important; font-weight: 500 !important; line-height: 1.6 !important;" class="mb-4">
                                Invoices come in every format — printed paper, PDF attachments, WhatsApp images, or scanned emails. Digify AI OCR reads supplier invoices directly into structured ERP purchase entries.
                            </p>
                            <div class="p-3.5 rounded-3 mb-4" style="background: #f1f5f9 !important; border-left: 4px solid #2563eb !important;">
                                <div style="color: #0f172a !important; font-weight: 800 !important; font-size: 14px !important;" class="mb-1">
                                    <i class="fas fa-bolt text-warning me-1.5"></i> Traditional vs AI-Powered:
                                </div>
                                <div style="color: #1e293b !important; font-weight: 600 !important; font-size: 13.5px !important; line-height: 1.6 !important;">
                                    <strong>From:</strong> Invoice &rarr; Manual Typing &rarr; Verification &rarr; ERP Entry &rarr; Accounts &rarr; Inventory<br>
                                    <strong style="color: #1d4ed8 !important;">To:</strong> Scan &rarr; AI OCR &rarr; Validate &rarr; Post &rarr; ERP
                                </div>
                            </div>
                            <ul class="list-unstyled mb-0" style="font-size: 14px !important;">
                                <li class="mb-2.5" style="color: #0f172a !important; font-weight: 600 !important;"><i class="fas fa-check-circle text-success me-2 fs-6"></i> Automatically matches items, quantities, rates, and vendor masters.</li>
                                <li class="mb-2.5" style="color: #0f172a !important; font-weight: 600 !important;"><i class="fas fa-check-circle text-success me-2 fs-6"></i> Flags duplicate invoices and tax calculation mismatches.</li>
                                <li class="mb-0" style="color: #0f172a !important; font-weight: 600 !important;"><i class="fas fa-check-circle text-success me-2 fs-6"></i> Dramatically speeds up inventory intake and supplier ledger posting.</li>
                            </ul>
                        </div>
                        <div class="col-lg-6">
                            <div class="p-4 rounded-4 shadow-sm" style="background: linear-gradient(135deg, #0f172a, #1e293b) !important; color: #ffffff !important; border: 1px solid #3b82f6 !important;">
                                <h5 style="color: #fbc145 !important; font-weight: 800 !important; font-size: 18px !important;" class="mb-3">
                                    <i class="fas fa-list-ol me-2 text-warning"></i> 5-Step Automated Workflow
                                </h5>
                                <div class="d-flex align-items-start mb-3 p-2.5 rounded-3" style="background: rgba(255,255,255,0.06) !important;">
                                    <span class="badge rounded-circle me-3" style="background: #2563eb !important; color: #ffffff !important; width:26px; height:26px; display:inline-flex; align-items:center; justify-content:center; font-weight: 800 !important; flex-shrink: 0;">1</span>
                                    <div style="color: #ffffff !important; font-size: 13.5px !important;"><strong style="color: #60a5fa !important;">Scan / Upload:</strong> Take photo or upload PDF/JPEG invoice.</div>
                                </div>
                                <div class="d-flex align-items-start mb-3 p-2.5 rounded-3" style="background: rgba(255,255,255,0.06) !important;">
                                    <span class="badge rounded-circle me-3" style="background: #2563eb !important; color: #ffffff !important; width:26px; height:26px; display:inline-flex; align-items:center; justify-content:center; font-weight: 800 !important; flex-shrink: 0;">2</span>
                                    <div style="color: #ffffff !important; font-size: 13.5px !important;"><strong style="color: #60a5fa !important;">AI Key Extraction:</strong> Vendor name, GSTIN, Invoice #, Date, Line Items, HSN, Tax amounts extracted.</div>
                                </div>
                                <div class="d-flex align-items-start mb-3 p-2.5 rounded-3" style="background: rgba(255,255,255,0.06) !important;">
                                    <span class="badge rounded-circle me-3" style="background: #2563eb !important; color: #ffffff !important; width:26px; height:26px; display:inline-flex; align-items:center; justify-content:center; font-weight: 800 !important; flex-shrink: 0;">3</span>
                                    <div style="color: #ffffff !important; font-size: 13.5px !important;"><strong style="color: #60a5fa !important;">ERP Master Mapping:</strong> Maps supplier names and item codes to your ERP masters.</div>
                                </div>
                                <div class="d-flex align-items-start mb-3 p-2.5 rounded-3" style="background: rgba(255,255,255,0.06) !important;">
                                    <span class="badge rounded-circle me-3" style="background: #2563eb !important; color: #ffffff !important; width:26px; height:26px; display:inline-flex; align-items:center; justify-content:center; font-weight: 800 !important; flex-shrink: 0;">4</span>
                                    <div style="color: #ffffff !important; font-size: 13.5px !important;"><strong style="color: #60a5fa !important;">Validation &amp; Exception Checks:</strong> Automated rate/qty validation; flags exceptions for approval.</div>
                                </div>
                                <div class="d-flex align-items-start p-2.5 rounded-3" style="background: rgba(34, 197, 94, 0.15) !important;">
                                    <span class="badge rounded-circle me-3" style="background: #16a34a !important; color: #ffffff !important; width:26px; height:26px; display:inline-flex; align-items:center; justify-content:center; font-weight: 800 !important; flex-shrink: 0;">5</span>
                                    <div style="color: #ffffff !important; font-size: 13.5px !important;"><strong style="color: #4ade80 !important;">Purchase Entry Posted:</strong> Auto-creates GRN, inventory, and accounts ledger entries.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- USE CASE 2: BANK STATEMENTS -->
            <div class="card border-0 rounded-4 shadow-sm mb-5 overflow-hidden" style="border: 1.5px solid #cbd5e1 !important; background: #ffffff !important;">
                <div class="card-body p-4 p-lg-5">
                    <div class="row align-items-center g-4">
                        <div class="col-lg-6 order-lg-2">
                            <span class="badge px-3.5 py-2 rounded-pill mb-3" style="background: #16a34a !important; color: #ffffff !important; font-weight: 800 !important; font-size: 12px !important;">
                                USE CASE 02 • FINANCIAL RECONCILIATION
                            </span>
                            <h3 style="font-size: 26px !important; font-weight: 800 !important; color: #0f172a !important;" class="mb-3">2. AI OCR + Bank Statement Intelligence</h3>
                            <p style="color: #1e293b !important; font-size: 15px !important; font-weight: 500 !important; line-height: 1.6 !important;" class="mb-4">
                                Stop spending hours converting PDF bank statements into accounting entries. Upload bank statements or transaction reports, and let AI read, match, post, and reconcile automatically.
                            </p>
                            <div class="p-3.5 rounded-3 mb-4" style="background: #f0fdf4 !important; border-left: 4px solid #16a34a !important;">
                                <div style="color: #0f172a !important; font-weight: 800 !important; font-size: 14px !important;" class="mb-1">
                                    <i class="fas fa-shield-check text-success me-1.5"></i> Enterprise Financial Control:
                                </div>
                                <div style="color: #166534 !important; font-weight: 700 !important; font-size: 13.5px !important; line-height: 1.6 !important;">
                                    AI Suggestion &rarr; Business Rule Validation &rarr; Manager Approval &rarr; Ledger Posting &rarr; Audit Trail
                                </div>
                            </div>
                            <ul class="list-unstyled mb-0" style="font-size: 14px !important;">
                                <li class="mb-2.5" style="color: #0f172a !important; font-weight: 600 !important;"><i class="fas fa-check-circle text-success me-2 fs-6"></i> Automatically matches customer payments against outstanding invoices.</li>
                                <li class="mb-2.5" style="color: #0f172a !important; font-weight: 600 !important;"><i class="fas fa-check-circle text-success me-2 fs-6"></i> Identifies supplier payments, UTR numbers, and bank charges.</li>
                                <li class="mb-0" style="color: #0f172a !important; font-weight: 600 !important;"><i class="fas fa-check-circle text-success me-2 fs-6"></i> Generates instant bank reconciliation statements (BRS).</li>
                            </ul>
                        </div>
                        <div class="col-lg-6 order-lg-1">
                            <div class="p-4 rounded-4 shadow-sm" style="background: linear-gradient(135deg, #064e3b, #022c22) !important; color: #ffffff !important; border: 1px solid #10b981 !important;">
                                <h5 style="color: #fbc145 !important; font-weight: 800 !important; font-size: 18px !important;" class="mb-3">
                                    <i class="fas fa-university me-2 text-warning"></i> Banking Automation Steps
                                </h5>
                                <div class="p-3 mb-2.5 rounded-3" style="background: rgba(255,255,255,0.08) !important;">
                                    <div style="color: #34d399 !important; font-weight: 800 !important; font-size: 14px !important;">Step 1: Upload Bank Statement</div>
                                    <div style="color: #ffffff !important; font-size: 13px !important; font-weight: 500 !important;">PDF, Excel, CSV, or direct Bank API integration.</div>
                                </div>
                                <div class="p-3 mb-2.5 rounded-3" style="background: rgba(255,255,255,0.08) !important;">
                                    <div style="color: #34d399 !important; font-weight: 800 !important; font-size: 14px !important;">Step 2: AI Transaction Extraction</div>
                                    <div style="color: #ffffff !important; font-size: 13px !important; font-weight: 500 !important;">Extracts Date, Description, Debit, Credit, Amount, UTR, and Bank.</div>
                                </div>
                                <div class="p-3 mb-2.5 rounded-3" style="background: rgba(255,255,255,0.08) !important;">
                                    <div style="color: #34d399 !important; font-weight: 800 !important; font-size: 14px !important;">Step 3: AI Matching &amp; Classification</div>
                                    <div style="color: #ffffff !important; font-size: 13px !important; font-weight: 500 !important;">Matches against Customers, Suppliers, Invoices, Loans, and Expenses.</div>
                                </div>
                                <div class="p-3 rounded-3" style="background: rgba(34, 197, 94, 0.2) !important;">
                                    <div style="color: #4ade80 !important; font-weight: 800 !important; font-size: 14px !important;">Step 4 &amp; 5: Auto Entry &amp; Reconciliation</div>
                                    <div style="color: #ffffff !important; font-size: 13px !important; font-weight: 500 !important;">Prepares accounting entries and highlights unmatched exceptions for human review.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- USE CASE 3: FACTORY REGISTERS -->
            <div class="card border-0 rounded-4 shadow-sm mb-5 overflow-hidden" style="border: 1.5px solid #cbd5e1 !important; background: #ffffff !important;">
                <div class="card-body p-4 p-lg-5">
                    <div class="row align-items-center g-4">
                        <div class="col-lg-6">
                            <span class="badge px-3.5 py-2 rounded-pill mb-3" style="background: #d97706 !important; color: #ffffff !important; font-weight: 800 !important; font-size: 12px !important;">
                                USE CASE 03 • SHOP-FLOOR DIGITIZATION
                            </span>
                            <h3 style="font-size: 26px !important; font-weight: 800 !important; color: #0f172a !important;" class="mb-3">3. Digitise the Entire Factory</h3>
                            <p style="color: #1e293b !important; font-size: 15px !important; font-weight: 500 !important; line-height: 1.6 !important;" class="mb-4">
                                Turn paper production logbooks, material issue registers, machine shift logs, and QC sheets into real-time ERP dashboards with a simple smartphone photo.
                            </p>
                            <div class="p-3.5 rounded-3 mb-4" style="background: #fffbe6 !important; border-left: 4px solid #d97706 !important;">
                                <div style="color: #78350f !important; font-weight: 800 !important; font-size: 14px !important;" class="mb-1">
                                    <i class="fas fa-industry text-warning me-1.5"></i> Supported Factory Records:
                                </div>
                                <div style="color: #92400e !important; font-weight: 700 !important; font-size: 13.5px !important; line-height: 1.6 !important;">
                                    Production Registers • Machine Shift Logs • Raw Material Issues • Quality Inspection Sheets • Maintenance &amp; Downtime Logs • Dispatch Sheets
                                </div>
                            </div>
                            <div class="row g-3 mb-4">
                                <div class="col-6" style="color: #0f172a !important; font-weight: 700 !important; font-size: 14px !important;"><i class="fas fa-check-circle text-success me-1.5"></i> Real-Time WIP Tracking</div>
                                <div class="col-6" style="color: #0f172a !important; font-weight: 700 !important; font-size: 14px !important;"><i class="fas fa-check-circle text-success me-1.5"></i> Rejection Rate Analysis</div>
                                <div class="col-6" style="color: #0f172a !important; font-weight: 700 !important; font-size: 14px !important;"><i class="fas fa-check-circle text-success me-1.5"></i> Machine Output Metrics</div>
                                <div class="col-6" style="color: #0f172a !important; font-weight: 700 !important; font-size: 14px !important;"><i class="fas fa-check-circle text-success me-1.5"></i> Auto Stock Deduction</div>
                            </div>

                            <!-- What Management Can Now Ask Callout -->
                            <div class="p-3.5 rounded-3" style="background: #eff6ff !important; border: 1.5px solid #bfdbfe !important;">
                                <div style="color: #1e40af !important; font-weight: 800 !important; font-size: 14px !important;" class="mb-1">
                                    <i class="fas fa-brain text-primary me-1.5"></i> What Leadership Can Ask AI:
                                </div>
                                <div style="color: #1e293b !important; font-weight: 700 !important; font-size: 13.5px !important; line-height: 1.6 !important;">
                                    "What was today's total production?" • "Which machines produced the most?" • "Where is rejection increasing?" • "Which jobs are pending in WIP?"
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="p-4 rounded-4 shadow-sm" style="background: linear-gradient(135deg, #78350f, #451a03) !important; color: #ffffff !important; border: 1px solid #f59e0b !important;">
                                <h5 style="color: #fbc145 !important; font-weight: 800 !important; font-size: 18px !important;" class="mb-3">
                                    <i class="fas fa-camera me-2 text-warning"></i> Paper to Real-Time Dashboard
                                </h5>
                                <div class="d-flex align-items-center mb-3 p-3 rounded-3" style="background: rgba(255,255,255,0.1) !important;">
                                    <i class="fas fa-mobile-alt fs-3 text-warning me-3"></i>
                                    <div style="color: #ffffff !important; font-size: 13.5px !important;"><strong style="color: #fde047 !important;">1. Click Photo:</strong> Supervisor snaps a picture of physical paper logbook.</div>
                                </div>
                                <div class="d-flex align-items-center mb-3 p-3 rounded-3" style="background: rgba(255,255,255,0.1) !important;">
                                    <i class="fas fa-robot fs-3 text-info me-3"></i>
                                    <div style="color: #ffffff !important; font-size: 13.5px !important;"><strong style="color: #fde047 !important;">2. AI OCR Conversion:</strong> Converts handwriting/tables into structured data.</div>
                                </div>
                                <div class="d-flex align-items-center mb-3 p-3 rounded-3" style="background: rgba(255,255,255,0.1) !important;">
                                    <i class="fas fa-database fs-3 text-primary me-3"></i>
                                    <div style="color: #ffffff !important; font-size: 13.5px !important;"><strong style="color: #fde047 !important;">3. Master Validation:</strong> Validates machines, products, shifts, &amp; quantities.</div>
                                </div>
                                <div class="d-flex align-items-center p-3 rounded-3" style="background: rgba(34, 197, 94, 0.2) !important;">
                                    <i class="fas fa-chart-pie fs-3 text-success me-3"></i>
                                    <div style="color: #ffffff !important; font-size: 13.5px !important;"><strong style="color: #4ade80 !important;">4. Live ERP Update:</strong> Updates production dashboards &amp; inventory instantly.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- COMPARISON SUMMARY TABLE -->
            <div class="card border-0 rounded-4 shadow-sm overflow-hidden mt-5" style="border: 1.5px solid #cbd5e1 !important;">
                <div class="card-header p-4" style="background: #0f172a !important; color: #ffffff !important;">
                    <h4 class="fw-bold mb-0" style="color: #ffffff !important; font-weight: 800 !important; font-size: 20px !important;">
                        <i class="fas fa-table me-2 text-warning"></i> Three Big AI-OCR Use Cases Summary
                    </h4>
                </div>
                <div class="table-responsive">
                    <table class="table table-hover align-middle mb-0" style="font-size: 14.5px !important;">
                        <thead style="background: #f1f5f9 !important;">
                            <tr>
                                <th class="py-3.5 px-4" style="color: #0f172a !important; font-weight: 800 !important;">Business Area</th>
                                <th class="py-3.5 px-4" style="color: #0f172a !important; font-weight: 800 !important;">Traditional Method</th>
                                <th class="py-3.5 px-4" style="color: #1d4ed8 !important; font-weight: 800 !important;">Digify AI-Powered Approach</th>
                                <th class="py-3.5 px-4" style="color: #15803d !important; font-weight: 800 !important;">Enterprise Benefit</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr style="background: #ffffff !important;">
                                <td class="px-4" style="color: #0f172a !important; font-weight: 800 !important;"><i class="fas fa-shopping-cart me-2 text-primary"></i> Purchase</td>
                                <td class="px-4" style="color: #334155 !important; font-weight: 600 !important;">Manually type vendor invoices line-by-line</td>
                                <td class="px-4" style="color: #1d4ed8 !important; font-weight: 800 !important;">Scan &rarr; OCR &rarr; Validate &rarr; Post</td>
                                <td class="px-4" style="color: #15803d !important; font-weight: 800 !important;">90% faster purchase intake &amp; zero typing errors</td>
                            </tr>
                            <tr style="background: #f8fafc !important;">
                                <td class="px-4" style="color: #0f172a !important; font-weight: 800 !important;"><i class="fas fa-university me-2 text-success"></i> Banking</td>
                                <td class="px-4" style="color: #334155 !important; font-weight: 600 !important;">Manually read PDF statements &amp; create entries</td>
                                <td class="px-4" style="color: #1d4ed8 !important; font-weight: 800 !important;">Upload &rarr; AI Extract &rarr; Match &rarr; Reconcile</td>
                                <td class="px-4" style="color: #15803d !important; font-weight: 800 !important;">Instant BRS reconciliation &amp; receipt matching</td>
                            </tr>
                            <tr style="background: #ffffff !important;">
                                <td class="px-4" style="color: #0f172a !important; font-weight: 800 !important;"><i class="fas fa-industry me-2 text-warning"></i> Factory</td>
                                <td class="px-4" style="color: #334155 !important; font-weight: 600 !important;">Paper registers &rarr; Excel &rarr; Manual reports</td>
                                <td class="px-4" style="color: #1d4ed8 !important; font-weight: 800 !important;">Photo &rarr; OCR &rarr; ERP &rarr; Dashboard</td>
                                <td class="px-4" style="color: #15803d !important; font-weight: 800 !important;">Real-time operational visibility &amp; live P&amp;L</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- VISION BANNER -->
            <div class="p-5 rounded-4 text-center mt-5 shadow-lg" style="background: linear-gradient(135deg, #0f172a 0%, #1e293b 100%) !important; color: #ffffff !important; border: 2px solid #3b82f6 !important;">
                <h3 class="mb-3" style="color: #fbc145 !important; font-weight: 800 !important; font-size: 28px !important;">
                    Don't just run your business on software. Make your business intelligent.
                </h3>
                <p class="lead mb-4 mx-auto" style="max-width: 820px; color: #ffffff !important; font-size: 16px !important; font-weight: 600 !important; line-height: 1.6 !important;">
                    Digify digitizes your business. AutomateX makes it intelligent.<br>
                    <strong style="color: #38bdf8 !important;">Scan. Upload. Digitise. Understand. Automate. Act.</strong>
                </p>
                <a href="contact-us.php" class="btn px-5 py-3 fs-6 fw-bold" style="background: linear-gradient(135deg, #e06930, #fbc145) !important; color: #ffffff !important; font-weight: 800 !important; font-size: 16px !important; border: none !important; border-radius: 12px !important;" data-bs-toggle="modal" data-bs-target="#trialModal">
                    <i class="fas fa-rocket me-2"></i> Schedule AI OCR Implementation Assessment
                </a>
            </div>

        </div>
    </section>

</div>

<?php include 'footer.php'; ?>
