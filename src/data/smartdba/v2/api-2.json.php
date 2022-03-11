<?php
// This file was auto-generated
return [
//    'version' => '',
    'metadata' =>
    [
//        'apiVersion' => '',
//        'endpointPrefix' => 'smartdba',
        'protocol' => 'json',
//        'serviceFullName' => 'smartdba',
//        'serviceId' => 'smartdba',
    ],
    'operations' => [
        'DescribeAlarmResource' => [
            'name' => 'DescribeAlarmResource',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v2/regions/{regionId}/describeAlarmResource',
            ],
            'input' => [ 'shape' => 'DescribeAlarmResourceRequestShape', ],
            'output' => [ 'shape' => 'DescribeAlarmResourceResponseShape', ],
        ],
        'DescribeAlarmHistory' => [
            'name' => 'DescribeAlarmHistory',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v2/regions/{regionId}/describeAlarmHistory',
            ],
            'input' => [ 'shape' => 'DescribeAlarmHistoryRequestShape', ],
            'output' => [ 'shape' => 'DescribeAlarmHistoryResponseShape', ],
        ],
        'DescribeAlarmStatistic' => [
            'name' => 'DescribeAlarmStatistic',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v2/regions/{regionId}/alarmStatistic',
            ],
            'input' => [ 'shape' => 'DescribeAlarmStatisticRequestShape', ],
            'output' => [ 'shape' => 'DescribeAlarmStatisticResponseShape', ],
        ],
        'DescribeslowLogStatistic' => [
            'name' => 'DescribeslowLogStatistic',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v2/regions/{regionId}/slowLogStatistic',
            ],
            'input' => [ 'shape' => 'DescribeslowLogStatisticRequestShape', ],
            'output' => [ 'shape' => 'DescribeslowLogStatisticResponseShape', ],
        ],
        'DescribeAlarmTrend' => [
            'name' => 'DescribeAlarmTrend',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v2/regions/{regionId}/alarmTrend',
            ],
            'input' => [ 'shape' => 'DescribeAlarmTrendRequestShape', ],
            'output' => [ 'shape' => 'DescribeAlarmTrendResponseShape', ],
        ],
        'GetTopResourceByMetric' => [
            'name' => 'GetTopResourceByMetric',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v2/regions/{regionId}/getTopResource',
            ],
            'input' => [ 'shape' => 'GetTopResourceByMetricRequestShape', ],
            'output' => [ 'shape' => 'GetTopResourceByMetricResponseShape', ],
        ],
        'DescribeDiagnoseTopResource' => [
            'name' => 'DescribeDiagnoseTopResource',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v2/regions/{regionId}/diagnoseTopResource',
            ],
            'input' => [ 'shape' => 'DescribeDiagnoseTopResourceRequestShape', ],
            'output' => [ 'shape' => 'DescribeDiagnoseTopResourceResponseShape', ],
        ],
        'DescribeDiagnoseTrend' => [
            'name' => 'DescribeDiagnoseTrend',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v2/regions/{regionId}/instance/{instanceGid}/diagnoseTrend',
            ],
            'input' => [ 'shape' => 'DescribeDiagnoseTrendRequestShape', ],
            'output' => [ 'shape' => 'DescribeDiagnoseTrendResponseShape', ],
        ],
        'CreateDiagnose' => [
            'name' => 'CreateDiagnose',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v2/regions/{regionId}/instance/{instanceGid}/diagnose',
            ],
            'input' => [ 'shape' => 'CreateDiagnoseRequestShape', ],
            'output' => [ 'shape' => 'CreateDiagnoseResponseShape', ],
        ],
        'DescribeDiagnoseList' => [
            'name' => 'DescribeDiagnoseList',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v2/regions/{regionId}/instance/{instanceGid}/diagnoses',
            ],
            'input' => [ 'shape' => 'DescribeDiagnoseListRequestShape', ],
            'output' => [ 'shape' => 'DescribeDiagnoseListResponseShape', ],
        ],
        'DescribeDiagnose' => [
            'name' => 'DescribeDiagnose',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v2/regions/{regionId}/instance/{instanceGid}/diagnoses/{diagnoseId}',
            ],
            'input' => [ 'shape' => 'DescribeDiagnoseRequestShape', ],
            'output' => [ 'shape' => 'DescribeDiagnoseResponseShape', ],
        ],
        'DescribeInspectList' => [
            'name' => 'DescribeInspectList',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v2/regions/{regionId}/inspects',
            ],
            'input' => [ 'shape' => 'DescribeInspectListRequestShape', ],
            'output' => [ 'shape' => 'DescribeInspectListResponseShape', ],
        ],
        'DescribeInspect' => [
            'name' => 'DescribeInspect',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v2/regions/{regionId}/instance/{instanceGid}/inspects/{inspectId}',
            ],
            'input' => [ 'shape' => 'DescribeInspectRequestShape', ],
            'output' => [ 'shape' => 'DescribeInspectResponseShape', ],
        ],
        'ToBeConnectClusters' => [
            'name' => 'ToBeConnectClusters',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v2/regions/{regionId}/waitcutin',
            ],
            'input' => [ 'shape' => 'ToBeConnectClustersRequestShape', ],
            'output' => [ 'shape' => 'ToBeConnectClustersResponseShape', ],
        ],
        'DescribeClusterList' => [
            'name' => 'DescribeClusterList',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v2/regions/{regionId}/hadcutin',
            ],
            'input' => [ 'shape' => 'DescribeClusterListRequestShape', ],
            'output' => [ 'shape' => 'DescribeClusterListResponseShape', ],
        ],
        'CreateCluster' => [
            'name' => 'CreateCluster',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v2/regions/{regionId}/newcutin',
            ],
            'input' => [ 'shape' => 'CreateClusterRequestShape', ],
            'output' => [ 'shape' => 'CreateClusterResponseShape', ],
        ],
        'CancleConnect' => [
            'name' => 'CancleConnect',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v2/regions/{regionId}/cancelinstance',
            ],
            'input' => [ 'shape' => 'CancleConnectRequestShape', ],
            'output' => [ 'shape' => 'CancleConnectResponseShape', ],
        ],
        'DescribeClusterDetail' => [
            'name' => 'DescribeClusterDetail',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v2/regions/{regionId}/instance/{instanceGid}/describeClusterDetail',
            ],
            'input' => [ 'shape' => 'DescribeClusterDetailRequestShape', ],
            'output' => [ 'shape' => 'DescribeClusterDetailResponseShape', ],
        ],
        'DescribeLockAnalyse' => [
            'name' => 'DescribeLockAnalyse',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v2/regions/{regionId}/instance/{instanceGid}/lockAnalyse',
            ],
            'input' => [ 'shape' => 'DescribeLockAnalyseRequestShape', ],
            'output' => [ 'shape' => 'DescribeLockAnalyseResponseShape', ],
        ],
        'CreateLockAnalyse' => [
            'name' => 'CreateLockAnalyse',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v2/regions/{regionId}/instance/{instanceGid}/lockAnalyse',
            ],
            'input' => [ 'shape' => 'CreateLockAnalyseRequestShape', ],
            'output' => [ 'shape' => 'CreateLockAnalyseResponseShape', ],
        ],
        'DescribeAnalyseList' => [
            'name' => 'DescribeAnalyseList',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v2/regions/{regionId}/instance/{instanceGid}/analyseList',
            ],
            'input' => [ 'shape' => 'DescribeAnalyseListRequestShape', ],
            'output' => [ 'shape' => 'DescribeAnalyseListResponseShape', ],
        ],
        'CreatePanel' => [
            'name' => 'CreatePanel',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v2/regions/{regionId}/panel',
            ],
            'input' => [ 'shape' => 'CreatePanelRequestShape', ],
            'output' => [ 'shape' => 'CreatePanelResponseShape', ],
        ],
        'DescribePanelList' => [
            'name' => 'DescribePanelList',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v2/regions/{regionId}/panels',
            ],
            'input' => [ 'shape' => 'DescribePanelListRequestShape', ],
            'output' => [ 'shape' => 'DescribePanelListResponseShape', ],
        ],
        'GetPanelRelateClusters' => [
            'name' => 'GetPanelRelateClusters',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v2/regions/{regionId}/panels/{panelGid}',
            ],
            'input' => [ 'shape' => 'GetPanelRelateClustersRequestShape', ],
            'output' => [ 'shape' => 'GetPanelRelateClustersResponseShape', ],
        ],
        'UpdatePanelClusters' => [
            'name' => 'UpdatePanelClusters',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v2/regions/{regionId}/panels/{panelGid}',
            ],
            'input' => [ 'shape' => 'UpdatePanelClustersRequestShape', ],
            'output' => [ 'shape' => 'UpdatePanelClustersResponseShape', ],
        ],
        'DeletePanel' => [
            'name' => 'DeletePanel',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v2/regions/{regionId}/panels/{panelGid}',
            ],
            'input' => [ 'shape' => 'DeletePanelRequestShape', ],
            'output' => [ 'shape' => 'DeletePanelResponseShape', ],
        ],
        'DescribePanelMetricValueByGid' => [
            'name' => 'DescribePanelMetricValueByGid',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v2/regions/{regionId}/panels/{panelGid}/metric/{metric}',
            ],
            'input' => [ 'shape' => 'DescribePanelMetricValueByGidRequestShape', ],
            'output' => [ 'shape' => 'DescribePanelMetricValueByGidResponseShape', ],
        ],
        'DescribeSupportMetrics' => [
            'name' => 'DescribeSupportMetrics',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v2/regions/{regionId}/supportMetrics',
            ],
            'input' => [ 'shape' => 'DescribeSupportMetricsRequestShape', ],
            'output' => [ 'shape' => 'DescribeSupportMetricsResponseShape', ],
        ],
        'GetBindMetrics' => [
            'name' => 'GetBindMetrics',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v2/regions/{regionId}/instance/{gid}/getBindMetrics',
            ],
            'input' => [ 'shape' => 'GetBindMetricsRequestShape', ],
            'output' => [ 'shape' => 'GetBindMetricsResponseShape', ],
        ],
        'BindMetrics' => [
            'name' => 'BindMetrics',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v2/regions/{regionId}/bindMetrics',
            ],
            'input' => [ 'shape' => 'BindMetricsRequestShape', ],
            'output' => [ 'shape' => 'BindMetricsResponseShape', ],
        ],
        'DescribeMetricValueByGid' => [
            'name' => 'DescribeMetricValueByGid',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v2/regions/{regionId}/instance/{instanceGid}/metrics',
            ],
            'input' => [ 'shape' => 'DescribeMetricValueByGidRequestShape', ],
            'output' => [ 'shape' => 'DescribeMetricValueByGidResponseShape', ],
        ],
        'DescribeSessions' => [
            'name' => 'DescribeSessions',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v2/regions/{regionId}/instance/{instanceGid}/describeSessions',
            ],
            'input' => [ 'shape' => 'DescribeSessionsRequestShape', ],
            'output' => [ 'shape' => 'DescribeSessionsResponseShape', ],
        ],
        'DescribeNowSessions' => [
            'name' => 'DescribeNowSessions',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v2/regions/{regionId}/instance/{instanceGid}/describeNowSessions',
            ],
            'input' => [ 'shape' => 'DescribeNowSessionsRequestShape', ],
            'output' => [ 'shape' => 'DescribeNowSessionsResponseShape', ],
        ],
        'DescribeTrxLocks' => [
            'name' => 'DescribeTrxLocks',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v2/regions/{regionId}/instance/{instanceGid}/describeTrxLocks',
            ],
            'input' => [ 'shape' => 'DescribeTrxLocksRequestShape', ],
            'output' => [ 'shape' => 'DescribeTrxLocksResponseShape', ],
        ],
        'DescribeUntrxLocks' => [
            'name' => 'DescribeUntrxLocks',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v2/regions/{regionId}/instance/{instanceGid}/describeUntrxLocks',
            ],
            'input' => [ 'shape' => 'DescribeUntrxLocksRequestShape', ],
            'output' => [ 'shape' => 'DescribeUntrxLocksResponseShape', ],
        ],
        'DescribeUnCommitTrxs' => [
            'name' => 'DescribeUnCommitTrxs',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v2/regions/{regionId}/instance/{instanceGid}/describeUnCommitTrxs',
            ],
            'input' => [ 'shape' => 'DescribeUnCommitTrxsRequestShape', ],
            'output' => [ 'shape' => 'DescribeUnCommitTrxsResponseShape', ],
        ],
        'KillSession' => [
            'name' => 'KillSession',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v2/regions/{regionId}/instance/{instanceGid}/killSession',
            ],
            'input' => [ 'shape' => 'KillSessionRequestShape', ],
            'output' => [ 'shape' => 'KillSessionResponseShape', ],
        ],
        'DescribeSlowLog' => [
            'name' => 'DescribeSlowLog',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v2/regions/{regionId}/instance/{instanceGid}/slowLog',
            ],
            'input' => [ 'shape' => 'DescribeSlowLogRequestShape', ],
            'output' => [ 'shape' => 'DescribeSlowLogResponseShape', ],
        ],
        'DescribeSlowDigestLog' => [
            'name' => 'DescribeSlowDigestLog',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v2/regions/{regionId}/instance/{instanceGid}/slowDigestLog',
            ],
            'input' => [ 'shape' => 'DescribeSlowDigestLogRequestShape', ],
            'output' => [ 'shape' => 'DescribeSlowDigestLogResponseShape', ],
        ],
        'DescribeSlowLogDimensionsStatistic' => [
            'name' => 'DescribeSlowLogDimensionsStatistic',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v2/regions/{regionId}/instance/{instanceGid}/SlowLogDimensionsStatistic',
            ],
            'input' => [ 'shape' => 'DescribeSlowLogDimensionsStatisticRequestShape', ],
            'output' => [ 'shape' => 'DescribeSlowLogDimensionsStatisticResponseShape', ],
        ],
        'ExplainSql' => [
            'name' => 'ExplainSql',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v2/regions/{regionId}/instance/{instanceGid}/explainSql',
            ],
            'input' => [ 'shape' => 'ExplainSqlRequestShape', ],
            'output' => [ 'shape' => 'ExplainSqlResponseShape', ],
        ],
        'TurningSql' => [
            'name' => 'TurningSql',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v2/regions/{regionId}/instance/{instanceGid}/tuningSql',
            ],
            'input' => [ 'shape' => 'TurningSqlRequestShape', ],
            'output' => [ 'shape' => 'TurningSqlResponseShape', ],
        ],
        'DescribeSlowSqlMetric' => [
            'name' => 'DescribeSlowSqlMetric',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v2/regions/{regionId}/instance/{instanceGid}/sqlMetrics',
            ],
            'input' => [ 'shape' => 'DescribeSlowSqlMetricRequestShape', ],
            'output' => [ 'shape' => 'DescribeSlowSqlMetricResponseShape', ],
        ],
        'DescribeIndexs' => [
            'name' => 'DescribeIndexs',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v2/regions/{regionId}/instance/{instanceGid}/describeIndexs',
            ],
            'input' => [ 'shape' => 'DescribeIndexsRequestShape', ],
            'output' => [ 'shape' => 'DescribeIndexsResponseShape', ],
        ],
        'DescribeStorages' => [
            'name' => 'DescribeStorages',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v2/regions/{regionId}/instance/{instanceGid}/describeStorages',
            ],
            'input' => [ 'shape' => 'DescribeStoragesRequestShape', ],
            'output' => [ 'shape' => 'DescribeStoragesResponseShape', ],
        ],
        'DescribeStorageTrend' => [
            'name' => 'DescribeStorageTrend',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v2/regions/{regionId}/instance/{instanceGid}/describeStorageTrend',
            ],
            'input' => [ 'shape' => 'DescribeStorageTrendRequestShape', ],
            'output' => [ 'shape' => 'DescribeStorageTrendResponseShape', ],
        ],
        'DescribeTableSpaceTop' => [
            'name' => 'DescribeTableSpaceTop',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v2/regions/{regionId}/instance/{instanceGid}/tableSpaceTop',
            ],
            'input' => [ 'shape' => 'DescribeTableSpaceTopRequestShape', ],
            'output' => [ 'shape' => 'DescribeTableSpaceTopResponseShape', ],
        ],
        'DescribeSchemaSpaceTop' => [
            'name' => 'DescribeSchemaSpaceTop',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v2/regions/{regionId}/instance/{instanceGid}/schemaSpaceTop',
            ],
            'input' => [ 'shape' => 'DescribeSchemaSpaceTopRequestShape', ],
            'output' => [ 'shape' => 'DescribeSchemaSpaceTopResponseShape', ],
        ],
        'DescribeTableSpaceDetail' => [
            'name' => 'DescribeTableSpaceDetail',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v2/regions/{regionId}/instance/{instanceGid}/tableSpaceDetail',
            ],
            'input' => [ 'shape' => 'DescribeTableSpaceDetailRequestShape', ],
            'output' => [ 'shape' => 'DescribeTableSpaceDetailResponseShape', ],
        ],
        'DescribeAllDbInfo' => [
            'name' => 'DescribeAllDbInfo',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v2/regions/{regionId}/instance/{instanceGid}/allDbInfo',
            ],
            'input' => [ 'shape' => 'DescribeAllDbInfoRequestShape', ],
            'output' => [ 'shape' => 'DescribeAllDbInfoResponseShape', ],
        ],
        'DescribeAllTableInfoForDb' => [
            'name' => 'DescribeAllTableInfoForDb',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v2/regions/{regionId}/instance/{instanceGid}/allTableInfoForDb',
            ],
            'input' => [ 'shape' => 'DescribeAllTableInfoForDbRequestShape', ],
            'output' => [ 'shape' => 'DescribeAllTableInfoForDbResponseShape', ],
        ],
        'DescribeSystemInfo' => [
            'name' => 'DescribeSystemInfo',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v2/regions/{regionId}/instance/{instanceGid}/systemInfo',
            ],
            'input' => [ 'shape' => 'DescribeSystemInfoRequestShape', ],
            'output' => [ 'shape' => 'DescribeSystemInfoResponseShape', ],
        ],
        'CheckTableTypes' => [
            'name' => 'CheckTableTypes',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v2/regions/{regionId}/instance/{instanceGid}/checkTableTypes',
            ],
            'input' => [ 'shape' => 'CheckTableTypesRequestShape', ],
            'output' => [ 'shape' => 'CheckTableTypesResponseShape', ],
        ],
        'CheckTableByType' => [
            'name' => 'CheckTableByType',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v2/regions/{regionId}/instance/{instanceGid}/checkTables',
            ],
            'input' => [ 'shape' => 'CheckTableByTypeRequestShape', ],
            'output' => [ 'shape' => 'CheckTableByTypeResponseShape', ],
        ],
    ],
    'shapes' => [
        'AlarmDetail' => [
            'type' => 'structure',
            'members' => [
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'instanceName' => [ 'type' => 'string', 'locationName' => 'instanceName', ],
                'metric' => [ 'type' => 'string', 'locationName' => 'metric', ],
                'triggerCondition' => [ 'type' => 'string', 'locationName' => 'triggerCondition', ],
                'alarmLevel' => [ 'type' => 'string', 'locationName' => 'alarmLevel', ],
                'alarmLevelTag' => [ 'type' => 'string', 'locationName' => 'alarmLevelTag', ],
                'firstAlarmTime' => [ 'type' => 'string', 'locationName' => 'firstAlarmTime', ],
                'lastAlarmTime' => [ 'type' => 'string', 'locationName' => 'lastAlarmTime', ],
                'durationTime' => [ 'type' => 'integer', 'locationName' => 'durationTime', ],
                'frequency' => [ 'type' => 'integer', 'locationName' => 'frequency', ],
            ],
        ],
        'AlarmHistoryDetail' => [
            'type' => 'structure',
            'members' => [
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'instanceName' => [ 'type' => 'string', 'locationName' => 'instanceName', ],
                'metric' => [ 'type' => 'string', 'locationName' => 'metric', ],
                'triggerCondition' => [ 'type' => 'string', 'locationName' => 'triggerCondition', ],
                'alarmLevel' => [ 'type' => 'string', 'locationName' => 'alarmLevel', ],
                'alarmLevelTag' => [ 'type' => 'string', 'locationName' => 'alarmLevelTag', ],
                'alarmTime' => [ 'type' => 'string', 'locationName' => 'alarmTime', ],
                'durationTime' => [ 'type' => 'string', 'locationName' => 'durationTime', ],
            ],
        ],
        'BufferPoolInfo' => [
            'type' => 'structure',
            'members' => [
                'dirtyPagePct' => [ 'type' => 'float', 'locationName' => 'dirtyPagePct', ],
                'freePagePct' => [ 'type' => 'float', 'locationName' => 'freePagePct', ],
                'totalPages' => [ 'type' => 'integer', 'locationName' => 'totalPages', ],
            ],
        ],
        'ClusterDetail' => [
            'type' => 'structure',
            'members' => [
                'instanceGid' => [ 'type' => 'string', 'locationName' => 'instanceGid', ],
                'connectType' => [ 'type' => 'string', 'locationName' => 'connectType', ],
                'databaseType' => [ 'type' => 'string', 'locationName' => 'databaseType', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'instanceName' => [ 'type' => 'string', 'locationName' => 'instanceName', ],
                'region' => [ 'type' => 'string', 'locationName' => 'region', ],
                'instanceType' => [ 'type' => 'string', 'locationName' => 'instanceType', ],
                'engine' => [ 'type' => 'string', 'locationName' => 'engine', ],
                'engineVersion' => [ 'type' => 'string', 'locationName' => 'engineVersion', ],
                'instanceClass' => [ 'type' => 'string', 'locationName' => 'instanceClass', ],
                'instanceStatus' => [ 'type' => 'string', 'locationName' => 'instanceStatus', ],
            ],
        ],
        'ConnectionInfo' => [
            'type' => 'structure',
            'members' => [
                'max' => [ 'type' => 'integer', 'locationName' => 'max', ],
                'running' => [ 'type' => 'integer', 'locationName' => 'running', ],
                'connected' => [ 'type' => 'integer', 'locationName' => 'connected', ],
            ],
        ],
        'DBStatistic' => [
            'type' => 'structure',
            'members' => [
                'db' => [ 'type' => 'string', 'locationName' => 'db', ],
                'activeCount' => [ 'type' => 'integer', 'locationName' => 'activeCount', ],
                'threadIdList' => [ 'type' => 'string', 'locationName' => 'threadIdList', ],
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
            ],
        ],
        'DataPoint' => [
            'type' => 'structure',
            'members' => [
                'timestamp' => [ 'type' => 'long', 'locationName' => 'timestamp', ],
                'value' => [ 'type' => 'object', 'locationName' => 'value', ],
            ],
        ],
        'DeadLockDetail' => [
            'type' => 'structure',
            'members' => [
                'trxName' => [ 'type' => 'string', 'locationName' => 'trxName', ],
                'sessionId' => [ 'type' => 'string', 'locationName' => 'sessionId', ],
                'queryType' => [ 'type' => 'string', 'locationName' => 'queryType', ],
                'trxId' => [ 'type' => 'string', 'locationName' => 'trxId', ],
                'host' => [ 'type' => 'string', 'locationName' => 'host', ],
                'tableName' => [ 'type' => 'string', 'locationName' => 'tableName', ],
                'waitLock' => [ 'type' => 'string', 'locationName' => 'waitLock', ],
                'waitLockIndex' => [ 'type' => 'string', 'locationName' => 'waitLockIndex', ],
                'waitLockType' => [ 'type' => 'string', 'locationName' => 'waitLockType', ],
                'holdLock' => [ 'type' => 'string', 'locationName' => 'holdLock', ],
                'holdLockIndex' => [ 'type' => 'string', 'locationName' => 'holdLockIndex', ],
                'holdLockType' => [ 'type' => 'string', 'locationName' => 'holdLockType', ],
                'trxSql' => [ 'type' => 'string', 'locationName' => 'trxSql', ],
            ],
        ],
        'DeadLockOverview' => [
            'type' => 'structure',
            'members' => [
                'analyseId' => [ 'type' => 'string', 'locationName' => 'analyseId', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'occurTime' => [ 'type' => 'string', 'locationName' => 'occurTime', ],
                'occured' => [ 'type' => 'string', 'locationName' => 'occured', ],
            ],
        ],
        'DiagnoseDetail' => [
            'type' => 'structure',
            'members' => [
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'score' =>  [ 'shape' => 'DiagnoseScore', ],
                'general' =>  [ 'shape' => 'DiagnoseGeneral', ],
                'metrics' =>  [ 'shape' => 'DiagnoseMetric', ],
            ],
        ],
        'DiagnoseMetricItem' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'result' => [ 'type' => 'string', 'locationName' => 'result', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'rows' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'DiagnoseGeneralItem' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'result' => [ 'type' => 'string', 'locationName' => 'result', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
            ],
        ],
        'DiagnoseMetric' => [
            'type' => 'structure',
            'members' => [
                'data' => [ 'type' => 'list', 'member' => [ 'shape' => 'DiagnoseMetricItem', ], ],
            ],
        ],
        'DiagnoseScore' => [
            'type' => 'structure',
            'members' => [
                'time' => [ 'type' => 'string', 'locationName' => 'time', ],
                'score' => [ 'type' => 'integer', 'locationName' => 'score', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
            ],
        ],
        'DiagnoseGeneral' => [
            'type' => 'structure',
            'members' => [
                'data' => [ 'type' => 'list', 'member' => [ 'shape' => 'DiagnoseGeneralItem', ], ],
            ],
        ],
        'ErrorInfo' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'integer', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
            ],
        ],
        'ExecutionPlan' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
                'selectType' => [ 'type' => 'string', 'locationName' => 'selectType', ],
                'table' => [ 'type' => 'string', 'locationName' => 'table', ],
                'partitions' => [ 'type' => 'string', 'locationName' => 'partitions', ],
                'accessType' => [ 'type' => 'string', 'locationName' => 'accessType', ],
                'possibleKeys' => [ 'type' => 'string', 'locationName' => 'possibleKeys', ],
                'key' => [ 'type' => 'string', 'locationName' => 'key', ],
                'keyLen' => [ 'type' => 'string', 'locationName' => 'keyLen', ],
                'ref' => [ 'type' => 'string', 'locationName' => 'ref', ],
                'rows' => [ 'type' => 'string', 'locationName' => 'rows', ],
                'filtered' => [ 'type' => 'string', 'locationName' => 'filtered', ],
                'extra' => [ 'type' => 'string', 'locationName' => 'extra', ],
            ],
        ],
        'GidList' => [
            'type' => 'structure',
            'members' => [
                'gidList' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'HostStatistic' => [
            'type' => 'structure',
            'members' => [
                'host' => [ 'type' => 'string', 'locationName' => 'host', ],
                'activeCount' => [ 'type' => 'integer', 'locationName' => 'activeCount', ],
                'threadIdList' => [ 'type' => 'string', 'locationName' => 'threadIdList', ],
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
            ],
        ],
        'IndexInfo' => [
            'type' => 'structure',
            'members' => [
                'indexName' => [ 'type' => 'string', 'locationName' => 'indexName', ],
                'db' => [ 'type' => 'string', 'locationName' => 'db', ],
                'tableName' => [ 'type' => 'string', 'locationName' => 'tableName', ],
            ],
        ],
        'InspectTopResource' => [
            'type' => 'structure',
            'members' => [
                'score' => [ 'type' => 'long', 'locationName' => 'score', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'instanceName' => [ 'type' => 'string', 'locationName' => 'instanceName', ],
                'instanceClass' => [ 'type' => 'string', 'locationName' => 'instanceClass', ],
            ],
        ],
        'SystemView' => [
            'type' => 'structure',
            'members' => [
                'cpu' =>  [ 'shape' => 'StatisticString', ],
                'mem' =>  [ 'shape' => 'StatisticString', ],
                'iops' =>  [ 'shape' => 'StatisticString', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
            ],
        ],
        'StatisticString' => [
            'type' => 'structure',
            'members' => [
                'avg' => [ 'type' => 'string', 'locationName' => 'avg', ],
                'max' => [ 'type' => 'string', 'locationName' => 'max', ],
                'sum' => [ 'type' => 'string', 'locationName' => 'sum', ],
            ],
        ],
        'SchemaView' => [
            'type' => 'structure',
            'members' => [
                'items' => [ 'type' => 'list', 'member' => [ 'shape' => 'TableStorage', ], ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
            ],
        ],
        'ConnectView' => [
            'type' => 'structure',
            'members' => [
                'running' =>  [ 'shape' => 'StatisticString', ],
                'total' =>  [ 'shape' => 'StatisticString', ],
                'max' => [ 'type' => 'string', 'locationName' => 'max', ],
                'ratio' =>  [ 'shape' => 'StatisticString', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
            ],
        ],
        'TableStorage' => [
            'type' => 'structure',
            'members' => [
                'tableName' => [ 'type' => 'string', 'locationName' => 'tableName', ],
                'dbName' => [ 'type' => 'string', 'locationName' => 'dbName', ],
                'engine' => [ 'type' => 'string', 'locationName' => 'engine', ],
                'totalSize' => [ 'type' => 'string', 'locationName' => 'totalSize', ],
                'percentage' => [ 'type' => 'string', 'locationName' => 'percentage', ],
                'dataSize' => [ 'type' => 'string', 'locationName' => 'dataSize', ],
                'idxSize' => [ 'type' => 'string', 'locationName' => 'idxSize', ],
                'fragment' => [ 'type' => 'string', 'locationName' => 'fragment', ],
                'dataRows' => [ 'type' => 'integer', 'locationName' => 'dataRows', ],
            ],
        ],
        'StatisticInt' => [
            'type' => 'structure',
            'members' => [
                'avg' => [ 'type' => 'integer', 'locationName' => 'avg', ],
                'max' => [ 'type' => 'integer', 'locationName' => 'max', ],
                'sum' => [ 'type' => 'integer', 'locationName' => 'sum', ],
            ],
        ],
        'Statistic' => [
            'type' => 'structure',
            'members' => [
                'avg' => [ 'type' => 'float', 'locationName' => 'avg', ],
                'max' => [ 'type' => 'float', 'locationName' => 'max', ],
                'sum' => [ 'type' => 'float', 'locationName' => 'sum', ],
            ],
        ],
        'SlowDigestLog' => [
            'type' => 'structure',
            'members' => [
                'execTime' =>  [ 'shape' => 'Statistic', ],
                'lockTime' =>  [ 'shape' => 'Statistic', ],
                'rowsSent' =>  [ 'shape' => 'StatisticInt', ],
                'rowsExamined' =>  [ 'shape' => 'StatisticInt', ],
                'sql' => [ 'type' => 'string', 'locationName' => 'sql', ],
                'database' => [ 'type' => 'string', 'locationName' => 'database', ],
                'queryCount' => [ 'type' => 'integer', 'locationName' => 'queryCount', ],
            ],
        ],
        'EngineView' => [
            'type' => 'structure',
            'members' => [
                'deadLock' => [ 'type' => 'string', 'locationName' => 'deadLock', ],
                'rowsLockAwaits' => [ 'type' => 'string', 'locationName' => 'rowsLockAwaits', ],
                'rowsLockTime' => [ 'type' => 'string', 'locationName' => 'rowsLockTime', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
            ],
        ],
        'DiskView' => [
            'type' => 'structure',
            'members' => [
                'totalSize' => [ 'type' => 'string', 'locationName' => 'totalSize', ],
                'usedSize' => [ 'type' => 'string', 'locationName' => 'usedSize', ],
                'dayIncrease' => [ 'type' => 'string', 'locationName' => 'dayIncrease', ],
                'dayRatio' => [ 'type' => 'string', 'locationName' => 'dayRatio', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
            ],
        ],
        'InspectTaskModel' => [
            'type' => 'structure',
            'members' => [
                'inspectId' => [ 'type' => 'string', 'locationName' => 'inspectId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'instanceName' => [ 'type' => 'string', 'locationName' => 'instanceName', ],
                'instanceClass' => [ 'type' => 'string', 'locationName' => 'instanceClass', ],
                'region' => [ 'type' => 'string', 'locationName' => 'region', ],
                'instanceType' => [ 'type' => 'string', 'locationName' => 'instanceType', ],
                'engineVersion' => [ 'type' => 'string', 'locationName' => 'engineVersion', ],
                'score' => [ 'type' => 'integer', 'locationName' => 'score', ],
                'beginTime' => [ 'type' => 'string', 'locationName' => 'beginTime', ],
                'endTime' => [ 'type' => 'string', 'locationName' => 'endTime', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'updateTime' => [ 'type' => 'string', 'locationName' => 'updateTime', ],
                'cupInfo' => [ 'type' => 'string', 'locationName' => 'cupInfo', ],
                'memoryInfo' => [ 'type' => 'string', 'locationName' => 'memoryInfo', ],
                'connectInfo' => [ 'type' => 'string', 'locationName' => 'connectInfo', ],
                'slowSqlInfo' => [ 'type' => 'string', 'locationName' => 'slowSqlInfo', ],
                'bigTableInfo' => [ 'type' => 'string', 'locationName' => 'bigTableInfo', ],
                'deadLockInfo' => [ 'type' => 'string', 'locationName' => 'deadLockInfo', ],
            ],
        ],
        'SlowLowView' => [
            'type' => 'structure',
            'members' => [
                'items' => [ 'type' => 'list', 'member' => [ 'shape' => 'SlowDigestLog', ], ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
            ],
        ],
        'ClusterCreateSpec' => [
            'type' => 'structure',
            'members' => [
                'connectType' => [ 'type' => 'string', 'locationName' => 'connectType', ],
                'region' => [ 'type' => 'string', 'locationName' => 'region', ],
                'databaseType' => [ 'type' => 'string', 'locationName' => 'databaseType', ],
                'clusterGid' => [ 'type' => 'string', 'locationName' => 'clusterGid', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'host' => [ 'type' => 'string', 'locationName' => 'host', ],
                'port' => [ 'type' => 'integer', 'locationName' => 'port', ],
                'accountName' => [ 'type' => 'string', 'locationName' => 'accountName', ],
                'password' => [ 'type' => 'string', 'locationName' => 'password', ],
            ],
        ],
        'InstanceFilter' => [
            'type' => 'structure',
            'members' => [
                'gid' => [ 'type' => 'string', 'locationName' => 'gid', ],
                'instanceName' => [ 'type' => 'string', 'locationName' => 'instanceName', ],
                'dbSource' => [ 'type' => 'string', 'locationName' => 'dbSource', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
            ],
        ],
        'InstancesCutInfo' => [
            'type' => 'structure',
            'members' => [
                'gids' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'InstancesInfo' => [
            'type' => 'structure',
            'members' => [
                'clusterGid' => [ 'type' => 'string', 'locationName' => 'clusterGid', ],
                'port' => [ 'type' => 'integer', 'locationName' => 'port', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'engineVersion' => [ 'type' => 'string', 'locationName' => 'engineVersion', ],
                'instanceType' => [ 'type' => 'string', 'locationName' => 'instanceType', ],
                'instanceStatus' => [ 'type' => 'string', 'locationName' => 'instanceStatus', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'source' => [ 'type' => 'string', 'locationName' => 'source', ],
            ],
        ],
        'KV' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'value' => [ 'type' => 'string', 'locationName' => 'value', ],
            ],
        ],
        'KVs' => [
            'type' => 'structure',
            'members' => [
                'data' => [ 'type' => 'list', 'member' => [ 'shape' => 'KV', ], ],
            ],
        ],
        'LockStatistic' => [
            'type' => 'structure',
            'members' => [
                'table' => [ 'type' => 'string', 'locationName' => 'table', ],
                'holdLock' => [ 'type' => 'integer', 'locationName' => 'holdLock', ],
                'waitLock' => [ 'type' => 'string', 'locationName' => 'waitLock', ],
                'startTime' => [ 'type' => 'string', 'locationName' => 'startTime', ],
                'waitTime' => [ 'type' => 'integer', 'locationName' => 'waitTime', ],
                'waitSql' => [ 'type' => 'string', 'locationName' => 'waitSql', ],
            ],
        ],
        'PanelClusterItem' => [
            'type' => 'structure',
            'members' => [
                'instanceName' => [ 'type' => 'string', 'locationName' => 'instanceName', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'Panel' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'panelGid' => [ 'type' => 'string', 'locationName' => 'panelGid', ],
            ],
        ],
        'MetricResourceModel' => [
            'type' => 'structure',
            'members' => [
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'instanceName' => [ 'type' => 'string', 'locationName' => 'instanceName', ],
                'engineVersion' => [ 'type' => 'string', 'locationName' => 'engineVersion', ],
                'instanceClass' => [ 'type' => 'string', 'locationName' => 'instanceClass', ],
                'value' => [ 'type' => 'string', 'locationName' => 'value', ],
            ],
        ],
        'Metric' => [
            'type' => 'structure',
            'members' => [
                'calculateUnit' => [ 'type' => 'string', 'locationName' => 'calculateUnit', ],
                'metric' => [ 'type' => 'string', 'locationName' => 'metric', ],
                'metricName' => [ 'type' => 'string', 'locationName' => 'metricName', ],
                'metricDescribe' => [ 'type' => 'string', 'locationName' => 'metricDescribe', ],
            ],
        ],
        'MetricData' => [
            'type' => 'structure',
            'members' => [
                'itemData' => [ 'type' => 'list', 'member' => [ 'shape' => 'DataPoint', ], ],
                'metricInfo' =>  [ 'shape' => 'Metric', ],
            ],
        ],
        'NowSession' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'integer', 'locationName' => 'id', ],
                'user' => [ 'type' => 'string', 'locationName' => 'user', ],
                'host' => [ 'type' => 'string', 'locationName' => 'host', ],
                'db' => [ 'type' => 'string', 'locationName' => 'db', ],
                'command' => [ 'type' => 'string', 'locationName' => 'command', ],
                'time' => [ 'type' => 'integer', 'locationName' => 'time', ],
                'state' => [ 'type' => 'string', 'locationName' => 'state', ],
                'info' => [ 'type' => 'string', 'locationName' => 'info', ],
            ],
        ],
        'ServerInfo' => [
            'type' => 'structure',
            'members' => [
                'version' => [ 'type' => 'string', 'locationName' => 'version', ],
                'uptime' => [ 'type' => 'string', 'locationName' => 'uptime', ],
            ],
        ],
        'Session' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'integer', 'locationName' => 'id', ],
                'user' => [ 'type' => 'string', 'locationName' => 'user', ],
                'host' => [ 'type' => 'string', 'locationName' => 'host', ],
                'db' => [ 'type' => 'string', 'locationName' => 'db', ],
                'cmd' => [ 'type' => 'string', 'locationName' => 'cmd', ],
                'active' => [ 'type' => 'boolean', 'locationName' => 'active', ],
                'time' => [ 'type' => 'integer', 'locationName' => 'time', ],
                'state' => [ 'type' => 'string', 'locationName' => 'state', ],
                'info' => [ 'type' => 'string', 'locationName' => 'info', ],
                'duration' => [ 'type' => 'integer', 'locationName' => 'duration', ],
            ],
        ],
        'SessionForKill' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'sessionList' => [ 'type' => 'list', 'member' => [ 'type' => 'integer', ], ],
            ],
        ],
        'SlowLog' => [
            'type' => 'structure',
            'members' => [
                'startTime' => [ 'type' => 'string', 'locationName' => 'startTime', ],
                'userName' => [ 'type' => 'string', 'locationName' => 'userName', ],
                'execTime' => [ 'type' => 'float', 'locationName' => 'execTime', ],
                'lockTime' => [ 'type' => 'float', 'locationName' => 'lockTime', ],
                'rowsSent' => [ 'type' => 'float', 'locationName' => 'rowsSent', ],
                'rowsExamined' => [ 'type' => 'float', 'locationName' => 'rowsExamined', ],
                'sql' => [ 'type' => 'string', 'locationName' => 'sql', ],
                'database' => [ 'type' => 'string', 'locationName' => 'database', ],
                'host' => [ 'type' => 'string', 'locationName' => 'host', ],
                'logType' => [ 'type' => 'string', 'locationName' => 'logType', ],
            ],
        ],
        'SlowSession' => [
            'type' => 'structure',
            'members' => [
                'user' => [ 'type' => 'string', 'locationName' => 'user', ],
                'db' => [ 'type' => 'string', 'locationName' => 'db', ],
                'threadIdList' => [ 'type' => 'string', 'locationName' => 'threadIdList', ],
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
            ],
        ],
        'StatisticSimple' => [
            'type' => 'structure',
            'members' => [
                'avg' => [ 'type' => 'float', 'locationName' => 'avg', ],
                'max' => [ 'type' => 'float', 'locationName' => 'max', ],
                'sum' => [ 'type' => 'float', 'locationName' => 'sum', ],
                'count' => [ 'type' => 'integer', 'locationName' => 'count', ],
            ],
        ],
        'SupportMetric' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'metric' => [ 'type' => 'string', 'locationName' => 'metric', ],
                'calculateUnit' => [ 'type' => 'string', 'locationName' => 'calculateUnit', ],
            ],
        ],
        'Table' => [
            'type' => 'structure',
            'members' => [
                'typeId' => [ 'type' => 'long', 'locationName' => 'typeId', ],
                'title' => [ 'type' => 'string', 'locationName' => 'title', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'note' => [ 'type' => 'string', 'locationName' => 'note', ],
                'formHeader' => [ 'type' => 'list', 'member' => [ 'shape' => 'Point', ], ],
                'count' => [ 'type' => 'long', 'locationName' => 'count', ],
            ],
        ],
        'Point' => [
            'type' => 'structure',
            'members' => [
                'row' => [ 'type' => 'string', 'locationName' => 'row', ],
                'rowName' => [ 'type' => 'string', 'locationName' => 'rowName', ],
            ],
        ],
        'FieldList' => [
            'type' => 'structure',
            'members' => [
                'dbName' => [ 'type' => 'string', 'locationName' => 'dbName', ],
                'tableName' => [ 'type' => 'string', 'locationName' => 'tableName', ],
                'engine' => [ 'type' => 'string', 'locationName' => 'engine', ],
                'keyType' => [ 'type' => 'string', 'locationName' => 'keyType', ],
                'rowName' => [ 'type' => 'string', 'locationName' => 'rowName', ],
                'rowType' => [ 'type' => 'string', 'locationName' => 'rowType', ],
                'tableRows' => [ 'type' => 'long', 'locationName' => 'tableRows', ],
                'tableSize' => [ 'type' => 'long', 'locationName' => 'tableSize', ],
                'indexName' => [ 'type' => 'string', 'locationName' => 'indexName', ],
                'indexRow' => [ 'type' => 'string', 'locationName' => 'indexRow', ],
                'number' => [ 'type' => 'long', 'locationName' => 'number', ],
                'sql' => [ 'type' => 'string', 'locationName' => 'sql', ],
                'autoIncrement' => [ 'type' => 'string', 'locationName' => 'autoIncrement', ],
                'maxNum' => [ 'type' => 'string', 'locationName' => 'maxNum', ],
            ],
        ],
        'TableStorageInfo' => [
            'type' => 'structure',
            'members' => [
                'tableName' => [ 'type' => 'string', 'locationName' => 'tableName', ],
                'dbName' => [ 'type' => 'string', 'locationName' => 'dbName', ],
                'engine' => [ 'type' => 'string', 'locationName' => 'engine', ],
                'totalSize' => [ 'type' => 'string', 'locationName' => 'totalSize', ],
                'percentage' => [ 'type' => 'string', 'locationName' => 'percentage', ],
                'dataSize' => [ 'type' => 'string', 'locationName' => 'dataSize', ],
                'idxSize' => [ 'type' => 'string', 'locationName' => 'idxSize', ],
                'fragment' => [ 'type' => 'string', 'locationName' => 'fragment', ],
                'dataRows' => [ 'type' => 'integer', 'locationName' => 'dataRows', ],
            ],
        ],
        'TuningAdvice' => [
            'type' => 'structure',
            'members' => [
                'indexAdvice' => [ 'type' => 'string', 'locationName' => 'indexAdvice', ],
                'details' => [ 'type' => 'string', 'locationName' => 'details', ],
            ],
        ],
        'UnCommitTransaction' => [
            'type' => 'structure',
            'members' => [
                'user' => [ 'type' => 'string', 'locationName' => 'user', ],
                'db' => [ 'type' => 'string', 'locationName' => 'db', ],
                'host' => [ 'type' => 'string', 'locationName' => 'host', ],
                'state' => [ 'type' => 'string', 'locationName' => 'state', ],
                'startTime' => [ 'type' => 'integer', 'locationName' => 'startTime', ],
                'lastSql' => [ 'type' => 'string', 'locationName' => 'lastSql', ],
            ],
        ],
        'UnCommitTrx' => [
            'type' => 'structure',
            'members' => [
                'user' => [ 'type' => 'string', 'locationName' => 'user', ],
                'db' => [ 'type' => 'string', 'locationName' => 'db', ],
                'host' => [ 'type' => 'string', 'locationName' => 'host', ],
                'state' => [ 'type' => 'string', 'locationName' => 'state', ],
                'startTime' => [ 'type' => 'integer', 'locationName' => 'startTime', ],
                'lastSql' => [ 'type' => 'string', 'locationName' => 'lastSql', ],
            ],
        ],
        'UntrxLock' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'integer', 'locationName' => 'id', ],
                'user' => [ 'type' => 'string', 'locationName' => 'user', ],
                'host' => [ 'type' => 'string', 'locationName' => 'host', ],
                'db' => [ 'type' => 'string', 'locationName' => 'db', ],
                'command' => [ 'type' => 'string', 'locationName' => 'command', ],
                'time' => [ 'type' => 'integer', 'locationName' => 'time', ],
                'state' => [ 'type' => 'string', 'locationName' => 'state', ],
                'info' => [ 'type' => 'string', 'locationName' => 'info', ],
            ],
        ],
        'UserStatistic' => [
            'type' => 'structure',
            'members' => [
                'user' => [ 'type' => 'string', 'locationName' => 'user', ],
                'activeCount' => [ 'type' => 'integer', 'locationName' => 'activeCount', ],
                'threadIdList' => [ 'type' => 'string', 'locationName' => 'threadIdList', ],
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
            ],
        ],
        'DescribeAlarmResourceResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeAlarmResourceResultShape', ],
            ],
        ],
        'DescribeAlarmHistoryRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageIndex' => [ 'type' => 'integer', 'locationName' => 'pageIndex', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'startTime' => [ 'type' => 'string', 'locationName' => 'startTime', ],
                'endTime' => [ 'type' => 'string', 'locationName' => 'endTime', ],
                'dbType' => [ 'type' => 'string', 'locationName' => 'dbType', ],
                'instanceGid' => [ 'type' => 'string', 'locationName' => 'instanceGid', ],
                'instanceName' => [ 'type' => 'string', 'locationName' => 'instanceName', ],
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
        'DescribeAlarmResourceResultShape' => [
            'type' => 'structure',
            'members' => [
                'data' => [ 'type' => 'list', 'member' => [ 'shape' => 'AlarmDetail', ], ],
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
            ],
        ],
        'DescribeAlarmHistoryResultShape' => [
            'type' => 'structure',
            'members' => [
                'data' => [ 'type' => 'list', 'member' => [ 'shape' => 'AlarmHistoryDetail', ], ],
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
            ],
        ],
        'DescribeAlarmResourceRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageIndex' => [ 'type' => 'integer', 'locationName' => 'pageIndex', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'dbType' => [ 'type' => 'string', 'locationName' => 'dbType', ],
                'endTime' => [ 'type' => 'string', 'locationName' => 'endTime', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DescribeDiagnoseTrendResultShape' => [
            'type' => 'structure',
            'members' => [
                'data' => [ 'type' => 'list', 'member' => [ 'shape' => 'DataPoint', ], ],
            ],
        ],
        'DescribeDiagnoseTopResourceRequestShape' => [
            'type' => 'structure',
            'members' => [
                'endTime' => [ 'type' => 'string', 'locationName' => 'endTime', ],
                'dbType' => [ 'type' => 'string', 'locationName' => 'dbType', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DescribeDiagnoseTrendResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeDiagnoseTrendResultShape', ],
                'error' =>  [ 'shape' => 'DescribeDiagnoseTrendResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeAlarmTrendRequestShape' => [
            'type' => 'structure',
            'members' => [
                'startTime' => [ 'type' => 'string', 'locationName' => 'startTime', ],
                'endTime' => [ 'type' => 'string', 'locationName' => 'endTime', ],
                'dbType' => [ 'type' => 'string', 'locationName' => 'dbType', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DescribeAlarmStatisticResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeAlarmStatisticResultShape', ],
                'error' =>  [ 'shape' => 'DescribeAlarmStatisticResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeAlarmTrendResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeAlarmTrendResultShape', ],
                'error' =>  [ 'shape' => 'DescribeAlarmTrendResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'GetTopResourceByMetricResultShape' => [
            'type' => 'structure',
            'members' => [
                'data' => [ 'type' => 'list', 'member' => [ 'shape' => 'MetricResourceModel', ], ],
            ],
        ],
        'GetTopResourceByMetricRequestShape' => [
            'type' => 'structure',
            'members' => [
                'metric' => [ 'type' => 'string', 'locationName' => 'metric', ],
                'endTime' => [ 'type' => 'string', 'locationName' => 'endTime', ],
                'dbType' => [ 'type' => 'string', 'locationName' => 'dbType', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DescribeslowLogStatisticResultShape' => [
            'type' => 'structure',
            'members' => [
                'count3h' => [ 'type' => 'integer', 'locationName' => 'count3h', ],
                'count24h' => [ 'type' => 'integer', 'locationName' => 'count24h', ],
                'count72h' => [ 'type' => 'integer', 'locationName' => 'count72h', ],
            ],
        ],
        'DescribeslowLogStatisticResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeslowLogStatisticResultShape', ],
                'error' =>  [ 'shape' => 'DescribeslowLogStatisticResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeAlarmStatisticResultShape' => [
            'type' => 'structure',
            'members' => [
                'count3h' => [ 'type' => 'integer', 'locationName' => 'count3h', ],
                'count24h' => [ 'type' => 'integer', 'locationName' => 'count24h', ],
                'count72h' => [ 'type' => 'integer', 'locationName' => 'count72h', ],
            ],
        ],
        'DescribeDiagnoseTrendRequestShape' => [
            'type' => 'structure',
            'members' => [
                'endTime' => [ 'type' => 'string', 'locationName' => 'endTime', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceGid' => [ 'type' => 'string', 'locationName' => 'instanceGid', ],
            ],
        ],
        'DescribeslowLogStatisticRequestShape' => [
            'type' => 'structure',
            'members' => [
                'endTime' => [ 'type' => 'string', 'locationName' => 'endTime', ],
                'dbType' => [ 'type' => 'string', 'locationName' => 'dbType', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DescribeAlarmTrendResultShape' => [
            'type' => 'structure',
            'members' => [
                'itemData' => [ 'type' => 'list', 'member' => [ 'shape' => 'DataPoint', ], ],
                'metricInfo' =>  [ 'shape' => 'Metric', ],
            ],
        ],
        'DescribeDiagnoseTopResourceResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeDiagnoseTopResourceResultShape', ],
                'error' =>  [ 'shape' => 'DescribeDiagnoseTopResourceResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeAlarmStatisticRequestShape' => [
            'type' => 'structure',
            'members' => [
                'endTime' => [ 'type' => 'string', 'locationName' => 'endTime', ],
                'dbType' => [ 'type' => 'string', 'locationName' => 'dbType', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'GetTopResourceByMetricResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GetTopResourceByMetricResultShape', ],
                'error' =>  [ 'shape' => 'GetTopResourceByMetricResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeDiagnoseTopResourceResultShape' => [
            'type' => 'structure',
            'members' => [
                'data' => [ 'type' => 'list', 'member' => [ 'shape' => 'InspectTopResource', ], ],
            ],
        ],
        'CreateDiagnoseResultShape' => [
            'type' => 'structure',
            'members' => [
                'taskId' => [ 'type' => 'string', 'locationName' => 'taskId', ],
            ],
        ],
        'CreateDiagnoseResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'CreateDiagnoseResultShape', ],
            ],
        ],
        'DescribeDiagnoseRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceGid' => [ 'type' => 'string', 'locationName' => 'instanceGid', ],
                'diagnoseId' => [ 'type' => 'string', 'locationName' => 'diagnoseId', ],
            ],
        ],
        'DescribeInspectResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeInspectResultShape', ],
            ],
        ],
        'DescribeInspectResultShape' => [
            'type' => 'structure',
            'members' => [
                'score' => [ 'type' => 'integer', 'locationName' => 'score', ],
                'beginTime' => [ 'type' => 'string', 'locationName' => 'beginTime', ],
                'endTime' => [ 'type' => 'string', 'locationName' => 'endTime', ],
                'systemView' =>  [ 'shape' => 'SystemView', ],
                'connectView' =>  [ 'shape' => 'ConnectView', ],
                'engineView' =>  [ 'shape' => 'EngineView', ],
                'schemaView' =>  [ 'shape' => 'SchemaView', ],
                'diskView' =>  [ 'shape' => 'DiskView', ],
                'slowLowView' =>  [ 'shape' => 'SlowLowView', ],
                'detail' => [ 'type' => 'list', 'member' => [ 'shape' => 'KV', ], ],
            ],
        ],
        'DescribeDiagnoseResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeDiagnoseResultShape', ],
            ],
        ],
        'DescribeDiagnoseListResultShape' => [
            'type' => 'structure',
            'members' => [
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
                'data' => [ 'type' => 'list', 'member' => [ 'shape' => 'DiagnoseDetail', ], ],
            ],
        ],
        'DescribeInspectListResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeInspectListResultShape', ],
            ],
        ],
        'DescribeDiagnoseListRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageIndex' => [ 'type' => 'integer', 'locationName' => 'pageIndex', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceGid' => [ 'type' => 'string', 'locationName' => 'instanceGid', ],
            ],
        ],
        'DescribeInspectListResultShape' => [
            'type' => 'structure',
            'members' => [
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
                'data' => [ 'type' => 'list', 'member' => [ 'shape' => 'InspectTaskModel', ], ],
            ],
        ],
        'DescribeInspectRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceGid' => [ 'type' => 'string', 'locationName' => 'instanceGid', ],
                'inspectId' => [ 'type' => 'string', 'locationName' => 'inspectId', ],
            ],
        ],
        'DescribeDiagnoseListResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeDiagnoseListResultShape', ],
            ],
        ],
        'DescribeDiagnoseResultShape' => [
            'type' => 'structure',
            'members' => [
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'data' =>  [ 'shape' => 'DiagnoseDetail', ],
            ],
        ],
        'CreateDiagnoseRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceGid' => [ 'type' => 'string', 'locationName' => 'instanceGid', ],
            ],
        ],
        'DescribeInspectListRequestShape' => [
            'type' => 'structure',
            'members' => [
                'startTime' => [ 'type' => 'string', 'locationName' => 'startTime', ],
                'endTime' => [ 'type' => 'string', 'locationName' => 'endTime', ],
                'pageIndex' => [ 'type' => 'integer', 'locationName' => 'pageIndex', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'instanceGid' => [ 'type' => 'string', 'locationName' => 'instanceGid', ],
                'instanceName' => [ 'type' => 'string', 'locationName' => 'instanceName', ],
                'dbType' => [ 'type' => 'string', 'locationName' => 'dbType', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'CancleConnectRequestShape' => [
            'type' => 'structure',
            'members' => [
                'gidList' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DescribeClusterListRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageIndex' => [ 'type' => 'integer', 'locationName' => 'pageIndex', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'gid' => [ 'type' => 'string', 'locationName' => 'gid', ],
                'instanceName' => [ 'type' => 'string', 'locationName' => 'instanceName', ],
                'dbSource' => [ 'type' => 'string', 'locationName' => 'dbSource', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'dbType' => [ 'type' => 'string', 'locationName' => 'dbType', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'CreateClusterResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'CreateClusterResultShape', ],
                'error' =>  [ 'shape' => 'CreateClusterResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeClusterListResultShape' => [
            'type' => 'structure',
            'members' => [
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
                'checkOkCount' => [ 'type' => 'integer', 'locationName' => 'checkOkCount', ],
                'checkFailCount' => [ 'type' => 'integer', 'locationName' => 'checkFailCount', ],
                'data' => [ 'type' => 'list', 'member' => [ 'shape' => 'InstancesInfo', ], ],
            ],
        ],
        'ToBeConnectClustersResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'ToBeConnectClustersResultShape', ],
                'error' =>  [ 'shape' => 'ToBeConnectClustersResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeClusterDetailResultShape' => [
            'type' => 'structure',
            'members' => [
                'data' =>  [ 'shape' => 'ClusterDetail', ],
            ],
        ],
        'DescribeClusterDetailRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceGid' => [ 'type' => 'string', 'locationName' => 'instanceGid', ],
            ],
        ],
        'CreateClusterRequestShape' => [
            'type' => 'structure',
            'members' => [
                'gidList' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DescribeClusterDetailResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeClusterDetailResultShape', ],
                'error' =>  [ 'shape' => 'DescribeClusterDetailResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ToBeConnectClustersRequestShape' => [
            'type' => 'structure',
            'members' => [
                'dbType' => [ 'type' => 'string', 'locationName' => 'dbType', ],
                'pageIndex' => [ 'type' => 'integer', 'locationName' => 'pageIndex', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'CreateClusterResultShape' => [
            'type' => 'structure',
            'members' => [
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
                'data' => [ 'type' => 'list', 'member' => [ 'shape' => 'InstancesInfo', ], ],
            ],
        ],
        'CancleConnectResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'CancleConnectResultShape', ],
                'error' =>  [ 'shape' => 'CancleConnectResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeClusterListResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeClusterListResultShape', ],
                'error' =>  [ 'shape' => 'DescribeClusterListResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ToBeConnectClustersResultShape' => [
            'type' => 'structure',
            'members' => [
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
                'data' => [ 'type' => 'list', 'member' => [ 'shape' => 'InstancesInfo', ], ],
            ],
        ],
        'CancleConnectResultShape' => [
            'type' => 'structure',
            'members' => [
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
                'data' => [ 'type' => 'list', 'member' => [ 'shape' => 'InstancesInfo', ], ],
            ],
        ],
        'DescribeAnalyseListResultShape' => [
            'type' => 'structure',
            'members' => [
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
                'data' => [ 'type' => 'list', 'member' => [ 'shape' => 'DeadLockOverview', ], ],
            ],
        ],
        'DescribeAnalyseListResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeAnalyseListResultShape', ],
            ],
        ],
        'CreateLockAnalyseResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'CreateLockAnalyseResultShape', ],
            ],
        ],
        'DescribeLockAnalyseResultShape' => [
            'type' => 'structure',
            'members' => [
                'analyseId' => [ 'type' => 'string', 'locationName' => 'analyseId', ],
                'occurTime' => [ 'type' => 'string', 'locationName' => 'occurTime', ],
                'deadLockLog' => [ 'type' => 'string', 'locationName' => 'deadLockLog', ],
                'data' => [ 'type' => 'list', 'member' => [ 'shape' => 'DeadLockDetail', ], ],
            ],
        ],
        'DescribeAnalyseListRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageIndex' => [ 'type' => 'integer', 'locationName' => 'pageIndex', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'startTime' => [ 'type' => 'string', 'locationName' => 'startTime', ],
                'endTime' => [ 'type' => 'string', 'locationName' => 'endTime', ],
                'state' => [ 'type' => 'boolean', 'locationName' => 'state', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceGid' => [ 'type' => 'string', 'locationName' => 'instanceGid', ],
            ],
        ],
        'DescribeLockAnalyseResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeLockAnalyseResultShape', ],
            ],
        ],
        'DescribeLockAnalyseRequestShape' => [
            'type' => 'structure',
            'members' => [
                'analyseId' => [ 'type' => 'string', 'locationName' => 'analyseId', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceGid' => [ 'type' => 'string', 'locationName' => 'instanceGid', ],
            ],
        ],
        'CreateLockAnalyseRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceGid' => [ 'type' => 'string', 'locationName' => 'instanceGid', ],
            ],
        ],
        'CreateLockAnalyseResultShape' => [
            'type' => 'structure',
            'members' => [
                'analyseId' => [ 'type' => 'string', 'locationName' => 'analyseId', ],
                'state' => [ 'type' => 'string', 'locationName' => 'state', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
            ],
        ],
        'DescribePanelListRequestShape' => [
            'type' => 'structure',
            'members' => [
                'dbType' => [ 'type' => 'string', 'locationName' => 'dbType', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'UpdatePanelClustersResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'UpdatePanelClustersResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DeletePanelResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'GetPanelRelateClustersRequestShape' => [
            'type' => 'structure',
            'members' => [
                'dbType' => [ 'type' => 'string', 'locationName' => 'dbType', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'panelGid' => [ 'type' => 'string', 'locationName' => 'panelGid', ],
            ],
        ],
        'DescribePanelListResultShape' => [
            'type' => 'structure',
            'members' => [
                'data' => [ 'type' => 'list', 'member' => [ 'shape' => 'Panel', ], ],
            ],
        ],
        'GetPanelRelateClustersResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GetPanelRelateClustersResultShape', ],
            ],
        ],
        'DescribePanelMetricValueByGidResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribePanelMetricValueByGidResultShape', ],
            ],
        ],
        'DescribePanelMetricValueByGidRequestShape' => [
            'type' => 'structure',
            'members' => [
                'startTime' => [ 'type' => 'string', 'locationName' => 'startTime', ],
                'endTime' => [ 'type' => 'string', 'locationName' => 'endTime', ],
                'dbType' => [ 'type' => 'string', 'locationName' => 'dbType', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'panelGid' => [ 'type' => 'string', 'locationName' => 'panelGid', ],
                'metric' => [ 'type' => 'string', 'locationName' => 'metric', ],
            ],
        ],
        'CreatePanelRequestShape' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'dbType' => [ 'type' => 'string', 'locationName' => 'dbType', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DescribePanelListResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribePanelListResultShape', ],
            ],
        ],
        'DeletePanelRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'panelGid' => [ 'type' => 'string', 'locationName' => 'panelGid', ],
            ],
        ],
        'DeletePanelResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'CreatePanelResultShape' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'panelGid' => [ 'type' => 'string', 'locationName' => 'panelGid', ],
            ],
        ],
        'GetPanelRelateClustersResultShape' => [
            'type' => 'structure',
            'members' => [
                'data' => [ 'type' => 'list', 'member' => [ 'shape' => 'PanelClusterItem', ], ],
            ],
        ],
        'CreatePanelResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'CreatePanelResultShape', ],
            ],
        ],
        'UpdatePanelClustersRequestShape' => [
            'type' => 'structure',
            'members' => [
                'instanceIdList' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'dbType' => [ 'type' => 'string', 'locationName' => 'dbType', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'panelGid' => [ 'type' => 'string', 'locationName' => 'panelGid', ],
            ],
        ],
        'DescribePanelMetricValueByGidResultShape' => [
            'type' => 'structure',
            'members' => [
                'metricDatas' => [ 'type' => 'list', 'member' => [ 'shape' => 'MetricData', ], ],
            ],
        ],
        'BindMetricsResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DescribeMetricValueByGidRequestShape' => [
            'type' => 'structure',
            'members' => [
                'metric' => [ 'type' => 'string', 'locationName' => 'metric', ],
                'startTime' => [ 'type' => 'string', 'locationName' => 'startTime', ],
                'endTime' => [ 'type' => 'string', 'locationName' => 'endTime', ],
                'role' => [ 'type' => 'string', 'locationName' => 'role', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceGid' => [ 'type' => 'string', 'locationName' => 'instanceGid', ],
            ],
        ],
        'DescribeSupportMetricsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeSupportMetricsResultShape', ],
                'error' =>  [ 'shape' => 'DescribeSupportMetricsResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'GetBindMetricsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'panelType' => [ 'type' => 'string', 'locationName' => 'panelType', ],
                'dbType' => [ 'type' => 'string', 'locationName' => 'dbType', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'gid' => [ 'type' => 'string', 'locationName' => 'gid', ],
            ],
        ],
        'BindMetricsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'metricIds' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'panelType' => [ 'type' => 'string', 'locationName' => 'panelType', ],
                'gid' => [ 'type' => 'string', 'locationName' => 'gid', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DescribeSupportMetricsResultShape' => [
            'type' => 'structure',
            'members' => [
                'sys' => [ 'type' => 'list', 'member' => [ 'shape' => 'SupportMetric', ], ],
                'server' => [ 'type' => 'list', 'member' => [ 'shape' => 'SupportMetric', ], ],
            ],
        ],
        'GetBindMetricsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GetBindMetricsResultShape', ],
                'error' =>  [ 'shape' => 'GetBindMetricsResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeSupportMetricsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'panelType' => [ 'type' => 'string', 'locationName' => 'panelType', ],
                'dbType' => [ 'type' => 'string', 'locationName' => 'dbType', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DescribeMetricValueByGidResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeMetricValueByGidResultShape', ],
                'error' =>  [ 'shape' => 'DescribeMetricValueByGidResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'BindMetricsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' => [ 'type' => 'string', 'locationName' => 'result', ],
                'error' =>  [ 'shape' => 'BindMetricsResultShape', ],
            ],
        ],
        'DescribeMetricValueByGidResultShape' => [
            'type' => 'structure',
            'members' => [
                'itemData' => [ 'type' => 'list', 'member' => [ 'shape' => 'DataPoint', ], ],
                'metricInfo' =>  [ 'shape' => 'Metric', ],
            ],
        ],
        'GetBindMetricsResultShape' => [
            'type' => 'structure',
            'members' => [
                'sys' => [ 'type' => 'list', 'member' => [ 'shape' => 'SupportMetric', ], ],
                'server' => [ 'type' => 'list', 'member' => [ 'shape' => 'SupportMetric', ], ],
            ],
        ],
        'DescribeUntrxLocksRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageIndex' => [ 'type' => 'integer', 'locationName' => 'pageIndex', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceGid' => [ 'type' => 'string', 'locationName' => 'instanceGid', ],
            ],
        ],
        'DescribeSessionsResultShape' => [
            'type' => 'structure',
            'members' => [
                'upTime' => [ 'type' => 'integer', 'locationName' => 'upTime', ],
                'activeSession' => [ 'type' => 'integer', 'locationName' => 'activeSession', ],
                'maxActiveTime' => [ 'type' => 'integer', 'locationName' => 'maxActiveTime', ],
                'waitSession' => [ 'type' => 'integer', 'locationName' => 'waitSession', ],
                'totalSession' => [ 'type' => 'integer', 'locationName' => 'totalSession', ],
                'systemsSession' => [ 'type' => 'integer', 'locationName' => 'systemsSession', ],
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
                'sessions' => [ 'type' => 'list', 'member' => [ 'shape' => 'Session', ], ],
                'userStatistics' => [ 'type' => 'list', 'member' => [ 'shape' => 'UserStatistic', ], ],
                'hostStatistics' => [ 'type' => 'list', 'member' => [ 'shape' => 'HostStatistic', ], ],
                'dbStatistics' => [ 'type' => 'list', 'member' => [ 'shape' => 'DBStatistic', ], ],
            ],
        ],
        'KillSessionResponseShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DescribeTrxLocksRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageIndex' => [ 'type' => 'integer', 'locationName' => 'pageIndex', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceGid' => [ 'type' => 'string', 'locationName' => 'instanceGid', ],
            ],
        ],
        'DescribeNowSessionsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageIndex' => [ 'type' => 'integer', 'locationName' => 'pageIndex', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceGid' => [ 'type' => 'string', 'locationName' => 'instanceGid', ],
            ],
        ],
        'DescribeUntrxLocksResultShape' => [
            'type' => 'structure',
            'members' => [
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
                'data' => [ 'type' => 'list', 'member' => [ 'shape' => 'UntrxLock', ], ],
            ],
        ],
        'DescribeNowSessionsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeNowSessionsResultShape', ],
                'error' =>  [ 'shape' => 'DescribeNowSessionsResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeUntrxLocksResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeUntrxLocksResultShape', ],
                'error' =>  [ 'shape' => 'DescribeUntrxLocksResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeUnCommitTrxsResultShape' => [
            'type' => 'structure',
            'members' => [
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
                'data' => [ 'type' => 'list', 'member' => [ 'shape' => 'UnCommitTrx', ], ],
            ],
        ],
        'KillSessionResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DescribeTrxLocksResultShape' => [
            'type' => 'structure',
            'members' => [
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
                'data' => [ 'type' => 'list', 'member' => [ 'shape' => 'LockStatistic', ], ],
            ],
        ],
        'DescribeTrxLocksResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeTrxLocksResultShape', ],
                'error' =>  [ 'shape' => 'DescribeTrxLocksResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeNowSessionsResultShape' => [
            'type' => 'structure',
            'members' => [
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
                'data' => [ 'type' => 'list', 'member' => [ 'shape' => 'NowSession', ], ],
            ],
        ],
        'DescribeSessionsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceGid' => [ 'type' => 'string', 'locationName' => 'instanceGid', ],
            ],
        ],
        'DescribeUnCommitTrxsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageIndex' => [ 'type' => 'integer', 'locationName' => 'pageIndex', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceGid' => [ 'type' => 'string', 'locationName' => 'instanceGid', ],
            ],
        ],
        'DescribeUnCommitTrxsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeUnCommitTrxsResultShape', ],
                'error' =>  [ 'shape' => 'DescribeUnCommitTrxsResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeSessionsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeSessionsResultShape', ],
                'error' =>  [ 'shape' => 'DescribeSessionsResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'KillSessionRequestShape' => [
            'type' => 'structure',
            'members' => [
                'sessionId' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceGid' => [ 'type' => 'string', 'locationName' => 'instanceGid', ],
            ],
        ],
        'DescribeSlowLogResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeSlowLogResultShape', ],
            ],
        ],
        'TurningSqlResultShape' => [
            'type' => 'structure',
            'members' => [
                'tuningAdvice' =>  [ 'shape' => 'TuningAdvice', ],
            ],
        ],
        'DescribeSlowLogDimensionsStatisticResultShape' => [
            'type' => 'structure',
            'members' => [
                'dbName' => [ 'type' => 'object', 'locationName' => 'dbName', ],
                'userName' => [ 'type' => 'object', 'locationName' => 'userName', ],
                'clientIP' => [ 'type' => 'object', 'locationName' => 'clientIP', ],
            ],
        ],
        'ExplainSqlRequestShape' => [
            'type' => 'structure',
            'members' => [
                'database' => [ 'type' => 'string', 'locationName' => 'database', ],
                'sql' => [ 'type' => 'string', 'locationName' => 'sql', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceGid' => [ 'type' => 'string', 'locationName' => 'instanceGid', ],
            ],
        ],
        'TurningSqlResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'TurningSqlResultShape', ],
            ],
        ],
        'DescribeSlowLogDimensionsStatisticResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeSlowLogDimensionsStatisticResultShape', ],
            ],
        ],
        'DescribeSlowSqlMetricResultShape' => [
            'type' => 'structure',
            'members' => [
                'itemData' => [ 'type' => 'list', 'member' => [ 'shape' => 'DataPoint', ], ],
                'metricInfo' =>  [ 'shape' => 'Metric', ],
            ],
        ],
        'DescribeSlowLogRequestShape' => [
            'type' => 'structure',
            'members' => [
                'startTime' => [ 'type' => 'string', 'locationName' => 'startTime', ],
                'endTime' => [ 'type' => 'string', 'locationName' => 'endTime', ],
                'dbName' => [ 'type' => 'string', 'locationName' => 'dbName', ],
                'userName' => [ 'type' => 'string', 'locationName' => 'userName', ],
                'clientIP' => [ 'type' => 'string', 'locationName' => 'clientIP', ],
                'keyword4Search' => [ 'type' => 'string', 'locationName' => 'keyword4Search', ],
                'field' => [ 'type' => 'string', 'locationName' => 'field', ],
                'sort' => [ 'type' => 'string', 'locationName' => 'sort', ],
                'pageIndex' => [ 'type' => 'integer', 'locationName' => 'pageIndex', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceGid' => [ 'type' => 'string', 'locationName' => 'instanceGid', ],
            ],
        ],
        'DescribeSlowDigestLogRequestShape' => [
            'type' => 'structure',
            'members' => [
                'startTime' => [ 'type' => 'string', 'locationName' => 'startTime', ],
                'endTime' => [ 'type' => 'string', 'locationName' => 'endTime', ],
                'dbName' => [ 'type' => 'string', 'locationName' => 'dbName', ],
                'userName' => [ 'type' => 'string', 'locationName' => 'userName', ],
                'clientIP' => [ 'type' => 'string', 'locationName' => 'clientIP', ],
                'keyword4Search' => [ 'type' => 'string', 'locationName' => 'keyword4Search', ],
                'sort' => [ 'type' => 'string', 'locationName' => 'sort', ],
                'pageIndex' => [ 'type' => 'integer', 'locationName' => 'pageIndex', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceGid' => [ 'type' => 'string', 'locationName' => 'instanceGid', ],
            ],
        ],
        'DescribeSlowDigestLogResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeSlowDigestLogResultShape', ],
            ],
        ],
        'TurningSqlRequestShape' => [
            'type' => 'structure',
            'members' => [
                'database' => [ 'type' => 'string', 'locationName' => 'database', ],
                'sql' => [ 'type' => 'string', 'locationName' => 'sql', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceGid' => [ 'type' => 'string', 'locationName' => 'instanceGid', ],
            ],
        ],
        'DescribeSlowLogResultShape' => [
            'type' => 'structure',
            'members' => [
                'data' => [ 'type' => 'list', 'member' => [ 'shape' => 'SlowLog', ], ],
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
            ],
        ],
        'DescribeSlowLogDimensionsStatisticRequestShape' => [
            'type' => 'structure',
            'members' => [
                'startTime' => [ 'type' => 'string', 'locationName' => 'startTime', ],
                'endTime' => [ 'type' => 'string', 'locationName' => 'endTime', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceGid' => [ 'type' => 'string', 'locationName' => 'instanceGid', ],
            ],
        ],
        'ExplainSqlResultShape' => [
            'type' => 'structure',
            'members' => [
                'data' => [ 'type' => 'list', 'member' => [ 'shape' => 'ExecutionPlan', ], ],
            ],
        ],
        'DescribeSlowSqlMetricRequestShape' => [
            'type' => 'structure',
            'members' => [
                'metric' => [ 'type' => 'string', 'locationName' => 'metric', ],
                'startTime' => [ 'type' => 'string', 'locationName' => 'startTime', ],
                'endTime' => [ 'type' => 'string', 'locationName' => 'endTime', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceGid' => [ 'type' => 'string', 'locationName' => 'instanceGid', ],
            ],
        ],
        'DescribeSlowSqlMetricResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeSlowSqlMetricResultShape', ],
                'error' =>  [ 'shape' => 'DescribeSlowSqlMetricResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ExplainSqlResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'ExplainSqlResultShape', ],
            ],
        ],
        'DescribeSlowDigestLogResultShape' => [
            'type' => 'structure',
            'members' => [
                'data' => [ 'type' => 'list', 'member' => [ 'shape' => 'SlowDigestLog', ], ],
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
            ],
        ],
        'DescribeIndexsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'indexType' => [ 'type' => 'string', 'locationName' => 'indexType', ],
                'pageIndex' => [ 'type' => 'integer', 'locationName' => 'pageIndex', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceGid' => [ 'type' => 'string', 'locationName' => 'instanceGid', ],
            ],
        ],
        'DescribeSchemaSpaceTopRequestShape' => [
            'type' => 'structure',
            'members' => [
                'sortField' => [ 'type' => 'string', 'locationName' => 'sortField', ],
                'sortType' => [ 'type' => 'string', 'locationName' => 'sortType', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceGid' => [ 'type' => 'string', 'locationName' => 'instanceGid', ],
            ],
        ],
        'DescribeAllTableInfoForDbRequestShape' => [
            'type' => 'structure',
            'members' => [
                'dbName' => [ 'type' => 'string', 'locationName' => 'dbName', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceGid' => [ 'type' => 'string', 'locationName' => 'instanceGid', ],
            ],
        ],
        'DescribeSchemaSpaceTopResultShape' => [
            'type' => 'structure',
            'members' => [
                'data' => [ 'type' => 'list', 'member' => [ 'shape' => 'TableStorageInfo', ], ],
            ],
        ],
        'DescribeAllDbInfoRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceGid' => [ 'type' => 'string', 'locationName' => 'instanceGid', ],
            ],
        ],
        'DescribeTableSpaceTopResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeTableSpaceTopResultShape', ],
                'error' =>  [ 'shape' => 'DescribeTableSpaceTopResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeStoragesResultShape' => [
            'type' => 'structure',
            'members' => [
                'totalDiskSize' => [ 'type' => 'string', 'locationName' => 'totalDiskSize', ],
                'usedDiskSize' => [ 'type' => 'string', 'locationName' => 'usedDiskSize', ],
                'totalIncreaseSize' => [ 'type' => 'string', 'locationName' => 'totalIncreaseSize', ],
                'averageIncrease' => [ 'type' => 'string', 'locationName' => 'averageIncrease', ],
                'freeDiskSize' => [ 'type' => 'string', 'locationName' => 'freeDiskSize', ],
                'predictAvailableDays' => [ 'type' => 'string', 'locationName' => 'predictAvailableDays', ],
            ],
        ],
        'DescribeStorageTrendRequestShape' => [
            'type' => 'structure',
            'members' => [
                'startTime' => [ 'type' => 'string', 'locationName' => 'startTime', ],
                'endTime' => [ 'type' => 'string', 'locationName' => 'endTime', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceGid' => [ 'type' => 'string', 'locationName' => 'instanceGid', ],
            ],
        ],
        'DescribeStorageTrendResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeStorageTrendResultShape', ],
                'error' =>  [ 'shape' => 'DescribeStorageTrendResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeIndexsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeIndexsResultShape', ],
                'error' =>  [ 'shape' => 'DescribeIndexsResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeTableSpaceDetailResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeTableSpaceDetailResultShape', ],
                'error' =>  [ 'shape' => 'DescribeTableSpaceDetailResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeTableSpaceTopRequestShape' => [
            'type' => 'structure',
            'members' => [
                'sortField' => [ 'type' => 'string', 'locationName' => 'sortField', ],
                'sortType' => [ 'type' => 'string', 'locationName' => 'sortType', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceGid' => [ 'type' => 'string', 'locationName' => 'instanceGid', ],
            ],
        ],
        'DescribeAllDbInfoResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeAllDbInfoResultShape', ],
                'error' =>  [ 'shape' => 'DescribeAllDbInfoResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeSchemaSpaceTopResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeSchemaSpaceTopResultShape', ],
                'error' =>  [ 'shape' => 'DescribeSchemaSpaceTopResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeTableSpaceTopResultShape' => [
            'type' => 'structure',
            'members' => [
                'data' => [ 'type' => 'list', 'member' => [ 'shape' => 'TableStorageInfo', ], ],
            ],
        ],
        'DescribeTableSpaceDetailRequestShape' => [
            'type' => 'structure',
            'members' => [
                'sortField' => [ 'type' => 'string', 'locationName' => 'sortField', ],
                'sortType' => [ 'type' => 'string', 'locationName' => 'sortType', ],
                'dbName' => [ 'type' => 'string', 'locationName' => 'dbName', ],
                'tableName' => [ 'type' => 'string', 'locationName' => 'tableName', ],
                'pageIndex' => [ 'type' => 'integer', 'locationName' => 'pageIndex', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceGid' => [ 'type' => 'string', 'locationName' => 'instanceGid', ],
            ],
        ],
        'DescribeIndexsResultShape' => [
            'type' => 'structure',
            'members' => [
                'data' => [ 'type' => 'list', 'member' => [ 'shape' => 'IndexInfo', ], ],
            ],
        ],
        'DescribeAllDbInfoResultShape' => [
            'type' => 'structure',
            'members' => [
                'data' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'DescribeStoragesRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceGid' => [ 'type' => 'string', 'locationName' => 'instanceGid', ],
            ],
        ],
        'DescribeTableSpaceDetailResultShape' => [
            'type' => 'structure',
            'members' => [
                'data' => [ 'type' => 'list', 'member' => [ 'shape' => 'TableStorageInfo', ], ],
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
            ],
        ],
        'DescribeStorageTrendResultShape' => [
            'type' => 'structure',
            'members' => [
                'data' => [ 'type' => 'list', 'member' => [ 'shape' => 'MetricData', ], ],
            ],
        ],
        'DescribeAllTableInfoForDbResultShape' => [
            'type' => 'structure',
            'members' => [
                'data' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'DescribeAllTableInfoForDbResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeAllTableInfoForDbResultShape', ],
                'error' =>  [ 'shape' => 'DescribeAllTableInfoForDbResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeStoragesResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeStoragesResultShape', ],
                'error' =>  [ 'shape' => 'DescribeStoragesResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeSystemInfoRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceGid' => [ 'type' => 'string', 'locationName' => 'instanceGid', ],
            ],
        ],
        'DescribeSystemInfoResultShape' => [
            'type' => 'structure',
            'members' => [
                'bufferPoolInfo' =>  [ 'shape' => 'BufferPoolInfo', ],
                'connectionInfo' =>  [ 'shape' => 'ConnectionInfo', ],
                'serverInfo' =>  [ 'shape' => 'ServerInfo', ],
            ],
        ],
        'DescribeSystemInfoResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeSystemInfoResultShape', ],
            ],
        ],
        'CheckTableByTypeResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'CheckTableByTypeResultShape', ],
            ],
        ],
        'CheckTableTypesResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'CheckTableTypesResultShape', ],
            ],
        ],
        'CheckTableTypesResultShape' => [
            'type' => 'structure',
            'members' => [
                'data' => [ 'type' => 'list', 'member' => [ 'shape' => 'Table', ], ],
            ],
        ],
        'CheckTableTypesRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceGid' => [ 'type' => 'string', 'locationName' => 'instanceGid', ],
            ],
        ],
        'CheckTableByTypeRequestShape' => [
            'type' => 'structure',
            'members' => [
                'checkTypeId' => [ 'type' => 'long', 'locationName' => 'checkTypeId', ],
                'pageIndex' => [ 'type' => 'integer', 'locationName' => 'pageIndex', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceGid' => [ 'type' => 'string', 'locationName' => 'instanceGid', ],
            ],
        ],
        'CheckTableByTypeResultShape' => [
            'type' => 'structure',
            'members' => [
                'data' => [ 'type' => 'list', 'member' => [ 'shape' => 'FieldList', ], ],
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
            ],
        ],
    ],
];
