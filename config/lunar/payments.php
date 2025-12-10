<?php

return [

    'default' => env('PAYMENTS_TYPE', 'cash-in-hand'),

    'types' => [
        'cash-on-delivery' => [
            'driver' => 'offline',
            'authorized' => 'payment-offline',
        ],
        'direct-debit' => [
            'driver' => 'offline',
            'authorized' => 'payment-offline',
        ],
        'transfer' => [
            'driver' => 'offline',
            'authorized' => 'payment-offline',
        ],
        'credit' => [
            'driver' => 'offline',
            'authorized' => 'payment-offline',
        ],
        'card' => [
            'driver' => 'redsys',
            'authorized' => 'payment-received',
        ],
        'bizum' => [
            'driver' => 'redsys',
            'authorized' => 'payment-received',
        ],
        'paypal' => [
            'driver' => 'paypal',
            'authorized' => 'payment-received',
        ],
    ],

];
