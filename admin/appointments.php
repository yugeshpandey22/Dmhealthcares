<?php
session_start();
require_once '../config/db.php';

if(!isset($_SESSION['admin_id'])) {
    header("Location: login.php");
    exit();
}

// Handle status update
if(isset($_POST['update_status'])) {
    $id = (int)$_POST['appointment_id'];
    $status = $_POST['status'];
    $stmt = $conn->prepare("UPDATE appointments SET status = ? WHERE id = ?");
    $stmt->execute([$status, $id]);
}

// Handle delete
if(isset($_POST['delete_appointment'])) {
    $id = (int)$_POST['appointment_id'];
    $stmt = $conn->prepare("DELETE FROM appointments WHERE id = ?");
    $stmt->execute([$id]);
}

$stmt = $conn->query("SELECT * FROM appointments ORDER BY created_at DESC");
$appointments = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Appointments - Admin</title>
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root {
            --primary-color: #E5252A;
            --primary-hover: #C8102E;
        }
        body { 
            font-family: 'Outfit', sans-serif;
            background: #f8fafd; 
            overflow-x: hidden; 
            margin: 0;
        }
        .main-content { 
            margin-left: 270px; 
            padding: 2rem 2.5rem; 
        }
        @media (max-width: 991px) {
            .main-content { margin-left: 0; padding: 1.2rem; }
        }
        .card { 
            border: none; 
            border-radius: 16px; 
            box-shadow: 0 4px 20px rgba(0,0,0,0.04); 
            background: #ffffff;
        }
        .btn-primary {
            background-color: var(--primary-color) !important;
            border-color: var(--primary-color) !important;
        }
        .btn-primary:hover {
            background-color: var(--primary-hover) !important;
            border-color: var(--primary-hover) !important;
        }
        .table > :not(caption) > * > * {
            padding: 1rem 0.9rem;
            vertical-align: middle;
        }
    </style>
</head>
<body>

<?php include 'includes/sidebar.php'; ?>

<div class="main-content">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h2 class="fw-bold mb-1" style="color: #1a2b4c;">Appointments</h2>
            <p class="text-muted small mb-0">Total <?= count($appointments) ?> appointment inquiries received</p>
        </div>
        <a href="appointments.php" class="btn btn-sm btn-outline-secondary rounded-pill px-3">
            <i class="fa-solid fa-rotate-right me-1"></i> Refresh
        </a>
    </div>
    
    <div class="card p-4">
        <div class="table-responsive">
            <table class="table table-hover align-middle mb-0">
                <thead class="table-light">
                    <tr>
                        <th style="width: 60px;">ID</th>
                        <th>Patient Details</th>
                        <th>Service</th>
                        <th>Date & Message</th>
                        <th>Status</th>
                        <th>Quick Contact</th>
                        <th class="text-end">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if(!empty($appointments)): ?>
                        <?php foreach($appointments as $appt): ?>
                            <?php
                            $phone_clean = preg_replace('/[^0-9]/', '', $appt['phone_number']);
                            $wa_msg = urlencode("Hello " . $appt['full_name'] . ", this is from DM Healthcare regarding your appointment for " . $appt['service_required'] . ".");
                            ?>
                        <tr>
                            <td class="fw-bold text-muted">#<?= $appt['id'] ?></td>
                            <td>
                                <div class="fw-bold text-dark fs-6"><?= htmlspecialchars($appt['full_name']) ?></div>
                                <div class="text-muted small"><i class="fa-solid fa-phone me-1"></i> <?= htmlspecialchars($appt['phone_number']) ?></div>
                                <?php if(!empty($appt['email'])): ?>
                                    <div class="text-muted small"><i class="fa-regular fa-envelope me-1"></i> <?= htmlspecialchars($appt['email']) ?></div>
                                <?php endif; ?>
                            </td>
                            <td>
                                <span class="badge bg-secondary px-2 py-1"><?= htmlspecialchars($appt['service_required']) ?></span>
                            </td>
                            <td style="max-width: 280px;">
                                <?php if(!empty($appt['pref_date']) && $appt['pref_date'] != '0000-00-00'): ?>
                                    <div class="fw-semibold text-primary small mb-1">
                                        <i class="fa-regular fa-calendar me-1"></i> <?= htmlspecialchars($appt['pref_date']) ?> <?= htmlspecialchars($appt['pref_time'] ?? '') ?>
                                    </div>
                                <?php endif; ?>
                                <?php if(!empty($appt['message'])): ?>
                                    <div class="p-2 rounded bg-light border text-muted small" style="max-height: 60px; overflow-y: auto; font-size: 0.8rem; word-break: break-word;">
                                        <?= nl2br(htmlspecialchars($appt['message'])) ?>
                                    </div>
                                <?php endif; ?>
                                <small class="text-muted d-block mt-1" style="font-size: 11px;">
                                    Booked: <?= date('d M Y, h:i A', strtotime($appt['created_at'])) ?>
                                </small>
                            </td>
                            <td>
                                <?php if($appt['status'] == 'Pending'): ?>
                                    <span class="badge bg-warning text-dark px-3 py-2 rounded-pill">Pending</span>
                                <?php elseif($appt['status'] == 'Completed'): ?>
                                    <span class="badge bg-success px-3 py-2 rounded-pill">Completed</span>
                                <?php else: ?>
                                    <span class="badge bg-danger px-3 py-2 rounded-pill">Cancelled</span>
                                <?php endif; ?>
                            </td>
                            <td>
                                <div class="d-flex gap-1">
                                    <a href="tel:<?= htmlspecialchars($appt['phone_number']) ?>" class="btn btn-outline-danger btn-sm rounded-pill px-2 py-1" style="font-size: 0.8rem;" title="Call">
                                        <i class="fa-solid fa-phone"></i> Call
                                    </a>
                                    <a href="https://wa.me/91<?= $phone_clean ?>?text=<?= $wa_msg ?>" target="_blank" class="btn btn-outline-success btn-sm rounded-pill px-2 py-1" style="font-size: 0.8rem;" title="WhatsApp">
                                        <i class="fa-brands fa-whatsapp"></i> Chat
                                    </a>
                                </div>
                            </td>
                            <td class="text-end">
                                <form method="POST" action="" class="d-inline-flex gap-2 align-items-center justify-content-end m-0">
                                    <input type="hidden" name="appointment_id" value="<?= $appt['id'] ?>">
                                    <select name="status" class="form-select form-select-sm" style="width: 105px; font-size: 0.85rem;">
                                        <option value="Pending" <?= $appt['status'] == 'Pending' ? 'selected' : '' ?>>Pending</option>
                                        <option value="Completed" <?= $appt['status'] == 'Completed' ? 'selected' : '' ?>>Completed</option>
                                        <option value="Cancelled" <?= $appt['status'] == 'Cancelled' ? 'selected' : '' ?>>Cancelled</option>
                                    </select>
                                    <button type="submit" name="update_status" class="btn btn-primary btn-sm px-2">Update</button>
                                    <button type="submit" name="delete_appointment" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete appointment #<?= $appt['id'] ?>?');" title="Delete Appointment">
                                        <i class="fa-solid fa-trash"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <tr>
                            <td colspan="7" class="text-center py-5 text-muted">
                                <i class="fa-solid fa-calendar-xmark fa-2x mb-2 d-block opacity-50"></i>
                                No appointments found in database.
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
