<?php
require_once 'header.php';
?>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap');

    body {
        font-family: 'Inter', sans-serif;
        background-color: #333;
        color: #e5e5e5;
        padding-bottom: 75px;
    }

    .header-bar {
        background-color: #2b2b2b;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.2);
    }

    .form-control,
    .form-select {
        background-color: #444;
        color: #fff;
        border: 1px solid #666;
        padding-left: 0.5rem;
    }

    .summary-box {
        background-color: #444;
    }

    /* Stepper Styles */
    .step-circle {
        width: 28px;
        height: 28px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 14px;
        font-weight: 600;
    }

    .active-step {
        background-color: #e5e5e5;
        color: #333;
        border: 4px solid #6c757d;
    }

    .completed-step {
        background-color: #6b6b6b;
        color: #e5e5e5;
    }

    .step-line {
        height: 2px;
        background-color: #6b6b6b;
        flex-grow: 1;
    }
</style>

<div class="container my-5 pt-3">
    <!-- Stepper (Step 3 Active) -->
    <div class="w-100 mx-auto mb-5" style="max-width: 800px;">
        <div class="card bg-white p-4 shadow-lg rounded-3">
            <div class="d-flex justify-content-between align-items-center text-gray-800">
                <div class="d-flex flex-column align-items-center w-20">
                    <div class="step-circle completed-step">✓</div>
                </div>
                <div class="step-line"></div>
                <div class="d-flex flex-column align-items-center w-20">
                    <div class="step-circle completed-step">✓</div>
                </div>
                <div class="step-line"></div>
                <div class="d-flex flex-column align-items-center w-20">
                    <div class="step-circle active-step">3</div>
                    <span class="fs-6 mt-1 fw-bold text-dark text-center d-none d-sm-block">Details</span>
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

    <h2 class="text-center mb-4 text-white">Provide Your Booking Details</h2>
    <form action="actions/booking.php" id="details-form" method="post">
        <div class="row g-4 justify-content-center">
            <div class="col-12 col-md-7">
                <div class="card p-4 rounded-3 summary-box h-100">
                    <div class="mb-3">
                        <label class="form-label text-secondary">Full Name</label>
                        <input type="text" class="form-control" name="name" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label text-secondary">Email</label>
                        <input type="email" class="form-control" name="email" required>
                    </div>
                    <div class="row">
                        <div class="col-6 mb-3">
                            <label class="form-label text-secondary">Date</label>
                            <input type="date" class="form-control" name="date" required>
                        </div>
                        <div class="col-6 mb-3">
                            <label class="form-label text-secondary">Time</label>
                            <input type="time" class="form-control" name="time" required>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Summary Sidebar -->
            <div class="col-12 col-md-4">
                <div class="card p-4 rounded-3 summary-box">
                    <h5 class="text-white border-bottom pb-3 mb-3">Summary</h5>
                    <p class="text-secondary mb-1">Package: <strong class="text-white" id="summary-pkg-display">...</strong></p>
                    <p class="text-secondary mb-1">Plan: <strong class="text-white" id="summary-plan-display">...</strong></p>
                    <p class="text-secondary">Est. Price: <strong class="text-white" id="summary-price-display">...</strong></p>

                    <!-- Hidden fields for submission -->
                    <input type="hidden" name="package" id="summary-pkg" value="">
                    <input type="hidden" name="plan" id="summary-plan" value="">
                    <input type="hidden" name="price" id="summary-price" value="">
                </div>
                <div class="card p-4 mt-3 rounded-3 summary-box">
                    <p class="text-white" style="font-size: 0.8rem;">Click 'Yes' to save your booking, 'No' if you do not want to save it, and then click the 'Continue' button to proceed.</p>
                    <button type="submit" name="submit" class="btn btn-secondary mb-2">Yes</button>
                    <a href="index.php" class="btn btn-secondary text-decoration-none">No</a>
                </div>
            </div>
        </div>
    </form>

</div>


<script>
    // Load summary
    const pkg = (localStorage.getItem('booking_package') || 'N/A').toUpperCase();
    const plan = (localStorage.getItem('booking_plan') || 'N/A').toUpperCase();
    const price = localStorage.getItem('booking_price') || '0';

    // Update visible elements
    document.getElementById('summary-pkg-display').textContent = pkg;
    document.getElementById('summary-plan-display').textContent = plan;
    document.getElementById('summary-price-display').textContent = '$' + price;

    // Update hidden inputs
    document.getElementById('summary-pkg').value = pkg;
    document.getElementById('summary-plan').value = plan;
    document.getElementById('summary-price').value = price;

    function saveAndContinue() {
        const name = document.getElementById('name').value;
        const email = document.getElementById('email').value;
        const date = document.getElementById('date').value;
        const time = document.getElementById('time').value;

        if (!name || !email || !date || !time) {
            alert("Please fill in all fields");
            return;
        }

        // Save to localStorage
        localStorage.setItem('booking_name', name);
        localStorage.setItem('booking_email', email);
        localStorage.setItem('booking_date', date);
        localStorage.setItem('booking_time', time);

        // Submit the form
        document.getElementById('details-form').submit();
    }
</script>
</body>

</html>