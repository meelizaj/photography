<?php
require_once 'header.php';
?>

<header class="service-header">
    <div class="container">
        <div class="row align-items-center g-5">

            <div class="col-lg-6 order-lg-1 order-2">
                <div class="header-content">
                    <h1 class="display-5 text-uppercase fw-bold mb-4">Our Services</h1>
                    <p class="lead">We capture more than just moments—we preserve emotions, stories, and memories
                        that last a lifetime. From portraits that reveal your true essence, to weddings and
                        celebrations filled with love, we frame every detail of your journey. We are passionate
                        about
                        turning fleeting moments into <strong>timeless keepsakes</strong>—your story, beautifully
                        told through
                        light and shadow.</p>
                </div>
            </div>

            <div class="col-lg-6 order-lg-2 order-1 mb-4 mb-lg-0">
                <img src="assets/images/services hero.png" alt="Our Services Lens"
                    class="img-fluid rounded shadow-lg w-100" style="object-fit: cover; min-height: 400px;">
            </div>

        </div>
    </div>
</header>

<section id="packages" class="package-section">
    <div class="container">
        <h2 class="display-6 fw-bold text-uppercase mb-5">Packages</h2>

        <div class="row g-4 justify-content-center">

            <div class="col-md-4 col-sm-6">
                <div class="package-card d-flex flex-column">
                    <h3 class="text-uppercase fw-normal mb-3">Lite</h3>
                    <ul class="list-unstyled mb-4 text-start small">
                        <li><i class="bi bi-clock me-2"></i> 1 hour shooting</li>
                        <li><i class="bi bi-image me-2"></i> 50 retouched photos</li>
                        <li><i class="bi bi-calendar-check me-2"></i> Delivery in 2 weeks</li>
                    </ul>
                    <p class="display-6 fw-bold mb-4">60$</p>
                    <a href="booking.php" class="btn btn-outline-light mt-auto text-uppercase">Get</a>
                </div>
            </div>

            <div class="col-md-4 col-sm-6">
                <div class="package-card d-flex flex-column">
                    <h3 class="text-uppercase fw-normal mb-3">Standard</h3>
                    <ul class="list-unstyled mb-4 text-start small">
                        <li><i class="bi bi-clock me-2"></i> 2 hours shooting</li>
                        <li><i class="bi bi-image me-2"></i> 100 retouched photos</li>
                        <li><i class="bi bi-calendar-check me-2"></i> Delivery in 1 week</li>
                    </ul>
                    <p class="display-6 fw-bold mb-4">90$</p>
                    <a href="booking.php" class="btn btn-outline-light mt-auto text-uppercase">Get</a>
                </div>
            </div>

            <div class="col-md-4 col-sm-6">
                <div class="package-card d-flex flex-column">
                    <h3 class="text-uppercase fw-normal mb-3">Extended</h3>
                    <ul class="list-unstyled mb-4 text-start small">
                        <li><i class="bi bi-clock me-2"></i> 3 hours shooting</li>
                        <li><i class="bi bi-image me-2"></i> 150 retouched photos</li>
                        <li><i class="bi bi-calendar-check me-2"></i> Delivery in 2 weeks</li>
                    </ul>
                    <p class="display-6 fw-bold mb-4">150$</p>
                    <a href="booking.php" class="btn btn-outline-light mt-auto text-uppercase">Get</a>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="process" class="process-section">
    <div class="row g-0">

        <div class="col-lg-6 d-none d-lg-block process-image-col">
            <div class="p-5">
                <h2 class="text-secondary text-uppercase display-4 fw-bold">Our Process</h2>
            </div>
        </div>

        <div class="col-lg-6 process-text-col">
            <h2 class="text-uppercase display-4 fw-bold d-lg-none mb-5">Our Process</h2>

            <div class="process-step d-flex justify-content-between align-items-center">
                <div>
                    <h4 class="mb-1 text-uppercase">Acquaintance</h4>
                    <p class="small text-white mb-0">Initial meeting or correspondence to know each other better and
                        discuss the collaboration.</p>
                </div>
                <span class="step-number">01 /</span>
            </div>

            <div class="process-step d-flex justify-content-between align-items-center">
                <div>
                    <h4 class="mb-1 text-uppercase">Briefing</h4>
                    <p class="small text-white mb-0">We will finalize on the selected package you want and how many
                        images will be retouched.</p>
                </div>
                <span class="step-number">02 /</span>
            </div>

            <div class="process-step d-flex justify-content-between align-items-center">
                <div>
                    <h4 class="mb-1 text-uppercase">Shooting</h4>
                    <p class="small text-white mb-0">The session as the photos are created based on the agreed upon
                        details.</p>
                </div>
                <span class="step-number">03 /</span>
            </div>

            <div class="process-step d-flex justify-content-between align-items-center">
                <div>
                    <h4 class="mb-1 text-uppercase">Delivery</h4>
                    <p class="small text-white mb-0">Discussion of shoot details, time & decoration, payment steps,
                        etc.</p>
                </div>
                <span class="step-number">04 /</span>
            </div>

        </div>
    </div>
</section>

<section class="cta-parallax text-center text-white">
    <div class="container">
        <h2 class="display-3 fw-light mb-4">Your Story Starts Here.</h2>

        <p class="lead mb-5 mx-auto" style="max-width: 700px;">
            Let's turn your fleeting moments into timeless works of art. Contact us today for custom quotes and
            availability.
        </p>

        <a href="contact_us.php" class="btn btn-outline-light btn-lg text-uppercase fw-bold px-5">
            Get in Touch
        </a>
    </div>
</section>

<?php 
    require_once 'footer.php';
?>