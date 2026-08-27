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
        'CreateApp' => [
            'name' => 'CreateApp',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/app',
            ],
            'input' => [ 'shape' => 'CreateAppRequestShape', ],
            'output' => [ 'shape' => 'CreateAppResponseShape', ],
        ],
        'DescribeApp' => [
            'name' => 'DescribeApp',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/app/{appId}',
            ],
            'input' => [ 'shape' => 'DescribeAppRequestShape', ],
            'output' => [ 'shape' => 'DescribeAppResponseShape', ],
        ],
        'UpdateApp' => [
            'name' => 'UpdateApp',
            'http' => [
                'method' => 'PUT',
                'requestUri' => '/v1/app/{appId}',
            ],
            'input' => [ 'shape' => 'UpdateAppRequestShape', ],
            'output' => [ 'shape' => 'UpdateAppResponseShape', ],
        ],
        'DeleteApp' => [
            'name' => 'DeleteApp',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/app/{appId}',
            ],
            'input' => [ 'shape' => 'DeleteAppRequestShape', ],
            'output' => [ 'shape' => 'DeleteAppResponseShape', ],
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
        'DescribeClusters' => [
            'name' => 'DescribeClusters',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/clusters:page',
            ],
            'input' => [ 'shape' => 'DescribeClustersRequestShape', ],
            'output' => [ 'shape' => 'DescribeClustersResponseShape', ],
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
        'DeleteAppGroup' => [
            'name' => 'DeleteAppGroup',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/app/{appId}/group/{groupId}',
            ],
            'input' => [ 'shape' => 'DeleteAppGroupRequestShape', ],
            'output' => [ 'shape' => 'DeleteAppGroupResponseShape', ],
        ],
        'CreateAppGroup' => [
            'name' => 'CreateAppGroup',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/app/{appId}/group',
            ],
            'input' => [ 'shape' => 'CreateAppGroupRequestShape', ],
            'output' => [ 'shape' => 'CreateAppGroupResponseShape', ],
        ],
        'CopyAppGroup' => [
            'name' => 'CopyAppGroup',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/app/{appId}/group/{groupId}:copy',
            ],
            'input' => [ 'shape' => 'CopyAppGroupRequestShape', ],
            'output' => [ 'shape' => 'CopyAppGroupResponseShape', ],
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
        'CreateSystem' => [
            'name' => 'CreateSystem',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/system',
            ],
            'input' => [ 'shape' => 'CreateSystemRequestShape', ],
            'output' => [ 'shape' => 'CreateSystemResponseShape', ],
        ],
        'DescribeJosApps' => [
            'name' => 'DescribeJosApps',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/josapps',
            ],
            'input' => [ 'shape' => 'DescribeJosAppsRequestShape', ],
            'output' => [ 'shape' => 'DescribeJosAppsResponseShape', ],
        ],
        'DescribeSystems' => [
            'name' => 'DescribeSystems',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/systems:page',
            ],
            'input' => [ 'shape' => 'DescribeSystemsRequestShape', ],
            'output' => [ 'shape' => 'DescribeSystemsResponseShape', ],
        ],
        'DescribeSystem' => [
            'name' => 'DescribeSystem',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/system/{systemId}',
            ],
            'input' => [ 'shape' => 'DescribeSystemRequestShape', ],
            'output' => [ 'shape' => 'DescribeSystemResponseShape', ],
        ],
        'UpdateSystem' => [
            'name' => 'UpdateSystem',
            'http' => [
                'method' => 'PUT',
                'requestUri' => '/v1/system/{systemId}',
            ],
            'input' => [ 'shape' => 'UpdateSystemRequestShape', ],
            'output' => [ 'shape' => 'UpdateSystemResponseShape', ],
        ],
        'DeleteSystem' => [
            'name' => 'DeleteSystem',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/system/{systemId}',
            ],
            'input' => [ 'shape' => 'DeleteSystemRequestShape', ],
            'output' => [ 'shape' => 'DeleteSystemResponseShape', ],
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
        'AppMembers' => [
            'type' => 'structure',
            'members' => [
                'manager' => [ 'type' => 'list', 'member' => [ 'shape' => 'BusinessSubUser', ], ],
                'read_only' => [ 'type' => 'list', 'member' => [ 'shape' => 'BusinessSubUser', ], ],
                'read_write' => [ 'type' => 'list', 'member' => [ 'shape' => 'BusinessSubUser', ], ],
            ],
        ],
        'UpdateAppSpec' => [
            'type' => 'structure',
            'members' => [
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'appLevel' => [ 'type' => 'string', 'locationName' => 'appLevel', ],
                'language' => [ 'type' => 'string', 'locationName' => 'language', ],
                'appMembers' =>  [ 'shape' => 'AppMember', ],
            ],
        ],
        'AppMember' => [
            'type' => 'structure',
            'members' => [
                'manager' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'read_only' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'read_write' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'BusinessSubUser' => [
            'type' => 'structure',
            'members' => [
                'mainPin' => [ 'type' => 'string', 'locationName' => 'mainPin', ],
                'subUserPin' => [ 'type' => 'string', 'locationName' => 'subUserPin', ],
                'subUserName' => [ 'type' => 'string', 'locationName' => 'subUserName', ],
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
        'ContainerInfoStruct' => [
            'type' => 'structure',
            'members' => [
                'cpu' => [ 'type' => 'string', 'locationName' => 'cpu', ],
                'memory' => [ 'type' => 'string', 'locationName' => 'memory', ],
                'requestCpu' => [ 'type' => 'string', 'locationName' => 'requestCpu', ],
                'requestMemory' => [ 'type' => 'string', 'locationName' => 'requestMemory', ],
                'deployStrategy' =>  [ 'shape' => 'DeployStrategyStruct', ],
                'podCount' => [ 'type' => 'integer', 'locationName' => 'podCount', ],
                'startCmdStruct' =>  [ 'shape' => 'StartCmdStruct', ],
                'ports' => [ 'type' => 'list', 'member' => [ 'shape' => 'TaskPort', ], ],
                'imageUrl' => [ 'type' => 'string', 'locationName' => 'imageUrl', ],
            ],
        ],
        'StartCmdStruct' => [
            'type' => 'structure',
            'members' => [
                'command' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'args' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'TaskPort' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'containerPort' => [ 'type' => 'integer', 'locationName' => 'containerPort', ],
                'protocol' => [ 'type' => 'string', 'locationName' => 'protocol', ],
            ],
        ],
        'AddGroup' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'integer', 'locationName' => 'id', ],
                'appId' => [ 'type' => 'string', 'locationName' => 'appId', ],
                'groupId' => [ 'type' => 'string', 'locationName' => 'groupId', ],
                'appKey' => [ 'type' => 'string', 'locationName' => 'appKey', ],
                'groupKey' => [ 'type' => 'string', 'locationName' => 'groupKey', ],
                'groupName' => [ 'type' => 'string', 'locationName' => 'groupName', ],
                'serviceName' => [ 'type' => 'string', 'locationName' => 'serviceName', ],
                'env' => [ 'type' => 'string', 'locationName' => 'env', ],
                'type' => [ 'type' => 'string', 'locationName' => 'type', ],
                'stateful' => [ 'type' => 'boolean', 'locationName' => 'stateful', ],
                'clusterId' => [ 'type' => 'long', 'locationName' => 'clusterId', ],
                'namespace' => [ 'type' => 'string', 'locationName' => 'namespace', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'imageUrl' => [ 'type' => 'string', 'locationName' => 'imageUrl', ],
                'imagePullPolicy' => [ 'type' => 'string', 'locationName' => 'imagePullPolicy', ],
                'deployStrategy' => [ 'type' => 'string', 'locationName' => 'deployStrategy', ],
                'healthCheck' => [ 'type' => 'string', 'locationName' => 'healthCheck', ],
                'readyCheck' => [ 'type' => 'string', 'locationName' => 'readyCheck', ],
                'lifecycle' => [ 'type' => 'string', 'locationName' => 'lifecycle', ],
                'podCount' => [ 'type' => 'integer', 'locationName' => 'podCount', ],
                'cpu' => [ 'type' => 'string', 'locationName' => 'cpu', ],
                'requestCpu' => [ 'type' => 'string', 'locationName' => 'requestCpu', ],
                'disk' => [ 'type' => 'string', 'locationName' => 'disk', ],
                'gpu' => [ 'type' => 'string', 'locationName' => 'gpu', ],
                'startCmd' => [ 'type' => 'string', 'locationName' => 'startCmd', ],
                'memory' => [ 'type' => 'string', 'locationName' => 'memory', ],
                'requestMemory' => [ 'type' => 'string', 'locationName' => 'requestMemory', ],
                'tenant' => [ 'type' => 'string', 'locationName' => 'tenant', ],
                'configChange' => [ 'type' => 'boolean', 'locationName' => 'configChange', ],
                'opconfigChange' => [ 'type' => 'boolean', 'locationName' => 'opconfigChange', ],
                'terminationGraceSeconds' => [ 'type' => 'integer', 'locationName' => 'terminationGraceSeconds', ],
                'ports' => [ 'type' => 'string', 'locationName' => 'ports', ],
                'hpaEnabled' => [ 'type' => 'boolean', 'locationName' => 'hpaEnabled', ],
                'createTime' => [ 'type' => 'integer', 'locationName' => 'createTime', ],
                'updateTime' => [ 'type' => 'integer', 'locationName' => 'updateTime', ],
                'createdBy' => [ 'type' => 'string', 'locationName' => 'createdBy', ],
                'updatedBy' => [ 'type' => 'string', 'locationName' => 'updatedBy', ],
                'tenantId' => [ 'type' => 'string', 'locationName' => 'tenantId', ],
                'deployStrategyStruct' =>  [ 'shape' => 'DeployStrategyStruct', ],
                'healthCheckStruct' =>  [ 'shape' => 'HealthCheckStruct', ],
                'readyCheckStruct' =>  [ 'shape' => 'ReadyCheckStruct', ],
                'lifecycleStruct' =>  [ 'shape' => 'LifecycleStruct', ],
                'failedConfigs' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'warningMessage' => [ 'type' => 'string', 'locationName' => 'warningMessage', ],
            ],
        ],
        'LifecycleHook' => [
            'type' => 'structure',
            'members' => [
                'type' => [ 'type' => 'string', 'locationName' => 'type', ],
                'command' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'path' => [ 'type' => 'string', 'locationName' => 'path', ],
                'port' => [ 'type' => 'integer', 'locationName' => 'port', ],
                'scheme' => [ 'type' => 'string', 'locationName' => 'scheme', ],
                'host' => [ 'type' => 'string', 'locationName' => 'host', ],
                'header' => [ 'type' => 'list', 'member' => [ 'shape' => 'TaskHeader', ], ],
            ],
        ],
        'GroupVolume' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'integer', 'locationName' => 'id', ],
                'groupId' => [ 'type' => 'string', 'locationName' => 'groupId', ],
                'createTime' => [ 'type' => 'integer', 'locationName' => 'createTime', ],
                'updateTime' => [ 'type' => 'integer', 'locationName' => 'updateTime', ],
                'createdBy' => [ 'type' => 'string', 'locationName' => 'createdBy', ],
                'updatedBy' => [ 'type' => 'string', 'locationName' => 'updatedBy', ],
                'tenantId' => [ 'type' => 'string', 'locationName' => 'tenantId', ],
                'volumeType' => [ 'type' => 'string', 'locationName' => 'volumeType', ],
                'mountPath' => [ 'type' => 'string', 'locationName' => 'mountPath', ],
                'subpath' => [ 'type' => 'string', 'locationName' => 'subpath', ],
                'accessMode' => [ 'type' => 'string', 'locationName' => 'accessMode', ],
                'disk' => [ 'type' => 'string', 'locationName' => 'disk', ],
                'pvcName' => [ 'type' => 'string', 'locationName' => 'pvcName', ],
                'hpPath' => [ 'type' => 'string', 'locationName' => 'hpPath', ],
                'hpType' => [ 'type' => 'string', 'locationName' => 'hpType', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
            ],
        ],
        'DeployStrategyDetail' => [
            'type' => 'structure',
            'members' => [
                'concurrency' => [ 'type' => 'integer', 'locationName' => 'concurrency', ],
                'maxSurge' => [ 'type' => 'integer', 'locationName' => 'maxSurge', ],
                'pauseStrategy' => [ 'type' => 'string', 'locationName' => 'pauseStrategy', ],
                'interval' => [ 'type' => 'integer', 'locationName' => 'interval', ],
                'batchCount' => [ 'type' => 'integer', 'locationName' => 'batchCount', ],
            ],
        ],
        'LifecycleStruct' => [
            'type' => 'structure',
            'members' => [
                'postStart' =>  [ 'shape' => 'LifecycleHook', ],
                'preStop' =>  [ 'shape' => 'LifecycleHook', ],
            ],
        ],
        'ReadyCheckStruct' => [
            'type' => 'structure',
            'members' => [
                'type' => [ 'type' => 'string', 'locationName' => 'type', ],
                'initialDelaySeconds' => [ 'type' => 'integer', 'locationName' => 'initialDelaySeconds', ],
                'timeoutSeconds' => [ 'type' => 'integer', 'locationName' => 'timeoutSeconds', ],
                'command' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'path' => [ 'type' => 'string', 'locationName' => 'path', ],
                'port' => [ 'type' => 'integer', 'locationName' => 'port', ],
                'scheme' => [ 'type' => 'string', 'locationName' => 'scheme', ],
            ],
        ],
        'TaskHeader' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'value' => [ 'type' => 'string', 'locationName' => 'value', ],
            ],
        ],
        'HealthCheckStruct' => [
            'type' => 'structure',
            'members' => [
                'type' => [ 'type' => 'string', 'locationName' => 'type', ],
                'initialDelaySeconds' => [ 'type' => 'integer', 'locationName' => 'initialDelaySeconds', ],
                'timeoutSeconds' => [ 'type' => 'integer', 'locationName' => 'timeoutSeconds', ],
                'command' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'path' => [ 'type' => 'string', 'locationName' => 'path', ],
                'port' => [ 'type' => 'integer', 'locationName' => 'port', ],
                'scheme' => [ 'type' => 'string', 'locationName' => 'scheme', ],
            ],
        ],
        'DeployStrategyStruct' => [
            'type' => 'structure',
            'members' => [
                'type' => [ 'type' => 'string', 'locationName' => 'type', ],
                'detail' =>  [ 'shape' => 'DeployStrategyDetail', ],
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
        'GroupConfigInfo' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'long', 'locationName' => 'id', ],
                'type' => [ 'type' => 'string', 'locationName' => 'type', ],
                'appId' => [ 'type' => 'string', 'locationName' => 'appId', ],
                'deleted' => [ 'type' => 'boolean', 'locationName' => 'deleted', ],
                'itemKey' => [ 'type' => 'string', 'locationName' => 'itemKey', ],
                'itemValue' => [ 'type' => 'string', 'locationName' => 'itemValue', ],
                'encrypted' => [ 'type' => 'boolean', 'locationName' => 'encrypted', ],
                'itemValueEncrypt' => [ 'type' => 'string', 'locationName' => 'itemValueEncrypt', ],
                'encode' => [ 'type' => 'string', 'locationName' => 'encode', ],
                'md5' => [ 'type' => 'string', 'locationName' => 'md5', ],
                'createdTime' => [ 'type' => 'string', 'locationName' => 'createdTime', ],
                'updatedTime' => [ 'type' => 'string', 'locationName' => 'updatedTime', ],
                'createdBy' => [ 'type' => 'string', 'locationName' => 'createdBy', ],
                'updatedBy' => [ 'type' => 'string', 'locationName' => 'updatedBy', ],
                'opType' => [ 'type' => 'string', 'locationName' => 'opType', ],
                'groupId' => [ 'type' => 'string', 'locationName' => 'groupId', ],
                'released' => [ 'type' => 'boolean', 'locationName' => 'released', ],
                'tplId' => [ 'type' => 'integer', 'locationName' => 'tplId', ],
                'replaceFinish' => [ 'type' => 'boolean', 'locationName' => 'replaceFinish', ],
                'itemResultValue' => [ 'type' => 'string', 'locationName' => 'itemResultValue', ],
            ],
        ],
        'BaseInfoStruct' => [
            'type' => 'structure',
            'members' => [
                'groupName' => [ 'type' => 'string', 'locationName' => 'groupName', ],
            ],
        ],
        'TagInfo' => [
            'type' => 'structure',
            'members' => [
                '_uid' => [ 'type' => 'integer', 'locationName' => '_uid', ],
                'tagKey' => [ 'type' => 'string', 'locationName' => 'tagKey', ],
                'tagValue' => [ 'type' => 'string', 'locationName' => 'tagValue', ],
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
        'OpenapiDeployClusterRespVo' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'long', 'locationName' => 'id', ],
                'clusterId' => [ 'type' => 'long', 'locationName' => 'clusterId', ],
                'clusterName' => [ 'type' => 'string', 'locationName' => 'clusterName', ],
                'clusterUser' => [ 'type' => 'string', 'locationName' => 'clusterUser', ],
                'clusterEnvironment' => [ 'type' => 'string', 'locationName' => 'clusterEnvironment', ],
                'clusterType' => [ 'type' => 'string', 'locationName' => 'clusterType', ],
                'clusterIp' => [ 'type' => 'string', 'locationName' => 'clusterIp', ],
                'k8sClusterId' => [ 'type' => 'string', 'locationName' => 'k8sClusterId', ],
                'k8sClusterRegion' => [ 'type' => 'string', 'locationName' => 'k8sClusterRegion', ],
                'k8sClusterVpcId' => [ 'type' => 'string', 'locationName' => 'k8sClusterVpcId', ],
                'k8sClusterWorkerNodeCount' => [ 'type' => 'integer', 'locationName' => 'k8sClusterWorkerNodeCount', ],
                'k8sVersion' => [ 'type' => 'string', 'locationName' => 'k8sVersion', ],
                'k8sClusterState' => [ 'type' => 'string', 'locationName' => 'k8sClusterState', ],
                'k8sClusterStateMessage' => [ 'type' => 'string', 'locationName' => 'k8sClusterStateMessage', ],
                'k8sClusterCreateTime' => [ 'type' => 'string', 'locationName' => 'k8sClusterCreateTime', ],
                'k8sClusterUpdateTime' => [ 'type' => 'string', 'locationName' => 'k8sClusterUpdateTime', ],
                'clusterStatus' => [ 'type' => 'string', 'locationName' => 'clusterStatus', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'updateTime' => [ 'type' => 'string', 'locationName' => 'updateTime', ],
                'apiServerIpWhitelistEnabled' => [ 'type' => 'integer', 'locationName' => 'apiServerIpWhitelistEnabled', ],
                'apiServerIpWhitelist' => [ 'type' => 'string', 'locationName' => 'apiServerIpWhitelist', ],
            ],
        ],
        'OpenapiPageReqVo' => [
            'type' => 'structure',
            'members' => [
                'pageNum' => [ 'type' => 'integer', 'locationName' => 'pageNum', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
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
        'AddSystem' => [
            'type' => 'structure',
            'members' => [
                'systemId' => [ 'type' => 'string', 'locationName' => 'systemId', ],
                'vpcId' => [ 'type' => 'string', 'locationName' => 'vpcId', ],
            ],
        ],
        'UpdateSystemSpec' => [
            'type' => 'structure',
            'members' => [
                'systemName' => [ 'type' => 'string', 'locationName' => 'systemName', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
            ],
        ],
        'WukongSystem' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'long', 'locationName' => 'id', ],
                'systemId' => [ 'type' => 'string', 'locationName' => 'systemId', ],
                'systemKey' => [ 'type' => 'string', 'locationName' => 'systemKey', ],
                'systemName' => [ 'type' => 'string', 'locationName' => 'systemName', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'josBizType' => [ 'type' => 'string', 'locationName' => 'josBizType', ],
                'josAppName' => [ 'type' => 'string', 'locationName' => 'josAppName', ],
                'josAppKey' => [ 'type' => 'string', 'locationName' => 'josAppKey', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'updateTime' => [ 'type' => 'string', 'locationName' => 'updateTime', ],
            ],
        ],
        'CreateSystemSpec' => [
            'type' => 'structure',
            'members' => [
                'systemKey' => [ 'type' => 'string', 'locationName' => 'systemKey', ],
                'systemName' => [ 'type' => 'string', 'locationName' => 'systemName', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'josAppKey' => [ 'type' => 'string', 'locationName' => 'josAppKey', ],
            ],
        ],
        'JosApp' => [
            'type' => 'structure',
            'members' => [
                'appKey' => [ 'type' => 'string', 'locationName' => 'appKey', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
                'bizType' => [ 'type' => 'string', 'locationName' => 'bizType', ],
                'boundSystem' => [ 'type' => 'boolean', 'locationName' => 'boundSystem', ],
            ],
        ],
        'OpenapiString' => [
            'type' => 'structure',
            'members' => [
                'value' => [ 'type' => 'string', 'locationName' => 'value', ],
            ],
        ],
        'DescribeAppsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeAppsResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeAppRequestShape' => [
            'type' => 'structure',
            'members' => [
                'appId' => [ 'type' => 'string', 'locationName' => 'appId', ],
            ],
        ],
        'DescribeAppsResultShape' => [
            'type' => 'structure',
            'members' => [
                'data' => [ 'type' => 'list', 'member' => [ 'shape' => 'App', ], ],
                'totalCount' => [ 'type' => 'long', 'locationName' => 'totalCount', ],
            ],
        ],
        'CreateAppResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'CreateAppResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'UpdateAppRequestShape' => [
            'type' => 'structure',
            'members' => [
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'appLevel' => [ 'type' => 'string', 'locationName' => 'appLevel', ],
                'language' => [ 'type' => 'string', 'locationName' => 'language', ],
                'appMembers' =>  [ 'shape' => 'AppMember', ],
                'appId' => [ 'type' => 'string', 'locationName' => 'appId', ],
            ],
        ],
        'DeleteAppRequestShape' => [
            'type' => 'structure',
            'members' => [
                'appId' => [ 'type' => 'string', 'locationName' => 'appId', ],
            ],
        ],
        'DescribeAppsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNum' => [ 'type' => 'integer', 'locationName' => 'pageNum', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
            ],
        ],
        'UpdateAppResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'UpdateAppResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeAppResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeAppResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'CreateAppResultShape' => [
            'type' => 'structure',
            'members' => [
                'value' => [ 'type' => 'string', 'locationName' => 'value', ],
            ],
        ],
        'DeleteAppResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DeleteAppResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'UpdateAppResultShape' => [
            'type' => 'structure',
            'members' => [
                'success' => [ 'type' => 'boolean', 'locationName' => 'success', ],
            ],
        ],
        'DescribeAppResultShape' => [
            'type' => 'structure',
            'members' => [
                'appId' => [ 'type' => 'string', 'locationName' => 'appId', ],
                'appKey' => [ 'type' => 'string', 'locationName' => 'appKey', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'appLevel' => [ 'type' => 'string', 'locationName' => 'appLevel', ],
                'stateful' => [ 'type' => 'boolean', 'locationName' => 'stateful', ],
                'language' => [ 'type' => 'string', 'locationName' => 'language', ],
                'appMembers' =>  [ 'shape' => 'AppMembers', ],
                'systemId' => [ 'type' => 'string', 'locationName' => 'systemId', ],
                'systemKey' => [ 'type' => 'string', 'locationName' => 'systemKey', ],
                'systemName' => [ 'type' => 'string', 'locationName' => 'systemName', ],
            ],
        ],
        'AddAppRequest' => [
            'type' => 'structure',
            'members' => [
                'appKey' => [ 'type' => 'string', 'locationName' => 'appKey', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
                'systemId' => [ 'type' => 'string', 'locationName' => 'systemId', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'appLevel' => [ 'type' => 'string', 'locationName' => 'appLevel', ],
                'stateful' => [ 'type' => 'boolean', 'locationName' => 'stateful', ],
                'language' => [ 'type' => 'string', 'locationName' => 'language', ],
                'appMembers' =>  [ 'shape' => 'AppMember', ],
            ],
        ],
        'CreateAppRequestShape' => [
            'type' => 'structure',
            'members' => [
                'appKey' => [ 'type' => 'string', 'locationName' => 'appKey', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
                'systemId' => [ 'type' => 'string', 'locationName' => 'systemId', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'appLevel' => [ 'type' => 'string', 'locationName' => 'appLevel', ],
                'stateful' => [ 'type' => 'boolean', 'locationName' => 'stateful', ],
                'language' => [ 'type' => 'string', 'locationName' => 'language', ],
                'appMembers' =>  [ 'shape' => 'AppMember', ],
            ],
        ],
        'DeleteAppResultShape' => [
            'type' => 'structure',
            'members' => [
                'success' => [ 'type' => 'boolean', 'locationName' => 'success', ],
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
                'pageNum' => [ 'type' => 'integer', 'locationName' => 'pageNum', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
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
                'pageNum' => [ 'type' => 'integer', 'locationName' => 'pageNum', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
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
                'pageNum' => [ 'type' => 'integer', 'locationName' => 'pageNum', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
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
        'DescribeClustersRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNum' => [ 'type' => 'integer', 'locationName' => 'pageNum', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
            ],
        ],
        'DescribeClustersResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeClustersResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeClustersResultShape' => [
            'type' => 'structure',
            'members' => [
                'data' => [ 'type' => 'list', 'member' => [ 'shape' => 'OpenapiDeployClusterRespVo', ], ],
                'totalCount' => [ 'type' => 'long', 'locationName' => 'totalCount', ],
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
        'CreateAppGroupResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'CreateAppGroupResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DeleteConfigFileResultShape' => [
            'type' => 'structure',
            'members' => [
                'success' => [ 'type' => 'boolean', 'locationName' => 'success', ],
            ],
        ],
        'CreateAppGroupRequestShape' => [
            'type' => 'structure',
            'members' => [
                'appId' => [ 'type' => 'string', 'locationName' => 'appId', ],
                'groupKey' => [ 'type' => 'string', 'locationName' => 'groupKey', ],
                'groupName' => [ 'type' => 'string', 'locationName' => 'groupName', ],
                'env' => [ 'type' => 'string', 'locationName' => 'env', ],
                'serviceName' => [ 'type' => 'string', 'locationName' => 'serviceName', ],
                'clusterId' => [ 'type' => 'integer', 'locationName' => 'clusterId', ],
                'podCount' => [ 'type' => 'integer', 'locationName' => 'podCount', ],
                'cpu' => [ 'type' => 'string', 'locationName' => 'cpu', ],
                'memory' => [ 'type' => 'string', 'locationName' => 'memory', ],
                'requestCpu' => [ 'type' => 'string', 'locationName' => 'requestCpu', ],
                'requestMemory' => [ 'type' => 'string', 'locationName' => 'requestMemory', ],
                'imageUrl' => [ 'type' => 'string', 'locationName' => 'imageUrl', ],
                'terminationGraceSeconds' => [ 'type' => 'integer', 'locationName' => 'terminationGraceSeconds', ],
                'deployStrategyStruct' =>  [ 'shape' => 'DeployStrategyStruct', ],
                'healthCheckStruct' =>  [ 'shape' => 'HealthCheckStruct', ],
                'readyCheckStruct' =>  [ 'shape' => 'ReadyCheckStruct', ],
                'lifecycleStruct' =>  [ 'shape' => 'LifecycleStruct', ],
                'containerInfo' =>  [ 'shape' => 'ContainerInfoStruct', ],
                'baseInfo' =>  [ 'shape' => 'BaseInfoStruct', ],
                'configFiles' => [ 'type' => 'list', 'member' => [ 'shape' => 'GroupConfigInfo', ], ],
                'ports' => [ 'type' => 'list', 'member' => [ 'shape' => 'TaskPort', ], ],
                'tags' => [ 'type' => 'list', 'member' => [ 'shape' => 'TagInfo', ], ],
                'annotations' => [ 'type' => 'list', 'member' => [ 'shape' => 'TagInfo', ], ],
                'startCmdStruct' =>  [ 'shape' => 'StartCmdStruct', ],
                'volumeBases' => [ 'type' => 'list', 'member' => [ 'shape' => 'GroupVolume', ], ],
            ],
        ],
        'DeleteAppGroupResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DeleteAppGroupResultShape', ],
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
        'DescribeGroupsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNum' => [ 'type' => 'integer', 'locationName' => 'pageNum', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'appId' => [ 'type' => 'string', 'locationName' => 'appId', ],
            ],
        ],
        'CopyAppGroupResultShape' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'integer', 'locationName' => 'id', ],
                'appId' => [ 'type' => 'string', 'locationName' => 'appId', ],
                'groupId' => [ 'type' => 'string', 'locationName' => 'groupId', ],
                'appKey' => [ 'type' => 'string', 'locationName' => 'appKey', ],
                'groupKey' => [ 'type' => 'string', 'locationName' => 'groupKey', ],
                'groupName' => [ 'type' => 'string', 'locationName' => 'groupName', ],
                'serviceName' => [ 'type' => 'string', 'locationName' => 'serviceName', ],
                'env' => [ 'type' => 'string', 'locationName' => 'env', ],
                'type' => [ 'type' => 'string', 'locationName' => 'type', ],
                'stateful' => [ 'type' => 'boolean', 'locationName' => 'stateful', ],
                'clusterId' => [ 'type' => 'long', 'locationName' => 'clusterId', ],
                'namespace' => [ 'type' => 'string', 'locationName' => 'namespace', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'imageUrl' => [ 'type' => 'string', 'locationName' => 'imageUrl', ],
                'imagePullPolicy' => [ 'type' => 'string', 'locationName' => 'imagePullPolicy', ],
                'deployStrategy' => [ 'type' => 'string', 'locationName' => 'deployStrategy', ],
                'healthCheck' => [ 'type' => 'string', 'locationName' => 'healthCheck', ],
                'readyCheck' => [ 'type' => 'string', 'locationName' => 'readyCheck', ],
                'lifecycle' => [ 'type' => 'string', 'locationName' => 'lifecycle', ],
                'podCount' => [ 'type' => 'integer', 'locationName' => 'podCount', ],
                'cpu' => [ 'type' => 'string', 'locationName' => 'cpu', ],
                'requestCpu' => [ 'type' => 'string', 'locationName' => 'requestCpu', ],
                'disk' => [ 'type' => 'string', 'locationName' => 'disk', ],
                'gpu' => [ 'type' => 'string', 'locationName' => 'gpu', ],
                'startCmd' => [ 'type' => 'string', 'locationName' => 'startCmd', ],
                'memory' => [ 'type' => 'string', 'locationName' => 'memory', ],
                'requestMemory' => [ 'type' => 'string', 'locationName' => 'requestMemory', ],
                'tenant' => [ 'type' => 'string', 'locationName' => 'tenant', ],
                'configChange' => [ 'type' => 'boolean', 'locationName' => 'configChange', ],
                'opconfigChange' => [ 'type' => 'boolean', 'locationName' => 'opconfigChange', ],
                'terminationGraceSeconds' => [ 'type' => 'integer', 'locationName' => 'terminationGraceSeconds', ],
                'ports' => [ 'type' => 'string', 'locationName' => 'ports', ],
                'hpaEnabled' => [ 'type' => 'boolean', 'locationName' => 'hpaEnabled', ],
                'createTime' => [ 'type' => 'integer', 'locationName' => 'createTime', ],
                'updateTime' => [ 'type' => 'integer', 'locationName' => 'updateTime', ],
                'createdBy' => [ 'type' => 'string', 'locationName' => 'createdBy', ],
                'updatedBy' => [ 'type' => 'string', 'locationName' => 'updatedBy', ],
                'tenantId' => [ 'type' => 'string', 'locationName' => 'tenantId', ],
                'deployStrategyStruct' =>  [ 'shape' => 'DeployStrategyStruct', ],
                'healthCheckStruct' =>  [ 'shape' => 'HealthCheckStruct', ],
                'readyCheckStruct' =>  [ 'shape' => 'ReadyCheckStruct', ],
                'lifecycleStruct' =>  [ 'shape' => 'LifecycleStruct', ],
                'failedConfigs' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'warningMessage' => [ 'type' => 'string', 'locationName' => 'warningMessage', ],
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
        'DescribeGroupsResultShape' => [
            'type' => 'structure',
            'members' => [
                'data' => [ 'type' => 'list', 'member' => [ 'shape' => 'Group', ], ],
                'totalCount' => [ 'type' => 'long', 'locationName' => 'totalCount', ],
            ],
        ],
        'CopyGroupRequest' => [
            'type' => 'structure',
            'members' => [
                'appId' => [ 'type' => 'string', 'locationName' => 'appId', ],
                'groupKey' => [ 'type' => 'string', 'locationName' => 'groupKey', ],
                'groupName' => [ 'type' => 'string', 'locationName' => 'groupName', ],
                'env' => [ 'type' => 'string', 'locationName' => 'env', ],
                'serviceName' => [ 'type' => 'string', 'locationName' => 'serviceName', ],
                'clusterId' => [ 'type' => 'integer', 'locationName' => 'clusterId', ],
                'podCount' => [ 'type' => 'integer', 'locationName' => 'podCount', ],
                'cpu' => [ 'type' => 'string', 'locationName' => 'cpu', ],
                'memory' => [ 'type' => 'string', 'locationName' => 'memory', ],
                'requestCpu' => [ 'type' => 'string', 'locationName' => 'requestCpu', ],
                'requestMemory' => [ 'type' => 'string', 'locationName' => 'requestMemory', ],
                'imageUrl' => [ 'type' => 'string', 'locationName' => 'imageUrl', ],
                'terminationGraceSeconds' => [ 'type' => 'integer', 'locationName' => 'terminationGraceSeconds', ],
                'deployStrategyStruct' =>  [ 'shape' => 'DeployStrategyStruct', ],
                'healthCheckStruct' =>  [ 'shape' => 'HealthCheckStruct', ],
                'readyCheckStruct' =>  [ 'shape' => 'ReadyCheckStruct', ],
                'lifecycleStruct' =>  [ 'shape' => 'LifecycleStruct', ],
                'containerInfo' =>  [ 'shape' => 'ContainerInfoStruct', ],
                'baseInfo' =>  [ 'shape' => 'BaseInfoStruct', ],
                'configFiles' => [ 'type' => 'list', 'member' => [ 'shape' => 'GroupConfigInfo', ], ],
                'ports' => [ 'type' => 'list', 'member' => [ 'shape' => 'TaskPort', ], ],
                'tags' => [ 'type' => 'list', 'member' => [ 'shape' => 'TagInfo', ], ],
                'annotations' => [ 'type' => 'list', 'member' => [ 'shape' => 'TagInfo', ], ],
                'startCmdStruct' =>  [ 'shape' => 'StartCmdStruct', ],
                'volumeBases' => [ 'type' => 'list', 'member' => [ 'shape' => 'GroupVolume', ], ],
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
        'DeleteAppGroupRequestShape' => [
            'type' => 'structure',
            'members' => [
                'appId' => [ 'type' => 'string', 'locationName' => 'appId', ],
                'groupId' => [ 'type' => 'string', 'locationName' => 'groupId', ],
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
        'AddGroupRequest' => [
            'type' => 'structure',
            'members' => [
                'appId' => [ 'type' => 'string', 'locationName' => 'appId', ],
                'groupKey' => [ 'type' => 'string', 'locationName' => 'groupKey', ],
                'groupName' => [ 'type' => 'string', 'locationName' => 'groupName', ],
                'env' => [ 'type' => 'string', 'locationName' => 'env', ],
                'serviceName' => [ 'type' => 'string', 'locationName' => 'serviceName', ],
                'clusterId' => [ 'type' => 'integer', 'locationName' => 'clusterId', ],
                'podCount' => [ 'type' => 'integer', 'locationName' => 'podCount', ],
                'cpu' => [ 'type' => 'string', 'locationName' => 'cpu', ],
                'memory' => [ 'type' => 'string', 'locationName' => 'memory', ],
                'requestCpu' => [ 'type' => 'string', 'locationName' => 'requestCpu', ],
                'requestMemory' => [ 'type' => 'string', 'locationName' => 'requestMemory', ],
                'imageUrl' => [ 'type' => 'string', 'locationName' => 'imageUrl', ],
                'terminationGraceSeconds' => [ 'type' => 'integer', 'locationName' => 'terminationGraceSeconds', ],
                'deployStrategyStruct' =>  [ 'shape' => 'DeployStrategyStruct', ],
                'healthCheckStruct' =>  [ 'shape' => 'HealthCheckStruct', ],
                'readyCheckStruct' =>  [ 'shape' => 'ReadyCheckStruct', ],
                'lifecycleStruct' =>  [ 'shape' => 'LifecycleStruct', ],
                'containerInfo' =>  [ 'shape' => 'ContainerInfoStruct', ],
                'baseInfo' =>  [ 'shape' => 'BaseInfoStruct', ],
                'configFiles' => [ 'type' => 'list', 'member' => [ 'shape' => 'GroupConfigInfo', ], ],
                'ports' => [ 'type' => 'list', 'member' => [ 'shape' => 'TaskPort', ], ],
                'tags' => [ 'type' => 'list', 'member' => [ 'shape' => 'TagInfo', ], ],
                'annotations' => [ 'type' => 'list', 'member' => [ 'shape' => 'TagInfo', ], ],
                'startCmdStruct' =>  [ 'shape' => 'StartCmdStruct', ],
                'volumeBases' => [ 'type' => 'list', 'member' => [ 'shape' => 'GroupVolume', ], ],
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
        'CopyAppGroupResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'CopyAppGroupResultShape', ],
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
        'CopyAppGroupRequestShape' => [
            'type' => 'structure',
            'members' => [
                'appId' => [ 'type' => 'string', 'locationName' => 'appId', ],
                'groupKey' => [ 'type' => 'string', 'locationName' => 'groupKey', ],
                'groupName' => [ 'type' => 'string', 'locationName' => 'groupName', ],
                'env' => [ 'type' => 'string', 'locationName' => 'env', ],
                'serviceName' => [ 'type' => 'string', 'locationName' => 'serviceName', ],
                'clusterId' => [ 'type' => 'integer', 'locationName' => 'clusterId', ],
                'podCount' => [ 'type' => 'integer', 'locationName' => 'podCount', ],
                'cpu' => [ 'type' => 'string', 'locationName' => 'cpu', ],
                'memory' => [ 'type' => 'string', 'locationName' => 'memory', ],
                'requestCpu' => [ 'type' => 'string', 'locationName' => 'requestCpu', ],
                'requestMemory' => [ 'type' => 'string', 'locationName' => 'requestMemory', ],
                'imageUrl' => [ 'type' => 'string', 'locationName' => 'imageUrl', ],
                'terminationGraceSeconds' => [ 'type' => 'integer', 'locationName' => 'terminationGraceSeconds', ],
                'deployStrategyStruct' =>  [ 'shape' => 'DeployStrategyStruct', ],
                'healthCheckStruct' =>  [ 'shape' => 'HealthCheckStruct', ],
                'readyCheckStruct' =>  [ 'shape' => 'ReadyCheckStruct', ],
                'lifecycleStruct' =>  [ 'shape' => 'LifecycleStruct', ],
                'containerInfo' =>  [ 'shape' => 'ContainerInfoStruct', ],
                'baseInfo' =>  [ 'shape' => 'BaseInfoStruct', ],
                'configFiles' => [ 'type' => 'list', 'member' => [ 'shape' => 'GroupConfigInfo', ], ],
                'ports' => [ 'type' => 'list', 'member' => [ 'shape' => 'TaskPort', ], ],
                'tags' => [ 'type' => 'list', 'member' => [ 'shape' => 'TagInfo', ], ],
                'annotations' => [ 'type' => 'list', 'member' => [ 'shape' => 'TagInfo', ], ],
                'startCmdStruct' =>  [ 'shape' => 'StartCmdStruct', ],
                'volumeBases' => [ 'type' => 'list', 'member' => [ 'shape' => 'GroupVolume', ], ],
                'groupId' => [ 'type' => 'string', 'locationName' => 'groupId', ],
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
        'ContainerAntiAffinityRequestShape' => [
            'type' => 'structure',
            'members' => [
                'open' => [ 'type' => 'boolean', 'locationName' => 'open', ],
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
        'DescribeGroupConfigResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeGroupConfigResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DeleteAppGroupResultShape' => [
            'type' => 'structure',
            'members' => [
                'success' => [ 'type' => 'boolean', 'locationName' => 'success', ],
            ],
        ],
        'DescribeGroupConfigFilesResultShape' => [
            'type' => 'structure',
            'members' => [
                'data' => [ 'type' => 'list', 'member' => [ 'shape' => 'ConfigInfo', ], ],
                'totalCount' => [ 'type' => 'long', 'locationName' => 'totalCount', ],
            ],
        ],
        'CreateAppGroupResultShape' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'integer', 'locationName' => 'id', ],
                'appId' => [ 'type' => 'string', 'locationName' => 'appId', ],
                'groupId' => [ 'type' => 'string', 'locationName' => 'groupId', ],
                'appKey' => [ 'type' => 'string', 'locationName' => 'appKey', ],
                'groupKey' => [ 'type' => 'string', 'locationName' => 'groupKey', ],
                'groupName' => [ 'type' => 'string', 'locationName' => 'groupName', ],
                'serviceName' => [ 'type' => 'string', 'locationName' => 'serviceName', ],
                'env' => [ 'type' => 'string', 'locationName' => 'env', ],
                'type' => [ 'type' => 'string', 'locationName' => 'type', ],
                'stateful' => [ 'type' => 'boolean', 'locationName' => 'stateful', ],
                'clusterId' => [ 'type' => 'long', 'locationName' => 'clusterId', ],
                'namespace' => [ 'type' => 'string', 'locationName' => 'namespace', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'imageUrl' => [ 'type' => 'string', 'locationName' => 'imageUrl', ],
                'imagePullPolicy' => [ 'type' => 'string', 'locationName' => 'imagePullPolicy', ],
                'deployStrategy' => [ 'type' => 'string', 'locationName' => 'deployStrategy', ],
                'healthCheck' => [ 'type' => 'string', 'locationName' => 'healthCheck', ],
                'readyCheck' => [ 'type' => 'string', 'locationName' => 'readyCheck', ],
                'lifecycle' => [ 'type' => 'string', 'locationName' => 'lifecycle', ],
                'podCount' => [ 'type' => 'integer', 'locationName' => 'podCount', ],
                'cpu' => [ 'type' => 'string', 'locationName' => 'cpu', ],
                'requestCpu' => [ 'type' => 'string', 'locationName' => 'requestCpu', ],
                'disk' => [ 'type' => 'string', 'locationName' => 'disk', ],
                'gpu' => [ 'type' => 'string', 'locationName' => 'gpu', ],
                'startCmd' => [ 'type' => 'string', 'locationName' => 'startCmd', ],
                'memory' => [ 'type' => 'string', 'locationName' => 'memory', ],
                'requestMemory' => [ 'type' => 'string', 'locationName' => 'requestMemory', ],
                'tenant' => [ 'type' => 'string', 'locationName' => 'tenant', ],
                'configChange' => [ 'type' => 'boolean', 'locationName' => 'configChange', ],
                'opconfigChange' => [ 'type' => 'boolean', 'locationName' => 'opconfigChange', ],
                'terminationGraceSeconds' => [ 'type' => 'integer', 'locationName' => 'terminationGraceSeconds', ],
                'ports' => [ 'type' => 'string', 'locationName' => 'ports', ],
                'hpaEnabled' => [ 'type' => 'boolean', 'locationName' => 'hpaEnabled', ],
                'createTime' => [ 'type' => 'integer', 'locationName' => 'createTime', ],
                'updateTime' => [ 'type' => 'integer', 'locationName' => 'updateTime', ],
                'createdBy' => [ 'type' => 'string', 'locationName' => 'createdBy', ],
                'updatedBy' => [ 'type' => 'string', 'locationName' => 'updatedBy', ],
                'tenantId' => [ 'type' => 'string', 'locationName' => 'tenantId', ],
                'deployStrategyStruct' =>  [ 'shape' => 'DeployStrategyStruct', ],
                'healthCheckStruct' =>  [ 'shape' => 'HealthCheckStruct', ],
                'readyCheckStruct' =>  [ 'shape' => 'ReadyCheckStruct', ],
                'lifecycleStruct' =>  [ 'shape' => 'LifecycleStruct', ],
                'failedConfigs' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'warningMessage' => [ 'type' => 'string', 'locationName' => 'warningMessage', ],
            ],
        ],
        'DescribeGroupEnvironmentsResultShape' => [
            'type' => 'structure',
            'members' => [
                'data' => [ 'type' => 'list', 'member' => [ 'shape' => 'ConfigInfo', ], ],
                'totalCount' => [ 'type' => 'long', 'locationName' => 'totalCount', ],
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
        'UpdateSystemRequestShape' => [
            'type' => 'structure',
            'members' => [
                'systemName' => [ 'type' => 'string', 'locationName' => 'systemName', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'systemId' => [ 'type' => 'string', 'locationName' => 'systemId', ],
            ],
        ],
        'CreateSystemRequestShape' => [
            'type' => 'structure',
            'members' => [
                'systemKey' => [ 'type' => 'string', 'locationName' => 'systemKey', ],
                'systemName' => [ 'type' => 'string', 'locationName' => 'systemName', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'josAppKey' => [ 'type' => 'string', 'locationName' => 'josAppKey', ],
            ],
        ],
        'DescribeSystemsResultShape' => [
            'type' => 'structure',
            'members' => [
                'data' => [ 'type' => 'list', 'member' => [ 'shape' => 'WukongSystem', ], ],
                'totalCount' => [ 'type' => 'long', 'locationName' => 'totalCount', ],
            ],
        ],
        'CreateSystemResultShape' => [
            'type' => 'structure',
            'members' => [
                'systemId' => [ 'type' => 'string', 'locationName' => 'systemId', ],
                'vpcId' => [ 'type' => 'string', 'locationName' => 'vpcId', ],
            ],
        ],
        'DescribeJosAppsRequestShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DescribeSystemResultShape' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'long', 'locationName' => 'id', ],
                'systemId' => [ 'type' => 'string', 'locationName' => 'systemId', ],
                'systemKey' => [ 'type' => 'string', 'locationName' => 'systemKey', ],
                'systemName' => [ 'type' => 'string', 'locationName' => 'systemName', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'josBizType' => [ 'type' => 'string', 'locationName' => 'josBizType', ],
                'josAppName' => [ 'type' => 'string', 'locationName' => 'josAppName', ],
                'josAppKey' => [ 'type' => 'string', 'locationName' => 'josAppKey', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'updateTime' => [ 'type' => 'string', 'locationName' => 'updateTime', ],
            ],
        ],
        'DeleteSystemResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DeleteSystemResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'CreateSystemResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'CreateSystemResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeSystemsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNum' => [ 'type' => 'integer', 'locationName' => 'pageNum', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
            ],
        ],
        'DescribeSystemsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeSystemsResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeSystemRequestShape' => [
            'type' => 'structure',
            'members' => [
                'systemId' => [ 'type' => 'string', 'locationName' => 'systemId', ],
            ],
        ],
        'DescribeSystemResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeSystemResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DeleteSystemResultShape' => [
            'type' => 'structure',
            'members' => [
                'value' => [ 'type' => 'string', 'locationName' => 'value', ],
            ],
        ],
        'UpdateSystemResultShape' => [
            'type' => 'structure',
            'members' => [
                'value' => [ 'type' => 'string', 'locationName' => 'value', ],
            ],
        ],
        'UpdateSystemResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'UpdateSystemResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DeleteSystemRequestShape' => [
            'type' => 'structure',
            'members' => [
                'systemId' => [ 'type' => 'string', 'locationName' => 'systemId', ],
            ],
        ],
        'DescribeJosAppsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeJosAppsResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeJosAppsResultShape' => [
            'type' => 'structure',
            'members' => [
                'apps' => [ 'type' => 'list', 'member' => [ 'shape' => 'JosApp', ], ],
            ],
        ],
    ],
];
