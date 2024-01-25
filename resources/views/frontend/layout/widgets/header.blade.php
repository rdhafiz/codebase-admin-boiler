<header class="navbar navbar-expand-lg fixed-top bg-secondary p-0" data-bs-theme="light">
    <div class="container">

        <!-- Navbar brand (Logo) -->
        <a class="navbar-brand pe-sm-3" href="/">
            <img width="150" src="{{ asset('assets/images/logo.png') }}" alt="Purple Med Logo">
        </a>



        <!-- Mobile menu toggler (Hamburger) -->
        <button class="navbar-toggler ms-sm-3" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Navbar collapse (Main navigation) -->
        <nav class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav navbar-nav-scroll ms-auto" style="--ar-scroll-height: 520px;">
                <li class="nav-item dropdown" style="position: initial">
                    <a class="nav-link dropdown-toggle" href="javascript:void(0)" data-bs-toggle="dropdown" aria-expanded="false">Training</a>
                    <div class="dropdown-menu bg-secondary shadow-none border-top overflow-hidden px-5 w-100 rounded-0 mt-0" style="left: 0;margin-top: 0!important;">
                        <div class="container-lg px-5">
                            <div class="row">
                                <div class="col-lg-5">
                                    <div class="w-100 ps-lg-5 pt-4">
                                        <div class="w-100 d-lg-flex ps-5">
                                            <div class="w-100 mega-dropdown-column" style="background-image: url({{asset('assets/images/shapes/menu.svg')}})">
                                                <h4 class="sub_menu_header">Training <i class="ai-arrow-right"></i></h4>
                                                <ul class="mega-dropdown-content">
                                                    <li>
                                                        <a class="dropdown-item" href="{{ route('osce') }}">OSCE</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" href="{{ route('cbt') }}">CBT</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" href="{{ route('plab-1') }}">Plab-1</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" href="{{ route('plab-2') }}">Plab-2</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-7">
                                    <div class="position-relative pt-4">
                                        <div class="drop-menu-img" style="background-image: url({{asset('assets/images/frontend/home/trainee.jpg')}})"></div>
                                        <a href="{{route('front.apply')}}" class="drop-menu-apply fs-3 bg-primary d-flex align-items-center justify-content-center text-center text-white">
                                            <div class="">
                                                <i class="ai-external-link ms-2"></i>
                                                <br>
                                                Book Your
                                                <br>
                                                Training
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </li>
                <li class="nav-item dropdown" style="position: initial">
                    <a class="nav-link dropdown-toggle @if(Route::currentRouteName() == 'jobs') active @endif" href="javascript:void(0)" data-bs-toggle="dropdown" aria-expanded="false">Jobs</a>
                    <div class="dropdown-menu bg-secondary shadow-none border-top overflow-hidden px-5 w-100 rounded-0 mt-0" style="left: 0;margin-top: 0!important;">
                        <div class="container-lg px-5">
                            <div class="row">
                                <div class="col-lg-5">
                                    <div class="w-100 ps-lg-5 pt-4">
                                        <div class="w-100 d-lg-flex ps-5">
                                            <div class="w-100 mega-dropdown-column" style="background-image: url({{asset('assets/images/shapes/menu.svg')}})">
                                                <h4 class="sub_menu_header">Jobs <i class="ai-arrow-right"></i></h4>
                                                <ul class="mega-dropdown-content">
                                                    <li>
                                                        <a class="dropdown-item" href="{{ route('jobs') }}">Full Time</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" href="{{ route('jobs') }}">Temporary</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" href="{{ route('jobs') }}">Locum</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-7">
                                    <div class="position-relative pt-4">
                                        <div class="drop-menu-img" style="background-image: url({{asset('assets/images/frontend/home/choose-3.jpg')}})"></div>
                                        <a href="{{ route('jobs') }}" class="drop-menu-apply fs-3 bg-primary d-flex align-items-center justify-content-center text-center text-white">
                                            <div class="">
                                                <i class="ai-external-link ms-2"></i>
                                                <br>
                                                Find Your
                                                <br>
                                                Job
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
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
                <li class="nav-item ms-3 pt-1">
                    <div class="nav-link-btn">
                        @if(auth()->check())
                            <div class="dropdown">
                                <button class="btn btn-primary btn-sm fs-sm order-lg-3 d-none d-sm-inline-flex dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    {{auth()->user()->name}}
                                </button>
                                <div class="dropdown-menu" style="margin-top: 0!important;">
                                    <a class="dropdown-item @if(Route::currentRouteName() == 'front.portal') active @endif" href="{{route('front.portal')}}"><i class="ai-dashboard fs-5 opacity-60 me-2"></i> Portal</a>
                                    <hr class="my-2">
                                    <a class="dropdown-item @if(Route::currentRouteName() == 'front.profile') active @endif" href="{{route('front.profile')}}"><i class="ai-user-check fs-5 opacity-60 me-2"></i> Profile</a>
                                    <a class="dropdown-item @if(Route::currentRouteName() == 'front.training') active @endif" href="{{route('front.training')}}"><i class="ai-open-book fs-5 opacity-60 me-2"></i> Training</a>
                                    <a class="dropdown-item @if(Route::currentRouteName() == 'front.billing') active @endif" href="{{route('front.billing')}}"><i class="ai-wallet fs-5 opacity-60 me-2"></i> Billing</a>
                                    <hr class="my-2">
                                    <a class="dropdown-item" href="{{route('front.logout')}}"><i class="ai-power fs-5 opacity-60 me-2"></i> Logout</a>
                                </div>
                            </div>
                        @else
                            <a class="btn btn-primary btn-sm fs-sm order-lg-3 d-none d-sm-inline-flex" href="{{route('front.login')}}">
                                Login Now
                            </a>
                        @endif
                    </div>
                </li>
            </ul>

        </nav>

    </div>
</header>
