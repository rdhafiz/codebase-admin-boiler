<?php

namespace App\Http\Controllers\Cms;

use App\Models\Admin;
use App\Services\MediaServices;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class ProfileController extends BaseController
{
    public function __construct()
    {
    }

    public function profile()
    {
        return view('cms.pages.profile.index');
    }

    public function profileUpdate()
    {
        return view('cms.pages.profile.update');
    }

    public function profileUpdatePassword()
    {
        return view('cms.pages.profile.update-password');
    }

    public function profileUpdateAction(Request $request)
    {
        try {
            $id = Auth::guard('admin')->id();
            $admin = Admin::where('_id', $id)->first();
            if ($admin == null) {
                abort('404');
            }
            $validator = Validator::make($request->all(), [
                'name' => 'required|min:5',
                'email' => 'required|email|unique:admin,email,' . $id . ',_id',
            ]);
            if ($validator->fails()) {
                return redirect()->back()->withInput($request->input())->withErrors($validator->errors());
            }

            $imagePath = $admin->avatar;
            if ($request->avatar) {
                $imagePath = MediaServices::upload($request->avatar);
            }

            $admin->avatar = $imagePath;
            $admin->name = $request->name;
            $admin->email = $request->email;
            $admin->save();

            return redirect()->route('CMS.profile')->withErrors(['success' => ['profile has been updated successfully']]);
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => [$e->getMessage()]]);
        }
    }

    public function profileUpdatePasswordAction(Request $request)
    {
        try {
            $id = Auth::guard('admin')->id();
            $admin = Admin::where('_id', $id)->first();
            if ($admin == null) {
                abort('404');
            }
            $validator = Validator::make($request->all(), [
                'current_password' => 'required|min:6',
                'password' => 'required|confirmed|min:6'
            ]);
            if ($validator->fails()) {
                return redirect()->back()->withInput($request->input())->withErrors($validator->errors());
            }

            if (Hash::check($request->current_password, Auth::guard('admin')->user()->password)) {
                $admin->password = bcrypt($request->password);
                $admin->save();
            } else {
                return redirect()->back()->withErrors(['current_password' => ['Current password is not correct!']]);
            }

            return redirect()->route('CMS.profile')->withErrors(['success' => ['Password has been updated successfully']]);

        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => [$e->getMessage()]]);
        }
    }
}
