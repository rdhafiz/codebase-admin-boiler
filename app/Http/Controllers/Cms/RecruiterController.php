<?php

namespace App\Http\Controllers\Cms;

use App\Http\Controllers\Controller;
use App\Models\Recruiters;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\View\View;

class RecruiterController extends Controller
{
    public function index(): View
    {
        $recruiters = Recruiters::orderBy('created_at', 'asc')->get();
        return view('cms.pages.recruiters.index', compact('recruiters'));
    }

    public function create(): View
    {
        return view('cms.pages.recruiters.create');
    }

    public function store(Request $request)
    {
        try {

            $validator = Validator::make($request->all(), [
                'name' => 'required|min:5',
                'email' => 'required|email|unique:recruiters:email',
                'phone' => 'nullable|alpha_num',
                'address' => 'nullable|string',
                'post_code' => 'nullable|alpha_num',
                'city' => 'nullable|string',
                'country' => 'nullable|string',
                'password' => 'nullable|min:6|confirmed',
            ]);
            if ($validator->fails()) {
                return redirect()->back()->withInput($request->input())->withErrors($validator->errors());
            }

            $imagePath = null;
            if ($request->avatar) {
                $imagePath = Storage::disk('public')->put('media/images', $request->avatar);
            }

            $password = $request->password ?? time();

            $recruiter = Recruiters::create([
                'avatar' => $imagePath,
                'name' => $request->name,
                'email' => $request->email,
                'password' => bcrypt($password),
                'phone' => $request->phone ?? null,
                'address' => $request->address ?? null,
                'post_code' => $request->post_code ?? null,
                'city' => $request->city ?? null,
                'country' => $request->country ?? null
            ]);

            return redirect()->route('CMS.recruiter.show', [$recruiter->_id])->withErrors(['success' => ['New recruiter information has been created successfully']]);
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => [$e->getMessage()]]);
        }
    }

    public function show($id): View
    {
        $recruiter = Recruiters::where('_id', $id)->first();
        if ($recruiter == null) {
            abort('404');
        }
        return view('cms.pages.recruiters.show', compact('recruiter'));
    }

    public function edit($id): View
    {
        $recruiter = Recruiters::where('_id', $id)->first();
        if ($recruiter == null) {
            abort('404');
        }
        return view('cms.pages.recruiters.edit', compact('recruiter'));
    }

    public function update(Request $request, $id)
    {
        try {
            $recruiter = Recruiters::where('_id', $id)->first();
            if ($recruiter == null) {
                abort('404');
            }
            $validator = Validator::make($request->all(), [
                'name' => 'required|min:5',
                'email' => 'required|email|unique:recruiters:email',
                'phone' => 'nullable|alpha_num',
                'address' => 'nullable|string',
                'post_code' => 'nullable|alpha_num',
                'city' => 'nullable|string',
                'country' => 'nullable|string',
                'password' => 'nullable|min:6|confirmed',
            ]);
            if ($validator->fails()) {
                return redirect()->back()->withInput($request->input())->withErrors($validator->errors());
            }

            $imagePath = $recruiter->avatar;
            if ($request->avatar) {
                $imagePath = Storage::disk('public')->put('media/images', $request->avatar);
            }

            if (!empty($request->password)) {
                $recruiter->password = bcrypt($request->password);
            }
            $recruiter->avatar = $imagePath;
            $recruiter->name = $request->name;
            $recruiter->email = $request->email;
            $recruiter->phone = $request->phone ?? null;
            $recruiter->address = $request->address ?? null;
            $recruiter->post_code = $request->post_code ?? null;
            $recruiter->city = $request->city ?? null;
            $recruiter->country = $request->country ?? null;
            $recruiter->save();

            return redirect()->route('CMS.recruiter.show', [$recruiter->_id])->withErrors(['success' => ['Recruiter information has been updated successfully']]);
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => [$e->getMessage()]]);
        }
    }
    public function destroy($id)
    {
        try {
            $recruiter = Recruiters::where('_id', $id)->first();
            if ($recruiter == null) {
                abort('404');
            }
            $recruiter->delete();
            return redirect()->back()->withErrors(['success' => ['Recruiter has been deleted successfully']]);
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => [$e->getMessage()]]);
        }
    }
}
