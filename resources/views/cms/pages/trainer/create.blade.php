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

            <div class="w-100" id="vueTrainerFormInstance">
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
                                        <div class="col-lg-12">
                                            <div class="form-group mb-4">
                                                <div class="w-100">
                                                    <img class="img-fluid rounded-pill border border-2 mb-2" id="preview-image" style="width: 200px; height: 200px; object-fit: cover;overflow: hidden;display: none">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group mb-4">
                                                <label class="form-label">Trainer Photo</label>
                                                <input type="file" class="form-control" name="avatar" @change="selectImage($event)">
                                                @if($errors->has('avatar')) <small class="text-danger">{{$errors->first('avatar')}}</small> @endif
                                            </div>
                                            <div class="form-group mb-4">
                                                <label class="form-label">Name</label>
                                                <input type="text" class="form-control" name="name" value="{{old('name')}}">
                                                @if($errors->has('name')) <small class="text-danger">{{$errors->first('name')}}</small> @endif
                                            </div>
                                            <div class="form-group mb-4">
                                                <label class="form-label">Designation</label>
                                                <input type="text" class="form-control" name="designation" value="{{old('designation')}}">
                                                @if($errors->has('designation')) <small class="text-danger">{{$errors->first('designation')}}</small> @endif
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group mb-4">
                                                <label class="form-label">Facebook Profile</label>
                                                <input type="text" class="form-control" name="social_facebook" value="{{old('social_facebook')}}">
                                                @if($errors->has('social_facebook')) <small class="text-danger">{{$errors->first('social_facebook')}}</small> @endif
                                            </div>
                                            <div class="form-group mb-4">
                                                <label class="form-label">Twitter Profile</label>
                                                <input type="text" class="form-control" name="social_twitter" value="{{old('social_twitter')}}">
                                                @if($errors->has('social_twitter')) <small class="text-danger">{{$errors->first('social_twitter')}}</small> @endif
                                            </div>
                                            <div class="form-group mb-4">
                                                <label class="form-label">LinkedIn Profile</label>
                                                <input type="text" class="form-control" name="social_linkedin" value="{{old('social_linkedin')}}">
                                                @if($errors->has('social_linkedin')) <small class="text-danger">{{$errors->first('social_linkedin')}}</small> @endif
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group mb-4">
                                                <label class="form-label">Employment History</label>
                                                <textarea id="js-ckeditor" name="employment_history" class="form-control">{{ old('employment_history') }}</textarea>
                                                @if($errors->has('employment_history')) <small class="text-danger">{{$errors->first('employment_history')}}</small> @endif
                                            </div>
                                            <div class="form-group mb-4">
                                                <label class="form-label">Qualifications</label>
                                                <textarea id="js-ckeditor-2" name="qualifications" class="form-control">{{ old('qualifications') }}</textarea>
                                                @if($errors->has('qualifications')) <small class="text-danger">{{$errors->first('qualifications')}}</small> @endif
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
    <script type="application/javascript" src="{{asset('assets/js/plugins/ckeditor/ckeditor.js')}}"></script>
    @vite('resources/js/cms/pages/trainer/create.js')
@endsection
