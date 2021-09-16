<?php
// This file was auto-generated
return [
//    'version' => '',
    'metadata' =>
    [
//        'apiVersion' => '',
//        'endpointPrefix' => 'antipro',
        'protocol' => 'json',
//        'serviceFullName' => 'antipro',
//        'serviceId' => 'antipro',
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
        'DescribeAttackSource' => [
            'name' => 'DescribeAttackSource',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/attacklog/{attackLogId}:describeAttackSource',
            ],
            'input' => [ 'shape' => 'DescribeAttackSourceRequestShape', ],
            'output' => [ 'shape' => 'DescribeAttackSourceResponseShape', ],
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
        'DescribeInstances' => [
            'name' => 'DescribeInstances',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/instances',
            ],
            'input' => [ 'shape' => 'DescribeInstancesRequestShape', ],
            'output' => [ 'shape' => 'DescribeInstancesResponseShape', ],
        ],
        'CreateInstance' => [
            'name' => 'CreateInstance',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/instances',
            ],
            'input' => [ 'shape' => 'CreateInstanceRequestShape', ],
            'output' => [ 'shape' => 'CreateInstanceResponseShape', ],
        ],
        'DescribeInstance' => [
            'name' => 'DescribeInstance',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}',
            ],
            'input' => [ 'shape' => 'DescribeInstanceRequestShape', ],
            'output' => [ 'shape' => 'DescribeInstanceResponseShape', ],
        ],
        'ModifyInstance' => [
            'name' => 'ModifyInstance',
            'http' => [
                'method' => 'PATCH',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}',
            ],
            'input' => [ 'shape' => 'ModifyInstanceRequestShape', ],
            'output' => [ 'shape' => 'ModifyInstanceResponseShape', ],
        ],
        'ModifyInstanceName' => [
            'name' => 'ModifyInstanceName',
            'http' => [
                'method' => 'PATCH',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}:modifyInstanceName',
            ],
            'input' => [ 'shape' => 'ModifyInstanceNameRequestShape', ],
            'output' => [ 'shape' => 'ModifyInstanceNameResponseShape', ],
        ],
        'AddProtectedIp' => [
            'name' => 'AddProtectedIp',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}:addProtectedIp',
            ],
            'input' => [ 'shape' => 'AddProtectedIpRequestShape', ],
            'output' => [ 'shape' => 'AddProtectedIpResponseShape', ],
        ],
        'DeleteProtectedIp' => [
            'name' => 'DeleteProtectedIp',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}:deleteProtectedIp',
            ],
            'input' => [ 'shape' => 'DeleteProtectedIpRequestShape', ],
            'output' => [ 'shape' => 'DeleteProtectedIpResponseShape', ],
        ],
        'DescribeProtectedIpList' => [
            'name' => 'DescribeProtectedIpList',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/describeProtectedIpList',
            ],
            'input' => [ 'shape' => 'DescribeProtectedIpListRequestShape', ],
            'output' => [ 'shape' => 'DescribeProtectedIpListResponseShape', ],
        ],
        'DescribeProtectionRule' => [
            'name' => 'DescribeProtectionRule',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}:describeProtectionRule',
            ],
            'input' => [ 'shape' => 'DescribeProtectionRuleRequestShape', ],
            'output' => [ 'shape' => 'DescribeProtectionRuleResponseShape', ],
        ],
        'DescribeGeoAreas' => [
            'name' => 'DescribeGeoAreas',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/describeGeoAreas',
            ],
            'input' => [ 'shape' => 'DescribeGeoAreasRequestShape', ],
            'output' => [ 'shape' => 'DescribeGeoAreasResponseShape', ],
        ],
        'ModifyProtectionRule' => [
            'name' => 'ModifyProtectionRule',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}:modifyProtectionRule',
            ],
            'input' => [ 'shape' => 'ModifyProtectionRuleRequestShape', ],
            'output' => [ 'shape' => 'ModifyProtectionRuleResponseShape', ],
        ],
        'CheckInstanceName' => [
            'name' => 'CheckInstanceName',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/checkInstanceName',
            ],
            'input' => [ 'shape' => 'CheckInstanceNameRequestShape', ],
            'output' => [ 'shape' => 'CheckInstanceNameResponseShape', ],
        ],
        'DescribeProtectionOutline' => [
            'name' => 'DescribeProtectionOutline',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/describeProtectionOutline',
            ],
            'input' => [ 'shape' => 'DescribeProtectionOutlineRequestShape', ],
            'output' => [ 'shape' => 'DescribeProtectionOutlineResponseShape', ],
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
        'DescribeOperationRecords' => [
            'name' => 'DescribeOperationRecords',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/operationRecords',
            ],
            'input' => [ 'shape' => 'DescribeOperationRecordsRequestShape', ],
            'output' => [ 'shape' => 'DescribeOperationRecordsResponseShape', ],
        ],
    ],
    'shapes' => [
    ],
];
