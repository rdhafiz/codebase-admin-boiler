@extends('frontend.layout.layout')

@section('stylesheet')
@show

@section('content')

    <div class="w-100 bg-secondary py-5 mt-5">
        <div class="w-100 py-5">
            <div class="container-lg">
                <div class="row">

                    <!-- Page content -->
                    <div class="col-lg-8 offset-lg-2 pt-4 pb-2 pb-sm-4">
                        <h1 class="h2 mb-4">Payment Options</h1>

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
                                    <div class="col-lg-6">
                                        <a href="{{$card_payment_url}}"
                                           class="w-100 d-inline-block card card-hover-primary text-decoration-none bg-secondary p-5 text-center rounded rounded-3 mb-3">
                                            <i class="ai-card fs-1"></i>
                                            <h3>Card Payment</h3>
                                        </a>
                                    </div>
                                    <div class="col-lg-6">
                                        <a href="{{$bank_transfer_url}}"
                                           class="w-100 d-inline-block card card-hover-primary text-decoration-none bg-secondary p-5 text-center rounded rounded-3">
                                            <i class="ai-dollar fs-1"></i>
                                            <h3>Bank Transfer</h3>
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
