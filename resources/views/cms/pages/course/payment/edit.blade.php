@extends('cms.layout.layout')
@section('content')
    <div class="w-100 p-3 p-lg-5">

        <div class="container-lg">
            <div class="w-100 mb-4">
                <h2 class="fs-2 m-0 p-0">Edit Course Payment</h2>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{route('CMS.dashboard')}}">Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="{{route('CMS.course.payment.index')}}">Course Payment</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Edit Course Payment</li>
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
            <form class="w-100" action="{{route('CMS.course.payment.update', [$product['id']])}}" method="post" enctype="multipart/form-data">
                {{csrf_field()}}
                <input type="hidden" name="_method" value="PUT">
                <div class="w-100 mt-4">
                    <div class="block block-rounded">
                        <div class="block-header block-header-default">
                            <h3 class="block-title">Edit Course Payment</h3>
                            <div class="block-options">
                                <a href="{{route('CMS.course.payment.index')}}" class="btn btn-sm btn-outline-secondary me-1">Cancel</a>
                                <button type="submit" class="btn btn-sm btn-outline-success">Save Payment</button>
                            </div>
                        </div>
                        <div class="block-content p-3 p-lg-5">

                            <div class="w-100">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group mb-4">
                                            <label class="form-label">Payment Name</label>
                                            <input type="text" class="form-control" name="name" value="{{old('name') ?? $product['name']}}" placeholder="Payment Name">
                                            @if($errors->has('name')) <small class="text-danger">{{$errors->first('name')}}</small> @endif
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group mb-4">
                                            <label class="form-label">Description</label>
                                            <textarea class="form-control" name="description" placeholder="Description">{{old('description') ?? $product['description']}}</textarea>
                                            @if($errors->has('description')) <small class="text-danger">{{$errors->first('description')}}</small> @endif
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
