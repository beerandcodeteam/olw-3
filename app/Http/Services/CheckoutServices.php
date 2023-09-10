<?php

namespace App\Http\Services;

use App\Http\Requests\CheckoutStoreRequest;
use Illuminate\Http\Request;
use Illuminate\View\View;
use MercadoPago\Payment;

class CheckoutServices
{
    /**
     * Display the user's profile form.
     */
    public function store(CheckoutStoreRequest $request)
    {
        $payment = new Payment();
        $payment->transaction_amount = $request->transaction_amount;
        $payment->token = $request->token;
        $payment->installments = $request->installments;
        $payment->payment_method_id = $request->payment_method_id;
        $payment->payer = $request->payer;

        return $payment->save();
    }
}
