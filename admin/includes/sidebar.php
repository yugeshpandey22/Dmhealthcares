<div class="sidebar p-4 vh-100 d-flex flex-column" style="width: 260px; position: fixed; background: #0f172a; box-shadow: 4px 0 20px rgba(0,0,0,0.1); z-index: 100;">
    <div class="d-flex align-items-center gap-3 mb-5 mt-2">
        <div class="bg-primary rounded-circle d-flex align-items-center justify-content-center" style="width: 40px; height: 40px;">
            <i class="fa-solid fa-hospital text-white"></i>
        </div>
        <h4 class="fw-bold mb-0 text-white" style="letter-spacing: -0.5px;">DM Admin</h4>
    </div>
    
    <p class="small fw-bold text-uppercase tracking-wider mb-3" style="color: #64748b;">Menu</p>
    
    <div class="sidebar-nav-scroll" style="flex-grow: 1; overflow-y: auto; overflow-x: hidden; margin-right: -10px; padding-right: 10px;">
        <ul class="nav flex-column gap-2">
            <li class="nav-item">
                <a class="nav-link rounded-3 px-3 py-2 fw-semibold d-flex align-items-center gap-3 transition <?= basename($_SERVER['PHP_SELF']) == 'index.php' ? 'active-link' : 'inactive-link' ?>" href="index.php">
                    <i class="fa-solid fa-gauge"></i> Dashboard
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link rounded-3 px-3 py-2 fw-semibold d-flex align-items-center gap-3 transition <?= basename($_SERVER['PHP_SELF']) == 'appointments.php' ? 'active-link' : 'inactive-link' ?>" href="appointments.php">
                    <i class="fa-solid fa-calendar-check"></i> Appointments
                </a>
            </li>
            
            <!-- Dynamic Categories from Database -->
            <?php
                require_once '../config/db.php';
                $sidebar_categories = $conn->query("SELECT * FROM nav_categories ORDER BY display_order ASC")->fetchAll(PDO::FETCH_ASSOC);
                foreach($sidebar_categories as $cat):
                    // We'll pass the category ID as a URL parameter to navbar_manager.php
                    $is_active = (basename($_SERVER['PHP_SELF']) == 'navbar_manager.php' && isset($_GET['cat_id']) && $_GET['cat_id'] == $cat['id']) ? 'active-link' : 'inactive-link';
            ?>
            <li class="nav-item">
                <a class="nav-link rounded-3 px-3 py-2 fw-semibold d-flex align-items-center gap-3 transition <?= $is_active ?>" href="navbar_manager.php?cat_id=<?= $cat['id'] ?>">
                    <i class="fa-solid fa-folder"></i> <?= htmlspecialchars($cat['name']) ?>
                </a>
            </li>
            <?php endforeach; ?>
            
            <li class="nav-item mt-2">
                <a class="nav-link rounded-3 px-3 py-2 fw-semibold d-flex align-items-center gap-3 transition <?= basename($_SERVER['PHP_SELF']) == 'navbar_manager.php' && !isset($_GET['cat_id']) ? 'active-link' : 'inactive-link' ?>" href="navbar_manager.php">
                    <i class="fa-solid fa-gear"></i> Category Settings
                </a>
            </li>
        </ul>
    </div>
    
    <div class="mt-auto">
        <hr style="border-color: #334155;">
        <div class="d-flex flex-column gap-2">
            <a class="nav-link rounded-3 px-3 py-2 fw-semibold d-flex align-items-center gap-3 transition view-site-btn" href="../index.php" target="_blank">
                <i class="fa-solid fa-globe"></i> View Website
            </a>
            <a class="nav-link text-danger rounded-3 px-3 py-2 fw-semibold d-flex align-items-center gap-3 hover-danger transition" href="logout.php">
                <i class="fa-solid fa-right-from-bracket"></i> Logout
            </a>
        </div>
    </div>
</div>

<style>
    .transition { transition: all 0.3s ease; }
    .active-link { background: rgba(10, 91, 255, 0.15); color: #60a5fa !important; border-left: 3px solid #3b82f6; }
    .inactive-link { color: #94a3b8 !important; }
    .inactive-link:hover { background: rgba(255, 255, 255, 0.05); color: #f8fafc !important; }
    .hover-danger:hover { background: rgba(239, 68, 68, 0.15); color: #ef4444 !important; }
    .view-site-btn { background: rgba(14, 165, 233, 0.1); color: #38bdf8 !important; border: 1px solid rgba(14, 165, 233, 0.2); }
    .view-site-btn:hover { background: rgba(14, 165, 233, 0.2); color: #bae6fd !important; }
</style>
