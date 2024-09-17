<?php

// app/Http/Controllers/PaymentController.php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Stripe\Stripe;
use Stripe\Charge;
use Stripe\Exception\ApiErrorException;

class PaymentController extends Controller
{
    public function showPaymentForm()
    {
        return view('payment');
    }

    public function create(Request $request)
    {
        // Validate input
        $request->validate([
            'amount' => 'required|numeric',
            'currency' => 'required|string',
            'source' => 'required|string', // This is the Stripe token for the payment method
        ]);

        // Set Stripe API key
        Stripe::setApiKey(config('services.stripe.secret'));

        try {
            // Create a charge
            $charge = Charge::create([
                'amount' => $request->amount * 100, // Amount in cents
                'currency' => $request->currency,
                'source' => $request->source,
                'description' => 'Payment Description', // Customize as needed
            ]);

            return response()->json(['message' => 'Payment successful', 'charge' => $charge]);
        } catch (ApiErrorException $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }
}
