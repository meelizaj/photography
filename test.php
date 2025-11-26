<?php
require_once 'header.php';
?>

<!-- Custom Styles and Responsive Adjustments for Portfolio Page -->
<style>
    /* ---------------- Sidebar Styles ---------------- */
    .sidebar-title {
        writing-mode: vertical-rl;
        transform: rotate(180deg);
        font-size: 1.5rem;
        font-weight: 300;
        letter-spacing: 0.5rem;
        color: #333;
        /* Dark gray */
        position: fixed;
        left: 0;
        top: 0;
        height: 100vh;
        z-index: 10;
        padding-left: 20px;
    }

    /* Hide sidebar on small screens */
    @media (max-width: 767.98px) {
        .sidebar-title {
            display: none !important;
        }
    }

    /* ---------------- Hero Section Styles ---------------- */
    .portfolio-hero-text {
        font-family: 'Times New Roman', serif;
        font-size: clamp(1.5rem, 5vw, 2.5rem);
        /* Responsive font size */
        line-height: 1.3;
        color: #333;
        text-shadow: 1px 1px 2px rgba(255, 255, 255, 0.8);
    }

    .portfolio-hero-section {
        background-image: url('assets/images/portfolio hero.png');
        background-size: cover;
        background-position: center;
        background-color: #f8f9fa;
        min-height: 450px;
        /* Increased height */
    }

    /* ---------------- Grid & Card Styles ---------------- */
    .portfolio-grid-wrapper {
        position: relative;
        padding: 5rem 0;
        background-color: #eee;
    }

    .portfolio-bg-watermark {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        font-size: 12rem;
        font-weight: 900;
        color: rgba(0, 0, 0, 0.05);
        z-index: 0;
        pointer-events: none;
        user-select: none;
        text-transform: uppercase;
        line-height: 1;
    }

    /* Portfolio Card Styling */
    .portfolio-card {
        position: relative;
        overflow: hidden;
        border-radius: 8px;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        cursor: pointer;
        transition: transform 0.3s ease-in-out;
    }

    .portfolio-card:hover {
        transform: scale(1.03);
    }

    .portfolio-card img {
        width: 100%;
        height: 450px;
        /* Fixed height for visual consistency in the grid */
        object-fit: cover;
        display: block;
        transition: opacity 0.3s;
    }

    .portfolio-overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.6);
        color: white;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        opacity: 0;
        transition: opacity 0.3s ease-in-out;
        padding: 20px;
        text-align: center;
    }

    .portfolio-card:hover .portfolio-overlay {
        opacity: 1;
    }

    .category-title {
        font-size: 2.5rem;
        font-weight: 700;
        text-transform: uppercase;
        margin-bottom: 5px;
    }

    .category-subtitle {
        font-size: 1.1rem;
        font-weight: 300;
    }

    /* ---------------- Modal & Carousel Styles ---------------- */
    .modal-content {
        background-color: #1a1a1a;
        border: none;
        border-radius: 0;
    }

    .modal-header {
        border-bottom: none;
        padding-bottom: 0;
    }

    .modal-title {
        color: white;
        font-weight: 700;
        text-transform: uppercase;
    }

    .btn-close {
        filter: invert(1);
        /* Makes the close button white */
    }

    .carousel-item img {
        height: 80vh;
        /* Set a height relative to the viewport for large images */
        width: auto;
        max-width: 100%;
        object-fit: contain;
        /* Ensure the image fits within the modal without cropping */
        margin: 0 auto;
        display: block;
    }

    .carousel-control-prev,
    .carousel-control-next {
        width: 5%;
        /* Smaller control area */
    }

    .carousel-control-prev-icon,
    .carousel-control-next-icon {
        background-color: rgba(0, 0, 0, 0.5);
        border-radius: 50%;
        padding: 1rem;
    }


    /* ---------------- CTA Parallax Styles ---------------- */
    .cta-parallax {
        background: url('assets/images/last.png') no-repeat center center/cover;
        min-height: 350px;
        display: flex;
        align-items: center;
        background-color: rgba(0, 0, 0, 0.6);
        background-blend-mode: overlay;
        background-attachment: fixed;
    }
</style>


<div class="container-fluid p-0">
    <div class="row g-0">

        <!-- Fixed Sidebar Title -->
        <div class="col-1 d-none d-md-flex justify-content-center bg-none">
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

        <!-- Hero Section -->
        <section class="portfolio-hero-section text-center pt-5 pb-0 position-relative">
            <div class="container pt-5 mt-4">
                <h2 class="portfolio-hero-text text-uppercase fw-bold mb-4 px-5">
                    We elevate vintage, bringing the best of <br> the past to the modern
                </h2>
            </div>
        </section>

        <!-- Portfolio Grid -->
        <section class="portfolio-grid-wrapper">

            <!-- Watermark -->
            <div class="portfolio-bg-watermark">
                GALLERY
            </div>

            <div class="container" style="position: relative; z-index: 1;">
                <div class="row g-4 justify-content-center">

                    <!-- Portrait Card -->
                    <div class="col-md-6 col-lg-6" data-category="Portrait">
                        <div class="portfolio-card">
                            <img src="assets/images/portraitp1.jpg" alt="Portrait Category">
                            <div class="portfolio-overlay">
                                <h3 class="category-title">Portrait</h3>
                                <p class="category-subtitle">Individual / Group</p>
                            </div>
                        </div>
                    </div>

                    <!-- Events Card -->
                    <div class="col-md-6 col-lg-6" data-category="Events">
                        <div class="portfolio-card">
                            <img src="assets/images/events2.jpg" alt="Events Category">
                            <div class="portfolio-overlay">
                                <h3 class="category-title">Events</h3>
                                <p class="category-subtitle">Debut / Graduation / Wedding</p>
                            </div>
                        </div>
                    </div>

                    <!-- Specialized Card -->
                    <div class="col-md-6 col-lg-6" data-category="Specialized">
                        <div class="portfolio-card">
                            <img src="assets/images/specialized2.jpg" alt="Specialized Category">
                            <div class="portfolio-overlay">
                                <h3 class="category-title">Specialized</h3>
                                <p class="category-subtitle">Pet / Newborn & Maternity</p>
                            </div>
                        </div>
                    </div>

                    <!-- Themed Card -->
                    <div class="col-md-6 col-lg-6" data-category="Themed">
                        <div class="portfolio-card">
                            <img src="assets/images/themed2.jpg" alt="Themed Category">
                            <div class="portfolio-overlay">
                                <h3 class="category-title">Themed</h3>
                                <p class="category-subtitle">Black & White / Film</p>
                            </div>
                        </div>
                    </div>

                </div>

                <!-- New "View All" Button -->
                <div class="row mt-5">
                    <div class="col-12 text-center">
                        <button id="viewAllBtn" class="btn btn-dark btn-lg text-uppercase fw-bold px-5 py-3 shadow-lg">
                            <i class="fas fa-th me-2"></i> View All Portfolio Images
                        </button>
                    </div>
                </div>
            </div>
        </section>

        <!-- CTA Section -->
        <section class="cta-parallax text-center text-white">
            <div class="container">
                <h2 class="display-3 fw-light mb-4">Your Story Starts Here.</h2>

                <p class="lead mb-5 mx-auto" style="max-width: 700px;">
                    Let's turn your fleeting moments into timeless works of art. Contact us today for custom quotes and
                    availability.
                </p>

                <a href="contact.html" class="btn btn-outline-light btn-lg text-uppercase fw-bold px-5">
                    Get in Touch
                </a>
            </div>
        </section>
    </div>
</div>

<!-- Modal Structure for Gallery -->
<div class="modal fade" id="portfolioModal" tabindex="-1" aria-labelledby="portfolioModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="portfolioModalLabel"></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-0">
                <div id="imageCarousel" class="carousel slide" data-bs-ride="carousel">
                    <!-- Carousel Inner will be populated by JavaScript -->
                    <div class="carousel-inner" id="carouselInner">
                        <!-- Images go here -->
                    </div>

                    <!-- Carousel Controls -->
                    <button class="carousel-control-prev" type="button" data-bs-target="#imageCarousel" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#imageCarousel" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- JavaScript for Gallery Functionality -->
<script>
    // Image data structure (using a mix of actual and placeholder images)
    const galleryData = {
        Portrait: [{
                path: 'assets/images/portraitp1.jpg',
                alt: 'Portrait Session 1',
                category: 'Portrait'
            },
            {
                path: 'assets/images/portraitp2.jpg',
                alt: 'Portrait Session 2',
                category: 'Portrait'
            },
            {
                path: 'assets/images/portrait1.jpg',
                alt: 'Portrait Grid Image 1',
                category: 'Portrait'
            },
            {
                path: 'https://placehold.co/800x600/2980b9/ffffff?text=Portrait+3',
                alt: 'Portrait Session 3',
                category: 'Portrait'
            },
            {
                path: 'https://placehold.co/600x900/1abc9c/ffffff?text=Portrait+4',
                alt: 'Portrait Session 4',
                category: 'Portrait'
            },
            {
                path: 'https://placehold.co/1000x700/f39c12/ffffff?text=Portrait+5',
                alt: 'Portrait Session 5',
                category: 'Portrait'
            },
        ],
        Events: [{
                path: 'assets/images/eventsp1.jpg',
                alt: 'Event Coverage 1',
                category: 'Events'
            },
            {
                path: 'assets/images/eventsp2.jpg',
                alt: 'Event Coverage 2',
                category: 'Events'
            },
            {
                path: 'assets/images/events2.jpg',
                alt: 'Events Grid Image 1',
                category: 'Events'
            },
            {
                path: 'https://placehold.co/900x600/e67e22/ffffff?text=Event+3',
                alt: 'Event Coverage 3',
                category: 'Events'
            },
            {
                path: 'https://placehold.co/600x800/e74c3c/ffffff?text=Event+4',
                category: 'Events'
            },
            {
                path: 'https://placehold.co/1000x600/9b59b6/ffffff?text=Event+5',
                alt: 'Event Coverage 5',
                category: 'Events'
            },
        ],
        Specialized: [{
                path: 'assets/images/specialized1.jpg',
                alt: 'Specialized Shoot 1',
                category: 'Specialized'
            },
            {
                path: 'assets/images/specialized2.jpg',
                alt: 'Specialized Shoot 2',
                category: 'Specialized'
            },
            {
                path: 'https://placehold.co/700x700/9b59b6/ffffff?text=Specialized+3',
                alt: 'Specialized Shoot 3',
                category: 'Specialized'
            },
            {
                path: 'https://placehold.co/800x600/34495e/ffffff?text=Specialized+4',
                alt: 'Specialized Shoot 4',
                category: 'Specialized'
            },
            {
                path: 'https://placehold.co/900x900/16a085/ffffff?text=Specialized+5',
                alt: 'Specialized Shoot 5',
                category: 'Specialized'
            },
        ],
        Themed: [{
                path: 'assets/images/themed1.jpg',
                alt: 'Themed Session 1',
                category: 'Themed'
            },
            {
                path: 'assets/images/themed2.jpg',
                alt: 'Themed Session 2',
                category: 'Themed'
            },
            {
                path: 'https://placehold.co/800x600/f1c40f/ffffff?text=Themed+3',
                alt: 'Themed Session 3',
                category: 'Themed'
            },
            {
                path: 'https://placehold.co/600x900/95a5a6/ffffff?text=Themed+4',
                alt: 'Themed Session 4',
                category: 'Themed'
            },
            {
                path: 'https://placehold.co/1200x800/d35400/ffffff?text=Themed+5',
                alt: 'Themed Session 5',
                category: 'Themed'
            },
        ]
    };

    // Global function to handle modal display
    function showGalleryModal(title, images) {
        const modalElement = document.getElementById('portfolioModal');
        const modalTitle = document.getElementById('portfolioModalLabel');
        const carouselInner = document.getElementById('carouselInner');
        const portfolioModal = new bootstrap.Modal(modalElement);

        if (!images || images.length === 0) {
            console.error('No images to display.');
            return;
        }

        modalTitle.textContent = title.toUpperCase() + ' GALLERY';
        carouselInner.innerHTML = '';

        images.forEach((img, index) => {
            const carouselItem = document.createElement('div');
            carouselItem.className = 'carousel-item text-center' + (index === 0 ? ' active' : '');

            const imgElement = document.createElement('img');
            imgElement.src = img.path;
            // Display the category name in the alt text for "View All" mode
            imgElement.alt = img.alt + (img.category ? ` (${img.category})` : '');
            imgElement.className = 'img-fluid';

            carouselItem.appendChild(imgElement);
            carouselInner.appendChild(carouselItem);
        });

        portfolioModal.show();
    }


    document.addEventListener('DOMContentLoaded', () => {
        const portfolioCards = document.querySelectorAll('.portfolio-card');
        const viewAllBtn = document.getElementById('viewAllBtn');

        // Event listener for individual category cards
        portfolioCards.forEach(card => {
            card.addEventListener('click', (e) => {
                const categoryDiv = e.currentTarget.closest('[data-category]');
                if (!categoryDiv) return;

                const category = categoryDiv.getAttribute('data-category');
                const images = galleryData[category];

                showGalleryModal(category, images);
            });
        });

        // Event listener for the "View All" button
        viewAllBtn.addEventListener('click', () => {
            // Aggregate all images from all categories
            let allImages = [];
            for (const category in galleryData) {
                // The images already have a 'category' property added in the data structure
                allImages = allImages.concat(galleryData[category]);
            }

            // Shuffle the array to mix up categories (optional but nice for "View All")
            for (let i = allImages.length - 1; i > 0; i--) {
                const j = Math.floor(Math.random() * (i + 1));
                [allImages[i], allImages[j]] = [allImages[j], allImages[i]];
            }

            showGalleryModal('All Categories', allImages);
        });
    });
</script>

<?php
require_once 'footer.php';
?>