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
    ],
];
