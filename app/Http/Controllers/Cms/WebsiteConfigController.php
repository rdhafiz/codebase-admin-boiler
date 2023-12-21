<?php

namespace App\Http\Controllers\Cms;

use App\Http\Controllers\Controller;
use App\Models\WebsiteConfig;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Illuminate\View\View;

class WebsiteConfigController extends Controller
{
    public function index(): View
    {
        $configs = WebsiteConfig::orderBy('name', 'asc')->get();
        return view('cms.pages.config.index', compact('configs'));
    }

    public function create(): View
    {
        return view('cms.pages.config.create');
    }

    public function store(Request $request)
    {
        try {

            $validator = Validator::make($request->all(), [
                'name' => 'required|min:3',
                'value' => 'required',
            ]);
            if ($validator->fails()) {
                return redirect()->back()->withInput($request->input())->withErrors($validator->errors());
            }

            WebsiteConfig::create([
                'name' => $request->name,
                'slug' => Str::slug($request->name),
                'value' => $request->value
            ]);

            return redirect()->route('CMS.config.index')->withErrors(['success' => ['New config has been created successfully']]);
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => [$e->getMessage()]]);
        }
    }

    public function show($id): View
    {
        $config = WebsiteConfig::where('_id', $id)->first();
        if ($config == null) {
            abort('404');
        }
        return view('cms.pages.config.show', compact('config'));
    }

    public function edit($id): View
    {
        $config = WebsiteConfig::where('_id', $id)->first();
        if ($config == null) {
            abort('404');
        }
        return view('cms.pages.config.edit', compact('config'));
    }

    public function update(Request $request, $id)
    {
        try {
            $config = WebsiteConfig::where('_id', $id)->first();
            if ($config == null) {
                abort('404');
            }
            $validator = Validator::make($request->all(), [
                'name' => 'required|min:3',
                'value' => 'required',
            ]);
            if ($validator->fails()) {
                return redirect()->back()->withInput($request->input())->withErrors($validator->errors());
            }

            $config->name = $request->name;
            $config->slug = Str::slug($request->name);
            $config->value = $request->value;
            $config->save();

            return redirect()->route('CMS.config.index')->withErrors(['success' => ['Website config has been updated successfully']]);
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => [$e->getMessage()]]);
        }
    }
    public function destroy($id)
    {
        try {
            $config = WebsiteConfig::where('_id', $id)->first();
            if ($config == null) {
                abort('404');
            }
            $config->delete();
            return redirect()->back()->withErrors(['success' => ['Website config has been deleted successfully']]);
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => [$e->getMessage()]]);
        }
    }
}
