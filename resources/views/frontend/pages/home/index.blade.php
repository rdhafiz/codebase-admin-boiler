@extends('frontend.layout.frontend-layout')

@section('css')
    @vite(['resources/sass/frontend/home.scss'])
@show

@section('content')

    <!-- Section 1 - Hero -->
    <section id="section-hero" class="bg-dark d-flex min-vh-100 position-relative overflow-hidden py-lg-5 jarallax-img" data-bs-theme="dark" data-jarallax data-speed="0.65"
    style="background-image: url({{ asset('assets/images/frontend/home/london-bridge.jpg') }}); background-size: cover;">
        <div class="container d-flex flex-column justify-content-lg-center justify-content-end position-relative z-2 pt-sm-3 pt-md-4 pt-xl-5 pb-1 pb-sm-3 pb-lg-4 pb-xl-5">
            <div class="row flex-lg-nowrap align-items-center pb-lg-5 pt-2 pt-lg-4 pt-xl-0 mt-lg-4 mt-xl-0">
                {{--
                <div class="col-lg-7 order-lg-2 ms-lg-4 mb-2 mb-lg-0">
                    <div class="parallax order-lg-2 mx-auto" style="max-width: 740px;">
                        <div class="parallax-layer" data-depth="0.05">
                            <img src="{{ asset('assets/images/frontend/landing/saas-2/hero/01.png') }}" alt="Layer">
                        </div>
                        <div class="parallax-layer" data-depth="-0.05">
                            <img src="{{ asset('assets/images/frontend/landing/saas-2/hero/02.png') }}" style="animation: rotate-cw 100s linear infinite;" alt="Layer">
                        </div>
                        <div class="parallax-layer z-2" data-depth="0.3">
                            <img src="{{ asset('assets/images/frontend/landing/saas-2/hero/03.png') }}" alt="Layer"></div>
                        <div class="parallax-layer z-2" data-depth="0.15">
                            <img src="{{ asset('assets/images/frontend/landing/saas-2/hero/04.png') }}" alt="Layer">
                        </div>
                        <div class="parallax-layer z-2" data-depth="0.4">
                            <img src="{{ asset('assets/images/frontend/landing/saas-2/hero/05.png') }}" alt="Layer">
                        </div>
                    </div>
                </div>
                --}}
                <div id="hero-content-text" class="bg-white card card-hover border-0 border-theme rounded-1 text-decoration-none overflow-hidden offset-lg-7 col-lg-5 order-lg-1 text-center text-lg-start me-xl-5 ps-3">
                    <span class="badge bg-opacity-10 text-black fs-5 text-lg-start pt-3">Take your career to the next level&nbsp; 🚀</span>
                    <h1 class="display-4 py-1 my-2 mb-xl-3 text-theme-dark">
                        We Help Medics Getting Job in UK
                    </h1>
                    <ul class="list-unstyled d-table text-start mx-auto mx-lg-0 mb-0">
                        <li class="d-flex text-body pb-2 mb-1">
                            <i class="ai-check-alt lead me-2"></i>
                            Transform Your Life in UK
                        </li>
                        <li class="d-flex text-body pb-2 mb-1">
                            <i class="ai-check-alt lead me-2"></i>
                            Road to being a Health Hero
                        </li>
                        <li class="d-flex text-body pb-2 mb-1">
                            <i class="ai-check-alt lead me-2"></i>
                            Gateway for Healthcare Professionals
                        </li>
                    </ul>
                    <div class="d-flex justify-content-center justify-content-lg-start pt-4 pt-xl-4 pb-3">
                        <div class="text-center">
                            <a class="btn btn-theme w-100 w-sm-auto" href="#">Apply Now</a>
                            <p class="text-black fs-sm pt-2 mt-sm-1 mb-0">100% job guaranteed!</p>
                        </div>
                    </div>
                </div>
            </div>
            {{--
            <div class="row row-cols-3 row-cols-sm-4 row-cols-lg-5 row-cols-xl-6 justify-content-center align-items-center g-4 pt-lg-3 pt-xl-4">
                <div class="col">
                    <img class="d-block my-1 mx-auto" src="{{ asset('assets/images/frontend/landing/saas-1/brands/foster-light.svg') }}" width="145" alt="Foster">
                </div>
                <div class="col">
                    <img class="d-block my-1 mx-auto" src="{{ asset('assets/images/frontend/landing/saas-1/brands/klinos-light.svg') }}" width="140" alt="Klinos">
                </div>
                <div class="col">
                    <img class="d-block my-1 mx-auto" src="{{ asset('assets/images/frontend/landing/saas-1/brands/champion-light.svg') }}" width="160" alt="Champion">
                </div>
                <div class="col">
                    <img class="d-block my-1 mx-auto" src="{{ asset('assets/images/frontend/landing/saas-1/brands/airbnb-light.svg') }}" width="130" alt="Airbnb">
                </div>
                <div class="col">
                    <img class="d-block my-1 mx-auto" src="{{ asset('assets/images/frontend/landing/saas-1/brands/starcraft-light.svg') }}" width="160" alt="Starcraft">
                </div>
                <div class="col">
                    <img class="d-block my-1 mx-auto" src="{{ asset('assets/images/frontend/landing/saas-1/brands/alpine-light.svg') }}" width="150" alt="Alpine">
                </div>
            </div>
            --}}
        </div>
    </section>


    <!-- Section 2 - Courses Overview -->
    {{--
    <section id="section-courses" class="bg-theme-dark">
        <div class="container py-md-2 py-lg-4 py-xxl-5">
<!--            <h2 class="h1 pb-3 pb-lg-4">Editor's picks</h2>-->
            <div class="row">
                <div class="swiper-wrapper">

                    <!-- Item-->
                    <article class="col swiper-slide h-auto">
                        <div class="card border-0 bg-secondary">
                            <div class="card-body pb-4">
                                <h3 class="h4 card-title">
                                    <a href="#">15 Days (10 Stations)</a>
                                </h3>
                                <p class="card-text">15 Days (10 Stations) - £ 1,200</p>
                                <button class="btn bg-theme">Book Now</button>
                            </div>
                        </div>
                    </article>

                    <!-- Item -->
                    <article class="col swiper-slide h-auto mx-5">
                        <div class="card border-0 bg-secondary">
                            <div class="card-body pb-4">
                                <h3 class="h4 card-title">
                                    <a href="#">7 Days (10 Stations)</a>
                                </h3>
                                <p class="card-text">7 Days (10 Stations) - £ 1,500</p>
                                <button class="btn bg-theme">Book Now</button>
                            </div>
                        </div>
                    </article>

                    <!-- Item -->
                    <article class="col swiper-slide h-auto">
                        <div class="card border-0 bg-secondary">
                            <div class="card-body pb-4">
                                <h3 class="h4 card-title">
                                    <a href="#">3 Days (10 Stations)</a>
                                </h3>
                                <p class="card-text">3 Days (10 Stations) - £ 1,700</p>
                                <button class="btn bg-theme">Book Now</button>
                            </div>
                        </div>
                    </article>
                </div>
            </div>

            <!-- Read more button -->
            <div class="text-center pt-4 mt-2 mt-lg-0 pt-lg-5 pb-sm-2 pb-md-4">
                <a class="btn btn-primary" href="blog-grid-sidebar.html">Read all articles</a>
            </div>
        </div>
    </section>
    --}}


    <section id="section-courses" class="bg-secondary">
        <div class="container py-5 py-sm-0 py-lg-5">

<!--        <div class="row">
            <div class="col-12 order-md-2 mb-3 mb-md-0">
                <div class="bottom-0 text-uppercase fw-bold lh-1 mb-4 pe-3">
                    <div class="alphabets d-flex justify-content-center">
                        <div class="alphabet bg-white display-4 ps-4 h2">C</div>
                        <div class="alphabet bg-white display-4 h2">O</div>
                        <div class="alphabet bg-white display-4 h2">U</div>
                        <div class="alphabet bg-white display-4 h2">R</div>
                        <div class="alphabet bg-white display-4 h2">S</div>
                        <div class="alphabet bg-white display-4 h2">E</div>
                        <div class="alphabet bg-white display-4 pe-4 h2">S</div>
                    </div>
                </div>
            </div>
        </div>-->

            <div class="row mb-5 pb-3">
                <div class="col-12 order-md-2 mb-md-0 mb-3">
                    <div class="section-title display-4 fw-bold lh-1 text-uppercase pe-3 d-flex justify-content-center">
                        Courses
                    </div>
                </div>
            </div>

            <div class="row pt-2 pt-sm-0 pt-lg-3">

                <div class="col-sm-12 col-md-4 pb-4 mb-1">
                    <div class="course bg-body p-4 rounded-3 mx-sm-auto">
                        <i class="ai-calendar-minus"></i>
                        <h3 class="h4 pt-3">15 Days (10 Stations)</h3>
                        <p class="mb-3">£ 1,200 fees, 24/7 access from anywhere, blended and instructor-led learning, completed within 15 days</p>
                    </div>
                </div>
                <div class="col-sm-12 col-md-4 pb-4 mb-1">
                    <div class="course bg-body p-4 rounded-3 mx-sm-auto">
                        <i class="ai-calendar-minus"></i>
                        <h3 class="h4 pt-3">7 Days (10 Stations)</h3>
                        <p class="mb-3">£ 1,200 fees, 24/7 access from anywhere, blended and instructor-led learning, completed within 15 days</p>
                    </div>
                </div>
                <div class="col-sm-12 col-md-4 pb-4 mb-1">
                    <div class="course bg-body p-4 rounded-3 mx-sm-auto">
                        <i class="ai-calendar-minus"></i>
                        <h3 class="h4 pt-3">3 Days (10 Stations)</h3>
                        <p class="mb-3">£ 1,200 fees, 24/7 access from anywhere, blended and instructor-led learning, completed within 15 days</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12 d-flex justify-content-center">
                    <button class="btn btn-theme"><i class="ai-calendar-minus pe-2"></i>Apply Now</button>
                </div>
            </div>
        </div>

    </section>

    <section id="section-jobs" class="container py-5">
        <div class="row mb-5 pb-lg-3">
            <div class="col-12 order-md-2 mb-md-0 mb-3">
                <div class=" display-4 fw-bold lh-1 text-uppercase pe-3 d-flex justify-content-center">
                    Jobs You'll Love
                </div>
            </div>
        </div>
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-4">

            <!-- Item -->
            <div class="col">
                <div class="card card-flip">
                    <div class="card-flip-inner">
                        <div class="card-flip-front bg-secondary rounded-5 py-2 py-lg-4 px-0">
                            <div class="card-body text-center">
                                <svg fill="#000000" width="64px" height="64px" viewBox="0 0 24 24" id="hour-glass"
                                     data-name="Flat Line" xmlns="http://www.w3.org/2000/svg" class="icon flat-line">
                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                    <g id="SVGRepo_iconCarrier">
                                        <path id="secondary"
                                              d="M12,12h0A5,5,0,0,1,7,7V3H17V7A5,5,0,0,1,12,12Zm0,0h0a5,5,0,0,0-5,5v4H17V17A5,5,0,0,0,12,12Z"
                                              style="fill: #2ca9bc; stroke-width: 2;"></path>
                                        <path id="primary"
                                              d="M12,12h0A5,5,0,0,1,7,7V3H17V7A5,5,0,0,1,12,12Zm0,0h0a5,5,0,0,0-5,5v4H17V17A5,5,0,0,0,12,12ZM5,3H19M5,21H19"
                                              style="fill: none; stroke: #2ca9bc; stroke-linecap: round; stroke-linejoin: round; stroke-width: 2;"></path>
                                    </g>
                                </svg>
                                <h3>Locum</h3>
                                <p class="card-text">
                                    We cover a variety of different roles and can help you find locums for short-term or long-term cover
                                </p>
                            </div>
                        </div>
                        <div class="card-flip-back bg-theme-dark rounded-5 py-2 py-lg-4 px-0">
                            <div class="card-body text-center">
                                <svg fill="#fff" width="64px" height="64px" viewBox="0 0 24 24" id="hour-glass"
                                     data-name="Flat Line" xmlns="http://www.w3.org/2000/svg" class="icon flat-line"
                                     stroke="#fff">
                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                    <g id="SVGRepo_iconCarrier">
                                        <path id="secondary"
                                              d="M12,12h0A5,5,0,0,1,7,7V3H17V7A5,5,0,0,1,12,12Zm0,0h0a5,5,0,0,0-5,5v4H17V17A5,5,0,0,0,12,12Z"
                                              style="fill: #fffff; stroke-width: 2;"></path>
                                        <path id="primary"
                                              d="M12,12h0A5,5,0,0,1,7,7V3H17V7A5,5,0,0,1,12,12Zm0,0h0a5,5,0,0,0-5,5v4H17V17A5,5,0,0,0,12,12ZM5,3H19M5,21H19"
                                              style="fill: none; stroke: #fffff; stroke-linecap: round; stroke-linejoin: round; stroke-width: 2;"></path>
                                    </g>
                                </svg>
                                <div class="h3 display-4 text-white pb-1 mb-2">Locum</div>
                                <p class="card-text text-white opacity-70">
                                    We cover a variety of different roles and can help you find locums for short-term or long-term cover
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Item -->
            <div class="col">
                <div class="card card-flip">
                    <div class="card-flip-inner">
                        <div class="card-flip-front bg-secondary rounded-5 py-2 py-lg-4 px-0">
                            <div class="card-body text-center">
                                <svg width="64px" height="64px" viewBox="0 0 24 24" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                    <g id="SVGRepo_iconCarrier">
                                        <path
                                            d="M12 14V11M12 6C7.85786 6 4.5 9.35786 4.5 13.5C4.5 17.6421 7.85786 21 12 21C16.1421 21 19.5 17.6421 19.5 13.5C19.5 11.5561 18.7605 9.78494 17.5474 8.4525M12 6C14.1982 6 16.1756 6.94572 17.5474 8.4525M12 6V3M19.5 6.5L17.5474 8.4525M12 3H9M12 3H15"
                                            stroke="#ed5050" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round"></path>
                                    </g>
                                </svg>
                                <h3>Temporary</h3>
                                <p class="card-text">
                                    We provide permanent (full time/ part time) and temporary staffing solutions for the NHS, primary care and private sector
                                </p>
                            </div>
                        </div>
                        <div class="card-flip-back bg-theme-dark rounded-5 py-2 py-lg-4 px-0">
                            <div class="card-body text-center">
                                <svg width="64px" height="64px" viewBox="0 0 24 24" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                    <g id="SVGRepo_iconCarrier">
                                        <path
                                            d="M12 14V11M12 6C7.85786 6 4.5 9.35786 4.5 13.5C4.5 17.6421 7.85786 21 12 21C16.1421 21 19.5 17.6421 19.5 13.5C19.5 11.5561 18.7605 9.78494 17.5474 8.4525M12 6C14.1982 6 16.1756 6.94572 17.5474 8.4525M12 6V3M19.5 6.5L17.5474 8.4525M12 3H9M12 3H15"
                                            stroke="#fff" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round"></path>
                                    </g>
                                </svg>
                                <div class="h3 display-4 text-white pb-1 mb-2">Temporary</div>
                                <p class="card-text text-white opacity-70">
                                    We provide permanent (full time/ part time) and temporary staffing solutions for the NHS, primary care and private sector
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Item -->
            <div class="col">
                <div class="card card-flip">
                    <div class="card-flip-inner">
                        <div class="card-flip-front bg-secondary rounded-5 py-2 py-lg-4 px-0">
                            <div class="card-body text-center">
                                <svg fill="#000000" width="64px" height="64px" viewBox="0 0 24 24" id="job"
                                     data-name="Flat Line" xmlns="http://www.w3.org/2000/svg" class="icon flat-line">
                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                    <g id="SVGRepo_iconCarrier">
                                        <rect id="secondary" x="5" y="5" width="14" height="18" rx="1"
                                              transform="translate(26 2) rotate(90)"
                                              style="fill: #3f7eca; stroke-width: 2;"></rect>
                                        <path id="primary"
                                              d="M16,7H8V4A1,1,0,0,1,9,3h6a1,1,0,0,1,1,1Zm1,4H7m8,0v2m6,7V8a1,1,0,0,0-1-1H4A1,1,0,0,0,3,8V20a1,1,0,0,0,1,1H20A1,1,0,0,0,21,20Z"
                                              style="fill: none; stroke: #3f7eca; stroke-linecap: round; stroke-linejoin: round; stroke-width: 2;"></path>
                                    </g>
                                </svg>
                                <h3>Permanent</h3>
                                <p class="card-text">
                                    We provide permanent (full time/ part time) and temporary staffing solutions for the NHS, primary care and private sector
                                </p>
                            </div>
                        </div>
                        <div class="card-flip-back bg-theme-dark rounded-5 py-2 py-lg-4 px-0">
                            <div class="card-body text-center">
                                <svg fill="#fff" width="64px" height="64px" viewBox="0 0 24 24" id="job"
                                     data-name="Flat Line" xmlns="http://www.w3.org/2000/svg" class="icon flat-line"
                                     stroke="#fff">
                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                    <g id="SVGRepo_iconCarrier">
                                        <rect id="secondary" x="5" y="5" width="14" height="18" rx="1"
                                              transform="translate(26 2) rotate(90)"
                                              style="fill: #fffff; stroke-width: 2;"></rect>
                                        <path id="primary"
                                              d="M16,7H8V4A1,1,0,0,1,9,3h6a1,1,0,0,1,1,1Zm1,4H7m8,0v2m6,7V8a1,1,0,0,0-1-1H4A1,1,0,0,0,3,8V20a1,1,0,0,0,1,1H20A1,1,0,0,0,21,20Z"
                                              style="fill: none; stroke: #fffff; stroke-linecap: round; stroke-linejoin: round; stroke-width: 2;"></path>
                                    </g>
                                </svg>
                                <div class="h3 display-4 text-white pb-1 mb-2">Permanent</div>
                                <p class="card-text text-white opacity-70">
                                    We provide permanent (full time/ part time) and temporary staffing solutions for the NHS, primary care and private sector
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Section 3 - Jobs -->
{{--    <section id="section-jobs">--}}
{{--        <div class="container mt-1 py-md-2 py-lg-5">--}}
{{--<!--            <h2 class="h1 text-center pt-1 pt-sm-4 pb-3 mb-3 mb-lg-4">Jobs You'll Love</h2>--}}
{{--            <p class="text-center mx-auto pb-3 mb-3 mb-lg-4" style="max-width: 480px;">Using basic data skills you can analysis and improve your business indicators with Around</p>-->--}}


{{--            <div class="row mb-5 pb-3">--}}
{{--                <div class="col-12 order-md-2 mb-md-0 mb-3">--}}
{{--                    <div class=" display-4 fw-bold lh-1 text-uppercase pe-3 d-flex justify-content-center">--}}
{{--                        Jobs You'll Love--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}

{{--            <div class="row g-4 pb-2 pb-sm-4 mb-sm-2">--}}

{{--                <!-- Item -->--}}
{{--                <div class="col-md-5">--}}
{{--                    <div class="bg-secondary border-0 card h-100">--}}
{{--                        <div class="card-body">--}}
{{--                            <a href="#">--}}
{{--<!--                                <img class="d-dark-mode-none" src="{{ asset('assets/images/frontend/landing/saas-2/features/01-light.png') }}" alt="Image">--}}
{{--                                <img class="d-none d-dark-mode-block" src="{{ asset('assets/images/frontend/landing/saas-2/features/01-dark.png') }}" alt="Image">--}}
{{--                                <img src="{{ asset('assets/images/frontend/home/temporary.png') }}" width="90" alt="Locum">-->--}}
{{--                                <i class="ai-time display-1"></i>--}}
{{--                            </a>--}}
{{--                            <div class="pt-3 mt-2 mt-lg-3">--}}
{{--                                <h3>Locum</h3>--}}
{{--                                <p class="mb-0">We cover a variety of different roles and can help you find locums for short-term or long-term cover</p>--}}
{{--                                <a class="btn btn-link p-0 fs-5" href="#">--}}
{{--                                    Find more--}}
{{--                                    <i class="ai-arrow-right ms-2"></i>--}}
{{--                                </a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <!-- Item -->--}}
{{--                <div class="col-md-7">--}}
{{--                    <div class="bg-secondary border-0 card h-100">--}}
{{--                        <div class="card-body overflow-hidden">--}}
{{--                            <div class="d-sm-flex align-items-center">--}}
{{--                                <a class="d-block order-sm-2 flex-shrink-0 mt-n4 mb-n2" href="#">--}}
{{--<!--                                    <img src="{{ asset('assets/images/frontend/landing/saas-2/features/02.png') }}" width="308" alt="Image">--}}
{{--                                    <img src="{{ asset('assets/images/frontend/home/parttime.png') }}" width="90" alt="Temporary">-->--}}
{{--                                    <i class="ai-clock display-1"></i>--}}
{{--                                </a>--}}
{{--                                <div class="order-sm-1 pe-sm-3 me-xl-4">--}}
{{--                                    <h3>Temporary</h3>--}}
{{--                                    <p class="pb-3 mb-1 mb-xl-3">--}}
{{--                                        We provide permanent (full time/ part time) and temporary staffing solutions for the NHS, primary care and private sector--}}
{{--                                    </p>--}}
{{--                                    <a class="btn btn-link p-0 fs-5" href="#">--}}
{{--                                        Find more--}}
{{--                                        <i class="ai-arrow-right ms-2"></i>--}}
{{--                                    </a>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <!-- Item -->--}}
{{--                <div class="col-md-7">--}}
{{--                    <div class="bg-secondary border-0 card h-100">--}}
{{--                        <div class="card-body overflow-hidden">--}}
{{--                            <div class="d-sm-flex align-items-center">--}}
{{--                                <a class="d-block order-sm-2 flex-shrink-0 mt-n4 mb-n2" href="#">--}}
{{--<!--                                    <img class="d-dark-mode-none" src="{{ asset('assets/images/frontend/landing/saas-2/features/03-light.png') }}" width="308" alt="Image">--}}
{{--                                    <img class="d-none d-dark-mode-block" src="{{ asset('assets/images/frontend/landing/saas-2/features/03-dark.png') }}" width="308" alt="Image">--}}
{{--                                    <img src="{{ asset('assets/images/frontend/home/fulltime.png') }}" width="90" alt="Fulltime">-->--}}
{{--                                    <i class="ai-circle-check display-1"></i>--}}
{{--                                </a>--}}
{{--                                <div class="order-sm-1 pe-sm-3 me-xl-4">--}}
{{--                                    <h3>Permanent</h3>--}}
{{--                                    <p class="pb-3 mb-1 mb-xl-3">--}}
{{--                                        We provide permanent (full time/ part time) and temporary staffing solutions for the NHS, primary care and private sector--}}
{{--                                    </p>--}}
{{--                                    <a class="btn btn-link p-0 fs-5" href="#">--}}
{{--                                        Find more--}}
{{--                                        <i class="ai-arrow-right ms-2"></i>--}}
{{--                                    </a>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <!-- Item -->--}}
{{--                <div class="col-md-5">--}}
{{--                    <div class="border-0 h-100 d-flex justify-content-end">--}}
{{--                        <a class="btn btn-link fs-1 p-0" href="#">--}}
{{--                            View All Jobs--}}
{{--                            <i class="ai-arrow-right ms-2"></i>--}}
{{--                        </a>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}


    <!-- Section 4 - Why Choose Us -->
    <section id="section-medics" class="bg-secondary">
        <section class="container pt-5 pt-xl-2 pb-5 mb-2 mb-lg-3 mb-xl-4 mb-xxl-5">
            <div class="row align-items-center pt-2 pt-sm-3 pt-md-4 pt-lg-5 mt-xl-2 mt-xxl-3">
                <div class="col-md-6 col-xl-5 pb-3 pb-md-0 mb-4 mb-md-0">
{{--                    <h2 class="display-6 mb-5 text-center text-white">Why Choose Us</h2>--}}
                    <div class="ratio ratio-1x1 d-flex align-items-center position-relative rounded-1 overflow-hidden bg-size-cover bg-position-bottom-center mx-auto" style="max-width: 530px; background-image: url('assets/images/frontend/home/medics-image.jpg');transform: scaleX(-1)">
                        <div class="position-absolute top-0 start-0 w-100 h-100"></div>
<!--                        <div class="position-relative z-2 p-4" data-bs-theme="dark">
                            <div class="text-center mx-auto" style="max-width: 275px;">
                                <span class="d-block text-body fs-sm text-uppercase mb-3">Why Choose Us</span>
                                <h2 class="display-6 mb-0">Why <br>Choose Us</h2>
                            </div>
                        </div>-->
                    </div>
                </div>
                <div class="col-md-6 col-xl-5 offset-xl-1">
                    <div class="ps-md-4 ps-xl-0">
                        <div class="steps steps-hoverable">
                            <div class="step py-2 py-xl-3">
                                <div class="step-number">
                                    <div class="step-number-inner">M</div>
                                </div>
                                <div class="step-body">
                                    <h3 class="h5 pb-1 mb-2">Motivation</h3>
                                    <p class="mb-0 text-black-50">We create a positive and motivating environment to help our clients reach their full potential and exceed their own expectations.</p>
                                </div>
                            </div>
                            <div class="step py-2 py-xl-3">
                                <div class="step-number">
                                    <div class="step-number-inner">E</div>
                                </div>
                                <div class="step-body">
                                    <h3 class="h5 pb-1 mb-2">Excellence</h3>
                                    <p class="mb-0 text-black-50">We strive for the highest level of quality and performance in all aspects of our work, constantly seeking to improve and set high standards for ourselves and others. We commit to a process of continuous growth and development.</p>
                                </div>
                            </div>
                            <div class="step py-2 py-xl-3">
                                <div class="step-number">
                                    <div class="step-number-inner">D</div>
                                </div>
                                <div class="step-body">
                                    <h3 class="h5 pb-1 mb-2">Dedication</h3>
                                    <p class="mb-0 text-black-50">We are dedicated to providing a high-quality service and continuously improving our training and recruitment methods to meet the needs of our clients.</p>
                                </div>
                            </div>
                            <div class="step py-2 py-xl-3">
                                <div class="step-number">
                                    <div class="step-number-inner">I</div>
                                </div>
                                <div class="step-body">
                                    <h3 class="h5 pb-1 mb-2">Inclusivity</h3>
                                    <p class="mb-0 text-black-50">We foster an inclusive culture that embraces the British values of fairness and tolerance of all in the workplace.</p>
                                </div>
                            </div>
                            <div class="step py-2 py-xl-3">
                                <div class="step-number">
                                    <div class="step-number-inner">C</div>
                                </div>
                                <div class="step-body">
                                    <h3 class="h5 pb-1 mb-2">Community</h3>
                                    <p class="mb-0 text-black-50">We strive to build a strong community of medical professionals that can support each other in their professional development and career advancement.</p>
                                </div>
                            </div>
                            <div class="step py-2 py-xl-3">
                                <div class="step-number">
                                    <div class="step-number-inner">S</div>
                                </div>
                                <div class="step-body">
                                    <h3 class="h5 pb-1 mb-2">Support</h3>
                                    <p class="mb-0 text-black-50">We offer unparalleled support to our clients, both during their training and as they navigate the job market.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </section>


    <!-- Section 5 - Services -->
    <section class="container pt-lg-2 pt-5 pt-xxl-3 pb-5 mb-sm-2 mb-lg-3 mb-xl-4 mb-xxl-5">
        <div class="row pb-md-3">
            <div class="col-md-4 mb-2 mb-sm-3 mb-md-4 pb-lg-2 pb-5 text-center text-lg-start" style="margin-top: -120px;">
                <div class="position-sticky top-0" style="padding-top: 120px;">
{{--                    <h2 class="display-3 mb-0 mb-md-3 pb-lg-3">Why would you choose us?</h2>--}}
                    <div class="display-4 fw-bold lh-1 text-uppercase pe-3 d-flex justify-content-center">
                        Why Would You Choose Us?
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="swiper" data-swiper-options='{
              "effect": "fade",
              "loop": true,
              "pagination": {
                "el": ".testimonials-count",
                "type": "fraction"
              },
              "navigation": {
                "prevEl": "#prev-testimonial",
                "nextEl": "#next-testimonial"
              }
            }'>
                    <div class="swiper-wrapper">

                        <!-- Item -->
                        <div class="swiper-slide bg-light">
                            <div class="d-flex flex-column">
                                <div class="d-flex align-items-center align-self-end pb-3 mb-2 mb-md-3 mb-xl-4" style="max-width: 570px;">
{{--                                    <div class="bg-light rounded-circle flex-shrink-0 position-relative z-2 me-n5" style="padding: .375rem;">--}}
{{--                                        <img class="rounded-circle" src="assets/img/avatar/44.jpg" width="80" alt="Avatar">--}}
{{--                                    </div>--}}
                                    <div class="card bg-secondary border-0 rounded-4 py-3 ps-4 ps-sm-5 pe-3">
                                        <div class="card-body py-3 px-2 p-sm-4 ms-4 ms-sm-0">
                                            <svg class="d-block mt-1 mt-sm-0 mb-4" width="40" height="40" viewBox="0 0 40 40" xmlns="http://www.w3.org/2000/svg">
                                                <g class="text-info">
                                                    <path d="M26.307 23.1116C26.307 28.3136 22.09 32.5307 16.888 32.5307C11.6859 32.5307 7.46891 28.3136 7.46891 23.1116C7.46891 17.9096 11.6859 13.6925 16.888 13.6925C17.1467 13.6925 17.4028 13.7038 17.6562 13.7243V6.24121C17.4016 6.22973 17.1455 6.22363 16.888 6.22363C7.56102 6.22363 0 13.7846 0 23.1116C0 32.4386 7.56102 39.9996 16.888 39.9996C26.2149 39.9996 33.7759 32.4386 33.7759 23.1116C33.7759 22.8541 33.7698 22.598 33.7584 22.3433H26.2753C26.2958 22.5968 26.307 22.8529 26.307 23.1116Z" fill="currentColor"></path>
                                                </g>
                                                <g class="text-primary">
                                                    <path d="M40 20C40 8.9543 31.0457 0 20 0V20H40Z" fill="currentColor"></path>
                                                </g>
                                            </svg>
                                            <div class="h5 fw-bold mb-0">Practical Based</div>
                                            <p class="fs-xl">
                                                We'll give you lots of materials to use before you come to our training
                                                sessions, both online and in person. This includes videos, slideshows,
                                                and forms to help you practice. You'll also get to try some mock exams
                                                to get a feel for what it's really like, and you'll get feedback from
                                                our teachers to help you improve. Plus, we'll give you a study guide to
                                                help you learn on your own.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center align-self-center pb-3 mb-2 mb-md-3 mb-xl-4" style="max-width: 570px;">
{{--                                    <div class="bg-light rounded-circle flex-shrink-0 position-relative z-2 me-n5" style="padding: .375rem;">--}}
{{--                                        <img class="rounded-circle" src="assets/img/avatar/45.jpg" width="80" alt="Avatar">--}}
{{--                                    </div>--}}
                                    <div class="card bg-secondary border-0 rounded-4 py-3 ps-4 ps-sm-5 pe-3">
                                        <div class="card-body py-3 px-2 p-sm-4 ms-4 ms-sm-0">
                                            <svg class="d-block mt-1 mt-sm-0 mb-4" width="40" height="40" viewBox="0 0 40 40" xmlns="http://www.w3.org/2000/svg">
                                                <g class="text-info">
                                                    <path d="M25,25h15v15H25V25z" fill="currentColor"></path>
                                                </g>
                                                <g class="text-primary">
                                                    <path d="M10,20c0-5.5,4.5-10,10-10s10,4.5,10,10h10C40,9,31,0,20,0S0,9,0,20s9,20,20,20V30C14.5,30,10,25.5,10,20z" fill="currentColor"></path>
                                                </g>
                                            </svg>
                                            <div class="h5 fw-bold mb-0">Online Platform</div>
                                            <p class="fs-xl">
                                                Even after our training sessions are over, you'll still have access to
                                                all our resources and guidelines through our online learning platform.
                                                This way, you can keep learning and practicing until you take your exam.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center align-self-end" style="max-width: 570px;">
{{--                                    <div class="bg-light rounded-circle flex-shrink-0 position-relative z-2 me-n5" style="padding: .375rem;">--}}
{{--                                        <img class="rounded-circle" src="assets/img/avatar/46.jpg" width="80" alt="Avatar">--}}
{{--                                    </div>--}}
                                    <div class="card bg-secondary border-0 rounded-4 py-3 ps-4 ps-sm-5 pe-3">
                                        <div class="card-body py-3 px-2 p-sm-4 ms-4 ms-sm-0">
                                            <svg class="d-block mt-1 mt-sm-0 mb-4" width="40" height="40" viewBox="0 0 40 40" xmlns="http://www.w3.org/2000/svg">
                                                <g class="text-primary">
                                                    <path d="M25.2791 12.7502C28.1954 9.83389 28.1954 5.10556 25.2791 2.18921C22.3627 -0.727136 17.6344 -0.727137 14.718 2.18921C11.8017 5.10556 11.8017 9.83389 14.718 12.7502C17.6344 15.6666 22.3627 15.6666 25.2791 12.7502Z" fill="currentColor"></path>
                                                </g>
                                                <g class="text-info">
                                                    <path d="M14.6859 29.3056C15.6559 27.0123 16.9202 24.8838 18.4577 22.9467C13.8666 17.9802 7.29664 14.8701 0 14.8701V40.0004H12.5259C12.5259 36.2925 13.2527 32.6942 14.6859 29.3056Z" fill="currentColor"></path>
                                                </g>
                                                <g class="text-primary">
                                                    <path d="M40.0014 40.0004V14.8701C26.1223 14.8701 14.8711 26.1214 14.8711 40.0004H40.0014Z" fill="currentColor"></path>
                                                </g>
                                            </svg>
                                            <div class="h5 fw-bold mb-0">Exam Support</div>
                                            <p class="fs-xl">
                                                We don't just stop once the training is over. We'll give you support
                                                before your exam with a mentor, our online learning platform, and a
                                                study guide with a suggested timeline. We'll also have competence tests
                                                and resit preparation to make sure you're ready to do your best on exam
                                                day.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <!-- Item -->
                        <div class="swiper-slide bg-light">
                            <div class="d-flex flex-column">
                                <div class="d-flex align-items-center align-self-center pb-3 mb-2 mb-md-3 mb-xl-4" style="max-width: 570px;">
                                    <div class="bg-light rounded-circle flex-shrink-0 position-relative z-2 me-n5" style="padding: .375rem;">
                                        <img class="rounded-circle" src="assets/img/avatar/47.jpg" width="80" alt="Avatar">
                                    </div>
                                    <div class="card bg-secondary border-0 rounded-4 py-3 ps-4 ps-sm-5 pe-3">
                                        <div class="card-body py-3 px-2 p-sm-4 ms-4 ms-sm-0">
                                            <p class="fs-xl">"Sit facilisis dolor arcu, fermentum vestibulum arcu elementum imperdiet. Mauris duis eleifend faucibus amet sagittis amet consequat aucibus cursus."</p>
                                            <div class="h5 fw-bold mb-0">Albert Flores</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center align-self-end pb-3 mb-2 mb-md-3 mb-xl-4" style="max-width: 570px;">
                                    <div class="bg-light rounded-circle flex-shrink-0 position-relative z-2 me-n5" style="padding: .375rem;">
                                        <img class="rounded-circle" src="assets/img/avatar/48.jpg" width="80" alt="Avatar">
                                    </div>
                                    <div class="card bg-secondary border-0 rounded-4 py-3 ps-4 ps-sm-5 pe-3">
                                        <div class="card-body py-3 px-2 p-sm-4 ms-4 ms-sm-0">
                                            <p class="fs-xl">"Morbi ut aliquam etiam luctus feugiat ultrices. Amet pellentesque sagittis, consequat id egestas tristique turpis. Arcu odio ultricies blandit eu neque."</p>
                                            <div class="h5 fw-bold mb-0">Jenny Wilson</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center align-self-center" style="max-width: 570px;">
                                    <div class="bg-light rounded-circle flex-shrink-0 position-relative z-2 me-n5" style="padding: .375rem;">
                                        <img class="rounded-circle" src="assets/img/avatar/49.jpg" width="80" alt="Avatar">
                                    </div>
                                    <div class="card bg-secondary border-0 rounded-4 py-3 ps-4 ps-sm-5 pe-3">
                                        <div class="card-body py-3 px-2 p-sm-4 ms-4 ms-sm-0">
                                            <p class="fs-xl">"Netus vel, amet placerat eget sit eleifend. Urna laoreet ultricies orci feugiat amet egestas semper praesent. Risus ut porttitor metus tortor quis eleifend."</p>
                                            <div class="h5 fw-bold mb-0">Esther Howard</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<!--

    <section id="section-why-us">
        <div class="container my-md-2 my-lg-3 my-xl-4 my-xxl-5">
            <div class="row g-4 pb-xl-2 pb-xxl-3">
                <div class="col">
                    <h2 class="display-6 mb-5 text-center">Why Us</h2>
                </div>
            </div>
            <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-3 g-4 pb-xl-2 pb-xxl-3">

                &lt;!&ndash; Item &ndash;&gt;
                <div class="col">
                    <div class="border-primary border-2 card h-100 rounded-5">
                        <div class="card-body pb-3">
                            <svg class="d-block mt-1 mt-sm-0 mb-4" width="40" height="40" viewBox="0 0 40 40" xmlns="http://www.w3.org/2000/svg">
                                <g class="text-info">
                                    <path d="M26.307 23.1116C26.307 28.3136 22.09 32.5307 16.888 32.5307C11.6859 32.5307 7.46891 28.3136 7.46891 23.1116C7.46891 17.9096 11.6859 13.6925 16.888 13.6925C17.1467 13.6925 17.4028 13.7038 17.6562 13.7243V6.24121C17.4016 6.22973 17.1455 6.22363 16.888 6.22363C7.56102 6.22363 0 13.7846 0 23.1116C0 32.4386 7.56102 39.9996 16.888 39.9996C26.2149 39.9996 33.7759 32.4386 33.7759 23.1116C33.7759 22.8541 33.7698 22.598 33.7584 22.3433H26.2753C26.2958 22.5968 26.307 22.8529 26.307 23.1116Z" fill="currentColor"></path>
                                </g>
                                <g class="text-primary">
                                    <path d="M40 20C40 8.9543 31.0457 0 20 0V20H40Z" fill="currentColor"></path>
                                </g>
                            </svg>
                            <h3 class="h4">PRACTICAL BASED</h3>
                            <p class="mb-0">
                                We'll give you lots of materials to use before you come to our training sessions, both online and in person. This includes videos, slideshows, and forms to help you practice. You'll also get to try some mock exams to get a feel for what it's really like, and you'll get feedback from our teachers to help you improve. Plus, we'll give you a study guide to help you learn on your own.
                            </p>
                        </div>
                        <div class="card-footer border-0 pt-3 mb-3">
                            <a class="btn btn-icon btn-lg btn-outline-primary rounded-circle stretched-link" href="#" aria-label="Learn more">
                                <i class="ai-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>

                &lt;!&ndash; Item &ndash;&gt;
                <div class="col">
                    <div class="border-primary border-2 card h-100 rounded-5">
                        <div class="card-body pb-3">
                            <svg class="d-block mt-1 mt-sm-0 mb-4" width="40" height="40" viewBox="0 0 40 40" xmlns="http://www.w3.org/2000/svg">
                                <g class="text-info">
                                    <path d="M25,25h15v15H25V25z" fill="currentColor"></path>
                                </g>
                                <g class="text-primary">
                                    <path d="M10,20c0-5.5,4.5-10,10-10s10,4.5,10,10h10C40,9,31,0,20,0S0,9,0,20s9,20,20,20V30C14.5,30,10,25.5,10,20z" fill="currentColor"></path>
                                </g>
                            </svg>
                            <h3 class="h4">ONLINE PLATFORM</h3>
                            <p class="mb-0">
                                Even after our training sessions are over, you'll still have access to all our resources and guidelines through our online learning platform. This way, you can keep learning and practicing until you take your exam.
                            </p>
                        </div>
                        <div class="card-footer border-0 pt-3 mb-3">
                            <a class="btn btn-icon btn-lg btn-outline-primary rounded-circle stretched-link" href="#" aria-label="Learn more">
                                <i class="ai-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>

                &lt;!&ndash; Item &ndash;&gt;
                <div class="col">
                    <div class="border-primary border-2 card h-100 rounded-5">
                        <div class="card-body pb-3">
                            <svg class="d-block mt-1 mt-sm-0 mb-4" width="40" height="40" viewBox="0 0 40 40" xmlns="http://www.w3.org/2000/svg">
                                <g class="text-primary">
                                    <path d="M25.2791 12.7502C28.1954 9.83389 28.1954 5.10556 25.2791 2.18921C22.3627 -0.727136 17.6344 -0.727137 14.718 2.18921C11.8017 5.10556 11.8017 9.83389 14.718 12.7502C17.6344 15.6666 22.3627 15.6666 25.2791 12.7502Z" fill="currentColor"></path>
                                </g>
                                <g class="text-info">
                                    <path d="M14.6859 29.3056C15.6559 27.0123 16.9202 24.8838 18.4577 22.9467C13.8666 17.9802 7.29664 14.8701 0 14.8701V40.0004H12.5259C12.5259 36.2925 13.2527 32.6942 14.6859 29.3056Z" fill="currentColor"></path>
                                </g>
                                <g class="text-primary">
                                    <path d="M40.0014 40.0004V14.8701C26.1223 14.8701 14.8711 26.1214 14.8711 40.0004H40.0014Z" fill="currentColor"></path>
                                </g>
                            </svg>
                            <h3 class="h4">EXAM SUPPORT</h3>
                            <p class="mb-0">
                                We don't just stop once the training is over. We'll give you support before your exam with a mentor, our online learning platform, and a study guide with a suggested timeline. We'll also have competence tests and resit preparation to make sure you're ready to do your best on exam day.
                            </p>
                        </div>
                        <div class="card-footer border-0 pt-3 mb-3">
                            <a class="btn btn-icon btn-lg btn-outline-primary rounded-circle stretched-link" href="#" aria-label="Learn more">
                                <i class="ai-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
-->


    <!-- Section 6 - Journey -->
<!--    <section id="journey" class="d-none d-md-block pt-xl-2 pb-5 mb-2 mb-lg-3 mb-xl-4 mb-xxl-5">
        <div class="container">
            <div class="row text-center">
                <div class="col">
                    <div class="d-flex align-items-center">
                        <span class="icon ai-monitor"></span>
                        <img src="{{ asset('assets/images/frontend/home/journey-flow.webp') }}" alt="">
                    </div>
                    <span>Enrol in a Course</span>
                </div>
                <div class="col">
                    <div class="d-flex align-items-center">
                        <span class="icon ai-book"></span>
                        <img src="{{ asset('assets/images/frontend/home/journey-flow.webp') }}" alt="">
                    </div>
                    <span>Complete all the Course Modules</span>
                </div>
                <div class="col">
                    <div class="d-flex align-items-center">
                        <span class="icon ai-calendar"></span>
                        <img src="{{ asset('assets/images/frontend/home/journey-flow.webp') }}" alt="">
                    </div>
                    <span>Attend the Contact Program (if any)</span>
                </div>
                <div class="col">
                    <div class="d-flex align-items-center">
                        <span class="icon ai-open-book"></span>
                        <img src="{{ asset('assets/images/frontend/home/journey-flow.webp') }}" alt="">
                    </div>
                    <span>Pass the Assessments</span>
                </div>
                <div class="col">
                    <span class="icon ai-note"></span>
                    <span>You are Certified!</span>
                </div>
            </div>
        </div>
    </section>-->


@endsection

@section('js')
    @parent
    <script src="{{ asset('assets/js/vendor/jarallax.min.js') }}"></script>
@show
