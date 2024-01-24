<?php

namespace App\Http\Controllers\Payment;

use App\Models\WebsiteConfig;
use Illuminate\Http\Request;
use Stripe\Webhook;
use Stripe\Exception\SignatureVerificationException;
use Stripe\StripeClient;
use App\Models\WebhookData;

class StripeWebhook
{
    private string $endpointSecret;
    private $stripe;

    public function __construct()
    {
        $this->endpointSecret = env('STRIPE_SECRET_ENDPOINT');
        $config = WebsiteConfig::where('name', 'STRIPE_SECRET_API_KEY')->first();
        $this->stripe = new StripeClient($config->value);
    }

    public function getPriceDetails(string $priceId)
    {
        $priceDetails = $this->stripe->prices->retrieve($priceId, []);
        dd($priceDetails);
    }

    public function getCustomerDetails(string $customerId)
    {
        $customerDetails = $this->stripe->customers->retrieve($customerId, []);
        dd($customerDetails);
    }

    public function getProductDetails(string $productId)
    {
        $productDetails = $this->stripe->products->retrieve($productId, []);
        dd($productDetails);
    }

    public function getCoupons(string $coupon = null)
    {
        if ($coupon !== null) {
            $data = $this->stripe->coupons->retrieve($coupon, []);
        } else {
            $data = $this->stripe->coupons->all();
        }
        dd($data);
    }

    public function simulateBankTransfer()
    {
        $this->stripe->testHelpers->customers->fundCashBalance(
            env('STRIPE_TEST_CUSTOMER'), //test mode customer id
            [
                'amount' => env('STRIPE_TEST_AMOUNT'),
                'currency' => env('STRIPE_TEST_CURRENCY'),
                'reference' => env('STRIPE_TEST_BANK_REFERENCE'),
            ]
        );
    }

    public function trackEvents(Request $request)
    {

        $sigHeader = $request->server('HTTP_STRIPE_SIGNATURE');
        $payload   = @file_get_contents('php://input');
        $event     = null;

        try {
            $event = Webhook::constructEvent(
                $payload, $sigHeader, $this->endpointSecret
            );
        }
        catch (\UnexpectedValueException $e) {
            // Invalid payload
            http_response_code(400);
            exit($e->getMessage());
        }
        catch (SignatureVerificationException $e) {
            // Invalid signature
            http_response_code(400);
            exit($e->getMessage());
        }

        // Handle the checkout.session.completed event
        if ($event->type == 'checkout.session.completed') {
            WebhookData::create([
                'data' => $event->data->object,
                'type' => 'checkout.session.completed'
            ]);
        } elseif ($event->type == 'checkout.session.async_payment_succeeded') {
            WebhookData::create([
                'data' => $event->data->object,
                'type' => 'checkout.session.async_payment_succeeded'
            ]);
        } elseif ($event->type == 'checkout.session.async_payment_failed') {
            WebhookData::create([
                'data' => $event->data->object,
                'type' => 'checkout.session.async_payment_failed'
            ]);
        } else if ($event->type === 'payment_intent.partially_funded') {
            WebhookData::create([
                'data' => $event->data->object,
                'type' => 'payment_intent.partially_funded'
            ]);
        } else if ($event->type === 'payment_intent.payment_failed') {
            WebhookData::create([
                'data' => $event->data->object,
                'type' => 'payment_intent.payment_failed'
            ]);
        } else if ($event->type === 'payment_intent.processing') {
            WebhookData::create([
                'data' => $event->data->object,
                'type' => 'payment_intent.processing'
            ]);
        } else if ($event->type === 'payment_intent.succeeded') {
            WebhookData::create([
                'data' => $event->data->object,
                'type' => 'payment_intent.succeeded'
            ]);
        } else {
            //do something
            /*WebhookData::create([
                'data' => $event->data->object,
                'type' => $event->type
            ]);*/
        }

        http_response_code(200);
    }

}
