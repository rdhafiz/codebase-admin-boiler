@extends('frontend.layout.frontend-layout')

@section('css')
    {{--    @vite(['resources/sass/frontend/home.scss'])--}}
@show

@section('content')

    <section class="bg-body py-5 my-lg-0 mt-3">
        <div class="container py-md-2 py-lg-4 my-xl-2 my-xxl-3">

            <div class="row py-4 my-2 my-md-3 my-lg-4">
                <div class="col-md-3 col-lg-3">
                    <h3 class="h5">Filter Jobs</h3>
                    <div class="accordion accordion-alt pb-2 mb-4" id="shopCategories">
                        <div class="accordion-item mb-0">

                            <div class="d-flex align-items-center w-100 mb-2">
{{--                                <label class="form-label fs-xs me-2 mb-0" for="price-min">From</label>--}}
                                <input class="form-control form-control-sm range-slider-value-min" placeholder="Job Title" type="text" id="job-title">
                            </div>
                            <div class="d-flex align-items-center w-100">
                                <input class="form-control form-control-sm range-slider-value-max" placeholder="Job Location" type="text" id="job-location">
                            </div>

                            <h4 class="accordion-header">
                                <button class="accordion-button fs-xl fw-medium py-2" type="button" --data-bs-toggle="collapse" --data-bs-target="#livingRoom" --aria-expanded="true" aria-controls="livingRoom">
                                    <span class="fs-base">Job Type</span>
                                </button>
                            </h4>
                            <div class="accordion-collapse collapse show" id="livingRoom" data-bs-parent="#shopCategories">
                                <div class="accordion-body py-1 mb-1">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="lr-vases">
                                        <label class="form-check-label d-flex align-items-center" for="lr-vases">
                                            <span class="text-nav fw-medium">Permanent</span>
{{--                                            <span class="fs-xs text-body-secondary ms-auto">234</span>--}}
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="lr-mirrors">
                                        <label class="form-check-label d-flex align-items-center" for="lr-mirrors">
                                            <span class="text-nav fw-medium">Temporary</span>
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="lr-paintings">
                                        <label class="form-check-label d-flex align-items-center" for="lr-paintings">
                                            <span class="text-nav fw-medium">Locum</span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-9 col-lg-9">
                    <div class="mb-4 mb-lg-1">
                        <span class="badge fs-sm bg-warning text-white mb-2">Locum</span>
                        <h2 class="mb-2">Assistant Practitioner</h2>
                        <p class="fs-lg mb-0 mb-lg-4">
                            This programme is designed for those who want to pursue a career in Artificial Intelligence (specialising in machine learning and deep learning), developing smart and insightful software agents/algorithms that can...
                        </p>
                    </div>
                    <div class="mb-4 mb-lg-1">
                        <span class="badge fs-sm bg-success text-white mb-2">Permanent</span>
                        <h2 class="mb-2">Neonatal Nursing Associate</h2>
                        <p class="fs-lg mb-0 mb-lg-4">
                            This programme is designed for those who want to pursue a career in Artificial Intelligence (specialising in machine learning and deep learning), developing smart and insightful software agents/algorithms that can...
                        </p>
                    </div>
                    <div class="mb-4 mb-lg-1">
                        <span class="badge fs-sm bg-info text-white mb-2">Temporary</span>
                        <h2 class="mb-2">Assistant Practitioner - District Nursing Team</h2>
                        <p class="fs-lg mb-0 mb-lg-4">
                            Intelligent Systems, Machine Learning, Deep Learning, and a wider range of application areas ranging from predicting modelling to decision making to fintech to computer vision. Dr Mustansar Ali Ghazanfar is...
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </section>

@endsection
