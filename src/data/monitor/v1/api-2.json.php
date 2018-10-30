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
        'DescribeAlarmContacts' => [
            'name' => 'DescribeAlarmContacts',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/:regionId/alarms/:alarmId/contacts',
            ],
            'input' => [ 'shape' => 'DescribeAlarmContactsRequestShape', ],
            'output' => [ 'shape' => 'DescribeAlarmContactsResponseShape', ],
        ],
        'DescribeAlarmHistory' => [
            'name' => 'DescribeAlarmHistory',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/alarmHistory',
            ],
            'input' => [ 'shape' => 'DescribeAlarmHistoryRequestShape', ],
            'output' => [ 'shape' => 'DescribeAlarmHistoryResponseShape', ],
        ],
        'DescribeAlarms' => [
            'name' => 'DescribeAlarms',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/alarms',
            ],
            'input' => [ 'shape' => 'DescribeAlarmsRequestShape', ],
            'output' => [ 'shape' => 'DescribeAlarmsResponseShape', ],
        ],
        'CreateAlarm' => [
            'name' => 'CreateAlarm',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/alarms',
            ],
            'input' => [ 'shape' => 'CreateAlarmRequestShape', ],
            'output' => [ 'shape' => 'CreateAlarmResponseShape', ],
        ],
        'DescribeAlarmsByID' => [
            'name' => 'DescribeAlarmsByID',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/alarms/{alarmId}',
            ],
            'input' => [ 'shape' => 'DescribeAlarmsByIDRequestShape', ],
            'output' => [ 'shape' => 'DescribeAlarmsByIDResponseShape', ],
        ],
        'UpdateAlarm' => [
            'name' => 'UpdateAlarm',
            'http' => [
                'method' => 'PATCH',
                'requestUri' => '/v1/regions/{regionId}/alarms/{alarmId}',
            ],
            'input' => [ 'shape' => 'UpdateAlarmRequestShape', ],
            'output' => [ 'shape' => 'UpdateAlarmResponseShape', ],
        ],
        'DisableAlarm' => [
            'name' => 'DisableAlarm',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/alarms/{alarmId}:disable',
            ],
            'input' => [ 'shape' => 'DisableAlarmRequestShape', ],
            'output' => [ 'shape' => 'DisableAlarmResponseShape', ],
        ],
        'EnableAlarm' => [
            'name' => 'EnableAlarm',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/alarms/{alarmId}:enable',
            ],
            'input' => [ 'shape' => 'EnableAlarmRequestShape', ],
            'output' => [ 'shape' => 'EnableAlarmResponseShape', ],
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
        'DescribeMetricsForCreateAlarm' => [
            'name' => 'DescribeMetricsForCreateAlarm',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/metricsForCreateAlarm',
            ],
            'input' => [ 'shape' => 'DescribeMetricsForCreateAlarmRequestShape', ],
            'output' => [ 'shape' => 'DescribeMetricsForCreateAlarmResponseShape', ],
        ],
        'LastDownsample' => [
            'name' => 'LastDownsample',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/metrics/{metric}/lastDownsample',
            ],
            'input' => [ 'shape' => 'LastDownsampleRequestShape', ],
            'output' => [ 'shape' => 'LastDownsampleResponseShape', ],
        ],
        'DescribeMetricData' => [
            'name' => 'DescribeMetricData',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/metrics/{metric}/metricData',
            ],
            'input' => [ 'shape' => 'DescribeMetricDataRequestShape', ],
            'output' => [ 'shape' => 'DescribeMetricDataResponseShape', ],
        ],
        'PutMetricData' => [
            'name' => 'PutMetricData',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/customMetrics',
            ],
            'input' => [ 'shape' => 'PutMetricDataRequestShape', ],
            'output' => [ 'shape' => 'PutMetricDataResponseShape', ],
        ],
    ],
    'shapes' => [
        'Alarm' => [
            'type' => 'structure',
            'members' => [
                'calculation' => [ 'type' => 'string', 'locationName' => 'calculation', ],
                'contactGroups' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'contactPersons' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'enabled' => [ 'type' => 'long', 'locationName' => 'enabled', ],
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
                'metric' => [ 'type' => 'string', 'locationName' => 'metric', ],
                'metricName' => [ 'type' => 'string', 'locationName' => 'metricName', ],
                'noticePeriod' => [ 'type' => 'long', 'locationName' => 'noticePeriod', ],
                'noticeTime' => [ 'type' => 'string', 'locationName' => 'noticeTime', ],
                'operation' => [ 'type' => 'string', 'locationName' => 'operation', ],
                'period' => [ 'type' => 'long', 'locationName' => 'period', ],
                'region' => [ 'type' => 'string', 'locationName' => 'region', ],
                'resourceId' => [ 'type' => 'string', 'locationName' => 'resourceId', ],
                'serviceCode' => [ 'type' => 'string', 'locationName' => 'serviceCode', ],
                'status' => [ 'type' => 'long', 'locationName' => 'status', ],
                'tag' => [ 'type' => 'string', 'locationName' => 'tag', ],
                'threshold' => [ 'type' => 'double', 'locationName' => 'threshold', ],
                'times' => [ 'type' => 'long', 'locationName' => 'times', ],
                'value' => [ 'type' => 'double', 'locationName' => 'value', ],
            ],
        ],
        'BaseContact' => [
            'type' => 'structure',
            'members' => [
                'referenceId' => [ 'type' => 'long', 'locationName' => 'referenceId', ],
                'referenceType' => [ 'type' => 'long', 'locationName' => 'referenceType', ],
            ],
        ],
        'BaseRule' => [
            'type' => 'structure',
            'members' => [
                'autoScalingPolicyId' => [ 'type' => 'string', 'locationName' => 'autoScalingPolicyId', ],
                'calculateUnit' => [ 'type' => 'string', 'locationName' => 'calculateUnit', ],
                'calculation' => [ 'type' => 'string', 'locationName' => 'calculation', ],
                'downSample' => [ 'type' => 'string', 'locationName' => 'downSample', ],
                'metric' => [ 'type' => 'string', 'locationName' => 'metric', ],
                'noticeLevel' =>  [ 'shape' => 'NoticeLevel', ],
                'noticePeriod' => [ 'type' => 'long', 'locationName' => 'noticePeriod', ],
                'operation' => [ 'type' => 'string', 'locationName' => 'operation', ],
                'period' => [ 'type' => 'long', 'locationName' => 'period', ],
                'ruleType' => [ 'type' => 'long', 'locationName' => 'ruleType', ],
                'tags' => [ 'type' => 'object', 'locationName' => 'tags', ],
                'threshold' => [ 'type' => 'double', 'locationName' => 'threshold', ],
                'times' => [ 'type' => 'long', 'locationName' => 'times', ],
            ],
        ],
        'NoticeLevel' => [
            'type' => 'structure',
            'members' => [
                'custom' => [ 'type' => 'boolean', 'locationName' => 'custom', ],
                'levels' => [ 'type' => 'object', 'locationName' => 'levels', ],
            ],
        ],
        'BatchCreateAlarmsSpec' => [
            'type' => 'structure',
            'members' => [
                'clientToken' => [ 'type' => 'string', 'locationName' => 'clientToken', ],
                'contacts' => [ 'type' => 'list', 'member' => [ 'shape' => 'BaseContact', ], ],
                'datacenter' => [ 'type' => 'string', 'locationName' => 'datacenter', ],
                'resourceIds' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'ruleType' => [ 'type' => 'long', 'locationName' => 'ruleType', ],
                'rules' => [ 'type' => 'list', 'member' => [ 'shape' => 'BaseRule', ], ],
                'saveTemplate' => [ 'type' => 'boolean', 'locationName' => 'saveTemplate', ],
                'serviceCode' => [ 'type' => 'string', 'locationName' => 'serviceCode', ],
                'templateName' => [ 'type' => 'string', 'locationName' => 'templateName', ],
                'templateServiceCode' => [ 'type' => 'string', 'locationName' => 'templateServiceCode', ],
                'webHookContent' => [ 'type' => 'string', 'locationName' => 'webHookContent', ],
                'webHookProtocol' => [ 'type' => 'string', 'locationName' => 'webHookProtocol', ],
                'webHookSecret' => [ 'type' => 'string', 'locationName' => 'webHookSecret', ],
                'webHookUrl' => [ 'type' => 'string', 'locationName' => 'webHookUrl', ],
            ],
        ],
        'BatchSwitchAlarmsSpec' => [
            'type' => 'structure',
            'members' => [
                'ids' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'CreateAlarmSpec' => [
            'type' => 'structure',
            'members' => [
                'contactGroups' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'contactPersons' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'downSample' => [ 'type' => 'string', 'locationName' => 'downSample', ],
                'metric' => [ 'type' => 'string', 'locationName' => 'metric', ],
                'noticePeriod' => [ 'type' => 'long', 'locationName' => 'noticePeriod', ],
                'resourceIds' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'serviceCode' => [ 'type' => 'string', 'locationName' => 'serviceCode', ],
                'threshold' => [ 'type' => 'double', 'locationName' => 'threshold', ],
                'times' => [ 'type' => 'long', 'locationName' => 'times', ],
            ],
        ],
        'DataPoint' => [
            'type' => 'structure',
            'members' => [
                'timestamp' => [ 'type' => 'long', 'locationName' => 'timestamp', ],
                'value' => [ 'type' => 'object', 'locationName' => 'value', ],
            ],
        ],
        'DescribedAlarm' => [
            'type' => 'structure',
            'members' => [
                'calculateUnit' => [ 'type' => 'string', 'locationName' => 'calculateUnit', ],
                'calculation' => [ 'type' => 'string', 'locationName' => 'calculation', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'downSample' => [ 'type' => 'string', 'locationName' => 'downSample', ],
                'enabled' => [ 'type' => 'long', 'locationName' => 'enabled', ],
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
                'metric' => [ 'type' => 'string', 'locationName' => 'metric', ],
                'metricName' => [ 'type' => 'string', 'locationName' => 'metricName', ],
                'noticeLevel' =>  [ 'shape' => 'NoticeLevel', ],
                'noticePeriod' => [ 'type' => 'long', 'locationName' => 'noticePeriod', ],
                'operation' => [ 'type' => 'string', 'locationName' => 'operation', ],
                'period' => [ 'type' => 'long', 'locationName' => 'period', ],
                'region' => [ 'type' => 'string', 'locationName' => 'region', ],
                'resourceId' => [ 'type' => 'string', 'locationName' => 'resourceId', ],
                'serviceCode' => [ 'type' => 'string', 'locationName' => 'serviceCode', ],
                'status' => [ 'type' => 'long', 'locationName' => 'status', ],
                'tags' => [ 'type' => 'object', 'locationName' => 'tags', ],
                'threshold' => [ 'type' => 'double', 'locationName' => 'threshold', ],
                'times' => [ 'type' => 'long', 'locationName' => 'times', ],
            ],
        ],
        'DescribedNoticeContacts' => [
            'type' => 'structure',
            'members' => [
                'referenceId' => [ 'type' => 'long', 'locationName' => 'referenceId', ],
                'referenceType' => [ 'type' => 'long', 'locationName' => 'referenceType', ],
            ],
        ],
        'DescribedAlarmHistory' => [
            'type' => 'structure',
            'members' => [
                'alarm' =>  [ 'shape' => 'DescribedAlarm', ],
                'contacts' => [ 'type' => 'list', 'member' => [ 'shape' => 'DescribedNoticeContacts', ], ],
                'noticeLevelTriggered' => [ 'type' => 'string', 'locationName' => 'noticeLevelTriggered', ],
                'noticeTime' => [ 'type' => 'string', 'locationName' => 'noticeTime', ],
                'value' => [ 'type' => 'double', 'locationName' => 'value', ],
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
        'MetricDataList' => [
            'type' => 'structure',
            'members' => [
                'errMetricData' => [ 'type' => 'string', 'locationName' => 'errMetricData', ],
                'errDetail' => [ 'type' => 'string', 'locationName' => 'errDetail', ],
            ],
        ],
        'ErrorBody' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'integer', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
            ],
        ],
        'Filter' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'values' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'LastDownsampleRespItem' => [
            'type' => 'structure',
            'members' => [
                'metric' => [ 'type' => 'string', 'locationName' => 'metric', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'value' => [ 'type' => 'object', 'locationName' => 'value', ],
            ],
        ],
        'Metric' => [
            'type' => 'structure',
            'members' => [
                'aggregator' => [ 'type' => 'string', 'locationName' => 'aggregator', ],
                'calculateUnit' => [ 'type' => 'string', 'locationName' => 'calculateUnit', ],
                'metric' => [ 'type' => 'string', 'locationName' => 'metric', ],
                'metricName' => [ 'type' => 'string', 'locationName' => 'metricName', ],
                'period' => [ 'type' => 'string', 'locationName' => 'period', ],
            ],
        ],
        'Tag' => [
            'type' => 'structure',
            'members' => [
                'tagKey' => [ 'type' => 'string', 'locationName' => 'tagKey', ],
                'tagValue' => [ 'type' => 'string', 'locationName' => 'tagValue', ],
            ],
        ],
        'MetricData' => [
            'type' => 'structure',
            'members' => [
                'data' => [ 'type' => 'list', 'member' => [ 'shape' => 'DataPoint', ], ],
                'metric' =>  [ 'shape' => 'Metric', ],
                'tags' => [ 'type' => 'list', 'member' => [ 'shape' => 'Tag', ], ],
            ],
        ],
        'MetricDataCm' => [
            'type' => 'structure',
            'members' => [
                'namespace' => [ 'type' => 'string', 'locationName' => 'namespace', ],
                'metric' => [ 'type' => 'string', 'locationName' => 'metric', ],
                'dimensions' => [ 'type' => 'object', 'locationName' => 'dimensions', ],
                'timestamp' => [ 'type' => 'long', 'locationName' => 'timestamp', ],
                'type' => [ 'type' => 'integer', 'locationName' => 'type', ],
                'values' => [ 'type' => 'object', 'locationName' => 'values', ],
            ],
        ],
        'ServiceCodeMetrics' => [
            'type' => 'structure',
            'members' => [
                'metrics' => [ 'type' => 'list', 'member' => [ 'shape' => 'MetricDetail', ], ],
                'serviceCode' => [ 'type' => 'string', 'locationName' => 'serviceCode', ],
            ],
        ],
        'MetricDetail' => [
            'type' => 'structure',
            'members' => [
                'calculateUnit' => [ 'type' => 'string', 'locationName' => 'calculateUnit', ],
                'metric' => [ 'type' => 'string', 'locationName' => 'metric', ],
                'metricName' => [ 'type' => 'string', 'locationName' => 'metricName', ],
                'serviceCode' => [ 'type' => 'string', 'locationName' => 'serviceCode', ],
                'downSample' => [ 'type' => 'string', 'locationName' => 'downSample', ],
            ],
        ],
        'DataPointX' => [
            'type' => 'structure',
            'members' => [
                'metric' => [ 'type' => 'string', 'locationName' => 'metric', ],
                'tags' => [ 'type' => 'object', 'locationName' => 'tags', ],
                'timestamp' => [ 'type' => 'long', 'locationName' => 'timestamp', ],
                'value' => [ 'type' => 'object', 'locationName' => 'value', ],
            ],
        ],
        'PutBody' => [
            'type' => 'structure',
            'members' => [
                'appCode' => [ 'type' => 'string', 'locationName' => 'appCode', ],
                'serviceCode' => [ 'type' => 'string', 'locationName' => 'serviceCode', ],
                'region' => [ 'type' => 'string', 'locationName' => 'region', ],
                'resourceId' => [ 'type' => 'string', 'locationName' => 'resourceId', ],
                'dataPoints' => [ 'type' => 'list', 'member' => [ 'shape' => 'DataPointX', ], ],
            ],
        ],
        'TagFilter' => [
            'type' => 'structure',
            'members' => [
                'key' => [ 'type' => 'string', 'locationName' => 'key', ],
                'values' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'TagKeyValue' => [
            'type' => 'structure',
            'members' => [
                'tagKey' => [ 'type' => 'string', 'locationName' => 'tagKey', ],
                'tagValue' => [ 'type' => 'string', 'locationName' => 'tagValue', ],
            ],
        ],
        'UpdateAlarmResponseEnd' => [
            'type' => 'structure',
            'members' => [
                'alarmId' => [ 'type' => 'string', 'locationName' => 'alarmId', ],
            ],
        ],
        'UpdateAlarmSpec' => [
            'type' => 'structure',
            'members' => [
                'contacts' => [ 'type' => 'list', 'member' => [ 'shape' => 'BaseContact', ], ],
                'rule' =>  [ 'shape' => 'BaseRule', ],
                'webHookContent' => [ 'type' => 'string', 'locationName' => 'webHookContent', ],
                'webHookProtocol' => [ 'type' => 'string', 'locationName' => 'webHookProtocol', ],
                'webHookSecret' => [ 'type' => 'string', 'locationName' => 'webHookSecret', ],
                'webHookUrl' => [ 'type' => 'string', 'locationName' => 'webHookUrl', ],
            ],
        ],
        'DescribeAlarmsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'long', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'long', 'locationName' => 'pageSize', ],
                'serviceCode' => [ 'type' => 'string', 'locationName' => 'serviceCode', ],
                'resourceID' => [ 'type' => 'string', 'locationName' => 'resourceID', ],
                'ruleType' => [ 'type' => 'long', 'locationName' => 'ruleType', ],
                'status' => [ 'type' => 'long', 'locationName' => 'status', ],
                'enabled' => [ 'type' => 'long', 'locationName' => 'enabled', ],
                'isAlarming' => [ 'type' => 'long', 'locationName' => 'isAlarming', ],
                'alarmId' => [ 'type' => 'string', 'locationName' => 'alarmId', ],
                'filters' => [ 'type' => 'list', 'member' => [ 'shape' => 'Filter', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DescribeAlarmHistoryResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'DescribeAlarmHistoryResultShape', ],
            ],
        ],
        'EnableAlarmResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'UpdateAlarmRequestShape' => [
            'type' => 'structure',
            'members' => [
                'contacts' => [ 'type' => 'list', 'member' => [ 'shape' => 'BaseContact', ], ],
                'rule' =>  [ 'shape' => 'BaseRule', ],
                'webHookContent' => [ 'type' => 'string', 'locationName' => 'webHookContent', ],
                'webHookProtocol' => [ 'type' => 'string', 'locationName' => 'webHookProtocol', ],
                'webHookSecret' => [ 'type' => 'string', 'locationName' => 'webHookSecret', ],
                'webHookUrl' => [ 'type' => 'string', 'locationName' => 'webHookUrl', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'alarmId' => [ 'type' => 'string', 'locationName' => 'alarmId', ],
            ],
        ],
        'DescribeAlarmsByIDRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'alarmId' => [ 'type' => 'string', 'locationName' => 'alarmId', ],
            ],
        ],
        'DescribeAlarmsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'DescribeAlarmsResultShape', ],
            ],
        ],
        'UpdateAlarmResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DescribeAlarmHistoryRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'long', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'long', 'locationName' => 'pageSize', ],
                'serviceCode' => [ 'type' => 'string', 'locationName' => 'serviceCode', ],
                'resourceId' => [ 'type' => 'string', 'locationName' => 'resourceId', ],
                'alarmId' => [ 'type' => 'string', 'locationName' => 'alarmId', ],
                'alarming' => [ 'type' => 'long', 'locationName' => 'alarming', ],
                'startTime' => [ 'type' => 'string', 'locationName' => 'startTime', ],
                'endTime' => [ 'type' => 'string', 'locationName' => 'endTime', ],
                'filters' => [ 'type' => 'list', 'member' => [ 'shape' => 'Filter', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'EnableAlarmResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DescribeAlarmContactsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'DescribeAlarmContactsResultShape', ],
            ],
        ],
        'CreateAlarmResultShape' => [
            'type' => 'structure',
            'members' => [
                'alarmIdList' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'DisableAlarmResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DisableAlarmResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeAlarmHistoryResultShape' => [
            'type' => 'structure',
            'members' => [
                'alarmHistoryList' => [ 'type' => 'list', 'member' => [ 'shape' => 'DescribedAlarmHistory', ], ],
                'total' => [ 'type' => 'long', 'locationName' => 'total', ],
            ],
        ],
        'DescribeAlarmsByIDResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'DescribeAlarmsByIDResultShape', ],
            ],
        ],
        'DescribeAlarmsResultShape' => [
            'type' => 'structure',
            'members' => [
                'alarmList' => [ 'type' => 'list', 'member' => [ 'shape' => 'DescribedAlarm', ], ],
                'total' => [ 'type' => 'long', 'locationName' => 'total', ],
            ],
        ],
        'CreateAlarmResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'CreateAlarmResultShape', ],
            ],
        ],
        'DescribeAlarmContactsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'long', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'long', 'locationName' => 'pageSize', ],
                'referenceType' => [ 'type' => 'long', 'locationName' => 'referenceType', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'alarmId' => [ 'type' => 'string', 'locationName' => 'alarmId', ],
            ],
        ],
        'DisableAlarmRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'alarmId' => [ 'type' => 'string', 'locationName' => 'alarmId', ],
            ],
        ],
        'EnableAlarmRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'alarmId' => [ 'type' => 'string', 'locationName' => 'alarmId', ],
            ],
        ],
        'DescribeAlarmsByIDResultShape' => [
            'type' => 'structure',
            'members' => [
                'alarm' =>  [ 'shape' => 'Alarm', ],
            ],
        ],
        'UpdateAlarmResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'CreateAlarmRequestShape' => [
            'type' => 'structure',
            'members' => [
                'contactGroups' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'contactPersons' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'downSample' => [ 'type' => 'string', 'locationName' => 'downSample', ],
                'metric' => [ 'type' => 'string', 'locationName' => 'metric', ],
                'noticePeriod' => [ 'type' => 'long', 'locationName' => 'noticePeriod', ],
                'resourceIds' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'serviceCode' => [ 'type' => 'string', 'locationName' => 'serviceCode', ],
                'threshold' => [ 'type' => 'double', 'locationName' => 'threshold', ],
                'times' => [ 'type' => 'long', 'locationName' => 'times', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DescribeAlarmContactsResultShape' => [
            'type' => 'structure',
            'members' => [
                'contactsList' => [ 'type' => 'list', 'member' => [ 'shape' => 'DescribedNoticeContacts', ], ],
                'total' => [ 'type' => 'long', 'locationName' => 'total', ],
            ],
        ],
        'LastDownsampleRequestShape' => [
            'type' => 'structure',
            'members' => [
                'serviceCode' => [ 'type' => 'string', 'locationName' => 'serviceCode', ],
                'resourceId' => [ 'type' => 'string', 'locationName' => 'resourceId', ],
                'tags' => [ 'type' => 'list', 'member' => [ 'shape' => 'TagFilter', ], ],
                'startTime' => [ 'type' => 'string', 'locationName' => 'startTime', ],
                'endTime' => [ 'type' => 'string', 'locationName' => 'endTime', ],
                'timeInterval' => [ 'type' => 'string', 'locationName' => 'timeInterval', ],
                'aggrType' => [ 'type' => 'string', 'locationName' => 'aggrType', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'metric' => [ 'type' => 'string', 'locationName' => 'metric', ],
            ],
        ],
        'DescribeMetricDataResultShape' => [
            'type' => 'structure',
            'members' => [
                'metricDatas' => [ 'type' => 'list', 'member' => [ 'shape' => 'MetricData', ], ],
            ],
        ],
        'LastDownsampleResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'LastDownsampleResultShape', ],
            ],
        ],
        'DescribeMetricsForCreateAlarmResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'DescribeMetricsForCreateAlarmResultShape', ],
            ],
        ],
        'DescribeMetricDataRequestShape' => [
            'type' => 'structure',
            'members' => [
                'serviceCode' => [ 'type' => 'string', 'locationName' => 'serviceCode', ],
                'resourceId' => [ 'type' => 'string', 'locationName' => 'resourceId', ],
                'startTime' => [ 'type' => 'string', 'locationName' => 'startTime', ],
                'endTime' => [ 'type' => 'string', 'locationName' => 'endTime', ],
                'timeInterval' => [ 'type' => 'string', 'locationName' => 'timeInterval', ],
                'tags' => [ 'type' => 'list', 'member' => [ 'shape' => 'TagFilter', ], ],
                'groupBy' => [ 'type' => 'boolean', 'locationName' => 'groupBy', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'metric' => [ 'type' => 'string', 'locationName' => 'metric', ],
            ],
        ],
        'DescribeMetricsResultShape' => [
            'type' => 'structure',
            'members' => [
                'metrics' => [ 'type' => 'list', 'member' => [ 'shape' => 'MetricDetail', ], ],
            ],
        ],
        'LastDownsampleResultShape' => [
            'type' => 'structure',
            'members' => [
                'items' => [ 'type' => 'list', 'member' => [ 'shape' => 'LastDownsampleRespItem', ], ],
            ],
        ],
        'DescribeMetricsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'serviceCode' => [ 'type' => 'string', 'locationName' => 'serviceCode', ],
            ],
        ],
        'DescribeMetricDataResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'DescribeMetricDataResultShape', ],
            ],
        ],
        'DescribeMetricsForCreateAlarmResultShape' => [
            'type' => 'structure',
            'members' => [
                'serviceCodeList' => [ 'type' => 'list', 'member' => [ 'shape' => 'ServiceCodeMetrics', ], ],
            ],
        ],
        'DescribeMetricsForCreateAlarmRequestShape' => [
            'type' => 'structure',
            'members' => [
                'serviceCode' => [ 'type' => 'string', 'locationName' => 'serviceCode', ],
            ],
        ],
        'DescribeMetricsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'DescribeMetricsResultShape', ],
            ],
        ],
        'PutMetricDataResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'error' =>  [ 'shape' => 'PutMetricDataResultShape', ],
                'result' =>  [ 'shape' => 'PutMetricDataResultShape', ],
            ],
        ],
        'PutMetricDataResultShape' => [
            'type' => 'structure',
            'members' => [
                'success' => [ 'type' => 'boolean', 'locationName' => 'success', ],
                'errMetricDataList' => [ 'type' => 'list', 'member' => [ 'shape' => 'MetricDataList', ], ],
            ],
        ],
        'PutMetricDataRequestShape' => [
            'type' => 'structure',
            'members' => [
                'metricDataList' => [ 'type' => 'list', 'member' => [ 'type' => '', ], ],
            ],
        ],
    ],
];
