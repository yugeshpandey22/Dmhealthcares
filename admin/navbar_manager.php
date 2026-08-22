<?php
session_start();
require_once '../config/db.php';

if(!isset($_SESSION['admin_id'])) {
    header("Location: login.php");
    exit();
}

$success = "";
$error = "";

$current_cat_id = isset($_GET['cat_id']) ? (int)$_GET['cat_id'] : null;

// Handle Category Actions
if (isset($_POST['add_category'])) {
    $name = trim($_POST['name']);
    $order = (int)$_POST['display_order'];
    if (!empty($name)) {
        $stmt = $conn->prepare("INSERT INTO nav_categories (name, display_order) VALUES (:name, :order)");
        if($stmt->execute(['name' => $name, 'order' => $order])) {
            $success = "Category '{$name}' created successfully.";
        } else {
            $error = "Failed to add category.";
        }
    }
} elseif (isset($_POST['delete_category'])) {
    $id = (int)$_POST['category_id'];
    $stmt = $conn->prepare("DELETE FROM nav_categories WHERE id = :id");
    if($stmt->execute(['id' => $id])) {
        $success = "Category deleted successfully.";
    }
}

// Handle Nav Item Actions
if (isset($_POST['add_item'])) {
    $cat_id = (int)$_POST['category_id'];
    $title = trim($_POST['title']);
    if (!empty($title)) {
        $slug = strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-', $title), '-'));
        $link = $slug;
        $order = 0;

        $stmt = $conn->prepare("INSERT INTO nav_items (category_id, title, link, display_order) VALUES (:cat_id, :title, :link, :order)");
        if($stmt->execute(['cat_id' => $cat_id, 'title' => $title, 'link' => $link, 'order' => $order])) {
            $success = "New page link '{$title}' added successfully!";
            // Auto create physical file for hybrid routing if not exist
            $filename = '../pages/' . $slug . '.php';
            if (!file_exists($filename)) {
                file_put_contents($filename, "");
            }
        } else {
            $error = "Failed to add page link.";
        }
    }
} elseif (isset($_POST['delete_item'])) {
    $id = (int)$_POST['item_id'];
    $item = $conn->query("SELECT title FROM nav_items WHERE id = $id")->fetch(PDO::FETCH_ASSOC);
    $stmt = $conn->prepare("DELETE FROM nav_items WHERE id = :id");
    if($stmt->execute(['id' => $id])) {
        $success = "Page link deleted successfully.";
        if ($item) {
            $slug = strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-', $item['title']), '-'));
            $filename = '../pages/' . $slug . '.php';
            if (file_exists($filename)) {
                unlink($filename);
            }
        }
    }
}

// Fetch all categories
$categories = $conn->query("SELECT * FROM nav_categories ORDER BY display_order ASC")->fetchAll(PDO::FETCH_ASSOC);

// If a specific category is selected, fetch its details and items
$current_category = null;
$items = [];
if ($current_cat_id) {
    $stmt = $conn->prepare("SELECT * FROM nav_categories WHERE id = :id");
    $stmt->execute(['id' => $current_cat_id]);
    $current_category = $stmt->fetch(PDO::FETCH_ASSOC);
    
    if($current_category) {
        $stmt = $conn->prepare("SELECT * FROM nav_items WHERE category_id = :cat_id ORDER BY display_order ASC");
        $stmt->execute(['cat_id' => $current_cat_id]);
        $items = $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $current_category ? htmlspecialchars($current_category['name']) : 'Category & Page Settings' ?> - DM Admin</title>
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
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

        /* Top Header */
        .page-header-box {
            background: #ffffff;
            border-radius: 20px;
            padding: 1.5rem 1.8rem;
            border: 1px solid var(--card-border);
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.02);
            margin-bottom: 2rem;
        }

        .data-card {
            background: #ffffff;
            border-radius: 20px;
            border: 1px solid var(--card-border);
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.02);
            overflow: hidden;
        }

        .card-header-clean {
            padding: 1.2rem 1.5rem;
            border-bottom: 1px solid var(--card-border);
            background: #ffffff;
        }

        .btn-primary-custom {
            background: var(--primary-color);
            border: none;
            color: white;
            font-weight: 600;
            border-radius: 12px;
            padding: 12px 20px;
            transition: all 0.2s ease;
        }

        .btn-primary-custom:hover {
            background: var(--primary-hover);
            color: white;
            transform: translateY(-2px);
            box-shadow: 0 6px 15px rgba(229, 37, 42, 0.3);
        }

        .list-group-item {
            transition: all 0.2s ease;
        }

        .list-group-item:hover {
            background-color: #f8fafc;
        }
    </style>
</head>
<body>

<?php include 'includes/sidebar.php'; ?>

<main class="main-content">
    <!-- Header -->
    <div class="page-header-box d-flex flex-column flex-md-row justify-content-between align-items-md-center gap-3">
        <div>
            <h3 class="fw-bold mb-1 text-dark">
                <?= $current_category ? htmlspecialchars($current_category['name']) . ' - Pages & Links' : 'Category & Menu Management' ?>
            </h3>
            <p class="text-muted mb-0 small">
                <?= $current_category ? 'Manage sub-pages, service content and URLs under this category.' : 'Configure main top navbar categories and navigation structure.' ?>
            </p>
        </div>
        <div>
            <?php if($current_category): ?>
                <a href="navbar_manager.php" class="btn btn-outline-dark rounded-pill px-4 fw-semibold btn-sm">
                    <i class="fa-solid fa-arrow-left me-1"></i> All Categories
                </a>
            <?php endif; ?>
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

    <div class="row g-4">
        <?php if($current_category): ?>
            <!-- Left: Add New Page Link in this Category -->
            <div class="col-lg-4">
                <div class="data-card mb-4">
                    <div class="card-header-clean">
                        <h5 class="fw-bold mb-0 text-dark">
                            <i class="fa-solid fa-plus-circle text-primary me-2" style="color: var(--primary-color) !important;"></i> Add New Page Link
                        </h5>
                    </div>
                    <div class="p-4">
                        <form method="POST">
                            <input type="hidden" name="category_id" value="<?= $current_category['id'] ?>">
                            <div class="mb-3">
                                <label class="form-label text-muted small fw-bold text-uppercase">Page / Service Title</label>
                                <input type="text" name="title" class="form-control form-control-lg bg-light border-0" required placeholder="e.g. 24x7 Critical Care">
                                <small class="text-muted d-block mt-1">Slug URL will automatically be generated.</small>
                            </div>
                            <button type="submit" name="add_item" class="btn btn-primary-custom w-100 mt-2">
                                <i class="fa-solid fa-plus me-1"></i> Create Page Link
                            </button>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Right: List of Existing Pages in Category -->
            <div class="col-lg-8">
                <div class="data-card">
                    <div class="card-header-clean d-flex justify-content-between align-items-center">
                        <h5 class="fw-bold mb-0 text-dark">Pages in <?= htmlspecialchars($current_category['name']) ?></h5>
                        <span class="badge bg-light text-secondary border rounded-pill"><?= count($items) ?> Pages Active</span>
                    </div>
                    <div class="p-0">
                        <ul class="list-group list-group-flush mb-0">
                            <?php if(!empty($items)): ?>
                                <?php foreach($items as $item): ?>
                                <li class="list-group-item d-flex flex-column flex-sm-row justify-content-between align-items-sm-center px-4 py-3 gap-2">
                                    <div>
                                        <div class="fw-bold text-dark fs-6"><?= htmlspecialchars($item['title']) ?></div>
                                        <div class="small text-muted font-monospace">
                                            <i class="fa-solid fa-link text-primary me-1" style="color: var(--primary-color) !important;"></i> /page.php?title=<?= htmlspecialchars($item['link']) ?>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center gap-2">
                                        <a href="../page.php?title=<?= urlencode($item['link']) ?>" target="_blank" class="btn btn-sm btn-light border rounded-pill px-3 fw-semibold text-muted" title="View live page">
                                            <i class="fa-solid fa-arrow-up-right-from-square"></i> Preview
                                        </a>
                                        <a href="edit_page.php?id=<?= $item['id'] ?>" class="btn btn-sm btn-primary rounded-pill px-3 fw-semibold" style="background: var(--primary-color); border: none;" title="Edit page content & SEO">
                                            <i class="fa-solid fa-pen-to-square me-1"></i> Edit Content
                                        </a>
                                        <form method="POST" onsubmit="return confirm('Delete this page link? This cannot be undone.');" class="m-0">
                                            <input type="hidden" name="item_id" value="<?= $item['id'] ?>">
                                            <button type="submit" name="delete_item" class="btn btn-sm btn-outline-danger rounded-circle" title="Delete Link">
                                                <i class="fa-solid fa-trash"></i>
                                            </button>
                                        </form>
                                    </div>
                                </li>
                                <?php endforeach; ?>
                            <?php else: ?>
                                <li class="list-group-item text-center py-5 text-muted">
                                    <i class="fa-regular fa-folder-open fa-3x mb-3 opacity-40 d-block"></i>
                                    <h6>No pages added to this category yet.</h6>
                                    <p class="small text-muted mb-0">Use the form on the left to add your first service page.</p>
                                </li>
                            <?php endif; ?>
                        </ul>
                    </div>
                </div>
            </div>

        <?php else: ?>
            <!-- Main Categories Management -->
            <div class="col-lg-4">
                <div class="data-card mb-4">
                    <div class="card-header-clean">
                        <h5 class="fw-bold mb-0 text-dark">
                            <i class="fa-solid fa-folder-plus text-primary me-2" style="color: var(--primary-color) !important;"></i> Add Main Category
                        </h5>
                    </div>
                    <div class="p-4">
                        <form method="POST">
                            <div class="mb-3">
                                <label class="form-label text-muted small fw-bold text-uppercase">Category Name</label>
                                <input type="text" name="name" class="form-control form-control-lg bg-light border-0" required placeholder="e.g. Diagnostics at Home">
                            </div>
                            <div class="mb-4">
                                <label class="form-label text-muted small fw-bold text-uppercase">Display Order (Sorting)</label>
                                <input type="number" name="display_order" class="form-control form-control-lg bg-light border-0" value="0">
                            </div>
                            <button type="submit" name="add_category" class="btn btn-primary-custom w-100">
                                <i class="fa-solid fa-plus me-1"></i> Save Category
                            </button>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Right: Categories List -->
            <div class="col-lg-8">
                <div class="data-card">
                    <div class="card-header-clean d-flex justify-content-between align-items-center">
                        <h5 class="fw-bold mb-0 text-dark">Active Navbar Categories</h5>
                        <span class="badge bg-light text-secondary border rounded-pill"><?= count($categories) ?> Categories</span>
                    </div>
                    <div class="p-0">
                        <ul class="list-group list-group-flush mb-0">
                            <?php if(!empty($categories)): ?>
                                <?php foreach($categories as $cat): ?>
                                    <?php 
                                    // Count pages in this cat
                                    $item_cnt = (int)$conn->query("SELECT COUNT(*) FROM nav_items WHERE category_id = {$cat['id']}")->fetchColumn();
                                    ?>
                                <li class="list-group-item d-flex flex-column flex-sm-row justify-content-between align-items-sm-center px-4 py-3 gap-2">
                                    <div class="d-flex align-items-center gap-3">
                                        <div class="rounded-circle d-flex align-items-center justify-content-center bg-light border" style="width: 40px; height: 40px; color: var(--primary-color);">
                                            <i class="fa-solid fa-folder"></i>
                                        </div>
                                        <div>
                                            <div class="fw-bold text-dark fs-6"><?= htmlspecialchars($cat['name']) ?></div>
                                            <small class="text-muted">Sort Order: <?= (int)$cat['display_order'] ?> &bull; <span class="badge bg-light text-dark border"><?= $item_cnt ?> pages</span></small>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center gap-2">
                                        <a href="navbar_manager.php?cat_id=<?= $cat['id'] ?>" class="btn btn-sm btn-primary rounded-pill px-3 fw-semibold" style="background: var(--primary-color); border: none;">
                                            <i class="fa-solid fa-list-check me-1"></i> Manage Pages
                                        </a>
                                        <form method="POST" onsubmit="return confirm('Are you sure? Deleting this category will delete all associated pages!');" class="m-0">
                                            <input type="hidden" name="category_id" value="<?= $cat['id'] ?>">
                                            <button type="submit" name="delete_category" class="btn btn-sm btn-outline-danger rounded-circle" title="Delete Category">
                                                <i class="fa-solid fa-trash"></i>
                                            </button>
                                        </form>
                                    </div>
                                </li>
                                <?php endforeach; ?>
                            <?php else: ?>
                                <li class="list-group-item text-center py-5 text-muted">
                                    <i class="fa-regular fa-folder-open fa-3x mb-3 opacity-40 d-block"></i>
                                    <h6>No categories created yet.</h6>
                                </li>
                            <?php endif; ?>
                        </ul>
                    </div>
                </div>
            </div>
        <?php endif; ?>
    </div>
</main>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
