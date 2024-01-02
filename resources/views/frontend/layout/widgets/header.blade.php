<!-- Navbar. Remove 'fixed-top' class to make the navigation bar scrollable with the page -->
<header class="navbar navbar-expand-lg fixed-top bg-white">
    <div class="container">

        <!-- Navbar brand (Logo) -->
        <a class="navbar-brand pe-sm-3" href="/">
            <img width="200" src="{{ asset('assets/images/logo.png') }}" alt="Purple Med Logo">
        </a>



        <!-- Mobile menu toggler (Hamburger) -->
        <button class="navbar-toggler ms-sm-3" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Navbar collapse (Main navigation) -->
        <nav class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav navbar-nav-scroll ms-auto" style="--ar-scroll-height: 520px;">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">Training</a>
                    <div class="dropdown-menu overflow-hidden p-0">
                        <div class="d-lg-flex">
                            <div class="mega-dropdown-column pt-1 pt-lg-3 pb-lg-4">
                                <ul class="list-unstyled mb-0">
                                    <li>
                                        <a class="dropdown-item" href="#">OSCE</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="#">Plab I-II</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="#">CBT</a>
                                    </li>
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
                <li class="nav-item">
                    @if(auth()->check())
                        <div class="dropdown">
                            <button class="btn btn-primary btn-sm fs-sm order-lg-3 d-none d-sm-inline-flex dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                {{auth()->user()->name}}
                            </button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item @if(Route::currentRouteName() == 'front.profile') active @endif" href="{{route('front.profile')}}">Profile</a>
                                <a class="dropdown-item @if(Route::currentRouteName() == 'front.training') active @endif" href="{{route('front.training')}}">Training</a>
                                <hr class="my-2">
                                <a class="dropdown-item" href="{{route('front.logout')}}">Logout</a>
                            </div>
                        </div>
                    @else
                        <a class="btn btn-primary btn-sm fs-sm order-lg-3 d-none d-sm-inline-flex" href="{{route('front.login')}}">
                            Login Now
                        </a>
                    @endif
                </li>
                <li class="nav-item">
                    @if(auth()->check())
                        <div class="dropdown">
                            <button class="btn btn-primary btn-sm fs-sm order-lg-3 d-none d-sm-inline-flex dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                {{auth()->user()->name}}
                            </button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="{{route('front.profile')}}">Profile</a>
                                <a class="dropdown-item" href="#">Training</a>
                                <hr class="my-2">
                                <a class="dropdown-item" href="{{route('front.logout')}}">Logout</a>
                            </div>
                        </div>
                    @else
                        <a class="btn btn-primary btn-sm fs-sm order-lg-3 d-none d-sm-inline-flex" href="{{route('front.login')}}">
                            Login Now
                        </a>
                    @endif
                </li>
            </ul>

        </nav>

    </div>
</header>
