@extends('cms.layout.layout')
@section('content')
    <div class="w-100 p-3 p-lg-5">

        <div class="container-lg">
            <div class="w-100 mb-4">
                <h2 class="fs-2 m-0 p-0">Admin Details</h2>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{route('CMS.dashboard')}}">Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="{{route('CMS.admin.index')}}">Admins</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Admin Details</li>
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
                        <h3 class="block-title">{{ $admin['name'] }}</h3>
                        <div class="block-options">
                            <a href="{{route('CMS.admin.edit', [$admin['_id']])}}" class="btn btn-sm btn-outline-primary js-bs-tooltip-enabled me-1"><i class="fa fa-edit"></i></a>
                        </div>
                    </div>
                    <div class="block-content">
                        <div class="w-100">

                            <div class="form-group mb-4">
                                @if(isset($admin['avatar']) && !empty($admin['avatar']))
                                    <div class="w-100 mb-2">
                                        <img class="img-fluid rounded-pill border border-2 mb-2" style="width: 150px; height: 150px; object-fit: cover;overflow: hidden;" src="{{$admin['avatar_full_path']}}" alt="">
                                    </div>
                                @endif
                            </div>
                            <div class="form-group mb-4">
                                <table class="table">
                                    <tbody>
                                    <tr>
                                        <th style="width: 100px">Name</th>
                                        <td>{{ $admin['name'] }}</td>
                                    </tr>
                                    <tr>
                                        <th>Email</th>
                                        <td>{{ $admin['email'] }}</td>
                                    </tr>
                                    <tr>
                                        <th>Permission</th>
                                        <td>
                                            <span class="badge bg-success">{{ \App\Models\Admin::getAdminRoleText($admin['user_role']) }}</span>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>
                </div>
            </div>


        </div>

    </div>
@endsection
@section('js')
@endsection
