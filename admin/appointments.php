<?php
session_start();
require_once '../config/db.php';

if(!isset($_SESSION['admin_id'])) {
    header("Location: login.php");
    exit();
}

$success = '';
$error = '';

// Handle CSV Export
if(isset($_GET['action']) && $_GET['action'] === 'export_csv') {
    header('Content-Type: text/csv; charset=utf-8');
    header('Content-Disposition: attachment; filename=appointments_export_' . date('Y-m-d_His') . '.csv');
    $output = fopen('php://output', 'w');
    fputcsv($output, ['ID', 'Patient Name', 'Phone Number', 'Email', 'Service Required', 'Preferred Date', 'Preferred Time', 'Status', 'Message', 'Booked At']);
    
    $export_stmt = $conn->query("SELECT id, full_name, phone_number, email, service_required, pref_date, pref_time, status, message, created_at FROM appointments ORDER BY created_at DESC");
    while ($row = $export_stmt->fetch(PDO::FETCH_ASSOC)) {
        fputcsv($output, $row);
    }
    fclose($output);
    exit();
}

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

// Stats for KPI Metric Cards
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
    <title>Appointments & Patient Leads - DM Healthcare Admin</title>
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
            margin-bottom: 1.8rem;
        }

        /* KPI Metric Cards */
        .kpi-card {
            background: #ffffff;
            border-radius: 18px;
            padding: 1.3rem 1.5rem;
            border: 1px solid var(--card-border);
            box-shadow: 0 4px 15px rgba(0,0,0,0.02);
            transition: all 0.3s cubic-bezier(0.165, 0.84, 0.44, 1);
            text-decoration: none;
            display: block;
            color: inherit;
            position: relative;
            overflow: hidden;
        }

        .kpi-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 10px 25px rgba(0,0,0,0.06);
            color: inherit;
        }

        .kpi-card.active {
            border-color: #0f172a;
            background: #0f172a;
            color: #ffffff;
        }

        .kpi-card.active .kpi-label, .kpi-card.active .kpi-sub {
            color: #94a3b8 !important;
        }

        .kpi-card.active .kpi-value {
            color: #ffffff !important;
        }

        .kpi-icon-wrap {
            width: 46px;
            height: 46px;
            border-radius: 14px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.25rem;
        }

        .kpi-value {
            font-size: 1.8rem;
            font-weight: 800;
            line-height: 1.1;
            margin: 0.5rem 0 0.1rem;
            letter-spacing: -0.5px;
        }

        .kpi-label {
            font-size: 0.78rem;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 0.8px;
            color: #64748b;
        }

        /* Patient Avatar */
        .patient-avatar {
            width: 44px;
            height: 44px;
            border-radius: 12px;
            background: rgba(229, 37, 42, 0.1);
            color: var(--primary-color);
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 700;
            font-size: 1rem;
            flex-shrink: 0;
        }

        /* Main Data Card */
        .data-card {
            background: #ffffff;
            border-radius: 20px;
            border: 1px solid var(--card-border);
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.02);
            overflow: hidden;
        }

        .data-card-header {
            padding: 1.2rem 1.6rem;
            border-bottom: 1px solid var(--card-border);
            background: #ffffff;
        }

        /* Table Design */
        .table > :not(caption) > * > * {
            padding: 1.15rem 1.25rem;
            border-bottom-color: #f1f5f9;
        }

        .table tbody tr {
            transition: all 0.2s ease;
        }

        .table tbody tr:hover {
            background-color: #f8fafc;
        }

        .badge-pending { 
            background: #fffbeb; 
            color: #b45309; 
            border: 1px solid #fde68a; 
            padding: 6px 12px;
            border-radius: 50px;
            font-weight: 600;
        }
        
        .badge-completed { 
            background: #f0fdf4; 
            color: #15803d; 
            border: 1px solid #bbf7d0; 
            padding: 6px 12px;
            border-radius: 50px;
            font-weight: 600;
        }
        
        .badge-cancelled { 
            background: #fef2f2; 
            color: #b91c1c; 
            border: 1px solid #fecaca; 
            padding: 6px 12px;
            border-radius: 50px;
            font-weight: 600;
        }

        /* Action Buttons */
        .btn-action-call {
            background: rgba(229, 37, 42, 0.08);
            color: var(--primary-color);
            border: 1px solid rgba(229, 37, 42, 0.2);
            border-radius: 10px;
            padding: 6px 12px;
            font-weight: 600;
            font-size: 0.85rem;
            transition: all 0.2s;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 5px;
        }
        .btn-action-call:hover {
            background: var(--primary-color);
            color: #ffffff;
            border-color: var(--primary-color);
        }

        .btn-action-wa {
            background: rgba(16, 185, 129, 0.08);
            color: #059669;
            border: 1px solid rgba(16, 185, 129, 0.2);
            border-radius: 10px;
            padding: 6px 12px;
            font-weight: 600;
            font-size: 0.85rem;
            transition: all 0.2s;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 5px;
        }
        .btn-action-wa:hover {
            background: #059669;
            color: #ffffff;
            border-color: #059669;
        }
    </style>
</head>
<body>

<?php include 'includes/sidebar.php'; ?>

<main class="main-content">
    <!-- Top Header -->
    <div class="page-header-box d-flex flex-column flex-md-row justify-content-between align-items-md-center gap-3">
        <div>
            <h3 class="fw-bold mb-1 text-dark">Patient Appointments & Inquiries</h3>
            <p class="text-muted mb-0 small">Manage, update status, and instantly contact patients across Delhi NCR.</p>
        </div>
        
        <div class="d-flex align-items-center gap-2 flex-wrap">
            <!-- Export CSV Button -->
            <a href="appointments.php?action=export_csv" class="btn btn-outline-dark rounded-pill px-3 py-2 fw-semibold btn-sm shadow-sm" title="Download Excel/CSV Spreadsheet">
                <i class="fa-solid fa-file-excel text-success me-1"></i> Export CSV
            </a>
            
            <!-- Refresh Page -->
            <a href="appointments.php" class="btn btn-light border rounded-pill px-3 py-2 fw-semibold btn-sm shadow-sm" title="Refresh List">
                <i class="fa-solid fa-rotate-right me-1"></i> Refresh
            </a>
        </div>
    </div>

    <!-- KPI Metric Cards Row (Click to filter) -->
    <div class="row g-3 mb-4">
        <!-- KPI 1: All -->
        <div class="col-6 col-md-3">
            <a href="appointments.php?filter=all<?= !empty($search_query) ? '&q='.urlencode($search_query) : '' ?>" class="kpi-card <?= ($status_filter == 'all') ? 'active' : '' ?>">
                <div class="d-flex justify-content-between align-items-start">
                    <div>
                        <span class="kpi-label">All Inquiries</span>
                        <div class="kpi-value text-dark"><?= $total_count ?></div>
                        <small class="kpi-sub text-muted">Total bookings</small>
                    </div>
                    <div class="kpi-icon-wrap" style="background: rgba(15, 23, 42, 0.08); color: #0f172a;">
                        <i class="fa-solid fa-calendar-days"></i>
                    </div>
                </div>
            </a>
        </div>

        <!-- KPI 2: Pending -->
        <div class="col-6 col-md-3">
            <a href="appointments.php?filter=Pending<?= !empty($search_query) ? '&q='.urlencode($search_query) : '' ?>" class="kpi-card <?= ($status_filter == 'Pending') ? 'active' : '' ?>">
                <div class="d-flex justify-content-between align-items-start">
                    <div>
                        <span class="kpi-label">Pending Action</span>
                        <div class="kpi-value text-warning"><?= $pending_count ?></div>
                        <small class="kpi-sub text-warning fw-semibold">Requires callback</small>
                    </div>
                    <div class="kpi-icon-wrap" style="background: rgba(245, 158, 11, 0.1); color: #d97706;">
                        <i class="fa-solid fa-phone-volume"></i>
                    </div>
                </div>
            </a>
        </div>

        <!-- KPI 3: Completed -->
        <div class="col-6 col-md-3">
            <a href="appointments.php?filter=Completed<?= !empty($search_query) ? '&q='.urlencode($search_query) : '' ?>" class="kpi-card <?= ($status_filter == 'Completed') ? 'active' : '' ?>">
                <div class="d-flex justify-content-between align-items-start">
                    <div>
                        <span class="kpi-label">Confirmed / Done</span>
                        <div class="kpi-value text-success"><?= $completed_count ?></div>
                        <small class="kpi-sub text-success fw-semibold">Served successfully</small>
                    </div>
                    <div class="kpi-icon-wrap" style="background: rgba(16, 185, 129, 0.1); color: #059669;">
                        <i class="fa-solid fa-circle-check"></i>
                    </div>
                </div>
            </a>
        </div>

        <!-- KPI 4: Cancelled -->
        <div class="col-6 col-md-3">
            <a href="appointments.php?filter=Cancelled<?= !empty($search_query) ? '&q='.urlencode($search_query) : '' ?>" class="kpi-card <?= ($status_filter == 'Cancelled') ? 'active' : '' ?>">
                <div class="d-flex justify-content-between align-items-start">
                    <div>
                        <span class="kpi-label">Cancelled</span>
                        <div class="kpi-value text-danger"><?= $cancelled_count ?></div>
                        <small class="kpi-sub text-muted">Closed leads</small>
                    </div>
                    <div class="kpi-icon-wrap" style="background: rgba(239, 68, 68, 0.1); color: #dc2626;">
                        <i class="fa-solid fa-ban"></i>
                    </div>
                </div>
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

    <!-- Main Data Card & Live Search -->
    <div class="data-card">
        <div class="data-card-header d-flex flex-column flex-md-row justify-content-between align-items-md-center gap-3">
            <div class="d-flex align-items-center gap-2">
                <h5 class="fw-bold mb-0 text-dark">Appointment Records</h5>
                <span class="badge bg-light text-secondary border rounded-pill"><?= count($appointments) ?> Shown</span>
            </div>
            
            <!-- Search Input Form -->
            <form method="GET" class="d-flex align-items-center gap-2">
                <input type="hidden" name="filter" value="<?= htmlspecialchars($status_filter) ?>">
                <div class="input-group" style="min-width: 280px;">
                    <span class="input-group-text bg-light border-end-0 rounded-start-pill"><i class="fa-solid fa-magnifying-glass text-muted"></i></span>
                    <input type="text" name="q" class="form-control bg-light border-start-0 rounded-end-pill" placeholder="Search name, phone, service..." value="<?= htmlspecialchars($search_query) ?>">
                </div>
                <?php if(!empty($search_query)): ?>
                    <a href="appointments.php?filter=<?= htmlspecialchars($status_filter) ?>" class="btn btn-sm btn-outline-secondary rounded-pill">Clear</a>
                <?php endif; ?>
            </form>
        </div>

        <div class="table-responsive">
            <table class="table align-middle mb-0">
                <thead class="bg-light text-muted small text-uppercase fw-bold">
                    <tr>
                        <th class="ps-4" style="width: 250px;">Patient Details</th>
                        <th style="width: 220px;">Requested Service</th>
                        <th>Preferred Time & Date</th>
                        <th>Notes / Message</th>
                        <th>Status</th>
                        <th>Quick Contact</th>
                        <th class="pe-4 text-end" style="width: 170px;">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if(!empty($appointments)): ?>
                        <?php foreach($appointments as $appt): ?>
                            <?php
                            $initials = strtoupper(substr($appt['full_name'], 0, 1));
                            $phone_clean = preg_replace('/[^0-9]/', '', $appt['phone_number']);
                            $wa_msg = urlencode("Hello " . $appt['full_name'] . ", this is from DM Healthcare regarding your appointment request for " . $appt['service_required'] . ". How may we assist you?");
                            ?>
                        <tr>
                            <!-- Patient Avatar & Details -->
                            <td class="ps-4">
                                <div class="d-flex align-items-center gap-3">
                                    <div class="patient-avatar">
                                        <?= $initials ?>
                                    </div>
                                    <div>
                                        <span class="badge bg-light text-secondary border font-monospace" style="font-size: 0.7rem;">#<?= $appt['id'] ?></span>
                                        <div class="fw-bold text-dark fs-6"><?= htmlspecialchars($appt['full_name']) ?></div>
                                        <div class="text-muted small">
                                            <i class="fa-solid fa-phone me-1 text-muted"></i> <?= htmlspecialchars($appt['phone_number']) ?>
                                        </div>
                                        <?php if(!empty($appt['email'])): ?>
                                            <div class="text-muted small">
                                                <i class="fa-regular fa-envelope me-1 text-muted"></i> <?= htmlspecialchars($appt['email']) ?>
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </td>

                            <!-- Service Required -->
                            <td>
                                <span class="badge bg-light text-dark border px-3 py-2 rounded-pill fw-semibold mb-1 d-inline-block">
                                    <?= htmlspecialchars($appt['service_required']) ?>
                                </span>
                            </td>

                            <!-- Preferred Timing -->
                            <td>
                                <?php if(!empty($appt['pref_date'])): ?>
                                    <div class="fw-semibold text-primary small">
                                        <i class="fa-regular fa-calendar-check me-1"></i> <?= htmlspecialchars($appt['pref_date']) ?>
                                        <?= !empty($appt['pref_time']) ? ' &bull; ' . htmlspecialchars($appt['pref_time']) : '' ?>
                                    </div>
                                <?php else: ?>
                                    <span class="text-muted small">Immediate / Earliest</span>
                                <?php endif; ?>
                                <div class="small text-muted mt-1">
                                    Booked: <?= date('d M, Y h:i A', strtotime($appt['created_at'])) ?>
                                </div>
                            </td>

                            <!-- Patient Message / Notes -->
                            <td style="max-width: 220px;">
                                <?php if(!empty($appt['message'])): ?>
                                    <div class="p-2 rounded-3 bg-light border text-dark small" style="white-space: pre-wrap; font-size: 0.82rem; max-height: 80px; overflow-y: auto;">
                                        <?= htmlspecialchars($appt['message']) ?>
                                    </div>
                                <?php else: ?>
                                    <span class="text-muted small italic opacity-75">No notes attached</span>
                                <?php endif; ?>
                            </td>

                            <!-- Status Badge -->
                            <td>
                                <?php if($appt['status'] == 'Pending'): ?>
                                    <span class="badge-pending">Pending</span>
                                <?php elseif($appt['status'] == 'Completed'): ?>
                                    <span class="badge-completed">Completed</span>
                                <?php else: ?>
                                    <span class="badge-cancelled">Cancelled</span>
                                <?php endif; ?>
                            </td>

                            <!-- Quick Contact Actions -->
                            <td>
                                <div class="d-flex align-items-center gap-2">
                                    <a href="tel:<?= htmlspecialchars($appt['phone_number']) ?>" class="btn-action-call" title="Call Patient">
                                        <i class="fa-solid fa-phone"></i> Call
                                    </a>
                                    <a href="https://wa.me/91<?= $phone_clean ?>?text=<?= $wa_msg ?>" target="_blank" class="btn-action-wa" title="Chat on WhatsApp">
                                        <i class="fa-brands fa-whatsapp"></i> Chat
                                    </a>
                                </div>
                            </td>

                            <!-- Status Form & Delete Action -->
                            <td class="pe-4 text-end">
                                <form method="POST" class="d-inline-flex align-items-center gap-2 justify-content-end">
                                    <input type="hidden" name="appointment_id" value="<?= $appt['id'] ?>">
                                    <select name="status" class="form-select form-select-sm rounded-3 shadow-none border" style="width: 110px; font-size: 0.85rem;">
                                        <option value="Pending" <?= $appt['status'] == 'Pending' ? 'selected' : '' ?>>Pending</option>
                                        <option value="Completed" <?= $appt['status'] == 'Completed' ? 'selected' : '' ?>>Completed</option>
                                        <option value="Cancelled" <?= $appt['status'] == 'Cancelled' ? 'selected' : '' ?>>Cancelled</option>
                                    </select>
                                    <button type="submit" name="update_status" class="btn btn-sm btn-primary rounded-3 px-3 fw-bold" style="background: var(--primary-color); border: none;" title="Save Status">
                                        Save
                                    </button>
                                    <button type="submit" name="delete_appointment" class="btn btn-sm btn-outline-danger rounded-3" onclick="return confirm('Are you sure you want to permanently delete appointment #<?= $appt['id'] ?>?');" title="Delete record">
                                        <i class="fa-solid fa-trash"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <tr>
                            <td colspan="7" class="text-center py-5 text-muted">
                                <i class="fa-regular fa-calendar-xmark fa-3x mb-3 opacity-40 d-block"></i>
                                <h5>No appointments found for this filter.</h5>
                                <p class="small text-muted mb-0">Try changing your search term or select "All Inquiries".</p>
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
