<?php
// This file was auto-generated
return [
//    'version' => '',
    'metadata' =>
    [
//        'apiVersion' => '',
//        'endpointPrefix' => 'bri',
        'protocol' => 'json',
//        'serviceFullName' => 'bri',
//        'serviceId' => 'bri',
    ],
    'operations' => [
        'DescribeBWList' => [
            'name' => 'DescribeBWList',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/blackwhite:list',
            ],
            'input' => [ 'shape' => 'DescribeBWListRequestShape', ],
            'output' => [ 'shape' => 'DescribeBWListResponseShape', ],
        ],
        'SetBWList' => [
            'name' => 'SetBWList',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/blackwhite:list',
            ],
            'input' => [ 'shape' => 'SetBWListRequestShape', ],
            'output' => [ 'shape' => 'SetBWListResponseShape', ],
        ],
        'DelBWList' => [
            'name' => 'DelBWList',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/regions/{regionId}/blackwhite:list',
            ],
            'input' => [ 'shape' => 'DelBWListRequestShape', ],
            'output' => [ 'shape' => 'DelBWListResponseShape', ],
        ],
        'CreditScore' => [
            'name' => 'CreditScore',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/creditScore:check',
            ],
            'input' => [ 'shape' => 'CreditScoreRequestShape', ],
            'output' => [ 'shape' => 'CreditScoreResponseShape', ],
        ],
    ],
    'shapes' => [
    ],
];
