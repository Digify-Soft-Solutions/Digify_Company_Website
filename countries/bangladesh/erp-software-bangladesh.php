<?php 
include_once(__DIR__ . '/../../db.php');
include_once(__DIR__ . '/../../fetch_meta.php');

$pageTitle = "ERP Software Bangladesh | Cloud ERP for Retail, Wholesale & Manufacturing";
$pageDescription = "Digify Soft Solutions provides cloud ERP software for businesses in Bangladesh with inventory, accounting, VAT management, POS, CRM, payroll, purchasing, manufacturing and business analytics.";
$pageKeywords = "ERP software Bangladesh, ERP software in Bangladesh, Cloud ERP Bangladesh, ERP system Bangladesh, Business management software Bangladesh, Accounting ERP Bangladesh, Inventory management software Bangladesh, Retail ERP Bangladesh, Manufacturing ERP Bangladesh, Wholesale ERP Bangladesh, POS software Bangladesh, VAT ERP software Bangladesh, CRM software Bangladesh, Payroll software Bangladesh, Cloud business software Bangladesh, ERP solution for SMEs Bangladesh, ERP software for garments Bangladesh, ERP software for textile industry Bangladesh, ERP software for distributors Bangladesh, RMG ERP Bangladesh, Garment manufacturing software Bangladesh";
$pageCanonical = "https://www.digifysoft.in/erp-software-bangladesh";

include(__DIR__ . '/../../top.php');
include(__DIR__ . '/../../header.php');
?>

<style>
/* Base Reset & Styling for Bangladesh Page */
.bd-page-wrapper {
    font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
    color: #1e293b;
    overflow-x: hidden;
}

/* Hero Section */
.bd-hero {
    background: linear-gradient(135deg, #090e24 0%, #111827 50%, #1e1b4b 100%);
    color: #ffffff;
    padding: 70px 0 85px;
    position: relative;
    overflow: hidden;
    border-bottom: 3px solid #e06930;
}
.bd-hero::before {
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
.bd-hero-badge {
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
.bd-hero h1 {
    font-size: 42px;
    font-weight: 900;
    line-height: 1.25;
    margin-bottom: 18px;
    letter-spacing: -0.5px;
}
.bd-hero-sub {
    font-size: 18px;
    font-weight: 600;
    color: #fdba74;
    line-height: 1.5;
    margin-bottom: 14px;
}
.bd-hero-desc {
    font-size: 16px;
    line-height: 1.7;
    color: rgba(255, 255, 255, 0.85);
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
    background: linear-gradient(135deg, #e06930 0%, #f58220 100%);
    color: #ffffff;
    box-shadow: 0 4px 12px rgba(224, 105, 48, 0.4);
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

/* Cards & Utilities */
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

.module-card {
    background: #ffffff;
    border: 1px solid #e2e8f0;
    border-radius: 14px;
    padding: 20px;
    height: 100%;
    transition: all 0.25s ease;
}
.module-card:hover {
    border-color: #e06930;
    box-shadow: 0 10px 24px rgba(0, 0, 0, 0.06);
    transform: translateY(-2px);
}

.industry-card {
    background: #ffffff;
    border: 1px solid #e2e8f0;
    border-radius: 16px;
    padding: 22px;
    height: 100%;
    border-left: 4px solid #e06930;
    transition: all 0.25s ease;
}
.industry-card:hover {
    box-shadow: 0 12px 28px rgba(0, 0, 0, 0.08);
    transform: translateY(-3px);
}

.challenge-card {
    background: #ffffff;
    border: 1px solid #e2e8f0;
    border-radius: 14px;
    padding: 20px;
    height: 100%;
    position: relative;
    overflow: hidden;
}
.challenge-card::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 4px;
    height: 100%;
    background: linear-gradient(to bottom, #e06930, #fbc145);
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
    .bd-hero { padding: 40px 0 50px; }
    .bd-hero h1 { font-size: 26px; }
    .bd-hero-sub { font-size: 15px; }
    .bd-hero-desc { font-size: 14px; }
    .hero-lead-card { padding: 22px 18px; }
}
</style>

<div class="bd-page-wrapper">

<!-- ==========================================
     1. HERO SECTION
=========================================== -->
<section class="bd-hero">
    <div class="container">
        <div class="row align-items-center g-4 g-lg-5">
            <div class="col-lg-7">
                
                <!-- Language Toggle -->
                <div class="d-flex align-items-center gap-2 mb-2">
                    <span class="small text-white-50 fw-bold me-1"><i class="fa-solid fa-language text-warning me-1"></i> Language:</span>
                    <div class="lang-toggle-bar">
                        <button type="button" class="lang-pill active" id="btnBdLangEn" onclick="switchBdLang('en')">
                            🇬🇧 English
                        </button>
                        <button type="button" class="lang-pill" id="btnBdLangBn" onclick="switchBdLang('bn')">
                            🇧🇩 বাংলা
                        </button>
                    </div>
                </div>

                <div class="bd-hero-badge bd-trans"
                    data-en="<span>🇧🇩</span><span>ERP Software Bangladesh • Cloud ERP for Garments, Retail, Wholesale & Manufacturing</span>"
                    data-bn="<span>🇧🇩</span><span>বাংলাদেশে ক্লাউড ইআরপি সফটওয়্যার • গার্মেন্টস, রিটেল, পাইকারি ও উৎপাদন শিল্পের জন্য</span>">
                    <span>🇧🇩</span>
                    <span>ERP Software Bangladesh • Cloud ERP for Garments, Retail, Wholesale & Manufacturing</span>
                </div>

                <h1 class="bd-trans"
                    data-en="Cloud ERP Software for <span class='text-gradient'>Businesses in Bangladesh</span>"
                    data-bn="<span class='text-gradient'>বাংলাদেশের ব্যবসার</span> জন্য আধুনিক ক্লাউড ERP সফটওয়্যার">
                    Cloud ERP Software for <span class="text-gradient">Businesses in Bangladesh</span>
                </h1>

                <p class="bd-hero-sub bd-trans"
                    data-en="Manage your entire business with a powerful cloud ERP platform built for Bangladesh's retail, wholesale, distribution, manufacturing and growing business sectors."
                    data-bn="বাংলাদেশের রিটেল, পাইকারি বাণিজ্য, ডিস্ট্রিবিউশন এবং তৈরি পোশাক ও উৎপাদন শিল্পের জন্য বিশেষভাবে তৈরি একীভূত ক্লাউড ইআরপি প্ল্যাটফর্ম।">
                    Manage your entire business with a powerful cloud ERP platform built for Bangladesh's retail, wholesale, distribution, manufacturing and growing business sectors.
                </p>

                <p class="bd-hero-desc bd-trans"
                    data-en="Digify Soft Solutions brings accounting, VAT-related workflows, inventory, POS, sales, purchasing, CRM, payroll, manufacturing and business analytics together in one integrated ERP platform."
                    data-bn="ডিজিফাই সফট সলিউশনস আপনার অ্যাকাউন্টিং, ভ্যাট-সংক্রান্ত কাজের প্রক্রিয়া, ইনভেন্টরি, পিওএস (POS), সেলস, পারচেজ, সিআরএম, পে-রোল ও প্রোডাকশনকে একটিমাত্র প্ল্যাটফর্মে একত্রিত করে।">
                    Digify Soft Solutions brings accounting, VAT-related workflows, inventory, POS, sales, purchasing, CRM, payroll, manufacturing and business analytics together in one integrated ERP platform.
                </p>

                <div class="d-flex flex-wrap gap-3">
                    <a href="#demo-form" class="btn btn-lg px-4 py-3 text-white fw-bold rounded-pill shadow-lg bd-trans" 
                        data-en="<i class='fa-solid fa-calendar-check me-2'></i> Request a Free Demo" 
                        data-bn="<i class='fa-solid fa-calendar-check me-2'></i> ফ্রি ডেমোর জন্য অনুরোধ করুন"
                        style="background: linear-gradient(135deg, #e06930, #fbc145);">
                        <i class="fa-solid fa-calendar-check me-2"></i> Request a Free Demo
                    </a>
                    <a href="https://wa.me/917425016636?text=Hi%20Digify%20Team,%20I%20want%20to%20talk%20to%20an%20ERP%20expert%20for%20Bangladesh." target="_blank" class="btn btn-lg px-4 py-3 btn-outline-light rounded-pill fw-semibold bd-trans" 
                        data-en="<i class='fa-brands fa-whatsapp text-success me-2'></i> Talk to an ERP Expert"
                        data-bn="<i class='fa-brands fa-whatsapp text-success me-2'></i> ইআরপি বিশেষজ্ঞের সাথে কথা বলুন">
                        <i class="fa-brands fa-whatsapp text-success me-2"></i> Talk to an ERP Expert
                    </a>
                </div>

                <!-- Trust Micro-Badges -->
                <div class="row g-2 mt-4 pt-2 border-top border-secondary border-opacity-25">
                    <div class="col-4">
                        <div class="text-white-50 small"><i class="fa-solid fa-shirt text-warning me-1"></i> <span class="bd-trans" data-en="RMG & Garment" data-bn="তৈরি পোশাক ও আরএমজি">RMG & Garment</span></div>
                        <div class="text-white fw-bold small bd-trans" data-en="Cut-to-Pack Suite" data-bn="কাট-টু-প্যাক সলিউশন">Cut-to-Pack Suite</div>
                    </div>
                    <div class="col-4">
                        <div class="text-white-50 small"><i class="fa-solid fa-bolt text-warning me-1"></i> <span class="bd-trans" data-en="Multi-Branch" data-bn="মাল্টি-ব্রাঞ্চ">Multi-Branch</span></div>
                        <div class="text-white fw-bold small bd-trans" data-en="Dhaka to Chittagong" data-bn="ঢাকা থেকে চট্টগ্রাম">Dhaka to Chittagong</div>
                    </div>
                    <div class="col-4">
                        <div class="text-white-50 small"><i class="fa-solid fa-receipt text-warning me-1"></i> <span class="bd-trans" data-en="VAT Workflows" data-bn="ভ্যাট প্রক্রিয়া">VAT Workflows</span></div>
                        <div class="text-white fw-bold small bd-trans" data-en="Organized Records" data-bn="সঠিক ডেটা সংরক্ষণ">Organized Records</div>
                    </div>
                </div>

            </div>

            <!-- Lead Capture Card -->
            <div class="col-lg-5" id="demo-form">
                <div class="hero-lead-card">
                    <div class="text-center mb-3">
                        <span class="badge mb-2 px-3 py-1 bd-trans" data-en="🇧🇩 FREE 15-MINUTE ERP CONSULTATION" data-bn="🇧🇩 ১৫ মিনিটের ফ্রি ইআরপি পরামর্শ" style="background: rgba(224, 105, 48, 0.15); color: #e06930; font-weight: 700; font-size: 11px;">
                            🇧🇩 FREE 15-MINUTE ERP CONSULTATION
                        </span>
                        <h4 class="fw-bold mb-1 bd-trans" data-en="Request a Free Live ERP Demo" data-bn="ফ্রি লাইভ ইআরপি ডেমোর অনুরোধ করুন">Request a Free Live ERP Demo</h4>
                        <p class="text-muted small mb-0 bd-trans" data-en="Experience how Digify ERP centralizes operations for your Bangladesh enterprise." data-bn="দেখুন কীভাবে ডিজিফাই ইআরপি আপনার প্রতিষ্ঠানের সমস্ত কার্যক্রম এক প্ল্যাটফর্মে নিয়ে আসে।">Experience how Digify ERP centralizes operations for your Bangladesh enterprise.</p>
                    </div>

                    <form action="contact-us.php" method="POST">
                        <input type="hidden" name="lead_source" value="Bangladesh ERP Page (/erp-software-bangladesh)">
                        
                        <div class="mb-3">
                            <label class="form-label small fw-bold text-secondary mb-1 bd-trans" data-en="Your Full Name" data-bn="আপনার পূর্ণ নাম">Your Full Name</label>
                            <input type="text" name="name" class="form-control form-control-lg fs-6" placeholder="e.g. Tanvir Ahmed / Rafiqul Islam" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label small fw-bold text-secondary mb-1 bd-trans" data-en="Company / Business Name" data-bn="কোম্পানি / ব্যবসার নাম">Company / Business Name</label>
                            <input type="text" name="company" class="form-control form-control-lg fs-6" placeholder="e.g. Bengal Apparel Ltd / Dhaka Retail" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label small fw-bold text-secondary mb-1 bd-trans" data-en="WhatsApp / Mobile Number" data-bn="হোয়াটসঅ্যাপ / মোবাইল নম্বর">WhatsApp / Mobile Number</label>
                            <div class="input-group">
                                <span class="input-group-text bg-light text-dark fw-bold">+880</span>
                                <input type="tel" name="phone" class="form-control form-control-lg fs-6" placeholder="1712 345678" required>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label class="form-label small fw-bold text-secondary mb-1 bd-trans" data-en="Your Industry" data-bn="আপনার শিল্প / ব্যবসার ধরন">Your Industry</label>
                            <select name="industry" class="form-select form-control-lg fs-6">
                                <option value="Garments & RMG Manufacturing">Garments & Ready-Made Garments (RMG)</option>
                                <option value="Textile & Yarn Wholesale">Textile Manufacturing & Yarn (Islampur / Narayanganj)</option>
                                <option value="Wholesale & Distribution">Wholesale & Distribution</option>
                                <option value="Retail & POS">Retail & Supermarket Chains</option>
                                <option value="FMCG Distribution">FMCG Distribution</option>
                                <option value="Manufacturing">Manufacturing & Production</option>
                                <option value="Pharmaceuticals">Pharmaceuticals & Drug Stores</option>
                                <option value="Food & Beverage">Food & Beverage / Restaurants</option>
                                <option value="Import & Export">Import & Export Trading</option>
                                <option value="Other Industry">Other Business</option>
                            </select>
                        </div>

                        <button type="submit" class="btn btn-lg w-100 text-white fw-bold py-3 rounded-3 shadow-sm bd-trans" 
                            data-en="Schedule Free Live Demo <i class='fa-solid fa-arrow-right ms-2'></i>" 
                            data-bn="ফ্রি লাইভ ডেমো শিডিউল করুন <i class='fa-solid fa-arrow-right ms-2'></i>"
                            style="background: linear-gradient(135deg, #e06930, #fbc145);">
                            Schedule Free Live Demo <i class="fa-solid fa-arrow-right ms-2"></i>
                        </button>
                        <p class="text-center text-muted small mt-2 mb-0 bd-trans" data-en="<i class='fa-solid fa-lock text-success me-1'></i> No credit card required • Instant 48-hour onboarding" data-bn="<i class='fa-solid fa-lock text-success me-1'></i> কোনো ক্রেডিট কার্ড লাগবে না • দ্রুত ৪৮ ঘণ্টায় অনবোর্ডিং" style="font-size: 11px;">
                            <i class="fa-solid fa-lock text-success me-1"></i> No credit card required • Instant 48-hour onboarding
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ==========================================
     2. TRUST / VALUE SECTION
=========================================== -->
<section class="py-5" style="background: #ffffff;">
    <div class="container py-4">
        <div class="text-center max-w-750 mx-auto mb-5">
            <span class="section-tagline bd-trans" data-en="Unified Business Platform" data-bn="একীভূত ব্যবসায়িক প্ল্যাটফর্ম">Unified Business Platform</span>
            <h2 class="fw-bold mb-3 bd-trans" data-en="One Integrated ERP Platform for Your Business" data-bn="আপনার ব্যবসার জন্য একটি সমন্বিত ইআরপি প্ল্যাটফর্ম">One Integrated ERP Platform for Your Business</h2>
            <p class="text-muted lead fs-6 bd-trans" data-en="Run your business from one centralized platform. Digify Soft Solutions helps businesses manage day-to-day operations, improve visibility across departments and reduce dependency on disconnected software systems." data-bn="একটিমাত্র প্ল্যাটফর্ম থেকে আপনার সম্পূর্ণ ব্যবসা পরিচালনা করুন। ডিজিফাই সফট সলিউশনস দৈনন্দিন কার্যক্রম সহজ করতে, বিভিন্ন বিভাগের মধ্যে স্বচ্ছতা বাড়াতে এবং বিচ্ছিন্ন সফটওয়্যারের ওপর নির্ভরতা কমাতে সাহায্য করে।">
                Run your business from one centralized platform. Digify Soft Solutions helps businesses manage day-to-day operations, improve visibility across departments and reduce dependency on disconnected software systems.
            </p>
        </div>

        <div class="row g-4">
            <div class="col-md-6 col-lg-3">
                <div class="card-hover-box text-center">
                    <div class="icon-box-primary mx-auto"><i class="fa-solid fa-chart-line"></i></div>
                    <h5 class="fw-bold mb-2 bd-trans" data-en="Real-Time Business Visibility" data-bn="রিয়েল-টাইম ব্যবসায়িক স্বচ্ছতা">Real-Time Business Visibility</h5>
                    <p class="text-muted small mb-0 bd-trans" data-en="Monitor sales, inventory, purchasing and operational performance from one dashboard." data-bn="একটিমাত্র ড্যাশবোর্ড থেকে বিক্রয়, ইনভেন্টরি, ক্রয় এবং পরিচালনাগত কর্মক্ষমতা পর্যবেক্ষণ করুন।">Monitor sales, inventory, purchasing and operational performance from one dashboard.</p>
                </div>
            </div>

            <div class="col-md-6 col-lg-3">
                <div class="card-hover-box text-center">
                    <div class="icon-box-primary mx-auto"><i class="fa-solid fa-cloud"></i></div>
                    <h5 class="fw-bold mb-2 bd-trans" data-en="Cloud-Based Access" data-bn="ক্লাউড-ভিত্তিক প্রবেশাধিকার">Cloud-Based Access</h5>
                    <p class="text-muted small mb-0 bd-trans" data-en="Access your business data and ERP workflows from anywhere with an internet connection." data-bn="ইন্টারনেট সংযোগের মাধ্যমে যেকোনো স্থান ও ডিভাইস থেকে ব্যবসায়িক ডেটা ও ইআরপি ব্যবহার করুন।">Access your business data and ERP workflows from anywhere with an internet connection.</p>
                </div>
            </div>

            <div class="col-md-6 col-lg-3">
                <div class="card-hover-box text-center">
                    <div class="icon-box-primary mx-auto"><i class="fa-solid fa-arrow-up-right-dots"></i></div>
                    <h5 class="fw-bold mb-2 bd-trans" data-en="Scalable Business Management" data-bn="পরিমাপযোগ্য ব্যবসা পরিচালনা">Scalable Business Management</h5>
                    <p class="text-muted small mb-0 bd-trans" data-en="Start with the modules your business needs and scale your ERP environment as your business grows." data-bn="প্রয়োজনীয় মডিউল দিয়ে শুরু করুন এবং ব্যবসা বৃদ্ধির সাথে সাথে ইআরপি কার্যপরিধি বাড়ান।">Start with the modules your business needs and scale your ERP environment as your business grows.</p>
                </div>
            </div>

            <div class="col-md-6 col-lg-3">
                <div class="card-hover-box text-center">
                    <div class="icon-box-primary mx-auto"><i class="fa-solid fa-diagram-project"></i></div>
                    <h5 class="fw-bold mb-2 bd-trans" data-en="Integrated Operations" data-bn="সমন্বিত কার্যপ্রক্রিয়া">Integrated Operations</h5>
                    <p class="text-muted small mb-0 bd-trans" data-en="Connect sales, inventory, purchasing, accounting, CRM, payroll and other business workflows in one system." data-bn="সেলস, ইনভেন্টরি, পারচেজ, অ্যাকাউন্টিং, সিআরএম এবং পে-রোল একটিমাত্র সিস্টেমে সংযুক্ত করুন।">Connect sales, inventory, purchasing, accounting, CRM, payroll and other business workflows in one system.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ==========================================
     3. BANGLADESH-SPECIFIC & VAT SECTION
=========================================== -->
<section class="py-5" style="background: #f8fafc; border-top: 1px solid #e2e8f0; border-bottom: 1px solid #e2e8f0;">
    <div class="container py-4">
        <div class="row align-items-center g-5">
            <div class="col-lg-6">
                <span class="section-tagline bd-trans" data-en="Digital Business Environment" data-bn="ডিজিটাল ব্যবসায়িক পরিবেশ">Digital Business Environment</span>
                <h2 class="fw-bold mb-3 bd-trans" data-en="ERP Software Designed for Bangladesh's Digital Business Environment" data-bn="বাংলাদেশের ডিজিটাল বাণিজ্যিক পরিবেশের উপযোগী ইআরপি সফটওয়্যার">
                    ERP Software Designed for Bangladesh's Digital Business Environment
                </h2>
                <div class="text-muted fs-6">
                    <p class="mb-3 bd-trans" data-en="Bangladesh businesses operate in a rapidly digitizing commercial and tax environment. Digify Soft Solutions helps organizations centralize their sales, purchasing, inventory, accounting and operational data through an integrated cloud ERP platform." data-bn="বাংলাদেশের ব্যবসা প্রতিষ্ঠানগুলো দ্রুত ডিজিটালাইজড হওয়া বাণিজ্যিক ও কর কাঠামোর মধ্যে পরিচালিত হচ্ছে। ডিজিফাই সফট সলিউশনস একটি সমন্বিত ক্লাউড ইআরপির মাধ্যমে বিক্রয়, ক্রয়, ইনভেন্টরি ও অ্যাকাউন্টিং ডেটা একীভূত করে।">
                        Bangladesh businesses operate in a rapidly digitizing commercial and tax environment. Digify Soft Solutions helps organizations centralize their sales, purchasing, inventory, accounting and operational data through an integrated cloud ERP platform.
                    </p>
                    <p class="mb-3 bd-trans" data-en="For businesses operating within the VAT framework, accurate transaction records, sales and purchase documentation, tax-related information and reporting workflows are important parts of financial management." data-bn="ভ্যাট কাঠামোর আওতাধীন ব্যবসার জন্য সঠিক লেনদেন রেকর্ড, বিক্রয় ও ক্রয় চালান, ট্যাক্স সংক্রান্ত তথ্য এবং অডিট প্রস্তুত রাখা আর্থিক ব্যবস্থাপনার অত্যন্ত গুরুত্বপূর্ণ অংশ।">
                        For businesses operating within the VAT framework, accurate transaction records, sales and purchase documentation, tax-related information and reporting workflows are important parts of financial management.
                    </p>
                    <p class="mb-3 bd-trans" data-en="Bangladesh NBR guidelines require VAT taxpayers to properly maintain sales and purchase records, issue and collect applicable VAT invoices, and comply with VAT return and payment obligations. NBR's online VAT system is also an important part of the country's digital VAT administration." data-bn="এনবিআর (NBR) এর নির্দেশিকা অনুযায়ী করদাতাদের সঠিক বিক্রয় ও ক্রয় হিসাব রাখা, প্রযোজ্য ভ্যাট চালান ইস্যু ও সংগ্রহ এবং ভ্যাট রিটার্ন দাখিল নিশ্চিত করতে হয়।">
                        Bangladesh NBR guidelines require VAT taxpayers to properly maintain sales and purchase records, issue and collect applicable VAT invoices, and comply with VAT return and payment obligations. NBR's online VAT system is also an important part of the country's digital VAT administration.
                    </p>
                    <div class="p-3 rounded-3 bg-white border-start border-4 border-warning shadow-sm">
                        <p class="mb-0 fw-semibold text-dark bd-trans" data-en="<i class='fa-solid fa-circle-check text-warning me-2'></i> Digify Soft Solutions helps businesses organize their financial and transaction data for efficient VAT and accounting workflows." data-bn="<i class='fa-solid fa-circle-check text-warning me-2'></i> ডিজিফাই সফট সলিউশনস ব্যবসা প্রতিষ্ঠানকে কার্যকর ভ্যাট ও অ্যাকাউন্টিং প্রক্রিয়ার জন্য লেনদেনের ডেটা সুসংগঠিত রাখতে সাহায্য করে।">
                            <i class="fa-solid fa-circle-check text-warning me-2"></i>
                            Digify Soft Solutions helps businesses organize their financial and transaction data for efficient VAT and accounting workflows.
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="bg-white p-4 rounded-4 shadow-sm border border-slate-200">
                    <h5 class="fw-bold mb-3 text-dark d-flex align-items-center bd-trans" data-en="<i class='fa-solid fa-file-invoice-dollar text-warning me-2'></i> VAT & Financial Management for Bangladesh Businesses" data-bn="<i class='fa-solid fa-file-invoice-dollar text-warning me-2'></i> বাংলাদেশের ব্যবসার জন্য ভ্যাট ও আর্থিক হিসাব ব্যবস্থাপনা">
                        <i class="fa-solid fa-file-invoice-dollar text-warning me-2"></i> VAT & Financial Management for Bangladesh Businesses
                    </h5>
                    
                    <div class="d-flex gap-3 mb-3 pb-3 border-bottom">
                        <div class="text-warning fs-4"><i class="fa-solid fa-list-check"></i></div>
                        <div>
                            <h6 class="fw-bold mb-1 bd-trans" data-en="VAT-related Transaction Records" data-bn="ভ্যাট সংক্রান্ত লেনদেন ও চালান রেকর্ড">VAT-related Transaction Records</h6>
                            <p class="text-muted small mb-0 bd-trans" data-en="Maintain structured transaction data for sales, commercial purchases and vendor credit notes." data-bn="বিক্রয়, বাণিজ্যিক ক্রয় এবং ভেন্ডর ক্রেডিট নোটের জন্য সুসংগঠিত লেনদেন ডেটা সংরক্ষণ করুন।">Maintain structured transaction data for sales, commercial purchases and vendor credit notes.</p>
                        </div>
                    </div>

                    <div class="d-flex gap-3 mb-3 pb-3 border-bottom">
                        <div class="text-warning fs-4"><i class="fa-solid fa-receipt"></i></div>
                        <div>
                            <h6 class="fw-bold mb-1 bd-trans" data-en="Tax Invoice Information Management" data-bn="ট্যাক্স চালান ও ইনভয়েস তথ্য ব্যবস্থাপনা">Tax Invoice Information Management</h6>
                            <p class="text-muted small mb-0 bd-trans" data-en="Create and manage business invoices with relevant customer details, supplier BIN, item rates and applicable VAT breakdown." data-bn="গ্রাহকের বিবরণ, সরবরাহকারীর BIN নম্বর, পণ্যের মূল্য এবং ভ্যাটের বিভাজন সহ ব্যবসায়িক ইনভয়েস তৈরি ও পরিচালনা করুন।">Create and manage business invoices with relevant customer details, supplier BIN, item rates and applicable VAT breakdown.</p>
                        </div>
                    </div>

                    <div class="d-flex gap-3 mb-3 pb-3 border-bottom">
                        <div class="text-warning fs-4"><i class="fa-solid fa-cart-flatbed"></i></div>
                        <div>
                            <h6 class="fw-bold mb-1 bd-trans" data-en="Sales & Purchase Records" data-bn="ক্রয় ও বিক্রয় হিসাব সংরক্ষণ">Sales & Purchase Records</h6>
                            <p class="text-muted small mb-0 bd-trans" data-en="Maintain organized, chronological records of business purchases and sales for internal audit readiness." data-bn="অভ্যন্তরীণ অডিট ও নিয়ন্ত্রণের জন্য ব্যবসায়িক ক্রয় ও বিক্রয়ের সঠিক ক্রমানুসারিক হিসাব বজায় রাখুন।">Maintain organized, chronological records of business purchases and sales for internal audit readiness.</p>
                        </div>
                    </div>

                    <div class="d-flex gap-3">
                        <div class="text-warning fs-4"><i class="fa-solid fa-chart-pie"></i></div>
                        <div>
                            <h6 class="fw-bold mb-1 bd-trans" data-en="Financial Reporting & Partner Records" data-bn="আর্থিক প্রতিবেদন ও পার্টনার রেকর্ড (BIN)">Financial Reporting & Partner Records</h6>
                            <p class="text-muted small mb-0 bd-trans" data-en="Generate P&L, balance sheets, and maintain centralized BIN data for customers, distributors and suppliers." data-bn="লাভ-ক্ষতি (P&L), ব্যালেন্স শিট তৈরি করুন এবং গ্রাহক ও সরবরাহকারীদের জন্য কেন্দ্রীয় BIN ডেটা সংরক্ষণ করুন।">Generate P&L, balance sheets, and maintain centralized BIN data for customers, distributors and suppliers.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ==========================================
     4. 🇧🇩 DEDICATED GARMENT & RMG ERP SECTION
=========================================== -->
<section class="py-5" style="background: #ffffff;" id="garment-section">
    <div class="container py-4">
        <div class="text-center max-w-750 mx-auto mb-5">
            <span class="section-tagline bd-trans" data-en="🇧🇩 Bangladesh Garment & RMG Ecosystem" data-bn="🇧🇩 বাংলাদেশ তৈরি পোশাক ও আরএমজি ইকোসিস্টেম" style="background: rgba(224, 105, 48, 0.15); color: #e06930;">
                🇧🇩 Bangladesh Garment & RMG Ecosystem
            </span>
            <h2 class="fw-bold mb-3 display-6 bd-trans" data-en="Specialized Garment & Textile ERP for Bangladesh Manufacturers" data-bn="বাংলাদেশের তৈরি পোশাক ও টেক্সটাইল প্রস্তুতকারকদের জন্য বিশেষায়িত ইআরপি">
                Specialized Garment & Textile ERP for Bangladesh Manufacturers
            </h2>
            <p class="text-muted lead fs-6 bd-trans" data-en="BIDA highlights the Ready-Made Garments (RMG) and textile sector as Bangladesh's primary investment and export engine. Digify Cloud ERP provides dedicated cut-to-pack workflows for factories, brands, and exporters." data-bn="BIDA তৈরি পোশাক (RMG) ও টেক্সটাইল খাতকে বাংলাদেশের প্রধান বিনিয়োগ ও রপ্তানি চালিকাশক্তি হিসেবে চিহ্নিত করে। ডিজিফাই ক্লাউড ইআরপি কারখানা, ব্র্যান্ড ও রপ্তানিকারকদের জন্য বিশেষায়িত কাট-টু-প্যাক সমাধান প্রদান করে।">
                BIDA highlights the Ready-Made Garments (RMG) and textile sector as Bangladesh's primary investment and export engine. Digify Cloud ERP provides dedicated cut-to-pack workflows for factories, brands, and exporters.
            </p>
        </div>

        <!-- 1. Garment Target Profiles -->
        <div class="mb-5">
            <h4 class="fw-bold mb-3 text-dark d-flex align-items-center bd-trans" data-en="<i class='fa-solid fa-users-gear text-warning me-2'></i> 1. Garment & Apparel ERP Target Profiles" data-bn="<i class='fa-solid fa-users-gear text-warning me-2'></i> ১. তৈরি পোশাক ও অ্যাপারেল ইআরপি টার্গেট প্রোফাইল">
                <i class="fa-solid fa-users-gear text-warning me-2"></i> 1. Garment & Apparel ERP Target Profiles
            </h4>
            <div class="row g-3">
                <div class="col-md-4 col-sm-6"><div class="p-3 bg-light rounded-3 border h-100"><i class="fa-solid fa-industry text-warning me-2"></i><strong class="bd-trans" data-en="Garment Manufacturers" data-bn="গার্মেন্টস প্রস্তুতকারক কারখানা">Garment Manufacturers</strong><p class="text-muted small mb-0 mt-1 bd-trans" data-en="High-capacity cut-to-pack production plants." data-bn="উচ্চ ক্ষমতাসম্পন্ন কাট-টু-প্যাক প্রোডাকশন প্ল্যান্ট।">High-capacity cut-to-pack production plants.</p></div></div>
                <div class="col-md-4 col-sm-6"><div class="p-3 bg-light rounded-3 border h-100"><i class="fa-solid fa-tag text-warning me-2"></i><strong class="bd-trans" data-en="Apparel Brands" data-bn="অ্যাপারেল ও ফ্যাশন ব্র্যান্ড">Apparel Brands</strong><p class="text-muted small mb-0 mt-1 bd-trans" data-en="Seasonal collections, SKU matrix & photo catalogs." data-bn="মৌসুমি কালেকশন, এসকেইউ ম্যাট্রিক্স ও ক্যাটালগ।">Seasonal collections, SKU matrix & photo catalogs.</p></div></div>
                <div class="col-md-4 col-sm-6"><div class="p-3 bg-light rounded-3 border h-100"><i class="fa-solid fa-boxes-packing text-warning me-2"></i><strong class="bd-trans" data-en="Clothing Wholesalers" data-bn="পোশাকের পাইকারি ব্যবসায়ী">Clothing Wholesalers</strong><p class="text-muted small mb-0 mt-1 bd-trans" data-en="Bulk lot dispatch, dealer tiers & credit terms." data-bn="বাল্ক লট সরবরাহ, ডিলার টায়ার ও বাকি হিসাব।">Bulk lot dispatch, dealer tiers & credit terms.</p></div></div>
                <div class="col-md-4 col-sm-6"><div class="p-3 bg-light rounded-3 border h-100"><i class="fa-solid fa-ship text-warning me-2"></i><strong class="bd-trans" data-en="Export-Oriented Businesses" data-bn="রপ্তানিমুখী পোশাক কারখানা">Export-Oriented Businesses</strong><p class="text-muted small mb-0 mt-1 bd-trans" data-en="Buyer accounts, L/C tracking & export packing lists." data-bn="বায়ার অ্যাকাউন্ট, এল/সি ট্র্যাকিং ও প্যাকিং লিস্ট।">Buyer accounts, L/C tracking & export packing lists.</p></div></div>
                <div class="col-md-4 col-sm-6"><div class="p-3 bg-light rounded-3 border h-100"><i class="fa-solid fa-scroll text-warning me-2"></i><strong class="bd-trans" data-en="Textile Businesses" data-bn="টেক্সটাইল ও স্পিনিং মিল">Textile Businesses</strong><p class="text-muted small mb-0 mt-1 bd-trans" data-en="Fabric roll inventory, GSM & yarn batch tracking." data-bn="ফ্যাব্রিক রোল ইনভেন্টরি, জিএসএম ও সুতা ব্যাচ।">Fabric roll inventory, GSM & yarn batch tracking.</p></div></div>
                <div class="col-md-4 col-sm-6"><div class="p-3 bg-light rounded-3 border h-100"><i class="fa-solid fa-vest-patches text-warning me-2"></i><strong class="bd-trans" data-en="Uniform & Workwear" data-bn="ইউনিফর্ম ও ওয়ার্কওয়্যার">Uniform & Workwear</strong><p class="text-muted small mb-0 mt-1 bd-trans" data-en="Corporate tenders, custom sizing & logo batches." data-bn="কর্পোরেট টেন্ডার, কাস্টম সাইজ ও লোগো ব্যাচ।">Corporate tenders, custom sizing & logo batches.</p></div></div>
            </div>
        </div>

        <!-- 2. Garment Inventory & 3D SKU Matrix -->
        <div class="mb-5 p-4 rounded-4 bg-light border">
            <h4 class="fw-bold mb-2 text-dark d-flex align-items-center bd-trans" data-en="<i class='fa-solid fa-boxes-stacked text-warning me-2'></i> 2. Garment Inventory & Raw Material Control" data-bn="<i class='fa-solid fa-boxes-stacked text-warning me-2'></i> ২. পোশাক ইনভেন্টরি ও কাঁচামাল নিয়ন্ত্রণ">
                <i class="fa-solid fa-boxes-stacked text-warning me-2"></i> 2. Garment Inventory & Raw Material Control
            </h4>
            <p class="text-muted small mb-3 bd-trans" data-en="Multi-dimensional variant and batch tracking across warehouses and production floors:" data-bn="ওয়্যারহাউস এবং কারখানা ফ্লোরে বহুমুখী ভ্যারিয়েন্ট ও ব্যাচ ট্র্যাকিং:">Multi-dimensional variant and batch tracking across warehouses and production floors:</p>
            <div class="row g-3">
                <div class="col-md-4">
                    <ul class="garment-check-list">
                        <li class="bd-trans" data-en="<strong>Fabric Inventory:</strong> Roll-by-roll tracking, meters/yards, GSM, shade/lot numbers." data-bn="<strong>ফ্যাব্রিক ইনভেন্টরি:</strong> রোল-ভিত্তিক ট্র্যাকিং, গজ/মিটার, জিএসএম ও লট নম্বর।"><strong>Fabric Inventory:</strong> Roll-by-roll tracking, meters/yards, GSM, shade/lot numbers.</li>
                        <li class="bd-trans" data-en="<strong>Raw Materials:</strong> Interlining, elastic, sewing thread cones." data-bn="<strong>কাঁচামাল:</strong> ইন্টারলাইনিং, ইলাস্টিক, সেলাই সুতা ইত্যাদি।"><strong>Raw Materials:</strong> Interlining, elastic, sewing thread cones.</li>
                        <li class="bd-trans" data-en="<strong>Accessories & Trims:</strong> Zippers, buttons, hangtags, polybags." data-bn="<strong>ট্রিমস ও এক্সেসরিজ:</strong> জিপার, বোতাম, হ্যাংট্যাগ, পলিব্যাগ।"><strong>Accessories & Trims:</strong> Zippers, buttons, hangtags, polybags.</li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <ul class="garment-check-list">
                        <li class="bd-trans" data-en="<strong>Finished Garments:</strong> Boxed & hanging garment stock." data-bn="<strong>উৎপাদিত পোশাক:</strong> কার্টুন ও হ্যাঙ্গিং স্টক ব্যবস্থাপনা।"><strong>Finished Garments:</strong> Boxed & hanging garment stock.</li>
                        <li class="bd-trans" data-en="<strong>Size-wise Stock:</strong> S, M, L, XL, XXL, 3XL balances." data-bn="<strong>সাইজ-ভিত্তিক স্টক:</strong> S, M, L, XL, XXL, 3XL ব্যালেন্স।"><strong>Size-wise Stock:</strong> S, M, L, XL, XXL, 3XL balances.</li>
                        <li class="bd-trans" data-en="<strong>Colour-wise Stock:</strong> Multi-shade color matrix visibility." data-bn="<strong>রং-ভিত্তিক স্টক:</strong> বহু রঙের শেড ম্যাট্রিক্স নিয়ন্ত্রণ।"><strong>Colour-wise Stock:</strong> Multi-shade color matrix visibility.</li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <ul class="garment-check-list">
                        <li class="bd-trans" data-en="<strong>Style / SKU-wise Stock:</strong> Barcoded garment SKUs." data-bn="<strong>স্টাইল / SKU স্টক:</strong> বারকোডযুক্ত গার্মেন্টস এসকেইউ।"><strong>Style / SKU-wise Stock:</strong> Barcoded garment SKUs.</li>
                        <li class="bd-trans" data-en="<strong>Warehouse-wise Stock:</strong> Bonded vs factory warehouse." data-bn="<strong>গুদাম-ভিত্তিক স্টক:</strong> বন্ডেড বনাম ফ্যাক্টরি গুদাম।"><strong>Warehouse-wise Stock:</strong> Bonded vs factory warehouse.</li>
                        <li class="bd-trans" data-en="<strong>Store-wise Stock:</strong> Multi-outlet showroom POS rack sync." data-bn="<strong>শোরুম স্টক:</strong> মাল্টি-আউটলেট পিওএস র্যাক সিঙ্ক।"><strong>Store-wise Stock:</strong> Multi-outlet showroom POS rack sync.</li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- 3. Garment Purchasing & Sales -->
        <div class="row g-4 mb-5">
            <div class="col-md-6">
                <div class="card-hover-box">
                    <h5 class="fw-bold mb-3 text-dark bd-trans" data-en="<i class='fa-solid fa-cart-shopping text-warning me-2'></i> 3. Garment Purchasing" data-bn="<i class='fa-solid fa-cart-shopping text-warning me-2'></i> ৩. গার্মেন্টস কাঁচামাল ক্রয় ও পারচেজ"><i class="fa-solid fa-cart-shopping text-warning me-2"></i> 3. Garment Purchasing</h5>
                    <ul class="garment-check-list">
                        <li class="bd-trans" data-en="<strong>Fabric & Accessories Suppliers:</strong> Vendor database with lead-time tracking." data-bn="<strong>কাপড় ও এক্সেসরিজ সরবরাহকারী:</strong> ভেন্ডর ডেটাবেস ও ডেলিভারি সময় ট্র্যাকিং।"><strong>Fabric & Accessories Suppliers:</strong> Vendor database with lead-time tracking.</li>
                        <li class="bd-trans" data-en="<strong>Purchase Orders (PO):</strong> Detailed yarn specs, GSM, and multi-currency terms." data-bn="<strong>পারচেজ অর্ডার (PO):</strong> সুতা স্পেসিফিকেশন, জিএসএম ও বহু-মুদ্রা শর্তাবলি।"><strong>Purchase Orders (PO):</strong> Detailed yarn specs, GSM, and multi-currency terms.</li>
                        <li class="bd-trans" data-en="<strong>Supplier Records & History:</strong> Historical rate comparison across domestic and overseas mills." data-bn="<strong>সরবরাহকারী রেকর্ড:</strong> দেশি ও বিদেশি মিলের দর তুলনা।"><strong>Supplier Records & History:</strong> Historical rate comparison across domestic and overseas mills.</li>
                        <li class="bd-trans" data-en="<strong>Material Costs & Landed Costing:</strong> Duty and freight allocation directly to fabric batches." data-bn="<strong>ল্যান্ডেড কস্টিং:</strong> ট্যাক্স ও পরিবহন খরচ সরাসরি কাপড়ের ব্যাচে যুক্ত করা।"><strong>Material Costs & Landed Costing:</strong> Duty and freight allocation directly to fabric batches.</li>
                        <li class="bd-trans" data-en="<strong>Automated Reordering:</strong> Critical trims shortage alerts." data-bn="<strong>স্বয়ংক্রিয় রিরর্ডার:</strong> কাঁচামাল ঘাটতির আগাম সতর্কবার্তা।"><strong>Automated Reordering:</strong> Critical trims shortage alerts.</li>
                    </ul>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card-hover-box">
                    <h5 class="fw-bold mb-3 text-dark bd-trans" data-en="<i class='fa-solid fa-cash-register text-warning me-2'></i> 4. Garment Sales & Distribution" data-bn="<i class='fa-solid fa-cash-register text-warning me-2'></i> ৪. গার্মেন্টস সেলস ও ডিস্ট্রিবিউশন"><i class="fa-solid fa-cash-register text-warning me-2"></i> 4. Garment Sales & Distribution</h5>
                    <ul class="garment-check-list">
                        <li class="bd-trans" data-en="<strong>Wholesale Orders:</strong> Matrix booking with volume price discounting." data-bn="<strong>পাইকারি অর্ডার:</strong> ম্যাট্রিক্স বুকিং ও ভলিউম ডিসকাউন্ট।"><strong>Wholesale Orders:</strong> Matrix booking with volume price discounting.</li>
                        <li class="bd-trans" data-en="<strong>Retail Showroom POS:</strong> High-speed barcode billing with bKash QR payments." data-bn="<strong>শোরুম পিওএস:</strong> দ্রুত বারকোড বিলিং ও বিকাশ (bKash) কিউআর পেমেন্ট।"><strong>Retail Showroom POS:</strong> High-speed barcode billing with bKash QR payments.</li>
                        <li class="bd-trans" data-en="<strong>Distributor & Corporate Sales:</strong> Bulk uniform orders and institutional pricing." data-bn="<strong>কর্পোরেট সেলস:</strong> বাল্ক ইউনিফর্ম অর্ডার ও বিশেষ মূল্য নির্ধারণ।"><strong>Distributor & Corporate Sales:</strong> Bulk uniform orders and institutional pricing.</li>
                        <li class="bd-trans" data-en="<strong>Customer-Specific Pricing:</strong> Custom margins per dealer tier." data-bn="<strong>ডিলার-ভিত্তিক মূল্য:</strong> ডিলার টায়ার অনুযায়ী কাস্টম মার্জিন।"><strong>Customer-Specific Pricing:</strong> Custom margins per dealer tier.</li>
                        <li class="bd-trans" data-en="<strong>Invoices & Payment Tracking:</strong> Aging ledgers and automated payment follow-ups." data-bn="<strong>ইনভয়েস ও বাকি ট্র্যাকিং:</strong> বকেয়া খতিয়ান ও স্বয়ংক্রিয় তাগাদা।"><strong>Invoices & Payment Tracking:</strong> Aging ledgers and automated payment follow-ups.</li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- 4. Garment Manufacturing (Floor Level) -->
        <div class="mb-5 p-4 rounded-4 bg-white border shadow-sm">
            <h4 class="fw-bold mb-3 text-dark d-flex align-items-center bd-trans" data-en="<i class='fa-solid fa-industry text-warning me-2'></i> 5. Garment Manufacturing (Cut-to-Pack Workflows)" data-bn="<i class='fa-solid fa-industry text-warning me-2'></i> ৫. গার্মেন্টস উৎপাদন (কাট-টু-প্যাক প্রক্রিয়া)">
                <i class="fa-solid fa-industry text-warning me-2"></i> 5. Garment Manufacturing (Cut-to-Pack Workflows)
            </h4>
            <div class="row g-3 text-center">
                <div class="col-4 col-md-2"><div class="workflow-step-card"><div class="step-num">1</div><h6 class="fw-bold mb-1 bd-trans" data-en="Production Orders" data-bn="প্রোডাকশন অর্ডার" style="font-size:13px;">Production Orders</h6><p class="text-muted small mb-0 bd-trans" data-en="Job cards & routing" data-bn="জব কার্ড ও রাউটিং" style="font-size:11px;">Job cards & routing</p></div></div>
                <div class="col-4 col-md-2"><div class="workflow-step-card"><div class="step-num">2</div><h6 class="fw-bold mb-1 bd-trans" data-en="Bill of Materials" data-bn="বিল অফ মেটেরিয়ালস" style="font-size:13px;">Bill of Materials</h6><p class="text-muted small mb-0 bd-trans" data-en="Fabric & trims BOM" data-bn="কাপড় ও ট্রিমস বিওএম" style="font-size:11px;">Fabric & trims BOM</p></div></div>
                <div class="col-4 col-md-2"><div class="workflow-step-card"><div class="step-num">3</div><h6 class="fw-bold mb-1 bd-trans" data-en="Cutting Table" data-bn="কাটিং টেবিল" style="font-size:13px;">Cutting Table</h6><p class="text-muted small mb-0 bd-trans" data-en="Marker & bundle tickets" data-bn="মার্কার ও বান্ডেল টিকিট" style="font-size:11px;">Marker & bundle tickets</p></div></div>
                <div class="col-4 col-md-2"><div class="workflow-step-card"><div class="step-num">4</div><h6 class="fw-bold mb-1 bd-trans" data-en="Stitching Line" data-bn="সেলাই লাইন (সুইং)" style="font-size:13px;">Stitching Line</h6><p class="text-muted small mb-0 bd-trans" data-en="Hourly output & WIP" data-bn="ঘণ্টায় আউটপুট ও WIP" style="font-size:11px;">Hourly output & WIP</p></div></div>
                <div class="col-4 col-md-2"><div class="workflow-step-card"><div class="step-num">5</div><h6 class="fw-bold mb-1 bd-trans" data-en="Quality Control" data-bn="কোয়ালিটি কন্ট্রোল (QC)" style="font-size:13px;">Quality Control</h6><p class="text-muted small mb-0 bd-trans" data-en="AQL inline/endline" data-bn="AQL ইনলাইন/এন্ডলাইন" style="font-size:11px;">AQL inline/endline</p></div></div>
                <div class="col-4 col-md-2"><div class="workflow-step-card"><div class="step-num">6</div><h6 class="fw-bold mb-1 bd-trans" data-en="Packing & Finish" data-bn="প্যাকিং ও ফিনিশিং" style="font-size:13px;">Packing & Finish</h6><p class="text-muted small mb-0 bd-trans" data-en="Cartons & barcodes" data-bn="কার্টুন ও বারকোড" style="font-size:11px;">Cartons & barcodes</p></div></div>
            </div>
        </div>

        <!-- 5. Bangladesh-Specific Garment Segments -->
        <div class="mb-5">
            <h4 class="fw-bold mb-3 text-dark d-flex align-items-center bd-trans" data-en="<i class='fa-solid fa-scissors text-warning me-2'></i> 6. Bangladesh-Specific Garment Segments" data-bn="<i class='fa-solid fa-scissors text-warning me-2'></i> ৬. বাংলাদেশের প্রধান তৈরি পোশাক খাতসমূহ">
                <i class="fa-solid fa-scissors text-warning me-2"></i> 6. Bangladesh-Specific Garment Segments
            </h4>
            <div class="row g-3">
                <div class="col-md-3 col-sm-6"><div class="p-3 bg-light rounded-3 border"><strong class="text-dark bd-trans" data-en="Ready-Made Garments (RMG)" data-bn="তৈরি পোশাক (RMG)">Ready-Made Garments (RMG)</strong><p class="text-muted small mb-0 bd-trans" data-en="High-volume export woven & knits." data-bn="উচ্চ ভলিউমের ওভেন ও নিটওয়্যার রপ্তানি।">High-volume export woven & knits.</p></div></div>
                <div class="col-md-3 col-sm-6"><div class="p-3 bg-light rounded-3 border"><strong class="text-dark bd-trans" data-en="Knitwear & Sweaters" data-bn="নিটওয়্যার ও সোয়েটার">Knitwear & Sweaters</strong><p class="text-muted small mb-0 bd-trans" data-en="Yarn winding, knitting & linking." data-bn="সুতা ওয়াইন্ডিং, নিটিং ও লিংকিং।">Yarn winding, knitting & linking.</p></div></div>
                <div class="col-md-3 col-sm-6"><div class="p-3 bg-light rounded-3 border"><strong class="text-dark bd-trans" data-en="Woven & Denim" data-bn="ওভেন ও ডেনিম শিল্প">Woven & Denim</strong><p class="text-muted small mb-0 bd-trans" data-en="Heavy denim wash cycles & rivets." data-bn="ডেনিম ওয়াশ সাইকেল ও রিভেটস ট্র্যাকিং।">Heavy denim wash cycles & rivets.</p></div></div>
                <div class="col-md-3 col-sm-6"><div class="p-3 bg-light rounded-3 border"><strong class="text-dark bd-trans" data-en="Textile & Yarn" data-bn="টেক্সটাইল ও সুতা বাণিজ্য">Textile & Yarn</strong><p class="text-muted small mb-0 bd-trans" data-en="Cotton bales & Islampur wholesale." data-bn="তুলা বেল ও ইসলামপুর পাইকারি বাণিজ্য।">Cotton bales & Islampur wholesale.</p></div></div>
                <div class="col-md-3 col-sm-6"><div class="p-3 bg-light rounded-3 border"><strong class="text-dark bd-trans" data-en="Fashion & Apparel" data-bn="ফ্যাশন ও শোরুম আউটলেট">Fashion & Apparel</strong><p class="text-muted small mb-0 bd-trans" data-en="Showrooms & boutique POS." data-bn="শোরুম ও বুটিক পিওএস বিলিং।">Showrooms & boutique POS.</p></div></div>
                <div class="col-md-3 col-sm-6"><div class="p-3 bg-light rounded-3 border"><strong class="text-dark bd-trans" data-en="Home Textiles" data-bn="হোম টেক্সটাইল">Home Textiles</strong><p class="text-muted small mb-0 bd-trans" data-en="Bed linen & terry towel sets." data-bn="বেড লিনেন ও তোয়ালে সামগ্রী।">Bed linen & terry towel sets.</p></div></div>
                <div class="col-md-3 col-sm-6"><div class="p-3 bg-light rounded-3 border"><strong class="text-dark bd-trans" data-en="Uniforms & Workwear" data-bn="ইউনিফর্ম ও পেশাগত পোশাক">Uniforms & Workwear</strong><p class="text-muted small mb-0 bd-trans" data-en="Corporate tenders & safety gear." data-bn="কর্পোরেট টেন্ডার ও নিরাপত্তা পোশাক।">Corporate tenders & safety gear.</p></div></div>
                <div class="col-md-3 col-sm-6"><div class="p-3 bg-light rounded-3 border"><strong class="text-dark bd-trans" data-en="Leather & Footwear" data-bn="চামড়া ও পাদুকা শিল্প">Leather & Footwear</strong><p class="text-muted small mb-0 bd-trans" data-en="Hide grading & sole moulding." data-bn="চামড়া গ্রেডিং ও সোল মোল্ডিং।">Hide grading & sole moulding.</p></div></div>
            </div>
        </div>

        <!-- 6. Export-Oriented Garment Business Suite -->
        <div class="p-4 rounded-4 text-white" style="background: linear-gradient(135deg, #090e24 0%, #151a3d 100%);">
            <h4 class="fw-bold mb-3 text-warning bd-trans" data-en="<i class='fa-solid fa-ship me-2'></i> 7. Export-Oriented Garment Business Suite" data-bn="<i class='fa-solid fa-ship me-2'></i> ৭. রপ্তানিমুখী গার্মেন্টস ব্যবসায়িক সমাধান"><i class="fa-solid fa-ship me-2"></i> 7. Export-Oriented Garment Business Suite</h4>
            <div class="row g-3">
                <div class="col-md-4"><div class="d-flex align-items-start gap-2"><i class="fa-solid fa-circle-check text-warning mt-1"></i><div><strong class="text-white bd-trans" data-en="Export Buyer CRM:" data-bn="বায়ার সিআরএম:">Export Buyer CRM:</strong><p class="text-white-50 small mb-0 bd-trans" data-en="Buyer tech packs, sample approvals & compliance logs." data-bn="বায়ার টেক প্যাক, স্যাম্পল অনুমোদন ও কমপ্লায়েন্স লগ।">Buyer tech packs, sample approvals & compliance logs.</p></div></div></div>
                <div class="col-md-4"><div class="d-flex align-items-start gap-2"><i class="fa-solid fa-circle-check text-warning mt-1"></i><div><strong class="text-white bd-trans" data-en="L/C & Order Tracking:" data-bn="এল/সি ও অর্ডার ট্র্যাকিং:">L/C & Order Tracking:</strong><p class="text-white-50 small mb-0 bd-trans" data-en="Letter of Credit terms, milestones & export proformas." data-bn="লেটার অফ ক্রেডিট (L/C) শর্তাবলি ও প্রফর্মা ইনভয়েস।">Letter of Credit terms, milestones & export proformas.</p></div></div></div>
                <div class="col-md-4"><div class="d-flex align-items-start gap-2"><i class="fa-solid fa-circle-check text-warning mt-1"></i><div><strong class="text-white bd-trans" data-en="Bonded Warehouse:" data-bn="বন্ডেড ওয়্যারহাউস:">Bonded Warehouse:</strong><p class="text-white-50 small mb-0 bd-trans" data-en="Customs bonded warehouse fabric issue registers." data-bn="কাস্টমস বন্ডেড গুদাম থেকে কাপড় ইস্যু রেজিস্টার।">Customs bonded warehouse fabric issue registers.</p></div></div></div>
                <div class="col-md-4"><div class="d-flex align-items-start gap-2"><i class="fa-solid fa-circle-check text-warning mt-1"></i><div><strong class="text-white bd-trans" data-en="Container Packing Lists:" data-bn="কন্টেইনার প্যাকিং লিস্ট:">Container Packing Lists:</strong><p class="text-white-50 small mb-0 bd-trans" data-en="CBM, weight & Chittagong port shipping marks." data-bn="CBM, ওজন ও চট্টগ্রাম বন্দর শিপিং মার্কস।">CBM, weight & Chittagong port shipping marks.</p></div></div></div>
                <div class="col-md-4"><div class="d-flex align-items-start gap-2"><i class="fa-solid fa-circle-check text-warning mt-1"></i><div><strong class="text-white bd-trans" data-en="Supplier Management:" data-bn="সরবরাহকারী ব্যবস্থাপনা:">Supplier Management:</strong><p class="text-white-50 small mb-0 bd-trans" data-en="Raw material & trims vendor performance tracking." data-bn="সুতা ও ট্রিমস ভেন্ডর পারফরম্যান্স ট্র্যাকিং।">Raw material & trims vendor performance tracking.</p></div></div></div>
                <div class="col-md-4"><div class="d-flex align-items-start gap-2"><i class="fa-solid fa-circle-check text-warning mt-1"></i><div><strong class="text-white bd-trans" data-en="Financial & Export Reports:" data-bn="রপ্তানি আর্থিক প্রতিবেদন:">Financial & Export Reports:</strong><p class="text-white-50 small mb-0 bd-trans" data-en="Real-time export revenue, realization & P&L statements." data-bn="রপ্তানি আয়, এল/সি রিয়ালাইজেশন ও লাভ-ক্ষতির হিসাব।">Real-time export revenue, realization & P&L statements.</p></div></div></div>
            </div>
        </div>

    </div>
</section>

<!-- ==========================================
     5. CORE ERP MODULES
=========================================== -->
<section class="py-5" style="background: #f8fafc;">
    <div class="container py-4">
        <div class="text-center max-w-750 mx-auto mb-5">
            <span class="section-tagline bd-trans" data-en="End-to-End Functionality" data-bn="সম্পূর্ণ ইআরপি কার্যক্ষমতা">End-to-End Functionality</span>
            <h2 class="fw-bold mb-3 bd-trans" data-en="Complete ERP Solution for Bangladesh Businesses" data-bn="বাংলাদেশের ব্যবসার জন্য সম্পূর্ণ ইআরপি সমাধান">Complete ERP Solution for Bangladesh Businesses</h2>
            <p class="text-muted lead fs-6 bd-trans" data-en="Nine interconnected modules designed to eliminate operational silos across departments." data-bn="নয়টি আন্তঃসংযুক্ত মডিউল যা প্রতিষ্ঠানের বিভিন্ন বিভাগের মধ্যে সমন্বয়হীনতা দূর করে।">
                Nine interconnected modules designed to eliminate operational silos across departments.
            </p>
        </div>

        <div class="row g-4">
            <div class="col-md-6 col-lg-4"><div class="module-card"><div class="d-flex align-items-center gap-3 mb-3"><div class="text-warning fs-3"><i class="fa-solid fa-calculator"></i></div><h5 class="fw-bold mb-0 bd-trans" data-en="Accounting & Finance" data-bn="হিসাব ও আর্থিক ব্যবস্থাপনা">Accounting & Finance</h5></div><p class="text-muted small mb-0 bd-trans" data-en="Manage invoices, expenses, receivables, payables, financial transactions and business reports from one centralized system." data-bn="ইনভয়েস, খরচ, পাওনা, দেনা ও আর্থিক প্রতিবেদন কেন্দ্রীয় সিস্টেম থেকে পরিচালনা করুন।">Manage invoices, expenses, receivables, payables, financial transactions and business reports from one centralized system.</p></div></div>
            <div class="col-md-6 col-lg-4"><div class="module-card"><div class="d-flex align-items-center gap-3 mb-3"><div class="text-warning fs-3"><i class="fa-solid fa-boxes-stacked"></i></div><h5 class="fw-bold mb-0 bd-trans" data-en="Inventory Management" data-bn="ইনভেন্টরি ও স্টক নিয়ন্ত্রণ">Inventory Management</h5></div><p class="text-muted small mb-0 bd-trans" data-en="Track stock levels, product movements, warehouses, purchases, sales and inventory across multiple business locations." data-bn="একাধিক শাখা ও গুদামের পণ্যের স্টক, আগমন-নির্গমন ও বিক্রয় রিয়েল-টাইমে পর্যবেক্ষণ করুন।">Track stock levels, product movements, warehouses, purchases, sales and inventory across multiple business locations.</p></div></div>
            <div class="col-md-6 col-lg-4"><div class="module-card"><div class="d-flex align-items-center gap-3 mb-3"><div class="text-warning fs-3"><i class="fa-solid fa-cash-register"></i></div><h5 class="fw-bold mb-0 bd-trans" data-en="POS (Point of Sale)" data-bn="পিওএস (পয়েন্ট অফ সেল)">POS (Point of Sale)</h5></div><p class="text-muted small mb-0 bd-trans" data-en="Manage retail billing, products, customers, pricing and daily store transactions through an integrated point-of-sale system." data-bn="দ্রুত রিটেল বিলিং, বারকোড স্ক্যানিং ও দৈনন্দিন বিক্রয় হিসাব পরিচালনা করুন।">Manage retail billing, products, customers, pricing and daily store transactions through an integrated point-of-sale system.</p></div></div>
            <div class="col-md-6 col-lg-4"><div class="module-card"><div class="d-flex align-items-center gap-3 mb-3"><div class="text-warning fs-3"><i class="fa-solid fa-users"></i></div><h5 class="fw-bold mb-0 bd-trans" data-en="CRM (Customer Relationship)" data-bn="সিআরএম ও কাস্টমার ম্যানেজমেন্ট">CRM (Customer Relationship)</h5></div><p class="text-muted small mb-0 bd-trans" data-en="Manage leads, customers, follow-ups, sales activities and customer relationships from one centralized CRM environment." data-bn="গ্রাহকের অনুসন্ধান, ফলো-আপ, সেলস পাইপলাইন ও গ্রাহক সম্পর্ক বজায় রাখুন।">Manage leads, customers, follow-ups, sales activities and customer relationships from one centralized CRM environment.</p></div></div>
            <div class="col-md-6 col-lg-4"><div class="module-card"><div class="d-flex align-items-center gap-3 mb-3"><div class="text-warning fs-3"><i class="fa-solid fa-cart-shopping"></i></div><h5 class="fw-bold mb-0 bd-trans" data-en="Purchasing & Procurement" data-bn="ক্রয় ও সংগ্রহ ব্যবস্থাপনা">Purchasing & Procurement</h5></div><p class="text-muted small mb-0 bd-trans" data-en="Manage suppliers, purchase orders, procurement activities, vendor quotes and purchasing history." data-bn="সরবরাহকারী, পারচেজ অর্ডার, ভেন্ডর দরপত্র ও ক্রয়ের অতীত রেকর্ড সহজে পরিচালনা করুন।">Manage suppliers, purchase orders, procurement activities, vendor quotes and purchasing history.</p></div></div>
            <div class="col-md-6 col-lg-4"><div class="module-card"><div class="d-flex align-items-center gap-3 mb-3"><div class="text-warning fs-3"><i class="fa-solid fa-chart-column"></i></div><h5 class="fw-bold mb-0 bd-trans" data-en="Sales Management" data-bn="বিক্রয় ও অর্ডার ম্যানেজমেন্ট">Sales Management</h5></div><p class="text-muted small mb-0 bd-trans" data-en="Manage quotations, orders, invoices, customers and sales workflows through an integrated sales management system." data-bn="কোটেশন, সেলস অর্ডার, ইনভয়েস এবং বিক্রয় প্রক্রিয়া সম্পূর্ণ ডিজিটাল করুন।">Manage quotations, orders, invoices, customers and sales workflows through an integrated sales management system.</p></div></div>
            <div class="col-md-6 col-lg-4"><div class="module-card"><div class="d-flex align-items-center gap-3 mb-3"><div class="text-warning fs-3"><i class="fa-solid fa-user-tie"></i></div><h5 class="fw-bold mb-0 bd-trans" data-en="Payroll & HR" data-bn="পে-রোল ও মানবসম্পদ (HR)">Payroll & HR</h5></div><p class="text-muted small mb-0 bd-trans" data-en="Manage employee information, attendance, payroll processes, salary disbursements and HR records from one centralized platform." data-bn="কর্মীদের উপস্থিতি, বেতন-ভাতা তৈরি, পে-স্লিপ ও এইচআর রেকর্ড এক ক্লিকে নিয়ন্ত্রণ করুন।">Manage employee information, attendance, payroll processes, salary disbursements and HR records from one centralized platform.</p></div></div>
            <div class="col-md-6 col-lg-4"><div class="module-card"><div class="d-flex align-items-center gap-3 mb-3"><div class="text-warning fs-3"><i class="fa-solid fa-industry"></i></div><h5 class="fw-bold mb-0 bd-trans" data-en="Manufacturing & Production" data-bn="উৎপাদন ও কারখানা ব্যবস্থাপনা">Manufacturing & Production</h5></div><p class="text-muted small mb-0 bd-trans" data-en="Manage materials, BOM, production batch tracking, sub-assemblies, and manufacturing operations through an integrated ERP environment." data-bn="কাঁচামাল, বিওএম (BOM), উৎপাদন ব্যাচ এবং কারখানার কাজ সহজে ট্র্যাক করুন।">Manage materials, BOM, production batch tracking, sub-assemblies, and manufacturing operations through an integrated ERP environment.</p></div></div>
            <div class="col-md-6 col-lg-4"><div class="module-card"><div class="d-flex align-items-center gap-3 mb-3"><div class="text-warning fs-3"><i class="fa-solid fa-gauge-high"></i></div><h5 class="fw-bold mb-0 bd-trans" data-en="Business Analytics & Reports" data-bn="ব্যবসায়িক রিপোর্ট ও অ্যানালিটিক্স">Business Analytics & Reports</h5></div><p class="text-muted small mb-0 bd-trans" data-en="Access real-time executive dashboards and reports to monitor sales, inventory, finance, profitability and operational performance." data-bn="বিক্রয়, লাভ-ক্ষতি ও কর্মক্ষমতা পর্যবেক্ষণের জন্য রিয়েল-টাইম এক্সিকিউটিভ ড্যাশবোর্ড।">Access real-time executive dashboards and reports to monitor sales, inventory, finance, profitability and operational performance.</p></div></div>
        </div>
    </div>
</section>

<!-- ==========================================
     6. BANGLADESH INDUSTRY SECTION (10 INDUSTRIES)
=========================================== -->
<section class="py-5" style="background: #ffffff;">
    <div class="container py-4">
        <div class="text-center max-w-750 mx-auto mb-5">
            <span class="section-tagline bd-trans" data-en="Targeted Vertical Solutions" data-bn="খাত-ভিত্তিক বিশেষ সমাধান">Targeted Vertical Solutions</span>
            <h2 class="fw-bold mb-3 bd-trans" data-en="ERP Solutions for Key Industries in Bangladesh" data-bn="বাংলাদেশের প্রধান প্রধান শিল্পের জন্য উপযোগী ইআরপি">ERP Solutions for Key Industries in Bangladesh</h2>
            <p class="text-muted lead fs-6 bd-trans" data-en="Engineered around the specific operational realities of Bangladesh's primary commercial sectors." data-bn="বাংলাদেশের শীর্ষ বাণিজ্যিক খাতের বাস্তব চাহিদার ওপর ভিত্তি করে নির্মিত।">
                Engineered around the specific operational realities of Bangladesh's primary commercial sectors.
            </p>
        </div>

        <div class="row g-4">
            <div class="col-md-6"><div class="industry-card"><div class="d-flex align-items-center gap-2 mb-2"><i class="fa-solid fa-shirt text-warning fs-5"></i><h5 class="fw-bold mb-0 bd-trans" data-en="1. Garments & Apparel" data-bn="১. তৈরি পোশাক ও অ্যাপারেল শিল্প">1. Garments & Apparel</h5></div><p class="text-muted small mb-2 bd-trans" data-en="Manage inventory, purchasing, production, sales, suppliers and business operations across garment and apparel workflows." data-bn="তৈরি পোশাকের ইনভেন্টরি, কাঁচামাল ক্রয়, উৎপাদন, বিক্রয় ও সরবরাহকারী ব্যবস্থাপনা।">Manage inventory, purchasing, production, sales, suppliers and business operations across garment and apparel workflows.</p><div class="bg-light p-2 rounded small text-secondary bd-trans" data-en="<i class='fa-solid fa-circle-info text-primary me-1'></i> BIDA highlights RMG/textiles as Bangladesh's primary export sector with integrated spinning, weaving, and packaging." data-bn="<i class='fa-solid fa-circle-info text-primary me-1'></i> BIDA তৈরি পোশাক ও টেক্সটাইল খাতকে প্রধান রপ্তানি খাত হিসেবে চিহ্নিত করে।"><i class="fa-solid fa-circle-info text-primary me-1"></i> BIDA highlights RMG/textiles as Bangladesh's primary export sector with integrated spinning, weaving, and packaging.</div></div></div>
            <div class="col-md-6"><div class="industry-card"><div class="d-flex align-items-center gap-2 mb-2"><i class="fa-solid fa-scroll text-warning fs-5"></i><h5 class="fw-bold mb-0 bd-trans" data-en="2. Textile Manufacturing" data-bn="২. টেক্সটাইল উৎপাদন ও মিলস">2. Textile Manufacturing</h5></div><p class="text-muted small mb-0 bd-trans" data-en="Manage raw materials, fabric rolls, yarn batches, inventory, purchasing, production stages and finished goods through an integrated ERP platform." data-bn="তুলা, সুতা ব্যাচ, কাপড়ের রোল, ডাইং ও ফিনিশিং প্রক্রিয়া নিয়ন্ত্রণ করুন।">Manage raw materials, fabric rolls, yarn batches, inventory, purchasing, production stages and finished goods through an integrated ERP platform.</p></div></div>
            <div class="col-md-6"><div class="industry-card"><div class="d-flex align-items-center gap-2 mb-2"><i class="fa-solid fa-truck-ramp-box text-warning fs-5"></i><h5 class="fw-bold mb-0 bd-trans" data-en="3. Wholesale & Distribution" data-bn="৩. পাইকারি বাণিজ্য ও ডিস্ট্রিবিউশন">3. Wholesale & Distribution</h5></div><p class="text-muted small mb-0 bd-trans" data-en="Manage distributors, suppliers, inventory, sales orders, purchasing, credit limits and multiple warehouses from one centralized system." data-bn="ডিস্ট্রিবিউটর, সরবরাহকারী, বাল্ক সেলস অর্ডার ও গুদাম হিসাব এক প্ল্যাটফর্মে রাখুন।">Manage distributors, suppliers, inventory, sales orders, purchasing, credit limits and multiple warehouses from one centralized system.</p></div></div>
            <div class="col-md-6"><div class="industry-card"><div class="d-flex align-items-center gap-2 mb-2"><i class="fa-solid fa-store text-warning fs-5"></i><h5 class="fw-bold mb-0 bd-trans" data-en="4. Retail & Supermarket Chains" data-bn="৪. রিটেল ও সুপারশপ চেইন">4. Retail & Supermarket Chains</h5></div><p class="text-muted small mb-0 bd-trans" data-en="Manage retail stores, high-speed POS transactions, inventory, customers, purchasing and promotions across single and multi-outlet retail operations." data-bn="দ্রুত পিওএস বিলিং, মাল্টি-আউটলেট স্টক এবং কাস্টমার লয়ালটি পরিচালনা করুন।">Manage retail stores, high-speed POS transactions, inventory, customers, purchasing and promotions across single and multi-outlet retail operations.</p></div></div>
            <div class="col-md-6"><div class="industry-card"><div class="d-flex align-items-center gap-2 mb-2"><i class="fa-solid fa-box-open text-warning fs-5"></i><h5 class="fw-bold mb-0 bd-trans" data-en="5. FMCG (Fast-Moving Consumer Goods)" data-bn="৫. এফএমসিজি (FMCG) পণ্য">5. FMCG (Fast-Moving Consumer Goods)</h5></div><p class="text-muted small mb-0 bd-trans" data-en="Manage high-volume products, route distributors, inventory batch movements, purchasing, sales and business reporting with high velocity." data-bn="দ্রুত গতিশীল ভোগ্যপণ্যের ডিস্ট্রিবিউশন রুট, ব্যাচ ট্র্যাকিং ও বিক্রয় ম্যানেজ করুন।">Manage high-volume products, route distributors, inventory batch movements, purchasing, sales and business reporting with high velocity.</p></div></div>
            <div class="col-md-6"><div class="industry-card"><div class="d-flex align-items-center gap-2 mb-2"><i class="fa-solid fa-gears text-warning fs-5"></i><h5 class="fw-bold mb-0 bd-trans" data-en="6. Manufacturing & Industrial Assembly" data-bn="৬. উৎপাদন ও সংযোজন কারখানা">6. Manufacturing & Industrial Assembly</h5></div><p class="text-muted small mb-0 bd-trans" data-en="Manage raw materials, Bill of Materials (BOM), production cycles, inventory, purchasing, sales and operational reporting." data-bn="কাঁচামাল, বিওএম (BOM), উৎপাদন শিডিউল ও পণ্য কস্টিং নিয়ন্ত্রণ করুন।">Manage raw materials, Bill of Materials (BOM), production cycles, inventory, purchasing, sales and operational reporting.</p></div></div>
            <div class="col-md-6"><div class="industry-card"><div class="d-flex align-items-center gap-2 mb-2"><i class="fa-solid fa-globe text-warning fs-5"></i><h5 class="fw-bold mb-0 bd-trans" data-en="7. E-commerce & Multi-Channel Sales" data-bn="৭. ই-কমার্স ও অনলাইন শপ">7. E-commerce & Multi-Channel Sales</h5></div><p class="text-muted small mb-0 bd-trans" data-en="Centralize online product catalogs, real-time inventory, web orders, courier dispatch, customer records and sales operational workflows." data-bn="অনলাইন ক্যাটালগ, রিয়েল-টাইম স্টক, কুরিয়ার ডেলিভারি ও অর্ডার সিঙ্ক করুন।">Centralize online product catalogs, real-time inventory, web orders, courier dispatch, customer records and sales operational workflows.</p></div></div>
            <div class="col-md-6"><div class="industry-card"><div class="d-flex align-items-center gap-2 mb-2"><i class="fa-solid fa-utensils text-warning fs-5"></i><h5 class="fw-bold mb-0 bd-trans" data-en="8. Food & Beverage / Restaurants" data-bn="৮. খাদ্য, পানীয় ও রেস্তোরাঁ">8. Food & Beverage / Restaurants</h5></div><p class="text-muted small mb-0 bd-trans" data-en="Manage food ingredient purchasing, recipe costing, inventory, table and counter POS, kitchen orders (KOT) and customer billing through one platform." data-bn="রেসিপি কস্টিং, কিচেন অর্ডার টিকিট (KOT), টেবিল ও কাউন্টার বিলিং পরিচালনা করুন।">Manage food ingredient purchasing, recipe costing, inventory, table and counter POS, kitchen orders (KOT) and customer billing through one platform.</p></div></div>
            <div class="col-md-6"><div class="industry-card"><div class="d-flex align-items-center gap-2 mb-2"><i class="fa-solid fa-prescription-bottle-medical text-warning fs-5"></i><h5 class="fw-bold mb-0 bd-trans" data-en="9. Pharmaceuticals & Chemists" data-bn="৯. ফার্মাসিউটিক্যালস ও ফার্মেসি">9. Pharmaceuticals & Chemists</h5></div><p class="text-muted small mb-0 bd-trans" data-en="Manage medicine inventory, drug batch numbers, expiry dates (FEFO), purchasing, sales, suppliers and operational data through a centralized ERP system." data-bn="ওষুধের ব্যাচ নম্বর, মেয়াদের তারিখ (FEFO) ও ডিসপেনসারি পিওএস হিসাব রাখুন।">Manage medicine inventory, drug batch numbers, expiry dates (FEFO), purchasing, sales, suppliers and operational data through a centralized ERP system.</p></div></div>
            <div class="col-md-6"><div class="industry-card"><div class="d-flex align-items-center gap-2 mb-2"><i class="fa-solid fa-ship text-warning fs-5"></i><h5 class="fw-bold mb-0 bd-trans" data-en="10. Import & Export Trading" data-bn="১০. আমদানি ও রপ্তানি বাণিজ্য">10. Import & Export Trading</h5></div><p class="text-muted small mb-0 bd-trans" data-en="Manage foreign suppliers, multi-currency purchasing, landed costing, customs documentation, inventory, sales and financial workflows." data-bn="বিদেশি সরবরাহকারী, বহু-মুদ্রা ক্রয়, কাস্টমস কাগজপত্র ও কস্টিং পরিচালনা করুন।">Manage foreign suppliers, multi-currency purchasing, landed costing, customs documentation, inventory, sales and financial workflows.</p></div></div>
        </div>
    </div>
</section>

<!-- ==========================================
     7. MULTI-BRANCH SECTION
=========================================== -->
<section class="py-5" style="background: linear-gradient(135deg, #090e24 0%, #151a3d 100%); color: #ffffff;">
    <div class="container py-4">
        <div class="row align-items-center g-5">
            <div class="col-lg-6">
                <span class="badge px-3 py-2 text-uppercase fw-bold mb-3 bd-trans" data-en="Enterprise Multi-Location Control" data-bn="এন্টারপ্রাইজ মাল্টি-লোকেশন নিয়ন্ত্রণ" style="background: rgba(224, 105, 48, 0.2); color: #ffb188; font-size: 11px;">
                    Enterprise Multi-Location Control
                </span>
                <h2 class="fw-bold mb-3 bd-trans" data-en="Manage Multiple Branches and Locations" data-bn="একাধিক শাখা ও আউটলেট এক ক্লিকে পরিচালনা করুন">Manage Multiple Branches and Locations</h2>
                <p class="text-white-50 lead fs-6 mb-4 bd-trans" data-en="Whether you operate one store or multiple branches across Dhaka, Chittagong, Sylhet, Gazipur and Narayanganj, Digify Soft Solutions helps centralize business operations, inventory and reporting across locations." data-bn="ঢাকা, চট্টগ্রাম, সিলেট, গাজীপুর বা নারায়ণগঞ্জে আপনার যত শাখাই থাকুক না কেন, ডিজিফাই সফট সলিউশনস সমস্ত আউটলেটের স্টক ও হিসাব একীভূত করে।">
                    Whether you operate one store or multiple branches across Dhaka, Chittagong, Sylhet, Gazipur and Narayanganj, Digify Soft Solutions helps centralize business operations, inventory and reporting across locations.
                </p>

                <div class="row g-3">
                    <div class="col-sm-6"><div class="d-flex align-items-center gap-2 text-white"><i class="fa-solid fa-circle-check text-warning"></i> <span class="bd-trans" data-en="Multi-branch management" data-bn="মাল্টি-ব্রাঞ্চ ম্যানেজমেন্ট">Multi-branch management</span></div></div>
                    <div class="col-sm-6"><div class="d-flex align-items-center gap-2 text-white"><i class="fa-solid fa-circle-check text-warning"></i> <span class="bd-trans" data-en="Centralized inventory visibility" data-bn="কেন্দ্রীয় স্টক নিরীক্ষণ">Centralized inventory visibility</span></div></div>
                    <div class="col-sm-6"><div class="d-flex align-items-center gap-2 text-white"><i class="fa-solid fa-circle-check text-warning"></i> <span class="bd-trans" data-en="Branch-level sales tracking" data-bn="শাখা-ভিত্তিক বিক্রয় ট্র্যাকিং">Branch-level sales tracking</span></div></div>
                    <div class="col-sm-6"><div class="d-flex align-items-center gap-2 text-white"><i class="fa-solid fa-circle-check text-warning"></i> <span class="bd-trans" data-en="Warehouse management" data-bn="ওয়্যারহাউস ব্যবস্থাপনা">Warehouse management</span></div></div>
                    <div class="col-sm-6"><div class="d-flex align-items-center gap-2 text-white"><i class="fa-solid fa-circle-check text-warning"></i> <span class="bd-trans" data-en="Customer management" data-bn="গ্রাহক তথ্য ও লয়ালটি">Customer management</span></div></div>
                    <div class="col-sm-6"><div class="d-flex align-items-center gap-2 text-white"><i class="fa-solid fa-circle-check text-warning"></i> <span class="bd-trans" data-en="Purchasing management" data-bn="ক্রয় ও পারচেজ অর্ডার">Purchasing management</span></div></div>
                    <div class="col-12"><div class="d-flex align-items-center gap-2 text-white"><i class="fa-solid fa-circle-check text-warning"></i> <span class="bd-trans" data-en="Consolidated business reporting" data-bn="সমন্বিত সামগ্রিক ব্যবসায়িক প্রতিবেদন">Consolidated business reporting</span></div></div>
                </div>

                <div class="mt-4 pt-2">
                    <a href="#demo-form" class="btn btn-lg px-4 py-3 text-white fw-bold rounded-pill bd-trans" data-en="Schedule Multi-Branch Walkthrough <i class='fa-solid fa-arrow-right ms-2'></i>" data-bn="মাল্টি-ব্রাঞ্চ ডেমো বুক করুন <i class='fa-solid fa-arrow-right ms-2'></i>" style="background: #e06930;">
                        Schedule Multi-Branch Walkthrough <i class="fa-solid fa-arrow-right ms-2"></i>
                    </a>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="bg-white bg-opacity-10 p-4 rounded-4 border border-white border-opacity-10">
                    <h5 class="fw-bold text-white mb-3 bd-trans" data-en="<i class='fa-solid fa-network-wired text-warning me-2'></i> Centralized Network Topology" data-bn="<i class='fa-solid fa-network-wired text-warning me-2'></i> কেন্দ্রীয় নেটওয়ার্ক টপোলজি"><i class="fa-solid fa-network-wired text-warning me-2"></i> Centralized Network Topology</h5>
                    <p class="text-white-50 small mb-3 bd-trans" data-en="Manage interconnected operations across all geographic commercial centers in Bangladesh:" data-bn="বাংলাদেশের সমস্ত প্রধান বাণিজ্যিক কেন্দ্রের আন্তঃসংযুক্ত শাখাগুলো এক প্ল্যাটফর্মে পরিচালনা করুন:">Manage interconnected operations across all geographic commercial centers in Bangladesh:</p>
                    <div class="d-flex flex-wrap gap-2">
                        <span class="badge bg-dark px-3 py-2 border border-secondary text-white bd-trans" data-en="Dhaka (Gulshan, Dhanmondi, Uttara)" data-bn="ঢাকা (গুলশান, ধানমন্ডি, উত্তরা)">Dhaka (Gulshan, Dhanmondi, Uttara)</span>
                        <span class="badge bg-dark px-3 py-2 border border-secondary text-white bd-trans" data-en="Chittagong Commercial Port" data-bn="চট্টগ্রাম বন্দর ও বাণিজ্যিক এলাকা">Chittagong Commercial Port</span>
                        <span class="badge bg-dark px-3 py-2 border border-secondary text-white bd-trans" data-en="Narayanganj & Gazipur Industrial" data-bn="নারায়ণগঞ্জ ও গাজীপুর শিল্পাঞ্চল">Narayanganj & Gazipur Industrial</span>
                        <span class="badge bg-dark px-3 py-2 border border-secondary text-white bd-trans" data-en="Savar & Ashulia RMG Belt" data-bn="সাভার ও আশুলিয়া আরএমজি বেল্ট">Savar & Ashulia RMG Belt</span>
                        <span class="badge bg-dark px-3 py-2 border border-secondary text-white bd-trans" data-en="Sylhet & Khulna" data-bn="সিলেট ও খুলনা">Sylhet & Khulna</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ==========================================
     8. BANGLADESH BUSINESS CHALLENGES
=========================================== -->
<section class="py-5" style="background: #ffffff;">
    <div class="container py-4">
        <div class="text-center max-w-750 mx-auto mb-5">
            <span class="section-tagline bd-trans" data-en="Problem & Solution" data-bn="সমস্যা ও সমাধান">Problem & Solution</span>
            <h2 class="fw-bold mb-3 bd-trans" data-en="Solve Common Business Management Challenges" data-bn="ব্যবসায়িক জটিলতা ও চ্যালেঞ্জ দূর করুন">Solve Common Business Management Challenges</h2>
            <p class="text-muted lead fs-6 bd-trans" data-en="Overcome operational bottlenecks with modern cloud business architecture." data-bn="আধুনিক ক্লাউড প্রযুক্তির মাধ্যমে ব্যবসার গতিশীলতা বৃদ্ধি করুন।">
                Overcome operational bottlenecks with modern cloud business architecture.
            </p>
        </div>

        <div class="row g-4">
            <div class="col-md-6 col-lg-4"><div class="challenge-card"><div class="d-flex align-items-center gap-2 mb-2"><i class="fa-solid fa-link-slash text-danger fs-5"></i><h5 class="fw-bold mb-0 text-dark bd-trans" data-en="Disconnected Business Systems" data-bn="বিচ্ছিন্ন সফটওয়্যার সিস্টেম">Disconnected Business Systems</h5></div><p class="text-muted small mb-0 bd-trans" data-en="Bring accounting, sales, inventory, purchasing and customer management into one integrated ERP platform." data-bn="অ্যাকাউন্টিং, সেলস, ইনভেন্টরি, পারচেজ ও সিআরএমকে একটি সমন্বিত প্ল্যাটফর্মে আনুন।">Bring accounting, sales, inventory, purchasing and customer management into one integrated ERP platform.</p></div></div>
            <div class="col-md-6 col-lg-4"><div class="challenge-card"><div class="d-flex align-items-center gap-2 mb-2"><i class="fa-solid fa-eye-slash text-danger fs-5"></i><h5 class="fw-bold mb-0 text-dark bd-trans" data-en="Inventory Visibility" data-bn="স্টক ও পণ্যের অস্বচ্ছতা">Inventory Visibility</h5></div><p class="text-muted small mb-0 bd-trans" data-en="Get better visibility into stock levels, product movements, purchases and sales across all stores and warehouses." data-bn="সমস্ত শাখা ও গুদামের স্টক লেভেল ও পণ্য চলাচলের নিখুঁত তথ্য পান।">Get better visibility into stock levels, product movements, purchases and sales across all stores and warehouses.</p></div></div>
            <div class="col-md-6 col-lg-4"><div class="challenge-card"><div class="d-flex align-items-center gap-2 mb-2"><i class="fa-solid fa-hand text-danger fs-5"></i><h5 class="fw-bold mb-0 text-dark bd-trans" data-en="Manual Business Processes" data-bn="অতিরিক্ত ম্যানুয়াল কাজ">Manual Business Processes</h5></div><p class="text-muted small mb-0 bd-trans" data-en="Reduce repetitive manual work by centralizing key business workflows, invoice generation, and financial logs." data-bn="ইনভয়েস ও আর্থিক ডেটা স্বয়ংক্রিয় করে কায়িক শ্রম ও ভুলত্রুটি হ্রাস করুন।">Reduce repetitive manual work by centralizing key business workflows, invoice generation, and financial logs.</p></div></div>
            <div class="col-md-6 col-lg-6"><div class="challenge-card"><div class="d-flex align-items-center gap-2 mb-2"><i class="fa-solid fa-sitemap text-danger fs-5"></i><h5 class="fw-bold mb-0 text-dark bd-trans" data-en="Multi-Branch Complexity" data-bn="শাখা পরিচালনার জটিলতা">Multi-Branch Complexity</h5></div><p class="text-muted small mb-0 bd-trans" data-en="Manage multiple stores, warehouses and business locations from a centralized system with unified pricing and stock transfers." data-bn="একটি কেন্দ্রীয় ড্যাশবোর্ড থেকে একাধিক আউটলেট এবং গুদাম পরিচালনা করুন।">Manage multiple stores, warehouses and business locations from a centralized system with unified pricing and stock transfers.</p></div></div>
            <div class="col-md-12 col-lg-6"><div class="challenge-card"><div class="d-flex align-items-center gap-2 mb-2"><i class="fa-solid fa-chart-line-down text-danger fs-5"></i><h5 class="fw-bold mb-0 text-dark bd-trans" data-en="Limited Business Insights" data-bn="ব্যবসায়িক তথ্যের অভাব">Limited Business Insights</h5></div><p class="text-muted small mb-0 bd-trans" data-en="Use real-time dashboards and reports to understand sales, inventory, gross margins, and operational performance." data-bn="রিয়েল-টাইম রিপোর্টের মাধ্যমে লাভ-ক্ষতি ও সঠিক ব্যবসায়িক সিদ্ধান্ত নিন।">Use real-time dashboards and reports to understand sales, inventory, gross margins, and operational performance.</p></div></div>
        </div>
    </div>
</section>

<!-- ==========================================
     9. WHY CHOOSE DIGIFY SOFT SOLUTIONS?
=========================================== -->
<section class="py-5" style="background: #f8fafc; border-top: 1px solid #e2e8f0; border-bottom: 1px solid #e2e8f0;">
    <div class="container py-4">
        <div class="text-center max-w-750 mx-auto mb-5">
            <span class="section-tagline bd-trans" data-en="Key Advantages" data-bn="প্রধান সুবিধাসমূহ">Key Advantages</span>
            <h2 class="fw-bold mb-3 bd-trans" data-en="Why Choose Digify Soft Solutions?" data-bn="কেন ডিজিফাই সফট সলিউশনস বেছে নেবেন?">Why Choose Digify Soft Solutions?</h2>
            <p class="text-muted lead fs-6 bd-trans" data-en="Purpose-built technology to help your enterprise scale without technological roadblocks." data-bn="আপনার ব্যবসার দ্রুত প্রসারে নির্ভরযোগ্য এবং নিরাপদ ক্লাউড প্ল্যাটফর্ম।">
                Purpose-built technology to help your enterprise scale without technological roadblocks.
            </p>
        </div>

        <div class="row g-3">
            <div class="col-md-6 col-lg-4"><div class="p-3 bg-white rounded-3 border d-flex align-items-center gap-3 shadow-sm h-100"><i class="fa-solid fa-cloud text-warning fs-4"></i><div><strong class="text-dark bd-trans" data-en="Cloud-Based ERP" data-bn="ক্লাউড-ভিত্তিক ইআরপি">Cloud-Based ERP</strong><p class="text-muted small mb-0 bd-trans" data-en="Access from anywhere securely" data-bn="নিরাপদে যেকোনো ডিভাইস থেকে ব্যবহারযোগ্য">Access from anywhere securely</p></div></div></div>
            <div class="col-md-6 col-lg-4"><div class="p-3 bg-white rounded-3 border d-flex align-items-center gap-3 shadow-sm h-100"><i class="fa-solid fa-cubes text-warning fs-4"></i><div><strong class="text-dark bd-trans" data-en="Integrated Business Modules" data-bn="একীভূত বিজনেস মডিউল">Integrated Business Modules</strong><p class="text-muted small mb-0 bd-trans" data-en="No disconnected data silos" data-bn="কোনো বিচ্ছিন্ন তথ্য বিভাজন নেই">No disconnected data silos</p></div></div></div>
            <div class="col-md-6 col-lg-4"><div class="p-3 bg-white rounded-3 border d-flex align-items-center gap-3 shadow-sm h-100"><i class="fa-solid fa-layer-group text-warning fs-4"></i><div><strong class="text-dark bd-trans" data-en="Scalable Architecture" data-bn="পরিমাপযোগ্য আর্কিটেকচার">Scalable Architecture</strong><p class="text-muted small mb-0 bd-trans" data-en="Grows as your business grows" data-bn="ব্যবসা বৃদ্ধির সাথে সাথে সম্প্রসারণযোগ্য">Grows as your business grows</p></div></div></div>
            <div class="col-md-6 col-lg-4"><div class="p-3 bg-white rounded-3 border d-flex align-items-center gap-3 shadow-sm h-100"><i class="fa-solid fa-clock text-warning fs-4"></i><div><strong class="text-dark bd-trans" data-en="Real-Time Business Data" data-bn="রিয়েল-টাইম ব্যবসায়িক তথ্য">Real-Time Business Data</strong><p class="text-muted small mb-0 bd-trans" data-en="Live stock & sales visibility" data-bn="লাইভ স্টক ও বিক্রয়ের হিসাব">Live stock & sales visibility</p></div></div></div>
            <div class="col-md-6 col-lg-4"><div class="p-3 bg-white rounded-3 border d-flex align-items-center gap-3 shadow-sm h-100"><i class="fa-solid fa-barcode text-warning fs-4"></i><div><strong class="text-dark bd-trans" data-en="Inventory & POS Management" data-bn="ইনভেন্টরি ও পিওএস বিলিং">Inventory & POS Management</strong><p class="text-muted small mb-0 bd-trans" data-en="Fast retail & warehouse checkout" data-bn="দ্রুত রিটেল ও ওয়্যারহাউস ট্রানজ্যাকশন">Fast retail & warehouse checkout</p></div></div></div>
            <div class="col-md-6 col-lg-4"><div class="p-3 bg-white rounded-3 border d-flex align-items-center gap-3 shadow-sm h-100"><i class="fa-solid fa-file-invoice-dollar text-warning fs-4"></i><div><strong class="text-dark bd-trans" data-en="Accounting & Financial Management" data-bn="অ্যাকাউন্টিং ও অর্থ ব্যবস্থাপনা">Accounting & Financial Management</strong><p class="text-muted small mb-0 bd-trans" data-en="Automated P&L, balance sheets" data-bn="স্বয়ংক্রিয় লাভ-ক্ষতি ও ব্যালেন্স শিট">Automated P&L, balance sheets</p></div></div></div>
            <div class="col-md-6 col-lg-4"><div class="p-3 bg-white rounded-3 border d-flex align-items-center gap-3 shadow-sm h-100"><i class="fa-solid fa-user-group text-warning fs-4"></i><div><strong class="text-dark bd-trans" data-en="CRM & Customer Management" data-bn="সিআরএম ও গ্রাহক সেবা">CRM & Customer Management</strong><p class="text-muted small mb-0 bd-trans" data-en="Track leads and loyalty" data-bn="কাস্টমার লিড ও বিক্রয় ট্র্যাকিং">Track leads and loyalty</p></div></div></div>
            <div class="col-md-6 col-lg-4"><div class="p-3 bg-white rounded-3 border d-flex align-items-center gap-3 shadow-sm h-100"><i class="fa-solid fa-industry text-warning fs-4"></i><div><strong class="text-dark bd-trans" data-en="Manufacturing Management" data-bn="উৎপাদন ও কারখানা নিয়ন্ত্রণ">Manufacturing Management</strong><p class="text-muted small mb-0 bd-trans" data-en="BOM, job cards & production" data-bn="বিওএম, জব কার্ড ও প্রোডাকশন ফ্লো">BOM, job cards & production</p></div></div></div>
            <div class="col-md-6 col-lg-4"><div class="p-3 bg-white rounded-3 border d-flex align-items-center gap-3 shadow-sm h-100"><i class="fa-solid fa-chart-pie text-warning fs-4"></i><div><strong class="text-dark bd-trans" data-en="Business Analytics & Reporting" data-bn="অ্যানালিটিক্স ও ব্যবসায়িক রিপোর্ট">Business Analytics & Reporting</strong><p class="text-muted small mb-0 bd-trans" data-en="Actionable executive intelligence" data-bn="ব্যবসার জন্য কার্যকর সিদ্ধান্ত গ্রহণ">Actionable executive intelligence</p></div></div></div>
            <div class="col-md-12 col-lg-12"><div class="p-3 bg-white rounded-3 border d-flex align-items-center justify-content-center gap-3 shadow-sm"><i class="fa-solid fa-location-dot text-danger fs-4"></i><div><strong class="text-dark bd-trans" data-en="Multi-Location Business Support" data-bn="মাল্টি-লোকেশন ব্যবসায়িক সাপোর্ট">Multi-Location Business Support</strong> — <span class="bd-trans" data-en="Seamless branch synchronization across Bangladesh." data-bn="বাংলাদেশ জুড়ে যেকোনো আউটলেটের ডেটা নিমিষেই সমন্বয় করুন।">Seamless branch synchronization across Bangladesh.</span></div></div></div>
        </div>
    </div>
</section>

<!-- ==========================================
     10. GLOBAL / BANGLADESH POSITIONING
=========================================== -->
<section class="py-5" style="background: #ffffff;">
    <div class="container py-4">
        <div class="row align-items-center g-5">
            <div class="col-lg-6">
                <span class="section-tagline bd-trans" data-en="Global Standards • Local Execution" data-bn="আন্তর্জাতিক মান • স্থানীয় নির্ভরযোগ্যতা">Global Standards • Local Execution</span>
                <h2 class="fw-bold mb-3 bd-trans" data-en="A Global ERP Platform for Growing Businesses" data-bn="ক্রমবর্ধমান ব্যবসার জন্য বিশ্বমানের ক্লাউড ইআরপি">A Global ERP Platform for Growing Businesses</h2>
                <div class="text-muted fs-6">
                    <p class="mb-3 bd-trans" data-en="Digify Soft Solutions is building scalable cloud-based business technology for organizations beyond a single market. Our ERP platform is designed to support businesses with integrated tools for finance, inventory, sales, purchasing, CRM, payroll, manufacturing and business analytics." data-bn="ডিজিফাই সফট সলিউশনস আধুনিক ব্যবসা প্রতিষ্ঠানের জন্য বিশ্বমানের ক্লাউড ইআরপি সফটওয়্যার সরবরাহ করছে। আমাদের প্ল্যাটফর্ম ফিন্যান্স, ইনভেন্টরি, সেলস, ক্রয়, সিআরএম, পে-রোল ও উৎপাদনের জন্য একীভূত টুলস প্রদান করে।">
                        Digify Soft Solutions is building scalable cloud-based business technology for organizations beyond a single market. Our ERP platform is designed to support businesses with integrated tools for finance, inventory, sales, purchasing, CRM, payroll, manufacturing and business analytics.
                    </p>
                    <p class="mb-0 bd-trans" data-en="For businesses in Bangladesh, the platform can help create a centralized digital environment for managing day-to-day operations and improving business visibility." data-bn="বাংলাদেশের ব্যবসায়ীদের জন্য এই প্ল্যাটফর্ম দৈনন্দিন কার্যক্রম পরিচালনা ও প্রতিষ্ঠানের স্বচ্ছতা বাড়াতে কার্যকর ভূমিকা রাখে।">
                        For businesses in Bangladesh, the platform can help create a centralized digital environment for managing day-to-day operations and improving business visibility.
                    </p>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="p-4 rounded-4 text-white" style="background: linear-gradient(135deg, #0f172a 0%, #1e293b 100%);">
                    <h5 class="fw-bold mb-3 text-warning bd-trans" data-en="<i class='fa-solid fa-earth-asia me-2'></i> Global Architecture, Ready for Bangladesh" data-bn="<i class='fa-solid fa-earth-asia me-2'></i> বিশ্বমানের প্রযুক্তি, বাংলাদেশের ব্যবসার উপযোগী"><i class="fa-solid fa-earth-asia me-2"></i> Global Architecture, Ready for Bangladesh</h5>
                    <p class="text-white-50 small mb-3 bd-trans" data-en="Our platform scales effortlessly from standalone SME storefronts to enterprise trading conglomerates with thousands of daily transactions." data-bn="ছোট রিটেল শপ থেকে শুরু করে হাজার হাজার দৈনিক লেনদেনযুক্ত বড় কনগ্লোমারেট ও কারখানায় সহজে ব্যবহারযোগ্য।">Our platform scales effortlessly from standalone SME storefronts to enterprise trading conglomerates with thousands of daily transactions.</p>
                    <div class="d-flex align-items-center gap-3 pt-2 border-top border-secondary">
                        <span class="h3 fw-bold text-white mb-0">99.9%</span>
                        <span class="text-white-50 small bd-trans" data-en="Cloud System Availability & Encrypted Backups" data-bn="ক্লাউড সিস্টেম আপটাইম ও সুরক্ষিত এনক্রিপ্টেড ব্যাকআপ">Cloud System Availability & Encrypted Backups</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ==========================================
     11. FAQ SECTION (7 FAQs)
=========================================== -->
<section class="py-5" style="background: #f8fafc;">
    <div class="container py-4">
        <div class="text-center max-w-750 mx-auto mb-5">
            <span class="section-tagline bd-trans" data-en="Frequently Asked Questions" data-bn="সচরাচর জিজ্ঞাসা">Frequently Asked Questions</span>
            <h2 class="fw-bold mb-3 bd-trans" data-en="Bangladesh ERP Software FAQs" data-bn="বাংলাদেশে ইআরপি সফটওয়্যার সম্পর্কিত সচরাচর জিজ্ঞাসা">Bangladesh ERP Software FAQs</h2>
            <p class="text-muted lead fs-6 bd-trans" data-en="Common questions about deploying Digify Cloud ERP in Bangladesh." data-bn="বাংলাদেশে ডিজিফাই ক্লাউড ইআরপি ব্যবহার সংক্রান্ত সাধারণ প্রশ্নোত্তর।">
                Common questions about deploying Digify Cloud ERP in Bangladesh.
            </p>
        </div>

        <div class="max-w-850 mx-auto">
            <div class="accordion faq-accordion" id="bdFaqAccordion">
                
                <!-- Q1 -->
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq1">
                            <i class="fa-regular fa-circle-question me-2 text-primary"></i>
                            <span class="bd-trans" data-en="What is ERP software in Bangladesh?" data-bn="বাংলাদেশে ইআরপি (ERP) সফটওয়্যার কী?">What is ERP software in Bangladesh?</span>
                        </button>
                    </h2>
                    <div id="faq1" class="accordion-collapse collapse show" data-bs-parent="#bdFaqAccordion">
                        <div class="accordion-body bd-trans" data-en="ERP software in Bangladesh helps businesses manage multiple functions such as accounting, sales, inventory, purchasing, CRM, payroll and manufacturing through one integrated platform." data-bn="বাংলাদেশে ইআরপি সফটওয়্যার একটি সমন্বিত প্ল্যাটফর্মের মাধ্যমে অ্যাকাউন্টিং, সেলস, ইনভেন্টরি, ক্রয়, সিআরএম, পে-রোল ও উৎপাদন পরিচালনা করতে সাহায্য করে।">
                            ERP software in Bangladesh helps businesses manage multiple functions such as accounting, sales, inventory, purchasing, CRM, payroll and manufacturing through one integrated platform.
                        </div>
                    </div>
                </div>

                <!-- Q2 -->
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2">
                            <i class="fa-regular fa-circle-question me-2 text-primary"></i>
                            <span class="bd-trans" data-en="Is Digify Soft Solutions ERP cloud-based?" data-bn="ডিজিফাই সফট সলিউশনস ইআরপি কি ক্লাউড-ভিত্তিক?">Is Digify Soft Solutions ERP cloud-based?</span>
                        </button>
                    </h2>
                    <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#bdFaqAccordion">
                        <div class="accordion-body bd-trans" data-en="Yes. Digify Soft Solutions provides a cloud-based ERP environment designed to allow businesses to manage their operations from connected devices and locations." data-bn="হ্যাঁ। ডিজিফাই সফট সলিউশনস একটি ক্লাউড-ভিত্তিক ইআরপি প্ল্যাটফর্ম, যার মাধ্যমে যেকোনো ইন্টারনেট ডিভাইস থেকে ব্যবসা পরিচালনা করা যায়।">
                            Yes. Digify Soft Solutions provides a cloud-based ERP environment designed to allow businesses to manage their operations from connected devices and locations.
                        </div>
                    </div>
                </div>

                <!-- Q3 -->
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq3">
                            <i class="fa-regular fa-circle-question me-2 text-primary"></i>
                            <span class="bd-trans" data-en="Can the ERP manage inventory?" data-bn="এই ইআরপি কি ইনভেন্টরি ও স্টক পরিচালনা করতে পারে?">Can the ERP manage inventory?</span>
                        </button>
                    </h2>
                    <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#bdFaqAccordion">
                        <div class="accordion-body bd-trans" data-en="Yes. The platform provides inventory management capabilities for tracking products, stock movements, purchases, sales and business locations." data-bn="হ্যাঁ। এটি পণ্য ট্র্যাকিং, স্টক মুভমেন্ট, ক্রয়, বিক্রয় এবং একাধিক গুদামের ইনভেন্টরি সঠিকভাবে পরিচালনা করে।">
                            Yes. The platform provides inventory management capabilities for tracking products, stock movements, purchases, sales and business locations.
                        </div>
                    </div>
                </div>

                <!-- Q4 -->
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq4">
                            <i class="fa-regular fa-circle-question me-2 text-primary"></i>
                            <span class="bd-trans" data-en="Can it manage multiple branches?" data-bn="এটি কি একাধিক শাখা পরিচালনা করতে পারে?">Can it manage multiple branches?</span>
                        </button>
                    </h2>
                    <div id="faq4" class="accordion-collapse collapse" data-bs-parent="#bdFaqAccordion">
                        <div class="accordion-body bd-trans" data-en="The platform is designed to support multi-location business operations, helping businesses centralize information across stores, branches and warehouses." data-bn="হ্যাঁ। এই প্ল্যাটফর্মটি একাধিক শাখা, দোকান ও গুদামের তথ্য কেন্দ্রীয়ভাবে একত্রিত করে পরিচালনা করতে সক্ষম।">
                            The platform is designed to support multi-location business operations, helping businesses centralize information across stores, branches and warehouses.
                        </div>
                    </div>
                </div>

                <!-- Q5 -->
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq5">
                            <i class="fa-regular fa-circle-question me-2 text-primary"></i>
                            <span class="bd-trans" data-en="Can it be used by manufacturing companies?" data-bn="এটি কি উৎপাদনমুখী বা তৈরি পোশাক কারখানায় ব্যবহার করা যায়?">Can it be used by manufacturing companies?</span>
                        </button>
                    </h2>
                    <div id="faq5" class="accordion-collapse collapse" data-bs-parent="#bdFaqAccordion">
                        <div class="accordion-body bd-trans" data-en="Yes. Manufacturing businesses can use ERP capabilities for managing materials, inventory, purchasing, production-related workflows and business reporting." data-bn="হ্যাঁ। তৈরি পোশাক ও উৎপাদন শিল্প কাঁচামাল, বিওএম (BOM), উৎপাদন ধাপ এবং প্রতিবেদন তৈরির জন্য এটি ব্যবহার করতে পারে।">
                            Yes. Manufacturing businesses can use ERP capabilities for managing materials, inventory, purchasing, production-related workflows and business reporting.
                        </div>
                    </div>
                </div>

                <!-- Q6 -->
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq6">
                            <i class="fa-regular fa-circle-question me-2 text-primary"></i>
                            <span class="bd-trans" data-en="Does Digify ERP support Bangladesh VAT?" data-bn="ডিজিফাই ইআরপি কি বাংলাদেশের ভ্যাট প্রক্রিয়ায় সহায়তা করে?">Does Digify ERP support Bangladesh VAT?</span>
                        </button>
                    </h2>
                    <div id="faq6" class="accordion-collapse collapse" data-bs-parent="#bdFaqAccordion">
                        <div class="accordion-body bd-trans" data-en="Digify Soft Solutions provides financial and transaction management capabilities that can help businesses organize data relevant to accounting and VAT workflows. Specific Bangladesh VAT filing or NBR integration capabilities should be confirmed based on the deployed ERP configuration." data-bn="ডিজিফাই সফট সলিউশনস আর্থিক ও লেনদেন ডেটা সুসংগঠিত রাখতে সাহায্য করে, যা ভ্যাট ও অডিট প্রস্তুতিতে অত্যন্ত কার্যকর।">
                            Digify Soft Solutions provides financial and transaction management capabilities that can help businesses organize data relevant to accounting and VAT workflows. Specific Bangladesh VAT filing or NBR integration capabilities should be confirmed based on the deployed ERP configuration.
                        </div>
                    </div>
                </div>

                <!-- Q7 -->
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq7">
                            <i class="fa-regular fa-circle-question me-2 text-primary"></i>
                            <span class="bd-trans" data-en="Can Bangladesh SMEs use the ERP?" data-bn="বাংলাদেশের ক্ষুদ্র ও মাঝারি শিল্প (SME) কি এটি ব্যবহার করতে পারে?">Can Bangladesh SMEs use the ERP?</span>
                        </button>
                    </h2>
                    <div id="faq7" class="accordion-collapse collapse" data-bs-parent="#bdFaqAccordion">
                        <div class="accordion-body bd-trans" data-en="Yes. The platform can be positioned for small and medium-sized businesses as well as growing organizations that need integrated business management." data-bn="হ্যাঁ। এটি ছোট ও মাঝারি প্রতিষ্ঠান (SME) থেকে শুরু করে বড় প্রতিষ্ঠানের জন্য অত্যন্ত সাশ্রয়ী এবং সহজে ব্যবহারযোগ্য।">
                            Yes. The platform can be positioned for small and medium-sized businesses as well as growing organizations that need integrated business management.
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

<!-- ==========================================
     12. FINAL CTA SECTION
=========================================== -->
<section class="py-5 text-white" style="background: linear-gradient(135deg, #090e24 0%, #151a3d 100%); border-top: 3px solid #e06930;">
    <div class="container py-4 text-center">
        <span class="badge mb-3 px-3 py-2 text-uppercase fw-bold bd-trans" data-en="🇧🇩 Transform Your Operations Today" data-bn="🇧🇩 আজই আপনার ব্যবসা আধুনিকায়ন করুন" style="background: rgba(224, 105, 48, 0.2); color: #ffb188; font-size: 11px;">
            🇧🇩 Transform Your Operations Today
        </span>
        <h2 class="fw-bold mb-3 display-6 bd-trans" data-en="Ready to Transform Your Business with Cloud ERP?" data-bn="ক্লাউড ইআরপির মাধ্যমে আপনার ব্যবসা আধুনিকায়ন করতে প্রস্তুত?">Ready to Transform Your Business with Cloud ERP?</h2>
        <p class="text-white-50 lead fs-6 max-w-750 mx-auto mb-4 bd-trans" data-en="Bring accounting, inventory, sales, purchasing, CRM, payroll, garments manufacturing and business operations together with Digify Soft Solutions." data-bn="ডিজিফাই সফট সলিউশনসের সাথে অ্যাকাউন্টিং, ইনভেন্টরি, সেলস, ক্রয়, সিআরএম, পে-রোল, গার্মেন্টস উৎপাদন ও সার্বিক ব্যবসা একীভূত করুন।">
            Bring accounting, inventory, sales, purchasing, CRM, payroll, garments manufacturing and business operations together with Digify Soft Solutions.
        </p>
        <div class="d-flex flex-wrap justify-content-center gap-3">
            <a href="#demo-form" class="btn btn-lg px-5 py-3 text-white fw-bold rounded-pill shadow-lg bd-trans" 
                data-en="<i class='fa-solid fa-calendar-check me-2'></i> Request a Free Demo" 
                data-bn="<i class='fa-solid fa-calendar-check me-2'></i> ফ্রি ডেমোর জন্য অনুরোধ করুন"
                style="background: linear-gradient(135deg, #e06930, #fbc145);">
                <i class="fa-solid fa-calendar-check me-2"></i> Request a Free Demo
            </a>
            <a href="https://wa.me/917425016636?text=Hi%20Digify%20Team,%20I%20want%20to%20talk%20to%20the%20ERP%20team%20about%20Bangladesh." target="_blank" class="btn btn-lg px-5 py-3 btn-outline-light rounded-pill fw-semibold bd-trans"
                data-en="<i class='fa-brands fa-whatsapp text-success me-2'></i> Talk to Our ERP Team"
                data-bn="<i class='fa-brands fa-whatsapp text-success me-2'></i> আমাদের ইআরপি টিমের সাথে কথা বলুন">
                <i class="fa-brands fa-whatsapp text-success me-2"></i> Talk to Our ERP Team
            </a>
        </div>
    </div>
</section>

</div><!-- /.bd-page-wrapper -->

<!-- ==========================================
     BENGALI / ENGLISH INSTANT TOGGLE SCRIPT
=========================================== -->
<script>
function switchBdLang(lang) {
    var btnEn = document.getElementById('btnBdLangEn');
    var btnBn = document.getElementById('btnBdLangBn');

    if (lang === 'bn') {
        if (btnEn) btnEn.classList.remove('active');
        if (btnBn) btnBn.classList.add('active');
    } else {
        if (btnBn) btnBn.classList.remove('active');
        if (btnEn) btnEn.classList.add('active');
    }

    var elements = document.querySelectorAll('.bd-trans');
    elements.forEach(function(el) {
        var text = el.getAttribute('data-' + lang);
        if (text) {
            el.innerHTML = text;
        }
    });

    // Also update form select options
    var indSelect = document.querySelector('#demo-form select[name="industry"]');
    if (indSelect) {
        if (lang === 'bn') {
            indSelect.options[0].text = "গার্মেন্টস ও তৈরি পোশাক শিল্প (RMG)";
            indSelect.options[1].text = "টেক্সটাইল ও সুতা উৎপাদন মিল (ইসলামপুর / নারায়ণগঞ্জ)";
            indSelect.options[2].text = "পাইকারি বাণিজ্য ও ডিস্ট্রিবিউশন";
            indSelect.options[3].text = "রিটেল ও সুপারমার্কেট শপ";
            indSelect.options[4].text = "এফএমসিজি (FMCG) ডিস্ট্রিবিউশন";
            indSelect.options[5].text = "উৎপাদন ও শিল্প কারখানা";
            indSelect.options[6].text = "ফার্মাসিউটিক্যালস ও ফার্মেসি";
            indSelect.options[7].text = "খাদ্য ও পানীয় / রেস্তোরাঁ";
            indSelect.options[8].text = "আমদানি ও রপ্তানি বাণিজ্য";
            indSelect.options[9].text = "অন্যান্য ব্যবসা";
        } else {
            indSelect.options[0].text = "Garments & Ready-Made Garments (RMG)";
            indSelect.options[1].text = "Textile Manufacturing & Yarn (Islampur / Narayanganj)";
            indSelect.options[2].text = "Wholesale & Distribution";
            indSelect.options[3].text = "Retail & Supermarket Chains";
            indSelect.options[4].text = "FMCG Distribution";
            indSelect.options[5].text = "Manufacturing & Production";
            indSelect.options[6].text = "Pharmaceuticals & Drug Stores";
            indSelect.options[7].text = "Food & Beverage / Restaurants";
            indSelect.options[8].text = "Import & Export Trading";
            indSelect.options[9].text = "Other Business";
        }
    }
    localStorage.setItem('digify_bd_lang', lang);
}

document.addEventListener('DOMContentLoaded', function() {
    var savedLang = localStorage.getItem('digify_bd_lang');
    if (savedLang) {
        switchBdLang(savedLang);
    }
});
</script>

<?php include(__DIR__ . '/../../footer.php'); ?>
