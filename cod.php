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

        .cod-option {
            background-color: #555;
            border: 2px solid #fff;
            padding: 1.5rem;
            cursor: pointer;
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
                        <div class="step-circle completed-step">✓</div>
                    </div>
                    <div class="step-line"></div>
                    <div class="d-flex flex-column align-items-center w-20">
                        <div class="step-circle active-step">4</div>
                        <span class="fs-6 mt-1 fw-bold text-dark text-center d-none d-sm-block">Payment</span>
                    </div>
                    <div class="step-line bg-secondary"></div>
                    <div class="d-flex flex-column align-items-center w-20">
                        <div class="step-circle bg-light text-secondary">5</div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row g-4 justify-content-center">
            <div class="col-12 col-md-7">
                <h4 class="text-white mb-3">Payment Method</h4>
                <div class="cod-option rounded-3 shadow-lg">
                    <h6 class="mb-0 text-white fw-bold">Cash on Delivery / Service (COD)</h6>
                    <p class="small mb-0 text-secondary">Pay the total amount to the photographer upon completion of the session.</p>
                </div>
                <div class="mt-4 p-3 rounded-3 summary-box">
                    <h6 class="text-white border-bottom pb-2 mb-2">Important Notice</h6>
                    <p class="small text-secondary mb-0">By proceeding, you agree to secure your booking without upfront payment.</p>
                </div>
            </div>

            <div class="col-12 col-md-5">
                <div class="card p-4 rounded-3 summary-box">
                    <h5 class="text-white border-bottom pb-3 mb-3">Order Total</h5>
                    <div class="d-flex justify-content-between py-3">
                        <span class="text-white fs-5">TOTAL DUE (COD):</span>
                        <span class="fw-bold text-white fs-4" id="display-total">$0</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer class="fixed-bottom p-3 header-bar shadow-sm d-flex justify-content-between align-items-center">
        <button class="btn btn-outline-light" onclick="history.back()">BACK</button>
        <button class="btn btn-light fw-semibold px-5" onclick="finishBooking()">PLACE BOOKING</button>
    </footer>

    <script>
        const price = localStorage.getItem('booking_price') || '0';
        document.getElementById('display-total').textContent = '$' + price;

        function finishBooking() {
            // Here you would typically send data to PHP/Backend
            window.location.href = 'confirmation.php';
        }
    </script>
</body>

</html>