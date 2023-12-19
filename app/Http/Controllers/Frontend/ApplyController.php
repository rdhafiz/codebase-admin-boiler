<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Course;
use App\Models\CourseCategories;
use App\Models\CourseType;
use Illuminate\Routing\Controller as BaseController;

class ApplyController extends BaseController
{
    public function index()
    {
        $courses = Course::with(['course_schedules'])->orderBy('course_title', 'asc')->get();
        $course_types = CourseType::orderBy('name', 'asc')->get();
        return view("frontend.pages.apply.form", compact('courses','course_types'));
    }
}
