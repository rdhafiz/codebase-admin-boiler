<?php

namespace App\Http\Controllers\Frontend;

use App\Models\CourseApplicants;
use App\Models\User;
use App\Models\WebsiteConfig;
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
        $config = WebsiteConfig::where('name', 'STRIPE_SECRET_API_KEY')->first();
        $this->stripe = new \Stripe\StripeClient($config->value);
    }
    public function profile()
    {
        $trainings = CourseApplicants::with(['course_details', 'type', 'schedule', 'payment_instalment_details'])->where('user_id', Auth::id())->orderBy('created_at', 'desc')->take(5)->get()->toArray();
        return view("frontend.pages.profile.profile", compact('trainings'));
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
        foreach ($trainings as &$training){
            $training['course_details']['course_price'] = $this->stripe->prices->retrieve($training['course_details']['course_fee'], []);
            $training['payment_status'] = 0;
            $training['payment_status_value'] = array_column($training['payment_instalment_details'], 'status');
            $training['payment_status_value'] = join(',', array_unique($training['payment_status_value']));
            if($training['payment_status_value'] == 1){
                $training['payment_status'] = 1;
            } elseif ($training['payment_status_value'] == 0){
                $training['payment_status'] = 0;
            } else {
                $training['payment_status'] = 2;
            }
        }
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
