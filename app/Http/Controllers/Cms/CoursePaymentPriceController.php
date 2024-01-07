<?php

namespace App\Http\Controllers\Cms;

use App\Http\Controllers\Controller;
use App\Models\CoursePrice;
use App\Models\WebsiteConfig;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\View\View;

class CoursePaymentPriceController extends Controller
{
    public function __construct()
    {
        $config = WebsiteConfig::where('name', 'STRIPE_SECRET_API_KEY')->first();
        $this->stripe = new \Stripe\StripeClient($config->value);
    }
    public function index(): View
    {
        $products = $this->stripe->products->all(['limit' => 100]);
        return view('cms.pages.course.payment.index', compact('products'));
    }

    public function create(): View
    {
        return view('cms.pages.course.payment.create');
    }

    public function store(Request $request)
    {
        try {
            $validator = Validator::make($request->all(), [
                'name' => 'required|min:3',
                'description' => 'required|string',
            ]);
            if ($validator->fails()) {
                return redirect()->back()->withInput($request->input())->withErrors($validator->errors());
            }

            $this->stripe->products->create([
                'name' => $request->name,
                'description' => $request->description
            ]);
            return redirect()->route('CMS.course.payment.index')->withErrors(['success' => ['New price has been created successfully']]);
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => [$e->getMessage()]]);
        }
    }

    public function show($id): View
    {
        $product = $this->stripe->products->retrieve($id, []);
        if ($product == null) {
            abort('404');
        }
        return view('cms.pages.course.payment.show', compact('product'));
    }

    public function edit($id): View
    {
        $product = $this->stripe->products->retrieve($id, []);
        if ($product == null) {
            abort('404');
        }
        return view('cms.pages.course.payment.edit', compact('product'));
    }

    public function update(Request $request, $id)
    {
        try {
            $validator = Validator::make($request->all(), [
                'name' => 'required|min:3',
                'description' => 'required|string',
            ]);
            if ($validator->fails()) {
                return redirect()->back()->withInput($request->input())->withErrors($validator->errors());
            }

            $this->stripe->products->update($id,
                [
                    'name' => $request->name,
                    'description' => $request->description
                ]
            );

            return redirect()->route('CMS.course.payment.index')->withErrors(['success' => ['Course price has been updated successfully']]);
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => [$e->getMessage()]]);
        }
    }
    public function destroy($id)
    {
        try {
            $this->stripe->products->delete($id, []);
            return redirect()->back()->withErrors(['success' => ['Course price has been deleted successfully']]);
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => [$e->getMessage()]]);
        }
    }
}
