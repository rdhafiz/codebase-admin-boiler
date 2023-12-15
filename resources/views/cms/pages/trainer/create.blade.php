@extends('cms.layout.layout')
@section('content')
    <div class="w-100 p-3 p-lg-5">

        <div class="container-lg">
            <div class="w-100 mb-4">
                <h2 class="fs-2 m-0 p-0">New Trainer</h2>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{route('CMS.dashboard')}}">Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="{{route('CMS.trainer.index')}}">Trainers</a></li>
                        <li class="breadcrumb-item active" aria-current="page">New Trainer</li>
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
            <form class="w-100" action="{{route('CMS.trainer.store')}}" method="post" enctype="multipart/form-data">
                {{csrf_field()}}
                <div class="w-100 mt-4">
                    <div class="block block-rounded">
                        <div class="block-header block-header-default">
                            <h3 class="block-title">New Trainer</h3>
                            <div class="block-options">
                                <a href="{{route('CMS.trainer.index')}}" class="btn btn-sm btn-outline-secondary me-1">Cancel</a>
                                <button type="submit" class="btn btn-sm btn-outline-success">Save Trainer</button>
                            </div>
                        </div>
                        <div class="block-content p-3 p-lg-5">

                            <div class="w-100">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group mb-4">
                                            <div class="w-100 mb-2">
                                                <img class="img-fluid rounded-pill" id="preview-image" style="width: 200px; height: 200px; object-fit: cover;overflow: hidden;">
                                            </div>
                                            <label class="form-label">Trainer Photo</label>
                                            <input type="file" class="form-control" name="avatar">
                                            @if($errors->has('avatar')) <small class="text-danger">{{$errors->first('avatar')}}</small> @endif
                                        </div>
                                        <div class="form-group mb-4">
                                            <label class="form-label">Name</label>
                                            <input type="text" class="form-control" name="name" value="{{old('name')}}">
                                            @if($errors->has('name')) <small class="text-danger">{{$errors->first('name')}}</small> @endif
                                        </div>
                                        <div class="form-group mb-4">
                                            <label class="form-label">Email</label>
                                            <input type="email" class="form-control" name="email" value="{{old('email')}}">
                                            @if($errors->has('email')) <small class="text-danger">{{$errors->first('email')}}</small> @endif
                                        </div>
                                        <div class="form-group mb-4">
                                            <label class="form-label">Phone</label>
                                            <input type="tel" class="form-control" name="phone" value="{{old('phone')}}">
                                            @if($errors->has('phone')) <small class="text-danger">{{$errors->first('phone')}}</small> @endif
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group mb-4">
                                            <label class="form-label">Address</label>
                                            <input type="text" class="form-control" name="address" value="{{old('address')}}">
                                            @if($errors->has('address')) <small class="text-danger">{{$errors->first('address')}}</small> @endif
                                        </div>
                                        <div class="form-group mb-4">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="form-group mb-4">
                                                        <label class="form-label">Post Code</label>
                                                        <input type="text" class="form-control" name="post_code" value="{{old('post_code')}}">
                                                        @if($errors->has('post_code')) <small class="text-danger">{{$errors->first('post_code')}}</small> @endif
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="form-group mb-4">
                                                        <label class="form-label">City</label>
                                                        <input type="text" class="form-control" name="city" value="{{old('city')}}">
                                                        @if($errors->has('city')) <small class="text-danger">{{$errors->first('city')}}</small> @endif
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="form-group mb-4">
                                                        <label class="form-label">Country</label>
                                                        <input type="text" class="form-control" name="country" value="{{old('country')}}">
                                                        @if($errors->has('country')) <small class="text-danger">{{$errors->first('country')}}</small> @endif
                                                    </div>
                                                </div>
                                            </div>
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
@endsection
@section('js')
    @vite('resources/js/cms/pages/trainer/create.js')
@endsection
