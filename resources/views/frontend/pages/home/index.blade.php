@extends('frontend.layout.layout')

@section('stylesheet')
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    @vite(['resources/sass/frontend/home.scss'])
@show

@section('content')

    @include('frontend.pages.home.widgets.banner')
    @include('frontend.pages.home.widgets.courses')
    @include('frontend.pages.home.widgets.jobs')







    <!-- Section 4 - Why Choose Us -->
    <section id="section-medics" class="bg-secondary">
        <section class="container pt-5 pt-xl-2 pb-5 mb-2 mb-lg-3 mb-xl-4 mb-xxl-5">
            <div class="row align-items-start pt-2 pt-sm-3 pt-md-4 pt-lg-5 mt-xl-2 mt-xxl-3">
                <div class="col-md-6 col-xl-5 pb-3 pb-md-0 mb-4 mb-md-0 pt-lg-4">
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
                <div class="col-md-6 col-xl-6 offset-xl-1">
                    <div class="ps-md-4 ps-lg-0">
                        <div class="position-relative d-flex justify-content-end my-3 py-1">
                            <div class="btn btn-lg btn-icon btn-theme fs-xl fw-bold rounded-circle position-absolute top-50 start-0 translate-middle-y z-2 pe-none">M</div>
                            <div class="card border-0 ps-3" style="width: calc(100% - 1.75rem);">
                                <div class="card-body ps-4 py-4">
                                    <h3 class="h5 card-title pb-2 mb-1">Motivation</h3>
                                    <p class="card-text">
                                        We create a positive and motivating environment to help our clients reach their full potential and exceed their own expectations.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="position-relative d-flex justify-content-end my-3 py-1">
                            <div class="btn btn-lg btn-icon btn-theme fs-xl fw-bold rounded-circle position-absolute top-50 start-0 translate-middle-y z-2 pe-none">E</div>
                            <div class="card border-0 ps-3" style="width: calc(100% - 1.75rem);">
                                <div class="card-body ps-4 py-4">
                                    <h3 class="h5 card-title pb-2 mb-1">Excellence</h3>
                                    <p class="card-text">
                                        We strive for the highest level of quality and performance in all aspects of our work, constantly seeking to improve and set high standards for ourselves and others. We commit to a process of continuous growth and development.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="position-relative d-flex justify-content-end my-3 py-1">
                            <div class="btn btn-lg btn-icon btn-theme fs-xl fw-bold rounded-circle position-absolute top-50 start-0 translate-middle-y z-2 pe-none">D</div>
                            <div class="card border-0 ps-3" style="width: calc(100% - 1.75rem);">
                                <div class="card-body ps-4 py-4">
                                    <h3 class="h5 card-title pb-2 mb-1">Dedication</h3>
                                    <p class="card-text">
                                        We are dedicated to providing a high-quality service and continuously improving our training and recruitment methods to meet the needs of our clients.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="position-relative d-flex justify-content-end my-3 py-1">
                            <div class="btn btn-lg btn-icon btn-theme fs-xl fw-bold rounded-circle position-absolute top-50 start-0 translate-middle-y z-2 pe-none">I</div>
                            <div class="card border-0 ps-3" style="width: calc(100% - 1.75rem);">
                                <div class="card-body ps-4 py-4">
                                    <h3 class="h5 card-title pb-2 mb-1">Inclusivity</h3>
                                    <p class="card-text">
                                        We foster an inclusive culture that embraces the British values of fairness and tolerance of all in the workplace.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="position-relative d-flex justify-content-end my-3 py-1">
                            <div class="btn btn-lg btn-icon btn-theme fs-xl fw-bold rounded-circle position-absolute top-50 start-0 translate-middle-y z-2 pe-none">C</div>
                            <div class="card border-0 ps-3" style="width: calc(100% - 1.75rem);">
                                <div class="card-body ps-4 py-4">
                                    <h3 class="h5 card-title pb-2 mb-1">Community</h3>
                                    <p class="card-text">
                                        We strive to build a strong community of medical professionals that can support each other in their professional development and career advancement.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="position-relative d-flex justify-content-end my-3 py-1">
                            <div class="btn btn-lg btn-icon btn-theme fs-xl fw-bold rounded-circle position-absolute top-50 start-0 translate-middle-y z-2 pe-none">S</div>
                            <div class="card border-0 ps-3" style="width: calc(100% - 1.75rem);">
                                <div class="card-body ps-4 py-4">
                                    <h3 class="h5 card-title pb-2 mb-1">Support</h3>
                                    <p class="card-text">
                                        We offer unparalleled support to our clients, both during their training and as they navigate the job market.
                                    </p>
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
                    <h2 class="text-body h1 fw-bold lh-1 pe-3 d-flex justify-content-center">
                        Why Would You <br/>Choose Us?
                    </h2>
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

                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection

@section('js')
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    {{--    <script src="{{ asset('assets/js/vendor/jarallax.min.js') }}"></script>--}}
    <script>
        $(function (){
            $('.owl-carousel').owlCarousel({
                loop:true,
                margin:0,
                nav:false,
                dots:false,
                items:1,
                autoplay:true,
                autoplayTimeout:5000,
                autoplayHoverPause:false,
                animateOut: 'fadeOut'
            })
            AOS.init();
        })
    </script>
@show
