<?php
// This file was auto-generated
return [
//    'version' => '',
    'metadata' =>
    [
//        'apiVersion' => '',
//        'endpointPrefix' => 'sop',
        'protocol' => 'json',
//        'serviceFullName' => 'sop',
//        'serviceId' => 'sop',
    ],
    'operations' => [
        'GetSecurityToken' => [
            'name' => 'GetSecurityToken',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/securityToken:getSecurityToken',
            ],
            'input' => [ 'shape' => 'GetSecurityTokenRequestShape', ],
            'output' => [ 'shape' => 'GetSecurityTokenResponseShape', ],
        ],
        'GetSensitiveOpSetting' => [
            'name' => 'GetSensitiveOpSetting',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/sensitiveOpSetting',
            ],
            'input' => [ 'shape' => 'GetSensitiveOpSettingRequestShape', ],
            'output' => [ 'shape' => 'GetSensitiveOpSettingResponseShape', ],
        ],
    ],
    'shapes' => [
    ],
];
