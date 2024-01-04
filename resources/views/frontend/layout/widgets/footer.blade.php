<!-- Footer -->
<footer class="footer bg-dark py-5" data-bs-theme="dark">
    <div class="container pt-md-2 pt-lg-3 pt-xl-4">
        <div class="row pb-5 pt-sm-2 mb-lg-2">
            <div class="col-md-3 col-lg-2 pb-2 pb-md-0 mb-4 mb-md-0">
                <a class="navbar-brand py-0 mb-3 mb-md-4" href="index.html">
                    <img src="{{ asset('assets/images/logo.png') }}" alt="Purple Med Logo">
                </a>
                <p class="text-body fs-sm pb-2 pb-md-3 mb-3">
{{--                    Tellus non diam morbi quam vel venenatis proin sed. Dolor elementum nunc dictum interdum amet arcu aenean eu integer--}}
                </p>
                <div class="d-flex gap-3">
                    <a class="btn btn-icon btn-sm btn-secondary btn-facebook rounded-circle" href="#" aria-label="Facebook">
                        <i class="ai-facebook"></i>
                    </a>
                    <a class="btn btn-icon btn-sm btn-secondary btn-instagram rounded-circle" href="#" aria-label="Instagram">
                        <i class="ai-instagram"></i>
                    </a>
                    <a class="btn btn-icon btn-sm btn-secondary btn-linkedin rounded-circle" href="#" aria-label="LinkedIn">
                        <i class="ai-linkedin"></i>
                    </a>
                </div>
            </div>
            <div class="col-md-7 col-lg-8 col-xl-6 offset-lg-1 offset-xl-2">
                <div class="row row-cols-1 row-cols-sm-3">
                    <div class="col mb-4 mb-md-0">
                        <h4 class="h6 fw-bold pb-lg-1">Quick Links</h4>
                        <ul class="nav flex-column">
                            <li><a class="nav-link fw-normal py-1 px-0" href="{{ route('osce') }}" target="_blank">OSCE Training</a></li>
                            <li><a class="nav-link fw-normal py-1 px-0" href="{{ route('about-us') }}" target="_blank">About Us</a></li>
                            <li><a class="nav-link fw-normal py-1 px-0" href="{{ route('contact-us') }}" target="_blank">Contact Us</a></li>
                        </ul>
                    </div>
                    <div class="col mb-4 mb-md-0">
                        <h4 class="h6 fw-bold pb-lg-1">Staff & Students</h4>
                        <ul class="nav flex-column">
                            <li><a class="nav-link fw-normal py-1 px-0" href="https://teams.microsoft.com" target="_blank">Staff Portal</a></li>
                            <li><a class="nav-link fw-normal py-1 px-0" href="https://moodle.purplemed.co.uk">Students Portal</a></li>
                        </ul>
                    </div>
                    <div class="col mb-4 mb-md-0">
                        <h4 class="h6 fw-bold pb-lg-1">Contact Us</h4>
                        <ul class="nav flex-column">
                            <li class="fw-normal"><a href="#" class="nav-link fw-normal py-1 px-0">Purple Med,</a></li>
                            <li><a href="#" class="nav-link fw-normal py-0 px-0">5-7 High Street,</a></li>
                            <li><a href="#" class="nav-link fw-normal py-0 px-0">London, E130AD,</a></li>
                            <li><a href="#" class="nav-link fw-normal py-0 px-0">United Kingdom</a></li>
                            <li></li>
                            <li><a href="tel://+44(0)2085527370">+44(0)2085527370</a></li>
                            <li><a href="mailto://info@purplemed.co.uk">info@purplemed.co.uk</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <p class="nav fs-sm mb-0">
            <span class="text-body-secondary">&copy; All rights reserved. Made by</span>
            <a class="nav-link fw-normal p-0 ms-1" href="https://mediprospects.ai/" target="_blank" rel="noopener">MediprospectsAI</a>
        </p>
    </div>
</footer>


<!-- Back to top button -->
<a class="btn-scroll-top" href="#top" data-scroll aria-label="Scroll back to top">
    <svg viewBox="0 0 40 40" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
        <circle cx="20" cy="20" r="19" fill="none" stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10"></circle>
    </svg>
    <i class="ai-arrow-up"></i>
</a>
