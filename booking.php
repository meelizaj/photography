<?php
require_once 'header.php'
?>


<div class="container my-5 pt-3">
    <!-- Stepper -->
    <div class="w-100 mx-auto mb-5" style="max-width: 800px;">
        <div class="card bg-white p-4 shadow-lg rounded-3">
            <div class="d-flex justify-content-between align-items-center text-gray-800">
                <div class="d-flex flex-column align-items-center w-20">
                    <div class="step-circle active-step">1</div>
                    <span class="fs-6 mt-1 fw-bold text-dark text-center d-none d-sm-block">Select Package</span>
                </div>
                <div class="step-line bg-secondary"></div>
                <div class="d-flex flex-column align-items-center w-20">
                    <div class="step-circle bg-light text-secondary">2</div>
                </div>
                <div class="step-line bg-secondary"></div>
                <div class="d-flex flex-column align-items-center w-20">
                    <div class="step-circle bg-light text-secondary">3</div>
                </div>
                <div class="step-line bg-secondary"></div>
                <div class="d-flex flex-column align-items-center w-20">
                    <div class="step-circle bg-light text-secondary">4</div>
                </div>
                <div class="step-line bg-secondary"></div>
                <div class="d-flex flex-column align-items-center w-20">
                    <div class="step-circle bg-light text-secondary">5</div>
                </div>
            </div>
        </div>
    </div>

    <!-- Step 1 Content -->
    <div class="w-100 mx-auto" style="max-width: 800px;">
        <h2 class="text-center mb-4 text-white">Select a Package Type</h2>
        <div class="row g-4 p-2" style="margin-bottom: 9rem;">
            <div class="col-12 col-md-6">
                <div class="package-card rounded-3 shadow-lg" onclick="selectPackage('portrait', this)">
                    <img src="assets/images/b portrait.png" class="w-100 h-100 object-fit-cover" style="filter: grayscale(100%);">
                    <div class="package-overlay text-white">PORTRAIT</div>
                </div>
            </div>
            <div class="col-12 col-md-6">
                <div class="package-card rounded-3 shadow-lg" onclick="selectPackage('events', this)">
                    <img src="assets/images/b events.png" class="w-100 h-100 object-fit-cover" style="filter: grayscale(100%);">
                    <div class="package-overlay text-white">EVENTS</div>
                </div>
            </div>
            <div class="col-12 col-md-6">
                <div class="package-card rounded-3 shadow-lg" onclick="selectPackage('events', this)">
                    <img src="assets/images/b specialized.png" class="w-100 h-100 object-fit-cover" style="filter: grayscale(100%);">
                    <div class="package-overlay text-white">SPECIALIZED</div>
                </div>
            </div>
            <div class="col-12 col-md-6">
                <div class="package-card rounded-3 shadow-lg" onclick="selectPackage('events', this)">
                    <img src="assets/images/b themed.png" class="w-100 h-100 object-fit-cover" style="filter: grayscale(100%);">
                    <div class="package-overlay text-white">THEMED</div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Footer Nav -->
<footer class="fixed-bottom p-3 header-bar shadow-sm d-flex justify-content-between align-items-center">
    <button class="btn btn-outline-light opacity-50" disabled>BACK</button>
    <button id="continue-btn" class="btn btn-light fw-semibold px-5" disabled onclick="nextStep()">CONTINUE</button>
</footer>

<script>
    function selectPackage(pkg, element) {
        // Visual selection
        document.querySelectorAll('.package-card').forEach(c => c.classList.remove('selected'));
        element.classList.add('selected');

        // Save to LocalStorage
        localStorage.setItem('booking_package', pkg);

        // Enable Continue
        document.getElementById('continue-btn').disabled = false;
    }

    function nextStep() {
        window.location.href = 'plan.php';
    }

    // Init: Check if already selected
    const storedPkg = localStorage.getItem('booking_package');
    if (storedPkg) {
        document.getElementById('continue-btn').disabled = false;
        // Logic to highlight stored card could go here
    }
</script>
</body>

</html>