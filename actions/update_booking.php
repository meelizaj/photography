<?php

require_once '../database/config.php';

if (isset($_POST['save'])) {

    $id     = $_POST['id'];
    $name   = $_POST['full_name'];
    $package = $_POST['package'];
    $date   = $_POST['booking_date'];
    $time   = $_POST['booking_time'];
    $plan   = $_POST['plan'];
    $price  = $_POST['price'];

    $query = "UPDATE bookings 
              SET full_name = ?, package = ?, booking_date = ?, booking_time = ?, plan = ?, price = ?
              WHERE id = ?";

    $stmt = $conn->prepare($query);

    $stmt->bind_param("sssssdi", $name, $package, $date, $time, $plan, $price, $id);

    if ($stmt->execute()) {
        echo "<script>
           alert('Successfully Changed');
           window.location.href = '../admin/booking.php'; 
        </script>";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}
