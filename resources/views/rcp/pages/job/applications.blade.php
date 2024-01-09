@extends('rcp.layout.layout')
@section('content')
    <div class="w-100 p-3 p-lg-5">

        <div class="w-100 mb-4">
            <h2 class="fs-2 m-0 p-0">{{$job['job_title']}}</h2>
            <p>{{$job['company_name']}} ({{$job['job_type']}})</p>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('RCP.dashboard')}}">Dashboard</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Job Applications</li>
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
                    <h3 class="block-title">Applicants</h3>
                </div>
                <div class="block-content" id="vueJobListInstance">
                    <div class="table-responsive">
                        <table class="table table-striped table-vcenter">
                            <thead>
                            <tr>
                                <th></th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Country</th>
                                <th>Gender</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($applications as $application)
                                <tr>
                                    <td><img class="img-fluid rounded-pill" style="width: 40px; height: 40px; object-fit: cover;overflow: hidden;" src="{{$application['user_info']['avatar_full_path']}}" alt=""></td>
                                    <td>{{ $application['user_info']['name'] }}</td>
                                    <td>{{ $application['user_info']['email'] }}</td>
                                    <td>{{ $application['user_info']['phone'] ?? '-' }}</td>
                                    <td>{{ $application['user_info']['country'] ?? '-' }}</td>
                                    <td>{{ $application['user_info']['gender'] ?? '-' }}</td>
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
