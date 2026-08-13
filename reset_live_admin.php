<?php
require_once 'config/db.php';
$new_password = 'Admin@123';
$hashed = password_hash($new_password, PASSWORD_DEFAULT);
try {
    $stmt = $conn->prepare("UPDATE admin_users SET password = ? WHERE username = 'admin'");
    $stmt->execute([$hashed]);
    echo "Live Password successfully reset to Admin@123. Please delete this file immediately for security.";
} catch (PDOException $e) {
    echo "Error updating password: " . $e->getMessage();
}
