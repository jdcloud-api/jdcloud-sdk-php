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
        'BatchDeleteAlarms' => [
            'name' => 'BatchDeleteAlarms',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/regions/{regionId}/alarms',
            ],
            'input' => [ 'shape' => 'BatchDeleteAlarmsRequestShape', ],
            'output' => [ 'shape' => 'BatchDeleteAlarmsResponseShape', ],
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
        'DescribeAlarmContacts' => [
            'name' => 'DescribeAlarmContacts',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/alarms/{alarmId}/contacts',
            ],
            'input' => [ 'shape' => 'DescribeAlarmContactsRequestShape', ],
            'output' => [ 'shape' => 'DescribeAlarmContactsResponseShape', ],
        ],
        'DisableAlarm' => [
            'name' => 'DisableAlarm',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/alarms/{alarmId}/disable',
            ],
            'input' => [ 'shape' => 'DisableAlarmRequestShape', ],
            'output' => [ 'shape' => 'DisableAlarmResponseShape', ],
        ],
        'EnableAlarm' => [
            'name' => 'EnableAlarm',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/alarms/{alarmId}/enable',
            ],
            'input' => [ 'shape' => 'EnableAlarmRequestShape', ],
            'output' => [ 'shape' => 'EnableAlarmResponseShape', ],
        ],
        'BatchCreateAlarms' => [
            'name' => 'BatchCreateAlarms',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/alarms/batch',
            ],
            'input' => [ 'shape' => 'BatchCreateAlarmsRequestShape', ],
            'output' => [ 'shape' => 'BatchCreateAlarmsResponseShape', ],
        ],
        'BatchDisableAlarms' => [
            'name' => 'BatchDisableAlarms',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/alarms/disable',
            ],
            'input' => [ 'shape' => 'BatchDisableAlarmsRequestShape', ],
            'output' => [ 'shape' => 'BatchDisableAlarmsResponseShape', ],
        ],
        'BatchEnableAlarms' => [
            'name' => 'BatchEnableAlarms',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/alarms/enable',
            ],
            'input' => [ 'shape' => 'BatchEnableAlarmsRequestShape', ],
            'output' => [ 'shape' => 'BatchEnableAlarmsResponseShape', ],
        ],
        'DescribeAlarmHistoryAllRegion' => [
            'name' => 'DescribeAlarmHistoryAllRegion',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/rule/queryNotice',
            ],
            'input' => [ 'shape' => 'DescribeAlarmHistoryAllRegionRequestShape', ],
            'output' => [ 'shape' => 'DescribeAlarmHistoryAllRegionResponseShape', ],
        ],
        'DescribeMetricsForCreateTemplate' => [
            'name' => 'DescribeMetricsForCreateTemplate',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/metricsForCreateTemplate',
            ],
            'input' => [ 'shape' => 'DescribeMetricsForCreateTemplateRequestShape', ],
            'output' => [ 'shape' => 'DescribeMetricsForCreateTemplateResponseShape', ],
        ],
        'DescribeTemplates' => [
            'name' => 'DescribeTemplates',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/template',
            ],
            'input' => [ 'shape' => 'DescribeTemplatesRequestShape', ],
            'output' => [ 'shape' => 'DescribeTemplatesResponseShape', ],
        ],
        'CreateTemplate' => [
            'name' => 'CreateTemplate',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/template',
            ],
            'input' => [ 'shape' => 'CreateTemplateRequestShape', ],
            'output' => [ 'shape' => 'CreateTemplateResponseShape', ],
        ],
        'UpdateTemplate' => [
            'name' => 'UpdateTemplate',
            'http' => [
                'method' => 'PATCH',
                'requestUri' => '/v1/template',
            ],
            'input' => [ 'shape' => 'UpdateTemplateRequestShape', ],
            'output' => [ 'shape' => 'UpdateTemplateResponseShape', ],
        ],
        'DeleteTemplates' => [
            'name' => 'DeleteTemplates',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/template',
            ],
            'input' => [ 'shape' => 'DeleteTemplatesRequestShape', ],
            'output' => [ 'shape' => 'DeleteTemplatesResponseShape', ],
        ],
        'DescribeTemplatesByTemplateID' => [
            'name' => 'DescribeTemplatesByTemplateID',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/template/{templateId}',
            ],
            'input' => [ 'shape' => 'DescribeTemplatesByTemplateIDRequestShape', ],
            'output' => [ 'shape' => 'DescribeTemplatesByTemplateIDResponseShape', ],
        ],
        'ApplyTemplate' => [
            'name' => 'ApplyTemplate',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/template/{templateId}/resources',
            ],
            'input' => [ 'shape' => 'ApplyTemplateRequestShape', ],
            'output' => [ 'shape' => 'ApplyTemplateResponseShape', ],
        ],
        'DescribeMetricDataAm' => [
            'name' => 'DescribeMetricDataAm',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/am/metricData',
            ],
            'input' => [ 'shape' => 'DescribeMetricDataAmRequestShape', ],
            'output' => [ 'shape' => 'DescribeMetricDataAmResponseShape', ],
        ],
        'DescribeProbeTasks' => [
            'name' => 'DescribeProbeTasks',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/am/probeTask',
            ],
            'input' => [ 'shape' => 'DescribeProbeTasksRequestShape', ],
            'output' => [ 'shape' => 'DescribeProbeTasksResponseShape', ],
        ],
        'CreateProbeTask' => [
            'name' => 'CreateProbeTask',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/am/probeTask',
            ],
            'input' => [ 'shape' => 'CreateProbeTaskRequestShape', ],
            'output' => [ 'shape' => 'CreateProbeTaskResponseShape', ],
        ],
        'DeleteProbeTask' => [
            'name' => 'DeleteProbeTask',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/am/probeTask',
            ],
            'input' => [ 'shape' => 'DeleteProbeTaskRequestShape', ],
            'output' => [ 'shape' => 'DeleteProbeTaskResponseShape', ],
        ],
        'DescribeProbeTask' => [
            'name' => 'DescribeProbeTask',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/am/probeTask/{probeTaskID}',
            ],
            'input' => [ 'shape' => 'DescribeProbeTaskRequestShape', ],
            'output' => [ 'shape' => 'DescribeProbeTaskResponseShape', ],
        ],
        'UpdateProbeTask' => [
            'name' => 'UpdateProbeTask',
            'http' => [
                'method' => 'PATCH',
                'requestUri' => '/v1/am/probeTask/{probeTaskID}',
            ],
            'input' => [ 'shape' => 'UpdateProbeTaskRequestShape', ],
            'output' => [ 'shape' => 'UpdateProbeTaskResponseShape', ],
        ],
        'DescribeProbeHistory' => [
            'name' => 'DescribeProbeHistory',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/am/probeTask/{probeTaskID}/probe/{probeID}',
            ],
            'input' => [ 'shape' => 'DescribeProbeHistoryRequestShape', ],
            'output' => [ 'shape' => 'DescribeProbeHistoryResponseShape', ],
        ],
        'DiscribeProbes' => [
            'name' => 'DiscribeProbes',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/am/probeTask/{probeTaskID}/probeList',
            ],
            'input' => [ 'shape' => 'DiscribeProbesRequestShape', ],
            'output' => [ 'shape' => 'DiscribeProbesResponseShape', ],
        ],
        'ProbeTaskEnable' => [
            'name' => 'ProbeTaskEnable',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/am/probeTask/enable',
            ],
            'input' => [ 'shape' => 'ProbeTaskEnableRequestShape', ],
            'output' => [ 'shape' => 'ProbeTaskEnableResponseShape', ],
        ],
        'DescribeAlarmHistoryAllRegionCm' => [
            'name' => 'DescribeAlarmHistoryAllRegionCm',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/cm/alarmHistory',
            ],
            'input' => [ 'shape' => 'DescribeAlarmHistoryAllRegionCmRequestShape', ],
            'output' => [ 'shape' => 'DescribeAlarmHistoryAllRegionCmResponseShape', ],
        ],
        'DescribeAllRegionAlarmsCm' => [
            'name' => 'DescribeAllRegionAlarmsCm',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/cm/alarms',
            ],
            'input' => [ 'shape' => 'DescribeAllRegionAlarmsCmRequestShape', ],
            'output' => [ 'shape' => 'DescribeAllRegionAlarmsCmResponseShape', ],
        ],
        'DescribeIsUserNew' => [
            'name' => 'DescribeIsUserNew',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/cm/users/isNew',
            ],
            'input' => [ 'shape' => 'DescribeIsUserNewRequestShape', ],
            'output' => [ 'shape' => 'DescribeIsUserNewResponseShape', ],
        ],
        'DescribeAlarmHistoryCm' => [
            'name' => 'DescribeAlarmHistoryCm',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/cm/alarmHistory',
            ],
            'input' => [ 'shape' => 'DescribeAlarmHistoryCmRequestShape', ],
            'output' => [ 'shape' => 'DescribeAlarmHistoryCmResponseShape', ],
        ],
        'DescribeAlarmsCm' => [
            'name' => 'DescribeAlarmsCm',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/cm/alarms',
            ],
            'input' => [ 'shape' => 'DescribeAlarmsCmRequestShape', ],
            'output' => [ 'shape' => 'DescribeAlarmsCmResponseShape', ],
        ],
        'CreateAlarmCm' => [
            'name' => 'CreateAlarmCm',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/cm/alarms',
            ],
            'input' => [ 'shape' => 'CreateAlarmCmRequestShape', ],
            'output' => [ 'shape' => 'CreateAlarmCmResponseShape', ],
        ],
        'DeleteAlarmsCm' => [
            'name' => 'DeleteAlarmsCm',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/regions/{regionId}/cm/alarms',
            ],
            'input' => [ 'shape' => 'DeleteAlarmsCmRequestShape', ],
            'output' => [ 'shape' => 'DeleteAlarmsCmResponseShape', ],
        ],
        'DescribeAlarmsByID' => [
            'name' => 'DescribeAlarmsByID',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/cm/alarms/{alarmId}',
            ],
            'input' => [ 'shape' => 'DescribeAlarmsByIDRequestShape', ],
            'output' => [ 'shape' => 'DescribeAlarmsByIDResponseShape', ],
        ],
        'UpdateAlarmCm' => [
            'name' => 'UpdateAlarmCm',
            'http' => [
                'method' => 'PATCH',
                'requestUri' => '/v1/regions/{regionId}/cm/alarms/{alarmId}',
            ],
            'input' => [ 'shape' => 'UpdateAlarmCmRequestShape', ],
            'output' => [ 'shape' => 'UpdateAlarmCmResponseShape', ],
        ],
        'DescribeNamespaces' => [
            'name' => 'DescribeNamespaces',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/cm/namespaces',
            ],
            'input' => [ 'shape' => 'DescribeNamespacesRequestShape', ],
            'output' => [ 'shape' => 'DescribeNamespacesResponseShape', ],
        ],
        'DeleteNamespace' => [
            'name' => 'DeleteNamespace',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/regions/{regionId}/cm/namespaces/{namespaceUID}',
            ],
            'input' => [ 'shape' => 'DeleteNamespaceRequestShape', ],
            'output' => [ 'shape' => 'DeleteNamespaceResponseShape', ],
        ],
        'DescribeObjsByNsUID' => [
            'name' => 'DescribeObjsByNsUID',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/cm/namespaces/{namespaceUID}/objs',
            ],
            'input' => [ 'shape' => 'DescribeObjsByNsUIDRequestShape', ],
            'output' => [ 'shape' => 'DescribeObjsByNsUIDResponseShape', ],
        ],
        'DeleteObj' => [
            'name' => 'DeleteObj',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/regions/{regionId}/cm/namespaces/{namespaceUID}/objs',
            ],
            'input' => [ 'shape' => 'DeleteObjRequestShape', ],
            'output' => [ 'shape' => 'DeleteObjResponseShape', ],
        ],
        'DescribeObj' => [
            'name' => 'DescribeObj',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/cm/namespaces/{namespaceUID}/objs/{objUID}',
            ],
            'input' => [ 'shape' => 'DescribeObjRequestShape', ],
            'output' => [ 'shape' => 'DescribeObjResponseShape', ],
        ],
        'DescribeMetricDataCm' => [
            'name' => 'DescribeMetricDataCm',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/cm/namespaces/{namespaceUID}/objs/{objUID}/metricData',
            ],
            'input' => [ 'shape' => 'DescribeMetricDataCmRequestShape', ],
            'output' => [ 'shape' => 'DescribeMetricDataCmResponseShape', ],
        ],
        'DescribeCmMetricDataByTagSpec' => [
            'name' => 'DescribeCmMetricDataByTagSpec',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/cm/namespaces/{namespace}/metrics/{metric}/metricData',
            ],
            'input' => [ 'shape' => 'DescribeCmMetricDataByTagSpecRequestShape', ],
            'output' => [ 'shape' => 'DescribeCmMetricDataByTagSpecResponseShape', ],
        ],
        'DescribeMetricsCm' => [
            'name' => 'DescribeMetricsCm',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/cm/namespaces/{namespaceUID}/objs/{objUID}/metrics',
            ],
            'input' => [ 'shape' => 'DescribeMetricsCmRequestShape', ],
            'output' => [ 'shape' => 'DescribeMetricsCmResponseShape', ],
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
        'DescribeSqlserverBlockProcess' => [
            'name' => 'DescribeSqlserverBlockProcess',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/metrics/{metric}/blockProcess',
            ],
            'input' => [ 'shape' => 'DescribeSqlserverBlockProcessRequestShape', ],
            'output' => [ 'shape' => 'DescribeSqlserverBlockProcessResponseShape', ],
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
        'BatchDescribeMetricData' => [
            'name' => 'BatchDescribeMetricData',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/metricsData',
            ],
            'input' => [ 'shape' => 'BatchDescribeMetricDataRequestShape', ],
            'output' => [ 'shape' => 'BatchDescribeMetricDataResponseShape', ],
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
        'DescribeAlarmingRules' => [
            'name' => 'DescribeAlarmingRules',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/overview/queryAlarmingRules',
            ],
            'input' => [ 'shape' => 'DescribeAlarmingRulesRequestShape', ],
            'output' => [ 'shape' => 'DescribeAlarmingRulesResponseShape', ],
        ],
        'DescribeRuleCounting' => [
            'name' => 'DescribeRuleCounting',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/overview/queryRuleCountings',
            ],
            'input' => [ 'shape' => 'DescribeRuleCountingRequestShape', ],
            'output' => [ 'shape' => 'DescribeRuleCountingResponseShape', ],
        ],
        'DescribeTopNSlowSql' => [
            'name' => 'DescribeTopNSlowSql',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/topNSql',
            ],
            'input' => [ 'shape' => 'DescribeTopNSlowSqlRequestShape', ],
            'output' => [ 'shape' => 'DescribeTopNSlowSqlResponseShape', ],
        ],
    ],
    'shapes' => [
        'AddTagsSpec' => [
            'type' => 'structure',
            'members' => [
                'appCode' => [ 'type' => 'string', 'locationName' => 'appCode', ],
                'groupCode' => [ 'type' => 'string', 'locationName' => 'groupCode', ],
                'resourceIds' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'tagK' => [ 'type' => 'string', 'locationName' => 'tagK', ],
                'tagV' => [ 'type' => 'string', 'locationName' => 'tagV', ],
            ],
        ],
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
        'DescribedNoticeContacts' => [
            'type' => 'structure',
            'members' => [
                'referenceId' => [ 'type' => 'long', 'locationName' => 'referenceId', ],
                'referenceType' => [ 'type' => 'long', 'locationName' => 'referenceType', ],
            ],
        ],
        'AlarmHistoryWithDetail' => [
            'type' => 'structure',
            'members' => [
                'contacts' => [ 'type' => 'list', 'member' => [ 'shape' => 'DescribedNoticeContacts', ], ],
                'noticeLevel' => [ 'type' => 'string', 'locationName' => 'noticeLevel', ],
                'noticeTime' => [ 'type' => 'long', 'locationName' => 'noticeTime', ],
                'rule' =>  [ 'shape' => 'Rule', ],
                'value' => [ 'type' => 'double', 'locationName' => 'value', ],
            ],
        ],
        'NoticeLevel' => [
            'type' => 'structure',
            'members' => [
                'custom' => [ 'type' => 'boolean', 'locationName' => 'custom', ],
                'levels' => [ 'type' => 'object', 'locationName' => 'levels', ],
            ],
        ],
        'Rule' => [
            'type' => 'structure',
            'members' => [
                'autoScalingPolicyId' => [ 'type' => 'string', 'locationName' => 'autoScalingPolicyId', ],
                'calculateUnit' => [ 'type' => 'string', 'locationName' => 'calculateUnit', ],
                'calculation' => [ 'type' => 'string', 'locationName' => 'calculation', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'dataMeaning' => [ 'type' => 'long', 'locationName' => 'dataMeaning', ],
                'datacenter' => [ 'type' => 'string', 'locationName' => 'datacenter', ],
                'deleted' => [ 'type' => 'long', 'locationName' => 'deleted', ],
                'downSample' => [ 'type' => 'string', 'locationName' => 'downSample', ],
                'enableTime' => [ 'type' => 'string', 'locationName' => 'enableTime', ],
                'enabled' => [ 'type' => 'long', 'locationName' => 'enabled', ],
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
                'idpk' => [ 'type' => 'long', 'locationName' => 'idpk', ],
                'isLatest' => [ 'type' => 'long', 'locationName' => 'isLatest', ],
                'metric' => [ 'type' => 'string', 'locationName' => 'metric', ],
                'metricId' => [ 'type' => 'long', 'locationName' => 'metricId', ],
                'metricName' => [ 'type' => 'string', 'locationName' => 'metricName', ],
                'noticeLevel' =>  [ 'shape' => 'NoticeLevel', ],
                'noticePeriod' => [ 'type' => 'long', 'locationName' => 'noticePeriod', ],
                'operation' => [ 'type' => 'string', 'locationName' => 'operation', ],
                'period' => [ 'type' => 'long', 'locationName' => 'period', ],
                'pin' => [ 'type' => 'string', 'locationName' => 'pin', ],
                'preVersionId' => [ 'type' => 'long', 'locationName' => 'preVersionId', ],
                'region' => [ 'type' => 'string', 'locationName' => 'region', ],
                'resourceId' => [ 'type' => 'string', 'locationName' => 'resourceId', ],
                'rootRuleId' => [ 'type' => 'long', 'locationName' => 'rootRuleId', ],
                'ruleType' => [ 'type' => 'long', 'locationName' => 'ruleType', ],
                'serviceCode' => [ 'type' => 'string', 'locationName' => 'serviceCode', ],
                'status' => [ 'type' => 'long', 'locationName' => 'status', ],
                'statusTime' => [ 'type' => 'string', 'locationName' => 'statusTime', ],
                'tags' => [ 'type' => 'object', 'locationName' => 'tags', ],
                'tagsNonGrouping' => [ 'type' => 'string', 'locationName' => 'tagsNonGrouping', ],
                'threshold' => [ 'type' => 'double', 'locationName' => 'threshold', ],
                'times' => [ 'type' => 'long', 'locationName' => 'times', ],
                'updateTime' => [ 'type' => 'string', 'locationName' => 'updateTime', ],
                'version' => [ 'type' => 'long', 'locationName' => 'version', ],
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
                'id' => [ 'type' => 'long', 'locationName' => 'id', ],
                'metricId' => [ 'type' => 'long', 'locationName' => 'metricId', ],
                'metricName' => [ 'type' => 'string', 'locationName' => 'metricName', ],
                'noticeLevel' =>  [ 'shape' => 'NoticeLevel', ],
                'noticePeriod' => [ 'type' => 'long', 'locationName' => 'noticePeriod', ],
                'operation' => [ 'type' => 'string', 'locationName' => 'operation', ],
                'period' => [ 'type' => 'long', 'locationName' => 'period', ],
                'ruleType' => [ 'type' => 'long', 'locationName' => 'ruleType', ],
                'serviceCode' => [ 'type' => 'string', 'locationName' => 'serviceCode', ],
                'tag' => [ 'type' => 'string', 'locationName' => 'tag', ],
                'tags' => [ 'type' => 'object', 'locationName' => 'tags', ],
                'threshold' => [ 'type' => 'double', 'locationName' => 'threshold', ],
                'times' => [ 'type' => 'long', 'locationName' => 'times', ],
                'updateTime' => [ 'type' => 'string', 'locationName' => 'updateTime', ],
            ],
        ],
        'ApplyTemplateSpec' => [
            'type' => 'structure',
            'members' => [
                'clientToken' => [ 'type' => 'string', 'locationName' => 'clientToken', ],
                'contacts' => [ 'type' => 'list', 'member' => [ 'shape' => 'BaseContact', ], ],
                'dataCenters' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'resourceIds' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'serviceCode' => [ 'type' => 'string', 'locationName' => 'serviceCode', ],
                'tagsArray' => [ 'type' => 'list', 'member' => [ 'type' => 'object', ], ],
                'templateType' => [ 'type' => 'long', 'locationName' => 'templateType', ],
                'webHookContent' => [ 'type' => 'string', 'locationName' => 'webHookContent', ],
                'webHookProtocol' => [ 'type' => 'string', 'locationName' => 'webHookProtocol', ],
                'webHookSecret' => [ 'type' => 'string', 'locationName' => 'webHookSecret', ],
                'webHookUrl' => [ 'type' => 'string', 'locationName' => 'webHookUrl', ],
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
        'BaseRuleT' => [
            'type' => 'structure',
            'members' => [
                'autoScalingPolicyId' => [ 'type' => 'string', 'locationName' => 'autoScalingPolicyId', ],
                'calculateUnit' => [ 'type' => 'string', 'locationName' => 'calculateUnit', ],
                'calculation' => [ 'type' => 'string', 'locationName' => 'calculation', ],
                'downSample' => [ 'type' => 'string', 'locationName' => 'downSample', ],
                'metricId' => [ 'type' => 'long', 'locationName' => 'metricId', ],
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
        'BatchCreateAlarmsSpec' => [
            'type' => 'structure',
            'members' => [
                'clientToken' => [ 'type' => 'string', 'locationName' => 'clientToken', ],
                'contacts' => [ 'type' => 'list', 'member' => [ 'shape' => 'BaseContact', ], ],
                'datacenter' => [ 'type' => 'string', 'locationName' => 'datacenter', ],
                'enabled' => [ 'type' => 'long', 'locationName' => 'enabled', ],
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
        'BatchUpdateWidgetError' => [
            'type' => 'structure',
            'members' => [
                'dashboardId' => [ 'type' => 'string', 'locationName' => 'dashboardId', ],
                'error' => [ 'type' => 'string', 'locationName' => 'error', ],
                'widgetId' => [ 'type' => 'string', 'locationName' => 'widgetId', ],
            ],
        ],
        'BatchUpdateWidgetOut' => [
            'type' => 'structure',
            'members' => [
                'errors' => [ 'type' => 'list', 'member' => [ 'shape' => 'BatchUpdateWidgetError', ], ],
                'suc' => [ 'type' => 'long', 'locationName' => 'suc', ],
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
                'tag' => [ 'type' => 'object', 'locationName' => 'tag', ],
            ],
        ],
        'WidgetResources' => [
            'type' => 'structure',
            'members' => [
                'raw' => [ 'type' => 'list', 'member' => [ 'shape' => 'WidgetRawResource', ], ],
                'tag' => [ 'type' => 'list', 'member' => [ 'shape' => 'WidgetTagResource', ], ],
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
                'serviceCode' => [ 'type' => 'string', 'locationName' => 'serviceCode', ],
                'tag' => [ 'type' => 'string', 'locationName' => 'tag', ],
                'threshold' => [ 'type' => 'double', 'locationName' => 'threshold', ],
                'times' => [ 'type' => 'long', 'locationName' => 'times', ],
                'value' => [ 'type' => 'double', 'locationName' => 'value', ],
            ],
        ],
        'CreateAlarmParam' => [
            'type' => 'structure',
            'members' => [
                'calculateUnit' => [ 'type' => 'string', 'locationName' => 'calculateUnit', ],
                'calculation' => [ 'type' => 'string', 'locationName' => 'calculation', ],
                'contactGroups' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'contactPersons' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'downSample' => [ 'type' => 'string', 'locationName' => 'downSample', ],
                'metric' => [ 'type' => 'string', 'locationName' => 'metric', ],
                'noticeLevel' =>  [ 'shape' => 'NoticeLevel', ],
                'noticePeriod' => [ 'type' => 'long', 'locationName' => 'noticePeriod', ],
                'operation' => [ 'type' => 'string', 'locationName' => 'operation', ],
                'period' => [ 'type' => 'long', 'locationName' => 'period', ],
                'resourceIds' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'serviceCode' => [ 'type' => 'string', 'locationName' => 'serviceCode', ],
                'tags' => [ 'type' => 'object', 'locationName' => 'tags', ],
                'threshold' => [ 'type' => 'double', 'locationName' => 'threshold', ],
                'times' => [ 'type' => 'long', 'locationName' => 'times', ],
                'webHookContent' => [ 'type' => 'string', 'locationName' => 'webHookContent', ],
                'webHookProtocol' => [ 'type' => 'string', 'locationName' => 'webHookProtocol', ],
                'webHookSecret' => [ 'type' => 'string', 'locationName' => 'webHookSecret', ],
                'webHookUrl' => [ 'type' => 'string', 'locationName' => 'webHookUrl', ],
            ],
        ],
        'CreateAlarmSpec' => [
            'type' => 'structure',
            'members' => [
                'clientToken' => [ 'type' => 'string', 'locationName' => 'clientToken', ],
                'createAlarmSpec' =>  [ 'shape' => 'CreateAlarmParam', ],
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
                'threshold' => [ 'type' => 'double', 'locationName' => 'threshold', ],
                'times' => [ 'type' => 'long', 'locationName' => 'times', ],
            ],
        ],
        'CreateCmAlarmSpec' => [
            'type' => 'structure',
            'members' => [
                'clientToken' => [ 'type' => 'string', 'locationName' => 'clientToken', ],
                'createCmAlarmSpec' =>  [ 'shape' => 'CreateCmAlarmParam', ],
            ],
        ],
        'CreateDashboardSpec' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
            ],
        ],
        'CreateProbeTaskParam' => [
            'type' => 'structure',
            'members' => [
                'address' => [ 'type' => 'string', 'locationName' => 'address', ],
                'frequency' => [ 'type' => 'long', 'locationName' => 'frequency', ],
                'httpBody' => [ 'type' => 'string', 'locationName' => 'httpBody', ],
                'httpCookie' => [ 'type' => 'list', 'member' => [ 'shape' => 'KeyValue', ], ],
                'httpHeader' => [ 'type' => 'list', 'member' => [ 'shape' => 'KeyValue', ], ],
                'httpType' => [ 'type' => 'long', 'locationName' => 'httpType', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'port' => [ 'type' => 'long', 'locationName' => 'port', ],
                'probeType' => [ 'type' => 'long', 'locationName' => 'probeType', ],
                'probes' => [ 'type' => 'list', 'member' => [ 'shape' => 'Probe', ], ],
                'targetId' => [ 'type' => 'string', 'locationName' => 'targetId', ],
                'targetRegion' => [ 'type' => 'string', 'locationName' => 'targetRegion', ],
                'taskType' => [ 'type' => 'long', 'locationName' => 'taskType', ],
                'timeout' => [ 'type' => 'long', 'locationName' => 'timeout', ],
            ],
        ],
        'Probe' => [
            'type' => 'structure',
            'members' => [
                'privateIp' => [ 'type' => 'string', 'locationName' => 'privateIp', ],
                'publicIp' => [ 'type' => 'string', 'locationName' => 'publicIp', ],
                'region' => [ 'type' => 'string', 'locationName' => 'region', ],
                'uuid' => [ 'type' => 'string', 'locationName' => 'uuid', ],
            ],
        ],
        'KeyValue' => [
            'type' => 'structure',
            'members' => [
                'key' => [ 'type' => 'string', 'locationName' => 'key', ],
                'value' => [ 'type' => 'string', 'locationName' => 'value', ],
            ],
        ],
        'CreateProbeTaskSpec' => [
            'type' => 'structure',
            'members' => [
                'clientToken' => [ 'type' => 'string', 'locationName' => 'clientToken', ],
                'createProbeTaskSpec' =>  [ 'shape' => 'CreateProbeTaskParam', ],
            ],
        ],
        'CreateSiteMonitorSpec' => [
            'type' => 'structure',
            'members' => [
                'address' => [ 'type' => 'string', 'locationName' => 'address', ],
                'advanceChecked' => [ 'type' => 'string', 'locationName' => 'advanceChecked', ],
                'createdTime' => [ 'type' => 'long', 'locationName' => 'createdTime', ],
                'cycle' => [ 'type' => 'long', 'locationName' => 'cycle', ],
                'defaultSource' => [ 'type' => 'string', 'locationName' => 'defaultSource', ],
                'enabled' => [ 'type' => 'string', 'locationName' => 'enabled', ],
                'hawkeyeId' => [ 'type' => 'long', 'locationName' => 'hawkeyeId', ],
                'httpOption' =>  [ 'shape' => 'SiteMonitorHttpOption', ],
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
                'isDeleted' => [ 'type' => 'string', 'locationName' => 'isDeleted', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'pin' => [ 'type' => 'string', 'locationName' => 'pin', ],
                'port' => [ 'type' => 'string', 'locationName' => 'port', ],
                'source' => [ 'type' => 'list', 'member' => [ 'shape' => 'SiteMonitorSource', ], ],
                'stats' => [ 'type' => 'object', 'locationName' => 'stats', ],
                'tcpOption' =>  [ 'shape' => 'SiteMonitorTcpOption', ],
                'type' => [ 'type' => 'string', 'locationName' => 'type', ],
                'udpOption' =>  [ 'shape' => 'SiteMonitorUdpOption', ],
                'updatedTime' => [ 'type' => 'long', 'locationName' => 'updatedTime', ],
            ],
        ],
        'SiteMonitorUdpOption' => [
            'type' => 'structure',
            'members' => [
                'reqContent' => [ 'type' => 'string', 'locationName' => 'reqContent', ],
                'resCheck' => [ 'type' => 'string', 'locationName' => 'resCheck', ],
                'timeout' => [ 'type' => 'long', 'locationName' => 'timeout', ],
            ],
        ],
        'SiteMonitorHttpOption' => [
            'type' => 'structure',
            'members' => [
                'cookie' => [ 'type' => 'object', 'locationName' => 'cookie', ],
                'header' => [ 'type' => 'object', 'locationName' => 'header', ],
                'method' => [ 'type' => 'string', 'locationName' => 'method', ],
                'reqContent' => [ 'type' => 'string', 'locationName' => 'reqContent', ],
                'resCheck' => [ 'type' => 'string', 'locationName' => 'resCheck', ],
            ],
        ],
        'SiteMonitorSource' => [
            'type' => 'structure',
            'members' => [
                'sisp' => [ 'type' => 'string', 'locationName' => 'sisp', ],
                'sispName' => [ 'type' => 'string', 'locationName' => 'sispName', ],
                'sloc' => [ 'type' => 'string', 'locationName' => 'sloc', ],
                'slocName' => [ 'type' => 'string', 'locationName' => 'slocName', ],
            ],
        ],
        'SiteMonitorTcpOption' => [
            'type' => 'structure',
            'members' => [
                'reqContent' => [ 'type' => 'string', 'locationName' => 'reqContent', ],
                'reqContentType' => [ 'type' => 'string', 'locationName' => 'reqContentType', ],
                'resCheck' => [ 'type' => 'string', 'locationName' => 'resCheck', ],
                'resCheckType' => [ 'type' => 'string', 'locationName' => 'resCheckType', ],
                'timeout' => [ 'type' => 'long', 'locationName' => 'timeout', ],
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
        'DataPoint' => [
            'type' => 'structure',
            'members' => [
                'timestamp' => [ 'type' => 'long', 'locationName' => 'timestamp', ],
                'value' => [ 'type' => 'object', 'locationName' => 'value', ],
            ],
        ],
        'DescribeAlarmingRulesEnd' => [
            'type' => 'structure',
            'members' => [
                'alarmHistoryList' => [ 'type' => 'list', 'member' => [ 'shape' => 'AlarmHistoryWithDetail', ], ],
                'numberPages' => [ 'type' => 'long', 'locationName' => 'numberPages', ],
                'numberRecords' => [ 'type' => 'long', 'locationName' => 'numberRecords', ],
                'pageNumber' => [ 'type' => 'long', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'long', 'locationName' => 'pageSize', ],
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
        'DescribeCmMetricDataByTagSpec' => [
            'type' => 'structure',
            'members' => [
                'aggrType' => [ 'type' => 'string', 'locationName' => 'aggrType', ],
                'downSampleType' => [ 'type' => 'string', 'locationName' => 'downSampleType', ],
                'endTime' => [ 'type' => 'string', 'locationName' => 'endTime', ],
                'groupBy' => [ 'type' => 'boolean', 'locationName' => 'groupBy', ],
                'startTime' => [ 'type' => 'string', 'locationName' => 'startTime', ],
                'tags' => [ 'type' => 'list', 'member' => [ 'shape' => 'TagFilter', ], ],
                'timeInterval' => [ 'type' => 'string', 'locationName' => 'timeInterval', ],
            ],
        ],
        'TagFilter' => [
            'type' => 'structure',
            'members' => [
                'key' => [ 'type' => 'string', 'locationName' => 'key', ],
                'values' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'DescribeMetricDataSpec' => [
            'type' => 'structure',
            'members' => [
                'aggrType' => [ 'type' => 'string', 'locationName' => 'aggrType', ],
                'endTime' => [ 'type' => 'string', 'locationName' => 'endTime', ],
                'groupBy' => [ 'type' => 'boolean', 'locationName' => 'groupBy', ],
                'resourceId' => [ 'type' => 'string', 'locationName' => 'resourceId', ],
                'serviceCode' => [ 'type' => 'string', 'locationName' => 'serviceCode', ],
                'startTime' => [ 'type' => 'string', 'locationName' => 'startTime', ],
                'tags' => [ 'type' => 'list', 'member' => [ 'shape' => 'TagFilter', ], ],
                'timeInterval' => [ 'type' => 'string', 'locationName' => 'timeInterval', ],
            ],
        ],
        'DescribeRuleCountingEnd' => [
            'type' => 'structure',
            'members' => [
                'alarmRuleCount' => [ 'type' => 'long', 'locationName' => 'alarmRuleCount', ],
                'disableRuleCount' => [ 'type' => 'long', 'locationName' => 'disableRuleCount', ],
                'normalRuleCount' => [ 'type' => 'long', 'locationName' => 'normalRuleCount', ],
                'serviceCode' => [ 'type' => 'string', 'locationName' => 'serviceCode', ],
                'subUserPermission' => [ 'type' => 'boolean', 'locationName' => 'subUserPermission', ],
                'totalRuleCount' => [ 'type' => 'long', 'locationName' => 'totalRuleCount', ],
                'unknownRuleCount' => [ 'type' => 'long', 'locationName' => 'unknownRuleCount', ],
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
        'DescribeSqlserverBlockProcessOut' => [
            'type' => 'structure',
            'members' => [
                'list' => [ 'type' => 'list', 'member' => [ 'shape' => 'LastDownsampleRespItem', ], ],
            ],
        ],
        'DescribeTemplateByIDSpec' => [
            'type' => 'structure',
            'members' => [
                'templateType' => [ 'type' => 'long', 'locationName' => 'templateType', ],
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
        'EnableSiteMonitorReqItem' => [
            'type' => 'structure',
            'members' => [
                'enabled' => [ 'type' => 'string', 'locationName' => 'enabled', ],
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
            ],
        ],
        'EnableSiteMonitorSpec' => [
            'type' => 'structure',
            'members' => [
                'list' => [ 'type' => 'list', 'member' => [ 'shape' => 'EnableSiteMonitorReqItem', ], ],
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
        'Event' => [
            'type' => 'structure',
            'members' => [
                'probeResult' => [ 'type' => 'long', 'locationName' => 'probeResult', ],
                'probeStatus' => [ 'type' => 'long', 'locationName' => 'probeStatus', ],
                'timestamp' => [ 'type' => 'long', 'locationName' => 'timestamp', ],
            ],
        ],
        'Filter' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'values' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'GetSiteMonitorDataPointsOut' => [
            'type' => 'structure',
            'members' => [
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
        'ServiceMetric' => [
            'type' => 'structure',
            'members' => [
                'metric' => [ 'type' => 'list', 'member' => [ 'shape' => 'ServiceMetricItem', ], ],
                'serviceCode' => [ 'type' => 'string', 'locationName' => 'serviceCode', ],
            ],
        ],
        'ServiceMetricItem' => [
            'type' => 'structure',
            'members' => [
                'aggregates' => [ 'type' => 'list', 'member' => [ 'shape' => 'ServiceMetricAggregateItem', ], ],
                'calculateUnit' => [ 'type' => 'string', 'locationName' => 'calculateUnit', ],
                'metric' => [ 'type' => 'string', 'locationName' => 'metric', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
            ],
        ],
        'GetWidgetMetricOut' => [
            'type' => 'structure',
            'members' => [
                'list' => [ 'type' => 'list', 'member' => [ 'shape' => 'ServiceMetric', ], ],
            ],
        ],
        'ServiceMetricAggregateItem' => [
            'type' => 'structure',
            'members' => [
                'aggregate' => [ 'type' => 'string', 'locationName' => 'aggregate', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
            ],
        ],
        'IspLocation' => [
            'type' => 'structure',
            'members' => [
                'sisp' => [ 'type' => 'string', 'locationName' => 'sisp', ],
                'sispName' => [ 'type' => 'string', 'locationName' => 'sispName', ],
                'slocs' => [ 'type' => 'list', 'member' => [ 'shape' => 'Location', ], ],
            ],
        ],
        'Location' => [
            'type' => 'structure',
            'members' => [
                'sloc' => [ 'type' => 'string', 'locationName' => 'sloc', ],
                'slocName' => [ 'type' => 'string', 'locationName' => 'slocName', ],
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
                'aggrPeriod' => [ 'type' => 'long', 'locationName' => 'aggrPeriod', ],
                'aggrType' => [ 'type' => 'string', 'locationName' => 'aggrType', ],
                'metricName' => [ 'type' => 'string', 'locationName' => 'metricName', ],
                'metricUID' => [ 'type' => 'string', 'locationName' => 'metricUID', ],
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
        'MetricDataRespToFE' => [
            'type' => 'structure',
            'members' => [
                'metricDatas' => [ 'type' => 'list', 'member' => [ 'shape' => 'MetricData', ], ],
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
        'MetricInfo' => [
            'type' => 'structure',
            'members' => [
                'calculateUnit' => [ 'type' => 'string', 'locationName' => 'calculateUnit', ],
                'metric' => [ 'type' => 'string', 'locationName' => 'metric', ],
                'metricId' => [ 'type' => 'long', 'locationName' => 'metricId', ],
                'metricName' => [ 'type' => 'string', 'locationName' => 'metricName', ],
                'serviceCode' => [ 'type' => 'string', 'locationName' => 'serviceCode', ],
            ],
        ],
        'NsInfo' => [
            'type' => 'structure',
            'members' => [
                'metricCount' => [ 'type' => 'long', 'locationName' => 'metricCount', ],
                'nsName' => [ 'type' => 'string', 'locationName' => 'nsName', ],
                'nsUid' => [ 'type' => 'string', 'locationName' => 'nsUid', ],
                'objCount' => [ 'type' => 'long', 'locationName' => 'objCount', ],
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
        'ProbeInfo' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'privateIp' => [ 'type' => 'string', 'locationName' => 'privateIp', ],
                'probeResult' => [ 'type' => 'long', 'locationName' => 'probeResult', ],
                'probeStatus' => [ 'type' => 'long', 'locationName' => 'probeStatus', ],
                'publicIp' => [ 'type' => 'string', 'locationName' => 'publicIp', ],
                'targetStatus' => [ 'type' => 'long', 'locationName' => 'targetStatus', ],
                'uuid' => [ 'type' => 'string', 'locationName' => 'uuid', ],
                'vmStatus' => [ 'type' => 'string', 'locationName' => 'vmStatus', ],
            ],
        ],
        'ProbeTaskEnableSpec' => [
            'type' => 'structure',
            'members' => [
                'enabled' => [ 'type' => 'boolean', 'locationName' => 'enabled', ],
                'taskId' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
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
        'Resource' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'resourceId' => [ 'type' => 'string', 'locationName' => 'resourceId', ],
            ],
        ],
        'SiteMonitor' => [
            'type' => 'structure',
            'members' => [
                'address' => [ 'type' => 'string', 'locationName' => 'address', ],
                'advanceChecked' => [ 'type' => 'string', 'locationName' => 'advanceChecked', ],
                'createdTime' => [ 'type' => 'long', 'locationName' => 'createdTime', ],
                'cycle' => [ 'type' => 'long', 'locationName' => 'cycle', ],
                'defaultSource' => [ 'type' => 'string', 'locationName' => 'defaultSource', ],
                'enabled' => [ 'type' => 'string', 'locationName' => 'enabled', ],
                'hawkeyeId' => [ 'type' => 'long', 'locationName' => 'hawkeyeId', ],
                'httpOption' =>  [ 'shape' => 'SiteMonitorHttpOption', ],
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
                'isDeleted' => [ 'type' => 'string', 'locationName' => 'isDeleted', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'pin' => [ 'type' => 'string', 'locationName' => 'pin', ],
                'port' => [ 'type' => 'string', 'locationName' => 'port', ],
                'source' => [ 'type' => 'list', 'member' => [ 'shape' => 'SiteMonitorSource', ], ],
                'stats' => [ 'type' => 'object', 'locationName' => 'stats', ],
                'tcpOption' =>  [ 'shape' => 'SiteMonitorTcpOption', ],
                'type' => [ 'type' => 'string', 'locationName' => 'type', ],
                'udpOption' =>  [ 'shape' => 'SiteMonitorUdpOption', ],
                'updatedTime' => [ 'type' => 'long', 'locationName' => 'updatedTime', ],
            ],
        ],
        'SiteMonitorEnableReqItem' => [
            'type' => 'structure',
            'members' => [
                'enabled' => [ 'type' => 'string', 'locationName' => 'enabled', ],
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
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
                'tags' => [ 'type' => 'object', 'locationName' => 'tags', ],
            ],
        ],
        'TagKeyValue' => [
            'type' => 'structure',
            'members' => [
                'tagKey' => [ 'type' => 'string', 'locationName' => 'tagKey', ],
                'tagValue' => [ 'type' => 'string', 'locationName' => 'tagValue', ],
            ],
        ],
        'TaskInfo' => [
            'type' => 'structure',
            'members' => [
                'abnormalCount' => [ 'type' => 'long', 'locationName' => 'abnormalCount', ],
                'address' => [ 'type' => 'string', 'locationName' => 'address', ],
                'enabled' => [ 'type' => 'boolean', 'locationName' => 'enabled', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'probeAvailability' => [ 'type' => 'double', 'locationName' => 'probeAvailability', ],
                'probeCount' => [ 'type' => 'long', 'locationName' => 'probeCount', ],
                'probeType' => [ 'type' => 'long', 'locationName' => 'probeType', ],
                'responseTime' => [ 'type' => 'double', 'locationName' => 'responseTime', ],
                'taskId' => [ 'type' => 'string', 'locationName' => 'taskId', ],
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
        'UpdateCmAlarmSpec' => [
            'type' => 'structure',
            'members' => [
                'calculation' => [ 'type' => 'string', 'locationName' => 'calculation', ],
                'contactGroups' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'contactPersons' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'downSample' => [ 'type' => 'string', 'locationName' => 'downSample', ],
                'metric' => [ 'type' => 'string', 'locationName' => 'metric', ],
                'noticePeriod' => [ 'type' => 'long', 'locationName' => 'noticePeriod', ],
                'operation' => [ 'type' => 'string', 'locationName' => 'operation', ],
                'period' => [ 'type' => 'long', 'locationName' => 'period', ],
                'serviceCode' => [ 'type' => 'string', 'locationName' => 'serviceCode', ],
                'threshold' => [ 'type' => 'double', 'locationName' => 'threshold', ],
                'times' => [ 'type' => 'long', 'locationName' => 'times', ],
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
        'UpdateProbeTaskSpec' => [
            'type' => 'structure',
            'members' => [
                'address' => [ 'type' => 'string', 'locationName' => 'address', ],
                'frequency' => [ 'type' => 'long', 'locationName' => 'frequency', ],
                'httpBody' => [ 'type' => 'string', 'locationName' => 'httpBody', ],
                'httpCookie' => [ 'type' => 'list', 'member' => [ 'shape' => 'KeyValue', ], ],
                'httpHeader' => [ 'type' => 'list', 'member' => [ 'shape' => 'KeyValue', ], ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'port' => [ 'type' => 'long', 'locationName' => 'port', ],
                'probes' => [ 'type' => 'list', 'member' => [ 'shape' => 'Probe', ], ],
                'targetId' => [ 'type' => 'string', 'locationName' => 'targetId', ],
                'targetRegion' => [ 'type' => 'string', 'locationName' => 'targetRegion', ],
                'timeout' => [ 'type' => 'long', 'locationName' => 'timeout', ],
            ],
        ],
        'UpdateSiteMonitorSpec' => [
            'type' => 'structure',
            'members' => [
                'address' => [ 'type' => 'string', 'locationName' => 'address', ],
                'advanceChecked' => [ 'type' => 'string', 'locationName' => 'advanceChecked', ],
                'createdTime' => [ 'type' => 'long', 'locationName' => 'createdTime', ],
                'cycle' => [ 'type' => 'long', 'locationName' => 'cycle', ],
                'defaultSource' => [ 'type' => 'string', 'locationName' => 'defaultSource', ],
                'enabled' => [ 'type' => 'string', 'locationName' => 'enabled', ],
                'hawkeyeId' => [ 'type' => 'long', 'locationName' => 'hawkeyeId', ],
                'httpOption' =>  [ 'shape' => 'SiteMonitorHttpOption', ],
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
                'isDeleted' => [ 'type' => 'string', 'locationName' => 'isDeleted', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'pin' => [ 'type' => 'string', 'locationName' => 'pin', ],
                'port' => [ 'type' => 'string', 'locationName' => 'port', ],
                'source' => [ 'type' => 'list', 'member' => [ 'shape' => 'SiteMonitorSource', ], ],
                'stats' => [ 'type' => 'object', 'locationName' => 'stats', ],
                'tcpOption' =>  [ 'shape' => 'SiteMonitorTcpOption', ],
                'type' => [ 'type' => 'string', 'locationName' => 'type', ],
                'udpOption' =>  [ 'shape' => 'SiteMonitorUdpOption', ],
                'updatedTime' => [ 'type' => 'long', 'locationName' => 'updatedTime', ],
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
        'BatchEnableAlarmsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'BatchEnableAlarmsResultShape', ],
            ],
        ],
        'EnableAlarmResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'EnableAlarmResultShape', ],
            ],
        ],
        'BatchCreateAlarmsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'clientToken' => [ 'type' => 'string', 'locationName' => 'clientToken', ],
                'contacts' => [ 'type' => 'list', 'member' => [ 'shape' => 'BaseContact', ], ],
                'datacenter' => [ 'type' => 'string', 'locationName' => 'datacenter', ],
                'enabled' => [ 'type' => 'long', 'locationName' => 'enabled', ],
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
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
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
        'BatchEnableAlarmsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'ids' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
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
        'DescribeAlarmHistoryAllRegionResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'DescribeAlarmHistoryAllRegionResultShape', ],
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
        'CreateAlarmResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'CreateAlarmResultShape', ],
            ],
        ],
        'DescribeAlarmsResultShape' => [
            'type' => 'structure',
            'members' => [
                'alarmList' => [ 'type' => 'list', 'member' => [ 'shape' => 'DescribedAlarm', ], ],
                'total' => [ 'type' => 'long', 'locationName' => 'total', ],
            ],
        ],
        'BatchDeleteAlarmsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'BatchDeleteAlarmsResultShape', ],
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
        'BatchCreateAlarmsResultShape' => [
            'type' => 'structure',
            'members' => [
                'alarmIDList' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'BatchDeleteAlarmsResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DescribeAlarmContactsResultShape' => [
            'type' => 'structure',
            'members' => [
                'contactsList' => [ 'type' => 'list', 'member' => [ 'shape' => 'DescribedNoticeContacts', ], ],
                'total' => [ 'type' => 'long', 'locationName' => 'total', ],
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
        'BatchCreateAlarmsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'BatchCreateAlarmsResultShape', ],
            ],
        ],
        'DescribeAlarmsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'DescribeAlarmsResultShape', ],
            ],
        ],
        'BatchDisableAlarmsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'ids' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DescribeAlarmHistoryAllRegionRequestShape' => [
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
        'BatchDeleteAlarmsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'filters' => [ 'type' => 'list', 'member' => [ 'shape' => 'Filter', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DisableAlarmResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'DisableAlarmResultShape', ],
            ],
        ],
        'DescribeAlarmHistoryAllRegionResultShape' => [
            'type' => 'structure',
            'members' => [
                'list' => [ 'type' => 'list', 'member' => [ 'shape' => 'AlarmHistoryWithDetail', ], ],
                'total' => [ 'type' => 'long', 'locationName' => 'total', ],
            ],
        ],
        'DescribeAlarmHistoryResultShape' => [
            'type' => 'structure',
            'members' => [
                'alarmHistoryList' => [ 'type' => 'list', 'member' => [ 'shape' => 'DescribedAlarmHistory', ], ],
                'total' => [ 'type' => 'long', 'locationName' => 'total', ],
            ],
        ],
        'BatchDisableAlarmsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'BatchDisableAlarmsResultShape', ],
            ],
        ],
        'DescribeAlarmsByIDResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'DescribeAlarmsByIDResultShape', ],
            ],
        ],
        'DisableAlarmRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'alarmId' => [ 'type' => 'string', 'locationName' => 'alarmId', ],
            ],
        ],
        'BatchDisableAlarmsResultShape' => [
            'type' => 'structure',
            'members' => [
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
        'BatchEnableAlarmsResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'CreateAlarmRequestShape' => [
            'type' => 'structure',
            'members' => [
                'clientToken' => [ 'type' => 'string', 'locationName' => 'clientToken', ],
                'createAlarmSpec' =>  [ 'shape' => 'CreateAlarmParam', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DescribeTemplatesResultShape' => [
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
        'UpdateTemplateResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'UpdateTemplateResultShape', ],
            ],
        ],
        'DescribeTemplatesResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'DescribeTemplatesResultShape', ],
            ],
        ],
        'DescribeMetricsForCreateTemplateResultShape' => [
            'type' => 'structure',
            'members' => [
                'metrics' => [ 'type' => 'list', 'member' => [ 'shape' => 'MetricInfo', ], ],
            ],
        ],
        'DescribeTemplatesRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'long', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'long', 'locationName' => 'pageSize', ],
                'serviceCode' => [ 'type' => 'string', 'locationName' => 'serviceCode', ],
                'templateName' => [ 'type' => 'string', 'locationName' => 'templateName', ],
                'templateType' => [ 'type' => 'long', 'locationName' => 'templateType', ],
            ],
        ],
        'DescribeMetricsForCreateTemplateResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'DescribeMetricsForCreateTemplateResultShape', ],
            ],
        ],
        'CreateTemplateResultShape' => [
            'type' => 'structure',
            'members' => [
                'success' => [ 'type' => 'boolean', 'locationName' => 'success', ],
                'templateId' => [ 'type' => 'long', 'locationName' => 'templateId', ],
            ],
        ],
        'DescribeTemplatesByTemplateIDResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'DescribeTemplatesByTemplateIDResultShape', ],
            ],
        ],
        'DeleteTemplatesRequestShape' => [
            'type' => 'structure',
            'members' => [
                'templateIds' => [ 'type' => 'string', 'locationName' => 'templateIds', ],
            ],
        ],
        'ApplyTemplateRequestShape' => [
            'type' => 'structure',
            'members' => [
                'clientToken' => [ 'type' => 'string', 'locationName' => 'clientToken', ],
                'contacts' => [ 'type' => 'list', 'member' => [ 'shape' => 'BaseContact', ], ],
                'dataCenters' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'resourceIds' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'serviceCode' => [ 'type' => 'string', 'locationName' => 'serviceCode', ],
                'tagsArray' => [ 'type' => 'list', 'member' => [ 'type' => 'object', ], ],
                'templateType' => [ 'type' => 'long', 'locationName' => 'templateType', ],
                'webHookContent' => [ 'type' => 'string', 'locationName' => 'webHookContent', ],
                'webHookProtocol' => [ 'type' => 'string', 'locationName' => 'webHookProtocol', ],
                'webHookSecret' => [ 'type' => 'string', 'locationName' => 'webHookSecret', ],
                'webHookUrl' => [ 'type' => 'string', 'locationName' => 'webHookUrl', ],
                'templateId' => [ 'type' => 'string', 'locationName' => 'templateId', ],
            ],
        ],
        'ApplyTemplateResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'ApplyTemplateResultShape', ],
            ],
        ],
        'ApplyTemplateResultShape' => [
            'type' => 'structure',
            'members' => [
                'ruleIds' => [ 'type' => 'list', 'member' => [ 'type' => 'integer', ], ],
                'success' => [ 'type' => 'boolean', 'locationName' => 'success', ],
            ],
        ],
        'DescribeTemplatesByTemplateIDRequestShape' => [
            'type' => 'structure',
            'members' => [
                'templateType' => [ 'type' => 'long', 'locationName' => 'templateType', ],
                'templateId' => [ 'type' => 'string', 'locationName' => 'templateId', ],
            ],
        ],
        'DescribeMetricsForCreateTemplateRequestShape' => [
            'type' => 'structure',
            'members' => [
                'serviceCode' => [ 'type' => 'string', 'locationName' => 'serviceCode', ],
            ],
        ],
        'DeleteTemplatesResultShape' => [
            'type' => 'structure',
            'members' => [
                'success' => [ 'type' => 'boolean', 'locationName' => 'success', ],
            ],
        ],
        'DeleteTemplatesResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'DeleteTemplatesResultShape', ],
            ],
        ],
        'DescribeTemplatesByTemplateIDResultShape' => [
            'type' => 'structure',
            'members' => [
                'template' =>  [ 'shape' => 'TemplateVo', ],
            ],
        ],
        'UpdateTemplateResultShape' => [
            'type' => 'structure',
            'members' => [
                'success' => [ 'type' => 'boolean', 'locationName' => 'success', ],
                'templateId' => [ 'type' => 'long', 'locationName' => 'templateId', ],
            ],
        ],
        'CreateTemplateRequestShape' => [
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
        'CreateTemplateResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'CreateTemplateResultShape', ],
            ],
        ],
        'UpdateTemplateRequestShape' => [
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
        'DescribeMetricDataAmRequestShape' => [
            'type' => 'structure',
            'members' => [
                'resourceId' => [ 'type' => 'string', 'locationName' => 'resourceId', ],
                'startTime' => [ 'type' => 'string', 'locationName' => 'startTime', ],
                'endTime' => [ 'type' => 'string', 'locationName' => 'endTime', ],
                'timeInterval' => [ 'type' => 'string', 'locationName' => 'timeInterval', ],
            ],
        ],
        'UpdateProbeTaskRequestShape' => [
            'type' => 'structure',
            'members' => [
                'address' => [ 'type' => 'string', 'locationName' => 'address', ],
                'frequency' => [ 'type' => 'long', 'locationName' => 'frequency', ],
                'httpBody' => [ 'type' => 'string', 'locationName' => 'httpBody', ],
                'httpCookie' => [ 'type' => 'list', 'member' => [ 'shape' => 'KeyValue', ], ],
                'httpHeader' => [ 'type' => 'list', 'member' => [ 'shape' => 'KeyValue', ], ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'port' => [ 'type' => 'long', 'locationName' => 'port', ],
                'probes' => [ 'type' => 'list', 'member' => [ 'shape' => 'Probe', ], ],
                'targetId' => [ 'type' => 'string', 'locationName' => 'targetId', ],
                'targetRegion' => [ 'type' => 'string', 'locationName' => 'targetRegion', ],
                'timeout' => [ 'type' => 'long', 'locationName' => 'timeout', ],
                'probeTaskID' => [ 'type' => 'string', 'locationName' => 'probeTaskID', ],
            ],
        ],
        'DescribeProbeHistoryResultShape' => [
            'type' => 'structure',
            'members' => [
                'events' => [ 'type' => 'list', 'member' => [ 'shape' => 'Event', ], ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'uuid' => [ 'type' => 'string', 'locationName' => 'uuid', ],
            ],
        ],
        'DeleteProbeTaskResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'DeleteProbeTaskResultShape', ],
            ],
        ],
        'ProbeTaskEnableRequestShape' => [
            'type' => 'structure',
            'members' => [
                'enabled' => [ 'type' => 'boolean', 'locationName' => 'enabled', ],
                'taskId' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'DescribeProbeHistoryRequestShape' => [
            'type' => 'structure',
            'members' => [
                'startTime' => [ 'type' => 'string', 'locationName' => 'startTime', ],
                'endTime' => [ 'type' => 'string', 'locationName' => 'endTime', ],
                'probeTaskID' => [ 'type' => 'string', 'locationName' => 'probeTaskID', ],
                'probeID' => [ 'type' => 'string', 'locationName' => 'probeID', ],
            ],
        ],
        'DescribeProbeTasksRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'long', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'long', 'locationName' => 'pageSize', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'type' => [ 'type' => 'long', 'locationName' => 'type', ],
                'probeTaskID' => [ 'type' => 'string', 'locationName' => 'probeTaskID', ],
            ],
        ],
        'DiscribeProbesRequestShape' => [
            'type' => 'structure',
            'members' => [
                'filters' => [ 'type' => 'list', 'member' => [ 'shape' => 'Filter', ], ],
                'probeTaskID' => [ 'type' => 'string', 'locationName' => 'probeTaskID', ],
            ],
        ],
        'DescribeMetricDataAmResultShape' => [
            'type' => 'structure',
            'members' => [
                'metricDatas' => [ 'type' => 'list', 'member' => [ 'shape' => 'MetricData', ], ],
            ],
        ],
        'DiscribeProbesResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'DiscribeProbesResultShape', ],
            ],
        ],
        'CreateProbeTaskResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'CreateProbeTaskResultShape', ],
            ],
        ],
        'DeleteProbeTaskRequestShape' => [
            'type' => 'structure',
            'members' => [
                'probeTaskIDs' => [ 'type' => 'string', 'locationName' => 'probeTaskIDs', ],
            ],
        ],
        'CreateProbeTaskResultShape' => [
            'type' => 'structure',
            'members' => [
                'suc' => [ 'type' => 'boolean', 'locationName' => 'suc', ],
                'taskId' => [ 'type' => 'string', 'locationName' => 'taskId', ],
            ],
        ],
        'ProbeTaskEnableResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'ProbeTaskEnableResultShape', ],
            ],
        ],
        'DescribeProbeTaskResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'DescribeProbeTaskResultShape', ],
            ],
        ],
        'DescribeProbeHistoryResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'DescribeProbeHistoryResultShape', ],
            ],
        ],
        'DescribeProbeTasksResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'DescribeProbeTasksResultShape', ],
            ],
        ],
        'DescribeProbeTaskRequestShape' => [
            'type' => 'structure',
            'members' => [
                'probeTaskID' => [ 'type' => 'string', 'locationName' => 'probeTaskID', ],
            ],
        ],
        'UpdateProbeTaskResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'UpdateProbeTaskResultShape', ],
            ],
        ],
        'UpdateProbeTaskResultShape' => [
            'type' => 'structure',
            'members' => [
                'suc' => [ 'type' => 'boolean', 'locationName' => 'suc', ],
            ],
        ],
        'DescribeProbeTasksResultShape' => [
            'type' => 'structure',
            'members' => [
                'numberPages' => [ 'type' => 'long', 'locationName' => 'numberPages', ],
                'numberRecords' => [ 'type' => 'long', 'locationName' => 'numberRecords', ],
                'pageNumber' => [ 'type' => 'long', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'long', 'locationName' => 'pageSize', ],
                'taskInfo' => [ 'type' => 'list', 'member' => [ 'shape' => 'TaskInfo', ], ],
                'totalCount' => [ 'type' => 'long', 'locationName' => 'totalCount', ],
            ],
        ],
        'ProbeTaskEnableResultShape' => [
            'type' => 'structure',
            'members' => [
                'suc' => [ 'type' => 'boolean', 'locationName' => 'suc', ],
            ],
        ],
        'DiscribeProbesResultShape' => [
            'type' => 'structure',
            'members' => [
                'probeList' => [ 'type' => 'list', 'member' => [ 'shape' => 'ProbeInfo', ], ],
            ],
        ],
        'DeleteProbeTaskResultShape' => [
            'type' => 'structure',
            'members' => [
                'suc' => [ 'type' => 'boolean', 'locationName' => 'suc', ],
            ],
        ],
        'DescribeMetricDataAmResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'DescribeMetricDataAmResultShape', ],
            ],
        ],
        'DescribeProbeTaskResultShape' => [
            'type' => 'structure',
            'members' => [
                'probes' => [ 'type' => 'list', 'member' => [ 'shape' => 'Probe', ], ],
                'address' => [ 'type' => 'string', 'locationName' => 'address', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'deleted' => [ 'type' => 'boolean', 'locationName' => 'deleted', ],
                'enable' => [ 'type' => 'boolean', 'locationName' => 'enable', ],
                'frequency' => [ 'type' => 'long', 'locationName' => 'frequency', ],
                'httpBody' => [ 'type' => 'string', 'locationName' => 'httpBody', ],
                'httpCookie' => [ 'type' => 'list', 'member' => [ 'shape' => 'KeyValue', ], ],
                'httpHeader' => [ 'type' => 'list', 'member' => [ 'shape' => 'KeyValue', ], ],
                'httpType' => [ 'type' => 'long', 'locationName' => 'httpType', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'pin' => [ 'type' => 'string', 'locationName' => 'pin', ],
                'port' => [ 'type' => 'long', 'locationName' => 'port', ],
                'probeType' => [ 'type' => 'long', 'locationName' => 'probeType', ],
                'targetId' => [ 'type' => 'string', 'locationName' => 'targetId', ],
                'targetRegion' => [ 'type' => 'string', 'locationName' => 'targetRegion', ],
                'taskId' => [ 'type' => 'string', 'locationName' => 'taskId', ],
                'taskType' => [ 'type' => 'long', 'locationName' => 'taskType', ],
                'timeout' => [ 'type' => 'long', 'locationName' => 'timeout', ],
                'updateTime' => [ 'type' => 'string', 'locationName' => 'updateTime', ],
            ],
        ],
        'CreateProbeTaskRequestShape' => [
            'type' => 'structure',
            'members' => [
                'clientToken' => [ 'type' => 'string', 'locationName' => 'clientToken', ],
                'createProbeTaskSpec' =>  [ 'shape' => 'CreateProbeTaskParam', ],
            ],
        ],
        'DescribeCmMetricDataByTagSpecResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'DescribeCmMetricDataByTagSpecResultShape', ],
            ],
        ],
        'DeleteNamespaceResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'DeleteNamespaceResultShape', ],
            ],
        ],
        'DescribeAllRegionAlarmsCmResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'DescribeAllRegionAlarmsCmResultShape', ],
            ],
        ],
        'DeleteNamespaceRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'namespaceUID' => [ 'type' => 'string', 'locationName' => 'namespaceUID', ],
            ],
        ],
        'DeleteObjRequestShape' => [
            'type' => 'structure',
            'members' => [
                'ids' => [ 'type' => 'string', 'locationName' => 'ids', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'namespaceUID' => [ 'type' => 'string', 'locationName' => 'namespaceUID', ],
            ],
        ],
        'DescribeIsUserNewResultShape' => [
            'type' => 'structure',
            'members' => [
                'result' => [ 'type' => 'boolean', 'locationName' => 'result', ],
            ],
        ],
        'DescribeObjsByNsUIDRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'long', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'long', 'locationName' => 'pageSize', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'namespaceUID' => [ 'type' => 'string', 'locationName' => 'namespaceUID', ],
            ],
        ],
        'DescribeAlarmHistoryCmRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'long', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'long', 'locationName' => 'pageSize', ],
                'id' => [ 'type' => 'long', 'locationName' => 'id', ],
                'obi' => [ 'type' => 'string', 'locationName' => 'obi', ],
                'namespace' => [ 'type' => 'string', 'locationName' => 'namespace', ],
                'serviceCode' => [ 'type' => 'string', 'locationName' => 'serviceCode', ],
                'resourceId' => [ 'type' => 'string', 'locationName' => 'resourceId', ],
                'startTime' => [ 'type' => 'string', 'locationName' => 'startTime', ],
                'endTime' => [ 'type' => 'string', 'locationName' => 'endTime', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'UpdateAlarmCmResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'UpdateAlarmCmResultShape', ],
            ],
        ],
        'DescribeIsUserNewResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'DescribeIsUserNewResultShape', ],
            ],
        ],
        'DescribeMetricsCmResultShape' => [
            'type' => 'structure',
            'members' => [
                'metricList' => [ 'type' => 'list', 'member' => [ 'shape' => 'MetricInfo', ], ],
            ],
        ],
        'DescribeMetricDataCmResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'DescribeMetricDataCmResultShape', ],
            ],
        ],
        'DescribeAllRegionAlarmsCmRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'long', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'long', 'locationName' => 'pageSize', ],
                'namespace' => [ 'type' => 'string', 'locationName' => 'namespace', ],
                'obj' => [ 'type' => 'string', 'locationName' => 'obj', ],
                'serviceCode' => [ 'type' => 'string', 'locationName' => 'serviceCode', ],
                'resourceId' => [ 'type' => 'string', 'locationName' => 'resourceId', ],
                'status' => [ 'type' => 'long', 'locationName' => 'status', ],
                'isAlarming' => [ 'type' => 'long', 'locationName' => 'isAlarming', ],
                'enabled' => [ 'type' => 'long', 'locationName' => 'enabled', ],
                'region' => [ 'type' => 'string', 'locationName' => 'region', ],
            ],
        ],
        'CreateAlarmCmResultShape' => [
            'type' => 'structure',
            'members' => [
                'alarmIdList' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'DescribeCmMetricDataByTagSpecResultShape' => [
            'type' => 'structure',
            'members' => [
                'metricDatas' => [ 'type' => 'list', 'member' => [ 'shape' => 'MetricData', ], ],
            ],
        ],
        'DescribeObjResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'DescribeObjResultShape', ],
            ],
        ],
        'DescribeAlarmsCmResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'DescribeAlarmsCmResultShape', ],
            ],
        ],
        'DescribeAlarmHistoryAllRegionCmResultShape' => [
            'type' => 'structure',
            'members' => [
                'alarmHistoryList' => [ 'type' => 'list', 'member' => [ 'shape' => 'CmAlarmHistory', ], ],
                'numberPages' => [ 'type' => 'long', 'locationName' => 'numberPages', ],
                'numberRecords' => [ 'type' => 'long', 'locationName' => 'numberRecords', ],
                'pageNumber' => [ 'type' => 'long', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'long', 'locationName' => 'pageSize', ],
            ],
        ],
        'DescribeMetricDataCmResultShape' => [
            'type' => 'structure',
            'members' => [
                'metricDatas' => [ 'type' => 'list', 'member' => [ 'shape' => 'MetricDataItemCm', ], ],
            ],
        ],
        'DescribeObjsByNsUIDResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'DescribeObjsByNsUIDResultShape', ],
            ],
        ],
        'DescribeNamespacesRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DeleteObjResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DescribeMetricsCmRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'namespaceUID' => [ 'type' => 'string', 'locationName' => 'namespaceUID', ],
                'objUID' => [ 'type' => 'string', 'locationName' => 'objUID', ],
            ],
        ],
        'DescribeAlarmHistoryCmResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'DescribeAlarmHistoryCmResultShape', ],
            ],
        ],
        'CreateAlarmCmResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'CreateAlarmCmResultShape', ],
            ],
        ],
        'DeleteNamespaceResultShape' => [
            'type' => 'structure',
            'members' => [
                'result' => [ 'type' => 'boolean', 'locationName' => 'result', ],
            ],
        ],
        'DescribeAlarmsCmRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'long', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'long', 'locationName' => 'pageSize', ],
                'namespace' => [ 'type' => 'string', 'locationName' => 'namespace', ],
                'obj' => [ 'type' => 'string', 'locationName' => 'obj', ],
                'serviceCode' => [ 'type' => 'string', 'locationName' => 'serviceCode', ],
                'resourceId' => [ 'type' => 'string', 'locationName' => 'resourceId', ],
                'status' => [ 'type' => 'long', 'locationName' => 'status', ],
                'isAlarming' => [ 'type' => 'long', 'locationName' => 'isAlarming', ],
                'enabled' => [ 'type' => 'long', 'locationName' => 'enabled', ],
                'region' => [ 'type' => 'string', 'locationName' => 'region', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DescribeMetricDataCmRequestShape' => [
            'type' => 'structure',
            'members' => [
                'aggrType' => [ 'type' => 'string', 'locationName' => 'aggrType', ],
                'endTime' => [ 'type' => 'string', 'locationName' => 'endTime', ],
                'metricUID' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'startTime' => [ 'type' => 'string', 'locationName' => 'startTime', ],
                'timeInterval' => [ 'type' => 'string', 'locationName' => 'timeInterval', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'namespaceUID' => [ 'type' => 'string', 'locationName' => 'namespaceUID', ],
                'objUID' => [ 'type' => 'string', 'locationName' => 'objUID', ],
            ],
        ],
        'DeleteObjResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'DeleteObjResultShape', ],
            ],
        ],
        'DeleteAlarmsCmResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DescribeAlarmHistoryAllRegionCmRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'long', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'long', 'locationName' => 'pageSize', ],
                'id' => [ 'type' => 'long', 'locationName' => 'id', ],
                'obi' => [ 'type' => 'string', 'locationName' => 'obi', ],
                'namespace' => [ 'type' => 'string', 'locationName' => 'namespace', ],
                'serviceCode' => [ 'type' => 'string', 'locationName' => 'serviceCode', ],
                'resourceId' => [ 'type' => 'string', 'locationName' => 'resourceId', ],
                'startTime' => [ 'type' => 'string', 'locationName' => 'startTime', ],
                'endTime' => [ 'type' => 'string', 'locationName' => 'endTime', ],
            ],
        ],
        'DescribeCmMetricDataByTagSpecRequestShape' => [
            'type' => 'structure',
            'members' => [
                'aggrType' => [ 'type' => 'string', 'locationName' => 'aggrType', ],
                'downSampleType' => [ 'type' => 'string', 'locationName' => 'downSampleType', ],
                'startTime' => [ 'type' => 'string', 'locationName' => 'startTime', ],
                'endTime' => [ 'type' => 'string', 'locationName' => 'endTime', ],
                'timeInterval' => [ 'type' => 'string', 'locationName' => 'timeInterval', ],
                'tags' => [ 'type' => 'list', 'member' => [ 'shape' => 'TagFilter', ], ],
                'groupBy' => [ 'type' => 'boolean', 'locationName' => 'groupBy', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'namespace' => [ 'type' => 'string', 'locationName' => 'namespace', ],
                'metric' => [ 'type' => 'string', 'locationName' => 'metric', ],
            ],
        ],
        'DeleteAlarmsCmResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'DeleteAlarmsCmResultShape', ],
            ],
        ],
        'DescribeNamespacesResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'DescribeNamespacesResultShape', ],
            ],
        ],
        'DescribeIsUserNewRequestShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DescribeNamespacesResultShape' => [
            'type' => 'structure',
            'members' => [
                'namespaceList' => [ 'type' => 'list', 'member' => [ 'shape' => 'NsInfo', ], ],
            ],
        ],
        'DescribeAllRegionAlarmsCmResultShape' => [
            'type' => 'structure',
            'members' => [
                'alarmList' => [ 'type' => 'list', 'member' => [ 'shape' => 'CmAlarm', ], ],
                'numberPages' => [ 'type' => 'long', 'locationName' => 'numberPages', ],
                'numberRecords' => [ 'type' => 'long', 'locationName' => 'numberRecords', ],
                'pageNumber' => [ 'type' => 'long', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'long', 'locationName' => 'pageSize', ],
            ],
        ],
        'DescribeAlarmHistoryCmResultShape' => [
            'type' => 'structure',
            'members' => [
                'alarmHistoryList' => [ 'type' => 'list', 'member' => [ 'shape' => 'CmAlarmHistory', ], ],
                'numberPages' => [ 'type' => 'long', 'locationName' => 'numberPages', ],
                'numberRecords' => [ 'type' => 'long', 'locationName' => 'numberRecords', ],
                'pageNumber' => [ 'type' => 'long', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'long', 'locationName' => 'pageSize', ],
            ],
        ],
        'CreateAlarmCmRequestShape' => [
            'type' => 'structure',
            'members' => [
                'clientToken' => [ 'type' => 'string', 'locationName' => 'clientToken', ],
                'createCmAlarmSpec' =>  [ 'shape' => 'CreateCmAlarmParam', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DescribeObjRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'namespaceUID' => [ 'type' => 'string', 'locationName' => 'namespaceUID', ],
                'objUID' => [ 'type' => 'string', 'locationName' => 'objUID', ],
            ],
        ],
        'UpdateAlarmCmRequestShape' => [
            'type' => 'structure',
            'members' => [
                'calculation' => [ 'type' => 'string', 'locationName' => 'calculation', ],
                'contactGroups' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'contactPersons' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'downSample' => [ 'type' => 'string', 'locationName' => 'downSample', ],
                'metric' => [ 'type' => 'string', 'locationName' => 'metric', ],
                'noticePeriod' => [ 'type' => 'long', 'locationName' => 'noticePeriod', ],
                'operation' => [ 'type' => 'string', 'locationName' => 'operation', ],
                'period' => [ 'type' => 'long', 'locationName' => 'period', ],
                'serviceCode' => [ 'type' => 'string', 'locationName' => 'serviceCode', ],
                'threshold' => [ 'type' => 'double', 'locationName' => 'threshold', ],
                'times' => [ 'type' => 'long', 'locationName' => 'times', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'alarmId' => [ 'type' => 'string', 'locationName' => 'alarmId', ],
            ],
        ],
        'DescribeMetricsCmResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'DescribeMetricsCmResultShape', ],
            ],
        ],
        'DescribeAlarmsCmResultShape' => [
            'type' => 'structure',
            'members' => [
                'alarmList' => [ 'type' => 'list', 'member' => [ 'shape' => 'CmAlarm', ], ],
                'numberPages' => [ 'type' => 'long', 'locationName' => 'numberPages', ],
                'numberRecords' => [ 'type' => 'long', 'locationName' => 'numberRecords', ],
                'pageNumber' => [ 'type' => 'long', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'long', 'locationName' => 'pageSize', ],
            ],
        ],
        'DescribeObjsByNsUIDResultShape' => [
            'type' => 'structure',
            'members' => [
                'numberPages' => [ 'type' => 'long', 'locationName' => 'numberPages', ],
                'numberRecords' => [ 'type' => 'long', 'locationName' => 'numberRecords', ],
                'objList' => [ 'type' => 'list', 'member' => [ 'shape' => 'ObjInfo', ], ],
                'pageNumber' => [ 'type' => 'long', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'long', 'locationName' => 'pageSize', ],
            ],
        ],
        'DescribeObjResultShape' => [
            'type' => 'structure',
            'members' => [
                'namespaceName' => [ 'type' => 'string', 'locationName' => 'namespaceName', ],
                'objName' => [ 'type' => 'string', 'locationName' => 'objName', ],
            ],
        ],
        'DeleteAlarmsCmRequestShape' => [
            'type' => 'structure',
            'members' => [
                'ids' => [ 'type' => 'string', 'locationName' => 'ids', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DescribeAlarmHistoryAllRegionCmResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'DescribeAlarmHistoryAllRegionCmResultShape', ],
            ],
        ],
        'UpdateAlarmCmResultShape' => [
            'type' => 'structure',
            'members' => [
                'alarmId' => [ 'type' => 'string', 'locationName' => 'alarmId', ],
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
                'downAggrType' => [ 'type' => 'string', 'locationName' => 'downAggrType', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'metric' => [ 'type' => 'string', 'locationName' => 'metric', ],
            ],
        ],
        'BatchDescribeMetricDataRequestShape' => [
            'type' => 'structure',
            'members' => [
                'serviceCode' => [ 'type' => 'string', 'locationName' => 'serviceCode', ],
                'resourceId' => [ 'type' => 'string', 'locationName' => 'resourceId', ],
                'aggrType' => [ 'type' => 'string', 'locationName' => 'aggrType', ],
                'startTime' => [ 'type' => 'string', 'locationName' => 'startTime', ],
                'endTime' => [ 'type' => 'string', 'locationName' => 'endTime', ],
                'timeInterval' => [ 'type' => 'string', 'locationName' => 'timeInterval', ],
                'tags' => [ 'type' => 'list', 'member' => [ 'shape' => 'TagFilter', ], ],
                'groupBy' => [ 'type' => 'boolean', 'locationName' => 'groupBy', ],
                'multiResources' => [ 'type' => 'boolean', 'locationName' => 'multiResources', ],
                'filters' => [ 'type' => 'list', 'member' => [ 'shape' => 'Filter', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DescribeSqlserverBlockProcessResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'DescribeSqlserverBlockProcessResultShape', ],
            ],
        ],
        'DescribeMetricsForCreateAlarmResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'DescribeMetricsForCreateAlarmResultShape', ],
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
        'DescribeMetricsForCreateAlarmRequestShape' => [
            'type' => 'structure',
            'members' => [
                'serviceCode' => [ 'type' => 'string', 'locationName' => 'serviceCode', ],
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
        'BatchDescribeMetricDataResultShape' => [
            'type' => 'structure',
            'members' => [
                'metricDatas' => [ 'type' => 'list', 'member' => [ 'shape' => 'MetricData', ], ],
            ],
        ],
        'DescribeMetricsResultShape' => [
            'type' => 'structure',
            'members' => [
                'metrics' => [ 'type' => 'list', 'member' => [ 'shape' => 'MetricDetail', ], ],
            ],
        ],
        'DescribeMetricDataRequestShape' => [
            'type' => 'structure',
            'members' => [
                'serviceCode' => [ 'type' => 'string', 'locationName' => 'serviceCode', ],
                'resourceId' => [ 'type' => 'string', 'locationName' => 'resourceId', ],
                'aggrType' => [ 'type' => 'string', 'locationName' => 'aggrType', ],
                'startTime' => [ 'type' => 'string', 'locationName' => 'startTime', ],
                'endTime' => [ 'type' => 'string', 'locationName' => 'endTime', ],
                'timeInterval' => [ 'type' => 'string', 'locationName' => 'timeInterval', ],
                'tags' => [ 'type' => 'list', 'member' => [ 'shape' => 'TagFilter', ], ],
                'groupBy' => [ 'type' => 'boolean', 'locationName' => 'groupBy', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'metric' => [ 'type' => 'string', 'locationName' => 'metric', ],
            ],
        ],
        'LastDownsampleResultShape' => [
            'type' => 'structure',
            'members' => [
                'items' => [ 'type' => 'list', 'member' => [ 'shape' => 'LastDownsampleRespItem', ], ],
            ],
        ],
        'BatchDescribeMetricDataResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'BatchDescribeMetricDataResultShape', ],
            ],
        ],
        'DescribeSqlserverBlockProcessResultShape' => [
            'type' => 'structure',
            'members' => [
                'list' => [ 'type' => 'list', 'member' => [ 'shape' => 'LastDownsampleRespItem', ], ],
            ],
        ],
        'DescribeMetricsForCreateAlarmResultShape' => [
            'type' => 'structure',
            'members' => [
                'serviceCodeList' => [ 'type' => 'list', 'member' => [ 'shape' => 'ServiceCodeMetrics', ], ],
            ],
        ],
        'DescribeSqlserverBlockProcessRequestShape' => [
            'type' => 'structure',
            'members' => [
                'serviceCode' => [ 'type' => 'string', 'locationName' => 'serviceCode', ],
                'resourceId' => [ 'type' => 'string', 'locationName' => 'resourceId', ],
                'aggrType' => [ 'type' => 'string', 'locationName' => 'aggrType', ],
                'startTime' => [ 'type' => 'string', 'locationName' => 'startTime', ],
                'endTime' => [ 'type' => 'string', 'locationName' => 'endTime', ],
                'timeInterval' => [ 'type' => 'string', 'locationName' => 'timeInterval', ],
                'tags' => [ 'type' => 'list', 'member' => [ 'shape' => 'TagFilter', ], ],
                'groupBy' => [ 'type' => 'boolean', 'locationName' => 'groupBy', ],
                'time' => [ 'type' => 'string', 'locationName' => 'time', ],
                'mode' => [ 'type' => 'string', 'locationName' => 'mode', ],
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
        'DescribeAlarmingRulesResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'DescribeAlarmingRulesResultShape', ],
            ],
        ],
        'DescribeAlarmingRulesRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'long', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'long', 'locationName' => 'pageSize', ],
                'filters' => [ 'type' => 'list', 'member' => [ 'shape' => 'Filter', ], ],
                'datacenter' => [ 'type' => 'string', 'locationName' => 'datacenter', ],
            ],
        ],
        'DescribeAlarmingRulesResultShape' => [
            'type' => 'structure',
            'members' => [
                'alarmHistoryList' => [ 'type' => 'list', 'member' => [ 'shape' => 'AlarmHistoryWithDetail', ], ],
                'numberPages' => [ 'type' => 'long', 'locationName' => 'numberPages', ],
                'numberRecords' => [ 'type' => 'long', 'locationName' => 'numberRecords', ],
                'pageNumber' => [ 'type' => 'long', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'long', 'locationName' => 'pageSize', ],
            ],
        ],
        'DescribeRuleCountingResultShape' => [
            'type' => 'structure',
            'members' => [
                'alarmRuleCount' => [ 'type' => 'long', 'locationName' => 'alarmRuleCount', ],
                'disableRuleCount' => [ 'type' => 'long', 'locationName' => 'disableRuleCount', ],
                'normalRuleCount' => [ 'type' => 'long', 'locationName' => 'normalRuleCount', ],
                'serviceCodes' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'subUserPermission' => [ 'type' => 'boolean', 'locationName' => 'subUserPermission', ],
                'totalRuleCount' => [ 'type' => 'long', 'locationName' => 'totalRuleCount', ],
                'unknownRuleCount' => [ 'type' => 'long', 'locationName' => 'unknownRuleCount', ],
            ],
        ],
        'DescribeRuleCountingRequestShape' => [
            'type' => 'structure',
            'members' => [
                'filters' => [ 'type' => 'list', 'member' => [ 'shape' => 'Filter', ], ],
                'pin' => [ 'type' => 'string', 'locationName' => 'pin', ],
                'datacenter' => [ 'type' => 'string', 'locationName' => 'datacenter', ],
                'adminPin' => [ 'type' => 'string', 'locationName' => 'adminPin', ],
            ],
        ],
        'DescribeRuleCountingResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'DescribeRuleCountingResultShape', ],
            ],
        ],
        'DescribeTopNSlowSqlResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'DescribeTopNSlowSqlResultShape', ],
            ],
        ],
        'DescribeTopNSlowSqlResultShape' => [
            'type' => 'structure',
            'members' => [
                'topNsql' => [ 'type' => 'list', 'member' => [ 'shape' => 'SqlInfo', ], ],
            ],
        ],
        'DescribeTopNSlowSqlRequestShape' => [
            'type' => 'structure',
            'members' => [
                'endTime' => [ 'type' => 'string', 'locationName' => 'endTime', ],
                'resourceId' => [ 'type' => 'string', 'locationName' => 'resourceId', ],
                'serviceCode' => [ 'type' => 'string', 'locationName' => 'serviceCode', ],
                'startTime' => [ 'type' => 'string', 'locationName' => 'startTime', ],
                'timeInterval' => [ 'type' => 'string', 'locationName' => 'timeInterval', ],
                'topN' => [ 'type' => 'long', 'locationName' => 'topN', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
    ],
];
