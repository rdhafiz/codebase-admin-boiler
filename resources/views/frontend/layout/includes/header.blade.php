<header data-bs-theme="dark">

    <!-- Navbar. Remove 'fixed-top' class to make the navigation bar scrollable with the page -->
    <div class="navbar navbar-expand-lg fixed-top">
        <div class="container">

            <!-- Navbar brand (Logo) -->
            <a class="navbar-brand pe-sm-3" href="{{ route('homepage') }}">
              <span class="flex-shrink-0 me-2">
                <img width="150" src="{{ asset('assets/images/logo.png') }}" alt="Purple Med Logo">
              </span>
            </a>

            <!-- Theme switcher -->
{{--            <div class="form-check form-switch mode-switch order-lg-2 me-3 me-lg-4 ms-auto" data-bs-toggle="mode">--}}
{{--                <input class="form-check-input" type="checkbox" id="theme-mode">--}}
{{--                <label class="form-check-label" for="theme-mode">--}}
{{--                    <i class="ai-sun fs-lg"></i>--}}
{{--                </label>--}}
{{--                <label class="form-check-label" for="theme-mode">--}}
{{--                    <i class="ai-moon fs-lg"></i>--}}
{{--                </label>--}}
{{--            </div>--}}

            <a class="btn btn-primary btn-sm fs-sm order-lg-3 d-none d-sm-inline-flex" href="{{route('front.apply')}}">
                Apply Now
            </a>

            <!-- Mobile menu toggler (Hamburger) -->
            <button class="navbar-toggler ms-sm-3" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Navbar collapse (Main navigation) -->
            <nav class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav navbar-nav-scroll ms-auto" style="--ar-scroll-height: 520px;">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle active" href="#" data-bs-toggle="dropdown" aria-expanded="false">Training</a>
                        <div class="dropdown-menu overflow-hidden p-0">
                            <div class="d-lg-flex">
                                <div class="mega-dropdown-column pt-1 pt-lg-3 pb-lg-4">
                                    <ul class="list-unstyled mb-0">
                                        <li>
                                            <a class="dropdown-item" href="#">OSCE</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="mega-dropdown-column pb-2 pt-lg-3 pb-lg-4">
                                    <ul class="list-unstyled mb-0">
                                        <li>
                                            <a class="dropdown-item" href="#">Plab I-II</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="mega-dropdown-column pb-2 pt-lg-3 pb-lg-4">
                                    <ul class="list-unstyled mb-0">
                                        <li>
                                            <a class="dropdown-item" href="#">CBT</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="mega-dropdown-column pb-2 pt-lg-3 pb-lg-4">
                                    <ul class="list-unstyled mb-0">
                                        <li>
                                            <a class="dropdown-item" href="#">English Language</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="components/typography.html">Jobs</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="components/typography.html">International Candidate</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="components/typography.html">Resources</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="components/typography.html">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="docs/getting-started.html">Contact</a>
                    </li>
                </ul>
                <div class="d-sm-none p-3 mt-n3">
                    <a class="btn btn-primary w-100 mb-1" href="https://themes.getbootstrap.com/product/around-multipurpose-template-ui-kit/" target="_blank" rel="noopener">
                        <i class="ai-cart fs-xl me-2 ms-n1"></i>
                        Buy now
                    </a>
                </div>
            </nav>
        </div>
    </div>
</header>
