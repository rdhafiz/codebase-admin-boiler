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

                        <div class="w-100">
                            @if($errors->has('success'))
                                <p class="alert alert-success">{{$errors->first('success')}}</p>
                            @endif
                            @if($errors->has('error'))
                                <p class="alert alert-danger">{{$errors->first('error')}}</p>
                            @endif
                        </div>

                        <section class="card border-0 py-1 p-md-2 p-xl-3 p-xxl-4">
                            <div class="card-body">
                                <div class="d-flex align-items-center mt-sm-n1 pb-4 mb-0 mb-lg-1 mb-xl-3">
                                    <i class="ai-open-book text-primary lead pe-1 me-2"></i>
                                    <h2 class="h4 mb-0">Training / Courses</h2>
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
