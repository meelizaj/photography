<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aperture Syndicate - Photography</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
        <div class="container-fluid">
            <a class="navbar-brand d-flex align-items-center" href="#">
                <span class="fs-4">U|V</span>
                <span class="ms-2">APERTURE SYNDICATE</span>
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto">
                    <!-- Main Navigation Links (PHP extensions restored as per user's last input) -->
                    <li class="nav-item"><a class="nav-link" href="index.php">HOME</a></li>
                    <li class="nav-item"><a class="nav-link" href="services.php">SERVICES</a></li>
                    <li class="nav-item"><a class="nav-link" href="portfolio.php">PORTFOLIO</a></li>
                    <li class="nav-item"><a class="nav-link" href="about.php">ABOUT</a></li>

                    <!-- NEW: Login/Sign Up Link for Mobile/Collapsed Menu -->
                    <li class="nav-item d-lg-none">
                        <a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#authModal">LOG IN / SIGN UP</a>
                    </li>
                </ul>

                <ul class="navbar-nav ms-auto d-none d-lg-flex">
                    <li class="nav-item">
                        <!-- Desktop Icon Link -->
                        <a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#authModal">
                            <i class="bi bi-person-circle fs-5" data-bs-toggle="tooltip" data-bs-placement="bottom"
                                title="Login / Sign Up"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="modal fade" id="authModal" tabindex="-1" aria-labelledby="authModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content p-4">
                <div class="modal-header border-0">
                    <h5 class="modal-title" id="authModalTitle">LOG IN</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body pt-0">

                    <!-- 1. LOG IN FORM -->
                    <div id="login-form">
                        <form action="actions/log_in.php" class="mt-3" method="post">
                            <div class="mb-3">
                                <input type="email" name="email" class="form-control" placeholder="Email Address">
                            </div>
                            <!-- Password Field with Toggle -->
                            <div class="mb-3">
                                <div class="input-group">
                                    <input type="password" name="pass" class="form-control password-input" placeholder="Password"
                                         id="login-password">
                                    <button class="btn btn-secondary show-password-toggle" style="height: 3.1rem;" type="button"
                                        data-target="login-password">
                                        <i class="bi bi-eye-slash-fill"></i>
                                    </button>
                                </div>
                            </div>
                            <button type="submit" name="submit" class="btn btn-primary-custom w-100 mb-3">Log In</button>
                        </form>
                        <div class="text-center small">
                            <p class="text-secondary mb-1">
                                Don't have an account?
                                <span class="link-switch-form" data-target="signup">Sign Up</span>
                            </p>
                            <p class="text-secondary">
                                <span class="link-switch-form" data-target="forgot">Forgot Password?</span>
                            </p>
                        </div>
                    </div>

                    <!-- 2. SIGN UP FORM -->
                    <div id="signup-form">
                        <form action="actions/sign_up.php" class="mt-3" method="post">
                            <div class="mb-3">
                                <input type="text" class="form-control" name="name" placeholder="Full Name" required>
                            </div>
                            <div class="mb-3">
                                <input type="email" class="form-control" name="email" placeholder="Email Address" required>
                            </div>
                            <div class="mb-3">
                                <input type="text" class="form-control" name="key" placeholder="Admin Key" required>
                            </div>
                            <!-- Password Field with Toggle -->
                            <div class="mb-3">
                                <div class="input-group">
                                    <input type="password" class="form-control password-input"
                                        placeholder="Choose Password" name="password" required id="signup-password">
                                    <button class="btn btn-secondary show-password-toggle" style="height: 3.1rem;" type="button"
                                        data-target="signup-password">
                                        <i class="bi bi-eye-slash-fill"></i>
                                    </button>
                                </div>
                            </div>
                            <button type="submit" name="submit" class="btn btn-primary-custom w-100 mb-3">Sign Up</button>
                        </form>
                        <div class="text-center small">
                            <p class="text-secondary">
                                Already have an account?
                                <span class="link-switch-form" data-target="login">Log In</span>
                            </p>
                        </div>
                    </div>

                    <!-- 3. FORGOT PASSWORD FORM -->
                    <div id="forgot-form">
                        <form action="actions/forgot_pass.php" class="mt-3" method="post">
                            <p class="text-secondary small mb-4 text-center">Enter your email address and new password
                                to change your password.</p>
                            <div class="mb-3">
                                <input type="email" name="email" class="form-control" placeholder="Email Address" required>
                            </div>
                            <!-- New Password Field with Toggle -->
                            <div class="mb-3">
                                <div class="input-group">
                                    <input type="password" name="pass" class="form-control password-input"
                                        placeholder="New Password" required id="forgot-new-password">
                                    <button class="btn btn-secondary show-password-toggle" style="height: 3.1rem;" type="button"
                                        data-target="forgot-new-password">
                                        <i class="bi bi-eye-slash-fill"></i>
                                    </button>
                                </div>
                            </div>
                            <button type="submit" name="submit" class="btn btn-primary-custom w-100 mb-3">Confirm Changes</button>
                        </form>
                        <div class="text-center small">
                            <p class="text-secondary">
                                <span class="link-switch-form" data-target="login">Back to Log In</span>
                            </p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>