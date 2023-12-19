@extends('cms.layout.layout')
@section('content')
    <div class="w-100 p-3 p-lg-5">

        <div class="w-100 mb-4">
            <h2 class="fs-2 m-0 p-0">Admins</h2>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('CMS.dashboard')}}">Dashboard</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Admins</li>
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
                    <h3 class="block-title">All Admins</h3>
                    <div class="block-options">
                        <a href="{{route('CMS.admin.create')}}" class="btn btn-sm btn-outline-primary me-1">New Admin</a>
                    </div>
                </div>
                <div class="block-content" id="vueAdminListInstance">
                    <div class="table-responsive">
                        <table class="table table-striped table-vcenter">
                            <thead>
                            <tr>
                                <th style="width: 80px"></th>
                                <th>Name</th>
                                <th>Permission</th>
                                <th style="width: 150px" class="text-center"></th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($admins as $admin)
                                <tr>
                                    <td>
                                        <img class="img-fluid rounded-pill border border-2" style="width: 50px; height: 50px; object-fit: cover;overflow: hidden;" src="{{$admin['avatar_full_path']}}" alt="">
                                    </td>
                                    <td>{{ $admin['name'] }}</td>
                                    <td>{{ \App\Models\Admin::getAdminRoleText($admin['user_role']) }}</td>
                                    <td class="text-center">
                                        <a href="{{route('CMS.admin.show', [$admin['_id']])}}" class="btn btn-sm btn-outline-success js-bs-tooltip-enabled me-1"><i class="fa fa-magnifying-glass"></i></a>
                                        <a href="{{route('CMS.admin.edit', [$admin['_id']])}}" class="btn btn-sm btn-outline-primary js-bs-tooltip-enabled me-1"><i class="fa fa-edit"></i></a>
                                        <form class="d-inline-block" id="delete_{{$admin['_id']}}" action="{{route('CMS.admin.destroy', [$admin['_id']])}}" method="POST">
                                            {{csrf_field()}}
                                            <input type="hidden" name="_method" value="DELETE">
                                            <a @click="deleteAdmin(`{{$admin['_id']}}`)" class="btn btn-sm btn-outline-danger"><i class="fa fa-trash"></i></a>
                                        </form>
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
    @vite('resources/js/cms/pages/admin/admin.js')
@endsection
