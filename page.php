<?php
require_once 'config/db.php';
$page_title = isset($_GET['title']) ? $_GET['title'] : 'Page Not Found';

// Fetch custom page content from nav_items if it exists
$stmt = $conn->prepare("SELECT n.*, c.name as category_name FROM nav_items n LEFT JOIN nav_categories c ON n.category_id = c.id WHERE n.title = :title OR n.link = :link LIMIT 1");
$stmt->execute([
    'title' => $page_title,
    'link' => $page_title
]);
$page_data = $stmt->fetch(PDO::FETCH_ASSOC);

$custom_content = $page_data ? $page_data['page_content'] : null;
$short_desc = $page_data ? $page_data['short_description'] : null;
$specs = $page_data ? $page_data['specifications'] : null;
$custom_image = $page_data && $page_data['page_image'] ? $page_data['page_image'] : null;
$banner_image = $page_data && $page_data['banner_image'] ? $page_data['banner_image'] : null;
$gallery_images = $page_data && $page_data['gallery_images'] ? json_decode($page_data['gallery_images'], true) : [];
$display_image = ($custom_image && file_exists($custom_image)) ? $custom_image : 'assets/images/about.jpg';
$category_name = $page_data && !empty($page_data['category_name']) ? $page_data['category_name'] : 'Healthcare Services';

// HYBRID ROUTING: If a physical file exists for this page, let it override variables
$slug_raw = strtolower(str_replace([' ', '/'], ['-', '-'], $page_title));
$slug_clean = strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-', $page_title), '-'));
$slug_single_dash = preg_replace('/-+/', '-', $slug_clean);

$possible_files = [
    'pages/' . $page_title . '.php',
    'pages/' . $slug_raw . '.php',
    'pages/' . $slug_clean . '.php',
    'pages/' . $slug_single_dash . '.php'
];

foreach ($possible_files as $file) {
    if (file_exists($file)) {
        require $file;
        break;
    }
}
$slug = $slug_single_dash;

$clean_title = trim(str_replace(['.', '_'], [' ', ' '], $page_title));
$default_display = ucwords(str_replace(['-', '+', '%20'], ' ', $clean_title));
if (!isset($display_title) || empty($display_title)) {
    $display_title = ($page_data && !empty($page_data['title'])) ? $page_data['title'] : $default_display;
}

if (!isset($seo_title) || empty($seo_title)) {
    if ($page_data && !empty($page_data['seo_title'])) {
        $seo_title = $page_data['seo_title'];
    } elseif (stripos($slug, 'delhi') !== false || stripos($slug, 'faridabad') !== false || stripos($slug, 'noida') !== false) {
        $seo_title = $display_title . ' - Home Healthcare & Nursing Services - DM Healthcare';
    } else {
        $seo_title = $display_title . ' at Home in Faridabad, Noida & Delhi NCR - DM Healthcare';
    }
}

if (!isset($seo_desc) || empty($seo_desc)) {
    $seo_desc = ($page_data && !empty($page_data['seo_description'])) ? $page_data['seo_description'] : 'Get verified ' . $display_title . ' services at home by DM Healthcare. Certified medical staff, 24/7 doctor supervision, and affordable care packages across Delhi NCR.';
}
if (!isset($short_desc) || empty($short_desc)) {
    $short_desc = ($page_data && !empty($page_data['short_description'])) ? $page_data['short_description'] : 'Professional, certified and compassionate healthcare delivered right at your doorstep across Delhi NCR.';
}
$seo_keywords = $display_title . ', ' . $display_title . ' at home, ' . $display_title . ' in Faridabad, ' . $display_title . ' in Noida, DM Healthcare, DmHealthcares, home healthcare Delhi NCR, 24/7 nursing care';

// Related Services for Internal Linking (SEO Booster)
try {
    $related_stmt = $conn->prepare("SELECT title, link FROM nav_items WHERE link != :link ORDER BY RAND() LIMIT 5");
    $related_stmt->execute(['link' => $slug]);
    $related_services = $related_stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (Exception $e) {
    $related_services = [];
}
?>
<!-- Header -->
<?php include 'includes/header.php'; ?>

<!-- Dynamic SEO Schema Markup (Breadcrumb & Medical Page Schema) -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "MedicalWebPage",
  "name": "<?= htmlspecialchars($seo_title) ?>",
  "description": "<?= htmlspecialchars($seo_desc) ?>",
  "url": "<?= htmlspecialchars($current_url) ?>",
  "provider": {
    "@type": "MedicalOrganization",
    "name": "DM Healthcare",
    "telephone": "+91-9891989686",
    "address": {
      "@type": "PostalAddress",
      "addressLocality": "Faridabad",
      "addressRegion": "Haryana",
      "addressCountry": "IN"
    }
  }
}
</script>

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "BreadcrumbList",
  "itemListElement": [{
    "@type": "ListItem",
    "position": 1,
    "name": "Home",
    "item": "https://dmhealthcares.com/"
  },{
    "@type": "ListItem",
    "position": 2,
    "name": "<?= htmlspecialchars($category_name) ?>",
    "item": "https://dmhealthcares.com/#services"
  },{
    "@type": "ListItem",
    "position": 3,
    "name": "<?= htmlspecialchars($display_title) ?>",
    "item": "<?= htmlspecialchars($current_url) ?>"
  }]
}
</script>

<style>
    body { font-family: 'Inter', sans-serif; background-color: #f8fafc; }
    
    .rich-text-content { overflow-x: auto; max-width: 100%; word-break: break-word; font-size: 1.05rem; line-height: 1.8; color: #334155; }
    .rich-text-content table { width: 100% !important; min-width: auto !important; }
    .rich-text-content img { max-width: 100%; height: auto; border-radius: 12px; }

    .page-header-banner-wrap {
        width: 100%;
        background: #0f172a;
        border-bottom: 4px solid var(--primary-color);
        overflow: hidden;
    }
    .page-header-banner-wrap img {
        width: 100%;
        height: auto;
        display: block;
        max-height: 480px;
        object-fit: cover;
    }

    /* SEO Breadcrumbs Bar */
    .breadcrumb-nav-bar {
        background: #ffffff;
        border-bottom: 1px solid #edf2f7;
        padding: 0.8rem 0;
    }

    .breadcrumb {
        margin-bottom: 0;
        font-size: 0.88rem;
    }

    .breadcrumb-item a {
        color: #64748b;
        text-decoration: none;
        transition: color 0.2s;
    }

    .breadcrumb-item a:hover {
        color: var(--primary-color);
    }

    .breadcrumb-item.active {
        color: #0f172a;
        font-weight: 600;
    }

    .content-section {
        padding: 60px 0;
        background-color: #f8fafc;
    }

    .feature-point-card {
        background: #ffffff;
        border: 1px solid #edf2f7;
        border-radius: 16px;
        padding: 1.5rem;
        transition: all 0.3s ease;
        height: 100%;
    }

    .feature-point-card:hover {
        transform: translateY(-4px);
        box-shadow: 0 10px 25px rgba(229, 37, 42, 0.08);
        border-color: rgba(229, 37, 42, 0.2);
    }

    /* Contact Card */
    .contact-card {
        background: #ffffff;
        border-radius: 20px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
        border: 1px solid #edf2f7;
        border-top: 4px solid var(--primary-color);
        transform: translateZ(0);
        backface-visibility: hidden;
        will-change: auto;
    }

    .related-links-card {
        background: #ffffff;
        border-radius: 20px;
        border: 1px solid #edf2f7;
        padding: 1.5rem;
        box-shadow: 0 4px 15px rgba(0,0,0,0.02);
    }

    .related-link-item {
        padding: 0.6rem 0;
        border-bottom: 1px dashed #edf2f7;
        display: flex;
        align-items: center;
        justify-content: space-between;
        text-decoration: none;
        color: #334155;
        font-weight: 500;
        font-size: 0.92rem;
        transition: all 0.2s;
    }

    .related-link-item:last-child {
        border-bottom: none;
    }

    .related-link-item:hover {
        color: var(--primary-color);
        padding-left: 6px;
    }

    .faq-accordion .accordion-button:not(.collapsed) {
        background-color: rgba(229, 37, 42, 0.08);
        color: var(--primary-color);
        box-shadow: none;
    }
</style>

<!-- SEO Breadcrumb Navigation Bar -->
<?php if(!isset($full_page_override) || !$full_page_override): ?>
    <div class="breadcrumb-nav-bar">
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php"><i class="fa-solid fa-house me-1"></i> Home</a></li>
                    <li class="breadcrumb-item"><a href="index.php#services"><?= htmlspecialchars($category_name) ?></a></li>
                    <li class="breadcrumb-item active" aria-current="page"><?= htmlspecialchars($display_title) ?></li>
                </ol>
            </nav>
        </div>
    </div>
<?php endif; ?>

<!-- Main Content Area -->
<main style="overflow-x: hidden; width: 100%;">
    <?php if(isset($full_page_override) && $full_page_override): ?>
        <div class="content-section p-0">
            <?= isset($custom_content) ? $custom_content : '' ?>
            <?= isset($frontend_custom_sections) ? $frontend_custom_sections : '' ?>
            
            <div class="container mt-5">
                <?php if(!empty($specs)): ?>
                    <h4 class="fw-bold mb-3 text-dark text-center"><i class="fa-solid fa-list-check me-2 text-primary" style="color: var(--primary-color) !important;"></i> Specifications & Guidelines</h4>
                    <div class="rich-text-content p-4 bg-white rounded-4 shadow-sm border mb-5">
                        <?= $specs ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    <?php else: ?>
    <div class="content-section">
        <div class="container">
            <?php 
                $has_real_custom_content = !empty(trim($custom_content ?? ''));
                $has_real_specs = !empty(trim($specs ?? ''));
                $has_real_gallery = !empty($gallery_images) && $gallery_images !== '[]' && $gallery_images !== 'null' && $gallery_images !== '""';
                $has_backend_content = $has_real_custom_content || $has_real_specs || $has_real_gallery;
                $is_welcome_hidden = isset($hide_default_welcome) && $hide_default_welcome;
                $should_show_top_section = $is_welcome_hidden ? $has_real_custom_content : true;
            ?>
            <?php if($should_show_top_section): ?>
            <div class="row g-4 mb-5">
                <!-- Content Area (Left 7 Cols) -->
                <div class="col-lg-7 order-2 order-lg-1 pe-lg-4">
                    <?php if(!empty($custom_content)): ?>
                        <div class="rich-text-content mb-5 bg-white p-4 p-lg-5 rounded-4 shadow-sm border">
                            <?= $custom_content ?>
                        </div>
                    <?php elseif(!isset($hide_default_welcome) || !$hide_default_welcome): ?>
                        <!-- High-Quality Generated SEO Copy for this service -->
                        <div class="bg-white p-4 p-lg-5 rounded-4 shadow-sm border mb-5">
                            <?php 
                                $heading_text = (stripos($display_title, 'services') !== false || stripos($display_title, 'ncr') !== false) 
                                    ? htmlspecialchars($display_title) 
                                    : 'Comprehensive ' . htmlspecialchars($display_title) . ' at Home';
                            ?>
                            <h2 class="fw-bold mb-4 text-dark"><?= $heading_text ?></h2>
                            
                            <p class="text-muted lead fs-6 mb-4" style="line-height: 1.8;">
                                At <strong>DM Healthcare</strong>, we deliver dedicated hospital-standard medical care directly to your doorstep. Our specialized team for <strong><?= htmlspecialchars($display_title) ?></strong> combines clinical excellence, certified caregiver assistance, and 24/7 physician oversight to ensure patient safety, dignity, and faster recovery across Faridabad, Noida, Delhi, and Gurugram.
                            </p>

                            <!-- Key Pillars Grid -->
                            <div class="row g-3 mb-5">
                                <div class="col-sm-6">
                                    <div class="feature-point-card">
                                        <div class="d-flex align-items-center gap-3 mb-2">
                                            <div class="rounded-circle d-flex align-items-center justify-content-center" style="width: 44px; height: 44px; background: rgba(229, 37, 42, 0.1); color: var(--primary-color);">
                                                <i class="fa-solid fa-user-doctor fs-5"></i>
                                            </div>
                                            <h6 class="fw-bold mb-0 text-dark">Certified Specialists</h6>
                                        </div>
                                        <p class="text-muted small mb-0">Police-verified, background-checked nursing staff and healthcare professionals.</p>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="feature-point-card">
                                        <div class="d-flex align-items-center gap-3 mb-2">
                                            <div class="rounded-circle d-flex align-items-center justify-content-center" style="width: 44px; height: 44px; background: rgba(16, 185, 129, 0.1); color: #059669;">
                                                <i class="fa-solid fa-clock-rotate-left fs-5"></i>
                                            </div>
                                            <h6 class="fw-bold mb-0 text-dark">24x7 Vital Monitoring</h6>
                                        </div>
                                        <p class="text-muted small mb-0">Daily digital vitals tracking shared directly with families and treating doctors.</p>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="feature-point-card">
                                        <div class="d-flex align-items-center gap-3 mb-2">
                                            <div class="rounded-circle d-flex align-items-center justify-content-center" style="width: 44px; height: 44px; background: rgba(59, 130, 246, 0.1); color: #2563eb;">
                                                <i class="fa-solid fa-shield-virus fs-5"></i>
                                            </div>
                                            <h6 class="fw-bold mb-0 text-dark">Sterilized Equipment</h6>
                                        </div>
                                        <p class="text-muted small mb-0">Multi-stage sanitized, hospital-grade equipment with zero cross-infection risk.</p>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="feature-point-card">
                                        <div class="d-flex align-items-center gap-3 mb-2">
                                            <div class="rounded-circle d-flex align-items-center justify-content-center" style="width: 44px; height: 44px; background: rgba(245, 158, 11, 0.1); color: #d97706;">
                                                <i class="fa-solid fa-bolt fs-5"></i>
                                            </div>
                                            <h6 class="fw-bold mb-0 text-dark">Fast Doorstep Setup</h6>
                                        </div>
                                        <p class="text-muted small mb-0">Rapid deployment in 30-60 mins across Faridabad, Noida and Delhi NCR.</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Care Checklist Section -->
                            <h4 class="fw-bold mb-3 text-dark">What is Included in Our Care Plan:</h4>
                            <ul class="list-unstyled mb-4">
                                <li class="d-flex align-items-start gap-2 mb-2 text-muted">
                                    <i class="fa-solid fa-circle-check text-danger mt-1" style="color: var(--primary-color) !important;"></i>
                                    <span>Continuous monitoring of BP, Heart Rate, Pulse, SpO2 Oxygen, and Blood Glucose levels.</span>
                                </li>
                                <li class="d-flex align-items-start gap-2 mb-2 text-muted">
                                    <i class="fa-solid fa-circle-check text-danger mt-1" style="color: var(--primary-color) !important;"></i>
                                    <span>Timely administration of oral medications, injections, IV drips, and nebulization.</span>
                                </li>
                                <li class="d-flex align-items-start gap-2 mb-2 text-muted">
                                    <i class="fa-solid fa-circle-check text-danger mt-1" style="color: var(--primary-color) !important;"></i>
                                    <span>Post-operative wound dressing, catheter care, and bedsore prevention protocols.</span>
                                </li>
                                <li class="d-flex align-items-start gap-2 mb-2 text-muted">
                                    <i class="fa-solid fa-circle-check text-danger mt-1" style="color: var(--primary-color) !important;"></i>
                                    <span>Dedicated doctor on call and rapid ambulance escalation support for medical emergencies.</span>
                                </li>
                            </ul>
                        </div>
                    <?php endif; ?>

                    <?php if(!empty($specs)): ?>
                        <h4 class="fw-bold mb-3 text-dark"><i class="fa-solid fa-list-check me-2 text-primary" style="color: var(--primary-color) !important;"></i> Specifications & Care Details</h4>
                        <div class="rich-text-content p-4 bg-white rounded-4 shadow-sm border mb-5">
                            <?= $specs ?>
                        </div>
                    <?php endif; ?>

                    <!-- Built-in FAQs for SEO Ranking -->
                    <div class="bg-white p-4 p-lg-5 rounded-4 shadow-sm border">
                        <h4 class="fw-bold mb-4 text-dark"><i class="fa-solid fa-circle-question me-2 text-danger" style="color: var(--primary-color) !important;"></i> Frequently Asked Questions</h4>
                        
                        <div class="accordion faq-accordion" id="pageFaqAccordion">
                            <div class="accordion-item border rounded-3 mb-3 overflow-hidden">
                                <h2 class="accordion-header" id="faqHeading1">
                                    <button class="accordion-button fw-semibold text-dark" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse1">
                                        How quickly can DM Healthcare deploy this service at home?
                                    </button>
                                </h2>
                                <div id="faqCollapse1" class="accordion-collapse collapse show" data-bs-parent="#pageFaqAccordion">
                                    <div class="accordion-body text-muted small lh-base">
                                        We offer rapid deployment within 30 to 60 minutes in Faridabad, and 60 to 90 minutes across Noida, Greater Noida, South Delhi, and Gurugram.
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item border rounded-3 mb-3 overflow-hidden">
                                <h2 class="accordion-header" id="faqHeading2">
                                    <button class="accordion-button collapsed fw-semibold text-dark" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse2">
                                        Are the nursing staff and attendants background-verified?
                                    </button>
                                </h2>
                                <div id="faqCollapse2" class="accordion-collapse collapse" data-bs-parent="#pageFaqAccordion">
                                    <div class="accordion-body text-muted small lh-base">
                                        Yes, 100% of our nurses, caregivers, and medical attendants undergo strict police verification, Aadhaar verification, and formal clinical skill assessment before being deployed.
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item border rounded-3 mb-3 overflow-hidden">
                                <h2 class="accordion-header" id="faqHeading3">
                                    <button class="accordion-button collapsed fw-semibold text-dark" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse3">
                                        Can I get 12-hour or 24-hour shifts?
                                    </button>
                                </h2>
                                <div id="faqCollapse3" class="accordion-collapse collapse" data-bs-parent="#pageFaqAccordion">
                                    <div class="accordion-body text-muted small lh-base">
                                        Yes, we provide flexible care plans including 12-hour day/night shifts, 24-hour live-in care, short visit procedures, as well as monthly subscription packages.
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item border rounded-3 overflow-hidden">
                                <h2 class="accordion-header" id="faqHeading4">
                                    <button class="accordion-button collapsed fw-semibold text-dark" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse4">
                                        How do I book or request a doctor assessment?
                                    </button>
                                </h2>
                                <div id="faqCollapse4" class="accordion-collapse collapse" data-bs-parent="#pageFaqAccordion">
                                    <div class="accordion-body text-muted small lh-base">
                                        You can call our 24/7 helpline at <strong>+91-9891989686</strong> or fill out the appointment form on this page. Our care coordinator will contact you in under 10 minutes.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Right Column: Media, Contact Card & Related Internal Links (5 Cols) -->
                <div class="col-lg-5 order-1 order-lg-2">
                    <div>
                        <!-- Feature Image -->
                        <div class="mb-4">
                            <img src="<?= htmlspecialchars($display_image) ?>" alt="<?= htmlspecialchars($display_title) ?>" class="img-fluid rounded-4 shadow w-100 border border-3 border-white" style="height: 280px; object-fit: cover;" onerror="this.onerror=null; this.src='assets/images/about.jpg';">
                        </div>

                        <!-- Sticky Contact & Booking Card -->
                        <?php
                            $is_equipment_page = (stripos($slug, 'bed') !== false || stripos($slug, 'oxygen') !== false || stripos($slug, 'bipap') !== false || stripos($slug, 'wheelchair') !== false || stripos($slug, 'equipment') !== false || stripos($slug, 'scooter') !== false || stripos($slug, 'accessories') !== false);
                            $card_heading = $is_equipment_page ? 'Rent or Buy Equipment' : 'Need Immediate Healthcare?';
                            $card_subtitle = $is_equipment_page ? 'Call our 24/7 care desk for same-day doorstep delivery, free installation & best rental rates.' : 'Speak directly with our 24/7 care coordinator for instant booking & doorstep medical service.';
                        ?>
                        <div class="contact-card p-4 text-center mb-4">
                            <div class="rounded-circle d-flex align-items-center justify-content-center mx-auto mb-3 text-white shadow" style="width: 56px; height: 56px; background: var(--primary-color);">
                                <i class="fa-solid fa-headset fs-4"></i>
                            </div>
                            <h5 class="fw-bold mb-1 text-dark"><?= $card_heading ?></h5>
                            <p class="text-muted small mb-3"><?= $card_subtitle ?></p>
                            
                            <div class="d-grid gap-2 mb-3">
                                <a href="tel:+919891989686" class="btn btn-primary py-3 rounded-pill fw-bold shadow-sm d-flex align-items-center justify-content-center gap-2" style="background: var(--primary-color); border: none;">
                                    <i class="fa-solid fa-phone"></i> Call +91-9891989686
                                </a>
                                <a href="https://wa.me/919891989686?text=Hello%20DM%20Healthcare,%20I%20need%20details%20for%20<?= urlencode($display_title) ?>" target="_blank" class="btn btn-outline-success py-2 rounded-pill fw-bold d-flex align-items-center justify-content-center gap-2">
                                    <i class="fa-brands fa-whatsapp"></i> Chat on WhatsApp
                                </a>
                            </div>
                            <small class="text-success fw-bold"><i class="fa-solid fa-bolt me-1"></i> 30-60 Mins Response Across Delhi NCR</small>
                        </div>

                        <!-- Related Services Links (Internal Linking for SEO) -->
                        <?php if(!empty($related_services)): ?>
                        <div class="related-links-card">
                            <h6 class="fw-bold text-dark mb-3"><i class="fa-solid fa-compass me-2 text-primary" style="color: var(--primary-color) !important;"></i> Related Healthcare Services</h6>
                            <div class="d-flex flex-column">
                                <?php foreach($related_services as $rel): ?>
                                    <a href="page.php?title=<?= urlencode($rel['link']) ?>" class="related-link-item">
                                        <span><?= htmlspecialchars($rel['title']) ?></span>
                                        <i class="fa-solid fa-chevron-right small text-muted"></i>
                                    </a>
                                <?php endforeach; ?>
                            </div>
                        </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            <?php endif; ?>

            <!-- Frontend Custom Sections (Full Width if any defined) -->
            <?php if(isset($frontend_custom_sections) && !empty($frontend_custom_sections)): ?>
                <div class="mt-4">
                    <?= $frontend_custom_sections ?>
                </div>
            <?php endif; ?>
        </div>
    </div>
    <?php endif; ?>
</main>

<!-- Footer -->
<?php include 'includes/footer.php'; ?>
