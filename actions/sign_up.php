<?php 

require_once '../database/config.php';

if(isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $pwd = $_POST['password'];
    $key = $_POST['key'];

    $admin_key = "ASP2025";

    if($admin_key !== $key) {
        header("Location: ../index.php");
    }

    $query = "INSERT INTO aper_admins (admin_name, email_add, pwd) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($query);

    $stmt->bind_param("sss", $name, $email, $pwd);

    if($stmt->execute()) {
        header("Location: ../index.php");
    }

    $stmt->close();
    $conn->close();
}