<?php

namespace App\Http\Controllers\Cms;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Services\MediaServices;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\View\View;

class AdminUserController extends Controller
{
    public function index(): View
    {
        $admins = Admin::orderBy('created_at', 'desc')->where('_id', '!=', Auth::guard('admin')->id())->get();
        return view('cms.pages.admin.index', compact('admins'));
    }

    public function create(): View
    {
        return view('cms.pages.admin.create');
    }

    public function store(Request $request)
    {
        try {

            $validator = Validator::make($request->all(), [
                'name' => 'required|min:5',
                'email' => 'required|email|unique:admins:email',
                'user_role' => 'required|numeric',
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

            $admin = Admin::create([
                'avatar' => $imagePath,
                'name' => $request->name,
                'email' => $request->email,
                'user_role' => $request->user_role,
                'password' => bcrypt($request->password),
            ]);

            return redirect()->route('CMS.admin.show', [$admin->_id])->withErrors(['success' => ['New admin information has been created successfully']]);
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => [$e->getMessage()]]);
        }
    }

    public function show($id): View
    {
        $admin = Admin::where('_id', $id)->first();
        if ($admin == null) {
            abort('404');
        }
        return view('cms.pages.admin.show', compact('admin'));
    }

    public function edit($id): View
    {
        $admin = Admin::where('_id', $id)->first();
        if ($admin == null) {
            abort('404');
        }
        return view('cms.pages.admin.edit', compact('admin'));
    }

    public function update(Request $request, $id)
    {
        try {
            $admin = Admin::where('_id', $id)->first();
            if ($admin == null) {
                abort('404');
            }
            $validator = Validator::make($request->all(), [
                'name' => 'required|min:5',
                'email' => 'required|email|unique:admins,email,'.$id.',_id',
                'user_role' => 'required|numeric',
                'password' => 'nullable|min:6|confirmed',
            ]);
            if ($validator->fails()) {
                return redirect()->back()->withInput($request->input())->withErrors($validator->errors());
            }

            $imagePath = $admin->avatar;
            if ($request->avatar) {
                $imagePath = MediaServices::upload($request->avatar);
            }

            if (!empty($request->password)) {
                $admin->password = bcrypt($request->password);
            }
            $admin->avatar = $imagePath;
            $admin->name = $request->name;
            $admin->email = $request->email;
            $admin->save();

            return redirect()->route('CMS.admin.show', [$admin->_id])->withErrors(['success' => ['Admin information has been updated successfully']]);
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => [$e->getMessage()]]);
        }
    }

    public function destroy($id)
    {
        try {
            $admin = Admin::where('_id', $id)->first();
            if ($admin == null) {
                abort('404');
            }
            $admin->email = 'deleted-'.$admin->email;
            $admin->save();
            $admin->delete();
            return redirect()->back()->withErrors(['success' => ['Admin has been deleted successfully']]);
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => [$e->getMessage()]]);
        }
    }
}
