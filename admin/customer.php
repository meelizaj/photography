<?php
require_once 'header.php';
require_once '../database/config.php';

$query = "SELECT * FROM bookings ORDER BY id DESC";
$customer = $conn->query($query);

?>

<main class="flex-grow-1 p-4 p-md-5 overflow-auto">

    <header class="mb-4 d-flex justify-content-between align-items-center">
        <h1 class="fs-3 fw-bold text-white">Customer List</h1>
    </header>

    <div class="card p-4">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h2 class="fs-4 fw-bold text-white" id="booking-count">All Customer</h2>
        </div>

        <div class="table-responsive">
            <table class="table table-dark table-striped table-hover align-middle">
                <thead>
                    <tr class="text-uppercase text-secondary fw-medium fs-6">
                        <th class="py-3 px-2 text-start">ID</th>
                        <th class="py-3 px-2 text-start">Client</th>
                        <th class="py-3 px-2 text-start">Email</th>
                        <th class="py-3 px-2 text-start">Created Date & Time</th>
                    </tr>
                </thead>
                <tbody class="border-top-0" id="bookings-list">
                    <?php while ($cust_data = $customer->fetch_assoc()) : ?>
                        <tr>
                            <td class="py-3 px-2 text-start"><?php echo $cust_data['id']; ?></td>
                            <td class="py-3 px-2 text-start"><?php echo $cust_data['full_name']; ?></td>
                            <td class="py-3 px-2 text-start"><?php echo $cust_data['email']; ?></td>
                            <td class="py-3 px-2 text-start"><?php echo $cust_data['created_at']; ?></td>
                        </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
        </div>
    </div>
</main>


<?php
require_once 'footer.php';
?>