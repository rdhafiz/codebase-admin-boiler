<?php

namespace App\Http\Controllers\Cms;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Services\MediaServices;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\View\View;

class LearnerController extends Controller
{
    public function index(): View
    {
        $learners = User::orderBy('created_at', 'desc')->get();
        return view('cms.pages.learner.index', compact('learners'));
    }

    public function create(): View
    {
        return view('cms.pages.learner.create');
    }

    public function store(Request $request)
    {
        try {

            $validator = Validator::make($request->all(), [
                'name' => 'required|min:5',
                'email' => 'required|email|unique:users,email',
                'phone' => 'required',
                'password' => 'required|min:6|confirmed',
            ]);
            if ($validator->fails()) {
                return redirect()->back()->withInput($request->input())->withErrors($validator->errors());
            }

            if ($request->avatar) {
                $imagePath = MediaServices::upload($request->avatar);
            } else {
                $imagePath = MediaServices::uploadDummy($request->name);
            }

            $learner = User::create([
                'avatar' => $imagePath,
                'name' => $request->name,
                'email' => $request->email,
                'phone' => $request->phone,
                'password' => bcrypt($request->password),
            ]);

            return redirect()->route('CMS.learner.show', [$learner->_id])->withErrors(['success' => ['New learner information has been created successfully']]);
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => [$e->getMessage()]]);
        }
    }

    public function show($id): View
    {
        $learner = User::where('_id', $id)->first();
        if ($learner == null) {
            abort('404');
        }
        return view('cms.pages.learner.show', compact('learner'));
    }

    public function edit($id): View
    {
        $learner = User::where('_id', $id)->first();
        if ($learner == null) {
            abort('404');
        }
        return view('cms.pages.learner.edit', compact('learner'));
    }

    public function update(Request $request, $id)
    {
        try {
            $learner = User::where('_id', $id)->first();
            if ($learner == null) {
                abort('404');
            }
            $validator = Validator::make($request->all(), [
                'name' => 'required|min:5',
                'email' => 'required|email|unique:users,email,'.$id.',_id',
                'phone' => 'required',
                'password' => 'nullable|min:6|confirmed',
            ]);
            if ($validator->fails()) {
                return redirect()->back()->withInput($request->input())->withErrors($validator->errors());
            }

            $imagePath = $learner->avatar;
            if ($request->avatar) {
                $imagePath = MediaServices::upload($request->avatar);
            }

            if (!empty($request->password)) {
                $learner->password = bcrypt($request->password);
            }
            $learner->avatar = $imagePath;
            $learner->name = $request->name;
            $learner->email = $request->email;
            $learner->phone = $request->phone;
            $learner->save();

            return redirect()->route('CMS.learner.show', [$learner->_id])->withErrors(['success' => ['User information has been updated successfully']]);
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => [$e->getMessage()]]);
        }
    }

    public function destroy($id)
    {
        try {
            $learner = User::where('_id', $id)->first();
            if ($learner == null) {
                abort('404');
            }
            $learner->email = 'deleted-'.$learner->email;
            $learner->save();
            $learner->delete();
            return redirect()->back()->withErrors(['success' => ['User has been deleted successfully']]);
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => [$e->getMessage()]]);
        }
    }
}
