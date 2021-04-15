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
        'AddTagsSpec' => [
            'type' => 'structure',
            'members' => [
                'appCode' => [ 'type' => 'string', 'locationName' => 'appCode', ],
                'groupCode' => [ 'type' => 'string', 'locationName' => 'groupCode', ],
                'resourceIds' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'serviceCode' => [ 'type' => 'string', 'locationName' => 'serviceCode', ],
                'srcServiceCode' => [ 'type' => 'string', 'locationName' => 'srcServiceCode', ],
                'tagK' => [ 'type' => 'string', 'locationName' => 'tagK', ],
                'tagV' => [ 'type' => 'string', 'locationName' => 'tagV', ],
            ],
        ],
        'AlarmNofityConfig' => [
            'type' => 'structure',
            'members' => [
                'arkNode' => [ 'type' => 'string', 'locationName' => 'arkNode', ],
                'channelName' => [ 'type' => 'string', 'locationName' => 'channelName', ],
                'channelUrl' => [ 'type' => 'string', 'locationName' => 'channelUrl', ],
            ],
        ],
        'AlarmUsage' => [
            'type' => 'structure',
            'members' => [
                'alarmType' => [ 'type' => 'string', 'locationName' => 'alarmType', ],
                'allCount' => [ 'type' => 'long', 'locationName' => 'allCount', ],
                'enableCount' => [ 'type' => 'long', 'locationName' => 'enableCount', ],
            ],
        ],
        'BaseContact' => [
            'type' => 'structure',
            'members' => [
                'referenceId' => [ 'type' => 'long', 'locationName' => 'referenceId', ],
                'referenceType' => [ 'type' => 'long', 'locationName' => 'referenceType', ],
            ],
        ],
        'AlarmVo' => [
            'type' => 'structure',
            'members' => [
                'calculateUnit' => [ 'type' => 'string', 'locationName' => 'calculateUnit', ],
                'calculation' => [ 'type' => 'string', 'locationName' => 'calculation', ],
                'contacts' => [ 'type' => 'list', 'member' => [ 'shape' => 'BaseContact', ], ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'deleted' => [ 'type' => 'long', 'locationName' => 'deleted', ],
                'downSample' => [ 'type' => 'string', 'locationName' => 'downSample', ],
                'id' => [ 'type' => 'long', 'locationName' => 'id', ],
                'metric' => [ 'type' => 'string', 'locationName' => 'metric', ],
                'metricId' => [ 'type' => 'long', 'locationName' => 'metricId', ],
                'metricName' => [ 'type' => 'string', 'locationName' => 'metricName', ],
                'noticeLevel' =>  [ 'shape' => 'NoticeLevel', ],
                'noticePeriod' => [ 'type' => 'long', 'locationName' => 'noticePeriod', ],
                'operation' => [ 'type' => 'string', 'locationName' => 'operation', ],
                'period' => [ 'type' => 'long', 'locationName' => 'period', ],
                'ruleType' => [ 'type' => 'long', 'locationName' => 'ruleType', ],
                'serviceCode' => [ 'type' => 'string', 'locationName' => 'serviceCode', ],
                'tag' => [ 'type' => 'string', 'locationName' => 'tag', ],
                'tags' => [ 'type' => 'map', 'key' => [ 'shape' => 'string', ], 'value' => [ 'shape' => 'string', ], ],
                'threshold' => [ 'type' => 'double', 'locationName' => 'threshold', ],
                'times' => [ 'type' => 'long', 'locationName' => 'times', ],
                'updateTime' => [ 'type' => 'string', 'locationName' => 'updateTime', ],
            ],
        ],
        'NoticeLevel' => [
            'type' => 'structure',
            'members' => [
                'custom' => [ 'type' => 'boolean', 'locationName' => 'custom', ],
                'levels' => [ 'type' => 'map', 'key' => [ 'shape' => 'string', ], 'value' => [ 'shape' => 'double', ], ],
            ],
        ],
        'AlertChannel' => [
            'type' => 'structure',
            'members' => [
                'created' => [ 'type' => 'string', 'locationName' => 'created', ],
                'uid' => [ 'type' => 'string', 'locationName' => 'uid', ],
                'alertChannelType' => [ 'type' => 'string', 'locationName' => 'alertChannelType', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'settings' => [ 'type' => 'object', 'locationName' => 'settings', ],
            ],
        ],
        'AlertResource' => [
            'type' => 'structure',
            'members' => [
                'alertCount' => [ 'type' => 'long', 'locationName' => 'alertCount', ],
                'product' => [ 'type' => 'string', 'locationName' => 'product', ],
                'productName' => [ 'type' => 'string', 'locationName' => 'productName', ],
                'resourceId' => [ 'type' => 'string', 'locationName' => 'resourceId', ],
            ],
        ],
        'Annotation' => [
            'type' => 'structure',
            'members' => [
                'custom' => [ 'type' => 'map', 'key' => [ 'shape' => 'string', ], 'value' => [ 'shape' => 'string', ], ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'endTime' => [ 'type' => 'long', 'locationName' => 'endTime', ],
                'notes' => [ 'type' => 'string', 'locationName' => 'notes', ],
                'startTime' => [ 'type' => 'long', 'locationName' => 'startTime', ],
                'tsuid' => [ 'type' => 'string', 'locationName' => 'tsuid', ],
            ],
        ],
        'Attrs' => [
            'type' => 'structure',
            'members' => [
                'key' => [ 'type' => 'string', 'locationName' => 'key', ],
                'value' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
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
                'ruleName' => [ 'type' => 'string', 'locationName' => 'ruleName', ],
                'ruleType' => [ 'type' => 'long', 'locationName' => 'ruleType', ],
                'tags' => [ 'type' => 'map', 'key' => [ 'shape' => 'string', ], 'value' => [ 'shape' => 'string', ], ],
                'threshold' => [ 'type' => 'double', 'locationName' => 'threshold', ],
                'times' => [ 'type' => 'long', 'locationName' => 'times', ],
            ],
        ],
        'BaseRuleT' => [
            'type' => 'structure',
            'members' => [
                'autoScalingPolicyId' => [ 'type' => 'string', 'locationName' => 'autoScalingPolicyId', ],
                'calculateUnit' => [ 'type' => 'string', 'locationName' => 'calculateUnit', ],
                'calculation' => [ 'type' => 'string', 'locationName' => 'calculation', ],
                'downSample' => [ 'type' => 'string', 'locationName' => 'downSample', ],
                'metric' => [ 'type' => 'string', 'locationName' => 'metric', ],
                'metricId' => [ 'type' => 'long', 'locationName' => 'metricId', ],
                'noticeLevel' =>  [ 'shape' => 'NoticeLevel', ],
                'noticePeriod' => [ 'type' => 'long', 'locationName' => 'noticePeriod', ],
                'operation' => [ 'type' => 'string', 'locationName' => 'operation', ],
                'period' => [ 'type' => 'long', 'locationName' => 'period', ],
                'ruleType' => [ 'type' => 'long', 'locationName' => 'ruleType', ],
                'tags' => [ 'type' => 'map', 'key' => [ 'shape' => 'string', ], 'value' => [ 'shape' => 'string', ], ],
                'threshold' => [ 'type' => 'double', 'locationName' => 'threshold', ],
                'times' => [ 'type' => 'long', 'locationName' => 'times', ],
            ],
        ],
        'BasicCustomRule' => [
            'type' => 'structure',
            'members' => [
                'calculation' => [ 'type' => 'string', 'locationName' => 'calculation', ],
                'metric' => [ 'type' => 'string', 'locationName' => 'metric', ],
                'noticeLevel' =>  [ 'shape' => 'NoticeLevel', ],
                'operation' => [ 'type' => 'string', 'locationName' => 'operation', ],
                'period' => [ 'type' => 'long', 'locationName' => 'period', ],
                'threshold' => [ 'type' => 'double', 'locationName' => 'threshold', ],
                'times' => [ 'type' => 'long', 'locationName' => 'times', ],
            ],
        ],
        'BasicDatasource' => [
            'type' => 'structure',
            'members' => [
                'customHttpHeader' => [ 'type' => 'map', 'key' => [ 'shape' => 'string', ], 'value' => [ 'shape' => 'string', ], ],
                'opentsdbExtend' =>  [ 'shape' => 'OpentsdbExtend', ],
                'pluginType' => [ 'type' => 'string', 'locationName' => 'pluginType', ],
                'url' => [ 'type' => 'string', 'locationName' => 'url', ],
            ],
        ],
        'OpentsdbExtend' => [
            'type' => 'structure',
            'members' => [
                'jdcloudDatasourceType' => [ 'type' => 'string', 'locationName' => 'jdcloudDatasourceType', ],
                'jdcloudTsdbToken' => [ 'type' => 'string', 'locationName' => 'jdcloudTsdbToken', ],
            ],
        ],
        'BasicRule' => [
            'type' => 'structure',
            'members' => [
                'calculation' => [ 'type' => 'string', 'locationName' => 'calculation', ],
                'downSample' => [ 'type' => 'string', 'locationName' => 'downSample', ],
                'metric' => [ 'type' => 'string', 'locationName' => 'metric', ],
                'noticeLevel' =>  [ 'shape' => 'NoticeLevel', ],
                'operation' => [ 'type' => 'string', 'locationName' => 'operation', ],
                'period' => [ 'type' => 'long', 'locationName' => 'period', ],
                'threshold' => [ 'type' => 'double', 'locationName' => 'threshold', ],
                'times' => [ 'type' => 'long', 'locationName' => 'times', ],
            ],
        ],
        'BasicRuleDetail' => [
            'type' => 'structure',
            'members' => [
                'calculateUnit' => [ 'type' => 'string', 'locationName' => 'calculateUnit', ],
                'calculation' => [ 'type' => 'string', 'locationName' => 'calculation', ],
                'downSample' => [ 'type' => 'string', 'locationName' => 'downSample', ],
                'metric' => [ 'type' => 'string', 'locationName' => 'metric', ],
                'metricName' => [ 'type' => 'string', 'locationName' => 'metricName', ],
                'noticeLevel' =>  [ 'shape' => 'NoticeLevel', ],
                'operation' => [ 'type' => 'string', 'locationName' => 'operation', ],
                'period' => [ 'type' => 'long', 'locationName' => 'period', ],
                'threshold' => [ 'type' => 'double', 'locationName' => 'threshold', ],
                'times' => [ 'type' => 'long', 'locationName' => 'times', ],
            ],
        ],
        'BatchUpdateWidgetError' => [
            'type' => 'structure',
            'members' => [
                'dashboardId' => [ 'type' => 'string', 'locationName' => 'dashboardId', ],
                'error' => [ 'type' => 'string', 'locationName' => 'error', ],
                'widgetId' => [ 'type' => 'string', 'locationName' => 'widgetId', ],
            ],
        ],
        'BatchUpdateWidgetSpec' => [
            'type' => 'structure',
            'members' => [
                'list' => [ 'type' => 'list', 'member' => [ 'shape' => 'Widget', ], ],
            ],
        ],
        'WidgetRawResource' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'resourceId' => [ 'type' => 'string', 'locationName' => 'resourceId', ],
                'tag' => [ 'type' => 'map', 'key' => [ 'shape' => 'string', ], 'value' => [ 'shape' => 'string', ], ],
            ],
        ],
        'WidgetTagResource' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
                'key' => [ 'type' => 'string', 'locationName' => 'key', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'value' => [ 'type' => 'string', 'locationName' => 'value', ],
            ],
        ],
        'WidgetMetric' => [
            'type' => 'structure',
            'members' => [
                'aggregate' => [ 'type' => 'string', 'locationName' => 'aggregate', ],
                'metric' => [ 'type' => 'string', 'locationName' => 'metric', ],
                'metricName' => [ 'type' => 'string', 'locationName' => 'metricName', ],
            ],
        ],
        'Widget' => [
            'type' => 'structure',
            'members' => [
                'aggregated' => [ 'type' => 'string', 'locationName' => 'aggregated', ],
                'createdTime' => [ 'type' => 'long', 'locationName' => 'createdTime', ],
                'dashboardId' => [ 'type' => 'string', 'locationName' => 'dashboardId', ],
                'metrics' => [ 'type' => 'list', 'member' => [ 'shape' => 'WidgetMetric', ], ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'position' =>  [ 'shape' => 'WidgetPosition', ],
                'resources' =>  [ 'shape' => 'WidgetResources', ],
                'serviceCode' => [ 'type' => 'string', 'locationName' => 'serviceCode', ],
                'topN' => [ 'type' => 'uint64', 'locationName' => 'topN', ],
                'type' => [ 'type' => 'string', 'locationName' => 'type', ],
                'updatedTime' => [ 'type' => 'long', 'locationName' => 'updatedTime', ],
                'widgetId' => [ 'type' => 'string', 'locationName' => 'widgetId', ],
            ],
        ],
        'WidgetPosition' => [
            'type' => 'structure',
            'members' => [
                'col' => [ 'type' => 'uint64', 'locationName' => 'col', ],
                'createdTime' => [ 'type' => 'long', 'locationName' => 'createdTime', ],
                'order' => [ 'type' => 'uint64', 'locationName' => 'order', ],
                'row' => [ 'type' => 'uint64', 'locationName' => 'row', ],
                'sizeX' => [ 'type' => 'uint64', 'locationName' => 'sizeX', ],
                'sizeY' => [ 'type' => 'uint64', 'locationName' => 'sizeY', ],
                'updatedTime' => [ 'type' => 'long', 'locationName' => 'updatedTime', ],
            ],
        ],
        'WidgetResources' => [
            'type' => 'structure',
            'members' => [
                'raw' => [ 'type' => 'list', 'member' => [ 'shape' => 'WidgetRawResource', ], ],
                'tag' => [ 'type' => 'list', 'member' => [ 'shape' => 'WidgetTagResource', ], ],
            ],
        ],
        'Chart' => [
            'type' => 'structure',
            'members' => [
                'chartName' => [ 'type' => 'string', 'locationName' => 'chartName', ],
                'chartUnit' => [ 'type' => 'string', 'locationName' => 'chartUnit', ],
                'include' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'ChartDetail' => [
            'type' => 'structure',
            'members' => [
                'chartName' => [ 'type' => 'string', 'locationName' => 'chartName', ],
                'chartUnit' => [ 'type' => 'string', 'locationName' => 'chartUnit', ],
                'include' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'ChartDimension' => [
            'type' => 'structure',
            'members' => [
                'dimension' => [ 'type' => 'string', 'locationName' => 'dimension', ],
                'dimensionName' => [ 'type' => 'string', 'locationName' => 'dimensionName', ],
                'tags' => [ 'type' => 'map', 'key' => [ 'shape' => 'string', ], 'value' => [ 'shape' => 'string', ], ],
            ],
        ],
        'ChartDimensionDetail' => [
            'type' => 'structure',
            'members' => [
                'charts' => [ 'type' => 'list', 'member' => [ 'shape' => 'ChartDetail', ], ],
                'dimension' => [ 'type' => 'string', 'locationName' => 'dimension', ],
                'dimensionName' => [ 'type' => 'string', 'locationName' => 'dimensionName', ],
                'serviceCode' => [ 'type' => 'string', 'locationName' => 'serviceCode', ],
                'serviceName' => [ 'type' => 'string', 'locationName' => 'serviceName', ],
                'tags' => [ 'type' => 'map', 'key' => [ 'shape' => 'string', ], 'value' => [ 'shape' => 'string', ], ],
            ],
        ],
        'CloudMonitorAccessList' => [
            'type' => 'structure',
            'members' => [
                'allowedAll' => [ 'type' => 'boolean', 'locationName' => 'allowedAll', ],
                'serviceCodes' => [ 'type' => 'list', 'member' => [ 'shape' => 'CloudMonitorServiceCodeItem', ], ],
            ],
        ],
        'CloudMonitorServiceCodeItem' => [
            'type' => 'structure',
            'members' => [
                'serviceCode' => [ 'type' => 'string', 'locationName' => 'serviceCode', ],
                'serviceName' => [ 'type' => 'string', 'locationName' => 'serviceName', ],
            ],
        ],
        'CloudMonitorOption' => [
            'type' => 'structure',
            'members' => [
                'controllerType' => [ 'type' => 'long', 'locationName' => 'controllerType', ],
                'serviceCodes' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'CmAlarm' => [
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
                'namespace' => [ 'type' => 'string', 'locationName' => 'namespace', ],
                'namespaceUID' => [ 'type' => 'string', 'locationName' => 'namespaceUID', ],
                'noticePeriod' => [ 'type' => 'long', 'locationName' => 'noticePeriod', ],
                'noticeTime' => [ 'type' => 'string', 'locationName' => 'noticeTime', ],
                'obj' => [ 'type' => 'string', 'locationName' => 'obj', ],
                'objUID' => [ 'type' => 'string', 'locationName' => 'objUID', ],
                'operation' => [ 'type' => 'string', 'locationName' => 'operation', ],
                'period' => [ 'type' => 'long', 'locationName' => 'period', ],
                'region' => [ 'type' => 'string', 'locationName' => 'region', ],
                'resourceId' => [ 'type' => 'string', 'locationName' => 'resourceId', ],
                'rootRuleId' => [ 'type' => 'long', 'locationName' => 'rootRuleId', ],
                'ruleId' => [ 'type' => 'long', 'locationName' => 'ruleId', ],
                'ruleName' => [ 'type' => 'string', 'locationName' => 'ruleName', ],
                'serviceCode' => [ 'type' => 'string', 'locationName' => 'serviceCode', ],
                'status' => [ 'type' => 'long', 'locationName' => 'status', ],
                'tag' => [ 'type' => 'string', 'locationName' => 'tag', ],
                'threshold' => [ 'type' => 'double', 'locationName' => 'threshold', ],
                'times' => [ 'type' => 'long', 'locationName' => 'times', ],
                'value' => [ 'type' => 'double', 'locationName' => 'value', ],
            ],
        ],
        'CmAlarmHistory' => [
            'type' => 'structure',
            'members' => [
                'calculation' => [ 'type' => 'string', 'locationName' => 'calculation', ],
                'contactGroups' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'contactPersons' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'deleted' => [ 'type' => 'long', 'locationName' => 'deleted', ],
                'enabled' => [ 'type' => 'long', 'locationName' => 'enabled', ],
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
                'metric' => [ 'type' => 'string', 'locationName' => 'metric', ],
                'metricName' => [ 'type' => 'string', 'locationName' => 'metricName', ],
                'namespace' => [ 'type' => 'string', 'locationName' => 'namespace', ],
                'namespaceUID' => [ 'type' => 'string', 'locationName' => 'namespaceUID', ],
                'noticePeriod' => [ 'type' => 'long', 'locationName' => 'noticePeriod', ],
                'noticeTime' => [ 'type' => 'string', 'locationName' => 'noticeTime', ],
                'obj' => [ 'type' => 'string', 'locationName' => 'obj', ],
                'objUID' => [ 'type' => 'string', 'locationName' => 'objUID', ],
                'operation' => [ 'type' => 'string', 'locationName' => 'operation', ],
                'period' => [ 'type' => 'long', 'locationName' => 'period', ],
                'region' => [ 'type' => 'string', 'locationName' => 'region', ],
                'resourceId' => [ 'type' => 'string', 'locationName' => 'resourceId', ],
                'rootRuleId' => [ 'type' => 'long', 'locationName' => 'rootRuleId', ],
                'ruleId' => [ 'type' => 'long', 'locationName' => 'ruleId', ],
                'ruleName' => [ 'type' => 'string', 'locationName' => 'ruleName', ],
                'serviceCode' => [ 'type' => 'string', 'locationName' => 'serviceCode', ],
                'tag' => [ 'type' => 'string', 'locationName' => 'tag', ],
                'threshold' => [ 'type' => 'double', 'locationName' => 'threshold', ],
                'times' => [ 'type' => 'long', 'locationName' => 'times', ],
                'value' => [ 'type' => 'double', 'locationName' => 'value', ],
            ],
        ],
        'ConfigNotificationSpec' => [
            'type' => 'structure',
            'members' => [
                'actionType' => [ 'type' => 'string', 'locationName' => 'actionType', ],
                'msgDetail' =>  [ 'shape' => 'AlarmNofityConfig', ],
                'msgType' => [ 'type' => 'string', 'locationName' => 'msgType', ],
            ],
        ],
        'Contact' => [
            'type' => 'structure',
            'members' => [
                'category' => [ 'type' => 'string', 'locationName' => 'category', ],
                'id' => [ 'type' => 'long', 'locationName' => 'id', ],
            ],
        ],
        'WebHookOption' => [
            'type' => 'structure',
            'members' => [
                'webHookContent' => [ 'type' => 'string', 'locationName' => 'webHookContent', ],
                'webHookProtocol' => [ 'type' => 'string', 'locationName' => 'webHookProtocol', ],
                'webHookSecret' => [ 'type' => 'string', 'locationName' => 'webHookSecret', ],
                'webHookUrl' => [ 'type' => 'string', 'locationName' => 'webHookUrl', ],
            ],
        ],
        'CreateAlarmSpec' => [
            'type' => 'structure',
            'members' => [
                'autoScalingPolicyId' => [ 'type' => 'string', 'locationName' => 'autoScalingPolicyId', ],
                'baseContact' => [ 'type' => 'list', 'member' => [ 'shape' => 'BaseContact', ], ],
                'clientToken' => [ 'type' => 'string', 'locationName' => 'clientToken', ],
                'dataOwner' => [ 'type' => 'long', 'locationName' => 'dataOwner', ],
                'dimension' => [ 'type' => 'string', 'locationName' => 'dimension', ],
                'enabled' => [ 'type' => 'long', 'locationName' => 'enabled', ],
                'multiWebHook' => [ 'type' => 'list', 'member' => [ 'shape' => 'WebHookOption', ], ],
                'noticeOption' => [ 'type' => 'list', 'member' => [ 'shape' => 'NoticeOption', ], ],
                'product' => [ 'type' => 'string', 'locationName' => 'product', ],
                'resourceOption' =>  [ 'shape' => 'ResourceOption', ],
                'ruleName' => [ 'type' => 'string', 'locationName' => 'ruleName', ],
                'ruleOption' =>  [ 'shape' => 'RuleOption', ],
                'ruleType' => [ 'type' => 'string', 'locationName' => 'ruleType', ],
                'tags' => [ 'type' => 'map', 'key' => [ 'shape' => 'string', ], 'value' => [ 'shape' => 'string', ], ],
                'webHookOption' =>  [ 'shape' => 'WebHookOption', ],
            ],
        ],
        'ResourceOption' => [
            'type' => 'structure',
            'members' => [
                'resourceItems' => [ 'type' => 'list', 'member' => [ 'shape' => 'ResourceItem', ], ],
                'tagsOption' =>  [ 'shape' => 'TagsOption', ],
            ],
        ],
        'ResourceItem' => [
            'type' => 'structure',
            'members' => [
                'region' => [ 'type' => 'string', 'locationName' => 'region', ],
                'resourceId' => [ 'type' => 'string', 'locationName' => 'resourceId', ],
            ],
        ],
        'RuleOption' => [
            'type' => 'structure',
            'members' => [
                'rules' => [ 'type' => 'list', 'member' => [ 'shape' => 'BasicRule', ], ],
                'templateOption' =>  [ 'shape' => 'TemplateOption', ],
            ],
        ],
        'TagFilter' => [
            'type' => 'structure',
            'members' => [
                'key' => [ 'type' => 'string', 'locationName' => 'key', ],
                'values' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'NoticeOption' => [
            'type' => 'structure',
            'members' => [
                'effectiveIntervalEnd' => [ 'type' => 'string', 'locationName' => 'effectiveIntervalEnd', ],
                'effectiveIntervalStart' => [ 'type' => 'string', 'locationName' => 'effectiveIntervalStart', ],
                'noticeCondition' => [ 'type' => 'list', 'member' => [ 'type' => 'long', ], ],
                'noticePeriod' => [ 'type' => 'long', 'locationName' => 'noticePeriod', ],
                'noticeWay' => [ 'type' => 'list', 'member' => [ 'type' => 'long', ], ],
            ],
        ],
        'TagsOption' => [
            'type' => 'structure',
            'members' => [
                'operator' => [ 'type' => 'string', 'locationName' => 'operator', ],
                'tags' => [ 'type' => 'list', 'member' => [ 'shape' => 'TagFilter', ], ],
            ],
        ],
        'TemplateOption' => [
            'type' => 'structure',
            'members' => [
                'templateId' => [ 'type' => 'string', 'locationName' => 'templateId', ],
                'templateType' => [ 'type' => 'long', 'locationName' => 'templateType', ],
            ],
        ],
        'CreateCmAlarmParam' => [
            'type' => 'structure',
            'members' => [
                'calculation' => [ 'type' => 'string', 'locationName' => 'calculation', ],
                'contactGroups' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'contactPersons' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'downSample' => [ 'type' => 'string', 'locationName' => 'downSample', ],
                'metricUID' => [ 'type' => 'string', 'locationName' => 'metricUID', ],
                'namespaceUID' => [ 'type' => 'string', 'locationName' => 'namespaceUID', ],
                'noticePeriod' => [ 'type' => 'long', 'locationName' => 'noticePeriod', ],
                'objUIDs' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'operation' => [ 'type' => 'string', 'locationName' => 'operation', ],
                'period' => [ 'type' => 'long', 'locationName' => 'period', ],
                'ruleName' => [ 'type' => 'string', 'locationName' => 'ruleName', ],
                'threshold' => [ 'type' => 'double', 'locationName' => 'threshold', ],
                'times' => [ 'type' => 'long', 'locationName' => 'times', ],
            ],
        ],
        'DimensionsParam' => [
            'type' => 'structure',
            'members' => [
                'groupBy' => [ 'type' => 'boolean', 'locationName' => 'groupBy', ],
                'key' => [ 'type' => 'string', 'locationName' => 'key', ],
                'values' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'CreateCustomAlarmParam' => [
            'type' => 'structure',
            'members' => [
                'aggrType' => [ 'type' => 'string', 'locationName' => 'aggrType', ],
                'baseContact' => [ 'type' => 'list', 'member' => [ 'shape' => 'BaseContact', ], ],
                'dataOwner' => [ 'type' => 'long', 'locationName' => 'dataOwner', ],
                'dimensions' => [ 'type' => 'list', 'member' => [ 'shape' => 'DimensionsParam', ], ],
                'enabled' => [ 'type' => 'long', 'locationName' => 'enabled', ],
                'multiWebHook' => [ 'type' => 'list', 'member' => [ 'shape' => 'WebHookOption', ], ],
                'namespace' => [ 'type' => 'string', 'locationName' => 'namespace', ],
                'noticeOption' => [ 'type' => 'list', 'member' => [ 'shape' => 'NoticeOption', ], ],
                'region' => [ 'type' => 'string', 'locationName' => 'region', ],
                'ruleName' => [ 'type' => 'string', 'locationName' => 'ruleName', ],
                'ruleOption' => [ 'type' => 'list', 'member' => [ 'shape' => 'BasicCustomRule', ], ],
                'webHookOption' =>  [ 'shape' => 'WebHookOption', ],
            ],
        ],
        'CreateCmAlarmSpec' => [
            'type' => 'structure',
            'members' => [
                'clientToken' => [ 'type' => 'string', 'locationName' => 'clientToken', ],
                'createCmAlarmSpec' =>  [ 'shape' => 'CreateCustomAlarmParam', ],
            ],
        ],
        'QueryOptionCreate' => [
            'type' => 'structure',
            'members' => [
                'aggrType' => [ 'type' => 'string', 'locationName' => 'aggrType', ],
                'dimensions' => [ 'type' => 'list', 'member' => [ 'shape' => 'DimensionsParam', ], ],
                'downSampleType' => [ 'type' => 'string', 'locationName' => 'downSampleType', ],
                'metric' => [ 'type' => 'string', 'locationName' => 'metric', ],
            ],
        ],
        'CreateCustomQuerySpec' => [
            'type' => 'structure',
            'members' => [
                'clientToken' => [ 'type' => 'string', 'locationName' => 'clientToken', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'namespace' => [ 'type' => 'string', 'locationName' => 'namespace', ],
                'queryOption' =>  [ 'shape' => 'QueryOptionCreate', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'CreateDashboardSpec' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
            ],
        ],
        'CreateDynamicSpec' => [
            'type' => 'structure',
            'members' => [
                'clientToken' => [ 'type' => 'string', 'locationName' => 'clientToken', ],
                'dynamicDetailCN' => [ 'type' => 'string', 'locationName' => 'dynamicDetailCN', ],
                'dynamicDetailEN' => [ 'type' => 'string', 'locationName' => 'dynamicDetailEN', ],
                'dynamicType' => [ 'type' => 'long', 'locationName' => 'dynamicType', ],
                'dynamicUrl' => [ 'type' => 'string', 'locationName' => 'dynamicUrl', ],
            ],
        ],
        'CreateGrafanaDashboardSpec' => [
            'type' => 'structure',
            'members' => [
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'folderId' => [ 'type' => 'long', 'locationName' => 'folderId', ],
                'params' => [ 'type' => 'map', 'key' => [ 'shape' => 'string', ], 'value' => [ 'shape' => 'string', ], ],
                'templateUid' => [ 'type' => 'string', 'locationName' => 'templateUid', ],
                'title' => [ 'type' => 'string', 'locationName' => 'title', ],
            ],
        ],
        'CreateGrafanaFolderReq' => [
            'type' => 'structure',
            'members' => [
                'title' => [ 'type' => 'string', 'locationName' => 'title', ],
            ],
        ],
        'PanelTagResource' => [
            'type' => 'structure',
            'members' => [
                'key' => [ 'type' => 'string', 'locationName' => 'key', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'values' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'PanelResource' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'resourceId' => [ 'type' => 'string', 'locationName' => 'resourceId', ],
                'resourceName' => [ 'type' => 'string', 'locationName' => 'resourceName', ],
            ],
        ],
        'CreatePanelSpec' => [
            'type' => 'structure',
            'members' => [
                'dashboardUid' => [ 'type' => 'string', 'locationName' => 'dashboardUid', ],
                'dimension' => [ 'type' => 'string', 'locationName' => 'dimension', ],
                'panelMetrics' => [ 'type' => 'list', 'member' => [ 'shape' => 'PanelMetricForCreate', ], ],
                'panelName' => [ 'type' => 'string', 'locationName' => 'panelName', ],
                'panelResources' => [ 'type' => 'list', 'member' => [ 'shape' => 'PanelResource', ], ],
                'panelTagResources' => [ 'type' => 'list', 'member' => [ 'shape' => 'PanelTagResource', ], ],
                'panelTopNum' => [ 'type' => 'long', 'locationName' => 'panelTopNum', ],
                'panelType' => [ 'type' => 'long', 'locationName' => 'panelType', ],
                'product' => [ 'type' => 'string', 'locationName' => 'product', ],
                'tags' => [ 'type' => 'list', 'member' => [ 'shape' => 'TagFilter', ], ],
            ],
        ],
        'PanelMetricForCreate' => [
            'type' => 'structure',
            'members' => [
                'aggregator' => [ 'type' => 'string', 'locationName' => 'aggregator', ],
                'downsample' => [ 'type' => 'string', 'locationName' => 'downsample', ],
                'metric' => [ 'type' => 'string', 'locationName' => 'metric', ],
            ],
        ],
        'CreateTemplateRequestV2' => [
            'type' => 'structure',
            'members' => [
                'clientToken' => [ 'type' => 'string', 'locationName' => 'clientToken', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'dimension' => [ 'type' => 'string', 'locationName' => 'dimension', ],
                'product' => [ 'type' => 'string', 'locationName' => 'product', ],
                'templateName' => [ 'type' => 'string', 'locationName' => 'templateName', ],
                'templateRules' => [ 'type' => 'list', 'member' => [ 'shape' => 'BasicRule', ], ],
            ],
        ],
        'CreateTemplateResponseEnd' => [
            'type' => 'structure',
            'members' => [
                'success' => [ 'type' => 'boolean', 'locationName' => 'success', ],
                'templateId' => [ 'type' => 'long', 'locationName' => 'templateId', ],
            ],
        ],
        'CreateTemplateSpec' => [
            'type' => 'structure',
            'members' => [
                'clientToken' => [ 'type' => 'string', 'locationName' => 'clientToken', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'ruleServiceCode' => [ 'type' => 'string', 'locationName' => 'ruleServiceCode', ],
                'serviceCode' => [ 'type' => 'string', 'locationName' => 'serviceCode', ],
                'templateName' => [ 'type' => 'string', 'locationName' => 'templateName', ],
                'templateRules' => [ 'type' => 'list', 'member' => [ 'shape' => 'BaseRuleT', ], ],
            ],
        ],
        'CreateWidgetSpec' => [
            'type' => 'structure',
            'members' => [
                'aggregated' => [ 'type' => 'string', 'locationName' => 'aggregated', ],
                'createdTime' => [ 'type' => 'long', 'locationName' => 'createdTime', ],
                'dashboardId' => [ 'type' => 'string', 'locationName' => 'dashboardId', ],
                'metrics' => [ 'type' => 'list', 'member' => [ 'shape' => 'WidgetMetric', ], ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'position' =>  [ 'shape' => 'WidgetPosition', ],
                'resources' =>  [ 'shape' => 'WidgetResources', ],
                'serviceCode' => [ 'type' => 'string', 'locationName' => 'serviceCode', ],
                'topN' => [ 'type' => 'uint64', 'locationName' => 'topN', ],
                'type' => [ 'type' => 'string', 'locationName' => 'type', ],
                'updatedTime' => [ 'type' => 'long', 'locationName' => 'updatedTime', ],
                'widgetId' => [ 'type' => 'string', 'locationName' => 'widgetId', ],
            ],
        ],
        'CustomMetricStatus' => [
            'type' => 'structure',
            'members' => [
                'count' => [ 'type' => 'long', 'locationName' => 'count', ],
                'namespaceCount' => [ 'type' => 'long', 'locationName' => 'namespaceCount', ],
                'region' => [ 'type' => 'string', 'locationName' => 'region', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
            ],
        ],
        'DescribeQueryOption' => [
            'type' => 'structure',
            'members' => [
                'aggrType' => [ 'type' => 'string', 'locationName' => 'aggrType', ],
                'dimensions' => [ 'type' => 'list', 'member' => [ 'shape' => 'DimensionParamDetail', ], ],
                'downSampleType' => [ 'type' => 'string', 'locationName' => 'downSampleType', ],
                'metric' => [ 'type' => 'string', 'locationName' => 'metric', ],
                'metricName' => [ 'type' => 'string', 'locationName' => 'metricName', ],
            ],
        ],
        'CustomQuery' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'namespace' => [ 'type' => 'string', 'locationName' => 'namespace', ],
                'namespaceName' => [ 'type' => 'string', 'locationName' => 'namespaceName', ],
                'query' =>  [ 'shape' => 'DescribeQueryOption', ],
                'queryUuid' => [ 'type' => 'string', 'locationName' => 'queryUuid', ],
                'region' => [ 'type' => 'string', 'locationName' => 'region', ],
            ],
        ],
        'DimensionParamDetail' => [
            'type' => 'structure',
            'members' => [
                'groupBy' => [ 'type' => 'boolean', 'locationName' => 'groupBy', ],
                'key' => [ 'type' => 'string', 'locationName' => 'key', ],
                'keyName' => [ 'type' => 'string', 'locationName' => 'keyName', ],
                'values' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'CustomReportDetailsInfo' => [
            'type' => 'structure',
            'members' => [
                'metricCount' => [ 'type' => 'long', 'locationName' => 'metricCount', ],
                'namespaceName' => [ 'type' => 'string', 'locationName' => 'namespaceName', ],
                'namespaceUid' => [ 'type' => 'string', 'locationName' => 'namespaceUid', ],
                'objectCount' => [ 'type' => 'long', 'locationName' => 'objectCount', ],
                'reportInfo' => [ 'type' => 'list', 'member' => [ 'shape' => 'NsReportInfo', ], ],
            ],
        ],
        'NsReportInfo' => [
            'type' => 'structure',
            'members' => [
                'dimensions' => [ 'type' => 'object', 'locationName' => 'dimensions', ],
                'metric' => [ 'type' => 'string', 'locationName' => 'metric', ],
            ],
        ],
        'CustomRuleDetail' => [
            'type' => 'structure',
            'members' => [
                'calculateUnit' => [ 'type' => 'string', 'locationName' => 'calculateUnit', ],
                'calculation' => [ 'type' => 'string', 'locationName' => 'calculation', ],
                'metric' => [ 'type' => 'string', 'locationName' => 'metric', ],
                'metricName' => [ 'type' => 'string', 'locationName' => 'metricName', ],
                'noticeLevel' =>  [ 'shape' => 'NoticeLevel', ],
                'operation' => [ 'type' => 'string', 'locationName' => 'operation', ],
                'period' => [ 'type' => 'long', 'locationName' => 'period', ],
                'threshold' => [ 'type' => 'double', 'locationName' => 'threshold', ],
                'times' => [ 'type' => 'long', 'locationName' => 'times', ],
            ],
        ],
        'Dashboard' => [
            'type' => 'structure',
            'members' => [
                'createdTime' => [ 'type' => 'long', 'locationName' => 'createdTime', ],
                'dashboardId' => [ 'type' => 'string', 'locationName' => 'dashboardId', ],
                'focused' => [ 'type' => 'string', 'locationName' => 'focused', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'pin' => [ 'type' => 'string', 'locationName' => 'pin', ],
                'updatedTime' => [ 'type' => 'long', 'locationName' => 'updatedTime', ],
                'widgetCount' => [ 'type' => 'long', 'locationName' => 'widgetCount', ],
            ],
        ],
        'DashboardInfo' => [
            'type' => 'structure',
            'members' => [
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'id' => [ 'type' => 'long', 'locationName' => 'id', ],
                'tags' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'timezone' => [ 'type' => 'string', 'locationName' => 'timezone', ],
                'title' => [ 'type' => 'string', 'locationName' => 'title', ],
                'uid' => [ 'type' => 'string', 'locationName' => 'uid', ],
                'version' => [ 'type' => 'long', 'locationName' => 'version', ],
            ],
        ],
        'DataInfoB' => [
            'type' => 'structure',
            'members' => [
                'key' => [ 'type' => 'string', 'locationName' => 'key', ],
                'value' => [ 'type' => 'string', 'locationName' => 'value', ],
            ],
        ],
        'DataMappingB' => [
            'type' => 'structure',
            'members' => [
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'instanceName' => [ 'type' => 'string', 'locationName' => 'instanceName', ],
                'instanceStatus' => [ 'type' => 'string', 'locationName' => 'instanceStatus', ],
                'resourceId' => [ 'type' => 'string', 'locationName' => 'resourceId', ],
            ],
        ],
        'DataPoint' => [
            'type' => 'structure',
            'members' => [
                'timestamp' => [ 'type' => 'long', 'locationName' => 'timestamp', ],
                'value' => [ 'type' => 'object', 'locationName' => 'value', ],
            ],
        ],
        'DataPointByTag' => [
            'type' => 'structure',
            'members' => [
                'timestamp' => [ 'type' => 'long', 'locationName' => 'timestamp', ],
                'value' => [ 'type' => 'object', 'locationName' => 'value', ],
            ],
        ],
        'DataPointX' => [
            'type' => 'structure',
            'members' => [
                'metric' => [ 'type' => 'string', 'locationName' => 'metric', ],
                'tags' => [ 'type' => 'map', 'key' => [ 'shape' => 'string', ], 'value' => [ 'shape' => 'string', ], ],
                'timestamp' => [ 'type' => 'long', 'locationName' => 'timestamp', ],
                'value' => [ 'type' => 'object', 'locationName' => 'value', ],
            ],
        ],
        'DataTag' => [
            'type' => 'structure',
            'members' => [
                'operation' => [ 'type' => 'long', 'locationName' => 'operation', ],
                'tagKey' => [ 'type' => 'string', 'locationName' => 'tagKey', ],
                'tagValue' => [ 'type' => 'string', 'locationName' => 'tagValue', ],
            ],
        ],
        'Datasource' => [
            'type' => 'structure',
            'members' => [
                'customHttpHeader' => [ 'type' => 'map', 'key' => [ 'shape' => 'string', ], 'value' => [ 'shape' => 'string', ], ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'opentsdbExtend' =>  [ 'shape' => 'OpentsdbExtend', ],
                'pluginType' => [ 'type' => 'string', 'locationName' => 'pluginType', ],
                'url' => [ 'type' => 'string', 'locationName' => 'url', ],
            ],
        ],
        'DatasourceDetail' => [
            'type' => 'structure',
            'members' => [
                'datasourceId' => [ 'type' => 'uint64', 'locationName' => 'datasourceId', ],
                'isDefault' => [ 'type' => 'boolean', 'locationName' => 'isDefault', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'opentsdbExtend' =>  [ 'shape' => 'OpentsdbExtend', ],
                'orgId' => [ 'type' => 'uint64', 'locationName' => 'orgId', ],
                'pluginType' => [ 'type' => 'string', 'locationName' => 'pluginType', ],
                'url' => [ 'type' => 'string', 'locationName' => 'url', ],
            ],
        ],
        'DatasourceToken' => [
            'type' => 'structure',
            'members' => [
                'arkNode' => [ 'type' => 'string', 'locationName' => 'arkNode', ],
                'cloudMonitorOption' =>  [ 'shape' => 'CloudMonitorOption', ],
                'datasourceType' => [ 'type' => 'string', 'locationName' => 'datasourceType', ],
                'orgId' => [ 'type' => 'uint64', 'locationName' => 'orgId', ],
            ],
        ],
        'DateAlertCount' => [
            'type' => 'structure',
            'members' => [
                'alertCount' => [ 'type' => 'long', 'locationName' => 'alertCount', ],
                'date' => [ 'type' => 'string', 'locationName' => 'date', ],
            ],
        ],
        'DeepLogOption' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DeleteAlarmsSpec' => [
            'type' => 'structure',
            'members' => [
                'filters' => [ 'type' => 'list', 'member' => [ 'shape' => 'Filter', ], ],
            ],
        ],
        'Filter' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'values' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'DeleteDashboardsSpec' => [
            'type' => 'structure',
            'members' => [
                'filters' => [ 'type' => 'list', 'member' => [ 'shape' => 'Filter', ], ],
            ],
        ],
        'DeleteDataBackSpec' => [
            'type' => 'structure',
            'members' => [
                'key' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'DeleteGrafanaDashboardsSpec' => [
            'type' => 'structure',
            'members' => [
                'filters' => [ 'type' => 'list', 'member' => [ 'shape' => 'Filter', ], ],
            ],
        ],
        'DeleteGrafanaTemplatesSpec' => [
            'type' => 'structure',
            'members' => [
                'filters' => [ 'type' => 'list', 'member' => [ 'shape' => 'Filter', ], ],
            ],
        ],
        'DeleteTemplateResponseEnd' => [
            'type' => 'structure',
            'members' => [
                'success' => [ 'type' => 'boolean', 'locationName' => 'success', ],
            ],
        ],
        'DeleteTemplateSpec' => [
            'type' => 'structure',
            'members' => [
                'filters' => [ 'type' => 'list', 'member' => [ 'shape' => 'Filter', ], ],
            ],
        ],
        'NoticeReceiver' => [
            'type' => 'structure',
            'members' => [
                'email' => [ 'type' => 'string', 'locationName' => 'email', ],
                'mobile' => [ 'type' => 'string', 'locationName' => 'mobile', ],
                'personId' => [ 'type' => 'long', 'locationName' => 'personId', ],
                'pin' => [ 'type' => 'string', 'locationName' => 'pin', ],
                'userName' => [ 'type' => 'string', 'locationName' => 'userName', ],
            ],
        ],
        'DescribeAlarmHistoryDetail' => [
            'type' => 'structure',
            'members' => [
                'alarmId' => [ 'type' => 'string', 'locationName' => 'alarmId', ],
                'dimension' => [ 'type' => 'map', 'key' => [ 'shape' => 'string', ], 'value' => [ 'shape' => 'string', ], ],
                'durationTimes' => [ 'type' => 'long', 'locationName' => 'durationTimes', ],
                'namespace' => [ 'type' => 'string', 'locationName' => 'namespace', ],
                'namespaceName' => [ 'type' => 'string', 'locationName' => 'namespaceName', ],
                'noticeDurationTime' => [ 'type' => 'long', 'locationName' => 'noticeDurationTime', ],
                'noticeLevelTriggered' => [ 'type' => 'string', 'locationName' => 'noticeLevelTriggered', ],
                'noticeTime' => [ 'type' => 'string', 'locationName' => 'noticeTime', ],
                'receivers' => [ 'type' => 'list', 'member' => [ 'shape' => 'NoticeReceiver', ], ],
                'region' => [ 'type' => 'string', 'locationName' => 'region', ],
                'rule' =>  [ 'shape' => 'CustomRuleDetail', ],
                'status' => [ 'type' => 'long', 'locationName' => 'status', ],
                'value' => [ 'type' => 'double', 'locationName' => 'value', ],
            ],
        ],
        'DescribeAlarmHistoryResponseEnd' => [
            'type' => 'structure',
            'members' => [
                'alarmHistoryList' => [ 'type' => 'list', 'member' => [ 'shape' => 'DescribedAlarmHistory', ], ],
                'total' => [ 'type' => 'long', 'locationName' => 'total', ],
            ],
        ],
        'DescribedAlarmHistory' => [
            'type' => 'structure',
            'members' => [
                'alarmId' => [ 'type' => 'string', 'locationName' => 'alarmId', ],
                'dimension' => [ 'type' => 'string', 'locationName' => 'dimension', ],
                'dimensionName' => [ 'type' => 'string', 'locationName' => 'dimensionName', ],
                'durationTimes' => [ 'type' => 'long', 'locationName' => 'durationTimes', ],
                'isOneClickAlarm' => [ 'type' => 'long', 'locationName' => 'isOneClickAlarm', ],
                'noticeDurationTime' => [ 'type' => 'long', 'locationName' => 'noticeDurationTime', ],
                'noticeLevel' => [ 'type' => 'string', 'locationName' => 'noticeLevel', ],
                'noticeLevelTriggered' => [ 'type' => 'string', 'locationName' => 'noticeLevelTriggered', ],
                'noticeTime' => [ 'type' => 'string', 'locationName' => 'noticeTime', ],
                'noticeTimeUnix' => [ 'type' => 'long', 'locationName' => 'noticeTimeUnix', ],
                'product' => [ 'type' => 'string', 'locationName' => 'product', ],
                'productName' => [ 'type' => 'string', 'locationName' => 'productName', ],
                'receivers' => [ 'type' => 'list', 'member' => [ 'shape' => 'NoticeReceiver', ], ],
                'region' => [ 'type' => 'string', 'locationName' => 'region', ],
                'resourceId' => [ 'type' => 'string', 'locationName' => 'resourceId', ],
                'rule' =>  [ 'shape' => 'BasicRuleDetail', ],
                'ruleType' => [ 'type' => 'string', 'locationName' => 'ruleType', ],
                'status' => [ 'type' => 'long', 'locationName' => 'status', ],
                'tags' => [ 'type' => 'map', 'key' => [ 'shape' => 'string', ], 'value' => [ 'shape' => 'string', ], ],
                'value' => [ 'type' => 'double', 'locationName' => 'value', ],
            ],
        ],
        'DescribeCMMetricsDataSpec' => [
            'type' => 'structure',
            'members' => [
                'aggrType' => [ 'type' => 'string', 'locationName' => 'aggrType', ],
                'endTime' => [ 'type' => 'string', 'locationName' => 'endTime', ],
                'metricUID' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'startTime' => [ 'type' => 'string', 'locationName' => 'startTime', ],
                'timeInterval' => [ 'type' => 'string', 'locationName' => 'timeInterval', ],
            ],
        ],
        'DescribeCustomAlarmDetail' => [
            'type' => 'structure',
            'members' => [
                'aggrType' => [ 'type' => 'string', 'locationName' => 'aggrType', ],
                'alarmId' => [ 'type' => 'string', 'locationName' => 'alarmId', ],
                'alarmStatus' => [ 'type' => 'long', 'locationName' => 'alarmStatus', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'dimensions' => [ 'type' => 'list', 'member' => [ 'shape' => 'DimensionParamDetail', ], ],
                'dimensionsText' => [ 'type' => 'string', 'locationName' => 'dimensionsText', ],
                'enabled' => [ 'type' => 'long', 'locationName' => 'enabled', ],
                'namespace' => [ 'type' => 'string', 'locationName' => 'namespace', ],
                'namespaceName' => [ 'type' => 'string', 'locationName' => 'namespaceName', ],
                'region' => [ 'type' => 'string', 'locationName' => 'region', ],
                'ruleName' => [ 'type' => 'string', 'locationName' => 'ruleName', ],
                'ruleOption' => [ 'type' => 'list', 'member' => [ 'shape' => 'CustomRuleDetail', ], ],
                'ruleVersion' => [ 'type' => 'string', 'locationName' => 'ruleVersion', ],
            ],
        ],
        'DescribeCustomMetricDataSpec' => [
            'type' => 'structure',
            'members' => [
                'endTime' => [ 'type' => 'string', 'locationName' => 'endTime', ],
                'query' =>  [ 'shape' => 'QueryOption', ],
                'startTime' => [ 'type' => 'string', 'locationName' => 'startTime', ],
                'timeInterval' => [ 'type' => 'string', 'locationName' => 'timeInterval', ],
            ],
        ],
        'QueryOption' => [
            'type' => 'structure',
            'members' => [
                'aggrType' => [ 'type' => 'string', 'locationName' => 'aggrType', ],
                'dimensions' => [ 'type' => 'list', 'member' => [ 'shape' => 'DimensionsParam', ], ],
                'downSampleType' => [ 'type' => 'string', 'locationName' => 'downSampleType', ],
                'metric' => [ 'type' => 'string', 'locationName' => 'metric', ],
            ],
        ],
        'DescribeDashboardsSpec' => [
            'type' => 'structure',
            'members' => [
                'filters' => [ 'type' => 'list', 'member' => [ 'shape' => 'Filter', ], ],
                'pageNumber' => [ 'type' => 'long', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'long', 'locationName' => 'pageSize', ],
            ],
        ],
        'DescribeDatasourceEnd' => [
            'type' => 'structure',
            'members' => [
                'datasourceId' => [ 'type' => 'uint64', 'locationName' => 'datasourceId', ],
                'isDefault' => [ 'type' => 'boolean', 'locationName' => 'isDefault', ],
                'jsonData' => [ 'type' => 'object', 'locationName' => 'jsonData', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'orgId' => [ 'type' => 'uint64', 'locationName' => 'orgId', ],
                'pluginType' => [ 'type' => 'string', 'locationName' => 'pluginType', ],
                'url' => [ 'type' => 'string', 'locationName' => 'url', ],
            ],
        ],
        'DescribeDatasourcesEnd' => [
            'type' => 'structure',
            'members' => [
                'datasources' => [ 'type' => 'list', 'member' => [ 'shape' => 'DescribeDatasourceEnd', ], ],
            ],
        ],
        'DescribeGrafanaDashboardsSpec' => [
            'type' => 'structure',
            'members' => [
                'filters' => [ 'type' => 'list', 'member' => [ 'shape' => 'Filter', ], ],
                'pageNumber' => [ 'type' => 'long', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'long', 'locationName' => 'pageSize', ],
            ],
        ],
        'DescribeGrafanaTemplatesSpec' => [
            'type' => 'structure',
            'members' => [
                'filters' => [ 'type' => 'list', 'member' => [ 'shape' => 'Filter', ], ],
                'pageNumber' => [ 'type' => 'long', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'long', 'locationName' => 'pageSize', ],
                'templateType' => [ 'type' => 'long', 'locationName' => 'templateType', ],
            ],
        ],
        'RuleOptionDetail' => [
            'type' => 'structure',
            'members' => [
                'rules' => [ 'type' => 'list', 'member' => [ 'shape' => 'BasicRuleDetail', ], ],
                'templateOption' =>  [ 'shape' => 'TemplateOption', ],
            ],
        ],
        'DescribeGroupAlarm' => [
            'type' => 'structure',
            'members' => [
                'alarmId' => [ 'type' => 'string', 'locationName' => 'alarmId', ],
                'alarmStatus' => [ 'type' => 'long', 'locationName' => 'alarmStatus', ],
                'alarmStatusList' => [ 'type' => 'list', 'member' => [ 'type' => 'long', ], ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'dimension' => [ 'type' => 'string', 'locationName' => 'dimension', ],
                'dimensionName' => [ 'type' => 'string', 'locationName' => 'dimensionName', ],
                'enabled' => [ 'type' => 'long', 'locationName' => 'enabled', ],
                'product' => [ 'type' => 'string', 'locationName' => 'product', ],
                'productName' => [ 'type' => 'string', 'locationName' => 'productName', ],
                'resourceOption' =>  [ 'shape' => 'ResourceOption', ],
                'ruleName' => [ 'type' => 'string', 'locationName' => 'ruleName', ],
                'ruleOption' =>  [ 'shape' => 'RuleOptionDetail', ],
                'ruleType' => [ 'type' => 'string', 'locationName' => 'ruleType', ],
                'ruleVersion' => [ 'type' => 'string', 'locationName' => 'ruleVersion', ],
                'tags' => [ 'type' => 'map', 'key' => [ 'shape' => 'string', ], 'value' => [ 'shape' => 'string', ], ],
            ],
        ],
        'DescribeMetricDataSpec' => [
            'type' => 'structure',
            'members' => [
                'aggrType' => [ 'type' => 'string', 'locationName' => 'aggrType', ],
                'dimension' => [ 'type' => 'string', 'locationName' => 'dimension', ],
                'downSampleType' => [ 'type' => 'string', 'locationName' => 'downSampleType', ],
                'endTime' => [ 'type' => 'string', 'locationName' => 'endTime', ],
                'groupBy' => [ 'type' => 'boolean', 'locationName' => 'groupBy', ],
                'rate' => [ 'type' => 'boolean', 'locationName' => 'rate', ],
                'resourceId' => [ 'type' => 'string', 'locationName' => 'resourceId', ],
                'serviceCode' => [ 'type' => 'string', 'locationName' => 'serviceCode', ],
                'startTime' => [ 'type' => 'string', 'locationName' => 'startTime', ],
                'tags' => [ 'type' => 'list', 'member' => [ 'shape' => 'TagFilter', ], ],
                'timeInterval' => [ 'type' => 'string', 'locationName' => 'timeInterval', ],
            ],
        ],
        'DescribeMetricsByNameSpaceSpec' => [
            'type' => 'structure',
            'members' => [
                'metric' => [ 'type' => 'string', 'locationName' => 'metric', ],
            ],
        ],
        'DescribeMetricsForCreateAlarmEnd' => [
            'type' => 'structure',
            'members' => [
                'serviceCodeList' => [ 'type' => 'list', 'member' => [ 'shape' => 'ServiceCodeMetrics', ], ],
            ],
        ],
        'MetricDetail' => [
            'type' => 'structure',
            'members' => [
                'calculateUnit' => [ 'type' => 'string', 'locationName' => 'calculateUnit', ],
                'dimension' => [ 'type' => 'string', 'locationName' => 'dimension', ],
                'downSample' => [ 'type' => 'string', 'locationName' => 'downSample', ],
                'metric' => [ 'type' => 'string', 'locationName' => 'metric', ],
                'metricName' => [ 'type' => 'string', 'locationName' => 'metricName', ],
                'serviceCode' => [ 'type' => 'string', 'locationName' => 'serviceCode', ],
            ],
        ],
        'ServiceCodeMetrics' => [
            'type' => 'structure',
            'members' => [
                'metrics' => [ 'type' => 'list', 'member' => [ 'shape' => 'MetricDetail', ], ],
                'serviceCode' => [ 'type' => 'string', 'locationName' => 'serviceCode', ],
            ],
        ],
        'DescribeMonitorNamespacesSpec' => [
            'type' => 'structure',
            'members' => [
                'namespace' => [ 'type' => 'string', 'locationName' => 'namespace', ],
            ],
        ],
        'DescribeOrgsEnd' => [
            'type' => 'structure',
            'members' => [
                'orgs' => [ 'type' => 'list', 'member' => [ 'shape' => 'Org', ], ],
            ],
        ],
        'Org' => [
            'type' => 'structure',
            'members' => [
                'arkName' => [ 'type' => 'string', 'locationName' => 'arkName', ],
                'orgId' => [ 'type' => 'uint64', 'locationName' => 'orgId', ],
                'orgName' => [ 'type' => 'string', 'locationName' => 'orgName', ],
            ],
        ],
        'DescribeRawMetricDataSpec' => [
            'type' => 'structure',
            'members' => [
                'aggregator' => [ 'type' => 'string', 'locationName' => 'aggregator', ],
                'downsample' => [ 'type' => 'string', 'locationName' => 'downsample', ],
                'end' => [ 'type' => 'long', 'locationName' => 'end', ],
                'filters' => [ 'type' => 'list', 'member' => [ 'shape' => 'TsdbFilter', ], ],
                'metric' => [ 'type' => 'string', 'locationName' => 'metric', ],
                'start' => [ 'type' => 'long', 'locationName' => 'start', ],
            ],
        ],
        'TsdbFilter' => [
            'type' => 'structure',
            'members' => [
                'filterType' => [ 'type' => 'string', 'locationName' => 'filterType', ],
                'groupBy' => [ 'type' => 'boolean', 'locationName' => 'groupBy', ],
                'key' => [ 'type' => 'string', 'locationName' => 'key', ],
                'value' => [ 'type' => 'string', 'locationName' => 'value', ],
            ],
        ],
        'DescribeResourceMonitorStatusOut' => [
            'type' => 'structure',
            'members' => [
                'resourceMonitorStatus' => [ 'type' => 'list', 'member' => [ 'shape' => 'ResourceMonitorStatus', ], ],
            ],
        ],
        'ResourceMonitorStatus' => [
            'type' => 'structure',
            'members' => [
                'product' => [ 'type' => 'string', 'locationName' => 'product', ],
                'productName' => [ 'type' => 'string', 'locationName' => 'productName', ],
                'resourceCount' => [ 'type' => 'long', 'locationName' => 'resourceCount', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
            ],
        ],
        'DescribeTagKeysByMetricSpec' => [
            'type' => 'structure',
            'members' => [
                'dimensionKey' => [ 'type' => 'string', 'locationName' => 'dimensionKey', ],
            ],
        ],
        'DescribeTagValuesByTagKeySpec' => [
            'type' => 'structure',
            'members' => [
                'dimensionValue' => [ 'type' => 'string', 'locationName' => 'dimensionValue', ],
                'tags' => [ 'type' => 'list', 'member' => [ 'shape' => 'TagFilter', ], ],
            ],
        ],
        'DescribeTemplateByIDSpec' => [
            'type' => 'structure',
            'members' => [
                'templateType' => [ 'type' => 'long', 'locationName' => 'templateType', ],
            ],
        ],
        'DescribeTemplateSpec' => [
            'type' => 'structure',
            'members' => [
                'filters' => [ 'type' => 'list', 'member' => [ 'shape' => 'Filter', ], ],
                'pageNumber' => [ 'type' => 'long', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'long', 'locationName' => 'pageSize', ],
                'templateType' => [ 'type' => 'long', 'locationName' => 'templateType', ],
            ],
        ],
        'DescribeTemplatesByTemplateIDResponseEnd' => [
            'type' => 'structure',
            'members' => [
                'template' =>  [ 'shape' => 'TemplateVo', ],
            ],
        ],
        'TemplateVo' => [
            'type' => 'structure',
            'members' => [
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'pin' => [ 'type' => 'string', 'locationName' => 'pin', ],
                'rulesCount' => [ 'type' => 'long', 'locationName' => 'rulesCount', ],
                'serviceCode' => [ 'type' => 'string', 'locationName' => 'serviceCode', ],
                'templateId' => [ 'type' => 'long', 'locationName' => 'templateId', ],
                'templateName' => [ 'type' => 'string', 'locationName' => 'templateName', ],
                'templateRules' => [ 'type' => 'list', 'member' => [ 'shape' => 'AlarmVo', ], ],
                'templateRulesString' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'templateType' => [ 'type' => 'long', 'locationName' => 'templateType', ],
                'updateTime' => [ 'type' => 'string', 'locationName' => 'updateTime', ],
            ],
        ],
        'DescribeTemplatesResponseEnd' => [
            'type' => 'structure',
            'members' => [
                'numberPages' => [ 'type' => 'long', 'locationName' => 'numberPages', ],
                'numberRecords' => [ 'type' => 'long', 'locationName' => 'numberRecords', ],
                'pageNumber' => [ 'type' => 'long', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'long', 'locationName' => 'pageSize', ],
                'templateCount' => [ 'type' => 'long', 'locationName' => 'templateCount', ],
                'templateList' => [ 'type' => 'list', 'member' => [ 'shape' => 'TemplateVo', ], ],
            ],
        ],
        'DescribeTokenEnd' => [
            'type' => 'structure',
            'members' => [
                'accessToken' => [ 'type' => 'string', 'locationName' => 'accessToken', ],
                'ark' => [ 'type' => 'string', 'locationName' => 'ark', ],
                'cloudMonitorOption' =>  [ 'shape' => 'CloudMonitorOption', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'datasourceType' => [ 'type' => 'string', 'locationName' => 'datasourceType', ],
                'orgId' => [ 'type' => 'long', 'locationName' => 'orgId', ],
                'updateTime' => [ 'type' => 'string', 'locationName' => 'updateTime', ],
            ],
        ],
        'DescribeTokensEnd' => [
            'type' => 'structure',
            'members' => [
                'numberPages' => [ 'type' => 'long', 'locationName' => 'numberPages', ],
                'numberRecords' => [ 'type' => 'long', 'locationName' => 'numberRecords', ],
                'pageNumber' => [ 'type' => 'long', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'long', 'locationName' => 'pageSize', ],
                'tokens' => [ 'type' => 'list', 'member' => [ 'shape' => 'DescribeTokenEnd', ], ],
            ],
        ],
        'DescribeTopNSlowSqlSpec' => [
            'type' => 'structure',
            'members' => [
                'endTime' => [ 'type' => 'string', 'locationName' => 'endTime', ],
                'resourceId' => [ 'type' => 'string', 'locationName' => 'resourceId', ],
                'serviceCode' => [ 'type' => 'string', 'locationName' => 'serviceCode', ],
                'startTime' => [ 'type' => 'string', 'locationName' => 'startTime', ],
                'timeInterval' => [ 'type' => 'string', 'locationName' => 'timeInterval', ],
                'topN' => [ 'type' => 'long', 'locationName' => 'topN', ],
            ],
        ],
        'OrgUser' => [
            'type' => 'structure',
            'members' => [
                'email' => [ 'type' => 'string', 'locationName' => 'email', ],
                'login' => [ 'type' => 'string', 'locationName' => 'login', ],
                'orgId' => [ 'type' => 'uint64', 'locationName' => 'orgId', ],
                'role' => [ 'type' => 'string', 'locationName' => 'role', ],
            ],
        ],
        'DescribeUsersEnd' => [
            'type' => 'structure',
            'members' => [
                'users' => [ 'type' => 'list', 'member' => [ 'shape' => 'OrgUser', ], ],
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
                'ruleName' => [ 'type' => 'string', 'locationName' => 'ruleName', ],
                'serviceCode' => [ 'type' => 'string', 'locationName' => 'serviceCode', ],
                'status' => [ 'type' => 'long', 'locationName' => 'status', ],
                'tags' => [ 'type' => 'map', 'key' => [ 'shape' => 'string', ], 'value' => [ 'shape' => 'string', ], ],
                'threshold' => [ 'type' => 'double', 'locationName' => 'threshold', ],
                'times' => [ 'type' => 'long', 'locationName' => 'times', ],
                'webHookContent' => [ 'type' => 'string', 'locationName' => 'webHookContent', ],
                'webHookProtocol' => [ 'type' => 'string', 'locationName' => 'webHookProtocol', ],
                'webHookSecret' => [ 'type' => 'string', 'locationName' => 'webHookSecret', ],
                'webHookUrl' => [ 'type' => 'string', 'locationName' => 'webHookUrl', ],
            ],
        ],
        'DescribedNoticeContacts' => [
            'type' => 'structure',
            'members' => [
                'referenceId' => [ 'type' => 'long', 'locationName' => 'referenceId', ],
                'referenceType' => [ 'type' => 'long', 'locationName' => 'referenceType', ],
            ],
        ],
        'DetailAPIB' => [
            'type' => 'structure',
            'members' => [
                'api' => [ 'type' => 'string', 'locationName' => 'api', ],
                'query' => [ 'type' => 'object', 'locationName' => 'query', ],
                'root' => [ 'type' => 'string', 'locationName' => 'root', ],
            ],
        ],
        'Dimension' => [
            'type' => 'structure',
            'members' => [
                'dimension' => [ 'type' => 'string', 'locationName' => 'dimension', ],
                'dimensionName' => [ 'type' => 'string', 'locationName' => 'dimensionName', ],
                'isNode' => [ 'type' => 'boolean', 'locationName' => 'isNode', ],
                'tagServiceCode' => [ 'type' => 'string', 'locationName' => 'tagServiceCode', ],
                'tags' => [ 'type' => 'map', 'key' => [ 'shape' => 'string', ], 'value' => [ 'shape' => 'string', ], ],
            ],
        ],
        'Dynamic' => [
            'type' => 'structure',
            'members' => [
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'dynamicDetail' => [ 'type' => 'string', 'locationName' => 'dynamicDetail', ],
                'dynamicDetailCN' => [ 'type' => 'string', 'locationName' => 'dynamicDetailCN', ],
                'dynamicDetailEN' => [ 'type' => 'string', 'locationName' => 'dynamicDetailEN', ],
                'dynamicStatus' => [ 'type' => 'long', 'locationName' => 'dynamicStatus', ],
                'dynamicType' => [ 'type' => 'long', 'locationName' => 'dynamicType', ],
                'dynamicUrl' => [ 'type' => 'string', 'locationName' => 'dynamicUrl', ],
                'updateTime' => [ 'type' => 'string', 'locationName' => 'updateTime', ],
                'uuid' => [ 'type' => 'string', 'locationName' => 'uuid', ],
            ],
        ],
        'EnableAlarmsSpec' => [
            'type' => 'structure',
            'members' => [
                'ids' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'EnableOneClickAlarmsSpec' => [
            'type' => 'structure',
            'members' => [
                'rulePolicyId' => [ 'type' => 'string', 'locationName' => 'rulePolicyId', ],
                'state' => [ 'type' => 'long', 'locationName' => 'state', ],
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
        'FolderInfo' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'long', 'locationName' => 'id', ],
                'title' => [ 'type' => 'string', 'locationName' => 'title', ],
            ],
        ],
        'GetWidgetDataPointsSpec' => [
            'type' => 'structure',
            'members' => [
                'aggregated' => [ 'type' => 'string', 'locationName' => 'aggregated', ],
                'createdTime' => [ 'type' => 'long', 'locationName' => 'createdTime', ],
                'dashboardId' => [ 'type' => 'string', 'locationName' => 'dashboardId', ],
                'endTime' => [ 'type' => 'string', 'locationName' => 'endTime', ],
                'filters' => [ 'type' => 'list', 'member' => [ 'shape' => 'Filter', ], ],
                'metrics' => [ 'type' => 'list', 'member' => [ 'shape' => 'WidgetMetric', ], ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'position' =>  [ 'shape' => 'WidgetPosition', ],
                'resources' =>  [ 'shape' => 'WidgetResources', ],
                'serviceCode' => [ 'type' => 'string', 'locationName' => 'serviceCode', ],
                'startTime' => [ 'type' => 'string', 'locationName' => 'startTime', ],
                'topN' => [ 'type' => 'uint64', 'locationName' => 'topN', ],
                'type' => [ 'type' => 'string', 'locationName' => 'type', ],
                'updatedTime' => [ 'type' => 'long', 'locationName' => 'updatedTime', ],
                'widgetId' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'ServiceMetricItem' => [
            'type' => 'structure',
            'members' => [
                'aggregates' => [ 'type' => 'list', 'member' => [ 'shape' => 'ServiceMetricAggregateItem', ], ],
                'calculateUnit' => [ 'type' => 'string', 'locationName' => 'calculateUnit', ],
                'metric' => [ 'type' => 'string', 'locationName' => 'metric', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'serviceCode' => [ 'type' => 'string', 'locationName' => 'serviceCode', ],
            ],
        ],
        'ServiceMetricAggregateItem' => [
            'type' => 'structure',
            'members' => [
                'aggregate' => [ 'type' => 'string', 'locationName' => 'aggregate', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
            ],
        ],
        'ServiceMetric' => [
            'type' => 'structure',
            'members' => [
                'metric' => [ 'type' => 'list', 'member' => [ 'shape' => 'ServiceMetricItem', ], ],
                'serviceCode' => [ 'type' => 'string', 'locationName' => 'serviceCode', ],
            ],
        ],
        'GetWidgetMetricOut' => [
            'type' => 'structure',
            'members' => [
                'list' => [ 'type' => 'list', 'member' => [ 'shape' => 'ServiceMetric', ], ],
            ],
        ],
        'GroupAlarm' => [
            'type' => 'structure',
            'members' => [
                'alarmId' => [ 'type' => 'string', 'locationName' => 'alarmId', ],
                'baseContact' => [ 'type' => 'list', 'member' => [ 'shape' => 'BaseContact', ], ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'enabled' => [ 'type' => 'long', 'locationName' => 'enabled', ],
                'noticeOption' => [ 'type' => 'list', 'member' => [ 'shape' => 'NoticeOption', ], ],
                'resourceOption' =>  [ 'shape' => 'ResourceOption', ],
                'ruleName' => [ 'type' => 'string', 'locationName' => 'ruleName', ],
                'ruleOption' =>  [ 'shape' => 'RuleOption', ],
                'ruleType' => [ 'type' => 'string', 'locationName' => 'ruleType', ],
                'ruleVersion' => [ 'type' => 'string', 'locationName' => 'ruleVersion', ],
                'serviceCode' => [ 'type' => 'string', 'locationName' => 'serviceCode', ],
                'status' => [ 'type' => 'long', 'locationName' => 'status', ],
                'webHookOption' =>  [ 'shape' => 'WebHookOption', ],
            ],
        ],
        'GroupInfo' => [
            'type' => 'structure',
            'members' => [
                'charts' => [ 'type' => 'list', 'member' => [ 'shape' => 'Chart', ], ],
                'groupCode' => [ 'type' => 'string', 'locationName' => 'groupCode', ],
                'groupName' => [ 'type' => 'string', 'locationName' => 'groupName', ],
                'tags' => [ 'type' => 'map', 'key' => [ 'shape' => 'string', ], 'value' => [ 'shape' => 'string', ], ],
                'webCode' => [ 'type' => 'string', 'locationName' => 'webCode', ],
            ],
        ],
        'GroupNode' => [
            'type' => 'structure',
            'members' => [
                'childs' => [ 'type' => 'list', 'member' => [ 'shape' => 'GroupNode', ], ],
                'groupCode' => [ 'type' => 'string', 'locationName' => 'groupCode', ],
                'parent' => [ 'type' => 'string', 'locationName' => 'parent', ],
            ],
        ],
        'GroupTree' => [
            'type' => 'structure',
            'members' => [
                'childs' => [ 'type' => 'list', 'member' => [ 'shape' => 'GroupNode', ], ],
                'serviceCode' => [ 'type' => 'string', 'locationName' => 'serviceCode', ],
            ],
        ],
        'HandleTags' => [
            'type' => 'structure',
            'members' => [
                'handleTagCode' => [ 'type' => 'long', 'locationName' => 'handleTagCode', ],
                'handleTags' => [ 'type' => 'list', 'member' => [ 'shape' => 'DataTag', ], ],
                'prefixMetric' => [ 'type' => 'string', 'locationName' => 'prefixMetric', ],
            ],
        ],
        'HawkeyeOption' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'KeyInfo' => [
            'type' => 'structure',
            'members' => [
                'key' => [ 'type' => 'string', 'locationName' => 'key', ],
                'keyName' => [ 'type' => 'string', 'locationName' => 'keyName', ],
            ],
        ],
        'KeyValue' => [
            'type' => 'structure',
            'members' => [
                'key' => [ 'type' => 'string', 'locationName' => 'key', ],
                'value' => [ 'type' => 'string', 'locationName' => 'value', ],
            ],
        ],
        'LastDownsampleRespItem' => [
            'type' => 'structure',
            'members' => [
                'metric' => [ 'type' => 'string', 'locationName' => 'metric', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'tags' => [ 'type' => 'map', 'key' => [ 'shape' => 'string', ], 'value' => [ 'shape' => 'string', ], ],
                'unit' => [ 'type' => 'string', 'locationName' => 'unit', ],
                'value' => [ 'type' => 'object', 'locationName' => 'value', ],
            ],
        ],
        'LinkPolicyInfo' => [
            'type' => 'structure',
            'members' => [
                'linkPolicyName' => [ 'type' => 'string', 'locationName' => 'linkPolicyName', ],
                'linkPolicyUuid' => [ 'type' => 'string', 'locationName' => 'linkPolicyUuid', ],
            ],
        ],
        'ListAPIB' => [
            'type' => 'structure',
            'members' => [
                'api' => [ 'type' => 'string', 'locationName' => 'api', ],
                'query' => [ 'type' => 'object', 'locationName' => 'query', ],
                'root' => [ 'type' => 'string', 'locationName' => 'root', ],
                'totalCount' => [ 'type' => 'string', 'locationName' => 'totalCount', ],
            ],
        ],
        'Location' => [
            'type' => 'structure',
            'members' => [
                'sloc' => [ 'type' => 'string', 'locationName' => 'sloc', ],
                'slocName' => [ 'type' => 'string', 'locationName' => 'slocName', ],
            ],
        ],
        'LvInfoB' => [
            'type' => 'structure',
            'members' => [
                'label' => [ 'type' => 'string', 'locationName' => 'label', ],
                'value' => [ 'type' => 'string', 'locationName' => 'value', ],
            ],
        ],
        'MaintainAuxiliaryTags' => [
            'type' => 'structure',
            'members' => [
                'appCode' => [ 'type' => 'string', 'locationName' => 'appCode', ],
                'filter' => [ 'type' => 'list', 'member' => [ 'shape' => 'DataTag', ], ],
                'groupCode' => [ 'type' => 'string', 'locationName' => 'groupCode', ],
                'resourceIds' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'serviceCode' => [ 'type' => 'string', 'locationName' => 'serviceCode', ],
                'srcServiceCode' => [ 'type' => 'string', 'locationName' => 'srcServiceCode', ],
                'tags' =>  [ 'shape' => 'HandleTags', ],
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
        'MetricCm' => [
            'type' => 'structure',
            'members' => [
                'aggrType' => [ 'type' => 'string', 'locationName' => 'aggrType', ],
                'calculateUnit' => [ 'type' => 'string', 'locationName' => 'calculateUnit', ],
                'dimensions' => [ 'type' => 'object', 'locationName' => 'dimensions', ],
                'downSamplePeriod' => [ 'type' => 'string', 'locationName' => 'downSamplePeriod', ],
                'downSampleType' => [ 'type' => 'string', 'locationName' => 'downSampleType', ],
                'metric' => [ 'type' => 'string', 'locationName' => 'metric', ],
                'metricName' => [ 'type' => 'string', 'locationName' => 'metricName', ],
            ],
        ],
        'MetricCmByTag' => [
            'type' => 'structure',
            'members' => [
                'aggrPeriod' => [ 'type' => 'string', 'locationName' => 'aggrPeriod', ],
                'aggrType' => [ 'type' => 'string', 'locationName' => 'aggrType', ],
                'calculateUnit' => [ 'type' => 'string', 'locationName' => 'calculateUnit', ],
                'downSampleType' => [ 'type' => 'string', 'locationName' => 'downSampleType', ],
                'metric' => [ 'type' => 'string', 'locationName' => 'metric', ],
                'metricName' => [ 'type' => 'string', 'locationName' => 'metricName', ],
                'metricUID' => [ 'type' => 'string', 'locationName' => 'metricUID', ],
                'tags' => [ 'type' => 'map', 'key' => [ 'shape' => 'string', ], 'value' => [ 'shape' => 'string', ], ],
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
                'dimensions' => [ 'type' => 'map', 'key' => [ 'shape' => 'string', ], 'value' => [ 'shape' => 'string', ], ],
                'timestamp' => [ 'type' => 'long', 'locationName' => 'timestamp', ],
                'type' => [ 'type' => 'integer', 'locationName' => 'type', ],
                'values' => [ 'type' => 'map', 'key' => [ 'shape' => 'string', ], 'value' => [ 'shape' => 'string', ], ],
                'unit' => [ 'type' => 'string', 'locationName' => 'unit', ],
            ],
        ],
        'MetricDataItemCm' => [
            'type' => 'structure',
            'members' => [
                'data' => [ 'type' => 'list', 'member' => [ 'shape' => 'DataPoint', ], ],
                'metric' =>  [ 'shape' => 'MetricCm', ],
            ],
        ],
        'MetricDataItemCmByTag' => [
            'type' => 'structure',
            'members' => [
                'data' => [ 'type' => 'list', 'member' => [ 'shape' => 'DataPointByTag', ], ],
                'metric' =>  [ 'shape' => 'MetricCmByTag', ],
            ],
        ],
        'MetricInfo' => [
            'type' => 'structure',
            'members' => [
                'calculateUnit' => [ 'type' => 'string', 'locationName' => 'calculateUnit', ],
                'metricName' => [ 'type' => 'string', 'locationName' => 'metricName', ],
                'metricUID' => [ 'type' => 'string', 'locationName' => 'metricUID', ],
            ],
        ],
        'NsInfo' => [
            'type' => 'structure',
            'members' => [
                'namespaceName' => [ 'type' => 'string', 'locationName' => 'namespaceName', ],
                'namespaceUuid' => [ 'type' => 'string', 'locationName' => 'namespaceUuid', ],
            ],
        ],
        'ObjInfo' => [
            'type' => 'structure',
            'members' => [
                'metrics' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'objName' => [ 'type' => 'string', 'locationName' => 'objName', ],
                'objUid' => [ 'type' => 'string', 'locationName' => 'objUid', ],
            ],
        ],
        'OneClickAlarmOption' => [
            'type' => 'structure',
            'members' => [
                'contacts' => [ 'type' => 'list', 'member' => [ 'shape' => 'BaseContact', ], ],
                'dimension' => [ 'type' => 'string', 'locationName' => 'dimension', ],
                'dimensionName' => [ 'type' => 'string', 'locationName' => 'dimensionName', ],
                'enabled' => [ 'type' => 'long', 'locationName' => 'enabled', ],
                'policyId' => [ 'type' => 'string', 'locationName' => 'policyId', ],
                'product' => [ 'type' => 'string', 'locationName' => 'product', ],
                'productName' => [ 'type' => 'string', 'locationName' => 'productName', ],
                'ruleOption' =>  [ 'shape' => 'RuleOptionDetail', ],
            ],
        ],
        'OneClickAlarm' => [
            'type' => 'structure',
            'members' => [
                'alarmId' => [ 'type' => 'string', 'locationName' => 'alarmId', ],
                'alarmOptions' => [ 'type' => 'list', 'member' => [ 'shape' => 'OneClickAlarmOption', ], ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'enabled' => [ 'type' => 'long', 'locationName' => 'enabled', ],
                'indeed' => [ 'type' => 'long', 'locationName' => 'indeed', ],
                'serviceCode' => [ 'type' => 'string', 'locationName' => 'serviceCode', ],
                'serviceName' => [ 'type' => 'string', 'locationName' => 'serviceName', ],
                'updateTime' => [ 'type' => 'string', 'locationName' => 'updateTime', ],
            ],
        ],
        'OnlineDynamicSpec' => [
            'type' => 'structure',
            'members' => [
                'online' => [ 'type' => 'long', 'locationName' => 'online', ],
            ],
        ],
        'OptionsB' => [
            'type' => 'structure',
            'members' => [
                'format' => [ 'type' => 'string', 'locationName' => 'format', ],
                'map' => [ 'type' => 'string', 'locationName' => 'map', ],
                'optionType' => [ 'type' => 'object', 'locationName' => 'optionType', ],
                'unix' => [ 'type' => 'boolean', 'locationName' => 'unix', ],
            ],
        ],
        'Pagination' => [
            'type' => 'structure',
            'members' => [
                'numberPages' => [ 'type' => 'long', 'locationName' => 'numberPages', ],
                'numberRecords' => [ 'type' => 'long', 'locationName' => 'numberRecords', ],
                'pageNumber' => [ 'type' => 'long', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'long', 'locationName' => 'pageSize', ],
            ],
        ],
        'SubNodeKeys' => [
            'type' => 'structure',
            'members' => [
                'index' => [ 'type' => 'long', 'locationName' => 'index', ],
                'key' => [ 'type' => 'string', 'locationName' => 'key', ],
            ],
        ],
        'PanelDimension' => [
            'type' => 'structure',
            'members' => [
                'bindTags' => [ 'type' => 'map', 'key' => [ 'shape' => 'string', ], 'value' => [ 'shape' => 'string', ], ],
                'dimension' => [ 'type' => 'string', 'locationName' => 'dimension', ],
                'dimensionName' => [ 'type' => 'string', 'locationName' => 'dimensionName', ],
                'hasSubNode' => [ 'type' => 'boolean', 'locationName' => 'hasSubNode', ],
                'subNodeKeys' => [ 'type' => 'list', 'member' => [ 'shape' => 'SubNodeKeys', ], ],
            ],
        ],
        'PanelEnd' => [
            'type' => 'structure',
            'members' => [
                'dashboardUid' => [ 'type' => 'string', 'locationName' => 'dashboardUid', ],
                'dimension' => [ 'type' => 'string', 'locationName' => 'dimension', ],
                'panelMetrics' => [ 'type' => 'list', 'member' => [ 'shape' => 'PanelMetric', ], ],
                'panelName' => [ 'type' => 'string', 'locationName' => 'panelName', ],
                'panelPosition' =>  [ 'shape' => 'PanelPosition', ],
                'panelResources' => [ 'type' => 'list', 'member' => [ 'shape' => 'PanelResource', ], ],
                'panelTagResources' => [ 'type' => 'list', 'member' => [ 'shape' => 'PanelTagResource', ], ],
                'panelTopNum' => [ 'type' => 'long', 'locationName' => 'panelTopNum', ],
                'panelType' => [ 'type' => 'long', 'locationName' => 'panelType', ],
                'panelUid' => [ 'type' => 'string', 'locationName' => 'panelUid', ],
                'product' => [ 'type' => 'string', 'locationName' => 'product', ],
                'tags' => [ 'type' => 'list', 'member' => [ 'shape' => 'TagFilter', ], ],
            ],
        ],
        'PanelMetric' => [
            'type' => 'structure',
            'members' => [
                'aggregator' => [ 'type' => 'string', 'locationName' => 'aggregator', ],
                'downsample' => [ 'type' => 'string', 'locationName' => 'downsample', ],
                'metric' => [ 'type' => 'string', 'locationName' => 'metric', ],
                'metricName' => [ 'type' => 'string', 'locationName' => 'metricName', ],
                'unit' => [ 'type' => 'string', 'locationName' => 'unit', ],
            ],
        ],
        'PanelPosition' => [
            'type' => 'structure',
            'members' => [
                'col' => [ 'type' => 'long', 'locationName' => 'col', ],
                'height' => [ 'type' => 'long', 'locationName' => 'height', ],
                'order' => [ 'type' => 'long', 'locationName' => 'order', ],
                'row' => [ 'type' => 'long', 'locationName' => 'row', ],
                'width' => [ 'type' => 'long', 'locationName' => 'width', ],
            ],
        ],
        'PanelMonitorData' => [
            'type' => 'structure',
            'members' => [
                'aggregator' => [ 'type' => 'string', 'locationName' => 'aggregator', ],
                'dataPoint' => [ 'type' => 'list', 'member' => [ 'shape' => 'DataPoint', ], ],
                'downsample' => [ 'type' => 'string', 'locationName' => 'downsample', ],
                'downsamplePeriod' => [ 'type' => 'string', 'locationName' => 'downsamplePeriod', ],
                'metric' => [ 'type' => 'string', 'locationName' => 'metric', ],
                'metricName' => [ 'type' => 'string', 'locationName' => 'metricName', ],
                'resourceId' => [ 'type' => 'string', 'locationName' => 'resourceId', ],
                'resourceName' => [ 'type' => 'string', 'locationName' => 'resourceName', ],
                'tags' => [ 'type' => 'map', 'key' => [ 'shape' => 'string', ], 'value' => [ 'shape' => 'string', ], ],
                'unit' => [ 'type' => 'string', 'locationName' => 'unit', ],
            ],
        ],
        'PanelPositionForUpdate' => [
            'type' => 'structure',
            'members' => [
                'col' => [ 'type' => 'long', 'locationName' => 'col', ],
                'height' => [ 'type' => 'long', 'locationName' => 'height', ],
                'order' => [ 'type' => 'long', 'locationName' => 'order', ],
                'panelUid' => [ 'type' => 'string', 'locationName' => 'panelUid', ],
                'row' => [ 'type' => 'long', 'locationName' => 'row', ],
                'width' => [ 'type' => 'long', 'locationName' => 'width', ],
            ],
        ],
        'PanelProduct' => [
            'type' => 'structure',
            'members' => [
                'bindTags' => [ 'type' => 'map', 'key' => [ 'shape' => 'string', ], 'value' => [ 'shape' => 'string', ], ],
                'dimension' => [ 'type' => 'list', 'member' => [ 'shape' => 'PanelDimension', ], ],
                'product' => [ 'type' => 'string', 'locationName' => 'product', ],
                'productName' => [ 'type' => 'string', 'locationName' => 'productName', ],
                'serviceCode' => [ 'type' => 'string', 'locationName' => 'serviceCode', ],
                'tagServiceCode' => [ 'type' => 'string', 'locationName' => 'tagServiceCode', ],
            ],
        ],
        'ParamInfo' => [
            'type' => 'structure',
            'members' => [
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'isMulti' => [ 'type' => 'boolean', 'locationName' => 'isMulti', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'optional' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'paramType' => [ 'type' => 'string', 'locationName' => 'paramType', ],
                'required' => [ 'type' => 'boolean', 'locationName' => 'required', ],
                'valueType' => [ 'type' => 'string', 'locationName' => 'valueType', ],
            ],
        ],
        'PreviewPanelMonitorDataSpec' => [
            'type' => 'structure',
            'members' => [
                'dashboardUid' => [ 'type' => 'string', 'locationName' => 'dashboardUid', ],
                'panelMetrics' => [ 'type' => 'list', 'member' => [ 'shape' => 'PanelMetricForCreate', ], ],
                'panelResources' => [ 'type' => 'list', 'member' => [ 'shape' => 'PanelResource', ], ],
                'panelTagResources' => [ 'type' => 'list', 'member' => [ 'shape' => 'PanelTagResource', ], ],
                'panelTopNum' => [ 'type' => 'long', 'locationName' => 'panelTopNum', ],
                'panelType' => [ 'type' => 'long', 'locationName' => 'panelType', ],
                'product' => [ 'type' => 'string', 'locationName' => 'product', ],
                'tags' => [ 'type' => 'list', 'member' => [ 'shape' => 'TagFilter', ], ],
            ],
        ],
        'Product' => [
            'type' => 'structure',
            'members' => [
                'dimensions' => [ 'type' => 'list', 'member' => [ 'shape' => 'Dimension', ], ],
                'product' => [ 'type' => 'string', 'locationName' => 'product', ],
                'productName' => [ 'type' => 'string', 'locationName' => 'productName', ],
                'serviceCode' => [ 'type' => 'string', 'locationName' => 'serviceCode', ],
                'tagServiceCode' => [ 'type' => 'string', 'locationName' => 'tagServiceCode', ],
                'tags' => [ 'type' => 'map', 'key' => [ 'shape' => 'string', ], 'value' => [ 'shape' => 'string', ], ],
            ],
        ],
        'ProductAlertStatistics' => [
            'type' => 'structure',
            'members' => [
                'alertCount' => [ 'type' => 'long', 'locationName' => 'alertCount', ],
                'product' => [ 'type' => 'string', 'locationName' => 'product', ],
                'productName' => [ 'type' => 'string', 'locationName' => 'productName', ],
            ],
        ],
        'ProductB' => [
            'type' => 'structure',
            'members' => [
                'attrs' => [ 'type' => 'list', 'member' => [ 'shape' => 'Attrs', ], ],
                'detailApi' =>  [ 'shape' => 'DetailAPIB', ],
                'detailLink' => [ 'type' => 'string', 'locationName' => 'detailLink', ],
                'enableSwitchAggregates' => [ 'type' => 'boolean', 'locationName' => 'enableSwitchAggregates', ],
                'listFilter' => [ 'type' => 'object', 'locationName' => 'listFilter', ],
                'productCode' => [ 'type' => 'string', 'locationName' => 'productCode', ],
                'productName' => [ 'type' => 'string', 'locationName' => 'productName', ],
                'productNameCn' => [ 'type' => 'string', 'locationName' => 'productNameCn', ],
                'productNameEn' => [ 'type' => 'string', 'locationName' => 'productNameEn', ],
                'specialRequirements' => [ 'type' => 'boolean', 'locationName' => 'specialRequirements', ],
            ],
        ],
        'ProductLine' => [
            'type' => 'structure',
            'members' => [
                'productLineCode' => [ 'type' => 'string', 'locationName' => 'productLineCode', ],
                'productLineName' => [ 'type' => 'string', 'locationName' => 'productLineName', ],
                'productLineNameCn' => [ 'type' => 'string', 'locationName' => 'productLineNameCn', ],
                'productLineNameEn' => [ 'type' => 'string', 'locationName' => 'productLineNameEn', ],
                'serviceCodes' => [ 'type' => 'list', 'member' => [ 'shape' => 'ServiceInfoB', ], ],
            ],
        ],
        'ServiceInfoB' => [
            'type' => 'structure',
            'members' => [
                'dataMapping' =>  [ 'shape' => 'DataMappingB', ],
                'filters' => [ 'type' => 'object', 'locationName' => 'filters', ],
                'ipv4Regions' => [ 'type' => 'list', 'member' => [ 'shape' => 'LvInfoB', ], ],
                'ipv6Regions' => [ 'type' => 'list', 'member' => [ 'shape' => 'LvInfoB', ], ],
                'listApi' =>  [ 'shape' => 'ListAPIB', ],
                'products' => [ 'type' => 'list', 'member' => [ 'shape' => 'ProductB', ], ],
                'search' => [ 'type' => 'list', 'member' => [ 'shape' => 'SearchB', ], ],
                'serviceCode' => [ 'type' => 'string', 'locationName' => 'serviceCode', ],
                'serviceName' => [ 'type' => 'string', 'locationName' => 'serviceName', ],
                'serviceNameCn' => [ 'type' => 'string', 'locationName' => 'serviceNameCn', ],
                'serviceNameEn' => [ 'type' => 'string', 'locationName' => 'serviceNameEn', ],
                'status' => [ 'type' => 'list', 'member' => [ 'shape' => 'StatusB', ], ],
                'tableColumns' => [ 'type' => 'list', 'member' => [ 'shape' => 'TableColumnB', ], ],
            ],
        ],
        'StatusB' => [
            'type' => 'structure',
            'members' => [
                'color' => [ 'type' => 'string', 'locationName' => 'color', ],
                'immediate' => [ 'type' => 'boolean', 'locationName' => 'immediate', ],
                'label' => [ 'type' => 'string', 'locationName' => 'label', ],
                'value' => [ 'type' => 'string', 'locationName' => 'value', ],
            ],
        ],
        'SearchB' => [
            'type' => 'structure',
            'members' => [
                'label' => [ 'type' => 'string', 'locationName' => 'label', ],
                'placeholder' => [ 'type' => 'string', 'locationName' => 'placeholder', ],
                'value' => [ 'type' => 'string', 'locationName' => 'value', ],
            ],
        ],
        'TableColumnB' => [
            'type' => 'structure',
            'members' => [
                'label' => [ 'type' => 'string', 'locationName' => 'label', ],
                'link' => [ 'type' => 'boolean', 'locationName' => 'link', ],
                'options' => [ 'type' => 'list', 'member' => [ 'shape' => 'OptionsB', ], ],
                'prop' => [ 'type' => 'string', 'locationName' => 'prop', ],
            ],
        ],
        'ProductLineSpec' => [
            'type' => 'structure',
            'members' => [
                'productLineCode' => [ 'type' => 'string', 'locationName' => 'productLineCode', ],
                'productLineNameCn' => [ 'type' => 'string', 'locationName' => 'productLineNameCn', ],
                'productLineNameEn' => [ 'type' => 'string', 'locationName' => 'productLineNameEn', ],
                'serviceCodes' => [ 'type' => 'list', 'member' => [ 'shape' => 'ServiceInfoCreateB', ], ],
            ],
        ],
        'ServiceInfoCreateB' => [
            'type' => 'structure',
            'members' => [
                'dataMapping' =>  [ 'shape' => 'DataMappingB', ],
                'filters' => [ 'type' => 'object', 'locationName' => 'filters', ],
                'ipv4Regions' => [ 'type' => 'list', 'member' => [ 'shape' => 'LvInfoB', ], ],
                'ipv6Regions' => [ 'type' => 'list', 'member' => [ 'shape' => 'LvInfoB', ], ],
                'listApi' =>  [ 'shape' => 'ListAPIB', ],
                'products' => [ 'type' => 'list', 'member' => [ 'shape' => 'ProductB', ], ],
                'search' => [ 'type' => 'list', 'member' => [ 'shape' => 'SearchB', ], ],
                'serviceCode' => [ 'type' => 'string', 'locationName' => 'serviceCode', ],
                'serviceNameCn' => [ 'type' => 'string', 'locationName' => 'serviceNameCn', ],
                'serviceNameEn' => [ 'type' => 'string', 'locationName' => 'serviceNameEn', ],
                'status' => [ 'type' => 'list', 'member' => [ 'shape' => 'StatusB', ], ],
                'tableColumns' => [ 'type' => 'list', 'member' => [ 'shape' => 'TableColumnB', ], ],
            ],
        ],
        'PrometheusExtend' => [
            'type' => 'structure',
            'members' => [
                'jdcloudTsdbToken' => [ 'type' => 'string', 'locationName' => 'jdcloudTsdbToken', ],
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
        'PutDataBackSpec' => [
            'type' => 'structure',
            'members' => [
                'dataInfo' => [ 'type' => 'list', 'member' => [ 'shape' => 'DataInfoB', ], ],
            ],
        ],
        'SqlDataPoint' => [
            'type' => 'structure',
            'members' => [
                'appCode' => [ 'type' => 'string', 'locationName' => 'appCode', ],
                'serviceCode' => [ 'type' => 'string', 'locationName' => 'serviceCode', ],
                'region' => [ 'type' => 'string', 'locationName' => 'region', ],
                'resourceId' => [ 'type' => 'string', 'locationName' => 'resourceId', ],
                'metric' => [ 'type' => 'string', 'locationName' => 'metric', ],
                'time' => [ 'type' => 'long', 'locationName' => 'time', ],
                'value' => [ 'type' => 'long', 'locationName' => 'value', ],
                'start_time' => [ 'type' => 'string', 'locationName' => 'start_time', ],
                'execution_time' => [ 'type' => 'long', 'locationName' => 'execution_time', ],
                'session_id' => [ 'type' => 'string', 'locationName' => 'session_id', ],
                'database' => [ 'type' => 'string', 'locationName' => 'database', ],
                'client_net_address' => [ 'type' => 'string', 'locationName' => 'client_net_address', ],
                'loginname' => [ 'type' => 'string', 'locationName' => 'loginname', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'sqlstr' => [ 'type' => 'string', 'locationName' => 'sqlstr', ],
            ],
        ],
        'QueryResponseItem' => [
            'type' => 'structure',
            'members' => [
                'aggregateTags' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'annotations' => [ 'type' => 'list', 'member' => [ 'shape' => 'Annotation', ], ],
                'dps' => [ 'type' => 'map', 'key' => [ 'shape' => 'string', ], 'value' => [ 'shape' => 'string', ], ],
                'globalAnnotations' => [ 'type' => 'list', 'member' => [ 'shape' => 'Annotation', ], ],
                'metric' => [ 'type' => 'string', 'locationName' => 'metric', ],
                'tags' => [ 'type' => 'map', 'key' => [ 'shape' => 'string', ], 'value' => [ 'shape' => 'string', ], ],
            ],
        ],
        'RawData' => [
            'type' => 'structure',
            'members' => [
                'aggregateTags' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'dps' => [ 'type' => 'map', 'key' => [ 'shape' => 'string', ], 'value' => [ 'shape' => 'string', ], ],
                'metric' => [ 'type' => 'string', 'locationName' => 'metric', ],
                'tags' => [ 'type' => 'map', 'key' => [ 'shape' => 'string', ], 'value' => [ 'shape' => 'string', ], ],
            ],
        ],
        'Resource' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'resourceId' => [ 'type' => 'string', 'locationName' => 'resourceId', ],
            ],
        ],
        'RuleCount' => [
            'type' => 'structure',
            'members' => [
                'alarmRuleCount' => [ 'type' => 'long', 'locationName' => 'alarmRuleCount', ],
                'ruleType' => [ 'type' => 'string', 'locationName' => 'ruleType', ],
                'unknownRuleCount' => [ 'type' => 'long', 'locationName' => 'unknownRuleCount', ],
            ],
        ],
        'RuleCounting' => [
            'type' => 'structure',
            'members' => [
                'alarmRuleCount' => [ 'type' => 'long', 'locationName' => 'alarmRuleCount', ],
                'disableRuleCount' => [ 'type' => 'long', 'locationName' => 'disableRuleCount', ],
                'normalRuleCount' => [ 'type' => 'long', 'locationName' => 'normalRuleCount', ],
                'product' => [ 'type' => 'string', 'locationName' => 'product', ],
                'totalRuleCount' => [ 'type' => 'long', 'locationName' => 'totalRuleCount', ],
                'unknownRuleCount' => [ 'type' => 'long', 'locationName' => 'unknownRuleCount', ],
            ],
        ],
        'RuleDetail' => [
            'type' => 'structure',
            'members' => [
                'calculateUnit' => [ 'type' => 'string', 'locationName' => 'calculateUnit', ],
                'calculation' => [ 'type' => 'string', 'locationName' => 'calculation', ],
                'downSample' => [ 'type' => 'string', 'locationName' => 'downSample', ],
                'metric' => [ 'type' => 'string', 'locationName' => 'metric', ],
                'metricName' => [ 'type' => 'string', 'locationName' => 'metricName', ],
                'noticeLevel' =>  [ 'shape' => 'NoticeLevel', ],
                'operation' => [ 'type' => 'string', 'locationName' => 'operation', ],
                'period' => [ 'type' => 'long', 'locationName' => 'period', ],
                'threshold' => [ 'type' => 'double', 'locationName' => 'threshold', ],
                'times' => [ 'type' => 'long', 'locationName' => 'times', ],
            ],
        ],
        'RuleMetricDetail' => [
            'type' => 'structure',
            'members' => [
                'calculateUnit' => [ 'type' => 'string', 'locationName' => 'calculateUnit', ],
                'dimension' => [ 'type' => 'string', 'locationName' => 'dimension', ],
                'metric' => [ 'type' => 'string', 'locationName' => 'metric', ],
                'metricName' => [ 'type' => 'string', 'locationName' => 'metricName', ],
                'product' => [ 'type' => 'string', 'locationName' => 'product', ],
                'serviceCode' => [ 'type' => 'string', 'locationName' => 'serviceCode', ],
            ],
        ],
        'RuleResourceInfo' => [
            'type' => 'structure',
            'members' => [
                'dimension' => [ 'type' => 'string', 'locationName' => 'dimension', ],
                'product' => [ 'type' => 'string', 'locationName' => 'product', ],
                'region' => [ 'type' => 'string', 'locationName' => 'region', ],
                'resourceId' => [ 'type' => 'string', 'locationName' => 'resourceId', ],
            ],
        ],
        'RuleState' => [
            'type' => 'structure',
            'members' => [
                'resourceId' => [ 'type' => 'string', 'locationName' => 'resourceId', ],
                'ruleCount' => [ 'type' => 'long', 'locationName' => 'ruleCount', ],
                'state' => [ 'type' => 'long', 'locationName' => 'state', ],
            ],
        ],
        'SendEmailSpec' => [
            'type' => 'structure',
            'members' => [
                'contacts' => [ 'type' => 'list', 'member' => [ 'shape' => 'Contact', ], ],
                'content' => [ 'type' => 'string', 'locationName' => 'content', ],
                'title' => [ 'type' => 'string', 'locationName' => 'title', ],
            ],
        ],
        'SendSmsSpec' => [
            'type' => 'structure',
            'members' => [
                'contacts' => [ 'type' => 'list', 'member' => [ 'shape' => 'Contact', ], ],
                'templateId' => [ 'type' => 'long', 'locationName' => 'templateId', ],
                'templateParam' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'ServiceInfo' => [
            'type' => 'structure',
            'members' => [
                'groupTree' =>  [ 'shape' => 'GroupTree', ],
                'metricGroup' => [ 'type' => 'list', 'member' => [ 'shape' => 'GroupInfo', ], ],
                'metricsTimeDelay' => [ 'type' => 'long', 'locationName' => 'metricsTimeDelay', ],
                'serviceCode' => [ 'type' => 'string', 'locationName' => 'serviceCode', ],
                'serviceName' => [ 'type' => 'string', 'locationName' => 'serviceName', ],
                'timeInterval' => [ 'type' => 'long', 'locationName' => 'timeInterval', ],
            ],
        ],
        'ServiceInfoV2' => [
            'type' => 'structure',
            'members' => [
                'dimensions' => [ 'type' => 'list', 'member' => [ 'shape' => 'ChartDimension', ], ],
                'groupTree' =>  [ 'shape' => 'GroupTree', ],
                'serviceCode' => [ 'type' => 'string', 'locationName' => 'serviceCode', ],
                'serviceName' => [ 'type' => 'string', 'locationName' => 'serviceName', ],
            ],
        ],
        'SqlInfo' => [
            'type' => 'structure',
            'members' => [
                'appCode' => [ 'type' => 'string', 'locationName' => 'appCode', ],
                'client_net_address' => [ 'type' => 'string', 'locationName' => 'client_net_address', ],
                'database' => [ 'type' => 'string', 'locationName' => 'database', ],
                'execution_time' => [ 'type' => 'long', 'locationName' => 'execution_time', ],
                'loginname' => [ 'type' => 'string', 'locationName' => 'loginname', ],
                'metric' => [ 'type' => 'string', 'locationName' => 'metric', ],
                'region' => [ 'type' => 'string', 'locationName' => 'region', ],
                'resourceId' => [ 'type' => 'string', 'locationName' => 'resourceId', ],
                'serviceCode' => [ 'type' => 'string', 'locationName' => 'serviceCode', ],
                'session_id' => [ 'type' => 'string', 'locationName' => 'session_id', ],
                'sqlstr' => [ 'type' => 'string', 'locationName' => 'sqlstr', ],
                'start_time' => [ 'type' => 'string', 'locationName' => 'start_time', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'time' => [ 'type' => 'long', 'locationName' => 'time', ],
                'value' => [ 'type' => 'long', 'locationName' => 'value', ],
            ],
        ],
        'StatisticsProductMetric' => [
            'type' => 'structure',
            'members' => [
                'aggregate' => [ 'type' => 'string', 'locationName' => 'aggregate', ],
                'calculateUnit' => [ 'type' => 'string', 'locationName' => 'calculateUnit', ],
                'metric' => [ 'type' => 'string', 'locationName' => 'metric', ],
                'metricShow' => [ 'type' => 'string', 'locationName' => 'metricShow', ],
            ],
        ],
        'StatsItem' => [
            'type' => 'structure',
            'members' => [
                'aggregateFunc' => [ 'type' => 'string', 'locationName' => 'aggregateFunc', ],
                'calculateUnit' => [ 'type' => 'string', 'locationName' => 'calculateUnit', ],
                'dps' => [ 'type' => 'list', 'member' => [ 'shape' => 'DataPoint', ], ],
                'metric' => [ 'type' => 'string', 'locationName' => 'metric', ],
                'metricName' => [ 'type' => 'string', 'locationName' => 'metricName', ],
                'tags' => [ 'type' => 'map', 'key' => [ 'shape' => 'string', ], 'value' => [ 'shape' => 'string', ], ],
            ],
        ],
        'SwitchCustomAlarmsSpec' => [
            'type' => 'structure',
            'members' => [
                'alarmIds' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'state' => [ 'type' => 'long', 'locationName' => 'state', ],
            ],
        ],
        'SwitchOneClickAlarmsSpec' => [
            'type' => 'structure',
            'members' => [
                'serviceCode' => [ 'type' => 'string', 'locationName' => 'serviceCode', ],
                'state' => [ 'type' => 'long', 'locationName' => 'state', ],
            ],
        ],
        'TemplateInfo' => [
            'type' => 'structure',
            'members' => [
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'deleted' => [ 'type' => 'long', 'locationName' => 'deleted', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'params' => [ 'type' => 'list', 'member' => [ 'shape' => 'ParamInfo', ], ],
                'templateAddr' => [ 'type' => 'string', 'locationName' => 'templateAddr', ],
                'templateType' => [ 'type' => 'long', 'locationName' => 'templateType', ],
                'templateUid' => [ 'type' => 'string', 'locationName' => 'templateUid', ],
                'thumbnailAddr' => [ 'type' => 'string', 'locationName' => 'thumbnailAddr', ],
                'updateTime' => [ 'type' => 'string', 'locationName' => 'updateTime', ],
            ],
        ],
        'TemplateParam' => [
            'type' => 'structure',
            'members' => [
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'params' => [ 'type' => 'list', 'member' => [ 'shape' => 'ParamInfo', ], ],
                'tags' => [ 'type' => 'map', 'key' => [ 'shape' => 'string', ], 'value' => [ 'shape' => 'string', ], ],
                'templateAddr' => [ 'type' => 'string', 'locationName' => 'templateAddr', ],
                'thumbnailAddr' => [ 'type' => 'string', 'locationName' => 'thumbnailAddr', ],
            ],
        ],
        'TemplateRulesVo' => [
            'type' => 'structure',
            'members' => [
                'calculateUnit' => [ 'type' => 'string', 'locationName' => 'calculateUnit', ],
                'calculation' => [ 'type' => 'string', 'locationName' => 'calculation', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'deleted' => [ 'type' => 'long', 'locationName' => 'deleted', ],
                'downSample' => [ 'type' => 'string', 'locationName' => 'downSample', ],
                'id' => [ 'type' => 'long', 'locationName' => 'id', ],
                'metric' => [ 'type' => 'string', 'locationName' => 'metric', ],
                'metricId' => [ 'type' => 'long', 'locationName' => 'metricId', ],
                'metricName' => [ 'type' => 'string', 'locationName' => 'metricName', ],
                'noticeLevel' =>  [ 'shape' => 'NoticeLevel', ],
                'noticePeriod' => [ 'type' => 'long', 'locationName' => 'noticePeriod', ],
                'operation' => [ 'type' => 'string', 'locationName' => 'operation', ],
                'period' => [ 'type' => 'long', 'locationName' => 'period', ],
                'ruleType' => [ 'type' => 'long', 'locationName' => 'ruleType', ],
                'serviceCode' => [ 'type' => 'string', 'locationName' => 'serviceCode', ],
                'tag' => [ 'type' => 'string', 'locationName' => 'tag', ],
                'tags' => [ 'type' => 'map', 'key' => [ 'shape' => 'string', ], 'value' => [ 'shape' => 'string', ], ],
                'threshold' => [ 'type' => 'double', 'locationName' => 'threshold', ],
                'times' => [ 'type' => 'long', 'locationName' => 'times', ],
                'updateTime' => [ 'type' => 'string', 'locationName' => 'updateTime', ],
                'uuid' => [ 'type' => 'string', 'locationName' => 'uuid', ],
            ],
        ],
        'TemplateRulesVoV2' => [
            'type' => 'structure',
            'members' => [
                'calculateUnit' => [ 'type' => 'string', 'locationName' => 'calculateUnit', ],
                'calculation' => [ 'type' => 'string', 'locationName' => 'calculation', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'deleted' => [ 'type' => 'long', 'locationName' => 'deleted', ],
                'downSample' => [ 'type' => 'string', 'locationName' => 'downSample', ],
                'id' => [ 'type' => 'long', 'locationName' => 'id', ],
                'metric' => [ 'type' => 'string', 'locationName' => 'metric', ],
                'metricId' => [ 'type' => 'long', 'locationName' => 'metricId', ],
                'metricName' => [ 'type' => 'string', 'locationName' => 'metricName', ],
                'noticeLevel' =>  [ 'shape' => 'NoticeLevel', ],
                'noticePeriod' => [ 'type' => 'long', 'locationName' => 'noticePeriod', ],
                'operation' => [ 'type' => 'string', 'locationName' => 'operation', ],
                'period' => [ 'type' => 'long', 'locationName' => 'period', ],
                'ruleType' => [ 'type' => 'long', 'locationName' => 'ruleType', ],
                'serviceCode' => [ 'type' => 'string', 'locationName' => 'serviceCode', ],
                'tag' => [ 'type' => 'string', 'locationName' => 'tag', ],
                'tags' => [ 'type' => 'map', 'key' => [ 'shape' => 'string', ], 'value' => [ 'shape' => 'string', ], ],
                'threshold' => [ 'type' => 'double', 'locationName' => 'threshold', ],
                'times' => [ 'type' => 'long', 'locationName' => 'times', ],
                'updateTime' => [ 'type' => 'string', 'locationName' => 'updateTime', ],
                'uuid' => [ 'type' => 'string', 'locationName' => 'uuid', ],
            ],
        ],
        'TemplateVoV2' => [
            'type' => 'structure',
            'members' => [
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'dimension' => [ 'type' => 'string', 'locationName' => 'dimension', ],
                'dimensionName' => [ 'type' => 'string', 'locationName' => 'dimensionName', ],
                'linkPolicyCount' => [ 'type' => 'long', 'locationName' => 'linkPolicyCount', ],
                'linkPolicyInfos' => [ 'type' => 'list', 'member' => [ 'shape' => 'LinkPolicyInfo', ], ],
                'pin' => [ 'type' => 'string', 'locationName' => 'pin', ],
                'product' => [ 'type' => 'string', 'locationName' => 'product', ],
                'productName' => [ 'type' => 'string', 'locationName' => 'productName', ],
                'rulesCount' => [ 'type' => 'long', 'locationName' => 'rulesCount', ],
                'serviceCode' => [ 'type' => 'string', 'locationName' => 'serviceCode', ],
                'templateId' => [ 'type' => 'long', 'locationName' => 'templateId', ],
                'templateName' => [ 'type' => 'string', 'locationName' => 'templateName', ],
                'templateRules' => [ 'type' => 'list', 'member' => [ 'shape' => 'TemplateRulesVo', ], ],
                'templateRulesString' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'templateType' => [ 'type' => 'long', 'locationName' => 'templateType', ],
                'updateTime' => [ 'type' => 'string', 'locationName' => 'updateTime', ],
                'uuid' => [ 'type' => 'string', 'locationName' => 'uuid', ],
            ],
        ],
        'UpdateAlarmResourcesSpec' => [
            'type' => 'structure',
            'members' => [
                'operatorType' => [ 'type' => 'long', 'locationName' => 'operatorType', ],
                'resourceOption' =>  [ 'shape' => 'ResourceOption', ],
            ],
        ],
        'UpdateAlarmSpec' => [
            'type' => 'structure',
            'members' => [
                'autoScalingPolicyId' => [ 'type' => 'string', 'locationName' => 'autoScalingPolicyId', ],
                'baseContact' => [ 'type' => 'list', 'member' => [ 'shape' => 'BaseContact', ], ],
                'dataOwner' => [ 'type' => 'long', 'locationName' => 'dataOwner', ],
                'dimension' => [ 'type' => 'string', 'locationName' => 'dimension', ],
                'enabled' => [ 'type' => 'long', 'locationName' => 'enabled', ],
                'multiWebHook' => [ 'type' => 'list', 'member' => [ 'shape' => 'WebHookOption', ], ],
                'noticeOption' => [ 'type' => 'list', 'member' => [ 'shape' => 'NoticeOption', ], ],
                'product' => [ 'type' => 'string', 'locationName' => 'product', ],
                'resourceOption' =>  [ 'shape' => 'ResourceOption', ],
                'ruleName' => [ 'type' => 'string', 'locationName' => 'ruleName', ],
                'ruleOption' =>  [ 'shape' => 'RuleOption', ],
                'ruleType' => [ 'type' => 'string', 'locationName' => 'ruleType', ],
                'tags' => [ 'type' => 'map', 'key' => [ 'shape' => 'string', ], 'value' => [ 'shape' => 'string', ], ],
                'webHookOption' =>  [ 'shape' => 'WebHookOption', ],
            ],
        ],
        'UpdateCmAlarmSpec' => [
            'type' => 'structure',
            'members' => [
                'aggrType' => [ 'type' => 'string', 'locationName' => 'aggrType', ],
                'baseContact' => [ 'type' => 'list', 'member' => [ 'shape' => 'BaseContact', ], ],
                'dataOwner' => [ 'type' => 'long', 'locationName' => 'dataOwner', ],
                'dimensions' => [ 'type' => 'list', 'member' => [ 'shape' => 'DimensionsParam', ], ],
                'enabled' => [ 'type' => 'long', 'locationName' => 'enabled', ],
                'multiWebHook' => [ 'type' => 'list', 'member' => [ 'shape' => 'WebHookOption', ], ],
                'namespace' => [ 'type' => 'string', 'locationName' => 'namespace', ],
                'noticeOption' => [ 'type' => 'list', 'member' => [ 'shape' => 'NoticeOption', ], ],
                'region' => [ 'type' => 'string', 'locationName' => 'region', ],
                'ruleName' => [ 'type' => 'string', 'locationName' => 'ruleName', ],
                'ruleOption' => [ 'type' => 'list', 'member' => [ 'shape' => 'BasicCustomRule', ], ],
                'webHookOption' =>  [ 'shape' => 'WebHookOption', ],
            ],
        ],
        'UpdateCustomQuerySpec' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'namespace' => [ 'type' => 'string', 'locationName' => 'namespace', ],
                'queryOption' =>  [ 'shape' => 'QueryOption', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'UpdateDashboardSpec' => [
            'type' => 'structure',
            'members' => [
                'dashboardId' => [ 'type' => 'string', 'locationName' => 'dashboardId', ],
                'focused' => [ 'type' => 'string', 'locationName' => 'focused', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
            ],
        ],
        'UpdateDataBackSpec' => [
            'type' => 'structure',
            'members' => [
                'dataInfo' => [ 'type' => 'list', 'member' => [ 'shape' => 'DataInfoB', ], ],
            ],
        ],
        'UpdateDynamicSpec' => [
            'type' => 'structure',
            'members' => [
                'dynamicDetailCN' => [ 'type' => 'string', 'locationName' => 'dynamicDetailCN', ],
                'dynamicDetailEN' => [ 'type' => 'string', 'locationName' => 'dynamicDetailEN', ],
                'dynamicType' => [ 'type' => 'long', 'locationName' => 'dynamicType', ],
                'dynamicUrl' => [ 'type' => 'string', 'locationName' => 'dynamicUrl', ],
            ],
        ],
        'UpdateGrafanaDashboardSpec' => [
            'type' => 'structure',
            'members' => [
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'title' => [ 'type' => 'string', 'locationName' => 'title', ],
            ],
        ],
        'UpdateOneClickAlarmOption' => [
            'type' => 'structure',
            'members' => [
                'contacts' => [ 'type' => 'list', 'member' => [ 'shape' => 'BaseContact', ], ],
                'enabled' => [ 'type' => 'long', 'locationName' => 'enabled', ],
                'noticeOption' => [ 'type' => 'list', 'member' => [ 'shape' => 'NoticeOption', ], ],
                'policyId' => [ 'type' => 'string', 'locationName' => 'policyId', ],
                'ruleOption' =>  [ 'shape' => 'RuleOption', ],
                'webHookOption' =>  [ 'shape' => 'WebHookOption', ],
            ],
        ],
        'UpdateOneClickAlarmOptionSpec' => [
            'type' => 'structure',
            'members' => [
                'contacts' => [ 'type' => 'list', 'member' => [ 'shape' => 'BaseContact', ], ],
                'noticeOption' => [ 'type' => 'list', 'member' => [ 'shape' => 'NoticeOption', ], ],
                'policyId' => [ 'type' => 'string', 'locationName' => 'policyId', ],
                'ruleOption' =>  [ 'shape' => 'RuleOption', ],
                'webHookOption' =>  [ 'shape' => 'WebHookOption', ],
            ],
        ],
        'UpdateOneClickAlarmSpec' => [
            'type' => 'structure',
            'members' => [
                'alarmId' => [ 'type' => 'string', 'locationName' => 'alarmId', ],
                'alarmOptions' => [ 'type' => 'list', 'member' => [ 'shape' => 'UpdateOneClickAlarmOption', ], ],
                'descriptionCN' => [ 'type' => 'string', 'locationName' => 'descriptionCN', ],
                'descriptionEN' => [ 'type' => 'string', 'locationName' => 'descriptionEN', ],
            ],
        ],
        'UpdatePanelSpec' => [
            'type' => 'structure',
            'members' => [
                'dashboardUid' => [ 'type' => 'string', 'locationName' => 'dashboardUid', ],
                'dimension' => [ 'type' => 'string', 'locationName' => 'dimension', ],
                'panelMetrics' => [ 'type' => 'list', 'member' => [ 'shape' => 'PanelMetricForCreate', ], ],
                'panelName' => [ 'type' => 'string', 'locationName' => 'panelName', ],
                'panelResources' => [ 'type' => 'list', 'member' => [ 'shape' => 'PanelResource', ], ],
                'panelTagResources' => [ 'type' => 'list', 'member' => [ 'shape' => 'PanelTagResource', ], ],
                'panelTopNum' => [ 'type' => 'long', 'locationName' => 'panelTopNum', ],
                'panelType' => [ 'type' => 'long', 'locationName' => 'panelType', ],
                'panelUid' => [ 'type' => 'string', 'locationName' => 'panelUid', ],
                'product' => [ 'type' => 'string', 'locationName' => 'product', ],
                'tags' => [ 'type' => 'list', 'member' => [ 'shape' => 'TagFilter', ], ],
            ],
        ],
        'UpdatePanelsPositionSpec' => [
            'type' => 'structure',
            'members' => [
                'dashboardUid' => [ 'type' => 'string', 'locationName' => 'dashboardUid', ],
                'panelsPosition' => [ 'type' => 'list', 'member' => [ 'shape' => 'PanelPositionForUpdate', ], ],
            ],
        ],
        'UpdateProductLineSpec' => [
            'type' => 'structure',
            'members' => [
                'productLineNameCn' => [ 'type' => 'string', 'locationName' => 'productLineNameCn', ],
                'productLineNameEn' => [ 'type' => 'string', 'locationName' => 'productLineNameEn', ],
                'serviceCodes' => [ 'type' => 'list', 'member' => [ 'shape' => 'ServiceInfoCreateB', ], ],
            ],
        ],
        'UpdateTemplateRequestV2' => [
            'type' => 'structure',
            'members' => [
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'dimension' => [ 'type' => 'string', 'locationName' => 'dimension', ],
                'product' => [ 'type' => 'string', 'locationName' => 'product', ],
                'templateName' => [ 'type' => 'string', 'locationName' => 'templateName', ],
                'templateRules' => [ 'type' => 'list', 'member' => [ 'shape' => 'BasicRule', ], ],
                'templateUuid' => [ 'type' => 'string', 'locationName' => 'templateUuid', ],
            ],
        ],
        'UpdateTemplateResponseEnd' => [
            'type' => 'structure',
            'members' => [
                'success' => [ 'type' => 'boolean', 'locationName' => 'success', ],
                'templateId' => [ 'type' => 'long', 'locationName' => 'templateId', ],
            ],
        ],
        'UpdateTemplateResponseResultV2' => [
            'type' => 'structure',
            'members' => [
                'success' => [ 'type' => 'boolean', 'locationName' => 'success', ],
                'templateUuid' => [ 'type' => 'string', 'locationName' => 'templateUuid', ],
            ],
        ],
        'UpdateTemplateSpec' => [
            'type' => 'structure',
            'members' => [
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'ruleServiceCode' => [ 'type' => 'string', 'locationName' => 'ruleServiceCode', ],
                'serviceCode' => [ 'type' => 'string', 'locationName' => 'serviceCode', ],
                'templateId' => [ 'type' => 'long', 'locationName' => 'templateId', ],
                'templateName' => [ 'type' => 'string', 'locationName' => 'templateName', ],
                'templateRules' => [ 'type' => 'list', 'member' => [ 'shape' => 'BaseRuleT', ], ],
            ],
        ],
        'UpdateWebHookOut' => [
            'type' => 'structure',
            'members' => [
                'success' => [ 'type' => 'boolean', 'locationName' => 'success', ],
            ],
        ],
        'UpdateWebHookReq' => [
            'type' => 'structure',
            'members' => [
                'active' => [ 'type' => 'long', 'locationName' => 'active', ],
                'content' => [ 'type' => 'string', 'locationName' => 'content', ],
                'protocol' => [ 'type' => 'string', 'locationName' => 'protocol', ],
                'secret' => [ 'type' => 'string', 'locationName' => 'secret', ],
                'url' => [ 'type' => 'string', 'locationName' => 'url', ],
            ],
        ],
        'UpdateWebHookSpec' => [
            'type' => 'structure',
            'members' => [
                'active' => [ 'type' => 'long', 'locationName' => 'active', ],
                'content' => [ 'type' => 'string', 'locationName' => 'content', ],
                'protocol' => [ 'type' => 'string', 'locationName' => 'protocol', ],
                'secret' => [ 'type' => 'string', 'locationName' => 'secret', ],
                'url' => [ 'type' => 'string', 'locationName' => 'url', ],
            ],
        ],
        'UpdateWidgetSpec' => [
            'type' => 'structure',
            'members' => [
                'aggregated' => [ 'type' => 'string', 'locationName' => 'aggregated', ],
                'createdTime' => [ 'type' => 'long', 'locationName' => 'createdTime', ],
                'dashboardId' => [ 'type' => 'string', 'locationName' => 'dashboardId', ],
                'metrics' => [ 'type' => 'list', 'member' => [ 'shape' => 'WidgetMetric', ], ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'position' =>  [ 'shape' => 'WidgetPosition', ],
                'resources' =>  [ 'shape' => 'WidgetResources', ],
                'serviceCode' => [ 'type' => 'string', 'locationName' => 'serviceCode', ],
                'topN' => [ 'type' => 'uint64', 'locationName' => 'topN', ],
                'type' => [ 'type' => 'string', 'locationName' => 'type', ],
                'updatedTime' => [ 'type' => 'long', 'locationName' => 'updatedTime', ],
                'widgetId' => [ 'type' => 'string', 'locationName' => 'widgetId', ],
            ],
        ],
        'User' => [
            'type' => 'structure',
            'members' => [
                'email' => [ 'type' => 'string', 'locationName' => 'email', ],
                'login' => [ 'type' => 'string', 'locationName' => 'login', ],
                'role' => [ 'type' => 'string', 'locationName' => 'role', ],
            ],
        ],
        'UserRole' => [
            'type' => 'structure',
            'members' => [
                'login' => [ 'type' => 'string', 'locationName' => 'login', ],
                'role' => [ 'type' => 'string', 'locationName' => 'role', ],
            ],
        ],
        'Users' => [
            'type' => 'structure',
            'members' => [
                'users' => [ 'type' => 'list', 'member' => [ 'shape' => 'UserRole', ], ],
            ],
        ],
        'WidgetDataPointItem' => [
            'type' => 'structure',
            'members' => [
                'aggregate' => [ 'type' => 'list', 'member' => [ 'shape' => 'StatsItem', ], ],
                'detail' => [ 'type' => 'list', 'member' => [ 'shape' => 'StatsItem', ], ],
                'widgetId' => [ 'type' => 'string', 'locationName' => 'widgetId', ],
            ],
        ],
        'WidgetSupportedProduct' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'serviceCode' => [ 'type' => 'string', 'locationName' => 'serviceCode', ],
            ],
        ],
        'DeleteAlarmsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'DeleteAlarmsResultShape', ],
            ],
        ],
        'EnableAlarmsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'alarmIds' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'state' => [ 'type' => 'long', 'locationName' => 'state', ],
            ],
        ],
        'EnableAlarmsResultShape' => [
            'type' => 'structure',
            'members' => [
                'success' => [ 'type' => 'boolean', 'locationName' => 'success', ],
            ],
        ],
        'CreateAlarmResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'CreateAlarmResultShape', ],
            ],
        ],
        'CreateAlarmRequestShape' => [
            'type' => 'structure',
            'members' => [
                'autoScalingPolicyId' => [ 'type' => 'string', 'locationName' => 'autoScalingPolicyId', ],
                'baseContact' => [ 'type' => 'list', 'member' => [ 'shape' => 'BaseContact', ], ],
                'clientToken' => [ 'type' => 'string', 'locationName' => 'clientToken', ],
                'dataOwner' => [ 'type' => 'long', 'locationName' => 'dataOwner', ],
                'dimension' => [ 'type' => 'string', 'locationName' => 'dimension', ],
                'enabled' => [ 'type' => 'long', 'locationName' => 'enabled', ],
                'multiWebHook' => [ 'type' => 'list', 'member' => [ 'shape' => 'WebHookOption', ], ],
                'noticeOption' => [ 'type' => 'list', 'member' => [ 'shape' => 'NoticeOption', ], ],
                'product' => [ 'type' => 'string', 'locationName' => 'product', ],
                'resourceOption' =>  [ 'shape' => 'ResourceOption', ],
                'ruleName' => [ 'type' => 'string', 'locationName' => 'ruleName', ],
                'ruleOption' =>  [ 'shape' => 'RuleOption', ],
                'ruleType' => [ 'type' => 'string', 'locationName' => 'ruleType', ],
                'tags' => [ 'type' => 'map', 'key' => [ 'shape' => 'string', ], 'value' => [ 'shape' => 'string', ], ],
                'webHookOption' =>  [ 'shape' => 'WebHookOption', ],
            ],
        ],
        'DescribeMetricsForAlarmResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'DescribeMetricsForAlarmResultShape', ],
            ],
        ],
        'DeleteAlarmsResultShape' => [
            'type' => 'structure',
            'members' => [
                'success' => [ 'type' => 'boolean', 'locationName' => 'success', ],
            ],
        ],
        'UpdateAlarmRequestShape' => [
            'type' => 'structure',
            'members' => [
                'autoScalingPolicyId' => [ 'type' => 'string', 'locationName' => 'autoScalingPolicyId', ],
                'baseContact' => [ 'type' => 'list', 'member' => [ 'shape' => 'BaseContact', ], ],
                'dataOwner' => [ 'type' => 'long', 'locationName' => 'dataOwner', ],
                'dimension' => [ 'type' => 'string', 'locationName' => 'dimension', ],
                'enabled' => [ 'type' => 'long', 'locationName' => 'enabled', ],
                'multiWebHook' => [ 'type' => 'list', 'member' => [ 'shape' => 'WebHookOption', ], ],
                'noticeOption' => [ 'type' => 'list', 'member' => [ 'shape' => 'NoticeOption', ], ],
                'product' => [ 'type' => 'string', 'locationName' => 'product', ],
                'resourceOption' =>  [ 'shape' => 'ResourceOption', ],
                'ruleName' => [ 'type' => 'string', 'locationName' => 'ruleName', ],
                'ruleOption' =>  [ 'shape' => 'RuleOption', ],
                'ruleType' => [ 'type' => 'string', 'locationName' => 'ruleType', ],
                'tags' => [ 'type' => 'map', 'key' => [ 'shape' => 'string', ], 'value' => [ 'shape' => 'string', ], ],
                'webHookOption' =>  [ 'shape' => 'WebHookOption', ],
                'alarmId' => [ 'type' => 'string', 'locationName' => 'alarmId', ],
            ],
        ],
        'DescribeProductsForAlarmResultShape' => [
            'type' => 'structure',
            'members' => [
                'productList' => [ 'type' => 'list', 'member' => [ 'shape' => 'Product', ], ],
            ],
        ],
        'DescribeAlarmContactsResultShape' => [
            'type' => 'structure',
            'members' => [
                'contactsList' => [ 'type' => 'list', 'member' => [ 'shape' => 'DescribedNoticeContacts', ], ],
                'total' => [ 'type' => 'long', 'locationName' => 'total', ],
            ],
        ],
        'DescribeAlarmResultShape' => [
            'type' => 'structure',
            'members' => [
                'alarmId' => [ 'type' => 'string', 'locationName' => 'alarmId', ],
                'alarmStatus' => [ 'type' => 'long', 'locationName' => 'alarmStatus', ],
                'alarmStatusList' => [ 'type' => 'list', 'member' => [ 'type' => 'long', ], ],
                'baseContact' => [ 'type' => 'list', 'member' => [ 'shape' => 'BaseContact', ], ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'dimension' => [ 'type' => 'string', 'locationName' => 'dimension', ],
                'dimensionName' => [ 'type' => 'string', 'locationName' => 'dimensionName', ],
                'enabled' => [ 'type' => 'long', 'locationName' => 'enabled', ],
                'multiWebHook' => [ 'type' => 'list', 'member' => [ 'shape' => 'WebHookOption', ], ],
                'noticeOption' => [ 'type' => 'list', 'member' => [ 'shape' => 'NoticeOption', ], ],
                'product' => [ 'type' => 'string', 'locationName' => 'product', ],
                'productName' => [ 'type' => 'string', 'locationName' => 'productName', ],
                'resourceOption' =>  [ 'shape' => 'ResourceOption', ],
                'ruleName' => [ 'type' => 'string', 'locationName' => 'ruleName', ],
                'ruleOption' =>  [ 'shape' => 'RuleOptionDetail', ],
                'ruleType' => [ 'type' => 'string', 'locationName' => 'ruleType', ],
                'ruleVersion' => [ 'type' => 'string', 'locationName' => 'ruleVersion', ],
                'tags' => [ 'type' => 'map', 'key' => [ 'shape' => 'string', ], 'value' => [ 'shape' => 'string', ], ],
                'webHookOption' =>  [ 'shape' => 'WebHookOption', ],
            ],
        ],
        'DescribeAlarmHistoryResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'DescribeAlarmHistoryResultShape', ],
            ],
        ],
        'DescribeAlarmRequestShape' => [
            'type' => 'structure',
            'members' => [
                'alarmId' => [ 'type' => 'string', 'locationName' => 'alarmId', ],
            ],
        ],
        'UpdateAlarmResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'UpdateAlarmResultShape', ],
            ],
        ],
        'DescribeAlarmsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'long', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'long', 'locationName' => 'pageSize', ],
                'dataOwner' => [ 'type' => 'long', 'locationName' => 'dataOwner', ],
                'serviceCode' => [ 'type' => 'string', 'locationName' => 'serviceCode', ],
                'product' => [ 'type' => 'string', 'locationName' => 'product', ],
                'dimension' => [ 'type' => 'string', 'locationName' => 'dimension', ],
                'ruleName' => [ 'type' => 'string', 'locationName' => 'ruleName', ],
                'ruleType' => [ 'type' => 'long', 'locationName' => 'ruleType', ],
                'enabled' => [ 'type' => 'long', 'locationName' => 'enabled', ],
                'ruleStatus' => [ 'type' => 'long', 'locationName' => 'ruleStatus', ],
                'filters' => [ 'type' => 'list', 'member' => [ 'shape' => 'Filter', ], ],
            ],
        ],
        'DescribeAlarmHistoryResultShape' => [
            'type' => 'structure',
            'members' => [
                'alarmHistoryList' => [ 'type' => 'list', 'member' => [ 'shape' => 'DescribedAlarmHistory', ], ],
                'numberPages' => [ 'type' => 'long', 'locationName' => 'numberPages', ],
                'numberRecords' => [ 'type' => 'long', 'locationName' => 'numberRecords', ],
                'pageNumber' => [ 'type' => 'long', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'long', 'locationName' => 'pageSize', ],
            ],
        ],
        'DescribeMetricsForAlarmRequestShape' => [
            'type' => 'structure',
            'members' => [
                'serviceCode' => [ 'type' => 'string', 'locationName' => 'serviceCode', ],
                'product' => [ 'type' => 'string', 'locationName' => 'product', ],
                'dimension' => [ 'type' => 'string', 'locationName' => 'dimension', ],
                'metricType' => [ 'type' => 'long', 'locationName' => 'metricType', ],
            ],
        ],
        'DescribeProductsForAlarmResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'DescribeProductsForAlarmResultShape', ],
            ],
        ],
        'DescribeAlarmResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'DescribeAlarmResultShape', ],
            ],
        ],
        'DeleteAlarmsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'alarmId' => [ 'type' => 'string', 'locationName' => 'alarmId', ],
            ],
        ],
        'CreateAlarmResultShape' => [
            'type' => 'structure',
            'members' => [
                'alarmId' => [ 'type' => 'string', 'locationName' => 'alarmId', ],
                'ruleIds' => [ 'type' => 'list', 'member' => [ 'type' => 'long', ], ],
            ],
        ],
        'DescribeAlarmContactsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'DescribeAlarmContactsResultShape', ],
            ],
        ],
        'DescribeAlarmContactsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'long', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'long', 'locationName' => 'pageSize', ],
                'referenceType' => [ 'type' => 'long', 'locationName' => 'referenceType', ],
                'alarmId' => [ 'type' => 'string', 'locationName' => 'alarmId', ],
            ],
        ],
        'DescribeMetricsForAlarmResultShape' => [
            'type' => 'structure',
            'members' => [
                'metrics' => [ 'type' => 'list', 'member' => [ 'shape' => 'RuleMetricDetail', ], ],
            ],
        ],
        'DescribeProductsForAlarmRequestShape' => [
            'type' => 'structure',
            'members' => [
                'serviceCode' => [ 'type' => 'string', 'locationName' => 'serviceCode', ],
                'product' => [ 'type' => 'string', 'locationName' => 'product', ],
            ],
        ],
        'EnableAlarmsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'EnableAlarmsResultShape', ],
            ],
        ],
        'DescribeAlarmHistoryRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'long', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'long', 'locationName' => 'pageSize', ],
                'dataOwner' => [ 'type' => 'long', 'locationName' => 'dataOwner', ],
                'serviceCode' => [ 'type' => 'string', 'locationName' => 'serviceCode', ],
                'product' => [ 'type' => 'string', 'locationName' => 'product', ],
                'dimension' => [ 'type' => 'string', 'locationName' => 'dimension', ],
                'region' => [ 'type' => 'string', 'locationName' => 'region', ],
                'isAlarming' => [ 'type' => 'long', 'locationName' => 'isAlarming', ],
                'status' => [ 'type' => 'long', 'locationName' => 'status', ],
                'startTime' => [ 'type' => 'string', 'locationName' => 'startTime', ],
                'endTime' => [ 'type' => 'string', 'locationName' => 'endTime', ],
                'ruleType' => [ 'type' => 'long', 'locationName' => 'ruleType', ],
                'ruleName' => [ 'type' => 'string', 'locationName' => 'ruleName', ],
                'filters' => [ 'type' => 'list', 'member' => [ 'shape' => 'Filter', ], ],
            ],
        ],
        'UpdateAlarmResultShape' => [
            'type' => 'structure',
            'members' => [
                'alarmId' => [ 'type' => 'string', 'locationName' => 'alarmId', ],
                'ruleIds' => [ 'type' => 'list', 'member' => [ 'type' => 'long', ], ],
                'success' => [ 'type' => 'boolean', 'locationName' => 'success', ],
            ],
        ],
        'DescribeAlarmsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'DescribeAlarmsResultShape', ],
            ],
        ],
        'DescribeAlarmsResultShape' => [
            'type' => 'structure',
            'members' => [
                'alarmList' => [ 'type' => 'list', 'member' => [ 'shape' => 'DescribeGroupAlarm', ], ],
                'numberPages' => [ 'type' => 'long', 'locationName' => 'numberPages', ],
                'numberRecords' => [ 'type' => 'long', 'locationName' => 'numberRecords', ],
                'pageNumber' => [ 'type' => 'long', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'long', 'locationName' => 'pageSize', ],
            ],
        ],
        'DescribeCustomMetricDataResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'DescribeCustomMetricDataResultShape', ],
            ],
        ],
        'DescribeCustomMetricDataResultShape' => [
            'type' => 'structure',
            'members' => [
                'metricDatas' => [ 'type' => 'list', 'member' => [ 'shape' => 'MetricDataItemCm', ], ],
            ],
        ],
        'DescribeCustomMetricDataRequestShape' => [
            'type' => 'structure',
            'members' => [
                'endTime' => [ 'type' => 'string', 'locationName' => 'endTime', ],
                'query' =>  [ 'shape' => 'QueryOption', ],
                'startTime' => [ 'type' => 'string', 'locationName' => 'startTime', ],
                'timeInterval' => [ 'type' => 'string', 'locationName' => 'timeInterval', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'namespaceUID' => [ 'type' => 'string', 'locationName' => 'namespaceUID', ],
            ],
        ],
        'LastDownsampleRequestShape' => [
            'type' => 'structure',
            'members' => [
                'serviceCode' => [ 'type' => 'string', 'locationName' => 'serviceCode', ],
                'dimension' => [ 'type' => 'string', 'locationName' => 'dimension', ],
                'resourceId' => [ 'type' => 'string', 'locationName' => 'resourceId', ],
                'tags' => [ 'type' => 'list', 'member' => [ 'shape' => 'TagFilter', ], ],
                'startTime' => [ 'type' => 'string', 'locationName' => 'startTime', ],
                'endTime' => [ 'type' => 'string', 'locationName' => 'endTime', ],
                'timeInterval' => [ 'type' => 'string', 'locationName' => 'timeInterval', ],
                'aggrType' => [ 'type' => 'string', 'locationName' => 'aggrType', ],
                'downAggrType' => [ 'type' => 'string', 'locationName' => 'downAggrType', ],
                'timeOffset' => [ 'type' => 'string', 'locationName' => 'timeOffset', ],
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
        'LastDownsampleResultShape' => [
            'type' => 'structure',
            'members' => [
                'items' => [ 'type' => 'list', 'member' => [ 'shape' => 'LastDownsampleRespItem', ], ],
            ],
        ],
        'DescribeMetricDataResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'DescribeMetricDataResultShape', ],
            ],
        ],
        'LastDownsampleResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'LastDownsampleResultShape', ],
            ],
        ],
        'DescribeServicesResultShape' => [
            'type' => 'structure',
            'members' => [
                'services' => [ 'type' => 'list', 'member' => [ 'shape' => 'ServiceInfoV2', ], ],
            ],
        ],
        'DescribeServicesResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'DescribeServicesResultShape', ],
            ],
        ],
        'DescribeTagValuesResultShape' => [
            'type' => 'structure',
            'members' => [
                'tagValues' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'DescribeMetricsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'serviceCode' => [ 'type' => 'string', 'locationName' => 'serviceCode', ],
                'dimension' => [ 'type' => 'string', 'locationName' => 'dimension', ],
                'type' => [ 'type' => 'long', 'locationName' => 'type', ],
            ],
        ],
        'DescribeServicesRequestShape' => [
            'type' => 'structure',
            'members' => [
                'filters' => [ 'type' => 'list', 'member' => [ 'shape' => 'Filter', ], ],
                'productType' => [ 'type' => 'long', 'locationName' => 'productType', ],
            ],
        ],
        'DescribeMetricDataRequestShape' => [
            'type' => 'structure',
            'members' => [
                'aggrType' => [ 'type' => 'string', 'locationName' => 'aggrType', ],
                'downSampleType' => [ 'type' => 'string', 'locationName' => 'downSampleType', ],
                'startTime' => [ 'type' => 'string', 'locationName' => 'startTime', ],
                'endTime' => [ 'type' => 'string', 'locationName' => 'endTime', ],
                'timeInterval' => [ 'type' => 'string', 'locationName' => 'timeInterval', ],
                'tags' => [ 'type' => 'list', 'member' => [ 'shape' => 'TagFilter', ], ],
                'groupBy' => [ 'type' => 'boolean', 'locationName' => 'groupBy', ],
                'rate' => [ 'type' => 'boolean', 'locationName' => 'rate', ],
                'serviceCode' => [ 'type' => 'string', 'locationName' => 'serviceCode', ],
                'dimension' => [ 'type' => 'string', 'locationName' => 'dimension', ],
                'resourceId' => [ 'type' => 'string', 'locationName' => 'resourceId', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'metric' => [ 'type' => 'string', 'locationName' => 'metric', ],
            ],
        ],
        'DescribeMetricsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'DescribeMetricsResultShape', ],
            ],
        ],
        'DescribeMetricsResultShape' => [
            'type' => 'structure',
            'members' => [
                'metrics' => [ 'type' => 'list', 'member' => [ 'shape' => 'MetricDetail', ], ],
            ],
        ],
        'DescribeTagValuesResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'DescribeTagValuesResultShape', ],
            ],
        ],
        'DescribeTagValuesRequestShape' => [
            'type' => 'structure',
            'members' => [
                'serviceCode' => [ 'type' => 'string', 'locationName' => 'serviceCode', ],
                'resourceId' => [ 'type' => 'string', 'locationName' => 'resourceId', ],
                'metric' => [ 'type' => 'string', 'locationName' => 'metric', ],
                'startTime' => [ 'type' => 'string', 'locationName' => 'startTime', ],
                'endTime' => [ 'type' => 'string', 'locationName' => 'endTime', ],
                'timeInterval' => [ 'type' => 'string', 'locationName' => 'timeInterval', ],
                'tags' => [ 'type' => 'list', 'member' => [ 'shape' => 'TagFilter', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'tagKey' => [ 'type' => 'string', 'locationName' => 'tagKey', ],
            ],
        ],
        'PutCustomMetricDataResultShape' => [
            'type' => 'structure',
            'members' => [
                'success' => [ 'type' => 'boolean', 'locationName' => 'success', ],
                'errMetricDataList' => [ 'type' => 'list', 'member' => [ 'shape' => 'MetricDataList', ], ],
            ],
        ],
        'PutMetricDataResultShape' => [
            'type' => 'structure',
            'members' => [
                'success' => [ 'type' => 'boolean', 'locationName' => 'success', ],
                'errMetricDataList' => [ 'type' => 'list', 'member' => [ 'shape' => 'MetricDataList', ], ],
            ],
        ],
        'PutCustomMetricDataResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'error' =>  [ 'shape' => 'PutCustomMetricDataResultShape', ],
                'result' =>  [ 'shape' => 'PutCustomMetricDataResultShape', ],
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
        'PutMetricDataRequestShape' => [
            'type' => 'structure',
            'members' => [
                'metricDataList' => [ 'type' => 'list', 'member' => [ 'shape' => 'MetricDataCm', ], ],
            ],
        ],
        'PutCustomMetricDataRequestShape' => [
            'type' => 'structure',
            'members' => [
                'metricDataList' => [ 'type' => 'list', 'member' => [ 'shape' => 'MetricDataCm', ], ],
            ],
        ],
    ],
];
