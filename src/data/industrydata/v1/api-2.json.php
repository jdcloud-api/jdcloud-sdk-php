<?php
// This file was auto-generated
return [
//    'version' => '',
    'metadata' =>
    [
//        'apiVersion' => '',
//        'endpointPrefix' => 'industrydata',
        'protocol' => 'json',
//        'serviceFullName' => 'industrydata',
//        'serviceId' => 'industrydata',
    ],
    'operations' => [
        'GetLargeScreenData' => [
            'name' => 'GetLargeScreenData',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/getData',
            ],
            'input' => [ 'shape' => 'GetLargeScreenDataRequestShape', ],
            'output' => [ 'shape' => 'GetLargeScreenDataResponseShape', ],
        ],
    ],
    'shapes' => [
    ],
];
