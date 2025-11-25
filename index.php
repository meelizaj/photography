<?php
require_once 'header.php';
?>

<header class="hero-section d-flex" id="home">
    <div class="position-absolute w-100 bg-dark opacity-25" style="z-index: 1;"></div>

    <div class="container-fluid d-flex flex-grow-1" style="z-index: 5;">
        <div class="hero-content d-flex flex-column justify-content-center align-items-start text-white col-8 ps-5">
            <h1 class="brand-name-part text-1">APERTURE</h1>
            <h1 class="brand-name-part text-2">SYNDICATE</h1>
            <h1 class="brand-name-part text-3">PHOTOGRAPHY</h1>

            <a href="contact.html"
                class="btn btn-outline-light mt-4 py-2 px-3 rounded-3 d-flex align-items-center fw-semibold text-uppercase">
                <i class="fas fa-camera me-2"></i>
                Schedule a shoot!
            </a>

            <p class="tagline mt-4 fs-5 fst-italic">Turning fleeting moments into timeless memories</p>
        </div>

        <div class="d-flex align-items-center justify-content-end col-4 pe-5">
            <div class="side-images d-flex flex-column gap-3">
                <div class="side-image-item bg-cover bg-center border border-1 border-white shadow-lg opacity-75 grayscale-100 transition-filter"
                    style="width: 200px; height: 200px; background-image: url('assets/images/hero1.jpg'); background-size: cover; background-repeat: no-repeat;">
                </div>
                <div class="side-image-item bg-cover bg-center border border-1 border-white shadow-lg opacity-75 grayscale-100 transition-filter"
                    style="width: 200px; height: 200px; background-image: url('assets/images/hero2.jpg'); background-size: cover; background-repeat: no-repeat;">
                </div>
                <div class="side-image-item bg-cover bg-center border border-1 border-white shadow-lg opacity-75 grayscale-100 transition-filter"
                    style="width: 200px; height: 200px; background-image: url('assets/images/hero3.jpg'); background-size: cover; background-repeat: no-repeat;">
                </div>
            </div>
        </div>
    </div>
</header>

<section class="welcome text-center">
    <div class="container">
        <h1 class="display-4 fw-light text-uppercase">Welcome!</h1>
        <p class="lead mb-4">Timeless Frames. Love Stories. Art as a Fine Art.</p>
        <blockquote class="blockquote border-0">
            <p class="mb-0 fs-3 fw-bold">Bold. Authentic. Unforgettable. We turn fleeting moments into permanent
                memories that speak louder than words.</p>
        </blockquote>
        <a href="#" class="btn btn-outline-light btn-lg mt-4">VIEW OUR WORK</a>
    </div>
</section>

<section class="category-grid py-5 bg-dark text-white">
    <div class="container">
        <h2 class="text-center mb-5 text-uppercase">Categories</h2>

        <div id="categoryCarousel" class="carousel slide" data-bs-ride="carousel">

            <div class="carousel-indicators">
                <button type="button" data-bs-target="#categoryCarousel" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#categoryCarousel" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
            </div>

            <div class="carousel-inner">

                <div class="carousel-item active">
                    <div class="row g-3">

                        <div class="col-6 col-md-3">
                            <div class="card bg-dark text-white border-0">
                                <img src="assets/images/events1.jpg" class="card-img"
                                    style="height: 250px; object-fit: cover;">

                                <div class="card-img-overlay d-flex flex-column justify-content-end p-2"
                                    style="background: rgba(0, 0, 0, 0.4);">
                                    <h5 class="card-title text-uppercase mb-0">Events</h5>
                                </div>
                            </div>
                        </div>

                        <div class="col-6 col-md-3">
                            <div class="card bg-dark text-white border-0">
                                <img src="assets/images/portrait1.jpg" class="card-img"
                                    style="height: 250px; object-fit: cover;">

                                <div class="card-img-overlay d-flex flex-column justify-content-end p-2"
                                    style="background: rgba(0, 0, 0, 0.4);">
                                    <h5 class="card-title text-uppercase mb-0">Portraits</h5>
                                </div>
                            </div>
                        </div>

                        <div class="col-6 col-md-3">
                            <div class="card bg-dark text-white border-0">
                                <img src="assets/images/specialized1.jpg" class="card-img"
                                    style="height: 250px; object-fit: cover;">

                                <div class="card-img-overlay d-flex flex-column justify-content-end p-2"
                                    style="background: rgba(0, 0, 0, 0.4);">
                                    <h5 class="card-title text-uppercase mb-0">Specialized Services</h5>
                                </div>
                            </div>
                        </div>

                        <div class="col-6 col-md-3">
                            <div class="card bg-dark text-white border-0">
                                <img src="assets/images/themed1.jpg" class="card-img"
                                    style="height: 250px; object-fit: cover;">

                                <div class="card-img-overlay d-flex flex-column justify-content-end p-2"
                                    style="background: rgba(0, 0, 0, 0.4);">
                                    <h5 class="card-title text-uppercase mb-0">Themed Photo Sessions</h5>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="carousel-item active">
                    <div class="row g-3">

                        <div class="col-6 col-md-3">
                            <div class="card bg-dark text-white border-0">
                                <img src="assets/images/events2.jpg" class="card-img"
                                    style="height: 250px; object-fit: cover;">

                                <div class="card-img-overlay d-flex flex-column justify-content-end p-2"
                                    style="background: rgba(0, 0, 0, 0.4);">
                                    <h5 class="card-title text-uppercase mb-0">Events</h5>
                                </div>
                            </div>
                        </div>

                        <div class="col-6 col-md-3">
                            <div class="card bg-dark text-white border-0">
                                <img src="assets/images/portrait2.jpg" class="card-img"
                                    style="height: 250px; object-fit: cover;">

                                <div class="card-img-overlay d-flex flex-column justify-content-end p-2"
                                    style="background: rgba(0, 0, 0, 0.4);">
                                    <h5 class="card-title text-uppercase mb-0">Portraits</h5>
                                </div>
                            </div>
                        </div>

                        <div class="col-6 col-md-3">
                            <div class="card bg-dark text-white border-0">
                                <img src="assets/images/specialized2.jpg" class="card-img"
                                    style="height: 250px; object-fit: cover;">

                                <div class="card-img-overlay d-flex flex-column justify-content-end p-2"
                                    style="background: rgba(0, 0, 0, 0.4);">
                                    <h5 class="card-title text-uppercase mb-0">Specialized Services</h5>
                                </div>
                            </div>
                        </div>

                        <div class="col-6 col-md-3">
                            <div class="card bg-dark text-white border-0">
                                <img src="assets/images/themed2.jpg" class="card-img"
                                    style="height: 250px; object-fit: cover;">

                                <div class="card-img-overlay d-flex flex-column justify-content-end p-2"
                                    style="background: rgba(0, 0, 0, 0.4);">
                                    <h5 class="card-title text-uppercase mb-0">Themed Photo Sessions</h5>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#categoryCarousel"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#categoryCarousel"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
</section>

<section class="section-separator">
    <h2 class="display-6 fw-bold text-uppercase">Let's Capture Moments of Your Life.</h2>
</section>

<section class="py-5" style="background-color: #DBD5D5;">
    <div class="container">
        <h2 class="text-center mb-5 text-uppercase">Services</h2>

        <div class="row g-5 mb-5 align-items-center">
            <div class="col-md-6">
                <div class="row g-2">
                    <div class="col-6"><img src="assets/images/portraitp1.jpg" class="img-fluid rounded shadow"
                            style="width: 262px; height: 391px;"></div>
                    <div class="col-6"><img src="assets/images/portraitp2.jpg" class="img-fluid rounded shadow"
                            style="width: 262px; height: 326px;"></div>
                </div>
            </div>
            <div class="col-md-6">
                <h3 class="text-uppercase">Portrait</h3>
                <p class="lead">Portraits That Tell Your Story.</p>
                <p>Whether it’s a timeless solo shot, a heartwarming family portrait, a proud graduation moment, or
                    a sleek studio headshot—we capture you at your best. Professional, personalized, and
                    picture-perfect. Book your session today and let every frame speak for itself.</p>
                <a href="#" class="btn btn-dark mt-3 text-uppercase">Book Now</a>
            </div>
        </div>


        <div class="row g-5 mb-5 align-items-center">
            <div class="col-md-6 order-md-2">
                <div class="row g-2">
                    <div class="col-6"><img src="assets/images/eventsp1.jpg" class="img-fluid rounded shadow"
                            style="width: 262px; height: 391px;" alt="Events Photography"></div>
                    <div class="col-6"><img src="assets/images/eventsp2.jpg" class="img-fluid rounded shadow"
                            style="width: 262px; height: 326px;" alt="Events Photography"></div>
                </div>
            </div>
            <div class="col-md-6 order-md-1">
                <h3 class="text-uppercase">Events</h3>
                <p class="lead">Cherish Every Moment</p>
                <p>Whether it’s the romance of your wedding day or the fun of a birthday celebration, we’re here to
                    capture every smile, laugh, and unforgettable detail. With a creative eye and a passion for
                    storytelling, we turn your special moments into lasting memories.</p>
                <a href="#" class="btn btn-dark mt-3 text-uppercase">Book Now</a>
            </div>
        </div>
    </div>
</section>

<section class="py-5" style="background-color: #CAC2C2;">
    <div class="container">

        <div class="row g-5 mb-5 align-items-center">
            <div class="col-md-6">
                <div class="row g-2">
                    <div class="col-6"><img src="assets/images/portraitp1.jpg" class="img-fluid rounded shadow"
                            style="width: 262px; height: 326px;"></div>
                    <div class="col-6"><img src="assets/images/portraitp2.jpg" class="img-fluid rounded shadow"
                            style="width: 262px; height: 391px;"></div>
                </div>
            </div>
            <div class="col-md-6">
                <h3 class="text-uppercase">Portrait</h3>
                <p class="lead">Portraits That Tell Your Story.</p>
                <p>Whether it’s a timeless solo shot, a heartwarming family portrait, a proud graduation moment, or
                    a sleek studio headshot—we capture you at your best. Professional, personalized, and
                    picture-perfect. Book your session today and let every frame speak for itself.</p>
                <a href="#" class="btn btn-dark mt-3 text-uppercase">Book Now</a>
            </div>
        </div>


        <div class="row g-5 mb-5 align-items-center">
            <div class="col-md-6 order-md-2">
                <div class="row g-2">
                    <div class="col-6"><img src="assets/images/eventsp1.jpg" class="img-fluid rounded shadow"
                            style="width: 262px; height: 326px;" alt="Events Photography"></div>
                    <div class="col-6"><img src="assets/images/eventsp2.jpg" class="img-fluid rounded shadow"
                            style="width: 262px; height: 391px;" alt="Events Photography"></div>
                </div>
            </div>
            <div class="col-md-6 order-md-1">
                <h3 class="text-uppercase">Events</h3>
                <p class="lead">Cherish Every Moment</p>
                <p>Whether it’s the romance of your wedding day or the fun of a birthday celebration, we’re here to
                    capture every smile, laugh, and unforgettable detail. With a creative eye and a passion for
                    storytelling, we turn your special moments into lasting memories.</p>
                <a href="#" class="btn btn-dark mt-3 text-uppercase">Book Now</a>
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

        <a href="#contact" class="btn btn-outline-light btn-lg text-uppercase fw-bold px-5">
            Get in Touch
        </a>
    </div>
</section>

<?php
require_once 'footer.php';
?>