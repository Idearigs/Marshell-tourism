<?php
session_start();

echo "<h2>Admin Login Test</h2>";
echo "<p><strong>Current Session:</strong></p>";
var_dump($_SESSION);

echo "<p><strong>POST Data:</strong></p>";
var_dump($_POST);

if ($_POST) {
    $username = trim($_POST['username'] ?? '');
    $password = trim($_POST['password'] ?? '');

    echo "<p><strong>Processed Data:</strong></p>";
    echo "Username: '$username' (length: " . strlen($username) . ")<br>";
    echo "Password: '$password' (length: " . strlen($password) . ")<br>";

    echo "<p><strong>Comparison:</strong></p>";
    echo "Username match: " . ($username === 'admin' ? 'YES' : 'NO') . "<br>";
    echo "Password match: " . ($password === 'adimin@2027' ? 'YES' : 'NO') . "<br>";

    if ($username === 'admin' && $password === 'adimin@2027') {
        $_SESSION['admin_logged_in'] = true;
        $_SESSION['admin_username'] = $username;
        echo "<p style='color: green;'><strong>LOGIN SUCCESS!</strong></p>";
        echo "<a href='dashboard.php'>Go to Dashboard</a>";
    } else {
        echo "<p style='color: red;'><strong>LOGIN FAILED!</strong></p>";
    }
}
?>

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
        <button type="submit" style="padding: 10px 20px;">Test Login</button>
    </p>
</form>

<p><a href="login.php">Back to Normal Login</a></p>