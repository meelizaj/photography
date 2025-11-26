<?php

require_once '../database/config.php';

if(isset($_POST['submit'])) {
    $email = $_POST['email'];
    $pass = $_POST['pass'];

    $query = "UPDATE aper_admins SET pwd = ? WHERE email_add = ?";
    $stmt = $conn->prepare($query);

    $stmt->bind_param("ss", $pass, $email);

    if($stmt->execute()) {
        header("Location: ../index.php");
    }

    $stmt->close();
    $conn->close();

}