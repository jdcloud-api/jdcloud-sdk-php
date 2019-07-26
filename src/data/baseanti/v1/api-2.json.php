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
                'peak' => [ 'type' => 'float64', 'locationName' => 'peak', ],
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
        'CleanThresholdSpec' => [
            'type' => 'structure',
            'members' => [
                'cleanThresholdBps' => [ 'type' => 'long', 'locationName' => 'cleanThresholdBps', ],
                'cleanThresholdPps' => [ 'type' => 'long', 'locationName' => 'cleanThresholdPps', ],
            ],
        ],
        'IpCleanThresholdRange' => [
            'type' => 'structure',
            'members' => [
                'ipCleanThresholdBpsMax' => [ 'type' => 'int64', 'locationName' => 'ipCleanThresholdBpsMax', ],
                'ipCleanThresholdBpsMin' => [ 'type' => 'int64', 'locationName' => 'ipCleanThresholdBpsMin', ],
                'ipCleanThresholdPpsMax' => [ 'type' => 'int64', 'locationName' => 'ipCleanThresholdPpsMax', ],
                'ipCleanThresholdPpsMin' => [ 'type' => 'int64', 'locationName' => 'ipCleanThresholdPpsMin', ],
            ],
        ],
        'IpCleanThresholdSpec' => [
            'type' => 'structure',
            'members' => [
                'ip' => [ 'type' => 'string', 'locationName' => 'ip', ],
                'cleanThresholdBps' => [ 'type' => 'long', 'locationName' => 'cleanThresholdBps', ],
                'cleanThresholdPps' => [ 'type' => 'long', 'locationName' => 'cleanThresholdPps', ],
            ],
        ],
        'IpResource' => [
            'type' => 'structure',
            'members' => [
                'region' => [ 'type' => 'string', 'locationName' => 'region', ],
                'resourceType' => [ 'type' => 'integer', 'locationName' => 'resourceType', ],
                'ip' => [ 'type' => 'string', 'locationName' => 'ip', ],
                'bandwidth' => [ 'type' => 'long', 'locationName' => 'bandwidth', ],
                'cleanThresholdBps' => [ 'type' => 'long', 'locationName' => 'cleanThresholdBps', ],
                'cleanThresholdPps' => [ 'type' => 'long', 'locationName' => 'cleanThresholdPps', ],
                'blackHoleThreshold' => [ 'type' => 'long', 'locationName' => 'blackHoleThreshold', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'instanceName' => [ 'type' => 'string', 'locationName' => 'instanceName', ],
                'instanceType' => [ 'type' => 'integer', 'locationName' => 'instanceType', ],
                'safeStatus' => [ 'type' => 'integer', 'locationName' => 'safeStatus', ],
            ],
        ],
        'IpResourceFlow' => [
            'type' => 'structure',
            'members' => [
                'time' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'postProtect' => [ 'type' => 'list', 'member' => [ 'type' => 'number', ], ],
                'preProtect' => [ 'type' => 'list', 'member' => [ 'type' => 'number', ], ],
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
        'IpResourceProtectInfo' => [
            'type' => 'structure',
            'members' => [
                'startTime' => [ 'type' => 'string', 'locationName' => 'startTime', ],
                'endTime' => [ 'type' => 'string', 'locationName' => 'endTime', ],
                'status' => [ 'type' => 'integer', 'locationName' => 'status', ],
                'cause' => [ 'type' => 'integer', 'locationName' => 'cause', ],
            ],
        ],
        'IpSafetyInfo' => [
            'type' => 'structure',
            'members' => [
                'ip' => [ 'type' => 'string', 'locationName' => 'ip', ],
                'safetyStatus' => [ 'type' => 'integer', 'locationName' => 'safetyStatus', ],
                'region' => [ 'type' => 'string', 'locationName' => 'region', ],
                'blackHoleThreshold' => [ 'type' => 'long', 'locationName' => 'blackHoleThreshold', ],
                'cleanThresholdBps' => [ 'type' => 'long', 'locationName' => 'cleanThresholdBps', ],
                'cleanThresholdPps' => [ 'type' => 'long', 'locationName' => 'cleanThresholdPps', ],
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
        'DescribeAttackTypeCountRequestShape' => [
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
        'DescribeIpMonitorFlowResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeIpMonitorFlowResultShape', ],
                'error' =>  [ 'shape' => 'DescribeIpMonitorFlowResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
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
        'DescribeAttackTypeCountResultShape' => [
            'type' => 'structure',
            'members' => [
                'dataList' => [ 'type' => 'list', 'member' => [ 'shape' => 'AttackTypeCount', ], ],
            ],
        ],
        'DescribeAttackLogsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'startTime' => [ 'type' => 'string', 'locationName' => 'startTime', ],
                'endTime' => [ 'type' => 'string', 'locationName' => 'endTime', ],
                'ip' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'DescribeAttackStatisticsResultShape' => [
            'type' => 'structure',
            'members' => [
                'attackCount' => [ 'type' => 'integer', 'locationName' => 'attackCount', ],
                'blackHoleCount' => [ 'type' => 'integer', 'locationName' => 'blackHoleCount', ],
                'peak' => [ 'type' => 'float64', 'locationName' => 'peak', ],
                'unit' => [ 'type' => 'string', 'locationName' => 'unit', ],
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
        'DescribeAttackLogsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeAttackLogsResultShape', ],
                'error' =>  [ 'shape' => 'DescribeAttackLogsResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeAttackStatisticsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'startTime' => [ 'type' => 'string', 'locationName' => 'startTime', ],
                'endTime' => [ 'type' => 'string', 'locationName' => 'endTime', ],
                'ip' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
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
        'Err' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'long', 'locationName' => 'code', ],
                'details' => [ 'type' => 'object', 'locationName' => 'details', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
            ],
        ],
        'DescribeIpResourceFlowResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeIpResourceFlowResultShape', ],
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
        'DescribeElasticIpResourcesResultShape' => [
            'type' => 'structure',
            'members' => [
                'dataList' => [ 'type' => 'list', 'member' => [ 'shape' => 'IpResource', ], ],
                'currentCount' => [ 'type' => 'integer', 'locationName' => 'currentCount', ],
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
                'totalPage' => [ 'type' => 'integer', 'locationName' => 'totalPage', ],
            ],
        ],
        'SetCleanThresholdResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DescribeIpResourceInfoResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeIpResourceInfoResultShape', ],
                'error' =>  [ 'shape' => 'DescribeIpResourceInfoResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
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
        'SetCleanThresholdResponseShape' => [
            'type' => 'structure',
            'members' => [
                'error' =>  [ 'shape' => 'SetCleanThresholdResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
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
        'DescribeIpSafetyInfoRequestShape' => [
            'type' => 'structure',
            'members' => [
                'ip' => [ 'type' => 'string', 'locationName' => 'ip', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
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
        'SetCleanThresholdRequestShape' => [
            'type' => 'structure',
            'members' => [
                'cleanThresholdSpec' =>  [ 'shape' => 'CleanThresholdSpec', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'ip' => [ 'type' => 'string', 'locationName' => 'ip', ],
            ],
        ],
        'DescribeIpCleanThresholdRangeRequestShape' => [
            'type' => 'structure',
            'members' => [
                'ip' => [ 'type' => 'string', 'locationName' => 'ip', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DescribeIpResourceInfoResultShape' => [
            'type' => 'structure',
            'members' => [
                'data' =>  [ 'shape' => 'IpResourceInfo', ],
            ],
        ],
        'DescribeIpResourceInfoRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'ip' => [ 'type' => 'string', 'locationName' => 'ip', ],
            ],
        ],
        'DescribeIpSafetyInfoResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeIpSafetyInfoResultShape', ],
                'error' =>  [ 'shape' => 'DescribeIpSafetyInfoResultShape', ],
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
        'DescribeCpsIpResourcesRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'SetIpCleanThresholdResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'integer', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
            ],
        ],
        'DescribeIpResourceProtectInfoResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeIpResourceProtectInfoResultShape', ],
                'error' =>  [ 'shape' => 'DescribeIpResourceProtectInfoResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'SetIpCleanThresholdRequestShape' => [
            'type' => 'structure',
            'members' => [
                'ipCleanThresholdSpec' =>  [ 'shape' => 'IpCleanThresholdSpec', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
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
        'DescribeIpResourceFlowRequestShape' => [
            'type' => 'structure',
            'members' => [
                'endTime' => [ 'type' => 'string', 'locationName' => 'endTime', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'ip' => [ 'type' => 'string', 'locationName' => 'ip', ],
            ],
        ],
        'DescribeIpResourcesRequestShape' => [
            'type' => 'structure',
            'members' => [
                'ip' => [ 'type' => 'string', 'locationName' => 'ip', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DescribeIpResourcesResultShape' => [
            'type' => 'structure',
            'members' => [
                'dataList' => [ 'type' => 'list', 'member' => [ 'shape' => 'IpResource', ], ],
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
            ],
        ],
        'DescribeIpResourceProtectInfoResultShape' => [
            'type' => 'structure',
            'members' => [
                'dataList' => [ 'type' => 'list', 'member' => [ 'shape' => 'IpResourceProtectInfo', ], ],
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
        'SetIpCleanThresholdResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'SetIpCleanThresholdResultShape', ],
                'error' =>  [ 'shape' => 'SetIpCleanThresholdResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeIpCleanThresholdRangeResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeIpCleanThresholdRangeResultShape', ],
                'error' =>  [ 'shape' => 'DescribeIpCleanThresholdRangeResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeIpResourceProtectInfoRequestShape' => [
            'type' => 'structure',
            'members' => [
                'start' => [ 'type' => 'integer', 'locationName' => 'start', ],
                'limit' => [ 'type' => 'integer', 'locationName' => 'limit', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'ip' => [ 'type' => 'string', 'locationName' => 'ip', ],
            ],
        ],
        'DescribeIpResourcesResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeIpResourcesResultShape', ],
                'error' =>  [ 'shape' => 'DescribeIpResourcesResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeIpCleanThresholdRangeResultShape' => [
            'type' => 'structure',
            'members' => [
                'data' =>  [ 'shape' => 'IpCleanThresholdRange', ],
            ],
        ],
        'DescribeIpSafetyInfoResultShape' => [
            'type' => 'structure',
            'members' => [
                'data' =>  [ 'shape' => 'IpSafetyInfo', ],
            ],
        ],
        'DescribeIpResourceFlowResultShape' => [
            'type' => 'structure',
            'members' => [
                'bps' =>  [ 'shape' => 'IpResourceFlow', ],
                'pps' =>  [ 'shape' => 'IpResourceFlow', ],
            ],
        ],
    ],
];
