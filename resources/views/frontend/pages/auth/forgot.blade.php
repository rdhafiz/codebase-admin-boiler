@extends('frontend.layout.layout')

@section('stylesheet')
@show

@section('content')

    <main class="page-wrapper my-5 py-5">
        <div class="d-flex flex-column position-relative h-100 py-5 my-5">


            <div class="container mt-auto">
                <div class="row align-items-center">

                    <!-- Sign in form -->
                    <div class="col-md-6 offset-md-3 mb-5 mb-md-0">
                        <div class="w-100">
                            <h1 class="pt-3 pb-2 pb-lg-3">Forgot your password?</h1>
                            <p class="pb-2">Change your password in three easy steps. <br> This helps to keep your new password secure.</p>
                            <ul class="list-unstyled pb-2 pb-lg-0 mb-4 mb-lg-5">
                                <li class="d-flex mb-2">
                                    <span class="text-primary fw-semibold me-2">1.</span>
                                    Fill in your email address below.
                                </li>
                                <li class="d-flex mb-2">
                                    <span class="text-primary fw-semibold me-2">2.</span>
                                    We'll email you a temporary code.
                                </li>
                                <li class="d-flex mb-2">
                                    <span class="text-primary fw-semibold me-2">3.</span>
                                    Use the code to change your password on our secure website.
                                </li>
                            </ul>
                            <div class="w-100">
                                @if($errors->has('success'))
                                    <p class="alert alert-success">{{$errors->first('success')}}</p>
                                @endif
                                @if($errors->has('error'))
                                    <p class="alert alert-danger">{{$errors->first('error')}}</p>
                                @endif
                            </div>
                            <div class="card border-0 bg-primary" data-bs-theme="dark">
                                <form class="card-body" action="{{route('front.forgot.action')}}" method="post">
                                    {{csrf_field()}}
                                    <div class="mb-4">
                                        <div class="position-relative">
                                            <i class="ai-mail fs-lg position-absolute top-50 start-0 translate-middle-y text-light opacity-80 ms-3"></i>
                                            <input class="form-control form-control-lg ps-5" type="email" name="email" value="{{old('email')}}" placeholder="Email address" required="">
                                        </div>
                                        @if($errors->has('email'))<small class="text-danger">{{$errors->first('email')}}</small> @endif
                                    </div>
                                    <button class="btn btn-light" type="submit">Get Password Reset Code</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

@endsection
@section('js')
@endsection
