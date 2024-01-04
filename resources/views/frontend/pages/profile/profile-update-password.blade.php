@extends('frontend.layout.layout')

@section('stylesheet')
@show

@section('content')

    <div class="w-100 bg-secondary py-5 mt-5">
        <div class="w-100 py-5">
            <div class="container-lg">
                <div class="row">

                    @include('frontend.pages.profile.aside-menu')

                    <!-- Page content -->
                    <div class="col-lg-9 pt-4 pb-2 pb-sm-4">
                        <h1 class="h2 mb-4">Change Password</h1>

                        <!-- Basic info -->
                        <section class="card border-0 py-1 p-md-2 p-xl-3 p-xxl-4 mb-4">
                            <div class="card-body">
                                <form class="w-100" action="{{route('front.profile.update.password.action')}}" method="post" enctype="multipart/form-data">
                                    {{csrf_field()}}
                                    <div class="d-flex align-items-center mt-sm-n1 pb-4 mb-0 mb-lg-1 mb-xl-3">
                                        <i class="ai-user text-primary lead pe-1 me-2"></i>
                                        <h2 class="h4 mb-0">Change Password</h2>
                                    </div>
                                    <div class="row g-3 g-sm-4 mt-0 mt-lg-2">

                                        <div class="col-sm-8">
                                            <label class="form-label">Current Password</label>
                                            <input class="form-control" type="password" placeholder="Current Password" name="current_password">
                                            @if($errors->has('current_password'))<small class="text-danger">{{$errors->first('current_password')}}</small> @endif
                                        </div>
                                        <div class="col-sm-8">
                                            <label class="form-label">New Password</label>
                                            <input class="form-control" type="password" placeholder="New Password" name="password">
                                            @if($errors->has('password'))<small class="text-danger">{{$errors->first('password')}}</small> @endif
                                        </div>
                                        <div class="col-sm-8">
                                            <label class="form-label">Re-type New Password</label>
                                            <input class="form-control" type="password" placeholder="Re-type New Password" name="password_confirmation">
                                            @if($errors->has('password_confirmation'))<small class="text-danger">{{$errors->first('password_confirmation')}}</small> @endif
                                        </div>

                                        <div class="col-sm-8 text-end">
                                            <button class="btn btn-sm btn-primary ms-auto" type="submit">
                                                <i class="ai-save ms-n1 me-2"></i>
                                                Save Changes
                                            </button>
                                        </div>

                                    </div>
                                </form>
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
