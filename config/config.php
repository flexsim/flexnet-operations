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
    | Here are each of the flexnet connections setup for your application.
    |
    */

    'connections' => [
        'flexnet' => [
            'url' => env('FLEXNET_OPERATIONS_URL'),

            'user' => env('FLEXNET_OPERATIONS_USER'),
            'password' => env('FLEXNET_OPERATIONS_PASSWORD'),
            'domain' => env('FLEXNET_OPERATIONS_DOMAIN'),
            'scheme' => env('FLEXNET_OPERATIONS_SCHEME', 'http'),
            'uri' => '/flexnet/services',
        ]
    ],


    /**
     * Define the default versions to use for each service
     *
     * You may also specify these options for a specific connection above
     * by configuring the "services" key in that connection. For each
     * service the following options are available (see your FlexNet
     * Operations documentation for which versions are available for a
     * specific service)
     * options: base, v1, v2, v3
     */

    'services' => [
        'ProductPackagingService' => 'v2',
        'EntitlementOrderService' => 'v3',
        'LicenseService' => 'v1',
        'FlexnetAuthentication' => 'v1',
        'UserAcctHierarchyService' => 'v3',
        'ManageDeviceService' => 'v3',
        'UsageService' => 'v1',

        // this service was replaced by the UserAcctHeigharchyService in FlexNet Operations 2018 but is still available for use
        'UserOrgHierarchyService' => 'v1',
    ]
];
