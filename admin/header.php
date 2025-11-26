<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aperture Syndicate</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        xintegrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="../assets/admin/css/style.css">
</head>

<body class="d-flex">

    <!-- Sidebar Navigation -->
    <aside class="sidebar col-md-3 col-lg-2 p-4 d-flex flex-column justify-content-between d-none d-md-flex">
        <div>
            <!-- Logo/Title -->
            <div class="fs-3 fw-bold text-white mb-5 text-uppercase letter-spacing">
                Aperture Syndicate
            </div>

            <nav class="nav flex-column">
                <a href="dashboard.php"
                    class="nav-link text-white rounded p-3 mb-2 hover-bg-dark transition">
                    <i class="bi bi-speedometer2 me-3"></i>
                    <span>Dashboard</span>
                </a>
                <a href="booking.php" class="nav-link text-white rounded p-3 mb-2 hover-bg-dark transition">
                    <i class="bi bi-calendar-check me-3"></i>
                    <span>Bookings</span>
                </a>
                <a href="customer.php" class="nav-link text-white rounded p-3 mb-2 hover-bg-dark transition">
                    <i class="bi bi-person me-3"></i>
                    <span>Customer</span>
                </a>
            </nav>
        </div>

        <a href="../index.php" class="nav-link text-white rounded p-3 hover-bg-dark transition">
            <i class="bi bi-box-arrow-right me-3"></i>
            <span>Logout</span>
        </a>
    </aside>