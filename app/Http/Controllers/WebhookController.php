<?php

namespace App\Http\Controllers;

use App\Http\Requests\WebhookRequest;
use App\Services\PaymentService;
use Illuminate\Http\Request;

class WebhookController extends Controller
{

    public function __construct(public PaymentService $paymentService)
    {
    }

    public function index(WebhookRequest $request)
    {
        $this->paymentService->update($request->data['id']);
    }
}
