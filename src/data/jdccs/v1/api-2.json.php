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
        'DescribeAlarms' => [
            'name' => 'DescribeAlarms',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/alarms',
            ],
            'input' => [ 'shape' => 'DescribeAlarmsRequestShape', ],
            'output' => [ 'shape' => 'DescribeAlarmsResponseShape', ],
        ],
        'DescribeAlarm' => [
            'name' => 'DescribeAlarm',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/alarms/{alarmId}',
            ],
            'input' => [ 'shape' => 'DescribeAlarmRequestShape', ],
            'output' => [ 'shape' => 'DescribeAlarmResponseShape', ],
        ],
        'DescribeAlarmHistory' => [
            'name' => 'DescribeAlarmHistory',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/alarmHistory',
            ],
            'input' => [ 'shape' => 'DescribeAlarmHistoryRequestShape', ],
            'output' => [ 'shape' => 'DescribeAlarmHistoryResponseShape', ],
        ],
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
        'DescribeCabinet' => [
            'name' => 'DescribeCabinet',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/idcs/{idc}/cabinets/{cabinetId}',
            ],
            'input' => [ 'shape' => 'DescribeCabinetRequestShape', ],
            'output' => [ 'shape' => 'DescribeCabinetResponseShape', ],
        ],
        'DescribeDevices' => [
            'name' => 'DescribeDevices',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/idcs/{idc}/devices',
            ],
            'input' => [ 'shape' => 'DescribeDevicesRequestShape', ],
            'output' => [ 'shape' => 'DescribeDevicesResponseShape', ],
        ],
        'DescribeDevice' => [
            'name' => 'DescribeDevice',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/idcs/{idc}/devices/{deviceId}',
            ],
            'input' => [ 'shape' => 'DescribeDeviceRequestShape', ],
            'output' => [ 'shape' => 'DescribeDeviceResponseShape', ],
        ],
        'DescribeIps' => [
            'name' => 'DescribeIps',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/idcs/{idc}/ips',
            ],
            'input' => [ 'shape' => 'DescribeIpsRequestShape', ],
            'output' => [ 'shape' => 'DescribeIpsResponseShape', ],
        ],
        'DescribeBandwidths' => [
            'name' => 'DescribeBandwidths',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/idcs/{idc}/bandwidths',
            ],
            'input' => [ 'shape' => 'DescribeBandwidthsRequestShape', ],
            'output' => [ 'shape' => 'DescribeBandwidthsResponseShape', ],
        ],
        'DescribeBandwidth' => [
            'name' => 'DescribeBandwidth',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/idcs/{idc}/bandwidths/{bandwidthId}',
            ],
            'input' => [ 'shape' => 'DescribeBandwidthRequestShape', ],
            'output' => [ 'shape' => 'DescribeBandwidthResponseShape', ],
        ],
        'DescribeTickets' => [
            'name' => 'DescribeTickets',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/tickets',
            ],
            'input' => [ 'shape' => 'DescribeTicketsRequestShape', ],
            'output' => [ 'shape' => 'DescribeTicketsResponseShape', ],
        ],
        'DescribeTicket' => [
            'name' => 'DescribeTicket',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/tickets/{ticketNo}',
            ],
            'input' => [ 'shape' => 'DescribeTicketRequestShape', ],
            'output' => [ 'shape' => 'DescribeTicketResponseShape', ],
        ],
    ],
    'shapes' => [
        'Switchboard' => [
            'type' => 'structure',
            'members' => [
                'ip' => [ 'type' => 'string', 'locationName' => 'ip', ],
                'port' => [ 'type' => 'string', 'locationName' => 'port', ],
            ],
        ],
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
                'switchboard' => [ 'type' => 'list', 'member' => [ 'shape' => 'Switchboard', ], ],
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
                'managementIp' => [ 'type' => 'string', 'locationName' => 'managementIp', ],
                'ifName' => [ 'type' => 'string', 'locationName' => 'ifName', ],
                'alarmStatus' => [ 'type' => 'string', 'locationName' => 'alarmStatus', ],
                'value' => [ 'type' => 'double', 'locationName' => 'value', ],
                'noticeTime' => [ 'type' => 'string', 'locationName' => 'noticeTime', ],
                'condition' => [ 'type' => 'string', 'locationName' => 'condition', ],
                'strategyId' => [ 'type' => 'integer', 'locationName' => 'strategyId', ],
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
                'lineType' => [ 'type' => 'string', 'locationName' => 'lineType', ],
                'bandwidth' => [ 'type' => 'integer', 'locationName' => 'bandwidth', ],
                'relatedIp' => [ 'type' => 'list', 'member' => [ 'shape' => 'RelatedIp', ], ],
                'switchboard' => [ 'type' => 'list', 'member' => [ 'shape' => 'Switchboard', ], ],
            ],
        ],
        'RelatedIp' => [
            'type' => 'structure',
            'members' => [
                'cidrAddr' => [ 'type' => 'string', 'locationName' => 'cidrAddr', ],
                'lineType' => [ 'type' => 'string', 'locationName' => 'lineType', ],
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
                'relatedIp' => [ 'type' => 'list', 'member' => [ 'shape' => 'RelatedIp', ], ],
                'switchboard' => [ 'type' => 'list', 'member' => [ 'shape' => 'DescribeSwitchboard', ], ],
            ],
        ],
        'DescribeSwitchboard' => [
            'type' => 'structure',
            'members' => [
                'ip' => [ 'type' => 'string', 'locationName' => 'ip', ],
                'port' => [ 'type' => 'string', 'locationName' => 'port', ],
                'trafficIn' => [ 'type' => 'double', 'locationName' => 'trafficIn', ],
                'trafficOut' => [ 'type' => 'double', 'locationName' => 'trafficOut', ],
                'alarmStatus' => [ 'type' => 'string', 'locationName' => 'alarmStatus', ],
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
                'lineType' => [ 'type' => 'string', 'locationName' => 'lineType', ],
                'bandwidth' => [ 'type' => 'integer', 'locationName' => 'bandwidth', ],
                'relatedIp' => [ 'type' => 'list', 'member' => [ 'shape' => 'RelatedIp', ], ],
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
                'gatewayAddr' => [ 'type' => 'string', 'locationName' => 'gatewayAddr', ],
                'broadcastAddr' => [ 'type' => 'string', 'locationName' => 'broadcastAddr', ],
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
        'DescribeAlarmHistoryResultShape' => [
            'type' => 'structure',
            'members' => [
                'alarmHistory' => [ 'type' => 'list', 'member' => [ 'shape' => 'AlarmHistory', ], ],
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
            ],
        ],
        'DescribeAlarmsResultShape' => [
            'type' => 'structure',
            'members' => [
                'alarms' => [ 'type' => 'list', 'member' => [ 'shape' => 'DescribeAlarm', ], ],
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
            ],
        ],
        'DescribeAlarmRequestShape' => [
            'type' => 'structure',
            'members' => [
                'alarmId' => [ 'type' => 'string', 'locationName' => 'alarmId', ],
            ],
        ],
        'DescribeAlarmHistoryRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'alarmId' => [ 'type' => 'string', 'locationName' => 'alarmId', ],
                'startTime' => [ 'type' => 'integer', 'locationName' => 'startTime', ],
                'endTime' => [ 'type' => 'integer', 'locationName' => 'endTime', ],
            ],
        ],
        'DescribeAlarmsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'resourceType' => [ 'type' => 'string', 'locationName' => 'resourceType', ],
                'resourceId' => [ 'type' => 'string', 'locationName' => 'resourceId', ],
            ],
        ],
        'DescribeAlarmHistoryResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeAlarmHistoryResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeAlarmResultShape' => [
            'type' => 'structure',
            'members' => [
                'alarm' =>  [ 'shape' => 'Alarm', ],
            ],
        ],
        'DescribeAlarmsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeAlarmsResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeAlarmResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeAlarmResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
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
        'DescribeCabinetResultShape' => [
            'type' => 'structure',
            'members' => [
                'cabinet' =>  [ 'shape' => 'Cabinet', ],
            ],
        ],
        'DescribeIpsResultShape' => [
            'type' => 'structure',
            'members' => [
                'ips' => [ 'type' => 'list', 'member' => [ 'shape' => 'Ip', ], ],
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
            ],
        ],
        'DescribeDevicesRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'cabinetId' => [ 'type' => 'string', 'locationName' => 'cabinetId', ],
                'filters' => [ 'type' => 'list', 'member' => [ 'shape' => 'Filter', ], ],
                'idc' => [ 'type' => 'string', 'locationName' => 'idc', ],
            ],
        ],
        'DescribeBandwidthsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'filters' => [ 'type' => 'list', 'member' => [ 'shape' => 'Filter', ], ],
                'idc' => [ 'type' => 'string', 'locationName' => 'idc', ],
            ],
        ],
        'DescribeCabinetRequestShape' => [
            'type' => 'structure',
            'members' => [
                'idc' => [ 'type' => 'string', 'locationName' => 'idc', ],
                'cabinetId' => [ 'type' => 'string', 'locationName' => 'cabinetId', ],
            ],
        ],
        'DescribeDevicesResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeDevicesResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeRoomsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeRoomsResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeCabinetResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeCabinetResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
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
        'DescribeBandwidthRequestShape' => [
            'type' => 'structure',
            'members' => [
                'idc' => [ 'type' => 'string', 'locationName' => 'idc', ],
                'bandwidthId' => [ 'type' => 'string', 'locationName' => 'bandwidthId', ],
            ],
        ],
        'DescribeDevicesResultShape' => [
            'type' => 'structure',
            'members' => [
                'devices' => [ 'type' => 'list', 'member' => [ 'shape' => 'DescribeDevice', ], ],
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
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
        'DescribeBandwidthResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeBandwidthResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeIdcsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeIdcsResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeDeviceResultShape' => [
            'type' => 'structure',
            'members' => [
                'device' =>  [ 'shape' => 'Device', ],
            ],
        ],
        'DescribeCabinetsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeCabinetsResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeIpsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'filters' => [ 'type' => 'list', 'member' => [ 'shape' => 'Filter', ], ],
                'idc' => [ 'type' => 'string', 'locationName' => 'idc', ],
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
        'DescribeDeviceResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeDeviceResultShape', ],
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
        'DescribeBandwidthsResultShape' => [
            'type' => 'structure',
            'members' => [
                'bandwidths' => [ 'type' => 'list', 'member' => [ 'shape' => 'DescribeBandwidth', ], ],
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
            ],
        ],
        'DescribeIpsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeIpsResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeBandwidthsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeBandwidthsResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
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
        'DescribeBandwidthResultShape' => [
            'type' => 'structure',
            'members' => [
                'bandwidth' =>  [ 'shape' => 'Bandwidth', ],
            ],
        ],
        'DescribeIdcsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
            ],
        ],
        'DescribeDeviceRequestShape' => [
            'type' => 'structure',
            'members' => [
                'idc' => [ 'type' => 'string', 'locationName' => 'idc', ],
                'deviceId' => [ 'type' => 'string', 'locationName' => 'deviceId', ],
            ],
        ],
        'DescribeTicketResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeTicketResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeTicketsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeTicketsResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeTicketRequestShape' => [
            'type' => 'structure',
            'members' => [
                'ticketNo' => [ 'type' => 'string', 'locationName' => 'ticketNo', ],
            ],
        ],
        'DescribeTicketResultShape' => [
            'type' => 'structure',
            'members' => [
                'ticket' =>  [ 'shape' => 'Ticket', ],
            ],
        ],
        'DescribeTicketsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'type' => [ 'type' => 'string', 'locationName' => 'type', ],
            ],
        ],
        'DescribeTicketsResultShape' => [
            'type' => 'structure',
            'members' => [
                'tickets' => [ 'type' => 'list', 'member' => [ 'shape' => 'Ticket', ], ],
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
            ],
        ],
    ],
];
