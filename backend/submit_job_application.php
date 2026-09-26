<?php
require_once '../config/db.php';

header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $full_name = trim($_POST['full_name'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $phone = trim($_POST['phone'] ?? '');
    $role_applied = trim($_POST['role_applied'] ?? '');
    $experience = trim($_POST['experience'] ?? '');
    $preferred_location = trim($_POST['preferred_location'] ?? '');

    if (empty($full_name) || empty($email) || empty($phone) || empty($role_applied)) {
        echo json_encode(['success' => false, 'message' => 'All required fields must be filled.']);
        exit;
    }

    // Validate Phone Number (10 digits starting with 6-9)
    if (!preg_match('/^[6-9][0-9]{9}$/', $phone)) {
        echo json_encode(['success' => false, 'message' => 'Please enter a valid 10-digit Indian mobile number.']);
        exit;
    }

    // Validate Email
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo json_encode(['success' => false, 'message' => 'Please enter a valid email address.']);
        exit;
    }

    if (!isset($_FILES['resume']) || $_FILES['resume']['error'] !== UPLOAD_ERR_OK) {
        echo json_encode(['success' => false, 'message' => 'Please upload a valid resume (PDF, DOC, or DOCX).']);
        exit;
    }

    $file = $_FILES['resume'];
    $allowed_exts = ['pdf', 'doc', 'docx'];
    $file_ext = strtolower(pathinfo($file['name'], PATHINFO_EXTENSION));

    if (!in_array($file_ext, $allowed_exts)) {
        echo json_encode(['success' => false, 'message' => 'Invalid file format. Only PDF, DOC, and DOCX files are allowed.']);
        exit;
    }

    if ($file['size'] > 5 * 1024 * 1024) { // 5MB limit
        echo json_encode(['success' => false, 'message' => 'File size exceeds 5MB limit. Please upload a smaller file.']);
        exit;
    }

    // Format role details with experience & location for clear admin view
    $extra_details = [];
    if (!empty($experience)) {
        $extra_details[] = "Exp: " . $experience;
    }
    if (!empty($preferred_location)) {
        $extra_details[] = "Loc: " . $preferred_location;
    }
    
    $full_role_applied = $role_applied;
    if (!empty($extra_details)) {
        $full_role_applied .= " (" . implode(" | ", $extra_details) . ")";
    }

    // Generate unique filename
    $new_filename = time() . '_' . preg_replace('/[^a-zA-Z0-9.-]/', '_', $file['name']);
    $upload_dir = '../uploads/resumes/';
    
    // Ensure directory exists
    if (!is_dir($upload_dir)) {
        mkdir($upload_dir, 0755, true);
    }
    
    $destination = $upload_dir . $new_filename;
    
    if (move_uploaded_file($file['tmp_name'], $destination)) {
        // Save to Database
        $stmt = $conn->prepare("INSERT INTO job_applications (full_name, email, phone, role_applied, resume_path) VALUES (:full_name, :email, :phone, :role_applied, :resume_path)");
        
        $db_path = 'uploads/resumes/' . $new_filename; // Relative path for DB

        try {
            $stmt->execute([
                'full_name' => $full_name,
                'email' => $email,
                'phone' => $phone,
                'role_applied' => $full_role_applied,
                'resume_path' => $db_path
            ]);

            // Dispatch Email Notification with attached resume
            require_once __DIR__ . '/../includes/mailer.php';
            
            $targetEmail = defined('HR_NOTIFICATION_EMAIL') ? HR_NOTIFICATION_EMAIL : 'info@dmhealthcares.com';
            $emailResult = sendJobApplicationEmail(
                $targetEmail,
                $full_name,
                $email,
                $phone,
                $role_applied,
                $experience,
                $preferred_location,
                $destination,
                $file['name']
            );

            echo json_encode([
                'success' => true, 
                'message' => 'Thank you, ' . htmlspecialchars($full_name) . '! Your application for "' . htmlspecialchars($role_applied) . '" has been received. Our HR team will review your resume and contact you soon.',
                'mail_sent' => $emailResult['success']
            ]);
        } catch (PDOException $e) {
            echo json_encode(['success' => false, 'message' => 'Database error. Please try again later.']);
        }
    } else {
        echo json_encode(['success' => false, 'message' => 'Failed to upload resume. Please try again.']);
    }
} else {
    echo json_encode(['success' => false, 'message' => 'Invalid request method.']);
}

/**
 * Format and send job application notification email with resume attachment via PHPMailer
 */
function sendJobApplicationEmail($to, $full_name, $email, $phone, $role_applied, $experience, $preferred_location, $filePath, $originalFileName) {
    $subject = "New Job Application: " . $role_applied . " - " . $full_name;
    
    // Determine website base URL
    $protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? "https://" : "http://";
    $host = $_SERVER['HTTP_HOST'] ?? 'dmhealthcares.com';
    $resumeUrl = $protocol . $host . '/uploads/resumes/' . basename($filePath);

    // HTML Message Body
    $html_body = "
    <!DOCTYPE html>
    <html>
    <head>
        <meta charset='utf-8'>
        <style>
            body { font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; background-color: #f1f5f9; margin: 0; padding: 24px; color: #1e293b; }
            .mail-container { max-width: 620px; background: #ffffff; border-radius: 16px; border: 1px solid #e2e8f0; overflow: hidden; margin: 0 auto; box-shadow: 0 10px 25px -5px rgba(0,0,0,0.05); }
            .mail-header { background: linear-gradient(135deg, #e5252a 0%, #b91c1c 100%); color: #ffffff; padding: 32px 24px; text-align: center; }
            .mail-header h2 { margin: 0 0 8px 0; font-size: 24px; font-weight: 800; letter-spacing: -0.5px; }
            .mail-header p { margin: 0; opacity: 0.95; font-size: 14px; font-weight: 500; }
            .mail-content { padding: 32px 26px; }
            .role-badge { background: #fee2e2; border: 1.5px solid #fca5a5; color: #b91c1c; padding: 10px 20px; border-radius: 50px; font-weight: 800; font-size: 15px; display: inline-block; margin-bottom: 24px; }
            .info-table { width: 100%; border-collapse: collapse; margin-bottom: 24px; }
            .info-table td { padding: 13px 10px; border-bottom: 1px solid #f1f5f9; font-size: 14px; }
            .label-col { font-weight: 700; color: #64748b; width: 36%; }
            .value-col { font-weight: 600; color: #0f172a; }
            .action-box { background: #f8fafc; border: 1.5px dashed #cbd5e1; border-radius: 12px; padding: 20px; text-align: center; margin-top: 20px; }
            .resume-btn { display: inline-block; background: #e5252a; color: #ffffff !important; text-decoration: none; padding: 13px 28px; border-radius: 10px; font-weight: 700; font-size: 14px; box-shadow: 0 4px 14px rgba(229,37,42,0.3); }
            .mail-footer { background: #f8fafc; padding: 20px; text-align: center; font-size: 12px; color: #94a3b8; border-top: 1px solid #e2e8f0; }
        </style>
    </head>
    <body>
        <div class='mail-container'>
            <div class='mail-header'>
                <h2>🏥 DM Healthcare - Career Application</h2>
                <p>A new candidate has submitted their resume via the career portal</p>
            </div>
            <div class='mail-content'>
                <div style='text-align: center;'>
                    <span class='role-badge'>💼 Position: " . htmlspecialchars($role_applied) . "</span>
                </div>
                <table class='info-table'>
                    <tr>
                        <td class='label-col'>Candidate Name:</td>
                        <td class='value-col'>" . htmlspecialchars($full_name) . "</td>
                    </tr>
                    <tr>
                        <td class='label-col'>Mobile Number:</td>
                        <td class='value-col'><a href='tel:" . htmlspecialchars($phone) . "' style='color: #e5252a; text-decoration: none; font-weight: 800;'>+91 " . htmlspecialchars($phone) . "</a></td>
                    </tr>
                    <tr>
                        <td class='label-col'>Email Address:</td>
                        <td class='value-col'><a href='mailto:" . htmlspecialchars($email) . "' style='color: #2563eb; text-decoration: none; font-weight: 600;'>" . htmlspecialchars($email) . "</a></td>
                    </tr>
                    <tr>
                        <td class='label-col'>Experience:</td>
                        <td class='value-col'>" . htmlspecialchars(!empty($experience) ? $experience : 'Fresher / Not Specified') . "</td>
                    </tr>
                    <tr>
                        <td class='label-col'>Preferred Location:</td>
                        <td class='value-col'>" . htmlspecialchars(!empty($preferred_location) ? $preferred_location : 'Delhi NCR') . "</td>
                    </tr>
                    <tr>
                        <td class='label-col'>Submission Date:</td>
                        <td class='value-col'>" . date('d M Y, h:i A') . "</td>
                    </tr>
                </table>

                <div class='action-box'>
                    <p style='margin: 0 0 12px 0; font-size: 13px; color: #475569; font-weight: 600;'>📎 Resume file is attached directly to this email.</p>
                    <a href='" . htmlspecialchars($resumeUrl) . "' class='resume-btn' target='_blank'>📥 View / Download Resume in Browser</a>
                </div>
            </div>
            <div class='mail-footer'>
                DM Healthcare Recruitment System &bull; <a href='mailto:info@dmhealthcares.com' style='color: #94a3b8;'>info@dmhealthcares.com</a>
            </div>
        </div>
    </body>
    </html>
    ";

    $attachments = [];
    if (file_exists($filePath)) {
        $attachments[] = [
            'path' => $filePath,
            'name' => $originalFileName
        ];
    }

    return sendHealthcareEmail(
        $to,
        $subject,
        $html_body,
        $email,
        $full_name,
        $attachments
    );
}

