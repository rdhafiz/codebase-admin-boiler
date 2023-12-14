@extends('rcp.layout.layout')
@section('content')
    <div class="w-100 p-3 p-lg-5">

        <div class="container-lg">
            <div class="w-100 mb-4">
                <h2 class="fs-2 m-0 p-0">Job Preview</h2>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{route('RCP.dashboard')}}">Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="{{route('RCP.job.index')}}">Jobs</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Preview</li>
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
                        <h3 class="block-title">{{ $job['name'] }}</h3>
                        <div class="block-options">
                            <a href="{{route('RCP.job.edit', [$job['_id']])}}" class="btn btn-sm btn-outline-primary js-bs-tooltip-enabled me-1"><i class="fa fa-edit"></i></a>
                        </div>
                    </div>
                    <div class="block-content">
                        <div class="w-100">

                            <div class="form-group mb-4">
                                <table class="table">
                                    <tbody>
                                    <tr>
                                        <th style="width: 200px">Company Name</th>
                                        <td>{{ $job['company_name'] }}</td>
                                    </tr>
                                    <tr>
                                        <th>Company Website</th>
                                        <td><a href="{{ $job['company_website'] }}" target="_blank">{{ $job['company_website'] }}</a></td>
                                    </tr>
                                    <tr>
                                        <th>Job Title</th>
                                        <td>{{ $job['job_title'] }}</td>
                                    </tr>
                                    <tr>
                                        <th>Job Type</th>
                                        <td>{{ $job['job_type'] }}</td>
                                    </tr>
                                    <tr>
                                        <th>Salary @if(!empty($job['salary_max'])) Range @endif</th>
                                        <td>{{ $job['salary_min'] }} @if(!empty($job['salary_max'])) - {{$job['salary_max']}} @endif</td>
                                    </tr>
                                    <tr>
                                        <th>Location</th>
                                        <td>{{ $job['location'] }}</td>
                                    </tr>
                                    <tr>
                                        <th>Job description</th>
                                        <td>{!! nl2br($job['job_description']) !!}</td>
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
