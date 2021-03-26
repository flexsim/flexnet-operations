<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Default FlexNet Operations Connection Name
    |--------------------------------------------------------------------------
    |
    | Here you may specify which of the FlexNet Operations connections below you
    | wish to use as your default connection for all flexnet work. Of course
    | you may use many connections at once using the flexnet operaations library.
    |
    */
    'default' => env('FLEXNET_OPERATIONS_CONNECTION', 'flexnet'),

    /*
    |--------------------------------------------------------------------------
    | FlexNet Operations Connections
    |--------------------------------------------------------------------------
    |
    | Here are each of the database connections setup for your application.
    | Of course, examples of configuring each database platform that is
    | supported by Laravel is shown below to make development simple.
    |
    |
    | All database work in Laravel is done through the PHP PDO facilities
    | so make sure you have the driver for your particular database of
    | choice installed on your machine before you begin development.
    |
    */

    'connections' => [
        'flexnet' => [
            'user' => env('FLEXNET_OPERATIONS_USER'),
            'password' => env('FLEXNET_OPERATIONS_PASSWORD'),
            'domain' => env('FLEXNET_OPERATIONS_DOMAIN'),
            'scheme' => env('FLEXNET_OPERATIONS_SCHEME', 'http'),
            'uri' => '/flexnet/services',

        ]
    ]
];