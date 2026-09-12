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

            // Dispatch Email Notification to info@dmhealthcares.com
            sendJobApplicationNotification(
                'info@dmhealthcares.com',
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
                'message' => 'Thank you, ' . htmlspecialchars($full_name) . '! Your application for "' . htmlspecialchars($role_applied) . '" has been received. Our HR coordinator will contact you within 24 hours.'
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
 * Send multipart email notification with resume attachment to HR
 */
function sendJobApplicationNotification($to, $full_name, $email, $phone, $role_applied, $experience, $preferred_location, $filePath, $originalFileName) {
    $subject = "New Job Application: " . $role_applied . " - " . $full_name;
    
    // Determine website base URL
    $protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? "https://" : "http://";
    $host = $_SERVER['HTTP_HOST'] ?? 'dmhealthcares.com';
    $resumeUrl = $protocol . $host . '/uploads/resumes/' . basename($filePath);

    // Boundary for multipart MIME
    $boundary = md5(time() . "dm_job_app");

    // Headers
    $headers = "From: DM Healthcare Careers <info@dmhealthcares.com>\r\n";
    $headers .= "Reply-To: " . $email . "\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: multipart/mixed; boundary=\"" . $boundary . "\"\r\n";

    // HTML Message Body
    $html_body = "
    <!DOCTYPE html>
    <html>
    <head>
        <meta charset='utf-8'>
        <style>
            body { font-family: 'Segoe UI', Arial, sans-serif; background-color: #f8fafc; margin: 0; padding: 20px; color: #334155; }
            .mail-container { max-width: 600px; background: #ffffff; border-radius: 16px; border: 1px solid #e2e8f0; overflow: hidden; margin: 0 auto; box-shadow: 0 4px 20px rgba(0,0,0,0.05); }
            .mail-header { background: linear-gradient(135deg, #e5252a 0%, #b91c1c 100%); color: #ffffff; padding: 28px 24px; text-align: center; }
            .mail-header h2 { margin: 0 0 6px 0; font-size: 22px; font-weight: 800; }
            .mail-header p { margin: 0; opacity: 0.9; font-size: 14px; }
            .mail-content { padding: 28px 24px; }
            .role-highlight { background: #fff1f2; border: 1.5px solid #fecdd3; color: #e11d48; padding: 10px 18px; border-radius: 30px; font-weight: 800; font-size: 15px; display: inline-block; margin-bottom: 22px; }
            .info-table { width: 100%; border-collapse: collapse; margin-bottom: 24px; }
            .info-table td { padding: 11px 8px; border-bottom: 1px solid #f1f5f9; font-size: 14px; }
            .label-col { font-weight: 700; color: #64748b; width: 38%; }
            .value-col { font-weight: 600; color: #0f172a; }
            .resume-btn { display: inline-block; background: #e5252a; color: #ffffff !important; text-decoration: none; padding: 13px 26px; border-radius: 10px; font-weight: 700; font-size: 14px; box-shadow: 0 4px 12px rgba(229,37,42,0.3); }
            .mail-footer { background: #f8fafc; padding: 16px; text-align: center; font-size: 12px; color: #94a3b8; border-top: 1px solid #e2e8f0; }
        </style>
    </head>
    <body>
        <div class='mail-container'>
            <div class='mail-header'>
                <h2>DM Healthcare - New Job Application</h2>
                <p>A new candidate has submitted their application via dmhealthcares.com</p>
            </div>
            <div class='mail-content'>
                <div style='text-align: center;'>
                    <span class='role-highlight'>📌 Position Applied: " . htmlspecialchars($role_applied) . "</span>
                </div>
                <table class='info-table'>
                    <tr>
                        <td class='label-col'>Candidate Name:</td>
                        <td class='value-col'>" . htmlspecialchars($full_name) . "</td>
                    </tr>
                    <tr>
                        <td class='label-col'>Mobile Number:</td>
                        <td class='value-col'><a href='tel:" . htmlspecialchars($phone) . "' style='color: #e5252a; text-decoration: none; font-weight: bold;'>+91 " . htmlspecialchars($phone) . "</a></td>
                    </tr>
                    <tr>
                        <td class='label-col'>Email Address:</td>
                        <td class='value-col'><a href='mailto:" . htmlspecialchars($email) . "' style='color: #2563eb; text-decoration: none;'>" . htmlspecialchars($email) . "</a></td>
                    </tr>
                    <tr>
                        <td class='label-col'>Work Experience:</td>
                        <td class='value-col'>" . htmlspecialchars(!empty($experience) ? $experience : 'Not Specified') . "</td>
                    </tr>
                    <tr>
                        <td class='label-col'>Preferred Location:</td>
                        <td class='value-col'>" . htmlspecialchars(!empty($preferred_location) ? $preferred_location : 'Delhi NCR') . "</td>
                    </tr>
                    <tr>
                        <td class='label-col'>Submission Time:</td>
                        <td class='value-col'>" . date('d M Y, h:i A') . "</td>
                    </tr>
                </table>
                <div style='text-align: center; margin-top: 15px;'>
                    <a href='" . htmlspecialchars($resumeUrl) . "' class='resume-btn' target='_blank'>📄 View / Download Resume Online</a>
                </div>
                <p style='text-align: center; color: #64748b; font-size: 12px; margin-top: 14px;'>
                    * The resume file is also attached to this email.
                </p>
            </div>
            <div class='mail-footer'>
                DM Healthcare Recruitment System &bull; <a href='mailto:info@dmhealthcares.com' style='color: #94a3b8;'>info@dmhealthcares.com</a>
            </div>
        </div>
    </body>
    </html>
    ";

    // Build Multipart MIME message
    $message = "--" . $boundary . "\r\n";
    $message .= "Content-Type: text/html; charset=UTF-8\r\n";
    $message .= "Content-Transfer-Encoding: 7bit\r\n\r\n";
    $message .= $html_body . "\r\n\r\n";

    // Attach File if exists
    if (file_exists($filePath)) {
        $fileContent = file_get_contents($filePath);
        $encodedFile = chunk_split(base64_encode($fileContent));
        $fileType = (function_exists('mime_content_type')) ? mime_content_type($filePath) : 'application/octet-stream';
        $safeFileName = preg_replace('/[^a-zA-Z0-9._-]/', '_', $originalFileName);

        $message .= "--" . $boundary . "\r\n";
        $message .= "Content-Type: " . $fileType . "; name=\"" . $safeFileName . "\"\r\n";
        $message .= "Content-Disposition: attachment; filename=\"" . $safeFileName . "\"\r\n";
        $message .= "Content-Transfer-Encoding: base64\r\n\r\n";
        $message .= $encodedFile . "\r\n\r\n";
    }

    $message .= "--" . $boundary . "--";

    // Send email using PHP mail()
    return @mail($to, $subject, $message, $headers);
}
