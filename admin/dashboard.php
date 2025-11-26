<?php
require_once 'header.php';
require_once '../database/config.php';

$query = "SELECT * FROM bookings ORDER BY id DESC";
$dashboard = $conn->query($query);
?>

<!-- Main Content Area -->
<main class="flex-grow-1 p-4 p-md-5 overflow-auto">

    <!-- Header -->
    <header class="mb-4 d-flex justify-content-between align-items-center">
        <h1 class="fs-3 fw-bold text-white">Booking Overview</h1>
        <div class="text-sm fw-medium text-secondary">
            Welcome, Admin
        </div>
    </header>

    <!-- Stats Grid -->
    <div class="row g-4 mb-5">

        <!-- Stat Card 1: New Bookings -->
        <div class="col-12 col-md-6 col-lg-3">
            <div class="card p-4 d-flex flex-row justify-content-between align-items-center">
                <div>
                    <p class="text-sm text-secondary text-uppercase fw-medium">New Bookings (7d)</p>
                    <p class="fs-2 fw-bold text-white mt-1" id="stat-new">12</p>
                </div>
                <i class="bi bi-calendar-check-fill fs-1 text-primary opacity-50"></i>
            </div>
        </div>

        <!-- Stat Card 2: Total Revenue (Simulated COD) -->
        <div class="col-12 col-md-6 col-lg-3">
            <div class="card p-4 d-flex flex-row justify-content-between align-items-center">
                <div>
                    <p class="text-sm text-secondary text-uppercase fw-medium">Expected Revenue</p>
                    <p class="fs-2 fw-bold text-white mt-1" id="stat-revenue">$6,300</p>
                </div>
                <i class="bi bi-currency-dollar fs-1 text-success opacity-50"></i>
            </div>
        </div>

        <!-- Stat Card 3: Pending Confirmation -->
        <div class="col-12 col-md-6 col-lg-3">
            <div class="card p-4 d-flex flex-row justify-content-between align-items-center">
                <div>
                    <p class="text-sm text-secondary text-uppercase fw-medium">Pending Confirmation</p>
                    <p class="fs-2 fw-bold text-white mt-1" id="stat-pending">8</p>
                </div>
                <i class="bi bi-exclamation-triangle-fill fs-1 text-warning opacity-50"></i>
            </div>
        </div>

        <!-- Stat Card 4: Upcoming Sessions -->
        <div class="col-12 col-md-6 col-lg-3">
            <div class="card p-4 d-flex flex-row justify-content-between align-items-center">
                <div>
                    <p class="text-sm text-secondary text-uppercase fw-medium">Upcoming Sessions</p>
                    <p class="fs-2 fw-bold text-white mt-1" id="stat-upcoming">4</p>
                </div>
                <i class="bi bi-clock-fill fs-1 text-secondary opacity-50"></i>
            </div>
        </div>
    </div>

    <!-- Main Content Area: Bookings List and Details Panel -->
    <div class="row g-4">

        <!-- Bookings List (8/12 width on large screens) -->
        <div class="col-lg-8" style="width: 100%;">
            <div class="card p-4">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h2 class="fs-4 fw-bold text-white">Recent Bookings</h2>
                </div>

                <!-- Bookings Table/List -->
                <div class="table-responsive">
                    <table class="table table-dark table-striped table-hover align-middle">
                        <thead>
                            <tr class="text-uppercase text-secondary fw-medium fs-6">
                                <th class="py-3 px-2 text-start">Client</th>
                                <th class="py-3 px-2 text-start d-none d-sm-table-cell">Date/Time</th>
                                <th class="py-3 px-2 text-start d-none d-sm-table-cell">Plan</th>
                                <th class="py-3 px-2 text-center">Package</th>
                            </tr>
                        </thead>
                        <tbody class="border-top-0" id="bookings-list">
                           <?php while($dash = $dashboard->fetch_assoc()) : ?> 
                            <tr>
                                <td class="py-3 px-2 text-start"><?php echo $dash['full_name']; ?></td>
                                <td class="py-3 px-2 text-start"><?php echo $dash['booking_date'] . " - " . $dash['booking_time']; ?></td>
                                <td class="py-3 px-2 text-start"><?php echo $dash['plan']; ?></td>
                                <td class="py-3 px-2 text-start"><?php echo $dash['package']; ?> </td>
                            </tr>
                            <?php endwhile; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

</main>


<?php
require_once 'footer.php';
?>