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

    public function register()
    {
        return view("frontend.pages.auth.register");
    }

    public function forgot()
    {
        return view("frontend.pages.auth.forgot");
    }

    public function reset()
    {
        return view("frontend.pages.auth.reset");
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

    public function registerAction(Request $request)
    {
        try {
            $validator = Validator::make($request->all(), [
                'first_name' => 'required|min:3',
                'last_name' => 'required|min:3',
                'email' => 'required|email|unique:users,email',
                'password' => 'required|min:6|confirmed'
            ]);
            if ($validator->fails()) {
                return redirect()->back()->withInput($request->all())->withErrors($validator->errors());
            }

            $name = $request->first_name . ' ' . $request->last_name;
            $imagePath = MediaServices::uploadDummy($name);
            User::create([
                'avatar' => $imagePath,
                'first_name' => $request->first_name,
                'last_name' => $request->last_name,
                'name' => $name,
                'email' => $request->email,
                'password' => bcrypt($request->password),
                'phone' => null,
                'country' => null,
                'gender' => null,
                'bio' => null
            ]);
            return redirect()->route('front.login')->withErrors(['success' => ['Your account has been successfully created! Please login now.']]);

        } catch (\Exception $e) {
            return redirect()->back()->withInput($request->all())->withErrors(['error' => $e->getMessage()]);
        }
    }

    public function forgotAction(Request $request)
    {
        try {
            $validator = Validator::make($request->all(), [
                'email' => 'required|email|exists:users,email'
            ]);
            if ($validator->fails()) {
                return redirect()->back()->withInput($request->all())->withErrors($validator->errors());
            }

            $learner = User::where('email', $request->email)->first();
            $learner->reset_code = rand(100000, 999999);
            $learner->save();

            Mail::send('emails.user_forgot', ['learner' => $learner], function ($message) use ($learner) {
                $message->to($learner->email, $learner->name)->subject(env('MAIL_FROM_NAME') . ': Reset Password');
                $message->from(env('MAIL_FROM_ADDRESS'), env('MAIL_FROM_NAME'));
            });

            return redirect()->route('front.reset')->withErrors(['success' => ['A six digit password reset code has been sent your email.']]);

        } catch (\Exception $e) {
            return redirect()->back()->withInput($request->all())->withErrors(['error' => $e->getMessage()]);
        }
    }

    public function resetAction(Request $request)
    {
        try {
            $validator = Validator::make($request->all(), [
                'code' => 'required|numeric',
                'password' => 'required|min:6|confirmed',
            ]);
            if ($validator->fails()) {
                return redirect()->back()->withInput($request->all())->withErrors($validator->errors());
            }

            $learner = User::where('reset_code', (int)$request->code)->first();
            if ($learner == null) {
                return redirect()->back()->withInput($request->all())->withErrors(['error' => ['Invalid password reset code!']]);
            }
            $learner->reset_code = null;
            $learner->password = bcrypt($request->password);
            $learner->save();

            Mail::send('emails.user_reset_pass_success', ['learner' => $learner], function ($message) use ($learner) {
                $message->to($learner->email, $learner->name)->subject(env('MAIL_FROM_NAME') . ': Successfully Reset Password');
                $message->from(env('MAIL_FROM_ADDRESS'), env('MAIL_FROM_NAME'));
            });

            return redirect()->route('front.login')->withErrors(['success' => ['Password has been updated successfully.']]);

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
