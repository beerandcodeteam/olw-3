<?php

namespace App\Exceptions;

use Exception;
use Illuminate\Http\Response;

class PaymentException extends Exception
{
    protected $message = "Verifique os dados do cartão de crédito e tente novamente.";
    protected $code = Response::HTTP_BAD_REQUEST;

    public function render() {
        return response()->json([
            'error' => $this->message
        ], $this->code);
    }
}
