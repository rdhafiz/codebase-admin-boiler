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
                                <h1 class="py-2 pb-lg-3">Reset Password</h1>
                                <div class="w-100">
                                    @if($errors->has('success'))
                                        <p class="alert alert-success">{{$errors->first('success')}}</p>
                                    @endif
                                    @if($errors->has('error'))
                                        <p class="alert alert-danger">{{$errors->first('error')}}</p>
                                    @endif
                                </div>
                                <form action="{{route('front.reset.action')}}" method="post">
                                    {{csrf_field()}}
                                    <div class="pb-3 mb-3">
                                        <div class="position-relative">
                                            <i class="ai-mail fs-lg position-absolute top-50 start-0 translate-middle-y text-dark opacity-80 ms-3"></i>
                                            <input class="form-control form-control-lg ps-5" type="text" name="code" value="{{old('code')}}" placeholder="Password Reset Code" required>
                                        </div>
                                        @if($errors->has('code'))<small class="text-danger">{{$errors->first('code')}}</small> @endif
                                    </div>
                                    <div class="mb-4">
                                        <div class="position-relative"><i class="ai-lock-closed fs-lg position-absolute top-50 start-0 translate-middle-y text-dark opacity-80 ms-3"></i>
                                            <div class="password-toggle">
                                                <input class="form-control form-control-lg ps-5" type="password" placeholder="New Password" name="password" required>
                                                <label class="password-toggle-btn" aria-label="Show/hide password">
                                                    <input class="password-toggle-check" type="checkbox">
                                                    <span class="password-toggle-indicator"></span>
                                                </label>
                                            </div>
                                            @if($errors->has('password'))<small class="text-danger">{{$errors->first('password')}}</small> @endif
                                        </div>
                                    </div>
                                    <div class="mb-4">
                                        <div class="position-relative"><i class="ai-lock-closed fs-lg position-absolute top-50 start-0 translate-middle-y text-dark opacity-80 ms-3"></i>
                                            <div class="password-toggle">
                                                <input class="form-control form-control-lg ps-5" type="password" placeholder="Re-type New Password" name="password_confirmation" required>
                                                <label class="password-toggle-btn" aria-label="Show/hide password">
                                                    <input class="password-toggle-check" type="checkbox">
                                                    <span class="password-toggle-indicator"></span>
                                                </label>
                                            </div>
                                            @if($errors->has('password_confirmation'))<small class="text-danger">{{$errors->first('password_confirmation')}}</small> @endif
                                        </div>
                                    </div>
                                    <button class="btn btn-lg btn-primary w-100 mb-4" type="submit">Reset Password</button>

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
