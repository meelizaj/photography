<?php
require_once '../database/config.php';

if (isset($_POST['submit'])) {

    $email = trim($_POST['email']);
    $pass  = $_POST['pass'];

    $query = "SELECT admin_id, admin_name, pwd FROM aper_admins WHERE email_add = ?";
    $stmt = $conn->prepare($query);

    if (!$stmt) {
        die("Prepare failed: " . $conn->error);
    }

    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows === 0) {
        echo "<script>
            alert('No admin found with this email.');
            window.location.href = '../index.php';
        </script>";
        exit;
    }

    $row = $result->fetch_assoc();

    if ($pass === $row['pwd']) {

        header("Location: ../admin/dashboard.php?admin_id=" . $row['admin_id']);
        exit;
    } else {

        echo "<script>
        alert('Incorrect password.');
        window.location.href = '../index.php';
    </script>";
        exit;
    }


    $stmt->close();
    $conn->close();
}
