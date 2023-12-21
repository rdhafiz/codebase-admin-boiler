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
                        <div class="card border bg-secondary bg-li py-md-3 py-lg-4 px-lg-4 px-xl-5 mt-5">
                            <div class="card-body">
                                <h1 class="py-2 pb-lg-3">Sign In</h1>
                                <div class="w-100">
                                    @if($errors->has('success'))
                                        <p class="alert alert-success">{{$errors->first('success')}}</p>
                                    @endif
                                    @if($errors->has('error'))
                                        <p class="alert alert-danger">{{$errors->first('error')}}</p>
                                    @endif
                                </div>
                                <form action="{{route('front.login.action')}}" method="post">
                                    {{csrf_field()}}
                                    <div class="pb-3 mb-3">
                                        <div class="position-relative">
                                            <i class="ai-mail fs-lg position-absolute top-50 start-0 translate-middle-y text-light opacity-80 ms-3"></i>
                                            <input class="form-control form-control-lg ps-5" type="email" name="email" value="{{old('email')}}" placeholder="Email address" required>
                                            @if($errors->has('email'))<small class="text-danger">{{$errors->first('email')}}</small> @endif
                                        </div>
                                    </div>
                                    <div class="mb-4">
                                        <div class="position-relative"><i class="ai-lock-closed fs-lg position-absolute top-50 start-0 translate-middle-y text-light opacity-80 ms-3"></i>
                                            <div class="password-toggle">
                                                <input class="form-control form-control-lg ps-5" type="password" placeholder="Password" name="password" required>
                                                <label class="password-toggle-btn" aria-label="Show/hide password">
                                                    <input class="password-toggle-check" type="checkbox">
                                                    <span class="password-toggle-indicator"></span>
                                                </label>
                                                @if($errors->has('password'))<small class="text-danger">{{$errors->first('password')}}</small> @endif
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex flex-wrap align-items-center justify-content-between pb-4">
                                        <div class="form-check my-1">
                                            <input class="form-check-input" type="checkbox" id="keep-signedin" name="remember" value="1">
                                            <label class="form-check-label ms-1" for="keep-signedin">Keep me signed in</label>
                                        </div>
                                        <a class="text-primary fs-sm fw-semibold text-decoration-none my-1" href="account-password-recovery.html">Forgot password?</a>
                                    </div>
                                    <button class="btn btn-lg btn-primary w-100 mb-4" type="submit">Sign in</button>

                                    <!-- Sign in with social account -->
                                    <h2 class="h6 text-center pt-3 pt-lg-4 mb-4">Or sign in with your social account</h2>
                                    <div class="row row-cols-1 row-cols-sm-2 gy-3 pb-2">
                                        <div class="col">
                                            <a class="btn btn-icon btn-outline-secondary btn-google btn-lg w-100" href="#">
                                                <i class="ai-google fs-xl me-2"></i>
                                                Google
                                            </a>
                                        </div>
                                        <div class="col">
                                            <a class="btn btn-icon btn-outline-secondary btn-facebook btn-lg w-100" href="#">
                                                <i class="ai-facebook fs-xl me-2"></i>
                                                Facebook
                                            </a>
                                        </div>
                                    </div>
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
