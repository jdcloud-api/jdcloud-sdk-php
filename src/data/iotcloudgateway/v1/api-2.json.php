<?php
// This file was auto-generated
return [
//    'version' => '',
    'metadata' =>
    [
//        'apiVersion' => '',
//        'endpointPrefix' => 'iotcloudgateway',
        'protocol' => 'json',
//        'serviceFullName' => 'iotcloudgateway',
//        'serviceId' => 'iotcloudgateway',
    ],
    'operations' => [
        'DescribeInstances' => [
            'name' => 'DescribeInstances',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/instances',
            ],
            'input' => [ 'shape' => 'DescribeInstancesRequestShape', ],
            'output' => [ 'shape' => 'DescribeInstancesResponseShape', ],
        ],
        'DescribeInstance' => [
            'name' => 'DescribeInstance',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}:describeInstance',
            ],
            'input' => [ 'shape' => 'DescribeInstanceRequestShape', ],
            'output' => [ 'shape' => 'DescribeInstanceResponseShape', ],
        ],
        'QueryInstanceExposeDomain' => [
            'name' => 'QueryInstanceExposeDomain',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}:queryInstanceExposeDomain',
            ],
            'input' => [ 'shape' => 'QueryInstanceExposeDomainRequestShape', ],
            'output' => [ 'shape' => 'QueryInstanceExposeDomainResponseShape', ],
        ],
        'QueryInstanceStatus' => [
            'name' => 'QueryInstanceStatus',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}:queryInstanceStatus',
            ],
            'input' => [ 'shape' => 'QueryInstanceStatusRequestShape', ],
            'output' => [ 'shape' => 'QueryInstanceStatusResponseShape', ],
        ],
        'DeviceControl' => [
            'name' => 'DeviceControl',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}:deviceControl',
            ],
            'input' => [ 'shape' => 'DeviceControlRequestShape', ],
            'output' => [ 'shape' => 'DeviceControlResponseShape', ],
        ],
    ],
    'shapes' => [
    ],
];
