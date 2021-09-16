<?php
// This file was auto-generated
return [
//    'version' => '',
    'metadata' =>
    [
//        'apiVersion' => '',
//        'endpointPrefix' => 'iotlink',
        'protocol' => 'json',
//        'serviceFullName' => 'iotlink',
//        'serviceId' => 'iotlink',
    ],
    'operations' => [
        'GprsStatus' => [
            'name' => 'GprsStatus',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/gprsStatus',
            ],
            'input' => [ 'shape' => 'GprsStatusRequestShape', ],
            'output' => [ 'shape' => 'GprsStatusResponseShape', ],
        ],
        'OnOffStatus' => [
            'name' => 'OnOffStatus',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/onOffStatus',
            ],
            'input' => [ 'shape' => 'OnOffStatusRequestShape', ],
            'output' => [ 'shape' => 'OnOffStatusResponseShape', ],
        ],
        'LifeStatus' => [
            'name' => 'LifeStatus',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/lifeStatus',
            ],
            'input' => [ 'shape' => 'LifeStatusRequestShape', ],
            'output' => [ 'shape' => 'LifeStatusResponseShape', ],
        ],
        'GprsRealtimeInfo' => [
            'name' => 'GprsRealtimeInfo',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/gprsRealtimeInfo',
            ],
            'input' => [ 'shape' => 'GprsRealtimeInfoRequestShape', ],
            'output' => [ 'shape' => 'GprsRealtimeInfoResponseShape', ],
        ],
        'OpenIotCard' => [
            'name' => 'OpenIotCard',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/openIotCard',
            ],
            'input' => [ 'shape' => 'OpenIotCardRequestShape', ],
            'output' => [ 'shape' => 'OpenIotCardResponseShape', ],
        ],
        'CloseIotCard' => [
            'name' => 'CloseIotCard',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/closeIotCard',
            ],
            'input' => [ 'shape' => 'CloseIotCardRequestShape', ],
            'output' => [ 'shape' => 'CloseIotCardResponseShape', ],
        ],
        'OpenIotFlow' => [
            'name' => 'OpenIotFlow',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/openIotFlow',
            ],
            'input' => [ 'shape' => 'OpenIotFlowRequestShape', ],
            'output' => [ 'shape' => 'OpenIotFlowResponseShape', ],
        ],
        'CloseIotFlow' => [
            'name' => 'CloseIotFlow',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/closeIotFlow',
            ],
            'input' => [ 'shape' => 'CloseIotFlowRequestShape', ],
            'output' => [ 'shape' => 'CloseIotFlowResponseShape', ],
        ],
        'Search' => [
            'name' => 'Search',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/search',
            ],
            'input' => [ 'shape' => 'SearchRequestShape', ],
            'output' => [ 'shape' => 'SearchResponseShape', ],
        ],
        'Operate' => [
            'name' => 'Operate',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/operate',
            ],
            'input' => [ 'shape' => 'OperateRequestShape', ],
            'output' => [ 'shape' => 'OperateResponseShape', ],
        ],
    ],
    'shapes' => [
    ],
];
