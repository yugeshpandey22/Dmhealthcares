<?php
if (!isset($_SESSION)) {
    session_start();
}
require_once '../config/db.php';

// Fetch counts for badges
$pending_count = 0;
$jobs_count = 0;
try {
    $pending_count = (int)$conn->query("SELECT COUNT(*) FROM appointments WHERE status = 'Pending'")->fetchColumn();
    $jobs_count = (int)$conn->query("SELECT COUNT(*) FROM job_applications WHERE status = 'Pending'")->fetchColumn();
    $sidebar_categories = $conn->query("SELECT * FROM nav_categories ORDER BY display_order ASC")->fetchAll(PDO::FETCH_ASSOC);
} catch (Exception $e) {
    $sidebar_categories = [];
}
$current_page = basename($_SERVER['PHP_SELF']);
$current_cat_id = isset($_GET['cat_id']) ? (int)$_GET['cat_id'] : null;
?>

<!-- Modern Admin Sidebar -->
<aside class="admin-sidebar" id="adminSidebar">
    <!-- Brand Logo Area -->
    <div class="sidebar-brand d-flex align-items-center justify-content-between">
        <a href="index.php" class="d-flex align-items-center text-decoration-none">
            <div class="brand-icon-box me-3">
                <i class="fa-solid fa-heart-pulse text-white"></i>
            </div>
            <div>
                <h5 class="brand-title mb-0">DM Healthcare</h5>
                <span class="brand-subtitle">Control Center</span>
            </div>
        </a>
    </div>

    <!-- Navigation Menu -->
    <div class="sidebar-nav-container">
        <div class="nav-section-label">MAIN DASHBOARD</div>
        <ul class="nav flex-column sidebar-nav">
            <li class="nav-item">
                <a class="nav-link <?= ($current_page == 'index.php') ? 'active' : '' ?>" href="index.php">
                    <div class="nav-icon"><i class="fa-solid fa-chart-pie"></i></div>
                    <span class="nav-text">Dashboard</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?= ($current_page == 'appointments.php') ? 'active' : '' ?>" href="appointments.php">
                    <div class="nav-icon"><i class="fa-solid fa-calendar-check"></i></div>
                    <span class="nav-text">Appointments</span>
                    <?php if ($pending_count > 0): ?>
                        <span class="badge bg-danger rounded-pill ms-auto"><?= $pending_count ?></span>
                    <?php endif; ?>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?= ($current_page == 'job_applications.php') ? 'active' : '' ?>" href="job_applications.php">
                    <div class="nav-icon"><i class="fa-solid fa-user-doctor"></i></div>
                    <span class="nav-text">Job Applications</span>
                    <?php if ($jobs_count > 0): ?>
                        <span class="badge bg-warning text-dark rounded-pill ms-auto"><?= $jobs_count ?></span>
                    <?php endif; ?>
                </a>
            </li>
        </ul>

        <div class="nav-section-label mt-4">PAGES & CATEGORIES</div>
        <ul class="nav flex-column sidebar-nav">
            <?php foreach ($sidebar_categories as $cat): ?>
                <?php $is_active = ($current_page == 'navbar_manager.php' && $current_cat_id == $cat['id']); ?>
                <li class="nav-item">
                    <a class="nav-link <?= $is_active ? 'active' : '' ?>" href="navbar_manager.php?cat_id=<?= $cat['id'] ?>">
                        <div class="nav-icon"><i class="fa-regular fa-folder-open"></i></div>
                        <span class="nav-text"><?= htmlspecialchars($cat['name']) ?></span>
                    </a>
                </li>
            <?php endforeach; ?>
            <li class="nav-item">
                <a class="nav-link <?= ($current_page == 'navbar_manager.php' && !$current_cat_id) ? 'active' : '' ?>" href="navbar_manager.php">
                    <div class="nav-icon"><i class="fa-solid fa-sliders"></i></div>
                    <span class="nav-text">Manage Categories</span>
                </a>
            </li>
        </ul>
    </div>

    <!-- User Profile & Quick Actions at Bottom -->
    <div class="sidebar-footer">
        <div class="user-card d-flex align-items-center mb-3">
            <div class="user-avatar">
                <i class="fa-solid fa-user-shield"></i>
            </div>
            <div class="user-info ms-3 overflow-hidden">
                <div class="user-name text-truncate"><?= htmlspecialchars($_SESSION['admin_user'] ?? 'Administrator') ?></div>
                <div class="user-role">Super Admin</div>
            </div>
        </div>
        <div class="d-flex gap-2">
            <a href="../index.php" target="_blank" class="btn btn-outline-light btn-sm flex-grow-1 rounded-pill" title="View Live Website">
                <i class="fa-solid fa-arrow-up-right-from-square me-1"></i> Live Site
            </a>
            <a href="logout.php" class="btn btn-danger btn-sm rounded-circle d-flex align-items-center justify-content-center" style="width: 32px; height: 32px;" title="Logout">
                <i class="fa-solid fa-power-off"></i>
            </a>
        </div>
    </div>
</aside>

<style>
/* Modern Admin Sidebar Styles */
.admin-sidebar {
    width: 270px;
    height: 100vh;
    position: fixed;
    top: 0;
    left: 0;
    background: #0f172a;
    border-right: 1px solid rgba(255, 255, 255, 0.06);
    display: flex;
    flex-direction: column;
    z-index: 1050;
    transition: all 0.3s ease;
    box-shadow: 4px 0 25px rgba(0, 0, 0, 0.15);
}

.sidebar-brand {
    padding: 1.5rem 1.4rem;
    border-bottom: 1px solid rgba(255, 255, 255, 0.07);
}

.brand-icon-box {
    width: 42px;
    height: 42px;
    background: linear-gradient(135deg, #E5252A 0%, #B91C1C 100%);
    border-radius: 12px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1.2rem;
    box-shadow: 0 4px 12px rgba(229, 37, 42, 0.35);
}

.brand-title {
    color: #ffffff;
    font-weight: 700;
    font-size: 1.05rem;
    letter-spacing: -0.3px;
}

.brand-subtitle {
    color: #94a3b8;
    font-size: 0.72rem;
    text-transform: uppercase;
    letter-spacing: 1px;
    font-weight: 600;
}

.sidebar-nav-container {
    flex-grow: 1;
    overflow-y: auto;
    padding: 1.2rem 1rem;
    scrollbar-width: thin;
    scrollbar-color: rgba(255, 255, 255, 0.1) transparent;
}

.nav-section-label {
    font-size: 0.68rem;
    font-weight: 700;
    color: #64748b;
    letter-spacing: 1.2px;
    padding: 0 0.8rem;
    margin-bottom: 0.6rem;
}

.sidebar-nav .nav-item {
    margin-bottom: 4px;
}

.sidebar-nav .nav-link {
    color: #94a3b8;
    padding: 0.7rem 0.9rem;
    border-radius: 10px;
    font-weight: 500;
    font-size: 0.92rem;
    display: flex;
    align-items: center;
    transition: all 0.2s ease;
    border: 1px solid transparent;
}

.sidebar-nav .nav-icon {
    width: 32px;
    font-size: 1.05rem;
    display: flex;
    align-items: center;
}

.sidebar-nav .nav-text {
    flex-grow: 1;
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
}

.sidebar-nav .nav-link:hover {
    color: #ffffff;
    background: rgba(255, 255, 255, 0.05);
    transform: translateX(3px);
}

.sidebar-nav .nav-link.active {
    color: #ffffff;
    background: linear-gradient(90deg, rgba(229, 37, 42, 0.15) 0%, rgba(229, 37, 42, 0.05) 100%);
    border-left: 3px solid #E5252A;
    font-weight: 600;
}

.sidebar-nav .nav-link.active .nav-icon {
    color: #E5252A;
}

.sidebar-footer {
    padding: 1.2rem 1.2rem;
    border-top: 1px solid rgba(255, 255, 255, 0.07);
    background: #090e1a;
}

.user-card {
    background: rgba(255, 255, 255, 0.04);
    padding: 0.6rem 0.8rem;
    border-radius: 12px;
    border: 1px solid rgba(255, 255, 255, 0.05);
}

.user-avatar {
    width: 36px;
    height: 36px;
    border-radius: 10px;
    background: rgba(229, 37, 42, 0.15);
    color: #E5252A;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1rem;
}

.user-name {
    color: #f8fafc;
    font-weight: 600;
    font-size: 0.88rem;
}

.user-role {
    color: #64748b;
    font-size: 0.72rem;
    text-transform: uppercase;
    font-weight: 600;
}
</style>
