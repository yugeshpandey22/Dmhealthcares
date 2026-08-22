<?php
session_start();
require_once '../config/db.php';

if(!isset($_SESSION['admin_id'])) {
    header("Location: login.php");
    exit();
}

$success = '';
$error = '';

// Handle status update
if(isset($_POST['update_status'])) {
    $id = (int)$_POST['appointment_id'];
    $status = $_POST['status'];
    $stmt = $conn->prepare("UPDATE appointments SET status = ? WHERE id = ?");
    if($stmt->execute([$status, $id])) {
        $success = "Appointment #{$id} status updated to {$status}.";
    } else {
        $error = "Failed to update status.";
    }
}

// Handle delete
if(isset($_POST['delete_appointment'])) {
    $id = (int)$_POST['appointment_id'];
    $stmt = $conn->prepare("DELETE FROM appointments WHERE id = ?");
    if($stmt->execute([$id])) {
        $success = "Appointment #{$id} deleted successfully.";
    } else {
        $error = "Failed to delete appointment.";
    }
}

// Filter logic
$status_filter = isset($_GET['filter']) ? trim($_GET['filter']) : 'all';
$search_query = isset($_GET['q']) ? trim($_GET['q']) : '';

$sql = "SELECT * FROM appointments WHERE 1=1";
$params = [];

if ($status_filter !== 'all' && in_array($status_filter, ['Pending', 'Completed', 'Cancelled'])) {
    $sql .= " AND status = ?";
    $params[] = $status_filter;
}

if (!empty($search_query)) {
    $sql .= " AND (full_name LIKE ? OR phone_number LIKE ? OR email LIKE ? OR service_required LIKE ?)";
    $term = "%{$search_query}%";
    $params[] = $term;
    $params[] = $term;
    $params[] = $term;
    $params[] = $term;
}

$sql .= " ORDER BY created_at DESC";
$stmt = $conn->prepare($sql);
$stmt->execute($params);
$appointments = $stmt->fetchAll(PDO::FETCH_ASSOC);

// Stats for pills
$total_count = (int)$conn->query("SELECT COUNT(*) FROM appointments")->fetchColumn();
$pending_count = (int)$conn->query("SELECT COUNT(*) FROM appointments WHERE status = 'Pending'")->fetchColumn();
$completed_count = (int)$conn->query("SELECT COUNT(*) FROM appointments WHERE status = 'Completed'")->fetchColumn();
$cancelled_count = (int)$conn->query("SELECT COUNT(*) FROM appointments WHERE status = 'Cancelled'")->fetchColumn();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Appointments - DM Healthcare Admin</title>
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

        /* Filter Tab Buttons */
        .filter-tab {
            padding: 0.55rem 1.2rem;
            border-radius: 50px;
            font-weight: 600;
            font-size: 0.88rem;
            text-decoration: none;
            color: #64748b;
            background: #ffffff;
            border: 1px solid var(--card-border);
            transition: all 0.2s ease;
            display: inline-flex;
            align-items: center;
            gap: 8px;
        }

        .filter-tab:hover {
            color: #0f172a;
            border-color: #cbd5e1;
        }

        .filter-tab.active {
            background: #0f172a;
            color: #ffffff;
            border-color: #0f172a;
        }

        /* Main Card */
        .data-card {
            background: #ffffff;
            border-radius: 20px;
            border: 1px solid var(--card-border);
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.02);
            overflow: hidden;
        }

        /* Table Design */
        .table > :not(caption) > * > * {
            padding: 1.1rem 1.2rem;
            border-bottom-color: #f1f5f9;
        }

        .table tbody tr:hover {
            background-color: #f8fafc;
        }

        .badge-pending { background: #fffbeb; color: #b45309; border: 1px solid #fde68a; }
        .badge-completed { background: #f0fdf4; color: #15803d; border: 1px solid #bbf7d0; }
        .badge-cancelled { background: #fef2f2; color: #b91c1c; border: 1px solid #fecaca; }

        .btn-call {
            background: rgba(229, 37, 42, 0.08);
            color: var(--primary-color);
            border: 1px solid rgba(229, 37, 42, 0.2);
        }
        .btn-call:hover {
            background: var(--primary-color);
            color: #ffffff;
        }

        .btn-wa {
            background: rgba(16, 185, 129, 0.08);
            color: #059669;
            border: 1px solid rgba(16, 185, 129, 0.2);
        }
        .btn-wa:hover {
            background: #059669;
            color: #ffffff;
        }
    </style>
</head>
<body>

<?php include 'includes/sidebar.php'; ?>

<main class="main-content">
    <!-- Header -->
    <div class="page-header-box d-flex flex-column flex-md-row justify-content-between align-items-md-center gap-3">
        <div>
            <h3 class="fw-bold mb-1 text-dark">Patient Appointments & Leads</h3>
            <p class="text-muted mb-0 small">Review, contact and update patient service booking inquiries.</p>
        </div>
        
        <!-- Search Bar -->
        <form method="GET" class="d-flex align-items-center gap-2" style="min-width: 280px;">
            <input type="hidden" name="filter" value="<?= htmlspecialchars($status_filter) ?>">
            <div class="input-group">
                <span class="input-group-text bg-light border-end-0 rounded-start-pill"><i class="fa-solid fa-magnifying-glass text-muted"></i></span>
                <input type="text" name="q" class="form-control bg-light border-start-0 rounded-end-pill" placeholder="Search patient, phone, service..." value="<?= htmlspecialchars($search_query) ?>">
            </div>
            <?php if(!empty($search_query)): ?>
                <a href="appointments.php?filter=<?= htmlspecialchars($status_filter) ?>" class="btn btn-sm btn-outline-secondary rounded-pill">Clear</a>
            <?php endif; ?>
        </form>
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

    <!-- Filter Pills -->
    <div class="d-flex flex-wrap gap-2 mb-4">
        <a href="appointments.php?filter=all<?= !empty($search_query) ? '&q='.urlencode($search_query) : '' ?>" class="filter-tab <?= ($status_filter == 'all') ? 'active' : '' ?>">
            <i class="fa-solid fa-list"></i> All Appointments <span class="badge bg-secondary rounded-pill"><?= $total_count ?></span>
        </a>
        <a href="appointments.php?filter=Pending<?= !empty($search_query) ? '&q='.urlencode($search_query) : '' ?>" class="filter-tab <?= ($status_filter == 'Pending') ? 'active' : '' ?>">
            <i class="fa-solid fa-clock text-warning"></i> Pending <span class="badge bg-warning text-dark rounded-pill"><?= $pending_count ?></span>
        </a>
        <a href="appointments.php?filter=Completed<?= !empty($search_query) ? '&q='.urlencode($search_query) : '' ?>" class="filter-tab <?= ($status_filter == 'Completed') ? 'active' : '' ?>">
            <i class="fa-solid fa-check text-success"></i> Completed <span class="badge bg-success rounded-pill"><?= $completed_count ?></span>
        </a>
        <a href="appointments.php?filter=Cancelled<?= !empty($search_query) ? '&q='.urlencode($search_query) : '' ?>" class="filter-tab <?= ($status_filter == 'Cancelled') ? 'active' : '' ?>">
            <i class="fa-solid fa-xmark text-danger"></i> Cancelled <span class="badge bg-danger rounded-pill"><?= $cancelled_count ?></span>
        </a>
    </div>

    <!-- Main Table Card -->
    <div class="data-card">
        <div class="table-responsive">
            <table class="table align-middle mb-0">
                <thead class="bg-light text-muted small text-uppercase fw-bold">
                    <tr>
                        <th class="ps-4">ID & Patient</th>
                        <th>Service & Timing</th>
                        <th>Patient Message</th>
                        <th>Status</th>
                        <th>Quick Contact</th>
                        <th class="pe-4 text-end">Update Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if(!empty($appointments)): ?>
                        <?php foreach($appointments as $appt): ?>
                        <tr>
                            <!-- ID & Patient Details -->
                            <td class="ps-4">
                                <span class="badge bg-light text-secondary border font-monospace mb-1">#<?= $appt['id'] ?></span>
                                <div class="fw-bold text-dark fs-6"><?= htmlspecialchars($appt['full_name']) ?></div>
                                <div class="text-muted small">
                                    <i class="fa-solid fa-phone me-1 text-muted"></i> <?= htmlspecialchars($appt['phone_number']) ?>
                                </div>
                                <?php if(!empty($appt['email'])): ?>
                                    <div class="text-muted small">
                                        <i class="fa-regular fa-envelope me-1 text-muted"></i> <?= htmlspecialchars($appt['email']) ?>
                                    </div>
                                <?php endif; ?>
                            </td>

                            <!-- Service & Timing -->
                            <td>
                                <span class="badge bg-light text-dark border px-3 py-2 rounded-pill fw-semibold mb-1">
                                    <?= htmlspecialchars($appt['service_required']) ?>
                                </span>
                                <?php if(!empty($appt['pref_date'])): ?>
                                    <div class="small fw-semibold text-primary mt-1">
                                        <i class="fa-regular fa-calendar-check me-1"></i> <?= htmlspecialchars($appt['pref_date']) ?>
                                        <?= !empty($appt['pref_time']) ? htmlspecialchars($appt['pref_time']) : '' ?>
                                    </div>
                                <?php endif; ?>
                                <div class="small text-muted mt-1">
                                    Booked: <?= date('d M, Y h:i A', strtotime($appt['created_at'])) ?>
                                </div>
                            </td>

                            <!-- Message -->
                            <td style="max-width: 250px;">
                                <?php if(!empty($appt['message'])): ?>
                                    <div class="p-2 rounded bg-light border text-dark small" style="white-space: pre-wrap; font-size: 0.82rem;">
                                        <?= htmlspecialchars($appt['message']) ?>
                                    </div>
                                <?php else: ?>
                                    <span class="text-muted small italic">No notes provided</span>
                                <?php endif; ?>
                            </td>

                            <!-- Status Badge -->
                            <td>
                                <?php if($appt['status'] == 'Pending'): ?>
                                    <span class="badge badge-pending px-3 py-2 rounded-pill fw-semibold">Pending</span>
                                <?php elseif($appt['status'] == 'Completed'): ?>
                                    <span class="badge badge-completed px-3 py-2 rounded-pill fw-semibold">Completed</span>
                                <?php else: ?>
                                    <span class="badge badge-cancelled px-3 py-2 rounded-pill fw-semibold">Cancelled</span>
                                <?php endif; ?>
                            </td>

                            <!-- Contact Links -->
                            <td>
                                <div class="d-flex gap-2">
                                    <a href="tel:<?= htmlspecialchars($appt['phone_number']) ?>" class="btn btn-sm btn-call rounded-pill px-3 fw-semibold d-inline-flex align-items-center gap-1" title="Call directly">
                                        <i class="fa-solid fa-phone"></i> Call
                                    </a>
                                    <a href="https://wa.me/91<?= preg_replace('/[^0-9]/', '', $appt['phone_number']) ?>?text=Hello%20<?= urlencode($appt['full_name']) ?>,%20this%20is%20from%20DM%20Healthcare%20regarding%20your%20appointment%20inquiry." target="_blank" class="btn btn-sm btn-wa rounded-pill px-3 fw-semibold d-inline-flex align-items-center gap-1" title="Send WhatsApp Message">
                                        <i class="fa-brands fa-whatsapp"></i> Chat
                                    </a>
                                </div>
                            </td>

                            <!-- Action Form -->
                            <td class="pe-4 text-end">
                                <form method="POST" class="d-inline-flex align-items-center gap-2 justify-content-end">
                                    <input type="hidden" name="appointment_id" value="<?= $appt['id'] ?>">
                                    <select name="status" class="form-select form-select-sm rounded-3 shadow-none border" style="width: 120px;">
                                        <option value="Pending" <?= $appt['status'] == 'Pending' ? 'selected' : '' ?>>Pending</option>
                                        <option value="Completed" <?= $appt['status'] == 'Completed' ? 'selected' : '' ?>>Completed</option>
                                        <option value="Cancelled" <?= $appt['status'] == 'Cancelled' ? 'selected' : '' ?>>Cancelled</option>
                                    </select>
                                    <button type="submit" name="update_status" class="btn btn-sm btn-primary rounded-3 px-3 fw-semibold" style="background: var(--primary-color); border: none;" title="Save Status">
                                        Save
                                    </button>
                                    <button type="submit" name="delete_appointment" class="btn btn-sm btn-outline-danger rounded-3" onclick="return confirm('Are you sure you want to delete appointment #<?= $appt['id'] ?>? This cannot be undone.');" title="Delete record">
                                        <i class="fa-solid fa-trash"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <tr>
                            <td colspan="6" class="text-center py-5 text-muted">
                                <i class="fa-regular fa-folder-open fa-3x mb-3 opacity-40 d-block"></i>
                                <h5>No appointments matching this filter.</h5>
                                <p class="small text-muted mb-0">Try clearing filters or search terms.</p>
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
