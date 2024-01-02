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
                        <h1 class="h2 mb-4">Overview</h1>

                        <div class="w-100">
                            @if($errors->has('success'))
                                <p class="alert alert-success">{{$errors->first('success')}}</p>
                            @endif
                            @if($errors->has('error'))
                                <p class="alert alert-danger">{{$errors->first('error')}}</p>
                            @endif
                        </div>

                        <!-- Basic info -->
                        <section class="card border-0 py-1 p-md-2 p-xl-3 p-xxl-4 mb-4">
                            <div class="card-body">
                                <div class="d-flex align-items-center mt-sm-n1 pb-4 mb-0 mb-lg-1 mb-xl-3">
                                    <i class="ai-user text-primary lead pe-1 me-2"></i>
                                    <h2 class="h4 mb-0">Basic info</h2>
                                    <a class="btn btn-sm btn-secondary ms-auto" href="{{route('front.profile.update')}}">
                                        <i class="ai-edit ms-n1 me-2"></i>
                                        Edit Profile
                                    </a>
                                </div>
                                <div class="d-md-flex align-items-center">
                                    <div class="d-sm-flex align-items-center">
                                        <div class="rounded-circle bg-size-cover bg-position-center flex-shrink-0" style="width: 80px; height: 80px; background-image: url({{asset('storage/'.auth()->user()->avatar)}});"></div>
                                        <div class="pt-3 pt-sm-0 ps-sm-3">
                                            <h3 class="h5 mb-2">{{auth()->user()->name}}<i class="ai-circle-check-filled fs-base text-success ms-2"></i></h3>
                                            <div class="text-body-secondary fw-medium d-flex flex-wrap flex-sm-nowrap align-iteems-center">
                                                <div class="d-flex align-items-center me-3">
                                                    <i class="ai-mail me-1"></i>
                                                    {{auth()->user()->email}}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="w-100 pt-3 pt-md-0 ms-md-auto" style="max-width: 212px;">
                                        <div class="d-flex justify-content-between fs-sm pb-1 mb-2">
                                            Profile completion
                                            <strong class="ms-2">20%</strong>
                                        </div>
                                        <div class="progress" style="height: 5px;">
                                            <div class="progress-bar" role="progressbar" style="width: 20%" aria-valuenow="62" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row py-4 mb-2 mb-sm-3">
                                    <div class="col-md-6 mb-4 mb-md-0">
                                        <table class="table mb-0">
                                            <tbody>
                                            <tr>
                                                <td class="border-0 text-body-secondary py-1 px-0">Phone</td>
                                                <td class="border-0 text-dark fw-medium py-1 ps-3">{{auth()->user()->phone}}</td>
                                            </tr>
                                            <tr>
                                                <td class="border-0 text-body-secondary py-1 px-0">Gender</td>
                                                <td class="border-0 text-dark fw-medium py-1 ps-3">{{auth()->user()->gender}}</td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="alert alert-info d-flex mb-0" role="alert">
                                    <i class="ai-circle-info fs-xl"></i>
                                    <div class="ps-2">Fill in the information 100% to receive more suitable offers.<a class="alert-link ms-1" href="account-settings.html">Edit Profile!</a></div>
                                </div>
                            </div>
                        </section>

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
