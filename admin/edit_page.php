<?php
session_start();
if (!isset($_SESSION['admin_id'])) {
    header('Location: login.php');
    exit();
}
require_once '../config/db.php';

$id = isset($_GET['id']) ? (int)$_GET['id'] : 0;
if ($id === 0) die('Invalid ID');

$success = '';
$error = '';

// Handle form submission
if (isset($_POST['update_page'])) {
    $short_desc = trim($_POST['short_description']);
    $content = trim($_POST['page_content']);
    $specs = trim($_POST['specifications']);
    $seo_title = trim($_POST['seo_title']);
    $seo_desc = trim($_POST['seo_description']);

    // Fetch existing item to keep old images if not overwritten
    $stmt = $conn->prepare("SELECT page_image, banner_image, gallery_images FROM nav_items WHERE id = :id");
    $stmt->execute(['id' => $id]);
    $current = $stmt->fetch(PDO::FETCH_ASSOC);

    $page_image = $current['page_image'];
    $banner_image = $current['banner_image'];
    $gallery_images = $current['gallery_images'] ? json_decode($current['gallery_images'], true) : [];

    $upload_dir = '../assets/images/pages/';
    if (!is_dir($upload_dir)) mkdir($upload_dir, 0777, true);

    // Upload Main Image
    if (isset($_FILES['page_image']) && $_FILES['page_image']['error'] === 0) {
        $ext = pathinfo($_FILES['page_image']['name'], PATHINFO_EXTENSION);
        $name = 'main_' . $id . '_' . time() . '.' . $ext;
        if (move_uploaded_file($_FILES['page_image']['tmp_name'], $upload_dir . $name)) {
            $page_image = 'assets/images/pages/' . $name;
        }
    }

    // Upload Banner Image
    if (isset($_FILES['banner_image']) && $_FILES['banner_image']['error'] === 0) {
        $ext = pathinfo($_FILES['banner_image']['name'], PATHINFO_EXTENSION);
        $name = 'banner_' . $id . '_' . time() . '.' . $ext;
        if (move_uploaded_file($_FILES['banner_image']['tmp_name'], $upload_dir . $name)) {
            $banner_image = 'assets/images/pages/' . $name;
        }
    }

    // Upload Gallery Images
    if (isset($_FILES['gallery_upload']) && !empty($_FILES['gallery_upload']['name'][0])) {
        $total_files = count($_FILES['gallery_upload']['name']);
        for ($i = 0; $i < $total_files; $i++) {
            if ($_FILES['gallery_upload']['error'][$i] === 0) {
                $ext = pathinfo($_FILES['gallery_upload']['name'][$i], PATHINFO_EXTENSION);
                $name = 'gallery_' . $id . '_' . time() . '_' . $i . '.' . $ext;
                if (move_uploaded_file($_FILES['gallery_upload']['tmp_name'][$i], $upload_dir . $name)) {
                    $gallery_images[] = 'assets/images/pages/' . $name;
                }
            }
        }
    }

    // Handle Delete Gallery Image
    if (isset($_POST['delete_gallery'])) {
        foreach ($_POST['delete_gallery'] as $del_img) {
            $gallery_images = array_filter($gallery_images, function($img) use ($del_img) {
                return $img !== $del_img;
            });
        }
        $gallery_images = array_values($gallery_images); // Reindex
    }

    $gallery_json = json_encode($gallery_images);

    $stmt = $conn->prepare("UPDATE nav_items SET 
        page_content = :content, 
        page_image = :image,
        short_description = :short_desc,
        banner_image = :banner,
        gallery_images = :gallery,
        seo_title = :seo_title,
        seo_description = :seo_desc,
        specifications = :specs
        WHERE id = :id");

    $params = [
        'content' => $content,
        'image' => $page_image,
        'short_desc' => $short_desc,
        'banner' => $banner_image,
        'gallery' => $gallery_json,
        'seo_title' => $seo_title,
        'seo_desc' => $seo_desc,
        'specs' => $specs,
        'id' => $id
    ];
    
    if ($stmt->execute($params)) {
        $success = "Page content and media saved successfully!";
    } else {
        $error = "Failed to update page in database.";
    }
}

// Fetch the item
$stmt = $conn->prepare("SELECT * FROM nav_items WHERE id = :id");
$stmt->execute(['id' => $id]);
$item = $stmt->fetch(PDO::FETCH_ASSOC);

if (!$item) die('Page not found');

$gallery = $item['gallery_images'] ? json_decode($item['gallery_images'], true) : [];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Service Page: <?= htmlspecialchars($item['title']) ?> - DM Admin</title>
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- TinyMCE Rich Editor -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tinymce/6.8.3/tinymce.min.js" referrerpolicy="origin"></script>
    <script>
      tinymce.init({
        selector: '.rich-editor',
        plugins: 'lists link image table code media visualblocks wordcount',
        toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline forecolor backcolor | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | table link image | removeformat code',
        menubar: false,
        height: 380,
        content_style: 'body { font-family: Outfit, sans-serif; font-size: 15px; color: #334155; line-height: 1.7; }'
      });

      // Quick template insert function for best healthcare content
      function insertHealthcareTemplate() {
          var template = `
<h3>Overview & Comprehensive Care</h3>
<p>At <strong>DM Healthcare</strong>, we deliver dedicated and hospital-grade medical care tailored to patient comfort and fast rehabilitation at home. Our verified team ensures round-the-clock safety, professional clinical monitoring, and empathetic support for families across Faridabad, Noida, and Delhi NCR.</p>

<h4>Key Benefits of Our Care:</h4>
<ul>
  <li><strong>24/7 Monitored Support:</strong> Certified healthcare personnel with continuous supervision by senior physicians.</li>
  <li><strong>Sanitized & Hospital-Grade Equipment:</strong> State-of-the-art medical instruments, regularly serviced and sanitized.</li>
  <li><strong>Personalized Recovery Plan:</strong> Customized daily care routines adjusted to patient progress and doctor recommendations.</li>
  <li><strong>Transparent & Affordable Pricing:</strong> Flexible daily, weekly, and monthly packages with zero hidden fees.</li>
</ul>

<h4>What Is Included in This Service:</h4>
<ul>
  <li>Daily vital signs monitoring (BP, Pulse, SpO2, Blood Sugar, Temperature)</li>
  <li>Administration of medications, injections, IV drips, and nebulization</li>
  <li>Post-surgical wound dressing and hygiene assistance</li>
  <li>Emergency escalation protocols and direct ambulance support</li>
</ul>
`;
          tinymce.get('page_content_editor').setContent(template);
      }
    </script>
    <style>
        :root {
            --primary-color: #E5252A;
            --primary-hover: #C8102E;
            --card-border: #edf2f7;
            --light-bg: #f8fafc;
        }

        body { 
            font-family: 'Outfit', sans-serif;
            background-color: var(--light-bg); 
            color: #334155;
            overflow-x: hidden; 
        }

        .main-content { 
            margin-left: 270px; 
            padding: 2.2rem 2.5rem; 
            min-height: 100vh;
        }

        @media (max-width: 991px) {
            .main-content { margin-left: 0; padding: 1.5rem; }
        }

        .page-header-box {
            background: #ffffff;
            border-radius: 20px;
            padding: 1.5rem 1.8rem;
            border: 1px solid var(--card-border);
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.02);
            margin-bottom: 2rem;
        }

        /* Modern Tabs */
        .custom-editor-tabs {
            border-bottom: 2px solid var(--card-border);
            gap: 10px;
        }

        .custom-editor-tabs .nav-link {
            border: none;
            color: #64748b;
            font-weight: 600;
            font-size: 0.95rem;
            padding: 0.8rem 1.4rem;
            border-radius: 12px 12px 0 0;
            transition: all 0.2s ease;
            position: relative;
        }

        .custom-editor-tabs .nav-link:hover {
            color: #0f172a;
            background: rgba(0,0,0,0.02);
        }

        .custom-editor-tabs .nav-link.active {
            color: var(--primary-color);
            background: #ffffff;
            border-bottom: 3px solid var(--primary-color);
        }

        .editor-container-card {
            background: #ffffff;
            border-radius: 20px;
            border: 1px solid var(--card-border);
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.02);
            padding: 2rem;
        }

        .form-control, .form-select {
            border-radius: 12px;
            padding: 0.75rem 1rem;
            border: 1px solid #e2e8f0;
            transition: all 0.2s ease;
        }

        .form-control:focus {
            border-color: var(--primary-color);
            box-shadow: 0 0 0 4px rgba(229, 37, 42, 0.12);
        }

        .gallery-item {
            position: relative;
            display: inline-block;
            margin: 0 12px 12px 0;
        }

        .gallery-item img {
            width: 120px;
            height: 120px;
            object-fit: cover;
            border-radius: 12px;
            border: 2px solid #e2e8f0;
            box-shadow: 0 4px 10px rgba(0,0,0,0.05);
        }

        .gallery-item .delete-checkbox-label {
            position: absolute;
            top: 6px;
            right: 6px;
            background: rgba(220, 38, 38, 0.9);
            color: white;
            padding: 2px 6px;
            border-radius: 6px;
            font-size: 11px;
            cursor: pointer;
        }

        .google-preview-card {
            background: #ffffff;
            border: 1px solid #dadce0;
            border-radius: 12px;
            padding: 1.2rem;
            max-width: 650px;
        }

        .google-url {
            color: #202124;
            font-size: 12px;
            margin-bottom: 4px;
        }

        .google-title {
            color: #1a0dab;
            font-size: 18px;
            font-weight: 500;
            line-height: 1.3;
            text-decoration: none;
        }

        .google-desc {
            color: #4d5156;
            font-size: 13px;
            line-height: 1.5;
            margin-top: 4px;
        }

        .tox-notifications-container { display: none !important; }
    </style>
</head>
<body>

<?php include 'includes/sidebar.php'; ?>

<main class="main-content">
    <!-- Header -->
    <div class="page-header-box d-flex flex-column flex-md-row justify-content-between align-items-md-center gap-3">
        <div>
            <div class="d-flex align-items-center gap-2 mb-1">
                <a href="navbar_manager.php" class="btn btn-sm btn-light border rounded-circle text-muted" style="width: 32px; height: 32px;" title="Back">
                    <i class="fa-solid fa-arrow-left"></i>
                </a>
                <h3 class="fw-bold mb-0 text-dark">Edit Content: <?= htmlspecialchars($item['title']) ?></h3>
            </div>
            <p class="text-muted mb-0 small ms-4 ps-2">
                Live URL: <a href="../page.php?title=<?= urlencode($item['link']) ?>" target="_blank" class="text-primary fw-semibold">/page.php?title=<?= htmlspecialchars($item['link']) ?></a>
            </p>
        </div>
        <div class="d-flex gap-2">
            <a href="../page.php?title=<?= urlencode($item['link']) ?>" target="_blank" class="btn btn-outline-dark rounded-pill px-4 fw-semibold btn-sm">
                <i class="fa-solid fa-arrow-up-right-from-square me-1"></i> View Live Page
            </a>
        </div>
    </div>

    <?php if($success): ?>
        <div class="alert alert-success alert-dismissible fade show rounded-4 border-0 shadow-sm mb-4" role="alert">
            <i class="fa-solid fa-circle-check me-2"></i> <?= htmlspecialchars($success) ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    <?php endif; ?>

    <?php if($error): ?>
        <div class="alert alert-danger alert-dismissible fade show rounded-4 border-0 shadow-sm mb-4" role="alert">
            <i class="fa-solid fa-triangle-exclamation me-2"></i> <?= htmlspecialchars($error) ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    <?php endif; ?>

    <form method="POST" enctype="multipart/form-data">
        <div class="editor-container-card">
            <!-- Navigation Tabs -->
            <ul class="nav custom-editor-tabs mb-4" id="editorTabs" role="tablist">
                <li class="nav-item">
                    <button class="nav-link active" id="content-tab" data-bs-toggle="tab" data-bs-target="#tab-content" type="button">
                        <i class="fa-solid fa-file-lines me-2"></i> 1. Content & Text
                    </button>
                </li>
                <li class="nav-item">
                    <button class="nav-link" id="specs-tab" data-bs-toggle="tab" data-bs-target="#tab-specs" type="button">
                        <i class="fa-solid fa-list-check me-2"></i> 2. Specifications & Features
                    </button>
                </li>
                <li class="nav-item">
                    <button class="nav-link" id="media-tab" data-bs-toggle="tab" data-bs-target="#tab-media" type="button">
                        <i class="fa-solid fa-images me-2"></i> 3. Banners & Gallery
                    </button>
                </li>
                <li class="nav-item">
                    <button class="nav-link" id="seo-tab" data-bs-toggle="tab" data-bs-target="#tab-seo" type="button">
                        <i class="fa-solid fa-magnifying-glass me-2"></i> 4. SEO & Google Snippet
                    </button>
                </li>
            </ul>

            <!-- Tab Content Panes -->
            <div class="tab-content">
                <!-- TAB 1: CONTENT -->
                <div class="tab-pane fade show active" id="tab-content">
                    <div class="row g-4">
                        <div class="col-12">
                            <label class="form-label fw-bold text-dark">Page Title</label>
                            <input type="text" class="form-control bg-light fw-bold" value="<?= htmlspecialchars($item['title']) ?>" readonly>
                            <small class="text-muted">Slug / Title identifier for routing.</small>
                        </div>

                        <div class="col-12">
                            <label class="form-label fw-bold text-dark">Short Highlight Description</label>
                            <textarea name="short_description" class="form-control" rows="2" placeholder="Brief 1-2 line summary of this healthcare service for the hero header."><?= htmlspecialchars($item['short_description'] ?? '') ?></textarea>
                        </div>

                        <div class="col-12">
                            <div class="d-flex justify-content-between align-items-center mb-2">
                                <label class="form-label fw-bold text-dark mb-0">Main Page Body Content</label>
                                <button type="button" class="btn btn-sm btn-outline-danger rounded-pill px-3 fw-semibold" onclick="insertHealthcareTemplate();">
                                    <i class="fa-solid fa-wand-magic-sparkles me-1"></i> Auto-Insert Healthcare Template
                                </button>
                            </div>
                            <textarea name="page_content" id="page_content_editor" class="rich-editor"><?= htmlspecialchars($item['page_content'] ?? '') ?></textarea>
                        </div>
                    </div>
                </div>

                <!-- TAB 2: SPECIFICATIONS -->
                <div class="tab-pane fade" id="tab-specs">
                    <div class="row g-4">
                        <div class="col-12">
                            <label class="form-label fw-bold text-dark">Specifications / Care Plan Details (Rendered on Sidebar / Bottom)</label>
                            <p class="text-muted small">Add equipment specs, service schedules, or bullet points here.</p>
                            <textarea name="specifications" class="rich-editor"><?= htmlspecialchars($item['specifications'] ?? '') ?></textarea>
                        </div>
                    </div>
                </div>

                <!-- TAB 3: MEDIA & BANNER -->
                <div class="tab-pane fade" id="tab-media">
                    <div class="row g-4">
                        <!-- Top Banner Image -->
                        <div class="col-md-6 border-end pe-md-4">
                            <label class="form-label fw-bold text-dark d-block">Top Header Banner Image</label>
                            <?php if(!empty($item['banner_image'])): ?>
                                <div class="mb-3 rounded-3 overflow-hidden border">
                                    <img src="../<?= htmlspecialchars($item['banner_image']) ?>" class="w-100" style="max-height: 160px; object-fit: cover;" alt="Banner Preview">
                                </div>
                            <?php endif; ?>
                            <input type="file" name="banner_image" class="form-control" accept="image/*">
                            <small class="text-muted d-block mt-1">Recommended size: 1920x450px</small>
                        </div>

                        <!-- Main Content Side Image -->
                        <div class="col-md-6 ps-md-4">
                            <label class="form-label fw-bold text-dark d-block">Side Feature Image</label>
                            <?php if(!empty($item['page_image'])): ?>
                                <div class="mb-3 rounded-3 overflow-hidden border">
                                    <img src="../<?= htmlspecialchars($item['page_image']) ?>" class="w-100" style="max-height: 160px; object-fit: cover;" alt="Feature Preview">
                                </div>
                            <?php endif; ?>
                            <input type="file" name="page_image" class="form-control" accept="image/*">
                            <small class="text-muted d-block mt-1">Recommended size: 800x600px</small>
                        </div>

                        <!-- Multi Gallery Images -->
                        <div class="col-12 border-top pt-4 mt-4">
                            <label class="form-label fw-bold text-dark d-block">Service Gallery Slider (Multiple Images)</label>
                            <input type="file" name="gallery_upload[]" multiple class="form-control mb-3" accept="image/*">
                            
                            <?php if(!empty($gallery)): ?>
                                <div class="p-3 bg-light rounded-4 border mt-3">
                                    <p class="fw-semibold text-danger small mb-2"><i class="fa-solid fa-trash-can me-1"></i> Check the box to delete an existing photo on save:</p>
                                    <div class="d-flex flex-wrap">
                                        <?php foreach($gallery as $g_img): ?>
                                            <div class="gallery-item">
                                                <img src="../<?= htmlspecialchars($g_img) ?>" alt="Gallery item">
                                                <label class="delete-checkbox-label">
                                                    <input type="checkbox" name="delete_gallery[]" value="<?= htmlspecialchars($g_img) ?>"> Delete
                                                </label>
                                            </div>
                                        <?php endforeach; ?>
                                    </div>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>

                <!-- TAB 4: SEO -->
                <div class="tab-pane fade" id="tab-seo">
                    <div class="row g-4">
                        <div class="col-lg-7">
                            <div class="mb-3">
                                <label class="form-label fw-bold text-dark">SEO Meta Title</label>
                                <input type="text" name="seo_title" id="seoTitleInput" class="form-control" placeholder="e.g. Best Elder Care Services at Home - DM Healthcare" value="<?= htmlspecialchars($item['seo_title'] ?? '') ?>" oninput="updateGooglePreview();">
                                <small class="text-muted">Recommended length: 50-60 characters.</small>
                            </div>

                            <div class="mb-3">
                                <label class="form-label fw-bold text-dark">SEO Meta Description</label>
                                <textarea name="seo_description" id="seoDescInput" class="form-control" rows="4" placeholder="Brief description summarizing the page for Google results." oninput="updateGooglePreview();"><?= htmlspecialchars($item['seo_description'] ?? '') ?></textarea>
                                <small class="text-muted">Recommended length: 140-160 characters.</small>
                            </div>
                        </div>

                        <!-- Live Google Search Snippet Preview -->
                        <div class="col-lg-5">
                            <label class="form-label fw-bold text-dark d-block">Live Google Search Preview</label>
                            <div class="google-preview-card shadow-sm">
                                <div class="google-url">https://dmhealthcares.com › <?= htmlspecialchars($item['link']) ?></div>
                                <a href="#" class="google-title" id="previewTitleDisplay">
                                    <?= !empty($item['seo_title']) ? htmlspecialchars($item['seo_title']) : htmlspecialchars($item['title']) . ' - DM Healthcare' ?>
                                </a>
                                <div class="google-desc" id="previewDescDisplay">
                                    <?= !empty($item['seo_description']) ? htmlspecialchars($item['seo_description']) : 'Explore professional home healthcare, 24/7 nursing and medical support by DM Healthcare in Faridabad, Noida, and Delhi NCR.' ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Save Action Footer -->
            <div class="d-flex justify-content-between align-items-center border-top pt-4 mt-5">
                <a href="navbar_manager.php" class="btn btn-outline-secondary rounded-pill px-4 fw-semibold">
                    <i class="fa-solid fa-xmark me-1"></i> Cancel
                </a>
                <button type="submit" name="update_page" class="btn btn-primary rounded-pill px-5 py-3 fw-bold shadow" style="background: var(--primary-color); border: none; font-size: 1.05rem;">
                    <i class="fa-solid fa-cloud-arrow-up me-2"></i> Save & Publish Changes
                </button>
            </div>
        </div>
    </form>
</main>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script>
function updateGooglePreview() {
    var title = document.getElementById('seoTitleInput').value.trim();
    var desc = document.getElementById('seoDescInput').value.trim();
    
    document.getElementById('previewTitleDisplay').innerText = title || "<?= htmlspecialchars($item['title']) ?> - DM Healthcare";
    document.getElementById('previewDescDisplay').innerText = desc || "Explore professional home healthcare, 24/7 nursing and medical support by DM Healthcare.";
}
</script>
</body>
</html>
