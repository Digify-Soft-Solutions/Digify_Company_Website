<?php 
include_once(__DIR__ . '/../../db.php');
include_once(__DIR__ . '/../../fetch_meta.php');

$pageTitle = "Supermarket ERP Software Kenya | POS, Inventory & Retail Management";
$pageDescription = "Digify Soft Solutions provides centralized supermarket ERP software for Kenya with POS, 14 product categories, smart procurement, replenishment, multi-branch inventory, cashier shifts, customer loyalty and retail analytics.";
$pageKeywords = "Supermarket ERP Kenya, Supermarket software Kenya, Supermarket POS software Kenya, Supermarket inventory software Kenya, Retail ERP Kenya, Retail POS Kenya, Retail management software Kenya, Grocery store software Kenya, Grocery POS Kenya, Grocery inventory software Kenya, Supermarket inventory management Kenya, Multi store POS Kenya, Multi branch ERP Kenya, Retail accounting software Kenya, Wholesale retail ERP Kenya, FMCG ERP Kenya, FMCG distribution software Kenya";
$pageCanonical = "https://www.digifysoft.in/supermarket-erp-software-kenya";

include(__DIR__ . '/../../top.php');
include(__DIR__ . '/../../header.php');
?>

<style>
/* Kenya Supermarket Suite Styling */
.sm-page-wrapper {
    font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
    color: #1e293b;
    overflow-x: hidden;
}

/* Supermarket Hero */
.sm-hero {
    background: linear-gradient(135deg, #052e16 0%, #064e3b 50%, #022c22 100%);
    color: #ffffff;
    padding: 70px 0 85px;
    position: relative;
    overflow: hidden;
    border-bottom: 4px solid #22c55e;
}
.sm-hero::before {
    content: '';
    position: absolute;
    top: -20%;
    right: -10%;
    width: 650px;
    height: 650px;
    background: radial-gradient(circle, rgba(34, 197, 94, 0.25) 0%, rgba(251, 191, 36, 0.1) 60%, rgba(0, 0, 0, 0) 80%);
    border-radius: 50%;
    pointer-events: none;
}
.text-gradient-sm {
    background: linear-gradient(135deg, #4ade80 0%, #fde047 100%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    display: inline-block;
}
.sm-hero-badge {
    background: rgba(34, 197, 94, 0.18);
    border: 1px solid rgba(34, 197, 94, 0.5);
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
.sm-hero h1 {
    font-size: 42px;
    font-weight: 900;
    line-height: 1.25;
    margin-bottom: 18px;
    letter-spacing: -0.5px;
}
.sm-hero-sub {
    font-size: 18px;
    font-weight: 600;
    color: #fef08a;
    line-height: 1.5;
    margin-bottom: 14px;
}
.sm-hero-desc {
    font-size: 16px;
    line-height: 1.7;
    color: rgba(255, 255, 255, 0.88);
    max-width: 700px;
    margin-bottom: 28px;
}

/* Language Toggle */
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
    padding: 6px 16px;
    border-radius: 20px;
    cursor: pointer;
    transition: all 0.25s ease;
}
.lang-pill.active {
    background: linear-gradient(135deg, #16a34a 0%, #22c55e 100%);
    color: #ffffff;
    box-shadow: 0 4px 12px rgba(22, 163, 74, 0.4);
}

/* Lead Card */
.hero-lead-card {
    background: #ffffff;
    border-radius: 20px;
    padding: 32px 28px;
    box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.35);
    color: #0f172a;
    border: 1px solid #e2e8f0;
}
.hero-lead-card h3 {
    font-size: 20px;
    font-weight: 800;
    color: #0f172a;
    margin-bottom: 6px;
}
.hero-lead-card p {
    font-size: 13px;
    color: #64748b;
    margin-bottom: 20px;
}
.hero-lead-card .form-control, .hero-lead-card .form-select {
    font-size: 14px;
    padding: 10px 14px;
    border-radius: 10px;
    border: 1px solid #cbd5e1;
    margin-bottom: 12px;
}
.btn-sm-primary {
    background: linear-gradient(135deg, #16a34a 0%, #15803d 100%);
    color: #ffffff;
    font-weight: 700;
    font-size: 15px;
    padding: 12px 24px;
    border-radius: 12px;
    border: none;
    transition: all 0.3s ease;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    gap: 8px;
    box-shadow: 0 10px 20px -5px rgba(22, 163, 74, 0.4);
    text-decoration: none;
}
.btn-sm-primary:hover {
    background: linear-gradient(135deg, #15803d 0%, #166534 100%);
    color: #ffffff;
    transform: translateY(-2px);
}
.btn-sm-outline {
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
.btn-sm-outline:hover {
    background: rgba(255, 255, 255, 0.18);
    color: #ffffff;
    transform: translateY(-2px);
}

/* Section styling */
.sm-section {
    padding: 75px 0;
}
.bg-light-sm {
    background-color: #f8fafc;
}
.section-badge-sm {
    display: inline-block;
    background: #ecfdf5;
    color: #15803d;
    font-size: 12px;
    font-weight: 800;
    text-transform: uppercase;
    letter-spacing: 0.8px;
    padding: 6px 14px;
    border-radius: 20px;
    margin-bottom: 12px;
    border: 1px solid #bbf7d0;
}
.section-title-sm {
    font-size: 34px;
    font-weight: 900;
    color: #0f172a;
    line-height: 1.3;
    margin-bottom: 16px;
    letter-spacing: -0.5px;
}
.section-sub-sm {
    font-size: 16px;
    color: #64748b;
    max-width: 780px;
    margin: 0 auto 40px;
    line-height: 1.7;
}

/* Feature Cards */
.sm-card {
    background: #ffffff;
    border: 1px solid #e2e8f0;
    border-radius: 16px;
    padding: 26px;
    transition: all 0.3s ease;
    height: 100%;
    display: flex;
    flex-direction: column;
}
.sm-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 20px 30px -10px rgba(0, 0, 0, 0.08);
    border-color: #86efac;
}
.sm-card-icon {
    width: 52px;
    height: 52px;
    border-radius: 14px;
    background: linear-gradient(135deg, #ecfdf5 0%, #d1fae5 100%);
    color: #15803d;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 22px;
    margin-bottom: 18px;
}
.sm-card h4 {
    font-size: 18px;
    font-weight: 800;
    color: #0f172a;
    margin-bottom: 10px;
}
.sm-card p {
    font-size: 14px;
    color: #64748b;
    line-height: 1.6;
    margin-bottom: 14px;
    flex-grow: 1;
}

.sm-checklist {
    list-style: none;
    padding: 0;
    margin: 0 0 16px 0;
}
.sm-checklist li {
    font-size: 13.5px;
    color: #334155;
    margin-bottom: 7px;
    display: flex;
    align-items: flex-start;
    gap: 8px;
}
.sm-checklist li i {
    color: #16a34a;
    margin-top: 3px;
    font-size: 12px;
}

/* Category Grid */
.category-pill {
    background: #ffffff;
    border: 1px solid #cbd5e1;
    color: #334155;
    font-size: 13.5px;
    font-weight: 600;
    padding: 10px 16px;
    border-radius: 12px;
    display: inline-flex;
    align-items: center;
    gap: 8px;
    margin: 5px;
    box-shadow: 0 2px 4px rgba(0,0,0,0.02);
}
.category-pill i {
    color: #16a34a;
    font-size: 15px;
}

/* Keyword Pills */
.keyword-tag {
    display: inline-block;
    background: #f1f5f9;
    border: 1px solid #cbd5e1;
    color: #475569;
    font-size: 12px;
    font-weight: 600;
    padding: 5px 12px;
    border-radius: 20px;
    margin: 3px;
}

@media (max-width: 991px) {
    .sm-hero h1 { font-size: 32px; }
    .section-title-sm { font-size: 26px; }
}
</style>

<div class="sm-page-wrapper">

    <!-- HERO SECTION (Point 5) -->
    <section class="sm-hero" id="hero">
        <div class="container position-relative" style="z-index: 2;">
            <div class="row align-items-center g-4">
                <div class="col-lg-7">
                    <!-- Language Switcher -->
                    <div class="lang-toggle-bar">
                        <button class="lang-pill active" id="btnSmLangEn" onclick="switchSmLang('en')">🇬🇧 English</button>
                        <button class="lang-pill" id="btnSmLangSw" onclick="switchSmLang('sw')">🇰🇪 Kiswahili</button>
                    </div>

                    <div class="sm-hero-badge">
                        <span>🛒</span>
                        <span class="sm-trans" data-en="Dedicated Kenya Supermarket & Retail Edition" data-sw="Toleo Maalum la Maduka Makubwa na Rejareja Kenya">Dedicated Kenya Supermarket & Retail Edition</span>
                    </div>

                    <h1 class="sm-trans" 
                        data-en="Supermarket ERP Software for Businesses in Kenya" 
                        data-sw="Programu ya ERP ya Maduka Makubwa (Supermarket) nchini Kenya">
                        Supermarket ERP Software for Businesses in Kenya
                    </h1>

                    <div class="sm-hero-sub sm-trans" 
                        data-en="Run your supermarket, retail store or multi-branch grocery business with integrated POS, inventory, purchasing, suppliers, customers and business analytics."
                        data-sw="Endesha duka lako kubwa, duka la rejareja au mtandao wa maduka ya vyakula ukiwa na POS iliyounganishwa, orodha ya bidhaa, ununuzi, wauzaji, wateja na uchanganuzi wa biashara.">
                        Run your supermarket, retail store or multi-branch grocery business with integrated POS, inventory, purchasing, suppliers, customers and business analytics.
                    </div>

                    <p class="sm-hero-desc sm-trans" 
                        data-en="Digify Soft Solutions provides a centralized ERP platform designed to help supermarkets manage thousands of products, multiple suppliers, stores, warehouses, sales transactions and inventory movements."
                        data-sw="Digify Soft Solutions inatoa jukwaa la ERP lililoundwa kusaidia maduka makubwa kusimamia maelfu ya bidhaa, wauzaji wengi, maduka, maghala, miamala ya mauzo na mzunguko wa bidhaa.">
                        Digify Soft Solutions provides a centralized ERP platform designed to help supermarkets manage thousands of products, multiple suppliers, stores, warehouses, sales transactions and inventory movements.
                    </p>

                    <div class="d-flex flex-wrap gap-3 mb-4">
                        <a href="#demo-form" class="btn btn-sm-primary">
                            <i class="fas fa-calendar-check"></i>
                            <span class="sm-trans" data-en="Request Supermarket Demo" data-sw="Omba Onyesho la Supermarket">Request Supermarket Demo</span>
                        </a>
                        <a href="https://wa.me/919914444588?text=Hello%20Digify%20Kenya%20Supermarket%20Team" target="_blank" class="btn btn-sm-outline">
                            <i class="fab fa-whatsapp text-success"></i>
                            <span class="sm-trans" data-en="Talk to Retail Expert" data-sw="Ongea na Mtaalamu wa Rejareja">Talk to Retail Expert</span>
                        </a>
                    </div>
                </div>

                <!-- Right Form -->
                <div class="col-lg-5" id="demo-form">
                    <div class="hero-lead-card">
                        <div class="d-flex align-items-center justify-content-between mb-2">
                            <span class="badge bg-success text-white px-3 py-1 rounded-pill font-monospace sm-trans" data-en="KENYA RETAIL SUITE" data-sw="HUDUMA YA REJAREJA YA KENYA">KENYA RETAIL SUITE</span>
                            <span class="text-muted small sm-trans" data-en="<i class='fas fa-bolt text-warning'></i> Fast Setup" data-sw="<i class='fas fa-bolt text-warning'></i> Usanidi wa Haraka"><i class="fas fa-bolt text-warning"></i> Fast Setup</span>
                        </div>
                        <h3 class="sm-trans" data-en="Book a Supermarket Live Demo" data-sw="Panga Onyesho la Moja kwa Moja la Supermarket">Book a Supermarket Live Demo</h3>
                        <p class="sm-trans" data-en="See high-speed barcode checkout, stock transfers, supplier POs, and branch analytics in action." data-sw="Tazama usomaji wa haraka wa barcode, uhamishaji wa bidhaa, na takwimu za matawi zikifanya kazi.">See high-speed barcode checkout, stock transfers, supplier POs, and branch analytics in action.</p>
                        
                        <form action="send_mail.php" method="POST">
                            <input type="hidden" name="source" value="Kenya Supermarket Dedicated ERP Page">
                            <input type="hidden" name="country" value="Kenya">
                            
                            <div class="mb-2">
                                <label class="form-label small fw-bold text-dark sm-trans" data-en="Full Name" data-sw="Jina Kamili">Full Name</label>
                                <input type="text" name="name" class="form-control" placeholder="e.g. David Mwangi / Jane Wanjiku" required>
                            </div>

                            <div class="mb-2">
                                <label class="form-label small fw-bold text-dark sm-trans" data-en="Supermarket / Store Name" data-sw="Jina la Duka / Supermarket">Supermarket / Store Name</label>
                                <input type="text" name="company" class="form-control" placeholder="e.g. QuickMart Express / Prime Supermarket" required>
                            </div>

                            <div class="row g-2 mb-2">
                                <div class="col-6">
                                    <label class="form-label small fw-bold text-dark sm-trans" data-en="WhatsApp / Mobile" data-sw="Simu / WhatsApp">WhatsApp / Mobile</label>
                                    <input type="tel" name="phone" class="form-control" placeholder="+254 7XX XXX XXX" required>
                                </div>
                                <div class="col-6">
                                    <label class="form-label small fw-bold text-dark sm-trans" data-en="Number of Branches" data-sw="Idadi ya Matawi">Number of Branches</label>
                                    <select name="branches" id="smBranchesSelect" class="form-select">
                                        <option value="1 Store">1 Store</option>
                                        <option value="2-5 Stores">2 - 5 Stores</option>
                                        <option value="6-15 Stores">6 - 15 Stores</option>
                                        <option value="15+ Stores">15+ Stores</option>
                                    </select>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label class="form-label small fw-bold text-dark sm-trans" data-en="Work Email" data-sw="Barua Pepe">Work Email</label>
                                <input type="email" name="email" class="form-control" placeholder="store@retail.co.ke" required>
                            </div>

                            <button type="submit" class="btn btn-sm-primary w-100 py-2">
                                <span class="sm-trans" data-en="Schedule Supermarket Demo" data-sw="Panga Onyesho la Supermarket">Schedule Supermarket Demo</span>
                                <i class="fas fa-arrow-right ms-2"></i>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 6. SUPERMARKET PRODUCT MANAGEMENT (14 Categories) -->
    <section class="sm-section bg-light-sm" id="categories">
        <div class="container">
            <div class="text-center mb-5">
                <span class="section-badge-sm sm-trans" data-en="Section 6: Product Master Catalogue" data-sw="Sehemu ya 6: Orodha Kuu ya Bidhaa">Section 6: Product Master Catalogue</span>
                <h2 class="section-title-sm sm-trans" 
                    data-en="Centralized Product Management Across 14 Categories" 
                    data-sw="Usimamizi Mkuu wa Bidhaa katika Kategoria 14">
                    Centralized Product Management Across 14 Categories
                </h2>
                <p class="section-sub-sm sm-trans" 
                    data-en="Manage tens of thousands of SKUs with barcode generation, brand classification, supplier tags, variable weight packaging, and multi-tier pricing."
                    data-sw="Simamia makumi ya maelfu ya bidhaa (SKU) kwa kutumia barcode, chapa, bei mbalimbali na ufungashaji wa uzito.">
                    Manage tens of thousands of SKUs with barcode generation, brand classification, supplier tags, variable weight packaging, and multi-tier pricing.
                </p>
            </div>

            <div class="row g-3 justify-content-center">
                <div class="col-md-3 col-sm-6"><div class="category-pill w-100 sm-trans" data-en="<i class='fas fa-shopping-basket'></i> 1. Food & Groceries" data-sw="<i class='fas fa-shopping-basket'></i> 1. Vyakula na Vyakula Vikuu"><i class="fas fa-shopping-basket"></i> 1. Food & Groceries</div></div>
                <div class="col-md-3 col-sm-6"><div class="category-pill w-100 sm-trans" data-en="<i class='fas fa-wine-bottle'></i> 2. Beverages" data-sw="<i class='fas fa-wine-bottle'></i> 2. Vinywaji"><i class="fas fa-wine-bottle"></i> 2. Beverages</div></div>
                <div class="col-md-3 col-sm-6"><div class="category-pill w-100 sm-trans" data-en="<i class='fas fa-cheese'></i> 3. Dairy Products" data-sw="<i class='fas fa-cheese'></i> 3. Bidhaa za Maziwa"><i class="fas fa-cheese"></i> 3. Dairy Products</div></div>
                <div class="col-md-3 col-sm-6"><div class="category-pill w-100 sm-trans" data-en="<i class='fas fa-bread-slice'></i> 4. Bakery Products" data-sw="<i class='fas fa-bread-slice'></i> 4. Vyakula vya Kuoka na Mikate"><i class="fas fa-bread-slice"></i> 4. Bakery Products</div></div>
                <div class="col-md-3 col-sm-6"><div class="category-pill w-100 sm-trans" data-en="<i class='fas fa-carrot'></i> 5. Fresh Produce" data-sw="<i class='fas fa-carrot'></i> 5. Matunda na Mboga Mpya"><i class="fas fa-carrot"></i> 5. Fresh Produce</div></div>
                <div class="col-md-3 col-sm-6"><div class="category-pill w-100 sm-trans" data-en="<i class='fas fa-drumstick-bite'></i> 6. Meat & Poultry" data-sw="<i class='fas fa-drumstick-bite'></i> 6. Nyama na Kuku"><i class="fas fa-drumstick-bite"></i> 6. Meat & Poultry</div></div>
                <div class="col-md-3 col-sm-6"><div class="category-pill w-100 sm-trans" data-en="<i class='fas fa-couch'></i> 7. Household Products" data-sw="<i class='fas fa-couch'></i> 7. Vifaa na Bidhaa za Nyumbani"><i class="fas fa-couch"></i> 7. Household Products</div></div>
                <div class="col-md-3 col-sm-6"><div class="category-pill w-100 sm-trans" data-en="<i class='fas fa-spa'></i> 8. Personal Care" data-sw="<i class='fas fa-spa'></i> 8. Huduma ya Kibinafsi na Urembo"><i class="fas fa-spa"></i> 8. Personal Care</div></div>
                <div class="col-md-3 col-sm-6"><div class="category-pill w-100 sm-trans" data-en="<i class='fas fa-pump-soap'></i> 9. Cleaning Products" data-sw="<i class='fas fa-pump-soap'></i> 9. Sabuni na Usafi"><i class="fas fa-pump-soap"></i> 9. Cleaning Products</div></div>
                <div class="col-md-3 col-sm-6"><div class="category-pill w-100 sm-trans" data-en="<i class='fas fa-tv'></i> 10. Electronics" data-sw="<i class='fas fa-tv'></i> 10. Vifaa vya Umeme"><i class="fas fa-tv"></i> 10. Electronics</div></div>
                <div class="col-md-3 col-sm-6"><div class="category-pill w-100 sm-trans" data-en="<i class='fas fa-pen-nib'></i> 11. Stationery" data-sw="<i class='fas fa-pen-nib'></i> 11. Vifaa vya Ofisi na Shule"><i class="fas fa-pen-nib"></i> 11. Stationery</div></div>
                <div class="col-md-3 col-sm-6"><div class="category-pill w-100 sm-trans" data-en="<i class='fas fa-baby'></i> 12. Baby Products" data-sw="<i class='fas fa-baby'></i> 12. Bidhaa za Watoto"><i class="fas fa-baby"></i> 12. Baby Products</div></div>
                <div class="col-md-3 col-sm-6"><div class="category-pill w-100 sm-trans" data-en="<i class='fas fa-pills'></i> 13. Pharmaceutical & Health" data-sw="<i class='fas fa-pills'></i> 13. Dawa na Huduma ya Afya"><i class="fas fa-pills"></i> 13. Pharmaceutical & Health</div></div>
                <div class="col-md-3 col-sm-6"><div class="category-pill w-100 sm-trans" data-en="<i class='fas fa-tshirt'></i> 14. Clothing & Apparel" data-sw="<i class='fas fa-tshirt'></i> 14. Nguo na Mavazi"><i class="fas fa-tshirt"></i> 14. Clothing & Apparel</div></div>
            </div>
        </div>
    </section>

    <!-- 7 to 11. CORE SUPERMARKET MODULES -->
    <section class="sm-section" id="modules">
        <div class="container">
            <div class="text-center mb-5">
                <span class="section-badge-sm sm-trans" data-en="Sections 7-11: Retail Operations" data-sw="Sehemu ya 7-11: Shughuli za Rejareja">Sections 7-11: Retail Operations</span>
                <h2 class="section-title-sm sm-trans" 
                    data-en="Complete Operational Engine for Kenyan Supermarkets" 
                    data-sw="Injini Kamili ya Uendeshaji kwa Maduka Makubwa ya Kenya">
                    Complete Operational Engine for Kenyan Supermarkets
                </h2>
                <p class="section-sub-sm sm-trans" data-en="Engineered for ultra-fast checkout queues, accurate inventory depletion, and smart replenishment." data-sw="Imeundwa kwa ajili ya malipo ya haraka sana, usahihi wa orodha ya bidhaa, na uagizaji mahiri wa hisa mpya.">Engineered for ultra-fast checkout queues, accurate inventory depletion, and smart replenishment.</p>
            </div>

            <div class="row g-4">
                <!-- 7. Supermarket POS -->
                <div class="col-lg-4 col-md-6">
                    <div class="sm-card">
                        <div class="sm-card-icon"><i class="fas fa-cash-register"></i></div>
                        <h4 class="sm-trans" data-en="7. Powerful POS for Kenyan Supermarkets" data-sw="7. Mfumo Thabiti wa POS ya Supermarket">7. Powerful POS for Kenyan Supermarkets</h4>
                        <p class="sm-trans" data-en="Process retail transactions quickly while keeping sales and inventory connected to the central ERP." data-sw="Fanya miamala haraka huku mauzo na orodha ya bidhaa vikiunganishwa na ERP kuu.">Process retail transactions quickly while keeping sales and inventory connected to the central ERP.</p>
                        <ul class="sm-checklist">
                            <li class="sm-trans" data-en="<i class='fas fa-check'></i> High-Speed Barcode Scanning & Smart Search" data-sw="<i class='fas fa-check'></i> Usomaji wa haraka wa barcode na utafutaji mahiri"><i class="fas fa-check"></i> High-Speed Barcode Scanning & Smart Search</li>
                            <li class="sm-trans" data-en="<i class='fas fa-check'></i> Multiple Payment Methods (M-Pesa, Cash, Cards)" data-sw="<i class='fas fa-check'></i> Njia nyingi za malipo (M-Pesa, Pesa Taslimu, Kadi)"><i class="fas fa-check"></i> Multiple Payment Methods (M-Pesa, Cash, Cards)</li>
                            <li class="sm-trans" data-en="<i class='fas fa-check'></i> Customer Loyalty & Promotions at Checkout" data-sw="<i class='fas fa-check'></i> Pointi za uaminifu na ofa wakati wa kulipa"><i class="fas fa-check"></i> Customer Loyalty & Promotions at Checkout</li>
                            <li class="sm-trans" data-en="<i class='fas fa-check'></i> Discount Management, Returns & Refunds" data-sw="<i class='fas fa-check'></i> Usimamizi wa punguzo, kurudisha bidhaa na kurudishiwa fedha"><i class="fas fa-check"></i> Discount Management, Returns & Refunds</li>
                            <li class="sm-trans" data-en="<i class='fas fa-check'></i> Receipt Management & Custom Slip Printing" data-sw="<i class='fas fa-check'></i> Usimamizi wa risiti na uchapishaji maalum wa stakabadhi"><i class="fas fa-check"></i> Receipt Management & Custom Slip Printing</li>
                            <li class="sm-trans" data-en="<i class='fas fa-check'></i> Cashier Management & Shift Z-Reports" data-sw="<i class='fas fa-check'></i> Usimamizi wa makeshia na ripoti za zamu (Z-Reports)"><i class="fas fa-check"></i> Cashier Management & Shift Z-Reports</li>
                            <li class="sm-trans" data-en="<i class='fas fa-check'></i> Daily Sales Reports & Branch-level Tracking" data-sw="<i class='fas fa-check'></i> Ripoti za kila siku za mauzo na ufuatiliaji wa matawi"><i class="fas fa-check"></i> Daily Sales Reports & Branch-level Tracking</li>
                        </ul>
                    </div>
                </div>

                <!-- 8. Real-Time Supermarket Inventory -->
                <div class="col-lg-4 col-md-6">
                    <div class="sm-card">
                        <div class="sm-card-icon"><i class="fas fa-warehouse"></i></div>
                        <h4 class="sm-trans" data-en="8. Real-Time Supermarket Inventory" data-sw="8. Usimamizi wa Orodha ya Supermarket ya Wakati Halisi">8. Real-Time Supermarket Inventory</h4>
                        <p class="sm-trans" data-en="Track inventory across stores, backrooms, and warehouses through one centralized system." data-sw="Fuatilia bidhaa katika maduka na maghala ili kuzuia kukosekana kwa bidhaa na kupunguza uharibifu.">Track inventory across stores, backrooms, and warehouses through one centralized system.</p>
                        <ul class="sm-checklist">
                            <li class="sm-trans" data-en="<i class='fas fa-check'></i> Stock In, Stock Out & Transfer Logs" data-sw="<i class='fas fa-check'></i> Kuingiza, kutoa na kumbukumbu za kuhamisha hisa"><i class="fas fa-check"></i> Stock In, Stock Out & Transfer Logs</li>
                            <li class="sm-trans" data-en="<i class='fas fa-check'></i> Low Stock & Out-of-Stock Warnings" data-sw="<i class='fas fa-check'></i> Tahadhari ya bidhaa zilizopungua au kuisha kabisa"><i class="fas fa-check"></i> Low Stock & Out-of-Stock Warnings</li>
                            <li class="sm-trans" data-en="<i class='fas fa-check'></i> Fast-Moving vs Slow-Moving Product Alerts" data-sw="<i class='fas fa-check'></i> Uchambuzi wa bidhaa zinazotembea haraka na polepole"><i class="fas fa-check"></i> Fast-Moving vs Slow-Moving Product Alerts</li>
                            <li class="sm-trans" data-en="<i class='fas fa-check'></i> Expired & Damaged Stock Tracking" data-sw="<i class='fas fa-check'></i> Ufuatiliaji wa bidhaa zilizoharibika na zilizopitwa na wakati"><i class="fas fa-check"></i> Expired & Damaged Stock Tracking</li>
                            <li class="sm-trans" data-en="<i class='fas fa-check'></i> Real-Time Warehouse Stock vs Shelf Stock" data-sw="<i class='fas fa-check'></i> Ulinganisho wa hisa za bohari kuu na rafu za duka"><i class="fas fa-check"></i> Real-Time Warehouse Stock vs Shelf Stock</li>
                        </ul>
                    </div>
                </div>

                <!-- 9. Smart Purchasing for Supermarkets -->
                <div class="col-lg-4 col-md-6">
                    <div class="sm-card">
                        <div class="sm-card-icon"><i class="fas fa-cart-arrow-down"></i></div>
                        <h4 class="sm-trans" data-en="9. Smart Purchasing for Supermarkets" data-sw="9. Ununuzi Mahiri kwa Maduka Makubwa">9. Smart Purchasing for Supermarkets</h4>
                        <p class="sm-trans" data-en="Manage suppliers, purchase orders, quantities, purchasing history and procurement workflows." data-sw="Simamia wauzaji, maagizo ya ununuzi, bei za wauzaji, na usambazaji wa maduka mengi.">Manage suppliers, purchase orders, quantities, purchasing history and procurement workflows.</p>
                        <ul class="sm-checklist">
                            <li class="sm-trans" data-en="<i class='fas fa-check'></i> Supplier Management & Contact Directory" data-sw="<i class='fas fa-check'></i> Usimamizi wa wauzaji na saraka ya anwani zao"><i class="fas fa-check"></i> Supplier Management & Contact Directory</li>
                            <li class="sm-trans" data-en="<i class='fas fa-check'></i> Purchase Orders & Goods Received Notes (GRN)" data-sw="<i class='fas fa-check'></i> Maagizo ya ununuzi na stakabadhi za kupokea bidhaa (GRN)"><i class="fas fa-check"></i> Purchase Orders & Goods Received Notes (GRN)</li>
                            <li class="sm-trans" data-en="<i class='fas fa-check'></i> Purchase History & Supplier Pricing Matrix" data-sw="<i class='fas fa-check'></i> Historia ya ununuzi na ulinganisho wa bei za wauzaji"><i class="fas fa-check"></i> Purchase History & Supplier Pricing Matrix</li>
                            <li class="sm-trans" data-en="<i class='fas fa-check'></i> Automated Product Reordering Suggestions" data-sw="<i class='fas fa-check'></i> Mapendekezo ya kiotomatiki ya kuagiza upya bidhaa"><i class="fas fa-check"></i> Automated Product Reordering Suggestions</li>
                            <li class="sm-trans" data-en="<i class='fas fa-check'></i> Comprehensive Purchase Reports & Supplier Rating" data-sw="<i class='fas fa-check'></i> Ripoti kamili za ununuzi na tathmini ya wasambazaji"><i class="fas fa-check"></i> Comprehensive Purchase Reports & Supplier Rating</li>
                        </ul>
                    </div>
                </div>

                <!-- 10. Avoid Stockouts with Better Replenishment -->
                <div class="col-lg-6">
                    <div class="sm-card">
                        <div class="sm-card-icon"><i class="fas fa-cubes"></i></div>
                        <h4 class="sm-trans" data-en="10. Avoid Stockouts with Replenishment Visibility" data-sw="10. Kuzuia Uhaba wa Bidhaa kwa Kujaza kwa Wakati">10. Avoid Stockouts with Replenishment Visibility</h4>
                        <p class="sm-trans" data-en="Monitor product movement and inventory levels to help purchasing teams identify products that require immediate replenishment." data-sw="Fuatilia mzunguko wa bidhaa ili kusaidia timu ya ununuzi kutambua bidhaa zinazohitaji kuagizwa upya mara moja.">Monitor product movement and inventory levels to help purchasing teams identify products that require immediate replenishment.</p>
                        <div class="row g-2">
                            <div class="col-sm-6"><div class="p-2 bg-light border rounded small"><i class="fas fa-check text-success me-1"></i> <span class="sm-trans" data-en="Minimum Stock Level Alerts" data-sw="Tahadhari ya Kiwango cha Chini cha Hisa">Minimum Stock Level Alerts</span></div></div>
                            <div class="col-sm-6"><div class="p-2 bg-light border rounded small"><i class="fas fa-check text-success me-1"></i> <span class="sm-trans" data-en="Live Current Stock Tracking" data-sw="Ufuatiliaji wa Wakati Halisi wa Hisa">Live Current Stock Tracking</span></div></div>
                            <div class="col-sm-6"><div class="p-2 bg-light border rounded small"><i class="fas fa-check text-success me-1"></i> <span class="sm-trans" data-en="Suggested Reorder Quantity" data-sw="Hesabu ya Idadi Inayopendekezwa ya Kuagiza">Suggested Reorder Quantity</span></div></div>
                            <div class="col-sm-6"><div class="p-2 bg-light border rounded small"><i class="fas fa-check text-success me-1"></i> <span class="sm-trans" data-en="Preferred Supplier Auto-Select" data-sw="Uteuzi wa Kiotomatiki wa Msambazaji Mkuu">Preferred Supplier Auto-Select</span></div></div>
                            <div class="col-sm-12"><div class="p-2 bg-light border rounded small"><i class="fas fa-check text-success me-1"></i> <span class="sm-trans" data-en="Seasonal & Weekly Product Demand Forecasting" data-sw="Utabiri wa Mahitaji ya Bidhaa kwa Misimu na Wiki">Seasonal & Weekly Product Demand Forecasting</span></div></div>
                        </div>
                    </div>
                </div>

                <!-- 11. Multi-Branch Supermarket Management -->
                <div class="col-lg-6">
                    <div class="sm-card">
                        <div class="sm-card-icon"><i class="fas fa-sitemap"></i></div>
                        <h4 class="sm-trans" data-en="11. Multi-Branch Supermarket Management" data-sw="11. Usimamizi wa Maduka Makubwa ya Matawi Mengi">11. Multi-Branch Supermarket Management</h4>
                        <p class="sm-trans" data-en="Manage multiple supermarkets, retail branches and central warehouses from one centralized ERP environment." data-sw="Simamia maduka mengi, matawi na maghala kupitia mfumo mmoja wa ERP.">Manage multiple supermarkets, retail branches and central warehouses from one centralized ERP environment.</p>
                        <div class="row g-2">
                            <div class="col-sm-6"><div class="p-2 bg-light border rounded small"><i class="fas fa-check text-success me-1"></i> <span class="sm-trans" data-en="Branch-wise Inventory" data-sw="Orodha ya Bidhaa kwa Kila Tawi">Branch-wise Inventory</span></div></div>
                            <div class="col-sm-6"><div class="p-2 bg-light border rounded small"><i class="fas fa-check text-success me-1"></i> <span class="sm-trans" data-en="Branch-wise Sales" data-sw="Mauzo kwa Kila Tawi">Branch-wise Sales</span></div></div>
                            <div class="col-sm-6"><div class="p-2 bg-light border rounded small"><i class="fas fa-check text-success me-1"></i> <span class="sm-trans" data-en="Central Warehouse Logistics" data-sw="Usafirishaji na Bohari Kuu">Central Warehouse Logistics</span></div></div>
                            <div class="col-sm-6"><div class="p-2 bg-light border rounded small"><i class="fas fa-check text-success me-1"></i> <span class="sm-trans" data-en="Inter-Branch Stock Transfers" data-sw="Uhamisho wa Hisa Kati ya Matawi">Inter-Branch Stock Transfers</span></div></div>
                            <div class="col-sm-6"><div class="p-2 bg-light border rounded small"><i class="fas fa-check text-success me-1"></i> <span class="sm-trans" data-en="Branch Local Purchasing" data-sw="Ununuzi wa Ndani wa Matawi">Branch Local Purchasing</span></div></div>
                            <div class="col-sm-6"><div class="p-2 bg-light border rounded small"><i class="fas fa-check text-success me-1"></i> <span class="sm-trans" data-en="Consolidated Group Reports" data-sw="Ripoti Zilizounganishwa za Kampuni Yote">Consolidated Group Reports</span></div></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 12 to 14. CUSTOMER MANAGEMENT, ANALYTICS & BUSINESS BENEFITS -->
    <section class="sm-section bg-light-sm" id="analytics-benefits">
        <div class="container">
            <div class="row g-4">
                <!-- 12. Customer Management -->
                <div class="col-lg-4">
                    <div class="sm-card h-100">
                        <div class="sm-card-icon"><i class="fas fa-users"></i></div>
                        <h4 class="sm-trans" data-en="12. Customer Management for Supermarkets" data-sw="12. Usimamizi wa Wateja wa Maduka Makubwa">12. Customer Management for Supermarkets</h4>
                        <p class="sm-trans" data-en="Build a centralized view of shoppers, loyalty points, purchase histories and customer activity across retail operations." data-sw="Tengeneza rekodi ya wateja, pointi za uaminifu, historia za ununuzi na shughuli za wateja.">Build a centralized view of shoppers, loyalty points, purchase histories and customer activity across retail operations.</p>
                        <ul class="sm-checklist">
                            <li class="sm-trans" data-en="<i class='fas fa-check'></i> Customer Profiles & Phone Number Lookup" data-sw="<i class='fas fa-check'></i> Wasifu wa wateja na utafutaji kwa nambari ya simu"><i class="fas fa-check"></i> Customer Profiles & Phone Number Lookup</li>
                            <li class="sm-trans" data-en="<i class='fas fa-check'></i> Complete Purchase History & Basket Size" data-sw="<i class='fas fa-check'></i> Historia kamili ya ununuzi na wastani wa ununuzi"><i class="fas fa-check"></i> Complete Purchase History & Basket Size</li>
                            <li class="sm-trans" data-en="<i class='fas fa-check'></i> Customer Segments (VIP, Frequent, Inactive)" data-sw="<i class='fas fa-check'></i> Makundi ya wateja (VIP, Wanaorudia mara kwa mara, Wasiofanya kazi)"><i class="fas fa-check"></i> Customer Segments (VIP, Frequent, Inactive)</li>
                            <li class="sm-trans" data-en="<i class='fas fa-check'></i> SMS / WhatsApp Promotions & Communication" data-sw="<i class='fas fa-check'></i> Matangazo na mawasiliano kupitia SMS / WhatsApp"><i class="fas fa-check"></i> SMS / WhatsApp Promotions & Communication</li>
                            <li class="sm-trans" data-en="<i class='fas fa-check'></i> Customer Loyalty Points & Redemption" data-sw="<i class='fas fa-check'></i> Pointi za uaminifu na matumizi yake dukani"><i class="fas fa-check"></i> Customer Loyalty Points & Redemption</li>
                        </ul>
                    </div>
                </div>

                <!-- 13. Business Analytics -->
                <div class="col-lg-4">
                    <div class="sm-card h-100">
                        <div class="sm-card-icon"><i class="fas fa-chart-line"></i></div>
                        <h4 class="sm-trans" data-en="13. Supermarket Analytics & Reports" data-sw="13. Takwimu na Ripoti za Supermarket">13. Supermarket Analytics & Reports</h4>
                        <p class="sm-trans" data-en="Actionable real-time reports to optimize retail profitability and stock turnover." data-sw="Ripoti za wakati halisi ili kuboresha faida ya rejareja na mzunguko wa bidhaa.">Actionable real-time reports to optimize retail profitability and stock turnover.</p>
                        <div class="d-flex flex-wrap gap-1">
                            <span class="badge bg-white text-dark border p-2 sm-trans" data-en="Daily Sales" data-sw="Mauzo ya Kila Siku">Daily Sales</span>
                            <span class="badge bg-white text-dark border p-2 sm-trans" data-en="Monthly Sales" data-sw="Mauzo ya Kila Mwezi">Monthly Sales</span>
                            <span class="badge bg-white text-dark border p-2 sm-trans" data-en="Branch Sales" data-sw="Mauzo ya Matawi">Branch Sales</span>
                            <span class="badge bg-white text-dark border p-2 sm-trans" data-en="Product Sales" data-sw="Mauzo ya Bidhaa">Product Sales</span>
                            <span class="badge bg-white text-dark border p-2 sm-trans" data-en="Category Sales" data-sw="Mauzo kwa Kategoria">Category Sales</span>
                            <span class="badge bg-white text-dark border p-2 sm-trans" data-en="Inventory Valuation" data-sw="Thamani ya Bidhaa Zilizopo">Inventory Valuation</span>
                            <span class="badge bg-white text-dark border p-2 sm-trans" data-en="Stock Movement" data-sw="Mzunguko wa Hisa">Stock Movement</span>
                            <span class="badge bg-white text-dark border p-2 sm-trans" data-en="Purchase Analysis" data-sw="Uchambuzi wa Ununuzi">Purchase Analysis</span>
                            <span class="badge bg-white text-dark border p-2 sm-trans" data-en="Supplier Analysis" data-sw="Tathmini ya Wasambazaji">Supplier Analysis</span>
                            <span class="badge bg-white text-dark border p-2 sm-trans" data-en="Cashier Performance" data-sw="Utendaji wa Makeshia">Cashier Performance</span>
                            <span class="badge bg-white text-dark border p-2 sm-trans" data-en="Customer Analysis" data-sw="Uchambuzi wa Wateja">Customer Analysis</span>
                            <span class="badge bg-white text-dark border p-2 sm-trans" data-en="Profitability Reports" data-sw="Ripoti za Faida na Mapato">Profitability Reports</span>
                        </div>
                    </div>
                </div>

                <!-- 14. Supermarket Business Benefits -->
                <div class="col-lg-4">
                    <div class="sm-card h-100">
                        <div class="sm-card-icon"><i class="fas fa-trophy"></i></div>
                        <h4 class="sm-trans" data-en="14. 9 Key Supermarket Benefits" data-sw="14. Manufaa 9 Muhimu ya Supermarket">14. 9 Key Supermarket Benefits</h4>
                        <ul class="sm-checklist">
                            <li class="sm-trans" data-en="<i class='fas fa-check-circle text-success'></i> <strong>Better inventory visibility</strong>" data-sw="<i class='fas fa-check-circle text-success'></i> <strong>Ufahamu bora na wa kina wa hisa</strong>"><i class="fas fa-check-circle text-success"></i> <strong>Better inventory visibility</strong></li>
                            <li class="sm-trans" data-en="<i class='fas fa-check-circle text-success'></i> <strong>Faster retail operations</strong>" data-sw="<i class='fas fa-check-circle text-success'></i> <strong>Kasi ya juu katika shughuli za rejareja</strong>"><i class="fas fa-check-circle text-success"></i> <strong>Faster retail operations</strong></li>
                            <li class="sm-trans" data-en="<i class='fas fa-check-circle text-success'></i> <strong>Centralized purchasing</strong>" data-sw="<i class='fas fa-check-circle text-success'></i> <strong>Mfumo mmoja uliounganishwa wa ununuzi</strong>"><i class="fas fa-check-circle text-success"></i> <strong>Centralized purchasing</strong></li>
                            <li class="sm-trans" data-en="<i class='fas fa-check-circle text-success'></i> <strong>Improved supplier management</strong>" data-sw="<i class='fas fa-check-circle text-success'></i> <strong>Usimamizi ulioboreshwa wa wauzaji</strong>"><i class="fas fa-check-circle text-success"></i> <strong>Improved supplier management</strong></li>
                            <li class="sm-trans" data-en="<i class='fas fa-check-circle text-success'></i> <strong>Multi-branch visibility</strong>" data-sw="<i class='fas fa-check-circle text-success'></i> <strong>Uangalizi wa wazi wa matawi yote</strong>"><i class="fas fa-check-circle text-success"></i> <strong>Multi-branch visibility</strong></li>
                            <li class="sm-trans" data-en="<i class='fas fa-check-circle text-success'></i> <strong>Reduced manual data entry</strong>" data-sw="<i class='fas fa-check-circle text-success'></i> <strong>Kupunguza uingizaji data kwa mikono</strong>"><i class="fas fa-check-circle text-success"></i> <strong>Reduced manual data entry</strong></li>
                            <li class="sm-trans" data-en="<i class='fas fa-check-circle text-success'></i> <strong>Better sales reporting</strong>" data-sw="<i class='fas fa-check-circle text-success'></i> <strong>Ripoti sahihi na zenye kina za mauzo</strong>"><i class="fas fa-check-circle text-success"></i> <strong>Better sales reporting</strong></li>
                            <li class="sm-trans" data-en="<i class='fas fa-check-circle text-success'></i> <strong>Improved stock planning</strong>" data-sw="<i class='fas fa-check-circle text-success'></i> <strong>Upangaji makini wa hisa za maduka</strong>"><i class="fas fa-check-circle text-success"></i> <strong>Improved stock planning</strong></li>
                            <li class="sm-trans" data-en="<i class='fas fa-check-circle text-success'></i> <strong>Centralized business information</strong>" data-sw="<i class='fas fa-check-circle text-success'></i> <strong>Taarifa zote za biashara sehemu moja</strong>"><i class="fas fa-check-circle text-success"></i> <strong>Centralized business information</strong></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA SECTION -->
    <section class="sm-section bg-dark text-white text-center">
        <div class="container">
            <h2 class="fw-bold mb-3 sm-trans" data-en="Elevate Your Kenya Supermarket & Retail Chain" data-sw="Boresha Duka Lako Kubwa na Mtandao wa Rejareja Kenya">Elevate Your Kenya Supermarket & Retail Chain</h2>
            <p class="text-light opacity-75 max-w-700 mx-auto mb-4 sm-trans" data-en="Speed up checkout queues, prevent inventory leakage, and gain full multi-store visibility with Digify Supermarket ERP." data-sw="Ongeza kasi ya malipo, zuia upotevu wa bidhaa, na upate muhtasari kamili wa maduka yako yote kupitia Digify Supermarket ERP.">Speed up checkout queues, prevent inventory leakage, and gain full multi-store visibility with Digify Supermarket ERP.</p>
            <div class="d-flex justify-content-center gap-3 flex-wrap">
                <a href="#demo-form" class="btn btn-sm-primary px-4 py-3"><i class="fas fa-calendar-check me-2"></i> <span class="sm-trans" data-en="Request Supermarket Demo" data-sw="Omba Onyesho la Supermarket">Request Supermarket Demo</span></a>
                <a href="erp-software-kenya.php" class="btn btn-sm-outline px-4 py-3"><i class="fas fa-arrow-left me-2"></i> <span class="sm-trans" data-en="View Main Kenya ERP Platform" data-sw="Tazama Mfumo Mkuu wa ERP wa Kenya">View Main Kenya ERP Platform</span></a>
            </div>
        </div>
    </section>

</div>

<script>
function switchSmLang(lang) {
    var btnEn = document.getElementById('btnSmLangEn');
    var btnSw = document.getElementById('btnSmLangSw');
    
    if (lang === 'sw') {
        if (btnEn) btnEn.classList.remove('active');
        if (btnSw) btnSw.classList.add('active');
    } else {
        if (btnSw) btnSw.classList.remove('active');
        if (btnEn) btnEn.classList.add('active');
    }

    var elements = document.querySelectorAll('.sm-trans');
    elements.forEach(function(el) {
        var text = el.getAttribute('data-' + lang);
        if (text) {
            el.innerHTML = text;
        }
    });

    var bSel = document.getElementById('smBranchesSelect');
    if (bSel) {
        if (lang === 'sw') {
            bSel.options[0].text = "Duka 1";
            bSel.options[1].text = "Maduka 2 - 5";
            bSel.options[2].text = "Maduka 6 - 15";
            bSel.options[3].text = "Maduka 15+";
        } else {
            bSel.options[0].text = "1 Store";
            bSel.options[1].text = "2 - 5 Stores";
            bSel.options[2].text = "6 - 15 Stores";
            bSel.options[3].text = "15+ Stores";
        }
    }
}
</script>

<?php 
include(__DIR__ . '/../../footer.php');
?>