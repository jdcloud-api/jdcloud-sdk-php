<?php
// This file was auto-generated
return [
//    'version' => '',
    'metadata' =>
    [
//        'apiVersion' => '',
//        'endpointPrefix' => 'quota',
        'protocol' => 'json',
//        'serviceFullName' => 'quota',
//        'serviceId' => 'quota',
    ],
    'operations' => [
        'VerifyUserQuota' => [
            'name' => 'VerifyUserQuota',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v2/regions/{regionId}/userQuota:verify',
            ],
            'input' => [ 'shape' => 'VerifyUserQuotaRequestShape', ],
            'output' => [ 'shape' => 'VerifyUserQuotaResponseShape', ],
        ],
        'GetUserQuotaDetail' => [
            'name' => 'GetUserQuotaDetail',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v2/regions/{regionId}/userQuota:getDetail',
            ],
            'input' => [ 'shape' => 'GetUserQuotaDetailRequestShape', ],
            'output' => [ 'shape' => 'GetUserQuotaDetailResponseShape', ],
        ],
    ],
    'shapes' => [
    ],
];
