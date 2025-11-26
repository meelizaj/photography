<?php

require_once '../database/config.php';

if (isset($_POST['submit'])) {
    $fullname = $_POST['name'];
    $email = $_POST['email'];
    $date = $_POST['date'];
    $time = $_POST['time'];
    $package = $_POST['package'];
    $plan = $_POST['plan'];
    $price = $_POST['price'];

    if (empty($fullname) || empty($email) || empty($date) || empty($time) || empty($package) || empty($plan) || empty($price)) {
        echo "<script>
            alert('Please fill in all fields before submitting.');
            window.history.back();
        </script>";
        exit;
    }

    $checkQuery = "SELECT * FROM bookings WHERE email = ?";
    $checkStmt = $conn->prepare($checkQuery);
    $checkStmt->bind_param("s", $email);
    $checkStmt->execute();
    $result = $checkStmt->get_result();

    if ($result->num_rows > 0) {
        echo "<script>
            alert('This email is already in use. Please use a different email.');
            window.history.back();
        </script>";
        exit;
    }

    $query = "INSERT INTO bookings (full_name, email, booking_date, booking_time, package, plan, price) VALUES (?, ?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($query);

    $stmt->bind_param("ssssssd", $fullname, $email, $date, $time, $package, $plan, $price);

    if ($stmt->execute()) {
        echo "<script>
            alert('Your credentials have been saved. Please click continue to proceed.');
            window.location.href = '../cod.php';
        </script>";
    }
}
