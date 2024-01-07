@extends('cms.layout.layout')
@section('content')
    <div class="w-100 p-3 p-lg-5">

        <div class="w-100 mb-4">
            <h2 class="fs-2 m-0 p-0">Courses</h2>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('CMS.dashboard')}}">Dashboard</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Courses</li>
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
                    <h3 class="block-title">All Courses</h3>
                    <div class="block-options">
                        <a href="{{route('CMS.course.create')}}" class="btn btn-sm btn-outline-primary me-1">New Course</a>
                    </div>
                </div>
                <div class="block-content" id="vueCourseListInstance">
                    <div class="table-responsive">
                        <table class="table table-striped table-vcenter">
                            <thead>
                            <tr>
                                <th>Course</th>
                                <th class="text-center">Category</th>
                                <th class="text-center">Type</th>
                                <th class="text-center">Duration</th>
                                <th class="text-center">Course Fee</th>
                                <th style="width: 150px" class="text-center"></th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($courses as $course)
                                <tr>
                                    <td>{{ $course->course_title }}</td>
                                    <td class="text-center">{{ $course->category->name }}</td>
                                    <td class="text-center">{{ $course->type->name }}</td>
                                    <td class="text-center">{{ $course->course_duration }}</td>
                                    <td class="text-center">
                                        @if($course['discount'] > 0)
                                            £{{ $course['course_price']['unit_amount'] - $course['discount'] }} <br>
                                            <s class="text-danger">£{{ $course['course_price']['unit_amount'] }}</s>
                                        @else
                                            £{{ $course['course_price']['unit_amount'] }}
                                        @endif
                                    </td>
                                    <td class="text-center">
                                        <a href="{{route('CMS.course.edit', [$course->_id])}}" class="btn btn-sm btn-outline-primary js-bs-tooltip-enabled me-1"><i class="fa fa-magnifying-glass"></i></a>
                                        <form class="d-inline-block" id="delete_{{$course['_id']}}" action="{{route('CMS.course.destroy', [$course['_id']])}}" method="POST">
                                            {{csrf_field()}}
                                            <input type="hidden" name="_method" value="DELETE">
                                            <a @click="deleteCourse(`{{$course['_id']}}`)" class="btn btn-sm btn-outline-danger"><i class="fa fa-trash"></i></a>
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
    @vite('resources/js/cms/pages/course/course.js')
@endsection
