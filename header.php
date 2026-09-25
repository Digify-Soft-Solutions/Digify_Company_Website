<?php if (!defined('TOP_INCLUDED')) { ?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <base href="/" />
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <meta name="viewport" content="width=device-width, initial-scale=1" />
      <title><?php echo htmlspecialchars($page_title ?? $pageTitle ?? 'Best ERP & IT Services in India – Digify Soft Solutions'); ?></title>
      <?php if (!empty($page_description ?? $pageDescription ?? '')) { ?>
      <meta name="description" content="<?php echo htmlspecialchars($page_description ?? $pageDescription); ?>" />
      <?php } ?>
      <link rel="icon" type="image/png" href="assets/images/favicon.png" />
      <link rel="shortcut icon" type="image/png" href="assets/images/favicon.png" />
      <link rel="apple-touch-icon" href="assets/images/favicon.png" />
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/css/bootstrap.min.css" />
      <link rel="stylesheet" as="style" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/hover.css/2.3.0/css/hover-min.css" />
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.css" />
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/css/lightbox.css" />
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Raleway:200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
      <link rel="stylesheet" as="style" type="text/css" href="assets/css/style.css?v=<?php echo file_exists(__DIR__ . '/assets/css/style.css') ? filemtime(__DIR__ . '/assets/css/style.css') : '2.2'; ?>" media="all" />
      <link rel="stylesheet" as="style" type="text/css" href="assets/css/responsive.css?v=<?php echo file_exists(__DIR__ . '/assets/css/responsive.css') ? filemtime(__DIR__ . '/assets/css/responsive.css') : '2.2'; ?>" media="all" />
      <?php 
         $currPage = basename($_SERVER['PHP_SELF']);
         if ($currPage == 'index.php' || $currPage == 'country.php' || $currPage == 'restaurant.php' || $currPage == 'partner-with-us.php') { 
      ?>
         <link rel="stylesheet" href="assets/css/premium-home.css?v=<?php echo file_exists(__DIR__ . '/assets/css/premium-home.css') ? filemtime(__DIR__ . '/assets/css/premium-home.css') : '2.2'; ?>">
      <?php } ?>

      <style>
          /* Global Fix for City Landing Page Badges */
          .premium-city-hero .badge {
              white-space: normal !important;
              line-height: 1.6 !important;
              max-width: 90% !important;
              display: inline-block !important;
              height: auto !important;
              padding: 10px 15px !important;
          }
          @media (max-width: 576px) {
              .premium-city-hero .badge {
                  font-size: 0.85rem !important;
                  letter-spacing: 1px !important;
              }
              .premium-city-hero h1 {
                  font-size: 2.2rem !important;
              }
          }

          /* Global Fix: Ensure navigation dropdowns render on top of sticky promo ribbons */
          .sub-menu, .mega-menu {
              z-index: 10000 !important;
          }
      </style>

   </head>
   <body>
<?php } ?>

  <!-- top header start here -->
    <!--   <section class="top-header">
      <div class="container">
          <div class="row">
              <div class="col-12 ">
             <div class="strip-image">
                   <img class="img-fluid" src="assets/images/gst-strip-for-website.webp" alt="strip"> 
                    <p class="content-on-image">Our software is now updated as per the latest GST changes. <a href="contact-us.php">Take free demo now</a></p>
                </div>
            </div>
          </div>
      </div>
</section>-->
  <!-- top heade end here -->

   <!-- sticky wrapper start -->
   <div class="sticky-header-wrapper" style="position: sticky; top: 0; z-index: 1050; background: #fff; width: 100%;">
   <!-- header start  -->
   <header>
      <div class="container">
          <div class="row navbarContainer ">
              <div class="col-md-12">
                <div class="nav-wrap">
                  <nav class="navbar navbar-expand-lg">
                    <a class="navbar-brand" href="index.php">
                      <img src="assets/images/logo.png" />
                    </a>
                    <button
                      class="navbar-toggler"
                      type="button"
                      data-bs-toggle="collapse"
                      data-bs-target="#navbarNav"
                      aria-controls="navbarNav"
                      aria-expanded="false"
                      aria-label="Toggle navigation"
                    >
                      <i class="fa-solid fa-bars"></i>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarNav">
                      <ul class="navbar-nav">

                        <!-- 1. SOLUTIONS (BY INDUSTRY) -->
                        <li class="nav-item dropdown">
                          <a class="nav-link" href="#">
                            Solutions <i class="fa-solid fa-angle-down"></i>
                          </a>
                          <div class="mega-menu">
                            <div class="row">
                              <!-- Manufacturing Pillar -->
                              <div class="col-md-3">
                                <div class="mega-menu-wrap">
                                  <ul>
                                    <strong><i class="fa-solid fa-industry"></i> Manufacturing</strong>
                                    <li><a href="textile.php"><i class="fa-solid fa-shirt"></i> Textile &amp; Fabric</a></li>
                                    <li><a href="pharma.php"><i class="fa-solid fa-pills"></i> Pharma &amp; Chemicals</a></li>
                                    <li><a href="garments.php"><i class="fa-solid fa-tshirt"></i> Ready Garments</a></li>
                                    <li><a href="electronics-smartphones.php"><i class="fa-solid fa-mobile"></i> Electronics &amp; Assembly</a></li>
                                    <li><a href="consumer-goods.php"><i class="fa-solid fa-boxes-stacked"></i> Consumer Goods</a></li>
                                    <li><a href="industrial-products.php"><i class="fa-solid fa-gears"></i> Industrial Machinery</a></li>
                                  </ul>
                                </div>
                              </div>

                              <!-- Retail Pillar -->
                              <div class="col-md-3">
                                <div class="mega-menu-wrap">
                                  <ul>
                                    <strong><i class="fa-solid fa-store"></i> Retail &amp; Supermarkets</strong>
                                    <li><a href="supermarket.php"><i class="fa-solid fa-cart-shopping"></i> Supermarket &amp; Groceries</a></li>
                                    <li><a href="kirana-store.php"><i class="fa-solid fa-basket-shopping"></i> Kirana &amp; Mini-Marts</a></li>
                                    <li><a href="footwear-store.php"><i class="fa-solid fa-shoe-prints"></i> Footwear &amp; Apparel</a></li>
                                    <li><a href="boutique-store.php"><i class="fa-solid fa-scissors"></i> Fashion Boutique</a></li>
                                    <li><a href="departmental-hypermarket-store.php"><i class="fa-solid fa-shop"></i> Departmental Stores</a></li>
                                    <li><a href="book-store.php"><i class="fa-solid fa-book"></i> Books &amp; Stationery</a></li>
                                  </ul>
                                </div>
                              </div>

                              <!-- Restaurant & Service Pillars -->
                              <div class="col-md-3">
                                <div class="mega-menu-wrap">
                                  <ul>
                                    <strong><i class="fa-solid fa-utensils"></i> Food &amp; Hospitality</strong>
                                    <li>
                                      <a href="restaurant.php" style="color: #e06930; font-weight: 700;">
                                        <i class="fa-solid fa-burger"></i> Restaurant &amp; Café POS 
                                        <span class="badge bg-warning text-dark ms-1" style="font-size: 9px;">NEW</span>
                                      </a>
                                    </li>
                                  </ul>
                                  <ul class="mt-3">
                                    <strong><i class="fa-solid fa-screwdriver-wrench"></i> After-Sales &amp; Warranty</strong>
                                    <li>
                                      <a href="After-Sale-Service.php" style="color: #e06930; font-weight: 700;">
                                        <i class="fa-solid fa-award"></i> Warranty &amp; AMC Suite
                                        <span class="badge bg-primary text-white ms-1" style="font-size: 9px;">SPECIALTY</span>
                                      </a>
                                    </li>
                                  </ul>
                                  <ul class="mt-3">
                                    <strong><i class="fa-solid fa-handshake"></i> Wholesale &amp; Trade</strong>
                                    <li><a href="trading-overview.php"><i class="fa-solid fa-truck-ramp-box"></i> B2B Distribution</a></li>
                                  </ul>
                                </div>
                              </div>

                              <!-- Institutional & Lifestyle -->
                              <div class="col-md-3">
                                <div class="mega-menu-wrap">
                                  <ul>
                                    <strong><i class="fa-solid fa-building"></i> Specialized Verticals</strong>
                                    <li><a href="cosmetic-store.php"><i class="fa-solid fa-pump-soap"></i> Cosmetics &amp; Wellness</a></li>
                                    <li><a href="home-decor-furniture.php"><i class="fa-solid fa-couch"></i> Home Decor &amp; Furniture</a></li>
                                    <li><a href="imitation-jewellery.php"><i class="fa-solid fa-gem"></i> Jewellery &amp; Gems</a></li>
                                    <li><a href="schools-educational-institutions.php"><i class="fa-solid fa-school"></i> Schools &amp; Education</a></li>
                                    <li><a href="hospitals.php"><i class="fa-solid fa-hospital"></i> Hospitals &amp; Clinics</a></li>
                                    <li><a href="india-temple.php"><i class="fa-solid fa-place-of-worship"></i> Trust &amp; Temple Mgmt</a></li>
                                  </ul>
                                </div>
                              </div>
                            </div>
                          </div>
                        </li>

                        <!-- 2. PRODUCTS & AI -->
                        <li class="nav-item dropdown">
                          <a class="nav-link" href="#">
                            Products &amp; AI <i class="fa-solid fa-angle-down"></i>
                          </a>
                          <div class="mega-menu">
                            <div class="row">
                              <div class="col-md-4">
                                <div class="mega-menu-wrap">
                                  <ul>
                                    <strong><i class="fa-solid fa-laptop-code"></i> Core Platform</strong>
                                    <li><a href="pos.php"><i class="fa-solid fa-cash-register"></i> Digify Smart POS (3-Sec Billing)</a></li>
                                    <li><a href="erp.php"><i class="fa-solid fa-network-wired"></i> Digify Cloud ERP (All-In-One)</a></li>
                                    <li><a href="inventory.php"><i class="fa-solid fa-boxes-stacked"></i> Real-Time Inventory Tracking</a></li>
                                    <li><a href="omnichannel.php"><i class="fa-solid fa-arrows-spin"></i> Connected Omnichannel</a></li>
                                  </ul>
                                </div>
                              </div>
                              <div class="col-md-4">
                                <div class="mega-menu-wrap">
                                  <ul>
                                    <strong><i class="fa-solid fa-file-invoice-dollar"></i> Finance &amp; Operations</strong>
                                    <li><a href="accounting.php"><i class="fa-solid fa-calculator"></i> Accounting &amp; GST Returns</a></li>
                                    <li><a href="invoicing.php"><i class="fa-solid fa-file-invoice"></i> E-Invoicing &amp; E-Way Bill</a></li>
                                    <li><a href="crm.php"><i class="fa-solid fa-users"></i> CRM &amp; Customer Loyalty</a></li>
                                    <li><a href="payroll.php"><i class="fa-solid fa-user-gear"></i> Staff &amp; Payroll Management</a></li>
                                  </ul>
                                </div>
                              </div>
                              <div class="col-md-4">
                                <div class="mega-menu-wrap">
                                  <ul>
                                    <strong><i class="fa-solid fa-robot"></i> Intelligence &amp; AI Layer</strong>
                                    <li><a href="ai-business.php" style="color: #e06930; font-weight: 700;"><i class="fa-solid fa-brain"></i> AI Business Intelligence</a></li>
                                    <li><a href="ai-manufacturing.php"><i class="fa-solid fa-microchip"></i> AI Shop-Floor Automation</a></li>
                                    <li><a href="lead-management.php"><i class="fa-solid fa-comments"></i> 24/7 WhatsApp AI Agents</a></li>
                                  </ul>
                                </div>
                              </div>
                            </div>
                          </div>
                        </li>

                        <!-- 3. PRICING -->
                        <li class="nav-item">
                          <a class="nav-link" href="index.php#choose-business" style="font-weight: 600;">
                            Pricing 
                            <span style="font-size: 10px; background: rgba(224, 105, 48, 0.12); color: #e06930; padding: 2px 7px; border-radius: 12px; font-weight: 700; margin-left: 3px;">₹1k+</span>
                          </a>
                        </li>

                        <!-- 4. SERVICES & TECH -->
                        <li class="nav-item dropdown">
                          <a class="nav-link" href="#">
                            Services <i class="fa-solid fa-angle-down"></i>
                          </a>
                          <ul class="sub-menu">
                            <li><a href="modern-responsive-website-design.php"><i class="fa-solid fa-laptop"></i> Connected Web Development</a></li>
                            <li><a href="e-commerce-website-development.php"><i class="fa-solid fa-cart-shopping"></i> E-Commerce Stores</a></li>
                            <li><a href="android-application.php"><i class="fa-brands fa-android"></i> Android Apps</a></li>
                            <li><a href="ios-application.php"><i class="fa-brands fa-apple"></i> iOS Apps</a></li>
                            <li><a href="search-engine-optimization.php"><i class="fa-solid fa-magnifying-glass"></i> SEO &amp; Growth</a></li>
                          </ul>
                        </li>

                        <!-- 5. COMPANY -->
                        <li class="nav-item">
                          <a class="nav-link" href="about-us.php">About</a>
                        </li>

                        <li class="nav-item">
                          <a class="nav-link" href="blog.php">Blog</a>
                        </li>

                        <li class="nav-item">
                          <a class="nav-link <?php echo ($currPage == 'contact-us.php') ? 'active' : ''; ?>" href="contact-us.php">Contact</a>
                        </li>

                        <li class="nav-item">
                          <a class="nav-link <?php echo ($currPage == 'partner-with-us.php') ? 'active' : ''; ?>" href="partner-with-us.php" style="font-weight: 600;">Partner with Us</a>
                        </li>
                      </ul>

                      <div class="right-btn">
                        <ul>
                          <li>
                            <a href="tel:+917425016636" style="white-space: nowrap;">
                              <i class="fa-solid fa-mobile-screen-button"></i> +91&nbsp;7425016636
                            </a>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </nav>
                </div>
              </div>
          </div>
      </div>
   </header>
   <!-- header end -->

   <!-- Book A Demo Strip -->
    <div class="book-demo-strip" style="background: #0f172a; padding: 7px 15px; text-align: center; border-bottom: 2px solid #e06930; position: relative; z-index: 9998;">
        <div class="container d-flex flex-row align-items-center justify-content-between justify-content-md-center gap-2 gap-md-4">
            <span style="color: #f8fafc; font-size: 13px; font-weight: 600; letter-spacing: 0.3px; line-height: 1.3;">
                <span class="d-none d-md-inline">Experience Digify AI Business Platform — </span>
                <span style="color: #fbc145;">Fast-Track Operations, POS &amp; Automation</span>
            </span>
            <button type="button" class="btn btn-sm" style="background: linear-gradient(to right, #e06930, #fbc145); color: white; font-weight: 700; border-radius: 20px; padding: 5px 16px; border: none; box-shadow: 0 2px 8px rgba(224, 105, 48, 0.3); text-transform: uppercase; font-size: 11px; letter-spacing: 0.5px; white-space: nowrap;" data-bs-toggle="modal" data-bs-target="#trialModal">
                <i class="fas fa-calendar-check me-1"></i> Book Demo
            </button>
        </div>
    </div>
   </div>
   </div>
   <!-- sticky wrapper end -->

   <!-- WhatsApp Icon Box (moved outside header context to remain fixed to viewport) -->
   <div class="whatsapp-icon" style="position:fixed; bottom:20px; left:20px; z-index:9999;">
     <a href="#" id="whatsappButton" style="display:flex; align-items:center; justify-content:center;
                                         background-color:#25D366; color:white; border-radius:50%;
                                         width:60px; height:60px; text-decoration:none; box-shadow:0 4px 6px rgba(0,0,0,0.3);">
       <i class="fab fa-whatsapp fa-2x"></i>
     </a>
   </div>

   <script>
   // WhatsApp number
   const phone = "917425016636";
   const name = "Website Visitor";

   // On click
   document.getElementById('whatsappButton').addEventListener('click', function(e){
       e.preventDefault();
       const cleanPhone = phone.replace(/\D/g, '');
       const waMsg = encodeURIComponent("Namaste Gautam Sir! I am interested in taking services from Digify Soft Solutions. Could you please explain to me more details about your software?");

       // --- 1. Call your PHP API ---
       fetch('send_whatsapp_lead.php', {
           method: 'POST',
           headers: {'Content-Type': 'application/json'},
           body: JSON.stringify({
               phone: cleanPhone,
               lead_name: name,
               message: "Clicked WhatsApp icon"
           })
       })
       .then(response => response.json())
       .then(data => {
           console.log("Lead API Response:", data);
           // --- 2. Open WhatsApp chat ---
           window.open("https://wa.me/" + cleanPhone + "?text=" + waMsg, "_blank");
       })
       .catch(err => {
           console.error(err);
           // Even if API fails, open WhatsApp
           window.open("https://wa.me/" + cleanPhone + "?text=" + waMsg, "_blank");
       });
   });
   </script>

   <style>
   .whatsapp-icon a:hover {
       transform: scale(1.2);
       transition: 0.3s ease;
   }
   </style>

   <!-- Digify AI Assistant (Kaira) for Digify Soft Solutions -->
   <link rel="stylesheet" href="assets/css/chatbot.css?v=<?php echo file_exists(__DIR__ . '/assets/css/chatbot.css') ? filemtime(__DIR__ . '/assets/css/chatbot.css') : '3.0'; ?>" />
   <script src="assets/js/chatbot.js?v=<?php echo file_exists(__DIR__ . '/assets/js/chatbot.js') ? filemtime(__DIR__ . '/assets/js/chatbot.js') : '3.0'; ?>" defer></script>

   <!-- Background Blur Overlay -->
   <div id="chatbot-overlay" class="chatbot-overlay"></div>

   <div class="chatbot-container">
     <button id="chatbot-fab" class="chatbot-fab" aria-label="Open AI Assistant" title="Talk to AI">
       <i class="fa-solid fa-comments"></i>
       <div class="pulse-ring"></div>
     </button>

     <div id="chatbot-window" class="chatbot-window">
       <div class="chatbot-header">
         <div class="chatbot-header-info">
           <div class="chatbot-avatar">
             <img src="assets/images/chatbot-kaira.webp" alt="Kaira" id="chatbot-header-avatar-img" onerror="this.src='assets/images/logo.png';" />
           </div>
           <div class="chatbot-header-text">
             <h4>Digify AI Bot</h4>
             <span>Online • Digify AI</span>
           </div>
         </div>
         <div class="chatbot-header-actions">
           <button id="chatbot-reset-btn" class="chatbot-reset-btn" title="Clear Chat">
             <i class="fas fa-trash-alt"></i>
           </button>
           <button id="chatbot-close-btn" class="chatbot-close-btn" title="Close Chat">
             <i class="fas fa-times"></i>
           </button>
         </div>
       </div>

       <!-- 1. PRE-CHAT REGISTRATION CONTAINER (Shown if user hasn't registered) -->
       <div id="chatbot-reg-container" class="chatbot-reg-container">
         <div class="chatbot-3d-hero">
           <div class="ai-3d-orb-wrap">
             <div class="ai-3d-orb-glow"></div>
             <div class="ai-3d-avatar-container">
               <img src="assets/images/chatbot-kaira.webp" alt="Digify Saathi" class="ai-3d-avatar-img" onerror="this.src='assets/images/logo.png';" />
               <span class="ai-live-pulse-badge">
                 <span class="live-dot"></span> Neural AI
               </span>
             </div>
           </div>
           <div class="chatbot-reg-welcome-text">
             <h3>Digify AI Assistant</h3>
             <p>Chat with <strong>Digify Saathi</strong> for instant solution architecture, ERP demos &amp; custom pricing.</p>
           </div>
           <div class="ai-capabilities-pill-strip">
             <span><i class="fas fa-bolt"></i> Instant Responses</span>
             <span><i class="fas fa-phone-alt"></i> Book a Call</span>
             <span><i class="fas fa-calendar-check"></i> Book a Demo</span>
           </div>
         </div>

                   <form id="chatbot-reg-form" class="chatbot-reg-form" style="padding-top: 15px;">
            <div class="ai-quote-card" style="background: linear-gradient(135deg, rgba(224,105,48,0.08) 0%, rgba(251,193,69,0.12) 100%); border: 1px solid rgba(224,105,48,0.2); border-radius: 14px; padding: 16px; margin-bottom: 20px; text-align: center;">
              <i class="fas fa-quote-left mb-2" style="color: #e06930; font-size: 18px;"></i>
              <p style="font-size: 13.5px; color: #334155; font-weight: 600; font-style: italic; margin-bottom: 6px; line-height: 1.5;">
                "Smart IT, Smarter Business. Experience the future of Cloud ERP, POS &amp; Autonomous AI Operations."
              </p>
              <span style="font-size: 11px; color: #64748b; font-weight: 700;">— Digify Soft Solutions AI Engine</span>
            </div>

            <button type="submit" class="chatbot-reg-btn" style="margin-top: 0;">
              <span>Start AI Conversation</span>
              <i class="fas fa-arrow-right"></i>
            </button>
          </form>
       </div>

       <!-- 2. MAIN CHAT VIEW (Shown after registration) -->
       <div id="chatbot-main-view" style="display:none; flex:1; flex-direction:column; overflow:hidden;">
         <!-- Quick Action Bar -->
         <div class="chatbot-action-bar">
           <button type="button" id="chat-schedule-btn" class="chat-quick-pill schedule-pill">
             <i class="fas fa-calendar-alt"></i>
             <span>Book Call</span>
           </button>
           <button type="button" id="chat-whatsapp-btn" class="chat-quick-pill whatsapp-pill" title="Connect directly with Gautam on WhatsApp">
             <i class="fab fa-whatsapp"></i>
             <span>WhatsApp Gautam</span>
           </button>
         </div>

         <!-- Embedded Meeting Scheduler Panel -->
         <div id="chatbot-scheduler-card" class="chatbot-scheduler-card" style="display:none;">
           <div class="scheduler-header">
             <div class="scheduler-title-wrap">
               <div class="scheduler-header-badge">
                 <i class="fas fa-calendar-check"></i>
               </div>
               <div>
                 <h4 class="scheduler-title-text">Book Strategy Call</h4>
                 <p class="scheduler-sub-text">Direct 1-on-1 consultation with Gautam</p>
               </div>
             </div>
             <button type="button" id="scheduler-close-btn" class="scheduler-close-btn" aria-label="Close scheduler">
               <i class="fas fa-times"></i>
             </button>
           </div>

           <form id="scheduler-form" class="scheduler-form">
             <div class="scheduler-field">
               <label class="scheduler-field-label">
                 <i class="fas fa-layer-group"></i>
                 <span>Focus Area / Service</span>
               </label>
               <div class="scheduler-select-wrap">
                 <select id="scheduler-service" class="scheduler-select">
                   <option value="Digify ERP & AI Platform">Digify ERP &amp; AI Platform</option>
                   <option value="Smart POS Billing Software">Smart POS Billing Software</option>
                   <option value="Cloud Accounting & Invoicing">Cloud Accounting &amp; Invoicing</option>
                   <option value="Inventory & Supply Chain ERP">Inventory &amp; Supply Chain ERP</option>
                   <option value="Omnichannel Retail & E-Commerce">Omnichannel Retail &amp; E-Commerce</option>
                   <option value="CRM & Sales Automation">CRM &amp; Sales Automation</option>
                   <option value="Manufacturing & Production ERP">Manufacturing &amp; Production ERP</option>
                 </select>
               </div>
             </div>

             <div class="scheduler-field">
               <div class="scheduler-label-row">
                 <label class="scheduler-field-label">
                   <i class="fas fa-calendar-alt"></i>
                   <span>Preferred Date</span>
                 </label>
                 <span id="scheduler-selected-tag" class="scheduler-selected-tag">
                   <i class="fas fa-check"></i>
                   <span id="scheduler-selected-tag-text"></span>
                 </span>
               </div>

               <div id="scheduler-date-chips" class="scheduler-date-chips">
                 <!-- Chips populated by JS -->
               </div>

               <div class="scheduler-input-with-icon">
                 <i class="fas fa-calendar-day input-icon"></i>
                 <input type="date" id="scheduler-date-input" class="scheduler-input date-input" required />
               </div>
             </div>

             <div class="scheduler-field">
               <label class="scheduler-field-label">
                 <i class="fas fa-clock"></i>
                 <span>Select Time Slot</span>
               </label>
               <div id="scheduler-slot-grid" class="scheduler-slot-grid">
                 <!-- Time slots populated by JS -->
               </div>
             </div>

             <div class="scheduler-field">
               <label class="scheduler-field-label">
                 <i class="fas fa-comment-dots"></i>
                 <span>Project Scope / Note (Optional)</span>
               </label>
               <div class="scheduler-input-with-icon">
                 <i class="fas fa-pen input-icon"></i>
                 <input type="text" id="scheduler-notes" class="scheduler-input" placeholder="e.g. Need POS &amp; Inventory for retail stores..." />
               </div>
             </div>

             <div class="scheduler-actions">
               <button type="submit" id="scheduler-submit-btn" class="scheduler-submit-btn">
                 <span><i class="fas fa-check-circle"></i> Confirm Strategy Call</span>
               </button>
               <div class="scheduler-guarantee-note">
                 <i class="fas fa-shield-alt"></i> 100% Free Consultation • No Obligation
               </div>
             </div>
           </form>
         </div>

         <!-- Messages Container -->
         <div id="chatbot-messages" class="chatbot-messages">
           <!-- Messages injected here -->
         </div>

         <!-- Suggestion Chips Container -->
         <div id="chatbot-suggestions" class="chatbot-suggestions-chips">
           <!-- Suggestion chips injected here -->
         </div>

         <div class="chatbot-disclaimer">
           <i class="fas fa-shield-alt"></i>
           <span>Digify AI Assistant • Powered by Deep Neural Intelligence</span>
         </div>

         <div class="chatbot-input-area">
           <input type="text" id="chatbot-input" class="chatbot-input" placeholder="Ask about our services..." />
           <button id="chatbot-send-btn" class="chatbot-send">
             <i class="fas fa-paper-plane"></i>
           </button>
         </div>
       </div>

     </div>
   </div>
   
<style>
@media (min-width: 992px) {
    .mobile-contact-item {
        display: none !important;
    }
}
/* Hide redundant floating contact button that overlaps text on mobile and cards on desktop */
.contact-floating {
    display: none !important;
}
@media (max-width: 576px) {
    .whatsapp-icon a {
        width: 46px !important;
        height: 46px !important;
        bottom: 15px !important;
        left: 15px !important;
    }
    .whatsapp-icon a i {
        font-size: 22px !important;
    }
}
</style>
     <!-- header end -->
  <?php

$msg = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    require_once __DIR__ . '/includes/mail_helper.php';

    // Sanitize input
    if ($conn) {
        $name         = mysqli_real_escape_string($conn, trim($_POST["name"] ?? ''));
        $email        = mysqli_real_escape_string($conn, trim($_POST["email"] ?? ''));
        $industry     = mysqli_real_escape_string($conn, trim($_POST["industry"] ?? ''));
        $company      = mysqli_real_escape_string($conn, trim($_POST["company"] ?? ''));
        $message      = mysqli_real_escape_string($conn, trim($_POST["message"] ?? ''));
        $firm         = mysqli_real_escape_string($conn, trim($_POST["firm"] ?? ''));
        $contact      = mysqli_real_escape_string($conn, trim($_POST["contact"] ?? ''));
        $locationPost = mysqli_real_escape_string($conn, trim($_POST["location"] ?? ''));
        $coords       = mysqli_real_escape_string($conn, trim($_POST["coords"] ?? ''));
    } else {
        $name         = addslashes(trim($_POST["name"] ?? ''));
        $email        = addslashes(trim($_POST["email"] ?? ''));
        $industry     = addslashes(trim($_POST["industry"] ?? ''));
        $company      = addslashes(trim($_POST["company"] ?? ''));
        $message      = addslashes(trim($_POST["message"] ?? ''));
        $firm         = addslashes(trim($_POST["firm"] ?? ''));
        $contact      = addslashes(trim($_POST["contact"] ?? ''));
        $locationPost = addslashes(trim($_POST["location"] ?? ''));
        $coords       = addslashes(trim($_POST["coords"] ?? ''));
    }

    // Field mapping
    $mobile   = $contact;
    $whatsapp = $contact;
    $location = ($locationPost !== '') ? $locationPost : $company;
    $state    = '';
    $remark   = ($coords !== '') ? $message . "\n[Coordinates: " . $coords . "]" : $message;
    $tdate    = date('Y-m-d');

    $db_failed = false;

    if ($conn) {
        // Start transaction (professional handling)
        mysqli_begin_transaction($conn);

        try {
            $insertweb = "
                INSERT INTO website_contact_enquiries 
                (name, email, mobile, whatsapp, location, industry, state, firm, remark, created_at)
                VALUES 
                ('$name', '$email', '$mobile', '$whatsapp', '$location', '$industry', '$state', '$firm', '$remark', NOW())
            ";
            $dbSuccess = mysqli_query($conn, $insertweb);

            // ✅ 1. Insert Lead FIRST (without reference)
            $insertLead = mysqli_query($conn, "
                INSERT INTO sf_lead_master
                (partyid, email, number, whatsappnumber, party_city, industry,
                 party_state, firm, intial_remark, status, tdate)
                VALUES
                ('$name', '$email', '$mobile', '$whatsapp', '$location', '$industry',
                 '$state', '$firm', '$remark', 7, '$tdate')
            ");

            if (!$insertLead) {
                throw new Exception(mysqli_error($conn));
            }

            // ✅ 2. Get inserted ID safely
            $last_id = mysqli_insert_id($conn);

            $reference = "LD" . str_pad($last_id, 3, "0", STR_PAD_LEFT);

            // ✅ 3. Update reference
            $updateRef = mysqli_query($conn,
                "UPDATE sf_lead_master SET reference='$reference' WHERE lid='$last_id'"
            );

            if (!$updateRef) {
                throw new Exception(mysqli_error($conn));
            }

            // ✅ 4. Insert Status History
            $statusInsert = mysqli_query($conn, "
                INSERT INTO sf_status_history 
                SET party_id='$name',
                    status_id='7',
                    trans_type='add_lead',
                    trans_no='$reference'
            ");

            if (!$statusInsert) {
                throw new Exception(mysqli_error($conn));
            }

            // ✅ Commit transaction
            mysqli_commit($conn);

        } catch (Exception $e) {
            mysqli_rollback($conn);
            $db_failed = true;
        }
    }

    if ($db_failed) {
        // For Live hide detailed error
        $msg = '<div class="alert alert-danger mt-3">
            There was a problem submitting the form.
        </div>';
    } else {
        // ===== Email =====
        $to = defined('SMTP_TO_EMAIL') ? SMTP_TO_EMAIL : "gautamalik1@gmail.com,pragatimodi10@gmail.com";
        $subject = "[Free Trial Form] Request from $name";

        $body  = "You have received a new lead from the Free Trial Form:\n\n";
        $body .= "Name: $name\n";
        $body .= "Email: $email\n";
        $body .= "Industry: $industry\n";
        $body .= "Company: $company\n";
        $body .= "Contact: $contact\n";
        $body .= "Firm: $firm\n";
        if (trim($_POST["location"] ?? '') !== '') {
            $body .= "Location: " . trim($_POST["location"]) . "\n";
        }
        if (trim($_POST["coords"] ?? '') !== '') {
            $body .= "Coordinates: " . trim($_POST["coords"]) . "\n";
        }
        $body .= "\nMessage:\n$message\n";

        $headers  = "MIME-Version: 1.0\r\n";
        $headers .= "Content-type: text/plain; charset=UTF-8\r\n";
        $headers .= "From: Digify Website <support-noreply@digify.com>\r\n";

        send_lead_email($to, $subject, $body, $headers);

        $msg = '<div class="alert alert-success mt-3">
            Thank you! We will contact you soon.
        </div>';
    }
}
?>





