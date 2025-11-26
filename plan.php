<?php 
    require_once 'header.php';
?>
    <style>
        /* Reuse styles from Step 1 */
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

        .pricing-card {
            background-color: #444;
            border: 3px solid transparent;
            cursor: pointer;
            transition: all 300ms;
        }

        .pricing-card.selected {
            border-color: #fff;
            background-color: #555;
        }

        .pricing-card:hover {
            transform: translateY(-5px);
        }

        .price {
            font-size: 2.5rem;
            font-weight: 800;
            margin: 1rem 0;
            color: #fff;
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
                        <div class="step-circle active-step">2</div>
                        <span class="fs-6 mt-1 fw-bold text-dark text-center d-none d-sm-block">Choose Plan</span>
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

        <div class="w-100 mx-auto" style="max-width: 900px;">
            <h2 class="text-center mb-4 text-white">Select a Session Plan</h2>
            <div class="row g-3">
                <!-- LITE -->
                <div class="col-12 col-lg-4">
                    <div class="pricing-card rounded-3 p-4 h-100" onclick="selectPlan('lite', 200, this)">
                        <h5>LITE SESSION</h5>
                        <div class="price">$200</div>
                        <ul class="list-unstyled text-white-50">
                            <li>✓ 1-hour session</li>
                            <li>✓ 40+ edited photos</li>
                            <li>✓ Online gallery</li>
                        </ul>
                    </div>
                </div>
                <!-- STANDARD -->
                <div class="col-12 col-lg-4">
                    <div class="pricing-card rounded-3 p-4 h-100" onclick="selectPlan('standard', 350, this)">
                        <h5>STANDARD SESSION</h5>
                        <div class="price">$350</div>
                        <ul class="list-unstyled text-white-50">
                            <li>✓ 1.5-hour session</li>
                            <li>✓ 70+ edited photos</li>
                            <li>✓ 2 Outfit changes</li>
                        </ul>
                    </div>
                </div>
                <!-- EXTENDED -->
                <div class="col-12 col-lg-4">
                    <div class="pricing-card rounded-3 p-4 h-100" onclick="selectPlan('extended', 500, this)">
                        <h5>EXTENDED SESSION</h5>
                        <div class="price">$500</div>
                        <ul class="list-unstyled text-white-50">
                            <li>✓ 3-hours session</li>
                            <li>✓ 80+ edited photos</li>
                            <li>✓ Multiple outfits</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer class="fixed-bottom p-3 header-bar shadow-sm d-flex justify-content-between align-items-center">
        <button class="btn btn-outline-light" onclick="history.back()">BACK</button>
        <button id="continue-btn" class="btn btn-light fw-semibold px-5" disabled onclick="nextStep()">CONTINUE</button>
    </footer>

    <script>
        function selectPlan(plan, price, element) {
            document.querySelectorAll('.pricing-card').forEach(c => c.classList.remove('selected'));
            element.classList.add('selected');

            localStorage.setItem('booking_plan', plan);
            localStorage.setItem('booking_price', price);

            document.getElementById('continue-btn').disabled = false;
        }

        function nextStep() {
            window.location.href = 'details.php';
        }
    </script>
</body>

</html>