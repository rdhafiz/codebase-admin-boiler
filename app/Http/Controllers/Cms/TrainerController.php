<?php

namespace App\Http\Controllers\Cms;

use App\Http\Controllers\Controller;
use App\Models\Trainers;
use App\Services\MediaServices;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Illuminate\View\View;

class TrainerController extends Controller
{
    public function index(): View
    {
        $trainers = Trainers::orderBy('created_at', 'desc')->get();
        return view('cms.pages.trainer.index', compact('trainers'));
    }

    public function create(): View
    {
        return view('cms.pages.trainer.create');
    }

    public function store(Request $request)
    {
        try {
            $validator = Validator::make($request->all(), [
                'name' => 'required|min:5',
                'designation' => 'required|min:2',
                'employment_history' => 'nullable|string',
                'qualifications' => 'nullable|string',
                'social_facebook' => 'nullable|url',
                'social_twitter' => 'nullable|url',
                'social_linkedin' => 'nullable|url',
            ]);
            if ($validator->fails()) {
                return redirect()->back()->withInput($request->input())->withErrors($validator->errors());
            }

            if ($request->avatar) {
                $imagePath = MediaServices::upload($request->avatar);
            } else {
                $imagePath = MediaServices::uploadDummy($request->name);
            }

            $trainer = new Trainers();
            $trainer->avatar = $imagePath;
            $trainer->name = $request->name;
            $trainer->slug = Str::slug($request->name);
            $trainer->designation = $request->designation;
            $trainer->employment_history = $request->employment_history ?? null;
            $trainer->qualifications = $request->qualifications ?? null;
            $trainer->social_facebook = $request->social_facebook ?? null;
            $trainer->social_twitter = $request->social_twitter ?? null;
            $trainer->social_linkedin = $request->social_linkedin ?? null;
            $trainer->save();

            return redirect()->route('CMS.trainer.show', [$trainer->_id])->withErrors(['success' => ['New trainer information has been created successfully']]);
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => [$e->getMessage()]]);
        }
    }

    public function show($id): View
    {
        $trainer = Trainers::where('_id', $id)->first();
        if ($trainer == null) {
            abort('404');
        }
        return view('cms.pages.trainer.show', compact('trainer'));
    }

    public function edit($id): View
    {
        $trainer = Trainers::where('_id', $id)->first();
        if ($trainer == null) {
            abort('404');
        }
        return view('cms.pages.trainer.edit', compact('trainer'));
    }

    public function update(Request $request, $id)
    {
        try {
            $trainer = Trainers::where('_id', $id)->first();
            if ($trainer == null) {
                abort('404');
            }
            $validator = Validator::make($request->all(), [
                'name' => 'required|min:5',
                'designation' => 'required|min:2',
                'employment_history' => 'nullable|string',
                'qualifications' => 'nullable|string',
                'social_facebook' => 'nullable|url',
                'social_twitter' => 'nullable|url',
                'social_linkedin' => 'nullable|url',
            ]);
            if ($validator->fails()) {
                return redirect()->back()->withInput($request->input())->withErrors($validator->errors());
            }

            $imagePath = $trainer->avatar;
            if ($request->avatar) {
                $imagePath = Storage::disk('public')->put('media/images', $request->avatar);
            }

            $trainer->avatar = $imagePath;
            $trainer->name = $request->name;
            $trainer->slug = Str::slug($request->name);
            $trainer->designation = $request->designation;
            $trainer->employment_history = $request->employment_history ?? null;
            $trainer->qualifications = $request->qualifications ?? null;
            $trainer->social_facebook = $request->social_facebook ?? null;
            $trainer->social_twitter = $request->social_twitter ?? null;
            $trainer->social_linkedin = $request->social_linkedin ?? null;
            $trainer->save();

            return redirect()->route('CMS.trainer.show', [$trainer->_id])->withErrors(['success' => ['Trainer has been updated successfully']]);
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => [$e->getMessage()]]);
        }
    }

    public function destroy($id)
    {
        try {
            $trainer = Trainers::where('_id', $id)->first();
            if ($trainer == null) {
                abort('404');
            }

            $trainer->email = 'deleted-'.$trainer->email;
            $trainer->save();
            $trainer->delete();
            return redirect()->back()->withErrors(['success' => ['Trainer has been deleted successfully']]);
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => [$e->getMessage()]]);
        }
    }
}
