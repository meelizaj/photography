const galleryData = {
    Portrait: [{
        path: 'assets/images/por7.png',
        alt: 'Portrait Session 1',
        category: 'Portrait'
    },
    {
        path: 'assets/images/por4.png',
        alt: 'Portrait Session 2',
        category: 'Portrait'
    },
    {
        path: 'assets/images/por6.png',
        alt: 'Portrait Grid Image 1',
        category: 'Portrait'
    },
    {
        path: 'assets/images/por1.png',
        alt: 'Portrait Session 3',
        category: 'Portrait'
    },
    {
        path: 'assets/images/por2.png',
        alt: 'Portrait Session 4',
        category: 'Portrait'
    },
    {
        path: 'assets/images/por3.png',
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
        path: 'assets/images/eve1.png',
        alt: 'Event Coverage 3',
        category: 'Events'
    },
    {
        path: 'assets/images/eve2.png',
        category: 'Events'
    },
    {
        path: 'assets/images/eve3.png',
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
        path: 'assets/images/spe1.png',
        alt: 'Specialized Shoot 3',
        category: 'Specialized'
    },
    {
        path: 'assets/images/spe2.png',
        alt: 'Specialized Shoot 4',
        category: 'Specialized'
    },
    {
        path: 'assets/images/spe3.png',
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
        path: 'assets/images/the1.png',
        alt: 'Themed Session 3',
        category: 'Themed'
    },
    {
        path: 'assets/images/the2.png',
        alt: 'Themed Session 4',
        category: 'Themed'
    },
    {
        path: 'assets/images/the3.png',
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