<?php
session_start();

$username = $_POST['username'];
$password = $_POST['password'];

// Data login yang valid (hardcoded untuk contoh ini)
$valid_username = 'john_doe';
$valid_password = '123456';

if ($username === $valid_username && $password === $valid_password) {
    $_SESSION['username'] = $username;
    header("Location: dashboard.php");
} else {
    echo "Username atau Password salah. <a href='login.php'>Coba lagi</a>";
}
?>
