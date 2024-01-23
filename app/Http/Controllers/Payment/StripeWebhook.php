<?php

namespace App\Http\Controllers\Payment;

use App\Models\Payment;
use App\Models\WebsiteConfig;
use Illuminate\Http\Request;
use Stripe\Webhook;
use Stripe\Exception\SignatureVerificationException;

class StripeCheckoutWebhook
{
    public function __construct()
    {
        $config = WebsiteConfig::where('name', 'STRIPE_SECRET_API_KEY')->first();
        $this->stripe = new \Stripe\StripeClient($config->value);
    }

    public function paymentEvents(Request $request)
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
            Payment::create([
                'data' => $event->data->object,
                'eventType' => 'checkout.session.completed',
            ]);
        } elseif ($event->type == 'checkout.session.async_payment_succeeded') {
            Payment::create([
                'data' => $event->data->object,
                'eventType' => 'checkout.session.async_payment_succeeded',
            ]);
        } elseif ($event->type == 'checkout.session.async_payment_failed') {
            Payment::create([
                'data' => $event->data->object,
                'eventType' => 'checkout.session.async_payment_failed',
            ]);
        }
        http_response_code(200);
    }

}
