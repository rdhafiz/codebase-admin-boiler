@extends('cms.layout.layout')
@section('content')
    <div class="w-100 p-3 p-lg-5">

        <div class="container-lg">
            <div class="w-100 mb-4">
                <h2 class="fs-2 m-0 p-0">New Course Schedule</h2>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{route('CMS.dashboard')}}">Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="{{route('CMS.course.schedule.index')}}">Course Schedule</a></li>
                        <li class="breadcrumb-item active" aria-current="page">New Course Schedule</li>
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
            <form class="w-100" action="{{route('CMS.course.schedule.store')}}" method="post" enctype="multipart/form-data">
                {{csrf_field()}}
                <div class="w-100 mt-4">
                    <div class="block block-rounded">
                        <div class="block-header block-header-default">
                            <h3 class="block-title">New Course Schedule</h3>
                            <div class="block-options">
                                <a href="{{route('CMS.course.schedule.index')}}" class="btn btn-sm btn-outline-secondary me-1">Cancel</a>
                                <button type="submit" class="btn btn-sm btn-outline-success">Save Schedule</button>
                            </div>
                        </div>
                        <div class="block-content p-3 p-lg-5">

                            <div class="w-100">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group mb-4">
                                            <label class="form-label">Schedule Name</label>
                                            <input type="text" class="form-control" name="name" value="{{old('name')}}" placeholder="Schedule Name">
                                            @if($errors->has('name')) <small class="text-danger">{{$errors->first('name')}}</small> @endif
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group mb-4">
                                            <label class="form-label">Start Date</label>
                                            <input type="text" class="form-control js-flatpickr" name="start_date" value="{{old('start_date')}}" placeholder="Schedule Start Date"
                                                   data-alt-input="true" data-date-format="Y-m-d" data-alt-format="F j, Y">
                                            @if($errors->has('start_date')) <small class="text-danger">{{$errors->first('start_date')}}</small> @endif
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group mb-4">
                                            <label class="form-label">End Date</label>
                                            <input type="text" class="form-control js-flatpickr" name="end_date" value="{{old('end_date')}}" placeholder="Schedule End Date"
                                                   data-alt-input="true" data-date-format="Y-m-d" data-alt-format="F j, Y">
                                            @if($errors->has('end_date')) <small class="text-danger">{{$errors->first('end_date')}}</small> @endif
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
@section('stylesheet')
    <link rel="stylesheet" href="{{asset('assets/js/plugins/flatpickr/flatpickr.min.css')}}" crossorigin="anonymous">
@endsection
@section('js')
    <script src="{{asset('assets/js/plugins/flatpickr/flatpickr.min.js')}}"></script>
    <script>
        window.onload = () => {
            window.Codebase.helpersOnLoad(['js-flatpickr']);
        }
    </script>
@endsection
