<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];
    
    if ($username === "admin" && $password === "admin") {
        header("Location: admin_dashboard.php");
        exit();
    } elseif ($username === "employee" && $password === "employee") {
        header("Location: employee_dashboard.php");
        exit();
    } else {
        header("Location: login.php?error=1");
        exit();
    }
}
?>
