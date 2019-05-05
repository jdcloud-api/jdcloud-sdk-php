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
        'DBInstance' => [
            'type' => 'structure',
            'members' => [
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'instanceName' => [ 'type' => 'string', 'locationName' => 'instanceName', ],
                'engine' => [ 'type' => 'string', 'locationName' => 'engine', ],
                'engineVersion' => [ 'type' => 'string', 'locationName' => 'engineVersion', ],
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
            ],
        ],
        'Flavor' => [
            'type' => 'structure',
            'members' => [
                'cpu' => [ 'type' => 'integer', 'locationName' => 'cpu', ],
                'memory' => [ 'type' => 'integer', 'locationName' => 'memory', ],
                'iops' => [ 'type' => 'integer', 'locationName' => 'iops', ],
                'maxLink' => [ 'type' => 'integer', 'locationName' => 'maxLink', ],
                'maxDisk' => [ 'type' => 'integer', 'locationName' => 'maxDisk', ],
                'minDisk' => [ 'type' => 'integer', 'locationName' => 'minDisk', ],
                'diskStep' => [ 'type' => 'integer', 'locationName' => 'diskStep', ],
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
        'DeleteInstanceResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'ResetPasswordRequestShape' => [
            'type' => 'structure',
            'members' => [
                'accountPassword' => [ 'type' => '', 'locationName' => 'accountPassword', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'ModifyInstanceSpecRequestShape' => [
            'type' => 'structure',
            'members' => [
                'instanceClass' => [ 'type' => '', 'locationName' => 'instanceClass', ],
                'instanceStorageGB' => [ 'type' => '', 'locationName' => 'instanceStorageGB', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'ModifyInstanceSpecResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'ModifyInstanceSpecResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeFlavorsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
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
        'ModifyBackupPolicyResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'ModifyBackupPolicyResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
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
        'TagFilter' => [
            'type' => 'structure',
            'members' => [
                'key' => [ 'type' => 'string', 'locationName' => 'key', ],
                'values' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
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
                'preferredBackupTime' => [ 'type' => '', 'locationName' => 'preferredBackupTime', ],
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
        'DescribeBackupPolicyRequestShape' => [
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
        'DescribeFlavorsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeFlavorsResultShape', ],
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
        'ResetPasswordResultShape' => [
            'type' => 'structure',
            'members' => [
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
        'DescribeFlavorsResultShape' => [
            'type' => 'structure',
            'members' => [
                'flavors' => [ 'type' => 'list', 'member' => [ 'shape' => 'Flavor', ], ],
            ],
        ],
        'Sort' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'direction' => [ 'type' => 'string', 'locationName' => 'direction', ],
            ],
        ],
        'ModifyInstanceSpecResultShape' => [
            'type' => 'structure',
            'members' => [
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'orderId' => [ 'type' => 'string', 'locationName' => 'orderId', ],
            ],
        ],
        'ModifyInstanceNameRequestShape' => [
            'type' => 'structure',
            'members' => [
                'instanceName' => [ 'type' => '', 'locationName' => 'instanceName', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'DescribeAvailableZonesResultShape' => [
            'type' => 'structure',
            'members' => [
                'availableZones' => [ 'type' => 'list', 'member' => [ 'shape' => 'AvailableZones', ], ],
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
                'backupId' => [ 'type' => '', 'locationName' => 'backupId', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'CreateBackupRequestShape' => [
            'type' => 'structure',
            'members' => [
                'instanceId' => [ 'type' => '', 'locationName' => 'instanceId', ],
                'backupName' => [ 'type' => '', 'locationName' => 'backupName', ],
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
                'modifyMode' => [ 'type' => '', 'locationName' => 'modifyMode', ],
                'securityIps' => [ 'type' => '', 'locationName' => 'securityIps', ],
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
