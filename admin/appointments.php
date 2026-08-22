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

// Handle delete single appointment
if(isset($_POST['delete_appointment'])) {
    $id = (int)$_POST['appointment_id'];
    $stmt = $conn->prepare("DELETE FROM appointments WHERE id = ?");
    if($stmt->execute([$id])) {
        $success = "Appointment #{$id} deleted successfully.";
    } else {
        $error = "Failed to delete appointment.";
    }
}

// Handle Clear All Records
if(isset($_POST['clear_all_records'])) {
    $stmt = $conn->query("DELETE FROM appointments");
    $success = "All appointment records have been cleared.";
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
    $sql .= " AND (full_name LIKE ? OR phone_number LIKE ? OR email LIKE ? OR service_required LIKE ? OR message LIKE ?)";
    $term = "%{$search_query}%";
    $params[] = $term;
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
            --card-border: #e2e8f0;
            --light-bg: #f8fafc;
        }

        body { 
            font-family: 'Outfit', sans-serif;
            background-color: var(--light-bg); 
            color: #334155;
            overflow-x: hidden; 
            margin: 0;
            padding: 0;
        }

        .main-content { 
            margin-left: 270px; 
            padding: 2rem 2.5rem; 
            min-height: 100vh;
        }

        @media (max-width: 991px) {
            .main-content { margin-left: 0; padding: 1.2rem; }
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
            padding: 1.2rem 1.4rem;
            border: 1px solid var(--card-border);
            box-shadow: 0 4px 15px rgba(0,0,0,0.02);
            transition: all 0.25s ease;
            text-decoration: none;
            display: block;
            color: inherit;
        }

        .kpi-card:hover {
            transform: translateY(-3px);
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
            width: 44px;
            height: 44px;
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.2rem;
        }

        .kpi-value {
            font-size: 1.8rem;
            font-weight: 800;
            line-height: 1.1;
            margin: 0.4rem 0 0.1rem;
            letter-spacing: -0.5px;
        }

        .kpi-label {
            font-size: 0.76rem;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 0.8px;
            color: #64748b;
        }

        /* Table Card Container */
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

        /* Clean Modern Table */
        .table-leads {
            width: 100%;
            margin-bottom: 0;
            border-collapse: collapse;
        }

        .table-leads thead th {
            background-color: #f8fafc;
            color: #64748b;
            font-size: 0.75rem;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 0.8px;
            padding: 1rem 1.2rem;
            border-bottom: 1px solid var(--card-border);
            border-top: none;
            white-space: nowrap;
        }

        .table-leads tbody td {
            padding: 1.2rem 1.2rem;
            vertical-align: middle;
            border-bottom: 1px solid #f1f5f9;
            background-color: #ffffff;
            transition: background-color 0.2s ease;
        }

        .table-leads tbody tr:hover td {
            background-color: #f8fafc;
        }

        .table-leads tbody tr:last-child td {
            border-bottom: none;
        }

        /* Patient Avatar */
        .patient-avatar-box {
            width: 42px;
            height: 42px;
            border-radius: 12px;
            background: rgba(229, 37, 42, 0.1);
            color: var(--primary-color);
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 800;
            font-size: 1.1rem;
            flex-shrink: 0;
        }

        /* Status Pills */
        .badge-status-Pending {
            background: #fffbeb;
            color: #b45309;
            border: 1px solid #fde68a;
            padding: 5px 12px;
            border-radius: 50px;
            font-weight: 700;
            font-size: 0.8rem;
            display: inline-block;
        }

        .badge-status-Completed {
            background: #f0fdf4;
            color: #15803d;
            border: 1px solid #bbf7d0;
            padding: 5px 12px;
            border-radius: 50px;
            font-weight: 700;
            font-size: 0.8rem;
            display: inline-block;
        }

        .badge-status-Cancelled {
            background: #fef2f2;
            color: #b91c1c;
            border: 1px solid #fecaca;
            padding: 5px 12px;
            border-radius: 50px;
            font-weight: 700;
            font-size: 0.8rem;
            display: inline-block;
        }

        /* Note Badge & Button */
        .btn-note-view {
            background: #f1f5f9;
            color: #334155;
            border: 1px solid #e2e8f0;
            border-radius: 8px;
            padding: 6px 12px;
            font-size: 0.82rem;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.2s;
            display: inline-flex;
            align-items: center;
            gap: 6px;
        }

        .btn-note-view:hover {
            background: #e2e8f0;
            color: #0f172a;
        }

        .note-inline-text {
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;
            text-overflow: ellipsis;
            font-size: 0.83rem;
            color: #64748b;
            max-width: 260px;
            line-height: 1.4;
        }

        /* Action Buttons */
        .btn-call-mini {
            background: rgba(229, 37, 42, 0.08);
            color: var(--primary-color);
            border: 1px solid rgba(229, 37, 42, 0.2);
            border-radius: 8px;
            padding: 5px 10px;
            font-weight: 700;
            font-size: 0.82rem;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 5px;
            transition: all 0.2s ease;
        }

        .btn-call-mini:hover {
            background: var(--primary-color);
            color: #ffffff;
        }

        .btn-wa-mini {
            background: rgba(16, 185, 129, 0.08);
            color: #059669;
            border: 1px solid rgba(16, 185, 129, 0.2);
            border-radius: 8px;
            padding: 5px 10px;
            font-weight: 700;
            font-size: 0.82rem;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 5px;
            transition: all 0.2s ease;
        }

        .btn-wa-mini:hover {
            background: #059669;
            color: #ffffff;
        }
    </style>
</head>
<body>

<?php include 'includes/sidebar.php'; ?>

<main class="main-content">
    <!-- Top Header -->
    <div class="page-header-box d-flex flex-column flex-md-row justify-content-between align-items-md-center gap-3">
        <div>
            <h3 class="fw-bold mb-1 text-dark">Patient Appointments & Leads</h3>
            <p class="text-muted mb-0 small">Real-time booking requests with 1-click WhatsApp, direct Phone Call, and status tracking.</p>
        </div>
        
        <div class="d-flex align-items-center gap-2 flex-wrap">
            <!-- Export CSV -->
            <a href="appointments.php?action=export_csv" class="btn btn-outline-dark rounded-pill px-3 py-2 fw-semibold btn-sm shadow-sm" title="Download Excel/CSV Spreadsheet">
                <i class="fa-solid fa-file-excel text-success me-1"></i> Export CSV
            </a>
            
            <!-- Clear All Data Tool -->
            <form method="POST" onsubmit="return confirm('WARNING: Are you sure you want to permanently clear ALL appointment records?');" class="m-0">
                <button type="submit" name="clear_all_records" class="btn btn-outline-danger rounded-pill px-3 py-2 fw-semibold btn-sm shadow-sm" title="Wipe all test/spam data">
                    <i class="fa-solid fa-trash-can me-1"></i> Clear All Data
                </button>
            </form>

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

    <!-- Main Table Card -->
    <div class="data-card">
        <div class="data-card-header d-flex flex-column flex-md-row justify-content-between align-items-md-center gap-3">
            <div class="d-flex align-items-center gap-2">
                <h5 class="fw-bold mb-0 text-dark">Appointment Records</h5>
                <span class="badge bg-light text-secondary border rounded-pill"><?= count($appointments) ?> Leads</span>
            </div>
            
            <!-- Live Search Bar -->
            <form method="GET" class="d-flex align-items-center gap-2 m-0" style="min-width: 320px;">
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

        <div class="table-responsive">
            <table class="table-leads">
                <thead>
                    <tr>
                        <th class="ps-4">Patient Info</th>
                        <th>Service Required</th>
                        <th>Date / Booking</th>
                        <th>Message / Notes</th>
                        <th>Status</th>
                        <th>Quick Contact</th>
                        <th class="pe-4 text-end">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if(!empty($appointments)): ?>
                        <?php foreach($appointments as $appt): ?>
                            <?php
                            $clean_name = html_entity_decode($appt['full_name'] ?? 'Patient', ENT_QUOTES, 'UTF-8');
                            $initials = strtoupper(substr(trim($clean_name), 0, 1));
                            $phone_clean = preg_replace('/[^0-9]/', '', $appt['phone_number']);
                            $wa_msg = urlencode("Hello " . $clean_name . ", this is from DM Healthcare regarding your appointment inquiry for " . $appt['service_required'] . ". How may we assist you?");
                            $pref_date_clean = (!empty($appt['pref_date']) && $appt['pref_date'] != '0000-00-00' && strpos($appt['pref_date'], '0000') === false) ? $appt['pref_date'] : null;
                            ?>
                        <tr>
                            <!-- Patient Details -->
                            <td class="ps-4">
                                <div class="d-flex align-items-center gap-3">
                                    <div class="patient-avatar-box">
                                        <?= $initials ?>
                                    </div>
                                    <div>
                                        <span class="badge bg-light text-secondary border font-monospace" style="font-size: 0.72rem;">#<?= $appt['id'] ?></span>
                                        <div class="fw-bold text-dark fs-6"><?= htmlspecialchars($clean_name) ?></div>
                                        <div class="text-muted small">
                                            <i class="fa-solid fa-phone me-1 text-muted"></i> <?= htmlspecialchars($appt['phone_number']) ?>
                                        </div>
                                        <?php if(!empty($appt['email'])): ?>
                                            <div class="text-muted small text-truncate" style="max-width: 170px;" title="<?= htmlspecialchars($appt['email']) ?>">
                                                <i class="fa-regular fa-envelope me-1 text-muted"></i> <?= htmlspecialchars($appt['email']) ?>
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </td>

                            <!-- Service Required -->
                            <td>
                                <span class="badge bg-light text-dark border px-3 py-2 rounded-pill fw-bold d-inline-block">
                                    <i class="fa-solid fa-stethoscope text-danger me-1" style="color: var(--primary-color) !important;"></i>
                                    <?= htmlspecialchars($appt['service_required']) ?>
                                </span>
                            </td>

                            <!-- Date / Booking -->
                            <td>
                                <?php if($pref_date_clean): ?>
                                    <div class="fw-semibold text-primary small">
                                        <i class="fa-regular fa-calendar-check me-1"></i> <?= htmlspecialchars($pref_date_clean) ?>
                                    </div>
                                    <?php if(!empty($appt['pref_time'])): ?>
                                        <small class="text-muted d-block"><i class="fa-regular fa-clock me-1"></i> <?= htmlspecialchars($appt['pref_time']) ?></small>
                                    <?php endif; ?>
                                <?php else: ?>
                                    <span class="badge bg-light text-muted border small">Earliest Available</span>
                                <?php endif; ?>
                                <small class="text-muted d-block mt-1" style="font-size: 0.76rem;">
                                    Booked: <?= date('d M Y, h:i A', strtotime($appt['created_at'])) ?>
                                </small>
                            </td>

                            <!-- Message / Notes -->
                            <td>
                                <?php if(!empty($appt['message'])): ?>
                                    <div class="note-inline-text mb-1">
                                        <?= htmlspecialchars($appt['message']) ?>
                                    </div>
                                    <button type="button" class="btn-note-view" data-bs-toggle="modal" data-bs-target="#noteModal<?= $appt['id'] ?>">
                                        <i class="fa-regular fa-eye"></i> View Full Note
                                    </button>

                                    <!-- Message Modal -->
                                    <div class="modal fade" id="noteModal<?= $appt['id'] ?>" tabindex="-1" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content rounded-4 border-0 shadow">
                                                <div class="modal-header border-bottom p-4">
                                                    <div>
                                                        <h5 class="modal-title fw-bold text-dark">Patient Inquiry Details</h5>
                                                        <small class="text-muted">Lead #<?= $appt['id'] ?> &bull; <?= htmlspecialchars($clean_name) ?></small>
                                                    </div>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body p-4">
                                                    <div class="mb-3 p-3 bg-light rounded-3 border">
                                                        <div class="fw-bold text-dark mb-1">Requested Service: <span class="text-primary"><?= htmlspecialchars($appt['service_required']) ?></span></div>
                                                        <div class="small text-muted">Phone: <strong><?= htmlspecialchars($appt['phone_number']) ?></strong></div>
                                                        <?php if(!empty($appt['email'])): ?>
                                                            <div class="small text-muted">Email: <strong><?= htmlspecialchars($appt['email']) ?></strong></div>
                                                        <?php endif; ?>
                                                    </div>
                                                    <label class="fw-bold text-dark small text-uppercase mb-2">Message Content:</label>
                                                    <div class="p-3 bg-light rounded-3 border text-dark" style="white-space: pre-wrap; font-size: 0.9rem; line-height: 1.6; max-height: 250px; overflow-y: auto;">
                                                        <?= htmlspecialchars($appt['message']) ?>
                                                    </div>
                                                </div>
                                                <div class="modal-footer border-top p-3 d-flex justify-content-between">
                                                    <a href="https://wa.me/91<?= $phone_clean ?>?text=<?= $wa_msg ?>" target="_blank" class="btn btn-success btn-sm rounded-pill px-3 fw-bold">
                                                        <i class="fa-brands fa-whatsapp me-1"></i> WhatsApp
                                                    </a>
                                                    <button type="button" class="btn btn-secondary btn-sm rounded-pill px-4" data-bs-dismiss="modal">Close</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php else: ?>
                                    <span class="text-muted small italic opacity-60">No notes attached</span>
                                <?php endif; ?>
                            </td>

                            <!-- Status Badge -->
                            <td>
                                <span class="badge-status-<?= $appt['status'] ?>">
                                    <?= htmlspecialchars($appt['status']) ?>
                                </span>
                            </td>

                            <!-- Quick Contact Actions -->
                            <td>
                                <div class="d-flex align-items-center gap-2">
                                    <a href="tel:<?= htmlspecialchars($appt['phone_number']) ?>" class="btn-call-mini" title="Call directly">
                                        <i class="fa-solid fa-phone"></i> Call
                                    </a>
                                    <a href="https://wa.me/91<?= $phone_clean ?>?text=<?= $wa_msg ?>" target="_blank" class="btn-wa-mini" title="Chat on WhatsApp">
                                        <i class="fa-brands fa-whatsapp"></i> Chat
                                    </a>
                                </div>
                            </td>

                            <!-- Status Form & Delete Action -->
                            <td class="pe-4 text-end">
                                <div class="d-inline-flex align-items-center gap-2">
                                    <form method="POST" class="d-flex align-items-center gap-1 m-0">
                                        <input type="hidden" name="appointment_id" value="<?= $appt['id'] ?>">
                                        <select name="status" class="form-select form-select-sm rounded-3 shadow-none border" style="width: 105px; font-size: 0.82rem;">
                                            <option value="Pending" <?= $appt['status'] == 'Pending' ? 'selected' : '' ?>>Pending</option>
                                            <option value="Completed" <?= $appt['status'] == 'Completed' ? 'selected' : '' ?>>Completed</option>
                                            <option value="Cancelled" <?= $appt['status'] == 'Cancelled' ? 'selected' : '' ?>>Cancelled</option>
                                        </select>
                                        <button type="submit" name="update_status" class="btn btn-sm btn-primary rounded-3 px-2 fw-bold" style="background: var(--primary-color); border: none;" title="Save Status">
                                            Save
                                        </button>
                                    </form>
                                    <form method="POST" onsubmit="return confirm('Delete appointment lead #<?= $appt['id'] ?>?');" class="m-0">
                                        <input type="hidden" name="appointment_id" value="<?= $appt['id'] ?>">
                                        <button type="submit" name="delete_appointment" class="btn btn-sm btn-outline-danger rounded-3" title="Delete lead">
                                            <i class="fa-solid fa-trash"></i>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <tr>
                            <td colspan="7" class="text-center py-5 text-muted">
                                <i class="fa-regular fa-calendar-xmark fa-3x mb-3 opacity-40 d-block"></i>
                                <h5 class="fw-bold text-dark">No appointments found.</h5>
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
