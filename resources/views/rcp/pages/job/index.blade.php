@extends('rcp.layout.layout')
@section('content')
    <div class="w-100 p-3 p-lg-5">

        <div class="w-100 mb-4">
            <h2 class="fs-2 m-0 p-0">Jobs</h2>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('RCP.dashboard')}}">Dashboard</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Jobs</li>
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
                    <h3 class="block-title">All Jobs</h3>
                    <div class="block-options">
                        <a href="{{route('RCP.job.create')}}" class="btn btn-sm btn-outline-primary me-1">New Job</a>
                    </div>
                </div>
                <div class="block-content" id="vueJobListInstance">
                    <div class="table-responsive">
                        <table class="table table-striped table-vcenter">
                            <thead>
                            <tr>
                                <th>Job Title</th>
                                <th>Job Type</th>
                                <th>Company Name</th>
                                <th>Salary</th>
                                <th>Applicants</th>
                                <th style="width: 150px" class="text-center"></th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($jobs as $job)
                                <tr>
                                    <td><a href="{{route('RCP.job.show', [$job['_id']])}}">{{ $job['job_title'] }}</a></td>
                                    <td>{{ $job['job_type'] }}</td>
                                    <td>{{ $job['company_name'] }}</td>
                                    <td>${{ $job['salary_min'] }} @if(!empty($job['salary_max'])) - ${{$job['salary_max']}} @endif</td>
                                    <td>0</td>
                                    <td class="text-center">
                                        <a href="{{route('RCP.job.show', [$job['_id']])}}" class="btn btn-sm btn-outline-primary js-bs-tooltip-enabled me-1"><i class="fa fa-expand"></i></a>
                                        <a href="{{route('RCP.job.edit', [$job['_id']])}}" class="btn btn-sm btn-outline-primary js-bs-tooltip-enabled me-1"><i class="fa fa-edit"></i></a>
                                        <form class="d-inline-block" id="delete_{{$job['_id']}}" action="{{route('RCP.job.destroy', [$job['_id']])}}" method="POST">
                                            {{csrf_field()}}
                                            <input type="hidden" name="_method" value="DELETE">
                                            <a @click="deletePage(`{{$job['_id']}}`)" class="btn btn-sm btn-outline-danger"><i class="fa fa-trash"></i></a>
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
    @vite('resources/js/rcp/pages/job/job.js')
@endsection
