<?php

namespace App\Http\Controllers\Payment;

use App\Models\Payment;
use App\Models\WebsiteConfig;
use Illuminate\Http\Request;
use Stripe\Webhook;
use Stripe\Exception\SignatureVerificationException;

class StripeWebhook
{
    private string $endpointSecret;
    private $stripe;

    public function __construct()
    {
        $this->endpointSecret = env('STRIPE_SECRET_ENDPOINT');
        $config = WebsiteConfig::where('name', 'STRIPE_SECRET_API_KEY')->first();
        $this->stripe = new \Stripe\StripeClient($config->value);
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
        if (env('APP_ENV') === 'local')
            http_response_code(200);

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
            exit();
        }
        catch (SignatureVerificationException $e) {
            // Invalid signature
            http_response_code(400);
            exit();
        }

        // Handle the checkout.session.completed event
        if ($event->type == 'checkout.session.completed') {
            StripeWebhook::create([
                'data' => $event->data->object,
                'type' => 'checkout.session.completed'
            ]);
        } elseif ($event->type == 'checkout.session.async_payment_succeeded') {
            StripeWebhook::create([
                'data' => $event->data->object,
                'type' => 'checkout.session.async_payment_succeeded'
            ]);
        } elseif ($event->type == 'checkout.session.async_payment_failed') {
            StripeWebhook::create([
                'data' => $event->data->object,
                'type' => 'checkout.session.async_payment_failed'
            ]);
        } else if ($event->type === 'payment_intent.partially_funded') {
            StripeWebhook::create([
                'data' => $event->data->object,
                'type' => 'payment_intent.partially_funde'
            ]);
        } else if ($event->type === 'payment_intent.payment_failed') {
            StripeWebhook::create([
                'data' => $event->data->object,
                'type' => 'payment_intent.payment_failed'
            ]);
        } else if ($event->type === 'payment_intent.processing') {
            StripeWebhook::create([
                'data' => $event->data->object,
                'type' => 'payment_intent.processing'
            ]);
        } else if ($event->type === 'payment_intent.succeeded') {
            StripeWebhook::create([
                'data' => $event->data->object,
                'type' => 'payment_intent.succeeded'
            ]);
        } else {
            StripeWebhook::create([
                'data' => $event->data->object,
                'type' => $event->type
            ]);
        }

        http_response_code(200);
    }

}
