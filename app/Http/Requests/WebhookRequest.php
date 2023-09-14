<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class WebhookRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return $this->user_id == config('payment.mercadopago.user_id')
            && $this->application_id == config('payment.mercadopago.application_id');
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'action' => 'required',
            'user_id' => 'required',
            'application_id' => 'required',
            'data.id' => 'required',
        ];
    }
}
