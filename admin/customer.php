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
                        <th class="py-3 px-2 text-center">Actions</th>
                    </tr>
                </thead>
                <tbody class="border-top-0" id="bookings-list">
                    <?php while ($cust_data = $customer->fetch_assoc()) : ?>
                        <tr>
                            <td class="py-3 px-2 text-start"><?php echo $cust_data['id']; ?></td>
                            <td class="py-3 px-2 text-start"><?php echo $cust_data['full_name']; ?></td>
                            <td class="py-3 px-2 text-start"><?php echo $cust_data['email'] ?></td>
                            <td class="py-3 px-2 text-start"><?php echo $cust_data['created_at']; ?></td>
                            <td class="py-3 px-2 text-center">
                                <button
                                    class="btn btn-sm btn-primary edit-cust-btn"
                                    data-id="<?php echo $cust_data['id']; ?>"
                                    data-name="<?php echo $cust_data['full_name']; ?>"
                                    data-email="<?php echo $cust_data['email']; ?>">
                                    Edit
                                </button>


                                <button class="btn btn-sm btn-danger">Delete</button>
                            </td>
                        </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
        </div>
    </div>
</main>

<div class="modal fade" id="editCustomerModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content bg-dark text-white">

            <div class="modal-header">
                <h5 class="modal-title">Edit Customer</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
            </div>

            <form action="update-customer.php" method="POST">

                <div class="modal-body">

                    <input type="hidden" name="id" id="edit-id">

                    <div class="mb-3">
                        <label class="form-label">Full Name</label>
                        <input type="text"
                            class="form-control bg-secondary text-white border-0"
                            id="edit-name"
                            name="full_name"
                            required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Email</label>
                        <input type="email"
                            class="form-control bg-secondary text-white border-0"
                            id="edit-email"
                            name="email"
                            required>
                    </div>

                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-success">Save Changes</button>
                </div>

            </form>
        </div>
    </div>
</div>



<?php
require_once 'footer.php';
?>