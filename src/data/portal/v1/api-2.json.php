<?php
// This file was auto-generated
return [
//    'version' => '',
    'metadata' =>
    [
//        'apiVersion' => '',
//        'endpointPrefix' => 'portal',
        'protocol' => 'json',
//        'serviceFullName' => 'portal',
//        'serviceId' => 'portal',
    ],
    'operations' => [
        'DescribeProduct' => [
            'name' => 'DescribeProduct',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/product',
            ],
            'input' => [ 'shape' => 'DescribeProductRequestShape', ],
            'output' => [ 'shape' => 'DescribeProductResponseShape', ],
        ],
        'DescribeProductsById' => [
            'name' => 'DescribeProductsById',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/getProductsById',
            ],
            'input' => [ 'shape' => 'DescribeProductsByIdRequestShape', ],
            'output' => [ 'shape' => 'DescribeProductsByIdResponseShape', ],
        ],
    ],
    'shapes' => [
    ],
];
