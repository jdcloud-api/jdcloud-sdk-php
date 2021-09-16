<?php
// This file was auto-generated
return [
//    'version' => '',
    'metadata' =>
    [
//        'apiVersion' => '',
//        'endpointPrefix' => 'sts',
        'protocol' => 'json',
//        'serviceFullName' => 'sts',
//        'serviceId' => 'sts',
    ],
    'operations' => [
        'AssumeRole' => [
            'name' => 'AssumeRole',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/sessionToken:assumeRole',
            ],
            'input' => [ 'shape' => 'AssumeRoleRequestShape', ],
            'output' => [ 'shape' => 'AssumeRoleResponseShape', ],
        ],
    ],
    'shapes' => [
    ],
];
