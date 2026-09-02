<?php
session_start();
require_once '../config/db.php';

if(isset($_SESSION['admin_id'])) {
    header("Location: index.php");
    exit();
}

$error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);
    
    try {
        // Ensure admin_users table exists
        $conn->exec("CREATE TABLE IF NOT EXISTS admin_users (
            id INT AUTO_INCREMENT PRIMARY KEY,
            username VARCHAR(50) NOT NULL UNIQUE,
            password VARCHAR(255) NOT NULL,
            created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
        )");

        $stmt = $conn->prepare("SELECT * FROM admin_users WHERE username = ? LIMIT 1");
        $stmt->execute([$username]);
        $user = $stmt->fetch(PDO::FETCH_ASSOC);
        
        $authenticated = false;
        if ($user) {
            if (password_verify($password, $user['password'])) {
                $authenticated = true;
            } elseif ($user['password'] === $password || md5($password) === $user['password'] || sha1($password) === $user['password']) {
                // Auto-upgrade legacy password to standard bcrypt hash
                $new_hash = password_hash($password, PASSWORD_DEFAULT);
                $u_stmt = $conn->prepare("UPDATE admin_users SET password = ? WHERE id = ?");
                $u_stmt->execute([$new_hash, $user['id']]);
                $authenticated = true;
            }
        } elseif ($username === 'admin' && ($password === 'admin' || $password === 'admin123' || $password === 'password123' || $password === 'dmhealthcare2026')) {
            // First time setup / bootstrap default admin
            $hash = password_hash($password, PASSWORD_DEFAULT);
            $i_stmt = $conn->prepare("INSERT INTO admin_users (username, password) VALUES ('admin', ?)");
            $i_stmt->execute([$hash]);
            $user = ['id' => $conn->lastInsertId(), 'username' => 'admin'];
            $authenticated = true;
        }

        if ($authenticated && $user) {
            $_SESSION['admin_id'] = $user['id'];
            $_SESSION['admin_user'] = $user['username'];
            header("Location: index.php");
            exit();
        } else {
            $error = "Invalid username or password!";
        }
    } catch (Exception $e) {
        $error = "Authentication error: " . $e->getMessage();
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Executive Login - DM Healthcare Portal</title>
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root {
            --primary-color: #E5252A;
            --primary-hover: #C8102E;
        }

        body {
            font-family: 'Outfit', sans-serif;
            background: linear-gradient(135deg, rgba(15, 23, 42, 0.94), rgba(30, 41, 59, 0.92)), url('../assets/images/downloaded_img_14.jpg') no-repeat center center/cover;
            display: flex; 
            align-items: center; 
            justify-content: center; 
            min-height: 100vh;
            margin: 0;
            position: relative;
            overflow: hidden;
        }

        /* Decorative Glow Circles */
        .glow-circle-1 {
            position: absolute;
            width: 450px;
            height: 450px;
            background: radial-gradient(circle, rgba(229, 37, 42, 0.18) 0%, rgba(229, 37, 42, 0) 70%);
            top: -100px;
            left: -100px;
            border-radius: 50%;
            pointer-events: none;
        }

        .glow-circle-2 {
            position: absolute;
            width: 550px;
            height: 550px;
            background: radial-gradient(circle, rgba(229, 37, 42, 0.12) 0%, rgba(229, 37, 42, 0) 70%);
            bottom: -150px;
            right: -150px;
            border-radius: 50%;
            pointer-events: none;
        }
        
        .login-card {
            background: rgba(255, 255, 255, 0.98);
            backdrop-filter: blur(25px);
            border: 1px solid rgba(255, 255, 255, 0.25);
            border-radius: 24px;
            box-shadow: 0 25px 50px rgba(0, 0, 0, 0.35);
            position: relative;
            z-index: 10;
        }

        .brand-badge {
            width: 68px;
            height: 68px;
            background: linear-gradient(135deg, #E5252A 0%, #B91C1C 100%);
            border-radius: 20px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            color: #ffffff;
            font-size: 1.8rem;
            box-shadow: 0 8px 20px rgba(229, 37, 42, 0.4);
        }

        .form-control {
            border-radius: 12px;
            padding: 12px 16px;
            border: 1px solid #e2e8f0;
            background: #f8fafc;
            transition: 0.3s;
            font-size: 0.95rem;
        }

        .form-control:focus {
            box-shadow: 0 0 0 4px rgba(229, 37, 42, 0.12);
            border-color: var(--primary-color);
            background: #ffffff;
        }

        .input-group-text {
            background: #f8fafc;
            border: 1px solid #e2e8f0;
            border-radius: 12px 0 0 12px;
            color: #94a3b8;
        }

        .btn-login {
            background: linear-gradient(135deg, #E5252A 0%, #B91C1C 100%);
            border: none;
            border-radius: 14px;
            padding: 14px;
            font-weight: 700;
            letter-spacing: 0.5px;
            font-size: 1rem;
            transition: all 0.3s ease;
            box-shadow: 0 6px 20px rgba(229, 37, 42, 0.35);
        }

        .btn-login:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 25px rgba(229, 37, 42, 0.5);
            background: linear-gradient(135deg, #C8102E 0%, #9E0C1F 100%);
        }
    </style>
</head>
<body>

<div class="glow-circle-1"></div>
<div class="glow-circle-2"></div>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6 col-lg-5 col-xl-4">
            <div class="card login-card p-4 p-md-5">
                <div class="text-center mb-4">
                    <div class="brand-badge mb-3">
                        <i class="fa-solid fa-heart-pulse"></i>
                    </div>
                    <h3 class="fw-bold text-dark mb-1" style="letter-spacing: -0.5px;">DM Healthcare</h3>
                    <p class="text-muted small mb-0">Management Portal & Administration</p>
                </div>
                
                <?php if($error): ?>
                    <div class="alert alert-danger py-2 rounded-3 text-center small mb-4">
                        <i class="fa-solid fa-circle-exclamation me-1"></i> <?= htmlspecialchars($error) ?>
                    </div>
                <?php endif; ?>
                
                <form method="POST" action="">
                    <div class="mb-3">
                        <label class="form-label text-muted small fw-bold text-uppercase">Username</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="fa-solid fa-user"></i></span>
                            <input type="text" name="username" class="form-control" placeholder="Enter username" required autofocus>
                        </div>
                    </div>
                    
                    <div class="mb-4">
                        <label class="form-label text-muted small fw-bold text-uppercase">Password</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="fa-solid fa-lock"></i></span>
                            <input type="password" name="password" id="passwordField" class="form-control" placeholder="••••••••" required>
                            <button type="button" class="btn btn-outline-light border text-muted" onclick="togglePassword();">
                                <i class="fa-regular fa-eye" id="eyeIcon"></i>
                            </button>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary btn-login w-100 text-white mb-3">
                        <i class="fa-solid fa-right-to-bracket me-2"></i> Sign In to Portal
                    </button>
                </form>

                <div class="text-center mt-3 pt-3 border-top">
                    <a href="../index.php" class="text-decoration-none text-muted small">
                        <i class="fa-solid fa-arrow-left me-1"></i> Back to Main Website
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
function togglePassword() {
    var field = document.getElementById('passwordField');
    var icon = document.getElementById('eyeIcon');
    if (field.type === 'password') {
        field.type = 'text';
        icon.classList.remove('fa-eye');
        icon.classList.add('fa-eye-slash');
    } else {
        field.type = 'password';
        icon.classList.remove('fa-eye-slash');
        icon.classList.add('fa-eye');
    }
}
</script>
</body>
</html>
