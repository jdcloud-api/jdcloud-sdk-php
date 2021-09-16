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
        'DescribeTaskProgressList' => [
            'name' => 'DescribeTaskProgressList',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/cacheInstance/{cacheInstanceId}/taskProgress',
            ],
            'input' => [ 'shape' => 'DescribeTaskProgressListRequestShape', ],
            'output' => [ 'shape' => 'DescribeTaskProgressListResponseShape', ],
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
        'DescribeSpecConfig' => [
            'name' => 'DescribeSpecConfig',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/specConfig',
            ],
            'input' => [ 'shape' => 'DescribeSpecConfigRequestShape', ],
            'output' => [ 'shape' => 'DescribeSpecConfigResponseShape', ],
        ],
    ],
    'shapes' => [
    ],
];
