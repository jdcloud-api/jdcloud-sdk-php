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
        'DescribeAvailableRegion' => [
            'name' => 'DescribeAvailableRegion',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/availableRegion',
            ],
            'input' => [ 'shape' => 'DescribeAvailableRegionRequestShape', ],
            'output' => [ 'shape' => 'DescribeAvailableRegionResponseShape', ],
        ],
        'DescribeAvailableResource' => [
            'name' => 'DescribeAvailableResource',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/availableResource',
            ],
            'input' => [ 'shape' => 'DescribeAvailableResourceRequestShape', ],
            'output' => [ 'shape' => 'DescribeAvailableResourceResponseShape', ],
        ],
        'DescribeAvailableResource2' => [
            'name' => 'DescribeAvailableResource2',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/availableResource2',
            ],
            'input' => [ 'shape' => 'DescribeAvailableResource2RequestShape', ],
            'output' => [ 'shape' => 'DescribeAvailableResource2ResponseShape', ],
        ],
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
        'RecycledCacheInstance' => [
            'name' => 'RecycledCacheInstance',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/recycledCacheInstance',
            ],
            'input' => [ 'shape' => 'RecycledCacheInstanceRequestShape', ],
            'output' => [ 'shape' => 'RecycledCacheInstanceResponseShape', ],
        ],
        'DeleteRecycledCacheInstance' => [
            'name' => 'DeleteRecycledCacheInstance',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/regions/{regionId}/recycledCacheInstance/{cacheInstanceId}',
            ],
            'input' => [ 'shape' => 'DeleteRecycledCacheInstanceRequestShape', ],
            'output' => [ 'shape' => 'DeleteRecycledCacheInstanceResponseShape', ],
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
        'DescribeResizeModeIpTimeInfo' => [
            'name' => 'DescribeResizeModeIpTimeInfo',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/cacheInstance/{cacheInstanceId}/describeResizeModeIpTimeInfo',
            ],
            'input' => [ 'shape' => 'DescribeResizeModeIpTimeInfoRequestShape', ],
            'output' => [ 'shape' => 'DescribeResizeModeIpTimeInfoResponseShape', ],
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
        'SetExposeType' => [
            'name' => 'SetExposeType',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/cacheInstance/{cacheInstanceId}:setExposeType',
            ],
            'input' => [ 'shape' => 'SetExposeTypeRequestShape', ],
            'output' => [ 'shape' => 'SetExposeTypeResponseShape', ],
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
        'DescribeAnalysisTime' => [
            'name' => 'DescribeAnalysisTime',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/cacheInstance/{cacheInstanceId}/analysisTime',
            ],
            'input' => [ 'shape' => 'DescribeAnalysisTimeRequestShape', ],
            'output' => [ 'shape' => 'DescribeAnalysisTimeResponseShape', ],
        ],
        'ModifyAnalysisTime' => [
            'name' => 'ModifyAnalysisTime',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/cacheInstance/{cacheInstanceId}/analysisTime',
            ],
            'input' => [ 'shape' => 'ModifyAnalysisTimeRequestShape', ],
            'output' => [ 'shape' => 'ModifyAnalysisTimeResponseShape', ],
        ],
        'DescribeCacheAnalysisList' => [
            'name' => 'DescribeCacheAnalysisList',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/cacheInstance/{cacheInstanceId}/cacheAnalysis',
            ],
            'input' => [ 'shape' => 'DescribeCacheAnalysisListRequestShape', ],
            'output' => [ 'shape' => 'DescribeCacheAnalysisListResponseShape', ],
        ],
        'CreateCacheAnalysis' => [
            'name' => 'CreateCacheAnalysis',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/cacheInstance/{cacheInstanceId}/cacheAnalysis',
            ],
            'input' => [ 'shape' => 'CreateCacheAnalysisRequestShape', ],
            'output' => [ 'shape' => 'CreateCacheAnalysisResponseShape', ],
        ],
        'DescribeCacheAnalysisResult' => [
            'name' => 'DescribeCacheAnalysisResult',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/cacheInstance/{cacheInstanceId}/cacheAnalysis/{taskId}',
            ],
            'input' => [ 'shape' => 'DescribeCacheAnalysisResultRequestShape', ],
            'output' => [ 'shape' => 'DescribeCacheAnalysisResultResponseShape', ],
        ],
        'DescribeClientList' => [
            'name' => 'DescribeClientList',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/cacheInstance/{cacheInstanceId}/clientList',
            ],
            'input' => [ 'shape' => 'DescribeClientListRequestShape', ],
            'output' => [ 'shape' => 'DescribeClientListResponseShape', ],
        ],
        'DescribeClientIpDetail' => [
            'name' => 'DescribeClientIpDetail',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/cacheInstance/{cacheInstanceId}/clientIpDetail',
            ],
            'input' => [ 'shape' => 'DescribeClientIpDetailRequestShape', ],
            'output' => [ 'shape' => 'DescribeClientIpDetailResponseShape', ],
        ],
        'DescribeBackupInfo' => [
            'name' => 'DescribeBackupInfo',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/cacheInstance/{cacheInstanceId}/backup/{baseId}',
            ],
            'input' => [ 'shape' => 'DescribeBackupInfoRequestShape', ],
            'output' => [ 'shape' => 'DescribeBackupInfoResponseShape', ],
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
        'DescribeInstanceTLS' => [
            'name' => 'DescribeInstanceTLS',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/cacheInstance/{cacheInstanceId}/tls',
            ],
            'input' => [ 'shape' => 'DescribeInstanceTLSRequestShape', ],
            'output' => [ 'shape' => 'DescribeInstanceTLSResponseShape', ],
        ],
        'ModifyInstanceTLS' => [
            'name' => 'ModifyInstanceTLS',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/cacheInstance/{cacheInstanceId}/tls',
            ],
            'input' => [ 'shape' => 'ModifyInstanceTLSRequestShape', ],
            'output' => [ 'shape' => 'ModifyInstanceTLSResponseShape', ],
        ],
        'ModifyPublicAddress' => [
            'name' => 'ModifyPublicAddress',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/cacheInstance/{cacheInstanceId}/modifyPublicAddress',
            ],
            'input' => [ 'shape' => 'ModifyPublicAddressRequestShape', ],
            'output' => [ 'shape' => 'ModifyPublicAddressResponseShape', ],
        ],
        'DescribeUpgradeVersion' => [
            'name' => 'DescribeUpgradeVersion',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/cacheInstance/{cacheInstanceId}/describeUpgradeVersion',
            ],
            'input' => [ 'shape' => 'DescribeUpgradeVersionRequestShape', ],
            'output' => [ 'shape' => 'DescribeUpgradeVersionResponseShape', ],
        ],
        'ModifyInstanceMinorVersion' => [
            'name' => 'ModifyInstanceMinorVersion',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/cacheInstance/{cacheInstanceId}/modifyInstanceMinorVersion',
            ],
            'input' => [ 'shape' => 'ModifyInstanceMinorVersionRequestShape', ],
            'output' => [ 'shape' => 'ModifyInstanceMinorVersionResponseShape', ],
        ],
        'ModifyInstanceNodeGroupVersion' => [
            'name' => 'ModifyInstanceNodeGroupVersion',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/cacheInstance/{cacheInstanceId}/modifyInstanceNodeGroupVersion',
            ],
            'input' => [ 'shape' => 'ModifyInstanceNodeGroupVersionRequestShape', ],
            'output' => [ 'shape' => 'ModifyInstanceNodeGroupVersionResponseShape', ],
        ],
        'ModifyInstanceVersion' => [
            'name' => 'ModifyInstanceVersion',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/cacheInstance/{cacheInstanceId}/modifyInstanceVersion',
            ],
            'input' => [ 'shape' => 'ModifyInstanceVersionRequestShape', ],
            'output' => [ 'shape' => 'ModifyInstanceVersionResponseShape', ],
        ],
        'ImportData' => [
            'name' => 'ImportData',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/cacheInstance/{cacheInstanceId}/importData',
            ],
            'input' => [ 'shape' => 'ImportDataRequestShape', ],
            'output' => [ 'shape' => 'ImportDataResponseShape', ],
        ],
        'HaDiagnosis' => [
            'name' => 'HaDiagnosis',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/cacheInstance/{cacheInstanceId}/haDiagnosis',
            ],
            'input' => [ 'shape' => 'HaDiagnosisRequestShape', ],
            'output' => [ 'shape' => 'HaDiagnosisResponseShape', ],
        ],
        'DescribeAvailableSentinelList' => [
            'name' => 'DescribeAvailableSentinelList',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/cacheInstance/{cacheInstanceId}/describeAvailableSentinelList',
            ],
            'input' => [ 'shape' => 'DescribeAvailableSentinelListRequestShape', ],
            'output' => [ 'shape' => 'DescribeAvailableSentinelListResponseShape', ],
        ],
        'DescribeSentinelAvailableZones' => [
            'name' => 'DescribeSentinelAvailableZones',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/cacheInstance/{cacheInstanceId}/describeSentinelAvailableZones',
            ],
            'input' => [ 'shape' => 'DescribeSentinelAvailableZonesRequestShape', ],
            'output' => [ 'shape' => 'DescribeSentinelAvailableZonesResponseShape', ],
        ],
        'ModifySentinel' => [
            'name' => 'ModifySentinel',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/cacheInstance/{cacheInstanceId}/modifySentinel',
            ],
            'input' => [ 'shape' => 'ModifySentinelRequestShape', ],
            'output' => [ 'shape' => 'ModifySentinelResponseShape', ],
        ],
        'ModifySentinelAvailableZones' => [
            'name' => 'ModifySentinelAvailableZones',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/cacheInstance/{cacheInstanceId}/modifySentinelAvailableZones',
            ],
            'input' => [ 'shape' => 'ModifySentinelAvailableZonesRequestShape', ],
            'output' => [ 'shape' => 'ModifySentinelAvailableZonesResponseShape', ],
        ],
        'ModifyRedisAZSpecifyType' => [
            'name' => 'ModifyRedisAZSpecifyType',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/cacheInstance/{cacheInstanceId}/modifyRedisAZSpecifyType',
            ],
            'input' => [ 'shape' => 'ModifyRedisAZSpecifyTypeRequestShape', ],
            'output' => [ 'shape' => 'ModifyRedisAZSpecifyTypeResponseShape', ],
        ],
        'ModifyInstanceType' => [
            'name' => 'ModifyInstanceType',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/cacheInstance/{cacheInstanceId}/modifyInstanceType',
            ],
            'input' => [ 'shape' => 'ModifyInstanceTypeRequestShape', ],
            'output' => [ 'shape' => 'ModifyInstanceTypeResponseShape', ],
        ],
        'ModifyRedisAvailableZones' => [
            'name' => 'ModifyRedisAvailableZones',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/cacheInstance/{cacheInstanceId}/modifyRedisAvailableZones',
            ],
            'input' => [ 'shape' => 'ModifyRedisAvailableZonesRequestShape', ],
            'output' => [ 'shape' => 'ModifyRedisAvailableZonesResponseShape', ],
        ],
        'ModifyProxyAvailableZones' => [
            'name' => 'ModifyProxyAvailableZones',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/cacheInstance/{cacheInstanceId}/modifyProxyAvailableZones',
            ],
            'input' => [ 'shape' => 'ModifyProxyAvailableZonesRequestShape', ],
            'output' => [ 'shape' => 'ModifyProxyAvailableZonesResponseShape', ],
        ],
        'SwitchInstanceHA' => [
            'name' => 'SwitchInstanceHA',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/cacheInstance/{cacheInstanceId}/switchInstanceHA',
            ],
            'input' => [ 'shape' => 'SwitchInstanceHARequestShape', ],
            'output' => [ 'shape' => 'SwitchInstanceHAResponseShape', ],
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
        'DescribeIpWhiteList' => [
            'name' => 'DescribeIpWhiteList',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/cacheInstance/{cacheInstanceId}/ipWhiteList',
            ],
            'input' => [ 'shape' => 'DescribeIpWhiteListRequestShape', ],
            'output' => [ 'shape' => 'DescribeIpWhiteListResponseShape', ],
        ],
        'ModifyIpWhiteList' => [
            'name' => 'ModifyIpWhiteList',
            'http' => [
                'method' => 'PATCH',
                'requestUri' => '/v1/regions/{regionId}/cacheInstance/{cacheInstanceId}/ipWhiteList',
            ],
            'input' => [ 'shape' => 'ModifyIpWhiteListRequestShape', ],
            'output' => [ 'shape' => 'ModifyIpWhiteListResponseShape', ],
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
        'DescribeProxySlowLog' => [
            'name' => 'DescribeProxySlowLog',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/cacheInstance/{cacheInstanceId}/proxySlowLog',
            ],
            'input' => [ 'shape' => 'DescribeProxySlowLogRequestShape', ],
            'output' => [ 'shape' => 'DescribeProxySlowLogResponseShape', ],
        ],
        'GetMetric' => [
            'name' => 'GetMetric',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/cacheInstance/{cacheInstanceId}/metrics',
            ],
            'input' => [ 'shape' => 'GetMetricRequestShape', ],
            'output' => [ 'shape' => 'GetMetricResponseShape', ],
        ],
        'DescribeTaskProgressList' => [
            'name' => 'DescribeTaskProgressList',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/cacheInstance/{cacheInstanceId}/taskProgress',
            ],
            'input' => [ 'shape' => 'DescribeTaskProgressListRequestShape', ],
            'output' => [ 'shape' => 'DescribeTaskProgressListResponseShape', ],
        ],
        'GetDisableCommands' => [
            'name' => 'GetDisableCommands',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/cacheInstance/{cacheInstanceId}/disableCommands',
            ],
            'input' => [ 'shape' => 'GetDisableCommandsRequestShape', ],
            'output' => [ 'shape' => 'GetDisableCommandsResponseShape', ],
        ],
        'SetDisableCommands' => [
            'name' => 'SetDisableCommands',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/cacheInstance/{cacheInstanceId}/disableCommands',
            ],
            'input' => [ 'shape' => 'SetDisableCommandsRequestShape', ],
            'output' => [ 'shape' => 'SetDisableCommandsResponseShape', ],
        ],
        'ListDisableCommands' => [
            'name' => 'ListDisableCommands',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/cacheInstance/{cacheInstanceId}/listDisableCommands',
            ],
            'input' => [ 'shape' => 'ListDisableCommandsRequestShape', ],
            'output' => [ 'shape' => 'ListDisableCommandsResponseShape', ],
        ],
        'DescribeAccounts' => [
            'name' => 'DescribeAccounts',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/cacheInstance/{cacheInstanceId}/account',
            ],
            'input' => [ 'shape' => 'DescribeAccountsRequestShape', ],
            'output' => [ 'shape' => 'DescribeAccountsResponseShape', ],
        ],
        'CreateAccount' => [
            'name' => 'CreateAccount',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/cacheInstance/{cacheInstanceId}/account',
            ],
            'input' => [ 'shape' => 'CreateAccountRequestShape', ],
            'output' => [ 'shape' => 'CreateAccountResponseShape', ],
        ],
        'ModifyAccount' => [
            'name' => 'ModifyAccount',
            'http' => [
                'method' => 'PATCH',
                'requestUri' => '/v1/regions/{regionId}/cacheInstance/{cacheInstanceId}/account',
            ],
            'input' => [ 'shape' => 'ModifyAccountRequestShape', ],
            'output' => [ 'shape' => 'ModifyAccountResponseShape', ],
        ],
        'DeleteAccount' => [
            'name' => 'DeleteAccount',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/regions/{regionId}/cacheInstance/{cacheInstanceId}/account',
            ],
            'input' => [ 'shape' => 'DeleteAccountRequestShape', ],
            'output' => [ 'shape' => 'DeleteAccountResponseShape', ],
        ],
        'ModifyAccounts' => [
            'name' => 'ModifyAccounts',
            'http' => [
                'method' => 'PATCH',
                'requestUri' => '/v1/regions/{regionId}/cacheInstance/{cacheInstanceId}/accounts',
            ],
            'input' => [ 'shape' => 'ModifyAccountsRequestShape', ],
            'output' => [ 'shape' => 'ModifyAccountsResponseShape', ],
        ],
        'StartClearData' => [
            'name' => 'StartClearData',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/cacheInstance/{cacheInstanceId}/startClearData',
            ],
            'input' => [ 'shape' => 'StartClearDataRequestShape', ],
            'output' => [ 'shape' => 'StartClearDataResponseShape', ],
        ],
        'StopClearData' => [
            'name' => 'StopClearData',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/cacheInstance/{cacheInstanceId}/stopClearData',
            ],
            'input' => [ 'shape' => 'StopClearDataRequestShape', ],
            'output' => [ 'shape' => 'StopClearDataResponseShape', ],
        ],
        'DescribeClearData' => [
            'name' => 'DescribeClearData',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/cacheInstance/{cacheInstanceId}/describeClearData',
            ],
            'input' => [ 'shape' => 'DescribeClearDataRequestShape', ],
            'output' => [ 'shape' => 'DescribeClearDataResponseShape', ],
        ],
        'DescribeDetailNodeList' => [
            'name' => 'DescribeDetailNodeList',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/cacheInstance/{cacheInstanceId}/detailNode',
            ],
            'input' => [ 'shape' => 'DescribeDetailNodeListRequestShape', ],
            'output' => [ 'shape' => 'DescribeDetailNodeListResponseShape', ],
        ],
        'DescribeBigKeyList' => [
            'name' => 'DescribeBigKeyList',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/cacheInstance/{cacheInstanceId}/bigKey',
            ],
            'input' => [ 'shape' => 'DescribeBigKeyListRequestShape', ],
            'output' => [ 'shape' => 'DescribeBigKeyListResponseShape', ],
        ],
        'CreateBigKeyAnalysis' => [
            'name' => 'CreateBigKeyAnalysis',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/cacheInstance/{cacheInstanceId}/bigKey',
            ],
            'input' => [ 'shape' => 'CreateBigKeyAnalysisRequestShape', ],
            'output' => [ 'shape' => 'CreateBigKeyAnalysisResponseShape', ],
        ],
        'DescribeBigKeyDetail' => [
            'name' => 'DescribeBigKeyDetail',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/cacheInstance/{cacheInstanceId}/bigKeyDetail',
            ],
            'input' => [ 'shape' => 'DescribeBigKeyDetailRequestShape', ],
            'output' => [ 'shape' => 'DescribeBigKeyDetailResponseShape', ],
        ],
        'DescribeBigKeyAnalysisTime' => [
            'name' => 'DescribeBigKeyAnalysisTime',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/cacheInstance/{cacheInstanceId}/bigKeyAutoAnalysisTime',
            ],
            'input' => [ 'shape' => 'DescribeBigKeyAnalysisTimeRequestShape', ],
            'output' => [ 'shape' => 'DescribeBigKeyAnalysisTimeResponseShape', ],
        ],
        'ModifyBigKeyAnalysisTime' => [
            'name' => 'ModifyBigKeyAnalysisTime',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/cacheInstance/{cacheInstanceId}/bigKeyAutoAnalysisTime',
            ],
            'input' => [ 'shape' => 'ModifyBigKeyAnalysisTimeRequestShape', ],
            'output' => [ 'shape' => 'ModifyBigKeyAnalysisTimeResponseShape', ],
        ],
        'StopCacheAnalysis' => [
            'name' => 'StopCacheAnalysis',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/cacheInstance/{cacheInstanceId}/stopCacheAnalysis',
            ],
            'input' => [ 'shape' => 'StopCacheAnalysisRequestShape', ],
            'output' => [ 'shape' => 'StopCacheAnalysisResponseShape', ],
        ],
        'DescribeAnalysisThreshold' => [
            'name' => 'DescribeAnalysisThreshold',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/cacheInstance/{cacheInstanceId}/cacheAnalysisThreshold',
            ],
            'input' => [ 'shape' => 'DescribeAnalysisThresholdRequestShape', ],
            'output' => [ 'shape' => 'DescribeAnalysisThresholdResponseShape', ],
        ],
        'ModifyAnalysisThreshold' => [
            'name' => 'ModifyAnalysisThreshold',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/cacheInstance/{cacheInstanceId}/cacheAnalysisThreshold',
            ],
            'input' => [ 'shape' => 'ModifyAnalysisThresholdRequestShape', ],
            'output' => [ 'shape' => 'ModifyAnalysisThresholdResponseShape', ],
        ],
        'CreateBigKeyAnalysis2' => [
            'name' => 'CreateBigKeyAnalysis2',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/cacheInstance/{cacheInstanceId}/bigKeyAnalysis',
            ],
            'input' => [ 'shape' => 'CreateBigKeyAnalysis2RequestShape', ],
            'output' => [ 'shape' => 'CreateBigKeyAnalysis2ResponseShape', ],
        ],
        'DescribeBigKeyList2' => [
            'name' => 'DescribeBigKeyList2',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/cacheInstance/{cacheInstanceId}/bigKeyAnalysisResultList',
            ],
            'input' => [ 'shape' => 'DescribeBigKeyList2RequestShape', ],
            'output' => [ 'shape' => 'DescribeBigKeyList2ResponseShape', ],
        ],
        'DescribeBigKeyDetail2' => [
            'name' => 'DescribeBigKeyDetail2',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/cacheInstance/{cacheInstanceId}/bigKeyAnalysisDetail',
            ],
            'input' => [ 'shape' => 'DescribeBigKeyDetail2RequestShape', ],
            'output' => [ 'shape' => 'DescribeBigKeyDetail2ResponseShape', ],
        ],
        'DescribeBigKeyAnalysisTime2' => [
            'name' => 'DescribeBigKeyAnalysisTime2',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/cacheInstance/{cacheInstanceId}/bigKeyAnalysisTime',
            ],
            'input' => [ 'shape' => 'DescribeBigKeyAnalysisTime2RequestShape', ],
            'output' => [ 'shape' => 'DescribeBigKeyAnalysisTime2ResponseShape', ],
        ],
        'ModifyBigKeyAnalysisTime2' => [
            'name' => 'ModifyBigKeyAnalysisTime2',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/cacheInstance/{cacheInstanceId}/bigKeyAnalysisTime',
            ],
            'input' => [ 'shape' => 'ModifyBigKeyAnalysisTime2RequestShape', ],
            'output' => [ 'shape' => 'ModifyBigKeyAnalysisTime2ResponseShape', ],
        ],
        'DescribeAnalysisThreshold2' => [
            'name' => 'DescribeAnalysisThreshold2',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/cacheInstance/{cacheInstanceId}/bigKeyAnalysisThreshold',
            ],
            'input' => [ 'shape' => 'DescribeAnalysisThreshold2RequestShape', ],
            'output' => [ 'shape' => 'DescribeAnalysisThreshold2ResponseShape', ],
        ],
        'ModifyAnalysisThreshold2' => [
            'name' => 'ModifyAnalysisThreshold2',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/cacheInstance/{cacheInstanceId}/bigKeyAnalysisThreshold',
            ],
            'input' => [ 'shape' => 'ModifyAnalysisThreshold2RequestShape', ],
            'output' => [ 'shape' => 'ModifyAnalysisThreshold2ResponseShape', ],
        ],
        'DescribeHotKeyResult2' => [
            'name' => 'DescribeHotKeyResult2',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/cacheInstance/{cacheInstanceId}/hotKeyAnalysisResult',
            ],
            'input' => [ 'shape' => 'DescribeHotKeyResult2RequestShape', ],
            'output' => [ 'shape' => 'DescribeHotKeyResult2ResponseShape', ],
        ],
        'DescribeHotKeyDetail2' => [
            'name' => 'DescribeHotKeyDetail2',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/cacheInstance/{cacheInstanceId}/hotKeyDetail',
            ],
            'input' => [ 'shape' => 'DescribeHotKeyDetail2RequestShape', ],
            'output' => [ 'shape' => 'DescribeHotKeyDetail2ResponseShape', ],
        ],
        'DescribeHotKeySummary' => [
            'name' => 'DescribeHotKeySummary',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/cacheInstance/{cacheInstanceId}/hotKeyAnalysisSummary',
            ],
            'input' => [ 'shape' => 'DescribeHotKeySummaryRequestShape', ],
            'output' => [ 'shape' => 'DescribeHotKeySummaryResponseShape', ],
        ],
        'DescribeHotKeyDetail' => [
            'name' => 'DescribeHotKeyDetail',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/cacheInstance/{cacheInstanceId}/hotKeyAnalysisDetail',
            ],
            'input' => [ 'shape' => 'DescribeHotKeyDetailRequestShape', ],
            'output' => [ 'shape' => 'DescribeHotKeyDetailResponseShape', ],
        ],
        'RestartProxy' => [
            'name' => 'RestartProxy',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/cacheInstance/{cacheInstanceId}/restartProxy',
            ],
            'input' => [ 'shape' => 'RestartProxyRequestShape', ],
            'output' => [ 'shape' => 'RestartProxyResponseShape', ],
        ],
        'RestartInstance' => [
            'name' => 'RestartInstance',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/cacheInstance/{cacheInstanceId}/restartInstance',
            ],
            'input' => [ 'shape' => 'RestartInstanceRequestShape', ],
            'output' => [ 'shape' => 'RestartInstanceResponseShape', ],
        ],
        'ClientKill' => [
            'name' => 'ClientKill',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/cacheInstance/{cacheInstanceId}/clientKill',
            ],
            'input' => [ 'shape' => 'ClientKillRequestShape', ],
            'output' => [ 'shape' => 'ClientKillResponseShape', ],
        ],
        'MaintenanceTime' => [
            'name' => 'MaintenanceTime',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/cacheInstance/{cacheInstanceId}/maintenanceTime',
            ],
            'input' => [ 'shape' => 'MaintenanceTimeRequestShape', ],
            'output' => [ 'shape' => 'MaintenanceTimeResponseShape', ],
        ],
        'ModifyBlockStatus' => [
            'name' => 'ModifyBlockStatus',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/cacheInstance/{cacheInstanceId}/modifyBlockStatus',
            ],
            'input' => [ 'shape' => 'ModifyBlockStatusRequestShape', ],
            'output' => [ 'shape' => 'ModifyBlockStatusResponseShape', ],
        ],
        'CheckDeletable' => [
            'name' => 'CheckDeletable',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/cacheInstance/{cacheInstanceId}/checkDeletable',
            ],
            'input' => [ 'shape' => 'CheckDeletableRequestShape', ],
            'output' => [ 'shape' => 'CheckDeletableResponseShape', ],
        ],
        'DescribeConfigModifyHistory' => [
            'name' => 'DescribeConfigModifyHistory',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/cacheInstance/{cacheInstanceId}/instanceConfigModifyHistory',
            ],
            'input' => [ 'shape' => 'DescribeConfigModifyHistoryRequestShape', ],
            'output' => [ 'shape' => 'DescribeConfigModifyHistoryResponseShape', ],
        ],
        'RecoverInstance' => [
            'name' => 'RecoverInstance',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/cacheInstance/{cacheInstanceId}:recoverInstance',
            ],
            'input' => [ 'shape' => 'RecoverInstanceRequestShape', ],
            'output' => [ 'shape' => 'RecoverInstanceResponseShape', ],
        ],
        'ListModules' => [
            'name' => 'ListModules',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/cacheInstance/{cacheInstanceId}/modules',
            ],
            'input' => [ 'shape' => 'ListModulesRequestShape', ],
            'output' => [ 'shape' => 'ListModulesResponseShape', ],
        ],
        'LoadModules' => [
            'name' => 'LoadModules',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/cacheInstance/{cacheInstanceId}/modules',
            ],
            'input' => [ 'shape' => 'LoadModulesRequestShape', ],
            'output' => [ 'shape' => 'LoadModulesResponseShape', ],
        ],
        'UnloadModules' => [
            'name' => 'UnloadModules',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/regions/{regionId}/cacheInstance/{cacheInstanceId}/modules',
            ],
            'input' => [ 'shape' => 'UnloadModulesRequestShape', ],
            'output' => [ 'shape' => 'UnloadModulesResponseShape', ],
        ],
        'JvesselV1Health' => [
            'name' => 'JvesselV1Health',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/cacheInstance/{cacheInstanceId}/jvesselV1Health',
            ],
            'input' => [ 'shape' => 'JvesselV1HealthRequestShape', ],
            'output' => [ 'shape' => 'JvesselV1HealthResponseShape', ],
        ],
        'JvesselV1ProbeSuccessRate' => [
            'name' => 'JvesselV1ProbeSuccessRate',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/cacheInstance/{cacheInstanceId}/jvesselV1ProbeSuccessRate',
            ],
            'input' => [ 'shape' => 'JvesselV1ProbeSuccessRateRequestShape', ],
            'output' => [ 'shape' => 'JvesselV1ProbeSuccessRateResponseShape', ],
        ],
        'JvesselV1ModifyProxyReplica' => [
            'name' => 'JvesselV1ModifyProxyReplica',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/cacheInstance/{cacheInstanceId}/jvesselV1ModifyProxyReplica',
            ],
            'input' => [ 'shape' => 'JvesselV1ModifyProxyReplicaRequestShape', ],
            'output' => [ 'shape' => 'JvesselV1ModifyProxyReplicaResponseShape', ],
        ],
        'JvesselV1ModifyProxyFlavor' => [
            'name' => 'JvesselV1ModifyProxyFlavor',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/cacheInstance/{cacheInstanceId}/jvesselV1ModifyProxyFlavor',
            ],
            'input' => [ 'shape' => 'JvesselV1ModifyProxyFlavorRequestShape', ],
            'output' => [ 'shape' => 'JvesselV1ModifyProxyFlavorResponseShape', ],
        ],
        'JvesselV1UpdateProxyImage' => [
            'name' => 'JvesselV1UpdateProxyImage',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/cacheInstance/{cacheInstanceId}/jvesselV1UpdateProxyImage',
            ],
            'input' => [ 'shape' => 'JvesselV1UpdateProxyImageRequestShape', ],
            'output' => [ 'shape' => 'JvesselV1UpdateProxyImageResponseShape', ],
        ],
        'JvesselV1RollingUpdate' => [
            'name' => 'JvesselV1RollingUpdate',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/cacheInstance/{cacheInstanceId}/jvesselV1RollingUpdate',
            ],
            'input' => [ 'shape' => 'JvesselV1RollingUpdateRequestShape', ],
            'output' => [ 'shape' => 'JvesselV1RollingUpdateResponseShape', ],
        ],
        'JvesselV1SetConfig' => [
            'name' => 'JvesselV1SetConfig',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/cacheInstance/{cacheInstanceId}/jvesselV1SetConfig',
            ],
            'input' => [ 'shape' => 'JvesselV1SetConfigRequestShape', ],
            'output' => [ 'shape' => 'JvesselV1SetConfigResponseShape', ],
        ],
        'JvesselV1ListMasterConfig' => [
            'name' => 'JvesselV1ListMasterConfig',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/cacheInstance/{cacheInstanceId}/jvesselV1ListMasterConfig',
            ],
            'input' => [ 'shape' => 'JvesselV1ListMasterConfigRequestShape', ],
            'output' => [ 'shape' => 'JvesselV1ListMasterConfigResponseShape', ],
        ],
        'JvesselV1ListSlaveConfig' => [
            'name' => 'JvesselV1ListSlaveConfig',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/cacheInstance/{cacheInstanceId}/jvesselV1ListSlaveConfig',
            ],
            'input' => [ 'shape' => 'JvesselV1ListSlaveConfigRequestShape', ],
            'output' => [ 'shape' => 'JvesselV1ListSlaveConfigResponseShape', ],
        ],
        'JvesselV1ListProxyConfig' => [
            'name' => 'JvesselV1ListProxyConfig',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/cacheInstance/{cacheInstanceId}/jvesselV1ListProxyConfig',
            ],
            'input' => [ 'shape' => 'JvesselV1ListProxyConfigRequestShape', ],
            'output' => [ 'shape' => 'JvesselV1ListProxyConfigResponseShape', ],
        ],
        'JvesselV1ProxyInfo' => [
            'name' => 'JvesselV1ProxyInfo',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/cacheInstance/{cacheInstanceId}/jvesselV1ProxyInfo',
            ],
            'input' => [ 'shape' => 'JvesselV1ProxyInfoRequestShape', ],
            'output' => [ 'shape' => 'JvesselV1ProxyInfoResponseShape', ],
        ],
        'GetBackupFiles' => [
            'name' => 'GetBackupFiles',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/cacheInstance/{cacheInstanceId}/getBackupFiles',
            ],
            'input' => [ 'shape' => 'GetBackupFilesRequestShape', ],
            'output' => [ 'shape' => 'GetBackupFilesResponseShape', ],
        ],
        'CreateOfflineAnalysisTask' => [
            'name' => 'CreateOfflineAnalysisTask',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/cacheInstance/{cacheInstanceId}/createOfflineAnalysisTask',
            ],
            'input' => [ 'shape' => 'CreateOfflineAnalysisTaskRequestShape', ],
            'output' => [ 'shape' => 'CreateOfflineAnalysisTaskResponseShape', ],
        ],
        'ListOfflineAnalysis' => [
            'name' => 'ListOfflineAnalysis',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/cacheInstance/{cacheInstanceId}/listOfflineAnalysis',
            ],
            'input' => [ 'shape' => 'ListOfflineAnalysisRequestShape', ],
            'output' => [ 'shape' => 'ListOfflineAnalysisResponseShape', ],
        ],
        'DescribeOfflineAnalysisOverview' => [
            'name' => 'DescribeOfflineAnalysisOverview',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/cacheInstance/{cacheInstanceId}/describeOfflineAnalysisOverview',
            ],
            'input' => [ 'shape' => 'DescribeOfflineAnalysisOverviewRequestShape', ],
            'output' => [ 'shape' => 'DescribeOfflineAnalysisOverviewResponseShape', ],
        ],
        'DescribeOfflineAnalysisTopKeys' => [
            'name' => 'DescribeOfflineAnalysisTopKeys',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/cacheInstance/{cacheInstanceId}/describeOfflineAnalysisTopKeys',
            ],
            'input' => [ 'shape' => 'DescribeOfflineAnalysisTopKeysRequestShape', ],
            'output' => [ 'shape' => 'DescribeOfflineAnalysisTopKeysResponseShape', ],
        ],
        'DescribeOfflineAnalysisTopKeyPrefixList' => [
            'name' => 'DescribeOfflineAnalysisTopKeyPrefixList',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/cacheInstance/{cacheInstanceId}/describeOfflineAnalysisTopKeyPrefixList',
            ],
            'input' => [ 'shape' => 'DescribeOfflineAnalysisTopKeyPrefixListRequestShape', ],
            'output' => [ 'shape' => 'DescribeOfflineAnalysisTopKeyPrefixListResponseShape', ],
        ],
        'DescribeOfflineAnalysisTime' => [
            'name' => 'DescribeOfflineAnalysisTime',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/cacheInstance/{cacheInstanceId}/offlineAnalysisTime',
            ],
            'input' => [ 'shape' => 'DescribeOfflineAnalysisTimeRequestShape', ],
            'output' => [ 'shape' => 'DescribeOfflineAnalysisTimeResponseShape', ],
        ],
        'ModifyOfflineAnalysisTime' => [
            'name' => 'ModifyOfflineAnalysisTime',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/cacheInstance/{cacheInstanceId}/offlineAnalysisTime',
            ],
            'input' => [ 'shape' => 'ModifyOfflineAnalysisTimeRequestShape', ],
            'output' => [ 'shape' => 'ModifyOfflineAnalysisTimeResponseShape', ],
        ],
        'DescribeRedisServerLog' => [
            'name' => 'DescribeRedisServerLog',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/cacheInstance/{cacheInstanceId}/redisServerLog',
            ],
            'input' => [ 'shape' => 'DescribeRedisServerLogRequestShape', ],
            'output' => [ 'shape' => 'DescribeRedisServerLogResponseShape', ],
        ],
        'CheckPasswordValid' => [
            'name' => 'CheckPasswordValid',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/checkPasswordValid',
            ],
            'input' => [ 'shape' => 'CheckPasswordValidRequestShape', ],
            'output' => [ 'shape' => 'CheckPasswordValidResponseShape', ],
        ],
        'DescribeConfigTemplates' => [
            'name' => 'DescribeConfigTemplates',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/configTemplate',
            ],
            'input' => [ 'shape' => 'DescribeConfigTemplatesRequestShape', ],
            'output' => [ 'shape' => 'DescribeConfigTemplatesResponseShape', ],
        ],
        'CreateConfigTemplate' => [
            'name' => 'CreateConfigTemplate',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/configTemplate',
            ],
            'input' => [ 'shape' => 'CreateConfigTemplateRequestShape', ],
            'output' => [ 'shape' => 'CreateConfigTemplateResponseShape', ],
        ],
        'DescribeConfigTemplate' => [
            'name' => 'DescribeConfigTemplate',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/configTemplate/{templateId}',
            ],
            'input' => [ 'shape' => 'DescribeConfigTemplateRequestShape', ],
            'output' => [ 'shape' => 'DescribeConfigTemplateResponseShape', ],
        ],
        'ModifyTemplate' => [
            'name' => 'ModifyTemplate',
            'http' => [
                'method' => 'PUT',
                'requestUri' => '/v1/configTemplate/{templateId}',
            ],
            'input' => [ 'shape' => 'ModifyTemplateRequestShape', ],
            'output' => [ 'shape' => 'ModifyTemplateResponseShape', ],
        ],
        'DeleteConfigTemplate' => [
            'name' => 'DeleteConfigTemplate',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/configTemplate/{templateId}',
            ],
            'input' => [ 'shape' => 'DeleteConfigTemplateRequestShape', ],
            'output' => [ 'shape' => 'DeleteConfigTemplateResponseShape', ],
        ],
        'UserDiagnoseInstances' => [
            'name' => 'UserDiagnoseInstances',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/diagnoses',
            ],
            'input' => [ 'shape' => 'UserDiagnoseInstancesRequestShape', ],
            'output' => [ 'shape' => 'UserDiagnoseInstancesResponseShape', ],
        ],
        'ListInstanceDiagnoseTasks' => [
            'name' => 'ListInstanceDiagnoseTasks',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/cacheInstance/{cacheInstanceId}/listInstanceDiagnoses',
            ],
            'input' => [ 'shape' => 'ListInstanceDiagnoseTasksRequestShape', ],
            'output' => [ 'shape' => 'ListInstanceDiagnoseTasksResponseShape', ],
        ],
        'ListPinDiagnoseTasks' => [
            'name' => 'ListPinDiagnoseTasks',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/diagnoseTasks',
            ],
            'input' => [ 'shape' => 'ListPinDiagnoseTasksRequestShape', ],
            'output' => [ 'shape' => 'ListPinDiagnoseTasksResponseShape', ],
        ],
        'UserGetDiagnoseReport' => [
            'name' => 'UserGetDiagnoseReport',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/diagnoseReport',
            ],
            'input' => [ 'shape' => 'UserGetDiagnoseReportRequestShape', ],
            'output' => [ 'shape' => 'UserGetDiagnoseReportResponseShape', ],
        ],
        'QueryDiagnosePolicy' => [
            'name' => 'QueryDiagnosePolicy',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/diagnosePolicy',
            ],
            'input' => [ 'shape' => 'QueryDiagnosePolicyRequestShape', ],
            'output' => [ 'shape' => 'QueryDiagnosePolicyResponseShape', ],
        ],
        'ConfigDiagnosePolicy' => [
            'name' => 'ConfigDiagnosePolicy',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/diagnosePolicy',
            ],
            'input' => [ 'shape' => 'ConfigDiagnosePolicyRequestShape', ],
            'output' => [ 'shape' => 'ConfigDiagnosePolicyResponseShape', ],
        ],
        'ConfigOverrideMetric' => [
            'name' => 'ConfigOverrideMetric',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/diagnoseOverrideMetric',
            ],
            'input' => [ 'shape' => 'ConfigOverrideMetricRequestShape', ],
            'output' => [ 'shape' => 'ConfigOverrideMetricResponseShape', ],
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
        'DescribeImageReleases' => [
            'name' => 'DescribeImageReleases',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/imageRelease',
            ],
            'input' => [ 'shape' => 'DescribeImageReleasesRequestShape', ],
            'output' => [ 'shape' => 'DescribeImageReleasesResponseShape', ],
        ],
        'DescribeChartReleases' => [
            'name' => 'DescribeChartReleases',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/chartRelease',
            ],
            'input' => [ 'shape' => 'DescribeChartReleasesRequestShape', ],
            'output' => [ 'shape' => 'DescribeChartReleasesResponseShape', ],
        ],
        'DescribeSpecConfig' => [
            'name' => 'DescribeSpecConfig',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/specConfig',
            ],
            'input' => [ 'shape' => 'DescribeSpecConfigRequestShape', ],
            'output' => [ 'shape' => 'DescribeSpecConfigResponseShape', ],
        ],
        'ListTasks' => [
            'name' => 'ListTasks',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/tasks',
            ],
            'input' => [ 'shape' => 'ListTasksRequestShape', ],
            'output' => [ 'shape' => 'ListTasksResponseShape', ],
        ],
        'ListTask' => [
            'name' => 'ListTask',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/task',
            ],
            'input' => [ 'shape' => 'ListTaskRequestShape', ],
            'output' => [ 'shape' => 'ListTaskResponseShape', ],
        ],
        'InterruptTask' => [
            'name' => 'InterruptTask',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/interruptTask',
            ],
            'input' => [ 'shape' => 'InterruptTaskRequestShape', ],
            'output' => [ 'shape' => 'InterruptTaskResponseShape', ],
        ],
        'ModifyTaskRunTime' => [
            'name' => 'ModifyTaskRunTime',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/modifyTaskRunTime',
            ],
            'input' => [ 'shape' => 'ModifyTaskRunTimeRequestShape', ],
            'output' => [ 'shape' => 'ModifyTaskRunTimeResponseShape', ],
        ],
        'CancelTask' => [
            'name' => 'CancelTask',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/cancelTask',
            ],
            'input' => [ 'shape' => 'CancelTaskRequestShape', ],
            'output' => [ 'shape' => 'CancelTaskResponseShape', ],
        ],
        'ListTaskTypes' => [
            'name' => 'ListTaskTypes',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/taskTypes',
            ],
            'input' => [ 'shape' => 'ListTaskTypesRequestShape', ],
            'output' => [ 'shape' => 'ListTaskTypesResponseShape', ],
        ],
        'DescribeWhiteListGroup' => [
            'name' => 'DescribeWhiteListGroup',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/cacheInstance/{cacheInstanceId}/whiteListGroup',
            ],
            'input' => [ 'shape' => 'DescribeWhiteListGroupRequestShape', ],
            'output' => [ 'shape' => 'DescribeWhiteListGroupResponseShape', ],
        ],
        'AddWhiteListGroup' => [
            'name' => 'AddWhiteListGroup',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/cacheInstance/{cacheInstanceId}/whiteListGroup',
            ],
            'input' => [ 'shape' => 'AddWhiteListGroupRequestShape', ],
            'output' => [ 'shape' => 'AddWhiteListGroupResponseShape', ],
        ],
        'ModifyWhiteListGroup' => [
            'name' => 'ModifyWhiteListGroup',
            'http' => [
                'method' => 'PUT',
                'requestUri' => '/v1/regions/{regionId}/cacheInstance/{cacheInstanceId}/whiteListGroup',
            ],
            'input' => [ 'shape' => 'ModifyWhiteListGroupRequestShape', ],
            'output' => [ 'shape' => 'ModifyWhiteListGroupResponseShape', ],
        ],
        'DeleteWhiteListGroup' => [
            'name' => 'DeleteWhiteListGroup',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/regions/{regionId}/cacheInstance/{cacheInstanceId}/whiteListGroup',
            ],
            'input' => [ 'shape' => 'DeleteWhiteListGroupRequestShape', ],
            'output' => [ 'shape' => 'DeleteWhiteListGroupResponseShape', ],
        ],
    ],
    'shapes' => [
        'Accounts' => [
            'type' => 'structure',
            'members' => [
                'accountName' => [ 'type' => 'string', 'locationName' => 'accountName', ],
                'accountType' => [ 'type' => 'string', 'locationName' => 'accountType', ],
                'accountPrivilege' => [ 'type' => 'string', 'locationName' => 'accountPrivilege', ],
                'accountDescription' => [ 'type' => 'string', 'locationName' => 'accountDescription', ],
            ],
        ],
        'ModifyAccount' => [
            'type' => 'structure',
            'members' => [
                'accountName' => [ 'type' => 'string', 'locationName' => 'accountName', ],
                'accountPassword' => [ 'type' => 'string', 'locationName' => 'accountPassword', ],
                'accountPrivilege' => [ 'type' => 'string', 'locationName' => 'accountPrivilege', ],
                'accountDescription' => [ 'type' => 'string', 'locationName' => 'accountDescription', ],
            ],
        ],
        'AzInfo' => [
            'type' => 'structure',
            'members' => [
                'azId' => [ 'type' => 'string', 'locationName' => 'azId', ],
                'azName' => [ 'type' => 'string', 'locationName' => 'azName', ],
                'soldOut' => [ 'type' => 'boolean', 'locationName' => 'soldOut', ],
            ],
        ],
        'AvailableRegion' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'regionName' => [ 'type' => 'string', 'locationName' => 'regionName', ],
                'soldOut' => [ 'type' => 'boolean', 'locationName' => 'soldOut', ],
                'quota' =>  [ 'shape' => 'QuotaInfo', ],
                'availableZones' => [ 'type' => 'list', 'member' => [ 'shape' => 'AzInfo', ], ],
            ],
        ],
        'QuotaInfo' => [
            'type' => 'structure',
            'members' => [
                'max' => [ 'type' => 'integer', 'locationName' => 'max', ],
                'used' => [ 'type' => 'integer', 'locationName' => 'used', ],
            ],
        ],
        'IpNumbers' => [
            'type' => 'structure',
            'members' => [
                'ipNumber' => [ 'type' => 'integer', 'locationName' => 'ipNumber', ],
                'ipNumberWithProxy' => [ 'type' => 'integer', 'locationName' => 'ipNumberWithProxy', ],
            ],
        ],
        'AvailableCPUArch' => [
            'type' => 'structure',
            'members' => [
                'cpuArchInfo' =>  [ 'shape' => 'CpuArchInfo', ],
                'soldOut' => [ 'type' => 'boolean', 'locationName' => 'soldOut', ],
                'availableMemorySpecs' => [ 'type' => 'list', 'member' => [ 'shape' => 'AvailableMemorySpec', ], ],
                'shardNumberMin' => [ 'type' => 'integer', 'locationName' => 'shardNumberMin', ],
                'shardNumberMax' => [ 'type' => 'integer', 'locationName' => 'shardNumberMax', ],
                'maxMemoryMB' => [ 'type' => 'integer', 'locationName' => 'maxMemoryMB', ],
            ],
        ],
        'AvailableMemorySpec' => [
            'type' => 'structure',
            'members' => [
                'memoryGB' => [ 'type' => 'integer', 'locationName' => 'memoryGB', ],
                'memoryMB' => [ 'type' => 'integer', 'locationName' => 'memoryMB', ],
                'soldOut' => [ 'type' => 'boolean', 'locationName' => 'soldOut', ],
                'availableZones' => [ 'type' => 'list', 'member' => [ 'shape' => 'AzInfo', ], ],
                'availableFlavors' => [ 'type' => 'list', 'member' => [ 'shape' => 'AvailableFlavor', ], ],
            ],
        ],
        'CpuArchInfo' => [
            'type' => 'structure',
            'members' => [
                'cpuType' => [ 'type' => 'string', 'locationName' => 'cpuType', ],
                'cpuName' => [ 'type' => 'string', 'locationName' => 'cpuName', ],
            ],
        ],
        'AvailableResource' => [
            'type' => 'structure',
            'members' => [
                'architectureType' => [ 'type' => 'string', 'locationName' => 'architectureType', ],
                'architectureName' => [ 'type' => 'string', 'locationName' => 'architectureName', ],
                'recommended' => [ 'type' => 'boolean', 'locationName' => 'recommended', ],
                'soldOut' => [ 'type' => 'boolean', 'locationName' => 'soldOut', ],
                'supportedMaxReplicas' => [ 'type' => 'integer', 'locationName' => 'supportedMaxReplicas', ],
                'supportedMinReplicas' => [ 'type' => 'integer', 'locationName' => 'supportedMinReplicas', ],
                'supportedAzSpecifyType' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'minAzLimitForCluster' => [ 'type' => 'integer', 'locationName' => 'minAzLimitForCluster', ],
                'supportedExposeType' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'supportSmartProxy' => [ 'type' => 'boolean', 'locationName' => 'supportSmartProxy', ],
                'availableEngineVersions' => [ 'type' => 'list', 'member' => [ 'shape' => 'AvailableEngineVersion', ], ],
            ],
        ],
        'AvailableEngineVersion' => [
            'type' => 'structure',
            'members' => [
                'version' => [ 'type' => 'string', 'locationName' => 'version', ],
                'recommended' => [ 'type' => 'boolean', 'locationName' => 'recommended', ],
                'soldOut' => [ 'type' => 'boolean', 'locationName' => 'soldOut', ],
                'mustEnableSmartProxy' => [ 'type' => 'boolean', 'locationName' => 'mustEnableSmartProxy', ],
                'availableCPUArchs' => [ 'type' => 'list', 'member' => [ 'shape' => 'AvailableCPUArch', ], ],
            ],
        ],
        'FlavorDetail' => [
            'type' => 'structure',
            'members' => [
                'cpu' => [ 'type' => 'integer', 'locationName' => 'cpu', ],
                'diskGB' => [ 'type' => 'integer', 'locationName' => 'diskGB', ],
                'maxConnection' => [ 'type' => 'integer', 'locationName' => 'maxConnection', ],
                'bandwidthMbps' => [ 'type' => 'integer', 'locationName' => 'bandwidthMbps', ],
            ],
        ],
        'AvailableFlavor' => [
            'type' => 'structure',
            'members' => [
                'shardNumber' => [ 'type' => 'integer', 'locationName' => 'shardNumber', ],
                'ipNumber' => [ 'type' => 'integer', 'locationName' => 'ipNumber', ],
                'ipNumbers' => [ 'type' => 'object', 'locationName' => 'ipNumbers', ],
                'recommended' => [ 'type' => 'boolean', 'locationName' => 'recommended', ],
                'instanceClasses' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'detail' =>  [ 'shape' => 'FlavorDetail', ],
            ],
        ],
        'AzId' => [
            'type' => 'structure',
            'members' => [
                'azSpecifyType' => [ 'type' => 'string', 'locationName' => 'azSpecifyType', ],
                'azsForCluster' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'master' => [ 'type' => 'string', 'locationName' => 'master', ],
                'slave' => [ 'type' => 'string', 'locationName' => 'slave', ],
                'azsForProxy' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'AzIdSpec' => [
            'type' => 'structure',
            'members' => [
                'azSpecifyType' => [ 'type' => 'string', 'locationName' => 'azSpecifyType', ],
                'azsForCluster' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'master' => [ 'type' => 'string', 'locationName' => 'master', ],
                'slave' => [ 'type' => 'string', 'locationName' => 'slave', ],
                'azsForProxy' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'BaseProductRegionVo' => [
            'type' => 'structure',
            'members' => [
                'serviceCode' => [ 'type' => 'string', 'locationName' => 'serviceCode', ],
                'regionAzVos' => [ 'type' => 'list', 'member' => [ 'shape' => 'RegionAzVo', ], ],
            ],
        ],
        'RegionAzVo' => [
            'type' => 'structure',
            'members' => [
                'alias' => [ 'type' => 'string', 'locationName' => 'alias', ],
                'region' => [ 'type' => 'string', 'locationName' => 'region', ],
                'visible' => [ 'type' => 'integer', 'locationName' => 'visible', ],
                'azStatusList' => [ 'type' => 'list', 'member' => [ 'shape' => 'AzSaleStatusVo', ], ],
            ],
        ],
        'AzSaleStatusVo' => [
            'type' => 'structure',
            'members' => [
                'az' => [ 'type' => 'string', 'locationName' => 'az', ],
                'canSale' => [ 'type' => 'integer', 'locationName' => 'canSale', ],
                'visible' => [ 'type' => 'integer', 'locationName' => 'visible', ],
            ],
        ],
        'BackupInfoExtension' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'redisVersion' => [ 'type' => 'string', 'locationName' => 'redisVersion', ],
                'platform' => [ 'type' => 'string', 'locationName' => 'platform', ],
                'cacheInstanceType' => [ 'type' => 'string', 'locationName' => 'cacheInstanceType', ],
                'cpuArchType' => [ 'type' => 'string', 'locationName' => 'cpuArchType', ],
                'databaseNum' => [ 'type' => 'integer', 'locationName' => 'databaseNum', ],
                'replicaNumber' => [ 'type' => 'integer', 'locationName' => 'replicaNumber', ],
            ],
        ],
        'BackupFile' => [
            'type' => 'structure',
            'members' => [
                'backupFileName' => [ 'type' => 'string', 'locationName' => 'backupFileName', ],
                'backupId' => [ 'type' => 'string', 'locationName' => 'backupId', ],
                'redisNode' => [ 'type' => 'string', 'locationName' => 'redisNode', ],
                'backupStartTime' => [ 'type' => 'string', 'locationName' => 'backupStartTime', ],
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
                'backupShardMemoryMB' => [ 'type' => 'integer', 'locationName' => 'backupShardMemoryMB', ],
                'backupShardNum' => [ 'type' => 'integer', 'locationName' => 'backupShardNum', ],
                'backupDownloadURL' => [ 'type' => 'string', 'locationName' => 'backupDownloadURL', ],
            ],
        ],
        'Instance' => [
            'type' => 'structure',
            'members' => [
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'pin' => [ 'type' => 'string', 'locationName' => 'pin', ],
                'status' => [ 'type' => 'integer', 'locationName' => 'status', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
            ],
        ],
        'KeysDistribution' => [
            'type' => 'structure',
            'members' => [
                'rangeMin' => [ 'type' => 'integer', 'locationName' => 'rangeMin', ],
                'rangeMax' => [ 'type' => 'integer', 'locationName' => 'rangeMax', ],
                'dimension' => [ 'type' => 'string', 'locationName' => 'dimension', ],
                'count' => [ 'type' => 'integer', 'locationName' => 'count', ],
                'memoryUsage' => [ 'type' => 'integer', 'locationName' => 'memoryUsage', ],
            ],
        ],
        'ClusterCacheAnalysis' => [
            'type' => 'structure',
            'members' => [
                'analysisTime' => [ 'type' => 'string', 'locationName' => 'analysisTime', ],
                'taskId' => [ 'type' => 'string', 'locationName' => 'taskId', ],
                'analysisDuration' => [ 'type' => 'string', 'locationName' => 'analysisDuration', ],
                'downloadUrl' => [ 'type' => 'string', 'locationName' => 'downloadUrl', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
            ],
        ],
        'HotKeyAnalysisNode' => [
            'type' => 'structure',
            'members' => [
                'nodeId' => [ 'type' => 'string', 'locationName' => 'nodeId', ],
                'nodeRole' => [ 'type' => 'string', 'locationName' => 'nodeRole', ],
                'hotKeyNum' => [ 'type' => 'integer', 'locationName' => 'hotKeyNum', ],
            ],
        ],
        'RedisKeySpaceData' => [
            'type' => 'structure',
            'members' => [
                'keyName' => [ 'type' => 'string', 'locationName' => 'keyName', ],
                'keyType' => [ 'type' => 'string', 'locationName' => 'keyType', ],
                'encoding' => [ 'type' => 'string', 'locationName' => 'encoding', ],
                'expireFormat' => [ 'type' => 'string', 'locationName' => 'expireFormat', ],
                'memoryUsage' => [ 'type' => 'string', 'locationName' => 'memoryUsage', ],
                'itemCount' => [ 'type' => 'integer', 'locationName' => 'itemCount', ],
                'maxItemLength' => [ 'type' => 'integer', 'locationName' => 'maxItemLength', ],
                'avgItemLength' => [ 'type' => 'integer', 'locationName' => 'avgItemLength', ],
                'shardId' => [ 'type' => 'integer', 'locationName' => 'shardId', ],
                'db' => [ 'type' => 'integer', 'locationName' => 'db', ],
            ],
        ],
        'BigKeyAnalysisNode' => [
            'type' => 'structure',
            'members' => [
                'nodeId' => [ 'type' => 'string', 'locationName' => 'nodeId', ],
                'nodeRole' => [ 'type' => 'string', 'locationName' => 'nodeRole', ],
                'stringTypeNum' => [ 'type' => 'integer', 'locationName' => 'stringTypeNum', ],
                'listTypeNum' => [ 'type' => 'integer', 'locationName' => 'listTypeNum', ],
                'setTypeNum' => [ 'type' => 'integer', 'locationName' => 'setTypeNum', ],
                'hashTypeNum' => [ 'type' => 'integer', 'locationName' => 'hashTypeNum', ],
                'zsetTypeNum' => [ 'type' => 'integer', 'locationName' => 'zsetTypeNum', ],
            ],
        ],
        'OfflineAnalysisTask' => [
            'type' => 'structure',
            'members' => [
                'taskId' => [ 'type' => 'string', 'locationName' => 'taskId', ],
                'startTime' => [ 'type' => 'string', 'locationName' => 'startTime', ],
                'endTime' => [ 'type' => 'string', 'locationName' => 'endTime', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
            ],
        ],
        'RedisPredixSpaceData' => [
            'type' => 'structure',
            'members' => [
                'prefix' => [ 'type' => 'string', 'locationName' => 'prefix', ],
                'keyType' => [ 'type' => 'string', 'locationName' => 'keyType', ],
                'memoryUsage' => [ 'type' => 'string', 'locationName' => 'memoryUsage', ],
                'itemCount' => [ 'type' => 'integer', 'locationName' => 'itemCount', ],
                'count' => [ 'type' => 'integer', 'locationName' => 'count', ],
            ],
        ],
        'CacheAnalysis' => [
            'type' => 'structure',
            'members' => [
                'analysisTime' => [ 'type' => 'string', 'locationName' => 'analysisTime', ],
                'taskId' => [ 'type' => 'string', 'locationName' => 'taskId', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
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
        'FilterItem' => [
            'type' => 'structure',
            'members' => [
                'text' => [ 'type' => 'string', 'locationName' => 'text', ],
                'value' => [ 'type' => 'string', 'locationName' => 'value', ],
            ],
        ],
        'InstanceDomain' => [
            'type' => 'structure',
            'members' => [
                'domainName' => [ 'type' => 'string', 'locationName' => 'domainName', ],
            ],
        ],
        'ProxyRateFlavor' => [
            'type' => 'structure',
            'members' => [
                'rate' => [ 'type' => 'integer', 'locationName' => 'rate', ],
                'base_flavor' => [ 'type' => 'string', 'locationName' => 'base_flavor', ],
                'disk' => [ 'type' => 'integer', 'locationName' => 'disk', ],
                'machines' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
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
                'softDeletedTime' => [ 'type' => 'string', 'locationName' => 'softDeletedTime', ],
                'retainExpireTime' => [ 'type' => 'string', 'locationName' => 'retainExpireTime', ],
                'azId' =>  [ 'shape' => 'AzId', ],
                'vpcId' => [ 'type' => 'string', 'locationName' => 'vpcId', ],
                'subnetId' => [ 'type' => 'string', 'locationName' => 'subnetId', ],
                'connectionDomain' => [ 'type' => 'string', 'locationName' => 'connectionDomain', ],
                'port' => [ 'type' => 'integer', 'locationName' => 'port', ],
                'charge' =>  [ 'shape' => 'Charge', ],
                'instanceVersion' => [ 'type' => 'string', 'locationName' => 'instanceVersion', ],
                'instanceProxyVersion' => [ 'type' => 'string', 'locationName' => 'instanceProxyVersion', ],
                'auth' => [ 'type' => 'boolean', 'locationName' => 'auth', ],
                'isAllowNoAuth' => [ 'type' => 'boolean', 'locationName' => 'isAllowNoAuth', ],
                'redisVersion' => [ 'type' => 'string', 'locationName' => 'redisVersion', ],
                'cacheInstanceType' => [ 'type' => 'string', 'locationName' => 'cacheInstanceType', ],
                'ipv6On' => [ 'type' => 'integer', 'locationName' => 'ipv6On', ],
                'tags' => [ 'type' => 'list', 'member' => [ 'shape' => 'Tag', ], ],
                'resourceGroupId' => [ 'type' => 'string', 'locationName' => 'resourceGroupId', ],
                'shardNumber' => [ 'type' => 'integer', 'locationName' => 'shardNumber', ],
                'memoryMBPerShard' => [ 'type' => 'integer', 'locationName' => 'memoryMBPerShard', ],
                'extension' =>  [ 'shape' => 'RespExtension', ],
                'otherDomains' => [ 'type' => 'list', 'member' => [ 'shape' => 'InstanceDomain', ], ],
                'slaveAppendonly' => [ 'type' => 'string', 'locationName' => 'slaveAppendonly', ],
                'databaseNum' => [ 'type' => 'string', 'locationName' => 'databaseNum', ],
                'maxmemoryPolicy' => [ 'type' => 'string', 'locationName' => 'maxmemoryPolicy', ],
                'replicaNumber' => [ 'type' => 'integer', 'locationName' => 'replicaNumber', ],
                'enableSmartProxy' => [ 'type' => 'integer', 'locationName' => 'enableSmartProxy', ],
                'cpuArchType' => [ 'type' => 'string', 'locationName' => 'cpuArchType', ],
                'maintenanceStartTime' => [ 'type' => 'string', 'locationName' => 'maintenanceStartTime', ],
                'maintenanceEndTime' => [ 'type' => 'string', 'locationName' => 'maintenanceEndTime', ],
                'toBeExecutedTaskType' => [ 'type' => 'list', 'member' => [ 'type' => 'integer', ], ],
                'supportAssociateEIP' => [ 'type' => 'boolean', 'locationName' => 'supportAssociateEIP', ],
                'platform' => [ 'type' => 'string', 'locationName' => 'platform', ],
            ],
        ],
        'ListFilterAndSort' => [
            'type' => 'structure',
            'members' => [
                'filters' => [ 'type' => 'object', 'locationName' => 'filters', ],
                'sorts' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'RespExtension' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'ReqExtension' => [
            'type' => 'structure',
            'members' => [
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
                'shardNumber' => [ 'type' => 'integer', 'locationName' => 'shardNumber', ],
                'userTags' => [ 'type' => 'list', 'member' => [ 'shape' => 'Tag', ], ],
                'resourceGroupId' => [ 'type' => 'string', 'locationName' => 'resourceGroupId', ],
                'dbNum' => [ 'type' => 'integer', 'locationName' => 'dbNum', ],
                'slaveAppendonly' => [ 'type' => 'string', 'locationName' => 'slaveAppendonly', ],
                'maxmemoryPolicy' => [ 'type' => 'string', 'locationName' => 'maxmemoryPolicy', ],
                'cacheInstanceType' => [ 'type' => 'string', 'locationName' => 'cacheInstanceType', ],
                'replicaNumber' => [ 'type' => 'integer', 'locationName' => 'replicaNumber', ],
                'enableSmartProxy' => [ 'type' => 'integer', 'locationName' => 'enableSmartProxy', ],
                'port' => [ 'type' => 'integer', 'locationName' => 'port', ],
                'extension' =>  [ 'shape' => 'ReqExtension', ],
                'cpuArchType' => [ 'type' => 'string', 'locationName' => 'cpuArchType', ],
                'backupId' => [ 'type' => 'string', 'locationName' => 'backupId', ],
                'srcInstanceId' => [ 'type' => 'string', 'locationName' => 'srcInstanceId', ],
                'configTemplateId' => [ 'type' => 'string', 'locationName' => 'configTemplateId', ],
                'opsTags' => [ 'type' => 'list', 'member' => [ 'shape' => 'OpsTag', ], ],
            ],
        ],
        'OpsTag' => [
            'type' => 'structure',
            'members' => [
                'key' => [ 'type' => 'string', 'locationName' => 'key', ],
                'value' => [ 'type' => 'string', 'locationName' => 'value', ],
            ],
        ],
        'ChartRelease' => [
            'type' => 'structure',
            'members' => [
                'chart' => [ 'type' => 'string', 'locationName' => 'chart', ],
                'version' => [ 'type' => 'string', 'locationName' => 'version', ],
                'chartName' => [ 'type' => 'string', 'locationName' => 'chartName', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'isDefault' => [ 'type' => 'boolean', 'locationName' => 'isDefault', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'createdTime' => [ 'type' => 'string', 'locationName' => 'createdTime', ],
            ],
        ],
        'KeyFilter' => [
            'type' => 'structure',
            'members' => [
                'filterType' => [ 'type' => 'string', 'locationName' => 'filterType', ],
                'operator' => [ 'type' => 'string', 'locationName' => 'operator', ],
                'value' => [ 'type' => 'integer', 'locationName' => 'value', ],
            ],
        ],
        'ClearDataTaskInfo' => [
            'type' => 'structure',
            'members' => [
                'clearType' => [ 'type' => 'string', 'locationName' => 'clearType', ],
                'keyPattern' => [ 'type' => 'string', 'locationName' => 'keyPattern', ],
                'keyFilter' => [ 'type' => 'list', 'member' => [ 'shape' => 'KeyFilter', ], ],
                'qpsLimit' => [ 'type' => 'integer', 'locationName' => 'qpsLimit', ],
                'progress' => [ 'type' => 'integer', 'locationName' => 'progress', ],
                'effectKeys' => [ 'type' => 'integer', 'locationName' => 'effectKeys', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'lastTransitionTime' => [ 'type' => 'string', 'locationName' => 'lastTransitionTime', ],
            ],
        ],
        'Details' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'port' => [ 'type' => 'string', 'locationName' => 'port', ],
                'age' => [ 'type' => 'string', 'locationName' => 'age', ],
                'idle' => [ 'type' => 'string', 'locationName' => 'idle', ],
                'db' => [ 'type' => 'string', 'locationName' => 'db', ],
                'lastCmd' => [ 'type' => 'string', 'locationName' => 'lastCmd', ],
            ],
        ],
        'Ips' => [
            'type' => 'structure',
            'members' => [
                'ip' => [ 'type' => 'string', 'locationName' => 'ip', ],
                'clientCount' => [ 'type' => 'integer', 'locationName' => 'clientCount', ],
            ],
        ],
        'Redis' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
            ],
        ],
        'TopoInfo' => [
            'type' => 'structure',
            'members' => [
                'cacheInstanceId' => [ 'type' => 'string', 'locationName' => 'cacheInstanceId', ],
                'totalMemory' => [ 'type' => 'long', 'locationName' => 'totalMemory', ],
                'proxyInfo' => [ 'type' => 'list', 'member' => [ 'shape' => 'RedisNode', ], ],
                'shardInfo' => [ 'type' => 'list', 'member' => [ 'shape' => 'ShardInfo', ], ],
            ],
        ],
        'ClusterInfo' => [
            'type' => 'structure',
            'members' => [
                'proxies' => [ 'type' => 'list', 'member' => [ 'shape' => 'Proxy', ], ],
                'shards' => [ 'type' => 'list', 'member' => [ 'shape' => 'Shard', ], ],
                'redis' => [ 'type' => 'list', 'member' => [ 'shape' => 'Redis', ], ],
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
        'ShardInfo' => [
            'type' => 'structure',
            'members' => [
                'master' =>  [ 'shape' => 'RedisNode', ],
                'replicas' => [ 'type' => 'list', 'member' => [ 'shape' => 'RedisNode', ], ],
            ],
        ],
        'RedisNode' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'shardId' => [ 'type' => 'string', 'locationName' => 'shardId', ],
                'role' => [ 'type' => 'string', 'locationName' => 'role', ],
                'address' => [ 'type' => 'string', 'locationName' => 'address', ],
                'az' => [ 'type' => 'string', 'locationName' => 'az', ],
                'ng' => [ 'type' => 'string', 'locationName' => 'ng', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'slots' => [ 'type' => 'integer', 'locationName' => 'slots', ],
                'usedMemory' => [ 'type' => 'long', 'locationName' => 'usedMemory', ],
                'maxMemory' => [ 'type' => 'long', 'locationName' => 'maxMemory', ],
            ],
        ],
        'Config' => [
            'type' => 'structure',
            'members' => [
                'commonConfigs' => [ 'type' => 'object', 'locationName' => 'commonConfigs', ],
                'masterConfigs' => [ 'type' => 'object', 'locationName' => 'masterConfigs', ],
                'slaveConfigs' => [ 'type' => 'object', 'locationName' => 'slaveConfigs', ],
                'proxyConfigs' => [ 'type' => 'object', 'locationName' => 'proxyConfigs', ],
            ],
        ],
        'ConfigItem' => [
            'type' => 'structure',
            'members' => [
                'configName' => [ 'type' => 'string', 'locationName' => 'configName', ],
                'configValue' => [ 'type' => 'string', 'locationName' => 'configValue', ],
                'configDefaultValue' => [ 'type' => 'string', 'locationName' => 'configDefaultValue', ],
                'configValueType' => [ 'type' => 'string', 'locationName' => 'configValueType', ],
                'configValueMin' => [ 'type' => 'integer', 'locationName' => 'configValueMin', ],
                'configValueMax' => [ 'type' => 'integer', 'locationName' => 'configValueMax', ],
                'configValueOptional' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'configValueOutputBuffer' => [ 'type' => 'string', 'locationName' => 'configValueOutputBuffer', ],
                'configDescription' => [ 'type' => 'string', 'locationName' => 'configDescription', ],
                'configUnSupport' => [ 'type' => 'boolean', 'locationName' => 'configUnSupport', ],
            ],
        ],
        'ModifyHistory' => [
            'type' => 'structure',
            'members' => [
                'configName' => [ 'type' => 'string', 'locationName' => 'configName', ],
                'beforeConfigValue' => [ 'type' => 'string', 'locationName' => 'beforeConfigValue', ],
                'afterConfigValue' => [ 'type' => 'string', 'locationName' => 'afterConfigValue', ],
                'modifyStatus' => [ 'type' => 'string', 'locationName' => 'modifyStatus', ],
                'modifyTime' => [ 'type' => 'string', 'locationName' => 'modifyTime', ],
            ],
        ],
        'UpdateConfigTemplate' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'val' => [ 'type' => 'map', 'key' => [ 'type' => 'string', ], 'value' => [ 'type' => 'string', ], ],
            ],
        ],
        'ConfigTemplate' => [
            'type' => 'structure',
            'members' => [
                'templateId' => [ 'type' => 'string', 'locationName' => 'templateId', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'val' => [ 'type' => 'list', 'member' => [ 'shape' => 'ConfigItem', ], ],
                'redisType' => [ 'type' => 'string', 'locationName' => 'redisType', ],
                'redisVersion' => [ 'type' => 'string', 'locationName' => 'redisVersion', ],
                'tplType' => [ 'type' => 'string', 'locationName' => 'tplType', ],
                'user' => [ 'type' => 'string', 'locationName' => 'user', ],
                'pin' => [ 'type' => 'string', 'locationName' => 'pin', ],
                'createdTime' => [ 'type' => 'string', 'locationName' => 'createdTime', ],
                'modifiedTime' => [ 'type' => 'string', 'locationName' => 'modifiedTime', ],
            ],
        ],
        'CreateConfigTemplate' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'val' => [ 'type' => 'map', 'key' => [ 'type' => 'string', ], 'value' => [ 'type' => 'string', ], ],
                'redisType' => [ 'type' => 'string', 'locationName' => 'redisType', ],
                'redisVersion' => [ 'type' => 'string', 'locationName' => 'redisVersion', ],
            ],
        ],
        'Container' => [
            'type' => 'structure',
            'members' => [
                'containerName' => [ 'type' => 'string', 'locationName' => 'containerName', ],
                'imageTag' => [ 'type' => 'string', 'locationName' => 'imageTag', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'request' => [ 'type' => 'string', 'locationName' => 'request', ],
                'limit' => [ 'type' => 'string', 'locationName' => 'limit', ],
                'restart' => [ 'type' => 'integer', 'locationName' => 'restart', ],
            ],
        ],
        'DiagnoseItem' => [
            'type' => 'structure',
            'members' => [
                'desc' => [ 'type' => 'string', 'locationName' => 'desc', ],
                'penalty' => [ 'type' => 'integer', 'locationName' => 'penalty', ],
                'items' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'advice' => [ 'type' => 'string', 'locationName' => 'advice', ],
                'explanation' => [ 'type' => 'string', 'locationName' => 'explanation', ],
            ],
        ],
        'DiagnoseSlowLog' => [
            'type' => 'structure',
            'members' => [
                'shardId' => [ 'type' => 'string', 'locationName' => 'shardId', ],
                'command' => [ 'type' => 'string', 'locationName' => 'command', ],
                'startTime' => [ 'type' => 'string', 'locationName' => 'startTime', ],
                'executionTime' => [ 'type' => 'string', 'locationName' => 'executionTime', ],
                'clientAddr' => [ 'type' => 'string', 'locationName' => 'clientAddr', ],
                'clientName' => [ 'type' => 'string', 'locationName' => 'clientName', ],
            ],
        ],
        'DiagnoseNodeStatus' => [
            'type' => 'structure',
            'members' => [
                'diagnoseItem' => [ 'type' => 'string', 'locationName' => 'diagnoseItem', ],
                'max' => [ 'type' => 'float', 'locationName' => 'max', ],
                'min' => [ 'type' => 'float', 'locationName' => 'min', ],
                'avg' => [ 'type' => 'float', 'locationName' => 'avg', ],
                'isTilting' => [ 'type' => 'boolean', 'locationName' => 'isTilting', ],
                'tiltingNode' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'DiagnoseOverrideMetric' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'threshold' => [ 'type' => 'float', 'locationName' => 'threshold', ],
                'penalty' => [ 'type' => 'integer', 'locationName' => 'penalty', ],
            ],
        ],
        'UserDiagnoseTaskInfo' => [
            'type' => 'structure',
            'members' => [
                'taskId' => [ 'type' => 'string', 'locationName' => 'taskId', ],
                'type' => [ 'type' => 'string', 'locationName' => 'type', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'generationTime' => [ 'type' => 'string', 'locationName' => 'generationTime', ],
                'startTime' => [ 'type' => 'string', 'locationName' => 'startTime', ],
                'endTime' => [ 'type' => 'string', 'locationName' => 'endTime', ],
                'score' => [ 'type' => 'integer', 'locationName' => 'score', ],
            ],
        ],
        'DiagnosePolicy' => [
            'type' => 'structure',
            'members' => [
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'autoDiagnose' => [ 'type' => 'boolean', 'locationName' => 'autoDiagnose', ],
                'diagnoseTime' => [ 'type' => 'string', 'locationName' => 'diagnoseTime', ],
                'diagnosePeriod' => [ 'type' => 'string', 'locationName' => 'diagnosePeriod', ],
                'nextDiagnoseTime' => [ 'type' => 'string', 'locationName' => 'nextDiagnoseTime', ],
            ],
        ],
        'DiagnoseSummary' => [
            'type' => 'structure',
            'members' => [
                'score' => [ 'type' => 'integer', 'locationName' => 'score', ],
                'penaltyItems' => [ 'type' => 'list', 'member' => [ 'shape' => 'DiagnoseItem', ], ],
                'healthItems' => [ 'type' => 'list', 'member' => [ 'shape' => 'DiagnoseItem', ], ],
            ],
        ],
        'DiagnosePerformance' => [
            'type' => 'structure',
            'members' => [
                'redisNodeStatus' => [ 'type' => 'list', 'member' => [ 'shape' => 'DiagnoseNodeStatus', ], ],
                'proxyNodeStatus' => [ 'type' => 'list', 'member' => [ 'shape' => 'DiagnoseNodeStatus', ], ],
            ],
        ],
        'DiagnoseBasicInfo' => [
            'type' => 'structure',
            'members' => [
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'instanceName' => [ 'type' => 'string', 'locationName' => 'instanceName', ],
                'redisVersion' => [ 'type' => 'string', 'locationName' => 'redisVersion', ],
                'cacheInstanceType' => [ 'type' => 'string', 'locationName' => 'cacheInstanceType', ],
                'shardNumber' => [ 'type' => 'integer', 'locationName' => 'shardNumber', ],
                'memoryMBPerShard' => [ 'type' => 'integer', 'locationName' => 'memoryMBPerShard', ],
                'replicaNumber' => [ 'type' => 'integer', 'locationName' => 'replicaNumber', ],
                'azId' =>  [ 'shape' => 'AzId', ],
                'startTime' => [ 'type' => 'string', 'locationName' => 'startTime', ],
                'endTime' => [ 'type' => 'string', 'locationName' => 'endTime', ],
            ],
        ],
        'InstanceDiagnose' => [
            'type' => 'structure',
            'members' => [
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'instanceName' => [ 'type' => 'string', 'locationName' => 'instanceName', ],
                'autoDiagnose' => [ 'type' => 'boolean', 'locationName' => 'autoDiagnose', ],
                'diagnosePeriod' => [ 'type' => 'string', 'locationName' => 'diagnosePeriod', ],
                'diagnoseTime' => [ 'type' => 'string', 'locationName' => 'diagnoseTime', ],
                'latestDiagnoseTime' => [ 'type' => 'string', 'locationName' => 'latestDiagnoseTime', ],
                'latestDiagnoseResult' => [ 'type' => 'integer', 'locationName' => 'latestDiagnoseResult', ],
                'latestDiagnoseSummary' => [ 'type' => 'string', 'locationName' => 'latestDiagnoseSummary', ],
                'latestDiagnoseTaskId' => [ 'type' => 'string', 'locationName' => 'latestDiagnoseTaskId', ],
            ],
        ],
        'DiagnosisResultItem' => [
            'type' => 'structure',
            'members' => [
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'msg' => [ 'type' => 'string', 'locationName' => 'msg', ],
                'currentAZList' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'DisableCommandsInfo' => [
            'type' => 'structure',
            'members' => [
                'commandName' => [ 'type' => 'string', 'locationName' => 'commandName', ],
                'disableTime' => [ 'type' => 'string', 'locationName' => 'disableTime', ],
            ],
        ],
        'DisableCommands' => [
            'type' => 'structure',
            'members' => [
                'isDisable' => [ 'type' => 'boolean', 'locationName' => 'isDisable', ],
                'commandName' => [ 'type' => 'string', 'locationName' => 'commandName', ],
            ],
        ],
        'DownloadUrl' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'link' => [ 'type' => 'string', 'locationName' => 'link', ],
            ],
        ],
        'ExternalBasicInstance' => [
            'type' => 'structure',
            'members' => [
                'number' => [ 'type' => 'integer', 'locationName' => 'number', ],
                'instances' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'HaSwitch' => [
            'type' => 'structure',
            'members' => [
                'shards' => [ 'type' => 'list', 'member' => [ 'type' => 'integer', ], ],
                'targetNG' => [ 'type' => 'string', 'locationName' => 'targetNG', ],
                'targetAZ' => [ 'type' => 'string', 'locationName' => 'targetAZ', ],
            ],
        ],
        'ShardHealth' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'shardId' => [ 'type' => 'integer', 'locationName' => 'shardId', ],
                'health' => [ 'type' => 'string', 'locationName' => 'health', ],
                'masterHealth' =>  [ 'shape' => 'RedisNodeHealth', ],
                'slaveHealth' =>  [ 'shape' => 'RedisNodeHealth', ],
            ],
        ],
        'ProxyInfo' => [
            'type' => 'structure',
            'members' => [
                'proxy_name' => [ 'type' => 'string', 'locationName' => 'proxy_name', ],
                'success_rate' => [ 'type' => 'float', 'locationName' => 'success_rate', ],
                'total_req' => [ 'type' => 'integer', 'locationName' => 'total_req', ],
                'available_req' => [ 'type' => 'integer', 'locationName' => 'available_req', ],
                'errors' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'start_time' => [ 'type' => 'string', 'locationName' => 'start_time', ],
                'duration' => [ 'type' => 'string', 'locationName' => 'duration', ],
            ],
        ],
        'ShardsHealth' => [
            'type' => 'structure',
            'members' => [
                'redShards' => [ 'type' => 'integer', 'locationName' => 'redShards', ],
                'orangeShards' => [ 'type' => 'integer', 'locationName' => 'orangeShards', ],
                'yellowShards' => [ 'type' => 'integer', 'locationName' => 'yellowShards', ],
                'greenShards' => [ 'type' => 'integer', 'locationName' => 'greenShards', ],
                'unHealthShards' => [ 'type' => 'list', 'member' => [ 'shape' => 'ShardHealth', ], ],
            ],
        ],
        'Conditions' => [
            'type' => 'structure',
            'members' => [
                'type' => [ 'type' => 'string', 'locationName' => 'type', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'reason' => [ 'type' => 'string', 'locationName' => 'reason', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'taskId' => [ 'type' => 'string', 'locationName' => 'taskId', ],
                'createtime' => [ 'type' => 'string', 'locationName' => 'createtime', ],
                'updatetime' => [ 'type' => 'string', 'locationName' => 'updatetime', ],
            ],
        ],
        'RedisNodeHealth' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'ip' => [ 'type' => 'string', 'locationName' => 'ip', ],
                'role' => [ 'type' => 'string', 'locationName' => 'role', ],
                'slots' => [ 'type' => 'string', 'locationName' => 'slots', ],
                'maxMemory' => [ 'type' => 'string', 'locationName' => 'maxMemory', ],
                'health' => [ 'type' => 'string', 'locationName' => 'health', ],
                'roleExpected' => [ 'type' => 'boolean', 'locationName' => 'roleExpected', ],
                'slotsExpected' => [ 'type' => 'boolean', 'locationName' => 'slotsExpected', ],
                'maxMemoryExpected' => [ 'type' => 'boolean', 'locationName' => 'maxMemoryExpected', ],
                'topoExpected' => [ 'type' => 'boolean', 'locationName' => 'topoExpected', ],
            ],
        ],
        'ProxyProbeStats' => [
            'type' => 'structure',
            'members' => [
                'space_success_rate' => [ 'type' => 'boolean', 'locationName' => 'space_success_rate', ],
                'proxy_success_rate' => [ 'type' => 'object', 'locationName' => 'proxy_success_rate', ],
                'running_proxy' => [ 'type' => 'integer', 'locationName' => 'running_proxy', ],
                'start_time' => [ 'type' => 'string', 'locationName' => 'start_time', ],
                'duration' => [ 'type' => 'string', 'locationName' => 'duration', ],
                'proxy_info' =>  [ 'shape' => 'ProxyInfo', ],
            ],
        ],
        'ProxyHealth' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'ip' => [ 'type' => 'string', 'locationName' => 'ip', ],
                'phase' => [ 'type' => 'string', 'locationName' => 'phase', ],
                'health' => [ 'type' => 'string', 'locationName' => 'health', ],
                'probeSuccessPercent' => [ 'type' => 'float', 'locationName' => 'probeSuccessPercent', ],
                'networkExpected' => [ 'type' => 'boolean', 'locationName' => 'networkExpected', ],
                'topoExpected' => [ 'type' => 'boolean', 'locationName' => 'topoExpected', ],
                'passwordExpected' => [ 'type' => 'boolean', 'locationName' => 'passwordExpected', ],
            ],
        ],
        'ReadonlyHealth' => [
            'type' => 'structure',
            'members' => [
                'redReadOnly' => [ 'type' => 'integer', 'locationName' => 'redReadOnly', ],
                'orangeReadOnly' => [ 'type' => 'integer', 'locationName' => 'orangeReadOnly', ],
                'yellowReadOnly' => [ 'type' => 'integer', 'locationName' => 'yellowReadOnly', ],
                'greenReadOnly' => [ 'type' => 'integer', 'locationName' => 'greenReadOnly', ],
                'unHealthReadOnly' => [ 'type' => 'list', 'member' => [ 'shape' => 'RedisNodeHealth', ], ],
            ],
        ],
        'AdminHealth' => [
            'type' => 'structure',
            'members' => [
                'health' => [ 'type' => 'string', 'locationName' => 'health', ],
                'configMapNetWorkExpected' => [ 'type' => 'boolean', 'locationName' => 'configMapNetWorkExpected', ],
                'nlbNetWorkExpected' => [ 'type' => 'boolean', 'locationName' => 'nlbNetWorkExpected', ],
            ],
        ],
        'Health' => [
            'type' => 'structure',
            'members' => [
                'health' => [ 'type' => 'string', 'locationName' => 'health', ],
                'adminHealth' =>  [ 'shape' => 'AdminHealth', ],
                'proxyHealth' =>  [ 'shape' => 'ProxiesHealth', ],
                'shards_health' =>  [ 'shape' => 'ShardsHealth', ],
                'readonlyHealth' =>  [ 'shape' => 'ReadonlyHealth', ],
            ],
        ],
        'ProxiesHealth' => [
            'type' => 'structure',
            'members' => [
                'redProxy' => [ 'type' => 'integer', 'locationName' => 'redProxy', ],
                'orangeProxy' => [ 'type' => 'integer', 'locationName' => 'orangeProxy', ],
                'yellowProxy' => [ 'type' => 'integer', 'locationName' => 'yellowProxy', ],
                'greenProxy' => [ 'type' => 'integer', 'locationName' => 'greenProxy', ],
                'probeSuccessPercent' => [ 'type' => 'float', 'locationName' => 'probeSuccessPercent', ],
                'unHealthProxy' => [ 'type' => 'list', 'member' => [ 'shape' => 'ProxyHealth', ], ],
            ],
        ],
        'Tasks' => [
            'type' => 'structure',
            'members' => [
                'taskId' => [ 'type' => 'string', 'locationName' => 'taskId', ],
                'startTime' => [ 'type' => 'string', 'locationName' => 'startTime', ],
            ],
        ],
        'ImageRelease' => [
            'type' => 'structure',
            'members' => [
                'redisVersion' => [ 'type' => 'string', 'locationName' => 'redisVersion', ],
                'component' => [ 'type' => 'string', 'locationName' => 'component', ],
                'imageTag' => [ 'type' => 'string', 'locationName' => 'imageTag', ],
                'imageName' => [ 'type' => 'string', 'locationName' => 'imageName', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'isDefault' => [ 'type' => 'boolean', 'locationName' => 'isDefault', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'createdTime' => [ 'type' => 'string', 'locationName' => 'createdTime', ],
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
                'resourceStatus' => [ 'type' => 'string', 'locationName' => 'resourceStatus', ],
                'serviceCode' => [ 'type' => 'string', 'locationName' => 'serviceCode', ],
            ],
        ],
        'ShardSpec' => [
            'type' => 'structure',
            'members' => [
                'shardClass' => [ 'type' => 'string', 'locationName' => 'shardClass', ],
                'cpu' => [ 'type' => 'integer', 'locationName' => 'cpu', ],
                'memoryGB' => [ 'type' => 'integer', 'locationName' => 'memoryGB', ],
                'memoryMB' => [ 'type' => 'integer', 'locationName' => 'memoryMB', ],
                'diskGB' => [ 'type' => 'integer', 'locationName' => 'diskGB', ],
                'maxConnection' => [ 'type' => 'integer', 'locationName' => 'maxConnection', ],
                'bandwidthMbps' => [ 'type' => 'integer', 'locationName' => 'bandwidthMbps', ],
                'shardNumberList' => [ 'type' => 'list', 'member' => [ 'type' => 'integer', ], ],
            ],
        ],
        'TypeInfo' => [
            'type' => 'structure',
            'members' => [
                'instanceType' => [ 'type' => 'string', 'locationName' => 'instanceType', ],
                'specs' => [ 'type' => 'list', 'member' => [ 'shape' => 'SpecInfo', ], ],
            ],
        ],
        'VersionInfo' => [
            'type' => 'structure',
            'members' => [
                'redisVersion' => [ 'type' => 'string', 'locationName' => 'redisVersion', ],
                'instanceTypes' => [ 'type' => 'list', 'member' => [ 'shape' => 'TypeInfo', ], ],
            ],
        ],
        'InstanceSpec' => [
            'type' => 'structure',
            'members' => [
                'region' => [ 'type' => 'string', 'locationName' => 'region', ],
                'instanceVersions' => [ 'type' => 'list', 'member' => [ 'shape' => 'VersionInfo', ], ],
            ],
        ],
        'SpecInfo' => [
            'type' => 'structure',
            'members' => [
                'memoryGB' => [ 'type' => 'integer', 'locationName' => 'memoryGB', ],
                'memoryMB' => [ 'type' => 'integer', 'locationName' => 'memoryMB', ],
                'instanceClass' => [ 'type' => 'string', 'locationName' => 'instanceClass', ],
                'cpu' => [ 'type' => 'integer', 'locationName' => 'cpu', ],
                'diskGB' => [ 'type' => 'integer', 'locationName' => 'diskGB', ],
                'maxConnection' => [ 'type' => 'integer', 'locationName' => 'maxConnection', ],
                'bandwidthMbps' => [ 'type' => 'integer', 'locationName' => 'bandwidthMbps', ],
                'ipNumber' => [ 'type' => 'integer', 'locationName' => 'ipNumber', ],
                'shard' =>  [ 'shape' => 'ShardInfo', ],
                'azs' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'Node' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
                'ip' => [ 'type' => 'string', 'locationName' => 'ip', ],
                'port' => [ 'type' => 'integer', 'locationName' => 'port', ],
            ],
        ],
        'RedisShard' => [
            'type' => 'structure',
            'members' => [
                'master' =>  [ 'shape' => 'Node', ],
                'slaves' => [ 'type' => 'list', 'member' => [ 'shape' => 'Node', ], ],
            ],
        ],
        'InstanceVpcIp' => [
            'type' => 'structure',
            'members' => [
                'proxies' => [ 'type' => 'list', 'member' => [ 'shape' => 'Node', ], ],
                'shards' => [ 'type' => 'list', 'member' => [ 'shape' => 'RedisShard', ], ],
            ],
        ],
        'InternalInstance' => [
            'type' => 'structure',
            'members' => [
                'pin' => [ 'type' => 'string', 'locationName' => 'pin', ],
                'region' => [ 'type' => 'string', 'locationName' => 'region', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'instanceName' => [ 'type' => 'string', 'locationName' => 'instanceName', ],
                'instanceType' => [ 'type' => 'string', 'locationName' => 'instanceType', ],
                'instanceStatus' => [ 'type' => 'string', 'locationName' => 'instanceStatus', ],
                'instanceVersion' => [ 'type' => 'string', 'locationName' => 'instanceVersion', ],
                'createdTime' => [ 'type' => 'string', 'locationName' => 'createdTime', ],
                'vpcId' => [ 'type' => 'string', 'locationName' => 'vpcId', ],
                'subnetId' => [ 'type' => 'string', 'locationName' => 'subnetId', ],
                'connectionDomain' => [ 'type' => 'string', 'locationName' => 'connectionDomain', ],
                'connectionPort' => [ 'type' => 'integer', 'locationName' => 'connectionPort', ],
                'auth' => [ 'type' => 'boolean', 'locationName' => 'auth', ],
                'frontAppIp' => [ 'type' => 'string', 'locationName' => 'frontAppIp', ],
                'ips' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'hostIps' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'NodeSpec' => [
            'type' => 'structure',
            'members' => [
                'cpuCores' => [ 'type' => 'integer', 'locationName' => 'cpuCores', ],
                'memoryGBs' => [ 'type' => 'integer', 'locationName' => 'memoryGBs', ],
                'memoryMBs' => [ 'type' => 'integer', 'locationName' => 'memoryMBs', ],
                'totalDiskGBs' => [ 'type' => 'integer', 'locationName' => 'totalDiskGBs', ],
                'localDiskGBs' => [ 'type' => 'integer', 'locationName' => 'localDiskGBs', ],
                'cloudDiskGBs' => [ 'type' => 'integer', 'locationName' => 'cloudDiskGBs', ],
            ],
        ],
        'InstanceInternalSpec' => [
            'type' => 'structure',
            'members' => [
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'instanceMemoryGB' => [ 'type' => 'integer', 'locationName' => 'instanceMemoryGB', ],
                'instanceMemoryMB' => [ 'type' => 'integer', 'locationName' => 'instanceMemoryMB', ],
                'nodeRoles' => [ 'type' => 'list', 'member' => [ 'shape' => 'NodeRole', ], ],
            ],
        ],
        'NodeRole' => [
            'type' => 'structure',
            'members' => [
                'kind' => [ 'type' => 'string', 'locationName' => 'kind', ],
                'num' => [ 'type' => 'integer', 'locationName' => 'num', ],
                'nodeSpec' =>  [ 'shape' => 'NodeSpec', ],
            ],
        ],
        'MetricPoint' => [
            'type' => 'structure',
            'members' => [
                'timestamp' => [ 'type' => 'string', 'locationName' => 'timestamp', ],
                'value' => [ 'type' => 'float', 'locationName' => 'value', ],
            ],
        ],
        'MetricBucket' => [
            'type' => 'structure',
            'members' => [
                'bucketName' => [ 'type' => 'string', 'locationName' => 'bucketName', ],
                'max' => [ 'type' => 'float', 'locationName' => 'max', ],
                'avg' => [ 'type' => 'float', 'locationName' => 'avg', ],
                'latest' => [ 'type' => 'float', 'locationName' => 'latest', ],
                'points' => [ 'type' => 'float', 'locationName' => 'points', ],
            ],
        ],
        'ModuleInfo' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
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
        'ProxyNode' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'address' => [ 'type' => 'string', 'locationName' => 'address', ],
                'az' => [ 'type' => 'string', 'locationName' => 'az', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
            ],
        ],
        'ProxySlowLogItem' => [
            'type' => 'structure',
            'members' => [
                'startTime' => [ 'type' => 'integer', 'locationName' => 'startTime', ],
                'proxyName' => [ 'type' => 'string', 'locationName' => 'proxyName', ],
                'command' => [ 'type' => 'string', 'locationName' => 'command', ],
                'shardIds' => [ 'type' => 'string', 'locationName' => 'shardIds', ],
                'redis_server' => [ 'type' => 'string', 'locationName' => 'redis_server', ],
                'clientIp' => [ 'type' => 'string', 'locationName' => 'clientIp', ],
                'db' => [ 'type' => 'integer', 'locationName' => 'db', ],
                'totalLatency' => [ 'type' => 'integer', 'locationName' => 'totalLatency', ],
                'sendToRedisLatency' => [ 'type' => 'integer', 'locationName' => 'sendToRedisLatency', ],
                'recvFromRedisLatency' => [ 'type' => 'integer', 'locationName' => 'recvFromRedisLatency', ],
                'replyToClientLatency' => [ 'type' => 'integer', 'locationName' => 'replyToClientLatency', ],
                'waitCmdReplyCount' => [ 'type' => 'integer', 'locationName' => 'waitCmdReplyCount', ],
            ],
        ],
        'ClientInfo' => [
            'type' => 'structure',
            'members' => [
                'instanceName' => [ 'type' => 'string', 'locationName' => 'instanceName', ],
                'version' => [ 'type' => 'string', 'locationName' => 'version', ],
                'ip' => [ 'type' => 'string', 'locationName' => 'ip', ],
                'pid' => [ 'type' => 'string', 'locationName' => 'pid', ],
                'uuid' => [ 'type' => 'string', 'locationName' => 'uuid', ],
                'startTime' => [ 'type' => 'string', 'locationName' => 'startTime', ],
            ],
        ],
        'DefaultFilterValue' => [
            'type' => 'structure',
            'members' => [
                'tp999' => [ 'type' => 'integer', 'locationName' => 'tp999', ],
                'tp99' => [ 'type' => 'integer', 'locationName' => 'tp99', ],
                'tp90' => [ 'type' => 'integer', 'locationName' => 'tp90', ],
                'tp50' => [ 'type' => 'integer', 'locationName' => 'tp50', ],
            ],
        ],
        'PerformanceDataMsg' => [
            'type' => 'structure',
            'members' => [
                'ts' => [ 'type' => 'string', 'locationName' => 'ts', ],
                'tp999' => [ 'type' => 'integer', 'locationName' => 'tp999', ],
                'tp99' => [ 'type' => 'integer', 'locationName' => 'tp99', ],
                'tp90' => [ 'type' => 'integer', 'locationName' => 'tp90', ],
                'tp50' => [ 'type' => 'integer', 'locationName' => 'tp50', ],
                'max' => [ 'type' => 'integer', 'locationName' => 'max', ],
                'min' => [ 'type' => 'integer', 'locationName' => 'min', ],
                'success' => [ 'type' => 'integer', 'locationName' => 'success', ],
                'error' => [ 'type' => 'integer', 'locationName' => 'error', ],
                'redirection' => [ 'type' => 'integer', 'locationName' => 'redirection', ],
            ],
        ],
        'RedisCmd' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'data' => [ 'type' => 'long', 'locationName' => 'data', ],
            ],
        ],
        'RedisHotKey' => [
            'type' => 'structure',
            'members' => [
                'key' => [ 'type' => 'string', 'locationName' => 'key', ],
                'accessTime' => [ 'type' => 'string', 'locationName' => 'accessTime', ],
                'accessCount' => [ 'type' => 'integer', 'locationName' => 'accessCount', ],
                'db' => [ 'type' => 'integer', 'locationName' => 'db', ],
            ],
        ],
        'RedisBigKey' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'db' => [ 'type' => 'integer', 'locationName' => 'db', ],
                'size' => [ 'type' => 'integer', 'locationName' => 'size', ],
            ],
        ],
        'RedisKey' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'db' => [ 'type' => 'integer', 'locationName' => 'db', ],
                'size' => [ 'type' => 'integer', 'locationName' => 'size', ],
                'keyType' => [ 'type' => 'string', 'locationName' => 'keyType', ],
                'frequency' => [ 'type' => 'integer', 'locationName' => 'frequency', ],
            ],
        ],
        'RedisNodeDetail' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'shardId' => [ 'type' => 'string', 'locationName' => 'shardId', ],
                'role' => [ 'type' => 'string', 'locationName' => 'role', ],
                'address' => [ 'type' => 'string', 'locationName' => 'address', ],
                'az' => [ 'type' => 'string', 'locationName' => 'az', ],
                'ng' => [ 'type' => 'string', 'locationName' => 'ng', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'slots' => [ 'type' => 'integer', 'locationName' => 'slots', ],
                'usedMemory' => [ 'type' => 'long', 'locationName' => 'usedMemory', ],
                'maxMemory' => [ 'type' => 'long', 'locationName' => 'maxMemory', ],
                'nodeName' => [ 'type' => 'string', 'locationName' => 'nodeName', ],
                'restart' => [ 'type' => 'integer', 'locationName' => 'restart', ],
                'age' => [ 'type' => 'long', 'locationName' => 'age', ],
                'condi' => [ 'type' => 'string', 'locationName' => 'condi', ],
                'containers' => [ 'type' => 'list', 'member' => [ 'shape' => 'Container', ], ],
            ],
        ],
        'RedisType' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'keyNumber' => [ 'type' => 'long', 'locationName' => 'keyNumber', ],
                'keySize' => [ 'type' => 'long', 'locationName' => 'keySize', ],
                'ratio' => [ 'type' => 'float', 'locationName' => 'ratio', ],
            ],
        ],
        'SentinelCluster' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'namespace' => [ 'type' => 'string', 'locationName' => 'namespace', ],
                'azList' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'chartVersion' => [ 'type' => 'string', 'locationName' => 'chartVersion', ],
                'clusterId' => [ 'type' => 'string', 'locationName' => 'clusterId', ],
            ],
        ],
        'SentinelNode' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'address' => [ 'type' => 'string', 'locationName' => 'address', ],
                'az' => [ 'type' => 'string', 'locationName' => 'az', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
            ],
        ],
        'SlowLog' => [
            'type' => 'structure',
            'members' => [
                'command' => [ 'type' => 'string', 'locationName' => 'command', ],
                'startTime' => [ 'type' => 'string', 'locationName' => 'startTime', ],
                'executionTime' => [ 'type' => 'string', 'locationName' => 'executionTime', ],
                'shardId' => [ 'type' => 'string', 'locationName' => 'shardId', ],
                'clientAddr' => [ 'type' => 'string', 'locationName' => 'clientAddr', ],
                'clientName' => [ 'type' => 'string', 'locationName' => 'clientName', ],
            ],
        ],
        'TaskStepDetail' => [
            'type' => 'structure',
            'members' => [
                'stepName' => [ 'type' => 'string', 'locationName' => 'stepName', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'startTime' => [ 'type' => 'string', 'locationName' => 'startTime', ],
                'endTime' => [ 'type' => 'string', 'locationName' => 'endTime', ],
            ],
        ],
        'TaskChangeDetail' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'before' => [ 'type' => 'string', 'locationName' => 'before', ],
                'after' => [ 'type' => 'string', 'locationName' => 'after', ],
            ],
        ],
        'TaskType' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'integer', 'locationName' => 'id', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'cnName' => [ 'type' => 'string', 'locationName' => 'cnName', ],
            ],
        ],
        'TaskInfo' => [
            'type' => 'structure',
            'members' => [
                'taskId' => [ 'type' => 'string', 'locationName' => 'taskId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'taskType' => [ 'type' => 'integer', 'locationName' => 'taskType', ],
                'taskTypeCn' => [ 'type' => 'string', 'locationName' => 'taskTypeCn', ],
                'taskStatus' => [ 'type' => 'string', 'locationName' => 'taskStatus', ],
                'startTime' => [ 'type' => 'string', 'locationName' => 'startTime', ],
                'endTime' => [ 'type' => 'string', 'locationName' => 'endTime', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'isSupportInterruptTask' => [ 'type' => 'boolean', 'locationName' => 'isSupportInterruptTask', ],
                'maintenanceStartTime' => [ 'type' => 'string', 'locationName' => 'maintenanceStartTime', ],
                'maintenanceEndTime' => [ 'type' => 'string', 'locationName' => 'maintenanceEndTime', ],
                'estimatedExecutionTime' => [ 'type' => 'string', 'locationName' => 'estimatedExecutionTime', ],
                'executionTime' => [ 'type' => 'string', 'locationName' => 'executionTime', ],
            ],
        ],
        'TaskProgress' => [
            'type' => 'structure',
            'members' => [
                'taskType' => [ 'type' => 'string', 'locationName' => 'taskType', ],
                'taskId' => [ 'type' => 'string', 'locationName' => 'taskId', ],
                'taskStatus' => [ 'type' => 'string', 'locationName' => 'taskStatus', ],
                'progressPercent' => [ 'type' => 'integer', 'locationName' => 'progressPercent', ],
                'elapsedTimeSecond' => [ 'type' => 'integer', 'locationName' => 'elapsedTimeSecond', ],
                'startTime' => [ 'type' => 'string', 'locationName' => 'startTime', ],
            ],
        ],
        'CommandHistory' => [
            'type' => 'structure',
            'members' => [
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'pin' => [ 'type' => 'string', 'locationName' => 'pin', ],
                'database' => [ 'type' => 'integer', 'locationName' => 'database', ],
                'delay' => [ 'type' => 'integer', 'locationName' => 'delay', ],
                'executeState' => [ 'type' => 'string', 'locationName' => 'executeState', ],
                'command' => [ 'type' => 'string', 'locationName' => 'command', ],
                'executeDate' => [ 'type' => 'string', 'locationName' => 'executeDate', ],
                'info' => [ 'type' => 'string', 'locationName' => 'info', ],
            ],
        ],
        'WhiteList' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'ips' => [ 'type' => 'string', 'locationName' => 'ips', ],
            ],
        ],
        'RedisServerLog' => [
            'type' => 'structure',
            'members' => [
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'podName' => [ 'type' => 'string', 'locationName' => 'podName', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
            ],
        ],
        'DescribeAvailableRegionResultShape' => [
            'type' => 'structure',
            'members' => [
                'availableRegions' => [ 'type' => 'list', 'member' => [ 'shape' => 'AvailableRegion', ], ],
            ],
        ],
        'DescribeAvailableRegionResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeAvailableRegionResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeAvailableRegionRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DescribeAvailableResourceResultShape' => [
            'type' => 'structure',
            'members' => [
                'availableResources' => [ 'type' => 'list', 'member' => [ 'shape' => 'AvailableResource', ], ],
            ],
        ],
        'DescribeAvailableResourceRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DescribeAvailableResource2ResultShape' => [
            'type' => 'structure',
            'members' => [
                'availableResources' => [ 'type' => 'list', 'member' => [ 'shape' => 'AvailableResource', ], ],
            ],
        ],
        'DescribeAvailableResource2ResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeAvailableResource2ResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeAvailableResourceResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeAvailableResourceResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeAvailableResource2RequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'JvesselV1ModifyProxyReplicaRequestShape' => [
            'type' => 'structure',
            'members' => [
                'proxyReplica' => [ 'type' => 'integer', 'locationName' => 'proxyReplica', ],
                'effectiveTime' => [ 'type' => 'string', 'locationName' => 'effectiveTime', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'cacheInstanceId' => [ 'type' => 'string', 'locationName' => 'cacheInstanceId', ],
            ],
        ],
        'DescribeAnalysisThresholdResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeAnalysisThresholdResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'JvesselV1ModifyProxyFlavorResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'ClientKillResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'SetDisableCommandsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'disableCommands' => [ 'type' => 'list', 'member' => [ 'shape' => 'DisableCommands', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'cacheInstanceId' => [ 'type' => 'string', 'locationName' => 'cacheInstanceId', ],
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
        'JvesselV1HealthResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'JvesselV1HealthResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeOfflineAnalysisOverviewResultShape' => [
            'type' => 'structure',
            'members' => [
                'startTime' => [ 'type' => 'string', 'locationName' => 'startTime', ],
                'backupIds' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'top' => [ 'type' => 'integer', 'locationName' => 'top', ],
                'prefixSeparator' => [ 'type' => 'string', 'locationName' => 'prefixSeparator', ],
                'keyPrefix' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'keysInfo' => [ 'type' => 'list', 'member' => [ 'shape' => 'KeysDistribution', ], ],
                'elementsInfo' => [ 'type' => 'list', 'member' => [ 'shape' => 'KeysDistribution', ], ],
                'keysExpireInfo' => [ 'type' => 'list', 'member' => [ 'shape' => 'KeysDistribution', ], ],
            ],
        ],
        'DescribeResizeModeIpTimeInfoRequestShape' => [
            'type' => 'structure',
            'members' => [
                'cacheInstanceClass' => [ 'type' => 'string', 'locationName' => 'cacheInstanceClass', ],
                'shardNumber' => [ 'type' => 'integer', 'locationName' => 'shardNumber', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'cacheInstanceId' => [ 'type' => 'string', 'locationName' => 'cacheInstanceId', ],
            ],
        ],
        'ModifyInstanceNodeGroupVersionResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'JvesselV1SetConfigResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'JvesselV1RollingUpdateResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DeleteRecycledCacheInstanceRequestShape' => [
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
                'shardNumber' => [ 'type' => 'integer', 'locationName' => 'shardNumber', ],
                'replicaNumber' => [ 'type' => 'integer', 'locationName' => 'replicaNumber', ],
                'replicaAzs2Add' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'parallel' => [ 'type' => 'boolean', 'locationName' => 'parallel', ],
                'effectiveTime' => [ 'type' => 'string', 'locationName' => 'effectiveTime', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'cacheInstanceId' => [ 'type' => 'string', 'locationName' => 'cacheInstanceId', ],
            ],
        ],
        'ModifyInstanceTLSRequestShape' => [
            'type' => 'structure',
            'members' => [
                'tlsType' => [ 'type' => 'string', 'locationName' => 'tlsType', ],
                'tlsStatus' => [ 'type' => 'string', 'locationName' => 'tlsStatus', ],
                'tlsVersion' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'cacheInstanceId' => [ 'type' => 'string', 'locationName' => 'cacheInstanceId', ],
            ],
        ],
        'DescribeBackupInfoResultShape' => [
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
                'backupShardMemoryMB' => [ 'type' => 'integer', 'locationName' => 'backupShardMemoryMB', ],
                'backupShardNum' => [ 'type' => 'integer', 'locationName' => 'backupShardNum', ],
                'backupDownloadURL' => [ 'type' => 'string', 'locationName' => 'backupDownloadURL', ],
                'extension' =>  [ 'shape' => 'BackupInfoExtension', ],
            ],
        ],
        'JvesselV1ListProxyConfigRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'cacheInstanceId' => [ 'type' => 'string', 'locationName' => 'cacheInstanceId', ],
            ],
        ],
        'ModifyRedisAvailableZonesResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'JvesselV1ListMasterConfigRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'cacheInstanceId' => [ 'type' => 'string', 'locationName' => 'cacheInstanceId', ],
            ],
        ],
        'ModifyBigKeyAnalysisTimeRequestShape' => [
            'type' => 'structure',
            'members' => [
                'analysisTime' => [ 'type' => 'string', 'locationName' => 'analysisTime', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'cacheInstanceId' => [ 'type' => 'string', 'locationName' => 'cacheInstanceId', ],
            ],
        ],
        'ModifyInstanceVersionResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeBigKeyAnalysisTimeResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeBigKeyAnalysisTimeResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeCacheInstancesResultShape' => [
            'type' => 'structure',
            'members' => [
                'cacheInstances' => [ 'type' => 'list', 'member' => [ 'shape' => 'CacheInstance', ], ],
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
            ],
        ],
        'LoadModulesResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'JvesselV1ProxyInfoResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'JvesselV1ProxyInfoResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ImportDataResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'JvesselV1SetConfigRequestShape' => [
            'type' => 'structure',
            'members' => [
                'config' =>  [ 'shape' => 'Config', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'cacheInstanceId' => [ 'type' => 'string', 'locationName' => 'cacheInstanceId', ],
            ],
        ],
        'ModifyInstanceNodeGroupVersionResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'JvesselV1ProbeSuccessRateRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'cacheInstanceId' => [ 'type' => 'string', 'locationName' => 'cacheInstanceId', ],
            ],
        ],
        'MaintenanceTimeResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'CreateAccountResponseShape' => [
            'type' => 'structure',
            'members' => [
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
        'DescribeBigKeyDetailResultShape' => [
            'type' => 'structure',
            'members' => [
                'startTime' => [ 'type' => 'string', 'locationName' => 'startTime', ],
                'finishTime' => [ 'type' => 'string', 'locationName' => 'finishTime', ],
                'analysisType' => [ 'type' => 'integer', 'locationName' => 'analysisType', ],
                'stringBigKeys' => [ 'type' => 'list', 'member' => [ 'shape' => 'RedisBigKey', ], ],
                'hashBigKeys' => [ 'type' => 'list', 'member' => [ 'shape' => 'RedisBigKey', ], ],
                'listBigKeys' => [ 'type' => 'list', 'member' => [ 'shape' => 'RedisBigKey', ], ],
                'zsetBigKeys' => [ 'type' => 'list', 'member' => [ 'shape' => 'RedisBigKey', ], ],
                'setBigKeys' => [ 'type' => 'list', 'member' => [ 'shape' => 'RedisBigKey', ], ],
            ],
        ],
        'ModifyBigKeyAnalysisTime2RequestShape' => [
            'type' => 'structure',
            'members' => [
                'analysisTime' => [ 'type' => 'string', 'locationName' => 'analysisTime', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'cacheInstanceId' => [ 'type' => 'string', 'locationName' => 'cacheInstanceId', ],
            ],
        ],
        'JvesselV1ProbeSuccessRateResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'JvesselV1ProbeSuccessRateResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'CreateOfflineAnalysisTaskResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeDetailNodeListResultShape' => [
            'type' => 'structure',
            'members' => [
                'nodeList' => [ 'type' => 'list', 'member' => [ 'shape' => 'RedisNodeDetail', ], ],
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
            ],
        ],
        'ModifyProxyAvailableZonesResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DescribeOfflineAnalysisTopKeysResultShape' => [
            'type' => 'structure',
            'members' => [
                'count' => [ 'type' => 'integer', 'locationName' => 'count', ],
                'topKeys' => [ 'type' => 'list', 'member' => [ 'shape' => 'RedisKeySpaceData', ], ],
            ],
        ],
        'ListOfflineAnalysisRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'cacheInstanceId' => [ 'type' => 'string', 'locationName' => 'cacheInstanceId', ],
            ],
        ],
        'DescribeAnalysisTimeRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'cacheInstanceId' => [ 'type' => 'string', 'locationName' => 'cacheInstanceId', ],
            ],
        ],
        'GetDisableCommandsResultShape' => [
            'type' => 'structure',
            'members' => [
                'disableCommandLists' => [ 'type' => 'list', 'member' => [ 'shape' => 'DisableCommandsInfo', ], ],
            ],
        ],
        'ModifyAccountResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ModifyAnalysisThreshold2ResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DescribeUpgradeVersionRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'cacheInstanceId' => [ 'type' => 'string', 'locationName' => 'cacheInstanceId', ],
            ],
        ],
        'StartClearDataRequestShape' => [
            'type' => 'structure',
            'members' => [
                'clearType' => [ 'type' => 'string', 'locationName' => 'clearType', ],
                'keyPattern' => [ 'type' => 'string', 'locationName' => 'keyPattern', ],
                'keyFilter' => [ 'type' => 'list', 'member' => [ 'shape' => 'KeyFilter', ], ],
                'qpsLimit' => [ 'type' => 'integer', 'locationName' => 'qpsLimit', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'cacheInstanceId' => [ 'type' => 'string', 'locationName' => 'cacheInstanceId', ],
            ],
        ],
        'DescribeClientListRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'cacheInstanceId' => [ 'type' => 'string', 'locationName' => 'cacheInstanceId', ],
            ],
        ],
        'DescribeHotKeyDetailRequestShape' => [
            'type' => 'structure',
            'members' => [
                'nodeId' => [ 'type' => 'string', 'locationName' => 'nodeId', ],
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'startTime' => [ 'type' => 'string', 'locationName' => 'startTime', ],
                'endTime' => [ 'type' => 'string', 'locationName' => 'endTime', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'cacheInstanceId' => [ 'type' => 'string', 'locationName' => 'cacheInstanceId', ],
            ],
        ],
        'GetMetricResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GetMetricResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'JvesselV1ModifyProxyFlavorRequestShape' => [
            'type' => 'structure',
            'members' => [
                'proxyBaseFlavor' => [ 'type' => 'string', 'locationName' => 'proxyBaseFlavor', ],
                'proxyFlavorRate' => [ 'type' => 'integer', 'locationName' => 'proxyFlavorRate', ],
                'proxyDisk' => [ 'type' => 'integer', 'locationName' => 'proxyDisk', ],
                'effectiveTime' => [ 'type' => 'string', 'locationName' => 'effectiveTime', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'cacheInstanceId' => [ 'type' => 'string', 'locationName' => 'cacheInstanceId', ],
            ],
        ],
        'ListOfflineAnalysisResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'ListOfflineAnalysisResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ModifyInstanceTypeResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeRedisServerLogRequestShape' => [
            'type' => 'structure',
            'members' => [
                'podName' => [ 'type' => 'string', 'locationName' => 'podName', ],
                'logFilter' => [ 'type' => 'string', 'locationName' => 'logFilter', ],
                'startTime' => [ 'type' => 'string', 'locationName' => 'startTime', ],
                'endTime' => [ 'type' => 'string', 'locationName' => 'endTime', ],
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'cacheInstanceId' => [ 'type' => 'string', 'locationName' => 'cacheInstanceId', ],
            ],
        ],
        'ListModulesResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'ListModulesResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'JvesselV1ProxyInfoRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'cacheInstanceId' => [ 'type' => 'string', 'locationName' => 'cacheInstanceId', ],
            ],
        ],
        'DescribeClearDataResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeClearDataResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeBigKeyListResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeBigKeyListResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ClientKillRequestShape' => [
            'type' => 'structure',
            'members' => [
                'option' => [ 'type' => 'string', 'locationName' => 'option', ],
                'value' => [ 'type' => 'string', 'locationName' => 'value', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'cacheInstanceId' => [ 'type' => 'string', 'locationName' => 'cacheInstanceId', ],
            ],
        ],
        'DescribeBigKeyList2ResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeBigKeyList2ResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeProxySlowLogResultShape' => [
            'type' => 'structure',
            'members' => [
                'proxySlowLogs' => [ 'type' => 'list', 'member' => [ 'shape' => 'ProxySlowLogItem', ], ],
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
            ],
        ],
        'ModifyInstanceVersionRequestShape' => [
            'type' => 'structure',
            'members' => [
                'redisImageName' => [ 'type' => 'string', 'locationName' => 'redisImageName', ],
                'redisImageSuffix' => [ 'type' => 'string', 'locationName' => 'redisImageSuffix', ],
                'redisImageTag' => [ 'type' => 'string', 'locationName' => 'redisImageTag', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'cacheInstanceId' => [ 'type' => 'string', 'locationName' => 'cacheInstanceId', ],
            ],
        ],
        'DescribeClientIpDetailResultShape' => [
            'type' => 'structure',
            'members' => [
                'details' => [ 'type' => 'list', 'member' => [ 'shape' => 'Details', ], ],
            ],
        ],
        'DescribeConfigModifyHistoryResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeConfigModifyHistoryResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeTaskProgressListResultShape' => [
            'type' => 'structure',
            'members' => [
                'taskProgresses' => [ 'type' => 'list', 'member' => [ 'shape' => 'TaskProgress', ], ],
            ],
        ],
        'DescribeAvailableSentinelListResultShape' => [
            'type' => 'structure',
            'members' => [
                'sentinelList' => [ 'type' => 'list', 'member' => [ 'shape' => 'SentinelCluster', ], ],
            ],
        ],
        'CreateBackupResultShape' => [
            'type' => 'structure',
            'members' => [
                'baseId' => [ 'type' => 'string', 'locationName' => 'baseId', ],
            ],
        ],
        'ModifyOfflineAnalysisTimeRequestShape' => [
            'type' => 'structure',
            'members' => [
                'analysisTime' => [ 'type' => 'string', 'locationName' => 'analysisTime', ],
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
        'DescribeBackupsResultShape' => [
            'type' => 'structure',
            'members' => [
                'backups' => [ 'type' => 'list', 'member' => [ 'shape' => 'Backup', ], ],
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
            ],
        ],
        'SetDisableCommandsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeHotKeySummaryResultShape' => [
            'type' => 'structure',
            'members' => [
                'hotKeyAnalysisNodesList' => [ 'type' => 'list', 'member' => [ 'shape' => 'HotKeyAnalysisNode', ], ],
            ],
        ],
        'SetExposeTypeRequestShape' => [
            'type' => 'structure',
            'members' => [
                'exposeType' => [ 'type' => 'string', 'locationName' => 'exposeType', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'cacheInstanceId' => [ 'type' => 'string', 'locationName' => 'cacheInstanceId', ],
            ],
        ],
        'DescribeProxySlowLogResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeProxySlowLogResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'StartClearDataResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeUpgradeVersionResultShape' => [
            'type' => 'structure',
            'members' => [
                'releaseNodes' => [ 'type' => 'string', 'locationName' => 'releaseNodes', ],
                'minorVersion' => [ 'type' => 'string', 'locationName' => 'minorVersion', ],
                'majorVersion' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'proxyMinorVersion' => [ 'type' => 'string', 'locationName' => 'proxyMinorVersion', ],
                'proxyMajorVersions' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'DescribeBackupPolicyResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeBackupPolicyResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeOfflineAnalysisTimeResultShape' => [
            'type' => 'structure',
            'members' => [
                'time' => [ 'type' => 'string', 'locationName' => 'time', ],
            ],
        ],
        'DescribeAnalysisThresholdRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'cacheInstanceId' => [ 'type' => 'string', 'locationName' => 'cacheInstanceId', ],
            ],
        ],
        'ModifySentinelAvailableZonesResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'HaDiagnosisResultShape' => [
            'type' => 'structure',
            'members' => [
                'failureDomain' => [ 'type' => 'string', 'locationName' => 'failureDomain', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'flavorType' => [ 'type' => 'string', 'locationName' => 'flavorType', ],
                'azSpecifyType' => [ 'type' => 'string', 'locationName' => 'azSpecifyType', ],
                'enableSmartProxy' => [ 'type' => 'string', 'locationName' => 'enableSmartProxy', ],
                'sentinelType' => [ 'type' => 'string', 'locationName' => 'sentinelType', ],
                'sentinelName' => [ 'type' => 'string', 'locationName' => 'sentinelName', ],
                'sentinelNamespace' => [ 'type' => 'string', 'locationName' => 'sentinelNamespace', ],
                'diagnosisResult' =>  [ 'shape' => 'DiagnosisResult', ],
            ],
        ],
        'DescribeBigKeyDetail2ResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeBigKeyDetail2ResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ModifyPublicAddressRequestShape' => [
            'type' => 'structure',
            'members' => [
                'action' => [ 'type' => 'string', 'locationName' => 'action', ],
                'elasticIpId' => [ 'type' => 'string', 'locationName' => 'elasticIpId', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'cacheInstanceId' => [ 'type' => 'string', 'locationName' => 'cacheInstanceId', ],
            ],
        ],
        'CreateBigKeyAnalysisResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'CreateBackupResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'CreateBackupResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
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
        'ModifyAnalysisTimeResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'RecoverInstanceRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'cacheInstanceId' => [ 'type' => 'string', 'locationName' => 'cacheInstanceId', ],
            ],
        ],
        'DescribeBigKeyDetailResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeBigKeyDetailResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeHotKeyDetail2ResultShape' => [
            'type' => 'structure',
            'members' => [
                'hotHeys' => [ 'type' => 'list', 'member' => [ 'shape' => 'RedisHotKey', ], ],
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
            ],
        ],
        'DescribeSentinelAvailableZonesResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeSentinelAvailableZonesResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'SwitchInstanceHAResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'StopCacheAnalysisResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DescribeBigKeyList2RequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'cacheInstanceId' => [ 'type' => 'string', 'locationName' => 'cacheInstanceId', ],
            ],
        ],
        'DescribeClientIpDetailResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeClientIpDetailResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ModifyCacheInstanceClassResultShape' => [
            'type' => 'structure',
            'members' => [
                'orderNum' => [ 'type' => 'string', 'locationName' => 'orderNum', ],
                'buyId' => [ 'type' => 'string', 'locationName' => 'buyId', ],
            ],
        ],
        'ModifyInstanceVersionResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DescribeProxySlowLogRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'startTime' => [ 'type' => 'string', 'locationName' => 'startTime', ],
                'endTime' => [ 'type' => 'string', 'locationName' => 'endTime', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'cacheInstanceId' => [ 'type' => 'string', 'locationName' => 'cacheInstanceId', ],
            ],
        ],
        'DescribeCacheInstanceResultShape' => [
            'type' => 'structure',
            'members' => [
                'cacheInstance' =>  [ 'shape' => 'CacheInstance', ],
            ],
        ],
        'ModifySentinelAvailableZonesResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeAnalysisTimeResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeAnalysisTimeResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'RestoreInstanceResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'StopCacheAnalysisResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeOfflineAnalysisOverviewResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeOfflineAnalysisOverviewResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'StopClearDataResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'CreateBigKeyAnalysisRequestShape' => [
            'type' => 'structure',
            'members' => [
                'stringSize' => [ 'type' => 'integer', 'locationName' => 'stringSize', ],
                'listSize' => [ 'type' => 'integer', 'locationName' => 'listSize', ],
                'hashSize' => [ 'type' => 'integer', 'locationName' => 'hashSize', ],
                'setSize' => [ 'type' => 'integer', 'locationName' => 'setSize', ],
                'zsetSize' => [ 'type' => 'integer', 'locationName' => 'zsetSize', ],
                'top' => [ 'type' => 'integer', 'locationName' => 'top', ],
                'sizeMode' => [ 'type' => 'string', 'locationName' => 'sizeMode', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'cacheInstanceId' => [ 'type' => 'string', 'locationName' => 'cacheInstanceId', ],
            ],
        ],
        'DescribeSlowLogResultShape' => [
            'type' => 'structure',
            'members' => [
                'slowLogs' => [ 'type' => 'list', 'member' => [ 'shape' => 'SlowLog', ], ],
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
            ],
        ],
        'JvesselV1ListSlaveConfigResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'JvesselV1ListSlaveConfigResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ModifyInstanceNodeGroupVersionRequestShape' => [
            'type' => 'structure',
            'members' => [
                'redisImageName' => [ 'type' => 'string', 'locationName' => 'redisImageName', ],
                'redisImageSuffix' => [ 'type' => 'string', 'locationName' => 'redisImageSuffix', ],
                'redisImageTag' => [ 'type' => 'string', 'locationName' => 'redisImageTag', ],
                'ng' => [ 'type' => 'string', 'locationName' => 'ng', ],
                'shards' => [ 'type' => 'list', 'member' => [ 'type' => 'integer', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'cacheInstanceId' => [ 'type' => 'string', 'locationName' => 'cacheInstanceId', ],
            ],
        ],
        'JvesselV1HealthResultShape' => [
            'type' => 'structure',
            'members' => [
                'health' =>  [ 'shape' => 'Health', ],
                'tasks' => [ 'type' => 'list', 'member' => [ 'shape' => 'Tasks', ], ],
                'conditions' => [ 'type' => 'list', 'member' => [ 'shape' => 'Conditions', ], ],
            ],
        ],
        'RecycledCacheInstanceResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'RecycledCacheInstanceResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ModifyRedisAZSpecifyTypeResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'UnloadModulesResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DescribeSlowLogResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeSlowLogResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'GetDisableCommandsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GetDisableCommandsResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ModifyAnalysisThreshold2RequestShape' => [
            'type' => 'structure',
            'members' => [
                'stringSize' => [ 'type' => 'integer', 'locationName' => 'stringSize', ],
                'listSize' => [ 'type' => 'integer', 'locationName' => 'listSize', ],
                'hashSize' => [ 'type' => 'integer', 'locationName' => 'hashSize', ],
                'setSize' => [ 'type' => 'integer', 'locationName' => 'setSize', ],
                'zsetSize' => [ 'type' => 'integer', 'locationName' => 'zsetSize', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'cacheInstanceId' => [ 'type' => 'string', 'locationName' => 'cacheInstanceId', ],
            ],
        ],
        'ModifySentinelResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'ModifyAccountsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ListDisableCommandsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'ListDisableCommandsResultShape', ],
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
        'ModifyBigKeyAnalysisTime2ResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'RestartInstanceResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'GetDisableCommandsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'cacheInstanceId' => [ 'type' => 'string', 'locationName' => 'cacheInstanceId', ],
            ],
        ],
        'LoadModulesRequestShape' => [
            'type' => 'structure',
            'members' => [
                'modules' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'cacheInstanceId' => [ 'type' => 'string', 'locationName' => 'cacheInstanceId', ],
            ],
        ],
        'DescribeAccountsResultShape' => [
            'type' => 'structure',
            'members' => [
                'isSupport' => [ 'type' => 'boolean', 'locationName' => 'isSupport', ],
                'accountLists' => [ 'type' => 'list', 'member' => [ 'shape' => 'Accounts', ], ],
            ],
        ],
        'DescribeOfflineAnalysisTimeRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'cacheInstanceId' => [ 'type' => 'string', 'locationName' => 'cacheInstanceId', ],
            ],
        ],
        'SetDisableCommandsResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'ModifyInstanceTypeResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DescribeHotKeyDetailResultShape' => [
            'type' => 'structure',
            'members' => [
                'hotHeys' => [ 'type' => 'list', 'member' => [ 'shape' => 'RedisHotKey', ], ],
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
            ],
        ],
        'DescribeBigKeyListResultShape' => [
            'type' => 'structure',
            'members' => [
                'analyses' => [ 'type' => 'list', 'member' => [ 'shape' => 'CacheAnalysis', ], ],
            ],
        ],
        'ModifyInstanceTLSResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'SetExposeTypeResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DescribeInstanceTLSRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'cacheInstanceId' => [ 'type' => 'string', 'locationName' => 'cacheInstanceId', ],
            ],
        ],
        'CreateBigKeyAnalysis2RequestShape' => [
            'type' => 'structure',
            'members' => [
                'stringSize' => [ 'type' => 'integer', 'locationName' => 'stringSize', ],
                'listSize' => [ 'type' => 'integer', 'locationName' => 'listSize', ],
                'hashSize' => [ 'type' => 'integer', 'locationName' => 'hashSize', ],
                'setSize' => [ 'type' => 'integer', 'locationName' => 'setSize', ],
                'zsetSize' => [ 'type' => 'integer', 'locationName' => 'zsetSize', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'cacheInstanceId' => [ 'type' => 'string', 'locationName' => 'cacheInstanceId', ],
            ],
        ],
        'DescribeTaskProgressListRequestShape' => [
            'type' => 'structure',
            'members' => [
                'taskType' => [ 'type' => 'string', 'locationName' => 'taskType', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'cacheInstanceId' => [ 'type' => 'string', 'locationName' => 'cacheInstanceId', ],
            ],
        ],
        'JvesselV1SetConfigResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DescribeUpgradeVersionResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeUpgradeVersionResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeHotKeyDetail2RequestShape' => [
            'type' => 'structure',
            'members' => [
                'nodeId' => [ 'type' => 'string', 'locationName' => 'nodeId', ],
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'cacheInstanceId' => [ 'type' => 'string', 'locationName' => 'cacheInstanceId', ],
            ],
        ],
        'DescribeCacheAnalysisResultResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeCacheAnalysisResultResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ModifyBigKeyAnalysisTimeResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeCacheAnalysisResultRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'cacheInstanceId' => [ 'type' => 'string', 'locationName' => 'cacheInstanceId', ],
                'taskId' => [ 'type' => 'string', 'locationName' => 'taskId', ],
            ],
        ],
        'ModifyPublicAddressResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'GetBackupFilesResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GetBackupFilesResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'CreateOfflineAnalysisTaskResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DescribeDownloadUrlResultShape' => [
            'type' => 'structure',
            'members' => [
                'downloadUrls' => [ 'type' => 'list', 'member' => [ 'shape' => 'DownloadUrl', ], ],
            ],
        ],
        'DescribeOfflineAnalysisOverviewRequestShape' => [
            'type' => 'structure',
            'members' => [
                'taskId' => [ 'type' => 'string', 'locationName' => 'taskId', ],
                'shardIds' => [ 'type' => 'string', 'locationName' => 'shardIds', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'cacheInstanceId' => [ 'type' => 'string', 'locationName' => 'cacheInstanceId', ],
            ],
        ],
        'DescribeBigKeyDetail2ResultShape' => [
            'type' => 'structure',
            'members' => [
                'taskId' => [ 'type' => 'string', 'locationName' => 'taskId', ],
                'stringSize' => [ 'type' => 'integer', 'locationName' => 'stringSize', ],
                'listSize' => [ 'type' => 'integer', 'locationName' => 'listSize', ],
                'setSize' => [ 'type' => 'integer', 'locationName' => 'setSize', ],
                'hashSize' => [ 'type' => 'integer', 'locationName' => 'hashSize', ],
                'zsetSize' => [ 'type' => 'integer', 'locationName' => 'zsetSize', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'analysisTime' => [ 'type' => 'string', 'locationName' => 'analysisTime', ],
                'analysisDuration' => [ 'type' => 'string', 'locationName' => 'analysisDuration', ],
                'bigKeyAnalysisNodesList' => [ 'type' => 'list', 'member' => [ 'shape' => 'BigKeyAnalysisNode', ], ],
            ],
        ],
        'DescribeBigKeyAnalysisTime2RequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'cacheInstanceId' => [ 'type' => 'string', 'locationName' => 'cacheInstanceId', ],
            ],
        ],
        'DeleteRecycledCacheInstanceResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'CreateBigKeyAnalysisResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'ListDisableCommandsResultShape' => [
            'type' => 'structure',
            'members' => [
                'disableCommands' => [ 'type' => 'object', 'locationName' => 'disableCommands', ],
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
                'autoChangeChargeMode' => [ 'type' => 'boolean', 'locationName' => 'autoChangeChargeMode', ],
                'autoChangeChargeModeDate' => [ 'type' => 'string', 'locationName' => 'autoChangeChargeModeDate', ],
                'buyScenario' => [ 'type' => 'string', 'locationName' => 'buyScenario', ],
            ],
        ],
        'RestartProxyResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeClientListResultShape' => [
            'type' => 'structure',
            'members' => [
                'ips' => [ 'type' => 'list', 'member' => [ 'shape' => 'Ips', ], ],
            ],
        ],
        'JvesselV1ListSlaveConfigResultShape' => [
            'type' => 'structure',
            'members' => [
                'configs' => [ 'type' => 'object', 'locationName' => 'configs', ],
            ],
        ],
        'ModifyBlockStatusResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DescribeBigKeyDetailRequestShape' => [
            'type' => 'structure',
            'members' => [
                'taskId' => [ 'type' => 'string', 'locationName' => 'taskId', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'cacheInstanceId' => [ 'type' => 'string', 'locationName' => 'cacheInstanceId', ],
            ],
        ],
        'ExecuteommandResult' => [
            'type' => 'structure',
            'members' => [
                'command' => [ 'type' => 'string', 'locationName' => 'command', ],
                'result' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'token' => [ 'type' => 'string', 'locationName' => 'token', ],
            ],
        ],
        'ModifySentinelRequestShape' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'namespace' => [ 'type' => 'string', 'locationName' => 'namespace', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'cacheInstanceId' => [ 'type' => 'string', 'locationName' => 'cacheInstanceId', ],
            ],
        ],
        'CreateBigKeyAnalysis2ResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DescribeAccountsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeAccountsResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeSentinelAvailableZonesRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'cacheInstanceId' => [ 'type' => 'string', 'locationName' => 'cacheInstanceId', ],
            ],
        ],
        'StopCacheAnalysisRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'cacheInstanceId' => [ 'type' => 'string', 'locationName' => 'cacheInstanceId', ],
            ],
        ],
        'ModifyOfflineAnalysisTimeResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ModifyProxyAvailableZonesResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'JvesselV1RollingUpdateResultShape' => [
            'type' => 'structure',
            'members' => [
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
        'JvesselV1ListProxyConfigResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'JvesselV1ListProxyConfigResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'JvesselV1ListMasterConfigResultShape' => [
            'type' => 'structure',
            'members' => [
                'configs' => [ 'type' => 'object', 'locationName' => 'configs', ],
            ],
        ],
        'ModifyIpWhiteListResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeOfflineAnalysisTopKeysResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeOfflineAnalysisTopKeysResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'StopClearDataResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'CreateAccountResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'UnloadModulesResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeHotKeyResult2ResultShape' => [
            'type' => 'structure',
            'members' => [
                'hotKeyAnalysisNodesList' => [ 'type' => 'list', 'member' => [ 'shape' => 'HotKeyAnalysisNode', ], ],
            ],
        ],
        'ModifyBigKeyAnalysisTimeResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DescribeCacheInstancesResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeCacheInstancesResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeClientListResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeClientListResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ResetCacheInstancePasswordResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ModifyAnalysisTimeRequestShape' => [
            'type' => 'structure',
            'members' => [
                'analysisTime' => [ 'type' => 'string', 'locationName' => 'analysisTime', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'cacheInstanceId' => [ 'type' => 'string', 'locationName' => 'cacheInstanceId', ],
            ],
        ],
        'DescribeAnalysisTimeResultShape' => [
            'type' => 'structure',
            'members' => [
                'time' => [ 'type' => 'string', 'locationName' => 'time', ],
            ],
        ],
        'ModifyInstanceMinorVersionRequestShape' => [
            'type' => 'structure',
            'members' => [
                'minorVersion' => [ 'type' => 'string', 'locationName' => 'minorVersion', ],
                'proxyMinorVersion' => [ 'type' => 'string', 'locationName' => 'proxyMinorVersion', ],
                'effectiveTime' => [ 'type' => 'string', 'locationName' => 'effectiveTime', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'cacheInstanceId' => [ 'type' => 'string', 'locationName' => 'cacheInstanceId', ],
            ],
        ],
        'JvesselV1RollingUpdateRequestShape' => [
            'type' => 'structure',
            'members' => [
                'redisImage' => [ 'type' => 'string', 'locationName' => 'redisImage', ],
                'role' => [ 'type' => 'string', 'locationName' => 'role', ],
                'effectiveTime' => [ 'type' => 'string', 'locationName' => 'effectiveTime', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'cacheInstanceId' => [ 'type' => 'string', 'locationName' => 'cacheInstanceId', ],
            ],
        ],
        'DescribeSentinelAvailableZonesResultShape' => [
            'type' => 'structure',
            'members' => [
                'azList' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'DescribeInstanceConfigRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'cacheInstanceId' => [ 'type' => 'string', 'locationName' => 'cacheInstanceId', ],
            ],
        ],
        'GetBackupFilesResultShape' => [
            'type' => 'structure',
            'members' => [
                'backups' => [ 'type' => 'list', 'member' => [ 'shape' => 'BackupFile', ], ],
                'count' => [ 'type' => 'integer', 'locationName' => 'count', ],
            ],
        ],
        'JvesselV1HealthRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'cacheInstanceId' => [ 'type' => 'string', 'locationName' => 'cacheInstanceId', ],
            ],
        ],
        'ModifyRedisAZSpecifyTypeRequestShape' => [
            'type' => 'structure',
            'members' => [
                'azSpecifyType' => [ 'type' => 'string', 'locationName' => 'azSpecifyType', ],
                'azsForCluster' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'master' => [ 'type' => 'string', 'locationName' => 'master', ],
                'slave' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'cacheInstanceId' => [ 'type' => 'string', 'locationName' => 'cacheInstanceId', ],
            ],
        ],
        'ListOfflineAnalysisResultShape' => [
            'type' => 'structure',
            'members' => [
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
                'tasks' => [ 'type' => 'list', 'member' => [ 'shape' => 'OfflineAnalysisTask', ], ],
            ],
        ],
        'ModifyBigKeyAnalysisTime2ResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ResetCacheInstancePasswordResultShape' => [
            'type' => 'structure',
            'members' => [
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
        'RecycledCacheInstanceRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'filters' => [ 'type' => 'list', 'member' => [ 'shape' => 'Filter', ], ],
                'sorts' => [ 'type' => 'list', 'member' => [ 'shape' => 'Sort', ], ],
                'tagFilters' => [ 'type' => 'list', 'member' => [ 'shape' => 'TagFilter', ], ],
                'resourceGroupIds' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'LoadModulesResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'JvesselV1UpdateProxyImageResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DescribeHotKeyResult2ResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeHotKeyResult2ResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DeleteCacheInstanceResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DescribeAnalysisThreshold2ResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeAnalysisThreshold2ResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'HaDiagnosisResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'HaDiagnosisResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeDetailNodeListRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'shardId' => [ 'type' => 'string', 'locationName' => 'shardId', ],
                'role' => [ 'type' => 'string', 'locationName' => 'role', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'cacheInstanceId' => [ 'type' => 'string', 'locationName' => 'cacheInstanceId', ],
            ],
        ],
        'ModifyAnalysisTimeResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeHotKeyDetail2ResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeHotKeyDetail2ResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'JvesselV1UpdateProxyImageRequestShape' => [
            'type' => 'structure',
            'members' => [
                'image' => [ 'type' => 'string', 'locationName' => 'image', ],
                'qpsLimit' => [ 'type' => 'integer', 'locationName' => 'qpsLimit', ],
                'effectiveTime' => [ 'type' => 'string', 'locationName' => 'effectiveTime', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'cacheInstanceId' => [ 'type' => 'string', 'locationName' => 'cacheInstanceId', ],
            ],
        ],
        'ModifyOfflineAnalysisTimeResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'ModifyCacheInstanceClassResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'ModifyCacheInstanceClassResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'CreateCacheAnalysisRequestShape' => [
            'type' => 'structure',
            'members' => [
                'sizeMode' => [ 'type' => 'string', 'locationName' => 'sizeMode', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'cacheInstanceId' => [ 'type' => 'string', 'locationName' => 'cacheInstanceId', ],
            ],
        ],
        'RecoverInstanceResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'ModifyIpWhiteListResultShape' => [
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
        'ImportDataResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'CreateCacheAnalysisResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DeleteAccountResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'JvesselV1ListMasterConfigResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'JvesselV1ListMasterConfigResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeAccountsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'cacheInstanceId' => [ 'type' => 'string', 'locationName' => 'cacheInstanceId', ],
            ],
        ],
        'ModifyInstanceMinorVersionResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DescribeDetailNodeListResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeDetailNodeListResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ModifyProxyAvailableZonesRequestShape' => [
            'type' => 'structure',
            'members' => [
                'azList' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'cacheInstanceId' => [ 'type' => 'string', 'locationName' => 'cacheInstanceId', ],
            ],
        ],
        'CreateOfflineAnalysisTaskRequestShape' => [
            'type' => 'structure',
            'members' => [
                'backupIds' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'prefixSeparator' => [ 'type' => 'string', 'locationName' => 'prefixSeparator', ],
                'keyPrefix' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'top' => [ 'type' => 'integer', 'locationName' => 'top', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'cacheInstanceId' => [ 'type' => 'string', 'locationName' => 'cacheInstanceId', ],
            ],
        ],
        'ModifyBackupPolicyRequestShape' => [
            'type' => 'structure',
            'members' => [
                'autoBackup' => [ 'type' => 'boolean', 'locationName' => 'autoBackup', ],
                'backupTime' => [ 'type' => 'string', 'locationName' => 'backupTime', ],
                'backupPeriod' => [ 'type' => 'string', 'locationName' => 'backupPeriod', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'cacheInstanceId' => [ 'type' => 'string', 'locationName' => 'cacheInstanceId', ],
            ],
        ],
        'RestartInstanceRequestShape' => [
            'type' => 'structure',
            'members' => [
                'opType' => [ 'type' => 'integer', 'locationName' => 'opType', ],
                'nodes' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'cacheInstanceId' => [ 'type' => 'string', 'locationName' => 'cacheInstanceId', ],
            ],
        ],
        'RecoverInstanceResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ModifyRedisAZSpecifyTypeResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DescribeHotKeySummaryRequestShape' => [
            'type' => 'structure',
            'members' => [
                'startTime' => [ 'type' => 'string', 'locationName' => 'startTime', ],
                'endTime' => [ 'type' => 'string', 'locationName' => 'endTime', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'cacheInstanceId' => [ 'type' => 'string', 'locationName' => 'cacheInstanceId', ],
            ],
        ],
        'JvesselV1ModifyProxyReplicaResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'ModifyAccountsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'accounts' => [ 'type' => 'list', 'member' => [ 'shape' => 'ModifyAccount', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'cacheInstanceId' => [ 'type' => 'string', 'locationName' => 'cacheInstanceId', ],
            ],
        ],
        'DescribeBackupPolicyResultShape' => [
            'type' => 'structure',
            'members' => [
                'autoBackup' => [ 'type' => 'boolean', 'locationName' => 'autoBackup', ],
                'backupPeriod' => [ 'type' => 'string', 'locationName' => 'backupPeriod', ],
                'backupTime' => [ 'type' => 'string', 'locationName' => 'backupTime', ],
                'nextBackupTime' => [ 'type' => 'string', 'locationName' => 'nextBackupTime', ],
            ],
        ],
        'CheckDeletableResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DescribeClientIpDetailRequestShape' => [
            'type' => 'structure',
            'members' => [
                'ip' => [ 'type' => 'string', 'locationName' => 'ip', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'cacheInstanceId' => [ 'type' => 'string', 'locationName' => 'cacheInstanceId', ],
            ],
        ],
        'DescribeClearDataResultShape' => [
            'type' => 'structure',
            'members' => [
                'clearType' => [ 'type' => 'string', 'locationName' => 'clearType', ],
                'keyPattern' => [ 'type' => 'string', 'locationName' => 'keyPattern', ],
                'keyFilter' => [ 'type' => 'list', 'member' => [ 'shape' => 'KeyFilter', ], ],
                'qpsLimit' => [ 'type' => 'integer', 'locationName' => 'qpsLimit', ],
                'progress' => [ 'type' => 'integer', 'locationName' => 'progress', ],
                'effectKeys' => [ 'type' => 'integer', 'locationName' => 'effectKeys', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'lastTransitionTime' => [ 'type' => 'string', 'locationName' => 'lastTransitionTime', ],
            ],
        ],
        'DescribeAvailableSentinelListRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'cacheInstanceId' => [ 'type' => 'string', 'locationName' => 'cacheInstanceId', ],
            ],
        ],
        'ModifyInstanceTypeRequestShape' => [
            'type' => 'structure',
            'members' => [
                'targetType' => [ 'type' => 'string', 'locationName' => 'targetType', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'cacheInstanceId' => [ 'type' => 'string', 'locationName' => 'cacheInstanceId', ],
            ],
        ],
        'ModifyIpWhiteListRequestShape' => [
            'type' => 'structure',
            'members' => [
                'ipWhiteList' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'cacheInstanceId' => [ 'type' => 'string', 'locationName' => 'cacheInstanceId', ],
            ],
        ],
        'DescribeAnalysisThreshold2RequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'cacheInstanceId' => [ 'type' => 'string', 'locationName' => 'cacheInstanceId', ],
            ],
        ],
        'DescribeBigKeyAnalysisTime2ResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeBigKeyAnalysisTime2ResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeOfflineAnalysisTopKeyPrefixListRequestShape' => [
            'type' => 'structure',
            'members' => [
                'taskId' => [ 'type' => 'string', 'locationName' => 'taskId', ],
                'keyType' => [ 'type' => 'string', 'locationName' => 'keyType', ],
                'shardIds' => [ 'type' => 'string', 'locationName' => 'shardIds', ],
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'cacheInstanceId' => [ 'type' => 'string', 'locationName' => 'cacheInstanceId', ],
            ],
        ],
        'CreateCacheInstanceResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'CreateCacheInstanceResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ClientKillResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'JvesselV1UpdateProxyImageResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ModifyBlockStatusResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeResizeModeIpTimeInfoResultShape' => [
            'type' => 'structure',
            'members' => [
                'supportPScale' => [ 'type' => 'boolean', 'locationName' => 'supportPScale', ],
                'supportParallel' => [ 'type' => 'boolean', 'locationName' => 'supportParallel', ],
                'serialIpCount' => [ 'type' => 'integer', 'locationName' => 'serialIpCount', ],
                'serialTimeCost' => [ 'type' => 'integer', 'locationName' => 'serialTimeCost', ],
                'parallelIpCount' => [ 'type' => 'integer', 'locationName' => 'parallelIpCount', ],
                'parallelTimeCost' => [ 'type' => 'integer', 'locationName' => 'parallelTimeCost', ],
            ],
        ],
        'ModifyBackupPolicyResponseShape' => [
            'type' => 'structure',
            'members' => [
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
        'ModifySentinelAvailableZonesRequestShape' => [
            'type' => 'structure',
            'members' => [
                'azList' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'cacheInstanceId' => [ 'type' => 'string', 'locationName' => 'cacheInstanceId', ],
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
                'shardAddr' => [ 'type' => 'string', 'locationName' => 'shardAddr', ],
                'cmdPattern' => [ 'type' => 'string', 'locationName' => 'cmdPattern', ],
                'execTimeThreshold' => [ 'type' => 'integer', 'locationName' => 'execTimeThreshold', ],
                'role' => [ 'type' => 'string', 'locationName' => 'role', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'cacheInstanceId' => [ 'type' => 'string', 'locationName' => 'cacheInstanceId', ],
            ],
        ],
        'ListDisableCommandsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'cacheInstanceId' => [ 'type' => 'string', 'locationName' => 'cacheInstanceId', ],
            ],
        ],
        'ModifyAccountsResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'ModifyInstanceConfigResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ModifyAnalysisThresholdRequestShape' => [
            'type' => 'structure',
            'members' => [
                'stringSize' => [ 'type' => 'integer', 'locationName' => 'stringSize', ],
                'listSize' => [ 'type' => 'integer', 'locationName' => 'listSize', ],
                'hashSize' => [ 'type' => 'integer', 'locationName' => 'hashSize', ],
                'setSize' => [ 'type' => 'integer', 'locationName' => 'setSize', ],
                'zsetSize' => [ 'type' => 'integer', 'locationName' => 'zsetSize', ],
                'top' => [ 'type' => 'integer', 'locationName' => 'top', ],
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
        'ModifyCacheInstanceAttributeResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeRedisServerLogResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeRedisServerLogResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'MaintenanceTimeResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DiagnosisResult' => [
            'type' => 'structure',
            'members' => [
                'redis' =>  [ 'shape' => 'DiagnosisResultItem', ],
                'proxy' =>  [ 'shape' => 'DiagnosisResultItem', ],
                'sentinel' =>  [ 'shape' => 'DiagnosisResultItem', ],
            ],
        ],
        'DescribeBackupPolicyRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'cacheInstanceId' => [ 'type' => 'string', 'locationName' => 'cacheInstanceId', ],
            ],
        ],
        'DescribeResizeModeIpTimeInfoResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeResizeModeIpTimeInfoResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ModifyInstanceTLSResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'ModifyAnalysisThreshold2ResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'UnloadModulesRequestShape' => [
            'type' => 'structure',
            'members' => [
                'modules' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'cacheInstanceId' => [ 'type' => 'string', 'locationName' => 'cacheInstanceId', ],
            ],
        ],
        'DescribeHotKeyDetailResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeHotKeyDetailResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'StopClearDataRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'cacheInstanceId' => [ 'type' => 'string', 'locationName' => 'cacheInstanceId', ],
            ],
        ],
        'DescribeOfflineAnalysisTimeResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeOfflineAnalysisTimeResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeCacheAnalysisListRequestShape' => [
            'type' => 'structure',
            'members' => [
                'date' => [ 'type' => 'string', 'locationName' => 'date', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'cacheInstanceId' => [ 'type' => 'string', 'locationName' => 'cacheInstanceId', ],
            ],
        ],
        'DescribeInstanceTLSResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeInstanceTLSResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeOfflineAnalysisTopKeysRequestShape' => [
            'type' => 'structure',
            'members' => [
                'taskId' => [ 'type' => 'string', 'locationName' => 'taskId', ],
                'taskType' => [ 'type' => 'string', 'locationName' => 'taskType', ],
                'sortBy' => [ 'type' => 'string', 'locationName' => 'sortBy', ],
                'keyType' => [ 'type' => 'string', 'locationName' => 'keyType', ],
                'shardIds' => [ 'type' => 'string', 'locationName' => 'shardIds', ],
                'unexpireKey' => [ 'type' => 'boolean', 'locationName' => 'unexpireKey', ],
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'cacheInstanceId' => [ 'type' => 'string', 'locationName' => 'cacheInstanceId', ],
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
        'DeleteAccountRequestShape' => [
            'type' => 'structure',
            'members' => [
                'accountName' => [ 'type' => 'string', 'locationName' => 'accountName', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'cacheInstanceId' => [ 'type' => 'string', 'locationName' => 'cacheInstanceId', ],
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
                'buyId' => [ 'type' => 'string', 'locationName' => 'buyId', ],
            ],
        ],
        'ModifyAccountRequestShape' => [
            'type' => 'structure',
            'members' => [
                'accountName' => [ 'type' => 'string', 'locationName' => 'accountName', ],
                'accountPassword' => [ 'type' => 'string', 'locationName' => 'accountPassword', ],
                'accountPrivilege' => [ 'type' => 'string', 'locationName' => 'accountPrivilege', ],
                'accountDescription' => [ 'type' => 'string', 'locationName' => 'accountDescription', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'cacheInstanceId' => [ 'type' => 'string', 'locationName' => 'cacheInstanceId', ],
            ],
        ],
        'StartClearDataResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'ModifySentinelResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeClusterInfoRequestShape' => [
            'type' => 'structure',
            'members' => [
                'detail' => [ 'type' => 'boolean', 'locationName' => 'detail', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'cacheInstanceId' => [ 'type' => 'string', 'locationName' => 'cacheInstanceId', ],
            ],
        ],
        'SwitchInstanceHAResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DescribeCacheAnalysisListResultShape' => [
            'type' => 'structure',
            'members' => [
                'analyses' => [ 'type' => 'list', 'member' => [ 'shape' => 'CacheAnalysis', ], ],
            ],
        ],
        'CreateBigKeyAnalysis2ResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeIpWhiteListResultShape' => [
            'type' => 'structure',
            'members' => [
                'ipWhiteList' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'ModifyInstanceMinorVersionResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'RestartProxyResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DescribeIpWhiteListRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'cacheInstanceId' => [ 'type' => 'string', 'locationName' => 'cacheInstanceId', ],
            ],
        ],
        'DescribeAnalysisThreshold2ResultShape' => [
            'type' => 'structure',
            'members' => [
                'stringSize' => [ 'type' => 'integer', 'locationName' => 'stringSize', ],
                'listSize' => [ 'type' => 'integer', 'locationName' => 'listSize', ],
                'hashSize' => [ 'type' => 'integer', 'locationName' => 'hashSize', ],
                'setSize' => [ 'type' => 'integer', 'locationName' => 'setSize', ],
                'zsetSize' => [ 'type' => 'integer', 'locationName' => 'zsetSize', ],
            ],
        ],
        'SetExposeTypeResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ModifyPublicAddressResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DescribeClearDataRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'cacheInstanceId' => [ 'type' => 'string', 'locationName' => 'cacheInstanceId', ],
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
                'unSupportConfigs' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'instanceConfig' => [ 'type' => 'list', 'member' => [ 'shape' => 'ConfigItem', ], ],
            ],
        ],
        'GetMetricResultShape' => [
            'type' => 'structure',
            'members' => [
                'metrics' => [ 'type' => 'list', 'member' => [ 'shape' => 'MetricBucket', ], ],
            ],
        ],
        'JvesselV1ListProxyConfigResultShape' => [
            'type' => 'structure',
            'members' => [
                'configs' => [ 'type' => 'object', 'locationName' => 'configs', ],
            ],
        ],
        'RestoreInstanceResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'CheckDeletableRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'cacheInstanceId' => [ 'type' => 'string', 'locationName' => 'cacheInstanceId', ],
            ],
        ],
        'DescribeConfigModifyHistoryResultShape' => [
            'type' => 'structure',
            'members' => [
                'modifyHistory' => [ 'type' => 'list', 'member' => [ 'shape' => 'ModifyHistory', ], ],
            ],
        ],
        'ModifyAccountResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'ListModulesRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'cacheInstanceId' => [ 'type' => 'string', 'locationName' => 'cacheInstanceId', ],
            ],
        ],
        'DescribeOfflineAnalysisTopKeyPrefixListResultShape' => [
            'type' => 'structure',
            'members' => [
                'count' => [ 'type' => 'integer', 'locationName' => 'count', ],
                'topPrefixes' => [ 'type' => 'list', 'member' => [ 'shape' => 'RedisPredixSpaceData', ], ],
            ],
        ],
        'ModifyRedisAvailableZonesResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DescribeAvailableSentinelListResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeAvailableSentinelListResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ImportDataRequestShape' => [
            'type' => 'structure',
            'members' => [
                'dataType' => [ 'type' => 'string', 'locationName' => 'dataType', ],
                'dataUrls' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'cacheInstanceId' => [ 'type' => 'string', 'locationName' => 'cacheInstanceId', ],
            ],
        ],
        'CreateAccountRequestShape' => [
            'type' => 'structure',
            'members' => [
                'accountName' => [ 'type' => 'string', 'locationName' => 'accountName', ],
                'accountPassword' => [ 'type' => 'string', 'locationName' => 'accountPassword', ],
                'accountPrivilege' => [ 'type' => 'string', 'locationName' => 'accountPrivilege', ],
                'accountDescription' => [ 'type' => 'string', 'locationName' => 'accountDescription', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'cacheInstanceId' => [ 'type' => 'string', 'locationName' => 'cacheInstanceId', ],
            ],
        ],
        'DescribeTaskProgressListResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeTaskProgressListResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeInstanceConfigResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeInstanceConfigResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'GetMetricRequestShape' => [
            'type' => 'structure',
            'members' => [
                'metric' => [ 'type' => 'string', 'locationName' => 'metric', ],
                'startTime' => [ 'type' => 'string', 'locationName' => 'startTime', ],
                'endTime' => [ 'type' => 'string', 'locationName' => 'endTime', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'cacheInstanceId' => [ 'type' => 'string', 'locationName' => 'cacheInstanceId', ],
            ],
        ],
        'DescribeBackupsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeBackupsResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeBigKeyAnalysisTimeResultShape' => [
            'type' => 'structure',
            'members' => [
                'time' => [ 'type' => 'string', 'locationName' => 'time', ],
            ],
        ],
        'ListModulesResultShape' => [
            'type' => 'structure',
            'members' => [
                'modules' => [ 'type' => 'list', 'member' => [ 'shape' => 'ModuleInfo', ], ],
            ],
        ],
        'RecycledCacheInstanceResultShape' => [
            'type' => 'structure',
            'members' => [
                'cacheInstances' => [ 'type' => 'list', 'member' => [ 'shape' => 'CacheInstance', ], ],
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
            ],
        ],
        'ModifyAnalysisThresholdResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DescribeBigKeyDetail2RequestShape' => [
            'type' => 'structure',
            'members' => [
                'taskId' => [ 'type' => 'string', 'locationName' => 'taskId', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'cacheInstanceId' => [ 'type' => 'string', 'locationName' => 'cacheInstanceId', ],
            ],
        ],
        'JvesselV1ProxyInfoResultShape' => [
            'type' => 'structure',
            'members' => [
                'proxyReplica' => [ 'type' => 'integer', 'locationName' => 'proxyReplica', ],
                'proxyFlavor' => [ 'type' => 'string', 'locationName' => 'proxyFlavor', ],
                'proxyRateFlavor' =>  [ 'shape' => 'ProxyRateFlavor', ],
            ],
        ],
        'DescribeHotKeyResult2RequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'cacheInstanceId' => [ 'type' => 'string', 'locationName' => 'cacheInstanceId', ],
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
                'resourceGroupIds' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DescribeBackupInfoRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'cacheInstanceId' => [ 'type' => 'string', 'locationName' => 'cacheInstanceId', ],
                'baseId' => [ 'type' => 'string', 'locationName' => 'baseId', ],
            ],
        ],
        'JvesselV1ProbeSuccessRateResultShape' => [
            'type' => 'structure',
            'members' => [
                'proxyProbeStats' =>  [ 'shape' => 'ProxyProbeStats', ],
            ],
        ],
        'HaDiagnosisRequestShape' => [
            'type' => 'structure',
            'members' => [
                'failureDomain' => [ 'type' => 'string', 'locationName' => 'failureDomain', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'cacheInstanceId' => [ 'type' => 'string', 'locationName' => 'cacheInstanceId', ],
            ],
        ],
        'JvesselV1ModifyProxyFlavorResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'MaintenanceTimeRequestShape' => [
            'type' => 'structure',
            'members' => [
                'startTime' => [ 'type' => 'string', 'locationName' => 'startTime', ],
                'endTime' => [ 'type' => 'string', 'locationName' => 'endTime', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'cacheInstanceId' => [ 'type' => 'string', 'locationName' => 'cacheInstanceId', ],
            ],
        ],
        'DescribeHotKeySummaryResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeHotKeySummaryResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeCacheInstanceResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeCacheInstanceResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeCacheAnalysisResultResultShape' => [
            'type' => 'structure',
            'members' => [
                'startTime' => [ 'type' => 'string', 'locationName' => 'startTime', ],
                'finishTime' => [ 'type' => 'string', 'locationName' => 'finishTime', ],
                'analysisType' => [ 'type' => 'integer', 'locationName' => 'analysisType', ],
                'stringBigKeys' => [ 'type' => 'list', 'member' => [ 'shape' => 'RedisKey', ], ],
                'otherBigKeys' => [ 'type' => 'list', 'member' => [ 'shape' => 'RedisKey', ], ],
                'hotKeys' => [ 'type' => 'list', 'member' => [ 'shape' => 'RedisKey', ], ],
                'cmdCallTimesTop' => [ 'type' => 'list', 'member' => [ 'shape' => 'RedisCmd', ], ],
                'cmdUseCpuTop' => [ 'type' => 'list', 'member' => [ 'shape' => 'RedisCmd', ], ],
                'keyTypeDistribution' => [ 'type' => 'object', 'locationName' => 'keyTypeDistribution', ],
                'keySizeDistribution' => [ 'type' => 'object', 'locationName' => 'keySizeDistribution', ],
            ],
        ],
        'CreateCacheAnalysisResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeBigKeyList2ResultShape' => [
            'type' => 'structure',
            'members' => [
                'cacheAnalysisList' => [ 'type' => 'list', 'member' => [ 'shape' => 'ClusterCacheAnalysis', ], ],
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
            ],
        ],
        'DescribeBigKeyAnalysisTimeRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'cacheInstanceId' => [ 'type' => 'string', 'locationName' => 'cacheInstanceId', ],
            ],
        ],
        'GetBackupFilesRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'startTime' => [ 'type' => 'string', 'locationName' => 'startTime', ],
                'endTime' => [ 'type' => 'string', 'locationName' => 'endTime', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'cacheInstanceId' => [ 'type' => 'string', 'locationName' => 'cacheInstanceId', ],
            ],
        ],
        'DescribeAnalysisThresholdResultShape' => [
            'type' => 'structure',
            'members' => [
                'stringSize' => [ 'type' => 'integer', 'locationName' => 'stringSize', ],
                'listSize' => [ 'type' => 'integer', 'locationName' => 'listSize', ],
                'hashSize' => [ 'type' => 'integer', 'locationName' => 'hashSize', ],
                'setSize' => [ 'type' => 'integer', 'locationName' => 'setSize', ],
                'zsetSize' => [ 'type' => 'integer', 'locationName' => 'zsetSize', ],
                'topSize' => [ 'type' => 'integer', 'locationName' => 'topSize', ],
            ],
        ],
        'DescribeRedisServerLogResultShape' => [
            'type' => 'structure',
            'members' => [
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
                'logs' => [ 'type' => 'list', 'member' => [ 'shape' => 'RedisServerLog', ], ],
            ],
        ],
        'RestartProxyRequestShape' => [
            'type' => 'structure',
            'members' => [
                'proxyIds' => [ 'type' => 'list', 'member' => [ 'type' => 'integer', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'cacheInstanceId' => [ 'type' => 'string', 'locationName' => 'cacheInstanceId', ],
            ],
        ],
        'RestartInstanceResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DescribeCacheAnalysisListResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeCacheAnalysisListResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeIpWhiteListResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeIpWhiteListResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DeleteAccountResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeOfflineAnalysisTopKeyPrefixListResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeOfflineAnalysisTopKeyPrefixListResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'CheckDeletableResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DeleteRecycledCacheInstanceResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeBigKeyListRequestShape' => [
            'type' => 'structure',
            'members' => [
                'date' => [ 'type' => 'string', 'locationName' => 'date', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'cacheInstanceId' => [ 'type' => 'string', 'locationName' => 'cacheInstanceId', ],
            ],
        ],
        'ModifyAnalysisThresholdResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeBigKeyAnalysisTime2ResultShape' => [
            'type' => 'structure',
            'members' => [
                'time' => [ 'type' => 'string', 'locationName' => 'time', ],
            ],
        ],
        'JvesselV1ListSlaveConfigRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'cacheInstanceId' => [ 'type' => 'string', 'locationName' => 'cacheInstanceId', ],
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
        'JvesselV1ModifyProxyReplicaResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ModifyRedisAvailableZonesRequestShape' => [
            'type' => 'structure',
            'members' => [
                'nodeGroup' => [ 'type' => 'string', 'locationName' => 'nodeGroup', ],
                'targetAZ' => [ 'type' => 'string', 'locationName' => 'targetAZ', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'cacheInstanceId' => [ 'type' => 'string', 'locationName' => 'cacheInstanceId', ],
            ],
        ],
        'SwitchInstanceHARequestShape' => [
            'type' => 'structure',
            'members' => [
                'switchList' => [ 'type' => 'list', 'member' => [ 'shape' => 'HaSwitch', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'cacheInstanceId' => [ 'type' => 'string', 'locationName' => 'cacheInstanceId', ],
            ],
        ],
        'DescribeClusterInfoResultShape' => [
            'type' => 'structure',
            'members' => [
                'info' =>  [ 'shape' => 'ClusterInfo', ],
                'topo' =>  [ 'shape' => 'TopoInfo', ],
            ],
        ],
        'DescribeBackupInfoResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeBackupInfoResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeConfigModifyHistoryRequestShape' => [
            'type' => 'structure',
            'members' => [
                'startTime' => [ 'type' => 'string', 'locationName' => 'startTime', ],
                'endTime' => [ 'type' => 'string', 'locationName' => 'endTime', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'cacheInstanceId' => [ 'type' => 'string', 'locationName' => 'cacheInstanceId', ],
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
        'ModifyBlockStatusRequestShape' => [
            'type' => 'structure',
            'members' => [
                'action' => [ 'type' => 'string', 'locationName' => 'action', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'cacheInstanceId' => [ 'type' => 'string', 'locationName' => 'cacheInstanceId', ],
            ],
        ],
        'DescribeInstanceTLSResultShape' => [
            'type' => 'structure',
            'members' => [
                'tlsType' => [ 'type' => 'string', 'locationName' => 'tlsType', ],
                'tlsStatus' => [ 'type' => 'string', 'locationName' => 'tlsStatus', ],
                'featureSupport' => [ 'type' => 'boolean', 'locationName' => 'featureSupport', ],
                'tlsVersion' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'certExpiration' => [ 'type' => 'string', 'locationName' => 'certExpiration', ],
                'ca' => [ 'type' => 'string', 'locationName' => 'ca', ],
                'caDownloadUrl' => [ 'type' => 'string', 'locationName' => 'caDownloadUrl', ],
            ],
        ],
        'DescribeCacheInstanceRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'cacheInstanceId' => [ 'type' => 'string', 'locationName' => 'cacheInstanceId', ],
            ],
        ],
        'CheckPasswordValidResultShape' => [
            'type' => 'structure',
            'members' => [
                'valid' => [ 'type' => 'boolean', 'locationName' => 'valid', ],
                'msg' => [ 'type' => 'string', 'locationName' => 'msg', ],
            ],
        ],
        'CheckPasswordValidResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'CheckPasswordValidResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'CheckPasswordValidRequestShape' => [
            'type' => 'structure',
            'members' => [
                'password' => [ 'type' => 'string', 'locationName' => 'password', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DeleteConfigTemplateResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'CreateConfigTemplateRequestShape' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'val' => [ 'type' => 'map', 'key' => [ 'type' => 'string', ], 'value' => [ 'type' => 'string', ], ],
                'redisType' => [ 'type' => 'string', 'locationName' => 'redisType', ],
                'redisVersion' => [ 'type' => 'string', 'locationName' => 'redisVersion', ],
            ],
        ],
        'ModifyTemplateResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DeleteConfigTemplateResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'CreateConfigTemplateResultShape' => [
            'type' => 'structure',
            'members' => [
                'templateId' => [ 'type' => 'string', 'locationName' => 'templateId', ],
            ],
        ],
        'DescribeConfigTemplateResultShape' => [
            'type' => 'structure',
            'members' => [
                'templateId' => [ 'type' => 'string', 'locationName' => 'templateId', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'val' => [ 'type' => 'list', 'member' => [ 'shape' => 'ConfigItem', ], ],
                'redisType' => [ 'type' => 'string', 'locationName' => 'redisType', ],
                'redisVersion' => [ 'type' => 'string', 'locationName' => 'redisVersion', ],
                'tplType' => [ 'type' => 'string', 'locationName' => 'tplType', ],
                'user' => [ 'type' => 'string', 'locationName' => 'user', ],
                'pin' => [ 'type' => 'string', 'locationName' => 'pin', ],
                'createdTime' => [ 'type' => 'string', 'locationName' => 'createdTime', ],
                'modifiedTime' => [ 'type' => 'string', 'locationName' => 'modifiedTime', ],
            ],
        ],
        'DescribeConfigTemplateResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'DescribeConfigTemplateResultShape', ],
            ],
        ],
        'ModifyTemplateResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeConfigTemplatesResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'DescribeConfigTemplatesResultShape', ],
            ],
        ],
        'DescribeConfigTemplateRequestShape' => [
            'type' => 'structure',
            'members' => [
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'templateId' => [ 'type' => 'string', 'locationName' => 'templateId', ],
            ],
        ],
        'ModifyTemplateRequestShape' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'val' => [ 'type' => 'map', 'key' => [ 'type' => 'string', ], 'value' => [ 'type' => 'string', ], ],
                'templateId' => [ 'type' => 'string', 'locationName' => 'templateId', ],
            ],
        ],
        'CreateConfigTemplateResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'CreateConfigTemplateResultShape', ],
            ],
        ],
        'DescribeConfigTemplatesRequestShape' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'redisType' => [ 'type' => 'string', 'locationName' => 'redisType', ],
                'redisVersion' => [ 'type' => 'string', 'locationName' => 'redisVersion', ],
                'tplType' => [ 'type' => 'string', 'locationName' => 'tplType', ],
                'pageNumber' => [ 'type' => 'string', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'string', 'locationName' => 'pageSize', ],
            ],
        ],
        'DeleteConfigTemplateRequestShape' => [
            'type' => 'structure',
            'members' => [
                'templateId' => [ 'type' => 'string', 'locationName' => 'templateId', ],
            ],
        ],
        'DescribeConfigTemplatesResultShape' => [
            'type' => 'structure',
            'members' => [
                'templates' => [ 'type' => 'list', 'member' => [ 'shape' => 'ConfigTemplate', ], ],
                'total' => [ 'type' => 'integer', 'locationName' => 'total', ],
            ],
        ],
        'UserDiagnoseInstancesResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'UserGetDiagnoseReportResultShape' => [
            'type' => 'structure',
            'members' => [
                'basicInfo' =>  [ 'shape' => 'DiagnoseBasicInfo', ],
                'diagnoseSummary' =>  [ 'shape' => 'DiagnoseSummary', ],
                'performance' =>  [ 'shape' => 'DiagnosePerformance', ],
                'slowLogs' => [ 'type' => 'list', 'member' => [ 'shape' => 'DiagnoseSlowLog', ], ],
            ],
        ],
        'QueryDiagnosePolicyResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'QueryDiagnosePolicyResultShape', ],
            ],
        ],
        'ConfigOverrideMetricResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'UserDiagnoseInstancesRequestShape' => [
            'type' => 'structure',
            'members' => [
                'instanceIds' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'startTime' => [ 'type' => 'string', 'locationName' => 'startTime', ],
                'endTime' => [ 'type' => 'string', 'locationName' => 'endTime', ],
            ],
        ],
        'ConfigDiagnosePolicyRequestShape' => [
            'type' => 'structure',
            'members' => [
                'instanceIds' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'autoDiagnose' => [ 'type' => 'boolean', 'locationName' => 'autoDiagnose', ],
                'diagnoseTime' => [ 'type' => 'string', 'locationName' => 'diagnoseTime', ],
                'diagnosePeriod' => [ 'type' => 'string', 'locationName' => 'diagnosePeriod', ],
            ],
        ],
        'ListPinDiagnoseTasksResultShape' => [
            'type' => 'structure',
            'members' => [
                'instanceNumber' => [ 'type' => 'integer', 'locationName' => 'instanceNumber', ],
                'taskNumber' => [ 'type' => 'integer', 'locationName' => 'taskNumber', ],
                'abnormalInstanceNumber' => [ 'type' => 'integer', 'locationName' => 'abnormalInstanceNumber', ],
                'abnormalTaskNumber' => [ 'type' => 'integer', 'locationName' => 'abnormalTaskNumber', ],
                'instancesDiagnose' => [ 'type' => 'list', 'member' => [ 'shape' => 'InstanceDiagnose', ], ],
                'total' => [ 'type' => 'integer', 'locationName' => 'total', ],
            ],
        ],
        'ConfigDiagnosePolicyResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'ListPinDiagnoseTasksResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'ListPinDiagnoseTasksResultShape', ],
            ],
        ],
        'UserGetDiagnoseReportResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'UserGetDiagnoseReportResultShape', ],
            ],
        ],
        'UserGetDiagnoseReportRequestShape' => [
            'type' => 'structure',
            'members' => [
                'taskId' => [ 'type' => 'string', 'locationName' => 'taskId', ],
            ],
        ],
        'QueryDiagnosePolicyResultShape' => [
            'type' => 'structure',
            'members' => [
                'result' => [ 'type' => 'list', 'member' => [ 'shape' => 'DiagnosePolicy', ], ],
            ],
        ],
        'ListInstanceDiagnoseTasksResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'ListInstanceDiagnoseTasksResultShape', ],
            ],
        ],
        'QueryDiagnosePolicyRequestShape' => [
            'type' => 'structure',
            'members' => [
                'instanceIds' => [ 'type' => 'string', 'locationName' => 'instanceIds', ],
            ],
        ],
        'ListInstanceDiagnoseTasksRequestShape' => [
            'type' => 'structure',
            'members' => [
                'startTime' => [ 'type' => 'string', 'locationName' => 'startTime', ],
                'endTime' => [ 'type' => 'string', 'locationName' => 'endTime', ],
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'cacheInstanceId' => [ 'type' => 'string', 'locationName' => 'cacheInstanceId', ],
            ],
        ],
        'ListPinDiagnoseTasksRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'instanceName' => [ 'type' => 'string', 'locationName' => 'instanceName', ],
                'startTime' => [ 'type' => 'string', 'locationName' => 'startTime', ],
                'endTime' => [ 'type' => 'string', 'locationName' => 'endTime', ],
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
            ],
        ],
        'ConfigOverrideMetricResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ConfigDiagnosePolicyResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ListInstanceDiagnoseTasksResultShape' => [
            'type' => 'structure',
            'members' => [
                'total' => [ 'type' => 'integer', 'locationName' => 'total', ],
                'result' => [ 'type' => 'list', 'member' => [ 'shape' => 'UserDiagnoseTaskInfo', ], ],
            ],
        ],
        'UserDiagnoseInstancesResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'ConfigOverrideMetricRequestShape' => [
            'type' => 'structure',
            'members' => [
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'overrideMetric' => [ 'type' => 'list', 'member' => [ 'shape' => 'DiagnoseOverrideMetric', ], ],
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
        'DescribeChartReleasesRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'chart' => [ 'type' => 'string', 'locationName' => 'chart', ],
                'version' => [ 'type' => 'string', 'locationName' => 'version', ],
            ],
        ],
        'DescribeImageReleasesResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeImageReleasesResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeChartReleasesResultShape' => [
            'type' => 'structure',
            'members' => [
                'chartReleases' => [ 'type' => 'list', 'member' => [ 'shape' => 'ChartRelease', ], ],
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
            ],
        ],
        'DescribeChartReleasesResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeChartReleasesResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeImageReleasesRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'redisVersion' => [ 'type' => 'string', 'locationName' => 'redisVersion', ],
                'component' => [ 'type' => 'string', 'locationName' => 'component', ],
                'imageTag' => [ 'type' => 'string', 'locationName' => 'imageTag', ],
            ],
        ],
        'DescribeImageReleasesResultShape' => [
            'type' => 'structure',
            'members' => [
                'imageReleases' => [ 'type' => 'list', 'member' => [ 'shape' => 'ImageRelease', ], ],
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
            ],
        ],
        'DescribeSpecConfigResultShape' => [
            'type' => 'structure',
            'members' => [
                'shardSpec' => [ 'type' => 'object', 'locationName' => 'shardSpec', ],
                'instanceSpec' =>  [ 'shape' => 'InstanceSpec', ],
            ],
        ],
        'DescribeSpecConfigRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DescribeSpecConfigResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeSpecConfigResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'TaskResult' => [
            'type' => 'structure',
            'members' => [
                'result' => [ 'type' => 'string', 'locationName' => 'result', ],
                'errorInfo' => [ 'type' => 'string', 'locationName' => 'errorInfo', ],
                'stepDetails' => [ 'type' => 'list', 'member' => [ 'shape' => 'TaskStepDetail', ], ],
                'changeDetails' => [ 'type' => 'list', 'member' => [ 'shape' => 'TaskChangeDetail', ], ],
            ],
        ],
        'CancelTaskRequestShape' => [
            'type' => 'structure',
            'members' => [
                'taskId' => [ 'type' => 'string', 'locationName' => 'taskId', ],
            ],
        ],
        'ListTaskTypesResultShape' => [
            'type' => 'structure',
            'members' => [
                'taskTypes' => [ 'type' => 'list', 'member' => [ 'shape' => 'TaskType', ], ],
            ],
        ],
        'ListTaskTypesRequestShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'ModifyTaskRunTimeResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'CancelTaskResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ListTaskTypesResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'ListTaskTypesResultShape', ],
            ],
        ],
        'ListTasksResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'ListTasksResultShape', ],
            ],
        ],
        'InterruptTaskResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'ListTasksResultShape' => [
            'type' => 'structure',
            'members' => [
                'isSupport' => [ 'type' => 'boolean', 'locationName' => 'isSupport', ],
                'total' => [ 'type' => 'integer', 'locationName' => 'total', ],
                'tasks' => [ 'type' => 'list', 'member' => [ 'shape' => 'TaskInfo', ], ],
            ],
        ],
        'ListTasksRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'taskType' => [ 'type' => 'integer', 'locationName' => 'taskType', ],
                'taskStatus' => [ 'type' => 'string', 'locationName' => 'taskStatus', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'startTime' => [ 'type' => 'string', 'locationName' => 'startTime', ],
                'endTime' => [ 'type' => 'string', 'locationName' => 'endTime', ],
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
            ],
        ],
        'ModifyTaskRunTimeRequestShape' => [
            'type' => 'structure',
            'members' => [
                'taskId' => [ 'type' => 'string', 'locationName' => 'taskId', ],
                'startTime' => [ 'type' => 'string', 'locationName' => 'startTime', ],
                'endTime' => [ 'type' => 'string', 'locationName' => 'endTime', ],
            ],
        ],
        'ListTaskResultShape' => [
            'type' => 'structure',
            'members' => [
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'taskType' => [ 'type' => 'integer', 'locationName' => 'taskType', ],
                'taskStatus' => [ 'type' => 'string', 'locationName' => 'taskStatus', ],
                'startTime' => [ 'type' => 'string', 'locationName' => 'startTime', ],
                'endTime' => [ 'type' => 'string', 'locationName' => 'endTime', ],
                'maintenanceStartTime' => [ 'type' => 'string', 'locationName' => 'maintenanceStartTime', ],
                'maintenanceEndTime' => [ 'type' => 'string', 'locationName' => 'maintenanceEndTime', ],
                'estimatedExecutionTime' => [ 'type' => 'string', 'locationName' => 'estimatedExecutionTime', ],
                'executionTime' => [ 'type' => 'string', 'locationName' => 'executionTime', ],
                'taskResult' =>  [ 'shape' => 'TaskResult', ],
            ],
        ],
        'InterruptTaskResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'InterruptTaskRequestShape' => [
            'type' => 'structure',
            'members' => [
                'taskId' => [ 'type' => 'string', 'locationName' => 'taskId', ],
            ],
        ],
        'ListTaskResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'ListTaskResultShape', ],
            ],
        ],
        'ListTaskRequestShape' => [
            'type' => 'structure',
            'members' => [
                'taskId' => [ 'type' => 'string', 'locationName' => 'taskId', ],
            ],
        ],
        'ModifyTaskRunTimeResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'CancelTaskResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DescribeWhiteListGroupResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeWhiteListGroupResultShape', ],
            ],
        ],
        'DescribeWhiteListGroupRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'cacheInstanceId' => [ 'type' => 'string', 'locationName' => 'cacheInstanceId', ],
            ],
        ],
        'ModifyWhiteListGroupResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'AddWhiteListGroupResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'AddWhiteListGroupResponseShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'ModifyWhiteListGroupRequestShape' => [
            'type' => 'structure',
            'members' => [
                'ips' => [ 'type' => 'string', 'locationName' => 'ips', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'cacheInstanceId' => [ 'type' => 'string', 'locationName' => 'cacheInstanceId', ],
            ],
        ],
        'DeleteWhiteListGroupRequestShape' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'cacheInstanceId' => [ 'type' => 'string', 'locationName' => 'cacheInstanceId', ],
            ],
        ],
        'DescribeWhiteListGroupResultShape' => [
            'type' => 'structure',
            'members' => [
                'whiteLists' => [ 'type' => 'list', 'member' => [ 'shape' => 'WhiteList', ], ],
            ],
        ],
        'ModifyWhiteListGroupResponseShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DeleteWhiteListGroupResponseShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'AddWhiteListGroupRequestShape' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'ips' => [ 'type' => 'string', 'locationName' => 'ips', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'cacheInstanceId' => [ 'type' => 'string', 'locationName' => 'cacheInstanceId', ],
            ],
        ],
        'DeleteWhiteListGroupResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
    ],
];
