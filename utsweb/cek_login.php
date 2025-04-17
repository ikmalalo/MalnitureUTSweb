<?php
session_start();

$accounts = [
    "ikmal" => ["password" => "1", "role" => "user"],
    "admin" => ["password" => "admin", "role" => "admin"],
    "staff" => ["password" => "staff", "role" => "staff"] 
];

$username = $_POST['username'];
$password = $_POST['password'];

if (isset($accounts[$username]) && $accounts[$username]['password'] === $password) {
    $_SESSION['username'] = $username;
    $_SESSION['role'] = $accounts[$username]['role'];

    switch ($_SESSION['role']) {
        case 'admin':
            header("Location: admin_dashboard.php");
            break;
        case 'staff':
            header("Location: history.php");
            break;
        case 'user':
        default:
            header("Location: index.php");
            break;
    }
    exit();
} else {
    header("Location: login.php?error=1");
    exit();
}
?>
