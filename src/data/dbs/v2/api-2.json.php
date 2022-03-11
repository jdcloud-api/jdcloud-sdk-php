<?php
// This file was auto-generated
return [
//    'version' => '',
    'metadata' =>
    [
//        'apiVersion' => '',
//        'endpointPrefix' => 'dbs',
        'protocol' => 'json',
//        'serviceFullName' => 'dbs',
//        'serviceId' => 'dbs',
    ],
    'operations' => [
        'DescribeBackupPlans' => [
            'name' => 'DescribeBackupPlans',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v2/regions/{regionId}/backupPlans',
            ],
            'input' => [ 'shape' => 'DescribeBackupPlansRequestShape', ],
            'output' => [ 'shape' => 'DescribeBackupPlansResponseShape', ],
        ],
        'CreateBackupPlan' => [
            'name' => 'CreateBackupPlan',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v2/regions/{regionId}/backupPlans',
            ],
            'input' => [ 'shape' => 'CreateBackupPlanRequestShape', ],
            'output' => [ 'shape' => 'CreateBackupPlanResponseShape', ],
        ],
        'DescribeBackupPlanAttributes' => [
            'name' => 'DescribeBackupPlanAttributes',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v2/regions/{regionId}/backupPlans/{backupPlanId}',
            ],
            'input' => [ 'shape' => 'DescribeBackupPlanAttributesRequestShape', ],
            'output' => [ 'shape' => 'DescribeBackupPlanAttributesResponseShape', ],
        ],
        'DeleteBackupPlan' => [
            'name' => 'DeleteBackupPlan',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v2/regions/{regionId}/backupPlans/{backupPlanId}',
            ],
            'input' => [ 'shape' => 'DeleteBackupPlanRequestShape', ],
            'output' => [ 'shape' => 'DeleteBackupPlanResponseShape', ],
        ],
        'CreateLogicalBackup' => [
            'name' => 'CreateLogicalBackup',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v2/regions/{regionId}/backupPlans/{backupPlanId}:createLogicalBackup',
            ],
            'input' => [ 'shape' => 'CreateLogicalBackupRequestShape', ],
            'output' => [ 'shape' => 'CreateLogicalBackupResponseShape', ],
        ],
        'CreatePhysicalBackup' => [
            'name' => 'CreatePhysicalBackup',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v2/regions/{regionId}/backupPlans/{backupPlanId}:createPhysicalBackup',
            ],
            'input' => [ 'shape' => 'CreatePhysicalBackupRequestShape', ],
            'output' => [ 'shape' => 'CreatePhysicalBackupResponseShape', ],
        ],
        'DeleteBackup' => [
            'name' => 'DeleteBackup',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v2/regions/{regionId}/backupPlans/{backupPlanId}/backup/{backupId}',
            ],
            'input' => [ 'shape' => 'DeleteBackupRequestShape', ],
            'output' => [ 'shape' => 'DeleteBackupResponseShape', ],
        ],
    ],
    'shapes' => [
        'AgentReg' => [
            'type' => 'structure',
            'members' => [
                'ip' => [ 'type' => 'string', 'locationName' => 'ip', ],
                'mac' => [ 'type' => 'string', 'locationName' => 'mac', ],
                'hostname' => [ 'type' => 'string', 'locationName' => 'hostname', ],
                'stat' => [ 'type' => 'string', 'locationName' => 'stat', ],
                'ver' => [ 'type' => 'string', 'locationName' => 'ver', ],
            ],
        ],
        'EngineRelatedConfig' => [
            'type' => 'structure',
            'members' => [
                'myconfPath' => [ 'type' => 'string', 'locationName' => 'myconfPath', ],
            ],
        ],
        'DataSourceEntry' => [
            'type' => 'structure',
            'members' => [
                'sourceEngine' => [ 'type' => 'string', 'locationName' => 'sourceEngine', ],
                'networkType' => [ 'type' => 'string', 'locationName' => 'networkType', ],
                'port' => [ 'type' => 'integer', 'locationName' => 'port', ],
                'accountNames' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'engineRelatedConfig' =>  [ 'shape' => 'EngineRelatedConfig', ],
            ],
        ],
        'AgentAttributes' => [
            'type' => 'structure',
            'members' => [
                'agentId' => [ 'type' => 'string', 'locationName' => 'agentId', ],
                'hostName' => [ 'type' => 'string', 'locationName' => 'hostName', ],
                'ip' => [ 'type' => 'string', 'locationName' => 'ip', ],
                'agentStatus' => [ 'type' => 'string', 'locationName' => 'agentStatus', ],
                'dataSource' => [ 'type' => 'list', 'member' => [ 'shape' => 'DataSourceEntry', ], ],
            ],
        ],
        'Agent' => [
            'type' => 'structure',
            'members' => [
                'agentId' => [ 'type' => 'string', 'locationName' => 'agentId', ],
                'agentName' => [ 'type' => 'string', 'locationName' => 'agentName', ],
                'ip' => [ 'type' => 'string', 'locationName' => 'ip', ],
                'hostName' => [ 'type' => 'string', 'locationName' => 'hostName', ],
            ],
        ],
        'BackupBriefInfo' => [
            'type' => 'structure',
            'members' => [
                'fileUuid' => [ 'type' => 'string', 'locationName' => 'fileUuid', ],
                'fileName' => [ 'type' => 'string', 'locationName' => 'fileName', ],
            ],
        ],
        'ShouldDelBackups' => [
            'type' => 'structure',
            'members' => [
                'backupType' => [ 'type' => 'string', 'locationName' => 'backupType', ],
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
                'backupFiles' => [ 'type' => 'list', 'member' => [ 'shape' => 'BackupBriefInfo', ], ],
            ],
        ],
        'BackupFile' => [
            'type' => 'structure',
            'members' => [
                'planId' => [ 'type' => 'string', 'locationName' => 'planId', ],
                'backupType' => [ 'type' => 'string', 'locationName' => 'backupType', ],
                'dataSourceId' => [ 'type' => 'string', 'locationName' => 'dataSourceId', ],
                'isManual' => [ 'type' => 'int8', 'locationName' => 'isManual', ],
                'filename' => [ 'type' => 'string', 'locationName' => 'filename', ],
                'extInfo' => [ 'type' => 'string', 'locationName' => 'extInfo', ],
                'path' => [ 'type' => 'string', 'locationName' => 'path', ],
                'size' => [ 'type' => 'long', 'locationName' => 'size', ],
                'srcSize' => [ 'type' => 'long', 'locationName' => 'srcSize', ],
                'storageType' => [ 'type' => 'string', 'locationName' => 'storageType', ],
                'taskId' => [ 'type' => 'string', 'locationName' => 'taskId', ],
                'binlogStartTime' => [ 'type' => 'string', 'locationName' => 'binlogStartTime', ],
                'binlogEndTime' => [ 'type' => 'string', 'locationName' => 'binlogEndTime', ],
                'binlogStartPos' => [ 'type' => 'uint32', 'locationName' => 'binlogStartPos', ],
                'binlogEndPos' => [ 'type' => 'uint32', 'locationName' => 'binlogEndPos', ],
                'version' => [ 'type' => 'string', 'locationName' => 'version', ],
            ],
        ],
        'CreateBackupPlan' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'servicePackage' => [ 'type' => 'string', 'locationName' => 'servicePackage', ],
                'chargeSpec' =>  [ 'shape' => 'ChargeSpec', ],
            ],
        ],
        'ResourceInfo' => [
            'type' => 'structure',
            'members' => [
                'resourceId' => [ 'type' => 'string', 'locationName' => 'resourceId', ],
                'resourceName' => [ 'type' => 'string', 'locationName' => 'resourceName', ],
            ],
        ],
        'BackupPlan' => [
            'type' => 'structure',
            'members' => [
                'backupPlanName' => [ 'type' => 'string', 'locationName' => 'backupPlanName', ],
                'backupPlanId' => [ 'type' => 'string', 'locationName' => 'backupPlanId', ],
                'backupPlanStatus' => [ 'type' => 'string', 'locationName' => 'backupPlanStatus', ],
                'sourceEngine' => [ 'type' => 'string', 'locationName' => 'sourceEngine', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'charge' =>  [ 'shape' => 'Charge', ],
            ],
        ],
        'AgentPlan' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
                'backupType' => [ 'type' => 'string', 'locationName' => 'backupType', ],
                'schedule' =>  [ 'shape' => 'AgentBackupSchedule', ],
                'datasource' =>  [ 'shape' => 'AgentDataSource', ],
                'databases' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'tables' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'useBinlog' => [ 'type' => 'boolean', 'locationName' => 'useBinlog', ],
            ],
        ],
        'AgentDataSource' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
                'dsType' => [ 'type' => 'string', 'locationName' => 'dsType', ],
                'port' => [ 'type' => 'integer', 'locationName' => 'port', ],
                'accountName' => [ 'type' => 'string', 'locationName' => 'accountName', ],
                'password' => [ 'type' => 'string', 'locationName' => 'password', ],
                'cnfPath' => [ 'type' => 'string', 'locationName' => 'cnfPath', ],
            ],
        ],
        'SourceEndpoint' => [
            'type' => 'structure',
            'members' => [
                'networkType' => [ 'type' => 'string', 'locationName' => 'networkType', ],
                'port' => [ 'type' => 'integer', 'locationName' => 'port', ],
                'backupAgentId' => [ 'type' => 'string', 'locationName' => 'backupAgentId', ],
                'accountName' => [ 'type' => 'string', 'locationName' => 'accountName', ],
                'password' => [ 'type' => 'string', 'locationName' => 'password', ],
                'engineRelatedConfig' =>  [ 'shape' => 'EngineRelatedConfig', ],
            ],
        ],
        'Charge' => [
            'type' => 'structure',
            'members' => [
                'chargeMode' => [ 'type' => 'string', 'locationName' => 'chargeMode', ],
                'chargeStatus' => [ 'type' => 'string', 'locationName' => 'chargeStatus', ],
                'chargeStartTime' => [ 'type' => 'string', 'locationName' => 'chargeStartTime', ],
                'chargeExpiredTime' => [ 'type' => 'string', 'locationName' => 'chargeExpiredTime', ],
                'chargeRetireTime' => [ 'type' => 'string', 'locationName' => 'chargeRetireTime', ],
            ],
        ],
        'BackupObjects' => [
            'type' => 'structure',
            'members' => [
                'database' => [ 'type' => 'string', 'locationName' => 'database', ],
                'objects' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'BackupPlanAttributes' => [
            'type' => 'structure',
            'members' => [
                'backupPlanName' => [ 'type' => 'string', 'locationName' => 'backupPlanName', ],
                'backupPlanId' => [ 'type' => 'string', 'locationName' => 'backupPlanId', ],
                'backupPlanStatus' => [ 'type' => 'string', 'locationName' => 'backupPlanStatus', ],
                'errorMessages' => [ 'type' => 'string', 'locationName' => 'errorMessages', ],
                'sourceEngine' => [ 'type' => 'string', 'locationName' => 'sourceEngine', ],
                'servicePackage' => [ 'type' => 'string', 'locationName' => 'servicePackage', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'charge' =>  [ 'shape' => 'Charge', ],
                'backupType' => [ 'type' => 'string', 'locationName' => 'backupType', ],
                'enableBackupLogs' => [ 'type' => 'boolean', 'locationName' => 'enableBackupLogs', ],
                'logBackupRetentionPeriod' => [ 'type' => 'integer', 'locationName' => 'logBackupRetentionPeriod', ],
                'fullBackupRetentionPeriod' => [ 'type' => 'integer', 'locationName' => 'fullBackupRetentionPeriod', ],
                'fullBackupSchedule' =>  [ 'shape' => 'BackupSchedule', ],
                'sourceEndpoint' =>  [ 'shape' => 'SourceEndpoint', ],
                'backupObjects' =>  [ 'shape' => 'BackupObjects', ],
            ],
        ],
        'BackupSchedule' => [
            'type' => 'structure',
            'members' => [
                'period' => [ 'type' => 'string', 'locationName' => 'period', ],
                'days' => [ 'type' => 'list', 'member' => [ 'type' => 'integer', ], ],
                'startTime' => [ 'type' => 'string', 'locationName' => 'startTime', ],
            ],
        ],
        'ChargeSpec' => [
            'type' => 'structure',
            'members' => [
                'chargeMode' => [ 'type' => 'string', 'locationName' => 'chargeMode', ],
                'chargeUnit' => [ 'type' => 'string', 'locationName' => 'chargeUnit', ],
                'chargeDuration' => [ 'type' => 'integer', 'locationName' => 'chargeDuration', ],
            ],
        ],
        'AgentBackupSchedule' => [
            'type' => 'structure',
            'members' => [
                'period' => [ 'type' => 'string', 'locationName' => 'period', ],
                'days' => [ 'type' => 'string', 'locationName' => 'days', ],
                'startTime' => [ 'type' => 'string', 'locationName' => 'startTime', ],
            ],
        ],
        'BinlogBackup' => [
            'type' => 'structure',
            'members' => [
                'backupId' => [ 'type' => 'string', 'locationName' => 'backupId', ],
                'sizeByte' => [ 'type' => 'long', 'locationName' => 'sizeByte', ],
                'isManual' => [ 'type' => 'int8', 'locationName' => 'isManual', ],
                'binlogStartTime' => [ 'type' => 'string', 'locationName' => 'binlogStartTime', ],
                'binlogEndTime' => [ 'type' => 'string', 'locationName' => 'binlogEndTime', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'errorMessages' => [ 'type' => 'string', 'locationName' => 'errorMessages', ],
                'ip' => [ 'type' => 'string', 'locationName' => 'ip', ],
                'port' => [ 'type' => 'integer', 'locationName' => 'port', ],
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
        'PhysicalBackups' => [
            'type' => 'structure',
            'members' => [
                'backupId' => [ 'type' => 'string', 'locationName' => 'backupId', ],
                'backupStartTime' => [ 'type' => 'string', 'locationName' => 'backupStartTime', ],
                'backupEndTime' => [ 'type' => 'string', 'locationName' => 'backupEndTime', ],
                'backupExpiredTime' => [ 'type' => 'string', 'locationName' => 'backupExpiredTime', ],
                'sizeByte' => [ 'type' => 'long', 'locationName' => 'sizeByte', ],
                'isManual' => [ 'type' => 'int8', 'locationName' => 'isManual', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'errorMessages' => [ 'type' => 'string', 'locationName' => 'errorMessages', ],
                'ip' => [ 'type' => 'string', 'locationName' => 'ip', ],
                'port' => [ 'type' => 'integer', 'locationName' => 'port', ],
            ],
        ],
        'LogicalBackups' => [
            'type' => 'structure',
            'members' => [
                'backupId' => [ 'type' => 'string', 'locationName' => 'backupId', ],
                'backupStartTime' => [ 'type' => 'string', 'locationName' => 'backupStartTime', ],
                'backupEndTime' => [ 'type' => 'string', 'locationName' => 'backupEndTime', ],
                'backupExpiretime' => [ 'type' => 'string', 'locationName' => 'backupExpiretime', ],
                'database' => [ 'type' => 'string', 'locationName' => 'database', ],
                'objects' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'sizeByte' => [ 'type' => 'long', 'locationName' => 'sizeByte', ],
                'isManual' => [ 'type' => 'int8', 'locationName' => 'isManual', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'errorMessages' => [ 'type' => 'string', 'locationName' => 'errorMessages', ],
                'ip' => [ 'type' => 'string', 'locationName' => 'ip', ],
                'port' => [ 'type' => 'integer', 'locationName' => 'port', ],
            ],
        ],
        'InitBackupPlan' => [
            'type' => 'structure',
            'members' => [
                'sourceEngine' => [ 'type' => 'string', 'locationName' => 'sourceEngine', ],
                'backupType' => [ 'type' => 'string', 'locationName' => 'backupType', ],
                'enableBackupLogs' => [ 'type' => 'boolean', 'locationName' => 'enableBackupLogs', ],
                'logBackupRetentionPeriod' => [ 'type' => 'integer', 'locationName' => 'logBackupRetentionPeriod', ],
                'fullBackupRetentionPeriod' => [ 'type' => 'integer', 'locationName' => 'fullBackupRetentionPeriod', ],
                'fullBackupSchedule' =>  [ 'shape' => 'BackupSchedule', ],
                'sourceEndpoint' =>  [ 'shape' => 'SourceEndpoint', ],
                'backupObjects' =>  [ 'shape' => 'BackupObjects', ],
                'createNewEndpoint' => [ 'type' => 'boolean', 'locationName' => 'createNewEndpoint', ],
            ],
        ],
        'ModifyBackupObjects' => [
            'type' => 'structure',
            'members' => [
                'database' => [ 'type' => 'string', 'locationName' => 'database', ],
                'objects' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'ModifyBackupPolicy' => [
            'type' => 'structure',
            'members' => [
                'fullBackupPeriod' => [ 'type' => 'string', 'locationName' => 'fullBackupPeriod', ],
                'fullBackupDays' => [ 'type' => 'list', 'member' => [ 'type' => 'integer', ], ],
                'fullBackupStartTime' => [ 'type' => 'string', 'locationName' => 'fullBackupStartTime', ],
                'fullBackupRetentionPeriod' => [ 'type' => 'integer', 'locationName' => 'fullBackupRetentionPeriod', ],
                'logBackupRetentionPeriod' => [ 'type' => 'integer', 'locationName' => 'logBackupRetentionPeriod', ],
                'enableBackupLogs' => [ 'type' => 'boolean', 'locationName' => 'enableBackupLogs', ],
            ],
        ],
        'ModifySourceEndpoint' => [
            'type' => 'structure',
            'members' => [
                'accountName' => [ 'type' => 'string', 'locationName' => 'accountName', ],
                'password' => [ 'type' => 'string', 'locationName' => 'password', ],
                'engineRelatedConfig' =>  [ 'shape' => 'EngineRelatedConfig', ],
            ],
        ],
        'ReportPrecheck' => [
            'type' => 'structure',
            'members' => [
                'plan' => [ 'type' => 'object', 'locationName' => 'plan', ],
                'checkItem' => [ 'type' => 'string', 'locationName' => 'checkItem', ],
                'success' => [ 'type' => 'boolean', 'locationName' => 'success', ],
                'errorMessages' => [ 'type' => 'string', 'locationName' => 'errorMessages', ],
                'startTime' => [ 'type' => 'string', 'locationName' => 'startTime', ],
                'endTime' => [ 'type' => 'string', 'locationName' => 'endTime', ],
            ],
        ],
        'PrecheckPlan' => [
            'type' => 'structure',
            'members' => [
                'jobId' => [ 'type' => 'string', 'locationName' => 'jobId', ],
                'checkItem' => [ 'type' => 'string', 'locationName' => 'checkItem', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'success' => [ 'type' => 'boolean', 'locationName' => 'success', ],
                'errorMessages' => [ 'type' => 'string', 'locationName' => 'errorMessages', ],
            ],
        ],
        'RestoreSourceEndpoint' => [
            'type' => 'structure',
            'members' => [
                'backupAgentId' => [ 'type' => 'string', 'locationName' => 'backupAgentId', ],
                'networkType' => [ 'type' => 'string', 'locationName' => 'networkType', ],
                'port' => [ 'type' => 'integer', 'locationName' => 'port', ],
                'accountName' => [ 'type' => 'string', 'locationName' => 'accountName', ],
                'password' => [ 'type' => 'string', 'locationName' => 'password', ],
                'engineRelatedConfig' =>  [ 'shape' => 'EngineRelatedConfig', ],
            ],
        ],
        'RestoreTask' => [
            'type' => 'structure',
            'members' => [
                'restoreTaskId' => [ 'type' => 'string', 'locationName' => 'restoreTaskId', ],
                'restoreType' => [ 'type' => 'string', 'locationName' => 'restoreType', ],
                'dataTimestamp' => [ 'type' => 'string', 'locationName' => 'dataTimestamp', ],
                'restoreStartTime' => [ 'type' => 'string', 'locationName' => 'restoreStartTime', ],
                'restoreEndTime' => [ 'type' => 'string', 'locationName' => 'restoreEndTime', ],
                'sizeByte' => [ 'type' => 'long', 'locationName' => 'sizeByte', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'errorMessages' => [ 'type' => 'string', 'locationName' => 'errorMessages', ],
                'hostName' => [ 'type' => 'string', 'locationName' => 'hostName', ],
                'ip' => [ 'type' => 'string', 'locationName' => 'ip', ],
                'port' => [ 'type' => 'integer', 'locationName' => 'port', ],
            ],
        ],
        'RestoreTimePoint' => [
            'type' => 'structure',
            'members' => [
                'restoreTime' => [ 'type' => 'string', 'locationName' => 'restoreTime', ],
                'sourceEndpoint' =>  [ 'shape' => 'RestoreSourceEndpoint', ],
                'createNewEndpoint' => [ 'type' => 'boolean', 'locationName' => 'createNewEndpoint', ],
            ],
        ],
        'RestoreFullBackup' => [
            'type' => 'structure',
            'members' => [
                'backupId' => [ 'type' => 'string', 'locationName' => 'backupId', ],
                'sourceEndpoint' =>  [ 'shape' => 'RestoreSourceEndpoint', ],
                'createNewEndpoint' => [ 'type' => 'boolean', 'locationName' => 'createNewEndpoint', ],
            ],
        ],
        'Sort' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'direction' => [ 'type' => 'string', 'locationName' => 'direction', ],
            ],
        ],
        'Tag' => [
            'type' => 'structure',
            'members' => [
                'key' => [ 'type' => 'string', 'locationName' => 'key', ],
                'value' => [ 'type' => 'string', 'locationName' => 'value', ],
            ],
        ],
        'AgentTasks' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
                'args' => [ 'type' => 'string', 'locationName' => 'args', ],
                'taskType' => [ 'type' => 'string', 'locationName' => 'taskType', ],
            ],
        ],
        'ReportTask' => [
            'type' => 'structure',
            'members' => [
                'agent' => [ 'type' => 'object', 'locationName' => 'agent', ],
                'taskType' => [ 'type' => 'string', 'locationName' => 'taskType', ],
                'planId' => [ 'type' => 'string', 'locationName' => 'planId', ],
                'progress' => [ 'type' => 'integer', 'locationName' => 'progress', ],
                'startTime' => [ 'type' => 'string', 'locationName' => 'startTime', ],
                'endTime' => [ 'type' => 'string', 'locationName' => 'endTime', ],
                'success' => [ 'type' => 'boolean', 'locationName' => 'success', ],
                'errorMessage' => [ 'type' => 'string', 'locationName' => 'errorMessage', ],
            ],
        ],
        'ModifyTask' => [
            'type' => 'structure',
            'members' => [
                'progress' => [ 'type' => 'integer', 'locationName' => 'progress', ],
                'startTime' => [ 'type' => 'string', 'locationName' => 'startTime', ],
                'endTime' => [ 'type' => 'string', 'locationName' => 'endTime', ],
                'success' => [ 'type' => 'boolean', 'locationName' => 'success', ],
                'errorMessage' => [ 'type' => 'string', 'locationName' => 'errorMessage', ],
            ],
        ],
        'CreateBackupPlanResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'CreateBackupPlanResultShape', ],
            ],
        ],
        'DeleteBackupResponseShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'CreateLogicalBackupRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'backupPlanId' => [ 'type' => 'string', 'locationName' => 'backupPlanId', ],
            ],
        ],
        'CreateBackupPlanRequestShape' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'servicePackage' => [ 'type' => 'string', 'locationName' => 'servicePackage', ],
                'chargeSpec' =>  [ 'shape' => 'ChargeSpec', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DescribeBackupPlansResultShape' => [
            'type' => 'structure',
            'members' => [
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
                'backupPlans' => [ 'type' => 'list', 'member' => [ 'shape' => 'BackupPlan', ], ],
            ],
        ],
        'DescribeBackupPlanAttributesResultShape' => [
            'type' => 'structure',
            'members' => [
                'backupPlanAttributes' =>  [ 'shape' => 'BackupPlanAttributes', ],
            ],
        ],
        'DescribeBackupPlansRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'filters' => [ 'type' => 'list', 'member' => [ 'shape' => 'Filter', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DescribeBackupPlanAttributesRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'backupPlanId' => [ 'type' => 'string', 'locationName' => 'backupPlanId', ],
            ],
        ],
        'CreateLogicalBackupResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' => [ 'type' => 'string', 'locationName' => 'result', ],
            ],
        ],
        'DeleteBackupPlanRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'backupPlanId' => [ 'type' => 'string', 'locationName' => 'backupPlanId', ],
            ],
        ],
        'DeleteBackupPlanResponseShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DeleteBackupResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'CreateBackupPlanResultShape' => [
            'type' => 'structure',
            'members' => [
                'buyId' => [ 'type' => 'string', 'locationName' => 'buyId', ],
                'orderNubmer' => [ 'type' => 'string', 'locationName' => 'orderNubmer', ],
                'backupPlanId' => [ 'type' => 'string', 'locationName' => 'backupPlanId', ],
            ],
        ],
        'DescribeBackupPlanAttributesResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeBackupPlanAttributesResultShape', ],
            ],
        ],
        'DeleteBackupPlanResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'CreatePhysicalBackupRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'backupPlanId' => [ 'type' => 'string', 'locationName' => 'backupPlanId', ],
            ],
        ],
        'CreatePhysicalBackupResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DeleteBackupRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'backupPlanId' => [ 'type' => 'string', 'locationName' => 'backupPlanId', ],
                'backupId' => [ 'type' => 'string', 'locationName' => 'backupId', ],
            ],
        ],
        'DescribeBackupPlansResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeBackupPlansResultShape', ],
            ],
        ],
        'CreatePhysicalBackupResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' => [ 'type' => 'string', 'locationName' => 'result', ],
            ],
        ],
        'CreateLogicalBackupResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
    ],
];
