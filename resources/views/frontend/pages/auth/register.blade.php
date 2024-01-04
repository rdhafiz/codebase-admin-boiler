@extends('frontend.layout.layout')

@section('stylesheet')
@show

@section('content')

    <main class="page-wrapper py-5">
        <div class="d-flex flex-column position-relative h-100 py-5">


            <div class="container mt-auto">
                <div class="row align-items-center">

                    <!-- Sign in form -->
                    <div class="col-md-6 offset-md-3 mb-5 mb-md-0">
                        <div class="card border bg-secondary bg-li py-md-3 py-lg-4 px-lg-4 px-xl-5 mt-5">
                            <div class="card-body">
                                <h1 class="py-2 pb-lg-3">Sign Up</h1>
                                <div class="w-100">
                                    @if($errors->has('success'))
                                        <p class="alert alert-success">{{$errors->first('success')}}</p>
                                    @endif
                                    @if($errors->has('error'))
                                        <p class="alert alert-danger">{{$errors->first('error')}}</p>
                                    @endif
                                </div>
                                <form action="{{route('front.register.action')}}" method="post">
                                    {{csrf_field()}}
                                    <div class="pb-3 mb-1">
                                        <div class="position-relative">
                                            <i class="ai-mail fs-lg position-absolute top-50 start-0 translate-middle-y text-dark opacity-80 ms-3"></i>
                                            <input class="form-control form-control-lg ps-5" type="text" name="first_name" value="{{old('first_name')}}" placeholder="First Name" required>
                                            @if($errors->has('first_name'))<small class="text-danger">{{$errors->first('first_name')}}</small> @endif
                                        </div>
                                    </div>
                                    <div class="pb-3 mb-1">
                                        <div class="position-relative">
                                            <i class="ai-mail fs-lg position-absolute top-50 start-0 translate-middle-y text-dark opacity-80 ms-3"></i>
                                            <input class="form-control form-control-lg ps-5" type="text" name="last_name" value="{{old('last_name')}}" placeholder="Last Name" required>
                                            @if($errors->has('last_name'))<small class="text-danger">{{$errors->first('last_name')}}</small> @endif
                                        </div>
                                    </div>
                                    <div class="pb-3 mb-1">
                                        <div class="position-relative">
                                            <i class="ai-mail fs-lg position-absolute top-50 start-0 translate-middle-y text-dark opacity-80 ms-3"></i>
                                            <input class="form-control form-control-lg ps-5" type="email" name="email" value="{{old('email')}}" placeholder="Email address" required>
                                            @if($errors->has('email'))<small class="text-danger">{{$errors->first('email')}}</small> @endif
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <div class="position-relative"><i class="ai-lock-closed fs-lg position-absolute top-50 start-0 translate-middle-y text-dark opacity-80 ms-3"></i>
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
                                    <div class="mb-4">
                                        <div class="position-relative"><i class="ai-lock-closed fs-lg position-absolute top-50 start-0 translate-middle-y text-dark opacity-80 ms-3"></i>
                                            <div class="password-toggle">
                                                <input class="form-control form-control-lg ps-5" type="password" placeholder="Re-type Password" name="password_confirmation" required>
                                                <label class="password-toggle-btn" aria-label="Show/hide password">
                                                    <input class="password-toggle-check" type="checkbox">
                                                    <span class="password-toggle-indicator"></span>
                                                </label>
                                                @if($errors->has('password_confirmation'))<small class="text-danger">{{$errors->first('password_confirmation')}}</small> @endif
                                            </div>
                                        </div>
                                    </div>
                                    <button class="btn btn-lg btn-primary w-100 mb-4" type="submit">Sign in</button>

                                    <!-- Sign Up -->
                                    <h2 class="h6 text-center pt-3 pt-lg-4 mb-2">
                                        Already have an account?
                                        <a class="text-decoration-none text-info" href="{{ route('front.login') }}">
                                            Login Now
                                        </a>
                                    </h2>

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
