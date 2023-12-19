@extends('cms.layout.layout')
@section('content')
    <div class="w-100 p-3 p-lg-5">

        <div class="container-lg">
            <div class="w-100 mb-4">
                <h2 class="fs-2 m-0 p-0">Trainer Preview</h2>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{route('CMS.dashboard')}}">Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="{{route('CMS.trainer.index')}}">Trainers</a></li>
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
                        <h3 class="block-title">{{ $trainer['name'] }}</h3>
                        <div class="block-options">
                            <a href="{{route('CMS.trainer.edit', [$trainer['_id']])}}" class="btn btn-sm btn-outline-primary js-bs-tooltip-enabled me-1"><i class="fa fa-edit"></i></a>
                        </div>
                    </div>
                    <div class="block-content">
                        <div class="w-100">

                            <div class="form-group mb-4">
                                @if(isset($trainer['avatar']) && !empty($trainer['avatar']))
                                    <div class="w-100 mb-2">
                                        <img class="img-fluid rounded-pill border border-2 mb-2" style="width: 150px; height: 150px; object-fit: cover;overflow: hidden;" src="{{$trainer['avatar_full_path']}}" alt="">
                                    </div>
                                @endif
                            </div>
                            <div class="form-group mb-4">
                                <table class="table">
                                    <tbody>
                                    <tr>
                                        <th style="width: 100px">Name</th>
                                        <td>{{ $trainer['name'] }}</td>
                                    </tr>
                                    <tr>
                                        <th>Designation</th>
                                        <td>{{ $trainer['designation'] }}</td>
                                    </tr>
                                    <tr>
                                        <th>Social</th>
                                        <td>
                                            <a target="_blank" href="{{ $trainer['social_facebook'] }}" class="btn btn-sm btn-primary me-1"><i class="fab fa-facebook"></i></a>
                                            <a target="_blank" href="{{ $trainer['social_twitter'] }}" class="btn btn-sm btn-info me-1"><i class="fab fa-twitter"></i></a>
                                            <a target="_blank" href="{{ $trainer['social_linkedin'] }}" class="btn btn-sm btn-primary"><i class="fab fa-linkedin"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Employment History</th>
                                        <td>{!! nl2br($trainer['employment_history']) !!}</td>
                                    </tr>
                                    <tr>
                                        <th>Qualifications</th>
                                        <td>{!! nl2br($trainer['qualifications']) !!}</td>
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
