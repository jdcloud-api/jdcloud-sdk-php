<?php
// This file was auto-generated
return [
//    'version' => '',
    'metadata' =>
    [
//        'apiVersion' => '',
//        'endpointPrefix' => 'monitor',
        'protocol' => 'json',
//        'serviceFullName' => 'monitor',
//        'serviceId' => 'monitor',
    ],
    'operations' => [
        'DescribeAlarms' => [
            'name' => 'DescribeAlarms',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v2/groupAlarms',
            ],
            'input' => [ 'shape' => 'DescribeAlarmsRequestShape', ],
            'output' => [ 'shape' => 'DescribeAlarmsResponseShape', ],
        ],
        'CreateAlarm' => [
            'name' => 'CreateAlarm',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v2/groupAlarms',
            ],
            'input' => [ 'shape' => 'CreateAlarmRequestShape', ],
            'output' => [ 'shape' => 'CreateAlarmResponseShape', ],
        ],
        'DescribeAlarm' => [
            'name' => 'DescribeAlarm',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v2/groupAlarms/{alarmId}',
            ],
            'input' => [ 'shape' => 'DescribeAlarmRequestShape', ],
            'output' => [ 'shape' => 'DescribeAlarmResponseShape', ],
        ],
        'UpdateAlarm' => [
            'name' => 'UpdateAlarm',
            'http' => [
                'method' => 'PUT',
                'requestUri' => '/v2/groupAlarms/{alarmId}',
            ],
            'input' => [ 'shape' => 'UpdateAlarmRequestShape', ],
            'output' => [ 'shape' => 'UpdateAlarmResponseShape', ],
        ],
        'DeleteAlarms' => [
            'name' => 'DeleteAlarms',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v2/groupAlarms/{alarmId}',
            ],
            'input' => [ 'shape' => 'DeleteAlarmsRequestShape', ],
            'output' => [ 'shape' => 'DeleteAlarmsResponseShape', ],
        ],
        'DescribeAlarmContacts' => [
            'name' => 'DescribeAlarmContacts',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v2/groupAlarms/{alarmId}/contacts',
            ],
            'input' => [ 'shape' => 'DescribeAlarmContactsRequestShape', ],
            'output' => [ 'shape' => 'DescribeAlarmContactsResponseShape', ],
        ],
        'DescribeMetricsForAlarm' => [
            'name' => 'DescribeMetricsForAlarm',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v2/groupAlarms:metrics',
            ],
            'input' => [ 'shape' => 'DescribeMetricsForAlarmRequestShape', ],
            'output' => [ 'shape' => 'DescribeMetricsForAlarmResponseShape', ],
        ],
        'DescribeProductsForAlarm' => [
            'name' => 'DescribeProductsForAlarm',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v2/groupAlarms:products',
            ],
            'input' => [ 'shape' => 'DescribeProductsForAlarmRequestShape', ],
            'output' => [ 'shape' => 'DescribeProductsForAlarmResponseShape', ],
        ],
        'EnableAlarms' => [
            'name' => 'EnableAlarms',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v2/groupAlarms:switch',
            ],
            'input' => [ 'shape' => 'EnableAlarmsRequestShape', ],
            'output' => [ 'shape' => 'EnableAlarmsResponseShape', ],
        ],
        'DescribeAlarmHistory' => [
            'name' => 'DescribeAlarmHistory',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v2/groupAlarmsHistory',
            ],
            'input' => [ 'shape' => 'DescribeAlarmHistoryRequestShape', ],
            'output' => [ 'shape' => 'DescribeAlarmHistoryResponseShape', ],
        ],
        'DescribeCustomMetricData' => [
            'name' => 'DescribeCustomMetricData',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v2/regions/{regionId}/namespaces/{namespaceUID}/metricData',
            ],
            'input' => [ 'shape' => 'DescribeCustomMetricDataRequestShape', ],
            'output' => [ 'shape' => 'DescribeCustomMetricDataResponseShape', ],
        ],
        'DescribeMetrics' => [
            'name' => 'DescribeMetrics',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v2/metrics',
            ],
            'input' => [ 'shape' => 'DescribeMetricsRequestShape', ],
            'output' => [ 'shape' => 'DescribeMetricsResponseShape', ],
        ],
        'LastDownsample' => [
            'name' => 'LastDownsample',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v2/regions/{regionId}/metrics/{metric}/lastDownsample',
            ],
            'input' => [ 'shape' => 'LastDownsampleRequestShape', ],
            'output' => [ 'shape' => 'LastDownsampleResponseShape', ],
        ],
        'DescribeMetricData' => [
            'name' => 'DescribeMetricData',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v2/regions/{regionId}/metrics/{metric}/metricData',
            ],
            'input' => [ 'shape' => 'DescribeMetricDataRequestShape', ],
            'output' => [ 'shape' => 'DescribeMetricDataResponseShape', ],
        ],
        'DescribeTagValues' => [
            'name' => 'DescribeTagValues',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v2/regions/{regionId}/tagValues/{tagKey}',
            ],
            'input' => [ 'shape' => 'DescribeTagValuesRequestShape', ],
            'output' => [ 'shape' => 'DescribeTagValuesResponseShape', ],
        ],
        'DescribeServices' => [
            'name' => 'DescribeServices',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v2/services',
            ],
            'input' => [ 'shape' => 'DescribeServicesRequestShape', ],
            'output' => [ 'shape' => 'DescribeServicesResponseShape', ],
        ],
        'PutMetricData' => [
            'name' => 'PutMetricData',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v2/customMetrics',
            ],
            'input' => [ 'shape' => 'PutMetricDataRequestShape', ],
            'output' => [ 'shape' => 'PutMetricDataResponseShape', ],
        ],
        'PutCustomMetricData' => [
            'name' => 'PutCustomMetricData',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v2/customMetrics',
            ],
            'input' => [ 'shape' => 'PutCustomMetricDataRequestShape', ],
            'output' => [ 'shape' => 'PutCustomMetricDataResponseShape', ],
        ],
    ],
    'shapes' => [
    ],
];
