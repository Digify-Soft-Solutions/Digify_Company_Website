<?php if (!defined('TOP_INCLUDED')) define('TOP_INCLUDED', true); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <base href="/" />
  <meta charset="utf-8">
   <title><?php echo $pageTitle ?? 'Best ERP & IT Services in Jaipur & Delhi NCR – Digify Soft Solutions'; ?></title>

   <!-- Responsive -->
   <meta name="viewport" content="width=device-width, initial-scale=1.0">

   <!-- SEO Meta Tags -->
   <meta name="description" content="<?php echo $pageDescription ?? 'Simplify operations with the best ERP & IT services in Jaipur & Delhi NCR. Digify Soft Solutions helps manufacturers and businesses grow smarter and faster.'; ?>">
   <meta name="keywords" content="<?php echo $pageKeywords ?? 'ERP software, CRM software, DigifySoft, business management, cloud ERP, GST billing, inventory software, invoice software'; ?>">
   <meta name="author" content="Digify Soft Solutions">
   <meta http-equiv="Content-Language" content="en-IN">

   <!-- ✅ Canonical + OG/Twitter URL setup -->
   <?php
      $requestUri   = rtrim($_SERVER['REQUEST_URI'] ?? '', '/');
      $canonicalUrl = $pageCanonical ?? ('https://www.digifysoft.in' . ($requestUri === '' ? '/' : $requestUri));
   ?>

   <!-- Open Graph (OG) Tags -->
   <meta property="og:title" content="<?php echo $pageTitle ?? 'Best ERP & IT Services in Jaipur & Delhi NCR – Digify Soft Solutions'; ?>" >
   <meta property="og:description" content="<?php echo $pageDescription ?? 'Simplify operations with the best ERP & IT services in Jaipur & Delhi NCR. Digify Soft Solutions helps manufacturers and businesses grow smarter and faster.'; ?>" />
   <meta property="og:type" content="website" />
   <meta property="og:url" content="<?php echo htmlspecialchars($canonicalUrl, ENT_QUOTES, 'UTF-8'); ?>" />

   <!-- Twitter Tags -->
   <meta name="twitter:card" content="summary_large_image" />
   <meta name="twitter:title" content="<?php echo $pageTitle ?? 'Best ERP & IT Services in Jaipur & Delhi NCR – Digify Soft Solutions'; ?>" />
   <meta name="twitter:description" content="<?php echo $pageDescription ?? 'Simplify operations with the best ERP & IT services in Jaipur & Delhi NCR. Digify Soft Solutions helps manufacturers and businesses grow smarter and faster.'; ?>" />
   <meta name="twitter:url" content="<?php echo htmlspecialchars($canonicalUrl, ENT_QUOTES, 'UTF-8'); ?>" />

   <!-- ✅ Google Verification Meta Tag -->
   <meta name="google-site-verification" content="42lNbVoSlPpy1x2N0bE-8nDU9-5goWDvqgW0SOD8R1Q" />

   <!-- ✅ Canonical -->
   <link rel="canonical" href="<?php echo htmlspecialchars($canonicalUrl, ENT_QUOTES, 'UTF-8'); ?>">

   <!-- Hreflang (English - India) -->
   <link rel="alternate" hreflang="en-in" href="<?php echo htmlspecialchars($canonicalUrl, ENT_QUOTES, 'UTF-8'); ?>" />

   <!-- Hreflang (x-default) -->
   <link rel="alternate" hreflang="x-default" href="<?php echo htmlspecialchars($canonicalUrl, ENT_QUOTES, 'UTF-8'); ?>" />

   <!-- Favicon -->
   <link rel="icon" href="assets/images/favicon.png" type="image/png">

   <!-- Meta Pixel Code -->
   <script>
   !function(f,b,e,v,n,t,s)
   {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
   n.callMethod.apply(n,arguments):n.queue.push(arguments)};
   if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
   n.queue=[];t=b.createElement(e);t.async=!0;
   t.src=v;s=b.getElementsByTagName(e)[0];
   s.parentNode.insertBefore(t,s)}(window, document,'script',
   'https://connect.facebook.net/en_US/fbevents.js');
   fbq('init', '1251427566880807');
   fbq('track', 'PageView');
   </script>
   <noscript><img height="1" width="1" style="display:none"
   src="https://www.facebook.com/tr?id=1251427566880807&ev=PageView&noscript=1"
   /></noscript>
   <!-- End Meta Pixel Code -->
   
   <!-- Google Tag Manager -->
   <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
   new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
   j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
   'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
   })(window,document,'script','dataLayer','GTM-WHJP4VP8');</script>
   <!-- End Google Tag Manager -->

   <!-- Google Analytics Code -->
   <script async src="https://www.googletagmanager.com/gtag/js?id=G-B33CPPPGFN"></script>
   <script>
     window.dataLayer = window.dataLayer || [];
     function gtag(){dataLayer.push(arguments);}
     gtag('js', new Date());
     gtag('config', 'G-B33CPPPGFN');
   </script>

   <!-- Google Font -->
   <link href="https://fonts.googleapis.com/css?family=Raleway:200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
   <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">

   <!-- Libraries CSS via CDN -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/css/bootstrap.min.css" />
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/css/lightbox.css" />
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" />
   <link rel="stylesheet" href="assets/css/style.css?v=<?php echo file_exists(__DIR__ . '/assets/css/style.css') ? filemtime(__DIR__ . '/assets/css/style.css') : '2.2'; ?>" media="all">
   <link rel="stylesheet" href="assets/css/responsive.css?v=<?php echo file_exists(__DIR__ . '/assets/css/responsive.css') ? filemtime(__DIR__ . '/assets/css/responsive.css') : '2.2'; ?>" media="all">
    <?php
    $current_page = basename($_SERVER['PHP_SELF'] ?? '');
    $product_pages = ['pos.php', 'erp.php', 'accounting.php', 'inventory.php', 'omnichannel.php', 'crm.php', 'invoicing.php', 'logistics.php'];
    if (in_array($current_page, $product_pages)) {
        echo '    <link href="assets/css/premium-products.css" rel="stylesheet">' . "\n";
    }
    $home_pages = ['index.php', '', 'country.php', 'restaurant.php', 'partner-with-us.php'];
    if (in_array($current_page, $home_pages)) {
        $vHome = file_exists(__DIR__ . '/assets/css/premium-home.css') ? filemtime(__DIR__ . '/assets/css/premium-home.css') : '2.2';
        echo '    <link rel="stylesheet" href="assets/css/premium-home.css?v=' . $vHome . '">' . "\n";
    }
    ?>
    <!-- Chart.js CDN -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js@4.4.1/dist/chart.umd.min.js"></script>
</head>
<body>
