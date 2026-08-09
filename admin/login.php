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
    $password = $_POST['password'];
    
    $stmt = $conn->prepare("SELECT * FROM admin_users WHERE username = ?");
    $stmt->execute([$username]);
    $user = $stmt->fetch();
    
    if($user && password_verify($password, $user['password'])) {
        $_SESSION['admin_id'] = $user['id'];
        $_SESSION['admin_user'] = $user['username'];
        header("Location: index.php");
        exit();
    } else {
        $error = "Invalid username or password!";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login - DM Healthcare</title>
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Outfit', sans-serif;
            background: linear-gradient(rgba(10, 91, 255, 0.6), rgba(0, 31, 96, 0.8)), url('../assets/images/downloaded_img_14.jpg') no-repeat center center/cover;
            display: flex; align-items: center; justify-content: center; height: 100vh;
            margin: 0;
            position: relative;
            overflow: hidden;
        }
        /* Decorative background elements */
        body::before, body::after {
            content: ''; position: absolute; border-radius: 50%; opacity: 0.1;
        }
        body::before { width: 400px; height: 400px; background: white; top: -100px; left: -100px; }
        body::after { width: 600px; height: 600px; background: white; bottom: -200px; right: -150px; }
        
        .login-card {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(20px);
            border: 1px solid rgba(255,255,255,0.2);
            border-radius: 24px;
            box-shadow: 0 25px 50px rgba(0,0,0,0.15);
            position: relative;
            z-index: 10;
        }
        .form-control {
            border-radius: 12px; padding: 12px 16px; border: 1px solid #e0e0e0;
            background: #f8fafd; transition: 0.3s;
        }
        .form-control:focus {
            box-shadow: 0 0 0 4px rgba(10, 91, 255, 0.1); border-color: #0A5BFF; background: white;
        }
        .btn-login {
            background: linear-gradient(90deg, #0A5BFF, #0043c9);
            border: none; border-radius: 12px; padding: 14px;
            font-weight: 600; letter-spacing: 0.5px;
            transition: 0.3s;
        }
        .btn-login:hover {
            transform: translateY(-2px); box-shadow: 0 8px 20px rgba(10, 91, 255, 0.3);
        }
    </style>
</head>
<body>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-5 col-lg-4">
            <div class="card login-card p-5">
                <div class="text-center mb-4">
                    <div class="bg-primary bg-opacity-10 rounded-circle d-inline-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                        <svg width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="#0A5BFF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path></svg>
                    </div>
                    <h3 class="fw-bold" style="color: #1a2b4c;">Admin Portal</h3>
                    <p class="text-muted small">Sign in to manage DM Healthcare</p>
                </div>
                
                <?php if($error): ?>
                    <div class="alert alert-danger py-2 rounded-3 text-center" style="font-size: 0.9rem;"><?= $error ?></div>
                <?php endif; ?>
                
                <form method="POST" action="">
                    <div class="mb-3">
                        <label class="form-label text-muted small fw-semibold">Username</label>
                        <input type="text" name="username" class="form-control" placeholder="Enter your username" required>
                    </div>
                    <div class="mb-4">
                        <label class="form-label text-muted small fw-semibold">Password</label>
                        <input type="password" name="password" class="form-control" placeholder="Enter your password" required>
                    </div>
                    <button type="submit" class="btn btn-primary btn-login w-100 text-white">Sign In</button>
                </form>
            </div>
        </div>
    </div>
</div>

</body>
</html>
