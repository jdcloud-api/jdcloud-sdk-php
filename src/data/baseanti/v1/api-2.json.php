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
        'DescribeIpResources' => [
            'name' => 'DescribeIpResources',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/ipResources',
            ],
            'input' => [ 'shape' => 'DescribeIpResourcesRequestShape', ],
            'output' => [ 'shape' => 'DescribeIpResourcesResponseShape', ],
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
        'SetCleanThreshold' => [
            'name' => 'SetCleanThreshold',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/ipResources/{ip}:setCleanThreshold',
            ],
            'input' => [ 'shape' => 'SetCleanThresholdRequestShape', ],
            'output' => [ 'shape' => 'SetCleanThresholdResponseShape', ],
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
        'CleanThresholdSpec' => [
            'type' => 'structure',
            'members' => [
                'cleanThresholdBps' => [ 'type' => 'long', 'locationName' => 'cleanThresholdBps', ],
                'cleanThresholdPps' => [ 'type' => 'long', 'locationName' => 'cleanThresholdPps', ],
            ],
        ],
        'IpResource' => [
            'type' => 'structure',
            'members' => [
                'ip' => [ 'type' => 'string', 'locationName' => 'ip', ],
                'bandwidth' => [ 'type' => 'integer', 'locationName' => 'bandwidth', ],
                'safeStatus' => [ 'type' => 'integer', 'locationName' => 'safeStatus', ],
            ],
        ],
        'IpResourceFlow' => [
            'type' => 'structure',
            'members' => [
                'bps' =>  [ 'shape' => 'IpResourceFlowDetail', ],
                'pps' =>  [ 'shape' => 'IpResourceFlowDetail', ],
            ],
        ],
        'IpResourceFlowDetail' => [
            'type' => 'structure',
            'members' => [
                'used' => [ 'type' => 'list', 'member' => [ 'type' => 'integer', ], ],
                'times' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
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
        'DescribeIpResourceProtectInfoResultShape' => [
            'type' => 'structure',
            'members' => [
                'dataList' => [ 'type' => 'list', 'member' => [ 'shape' => 'IpResourceProtectInfo', ], ],
            ],
        ],
        'DescribeIpResourceInfoResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeIpResourceInfoResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeIpResourcesResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeIpResourcesResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'SetCleanThresholdResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DescribeIpResourceFlowResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeIpResourceFlowResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeIpResourceInfoRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'ip' => [ 'type' => 'string', 'locationName' => 'ip', ],
            ],
        ],
        'DescribeIpResourceInfoResultShape' => [
            'type' => 'structure',
            'members' => [
                'data' =>  [ 'shape' => 'IpResourceInfo', ],
            ],
        ],
        'DescribeIpResourceFlowResultShape' => [
            'type' => 'structure',
            'members' => [
                'data' =>  [ 'shape' => 'IpResourceFlow', ],
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
        'DescribeIpResourceProtectInfoResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeIpResourceProtectInfoResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'SetCleanThresholdResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
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
        'DescribeIpResourceFlowRequestShape' => [
            'type' => 'structure',
            'members' => [
                'endTime' => [ 'type' => 'string', 'locationName' => 'endTime', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'ip' => [ 'type' => 'string', 'locationName' => 'ip', ],
            ],
        ],
    ],
];
