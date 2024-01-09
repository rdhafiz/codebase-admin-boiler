@extends('cms.layout.layout')
@section('content')
    <div class="w-100 p-3 p-lg-5">

        <div class="container-lg">
            <div class="w-100 mb-4">
                <h2 class="fs-2 m-0 p-0">New Course Discount</h2>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{route('CMS.dashboard')}}">Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="{{route('CMS.course.discount.index')}}">Course Discount</a></li>
                        <li class="breadcrumb-item active" aria-current="page">New Course Discount</li>
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
            <form class="w-100" action="{{route('CMS.course.discount.store')}}" method="post" enctype="multipart/form-data">
                {{csrf_field()}}
                <div class="w-100 mt-4">
                    <div class="block block-rounded">
                        <div class="block-header block-header-default">
                            <h3 class="block-title">New Course Discount</h3>
                            <div class="block-options">
                                <a href="{{route('CMS.course.discount.index')}}" class="btn btn-sm btn-outline-secondary me-1">Cancel</a>
                                <button type="submit" class="btn btn-sm btn-outline-success">Save Discount</button>
                            </div>
                        </div>
                        <div class="block-content p-3 p-lg-5">

                            <div class="w-100">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="form-group mb-4">
                                            <label class="form-label">Name</label>
                                            <input type="text" class="form-control" name="name" value="{{old('name')}}" placeholder="Name">
                                            @if($errors->has('name')) <small class="text-danger">{{$errors->first('name')}}</small> @endif
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group mb-4">
                                            <label class="form-label">Discount Amount</label>
                                            <input type="text" class="form-control" name="amount_off" value="{{old('amount_off')}}" placeholder="Discount Amount">
                                            @if($errors->has('amount_off')) <small class="text-danger">{{$errors->first('amount_off')}}</small> @endif
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
@endsection
