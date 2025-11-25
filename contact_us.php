<?php 
    require_once 'header.php';
?>

    <header class="contact-hero">
        <h1 class="hero-title text-white">Let's Create</h1>
    </header>

    <section class="py-5" style="background-color: #1a1a1a;">
        <div class="container py-5">
            <div class="row g-5">

                <div class="col-lg-7">
                    <p class="lead mb-5 text-secondary">
                        Ready to start your project? Fill out the form below and we will get back to you within 24 hours.
                    </p>

                    <form>
                        <div class="row">
                            <div class="col-md-6">
                                <input type="text" class="form-control" placeholder="First Name" required>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" placeholder="Last Name" required>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <input type="email" class="form-control" placeholder="Email Address" required>
                            </div>
                            <div class="col-md-6">
                                <input type="tel" class="form-control" placeholder="Phone Number">
                            </div>
                        </div>

                        <select class="form-select text-white" style="background-color: #1a1a1a;">
                            <option selected disabled>Type of Session</option>
                            <option value="portrait">Portrait</option>
                            <option value="wedding">Wedding / Event</option>
                            <option value="commercial">Commercial / Brand</option>
                            <option value="other">Other Inquiry</option>
                        </select>

                        <input type="text" class="form-control" placeholder="Preferred Date (Optional)" onfocus="(this.type='date')" onblur="(this.type='text')">

                        <textarea class="form-control" rows="4" placeholder="Tell us about your vision..."></textarea>

                        <button type="submit" class="btn btn-light rounded-0 px-5 py-3 text-uppercase fw-bold mt-3 w-100">
                            Send Message
                        </button>
                    </form>
                </div>

                <div class="col-lg-5">
                    <div class="info-card shadow-lg">
                        <h3 class="text-uppercase fw-light mb-4">Studio Info</h3>

                        <div class="d-flex align-items-start mb-3">
                            <i class="bi bi-geo-alt fs-4 me-3 text-secondary"></i>
                            <div>
                                <div class="info-label">Address</div>
                                <div class="info-value">123 Vintage Lane, Suite 404<br>New York, NY 10012</div>
                            </div>
                        </div>

                        <div class="d-flex align-items-start mb-3">
                            <i class="bi bi-envelope fs-4 me-3 text-secondary"></i>
                            <div>
                                <div class="info-label">Email</div>
                                <div class="info-value">hello@aperturesyndicate.com</div>
                            </div>
                        </div>

                        <div class="d-flex align-items-start mb-4">
                            <i class="bi bi-telephone fs-4 me-3 text-secondary"></i>
                            <div>
                                <div class="info-label">Phone</div>
                                <div class="info-value">+1 (555) 019-2834</div>
                            </div>
                        </div>

                        <div class="map-container">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3023.235552988188!2d-74.00492868459434!3d40.7225476793306!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c2598f988156a9%3A0xd54629bdf9d61d68!2sSoHo%2C%20New%20York%2C%20NY!5e0!3m2!1sen!2sus!4v1620000000000!5m2!1sen!2sus"
                                width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy">
                            </iframe>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </section>

<?php 
    require_once 'footer.php';
?>