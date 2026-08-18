<?php
// 100% foolproof check for this specific local Windows machine
$is_localhost = file_exists('C:\xampp\htdocs\DmHealthcare');



// Bulletproof dynamic BASE_URL detection
$root_dir_normalized = str_replace('\\', '/', __DIR__);
$doc_root_normalized = str_replace('\\', '/', $_SERVER['DOCUMENT_ROOT']);
$app_dir = dirname($root_dir_normalized);
$web_path = str_replace($doc_root_normalized, '', $app_dir);
if (empty($web_path) || $web_path == '/') {
    define('BASE_URL', '/');
} else {
    define('BASE_URL', $web_path . '/');
}

if ($is_localhost) {
    // Local XAMPP database credentials
    $host = "localhost";
    $username = "root";
    $password = "";
    $dbname = "dm_healthcare"; // Updated local database name
} else {
    // Live database credentials
    $host = "localhost";
    $username = "dmhealth1_healthcare";
    $password = "Admin@123";
    $dbname = "dmhealth1_dm_healthcare";
}

try {
    $conn = new PDO(
        "mysql:host=$host;dbname=$dbname;charset=utf8mb4",
        $username,
        $password
    );

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    die("Database Connection failed: " . $e->getMessage());
}
