<?php

namespace App\Services;

use App\Enums\OrderStatusEnum;
use App\Enums\PaymentMethodEnum;
use App\Enums\PaymentStatusEnum;
use App\Mail\PaymentApprovedMail;
use App\Models\Order;
use App\Models\Payment;
use Illuminate\Support\Facades\Mail;
use MercadoPago\Payment as MPayment;
use Illuminate\Support\Str;
use MercadoPago\SDK;

class PaymentService
{
    public function __construct()
    {
        SDK::setAccessToken(config('payment.mercadopago.access_token'));
    }

    public function update($external_id): void
    {
        $mp_payment = MPayment::find_by_id($external_id);
        $payment = Payment::with('order.user')->where('external_id', $external_id)->firstOrFail();

        $payment->status = PaymentStatusEnum::parse($mp_payment->status);
        $payment->save();

        if ($payment->status === PaymentStatusEnum::PAID) {
            $payment->approved_at = $mp_payment->date_approved;
            $payment->order->status = OrderStatusEnum::PAID;
            $payment->order->save();

            Mail::to($payment->order->user->email)->queue(new PaymentApprovedMail($payment->order));
        }

        if ($payment->status === PaymentStatusEnum::CANCELLED || $payment->status === PaymentStatusEnum::REJECTED)
        {
            $payment->order->status = OrderStatusEnum::parse($mp_payment->status);
            $payment->order->save();
        }
    }
}