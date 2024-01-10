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
                        <a class="btn btn-theme w-100 w-sm-auto" href="{{route('front.apply')}}">Apply Now</a>
                        <p class="text-black fs-sm pt-2 mt-sm-1 mb-0">100% job guaranteed!</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
