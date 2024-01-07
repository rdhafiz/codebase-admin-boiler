<?php

namespace App\Http\Controllers\Cms;

use App\Http\Controllers\Controller;
use App\Models\CoursePrice;
use App\Models\WebsiteConfig;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\View\View;
use Stripe\Exception\ApiErrorException;

class CourseDiscountController extends Controller
{
    public function __construct()
    {
        $config = WebsiteConfig::where('name', 'STRIPE_SECRET_API_KEY')->first();
        $this->stripe = new \Stripe\StripeClient($config->value);
    }

    public function index(): View
    {
        $discounts = $this->stripe->coupons->all();
        foreach ($discounts as &$discount){
            $discount['amount_off'] = $discount['amount_off'] / 100;
        }
        return view('cms.pages.course.discount.index', compact('discounts'));
    }

    public function create(): View
    {
        return view('cms.pages.course.discount.create');
    }

    public function store(Request $request)
    {
        try {

            $validator = Validator::make($request->all(), [
                'name' => 'required|string',
                'currency' => 'required|string',
                'amount_off' => 'required|numeric',
            ]);
            if ($validator->fails()) {
                return redirect()->back()->withInput($request->input())->withErrors($validator->errors());
            }

            $this->stripe->coupons->create([
                'name' => $request->name,
                'currency' => $request->currency,
                'amount_off' => $request->amount_off * 100
            ]);

            return redirect()->route('CMS.course.discount.index')->withErrors(['success' => ['New discount has been created successfully']]);
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => [$e->getMessage()]]);
        }
    }

    public function show($id)
    {
        abort(404);
    }

    public function edit($id): View
    {
        abort(404);
    }

    public function update(Request $request, $id)
    {
        abort(404);
    }

    public function destroy($id)
    {
        try {

            $this->stripe->coupons->delete($id, []);
            return redirect()->back()->withErrors(['success' => ['Course discount has been deleted successfully']]);
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => [$e->getMessage()]]);
        }
    }
}
