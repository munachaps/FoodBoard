<?php

namespace App\Services;

use Stripe\Stripe;
use Stripe\Charge;

class StripeService
{
    public function __construct()
    {
        Stripe::setApiKey(config('services.stripe.secret'));
    }

    public function createCharge(array $data)
    {
        return Charge::create($data);
    }
}
