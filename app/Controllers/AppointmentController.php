<?php
namespace App\Controllers;

use App\Models\Appointment;

class AppointmentController {
    private $db;

    public function __construct($db) {
        $this->db = $db;
    }

    public function submit() {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Anti-bot honeypot check
            if (!empty($_POST['b_comment_hp'])) {
                // Silently pretend success to fool bots
                $_SESSION['success_msg'] = "Your appointment has been successfully booked!";
                header("Location: ../index.php");
                exit();
            }

            $full_name = htmlspecialchars($_POST['full_name'] ?? '');
            $phone_number = htmlspecialchars($_POST['phone_number'] ?? '');
            $email = filter_var($_POST['email'] ?? '', FILTER_SANITIZE_EMAIL);
            $service_required = htmlspecialchars($_POST['service_required'] ?? '');
            $pref_date = htmlspecialchars($_POST['pref_date'] ?? '');
            $pref_time = htmlspecialchars($_POST['pref_time'] ?? '');
            $message = htmlspecialchars($_POST['message'] ?? '');

            if (!preg_match('/^[6-9][0-9]{9}$/', $phone_number)) {
                $_SESSION['error_msg'] = "Please enter a valid 10-digit Indian phone number starting with 6, 7, 8, or 9.";
                header("Location: ../index.php");
                exit();
            }

            // We no longer combine them into full_message
            $appointmentModel = new Appointment($this->db);
            
            if ($appointmentModel->create($full_name, $phone_number, $email, $service_required, $pref_date, $pref_time, $message)) {
                $_SESSION['success_msg'] = "Your appointment has been successfully booked! We will contact you soon.";
            } else {
                $_SESSION['error_msg'] = "Something went wrong. Please try again later.";
            }
            
            header("Location: ../index.php");
            exit();
        } else {
            header("Location: ../index.php");
            exit();
        }
    }
}
