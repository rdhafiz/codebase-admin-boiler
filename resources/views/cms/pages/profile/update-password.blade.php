@extends('cms.layout.layout')
@section('content')
    <div class="w-100 p-3 p-lg-5">

        <div class="container-lg">
            <div class="w-100 mb-4">
                <h2 class="fs-2 m-0 p-0">Update Password</h2>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{route('CMS.dashboard')}}">Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="{{route('CMS.profile')}}">Profile</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Update Password</li>
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

            <div class="w-100">
                <form class="w-100" action="{{route('CMS.profile.update.password')}}" method="post" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <input type="hidden" name="_method" value="PUT">
                    <div class="w-100 mt-4">
                        <div class="block block-rounded">
                            <div class="block-header block-header-default">
                                <h3 class="block-title">Update Password</h3>
                                <div class="block-options">
                                    <a href="{{route('CMS.profile')}}" class="btn btn-sm btn-outline-secondary me-1">Cancel</a>
                                    <button type="submit" class="btn btn-sm btn-outline-success">Save Changes</button>
                                </div>
                            </div>
                            <div class="block-content p-3 p-lg-5">

                                <div class="w-100">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group mb-4">
                                                <label class="form-label">Current Password</label>
                                                <input type="password" class="form-control" name="current_password">
                                                @if($errors->has('current_password'))
                                                    <small class="text-danger">{{$errors->first('current_password')}}</small>
                                                @endif
                                            </div>
                                            <div class="form-group mb-4">
                                                <label class="form-label">New Password</label>
                                                <input type="password" class="form-control" name="password">
                                                @if($errors->has('password'))
                                                    <small class="text-danger">{{$errors->first('password')}}</small>
                                                @endif
                                            </div>
                                            <div class="form-group mb-4">
                                                <label class="form-label">Re-type New Password</label>
                                                <input type="password" class="form-control" name="password_confirmation">
                                                @if($errors->has('password_confirmation'))
                                                    <small class="text-danger">{{$errors->first('password_confirmation')}}</small>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>
                </form>
            </div>

        </div>

    </div>
@endsection
@section('js')
@endsection
