<?php
// This file was auto-generated
return [
//    'version' => '',
    'metadata' =>
    [
//        'apiVersion' => '',
//        'endpointPrefix' => 'captcha',
        'protocol' => 'json',
//        'serviceFullName' => 'captcha',
//        'serviceId' => 'captcha',
    ],
    'operations' => [
        'GetSessionId' => [
            'name' => 'GetSessionId',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/captcha:getsessionid',
            ],
            'input' => [ 'shape' => 'GetSessionIdRequestShape', ],
            'output' => [ 'shape' => 'GetSessionIdResponseShape', ],
        ],
        'VerifyToken' => [
            'name' => 'VerifyToken',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/captcha:verifytoken',
            ],
            'input' => [ 'shape' => 'VerifyTokenRequestShape', ],
            'output' => [ 'shape' => 'VerifyTokenResponseShape', ],
        ],
    ],
    'shapes' => [
    ],
];
