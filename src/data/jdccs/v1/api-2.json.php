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
        'CreateAlarm' => [
            'name' => 'CreateAlarm',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/alarms',
            ],
            'input' => [ 'shape' => 'CreateAlarmRequestShape', ],
            'output' => [ 'shape' => 'CreateAlarmResponseShape', ],
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
        'UpdateAlarm' => [
            'name' => 'UpdateAlarm',
            'http' => [
                'method' => 'PUT',
                'requestUri' => '/v1/alarms/{alarmId}',
            ],
            'input' => [ 'shape' => 'UpdateAlarmRequestShape', ],
            'output' => [ 'shape' => 'UpdateAlarmResponseShape', ],
        ],
        'DeleteAlarm' => [
            'name' => 'DeleteAlarm',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/alarms/{alarmId}',
            ],
            'input' => [ 'shape' => 'DeleteAlarmRequestShape', ],
            'output' => [ 'shape' => 'DeleteAlarmResponseShape', ],
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
        'SwitchAlarm' => [
            'name' => 'SwitchAlarm',
            'http' => [
                'method' => 'PUT',
                'requestUri' => '/v1/alarms/{alarmId}:switch',
            ],
            'input' => [ 'shape' => 'SwitchAlarmRequestShape', ],
            'output' => [ 'shape' => 'SwitchAlarmResponseShape', ],
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
        'DescribeTrafficSampling' => [
            'name' => 'DescribeTrafficSampling',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/trafficSampling',
            ],
            'input' => [ 'shape' => 'DescribeTrafficSamplingRequestShape', ],
            'output' => [ 'shape' => 'DescribeTrafficSamplingResponseShape', ],
        ],
        'DescribeOpenDevices' => [
            'name' => 'DescribeOpenDevices',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/openDevices',
            ],
            'input' => [ 'shape' => 'DescribeOpenDevicesRequestShape', ],
            'output' => [ 'shape' => 'DescribeOpenDevicesResponseShape', ],
        ],
        'DescribeOpenDevicesData' => [
            'name' => 'DescribeOpenDevicesData',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/openDevicesData',
            ],
            'input' => [ 'shape' => 'DescribeOpenDevicesDataRequestShape', ],
            'output' => [ 'shape' => 'DescribeOpenDevicesDataResponseShape', ],
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
        'DescribeIdcOverview' => [
            'name' => 'DescribeIdcOverview',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/idcs/{idc}/overview',
            ],
            'input' => [ 'shape' => 'DescribeIdcOverviewRequestShape', ],
            'output' => [ 'shape' => 'DescribeIdcOverviewResponseShape', ],
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
        'CreateGeneralServicesTicket' => [
            'name' => 'CreateGeneralServicesTicket',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/generalServicesTicket',
            ],
            'input' => [ 'shape' => 'CreateGeneralServicesTicketRequestShape', ],
            'output' => [ 'shape' => 'CreateGeneralServicesTicketResponseShape', ],
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
                'noticeMethod' => [ 'type' => 'string', 'locationName' => 'noticeMethod', ],
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
            ],
        ],
        'Attach' => [
            'type' => 'structure',
            'members' => [
                'attachName' => [ 'type' => 'string', 'locationName' => 'attachName', ],
                'attachPath' => [ 'type' => 'string', 'locationName' => 'attachPath', ],
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
                'chargeType' => [ 'type' => 'string', 'locationName' => 'chargeType', ],
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
        'BandwidthOverview' => [
            'type' => 'structure',
            'members' => [
                'sum' => [ 'type' => 'integer', 'locationName' => 'sum', ],
                'dynamicBGP' => [ 'type' => 'integer', 'locationName' => 'dynamicBGP', ],
                'thirdLineBGP' => [ 'type' => 'integer', 'locationName' => 'thirdLineBGP', ],
                'telecom' => [ 'type' => 'integer', 'locationName' => 'telecom', ],
                'unicom' => [ 'type' => 'integer', 'locationName' => 'unicom', ],
                'mobile' => [ 'type' => 'integer', 'locationName' => 'mobile', ],
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
        'CabinetOverview' => [
            'type' => 'structure',
            'members' => [
                'sum' => [ 'type' => 'integer', 'locationName' => 'sum', ],
                'enabled' => [ 'type' => 'integer', 'locationName' => 'enabled', ],
                'disabled' => [ 'type' => 'integer', 'locationName' => 'disabled', ],
                'enabling' => [ 'type' => 'integer', 'locationName' => 'enabling', ],
                'disabling' => [ 'type' => 'integer', 'locationName' => 'disabling', ],
            ],
        ],
        'UpdateAlarmSpec' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'metric' => [ 'type' => 'string', 'locationName' => 'metric', ],
                'period' => [ 'type' => 'integer', 'locationName' => 'period', ],
                'statisticMethod' => [ 'type' => 'string', 'locationName' => 'statisticMethod', ],
                'operator' => [ 'type' => 'string', 'locationName' => 'operator', ],
                'threshold' => [ 'type' => 'double', 'locationName' => 'threshold', ],
                'times' => [ 'type' => 'integer', 'locationName' => 'times', ],
                'noticePeriod' => [ 'type' => 'integer', 'locationName' => 'noticePeriod', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'noticeMethod' => [ 'type' => 'string', 'locationName' => 'noticeMethod', ],
                'userId' => [ 'type' => 'string', 'locationName' => 'userId', ],
                'groupId' => [ 'type' => 'string', 'locationName' => 'groupId', ],
            ],
        ],
        'SwitchAlarmSpec' => [
            'type' => 'structure',
            'members' => [
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
            ],
        ],
        'CreateAlarmSpec' => [
            'type' => 'structure',
            'members' => [
                'idc' => [ 'type' => 'string', 'locationName' => 'idc', ],
                'resourceType' => [ 'type' => 'string', 'locationName' => 'resourceType', ],
                'resourceId' => [ 'type' => 'string', 'locationName' => 'resourceId', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'metric' => [ 'type' => 'string', 'locationName' => 'metric', ],
                'period' => [ 'type' => 'integer', 'locationName' => 'period', ],
                'statisticMethod' => [ 'type' => 'string', 'locationName' => 'statisticMethod', ],
                'operator' => [ 'type' => 'string', 'locationName' => 'operator', ],
                'threshold' => [ 'type' => 'double', 'locationName' => 'threshold', ],
                'times' => [ 'type' => 'integer', 'locationName' => 'times', ],
                'noticePeriod' => [ 'type' => 'integer', 'locationName' => 'noticePeriod', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'noticeMethod' => [ 'type' => 'string', 'locationName' => 'noticeMethod', ],
                'noticeObj' => [ 'type' => 'string', 'locationName' => 'noticeObj', ],
                'userId' => [ 'type' => 'string', 'locationName' => 'userId', ],
                'groupId' => [ 'type' => 'string', 'locationName' => 'groupId', ],
            ],
        ],
        'CreateGeneralServicesTicket' => [
            'type' => 'structure',
            'members' => [
                'phone' => [ 'type' => 'string', 'locationName' => 'phone', ],
                'email' => [ 'type' => 'string', 'locationName' => 'email', ],
                'idc' => [ 'type' => 'string', 'locationName' => 'idc', ],
                'isExternalIdc' => [ 'type' => 'boolean', 'locationName' => 'isExternalIdc', ],
                'count' => [ 'type' => 'integer', 'locationName' => 'count', ],
                'externalIdcAddress' => [ 'type' => 'string', 'locationName' => 'externalIdcAddress', ],
                'externalIdcContactPerson' => [ 'type' => 'string', 'locationName' => 'externalIdcContactPerson', ],
                'externalIdcContactPhone' => [ 'type' => 'string', 'locationName' => 'externalIdcContactPhone', ],
                'remarks' => [ 'type' => 'string', 'locationName' => 'remarks', ],
                'attach' => [ 'type' => 'list', 'member' => [ 'shape' => 'Attach', ], ],
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
                'switchboard' => [ 'type' => 'list', 'member' => [ 'shape' => 'Switchboard', ], ],
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
                'chargeType' => [ 'type' => 'string', 'locationName' => 'chargeType', ],
                'bandwidth' => [ 'type' => 'integer', 'locationName' => 'bandwidth', ],
                'relatedIp' => [ 'type' => 'list', 'member' => [ 'shape' => 'RelatedIp', ], ],
                'switchboard' => [ 'type' => 'list', 'member' => [ 'shape' => 'Switchboard', ], ],
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
                'rackUOccupy' => [ 'type' => 'integer', 'locationName' => 'rackUOccupy', ],
                'rackUFree' => [ 'type' => 'integer', 'locationName' => 'rackUFree', ],
            ],
        ],
        'DescribeDevice' => [
            'type' => 'structure',
            'members' => [
                'idc' => [ 'type' => 'string', 'locationName' => 'idc', ],
                'idcName' => [ 'type' => 'string', 'locationName' => 'idcName', ],
                'deviceId' => [ 'type' => 'string', 'locationName' => 'deviceId', ],
                'deviceNo' => [ 'type' => 'string', 'locationName' => 'deviceNo', ],
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
        'DescribeDeviceInspection' => [
            'type' => 'structure',
            'members' => [
                'inspectionTime' => [ 'type' => 'string', 'locationName' => 'inspectionTime', ],
                'idc' => [ 'type' => 'string', 'locationName' => 'idc', ],
                'idcName' => [ 'type' => 'string', 'locationName' => 'idcName', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'deviceNo' => [ 'type' => 'string', 'locationName' => 'deviceNo', ],
                'snNo' => [ 'type' => 'string', 'locationName' => 'snNo', ],
                'deviceType' => [ 'type' => 'string', 'locationName' => 'deviceType', ],
                'faultType' => [ 'type' => 'string', 'locationName' => 'faultType', ],
            ],
        ],
        'DescribeIdcInspection' => [
            'type' => 'structure',
            'members' => [
                'inspectionDate' => [ 'type' => 'string', 'locationName' => 'inspectionDate', ],
                'idc' => [ 'type' => 'string', 'locationName' => 'idc', ],
                'idcName' => [ 'type' => 'string', 'locationName' => 'idcName', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
            ],
        ],
        'Device' => [
            'type' => 'structure',
            'members' => [
                'idc' => [ 'type' => 'string', 'locationName' => 'idc', ],
                'idcName' => [ 'type' => 'string', 'locationName' => 'idcName', ],
                'deviceId' => [ 'type' => 'string', 'locationName' => 'deviceId', ],
                'deviceNo' => [ 'type' => 'string', 'locationName' => 'deviceNo', ],
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
        'DeviceOverview' => [
            'type' => 'structure',
            'members' => [
                'sum' => [ 'type' => 'integer', 'locationName' => 'sum', ],
                'server' => [ 'type' => 'integer', 'locationName' => 'server', ],
                'network' => [ 'type' => 'integer', 'locationName' => 'network', ],
                'storage' => [ 'type' => 'integer', 'locationName' => 'storage', ],
                'other' => [ 'type' => 'integer', 'locationName' => 'other', ],
                'opened' => [ 'type' => 'integer', 'locationName' => 'opened', ],
                'launched' => [ 'type' => 'integer', 'locationName' => 'launched', ],
                'operating' => [ 'type' => 'integer', 'locationName' => 'operating', ],
                'modifying' => [ 'type' => 'integer', 'locationName' => 'modifying', ],
                'canceling' => [ 'type' => 'integer', 'locationName' => 'canceling', ],
            ],
        ],
        'Idc' => [
            'type' => 'structure',
            'members' => [
                'idc' => [ 'type' => 'string', 'locationName' => 'idc', ],
                'idcName' => [ 'type' => 'string', 'locationName' => 'idcName', ],
                'isExternalIdc' => [ 'type' => 'boolean', 'locationName' => 'isExternalIdc', ],
            ],
        ],
        'IdcInspection' => [
            'type' => 'structure',
            'members' => [
                'inspectionTime' => [ 'type' => 'string', 'locationName' => 'inspectionTime', ],
                'temperature' => [ 'type' => 'string', 'locationName' => 'temperature', ],
                'humidity' => [ 'type' => 'string', 'locationName' => 'humidity', ],
                'goodsPlacement' => [ 'type' => 'string', 'locationName' => 'goodsPlacement', ],
                'leakWater' => [ 'type' => 'string', 'locationName' => 'leakWater', ],
                'accessControl' => [ 'type' => 'string', 'locationName' => 'accessControl', ],
                'monitor' => [ 'type' => 'string', 'locationName' => 'monitor', ],
                'fire' => [ 'type' => 'string', 'locationName' => 'fire', ],
                'thunder' => [ 'type' => 'string', 'locationName' => 'thunder', ],
                'airConditioning' => [ 'type' => 'string', 'locationName' => 'airConditioning', ],
                'ups' => [ 'type' => 'string', 'locationName' => 'ups', ],
                'power' => [ 'type' => 'string', 'locationName' => 'power', ],
                'physicalEnv' => [ 'type' => 'string', 'locationName' => 'physicalEnv', ],
            ],
        ],
        'Ip' => [
            'type' => 'structure',
            'members' => [
                'idc' => [ 'type' => 'string', 'locationName' => 'idc', ],
                'idcName' => [ 'type' => 'string', 'locationName' => 'idcName', ],
                'ipId' => [ 'type' => 'string', 'locationName' => 'ipId', ],
                'cidrAddr' => [ 'type' => 'string', 'locationName' => 'cidrAddr', ],
                'ipQuantity' => [ 'type' => 'string', 'locationName' => 'ipQuantity', ],
                'ipType' => [ 'type' => 'string', 'locationName' => 'ipType', ],
                'networkAddr' => [ 'type' => 'string', 'locationName' => 'networkAddr', ],
                'gatewayAddr' => [ 'type' => 'string', 'locationName' => 'gatewayAddr', ],
                'broadcastAddr' => [ 'type' => 'string', 'locationName' => 'broadcastAddr', ],
                'lineType' => [ 'type' => 'string', 'locationName' => 'lineType', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
            ],
        ],
        'IpOverview' => [
            'type' => 'structure',
            'members' => [
                'sum' => [ 'type' => 'integer', 'locationName' => 'sum', ],
                'normal' => [ 'type' => 'integer', 'locationName' => 'normal', ],
                'abnormal' => [ 'type' => 'integer', 'locationName' => 'abnormal', ],
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
        'OpenDevices' => [
            'type' => 'structure',
            'members' => [
                'deviceCode' => [ 'type' => 'string', 'locationName' => 'deviceCode', ],
                'deviceType' => [ 'type' => 'string', 'locationName' => 'deviceType', ],
                'deviceName' => [ 'type' => 'string', 'locationName' => 'deviceName', ],
            ],
        ],
        'OpenDevicesData' => [
            'type' => 'structure',
            'members' => [
                'deviceCode' => [ 'type' => 'string', 'locationName' => 'deviceCode', ],
                'points' => [ 'type' => 'list', 'member' => [ 'shape' => 'Point', ], ],
            ],
        ],
        'Point' => [
            'type' => 'structure',
            'members' => [
                'pointName' => [ 'type' => 'string', 'locationName' => 'pointName', ],
                'pointData' => [ 'type' => 'double', 'locationName' => 'pointData', ],
                'pointTag' => [ 'type' => 'string', 'locationName' => 'pointTag', ],
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
        'Resource' => [
            'type' => 'structure',
            'members' => [
                'resourceId' => [ 'type' => 'string', 'locationName' => 'resourceId', ],
                'resourceName' => [ 'type' => 'string', 'locationName' => 'resourceName', ],
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
                'count' => [ 'type' => 'integer', 'locationName' => 'count', ],
                'isExternalIdc' => [ 'type' => 'boolean', 'locationName' => 'isExternalIdc', ],
                'externalIdcAddress' => [ 'type' => 'string', 'locationName' => 'externalIdcAddress', ],
                'externalIdcContactPerson' => [ 'type' => 'string', 'locationName' => 'externalIdcContactPerson', ],
                'externalIdcContactPhone' => [ 'type' => 'string', 'locationName' => 'externalIdcContactPhone', ],
            ],
        ],
        'TrafficSamplingData' => [
            'type' => 'structure',
            'members' => [
                'srcIp' => [ 'type' => 'string', 'locationName' => 'srcIp', ],
                'dstIp' => [ 'type' => 'string', 'locationName' => 'dstIp', ],
                'srcPort' => [ 'type' => 'integer', 'locationName' => 'srcPort', ],
                'dstPort' => [ 'type' => 'integer', 'locationName' => 'dstPort', ],
                'sampleDataLength' => [ 'type' => 'integer', 'locationName' => 'sampleDataLength', ],
                'samplingInterval' => [ 'type' => 'integer', 'locationName' => 'samplingInterval', ],
                'protocolName' => [ 'type' => 'string', 'locationName' => 'protocolName', ],
                'timestamp' => [ 'type' => 'integer', 'locationName' => 'timestamp', ],
                'uniqueId' => [ 'type' => 'string', 'locationName' => 'uniqueId', ],
                'operatorType' => [ 'type' => 'string', 'locationName' => 'operatorType', ],
            ],
        ],
        'DeleteAlarmRequestShape' => [
            'type' => 'structure',
            'members' => [
                'alarmId' => [ 'type' => 'string', 'locationName' => 'alarmId', ],
            ],
        ],
        'CreateAlarmResultShape' => [
            'type' => 'structure',
            'members' => [
                'success' => [ 'type' => 'boolean', 'locationName' => 'success', ],
            ],
        ],
        'UpdateAlarmResultShape' => [
            'type' => 'structure',
            'members' => [
                'success' => [ 'type' => 'boolean', 'locationName' => 'success', ],
            ],
        ],
        'CreateAlarmResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'CreateAlarmResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
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
                'idc' => [ 'type' => 'string', 'locationName' => 'idc', ],
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
                'idc' => [ 'type' => 'string', 'locationName' => 'idc', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'filters' => [ 'type' => 'list', 'member' => [ 'shape' => 'Filter', ], ],
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
        'DeleteAlarmResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DeleteAlarmResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'UpdateAlarmRequestShape' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'metric' => [ 'type' => 'string', 'locationName' => 'metric', ],
                'period' => [ 'type' => 'integer', 'locationName' => 'period', ],
                'statisticMethod' => [ 'type' => 'string', 'locationName' => 'statisticMethod', ],
                'operator' => [ 'type' => 'string', 'locationName' => 'operator', ],
                'threshold' => [ 'type' => 'double', 'locationName' => 'threshold', ],
                'times' => [ 'type' => 'integer', 'locationName' => 'times', ],
                'noticePeriod' => [ 'type' => 'integer', 'locationName' => 'noticePeriod', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'noticeMethod' => [ 'type' => 'string', 'locationName' => 'noticeMethod', ],
                'userId' => [ 'type' => 'string', 'locationName' => 'userId', ],
                'groupId' => [ 'type' => 'string', 'locationName' => 'groupId', ],
                'alarmId' => [ 'type' => 'string', 'locationName' => 'alarmId', ],
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
        'DeleteAlarmResultShape' => [
            'type' => 'structure',
            'members' => [
                'success' => [ 'type' => 'boolean', 'locationName' => 'success', ],
            ],
        ],
        'SwitchAlarmResultShape' => [
            'type' => 'structure',
            'members' => [
                'success' => [ 'type' => 'boolean', 'locationName' => 'success', ],
            ],
        ],
        'SwitchAlarmResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'SwitchAlarmResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeAlarmHistoryResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeAlarmHistoryResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'SwitchAlarmRequestShape' => [
            'type' => 'structure',
            'members' => [
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'alarmId' => [ 'type' => 'string', 'locationName' => 'alarmId', ],
            ],
        ],
        'UpdateAlarmResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'UpdateAlarmResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'CreateAlarmRequestShape' => [
            'type' => 'structure',
            'members' => [
                'idc' => [ 'type' => 'string', 'locationName' => 'idc', ],
                'resourceType' => [ 'type' => 'string', 'locationName' => 'resourceType', ],
                'resourceId' => [ 'type' => 'string', 'locationName' => 'resourceId', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'metric' => [ 'type' => 'string', 'locationName' => 'metric', ],
                'period' => [ 'type' => 'integer', 'locationName' => 'period', ],
                'statisticMethod' => [ 'type' => 'string', 'locationName' => 'statisticMethod', ],
                'operator' => [ 'type' => 'string', 'locationName' => 'operator', ],
                'threshold' => [ 'type' => 'double', 'locationName' => 'threshold', ],
                'times' => [ 'type' => 'integer', 'locationName' => 'times', ],
                'noticePeriod' => [ 'type' => 'integer', 'locationName' => 'noticePeriod', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'noticeMethod' => [ 'type' => 'string', 'locationName' => 'noticeMethod', ],
                'noticeObj' => [ 'type' => 'string', 'locationName' => 'noticeObj', ],
                'userId' => [ 'type' => 'string', 'locationName' => 'userId', ],
                'groupId' => [ 'type' => 'string', 'locationName' => 'groupId', ],
            ],
        ],
        'DescribeAlarmResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeAlarmResultShape', ],
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
        'DescribeBandwidthTrafficResultShape' => [
            'type' => 'structure',
            'members' => [
                'bandwidthTraffic' =>  [ 'shape' => 'BandwidthTraffic', ],
            ],
        ],
        'DescribeBandwidthTrafficResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeBandwidthTrafficResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeTrafficSamplingResultShape' => [
            'type' => 'structure',
            'members' => [
                'data' => [ 'type' => 'list', 'member' => [ 'shape' => 'TrafficSamplingData', ], ],
            ],
        ],
        'DescribeMetricsResultShape' => [
            'type' => 'structure',
            'members' => [
                'metrics' => [ 'type' => 'list', 'member' => [ 'shape' => 'Metric', ], ],
            ],
        ],
        'DescribeTrafficSamplingResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeTrafficSamplingResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeTrafficSamplingRequestShape' => [
            'type' => 'structure',
            'members' => [
                'resourceId' => [ 'type' => 'string', 'locationName' => 'resourceId', ],
                'startTime' => [ 'type' => 'integer', 'locationName' => 'startTime', ],
                'endTime' => [ 'type' => 'integer', 'locationName' => 'endTime', ],
            ],
        ],
        'DescribeOpenDevicesDataRequestShape' => [
            'type' => 'structure',
            'members' => [
                'deviceCodes' => [ 'type' => 'string', 'locationName' => 'deviceCodes', ],
                'deviceType' => [ 'type' => 'string', 'locationName' => 'deviceType', ],
            ],
        ],
        'DescribeOpenDevicesDataResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeOpenDevicesDataResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeOpenDevicesResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeOpenDevicesResultShape', ],
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
                'bandwidthName' => [ 'type' => 'string', 'locationName' => 'bandwidthName', ],
                'idc' => [ 'type' => 'string', 'locationName' => 'idc', ],
            ],
        ],
        'DescribeOpenDevicesRequestShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DescribeOpenDevicesDataResultShape' => [
            'type' => 'structure',
            'members' => [
                'data' => [ 'type' => 'list', 'member' => [ 'shape' => 'OpenDevicesData', ], ],
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
        'DescribeMetricDataResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeMetricDataResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeOpenDevicesResultShape' => [
            'type' => 'structure',
            'members' => [
                'openDevices' => [ 'type' => 'list', 'member' => [ 'shape' => 'OpenDevices', ], ],
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
        'DescribeCabinetResultShape' => [
            'type' => 'structure',
            'members' => [
                'cabinet' =>  [ 'shape' => 'Cabinet', ],
            ],
        ],
        'DescribeIdcOverviewResultShape' => [
            'type' => 'structure',
            'members' => [
                'cabinet' =>  [ 'shape' => 'CabinetOverview', ],
                'device' =>  [ 'shape' => 'DeviceOverview', ],
                'ip' =>  [ 'shape' => 'IpOverview', ],
                'bandwidth' =>  [ 'shape' => 'BandwidthOverview', ],
            ],
        ],
        'DescribeIdcOverviewResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeIdcOverviewResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
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
                'deviceType' => [ 'type' => 'string', 'locationName' => 'deviceType', ],
                'assetStatus' => [ 'type' => 'string', 'locationName' => 'assetStatus', ],
                'assetBelong' => [ 'type' => 'string', 'locationName' => 'assetBelong', ],
                'deviceNo' => [ 'type' => 'string', 'locationName' => 'deviceNo', ],
                'snNo' => [ 'type' => 'string', 'locationName' => 'snNo', ],
                'filters' => [ 'type' => 'list', 'member' => [ 'shape' => 'Filter', ], ],
                'sorts' => [ 'type' => 'list', 'member' => [ 'shape' => 'Sort', ], ],
                'idc' => [ 'type' => 'string', 'locationName' => 'idc', ],
            ],
        ],
        'DescribeBandwidthsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'lineType' => [ 'type' => 'string', 'locationName' => 'lineType', ],
                'chargeType' => [ 'type' => 'string', 'locationName' => 'chargeType', ],
                'bandwidthName' => [ 'type' => 'string', 'locationName' => 'bandwidthName', ],
                'relatedIp' => [ 'type' => 'string', 'locationName' => 'relatedIp', ],
                'filters' => [ 'type' => 'list', 'member' => [ 'shape' => 'Filter', ], ],
                'sorts' => [ 'type' => 'list', 'member' => [ 'shape' => 'Sort', ], ],
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
                'all' => [ 'type' => 'integer', 'locationName' => 'all', ],
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
                'lineType' => [ 'type' => 'string', 'locationName' => 'lineType', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'cidrAddr' => [ 'type' => 'string', 'locationName' => 'cidrAddr', ],
                'filters' => [ 'type' => 'list', 'member' => [ 'shape' => 'Filter', ], ],
                'sorts' => [ 'type' => 'list', 'member' => [ 'shape' => 'Sort', ], ],
                'idc' => [ 'type' => 'string', 'locationName' => 'idc', ],
            ],
        ],
        'Sort' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'direction' => [ 'type' => 'string', 'locationName' => 'direction', ],
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
        'DescribeIdcOverviewRequestShape' => [
            'type' => 'structure',
            'members' => [
                'idc' => [ 'type' => 'string', 'locationName' => 'idc', ],
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
                'cabinetType' => [ 'type' => 'string', 'locationName' => 'cabinetType', ],
                'cabinetOpenStatus' => [ 'type' => 'string', 'locationName' => 'cabinetOpenStatus', ],
                'cabinetNo' => [ 'type' => 'string', 'locationName' => 'cabinetNo', ],
                'filters' => [ 'type' => 'list', 'member' => [ 'shape' => 'Filter', ], ],
                'sorts' => [ 'type' => 'list', 'member' => [ 'shape' => 'Sort', ], ],
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
                'all' => [ 'type' => 'integer', 'locationName' => 'all', ],
                'includeExternalIdc' => [ 'type' => 'string', 'locationName' => 'includeExternalIdc', ],
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
        'DescribeTicketsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'type' => [ 'type' => 'string', 'locationName' => 'type', ],
                'ticketTypeName' => [ 'type' => 'string', 'locationName' => 'ticketTypeName', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'ticketNo' => [ 'type' => 'string', 'locationName' => 'ticketNo', ],
                'ticketTemplateName' => [ 'type' => 'string', 'locationName' => 'ticketTemplateName', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'startTime' => [ 'type' => 'string', 'locationName' => 'startTime', ],
                'endTime' => [ 'type' => 'string', 'locationName' => 'endTime', ],
                'filters' => [ 'type' => 'list', 'member' => [ 'shape' => 'Filter', ], ],
                'sorts' => [ 'type' => 'list', 'member' => [ 'shape' => 'Sort', ], ],
            ],
        ],
        'CreateGeneralServicesTicketResultShape' => [
            'type' => 'structure',
            'members' => [
                'ticketNo' => [ 'type' => 'string', 'locationName' => 'ticketNo', ],
            ],
        ],
        'CreateGeneralServicesTicketResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'CreateGeneralServicesTicketResultShape', ],
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
        'CreateGeneralServicesTicketRequestShape' => [
            'type' => 'structure',
            'members' => [
                'phone' => [ 'type' => 'string', 'locationName' => 'phone', ],
                'email' => [ 'type' => 'string', 'locationName' => 'email', ],
                'idc' => [ 'type' => 'string', 'locationName' => 'idc', ],
                'isExternalIdc' => [ 'type' => 'boolean', 'locationName' => 'isExternalIdc', ],
                'count' => [ 'type' => 'integer', 'locationName' => 'count', ],
                'externalIdcAddress' => [ 'type' => 'string', 'locationName' => 'externalIdcAddress', ],
                'externalIdcContactPerson' => [ 'type' => 'string', 'locationName' => 'externalIdcContactPerson', ],
                'externalIdcContactPhone' => [ 'type' => 'string', 'locationName' => 'externalIdcContactPhone', ],
                'remarks' => [ 'type' => 'string', 'locationName' => 'remarks', ],
                'attach' => [ 'type' => 'list', 'member' => [ 'shape' => 'Attach', ], ],
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
