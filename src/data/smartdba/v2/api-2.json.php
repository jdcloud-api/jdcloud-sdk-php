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
        'DescribeAlarmHistory' => [
            'name' => 'DescribeAlarmHistory',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v2/regions/{regionId}/describeAlarmHistory',
            ],
            'input' => [ 'shape' => 'DescribeAlarmHistoryRequestShape', ],
            'output' => [ 'shape' => 'DescribeAlarmHistoryResponseShape', ],
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
                'type' => [ 'type' => 'string', 'locationName' => 'type', ],
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
        'DescribeAlarmHistoryResultShape' => [
            'type' => 'structure',
            'members' => [
                'data' => [ 'type' => 'list', 'member' => [ 'shape' => 'AlarmHistoryDetail', ], ],
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
            ],
        ],
    ],
];
