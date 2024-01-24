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
                        <h1 class="h2 mb-4">Portal</h1>

                        <div class="w-100">
                            @if($errors->has('success'))
                                <p class="alert alert-success">{{$errors->first('success')}}</p>
                            @endif
                            @if($errors->has('error'))
                                <p class="alert alert-danger">{{$errors->first('error')}}</p>
                            @endif
                        </div>

                        <section class="card border-0 py-1 p-md-2 p-xl-3 p-xxl-4">
                            <div class="card-body pt-5">

                                <div class="row">
                                    <div class="col-lg-4">
                                        <a href="https://moodle.purplemed.co.uk/" target="_blank"
                                           class="position-relative w-100 d-inline-block card card-hover-primary text-decoration-none bg-secondary py-5 px-2 text-center rounded rounded-3 mb-4">
                                            <ul class="cube_rains"><li></li><li></li><li></li><li></li></ul>
                                            <img style="height: 80px" src="{{asset('assets/images/modules/moodle.png')}}" alt="">
                                            <h4>Moodle</h4>
                                        </a>
                                    </div>
                                    <div class="col-lg-4">
                                        <a href="{{route('front.training')}}"
                                           class="position-relative w-100 d-inline-block card card-hover-primary text-decoration-none bg-secondary py-5 px-2 text-center rounded rounded-3 mb-4">
                                            <ul class="cube_rains"><li></li><li></li><li></li><li></li></ul>
                                            <img style="height: 80px" src="{{asset('assets/images/modules/training.png')}}" alt="">
                                            <h4>Training</h4>
                                        </a>
                                    </div>
                                    <div class="col-lg-4">
                                        <a href="{{route('front.billing')}}"
                                           class="position-relative w-100 d-inline-block card card-hover-primary text-decoration-none bg-secondary py-5 px-2 text-center rounded rounded-3 mb-4">
                                            <ul class="cube_rains"><li></li><li></li><li></li><li></li></ul>
                                            <img style="height: 80px" src="{{asset('assets/images/modules/billing.png')}}" alt="">
                                            <h4>Billing</h4>
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
