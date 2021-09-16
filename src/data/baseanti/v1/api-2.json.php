<?php
// This file was auto-generated
return [
//    'version' => '',
    'metadata' =>
    [
//        'apiVersion' => '',
//        'endpointPrefix' => 'baseanti',
        'protocol' => 'json',
//        'serviceFullName' => 'baseanti',
//        'serviceId' => 'baseanti',
    ],
    'operations' => [
        'DescribeAttackLogs' => [
            'name' => 'DescribeAttackLogs',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/attacklog',
            ],
            'input' => [ 'shape' => 'DescribeAttackLogsRequestShape', ],
            'output' => [ 'shape' => 'DescribeAttackLogsResponseShape', ],
        ],
        'DescribeAttackStatistics' => [
            'name' => 'DescribeAttackStatistics',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/describeAttackStatistics',
            ],
            'input' => [ 'shape' => 'DescribeAttackStatisticsRequestShape', ],
            'output' => [ 'shape' => 'DescribeAttackStatisticsResponseShape', ],
        ],
        'DescribeAttackTypeCount' => [
            'name' => 'DescribeAttackTypeCount',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/describeAttackTypeCount',
            ],
            'input' => [ 'shape' => 'DescribeAttackTypeCountRequestShape', ],
            'output' => [ 'shape' => 'DescribeAttackTypeCountResponseShape', ],
        ],
        'DescribeIpMonitorFlow' => [
            'name' => 'DescribeIpMonitorFlow',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/describeIpMonitorFlow',
            ],
            'input' => [ 'shape' => 'DescribeIpMonitorFlowRequestShape', ],
            'output' => [ 'shape' => 'DescribeIpMonitorFlowResponseShape', ],
        ],
        'DescribeIpResources' => [
            'name' => 'DescribeIpResources',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/ipResources',
            ],
            'input' => [ 'shape' => 'DescribeIpResourcesRequestShape', ],
            'output' => [ 'shape' => 'DescribeIpResourcesResponseShape', ],
        ],
        'DescribeElasticIpResources' => [
            'name' => 'DescribeElasticIpResources',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/elasticIpResources',
            ],
            'input' => [ 'shape' => 'DescribeElasticIpResourcesRequestShape', ],
            'output' => [ 'shape' => 'DescribeElasticIpResourcesResponseShape', ],
        ],
        'DescribeCpsIpResources' => [
            'name' => 'DescribeCpsIpResources',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/cpsIpResources',
            ],
            'input' => [ 'shape' => 'DescribeCpsIpResourcesRequestShape', ],
            'output' => [ 'shape' => 'DescribeCpsIpResourcesResponseShape', ],
        ],
        'DescribeCcsIpResources' => [
            'name' => 'DescribeCcsIpResources',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/ccsIpResources',
            ],
            'input' => [ 'shape' => 'DescribeCcsIpResourcesRequestShape', ],
            'output' => [ 'shape' => 'DescribeCcsIpResourcesResponseShape', ],
        ],
        'DescribeIpResourceInfo' => [
            'name' => 'DescribeIpResourceInfo',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/ipResources/{ip}',
            ],
            'input' => [ 'shape' => 'DescribeIpResourceInfoRequestShape', ],
            'output' => [ 'shape' => 'DescribeIpResourceInfoResponseShape', ],
        ],
        'DescribeIpSafetyInfo' => [
            'name' => 'DescribeIpSafetyInfo',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/describeIpSafetyInfo',
            ],
            'input' => [ 'shape' => 'DescribeIpSafetyInfoRequestShape', ],
            'output' => [ 'shape' => 'DescribeIpSafetyInfoResponseShape', ],
        ],
        'SetCleanThreshold' => [
            'name' => 'SetCleanThreshold',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/ipResources/{ip}:setCleanThreshold',
            ],
            'input' => [ 'shape' => 'SetCleanThresholdRequestShape', ],
            'output' => [ 'shape' => 'SetCleanThresholdResponseShape', ],
        ],
        'SetIpCleanThreshold' => [
            'name' => 'SetIpCleanThreshold',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/setIpCleanThreshold',
            ],
            'input' => [ 'shape' => 'SetIpCleanThresholdRequestShape', ],
            'output' => [ 'shape' => 'SetIpCleanThresholdResponseShape', ],
        ],
        'DescribeIpCleanThresholdRange' => [
            'name' => 'DescribeIpCleanThresholdRange',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/describeIpCleanThresholdRange',
            ],
            'input' => [ 'shape' => 'DescribeIpCleanThresholdRangeRequestShape', ],
            'output' => [ 'shape' => 'DescribeIpCleanThresholdRangeResponseShape', ],
        ],
        'DescribeIpResourceProtectInfo' => [
            'name' => 'DescribeIpResourceProtectInfo',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/ipResources/{ip}/protectInfo',
            ],
            'input' => [ 'shape' => 'DescribeIpResourceProtectInfoRequestShape', ],
            'output' => [ 'shape' => 'DescribeIpResourceProtectInfoResponseShape', ],
        ],
        'DescribeIpResourceFlow' => [
            'name' => 'DescribeIpResourceFlow',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/ipResources/{ip}/monitorFlow',
            ],
            'input' => [ 'shape' => 'DescribeIpResourceFlowRequestShape', ],
            'output' => [ 'shape' => 'DescribeIpResourceFlowResponseShape', ],
        ],
    ],
    'shapes' => [
    ],
];
