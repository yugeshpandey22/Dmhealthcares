<?php
session_start();
require_once '../config/db.php';

if(!isset($_SESSION['admin_id'])) {
    header("Location: login.php");
    exit();
}

// Handle Status Update
if(isset($_POST['update_status'])) {
    $id = $_POST['application_id'];
    $new_status = $_POST['status'];
    $stmt = $conn->prepare("UPDATE job_applications SET status = ? WHERE id = ?");
    $stmt->execute([$new_status, $id]);
    $success = "Application status updated successfully!";
}

// Handle Deletion
if(isset($_POST['delete_application'])) {
    $id = $_POST['application_id'];
    
    // First get the resume path to delete the file
    $stmt = $conn->prepare("SELECT resume_path FROM job_applications WHERE id = ?");
    $stmt->execute([$id]);
    $app = $stmt->fetch();
    
    if($app && !empty($app['resume_path'])) {
        $file_path = '../' . $app['resume_path'];
        if(file_exists($file_path)) {
            unlink($file_path);
        }
    }
    
    // Delete from database
    $stmt = $conn->prepare("DELETE FROM job_applications WHERE id = ?");
    $stmt->execute([$id]);
    $success = "Application deleted successfully!";
}

// Get all applications
$stmt = $conn->query("SELECT * FROM job_applications ORDER BY created_at DESC");
$applications = $stmt->fetchAll();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job Applications - DM Healthcare Admin</title>
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        body { 
            font-family: 'Outfit', sans-serif;
            background: #f4f7fa; 
            overflow-x: hidden; 
        }
        .main-content { margin-left: 260px; padding: 2.5rem; }
        .card { border: none; border-radius: 15px; box-shadow: 0 10px 30px rgba(0,0,0,0.03); }
        .header-title { font-weight: 700; color: #1a2b4c; letter-spacing: -0.5px; }
        .status-badge {
            padding: 5px 12px;
            border-radius: 20px;
            font-weight: 600;
            font-size: 0.85rem;
        }
        .status-Pending { background-color: #fff3cd; color: #856404; }
        .status-Reviewed { background-color: #d1ecf1; color: #0c5460; }
        .status-Hired { background-color: #d4edda; color: #155724; }
        .status-Rejected { background-color: #f8d7da; color: #721c24; }
    </style>
</head>
<body>

<?php include 'includes/sidebar.php'; ?>

<div class="main-content">
    <div class="d-flex justify-content-between align-items-center mb-5">
        <h2 class="header-title mb-0">Job Applications</h2>
    </div>
    
    <?php if(isset($success)): ?>
        <div class="alert alert-success fw-bold"><i class="fa-solid fa-check-circle me-2"></i><?= $success ?></div>
    <?php endif; ?>

    <div class="card p-0">
        <div class="table-responsive">
            <table class="table table-hover align-middle mb-0">
                <thead class="bg-light text-muted small text-uppercase tracking-wider">
                    <tr>
                        <th class="ps-4 py-3 fw-semibold">Applicant Details</th>
                        <th class="py-3 fw-semibold">Role Applied</th>
                        <th class="py-3 fw-semibold">Resume</th>
                        <th class="py-3 fw-semibold">Date</th>
                        <th class="py-3 fw-semibold">Status</th>
                        <th class="pe-4 py-3 fw-semibold text-end">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($applications as $app): ?>
                    <tr>
                        <td class="ps-4 py-3">
                            <div class="fw-bold text-dark"><?= htmlspecialchars($app['full_name']) ?></div>
                            <div class="text-muted small"><i class="fa-solid fa-envelope me-1"></i><?= htmlspecialchars($app['email']) ?></div>
                            <div class="text-muted small"><i class="fa-solid fa-phone me-1"></i><?= htmlspecialchars($app['phone']) ?></div>
                        </td>
                        <td class="py-3">
                            <span class="badge bg-primary bg-opacity-10 text-primary border border-primary border-opacity-25 px-2 py-1"><?= htmlspecialchars($app['role_applied']) ?></span>
                        </td>
                        <td class="py-3">
                            <a href="../<?= htmlspecialchars($app['resume_path']) ?>" target="_blank" class="btn btn-sm btn-outline-primary rounded-pill">
                                <i class="fa-solid fa-file-pdf me-1"></i> View
                            </a>
                        </td>
                        <td class="py-3 text-muted small">
                            <?= date('M d, Y h:i A', strtotime($app['created_at'])) ?>
                        </td>
                        <td class="py-3">
                            <span class="status-badge status-<?= htmlspecialchars($app['status']) ?>">
                                <?= htmlspecialchars($app['status']) ?>
                            </span>
                        </td>
                        <td class="pe-4 py-3 text-end">
                            <!-- Update Status Form -->
                            <form method="POST" class="d-inline-block me-1">
                                <input type="hidden" name="application_id" value="<?= $app['id'] ?>">
                                <select name="status" class="form-select form-select-sm d-inline-block w-auto rounded-pill" onchange="this.form.submit()">
                                    <option value="Pending" <?= $app['status'] == 'Pending' ? 'selected' : '' ?>>Pending</option>
                                    <option value="Reviewed" <?= $app['status'] == 'Reviewed' ? 'selected' : '' ?>>Reviewed</option>
                                    <option value="Hired" <?= $app['status'] == 'Hired' ? 'selected' : '' ?>>Hired</option>
                                    <option value="Rejected" <?= $app['status'] == 'Rejected' ? 'selected' : '' ?>>Rejected</option>
                                </select>
                                <input type="hidden" name="update_status" value="1">
                            </form>
                            
                            <!-- Delete Button -->
                            <form method="POST" class="d-inline-block" onsubmit="return confirm('Are you sure you want to delete this application?');">
                                <input type="hidden" name="application_id" value="<?= $app['id'] ?>">
                                <button type="submit" name="delete_application" class="btn btn-sm btn-outline-danger rounded-circle p-2">
                                    <i class="fa-solid fa-trash-can"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                    
                    <?php if(empty($applications)): ?>
                    <tr>
                        <td colspan="6" class="text-center py-5 text-muted">
                            <i class="fa-solid fa-folder-open mb-3 fs-1 d-block text-black-50"></i>
                            No job applications received yet.
                        </td>
                    </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
