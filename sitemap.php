<?php
header('Content-Type: application/xml; charset=utf-8');

require_once 'config/db.php';

// Initialize XML
echo '<?xml version="1.0" encoding="UTF-8"?>' . PHP_EOL;
echo '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">' . PHP_EOL;

$base_url = 'https://' . $_SERVER['HTTP_HOST'] . '/';

// 1. Add static root files
$static_files = [
    '' => '1.0', // Homepage
    // Add other static top-level pages if any
];

foreach ($static_files as $path => $priority) {
    echo '  <url>' . PHP_EOL;
    echo '    <loc>' . htmlspecialchars($base_url . $path) . '</loc>' . PHP_EOL;
    echo '    <lastmod>' . date('Y-m-d') . '</lastmod>' . PHP_EOL;
    echo '    <priority>' . $priority . '</priority>' . PHP_EOL;
    echo '  </url>' . PHP_EOL;
}

// 2. Fetch pages from database (nav_items)
try {
    $stmt = $conn->query("SELECT title, link FROM nav_items");
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        // Link might be a slug or title
        $slug = !empty($row['link']) ? $row['link'] : strtolower(str_replace(' ', '-', $row['title']));
        
        echo '  <url>' . PHP_EOL;
        // Output clean URL based on your .htaccess setup
        echo '    <loc>' . htmlspecialchars($base_url . ltrim($slug, '/')) . '</loc>' . PHP_EOL;
        echo '    <lastmod>' . date('Y-m-d') . '</lastmod>' . PHP_EOL;
        echo '    <priority>0.8</priority>' . PHP_EOL;
        echo '  </url>' . PHP_EOL;
    }
} catch (Exception $e) {
    // Silently ignore DB errors so sitemap doesn't break completely
}

// 3. Scan physical files in 'pages/' directory
$pages_dir = 'pages/';
if (is_dir($pages_dir)) {
    $files = scandir($pages_dir);
    foreach ($files as $file) {
        if ($file === '.' || $file === '..' || pathinfo($file, PATHINFO_EXTENSION) !== 'php') {
            continue;
        }
        
        $slug = basename($file, '.php');
        
        echo '  <url>' . PHP_EOL;
        echo '    <loc>' . htmlspecialchars($base_url . $slug) . '</loc>' . PHP_EOL;
        echo '    <lastmod>' . date('Y-m-d', filemtime($pages_dir . $file)) . '</lastmod>' . PHP_EOL;
        echo '    <priority>0.6</priority>' . PHP_EOL;
        echo '  </url>' . PHP_EOL;
    }
}

echo '</urlset>';
?>
