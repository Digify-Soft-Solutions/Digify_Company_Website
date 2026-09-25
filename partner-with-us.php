<?php
include 'fetch_meta.php';
include 'db.php';

/* ==========================================================
   PARTNER FORM SUBMISSION PROCESSING (Database + Email)
   ========================================================== */
$msg = '';
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["partner_apply"])) {
    require_once __DIR__ . '/includes/mail_helper.php';

    $partner_name    = trim($_POST["partner_name"] ?? '');
    $company_name    = trim($_POST["company_name"] ?? '');
    $email           = trim($_POST["email"] ?? '');
    $mobile          = trim($_POST["mobile"] ?? '');
    $whatsapp        = trim($_POST["whatsapp"] ?? $mobile);
    $partner_category= trim($_POST["partner_category"] ?? 'General Reseller Partner');
    $city            = trim($_POST["city"] ?? '');
    $state           = trim($_POST["state"] ?? '');
    $client_base     = trim($_POST["client_base"] ?? '');
    $remarks         = trim($_POST["remarks"] ?? '');
    $tdate           = date('Y-m-d');

    $full_remark = "Partner Application - Category: " . $partner_category . "\nCompany: " . $company_name . "\nClient Base/Reach: " . $client_base . "\nDetails: " . $remarks;

    if ($conn) {
        $p_name_esc   = mysqli_real_escape_string($conn, $partner_name);
        $p_comp_esc   = mysqli_real_escape_string($conn, $company_name);
        $email_esc    = mysqli_real_escape_string($conn, $email);
        $mobile_esc   = mysqli_real_escape_string($conn, $mobile);
        $whatsapp_esc = mysqli_real_escape_string($conn, $whatsapp);
        $cat_esc      = mysqli_real_escape_string($conn, $partner_category);
        $city_esc     = mysqli_real_escape_string($conn, $city);
        $state_esc    = mysqli_real_escape_string($conn, $state);
        $remark_esc   = mysqli_real_escape_string($conn, $full_remark);

        // Insert into sf_lead_master
        mysqli_query(
            $conn,
            "INSERT INTO sf_lead_master
            (partyid, email, number, whatsappnumber, party_city, industry, party_state, firm, intial_remark, status, tdate)
            VALUES
            ('$p_name_esc', '$email_esc', '$mobile_esc', '$whatsapp_esc', '$city_esc', 'Partner Program: $cat_esc', '$state_esc', '$p_comp_esc', '$remark_esc', 7, '$tdate')"
        );

        $last_id = mysqli_insert_id($conn);
        $reference = "PTR-" . str_pad($last_id, 4, "0", STR_PAD_LEFT);

        // Insert into website_contact_enquiries
        $insertweb = "
            INSERT INTO website_contact_enquiries 
            (name, email, mobile, whatsapp, location, industry, state, firm, remark, created_at)
            VALUES 
            ('$p_name_esc', '$email_esc', '$mobile_esc', '$whatsapp_esc', '$city_esc', 'Partner: $cat_esc', '$state_esc', '$p_comp_esc', '$remark_esc', NOW())
        ";
        mysqli_query($conn, $insertweb);
        mysqli_query($conn, "UPDATE sf_lead_master SET reference='$reference' WHERE lid='$last_id'");
    } else {
        $reference = "PTR-OFFLINE-" . time();
    }

    // Send email notification to Digify Partner Desk
    $to = defined('SMTP_TO_EMAIL') ? SMTP_TO_EMAIL : "gautamalik1@gmail.com,sales.digify@digifycrm.in,support@digifysoft.in";
    $subject = "[New Reseller Partner Application] $company_name - $partner_category";

    $body  = "A new Partner Application has been submitted on the Digify Reseller & Channel Partner Portal:\n\n";
    $body .= "Contact Person: $partner_name\n";
    $body .= "Company/Firm: $company_name\n";
    $body .= "Partner Category: $partner_category\n";
    $body .= "Mobile: $mobile\n";
    $body .= "WhatsApp: $whatsapp\n";
    $body .= "Email: $email\n";
    $body .= "City/Territory: $city, $state\n";
    $body .= "Estimated Reach/Clients: $client_base\n";
    $body .= "Additional Information:\n$remarks\n\n";
    $body .= "Application Reference: $reference\n";
    $body .= "Date: " . date('Y-m-d H:i:s') . "\n";

    $headers  = "MIME-Version: 1.0\r\n";
    $headers .= "Content-type: text/plain; charset=UTF-8\r\n";
    $headers .= "From: Digify Partner Desk <support-noreply@digifysoft.in>\r\n";

    send_lead_email($to, $subject, $body, $headers);

    header("Location: partner-with-us.php?success=1&ref=" . urlencode($reference) . "#apply-form");
    exit();
}

$pageTitle = 'Reseller & Channel Partner Program | Digify Soft Solutions';
$pageDescription = 'Build a profitable software business without building software. Partner with Digify Soft Solutions to offer ERP, CRM, POS, AI and business automation solutions to your customers.';
$pageKeywords = 'Digify reseller program, channel partner program, Tally partner software, ERP reseller India, POS software partner, AutomateX AI partner, business software franchise';

include 'top.php';
include 'header.php';

if (isset($_GET['success']) && $_GET['success'] == 1) {
    $ref = htmlspecialchars($_GET['ref'] ?? '');
    $msg = '<div class="alert alert-success alert-dismissible fade show p-4 shadow-sm border-0 mb-4" role="alert" style="background: #ecfdf5; border-left: 5px solid #10b981 !important; border-radius: 12px; color: #065f46;">
        <h4 class="alert-heading fw-bold mb-2"><i class="fa-solid fa-circle-check text-success me-2"></i> Application Received Successfully!</h4>
        <p class="mb-1">Thank you for your reseller partnership interest. Your official application reference code is <strong>' . $ref . '</strong>.</p>
        <p class="mb-0 small text-muted">Our dedicated Partner Success Manager will reach out via WhatsApp & call within 24 hours to guide you through onboarding and commercial agreements.</p>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
}
?>

<!-- ==============================================================
     PREMIUM, VIBRANT, CLEAN-WHITE RESELLER & PARTNER PAGE STYLES
     ============================================================== -->
<style>
/* Base Wrapper */
.partner-page-wrap {
    font-family: 'Raleway', sans-serif;
    color: #0f172a;
    background-color: #ffffff;
    overflow-x: hidden;
}

/* 1. HERO SECTION */
.partner-hero-clean {
    position: relative;
    padding: 75px 0 85px;
    background: 
        radial-gradient(circle at 10% 20%, rgba(224, 105, 48, 0.08) 0%, transparent 45%),
        radial-gradient(circle at 90% 15%, rgba(99, 102, 241, 0.09) 0%, transparent 45%),
        radial-gradient(circle at 50% 90%, rgba(16, 185, 129, 0.06) 0%, transparent 50%),
        #ffffff;
    border-bottom: 1px solid #f1f5f9;
}

.partner-pill-badge-vibrant {
    background: linear-gradient(135deg, rgba(224, 105, 48, 0.12) 0%, rgba(251, 193, 69, 0.2) 100%);
    border: 1.5px solid rgba(224, 105, 48, 0.35);
    color: #d9531e;
    padding: 7px 20px;
    border-radius: 30px;
    font-size: 12.5px;
    font-weight: 800;
    letter-spacing: 0.8px;
    display: inline-flex;
    align-items: center;
    gap: 8px;
    margin-bottom: 22px;
    box-shadow: 0 4px 12px rgba(224, 105, 48, 0.1);
}

.partner-hero-title-clean {
    font-size: 2.85rem;
    font-weight: 900;
    line-height: 1.18;
    color: #0f172a;
    margin-bottom: 22px;
    letter-spacing: -0.5px;
}

.gradient-text-vibrant {
    background: linear-gradient(135deg, #e06930 0%, #f58220 50%, #f59e0b 100%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    display: inline-block;
}

.partner-hero-desc-clean {
    font-size: 1.12rem;
    color: #475569;
    line-height: 1.7;
    margin-bottom: 32px;
    max-width: 630px;
}

.btn-partner-cta {
    background: linear-gradient(135deg, #e06930 0%, #f58220 100%);
    color: #ffffff !important;
    font-weight: 800;
    font-size: 15px;
    padding: 14px 34px;
    border-radius: 30px;
    border: none;
    box-shadow: 0 10px 25px rgba(224, 105, 48, 0.35);
    transition: all 0.3s cubic-bezier(0.16, 1, 0.3, 1);
    display: inline-flex;
    align-items: center;
    gap: 10px;
    text-decoration: none;
}

.btn-partner-cta:hover {
    transform: translateY(-3px);
    box-shadow: 0 14px 32px rgba(224, 105, 48, 0.45);
    color: #ffffff !important;
}

.btn-partner-wa {
    background: #ffffff;
    border: 2px solid #25d366;
    color: #15803d !important;
    font-weight: 800;
    font-size: 15px;
    padding: 13px 28px;
    border-radius: 30px;
    transition: all 0.3s cubic-bezier(0.16, 1, 0.3, 1);
    display: inline-flex;
    align-items: center;
    gap: 10px;
    text-decoration: none;
    box-shadow: 0 4px 14px rgba(37, 211, 102, 0.15);
}

.btn-partner-wa:hover {
    background: #25d366;
    color: #ffffff !important;
    transform: translateY(-3px);
    box-shadow: 0 10px 24px rgba(37, 211, 102, 0.35);
}

/* Stat Box Clean */
.stat-box-clean {
    border-radius: 16px;
    padding: 16px 18px;
    transition: all 0.3s ease;
    border: 1.5px solid transparent;
}
.stat-box-clean:hover { transform: translateY(-3px); }

.stat-box-orange { background: #fff7ed; border-color: #fed7aa; }
.stat-box-orange .num { color: #c2410c; }
.stat-box-blue { background: #eff6ff; border-color: #bfdbfe; }
.stat-box-blue .num { color: #1d4ed8; }
.stat-box-green { background: #ecfdf5; border-color: #a7f3d0; }
.stat-box-green .num { color: #047857; }

.stat-box-clean .num { font-size: 1.55rem; font-weight: 900; line-height: 1.1; margin-bottom: 4px; }
.stat-box-clean .lbl { font-size: 0.82rem; font-weight: 700; color: #475569; line-height: 1.35; }

/* Hero Right Card */
.hero-right-glass-card {
    background: #ffffff;
    border: 1.5px solid #e2e8f0;
    border-radius: 24px;
    padding: 34px 30px;
    box-shadow: 0 20px 50px rgba(15, 23, 42, 0.08);
    position: relative;
    overflow: hidden;
}
.hero-right-glass-card::before {
    content: '';
    position: absolute;
    top: 0; left: 0; right: 0;
    height: 6px;
    background: linear-gradient(90deg, #e06930, #f58220, #6366f1, #10b981);
}

.hero-perk-item {
    display: flex;
    align-items: flex-start;
    gap: 14px;
    padding: 10px 0;
    border-bottom: 1px dashed #f1f5f9;
}
.hero-perk-item:last-child { border-bottom: none; }
.hero-perk-icon {
    width: 38px;
    height: 38px;
    border-radius: 10px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 16px;
    flex-shrink: 0;
}

/* 2. VALUE PROPOSITION BAR */
.partner-value-bar-clean {
    background: #f8fafc;
    border-top: 1px solid #e2e8f0;
    border-bottom: 1px solid #e2e8f0;
    padding: 30px 0;
}
.value-card-light {
    background: #ffffff;
    border: 1px solid #e2e8f0;
    border-radius: 16px;
    padding: 18px;
    display: flex;
    align-items: center;
    gap: 16px;
    height: 100%;
    transition: all 0.3s ease;
    box-shadow: 0 4px 10px rgba(15, 23, 42, 0.02);
}
.value-card-light:hover {
    transform: translateY(-3px);
    box-shadow: 0 10px 20px rgba(15, 23, 42, 0.06);
    border-color: #cbd5e1;
}
.value-card-light .icon-box {
    width: 50px;
    height: 50px;
    border-radius: 14px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 22px;
    flex-shrink: 0;
}
.value-card-light .title { font-size: 15px; font-weight: 800; color: #0f172a; margin-bottom: 3px; }
.value-card-light .desc { font-size: 12.5px; color: #64748b; line-height: 1.4; margin-bottom: 0; }

/* 3. SECTION BADGES & TITLES */
.sec-badge-colorful {
    display: inline-block;
    padding: 6px 16px;
    border-radius: 30px;
    font-weight: 800;
    font-size: 12px;
    text-transform: uppercase;
    letter-spacing: 1px;
    margin-bottom: 12px;
    background: #fff7ed;
    color: #ea580c;
    border: 1px solid #ffedd5;
}
.sec-title-clean {
    font-size: 2.5rem;
    font-weight: 900;
    color: #0f172a;
    line-height: 1.25;
    margin-bottom: 14px;
}
.sec-subtitle-clean {
    font-size: 1.1rem;
    color: #64748b;
    max-width: 740px;
    margin: 0 auto 55px;
    line-height: 1.65;
}

/* 4. COMPARISON MATRIX GRID (WHAT MAKES DIGIFY DIFFERENT) */
.diff-sec-clean {
    padding: 85px 0;
    background: #ffffff;
}
.diff-grid-table {
    background: #ffffff;
    border: 1.5px solid #e2e8f0;
    border-radius: 20px;
    overflow: hidden;
    box-shadow: 0 10px 30px rgba(15, 23, 42, 0.05);
}
.diff-table-header {
    background: linear-gradient(135deg, #0f172a 0%, #1e293b 100%);
    color: #ffffff;
    padding: 20px 24px;
    font-weight: 800;
    font-size: 1.1rem;
}
.diff-row {
    display: flex;
    align-items: center;
    border-bottom: 1px solid #f1f5f9;
    transition: background 0.2s ease;
}
.diff-row:last-child { border-bottom: none; }
.diff-row:hover { background: #f8fafc; }
.diff-col-strength {
    width: 32%;
    padding: 20px 24px;
    font-weight: 800;
    color: #e06930;
    font-size: 1rem;
    border-right: 1px solid #f1f5f9;
    display: flex;
    align-items: center;
    gap: 12px;
}
.diff-col-value {
    width: 68%;
    padding: 20px 24px;
    color: #334155;
    font-size: 0.95rem;
    line-height: 1.6;
}

/* 5. VIBRANT CATEGORY CARDS */
.partner-categories-sec-clean {
    padding: 85px 0 95px;
    background: #f8fafc;
    border-top: 1px solid #e2e8f0;
    border-bottom: 1px solid #e2e8f0;
}
.cat-card-vibrant {
    background: #ffffff;
    border: 1.5px solid #e2e8f0;
    border-radius: 20px;
    padding: 28px 26px;
    height: 100%;
    display: flex;
    flex-direction: column;
    transition: all 0.35s cubic-bezier(0.16, 1, 0.3, 1);
    position: relative;
    overflow: hidden;
    box-shadow: 0 4px 16px rgba(15, 23, 42, 0.04);
}
.cat-card-vibrant::before {
    content: '';
    position: absolute;
    top: 0; left: 0; right: 0;
    height: 4px;
    background: #e2e8f0;
    transition: height 0.25s ease;
}
.cat-card-vibrant:hover {
    transform: translateY(-6px);
    border-color: transparent;
    box-shadow: 0 20px 40px rgba(15, 23, 42, 0.1);
}
.cat-card-vibrant:hover::before { height: 6px; }

/* Themes */
.theme-orange::before { background: linear-gradient(90deg, #f97316, #ea580c); }
.theme-orange .cat-icon-wrap { background: #fff7ed; color: #ea580c; border: 1.5px solid #fed7aa; }
.theme-orange .cat-pill { background: #fff7ed; color: #c2410c; }
.theme-indigo::before { background: linear-gradient(90deg, #6366f1, #4f46e5); }
.theme-indigo .cat-icon-wrap { background: #eef2ff; color: #4f46e5; border: 1.5px solid #c7d2fe; }
.theme-indigo .cat-pill { background: #eef2ff; color: #3730a3; }
.theme-emerald::before { background: linear-gradient(90deg, #10b981, #059669); }
.theme-emerald .cat-icon-wrap { background: #ecfdf5; color: #059669; border: 1.5px solid #a7f3d0; }
.theme-emerald .cat-pill { background: #ecfdf5; color: #065f46; }
.theme-blue::before { background: linear-gradient(90deg, #0ea5e9, #0284c7); }
.theme-blue .cat-icon-wrap { background: #f0f9ff; color: #0284c7; border: 1.5px solid #bae6fd; }
.theme-blue .cat-pill { background: #f0f9ff; color: #075985; }
.theme-amber::before { background: linear-gradient(90deg, #f59e0b, #d97706); }
.theme-amber .cat-icon-wrap { background: #fffbeb; color: #d97706; border: 1.5px solid #fde68a; }
.theme-amber .cat-pill { background: #fffbeb; color: #92400e; }
.theme-purple::before { background: linear-gradient(90deg, #8b5cf6, #7c3aed); }
.theme-purple .cat-icon-wrap { background: #f5f3ff; color: #7c3aed; border: 1.5px solid #ddd6fe; }
.theme-purple .cat-pill { background: #f5f3ff; color: #5b21b6; }
.theme-rose::before { background: linear-gradient(90deg, #f43f5e, #e11d48); }
.theme-rose .cat-icon-wrap { background: #fff1f2; color: #e11d48; border: 1.5px solid #fecdd3; }
.theme-rose .cat-pill { background: #fff1f2; color: #9f1239; }
.theme-cyan::before { background: linear-gradient(90deg, #06b6d4, #0891b2); }
.theme-cyan .cat-icon-wrap { background: #ecfeff; color: #0891b2; border: 1.5px solid #a5f3fc; }
.theme-cyan .cat-pill { background: #ecfeff; color: #155e75; }
.theme-pink::before { background: linear-gradient(90deg, #d946ef, #c026d3); }
.theme-pink .cat-icon-wrap { background: #fdf4ff; color: #c026d3; border: 1.5px solid #f5d0fe; }
.theme-pink .cat-pill { background: #fdf4ff; color: #86198f; }

.cat-icon-wrap {
    width: 54px;
    height: 54px;
    border-radius: 16px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 22px;
    flex-shrink: 0;
    margin-bottom: 16px;
}
.cat-pill {
    display: inline-block;
    font-size: 11px;
    font-weight: 800;
    text-transform: uppercase;
    letter-spacing: 0.6px;
    padding: 3px 10px;
    border-radius: 20px;
    margin-bottom: 8px;
}
.cat-title-clean { font-size: 1.2rem; font-weight: 850; color: #0f172a; margin-bottom: 8px; }
.cat-body-clean { font-size: 0.92rem; color: #475569; line-height: 1.6; margin-bottom: 16px; flex-grow: 1; }

.cat-link-vibrant {
    font-size: 0.9rem;
    font-weight: 800;
    color: #e06930;
    text-decoration: none;
    display: inline-flex;
    align-items: center;
    gap: 8px;
    transition: gap 0.2s ease;
}
.cat-link-vibrant:hover { gap: 12px; color: #c2410c; }

/* 6. WHAT CAN YOU SELL THROUGH DIGIFY SECTION */
.sell-sec-clean {
    padding: 85px 0;
    background: #ffffff;
}
.sell-card-vibrant {
    background: #ffffff;
    border: 1.5px solid #e2e8f0;
    border-radius: 20px;
    padding: 26px;
    height: 100%;
    transition: all 0.3s ease;
    box-shadow: 0 4px 12px rgba(15, 23, 42, 0.03);
}
.sell-card-vibrant:hover {
    transform: translateY(-5px);
    border-color: #e06930;
    box-shadow: 0 16px 36px rgba(224, 105, 48, 0.12);
}
.sell-icon-box {
    width: 48px;
    height: 48px;
    border-radius: 12px;
    background: #fff7ed;
    color: #ea580c;
    border: 1px solid #fed7aa;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 20px;
    margin-bottom: 16px;
}
.sell-card-title { font-size: 1.25rem; font-weight: 850; color: #0f172a; margin-bottom: 10px; }
.sell-usecase-badge {
    display: inline-block;
    background: #eff6ff;
    color: #1d4ed8;
    border: 1px solid #bfdbfe;
    font-weight: 800;
    font-size: 11px;
    padding: 3px 10px;
    border-radius: 20px;
    margin-bottom: 12px;
}
.sell-card-desc { font-size: 0.92rem; color: #475569; line-height: 1.6; }

/* 7. RESELLER BENEFITS GRID */
.benefits-sec-clean {
    padding: 85px 0;
    background: #f8fafc;
    border-top: 1px solid #e2e8f0;
    border-bottom: 1px solid #e2e8f0;
}
.benefit-box-vibrant {
    background: #ffffff;
    border: 1.5px solid #e2e8f0;
    border-radius: 18px;
    padding: 24px 20px;
    height: 100%;
    display: flex;
    align-items: flex-start;
    gap: 16px;
    transition: all 0.3s ease;
}
.benefit-box-vibrant:hover {
    transform: translateY(-4px);
    border-color: #cbd5e1;
    box-shadow: 0 12px 28px rgba(15, 23, 42, 0.06);
}
.benefit-icon {
    width: 44px;
    height: 44px;
    border-radius: 12px;
    background: #ecfdf5;
    color: #059669;
    border: 1px solid #a7f3d0;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 18px;
    flex-shrink: 0;
}
.benefit-title { font-size: 1.05rem; font-weight: 850; color: #0f172a; margin-bottom: 4px; }
.benefit-desc { font-size: 0.88rem; color: #64748b; line-height: 1.5; margin-bottom: 0; }

/* 8. 7-STEP PARTNERSHIP WORKFLOW */
.workflow-sec-clean {
    padding: 85px 0;
    background: #ffffff;
}
.workflow-card {
    background: #ffffff;
    border: 1.5px solid #e2e8f0;
    border-radius: 18px;
    padding: 22px;
    height: 100%;
    position: relative;
    transition: all 0.3s ease;
}
.workflow-card:hover {
    transform: translateY(-4px);
    border-color: #e06930;
    box-shadow: 0 12px 28px rgba(224, 105, 48, 0.1);
}
.wf-step-num {
    width: 32px;
    height: 32px;
    border-radius: 50%;
    background: linear-gradient(135deg, #e06930 0%, #f58220 100%);
    color: #ffffff;
    font-weight: 900;
    font-size: 13px;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-bottom: 12px;
}
.wf-title { font-size: 1.05rem; font-weight: 850; color: #0f172a; margin-bottom: 6px; }
.wf-desc { font-size: 0.88rem; color: #64748b; line-height: 1.5; margin-bottom: 0; }

/* 9. DIGIFY SUPPORT PILLARS */
.support-sec-clean {
    padding: 85px 0;
    background: #f8fafc;
    border-top: 1px solid #e2e8f0;
    border-bottom: 1px solid #e2e8f0;
}
.support-pillar-card {
    background: #ffffff;
    border: 1.5px solid #e2e8f0;
    border-radius: 16px;
    padding: 20px 18px;
    height: 100%;
    display: flex;
    align-items: center;
    gap: 14px;
    transition: all 0.3s ease;
}
.support-pillar-card:hover {
    transform: translateY(-3px);
    border-color: #6366f1;
    box-shadow: 0 10px 24px rgba(99, 102, 241, 0.08);
}
.support-icon {
    width: 42px;
    height: 42px;
    border-radius: 10px;
    background: #eef2ff;
    color: #4f46e5;
    border: 1px solid #c7d2fe;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 18px;
    flex-shrink: 0;
}

/* 10. PARTNER APPLICATION FORM */
.partner-form-sec-clean {
    padding: 85px 0 95px;
    background: #ffffff;
}
.form-wrapper-clean {
    background: #ffffff;
    border: 2px solid #e2e8f0;
    border-radius: 24px;
    padding: 45px 40px;
    box-shadow: 0 20px 50px rgba(15, 23, 42, 0.08);
    position: relative;
}
.form-wrapper-clean::before {
    content: '';
    position: absolute;
    top: 0; left: 0; right: 0;
    height: 6px;
    border-radius: 24px 24px 0 0;
    background: linear-gradient(90deg, #e06930, #f58220, #6366f1, #10b981);
}
.form-wrapper-clean .form-label { font-size: 0.88rem; font-weight: 800; color: #1e293b; margin-bottom: 7px; }
.form-wrapper-clean .form-control,
.form-wrapper-clean .form-select {
    background: #f8fafc;
    border: 1.5px solid #cbd5e1;
    color: #0f172a;
    border-radius: 12px;
    padding: 13px 16px;
    font-size: 0.95rem;
    transition: all 0.2s ease;
}
.form-wrapper-clean .form-control:focus,
.form-wrapper-clean .form-select:focus {
    background: #ffffff;
    border-color: #e06930;
    box-shadow: 0 0 0 4px rgba(224, 105, 48, 0.15);
    outline: none;
}
.btn-submit-vibrant {
    background: linear-gradient(135deg, #e06930 0%, #f58220 100%);
    color: #ffffff;
    font-weight: 850;
    font-size: 16px;
    padding: 16px 34px;
    border-radius: 14px;
    border: none;
    width: 100%;
    letter-spacing: 0.5px;
    box-shadow: 0 10px 25px rgba(224, 105, 48, 0.35);
    transition: all 0.3s ease;
}
.btn-submit-vibrant:hover {
    transform: translateY(-2px);
    box-shadow: 0 14px 30px rgba(224, 105, 48, 0.45);
    color: #ffffff;
}

/* 11. FAQ ACCORDION */
.partner-faq-sec-clean { padding: 85px 0; background: #f8fafc; border-top: 1px solid #e2e8f0; }
.accordion-clean .accordion-item {
    border: 1.5px solid #e2e8f0;
    border-radius: 14px !important;
    margin-bottom: 14px;
    overflow: hidden;
}
.accordion-clean .accordion-button {
    font-weight: 800; font-size: 1.05rem; color: #0f172a; background: #ffffff; padding: 20px 24px; border: none; box-shadow: none !important;
}
.accordion-clean .accordion-button:not(.collapsed) { background: #fff7ed; color: #ea580c; }
.accordion-clean .accordion-body { padding: 20px 24px; color: #475569; font-size: 0.94rem; line-height: 1.7; background: #ffffff; }

/* 12. BOTTOM CTA STRIP */
.bottom-cta-vibrant {
    background: linear-gradient(135deg, #e06930 0%, #f58220 50%, #f59e0b 100%);
    color: #ffffff;
    padding: 70px 0;
}

@media (max-width: 991px) {
    .partner-hero-title-clean { font-size: 2.2rem; }
    .diff-col-strength { width: 40%; }
    .diff-col-value { width: 60%; }
    .form-wrapper-clean { padding: 30px 22px; }
}
@media (max-width: 576px) {
    .partner-hero-clean { padding: 50px 0 60px; }
    .partner-hero-title-clean { font-size: 1.85rem; }
    .diff-row { flex-direction: column; align-items: flex-start; }
    .diff-col-strength, .diff-col-value { width: 100%; border-right: none; }
    .diff-col-strength { border-bottom: 1px dashed #e2e8f0; padding-bottom: 10px; }
    .btn-partner-cta, .btn-partner-wa { width: 100%; justify-content: center; }
}
</style>

<div class="partner-page-wrap">

    <!-- 1. HERO BANNER (CLEAN WHITE BACKGROUND WITH RADIANT ACCENTS) -->
    <section class="partner-hero-clean">
        <div class="container">
            <div class="row align-items-center g-5">
                <div class="col-lg-7">
                    <div class="partner-pill-badge-vibrant">
                        <i class="fa-solid fa-handshake-angle text-warning fs-6"></i> DIGIFY SOFT SOLUTIONS RESELLER &amp; CHANNEL PARTNER PROGRAM
                    </div>
                    <h1 class="partner-hero-title-clean">
                        Build a Profitable Software Business <br>
                        <span class="gradient-text-vibrant">Without Building Software.</span>
                    </h1>
                    <p class="partner-hero-desc-clean">
                        Partner with Digify to offer <strong>ERP, CRM, POS, AI and business automation solutions</strong> to your customers. Your customers already trust you for technology, accounting, hardware, consulting or business services. Digify enables you to add a complete portfolio of business software solutions without investing in your own product development team.
                    </p>

                    <div class="d-flex flex-wrap gap-3 mb-4 pb-2">
                        <a href="#apply-form" class="btn-partner-cta">
                            <i class="fa-solid fa-paper-plane"></i> Apply as Reseller Partner
                        </a>
                        <a href="https://wa.me/917425016636?text=Hi%20Digify%20Team,%20I%20want%20to%20know%20more%20about%20the%20Digify%20Reseller%20Partner%20Program." target="_blank" class="btn-partner-wa">
                            <i class="fa-brands fa-whatsapp fs-5"></i> Chat on WhatsApp
                        </a>
                    </div>

                    <!-- Vibrant Colorful Stat Pills -->
                    <div class="row g-3 pt-2">
                        <div class="col-sm-4 col-12">
                            <div class="stat-box-clean stat-box-orange">
                                <div class="num">1 Partner</div>
                                <div class="lbl">Multiple Business Solutions</div>
                            </div>
                        </div>
                        <div class="col-sm-4 col-12">
                            <div class="stat-box-clean stat-box-blue">
                                <div class="num">Recurring</div>
                                <div class="lbl">Long-Term Software Revenue</div>
                            </div>
                        </div>
                        <div class="col-sm-4 col-12">
                            <div class="stat-box-clean stat-box-green">
                                <div class="num">Zero Cost</div>
                                <div class="lbl">No In-House Dev Team Needed</div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-5">
                    <!-- Hero Right Showcase Card -->
                    <div class="hero-right-glass-card">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <span class="badge" style="background: #fff7ed; color: #ea580c; border: 1px solid #ffedd5; font-weight: 800; font-size: 11px;">RESELLER ALLIANCE</span>
                            <span class="text-success small fw-bold"><i class="fa-solid fa-circle-dot me-1"></i> Applications Open</span>
                        </div>
                        <h4 class="fw-bold mb-3 text-dark" style="font-size: 1.3rem;">Our Core USP</h4>
                        <div class="p-3 mb-3 rounded-3" style="background: #f8fafc; border: 1px solid #e2e8f0;">
                            <div class="fw-bold text-dark mb-1" style="font-size: 1.05rem; color: #e06930 !important;">One Partner. Multiple Business Solutions. Recurring Revenue.</div>
                            <div class="small text-muted" style="line-height: 1.5;">
                                Digify Soft Solutions provides customizable ERP, CRM, POS, HRMS, Accounting, AI and automation solutions for SMEs, manufacturers, distributors, retailers, restaurants and service businesses.
                            </div>
                        </div>

                        <div class="hero-perk-item">
                            <div class="hero-perk-icon" style="background: #ecfdf5; color: #059669;">
                                <i class="fa-solid fa-layer-group"></i>
                            </div>
                            <div>
                                <div class="fw-bold text-dark small">Complete Product Suite</div>
                                <div class="small text-muted">ERP, POS, CRM, HRMS, Accounting, Websites, WhatsApp bots, OCR &amp; AI.</div>
                            </div>
                        </div>

                        <div class="hero-perk-item">
                            <div class="hero-perk-icon" style="background: #eff6ff; color: #2563eb;">
                                <i class="fa-solid fa-sliders"></i>
                            </div>
                            <div>
                                <div class="fw-bold text-dark small">Highly Customisable Solutions</div>
                                <div class="small text-muted">Adapt workflows, reports, approvals, dashboards and integrations for each client.</div>
                            </div>
                        </div>

                        <div class="hero-perk-item">
                            <div class="hero-perk-icon" style="background: #fff7ed; color: #ea580c;">
                                <i class="fa-solid fa-brain"></i>
                            </div>
                            <div>
                                <div class="fw-bold text-dark small">AI-Ready Platform (AutomateX.ai)</div>
                                <div class="small text-muted">AI-powered forecasting, automated alerts, and natural-language business insights.</div>
                            </div>
                        </div>

                        <div class="mt-3 pt-3 border-top text-center">
                            <span class="small text-muted">Contact Partner Desk Directly:</span>
                            <div class="fw-bold mt-1">
                                <a href="tel:+917425016636" class="text-dark text-decoration-none fs-6">
                                    <i class="fa-solid fa-phone text-warning me-1"></i> +91 74250 16636
                                </a>
                                <span class="mx-2 text-muted">|</span>
                                <a href="mailto:support@digifysoft.in" class="text-dark text-decoration-none fs-6">
                                    <i class="fa-solid fa-envelope text-primary me-1"></i> support@digifysoft.in
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 2. VALUE PROPOSITION BAR -->
    <div class="partner-value-bar-clean">
        <div class="container">
            <div class="row g-3">
                <div class="col-lg-3 col-sm-6">
                    <div class="value-card-light">
                        <div class="icon-box" style="background: #ecfdf5; color: #059669; border: 1px solid #a7f3d0;">
                            <i class="fa-solid fa-chart-line"></i>
                        </div>
                        <div>
                            <div class="title">Recurring Revenue</div>
                            <div class="desc">Subscriptions, renewals, add-ons &amp; upgrades.</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="value-card-light">
                        <div class="icon-box" style="background: #eff6ff; color: #2563eb; border: 1px solid #bfdbfe;">
                            <i class="fa-solid fa-cubes"></i>
                        </div>
                        <div>
                            <div class="title">Broad Software Suite</div>
                            <div class="desc">ERP, POS, CRM, HRMS, AI &amp; Automation.</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="value-card-light">
                        <div class="icon-box" style="background: #fff7ed; color: #ea580c; border: 1px solid #fed7aa;">
                            <i class="fa-solid fa-sliders"></i>
                        </div>
                        <div>
                            <div class="title">Customisable Workflows</div>
                            <div class="desc">Tailored to each customer's process.</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="value-card-light">
                        <div class="icon-box" style="background: #f5f3ff; color: #7c3aed; border: 1px solid #ddd6fe;">
                            <i class="fa-solid fa-robot"></i>
                        </div>
                        <div>
                            <div class="title">AutomateX.ai Layer</div>
                            <div class="desc">AI-driven analytics &amp; OCR bill scanning.</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- 3. WHAT MAKES DIGIFY DIFFERENT? (COMPARATIVE ADVANTAGE GRID) -->
    <section class="diff-sec-clean">
        <div class="container">
            <div class="text-center">
                <span class="sec-badge-colorful"><i class="fa-solid fa-star me-1"></i> Differentiators</span>
                <h2 class="sec-title-clean">What Makes Digify Different?</h2>
                <p class="sec-subtitle-clean">
                    Discover how Digify Soft Solutions provides unmatched value to your customers while building a sustainable software business for you.
                </p>
            </div>

            <div class="diff-grid-table">
                <div class="diff-table-header d-none d-md-flex">
                    <div style="width: 32%;">Digify Strength</div>
                    <div style="width: 68%;">Value to Customers &amp; Resellers</div>
                </div>

                <div class="diff-row">
                    <div class="diff-col-strength">
                        <i class="fa-solid fa-box-archive"></i> Broad Product Portfolio
                    </div>
                    <div class="diff-col-value">
                        ERP, CRM, POS, Manufacturing, Distribution, HRMS, Accounting, Websites, WhatsApp bots, OCR and AI automation.
                    </div>
                </div>

                <div class="diff-row">
                    <div class="diff-col-strength">
                        <i class="fa-solid fa-gears"></i> Customisable Solutions
                    </div>
                    <div class="diff-col-value">
                        Adapt workflows, reports, approvals, dashboards and integrations to suit each customer's exact operational requirements.
                    </div>
                </div>

                <div class="diff-row">
                    <div class="diff-col-strength">
                        <i class="fa-solid fa-coins"></i> Affordable for SMEs
                    </div>
                    <div class="diff-col-value">
                        Practical, enterprise-grade solutions for growing businesses that find large platforms expensive or overly complex.
                    </div>
                </div>

                <div class="diff-row">
                    <div class="diff-col-strength">
                        <i class="fa-solid fa-wand-magic-sparkles"></i> AI-Ready Platform
                    </div>
                    <div class="diff-col-value">
                        AutomateX.ai adds AI-powered analysis, forecasting, automated alerts, and natural-language business insights.
                    </div>
                </div>

                <div class="diff-row">
                    <div class="diff-col-strength">
                        <i class="fa-solid fa-network-wired"></i> Connected Ecosystem
                    </div>
                    <div class="diff-col-value">
                        Seamlessly integrate websites, WhatsApp, ERP, Tally, portals and other platforms where technically feasible.
                    </div>
                </div>

                <div class="diff-row">
                    <div class="diff-col-strength">
                        <i class="fa-solid fa-industry"></i> Industry-Focused Workflows
                    </div>
                    <div class="diff-col-value">
                        Pre-built specialized solutions for manufacturing, trading, retail, distribution, restaurants, and service businesses.
                    </div>
                </div>

                <div class="diff-row">
                    <div class="diff-col-strength">
                        <i class="fa-solid fa-arrows-rotate"></i> Recurring Revenue Opportunity
                    </div>
                    <div class="diff-col-value">
                        Build long-term value through subscriptions, annual renewals, add-on modules, upgrades, and consulting support.
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 4. WHO CAN BECOME A DIGIFY RESELLER PARTNER? (9 TARGET CATEGORIES) -->
    <section class="partner-categories-sec-clean" id="categories">
        <div class="container">
            <div class="text-center">
                <span class="sec-badge-colorful"><i class="fa-solid fa-users-gear me-1"></i> Partner Ecosystem</span>
                <h2 class="sec-title-clean">Who Can Become a Digify Reseller Partner?</h2>
                <p class="sec-subtitle-clean">
                    Whether you consult, sell hardware, implement software, or advise businesses—Digify helps you monetize your relationships.
                </p>
            </div>

            <div class="row g-4">

                <!-- 1. Tally & Accounting Software Consultants -->
                <div class="col-lg-4 col-md-6">
                    <div class="cat-card-vibrant theme-orange">
                        <div class="cat-icon-wrap"><i class="fa-solid fa-calculator"></i></div>
                        <span class="cat-pill">Accounting Extension</span>
                        <h3 class="cat-title-clean">Tally, Busy &amp; Vyapar Consultants</h3>
                        <div class="cat-body-clean">
                            Provide your accounting software clients with cloud POS, production ERP, warehouse management, and advanced automation while retaining Tally integration.
                        </div>
                        <a href="#apply-form" class="cat-link-vibrant">Partner with Us <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>

                <!-- 2. IT Solution Providers & System Integrators -->
                <div class="col-lg-4 col-md-6">
                    <div class="cat-card-vibrant theme-indigo">
                        <div class="cat-icon-wrap"><i class="fa-solid fa-server"></i></div>
                        <span class="cat-pill">System Integration</span>
                        <h3 class="cat-title-clean">IT Providers &amp; System Integrators</h3>
                        <div class="cat-body-clean">
                            Deliver complete turnkey technology projects by offering Digify ERP and POS software alongside your cloud, server, and network infrastructure.
                        </div>
                        <a href="#apply-form" class="cat-link-vibrant">Partner with Us <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>

                <!-- 3. Hardware, Barcode & POS Dealers -->
                <div class="col-lg-4 col-md-6">
                    <div class="cat-card-vibrant theme-blue">
                        <div class="cat-icon-wrap"><i class="fa-solid fa-print"></i></div>
                        <span class="cat-pill">Hardware Bundling</span>
                        <h3 class="cat-title-clean">Computer, Hardware &amp; POS Dealers</h3>
                        <div class="cat-body-clean">
                            Bundle Digify retail and restaurant POS with your computers, thermal printers, barcode scanners, cash drawers, and handheld mobile devices.
                        </div>
                        <a href="#apply-form" class="cat-link-vibrant">Partner with Us <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>

                <!-- 4. Digital Marketing & Web Agencies -->
                <div class="col-lg-4 col-md-6">
                    <div class="cat-card-vibrant theme-cyan">
                        <div class="cat-icon-wrap"><i class="fa-solid fa-code"></i></div>
                        <span class="cat-pill">Web &amp; E-Commerce</span>
                        <h3 class="cat-title-clean">Web Agencies &amp; Marketers</h3>
                        <div class="cat-body-clean">
                            Expand from website development into full business software integration, connecting e-commerce stores directly into ERP &amp; inventory.
                        </div>
                        <a href="#apply-form" class="cat-link-vibrant">Partner with Us <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>

                <!-- 5. Business Consultants & Process Advisors -->
                <div class="col-lg-4 col-md-6">
                    <div class="cat-card-vibrant theme-purple">
                        <div class="cat-icon-wrap"><i class="fa-solid fa-chart-diagram"></i></div>
                        <span class="cat-pill">Process Advisory</span>
                        <h3 class="cat-title-clean">Business Consultants &amp; Advisors</h3>
                        <div class="cat-body-clean">
                            Help your clients streamline operations, eliminate stock leakage, improve visibility, and implement scalable automated workflows.
                        </div>
                        <a href="#apply-form" class="cat-link-vibrant">Partner with Us <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>

                <!-- 6. Chartered Accountants & Finance Consultants -->
                <div class="col-lg-4 col-md-6">
                    <div class="cat-card-vibrant theme-emerald">
                        <div class="cat-icon-wrap"><i class="fa-solid fa-scale-balanced"></i></div>
                        <span class="cat-pill">Audit &amp; Finance</span>
                        <h3 class="cat-title-clean">Chartered Accountants &amp; CAs</h3>
                        <div class="cat-body-clean">
                            Recommend audit-ready ERP and POS platforms to your SME client base for streamlined GST filing, e-invoicing, and financial compliance.
                        </div>
                        <a href="#apply-form" class="cat-link-vibrant">Partner with Us <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>

                <!-- 7. Industry Associations & Trade Consultants -->
                <div class="col-lg-4 col-md-6">
                    <div class="cat-card-vibrant theme-amber">
                        <div class="cat-icon-wrap"><i class="fa-solid fa-building-user"></i></div>
                        <span class="cat-pill">Trade Networks</span>
                        <h3 class="cat-title-clean">Industry Associations &amp; Trade Advisors</h3>
                        <div class="cat-body-clean">
                            Bring digital transformation and industry-specific ERP/POS tools to business clusters, manufacturing hubs, and trade association members.
                        </div>
                        <a href="#apply-form" class="cat-link-vibrant">Partner with Us <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>

                <!-- 8. ERP Implementation & Software Resellers -->
                <div class="col-lg-4 col-md-6">
                    <div class="cat-card-vibrant theme-rose">
                        <div class="cat-icon-wrap"><i class="fa-solid fa-laptop-code"></i></div>
                        <span class="cat-pill">Software Resale</span>
                        <h3 class="cat-title-clean">ERP Implementation &amp; Software Resellers</h3>
                        <div class="cat-body-clean">
                            Offer mid-market clients a flexible, fast-implementing ERP solution that delivers high margin software renewals and implementation services.
                        </div>
                        <a href="#apply-form" class="cat-link-vibrant">Partner with Us <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>

                <!-- 9. Tech Entrepreneurs & Business Networks -->
                <div class="col-lg-4 col-md-6">
                    <div class="cat-card-vibrant theme-pink">
                        <div class="cat-icon-wrap"><i class="fa-solid fa-rocket"></i></div>
                        <span class="cat-pill">Regional Entrepreneurs</span>
                        <h3 class="cat-title-clean">Local Technology Entrepreneurs</h3>
                        <div class="cat-body-clean">
                            Leverage your regional business relationships and local market access to launch a profitable software dealership backed by Digify tech.
                        </div>
                        <a href="#apply-form" class="cat-link-vibrant">Partner with Us <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- 5. WHAT CAN YOU SELL THROUGH DIGIFY? (PRODUCT PORTFOLIO & USE CASES) -->
    <section class="sell-sec-clean">
        <div class="container">
            <div class="text-center">
                <span class="sec-badge-colorful"><i class="fa-solid fa-shop me-1"></i> Solution Portfolio</span>
                <h2 class="sec-title-clean">What Can You Sell Through Digify?</h2>
                <p class="sec-subtitle-clean">
                    Offer a complete suite of business software designed for diverse industry verticals and business operational needs.
                </p>
            </div>

            <div class="row g-4">

                <!-- 1. Manufacturing ERP -->
                <div class="col-lg-4 col-md-6">
                    <div class="sell-card-vibrant">
                        <div class="sell-icon-box"><i class="fa-solid fa-industry"></i></div>
                        <h3 class="sell-card-title">Manufacturing ERP</h3>
                        <span class="sell-usecase-badge">Factory &amp; Production Use Case</span>
                        <p class="sell-card-desc">
                            Purchase, inventory, multi-level Bill of Materials (BOM), production planning, quality control, dispatch, accounting, HRMS and AI insights.
                        </p>
                    </div>
                </div>

                <!-- 2. Distributor & Dealer Management ERP -->
                <div class="col-lg-4 col-md-6">
                    <div class="sell-card-vibrant">
                        <div class="sell-icon-box"><i class="fa-solid fa-truck-ramp-box"></i></div>
                        <h3 class="sell-card-title">Distributor &amp; Dealer ERP</h3>
                        <span class="sell-usecase-badge">Wholesale &amp; Supply Chain Use Case</span>
                        <p class="sell-card-desc">
                            Imports, inventory, scheme management, dealer login portal, mobile orders, credit limits, invoicing, dispatch, receipts and sales team management.
                        </p>
                    </div>
                </div>

                <!-- 3. Retail POS & Inventory -->
                <div class="col-lg-4 col-md-6">
                    <div class="sell-card-vibrant">
                        <div class="sell-icon-box"><i class="fa-solid fa-cash-register"></i></div>
                        <h3 class="sell-card-title">Retail POS &amp; Inventory</h3>
                        <span class="sell-usecase-badge">Supermarkets, Fashion &amp; Stores</span>
                        <p class="sell-card-desc">
                            High-speed billing, barcode generation, stock management, purchase order, customer database, discount engines, loyalty programs and multi-branch reports.
                        </p>
                    </div>
                </div>

                <!-- 4. Restaurant & Cafe POS -->
                <div class="col-lg-4 col-md-6">
                    <div class="sell-card-vibrant">
                        <div class="sell-icon-box"><i class="fa-solid fa-utensils"></i></div>
                        <h3 class="sell-card-title">Restaurant &amp; Cafe POS</h3>
                        <span class="sell-usecase-badge">Food, Dining &amp; QSR Use Case</span>
                        <p class="sell-card-desc">
                            Table billing, digital menu, inventory management, recipe costing, kitchen order tickets (KOT) workflows, purchase and daily sales reports.
                        </p>
                    </div>
                </div>

                <!-- 5. CRM & Service Management -->
                <div class="col-lg-4 col-md-6">
                    <div class="sell-card-vibrant">
                        <div class="sell-icon-box"><i class="fa-solid fa-headset"></i></div>
                        <h3 class="sell-card-title">CRM &amp; Service Management</h3>
                        <span class="sell-usecase-badge">Sales Leads &amp; After-Sales Use Case</span>
                        <p class="sell-card-desc">
                            Lead generation &amp; follow-up tracking, field service management, complaint ticketing, warranty tracking and after-sales service workflows.
                        </p>
                    </div>
                </div>

                <!-- 6. AI & Automation (AutomateX.ai) -->
                <div class="col-lg-4 col-md-6">
                    <div class="sell-card-vibrant">
                        <div class="sell-icon-box"><i class="fa-solid fa-robot"></i></div>
                        <h3 class="sell-card-title">AI &amp; Business Automation</h3>
                        <span class="sell-usecase-badge">AutomateX.ai Intelligence Layer</span>
                        <p class="sell-card-desc">
                            OCR bill scanning, automated purchase entry, AI dashboards, natural-language business query answering, WhatsApp bots and automated workflows.
                        </p>
                    </div>
                </div>

                <!-- 7. Websites, Apps & Integrations -->
                <div class="col-lg-4 col-md-6">
                    <div class="sell-card-vibrant">
                        <div class="sell-icon-box"><i class="fa-solid fa-globe"></i></div>
                        <h3 class="sell-card-title">Websites, Apps &amp; Sync</h3>
                        <span class="sell-usecase-badge">Connected Digital Ecosystem</span>
                        <p class="sell-card-desc">
                            Custom business websites, customer portals, mobile apps and bi-directional integration between ERP, websites, Tally, WhatsApp and third-party APIs.
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- 6. BENEFITS FOR RESELLER PARTNERS (9 KEY POINTS) -->
    <section class="benefits-sec-clean">
        <div class="container">
            <div class="text-center">
                <span class="sec-badge-colorful"><i class="fa-solid fa-gift me-1"></i> Partner Advantages</span>
                <h2 class="sec-title-clean">Benefits for Reseller Partners</h2>
                <p class="sec-subtitle-clean">
                    Unlock sustainable growth and high margins by partnering with Digify Soft Solutions.
                </p>
            </div>

            <div class="row g-4">
                <div class="col-lg-4 col-md-6">
                    <div class="benefit-box-vibrant">
                        <div class="benefit-icon"><i class="fa-solid fa-folder-plus"></i></div>
                        <div>
                            <div class="benefit-title">Expand Your Product Portfolio</div>
                            <div class="benefit-desc">Offer business software alongside your existing hardware, accounting, consulting or digital services.</div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="benefit-box-vibrant">
                        <div class="benefit-icon"><i class="fa-solid fa-arrow-up-right-dots"></i></div>
                        <div>
                            <div class="benefit-title">Create Recurring Revenue</div>
                            <div class="benefit-desc">Earn through software subscriptions, renewals, add-on modules and agreed partner implementation services.</div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="benefit-box-vibrant">
                        <div class="benefit-icon"><i class="fa-solid fa-code-compare"></i></div>
                        <div>
                            <div class="benefit-title">No Need to Develop ERP</div>
                            <div class="benefit-desc">Leverage Digify's existing technology, pre-built modules, workflows, and development capabilities.</div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="benefit-box-vibrant">
                        <div class="benefit-icon"><i class="fa-solid fa-users"></i></div>
                        <div>
                            <div class="benefit-title">Sell to Existing Customers</div>
                            <div class="benefit-desc">Introduce ERP, POS, CRM, HRMS and AI solutions to businesses that already trust your services.</div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="benefit-box-vibrant">
                        <div class="benefit-icon"><i class="fa-solid fa-user-shield"></i></div>
                        <div>
                            <div class="benefit-title">Increase Customer Retention</div>
                            <div class="benefit-desc">Become a strategic technology advisor supporting your customers across core business functions.</div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="benefit-box-vibrant">
                        <div class="benefit-icon"><i class="fa-solid fa-diagram-next"></i></div>
                        <div>
                            <div class="benefit-title">Cross-Sell Multiple Solutions</div>
                            <div class="benefit-desc">Start with POS or accounting and expand into inventory, CRM, HRMS, websites, automation and AI.</div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="benefit-box-vibrant">
                        <div class="benefit-icon"><i class="fa-solid fa-headset"></i></div>
                        <div>
                            <div class="benefit-title">Technical Support from Digify</div>
                            <div class="benefit-desc">Receive product orientation, live demo support, implementation guidance and technical assistance.</div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="benefit-box-vibrant">
                        <div class="benefit-icon"><i class="fa-solid fa-sliders"></i></div>
                        <div>
                            <div class="benefit-title">Customisation Capability</div>
                            <div class="benefit-desc">Address customer-specific requirements through Digify's experienced development and implementation team.</div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="benefit-box-vibrant">
                        <div class="benefit-icon"><i class="fa-solid fa-certificate"></i></div>
                        <div>
                            <div class="benefit-title">Co-Branded &amp; White-Label</div>
                            <div class="benefit-desc">Explore suitable co-branded or white-label models based on business potential and mutual agreement.</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 7. HOW THE PARTNERSHIP CAN WORK (7-STEP WORKFLOW) -->
    <section class="workflow-sec-clean">
        <div class="container">
            <div class="text-center">
                <span class="sec-badge-colorful"><i class="fa-solid fa-route me-1"></i> Partnership Process</span>
                <h2 class="sec-title-clean">How the Partnership Works</h2>
                <p class="sec-subtitle-clean">A simple, transparent 7-step process from lead discovery to recurring earnings.</p>
            </div>

            <div class="row g-4">
                <div class="col-lg-3 col-md-6">
                    <div class="workflow-card">
                        <div class="wf-step-num">1</div>
                        <div class="wf-title">Identify Opportunity</div>
                        <div class="wf-desc">Partner identifies a potential customer or business software requirement within their network.</div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="workflow-card">
                        <div class="wf-step-num">2</div>
                        <div class="wf-title">Share Lead</div>
                        <div class="wf-desc">Partner shares the lead and basic customer requirements with the Digify Partner Desk.</div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="workflow-card">
                        <div class="wf-step-num">3</div>
                        <div class="wf-title">Demo &amp; Solution Mapping</div>
                        <div class="wf-desc">Digify supports lead qualification, product demonstration, and custom solution mapping.</div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="workflow-card">
                        <div class="wf-step-num">4</div>
                        <div class="wf-title">Joint Commercial Proposal</div>
                        <div class="wf-desc">A suitable commercial proposal is prepared jointly or by Digify based on the agreed model.</div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="workflow-card">
                        <div class="wf-step-num">5</div>
                        <div class="wf-title">Local Relationship &amp; Coordination</div>
                        <div class="wf-desc">Partner supports customer relationships, local coordination, and account management.</div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="workflow-card">
                        <div class="wf-step-num">6</div>
                        <div class="wf-title">Implementation &amp; Tech Support</div>
                        <div class="wf-desc">Digify manages configuration, custom development, setup, and ongoing technical support.</div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="workflow-card">
                        <div class="wf-step-num">7</div>
                        <div class="wf-title">Earn Recurring Revenue</div>
                        <div class="wf-desc">Partner earns agreed referral, reseller, implementation, or recurring revenue margins.</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 8. SUPPORT PROVIDED BY DIGIFY (8 SUPPORT PILLARS) -->
    <section class="support-sec-clean">
        <div class="container">
            <div class="text-center">
                <span class="sec-badge-colorful"><i class="fa-solid fa-hands-holding-child me-1"></i> Partner Enablement</span>
                <h2 class="sec-title-clean">Support Provided by Digify</h2>
                <p class="sec-subtitle-clean">We empower our partners with everything needed to close deals and serve clients effectively.</p>
            </div>

            <div class="row g-3">
                <div class="col-lg-3 col-md-6">
                    <div class="support-pillar-card">
                        <div class="support-icon"><i class="fa-solid fa-desktop"></i></div>
                        <div class="fw-bold text-dark small">Product presentations &amp; demo support</div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="support-pillar-card">
                        <div class="support-icon"><i class="fa-solid fa-file-powerpoint"></i></div>
                        <div class="fw-bold text-dark small">Industry-specific solution decks &amp; collateral</div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="support-pillar-card">
                        <div class="support-icon"><i class="fa-solid fa-user-graduate"></i></div>
                        <div class="fw-bold text-dark small">Partner onboarding &amp; product orientation</div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="support-pillar-card">
                        <div class="support-icon"><i class="fa-solid fa-clipboard-check"></i></div>
                        <div class="fw-bold text-dark small">Requirement discovery &amp; proposal assistance</div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="support-pillar-card">
                        <div class="support-icon"><i class="fa-solid fa-microchip"></i></div>
                        <div class="fw-bold text-dark small">Technical feasibility assessment</div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="support-pillar-card">
                        <div class="support-icon"><i class="fa-solid fa-code-merge"></i></div>
                        <div class="fw-bold text-dark small">Implementation &amp; customisation support</div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="support-pillar-card">
                        <div class="support-icon"><i class="fa-solid fa-book-open"></i></div>
                        <div class="fw-bold text-dark small">Training material &amp; customer handover</div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="support-pillar-card">
                        <div class="support-icon"><i class="fa-solid fa-rotate"></i></div>
                        <div class="fw-bold text-dark small">Ongoing product updates &amp; new features</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 9. PARTNER VALUE PROPOSITION STATEMENT -->
    <section class="py-5" style="background: linear-gradient(135deg, #0f172a 0%, #1e293b 100%); color: #ffffff;">
        <div class="container text-center py-4">
            <span class="badge mb-3 px-3 py-2" style="background: rgba(224, 105, 48, 0.2); color: #f97316; border: 1px solid rgba(224, 105, 48, 0.4); font-size: 12px; font-weight: 800;">PARTNER VALUE PROPOSITION</span>
            <h2 class="fw-bold mb-3" style="font-size: 2.3rem; color: #ffffff;">
                "You bring the relationships. We bring the technology."
            </h2>
            <p class="mx-auto text-light" style="max-width: 780px; font-size: 1.15rem; line-height: 1.7; opacity: 0.9;">
                With Digify as your technology partner, you can help businesses digitise operations, improve visibility, reduce manual work and make better decisions—while building a scalable software revenue stream for your own business.
            </p>
        </div>
    </section>

    <!-- 10. PARTNER REGISTRATION FORM -->
    <section class="partner-form-sec-clean" id="apply-form">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="text-center mb-4">
                        <span class="sec-badge-colorful"><i class="fa-solid fa-file-pen me-1"></i> Partner Onboarding</span>
                        <h2 class="sec-title-clean">Become a Digify Reseller Partner</h2>
                        <p class="sec-subtitle-clean ms-0 mb-4" style="max-width: 100%;">
                            Add powerful business software to your portfolio. Serve your customers better. Build recurring revenue. Contact us to discuss partnership opportunities, territories, industries and commercial models.
                        </p>
                    </div>

                    <?php if (!empty($msg)) echo $msg; ?>

                    <div class="form-wrapper-clean">
                        <form method="POST" action="partner-with-us.php#apply-form">
                            <input type="hidden" name="partner_apply" value="1">

                            <div class="row g-3">
                                <div class="col-md-6">
                                    <label class="form-label"><i class="fa-solid fa-user me-1 text-warning"></i> Full Name *</label>
                                    <input type="text" class="form-control" name="partner_name" placeholder="e.g. Rajesh Sharma" required>
                                </div>

                                <div class="col-md-6">
                                    <label class="form-label"><i class="fa-solid fa-building me-1 text-primary"></i> Company / Firm Name *</label>
                                    <input type="text" class="form-control" name="company_name" placeholder="e.g. Apex Tech Solutions / Sharma & Co." required>
                                </div>

                                <div class="col-md-6">
                                    <label class="form-label"><i class="fa-solid fa-phone me-1 text-success"></i> Mobile Number *</label>
                                    <input type="tel" class="form-control" name="mobile" placeholder="e.g. 9876543210" required>
                                </div>

                                <div class="col-md-6">
                                    <label class="form-label"><i class="fa-brands fa-whatsapp me-1 text-success"></i> WhatsApp Number</label>
                                    <input type="tel" class="form-control" name="whatsapp" placeholder="e.g. 9876543210">
                                </div>

                                <div class="col-md-6">
                                    <label class="form-label"><i class="fa-solid fa-envelope me-1 text-danger"></i> Email Address *</label>
                                    <input type="email" class="form-control" name="email" placeholder="e.g. contact@yourfirm.com" required>
                                </div>

                                <div class="col-md-6">
                                    <label class="form-label"><i class="fa-solid fa-briefcase me-1 text-indigo" style="color: #4f46e5;"></i> Partner Category *</label>
                                    <select class="form-select" name="partner_category" required>
                                        <option value="" disabled selected>-- Select Partner Category --</option>
                                        <option value="Tally / Busy / Vyapar Accounting Consultant">Tally, Busy, Vyapar &amp; Accounting Consultant</option>
                                        <option value="IT Solution Provider / System Integrator">IT Solution Provider &amp; System Integrator</option>
                                        <option value="Computer, Hardware, Barcode & POS Dealer">Computer, Hardware, Barcode &amp; POS Dealer</option>
                                        <option value="Digital Marketing & Web Agency">Digital Marketing &amp; Website Agency</option>
                                        <option value="Business Consultant & Process Advisor">Business Consultant &amp; Process Advisor</option>
                                        <option value="Chartered Accountant / Finance Consultant">Chartered Accountant &amp; Finance Consultant</option>
                                        <option value="Industry Association / Trade Consultant">Industry Association &amp; Trade Consultant</option>
                                        <option value="ERP Implementation & Software Reseller">ERP Implementation &amp; Software Reseller</option>
                                        <option value="Local Technology Entrepreneur">Local Technology Entrepreneur</option>
                                        <option value="Other Technology Partner">Other Partner Category</option>
                                    </select>
                                </div>

                                <div class="col-md-6">
                                    <label class="form-label"><i class="fa-solid fa-city me-1 text-info"></i> City / Primary Territory *</label>
                                    <input type="text" class="form-control" name="city" placeholder="e.g. Jaipur, Delhi NCR, Mumbai, Surat, Riyadh" required>
                                </div>

                                <div class="col-md-6">
                                    <label class="form-label"><i class="fa-solid fa-map-location-dot me-1 text-secondary"></i> State / Country *</label>
                                    <input type="text" class="form-control" name="state" placeholder="e.g. Rajasthan, UP, Maharashtra, KSA, UAE" required>
                                </div>

                                <div class="col-12">
                                    <label class="form-label"><i class="fa-solid fa-users me-1 text-dark"></i> Estimated Reach / Existing Client Base</label>
                                    <input type="text" class="form-control" name="client_base" placeholder="e.g. Active with 100+ retail clients / CA firm with 150 SME accounts">
                                </div>

                                <div class="col-12">
                                    <label class="form-label"><i class="fa-solid fa-message me-1 text-dark"></i> Additional Information / Partnership Intent</label>
                                    <textarea class="form-control" name="remarks" rows="3" placeholder="Tell us about your target industries, current product portfolio, or specific software requirements..."></textarea>
                                </div>

                                <div class="col-12 mt-4">
                                    <button type="submit" class="btn-submit-vibrant">
                                        <i class="fa-solid fa-paper-plane me-2"></i> Submit Partner Application
                                    </button>
                                </div>

                                <div class="col-12 text-center mt-3">
                                    <span class="small text-muted">
                                        <i class="fa-solid fa-shield-halved text-success me-1"></i> Official Digify Partner Desk: <a href="mailto:support@digifysoft.in" class="text-muted">support@digifysoft.in</a> | <a href="tel:+917425016636" class="text-muted">+91 74250 16636</a>
                                    </span>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 11. FAQ ACCORDION -->
    <section class="partner-faq-sec-clean">
        <div class="container">
            <div class="text-center">
                <span class="sec-badge-colorful"><i class="fa-solid fa-circle-question me-1"></i> Clarifications</span>
                <h2 class="sec-title-clean">Frequently Asked Questions</h2>
                <p class="sec-subtitle-clean">Common questions regarding partner agreements, client exclusivity, and payouts.</p>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="accordion accordion-clean" id="partnerFaqAccordion">

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="faqOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Is there any upfront fee or mandatory development investment required?
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="faqOne" data-bs-parent="#partnerFaqAccordion">
                                <div class="accordion-body">
                                    No. Partnering with Digify requires <strong>zero product development investment</strong>. Digify provides product orientation, demo environments, technical feasibility assessments, and full implementation backing.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="faqTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    How does Digify protect my client relationships?
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="faqTwo" data-bs-parent="#partnerFaqAccordion">
                                <div class="accordion-body">
                                    We maintain strict account mapping. When you introduce a prospect or client, that account is registered under your partner profile. Digify supports you on demos and technical delivery while you retain full client relationship ownership.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="faqThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    What products can I offer as a Digify partner?
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="faqThree" data-bs-parent="#partnerFaqAccordion">
                                <div class="accordion-body">
                                    You can offer Manufacturing ERP, Distributor ERP, Retail POS, Restaurant POS, CRM &amp; Service management, AI &amp; Automation tools (AutomateX.ai, OCR bill scanning), Websites, Portals, and Tally/WhatsApp integrations.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="faqFour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    How does recurring revenue work for resellers?
                                </button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="faqFour" data-bs-parent="#partnerFaqAccordion">
                                <div class="accordion-body">
                                    Partners earn recurring revenue on annual software license renewals, subscription upgrades, additional user modules, and agreed implementation or consulting service fees.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="faqFive">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                    What support does Digify provide during client sales demos?
                                </button>
                            </h2>
                            <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="faqFive" data-bs-parent="#partnerFaqAccordion">
                                <div class="accordion-body">
                                    Digify provides pre-sales assistance, custom solution mapping, live product demonstrations, and technical feasibility evaluations to ensure smooth closing of customer deals.
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 12. BOTTOM VIBRANT CTA STRIP -->
    <section class="bottom-cta-vibrant">
        <div class="container text-center">
            <h2 class="fw-bold mb-3 text-white" style="font-size: 2.2rem;">Become a Digify Reseller Partner Today</h2>
            <p class="mb-4 mx-auto text-white" style="max-width: 650px; font-size: 1.15rem; opacity: 0.95;">
                Add powerful business software to your portfolio. Serve your customers better. Build recurring revenue.
            </p>
            <div class="d-flex flex-wrap justify-content-center gap-3">
                <a href="#apply-form" class="btn btn-dark rounded-pill px-5 py-3 fw-bold shadow-lg" style="font-size: 15px;">
                    <i class="fa-solid fa-file-signature me-2"></i> Register as a Partner
                </a>
                <a href="tel:+917425016636" class="btn btn-outline-light rounded-pill px-4 py-3 fw-bold" style="font-size: 15px; border-width: 2px;">
                    <i class="fa-solid fa-phone me-2"></i> Call Partner Desk (+91 74250 16636)
                </a>
            </div>
        </div>
    </section>

</div>

<?php include 'footer.php'; ?>
