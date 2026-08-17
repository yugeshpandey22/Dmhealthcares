<?php
require_once '../config/db.php';

header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $full_name = trim($_POST['full_name'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $phone = trim($_POST['phone'] ?? '');
    $role_applied = trim($_POST['role_applied'] ?? '');

    if (empty($full_name) || empty($email) || empty($phone) || empty($role_applied)) {
        echo json_encode(['success' => false, 'message' => 'All fields are required.']);
        exit;
    }

    // Validate Phone Number (10 digits)
    if (strlen($phone) !== 10 || !ctype_digit($phone)) {
        echo json_encode(['success' => false, 'message' => 'Please enter a valid 10-digit mobile number.']);
        exit;
    }

    if (!isset($_FILES['resume']) || $_FILES['resume']['error'] !== UPLOAD_ERR_OK) {
        echo json_encode(['success' => false, 'message' => 'Please upload a valid resume.']);
        exit;
    }

    $file = $_FILES['resume'];
    $allowed_exts = ['pdf', 'doc', 'docx'];
    $file_ext = strtolower(pathinfo($file['name'], PATHINFO_EXTENSION));

    if (!in_array($file_ext, $allowed_exts)) {
        echo json_encode(['success' => false, 'message' => 'Invalid file format. Only PDF, DOC, and DOCX are allowed.']);
        exit;
    }

    if ($file['size'] > 5 * 1024 * 1024) { // 5MB limit
        echo json_encode(['success' => false, 'message' => 'File size exceeds 5MB limit.']);
        exit;
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
                'role_applied' => $role_applied,
                'resume_path' => $db_path
            ]);
            echo json_encode(['success' => true, 'message' => 'Your application has been submitted successfully!']);
        } catch (PDOException $e) {
            echo json_encode(['success' => false, 'message' => 'Database error. Please try again later.']);
        }
    } else {
        echo json_encode(['success' => false, 'message' => 'Failed to upload resume. Please try again.']);
    }
} else {
    echo json_encode(['success' => false, 'message' => 'Invalid request method.']);
}
