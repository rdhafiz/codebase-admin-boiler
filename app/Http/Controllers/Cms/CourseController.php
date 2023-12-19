<?php

namespace App\Http\Controllers\Cms;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\CourseCategories;
use App\Models\CourseInstallments;
use App\Models\CourseSchedules;
use App\Models\CourseType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\View\View;

class CourseController extends Controller
{
    public function index(): View
    {
        $courses = Course::orderBy('name', 'asc')->get();
        return view('cms.pages.course.index', compact('courses'));
    }

    public function create(): View
    {
        $courseCategory = CourseCategories::orderBy('name', 'asc')->get()->toArray();
        $courseType = CourseType::orderBy('name', 'asc')->get()->toArray();
        return view('cms.pages.course.create', compact('courseCategory', 'courseType'));
    }

    public function store(Request $request)
    {
        try {
            $validator = Validator::make($request->all(), [
                "course_title" => 'required|min:3',
                "course_workstations" => 'nullable|numeric',
                "course_category" => "required",
                "course_type" => "required",
                "course_fee" => "required|numeric",
                "course_duration" => "required|numeric",
                "course_start_date" => "required|date",
                "course_end_date" => "required|date",
                "course_schedules" => "required|array",
                "payment_instalment" => "nullable|numeric",
                "payment_instalment_duration" => $request->payment_instalment == 1 ? "required|numeric" : 'nullable|numeric',
                "payment_total_instalment" => $request->payment_instalment == 1 ? "required|numeric" : 'nullable|numeric',
                "payment_instalment_details" => $request->payment_instalment == 1 ? "required|array" : 'nullable|array',
                "course_discount" => "nullable|numeric",
                "course_discount_start_date" => $request->course_discount == 1 ? "required|date" : 'nullable|date',
                "course_discount_end_date" => $request->course_discount == 1 ? "required|date" : 'nullable|date',
                "course_discount_amount" => $request->course_discount == 1 ? "required|numeric" : 'nullable|numeric',
                "course_discount_promo_code" => 'nullable|alpha_num',
                "course_overview" => 'nullable|string'
            ]);
            if ($validator->fails()) {
                return redirect()->back()->withInput($request->input())->withErrors($validator->errors());
            }

            $course = new Course();
            $course->course_lead_trainer = $request->course_lead_trainer ?? 0;
            $course->course_title = $request->course_title;
            $course->course_workstations = $request->course_workstations ?? 10;
            $course->course_category = $request->course_category;
            $course->course_type = $request->course_type;
            $course->course_fee = $request->course_fee;
            $course->course_duration = $request->course_duration;
            $course->course_start_date = $request->course_start_date;
            $course->course_end_date = $request->course_end_date;
            $course->payment_instalment = $request->payment_instalment ?? 0;
            $course->payment_instalment_duration = $request->payment_instalment_duration ?? null;
            $course->payment_total_instalment = $request->payment_total_instalment ?? null;
            $course->course_discount = $request->course_discount ?? 0;
            $course->course_discount_start_date = $request->course_discount_start_date ?? null;
            $course->course_discount_end_date = $request->course_discount_end_date ?? null;
            $course->course_discount_amount = $request->course_discount_amount ?? null;
            $course->course_discount_promo_code = $request->course_discount_promo_code ?? null;
            $course->course_overview = $request->course_overview ?? null;
            $course->save();

            if ($course) {
                if (is_array($request->course_schedules) && count($request->course_schedules) > 0) {
                    $course_schedules = [];
                    foreach ($request->course_schedules as $courseSchedule){
                        $course_schedules[] = array(
                            'course_id' => $course->_id,
                            'start' => $courseSchedule['start'],
                            'end' => $courseSchedule['end'],
                        );
                    }
                    CourseSchedules::insert($course_schedules);
                }
                if (is_array($request->payment_instalment_details) && count($request->payment_instalment_details) > 0) {
                    CourseInstallments::insert($request->payment_instalment_details);

                    $payment_instalment_details = [];
                    foreach ($request->payment_instalment_details as $payment_instalment_detail){
                        $payment_instalment_details[] = array(
                            'course_id' => $course->_id,
                            'days' => $payment_instalment_detail['days'],
                            'amount' => $payment_instalment_detail['amount'],
                        );
                    }
                    CourseInstallments::insert($payment_instalment_details);
                }
            }

            return redirect()->route('CMS.course.index')->withErrors(['success' => ['New course has been created successfully']]);
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => [$e->getMessage()]]);
        }
    }

    public function show($id)
    {
        return redirect()->route('CMS.course.edit', [$id]);
    }

    public function edit($id): View
    {
        $courseCategory = CourseCategories::orderBy('name', 'asc')->get()->toArray();
        $courseType = CourseType::orderBy('name', 'asc')->get()->toArray();
        $course = Course::with(['course_schedules','payment_instalment_details'])->where('_id', $id)->first();
        return view('cms.pages.course.edit', compact('courseCategory', 'courseType', 'course'));
    }

    public function update(Request $request, $id)
    {
        try {
            $course = Course::where('_id', $id)->first();
            if ($course == null) {
                abort('404');
            }
            $validator = Validator::make($request->all(), [
                "course_title" => 'required|min:3',
                "course_workstations" => 'nullable|numeric',
                "course_category" => "required",
                "course_type" => "required",
                "course_fee" => "required|numeric",
                "course_duration" => "required|numeric",
                "course_start_date" => "required|date",
                "course_end_date" => "required|date",
                "course_schedules" => "required|array",
                "payment_instalment" => "nullable|numeric",
                "payment_instalment_duration" => $request->payment_instalment == 1 ? "required|numeric" : 'nullable|numeric',
                "payment_total_instalment" => $request->payment_instalment == 1 ? "required|numeric" : 'nullable|numeric',
                "payment_instalment_details" => $request->payment_instalment == 1 ? "required|array" : 'nullable|array',
                "course_discount" => "nullable|numeric",
                "course_discount_start_date" => $request->course_discount == 1 ? "required|date" : 'nullable|date',
                "course_discount_end_date" => $request->course_discount == 1 ? "required|date" : 'nullable|date',
                "course_discount_amount" => $request->course_discount == 1 ? "required|numeric" : 'nullable|numeric',
                "course_discount_promo_code" => 'nullable|alpha_num',
                "course_overview" => 'nullable|string'
            ]);
            if ($validator->fails()) {
                return redirect()->back()->withInput($request->input())->withErrors($validator->errors());
            }

            $course->course_lead_trainer = $request->course_lead_trainer ?? 0;
            $course->course_title = $request->course_title;
            $course->course_workstations = $request->course_workstations ?? 10;
            $course->course_category = $request->course_category;
            $course->course_type = $request->course_type;
            $course->course_fee = $request->course_fee;
            $course->course_duration = $request->course_duration;
            $course->course_start_date = $request->course_start_date;
            $course->course_end_date = $request->course_end_date;
            $course->payment_instalment = $request->payment_instalment ?? 0;
            $course->payment_instalment_duration = $request->payment_instalment_duration ?? null;
            $course->payment_total_instalment = $request->payment_total_instalment ?? null;
            $course->course_discount = $request->course_discount ?? 0;
            $course->course_discount_start_date = $request->course_discount_start_date ?? null;
            $course->course_discount_end_date = $request->course_discount_end_date ?? null;
            $course->course_discount_amount = $request->course_discount_amount ?? null;
            $course->course_discount_promo_code = $request->course_discount_promo_code ?? null;
            $course->course_overview = $request->course_overview ?? null;
            $course->save();

            if ($course) {
                if (is_array($request->course_schedules) && count($request->course_schedules) > 0) {
                    $course_schedules = [];
                    foreach ($request->course_schedules as $courseSchedule){
                        $course_schedules[] = array(
                            'course_id' => $course->_id,
                            'start' => $courseSchedule['start'],
                            'end' => $courseSchedule['end'],
                        );
                    }
                    CourseSchedules::where('course_id', $course->_id)->delete();
                    CourseSchedules::insert($course_schedules);
                }
                if (is_array($request->payment_instalment_details) && count($request->payment_instalment_details) > 0) {
                    CourseInstallments::insert($request->payment_instalment_details);

                    $payment_instalment_details = [];
                    foreach ($request->payment_instalment_details as $payment_instalment_detail){
                        $payment_instalment_details[] = array(
                            'course_id' => $course->_id,
                            'days' => $payment_instalment_detail['days'],
                            'amount' => $payment_instalment_detail['amount'],
                        );
                    }
                    CourseInstallments::where('course_id', $course->_id)->delete();
                    CourseInstallments::insert($payment_instalment_details);
                }
            }

            return redirect()->route('CMS.course.index')->withErrors(['success' => ['Course has been updated successfully']]);
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
