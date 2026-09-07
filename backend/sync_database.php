<?php
/**
 * DM Healthcare Database Auto-Sync Script
 * Automatically syncs navigation categories and navigation items from code / latest data
 */

require_once __DIR__ . '/../config/db.php';

header('Content-Type: text/html; charset=utf-8');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Database Synchronization - DM Healthcare</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <style>
        body { background-color: #f4f6f9; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; }
        .sync-card { max-width: 700px; margin: 40px auto; border-radius: 16px; border: none; box-shadow: 0 10px 30px rgba(0,0,0,0.08); }
        .log-box { background: #1e293b; color: #38bdf8; font-family: 'Courier New', monospace; font-size: 13px; border-radius: 8px; padding: 15px; max-height: 400px; overflow-y: auto; }
        .log-box .text-success { color: #4ade80 !important; }
        .log-box .text-danger { color: #f87171 !important; }
    </style>
</head>
<body>
<div class="container py-4">
    <div class="card sync-card bg-white p-4 p-md-5">
        <div class="text-center mb-4">
            <h3 class="fw-bold text-dark mb-1"><i class="fa-solid fa-arrows-rotate text-primary me-2"></i>DM Healthcare Database Sync</h3>
            <p class="text-muted small">Live server & local database synchronization utility</p>
        </div>

        <div class="log-box mb-4">
<?php
try {
    echo "<div>[1/4] Connecting to Database... <span class='text-success'>CONNECTED</span></div>";

    // Categories definition
    $categories = [
        ['id' => 13, 'name' => 'Home', 'display_order' => 1],
        ['id' => 4,  'name' => 'Diagnostics', 'display_order' => 2],
        ['id' => 3,  'name' => 'Medical Equipment', 'display_order' => 3],
        ['id' => 2,  'name' => 'Home Care', 'display_order' => 4],
        ['id' => 7,  'name' => 'Job', 'display_order' => 5],
        ['id' => 8,  'name' => 'Blood Checkup', 'display_order' => 6],
        ['id' => 6,  'name' => 'Specialized Care', 'display_order' => 7],
    ];

    // 1. Sync Categories
    $cat_stmt = $conn->prepare("INSERT INTO nav_categories (id, name, display_order) VALUES (:id, :name, :order) ON DUPLICATE KEY UPDATE name = VALUES(name), display_order = VALUES(display_order)");
    foreach ($categories as $cat) {
        $cat_stmt->execute(['id' => $cat['id'], 'name' => $cat['name'], 'order' => $cat['display_order']]);
    }
    echo "<div>[2/4] Categories Synced: <span class='text-success'>" . count($categories) . " categories active</span></div>";

    // Nav Items definition
    $nav_items = [
        // Home
        ['id' => 62, 'cat_id' => 13, 'title' => 'Delhi ncr', 'link' => 'delhi-ncr', 'order' => 0],
        
        // Home Care
        ['id' => 15, 'cat_id' => 2, 'title' => 'ELDER CARE - BASIC CARE', 'link' => 'elder-care---basic-care', 'order' => 10],
        ['id' => 16, 'cat_id' => 2, 'title' => 'PATIENT CARE - GENERAL NURSING', 'link' => 'patient-care---general-nursing', 'order' => 11],
        ['id' => 17, 'cat_id' => 2, 'title' => 'ICU CARE - CRITICAL CARE', 'link' => 'icu-care---critical-care', 'order' => 12],
        ['id' => 18, 'cat_id' => 2, 'title' => 'LIVE-IN CARE - 24 HOURS CARE', 'link' => 'live-in-care---24-hours-care', 'order' => 13],
        ['id' => 19, 'cat_id' => 2, 'title' => 'PALLIATIVE CARE', 'link' => 'palliative-care', 'order' => 14],
        ['id' => 20, 'cat_id' => 2, 'title' => 'ASSISTED LIVING FACILITY', 'link' => 'assisted-living-facility', 'order' => 15],
        ['id' => 21, 'cat_id' => 2, 'title' => 'STAIRCASE MOBILITY ASSISTANCE', 'link' => 'staircase-mobility-assistance', 'order' => 16],
        ['id' => 22, 'cat_id' => 2, 'title' => 'ELDERLY CARETAKER', 'link' => 'elderly-caretaker', 'order' => 17],
        ['id' => 23, 'cat_id' => 2, 'title' => 'PATIENT ATTENDANT SERVICES', 'link' => 'patient-attendant', 'order' => 18],
        ['id' => 24, 'cat_id' => 2, 'title' => 'QUALIFIED NURSE', 'link' => 'qualified-nurse', 'order' => 19],
        ['id' => 25, 'cat_id' => 2, 'title' => 'PHYSICIAN / DOCTOR', 'link' => 'physician-doctor', 'order' => 20],
        ['id' => 26, 'cat_id' => 2, 'title' => 'PHYSIOTHERAPIST', 'link' => 'physiotherapist', 'order' => 21],
        ['id' => 63, 'cat_id' => 2, 'title' => 'ATTENDANT PROVIDING', 'link' => 'attendant-providing', 'order' => 0],
        ['id' => 64, 'cat_id' => 2, 'title' => 'GDA PROVIDING', 'link' => 'gda-providing', 'order' => 0],
        ['id' => 65, 'cat_id' => 2, 'title' => 'GENERAL DUTY ASSISTANT (GDA)', 'link' => 'general-duty-assistant-gda', 'order' => 0],
        
        // Medical Equipment
        ['id' => 27, 'cat_id' => 3, 'title' => 'HOSPITAL BED', 'link' => 'hospital-bed', 'order' => 0],
        ['id' => 28, 'cat_id' => 3, 'title' => 'WHEELCHAIRS', 'link' => 'wheelchairs', 'order' => 0],
        ['id' => 29, 'cat_id' => 3, 'title' => 'NEO BOLT SCOOTER', 'link' => 'neo-bolt-scooter', 'order' => 0],
        ['id' => 30, 'cat_id' => 3, 'title' => 'OXYGEN CONCENTRATOR', 'link' => 'oxygen-concentrator', 'order' => 0],
        ['id' => 31, 'cat_id' => 3, 'title' => 'OXYGEN CYLINDER', 'link' => 'oxygen-cylinder', 'order' => 0],
        ['id' => 32, 'cat_id' => 3, 'title' => 'BIPAP / CPAP', 'link' => 'bipap-cpap', 'order' => 0],
        ['id' => 37, 'cat_id' => 3, 'title' => 'ACCESSORIES', 'link' => 'accessories', 'order' => 0],
        ['id' => 39, 'cat_id' => 3, 'title' => 'E-STORE', 'link' => 'e-store', 'order' => 0],

        // Diagnostics
        ['id' => 44, 'cat_id' => 4, 'title' => 'PREVENTIVE LAB TESTS', 'link' => 'preventive-lab-tests', 'order' => 0],
        ['id' => 45, 'cat_id' => 4, 'title' => 'PREVENTIVE HEALTHCARE PACKAGES', 'link' => 'preventive-healthcare-packages', 'order' => 0],

        // Job
        ['id' => 49, 'cat_id' => 7, 'title' => 'JOBS/CAREER', 'link' => 'jobs-career', 'order' => 0],

        // Blood Checkup
        ['id' => 54, 'cat_id' => 8, 'title' => 'Total Test', 'link' => 'total-test', 'order' => 0]
    ];

    // Remove obsolete items
    $conn->exec("DELETE FROM nav_categories WHERE id = 5 OR name LIKE '%NRI%'");
    $conn->exec("DELETE FROM nav_items WHERE link IN ('holter-test-at-home', 'HOLTER+TEST+AT+HOME', 'dialysis-at-home', 'DIALYSIS+AT+HOME', 'nri-family-care')");
    $conn->exec("DELETE FROM nav_items WHERE category_id = 13 AND id != 62");

    $item_stmt = $conn->prepare("INSERT INTO nav_items (id, category_id, title, link, display_order) VALUES (:id, :cat_id, :title, :link, :order) ON DUPLICATE KEY UPDATE category_id = VALUES(category_id), title = VALUES(title), link = VALUES(link), display_order = VALUES(display_order)");

    foreach ($nav_items as $item) {
        $item_stmt->execute([
            'id' => $item['id'],
            'cat_id' => $item['cat_id'],
            'title' => $item['title'],
            'link' => $item['link'],
            'order' => $item['order']
        ]);
    }
    echo "<div>[3/4] Nav Items Synced: <span class='text-success'>" . count($nav_items) . " items synced successfully</span></div>";

    echo "<div>[4/4] Finalizing status: <span class='text-success'>ALL SYNCS COMPLETED!</span></div>";

} catch (Exception $e) {
    echo "<div class='text-danger'>[!] ERROR: " . htmlspecialchars($e->getMessage()) . "</div>";
}
?>
        </div>

        <div class="text-center">
            <a href="../index.php" class="btn btn-primary rounded-pill px-4 fw-bold me-2"><i class="fa-solid fa-house me-1"></i> Visit Website</a>
            <a href="../admin/navbar_manager.php" class="btn btn-outline-dark rounded-pill px-4 fw-bold"><i class="fa-solid fa-sliders me-1"></i> Open Navbar Manager</a>
        </div>
    </div>
</div>
</body>
</html>
