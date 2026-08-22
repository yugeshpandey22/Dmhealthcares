<?php
session_start();
require_once '../config/db.php';

if(!isset($_SESSION['admin_id'])) {
    header("Location: login.php");
    exit();
}

$success = "";
$error = "";

// Handle Status Update
if(isset($_POST['update_status'])) {
    $id = (int)$_POST['application_id'];
    $new_status = $_POST['status'];
    $stmt = $conn->prepare("UPDATE job_applications SET status = ? WHERE id = ?");
    if($stmt->execute([$new_status, $id])) {
        $success = "Application #{$id} status updated to {$new_status}!";
    } else {
        $error = "Failed to update application status.";
    }
}

// Handle Deletion
if(isset($_POST['delete_application'])) {
    $id = (int)$_POST['application_id'];
    
    // Get resume path to delete file
    $stmt = $conn->prepare("SELECT resume_path FROM job_applications WHERE id = ?");
    $stmt->execute([$id]);
    $app = $stmt->fetch(PDO::FETCH_ASSOC);
    
    if($app && !empty($app['resume_path'])) {
        $file_path = '../' . $app['resume_path'];
        if(file_exists($file_path)) {
            unlink($file_path);
        }
    }
    
    $stmt = $conn->prepare("DELETE FROM job_applications WHERE id = ?");
    if($stmt->execute([$id])) {
        $success = "Application deleted successfully!";
    } else {
        $error = "Failed to delete application.";
    }
}

// Get all applications
$stmt = $conn->query("SELECT * FROM job_applications ORDER BY created_at DESC");
$applications = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job Applications - DM Healthcare Admin</title>
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

        .table > :not(caption) > * > * {
            padding: 1.1rem 1.2rem;
            border-bottom-color: #f1f5f9;
        }

        .table tbody tr:hover {
            background-color: #f8fafc;
        }

        .status-Pending { background-color: #fffbeb; color: #b45309; border: 1px solid #fde68a; }
        .status-Reviewed { background-color: #eff6ff; color: #1d4ed8; border: 1px solid #bfdbfe; }
        .status-Hired { background-color: #f0fdf4; color: #15803d; border: 1px solid #bbf7d0; }
        .status-Rejected { background-color: #fef2f2; color: #b91c1c; border: 1px solid #fecaca; }
    </style>
</head>
<body>

<?php include 'includes/sidebar.php'; ?>

<main class="main-content">
    <div class="page-header-box d-flex flex-column flex-md-row justify-content-between align-items-md-center gap-3">
        <div>
            <h3 class="fw-bold mb-1 text-dark">Job & Career Applications</h3>
            <p class="text-muted mb-0 small">Review doctor, nurse, attendant, and physiotherapist recruitment CVs.</p>
        </div>
        <div>
            <span class="badge bg-light text-secondary border px-3 py-2 rounded-pill font-monospace">
                Total Applicants: <?= count($applications) ?>
            </span>
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

    <div class="data-card">
        <div class="table-responsive">
            <table class="table align-middle mb-0">
                <thead class="bg-light text-muted small text-uppercase fw-bold">
                    <tr>
                        <th class="ps-4">Applicant</th>
                        <th>Role & Experience</th>
                        <th>Resume / CV</th>
                        <th>Status</th>
                        <th>Applied On</th>
                        <th class="pe-4 text-end">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if(!empty($applications)): ?>
                        <?php foreach($applications as $app): ?>
                        <tr>
                            <td class="ps-4">
                                <div class="fw-bold text-dark fs-6"><?= htmlspecialchars($app['full_name']) ?></div>
                                <div class="text-muted small"><i class="fa-solid fa-phone me-1"></i> <?= htmlspecialchars($app['phone_number']) ?></div>
                                <?php if(!empty($app['email'])): ?>
                                    <div class="text-muted small"><i class="fa-regular fa-envelope me-1"></i> <?= htmlspecialchars($app['email']) ?></div>
                                <?php endif; ?>
                            </td>

                            <td>
                                <span class="badge bg-light text-dark border px-3 py-2 rounded-pill fw-semibold">
                                    <?= htmlspecialchars($app['position_applied'] ?? 'General Application') ?>
                                </span>
                                <?php if(!empty($app['experience'])): ?>
                                    <div class="small text-muted mt-1"><i class="fa-solid fa-briefcase me-1"></i> Exp: <?= htmlspecialchars($app['experience']) ?></div>
                                <?php endif; ?>
                            </td>

                            <td>
                                <?php if(!empty($app['resume_path'])): ?>
                                    <a href="../<?= htmlspecialchars($app['resume_path']) ?>" target="_blank" class="btn btn-sm btn-outline-danger rounded-pill px-3 fw-semibold d-inline-flex align-items-center gap-1">
                                        <i class="fa-solid fa-file-pdf"></i> View Resume
                                    </a>
                                <?php else: ?>
                                    <span class="text-muted small">No file</span>
                                <?php endif; ?>
                            </td>

                            <td>
                                <span class="badge status-<?= $app['status'] ?> px-3 py-2 rounded-pill fw-semibold">
                                    <?= htmlspecialchars($app['status']) ?>
                                </span>
                            </td>

                            <td class="small text-muted">
                                <?= date('d M Y, h:i A', strtotime($app['created_at'])) ?>
                            </td>

                            <td class="pe-4 text-end">
                                <form method="POST" class="d-inline-flex align-items-center gap-2 justify-content-end">
                                    <input type="hidden" name="application_id" value="<?= $app['id'] ?>">
                                    <select name="status" class="form-select form-select-sm rounded-3 shadow-none border" style="width: 120px;">
                                        <option value="Pending" <?= $app['status'] == 'Pending' ? 'selected' : '' ?>>Pending</option>
                                        <option value="Reviewed" <?= $app['status'] == 'Reviewed' ? 'selected' : '' ?>>Reviewed</option>
                                        <option value="Hired" <?= $app['status'] == 'Hired' ? 'selected' : '' ?>>Hired</option>
                                        <option value="Rejected" <?= $app['status'] == 'Rejected' ? 'selected' : '' ?>>Rejected</option>
                                    </select>
                                    <button type="submit" name="update_status" class="btn btn-sm btn-primary rounded-3 px-3 fw-semibold" style="background: var(--primary-color); border: none;">
                                        Save
                                    </button>
                                    <button type="submit" name="delete_application" class="btn btn-sm btn-outline-danger rounded-3" onclick="return confirm('Are you sure you want to delete this applicant application?');">
                                        <i class="fa-solid fa-trash"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <tr>
                            <td colspan="6" class="text-center py-5 text-muted">
                                <i class="fa-solid fa-user-doctor fa-3x mb-3 opacity-40 d-block"></i>
                                <h5>No job applications received yet.</h5>
                            </td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>
</main>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
