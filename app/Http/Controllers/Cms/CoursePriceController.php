<?php

namespace App\Http\Controllers\Cms;

use App\Http\Controllers\Controller;
use App\Models\CoursePrice;
use App\Models\WebsiteConfig;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\View\View;
use Stripe\Exception\ApiErrorException;

class CoursePriceController extends Controller
{
    public function __construct()
    {
        $config = WebsiteConfig::where('name', 'STRIPE_SECRET_API_KEY')->first();
        $this->stripe = new \Stripe\StripeClient($config->value);
    }

    public function index(): View
    {
        $prices = $this->stripe->prices->all(['limit' => 100]);
        foreach ($prices as &$price) {
            $price['unit_amount_format'] = ($price['unit_amount'] / 100);
            $price['product_info'] = $this->stripe->products->retrieve($price['product'], []);
        }
        return view('cms.pages.course.price.index', compact('prices'));
    }

    public function create(): View
    {
        $products = $this->stripe->products->all(['limit' => 100]);
        return view('cms.pages.course.price.create', compact('products'));
    }

    public function store(Request $request)
    {
        try {

            $validator = Validator::make($request->all(), [
                'product' => 'required|string',
                'unit_amount' => 'required|numeric',
            ]);
            if ($validator->fails()) {
                return redirect()->back()->withInput($request->input())->withErrors($validator->errors());
            }

            $this->stripe->prices->create([
                'currency' => 'gbp',
                'unit_amount' => $request->unit_amount * 100,
                'product' => $request->product,
            ]);

            return redirect()->route('CMS.course.price.index')->withErrors(['success' => ['New price has been created successfully']]);
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
            $this->stripe->prices->update(
                $id,
                ['active' => false]
            );
            return redirect()->back()->withErrors(['success' => ['Course price has been deleted successfully']]);
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => [$e->getMessage()]]);
        }
    }
}
