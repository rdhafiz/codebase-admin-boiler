@extends('frontend.layout.frontend-layout')

@section('css')
    {{--    @vite(['resources/sass/frontend/home.scss'])--}}
@show

@section('content')

    <div class="w-100 py-5">
        <section class="bg-body py-5 my-lg-0 mt-3">
            <div class="container py-md-2 py-lg-4 my-xl-2 my-xxl-3">

                <div class="w-100">
                    @if($errors->has('success'))
                        <p class="alert alert-success">{{$errors->first('success')}}</p>
                    @endif
                    @if($errors->has('error'))
                        <p class="alert alert-danger">{{$errors->first('error')}}</p>
                    @endif
                </div>

                <div class="w-100">
                    <div class="my-4">
                        <span class="badge bg-success mb-2">{{ $job->job_type }}</span>
                        <h1 class="mb-2">{{ $job->job_title }}</h1>
                        <p class="m-0"><a class="text-decoration-none" href="{{$job->company_website}}" target="_blank">{{ $job->company_name }}</a></p>
                        <p class="d-flex align-items-center"><i class="ai-map-pin"></i> &nbsp; <span>{{ $job->location }}</span></p>

                        <p class="my-3"><strong>Salary Range:</strong> £{{$job->salary_min}} - £{{$job->salary_max}}</p>

                        <p class="fs-lg mb-0 mb-lg-4">
                            {!! $job->job_description !!}
                        </p>
                        <form class="mt-5 mb-5" action="{{route('job.apply', [$job->_id])}}">
                            {{csrf_field()}}
                            <input type="hidden" name="job_id" value="{{$job->_id}}">
                            <button type="submit" class="btn btn-lg btn-primary">Apply Now</button>
                        </form>
                    </div>
                </div>

            </div>
        </section>
    </div>

@endsection
@section('js')

@endsection
