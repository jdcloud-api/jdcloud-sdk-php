<?php
// This file was auto-generated
return [
//    'version' => '',
    'metadata' =>
    [
//        'apiVersion' => '',
//        'endpointPrefix' => 'ias',
        'protocol' => 'json',
//        'serviceFullName' => 'ias',
//        'serviceId' => 'ias',
    ],
    'operations' => [
        'Apps' => [
            'name' => 'Apps',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/operate_backend/apps',
            ],
            'input' => [ 'shape' => 'AppsRequestShape', ],
            'output' => [ 'shape' => 'AppsResponseShape', ],
        ],
        'AppDetail' => [
            'name' => 'AppDetail',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/operate_backend/app/{clientId}',
            ],
            'input' => [ 'shape' => 'AppDetailRequestShape', ],
            'output' => [ 'shape' => 'AppDetailResponseShape', ],
        ],
        'State' => [
            'name' => 'State',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/operate_backend/state',
            ],
            'input' => [ 'shape' => 'StateRequestShape', ],
            'output' => [ 'shape' => 'StateResponseShape', ],
        ],
        'CreateApp' => [
            'name' => 'CreateApp',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/app',
            ],
            'input' => [ 'shape' => 'CreateAppRequestShape', ],
            'output' => [ 'shape' => 'CreateAppResponseShape', ],
        ],
        'GetApp' => [
            'name' => 'GetApp',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/app/{clientId}',
            ],
            'input' => [ 'shape' => 'GetAppRequestShape', ],
            'output' => [ 'shape' => 'GetAppResponseShape', ],
        ],
        'UpdateApp' => [
            'name' => 'UpdateApp',
            'http' => [
                'method' => 'PUT',
                'requestUri' => '/v1/regions/{regionId}/app/{clientId}',
            ],
            'input' => [ 'shape' => 'UpdateAppRequestShape', ],
            'output' => [ 'shape' => 'UpdateAppResponseShape', ],
        ],
        'DeleteApp' => [
            'name' => 'DeleteApp',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/regions/{regionId}/app/{clientId}',
            ],
            'input' => [ 'shape' => 'DeleteAppRequestShape', ],
            'output' => [ 'shape' => 'DeleteAppResponseShape', ],
        ],
        'GetApps' => [
            'name' => 'GetApps',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/apps',
            ],
            'input' => [ 'shape' => 'GetAppsRequestShape', ],
            'output' => [ 'shape' => 'GetAppsResponseShape', ],
        ],
    ],
    'shapes' => [
    ],
];
