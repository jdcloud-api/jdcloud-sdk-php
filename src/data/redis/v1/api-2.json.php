<?php
// This file was auto-generated
return [
//    'version' => '',
    'metadata' =>
    [
//        'apiVersion' => '',
//        'endpointPrefix' => 'redis',
        'protocol' => 'json',
//        'serviceFullName' => 'redis',
//        'serviceId' => 'redis',
    ],
    'operations' => [
        'DescribeCacheInstances' => [
            'name' => 'DescribeCacheInstances',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/cacheInstance',
            ],
            'input' => [ 'shape' => 'DescribeCacheInstancesRequestShape', ],
            'output' => [ 'shape' => 'DescribeCacheInstancesResponseShape', ],
        ],
        'CreateCacheInstance' => [
            'name' => 'CreateCacheInstance',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/cacheInstance',
            ],
            'input' => [ 'shape' => 'CreateCacheInstanceRequestShape', ],
            'output' => [ 'shape' => 'CreateCacheInstanceResponseShape', ],
        ],
        'DescribeCacheInstance' => [
            'name' => 'DescribeCacheInstance',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/cacheInstance/{cacheInstanceId}',
            ],
            'input' => [ 'shape' => 'DescribeCacheInstanceRequestShape', ],
            'output' => [ 'shape' => 'DescribeCacheInstanceResponseShape', ],
        ],
        'ModifyCacheInstanceAttribute' => [
            'name' => 'ModifyCacheInstanceAttribute',
            'http' => [
                'method' => 'PATCH',
                'requestUri' => '/v1/regions/{regionId}/cacheInstance/{cacheInstanceId}',
            ],
            'input' => [ 'shape' => 'ModifyCacheInstanceAttributeRequestShape', ],
            'output' => [ 'shape' => 'ModifyCacheInstanceAttributeResponseShape', ],
        ],
        'DeleteCacheInstance' => [
            'name' => 'DeleteCacheInstance',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/regions/{regionId}/cacheInstance/{cacheInstanceId}',
            ],
            'input' => [ 'shape' => 'DeleteCacheInstanceRequestShape', ],
            'output' => [ 'shape' => 'DeleteCacheInstanceResponseShape', ],
        ],
        'ModifyCacheInstanceClass' => [
            'name' => 'ModifyCacheInstanceClass',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/cacheInstance/{cacheInstanceId}:modifyCacheInstanceClass',
            ],
            'input' => [ 'shape' => 'ModifyCacheInstanceClassRequestShape', ],
            'output' => [ 'shape' => 'ModifyCacheInstanceClassResponseShape', ],
        ],
        'ResetCacheInstancePassword' => [
            'name' => 'ResetCacheInstancePassword',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/cacheInstance/{cacheInstanceId}:resetCacheInstancePassword',
            ],
            'input' => [ 'shape' => 'ResetCacheInstancePasswordRequestShape', ],
            'output' => [ 'shape' => 'ResetCacheInstancePasswordResponseShape', ],
        ],
        'DescribeInstanceConfig' => [
            'name' => 'DescribeInstanceConfig',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/cacheInstance/{cacheInstanceId}/instanceConfig',
            ],
            'input' => [ 'shape' => 'DescribeInstanceConfigRequestShape', ],
            'output' => [ 'shape' => 'DescribeInstanceConfigResponseShape', ],
        ],
        'ModifyInstanceConfig' => [
            'name' => 'ModifyInstanceConfig',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/cacheInstance/{cacheInstanceId}/instanceConfig',
            ],
            'input' => [ 'shape' => 'ModifyInstanceConfigRequestShape', ],
            'output' => [ 'shape' => 'ModifyInstanceConfigResponseShape', ],
        ],
        'DescribeBackups' => [
            'name' => 'DescribeBackups',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/cacheInstance/{cacheInstanceId}/backup',
            ],
            'input' => [ 'shape' => 'DescribeBackupsRequestShape', ],
            'output' => [ 'shape' => 'DescribeBackupsResponseShape', ],
        ],
        'CreateBackup' => [
            'name' => 'CreateBackup',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/cacheInstance/{cacheInstanceId}/backup',
            ],
            'input' => [ 'shape' => 'CreateBackupRequestShape', ],
            'output' => [ 'shape' => 'CreateBackupResponseShape', ],
        ],
        'DescribeBackupPolicy' => [
            'name' => 'DescribeBackupPolicy',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/cacheInstance/{cacheInstanceId}/backupPolicy',
            ],
            'input' => [ 'shape' => 'DescribeBackupPolicyRequestShape', ],
            'output' => [ 'shape' => 'DescribeBackupPolicyResponseShape', ],
        ],
        'ModifyBackupPolicy' => [
            'name' => 'ModifyBackupPolicy',
            'http' => [
                'method' => 'PATCH',
                'requestUri' => '/v1/regions/{regionId}/cacheInstance/{cacheInstanceId}/backupPolicy',
            ],
            'input' => [ 'shape' => 'ModifyBackupPolicyRequestShape', ],
            'output' => [ 'shape' => 'ModifyBackupPolicyResponseShape', ],
        ],
        'RestoreInstance' => [
            'name' => 'RestoreInstance',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/cacheInstance/{cacheInstanceId}/restore',
            ],
            'input' => [ 'shape' => 'RestoreInstanceRequestShape', ],
            'output' => [ 'shape' => 'RestoreInstanceResponseShape', ],
        ],
        'DescribeDownloadUrl' => [
            'name' => 'DescribeDownloadUrl',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/cacheInstance/{cacheInstanceId}/backup:describeDownloadUrl',
            ],
            'input' => [ 'shape' => 'DescribeDownloadUrlRequestShape', ],
            'output' => [ 'shape' => 'DescribeDownloadUrlResponseShape', ],
        ],
        'DescribeClusterInfo' => [
            'name' => 'DescribeClusterInfo',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/cacheInstance/{cacheInstanceId}/clusterInfo',
            ],
            'input' => [ 'shape' => 'DescribeClusterInfoRequestShape', ],
            'output' => [ 'shape' => 'DescribeClusterInfoResponseShape', ],
        ],
        'DescribeSlowLog' => [
            'name' => 'DescribeSlowLog',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/cacheInstance/{cacheInstanceId}/slowLog',
            ],
            'input' => [ 'shape' => 'DescribeSlowLogRequestShape', ],
            'output' => [ 'shape' => 'DescribeSlowLogResponseShape', ],
        ],
        'DescribeInstanceClass' => [
            'name' => 'DescribeInstanceClass',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/instanceClass',
            ],
            'input' => [ 'shape' => 'DescribeInstanceClassRequestShape', ],
            'output' => [ 'shape' => 'DescribeInstanceClassResponseShape', ],
        ],
        'DescribeUserQuota' => [
            'name' => 'DescribeUserQuota',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/quota',
            ],
            'input' => [ 'shape' => 'DescribeUserQuotaRequestShape', ],
            'output' => [ 'shape' => 'DescribeUserQuotaResponseShape', ],
        ],
    ],
    'shapes' => [
        'AzId' => [
            'type' => 'structure',
            'members' => [
                'master' => [ 'type' => 'string', 'locationName' => 'master', ],
                'slave' => [ 'type' => 'string', 'locationName' => 'slave', ],
            ],
        ],
        'AzIdSpec' => [
            'type' => 'structure',
            'members' => [
                'master' => [ 'type' => 'string', 'locationName' => 'master', ],
                'slave' => [ 'type' => 'string', 'locationName' => 'slave', ],
            ],
        ],
        'Backup' => [
            'type' => 'structure',
            'members' => [
                'baseId' => [ 'type' => 'string', 'locationName' => 'baseId', ],
                'backupFileName' => [ 'type' => 'string', 'locationName' => 'backupFileName', ],
                'cacheInstanceId' => [ 'type' => 'string', 'locationName' => 'cacheInstanceId', ],
                'backupStartTime' => [ 'type' => 'string', 'locationName' => 'backupStartTime', ],
                'backupEndTime' => [ 'type' => 'string', 'locationName' => 'backupEndTime', ],
                'backupType' => [ 'type' => 'integer', 'locationName' => 'backupType', ],
                'backupSize' => [ 'type' => 'long', 'locationName' => 'backupSize', ],
                'backupStatus' => [ 'type' => 'integer', 'locationName' => 'backupStatus', ],
                'backupDownloadURL' => [ 'type' => 'string', 'locationName' => 'backupDownloadURL', ],
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
        'CacheInstance' => [
            'type' => 'structure',
            'members' => [
                'cacheInstanceId' => [ 'type' => 'string', 'locationName' => 'cacheInstanceId', ],
                'cacheInstanceName' => [ 'type' => 'string', 'locationName' => 'cacheInstanceName', ],
                'cacheInstanceClass' => [ 'type' => 'string', 'locationName' => 'cacheInstanceClass', ],
                'cacheInstanceMemoryMB' => [ 'type' => 'integer', 'locationName' => 'cacheInstanceMemoryMB', ],
                'cacheInstanceStatus' => [ 'type' => 'string', 'locationName' => 'cacheInstanceStatus', ],
                'cacheInstanceDescription' => [ 'type' => 'string', 'locationName' => 'cacheInstanceDescription', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'azId' =>  [ 'shape' => 'AzId', ],
                'vpcId' => [ 'type' => 'string', 'locationName' => 'vpcId', ],
                'subnetId' => [ 'type' => 'string', 'locationName' => 'subnetId', ],
                'connectionDomain' => [ 'type' => 'string', 'locationName' => 'connectionDomain', ],
                'port' => [ 'type' => 'integer', 'locationName' => 'port', ],
                'charge' =>  [ 'shape' => 'Charge', ],
                'instanceVersion' => [ 'type' => 'string', 'locationName' => 'instanceVersion', ],
                'auth' => [ 'type' => 'boolean', 'locationName' => 'auth', ],
                'redisVersion' => [ 'type' => 'string', 'locationName' => 'redisVersion', ],
                'cacheInstanceType' => [ 'type' => 'string', 'locationName' => 'cacheInstanceType', ],
                'ipv6On' => [ 'type' => 'integer', 'locationName' => 'ipv6On', ],
                'tags' => [ 'type' => 'list', 'member' => [ 'shape' => 'Tag', ], ],
            ],
        ],
        'CacheInstanceSpec' => [
            'type' => 'structure',
            'members' => [
                'vpcId' => [ 'type' => 'string', 'locationName' => 'vpcId', ],
                'subnetId' => [ 'type' => 'string', 'locationName' => 'subnetId', ],
                'cacheInstanceName' => [ 'type' => 'string', 'locationName' => 'cacheInstanceName', ],
                'cacheInstanceClass' => [ 'type' => 'string', 'locationName' => 'cacheInstanceClass', ],
                'password' => [ 'type' => 'string', 'locationName' => 'password', ],
                'azId' =>  [ 'shape' => 'AzIdSpec', ],
                'cacheInstanceDescription' => [ 'type' => 'string', 'locationName' => 'cacheInstanceDescription', ],
                'redisVersion' => [ 'type' => 'string', 'locationName' => 'redisVersion', ],
                'ipv6On' => [ 'type' => 'integer', 'locationName' => 'ipv6On', ],
            ],
        ],
        'ClusterInfo' => [
            'type' => 'structure',
            'members' => [
                'proxies' =>  [ 'shape' => 'Proxy', ],
                'shards' =>  [ 'shape' => 'Shard', ],
            ],
        ],
        'Shard' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
            ],
        ],
        'Proxy' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
            ],
        ],
        'ConfigItem' => [
            'type' => 'structure',
            'members' => [
                'configName' => [ 'type' => 'string', 'locationName' => 'configName', ],
                'configValue' => [ 'type' => 'string', 'locationName' => 'configValue', ],
            ],
        ],
        'DownloadUrl' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'link' => [ 'type' => 'string', 'locationName' => 'link', ],
            ],
        ],
        'InstanceClass' => [
            'type' => 'structure',
            'members' => [
                'instanceClass' => [ 'type' => 'string', 'locationName' => 'instanceClass', ],
                'instanceType' => [ 'type' => 'string', 'locationName' => 'instanceType', ],
                'cpu' => [ 'type' => 'integer', 'locationName' => 'cpu', ],
                'memoryMB' => [ 'type' => 'integer', 'locationName' => 'memoryMB', ],
                'diskGB' => [ 'type' => 'integer', 'locationName' => 'diskGB', ],
                'maxConnection' => [ 'type' => 'integer', 'locationName' => 'maxConnection', ],
                'bandwidthMbps' => [ 'type' => 'integer', 'locationName' => 'bandwidthMbps', ],
            ],
        ],
        'InstanceName' => [
            'type' => 'structure',
            'members' => [
                'resourceId' => [ 'type' => 'string', 'locationName' => 'resourceId', ],
                'resourceName' => [ 'type' => 'string', 'locationName' => 'resourceName', ],
                'serviceCode' => [ 'type' => 'string', 'locationName' => 'serviceCode', ],
            ],
        ],
        'OrderStatus' => [
            'type' => 'structure',
            'members' => [
                'total' => [ 'type' => 'integer', 'locationName' => 'total', ],
                'success' => [ 'type' => 'integer', 'locationName' => 'success', ],
                'fail' => [ 'type' => 'integer', 'locationName' => 'fail', ],
                'inProcess' => [ 'type' => 'integer', 'locationName' => 'inProcess', ],
                'resourceIds' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'SlowLog' => [
            'type' => 'structure',
            'members' => [
                'command' => [ 'type' => 'string', 'locationName' => 'command', ],
                'startTime' => [ 'type' => 'string', 'locationName' => 'startTime', ],
                'executionTime' => [ 'type' => 'string', 'locationName' => 'executionTime', ],
                'shardId' => [ 'type' => 'string', 'locationName' => 'shardId', ],
            ],
        ],
        'ModifyCacheInstanceClassResultShape' => [
            'type' => 'structure',
            'members' => [
                'orderNum' => [ 'type' => 'string', 'locationName' => 'orderNum', ],
            ],
        ],
        'DescribeInstanceConfigResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeInstanceConfigResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeBackupsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeBackupsResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ModifyCacheInstanceAttributeResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DescribeBackupsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'startTime' => [ 'type' => 'string', 'locationName' => 'startTime', ],
                'endTime' => [ 'type' => 'string', 'locationName' => 'endTime', ],
                'baseId' => [ 'type' => 'string', 'locationName' => 'baseId', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'cacheInstanceId' => [ 'type' => 'string', 'locationName' => 'cacheInstanceId', ],
            ],
        ],
        'DescribeCacheInstancesResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeCacheInstancesResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ResetCacheInstancePasswordResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeCacheInstanceResultShape' => [
            'type' => 'structure',
            'members' => [
                'cacheInstance' =>  [ 'shape' => 'CacheInstance', ],
            ],
        ],
        'DescribeCacheInstancesRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'filters' => [ 'type' => 'list', 'member' => [ 'shape' => 'Filter', ], ],
                'sorts' => [ 'type' => 'list', 'member' => [ 'shape' => 'Sort', ], ],
                'tagFilters' => [ 'type' => 'list', 'member' => [ 'shape' => 'TagFilter', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'RestoreInstanceResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'ModifyBackupPolicyRequestShape' => [
            'type' => 'structure',
            'members' => [
                'backupTime' => [ 'type' => 'string', 'locationName' => 'backupTime', ],
                'backupPeriod' => [ 'type' => 'string', 'locationName' => 'backupPeriod', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'cacheInstanceId' => [ 'type' => 'string', 'locationName' => 'cacheInstanceId', ],
            ],
        ],
        'DescribeDownloadUrlResultShape' => [
            'type' => 'structure',
            'members' => [
                'downloadUrls' => [ 'type' => 'list', 'member' => [ 'shape' => 'DownloadUrl', ], ],
            ],
        ],
        'DeleteCacheInstanceRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'cacheInstanceId' => [ 'type' => 'string', 'locationName' => 'cacheInstanceId', ],
            ],
        ],
        'DeleteCacheInstanceResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'Sort' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'direction' => [ 'type' => 'string', 'locationName' => 'direction', ],
            ],
        ],
        'CreateCacheInstanceResultShape' => [
            'type' => 'structure',
            'members' => [
                'cacheInstanceId' => [ 'type' => 'string', 'locationName' => 'cacheInstanceId', ],
                'orderNum' => [ 'type' => 'string', 'locationName' => 'orderNum', ],
            ],
        ],
        'DescribeSlowLogResultShape' => [
            'type' => 'structure',
            'members' => [
                'slowLogs' => [ 'type' => 'list', 'member' => [ 'shape' => 'SlowLog', ], ],
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
            ],
        ],
        'DescribeInstanceConfigRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'cacheInstanceId' => [ 'type' => 'string', 'locationName' => 'cacheInstanceId', ],
            ],
        ],
        'DescribeClusterInfoRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'cacheInstanceId' => [ 'type' => 'string', 'locationName' => 'cacheInstanceId', ],
            ],
        ],
        'ModifyCacheInstanceClassRequestShape' => [
            'type' => 'structure',
            'members' => [
                'cacheInstanceClass' => [ 'type' => 'string', 'locationName' => 'cacheInstanceClass', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'cacheInstanceId' => [ 'type' => 'string', 'locationName' => 'cacheInstanceId', ],
            ],
        ],
        'DescribeBackupPolicyResultShape' => [
            'type' => 'structure',
            'members' => [
                'backupPeriod' => [ 'type' => 'string', 'locationName' => 'backupPeriod', ],
                'backupTime' => [ 'type' => 'string', 'locationName' => 'backupTime', ],
                'nextBackupTime' => [ 'type' => 'string', 'locationName' => 'nextBackupTime', ],
            ],
        ],
        'ModifyInstanceConfigResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'ChargeSpec' => [
            'type' => 'structure',
            'members' => [
                'chargeMode' => [ 'type' => 'string', 'locationName' => 'chargeMode', ],
                'chargeUnit' => [ 'type' => 'string', 'locationName' => 'chargeUnit', ],
                'chargeDuration' => [ 'type' => 'integer', 'locationName' => 'chargeDuration', ],
                'autoRenew' => [ 'type' => 'boolean', 'locationName' => 'autoRenew', ],
                'buyScenario' => [ 'type' => 'string', 'locationName' => 'buyScenario', ],
            ],
        ],
        'DescribeCacheInstanceResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeCacheInstanceResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeSlowLogResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeSlowLogResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'CreateBackupResultShape' => [
            'type' => 'structure',
            'members' => [
                'baseId' => [ 'type' => 'string', 'locationName' => 'baseId', ],
            ],
        ],
        'ResetCacheInstancePasswordResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DescribeCacheInstancesResultShape' => [
            'type' => 'structure',
            'members' => [
                'cacheInstances' => [ 'type' => 'list', 'member' => [ 'shape' => 'CacheInstance', ], ],
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
            ],
        ],
        'CreateBackupRequestShape' => [
            'type' => 'structure',
            'members' => [
                'fileName' => [ 'type' => 'string', 'locationName' => 'fileName', ],
                'backupType' => [ 'type' => 'integer', 'locationName' => 'backupType', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'cacheInstanceId' => [ 'type' => 'string', 'locationName' => 'cacheInstanceId', ],
            ],
        ],
        'CreateCacheInstanceRequestShape' => [
            'type' => 'structure',
            'members' => [
                'cacheInstance' =>  [ 'shape' => 'CacheInstanceSpec', ],
                'charge' =>  [ 'shape' => 'ChargeSpec', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'CreateCacheInstanceResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'CreateCacheInstanceResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeBackupsResultShape' => [
            'type' => 'structure',
            'members' => [
                'backups' => [ 'type' => 'list', 'member' => [ 'shape' => 'Backup', ], ],
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
            ],
        ],
        'ModifyBackupPolicyResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DescribeInstanceConfigResultShape' => [
            'type' => 'structure',
            'members' => [
                'instanceConfig' => [ 'type' => 'list', 'member' => [ 'shape' => 'ConfigItem', ], ],
            ],
        ],
        'DeleteCacheInstanceResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'ModifyBackupPolicyResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeClusterInfoResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeClusterInfoResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeBackupPolicyResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeBackupPolicyResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeDownloadUrlResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeDownloadUrlResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeSlowLogRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'startTime' => [ 'type' => 'string', 'locationName' => 'startTime', ],
                'endTime' => [ 'type' => 'string', 'locationName' => 'endTime', ],
                'shardId' => [ 'type' => 'string', 'locationName' => 'shardId', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'cacheInstanceId' => [ 'type' => 'string', 'locationName' => 'cacheInstanceId', ],
            ],
        ],
        'RestoreInstanceResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'RestoreInstanceRequestShape' => [
            'type' => 'structure',
            'members' => [
                'baseId' => [ 'type' => 'string', 'locationName' => 'baseId', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'cacheInstanceId' => [ 'type' => 'string', 'locationName' => 'cacheInstanceId', ],
            ],
        ],
        'ModifyInstanceConfigResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ModifyInstanceConfigRequestShape' => [
            'type' => 'structure',
            'members' => [
                'instanceConfig' => [ 'type' => 'list', 'member' => [ 'shape' => 'ConfigItem', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'cacheInstanceId' => [ 'type' => 'string', 'locationName' => 'cacheInstanceId', ],
            ],
        ],
        'ModifyCacheInstanceClassResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'ModifyCacheInstanceClassResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ModifyCacheInstanceAttributeRequestShape' => [
            'type' => 'structure',
            'members' => [
                'cacheInstanceName' => [ 'type' => 'string', 'locationName' => 'cacheInstanceName', ],
                'cacheInstanceDescription' => [ 'type' => 'string', 'locationName' => 'cacheInstanceDescription', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'cacheInstanceId' => [ 'type' => 'string', 'locationName' => 'cacheInstanceId', ],
            ],
        ],
        'ResetCacheInstancePasswordRequestShape' => [
            'type' => 'structure',
            'members' => [
                'password' => [ 'type' => 'string', 'locationName' => 'password', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'cacheInstanceId' => [ 'type' => 'string', 'locationName' => 'cacheInstanceId', ],
            ],
        ],
        'CreateBackupResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'CreateBackupResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'TagFilter' => [
            'type' => 'structure',
            'members' => [
                'key' => [ 'type' => 'string', 'locationName' => 'key', ],
                'values' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'DescribeClusterInfoResultShape' => [
            'type' => 'structure',
            'members' => [
                'info' =>  [ 'shape' => 'ClusterInfo', ],
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
        'ModifyCacheInstanceAttributeResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeDownloadUrlRequestShape' => [
            'type' => 'structure',
            'members' => [
                'baseId' => [ 'type' => 'string', 'locationName' => 'baseId', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'cacheInstanceId' => [ 'type' => 'string', 'locationName' => 'cacheInstanceId', ],
            ],
        ],
        'DescribeCacheInstanceRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'cacheInstanceId' => [ 'type' => 'string', 'locationName' => 'cacheInstanceId', ],
            ],
        ],
        'DescribeBackupPolicyRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'cacheInstanceId' => [ 'type' => 'string', 'locationName' => 'cacheInstanceId', ],
            ],
        ],
        'DescribeInstanceClassRequestShape' => [
            'type' => 'structure',
            'members' => [
                'redisVersion' => [ 'type' => 'string', 'locationName' => 'redisVersion', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DescribeInstanceClassResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeInstanceClassResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeInstanceClassResultShape' => [
            'type' => 'structure',
            'members' => [
                'instanceClasses' => [ 'type' => 'list', 'member' => [ 'shape' => 'InstanceClass', ], ],
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
            ],
        ],
        'DescribeUserQuotaResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeUserQuotaResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'Quota' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'max' => [ 'type' => 'integer', 'locationName' => 'max', ],
                'used' => [ 'type' => 'integer', 'locationName' => 'used', ],
            ],
        ],
        'DescribeUserQuotaRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DescribeUserQuotaResultShape' => [
            'type' => 'structure',
            'members' => [
                'quota' =>  [ 'shape' => 'Quota', ],
            ],
        ],
    ],
];
