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
        a.nav-blood-checkup-btn:focus {
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
                    // Fetch all categories
                    $nav_categories = $conn->query("SELECT * FROM nav_categories ORDER BY display_order ASC")->fetchAll(PDO::FETCH_ASSOC);
                    
                    // Enforce standard category order: HOME -> DIAGNOSTICS -> MEDICAL EQUIPMENT -> HOME CARE -> JOB -> BLOOD CHECKUP
                    $nav_order_priority = [
                        'home' => 1,
                        'diagnostics' => 2,
                        'medical equipment' => 3,
                        'home care' => 4,
                        'job' => 5,
                        'blood checkup' => 6
                    ];
                    usort($nav_categories, function($a, $b) use ($nav_order_priority) {
                        $a_key = strtolower(trim($a['name'] ?? ''));
                        $b_key = strtolower(trim($b['name'] ?? ''));
                        $a_rank = $nav_order_priority[$a_key] ?? ((int)($a['display_order'] ?? 99));
                        $b_rank = $nav_order_priority[$b_key] ?? ((int)($b['display_order'] ?? 99));
                        if ($a_rank === $b_rank) {
                            return ((int)($a['display_order'] ?? 0)) <=> ((int)($b['display_order'] ?? 0));
                        }
                        return $a_rank <=> $b_rank;
                    });

                    // Fetch all items
                    $nav_items_all = $conn->query("SELECT * FROM nav_items ORDER BY display_order ASC")->fetchAll(PDO::FETCH_ASSOC);

                    $grouped_items = [];
                    foreach ($nav_items_all as $item) {
                        $grouped_items[$item['category_id']][] = $item;
                    }
                    ?>
                    
                    <!-- Nav Links -->
                    <ul class="navbar-nav mx-auto mb-2 mb-xl-0 fw-bold" style="font-size: 15px;">

                        <?php foreach ($nav_categories as $cat): ?>
                            <?php 
                                // Only show category if it has items, or if it is 'Home' which doesn't need items to be displayed
                                $has_items = isset($grouped_items[$cat['id']]) && count($grouped_items[$cat['id']]) > 0;
                                if (!$has_items && strtolower($cat['name']) !== 'home') continue; 
                            ?>
                            <?php if (strtolower($cat['name']) === 'home care'): ?>
                                <li class="nav-item dropdown position-static">
                                    <a class="nav-link dropdown-toggle text-dark text-uppercase px-3" href="#" role="button" data-bs-toggle="dropdown" data-bs-display="static" aria-expanded="false">
                                        <?= htmlspecialchars($cat['name']) ?>
                                        <i class="fa-solid fa-chevron-down ms-1" style="font-size: 0.8em;"></i>
                                    </a>
                                    <div class="dropdown-menu w-100 border-0 shadow-lg mt-0 p-3 p-xl-4 home-care-mega-menu">
                                        <div class="container-fluid px-2 px-md-4" style="max-width: 1440px;">
                                            <?php
                                                $home_items = isset($grouped_items[$cat['id']]) ? $grouped_items[$cat['id']] : [];
                                                
                                                // Specific categorization for OUR SERVICES vs OUR CAREGIVERS
                                                $services_slugs = [
                                                    'attendant-providing',
                                                    'gda-providing',
                                                    'patient-attendant',
                                                    'elder-care---basic-care',
                                                    'patient-care---general-nursing',
                                                    'icu-care---critical-care',
                                                    'live-in-care---24-hours-care',
                                                    'palliative-care',
                                                    'assisted-living-facility',
                                                    'staircase-mobility-assistance'
                                                ];
                                                
                                                $col1_items = [];
                                                $col2_items = [];
                                                
                                                foreach ($home_items as $h_item) {
                                                    if (in_array(strtolower($h_item['link']), $services_slugs)) {
                                                        $col1_items[] = $h_item;
                                                    } else {
                                                        $col2_items[] = $h_item;
                                                    }
                                                }

                                                // Icon mapper matching screenshot
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
                                                            ?>
                                                            <li>
                                                                <a href="<?= htmlspecialchars($nav_item['link']) ?>">
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
                                                            ?>
                                                            <li>
                                                                <a href="<?= htmlspecialchars($nav_item['link']) ?>">
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
                            <?php elseif (strtolower($cat['name']) === 'home'): ?>
                                <li class="nav-item dropdown">
                                    <?php if (isset($grouped_items[$cat['id']]) && count($grouped_items[$cat['id']]) > 0): ?>
                                        <a class="nav-link dropdown-toggle text-dark text-uppercase px-3" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            <?= htmlspecialchars($cat['name']) ?>
                                            <i class="fa-solid fa-chevron-down ms-1" style="font-size: 0.8em;"></i>
                                        </a>
                                        <ul class="dropdown-menu border-0 shadow-sm rounded-3">
                                            <?php foreach ($grouped_items[$cat['id']] as $nav_item): ?>
                                                <li><a class="dropdown-item py-2" href="<?= htmlspecialchars($nav_item['link']) ?>"><?= htmlspecialchars($nav_item['title']) ?></a></li>
                                            <?php endforeach; ?>
                                        </ul>
                                    <?php else: ?>
                                        <a class="nav-link text-dark text-uppercase px-3" href="index.php">
                                            <?= htmlspecialchars($cat['name']) ?>
                                        </a>
                                    <?php endif; ?>
                                </li>
                            <?php else: ?>
                                <li class="nav-item dropdown">
                                    <?php 
                                        $is_blood_checkup = (stripos($cat['name'], 'blood') !== false);
                                        $display_name = $is_blood_checkup ? 'Blood Checkup' : $cat['name'];
                                    ?>
                                    <?php if ($is_blood_checkup): ?>
                                        <a class="nav-link dropdown-toggle text-white fw-bold text-uppercase px-3 ms-2 shadow-sm nav-blood-checkup-btn" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="background-color: #e5252a !important; background: #e5252a !important; color: #ffffff !important; border-radius: 6px; padding: 8px 16px !important; align-self: center; font-size: 14px;">
                                    <?php else: ?>
                                        <a class="nav-link dropdown-toggle text-dark text-uppercase px-3" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <?php endif; ?>
                                        <?= htmlspecialchars($display_name) ?>
                                        <?php if (isset($grouped_items[$cat['id']]) && count($grouped_items[$cat['id']]) > 0): ?>
                                            <i class="fa-solid fa-chevron-down ms-1" style="font-size: 0.8em;"></i>
                                        <?php endif; ?>
                                    </a>
                                    <ul class="dropdown-menu border-0 shadow-sm rounded-3">
                                        <?php if (isset($grouped_items[$cat['id']]) && count($grouped_items[$cat['id']]) > 0): ?>
                                            <?php foreach ($grouped_items[$cat['id']] as $nav_item): ?>
                                                <li><a class="dropdown-item py-2" href="<?= htmlspecialchars($nav_item['link']) ?>"><?= htmlspecialchars($nav_item['title']) ?></a></li>
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