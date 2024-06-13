<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Services\StripeService;

class PaymentController extends Controller
{
    protected $stripeService;

    public function __construct(StripeService $stripeService)
    {
        $this->stripeService = $stripeService;
    }

    public function checkout(){
       return view('pay-with-card-online.payment');
    }

    public function charge(Request $request)
    {
        $validatedData = $request->validate([
            'amount' => 'required|numeric',
            'currency' => 'required|string',
            'source' => 'required|string', // e.g., the token or payment method ID
        ]);

        try {
            $charge = $this->stripeService->createCharge([
                'amount' => $validatedData['amount'],
                'currency' => $validatedData['currency'],
                'source' => $validatedData['source'],
                'description' => 'Payment description',
            ]);

            return response()->json(['success' => true, 'charge' => $charge], 200);
        } catch (\Exception $e) {
            return response()->json(['success' => false, 'error' => $e->getMessage()], 500);
        }
    }
}
