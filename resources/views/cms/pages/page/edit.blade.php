@extends('cms.layout.layout')
@section('content')
    <div class="w-100 p-3 p-lg-5">

        <div class="container-lg">
            <div class="w-100 mb-4">
                <h2 class="fs-2 m-0 p-0">Edit Page</h2>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{route('CMS.dashboard')}}">Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="{{route('CMS.page.index')}}">Website Pages</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Edit Page</li>
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
            <form class="w-100" action="{{route('CMS.page.update', [$page['_id']])}}" method="post" enctype="multipart/form-data">
                {{csrf_field()}}
                <input type="hidden" name="_method" value="PUT">
                <div class="w-100 mt-4">
                    <div class="block block-rounded">
                        <div class="block-header block-header-default">
                            <h3 class="block-title">Edit Page</h3>
                            <div class="block-options">
                                <a href="{{route('CMS.page.index')}}" class="btn btn-sm btn-outline-secondary me-1">Cancel</a>
                                <button type="submit" class="btn btn-sm btn-outline-success">Save Changes</button>
                            </div>
                        </div>
                        <div class="block-content">


                            <div class="w-100">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group mb-4">
                                            <label class="form-label">Page Url</label>
                                            <div class="input-group mb-3">
                                                <span class="input-group-text">{{env('APP_URL')}}/</span>
                                                <input type="text" class="form-control" value="{{$page['slug']}}" name="slug">
                                            </div>
                                        </div>
                                        <div class="form-group mb-4">
                                            <label class="form-label">Page Title</label>
                                            <input type="text" class="form-control" name="meta[title]" value="{{$page['meta']['title']}}">
                                        </div>
                                        <div class="form-group mb-4">
                                            <label class="form-label">Page Keyword</label>
                                            <input type="text" class="form-control" name="meta[keyword]" value="{{$page['meta']['keyword']}}">
                                        </div>
                                        <div class="form-group mb-4">
                                            <label class="form-label">Page Description</label>
                                            <input type="text" class="form-control" name="meta[description]" value="{{$page['meta']['description']}}">
                                            <small class="text-info">Provides a short description of the page.This description is often used in the snippet shown in search results.</small>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group mb-4">
                                            @if(isset($page['meta']['image']) && !empty($page['meta']['image']))
                                                <div class="w-100 mb-2">
                                                    <img class="img-fluid" src="{{$page['meta']['image']}}" alt="">
                                                </div>
                                            @endif
                                            <label class="form-label">Feature Photo</label>
                                            <input type="file" class="form-control" name="feature_image">
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
