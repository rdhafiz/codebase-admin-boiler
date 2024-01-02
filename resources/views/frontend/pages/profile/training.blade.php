@extends('frontend.layout.layout')

@section('stylesheet')
@show

@section('content')

    <div class="w-100 bg-secondary py-5 mt-5">
        <div class="w-100 py-5">
            <div class="container-lg">
                <div class="row">

                    @include('frontend.pages.profile.aside-menu')

                    <!-- Page content -->
                    <div class="col-lg-9 pt-4 pb-2 pb-sm-4">
                        <h1 class="h2 mb-4">Training / Courses</h1>

                        <section class="card border-0 py-1 p-md-2 p-xl-3 p-xxl-4">
                            <div class="card-body">
                                <div class="d-flex align-items-center mt-sm-n1 pb-4 mb-0 mb-lg-1 mb-xl-3">
                                    <i class="ai-open-book text-primary lead pe-1 me-2"></i>
                                    <h2 class="h4 mb-0">Training / Courses</h2>
                                    <a class="btn btn-sm btn-secondary ms-auto" href="account-orders.html">View all</a>
                                </div>

                                <!-- Orders accordion -->
                                <div class="accordion accordion-alt accordion-orders" id="orders">

                                    <!-- Order -->
                                    <div class="accordion-item border-top border-bottom mb-0">
                                        <div class="accordion-header">
                                            <a class="accordion-button d-flex fs-4 fw-normal text-decoration-none py-3 collapsed" href="#order0" data-bs-toggle="collapse">
                                                <div class="d-flex justify-content-between w-100" style="max-width: 440px;">
                                                    <div class="me-3 me-sm-4">
                                                        <div class="fs-sm text-body-secondary">OSCE, 2024</div>
                                                        <span class="badge bg-info text-white fs-xs">In Progress</span>
                                                    </div>
                                                    <div class="me-3 me-sm-4">
                                                        <div class="d-none d-sm-block fs-sm text-body-secondary mb-2">Start Date</div>
                                                        <div class="d-sm-none fs-sm text-body-secondary mb-2">Date</div>
                                                        <div class="fs-sm fw-medium text-dark">January 09, 2024</div>
                                                    </div>
                                                    <div class="me-3 me-sm-4">
                                                        <div class="fs-sm text-body-secondary mb-2">Fee</div>
                                                        <div class="fs-sm fw-medium text-dark">$1000</div>
                                                    </div>
                                                </div>
                                                <div class="accordion-button-img d-none d-sm-flex ms-auto">
                                                    &nbsp;
                                                </div>
                                            </a>
                                        </div>
                                        <div class="accordion-collapse collapse" id="order0" data-bs-parent="#order0">
                                            <div class="accordion-body">
                                                <div class="bg-secondary rounded-1 p-4 my-2">
                                                    <div class="row">
                                                        <div class="col-sm-6 col-md-6 col-lg-6 mb-3 mb-md-0">
                                                            <div class="fs-sm fw-medium text-dark mb-1">Payment:</div>
                                                            <div class="fs-sm">Pay in Installment</div>
                                                            <a class="btn btn-link py-1 px-0 mt-2" href="#">
                                                                <i class="ai-time me-2 ms-n1"></i>
                                                                Payment history
                                                            </a>
                                                        </div>
                                                        <div class="col-md-6 col-lg-6 text-md-end">
                                                            <button class="btn btn-sm btn-outline-primary w-100 w-md-auto" type="button">
                                                                <i class="ai-star me-2 ms-n1"></i>
                                                                Leave a review
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Order -->
                                    <div class="accordion-item border-top border-bottom mb-0">
                                        <div class="accordion-header">
                                            <a class="accordion-button d-flex fs-4 fw-normal text-decoration-none py-3 collapsed" href="#order1" data-bs-toggle="collapse">
                                                <div class="d-flex justify-content-between w-100" style="max-width: 440px;">
                                                    <div class="me-3 me-sm-4">
                                                        <div class="fs-sm text-body-secondary">OSCE, 2023</div>
                                                        <span class="badge bg-success bg-opacity-50 text-dark fs-xs">Completed</span>
                                                    </div>
                                                    <div class="me-3 me-sm-4">
                                                        <div class="d-none d-sm-block fs-sm text-body-secondary mb-2">Start Date</div>
                                                        <div class="d-sm-none fs-sm text-body-secondary mb-2">Date</div>
                                                        <div class="fs-sm fw-medium text-dark">May 11, 2023</div>
                                                    </div>
                                                    <div class="me-3 me-sm-4">
                                                        <div class="fs-sm text-body-secondary mb-2">Fee</div>
                                                        <div class="fs-sm fw-medium text-dark">$1000</div>
                                                    </div>
                                                </div>
                                                <div class="accordion-button-img d-none d-sm-flex ms-auto">
                                                    &nbsp;
                                                </div>
                                            </a>
                                        </div>
                                        <div class="accordion-collapse collapse" id="order1" data-bs-parent="#order1">
                                            <div class="accordion-body">
                                                <div class="bg-secondary rounded-1 p-4 my-2">
                                                    <div class="row">
                                                        <div class="col-sm-6 col-md-6 col-lg-6 mb-3 mb-md-0">
                                                            <div class="fs-sm fw-medium text-dark mb-1">Payment:</div>
                                                            <div class="fs-sm">Pay in Installment</div>
                                                            <a class="btn btn-link py-1 px-0 mt-2" href="#">
                                                                <i class="ai-time me-2 ms-n1"></i>
                                                                Payment history
                                                            </a>
                                                        </div>
                                                        <div class="col-md-6 col-lg-6 text-md-end">
                                                            <button class="btn btn-sm btn-outline-primary w-100 w-md-auto" type="button">
                                                                <i class="ai-star me-2 ms-n1"></i>
                                                                Leave a review
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </section>

                    </div>

                </div>
            </div>
        </div>
    </div>

@endsection
@section('js')
@endsection
