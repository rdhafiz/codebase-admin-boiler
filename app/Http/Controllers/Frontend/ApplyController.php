<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Course;
use App\Models\CourseApplicantPayments;
use App\Models\CourseApplicants;
use App\Models\CourseInstallments;
use App\Models\CourseType;
use App\Models\User;
use App\Services\MediaServices;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class ApplyController extends BaseController
{
    public function index()
    {
        $courses = Course::with(['course_schedules'])->orderBy('course_title', 'asc')->get();
        $course_types = CourseType::orderBy('name', 'asc')->get();
        return view("frontend.pages.apply.form", compact('courses', 'course_types'));
    }

    public function apply(Request $request)
    {
        try {
            $validator = Validator::make($request->all(), [
                'course_id' => 'required',
                'payment_type' => 'required',
                'course_type' => 'required',
                'first_name' => 'required|min:3',
                'last_name' => 'required|min:3',
                'email' => 'required|email',
                'country' => 'required',
                'have_taken_osce' => 'required',
                'cbt_pass_date' => 'required|date',
                'ielts_score' => 'nullable|numeric',
                'agree_to_terms' => 'required',
            ]);
            if ($validator->fails()) {
                return redirect()->back()->withInput($request->all())->withErrors($validator->errors());
            }

            $course = Course::with('course_fee_price')->where('_id', $request->course_id)->first();

            $learner = User::where('email', $request->email)->first();
            if ($learner == null) {
                $password = uniqid();
                $name = $request->first_name . ' ' . $request->last_name;
                $imagePath = MediaServices::uploadDummy($name);
                $learner = User::create([
                    'avatar' => $imagePath,
                    'first_name' => $request->first_name,
                    'last_name' => $request->last_name,
                    'name' => $name,
                    'email' => $request->email,
                    'password' => bcrypt($password),
                    'phone' => $request->phone ?? null,
                    'country' => $request->country ?? null,
                    'gender' => null,
                    'bio' => null
                ]);

                if ($learner != null) {
                    Mail::send('emails.registration', ['learner' => $learner, 'password' => $password], function ($message) use ($learner) {
                        $message->to($learner->email, $learner->name)->subject(env('MAIL_FROM_NAME') . ': New Registration');
                        $message->from(env('MAIL_FROM_ADDRESS'), env('MAIL_FROM_NAME'));
                    });
                }

            }

            $check = CourseApplicants::where('user_id', $learner->_id)->where('course_id', $request->course_id)->first();
            if ($check != null) {
                return redirect()->back()->withErrors(['error' => ['You have already submitted application for this training.']]);
            }
            $application = CourseApplicants::create([
                'user_id' => $learner->_id,
                'course_id' => $request->course_id,
                'payment_type' => $request->payment_type,
                'course_type' => $request->course_type,
                'schedule_id' => $request->schedule_id,
                'have_taken_osce' => $request->have_taken_osce,
                'cbt_pass_date' => $request->cbt_pass_date,
                'ielts_score' => $request->ielts_score ?? null,
                'street' => $request->street ?? null,
                'post_code' => $request->post_code ?? null,
                'city' => $request->city ?? null,
                'country' => $request->country ?? null,
                'country_trained' => $request->country_trained ?? null,
                'agree_to_terms' => $request->agree_to_terms
            ]);

            if ($application) {
                if ($application->payment_type == 1) {
                    CourseApplicantPayments::create([
                        'user_id' => $learner->_id,
                        'course_id' => $request->course_id,
                        'application_id' => $application->_id,
                        'payment_code' => $course->course_fee_price->name,
                        'payment_amount' => $course->course_fee_price->price,
                        'status' => 0,
                        'response' => null,
                        'error' => null
                    ]);
                } else {
                    $courseInstallments = CourseInstallments::with('price')->where('course_id', $request->course_id)->get()->toArray();
                    foreach ($courseInstallments as $courseInstallment) {
                        CourseApplicantPayments::create([
                            'user_id' => $learner->_id,
                            'course_id' => $request->course_id,
                            'application_id' => $application->_id,
                            'payment_code' => $courseInstallment['price']['name'],
                            'payment_amount' => $courseInstallment['price']['price'],
                            'status' => 0,
                            'response' => null,
                            'error' => null
                        ]);
                    }
                }
            }

            Mail::send('emails.apply-success', ['learner' => $learner, 'application' => $application], function ($message) use ($learner) {
                $message->to($learner->email, $learner->name)->subject(env('MAIL_FROM_NAME') . ': New Application Submitted');
                $message->from(env('MAIL_FROM_ADDRESS'), env('MAIL_FROM_NAME'));
            });
            Mail::send('emails.apply-new', ['learner' => $learner, 'application' => $application], function ($message) use ($learner) {
                $message->to(env('MAIL_TO_ADDRESS'))->subject(env('MAIL_FROM_NAME') . ': New Application Submitted');
                $message->from(env('MAIL_FROM_ADDRESS'), env('MAIL_FROM_NAME'));
            });

            return redirect()->back()->withErrors(['success' => ['Application has been submitted successfully. Now we are redirecting you to payment page.']]);
        } catch (\Exception $e) {
            return redirect()->back()->withInput($request->all())->withErrors(['error' => $e->getMessage()]);
        }
    }
}
