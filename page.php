<?php
require_once 'config/db.php';
$page_title = isset($_GET['title']) ? $_GET['title'] : 'Page Not Found';

// Fetch custom page content from nav_items if it exists
// We check BOTH title and link because the URL could be either the title or the generated slug (link)
$stmt = $conn->prepare("SELECT * FROM nav_items WHERE title = :title OR link = :link LIMIT 1");
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
$display_image = $custom_image ? $custom_image : 'assets/images/about.jpg';

// HYBRID ROUTING: If a physical file exists for this page, let it override variables like $custom_content!
$slug = strtolower(str_replace([' ', '/'], ['-', '-'], $page_title));
$slug = preg_replace('/-+/', '-', $slug); // remove double dashes
$physical_file = 'pages/' . $slug . '.php';
if (file_exists($physical_file)) {
    require $physical_file;
}

$seo_title = $page_data && $page_data['seo_title'] ? $page_data['seo_title'] : $page_title . ' - DmHealthcare';
$seo_desc = $page_data ? $page_data['seo_description'] : 'Explore our professional healthcare services in ' . $page_title;
$display_title = $page_data ? $page_data['title'] : ucwords(str_replace('-', ' ', $page_title));
?>
<!-- Header -->
<?php include 'includes/header.php'; ?>

<style>
    body { font-family: 'Inter', sans-serif; background-color: #f8fafd; }
    .page-header {
        background: <?= $banner_image ? "url('".htmlspecialchars($banner_image)."')" : "linear-gradient(135deg, #0A5BFF 0%, #0036a8 100%)" ?>;
        background-size: cover;
        background-position: center;
        color: white;
        min-height: <?= $banner_image ? '400px' : '300px' ?>;
        text-align: center;
        position: relative;
        border-bottom: 5px solid #ff7b00;
    }
    @media (max-width: 768px) {
        .page-header {
            min-height: 250px;
        }
    }
    <?php if($banner_image): ?>
    .page-header .container { position: relative; z-index: 2; }
    <?php else: ?>
    .page-header::before {
        content: '';
        position: absolute;
        top: 0; left: 0; right: 0; bottom: 0;
        background-image: radial-gradient(circle at 2px 2px, rgba(255,255,255,0.1) 1px, transparent 0);
        background-size: 24px 24px;
    }
    <?php endif; ?>
    
    .content-section {
        padding: 80px 0;
        background-color: #f8fafd;
    }
    
    /* Gradient Text for Headings */
    .gradient-text {
        background: linear-gradient(135deg, #0A5BFF, #ff7b00);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        font-weight: 800;
    }

    .rich-text-content {
        font-size: 1.15rem;
        line-height: 1.9;
        color: #374151;
    }
    .rich-text-content p {
        margin-bottom: 1.5rem;
    }
    .rich-text-content ul {
        padding-left: 1.5rem;
        margin-bottom: 1.5rem;
    }
    .rich-text-content li {
        margin-bottom: 0.5rem;
        position: relative;
    }
    
    /* Sticky Contact Card */
    .contact-card {
        background: white;
        border-radius: 20px;
        box-shadow: 0 15px 35px rgba(10, 91, 255, 0.08);
        border-top: 4px solid #0A5BFF;
        transition: transform 0.3s ease;
    }
    .contact-card:hover {
        transform: translateY(-5px);
    }
    
    .gallery-img {
        width: 100%;
        height: 250px;
        object-fit: cover;
        border-radius: 16px;
        transition: all 0.4s ease;
        box-shadow: 0 8px 20px rgba(0,0,0,0.05);
    }
    .gallery-img:hover {
        transform: scale(1.05) translateY(-5px);
        box-shadow: 0 15px 30px rgba(10,91,255,0.2);
    }
</style>

    <!-- Page Header (Only show if not full page override) -->
    <?php if(!isset($full_page_override) || !$full_page_override): ?>
        <?php if($banner_image): ?>
            <div class="banner-wrapper" style="width: 100%; overflow: hidden; background-color: #f8fafd;">
                <img src="<?= htmlspecialchars($banner_image) ?>" alt="<?= htmlspecialchars($page_title) ?>" style="width: 100%; height: auto; display: block;">
            </div>
            <?php if($short_desc): ?>
            <div class="container mt-3">
                <p class="lead mb-0 text-dark opacity-75 text-center">
                    <?= htmlspecialchars($short_desc) ?>
                </p>
            </div>
            <?php endif; ?>
        <?php else: ?>
            <div class="page-header d-flex align-items-center">
                <div class="container">
                    <h1 class="display-4 fw-bold mb-3"><?= htmlspecialchars($page_title) ?></h1>
                    <?php if($short_desc): ?>
                    <p class="lead mb-0 text-light opacity-75">
                        <?= htmlspecialchars($short_desc) ?>
                    </p>
                    <?php endif; ?>
                </div>
            </div>
        <?php endif; ?>
    <?php endif; ?>

    <!-- Main Content -->
<main style="overflow-x: hidden; width: 100%;">
    <?php if(isset($full_page_override) && $full_page_override): ?>
        <div class="content-section">
            <?= $custom_content ?>
            
            <div class="container mt-5">
                <?php if(!empty($specs)): ?>
                    <h4 class="fw-bold mb-3 text-dark text-center"><i class="fa-solid fa-list-check me-2 text-primary"></i> Additional Specifications</h4>
                    <div class="rich-text-content p-4 bg-white rounded-4 shadow-sm border border-light mb-5">
                        <?= $specs ?>
                    </div>
                <?php endif; ?>

                <?php if(!empty($gallery_images)): ?>
                    <div class="mt-5 pt-4 border-top">
                        <h3 class="fw-bold text-center mb-5 text-dark">Image Gallery</h3>
                        <div class="row g-4 mb-5">
                            <?php foreach($gallery_images as $img): ?>
                                <div class="col-md-4 col-sm-6">
                                    <div class="overflow-hidden rounded-4 shadow-sm">
                                        <img src="<?= htmlspecialchars($img) ?>" class="gallery-img w-100" alt="Gallery Image">
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    <?php else: ?>
    <div class="content-section">
        <div class="container">
            <?php if(!isset($hide_default_welcome) || !$hide_default_welcome): ?>
            <div class="row mb-5">
                <!-- Content Area -->
                <div class="col-lg-7 order-2 order-lg-1 pe-lg-5 mt-4 mt-lg-0">
                    <h2 class="mb-4 gradient-text">Welcome to <?= htmlspecialchars($display_title) ?></h2>
                    
                    <?php if(!empty($custom_content)): ?>
                        <div class="rich-text-content mb-5 bg-white p-4 p-lg-5 rounded-4 shadow-sm border border-light">
                            <?= $custom_content // Already safe HTML from TinyMCE ?>
                        </div>
                    <?php else: ?>
                        <div class="bg-white p-4 p-lg-5 rounded-4 shadow-sm border border-light mb-5">
                            <h3 class="fw-bold mb-3 text-dark">Comprehensive Healthcare Services in <?= htmlspecialchars($display_title) ?></h3>
                            <p class="text-muted lead mb-4">
                                At DM Healthcare, we bring world-class medical facilities and experienced professionals directly to you. Our dedicated team for <strong><?= htmlspecialchars($display_title) ?></strong> ensures you and your loved ones receive the highest quality of care in a comfortable environment.
                            </p>
                            
                            <div class="row g-4 mb-4">
                                <div class="col-md-6">
                                    <div class="d-flex align-items-start gap-3">
                                        <div class="bg-primary bg-opacity-10 p-3 rounded-circle text-primary">
                                            <i class="fa-solid fa-user-doctor fs-4"></i>
                                        </div>
                                        <div>
                                            <h5 class="fw-bold">Expert Professionals</h5>
                                            <p class="text-muted small">Highly qualified doctors and trained nursing staff available 24/7.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="d-flex align-items-start gap-3">
                                        <div class="bg-primary bg-opacity-10 p-3 rounded-circle text-primary">
                                            <i class="fa-solid fa-truck-medical fs-4"></i>
                                        </div>
                                        <div>
                                            <h5 class="fw-bold">Fast Response</h5>
                                            <p class="text-muted small">Quick emergency services and timely home care visits.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="bg-light p-4 rounded-3 border">
                                <h6 class="fw-bold text-dark"><i class="fa-solid fa-wand-magic-sparkles text-warning me-2"></i> Ready to Customize?</h6>
                                <p class="text-muted small mb-0">Login to the Admin Panel and add your own text, images, and formatting to this section.</p>
                            </div>
                        </div>
                    <?php endif; ?>

                    <?php if(!empty($specs)): ?>
                        <h4 class="fw-bold mt-5 mb-3 text-dark"><i class="fa-solid fa-list-check me-2 text-primary"></i> Specifications & Details</h4>
                        <div class="rich-text-content p-4 bg-white rounded-4 shadow-sm border border-light">
                            <?= $specs ?>
                        </div>
                    <?php endif; ?>
                </div>

                <!-- Main Image Area -->
                <div class="col-lg-5 order-1 order-lg-2">
                    <div class="mb-4">
                        <img src="<?= htmlspecialchars($display_image) ?>" alt="Service Image" class="img-fluid rounded-4 shadow-lg w-100 border border-3 border-white" onerror="this.src='assets/images/home-dialysis.jpg'">
                        
                        <div class="contact-card mt-4 p-4 text-center">
                            <div class="bg-primary rounded-circle d-flex align-items-center justify-content-center mx-auto mb-3 shadow" style="width: 60px; height: 60px;">
                                <i class="fa-solid fa-headset text-white fs-4"></i>
                            </div>
                            <h5 class="fw-bold mb-3 text-dark">Need Assistance?</h5>
                            <p class="text-muted small mb-4">Our team is available 24/7 to help you with your queries and book appointments instantly.</p>
                            <a href="index.php#appointment" class="btn btn-primary w-100 py-3 rounded-pill fw-bold shadow-sm d-flex align-items-center justify-content-center gap-2">
                                <i class="fa-regular fa-calendar-check"></i> Book Appointment
                            </a>
                        </div>
                    </div>

                    <!-- Image Gallery Moved to Right Column -->
                    <?php if(!empty($gallery_images)): ?>
                    <div class="mt-4 pt-3 border-top">
                        <h5 class="fw-bold mb-4 text-dark"><i class="fa-solid fa-images text-primary me-2"></i> Image Gallery</h5>
                        <div class="row g-3">
                            <?php foreach($gallery_images as $img): ?>
                                <div class="col-6">
                                    <div class="overflow-hidden rounded-3 shadow-sm position-relative group">
                                        <img src="<?= htmlspecialchars($img) ?>" class="gallery-img w-100" alt="Gallery Image" style="height: 150px; object-fit: cover; transition: transform 0.3s ease;" onmouseover="this.style.transform='scale(1.05)'" onmouseout="this.style.transform='scale(1)'">
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                    <?php endif; ?>
                </div>
            </div>
            <?php endif; ?>

            <!-- Frontend Custom Sections (Full Width) -->
            <?php if(isset($frontend_custom_sections) && !empty($frontend_custom_sections)): ?>
                <?= $frontend_custom_sections ?>
            <?php endif; ?>



        </div>
    </div>
    <?php endif; ?>

</main>

    <!-- Footer -->
    <?php include 'includes/footer.php'; ?>
