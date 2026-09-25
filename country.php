<?php 
include('db.php');
include('fetch_meta.php');

// Master localized country profiles database (41 Countries with Tailored Industries)
require_once(__DIR__ . '/includes/country_profiles_master.php');

// Function to dynamically build localized country profile for any global market
function getDynamicCountryProfile($slug) {
    $name = ucwords(str_replace('-', ' ', $slug));
    return [
        'code' => strtoupper(substr($slug, 0, 2)),
        'name' => $name,
        'flag' => '🌐',
        'currency' => 'Local Currency & USD',
        'dial_code' => '+ Intl',
        'native_flag' => '🌐',
        'native_name' => 'Native',
        'native_title' => "Enterprise Cloud ERP & POS for <span class=\"text-gradient\">" . $name . " Businesses</span>",
        'native_desc' => "Empower retail chains, wholesale distributors, and manufacturing enterprises in " . $name . ".",
        'native_badge' => 'Native Mode • Certified Compliance',
        'tagline' => "#1 Certified Cloud ERP, POS & Automation in " . $name,
        'badge' => 'International Tax Compliance • Local Payments',
        'hero_title' => "Enterprise Cloud ERP, Retail POS & Trading Platform for <span class=\"text-gradient\">" . $name . " Businesses</span>",
        'hero_desc' => "Empower retail chains, wholesale distributors, restaurants, and manufacturing enterprises in " . $name . ". 100% compliant with local fiscal regulations.",
        'stat_1' => ['num' => '100%', 'label' => 'Tax Compliant'],
        'stat_2' => ['num' => 'Integrated', 'label' => 'Local POS & Payments'],
        'stat_3' => ['num' => '0% Risk', 'label' => 'Audit & Compliance Verified'],
        'hero_img' => 'assets/images/retail-store.png',
        'key_highlights' => [
            [
                'icon' => 'fa-file-invoice-dollar',
                'title' => 'Fiscal Tax & e-Invoicing Compliance',
                'desc' => "Automated generation and submission of electronic tax invoices, receipts, and compliance audit files direct to " . $name . " fiscal authorities."
            ],
            [
                'icon' => 'fa-credit-card',
                'title' => 'Local Payment & Card Terminal Integration',
                'desc' => "Seamless counter POS checkout, instant digital payment links, QR code prompts, and automated bank reconciliation in " . $name . "."
            ],
            [
                'icon' => 'fa-boxes-stacked',
                'title' => 'Multi-Store & Wholesale Distribution',
                'desc' => "Real-time stock synchronization across branches, landed costing, and credit limits."
            ],
            [
                'icon' => 'fa-utensils',
                'title' => 'Commercial POS & Industry Solutions',
                'desc' => "High-speed barcode billing, inventory lot tracking, and business analytics tailored for " . $name . "."
            ]
        ],
        'industries' => [
            ['name' => 'Supermarkets & Convenience Stores', 'desc' => 'High-speed barcode scanning, weighed scale sync, shelf label printing, and stock alerts.'],
            ['name' => 'Fashion, Apparel & Luxury Boutiques', 'desc' => 'Size/color/season matrix, barcode tagging, VIP customer loyalty, and boutique POS.'],
            ['name' => 'Restaurants, Cafes & Fast Food', 'desc' => 'Kitchen order display (KDS), table seating layout, recipe costing, and split checkout.'],
            ['name' => 'Wholesale & Import/Export Distribution', 'desc' => 'Multi-currency invoicing, landed cost tracking, customs documentation, and credit accounts.'],
            ['name' => 'Manufacturing & Assembly Plants', 'desc' => 'Bill of materials (BOM), production batch tracking, sub-assemblies, and scrap monitoring.'],
            ['name' => 'Automotive Parts & Service Centers', 'desc' => 'Parts interchange lookup, mechanic job cards, warranty management, and corporate billing.']
        ],
        'regions' => [$name . ' Capital', $name . ' Commercial Center', $name . ' Industrial Hub'],
        'faqs' => [
            [
                'q' => "Is Digify software compliant with tax and invoicing laws in " . $name . "?",
                'a' => "Yes! Digify is engineered for local compliance, automatically applying local tax rules, generating official tax invoices, and producing audit reports."
            ],
            [
                'q' => "Does Digify support local payment methods in " . $name . "?",
                'a' => "Yes. Digify integrates with local banking networks, credit/debit card terminals, and online payment links."
            ],
            [
                'q' => "Does Digify POS work offline during internet interruptions in " . $name . "?",
                'a' => "Yes. The point-of-sale system features robust offline capabilities. Cashiers continue billing seamlessly and all transactions sync automatically when connection restores."
            ]
        ]
    ];
}

// Determine selected country from query parameter
$selectedKey = isset($_GET['country']) ? strtolower(trim($_GET['country'])) : 'kuwait';

// Normalize aliases
$aliasMap = [
    'ksa' => 'saudi-arabia',
    'uae' => 'uae', 'dubai' => 'uae',
    'us' => 'usa', 'united-states' => 'usa',
    'uk' => 'uk', 'great-britain' => 'uk', 'england' => 'uk',
    'au' => 'australia', 'sg' => 'singapore', 'za' => 'south-africa',
    'ca' => 'canada', 'kw' => 'kuwait', 'om' => 'oman', 'qa' => 'qatar',
    'bh' => 'bahrain', 'ke' => 'kenya', 'my' => 'malaysia', 'id' => 'indonesia',
    'th' => 'thailand', 'vn' => 'vietnam', 'ph' => 'philippines', 'de' => 'germany',
    'fr' => 'france', 'nl' => 'netherlands', 'it' => 'italy', 'es' => 'spain',
    'ie' => 'ireland', 'nz' => 'new-zealand', 'ng' => 'nigeria', 'eg' => 'egypt',
    'gh' => 'ghana', 'tz' => 'tanzania', 'ug' => 'uganda', 'bd' => 'bangladesh',
    'lk' => 'sri-lanka', 'np' => 'nepal', 'mx' => 'mexico', 'br' => 'brazil',
    'cl' => 'chile', 'co' => 'colombia', 'jp' => 'japan', 'kr' => 'south-korea',
    'tr' => 'turkey', 'in' => 'india', 'af' => 'afghanistan', 'afg' => 'afghanistan',
    'cn' => 'china', 'chn' => 'china', 'china' => 'china'
];

if (isset($aliasMap[$selectedKey])) {
    $selectedKey = $aliasMap[$selectedKey];
}

// Check explicit profiles or build dynamic localized profile
$countryPathMap = [
    'bangladesh' => 'countries/bangladesh/erp-software-bangladesh.php',
    'kenya' => 'countries/kenya/erp-software-kenya.php',
    'sri-lanka' => 'countries/sri-lanka/erp-software-sri-lanka.php',
    'afghanistan' => 'countries/afghanistan/erp-software-afghanistan.php',
    'nepal' => 'countries/nepal/erp-software-nepal.php',
    'saudi-arabia' => 'countries/saudi-arabia/erp-software-saudi-arabia.php',
    'uae' => 'countries/uae/erp-software-uae.php',
    'thailand' => 'countries/thailand/erp-software-thailand.php',
    'oman' => 'countries/oman/erp-software-oman.php',
    'south-africa' => 'countries/south-africa/erp-software-south-africa.php',
    'nigeria' => 'countries/nigeria/erp-software-nigeria.php',
];

if (isset($countryPathMap[$selectedKey])) {
    $targetFile = __DIR__ . '/' . $countryPathMap[$selectedKey];
    if (file_exists($targetFile)) {
        include($targetFile);
        exit;
    }
}

if (isset($countryProfiles[$selectedKey])) {
    $countryData = $countryProfiles[$selectedKey];
} else {
    $countryData = getDynamicCountryProfile($selectedKey);
}

function buildCountryLangData($cData) {
    $cName = $cData['name'];
    $code = strtolower($cData['code'] ?? '');
    $nName = $cData['native_name'] ?? '';
    $flag = $cData['native_flag'] ?? ($cData['flag'] ?? '🌐');

    $isArabic = in_array($code, ['eg', 'kw', 'ae', 'sa', 'om', 'qa', 'bh', 'af']) || (strpos($nName, 'العربية') !== false) || (strpos($nName, 'دری') !== false) || (strpos($nName, 'پښتو') !== false);
    $isFilipino = ($code === 'ph') || (strpos($nName, 'Tagalog') !== false) || (strpos($nName, 'Filipino') !== false);
    $isSpanish = in_array($code, ['es', 'mx', 'cl', 'co']) || (strpos($nName, 'Español') !== false);
    $isBengali = ($code === 'bd') || (strpos($nName, 'বাংলা') !== false);
    $isHindi = ($code === 'in') || (strpos($nName, 'हिन्दी') !== false);
    $isSwahili = in_array($code, ['ke', 'tz', 'ug']) || (strpos($nName, 'Kiswahili') !== false) || (strpos($nName, 'Swahili') !== false);
    $isAfrikaans = ($code === 'za') || (strpos($nName, 'Afrikaans') !== false);

    $enHighlights = $cData['key_highlights'];
    $enIndustries = $cData['industries'];
    $enFaqs = $cData['faqs'];

    $enData = [
        'is_rtl' => false,
        'title' => $cData['hero_title'],
        'desc' => $cData['hero_desc'],
        'badge' => $cData['badge'],
        'btn_hero_book' => '<i class="fa-solid fa-calendar-check me-2"></i> Book ' . $cName . ' Demo',
        'btn_hero_explore' => 'Explore Local Features <i class="fa-solid fa-arrow-down ms-1"></i>',
        'form_badge' => $cData['flag'] . ' FREE 15-MINUTE CONSULTATION',
        'form_title' => "Get Digify in " . $cName,
        'form_desc' => "Local tax compliance, currency setup, and fast 48-hour onboarding.",
        'form_lbl_name' => "Your Name",
        'form_lbl_comp' => "Business / Company Name",
        'form_lbl_phone' => "WhatsApp / Mobile Number",
        'form_lbl_ind' => "Your Industry",
        'form_btn_submit' => 'Schedule Free Live Demo <i class="fa-solid fa-arrow-right ms-2"></i>',
        'sec_hl_tagline' => "Engineered For " . $cName,
        'sec_hl_title' => "Built to Match " . $cName . "'s Market Realities",
        'sec_hl_desc' => "Forget generic software that fails to handle your local payments, currencies, or government tax audits. Digify is tailored for high-volume commercial operations in " . $cName . ".",
        'sec_ms_tagline' => "Unified Management Dashboard",
        'sec_ms_title' => "Manage Multi-Store Operations Across " . $cName . " with Zero Friction",
        'sec_ms_desc' => "Gain 360-degree control over your entire business — from supplier purchase orders and landed cost allocation to cashier shift balancing and real-time P&L reporting.",
        'ms_p1_title' => "Centralized Multi-Outlet Inventory",
        'ms_p1_desc' => "Real-time stock synchronization across all branches and warehouses in " . $cName . ".",
        'ms_p2_title' => "Automated Financial Statements & Tax Prep",
        'ms_p2_desc' => "Daily sales reconciliation, expense logs, balance sheets, and audit-ready tax exports.",
        'ms_p3_title' => "WhatsApp Automated Bot & PDF Invoicing",
        'ms_p3_desc' => "Automatically send invoices, receipt PDFs, and payment reminders directly to customer WhatsApp.",
        'btn_ms_walkthrough' => "Request Live System Walkthrough",
        'sec_ind_tagline' => "Industry Coverage",
        'sec_ind_title' => "Industries Thriving on Digify in " . $cName,
        'sec_ind_desc' => "Purpose-built workflows tailored for high volume, fast checkout, and tight inventory margins.",
        'sec_comp_tagline' => "Competitive Comparison",
        'sec_comp_title' => "Why Businesses in " . $cName . " Choose Digify",
        'sec_comp_desc' => "See how Digify compares to older legacy desktop systems and generic foreign ERPs.",
        'comp_th_req' => "Key Operational Requirement",
        'comp_th_digify' => "Digify Soft Solutions",
        'comp_th_legacy' => "Traditional / Foreign Legacy Systems",
        'comp_r1_title' => "Local Tax & Regulatory Compliance",
        'comp_r1_digify' => '<i class="fa-solid fa-circle-check me-2"></i> 100% Pre-calibrated for ' . $cName,
        'comp_r1_legacy' => '<i class="fa-solid fa-circle-xmark me-2"></i> Requires expensive custom coding',
        'comp_r2_title' => "Local Payment Gateway Support",
        'comp_r2_digify' => '<i class="fa-solid fa-circle-check me-2"></i> Integrated for ' . $cData['currency'],
        'comp_r2_legacy' => '<i class="fa-solid fa-circle-exclamation me-2"></i> Manual counter reconciliation',
        'comp_r3_title' => "Offline POS Resilience",
        'comp_r3_digify' => '<i class="fa-solid fa-circle-check me-2"></i> Full offline mode with automated cloud sync',
        'comp_r3_legacy' => '<i class="fa-solid fa-circle-xmark me-2"></i> Counter halts when internet drops',
        'comp_r4_title' => "Multi-Language & Native UI",
        'comp_r4_digify' => '<i class="fa-solid fa-circle-check me-2"></i> Native English & Local Language thermal receipts',
        'comp_r4_legacy' => '<i class="fa-solid fa-circle-exclamation me-2"></i> English only or broken fonts',
        'comp_r5_title' => "Pricing Transparency & Total Cost",
        'comp_r5_digify' => '<i class="fa-solid fa-circle-check me-2"></i> Affordable flat monthly/annual plans',
        'comp_r5_legacy' => '<i class="fa-solid fa-circle-xmark me-2"></i> High per-user licensing & upgrade fees',
        'sec_reg_tagline' => "Local Onboarding & Support",
        'sec_reg_title' => "Serving Growing Businesses Across " . $cName,
        'sec_reg_desc' => "Whether you are operating a single storefront in a major commercial district or orchestrating a distributed supply chain across regional trading hubs, Digify cloud keeps you fully synchronized 24/7.",
        'cities_heading' => '<i class="fa-solid fa-location-dot text-danger me-2"></i> Key Cities & Commercial Hubs We Serve in ' . $cName . ':',
        'sec_faq_tagline' => "Got Questions?",
        'sec_faq_title' => $cName . " Business FAQs",
        'sec_faq_desc' => "Frequently asked questions by enterprise owners and managers in " . $cName . ".",
        'sec_cta_badge' => $cData['flag'] . " Ready To Transform Your Business in " . $cName . "?",
        'sec_cta_title' => "Join Growing Enterprises in " . $cName,
        'sec_cta_desc' => "Get a personalized 15-minute walkthrough of Digify tailored to your industry, tax rules, and local currency.",
        'btn_cta_book' => 'Book ' . $cName . ' Demo <i class="fa-solid fa-arrow-right ms-2"></i>',
        'highlights' => $enHighlights,
        'industries' => $enIndustries,
        'faqs' => $enFaqs
    ];

    if ($isBengali) {
        $natData = [
            'is_rtl' => false,
            'title' => $cData['native_title'],
            'desc' => $cData['native_desc'],
            'badge' => $cData['native_badge'],
            'btn_hero_book' => '<i class="fa-solid fa-calendar-check me-2"></i> ফ্রি ডেমো বুক করুন (বাংলা)',
            'btn_hero_explore' => 'ফিচারসমূহ দেখুন <i class="fa-solid fa-arrow-down ms-1"></i>',
            'form_badge' => '🇧🇩 ফ্রি ১৫-মিনিট ব্যবসায়িক পরামর্শ',
            'form_title' => "বাংলাদেশে ডিজিফাই সফটওয়্যার নিন",
            'form_desc' => "এনবিআর (NBR) ভ্যাট কমপ্লায়েন্স, বিকাশ/নগদ পেমেন্ট এবং দ্রুত ৪৮ ঘণ্টার অনবোর্ডিং।",
            'form_lbl_name' => "আপনার নাম",
            'form_lbl_comp' => "কোম্পানি / প্রতিষ্ঠানের নাম",
            'form_lbl_phone' => "হোয়াটসঅ্যাপ / মোবাইল নম্বর",
            'form_lbl_ind' => "আপনার ব্যবসার ধরন",
            'form_btn_submit' => 'ফ্রি লাইভ ডেমো শিডিউল করুন <i class="fa-solid fa-arrow-right ms-2"></i>',
            'sec_hl_tagline' => "বাংলাদেশের বাজারের জন্য বিশেষভাবে তৈরি",
            'sec_hl_title' => "বাংলাদেশের তৈরি পোশাক ও স্থানীয় বাণিজ্যের উপযোগী সফটওয়্যার",
            'sec_hl_desc' => "সাধারণ সফটওয়্যার বাদ দিন যা এনবিআর ভ্যাট মূসক ৬.৩ বা বিকাশ পেমেন্ট পরিচালনা করতে পারে না। ডিজিফাই তৈরি করা হয়েছে বাংলাদেশের আরএমজি ও বাণিজ্যিক ব্যবসার সর্বোচ্চ গতির জন্য।",
            'sec_ms_tagline' => "একীভূত ক্লাউড ম্যানেজমেন্ট ড্যাশবোর্ড",
            'sec_ms_title' => "সারা বাংলাদেশে আপনার একাধিক শাখা ও কারখানা পরিচালনা করুন এক ক্লিকে",
            'sec_ms_desc' => "সাপ্লায়ার ক্রয় আদেশ ও আমদানি খরচ থেকে শুরু করে ক্যাশিয়ার শিফট ব্যালেন্স এবং রিয়েল-টাইম লাভ-ক্ষতির প্রতিবেদন — আপনার সম্পূর্ণ ব্যবসায় ৩৬০-ডিগ্রি নিয়ন্ত্রণ রাখুন।",
            'ms_p1_title' => "কেন্দ্রীভূত মাল্টি-আউটলেট ইনভেন্টরি",
            'ms_p1_desc' => "ঢাকা, চট্টগ্রাম ও সিলেটের সমস্ত শাখা এবং গুদামে রিয়েল-টাইম স্টক আপডেট।",
            'ms_p2_title' => "স্বয়ংক্রিয় আর্থিক বিবরণী ও এনবিআর ভ্যাট রিটার্ন",
            'ms_p2_desc' => "দৈনিক বিক্রয় হিসাব, খরচ ট্র্যাকিং এবং অডিট-প্রস্তুত মূসক প্রতিবেদন।",
            'ms_p3_title' => "হোয়াটসঅ্যাপ বট ও পিডিএফ চালান",
            'ms_p3_desc' => "গ্রাহকের হোয়াটসঅ্যাপে সরাসরি ইলেকট্রনিক ইনভয়েস, রসিদ এবং পেমেন্ট রিমাইন্ডার পাঠানো।",
            'btn_ms_walkthrough' => "সরাসরি সিস্টেম ডেমো দেখুন",
            'sec_ind_tagline' => "শিল্প ও খাত কাভারেজ",
            'sec_ind_title' => "যেসব শিল্পে বাংলাদেশে ডিজিফাই সফলভাবে ব্যবহৃত হচ্ছে",
            'sec_ind_desc' => "দ্রুততম ক্যাশ কাউন্টার এবং নির্ভুল ফ্যাক্টরি ইনভেন্টরির জন্য প্রস্তুত ওয়ার্কফ্লো।",
            'sec_comp_tagline' => "তুলনামূলক বিশ্লেষণ",
            'sec_comp_title' => "কেন বাংলাদেশের শীর্ষ ব্যবসাগুলো ডিজিফাই বেছে নেয়?",
            'sec_comp_desc' => "পুরোনো ডেস্কটপ সফটওয়্যার এবং জটিল বিদেশি ইআরপি-এর সাথে ডিজিফাইয়ের তুলনা দেখুন।",
            'comp_th_req' => "প্রধান প্রয়োজনীয়তা",
            'comp_th_digify' => "ডিজিফাই সফট সলিউশনস",
            'comp_th_legacy' => "ঐতিহ্যবাহী / পুরোনো সফটওয়্যার",
            'comp_r1_title' => "এনবিআর মূসক ৬.৩ ও ভ্যাট ২০১২ সামঞ্জস্য",
            'comp_r1_digify' => '<i class="fa-solid fa-circle-check me-2"></i> শতভাগ বাংলাদেশের আইনের সাথে সামঞ্জস্যপূর্ণ',
            'comp_r1_legacy' => '<i class="fa-solid fa-circle-xmark me-2"></i> অতিরিক্ত কাস্টমাইজেশন ও উচ্চ খরচ প্রয়োজন',
            'comp_r2_title' => "বিকাশ ও নগদ কিউআর পেমেন্ট",
            'comp_r2_digify' => '<i class="fa-solid fa-circle-check me-2"></i> সরাসরি ডায়নামিক QR কোড পেমেন্ট সংযুক্ত',
            'comp_r2_legacy' => '<i class="fa-solid fa-circle-exclamation me-2"></i> কাউন্টারে হাতে লিখে ট্রানজেকশন মেলানো',
            'comp_r3_title' => "অফলাইন পিওএস (POS) সুবিধা",
            'comp_r3_digify' => '<i class="fa-solid fa-circle-check me-2"></i> ইন্টারনেট ছাড়া নিরবচ্ছিন্ন বিলিং ও স্বয়ংক্রিয় ক্লাউড সিঙ্ক',
            'comp_r3_legacy' => '<i class="fa-solid fa-circle-xmark me-2"></i> ইন্টারনেট চলে গেলে বিলিং বন্ধ হয়ে যায়',
            'comp_r4_title' => "বাংলা ও ইংরেজি উভয় ভাষায় ইন্টারফেস ও চালান",
            'comp_r4_digify' => '<i class="fa-solid fa-circle-check me-2"></i> চমৎকার বাংলা ও ইংরেজি থার্মাল রসিদ প্রিন্টিং',
            'comp_r4_legacy' => '<i class="fa-solid fa-circle-exclamation me-2"></i> কেবল ইংরেজি অথবা বাংলা ফন্ট ভেঙে যায়',
            'comp_r5_title' => "স্বচ্ছ ও সাশ্রয়ী মূল্য",
            'comp_r5_digify' => '<i class="fa-solid fa-circle-check me-2"></i> সহজ মাসিক বা বাৎসরিক সাবস্ক্রিপশন',
            'comp_r5_legacy' => '<i class="fa-solid fa-circle-xmark me-2"></i> অত্যন্ত ব্যয়বহুল লাইসেন্স ও নবায়ন ফি',
            'sec_reg_tagline' => "স্থানীয় অনবোর্ডিং ও সরাসরি সাপোর্ট",
            'sec_reg_title' => "সারা বাংলাদেশে ক্রমবর্ধমান ব্যবসায়ের বিশ্বস্ত প্রযুক্তি অংশীদার",
            'sec_reg_desc' => "আপনি ঢাকার প্রধান বাণিজ্যিক এলাকায় একটি শোরুম পরিচালনা করুন বা দেশের বিভিন্ন অঞ্চলে একটি বিশাল সাপ্লাই চেইন নেটওয়ার্ক চালান — ডিজিফাই ক্লাউড আপনাকে ২৪/৭ সংযুক্ত রাখে।",
            'cities_heading' => '<i class="fa-solid fa-location-dot text-danger me-2"></i> যেসব প্রধান শহর ও বাণিজ্যিক কেন্দ্রে আমরা সেবা প্রদান করি:',
            'sec_faq_tagline' => "আপনার কোনো প্রশ্ন আছে?",
            'sec_faq_title' => "বাংলাদেশে ডিজিফাই সফটওয়্যার সম্পর্কিত সচরাচর জিজ্ঞাসা",
            'sec_faq_desc' => "বাংলাদেশের ব্যবসায়ী ও উদ্যোক্তাদের সাধারণ প্রশ্নসমূহের উত্তর।",
            'sec_cta_badge' => "🇧🇩 বাংলাদেশে আপনার ব্যবসাকে ডিজিটালাইজ করতে প্রস্তুত?",
            'sec_cta_title' => "বাংলাদেশের শীর্ষ প্রতিষ্ঠানগুলোর সাথে আজই যুক্ত হোন",
            'sec_cta_desc' => "আপনার নিজস্ব শিল্প, এনবিআর ট্যাক্স নিয়ম এবং স্থানীয় মুদ্রার উপযোগী ১৫ মিনিটের ফ্রি লাইভ ডেমো উপভোগ করুন।",
            'btn_cta_book' => 'ফ্রি ডেমো বুক করুন <i class="fa-solid fa-arrow-right ms-2"></i>',
            'highlights' => [
                [
                    'icon' => 'fa-shirt',
                    'title' => 'আরএমজি (RMG), তৈরি পোশাক ও টেক্সটাইল প্রোডাকশন স্যুট',
                    'desc' => 'কাটিং থেকে প্যাকিং অর্ডার ট্র্যাকিং, কাপড়ের রোল ইনভেন্টরি, সুতার ব্যাচ ও রপ্তানি প্যাকিং তালিকা।'
                ],
                [
                    'icon' => 'fa-file-invoice-dollar',
                    'title' => 'এনবিআর (NBR) মূসক ৬.৩ চালান ও ভ্যাট আইন ২০১২ কমপ্লায়েন্স',
                    'desc' => 'স্বয়ংক্রিয় মূসক ৬.৩ চালান, মূসক ৯.১ ভ্যাট রিটার্ন এবং উৎসে কর কর্তন (VDS) সনদপত্র তৈরি।'
                ],
                [
                    'icon' => 'fa-mobile-screen-button',
                    'title' => 'বিকাশ (bKash) ও নগদ মার্চেন্ট কিউআর পেমেন্ট ইন্টিগ্রেশন',
                    'desc' => 'পিওএস (POS) স্ক্রিনে ডায়নামিক বিকাশ ও নগদ QR কোড। ক্যাশিয়ারের ভুল এড়াতে স্বয়ংক্রিয় লেনদেন স্বীকৃতি।'
                ],
                [
                    'icon' => 'fa-boxes-stacked',
                    'title' => 'পাইকারি ও বহু-শাখা রিটেল ক্লাউড সিঙ্ক',
                    'desc' => 'ঢাকা (গুলশান, ধানমন্ডি, উত্তরা, মিরপুর), চট্টগ্রাম ও সিলেটের শাখায় রিয়েল-টাইম স্টক আপডেট এবং ডিলার ক্রেডিট লিমিট।'
                ]
            ],
            'industries' => [
                ['name' => 'তৈরি পোশাক (RMG) ও নিটওয়্যার কারখানা', 'desc' => 'কাটিং, সেলাই, ওয়াশিং ট্র্যাকিং, লাইনভিত্তিক দক্ষতা ও রপ্তানি প্যাকিং লিস্ট।'],
                ['name' => 'জুতা ও চামড়াজাত পণ্য উৎপাদন শিল্প', 'desc' => 'কাঁচা চামড়া ও সিন্থেটিক শিট ইনভেন্টরি, সোল মোল্ডিং ব্যাচ ট্র্যাকিং ও জুতার বক্স বারকোড।'],
                ['name' => 'টেক্সটাইল ও পাইকারি সুতা ব্যবসা (ইসলামপুর / নারায়ণগঞ্জ)', 'desc' => 'কাপড়ের গজ/মিটার পরিমাপ, শেড লট ট্র্যাকিং এবং বাকির লেজার ম্যানেজমেন্ট।'],
                ['name' => 'সুপারমার্কেট ও ডিপার্টমেন্টাল স্টোর', 'desc' => 'দ্রুত বারকোড স্ক্যানিং, ডিজিটাল ওয়েইং স্কেল সিঙ্ক ও কাস্টমার পয়েন্ট।'],
                ['name' => 'ফার্মেসি ও ওষুধ পাইকারি পরিবেশক', 'desc' => 'ডিজিডিএ (DGDA) ড্রাগ ব্যাচ ট্র্যাকিং, এক্সপায়ারি তারিখ ও ওষুধ বণ্টন।'],
                ['name' => 'রেস্তোরাঁ ও ক্লাউড কিচেন', 'desc' => 'কিচেন অর্ডার টিকিট (KOT), দ্রুত ডেলিভারি সমন্বয়, রেসিপি কস্টিং ও বিকাশ বিলিং।']
            ],
            'faqs' => [
                [
                    'q' => "ডিজিফাই সফটওয়্যার কি এনবিআর (NBR) ভ্যাট আইন ২০১২ ও মূসক ৬.৩ এর সাথে সামঞ্জস্যপূর্ণ?",
                    'a' => "হ্যাঁ, শতভাগ! ডিজিফাই স্বয়ংক্রিয়ভাবে সরকারি ভ্যাট হিসাব করে, অফিসিয়াল মূসক ৬.৩ ট্যাক্স চালান তৈরি করে এবং অডিট ফাইল প্রস্তুত করে।"
                ],
                [
                    'q' => "সফটওয়্যারটি কি তৈরি পোশাক (RMG) ফ্যাক্টরির কাজের জন্য উপযোগী?",
                    'a' => "হ্যাঁ। এতে বিল অব মেটেরিয়ালস (BOM), কাপড়ের অপচয় হিসাব, কাটিং টেবিল ব্যাচ কার্ড, সেলাই লাইন দক্ষতা এবং রপ্তানি প্যাকিং তালিকা অন্তর্ভুক্ত রয়েছে।"
                ],
                [
                    'q' => "সফটওয়্যারটি কি বিকাশ (bKash) ও নগদ পেমেন্ট সমর্থন করে?",
                    'a' => "হ্যাঁ। ডিজিফাই পিওএস স্ক্রিনে ডায়নামিক কিউআর কোড তৈরি করে যার মাধ্যমে গ্রাহক বিকাশ বা নগদ অ্যাপ দিয়ে স্ক্যান করে সেকেন্ডের মধ্যে পরিশোধ করতে পারেন।"
                ]
            ]
        ];
    } elseif ($isSwahili) {
        $natData = [
            'is_rtl' => false,
            'title' => $cData['native_title'],
            'desc' => $cData['native_desc'],
            'badge' => $cData['native_badge'],
            'btn_hero_book' => '<i class="fa-solid fa-calendar-check me-2"></i> Weka Onyesho la Bure (Kiswahili)',
            'btn_hero_explore' => 'Chunguza Vipengele <i class="fa-solid fa-arrow-down ms-1"></i>',
            'form_badge' => '🇰🇪 USHAURI WA BURE WA DAKIKA 15',
            'form_title' => "Pata Digify nchini " . $cName,
            'form_desc' => "Uzingatiaji wa kodi ya KRA eTIMS, usanidi wa M-Pesa na mafunzo ya haraka ya saa 48.",
            'form_lbl_name' => "Jina Lako Kamili",
            'form_lbl_comp' => "Jina la Biashara / Kampuni",
            'form_lbl_phone' => "Nambari ya Simu / WhatsApp",
            'form_lbl_ind' => "Aina ya Biashara Yako",
            'form_btn_submit' => 'Panga Onyesho la Moja kwa Moja <i class="fa-solid fa-arrow-right ms-2"></i>',
            'sec_hl_tagline' => "Imeundwa Mahsusi kwa Soko la " . $cName,
            'sec_hl_title' => "Imejengwa Kulingana na Hali Halisi ya Biashara za " . $cName,
            'sec_hl_desc' => "Sahau mifumo isiyoweza kushughulikia malipo ya M-Pesa au ankara za KRA eTIMS. Digify imeundwa kwa kasi ya juu ya kibiashara.",
            'sec_ms_tagline' => "Dashibodi ya Usimamizi wa Pamoja",
            'sec_ms_title' => "Simamia Maduka na Matawi Mengi nchini " . $cName . " Bila Ugumu",
            'sec_ms_desc' => "Pata udhibiti kamili wa 360 juu ya hesabu ya bidhaa, mauzo, gharama za ununuzi na ripoti za faida kwa wakati halisi.",
            'ms_p1_title' => "Usimamizi wa Hesabu ya Maduka Mengi",
            'ms_p1_desc' => "Usawazishaji wa papo hapo wa hisa katika matawi na ghala zote nchini " . $cName . ".",
            'ms_p2_title' => "Ripoti za Fedha na Kodi Kiotomatiki",
            'ms_p2_desc' => "Upatanisho wa kila siku wa mauzo, gharama na faili za kodi zilizo tayari kwa ukaguzi.",
            'ms_p3_title' => "Ankara na Risiti za WhatsApp Kiotomatiki",
            'ms_p3_desc' => "Tuma risiti za PDF na vikumbusho vya malipo moja kwa moja kwenye WhatsApp ya mteja.",
            'btn_ms_walkthrough' => "Omba Onyesho la Mfumo Moja kwa Moja",
            'sec_ind_tagline' => "Sekta za Biashara",
            'sec_ind_title' => "Sekta Zinazostawi na Digify nchini " . $cName,
            'sec_ind_desc' => "Mifumo iliyoundwa kwa ajili ya mauzo ya haraka kaunta na udhibiti sahihi wa hisa.",
            'sec_comp_tagline' => "Ulinganisho wa Soko",
            'sec_comp_title' => "Kwa Nini Biashara nchini " . $cName . " Zinachagua Digify",
            'sec_comp_desc' => "Tazama tofauti kati ya Digify na programu za zamani za kompyuta.",
            'comp_th_req' => "Mahitaji Muhimu ya Uendeshaji",
            'comp_th_digify' => "Digify Soft Solutions",
            'comp_th_legacy' => "Mifumo ya Zamani ya Kompyuta",
            'comp_r1_title' => "Uzingatiaji wa KRA eTIMS na Kodi",
            'comp_r1_digify' => '<i class="fa-solid fa-circle-check me-2"></i> 100% Imetayarishwa kwa ' . $cName,
            'comp_r1_legacy' => '<i class="fa-solid fa-circle-xmark me-2"></i> Inahitaji gharama kubwa za marekebisho',
            'comp_r2_title' => "Ujumuishaji wa Malipo ya M-Pesa",
            'comp_r2_digify' => '<i class="fa-solid fa-circle-check me-2"></i> M-Pesa Till & Paybill QR ya Moja kwa Moja',
            'comp_r2_legacy' => '<i class="fa-solid fa-circle-exclamation me-2"></i> Kuandika nambari ya msimbo kwa mikono',
            'comp_r3_title' => "Kufanya Kazi Bila Mtandao (Offline)",
            'comp_r3_digify' => '<i class="fa-solid fa-circle-check me-2"></i> Kaunta inaendelea kuuza bila mtandao na kusawazisha baadae',
            'comp_r3_legacy' => '<i class="fa-solid fa-circle-xmark me-2"></i> Mauzo yanasimama mtandao ukikatika',
            'comp_r4_title' => "Usaidizi wa Lugha ya Kiswahili na Kiingereza",
            'comp_r4_digify' => '<i class="fa-solid fa-circle-check me-2"></i> Risiti safi za lugha mbili',
            'comp_r4_legacy' => '<i class="fa-solid fa-circle-exclamation me-2"></i> Kiingereza pekee',
            'comp_r5_title' => "Uwazi wa Bei na Gharama Nafuu",
            'comp_r5_digify' => '<i class="fa-solid fa-circle-check me-2"></i> Mpango nafuu wa mwezi au mwaka',
            'comp_r5_legacy' => '<i class="fa-solid fa-circle-xmark me-2"></i> Leseni ghali sana na ada za kusasisha',
            'sec_reg_tagline' => "Usaidizi na Mafunzo ya Ndani",
            'sec_reg_title' => "Kuhudumia Biashara Zinazokua kote nchini " . $cName,
            'sec_reg_desc' => "Iwe unaendesha duka moja Nairobi au mtandao wa ghala kote nchini, Digify inakuweka sawa masaa 24/7.",
            'cities_heading' => '<i class="fa-solid fa-location-dot text-danger me-2"></i> Miji Mikuu na Vituo vya Biashara Tunavyohudumia nchini ' . $cName . ':',
            'sec_faq_tagline' => "Je, Una Maswali?",
            'sec_faq_title' => "Maswali Yanayoulizwa Mara kwa Mara nchini " . $cName,
            'sec_faq_desc' => "Majibu kwa maswali ya kawaida kutoka kwa wamiliki wa biashara na wakurugenzi.",
            'sec_cta_badge' => $flag . " Uko Tayari Kuboresha Biashara Yako nchini " . $cName . "?",
            'sec_cta_title' => "Jiunge na Makampuni Makubwa nchini " . $cName,
            'sec_cta_desc' => "Pata onyesho la moja kwa moja la dakika 15 lililoundwa kulingana na tasnia yako na kodi za ndani.",
            'btn_cta_book' => 'Weka Onyesho la Bure <i class="fa-solid fa-arrow-right ms-2"></i>',
            'highlights' => [
                [
                    'icon' => 'fa-file-invoice-dollar',
                    'title' => 'Uzingatiaji wa Ankara za KRA eTIMS za Moja kwa Moja',
                    'desc' => 'Uunganishaji wa moja kwa moja wa API na Mamlaka ya Mapato ya Kenya (KRA) eTIMS ili kutoa misimbo rasmi ya QR ya KRA.'
                ],
                [
                    'icon' => 'fa-mobile-screen-button',
                    'title' => 'Ujumuishaji wa M-Pesa Till & Paybill Dynamic QR',
                    'desc' => 'Kukamilisha mauzo papo hapo kupitia M-Pesa STK push na QR bila uwezekano wa makosa au wizi wa mhudumu.'
                ],
                [
                    'icon' => 'fa-seedling',
                    'title' => 'Usimamizi wa Kilimo, Maduka ya Dawa na Uuzaji wa Maua',
                    'desc' => 'Ufuatiliaji wa nambari za bechi, tarehe za mwisho wa matumizi (FEFO), na orodha za usafirishaji nje za KEPHIS.'
                ],
                [
                    'icon' => 'fa-boxes-stacked',
                    'title' => 'Usawazishaji wa Maduka Mengi na Ghala za Jumla',
                    'desc' => 'Ufuatiliaji wa hisa kwa wakati halisi kote Nairobi, Mombasa, Kisumu, Nakuru na mikoa mingine.'
                ]
            ],
            'industries' => [
                ['name' => 'Maduka Makubwa (Supermarkets) na Bidhaa za Jumla', 'desc' => 'Uchanganuzi wa haraka wa barcode, mizani ya kidijitali na alama za uaminifu za wateja.'],
                ['name' => 'Maduka ya Kilimo (Agro-vet) na Mashamba ya Maua', 'desc' => 'Ufuatiliaji wa bechi za mbolea na mbegu, na stakabadhi za usafirishaji nje za KEPHIS.'],
                ['name' => 'Maduka ya Dawa na Hospitali (PPB Compliant)', 'desc' => 'Uzingatiaji wa Bodi ya Famasia na Sumu (PPB), arifa za kuisha kwa muda wa dawa (FEFO).'],
                ['name' => 'Vifaa vya Ujenzi (Hardware) na Mbao', 'desc' => 'Ubadilishaji wa vipimo, bei ya nondo kwa uzito na ankara za wakandarasi.'],
                ['name' => 'Viwanda na Usindikaji wa Vyakula', 'desc' => 'Usimamizi wa orodha ya malighafi (BOM), gharama za uzalishaji na bidhaa zilizokamilika.'],
                ['name' => 'Migahawa, Nyama Choma na Mikahawa', 'desc' => 'Tikiti za jikoni (KOT), bili ya nyama kwa kilo na malipo ya haraka ya M-Pesa.']
            ],
            'faqs' => [
                [
                    'q' => "Je, Digify inafanya kazi moja kwa moja na mfumo wa KRA eTIMS?",
                    'a' => "Ndiyo, 100%! Digify inaunganishwa na API ya KRA eTIMS na kutoa ankara halali za kodi zenye misimbo ya QR."
                ],
                [
                    'q' => "Malipo ya M-Pesa yanafanyaje kazi kwenye kaunta?",
                    'a' => "Mteja anapofanya malipo, mfumo unatuma ujumbe wa papo hapo (STK Push) kwa simu yake au kuonyesha QR code na risiti inatoka moja kwa moja akilipa."
                ],
                [
                    'q' => "Je, POS inafanya kazi mtandao ukikatika?",
                    'a' => "Ndiyo. Mfumo una uwezo thabiti wa kufanya kazi bila mtandao (offline) na kusawazisha taarifa zote mtandao ukirudi."
                ]
            ]
        ];
    } elseif ($isArabic) {
        $arHighlights = [];
        foreach ($enHighlights as $hl) {
            $t = $hl['title'];
            if (strpos($t, 'ETA') !== false) {
                $nTitle = "ربط مباشر مع منظومة الفاتورة الإلكترونية (ETA)";
                $nDesc = "إصدار وتوليد الفواتير والإيصالات الإلكترونية المعتمدة تلقائياً وإرسالها لمصلحة الضرائب المصرية.";
            } elseif (strpos($t, 'Fawry') !== false) {
                $nTitle = "التكامل مع فوري Fawry وإينستاباي Instapay";
                $nDesc = "تحصيل مالي سريع في نقاط البيع والربط التلقائي مع البنوك والحسابات المحلية.";
            } elseif (strpos($t, 'KNET') !== false) {
                $nTitle = "ربط وتكامل شبكة كي نت KNET وبوابات الدفع";
                $nDesc = "تسوية مالية يومية آلية ودفع إلكتروني مباشر عبر أجهزة KNET والبنوك الكويتية.";
            } elseif (strpos($t, 'ZATCA') !== false || strpos($t, 'FATOORA') !== false) {
                $nTitle = "ربط هيئة الزكاة والضريبة والجمارك (ZATCA) المرحلة الثانية";
                $nDesc = "توليد وتشفير الفواتير الإلكترونية والربط المباشر مع منصة فاتورة ZATCA مع رمز QR.";
            } elseif (strpos($t, 'FTA') !== false || strpos($t, 'VAT') !== false || strpos($t, 'Tax') !== false || strpos($t, 'eTIMS') !== false) {
                $nTitle = "الامتثال الضريبي والفوترة الإلكترونية المعتمدة";
                $nDesc = "حساب تلقائي للضرائب وإصدار فواتير وإيصالات معتمدة متوافقة 100% مع الهيئة الضريبية.";
            } elseif (strpos($t, 'Hotel') !== false || strpos($t, 'Hospitality') !== false) {
                $nTitle = "إدارة الضيافة والفنادق والمطاعم الفاخرة";
                $nDesc = "ربط فواتير النزلاء، نقاط بيع الاستقبال، شاشات المطبخ، وتطبيقات التوصيل السريع.";
            } elseif (strpos($t, 'Gold') !== false || strpos($t, 'Oud') !== false || strpos($t, 'Gem') !== false) {
                $nTitle = "إدارة محلات الذهب والمجوهرات والعطور الفاخرة";
                $nDesc = "تحديث أسعار الذهب الفوري، حساب المصنعية والعيار، وبطاقات ولاء كبار العملاء VIP.";
            } elseif (strpos($t, 'Freezone') !== false || strpos($t, 'Warehouse') !== false || strpos($t, 'Wholesale') !== false) {
                $nTitle = "المستودعات اللوجستية وتجارة المناطق الحرة والاستيراد";
                $nDesc = "مزامنة فورية للمخزون بين المخازن وتتبع الشحنات وحساب تكلفة الاستيراد Landed Cost.";
            } else {
                $nTitle = $hl['title'];
                $nDesc = $hl['desc'];
            }
            $arHighlights[] = ['icon' => $hl['icon'], 'title' => $nTitle, 'desc' => $nDesc];
        }

        $arIndustries = [];
        foreach ($enIndustries as $ind) {
            $iname = $ind['name'];
            if (strpos($iname, 'Hotel') !== false || strpos($iname, 'Hospitality') !== false) {
                $nName = "الفنادق والمنتجعات والضيافة الفاخرة";
                $nDesc = "ربط فواتير الغرف، نقاط بيع الاستقبال، والمطاعم متعددة الفروع داخل الفندق.";
            } elseif (strpos($iname, 'Gold') !== false || strpos($iname, 'Jewelry') !== false) {
                $nName = "تجارة الذهب والمجوهرات والسبائك";
                $nDesc = "تحديث حي لأسعار الذهب، إدارة عيارات الذهب (18/21/22/24)، وحساب المصنعية.";
            } elseif (strpos($iname, 'Perfume') !== false || strpos($iname, 'Oud') !== false) {
                $nName = "العطور والبخور ومستحضرات التجميل";
                $nDesc = "إدارة تراكيب العطور، باقات الهدايا، الباركود، وبرامج ولاء العملاء المميزين.";
            } elseif (strpos($iname, 'Supermarket') !== false || strpos($iname, 'Grocer') !== false) {
                $nName = "السوبرماركت والهايبرماركت والبقالة";
                $nDesc = "قراءة باركود سريعة، موازين إلكترونية، إدارة الصلاحيات، وعروض ترويجية.";
            } elseif (strpos($iname, 'Freezone') !== false || strpos($iname, 'Import') !== false || strpos($iname, 'Trading') !== false) {
                $nName = "المناطق الحرة والاستيراد والتصدير والتوزيع";
                $nDesc = "فواتير متعددة العملات، حساب تكلفة الاستيراد Landed Cost، والبيانات الجمركية.";
            } elseif (strpos($iname, 'Restaurant') !== false || strpos($iname, 'Café') !== false) {
                $nName = "المطاعم والكافيهات والمطابخ السحابية";
                $nDesc = "شاشات المطبخ KDS، إدارة الطاولات، تكاليف الوصفات، وتطبيقات التوصيل (طلبات/دليفرو).";
            } else {
                $nName = $ind['name'];
                $nDesc = $ind['desc'];
            }
            $arIndustries[] = ['name' => $nName, 'desc' => $nDesc];
        }

        $natData = [
            'is_rtl' => true,
            'title' => $cData['native_title'] ?? $cData['hero_title'],
            'desc' => $cData['native_desc'] ?? $cData['hero_desc'],
            'badge' => $cData['native_badge'] ?? (($cData['native_name'] ?? 'العربية') . ' Mode • ' . $cData['badge']),
            'btn_hero_book' => '<i class="fa-solid fa-calendar-check me-2"></i> احجز عرضاً توضيحياً',
            'btn_hero_explore' => 'استكشف المزايا المحلية <i class="fa-solid fa-arrow-down ms-1"></i>',
            'form_badge' => $cData['native_flag'] . ' استشارة مجانية لمدة 15 دقيقة',
            'form_title' => "احصل على نظام ديجيفاي في " . $cName,
            'form_desc' => "امتثال ضريبي محلي، تهيئة العملة، وإعداد خلال 48 ساعة.",
            'form_lbl_name' => "الاسم الكامل",
            'form_lbl_comp' => "اسم الشركة / النشاط التجاري",
            'form_lbl_phone' => "رقم الواتساب / الجوال",
            'form_lbl_ind' => "قطاع العمل",
            'form_btn_submit' => 'احجز العرض المباشر المجاني <i class="fa-solid fa-arrow-left ms-2"></i>',
            'sec_hl_tagline' => "مصمم خصيصاً لـ " . $cName,
            'sec_hl_title' => "مصمم خصيصاً ليتناسب مع متطلبات السوق في " . $cName,
            'sec_hl_desc' => "حلول متكاملة تضمن الامتثال الضريبي الكامل والدفع الإلكتروني وإدارة العمليات التجارية بكفاءة في " . $cName . ".",
            'sec_ms_tagline' => "لوحة تحكم إدارية موحدة",
            'sec_ms_title' => "إدارة عمليات الفروع المتعددة في " . $cName . " بكل سهولة وسلاسة",
            'sec_ms_desc' => "تحكم كامل 360 درجة في عملك — من أوامر شراء الموردين وتكلفة الاستيراد إلى تسوية ورديات الكاشير وتقارير الأرباح والخسائر الفورية.",
            'ms_p1_title' => "إدارة مركزية للمخزون والفروع",
            'ms_p1_desc' => "مزامنة فورية للمخزون بين جميع الفروع والمستودعات في " . $cName . ".",
            'ms_p2_title' => "تقارير مالية وضرائب آلية",
            'ms_p2_desc' => "مطابقة المبيعات اليومية والمصروفات والملفات الضريبية الجاهزة للتدقيق.",
            'ms_p3_title' => "إرسال الفواتير عبر الواتساب تلقائياً",
            'ms_p3_desc' => "إرسال الفواتير الإلكترونية والتذكيرات مباشرة إلى واتساب العملاء.",
            'btn_ms_walkthrough' => "طلب عرض حي للنظام",
            'sec_ind_tagline' => "القطاعات التجارية",
            'sec_ind_title' => "القطاعات التجارية الأكثر نمواً مع ديجيفاي في " . $cName,
            'sec_ind_desc' => "دورة عمل مخصصة للسرعة العالية في الكاشير وإدارة المخزون والدقة المالية.",
            'sec_comp_tagline' => "مقارنة الأنظمة",
            'sec_comp_title' => "لماذا تختار الشركات في " . $cName . " نظام ديجيفاي؟",
            'sec_comp_desc' => "شاهد الفرق بين ديجيفاي والأنظمة القديمة التقليدية.",
            'comp_th_req' => "المتطلبات التشغيلية",
            'comp_th_digify' => "ديجيفاي لتقنية المعلومات",
            'comp_th_legacy' => "الأنظمة القديمة والتقليدية",
            'comp_r1_title' => "الامتثال للأنظمة الضريبية المحلية",
            'comp_r1_digify' => '<i class="fa-solid fa-circle-check me-2"></i> معتمد ومجهز 100% لـ ' . $cName,
            'comp_r1_legacy' => '<i class="fa-solid fa-circle-xmark me-2"></i> يتطلب برمجة مخصصة وتكاليف عالية',
            'comp_r2_title' => "دعم شبكات ودفع البنوك المحلية",
            'comp_r2_digify' => '<i class="fa-solid fa-circle-check me-2"></i> متكامل مع شبكات الدفع الإلكتروني',
            'comp_r2_legacy' => '<i class="fa-solid fa-circle-exclamation me-2"></i> مطابقة يدوية شاقة للكاشير',
            'comp_r3_title' => "استمرارية الكاشير (أوفلاين)",
            'comp_r3_digify' => '<i class="fa-solid fa-circle-check me-2"></i> كاشير كامل يعمل أوفلاين ومزامنة تلقائية',
            'comp_r3_legacy' => '<i class="fa-solid fa-circle-xmark me-2"></i> توقف الكاشير تماماً عند انقطاع الإنترنت',
            'comp_r4_title' => "دعم اللغة العربية والانجليزية",
            'comp_r4_digify' => '<i class="fa-solid fa-circle-check me-2"></i> واجهة وفواتير طباعة حرارية عربية 100%',
            'comp_r4_legacy' => '<i class="fa-solid fa-circle-exclamation me-2"></i> إنجليزية فقط أو خطوط عربية مشوهة',
            'comp_r5_title' => "شفافية الأسعار والتكلفة",
            'comp_r5_digify' => '<i class="fa-solid fa-circle-check me-2"></i> اشتراك شهري أو سنوي اقتصادي',
            'comp_r5_legacy' => '<i class="fa-solid fa-circle-xmark me-2"></i> ترخيص باهظ الثمن ورسوم تحديث عالية',
            'sec_reg_tagline' => "الدعم والإعداد المحلي",
            'sec_reg_title' => "نخدم الشركات والمؤسسات المتنامية في جميع أنحاء " . $cName,
            'sec_reg_desc' => "سواء كنت تدير متجراً واحداً أو سلسلة فروع ومخازن توزيع، يمنحك نظام ديجيفاي السحابي مزامنة كاملة على مدار الساعة.",
            'cities_heading' => '<i class="fa-solid fa-location-dot text-danger me-2"></i> أبرز المدن والمراكز التجارية التي نخدمها في ' . $cName . ':',
            'sec_faq_tagline' => "هل لديك أسئلة؟",
            'sec_faq_title' => "الأسئلة الشائعة حول النظام في " . $cName,
            'sec_faq_desc' => "إجابات على أكثر الأسئلة شيوعاً من أصحاب الشركات والمدراء في " . $cName . ".",
            'sec_cta_badge' => $cData['native_flag'] . " هل أنت جاهز لتطوير نشاطك التجاري في " . $cName . "؟",
            'sec_cta_title' => "انضم إلى كبرى الشركات والمؤسسات في " . $cName,
            'sec_cta_desc' => "احصل على عرض توضيحي مباشر لمدة 15 دقيقة لمشاهدة النظام مصصماً حسب نشاطك وقوانينك المحلية.",
            'btn_cta_book' => 'احجز عرضاً توضيحياً مجانياً <i class="fa-solid fa-arrow-left ms-2"></i>',
            'highlights' => $arHighlights,
            'industries' => $arIndustries,
            'faqs' => $enFaqs
        ];
    } else {
        $natData = $enData;
        $natData['title'] = $cData['native_title'] ?? $cData['hero_title'];
        $natData['desc'] = $cData['native_desc'] ?? $cData['hero_desc'];
        $natData['badge'] = $cData['native_badge'] ?? (($cData['native_name'] ?? 'Native') . ' Mode • ' . $cData['badge']);
        $natData['btn_hero_book'] = '<i class="fa-solid fa-calendar-check me-2"></i> Book ' . $cName . ' Demo (' . $nName . ')';
        $natData['btn_hero_explore'] = 'Explore Features (' . $nName . ') <i class="fa-solid fa-arrow-down ms-1"></i>';
        $natData['form_badge'] = $flag . ' FREE 15-MIN CONSULTATION';
        $natData['form_title'] = "Get Digify in " . $cName . " (" . $nName . ")";
        $natData['form_desc'] = "Local tax compliance, currency setup, and fast 48-hour onboarding.";
        $natData['form_lbl_name'] = "Your Name";
        $natData['form_lbl_comp'] = "Business / Company Name";
        $natData['form_lbl_phone'] = "WhatsApp / Mobile Number";
        $natData['form_lbl_ind'] = "Your Industry";
        $natData['form_btn_submit'] = 'Schedule Free Live Demo (' . $nName . ') <i class="fa-solid fa-arrow-right ms-2"></i>';
        $natData['sec_hl_tagline'] = "Engineered For " . $cName;
        $natData['sec_hl_title'] = "Built to Match " . $cName . "'s Market Realities";
        $natData['sec_ms_title'] = "Manage Multi-Store Operations Across " . $cName;
        $natData['btn_ms_walkthrough'] = "Request Live Walkthrough";
        $natData['sec_ind_title'] = "Industries Thriving on Digify in " . $cName;
        $natData['sec_comp_title'] = "Why Businesses in " . $cName . " Choose Digify";
        $natData['sec_reg_title'] = "Serving Growing Businesses Across " . $cName;
        $natData['cities_heading'] = '<i class="fa-solid fa-location-dot text-danger me-2"></i> Key Cities & Commercial Hubs We Serve in ' . $cName . ':';
        $natData['sec_faq_title'] = $cName . " (" . $nName . ") Business FAQs";
        $natData['sec_cta_badge'] = $flag . " Ready To Transform Your Business in " . $cName . "?";
        $natData['sec_cta_title'] = "Join Growing Enterprises in " . $cName;
        $natData['btn_cta_book'] = 'Book ' . $cName . ' Demo (' . $nName . ') <i class="fa-solid fa-arrow-right ms-2"></i>';
    }

    return [
        'en' => $enData,
        'native' => $natData ?? $enData,
    ];
}

$pageTitle = $countryData['tagline'] . " | Digify Soft Solutions";
$pageDescription = $countryData['hero_desc'];
$page_title = $pageTitle;
$page_description = $pageDescription;

include('header.php');
?>

<!-- Custom Country Page Styling -->
<style>
/* Base Reset & Overflow Fix */
html, body {
    max-width: 100% !important;
    overflow-x: hidden !important;
}

.country-page-wrapper {
    width: 100% !important;
    max-width: 100% !important;
    overflow-x: hidden !important;
}

.country-hero-section {
    background: linear-gradient(135deg, #090e24 0%, #151a3d 50%, #1f144d 100%);
    padding: 70px 0 80px;
    color: #ffffff;
    position: relative;
    overflow: hidden;
    border-bottom: 3px solid #e06930;
}

.country-hero-section::before {
    content: '';
    position: absolute;
    top: -20%;
    right: -10%;
    width: 650px;
    height: 650px;
    background: radial-gradient(circle, rgba(224, 105, 48, 0.22) 0%, rgba(251, 193, 69, 0) 70%);
    border-radius: 50%;
    pointer-events: none;
}

.text-gradient {
    background: linear-gradient(135deg, #e06930 0%, #fbc145 100%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    display: inline-block;
}

.country-hero-badge {
    background: rgba(224, 105, 48, 0.18);
    border: 1px solid rgba(224, 105, 48, 0.5);
    color: #ffb188;
    font-size: 13px;
    font-weight: 700;
    padding: 8px 18px;
    border-radius: 30px;
    display: inline-flex;
    align-items: center;
    gap: 8px;
    margin-bottom: 20px;
    letter-spacing: 0.5px;
    box-shadow: 0 4px 15px rgba(224, 105, 48, 0.2);
    max-width: 100%;
}

.country-hero-title {
    font-size: 40px;
    font-weight: 900;
    line-height: 1.25;
    margin-bottom: 20px;
    letter-spacing: -0.5px;
    word-break: break-word;
}

.country-hero-desc {
    font-size: 16.5px;
    line-height: 1.7;
    color: rgba(255, 255, 255, 0.85);
    max-width: 680px;
    margin-bottom: 30px;
}

/* Horizontal Swipeable Country Switcher */
.country-switcher-scroll {
    display: flex;
    align-items: center;
    gap: 8px;
    overflow-x: auto;
    white-space: nowrap;
    -webkit-overflow-scrolling: touch;
    scrollbar-width: thin;
    scrollbar-color: #e06930 transparent;
    padding: 4px 2px 10px;
    margin-bottom: 25px;
    border-bottom: 1px solid rgba(255,255,255,0.12);
}

.country-switcher-scroll::-webkit-scrollbar {
    height: 3px;
}
.country-switcher-scroll::-webkit-scrollbar-thumb {
    background: #e06930;
    border-radius: 10px;
}

.country-switch-pill {
    display: inline-flex;
    align-items: center;
    gap: 6px;
    background: rgba(255, 255, 255, 0.08);
    border: 1px solid rgba(255, 255, 255, 0.18);
    padding: 6px 14px;
    border-radius: 20px;
    font-size: 12.5px;
    font-weight: 600;
    color: #ffffff;
    text-decoration: none !important;
    transition: all 0.2s ease;
    flex-shrink: 0;
}

.country-switch-pill:hover, .country-switch-pill.active {
    background: #e06930;
    color: #ffffff;
    border-color: #e06930;
    transform: translateY(-2px);
    box-shadow: 0 4px 12px rgba(224, 105, 48, 0.4);
}

/* Stats Card */
.country-stat-box {
    background: rgba(255, 255, 255, 0.06);
    border: 1px solid rgba(255, 255, 255, 0.14);
    backdrop-filter: blur(12px);
    border-radius: 14px;
    padding: 16px 10px;
    text-align: center;
    transition: all 0.3s ease;
    height: 100%;
}

.country-stat-box:hover {
    background: rgba(255, 255, 255, 0.12);
    border-color: rgba(224, 105, 48, 0.7);
    transform: translateY(-3px);
}

.country-stat-box h3 {
    font-size: 24px;
    font-weight: 800;
    margin-bottom: 4px;
    color: #ffb188;
    line-height: 1.15;
    word-break: break-word;
}

.country-stat-box p {
    font-size: 11px;
    color: rgba(255, 255, 255, 0.75);
    margin: 0;
    text-transform: uppercase;
    letter-spacing: 0.5px;
    font-weight: 600;
    line-height: 1.3;
}

.country-form-card {
    background: #ffffff;
    border-radius: 20px;
    padding: 32px 26px;
    box-shadow: 0 25px 60px rgba(0, 0, 0, 0.35);
    color: #0f172a;
    border: 1px solid #e2e8f0;
}

.country-feature-card {
    background: #ffffff;
    border: 1px solid #e2e8f0;
    border-radius: 16px;
    padding: 26px 20px;
    height: 100%;
    transition: all 0.3s ease;
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.03);
}

.country-feature-card:hover {
    transform: translateY(-4px);
    border-color: #e06930;
    box-shadow: 0 15px 35px rgba(224, 105, 48, 0.12);
}

.feature-icon-wrapper {
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

.country-city-pill {
    background: #ffffff;
    color: #1e293b;
    padding: 7px 14px;
    border-radius: 10px;
    font-size: 13px;
    font-weight: 600;
    display: inline-flex;
    align-items: center;
    gap: 6px;
    border: 1px solid #cbd5e1;
    box-shadow: 0 2px 6px rgba(0,0,0,0.03);
    transition: all 0.2s ease;
}

.country-city-pill:hover {
    background: #e06930;
    color: #ffffff;
    border-color: #e06930;
    transform: translateY(-2px);
}

/* Comparison Table Styling */
.comparison-table th {
    background: #0f172a;
    color: #ffffff;
    padding: 14px 12px;
    font-size: 13.5px;
    font-weight: 700;
}
.comparison-table td {
    padding: 12px 14px;
    vertical-align: middle;
    font-size: 13px;
    border-color: #e2e8f0;
}

/* --- MOBILE SPECIFIC FIXES (Down to 280px) --- */
@media (max-width: 768px) {
    .country-hero-section {
        padding: 35px 0 45px !important;
    }
    .country-hero-title {
        font-size: 24px !important;
        line-height: 1.3 !important;
        margin-bottom: 14px !important;
    }
    .country-hero-desc {
        font-size: 14px !important;
        line-height: 1.6 !important;
        margin-bottom: 20px !important;
    }
    .country-hero-badge {
        font-size: 11px !important;
        padding: 6px 12px !important;
        margin-bottom: 14px !important;
        white-space: normal !important;
        line-height: 1.4 !important;
    }
    .country-form-card {
        padding: 20px 14px !important;
        border-radius: 16px !important;
    }
    .country-form-card h4 {
        font-size: 18px !important;
    }
    .hero-btn-group {
        flex-direction: column !important;
        width: 100% !important;
        gap: 10px !important;
    }
    .hero-btn-group .btn {
        width: 100% !important;
        padding: 12px 14px !important;
        font-size: 14px !important;
        text-align: center !important;
    }
    .country-feature-card {
        padding: 20px 15px !important;
    }
}

@media (max-width: 576px) {
    .country-stat-box {
        padding: 8px 4px !important;
        border-radius: 10px !important;
    }
    .country-stat-box h3 {
        font-size: 15px !important;
        margin-bottom: 2px !important;
        line-height: 1.1 !important;
    }
    .country-stat-box p {
        font-size: 8.5px !important;
        letter-spacing: 0 !important;
        line-height: 1.2 !important;
    }
    .country-city-pill {
        font-size: 11.5px !important;
        padding: 5px 10px !important;
    }
}
</style>

<div class="country-page-wrapper">

<!-- Hero Section -->
<section class="country-hero-section">
    <div class="container">
        <div class="row align-items-center g-4 g-lg-5">
            <div class="col-lg-7">
                <!-- Native Language Selector Toggle -->
                <div class="country-lang-bar d-flex flex-wrap align-items-center gap-2 mb-3">
                    <span class="small text-white-50 fw-bold me-1"><i class="fa-solid fa-language text-warning me-1"></i> Language:</span>
                    <button type="button" class="lang-switch-pill active" id="btnLangEn" onclick="switchCountryLang('en')">
                        🇬🇧 English (Default)
                    </button>
                    <button type="button" class="lang-switch-pill" id="btnLangNative" onclick="switchCountryLang('native')">
                        <?php echo ($countryData['native_flag'] ?? $countryData['flag']) . ' ' . ($countryData['native_name'] ?? 'Native Language'); ?>
                    </button>
                </div>

                <div class="country-hero-badge">
                    <span style="font-size: 16px;"><?php echo $countryData['flag']; ?></span>
                    <span><?php echo htmlspecialchars($countryData['badge']); ?></span>
                </div>
                <h1 class="country-hero-title">
                    <?php echo $countryData['hero_title']; ?>
                </h1>
                <p class="country-hero-desc">
                    <?php echo htmlspecialchars($countryData['hero_desc']); ?>
                </p>

                <!-- Stats Bar -->
                <div class="row g-2 mb-4">
                    <div class="col-4">
                        <div class="country-stat-box">
                            <h3><?php echo $countryData['stat_1']['num']; ?></h3>
                            <p><?php echo $countryData['stat_1']['label']; ?></p>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="country-stat-box">
                            <h3><?php echo $countryData['stat_2']['num']; ?></h3>
                            <p><?php echo $countryData['stat_2']['label']; ?></p>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="country-stat-box">
                            <h3><?php echo $countryData['stat_3']['num']; ?></h3>
                            <p><?php echo $countryData['stat_3']['label']; ?></p>
                        </div>
                    </div>
                </div>

                <div class="d-flex flex-wrap align-items-center gap-3 hero-btn-group">
                    <a href="#book-demo" class="btn btn-lg px-4 py-3 text-white fw-bold rounded-pill shadow-lg" id="btnHeroBook" style="background: linear-gradient(135deg, #e06930, #fbc145);">
                        <i class="fa-solid fa-calendar-check me-2"></i> Book <?php echo htmlspecialchars($countryData['name']); ?> Demo
                    </a>
                    <a href="#features" class="btn btn-lg px-4 py-3 btn-outline-light rounded-pill fw-semibold" id="btnHeroExplore">
                        Explore Local Features <i class="fa-solid fa-arrow-down ms-1"></i>
                    </a>
                </div>
            </div>

            <div class="col-lg-5" id="book-demo">
                <!-- Country Demo Booking Card -->
                <div class="country-form-card">
                    <div class="text-center mb-3">
                        <span class="badge mb-2 px-3 py-1" id="formCardBadge" style="background: rgba(224, 105, 48, 0.15); color: #e06930; font-weight: 700; font-size: 11px;">
                            <?php echo $countryData['flag']; ?> FREE 15-MINUTE CONSULTATION
                        </span>
                        <h4 class="fw-bold mb-1" id="formCardTitle">Get Digify in <?php echo htmlspecialchars($countryData['name']); ?></h4>
                        <p class="text-muted small mb-0" id="formCardDesc">Local tax compliance, currency setup, and fast 48-hour onboarding.</p>
                    </div>

                    <form action="contact-us.php" method="POST">
                        <input type="hidden" name="lead_source" value="Country Page: <?php echo htmlspecialchars($countryData['name']); ?>">
                        
                        <div class="mb-2 mb-sm-3">
                            <label class="form-label small fw-bold text-secondary mb-1" id="lblYourName">Your Name</label>
                            <input type="text" class="form-control form-control-lg fs-6" placeholder="e.g. Ahmed Al-Sabah / John Smith" required>
                        </div>

                        <div class="mb-2 mb-sm-3">
                            <label class="form-label small fw-bold text-secondary mb-1" id="lblCompName">Business / Company Name</label>
                            <input type="text" class="form-control form-control-lg fs-6" placeholder="e.g. Al-Noor Trading / Retail Mart" required>
                        </div>

                        <div class="mb-2 mb-sm-3">
                            <label class="form-label small fw-bold text-secondary mb-1" id="lblMobile">WhatsApp / Mobile Number</label>
                            <div class="input-group">
                                <span class="input-group-text bg-light fw-bold text-secondary small px-2"><?php echo $countryData['dial_code']; ?></span>
                                <input type="tel" class="form-control form-control-lg fs-6" placeholder="50 123 4567" required>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label class="form-label small fw-bold text-secondary mb-1" id="lblIndustry">Your Industry</label>
                            <select class="form-select form-control-lg fs-6" required>
                                <option value="">Select your business type</option>
                                <option value="retail">Supermarket / Retail Store</option>
                                <option value="restaurant">Restaurant / Café / Bar</option>
                                <option value="wholesale">Wholesale & FMCG Distribution</option>
                                <option value="manufacturing">Manufacturing / Processing</option>
                                <option value="perfume">Perfumes, Oud & Luxury Goods</option>
                                <option value="hardware">Hardware & Construction</option>
                                <option value="auto">Auto Parts & Garages</option>
                                <option value="other">Other Commercial Business</option>
                            </select>
                        </div>

                        <button type="submit" class="btn btn-lg w-100 py-3 text-white fw-bold rounded-3 shadow" id="btnFormSubmit" style="background: linear-gradient(135deg, #e06930, #fbc145);">
                            Schedule Free Live Demo <i class="fa-solid fa-arrow-right ms-2"></i>
                        </button>
                        
                        <div class="text-center mt-2">
                            <small class="text-muted" style="font-size: 11px;"><i class="fa-solid fa-shield-halved me-1 text-success"></i> 100% Confidential • No credit card required</small>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Trust Banner -->
<section class="py-3 py-md-4 bg-white border-bottom shadow-sm">
    <div class="container">
        <div class="row align-items-center justify-content-center text-center g-3 g-md-4">
            <div class="col-6 col-md-3">
                <div class="d-flex align-items-center justify-content-center gap-2">
                    <i class="fa-solid fa-circle-check text-success fs-5"></i>
                    <div class="text-start">
                        <strong class="d-block text-dark small fw-bold"><?php echo htmlspecialchars($countryData['name']); ?> Ready</strong>
                        <span class="text-muted" style="font-size: 10.5px;">Local Tax & Currency</span>
                    </div>
                </div>
            </div>
            <div class="col-6 col-md-3">
                <div class="d-flex align-items-center justify-content-center gap-2">
                    <i class="fa-solid fa-wifi-slash text-primary fs-5"></i>
                    <div class="text-start">
                        <strong class="d-block text-dark small fw-bold">100% Offline Mode</strong>
                        <span class="text-muted" style="font-size: 10.5px;">Zero Counter Downtime</span>
                    </div>
                </div>
            </div>
            <div class="col-6 col-md-3">
                <div class="d-flex align-items-center justify-content-center gap-2">
                    <i class="fa-solid fa-language text-warning fs-5"></i>
                    <div class="text-start">
                        <strong class="d-block text-dark small fw-bold">Multi-Language</strong>
                        <span class="text-muted" style="font-size: 10.5px;">Arabic, English & More</span>
                    </div>
                </div>
            </div>
            <div class="col-6 col-md-3">
                <div class="d-flex align-items-center justify-content-center gap-2">
                    <i class="fa-solid fa-clock-rotate-left text-danger fs-5"></i>
                    <div class="text-start">
                        <strong class="d-block text-dark small fw-bold">48-Hour Onboarding</strong>
                        <span class="text-muted" style="font-size: 10.5px;">Fast Data Migration</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Country Key Local Highlights -->
<section class="py-5" style="background: #f8fafc;" id="features">
    <div class="container py-4">
        <div class="text-center max-w-700 mx-auto mb-5">
            <span class="badge px-3 py-2 text-uppercase fw-bold mb-2" id="secHighlightsTagline" style="background: rgba(224,105,48,0.12); color: #e06930; font-size: 11.5px; letter-spacing: 0.8px;">
                Engineered For <?php echo htmlspecialchars($countryData['name']); ?>
            </span>
            <h2 class="fw-bold fs-1" id="secHighlightsTitle">Built to Match <?php echo htmlspecialchars($countryData['name']); ?>'s Market Realities</h2>
            <p class="text-muted lead fs-6" id="secHighlightsDesc">Forget generic software that fails to handle your local payments, currencies, or government tax audits. Digify is tailored for high-volume commercial operations in <?php echo htmlspecialchars($countryData['name']); ?>.</p>
        </div>

        <div class="row g-4">
            <?php foreach($countryData['key_highlights'] as $hl): ?>
            <div class="col-lg-6">
                <div class="country-feature-card">
                    <div class="d-flex align-items-start gap-4">
                        <div class="feature-icon-wrapper flex-shrink-0">
                            <i class="fa-solid <?php echo $hl['icon']; ?>"></i>
                        </div>
                        <div>
                            <h4 class="fw-bold mb-2 fs-5 hl-card-title"><?php echo htmlspecialchars($hl['title']); ?></h4>
                            <p class="text-muted mb-0 hl-card-desc" style="line-height: 1.65; font-size: 14px;"><?php echo htmlspecialchars($hl['desc']); ?></p>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Visual Showcase Section -->
<section class="py-5 bg-white">
    <div class="container py-4">
        <div class="row align-items-center g-5">
            <div class="col-lg-6">
                <span class="badge px-3 py-2 text-uppercase fw-bold mb-3" id="secMultiStoreTagline" style="background: rgba(15, 23, 42, 0.08); color: #0f172a; font-size: 11.5px;">
                    Unified Management Dashboard
                </span>
                <h2 class="fw-bold mb-3 display-6" id="secMultiStoreTitle">Manage Multi-Store Operations Across <?php echo htmlspecialchars($countryData['name']); ?> with Zero Friction</h2>
                <p class="text-muted lead fs-6 mb-4" id="secMultiStoreDesc">Gain 360-degree control over your entire business — from supplier purchase orders and landed cost allocation to cashier shift balancing and real-time P&L reporting.</p>

                <div class="d-flex flex-column gap-3">
                    <div class="d-flex align-items-start gap-3">
                        <div class="p-2 rounded bg-primary-subtle text-primary mt-1"><i class="fa-solid fa-check"></i></div>
                        <div>
                            <strong class="d-block text-dark" id="msP1Title">Centralized Multi-Outlet Inventory</strong>
                            <span class="text-muted small" id="msP1Desc">Real-time stock synchronization across all branches and warehouses in <?php echo htmlspecialchars($countryData['name']); ?>.</span>
                        </div>
                    </div>
                    <div class="d-flex align-items-start gap-3">
                        <div class="p-2 rounded bg-primary-subtle text-primary mt-1"><i class="fa-solid fa-check"></i></div>
                        <div>
                            <strong class="d-block text-dark" id="msP2Title">Automated Financial Statements & Tax Prep</strong>
                            <span class="text-muted small" id="msP2Desc">Daily sales reconciliation, expense logs, balance sheets, and audit-ready tax exports.</span>
                        </div>
                    </div>
                    <div class="d-flex align-items-start gap-3">
                        <div class="p-2 rounded bg-primary-subtle text-primary mt-1"><i class="fa-solid fa-check"></i></div>
                        <div>
                            <strong class="d-block text-dark" id="msP3Title">WhatsApp Automated Bot & PDF Invoicing</strong>
                            <span class="text-muted small" id="msP3Desc">Automatically send invoices, receipt PDFs, and payment reminders directly to customer WhatsApp.</span>
                        </div>
                    </div>
                </div>

                <div class="mt-4 pt-2">
                    <a href="#book-demo" class="btn btn-primary px-4 py-2 fw-bold rounded-pill" id="btnMsWalkthrough">Request Live System Walkthrough</a>
                </div>
            </div>

            <div class="col-lg-6 text-center">
                <div class="p-3 bg-light rounded-4 border shadow-sm">
                    <img src="<?php echo $countryData['hero_img']; ?>" alt="Digify ERP Software in <?php echo htmlspecialchars($countryData['name']); ?>" class="img-fluid rounded-3 shadow">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Industry Verticals in this Country -->
<section class="py-5" style="background: #f1f5f9;">
    <div class="container py-4">
        <div class="text-center max-w-700 mx-auto mb-5">
            <span class="badge px-3 py-2 text-uppercase fw-bold mb-2" id="secIndustryTagline" style="background: rgba(15, 23, 42, 0.08); color: #0f172a; font-size: 11.5px; letter-spacing: 0.8px;">
                Industry Coverage
            </span>
            <h2 class="fw-bold fs-1" id="secIndustryTitle">Industries Thriving on Digify in <?php echo htmlspecialchars($countryData['name']); ?></h2>
            <p class="text-muted" id="secIndustryDesc">Purpose-built workflows tailored for high volume, fast checkout, and tight inventory margins.</p>
        </div>

        <div class="row g-4">
            <?php foreach($countryData['industries'] as $ind): ?>
            <div class="col-lg-4 col-md-6">
                <div class="p-4 rounded-4 border h-100 bg-white shadow-sm" style="transition: transform 0.2s ease;">
                    <div class="d-flex align-items-center gap-2 mb-3">
                        <span class="badge bg-primary text-white rounded-pill p-2"><i class="fa-solid fa-check"></i></span>
                        <h5 class="fw-bold mb-0 fs-6 text-dark ind-card-title"><?php echo htmlspecialchars($ind['name']); ?></h5>
                    </div>
                    <p class="text-muted small mb-0 ind-card-desc" style="line-height: 1.65;"><?php echo htmlspecialchars($ind['desc']); ?></p>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Comparison Table: Digify vs Legacy Systems in this country -->
<section class="py-5 bg-white">
    <div class="container py-4">
        <div class="text-center max-w-700 mx-auto mb-5">
            <span class="badge px-3 py-2 text-uppercase fw-bold mb-2" id="secCompTagline" style="background: rgba(224,105,48,0.12); color: #e06930; font-size: 11.5px;">
                Competitive Comparison
            </span>
            <h2 class="fw-bold fs-1" id="secCompTitle">Why Businesses in <?php echo htmlspecialchars($countryData['name']); ?> Choose Digify</h2>
            <p class="text-muted lead fs-6" id="secCompDesc">See how Digify compares to older legacy desktop systems and generic foreign ERPs.</p>
        </div>

        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="d-block d-md-none text-center mb-2">
                    <span class="badge bg-light text-dark border px-3 py-1" style="font-size: 11px;"><i class="fa-solid fa-arrows-left-right me-1 text-primary"></i> Swipe table horizontally</span>
                </div>
                <div class="table-responsive rounded-4 border shadow-sm">
                    <table class="table table-striped mb-0 comparison-table" style="min-width: 520px;">
                        <thead>
                            <tr>
                                <th style="width: 35%;" id="compThReq">Key Operational Requirement</th>
                                <th style="width: 35%; background: #e06930;" id="compThDigify">Digify Soft Solutions</th>
                                <th style="width: 30%;" id="compThLegacy">Traditional / Foreign Legacy Systems</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><strong id="comp_r1_title">Local Tax & Regulatory Compliance</strong></td>
                                <td class="text-success fw-bold" id="comp_r1_digify"><i class="fa-solid fa-circle-check me-2"></i> 100% Pre-calibrated for <?php echo htmlspecialchars($countryData['name']); ?></td>
                                <td class="text-danger" id="comp_r1_legacy"><i class="fa-solid fa-circle-xmark me-2"></i> Requires expensive custom coding</td>
                            </tr>
                            <tr>
                                <td><strong id="comp_r2_title">Local Payment Gateway Support</strong></td>
                                <td class="text-success fw-bold" id="comp_r2_digify"><i class="fa-solid fa-circle-check me-2"></i> Integrated for <?php echo htmlspecialchars($countryData['currency']); ?></td>
                                <td class="text-muted" id="comp_r2_legacy"><i class="fa-solid fa-circle-exclamation me-2"></i> Manual counter reconciliation</td>
                            </tr>
                            <tr>
                                <td><strong id="comp_r3_title">Offline POS Resilience</strong></td>
                                <td class="text-success fw-bold" id="comp_r3_digify"><i class="fa-solid fa-circle-check me-2"></i> Full offline mode with automated cloud sync</td>
                                <td class="text-danger" id="comp_r3_legacy"><i class="fa-solid fa-circle-xmark me-2"></i> Counter halts when internet drops</td>
                            </tr>
                            <tr>
                                <td><strong id="comp_r4_title">Multi-Language & Native UI</strong></td>
                                <td class="text-success fw-bold" id="comp_r4_digify"><i class="fa-solid fa-circle-check me-2"></i> Native English & Local Language thermal receipts</td>
                                <td class="text-muted" id="comp_r4_legacy"><i class="fa-solid fa-circle-exclamation me-2"></i> English only or broken native fonts</td>
                            </tr>
                            <tr>
                                <td><strong id="comp_r5_title">Pricing Transparency & Total Cost</strong></td>
                                <td class="text-success fw-bold" id="comp_r5_digify"><i class="fa-solid fa-circle-check me-2"></i> Affordable flat monthly/annual plans</td>
                                <td class="text-danger" id="comp_r5_legacy"><i class="fa-solid fa-circle-xmark me-2"></i> High per-user licensing & upgrade fees</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Regions & Cities in this Country -->
<section class="py-5" style="background: #f8fafc;">
    <div class="container py-4">
        <div class="row align-items-center g-5">
            <div class="col-lg-5">
                <span class="badge px-3 py-2 text-uppercase fw-bold mb-2" id="secRegionsTagline" style="background: rgba(224, 105, 48, 0.15); color: #e06930; font-size: 11px;">
                    Local Onboarding & Support
                </span>
                <h2 class="fw-bold mb-3" id="secRegionsTitle">Serving Growing Businesses Across <?php echo htmlspecialchars($countryData['name']); ?></h2>
                <p class="text-muted lead fs-6" id="secRegionsDesc">Whether you are operating a single storefront in a major commercial district or orchestrating a distributed supply chain across regional trading hubs, Digify cloud keeps you fully synchronized 24/7.</p>
                <div class="row g-2 mt-3">
                    <div class="col-4">
                        <div class="p-2 p-sm-3 rounded-3 bg-white shadow-sm border text-center h-100">
                            <h6 class="fw-bold mb-0 text-primary" style="font-size: 13px;">Cloud</h6>
                            <small class="text-muted" style="font-size: 10px; display: block;">Any Device</small>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="p-2 p-sm-3 rounded-3 bg-white shadow-sm border text-center h-100">
                            <h6 class="fw-bold mb-0 text-success" style="font-size: 13px;">Offline</h6>
                            <small class="text-muted" style="font-size: 10px; display: block;">Zero Downtime</small>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="p-2 p-sm-3 rounded-3 bg-white shadow-sm border text-center h-100">
                            <h6 class="fw-bold mb-0 text-warning" style="font-size: 11px; line-height: 1.2; word-break: break-word;"><?php echo htmlspecialchars($countryData['code']); ?></h6>
                            <small class="text-muted" style="font-size: 10px; display: block;">Currency</small>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-7">
                <div class="p-4 p-md-5 rounded-4 bg-white shadow-sm border">
                    <h5 class="fw-bold mb-3 text-dark" id="citiesBoxHeading"><i class="fa-solid fa-location-dot text-danger me-2"></i> Key Cities & Commercial Hubs We Serve in <?php echo htmlspecialchars($countryData['name']); ?>:</h5>
                    <div class="d-flex flex-wrap gap-2 mt-3">
                        <?php foreach($countryData['regions'] as $reg): ?>
                            <span class="country-city-pill"><i class="fa-solid fa-city me-1 text-muted"></i> <?php echo htmlspecialchars($reg); ?></span>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Frequently Asked Questions -->
<section class="py-5 bg-white">
    <div class="container py-4">
        <div class="text-center max-w-700 mx-auto mb-5">
            <span class="badge px-3 py-2 text-uppercase fw-bold mb-2" id="secFaqTagline" style="background: rgba(15,23,42,0.08); color: #0f172a; font-size: 11.5px;">
                Got Questions?
            </span>
            <h2 class="fw-bold fs-1" id="secFaqTitle"><?php echo htmlspecialchars($countryData['name']); ?> Business FAQs</h2>
            <p class="text-muted" id="secFaqDesc">Frequently asked questions by enterprise owners and managers in <?php echo htmlspecialchars($countryData['name']); ?>.</p>
        </div>

        <div class="row justify-content-center">
            <div class="col-lg-9">
                <div class="accordion" id="countryFaqAccordion">
                    <?php foreach($countryData['faqs'] as $idx => $faq): ?>
                    <div class="accordion-item mb-3 border rounded-3 overflow-hidden shadow-sm">
                        <h2 class="accordion-header" id="heading<?php echo $idx; ?>">
                            <button class="accordion-button fw-bold faq-q <?php echo ($idx !== 0) ? 'collapsed' : ''; ?>" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?php echo $idx; ?>" style="font-size: 15px;">
                                <i class="fa-regular fa-circle-question me-2 text-primary"></i> <?php echo htmlspecialchars($faq['q']); ?>
                            </button>
                        </h2>
                        <div id="collapse<?php echo $idx; ?>" class="accordion-collapse collapse <?php echo ($idx === 0) ? 'show' : ''; ?>" data-bs-parent="#countryFaqAccordion">
                            <div class="accordion-body text-muted faq-a" style="line-height: 1.8; font-size: 14.5px; background: #fafafa;">
                                <?php echo htmlspecialchars($faq['a']); ?>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Final Call to Action -->
<section class="py-5 text-white text-center" style="background: linear-gradient(135deg, #090e24 0%, #151a3d 50%, #1f144d 100%);">
    <div class="container py-4">
        <span class="badge px-3 py-2 text-uppercase fw-bold mb-3" id="secCtaBadge" style="background: rgba(224, 105, 48, 0.25); color: #ffb188; font-size: 12px; border: 1px solid rgba(224,105,48,0.4);">
            <?php echo $countryData['flag']; ?> Ready To Transform Your Business in <?php echo htmlspecialchars($countryData['name']); ?>?
        </span>
        <h2 class="display-5 fw-bold mb-3" id="secCtaTitle">Join Growing Enterprises in <?php echo htmlspecialchars($countryData['name']); ?></h2>
        <p class="lead text-white-50 max-w-700 mx-auto mb-4 fs-6" id="secCtaDesc">Get a personalized 15-minute walkthrough of Digify tailored to your industry, tax rules, and local currency.</p>
        <div class="d-flex justify-content-center gap-3">
            <a href="#book-demo" class="btn btn-lg px-5 py-3 text-white fw-bold rounded-pill shadow-lg" id="btnCtaBook" style="background: linear-gradient(135deg, #e06930, #fbc145);">
                Book <?php echo htmlspecialchars($countryData['name']); ?> Demo <i class="fa-solid fa-arrow-right ms-2"></i>
            </a>
            <a href="https://wa.me/917425016636" target="_blank" class="btn btn-lg px-4 py-3 btn-outline-light rounded-pill fw-semibold">
                <i class="fa-brands fa-whatsapp me-2 text-success"></i> Chat on WhatsApp
            </a>
        </div>
    </div>
</section>

</div><!-- /.country-page-wrapper -->

<style>
.lang-switch-pill {
    background: rgba(255, 255, 255, 0.08);
    border: 1px solid rgba(255, 255, 255, 0.22);
    color: #ffffff;
    padding: 5px 14px;
    border-radius: 20px;
    font-size: 12.5px;
    font-weight: 700;
    transition: all 0.25s ease;
    cursor: pointer;
}
.lang-switch-pill:hover, .lang-switch-pill.active {
    background: linear-gradient(135deg, #e06930 0%, #f58220 100%);
    border-color: #e06930;
    color: #ffffff;
    box-shadow: 0 4px 14px rgba(224, 105, 48, 0.4);
}
.rtl-mode {
    direction: rtl;
    text-align: right;
}
.rtl-mode .text-start {
    text-align: right !important;
}
.rtl-mode .me-1, .rtl-mode .me-2, .rtl-mode .me-3 {
    margin-left: 0.5rem !important;
    margin-right: 0 !important;
}
.rtl-mode .ms-1, .rtl-mode .ms-2, .rtl-mode .ms-3 {
    margin-right: 0.5rem !important;
    margin-left: 0 !important;
}
</style>

<script>
var countryLangData = <?php echo json_encode(buildCountryLangData($countryData), JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES); ?>;

function switchCountryLang(mode) {
    var data = countryLangData[mode];
    if (!data) return;

    var btnEn = document.getElementById('btnLangEn');
    var btnNat = document.getElementById('btnLangNative');
    var wrapper = document.querySelector('.country-page-wrapper');
    
    // Toggle active state & RTL
    if (mode === 'native') {
        if (btnEn) btnEn.classList.remove('active');
        if (btnNat) btnNat.classList.add('active');
        if (wrapper && data.is_rtl) {
            wrapper.setAttribute('dir', 'rtl');
            wrapper.classList.add('rtl-mode');
        }
    } else {
        if (btnNat) btnNat.classList.remove('active');
        if (btnEn) btnEn.classList.add('active');
        if (wrapper) {
            wrapper.removeAttribute('dir');
            wrapper.classList.remove('rtl-mode');
        }
    }

    // Hero Updates
    var heroTitle = document.querySelector('.country-hero-title');
    var heroDesc = document.querySelector('.country-hero-desc');
    var heroBadgeSpan = document.querySelector('.country-hero-badge span:last-child');
    var btnHeroBook = document.getElementById('btnHeroBook');
    var btnHeroExplore = document.getElementById('btnHeroExplore');
    if (heroTitle && data.title) heroTitle.innerHTML = data.title;
    if (heroDesc && data.desc) heroDesc.innerHTML = data.desc;
    if (heroBadgeSpan && data.badge) heroBadgeSpan.innerHTML = data.badge;
    if (btnHeroBook && data.btn_hero_book) btnHeroBook.innerHTML = data.btn_hero_book;
    if (btnHeroExplore && data.btn_hero_explore) btnHeroExplore.innerHTML = data.btn_hero_explore;

    // Form Updates
    var elFormBadge = document.getElementById('formCardBadge');
    var elFormTitle = document.getElementById('formCardTitle');
    var elFormDesc = document.getElementById('formCardDesc');
    var elLblName = document.getElementById('lblYourName');
    var elLblComp = document.getElementById('lblCompName');
    var elLblPhone = document.getElementById('lblMobile');
    var elLblInd = document.getElementById('lblIndustry');
    var elBtnSubmit = document.getElementById('btnFormSubmit');
    if (elFormBadge && data.form_badge) elFormBadge.innerHTML = data.form_badge;
    if (elFormTitle && data.form_title) elFormTitle.innerHTML = data.form_title;
    if (elFormDesc && data.form_desc) elFormDesc.innerHTML = data.form_desc;
    if (elLblName && data.form_lbl_name) elLblName.innerHTML = data.form_lbl_name;
    if (elLblComp && data.form_lbl_comp) elLblComp.innerHTML = data.form_lbl_comp;
    if (elLblPhone && data.form_lbl_phone) elLblPhone.innerHTML = data.form_lbl_phone;
    if (elLblInd && data.form_lbl_ind) elLblInd.innerHTML = data.form_lbl_ind;
    if (elBtnSubmit && data.form_btn_submit) elBtnSubmit.innerHTML = data.form_btn_submit;

    // Section 1: Highlights
    var elSecHlTagline = document.getElementById('secHighlightsTagline');
    var elSecHlTitle = document.getElementById('secHighlightsTitle');
    var elSecHlDesc = document.getElementById('secHighlightsDesc');
    if (elSecHlTagline && data.sec_hl_tagline) elSecHlTagline.innerHTML = data.sec_hl_tagline;
    if (elSecHlTitle && data.sec_hl_title) elSecHlTitle.innerHTML = data.sec_hl_title;
    if (elSecHlDesc && data.sec_hl_desc) elSecHlDesc.innerHTML = data.sec_hl_desc;
    if (data.highlights) {
        var hlTitles = document.querySelectorAll('.hl-card-title');
        var hlDescs = document.querySelectorAll('.hl-card-desc');
        data.highlights.forEach(function(item, idx) {
            if (hlTitles[idx] && item.title) hlTitles[idx].innerHTML = item.title;
            if (hlDescs[idx] && item.desc) hlDescs[idx].innerHTML = item.desc;
        });
    }

    // Section 2: Multi-Store Dashboard
    var elSecMsTagline = document.getElementById('secMultiStoreTagline');
    var elSecMsTitle = document.getElementById('secMultiStoreTitle');
    var elSecMsDesc = document.getElementById('secMultiStoreDesc');
    var elMsP1Title = document.getElementById('msP1Title');
    var elMsP1Desc = document.getElementById('msP1Desc');
    var elMsP2Title = document.getElementById('msP2Title');
    var elMsP2Desc = document.getElementById('msP2Desc');
    var elMsP3Title = document.getElementById('msP3Title');
    var elMsP3Desc = document.getElementById('msP3Desc');
    var elBtnMsWalkthrough = document.getElementById('btnMsWalkthrough');
    if (elSecMsTagline && data.sec_ms_tagline) elSecMsTagline.innerHTML = data.sec_ms_tagline;
    if (elSecMsTitle && data.sec_ms_title) elSecMsTitle.innerHTML = data.sec_ms_title;
    if (elSecMsDesc && data.sec_ms_desc) elSecMsDesc.innerHTML = data.sec_ms_desc;
    if (elMsP1Title && data.ms_p1_title) elMsP1Title.innerHTML = data.ms_p1_title;
    if (elMsP1Desc && data.ms_p1_desc) elMsP1Desc.innerHTML = data.ms_p1_desc;
    if (elMsP2Title && data.ms_p2_title) elMsP2Title.innerHTML = data.ms_p2_title;
    if (elMsP2Desc && data.ms_p2_desc) elMsP2Desc.innerHTML = data.ms_p2_desc;
    if (elMsP3Title && data.ms_p3_title) elMsP3Title.innerHTML = data.ms_p3_title;
    if (elMsP3Desc && data.ms_p3_desc) elMsP3Desc.innerHTML = data.ms_p3_desc;
    if (elBtnMsWalkthrough && data.btn_ms_walkthrough) elBtnMsWalkthrough.innerHTML = data.btn_ms_walkthrough;

    // Section 3: Industries
    var elSecIndTagline = document.getElementById('secIndustryTagline');
    var elSecIndTitle = document.getElementById('secIndustryTitle');
    var elSecIndDesc = document.getElementById('secIndustryDesc');
    if (elSecIndTagline && data.sec_ind_tagline) elSecIndTagline.innerHTML = data.sec_ind_tagline;
    if (elSecIndTitle && data.sec_ind_title) elSecIndTitle.innerHTML = data.sec_ind_title;
    if (elSecIndDesc && data.sec_ind_desc) elSecIndDesc.innerHTML = data.sec_ind_desc;
    if (data.industries) {
        var indTitles = document.querySelectorAll('.ind-card-title');
        var indDescs = document.querySelectorAll('.ind-card-desc');
        data.industries.forEach(function(item, idx) {
            if (indTitles[idx] && item.name) indTitles[idx].innerHTML = item.name;
            if (indDescs[idx] && item.desc) indDescs[idx].innerHTML = item.desc;
        });
    }

    // Section 4: Comparison Table
    var elSecCompTagline = document.getElementById('secCompTagline');
    var elSecCompTitle = document.getElementById('secCompTitle');
    var elSecCompDesc = document.getElementById('secCompDesc');
    var elCompThReq = document.getElementById('compThReq');
    var elCompThDigify = document.getElementById('compThDigify');
    var elCompThLegacy = document.getElementById('compThLegacy');
    if (elSecCompTagline && data.sec_comp_tagline) elSecCompTagline.innerHTML = data.sec_comp_tagline;
    if (elSecCompTitle && data.sec_comp_title) elSecCompTitle.innerHTML = data.sec_comp_title;
    if (elSecCompDesc && data.sec_comp_desc) elSecCompDesc.innerHTML = data.sec_comp_desc;
    if (elCompThReq && data.comp_th_req) elCompThReq.innerHTML = data.comp_th_req;
    if (elCompThDigify && data.comp_th_digify) elCompThDigify.innerHTML = data.comp_th_digify;
    if (elCompThLegacy && data.comp_th_legacy) elCompThLegacy.innerHTML = data.comp_th_legacy;

    ['r1', 'r2', 'r3', 'r4', 'r5'].forEach(function(r) {
        var elTitle = document.getElementById('comp_' + r + '_title');
        var elDigify = document.getElementById('comp_' + r + '_digify');
        var elLegacy = document.getElementById('comp_' + r + '_legacy');
        if (elTitle && data['comp_' + r + '_title']) elTitle.innerHTML = data['comp_' + r + '_title'];
        if (elDigify && data['comp_' + r + '_digify']) elDigify.innerHTML = data['comp_' + r + '_digify'];
        if (elLegacy && data['comp_' + r + '_legacy']) elLegacy.innerHTML = data['comp_' + r + '_legacy'];
    });

    // Section 5: Regions
    var elSecRegTagline = document.getElementById('secRegionsTagline');
    var elSecRegTitle = document.getElementById('secRegionsTitle');
    var elSecRegDesc = document.getElementById('secRegionsDesc');
    var elCitiesHeading = document.getElementById('citiesBoxHeading');
    if (elSecRegTagline && data.sec_reg_tagline) elSecRegTagline.innerHTML = data.sec_reg_tagline;
    if (elSecRegTitle && data.sec_reg_title) elSecRegTitle.innerHTML = data.sec_reg_title;
    if (elSecRegDesc && data.sec_reg_desc) elSecRegDesc.innerHTML = data.sec_reg_desc;
    if (elCitiesHeading && data.cities_heading) elCitiesHeading.innerHTML = data.cities_heading;

    // Section 6: FAQs
    var elSecFaqTagline = document.getElementById('secFaqTagline');
    var elSecFaqTitle = document.getElementById('secFaqTitle');
    var elSecFaqDesc = document.getElementById('secFaqDesc');
    if (elSecFaqTagline && data.sec_faq_tagline) elSecFaqTagline.innerHTML = data.sec_faq_tagline;
    if (elSecFaqTitle && data.sec_faq_title) elSecFaqTitle.innerHTML = data.sec_faq_title;
    if (elSecFaqDesc && data.sec_faq_desc) elSecFaqDesc.innerHTML = data.sec_faq_desc;
    if (data.faqs) {
        var faqQuestions = document.querySelectorAll('.faq-q');
        var faqAnswers = document.querySelectorAll('.faq-a');
        data.faqs.forEach(function(item, idx) {
            if (faqQuestions[idx] && item.q) faqQuestions[idx].innerHTML = '<i class="fa-regular fa-circle-question me-2 text-primary"></i> ' + item.q;
            if (faqAnswers[idx] && item.a) faqAnswers[idx].innerHTML = item.a;
        });
    }

    // Section 7: Final CTA
    var elSecCtaBadge = document.getElementById('secCtaBadge');
    var elSecCtaTitle = document.getElementById('secCtaTitle');
    var elSecCtaDesc = document.getElementById('secCtaDesc');
    var elBtnCtaBook = document.getElementById('btnCtaBook');
    if (elSecCtaBadge && data.sec_cta_badge) elSecCtaBadge.innerHTML = data.sec_cta_badge;
    if (elSecCtaTitle && data.sec_cta_title) elSecCtaTitle.innerHTML = data.sec_cta_title;
    if (elSecCtaDesc && data.sec_cta_desc) elSecCtaDesc.innerHTML = data.sec_cta_desc;
    if (elBtnCtaBook && data.btn_cta_book) elBtnCtaBook.innerHTML = data.btn_cta_book;
}
</script>

<?php include('footer.php'); ?>
