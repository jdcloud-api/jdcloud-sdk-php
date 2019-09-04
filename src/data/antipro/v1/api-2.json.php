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
        'AttackLog' => [
            'type' => 'structure',
            'members' => [
                'ip' => [ 'type' => 'string', 'locationName' => 'ip', ],
                'resourceType' => [ 'type' => 'integer', 'locationName' => 'resourceType', ],
                'attackLogId' => [ 'type' => 'string', 'locationName' => 'attackLogId', ],
                'startTime' => [ 'type' => 'string', 'locationName' => 'startTime', ],
                'endTime' => [ 'type' => 'string', 'locationName' => 'endTime', ],
                'cause' => [ 'type' => 'integer', 'locationName' => 'cause', ],
                'status' => [ 'type' => 'integer', 'locationName' => 'status', ],
                'blackHole' => [ 'type' => 'boolean', 'locationName' => 'blackHole', ],
                'peak' => [ 'type' => 'double', 'locationName' => 'peak', ],
                'unit' => [ 'type' => 'string', 'locationName' => 'unit', ],
                'attackType' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'AttackTypeCount' => [
            'type' => 'structure',
            'members' => [
                'type' => [ 'type' => 'string', 'locationName' => 'type', ],
                'count' => [ 'type' => 'integer', 'locationName' => 'count', ],
            ],
        ],
        'Country' => [
            'type' => 'structure',
            'members' => [
                'label' => [ 'type' => 'string', 'locationName' => 'label', ],
                'value' => [ 'type' => 'string', 'locationName' => 'value', ],
                'children' => [ 'type' => 'list', 'member' => [ 'shape' => 'Country', ], ],
            ],
        ],
        'CreateInstanceSpec' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'ipNum' => [ 'type' => 'integer', 'locationName' => 'ipNum', ],
                'bpGbps' => [ 'type' => 'integer', 'locationName' => 'bpGbps', ],
                'epGbps' => [ 'type' => 'integer', 'locationName' => 'epGbps', ],
                'timeSpan' => [ 'type' => 'integer', 'locationName' => 'timeSpan', ],
                'timeUnit' => [ 'type' => 'integer', 'locationName' => 'timeUnit', ],
            ],
        ],
        'ExtraOperationSpec' => [
            'type' => 'structure',
            'members' => [
                'operationType' => [ 'type' => 'integer', 'locationName' => 'operationType', ],
                'ip' => [ 'type' => 'string', 'locationName' => 'ip', ],
            ],
        ],
        'GeoBlack' => [
            'type' => 'structure',
            'members' => [
                'label' => [ 'type' => 'string', 'locationName' => 'label', ],
                'value' => [ 'type' => 'string', 'locationName' => 'value', ],
            ],
        ],
        'ProtectedIp' => [
            'type' => 'structure',
            'members' => [
                'ip' => [ 'type' => 'string', 'locationName' => 'ip', ],
                'safeStatus' => [ 'type' => 'integer', 'locationName' => 'safeStatus', ],
                'resourceType' => [ 'type' => 'integer', 'locationName' => 'resourceType', ],
                'protectionRuleType' => [ 'type' => 'integer', 'locationName' => 'protectionRuleType', ],
            ],
        ],
        'ProtectedObject' => [
            'type' => 'structure',
            'members' => [
                'type' => [ 'type' => 'string', 'locationName' => 'type', ],
                'count' => [ 'type' => 'integer', 'locationName' => 'count', ],
                'ipList' => [ 'type' => 'list', 'member' => [ 'shape' => 'ProtectedIp', ], ],
            ],
        ],
        'Instance' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'region' => [ 'type' => 'string', 'locationName' => 'region', ],
                'type' => [ 'type' => 'integer', 'locationName' => 'type', ],
                'ipCount' => [ 'type' => 'integer', 'locationName' => 'ipCount', ],
                'basicBandwidth' => [ 'type' => 'integer', 'locationName' => 'basicBandwidth', ],
                'elasticBandwidth' => [ 'type' => 'integer', 'locationName' => 'elasticBandwidth', ],
                'expireTime' => [ 'type' => 'string', 'locationName' => 'expireTime', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'protectedObjects' => [ 'type' => 'list', 'member' => [ 'shape' => 'ProtectedObject', ], ],
                'onTrial' => [ 'type' => 'boolean', 'locationName' => 'onTrial', ],
                'resourceId' => [ 'type' => 'string', 'locationName' => 'resourceId', ],
            ],
        ],
        'IpResource' => [
            'type' => 'structure',
            'members' => [
                'region' => [ 'type' => 'string', 'locationName' => 'region', ],
                'resourceType' => [ 'type' => 'integer', 'locationName' => 'resourceType', ],
                'ip' => [ 'type' => 'string', 'locationName' => 'ip', ],
                'bandwidth' => [ 'type' => 'integer', 'locationName' => 'bandwidth', ],
                'cleanThresholdBps' => [ 'type' => 'long', 'locationName' => 'cleanThresholdBps', ],
                'cleanThresholdPps' => [ 'type' => 'long', 'locationName' => 'cleanThresholdPps', ],
                'balckHoleThreshold' => [ 'type' => 'long', 'locationName' => 'balckHoleThreshold', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'instanceName' => [ 'type' => 'string', 'locationName' => 'instanceName', ],
                'safeStatus' => [ 'type' => 'integer', 'locationName' => 'safeStatus', ],
            ],
        ],
        'IpResourceFlow' => [
            'type' => 'structure',
            'members' => [
                'time' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'postProtect' => [ 'type' => 'list', 'member' => [ 'type' => 'double', ], ],
                'preProtect' => [ 'type' => 'list', 'member' => [ 'type' => 'double', ], ],
                'unit' => [ 'type' => 'string', 'locationName' => 'unit', ],
            ],
        ],
        'IpResourceInfo' => [
            'type' => 'structure',
            'members' => [
                'ip' => [ 'type' => 'string', 'locationName' => 'ip', ],
                'safeStatus' => [ 'type' => 'integer', 'locationName' => 'safeStatus', ],
                'region' => [ 'type' => 'string', 'locationName' => 'region', ],
                'blackHoleThreshold' => [ 'type' => 'long', 'locationName' => 'blackHoleThreshold', ],
                'cleanThresholdBps' => [ 'type' => 'long', 'locationName' => 'cleanThresholdBps', ],
                'cleanThresholdPps' => [ 'type' => 'long', 'locationName' => 'cleanThresholdPps', ],
            ],
        ],
        'ModifyInstanceNameSpec' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
            ],
        ],
        'ModifyInstanceSpec' => [
            'type' => 'structure',
            'members' => [
                'ipNum' => [ 'type' => 'integer', 'locationName' => 'ipNum', ],
                'bpGbps' => [ 'type' => 'integer', 'locationName' => 'bpGbps', ],
                'epGbps' => [ 'type' => 'integer', 'locationName' => 'epGbps', ],
            ],
        ],
        'OperationRecord' => [
            'type' => 'structure',
            'members' => [
                'time' => [ 'type' => 'string', 'locationName' => 'time', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'action' => [ 'type' => 'integer', 'locationName' => 'action', ],
                'info' => [ 'type' => 'string', 'locationName' => 'info', ],
                'operator' => [ 'type' => 'string', 'locationName' => 'operator', ],
            ],
        ],
        'OrderSpec' => [
            'type' => 'structure',
            'members' => [
                'buyType' => [ 'type' => 'integer', 'locationName' => 'buyType', ],
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'pkgType' => [ 'type' => 'integer', 'locationName' => 'pkgType', ],
                'ipNum' => [ 'type' => 'integer', 'locationName' => 'ipNum', ],
                'bp' => [ 'type' => 'integer', 'locationName' => 'bp', ],
                'ep' => [ 'type' => 'integer', 'locationName' => 'ep', ],
                'timeSpan' => [ 'type' => 'integer', 'locationName' => 'timeSpan', ],
                'timeUnit' => [ 'type' => 'integer', 'locationName' => 'timeUnit', ],
                'returnUrl' => [ 'type' => 'string', 'locationName' => 'returnUrl', ],
            ],
        ],
        'PriceSpec' => [
            'type' => 'structure',
            'members' => [
                'buyType' => [ 'type' => 'integer', 'locationName' => 'buyType', ],
                'id' => [ 'type' => 'long', 'locationName' => 'id', ],
                'billingType' => [ 'type' => 'integer', 'locationName' => 'billingType', ],
                'pkgType' => [ 'type' => 'integer', 'locationName' => 'pkgType', ],
                'ipNum' => [ 'type' => 'integer', 'locationName' => 'ipNum', ],
                'bp' => [ 'type' => 'integer', 'locationName' => 'bp', ],
                'ep' => [ 'type' => 'integer', 'locationName' => 'ep', ],
                'timeSpan' => [ 'type' => 'integer', 'locationName' => 'timeSpan', ],
                'timeUnit' => [ 'type' => 'integer', 'locationName' => 'timeUnit', ],
            ],
        ],
        'ProtectedIpSpec' => [
            'type' => 'structure',
            'members' => [
                'ip' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'ProtectedObjectsSpec' => [
            'type' => 'structure',
            'members' => [
                'eip' => [ 'type' => 'boolean', 'locationName' => 'eip', ],
                'cps' => [ 'type' => 'boolean', 'locationName' => 'cps', ],
            ],
        ],
        'ProtectionOutline' => [
            'type' => 'structure',
            'members' => [
                'protectedDay' => [ 'type' => 'long', 'locationName' => 'protectedDay', ],
                'protectedIpCount' => [ 'type' => 'long', 'locationName' => 'protectedIpCount', ],
                'weekAttackCount' => [ 'type' => 'long', 'locationName' => 'weekAttackCount', ],
                'weekAttackPeak' => [ 'type' => 'double', 'locationName' => 'weekAttackPeak', ],
                'weekAttackUnit' => [ 'type' => 'string', 'locationName' => 'weekAttackUnit', ],
                'monthAttackCount' => [ 'type' => 'long', 'locationName' => 'monthAttackCount', ],
                'monthAttackPeak' => [ 'type' => 'double', 'locationName' => 'monthAttackPeak', ],
                'monthAttackUnit' => [ 'type' => 'string', 'locationName' => 'monthAttackUnit', ],
                'currentAttackCount' => [ 'type' => 'long', 'locationName' => 'currentAttackCount', ],
            ],
        ],
        'ProtectionRule' => [
            'type' => 'structure',
            'members' => [
                'type' => [ 'type' => 'integer', 'locationName' => 'type', ],
                'cleanThresholdBps' => [ 'type' => 'long', 'locationName' => 'cleanThresholdBps', ],
                'cleanThresholdPps' => [ 'type' => 'long', 'locationName' => 'cleanThresholdPps', ],
                'spoofIpEnable' => [ 'type' => 'integer', 'locationName' => 'spoofIpEnable', ],
                'srcNewConnLimitEnable' => [ 'type' => 'integer', 'locationName' => 'srcNewConnLimitEnable', ],
                'srcNewConnLimitValue' => [ 'type' => 'long', 'locationName' => 'srcNewConnLimitValue', ],
                'dstNewConnLimitEnable' => [ 'type' => 'integer', 'locationName' => 'dstNewConnLimitEnable', ],
                'dstNewConnLimitValue' => [ 'type' => 'long', 'locationName' => 'dstNewConnLimitValue', ],
                'datagramRangeMin' => [ 'type' => 'long', 'locationName' => 'datagramRangeMin', ],
                'datagramRangeMax' => [ 'type' => 'long', 'locationName' => 'datagramRangeMax', ],
                'geoBlackList' => [ 'type' => 'list', 'member' => [ 'shape' => 'GeoBlack', ], ],
                'ipBlackList' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'ipWhiteList' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'ProtectionRuleSpec' => [
            'type' => 'structure',
            'members' => [
                'ip' => [ 'type' => 'string', 'locationName' => 'ip', ],
                'type' => [ 'type' => 'integer', 'locationName' => 'type', ],
                'cleanThresholdBps' => [ 'type' => 'long', 'locationName' => 'cleanThresholdBps', ],
                'cleanThresholdPps' => [ 'type' => 'long', 'locationName' => 'cleanThresholdPps', ],
                'spoofIpEnable' => [ 'type' => 'integer', 'locationName' => 'spoofIpEnable', ],
                'srcNewConnLimitEnable' => [ 'type' => 'integer', 'locationName' => 'srcNewConnLimitEnable', ],
                'srcNewConnLimitValue' => [ 'type' => 'long', 'locationName' => 'srcNewConnLimitValue', ],
                'dstNewConnLimitEnable' => [ 'type' => 'integer', 'locationName' => 'dstNewConnLimitEnable', ],
                'dstNewConnLimitValue' => [ 'type' => 'long', 'locationName' => 'dstNewConnLimitValue', ],
                'datagramRangeMin' => [ 'type' => 'long', 'locationName' => 'datagramRangeMin', ],
                'datagramRangeMax' => [ 'type' => 'long', 'locationName' => 'datagramRangeMax', ],
                'geoBlackList' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'ipBlackList' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'ipWhiteList' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'DescribeAttackStatisticsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeAttackStatisticsResultShape', ],
                'error' =>  [ 'shape' => 'DescribeAttackStatisticsResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeIpMonitorFlowResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeIpMonitorFlowResultShape', ],
                'error' =>  [ 'shape' => 'DescribeIpMonitorFlowResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeAttackTypeCountResultShape' => [
            'type' => 'structure',
            'members' => [
                'dataList' => [ 'type' => 'list', 'member' => [ 'shape' => 'AttackTypeCount', ], ],
            ],
        ],
        'DescribeAttackTypeCountResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeAttackTypeCountResultShape', ],
                'error' =>  [ 'shape' => 'DescribeAttackTypeCountResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeIpMonitorFlowRequestShape' => [
            'type' => 'structure',
            'members' => [
                'startTime' => [ 'type' => 'string', 'locationName' => 'startTime', ],
                'endTime' => [ 'type' => 'string', 'locationName' => 'endTime', ],
                'ip' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'DescribeIpMonitorFlowResultShape' => [
            'type' => 'structure',
            'members' => [
                'bps' =>  [ 'shape' => 'IpResourceFlow', ],
                'pps' =>  [ 'shape' => 'IpResourceFlow', ],
            ],
        ],
        'DescribeAttackLogsResultShape' => [
            'type' => 'structure',
            'members' => [
                'dataList' => [ 'type' => 'list', 'member' => [ 'shape' => 'AttackLog', ], ],
                'currentCount' => [ 'type' => 'integer', 'locationName' => 'currentCount', ],
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
                'totalPage' => [ 'type' => 'integer', 'locationName' => 'totalPage', ],
            ],
        ],
        'DescribeAttackStatisticsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'startTime' => [ 'type' => 'string', 'locationName' => 'startTime', ],
                'endTime' => [ 'type' => 'string', 'locationName' => 'endTime', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'ip' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'DescribeAttackStatisticsResultShape' => [
            'type' => 'structure',
            'members' => [
                'attackCount' => [ 'type' => 'integer', 'locationName' => 'attackCount', ],
                'blackHoleCount' => [ 'type' => 'integer', 'locationName' => 'blackHoleCount', ],
                'peak' => [ 'type' => 'double', 'locationName' => 'peak', ],
                'unit' => [ 'type' => 'string', 'locationName' => 'unit', ],
            ],
        ],
        'Err' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'long', 'locationName' => 'code', ],
                'details' => [ 'type' => 'object', 'locationName' => 'details', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
            ],
        ],
        'DescribeAttackSourceRequestShape' => [
            'type' => 'structure',
            'members' => [
                'ip' => [ 'type' => 'string', 'locationName' => 'ip', ],
                'attackLogId' => [ 'type' => 'string', 'locationName' => 'attackLogId', ],
            ],
        ],
        'DescribeAttackTypeCountRequestShape' => [
            'type' => 'structure',
            'members' => [
                'startTime' => [ 'type' => 'string', 'locationName' => 'startTime', ],
                'endTime' => [ 'type' => 'string', 'locationName' => 'endTime', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'ip' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'DescribeAttackSourceResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeAttackSourceResultShape', ],
                'error' =>  [ 'shape' => 'DescribeAttackSourceResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeAttackLogsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeAttackLogsResultShape', ],
                'error' =>  [ 'shape' => 'DescribeAttackLogsResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeAttackSourceResultShape' => [
            'type' => 'structure',
            'members' => [
                'data' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'DescribeAttackLogsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'startTime' => [ 'type' => 'string', 'locationName' => 'startTime', ],
                'endTime' => [ 'type' => 'string', 'locationName' => 'endTime', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'ip' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'DescribeProtectedIpListResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeProtectedIpListResultShape', ],
                'error' =>  [ 'shape' => 'DescribeProtectedIpListResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ModifyInstanceNameResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'integer', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
            ],
        ],
        'DescribeProtectedIpListResultShape' => [
            'type' => 'structure',
            'members' => [
                'dataList' => [ 'type' => 'list', 'member' => [ 'shape' => 'ProtectedIp', ], ],
                'currentCount' => [ 'type' => 'integer', 'locationName' => 'currentCount', ],
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
                'totalPage' => [ 'type' => 'integer', 'locationName' => 'totalPage', ],
            ],
        ],
        'ModifyInstanceNameRequestShape' => [
            'type' => 'structure',
            'members' => [
                'modifyInstanceNameSpec' =>  [ 'shape' => 'ModifyInstanceNameSpec', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'ModifyInstanceNameResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'ModifyInstanceNameResultShape', ],
                'error' =>  [ 'shape' => 'ModifyInstanceNameResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeProtectionRuleRequestShape' => [
            'type' => 'structure',
            'members' => [
                'ip' => [ 'type' => 'string', 'locationName' => 'ip', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'CheckInstanceNameResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'integer', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
            ],
        ],
        'DescribeGeoAreasResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeGeoAreasResultShape', ],
                'error' =>  [ 'shape' => 'DescribeGeoAreasResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'CreateInstanceResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'CreateInstanceResultShape', ],
                'error' =>  [ 'shape' => 'CreateInstanceResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'CreateInstanceRequestShape' => [
            'type' => 'structure',
            'members' => [
                'createInstanceSpec' =>  [ 'shape' => 'CreateInstanceSpec', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DescribeProtectionRuleResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeProtectionRuleResultShape', ],
                'error' =>  [ 'shape' => 'DescribeProtectionRuleResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'AddProtectedIpResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'AddProtectedIpResultShape', ],
                'error' =>  [ 'shape' => 'AddProtectedIpResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeProtectionOutlineResultShape' => [
            'type' => 'structure',
            'members' => [
                'data' =>  [ 'shape' => 'ProtectionOutline', ],
            ],
        ],
        'CreateInstanceResultShape' => [
            'type' => 'structure',
            'members' => [
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'ModifyProtectionRuleResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'ModifyProtectionRuleResultShape', ],
                'error' =>  [ 'shape' => 'ModifyProtectionRuleResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ModifyProtectionRuleResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'integer', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
            ],
        ],
        'CheckInstanceNameResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'CheckInstanceNameResultShape', ],
                'error' =>  [ 'shape' => 'CheckInstanceNameResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ModifyInstanceRequestShape' => [
            'type' => 'structure',
            'members' => [
                'modifyInstanceSpec' =>  [ 'shape' => 'ModifyInstanceSpec', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'DescribeGeoAreasRequestShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'ModifyInstanceResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'ModifyInstanceResultShape', ],
                'error' =>  [ 'shape' => 'ModifyInstanceResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'AddProtectedIpResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'integer', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
            ],
        ],
        'CheckInstanceNameRequestShape' => [
            'type' => 'structure',
            'members' => [
                'instanceName' => [ 'type' => 'string', 'locationName' => 'instanceName', ],
            ],
        ],
        'DescribeProtectionOutlineResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeProtectionOutlineResultShape', ],
                'error' =>  [ 'shape' => 'DescribeProtectionOutlineResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeProtectionOutlineRequestShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'ModifyProtectionRuleRequestShape' => [
            'type' => 'structure',
            'members' => [
                'protectionRuleSpec' =>  [ 'shape' => 'ProtectionRuleSpec', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'DescribeGeoAreasResultShape' => [
            'type' => 'structure',
            'members' => [
                'dataList' => [ 'type' => 'list', 'member' => [ 'shape' => 'Country', ], ],
            ],
        ],
        'DescribeInstanceRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'DescribeInstancesResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeInstancesResultShape', ],
                'error' =>  [ 'shape' => 'DescribeInstancesResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DeleteProtectedIpResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'integer', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
            ],
        ],
        'DescribeInstanceResultShape' => [
            'type' => 'structure',
            'members' => [
                'data' =>  [ 'shape' => 'Instance', ],
            ],
        ],
        'DescribeProtectionRuleResultShape' => [
            'type' => 'structure',
            'members' => [
                'data' =>  [ 'shape' => 'ProtectionRule', ],
            ],
        ],
        'AddProtectedIpRequestShape' => [
            'type' => 'structure',
            'members' => [
                'protectedIpSpec' =>  [ 'shape' => 'ProtectedIpSpec', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'DeleteProtectedIpResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DeleteProtectedIpResultShape', ],
                'error' =>  [ 'shape' => 'DeleteProtectedIpResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeInstanceResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeInstanceResultShape', ],
                'error' =>  [ 'shape' => 'DescribeInstanceResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ModifyInstanceResultShape' => [
            'type' => 'structure',
            'members' => [
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'DescribeInstancesResultShape' => [
            'type' => 'structure',
            'members' => [
                'dataList' => [ 'type' => 'list', 'member' => [ 'shape' => 'Instance', ], ],
                'currentCount' => [ 'type' => 'integer', 'locationName' => 'currentCount', ],
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
                'totalPage' => [ 'type' => 'integer', 'locationName' => 'totalPage', ],
            ],
        ],
        'DescribeInstancesRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DeleteProtectedIpRequestShape' => [
            'type' => 'structure',
            'members' => [
                'protectedIpSpec' =>  [ 'shape' => 'ProtectedIpSpec', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'DescribeProtectedIpListRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'instanceId' => [ 'type' => 'integer', 'locationName' => 'instanceId', ],
                'type' => [ 'type' => 'integer', 'locationName' => 'type', ],
                'ip' => [ 'type' => 'string', 'locationName' => 'ip', ],
            ],
        ],
        'DescribeCpsIpResourcesRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DescribeElasticIpResourcesResultShape' => [
            'type' => 'structure',
            'members' => [
                'dataList' => [ 'type' => 'list', 'member' => [ 'shape' => 'IpResource', ], ],
                'currentCount' => [ 'type' => 'integer', 'locationName' => 'currentCount', ],
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
                'totalPage' => [ 'type' => 'integer', 'locationName' => 'totalPage', ],
            ],
        ],
        'DescribeCcsIpResourcesResultShape' => [
            'type' => 'structure',
            'members' => [
                'dataList' => [ 'type' => 'list', 'member' => [ 'shape' => 'IpResource', ], ],
                'currentCount' => [ 'type' => 'integer', 'locationName' => 'currentCount', ],
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
                'totalPage' => [ 'type' => 'integer', 'locationName' => 'totalPage', ],
            ],
        ],
        'DescribeElasticIpResourcesResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeElasticIpResourcesResultShape', ],
                'error' =>  [ 'shape' => 'DescribeElasticIpResourcesResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeCcsIpResourcesResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeCcsIpResourcesResultShape', ],
                'error' =>  [ 'shape' => 'DescribeCcsIpResourcesResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeCpsIpResourcesResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeCpsIpResourcesResultShape', ],
                'error' =>  [ 'shape' => 'DescribeCpsIpResourcesResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeElasticIpResourcesRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DescribeCpsIpResourcesResultShape' => [
            'type' => 'structure',
            'members' => [
                'dataList' => [ 'type' => 'list', 'member' => [ 'shape' => 'IpResource', ], ],
                'currentCount' => [ 'type' => 'integer', 'locationName' => 'currentCount', ],
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
                'totalPage' => [ 'type' => 'integer', 'locationName' => 'totalPage', ],
            ],
        ],
        'DescribeCcsIpResourcesRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DescribeOperationRecordsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'startTime' => [ 'type' => 'string', 'locationName' => 'startTime', ],
                'endTime' => [ 'type' => 'string', 'locationName' => 'endTime', ],
                'action' => [ 'type' => 'integer', 'locationName' => 'action', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
            ],
        ],
        'DescribeOperationRecordsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeOperationRecordsResultShape', ],
                'error' =>  [ 'shape' => 'DescribeOperationRecordsResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeOperationRecordsResultShape' => [
            'type' => 'structure',
            'members' => [
                'dataList' => [ 'type' => 'list', 'member' => [ 'shape' => 'OperationRecord', ], ],
                'currentCount' => [ 'type' => 'integer', 'locationName' => 'currentCount', ],
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
                'totalPage' => [ 'type' => 'integer', 'locationName' => 'totalPage', ],
            ],
        ],
    ],
];
