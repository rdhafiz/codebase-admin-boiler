<?php

namespace App\Http\Controllers\Cms;

use App\Http\Controllers\Controller;
use App\Models\CourseSchedule;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\View\View;

class CourseScheduleController extends Controller
{
    public function index(): View
    {
        $schedules = CourseSchedule::orderBy('name', 'asc')->get();
        foreach ($schedules as &$schedule){
            $schedule->start_date_format = date('d M, Y', strtotime($schedule->start_date));
            $schedule->end_date_format = date('d M, Y', strtotime($schedule->end_date));
        }
        return view('cms.pages.course.schedule.index', compact('schedules'));
    }

    public function create(): View
    {
        return view('cms.pages.course.schedule.create');
    }

    public function store(Request $request)
    {
        try {

            $validator = Validator::make($request->all(), [
                'name' => 'required|min:3',
                'start_date' => 'required|date',
                'duration' => 'required|integer',
                'blended' => 'required|integer',
                'face_to_face' => 'required|integer',
            ]);
            if ($validator->fails()) {
                return redirect()->back()->withInput($request->input())->withErrors($validator->errors());
            }

            $end_date = date('Y-m-d', strtotime('+'.$request->duration." days", strtotime($request->start_date)));
            CourseSchedule::create([
                'name' => $request->name,
                'start_date' => date('Y-m-d', strtotime($request->start_date)),
                'duration' => $request->duration,
                'end_date' => $end_date,
                'blended' => $request->blended,
                'face_to_face' => $request->face_to_face,
            ]);

            return redirect()->route('CMS.course.schedule.index')->withErrors(['success' => ['New schedule information has been created successfully']]);
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => [$e->getMessage()]]);
        }
    }

    public function show($id): View
    {
        $schedule = CourseSchedule::where('_id', $id)->first();
        if ($schedule == null) {
            abort('404');
        }
        return view('cms.pages.course.schedule.show', compact('schedule'));
    }

    public function edit($id): View
    {
        $schedule = CourseSchedule::where('_id', $id)->first();
        if ($schedule == null) {
            abort('404');
        }
        return view('cms.pages.course.schedule.edit', compact('schedule'));
    }

    public function update(Request $request, $id)
    {
        try {
            $schedule = CourseSchedule::where('_id', $id)->first();
            if ($schedule == null) {
                abort('404');
            }
            $validator = Validator::make($request->all(), [
                'name' => 'required|min:3',
                'start_date' => 'required|date',
                'duration' => 'required|integer',
                'blended' => 'required|integer',
                'face_to_face' => 'required|integer',
            ]);
            if ($validator->fails()) {
                return redirect()->back()->withInput($request->input())->withErrors($validator->errors());
            }

            $end_date = date('Y-m-d', strtotime('+'.$request->duration." days", strtotime($request->start_date)));

            $schedule->name = $request->name;
            $schedule->start_date = date('Y-m-d', strtotime($request->start_date));
            $schedule->duration = $request->duration;
            $schedule->end_date = $end_date;
            $schedule->blended = $request->blended;
            $schedule->face_to_face = $request->face_to_face;
            $schedule->save();

            return redirect()->route('CMS.course.schedule.index')->withErrors(['success' => ['Course schedule information has been updated successfully']]);
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => [$e->getMessage()]]);
        }
    }
    public function destroy($id)
    {
        try {
            $schedule = CourseSchedule::where('_id', $id)->first();
            if ($schedule == null) {
                abort('404');
            }
            $schedule->delete();
            return redirect()->back()->withErrors(['success' => ['Course schedule has been deleted successfully']]);
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => [$e->getMessage()]]);
        }
    }
}
