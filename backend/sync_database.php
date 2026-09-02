<?php
/**
 * DM Healthcare Database Migration / Sync Script
 * Applies latest navigation items, categories, and removes obsolete services.
 */

require_once __DIR__ . '/../config/db.php';

echo "<pre>\n";
echo "=================================================\n";
echo "DM HEALTHCARE DATABASE SYNCHRONIZATION\n";
echo "=================================================\n\n";

try {
    // 1. Remove obsolete categories (e.g. NRI Care Services: category id 5)
    $stmt = $conn->prepare("DELETE FROM nav_categories WHERE id = 5 OR name LIKE '%NRI%'");
    $stmt->execute();
    echo "[✓] Removed NRI Care Services category (ID: 5)\n";

    // 2. Remove obsolete nav items
    $remove_titles = [
        'HOLTER TEST AT HOME',
        'QUALIFIED NURSE',
        'ICU SETUP AT HOME',
        'RESPIRATORY EQUIPMENT',
        'OTHER EQUIPMENT',
        'BULK EQUIPMENT ORDER',
        'DIALYSIS AT HOME',
        'NRI FAMILY CARE',
        'ELDER BIRTHDAY / ANNIVERSARY CELEBRATION'
    ];
    $remove_links = [
        'holter-test-at-home',
        'HOLTER+TEST+AT+HOME',
        'qualified-nurse',
        'icu-setup-at-home',
        'ICU+SETUP+AT+HOME',
        'respiratory-equipment',
        'RESPIRATORY+EQUIPMENT',
        'other-equipment',
        'OTHER+EQUIPMENT',
        'bulk-equipment-order',
        'BULK+EQUIPMENT+ORDER',
        'dialysis-at-home',
        'DIALYSIS+AT+HOME',
        'nri-family-care',
        'NRI+FAMILY+CARE'
    ];

    $in_titles = "'" . implode("','", $remove_titles) . "'";
    $in_links = "'" . implode("','", $remove_links) . "'";
    $conn->exec("DELETE FROM nav_items WHERE title IN ($in_titles) OR link IN ($in_links) OR category_id = 5");
    echo "[✓] Removed obsolete nav items (Holter, Nurse, ICU Setup, Respiratory Eq, Other Eq, Bulk Eq, Dialysis, NRI)\n";

    // 3. Ensure 'Home' category exists with order 1
    $home_cat = $conn->query("SELECT id FROM nav_categories WHERE id = 13 OR name = 'Home'")->fetch(PDO::FETCH_ASSOC);
    if (!$home_cat) {
        $conn->exec("INSERT INTO nav_categories (id, name, display_order) VALUES (13, 'Home', 1)");
        $home_cat_id = 13;
    } else {
        $home_cat_id = $home_cat['id'];
        $conn->exec("UPDATE nav_categories SET name = 'Home', display_order = 1 WHERE id = $home_cat_id");
    }
    echo "[✓] Ensured 'Home' category exists (ID: $home_cat_id)\n";

    // 4. Update / Insert 'Services - Delhi & NCR' under Home category
    $home_item = $conn->query("SELECT id FROM nav_items WHERE category_id = $home_cat_id AND (link = 'services-delhi-ncr' OR title LIKE '%Delhi%')")->fetch(PDO::FETCH_ASSOC);
    if ($home_item) {
        $conn->exec("UPDATE nav_items SET title = 'Services - Delhi & NCR', link = 'services-delhi-ncr', display_order = 1, short_description = 'Comprehensive hospital-grade healthcare services delivered across Delhi NCR.' WHERE id = {$home_item['id']}");
        echo "[✓] Updated 'Services - Delhi & NCR' under Home category\n";
    } else {
        $stmt = $conn->prepare("INSERT INTO nav_items (category_id, title, link, display_order, short_description, seo_title, seo_description) VALUES (:cat, :title, :link, 1, :desc, :seo_t, :seo_d)");
        $stmt->execute([
            'cat' => $home_cat_id,
            'title' => 'Services - Delhi & NCR',
            'link' => 'services-delhi-ncr',
            'desc' => 'Comprehensive hospital-grade healthcare services delivered across Delhi NCR.',
            'seo_t' => 'Healthcare Services in Delhi & NCR - DM Healthcare',
            'seo_d' => 'Professional doorstep healthcare services across Faridabad, Noida, and Delhi NCR.'
        ]);
        echo "[✓] Inserted 'Services - Delhi & NCR' under Home category\n";
    }

    // 5. Ensure Diagnostics items are properly set (ECG, Sleep Test, Preventive Lab Tests, Preventive Healthcare Packages)
    $diag_cat = $conn->query("SELECT id FROM nav_categories WHERE id = 4 OR name = 'Diagnostics'")->fetch(PDO::FETCH_ASSOC);
    if ($diag_cat) {
        $diag_id = $diag_cat['id'];
        
        // Clean up any other duplicates in Diagnostics
        $conn->exec("DELETE FROM nav_items WHERE category_id = $diag_id AND link IN ('holter-test-at-home', 'HOLTER+TEST+AT+HOME', 'dialysis-at-home', 'DIALYSIS+AT+HOME')");

        // Verify Preventive Lab Tests
        $chk_lab = $conn->query("SELECT id FROM nav_items WHERE category_id = $diag_id AND (link = 'preventive-lab-tests' OR title LIKE '%PREVENTIVE LAB%')")->fetch(PDO::FETCH_ASSOC);
        if (!$chk_lab) {
            $conn->exec("INSERT INTO nav_items (category_id, title, link, display_order) VALUES ($diag_id, 'PREVENTIVE LAB TESTS', 'preventive-lab-tests', 3)");
        } else {
            $conn->exec("UPDATE nav_items SET title = 'PREVENTIVE LAB TESTS', link = 'preventive-lab-tests', display_order = 3 WHERE id = {$chk_lab['id']}");
        }

        // Verify Preventive Healthcare Packages
        $chk_pkg = $conn->query("SELECT id FROM nav_items WHERE category_id = $diag_id AND (link = 'preventive-healthcare-packages' OR title LIKE '%PREVENTIVE HEALTHCARE%')")->fetch(PDO::FETCH_ASSOC);
        if (!$chk_pkg) {
            $conn->exec("INSERT INTO nav_items (category_id, title, link, display_order) VALUES ($diag_id, 'PREVENTIVE HEALTHCARE PACKAGES', 'preventive-healthcare-packages', 4)");
        } else {
            $conn->exec("UPDATE nav_items SET title = 'PREVENTIVE HEALTHCARE PACKAGES', link = 'preventive-healthcare-packages', display_order = 4 WHERE id = {$chk_pkg['id']}");
        }
        echo "[✓] Verified Diagnostics items (Preventive Lab Tests & Preventive Healthcare Packages)\n";
    }

    echo "\n=================================================\n";
    echo "DATABASE SYNCHRONIZATION COMPLETED SUCCESSFULLY!\n";
    echo "=================================================\n";

} catch (Exception $e) {
    echo "[!] Error during sync: " . $e->getMessage() . "\n";
}
echo "</pre>";
