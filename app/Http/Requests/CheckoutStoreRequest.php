<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CheckoutStoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            "transaction_amount" => "required|numeric|",
            "token"              => "required|string|size:123",
            "installments"       => "required|numeric",
            "payment_method_id"  => "required|in_array:",
            "payer"              => "required|email",
        ];
    }
}
