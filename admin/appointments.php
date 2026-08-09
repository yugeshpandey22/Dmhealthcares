<?php
session_start();
require_once '../config/db.php';

if(!isset($_SESSION['admin_id'])) {
    header("Location: login.php");
    exit();
}

// Handle status update
if(isset($_POST['update_status'])) {
    $id = $_POST['appointment_id'];
    $status = $_POST['status'];
    $stmt = $conn->prepare("UPDATE appointments SET status = ? WHERE id = ?");
    $stmt->execute([$status, $id]);
}

// Handle delete
if(isset($_POST['delete_appointment'])) {
    $id = $_POST['appointment_id'];
    $stmt = $conn->prepare("DELETE FROM appointments WHERE id = ?");
    $stmt->execute([$id]);
}

$stmt = $conn->query("SELECT * FROM appointments ORDER BY created_at DESC");
$appointments = $stmt->fetchAll();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Appointments - Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        body { background: #f8fafd; overflow-x: hidden; }
        .main-content { margin-left: 250px; padding: 2rem; }
        .card { border: none; border-radius: 15px; box-shadow: 0 4px 15px rgba(0,0,0,0.05); }
    </style>
</head>
<body>

<?php include 'includes/sidebar.php'; ?>

<div class="main-content">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="fw-bold" style="color: #1a2b4c;">Appointments</h2>
    </div>
    
    <div class="card p-4">
        <div class="table-responsive">
            <table class="table table-hover align-middle">
                <thead class="table-light">
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Phone</th>
                        <th>Service</th>
                        <th>Date & Details</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($appointments as $appt): ?>
                    <tr>
                        <td>#<?= $appt['id'] ?></td>
                        <td class="fw-bold"><?= htmlspecialchars($appt['full_name']) ?></td>
                        <td>
                            <div><i class="fa-solid fa-phone me-1 text-muted"></i> <?= htmlspecialchars($appt['phone_number']) ?></div>
                            <?php if(!empty($appt['email'])): ?>
                            <div><i class="fa-regular fa-envelope me-1 text-muted"></i> <?= htmlspecialchars($appt['email']) ?></div>
                            <?php endif; ?>
                        </td>
                        <td><span class="badge bg-secondary"><?= htmlspecialchars($appt['service_required']) ?></span></td>
                        <td>
                            <?php if(!empty($appt['pref_date'])): ?>
                            <div class="fw-semibold text-primary"><i class="fa-regular fa-calendar me-1"></i> <?= htmlspecialchars($appt['pref_date']) ?> <?= htmlspecialchars($appt['pref_time']) ?></div>
                            <?php endif; ?>
                            <?php if(!empty($appt['message'])): ?>
                            <small class="text-muted d-block mt-1"><?= nl2br(htmlspecialchars($appt['message'])) ?></small>
                            <?php endif; ?>
                        </td>
                        <td>
                            <?php if($appt['status'] == 'Pending'): ?>
                                <span class="badge bg-warning text-dark">Pending</span>
                            <?php elseif($appt['status'] == 'Completed'): ?>
                                <span class="badge bg-success">Completed</span>
                            <?php else: ?>
                                <span class="badge bg-danger">Cancelled</span>
                            <?php endif; ?>
                        </td>
                        <td>
                            <form method="POST" action="" class="d-flex gap-2">
                                <input type="hidden" name="appointment_id" value="<?= $appt['id'] ?>">
                                <select name="status" class="form-select form-select-sm" style="width: auto;">
                                    <option value="Pending" <?= $appt['status'] == 'Pending' ? 'selected' : '' ?>>Pending</option>
                                    <option value="Completed" <?= $appt['status'] == 'Completed' ? 'selected' : '' ?>>Completed</option>
                                    <option value="Cancelled" <?= $appt['status'] == 'Cancelled' ? 'selected' : '' ?>>Cancelled</option>
                                </select>
                                <button type="submit" name="update_status" class="btn btn-primary btn-sm">Update</button>
                                <button type="submit" name="delete_appointment" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this appointment? This cannot be undone.');" title="Delete Appointment"><i class="fa-solid fa-trash"></i></button>
                            </form>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <?php if(count($appointments) == 0): ?>
                <p class="text-center text-muted my-4">No appointments found.</p>
            <?php endif; ?>
        </div>
    </div>
</div>

</body>
</html>
