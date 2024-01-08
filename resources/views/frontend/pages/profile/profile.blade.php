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
                                    <a class="btn btn-sm btn-secondary ms-auto" href="{{route('front.training')}}">View all</a>
                                </div>

                                <!-- Orders accordion -->
                                <div class="accordion accordion-alt accordion-orders" id="orders">

                                    <!-- Orders -->
                                    @foreach($trainings as $sl => $training)
                                        <div class="accordion-item border-top border-bottom mb-0">
                                            <div class="accordion-header">
                                                <a class="accordion-button d-flex fs-4 fw-normal text-decoration-none py-3 collapsed" href="#order{{$sl}}" data-bs-toggle="collapse">
                                                    <div class="d-flex justify-content-between w-100">
                                                        <div class="me-3 me-sm-4">
                                                            <div class="fs-sm text-body-secondary">{{$training['course_details']['category']['name']}} - {{$training['course_details']['course_title']}} ({{$training['type']['name']}})</div>
                                                            @if($training['payment_status'] == 0)
                                                                <span class="badge bg-warning text-dark fs-xs">Unpaid</span>
                                                            @elseif($training['payment_status'] == 1)
                                                                <span class="badge bg-success text-white fs-xs">Paid</span>
                                                            @elseif($training['payment_status'] == 2)
                                                                <span class="badge bg-info text-white fs-xs">Partially Paid</span>
                                                            @else
                                                                <span class="badge bg-warning text-dark fs-xs">Unpaid</span>
                                                            @endif
                                                        </div>
                                                        <div class="me-3 me-sm-4">
                                                            <div class="d-none d-sm-block fs-sm text-body-secondary mb-2">Start Date</div>
                                                            <div class="d-sm-none fs-sm text-body-secondary mb-2">Start</div>
                                                            <div class="fs-sm fw-medium text-dark">{{date('d M, Y', strtotime($training['schedule']['start']))}}</div>
                                                        </div>
                                                        <div class="me-3 me-sm-4">
                                                            <div class="d-none d-sm-block fs-sm text-body-secondary mb-2">End Date</div>
                                                            <div class="d-sm-none fs-sm text-body-secondary mb-2">End</div>
                                                            <div class="fs-sm fw-medium text-dark">{{date('d M, Y', strtotime($training['schedule']['end']))}}</div>
                                                        </div>
                                                        <div class="me-3 me-sm-4">
                                                            <div class="fs-sm text-body-secondary mb-2">Fee</div>
                                                            <div class="fs-sm fw-medium text-dark">
                                                                @if($training['course_details']['discount'] > 0)
                                                                    £{{$training['course_details']['course_price']['unit_amount'] - $training['course_details']['discount']}}
                                                                    <s class="text-danger">£{{$training['course_details']['course_price']['unit_amount']}}</s>
                                                                @else
                                                                    £{{$training['course_details']['course_price']['unit_amount']}}
                                                                @endif
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="accordion-collapse collapse" id="order{{$sl}}" data-bs-parent="#order{{$sl}}">
                                                <div class="accordion-body">
                                                    <div class="bg-secondary rounded-1 p-4 my-2">
                                                        <div class="row">
                                                            <div class="col-sm-4 col-md-4 col-lg-4 mb-3 mb-md-0">
                                                                <div class="fs-sm fw-medium text-dark mb-1">Payment:</div>
                                                                <div class="fs-sm">
                                                                    @if($training['payment_type'] == 1)
                                                                        Full Payment
                                                                    @elseif($training['payment_type'] == 2)
                                                                        Pay in Installment
                                                                    @endif
                                                                </div>
                                                            </div>
                                                            @foreach($training['payment_instalment_details'] as $step => $instalment)
                                                                <div class="col-sm-4 col-md-4 col-lg-4 mb-3 mb-md-0">
                                                                    <div class="fs-sm fw-medium text-dark mb-1">
                                                                        @if($training['payment_type'] == 1)
                                                                            @if($training['course_details']['discount'] > 0)
                                                                                Full Payment (£{{$training['course_details']['course_price']['unit_amount'] - $training['course_details']['discount']}})
                                                                            @else
                                                                                Full Payment (£{{$training['course_details']['course_price']['unit_amount']}})

                                                                            @endif
                                                                        @elseif($training['payment_type'] == 2)
                                                                            Installment {{$step+1}} (£{{$instalment['price_amount']}})
                                                                        @endif
                                                                    </div>
                                                                    <div class="fs-sm">
                                                                        @if($instalment['status'] == 1)
                                                                            <a target="_blank" class="badge bg-success text-white fs-xs" href="{{route('front.training.payment.process.receipt',[$instalment['course_id'], $instalment['_id']])}}">Paid (View Receipt)</a>
                                                                        @else
                                                                            <a class="badge bg-info text-white fs-xs" href="{{route('front.training.payment.process',[$instalment['course_id'], $instalment['_id']])}}">Pay Now</a>
                                                                        @endif
                                                                    </div>
                                                                </div>
                                                            @endforeach
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach

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
