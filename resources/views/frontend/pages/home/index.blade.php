@extends('frontend.layout.frontend-layout')

@section('css')
    @vite(['resources/sass/frontend/home.scss'])
@show

@section('content')

    <!-- Section 1 - Hero -->
    <section class="bg-dark d-flex min-vh-100 position-relative overflow-hidden py-5" data-bs-theme="dark">
        <div class="container d-flex flex-column justify-content-center position-relative z-2 pt-sm-3 pt-md-4 pt-xl-5 pb-1 pb-sm-3 pb-lg-4 pb-xl-5">
            <div class="row flex-lg-nowrap align-items-center pb-5 pt-2 pt-lg-4 pt-xl-0 mt-lg-4 mt-xl-0">
                <div class="col-lg-7 order-lg-2 ms-lg-4 mb-2 mb-lg-0">
                    <div class="parallax order-lg-2 mx-auto" style="max-width: 740px;">
                        <div class="parallax-layer" data-depth="0.05">
                            <img src="{{ asset('assets/images/frontend/landing/saas-2/hero/01.png') }}" alt="Layer">
                        </div>
                        <div class="parallax-layer" data-depth="-0.05">
                            <img src="{{ asset('assets/images/frontend/landing/saas-2/hero/02.png') }}" style="animation: rotate-cw 100s linear infinite;" alt="Layer">
                        </div>
{{--                        <div class="parallax-layer z-2" data-depth="0.3">--}}
{{--                            <img src="{{ asset('assets/images/frontend/landing/saas-2/hero/03.png') }}" alt="Layer"></div>--}}
{{--                        <div class="parallax-layer z-2" data-depth="0.15">--}}
{{--                            <img src="{{ asset('assets/images/frontend/landing/saas-2/hero/04.png') }}" alt="Layer">--}}
{{--                        </div>--}}
{{--                        <div class="parallax-layer z-2" data-depth="0.4">--}}
{{--                            <img src="{{ asset('assets/images/frontend/landing/saas-2/hero/05.png') }}" alt="Layer">--}}
{{--                        </div>--}}
                    </div>
                </div>
                <div class="col-lg-5 order-lg-1 text-center text-lg-start me-xl-5">
                    <span class="badge bg-warning bg-opacity-10 text-warning fs-5">Take your career to the next level&nbsp; 🚀</span>
                    <h1 class="display-4 py-3 my-2 mb-xl-3">
                        We Transform Medics Lives
                    </h1>
                    <ul class="list-unstyled d-table text-start mx-auto mx-lg-0 mb-0">
                        <li class="d-flex text-body pb-2 mb-1">
                            <i class="ai-check-alt text-primary lead me-2"></i>
                            Road to being a Health Hero
                        </li>
                        <li class="d-flex text-body pb-2 mb-1">
                            <i class="ai-check-alt text-primary lead me-2"></i>
                            Transform Your Life in UK
                        </li>
                        <li class="d-flex text-body pb-2 mb-1">
                            <i class="ai-check-alt text-primary lead me-2"></i>
                            Gateway for Healthcare Professionals
                        </li>
                    </ul>
                    <div class="d-flex justify-content-center justify-content-lg-start pt-4 pt-xl-5">
                        <div class="text-center">
                            <a class="btn btn-lg btn-primary rounded-pill w-100 w-sm-auto" href="#">Apply Now</a>
                            <p class="text-body fs-sm pt-2 mt-sm-1 mb-0">100% job guaranteed!</p>
                        </div>
                    </div>
                </div>
            </div>
{{--            <div class="row row-cols-3 row-cols-sm-4 row-cols-lg-5 row-cols-xl-6 justify-content-center align-items-center g-4 pt-lg-3 pt-xl-4">--}}
{{--                <div class="col">--}}
{{--                    <img class="d-block my-1 mx-auto" src="{{ asset('assets/images/frontend/landing/saas-1/brands/foster-light.svg') }}" width="145" alt="Foster">--}}
{{--                </div>--}}
{{--                <div class="col">--}}
{{--                    <img class="d-block my-1 mx-auto" src="{{ asset('assets/images/frontend/landing/saas-1/brands/klinos-light.svg') }}" width="140" alt="Klinos">--}}
{{--                </div>--}}
{{--                <div class="col">--}}
{{--                    <img class="d-block my-1 mx-auto" src="{{ asset('assets/images/frontend/landing/saas-1/brands/champion-light.svg') }}" width="160" alt="Champion">--}}
{{--                </div>--}}
{{--                <div class="col">--}}
{{--                    <img class="d-block my-1 mx-auto" src="{{ asset('assets/images/frontend/landing/saas-1/brands/airbnb-light.svg') }}" width="130" alt="Airbnb">--}}
{{--                </div>--}}
{{--                <div class="col">--}}
{{--                    <img class="d-block my-1 mx-auto" src="{{ asset('assets/images/frontend/landing/saas-1/brands/starcraft-light.svg') }}" width="160" alt="Starcraft">--}}
{{--                </div>--}}
{{--                <div class="col">--}}
{{--                    <img class="d-block my-1 mx-auto" src="{{ asset('assets/images/frontend/landing/saas-1/brands/alpine-light.svg') }}" width="150" alt="Alpine">--}}
{{--                </div>--}}
{{--            </div>--}}
        </div>
    </section>


    <!-- Section 2 - Courses Overview -->
    <section id="section-schedule" class="bg-theme">
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
{{--            <div class="text-center pt-4 mt-2 mt-lg-0 pt-lg-5 pb-sm-2 pb-md-4">--}}
{{--                <a class="btn btn-primary" href="blog-grid-sidebar.html">Read all articles</a>--}}
{{--            </div>--}}
        </div>
    </section>


    <!-- Section 3 - Jobs -->
    <section class="">
        <div class="container mt-1 py-md-2 py-lg-4">
            <h2 class="h1 text-center pt-1 pt-sm-4 pb-3 mb-3 mb-lg-4">Find a Job You'll Love</h2>
{{--            <p class="text-center mx-auto pb-3 mb-3 mb-lg-4" style="max-width: 480px;">Using basic data skills you can analysis and improve your business indicators with Around</p>--}}
            <div class="row g-4 pb-2 pb-sm-4 mb-sm-2">

                <!-- Item -->
                <div class="col-md-5">
                    <div class="bg-secondary card border-0 h-100">
                        <div class="card-body">
                            <a href="#">
{{--                                <img class="d-dark-mode-none" src="{{ asset('assets/images/frontend/landing/saas-2/features/01-light.png') }}" alt="Image">--}}
{{--                                <img class="d-none d-dark-mode-block" src="{{ asset('assets/images/frontend/landing/saas-2/features/01-dark.png') }}" alt="Image">--}}
                                <img src="{{ asset('assets/images/frontend/home/temporary.png') }}" width="90" alt="Locum">
                            </a>
                            <div class="pt-3 mt-2 mt-lg-3">
                                <h3>Locum</h3>
                                <p class="mb-0">We cover a variety of different roles and can help you find locums for short-term or long-term cover</p>
                                <a class="btn btn-link p-0 fs-5" href="#">
                                    Find more
                                    <i class="ai-arrow-right ms-2"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Item -->
                <div class="col-md-7">
                    <div class="bg-secondary card border-0 h-100">
                        <div class="card-body overflow-hidden">
                            <div class="d-sm-flex align-items-center">
                                <a class="d-block order-sm-2 flex-shrink-0 mt-n4 mb-n2" href="#">
{{--                                    <img src="{{ asset('assets/images/frontend/landing/saas-2/features/02.png') }}" width="308" alt="Image">--}}
                                    <img src="{{ asset('assets/images/frontend/home/parttime.png') }}" width="90" alt="Temporary">
                                </a>
                                <div class="order-sm-1 pe-sm-3 me-xl-4">
                                    <h3>Temporary</h3>
                                    <p class="pb-3 mb-1 mb-xl-3">
                                        We provide permanent (full time/ part time) and temporary staffing solutions for the NHS, primary care and private sector
                                    </p>
                                    <a class="btn btn-link p-0 fs-5" href="#">
                                        Find more
                                        <i class="ai-arrow-right ms-2"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Item -->
                <div class="col-md-7">
                    <div class="bg-secondary card border-0 h-100">
                        <div class="card-body overflow-hidden">
                            <div class="d-sm-flex align-items-center">
                                <a class="d-block order-sm-2 flex-shrink-0 mt-n4 mb-n2" href="#">
{{--                                    <img class="d-dark-mode-none" src="{{ asset('assets/images/frontend/landing/saas-2/features/03-light.png') }}" width="308" alt="Image">--}}
{{--                                    <img class="d-none d-dark-mode-block" src="{{ asset('assets/images/frontend/landing/saas-2/features/03-dark.png') }}" width="308" alt="Image">--}}
                                    <img src="{{ asset('assets/images/frontend/home/fulltime.png') }}" width="90" alt="Fulltime">
                                </a>
                                <div class="order-sm-1 pe-sm-3 me-xl-4">
                                    <h3>Permanent</h3>
                                    <p class="pb-3 mb-1 mb-xl-3">
                                        We provide permanent (full time/ part time) and temporary staffing solutions for the NHS, primary care and private sector
                                    </p>
                                    <a class="btn btn-link p-0 fs-5" href="#">
                                        Find more
                                        <i class="ai-arrow-right ms-2"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Item -->
                <div class="col-md-5">
                    <div class="border-0 h-100 d-flex justify-content-end">
                        <a class="btn btn-link fs-1 p-0" href="#">
                            View All Jobs
                            <i class="ai-arrow-right ms-2"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Section 4 - Why Choose Us -->
    <section class="bg-secondary">
        <section class="container pt-5 pt-xl-2 pb-5 mb-2 mb-lg-3 mb-xl-4 mb-xxl-5">
        <div class="row align-items-center pt-2 pt-sm-3 pt-md-4 pt-lg-5 mt-xl-2 mt-xxl-3">
            <div class="col-md-6 col-xl-5 pb-3 pb-md-0 mb-4 mb-md-0">
                <div class="ratio ratio-1x1 d-flex align-items-center position-relative rounded-circle overflow-hidden bg-size-cover mx-auto" style="max-width: 530px; background-image: url('assets/images/frontend/home/why-choose-us.jpeg');">
                    <div class="bg-black position-absolute top-0 start-0 w-100 h-100 opacity-50"></div>
                    <div class="position-relative z-2 p-4" data-bs-theme="dark">
                        <div class="text-center mx-auto" style="max-width: 275px;">
{{--                            <span class="d-block text-body fs-sm text-uppercase mb-3">Why Choose Us</span>--}}
                            <h2 class="display-6 mb-0">Why <br>Choose Us</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xl-5 offset-xl-1">
                <div class="ps-md-4 ps-xl-0">
                    <div class="steps steps-hoverable">
                        <div class="step py-3 py-xl-4">
                            <div class="step-number">
                                <div class="step-number-inner">M</div>
                            </div>
                            <div class="step-body">
                                <h3 class="h5 pb-1 mb-2">Motivation</h3>
                                <p class="mb-0">We create a positive and motivating environment to help our clients reach their full potential and exceed their own expectations.</p>
                            </div>
                        </div>
                        <div class="step py-3 py-xl-4">
                            <div class="step-number">
                                <div class="step-number-inner">E</div>
                            </div>
                            <div class="step-body">
                                <h3 class="h5 pb-1 mb-2">Excellence</h3>
                                <p class="mb-0">We strive for the highest level of quality and performance in all aspects of our work, constantly seeking to improve and set high standards for ourselves and others. We commit to a process of continuous growth and development.</p>
                            </div>
                        </div>
                        <div class="step py-3 py-xl-4">
                            <div class="step-number">
                                <div class="step-number-inner">D</div>
                            </div>
                            <div class="step-body">
                                <h3 class="h5 pb-1 mb-2">Dedication</h3>
                                <p class="mb-0">We are dedicated to providing a high-quality service and continuously improving our training and recruitment methods to meet the needs of our clients.</p>
                            </div>
                        </div>
                        <div class="step py-3 py-xl-4">
                            <div class="step-number">
                                <div class="step-number-inner">I</div>
                            </div>
                            <div class="step-body">
                                <h3 class="h5 pb-1 mb-2">Inclusivity</h3>
                                <p class="mb-0">We foster an inclusive culture that embraces the British values of fairness and tolerance of all in the workplace.</p>
                            </div>
                        </div>
                        <div class="step py-3 py-xl-4">
                            <div class="step-number">
                                <div class="step-number-inner">C</div>
                            </div>
                            <div class="step-body">
                                <h3 class="h5 pb-1 mb-2">Community</h3>
                                <p class="mb-0">We strive to build a strong community of medical professionals that can support each other in their professional development and career advancement.</p>
                            </div>
                        </div>
                        <div class="step py-3 py-xl-4">
                            <div class="step-number">
                                <div class="step-number-inner">S</div>
                            </div>
                            <div class="step-body">
                                <h3 class="h5 pb-1 mb-2">Support</h3>
                                <p class="mb-0">We offer unparalleled support to our clients, both during their training and as they navigate the job market.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    </section>


    <!-- Section 5 - Services -->
    <section class="">
        <div class="container my-md-2 my-lg-3 my-xl-4 my-xxl-5">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-3 g-4 pb-xl-2 pb-xxl-3">

                <!-- Item -->
                <div class="col">
                    <div class="bg-secondary card h-100 border-0 rounded-5">
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

                <!-- Item -->
                <div class="col">
                    <div class="bg-secondary card h-100 border-0 rounded-5">
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

                <!-- Item -->
                <div class="col">
                    <div class="bg-secondary card h-100 border-0 rounded-5">
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


    <!-- Section 6 - Journey -->
    <section id="journey" class="pt-xl-2 pb-5 mb-2 mb-lg-3 mb-xl-4 mb-xxl-5">
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
    </section>


@endsection
