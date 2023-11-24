<?php

return [
    'default' => env('PAYMENTS_TYPE', 'cash-in-hand'),

    'types' => [
        'cash-in-hand' => [
            'driver' => 'offline',
            'authorized' => 'payment-offline',
        ],
        'card' => [
            'driver' => 'paypal',
            'released' => 'payment-received',
        ],
    ],
];
