<?php

namespace App\Http\Controllers\Cms;

use App\Http\Controllers\Controller;
use App\Models\CoursePrice;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\View\View;

class CoursePriceController extends Controller
{
    public function index(): View
    {
        $prices = CoursePrice::orderBy('name', 'asc')->get();
        return view('cms.pages.course.price.index', compact('prices'));
    }

    public function create(): View
    {
        return view('cms.pages.course.price.create');
    }

    public function store(Request $request)
    {
        try {

            $validator = Validator::make($request->all(), [
                'name' => 'required|min:3',
                'price' => 'required|numeric',
            ]);
            if ($validator->fails()) {
                return redirect()->back()->withInput($request->input())->withErrors($validator->errors());
            }

            CoursePrice::create([
                'name' => $request->name,
                'price' => $request->price,
                'discount' => $request->discount ?? 0,
                'discount_message' => $request->discount_message ?? null
            ]);

            return redirect()->route('CMS.course.price.index')->withErrors(['success' => ['New price has been created successfully']]);
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => [$e->getMessage()]]);
        }
    }

    public function show($id): View
    {
        $price = CoursePrice::where('_id', $id)->first();
        if ($price == null) {
            abort('404');
        }
        return view('cms.pages.course.price.show', compact('price'));
    }

    public function edit($id): View
    {
        $price = CoursePrice::where('_id', $id)->first();
        if ($price == null) {
            abort('404');
        }
        return view('cms.pages.course.price.edit', compact('price'));
    }

    public function update(Request $request, $id)
    {
        try {
            $price = CoursePrice::where('_id', $id)->first();
            if ($price == null) {
                abort('404');
            }
            $validator = Validator::make($request->all(), [
                'name' => 'required|min:3',
                'price' => 'required|numeric',
            ]);
            if ($validator->fails()) {
                return redirect()->back()->withInput($request->input())->withErrors($validator->errors());
            }

            $price->name = $request->name;
            $price->price = $request->price;
            $price->discount = $request->discount ?? 0;
            $price->discount_message = $request->discount_message ?? null;
            $price->save();

            return redirect()->route('CMS.course.price.index')->withErrors(['success' => ['Course price has been updated successfully']]);
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => [$e->getMessage()]]);
        }
    }
    public function destroy($id)
    {
        try {
            $price = CoursePrice::where('_id', $id)->first();
            if ($price == null) {
                abort('404');
            }
            $price->delete();
            return redirect()->back()->withErrors(['success' => ['Course price has been deleted successfully']]);
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => [$e->getMessage()]]);
        }
    }
}
