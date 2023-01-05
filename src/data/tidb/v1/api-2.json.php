<?php
// This file was auto-generated
return [
//    'version' => '',
    'metadata' =>
    [
//        'apiVersion' => '',
//        'endpointPrefix' => 'tidb',
        'protocol' => 'json',
//        'serviceFullName' => 'tidb',
//        'serviceId' => 'tidb',
    ],
    'operations' => [
        'DescribeAccounts' => [
            'name' => 'DescribeAccounts',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}/accounts',
            ],
            'input' => [ 'shape' => 'DescribeAccountsRequestShape', ],
            'output' => [ 'shape' => 'DescribeAccountsResponseShape', ],
        ],
        'CreateAccount' => [
            'name' => 'CreateAccount',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}/accounts',
            ],
            'input' => [ 'shape' => 'CreateAccountRequestShape', ],
            'output' => [ 'shape' => 'CreateAccountResponseShape', ],
        ],
        'ResetPassword' => [
            'name' => 'ResetPassword',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}/accounts/{accountName}:resetPassword',
            ],
            'input' => [ 'shape' => 'ResetPasswordRequestShape', ],
            'output' => [ 'shape' => 'ResetPasswordResponseShape', ],
        ],
        'DescribeBackups' => [
            'name' => 'DescribeBackups',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/backups',
            ],
            'input' => [ 'shape' => 'DescribeBackupsRequestShape', ],
            'output' => [ 'shape' => 'DescribeBackupsResponseShape', ],
        ],
        'CreateBackup' => [
            'name' => 'CreateBackup',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/backups',
            ],
            'input' => [ 'shape' => 'CreateBackupRequestShape', ],
            'output' => [ 'shape' => 'CreateBackupResponseShape', ],
        ],
        'DeleteBackup' => [
            'name' => 'DeleteBackup',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/regions/{regionId}/backups/{backupId}',
            ],
            'input' => [ 'shape' => 'DeleteBackupRequestShape', ],
            'output' => [ 'shape' => 'DeleteBackupResponseShape', ],
        ],
        'DescribeOrderableInstanceType' => [
            'name' => 'DescribeOrderableInstanceType',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/orderableInstanceType',
            ],
            'input' => [ 'shape' => 'DescribeOrderableInstanceTypeRequestShape', ],
            'output' => [ 'shape' => 'DescribeOrderableInstanceTypeResponseShape', ],
        ],
        'DescribeVersions' => [
            'name' => 'DescribeVersions',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/versions',
            ],
            'input' => [ 'shape' => 'DescribeVersionsRequestShape', ],
            'output' => [ 'shape' => 'DescribeVersionsResponseShape', ],
        ],
        'CreateInstance' => [
            'name' => 'CreateInstance',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/instances',
            ],
            'input' => [ 'shape' => 'CreateInstanceRequestShape', ],
            'output' => [ 'shape' => 'CreateInstanceResponseShape', ],
        ],
        'DescribeInstanceAttributes' => [
            'name' => 'DescribeInstanceAttributes',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}',
            ],
            'input' => [ 'shape' => 'DescribeInstanceAttributesRequestShape', ],
            'output' => [ 'shape' => 'DescribeInstanceAttributesResponseShape', ],
        ],
        'DeleteInstance' => [
            'name' => 'DeleteInstance',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}',
            ],
            'input' => [ 'shape' => 'DeleteInstanceRequestShape', ],
            'output' => [ 'shape' => 'DeleteInstanceResponseShape', ],
        ],
        'DescribeInstances' => [
            'name' => 'DescribeInstances',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/instances:describeInstances',
            ],
            'input' => [ 'shape' => 'DescribeInstancesRequestShape', ],
            'output' => [ 'shape' => 'DescribeInstancesResponseShape', ],
        ],
        'DescribeInstanceClasses' => [
            'name' => 'DescribeInstanceClasses',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/instances:describeInstanceClasses',
            ],
            'input' => [ 'shape' => 'DescribeInstanceClassesRequestShape', ],
            'output' => [ 'shape' => 'DescribeInstanceClassesResponseShape', ],
        ],
        'CreateInstanceFromBackup' => [
            'name' => 'CreateInstanceFromBackup',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/instances:createInstanceFromBackup',
            ],
            'input' => [ 'shape' => 'CreateInstanceFromBackupRequestShape', ],
            'output' => [ 'shape' => 'CreateInstanceFromBackupResponseShape', ],
        ],
        'DescribeBackupPolicy' => [
            'name' => 'DescribeBackupPolicy',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}:describeBackupPolicy',
            ],
            'input' => [ 'shape' => 'DescribeBackupPolicyRequestShape', ],
            'output' => [ 'shape' => 'DescribeBackupPolicyResponseShape', ],
        ],
        'ModifyBackupPolicy' => [
            'name' => 'ModifyBackupPolicy',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}:modifyBackupPolicy',
            ],
            'input' => [ 'shape' => 'ModifyBackupPolicyRequestShape', ],
            'output' => [ 'shape' => 'ModifyBackupPolicyResponseShape', ],
        ],
        'ModifyInstanceName' => [
            'name' => 'ModifyInstanceName',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}:modifyInstanceName',
            ],
            'input' => [ 'shape' => 'ModifyInstanceNameRequestShape', ],
            'output' => [ 'shape' => 'ModifyInstanceNameResponseShape', ],
        ],
        'ModifyNodeNum' => [
            'name' => 'ModifyNodeNum',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}:modifyNodeNum',
            ],
            'input' => [ 'shape' => 'ModifyNodeNumRequestShape', ],
            'output' => [ 'shape' => 'ModifyNodeNumResponseShape', ],
        ],
        'ModifyInstanceSpec' => [
            'name' => 'ModifyInstanceSpec',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}:modifyInstanceSpec',
            ],
            'input' => [ 'shape' => 'ModifyInstanceSpecRequestShape', ],
            'output' => [ 'shape' => 'ModifyInstanceSpecResponseShape', ],
        ],
        'DescribeNodes' => [
            'name' => 'DescribeNodes',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}/nodes',
            ],
            'input' => [ 'shape' => 'DescribeNodesRequestShape', ],
            'output' => [ 'shape' => 'DescribeNodesResponseShape', ],
        ],
        'DescribeParameters' => [
            'name' => 'DescribeParameters',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}/parameters',
            ],
            'input' => [ 'shape' => 'DescribeParametersRequestShape', ],
            'output' => [ 'shape' => 'DescribeParametersResponseShape', ],
        ],
        'ModifyParameters' => [
            'name' => 'ModifyParameters',
            'http' => [
                'method' => 'PUT',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}/parameters',
            ],
            'input' => [ 'shape' => 'ModifyParametersRequestShape', ],
            'output' => [ 'shape' => 'ModifyParametersResponseShape', ],
        ],
        'RebootPod' => [
            'name' => 'RebootPod',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}:rebootpod',
            ],
            'input' => [ 'shape' => 'RebootPodRequestShape', ],
            'output' => [ 'shape' => 'RebootPodResponseShape', ],
        ],
        'UpgradeEngineVersion' => [
            'name' => 'UpgradeEngineVersion',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}:upgradeEngineVersion',
            ],
            'input' => [ 'shape' => 'UpgradeEngineVersionRequestShape', ],
            'output' => [ 'shape' => 'UpgradeEngineVersionResponseShape', ],
        ],
        'DescribeUpgradeVersions' => [
            'name' => 'DescribeUpgradeVersions',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}:describeUpgradeVersions',
            ],
            'input' => [ 'shape' => 'DescribeUpgradeVersionsRequestShape', ],
            'output' => [ 'shape' => 'DescribeUpgradeVersionsResponseShape', ],
        ],
        'DescribeUpgradePlan' => [
            'name' => 'DescribeUpgradePlan',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}:describeUpgradePlan',
            ],
            'input' => [ 'shape' => 'DescribeUpgradePlanRequestShape', ],
            'output' => [ 'shape' => 'DescribeUpgradePlanResponseShape', ],
        ],
        'EnableInternetAccess' => [
            'name' => 'EnableInternetAccess',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}:enableInternetAccess',
            ],
            'input' => [ 'shape' => 'EnableInternetAccessRequestShape', ],
            'output' => [ 'shape' => 'EnableInternetAccessResponseShape', ],
        ],
        'DisableInternetAccess' => [
            'name' => 'DisableInternetAccess',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}:disableInternetAccess',
            ],
            'input' => [ 'shape' => 'DisableInternetAccessRequestShape', ],
            'output' => [ 'shape' => 'DisableInternetAccessResponseShape', ],
        ],
        'EnableSSL' => [
            'name' => 'EnableSSL',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}/ssl:enableSSL',
            ],
            'input' => [ 'shape' => 'EnableSSLRequestShape', ],
            'output' => [ 'shape' => 'EnableSSLResponseShape', ],
        ],
        'DisableSSL' => [
            'name' => 'DisableSSL',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}/ssl:disableSSL',
            ],
            'input' => [ 'shape' => 'DisableSSLRequestShape', ],
            'output' => [ 'shape' => 'DisableSSLResponseShape', ],
        ],
        'DescribeSSL' => [
            'name' => 'DescribeSSL',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}/ssl',
            ],
            'input' => [ 'shape' => 'DescribeSSLRequestShape', ],
            'output' => [ 'shape' => 'DescribeSSLResponseShape', ],
        ],
        'DescribeDataMigration' => [
            'name' => 'DescribeDataMigration',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}/migration',
            ],
            'input' => [ 'shape' => 'DescribeDataMigrationRequestShape', ],
            'output' => [ 'shape' => 'DescribeDataMigrationResponseShape', ],
        ],
        'CreateDataMigration' => [
            'name' => 'CreateDataMigration',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}/migration',
            ],
            'input' => [ 'shape' => 'CreateDataMigrationRequestShape', ],
            'output' => [ 'shape' => 'CreateDataMigrationResponseShape', ],
        ],
        'VerifyFilefromOSS' => [
            'name' => 'VerifyFilefromOSS',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}/migration:verifyFilefromOSS',
            ],
            'input' => [ 'shape' => 'VerifyFilefromOSSRequestShape', ],
            'output' => [ 'shape' => 'VerifyFilefromOSSResponseShape', ],
        ],
        'DescribeReplications' => [
            'name' => 'DescribeReplications',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}/replications',
            ],
            'input' => [ 'shape' => 'DescribeReplicationsRequestShape', ],
            'output' => [ 'shape' => 'DescribeReplicationsResponseShape', ],
        ],
        'CreateReplication' => [
            'name' => 'CreateReplication',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}/replications',
            ],
            'input' => [ 'shape' => 'CreateReplicationRequestShape', ],
            'output' => [ 'shape' => 'CreateReplicationResponseShape', ],
        ],
        'DeleteReplication' => [
            'name' => 'DeleteReplication',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}/replications/{taskId}',
            ],
            'input' => [ 'shape' => 'DeleteReplicationRequestShape', ],
            'output' => [ 'shape' => 'DeleteReplicationResponseShape', ],
        ],
        'ResumeReplication' => [
            'name' => 'ResumeReplication',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}/replications/{taskId}:resumeReplication',
            ],
            'input' => [ 'shape' => 'ResumeReplicationRequestShape', ],
            'output' => [ 'shape' => 'ResumeReplicationResponseShape', ],
        ],
        'StopReplication' => [
            'name' => 'StopReplication',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}/replications/{taskId}:stopReplication',
            ],
            'input' => [ 'shape' => 'StopReplicationRequestShape', ],
            'output' => [ 'shape' => 'StopReplicationResponseShape', ],
        ],
        'ModifyReplication' => [
            'name' => 'ModifyReplication',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}/replications/{taskId}:modifyReplication',
            ],
            'input' => [ 'shape' => 'ModifyReplicationRequestShape', ],
            'output' => [ 'shape' => 'ModifyReplicationResponseShape', ],
        ],
        'DescribeWhiteList' => [
            'name' => 'DescribeWhiteList',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}/whiteList',
            ],
            'input' => [ 'shape' => 'DescribeWhiteListRequestShape', ],
            'output' => [ 'shape' => 'DescribeWhiteListResponseShape', ],
        ],
        'AddWhiteListGroup' => [
            'name' => 'AddWhiteListGroup',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}/whiteList',
            ],
            'input' => [ 'shape' => 'AddWhiteListGroupRequestShape', ],
            'output' => [ 'shape' => 'AddWhiteListGroupResponseShape', ],
        ],
        'ModifyWhiteList' => [
            'name' => 'ModifyWhiteList',
            'http' => [
                'method' => 'PUT',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}/whiteList',
            ],
            'input' => [ 'shape' => 'ModifyWhiteListRequestShape', ],
            'output' => [ 'shape' => 'ModifyWhiteListResponseShape', ],
        ],
        'DeleteWhiteListGroup' => [
            'name' => 'DeleteWhiteListGroup',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}/whiteList',
            ],
            'input' => [ 'shape' => 'DeleteWhiteListGroupRequestShape', ],
            'output' => [ 'shape' => 'DeleteWhiteListGroupResponseShape', ],
        ],
    ],
    'shapes' => [
        'Backup' => [
            'type' => 'structure',
            'members' => [
                'backupId' => [ 'type' => 'string', 'locationName' => 'backupId', ],
                'backupName' => [ 'type' => 'string', 'locationName' => 'backupName', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'backupStatus' => [ 'type' => 'string', 'locationName' => 'backupStatus', ],
                'backupStartTime' => [ 'type' => 'string', 'locationName' => 'backupStartTime', ],
                'backupEndTime' => [ 'type' => 'string', 'locationName' => 'backupEndTime', ],
                'backupType' => [ 'type' => 'string', 'locationName' => 'backupType', ],
                'backupMode' => [ 'type' => 'string', 'locationName' => 'backupMode', ],
                'backupSizeByte' => [ 'type' => 'long', 'locationName' => 'backupSizeByte', ],
            ],
        ],
        'BackupSpec' => [
            'type' => 'structure',
            'members' => [
                'backupName' => [ 'type' => 'string', 'locationName' => 'backupName', ],
            ],
        ],
        'ConnectionAddr' => [
            'type' => 'structure',
            'members' => [
                'addrType' => [ 'type' => 'string', 'locationName' => 'addrType', ],
                'internetAddr' => [ 'type' => 'string', 'locationName' => 'internetAddr', ],
                'intranetAddr' => [ 'type' => 'string', 'locationName' => 'intranetAddr', ],
                'port' => [ 'type' => 'string', 'locationName' => 'port', ],
            ],
        ],
        'DescribeParam' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'nodeType' => [ 'type' => 'string', 'locationName' => 'nodeType', ],
                'defaultValue' => [ 'type' => 'string', 'locationName' => 'defaultValue', ],
                'currentValue' => [ 'type' => 'string', 'locationName' => 'currentValue', ],
                'needRestart' => [ 'type' => 'boolean', 'locationName' => 'needRestart', ],
            ],
        ],
        'FilterGroup' => [
            'type' => 'structure',
            'members' => [
                'filters' => [ 'type' => 'list', 'member' => [ 'shape' => 'Filter', ], ],
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
        'Flavor' => [
            'type' => 'structure',
            'members' => [
                'instanceClass' => [ 'type' => 'string', 'locationName' => 'instanceClass', ],
                'cpu' => [ 'type' => 'integer', 'locationName' => 'cpu', ],
                'memoryGB' => [ 'type' => 'integer', 'locationName' => 'memoryGB', ],
                'defaultStorageGB' => [ 'type' => 'integer', 'locationName' => 'defaultStorageGB', ],
                'storageGB' => [ 'type' => 'list', 'member' => [ 'type' => 'integer', ], ],
            ],
        ],
        'FullImportTask' => [
            'type' => 'structure',
            'members' => [
                'ossLink' => [ 'type' => 'string', 'locationName' => 'ossLink', ],
                'dataSizeGB' => [ 'type' => 'integer', 'locationName' => 'dataSizeGB', ],
            ],
        ],
        'Instance' => [
            'type' => 'structure',
            'members' => [
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'instanceName' => [ 'type' => 'string', 'locationName' => 'instanceName', ],
                'engineVersion' => [ 'type' => 'string', 'locationName' => 'engineVersion', ],
                'minorVersion' => [ 'type' => 'string', 'locationName' => 'minorVersion', ],
                'totalNodeNum' => [ 'type' => 'integer', 'locationName' => 'totalNodeNum', ],
                'totalCPU' => [ 'type' => 'integer', 'locationName' => 'totalCPU', ],
                'totalMemoryGB' => [ 'type' => 'integer', 'locationName' => 'totalMemoryGB', ],
                'totalStorageGB' => [ 'type' => 'integer', 'locationName' => 'totalStorageGB', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'azId' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'vpcId' => [ 'type' => 'string', 'locationName' => 'vpcId', ],
                'subnetId' => [ 'type' => 'string', 'locationName' => 'subnetId', ],
                'instanceStatus' => [ 'type' => 'string', 'locationName' => 'instanceStatus', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'charge' =>  [ 'shape' => 'Charge', ],
                'tags' => [ 'type' => 'list', 'member' => [ 'shape' => 'Tag', ], ],
            ],
        ],
        'Tag' => [
            'type' => 'structure',
            'members' => [
                'key' => [ 'type' => 'string', 'locationName' => 'key', ],
                'value' => [ 'type' => 'string', 'locationName' => 'value', ],
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
        'K8sServiceAddr' => [
            'type' => 'structure',
            'members' => [
                'addrType' => [ 'type' => 'string', 'locationName' => 'addrType', ],
                'accessType' => [ 'type' => 'string', 'locationName' => 'accessType', ],
                'addr' => [ 'type' => 'string', 'locationName' => 'addr', ],
                'port' => [ 'type' => 'string', 'locationName' => 'port', ],
            ],
        ],
        'MigrationTask' => [
            'type' => 'structure',
            'members' => [
                'taskId' => [ 'type' => 'string', 'locationName' => 'taskId', ],
                'migrationType' => [ 'type' => 'string', 'locationName' => 'migrationType', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'startTime' => [ 'type' => 'string', 'locationName' => 'startTime', ],
                'endTime' => [ 'type' => 'string', 'locationName' => 'endTime', ],
                'duration' => [ 'type' => 'integer', 'locationName' => 'duration', ],
                'fileName' => [ 'type' => 'string', 'locationName' => 'fileName', ],
            ],
        ],
        'ModifyParam' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'value' => [ 'type' => 'string', 'locationName' => 'value', ],
                'nodeType' => [ 'type' => 'string', 'locationName' => 'nodeType', ],
            ],
        ],
        'NodeFlavor' => [
            'type' => 'structure',
            'members' => [
                'maxNum' => [ 'type' => 'integer', 'locationName' => 'maxNum', ],
                'minNum' => [ 'type' => 'integer', 'locationName' => 'minNum', ],
                'flavors' => [ 'type' => 'list', 'member' => [ 'shape' => 'Flavor', ], ],
            ],
        ],
        'NodeSpec' => [
            'type' => 'structure',
            'members' => [
                'nodeType' => [ 'type' => 'string', 'locationName' => 'nodeType', ],
                'nodeNum' => [ 'type' => 'integer', 'locationName' => 'nodeNum', ],
                'nodeClass' => [ 'type' => 'string', 'locationName' => 'nodeClass', ],
                'cpu' => [ 'type' => 'integer', 'locationName' => 'cpu', ],
                'memoryGB' => [ 'type' => 'integer', 'locationName' => 'memoryGB', ],
                'storageType' => [ 'type' => 'string', 'locationName' => 'storageType', ],
                'storageGB' => [ 'type' => 'integer', 'locationName' => 'storageGB', ],
            ],
        ],
        'ReplicationSpec' => [
            'type' => 'structure',
            'members' => [
                'startTS' => [ 'type' => 'string', 'locationName' => 'startTS', ],
                'replicationObjects' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'targetType' => [ 'type' => 'string', 'locationName' => 'targetType', ],
                'targetIP' => [ 'type' => 'string', 'locationName' => 'targetIP', ],
                'targetPort' => [ 'type' => 'string', 'locationName' => 'targetPort', ],
                'targetComment' => [ 'type' => 'string', 'locationName' => 'targetComment', ],
                'targetUser' => [ 'type' => 'string', 'locationName' => 'targetUser', ],
                'targetPassword' => [ 'type' => 'string', 'locationName' => 'targetPassword', ],
                'kafkaTopic' => [ 'type' => 'string', 'locationName' => 'kafkaTopic', ],
                'kafkaVersion' => [ 'type' => 'string', 'locationName' => 'kafkaVersion', ],
                'kafkaProtocol' => [ 'type' => 'string', 'locationName' => 'kafkaProtocol', ],
            ],
        ],
        'ReplicationTask' => [
            'type' => 'structure',
            'members' => [
                'taskId' => [ 'type' => 'string', 'locationName' => 'taskId', ],
                'targetType' => [ 'type' => 'string', 'locationName' => 'targetType', ],
                'replicationObjects' => [ 'type' => 'string', 'locationName' => 'replicationObjects', ],
                'targetIP' => [ 'type' => 'string', 'locationName' => 'targetIP', ],
                'targetPort' => [ 'type' => 'string', 'locationName' => 'targetPort', ],
                'targetUser' => [ 'type' => 'string', 'locationName' => 'targetUser', ],
                'kafkaTopic' => [ 'type' => 'string', 'locationName' => 'kafkaTopic', ],
                'kafkaVersion' => [ 'type' => 'string', 'locationName' => 'kafkaVersion', ],
                'targetComment' => [ 'type' => 'string', 'locationName' => 'targetComment', ],
                'taskStatus' => [ 'type' => 'string', 'locationName' => 'taskStatus', ],
                'startTime' => [ 'type' => 'string', 'locationName' => 'startTime', ],
                'checkpointTime' => [ 'type' => 'string', 'locationName' => 'checkpointTime', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
            ],
        ],
        'ResourceInfo' => [
            'type' => 'structure',
            'members' => [
                'resourceId' => [ 'type' => 'string', 'locationName' => 'resourceId', ],
                'resourceName' => [ 'type' => 'string', 'locationName' => 'resourceName', ],
            ],
        ],
        'Disk' => [
            'type' => 'structure',
            'members' => [
                'storageType' => [ 'type' => 'string', 'locationName' => 'storageType', ],
                'storageTypeStatus' => [ 'type' => 'integer', 'locationName' => 'storageTypeStatus', ],
                'orderableinstanceClasses' => [ 'type' => 'list', 'member' => [ 'shape' => 'Flavor', ], ],
            ],
        ],
        'Az' => [
            'type' => 'structure',
            'members' => [
                'azId' => [ 'type' => 'string', 'locationName' => 'azId', ],
                'azStatus' => [ 'type' => 'integer', 'locationName' => 'azStatus', ],
                'orderableStorageTypes' => [ 'type' => 'list', 'member' => [ 'shape' => 'Disk', ], ],
            ],
        ],
        'TiDBNode' => [
            'type' => 'structure',
            'members' => [
                'nodeId' => [ 'type' => 'string', 'locationName' => 'nodeId', ],
                'nodeType' => [ 'type' => 'string', 'locationName' => 'nodeType', ],
                'nodeStatus' => [ 'type' => 'string', 'locationName' => 'nodeStatus', ],
                'cpuUtil' => [ 'type' => 'float', 'locationName' => 'cpuUtil', ],
                'memeryUtil' => [ 'type' => 'float', 'locationName' => 'memeryUtil', ],
                'diskUsage' => [ 'type' => 'float', 'locationName' => 'diskUsage', ],
            ],
        ],
        'TidbInstanceAttribute' => [
            'type' => 'structure',
            'members' => [
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'instanceName' => [ 'type' => 'string', 'locationName' => 'instanceName', ],
                'engineVersion' => [ 'type' => 'string', 'locationName' => 'engineVersion', ],
                'minorVersion' => [ 'type' => 'string', 'locationName' => 'minorVersion', ],
                'totalNodeNum' => [ 'type' => 'integer', 'locationName' => 'totalNodeNum', ],
                'tidbNodeSpec' =>  [ 'shape' => 'NodeSpec', ],
                'tikvNodeSpec' =>  [ 'shape' => 'NodeSpec', ],
                'pdNodeSpec' =>  [ 'shape' => 'NodeSpec', ],
                'monitorNodeSpec' =>  [ 'shape' => 'NodeSpec', ],
                'tiflashNodeSpec' =>  [ 'shape' => 'NodeSpec', ],
                'ticdcNodeSpec' =>  [ 'shape' => 'NodeSpec', ],
                'totalCPU' => [ 'type' => 'integer', 'locationName' => 'totalCPU', ],
                'totalMemoryGB' => [ 'type' => 'integer', 'locationName' => 'totalMemoryGB', ],
                'totalStorageGB' => [ 'type' => 'integer', 'locationName' => 'totalStorageGB', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'azId' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'vpcId' => [ 'type' => 'string', 'locationName' => 'vpcId', ],
                'subnetId' => [ 'type' => 'string', 'locationName' => 'subnetId', ],
                'internalDomainName' => [ 'type' => 'string', 'locationName' => 'internalDomainName', ],
                'publicDomainName' => [ 'type' => 'string', 'locationName' => 'publicDomainName', ],
                'monitorInternalDomainName' => [ 'type' => 'string', 'locationName' => 'monitorInternalDomainName', ],
                'monitorPublicDomainName' => [ 'type' => 'string', 'locationName' => 'monitorPublicDomainName', ],
                'pdInternalDomainName' => [ 'type' => 'string', 'locationName' => 'pdInternalDomainName', ],
                'pdPublicDomainName' => [ 'type' => 'string', 'locationName' => 'pdPublicDomainName', ],
                'dmsInternalDomainName' => [ 'type' => 'string', 'locationName' => 'dmsInternalDomainName', ],
                'dmsPublicDomainName' => [ 'type' => 'string', 'locationName' => 'dmsPublicDomainName', ],
                'instancePort' => [ 'type' => 'string', 'locationName' => 'instancePort', ],
                'monitorPort' => [ 'type' => 'string', 'locationName' => 'monitorPort', ],
                'pdPort' => [ 'type' => 'string', 'locationName' => 'pdPort', ],
                'dmsPort' => [ 'type' => 'string', 'locationName' => 'dmsPort', ],
                'instanceStatus' => [ 'type' => 'string', 'locationName' => 'instanceStatus', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'charge' =>  [ 'shape' => 'Charge', ],
                'tags' => [ 'type' => 'list', 'member' => [ 'shape' => 'Tag', ], ],
            ],
        ],
        'ChargeSpec' => [
            'type' => 'structure',
            'members' => [
                'chargeMode' => [ 'type' => 'string', 'locationName' => 'chargeMode', ],
                'chargeUnit' => [ 'type' => 'string', 'locationName' => 'chargeUnit', ],
                'chargeDuration' => [ 'type' => 'integer', 'locationName' => 'chargeDuration', ],
                'autoRenew' => [ 'type' => 'boolean', 'locationName' => 'autoRenew', ],
                'autoChangeChargeMode' => [ 'type' => 'boolean', 'locationName' => 'autoChangeChargeMode', ],
                'autoChangeChargeModeDate' => [ 'type' => 'string', 'locationName' => 'autoChangeChargeModeDate', ],
                'buyScenario' => [ 'type' => 'string', 'locationName' => 'buyScenario', ],
            ],
        ],
        'TidbInstanceSpec' => [
            'type' => 'structure',
            'members' => [
                'instanceName' => [ 'type' => 'string', 'locationName' => 'instanceName', ],
                'engineVersion' => [ 'type' => 'string', 'locationName' => 'engineVersion', ],
                'tidbNodeSpec' =>  [ 'shape' => 'NodeSpec', ],
                'tikvNodeSpec' =>  [ 'shape' => 'NodeSpec', ],
                'pdNodeSpec' =>  [ 'shape' => 'NodeSpec', ],
                'monitorNodeSpec' =>  [ 'shape' => 'NodeSpec', ],
                'tiflashNodeSpec' =>  [ 'shape' => 'NodeSpec', ],
                'ticdcNodeSpec' =>  [ 'shape' => 'NodeSpec', ],
                'azId' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'vpcId' => [ 'type' => 'string', 'locationName' => 'vpcId', ],
                'subnetId' => [ 'type' => 'string', 'locationName' => 'subnetId', ],
                'chargeSpec' =>  [ 'shape' => 'ChargeSpec', ],
                'tagSpec' => [ 'type' => 'list', 'member' => [ 'shape' => 'Tag', ], ],
            ],
        ],
        'WhiteList' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'ips' => [ 'type' => 'string', 'locationName' => 'ips', ],
            ],
        ],
        'DescribeAccountsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeAccountsResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ResetPasswordResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'CreateAccountResponseShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DescribeAccountsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'CreateAccountRequestShape' => [
            'type' => 'structure',
            'members' => [
                'accountName' => [ 'type' => 'string', 'locationName' => 'accountName', ],
                'accountPassword' => [ 'type' => 'string', 'locationName' => 'accountPassword', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'DescribeAccountsResultShape' => [
            'type' => 'structure',
            'members' => [
                'accountName' => [ 'type' => 'string', 'locationName' => 'accountName', ],
                'accountStatus' => [ 'type' => 'string', 'locationName' => 'accountStatus', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
            ],
        ],
        'CreateAccountResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'ResetPasswordResponseShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'ResetPasswordRequestShape' => [
            'type' => 'structure',
            'members' => [
                'accountPassword' => [ 'type' => 'string', 'locationName' => 'accountPassword', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'accountName' => [ 'type' => 'string', 'locationName' => 'accountName', ],
            ],
        ],
        'DeleteBackupRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'backupId' => [ 'type' => 'string', 'locationName' => 'backupId', ],
            ],
        ],
        'CreateBackupResultShape' => [
            'type' => 'structure',
            'members' => [
                'backupId' => [ 'type' => 'string', 'locationName' => 'backupId', ],
            ],
        ],
        'DescribeBackupsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DescribeBackupsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeBackupsResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'CreateBackupResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'CreateBackupResultShape', ],
            ],
        ],
        'DescribeBackupsResultShape' => [
            'type' => 'structure',
            'members' => [
                'backups' => [ 'type' => 'list', 'member' => [ 'shape' => 'Backup', ], ],
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
            ],
        ],
        'DeleteBackupResponseShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'CreateBackupRequestShape' => [
            'type' => 'structure',
            'members' => [
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'backupSpec' =>  [ 'shape' => 'BackupSpec', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DeleteBackupResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DescribeOrderableInstanceTypeResultShape' => [
            'type' => 'structure',
            'members' => [
                'engineStatus' => [ 'type' => 'integer', 'locationName' => 'engineStatus', ],
                'orderableAZs' => [ 'type' => 'list', 'member' => [ 'shape' => 'Az', ], ],
            ],
        ],
        'DescribeOrderableInstanceTypeResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeOrderableInstanceTypeResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeVersionsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DescribeOrderableInstanceTypeRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DescribeVersionsResultShape' => [
            'type' => 'structure',
            'members' => [
                'versions' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'DescribeVersionsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeVersionsResultShape', ],
            ],
        ],
        'CreateInstanceResultShape' => [
            'type' => 'structure',
            'members' => [
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'orderId' => [ 'type' => 'string', 'locationName' => 'orderId', ],
            ],
        ],
        'DeleteInstanceResponseShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DescribeInstancesResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeInstancesResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ModifyNodeNumRequestShape' => [
            'type' => 'structure',
            'members' => [
                'tidbNodeNum' => [ 'type' => 'integer', 'locationName' => 'tidbNodeNum', ],
                'tikvNodeNum' => [ 'type' => 'integer', 'locationName' => 'tikvNodeNum', ],
                'pdNodeNum' => [ 'type' => 'integer', 'locationName' => 'pdNodeNum', ],
                'tiflashNodeSpec' =>  [ 'shape' => 'NodeSpec', ],
                'ticdcNodeSpec' =>  [ 'shape' => 'NodeSpec', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'DescribeInstanceAttributesRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'RebootPodResponseShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DeleteInstanceRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'DescribeInstanceClassesResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeInstanceClassesResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DisableInternetAccessResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'EnableSSLResponseShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'CreateInstanceFromBackupRequestShape' => [
            'type' => 'structure',
            'members' => [
                'backupId' => [ 'type' => 'string', 'locationName' => 'backupId', ],
                'instanceSpec' =>  [ 'shape' => 'TidbInstanceSpec', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DescribeUpgradePlanResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeUpgradePlanResultShape', ],
            ],
        ],
        'ModifyBackupPolicyRequestShape' => [
            'type' => 'structure',
            'members' => [
                'startWindow' => [ 'type' => 'string', 'locationName' => 'startWindow', ],
                'backupPeriod' => [ 'type' => 'string', 'locationName' => 'backupPeriod', ],
                'autoIncBackup' => [ 'type' => 'boolean', 'locationName' => 'autoIncBackup', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'DescribeUpgradePlanRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'CreateInstanceRequestShape' => [
            'type' => 'structure',
            'members' => [
                'instanceSpec' =>  [ 'shape' => 'TidbInstanceSpec', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'EnableInternetAccessRequestShape' => [
            'type' => 'structure',
            'members' => [
                'serviceType' => [ 'type' => 'string', 'locationName' => 'serviceType', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'RebootPodRequestShape' => [
            'type' => 'structure',
            'members' => [
                'nodeType' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'CreateInstanceFromBackupResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'CreateInstanceFromBackupResultShape', ],
            ],
        ],
        'RebootPodResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'UpgradeEngineVersionResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DeleteInstanceResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DescribeSSLResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeSSLResultShape', ],
            ],
        ],
        'DisableInternetAccessResponseShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'EnableInternetAccessResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'EnableSSLRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'DescribeBackupPolicyRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'UpgradeEngineVersionRequestShape' => [
            'type' => 'structure',
            'members' => [
                'version' => [ 'type' => 'string', 'locationName' => 'version', ],
                'timing' => [ 'type' => 'string', 'locationName' => 'timing', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'DescribeUpgradeVersionsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'DescribeInstanceClassesRequestShape' => [
            'type' => 'structure',
            'members' => [
                'storageType' => [ 'type' => 'string', 'locationName' => 'storageType', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DescribeInstanceClassesResultShape' => [
            'type' => 'structure',
            'members' => [
                'tidbFlavors' =>  [ 'shape' => 'NodeFlavor', ],
                'tikvFlavors' =>  [ 'shape' => 'NodeFlavor', ],
                'pdFlavors' =>  [ 'shape' => 'NodeFlavor', ],
                'monitorFlavors' =>  [ 'shape' => 'NodeFlavor', ],
                'tiflashFlavors' =>  [ 'shape' => 'NodeFlavor', ],
                'ticdcFlavors' =>  [ 'shape' => 'NodeFlavor', ],
            ],
        ],
        'DisableSSLResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DescribeInstancesResultShape' => [
            'type' => 'structure',
            'members' => [
                'instances' => [ 'type' => 'list', 'member' => [ 'shape' => 'Instance', ], ],
                'totalCount' => [ 'type' => 'double', 'locationName' => 'totalCount', ],
            ],
        ],
        'DescribeBackupPolicyResultShape' => [
            'type' => 'structure',
            'members' => [
                'startWindow' => [ 'type' => 'string', 'locationName' => 'startWindow', ],
                'retentionPeriod' => [ 'type' => 'integer', 'locationName' => 'retentionPeriod', ],
                'backupPeriod' => [ 'type' => 'string', 'locationName' => 'backupPeriod', ],
                'autoIncBackup' => [ 'type' => 'boolean', 'locationName' => 'autoIncBackup', ],
            ],
        ],
        'DescribeInstanceAttributesResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeInstanceAttributesResultShape', ],
            ],
        ],
        'Sort' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'direction' => [ 'type' => 'string', 'locationName' => 'direction', ],
            ],
        ],
        'ModifyParametersResponseShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DescribeUpgradePlanResultShape' => [
            'type' => 'structure',
            'members' => [
                'newVersion' => [ 'type' => 'string', 'locationName' => 'newVersion', ],
                'upgradeTime' => [ 'type' => 'string', 'locationName' => 'upgradeTime', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
            ],
        ],
        'ModifyInstanceNameRequestShape' => [
            'type' => 'structure',
            'members' => [
                'instanceName' => [ 'type' => 'string', 'locationName' => 'instanceName', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'DescribeNodesRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'sorts' => [ 'type' => 'list', 'member' => [ 'shape' => 'Sort', ], ],
                'filters' => [ 'type' => 'list', 'member' => [ 'shape' => 'Filter', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'DisableInternetAccessRequestShape' => [
            'type' => 'structure',
            'members' => [
                'serviceType' => [ 'type' => 'string', 'locationName' => 'serviceType', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'ModifyNodeNumResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'ModifyNodeNumResultShape', ],
            ],
        ],
        'DescribeNodesResultShape' => [
            'type' => 'structure',
            'members' => [
                'nodes' => [ 'type' => 'list', 'member' => [ 'shape' => 'TiDBNode', ], ],
                'totalCount' => [ 'type' => 'double', 'locationName' => 'totalCount', ],
            ],
        ],
        'ModifyBackupPolicyResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DescribeSSLResultShape' => [
            'type' => 'structure',
            'members' => [
                'available' => [ 'type' => 'boolean', 'locationName' => 'available', ],
            ],
        ],
        'DescribeUpgradeVersionsResultShape' => [
            'type' => 'structure',
            'members' => [
                'versions' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'DisableSSLResponseShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DescribeInstancesRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'filters' => [ 'type' => 'list', 'member' => [ 'shape' => 'Filter', ], ],
                'tagFilters' => [ 'type' => 'list', 'member' => [ 'shape' => 'TagFilter', ], ],
                'resourceGroupIds' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DisableSSLRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'DescribeParametersResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeParametersResultShape', ],
            ],
        ],
        'ModifyBackupPolicyResponseShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DescribeInstanceAttributesResultShape' => [
            'type' => 'structure',
            'members' => [
                'tidbInstanceAttributes' =>  [ 'shape' => 'TidbInstanceAttribute', ],
            ],
        ],
        'DescribeParametersResultShape' => [
            'type' => 'structure',
            'members' => [
                'parameters' => [ 'type' => 'list', 'member' => [ 'shape' => 'DescribeParam', ], ],
            ],
        ],
        'DescribeBackupPolicyResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeBackupPolicyResultShape', ],
            ],
        ],
        'ModifyInstanceNameResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'UpgradeEngineVersionResponseShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DescribeUpgradeVersionsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeUpgradeVersionsResultShape', ],
            ],
        ],
        'ModifyInstanceSpecResultShape' => [
            'type' => 'structure',
            'members' => [
                'orderId' => [ 'type' => 'string', 'locationName' => 'orderId', ],
            ],
        ],
        'CreateInstanceFromBackupResultShape' => [
            'type' => 'structure',
            'members' => [
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'orderId' => [ 'type' => 'string', 'locationName' => 'orderId', ],
            ],
        ],
        'ModifyInstanceNameResponseShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'EnableInternetAccessResponseShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'ModifyNodeNumResultShape' => [
            'type' => 'structure',
            'members' => [
                'orderId' => [ 'type' => 'string', 'locationName' => 'orderId', ],
            ],
        ],
        'DescribeSSLRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'CreateInstanceResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'CreateInstanceResultShape', ],
            ],
        ],
        'ModifyInstanceSpecRequestShape' => [
            'type' => 'structure',
            'members' => [
                'tikvNodeNum' => [ 'type' => 'integer', 'locationName' => 'tikvNodeNum', ],
                'pdNodeNum' => [ 'type' => 'integer', 'locationName' => 'pdNodeNum', ],
                'tidbNodeSpec' =>  [ 'shape' => 'NodeSpec', ],
                'tiflashNodeSpec' =>  [ 'shape' => 'NodeSpec', ],
                'ticdcNodeSpec' =>  [ 'shape' => 'NodeSpec', ],
                'monitorNodeSpec' =>  [ 'shape' => 'NodeSpec', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'ModifyParametersResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'EnableSSLResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'TagFilter' => [
            'type' => 'structure',
            'members' => [
                'key' => [ 'type' => 'string', 'locationName' => 'key', ],
                'values' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'DescribeNodesResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeNodesResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeParametersRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'ModifyInstanceSpecResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'ModifyInstanceSpecResultShape', ],
            ],
        ],
        'ModifyParametersRequestShape' => [
            'type' => 'structure',
            'members' => [
                'parameters' => [ 'type' => 'list', 'member' => [ 'shape' => 'ModifyParam', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'DescribeDataMigrationRequestShape' => [
            'type' => 'structure',
            'members' => [
                'queryStartTime' => [ 'type' => 'string', 'locationName' => 'queryStartTime', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'DescribeDataMigrationResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeDataMigrationResultShape', ],
            ],
        ],
        'CreateDataMigrationResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'CreateDataMigrationResponseShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DescribeDataMigrationResultShape' => [
            'type' => 'structure',
            'members' => [
                'migrationTasks' => [ 'type' => 'list', 'member' => [ 'shape' => 'MigrationTask', ], ],
            ],
        ],
        'VerifyFilefromOSSResultShape' => [
            'type' => 'structure',
            'members' => [
                'success' => [ 'type' => 'string', 'locationName' => 'success', ],
                'errMsg' => [ 'type' => 'string', 'locationName' => 'errMsg', ],
            ],
        ],
        'VerifyFilefromOSSRequestShape' => [
            'type' => 'structure',
            'members' => [
                'ossLink' => [ 'type' => 'string', 'locationName' => 'ossLink', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'VerifyFilefromOSSResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'VerifyFilefromOSSResultShape', ],
            ],
        ],
        'CreateDataMigrationRequestShape' => [
            'type' => 'structure',
            'members' => [
                'migrationType' => [ 'type' => 'string', 'locationName' => 'migrationType', ],
                'importTask' =>  [ 'shape' => 'FullImportTask', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'CreateReplicationRequestShape' => [
            'type' => 'structure',
            'members' => [
                'replication' =>  [ 'shape' => 'ReplicationSpec', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'DeleteReplicationResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'StopReplicationResponseShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DeleteReplicationResponseShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'ModifyReplicationResponseShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DescribeReplicationsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'StopReplicationRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'taskId' => [ 'type' => 'string', 'locationName' => 'taskId', ],
            ],
        ],
        'CreateReplicationResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'CreateReplicationResultShape', ],
            ],
        ],
        'DeleteReplicationRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'taskId' => [ 'type' => 'string', 'locationName' => 'taskId', ],
            ],
        ],
        'ModifyReplicationRequestShape' => [
            'type' => 'structure',
            'members' => [
                'taskId' => [ 'type' => 'string', 'locationName' => 'taskId', ],
                'targetComment' => [ 'type' => 'string', 'locationName' => 'targetComment', ],
                'targetUser' => [ 'type' => 'string', 'locationName' => 'targetUser', ],
                'targetPassword' => [ 'type' => 'string', 'locationName' => 'targetPassword', ],
                'kafkaTopic' => [ 'type' => 'string', 'locationName' => 'kafkaTopic', ],
                'kafkaVersion' => [ 'type' => 'string', 'locationName' => 'kafkaVersion', ],
                'replicationObjects' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'ModifyReplicationResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'StopReplicationResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'CreateReplicationResultShape' => [
            'type' => 'structure',
            'members' => [
                'replicationId' => [ 'type' => 'string', 'locationName' => 'replicationId', ],
            ],
        ],
        'ResumeReplicationResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'ResumeReplicationRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'taskId' => [ 'type' => 'string', 'locationName' => 'taskId', ],
            ],
        ],
        'DescribeReplicationsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeReplicationsResultShape', ],
            ],
        ],
        'ResumeReplicationResponseShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DescribeReplicationsResultShape' => [
            'type' => 'structure',
            'members' => [
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
                'replications' => [ 'type' => 'list', 'member' => [ 'shape' => 'ReplicationTask', ], ],
            ],
        ],
        'DeleteWhiteListGroupResponseShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'ModifyWhiteListResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'ModifyWhiteListResponseShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DescribeWhiteListResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeWhiteListResultShape', ],
            ],
        ],
        'DescribeWhiteListRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'AddWhiteListGroupResponseShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DescribeWhiteListResultShape' => [
            'type' => 'structure',
            'members' => [
                'whiteLists' => [ 'type' => 'list', 'member' => [ 'shape' => 'WhiteList', ], ],
            ],
        ],
        'DeleteWhiteListGroupResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DeleteWhiteListGroupRequestShape' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'AddWhiteListGroupRequestShape' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'AddWhiteListGroupResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'ModifyWhiteListRequestShape' => [
            'type' => 'structure',
            'members' => [
                'ips' => [ 'type' => 'string', 'locationName' => 'ips', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
    ],
];
