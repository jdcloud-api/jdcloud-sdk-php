<?php
// This file was auto-generated
return [
//    'version' => '',
    'metadata' =>
    [
//        'apiVersion' => '',
//        'endpointPrefix' => 'order',
        'protocol' => 'json',
//        'serviceFullName' => 'order',
//        'serviceId' => 'order',
    ],
    'operations' => [
        'PayOrder' => [
            'name' => 'PayOrder',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v2/regions/{regionId}/order/{orderNumber}:pay',
            ],
            'input' => [ 'shape' => 'PayOrderRequestShape', ],
            'output' => [ 'shape' => 'PayOrderResponseShape', ],
        ],
        'QueryOrders' => [
            'name' => 'QueryOrders',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v2/regions/{regionId}/orders',
            ],
            'input' => [ 'shape' => 'QueryOrdersRequestShape', ],
            'output' => [ 'shape' => 'QueryOrdersResponseShape', ],
        ],
        'QueryOrder' => [
            'name' => 'QueryOrder',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v2/regions/{regionId}/order/{orderNumber}',
            ],
            'input' => [ 'shape' => 'QueryOrderRequestShape', ],
            'output' => [ 'shape' => 'QueryOrderResponseShape', ],
        ],
    ],
    'shapes' => [
    ],
];
