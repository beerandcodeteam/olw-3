<?php

return [
    'mercadopago' => [
        'public_key' => env('VITE_MERCADO_PAGO_PUBLIC_KEY'),
        'access_token' => env('MERCADO_PAGO_ACCESS_TOKEN'),
        'buyer_email' => env('MERCADO_PAGO_BUYER_EMAIL')
    ]
];