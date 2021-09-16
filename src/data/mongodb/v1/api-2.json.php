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
    ],
];
