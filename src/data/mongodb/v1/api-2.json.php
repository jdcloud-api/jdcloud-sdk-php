<?php
// This file was auto-generated
return [
//    'version' => '',
    'metadata' =>
    [
//        'apiVersion' => '',
//        'endpointPrefix' => 'mongodb',
        'protocol' => 'json',
//        'serviceFullName' => 'mongodb',
//        'serviceId' => 'mongodb',
    ],
    'operations' => [
        'DescribeInstances' => [
            'name' => 'DescribeInstances',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/instances',
            ],
            'input' => [ 'shape' => 'DescribeInstancesRequestShape', ],
            'output' => [ 'shape' => 'DescribeInstancesResponseShape', ],
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
        'DeleteInstance' => [
            'name' => 'DeleteInstance',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}',
            ],
            'input' => [ 'shape' => 'DeleteInstanceRequestShape', ],
            'output' => [ 'shape' => 'DeleteInstanceResponseShape', ],
        ],
        'ResetPassword' => [
            'name' => 'ResetPassword',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}:resetPassword',
            ],
            'input' => [ 'shape' => 'ResetPasswordRequestShape', ],
            'output' => [ 'shape' => 'ResetPasswordResponseShape', ],
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
        'ModifyInstanceName' => [
            'name' => 'ModifyInstanceName',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}:modifyInstanceName',
            ],
            'input' => [ 'shape' => 'ModifyInstanceNameRequestShape', ],
            'output' => [ 'shape' => 'ModifyInstanceNameResponseShape', ],
        ],
        'DescribeBackupPolicy' => [
            'name' => 'DescribeBackupPolicy',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}/backupPolicy',
            ],
            'input' => [ 'shape' => 'DescribeBackupPolicyRequestShape', ],
            'output' => [ 'shape' => 'DescribeBackupPolicyResponseShape', ],
        ],
        'ModifyBackupPolicy' => [
            'name' => 'ModifyBackupPolicy',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}/backupPolicy',
            ],
            'input' => [ 'shape' => 'ModifyBackupPolicyRequestShape', ],
            'output' => [ 'shape' => 'ModifyBackupPolicyResponseShape', ],
        ],
        'RestoreInstance' => [
            'name' => 'RestoreInstance',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}/restoreInstance',
            ],
            'input' => [ 'shape' => 'RestoreInstanceRequestShape', ],
            'output' => [ 'shape' => 'RestoreInstanceResponseShape', ],
        ],
        'DescribeFlavors' => [
            'name' => 'DescribeFlavors',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/flavors',
            ],
            'input' => [ 'shape' => 'DescribeFlavorsRequestShape', ],
            'output' => [ 'shape' => 'DescribeFlavorsResponseShape', ],
        ],
        'DescribeAvailableZones' => [
            'name' => 'DescribeAvailableZones',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/availableZones',
            ],
            'input' => [ 'shape' => 'DescribeAvailableZonesRequestShape', ],
            'output' => [ 'shape' => 'DescribeAvailableZonesResponseShape', ],
        ],
        'RestartInstance' => [
            'name' => 'RestartInstance',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}:restartInstance',
            ],
            'input' => [ 'shape' => 'RestartInstanceRequestShape', ],
            'output' => [ 'shape' => 'RestartInstanceResponseShape', ],
        ],
        'CreateShardingInstance' => [
            'name' => 'CreateShardingInstance',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/shardingInstances',
            ],
            'input' => [ 'shape' => 'CreateShardingInstanceRequestShape', ],
            'output' => [ 'shape' => 'CreateShardingInstanceResponseShape', ],
        ],
        'ModifyNodeSpec' => [
            'name' => 'ModifyNodeSpec',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}/nodes/{nodeId}:modifyNodeSpec',
            ],
            'input' => [ 'shape' => 'ModifyNodeSpecRequestShape', ],
            'output' => [ 'shape' => 'ModifyNodeSpecResponseShape', ],
        ],
        'RestartNode' => [
            'name' => 'RestartNode',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}/nodes/{nodeId}:restartNode',
            ],
            'input' => [ 'shape' => 'RestartNodeRequestShape', ],
            'output' => [ 'shape' => 'RestartNodeResponseShape', ],
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
        'BackupDownloadURL' => [
            'name' => 'BackupDownloadURL',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/backups/{backupId}/downloadURL',
            ],
            'input' => [ 'shape' => 'BackupDownloadURLRequestShape', ],
            'output' => [ 'shape' => 'BackupDownloadURLResponseShape', ],
        ],
        'DescribeBackupSynchronicities' => [
            'name' => 'DescribeBackupSynchronicities',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/backupSynchronicities',
            ],
            'input' => [ 'shape' => 'DescribeBackupSynchronicitiesRequestShape', ],
            'output' => [ 'shape' => 'DescribeBackupSynchronicitiesResponseShape', ],
        ],
        'CreateBackupSynchronicity' => [
            'name' => 'CreateBackupSynchronicity',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/backupSynchronicities',
            ],
            'input' => [ 'shape' => 'CreateBackupSynchronicityRequestShape', ],
            'output' => [ 'shape' => 'CreateBackupSynchronicityResponseShape', ],
        ],
        'DeleteBackupSynchronicities' => [
            'name' => 'DeleteBackupSynchronicities',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/regions/{regionId}/backupSynchronicities/{serviceId}',
            ],
            'input' => [ 'shape' => 'DeleteBackupSynchronicitiesRequestShape', ],
            'output' => [ 'shape' => 'DeleteBackupSynchronicitiesResponseShape', ],
        ],
        'DescribeSecurityIps' => [
            'name' => 'DescribeSecurityIps',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}/securityIps',
            ],
            'input' => [ 'shape' => 'DescribeSecurityIpsRequestShape', ],
            'output' => [ 'shape' => 'DescribeSecurityIpsResponseShape', ],
        ],
        'ModifySecurityIps' => [
            'name' => 'ModifySecurityIps',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}/securityIps',
            ],
            'input' => [ 'shape' => 'ModifySecurityIpsRequestShape', ],
            'output' => [ 'shape' => 'ModifySecurityIpsResponseShape', ],
        ],
    ],
    'shapes' => [
        'AvailableZones' => [
            'type' => 'structure',
            'members' => [
                'az' => [ 'type' => 'string', 'locationName' => 'az', ],
                'canSale' => [ 'type' => 'boolean', 'locationName' => 'canSale', ],
            ],
        ],
        'Backup' => [
            'type' => 'structure',
            'members' => [
                'backupId' => [ 'type' => 'string', 'locationName' => 'backupId', ],
                'backupName' => [ 'type' => 'string', 'locationName' => 'backupName', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'backupStatus' => [ 'type' => 'string', 'locationName' => 'backupStatus', ],
                'backupStartTime' => [ 'type' => 'string', 'locationName' => 'backupStartTime', ],
                'backupEndTime' => [ 'type' => 'string', 'locationName' => 'backupEndTime', ],
                'backupMode' => [ 'type' => 'string', 'locationName' => 'backupMode', ],
                'backupMethod' => [ 'type' => 'string', 'locationName' => 'backupMethod', ],
                'backupSizeByte' => [ 'type' => 'integer', 'locationName' => 'backupSizeByte', ],
            ],
        ],
        'BackupDownloadURL' => [
            'type' => 'structure',
            'members' => [
                'backupName' => [ 'type' => 'string', 'locationName' => 'backupName', ],
                'backupInternetDownloadURL' => [ 'type' => 'string', 'locationName' => 'backupInternetDownloadURL', ],
                'backupIntranetDownloadURL' => [ 'type' => 'string', 'locationName' => 'backupIntranetDownloadURL', ],
                'linkExpiredTime' => [ 'type' => 'string', 'locationName' => 'linkExpiredTime', ],
            ],
        ],
        'BackupSynchronicity' => [
            'type' => 'structure',
            'members' => [
                'serviceId' => [ 'type' => 'string', 'locationName' => 'serviceId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'instanceName' => [ 'type' => 'string', 'locationName' => 'instanceName', ],
                'serviceStatus' => [ 'type' => 'string', 'locationName' => 'serviceStatus', ],
                'srcRegion' => [ 'type' => 'string', 'locationName' => 'srcRegion', ],
                'dstRegion' => [ 'type' => 'string', 'locationName' => 'dstRegion', ],
                'engine' => [ 'type' => 'string', 'locationName' => 'engine', ],
                'engineVersion' => [ 'type' => 'string', 'locationName' => 'engineVersion', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'newestDataTime' => [ 'type' => 'string', 'locationName' => 'newestDataTime', ],
            ],
        ],
        'Configserver' => [
            'type' => 'structure',
            'members' => [
                'configserverNodeId' => [ 'type' => 'string', 'locationName' => 'configserverNodeId', ],
                'configserverNodeStatus' => [ 'type' => 'string', 'locationName' => 'configserverNodeStatus', ],
                'configserverNodeName' => [ 'type' => 'string', 'locationName' => 'configserverNodeName', ],
                'configserverNodeType' => [ 'type' => 'string', 'locationName' => 'configserverNodeType', ],
                'configserverNodeAzId' => [ 'type' => 'string', 'locationName' => 'configserverNodeAzId', ],
                'configserverNodeCPU' => [ 'type' => 'integer', 'locationName' => 'configserverNodeCPU', ],
                'configserverNodeMemoryGB' => [ 'type' => 'integer', 'locationName' => 'configserverNodeMemoryGB', ],
            ],
        ],
        'Tag' => [
            'type' => 'structure',
            'members' => [
                'key' => [ 'type' => 'string', 'locationName' => 'key', ],
                'value' => [ 'type' => 'string', 'locationName' => 'value', ],
            ],
        ],
        'Mongos' => [
            'type' => 'structure',
            'members' => [
                'mongosNodeId' => [ 'type' => 'string', 'locationName' => 'mongosNodeId', ],
                'mongosNodeStatus' => [ 'type' => 'string', 'locationName' => 'mongosNodeStatus', ],
                'mongosNodeName' => [ 'type' => 'string', 'locationName' => 'mongosNodeName', ],
                'mongosNodeType' => [ 'type' => 'string', 'locationName' => 'mongosNodeType', ],
                'mongosNodeDomain' => [ 'type' => 'string', 'locationName' => 'mongosNodeDomain', ],
                'mongosNodePort' => [ 'type' => 'string', 'locationName' => 'mongosNodePort', ],
                'mongosNodeAzId' => [ 'type' => 'string', 'locationName' => 'mongosNodeAzId', ],
                'mongosNodeCPU' => [ 'type' => 'integer', 'locationName' => 'mongosNodeCPU', ],
                'mongosNodeMemoryGB' => [ 'type' => 'integer', 'locationName' => 'mongosNodeMemoryGB', ],
            ],
        ],
        'Shard' => [
            'type' => 'structure',
            'members' => [
                'shardNodeId' => [ 'type' => 'string', 'locationName' => 'shardNodeId', ],
                'shardNodeStatus' => [ 'type' => 'string', 'locationName' => 'shardNodeStatus', ],
                'shardNodeName' => [ 'type' => 'string', 'locationName' => 'shardNodeName', ],
                'shardNodeType' => [ 'type' => 'string', 'locationName' => 'shardNodeType', ],
                'shardNodeStorageGB' => [ 'type' => 'integer', 'locationName' => 'shardNodeStorageGB', ],
                'shardNodeAzId' => [ 'type' => 'string', 'locationName' => 'shardNodeAzId', ],
                'shardNodeCPU' => [ 'type' => 'integer', 'locationName' => 'shardNodeCPU', ],
                'shardNodeMemoryGB' => [ 'type' => 'integer', 'locationName' => 'shardNodeMemoryGB', ],
            ],
        ],
        'DBInstance' => [
            'type' => 'structure',
            'members' => [
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'instanceName' => [ 'type' => 'string', 'locationName' => 'instanceName', ],
                'instanceType' => [ 'type' => 'string', 'locationName' => 'instanceType', ],
                'engine' => [ 'type' => 'string', 'locationName' => 'engine', ],
                'engineVersion' => [ 'type' => 'string', 'locationName' => 'engineVersion', ],
                'instanceStorageType' => [ 'type' => 'string', 'locationName' => 'instanceStorageType', ],
                'storageEncrypted' => [ 'type' => 'boolean', 'locationName' => 'storageEncrypted', ],
                'instanceClass' => [ 'type' => 'string', 'locationName' => 'instanceClass', ],
                'instanceStorageGB' => [ 'type' => 'integer', 'locationName' => 'instanceStorageGB', ],
                'instanceCPU' => [ 'type' => 'integer', 'locationName' => 'instanceCPU', ],
                'instanceMemoryGB' => [ 'type' => 'integer', 'locationName' => 'instanceMemoryGB', ],
                'azId' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'vpcId' => [ 'type' => 'string', 'locationName' => 'vpcId', ],
                'subnetId' => [ 'type' => 'string', 'locationName' => 'subnetId', ],
                'replicaSetName' => [ 'type' => 'string', 'locationName' => 'replicaSetName', ],
                'instanceDomain' => [ 'type' => 'string', 'locationName' => 'instanceDomain', ],
                'dBName' => [ 'type' => 'string', 'locationName' => 'dBName', ],
                'accountName' => [ 'type' => 'string', 'locationName' => 'accountName', ],
                'instancePort' => [ 'type' => 'string', 'locationName' => 'instancePort', ],
                'instanceStatus' => [ 'type' => 'string', 'locationName' => 'instanceStatus', ],
                'backupRetentionPeriod' => [ 'type' => 'integer', 'locationName' => 'backupRetentionPeriod', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'preferredBackupWindow' => [ 'type' => 'string', 'locationName' => 'preferredBackupWindow', ],
                'preferredmaintenanceWindow' => [ 'type' => 'string', 'locationName' => 'preferredmaintenanceWindow', ],
                'charge' =>  [ 'shape' => 'Charge', ],
                'isSetSecurityIps' => [ 'type' => 'boolean', 'locationName' => 'isSetSecurityIps', ],
                'tags' => [ 'type' => 'list', 'member' => [ 'shape' => 'Tag', ], ],
                'mongos' => [ 'type' => 'list', 'member' => [ 'shape' => 'Mongos', ], ],
                'configserver' => [ 'type' => 'list', 'member' => [ 'shape' => 'Configserver', ], ],
                'shard' => [ 'type' => 'list', 'member' => [ 'shape' => 'Shard', ], ],
            ],
        ],
        'DBInstanceInternal' => [
            'type' => 'structure',
            'members' => [
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'instanceName' => [ 'type' => 'string', 'locationName' => 'instanceName', ],
                'instanceStatus' => [ 'type' => 'string', 'locationName' => 'instanceStatus', ],
            ],
        ],
        'DBInstanceSpec' => [
            'type' => 'structure',
            'members' => [
                'instanceName' => [ 'type' => 'string', 'locationName' => 'instanceName', ],
                'engine' => [ 'type' => 'string', 'locationName' => 'engine', ],
                'engineVersion' => [ 'type' => 'string', 'locationName' => 'engineVersion', ],
                'instanceClass' => [ 'type' => 'string', 'locationName' => 'instanceClass', ],
                'instanceStorageGB' => [ 'type' => 'integer', 'locationName' => 'instanceStorageGB', ],
                'multiAZ' => [ 'type' => 'boolean', 'locationName' => 'multiAZ', ],
                'azId' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'vpcId' => [ 'type' => 'string', 'locationName' => 'vpcId', ],
                'subnetId' => [ 'type' => 'string', 'locationName' => 'subnetId', ],
                'password' => [ 'type' => 'string', 'locationName' => 'password', ],
                'backupId' => [ 'type' => 'string', 'locationName' => 'backupId', ],
                'originDBInstanceId' => [ 'type' => 'string', 'locationName' => 'originDBInstanceId', ],
                'restoreTime' => [ 'type' => 'string', 'locationName' => 'restoreTime', ],
                'instanceStorageType' => [ 'type' => 'string', 'locationName' => 'instanceStorageType', ],
                'storageEncrypted' => [ 'type' => 'boolean', 'locationName' => 'storageEncrypted', ],
            ],
        ],
        'Flavor' => [
            'type' => 'structure',
            'members' => [
                'instanceType' => [ 'type' => 'string', 'locationName' => 'instanceType', ],
                'instanceClass' => [ 'type' => 'string', 'locationName' => 'instanceClass', ],
                'nodeRole' => [ 'type' => 'string', 'locationName' => 'nodeRole', ],
                'nodeType' => [ 'type' => 'string', 'locationName' => 'nodeType', ],
                'cpu' => [ 'type' => 'integer', 'locationName' => 'cpu', ],
                'memory' => [ 'type' => 'integer', 'locationName' => 'memory', ],
                'iops' => [ 'type' => 'integer', 'locationName' => 'iops', ],
                'maxLink' => [ 'type' => 'integer', 'locationName' => 'maxLink', ],
                'maxDisk' => [ 'type' => 'integer', 'locationName' => 'maxDisk', ],
                'minDisk' => [ 'type' => 'integer', 'locationName' => 'minDisk', ],
                'diskStep' => [ 'type' => 'integer', 'locationName' => 'diskStep', ],
                'instanceStorageType' => [ 'type' => 'string', 'locationName' => 'instanceStorageType', ],
            ],
        ],
        'MongodbInfos' => [
            'type' => 'structure',
            'members' => [
                'spaceId' => [ 'type' => 'string', 'locationName' => 'spaceId', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
            ],
        ],
        'Quota' => [
            'type' => 'structure',
            'members' => [
                'total' => [ 'type' => 'integer', 'locationName' => 'total', ],
                'use' => [ 'type' => 'integer', 'locationName' => 'use', ],
            ],
        ],
        'ShardingDBInstanceSpec' => [
            'type' => 'structure',
            'members' => [
                'instanceName' => [ 'type' => 'string', 'locationName' => 'instanceName', ],
                'engine' => [ 'type' => 'string', 'locationName' => 'engine', ],
                'engineVersion' => [ 'type' => 'string', 'locationName' => 'engineVersion', ],
                'mongosNodeType' => [ 'type' => 'string', 'locationName' => 'mongosNodeType', ],
                'mongosNodeNumber' => [ 'type' => 'integer', 'locationName' => 'mongosNodeNumber', ],
                'configserverNodeType' => [ 'type' => 'string', 'locationName' => 'configserverNodeType', ],
                'shardNodeType' => [ 'type' => 'string', 'locationName' => 'shardNodeType', ],
                'shardNodeStorageGB' => [ 'type' => 'integer', 'locationName' => 'shardNodeStorageGB', ],
                'shardNodeNumber' => [ 'type' => 'integer', 'locationName' => 'shardNodeNumber', ],
                'multiAZ' => [ 'type' => 'boolean', 'locationName' => 'multiAZ', ],
                'mongosAzId' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'shardAzId' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'vpcId' => [ 'type' => 'string', 'locationName' => 'vpcId', ],
                'subnetId' => [ 'type' => 'string', 'locationName' => 'subnetId', ],
                'password' => [ 'type' => 'string', 'locationName' => 'password', ],
                'originDBInstanceId' => [ 'type' => 'string', 'locationName' => 'originDBInstanceId', ],
                'restoreTime' => [ 'type' => 'string', 'locationName' => 'restoreTime', ],
                'instanceStorageType' => [ 'type' => 'string', 'locationName' => 'instanceStorageType', ],
                'storageEncrypted' => [ 'type' => 'boolean', 'locationName' => 'storageEncrypted', ],
                'serviceId' => [ 'type' => 'string', 'locationName' => 'serviceId', ],
            ],
        ],
        'SpaceId' => [
            'type' => 'structure',
            'members' => [
                'spaceId' => [ 'type' => 'string', 'locationName' => 'spaceId', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
            ],
        ],
        'TopologyPair' => [
            'type' => 'structure',
            'members' => [
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
                'ip' => [ 'type' => 'string', 'locationName' => 'ip', ],
                'port' => [ 'type' => 'string', 'locationName' => 'port', ],
                'floatingIp' => [ 'type' => 'string', 'locationName' => 'floatingIp', ],
            ],
        ],
        'Topology' => [
            'type' => 'structure',
            'members' => [
                'primary' =>  [ 'shape' => 'TopologyPair', ],
                'secondary' => [ 'type' => 'list', 'member' => [ 'shape' => 'TopologyPair', ], ],
                'hidden' => [ 'type' => 'list', 'member' => [ 'shape' => 'TopologyPair', ], ],
            ],
        ],
        'ResetPasswordResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ModifyNodeSpecResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'ModifyNodeSpecResultShape', ],
            ],
        ],
        'DeleteInstanceResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'ModifyInstanceSpecResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'ModifyInstanceSpecResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'RestartNodeResultShape' => [
            'type' => 'structure',
            'members' => [
                'nodeId' => [ 'type' => 'string', 'locationName' => 'nodeId', ],
            ],
        ],
        'DeleteInstanceResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'RestoreInstanceResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeInstancesResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeInstancesResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'RestoreInstanceResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'CreateInstanceResultShape' => [
            'type' => 'structure',
            'members' => [
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'orderId' => [ 'type' => 'string', 'locationName' => 'orderId', ],
            ],
        ],
        'DescribeInstancesResultShape' => [
            'type' => 'structure',
            'members' => [
                'dbInstances' => [ 'type' => 'list', 'member' => [ 'shape' => 'DBInstance', ], ],
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
            ],
        ],
        'ModifyInstanceNameResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ModifyBackupPolicyRequestShape' => [
            'type' => 'structure',
            'members' => [
                'preferredBackupTime' => [ 'type' => 'string', 'locationName' => 'preferredBackupTime', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'DeleteInstanceRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'DescribeAvailableZonesRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'CreateShardingInstanceResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'CreateShardingInstanceResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'RestartNodeResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'RestartNodeResultShape', ],
            ],
        ],
        'CreateInstanceRequestShape' => [
            'type' => 'structure',
            'members' => [
                'instanceSpec' =>  [ 'shape' => 'DBInstanceSpec', ],
                'chargeSpec' =>  [ 'shape' => 'ChargeSpec', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DescribeFlavorsResultShape' => [
            'type' => 'structure',
            'members' => [
                'flavors' => [ 'type' => 'list', 'member' => [ 'shape' => 'Flavor', ], ],
            ],
        ],
        'ModifyNodeSpecRequestShape' => [
            'type' => 'structure',
            'members' => [
                'nodeType' => [ 'type' => 'string', 'locationName' => 'nodeType', ],
                'nodeStorageGB' => [ 'type' => 'integer', 'locationName' => 'nodeStorageGB', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'nodeId' => [ 'type' => 'string', 'locationName' => 'nodeId', ],
            ],
        ],
        'ModifyNodeSpecResultShape' => [
            'type' => 'structure',
            'members' => [
                'nodeId' => [ 'type' => 'string', 'locationName' => 'nodeId', ],
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
        'CreateShardingInstanceResultShape' => [
            'type' => 'structure',
            'members' => [
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'orderId' => [ 'type' => 'string', 'locationName' => 'orderId', ],
            ],
        ],
        'DescribeBackupPolicyResultShape' => [
            'type' => 'structure',
            'members' => [
                'preferredBackupPeriod' => [ 'type' => 'string', 'locationName' => 'preferredBackupPeriod', ],
                'preferredBackupWindow' => [ 'type' => 'string', 'locationName' => 'preferredBackupWindow', ],
                'backupRetentionPeriod' => [ 'type' => 'string', 'locationName' => 'backupRetentionPeriod', ],
            ],
        ],
        'DescribeBackupPolicyResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeBackupPolicyResultShape', ],
            ],
        ],
        'RestoreInstanceRequestShape' => [
            'type' => 'structure',
            'members' => [
                'backupId' => [ 'type' => 'string', 'locationName' => 'backupId', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'ResetPasswordRequestShape' => [
            'type' => 'structure',
            'members' => [
                'accountPassword' => [ 'type' => 'string', 'locationName' => 'accountPassword', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'ModifyInstanceSpecRequestShape' => [
            'type' => 'structure',
            'members' => [
                'instanceClass' => [ 'type' => 'string', 'locationName' => 'instanceClass', ],
                'instanceStorageGB' => [ 'type' => 'integer', 'locationName' => 'instanceStorageGB', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'DescribeFlavorsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'RestartInstanceResultShape' => [
            'type' => 'structure',
            'members' => [
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'ModifyInstanceNameResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'ModifyBackupPolicyResultShape' => [
            'type' => 'structure',
            'members' => [
                'preferredBackupPeriod' => [ 'type' => 'string', 'locationName' => 'preferredBackupPeriod', ],
                'preferredBackupWindow' => [ 'type' => 'string', 'locationName' => 'preferredBackupWindow', ],
                'backupRetentionPeriod' => [ 'type' => 'string', 'locationName' => 'backupRetentionPeriod', ],
            ],
        ],
        'ModifyBackupPolicyResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'ModifyBackupPolicyResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'CreateShardingInstanceRequestShape' => [
            'type' => 'structure',
            'members' => [
                'shardingInstanceSpec' =>  [ 'shape' => 'ShardingDBInstanceSpec', ],
                'chargeSpec' =>  [ 'shape' => 'ChargeSpec', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DescribeInstancesRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'filters' => [ 'type' => 'list', 'member' => [ 'shape' => 'Filter', ], ],
                'tagFilters' => [ 'type' => 'list', 'member' => [ 'shape' => 'TagFilter', ], ],
                'sorts' => [ 'type' => 'list', 'member' => [ 'shape' => 'Sort', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DescribeBackupPolicyRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'DescribeFlavorsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeFlavorsResultShape', ],
            ],
        ],
        'RestartInstanceResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'RestartInstanceResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ResetPasswordResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'ModifyInstanceSpecResultShape' => [
            'type' => 'structure',
            'members' => [
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'orderId' => [ 'type' => 'string', 'locationName' => 'orderId', ],
            ],
        ],
        'DescribeAvailableZonesResultShape' => [
            'type' => 'structure',
            'members' => [
                'availableZones' => [ 'type' => 'list', 'member' => [ 'shape' => 'AvailableZones', ], ],
            ],
        ],
        'RestartNodeRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'nodeId' => [ 'type' => 'string', 'locationName' => 'nodeId', ],
            ],
        ],
        'CreateInstanceResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'CreateInstanceResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeAvailableZonesResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeAvailableZonesResultShape', ],
            ],
        ],
        'RestartInstanceRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'CreateBackupRequestShape' => [
            'type' => 'structure',
            'members' => [
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'backupName' => [ 'type' => 'string', 'locationName' => 'backupName', ],
                'backupMethod' => [ 'type' => 'string', 'locationName' => 'backupMethod', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'BackupDownloadURLResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'BackupDownloadURLResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeBackupsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'filters' => [ 'type' => 'list', 'member' => [ 'shape' => 'Filter', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DescribeBackupsResultShape' => [
            'type' => 'structure',
            'members' => [
                'backups' => [ 'type' => 'list', 'member' => [ 'shape' => 'Backup', ], ],
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
            ],
        ],
        'DeleteBackupResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DeleteBackupResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'BackupDownloadURLResultShape' => [
            'type' => 'structure',
            'members' => [
                'backupDownloadURL' =>  [ 'shape' => 'BackupDownloadURL', ],
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
        'DescribeBackupsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeBackupsResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'BackupDownloadURLRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'backupId' => [ 'type' => 'string', 'locationName' => 'backupId', ],
            ],
        ],
        'CreateBackupResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'CreateBackupResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DeleteBackupSynchronicitiesResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DeleteBackupSynchronicitiesResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeBackupSynchronicitiesRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'filters' => [ 'type' => 'list', 'member' => [ 'shape' => 'Filter', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'CreateBackupSynchronicityRequestShape' => [
            'type' => 'structure',
            'members' => [
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'srcRegion' => [ 'type' => 'string', 'locationName' => 'srcRegion', ],
                'dstRegion' => [ 'type' => 'string', 'locationName' => 'dstRegion', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'CreateBackupSynchronicityResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'CreateBackupSynchronicityResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeBackupSynchronicitiesResultShape' => [
            'type' => 'structure',
            'members' => [
                'backupSynchronicities' => [ 'type' => 'list', 'member' => [ 'shape' => 'BackupSynchronicity', ], ],
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
            ],
        ],
        'DeleteBackupSynchronicitiesRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'serviceId' => [ 'type' => 'string', 'locationName' => 'serviceId', ],
            ],
        ],
        'CreateBackupSynchronicityResultShape' => [
            'type' => 'structure',
            'members' => [
                'serviceId' => [ 'type' => 'string', 'locationName' => 'serviceId', ],
            ],
        ],
        'DeleteBackupSynchronicitiesResultShape' => [
            'type' => 'structure',
            'members' => [
                'serviceId' => [ 'type' => 'string', 'locationName' => 'serviceId', ],
            ],
        ],
        'DescribeBackupSynchronicitiesResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeBackupSynchronicitiesResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ModifySecurityIpsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeSecurityIpsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'DescribeSecurityIpsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeSecurityIpsResultShape', ],
            ],
        ],
        'ModifySecurityIpsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'modifyMode' => [ 'type' => 'string', 'locationName' => 'modifyMode', ],
                'securityIps' => [ 'type' => 'string', 'locationName' => 'securityIps', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'ModifySecurityIpsResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DescribeSecurityIpsResultShape' => [
            'type' => 'structure',
            'members' => [
                'securityIps' => [ 'type' => 'string', 'locationName' => 'securityIps', ],
            ],
        ],
    ],
];
