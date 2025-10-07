<?php
session_start();
require_once '../includes/config.php';

// Check if already logged in
if (isset($_SESSION['admin_logged_in']) && $_SESSION['admin_logged_in'] === true) {
    header('Location: dashboard.php');
    exit;
}

$error = '';
$debug_info = [];

if ($_POST) {
    $username = sanitizeInput($_POST['username']);
    $password = $_POST['password'];

    try {
        // Get database connection
        $pdo = getDBConnection();
        $debug_info[] = "Attempting to connect to database...";

        if ($pdo) {
            $debug_info[] = "Database connection successful";
            $debug_info[] = "Searching for username: " . $username;

            // Query user from database
            $stmt = $pdo->prepare("SELECT * FROM users WHERE username = ? LIMIT 1");
            $stmt->execute([$username]);
            $user = $stmt->fetch();

            if ($user) {
                $debug_info[] = "User found in database";
                $debug_info[] = "User ID: " . $user['id'];
                $debug_info[] = "Stored password hash: " . substr($user['password'], 0, 20) . "...";
                $debug_info[] = "Verifying password...";

                // Verify user exists and password is correct
                if (password_verify($password, $user['password'])) {
                    $debug_info[] = "Password verification: SUCCESS";

                    // Login successful
                    $_SESSION['admin_logged_in'] = true;
                    $_SESSION['admin_username'] = $user['username'];
                    $_SESSION['admin_email'] = $user['email'];
                    $_SESSION['admin_id'] = $user['id'];

                    // Update last login time
                    $updateStmt = $pdo->prepare("UPDATE users SET last_login = NOW() WHERE id = ?");
                    $updateStmt->execute([$user['id']]);
                    $debug_info[] = "Login successful, redirecting to dashboard...";

                    header('Location: dashboard.php');
                    exit;
                } else {
                    $debug_info[] = "Password verification: FAILED";
                    $error = 'Invalid username or password';
                }
            } else {
                $debug_info[] = "User NOT found in database";
                $error = 'Invalid username or password';
            }
        } else {
            $debug_info[] = "Database connection FAILED";
            $error = 'Database connection failed. Please try again later.';
        }
    } catch (PDOException $e) {
        $debug_info[] = "PDO Exception occurred: " . $e->getMessage();
        $debug_info[] = "Error code: " . $e->getCode();
        error_log("Login error: " . $e->getMessage());
        $error = 'An error occurred. Please try again later.';
    } catch (Exception $e) {
        $debug_info[] = "General Exception: " . $e->getMessage();
        error_log("Login exception: " . $e->getMessage());
        $error = 'An error occurred. Please try again later.';
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login - Marshel Tourism</title>
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <style>
        body {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .login-card {
            background: white;
            border-radius: 15px;
            box-shadow: 0 15px 35px rgba(0,0,0,0.1);
            overflow: hidden;
            max-width: 400px;
            width: 100%;
        }
        .login-header {
            background: linear-gradient(45deg, #007bff, #0056b3);
            color: white;
            text-align: center;
            padding: 30px 20px;
        }
        .login-body {
            padding: 40px 30px;
        }
        .form-control {
            border-radius: 10px;
            border: 2px solid #e9ecef;
            padding: 12px 15px;
            font-size: 16px;
            margin-bottom: 20px;
        }
        .form-control:focus {
            border-color: #007bff;
            box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
        }
        .btn-login {
            background: linear-gradient(45deg, #007bff, #0056b3);
            border: none;
            border-radius: 10px;
            padding: 12px;
            font-size: 16px;
            font-weight: 600;
            width: 100%;
            color: white;
            transition: all 0.3s ease;
        }
        .btn-login:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(0, 123, 255, 0.4);
        }
        .alert {
            border-radius: 10px;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <div class="login-card">
        <div class="login-header">
            <h2 class="mb-0">Admin Panel</h2>
            <p class="mb-0 mt-2">Marshel Tourism</p>
        </div>
        <div class="login-body">
            <?php if ($error): ?>
                <div class="alert alert-danger">
                    <i class="ph ph-warning-circle"></i> <?= htmlspecialchars($error) ?>
                </div>
            <?php endif; ?>

            <form method="POST">
                <div class="mb-3">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" class="form-control" id="username" name="username" required
                           placeholder="Enter username" value="<?= htmlspecialchars($_POST['username'] ?? '') ?>">
                </div>

                <div class="mb-4">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password" required
                           placeholder="Enter password">
                </div>

                <button type="submit" class="btn btn-login">
                    Login to Dashboard
                </button>
            </form>

            <div class="text-center mt-4">
                <small class="text-muted">
                    <a href="../index.php" class="text-decoration-none">← Back to Website</a>
                </small>
            </div>
        </div>
    </div>

    <script src="../assets/js/boostrap.bundle.min.js"></script>

    <!-- Debug logging to console -->
    <script>
        <?php if (!empty($debug_info)): ?>
        console.group('🔐 Login Debug Information');
        <?php foreach ($debug_info as $info): ?>
        console.log(<?php echo json_encode($info); ?>);
        <?php endforeach; ?>
        console.groupEnd();
        <?php endif; ?>

        <?php if ($error): ?>
        console.error('Login Error: <?php echo addslashes($error); ?>');
        <?php endif; ?>
    </script>
</body>
</html>