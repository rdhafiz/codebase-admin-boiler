<?php

namespace App\Http\Controllers\Cms;

use App\Http\Controllers\Controller;
use App\Models\CourseCategories;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\View\View;

class CourseCategoryController extends Controller
{
    public function index(): View
    {
        $categories = CourseCategories::orderBy('name', 'asc')->get();
        return view('cms.pages.course.category.index', compact('categories'));
    }

    public function create(): View
    {
        return view('cms.pages.course.category.create');
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

            CourseCategories::create([
                'name' => $request->name
            ]);

            return redirect()->route('CMS.course.category.index')->withErrors(['success' => ['New category information has been created successfully']]);
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => [$e->getMessage()]]);
        }
    }

    public function show($id): View
    {
        $category = CourseCategories::where('_id', $id)->first();
        if ($category == null) {
            abort('404');
        }
        return view('cms.pages.course.category.show', compact('category'));
    }

    public function edit($id): View
    {
        $category = CourseCategories::where('_id', $id)->first();
        if ($category == null) {
            abort('404');
        }
        return view('cms.pages.course.category.edit', compact('category'));
    }

    public function update(Request $request, $id)
    {
        try {
            $category = CourseCategories::where('_id', $id)->first();
            if ($category == null) {
                abort('404');
            }
            $validator = Validator::make($request->all(), [
                'name' => 'required|min:3',
            ]);
            if ($validator->fails()) {
                return redirect()->back()->withInput($request->input())->withErrors($validator->errors());
            }

            $category->name = $request->name;
            $category->save();

            return redirect()->route('CMS.course.category.index')->withErrors(['success' => ['Category information has been updated successfully']]);
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => [$e->getMessage()]]);
        }
    }
    public function destroy($id)
    {
        try {
            $category = CourseCategories::where('_id', $id)->first();
            if ($category == null) {
                abort('404');
            }
            $category->delete();
            return redirect()->back()->withErrors(['success' => ['Category has been deleted successfully']]);
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => [$e->getMessage()]]);
        }
    }
}
