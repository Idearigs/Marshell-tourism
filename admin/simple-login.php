<?php
session_start();

if ($_POST) {
    if ($_POST['username'] === 'admin' && $_POST['password'] === 'adimin@2027') {
        $_SESSION['admin_logged_in'] = true;
        $_SESSION['admin_username'] = 'admin';
        echo "<h1>LOGIN SUCCESS!</h1>";
        echo "<a href='dashboard.php'>Go to Dashboard</a>";
        exit;
    } else {
        echo "<h1 style='color: red;'>LOGIN FAILED!</h1>";
        echo "<p>Username: '" . $_POST['username'] . "'</p>";
        echo "<p>Password: '" . $_POST['password'] . "'</p>";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Simple Login Test</title>
</head>
<body>
    <h2>Simple Admin Login Test</h2>
    <form method="POST">
        <p>
            <label>Username:</label><br>
            <input type="text" name="username" value="admin" style="padding: 10px; width: 200px;">
        </p>
        <p>
            <label>Password:</label><br>
            <input type="text" name="password" value="adimin@2027" style="padding: 10px; width: 200px;">
        </p>
        <p>
            <button type="submit" style="padding: 10px 20px;">Login</button>
        </p>
    </form>
</body>
</html>