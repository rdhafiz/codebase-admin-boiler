<?php

namespace App\Http\Controllers\Rcp;

use App\Models\Recruiters;
use App\Services\MediaServices;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class ProfileController extends BaseController
{
    public function __construct()
    {
    }

    public function profile()
    {
        return view('rcp.pages.profile.index');
    }

    public function profileUpdate()
    {
        return view('rcp.pages.profile.update');
    }

    public function profileUpdatePassword()
    {
        return view('rcp.pages.profile.update-password');
    }

    public function profileUpdateAction(Request $request)
    {
        try {
            $id = Auth::guard('rcp')->id();
            $recruiter = Recruiters::where('_id', $id)->first();
            if ($recruiter == null) {
                abort('404');
            }
            $validator = Validator::make($request->all(), [
                'name' => 'required|min:5',
                'email' => 'required|email|unique:admin,email,' . $id . ',_id',
                'address' => 'required',
                'city' => 'required',
                'post_code' => 'required',
                'country' => 'required',
            ]);
            if ($validator->fails()) {
                return redirect()->back()->withInput($request->input())->withErrors($validator->errors());
            }

            $imagePath = $recruiter->avatar;
            if ($request->avatar) {
                $imagePath = MediaServices::upload($request->avatar);
            }

            $recruiter->avatar = $imagePath;
            $recruiter->name = $request->name;
            $recruiter->email = $request->email;
            $recruiter->address = $request->address;
            $recruiter->city = $request->city;
            $recruiter->post_code = $request->post_code;
            $recruiter->country = $request->country;
            $recruiter->save();

            return redirect()->route('RCP.profile')->withErrors(['success' => ['profile has been updated successfully']]);
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => [$e->getMessage()]]);
        }
    }

    public function profileUpdatePasswordAction(Request $request)
    {
        try {
            $id = Auth::guard('rcp')->id();
            $recruiter = Recruiters::where('_id', $id)->first();
            if ($recruiter == null) {
                abort('404');
            }
            $validator = Validator::make($request->all(), [
                'current_password' => 'required|min:6',
                'password' => 'required|confirmed|min:6'
            ]);
            if ($validator->fails()) {
                return redirect()->back()->withInput($request->input())->withErrors($validator->errors());
            }

            if (Hash::check($request->current_password, Auth::guard('rcp')->user()->password)) {
                $recruiter->password = bcrypt($request->password);
                $recruiter->save();
            } else {
                return redirect()->back()->withErrors(['current_password' => ['Current password is not correct!']]);
            }

            return redirect()->route('RCP.profile')->withErrors(['success' => ['Password has been updated successfully']]);

        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => [$e->getMessage()]]);
        }
    }
}
