@extends('cms.layout.auth')
@section('content')

    <!-- Page Container -->
    <div id="page-container" class="main-content-boxed">

        <!-- Main Container -->
        <main id="main-container">

            <div class="w-100" id="vueInstance" style="display: none">
                <!-- Page Content -->
                <div class="bg-image" style="background-image: url({{asset('assets/images/london-bridge-purple-med.jpg')}});">
                    <div class="row mx-0 bg-black-50">
                        <div class="hero-static col-md-6 col-xl-8 d-none d-md-flex align-items-md-end">
                            <div class="p-4">
                                <p class="text-white-75 fw-medium">
                                    Copyright &copy; <span data-toggle="year-copy"></span>
                                </p>
                            </div>
                        </div>
                        <div class="hero-static col-md-6 col-xl-4 d-flex align-items-center bg-body-extra-light">
                            <div class="content content-full">
                                <!-- Header -->
                                <div class="px-4 py-2 mb-4">
                                    <a class="text-decoration-none fw-bold" href="{{route('CMS.login')}}">
                                        <img style="width: 150px" src="{{asset('assets/images/purplemed.png')}}" alt="">
                                    </a>
                                    <h1 class="h3 fw-bold mt-4 mb-2">Welcome to Your Dashboard</h1>
                                    <h2 class="h5 fw-medium text-muted mb-0">Please sign in</h2>
                                </div>
                                <!-- END Header -->

                                <!-- Global Form Error Message -->
                                <div class="error-report-g"></div>
                                <!-- END Global Form Error Message -->

                                <!-- Sign In Form -->
                                <!-- jQuery Validation functionality is initialized with .js-validation-signin class in js/pages/op_auth_signin.min.js which was auto compiled from _js/pages/op_auth_signin.js -->
                                <!-- For more examples you can check out https://github.com/jzaefferer/jquery-validation -->
                                <form class="js-validation-signin px-4" @submit.prevent="login">
                                    <div class="form-group form-floating mb-4">
                                        <input type="email" class="form-control" id="login-username" v-model="param.email" name="email" placeholder="Enter your email address" required>
                                        <label class="form-label" for="login-email">Username</label>
                                        <div class="error-report text-danger"></div>
                                    </div>
                                    <div class="form-group form-floating mb-4">
                                        <input type="password" class="form-control" autocomplete="new-password" id="login-password" v-model="param.password" name="password" placeholder="Enter your password" required>
                                        <label class="form-label" for="login-password">Password</label>
                                        <div class="error-report text-danger"></div>
                                    </div>
                                    <div class="mb-4">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="1" id="login-remember-me" name="remember_me" :checked="param.remember === true" @change="param.remember = !param.remember">
                                            <label class="form-check-label" for="login-remember-me">Remember Me</label>
                                        </div>
                                    </div>
                                    <div class="mb-4">
                                        <button v-if="loading === false" type="submit" class="btn btn-lg btn-alt-primary fw-semibold">Sign In</button>
                                        <button v-if="loading === true" type="button" disabled class="btn btn-lg btn-alt-primary fw-semibold">Signing In ...</button>
                                    </div>
                                </form>
                                <!-- END Sign In Form -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END Page Content -->
            </div>

        </main>
        <!-- END Main Container -->
    </div>
    <!-- END Page Container -->

@endsection
@section('js')
    @vite('resources/js/cms/auth/login.js')
@endsection
