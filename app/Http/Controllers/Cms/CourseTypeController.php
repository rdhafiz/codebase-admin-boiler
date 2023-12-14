<?php

namespace App\Http\Controllers\Cms;

use App\Http\Controllers\Controller;
use App\Models\CourseType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\View\View;

class CourseTypeController extends Controller
{
    public function index(): View
    {
        $types = CourseType::orderBy('name', 'asc')->get();
        return view('cms.pages.course.type.index', compact('types'));
    }

    public function create(): View
    {
        return view('cms.pages.course.type.create');
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

            CourseType::create([
                'name' => $request->name
            ]);

            return redirect()->route('CMS.course.type.index')->withErrors(['success' => ['New type information has been created successfully']]);
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => [$e->getMessage()]]);
        }
    }

    public function show($id): View
    {
        $type = CourseType::where('_id', $id)->first();
        if ($type == null) {
            abort('404');
        }
        return view('cms.pages.course.type.show', compact('type'));
    }

    public function edit($id): View
    {
        $type = CourseType::where('_id', $id)->first();
        if ($type == null) {
            abort('404');
        }
        return view('cms.pages.course.type.edit', compact('type'));
    }

    public function update(Request $request, $id)
    {
        try {
            $type = CourseType::where('_id', $id)->first();
            if ($type == null) {
                abort('404');
            }
            $validator = Validator::make($request->all(), [
                'name' => 'required|min:3',
            ]);
            if ($validator->fails()) {
                return redirect()->back()->withInput($request->input())->withErrors($validator->errors());
            }

            $type->name = $request->name;
            $type->save();

            return redirect()->route('CMS.course.type.index')->withErrors(['success' => ['Course type information has been updated successfully']]);
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => [$e->getMessage()]]);
        }
    }
    public function destroy($id)
    {
        try {
            $type = CourseType::where('_id', $id)->first();
            if ($type == null) {
                abort('404');
            }
            $type->delete();
            return redirect()->back()->withErrors(['success' => ['Course type has been deleted successfully']]);
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => [$e->getMessage()]]);
        }
    }
}
