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
        'GetSecurityTokenInfo' => [
            'type' => 'structure',
            'members' => [
                'type' => [ 'type' => 'integer', 'locationName' => 'type', ],
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'action' => [ 'type' => 'string', 'locationName' => 'action', ],
                'durationSeconds' => [ 'type' => 'integer', 'locationName' => 'durationSeconds', ],
            ],
        ],
        'VerificationCodeInfo' => [
            'type' => 'structure',
            'members' => [
                'action' => [ 'type' => 'string', 'locationName' => 'action', ],
                'type' => [ 'type' => 'integer', 'locationName' => 'type', ],
            ],
        ],
        'VerifySecurityTokenInfo' => [
            'type' => 'structure',
            'members' => [
                'action' => [ 'type' => 'string', 'locationName' => 'action', ],
            ],
        ],
        'GetSecurityTokenResultShape' => [
            'type' => 'structure',
            'members' => [
                'securityToken' => [ 'type' => 'string', 'locationName' => 'securityToken', ],
            ],
        ],
        'GetSecurityTokenResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GetSecurityTokenResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'GetSecurityTokenRequestShape' => [
            'type' => 'structure',
            'members' => [
                'getSecurityTokenInfo' =>  [ 'shape' => 'GetSecurityTokenInfo', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'GetSensitiveOpSettingRequestShape' => [
            'type' => 'structure',
            'members' => [
                'action' => [ 'type' => 'string', 'locationName' => 'action', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'GetSensitiveOpSettingResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GetSensitiveOpSettingResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'GetSensitiveOpSettingResultShape' => [
            'type' => 'structure',
            'members' => [
                'status' => [ 'type' => 'integer', 'locationName' => 'status', ],
                'type' => [ 'type' => 'integer', 'locationName' => 'type', ],
                'extInfo' => [ 'type' => 'string', 'locationName' => 'extInfo', ],
            ],
        ],
    ],
];
