<?php
// This file was auto-generated
return [
//    'version' => '',
    'metadata' =>
    [
//        'apiVersion' => '',
//        'endpointPrefix' => 'renewal',
        'protocol' => 'json',
//        'serviceFullName' => 'renewal',
//        'serviceId' => 'renewal',
    ],
    'operations' => [
        'SetRenewal' => [
            'name' => 'SetRenewal',
            'http' => [
                'method' => 'PUT',
                'requestUri' => '/v2/regions/{regionId}/instances:autoRenewStatus',
            ],
            'input' => [ 'shape' => 'SetRenewalRequestShape', ],
            'output' => [ 'shape' => 'SetRenewalResponseShape', ],
        ],
        'QueryInstance' => [
            'name' => 'QueryInstance',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v2/regions/{regionId}/instances',
            ],
            'input' => [ 'shape' => 'QueryInstanceRequestShape', ],
            'output' => [ 'shape' => 'QueryInstanceResponseShape', ],
        ],
        'RenewInstance' => [
            'name' => 'RenewInstance',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v2/regions/{regionId}/instances:renew',
            ],
            'input' => [ 'shape' => 'RenewInstanceRequestShape', ],
            'output' => [ 'shape' => 'RenewInstanceResponseShape', ],
        ],
    ],
    'shapes' => [
    ],
];
