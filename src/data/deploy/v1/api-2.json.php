<?php
// This file was auto-generated
return [
//    'version' => '',
    'metadata' =>
    [
//        'apiVersion' => '',
//        'endpointPrefix' => 'deploy',
        'protocol' => 'json',
//        'serviceFullName' => 'deploy',
//        'serviceId' => 'deploy',
    ],
    'operations' => [
        'DescribeApps' => [
            'name' => 'DescribeApps',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/apps',
            ],
            'input' => [ 'shape' => 'DescribeAppsRequestShape', ],
            'output' => [ 'shape' => 'DescribeAppsResponseShape', ],
        ],
        'DescribeApp' => [
            'name' => 'DescribeApp',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/app/{appId}',
            ],
            'input' => [ 'shape' => 'DescribeAppRequestShape', ],
            'output' => [ 'shape' => 'DescribeAppResponseShape', ],
        ],
        'CreateDeploy' => [
            'name' => 'CreateDeploy',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/deploy',
            ],
            'input' => [ 'shape' => 'CreateDeployRequestShape', ],
            'output' => [ 'shape' => 'CreateDeployResponseShape', ],
        ],
        'DescribeDeploy' => [
            'name' => 'DescribeDeploy',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/deploy/{deployId}',
            ],
            'input' => [ 'shape' => 'DescribeDeployRequestShape', ],
            'output' => [ 'shape' => 'DescribeDeployResponseShape', ],
        ],
        'DescribeGroups' => [
            'name' => 'DescribeGroups',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/groups',
            ],
            'input' => [ 'shape' => 'DescribeGroupsRequestShape', ],
            'output' => [ 'shape' => 'DescribeGroupsResponseShape', ],
        ],
        'DescribeGroup' => [
            'name' => 'DescribeGroup',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/group/{groupId}',
            ],
            'input' => [ 'shape' => 'DescribeGroupRequestShape', ],
            'output' => [ 'shape' => 'DescribeGroupResponseShape', ],
        ],
    ],
    'shapes' => [
    ],
];
