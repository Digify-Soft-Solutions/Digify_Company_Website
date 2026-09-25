<?php 
include_once(__DIR__ . '/../../db.php');
include_once(__DIR__ . '/../../fetch_meta.php');

$pageTitle = "ERP Software in Nepal | Business Management & Accounting ERP";
$pageDescription = "Powerful ERP software in Nepal for retail, supermarkets, wholesale, tourism, hospitality, agriculture, manufacturing, construction, hydropower, trading, logistics and growing businesses.";
$pageKeywords = "ERP software Nepal, ERP software in Nepal, best ERP software Nepal, ERP system Nepal, business management software Nepal, cloud ERP Nepal, accounting software Nepal, inventory management software Nepal, POS software Nepal, retail ERP Nepal, supermarket ERP Nepal, wholesale ERP Nepal, distribution ERP Nepal, tourism ERP Nepal, hotel ERP Nepal, hospitality ERP Nepal, travel agency ERP Nepal, trekking ERP Nepal, agriculture ERP Nepal, tea ERP Nepal, food processing ERP Nepal, manufacturing ERP Nepal, hydropower ERP Nepal, construction ERP Nepal, logistics ERP Nepal, FMCG ERP Nepal, garment ERP Nepal, textile ERP Nepal, carpet ERP Nepal, pharmacy ERP Nepal, import export ERP Nepal, trading ERP Nepal, ecommerce ERP Nepal, multi branch ERP Nepal, business software Kathmandu, ERP software Kathmandu, ERP software Pokhara, ERP software Biratnagar, ERP software Birgunj";
$pageCanonical = "https://www.digifysoft.in/erp-software-nepal";

include(__DIR__ . '/../../top.php');
include(__DIR__ . '/../../header.php');
?>

<style>
/* Nepal Master Suite Design System */
.np-page-wrapper {
    font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
    color: #1e293b;
    overflow-x: hidden;
}

/* Hero Section */
.np-hero {
    background: linear-gradient(135deg, #090e1f 0%, #151a33 45%, #22122b 100%);
    color: #ffffff;
    padding: 70px 0 85px;
    position: relative;
    overflow: hidden;
    border-bottom: 4px solid #dc2626;
}
.np-hero::before {
    content: '';
    position: absolute;
    top: -15%;
    right: -10%;
    width: 680px;
    height: 680px;
    background: radial-gradient(circle, rgba(220, 38, 38, 0.25) 0%, rgba(245, 158, 11, 0.15) 50%, rgba(0, 0, 0, 0) 75%);
    border-radius: 50%;
    pointer-events: none;
}
.text-gradient-np {
    background: linear-gradient(135deg, #f87171 0%, #facc15 50%, #fb923c 100%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    display: inline-block;
}
.np-hero-badge {
    background: rgba(220, 38, 38, 0.18);
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
.np-hero h1 {
    font-size: 42px;
    font-weight: 900;
    line-height: 1.25;
    margin-bottom: 18px;
    letter-spacing: -0.5px;
}
.np-hero-sub {
    font-size: 18px;
    font-weight: 600;
    color: #fde047;
    line-height: 1.5;
    margin-bottom: 14px;
}
.np-hero-desc {
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
    background: linear-gradient(135deg, #dc2626 0%, #b91c1c 100%);
    color: #ffffff;
    box-shadow: 0 4px 12px rgba(220, 38, 38, 0.4);
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
.btn-np-primary {
    background: linear-gradient(135deg, #dc2626 0%, #b91c1c 100%);
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
    box-shadow: 0 10px 20px -5px rgba(220, 38, 38, 0.4);
    text-decoration: none;
}
.btn-np-primary:hover {
    background: linear-gradient(135deg, #b91c1c 0%, #991b1b 100%);
    color: #ffffff;
    transform: translateY(-2px);
}
.btn-np-outline {
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
.btn-np-outline:hover {
    background: rgba(255, 255, 255, 0.18);
    color: #ffffff;
    transform: translateY(-2px);
}

/* Section styling */
.np-section { padding: 75px 0; }
.bg-light-np { background-color: #f8fafc; }
.bg-dark-np { background: #090e1f; color: #ffffff; }
.section-badge-np {
    display: inline-block;
    background: #fef2f2;
    color: #dc2626;
    font-size: 12px;
    font-weight: 800;
    text-transform: uppercase;
    letter-spacing: 0.8px;
    padding: 6px 14px;
    border-radius: 20px;
    margin-bottom: 12px;
    border: 1px solid #fecaca;
}
.section-badge-np-dark {
    display: inline-block;
    background: rgba(220, 38, 38, 0.18);
    color: #fca5a5;
    font-size: 12px;
    font-weight: 800;
    text-transform: uppercase;
    letter-spacing: 0.8px;
    padding: 6px 14px;
    border-radius: 20px;
    margin-bottom: 12px;
    border: 1px solid rgba(248, 113, 113, 0.4);
}
.section-title-np {
    font-size: 34px;
    font-weight: 900;
    color: #0f172a;
    line-height: 1.3;
    margin-bottom: 16px;
    letter-spacing: -0.5px;
}
.section-title-np-dark {
    font-size: 34px;
    font-weight: 900;
    color: #ffffff;
    line-height: 1.3;
    margin-bottom: 16px;
    letter-spacing: -0.5px;
}
.section-sub-np {
    font-size: 16px;
    color: #64748b;
    max-width: 780px;
    margin: 0 auto 40px;
    line-height: 1.7;
}

/* Feature Cards & Grid */
.np-card {
    background: #ffffff;
    border: 1px solid #e2e8f0;
    border-radius: 16px;
    padding: 26px;
    transition: all 0.3s ease;
    height: 100%;
    display: flex;
    flex-direction: column;
}
.np-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 20px 30px -10px rgba(0, 0, 0, 0.08);
    border-color: #dc2626;
}
.np-card-icon {
    width: 52px;
    height: 52px;
    border-radius: 12px;
    background: #fef2f2;
    color: #dc2626;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 22px;
    margin-bottom: 20px;
}
.np-card h4 {
    font-size: 19px;
    font-weight: 800;
    margin-bottom: 10px;
    color: #0f172a;
}
.np-card p {
    font-size: 14px;
    color: #64748b;
    line-height: 1.6;
    margin-bottom: 18px;
    flex-grow: 1;
}

/* Industry Vertical Hub Card */
.np-vertical-card {
    background: #ffffff;
    border: 1px solid #e2e8f0;
    border-radius: 16px;
    padding: 24px;
    transition: all 0.3s ease;
    height: 100%;
    display: flex;
    flex-direction: column;
    text-decoration: none;
    color: inherit;
    position: relative;
    overflow: hidden;
}
.np-vertical-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 15px 30px rgba(220, 38, 38, 0.12);
    border-color: #dc2626;
    color: inherit;
}
.np-vertical-card::after {
    content: '';
    position: absolute;
    bottom: 0;
    left: 0;
    width: 0%;
    height: 4px;
    background: linear-gradient(135deg, #dc2626 0%, #f59e0b 100%);
    transition: width 0.3s ease;
}
.np-vertical-card:hover::after {
    width: 100%;
}
.np-vertical-icon {
    width: 48px;
    height: 48px;
    border-radius: 12px;
    background: #fef2f2;
    color: #dc2626;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 20px;
    margin-bottom: 16px;
}
.np-vertical-card h5 {
    font-size: 17px;
    font-weight: 800;
    color: #0f172a;
    margin-bottom: 8px;
}
.np-vertical-card p {
    font-size: 13px;
    color: #64748b;
    line-height: 1.5;
    margin-bottom: 14px;
    flex-grow: 1;
}
.np-vertical-link {
    font-size: 13px;
    font-weight: 700;
    color: #dc2626;
    display: inline-flex;
    align-items: center;
    gap: 6px;
}

/* Accordion */
.accordion-np .accordion-item {
    border: 1px solid #e2e8f0;
    border-radius: 12px !important;
    margin-bottom: 14px;
    overflow: hidden;
}
.accordion-np .accordion-button {
    font-size: 16px;
    font-weight: 700;
    color: #0f172a;
    padding: 20px 24px;
    background: #ffffff;
    box-shadow: none;
}
.accordion-np .accordion-button:not(.collapsed) {
    background: #fef2f2;
    color: #dc2626;
}
.accordion-np .accordion-body {
    font-size: 14px;
    line-height: 1.7;
    color: #475569;
    padding: 0 24px 20px;
}

/* City Pills */
.city-pill {
    background: #ffffff;
    border: 1px solid #e2e8f0;
    padding: 12px 20px;
    border-radius: 12px;
    font-weight: 700;
    font-size: 14px;
    color: #1e293b;
    display: inline-flex;
    align-items: center;
    gap: 10px;
    transition: all 0.25s ease;
}
.city-pill:hover {
    border-color: #dc2626;
    background: #fef2f2;
    color: #dc2626;
    transform: translateY(-2px);
}
</style>

<div class="np-page-wrapper">
    <!-- 1. HERO SECTION -->
    <section class="np-hero">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7 mb-4 mb-lg-0">
                    <div class="lang-toggle-bar">
                        <button type="button" class="lang-pill active" id="btn-lang-en" onclick="setNpLang('en')">
                            <i class="fa-solid fa-globe me-1"></i> English
                        </button>
                        <button type="button" class="lang-pill" id="btn-lang-np" onclick="setNpLang('np')">
                            🇳🇵 नेपाली (नेपाल)
                        </button>
                    </div>
                    <br>
                    <div class="np-hero-badge">
                        <span class="np-trans" data-en="🇳🇵 #1 Certified Cloud ERP & Business Suite in Nepal" data-np="🇳🇵 नेपालको #1 प्रमाणित क्लाउड ERP र व्यापार प्रणाली">🇳🇵 #1 Certified Cloud ERP & Business Suite in Nepal</span>
                    </div>
                    <h1 class="np-trans" 
                        data-en="ERP Software in Nepal for <span class='text-gradient-np'>Modern Business Management</span>"
                        data-np="आधुनिक व्यवसाय व्यवस्थापनका लागि <span class='text-gradient-np'>नेपालको #1 ERP सफ्टवेयर</span>">
                        ERP Software in Nepal for <span class="text-gradient-np">Modern Business Management</span>
                    </h1>
                    <div class="np-hero-sub np-trans"
                        data-en="Manage Your Nepal Business with One Powerful ERP Platform"
                        data-np="एउटै शक्तिशाली ERP प्लेटफर्मबाट आफ्नो सम्पूर्ण व्यवसाय व्यवस्थापन गर्नुहोस्">
                        Manage Your Nepal Business with One Powerful ERP Platform
                    </div>
                    <p class="np-hero-desc np-trans"
                        data-en="Digify Soft Solutions provides integrated business management software for businesses across Nepal. Manage sales, purchases, inventory, accounting, customers, suppliers, employees, branches, expenses and business reports from one centralized ERP platform."
                        data-np="डिजिफाई सफ्ट सोलुसन्सले नेपालभरका व्यवसायहरूका लागि एकीकृत व्यापार व्यवस्थापन सफ्टवेयर प्रदान गर्दछ। बिक्री, खरिद, मौज्दात (इन्भेन्टरी), लेखा, ग्राहक, आपूर्तिकर्ता, कर्मचारी, बहु-शाखा, खर्च र व्यावसायिक प्रतिवेदनहरू एउटै केन्द्रीकृत प्रणालीबाट व्यवस्थापन गर्नुहोस्।">
                        Digify Soft Solutions provides integrated business management software for businesses across Nepal. Manage sales, purchases, inventory, accounting, customers, suppliers, employees, branches, expenses and business reports from one centralized ERP platform.
                    </p>
                    <div class="d-flex flex-wrap gap-3">
                        <a href="javascript:void(0)" class="btn-np-primary" data-bs-toggle="modal" data-bs-target="#trialModal">
                            <i class="fa-solid fa-calendar-check"></i>
                            <span class="np-trans" data-en="Get a Free ERP Demo" data-np="निःशुल्क ERP डेमो लिनुहोस्">Get a Free ERP Demo</span>
                        </a>
                        <a href="#nepal-industries" class="btn-np-outline">
                            <i class="fa-solid fa-layer-group"></i>
                            <span class="np-trans" data-en="Explore 20+ Nepal Verticals" data-np="२०+ नेपाल उद्योग भर्टिकलहरू हेर्नुहोस्">Explore 20+ Nepal Verticals</span>
                        </a>
                    </div>
                </div>

                <!-- Right Hero Lead Card -->
                <div class="col-lg-5">
                    <div class="hero-lead-card">
                        <h3 class="np-trans" data-en="Request Nepal ERP Solution" data-np="नेपाल ERP समाधान अनुरोध गर्नुहोस्">Request Nepal ERP Solution</h3>
                        <p class="np-trans" data-en="Talk directly to our Nepal ERP deployment consultants." data-np="हाम्रा विशेषज्ञहरूसँग प्रत्यक्ष कुराकानी गरी निःशुल्क डेमो पाउनुहोस्।">Talk directly to our Nepal ERP deployment consultants.</p>
                        
                        <form action="send_mail.php" method="POST" id="nepalMasterLeadForm">
                            <input type="hidden" name="source" value="Nepal Master ERP Page">
                            <input type="hidden" name="country" value="Nepal">
                            <div class="mb-3">
                                <label class="form-label small fw-bold np-trans" data-en="Your Name" data-np="तपाईंको नाम">Your Name</label>
                                <input type="text" name="name" class="form-control" placeholder="Ram Bahadur Shrestha" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label small fw-bold np-trans" data-en="Company / Business Name" data-np="कम्पनी / फर्मको नाम">Company / Business Name</label>
                                <input type="text" name="company_name" class="form-control" placeholder="Nepal Enterprise Pvt. Ltd." required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label small fw-bold np-trans" data-en="WhatsApp / Mobile Number" data-np="ह्वाट्सएप / मोबाइल नम्बर">WhatsApp / Mobile Number</label>
                                <input type="tel" name="phone" class="form-control" placeholder="+977 98XXXXXXXX" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label small fw-bold np-trans" data-en="Industry / Sector" data-np="व्यवसायको क्षेत्र">Industry / Sector</label>
                                <select name="industry" class="form-select" required>
                                    <option value="Tourism & Hotel">Tourism & Hotel (होटल तथा पर्यटन)</option>
                                    <option value="Supermarket & Retail">Supermarket & Retail (सुपरमार्केट तथा रिटेल)</option>
                                    <option value="Wholesale & Distribution">Wholesale & Distribution (होलसेल तथा डिस्ट्रिब्युसन)</option>
                                    <option value="Trekking & Travel Agency">Trekking & Travel Agency (ट्रेकिङ तथा ट्राभल)</option>
                                    <option value="Agriculture & Tea">Agriculture & Tea (कृषि तथा चिया उद्योग)</option>
                                    <option value="Manufacturing & Production">Manufacturing (उत्पादन तथा उद्योग)</option>
                                    <option value="Hydropower & Energy">Hydropower & Energy (जलविद्युत आयोजना)</option>
                                    <option value="Construction & Hardware">Construction & Hardware (निर्माण तथा हार्डवेयर)</option>
                                    <option value="Logistics & Transport">Logistics & Transport (यातायात तथा ढुवानी)</option>
                                    <option value="Import & Trading">Import & Trading (आयात तथा ट्रेडिङ)</option>
                                    <option value="Carpet & Handicraft">Carpet & Handicraft (गलैँचा तथा हस्तकला)</option>
                                    <option value="Pharmacy & Healthcare">Pharmacy (फार्मेसी तथा स्वास्थ्य)</option>
                                    <option value="Other Industry">Other Industry (अन्य)</option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-np-primary w-100 py-3 mt-2">
                                <i class="fa-solid fa-paper-plane me-2"></i> <span class="np-trans" data-en="Talk to Our ERP Team" data-np="हाम्रो ERP टोलीसँग कुरा गर्नुहोस्">Talk to Our ERP Team</span>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 2. WHY ERP SOFTWARE FOR NEPAL SECTION -->
    <section class="np-section bg-light-np">
        <div class="container">
            <div class="text-center">
                <span class="section-badge-np np-trans" data-en="Economic Context" data-np="आर्थिक पृष्ठभूमि">Economic Context</span>
                <h2 class="section-title-np np-trans" 
                    data-en="🇳🇵 Why ERP Software is Essential for Nepal's Growing Economy"
                    data-np="🇳🇵 नेपालको बढ्दो अर्थतन्त्रका लागि ERP सफ्टवेयर किन अपरिहार्य छ?">
                    🇳🇵 Why ERP Software is Essential for Nepal's Growing Economy
                </h2>
                <p class="section-sub-np np-trans"
                    data-en="Nepal has a diverse business economy spanning agriculture, trade, tourism, manufacturing, construction, transportation, hospitality, retail and emerging digital businesses. Businesses operating across multiple stores, warehouses, suppliers, customers and locations need centralized visibility into their daily operations."
                    data-np="नेपालको अर्थतन्त्र कृषि, व्यापार, पर्यटन, उत्पादन, निर्माण, यातायात, आतिथ्य, रिटेल र डिजिटल व्यवसायहरूमा फैलिएको छ। धेरै शाखा, गोदाम, आपूर्तिकर्ता र ग्राहकहरूसँग काम गर्ने व्यवसायहरूलाई दैनिक कारोबारको पूर्ण नियन्त्रणका लागि केन्द्रीकृत प्रणाली आवश्यक छ।">
                    Nepal has a diverse business economy spanning agriculture, trade, tourism, manufacturing, construction, transportation, hospitality, retail and emerging digital businesses. Businesses operating across multiple stores, warehouses, suppliers, customers and locations need centralized visibility into their daily operations.
                </p>
            </div>

            <div class="row g-4">
                <div class="col-lg-4 col-md-6">
                    <div class="np-card">
                        <div class="np-card-icon"><i class="fa-solid fa-mountain-sun"></i></div>
                        <h4 class="np-trans" data-en="Tourism & Trade Engine" data-np="पर्यटन तथा व्यापार विस्तार">Tourism & Trade Engine</h4>
                        <p class="np-trans" 
                            data-en="Nepal's official Economic Survey highlights tourism, cross-border trade with India and China, and domestic distribution as the backbones of national commerce."
                            data-np="नेपालको आर्थिक सर्वेक्षणले पर्यटन, भारत र चीनसँगको सीमापार व्यापार, र आन्तरिक वितरणलाई वाणिज्यको मेरुदण्डको रूपमा पुष्टि गर्दछ।">
                            Nepal's official Economic Survey highlights tourism, cross-border trade with India and China, and domestic distribution as the backbones of national commerce.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="np-card">
                        <div class="np-card-icon"><i class="fa-solid fa-network-wired"></i></div>
                        <h4 class="np-trans" data-en="Multi-Location Godown Sync" data-np="बहु-गोदाम स्टक समन्वय">Multi-Location Godown Sync</h4>
                        <p class="np-trans" 
                            data-en="Coordinate central godowns in Birgunj, Kathmandu, Biratnagar, and Pokhara with real-time stock transfers, minimum balance alerts, and zero discrepancies."
                            data-np="वीरगञ्ज, काठमाडौं, विराटनगर र पोखराका मुख्य गोदामहरू बीच रीयल-टाइम स्टक ट्रान्सफर, न्यूनतम मौज्दात सूचना र त्रुटिरहित मिलान गर्नुहोस्।">
                            Coordinate central godowns in Birgunj, Kathmandu, Biratnagar, and Pokhara with real-time stock transfers, minimum balance alerts, and zero discrepancies.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="np-card">
                        <div class="np-card-icon"><i class="fa-solid fa-file-invoice-dollar"></i></div>
                        <h4 class="np-trans" data-en="PAN & VAT Accounting" data-np="PAN तथा भ्याट लेखा प्रणाली">PAN & VAT Accounting</h4>
                        <p class="np-trans" 
                            data-en="Designed to support organized Nepal business accounting, customer/supplier ledgers, transaction histories, and tax-related record-keeping workflows."
                            data-np="नेपाली व्यवसायहरूको व्यवस्थित लेखा, ग्राहक र आपूर्तिकर्ताको खाता, कारोबार इतिहास र करसम्बन्धी अभिलेख राख्नका लागि विशेष रूपमा तयार पारिएको।">
                            Designed to support organized Nepal business accounting, customer/supplier ledgers, transaction histories, and tax-related record-keeping workflows.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 3. NEPAL MAIN INDUSTRIES GRID (20+ DEDICATED VERTICALS) -->
    <section class="np-section bg-white" id="nepal-industries">
        <div class="container">
            <div class="text-center">
                <span class="section-badge-np np-trans" data-en="Dedicated Landing Pages" data-np="समर्पित उद्योग पृष्ठहरू">Dedicated Landing Pages</span>
                <h2 class="section-title-np np-trans"
                    data-en="🔥 20+ Dedicated Nepal Industry ERP Solutions"
                    data-np="🔥 नेपालका २०+ मुख्य उद्योगहरूका लागि समर्पित ERP समाधानहरू">
                    🔥 20+ Dedicated Nepal Industry ERP Solutions
                </h2>
                <p class="section-sub-np np-trans"
                    data-en="Each sector in Nepal requires specialized workflow logic. Explore our tailored ERP modules engineered for your specific business vertical:"
                    data-np="नेपालका प्रत्येक व्यावसायिक क्षेत्रका आफ्नै आवश्यकताहरू हुन्छन्। आफ्नो उद्योग अनुसारको विशेष ERP मोड्युलहरू हेर्नुहोस्:">
                    Each sector in Nepal requires specialized workflow logic. Explore our tailored ERP modules engineered for your specific business vertical:
                </p>
            </div>

            <div class="row g-3 g-md-4">
                <!-- 1. Tourism & Hospitality -->
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <a href="tourism-erp-software-nepal.php" class="np-vertical-card">
                        <div class="np-vertical-icon"><i class="fa-solid fa-hotel"></i></div>
                        <h5 class="np-trans" data-en="Tourism & Hospitality ERP" data-np="पर्यटन तथा होटल ERP">Tourism & Hospitality ERP</h5>
                        <p class="np-trans" data-en="Hotels, resorts, lodges, homestays, and F&B operations." data-np="होटल, रिसोर्ट, लज, होमस्टे र रेस्टुरेन्ट व्यवस्थापन।">Hotels, resorts, lodges, homestays, and F&B operations.</p>
                        <span class="np-vertical-link"><span class="np-trans" data-en="View Suite" data-np="विवरण हेर्नुहोस्">View Suite</span> <i class="fa-solid fa-arrow-right"></i></span>
                    </a>
                </div>

                <!-- 2. Hotel & Resort -->
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <a href="hotel-erp-software-nepal.php" class="np-vertical-card">
                        <div class="np-vertical-icon"><i class="fa-solid fa-building"></i></div>
                        <h5 class="np-trans" data-en="Hotel & Resort ERP" data-np="होटल तथा रिसोर्ट ERP">Hotel & Resort ERP</h5>
                        <p class="np-trans" data-en="Multi-property guest profiles, restaurant POS, and staff." data-np="होटल बिलिङ, रेस्टुरेन्ट POS, इन्भेन्टरी र कर्मचारी तलब।">Multi-property guest profiles, restaurant POS, and staff.</p>
                        <span class="np-vertical-link"><span class="np-trans" data-en="View Suite" data-np="विवरण हेर्नुहोस्">View Suite</span> <i class="fa-solid fa-arrow-right"></i></span>
                    </a>
                </div>

                <!-- 3. Trekking & Travel Agency -->
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <a href="trekking-travel-erp-software-nepal.php" class="np-vertical-card">
                        <div class="np-vertical-icon"><i class="fa-solid fa-person-hiking"></i></div>
                        <h5 class="np-trans" data-en="Trekking & Travel Agency ERP" data-np="ट्रेकिङ तथा ट्राभल ERP">Trekking & Travel Agency ERP</h5>
                        <p class="np-trans" data-en="Tour packages, guide settlements, client passports, and FX." data-np="टुर प्याकेज, गाइड भुक्तानी, क्लाइन्ट रेकर्ड र विदेशी मुद्रा।">Tour packages, guide settlements, client passports, and FX.</p>
                        <span class="np-vertical-link"><span class="np-trans" data-en="View Suite" data-np="विवरण हेर्नुहोस्">View Suite</span> <i class="fa-solid fa-arrow-right"></i></span>
                    </a>
                </div>

                <!-- 4. Supermarket ERP -->
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <a href="supermarket-erp-software-nepal.php" class="np-vertical-card">
                        <div class="np-vertical-icon"><i class="fa-solid fa-cart-shopping"></i></div>
                        <h5 class="np-trans" data-en="Supermarket & Mart ERP" data-np="सुपरमार्केट तथा मार्ट ERP">Supermarket & Mart ERP</h5>
                        <p class="np-trans" data-en="3-sec barcode POS, digital weighing scales, and expiry FIFO." data-np="३-सेकेन्ड बारकोड बिलिङ, डिजिटल तराजु र एक्सपायरी नियन्त्रण।">3-sec barcode POS, digital weighing scales, and expiry FIFO.</p>
                        <span class="np-vertical-link"><span class="np-trans" data-en="View Suite" data-np="विवरण हेर्नुहोस्">View Suite</span> <i class="fa-solid fa-arrow-right"></i></span>
                    </a>
                </div>

                <!-- 5. Retail ERP -->
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <a href="retail-erp-software-nepal.php" class="np-vertical-card">
                        <div class="np-vertical-icon"><i class="fa-solid fa-store"></i></div>
                        <h5 class="np-trans" data-en="Retail & Store ERP" data-np="रिटेल तथा पसल ERP">Retail & Store ERP</h5>
                        <p class="np-trans" data-en="Clothing, shoes, hardware, cosmetics, and offline POS." data-np="कपडा, जुत्ता, कस्मेटिक्स र अफलाइन POS बिलिङ।">Clothing, shoes, hardware, cosmetics, and offline POS.</p>
                        <span class="np-vertical-link"><span class="np-trans" data-en="View Suite" data-np="विवरण हेर्नुहोस्">View Suite</span> <i class="fa-solid fa-arrow-right"></i></span>
                    </a>
                </div>

                <!-- 6. Wholesale & Distribution -->
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <a href="wholesale-erp-software-nepal.php" class="np-vertical-card">
                        <div class="np-vertical-icon"><i class="fa-solid fa-truck-ramp-box"></i></div>
                        <h5 class="np-trans" data-en="Wholesale & B2B Trading ERP" data-np="थोक तथा B2B ट्रेडिङ ERP">Wholesale & B2B Trading ERP</h5>
                        <p class="np-trans" data-en="Tiered dealer pricing, credit limits, and godown transfers." data-np="डिलर क्रेडिट सीमा, गोदाम ट्रान्सफर र थोक बिलिङ।">Tiered dealer pricing, credit limits, and godown transfers.</p>
                        <span class="np-vertical-link"><span class="np-trans" data-en="View Suite" data-np="विवरण हेर्नुहोस्">View Suite</span> <i class="fa-solid fa-arrow-right"></i></span>
                    </a>
                </div>

                <!-- 7. Distribution ERP -->
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <a href="distribution-erp-software-nepal.php" class="np-vertical-card">
                        <div class="np-vertical-icon"><i class="fa-solid fa-dolly"></i></div>
                        <h5 class="np-trans" data-en="Distribution & Supply Chain ERP" data-np="डिस्ट्रिब्युसन तथा सप्लाई चेन ERP">Distribution & Supply Chain ERP</h5>
                        <p class="np-trans" data-en="Van sales, regional depots, and salesman tracking." data-np="भ्यान सेल्स, क्षेत्रीय डिपो र सेल्सम्यान ट्र्याकिङ।">Van sales, regional depots, and salesman tracking.</p>
                        <span class="np-vertical-link"><span class="np-trans" data-en="View Suite" data-np="विवरण हेर्नुहोस्">View Suite</span> <i class="fa-solid fa-arrow-right"></i></span>
                    </a>
                </div>

                <!-- 8. FMCG ERP -->
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <a href="fmcg-erp-software-nepal.php" class="np-vertical-card">
                        <div class="np-vertical-icon"><i class="fa-solid fa-bottle-water"></i></div>
                        <h5 class="np-trans" data-en="FMCG & Consumer Goods ERP" data-np="FMCG तथा उपभोक्ता वस्तु ERP">FMCG & Consumer Goods ERP</h5>
                        <p class="np-trans" data-en="Packaged foods, beverages, dealer schemes, and batches." data-np="खाद्य, पेय पदार्थ, व्यापारिक स्किम र ब्याच नियन्त्रण।">Packaged foods, beverages, dealer schemes, and batches.</p>
                        <span class="np-vertical-link"><span class="np-trans" data-en="View Suite" data-np="विवरण हेर्नुहोस्">View Suite</span> <i class="fa-solid fa-arrow-right"></i></span>
                    </a>
                </div>

                <!-- 9. Agriculture ERP -->
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <a href="agriculture-erp-software-nepal.php" class="np-vertical-card">
                        <div class="np-vertical-icon"><i class="fa-solid fa-seedling"></i></div>
                        <h5 class="np-trans" data-en="Agriculture & Agribusiness ERP" data-np="कृषि तथा एग्रोबिजनेस ERP">Agriculture & Agribusiness ERP</h5>
                        <p class="np-trans" data-en="Farms, seed/fertilizer stock, cold storage, and mandis." data-np="कृषि फार्म, बीउ-मल, शीतभण्डार र मन्डी व्यवस्थापन।">Farms, seed/fertilizer stock, cold storage, and mandis.</p>
                        <span class="np-vertical-link"><span class="np-trans" data-en="View Suite" data-np="विवरण हेर्नुहोस्">View Suite</span> <i class="fa-solid fa-arrow-right"></i></span>
                    </a>
                </div>

                <!-- 10. Tea Business ERP -->
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <a href="tea-erp-software-nepal.php" class="np-vertical-card">
                        <div class="np-vertical-icon"><i class="fa-solid fa-mug-hot"></i></div>
                        <h5 class="np-trans" data-en="Tea Estate & Processing ERP" data-np="चिया बगान तथा प्रशोधन ERP">Tea Estate & Processing ERP</h5>
                        <p class="np-trans" data-en="Ilam orthodox & CTC processing, blending, and export." data-np="इलाम चिया बगान, सिटिसी/अर्थोडक्स प्रशोधन र निर्यात।">Ilam orthodox & CTC processing, blending, and export.</p>
                        <span class="np-vertical-link"><span class="np-trans" data-en="View Suite" data-np="विवरण हेर्नुहोस्">View Suite</span> <i class="fa-solid fa-arrow-right"></i></span>
                    </a>
                </div>

                <!-- 11. Food Processing ERP -->
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <a href="food-processing-erp-software-nepal.php" class="np-vertical-card">
                        <div class="np-vertical-icon"><i class="fa-solid fa-utensils"></i></div>
                        <h5 class="np-trans" data-en="Food Processing & Mills ERP" data-np="खाद्य प्रशोधन तथा मिल ERP">Food Processing & Mills ERP</h5>
                        <p class="np-trans" data-en="Bakeries, dairy plants, spice grinding, and rice mills." data-np="बेकरी, डेरी, मसला तथा चामल मिल उत्पादन व्यवस्थापन।">Bakeries, dairy plants, spice grinding, and rice mills.</p>
                        <span class="np-vertical-link"><span class="np-trans" data-en="View Suite" data-np="विवरण हेर्नुहोस्">View Suite</span> <i class="fa-solid fa-arrow-right"></i></span>
                    </a>
                </div>

                <!-- 12. Manufacturing ERP -->
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <a href="manufacturing-erp-software-nepal.php" class="np-vertical-card">
                        <div class="np-vertical-icon"><i class="fa-solid fa-industry"></i></div>
                        <h5 class="np-trans" data-en="Manufacturing & Factory ERP" data-np="उत्पादन तथा फ्याक्ट्री ERP">Manufacturing & Factory ERP</h5>
                        <p class="np-trans" data-en="Multi-level BOM, machine routing, and factory costing." data-np="कच्चा पदार्थ, BOM, मेसिन संचालन र उत्पादन लागत।">Multi-level BOM, machine routing, and factory costing.</p>
                        <span class="np-vertical-link"><span class="np-trans" data-en="View Suite" data-np="विवरण हेर्नुहोस्">View Suite</span> <i class="fa-solid fa-arrow-right"></i></span>
                    </a>
                </div>

                <!-- 13. Hydropower & Energy ERP -->
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <a href="hydropower-erp-software-nepal.php" class="np-vertical-card">
                        <div class="np-vertical-icon"><i class="fa-solid fa-bolt"></i></div>
                        <h5 class="np-trans" data-en="Hydropower & Energy ERP" data-np="जलविद्युत तथा ऊर्जा ERP">Hydropower & Energy ERP</h5>
                        <p class="np-trans" data-en="Plant assets, turbine spares, site procurement, and CAPEX." data-np="मेसिनरी, स्पेयर पार्ट्स, साइट खरिद र बजेट नियन्त्रण।">Plant assets, turbine spares, site procurement, and CAPEX.</p>
                        <span class="np-vertical-link"><span class="np-trans" data-en="View Suite" data-np="विवरण हेर्नुहोस्">View Suite</span> <i class="fa-solid fa-arrow-right"></i></span>
                    </a>
                </div>

                <!-- 14. Construction ERP -->
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <a href="construction-erp-software-nepal.php" class="np-vertical-card">
                        <div class="np-vertical-icon"><i class="fa-solid fa-trowel-bricks"></i></div>
                        <h5 class="np-trans" data-en="Construction & Project ERP" data-np="निर्माण तथा आयोजना ERP">Construction & Project ERP</h5>
                        <p class="np-trans" data-en="Site materials, cement/steel logs, and subcontractor bills." data-np="सिमेन्ट/रड मौज्दात, मेसिनरी डिजेल र ठेकेदार बिलिङ।">Site materials, cement/steel logs, and subcontractor bills.</p>
                        <span class="np-vertical-link"><span class="np-trans" data-en="View Suite" data-np="विवरण हेर्नुहोस्">View Suite</span> <i class="fa-solid fa-arrow-right"></i></span>
                    </a>
                </div>

                <!-- 15. Building Material ERP -->
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <a href="building-material-erp-software-nepal.php" class="np-vertical-card">
                        <div class="np-vertical-icon"><i class="fa-solid fa-warehouse"></i></div>
                        <h5 class="np-trans" data-en="Building Material & Hardware" data-np="निर्माण सामग्री तथा हार्डवेयर">Building Material & Hardware</h5>
                        <p class="np-trans" data-en="TMT steel tons, cement bags, sanitaryware, and paints." data-np="स्टिल टन रूपान्तरण, सिमेन्ट बोरा र कन्ट्र्याक्टर उधारो।">TMT steel tons, cement bags, sanitaryware, and paints.</p>
                        <span class="np-vertical-link"><span class="np-trans" data-en="View Suite" data-np="विवरण हेर्नुहोस्">View Suite</span> <i class="fa-solid fa-arrow-right"></i></span>
                    </a>
                </div>

                <!-- 16. Logistics ERP -->
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <a href="logistics-erp-software-nepal.php" class="np-vertical-card">
                        <div class="np-vertical-icon"><i class="fa-solid fa-truck-fast"></i></div>
                        <h5 class="np-trans" data-en="Logistics & Transport ERP" data-np="यातायात तथा ढुवानी ERP">Logistics & Transport ERP</h5>
                        <p class="np-trans" data-en="Consignment notes (Bilty), trip fuel, and driver advances." data-np="बिल्टी (Bilty), ट्रिप डिजेल खर्च र चालक भुक्तानी।">Consignment notes (Bilty), trip fuel, and driver advances.</p>
                        <span class="np-vertical-link"><span class="np-trans" data-en="View Suite" data-np="विवरण हेर्नुहोस्">View Suite</span> <i class="fa-solid fa-arrow-right"></i></span>
                    </a>
                </div>

                <!-- 17. Import & Export ERP -->
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <a href="import-export-erp-software-nepal.php" class="np-vertical-card">
                        <div class="np-vertical-icon"><i class="fa-solid fa-earth-americas"></i></div>
                        <h5 class="np-trans" data-en="Import & Export ERP" data-np="आयात-निर्यात ERP">Import & Export ERP</h5>
                        <p class="np-trans" data-en="Customs landed costs, border dry ports, and LC records." data-np="भन्सार खर्च, ल्यान्डिङ कस्ट र LC व्यवस्थापन।">Customs landed costs, border dry ports, and LC records.</p>
                        <span class="np-vertical-link"><span class="np-trans" data-en="View Suite" data-np="विवरण हेर्नुहोस्">View Suite</span> <i class="fa-solid fa-arrow-right"></i></span>
                    </a>
                </div>

                <!-- 18. Trading ERP -->
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <a href="trading-erp-software-nepal.php" class="np-vertical-card">
                        <div class="np-vertical-icon"><i class="fa-solid fa-handshake"></i></div>
                        <h5 class="np-trans" data-en="Trading Business ERP" data-np="व्यापार तथा ट्रेडिङ ERP">Trading Business ERP</h5>
                        <p class="np-trans" data-en="Commercial orders, supplier ledgers, and credit control." data-np="अर्डर व्यवस्थापन, आपूर्तिकर्ता खाता र नाफा विश्लेषण।">Commercial orders, supplier ledgers, and credit control.</p>
                        <span class="np-vertical-link"><span class="np-trans" data-en="View Suite" data-np="विवरण हेर्नुहोस्">View Suite</span> <i class="fa-solid fa-arrow-right"></i></span>
                    </a>
                </div>

                <!-- 19. Garment & Apparel -->
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <a href="garment-erp-software-nepal.php" class="np-vertical-card">
                        <div class="np-vertical-icon"><i class="fa-solid fa-shirt"></i></div>
                        <h5 class="np-trans" data-en="Garment & Apparel ERP" data-np="गार्मेन्ट तथा कपडा ERP">Garment & Apparel ERP</h5>
                        <p class="np-trans" data-en="Size/color matrix, cut-to-pack, and trims inventory." data-np="साइज/रङ्ग म्याट्रिक्स, सिलाई उत्पादन र थोक चालान।">Size/color matrix, cut-to-pack, and trims inventory.</p>
                        <span class="np-vertical-link"><span class="np-trans" data-en="View Suite" data-np="विवरण हेर्नुहोस्">View Suite</span> <i class="fa-solid fa-arrow-right"></i></span>
                    </a>
                </div>

                <!-- 20. Textile Mills -->
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <a href="textile-erp-software-nepal.php" class="np-vertical-card">
                        <div class="np-vertical-icon"><i class="fa-solid fa-rug"></i></div>
                        <h5 class="np-trans" data-en="Textile Mills & Weaving ERP" data-np="टेक्सटाइल तथा कपडा मिल ERP">Textile Mills & Weaving ERP</h5>
                        <p class="np-trans" data-en="Yarn lot cones, weaving looms, and fabric than (थान)." data-np="धागो इन्भेन्टरी, तान बुनाई र कपडा थान व्यवस्थापन।">Yarn lot cones, weaving looms, and fabric than (थान).</p>
                        <span class="np-vertical-link"><span class="np-trans" data-en="View Suite" data-np="विवरण हेर्नुहोस्">View Suite</span> <i class="fa-solid fa-arrow-right"></i></span>
                    </a>
                </div>

                <!-- 21. Carpet & Handicraft -->
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <a href="carpet-handicraft-erp-software-nepal.php" class="np-vertical-card">
                        <div class="np-vertical-icon"><i class="fa-solid fa-brush"></i></div>
                        <h5 class="np-trans" data-en="Carpet & Handicraft ERP" data-np="गलैँचा तथा हस्तकला ERP">Carpet & Handicraft ERP</h5>
                        <p class="np-trans" data-en="Tibetan wool blends, artisan piece wages, and export." data-np="तिब्बती ऊन, कालिगढ ज्याला र निर्यात डकुमेन्टेसन।">Tibetan wool blends, artisan piece wages, and export.</p>
                        <span class="np-vertical-link"><span class="np-trans" data-en="View Suite" data-np="विवरण हेर्नुहोस्">View Suite</span> <i class="fa-solid fa-arrow-right"></i></span>
                    </a>
                </div>

                <!-- 22. Pharmacy ERP -->
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <a href="pharmacy-erp-software-nepal.php" class="np-vertical-card">
                        <div class="np-vertical-icon"><i class="fa-solid fa-pills"></i></div>
                        <h5 class="np-trans" data-en="Pharmacy & Chemist ERP" data-np="फार्मेसी तथा औषधि पसल ERP">Pharmacy & Chemist ERP</h5>
                        <p class="np-trans" data-en="Drug batch numbers, expiry alerts, and DDA records." data-np="औषधि ब्याच, एक्सपायरी मिति र जेनेरिक खोज।">Drug batch numbers, expiry alerts, and DDA records.</p>
                        <span class="np-vertical-link"><span class="np-trans" data-en="View Suite" data-np="विवरण हेर्नुहोस्">View Suite</span> <i class="fa-solid fa-arrow-right"></i></span>
                    </a>
                </div>

                <!-- 23. Electronics & Mobile -->
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <a href="electronics-erp-software-nepal.php" class="np-vertical-card">
                        <div class="np-vertical-icon"><i class="fa-solid fa-mobile-screen"></i></div>
                        <h5 class="np-trans" data-en="Electronics & Mobile ERP" data-np="इलेक्ट्रोनिक्स तथा मोबाइल ERP">Electronics & Mobile ERP</h5>
                        <p class="np-trans" data-en="IMEI scanning, serial warranties, and repair tickets." data-np="IMEI ट्र्याकिङ, वारेन्टी कार्ड र मर्मत सेवा।">IMEI scanning, serial warranties, and repair tickets.</p>
                        <span class="np-vertical-link"><span class="np-trans" data-en="View Suite" data-np="विवरण हेर्नुहोस्">View Suite</span> <i class="fa-solid fa-arrow-right"></i></span>
                    </a>
                </div>

                <!-- 24. E-Commerce ERP -->
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <a href="ecommerce-erp-software-nepal.php" class="np-vertical-card">
                        <div class="np-vertical-icon"><i class="fa-solid fa-globe"></i></div>
                        <h5 class="np-trans" data-en="E-Commerce & Online Store ERP" data-np="ई-कमर्स तथा अनलाइन अर्डर ERP">E-Commerce & Online Store ERP</h5>
                        <p class="np-trans" data-en="Daraz orders, social commerce, and courier COD settlement." data-np="दराज अर्डर, अनलाइन स्टोर र कुरियर COD मिलान।">Daraz orders, social commerce, and courier COD settlement.</p>
                        <span class="np-vertical-link"><span class="np-trans" data-en="View Suite" data-np="विवरण हेर्नुहोस्">View Suite</span> <i class="fa-solid fa-arrow-right"></i></span>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- 4. NEPAL TAX & FINANCIAL RECORD MANAGEMENT SECTION -->
    <section class="np-section bg-light-np">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <span class="section-badge-np np-trans" data-en="Tax & Regulatory" data-np="कर तथा वित्तीय व्यवस्थापन">Tax & Regulatory</span>
                    <h2 class="section-title-np np-trans"
                        data-en="Nepal Tax & Financial Record Management"
                        data-np="नेपालको कर तथा वित्तीय अभिलेख व्यवस्थापन">
                        Nepal Tax & Financial Record Management
                    </h2>
                    <p class="text-muted np-trans" style="line-height: 1.8; font-size: 15px;"
                        data-en="Manage organized sales, purchase, expense and financial records to support your accounting and tax-related business workflows. Maintain customer and supplier records, transaction histories, sales records, purchase records and business financial information from one centralized system."
                        data-np="आफ्नो लेखा र करसम्बन्धी व्यापारिक प्रक्रियालाई सहज बनाउन बिक्री, खरिद, खर्च र वित्तीय अभिलेखहरू व्यवस्थित तरिकाले व्यवस्थापन गर्नुहोस्। ग्राहक र आपूर्तिकर्ताको विवरण, कारोबार इतिहास, बिक्री र खरिदका खाताहरू एउटै केन्द्रीकृत प्रणालीबाट सञ्चालन गर्नुहोस्।">
                        Manage organized sales, purchase, expense and financial records to support your accounting and tax-related business workflows. Maintain customer and supplier records, transaction histories, sales records, purchase records and business financial information from one centralized system.
                    </p>
                    
                    <div class="p-3 mb-3 bg-white rounded-3 border-start border-4 border-danger shadow-sm">
                        <p class="mb-0 small text-muted np-trans"
                            data-en="<strong class='text-dark'>Regulatory Note:</strong> Nepal's Inland Revenue Department administers PAN and VAT across business transactions, invoices, books and tax-related documents. Nepal's VAT framework also provides for electronic invoicing workflows and Central Billing Monitoring System (CBMS) compatibility."
                            data-np="<strong class='text-dark'>कर नियम नोट:</strong> नेपालको आन्तरिक राजस्व विभागले सबै व्यापारिक कारोबार, बिल, खाता र कर कागजातहरूमा स्थायी लेखा नम्बर (PAN) र मूल्य अभिवृद्धि कर (VAT) अनिवार्य गरेको छ। नेपालको भ्याट प्रणालीमा विद्युतीय बिलिङ तथा CBMS अनुकूल अभिलेख व्यवस्थापन समावेश छ।">
                            <strong class="text-dark">Regulatory Note:</strong> Nepal's Inland Revenue Department administers PAN and VAT across business transactions, invoices, books and tax-related documents. Nepal's VAT framework also provides for electronic invoicing workflows and Central Billing Monitoring System (CBMS) compatibility.
                        </p>
                    </div>

                    <div class="p-3 bg-white rounded-3 border-start border-4 border-warning shadow-sm">
                        <p class="mb-0 small text-muted np-trans"
                            data-en="<strong class='text-dark'>Compliance Architecture:</strong> Designed to support organized Nepal business accounting, tax-related record-keeping, audit trails, and financial statements."
                            data-np="<strong class='text-dark'>लेखा प्रणाली संरचना:</strong> नेपाली व्यवसायहरूको व्यवस्थित लेखा, कर अभिलेख, लेखापरीक्षण प्रमाण र वित्तीय विवरणहरू तयार पार्न विशेष रूपमा बनाइएको।">
                            <strong class="text-dark">Compliance Architecture:</strong> Designed to support organized Nepal business accounting, tax-related record-keeping, audit trails, and financial statements.
                        </p>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="row g-3">
                        <div class="col-sm-6">
                            <div class="p-4 bg-white rounded-3 border h-100 shadow-sm">
                                <i class="fa-solid fa-file-invoice text-danger fs-3 mb-3"></i>
                                <h5 class="fw-bold np-trans" data-en="PAN & VAT Records" data-np="PAN र भ्याट विवरण">PAN & VAT Records</h5>
                                <p class="small text-muted mb-0 np-trans"
                                    data-en="Record customer & supplier PAN numbers on every transaction invoice and purchase bill."
                                    data-np="प्रत्येक बिक्री बिल र खरिद बिलमा ग्राहक तथा आपूर्तिकर्ताको PAN नम्बर स्वचालित रूपमा अभिलेख गर्नुहोस्।">
                                    Record customer & supplier PAN numbers on every transaction invoice and purchase bill.
                                </p>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="p-4 bg-white rounded-3 border h-100 shadow-sm">
                                <i class="fa-solid fa-calculator text-danger fs-3 mb-3"></i>
                                <h5 class="fw-bold np-trans" data-en="13% VAT Calculation" data-np="१३% भ्याट गणना">13% VAT Calculation</h5>
                                <p class="small text-muted mb-0 np-trans"
                                    data-en="Automated calculation of standard 13% VAT, zero-rated exports, and VAT-exempt goods."
                                    data-np="मानक १३% भ्याट, शून्य दरको निर्यात र भ्याट छुट वस्तुहरूको स्वचालित हिसाब।">
                                    Automated calculation of standard 13% VAT, zero-rated exports, and VAT-exempt goods.
                                </p>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="p-4 bg-white rounded-3 border h-100 shadow-sm">
                                <i class="fa-solid fa-book-bookmark text-danger fs-3 mb-3"></i>
                                <h5 class="fw-bold np-trans" data-en="Purchase & Sales Registers" data-np="खरिद तथा बिक्री खाता">Purchase & Sales Registers</h5>
                                <p class="small text-muted mb-0 np-trans"
                                    data-en="Organized monthly purchase registers and sales books ready for audit export."
                                    data-np="लेखापरीक्षणका लागि तयार पारिएका मासिक खरिद खाता र बिक्री खाता प्रतिवेदनहरू।">
                                    Organized monthly purchase registers and sales books ready for audit export.
                                </p>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="p-4 bg-white rounded-3 border h-100 shadow-sm">
                                <i class="fa-solid fa-qrcode text-danger fs-3 mb-3"></i>
                                <h5 class="fw-bold np-trans" data-en="Dynamic QR Receipts" data-np="फोनपे तथा QR रसिद">Dynamic QR Receipts</h5>
                                <p class="small text-muted mb-0 np-trans"
                                    data-en="Thermal receipts with invoice breakdown, PAN details, and instant Fonepay QR prompts."
                                    data-np="PAN विवरण, बिलको हिसाब र तत्काल Fonepay QR सहितको आधुनिक थर्मल प्रिन्टिङ रसिद।">
                                    Thermal receipts with invoice breakdown, PAN details, and instant Fonepay QR prompts.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 5. FULL ERP MODULES BREAKDOWN -->
    <section class="np-section bg-white">
        <div class="container">
            <div class="text-center">
                <span class="section-badge-np np-trans" data-en="Enterprise Architecture" data-np="पूर्ण मोड्युलहरू">Enterprise Architecture</span>
                <h2 class="section-title-np np-trans"
                    data-en="Comprehensive Core ERP Modules for Nepal"
                    data-np="नेपालका लागि पूर्ण एकीकृत Core ERP मोड्युलहरू">
                    Comprehensive Core ERP Modules for Nepal
                </h2>
                <p class="section-sub-np np-trans"
                    data-en="Everything your growing enterprise needs to eliminate friction across accounting, inventory, customers, branches, and analytics."
                    data-np="लेखा, इन्भेन्टरी, ग्राहक, शाखा र विश्लेषणमा हुने सबै झन्झटहरू हटाउन चाहिने सबै सुविधाहरू:">
                    Everything your growing enterprise needs to eliminate friction across accounting, inventory, customers, branches, and analytics.
                </p>
            </div>

            <div class="row g-4">
                <!-- Module 1: Accounting -->
                <div class="col-lg-4 col-md-6">
                    <div class="np-card">
                        <div class="np-card-icon"><i class="fa-solid fa-coins"></i></div>
                        <h4 class="np-trans" data-en="Accounting & Financials" data-np="लेखा तथा वित्तीय व्यवस्थापन">Accounting & Financials</h4>
                        <ul class="list-unstyled small text-muted" style="line-height: 2;">
                            <li class="np-trans" data-en="<i class='fa-solid fa-check text-danger me-2'></i> Income & Expense Management" data-np="<i class='fa-solid fa-check text-danger me-2'></i> आम्दानी तथा खर्च व्यवस्थापन"><i class="fa-solid fa-check text-danger me-2"></i> Income & Expense Management</li>
                            <li class="np-trans" data-en="<i class='fa-solid fa-check text-danger me-2'></i> Accounts Receivable & Payable" data-np="<i class='fa-solid fa-check text-danger me-2'></i> लिनुपर्ने (उधारो) र दिनुपर्ने रकमको हिसाब"><i class="fa-solid fa-check text-danger me-2"></i> Accounts Receivable & Payable</li>
                            <li class="np-trans" data-en="<i class='fa-solid fa-check text-danger me-2'></i> Customer & Supplier Ledgers" data-np="<i class='fa-solid fa-check text-danger me-2'></i> ग्राहक र आपूर्तिकर्ताको व्यक्तिगत खाता"><i class="fa-solid fa-check text-danger me-2"></i> Customer & Supplier Ledgers</li>
                            <li class="np-trans" data-en="<i class='fa-solid fa-check text-danger me-2'></i> Cash & Bank Reconciliation" data-np="<i class='fa-solid fa-check text-danger me-2'></i> नगद तथा बैंक खाता मिलान"><i class="fa-solid fa-check text-danger me-2"></i> Cash & Bank Reconciliation</li>
                            <li class="np-trans" data-en="<i class='fa-solid fa-check text-danger me-2'></i> Balance Sheet & P&L Statements" data-np="<i class='fa-solid fa-check text-danger me-2'></i> वासलात (Balance Sheet) र नाफा-नोक्सान विवरण"><i class="fa-solid fa-check text-danger me-2"></i> Balance Sheet & P&L Statements</li>
                        </ul>
                    </div>
                </div>

                <!-- Module 2: CRM -->
                <div class="col-lg-4 col-md-6">
                    <div class="np-card">
                        <div class="np-card-icon"><i class="fa-solid fa-users"></i></div>
                        <h4 class="np-trans" data-en="CRM & Customer Growth" data-np="ग्राहक सम्बन्ध (CRM) मोड्युल">CRM & Customer Growth</h4>
                        <ul class="list-unstyled small text-muted" style="line-height: 2;">
                            <li class="np-trans" data-en="<i class='fa-solid fa-check text-danger me-2'></i> Comprehensive Customer Profiles" data-np="<i class='fa-solid fa-check text-danger me-2'></i> विस्तृत ग्राहक प्रोफाइल र विवरण"><i class="fa-solid fa-check text-danger me-2"></i> Comprehensive Customer Profiles</li>
                            <li class="np-trans" data-en="<i class='fa-solid fa-check text-danger me-2'></i> Complete Sales & Order Histories" data-np="<i class='fa-solid fa-check text-danger me-2'></i> सम्पूर्ण बिक्री तथा अर्डर इतिहास"><i class="fa-solid fa-check text-danger me-2"></i> Complete Sales & Order Histories</li>
                            <li class="np-trans" data-en="<i class='fa-solid fa-check text-danger me-2'></i> Follow-Up Reminders & Pipelines" data-np="<i class='fa-solid fa-check text-danger me-2'></i> फलो-अप रिमाइन्डर र सेल्स पाइपलाइन"><i class="fa-solid fa-check text-danger me-2"></i> Follow-Up Reminders & Pipelines</li>
                            <li class="np-trans" data-en="<i class='fa-solid fa-check text-danger me-2'></i> WhatsApp PDF Invoice Dispatch" data-np="<i class='fa-solid fa-check text-danger me-2'></i> ह्वाट्सएपमा सिधै PDF बिल पठाउने सुविधा"><i class="fa-solid fa-check text-danger me-2"></i> WhatsApp PDF Invoice Dispatch</li>
                            <li class="np-trans" data-en="<i class='fa-solid fa-check text-danger me-2'></i> Repeat Customer Analysis" data-np="<i class='fa-solid fa-check text-danger me-2'></i> नियमित ग्राहक खरिद विश्लेषण"><i class="fa-solid fa-check text-danger me-2"></i> Repeat Customer Analysis</li>
                        </ul>
                    </div>
                </div>

                <!-- Module 3: Inventory -->
                <div class="col-lg-4 col-md-6">
                    <div class="np-card">
                        <div class="np-card-icon"><i class="fa-solid fa-boxes-stacked"></i></div>
                        <h4 class="np-trans" data-en="Inventory & Stock Control" data-np="इन्भेन्टरी तथा मौज्दात नियन्त्रण">Inventory & Stock Control</h4>
                        <ul class="list-unstyled small text-muted" style="line-height: 2;">
                            <li class="np-trans" data-en="<i class='fa-solid fa-check text-danger me-2'></i> Product SKU & Barcode Tags" data-np="<i class='fa-solid fa-check text-danger me-2'></i> वस्तुको SKU र बारकोड ट्याग व्यवस्थापन"><i class="fa-solid fa-check text-danger me-2"></i> Product SKU & Barcode Tags</li>
                            <li class="np-trans" data-en="<i class='fa-solid fa-check text-danger me-2'></i> Stock Receiving & Physical Audits" data-np="<i class='fa-solid fa-check text-danger me-2'></i> सामान प्राप्ति र भौतिक मौज्दात गणना"><i class="fa-solid fa-check text-danger me-2"></i> Stock Receiving & Physical Audits</li>
                            <li class="np-trans" data-en="<i class='fa-solid fa-check text-danger me-2'></i> Multi-Warehouse Godown Transfers" data-np="<i class='fa-solid fa-check text-danger me-2'></i> बहु-गोदाम स्टक ओसारपसार र मिलान"><i class="fa-solid fa-check text-danger me-2"></i> Multi-Warehouse Godown Transfers</li>
                            <li class="np-trans" data-en="<i class='fa-solid fa-check text-danger me-2'></i> Automated Low-Stock Alert Engine" data-np="<i class='fa-solid fa-check text-danger me-2'></i> न्यूनतम मौज्दातको स्वचालित पूर्वसूचना"><i class="fa-solid fa-check text-danger me-2"></i> Automated Low-Stock Alert Engine</li>
                            <li class="np-trans" data-en="<i class='fa-solid fa-check text-danger me-2'></i> Real-Time Inventory Valuation" data-np="<i class='fa-solid fa-check text-danger me-2'></i> वास्तविक समयको मौज्दात मूल्याङ्कन"><i class="fa-solid fa-check text-danger me-2"></i> Real-Time Inventory Valuation</li>
                        </ul>
                    </div>
                </div>

                <!-- Module 4: Multi-Branch -->
                <div class="col-lg-4 col-md-6">
                    <div class="np-card">
                        <div class="np-card-icon"><i class="fa-solid fa-city"></i></div>
                        <h4 class="np-trans" data-en="Multi-Branch ERP Suite" data-np="बहु-शाखा (Multi-Branch) व्यवस्थापन">Multi-Branch ERP Suite</h4>
                        <ul class="list-unstyled small text-muted" style="line-height: 2;">
                            <li class="np-trans" data-en="<i class='fa-solid fa-check text-danger me-2'></i> Centralized Multi-Store Oversight" data-np="<i class='fa-solid fa-check text-danger me-2'></i> सबै शाखाहरूको केन्द्रीकृत नियन्त्रण"><i class="fa-solid fa-check text-danger me-2"></i> Centralized Multi-Store Oversight</li>
                            <li class="np-trans" data-en="<i class='fa-solid fa-check text-danger me-2'></i> Branch-Specific Sales & Registers" data-np="<i class='fa-solid fa-check text-danger me-2'></i> शाखागत बिक्री तथा क्यास काउन्टर"><i class="fa-solid fa-check text-danger me-2"></i> Branch-Specific Sales & Registers</li>
                            <li class="np-trans" data-en="<i class='fa-solid fa-check text-danger me-2'></i> Inter-Branch Stock Requisitions" data-np="<i class='fa-solid fa-check text-danger me-2'></i> शाखाहरू बीच सामान माग तथा ट्रान्सफर"><i class="fa-solid fa-check text-danger me-2"></i> Inter-Branch Stock Requisitions</li>
                            <li class="np-trans" data-en="<i class='fa-solid fa-check text-danger me-2'></i> Branch Petty Cash & Expenses" data-np="<i class='fa-solid fa-check text-danger me-2'></i> शाखाको खुद्रा खर्च (Petty Cash) व्यवस्थापन"><i class="fa-solid fa-check text-danger me-2"></i> Branch Petty Cash & Expenses</li>
                            <li class="np-trans" data-en="<i class='fa-solid fa-check text-danger me-2'></i> Consolidated Company P&L" data-np="<i class='fa-solid fa-check text-danger me-2'></i> कम्पनीको एकीकृत नाफा-नोक्सान विवरण"><i class="fa-solid fa-check text-danger me-2"></i> Consolidated Company P&L</li>
                        </ul>
                    </div>
                </div>

                <!-- Module 5: Analytics -->
                <div class="col-lg-4 col-md-6">
                    <div class="np-card">
                        <div class="np-card-icon"><i class="fa-solid fa-chart-pie"></i></div>
                        <h4 class="np-trans" data-en="Real-Time Business Analytics" data-np="व्यावसायिक विश्लेषण तथा रिपोर्टहरू">Real-Time Business Analytics</h4>
                        <ul class="list-unstyled small text-muted" style="line-height: 2;">
                            <li class="np-trans" data-en="<i class='fa-solid fa-check text-danger me-2'></i> Daily & Monthly Sales Summaries" data-np="<i class='fa-solid fa-check text-danger me-2'></i> दैनिक तथा मासिक बिक्री सारांश"><i class="fa-solid fa-check text-danger me-2"></i> Daily & Monthly Sales Summaries</li>
                            <li class="np-trans" data-en="<i class='fa-solid fa-check text-danger me-2'></i> Fast vs Slow Moving Item Charts" data-np="<i class='fa-solid fa-check text-danger me-2'></i> धेरै र कम बिक्री हुने सामानको चार्ट"><i class="fa-solid fa-check text-danger me-2"></i> Fast vs Slow Moving Item Charts</li>
                            <li class="np-trans" data-en="<i class='fa-solid fa-check text-danger me-2'></i> Supplier & Dealer Ledger Aging" data-np="<i class='fa-solid fa-check text-danger me-2'></i> डिलर तथा आपूर्तिकर्ताको बाँकी रकमको उमेर"><i class="fa-solid fa-check text-danger me-2"></i> Supplier & Dealer Ledger Aging</li>
                            <li class="np-trans" data-en="<i class='fa-solid fa-check text-danger me-2'></i> Gross Margin & Profitability Metrics" data-np="<i class='fa-solid fa-check text-danger me-2'></i> कुल नाफा मार्जिन र आम्दानी अनुपात"><i class="fa-solid fa-check text-danger me-2"></i> Gross Margin & Profitability Metrics</li>
                            <li class="np-trans" data-en="<i class='fa-solid fa-check text-danger me-2'></i> Export Reports to Excel & PDF" data-np="<i class='fa-solid fa-check text-danger me-2'></i> एक्सेल (Excel) र PDF मा प्रतिवेदन डाउनलोड"><i class="fa-solid fa-check text-danger me-2"></i> Export Reports to Excel & PDF</li>
                        </ul>
                    </div>
                </div>

                <!-- Module 6: User Roles -->
                <div class="col-lg-4 col-md-6">
                    <div class="np-card">
                        <div class="np-card-icon"><i class="fa-solid fa-user-shield"></i></div>
                        <h4 class="np-trans" data-en="Granular User Roles & Security" data-np="प्रयोगकर्ता पहुँच तथा सुरक्षा">Granular User Roles & Security</h4>
                        <ul class="list-unstyled small text-muted" style="line-height: 2;">
                            <li class="np-trans" data-en="<i class='fa-solid fa-check text-danger me-2'></i> Business Owner & Executive View" data-np="<i class='fa-solid fa-check text-danger me-2'></i> मालिक तथा निर्देशकका लागि पूर्ण ड्यासबोर्ड"><i class="fa-solid fa-check text-danger me-2"></i> Business Owner & Executive View</li>
                            <li class="np-trans" data-en="<i class='fa-solid fa-check text-danger me-2'></i> Cashier Counter POS Restrictions" data-np="<i class='fa-solid fa-check text-danger me-2'></i> क्यासियर काउन्टर POS सुरक्षा प्रतिबन्ध"><i class="fa-solid fa-check text-danger me-2"></i> Cashier Counter POS Restrictions</li>
                            <li class="np-trans" data-en="<i class='fa-solid fa-check text-danger me-2'></i> Accountant Ledger Access" data-np="<i class='fa-solid fa-check text-danger me-2'></i> लेखापालका लागि खाता तथा भौचर पहुँच"><i class="fa-solid fa-check text-danger me-2"></i> Accountant Ledger Access</li>
                            <li class="np-trans" data-en="<i class='fa-solid fa-check text-danger me-2'></i> Godown & Store Manager Controls" data-np="<i class='fa-solid fa-check text-danger me-2'></i> गोदाम तथा स्टोर प्रमुखको नियन्त्रण"><i class="fa-solid fa-check text-danger me-2"></i> Godown & Store Manager Controls</li>
                            <li class="np-trans" data-en="<i class='fa-solid fa-check text-danger me-2'></i> Complete Audit Log Traceability" data-np="<i class='fa-solid fa-check text-danger me-2'></i> सम्पूर्ण कारोबारको अडिट लग र इतिहास"><i class="fa-solid fa-check text-danger me-2"></i> Complete Audit Log Traceability</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 6. COMMON BUSINESS CHALLENGES IN NEPAL & HOW DIGIFY HELPS -->
    <section class="np-section bg-dark-np">
        <div class="container">
            <div class="text-center">
                <span class="section-badge-np-dark np-trans" data-en="Problem vs Solution" data-np="चुनौती र समाधान">Problem vs Solution</span>
                <h2 class="section-title-np-dark np-trans"
                    data-en="Common Business Challenges in Nepal & How Digify Solves Them"
                    data-np="नेपालका व्यापारिक चुनौतीहरू र Digify ERP द्वारा समाधान">
                    Common Business Challenges in Nepal & How Digify Solves Them
                </h2>
                <p class="section-sub-np-dark np-trans"
                    data-en="Nepal businesses often struggle with manual accounting, stock discrepancies, and disconnected branches. Here is how Digify transforms operations:"
                    data-np="म्यानुअल खाता, स्टक नमिलेको समस्या र शाखाहरू बीचको दूरी हटाउन Digify ले यसरी मद्दत गर्दछ:">
                    Nepal businesses often struggle with manual accounting, stock discrepancies, and disconnected branches. Here is how Digify transforms operations:
                </p>
            </div>

            <div class="row g-4">
                <div class="col-md-6">
                    <div class="p-4 rounded-4" style="background: rgba(255, 255, 255, 0.05); border: 1px solid rgba(255, 255, 255, 0.1);">
                        <h5 class="text-danger fw-bold mb-3 np-trans" data-en="<i class='fa-solid fa-triangle-exclamation me-2'></i> Typical Nepal Business Bottlenecks" data-np="<i class='fa-solid fa-triangle-exclamation me-2'></i> नेपालका व्यवसायमा देखिने मुख्य समस्याहरू"><i class="fa-solid fa-triangle-exclamation me-2"></i> Typical Nepal Business Bottlenecks</h5>
                        <ul class="list-unstyled text-white-50 small" style="line-height: 2.2;">
                            <li class="np-trans" data-en="<i class='fa-solid fa-xmark text-danger me-2'></i> Manual inventory registers leading to stock pilferage and stock-outs." data-np="<i class='fa-solid fa-xmark text-danger me-2'></i> कापीमा स्टक राख्दा सामान हराउने र स्टक सकिएको थाहा नहुने।"><i class="fa-solid fa-xmark text-danger me-2"></i> Manual inventory registers leading to stock pilferage and stock-outs.</li>
                            <li class="np-trans" data-en="<i class='fa-solid fa-xmark text-danger me-2'></i> Disconnected accounting spreadsheets causing delayed tax filing." data-np="<i class='fa-solid fa-xmark text-danger me-2'></i> छरिएका एक्सेल फाइलहरूका कारण समयमा कर र भ्याट विवरण नबुझाइने।"><i class="fa-solid fa-xmark text-danger me-2"></i> Disconnected accounting spreadsheets causing delayed tax filing.</li>
                            <li class="np-trans" data-en="<i class='fa-solid fa-xmark text-danger me-2'></i> Lack of visibility into dealer credit limits and overdue receivables." data-np="<i class='fa-solid fa-xmark text-danger me-2'></i> डिलरहरूको उधारो सीमा र बाँकी रकम समयमा असुल नहुने।"><i class="fa-solid fa-xmark text-danger me-2"></i> Lack of visibility into dealer credit limits and overdue receivables.</li>
                            <li class="np-trans" data-en="<i class='fa-solid fa-xmark text-danger me-2'></i> Disconnected branches requiring manual phone calls for stock inquiries." data-np="<i class='fa-solid fa-xmark text-danger me-2'></i> शाखाहरूमा सामान छ कि छैन भनेर फोन गरेर सोधिरहनुपर्ने झन्झट।"><i class="fa-solid fa-xmark text-danger me-2"></i> Disconnected branches requiring manual phone calls for stock inquiries.</li>
                            <li class="np-trans" data-en="<i class='fa-solid fa-xmark text-danger me-2'></i> Difficulty calculating landed costs on imported Chinese and Indian goods." data-np="<i class='fa-solid fa-xmark text-danger me-2'></i> चीन र भारतबाट आयात गर्दा भन्सार र ढुवानी खर्चको सही हिसाब नहुने।"><i class="fa-solid fa-xmark text-danger me-2"></i> Difficulty calculating landed costs on imported Chinese and Indian goods.</li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="p-4 rounded-4" style="background: rgba(220, 38, 38, 0.1); border: 1px solid rgba(220, 38, 38, 0.3);">
                        <h5 class="text-warning fw-bold mb-3 np-trans" data-en="<i class='fa-solid fa-circle-check me-2'></i> How Digify Cloud ERP Resolves It" data-np="<i class='fa-solid fa-circle-check me-2'></i> Digify Cloud ERP ले कसरी समाधान गर्छ"><i class="fa-solid fa-circle-check me-2"></i> How Digify Cloud ERP Resolves It</h5>
                        <ul class="list-unstyled text-white small" style="line-height: 2.2;">
                            <li class="np-trans" data-en="<i class='fa-solid fa-check text-success me-2'></i> Real-time barcode stock synchronization across all stores and godowns." data-np="<i class='fa-solid fa-check text-success me-2'></i> सबै पसल र गोदामहरूमा रीयल-टाइम बारकोड स्टक सिङ्क्रोनाइजेसन।"><i class="fa-solid fa-check text-success me-2"></i> Real-time barcode stock synchronization across all stores and godowns.</li>
                            <li class="np-trans" data-en="<i class='fa-solid fa-check text-success me-2'></i> Integrated PAN/VAT accounting with automated sales and purchase ledgers." data-np="<i class='fa-solid fa-check text-success me-2'></i> स्वचालित खरिद र बिक्री खातासहितको एकीकृत PAN/भ्याट लेखा प्रणाली।"><i class="fa-solid fa-check text-success me-2"></i> Integrated PAN/VAT accounting with automated sales and purchase ledgers.</li>
                            <li class="np-trans" data-en="<i class='fa-solid fa-check text-success me-2'></i> Automated customer credit locks and WhatsApp payment reminder notes." data-np="<i class='fa-solid fa-check text-success me-2'></i> ग्राहकको उधारो सीमा नाघ्दा स्वतः रोकिने र ह्वाट्सएपमा रिमाइन्डर जाने।"><i class="fa-solid fa-check text-success me-2"></i> Automated customer credit locks and WhatsApp payment reminder notes.</li>
                            <li class="np-trans" data-en="<i class='fa-solid fa-check text-success me-2'></i> Centralized multi-branch cloud dashboard accessible anywhere 24/7." data-np="<i class='fa-solid fa-check text-success me-2'></i> जुनसुकै स्थानबाट २४/७ चलाउन सकिने केन्द्रीकृत बहु-शाखा ड्यासबोर्ड।"><i class="fa-solid fa-check text-success me-2"></i> Centralized multi-branch cloud dashboard accessible anywhere 24/7.</li>
                            <li class="np-trans" data-en="<i class='fa-solid fa-check text-success me-2'></i> Automated landed cost allocation including customs duties and transport." data-np="<i class='fa-solid fa-check text-success me-2'></i> भन्सार महसुल, ढुवानी र बीमासहितको स्वचालित ल्यान्डिङ कस्ट गणना।"><i class="fa-solid fa-check text-success me-2"></i> Automated landed cost allocation including customs duties and transport.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 7. NEPAL CITY & REGIONAL COVERAGE -->
    <section class="np-section bg-light-np">
        <div class="container">
            <div class="text-center">
                <span class="section-badge-np np-trans" data-en="National Footprint" data-np="देशभर सेवा">National Footprint</span>
                <h2 class="section-title-np np-trans"
                    data-en="Serving Growing Commercial Hubs Across Nepal"
                    data-np="नेपालका मुख्य औद्योगिक तथा व्यापारिक शहरहरूमा सेवा">
                    Serving Growing Commercial Hubs Across Nepal
                </h2>
                <p class="section-sub-np np-trans"
                    data-en="From corporate headquarters in Kathmandu to industrial zones in the Terai and hospitality hubs in Pokhara, Digify powers businesses nationwide:"
                    data-np="काठमाडौंका कर्पोरेट कार्यालयदेखि तराईका औद्योगिक क्षेत्र र पोखराका पर्यटन केन्द्रहरूसम्म, Digify ले देशभरका व्यवसायहरूलाई सशक्त बनाउँदैछ:">
                    From corporate headquarters in Kathmandu to industrial zones in the Terai and hospitality hubs in Pokhara, Digify powers businesses nationwide:
                </p>
            </div>

            <div class="d-flex flex-wrap justify-content-center gap-3">
                <div class="city-pill"><i class="fa-solid fa-location-dot text-danger"></i> <span class="np-trans" data-en="Kathmandu" data-np="काठमाडौं">Kathmandu</span></div>
                <div class="city-pill"><i class="fa-solid fa-location-dot text-danger"></i> <span class="np-trans" data-en="Pokhara" data-np="पोखरा">Pokhara</span></div>
                <div class="city-pill"><i class="fa-solid fa-location-dot text-danger"></i> <span class="np-trans" data-en="Lalitpur" data-np="ललितपुर / पाटन">Lalitpur</span></div>
                <div class="city-pill"><i class="fa-solid fa-location-dot text-danger"></i> <span class="np-trans" data-en="Bhaktapur" data-np="भक्तपुर">Bhaktapur</span></div>
                <div class="city-pill"><i class="fa-solid fa-location-dot text-danger"></i> <span class="np-trans" data-en="Birgunj" data-np="वीरगञ्ज">Birgunj</span></div>
                <div class="city-pill"><i class="fa-solid fa-location-dot text-danger"></i> <span class="np-trans" data-en="Biratnagar" data-np="विराटनगर">Biratnagar</span></div>
                <div class="city-pill"><i class="fa-solid fa-location-dot text-danger"></i> <span class="np-trans" data-en="Chitwan / Bharatpur" data-np="चितवन / भरतपुर">Chitwan / Bharatpur</span></div>
                <div class="city-pill"><i class="fa-solid fa-location-dot text-danger"></i> <span class="np-trans" data-en="Butwal" data-np="बुटवल">Butwal</span></div>
                <div class="city-pill"><i class="fa-solid fa-location-dot text-danger"></i> <span class="np-trans" data-en="Dharan" data-np="धरान">Dharan</span></div>
                <div class="city-pill"><i class="fa-solid fa-location-dot text-danger"></i> <span class="np-trans" data-en="Hetauda" data-np="हेटौंडा">Hetauda</span></div>
                <div class="city-pill"><i class="fa-solid fa-location-dot text-danger"></i> <span class="np-trans" data-en="Itahari" data-np="इटहरी">Itahari</span></div>
                <div class="city-pill"><i class="fa-solid fa-location-dot text-danger"></i> <span class="np-trans" data-en="Nepalgunj" data-np="नेपालगञ्ज">Nepalgunj</span></div>
                <div class="city-pill"><i class="fa-solid fa-location-dot text-danger"></i> <span class="np-trans" data-en="Ilam" data-np="इलाम">Ilam</span></div>
            </div>
        </div>
    </section>

    <!-- 8. FREQUENTLY ASKED QUESTIONS (FAQ) -->
    <section class="np-section bg-white">
        <div class="container">
            <div class="text-center">
                <span class="section-badge-np np-trans" data-en="Got Questions?" data-np="प्रायः सोधिने प्रश्नहरू">Got Questions?</span>
                <h2 class="section-title-np np-trans"
                    data-en="Frequently Asked Questions on Nepal ERP Software"
                    data-np="नेपालमा ERP सफ्टवेयर सम्बन्धी प्रायः सोधिने प्रश्नहरू">
                    Frequently Asked Questions on Nepal ERP Software
                </h2>
                <p class="section-sub-np np-trans"
                    data-en="Common inquiries from business owners, managing directors, and accountants in Nepal:"
                    data-np="नेपालका व्यवसायी र लेखापालहरूका सामान्य जिज्ञासा र उत्तरहरू:">
                    Common inquiries from business owners, managing directors, and accountants in Nepal:
                </p>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-9">
                    <div class="accordion accordion-np" id="nepalFaqAccordion">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button np-trans" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne"
                                    data-en="What is ERP software in Nepal?"
                                    data-np="नेपालमा ERP सफ्टवेयर भनेको के हो?">
                                    What is ERP software in Nepal?
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#nepalFaqAccordion">
                                <div class="accordion-body np-trans"
                                    data-en="ERP software in Nepal is a centralized business management platform that helps organizations manage sales, purchases, inventory, accounting, customers, suppliers, employees and business reporting from a single, secure environment."
                                    data-np="नेपालमा ERP सफ्टवेयर एउटा यस्तो केन्द्रीकृत व्यापार व्यवस्थापन सफ्टवेयर हो जसले बिक्री, खरिद, सामानको मौज्दात (इन्भेन्टरी), लेखा, ग्राहक, आपूर्तिकर्ता, कर्मचारी र व्यापारिक प्रतिवेदनहरू एउटै सुरक्षित प्रणालीबाट चलाउन मद्दत गर्दछ।">
                                    ERP software in Nepal is a centralized business management platform that helps organizations manage sales, purchases, inventory, accounting, customers, suppliers, employees and business reporting from a single, secure environment.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed np-trans" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo"
                                    data-en="Which businesses in Nepal can use Digify ERP?"
                                    data-np="नेपालमा कुन-कुन व्यवसायहरूले Digify ERP प्रयोग गर्न सक्छन्?">
                                    Which businesses in Nepal can use Digify ERP?
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#nepalFaqAccordion">
                                <div class="accordion-body np-trans"
                                    data-en="Digify ERP is tailored for supermarkets, retail chains, wholesalers, FMCG distributors, manufacturers, agricultural enterprises, tea estates, hotels, trekking agencies, construction contractors, hardware traders, pharmacies, and e-commerce companies across Nepal."
                                    data-np="Digify ERP सुपरमार्केट, खुद्रा पसल, थोक बिक्रेता, FMCG डिस्ट्रिब्युटर, उद्योग/फ्याक्ट्री, कृषि फार्म, चिया बगान, होटल, ट्रेकिङ एजेन्सी, निर्माण व्यवसायी, हार्डवेयर, फार्मेसी र ई-कमर्स कम्पनीहरूका लागि पूर्ण उपयोगी छ।">
                                    Digify ERP is tailored for supermarkets, retail chains, wholesalers, FMCG distributors, manufacturers, agricultural enterprises, tea estates, hotels, trekking agencies, construction contractors, hardware traders, pharmacies, and e-commerce companies across Nepal.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed np-trans" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree"
                                    data-en="Can hotels and tourism companies in Nepal use Digify ERP?"
                                    data-np="के नेपालका होटल र पर्यटन कम्पनीहरूले Digify ERP प्रयोग गर्न सक्छन्?">
                                    Can hotels and tourism companies in Nepal use Digify ERP?
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#nepalFaqAccordion">
                                <div class="accordion-body np-trans"
                                    data-en="Yes. ERP helps hotels, lodges, and travel agencies organize F&B restaurant POS billing, kitchen food stock, guest ledger profiles, tour package costing, guide payments, and multi-currency foreign exchange accounting."
                                    data-np="हो, पक्कै पनि। यसले होटल, लज र ट्राभल एजेन्सीहरूको रेस्टुरेन्ट बिलिङ, भान्साको खाद्यान्न मौज्दात, पाहुनाको विवरण, टुर प्याकेज कस्टिङ, गाइड भुक्तानी र विदेशी मुद्रा कारोबार व्यवस्थित गर्न मद्दत गर्दछ।">
                                    Yes. ERP helps hotels, lodges, and travel agencies organize F&B restaurant POS billing, kitchen food stock, guest ledger profiles, tour package costing, guide payments, and multi-currency foreign exchange accounting.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingFour">
                                <button class="accordion-button collapsed np-trans" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour"
                                    data-en="Does Digify support Nepal PAN and VAT workflows?"
                                    data-np="के Digify ले नेपालको PAN र भ्याट प्रक्रियालाई समर्थन गर्छ?">
                                    Does Digify support Nepal PAN and VAT workflows?
                                </button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#nepalFaqAccordion">
                                <div class="accordion-body np-trans"
                                    data-en="Yes. Digify is designed to support organized Nepal business accounting, 13% VAT calculation, customer/supplier PAN tracking, sales books (बिक्री खाता), purchase books (खरिद खाता), and organized tax record-keeping."
                                    data-np="हो। Digify नेपाली व्यवसायहरूको व्यवस्थित लेखा, १३% भ्याट गणना, ग्राहक/आपूर्तिकर्ताको PAN ट्र्याकिङ, बिक्री खाता, खरिद खाता र करसम्बन्धी अभिलेख राख्नका लागि पूर्ण रूपमा तयार पारिएको छ।">
                                    Yes. Digify is designed to support organized Nepal business accounting, 13% VAT calculation, customer/supplier PAN tracking, sales books, purchase books, and organized tax record-keeping.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingFive">
                                <button class="accordion-button collapsed np-trans" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive"
                                    data-en="Can Digify POS operate offline during power or internet outages in Nepal?"
                                    data-np="के नेपालमा इन्टरनेट नहुँदा पनि Digify POS ले काम गर्छ?">
                                    Can Digify POS operate offline during power or internet outages in Nepal?
                                </button>
                            </h2>
                            <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#nepalFaqAccordion">
                                <div class="accordion-body np-trans"
                                    data-en="Absolutely. Digify POS features an offline-first architecture. Retail and supermarket cashiers can scan barcodes, ring sales, and print thermal receipts without an active internet connection. All data automatically synchronizes with the cloud once the network is restored."
                                    data-np="बिल्कुल गर्छ। Digify POS अफलाइन-फर्स्ट प्रविधिमा आधारित छ। इन्टरनेट नभएको बेला पनि क्यासियरले बारकोड स्क्यान गर्न, बिल काट्न र रसिद छाप्न सक्छन्। इन्टरनेट आउनासाथ सबै डाटा स्वतः क्लाउडमा सुरक्षित हुन्छ।">
                                    Absolutely. Digify POS features an offline-first architecture. Retail and supermarket cashiers can scan barcodes, ring sales, and print thermal receipts without an active internet connection. All data automatically synchronizes with the cloud once the network is restored.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 9. FINAL CALL TO ACTION -->
    <section class="py-5" style="background: linear-gradient(135deg, #dc2626 0%, #991b1b 100%); color: #ffffff;">
        <div class="container text-center py-4">
            <h2 class="fw-bold mb-3 np-trans"
                data-en="Digitize Your Business in Nepal Today"
                data-np="आजै आफ्नो व्यवसायलाई डिजिटल र स्वचालित बनाउनुहोस्">
                Digitize Your Business in Nepal Today
            </h2>
            <p class="mx-auto mb-4 text-white-50 np-trans" style="max-width: 720px; font-size: 17px;"
                data-en="Whether you operate a supermarket in Kathmandu, a hotel in Pokhara, a wholesale business in Birgunj, a manufacturing company in Biratnagar, an agricultural estate in Chitwan, or a construction enterprise, Digify Soft Solutions centralizes your entire operation."
                data-np="तपाईं काठमाडौंमा सुपरमार्केट चलाउनुहोस्, पोखरामा होटल, वीरगञ्जमा थोक व्यापार, विराटनगरमा उद्योग वा चितवनमा कृषि फार्म — डिजिफाई सफ्ट सोलुसन्सले तपाईंको सम्पूर्ण व्यापारलाई स्वचालित बनाउँछ।">
                Whether you operate a supermarket in Kathmandu, a hotel in Pokhara, a wholesale business in Birgunj, a manufacturing company in Biratnagar, an agricultural estate in Chitwan, or a construction enterprise, Digify Soft Solutions centralizes your entire operation.
            </p>
            <div class="d-flex justify-content-center flex-wrap gap-3">
                <button type="button" class="btn btn-light px-4 py-3 fw-bold text-danger rounded-pill" data-bs-toggle="modal" data-bs-target="#trialModal">
                    <i class="fa-solid fa-calendar-check me-2"></i> <span class="np-trans" data-en="Request a Free ERP Demo Today" data-np="निःशुल्क ERP डेमो अनुरोध गर्नुहोस्">Request a Free ERP Demo Today</span>
                </button>
                <a href="tel:+917425016636" class="btn btn-outline-light px-4 py-3 fw-bold rounded-pill">
                    <i class="fa-solid fa-phone me-2"></i> +91 7425016636
                </a>
            </div>
        </div>
    </section>
</div>

<script>
function setNpLang(lang) {
    try {
        localStorage.setItem('digify_nepal_lang', lang);
    } catch(e) {}
    
    document.querySelectorAll('.lang-pill').forEach(btn => btn.classList.remove('active'));
    if (lang === 'np') {
        const btnNp = document.getElementById('btn-lang-np');
        if (btnNp) btnNp.classList.add('active');
        document.querySelectorAll('.np-trans').forEach(el => {
            const val = el.getAttribute('data-np');
            if (val) el.innerHTML = val;
        });
        document.documentElement.lang = 'ne';
    } else {
        const btnEn = document.getElementById('btn-lang-en');
        if (btnEn) btnEn.classList.add('active');
        document.querySelectorAll('.np-trans').forEach(el => {
            const val = el.getAttribute('data-en');
            if (val) el.innerHTML = val;
        });
        document.documentElement.lang = 'en';
    }
}

document.addEventListener('DOMContentLoaded', function() {
    const urlParams = new URLSearchParams(window.location.search);
    const urlLang = urlParams.get('lang');
    let savedLang = 'en';
    try {
        savedLang = localStorage.getItem('digify_nepal_lang') || 'en';
    } catch(e) {}
    
    if (urlLang === 'np' || urlLang === 'ne' || savedLang === 'np' || savedLang === 'ne') {
        setNpLang('np');
    }
});
</script>

<?php include('trial_modal.php'); ?>
<?php include(__DIR__ . '/../../footer.php'); ?>
