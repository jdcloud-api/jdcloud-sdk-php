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
        'DeleteAlarms' => [
            'name' => 'DeleteAlarms',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/regions/{regionId}/alarms',
            ],
            'input' => [ 'shape' => 'DeleteAlarmsRequestShape', ],
            'output' => [ 'shape' => 'DeleteAlarmsResponseShape', ],
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
        'EnableAlarm' => [
            'name' => 'EnableAlarm',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/alarms/{alarmId}:enable',
            ],
            'input' => [ 'shape' => 'EnableAlarmRequestShape', ],
            'output' => [ 'shape' => 'EnableAlarmResponseShape', ],
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
        'DescribeAlarmHistory' => [
            'name' => 'DescribeAlarmHistory',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/alarmHistory',
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
        'DescribeMetricsForCreateAlarm' => [
            'name' => 'DescribeMetricsForCreateAlarm',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/metricsForCreateAlarm',
            ],
            'input' => [ 'shape' => 'DescribeMetricsForCreateAlarmRequestShape', ],
            'output' => [ 'shape' => 'DescribeMetricsForCreateAlarmResponseShape', ],
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
        'CreateAlarmSpec' => [
            'type' => 'structure',
            'members' => [
                'calculation' => [ 'type' => 'string', 'locationName' => 'calculation', ],
                'contactGroups' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'contactPersons' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'downSample' => [ 'type' => 'string', 'locationName' => 'downSample', ],
                'metric' => [ 'type' => 'string', 'locationName' => 'metric', ],
                'noticePeriod' => [ 'type' => 'integer', 'locationName' => 'noticePeriod', ],
                'operation' => [ 'type' => 'string', 'locationName' => 'operation', ],
                'period' => [ 'type' => 'integer', 'locationName' => 'period', ],
                'resourceIds' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'serviceCode' => [ 'type' => 'string', 'locationName' => 'serviceCode', ],
                'threshold' => [ 'type' => 'double', 'locationName' => 'threshold', ],
                'times' => [ 'type' => 'integer', 'locationName' => 'times', ],
            ],
        ],
        'UpdateAlarmBody' => [
            'type' => 'structure',
            'members' => [
                'calculation' => [ 'type' => 'string', 'locationName' => 'calculation', ],
                'contactGroups' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'contactPersons' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'downSample' => [ 'type' => 'string', 'locationName' => 'downSample', ],
                'metric' => [ 'type' => 'string', 'locationName' => 'metric', ],
                'noticePeriod' => [ 'type' => 'integer', 'locationName' => 'noticePeriod', ],
                'operation' => [ 'type' => 'string', 'locationName' => 'operation', ],
                'period' => [ 'type' => 'integer', 'locationName' => 'period', ],
                'serviceCode' => [ 'type' => 'string', 'locationName' => 'serviceCode', ],
                'threshold' => [ 'type' => 'double', 'locationName' => 'threshold', ],
                'times' => [ 'type' => 'integer', 'locationName' => 'times', ],
            ],
        ],
        'CreateAlarmBody' => [
            'type' => 'structure',
            'members' => [
                'clientToken' => [ 'type' => 'string', 'locationName' => 'clientToken', ],
                'createAlarmSpec' =>  [ 'shape' => 'CreateAlarmSpec', ],
            ],
        ],
        'AlarmHistory' => [
            'type' => 'structure',
            'members' => [
                'calculation' => [ 'type' => 'string', 'locationName' => 'calculation', ],
                'contactGroups' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'contactPersons' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'deleted' => [ 'type' => 'integer', 'locationName' => 'deleted', ],
                'enabled' => [ 'type' => 'integer', 'locationName' => 'enabled', ],
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
                'metric' => [ 'type' => 'string', 'locationName' => 'metric', ],
                'metricName' => [ 'type' => 'string', 'locationName' => 'metricName', ],
                'noticePeriod' => [ 'type' => 'integer', 'locationName' => 'noticePeriod', ],
                'noticeTime' => [ 'type' => 'string', 'locationName' => 'noticeTime', ],
                'operation' => [ 'type' => 'string', 'locationName' => 'operation', ],
                'period' => [ 'type' => 'integer', 'locationName' => 'period', ],
                'region' => [ 'type' => 'string', 'locationName' => 'region', ],
                'resourceId' => [ 'type' => 'string', 'locationName' => 'resourceId', ],
                'serviceCode' => [ 'type' => 'string', 'locationName' => 'serviceCode', ],
                'tag' => [ 'type' => 'string', 'locationName' => 'tag', ],
                'threshold' => [ 'type' => 'double', 'locationName' => 'threshold', ],
                'times' => [ 'type' => 'integer', 'locationName' => 'times', ],
                'value' => [ 'type' => 'double', 'locationName' => 'value', ],
            ],
        ],
        'Alarm' => [
            'type' => 'structure',
            'members' => [
                'calculation' => [ 'type' => 'string', 'locationName' => 'calculation', ],
                'contactGroups' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'contactPersons' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'enabled' => [ 'type' => 'integer', 'locationName' => 'enabled', ],
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
                'metric' => [ 'type' => 'string', 'locationName' => 'metric', ],
                'metricName' => [ 'type' => 'string', 'locationName' => 'metricName', ],
                'noticePeriod' => [ 'type' => 'integer', 'locationName' => 'noticePeriod', ],
                'noticeTime' => [ 'type' => 'string', 'locationName' => 'noticeTime', ],
                'operation' => [ 'type' => 'string', 'locationName' => 'operation', ],
                'period' => [ 'type' => 'integer', 'locationName' => 'period', ],
                'region' => [ 'type' => 'string', 'locationName' => 'region', ],
                'resourceId' => [ 'type' => 'string', 'locationName' => 'resourceId', ],
                'serviceCode' => [ 'type' => 'string', 'locationName' => 'serviceCode', ],
                'status' => [ 'type' => 'integer', 'locationName' => 'status', ],
                'tag' => [ 'type' => 'string', 'locationName' => 'tag', ],
                'threshold' => [ 'type' => 'double', 'locationName' => 'threshold', ],
                'times' => [ 'type' => 'integer', 'locationName' => 'times', ],
                'value' => [ 'type' => 'double', 'locationName' => 'value', ],
            ],
        ],
        'DataPoint' => [
            'type' => 'structure',
            'members' => [
                'timestamp' => [ 'type' => 'int64', 'locationName' => 'timestamp', ],
                'value' => [ 'type' => 'string', 'locationName' => 'value', ],
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
                'calculateUnit' => [ 'type' => 'string', 'locationName' => 'calculateUnit', ],
                'metric' => [ 'type' => 'string', 'locationName' => 'metric', ],
                'metricName' => [ 'type' => 'string', 'locationName' => 'metricName', ],
            ],
        ],
        'MetricData' => [
            'type' => 'structure',
            'members' => [
                'data' => [ 'type' => 'list', 'member' => [ 'shape' => 'DataPoint', ], ],
                'metric' =>  [ 'shape' => 'Metric', ],
            ],
        ],
        'MetricDataCm' => [
            'type' => 'structure',
            'members' => [
                'namespace' => [ 'type' => 'string', 'locationName' => 'namespace', ],
                'metric' => [ 'type' => 'string', 'locationName' => 'metric', ],
                'dimensions' => [ 'type' => 'object', 'locationName' => 'dimensions', ],
                'timestamp' => [ 'type' => 'int64', 'locationName' => 'timestamp', ],
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
        'TagFilter' => [
            'type' => 'structure',
            'members' => [
                'key' => [ 'type' => 'string', 'locationName' => 'key', ],
                'values' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'DescribeAlarmsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'serviceCode' => [ 'type' => 'string', 'locationName' => 'serviceCode', ],
                'resourceId' => [ 'type' => 'string', 'locationName' => 'resourceId', ],
                'status' => [ 'type' => 'integer', 'locationName' => 'status', ],
                'isAlarming' => [ 'type' => 'integer', 'locationName' => 'isAlarming', ],
                'enabled' => [ 'type' => 'integer', 'locationName' => 'enabled', ],
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DeleteAlarmsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'ids' => [ 'type' => 'string', 'locationName' => 'ids', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DescribeAlarmHistoryResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeAlarmHistoryResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
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
                'calculation' => [ 'type' => 'string', 'locationName' => 'calculation', ],
                'contactGroups' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'contactPersons' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'downSample' => [ 'type' => 'string', 'locationName' => 'downSample', ],
                'metric' => [ 'type' => 'string', 'locationName' => 'metric', ],
                'noticePeriod' => [ 'type' => 'integer', 'locationName' => 'noticePeriod', ],
                'operation' => [ 'type' => 'string', 'locationName' => 'operation', ],
                'period' => [ 'type' => 'integer', 'locationName' => 'period', ],
                'serviceCode' => [ 'type' => 'string', 'locationName' => 'serviceCode', ],
                'threshold' => [ 'type' => 'double', 'locationName' => 'threshold', ],
                'times' => [ 'type' => 'integer', 'locationName' => 'times', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'alarmId' => [ 'type' => 'string', 'locationName' => 'alarmId', ],
            ],
        ],
        'DescribeAlarmsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeAlarmsResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeAlarmsByIDRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'alarmId' => [ 'type' => 'string', 'locationName' => 'alarmId', ],
            ],
        ],
        'UpdateAlarmResultShape' => [
            'type' => 'structure',
            'members' => [
                'alarmId' => [ 'type' => 'string', 'locationName' => 'alarmId', ],
            ],
        ],
        'DescribeAlarmHistoryRequestShape' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
                'serviceCode' => [ 'type' => 'string', 'locationName' => 'serviceCode', ],
                'resourceId' => [ 'type' => 'string', 'locationName' => 'resourceId', ],
                'startTime' => [ 'type' => 'string', 'locationName' => 'startTime', ],
                'endTime' => [ 'type' => 'string', 'locationName' => 'endTime', ],
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'EnableAlarmResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DeleteAlarmsResultShape' => [
            'type' => 'structure',
            'members' => [
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
                'alarmHistoryList' => [ 'type' => 'list', 'member' => [ 'shape' => 'AlarmHistory', ], ],
                'pageNumber' => [ 'type' => 'double', 'locationName' => 'pageNumber', ],
                'numberPages' => [ 'type' => 'double', 'locationName' => 'numberPages', ],
                'numberRecords' => [ 'type' => 'double', 'locationName' => 'numberRecords', ],
                'pageSize' => [ 'type' => 'double', 'locationName' => 'pageSize', ],
            ],
        ],
        'DescribeAlarmsByIDResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeAlarmsByIDResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'CreateAlarmResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'CreateAlarmResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeAlarmsResultShape' => [
            'type' => 'structure',
            'members' => [
                'alarmList' => [ 'type' => 'list', 'member' => [ 'shape' => 'Alarm', ], ],
                'pageNumber' => [ 'type' => 'double', 'locationName' => 'pageNumber', ],
                'numberPages' => [ 'type' => 'double', 'locationName' => 'numberPages', ],
                'numberRecords' => [ 'type' => 'double', 'locationName' => 'numberRecords', ],
                'pageSize' => [ 'type' => 'double', 'locationName' => 'pageSize', ],
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
                'result' =>  [ 'shape' => 'UpdateAlarmResultShape', ],
            ],
        ],
        'DeleteAlarmsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'CreateAlarmRequestShape' => [
            'type' => 'structure',
            'members' => [
                'clientToken' => [ 'type' => 'string', 'locationName' => 'clientToken', ],
                'createAlarmSpec' =>  [ 'shape' => 'CreateAlarmSpec', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DescribeMetricDataResultShape' => [
            'type' => 'structure',
            'members' => [
                'metricDatas' => [ 'type' => 'list', 'member' => [ 'shape' => 'MetricData', ], ],
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
