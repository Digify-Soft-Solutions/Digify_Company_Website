<?php 
    include 'fetch_meta.php';
    $pageTitle = 'AI Powered OCR & Document Intelligence | Digify Soft Solutions';
    $pageDescription = 'Transform paper invoices, bank statements, and factory registers into real-time ERP data with Digify AI OCR.';
    include("top.php");
    include 'header.php'; 
?>

<div class="premium-home-body">

    <!-- HERO SECTION -->
    <section class="premium-hero py-5" style="background: linear-gradient(135deg, #0f172a 0%, #1e293b 100%); position: relative; overflow: hidden;">
        <div class="hero-glow-blob"></div>
        <div class="container text-center text-white py-4 position-relative" style="z-index: 2;">
            <span class="badge rounded-pill px-3 py-2 mb-3" style="background: rgba(59, 130, 246, 0.2); color: #60a5fa; border: 1px solid rgba(59, 130, 246, 0.4); font-size: 13px; font-weight: 700;">
                <i class="fas fa-eye me-1.5 text-warning"></i> DIGIFY AI DOCUMENT INTELLIGENCE
            </span>
            <h1 class="display-4 fw-extrabold text-white mb-3">
                Don't Type the Document.<br>
                <span style="background: linear-gradient(135deg, #60a5fa, #38bdf8); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">Let AI Read &amp; Post It.</span>
            </h1>
            <p class="lead mx-auto mb-4" style="max-width: 800px; color: #94a3b8; font-size: 17px; line-height: 1.6;">
                Transform physical purchase bills, bank statements, and manual factory registers into structured ERP data in seconds. Implemented across all Digify modules.
            </p>
            <div class="d-flex flex-wrap justify-content-center gap-3">
                <a href="contact-us.php" class="btn btn-hero-primary px-4 py-3" data-bs-toggle="modal" data-bs-target="#trialModal">
                    <i class="fas fa-wand-magic-sparkles me-2"></i> Book Live AI OCR Demo
                </a>
                <a href="#ocr-use-cases" class="btn btn-hero-secondary px-4 py-3">
                    <i class="fas fa-layer-group me-2"></i> Explore 3 Core Use Cases
                </a>
            </div>
        </div>
    </section>

    <!-- 3 BIG USE CASES SECTION -->
    <section id="ocr-use-cases" class="py-5" style="background: #f8fafc;">
        <div class="container py-4">
            <div class="text-center mb-5">
                <span class="sub-badge"><i class="fas fa-sparkles me-1 text-warning"></i> 3 Core AI-OCR Automation Modules</span>
                <h2 style="font-size: 34px; font-weight: 800; color: #0f172a;">Just Scan &amp; Do It</h2>
                <p style="color: #64748b; max-width: 700px; margin: 0 auto; font-size: 15px;">Eliminate bottleneck manual typing across your procurement, accounting, and factory floor operations.</p>
            </div>

            <!-- USE CASE 1: PURCHASE BILLS -->
            <div class="card border-0 rounded-4 shadow-sm mb-5 overflow-hidden" style="border: 1px solid #e2e8f0 !important;">
                <div class="card-body p-4 p-lg-5">
                    <div class="row align-items-center g-4">
                        <div class="col-lg-6">
                            <span class="badge px-3 py-1.5 rounded-pill mb-3" style="background: #2563eb !important; color: #ffffff !important; font-weight: 800 !important; font-size: 12px;">
                                USE CASE 01 • PROCUREMENT &amp; ACCOUNTS
                            </span>
                            <h3 class="fw-bold text-dark mb-3" style="font-size: 26px;">1. Purchase Bills &amp; Invoice OCR</h3>
                            <p class="text-secondary" style="font-size: 15px; line-height: 1.6;">
                                Invoices come in every format — printed paper, PDF attachments, WhatsApp images, or scanned emails. Digify AI OCR reads supplier invoices directly into structured ERP purchase entries.
                            </p>
                            <div class="p-3 rounded-3 mb-4" style="background: #f1f5f9; border-left: 4px solid #3b82f6;">
                                <div class="fw-bold text-dark mb-1" style="font-size: 13.5px;"><i class="fas fa-bolt text-warning me-1.5"></i> Traditional vs AI-Powered:</div>
                                <div class="text-muted" style="font-size: 13px;">
                                    <strong>From:</strong> Invoice &rarr; Manual Typing &rarr; Verification &rarr; ERP Entry &rarr; Accounts &rarr; Inventory<br>
                                    <strong>To:</strong> Scan &rarr; AI OCR &rarr; Validate &rarr; Post &rarr; ERP
                                </div>
                            </div>
                            <ul class="list-unstyled text-secondary mb-0" style="font-size: 14px;">
                                <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i> Automatically matches items, quantities, rates, and vendor masters.</li>
                                <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i> Flags duplicate invoices and tax calculation mismatches.</li>
                                <li class="mb-0"><i class="fas fa-check-circle text-success me-2"></i> Dramatically speeds up inventory intake and supplier ledger posting.</li>
                            </ul>
                        </div>
                        <div class="col-lg-6">
                            <div class="p-4 rounded-4" style="background: linear-gradient(135deg, #0f172a, #1e293b); color: #fff;">
                                <h5 class="text-warning fw-bold mb-3"><i class="fas fa-list-ol me-2"></i> 5-Step Automated Workflow</h5>
                                <div class="d-flex align-items-start mb-3">
                                    <span class="badge bg-primary rounded-circle me-3 mt-1" style="width:24px; height:24px; display:inline-flex; align-items:center; justify-content:center;">1</span>
                                    <div><strong>Scan / Upload:</strong> Take photo or upload PDF/JPEG invoice.</div>
                                </div>
                                <div class="d-flex align-items-start mb-3">
                                    <span class="badge bg-primary rounded-circle me-3 mt-1" style="width:24px; height:24px; display:inline-flex; align-items:center; justify-content:center;">2</span>
                                    <div><strong>AI Key Extraction:</strong> Vendor name, GSTIN, Invoice #, Date, Line Items, HSN, Tax amounts extracted.</div>
                                </div>
                                <div class="d-flex align-items-start mb-3">
                                    <span class="badge bg-primary rounded-circle me-3 mt-1" style="width:24px; height:24px; display:inline-flex; align-items:center; justify-content:center;">3</span>
                                    <div><strong>ERP Master Mapping:</strong> Maps supplier names and item codes to your ERP masters.</div>
                                </div>
                                <div class="d-flex align-items-start mb-3">
                                    <span class="badge bg-primary rounded-circle me-3 mt-1" style="width:24px; height:24px; display:inline-flex; align-items:center; justify-content:center;">4</span>
                                    <div><strong>Validation &amp; Exception Checks:</strong> Automated rate/qty validation; flags exceptions for approval.</div>
                                </div>
                                <div class="d-flex align-items-start">
                                    <span class="badge bg-success rounded-circle me-3 mt-1" style="width:24px; height:24px; display:inline-flex; align-items:center; justify-content:center;">5</span>
                                    <div><strong>Purchase Entry Posted:</strong> Auto-creates GRN, inventory, and accounts ledger entries.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- USE CASE 2: BANK STATEMENTS -->
            <div class="card border-0 rounded-4 shadow-sm mb-5 overflow-hidden" style="border: 1px solid #e2e8f0 !important;">
                <div class="card-body p-4 p-lg-5">
                    <div class="row align-items-center g-4">
                        <div class="col-lg-6 order-lg-2">
                            <span class="badge px-3 py-1.5 rounded-pill mb-3" style="background: #16a34a !important; color: #ffffff !important; font-weight: 800 !important; font-size: 12px;">
                                USE CASE 02 • FINANCIAL RECONCILIATION
                            </span>
                            <h3 class="fw-bold text-dark mb-3" style="font-size: 26px;">2. AI OCR + Bank Statement Intelligence</h3>
                            <p class="text-secondary" style="font-size: 15px; line-height: 1.6;">
                                Stop spending hours converting PDF bank statements into accounting entries. Upload bank statements or transaction reports, and let AI read, match, post, and reconcile automatically.
                            </p>
                            <div class="p-3 rounded-3 mb-4" style="background: #f0fdf4; border-left: 4px solid #22c55e;">
                                <div class="fw-bold text-dark mb-1" style="font-size: 13.5px;"><i class="fas fa-shield-check text-success me-1.5"></i> Enterprise Financial Control:</div>
                                <div class="text-muted" style="font-size: 13px;">
                                    AI Suggestion &rarr; Business Rule Validation &rarr; Manager Approval &rarr; Ledger Posting &rarr; Audit Trail
                                </div>
                            </div>
                            <ul class="list-unstyled text-secondary mb-0" style="font-size: 14px;">
                                <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i> Automatically matches customer payments against outstanding invoices.</li>
                                <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i> Identifies supplier payments, UTR numbers, and bank charges.</li>
                                <li class="mb-0"><i class="fas fa-check-circle text-success me-2"></i> Generates instant bank reconciliation statements (BRS).</li>
                            </ul>
                        </div>
                        <div class="col-lg-6 order-lg-1">
                            <div class="p-4 rounded-4" style="background: linear-gradient(135deg, #064e3b, #022c22); color: #fff;">
                                <h5 class="text-warning fw-bold mb-3"><i class="fas fa-university me-2"></i> Banking Automation Steps</h5>
                                <div class="p-3 mb-2 rounded" style="background: rgba(255,255,255,0.08);">
                                    <div class="fw-bold text-info" style="font-size: 13.5px;">Step 1: Upload Bank Statement</div>
                                    <div style="font-size: 12.5px; opacity: 0.9;">PDF, Excel, CSV, or direct Bank API integration.</div>
                                </div>
                                <div class="p-3 mb-2 rounded" style="background: rgba(255,255,255,0.08);">
                                    <div class="fw-bold text-info" style="font-size: 13.5px;">Step 2: AI Transaction Extraction</div>
                                    <div style="font-size: 12.5px; opacity: 0.9;">Extracts Date, Description, Debit, Credit, Amount, UTR, and Bank.</div>
                                </div>
                                <div class="p-3 mb-2 rounded" style="background: rgba(255,255,255,0.08);">
                                    <div class="fw-bold text-info" style="font-size: 13.5px;">Step 3: AI Matching &amp; Classification</div>
                                    <div style="font-size: 12.5px; opacity: 0.9;">Matches against Customers, Suppliers, Invoices, Loans, and Expenses.</div>
                                </div>
                                <div class="p-3 rounded" style="background: rgba(255,255,255,0.08);">
                                    <div class="fw-bold text-success" style="font-size: 13.5px;">Step 4 &amp; 5: Auto Entry &amp; Reconciliation</div>
                                    <div style="font-size: 12.5px; opacity: 0.9;">Prepares accounting entries and highlights unmatched exceptions for human review.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- USE CASE 3: FACTORY REGISTERS -->
            <div class="card border-0 rounded-4 shadow-sm mb-5 overflow-hidden" style="border: 1px solid #e2e8f0 !important;">
                <div class="card-body p-4 p-lg-5">
                    <div class="row align-items-center g-4">
                        <div class="col-lg-6">
                            <span class="badge px-3 py-1.5 rounded-pill mb-3" style="background: #d97706 !important; color: #ffffff !important; font-weight: 800 !important; font-size: 12px;">
                                USE CASE 03 • SHOP-FLOOR DIGITIZATION
                            </span>
                            <h3 class="fw-bold text-dark mb-3" style="font-size: 26px;">3. Digitise the Entire Factory</h3>
                            <p class="text-secondary" style="font-size: 15px; line-height: 1.6;">
                                Turn paper production logbooks, material issue registers, machine shift logs, and QC sheets into real-time ERP dashboards with a simple smartphone photo.
                            </p>
                            <div class="p-3 rounded-3 mb-4" style="background: #fffbe6; border-left: 4px solid #f59e0b;">
                                <div class="fw-bold text-dark mb-1" style="font-size: 13.5px;"><i class="fas fa-industry text-warning me-1.5"></i> Supported Factory Records:</div>
                                <div class="text-muted" style="font-size: 13px;">
                                    Production Registers • Machine Shift Logs • Raw Material Issues • Quality Inspection Sheets • Maintenance &amp; Downtime Logs • Dispatch Sheets
                                </div>
                            </div>
                            <div class="row g-2 text-dark font-size-13 mb-3">
                                <div class="col-6"><i class="fas fa-check text-success me-1"></i> Real-Time WIP Tracking</div>
                                <div class="col-6"><i class="fas fa-check text-success me-1"></i> Rejection Rate Analysis</div>
                                <div class="col-6"><i class="fas fa-check text-success me-1"></i> Machine Output Metrics</div>
                                <div class="col-6"><i class="fas fa-check text-success me-1"></i> Auto Stock Deduction</div>
                            </div>

                            <!-- What Management Can Now Ask Callout -->
                            <div class="p-3 rounded-3" style="background: #f8fafc; border: 1px solid #cbd5e1;">
                                <div class="fw-bold text-dark mb-1" style="font-size: 13px;"><i class="fas fa-brain text-primary me-1.5"></i> What Leadership Can Ask AI:</div>
                                <div class="text-secondary" style="font-size: 12.5px; line-height: 1.5;">
                                    "What was today's total production?" • "Which machines produced the most?" • "Where is rejection increasing?" • "Which jobs are pending in WIP?"
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="p-4 rounded-4" style="background: linear-gradient(135deg, #78350f, #451a03); color: #fff;">
                                <h5 class="text-warning fw-bold mb-3"><i class="fas fa-camera me-2"></i> Paper to Real-Time Dashboard</h5>
                                <div class="d-flex align-items-center mb-3 p-2.5 rounded" style="background: rgba(255,255,255,0.08);">
                                    <i class="fas fa-mobile-alt fs-4 text-warning me-3"></i>
                                    <div><strong>1. Click Photo:</strong> Supervisor snaps a picture of physical paper logbook.</div>
                                </div>
                                <div class="d-flex align-items-center mb-3 p-2.5 rounded" style="background: rgba(255,255,255,0.08);">
                                    <i class="fas fa-robot fs-4 text-info me-3"></i>
                                    <div><strong>2. AI OCR Conversion:</strong> Converts handwriting/tables into structured data.</div>
                                </div>
                                <div class="d-flex align-items-center mb-3 p-2.5 rounded" style="background: rgba(255,255,255,0.08);">
                                    <i class="fas fa-database fs-4 text-primary me-3"></i>
                                    <div><strong>3. Master Validation:</strong> Validates machines, products, shifts, &amp; quantities.</div>
                                </div>
                                <div class="d-flex align-items-center p-2.5 rounded" style="background: rgba(255,255,255,0.08);">
                                    <i class="fas fa-chart-pie fs-4 text-success me-3"></i>
                                    <div><strong>4. Live ERP Update:</strong> Updates production dashboards &amp; inventory instantly.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- COMPARISON SUMMARY TABLE -->
            <div class="card border-0 rounded-4 shadow-sm overflow-hidden mt-5">
                <div class="card-header bg-dark text-white p-4">
                    <h4 class="fw-bold mb-0 text-white"><i class="fas fa-table me-2 text-warning"></i> Three Big AI-OCR Use Cases Summary</h4>
                </div>
                <div class="table-responsive">
                    <table class="table table-hover align-middle mb-0" style="font-size: 14.5px;">
                        <thead class="table-light">
                            <tr>
                                <th class="py-3 px-4">Business Area</th>
                                <th class="py-3 px-4">Traditional Method</th>
                                <th class="py-3 px-4 text-primary">Digify AI-Powered Approach</th>
                                <th class="py-3 px-4 text-success">Enterprise Benefit</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="fw-bold px-4"><i class="fas fa-shopping-cart me-2 text-primary"></i> Purchase</td>
                                <td class="px-4 text-muted">Manually type vendor invoices line-by-line</td>
                                <td class="px-4 fw-semibold text-primary">Scan &rarr; OCR &rarr; Validate &rarr; Post</td>
                                <td class="px-4 fw-bold text-success">90% faster purchase intake &amp; zero typing errors</td>
                            </tr>
                            <tr>
                                <td class="fw-bold px-4"><i class="fas fa-university me-2 text-success"></i> Banking</td>
                                <td class="px-4 text-muted">Manually read PDF statements &amp; create entries</td>
                                <td class="px-4 fw-semibold text-primary">Upload &rarr; AI Extract &rarr; Match &rarr; Reconcile</td>
                                <td class="px-4 fw-bold text-success">Instant BRS reconciliation &amp; receipt matching</td>
                            </tr>
                            <tr>
                                <td class="fw-bold px-4"><i class="fas fa-industry me-2 text-warning"></i> Factory</td>
                                <td class="px-4 text-muted">Paper registers &rarr; Excel &rarr; Manual reports</td>
                                <td class="px-4 fw-semibold text-primary">Photo &rarr; OCR &rarr; ERP &rarr; Dashboard</td>
                                <td class="px-4 fw-bold text-success">Real-time operational visibility &amp; live P&amp;L</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- VISION BANNER -->
            <div class="p-5 rounded-4 text-center mt-5 text-white shadow-lg" style="background: linear-gradient(135deg, #0f172a 0%, #1e293b 100%); border: 1.5px solid #3b82f6;">
                <h3 class="fw-extrabold text-warning mb-3" style="font-size: 28px;">
                    Don't just run your business on software. Make your business intelligent.
                </h3>
                <p class="lead mb-4 text-light opacity-90 mx-auto" style="max-width: 800px; font-size: 16px;">
                    Digify digitizes your business. AutomateX makes it intelligent.<br>
                    <strong>Scan. Upload. Digitise. Understand. Automate. Act.</strong>
                </p>
                <a href="contact-us.php" class="btn btn-hero-primary px-5 py-3 fs-6" data-bs-toggle="modal" data-bs-target="#trialModal">
                    <i class="fas fa-rocket me-2"></i> Schedule AI OCR Implementation Assessment
                </a>
            </div>

        </div>
    </section>

</div>

<?php include 'footer.php'; ?>
