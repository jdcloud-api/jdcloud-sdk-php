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
        'ClientKill' => [
            'name' => 'ClientKill',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/cacheInstance/{cacheInstanceId}/clientKill',
            ],
            'input' => [ 'shape' => 'ClientKillRequestShape', ],
            'output' => [ 'shape' => 'ClientKillResponseShape', ],
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
            ],
        ],
        'AzIdSpec' => [
            'type' => 'structure',
            'members' => [
                'azSpecifyType' => [ 'type' => 'string', 'locationName' => 'azSpecifyType', ],
                'azsForCluster' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'master' => [ 'type' => 'string', 'locationName' => 'master', ],
                'slave' => [ 'type' => 'string', 'locationName' => 'slave', ],
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
        'BigKeyAnalysisNode' => [
            'type' => 'structure',
            'members' => [
                'nodeId' => [ 'type' => 'string', 'locationName' => 'nodeId', ],
                'nodeRole' => [ 'type' => 'string', 'locationName' => 'nodeRole', ],
                'stringTypeNum' => [ 'type' => 'string', 'locationName' => 'stringTypeNum', ],
                'listTypeNum' => [ 'type' => 'string', 'locationName' => 'listTypeNum', ],
                'setTypeNum' => [ 'type' => 'integer', 'locationName' => 'setTypeNum', ],
                'hashTypeNum' => [ 'type' => 'integer', 'locationName' => 'hashTypeNum', ],
                'zsetTypeNum' => [ 'type' => 'integer', 'locationName' => 'zsetTypeNum', ],
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
        'InstanceDomain' => [
            'type' => 'structure',
            'members' => [
                'domainName' => [ 'type' => 'string', 'locationName' => 'domainName', ],
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
        'ShardInfo' => [
            'type' => 'structure',
            'members' => [
                'defaultShardNumber' => [ 'type' => 'integer', 'locationName' => 'defaultShardNumber', ],
                'defaultShardClass' => [ 'type' => 'string', 'locationName' => 'defaultShardClass', ],
                'shardNumberList' => [ 'type' => 'list', 'member' => [ 'type' => 'integer', ], ],
                'ipNumberList' => [ 'type' => 'list', 'member' => [ 'type' => 'integer', ], ],
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
        'RedisNode' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'shardId' => [ 'type' => 'string', 'locationName' => 'shardId', ],
                'role' => [ 'type' => 'string', 'locationName' => 'role', ],
                'address' => [ 'type' => 'string', 'locationName' => 'address', ],
                'az' => [ 'type' => 'string', 'locationName' => 'az', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'slots' => [ 'type' => 'integer', 'locationName' => 'slots', ],
                'usedMemory' => [ 'type' => 'long', 'locationName' => 'usedMemory', ],
                'maxMemory' => [ 'type' => 'long', 'locationName' => 'maxMemory', ],
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
        'SlowLog' => [
            'type' => 'structure',
            'members' => [
                'command' => [ 'type' => 'string', 'locationName' => 'command', ],
                'startTime' => [ 'type' => 'string', 'locationName' => 'startTime', ],
                'executionTime' => [ 'type' => 'string', 'locationName' => 'executionTime', ],
                'shardId' => [ 'type' => 'string', 'locationName' => 'shardId', ],
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
        'DescribeAnalysisThresholdResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeAnalysisThresholdResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
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
        'ModifyBigKeyAnalysisTimeResultShape' => [
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
        'DescribeResizeModeIpTimeInfoRequestShape' => [
            'type' => 'structure',
            'members' => [
                'cacheInstanceClass' => [ 'type' => 'string', 'locationName' => 'cacheInstanceClass', ],
                'shardNumber' => [ 'type' => 'integer', 'locationName' => 'shardNumber', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'cacheInstanceId' => [ 'type' => 'string', 'locationName' => 'cacheInstanceId', ],
            ],
        ],
        'DescribeInstanceConfigRequestShape' => [
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
                'parallel' => [ 'type' => 'boolean', 'locationName' => 'parallel', ],
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
        'CreateBackupRequestShape' => [
            'type' => 'structure',
            'members' => [
                'fileName' => [ 'type' => 'string', 'locationName' => 'fileName', ],
                'backupType' => [ 'type' => 'integer', 'locationName' => 'backupType', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'cacheInstanceId' => [ 'type' => 'string', 'locationName' => 'cacheInstanceId', ],
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
        'CreateCacheAnalysisResultShape' => [
            'type' => 'structure',
            'members' => [
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
        'DeleteAccountResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DescribeAccountsRequestShape' => [
            'type' => 'structure',
            'members' => [
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
        'DescribeHotKeySummaryRequestShape' => [
            'type' => 'structure',
            'members' => [
                'startTime' => [ 'type' => 'string', 'locationName' => 'startTime', ],
                'endTime' => [ 'type' => 'string', 'locationName' => 'endTime', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'cacheInstanceId' => [ 'type' => 'string', 'locationName' => 'cacheInstanceId', ],
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
        'DescribeBackupPolicyResultShape' => [
            'type' => 'structure',
            'members' => [
                'autoBackup' => [ 'type' => 'boolean', 'locationName' => 'autoBackup', ],
                'backupPeriod' => [ 'type' => 'string', 'locationName' => 'backupPeriod', ],
                'backupTime' => [ 'type' => 'string', 'locationName' => 'backupTime', ],
                'nextBackupTime' => [ 'type' => 'string', 'locationName' => 'nextBackupTime', ],
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
        'DescribeClientIpDetailResultShape' => [
            'type' => 'structure',
            'members' => [
                'details' => [ 'type' => 'list', 'member' => [ 'shape' => 'Details', ], ],
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
        'DescribeTaskProgressListResultShape' => [
            'type' => 'structure',
            'members' => [
                'taskProgresses' => [ 'type' => 'list', 'member' => [ 'shape' => 'TaskProgress', ], ],
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
        'CreateBackupResultShape' => [
            'type' => 'structure',
            'members' => [
                'baseId' => [ 'type' => 'string', 'locationName' => 'baseId', ],
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
        'SetDisableCommandsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ClientKillResponseShape' => [
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
        'StartClearDataResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ModifyBackupPolicyResponseShape' => [
            'type' => 'structure',
            'members' => [
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
        'DescribeAnalysisThresholdRequestShape' => [
            'type' => 'structure',
            'members' => [
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
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'cacheInstanceId' => [ 'type' => 'string', 'locationName' => 'cacheInstanceId', ],
            ],
        ],
        'ModifyAccountsResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DescribeBigKeyDetail2ResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeBigKeyDetail2ResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
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
        'CreateBigKeyAnalysisResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
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
        'ModifyAnalysisTimeResultShape' => [
            'type' => 'structure',
            'members' => [
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
        'ModifyAnalysisThreshold2ResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
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
        'DescribeHotKeyDetailResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeHotKeyDetailResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeCacheInstanceResultShape' => [
            'type' => 'structure',
            'members' => [
                'cacheInstance' =>  [ 'shape' => 'CacheInstance', ],
            ],
        ],
        'StopClearDataRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'cacheInstanceId' => [ 'type' => 'string', 'locationName' => 'cacheInstanceId', ],
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
        'DescribeCacheAnalysisListRequestShape' => [
            'type' => 'structure',
            'members' => [
                'date' => [ 'type' => 'string', 'locationName' => 'date', ],
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
        'DescribeClusterInfoRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'cacheInstanceId' => [ 'type' => 'string', 'locationName' => 'cacheInstanceId', ],
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
        'DescribeSlowLogResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeSlowLogResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
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
        'ModifyAccountsResponseShape' => [
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
        'ModifyBigKeyAnalysisTime2ResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'RestoreInstanceResponseShape' => [
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
        'ModifyAccountResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DescribeAccountsResultShape' => [
            'type' => 'structure',
            'members' => [
                'isSupport' => [ 'type' => 'boolean', 'locationName' => 'isSupport', ],
                'accountLists' => [ 'type' => 'list', 'member' => [ 'shape' => 'Accounts', ], ],
            ],
        ],
        'SetDisableCommandsResultShape' => [
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
        'DescribeCacheAnalysisResultRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'cacheInstanceId' => [ 'type' => 'string', 'locationName' => 'cacheInstanceId', ],
                'taskId' => [ 'type' => 'string', 'locationName' => 'taskId', ],
            ],
        ],
        'DescribeDownloadUrlResultShape' => [
            'type' => 'structure',
            'members' => [
                'downloadUrls' => [ 'type' => 'list', 'member' => [ 'shape' => 'DownloadUrl', ], ],
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
        'DescribeHotKeySummaryResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeHotKeySummaryResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'CreateBigKeyAnalysisResultShape' => [
            'type' => 'structure',
            'members' => [
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
        'RestartProxyResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
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
        'DescribeClientListResultShape' => [
            'type' => 'structure',
            'members' => [
                'ips' => [ 'type' => 'list', 'member' => [ 'shape' => 'Ips', ], ],
            ],
        ],
        'DescribeBigKeyAnalysisTimeRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'cacheInstanceId' => [ 'type' => 'string', 'locationName' => 'cacheInstanceId', ],
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
        'RestartProxyRequestShape' => [
            'type' => 'structure',
            'members' => [
                'proxyIds' => [ 'type' => 'list', 'member' => [ 'type' => 'integer', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'cacheInstanceId' => [ 'type' => 'string', 'locationName' => 'cacheInstanceId', ],
            ],
        ],
        'CreateBigKeyAnalysis2ResultShape' => [
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
        'DescribeAccountsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeAccountsResultShape', ],
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
        'StopCacheAnalysisRequestShape' => [
            'type' => 'structure',
            'members' => [
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
        'RestoreInstanceRequestShape' => [
            'type' => 'structure',
            'members' => [
                'baseId' => [ 'type' => 'string', 'locationName' => 'baseId', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'cacheInstanceId' => [ 'type' => 'string', 'locationName' => 'cacheInstanceId', ],
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
        'DescribeClusterInfoResultShape' => [
            'type' => 'structure',
            'members' => [
                'info' =>  [ 'shape' => 'ClusterInfo', ],
            ],
        ],
        'ModifyIpWhiteListResponseShape' => [
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
        'DescribeCacheInstanceRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'cacheInstanceId' => [ 'type' => 'string', 'locationName' => 'cacheInstanceId', ],
            ],
        ],
        'DescribeHotKeyResult2ResultShape' => [
            'type' => 'structure',
            'members' => [
                'hotKeyAnalysisNodesList' => [ 'type' => 'list', 'member' => [ 'shape' => 'HotKeyAnalysisNode', ], ],
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
    ],
];
