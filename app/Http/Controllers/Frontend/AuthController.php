<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Course;
use App\Models\CourseApplicants;
use App\Models\CourseCategories;
use App\Models\CourseType;
use App\Models\User;
use App\Services\MediaServices;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class AuthController extends BaseController
{
    public function login()
    {
        return view("frontend.pages.auth.login");
    }

    public function loginAction(Request $request)
    {
        try {
            $validator = Validator::make($request->all(), [
                'email' => 'required|email|exists:users,email',
                'password' => 'required|min:6'
            ]);
            if ($validator->fails()) {
                return redirect()->back()->withInput($request->all())->withErrors($validator->errors());
            }

            $credentials = [
                'email' => $request->email,
                'password' => $request->password
            ];
            $remember = $request->remember == 1 ? true : false;
            if (Auth::attempt($credentials, $remember)) {
                return redirect()->back()->withErrors(['success' => ['Login Successful']]);
            } else {
                return redirect()->back()->withInput($request->all())->withErrors(['error' => ['Invalid Credentials! Please try again.']]);
            }

        } catch (\Exception $e) {
            return redirect()->back()->withInput($request->all())->withErrors(['error' => $e->getMessage()]);
        }
    }

    public function logout(Request $request)
    {
        try {

            Auth::logout();
            return redirect()->back()->withErrors(['success' => ['Logout Successful']]);

        } catch (\Exception $e) {
            return redirect()->back()->withInput($request->all())->withErrors(['error' => $e->getMessage()]);
        }
    }
}
