<?php 
include_once(__DIR__ . '/../../db.php');
include_once(__DIR__ . '/../../fetch_meta.php');

$pageTitle = "Supermarket ERP Software Sri Lanka | POS & Inventory Management";
$pageDescription = "Manage supermarket POS, inventory, purchasing, suppliers, products, customers and multiple branches through Digify's integrated Supermarket ERP platform in Sri Lanka.";
$pageKeywords = "Supermarket ERP Sri Lanka, Supermarket POS software Sri Lanka, Supermarket inventory software Sri Lanka, Grocery store software Sri Lanka, Grocery POS Sri Lanka, Multi branch supermarket ERP Sri Lanka, Retail POS Sri Lanka, FMCG distribution Sri Lanka";
$pageCanonical = "https://www.digifysoft.in/supermarket-erp-software-sri-lanka";

include(__DIR__ . '/../../top.php');
include(__DIR__ . '/../../header.php');
?>

<style>
/* Sri Lanka Supermarket Suite Design System */
.lksm-page-wrapper {
    font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
    color: #1e293b;
    overflow-x: hidden;
}

/* Hero */
.lksm-hero {
    background: linear-gradient(135deg, #062b24 0%, #0d4a3e 50%, #115e59 100%);
    color: #ffffff;
    padding: 70px 0 85px;
    position: relative;
    overflow: hidden;
    border-bottom: 4px solid #14b8a6;
}
.lksm-hero::before {
    content: '';
    position: absolute;
    top: -15%;
    right: -10%;
    width: 650px;
    height: 650px;
    background: radial-gradient(circle, rgba(20, 184, 166, 0.28) 0%, rgba(245, 158, 11, 0.12) 50%, rgba(0, 0, 0, 0) 75%);
    border-radius: 50%;
    pointer-events: none;
}
.text-gradient-lksm {
    background: linear-gradient(135deg, #5eead4 0%, #fde047 50%, #f97316 100%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    display: inline-block;
}
.lksm-hero-badge {
    background: rgba(20, 184, 166, 0.18);
    border: 1px solid rgba(94, 234, 212, 0.45);
    color: #5eead4;
    font-size: 13px;
    font-weight: 700;
    padding: 7px 18px;
    border-radius: 30px;
    display: inline-flex;
    align-items: center;
    gap: 8px;
    margin-bottom: 18px;
}
.lksm-hero h1 {
    font-size: 42px;
    font-weight: 900;
    line-height: 1.25;
    margin-bottom: 18px;
    letter-spacing: -0.5px;
}
.lksm-hero-sub {
    font-size: 18px;
    font-weight: 600;
    color: #fde047;
    line-height: 1.5;
    margin-bottom: 14px;
}
.lksm-hero-desc {
    font-size: 16px;
    line-height: 1.7;
    color: rgba(255, 255, 255, 0.88);
    max-width: 700px;
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
    padding: 6px 16px;
    border-radius: 20px;
    cursor: pointer;
    transition: all 0.25s ease;
}
.lang-pill.active {
    background: linear-gradient(135deg, #0d9488 0%, #14b8a6 100%);
    color: #ffffff;
    box-shadow: 0 4px 12px rgba(13, 148, 136, 0.4);
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
.btn-lksm-primary {
    background: linear-gradient(135deg, #0d9488 0%, #0f766e 100%);
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
    box-shadow: 0 10px 20px -5px rgba(13, 148, 136, 0.4);
    text-decoration: none;
}
.btn-lksm-primary:hover {
    background: linear-gradient(135deg, #0f766e 0%, #115e59 100%);
    color: #ffffff;
    transform: translateY(-2px);
}
.btn-lksm-outline {
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
.btn-lksm-outline:hover {
    background: rgba(255, 255, 255, 0.18);
    color: #ffffff;
    transform: translateY(-2px);
}

/* Section */
.lksm-section { padding: 75px 0; }
.bg-light-lksm { background-color: #f8fafc; }
.section-badge-lksm {
    display: inline-block;
    background: #f0fdfa;
    color: #0f766e;
    font-size: 12px;
    font-weight: 800;
    text-transform: uppercase;
    letter-spacing: 0.8px;
    padding: 6px 14px;
    border-radius: 20px;
    margin-bottom: 12px;
    border: 1px solid #99f6e4;
}
.section-title-lksm {
    font-size: 34px;
    font-weight: 900;
    color: #0f172a;
    line-height: 1.3;
    margin-bottom: 16px;
    letter-spacing: -0.5px;
}

/* Feature Cards */
.lksm-card {
    background: #ffffff;
    border: 1px solid #e2e8f0;
    border-radius: 16px;
    padding: 26px;
    transition: all 0.3s ease;
    height: 100%;
    display: flex;
    flex-direction: column;
}
.lksm-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 20px 30px -10px rgba(0, 0, 0, 0.08);
    border-color: #5eead4;
}
.lksm-card-icon {
    width: 52px;
    height: 52px;
    border-radius: 14px;
    background: linear-gradient(135deg, #f0fdfa 0%, #ccfbf1 100%);
    color: #0f766e;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 22px;
    margin-bottom: 18px;
}
.lksm-card h4 {
    font-size: 18px;
    font-weight: 800;
    color: #0f172a;
    margin-bottom: 10px;
}
.lksm-card p {
    font-size: 14px;
    color: #64748b;
    line-height: 1.6;
    margin-bottom: 16px;
    flex-grow: 1;
}
.lksm-checklist {
    list-style: none;
    padding: 0;
    margin: 0;
}
.lksm-checklist li {
    font-size: 13.5px;
    color: #334155;
    margin-bottom: 8px;
    display: flex;
    align-items: center;
    gap: 8px;
}
.lksm-checklist li i {
    color: #0d9488;
    font-size: 14px;
    flex-shrink: 0;
}

/* Category Grid Card */
.category-box {
    background: #ffffff;
    border: 1px solid #e2e8f0;
    border-radius: 14px;
    padding: 18px 14px;
    text-align: center;
    transition: all 0.3s ease;
    height: 100%;
}
.category-box:hover {
    border-color: #0d9488;
    background: #f0fdfa;
    transform: translateY(-3px);
}
.category-box i {
    font-size: 26px;
    color: #0d9488;
    margin-bottom: 10px;
    display: inline-block;
}
.category-box h6 {
    font-size: 14px;
    font-weight: 800;
    color: #0f172a;
    margin-bottom: 4px;
}
.category-box p {
    font-size: 12px;
    color: #64748b;
    margin: 0;
}

@media (max-width: 991px) {
    .lksm-hero { padding: 45px 0 55px; }
    .lksm-hero h1 { font-size: 28px; line-height: 1.3; }
    .hero-lead-card { margin-top: 25px; padding: 24px 20px; }
    .section-title-lksm { font-size: 24px; }
}
@media (max-width: 576px) {
    .lksm-hero { padding: 35px 0 45px; }
    .lksm-hero h1 { font-size: 23px; }
    .btn-lksm-primary, .btn-lksm-outline { width: 100%; justify-content: center; }
}
</style>

<div class="lksm-page-wrapper">

    <!-- HERO SECTION -->
    <section class="lksm-hero" id="hero">
        <div class="container position-relative" style="z-index: 2;">
            <div class="row align-items-center g-4">
                <div class="col-lg-7">
                    <!-- Language Switcher -->
                    <div class="lang-toggle-bar">
                        <button class="lang-pill active" id="btnSmLangEn" onclick="switchSmLang('en')">🇬🇧 English</button>
                        <button class="lang-pill" id="btnSmLangSi" onclick="switchSmLang('si')">🇱🇰 සිංහල</button>
                    </div>

                    <div class="lksm-hero-badge">
                        <span>🛒</span>
                        <span class="lksm-trans" data-en="Sri Lanka Supermarket & Retail POS Architecture" data-si="ශ්‍රී ලංකා සුපිරි වෙළඳසැල් POS පද්ධතිය">Sri Lanka Supermarket & Retail POS Architecture</span>
                    </div>

                    <h1 class="lksm-trans" 
                        data-en="Supermarket ERP Software for Sri Lankan Businesses" 
                        data-si="ශ්‍රී ලංකාවේ සුපිරි වෙළඳසැල් සඳහා Supermarket ERP මෘදුකාංගය">
                        Supermarket ERP Software for Sri Lankan Businesses
                    </h1>

                    <div class="lksm-hero-sub lksm-trans"
                        data-en="Manage supermarket POS, inventory, purchasing, suppliers, products, customers and multiple branches through one integrated ERP platform."
                        data-si="සුපිරි වෙළඳසැල් POS, තොග පාලනය, මිලදී ගැනීම්, සැපයුම්කරුවන්, භාණ්ඩ නාමාවලිය සහ බහු ශාඛා එකම ERP පද්ධතියකින් කළමනාකරණය කරන්න.">
                        Manage supermarket POS, inventory, purchasing, suppliers, products, customers and multiple branches through one integrated ERP platform.
                    </div>

                    <p class="lksm-hero-desc lksm-trans"
                        data-en="High-speed barcode scanning, digital weighing scale integration, LankaPay card checkout, cashier shift cash reconciliation, and automated stock replenishment."
                        data-si="වේගවත් බාර්කෝඩ් ස්කෑන්, ඩිජිටල් තරාදි සම්බන්ධතාවය, ලංකාපේ කාඩ්පත් ගෙවීම් සහ කැෂියර් මුදල් සමථකරණය.">
                        High-speed barcode scanning, digital weighing scale integration, LankaPay card checkout, cashier shift cash reconciliation, and automated stock replenishment.
                    </p>

                    <div class="d-flex flex-wrap gap-3 mb-4">
                        <a href="#demo-form" class="btn btn-lksm-primary">
                            <i class="fas fa-calendar-check"></i>
                            <span class="lksm-trans" data-en="Request Supermarket Demo" data-si="සුපර්මාර්කට් ඩෙමෝ එකක් ඉල්ලන්න">Request Supermarket Demo</span>
                        </a>
                        <a href="erp-software-sri-lanka.php" class="btn btn-lksm-outline">
                            <i class="fas fa-arrow-left"></i>
                            <span class="lksm-trans" data-en="Back to Sri Lanka Main ERP" data-si="ප්‍රධාන ශ්‍රී ලංකා ERP පිටුව">Back to Sri Lanka Main ERP</span>
                        </a>
                    </div>
                </div>

                <!-- Right Form -->
                <div class="col-lg-5" id="demo-form">
                    <div class="hero-lead-card">
                        <div class="d-flex align-items-center justify-content-between flex-wrap gap-2 mb-2 pb-1 border-bottom">
                            <span class="badge bg-success text-white px-2 py-1 rounded-pill font-monospace lksm-trans" style="font-size: 11px;" data-en="🛒 SUPERMARKET DEMO" data-si="🛒 සුපර්මාර්කට් ඩෙමෝ">🛒 SUPERMARKET DEMO</span>
                            <span class="text-muted small text-nowrap"><i class="fas fa-clock text-warning me-1"></i> <span class="lksm-trans" data-en="15-Min Live Demo" data-si="මිනිත්තු 15 ක සජීවී ඩෙමෝ">15-Min Live Demo</span></span>
                        </div>
                        <h3 class="lksm-trans mt-2" data-en="Schedule Supermarket Walkthrough" data-si="සුපර්මාර්කට් ඩෙමෝවක් වෙන්කරගන්න">Schedule Supermarket Walkthrough</h3>
                        <p class="small text-muted mb-3 lksm-trans" data-en="See barcode scanning, scale integration, and multi-branch inventory live." data-si="බාර්කෝඩ් ස්කෑන්, තරාදි සම්බන්ධතාවය සහ බහු-ශාඛා තොග කළමනාකරණය සජීවීව නරඹන්න.">See barcode scanning, scale integration, and multi-branch inventory live.</p>
                        
                        <form action="send_mail.php" method="POST" id="sriLankaSupermarketForm">
                            <input type="hidden" name="source" value="Sri Lanka Supermarket ERP Page">
                            <input type="hidden" name="country" value="Sri Lanka">
                            
                            <div class="mb-2">
                                <label class="form-label small fw-bold text-dark lksm-trans" data-en="Full Name" data-si="සම්පූර්ණ නම">Full Name</label>
                                <input type="text" name="name" class="form-control lksm-trans-ph" placeholder="e.g. Kasun Silva" data-en-ph="e.g. Kasun Silva" data-si-ph="උදා: කසුන් සිල්වා" required>
                            </div>

                            <div class="mb-2">
                                <label class="form-label small fw-bold text-dark lksm-trans" data-en="Supermarket / Store Name" data-si="සුපිරි වෙළඳසැලේ නම">Supermarket / Store Name</label>
                                <input type="text" name="company" class="form-control lksm-trans-ph" placeholder="e.g. City Supermart / Fresh Foods" data-en-ph="e.g. City Supermart / Fresh Foods" data-si-ph="උදා: සිටි සුපර්මාර්ට් / ෆ්‍රෙෂ් ෆුඩ්ස්" required>
                            </div>

                            <div class="row g-2 mb-2">
                                <div class="col-6">
                                    <label class="form-label small fw-bold text-dark lksm-trans" data-en="WhatsApp / Phone" data-si="දුරකථන අංකය">WhatsApp / Phone</label>
                                    <input type="tel" name="phone" class="form-control" placeholder="+94 7X XXX XXXX" required>
                                </div>
                                <div class="col-6">
                                    <label class="form-label small fw-bold text-dark lksm-trans" data-en="Number of Outlets" data-si="ශාඛා ගණන">Number of Outlets</label>
                                    <select name="outlets" class="form-select" required>
                                        <option value="1 Store" class="lksm-trans" data-en="1 Store" data-si="1 වෙළඳසැලක්">1 Store</option>
                                        <option value="2-5 Stores" class="lksm-trans" data-en="2 - 5 Stores" data-si="ශාඛා 2 - 5">2 - 5 Stores</option>
                                        <option value="6-15 Stores" class="lksm-trans" data-en="6 - 15 Stores" data-si="ශාඛා 6 - 15">6 - 15 Stores</option>
                                        <option value="15+ Stores" class="lksm-trans" data-en="15+ Stores / Chain" data-si="ශාඛා 15+ / ජාලයක්">15+ Stores / Chain</option>
                                    </select>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-lksm-primary w-100 py-2 mt-2">
                                <span class="lksm-trans" data-en="Schedule Live Supermarket Demo" data-si="සජීවී ඩෙමෝව වෙන්කරගන්න">Schedule Live Supermarket Demo</span>
                                <i class="fas fa-arrow-right ms-2"></i>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 14 PRODUCT CATEGORIES GRID -->
    <section class="lksm-section bg-light-lksm" id="product-categories">
        <div class="container">
            <div class="text-center mb-5">
                <span class="section-badge-lksm lksm-trans" data-en="Comprehensive Retail Coverage" data-si="සම්පූර්ණ සිල්ලර ආවරණය">Comprehensive Retail Coverage</span>
                <h2 class="section-title-lksm lksm-trans" 
                    data-en="14 Supermarket Product Categories Supported" 
                    data-si="සහාය දක්වන සුපිරි වෙළඳසැල් කාණ්ඩ 14">
                    14 Supermarket Product Categories Supported
                </h2>
                <p class="text-muted max-w-700 mx-auto lksm-trans" 
                    data-en="From weighed fresh produce to packaged FMCG, frozen meats, and pharmaceuticals — Digify handles every barcode SKU."
                    data-si="කිරා මනින නැවුම් එළවළු, ඇසුරුම් කළ FMCG, ශීතකළ මස් සහ ඖෂධ දක්වා — සියලු බාර්කෝඩ් භාණ්ඩ Digify මඟින් පාලනය කෙරේ.">
                    From weighed fresh produce to packaged FMCG, frozen meats, and pharmaceuticals — Digify handles every barcode SKU.
                </p>
            </div>

            <div class="row g-3 row-cols-2 row-cols-md-4 row-cols-lg-7">
                <div class="col"><div class="category-box"><i class="fas fa-shopping-basket"></i><h6 class="lksm-trans" data-en="Groceries" data-si="සිල්ලර බඩු">Groceries</h6><p class="lksm-trans" data-en="Dry grains, spices & essentials" data-si="ධාන්‍ය, කුළුබඩු හා අත්‍යවශ්‍ය ද්‍රව්‍ය">Dry grains, spices & essentials</p></div></div>
                <div class="col"><div class="category-box"><i class="fas fa-glass-whiskey"></i><h6 class="lksm-trans" data-en="Food & Beverages" data-si="ආහාර හා පාන">Food & Beverages</h6><p class="lksm-trans" data-en="Juices, soft drinks & tea" data-si="යුෂ, සිසිල් බීම හා තේ">Juices, soft drinks & tea</p></div></div>
                <div class="col"><div class="category-box"><i class="fas fa-cheese"></i><h6 class="lksm-trans" data-en="Dairy Products" data-si="කිරි නිෂ්පාදන">Dairy Products</h6><p class="lksm-trans" data-en="Milk, cheese & butter" data-si="කිරි, චීස් සහ බටර්">Milk, cheese & butter</p></div></div>
                <div class="col"><div class="category-box"><i class="fas fa-bread-slice"></i><h6 class="lksm-trans" data-en="Bakery" data-si="බේකරි">Bakery</h6><p class="lksm-trans" data-en="Fresh bread & pastries" data-si="නැවුම් පාන් සහ පේස්ට්‍රි">Fresh bread & pastries</p></div></div>
                <div class="col"><div class="category-box"><i class="fas fa-apple-alt"></i><h6 class="lksm-trans" data-en="Fresh Produce" data-si="නැවුම් එළවළු/පලතුරු">Fresh Produce</h6><p class="lksm-trans" data-en="Vegetables & weighed fruits" data-si="එළවළු සහ කිරන ලද පලතුරු">Vegetables & weighed fruits</p></div></div>
                <div class="col"><div class="category-box"><i class="fas fa-drumstick-bite"></i><h6 class="lksm-trans" data-en="Meat & Seafood" data-si="මස් සහ මාළු">Meat & Seafood</h6><p class="lksm-trans" data-en="Poultry, fresh fish & cuts" data-si="කුකුළු මස්, මාළු සහ මස් වර්ග">Poultry, fresh fish & cuts</p></div></div>
                <div class="col"><div class="category-box"><i class="fas fa-home"></i><h6 class="lksm-trans" data-en="Household" data-si="ගෘහ භාණ්ඩ">Household</h6><p class="lksm-trans" data-en="Kitchenware & plastics" data-si="මුළුතැන්ගෙයි උපකරණ">Kitchenware & plastics</p></div></div>
                <div class="col"><div class="category-box"><i class="fas fa-pump-soap"></i><h6 class="lksm-trans" data-en="Personal Care" data-si="පුද්ගලික සත්කාර">Personal Care</h6><p class="lksm-trans" data-en="Soaps, shampoos & oral care" data-si="සබන්, ෂැම්පු සහ දන්තාලේප">Soaps, shampoos & oral care</p></div></div>
                <div class="col"><div class="category-box"><i class="fas fa-spray-can"></i><h6 class="lksm-trans" data-en="Cleaning" data-si="පිරිසිදුකාරක">Cleaning</h6><p class="lksm-trans" data-en="Detergents & disinfectants" data-si="සේදුම් කුඩු සහ විෂබීජ නාශක">Detergents & disinfectants</p></div></div>
                <div class="col"><div class="category-box"><i class="fas fa-baby"></i><h6 class="lksm-trans" data-en="Baby Products" data-si="ළදරු නිෂ්පාදන">Baby Products</h6><p class="lksm-trans" data-en="Diapers, formula & food" data-si="ඩයපර්, කිරිපිටි හා ළදරු ආහාර">Diapers, formula & food</p></div></div>
                <div class="col"><div class="category-box"><i class="fas fa-pen-alt"></i><h6 class="lksm-trans" data-en="Stationery" data-si="ලිපිද්‍රව්‍ය">Stationery</h6><p class="lksm-trans" data-en="Books, pens & supplies" data-si="පොත්පත්, පෑන් හා උපකරණ">Books, pens & supplies</p></div></div>
                <div class="col"><div class="category-box"><i class="fas fa-plug"></i><h6 class="lksm-trans" data-en="Electronics" data-si="විදුලි උපකරණ">Electronics</h6><p class="lksm-trans" data-en="Small appliances & bulbs" data-si="කුඩා විදුලි උපකරණ හා බල්බ">Small appliances & bulbs</p></div></div>
                <div class="col"><div class="category-box"><i class="fas fa-tshirt"></i><h6 class="lksm-trans" data-en="Clothing" data-si="ඇඟලුම්">Clothing</h6><p class="lksm-trans" data-en="Basic apparel & innerwear" data-si="මූලික ඇඳුම් සහ යට ඇඳුම්">Basic apparel & innerwear</p></div></div>
                <div class="col"><div class="category-box"><i class="fas fa-pills"></i><h6 class="lksm-trans" data-en="Pharmacy" data-si="ඖෂධ">Pharmacy</h6><p class="lksm-trans" data-en="OTC drugs & first aid" data-si="සාමාන්‍ය ඖෂධ හා ප්‍රථමාධාර">OTC drugs & first aid</p></div></div>
            </div>
        </div>
    </section>

    <!-- CORE SUPERMARKET MODULES -->
    <section class="lksm-section" id="modules">
        <div class="container">
            <div class="row g-4">
                <div class="col-md-6 col-lg-3">
                    <div class="lksm-card">
                        <div class="lksm-card-icon"><i class="fas fa-barcode"></i></div>
                        <h4 class="lksm-trans" data-en="Supermarket POS" data-si="සුපර්මාර්කට් POS">Supermarket POS</h4>
                        <p class="lksm-trans" data-en="Process customer checkout queues under 15 seconds with barcode guns and digital scale integration." data-si="බාර්කෝඩ් සහ ඩිජිටල් තරාදි භාවිතයෙන් තත්පර 15 ක් ඇතුළත බිල්පත් නිකුත් කරන්න.">Process customer checkout queues under 15 seconds with barcode guns and digital scale integration.</p>
                        <ul class="lksm-checklist">
                            <li class="lksm-trans" data-en="<i class='fas fa-check-circle'></i> Digital scale weight sync" data-si="<i class='fas fa-check-circle'></i> ඩිජිටල් තරාදි බර සටහන්"><i class="fas fa-check-circle"></i> Digital scale weight sync</li>
                            <li class="lksm-trans" data-en="<i class='fas fa-check-circle'></i> LankaPay QR & cards" data-si="<i class='fas fa-check-circle'></i> LankaPay QR සහ කාඩ්පත්"><i class="fas fa-check-circle"></i> LankaPay QR & cards</li>
                            <li class="lksm-trans" data-en="<i class='fas fa-check-circle'></i> Cash drawer shift audit" data-si="<i class='fas fa-check-circle'></i> මුදල් ලාච්චු මුර විගණනය"><i class="fas fa-check-circle"></i> Cash drawer shift audit</li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3">
                    <div class="lksm-card">
                        <div class="lksm-card-icon"><i class="fas fa-boxes"></i></div>
                        <h4 class="lksm-trans" data-en="Inventory Management" data-si="තොග කළමනාකරණය">Inventory Management</h4>
                        <p class="lksm-trans" data-en="Real-time stock counts across backroom storage, display shelves, and central distribution hubs." data-si="පසුපස ගබඩාව, ප්‍රදර්ශන රාක්ක සහ ප්‍රධාන බෙදාහැරීම් ගබඩා හරහා සජීවී තොග දත්ත.">Real-time stock counts across backroom storage, display shelves, and central distribution hubs.</p>
                        <ul class="lksm-checklist">
                            <li class="lksm-trans" data-en="<i class='fas fa-check-circle'></i> Stock in/out & low alerts" data-si="<i class='fas fa-check-circle'></i> තොග ඇතුළුවීම් සහ අවම අනතුරු ඇඟවීම්"><i class="fas fa-check-circle"></i> Stock in/out & low alerts</li>
                            <li class="lksm-trans" data-en="<i class='fas fa-check-circle'></i> Expiry & FEFO tracking" data-si="<i class='fas fa-check-circle'></i> කල් ඉකුත්වීමේ දින හා FEFO පාලනය"><i class="fas fa-check-circle"></i> Expiry & FEFO tracking</li>
                            <li class="lksm-trans" data-en="<i class='fas fa-check-circle'></i> Fast/slow moving SKUs" data-si="<i class='fas fa-check-circle'></i> වේගයෙන් අලෙවි වන භාණ්ඩ විශ්ලේෂණය"><i class="fas fa-check-circle"></i> Fast/slow moving SKUs</li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3">
                    <div class="lksm-card">
                        <div class="lksm-card-icon"><i class="fas fa-truck-loading"></i></div>
                        <h4 class="lksm-trans" data-en="Procurement & POs" data-si="මිලදී ගැනීම් සහ POs">Procurement & POs</h4>
                        <p class="lksm-trans" data-en="Manage supplier rate agreements, automated reordering thresholds, and Goods Received Notes (GRN)." data-si="සැපයුම්කරු මිල ගිවිසුම්, ස්වයංක්‍රීය නැවත ඇණවුම් කිරීම් සහ භාණ්ඩ ලැබීමේ සටහන් (GRN).">Manage supplier rate agreements, automated reordering thresholds, and Goods Received Notes (GRN).</p>
                        <ul class="lksm-checklist">
                            <li class="lksm-trans" data-en="<i class='fas fa-check-circle'></i> Supplier cost comparisons" data-si="<i class='fas fa-check-circle'></i> සැපයුම්කරු මිල සංසන්දනය"><i class="fas fa-check-circle"></i> Supplier cost comparisons</li>
                            <li class="lksm-trans" data-en="<i class='fas fa-check-circle'></i> Automated reorder triggers" data-si="<i class='fas fa-check-circle'></i> ස්වයංක්‍රීය නැවත ඇණවුම් ඇඟවීම්"><i class="fas fa-check-circle"></i> Automated reorder triggers</li>
                            <li class="lksm-trans" data-en="<i class='fas fa-check-circle'></i> Landed cost allocation" data-si="<i class='fas fa-check-circle'></i> ප්‍රවාහන හා ගොඩබෑමේ පිරිවැය"><i class="fas fa-check-circle"></i> Landed cost allocation</li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3">
                    <div class="lksm-card">
                        <div class="lksm-card-icon"><i class="fas fa-store-alt"></i></div>
                        <h4 class="lksm-trans" data-en="Multi-Store Chains" data-si="බහු ශාඛා පාලනය">Multi-Store Chains</h4>
                        <p class="lksm-trans" data-en="Orchestrate 5 to 50+ retail branches across Western, Central, and Southern provinces with zero friction." data-si="බස්නාහිර, මධ්‍යම සහ දකුණු පළාත් පුරා ශාඛා 5 සිට 50+ දක්වා බාධාවකින් තොරව මෙහෙයවන්න.">Orchestrate 5 to 50+ retail branches across Western, Central, and Southern provinces with zero friction.</p>
                        <ul class="lksm-checklist">
                            <li class="lksm-trans" data-en="<i class='fas fa-check-circle'></i> Inter-branch stock transfers" data-si="<i class='fas fa-check-circle'></i> ශාඛා අතර තොග මාරු කිරීම්"><i class="fas fa-check-circle"></i> Inter-branch stock transfers</li>
                            <li class="lksm-trans" data-en="<i class='fas fa-check-circle'></i> Regional pricing tiers" data-si="<i class='fas fa-check-circle'></i> ප්‍රදේශ අනුව මිල මට්ටම්"><i class="fas fa-check-circle"></i> Regional pricing tiers</li>
                            <li class="lksm-trans" data-en="<i class='fas fa-check-circle'></i> Consolidated chain P&L" data-si="<i class='fas fa-check-circle'></i> ඒකාබද්ධ ලාභ-අලාභ වාර්තා"><i class="fas fa-check-circle"></i> Consolidated chain P&L</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FINAL CTA -->
    <section class="lksm-section bg-dark text-white text-center" style="background: #062b24 !important;">
        <div class="container">
            <h2 class="fw-bold mb-3 lksm-trans" data-en="Modernize Your Sri Lanka Supermarket & Retail Chain" data-si="ඔබේ සුපිරි වෙළඳසැල් ජාලය නවීකරණය කරන්න">Modernize Your Sri Lanka Supermarket & Retail Chain</h2>
            <p class="text-light opacity-75 max-w-700 mx-auto mb-4 lksm-trans"
                data-en="Eliminate inventory leakage, speed up cashier queues, and gain complete multi-store visibility with Digify Supermarket ERP."
                data-si="තොග කාන්දුවීම් වළක්වා, කැෂියර් පෝලිම් වේගවත් කර, සම්පූර්ණ බහු-වෙළඳසැල් දැක්ම Digify Supermarket ERP මඟින් ලබාගන්න.">
                Eliminate inventory leakage, speed up cashier queues, and gain complete multi-store visibility with Digify Supermarket ERP.
            </p>
            <div class="d-flex justify-content-center gap-3 flex-wrap">
                <a href="#demo-form" class="btn btn-lksm-primary px-4 py-3">
                    <i class="fas fa-calendar-check me-2"></i>
                    <span class="lksm-trans" data-en="Request Supermarket Demo" data-si="සුපර්මාර්කට් ඩෙමෝ එකක් ඉල්ලන්න">Request Supermarket Demo</span>
                </a>
                <a href="erp-software-sri-lanka.php" class="btn btn-lksm-outline px-4 py-3">
                    <i class="fas fa-arrow-left me-2"></i>
                    <span class="lksm-trans" data-en="View Main Sri Lanka ERP" data-si="ප්‍රධාන ශ්‍රී ලංකා ERP පිටුව">View Main Sri Lanka ERP</span>
                </a>
            </div>
        </div>
    </section>

</div>

<script>
function switchSmLang(lang) {
    var btnEn = document.getElementById('btnSmLangEn');
    var btnSi = document.getElementById('btnSmLangSi');
    
    localStorage.setItem('digify_lk_lang', lang);
    
    if (lang === 'si') {
        if (btnSi) btnSi.classList.add('active');
        if (btnEn) btnEn.classList.remove('active');
        document.querySelectorAll('.lksm-trans').forEach(function(el) {
            var siText = el.getAttribute('data-si');
            if (siText) { el.innerHTML = siText; }
        });
        document.querySelectorAll('.lksm-trans-ph').forEach(function(el) {
            var siPh = el.getAttribute('data-si-ph');
            if (siPh) { el.setAttribute('placeholder', siPh); }
        });
    } else {
        if (btnEn) btnEn.classList.add('active');
        if (btnSi) btnSi.classList.remove('active');
        document.querySelectorAll('.lksm-trans').forEach(function(el) {
            var enText = el.getAttribute('data-en');
            if (enText) { el.innerHTML = enText; }
        });
        document.querySelectorAll('.lksm-trans-ph').forEach(function(el) {
            var enPh = el.getAttribute('data-en-ph');
            if (enPh) { el.setAttribute('placeholder', enPh); }
        });
    }
}

document.addEventListener('DOMContentLoaded', function() {
    var savedLang = localStorage.getItem('digify_lk_lang');
    if (savedLang) {
        switchSmLang(savedLang);
    }
});
</script>

<?php include(__DIR__ . '/../../footer.php'); ?>
