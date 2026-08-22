<?php
session_start();
require_once '../config/db.php';

if(!isset($_SESSION['admin_id'])) {
    header("Location: login.php");
    exit();
}

// Get stats
$total_appointments = 0;
$pending_appointments = 0;
$completed_appointments = 0;
$total_pages = 0;
$total_jobs = 0;

try {
    $total_appointments = (int)$conn->query("SELECT COUNT(*) FROM appointments")->fetchColumn();
    $pending_appointments = (int)$conn->query("SELECT COUNT(*) FROM appointments WHERE status = 'Pending'")->fetchColumn();
    $completed_appointments = (int)$conn->query("SELECT COUNT(*) FROM appointments WHERE status = 'Completed'")->fetchColumn();
    $total_pages = (int)$conn->query("SELECT COUNT(*) FROM nav_items")->fetchColumn();
    $total_jobs = (int)$conn->query("SELECT COUNT(*) FROM job_applications")->fetchColumn();

    // Get recent 6 appointments
    $stmt = $conn->query("SELECT * FROM appointments ORDER BY created_at DESC LIMIT 6");
    $recent_appointments = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // Get recent 4 job applications
    $stmt = $conn->query("SELECT * FROM job_applications ORDER BY created_at DESC LIMIT 4");
    $recent_jobs = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (Exception $e) {
    $recent_appointments = [];
    $recent_jobs = [];
}

// Dynamic Greeting
$hour = (int)date('H');
if ($hour < 12) $greeting = "Good Morning";
elseif ($hour < 17) $greeting = "Good Afternoon";
else $greeting = "Good Evening";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Executive Dashboard - DM Healthcare Admin</title>
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root {
            --primary-color: #E5252A;
            --primary-hover: #C8102E;
            --dark-navy: #0f172a;
            --dark-slate: #1e293b;
            --light-bg: #f8fafc;
            --card-border: #edf2f7;
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

        /* Top Header Bar */
        .top-header {
            background: #ffffff;
            border-radius: 20px;
            padding: 1.2rem 1.8rem;
            border: 1px solid var(--card-border);
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.02);
            margin-bottom: 2rem;
        }

        /* Dashboard Stat Cards */
        .stat-card-modern {
            background: #ffffff;
            border-radius: 20px;
            padding: 1.6rem;
            border: 1px solid var(--card-border);
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.03);
            transition: all 0.3s cubic-bezier(0.165, 0.84, 0.44, 1);
            position: relative;
            overflow: hidden;
            height: 100%;
        }

        .stat-card-modern:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.07);
        }

        .stat-card-modern .stat-icon-wrapper {
            width: 56px;
            height: 56px;
            border-radius: 16px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
        }

        .stat-card-modern.red .stat-icon-wrapper {
            background: rgba(229, 37, 42, 0.1);
            color: var(--primary-color);
        }

        .stat-card-modern.orange .stat-icon-wrapper {
            background: rgba(245, 158, 11, 0.1);
            color: #d97706;
        }

        .stat-card-modern.green .stat-icon-wrapper {
            background: rgba(16, 185, 129, 0.1);
            color: #059669;
        }

        .stat-card-modern.blue .stat-icon-wrapper {
            background: rgba(59, 130, 246, 0.1);
            color: #2563eb;
        }

        .stat-number {
            font-size: 2.3rem;
            font-weight: 800;
            line-height: 1.1;
            margin: 0.8rem 0 0.2rem;
            letter-spacing: -1px;
            color: #0f172a;
        }

        .stat-label {
            font-size: 0.82rem;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.8px;
            color: #64748b;
        }

        /* Content Card */
        .content-card {
            background: #ffffff;
            border-radius: 20px;
            border: 1px solid var(--card-border);
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.02);
            overflow: hidden;
        }

        .content-card-header {
            padding: 1.3rem 1.8rem;
            border-bottom: 1px solid var(--card-border);
            background: #ffffff;
        }

        /* Quick Action Shortcut Buttons */
        .action-shortcut {
            background: #f8fafc;
            border: 1px solid #e2e8f0;
            border-radius: 14px;
            padding: 1rem 1.2rem;
            display: flex;
            align-items: center;
            gap: 12px;
            text-decoration: none;
            color: #1e293b;
            font-weight: 600;
            transition: all 0.2s ease;
        }

        .action-shortcut:hover {
            background: #ffffff;
            border-color: var(--primary-color);
            color: var(--primary-color);
            transform: translateY(-2px);
            box-shadow: 0 6px 15px rgba(229, 37, 42, 0.08);
        }

        .action-shortcut i {
            font-size: 1.2rem;
            color: var(--primary-color);
        }

        /* Table Design */
        .table > :not(caption) > * > * {
            padding: 1rem 1.2rem;
            border-bottom-color: #f1f5f9;
        }

        .table tbody tr:hover {
            background-color: #f8fafc;
        }

        .badge-pending { background: #fffbeb; color: #b45309; border: 1px solid #fde68a; }
        .badge-completed { background: #f0fdf4; color: #15803d; border: 1px solid #bbf7d0; }
        .badge-cancelled { background: #fef2f2; color: #b91c1c; border: 1px solid #fecaca; }
    </style>
</head>
<body>

<?php include 'includes/sidebar.php'; ?>

<main class="main-content">
    <!-- Top Header Bar -->
    <div class="top-header d-flex flex-column flex-md-row justify-content-between align-items-md-center gap-3">
        <div>
            <h3 class="fw-bold mb-1 text-dark">
                <?= $greeting ?>, <?= htmlspecialchars($_SESSION['admin_user'] ?? 'Admin') ?>! 👋
            </h3>
            <p class="text-muted mb-0 small">
                Here's what is happening with <strong>DM Healthcare</strong> inquiries and services today.
            </p>
        </div>
        <div class="d-flex align-items-center gap-2">
            <span class="badge bg-light text-secondary border px-3 py-2 rounded-pill font-monospace">
                <i class="fa-regular fa-calendar me-1"></i> <?= date('l, d M Y') ?>
            </span>
            <a href="appointments.php" class="btn btn-primary rounded-pill px-3 py-2 fw-semibold btn-sm shadow-sm" style="background: var(--primary-color); border: none;">
                <i class="fa-solid fa-plus me-1"></i> New Leads
            </a>
        </div>
    </div>

    <!-- 4 Stats Cards -->
    <div class="row g-4 mb-4">
        <!-- Stat 1: Total Appointments -->
        <div class="col-12 col-sm-6 col-xl-3">
            <div class="stat-card-modern red">
                <div class="d-flex justify-content-between align-items-start">
                    <div>
                        <span class="stat-label">Total Appointments</span>
                        <div class="stat-number"><?= number_format($total_appointments) ?></div>
                        <span class="small text-muted"><i class="fa-solid fa-arrow-trend-up text-success me-1"></i> Lifetime requests</span>
                    </div>
                    <div class="stat-icon-wrapper">
                        <i class="fa-solid fa-calendar-check"></i>
                    </div>
                </div>
            </div>
        </div>

        <!-- Stat 2: Pending Action -->
        <div class="col-12 col-sm-6 col-xl-3">
            <div class="stat-card-modern orange">
                <div class="d-flex justify-content-between align-items-start">
                    <div>
                        <span class="stat-label">Pending Action</span>
                        <div class="stat-number text-warning"><?= number_format($pending_appointments) ?></div>
                        <span class="small text-warning fw-semibold"><i class="fa-solid fa-circle-exclamation me-1"></i> Needs callback</span>
                    </div>
                    <div class="stat-icon-wrapper">
                        <i class="fa-solid fa-phone-volume"></i>
                    </div>
                </div>
            </div>
        </div>

        <!-- Stat 3: Completed Care -->
        <div class="col-12 col-sm-6 col-xl-3">
            <div class="stat-card-modern green">
                <div class="d-flex justify-content-between align-items-start">
                    <div>
                        <span class="stat-label">Completed Services</span>
                        <div class="stat-number text-success"><?= number_format($completed_appointments) ?></div>
                        <span class="small text-success fw-semibold"><i class="fa-solid fa-circle-check me-1"></i> Successfully served</span>
                    </div>
                    <div class="stat-icon-wrapper">
                        <i class="fa-solid fa-heart-pulse"></i>
                    </div>
                </div>
            </div>
        </div>

        <!-- Stat 4: Active Services -->
        <div class="col-12 col-sm-6 col-xl-3">
            <div class="stat-card-modern blue">
                <div class="d-flex justify-content-between align-items-start">
                    <div>
                        <span class="stat-label">Active Pages / Links</span>
                        <div class="stat-number text-primary"><?= number_format($total_pages) ?></div>
                        <span class="small text-muted"><i class="fa-solid fa-globe text-primary me-1"></i> CMS Live Content</span>
                    </div>
                    <div class="stat-icon-wrapper">
                        <i class="fa-solid fa-layer-group"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Quick Shortcuts Hub -->
    <div class="row g-3 mb-4">
        <div class="col-6 col-md-3">
            <a href="appointments.php" class="action-shortcut">
                <i class="fa-solid fa-table-list"></i>
                <span>All Inquiries</span>
            </a>
        </div>
        <div class="col-6 col-md-3">
            <a href="navbar_manager.php" class="action-shortcut">
                <i class="fa-solid fa-pen-to-square"></i>
                <span>Edit CMS Pages</span>
            </a>
        </div>
        <div class="col-6 col-md-3">
            <a href="job_applications.php" class="action-shortcut">
                <i class="fa-solid fa-user-doctor"></i>
                <span>Job Resumes</span>
            </a>
        </div>
        <div class="col-6 col-md-3">
            <a href="../index.php" target="_blank" class="action-shortcut">
                <i class="fa-solid fa-arrow-up-right-from-square"></i>
                <span>Live Website</span>
            </a>
        </div>
    </div>

    <!-- Main Grid: Recent Appointments & Recent Applications -->
    <div class="row g-4">
        <!-- Recent Appointments Table -->
        <div class="col-lg-8">
            <div class="content-card">
                <div class="content-card-header d-flex justify-content-between align-items-center">
                    <div>
                        <h5 class="fw-bold mb-0 text-dark">Recent Patient Appointments</h5>
                        <small class="text-muted">Latest service & home visit requests</small>
                    </div>
                    <a href="appointments.php" class="btn btn-sm btn-outline-dark rounded-pill px-3 fw-semibold">
                        View All <i class="fa-solid fa-arrow-right ms-1"></i>
                    </a>
                </div>
                <div class="table-responsive">
                    <table class="table align-middle mb-0">
                        <thead class="bg-light text-muted small text-uppercase fw-bold">
                            <tr>
                                <th class="ps-4">Patient</th>
                                <th>Service Requested</th>
                                <th>Status</th>
                                <th class="pe-4 text-end">Contact</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if(!empty($recent_appointments)): ?>
                                <?php foreach($recent_appointments as $appt): ?>
                                <tr>
                                    <td class="ps-4">
                                        <div class="fw-bold text-dark"><?= htmlspecialchars($appt['full_name']) ?></div>
                                        <div class="text-muted small"><i class="fa-solid fa-phone text-muted me-1"></i> <?= htmlspecialchars($appt['phone_number']) ?></div>
                                    </td>
                                    <td>
                                        <span class="badge bg-light text-dark border px-2 py-1 rounded-pill">
                                            <?= htmlspecialchars($appt['service_required']) ?>
                                        </span>
                                        <?php if(!empty($appt['pref_date'])): ?>
                                            <div class="small text-muted mt-1"><i class="fa-regular fa-clock me-1"></i> <?= htmlspecialchars($appt['pref_date']) ?></div>
                                        <?php endif; ?>
                                    </td>
                                    <td>
                                        <?php if($appt['status'] == 'Pending'): ?>
                                            <span class="badge badge-pending px-3 py-1 rounded-pill fw-semibold">Pending</span>
                                        <?php elseif($appt['status'] == 'Completed'): ?>
                                            <span class="badge badge-completed px-3 py-1 rounded-pill fw-semibold">Completed</span>
                                        <?php else: ?>
                                            <span class="badge badge-cancelled px-3 py-1 rounded-pill fw-semibold">Cancelled</span>
                                        <?php endif; ?>
                                    </td>
                                    <td class="pe-4 text-end">
                                        <a href="tel:<?= htmlspecialchars($appt['phone_number']) ?>" class="btn btn-sm btn-light border rounded-circle text-primary" title="Call Patient">
                                            <i class="fa-solid fa-phone"></i>
                                        </a>
                                        <a href="https://wa.me/91<?= preg_replace('/[^0-9]/', '', $appt['phone_number']) ?>" target="_blank" class="btn btn-sm btn-light border rounded-circle text-success" title="WhatsApp Patient">
                                            <i class="fa-brands fa-whatsapp"></i>
                                        </a>
                                    </td>
                                </tr>
                                <?php endforeach; ?>
                            <?php else: ?>
                                <tr>
                                    <td colspan="4" class="text-center py-5 text-muted">
                                        <i class="fa-regular fa-calendar-xmark fa-2x mb-2 d-block opacity-40"></i>
                                        No appointments received yet.
                                    </td>
                                </tr>
                            <?php endif; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <!-- Right Side: Job Applications / Quick Overview -->
        <div class="col-lg-4">
            <div class="content-card mb-4">
                <div class="content-card-header d-flex justify-content-between align-items-center">
                    <div>
                        <h5 class="fw-bold mb-0 text-dark">Recent Job Applications</h5>
                        <small class="text-muted">Doctors, Nurses & Staff</small>
                    </div>
                    <a href="job_applications.php" class="btn btn-sm btn-outline-dark rounded-pill px-3 fw-semibold">
                        View All
                    </a>
                </div>
                <div class="p-3">
                    <?php if(!empty($recent_jobs)): ?>
                        <div class="d-flex flex-column gap-3">
                            <?php foreach($recent_jobs as $job): ?>
                            <div class="p-3 rounded-3 border bg-light d-flex justify-content-between align-items-center">
                                <div>
                                    <div class="fw-bold text-dark mb-0"><?= htmlspecialchars($job['full_name']) ?></div>
                                    <small class="text-muted d-block"><?= htmlspecialchars($job['position_applied']) ?></small>
                                </div>
                                <?php if(!empty($job['resume_path'])): ?>
                                    <a href="../<?= htmlspecialchars($job['resume_path']) ?>" target="_blank" class="btn btn-sm btn-primary rounded-pill px-3" style="background: var(--primary-color); border: none;">
                                        <i class="fa-solid fa-file-pdf me-1"></i> CV
                                    </a>
                                <?php endif; ?>
                            </div>
                            <?php endforeach; ?>
                        </div>
                    <?php else: ?>
                        <div class="text-center py-4 text-muted small">
                            <i class="fa-solid fa-briefcase fa-2x mb-2 d-block opacity-40"></i>
                            No job applications received yet.
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</main>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
