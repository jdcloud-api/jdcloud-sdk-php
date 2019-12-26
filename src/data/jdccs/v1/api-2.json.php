<?php
// This file was auto-generated
return [
//    'version' => '',
    'metadata' =>
    [
//        'apiVersion' => '',
//        'endpointPrefix' => 'jdccs',
        'protocol' => 'json',
//        'serviceFullName' => 'jdccs',
//        'serviceId' => 'jdccs',
    ],
    'operations' => [
        'DescribeMetrics' => [
            'name' => 'DescribeMetrics',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/metrics',
            ],
            'input' => [ 'shape' => 'DescribeMetricsRequestShape', ],
            'output' => [ 'shape' => 'DescribeMetricsResponseShape', ],
        ],
        'DescribeMetricData' => [
            'name' => 'DescribeMetricData',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/idcs/{idc}/metrics/{metric}/metricData',
            ],
            'input' => [ 'shape' => 'DescribeMetricDataRequestShape', ],
            'output' => [ 'shape' => 'DescribeMetricDataResponseShape', ],
        ],
        'LastDownsample' => [
            'name' => 'LastDownsample',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/idcs/{idc}/metrics/{metric}/lastDownsample',
            ],
            'input' => [ 'shape' => 'LastDownsampleRequestShape', ],
            'output' => [ 'shape' => 'LastDownsampleResponseShape', ],
        ],
        'DescribeBandwidthTraffics' => [
            'name' => 'DescribeBandwidthTraffics',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/idcs/{idc}/bandwidthTraffics',
            ],
            'input' => [ 'shape' => 'DescribeBandwidthTrafficsRequestShape', ],
            'output' => [ 'shape' => 'DescribeBandwidthTrafficsResponseShape', ],
        ],
        'DescribeBandwidthTraffic' => [
            'name' => 'DescribeBandwidthTraffic',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/idcs/{idc}/bandwidthTraffics/{bandwidthId}',
            ],
            'input' => [ 'shape' => 'DescribeBandwidthTrafficRequestShape', ],
            'output' => [ 'shape' => 'DescribeBandwidthTrafficResponseShape', ],
        ],
        'DescribeIdcs' => [
            'name' => 'DescribeIdcs',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/idcs',
            ],
            'input' => [ 'shape' => 'DescribeIdcsRequestShape', ],
            'output' => [ 'shape' => 'DescribeIdcsResponseShape', ],
        ],
        'DescribeRooms' => [
            'name' => 'DescribeRooms',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/idcs/{idc}/rooms',
            ],
            'input' => [ 'shape' => 'DescribeRoomsRequestShape', ],
            'output' => [ 'shape' => 'DescribeRoomsResponseShape', ],
        ],
        'DescribeCabinets' => [
            'name' => 'DescribeCabinets',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/idcs/{idc}/cabinets',
            ],
            'input' => [ 'shape' => 'DescribeCabinetsRequestShape', ],
            'output' => [ 'shape' => 'DescribeCabinetsResponseShape', ],
        ],
    ],
    'shapes' => [
        'Alarm' => [
            'type' => 'structure',
            'members' => [
                'alarmId' => [ 'type' => 'string', 'locationName' => 'alarmId', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'idc' => [ 'type' => 'string', 'locationName' => 'idc', ],
                'idcName' => [ 'type' => 'string', 'locationName' => 'idcName', ],
                'resourceType' => [ 'type' => 'string', 'locationName' => 'resourceType', ],
                'resourceId' => [ 'type' => 'string', 'locationName' => 'resourceId', ],
                'resourceName' => [ 'type' => 'string', 'locationName' => 'resourceName', ],
                'metric' => [ 'type' => 'string', 'locationName' => 'metric', ],
                'metricName' => [ 'type' => 'string', 'locationName' => 'metricName', ],
                'period' => [ 'type' => 'integer', 'locationName' => 'period', ],
                'statisticMethod' => [ 'type' => 'string', 'locationName' => 'statisticMethod', ],
                'operator' => [ 'type' => 'string', 'locationName' => 'operator', ],
                'threshold' => [ 'type' => 'double', 'locationName' => 'threshold', ],
                'times' => [ 'type' => 'integer', 'locationName' => 'times', ],
                'noticePeriod' => [ 'type' => 'integer', 'locationName' => 'noticePeriod', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'switchboard' => [ 'type' => 'list', 'member' => [ 'type' => 'object', ], ],
            ],
        ],
        'AlarmHistory' => [
            'type' => 'structure',
            'members' => [
                'alarmId' => [ 'type' => 'string', 'locationName' => 'alarmId', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'idc' => [ 'type' => 'string', 'locationName' => 'idc', ],
                'idcName' => [ 'type' => 'string', 'locationName' => 'idcName', ],
                'resourceType' => [ 'type' => 'string', 'locationName' => 'resourceType', ],
                'resourceId' => [ 'type' => 'string', 'locationName' => 'resourceId', ],
                'resourceName' => [ 'type' => 'string', 'locationName' => 'resourceName', ],
                'metric' => [ 'type' => 'string', 'locationName' => 'metric', ],
                'metricName' => [ 'type' => 'string', 'locationName' => 'metricName', ],
                'period' => [ 'type' => 'integer', 'locationName' => 'period', ],
                'statisticMethod' => [ 'type' => 'string', 'locationName' => 'statisticMethod', ],
                'operator' => [ 'type' => 'string', 'locationName' => 'operator', ],
                'threshold' => [ 'type' => 'double', 'locationName' => 'threshold', ],
                'times' => [ 'type' => 'integer', 'locationName' => 'times', ],
                'noticePeriod' => [ 'type' => 'integer', 'locationName' => 'noticePeriod', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'switchboard' => [ 'type' => 'list', 'member' => [ 'type' => 'object', ], ],
                'alarmStatus' => [ 'type' => 'string', 'locationName' => 'alarmStatus', ],
                'value' => [ 'type' => 'double', 'locationName' => 'value', ],
                'noticeTime' => [ 'type' => 'string', 'locationName' => 'noticeTime', ],
            ],
        ],
        'Bandwidth' => [
            'type' => 'structure',
            'members' => [
                'idc' => [ 'type' => 'string', 'locationName' => 'idc', ],
                'idcName' => [ 'type' => 'string', 'locationName' => 'idcName', ],
                'bandwidthId' => [ 'type' => 'string', 'locationName' => 'bandwidthId', ],
                'bandwidthName' => [ 'type' => 'string', 'locationName' => 'bandwidthName', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'lineType' => [ 'type' => 'integer', 'locationName' => 'lineType', ],
                'bandwidth' => [ 'type' => 'integer', 'locationName' => 'bandwidth', ],
                'relatedIp' => [ 'type' => 'list', 'member' => [ 'type' => 'object', ], ],
                'switchboard' => [ 'type' => 'list', 'member' => [ 'type' => 'object', ], ],
            ],
        ],
        'BandwidthTraffic' => [
            'type' => 'structure',
            'members' => [
                'idc' => [ 'type' => 'string', 'locationName' => 'idc', ],
                'idcName' => [ 'type' => 'string', 'locationName' => 'idcName', ],
                'bandwidthId' => [ 'type' => 'string', 'locationName' => 'bandwidthId', ],
                'bandwidthName' => [ 'type' => 'string', 'locationName' => 'bandwidthName', ],
                'totalTrafficIn' => [ 'type' => 'double', 'locationName' => 'totalTrafficIn', ],
                'totalTrafficOut' => [ 'type' => 'double', 'locationName' => 'totalTrafficOut', ],
                'bandwidth' => [ 'type' => 'integer', 'locationName' => 'bandwidth', ],
                'lineType' => [ 'type' => 'string', 'locationName' => 'lineType', ],
                'relatedIp' => [ 'type' => 'list', 'member' => [ 'type' => 'object', ], ],
                'switchboard' => [ 'type' => 'list', 'member' => [ 'type' => 'object', ], ],
            ],
        ],
        'Cabinet' => [
            'type' => 'structure',
            'members' => [
                'idc' => [ 'type' => 'string', 'locationName' => 'idc', ],
                'idcName' => [ 'type' => 'string', 'locationName' => 'idcName', ],
                'cabinetId' => [ 'type' => 'string', 'locationName' => 'cabinetId', ],
                'cabinetNo' => [ 'type' => 'string', 'locationName' => 'cabinetNo', ],
                'roomNo' => [ 'type' => 'string', 'locationName' => 'roomNo', ],
                'cabinetSpace' => [ 'type' => 'integer', 'locationName' => 'cabinetSpace', ],
                'cabinetPower' => [ 'type' => 'integer', 'locationName' => 'cabinetPower', ],
                'cabinetType' => [ 'type' => 'string', 'locationName' => 'cabinetType', ],
                'cabinetOpenStatus' => [ 'type' => 'string', 'locationName' => 'cabinetOpenStatus', ],
                'cabinetOpenTime' => [ 'type' => 'string', 'locationName' => 'cabinetOpenTime', ],
                'expireTime' => [ 'type' => 'string', 'locationName' => 'expireTime', ],
                'reserveStartTime' => [ 'type' => 'string', 'locationName' => 'reserveStartTime', ],
                'reserveEndTime' => [ 'type' => 'string', 'locationName' => 'reserveEndTime', ],
                'deviceNum' => [ 'type' => 'integer', 'locationName' => 'deviceNum', ],
                'rackUOccupy' => [ 'type' => 'integer', 'locationName' => 'rackUOccupy', ],
                'rackUFree' => [ 'type' => 'integer', 'locationName' => 'rackUFree', ],
                'billingType' => [ 'type' => 'integer', 'locationName' => 'billingType', ],
            ],
        ],
        'DataPoint' => [
            'type' => 'structure',
            'members' => [
                'timestamp' => [ 'type' => 'integer', 'locationName' => 'timestamp', ],
                'value' => [ 'type' => 'double', 'locationName' => 'value', ],
            ],
        ],
        'DescribeAlarm' => [
            'type' => 'structure',
            'members' => [
                'alarmId' => [ 'type' => 'string', 'locationName' => 'alarmId', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'idc' => [ 'type' => 'string', 'locationName' => 'idc', ],
                'idcName' => [ 'type' => 'string', 'locationName' => 'idcName', ],
                'resourceType' => [ 'type' => 'string', 'locationName' => 'resourceType', ],
                'resourceId' => [ 'type' => 'string', 'locationName' => 'resourceId', ],
                'resourceName' => [ 'type' => 'string', 'locationName' => 'resourceName', ],
                'metric' => [ 'type' => 'string', 'locationName' => 'metric', ],
                'metricName' => [ 'type' => 'string', 'locationName' => 'metricName', ],
                'period' => [ 'type' => 'integer', 'locationName' => 'period', ],
                'statisticMethod' => [ 'type' => 'string', 'locationName' => 'statisticMethod', ],
                'operator' => [ 'type' => 'string', 'locationName' => 'operator', ],
                'threshold' => [ 'type' => 'double', 'locationName' => 'threshold', ],
                'times' => [ 'type' => 'integer', 'locationName' => 'times', ],
                'noticePeriod' => [ 'type' => 'integer', 'locationName' => 'noticePeriod', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'switchboard' => [ 'type' => 'list', 'member' => [ 'type' => 'object', ], ],
            ],
        ],
        'DescribeBandwidth' => [
            'type' => 'structure',
            'members' => [
                'idc' => [ 'type' => 'string', 'locationName' => 'idc', ],
                'idcName' => [ 'type' => 'string', 'locationName' => 'idcName', ],
                'bandwidthId' => [ 'type' => 'string', 'locationName' => 'bandwidthId', ],
                'bandwidthName' => [ 'type' => 'string', 'locationName' => 'bandwidthName', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'lineType' => [ 'type' => 'integer', 'locationName' => 'lineType', ],
                'bandwidth' => [ 'type' => 'integer', 'locationName' => 'bandwidth', ],
                'relatedIp' => [ 'type' => 'list', 'member' => [ 'type' => 'object', ], ],
            ],
        ],
        'DescribeBandwidthTraffic' => [
            'type' => 'structure',
            'members' => [
                'idc' => [ 'type' => 'string', 'locationName' => 'idc', ],
                'idcName' => [ 'type' => 'string', 'locationName' => 'idcName', ],
                'bandwidthId' => [ 'type' => 'string', 'locationName' => 'bandwidthId', ],
                'bandwidthName' => [ 'type' => 'string', 'locationName' => 'bandwidthName', ],
                'totalTrafficIn' => [ 'type' => 'double', 'locationName' => 'totalTrafficIn', ],
                'totalTrafficOut' => [ 'type' => 'double', 'locationName' => 'totalTrafficOut', ],
                'bandwidth' => [ 'type' => 'integer', 'locationName' => 'bandwidth', ],
            ],
        ],
        'DescribeCabinet' => [
            'type' => 'structure',
            'members' => [
                'idc' => [ 'type' => 'string', 'locationName' => 'idc', ],
                'idcName' => [ 'type' => 'string', 'locationName' => 'idcName', ],
                'cabinetId' => [ 'type' => 'string', 'locationName' => 'cabinetId', ],
                'cabinetNo' => [ 'type' => 'string', 'locationName' => 'cabinetNo', ],
                'roomNo' => [ 'type' => 'string', 'locationName' => 'roomNo', ],
                'cabinetSpace' => [ 'type' => 'integer', 'locationName' => 'cabinetSpace', ],
                'cabinetPower' => [ 'type' => 'integer', 'locationName' => 'cabinetPower', ],
                'cabinetType' => [ 'type' => 'string', 'locationName' => 'cabinetType', ],
                'cabinetOpenStatus' => [ 'type' => 'string', 'locationName' => 'cabinetOpenStatus', ],
                'cabinetOpenTime' => [ 'type' => 'string', 'locationName' => 'cabinetOpenTime', ],
                'expireTime' => [ 'type' => 'string', 'locationName' => 'expireTime', ],
                'reserveStartTime' => [ 'type' => 'string', 'locationName' => 'reserveStartTime', ],
                'reserveEndTime' => [ 'type' => 'string', 'locationName' => 'reserveEndTime', ],
            ],
        ],
        'DescribeDevice' => [
            'type' => 'structure',
            'members' => [
                'idc' => [ 'type' => 'string', 'locationName' => 'idc', ],
                'idcName' => [ 'type' => 'string', 'locationName' => 'idcName', ],
                'deviceId' => [ 'type' => 'string', 'locationName' => 'deviceId', ],
                'snNo' => [ 'type' => 'string', 'locationName' => 'snNo', ],
                'cabinetNo' => [ 'type' => 'string', 'locationName' => 'cabinetNo', ],
                'rackUIndex' => [ 'type' => 'string', 'locationName' => 'rackUIndex', ],
                'uNum' => [ 'type' => 'integer', 'locationName' => 'uNum', ],
                'brand' => [ 'type' => 'string', 'locationName' => 'brand', ],
                'model' => [ 'type' => 'string', 'locationName' => 'model', ],
                'deviceType' => [ 'type' => 'string', 'locationName' => 'deviceType', ],
                'assetBelong' => [ 'type' => 'string', 'locationName' => 'assetBelong', ],
                'assetStatus' => [ 'type' => 'string', 'locationName' => 'assetStatus', ],
                'deviceOpenTime' => [ 'type' => 'string', 'locationName' => 'deviceOpenTime', ],
            ],
        ],
        'Device' => [
            'type' => 'structure',
            'members' => [
                'idc' => [ 'type' => 'string', 'locationName' => 'idc', ],
                'idcName' => [ 'type' => 'string', 'locationName' => 'idcName', ],
                'deviceId' => [ 'type' => 'string', 'locationName' => 'deviceId', ],
                'snNo' => [ 'type' => 'string', 'locationName' => 'snNo', ],
                'cabinetNo' => [ 'type' => 'string', 'locationName' => 'cabinetNo', ],
                'rackUIndex' => [ 'type' => 'string', 'locationName' => 'rackUIndex', ],
                'uNum' => [ 'type' => 'integer', 'locationName' => 'uNum', ],
                'brand' => [ 'type' => 'string', 'locationName' => 'brand', ],
                'model' => [ 'type' => 'string', 'locationName' => 'model', ],
                'sysIp' => [ 'type' => 'string', 'locationName' => 'sysIp', ],
                'manageIp' => [ 'type' => 'string', 'locationName' => 'manageIp', ],
                'deviceType' => [ 'type' => 'string', 'locationName' => 'deviceType', ],
                'assetBelong' => [ 'type' => 'string', 'locationName' => 'assetBelong', ],
                'assetStatus' => [ 'type' => 'string', 'locationName' => 'assetStatus', ],
                'deviceOpenTime' => [ 'type' => 'string', 'locationName' => 'deviceOpenTime', ],
                'cpuCore' => [ 'type' => 'string', 'locationName' => 'cpuCore', ],
                'memory' => [ 'type' => 'string', 'locationName' => 'memory', ],
                'disk' => [ 'type' => 'string', 'locationName' => 'disk', ],
            ],
        ],
        'Idc' => [
            'type' => 'structure',
            'members' => [
                'idc' => [ 'type' => 'string', 'locationName' => 'idc', ],
                'idcName' => [ 'type' => 'string', 'locationName' => 'idcName', ],
            ],
        ],
        'Ip' => [
            'type' => 'structure',
            'members' => [
                'idc' => [ 'type' => 'string', 'locationName' => 'idc', ],
                'idcName' => [ 'type' => 'string', 'locationName' => 'idcName', ],
                'ipId' => [ 'type' => 'string', 'locationName' => 'ipId', ],
                'cidrAddr' => [ 'type' => 'string', 'locationName' => 'cidrAddr', ],
                'networkAddr' => [ 'type' => 'string', 'locationName' => 'networkAddr', ],
                'gatewayAddr' => [ 'type' => 'integer', 'locationName' => 'gatewayAddr', ],
                'broadcastAddr' => [ 'type' => 'integer', 'locationName' => 'broadcastAddr', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
            ],
        ],
        'LastDownsampleRespItem' => [
            'type' => 'structure',
            'members' => [
                'metric' => [ 'type' => 'string', 'locationName' => 'metric', ],
                'resourceId' => [ 'type' => 'string', 'locationName' => 'resourceId', ],
                'value' => [ 'type' => 'double', 'locationName' => 'value', ],
            ],
        ],
        'Metric' => [
            'type' => 'structure',
            'members' => [
                'metric' => [ 'type' => 'string', 'locationName' => 'metric', ],
                'metricName' => [ 'type' => 'string', 'locationName' => 'metricName', ],
            ],
        ],
        'Statistic' => [
            'type' => 'structure',
            'members' => [
                'max' => [ 'type' => 'double', 'locationName' => 'max', ],
                'min' => [ 'type' => 'double', 'locationName' => 'min', ],
                'avg' => [ 'type' => 'double', 'locationName' => 'avg', ],
            ],
        ],
        'MetricData' => [
            'type' => 'structure',
            'members' => [
                'data' => [ 'type' => 'list', 'member' => [ 'shape' => 'DataPoint', ], ],
                'statistic' =>  [ 'shape' => 'Statistic', ],
                'metric' =>  [ 'shape' => 'Metric', ],
            ],
        ],
        'Room' => [
            'type' => 'structure',
            'members' => [
                'idc' => [ 'type' => 'string', 'locationName' => 'idc', ],
                'idcName' => [ 'type' => 'string', 'locationName' => 'idcName', ],
                'roomNo' => [ 'type' => 'string', 'locationName' => 'roomNo', ],
            ],
        ],
        'Ticket' => [
            'type' => 'structure',
            'members' => [
                'ticketNo' => [ 'type' => 'string', 'locationName' => 'ticketNo', ],
                'ticketTemplateName' => [ 'type' => 'string', 'locationName' => 'ticketTemplateName', ],
                'ticketTemplateCode' => [ 'type' => 'string', 'locationName' => 'ticketTemplateCode', ],
                'ticketTypeName' => [ 'type' => 'string', 'locationName' => 'ticketTypeName', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'createdTime' => [ 'type' => 'string', 'locationName' => 'createdTime', ],
                'closedTime' => [ 'type' => 'string', 'locationName' => 'closedTime', ],
                'phone' => [ 'type' => 'string', 'locationName' => 'phone', ],
                'email' => [ 'type' => 'string', 'locationName' => 'email', ],
                'idc' => [ 'type' => 'string', 'locationName' => 'idc', ],
                'idcName' => [ 'type' => 'string', 'locationName' => 'idcName', ],
            ],
        ],
        'LastDownsampleResultShape' => [
            'type' => 'structure',
            'members' => [
                'items' => [ 'type' => 'list', 'member' => [ 'shape' => 'LastDownsampleRespItem', ], ],
            ],
        ],
        'LastDownsampleRequestShape' => [
            'type' => 'structure',
            'members' => [
                'resourceId' => [ 'type' => 'string', 'locationName' => 'resourceId', ],
                'idc' => [ 'type' => 'string', 'locationName' => 'idc', ],
                'metric' => [ 'type' => 'string', 'locationName' => 'metric', ],
            ],
        ],
        'DescribeBandwidthTrafficsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'idc' => [ 'type' => 'string', 'locationName' => 'idc', ],
            ],
        ],
        'DescribeBandwidthTrafficRequestShape' => [
            'type' => 'structure',
            'members' => [
                'idc' => [ 'type' => 'string', 'locationName' => 'idc', ],
                'bandwidthId' => [ 'type' => 'string', 'locationName' => 'bandwidthId', ],
            ],
        ],
        'DescribeMetricsRequestShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DescribeBandwidthTrafficsResultShape' => [
            'type' => 'structure',
            'members' => [
                'bandwidthTraffics' => [ 'type' => 'list', 'member' => [ 'shape' => 'DescribeBandwidthTraffic', ], ],
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
            ],
        ],
        'DescribeBandwidthTrafficResultShape' => [
            'type' => 'structure',
            'members' => [
                'bandwidthTraffic' =>  [ 'shape' => 'BandwidthTraffic', ],
            ],
        ],
        'DescribeMetricDataRequestShape' => [
            'type' => 'structure',
            'members' => [
                'resourceId' => [ 'type' => 'string', 'locationName' => 'resourceId', ],
                'startTime' => [ 'type' => 'integer', 'locationName' => 'startTime', ],
                'endTime' => [ 'type' => 'integer', 'locationName' => 'endTime', ],
                'timeInterval' => [ 'type' => 'string', 'locationName' => 'timeInterval', ],
                'ip' => [ 'type' => 'string', 'locationName' => 'ip', ],
                'port' => [ 'type' => 'string', 'locationName' => 'port', ],
                'idc' => [ 'type' => 'string', 'locationName' => 'idc', ],
                'metric' => [ 'type' => 'string', 'locationName' => 'metric', ],
            ],
        ],
        'DescribeBandwidthTrafficResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeBandwidthTrafficResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeMetricDataResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeMetricDataResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeMetricsResultShape' => [
            'type' => 'structure',
            'members' => [
                'metrics' => [ 'type' => 'list', 'member' => [ 'shape' => 'Metric', ], ],
            ],
        ],
        'DescribeMetricDataResultShape' => [
            'type' => 'structure',
            'members' => [
                'metricData' =>  [ 'shape' => 'MetricData', ],
            ],
        ],
        'DescribeBandwidthTrafficsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeBandwidthTrafficsResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'LastDownsampleResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'LastDownsampleResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeMetricsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeMetricsResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeRoomsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'filters' => [ 'type' => 'list', 'member' => [ 'shape' => 'Filter', ], ],
                'idc' => [ 'type' => 'string', 'locationName' => 'idc', ],
            ],
        ],
        'DescribeIdcsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeIdcsResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeCabinetsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeCabinetsResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeIdcsResultShape' => [
            'type' => 'structure',
            'members' => [
                'idcs' => [ 'type' => 'list', 'member' => [ 'shape' => 'Idc', ], ],
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
            ],
        ],
        'DescribeRoomsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeRoomsResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeRoomsResultShape' => [
            'type' => 'structure',
            'members' => [
                'rooms' => [ 'type' => 'list', 'member' => [ 'shape' => 'Room', ], ],
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
            ],
        ],
        'DescribeCabinetsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'filters' => [ 'type' => 'list', 'member' => [ 'shape' => 'Filter', ], ],
                'idc' => [ 'type' => 'string', 'locationName' => 'idc', ],
            ],
        ],
        'DescribeCabinetsResultShape' => [
            'type' => 'structure',
            'members' => [
                'cabinets' => [ 'type' => 'list', 'member' => [ 'shape' => 'DescribeCabinet', ], ],
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
            ],
        ],
        'Filter' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'operator' => [ 'type' => 'string', 'locationName' => 'operator', ],
                'values' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'DescribeIdcsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
            ],
        ],
    ],
];
