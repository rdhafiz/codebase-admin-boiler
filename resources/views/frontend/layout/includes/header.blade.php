<header data-bs-theme="light">

    <!-- Navbar. Remove 'fixed-top' class to make the navigation bar scrollable with the page -->
    <div class="bg-secondary navbar navbar-expand-lg fixed-top">
        <div class="container">

            <!-- Navbar brand (Logo) -->
            <a class="navbar-brand pe-sm-3" href="{{ route('home') }}">
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

            <a class="btn text-theme-dark order-lg-3 d-none d-sm-inline-flex" href="#" target="_blank" rel="noopener">
                Login/Signup
            </a>

            <!-- Mobile menu toggler (Hamburger) -->
            <button class="navbar-toggler ms-sm-3" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Navbar collapse (Main navigation) -->
            <nav class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav navbar-nav-scroll ms-auto" style="--ar-scroll-height: 520px;">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle @if(Route::currentRouteName() == 'osce-training') active @endif" href="#" data-bs-toggle="dropdown" aria-expanded="false">Training</a>
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
                        <a class="nav-link @if(Route::currentRouteName() == 'jobs') active @endif" href="{{ route('jobs') }}">Jobs</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link @if(Route::currentRouteName() == 'international-candidates') active @endif" href="{{ route('international-candidates') }}">International Candidate</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link @if(Route::currentRouteName() == 'resources') active @endif" href="{{ route('resources') }}">Resources</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link @if(Route::currentRouteName() == 'about-us') active @endif" href="{{ route('about-us') }}">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link @if(Route::currentRouteName() == 'contact-us') active @endif" href="{{ route('contact-us') }}">Contact</a>
                    </li>
                </ul>
                <div class="d-sm-none p-3 mt-n3">
                    <a class="btn btn-theme w-100 mb-1" href="https://themes.getbootstrap.com/product/around-multipurpose-template-ui-kit/" target="_blank" rel="noopener">
                        <i class="ai-cart fs-xl me-2 ms-n1"></i>
                        Apply now
                    </a>
                </div>
            </nav>
        </div>
    </div>
</header>
