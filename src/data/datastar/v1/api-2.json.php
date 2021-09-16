<?php
// This file was auto-generated
return [
//    'version' => '',
    'metadata' =>
    [
//        'apiVersion' => '',
//        'endpointPrefix' => 'datastar',
        'protocol' => 'json',
//        'serviceFullName' => 'datastar',
//        'serviceId' => 'datastar',
    ],
    'operations' => [
        'GetLargeScreenData' => [
            'name' => 'GetLargeScreenData',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/largeScreen/getData',
            ],
            'input' => [ 'shape' => 'GetLargeScreenDataRequestShape', ],
            'output' => [ 'shape' => 'GetLargeScreenDataResponseShape', ],
        ],
    ],
    'shapes' => [
    ],
];
