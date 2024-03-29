<?php

// config for Flexsim/FlexnetOperations
return [

    /*
    |--------------------------------------------------------------------------
    | Authentication
    |--------------------------------------------------------------------------
    |
    | Flexnet Authentication Parameters
    |
    */

    'username' => env('FLEXNET_USER'),
    'password' => env('FLEXNET_PASSWORD'),

    /*
    |--------------------------------------------------------------------------
    | EntitlementOrderService
    |--------------------------------------------------------------------------
    */

    'entitlementOrderService' => [
        'wsdl' => env('FLEXNET_URL').'/flexnet/services/v4/EntitlementOrderService?wsdl',
    ],

    'licenseService' => [
        'wsdl' => env('FLEXNET_URL').'/flexnet/services/v1/LicenseService?wsdl',
    ],

    'productPackagingService' => [
        'wsdl' => env('FLEXNET_URL').'/flexnet/services/v2/ProductPackagingService?wsdl',
    ],

];
