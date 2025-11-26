<?php

require_once '../database/config.php';

if (isset($_POST['delete'])) {

    $id = $_POST['id'];

    $query = "DELETE FROM bookings WHERE id = ?";
    $stmt = $conn->prepare($query);

    $stmt->bind_param("i", $id);

    if ($stmt->execute()) {
        echo "<script>
            alert('Customer deleted successfully');
            window.location.href = '../admin/customer.php';
        </script>";
    } else {
        echo "Error: " . $stmt->error;
    }
}
