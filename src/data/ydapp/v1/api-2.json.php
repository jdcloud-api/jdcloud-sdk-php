<?php
// This file was auto-generated
return [
//    'version' => '',
    'metadata' =>
    [
//        'apiVersion' => '',
//        'endpointPrefix' => 'ydapp',
        'protocol' => 'json',
//        'serviceFullName' => 'ydapp',
//        'serviceId' => 'ydapp',
    ],
    'operations' => [
        'DescribeApps' => [
            'name' => 'DescribeApps',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/apps',
            ],
            'input' => [ 'shape' => 'DescribeAppsRequestShape', ],
            'output' => [ 'shape' => 'DescribeAppsResponseShape', ],
        ],
        'LinkPackage' => [
            'name' => 'LinkPackage',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/app/{appId}:linkPackage',
            ],
            'input' => [ 'shape' => 'LinkPackageRequestShape', ],
            'output' => [ 'shape' => 'LinkPackageResponseShape', ],
        ],
        'ScanPackage' => [
            'name' => 'ScanPackage',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/app/{appId}/package/{packageId}:scan',
            ],
            'input' => [ 'shape' => 'ScanPackageRequestShape', ],
            'output' => [ 'shape' => 'ScanPackageResponseShape', ],
        ],
        'GenerateUploadUrl' => [
            'name' => 'GenerateUploadUrl',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/app/{appId}/package:uploadUrl',
            ],
            'input' => [ 'shape' => 'GenerateUploadUrlRequestShape', ],
            'output' => [ 'shape' => 'GenerateUploadUrlResponseShape', ],
        ],
        'GetPackageDownloadInfo' => [
            'name' => 'GetPackageDownloadInfo',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/app/{appId}/package/{packageId}:downloadInfo',
            ],
            'input' => [ 'shape' => 'GetPackageDownloadInfoRequestShape', ],
            'output' => [ 'shape' => 'GetPackageDownloadInfoResponseShape', ],
        ],
        'DescribePackages' => [
            'name' => 'DescribePackages',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/app/{appId}/packages',
            ],
            'input' => [ 'shape' => 'DescribePackagesRequestShape', ],
            'output' => [ 'shape' => 'DescribePackagesResponseShape', ],
        ],
        'DeletePackage' => [
            'name' => 'DeletePackage',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/app/{appId}/package/{packageId}',
            ],
            'input' => [ 'shape' => 'DeletePackageRequestShape', ],
            'output' => [ 'shape' => 'DeletePackageResponseShape', ],
        ],
        'DescribeAutoDeletePolicy' => [
            'name' => 'DescribeAutoDeletePolicy',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/app/{appId}/imageRepo:autoDeletePolicy',
            ],
            'input' => [ 'shape' => 'DescribeAutoDeletePolicyRequestShape', ],
            'output' => [ 'shape' => 'DescribeAutoDeletePolicyResponseShape', ],
        ],
        'OpenAutoDeleteRepo' => [
            'name' => 'OpenAutoDeleteRepo',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/app/{appId}/imageRepo:openAutoDelete',
            ],
            'input' => [ 'shape' => 'OpenAutoDeleteRepoRequestShape', ],
            'output' => [ 'shape' => 'OpenAutoDeleteRepoResponseShape', ],
        ],
        'CloseAutoDeleteRepo' => [
            'name' => 'CloseAutoDeleteRepo',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/app/{appId}/imageRepo:closeAutoDelete',
            ],
            'input' => [ 'shape' => 'CloseAutoDeleteRepoRequestShape', ],
            'output' => [ 'shape' => 'CloseAutoDeleteRepoResponseShape', ],
        ],
        'CreatePipelineTask' => [
            'name' => 'CreatePipelineTask',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/pipelinetask',
            ],
            'input' => [ 'shape' => 'CreatePipelineTaskRequestShape', ],
            'output' => [ 'shape' => 'CreatePipelineTaskResponseShape', ],
        ],
        'DescribeImageRecords' => [
            'name' => 'DescribeImageRecords',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/imageRecords:page',
            ],
            'input' => [ 'shape' => 'DescribeImageRecordsRequestShape', ],
            'output' => [ 'shape' => 'DescribeImageRecordsResponseShape', ],
        ],
        'DeleteImageRecord' => [
            'name' => 'DeleteImageRecord',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/imageRecord/{uid}',
            ],
            'input' => [ 'shape' => 'DeleteImageRecordRequestShape', ],
            'output' => [ 'shape' => 'DeleteImageRecordResponseShape', ],
        ],
        'DescribeBaseImages' => [
            'name' => 'DescribeBaseImages',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/baseImages',
            ],
            'input' => [ 'shape' => 'DescribeBaseImagesRequestShape', ],
            'output' => [ 'shape' => 'DescribeBaseImagesResponseShape', ],
        ],
        'DeleteCustomImage' => [
            'name' => 'DeleteCustomImage',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/app/{appId}/customImage/{imageDigest}',
            ],
            'input' => [ 'shape' => 'DeleteCustomImageRequestShape', ],
            'output' => [ 'shape' => 'DeleteCustomImageResponseShape', ],
        ],
        'DescribeCustomImages' => [
            'name' => 'DescribeCustomImages',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/app/{appId}/customImages',
            ],
            'input' => [ 'shape' => 'DescribeCustomImagesRequestShape', ],
            'output' => [ 'shape' => 'DescribeCustomImagesResponseShape', ],
        ],
        'DescribeCustomRegistryToken' => [
            'name' => 'DescribeCustomRegistryToken',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/app/{appId}:customRegistryToken',
            ],
            'input' => [ 'shape' => 'DescribeCustomRegistryTokenRequestShape', ],
            'output' => [ 'shape' => 'DescribeCustomRegistryTokenResponseShape', ],
        ],
        'Deploy' => [
            'name' => 'Deploy',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/app/{appId}/group/{groupId}/deploy',
            ],
            'input' => [ 'shape' => 'DeployRequestShape', ],
            'output' => [ 'shape' => 'DeployResponseShape', ],
        ],
        'DescribeDeployTask' => [
            'name' => 'DescribeDeployTask',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/app/{appId}/group/{groupId}/deploy/{deployId}',
            ],
            'input' => [ 'shape' => 'DescribeDeployTaskRequestShape', ],
            'output' => [ 'shape' => 'DescribeDeployTaskResponseShape', ],
        ],
        'StopDeployTask' => [
            'name' => 'StopDeployTask',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/app/{appId}/group/{groupId}/deploy/{deployId}:stop',
            ],
            'input' => [ 'shape' => 'StopDeployTaskRequestShape', ],
            'output' => [ 'shape' => 'StopDeployTaskResponseShape', ],
        ],
        'Restart' => [
            'name' => 'Restart',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/app/{appId}/group/{groupId}:restart',
            ],
            'input' => [ 'shape' => 'RestartRequestShape', ],
            'output' => [ 'shape' => 'RestartResponseShape', ],
        ],
        'Scale' => [
            'name' => 'Scale',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/app/{appId}/group/{groupId}:scale',
            ],
            'input' => [ 'shape' => 'ScaleRequestShape', ],
            'output' => [ 'shape' => 'ScaleResponseShape', ],
        ],
        'Rollback' => [
            'name' => 'Rollback',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/app/{appId}/group/{groupId}/deploy/{deployId}:rollback',
            ],
            'input' => [ 'shape' => 'RollbackRequestShape', ],
            'output' => [ 'shape' => 'RollbackResponseShape', ],
        ],
        'DescribeDeploys' => [
            'name' => 'DescribeDeploys',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/app/{appId}/group/{groupId}/deploys',
            ],
            'input' => [ 'shape' => 'DescribeDeploysRequestShape', ],
            'output' => [ 'shape' => 'DescribeDeploysResponseShape', ],
        ],
        'DescribeGroups' => [
            'name' => 'DescribeGroups',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/app/{appId}/groups',
            ],
            'input' => [ 'shape' => 'DescribeGroupsRequestShape', ],
            'output' => [ 'shape' => 'DescribeGroupsResponseShape', ],
        ],
        'DescribeGroupConfig' => [
            'name' => 'DescribeGroupConfig',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/app/{appId}/group/{groupId}',
            ],
            'input' => [ 'shape' => 'DescribeGroupConfigRequestShape', ],
            'output' => [ 'shape' => 'DescribeGroupConfigResponseShape', ],
        ],
        'UpdateBaseInfo' => [
            'name' => 'UpdateBaseInfo',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/app/{appId}/group/{groupId}:updateBaseInfo',
            ],
            'input' => [ 'shape' => 'UpdateBaseInfoRequestShape', ],
            'output' => [ 'shape' => 'UpdateBaseInfoResponseShape', ],
        ],
        'UpdateStartCmd' => [
            'name' => 'UpdateStartCmd',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/app/{appId}/group/{groupId}:updateStartCmd',
            ],
            'input' => [ 'shape' => 'UpdateStartCmdRequestShape', ],
            'output' => [ 'shape' => 'UpdateStartCmdResponseShape', ],
        ],
        'UpdateHealthCheck' => [
            'name' => 'UpdateHealthCheck',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/app/{appId}/group/{groupId}:updateHealthCheck',
            ],
            'input' => [ 'shape' => 'UpdateHealthCheckRequestShape', ],
            'output' => [ 'shape' => 'UpdateHealthCheckResponseShape', ],
        ],
        'UpdateLifeCycle' => [
            'name' => 'UpdateLifeCycle',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/app/{appId}/group/{groupId}:updateLifeCycle',
            ],
            'input' => [ 'shape' => 'UpdateLifeCycleRequestShape', ],
            'output' => [ 'shape' => 'UpdateLifeCycleResponseShape', ],
        ],
        'DescribeGroupEnvironments' => [
            'name' => 'DescribeGroupEnvironments',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/app/{appId}/group/{groupId}/environments',
            ],
            'input' => [ 'shape' => 'DescribeGroupEnvironmentsRequestShape', ],
            'output' => [ 'shape' => 'DescribeGroupEnvironmentsResponseShape', ],
        ],
        'UpdateGroupEnvironment' => [
            'name' => 'UpdateGroupEnvironment',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/app/{appId}/group/{groupId}:updateEnv',
            ],
            'input' => [ 'shape' => 'UpdateGroupEnvironmentRequestShape', ],
            'output' => [ 'shape' => 'UpdateGroupEnvironmentResponseShape', ],
        ],
        'DescribeGroupConfigFiles' => [
            'name' => 'DescribeGroupConfigFiles',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/app/{appId}/group/{groupId}/configFile',
            ],
            'input' => [ 'shape' => 'DescribeGroupConfigFilesRequestShape', ],
            'output' => [ 'shape' => 'DescribeGroupConfigFilesResponseShape', ],
        ],
        'UpdateConfigFile' => [
            'name' => 'UpdateConfigFile',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/app/{appId}/group/{groupId}:updateConfigFile',
            ],
            'input' => [ 'shape' => 'UpdateConfigFileRequestShape', ],
            'output' => [ 'shape' => 'UpdateConfigFileResponseShape', ],
        ],
        'DeleteConfigFile' => [
            'name' => 'DeleteConfigFile',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/app/{appId}/group/{groupId}:deleteConfigFile',
            ],
            'input' => [ 'shape' => 'DeleteConfigFileRequestShape', ],
            'output' => [ 'shape' => 'DeleteConfigFileResponseShape', ],
        ],
        'ContainerAntiAffinity' => [
            'name' => 'ContainerAntiAffinity',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/app/{appId}/group/{groupId}:containerAntiAffinity',
            ],
            'input' => [ 'shape' => 'ContainerAntiAffinityRequestShape', ],
            'output' => [ 'shape' => 'ContainerAntiAffinityResponseShape', ],
        ],
        'DescribePods' => [
            'name' => 'DescribePods',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/app/{appId}/group/{groupId}/pods',
            ],
            'input' => [ 'shape' => 'DescribePodsRequestShape', ],
            'output' => [ 'shape' => 'DescribePodsResponseShape', ],
        ],
        'Rebuild' => [
            'name' => 'Rebuild',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/app/{appId}/group/{groupId}/pod/{podName}:rebuild',
            ],
            'input' => [ 'shape' => 'RebuildRequestShape', ],
            'output' => [ 'shape' => 'RebuildResponseShape', ],
        ],
    ],
    'shapes' => [
        'App' => [
            'type' => 'structure',
            'members' => [
                'appId' => [ 'type' => 'string', 'locationName' => 'appId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
                'systemId' => [ 'type' => 'string', 'locationName' => 'systemId', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'updateTime' => [ 'type' => 'string', 'locationName' => 'updateTime', ],
            ],
        ],
        'BaseImage' => [
            'type' => 'structure',
            'members' => [
                'uid' => [ 'type' => 'string', 'locationName' => 'uid', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'imgDigest' => [ 'type' => 'string', 'locationName' => 'imgDigest', ],
                'imgType' => [ 'type' => 'string', 'locationName' => 'imgType', ],
                'imgSecondType' => [ 'type' => 'string', 'locationName' => 'imgSecondType', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'updateTime' => [ 'type' => 'string', 'locationName' => 'updateTime', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
            ],
        ],
        'ConfigInfo' => [
            'type' => 'structure',
            'members' => [
                'itemKey' => [ 'type' => 'string', 'locationName' => 'itemKey', ],
                'itemValue' => [ 'type' => 'string', 'locationName' => 'itemValue', ],
                'encrypted' => [ 'type' => 'boolean', 'locationName' => 'encrypted', ],
                'createdTime' => [ 'type' => 'string', 'locationName' => 'createdTime', ],
                'updatedTime' => [ 'type' => 'string', 'locationName' => 'updatedTime', ],
            ],
        ],
        'ContainerAntiAffinity' => [
            'type' => 'structure',
            'members' => [
                'open' => [ 'type' => 'boolean', 'locationName' => 'open', ],
            ],
        ],
        'Deployment' => [
            'type' => 'structure',
            'members' => [
                'concurrency' => [ 'type' => 'integer', 'locationName' => 'concurrency', ],
                'imageType' => [ 'type' => 'string', 'locationName' => 'imageType', ],
                'imageVersion' => [ 'type' => 'string', 'locationName' => 'imageVersion', ],
                'maxSurge' => [ 'type' => 'integer', 'locationName' => 'maxSurge', ],
                'podCount' => [ 'type' => 'integer', 'locationName' => 'podCount', ],
            ],
        ],
        'DeployTask' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'long', 'locationName' => 'id', ],
                'operatorType' => [ 'type' => 'string', 'locationName' => 'operatorType', ],
                'successCount' => [ 'type' => 'integer', 'locationName' => 'successCount', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'updateTime' => [ 'type' => 'string', 'locationName' => 'updateTime', ],
            ],
        ],
        'DeployTaskScale' => [
            'type' => 'structure',
            'members' => [
                'count' => [ 'type' => 'integer', 'locationName' => 'count', ],
            ],
        ],
        'Group' => [
            'type' => 'structure',
            'members' => [
                'groupId' => [ 'type' => 'string', 'locationName' => 'groupId', ],
                'appId' => [ 'type' => 'string', 'locationName' => 'appId', ],
                'groupName' => [ 'type' => 'string', 'locationName' => 'groupName', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'updateTime' => [ 'type' => 'string', 'locationName' => 'updateTime', ],
            ],
        ],
        'GroupConfig' => [
            'type' => 'structure',
            'members' => [
                'groupName' => [ 'type' => 'string', 'locationName' => 'groupName', ],
                'cpu' => [ 'type' => 'float', 'locationName' => 'cpu', ],
                'memory' => [ 'type' => 'float', 'locationName' => 'memory', ],
                'requestCpu' => [ 'type' => 'float', 'locationName' => 'requestCpu', ],
                'requestMemory' => [ 'type' => 'float', 'locationName' => 'requestMemory', ],
                'startCommand' => [ 'type' => 'string', 'locationName' => 'startCommand', ],
                'healthCheckType' => [ 'type' => 'string', 'locationName' => 'healthCheckType', ],
                'healthCheckInitialDelaySeconds' => [ 'type' => 'integer', 'locationName' => 'healthCheckInitialDelaySeconds', ],
                'healthCheckTimeoutSeconds' => [ 'type' => 'integer', 'locationName' => 'healthCheckTimeoutSeconds', ],
                'healthCheckCommand' => [ 'type' => 'string', 'locationName' => 'healthCheckCommand', ],
                'healthCheckPath' => [ 'type' => 'string', 'locationName' => 'healthCheckPath', ],
                'healthCheckPort' => [ 'type' => 'integer', 'locationName' => 'healthCheckPort', ],
                'healthCheckScheme' => [ 'type' => 'string', 'locationName' => 'healthCheckScheme', ],
                'lifecyclePostStartType' => [ 'type' => 'string', 'locationName' => 'lifecyclePostStartType', ],
                'lifecyclePostStartCommand' => [ 'type' => 'string', 'locationName' => 'lifecyclePostStartCommand', ],
                'lifecyclePostStartPath' => [ 'type' => 'string', 'locationName' => 'lifecyclePostStartPath', ],
                'lifecyclePostStartPort' => [ 'type' => 'integer', 'locationName' => 'lifecyclePostStartPort', ],
                'lifecyclePostStartScheme' => [ 'type' => 'string', 'locationName' => 'lifecyclePostStartScheme', ],
                'lifecyclePostStartHost' => [ 'type' => 'string', 'locationName' => 'lifecyclePostStartHost', ],
                'lifecyclePostStartHeader' => [ 'type' => 'map', 'key' => [ 'type' => 'string', ], 'value' => [ 'type' => 'string', ], ],
                'lifecyclePreStopType' => [ 'type' => 'string', 'locationName' => 'lifecyclePreStopType', ],
                'lifecyclePreStopCommand' => [ 'type' => 'string', 'locationName' => 'lifecyclePreStopCommand', ],
                'lifecyclePreStopPath' => [ 'type' => 'string', 'locationName' => 'lifecyclePreStopPath', ],
                'lifecyclePreStopPort' => [ 'type' => 'integer', 'locationName' => 'lifecyclePreStopPort', ],
                'lifecyclePreStopScheme' => [ 'type' => 'string', 'locationName' => 'lifecyclePreStopScheme', ],
                'lifecyclePreStopHost' => [ 'type' => 'string', 'locationName' => 'lifecyclePreStopHost', ],
                'lifecyclePreStopHeader' => [ 'type' => 'map', 'key' => [ 'type' => 'string', ], 'value' => [ 'type' => 'string', ], ],
                'readyCheckType' => [ 'type' => 'string', 'locationName' => 'readyCheckType', ],
                'readyCheckInitialDelaySeconds' => [ 'type' => 'integer', 'locationName' => 'readyCheckInitialDelaySeconds', ],
                'readyCheckTimeoutSeconds' => [ 'type' => 'integer', 'locationName' => 'readyCheckTimeoutSeconds', ],
                'readyCheckCommand' => [ 'type' => 'string', 'locationName' => 'readyCheckCommand', ],
                'readyCheckPath' => [ 'type' => 'string', 'locationName' => 'readyCheckPath', ],
                'readyCheckPort' => [ 'type' => 'integer', 'locationName' => 'readyCheckPort', ],
                'readyCheckScheme' => [ 'type' => 'string', 'locationName' => 'readyCheckScheme', ],
                'terminationGraceSeconds' => [ 'type' => 'integer', 'locationName' => 'terminationGraceSeconds', ],
            ],
        ],
        'GroupEnvConfig' => [
            'type' => 'structure',
            'members' => [
                'updateEnvItems' => [ 'type' => 'map', 'key' => [ 'type' => 'string', ], 'value' => [ 'type' => 'string', ], ],
                'deleteEnvKeys' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'GroupFileConfig' => [
            'type' => 'structure',
            'members' => [
                'fileEncrypted' => [ 'type' => 'boolean', 'locationName' => 'fileEncrypted', ],
                'fileItemKey' => [ 'type' => 'string', 'locationName' => 'fileItemKey', ],
                'fileItemValue' => [ 'type' => 'string', 'locationName' => 'fileItemValue', ],
                'deleteFilePaths' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'ImageDetail' => [
            'type' => 'structure',
            'members' => [
                'imageDigest' => [ 'type' => 'string', 'locationName' => 'imageDigest', ],
                'imagePushedAt' => [ 'type' => 'string', 'locationName' => 'imagePushedAt', ],
                'imageSizeMB' => [ 'type' => 'double', 'locationName' => 'imageSizeMB', ],
                'imageTags' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'lastPullAt' => [ 'type' => 'string', 'locationName' => 'lastPullAt', ],
                'registryName' => [ 'type' => 'string', 'locationName' => 'registryName', ],
                'repositoryName' => [ 'type' => 'string', 'locationName' => 'repositoryName', ],
                'totalPullTimes' => [ 'type' => 'integer', 'locationName' => 'totalPullTimes', ],
            ],
        ],
        'ImageRepoRecord' => [
            'type' => 'structure',
            'members' => [
                'uid' => [ 'type' => 'string', 'locationName' => 'uid', ],
                'appId' => [ 'type' => 'string', 'locationName' => 'appId', ],
                'pipelineTaskId' => [ 'type' => 'string', 'locationName' => 'pipelineTaskId', ],
                'packageId' => [ 'type' => 'long', 'locationName' => 'packageId', ],
                'packageName' => [ 'type' => 'string', 'locationName' => 'packageName', ],
                'baseImageId' => [ 'type' => 'long', 'locationName' => 'baseImageId', ],
                'baseImageName' => [ 'type' => 'string', 'locationName' => 'baseImageName', ],
                'packageVersion' => [ 'type' => 'string', 'locationName' => 'packageVersion', ],
                'version' => [ 'type' => 'string', 'locationName' => 'version', ],
                'size' => [ 'type' => 'float', 'locationName' => 'size', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'updateTime' => [ 'type' => 'string', 'locationName' => 'updateTime', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
            ],
        ],
        'PackageDetailInfo' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'integer', 'locationName' => 'id', ],
                'appId' => [ 'type' => 'string', 'locationName' => 'appId', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'env' => [ 'type' => 'string', 'locationName' => 'env', ],
                'version' => [ 'type' => 'string', 'locationName' => 'version', ],
                'desc' => [ 'type' => 'string', 'locationName' => 'desc', ],
                'url' => [ 'type' => 'string', 'locationName' => 'url', ],
                'downUrl' => [ 'type' => 'string', 'locationName' => 'downUrl', ],
                'createTime' => [ 'type' => 'integer', 'locationName' => 'createTime', ],
                'updateTime' => [ 'type' => 'integer', 'locationName' => 'updateTime', ],
                'createdBy' => [ 'type' => 'string', 'locationName' => 'createdBy', ],
                'updatedBy' => [ 'type' => 'string', 'locationName' => 'updatedBy', ],
                'tenantId' => [ 'type' => 'string', 'locationName' => 'tenantId', ],
                'securityTaskId' => [ 'type' => 'long', 'locationName' => 'securityTaskId', ],
                'securityScanResult' => [ 'type' => 'string', 'locationName' => 'securityScanResult', ],
                'reportUrl' => [ 'type' => 'string', 'locationName' => 'reportUrl', ],
                'vulCountHigh' => [ 'type' => 'long', 'locationName' => 'vulCountHigh', ],
                'vulCountMedium' => [ 'type' => 'long', 'locationName' => 'vulCountMedium', ],
                'vulCountLow' => [ 'type' => 'long', 'locationName' => 'vulCountLow', ],
            ],
        ],
        'PackageInfo' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'rawFilename' => [ 'type' => 'string', 'locationName' => 'rawFilename', ],
                'url' => [ 'type' => 'string', 'locationName' => 'url', ],
                'preSignedUrl' => [ 'type' => 'string', 'locationName' => 'preSignedUrl', ],
                'version' => [ 'type' => 'string', 'locationName' => 'version', ],
            ],
        ],
        'Pod' => [
            'type' => 'structure',
            'members' => [
                'podName' => [ 'type' => 'string', 'locationName' => 'podName', ],
                'podIp' => [ 'type' => 'string', 'locationName' => 'podIp', ],
                'hostIp' => [ 'type' => 'string', 'locationName' => 'hostIp', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
            ],
        ],
        'DescribeAppsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeAppsResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeAppsResultShape' => [
            'type' => 'structure',
            'members' => [
                'data' => [ 'type' => 'list', 'member' => [ 'shape' => 'App', ], ],
                'totalCount' => [ 'type' => 'long', 'locationName' => 'totalCount', ],
            ],
        ],
        'DescribeAppsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNum' => [ 'type' => 'integer', 'locationName' => 'pageNum', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
            ],
        ],
        'CloseAutoDeleteRepoRequestShape' => [
            'type' => 'structure',
            'members' => [
                'appId' => [ 'type' => 'string', 'locationName' => 'appId', ],
            ],
        ],
        'DescribeImageRecordsResultShape' => [
            'type' => 'structure',
            'members' => [
                'data' => [ 'type' => 'list', 'member' => [ 'shape' => 'ImageRepoRecord', ], ],
                'totalCount' => [ 'type' => 'long', 'locationName' => 'totalCount', ],
            ],
        ],
        'DeletePackageRequestShape' => [
            'type' => 'structure',
            'members' => [
                'appId' => [ 'type' => 'string', 'locationName' => 'appId', ],
                'packageId' => [ 'type' => 'long', 'locationName' => 'packageId', ],
            ],
        ],
        'DeleteImageRecordRequestShape' => [
            'type' => 'structure',
            'members' => [
                'uid' => [ 'type' => 'string', 'locationName' => 'uid', ],
            ],
        ],
        'GetPackageDownloadInfoRequestShape' => [
            'type' => 'structure',
            'members' => [
                'appId' => [ 'type' => 'string', 'locationName' => 'appId', ],
                'packageId' => [ 'type' => 'long', 'locationName' => 'packageId', ],
            ],
        ],
        'DescribeImageRecordsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'uid' => [ 'type' => 'string', 'locationName' => 'uid', ],
                'appId' => [ 'type' => 'string', 'locationName' => 'appId', ],
                'pipelineTaskId' => [ 'type' => 'string', 'locationName' => 'pipelineTaskId', ],
                'packageId' => [ 'type' => 'long', 'locationName' => 'packageId', ],
                'version' => [ 'type' => 'string', 'locationName' => 'version', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'page' => [ 'type' => 'object', 'locationName' => 'page', ],
            ],
        ],
        'DeletePackageResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DeletePackageResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeImageRecordsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeImageRecordsResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'OpenAutoDeleteRepoRequestShape' => [
            'type' => 'structure',
            'members' => [
                'limit' => [ 'type' => 'integer', 'locationName' => 'limit', ],
                'appId' => [ 'type' => 'string', 'locationName' => 'appId', ],
            ],
        ],
        'DeleteImageRecordResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DeleteImageRecordResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'LinkPackageRequest' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'version' => [ 'type' => 'string', 'locationName' => 'version', ],
                'desc' => [ 'type' => 'string', 'locationName' => 'desc', ],
                'env' => [ 'type' => 'string', 'locationName' => 'env', ],
                'url' => [ 'type' => 'string', 'locationName' => 'url', ],
            ],
        ],
        'DescribePackagesResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribePackagesResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ScanPackageResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'ScanPackageResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DeleteImageRecordResultShape' => [
            'type' => 'structure',
            'members' => [
                'success' => [ 'type' => 'boolean', 'locationName' => 'success', ],
            ],
        ],
        'GetPackageDownloadInfoResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GetPackageDownloadInfoResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeBaseImagesResultShape' => [
            'type' => 'structure',
            'members' => [
                'data' => [ 'type' => 'list', 'member' => [ 'shape' => 'BaseImage', ], ],
                'totalCount' => [ 'type' => 'long', 'locationName' => 'totalCount', ],
            ],
        ],
        'DescribeAutoDeletePolicyResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeAutoDeletePolicyResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribePackagesRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNum' => [ 'type' => 'long', 'locationName' => 'pageNum', ],
                'pageSize' => [ 'type' => 'long', 'locationName' => 'pageSize', ],
                'nameLike' => [ 'type' => 'string', 'locationName' => 'nameLike', ],
                'appId' => [ 'type' => 'string', 'locationName' => 'appId', ],
            ],
        ],
        'ImageRecordPageRequest' => [
            'type' => 'structure',
            'members' => [
                'uid' => [ 'type' => 'string', 'locationName' => 'uid', ],
                'appId' => [ 'type' => 'string', 'locationName' => 'appId', ],
                'pipelineTaskId' => [ 'type' => 'string', 'locationName' => 'pipelineTaskId', ],
                'packageId' => [ 'type' => 'long', 'locationName' => 'packageId', ],
                'version' => [ 'type' => 'string', 'locationName' => 'version', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'page' => [ 'type' => 'object', 'locationName' => 'page', ],
            ],
        ],
        'DescribeAutoDeletePolicyResultShape' => [
            'type' => 'structure',
            'members' => [
                'quota' => [ 'type' => 'integer', 'locationName' => 'quota', ],
                'extraRetainCount' => [ 'type' => 'integer', 'locationName' => 'extraRetainCount', ],
                'autoDelete' => [ 'type' => 'string', 'locationName' => 'autoDelete', ],
                'autoDeleteLatestDate' => [ 'type' => 'string', 'locationName' => 'autoDeleteLatestDate', ],
            ],
        ],
        'CloseAutoDeleteRepoResultShape' => [
            'type' => 'structure',
            'members' => [
                'success' => [ 'type' => 'boolean', 'locationName' => 'success', ],
            ],
        ],
        'GenerateUploadUrlResultShape' => [
            'type' => 'structure',
            'members' => [
                'presignedPutUrl' => [ 'type' => 'string', 'locationName' => 'presignedPutUrl', ],
                'finalUrl' => [ 'type' => 'string', 'locationName' => 'finalUrl', ],
                'objectName' => [ 'type' => 'string', 'locationName' => 'objectName', ],
            ],
        ],
        'ScanPackageResultShape' => [
            'type' => 'structure',
            'members' => [
                'success' => [ 'type' => 'boolean', 'locationName' => 'success', ],
            ],
        ],
        'GenerateUploadUrlResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GenerateUploadUrlResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'LinkPackageResultShape' => [
            'type' => 'structure',
            'members' => [
                'value' => [ 'type' => 'long', 'locationName' => 'value', ],
            ],
        ],
        'DescribeBaseImagesRequestShape' => [
            'type' => 'structure',
            'members' => [
                'imageType' => [ 'type' => 'string', 'locationName' => 'imageType', ],
            ],
        ],
        'ScanPackageRequestShape' => [
            'type' => 'structure',
            'members' => [
                'appId' => [ 'type' => 'string', 'locationName' => 'appId', ],
                'packageId' => [ 'type' => 'long', 'locationName' => 'packageId', ],
            ],
        ],
        'GetPackageDownloadInfoResultShape' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'rawFilename' => [ 'type' => 'string', 'locationName' => 'rawFilename', ],
                'url' => [ 'type' => 'string', 'locationName' => 'url', ],
                'preSignedUrl' => [ 'type' => 'string', 'locationName' => 'preSignedUrl', ],
                'version' => [ 'type' => 'string', 'locationName' => 'version', ],
            ],
        ],
        'DescribeBaseImagesResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeBaseImagesResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'OpenAutoDeleteRepoResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'OpenAutoDeleteRepoResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'GenerateUploadUrlRequestShape' => [
            'type' => 'structure',
            'members' => [
                'fileName' => [ 'type' => 'string', 'locationName' => 'fileName', ],
                'appId' => [ 'type' => 'string', 'locationName' => 'appId', ],
            ],
        ],
        'LinkPackageRequestShape' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'version' => [ 'type' => 'string', 'locationName' => 'version', ],
                'desc' => [ 'type' => 'string', 'locationName' => 'desc', ],
                'env' => [ 'type' => 'string', 'locationName' => 'env', ],
                'url' => [ 'type' => 'string', 'locationName' => 'url', ],
                'appId' => [ 'type' => 'string', 'locationName' => 'appId', ],
            ],
        ],
        'LinkPackageResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'LinkPackageResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeAutoDeletePolicyRequestShape' => [
            'type' => 'structure',
            'members' => [
                'appId' => [ 'type' => 'string', 'locationName' => 'appId', ],
            ],
        ],
        'OpenAutoDeleteRepoResultShape' => [
            'type' => 'structure',
            'members' => [
                'success' => [ 'type' => 'boolean', 'locationName' => 'success', ],
            ],
        ],
        'DescribePackagesResultShape' => [
            'type' => 'structure',
            'members' => [
                'data' => [ 'type' => 'list', 'member' => [ 'shape' => 'PackageDetailInfo', ], ],
                'totalCount' => [ 'type' => 'long', 'locationName' => 'totalCount', ],
            ],
        ],
        'CreatePipelineTaskResultShape' => [
            'type' => 'structure',
            'members' => [
                'value' => [ 'type' => 'string', 'locationName' => 'value', ],
            ],
        ],
        'PipelineTaskRequest' => [
            'type' => 'structure',
            'members' => [
                'appId' => [ 'type' => 'string', 'locationName' => 'appId', ],
                'baseImageUid' => [ 'type' => 'string', 'locationName' => 'baseImageUid', ],
                'packageId' => [ 'type' => 'long', 'locationName' => 'packageId', ],
                'args' => [ 'type' => 'string', 'locationName' => 'args', ],
            ],
        ],
        'CreatePipelineTaskRequestShape' => [
            'type' => 'structure',
            'members' => [
                'appId' => [ 'type' => 'string', 'locationName' => 'appId', ],
                'baseImageUid' => [ 'type' => 'string', 'locationName' => 'baseImageUid', ],
                'packageId' => [ 'type' => 'long', 'locationName' => 'packageId', ],
                'args' => [ 'type' => 'string', 'locationName' => 'args', ],
            ],
        ],
        'CloseAutoDeleteRepoResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'CloseAutoDeleteRepoResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DeletePackageResultShape' => [
            'type' => 'structure',
            'members' => [
                'success' => [ 'type' => 'boolean', 'locationName' => 'success', ],
            ],
        ],
        'CreatePipelineTaskResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'CreatePipelineTaskResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DeleteCustomImageResultShape' => [
            'type' => 'structure',
            'members' => [
                'success' => [ 'type' => 'boolean', 'locationName' => 'success', ],
            ],
        ],
        'DescribeCustomImagesResultShape' => [
            'type' => 'structure',
            'members' => [
                'imageDetails' => [ 'type' => 'list', 'member' => [ 'shape' => 'ImageDetail', ], ],
                'repoUri' => [ 'type' => 'string', 'locationName' => 'repoUri', ],
                'totalCount' => [ 'type' => 'long', 'locationName' => 'totalCount', ],
            ],
        ],
        'DeleteCustomImageRequestShape' => [
            'type' => 'structure',
            'members' => [
                'appId' => [ 'type' => 'string', 'locationName' => 'appId', ],
                'imageDigest' => [ 'type' => 'string', 'locationName' => 'imageDigest', ],
            ],
        ],
        'DeleteCustomImageResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DeleteCustomImageResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeCustomImagesRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNum' => [ 'type' => 'integer', 'locationName' => 'pageNum', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'version' => [ 'type' => 'string', 'locationName' => 'version', ],
                'appId' => [ 'type' => 'string', 'locationName' => 'appId', ],
            ],
        ],
        'DescribeCustomImagesResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeCustomImagesResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeCustomRegistryTokenResultShape' => [
            'type' => 'structure',
            'members' => [
                'authorizationToken' => [ 'type' => 'string', 'locationName' => 'authorizationToken', ],
                'expiresAt' => [ 'type' => 'string', 'locationName' => 'expiresAt', ],
                'loginCmdLine' => [ 'type' => 'string', 'locationName' => 'loginCmdLine', ],
                'registryUri' => [ 'type' => 'string', 'locationName' => 'registryUri', ],
                'username' => [ 'type' => 'string', 'locationName' => 'username', ],
            ],
        ],
        'DescribeCustomRegistryTokenRequestShape' => [
            'type' => 'structure',
            'members' => [
                'renew' => [ 'type' => 'boolean', 'locationName' => 'renew', ],
                'appId' => [ 'type' => 'string', 'locationName' => 'appId', ],
            ],
        ],
        'DescribeCustomRegistryTokenResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'DescribeCustomRegistryTokenResultShape', ],
            ],
        ],
        'DescribeDeployTaskResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeDeployTaskResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeDeployTaskRequestShape' => [
            'type' => 'structure',
            'members' => [
                'appId' => [ 'type' => 'string', 'locationName' => 'appId', ],
                'deployId' => [ 'type' => 'long', 'locationName' => 'deployId', ],
                'groupId' => [ 'type' => 'string', 'locationName' => 'groupId', ],
            ],
        ],
        'RestartResultShape' => [
            'type' => 'structure',
            'members' => [
                'success' => [ 'type' => 'boolean', 'locationName' => 'success', ],
            ],
        ],
        'DescribeDeploysResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeDeploysResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'RestartRequestShape' => [
            'type' => 'structure',
            'members' => [
                'appId' => [ 'type' => 'string', 'locationName' => 'appId', ],
                'groupId' => [ 'type' => 'string', 'locationName' => 'groupId', ],
            ],
        ],
        'DescribeDeploysResultShape' => [
            'type' => 'structure',
            'members' => [
                'data' => [ 'type' => 'list', 'member' => [ 'shape' => 'DeployTask', ], ],
                'totalCount' => [ 'type' => 'long', 'locationName' => 'totalCount', ],
            ],
        ],
        'DeployResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DeployResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'RestartResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'RestartResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DeployResultShape' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'long', 'locationName' => 'id', ],
                'log' => [ 'type' => 'string', 'locationName' => 'log', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'successCount' => [ 'type' => 'integer', 'locationName' => 'successCount', ],
            ],
        ],
        'StopDeployTaskResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'StopDeployTaskResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeDeploysRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNum' => [ 'type' => 'integer', 'locationName' => 'pageNum', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'appId' => [ 'type' => 'string', 'locationName' => 'appId', ],
                'groupId' => [ 'type' => 'string', 'locationName' => 'groupId', ],
            ],
        ],
        'DeployRequestShape' => [
            'type' => 'structure',
            'members' => [
                'concurrency' => [ 'type' => 'integer', 'locationName' => 'concurrency', ],
                'imageType' => [ 'type' => 'string', 'locationName' => 'imageType', ],
                'imageVersion' => [ 'type' => 'string', 'locationName' => 'imageVersion', ],
                'maxSurge' => [ 'type' => 'integer', 'locationName' => 'maxSurge', ],
                'podCount' => [ 'type' => 'integer', 'locationName' => 'podCount', ],
                'appId' => [ 'type' => 'string', 'locationName' => 'appId', ],
                'groupId' => [ 'type' => 'string', 'locationName' => 'groupId', ],
            ],
        ],
        'RollbackResultShape' => [
            'type' => 'structure',
            'members' => [
                'success' => [ 'type' => 'boolean', 'locationName' => 'success', ],
            ],
        ],
        'StopDeployTaskRequestShape' => [
            'type' => 'structure',
            'members' => [
                'appId' => [ 'type' => 'string', 'locationName' => 'appId', ],
                'groupId' => [ 'type' => 'string', 'locationName' => 'groupId', ],
                'deployId' => [ 'type' => 'long', 'locationName' => 'deployId', ],
            ],
        ],
        'DescribeDeployTaskResultShape' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'long', 'locationName' => 'id', ],
                'log' => [ 'type' => 'string', 'locationName' => 'log', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'successCount' => [ 'type' => 'integer', 'locationName' => 'successCount', ],
            ],
        ],
        'RollbackResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'RollbackResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'StopDeployTaskResultShape' => [
            'type' => 'structure',
            'members' => [
                'success' => [ 'type' => 'boolean', 'locationName' => 'success', ],
            ],
        ],
        'ScaleResultShape' => [
            'type' => 'structure',
            'members' => [
                'success' => [ 'type' => 'boolean', 'locationName' => 'success', ],
            ],
        ],
        'RollbackRequestShape' => [
            'type' => 'structure',
            'members' => [
                'appId' => [ 'type' => 'string', 'locationName' => 'appId', ],
                'groupId' => [ 'type' => 'string', 'locationName' => 'groupId', ],
                'deployId' => [ 'type' => 'long', 'locationName' => 'deployId', ],
            ],
        ],
        'ScaleRequestShape' => [
            'type' => 'structure',
            'members' => [
                'count' => [ 'type' => 'integer', 'locationName' => 'count', ],
                'appId' => [ 'type' => 'string', 'locationName' => 'appId', ],
                'groupId' => [ 'type' => 'string', 'locationName' => 'groupId', ],
            ],
        ],
        'ScaleResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'ScaleResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeGroupsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeGroupsResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DeleteConfigFileRequestShape' => [
            'type' => 'structure',
            'members' => [
                'fileEncrypted' => [ 'type' => 'boolean', 'locationName' => 'fileEncrypted', ],
                'fileItemKey' => [ 'type' => 'string', 'locationName' => 'fileItemKey', ],
                'fileItemValue' => [ 'type' => 'string', 'locationName' => 'fileItemValue', ],
                'deleteFilePaths' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'appId' => [ 'type' => 'string', 'locationName' => 'appId', ],
                'groupId' => [ 'type' => 'string', 'locationName' => 'groupId', ],
            ],
        ],
        'DeleteConfigFileResultShape' => [
            'type' => 'structure',
            'members' => [
                'success' => [ 'type' => 'boolean', 'locationName' => 'success', ],
            ],
        ],
        'UpdateLifeCycleResultShape' => [
            'type' => 'structure',
            'members' => [
                'success' => [ 'type' => 'boolean', 'locationName' => 'success', ],
            ],
        ],
        'UpdateGroupEnvironmentResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'UpdateGroupEnvironmentResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'UpdateHealthCheckResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'UpdateHealthCheckResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'UpdateConfigFileResultShape' => [
            'type' => 'structure',
            'members' => [
                'success' => [ 'type' => 'boolean', 'locationName' => 'success', ],
            ],
        ],
        'UpdateConfigFileRequestShape' => [
            'type' => 'structure',
            'members' => [
                'fileEncrypted' => [ 'type' => 'boolean', 'locationName' => 'fileEncrypted', ],
                'fileItemKey' => [ 'type' => 'string', 'locationName' => 'fileItemKey', ],
                'fileItemValue' => [ 'type' => 'string', 'locationName' => 'fileItemValue', ],
                'deleteFilePaths' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'appId' => [ 'type' => 'string', 'locationName' => 'appId', ],
                'groupId' => [ 'type' => 'string', 'locationName' => 'groupId', ],
            ],
        ],
        'DeleteConfigFileResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DeleteConfigFileResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeGroupConfigRequestShape' => [
            'type' => 'structure',
            'members' => [
                'appId' => [ 'type' => 'string', 'locationName' => 'appId', ],
                'groupId' => [ 'type' => 'string', 'locationName' => 'groupId', ],
            ],
        ],
        'UpdateLifeCycleRequestShape' => [
            'type' => 'structure',
            'members' => [
                'groupName' => [ 'type' => 'string', 'locationName' => 'groupName', ],
                'cpu' => [ 'type' => 'float', 'locationName' => 'cpu', ],
                'memory' => [ 'type' => 'float', 'locationName' => 'memory', ],
                'requestCpu' => [ 'type' => 'float', 'locationName' => 'requestCpu', ],
                'requestMemory' => [ 'type' => 'float', 'locationName' => 'requestMemory', ],
                'startCommand' => [ 'type' => 'string', 'locationName' => 'startCommand', ],
                'healthCheckType' => [ 'type' => 'string', 'locationName' => 'healthCheckType', ],
                'healthCheckInitialDelaySeconds' => [ 'type' => 'integer', 'locationName' => 'healthCheckInitialDelaySeconds', ],
                'healthCheckTimeoutSeconds' => [ 'type' => 'integer', 'locationName' => 'healthCheckTimeoutSeconds', ],
                'healthCheckCommand' => [ 'type' => 'string', 'locationName' => 'healthCheckCommand', ],
                'healthCheckPath' => [ 'type' => 'string', 'locationName' => 'healthCheckPath', ],
                'healthCheckPort' => [ 'type' => 'integer', 'locationName' => 'healthCheckPort', ],
                'healthCheckScheme' => [ 'type' => 'string', 'locationName' => 'healthCheckScheme', ],
                'lifecyclePostStartType' => [ 'type' => 'string', 'locationName' => 'lifecyclePostStartType', ],
                'lifecyclePostStartCommand' => [ 'type' => 'string', 'locationName' => 'lifecyclePostStartCommand', ],
                'lifecyclePostStartPath' => [ 'type' => 'string', 'locationName' => 'lifecyclePostStartPath', ],
                'lifecyclePostStartPort' => [ 'type' => 'integer', 'locationName' => 'lifecyclePostStartPort', ],
                'lifecyclePostStartScheme' => [ 'type' => 'string', 'locationName' => 'lifecyclePostStartScheme', ],
                'lifecyclePostStartHost' => [ 'type' => 'string', 'locationName' => 'lifecyclePostStartHost', ],
                'lifecyclePostStartHeader' => [ 'type' => 'map', 'key' => [ 'type' => 'string', ], 'value' => [ 'type' => 'string', ], ],
                'lifecyclePreStopType' => [ 'type' => 'string', 'locationName' => 'lifecyclePreStopType', ],
                'lifecyclePreStopCommand' => [ 'type' => 'string', 'locationName' => 'lifecyclePreStopCommand', ],
                'lifecyclePreStopPath' => [ 'type' => 'string', 'locationName' => 'lifecyclePreStopPath', ],
                'lifecyclePreStopPort' => [ 'type' => 'integer', 'locationName' => 'lifecyclePreStopPort', ],
                'lifecyclePreStopScheme' => [ 'type' => 'string', 'locationName' => 'lifecyclePreStopScheme', ],
                'lifecyclePreStopHost' => [ 'type' => 'string', 'locationName' => 'lifecyclePreStopHost', ],
                'lifecyclePreStopHeader' => [ 'type' => 'map', 'key' => [ 'type' => 'string', ], 'value' => [ 'type' => 'string', ], ],
                'readyCheckType' => [ 'type' => 'string', 'locationName' => 'readyCheckType', ],
                'readyCheckInitialDelaySeconds' => [ 'type' => 'integer', 'locationName' => 'readyCheckInitialDelaySeconds', ],
                'readyCheckTimeoutSeconds' => [ 'type' => 'integer', 'locationName' => 'readyCheckTimeoutSeconds', ],
                'readyCheckCommand' => [ 'type' => 'string', 'locationName' => 'readyCheckCommand', ],
                'readyCheckPath' => [ 'type' => 'string', 'locationName' => 'readyCheckPath', ],
                'readyCheckPort' => [ 'type' => 'integer', 'locationName' => 'readyCheckPort', ],
                'readyCheckScheme' => [ 'type' => 'string', 'locationName' => 'readyCheckScheme', ],
                'terminationGraceSeconds' => [ 'type' => 'integer', 'locationName' => 'terminationGraceSeconds', ],
                'appId' => [ 'type' => 'string', 'locationName' => 'appId', ],
                'groupId' => [ 'type' => 'string', 'locationName' => 'groupId', ],
            ],
        ],
        'DescribeGroupsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNum' => [ 'type' => 'integer', 'locationName' => 'pageNum', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'appId' => [ 'type' => 'string', 'locationName' => 'appId', ],
            ],
        ],
        'UpdateBaseInfoResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'UpdateBaseInfoResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'UpdateGroupEnvironmentResultShape' => [
            'type' => 'structure',
            'members' => [
                'success' => [ 'type' => 'boolean', 'locationName' => 'success', ],
            ],
        ],
        'UpdateStartCmdResultShape' => [
            'type' => 'structure',
            'members' => [
                'success' => [ 'type' => 'boolean', 'locationName' => 'success', ],
            ],
        ],
        'DescribeGroupEnvironmentsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeGroupEnvironmentsResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'UpdateConfigFileResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'UpdateConfigFileResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ContainerAntiAffinityResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'ContainerAntiAffinityResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeGroupEnvironmentsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'appId' => [ 'type' => 'string', 'locationName' => 'appId', ],
                'groupId' => [ 'type' => 'string', 'locationName' => 'groupId', ],
            ],
        ],
        'UpdateBaseInfoResultShape' => [
            'type' => 'structure',
            'members' => [
                'success' => [ 'type' => 'boolean', 'locationName' => 'success', ],
            ],
        ],
        'UpdateStartCmdResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'UpdateStartCmdResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'UpdateLifeCycleResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'UpdateLifeCycleResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ContainerAntiAffinityRequestShape' => [
            'type' => 'structure',
            'members' => [
                'open' => [ 'type' => 'boolean', 'locationName' => 'open', ],
                'appId' => [ 'type' => 'string', 'locationName' => 'appId', ],
                'groupId' => [ 'type' => 'string', 'locationName' => 'groupId', ],
            ],
        ],
        'DescribeGroupsResultShape' => [
            'type' => 'structure',
            'members' => [
                'data' => [ 'type' => 'list', 'member' => [ 'shape' => 'Group', ], ],
                'totalCount' => [ 'type' => 'long', 'locationName' => 'totalCount', ],
            ],
        ],
        'UpdateHealthCheckRequestShape' => [
            'type' => 'structure',
            'members' => [
                'groupName' => [ 'type' => 'string', 'locationName' => 'groupName', ],
                'cpu' => [ 'type' => 'float', 'locationName' => 'cpu', ],
                'memory' => [ 'type' => 'float', 'locationName' => 'memory', ],
                'requestCpu' => [ 'type' => 'float', 'locationName' => 'requestCpu', ],
                'requestMemory' => [ 'type' => 'float', 'locationName' => 'requestMemory', ],
                'startCommand' => [ 'type' => 'string', 'locationName' => 'startCommand', ],
                'healthCheckType' => [ 'type' => 'string', 'locationName' => 'healthCheckType', ],
                'healthCheckInitialDelaySeconds' => [ 'type' => 'integer', 'locationName' => 'healthCheckInitialDelaySeconds', ],
                'healthCheckTimeoutSeconds' => [ 'type' => 'integer', 'locationName' => 'healthCheckTimeoutSeconds', ],
                'healthCheckCommand' => [ 'type' => 'string', 'locationName' => 'healthCheckCommand', ],
                'healthCheckPath' => [ 'type' => 'string', 'locationName' => 'healthCheckPath', ],
                'healthCheckPort' => [ 'type' => 'integer', 'locationName' => 'healthCheckPort', ],
                'healthCheckScheme' => [ 'type' => 'string', 'locationName' => 'healthCheckScheme', ],
                'lifecyclePostStartType' => [ 'type' => 'string', 'locationName' => 'lifecyclePostStartType', ],
                'lifecyclePostStartCommand' => [ 'type' => 'string', 'locationName' => 'lifecyclePostStartCommand', ],
                'lifecyclePostStartPath' => [ 'type' => 'string', 'locationName' => 'lifecyclePostStartPath', ],
                'lifecyclePostStartPort' => [ 'type' => 'integer', 'locationName' => 'lifecyclePostStartPort', ],
                'lifecyclePostStartScheme' => [ 'type' => 'string', 'locationName' => 'lifecyclePostStartScheme', ],
                'lifecyclePostStartHost' => [ 'type' => 'string', 'locationName' => 'lifecyclePostStartHost', ],
                'lifecyclePostStartHeader' => [ 'type' => 'map', 'key' => [ 'type' => 'string', ], 'value' => [ 'type' => 'string', ], ],
                'lifecyclePreStopType' => [ 'type' => 'string', 'locationName' => 'lifecyclePreStopType', ],
                'lifecyclePreStopCommand' => [ 'type' => 'string', 'locationName' => 'lifecyclePreStopCommand', ],
                'lifecyclePreStopPath' => [ 'type' => 'string', 'locationName' => 'lifecyclePreStopPath', ],
                'lifecyclePreStopPort' => [ 'type' => 'integer', 'locationName' => 'lifecyclePreStopPort', ],
                'lifecyclePreStopScheme' => [ 'type' => 'string', 'locationName' => 'lifecyclePreStopScheme', ],
                'lifecyclePreStopHost' => [ 'type' => 'string', 'locationName' => 'lifecyclePreStopHost', ],
                'lifecyclePreStopHeader' => [ 'type' => 'map', 'key' => [ 'type' => 'string', ], 'value' => [ 'type' => 'string', ], ],
                'readyCheckType' => [ 'type' => 'string', 'locationName' => 'readyCheckType', ],
                'readyCheckInitialDelaySeconds' => [ 'type' => 'integer', 'locationName' => 'readyCheckInitialDelaySeconds', ],
                'readyCheckTimeoutSeconds' => [ 'type' => 'integer', 'locationName' => 'readyCheckTimeoutSeconds', ],
                'readyCheckCommand' => [ 'type' => 'string', 'locationName' => 'readyCheckCommand', ],
                'readyCheckPath' => [ 'type' => 'string', 'locationName' => 'readyCheckPath', ],
                'readyCheckPort' => [ 'type' => 'integer', 'locationName' => 'readyCheckPort', ],
                'readyCheckScheme' => [ 'type' => 'string', 'locationName' => 'readyCheckScheme', ],
                'terminationGraceSeconds' => [ 'type' => 'integer', 'locationName' => 'terminationGraceSeconds', ],
                'appId' => [ 'type' => 'string', 'locationName' => 'appId', ],
                'groupId' => [ 'type' => 'string', 'locationName' => 'groupId', ],
            ],
        ],
        'DescribeGroupConfigFilesResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeGroupConfigFilesResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'UpdateBaseInfoRequestShape' => [
            'type' => 'structure',
            'members' => [
                'groupName' => [ 'type' => 'string', 'locationName' => 'groupName', ],
                'cpu' => [ 'type' => 'float', 'locationName' => 'cpu', ],
                'memory' => [ 'type' => 'float', 'locationName' => 'memory', ],
                'requestCpu' => [ 'type' => 'float', 'locationName' => 'requestCpu', ],
                'requestMemory' => [ 'type' => 'float', 'locationName' => 'requestMemory', ],
                'startCommand' => [ 'type' => 'string', 'locationName' => 'startCommand', ],
                'healthCheckType' => [ 'type' => 'string', 'locationName' => 'healthCheckType', ],
                'healthCheckInitialDelaySeconds' => [ 'type' => 'integer', 'locationName' => 'healthCheckInitialDelaySeconds', ],
                'healthCheckTimeoutSeconds' => [ 'type' => 'integer', 'locationName' => 'healthCheckTimeoutSeconds', ],
                'healthCheckCommand' => [ 'type' => 'string', 'locationName' => 'healthCheckCommand', ],
                'healthCheckPath' => [ 'type' => 'string', 'locationName' => 'healthCheckPath', ],
                'healthCheckPort' => [ 'type' => 'integer', 'locationName' => 'healthCheckPort', ],
                'healthCheckScheme' => [ 'type' => 'string', 'locationName' => 'healthCheckScheme', ],
                'lifecyclePostStartType' => [ 'type' => 'string', 'locationName' => 'lifecyclePostStartType', ],
                'lifecyclePostStartCommand' => [ 'type' => 'string', 'locationName' => 'lifecyclePostStartCommand', ],
                'lifecyclePostStartPath' => [ 'type' => 'string', 'locationName' => 'lifecyclePostStartPath', ],
                'lifecyclePostStartPort' => [ 'type' => 'integer', 'locationName' => 'lifecyclePostStartPort', ],
                'lifecyclePostStartScheme' => [ 'type' => 'string', 'locationName' => 'lifecyclePostStartScheme', ],
                'lifecyclePostStartHost' => [ 'type' => 'string', 'locationName' => 'lifecyclePostStartHost', ],
                'lifecyclePostStartHeader' => [ 'type' => 'map', 'key' => [ 'type' => 'string', ], 'value' => [ 'type' => 'string', ], ],
                'lifecyclePreStopType' => [ 'type' => 'string', 'locationName' => 'lifecyclePreStopType', ],
                'lifecyclePreStopCommand' => [ 'type' => 'string', 'locationName' => 'lifecyclePreStopCommand', ],
                'lifecyclePreStopPath' => [ 'type' => 'string', 'locationName' => 'lifecyclePreStopPath', ],
                'lifecyclePreStopPort' => [ 'type' => 'integer', 'locationName' => 'lifecyclePreStopPort', ],
                'lifecyclePreStopScheme' => [ 'type' => 'string', 'locationName' => 'lifecyclePreStopScheme', ],
                'lifecyclePreStopHost' => [ 'type' => 'string', 'locationName' => 'lifecyclePreStopHost', ],
                'lifecyclePreStopHeader' => [ 'type' => 'map', 'key' => [ 'type' => 'string', ], 'value' => [ 'type' => 'string', ], ],
                'readyCheckType' => [ 'type' => 'string', 'locationName' => 'readyCheckType', ],
                'readyCheckInitialDelaySeconds' => [ 'type' => 'integer', 'locationName' => 'readyCheckInitialDelaySeconds', ],
                'readyCheckTimeoutSeconds' => [ 'type' => 'integer', 'locationName' => 'readyCheckTimeoutSeconds', ],
                'readyCheckCommand' => [ 'type' => 'string', 'locationName' => 'readyCheckCommand', ],
                'readyCheckPath' => [ 'type' => 'string', 'locationName' => 'readyCheckPath', ],
                'readyCheckPort' => [ 'type' => 'integer', 'locationName' => 'readyCheckPort', ],
                'readyCheckScheme' => [ 'type' => 'string', 'locationName' => 'readyCheckScheme', ],
                'terminationGraceSeconds' => [ 'type' => 'integer', 'locationName' => 'terminationGraceSeconds', ],
                'appId' => [ 'type' => 'string', 'locationName' => 'appId', ],
                'groupId' => [ 'type' => 'string', 'locationName' => 'groupId', ],
            ],
        ],
        'DescribeGroupConfigFilesRequestShape' => [
            'type' => 'structure',
            'members' => [
                'appId' => [ 'type' => 'string', 'locationName' => 'appId', ],
                'groupId' => [ 'type' => 'string', 'locationName' => 'groupId', ],
            ],
        ],
        'DescribeGroupConfigResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeGroupConfigResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeGroupConfigFilesResultShape' => [
            'type' => 'structure',
            'members' => [
                'data' => [ 'type' => 'list', 'member' => [ 'shape' => 'ConfigInfo', ], ],
                'totalCount' => [ 'type' => 'long', 'locationName' => 'totalCount', ],
            ],
        ],
        'UpdateHealthCheckResultShape' => [
            'type' => 'structure',
            'members' => [
                'success' => [ 'type' => 'boolean', 'locationName' => 'success', ],
            ],
        ],
        'DescribeGroupConfigResultShape' => [
            'type' => 'structure',
            'members' => [
                'groupName' => [ 'type' => 'string', 'locationName' => 'groupName', ],
                'cpu' => [ 'type' => 'float', 'locationName' => 'cpu', ],
                'memory' => [ 'type' => 'float', 'locationName' => 'memory', ],
                'requestCpu' => [ 'type' => 'float', 'locationName' => 'requestCpu', ],
                'requestMemory' => [ 'type' => 'float', 'locationName' => 'requestMemory', ],
                'startCommand' => [ 'type' => 'string', 'locationName' => 'startCommand', ],
                'healthCheckType' => [ 'type' => 'string', 'locationName' => 'healthCheckType', ],
                'healthCheckInitialDelaySeconds' => [ 'type' => 'integer', 'locationName' => 'healthCheckInitialDelaySeconds', ],
                'healthCheckTimeoutSeconds' => [ 'type' => 'integer', 'locationName' => 'healthCheckTimeoutSeconds', ],
                'healthCheckCommand' => [ 'type' => 'string', 'locationName' => 'healthCheckCommand', ],
                'healthCheckPath' => [ 'type' => 'string', 'locationName' => 'healthCheckPath', ],
                'healthCheckPort' => [ 'type' => 'integer', 'locationName' => 'healthCheckPort', ],
                'healthCheckScheme' => [ 'type' => 'string', 'locationName' => 'healthCheckScheme', ],
                'lifecyclePostStartType' => [ 'type' => 'string', 'locationName' => 'lifecyclePostStartType', ],
                'lifecyclePostStartCommand' => [ 'type' => 'string', 'locationName' => 'lifecyclePostStartCommand', ],
                'lifecyclePostStartPath' => [ 'type' => 'string', 'locationName' => 'lifecyclePostStartPath', ],
                'lifecyclePostStartPort' => [ 'type' => 'integer', 'locationName' => 'lifecyclePostStartPort', ],
                'lifecyclePostStartScheme' => [ 'type' => 'string', 'locationName' => 'lifecyclePostStartScheme', ],
                'lifecyclePostStartHost' => [ 'type' => 'string', 'locationName' => 'lifecyclePostStartHost', ],
                'lifecyclePostStartHeader' => [ 'type' => 'map', 'key' => [ 'type' => 'string', ], 'value' => [ 'type' => 'string', ], ],
                'lifecyclePreStopType' => [ 'type' => 'string', 'locationName' => 'lifecyclePreStopType', ],
                'lifecyclePreStopCommand' => [ 'type' => 'string', 'locationName' => 'lifecyclePreStopCommand', ],
                'lifecyclePreStopPath' => [ 'type' => 'string', 'locationName' => 'lifecyclePreStopPath', ],
                'lifecyclePreStopPort' => [ 'type' => 'integer', 'locationName' => 'lifecyclePreStopPort', ],
                'lifecyclePreStopScheme' => [ 'type' => 'string', 'locationName' => 'lifecyclePreStopScheme', ],
                'lifecyclePreStopHost' => [ 'type' => 'string', 'locationName' => 'lifecyclePreStopHost', ],
                'lifecyclePreStopHeader' => [ 'type' => 'map', 'key' => [ 'type' => 'string', ], 'value' => [ 'type' => 'string', ], ],
                'readyCheckType' => [ 'type' => 'string', 'locationName' => 'readyCheckType', ],
                'readyCheckInitialDelaySeconds' => [ 'type' => 'integer', 'locationName' => 'readyCheckInitialDelaySeconds', ],
                'readyCheckTimeoutSeconds' => [ 'type' => 'integer', 'locationName' => 'readyCheckTimeoutSeconds', ],
                'readyCheckCommand' => [ 'type' => 'string', 'locationName' => 'readyCheckCommand', ],
                'readyCheckPath' => [ 'type' => 'string', 'locationName' => 'readyCheckPath', ],
                'readyCheckPort' => [ 'type' => 'integer', 'locationName' => 'readyCheckPort', ],
                'readyCheckScheme' => [ 'type' => 'string', 'locationName' => 'readyCheckScheme', ],
                'terminationGraceSeconds' => [ 'type' => 'integer', 'locationName' => 'terminationGraceSeconds', ],
            ],
        ],
        'DescribeGroupEnvironmentsResultShape' => [
            'type' => 'structure',
            'members' => [
                'data' => [ 'type' => 'list', 'member' => [ 'shape' => 'ConfigInfo', ], ],
                'totalCount' => [ 'type' => 'long', 'locationName' => 'totalCount', ],
            ],
        ],
        'UpdateGroupEnvironmentRequestShape' => [
            'type' => 'structure',
            'members' => [
                'updateEnvItems' => [ 'type' => 'map', 'key' => [ 'type' => 'string', ], 'value' => [ 'type' => 'string', ], ],
                'deleteEnvKeys' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'appId' => [ 'type' => 'string', 'locationName' => 'appId', ],
                'groupId' => [ 'type' => 'string', 'locationName' => 'groupId', ],
            ],
        ],
        'ContainerAntiAffinityResultShape' => [
            'type' => 'structure',
            'members' => [
                'success' => [ 'type' => 'boolean', 'locationName' => 'success', ],
            ],
        ],
        'UpdateStartCmdRequestShape' => [
            'type' => 'structure',
            'members' => [
                'groupName' => [ 'type' => 'string', 'locationName' => 'groupName', ],
                'cpu' => [ 'type' => 'float', 'locationName' => 'cpu', ],
                'memory' => [ 'type' => 'float', 'locationName' => 'memory', ],
                'requestCpu' => [ 'type' => 'float', 'locationName' => 'requestCpu', ],
                'requestMemory' => [ 'type' => 'float', 'locationName' => 'requestMemory', ],
                'startCommand' => [ 'type' => 'string', 'locationName' => 'startCommand', ],
                'healthCheckType' => [ 'type' => 'string', 'locationName' => 'healthCheckType', ],
                'healthCheckInitialDelaySeconds' => [ 'type' => 'integer', 'locationName' => 'healthCheckInitialDelaySeconds', ],
                'healthCheckTimeoutSeconds' => [ 'type' => 'integer', 'locationName' => 'healthCheckTimeoutSeconds', ],
                'healthCheckCommand' => [ 'type' => 'string', 'locationName' => 'healthCheckCommand', ],
                'healthCheckPath' => [ 'type' => 'string', 'locationName' => 'healthCheckPath', ],
                'healthCheckPort' => [ 'type' => 'integer', 'locationName' => 'healthCheckPort', ],
                'healthCheckScheme' => [ 'type' => 'string', 'locationName' => 'healthCheckScheme', ],
                'lifecyclePostStartType' => [ 'type' => 'string', 'locationName' => 'lifecyclePostStartType', ],
                'lifecyclePostStartCommand' => [ 'type' => 'string', 'locationName' => 'lifecyclePostStartCommand', ],
                'lifecyclePostStartPath' => [ 'type' => 'string', 'locationName' => 'lifecyclePostStartPath', ],
                'lifecyclePostStartPort' => [ 'type' => 'integer', 'locationName' => 'lifecyclePostStartPort', ],
                'lifecyclePostStartScheme' => [ 'type' => 'string', 'locationName' => 'lifecyclePostStartScheme', ],
                'lifecyclePostStartHost' => [ 'type' => 'string', 'locationName' => 'lifecyclePostStartHost', ],
                'lifecyclePostStartHeader' => [ 'type' => 'map', 'key' => [ 'type' => 'string', ], 'value' => [ 'type' => 'string', ], ],
                'lifecyclePreStopType' => [ 'type' => 'string', 'locationName' => 'lifecyclePreStopType', ],
                'lifecyclePreStopCommand' => [ 'type' => 'string', 'locationName' => 'lifecyclePreStopCommand', ],
                'lifecyclePreStopPath' => [ 'type' => 'string', 'locationName' => 'lifecyclePreStopPath', ],
                'lifecyclePreStopPort' => [ 'type' => 'integer', 'locationName' => 'lifecyclePreStopPort', ],
                'lifecyclePreStopScheme' => [ 'type' => 'string', 'locationName' => 'lifecyclePreStopScheme', ],
                'lifecyclePreStopHost' => [ 'type' => 'string', 'locationName' => 'lifecyclePreStopHost', ],
                'lifecyclePreStopHeader' => [ 'type' => 'map', 'key' => [ 'type' => 'string', ], 'value' => [ 'type' => 'string', ], ],
                'readyCheckType' => [ 'type' => 'string', 'locationName' => 'readyCheckType', ],
                'readyCheckInitialDelaySeconds' => [ 'type' => 'integer', 'locationName' => 'readyCheckInitialDelaySeconds', ],
                'readyCheckTimeoutSeconds' => [ 'type' => 'integer', 'locationName' => 'readyCheckTimeoutSeconds', ],
                'readyCheckCommand' => [ 'type' => 'string', 'locationName' => 'readyCheckCommand', ],
                'readyCheckPath' => [ 'type' => 'string', 'locationName' => 'readyCheckPath', ],
                'readyCheckPort' => [ 'type' => 'integer', 'locationName' => 'readyCheckPort', ],
                'readyCheckScheme' => [ 'type' => 'string', 'locationName' => 'readyCheckScheme', ],
                'terminationGraceSeconds' => [ 'type' => 'integer', 'locationName' => 'terminationGraceSeconds', ],
                'appId' => [ 'type' => 'string', 'locationName' => 'appId', ],
                'groupId' => [ 'type' => 'string', 'locationName' => 'groupId', ],
            ],
        ],
        'RebuildRequestShape' => [
            'type' => 'structure',
            'members' => [
                'appId' => [ 'type' => 'string', 'locationName' => 'appId', ],
                'groupId' => [ 'type' => 'string', 'locationName' => 'groupId', ],
                'podName' => [ 'type' => 'string', 'locationName' => 'podName', ],
            ],
        ],
        'RebuildResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'RebuildResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'RebuildResultShape' => [
            'type' => 'structure',
            'members' => [
                'success' => [ 'type' => 'boolean', 'locationName' => 'success', ],
            ],
        ],
        'DescribePodsResultShape' => [
            'type' => 'structure',
            'members' => [
                'data' => [ 'type' => 'list', 'member' => [ 'shape' => 'Pod', ], ],
                'totalCount' => [ 'type' => 'long', 'locationName' => 'totalCount', ],
            ],
        ],
        'DescribePodsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNum' => [ 'type' => 'integer', 'locationName' => 'pageNum', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'appId' => [ 'type' => 'string', 'locationName' => 'appId', ],
                'groupId' => [ 'type' => 'string', 'locationName' => 'groupId', ],
            ],
        ],
        'DescribePodsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribePodsResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
    ],
];
