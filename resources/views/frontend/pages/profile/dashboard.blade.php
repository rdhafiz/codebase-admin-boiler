@extends('frontend.layout.layout')

@section('stylesheet')
@show

@section('content')

    <div class="w-100 bg-secondary py-5 mt-5">
        <div class="w-100 py-5">
            <div class="container-lg">
                <div class="row">

                    <!-- Page content -->
                    <div class="col-lg-12 pt-4 pb-2 pb-sm-4">
                        <h1 class="h2 mb-4">Dashboard</h1>

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

                                <div class="row">
                                    <div class="col-lg-4">
                                        <a href="#"
                                           class="w-100 d-inline-block card card-hover-primary text-decoration-none bg-secondary py-5 px-3 text-center rounded rounded-3 mb-4">
                                            <i class="ai-grid fs-1"></i>
                                            <h4>Moodle</h4>
                                        </a>
                                    </div>
                                    <div class="col-lg-4">
                                        <a href="#"
                                           class="w-100 d-inline-block card card-hover-primary text-decoration-none bg-secondary py-5 px-3 text-center rounded rounded-3 mb-4">
                                            <i class="ai-dollar fs-1"></i>
                                            <h4>Billing</h4>
                                        </a>
                                    </div>
                                    <div class="col-lg-4">
                                        <a href="#"
                                           class="w-100 d-inline-block card card-hover-primary text-decoration-none bg-secondary py-5 px-3 text-center rounded rounded-3 mb-4">
                                            <i class="ai-open-book fs-1"></i>
                                            <h4>Attendance</h4>
                                        </a>
                                    </div>
                                    <div class="col-lg-4">
                                        <a href="#"
                                           class="w-100 d-inline-block card card-hover-primary text-decoration-none bg-secondary py-5 px-3 text-center rounded rounded-3 mb-4">
                                            <i class="ai-monitor fs-1"></i>
                                            <h4>E-Enrolment System</h4>
                                        </a>
                                    </div>
                                    <div class="col-lg-4">
                                        <a href="#"
                                           class="w-100 d-inline-block card card-hover-primary text-decoration-none bg-secondary py-5 px-3 text-center rounded rounded-3 mb-4">
                                            <i class="ai-calendar-check fs-1"></i>
                                            <h4>Initial Assessments</h4>
                                        </a>
                                    </div>
                                    <div class="col-lg-4">
                                        <a href="#"
                                           class="w-100 d-inline-block card card-hover-primary text-decoration-none bg-secondary py-5 px-3 text-center rounded rounded-3 mb-4">
                                            <i class="ai-briefcase fs-1"></i>
                                            <h4>CRM</h4>
                                        </a>
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
