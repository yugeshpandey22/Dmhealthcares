<?php
namespace App\Models;

class Appointment {
    private $conn;

    public function __construct($db) {
        $this->conn = $db;
    }

    public function create($full_name, $phone_number, $email, $service_required, $pref_date, $pref_time, $message) {
        try {
            $stmt = $this->conn->prepare("INSERT INTO appointments (full_name, phone_number, email, service_required, pref_date, pref_time, message) VALUES (?, ?, ?, ?, ?, ?, ?)");
            return $stmt->execute([$full_name, $phone_number, $email, $service_required, $pref_date, $pref_time, $message]);
        } catch(\PDOException $e) {
            error_log("Failed to insert appointment: " . $e->getMessage());
            return false;
        }
    }
}
