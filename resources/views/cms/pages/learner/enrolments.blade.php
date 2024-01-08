@extends('cms.layout.layout')
@section('content')
    <div class="w-100 p-3 p-lg-5">

        <div class="w-100 mb-4">
            <h2 class="fs-2 m-0 p-0">{{$learner->name}}'s Enrolment</h2>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('CMS.dashboard')}}">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="{{route('CMS.learner.index')}}">Learners</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{$learner->name}}'s Enrolment</li>
                </ol>
            </nav>
        </div>

        @if($errors->has('success'))
            <div class="alert alert-success d-flex align-items-center" role="alert">
                <i class="fa fa-fw fa-check me-2"></i>
                <p class="mb-0">
                    {{$errors->first('success')}}
                </p>
            </div>
        @endif

        <div class="w-100 mt-4">
            <div class="block block-rounded">
                <div class="block-header block-header-default">
                    <h3 class="block-title">{{$learner->name}}'s Enrolment</h3>
                </div>
                <div class="block-content" id="vueLearnerListInstance">
                    <div class="table-responsive">
                        <table class="table table-striped table-vcenter">
                            <thead>
                            <tr>
                                <th>Course</th>
                                <th class="text-center">Start Date</th>
                                <th class="text-center">End Date</th>
                                <th class="text-center">Fee</th>
                                <th class="text-center">Payment Type</th>
                                <th class="text-center">Payment Status</th>
                                <th>Payment Receipt</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($enrolments as $enrolment)
                                <tr>
                                    <td>{{$enrolment['course_details']['category']['name']}} - {{$enrolment['course_details']['course_title']}} ({{$enrolment['type']['name']}})</td>
                                    <td class="text-center">{{date('d M, Y', strtotime($enrolment['schedule']['start']))}}</td>
                                    <td class="text-center">{{date('d M, Y', strtotime($enrolment['schedule']['end']))}}</td>
                                    <td class="text-center">
                                        @if($enrolment['course_details']['discount'] > 0)
                                            £{{$enrolment['course_details']['course_price']['unit_amount'] - $enrolment['course_details']['discount']}}
                                            <br>
                                            <s class="text-danger">£{{$enrolment['course_details']['course_price']['unit_amount']}}</s>
                                        @else
                                            £{{$enrolment['course_details']['course_price']['unit_amount']}}
                                        @endif
                                    </td>
                                    <td class="text-center">
                                        @if($enrolment['payment_type'] == 1)
                                            <span class="badge bg-info">Full Payment</span>
                                        @elseif($enrolment['payment_type'] == 2)
                                            <span class="badge bg-warning">Pay in Installment</span>
                                        @endif
                                    </td>
                                    <td class="text-center">
                                        @if($enrolment['payment_status'] == 0)
                                            <span class="badge bg-warning text-dark fs-xs">Unpaid</span>
                                        @elseif($enrolment['payment_status'] == 1)
                                            <span class="badge bg-success text-white fs-xs">Paid</span>
                                        @elseif($enrolment['payment_status'] == 2)
                                            <span class="badge bg-info text-white fs-xs">Partially Paid</span>
                                        @else
                                            <span class="badge bg-warning text-dark fs-xs">Unpaid</span>
                                        @endif
                                    </td>
                                    <td>
                                        @foreach($enrolment['payment_instalment_details'] as $step => $instalment)
                                            <div class="w-100">
                                                <div class="fs-sm fw-medium text-dark mb-1">
                                                    @if($enrolment['payment_type'] == 1)
                                                        @if($enrolment['course_details']['discount'] > 0)
                                                            Full Payment (£{{$enrolment['course_details']['course_price']['unit_amount'] - $enrolment['course_details']['discount']}})
                                                        @else
                                                            Full Payment (£{{$enrolment['course_details']['course_price']['unit_amount']}})

                                                        @endif
                                                    @elseif($enrolment['payment_type'] == 2)
                                                        Installment {{$step+1}} (£{{$instalment['price_amount']}})
                                                    @endif
                                                </div>
                                                <div class="fs-sm">
                                                    @if($instalment['status'] == 1)
                                                        <a target="_blank" class="badge bg-success text-white fs-xs" href="{{route('CMS.learner.enrolment.payment.receipt',[$learner->_id,$instalment['course_id'], $instalment['_id']])}}">Paid (View Receipt)</a>
                                                    @else
                                                        -
                                                    @endif
                                                </div>
                                            </div>
                                        @endforeach
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
@section('js')
    @vite('resources/js/cms/pages/learner/learner.js')
@endsection
