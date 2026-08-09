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
            // Optional: delete from disk
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
        $success = "Project/Page updated successfully.";
    } else {
        $error = "Database update failed.";
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
    <title>Edit Project - Admin Panel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <!-- TinyMCE -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tinymce/6.8.3/tinymce.min.js" referrerpolicy="origin"></script>
    <script>
      tinymce.init({
        selector: '.rich-editor',
        plugins: 'lists link image table code',
        toolbar: 'undo redo | blocks | bold italic | alignleft aligncenter alignright | indent outdent | bullist numlist | table | code',
        menubar: false,
        height: 300
      });
    </script>
    <style>
        body { font-family: 'Inter', sans-serif; background-color: #f4f6f9; }
        .nav-tabs .nav-link { color: #495057; font-weight: 500; border: none; border-bottom: 3px solid transparent; padding: 15px 20px; }
        .nav-tabs .nav-link.active { color: #0d6efd; background: none; border-bottom: 3px solid #0d6efd; }
        .gallery-preview img { width: 100px; height: 100px; object-fit: cover; border-radius: 8px; margin-right: 10px; margin-bottom: 10px; border: 2px solid #ddd; }
        .gallery-item { position: relative; display: inline-block; }
        .gallery-item .delete-cb { position: absolute; top: 5px; right: 15px; }
        .tox-notifications-container { display: none !important; } /* Hide TinyMCE API Warning */
    </style>
</head>
<body>
    <div class="d-flex">
        <!-- Sidebar -->
        <?php include 'includes/sidebar.php'; ?>

        <!-- Main Content -->
        <div class="flex-grow-1 p-4" style="margin-left: 280px; min-height: 100vh;">
            <div class="container-fluid">
                
                <div class="d-flex justify-content-between align-items-center mb-4 border-bottom pb-3">
                    <h3 class="fw-bold text-dark mb-0">
                        <a href="navbar_manager.php" class="text-decoration-none text-muted me-2"><i class="fa-solid fa-arrow-left"></i></a>
                        Edit Project: <?= htmlspecialchars($item['title']) ?>
                    </h3>
                </div>

                <?php if($success): ?>
                    <div class="alert alert-success alert-dismissible fade show border-0 shadow-sm" role="alert">
                        <i class="fa-solid fa-circle-check me-2"></i> <?= htmlspecialchars($success) ?>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                <?php endif; ?>

                <?php if($error): ?>
                    <div class="alert alert-danger alert-dismissible fade show border-0 shadow-sm" role="alert">
                        <i class="fa-solid fa-circle-exclamation me-2"></i> <?= htmlspecialchars($error) ?>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                <?php endif; ?>

                <form method="POST" enctype="multipart/form-data" class="bg-white rounded-4 shadow-sm p-4">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs mb-4" id="projectTabs" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="basic-tab" data-bs-toggle="tab" data-bs-target="#basic" type="button" role="tab">Basic Info</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="media-tab" data-bs-toggle="tab" data-bs-target="#media" type="button" role="tab">Media & Slides</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="seo-tab" data-bs-toggle="tab" data-bs-target="#seo" type="button" role="tab">SEO Aspects</button>
                        </li>
                    </ul>

                    <!-- Tab panes -->
                    <div class="tab-content">
                        <!-- BASIC INFO TAB -->
                        <div class="tab-pane fade show active" id="basic" role="tabpanel">
                            <div class="mb-3">
                                <label class="form-label fw-bold">Project Title *</label>
                                <input type="text" class="form-control bg-light" value="<?= htmlspecialchars($item['title']) ?>" readonly>
                                <small class="text-muted">Title is managed in Navbar Settings.</small>
                            </div>
                            
                            <div class="mb-3">
                                <label class="form-label fw-bold">Short Description</label>
                                <textarea name="short_description" class="form-control bg-light" rows="3"><?= htmlspecialchars($item['short_description'] ?? '') ?></textarea>
                            </div>

                            <div class="mb-4">
                                <label class="form-label fw-bold">Description</label>
                                <textarea name="page_content" class="rich-editor"><?= htmlspecialchars($item['page_content'] ?? '') ?></textarea>
                            </div>

                            <div class="mb-4">
                                <label class="form-label fw-bold">Specifications / Details</label>
                                <textarea name="specifications" class="rich-editor"><?= htmlspecialchars($item['specifications'] ?? '') ?></textarea>
                            </div>
                        </div>

                        <!-- MEDIA & SLIDES TAB -->
                        <div class="tab-pane fade" id="media" role="tabpanel">
                            <!-- Banner Image -->
                            <div class="mb-5 border-bottom pb-4">
                                <label class="form-label fw-bold d-block">Banner Image (Top Header)</label>
                                <?php if($item['banner_image']): ?>
                                    <img src="../<?= htmlspecialchars($item['banner_image']) ?>" class="img-thumbnail mb-3" style="max-height: 150px;">
                                <?php endif; ?>
                                <input type="file" name="banner_image" class="form-control bg-light w-50" accept="image/*">
                            </div>

                            <!-- Main Service Image -->
                            <div class="mb-5 border-bottom pb-4">
                                <label class="form-label fw-bold d-block">Main Service Image (Content Side)</label>
                                <?php if($item['page_image']): ?>
                                    <img src="../<?= htmlspecialchars($item['page_image']) ?>" class="img-thumbnail mb-3" style="max-height: 150px;">
                                <?php endif; ?>
                                <input type="file" name="page_image" class="form-control bg-light w-50" accept="image/*">
                            </div>

                            <!-- Gallery -->
                            <div class="mb-4">
                                <label class="form-label fw-bold d-block">Gallery Images</label>
                                <input type="file" name="gallery_upload[]" multiple class="form-control bg-light w-50 mb-3" accept="image/*">
                                <small class="text-muted d-block mb-3">You can select multiple files at once.</small>
                                
                                <?php if(!empty($gallery)): ?>
                                    <div class="p-3 bg-light rounded-3 border">
                                        <p class="mb-2 fw-semibold text-danger"><small>Check the box to delete an image on save:</small></p>
                                        <div class="gallery-preview">
                                            <?php foreach($gallery as $g_img): ?>
                                                <div class="gallery-item">
                                                    <img src="../<?= htmlspecialchars($g_img) ?>">
                                                    <input type="checkbox" name="delete_gallery[]" value="<?= htmlspecialchars($g_img) ?>" class="delete-cb form-check-input shadow">
                                                </div>
                                            <?php endforeach; ?>
                                        </div>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>

                        <!-- SEO TAB -->
                        <div class="tab-pane fade" id="seo" role="tabpanel">
                            <div class="mb-4 w-75">
                                <label class="form-label fw-bold">SEO Title</label>
                                <input type="text" name="seo_title" class="form-control bg-light" placeholder="Title for Search Engines" value="<?= htmlspecialchars($item['seo_title'] ?? '') ?>">
                            </div>
                            <div class="mb-4 w-75">
                                <label class="form-label fw-bold">SEO Meta Description</label>
                                <textarea name="seo_description" class="form-control bg-light" rows="4" placeholder="Description for Search Engines"><?= htmlspecialchars($item['seo_description'] ?? '') ?></textarea>
                            </div>
                        </div>
                    </div>

                    <div class="mt-4 pt-3 border-top">
                        <button type="submit" name="update_page" class="btn btn-primary px-5 py-2 fw-bold rounded-1 shadow-sm">Save Project</button>
                        <a href="navbar_manager.php" class="btn btn-secondary px-4 py-2 rounded-1 ms-2">Cancel</a>
                    </div>
                </form>

            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
