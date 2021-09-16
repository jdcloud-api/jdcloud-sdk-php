<?php
// This file was auto-generated
return [
//    'version' => '',
    'metadata' =>
    [
//        'apiVersion' => '',
//        'endpointPrefix' => 'ams',
        'protocol' => 'json',
//        'serviceFullName' => 'ams',
//        'serviceId' => 'ams',
    ],
    'operations' => [
        'DescribeStreamsInput' => [
            'name' => 'DescribeStreamsInput',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/streams/{streamId}/inputs',
            ],
            'input' => [ 'shape' => 'DescribeStreamsInputRequestShape', ],
            'output' => [ 'shape' => 'DescribeStreamsInputResponseShape', ],
        ],
        'DescribeAuthenticate' => [
            'name' => 'DescribeAuthenticate',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/appManager/{pId}/authenticates',
            ],
            'input' => [ 'shape' => 'DescribeAuthenticateRequestShape', ],
            'output' => [ 'shape' => 'DescribeAuthenticateResponseShape', ],
        ],
    ],
    'shapes' => [
    ],
];
