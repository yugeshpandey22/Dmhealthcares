<?php
session_start();
require_once '../config/db.php';

if(!isset($_SESSION['admin_id'])) {
    header("Location: login.php");
    exit();
}

// Get stats
$stmt = $conn->query("SELECT COUNT(*) FROM appointments");
$total_appointments = $stmt->fetchColumn();

$stmt = $conn->query("SELECT COUNT(*) FROM appointments WHERE status = 'Pending'");
$pending_appointments = $stmt->fetchColumn();

// Get recent 5 appointments
$stmt = $conn->query("SELECT * FROM appointments ORDER BY created_at DESC LIMIT 5");
$recent_appointments = $stmt->fetchAll();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - DM Healthcare</title>
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
        .stat-card { 
            border: none; 
            border-radius: 20px; 
            box-shadow: 0 10px 30px rgba(0,0,0,0.03); 
            transition: all 0.3s ease; 
            background: white;
            position: relative;
            overflow: hidden;
        }
        .stat-card::before {
            content: ''; position: absolute; top: 0; left: 0; width: 4px; height: 100%;
            background: #E5252A; border-radius: 20px 0 0 20px;
        }
        .stat-card.warning::before { background: #ffc107; }
        .stat-card:hover { transform: translateY(-5px); box-shadow: 0 15px 35px rgba(0,0,0,0.08); }
        
        .header-title { font-weight: 700; color: #1a2b4c; letter-spacing: -0.5px; }
    </style>
</head>
<body>

<?php include 'includes/sidebar.php'; ?>

<div class="main-content">
    <div class="d-flex justify-content-between align-items-center mb-5">
        <h2 class="header-title mb-0">Dashboard Overview</h2>
        <div class="d-flex align-items-center bg-white px-4 py-2 rounded-pill shadow-sm border">
            <div class="bg-primary rounded-circle me-3" style="width: 32px; height: 32px; display: flex; align-items: center; justify-content: center;">
                <i class="fa-solid fa-user text-white small"></i>
            </div>
            <span class="text-muted small">Welcome back, <span class="fw-bold text-dark"><?= $_SESSION['admin_user'] ?></span></span>
        </div>
    </div>
    
    <div class="row g-4 mb-5">
        <div class="col-md-6 col-lg-4">
            <div class="stat-card p-4 h-100">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <p class="text-muted mb-2 small fw-semibold text-uppercase tracking-wider">Total Appointments</p>
                        <h2 class="fw-bold text-primary mb-0" style="font-size: 2.5rem;"><?= $total_appointments ?></h2>
                    </div>
                    <div class="bg-primary bg-opacity-10 rounded-circle d-flex align-items-center justify-content-center" style="width: 64px; height: 64px;">
                        <i class="fa-solid fa-calendar-check fs-4 text-primary"></i>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="col-md-6 col-lg-4">
            <div class="stat-card p-4 h-100 warning">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <p class="text-muted mb-2 small fw-semibold text-uppercase tracking-wider">Pending Appointments</p>
                        <h2 class="fw-bold text-warning mb-0" style="font-size: 2.5rem;"><?= $pending_appointments ?></h2>
                    </div>
                    <div class="bg-warning bg-opacity-10 rounded-circle d-flex align-items-center justify-content-center" style="width: 64px; height: 64px;">
                        <i class="fa-solid fa-clock fs-4 text-warning"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Recent Appointments Table -->
    <div class="card stat-card p-0 mt-2">
        <div class="d-flex justify-content-between align-items-center p-4 border-bottom">
            <h5 class="fw-bold mb-0 text-dark">Recent Appointments</h5>
            <a href="appointments.php" class="btn btn-sm btn-primary px-3 rounded-pill">View All</a>
        </div>
        <div class="table-responsive">
            <table class="table table-hover align-middle mb-0">
                <thead class="bg-light text-muted small text-uppercase tracking-wider">
                    <tr>
                        <th class="ps-4 py-3 fw-semibold">Patient Name</th>
                        <th class="py-3 fw-semibold">Service Required</th>
                        <th class="py-3 fw-semibold">Status</th>
                        <th class="pe-4 py-3 fw-semibold text-end">Date Booked</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($recent_appointments as $appt): ?>
                    <tr>
                        <td class="ps-4 py-3">
                            <div class="fw-bold text-dark"><?= htmlspecialchars($appt['full_name']) ?></div>
                            <div class="text-muted small"><?= htmlspecialchars($appt['phone_number']) ?></div>
                        </td>
                        <td class="py-3">
                            <span class="badge bg-light text-secondary border"><?= htmlspecialchars($appt['service_required']) ?></span>
                        </td>
                        <td class="py-3">
                            <?php if($appt['status'] == 'Pending'): ?>
                                <span class="badge bg-warning bg-opacity-10 text-warning px-3 py-2 rounded-pill">Pending</span>
                            <?php elseif($appt['status'] == 'Completed'): ?>
                                <span class="badge bg-success bg-opacity-10 text-success px-3 py-2 rounded-pill">Completed</span>
                            <?php else: ?>
                                <span class="badge bg-danger bg-opacity-10 text-danger px-3 py-2 rounded-pill">Cancelled</span>
                            <?php endif; ?>
                        </td>
                        <td class="pe-4 py-3 text-end text-muted small">
                            <?= date('M d, Y', strtotime($appt['created_at'])) ?>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                    <?php if(empty($recent_appointments)): ?>
                    <tr>
                        <td colspan="4" class="text-center py-5 text-muted">No appointments found.</td>
                    </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>
    
</div>

</body>
</html>
