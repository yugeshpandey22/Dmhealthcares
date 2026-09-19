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
            $isAjax = (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) === 'xmlhttprequest') || 
                      (isset($_SERVER['HTTP_ACCEPT']) && strpos($_SERVER['HTTP_ACCEPT'], 'application/json') !== false);

            if (!empty($_POST['b_comment_hp'])) {
                // Silently pretend success to fool bots
                if ($isAjax) {
                    echo json_encode(['success' => true, 'message' => "Your request has been received!"]);
                    exit();
                }
                $_SESSION['success_msg'] = "Your request has been received!";
                header("Location: ../index.php");
                exit();
            }

            // Flexible field extraction (supports various form variants across the site)
            $full_name = htmlspecialchars(trim($_POST['full_name'] ?? $_POST['name'] ?? ''));
            $raw_phone = trim($_POST['phone_number'] ?? $_POST['phone'] ?? '');
            
            // Normalize phone number (strip non-digits, drop leading +91 / 91 / 0 if 10-digit base)
            $clean_phone = preg_replace('/[^0-9]/', '', $raw_phone);
            if (strlen($clean_phone) > 10 && substr($clean_phone, 0, 2) === '91') {
                $clean_phone = substr($clean_phone, 2);
            } elseif (strlen($clean_phone) > 10 && substr($clean_phone, 0, 1) === '0') {
                $clean_phone = substr($clean_phone, 1);
            }
            $phone_number = $clean_phone;

            $email = filter_var(trim($_POST['email'] ?? ''), FILTER_SANITIZE_EMAIL);
            $service_required = htmlspecialchars(trim($_POST['service_required'] ?? $_POST['service'] ?? ''));
            $model = htmlspecialchars(trim($_POST['model'] ?? ''));
            $requirement_type = htmlspecialchars(trim($_POST['requirement_type'] ?? ''));
            $city = htmlspecialchars(trim($_POST['city'] ?? ''));
            $pref_date = htmlspecialchars(trim($_POST['pref_date'] ?? $_POST['preferred_date'] ?? $_POST['date'] ?? ''));
            $pref_time = htmlspecialchars(trim($_POST['pref_time'] ?? $_POST['time'] ?? ''));
            $raw_message = htmlspecialchars(trim($_POST['message'] ?? ''));

            if (!preg_match('/^[6-9][0-9]{9}$/', $phone_number)) {
                if ($isAjax) {
                    echo json_encode(['success' => false, 'message' => "Please enter a valid 10-digit Indian mobile number starting with 6, 7, 8, or 9."]);
                    exit();
                }
                $_SESSION['error_msg'] = "Please enter a valid 10-digit Indian mobile number starting with 6, 7, 8, or 9.";
                $redirectUrl = $_SERVER['HTTP_REFERER'] ?? '../index.php';
                header("Location: " . $redirectUrl);
                exit();
            }

            // Combine metadata into message for database record
            $meta_parts = [];
            if (!empty($model)) $meta_parts[] = "Model: " . $model;
            if (!empty($requirement_type)) $meta_parts[] = "Type: " . $requirement_type;
            if (!empty($city)) $meta_parts[] = "City: " . $city;
            
            $db_message = trim(implode(' | ', $meta_parts) . ($raw_message ? "\nDetails: " . $raw_message : ''));

            // Build WhatsApp message for business owner (+91 93191 49644)
            $wa_lines = ["*New Request from DM Healthcare Website*"];
            $wa_lines[] = "👤 *Name:* " . ($full_name ?: 'Customer');
            $wa_lines[] = "📞 *Phone:* " . $phone_number;
            if (!empty($service_required)) $wa_lines[] = "🩺 *Service:* " . $service_required;
            if (!empty($model)) $wa_lines[] = "📦 *Model:* " . $model;
            if (!empty($requirement_type)) $wa_lines[] = "🏷️ *Requirement:* " . $requirement_type;
            if (!empty($city)) $wa_lines[] = "📍 *City/Location:* " . $city;
            if (!empty($pref_date)) $wa_lines[] = "📅 *Preferred Date:* " . $pref_date;
            if (!empty($raw_message)) $wa_lines[] = "💬 *Address/Notes:* " . $raw_message;
            $wa_lines[] = "\nPlease confirm availability and details.";

            $whatsapp_url = "https://wa.me/919319149644?text=" . urlencode(implode("\n", $wa_lines));

            // Send Email Notification to info@dmhealthcares.com
            $email_subject = "New Website Request: " . ($full_name ?: 'Customer') . " - " . ($service_required ?: 'Healthcare Service');
            $email_html = "
            <div style='font-family: Arial, sans-serif; max-width: 600px; margin: 0 auto; border: 1px solid #e2e8f0; border-radius: 8px; overflow: hidden;'>
                <div style='background: #d80000; color: #ffffff; padding: 18px 24px;'>
                    <h2 style='margin: 0; font-size: 20px;'>New Website Request Received</h2>
                    <p style='margin: 4px 0 0 0; opacity: 0.9; font-size: 13px;'>DM Healthcare Care Desk Notification</p>
                </div>
                <div style='padding: 24px; background: #ffffff;'>
                    <table style='width: 100%; border-collapse: collapse;'>
                        <tr><td style='padding: 8px 0; color: #64748b; font-weight: bold; width: 35%;'>Patient / Guardian:</td><td style='padding: 8px 0; color: #0f172a;'><b>" . htmlspecialchars($full_name) . "</b></td></tr>
                        <tr><td style='padding: 8px 0; color: #64748b; font-weight: bold;'>Phone Number:</td><td style='padding: 8px 0;'><a href='tel:+91" . htmlspecialchars($phone_number) . "' style='color: #d80000; font-weight: bold; text-decoration: none;'>+91 " . htmlspecialchars($phone_number) . "</a></td></tr>
                        " . (!empty($email) ? "<tr><td style='padding: 8px 0; color: #64748b; font-weight: bold;'>Email:</td><td style='padding: 8px 0; color: #0f172a;'>" . htmlspecialchars($email) . "</td></tr>" : "") . "
                        <tr><td style='padding: 8px 0; color: #64748b; font-weight: bold;'>Service:</td><td style='padding: 8px 0; color: #0f172a;'><b>" . htmlspecialchars($service_required ?: 'General Service') . "</b></td></tr>
                        " . (!empty($model) ? "<tr><td style='padding: 8px 0; color: #64748b; font-weight: bold;'>Model:</td><td style='padding: 8px 0; color: #0f172a;'>" . htmlspecialchars($model) . "</td></tr>" : "") . "
                        " . (!empty($requirement_type) ? "<tr><td style='padding: 8px 0; color: #64748b; font-weight: bold;'>Requirement:</td><td style='padding: 8px 0; color: #0f172a;'>" . htmlspecialchars($requirement_type) . "</td></tr>" : "") . "
                        " . (!empty($city) ? "<tr><td style='padding: 8px 0; color: #64748b; font-weight: bold;'>Location/City:</td><td style='padding: 8px 0; color: #0f172a;'>" . htmlspecialchars($city) . "</td></tr>" : "") . "
                        " . (!empty($pref_date) ? "<tr><td style='padding: 8px 0; color: #64748b; font-weight: bold;'>Preferred Date:</td><td style='padding: 8px 0; color: #0f172a;'>" . htmlspecialchars($pref_date) . "</td></tr>" : "") . "
                        " . (!empty($raw_message) ? "<tr><td style='padding: 8px 0; color: #64748b; font-weight: bold;'>Address/Details:</td><td style='padding: 8px 0; color: #0f172a;'>" . nl2br(htmlspecialchars($raw_message)) . "</td></tr>" : "") . "
                    </table>
                    <div style='margin-top: 24px; text-align: center;'>
                        <a href='" . $whatsapp_url . "' style='display: inline-block; padding: 12px 24px; background: #25d366; color: #ffffff; text-decoration: none; border-radius: 30px; font-weight: bold; font-size: 14px;'>
                            Open in WhatsApp (+91 93191 49644)
                        </a>
                    </div>
                </div>
            </div>";

            $headers = "MIME-Version: 1.0\r\n" .
                       "Content-Type: text/html; charset=UTF-8\r\n" .
                       "From: DM Healthcare <no-reply@dmhealthcares.com>\r\n" .
                       "Reply-To: " . ($email ?: 'info@dmhealthcares.com') . "\r\n";
            @mail("info@dmhealthcares.com", $email_subject, $email_html, $headers);

            $appointmentModel = new Appointment($this->db);
            $appointmentModel->create($full_name, $phone_number, $email, $service_required, $pref_date, $pref_time, $db_message);

            if ($isAjax) {
                echo json_encode([
                    'success' => true, 
                    'message' => "Your request has been received! Connecting to WhatsApp...",
                    'whatsapp_url' => $whatsapp_url
                ]);
                exit();
            }

            $_SESSION['success_msg'] = "Your request has been received! Opening WhatsApp...";
            // Automatically redirect straight to WhatsApp for instant customer connection
            header("Location: " . $whatsapp_url);
            exit();
        } else {
            $redirectUrl = $_SERVER['HTTP_REFERER'] ?? '../index.php';
            header("Location: " . $redirectUrl);
            exit();
        }
    }
}
