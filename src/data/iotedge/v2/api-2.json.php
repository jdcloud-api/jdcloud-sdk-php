<?php
// This file was auto-generated
return [
//    'version' => '',
    'metadata' =>
    [
//        'apiVersion' => '',
//        'endpointPrefix' => 'iotedge',
        'protocol' => 'json',
//        'serviceFullName' => 'iotedge',
//        'serviceId' => 'iotedge',
    ],
    'operations' => [
        'DeployApp' => [
            'name' => 'DeployApp',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v2/regions/{regionId}/instances/{instanceId}/hardwareId/{hardwareId}/os/{osId}/edgeApp:deployApp',
            ],
            'input' => [ 'shape' => 'DeployAppRequestShape', ],
            'output' => [ 'shape' => 'DeployAppResponseShape', ],
        ],
        'DescribeDeployApp' => [
            'name' => 'DescribeDeployApp',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v2/regions/{regionId}/instances/{instanceId}/hardwareId/{hardwareId}/os/{osId}/edgeApp:describeDeployApp',
            ],
            'input' => [ 'shape' => 'DescribeDeployAppRequestShape', ],
            'output' => [ 'shape' => 'DescribeDeployAppResponseShape', ],
        ],
        'DescribeDeployDetails' => [
            'name' => 'DescribeDeployDetails',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v2/regions/{regionId}/instances/{instanceId}/hardwareId/{hardwareId}/os/{osId}/edgeApp:describeDeployDetails',
            ],
            'input' => [ 'shape' => 'DescribeDeployDetailsRequestShape', ],
            'output' => [ 'shape' => 'DescribeDeployDetailsResponseShape', ],
        ],
        'UnInstallApp' => [
            'name' => 'UnInstallApp',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v2/regions/{regionId}/instances/{instanceId}/hardwareId/{hardwareId}/os/{osId}/edgeApp:unInstallApp',
            ],
            'input' => [ 'shape' => 'UnInstallAppRequestShape', ],
            'output' => [ 'shape' => 'UnInstallAppResponseShape', ],
        ],
        'SetAppStatus' => [
            'name' => 'SetAppStatus',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v2/regions/{regionId}/instances/{instanceId}/hardwareId/{hardwareId}/os/{osId}/edgeApp:setAppStatus',
            ],
            'input' => [ 'shape' => 'SetAppStatusRequestShape', ],
            'output' => [ 'shape' => 'SetAppStatusResponseShape', ],
        ],
        'DescribeConfig' => [
            'name' => 'DescribeConfig',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v2/regions/{regionId}/instances/{instanceId}/hardwareId/{hardwareId}/os/{osId}/edgeApp:describeConfig',
            ],
            'input' => [ 'shape' => 'DescribeConfigRequestShape', ],
            'output' => [ 'shape' => 'DescribeConfigResponseShape', ],
        ],
        'DeleteEdgeWithCore' => [
            'name' => 'DeleteEdgeWithCore',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v2/regions/{regionId}/instances/{instanceId}/edges/{edgeName}',
            ],
            'input' => [ 'shape' => 'DeleteEdgeWithCoreRequestShape', ],
            'output' => [ 'shape' => 'DeleteEdgeWithCoreResponseShape', ],
        ],
        'AddEdgeWithCore' => [
            'name' => 'AddEdgeWithCore',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v2/regions/{regionId}/instances/{instanceId}/edges/{edgeName}:addEdge',
            ],
            'input' => [ 'shape' => 'AddEdgeWithCoreRequestShape', ],
            'output' => [ 'shape' => 'AddEdgeWithCoreResponseShape', ],
        ],
        'AddSubDeviceWithCore' => [
            'name' => 'AddSubDeviceWithCore',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v2/regions/{regionId}/instances/{instanceId}/products/{productKey}/edges/{edgeName}:addSubDevice',
            ],
            'input' => [ 'shape' => 'AddSubDeviceWithCoreRequestShape', ],
            'output' => [ 'shape' => 'AddSubDeviceWithCoreResponseShape', ],
        ],
        'DelSubDeviceWithCore' => [
            'name' => 'DelSubDeviceWithCore',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v2/regions/{regionId}/instances/{instanceId}/products/{productKey}/edges/{edgeName}:delSubDevice',
            ],
            'input' => [ 'shape' => 'DelSubDeviceWithCoreRequestShape', ],
            'output' => [ 'shape' => 'DelSubDeviceWithCoreResponseShape', ],
        ],
    ],
    'shapes' => [
    ],
];
