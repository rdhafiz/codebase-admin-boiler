@extends('frontend.layout.layout')

@section('stylesheet')
@show

@section('content')

    <div class="w-100 py-5 mt-5">
        <div class="w-100 py-5">
            <div class="container-lg">

                <div class="row my-5">
                    <div class="col-xxl-6 offset-xxl-3 col-lg-8 offset-lg-2  col-md-12">
                        <div class="w-100 px-5 pb-5">
                            <div class="w-100 py-5">
                                <h1 class="text-center">{{auth()->user()->name}}</h1>
                            </div>
                            <div class="w-100">

                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

@endsection
@section('js')
@endsection
