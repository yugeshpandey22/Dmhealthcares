<?php
// 100% foolproof check for this specific local Windows machine
$is_localhost = file_exists('C:\xampp\htdocs\DmHealthcare');



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
