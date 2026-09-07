<?php
$protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' || ($_SERVER['SERVER_PORT'] ?? '') == 443) ? "https://" : "http://";
$host = $_SERVER['HTTP_HOST'] ?? 'dmhealthcares.com';
$current_url = $protocol . $host . ($_SERVER['REQUEST_URI'] ?? '');
$is_local = (strpos($host, 'localhost') !== false || strpos($host, '127.0.0.1') !== false);
$base_domain_url = $protocol . $host . ($is_local ? '/DmHealthcare' : '');

$page_title_seo = isset($seo_title) && !empty($seo_title) 
    ? htmlspecialchars($seo_title) 
    : 'DmHealthcare (DmHealthcares) - Best Home Healthcare, Nursing & Elder Care Services';

$page_desc_seo = isset($seo_desc) && !empty($seo_desc) 
    ? htmlspecialchars($seo_desc) 
    : 'DmHealthcare (DmHealthcares) provides 24/7 compassionate & professional home healthcare services, nursing care, elder care, ICU setup at home, and medical equipment rental in Faridabad, Noida, and Delhi NCR.';

$page_keywords_seo = isset($seo_keywords) && !empty($seo_keywords)
    ? htmlspecialchars($seo_keywords)
    : 'DmHealthcares, DmHealthcare, DM Health Care, DM Healthcare Faridabad, DM Healthcare Noida, DM Healthcare Delhi NCR, Home Healthcare Services, Nursing Care at Home, Elderly Care, Patient Attendant, ICU Setup at Home, Medical Equipment on Rent';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="google-site-verification" content="KMZGSRjIT760bemoBIWp27Ys4M_zrjIGPZrulcFcsLI" />
    
    <!-- Primary SEO Meta Tags -->
    <title><?= $page_title_seo ?></title>
    <meta name="title" content="<?= $page_title_seo ?>">
    <meta name="description" content="<?= $page_desc_seo ?>">
    <meta name="keywords" content="<?= $page_keywords_seo ?>">
    <meta name="author" content="DmHealthcare">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <link rel="canonical" href="<?= htmlspecialchars($current_url) ?>">

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="<?= $base_domain_url ?>/assets/images/logo.png">
    <link rel="apple-touch-icon" href="<?= $base_domain_url ?>/assets/images/logo.png">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="DmHealthcare (DmHealthcares)">
    <meta property="og:url" content="<?= htmlspecialchars($current_url) ?>">
    <meta property="og:title" content="<?= $page_title_seo ?>">
    <meta property="og:description" content="<?= $page_desc_seo ?>">
    <meta property="og:image" content="<?= $base_domain_url ?>/assets/images/logo.png">

    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:url" content="<?= htmlspecialchars($current_url) ?>">
    <meta name="twitter:title" content="<?= $page_title_seo ?>">
    <meta name="twitter:description" content="<?= $page_desc_seo ?>">
    <meta name="twitter:image" content="<?= $base_domain_url ?>/assets/images/logo.png">

    <!-- Schema.org Structured Data (JSON-LD) -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "MedicalBusiness",
      "name": "DmHealthcare",
      "alternateName": ["DmHealthcares", "DM Health Care", "DM Healthcare Services"],
      "url": "<?= $base_domain_url ?>",
      "logo": "<?= $base_domain_url ?>/assets/images/logo.png",
      "image": "<?= $base_domain_url ?>/assets/images/logo.png",
      "description": "DmHealthcare (DmHealthcares) provides 24/7 comprehensive home healthcare services, nursing, elder care, ICU setup at home, physiotherapy, and medical equipment rental in Faridabad, Noida, and Delhi NCR.",
      "telephone": "+91-8860600423",
      "email": "care@dmhealthcare.com",
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "B-191, IInd Floor, Green Field Colony",
        "addressLocality": "Faridabad",
        "addressRegion": "Haryana",
        "addressCountry": "IN"
      },
      "areaServed": [
        {
          "@type": "City",
          "name": "Faridabad"
        },
        {
          "@type": "City",
          "name": "Noida"
        },
        {
          "@type": "City",
          "name": "Delhi NCR"
        }
      ],
      "openingHoursSpecification": {
        "@type": "OpeningHoursSpecification",
        "dayOfWeek": [
          "Monday",
          "Tuesday",
          "Wednesday",
          "Thursday",
          "Friday",
          "Saturday",
          "Sunday"
        ],
        "opens": "00:00",
        "closes": "23:59"
      }
    }
    </script>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <!-- FontAwesome 6.6.0 -->
    <link rel="preconnect" href="https://cdnjs.cloudflare.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <!-- Bootstrap CSS for Carousel -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
    <style>
        /* Make dropdowns open on hover for desktop */
        @media all and (min-width: 992px) {
            .navbar .nav-item.dropdown:hover .dropdown-menu {
                display: block;
                margin-top: 0;
            }
        }
        /* Modern Navbar Spacing & Polish */
        .navbar-nav {
            gap: 8px;
            align-items: center;
        }
        .navbar-nav .nav-item .nav-link {
            padding: 9px 16px !important;
            border-radius: 8px;
            font-size: 14px;
            font-weight: 700;
            color: #1e293b !important;
            letter-spacing: 0.3px;
            transition: all 0.25s cubic-bezier(0.4, 0, 0.2, 1);
            display: inline-flex;
            align-items: center;
            gap: 6px;
            white-space: nowrap;
        }
        .navbar-nav .nav-item .nav-link:hover,
        .navbar-nav .nav-item .nav-link:focus {
            background-color: rgba(229, 37, 42, 0.07);
            color: var(--primary-color, #e5252a) !important;
        }
        .navbar-nav .nav-item.dropdown:hover > .nav-link .fa-chevron-down {
            transform: rotate(180deg);
            color: var(--primary-color, #e5252a);
        }
        .navbar-nav .nav-link .fa-chevron-down {
            transition: transform 0.25s ease;
            font-size: 0.75em !important;
        }

        /* Active Navbar Link Styling (Matches User Reference Image) */
        .navbar-nav .nav-item .nav-link.active,
        .navbar-nav .nav-item.active > .nav-link,
        .navbar-nav .nav-item.dropdown.active > .nav-link {
            background-color: rgba(229, 37, 42, 0.08) !important;
            color: var(--primary-color, #e5252a) !important;
            border-bottom: 2.5px solid var(--primary-color, #e5252a) !important;
            border-radius: 8px 8px 0 0 !important;
            font-weight: 800 !important;
        }
        .navbar-nav .nav-item .nav-link.active .fa-chevron-down,
        .navbar-nav .nav-item.active > .nav-link .fa-chevron-down {
            color: var(--primary-color, #e5252a) !important;
        }

        /* For active dropdown items */
        .dropdown-item.active-page,
        .dropdown-item.active {
            background-color: rgba(229, 37, 42, 0.08) !important;
            color: var(--primary-color, #e5252a) !important;
            font-weight: 700 !important;
        }
        .mega-menu-list a.active-page {
            color: var(--primary-color, #d80000) !important;
            font-weight: 700 !important;
        }
        .mega-menu-list a.active-page i {
            color: var(--primary-color, #d80000) !important;
            transform: scale(1.15);
        }

        /* Standard Dropdown Styling */
        .dropdown-menu {
            border-radius: 14px !important;
            border: 1px solid #edf2f7 !important;
            box-shadow: 0 16px 36px rgba(15, 23, 42, 0.1) !important;
            padding: 8px !important;
            min-width: 240px;
        }
        .dropdown-item {
            border-radius: 8px !important;
            padding: 8px 14px !important;
            font-size: 13.5px !important;
            font-weight: 600 !important;
            color: #334155 !important;
            transition: all 0.2s ease !important;
            white-space: normal !important;
            word-break: normal !important;
        }
        .dropdown-item:hover,
        .dropdown-item:focus {
            background-color: rgba(229, 37, 42, 0.08) !important;
            color: var(--primary-color, #e5252a) !important;
            transform: translateX(4px);
        }

        /* Blood Checkup Button - Dedicated Medical Red CTA */
        .nav-blood-checkup-btn,
        a.nav-blood-checkup-btn {
            background-color: #e5252a !important;
            background: #e5252a !important;
            color: #ffffff !important;
            border-radius: 8px !important;
            padding: 9px 18px !important;
            box-shadow: 0 4px 12px rgba(229, 37, 42, 0.28) !important;
            margin-left: 8px;
            transition: all 0.3s ease !important;
            letter-spacing: 0.5px;
        }
        .nav-blood-checkup-btn:hover,
        .nav-blood-checkup-btn:focus,
        a.nav-blood-checkup-btn:hover,
        a.nav-blood-checkup-btn:focus,
        .nav-blood-checkup-btn.active,
        a.nav-blood-checkup-btn.active {
            background-color: #c8102e !important;
            background: #c8102e !important;
            color: #ffffff !important;
            box-shadow: 0 6px 16px rgba(229, 37, 42, 0.45) !important;
            transform: translateY(-1px);
        }

        /* Home Care Mega Menu - Brand Logo Red Scheme */
        .navbar {
            position: relative !important;
        }
        .navbar-nav .nav-item.dropdown.position-static {
            position: static !important;
        }
        .home-care-mega-menu {
            position: absolute !important;
            left: 0 !important;
            right: 0 !important;
            top: 100% !important;
            width: 100% !important;
            max-width: 100vw !important;
            margin: 0 !important;
            transform: none !important;
            background: #ffffff !important;
            border-radius: 0 0 16px 16px !important;
            border: 1px solid #edf2f7 !important;
            border-top: 2px solid var(--primary-color, #d80000) !important;
            box-shadow: 0 20px 40px rgba(15, 23, 42, 0.12) !important;
            padding: 24px 0 !important;
            z-index: 1050 !important;
        }
        .mega-menu-title-brand {
            font-size: 14px;
            font-weight: 800;
            color: #0f172a;
            letter-spacing: 0.5px;
            border-bottom: 2px solid var(--primary-color, #d80000);
            display: inline-block;
            margin-bottom: 14px;
            padding-bottom: 4px;
            text-transform: uppercase;
        }
        .mega-menu-list {
            list-style: none;
            padding: 0;
            margin: 0;
            font-size: 13px;
        }
        .mega-menu-list li {
            padding-bottom: 9px;
            margin-bottom: 9px;
            border-bottom: 1px dashed #edf2f7;
        }
        .mega-menu-list li:last-child {
            border-bottom: none;
            padding-bottom: 0;
            margin-bottom: 0;
        }
        .mega-menu-list a {
            display: flex;
            align-items: center;
            color: #475569;
            text-decoration: none;
            font-size: 13px;
            font-weight: 600;
            transition: all 0.2s ease;
            white-space: normal;
            word-break: normal;
        }
        .mega-menu-list a:hover {
            color: var(--primary-color, #d80000) !important;
            transform: translateX(4px);
        }
        .mega-menu-list a i {
            color: var(--primary-color, #d80000);
            width: 24px;
            font-size: 15px;
            margin-right: 12px;
            text-align: center;
            flex-shrink: 0;
            transition: all 0.2s ease;
        }
        .mega-menu-list a:hover i {
            color: #b00000;
            transform: scale(1.15);
        }
    </style>
</head>

<body>

    <!-- Main Navigation -->
    <header class="sticky-top">
        <!-- Top Navbar for Logo and Contact -->
        <div class="bg-white py-1 px-4 shadow-sm" style="z-index: 10;">
            <div class="container-fluid d-flex justify-content-between align-items-center">
                <!-- Clean Logo -->
                <?php $home_link = (strpos($_SERVER['HTTP_HOST'] ?? '', 'localhost') !== false || strpos($_SERVER['HTTP_HOST'] ?? '', '127.0.0.1') !== false) ? '/DmHealthcare/' : '/'; ?>
                <a class="navbar-brand logo p-0 d-flex align-items-center" href="<?= $home_link ?>" style="margin-top: -10px; margin-bottom: -10px; text-decoration: none;">
                    <!-- Logo Icon -->
                    <img src="assets/images/logo.png" alt="DmHealthcare Logo Icon" style="height: 85px; width: auto; object-fit: contain;">
                    
                    <!-- Logo Typography -->
                    <div class="d-flex flex-column justify-content-center" style="line-height: 1.1; margin-left: -25px; position: relative; z-index: 1;">
                        <div style="font-size: 14px; font-weight: 900; letter-spacing: 1px; font-family: 'Arial', sans-serif;">
                            <span style="color: #d80000;">D</span><span style="color: #333333;">M</span> 
                            <span style="color: #444444; margin-left: 5px;">HEALTH</span> 
                            <span style="color: #d80000; margin-left: 5px;">CARE</span>
                        </div>
                        <div class="d-flex align-items-center w-100" style="margin: 2px 0;">
                            <div style="flex-grow: 1; height: 1px; background-color: #d80000;"></div>
                            <i class="fa-solid fa-heart-pulse mx-1" style="color: #d80000; font-size: 8px;"></i>
                            <div style="flex-grow: 1; height: 1px; background-color: #333333;"></div>
                        </div>
                        <div style="font-size: 6px; font-weight: 700; letter-spacing: 3px; color: #555555; text-align: center; text-transform: uppercase;">
                            Your Health, Our Priority
                        </div>
                    </div>
                </a>
                
                <!-- Contact Info -->
                <div class="d-none d-lg-flex gap-4 align-items-center">
                    <div class="d-flex align-items-center gap-3">
                        <div class="bg-primary bg-opacity-10 rounded-circle d-flex align-items-center justify-content-center text-primary" style="width: 45px; height: 45px;">
                            <i class="fa-solid fa-phone fs-5"></i>
                        </div>
                        <div>
                            <span class="text-muted d-block small fw-bold text-uppercase" style="font-size: 0.7rem; letter-spacing: 1px;">Call Us Anytime</span>
                            <a href="tel:+918860600423" class="text-dark fw-bold text-decoration-none" style="font-size: 1.1rem;">+91 88606 00423</a>
                        </div>
                    </div>
                    
                    <div class="d-flex align-items-center gap-3 border-start ps-4">
                        <div class="bg-primary bg-opacity-10 rounded-circle d-flex align-items-center justify-content-center text-primary" style="width: 45px; height: 45px;">
                            <i class="fa-solid fa-envelope fs-5"></i>
                        </div>
                        <div>
                            <span class="text-muted d-block small fw-bold text-uppercase" style="font-size: 0.7rem; letter-spacing: 1px;">Email Us</span>
                            <a href="mailto:care@dmhealthcare.com" class="text-dark fw-bold text-decoration-none" style="font-size: 1.1rem;">care@dmhealthcare.com</a>
                        </div>
                    </div>
                </div>
                
                <!-- Mobile Toggle -->
                <button class="navbar-toggler d-xl-none border-0 fs-2 text-dark bg-transparent p-0" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavbar" aria-controls="mainNavbar" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa-solid fa-bars"></i>
                </button>
            </div>
        </div>

        <!-- Main Navigation Links Navbar -->
        <nav class="navbar navbar-expand-xl navbar-light bg-white py-2 px-4 border-top shadow-sm">
            <div class="container-fluid">
                <div class="collapse navbar-collapse" id="mainNavbar">
                    <?php
                    require_once 'config/db.php';

                    // Strict canonical ordering of categories:
                    // 1. Home, 2. Diagnostics, 3. Medical Equipment, 4. Home Care, 5. Job, 6. Blood Checkup
                    $canonical_order_map = [
                        'home' => 1,
                        'diagnostics' => 2,
                        'medical equipment' => 3,
                        'home care' => 4,
                        'job' => 5,
                        'careers' => 5,
                        'jobs/career' => 5,
                        'blood checkup' => 6,
                        'total test' => 6
                    ];

                    $raw_categories = $conn->query("SELECT * FROM nav_categories")->fetchAll(PDO::FETCH_ASSOC);
                    $nav_categories = [];

                    foreach ($raw_categories as $rcat) {
                        $norm_name = strtolower(trim($rcat['name']));
                        // Exclude obsolete categories like 'NRI Care Services' or 'Specialized Care'
                        if (strpos($norm_name, 'nri') !== false || strpos($norm_name, 'specialized') !== false) {
                            continue;
                        }
                        if (isset($canonical_order_map[$norm_name])) {
                            $rcat['canonical_order'] = $canonical_order_map[$norm_name];
                            $nav_categories[] = $rcat;
                        }
                    }

                    // Sort strictly by canonical order
                    usort($nav_categories, function($a, $b) {
                        return ($a['canonical_order'] ?? 99) <=> ($b['canonical_order'] ?? 99);
                    });

                    // Fetch all items grouped by category
                    $nav_items_all = $conn->query("SELECT * FROM nav_items ORDER BY display_order ASC")->fetchAll(PDO::FETCH_ASSOC);
                    $grouped_items = [];
                    foreach ($nav_items_all as $item) {
                        $grouped_items[$item['category_id']][] = $item;
                    }

                    // Determine current active category & active page slug
                    $req_path = parse_url($_SERVER['REQUEST_URI'] ?? '', PHP_URL_PATH);
                    $current_slug = strtolower(trim(str_replace(['/DmHealthcare', '.php', '/'], ['', '', ''], $req_path)));

                    $active_nav_category = '';
                    if (!empty($category_name)) {
                        $active_nav_category = strtolower(trim($category_name));
                    } elseif (!empty($page_data['category_name'])) {
                        $active_nav_category = strtolower(trim($page_data['category_name']));
                    }

                    // Also match current slug against items in $nav_items_all to identify active category
                    if (empty($active_nav_category) || $active_nav_category === 'healthcare services') {
                        if (!empty($current_slug)) {
                            foreach ($nav_items_all as $ni) {
                                if (strtolower($ni['link']) === $current_slug) {
                                    foreach ($nav_categories as $nc) {
                                        if ($nc['id'] == $ni['category_id']) {
                                            $active_nav_category = strtolower(trim($nc['name']));
                                            break 2;
                                        }
                                    }
                                }
                            }
                        }
                    }

                    // Normalize aliases
                    if ($active_nav_category === 'careers') $active_nav_category = 'job';
                    if ($active_nav_category === 'total test') $active_nav_category = 'blood checkup';
                    if (empty($active_nav_category) && (empty($current_slug) || $current_slug === 'index' || $current_slug === 'delhi-ncr')) {
                        $active_nav_category = 'home';
                    }
                    ?>
                    
                    <!-- Nav Links -->
                    <ul class="navbar-nav mx-auto mb-2 mb-xl-0 fw-bold" style="font-size: 15px;">

                        <?php foreach ($nav_categories as $cat): ?>
                            <?php 
                                $cat_items = $grouped_items[$cat['id']] ?? [];
                                $has_items = count($cat_items) > 0;
                                if (!$has_items && strtolower($cat['name']) !== 'home') continue; 

                                $cat_norm = strtolower(trim($cat['name']));
                                $is_cat_active = ($active_nav_category === $cat_norm || strpos($active_nav_category, $cat_norm) !== false || strpos($cat_norm, $active_nav_category) !== false);
                            ?>

                            <?php if ($cat_norm === 'home care'): ?>
                                <!-- Home Care Mega Menu -->
                                <li class="nav-item dropdown position-static <?= $is_cat_active ? 'active' : '' ?>">
                                    <a class="nav-link dropdown-toggle text-dark text-uppercase px-3 <?= $is_cat_active ? 'active' : '' ?>" href="#" role="button" data-bs-toggle="dropdown" data-bs-display="static" aria-expanded="false">
                                        <?= htmlspecialchars($cat['name']) ?>
                                        <i class="fa-solid fa-chevron-down ms-1" style="font-size: 0.8em;"></i>
                                    </a>
                                    <div class="dropdown-menu w-100 border-0 shadow-lg mt-0 p-3 p-xl-4 home-care-mega-menu">
                                        <div class="container-fluid px-2 px-md-4" style="max-width: 1440px;">
                                            <?php
                                                $services_slugs = [
                                                    'attendant-providing', 'gda-providing', 'patient-attendant',
                                                    'elder-care---basic-care', 'patient-care---general-nursing',
                                                    'icu-care---critical-care', 'live-in-care---24-hours-care',
                                                    'palliative-care', 'assisted-living-facility', 'staircase-mobility-assistance'
                                                ];
                                                
                                                $col1_items = [];
                                                $col2_items = [];
                                                
                                                foreach ($cat_items as $h_item) {
                                                    if (in_array(strtolower($h_item['link']), $services_slugs)) {
                                                        $col1_items[] = $h_item;
                                                    } else {
                                                        $col2_items[] = $h_item;
                                                    }
                                                }

                                                $icon_map = [
                                                    'attendant-providing' => 'fa-solid fa-hand-holding-medical',
                                                    'gda-providing' => 'fa-solid fa-stethoscope',
                                                    'patient-attendant' => 'fa-solid fa-wheelchair',
                                                    'elder-care---basic-care' => 'fa-solid fa-person-cane',
                                                    'patient-care---general-nursing' => 'fa-solid fa-bed-pulse',
                                                    'icu-care---critical-care' => 'fa-solid fa-heart-pulse',
                                                    'live-in-care---24-hours-care' => 'fa-solid fa-clock-rotate-left',
                                                    'palliative-care' => 'fa-solid fa-hand-holding-heart',
                                                    'assisted-living-facility' => 'fa-solid fa-house-chimney-medical',
                                                    'staircase-mobility-assistance' => 'fa-solid fa-stairs',
                                                    'general-duty-assistant-gda' => 'fa-solid fa-user-doctor',
                                                    'elderly-caretaker' => 'fa-solid fa-person-cane',
                                                    'qualified-nurse' => 'fa-solid fa-user-nurse',
                                                    'physician-doctor' => 'fa-solid fa-user-doctor',
                                                    'physiotherapist' => 'fa-solid fa-person-walking'
                                                ];
                                            ?>
                                            <div class="row g-4 align-items-stretch">
                                                <!-- Column 1: OUR SERVICES -->
                                                <div class="col-lg-4 col-md-4 col-12">
                                                    <h6 class="mega-menu-title-brand">OUR SERVICES</h6>
                                                    <ul class="mega-menu-list">
                                                        <?php foreach ($col1_items as $nav_item): ?>
                                                            <?php 
                                                                $slug_key = strtolower($nav_item['link']);
                                                                $icon_cls = $icon_map[$slug_key] ?? 'fa-solid fa-hand-holding-medical';
                                                                $is_curr_link = ($slug_key === $current_slug);
                                                            ?>
                                                            <li>
                                                                <a href="<?= htmlspecialchars($nav_item['link']) ?>" class="<?= $is_curr_link ? 'active-page' : '' ?>">
                                                                    <i class="<?= $icon_cls ?>"></i>
                                                                    <span><?= htmlspecialchars($nav_item['title']) ?></span>
                                                                </a>
                                                            </li>
                                                        <?php endforeach; ?>
                                                    </ul>
                                                </div>

                                                <!-- Column 2: OUR CAREGIVERS -->
                                                <div class="col-lg-4 col-md-4 col-12">
                                                    <h6 class="mega-menu-title-brand">OUR CAREGIVERS</h6>
                                                    <ul class="mega-menu-list">
                                                        <?php foreach ($col2_items as $nav_item): ?>
                                                            <?php 
                                                                $slug_key = strtolower($nav_item['link']);
                                                                $icon_cls = $icon_map[$slug_key] ?? 'fa-solid fa-user-nurse';
                                                                $is_curr_link = ($slug_key === $current_slug);
                                                            ?>
                                                            <li>
                                                                <a href="<?= htmlspecialchars($nav_item['link']) ?>" class="<?= $is_curr_link ? 'active-page' : '' ?>">
                                                                    <i class="<?= $icon_cls ?>"></i>
                                                                    <span><?= htmlspecialchars($nav_item['title']) ?></span>
                                                                </a>
                                                            </li>
                                                        <?php endforeach; ?>
                                                    </ul>
                                                </div>

                                                <!-- Column 3: Image -->
                                                <div class="col-lg-4 col-md-4 col-12 d-none d-md-block">
                                                    <div class="rounded-3 overflow-hidden shadow-sm h-100">
                                                        <img src="assets/images/caregiver-helping.jpg" class="img-fluid w-100 h-100" alt="Caregiver helping patient" style="object-fit: cover; min-height: 280px;">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                            <?php elseif ($cat_norm === 'home'): ?>
                                <!-- Home Item -->
                                <li class="nav-item dropdown <?= $is_cat_active ? 'active' : '' ?>">
                                    <?php if ($has_items): ?>
                                        <a class="nav-link dropdown-toggle text-dark text-uppercase px-3 <?= $is_cat_active ? 'active' : '' ?>" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            <?= htmlspecialchars($cat['name']) ?>
                                            <i class="fa-solid fa-chevron-down ms-1" style="font-size: 0.8em;"></i>
                                        </a>
                                        <ul class="dropdown-menu border-0 shadow-sm rounded-3">
                                            <?php foreach ($cat_items as $nav_item): ?>
                                                <?php $is_curr_link = (strtolower($nav_item['link']) === $current_slug); ?>
                                                <li><a class="dropdown-item py-2 <?= $is_curr_link ? 'active-page' : '' ?>" href="<?= htmlspecialchars($nav_item['link']) ?>"><?= htmlspecialchars($nav_item['title']) ?></a></li>
                                            <?php endforeach; ?>
                                        </ul>
                                    <?php else: ?>
                                        <a class="nav-link text-dark text-uppercase px-3 <?= $is_cat_active ? 'active' : '' ?>" href="index.php">
                                            <?= htmlspecialchars($cat['name']) ?>
                                        </a>
                                    <?php endif; ?>
                                </li>

                            <?php else: ?>
                                <!-- Standard Dropdown & Blood Checkup -->
                                <li class="nav-item dropdown <?= $is_cat_active ? 'active' : '' ?>">
                                    <?php 
                                        $is_blood_checkup = (stripos($cat['name'], 'blood') !== false);
                                        $display_name = $is_blood_checkup ? 'Blood Checkup' : $cat['name'];
                                    ?>
                                    <?php if ($is_blood_checkup): ?>
                                        <a class="nav-link dropdown-toggle text-white fw-bold text-uppercase px-3 ms-2 shadow-sm nav-blood-checkup-btn <?= $is_cat_active ? 'active' : '' ?>" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="background-color: #e5252a !important; background: #e5252a !important; color: #ffffff !important; border-radius: 6px; padding: 8px 16px !important; align-self: center; font-size: 14px;">
                                    <?php else: ?>
                                        <a class="nav-link dropdown-toggle text-dark text-uppercase px-3 <?= $is_cat_active ? 'active' : '' ?>" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <?php endif; ?>
                                        <?= htmlspecialchars($display_name) ?>
                                        <?php if ($has_items): ?>
                                            <i class="fa-solid fa-chevron-down ms-1" style="font-size: 0.8em;"></i>
                                        <?php endif; ?>
                                    </a>
                                    <ul class="dropdown-menu border-0 shadow-sm rounded-3">
                                        <?php if ($has_items): ?>
                                            <?php foreach ($cat_items as $nav_item): ?>
                                                <?php $is_curr_link = (strtolower($nav_item['link']) === $current_slug); ?>
                                                <li><a class="dropdown-item py-2 <?= $is_curr_link ? 'active-page' : '' ?>" href="<?= htmlspecialchars($nav_item['link']) ?>"><?= htmlspecialchars($nav_item['title']) ?></a></li>
                                            <?php endforeach; ?>
                                        <?php else: ?>
                                            <li><a class="dropdown-item py-2 text-muted" href="#">Coming Soon</a></li>
                                        <?php endif; ?>
                                    </ul>
                                </li>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
        </nav>
    </header>