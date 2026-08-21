<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="google-site-verification" content="KMZGSRjIT760bemoBIWp27Ys4M_zrjIGPZrulcFcsLI" />
    <title><?= isset($seo_title) ? htmlspecialchars($seo_title) : 'DmHealthcare - Professional Home Care Services' ?></title>
    <?php if(isset($seo_desc)): ?>
    <meta name="description" content="<?= htmlspecialchars($seo_desc) ?>">
    <?php endif; ?>
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <!-- FontAwesome -->
    <link rel="preconnect" href="https://cdnjs.cloudflare.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
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
                            <a href="tel:+919891989686" class="text-dark fw-bold text-decoration-none" style="font-size: 1.1rem;">+91-9891989686</a>
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
                                    <a class="nav-link dropdown-toggle text-dark text-uppercase px-3" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <?= htmlspecialchars($cat['name']) ?>
                                        <i class="fa-solid fa-chevron-down ms-1" style="font-size: 0.8em;"></i>
                                    </a>
                                    <div class="dropdown-menu w-100 border-0 shadow rounded-4 mt-0 p-3" style="background-color: #f8f9fa;">
                                        <div class="container">
                                            <div class="row g-4 p-2">
                                                <!-- Our Services Column -->
                                                <div class="col-md-4">
                                                    <h6 class="fw-bold text-dark pb-2 mb-3" style="border-bottom: 2px solid #0d6efd; display: inline-block; font-size: 14px;">OUR SERVICES</h6>
                                                    <ul class="list-unstyled" style="font-size: 13px;">
                                                        <?php
                                                        $home_items = isset($grouped_items[$cat['id']]) ? $grouped_items[$cat['id']] : [];
                                                        $services_count = ceil(count($home_items) / 2);
                                                        if (count($home_items) > 7) $services_count = 7; // up to 7 in first col

                                                        for ($i = 0; $i < $services_count; $i++) {
                                                            if (!isset($home_items[$i])) break;
                                                            $nav_item = $home_items[$i];
                                                            $border = ($i == $services_count - 1) ? '' : 'border-bottom: 1px dashed #e0e0e0;';
                                                            echo '<li style="' . $border . ' padding-bottom: 10px; margin-bottom: 10px;">
                                                                    <a href="' . htmlspecialchars($nav_item['link']) . '" class="text-decoration-none d-flex align-items-center" style="color: #6c757d; transition: color 0.3s;">
                                                                        <i class="fa-solid fa-hand-holding-heart text-primary me-3 fs-6"></i>
                                                                        <span>' . htmlspecialchars($nav_item['title']) . '</span>
                                                                    </a>
                                                                  </li>';
                                                        }
                                                        ?>
                                                    </ul>
                                                </div>

                                                <!-- Our Caregivers Column -->
                                                <div class="col-md-4">
                                                    <h6 class="fw-bold text-dark pb-2 mb-3" style="border-bottom: 2px solid #0d6efd; display: inline-block; font-size: 14px;">OUR CAREGIVERS</h6>
                                                    <ul class="list-unstyled" style="font-size: 13px;">
                                                        <?php
                                                        for ($i = $services_count; $i < count($home_items); $i++) {
                                                            $nav_item = $home_items[$i];
                                                            $border = ($i == count($home_items) - 1) ? '' : 'border-bottom: 1px dashed #e0e0e0;';
                                                            echo '<li style="' . $border . ' padding-bottom: 10px; margin-bottom: 10px;">
                                                                    <a href="' . htmlspecialchars($nav_item['link']) . '" class="text-decoration-none d-flex align-items-center" style="color: #6c757d; transition: color 0.3s;">
                                                                        <i class="fa-solid fa-user-nurse text-primary me-3 fs-6"></i>
                                                                        <span>' . htmlspecialchars($nav_item['title']) . '</span>
                                                                    </a>
                                                                  </li>';
                                                        }
                                                        ?>
                                                    </ul>
                                                </div>

                                                <!-- Image Column -->
                                                <div class="col-md-4">
                                                    <div class="rounded-3 overflow-hidden shadow-sm h-100">
                                                        <img src="assets/images/caregiver-helping.jpg" class="img-fluid w-100 h-100" alt="Caregiver helping patient" style="object-fit: cover; min-height: 250px;">
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
                                        <a class="nav-link dropdown-toggle text-white fw-bold text-uppercase px-3 ms-2 shadow-sm" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="background-color: #e63946; border-radius: 5px; padding: 8px 15px !important; align-self: center; font-size: 14px;">
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
                                                <?php if ($nav_item['id'] == 53) continue; ?>
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