<?php

namespace App\Http\Controllers\Cms;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\CourseCategories;
use App\Models\CourseSchedule;
use App\Models\CourseType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\View\View;

class CourseController extends Controller
{
    public function index(): View
    {
        $categories = Course::orderBy('name', 'asc')->get();
        return view('cms.pages.course.index', compact('categories'));
    }

    public function create(): View
    {
        $courseCategory = CourseCategories::orderBy('name', 'asc')->get()->toArray();
        $courseType = CourseType::orderBy('name', 'asc')->get()->toArray();
        $courseSchedule = CourseSchedule::orderBy('name', 'asc')->get()->toArray();
        return view('cms.pages.course.create', compact('courseCategory', 'courseType', 'courseSchedule'));
    }

    public function store(Request $request)
    {
        try {

            $validator = Validator::make($request->all(), [
                'name' => 'required|min:3',
            ]);
            if ($validator->fails()) {
                return redirect()->back()->withInput($request->input())->withErrors($validator->errors());
            }

            Course::create([
                'name' => $request->name
            ]);

            return redirect()->route('CMS.course.index')->withErrors(['success' => ['New course information has been created successfully']]);
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => [$e->getMessage()]]);
        }
    }

    public function show($id): View
    {
        $course = Course::where('_id', $id)->first();
        if ($course == null) {
            abort('404');
        }
        return view('cms.pages.course.show', compact('course'));
    }

    public function edit($id): View
    {
        $course = Course::where('_id', $id)->first();
        if ($course == null) {
            abort('404');
        }
        return view('cms.pages.course.edit', compact('course'));
    }

    public function update(Request $request, $id)
    {
        try {
            $course = Course::where('_id', $id)->first();
            if ($course == null) {
                abort('404');
            }
            $validator = Validator::make($request->all(), [
                'name' => 'required|min:3',
            ]);
            if ($validator->fails()) {
                return redirect()->back()->withInput($request->input())->withErrors($validator->errors());
            }

            $course->name = $request->name;
            $course->save();

            return redirect()->route('CMS.course.index')->withErrors(['success' => ['Course information has been updated successfully']]);
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => [$e->getMessage()]]);
        }
    }

    public function destroy($id)
    {
        try {
            $course = Course::where('_id', $id)->first();
            if ($course == null) {
                abort('404');
            }
            $course->delete();
            return redirect()->back()->withErrors(['success' => ['Course has been deleted successfully']]);
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => [$e->getMessage()]]);
        }
    }
}
