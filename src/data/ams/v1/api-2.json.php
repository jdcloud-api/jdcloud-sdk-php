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
        'StreamInputData' => [
            'type' => 'structure',
            'members' => [
                'downTime' => [ 'type' => 'string', 'locationName' => 'downTime', ],
                'mediaType' => [ 'type' => 'string', 'locationName' => 'mediaType', ],
                'bitrateFact' => [ 'type' => 'string', 'locationName' => 'bitrateFact', ],
                'fpsDatum' => [ 'type' => 'string', 'locationName' => 'fpsDatum', ],
                'fpsFact' => [ 'type' => 'string', 'locationName' => 'fpsFact', ],
                'bitrateDatum' => [ 'type' => 'string', 'locationName' => 'bitrateDatum', ],
                'tsDeltaDatum' => [ 'type' => 'string', 'locationName' => 'tsDeltaDatum', ],
                'tsDeltaFact' => [ 'type' => 'string', 'locationName' => 'tsDeltaFact', ],
            ],
        ],
        'DescribeStreamsInputRequestShape' => [
            'type' => 'structure',
            'members' => [
                'startTime' => [ 'type' => 'string', 'locationName' => 'startTime', ],
                'endTime' => [ 'type' => 'string', 'locationName' => 'endTime', ],
                'streamId' => [ 'type' => 'string', 'locationName' => 'streamId', ],
            ],
        ],
        'DescribeStreamsInputResultShape' => [
            'type' => 'structure',
            'members' => [
                'streamInputDatas' => [ 'type' => 'list', 'member' => [ 'shape' => 'StreamInputData', ], ],
            ],
        ],
        'DescribeStreamsInputResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeStreamsInputResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeAuthenticateRequestShape' => [
            'type' => 'structure',
            'members' => [
                'ver' => [ 'type' => 'integer', 'locationName' => 'ver', ],
                'pId' => [ 'type' => 'string', 'locationName' => 'pId', ],
            ],
        ],
        'DescribeAuthenticateResultShape' => [
            'type' => 'structure',
            'members' => [
                'pId' => [ 'type' => 'string', 'locationName' => 'pId', ],
                'ver' => [ 'type' => 'integer', 'locationName' => 'ver', ],
                'blacklist' => [ 'type' => 'double', 'locationName' => 'blacklist', ],
                'status' => [ 'type' => 'integer', 'locationName' => 'status', ],
                'license' => [ 'type' => 'string', 'locationName' => 'license', ],
            ],
        ],
        'DescribeAuthenticateResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeAuthenticateResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
    ],
];
