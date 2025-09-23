<?php
session_start();

// Check if already logged in
if (isset($_SESSION['admin_logged_in']) && $_SESSION['admin_logged_in'] === true) {
    header('Location: dashboard.php');
    exit;
}

$error = '';
$debug_info = '';

if ($_POST) {
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';

    $debug_info = "
        <div style='background: #f0f0f0; padding: 15px; margin: 10px 0; border-radius: 5px;'>
            <strong>Debug Information:</strong><br>
            Username received: '$username'<br>
            Password received: '$password'<br>
            Username length: " . strlen($username) . "<br>
            Password length: " . strlen($password) . "<br>
            Expected username: 'admin'<br>
            Expected password: 'adimin@2027'<br>
            Username match: " . ($username === 'admin' ? 'YES' : 'NO') . "<br>
            Password match: " . ($password === 'adimin@2027' ? 'YES' : 'NO') . "<br>
        </div>
    ";

    if ($username === 'admin' && $password === 'adimin@2027') {
        $_SESSION['admin_logged_in'] = true;
        $_SESSION['admin_username'] = 'admin';
        echo "<h1 style='color: green;'>LOGIN SUCCESS!</h1>";
        echo "<a href='dashboard.php'>Go to Dashboard</a>";
        exit;
    } else {
        $error = 'Invalid username or password';
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Debug Admin Login</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            max-width: 500px;
            margin: 50px auto;
            padding: 20px;
        }
        .form-group {
            margin: 15px 0;
        }
        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }
        input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 16px;
        }
        button {
            background: #007bff;
            color: white;
            border: none;
            padding: 12px 20px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            width: 100%;
        }
        button:hover {
            background: #0056b3;
        }
        .error {
            background: #f8d7da;
            color: #721c24;
            padding: 10px;
            border-radius: 5px;
            margin: 10px 0;
        }
    </style>
</head>
<body>
    <h2>Debug Admin Login</h2>

    <?php if ($error): ?>
        <div class="error">
            <?= htmlspecialchars($error) ?>
        </div>
    <?php endif; ?>

    <?= $debug_info ?>

    <form method="POST">
        <div class="form-group">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" value="admin" required>
        </div>

        <div class="form-group">
            <label for="password">Password:</label>
            <input type="text" id="password" name="password" value="adimin@2027" required>
        </div>

        <button type="submit">Login</button>
    </form>

    <p><a href="login.php">Back to Main Login</a></p>
</body>
</html>