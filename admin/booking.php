<?php
require_once 'header.php';
require_once '../database/config.php';

$query = "SELECT * FROM bookings ORDER BY id DESC";
$bookings = $conn->query($query);

?>

<main class="flex-grow-1 p-4 p-md-5 overflow-auto">

    <header class="mb-4 d-flex justify-content-between align-items-center">
        <h1 class="fs-3 fw-bold text-white">Bookings Management</h1>
    </header>

    <div class="card p-4">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h2 class="fs-4 fw-bold text-white" id="booking-count">All Bookings</h2>
        </div>

        <div class="table-responsive">
            <table class="table table-dark table-striped table-hover align-middle">
                <thead>
                    <tr class="text-uppercase text-secondary fw-medium fs-6">
                        <th class="py-3 px-2 text-start">ID</th>
                        <th class="py-3 px-2 text-start">Client</th>
                        <th class="py-3 px-2 text-start d-none d-lg-table-cell">Package</th>
                        <th class="py-3 px-2 text-start">Date & Time</th>
                        <th class="py-3 px-2 text-center">Plan</th>
                        <th class="py-3 px-2 text-end">Price</th>
                        <th class="py-3 px-2 text-center">Actions</th>
                    </tr>
                </thead>
                <tbody class="border-top-0" id="bookings-list">
                    <?php while ($book_data = $bookings->fetch_assoc()) : ?>
                        <tr>
                            <td class="py-3 px-2 text-start"><?php echo $book_data['id']; ?></td>
                            <td class="py-3 px-2 text-start"><?php echo $book_data['full_name']; ?></td>
                            <td class="py-3 px-2 text-start d-none d-lg-table-cell"><?php echo $book_data['package']; ?></td>
                            <td class="py-3 px-2 text-start"><?php echo $book_data['booking_date'] . " - " . $book_data['booking_time']; ?></td>
                            <td class="py-3 px-2 text-center">
                                <?php echo $book_data['plan']; ?>
                            </td>
                            <td class="py-3 px-2 text-end"><?php echo $book_data['price']; ?></td>
                            <td class="py-3 px-2 text-center">
                                <button
                                    class="btn btn-sm btn-primary edit-btn"
                                    data-id="<?php echo $book_data['id']; ?>"
                                    data-client="<?php echo $book_data['full_name']; ?>"
                                    data-package="<?php echo $book_data['package']; ?>"
                                    data-date="<?php echo $book_data['booking_date']; ?>"
                                    data-time="<?php echo $book_data['booking_time']; ?>"
                                    data-plan="<?php echo $book_data['plan']; ?>"
                                    data-price="<?php echo $book_data['price']; ?>">
                                    Edit
                                </button>

                                <button
                                    class="btn btn-sm btn-danger delete-btn"
                                    data-id="<?php echo $book_data['id']; ?>">
                                    Delete
                                </button>

                            </td>
                        </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
        </div>
    </div>
</main>

<!-- Edit Booking Modal -->
<div class="modal fade" id="editBookingModal" tabindex="-1">
    <div class="modal-dialog">
        <form method="POST" action="../actions/update_booking.php" class="modal-content bg-dark text-white">

            <div class="modal-header">
                <h5 class="modal-title">Edit Booking</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
            </div>

            <div class="modal-body">

                <input type="hidden" name="id" id="edit-id">

                <div class="mb-3">
                    <label class="form-label">Client Name</label>
                    <input type="text" class="form-control" name="full_name" id="edit-client">
                </div>

                <div class="mb-3">
                    <label class="form-label">Package</label>
                    <input type="text" class="form-control" name="package" id="edit-package">
                </div>

                <div class="mb-3">
                    <label class="form-label">Booking Date</label>
                    <input type="date" class="form-control" name="booking_date" id="edit-date">
                </div>

                <div class="mb-3">
                    <label class="form-label">Booking Time</label>
                    <input type="time" class="form-control" name="booking_time" id="edit-time">
                </div>

                <div class="mb-3">
                    <label class="form-label">Plan</label>
                    <input type="text" class="form-control" name="plan" id="edit-plan">
                </div>

                <div class="mb-3">
                    <label class="form-label">Price</label>
                    <input type="number" class="form-control" name="price" id="edit-price">
                </div>

            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                    Cancel
                </button>
                <button type="submit" name="save" class="btn btn-primary">
                    Save Changes
                </button>
            </div>

        </form>
    </div>
</div>

<!-- Delete Booking Modal -->
<div class="modal fade" id="deleteBookingModal" tabindex="-1">
    <div class="modal-dialog">
        <form method="POST" action="../actions/delete_booking.php" class="modal-content bg-dark text-white">

            <div class="modal-header">
                <h5 class="modal-title">Delete Booking</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
            </div>

            <div class="modal-body">
                <input type="hidden" name="id" id="delete-id">

                <p class="mb-0">
                    Are you sure you want to delete this booking?
                </p>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                    Cancel
                </button>
                <button type="submit" name="delete" class="btn btn-danger">
                    Delete
                </button>
            </div>

        </form>
    </div>
</div>


<?php
require_once 'footer.php';
?>