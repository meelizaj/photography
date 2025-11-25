<?php
require_once 'header.php'
?>

<div class="container-fluid p-0">
    <div class="row g-0">

        <div class="col-1 d-none d-md-flex justify-content-center bg-none" style="position: absolute; z-index: 1;">
            <div class="d-flex flex-column sidebar-title pt-5 mt-5">
                <span>P</span>
                <span>O</span>
                <span>R</span>
                <span>T</span>
                <span>F</span>
                <span>O</span>
                <span>L</span>
                <span>I</span>
                <span>O</span>
            </div>
        </div>


        <section class="bg-secondary text-center pt-5 pb-0 position-relative" style="background-image: url('assets/images/portfolio\ hero.png'); min-height: 350px;">
            <div class="container pt-5 mt-4">
                <h2 class="portfolio-hero-text text-uppercase text-dark fw-bold mb-4 px-5">
                    We elevate vintage, bringing the best of <br> the past to the modern
                </h2>


            </div>
        </section>

        <section class="portfolio-grid-wrapper">

            <div class="portfolio-bg-watermark"></div>

            <div class="container" style="position: relative; z-index: 1;">
                <div class="row g-4 justify-content-center">

                    <div class="col-md-6">
                        <div class="portfolio-card">
                            <img src="assets/images/portraitp1.jpg">
                            <div class="portfolio-overlay">
                                <h3 class="category-title">Portrait</h3>
                                <p class="category-subtitle">Individual / Group</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="portfolio-card">
                            <img src="assets/images/events2.jpg">
                            <div class="portfolio-overlay">
                                <h3 class="category-title">Events</h3>
                                <p class="category-subtitle">Debut / Graduation / Wedding</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="portfolio-card">
                            <img src="assets/images/specialized2.jpg">
                            <div class="portfolio-overlay">
                                <h3 class="category-title">Specialized</h3>
                                <p class="category-subtitle">Pet / Newborn & Maternity</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="portfolio-card">
                            <img src="assets/images/themed2.jpg">
                            <div class="portfolio-overlay">
                                <h3 class="category-title">Themed</h3>
                                <p class="category-subtitle">Black & White / Film</p>
                            </div>
                        </div>
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
    </div>
</div>

<?php
require_once 'footer.php';
?>