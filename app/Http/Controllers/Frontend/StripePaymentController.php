<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Course;
use App\Models\CourseApplicantPayments;
use App\Models\CourseApplicants;
use App\Models\WebsiteConfig;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Auth;

class StripePaymentController extends BaseController
{
    public function __construct()
    {
        $config = WebsiteConfig::where('name', 'STRIPE_SECRET_API_KEY')->first();
        $this->stripe = new \Stripe\StripeClient($config->value);
    }

    public function training_payment(Request $request, $course_id)
    {
        $payment = CourseApplicantPayments::where('course_id', $course_id)->where('user_id', Auth::id())->where('status', 0)->first();
        if ($payment != null) {
            $card_payment_url = route('front.training.payment.process', [$course_id, $payment['_id']]);
            return view("frontend.pages.profile.payment_options", compact('card_payment_url'));
        }
        return redirect()->back();
    }

    public function training_payment_process(Request $request, $course_id, $payment_id)
    {
        $payment = CourseApplicantPayments::where('course_id', $course_id)->where('user_id', Auth::id())->where('status', 0)->where('_id', $payment_id)->first();
        if ($payment != null) {

            $course = Course::where('_id', $payment->course_id)->first();
            $application = CourseApplicants::where('course_id', $course->_id)->where('_id', $payment->application_id)->first();

            $user = Auth::user();
            if (!isset($user->stripe_customer_id)) {
                $stripe_customer = $this->stripe->customers->create([
                    'name' => Auth::user()->name,
                    'email' => Auth::user()->email,
                ]);
                $user->stripe_customer_id = $stripe_customer['id'];
                $user->save();
            }

            $session = [
                'line_items' => [
                    [
                        'price' => $payment['price_id'],
                        'quantity' => 1,
                    ],
                ],
                'customer' => $user->stripe_customer_id,
                'invoice_creation' => ['enabled' => true],
                'mode' => 'payment',
                'success_url' => route('front.training.payment.process.success', [$course_id, $payment_id]),
                'cancel_url' => route('front.training.payment.process.cancel', [$course_id, $payment_id]),
            ];
            if (!empty($course->course_discount) && $application['payment_type'] == 1) {
                $session['discounts'][] = [
                    'coupon' => $course->course_discount,
                ];
            } else {
                $session['allow_promotion_codes'] = true;
            }
            $paymentSession = $this->stripe->checkout->sessions->create($session);
            $payment->payment_session_id = $paymentSession['id'];
            $payment->save();
            return redirect()->to($paymentSession->url);

        }
        return redirect()->back();
    }

    public function training_payment_process_receipt(Request $request, $course_id, $payment_id)
    {
        $payment = CourseApplicantPayments::where('course_id', $course_id)->where('user_id', Auth::id())->where('_id', $payment_id)->first();
        $invoice = $this->stripe->invoices->retrieve($payment['stripe_invoice_id'], []);
        return redirect()->to($invoice->hosted_invoice_url);
    }

    public function training_payment_process_success(Request $request, $course_id, $payment_id)
    {
        $payment = CourseApplicantPayments::where('course_id', $course_id)->where('user_id', Auth::id())->where('_id', $payment_id)->first();
        $session = $this->stripe->checkout->sessions->retrieve($payment->payment_session_id, []);
        $payment->status = 1;
        $payment->error = null;
        $payment->stripe_invoice_id = $session['invoice'];
        $payment->save();
        return redirect()->route('front.training')->withErrors(['success' => ['Your payment process was successfully completed!']]);
    }

    public function training_payment_process_cancel(Request $request, $course_id, $payment_id)
    {
        $payment = CourseApplicantPayments::where('course_id', $course_id)->where('user_id', Auth::id())->where('_id', $payment_id)->first();
        $payment->status = 0;
        $payment->payment_session_id = null;
        $payment->error = 'Your payment process was failed or cancelled or expired!';
        $payment->save();
        return redirect()->route('front.training')->withErrors(['error' => ['Your payment process was failed or cancelled or expired!']]);

    }

    public function createCustomer()
    {

        $customer = $this->stripe->customers->create([
            'name'  => "User Test 1",
            'email' => "user-test-1@email.com",
        ]);

        $paymentIntent = $this->stripe->paymentIntents->create([
            'amount' => 1099,
            'currency' => 'gbp',
            'customer' => $customer->id,
            'payment_method_types' => ['customer_balance'],
            'payment_method_data' => ['type' => 'customer_balance'],
            'payment_method_options' => [
                'customer_balance' => [
                    'funding_type' => 'bank_transfer',
                    'bank_transfer' => ['type' => 'gb_bank_transfer'],
                ],
            ],
            'confirm' => true,
        ]);
        dd($paymentIntent);
    }
}
