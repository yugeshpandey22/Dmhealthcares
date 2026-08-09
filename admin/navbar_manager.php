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
            $success = "Category added successfully.";
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
            $success = "Link added successfully.";
            // Auto create physical file for hybrid routing
            $filename = '../pages/' . $slug . '.php';
            if (!file_exists($filename)) {
                file_put_contents($filename, "");
            }
        } else {
            $error = "Failed to add link.";
        }
    }
} elseif (isset($_POST['delete_item'])) {
    $id = (int)$_POST['item_id'];
    $item = $conn->query("SELECT title FROM nav_items WHERE id = $id")->fetch(PDO::FETCH_ASSOC);
    $stmt = $conn->prepare("DELETE FROM nav_items WHERE id = :id");
    if($stmt->execute(['id' => $id])) {
        $success = "Link deleted successfully.";
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
    <title><?= $current_category ? htmlspecialchars($current_category['name']) : 'Category Settings' ?> - DM Admin</title>
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <!-- FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body class="bg-light" style="font-family: 'Inter', sans-serif;">
    <div class="d-flex">
        <!-- Sidebar -->
        <?php include 'includes/sidebar.php'; ?>

        <!-- Main Content -->
        <div class="flex-grow-1" style="margin-left: 260px; min-height: 100vh;">
            <div class="p-5">
                <div class="d-flex justify-content-between align-items-center mb-5">
                    <div>
                        <h2 class="fw-bold text-dark mb-1"><?= $current_category ? htmlspecialchars($current_category['name']) . ' Links' : 'Category Settings' ?></h2>
                        <p class="text-muted">
                            <?= $current_category ? 'Manage dropdown links for this category.' : 'Manage the main navigation categories.' ?>
                        </p>
                    </div>
                </div>

                <?php if($success): ?>
                    <div class="alert alert-success shadow-sm border-0 border-start border-5 border-success rounded-3"><i class="fa-solid fa-check-circle me-2"></i><?= $success ?></div>
                <?php endif; ?>
                <?php if($error): ?>
                    <div class="alert alert-danger shadow-sm border-0 border-start border-5 border-danger rounded-3"><i class="fa-solid fa-triangle-exclamation me-2"></i><?= $error ?></div>
                <?php endif; ?>

                <div class="row g-4">
                    <?php if($current_category): ?>
                        <!-- Managing Specific Category Links -->
                        <div class="col-md-5">
                            <div class="card border-0 shadow-sm rounded-4 overflow-hidden mb-4">
                                <div class="card-header bg-white border-bottom p-4">
                                    <h5 class="fw-bold mb-0">Add Link to <?= htmlspecialchars($current_category['name']) ?></h5>
                                </div>
                                <div class="card-body p-4">
                                    <form method="POST">
                                        <input type="hidden" name="category_id" value="<?= $current_category['id'] ?>">
                                        <div class="mb-3">
                                            <label class="form-label text-muted small fw-bold text-uppercase">Link Title</label>
                                            <input type="text" name="title" class="form-control form-control-lg bg-light border-0" required placeholder="e.g. Elderly Care">
                                        </div>
                                        <button type="submit" name="add_item" class="btn btn-primary w-100 py-3 fw-bold rounded-3">Add Link</button>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <!-- Right: Links List -->
                        <div class="col-md-7">
                            <div class="card border-0 shadow-sm rounded-4 overflow-hidden">
                                <div class="card-header bg-white border-bottom p-4 d-flex justify-content-between align-items-center">
                                    <h5 class="fw-bold mb-0">Current Links</h5>
                                </div>
                                <div class="card-body p-0">
                                    <ul class="list-group list-group-flush">
                                        <?php if(count($items) > 0): ?>
                                            <?php foreach($items as $item): ?>
                                            <li class="list-group-item d-flex justify-content-between align-items-center bg-transparent border-bottom px-4 py-3">
                                                <div>
                                                    <span class="fw-semibold text-dark"><?= htmlspecialchars($item['title']) ?></span><br>
                                                    <small class="text-muted"><i class="fa-solid fa-link me-1"></i> <?= htmlspecialchars($item['link']) ?></small>
                                                </div>
                                                <div class="d-flex align-items-center">
                                                    <a href="edit_page.php?id=<?= $item['id'] ?>" class="btn btn-sm btn-outline-primary border-0 rounded-circle me-2" title="Edit Page Content"><i class="fa-solid fa-pen-to-square"></i></a>
                                                    <form method="POST" onsubmit="return confirm('Delete this link?');" class="m-0 p-0">
                                                        <input type="hidden" name="item_id" value="<?= $item['id'] ?>">
                                                        <button type="submit" name="delete_item" class="btn btn-sm btn-outline-danger border-0 rounded-circle" title="Delete Link"><i class="fa-solid fa-trash"></i></button>
                                                    </form>
                                                </div>
                                            </li>
                                            <?php endforeach; ?>
                                        <?php else: ?>
                                            <li class="list-group-item bg-transparent px-5 py-5 text-center text-muted">
                                                <i class="fa-solid fa-link-slash fa-2x mb-3 text-secondary opacity-50"></i>
                                                <h6>No links added yet.</h6>
                                            </li>
                                        <?php endif; ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    <?php else: ?>
                        <!-- Managing Main Categories -->
                        <div class="col-md-5">
                            <div class="card border-0 shadow-sm rounded-4 overflow-hidden mb-4">
                                <div class="card-header bg-white border-bottom p-4">
                                    <h5 class="fw-bold mb-0">Add Main Category</h5>
                                </div>
                                <div class="card-body p-4">
                                    <form method="POST">
                                        <div class="mb-3">
                                            <label class="form-label text-muted small fw-bold text-uppercase">Category Name</label>
                                            <input type="text" name="name" class="form-control form-control-lg bg-light border-0" required placeholder="e.g. Home Care">
                                        </div>
                                        <div class="mb-4">
                                            <label class="form-label text-muted small fw-bold text-uppercase">Display Order</label>
                                            <input type="number" name="display_order" class="form-control form-control-lg bg-light border-0" value="0">
                                        </div>
                                        <button type="submit" name="add_category" class="btn btn-primary w-100 py-3 fw-bold rounded-3">Add Category</button>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <!-- Right: Categories List -->
                        <div class="col-md-7">
                            <div class="card border-0 shadow-sm rounded-4 overflow-hidden">
                                <div class="card-header bg-white border-bottom p-4 d-flex justify-content-between align-items-center">
                                    <h5 class="fw-bold mb-0">Main Categories</h5>
                                </div>
                                <div class="card-body p-0">
                                    <ul class="list-group list-group-flush">
                                        <?php if(count($categories) > 0): ?>
                                            <?php foreach($categories as $cat): ?>
                                            <li class="list-group-item d-flex justify-content-between align-items-center bg-transparent border-bottom px-4 py-3">
                                                <div>
                                                    <span class="fw-semibold text-dark fs-5"><?= htmlspecialchars($cat['name']) ?></span>
                                                </div>
                                                <div>
                                                    <a href="navbar_manager.php?cat_id=<?= $cat['id'] ?>" class="btn btn-sm btn-light border me-2 rounded-3 px-3 fw-semibold"><i class="fa-solid fa-list me-1"></i> Manage Links</a>
                                                    <form method="POST" class="d-inline m-0 p-0" onsubmit="return confirm('Are you sure you want to delete this category and ALL its links?');">
                                                        <input type="hidden" name="category_id" value="<?= $cat['id'] ?>">
                                                        <button type="submit" name="delete_category" class="btn btn-sm btn-outline-danger border-0 rounded-circle"><i class="fa-solid fa-trash"></i></button>
                                                    </form>
                                                </div>
                                            </li>
                                            <?php endforeach; ?>
                                        <?php else: ?>
                                            <li class="list-group-item bg-transparent px-5 py-5 text-center text-muted">
                                                <i class="fa-solid fa-folder-open fa-2x mb-3 text-secondary opacity-50"></i>
                                                <h6>No categories found.</h6>
                                            </li>
                                        <?php endif; ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>
                </div>

            </div>
        </div>
    </div>
    
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
