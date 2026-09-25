<?php 
include_once(__DIR__ . '/../../db.php');
include_once(__DIR__ . '/../../fetch_meta.php');

$pageTitle = "Garment ERP Software Bangladesh | Cloud RMG & Textile Manufacturing ERP";
$pageDescription = "Digify Soft Solutions provides cloud Garment ERP software in Bangladesh for RMG factories, textile mills, apparel brands, and exporters with BOM, cut-to-pack, fabric inventory, trims, order management and accounting.";
$pageKeywords = "Garment ERP software Bangladesh, RMG ERP Bangladesh, Textile ERP software Bangladesh, Apparel manufacturing software Bangladesh, Cut to pack ERP Bangladesh, Garment inventory software Bangladesh, Fabric roll management Bangladesh, BGMEA ERP Bangladesh, BKMEA apparel software, Garment production ERP Bangladesh, Garment export management software";
$pageCanonical = "https://www.digifysoft.in/garment-erp-software-bangladesh";

include(__DIR__ . '/../../top.php');
include(__DIR__ . '/../../header.php');
?>

<style>
/* Garment ERP Page Specific Styles */
.garment-page-wrapper {
    font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
    color: #1e293b;
    overflow-x: hidden;
}

/* Hero Section */
.garment-hero {
    background: linear-gradient(135deg, #090e24 0%, #13172e 50%, #1e1438 100%);
    color: #ffffff;
    padding: 70px 0 85px;
    position: relative;
    overflow: hidden;
    border-bottom: 3px solid #e06930;
}
.garment-hero::before {
    content: '';
    position: absolute;
    top: -15%;
    right: -10%;
    width: 650px;
    height: 650px;
    background: radial-gradient(circle, rgba(224, 105, 48, 0.25) 0%, rgba(251, 193, 69, 0) 70%);
    border-radius: 50%;
    pointer-events: none;
}
.text-gradient {
    background: linear-gradient(135deg, #e06930 0%, #fbc145 100%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    display: inline-block;
}
.garment-badge {
    background: rgba(224, 105, 48, 0.18);
    border: 1px solid rgba(224, 105, 48, 0.5);
    color: #ffb188;
    font-size: 13px;
    font-weight: 700;
    padding: 7px 18px;
    border-radius: 30px;
    display: inline-flex;
    align-items: center;
    gap: 8px;
    margin-bottom: 18px;
}
.garment-hero h1 {
    font-size: 42px;
    font-weight: 900;
    line-height: 1.25;
    margin-bottom: 18px;
    letter-spacing: -0.5px;
}
.garment-hero-sub {
    font-size: 18px;
    font-weight: 600;
    color: #fdba74;
    line-height: 1.5;
    margin-bottom: 14px;
}
.garment-hero-desc {
    font-size: 16px;
    line-height: 1.7;
    color: rgba(255, 255, 255, 0.85);
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
    background: linear-gradient(135deg, #e06930 0%, #f58220 100%);
    color: #ffffff;
    box-shadow: 0 4px 12px rgba(224, 105, 48, 0.4);
}

/* Lead Form Card */
.lead-form-card {
    background: #ffffff;
    border-radius: 20px;
    padding: 32px 28px;
    box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.35);
    color: #0f172a;
    border: 1px solid #e2e8f0;
}

/* Feature Cards & Boxes */
.card-hover-box {
    background: #ffffff;
    border: 1px solid #e2e8f0;
    border-radius: 16px;
    padding: 24px;
    transition: all 0.3s ease;
    height: 100%;
}
.card-hover-box:hover {
    transform: translateY(-4px);
    border-color: #e06930;
    box-shadow: 0 16px 32px rgba(224, 105, 48, 0.12);
}
.icon-box-primary {
    width: 52px;
    height: 52px;
    border-radius: 14px;
    background: linear-gradient(135deg, rgba(224, 105, 48, 0.12), rgba(251, 193, 69, 0.2));
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 22px;
    color: #e06930;
    margin-bottom: 16px;
}
.section-tagline {
    background: rgba(224, 105, 48, 0.12);
    color: #e06930;
    font-size: 12px;
    font-weight: 800;
    text-transform: uppercase;
    letter-spacing: 1px;
    padding: 6px 14px;
    border-radius: 20px;
    display: inline-block;
    margin-bottom: 12px;
}

/* Workflow Step Box */
.workflow-step-card {
    background: #ffffff;
    border: 1px solid #e2e8f0;
    border-radius: 14px;
    padding: 18px 12px;
    text-align: center;
    position: relative;
    height: 100%;
    transition: all 0.25s ease;
}
.workflow-step-card:hover {
    border-color: #e06930;
    transform: translateY(-3px);
    box-shadow: 0 10px 24px rgba(224, 105, 48, 0.12);
}
.step-num {
    width: 30px;
    height: 30px;
    background: linear-gradient(135deg, #e06930, #fbc145);
    color: #ffffff;
    font-weight: 800;
    font-size: 13px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto 10px;
}

/* Segment Cards */
.segment-card {
    background: #ffffff;
    border: 1px solid #e2e8f0;
    border-radius: 14px;
    padding: 18px;
    height: 100%;
    border-left: 4px solid #e06930;
    transition: all 0.25s ease;
}
.segment-card:hover {
    box-shadow: 0 10px 24px rgba(0, 0, 0, 0.06);
    transform: translateY(-2px);
}

/* Garment Checklist */
.garment-check-list {
    list-style: none;
    padding-left: 0;
    margin-bottom: 0;
}
.garment-check-list li {
    position: relative;
    padding-left: 28px;
    margin-bottom: 10px;
    font-size: 14px;
    color: #334155;
}
.garment-check-list li::before {
    content: '\f058';
    font-family: 'Font Awesome 6 Free';
    font-weight: 900;
    position: absolute;
    left: 0;
    top: 2px;
    color: #e06930;
    font-size: 16px;
}

/* FAQ Styling */
.faq-accordion .accordion-item {
    border: 1px solid #e2e8f0;
    border-radius: 12px !important;
    margin-bottom: 14px;
    overflow: hidden;
}
.faq-accordion .accordion-button {
    font-weight: 700;
    font-size: 16px;
    color: #0f172a;
    background: #ffffff;
    padding: 18px 22px;
}
.faq-accordion .accordion-button:not(.collapsed) {
    background: rgba(224, 105, 48, 0.06);
    color: #e06930;
    box-shadow: none;
}
.faq-accordion .accordion-body {
    font-size: 15px;
    line-height: 1.7;
    color: #475569;
    padding: 20px 22px;
    background: #ffffff;
}

@media (max-width: 768px) {
    .garment-hero { padding: 40px 0 50px; }
    .garment-hero h1 { font-size: 26px; }
    .garment-hero-sub { font-size: 15px; }
    .garment-hero-desc { font-size: 14px; }
    .lead-form-card { padding: 22px 18px; }
}
</style>

<div class="garment-page-wrapper">

<!-- ==========================================
     1. HERO SECTION
=========================================== -->
<section class="garment-hero">
    <div class="container">
        <div class="row align-items-center g-4 g-lg-5">
            <div class="col-lg-7">
                
                <!-- Language Switcher -->
                <div class="d-flex align-items-center gap-2 mb-2">
                    <span class="small text-white-50 fw-bold me-1"><i class="fa-solid fa-language text-warning me-1"></i> Language:</span>
                    <div class="lang-toggle-bar">
                        <button type="button" class="lang-pill active" id="btnGarmentLangEn" onclick="switchGarmentLang('en')">
                            🇬🇧 English
                        </button>
                        <button type="button" class="lang-pill" id="btnGarmentLangBn" onclick="switchGarmentLang('bn')">
                            🇧🇩 বাংলা
                        </button>
                    </div>
                </div>

                <div class="garment-badge garment-trans"
                    data-en="<span>🇧🇩</span><span>Ready-Made Garments (RMG) & Textile ERP • Cut-to-Pack Cloud Suite</span>"
                    data-bn="<span>🇧🇩</span><span>তৈরি পোশাক (RMG) ও টেক্সটাইল ইআরপি • সম্পূর্ণ কাট-টু-প্যাক ক্লাউড প্ল্যাটফর্ম</span>">
                    <span>🇧🇩</span>
                    <span>Ready-Made Garments (RMG) & Textile ERP • Cut-to-Pack Cloud Suite</span>
                </div>

                <h1 class="garment-trans"
                    data-en="Cloud Garment & RMG ERP Software for <span class='text-gradient'>Bangladesh Manufacturers & Exporters</span>"
                    data-bn="বাংলাদেশের গার্মেন্টস ও আরএমজি শিল্পের জন্য <span class='text-gradient'>ক্লাউড ERP সফটওয়্যার</span>">
                    Cloud Garment & RMG ERP Software for <span class="text-gradient">Bangladesh Manufacturers & Exporters</span>
                </h1>

                <p class="garment-hero-sub garment-trans"
                    data-en="End-to-end production tracking, fabric roll inventory, trims management, cost allocation, and multi-warehouse logistics engineered for Bangladesh's apparel ecosystem."
                    data-bn="কাটিং থেকে প্যাকিং, কাপড়ের রোল ইনভেন্টরি, ট্রিমস ট্র্যাকিং এবং রপ্তানি লজিস্টিকসের জন্য বিশেষভাবে তৈরি আধুনিক ইআরপি সমাধান।">
                    End-to-end production tracking, fabric roll inventory, trims management, cost allocation, and multi-warehouse logistics engineered for Bangladesh's apparel ecosystem.
                </p>

                <p class="garment-hero-desc garment-trans"
                    data-en="Digify Soft Solutions brings fabric sourcing, cutting room orders, stitching line WIP, bundle tracking, finished goods packaging, export documentation, customer proformas, and financial accounts together in one unified cloud ERP platform."
                    data-bn="ডিজিফাই সফট সলিউশনস কাপড় সংগ্রহ, কাটিং টেবিল অর্ডার, সেলাই লাইনের WIP ট্র্যাকিং, ফিনিশিং, কোয়ালিটি কন্ট্রোল, রপ্তানি চালান এবং আর্থিক হিসাবকে একীভূত সিস্টেমে নিয়ে আসে।">
                    Digify Soft Solutions brings fabric sourcing, cutting room orders, stitching line WIP, bundle tracking, finished goods packaging, export documentation, customer proformas, and financial accounts together in one unified cloud ERP platform.
                </p>

                <div class="d-flex flex-wrap gap-3">
                    <a href="#garment-demo" class="btn btn-lg px-4 py-3 text-white fw-bold rounded-pill shadow-lg garment-trans" 
                        data-en="<i class='fa-solid fa-calendar-check me-2'></i> Request Garment ERP Demo"
                        data-bn="<i class='fa-solid fa-calendar-check me-2'></i> গার্মেন্টস ইআরপি ডেমোর অনুরোধ করুন"
                        style="background: linear-gradient(135deg, #e06930, #fbc145);">
                        <i class="fa-solid fa-calendar-check me-2"></i> Request Garment ERP Demo
                    </a>
                    <a href="https://wa.me/917425016636?text=Hi%20Digify%20Team,%20I%20want%20to%20talk%20to%20an%20apparel%20ERP%20expert%20for%20Bangladesh." target="_blank" class="btn btn-lg px-4 py-3 btn-outline-light rounded-pill fw-semibold garment-trans"
                        data-en="<i class='fa-brands fa-whatsapp text-success me-2'></i> Talk to Apparel ERP Expert"
                        data-bn="<i class='fa-brands fa-whatsapp text-success me-2'></i> গার্মেন্টস বিশেষজ্ঞের সাথে কথা বলুন">
                        <i class="fa-brands fa-whatsapp text-success me-2"></i> Talk to Apparel ERP Expert
                    </a>
                </div>

                <!-- Trust Micro-Badges -->
                <div class="row g-2 mt-4 pt-2 border-top border-secondary border-opacity-25">
                    <div class="col-4">
                        <div class="text-white-50 small"><i class="fa-solid fa-scissors text-warning me-1"></i> <span class="garment-trans" data-en="Cut-to-Pack" data-bn="কাট-টু-প্যাক">Cut-to-Pack</span></div>
                        <div class="text-white fw-bold small garment-trans" data-en="0% Untracked WIP" data-bn="১০০% ট্র্যাকিং">0% Untracked WIP</div>
                    </div>
                    <div class="col-4">
                        <div class="text-white-50 small"><i class="fa-solid fa-scroll text-warning me-1"></i> <span class="garment-trans" data-en="Fabric Roll Sync" data-bn="কাপড় রোল সিঙ্ক">Fabric Roll Sync</span></div>
                        <div class="text-white fw-bold small garment-trans" data-en="Meter/Yard & GSM" data-bn="গজ/মিটার ও জিএসএম">Meter/Yard & GSM</div>
                    </div>
                    <div class="col-4">
                        <div class="text-white-50 small"><i class="fa-solid fa-ship text-warning me-1"></i> <span class="garment-trans" data-en="Export Ready" data-bn="রপ্তানি প্রস্তুত">Export Ready</span></div>
                        <div class="text-white fw-bold small garment-trans" data-en="Packing List & Invoicing" data-bn="প্যাকিং লিস্ট ও ইনভয়েস">Packing List & Invoicing</div>
                    </div>
                </div>

            </div>

            <!-- Demo Form Card -->
            <div class="col-lg-5" id="garment-demo">
                <div class="lead-form-card">
                    <div class="text-center mb-3">
                        <span class="badge mb-2 px-3 py-1 garment-trans" data-en="🇧🇩 FREE 15-MINUTE GARMENT ERP AUDIT" data-bn="🇧🇩 ১৫ মিনিটের ফ্রি গার্মেন্টস ইআরপি অডিট" style="background: rgba(224, 105, 48, 0.15); color: #e06930; font-weight: 700; font-size: 11px;">
                            🇧🇩 FREE 15-MINUTE GARMENT ERP AUDIT
                        </span>
                        <h4 class="fw-bold mb-1 garment-trans" data-en="Request a Live Garment ERP Demo" data-bn="ফ্রি লাইভ গার্মেন্টস ইআরপি ডেমো দেখুন">Request a Live Garment ERP Demo</h4>
                        <p class="text-muted small mb-0 garment-trans" data-en="See how Digify optimizes cut-to-pack workflows for your factory or brand." data-bn="দেখুন কীভাবে ডিজিফাই আপনার ফ্যাক্টরির কাট-টু-প্যাক উৎপাদন গতি বৃদ্ধি করে।">See how Digify optimizes cut-to-pack workflows for your factory or brand.</p>
                    </div>

                    <form action="contact-us.php" method="POST">
                        <input type="hidden" name="lead_source" value="Bangladesh Garment ERP Page (/garment-erp-software-bangladesh)">
                        
                        <div class="mb-3">
                            <label class="form-label small fw-bold text-secondary mb-1 garment-trans" data-en="Your Full Name" data-bn="আপনার পূর্ণ নাম">Your Full Name</label>
                            <input type="text" name="name" class="form-control form-control-lg fs-6" placeholder="e.g. Farhan Chowdhury / Mahbub Alam" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label small fw-bold text-secondary mb-1 garment-trans" data-en="Factory / Brand Name" data-bn="ফ্যাক্টরি / ব্র্যান্ডের নাম">Factory / Brand Name</label>
                            <input type="text" name="company" class="form-control form-control-lg fs-6" placeholder="e.g. Apex Knitwear Ltd / Dhaka Tex" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label small fw-bold text-secondary mb-1 garment-trans" data-en="WhatsApp / Mobile Number" data-bn="হোয়াটসঅ্যাপ / মোবাইল নম্বর">WhatsApp / Mobile Number</label>
                            <div class="input-group">
                                <span class="input-group-text bg-light text-dark fw-bold">+880</span>
                                <input type="tel" name="phone" class="form-control form-control-lg fs-6" placeholder="1812 345678" required>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label class="form-label small fw-bold text-secondary mb-1 garment-trans" data-en="Your Garment Segment" data-bn="আপনার পোশাকের খাত">Your Garment Segment</label>
                            <select name="industry" class="form-select form-control-lg fs-6">
                                <option value="RMG & Apparel Manufacturer">Ready-Made Garments (RMG) Factory</option>
                                <option value="Knitwear & Sweaters">Knitwear, T-Shirts & Sweaters</option>
                                <option value="Woven & Denim">Woven Garments & Denim Manufacturing</option>
                                <option value="Textile Mill & Yarn Wholesale">Textile Mill & Yarn Wholesale (Islampur/Narayanganj)</option>
                                <option value="Fashion Brand & Retail Chain">Fashion Brand & Multi-Store Retail</option>
                                <option value="Uniforms & Workwear">Uniforms & Institutional Workwear</option>
                                <option value="Export House & Buying Agent">Garment Export House / Buying Agent</option>
                                <option value="Trims & Accessories Sourcing">Trims, Zippers & Accessories Supplier</option>
                                <option value="Leather & Footwear">Leather Goods & Footwear Factory</option>
                            </select>
                        </div>

                        <button type="submit" class="btn btn-lg w-100 text-white fw-bold py-3 rounded-3 shadow-sm garment-trans" 
                            data-en="Schedule Free Live Demo <i class='fa-solid fa-arrow-right ms-2'></i>" 
                            data-bn="ফ্রি লাইভ ডেমো শিডিউল করুন <i class='fa-solid fa-arrow-right ms-2'></i>"
                            style="background: linear-gradient(135deg, #e06930, #fbc145);">
                            Schedule Free Live Demo <i class="fa-solid fa-arrow-right ms-2"></i>
                        </button>
                        <p class="text-center text-muted small mt-2 mb-0 garment-trans" data-en="<i class='fa-solid fa-shield-halved text-success me-1'></i> Dedicated Bangladesh onboarding • Fast cloud deployment" data-bn="<i class='fa-solid fa-shield-halved text-success me-1'></i> বাংলাদেশে সরাসরি অনবোর্ডিং সাপোর্ট • দ্রুত ক্লাউড ডিপ্লয়মেন্ট" style="font-size: 11px;">
                            <i class="fa-solid fa-shield-halved text-success me-1"></i> Dedicated Bangladesh onboarding • Fast cloud deployment
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ==========================================
     2. GARMENT & APPAREL ERP PROFILES
=========================================== -->
<section class="py-5" style="background: #ffffff;">
    <div class="container py-4">
        <div class="text-center max-w-750 mx-auto mb-5">
            <span class="section-tagline garment-trans" data-en="Target Profiles" data-bn="লক্ষ্যভিত্তিক খাতসমূহ">Target Profiles</span>
            <h2 class="fw-bold mb-3 garment-trans" data-en="Built for Every Segment of Bangladesh's Apparel Industry" data-bn="বাংলাদেশের পোশাক ও টেক্সটাইল খাতের প্রতিটি বিভাগের জন্য উপযোগী">Built for Every Segment of Bangladesh's Apparel Industry</h2>
            <p class="text-muted lead fs-6 garment-trans" data-en="From high-capacity Gazipur RMG factories to boutique fashion retail chains in Gulshan and Dhanmondi." data-bn="গাজীপুর ও সাভারের বৃহৎ আরএমজি ফ্যাক্টরি থেকে শুরু করে গুলশান-ধানমন্ডির ফ্যাশন রিটেল চেইন পর্যন্ত।">
                From high-capacity Gazipur RMG factories to boutique fashion retail chains in Gulshan and Dhanmondi.
            </p>
        </div>

        <div class="row g-4">
            <div class="col-md-6 col-lg-4">
                <div class="card-hover-box">
                    <div class="icon-box-primary"><i class="fa-solid fa-industry"></i></div>
                    <h5 class="fw-bold mb-2 garment-trans" data-en="Garment Manufacturers" data-bn="গার্মেন্টস প্রস্তুতকারক কারখানা">Garment Manufacturers</h5>
                    <p class="text-muted small mb-0 garment-trans" data-en="End-to-end management for cutting lines, stitching bundles, washing, ironing, and final packaging." data-bn="কাটিং লাইন, সেলাই বান্ডেল, ওয়াশিং, আয়রনিং ও প্যাকেজিংয়ের সামগ্রিক ব্যবস্থাপনা।">End-to-end management for cutting lines, stitching bundles, washing, ironing, and final packaging.</p>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="card-hover-box">
                    <div class="icon-box-primary"><i class="fa-solid fa-tag"></i></div>
                    <h5 class="fw-bold mb-2 garment-trans" data-en="Apparel Brands" data-bn="অ্যাপারেল ও ফ্যাশন ব্র্যান্ড">Apparel Brands</h5>
                    <p class="text-muted small mb-0 garment-trans" data-en="Manage brand collections, seasonal style matrix, designer tech packs, photo catalogs, and multi-channel sales." data-bn="ব্র্যান্ড কালেকশন, মৌসুমি স্টাইল ম্যাট্রিক্স, ডিজাইনার টেক প্যাক ও মাল্টি-চ্যানেল বিক্রয় নিয়ন্ত্রণ।">Manage brand collections, seasonal style matrix, designer tech packs, photo catalogs, and multi-channel sales.</p>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="card-hover-box">
                    <div class="icon-box-primary"><i class="fa-solid fa-boxes-packing"></i></div>
                    <h5 class="fw-bold mb-2 garment-trans" data-en="Clothing Wholesalers" data-bn="পোশাকের পাইকারি ব্যবসায়ী">Clothing Wholesalers</h5>
                    <p class="text-muted small mb-0 garment-trans" data-en="Manage bulk lot shipments, dealer discount tiers, credit aging ledgers, and multi-warehouse dispatches." data-bn="বাল্ক লট চালান, ডিলার ডিসকাউন্ট টায়ার, বকেয়া লেজার এবং গুদাম সরবরাহ পরিচালনা।">Manage bulk lot shipments, dealer discount tiers, credit aging ledgers, and multi-warehouse dispatches.</p>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="card-hover-box">
                    <div class="icon-box-primary"><i class="fa-solid fa-ship"></i></div>
                    <h5 class="fw-bold mb-2 garment-trans" data-en="Export-Oriented Garment Businesses" data-bn="রপ্তানিমুখী পোশাক কারখানা">Export-Oriented Garment Businesses</h5>
                    <p class="text-muted small mb-0 garment-trans" data-en="Track foreign buyer purchase orders, L/C terms, container packing lists, customs proformas, and Chittagong port shipments." data-bn="বিদেশি বায়ারদের পারচেজ অর্ডার, এল/সি শর্ত, কন্টেইনার প্যাকিং লিস্ট ও চট্টগ্রাম বন্দর শিপমেন্ট।">Track foreign buyer purchase orders, L/C terms, container packing lists, customs proformas, and Chittagong port shipments.</p>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="card-hover-box">
                    <div class="icon-box-primary"><i class="fa-solid fa-scroll"></i></div>
                    <h5 class="fw-bold mb-2 garment-trans" data-en="Textile & Fabric Wholesalers" data-bn="টেক্সটাইল ও সুতা পাইকারি মিল">Textile & Fabric Wholesalers</h5>
                    <p class="text-muted small mb-0 garment-trans" data-en="Manage fabric roll inventory (meters/yards, shade lots, GSM), yarn lot batches in Islampur and Narayanganj." data-bn="ফ্যাব্রিক রোল ইনভেন্টরি (গজ/মিটার, শেড নম্বর, জিএসএম) ও ইসলামপুর-নারায়ণগঞ্জের সুতা ব্যাচ।">Manage fabric roll inventory (meters/yards, shade lots, GSM), yarn lot batches in Islampur and Narayanganj.</p>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="card-hover-box">
                    <div class="icon-box-primary"><i class="fa-solid fa-vest-patches"></i></div>
                    <h5 class="fw-bold mb-2 garment-trans" data-en="Uniform & Workwear Businesses" data-bn="ইউনিফর্ম ও পেশাগত পোশাক">Uniform & Workwear Businesses</h5>
                    <p class="text-muted small mb-0 garment-trans" data-en="Handle corporate customized sizing, institutional tenders, custom embroidery/logo batches, and recurring staff orders." data-bn="কর্পোরেট সাইজিং, প্রাতিষ্ঠানিক টেন্ডার, এমব্রয়ডারি/লোগো ব্যাচ এবং নিয়মিত স্টাফ অর্ডার।">Handle corporate customized sizing, institutional tenders, custom embroidery/logo batches, and recurring staff orders.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ==========================================
     3. GARMENT INVENTORY MATRIX
=========================================== -->
<section class="py-5" style="background: #f8fafc; border-top: 1px solid #e2e8f0; border-bottom: 1px solid #e2e8f0;">
    <div class="container py-4">
        <div class="row align-items-center g-5">
            <div class="col-lg-6">
                <span class="section-tagline garment-trans" data-en="Multi-Dimensional Stock Control" data-bn="বহু-মাত্রিক স্টক নিয়ন্ত্রণ">Multi-Dimensional Stock Control</span>
                <h2 class="fw-bold mb-3 garment-trans" data-en="Garment Inventory & Raw Material Control" data-bn="গার্মেন্টস ইনভেন্টরি ও কাঁচামাল ব্যবস্থাপনা">Garment Inventory & Raw Material Control</h2>
                <p class="text-muted lead fs-6 mb-4 garment-trans" data-en="Eliminate inventory shrinkage and stock mismatch with multi-level variant and batch tracking designed specifically for garment production." data-bn="রোল-ভিত্তিক কাপড়, সাইজ, রঙ ও স্টাইল ম্যাট্রিক্সের মাধ্যমে ইনভেন্টরি অপচয় সম্পূর্ণ নির্মূল করুন।">
                    Eliminate inventory shrinkage and stock mismatch with multi-level variant and batch tracking designed specifically for garment production.
                </p>

                <div class="row g-3">
                    <div class="col-sm-6">
                        <div class="p-3 bg-white rounded-3 border shadow-sm h-100">
                            <h6 class="fw-bold text-dark mb-1 garment-trans" data-en="<i class='fa-solid fa-scroll text-warning me-2'></i> Fabric Inventory" data-bn="<i class='fa-solid fa-scroll text-warning me-2'></i> ফ্যাব্রিক ইনভেন্টরি"><i class="fa-solid fa-scroll text-warning me-2"></i> Fabric Inventory</h6>
                            <p class="text-muted small mb-0 garment-trans" data-en="Roll-by-roll tracking, meter/yard measurement, GSM, lot/shade number, and shrinkage allowance." data-bn="রোল-ভিত্তিক ট্র্যাকিং, গজ/মিটার, জিএসএম, শেড নম্বর ও সংকোচন হিসাব।">Roll-by-roll tracking, meter/yard measurement, GSM, lot/shade number, and shrinkage allowance.</p>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="p-3 bg-white rounded-3 border shadow-sm h-100">
                            <h6 class="fw-bold text-dark mb-1 garment-trans" data-en="<i class='fa-solid fa-cubes-stacked text-warning me-2'></i> Raw Materials & Trims" data-bn="<i class='fa-solid fa-cubes-stacked text-warning me-2'></i> কাঁচামাল ও ট্রিমস"><i class="fa-solid fa-cubes-stacked text-warning me-2"></i> Raw Materials & Trims</h6>
                            <p class="text-muted small mb-0 garment-trans" data-en="Buttons, zippers, sewing threads, interlining, elastic, hangtags, barcodes, and polybags." data-bn="বোতাম, জিপার, সেলাই সুতা, ইন্টারলাইনিং, ইলাস্টিক, হ্যাংট্যাগ ও পলিব্যাগ।">Buttons, zippers, sewing threads, interlining, elastic, hangtags, barcodes, and polybags.</p>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="p-3 bg-white rounded-3 border shadow-sm h-100">
                            <h6 class="fw-bold text-dark mb-1 garment-trans" data-en="<i class='fa-solid fa-shirt text-warning me-2'></i> Finished Garments Matrix" data-bn="<i class='fa-solid fa-shirt text-warning me-2'></i> উৎপাদিত তৈরি পোশাক ম্যাট্রিক্স"><i class="fa-solid fa-shirt text-warning me-2"></i> Finished Garments Matrix</h6>
                            <p class="text-muted small mb-0 garment-trans" data-en="Size-wise (S/M/L/XL), colour-wise, and style/SKU-wise real-time stock balances." data-bn="সাইজ-ভিত্তিক (S/M/L/XL), রঙ ও স্টাইল ভিত্তিক রিয়েল-টাইম ব্যালেন্স।">Size-wise (S/M/L/XL), colour-wise, and style/SKU-wise real-time stock balances.</p>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="p-3 bg-white rounded-3 border shadow-sm h-100">
                            <h6 class="fw-bold text-dark mb-1 garment-trans" data-en="<i class='fa-solid fa-warehouse text-warning me-2'></i> Multi-Warehouse & Stores" data-bn="<i class='fa-solid fa-warehouse text-warning me-2'></i> মাল্টি-ওয়্যারহাউস ও গুদাম"><i class="fa-solid fa-warehouse text-warning me-2"></i> Multi-Warehouse & Stores</h6>
                            <p class="text-muted small mb-0 garment-trans" data-en="Live stock synchronization across central bonded warehouses, cutting units, and retail outlets." data-bn="বন্ডেড গুদাম, কাটিং ইউনিট এবং আউটলেট শোরুমের মধ্যে লাইভ স্টক সিঙ্ক।">Live stock synchronization across central bonded warehouses, cutting units, and retail outlets.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="bg-white p-4 rounded-4 shadow-sm border">
                    <h5 class="fw-bold mb-3 text-dark d-flex align-items-center garment-trans" data-en="<i class='fa-solid fa-table-cells text-warning me-2'></i> 3D Garment SKU Matrix Preview" data-bn="<i class='fa-solid fa-table-cells text-warning me-2'></i> ৩ডি গার্মেন্টস এসকেইউ ম্যাট্রিক্স ডেমো">
                        <i class="fa-solid fa-table-cells text-warning me-2"></i> 3D Garment SKU Matrix Preview
                    </h5>
                    <div class="table-responsive">
                        <table class="table table-bordered table-sm text-center align-middle mb-2">
                            <thead class="table-dark">
                                <tr>
                                    <th>Style / Color</th>
                                    <th>S</th>
                                    <th>M</th>
                                    <th>L</th>
                                    <th>XL</th>
                                    <th>Total Pcs</th>
                                </tr>
                            </thead>
                            <tbody class="small">
                                <tr>
                                    <td class="text-start fw-bold">Polo #101 - Navy Blue</td>
                                    <td>120</td>
                                    <td>250</td>
                                    <td>300</td>
                                    <td>180</td>
                                    <td class="fw-bold text-success">850 pcs</td>
                                </tr>
                                <tr>
                                    <td class="text-start fw-bold">Polo #101 - Maroon</td>
                                    <td>90</td>
                                    <td>180</td>
                                    <td>210</td>
                                    <td>140</td>
                                    <td class="fw-bold text-success">620 pcs</td>
                                </tr>
                                <tr>
                                    <td class="text-start fw-bold">Denim #404 - Stone Wash</td>
                                    <td>150</td>
                                    <td>320</td>
                                    <td>410</td>
                                    <td>220</td>
                                    <td class="fw-bold text-success">1,100 pcs</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <p class="text-muted small mb-0 garment-trans" data-en="<i class='fa-solid fa-circle-check text-success me-1'></i> Instantly view stock across cutting table, stitching lines, finished boxes, and store racks." data-bn="<i class='fa-solid fa-circle-check text-success me-1'></i> কাটিং টেবিল, সেলাই লাইন ও শোরুম র্যাকের সমস্ত স্টক তাৎক্ষণিক দেখুন।" style="font-size: 11px;">
                        <i class="fa-solid fa-circle-check text-success me-1"></i> Instantly view stock across cutting table, stitching lines, finished boxes, and store racks.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ==========================================
     4. GARMENT MANUFACTURING & PRODUCTION WORKFLOWS
=========================================== -->
<section class="py-5" style="background: #ffffff;">
    <div class="container py-4">
        <div class="text-center max-w-750 mx-auto mb-5">
            <span class="section-tagline garment-trans" data-en="Cut-to-Pack Operations" data-bn="কাট-টু-প্যাক উৎপাদন নিয়ন্ত্রণ">Cut-to-Pack Operations</span>
            <h2 class="fw-bold mb-3 garment-trans" data-en="Garment Manufacturing & Floor-Level Production Workflows" data-bn="গার্মেন্টস উৎপাদন ও ফ্লোর-লেভেল প্রোডাকশন ওয়ার্কফ্লো">Garment Manufacturing & Floor-Level Production Workflows</h2>
            <p class="text-muted lead fs-6 garment-trans" data-en="Complete traceability from fabric consumption calculations to the final export shipping container." data-bn="কাপড় বরাদ্দ ও কাটিং থেকে শুরু করে সেলাই লাইন ব্যালেন্সিং এবং রপ্তানি প্যাকিং তালিকা পর্যন্ত শতভাগ স্বচ্ছতা।">
                Complete traceability from fabric consumption calculations to the final export shipping container.
            </p>
        </div>

        <div class="row g-3 g-md-4">
            <div class="col-6 col-md-4 col-lg-2">
                <div class="workflow-step-card">
                    <div class="step-num">1</div>
                    <h6 class="fw-bold mb-1 garment-trans" data-en="BOM & Costing" data-bn="বিওএম ও কস্টিং">BOM & Costing</h6>
                    <p class="text-muted small mb-0 garment-trans" data-en="Fabric ratio & trims" data-bn="কাপড় অনুপাত ও ট্রিমস" style="font-size: 11px;">Fabric ratio & trims</p>
                </div>
            </div>
            <div class="col-6 col-md-4 col-lg-2">
                <div class="workflow-step-card">
                    <div class="step-num">2</div>
                    <h6 class="fw-bold mb-1 garment-trans" data-en="Cutting Room" data-bn="কাটিং রুম">Cutting Room</h6>
                    <p class="text-muted small mb-0 garment-trans" data-en="Marker & bundle tickets" data-bn="মার্কার ও বান্ডেল টিকিট" style="font-size: 11px;">Marker & bundle tickets</p>
                </div>
            </div>
            <div class="col-6 col-md-4 col-lg-2">
                <div class="workflow-step-card">
                    <div class="step-num">3</div>
                    <h6 class="fw-bold mb-1 garment-trans" data-en="Stitching Lines" data-bn="সেলাই লাইন (সুইং)">Stitching Lines</h6>
                    <p class="text-muted small mb-0 garment-trans" data-en="Hourly output & WIP" data-bn="ঘণ্টায় আউটপুট ও WIP" style="font-size: 11px;">Hourly output & WIP</p>
                </div>
            </div>
            <div class="col-6 col-md-4 col-lg-2">
                <div class="workflow-step-card">
                    <div class="step-num">4</div>
                    <h6 class="fw-bold mb-1 garment-trans" data-en="Washing & Finish" data-bn="ওয়াশিং ও ফিনিশিং">Washing & Finish</h6>
                    <p class="text-muted small mb-0 garment-trans" data-en="Chemical recipes & steam" data-bn="ওয়াশ রেসিপি ও স্টিম" style="font-size: 11px;">Chemical recipes & steam</p>
                </div>
            </div>
            <div class="col-6 col-md-4 col-lg-2">
                <div class="workflow-step-card">
                    <div class="step-num">5</div>
                    <h6 class="fw-bold mb-1 garment-trans" data-en="Quality Control" data-bn="কোয়ালিটি কন্ট্রোল">Quality Control</h6>
                    <p class="text-muted small mb-0 garment-trans" data-en="AQL inspection logs" data-bn="AQL অডিট ও রিওয়ার্ক লগ" style="font-size: 11px;">AQL inspection logs</p>
                </div>
            </div>
            <div class="col-6 col-md-4 col-lg-2">
                <div class="workflow-step-card">
                    <div class="step-num">6</div>
                    <h6 class="fw-bold mb-1 garment-trans" data-en="Packing & Export" data-bn="প্যাকিং ও রপ্তানি">Packing & Export</h6>
                    <p class="text-muted small mb-0 garment-trans" data-en="Carton barcodes & docs" data-bn="কার্টুন বারকোড ও শিপমেন্ট" style="font-size: 11px;">Carton barcodes & docs</p>
                </div>
            </div>
        </div>

        <div class="row g-4 mt-3">
            <div class="col-md-6">
                <div class="p-4 rounded-3 border bg-light h-100">
                    <h5 class="fw-bold mb-2 text-dark garment-trans" data-en="<i class='fa-solid fa-clipboard-list text-warning me-2'></i> Production Orders & Fabric Allocation" data-bn="<i class='fa-solid fa-clipboard-list text-warning me-2'></i> প্রোডাকশন অর্ডার ও কাপড় বরাদ্দকরণ"><i class="fa-solid fa-clipboard-list text-warning me-2"></i> Production Orders & Fabric Allocation</h5>
                    <p class="text-muted small mb-2 garment-trans" data-en="Automate material requisitions based on style technical sheets (Tech Packs). Calculate expected fabric consumption and track actual roll wastage to prevent material leakage." data-bn="বায়ার টেক প্যাক অনুযায়ী স্বয়ংক্রিয় কাঁচামাল বরাদ্দ করুন এবং কাপড়ের অপচয় রোধে রোল ওয়াস্টেজ ট্র্যাক করুন।">Automate material requisitions based on style technical sheets (Tech Packs). Calculate expected fabric consumption and track actual roll wastage to prevent material leakage.</p>
                    <ul class="garment-check-list">
                        <li class="garment-trans" data-en="Bill of Materials (BOM) with automatic wastage percentage" data-bn="স্বয়ংক্রিয় অপচয় হার সহ বিল অফ মেটেরিয়ালস (BOM)">Bill of Materials (BOM) with automatic wastage percentage</li>
                        <li class="garment-trans" data-en="Automated cutting table issue notes" data-bn="কাটিং টেবিলের স্বয়ংক্রিয় ইস্যু নোট">Automated cutting table issue notes</li>
                        <li class="garment-trans" data-en="Sub-contracting job cards for washing & embroidery" data-bn="ওয়াশিং ও এমব্রয়ডারির সাব-কন্ট্রাক্ট জব কার্ড">Sub-contracting job cards for washing & embroidery</li>
                    </ul>
                </div>
            </div>

            <div class="col-md-6">
                <div class="p-4 rounded-3 border bg-light h-100">
                    <h5 class="fw-bold mb-2 text-dark garment-trans" data-en="<i class='fa-solid fa-chart-line text-warning me-2'></i> Real-Time WIP (Work-In-Progress) Tracking" data-bn="<i class='fa-solid fa-chart-line text-warning me-2'></i> রিয়েল-টাইম WIP (চলতি কাজের অগ্রগতি) ট্র্যাকিং"><i class="fa-solid fa-chart-line text-warning me-2"></i> Real-Time WIP (Work-In-Progress) Tracking</h5>
                    <p class="text-muted small mb-2 garment-trans" data-en="Monitor each bundle across sewing lines via barcode scan or mobile station. Identify assembly line bottlenecks instantly and balance operator load in real time." data-bn="বারকোড স্ক্যানিংয়ের মাধ্যমে প্রতিটি সেলাই বান্ডেল ট্র্যাক করুন এবং সুইং লাইনের বাধা সাথে সাথে দূর করুন।">Monitor each bundle across sewing lines via barcode scan or mobile station. Identify assembly line bottlenecks instantly and balance operator load in real time.</p>
                    <ul class="garment-check-list">
                        <li class="garment-trans" data-en="Hourly production display (Target vs. Actual)" data-bn="ঘণ্টায় উৎপাদন ডিসপ্লে (টার্গেট বনাম অর্জন)">Hourly production display (Target vs. Actual)</li>
                        <li class="garment-trans" data-en="Sewing line rejection & alteration logs" data-bn="সেলাই লাইনের রিজেকশন ও অলটারেশন লগ">Sewing line rejection & alteration logs</li>
                        <li class="garment-trans" data-en="Finished goods transfer notes to central packing" data-bn="প্যাকিং বিভাগে সমাপ্ত পণ্য হস্তান্তরের রেকর্ড">Finished goods transfer notes to central packing</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ==========================================
     5. GARMENT PURCHASING & SALES MANAGEMENT
=========================================== -->
<section class="py-5" style="background: #f8fafc;">
    <div class="container py-4">
        <div class="row g-4">
            <!-- Garment Purchasing -->
            <div class="col-lg-6">
                <div class="card-hover-box">
                    <span class="section-tagline garment-trans" data-en="Procurement Flow" data-bn="ক্রয় ও সাপ্লাই চেইন">Procurement Flow</span>
                    <h3 class="fw-bold mb-3 garment-trans" data-en="Garment Purchasing & Supplier Management" data-bn="গার্মেন্টস ক্রয় ও সাপ্লায়ার ব্যবস্থাপনা">Garment Purchasing & Supplier Management</h3>
                    <p class="text-muted small mb-3 garment-trans" data-en="Streamline fabric and accessories procurement from domestic yarn mills in Narayanganj and overseas suppliers." data-bn="নারায়ণগঞ্জের দেশীয় সুতা মিল ও বিদেশি সরবরাহকারীদের থেকে কাঁচামাল ক্রয় সহজ করুন।">
                        Streamline fabric and accessories procurement from domestic yarn mills in Narayanganj and overseas suppliers.
                    </p>
                    <ul class="garment-check-list mb-3">
                        <li class="garment-trans" data-en="<strong>Fabric & Trims Suppliers:</strong> Centralized vendor database with lead time ratings." data-bn="<strong>কাপড় ও এক্সেসরিজ সরবরাহকারী:</strong> লিড-টাইম রেটিং সহ কেন্দ্রীয় ভেন্ডর ডেটাবেস।"><strong>Fabric & Trims Suppliers:</strong> Centralized vendor database with lead time ratings.</li>
                        <li class="garment-trans" data-en="<strong>Purchase Orders (PO):</strong> Create multi-currency POs (BDT, USD, EUR, CNY) with detailed GSM and yarn specs." data-bn="<strong>পারচেজ অর্ডার (PO):</strong> বহু-মুদ্রায় জিএসএম ও সুতা স্পেসিফিকেশন সহ পারচেজ অর্ডার।"><strong>Purchase Orders (PO):</strong> Create multi-currency POs (BDT, USD, EUR, CNY) with detailed GSM and yarn specs.</li>
                        <li class="garment-trans" data-en="<strong>Supplier History & Pricing:</strong> Compare historical yarn and accessory rates across vendors." data-bn="<strong>দর তুলনা:</strong> বিভিন্ন ভেন্ডরের অতীত রেট তুলনা।"><strong>Supplier History & Pricing:</strong> Compare historical yarn and accessory rates across vendors.</li>
                        <li class="garment-trans" data-en="<strong>Material Landed Costing:</strong> Allocate customs duty, freight, and port handling directly to fabric batch costs." data-bn="<strong>ল্যান্ডেড কস্টিং:</strong> শুল্ক ও পরিবহন খরচ সরাসরি কাপড়ের ব্যাচে বরাদ্দ।"><strong>Material Landed Costing:</strong> Allocate customs duty, freight, and port handling directly to fabric batch costs.</li>
                        <li class="garment-trans" data-en="<strong>Automated Reorder Alerts:</strong> Set minimum stock thresholds for critical buttons, zippers, and threads." data-bn="<strong>স্বয়ংক্রিয় অ্যালার্ট:</strong> বোতাম, জিপার ও সুতার ঘাটতি প্রতিরোধে অ্যালার্ট।"><strong>Automated Reorder Alerts:</strong> Set minimum stock thresholds for critical buttons, zippers, and threads.</li>
                    </ul>
                </div>
            </div>

            <!-- Garment Sales & Distribution -->
            <div class="col-lg-6">
                <div class="card-hover-box">
                    <span class="section-tagline garment-trans" data-en="Commercial Channels" data-bn="বাণিজ্যিক চ্যানেল">Commercial Channels</span>
                    <h3 class="fw-bold mb-3 garment-trans" data-en="Garment Sales, Wholesale & Retail POS" data-bn="গার্মেন্টস পাইকারি বিক্রয় ও রিটেল শো-রুম পিওএস">Garment Sales, Wholesale & Retail POS</h3>
                    <p class="text-muted small mb-3 garment-trans" data-en="Manage multi-tier pricing, wholesale dealer accounts, retail showrooms, and international buyer invoices." data-bn="বহু-স্তরীয় মূল্য নির্ধারণ, ডিলার অ্যাকাউন্ট, রিটেল শোরুম ও আন্তর্জাতিক বায়ার ইনভয়েস পরিচালনা করুন।">
                        Manage multi-tier pricing, wholesale dealer accounts, retail showrooms, and international buyer invoices.
                    </p>
                    <ul class="garment-check-list mb-3">
                        <li class="garment-trans" data-en="<strong>Wholesale & Distributor Orders:</strong> Matrix order booking with bulk volume discounting." data-bn="<strong>পাইকারি ও ডিস্ট্রিবিউটর অর্ডার:</strong> বাল্ক ভলিউম ডিসকাউন্ট সহ ম্যাট্রিক্স বুকিং।"><strong>Wholesale & Distributor Orders:</strong> Matrix order booking with bulk volume discounting.</li>
                        <li class="garment-trans" data-en="<strong>Retail Showroom POS:</strong> High-speed barcode checkout with size/color exchange support and bKash QR." data-bn="<strong>শোরুম পিওএস:</strong> দ্রুত বারকোড বিলিং, সাইজ/রং এক্সচেঞ্জ ও বিকাশ কিউআর সাপোর্ট।"><strong>Retail Showroom POS:</strong> High-speed barcode checkout with size/color exchange support and bKash QR.</li>
                        <li class="garment-trans" data-en="<strong>Corporate & Institutional Orders:</strong> Dedicated contract pricing for school and company uniforms." data-bn="<strong>কর্পোরেট ও প্রাতিষ্ঠানিক অর্ডার:</strong> ইউনিফর্ম ও প্রাতিষ্ঠানিক চুক্তি মূল্য।"><strong>Corporate & Institutional Orders:</strong> Dedicated contract pricing for school and company uniforms.</li>
                        <li class="garment-trans" data-en="<strong>Customer-Specific Price Tiers:</strong> Set custom margins and credit terms for different dealer tiers." data-bn="<strong>ডিলার-ভিত্তিক মূল্য:</strong> ডিলার স্তর অনুযায়ী কাস্টম মার্জিন ও বাকির শর্ত।"><strong>Customer-Specific Price Tiers:</strong> Set custom margins and credit terms for different dealer tiers.</li>
                        <li class="garment-trans" data-en="<strong>Payment Tracking & Invoices:</strong> Automated credit aging ledgers and WhatsApp payment reminders." data-bn="<strong>বকেয়া খতিয়ান:</strong> স্বয়ংক্রিয় পেমেন্ট ট্র্যাকিং ও হোয়াটসঅ্যাপ তাগাদা।"><strong>Payment Tracking & Invoices:</strong> Automated credit aging ledgers and WhatsApp payment reminders.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ==========================================
     6. BANGLADESH-SPECIFIC GARMENT SEGMENTS
=========================================== -->
<section class="py-5" style="background: #ffffff;">
    <div class="container py-4">
        <div class="text-center max-w-750 mx-auto mb-5">
            <span class="section-tagline garment-trans" data-en="Specialized Industry Coverage" data-bn="শিল্প খাত কাভারেজ">Specialized Industry Coverage</span>
            <h2 class="fw-bold mb-3 garment-trans" data-en="Specialized Solutions for Bangladesh's Garment Sectors" data-bn="বাংলাদেশের পোশাক শিল্পের বিভিন্ন খাতের জন্য বিশেষায়িত সমাধান">Specialized Solutions for Bangladesh's Garment Sectors</h2>
            <p class="text-muted lead fs-6 garment-trans" data-en="Purpose-built modules tailored for every sub-sector within the Bangladesh RMG ecosystem." data-bn="আরএমজি, নিটওয়্যার, ওভেন, ডেনিম, সুতা ও এক্সেসরিজ খাতের প্রতিটি প্রক্রিয়ার জন্য প্রস্তুত মডিউল।">
                Purpose-built modules tailored for every sub-sector within the Bangladesh RMG ecosystem.
            </p>
        </div>

        <div class="row g-3 g-md-4">
            <div class="col-md-6 col-lg-4"><div class="segment-card"><h6 class="fw-bold mb-1 text-dark garment-trans" data-en="1. Ready-Made Garments (RMG)" data-bn="১. তৈরি পোশাক (RMG)">1. Ready-Made Garments (RMG)</h6><p class="text-muted small mb-0 garment-trans" data-en="High-volume woven and knit export manufacturing with full line balancing and packing lists." data-bn="উচ্চ ভলিউমের ওভেন ও নিটওয়্যার রপ্তানি উৎপাদন।">High-volume woven and knit export manufacturing with full line balancing and packing lists.</p></div></div>
            <div class="col-md-6 col-lg-4"><div class="segment-card"><h6 class="fw-bold mb-1 text-dark garment-trans" data-en="2. Knitwear & Sweaters" data-bn="২. নিটওয়্যার ও সোয়েটার">2. Knitwear & Sweaters</h6><p class="text-muted small mb-0 garment-trans" data-en="Yarn winding logs, knitting machine gauges, jacquard panel costing, and linker tracking." data-bn="সুতা ওয়াইন্ডিং, নিটিং মেশিন গেজ ও লিংকার ট্র্যাকিং।">Yarn winding logs, knitting machine gauges, jacquard panel costing, and linker tracking.</p></div></div>
            <div class="col-md-6 col-lg-4"><div class="segment-card"><h6 class="fw-bold mb-1 text-dark garment-trans" data-en="3. Woven Garments (Denim & Shirts)" data-bn="৩. ওভেন পোশাক (ডেনিম ও শার্ট)">3. Woven Garments (Denim & Shirts)</h6><p class="text-muted small mb-0 garment-trans" data-en="Heavy denim wash cycles, ozone treatment logs, pocketing fabric allocation, and rivetting." data-bn="ডেনিম ওয়াশ সাইকেল, ওজোন ট্রিটমেন্ট ও রিভেট ট্র্যাকিং।">Heavy denim wash cycles, ozone treatment logs, pocketing fabric allocation, and rivetting.</p></div></div>
            <div class="col-md-6 col-lg-4"><div class="segment-card"><h6 class="fw-bold mb-1 text-dark garment-trans" data-en="4. Textile Spinning & Weaving" data-bn="৪. টেক্সটাইল স্পিনিং ও উইভিং">4. Textile Spinning & Weaving</h6><p class="text-muted small mb-0 garment-trans" data-en="Cotton bale inventory, count measurement, spinning spindle output, and grey fabric rolls." data-bn="তুলা বেল ইনভেন্টরি, সুতা কাউন্ট ও গ্রে ফেব্রিক রোল নিয়ন্ত্রণ।">Cotton bale inventory, count measurement, spinning spindle output, and grey fabric rolls.</p></div></div>
            <div class="col-md-6 col-lg-4"><div class="segment-card"><h6 class="fw-bold mb-1 text-dark garment-trans" data-en="5. Fashion & Apparel Retail" data-bn="৫. ফ্যাশন ও পোশাক রিটেল">5. Fashion & Apparel Retail</h6><p class="text-muted small mb-0 garment-trans" data-en="Multi-outlet boutique retail POS, VIP loyalty tiers, seasonal clearance promos, and gift cards." data-bn="মাল্টি-আউটলেট বুটিক পিওএস, ভিআইপি লয়ালটি ও ক্লিয়ারেন্স সেল।">Multi-outlet boutique retail POS, VIP loyalty tiers, seasonal clearance promos, and gift cards.</p></div></div>
            <div class="col-md-6 col-lg-4"><div class="segment-card"><h6 class="fw-bold mb-1 text-dark garment-trans" data-en="6. Home Textiles" data-bn="৬. হোম টেক্সটাইল">6. Home Textiles</h6><p class="text-muted small mb-0 garment-trans" data-en="Bed sheet sizing, terry towel GSM tracking, curtain rolls, quilting batches, and export sets." data-bn="বেড শিট সাইজিং, তোয়ালে জিএসএম ট্র্যাকিং ও রপ্তানি সেট।">Bed sheet sizing, terry towel GSM tracking, curtain rolls, quilting batches, and export sets.</p></div></div>
            <div class="col-md-6 col-lg-4"><div class="segment-card"><h6 class="fw-bold mb-1 text-dark garment-trans" data-en="7. Uniforms & Institutional Apparel" data-bn="৭. ইউনিফর্ম ও প্রাতিষ্ঠানিক পোশাক">7. Uniforms & Institutional Apparel</h6><p class="text-muted small mb-0 garment-trans" data-en="School, hospital and corporate staff sizing, contract tenders, and scheduled recurring deliveries." data-bn="স্কুল, হাসপাতাল ও কর্পোরেট স্টাফ সাইজিং ও শিডিউল ডেলিভারি।">School, hospital and corporate staff sizing, contract tenders, and scheduled recurring deliveries.</p></div></div>
            <div class="col-md-6 col-lg-4"><div class="segment-card"><h6 class="fw-bold mb-1 text-dark garment-trans" data-en="8. Workwear & Industrial Safety" data-bn="৮. ওয়ার্কওয়্যার ও সেফটি পোশাক">8. Workwear & Industrial Safety</h6><p class="text-muted small mb-0 garment-trans" data-en="High-visibility reflective tape tracking, flame-retardant fabric batch certification, and safety boots." data-bn="উচ্চ দৃশ্যমান রিফ্লেক্টিভ টেপ ও অগ্নি-প্রতিরোধী কাপড় সার্টিফিকেশন।">High-visibility reflective tape tracking, flame-retardant fabric batch certification, and safety boots.</p></div></div>
            <div class="col-md-6 col-lg-4"><div class="segment-card"><h6 class="fw-bold mb-1 text-dark garment-trans" data-en="9. Sportswear & Activewear" data-bn="৯. স্পোর্টসওয়্যার ও অ্যাক্টিভওয়্যার">9. Sportswear & Activewear</h6><p class="text-muted small mb-0 garment-trans" data-en="Spandex/polyester stretch fabric tension control, heat-seal branding, and moisture-wicking tests." data-bn="স্প্যানডেক্স/পলিয়েস্টার স্ট্রেচ ফেব্রিক কন্ট্রোল ও হিট-সিল ব্র্যান্ডিং।">Spandex/polyester stretch fabric tension control, heat-seal branding, and moisture-wicking tests.</p></div></div>
            <div class="col-md-6 col-lg-4"><div class="segment-card"><h6 class="fw-bold mb-1 text-dark garment-trans" data-en="10. Leather Goods & Footwear" data-bn="১০. চামড়া সামগ্রী ও জুতা কারখানা">10. Leather Goods & Footwear</h6><p class="text-muted small mb-0 garment-trans" data-en="Hide grade grading, sole molding cycles, leather cutting dies, and export packaging." data-bn="চামড়া গ্রেডিং, সোল মোল্ডিং সাইকেল ও রপ্তানি প্যাকেজিং।">Hide grade grading, sole molding cycles, leather cutting dies, and export packaging.</p></div></div>
            <div class="col-md-6 col-lg-4"><div class="segment-card"><h6 class="fw-bold mb-1 text-dark garment-trans" data-en="11. Trims, Zippers & Accessories" data-bn="১১. ট্রিমস, জিপার ও এক্সেসরিজ">11. Trims, Zippers & Accessories</h6><p class="text-muted small mb-0 garment-trans" data-en="Metal/plastic zipper teeth casting, button plating baths, polybag extrusion, and carton lot inventory." data-bn="মেটাল জিপার কাস্টিং, বোতাম প্লেটিং ও পলিব্যাগ এক্সট্রুশন।">Metal/plastic zipper teeth casting, button plating baths, polybag extrusion, and carton lot inventory.</p></div></div>
        </div>
    </div>
</section>

<!-- ==========================================
     7. EXPORT-ORIENTED SUITE
=========================================== -->
<section class="py-5" style="background: linear-gradient(135deg, #090e24 0%, #151a3d 100%); color: #ffffff;">
    <div class="container py-4">
        <div class="row align-items-center g-5">
            <div class="col-lg-6">
                <span class="badge px-3 py-2 text-uppercase fw-bold mb-3 garment-trans" data-en="Export Compliance & Trade Logistics" data-bn="রপ্তানি কমপ্লায়েন্স ও ট্রেড লজিস্টিকস" style="background: rgba(224, 105, 48, 0.2); color: #ffb188; font-size: 11px;">
                    Export Compliance & Trade Logistics
                </span>
                <h2 class="fw-bold mb-3 garment-trans" data-en="Export-Oriented Garment Business Suite" data-bn="রপ্তানিমুখী গার্মেন্টস ব্যবসা ও আন্তর্জাতিক বাণিজ্য স্যুট">Export-Oriented Garment Business Suite</h2>
                <p class="text-white-50 lead fs-6 mb-4 garment-trans" data-en="Tailored for Bangladesh export houses and manufacturers managing global buyers across the EU, USA, UK, and Asia." data-bn="ইউরোপ, আমেরিকা ও এশিয়ার আন্তর্জাতিক বায়ারদের সাথে এল/সি এবং রপ্তানি চালান পরিচালনার নিখুঁত সিস্টেম।">
                    Tailored for Bangladesh export houses and manufacturers managing global buyers across the EU, USA, UK, and Asia.
                </p>

                <div class="row g-3">
                    <div class="col-sm-6"><div class="d-flex align-items-center gap-2 text-white"><i class="fa-solid fa-circle-check text-warning"></i> <span class="garment-trans" data-en="Buyer tech packs & approvals" data-bn="বায়ার টেক প্যাক ও স্যাম্পল অনুমোদন">Buyer tech packs & approvals</span></div></div>
                    <div class="col-sm-6"><div class="d-flex align-items-center gap-2 text-white"><i class="fa-solid fa-circle-check text-warning"></i> <span class="garment-trans" data-en="Export proforma invoices & L/C" data-bn="রপ্তানি প্রফর্মা ইনভয়েস ও এল/সি">Export proforma invoices & L/C</span></div></div>
                    <div class="col-sm-6"><div class="d-flex align-items-center gap-2 text-white"><i class="fa-solid fa-circle-check text-warning"></i> <span class="garment-trans" data-en="Bonded warehouse issue records" data-bn="বন্ডেড ওয়্যারহাউস ইস্যু রেকর্ড">Bonded warehouse issue records</span></div></div>
                    <div class="col-sm-6"><div class="d-flex align-items-center gap-2 text-white"><i class="fa-solid fa-circle-check text-warning"></i> <span class="garment-trans" data-en="Automated container packing list" data-bn="স্বয়ংক্রিয় কন্টেইনার প্যাকিং লিস্ট">Automated container packing list</span></div></div>
                    <div class="col-sm-6"><div class="d-flex align-items-center gap-2 text-white"><i class="fa-solid fa-circle-check text-warning"></i> <span class="garment-trans" data-en="Chittagong port dispatch docs" data-bn="চট্টগ্রাম বন্দর ডিসপ্যাচ ও মার্কিং">Chittagong port dispatch docs</span></div></div>
                    <div class="col-sm-6"><div class="d-flex align-items-center gap-2 text-white"><i class="fa-solid fa-circle-check text-warning"></i> <span class="garment-trans" data-en="Multi-currency export accounting" data-bn="বহু-মুদ্রায় রপ্তানি হিসাব ও রিয়ালাইজেশন">Multi-currency export accounting</span></div></div>
                </div>

                <div class="mt-4 pt-2">
                    <a href="#garment-demo" class="btn btn-lg px-4 py-3 text-white fw-bold rounded-pill garment-trans" data-en="Request Export Suite Demo <i class='fa-solid fa-arrow-right ms-2'></i>" data-bn="রপ্তানি স্যুট ডেমো দেখুন <i class='fa-solid fa-arrow-right ms-2'></i>" style="background: #e06930;">
                        Request Export Suite Demo <i class="fa-solid fa-arrow-right ms-2"></i>
                    </a>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="bg-white bg-opacity-10 p-4 rounded-4 border border-white border-opacity-10">
                    <h5 class="fw-bold text-white mb-3 garment-trans" data-en="<i class='fa-solid fa-certificate text-warning me-2'></i> Global Buyer Compliance Integration" data-bn="<i class='fa-solid fa-certificate text-warning me-2'></i> আন্তর্জাতিক বায়ার কমপ্লায়েন্স ইন্টিগ্রেশন"><i class="fa-solid fa-certificate text-warning me-2"></i> Global Buyer Compliance Integration</h5>
                    <p class="text-white-50 small mb-3 garment-trans" data-en="Maintain complete digital audit trails for buyer social compliance, factory floor safety audits, and material source verification." data-bn="বায়ার সোশ্যাল কমপ্লায়েন্স, ফ্লোর সেফটি অডিট এবং কাঁচামালের উৎসের সম্পূর্ণ ডিজিটাল অডিট ট্রেইল বজায় রাখুন।">Maintain complete digital audit trails for buyer social compliance, factory floor safety audits, and material source verification.</p>
                    <div class="d-flex flex-wrap gap-2">
                        <span class="badge bg-dark px-3 py-2 border border-secondary text-white">BGMEA Data Formats</span>
                        <span class="badge bg-dark px-3 py-2 border border-secondary text-white">BKMEA Standards</span>
                        <span class="badge bg-dark px-3 py-2 border border-secondary text-white">AQL 1.5 / 2.5 QC</span>
                        <span class="badge bg-dark px-3 py-2 border border-secondary text-white">Oeko-Tex Trims Mapping</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ==========================================
     8. FAQ SECTION (7 FAQs)
=========================================== -->
<section class="py-5" style="background: #f8fafc;">
    <div class="container py-4">
        <div class="text-center max-w-750 mx-auto mb-5">
            <span class="section-tagline garment-trans" data-en="Frequently Asked Questions" data-bn="সচরাচর জিজ্ঞাসা">Frequently Asked Questions</span>
            <h2 class="fw-bold mb-3 garment-trans" data-en="Bangladesh Garment ERP FAQs" data-bn="বাংলাদেশে গার্মেন্টস ইআরপি সম্পর্কিত সচরাচর জিজ্ঞাসা">Bangladesh Garment ERP FAQs</h2>
            <p class="text-muted lead fs-6 garment-trans" data-en="Answers to common questions about deploying Digify Cloud ERP in Bangladesh garment factories." data-bn="বাংলাদেশের পোশাক কারখানায় ডিজিফাই ক্লাউড ইআরপি ব্যবহার সম্পর্কিত সাধারণ উত্তর।">
                Answers to common questions about deploying Digify Cloud ERP in Bangladesh garment factories.
            </p>
        </div>

        <div class="max-w-850 mx-auto">
            <div class="accordion faq-accordion" id="garmentFaqAccordion">
                
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#gfaq1">
                            <i class="fa-regular fa-circle-question me-2 text-primary"></i>
                            <span class="garment-trans" data-en="How does Digify Garment ERP handle fabric roll inventory?" data-bn="ডিজিফাই গার্মেন্টস ইআরপি কীভাবে কাপড়ের রোল ইনভেন্টরি পরিচালনা করে?">How does Digify Garment ERP handle fabric roll inventory?</span>
                        </button>
                    </h2>
                    <div id="gfaq1" class="accordion-collapse collapse show" data-bs-parent="#garmentFaqAccordion">
                        <div class="accordion-body garment-trans" data-en="Digify allows roll-by-roll tracking with barcode/QR scanning. Each roll records length (meters/yards), GSM, shade lot, shrinkage percentage, and warehouse bin location. When cutting orders are issued, fabric consumption is depleted roll-by-roll with end-bit wastage logs." data-bn="ডিজিফাই বারকোড/কিউআর কোডের মাধ্যমে প্রতিটি কাপড়ের রোল আলাদাভাবে ট্র্যাক করে। গজ/মিটার, জিএসএম, শেড নম্বর ও সংকোচন হার সংরক্ষণ করে কাটিং টেবিলে ইস্যু করা হয়।">
                            Digify allows roll-by-roll tracking with barcode/QR scanning. Each roll records length (meters/yards), GSM, shade lot, shrinkage percentage, and warehouse bin location. When cutting orders are issued, fabric consumption is depleted roll-by-roll with end-bit wastage logs.
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#gfaq2">
                            <i class="fa-regular fa-circle-question me-2 text-primary"></i>
                            <span class="garment-trans" data-en="Can it track hourly line output and operator efficiency on the sewing floor?" data-bn="এটি কি সেলাই ফ্লোরে ঘণ্টায় আউটপুট ও অপারেটর দক্ষতা ট্র্যাক করতে পারে?">Can it track hourly line output and operator efficiency on the sewing floor?</span>
                        </button>
                    </h2>
                    <div id="gfaq2" class="accordion-collapse collapse" data-bs-parent="#garmentFaqAccordion">
                        <div class="accordion-body garment-trans" data-en="Yes. Digify supports bundle barcode scanning at each station. Line supervisors can monitor real-time hourly production versus targets, track individual operator outputs, and pinpoint bottlenecks on the assembly floor instantly." data-bn="হ্যাঁ। ডিজিফাই বান্ডেল বারকোড স্ক্যানিংয়ের মাধ্যমে প্রতি ঘণ্টার লক্ষ্যমাত্রা ও অর্জন প্রদর্শন করে এবং সেলাই লাইনের জটলা দ্রুত সমাধান করে।">
                            Yes. Digify supports bundle barcode scanning at each station. Line supervisors can monitor real-time hourly production versus targets, track individual operator outputs, and pinpoint bottlenecks on the assembly floor instantly.
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#gfaq3">
                            <i class="fa-regular fa-circle-question me-2 text-primary"></i>
                            <span class="garment-trans" data-en="Does the software support multi-currency export L/C billing?" data-bn="সফটওয়্যারটি কি বহু-মুদ্রায় রপ্তানি এল/সি বিলিং সমর্থন করে?">Does the software support multi-currency export L/C billing?</span>
                        </button>
                    </h2>
                    <div id="gfaq3" class="accordion-collapse collapse" data-bs-parent="#garmentFaqAccordion">
                        <div class="accordion-body garment-trans" data-en="Yes. You can manage export proforma invoices, export packing lists, and commercial invoices in USD, EUR, GBP, or CNY with real-time BDT exchange rate conversion and bank realization tracking." data-bn="হ্যাঁ। আপনি মার্কিন ডলার (USD), ইউরো (EUR), পাউন্ড (GBP) ইত্যাদিতে এক্সপোর্ট প্যাকিং লিস্ট ও ইনভয়েস তৈরি করতে পারেন।">
                            Yes. You can manage export proforma invoices, export packing lists, and commercial invoices in USD, EUR, GBP, or CNY with real-time BDT exchange rate conversion and bank realization tracking.
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

<!-- ==========================================
     9. FINAL CTA SECTION
=========================================== -->
<section class="py-5 text-white" style="background: linear-gradient(135deg, #090e24 0%, #151a3d 100%); border-top: 3px solid #e06930;">
    <div class="container py-4 text-center">
        <span class="badge mb-3 px-3 py-2 text-uppercase fw-bold garment-trans" data-en="🇧🇩 Digitize Your Garment Factory Today" data-bn="🇧🇩 আজই আপনার গার্মেন্টস ফ্যাক্টরি ডিজিটাল করুন" style="background: rgba(224, 105, 48, 0.2); color: #ffb188; font-size: 11px;">
            🇧🇩 Digitize Your Garment Factory Today
        </span>
        <h2 class="fw-bold mb-3 display-6 garment-trans" data-en="Ready to Supercharge Your Garment & RMG Operations?" data-bn="আপনার গার্মেন্টস ফ্যাক্টরি ডিজিটাল করতে প্রস্তুত?">Ready to Supercharge Your Garment & RMG Operations?</h2>
        <p class="text-white-50 lead fs-6 max-w-750 mx-auto mb-4 garment-trans" data-en="Eliminate fabric wastage, accelerate export delivery timelines, and synchronize production across cutting, sewing, and packing with Digify Cloud ERP." data-bn="কাপড়ের অপচয় রোধ করুন, ডেলিভারি সময় ত্বরান্বিত করুন এবং ডিজিফাই ক্লাউড ইআরপির সাথে উৎপাদন সক্ষমতা বাড়ান।">
            Eliminate fabric wastage, accelerate export delivery timelines, and synchronize production across cutting, sewing, and packing with Digify Cloud ERP.
        </p>
        <div class="d-flex flex-wrap justify-content-center gap-3">
            <a href="#garment-demo" class="btn btn-lg px-5 py-3 text-white fw-bold rounded-pill shadow-lg garment-trans" 
                data-en="<i class='fa-solid fa-calendar-check me-2'></i> Request Live Garment Demo"
                data-bn="<i class='fa-solid fa-calendar-check me-2'></i> ফ্রি লাইভ ডেমো বুক করুন"
                style="background: linear-gradient(135deg, #e06930, #fbc145);">
                <i class="fa-solid fa-calendar-check me-2"></i> Request Live Garment Demo
            </a>
            <a href="https://wa.me/917425016636?text=Hi%20Digify%20Team,%20I%20want%20to%20schedule%20a%20garment%20ERP%20demo%20for%20Bangladesh." target="_blank" class="btn btn-lg px-5 py-3 btn-outline-light rounded-pill fw-semibold garment-trans"
                data-en="<i class='fa-brands fa-whatsapp text-success me-2'></i> WhatsApp Apparel Team"
                data-bn="<i class='fa-brands fa-whatsapp text-success me-2'></i> হোয়াটসঅ্যাপে কথা বলুন">
                <i class="fa-brands fa-whatsapp text-success me-2"></i> WhatsApp Apparel Team
            </a>
        </div>
    </div>
</section>

</div><!-- /.garment-page-wrapper -->

<!-- ==========================================
     BENGALI / ENGLISH LOCALIZATION ENGINE
=========================================== -->
<script>
function switchGarmentLang(lang) {
    var btnEn = document.getElementById('btnGarmentLangEn');
    var btnBn = document.getElementById('btnGarmentLangBn');

    if (lang === 'bn') {
        if (btnEn) btnEn.classList.remove('active');
        if (btnBn) btnBn.classList.add('active');
    } else {
        if (btnBn) btnBn.classList.remove('active');
        if (btnEn) btnEn.classList.add('active');
    }

    var elements = document.querySelectorAll('.garment-trans');
    elements.forEach(function(el) {
        var text = el.getAttribute('data-' + lang);
        if (text) {
            el.innerHTML = text;
        }
    });

    // Also update form select options
    var indSelect = document.querySelector('#garment-demo select[name="industry"]');
    if (indSelect) {
        if (lang === 'bn') {
            indSelect.options[0].text = "তৈরি পোশাক (RMG) কারখানা";
            indSelect.options[1].text = "নিটওয়্যার, টি-শার্ট ও সোয়েটার";
            indSelect.options[2].text = "ওভেন ও ডেনিম উৎপাদন কারখানা";
            indSelect.options[3].text = "টেক্সটাইল মিল ও সুতা পাইকারি (ইসলামপুর/নারায়ণগঞ্জ)";
            indSelect.options[4].text = "ফ্যাশন ব্র্যান্ড ও মাল্টি-স্টোর রিটেল";
            indSelect.options[5].text = "ইউনিফর্ম ও প্রাতিষ্ঠানিক ওয়ার্কওয়্যার";
            indSelect.options[6].text = "গার্মেন্টস রপ্তানিকারক ও বায়িং এজেন্ট";
            indSelect.options[7].text = "ট্রিমস, জিপার ও এক্সেসরিজ সরবরাহকারী";
            indSelect.options[8].text = "চামড়াজাত পণ্য ও জুতা কারখানা";
        } else {
            indSelect.options[0].text = "Ready-Made Garments (RMG) Factory";
            indSelect.options[1].text = "Knitwear, T-Shirts & Sweaters";
            indSelect.options[2].text = "Woven Garments & Denim Manufacturing";
            indSelect.options[3].text = "Textile Mill & Yarn Wholesale (Islampur/Narayanganj)";
            indSelect.options[4].text = "Fashion Brand & Multi-Store Retail";
            indSelect.options[5].text = "Uniforms & Institutional Workwear";
            indSelect.options[6].text = "Garment Export House / Buying Agent";
            indSelect.options[7].text = "Trims, Zippers & Accessories Supplier";
            indSelect.options[8].text = "Leather Goods & Footwear Factory";
        }
    }
}
</script>

<?php include(__DIR__ . '/../../footer.php'); ?>
