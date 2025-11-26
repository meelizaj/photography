<?php
require_once '../database/config.php';

if(isset($_POST['submit'])) {
    $email = trim($_POST['email']);
    $pass = $_POST['pass']; 

    $query = "SELECT admin_id, admin_name, pwd FROM aper_admins WHERE email_add = ?";
    $stmt = $conn->prepare($query);

    if(!$stmt){
        die("Prepare failed: " . $conn->error);
    }

    $stmt->bind_param("s", $email);
    $stmt->execute();

    $result = $stmt->get_result();

    if($result->num_rows > 0){
        $row = $result->fetch_assoc();

        header("Location: ../admin/dashboard.php");
        exit;
    } else {
        echo "<script>
        alert('No admin found with this email.')
        window.location.href = '../index.php';
        </script>";
    }

    $stmt->close();
    $conn->close();


}

$price = isset($_GET['price']) ? htmlspecialchars($_GET['price']) : 0;
echo $price;
