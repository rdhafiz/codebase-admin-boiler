@extends('rcp.layout.layout')
@section('content')
    <div class="w-100 p-3 p-lg-5">

        <div class="container-lg">
            <div class="w-100 mb-4">
                <h2 class="fs-2 m-0 p-0">Edit Job</h2>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{route('RCP.dashboard')}}">Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="{{route('RCP.job.index')}}">Jobs</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Edit Job</li>
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
            <form class="w-100" action="{{route('RCP.job.store')}}" method="post" enctype="multipart/form-data">
                {{csrf_field()}}
                <div class="w-100 mt-4">
                    <div class="block block-rounded">
                        <div class="block-header block-header-default">
                            <h3 class="block-title">Edit Job</h3>
                            <div class="block-options">
                                <a href="{{route('RCP.job.index')}}" class="btn btn-sm btn-outline-secondary me-1">Cancel</a>
                                <button type="submit" class="btn btn-sm btn-outline-success">Save Job</button>
                            </div>
                        </div>
                        <div class="block-content p-3 p-lg-5">
                            <div class="w-100">
                                <div class="row">


                                    <div class="col-lg-6">
                                        <div class="form-group mb-4">
                                            <label class="form-label">Company Name</label>
                                            <input type="text" class="form-control" name="company_name" value="{{old('company_name') ?? $job['company_name']}}" placeholder="Company Name">
                                            @if($errors->has('company_name'))
                                                <small class="text-danger">{{$errors->first('company_name')}}</small>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group mb-4">
                                            <label class="form-label">Company Website</label>
                                            <input type="text" class="form-control" name="company_website" value="{{old('company_website') ?? $job['company_website']}}" placeholder="Company Website">
                                            @if($errors->has('company_website'))
                                                <small class="text-danger">{{$errors->first('company_website')}}</small>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group mb-4">
                                            <label class="form-label">Job Title</label>
                                            <input type="text" class="form-control" name="job_title" value="{{old('job_title') ?? $job['job_title']}}" placeholder="Job Title">
                                            @if($errors->has('job_title'))
                                                <small class="text-danger">{{$errors->first('job_title')}}</small>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group mb-4">
                                            <label class="form-label">Job Type</label>
                                            <select name="job_type" class="form-select">
                                                <option {{$job['job_type'] == 'Full Time' ? 'selected' : ''}} value="Full Time">Full Time</option>
                                                <option {{$job['job_type'] == 'Part Time' ? 'selected' : ''}} value="Part Time">Part Time</option>
                                                <option {{$job['job_type'] == 'Internship' ? 'selected' : ''}} value="Internship">Internship</option>
                                                <option {{$job['job_type'] == 'Temporary' ? 'selected' : ''}} value="Temporary">Temporary</option>
                                                <option {{$job['job_type'] == 'Locum' ? 'selected' : ''}} value="Locum">Locum</option>
                                            </select>
                                            @if($errors->has('job_type'))
                                                <small class="text-danger">{{$errors->first('job_type')}}</small>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group mb-4">
                                            <label class="form-label">Salary Range</label>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <input type="text" class="form-control mb-2" name="salary_min" value="{{old('salary_min') ?? $job['salary_min']}}" placeholder="Minimum Amount">
                                                    @if($errors->has('salary_min'))
                                                        <small class="text-danger">{{$errors->first('salary_min')}}</small>
                                                    @endif
                                                </div>
                                                <div class="col-md-6">
                                                    <input type="text" class="form-control" name="salary_max" value="{{old('salary_max') ?? $job['salary_max']}}" placeholder="Maximum Amount">
                                                    @if($errors->has('salary_max'))
                                                        <small class="text-danger">{{$errors->first('salary_max')}}</small>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group mb-4">
                                            <label class="form-label">Location</label>
                                            <input type="text" class="form-control" name="location" value="{{old('location') ?? $job['salary_max']}}" placeholder="Location">
                                            @if($errors->has('location'))
                                                <small class="text-danger">{{$errors->first('location')}}</small>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group mb-4">
                                            <label class="form-label">Job Description</label>
                                            <textarea id="js-ckeditor" name="job_description" class="form-control form-control-lg" cols="30" rows="5">{{ old('job_description') ?? $job['job_description'] }}</textarea>
                                            @if($errors->has('job_description'))
                                                <small class="text-danger">{{$errors->first('job_description')}}</small>
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
@endsection
@section('js')
    <script type="application/javascript" src="{{asset('assets/js/plugins/ckeditor/ckeditor.js')}}"></script>
    <script>
        window.onload = () => {
            window.Codebase.helpersOnLoad(['js-ckeditor'], {
                toolbar : 'Basic',
                uiColor : '#9AB8F3'
            });
        }
    </script>
@endsection
