@extends('rcp.layout.layout')
@section('content')
    <div class="w-100 p-3 p-lg-5">

        <div class="container-lg">
            <div class="w-100 mb-4">
                <h2 class="fs-2 m-0 p-0">
                    Recruiter Profile
                </h2>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{route('RCP.dashboard')}}">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Profile</li>
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
                        <h3 class="block-title">Recruiter</h3>
                        <div class="block-options">
                            <a href="{{route('RCP.profile.update.password')}}" class="btn btn-sm btn-outline-warning js-bs-tooltip-enabled me-1"><i class="fa fa-key"></i></a>
                            <a href="{{route('RCP.profile.update')}}" class="btn btn-sm btn-outline-primary js-bs-tooltip-enabled"><i class="fa fa-edit"></i></a>
                        </div>
                    </div>
                    <div class="block-content">
                        <div class="w-100">

                            <div class="form-group mb-4">
                                <div class="w-100 mb-2">
                                    <img class="img-fluid rounded-pill border border-2 mb-2" style="width: 150px; height: 150px; object-fit: cover;overflow: hidden;" src="{{ auth()->guard('rcp')->user()->avatar_full_path }}" alt="">
                                </div>
                            </div>
                            <div class="form-group mb-4">
                                <table class="table">
                                    <tbody>
                                    <tr>
                                        <th style="width: 150px">Name</th>
                                        <td>{{ auth()->guard('rcp')->user()->name }}</td>
                                    </tr>
                                    <tr>
                                        <th>Email</th>
                                        <td>{{ auth()->guard('rcp')->user()->email }}</td>
                                    </tr>
                                    <tr>
                                        <th>Phone</th>
                                        <td>{{ auth()->guard('rcp')->user()->phone }}</td>
                                    </tr>
                                    <tr>
                                        <th>Address</th>
                                        <td>{{ auth()->guard('rcp')->user()->address }}, {{ auth()->guard('rcp')->user()->city }} {{ auth()->guard('rcp')->user()->post_code }}, {{ auth()->guard('rcp')->user()->country }}</td>
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
