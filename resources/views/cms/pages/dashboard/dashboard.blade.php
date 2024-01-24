@extends('cms.layout.layout')
@section('content')

    <div class="w-100 p-3 p-lg-5">

        <div class="w-100 mb-4">
            <h2 class="fs-2 m-0 p-0">Dashboard</h2>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
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
                <div class="block-content" id="vueTrainerListInstance">

                    <div class="w-100">
                        <div class="row">
                            <div class="col-lg-4">
                                <a href=""
                                   class="position-relative w-100 d-inline-block card card-hover-primary text-decoration-none bg-light py-5 px-2 text-center rounded rounded-3 mb-4">
                                    <ul class="cube_rains"><li></li><li></li><li></li><li></li></ul>
                                    <img style="height: 80px" src="{{asset('assets/images/modules/payroll.png')}}" alt="">
                                    <h4>Payroll Management</h4>
                                </a>
                            </div>
                            <div class="col-lg-4">
                                <a href=""
                                   class="position-relative w-100 d-inline-block card card-hover-primary text-decoration-none bg-light py-5 px-2 text-center rounded rounded-3 mb-4">
                                    <ul class="cube_rains"><li></li><li></li><li></li><li></li></ul>
                                    <img style="height: 80px" src="{{asset('assets/images/modules/calendar.png')}}" alt="">
                                    <h4>Calendar Schedules</h4>
                                </a>
                            </div>
                            <div class="col-lg-4">
                                <a href="https://moodle.purplemed.co.uk/" target="_blank"
                                   class="position-relative w-100 d-inline-block card card-hover-primary text-decoration-none bg-light py-5 px-2 text-center rounded rounded-3 mb-4">
                                    <ul class="cube_rains"><li></li><li></li><li></li><li></li></ul>
                                    <img style="height: 80px" src="{{asset('assets/images/modules/moodle.png')}}" alt="">
                                    <h4>Moodle Courses</h4>
                                </a>
                            </div>
                            <div class="col-lg-4">
                                <a href=""
                                   class="position-relative w-100 d-inline-block card card-hover-primary text-decoration-none bg-light py-5 px-2 text-center rounded rounded-3 mb-4">
                                    <ul class="cube_rains"><li></li><li></li><li></li><li></li></ul>
                                    <img style="height: 80px" src="{{asset('assets/images/modules/training.png')}}" alt="">
                                    <h4>Training Management</h4>
                                </a>
                            </div>
                            <div class="col-lg-4">
                                <a href=""
                                   class="position-relative w-100 d-inline-block card card-hover-primary text-decoration-none bg-light py-5 px-2 text-center rounded rounded-3 mb-4">
                                    <ul class="cube_rains"><li></li><li></li><li></li><li></li></ul>
                                    <img style="height: 80px" src="{{asset('assets/images/modules/billing.png')}}" alt="">
                                    <h4>Billing Management</h4>
                                </a>
                            </div>
                            <div class="col-lg-4">
                                <a href="{{route('CMS.page.index')}}"
                                   class="position-relative w-100 d-inline-block card card-hover-primary text-decoration-none bg-light py-5 px-2 text-center rounded rounded-3 mb-4">
                                    <ul class="cube_rains"><li></li><li></li><li></li><li></li></ul>
                                    <img style="height: 80px" src="{{asset('assets/images/modules/website.png')}}" alt="">
                                    <h4>Website Management</h4>
                                </a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>



@endsection
