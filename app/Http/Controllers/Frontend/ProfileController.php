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
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class ProfileController extends BaseController
{
    public function profile()
    {
        return view("frontend.pages.profile.profile");
    }

    public function profileUpdate()
    {
        return view("frontend.pages.profile.profile-update");
    }

    public function profileUpdatePassword()
    {
        return view("frontend.pages.profile.profile-update-password");
    }

    public function training()
    {
        $trainings = CourseApplicants::with(['course_details', 'type', 'schedule', 'payment_instalment_details'])->where('user_id', Auth::id())->get()->toArray();
        return view("frontend.pages.profile.training", compact('trainings'));
    }

    public function profileUpdateAction(Request $request)
    {
        try {
            $validator = Validator::make($request->all(), [
                'first_name' => 'required|min:3',
                'last_name' => 'required|min:3',
                'country' => 'required',
                'gender' => 'required',
            ]);
            if ($validator->fails()) {
                return redirect()->back()->withInput($request->all())->withErrors($validator->errors());
            }

            $learner = User::where('_id', Auth::id())->first();
            $name = $request->first_name . ' ' . $request->last_name;

            $imagePath = $learner->avatar;
            if (!empty($request->avatar)) {
                $imagePath = MediaServices::upload($request->avatar);
            } elseif (empty($learner->avatar)) {
                $imagePath = MediaServices::uploadDummy($name);
            }

            $learner->avatar = $imagePath;
            $learner->first_name = $request->first_name;
            $learner->last_name = $request->last_name;
            $learner->name = $name;
            $learner->country = $request->country;
            $learner->gender = $request->gender;
            $learner->phone = $request->phone ?? null;
            $learner->bio = $request->bio ?? null;
            $learner->save();

            return redirect()->route('front.profile')->withErrors(['success' => ['Profile information has been update successfully.']]);

        } catch (\Exception $e) {
            return redirect()->back()->withInput($request->all())->withErrors(['error' => $e->getMessage()]);
        }
    }

    public function profileUpdatePasswordAction(Request $request)
    {
        try {
            $validator = Validator::make($request->all(), [
                'current_password' => 'required|min:6',
                'password' => 'required|min:6|confirmed',
            ]);
            if ($validator->fails()) {
                return redirect()->back()->withInput($request->all())->withErrors($validator->errors());
            }

            $learner = User::where('_id', Auth::id())->first();
            if (!Hash::check($request->current_password, $learner->password)) {
                return redirect()->back()->withErrors(['current_password' => ['Current password is not correct!']]);
            }


            $learner->password = bcrypt($request->password);
            $learner->save();

            return redirect()->route('front.profile')->withErrors(['success' => ['Password has been update successfully.']]);

        } catch (\Exception $e) {
            return redirect()->back()->withInput($request->all())->withErrors(['error' => $e->getMessage()]);
        }
    }
}
