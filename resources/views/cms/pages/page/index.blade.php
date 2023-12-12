@extends('cms.layout.layout')
@section('content')
    <div class="w-100 p-3 p-lg-5">

        <div class="w-100 mb-4">
            <h2 class="fs-2 m-0 p-0">Website Pages</h2>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('CMS.dashboard')}}">Dashboard</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Website Pages</li>
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

        <div class="w-100 mt-4">
            <div class="block block-rounded">
                <div class="block-header block-header-default">
                    <h3 class="block-title">All Pages</h3>
                    <div class="block-options">
                        <a href="{{route('CMS.page.create')}}" class="btn btn-sm btn-outline-primary me-1">New Page</a>
                    </div>
                </div>
                <div class="block-content" id="vuePageListInstance">
                    <div class="table-responsive">
                        <table class="table table-striped table-vcenter">
                            <thead>
                            <tr>
                                <th>Page</th>
                                <th>Url</th>
                                <th style="width: 120px" class="text-center"></th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($pages as $page)
                                <tr>
                                    <td>{{ ucwords($page['meta']['title']) }}</td>
                                    <td><a target="_blank" href="{{ env('APP_URL').'/'.$page['slug'] }}">{{ env('APP_URL').'/'.$page['slug'] }}</a></td>
                                    <td class="text-center">
                                        <a href="{{route('CMS.page.edit', [$page['_id']])}}" class="btn btn-sm btn-outline-primary js-bs-tooltip-enabled me-1"><i class="fa fa-edit"></i></a>
                                        @if($page['dynamic'] == 1)
                                            <form class="d-inline-block" id="delete_{{$page['_id']}}" action="{{route('CMS.page.destroy', [$page['_id']])}}" method="POST">
                                                {{csrf_field()}}
                                                <input type="hidden" name="_method" value="DELETE">
                                                <a @click="deletePage(`{{$page['_id']}}`)" class="btn btn-sm btn-outline-danger"><i class="fa fa-trash"></i></a>
                                            </form>
                                        @endif
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
@section('js')
    @vite('resources/js/cms/pages/page/page.js')
@endsection
