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
        'GetProfile' => [
            'name' => 'GetProfile',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/profile/getProfile',
            ],
            'input' => [ 'shape' => 'GetProfileRequestShape', ],
            'output' => [ 'shape' => 'GetProfileResponseShape', ],
        ],
        'GetPackageId' => [
            'name' => 'GetPackageId',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/dmp/getPackageId',
            ],
            'input' => [ 'shape' => 'GetPackageIdRequestShape', ],
            'output' => [ 'shape' => 'GetPackageIdResponseShape', ],
        ],
    ],
    'shapes' => [
        'TestOpenApiReq' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
            ],
        ],
        'GetProfileResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GetProfileResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'GetProfileResultShape' => [
            'type' => 'structure',
            'members' => [
                'status' => [ 'type' => 'boolean', 'locationName' => 'status', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'data' => [ 'type' => 'string', 'locationName' => 'data', ],
            ],
        ],
        'GetProfileRequestShape' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
                'type' => [ 'type' => 'string', 'locationName' => 'type', ],
                'labelCode' => [ 'type' => 'string', 'locationName' => 'labelCode', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'GetPackageIdRequestShape' => [
            'type' => 'structure',
            'members' => [
                'deviceIds' => [ 'type' => 'string', 'locationName' => 'deviceIds', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'GetPackageIdResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GetPackageIdResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'GetPackageIdResultShape' => [
            'type' => 'structure',
            'members' => [
                'status' => [ 'type' => 'boolean', 'locationName' => 'status', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'data' => [ 'type' => 'string', 'locationName' => 'data', ],
            ],
        ],
    ],
];
