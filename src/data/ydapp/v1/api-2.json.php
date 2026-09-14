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
        'ModifyApp' => [
            'name' => 'ModifyApp',
            'http' => [
                'method' => 'PUT',
                'requestUri' => '/v1/app/{appId}',
            ],
            'input' => [ 'shape' => 'ModifyAppRequestShape', ],
            'output' => [ 'shape' => 'ModifyAppResponseShape', ],
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
        'DescribeAppImageAutoDeletePolicy' => [
            'name' => 'DescribeAppImageAutoDeletePolicy',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/app/{appId}/image:autoDeletePolicy',
            ],
            'input' => [ 'shape' => 'DescribeAppImageAutoDeletePolicyRequestShape', ],
            'output' => [ 'shape' => 'DescribeAppImageAutoDeletePolicyResponseShape', ],
        ],
        'OpenAppImageAutoDelete' => [
            'name' => 'OpenAppImageAutoDelete',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/app/{appId}/image:openAutoDelete',
            ],
            'input' => [ 'shape' => 'OpenAppImageAutoDeleteRequestShape', ],
            'output' => [ 'shape' => 'OpenAppImageAutoDeleteResponseShape', ],
        ],
        'CloseAppImageAutoDelete' => [
            'name' => 'CloseAppImageAutoDelete',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/app/{appId}/image:closeAutoDelete',
            ],
            'input' => [ 'shape' => 'CloseAppImageAutoDeleteRequestShape', ],
            'output' => [ 'shape' => 'CloseAppImageAutoDeleteResponseShape', ],
        ],
        'CreatePipelineTask' => [
            'name' => 'CreatePipelineTask',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/app/{appId}/pipelinetask',
            ],
            'input' => [ 'shape' => 'CreatePipelineTaskRequestShape', ],
            'output' => [ 'shape' => 'CreatePipelineTaskResponseShape', ],
        ],
        'DescribeAppImages' => [
            'name' => 'DescribeAppImages',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/app/{appId}/images',
            ],
            'input' => [ 'shape' => 'DescribeAppImagesRequestShape', ],
            'output' => [ 'shape' => 'DescribeAppImagesResponseShape', ],
        ],
        'DeleteAppImage' => [
            'name' => 'DeleteAppImage',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/images/{uid}',
            ],
            'input' => [ 'shape' => 'DeleteAppImageRequestShape', ],
            'output' => [ 'shape' => 'DeleteAppImageResponseShape', ],
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
                'requestUri' => '/v1/clusters',
            ],
            'input' => [ 'shape' => 'DescribeClustersRequestShape', ],
            'output' => [ 'shape' => 'DescribeClustersResponseShape', ],
        ],
        'InstallClusterAddon' => [
            'name' => 'InstallClusterAddon',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/clusters/{k8sClusterId}/addon',
            ],
            'input' => [ 'shape' => 'InstallClusterAddonRequestShape', ],
            'output' => [ 'shape' => 'InstallClusterAddonResponseShape', ],
        ],
        'DescribeClusterAddons' => [
            'name' => 'DescribeClusterAddons',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/clusters/{k8sClusterId}/addons',
            ],
            'input' => [ 'shape' => 'DescribeClusterAddonsRequestShape', ],
            'output' => [ 'shape' => 'DescribeClusterAddonsResponseShape', ],
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
        'DescribeContainerLogs' => [
            'name' => 'DescribeContainerLogs',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/group/{groupId}/pod/{podName}/container/{containerName}/logs',
            ],
            'input' => [ 'shape' => 'DescribeContainerLogsRequestShape', ],
            'output' => [ 'shape' => 'DescribeContainerLogsResponseShape', ],
        ],
        'CreatePodDiagnosis' => [
            'name' => 'CreatePodDiagnosis',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/app/{appId}/group/{groupId}/pod-diagnoses',
            ],
            'input' => [ 'shape' => 'CreatePodDiagnosisRequestShape', ],
            'output' => [ 'shape' => 'CreatePodDiagnosisResponseShape', ],
        ],
        'DescribePodDiagnosis' => [
            'name' => 'DescribePodDiagnosis',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/pod-diagnoses/{diagnosisId}',
            ],
            'input' => [ 'shape' => 'DescribePodDiagnosisRequestShape', ],
            'output' => [ 'shape' => 'DescribePodDiagnosisResponseShape', ],
        ],
        'DescribeGroupVolumes' => [
            'name' => 'DescribeGroupVolumes',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/group/{groupId}/volumes',
            ],
            'input' => [ 'shape' => 'DescribeGroupVolumesRequestShape', ],
            'output' => [ 'shape' => 'DescribeGroupVolumesResponseShape', ],
        ],
        'ModifyGroupVolume' => [
            'name' => 'ModifyGroupVolume',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/group/{groupId}/volumes',
            ],
            'input' => [ 'shape' => 'ModifyGroupVolumeRequestShape', ],
            'output' => [ 'shape' => 'ModifyGroupVolumeResponseShape', ],
        ],
        'DescribeGroupTags' => [
            'name' => 'DescribeGroupTags',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/group/{groupId}/tags',
            ],
            'input' => [ 'shape' => 'DescribeGroupTagsRequestShape', ],
            'output' => [ 'shape' => 'DescribeGroupTagsResponseShape', ],
        ],
        'ModifyGroupTags' => [
            'name' => 'ModifyGroupTags',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/group/{groupId}/tags',
            ],
            'input' => [ 'shape' => 'ModifyGroupTagsRequestShape', ],
            'output' => [ 'shape' => 'ModifyGroupTagsResponseShape', ],
        ],
        'DescribeGroupAnnotations' => [
            'name' => 'DescribeGroupAnnotations',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/group/{groupId}/annotations',
            ],
            'input' => [ 'shape' => 'DescribeGroupAnnotationsRequestShape', ],
            'output' => [ 'shape' => 'DescribeGroupAnnotationsResponseShape', ],
        ],
        'ModifyGroupAnnotations' => [
            'name' => 'ModifyGroupAnnotations',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/group/{groupId}/annotations',
            ],
            'input' => [ 'shape' => 'ModifyGroupAnnotationsRequestShape', ],
            'output' => [ 'shape' => 'ModifyGroupAnnotationsResponseShape', ],
        ],
        'DescribeTaskPods' => [
            'name' => 'DescribeTaskPods',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/task/{taskId}/pods',
            ],
            'input' => [ 'shape' => 'DescribeTaskPodsRequestShape', ],
            'output' => [ 'shape' => 'DescribeTaskPodsResponseShape', ],
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
        'CreateAppGroup' => [
            'name' => 'CreateAppGroup',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/app/{appId}/group',
            ],
            'input' => [ 'shape' => 'CreateAppGroupRequestShape', ],
            'output' => [ 'shape' => 'CreateAppGroupResponseShape', ],
        ],
        'DeleteAppGroup' => [
            'name' => 'DeleteAppGroup',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/group/{groupId}',
            ],
            'input' => [ 'shape' => 'DeleteAppGroupRequestShape', ],
            'output' => [ 'shape' => 'DeleteAppGroupResponseShape', ],
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
        'ModifyContainerPort' => [
            'name' => 'ModifyContainerPort',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/app/{appId}/group/{groupId}:modifyContainerPort',
            ],
            'input' => [ 'shape' => 'ModifyContainerPortRequestShape', ],
            'output' => [ 'shape' => 'ModifyContainerPortResponseShape', ],
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
        'DescribePvcs' => [
            'name' => 'DescribePvcs',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/apps/{appId}/groups/{groupId}/pvcs',
            ],
            'input' => [ 'shape' => 'DescribePvcsRequestShape', ],
            'output' => [ 'shape' => 'DescribePvcsResponseShape', ],
        ],
        'DescribePvc' => [
            'name' => 'DescribePvc',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/apps/{appId}/groups/{groupId}/pvcs/{name}',
            ],
            'input' => [ 'shape' => 'DescribePvcRequestShape', ],
            'output' => [ 'shape' => 'DescribePvcResponseShape', ],
        ],
        'DeletePvc' => [
            'name' => 'DeletePvc',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/apps/{appId}/groups/{groupId}/pvcs/{name}',
            ],
            'input' => [ 'shape' => 'DeletePvcRequestShape', ],
            'output' => [ 'shape' => 'DeletePvcResponseShape', ],
        ],
        'CreatePvc' => [
            'name' => 'CreatePvc',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/pvc',
            ],
            'input' => [ 'shape' => 'CreatePvcRequestShape', ],
            'output' => [ 'shape' => 'CreatePvcResponseShape', ],
        ],
        'DescribeZfs' => [
            'name' => 'DescribeZfs',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/cluster/{clusterId}/zfs',
            ],
            'input' => [ 'shape' => 'DescribeZfsRequestShape', ],
            'output' => [ 'shape' => 'DescribeZfsResponseShape', ],
        ],
        'DescribePodVolumes' => [
            'name' => 'DescribePodVolumes',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/apps/{appId}/groups/{groupId}/volumes',
            ],
            'input' => [ 'shape' => 'DescribePodVolumesRequestShape', ],
            'output' => [ 'shape' => 'DescribePodVolumesResponseShape', ],
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
        'ModifySystem' => [
            'name' => 'ModifySystem',
            'http' => [
                'method' => 'PUT',
                'requestUri' => '/v1/system/{systemId}',
            ],
            'input' => [ 'shape' => 'ModifySystemRequestShape', ],
            'output' => [ 'shape' => 'ModifySystemResponseShape', ],
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
        'CreateAppSpec' => [
            'type' => 'structure',
            'members' => [
                'appKey' => [ 'type' => 'string', 'locationName' => 'appKey', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
                'systemId' => [ 'type' => 'string', 'locationName' => 'systemId', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'appLevel' => [ 'type' => 'integer', 'locationName' => 'appLevel', ],
                'stateful' => [ 'type' => 'boolean', 'locationName' => 'stateful', ],
                'language' => [ 'type' => 'string', 'locationName' => 'language', ],
            ],
        ],
        'ClusterAddonStatusSpec' => [
            'type' => 'structure',
            'members' => [
                'phase' => [ 'type' => 'string', 'locationName' => 'phase', ],
                'version' => [ 'type' => 'string', 'locationName' => 'version', ],
                'lastAddonVersion' => [ 'type' => 'string', 'locationName' => 'lastAddonVersion', ],
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
        'PodEventSpec' => [
            'type' => 'structure',
            'members' => [
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'source' => [ 'type' => 'string', 'locationName' => 'source', ],
                'subObject' => [ 'type' => 'string', 'locationName' => 'subObject', ],
                'count' => [ 'type' => 'integer', 'locationName' => 'count', ],
                'firstSeen' => [ 'type' => 'long', 'locationName' => 'firstSeen', ],
                'lastSeen' => [ 'type' => 'long', 'locationName' => 'lastSeen', ],
                'type' => [ 'type' => 'string', 'locationName' => 'type', ],
            ],
        ],
        'GroupVolumeSpec' => [
            'type' => 'structure',
            'members' => [
                'volumeType' => [ 'type' => 'string', 'locationName' => 'volumeType', ],
                'mountPath' => [ 'type' => 'string', 'locationName' => 'mountPath', ],
                'subpath' => [ 'type' => 'string', 'locationName' => 'subpath', ],
                'accessMode' => [ 'type' => 'string', 'locationName' => 'accessMode', ],
                'disk' => [ 'type' => 'double', 'locationName' => 'disk', ],
                'pvcName' => [ 'type' => 'string', 'locationName' => 'pvcName', ],
                'hpPath' => [ 'type' => 'string', 'locationName' => 'hpPath', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'templateName' => [ 'type' => 'string', 'locationName' => 'templateName', ],
                'scName' => [ 'type' => 'string', 'locationName' => 'scName', ],
            ],
        ],
        'GroupTagSpec' => [
            'type' => 'structure',
            'members' => [
                'tagKey' => [ 'type' => 'string', 'locationName' => 'tagKey', ],
                'tagValue' => [ 'type' => 'string', 'locationName' => 'tagValue', ],
            ],
        ],
        'PodMetricsSpec' => [
            'type' => 'structure',
            'members' => [
                'cpuUse' => [ 'type' => 'string', 'locationName' => 'cpuUse', ],
                'memoryUse' => [ 'type' => 'string', 'locationName' => 'memoryUse', ],
            ],
        ],
        'PodConditionSpec' => [
            'type' => 'structure',
            'members' => [
                'type' => [ 'type' => 'string', 'locationName' => 'type', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'lastProbeTime' => [ 'type' => 'string', 'locationName' => 'lastProbeTime', ],
                'lastTransitionTime' => [ 'type' => 'string', 'locationName' => 'lastTransitionTime', ],
                'reason' => [ 'type' => 'string', 'locationName' => 'reason', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
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
        'WeightedPodAffinityTerm' => [
            'type' => 'structure',
            'members' => [
                'podAffinityTerm' =>  [ 'shape' => 'PodAffinityTerm', ],
                'weight' => [ 'type' => 'integer', 'locationName' => 'weight', ],
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
        'LabelSelector' => [
            'type' => 'structure',
            'members' => [
                'matchExpressions' => [ 'type' => 'list', 'member' => [ 'shape' => 'MatchExpression', ], ],
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
        'PodAffinityTerm' => [
            'type' => 'structure',
            'members' => [
                'labelSelector' =>  [ 'shape' => 'LabelSelector', ],
                'topologyKey' => [ 'type' => 'string', 'locationName' => 'topologyKey', ],
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
        'ContainerPortSpec' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'port' => [ 'type' => 'integer', 'locationName' => 'port', ],
            ],
        ],
        'TaskHeader' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'value' => [ 'type' => 'string', 'locationName' => 'value', ],
            ],
        ],
        'MatchExpression' => [
            'type' => 'structure',
            'members' => [
                'key' => [ 'type' => 'string', 'locationName' => 'key', ],
                'operator' => [ 'type' => 'string', 'locationName' => 'operator', ],
                'values' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
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
        'ContainerPortSpecList' => [
            'type' => 'structure',
            'members' => [
                'ports' => [ 'type' => 'list', 'member' => [ 'shape' => 'ContainerPortSpec', ], ],
            ],
        ],
        'PodAntiAffinity' => [
            'type' => 'structure',
            'members' => [
                'requiredDuringSchedulingIgnoredDuringExecution' => [ 'type' => 'list', 'member' => [ 'shape' => 'PodAffinityTerm', ], ],
                'preferredDuringSchedulingIgnoredDuringExecution' => [ 'type' => 'list', 'member' => [ 'shape' => 'WeightedPodAffinityTerm', ], ],
            ],
        ],
        'GroupConfig' => [
            'type' => 'structure',
            'members' => [
                'groupName' => [ 'type' => 'string', 'locationName' => 'groupName', ],
                'cpu' => [ 'type' => 'double', 'locationName' => 'cpu', ],
                'memory' => [ 'type' => 'double', 'locationName' => 'memory', ],
                'requestCpu' => [ 'type' => 'double', 'locationName' => 'requestCpu', ],
                'requestMemory' => [ 'type' => 'double', 'locationName' => 'requestMemory', ],
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
        'PackageSbomReportSpec' => [
            'type' => 'structure',
            'members' => [
                'bannedComponentCount' => [ 'type' => 'integer', 'locationName' => 'bannedComponentCount', ],
                'bannedLicenseComponentCount' => [ 'type' => 'integer', 'locationName' => 'bannedLicenseComponentCount', ],
                'bannedLicenseCount' => [ 'type' => 'integer', 'locationName' => 'bannedLicenseCount', ],
                'bannedRuleCount' => [ 'type' => 'integer', 'locationName' => 'bannedRuleCount', ],
                'componentCompatibleList' => [ 'type' => 'list', 'member' => [ 'type' => 'object', ], ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'updateTime' => [ 'type' => 'string', 'locationName' => 'updateTime', ],
                'deleted' => [ 'type' => 'boolean', 'locationName' => 'deleted', ],
                'id' => [ 'type' => 'long', 'locationName' => 'id', ],
                'incompatibleComponentCount' => [ 'type' => 'integer', 'locationName' => 'incompatibleComponentCount', ],
                'incompatibleRuleCount' => [ 'type' => 'integer', 'locationName' => 'incompatibleRuleCount', ],
                'licenseCount' => [ 'type' => 'integer', 'locationName' => 'licenseCount', ],
                'packageCount' => [ 'type' => 'integer', 'locationName' => 'packageCount', ],
                'poisonedComponentCount' => [ 'type' => 'integer', 'locationName' => 'poisonedComponentCount', ],
                'poisonedRuleCount' => [ 'type' => 'integer', 'locationName' => 'poisonedRuleCount', ],
                'reportBannedComponentList' => [ 'type' => 'list', 'member' => [ 'type' => 'object', ], ],
                'reportBannedLicenseList' => [ 'type' => 'list', 'member' => [ 'type' => 'object', ], ],
                'reportPoisonedComponentList' => [ 'type' => 'list', 'member' => [ 'type' => 'object', ], ],
                'reportVulnComponentList' => [ 'type' => 'list', 'member' => [ 'type' => 'object', ], ],
                'sbomBase' => [ 'type' => 'object', 'locationName' => 'sbomBase', ],
                'sbomInfoId' => [ 'type' => 'long', 'locationName' => 'sbomInfoId', ],
                'sbomReportCombineId' => [ 'type' => 'long', 'locationName' => 'sbomReportCombineId', ],
                'softwareInfo' => [ 'type' => 'object', 'locationName' => 'softwareInfo', ],
                'status' => [ 'type' => 'integer', 'locationName' => 'status', ],
                'type' => [ 'type' => 'integer', 'locationName' => 'type', ],
                'vulnComponentCount' => [ 'type' => 'integer', 'locationName' => 'vulnComponentCount', ],
                'vulnCriticalCount' => [ 'type' => 'integer', 'locationName' => 'vulnCriticalCount', ],
                'vulnHighCount' => [ 'type' => 'integer', 'locationName' => 'vulnHighCount', ],
                'vulnLowCount' => [ 'type' => 'integer', 'locationName' => 'vulnLowCount', ],
                'vulnMiddleCount' => [ 'type' => 'integer', 'locationName' => 'vulnMiddleCount', ],
                'vulnTotalCount' => [ 'type' => 'integer', 'locationName' => 'vulnTotalCount', ],
                'vulnUnknowCount' => [ 'type' => 'integer', 'locationName' => 'vulnUnknowCount', ],
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
        'ZfsAvailableListVo' => [
            'type' => 'structure',
            'members' => [
                'fileSystemId' => [ 'type' => 'string', 'locationName' => 'fileSystemId', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'numberOfMountTargets' => [ 'type' => 'integer', 'locationName' => 'numberOfMountTargets', ],
                'sizeByte' =>  [ 'shape' => 'ZfsSizeByte', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'fileSystemType' => [ 'type' => 'string', 'locationName' => 'fileSystemType', ],
                'networkType' => [ 'type' => 'string', 'locationName' => 'networkType', ],
                'az' => [ 'type' => 'string', 'locationName' => 'az', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'dnsName' => [ 'type' => 'string', 'locationName' => 'dnsName', ],
                'tags' => [ 'type' => 'list', 'member' => [ 'shape' => 'ZfsTag', ], ],
                'resourceGroupId' => [ 'type' => 'string', 'locationName' => 'resourceGroupId', ],
                'quotaBytes' => [ 'type' => 'integer', 'locationName' => 'quotaBytes', ],
                'mountTargets' => [ 'type' => 'list', 'member' => [ 'shape' => 'ZfsMountTarget', ], ],
            ],
        ],
        'ZfsSizeByte' => [
            'type' => 'structure',
            'members' => [
                'timestamp' => [ 'type' => 'string', 'locationName' => 'timestamp', ],
                'value' => [ 'type' => 'long', 'locationName' => 'value', ],
            ],
        ],
        'CreatePvcSpec' => [
            'type' => 'structure',
            'members' => [
                'appId' => [ 'type' => 'string', 'locationName' => 'appId', ],
                'groupId' => [ 'type' => 'string', 'locationName' => 'groupId', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'fileSystemId' => [ 'type' => 'string', 'locationName' => 'fileSystemId', ],
                'mountTargetId' => [ 'type' => 'string', 'locationName' => 'mountTargetId', ],
                'ipAddress' => [ 'type' => 'string', 'locationName' => 'ipAddress', ],
                'storageGi' => [ 'type' => 'double', 'locationName' => 'storageGi', ],
                'path' => [ 'type' => 'string', 'locationName' => 'path', ],
            ],
        ],
        'ZfsMountTarget' => [
            'type' => 'structure',
            'members' => [
                'fileSystemId' => [ 'type' => 'string', 'locationName' => 'fileSystemId', ],
                'ipAddress' => [ 'type' => 'string', 'locationName' => 'ipAddress', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'mountTargetId' => [ 'type' => 'string', 'locationName' => 'mountTargetId', ],
                'subnetId' => [ 'type' => 'string', 'locationName' => 'subnetId', ],
                'vpcId' => [ 'type' => 'string', 'locationName' => 'vpcId', ],
                'securityGroupId' => [ 'type' => 'string', 'locationName' => 'securityGroupId', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'dnsName' => [ 'type' => 'string', 'locationName' => 'dnsName', ],
                'pseudo' => [ 'type' => 'string', 'locationName' => 'pseudo', ],
            ],
        ],
        'ZfsTag' => [
            'type' => 'structure',
            'members' => [
                'key' => [ 'type' => 'string', 'locationName' => 'key', ],
                'value' => [ 'type' => 'string', 'locationName' => 'value', ],
            ],
        ],
        'ModifySystemSpec' => [
            'type' => 'structure',
            'members' => [
                'systemName' => [ 'type' => 'string', 'locationName' => 'systemName', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
            ],
        ],
        'JosAppSpec' => [
            'type' => 'structure',
            'members' => [
                'appKey' => [ 'type' => 'string', 'locationName' => 'appKey', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
                'bizType' => [ 'type' => 'string', 'locationName' => 'bizType', ],
                'boundSystem' => [ 'type' => 'boolean', 'locationName' => 'boundSystem', ],
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
        'ModifyAppResultShape' => [
            'type' => 'structure',
            'members' => [
                'success' => [ 'type' => 'boolean', 'locationName' => 'success', ],
            ],
        ],
        'CreateAppResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'CreateAppResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
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
        'ModifyAppRequest' => [
            'type' => 'structure',
            'members' => [
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'appLevel' => [ 'type' => 'integer', 'locationName' => 'appLevel', ],
                'language' => [ 'type' => 'string', 'locationName' => 'language', ],
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
                'appId' => [ 'type' => 'string', 'locationName' => 'appId', ],
            ],
        ],
        'DeleteAppResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DeleteAppResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ModifyAppResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'ModifyAppResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeAppResultShape' => [
            'type' => 'structure',
            'members' => [
                'appId' => [ 'type' => 'string', 'locationName' => 'appId', ],
                'appKey' => [ 'type' => 'string', 'locationName' => 'appKey', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'appLevel' => [ 'type' => 'integer', 'locationName' => 'appLevel', ],
                'stateful' => [ 'type' => 'boolean', 'locationName' => 'stateful', ],
                'language' => [ 'type' => 'string', 'locationName' => 'language', ],
                'systemId' => [ 'type' => 'string', 'locationName' => 'systemId', ],
                'systemKey' => [ 'type' => 'string', 'locationName' => 'systemKey', ],
                'systemName' => [ 'type' => 'string', 'locationName' => 'systemName', ],
            ],
        ],
        'ModifyAppRequestShape' => [
            'type' => 'structure',
            'members' => [
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'appLevel' => [ 'type' => 'integer', 'locationName' => 'appLevel', ],
                'language' => [ 'type' => 'string', 'locationName' => 'language', ],
                'appId' => [ 'type' => 'string', 'locationName' => 'appId', ],
            ],
        ],
        'CreateAppRequestShape' => [
            'type' => 'structure',
            'members' => [
                'appKey' => [ 'type' => 'string', 'locationName' => 'appKey', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
                'systemId' => [ 'type' => 'string', 'locationName' => 'systemId', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'appLevel' => [ 'type' => 'integer', 'locationName' => 'appLevel', ],
                'stateful' => [ 'type' => 'boolean', 'locationName' => 'stateful', ],
                'language' => [ 'type' => 'string', 'locationName' => 'language', ],
            ],
        ],
        'DeleteAppResultShape' => [
            'type' => 'structure',
            'members' => [
                'success' => [ 'type' => 'boolean', 'locationName' => 'success', ],
            ],
        ],
        'DeletePackageRequestShape' => [
            'type' => 'structure',
            'members' => [
                'appId' => [ 'type' => 'string', 'locationName' => 'appId', ],
                'packageId' => [ 'type' => 'long', 'locationName' => 'packageId', ],
            ],
        ],
        'GetPackageDownloadInfoRequestShape' => [
            'type' => 'structure',
            'members' => [
                'appId' => [ 'type' => 'string', 'locationName' => 'appId', ],
                'packageId' => [ 'type' => 'long', 'locationName' => 'packageId', ],
            ],
        ],
        'DeleteAppImageResultShape' => [
            'type' => 'structure',
            'members' => [
                'success' => [ 'type' => 'boolean', 'locationName' => 'success', ],
            ],
        ],
        'OpenAppImageAutoDeleteResultShape' => [
            'type' => 'structure',
            'members' => [
                'success' => [ 'type' => 'boolean', 'locationName' => 'success', ],
            ],
        ],
        'DescribeAppImagesRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNum' => [ 'type' => 'integer', 'locationName' => 'pageNum', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'uid' => [ 'type' => 'string', 'locationName' => 'uid', ],
                'pipelineTaskId' => [ 'type' => 'string', 'locationName' => 'pipelineTaskId', ],
                'packageId' => [ 'type' => 'long', 'locationName' => 'packageId', ],
                'version' => [ 'type' => 'string', 'locationName' => 'version', ],
                'appId' => [ 'type' => 'string', 'locationName' => 'appId', ],
            ],
        ],
        'DescribeAppImagesResultShape' => [
            'type' => 'structure',
            'members' => [
                'data' => [ 'type' => 'list', 'member' => [ 'shape' => 'AppImageResult', ], ],
                'totalCount' => [ 'type' => 'long', 'locationName' => 'totalCount', ],
            ],
        ],
        'OpenAppImageAutoDeleteResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'OpenAppImageAutoDeleteResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DeletePackageResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DeletePackageResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'LinkPackageRequest' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'version' => [ 'type' => 'string', 'locationName' => 'version', ],
                'desc' => [ 'type' => 'string', 'locationName' => 'desc', ],
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
        'DescribeAppImageAutoDeletePolicyResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeAppImageAutoDeletePolicyResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'OpenAppImageAutoDeleteRequestShape' => [
            'type' => 'structure',
            'members' => [
                'limit' => [ 'type' => 'integer', 'locationName' => 'limit', ],
                'appId' => [ 'type' => 'string', 'locationName' => 'appId', ],
            ],
        ],
        'CloseAppImageAutoDeleteResultShape' => [
            'type' => 'structure',
            'members' => [
                'success' => [ 'type' => 'boolean', 'locationName' => 'success', ],
            ],
        ],
        'ScanPackageResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'ScanPackageResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
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
                'data' => [ 'type' => 'list', 'member' => [ 'shape' => 'BaseImageResult', ], ],
                'totalCount' => [ 'type' => 'long', 'locationName' => 'totalCount', ],
            ],
        ],
        'ListAppImageRequest' => [
            'type' => 'structure',
            'members' => [
                'pageNum' => [ 'type' => 'integer', 'locationName' => 'pageNum', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'uid' => [ 'type' => 'string', 'locationName' => 'uid', ],
                'pipelineTaskId' => [ 'type' => 'string', 'locationName' => 'pipelineTaskId', ],
                'packageId' => [ 'type' => 'long', 'locationName' => 'packageId', ],
                'version' => [ 'type' => 'string', 'locationName' => 'version', ],
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
                'packageId' => [ 'type' => 'long', 'locationName' => 'packageId', ],
            ],
        ],
        'DescribeAppImageAutoDeletePolicyResultShape' => [
            'type' => 'structure',
            'members' => [
                'quota' => [ 'type' => 'integer', 'locationName' => 'quota', ],
                'extraRetainCount' => [ 'type' => 'integer', 'locationName' => 'extraRetainCount', ],
                'autoDelete' => [ 'type' => 'string', 'locationName' => 'autoDelete', ],
                'autoDeleteLatestDate' => [ 'type' => 'string', 'locationName' => 'autoDeleteLatestDate', ],
            ],
        ],
        'DeleteAppImageResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DeleteAppImageResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeBaseImagesRequestShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DescribeAppImageAutoDeletePolicyRequestShape' => [
            'type' => 'structure',
            'members' => [
                'appId' => [ 'type' => 'string', 'locationName' => 'appId', ],
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
        'GenerateUploadUrlRequestShape' => [
            'type' => 'structure',
            'members' => [
                'fileName' => [ 'type' => 'string', 'locationName' => 'fileName', ],
                'appId' => [ 'type' => 'string', 'locationName' => 'appId', ],
            ],
        ],
        'DescribeAppImagesResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeAppImagesResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'PackageResult' => [
            'type' => 'structure',
            'members' => [
                'downUrl' => [ 'type' => 'string', 'locationName' => 'downUrl', ],
                'id' => [ 'type' => 'integer', 'locationName' => 'id', ],
                'appId' => [ 'type' => 'string', 'locationName' => 'appId', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'version' => [ 'type' => 'string', 'locationName' => 'version', ],
                'desc' => [ 'type' => 'string', 'locationName' => 'desc', ],
                'url' => [ 'type' => 'string', 'locationName' => 'url', ],
                'createTime' => [ 'type' => 'integer', 'locationName' => 'createTime', ],
                'updateTime' => [ 'type' => 'integer', 'locationName' => 'updateTime', ],
                'securityTaskId' => [ 'type' => 'long', 'locationName' => 'securityTaskId', ],
                'securityScanResult' => [ 'type' => 'string', 'locationName' => 'securityScanResult', ],
                'reportUrl' => [ 'type' => 'string', 'locationName' => 'reportUrl', ],
                'vulCountHigh' => [ 'type' => 'long', 'locationName' => 'vulCountHigh', ],
                'vulCountMedium' => [ 'type' => 'long', 'locationName' => 'vulCountMedium', ],
                'vulCountLow' => [ 'type' => 'long', 'locationName' => 'vulCountLow', ],
                'sbomReportVo' =>  [ 'shape' => 'PackageSbomReportSpec', ],
            ],
        ],
        'LinkPackageRequestShape' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'version' => [ 'type' => 'string', 'locationName' => 'version', ],
                'desc' => [ 'type' => 'string', 'locationName' => 'desc', ],
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
        'AppImageResult' => [
            'type' => 'structure',
            'members' => [
                'uid' => [ 'type' => 'string', 'locationName' => 'uid', ],
                'version' => [ 'type' => 'string', 'locationName' => 'version', ],
                'size' => [ 'type' => 'float', 'locationName' => 'size', ],
                'pipelineTaskId' => [ 'type' => 'string', 'locationName' => 'pipelineTaskId', ],
                'packageId' => [ 'type' => 'long', 'locationName' => 'packageId', ],
                'packageName' => [ 'type' => 'string', 'locationName' => 'packageName', ],
                'packageVersion' => [ 'type' => 'string', 'locationName' => 'packageVersion', ],
                'baseImageId' => [ 'type' => 'long', 'locationName' => 'baseImageId', ],
                'baseImageName' => [ 'type' => 'string', 'locationName' => 'baseImageName', ],
                'appId' => [ 'type' => 'string', 'locationName' => 'appId', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'updateTime' => [ 'type' => 'string', 'locationName' => 'updateTime', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
            ],
        ],
        'CreatePipelineTaskRequest' => [
            'type' => 'structure',
            'members' => [
                'baseImageUid' => [ 'type' => 'string', 'locationName' => 'baseImageUid', ],
                'packageId' => [ 'type' => 'long', 'locationName' => 'packageId', ],
            ],
        ],
        'CloseAppImageAutoDeleteRequestShape' => [
            'type' => 'structure',
            'members' => [
                'appId' => [ 'type' => 'string', 'locationName' => 'appId', ],
            ],
        ],
        'DeleteAppImageRequestShape' => [
            'type' => 'structure',
            'members' => [
                'uid' => [ 'type' => 'string', 'locationName' => 'uid', ],
            ],
        ],
        'CloseAppImageAutoDeleteResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'CloseAppImageAutoDeleteResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribePackagesResultShape' => [
            'type' => 'structure',
            'members' => [
                'data' => [ 'type' => 'list', 'member' => [ 'shape' => 'PackageResult', ], ],
                'totalCount' => [ 'type' => 'long', 'locationName' => 'totalCount', ],
            ],
        ],
        'CreatePipelineTaskResultShape' => [
            'type' => 'structure',
            'members' => [
                'pipelineTaskId' => [ 'type' => 'string', 'locationName' => 'pipelineTaskId', ],
            ],
        ],
        'CreatePipelineTaskRequestShape' => [
            'type' => 'structure',
            'members' => [
                'baseImageUid' => [ 'type' => 'string', 'locationName' => 'baseImageUid', ],
                'packageId' => [ 'type' => 'long', 'locationName' => 'packageId', ],
                'appId' => [ 'type' => 'string', 'locationName' => 'appId', ],
            ],
        ],
        'BaseImageResult' => [
            'type' => 'structure',
            'members' => [
                'uid' => [ 'type' => 'string', 'locationName' => 'uid', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'imgDigest' => [ 'type' => 'string', 'locationName' => 'imgDigest', ],
                'imgType' => [ 'type' => 'string', 'locationName' => 'imgType', ],
                'imgSecondType' => [ 'type' => 'string', 'locationName' => 'imgSecondType', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
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
        'ClusterResult' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'long', 'locationName' => 'id', ],
                'clusterId' => [ 'type' => 'long', 'locationName' => 'clusterId', ],
                'clusterName' => [ 'type' => 'string', 'locationName' => 'clusterName', ],
                'clusterUser' => [ 'type' => 'string', 'locationName' => 'clusterUser', ],
                'clusterEnvironment' => [ 'type' => 'string', 'locationName' => 'clusterEnvironment', ],
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
        'ClusterAddonResult' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'displayName' => [ 'type' => 'string', 'locationName' => 'displayName', ],
                'catalog' => [ 'type' => 'string', 'locationName' => 'catalog', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'type' => [ 'type' => 'string', 'locationName' => 'type', ],
                'status' =>  [ 'shape' => 'ClusterAddonStatusSpec', ],
            ],
        ],
        'InstallClusterAddonResultShape' => [
            'type' => 'structure',
            'members' => [
                'success' => [ 'type' => 'boolean', 'locationName' => 'success', ],
            ],
        ],
        'ListClustersRequest' => [
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
        'InstallClusterAddonResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'InstallClusterAddonResultShape', ],
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
        'DescribeClusterAddonsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeClusterAddonsResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'InstallClusterAddonRequestShape' => [
            'type' => 'structure',
            'members' => [
                'addon' => [ 'type' => 'string', 'locationName' => 'addon', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'k8sClusterId' => [ 'type' => 'string', 'locationName' => 'k8sClusterId', ],
            ],
        ],
        'InstallClusterAddonRequest' => [
            'type' => 'structure',
            'members' => [
                'addon' => [ 'type' => 'string', 'locationName' => 'addon', ],
            ],
        ],
        'DescribeClusterAddonsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNum' => [ 'type' => 'integer', 'locationName' => 'pageNum', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'k8sClusterId' => [ 'type' => 'string', 'locationName' => 'k8sClusterId', ],
            ],
        ],
        'DescribeClustersResultShape' => [
            'type' => 'structure',
            'members' => [
                'data' => [ 'type' => 'list', 'member' => [ 'shape' => 'ClusterResult', ], ],
                'totalCount' => [ 'type' => 'long', 'locationName' => 'totalCount', ],
            ],
        ],
        'DescribeClusterAddonsResultShape' => [
            'type' => 'structure',
            'members' => [
                'data' => [ 'type' => 'list', 'member' => [ 'shape' => 'ClusterAddonResult', ], ],
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
        'DescribeGroupTagsResultShape' => [
            'type' => 'structure',
            'members' => [
                'data' => [ 'type' => 'list', 'member' => [ 'shape' => 'GroupTagResult', ], ],
                'totalCount' => [ 'type' => 'long', 'locationName' => 'totalCount', ],
            ],
        ],
        'ModifyGroupVolumeRequest' => [
            'type' => 'structure',
            'members' => [
                'volumes' => [ 'type' => 'list', 'member' => [ 'shape' => 'GroupVolumeSpec', ], ],
            ],
        ],
        'ModifyGroupTagsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'ModifyGroupTagsResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ModifyGroupVolumeResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'ModifyGroupVolumeResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeTaskPodsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeTaskPodsResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeTaskPodsResultShape' => [
            'type' => 'structure',
            'members' => [
                'data' => [ 'type' => 'list', 'member' => [ 'shape' => 'PodResult', ], ],
                'totalCount' => [ 'type' => 'long', 'locationName' => 'totalCount', ],
            ],
        ],
        'DescribeGroupVolumesRequestShape' => [
            'type' => 'structure',
            'members' => [
                'groupId' => [ 'type' => 'string', 'locationName' => 'groupId', ],
            ],
        ],
        'DescribeTaskPodsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNum' => [ 'type' => 'integer', 'locationName' => 'pageNum', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'taskId' => [ 'type' => 'long', 'locationName' => 'taskId', ],
            ],
        ],
        'GroupTagResult' => [
            'type' => 'structure',
            'members' => [
                'tagKey' => [ 'type' => 'string', 'locationName' => 'tagKey', ],
                'tagValue' => [ 'type' => 'string', 'locationName' => 'tagValue', ],
            ],
        ],
        'CreatePodDiagnosisRequestShape' => [
            'type' => 'structure',
            'members' => [
                'podName' => [ 'type' => 'string', 'locationName' => 'podName', ],
                'taskId' => [ 'type' => 'long', 'locationName' => 'taskId', ],
                'appId' => [ 'type' => 'string', 'locationName' => 'appId', ],
                'groupId' => [ 'type' => 'string', 'locationName' => 'groupId', ],
            ],
        ],
        'ModifyGroupAnnotationsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'ModifyGroupAnnotationsResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ModifyGroupVolumeRequestShape' => [
            'type' => 'structure',
            'members' => [
                'volumes' => [ 'type' => 'list', 'member' => [ 'shape' => 'GroupVolumeSpec', ], ],
                'groupId' => [ 'type' => 'string', 'locationName' => 'groupId', ],
            ],
        ],
        'ModifyGroupTagsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'tags' => [ 'type' => 'list', 'member' => [ 'shape' => 'GroupTagSpec', ], ],
                'groupId' => [ 'type' => 'string', 'locationName' => 'groupId', ],
            ],
        ],
        'DescribePodDiagnosisResultShape' => [
            'type' => 'structure',
            'members' => [
                'diagnosisId' => [ 'type' => 'string', 'locationName' => 'diagnosisId', ],
                'data' => [ 'type' => 'object', 'locationName' => 'data', ],
                'queriedAt' => [ 'type' => 'long', 'locationName' => 'queriedAt', ],
                'expiresAt' => [ 'type' => 'long', 'locationName' => 'expiresAt', ],
                'pollIntervalSeconds' => [ 'type' => 'integer', 'locationName' => 'pollIntervalSeconds', ],
            ],
        ],
        'DescribeGroupTagsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeGroupTagsResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ModifyGroupAnnotationsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'tags' => [ 'type' => 'list', 'member' => [ 'shape' => 'GroupTagSpec', ], ],
                'groupId' => [ 'type' => 'string', 'locationName' => 'groupId', ],
            ],
        ],
        'CreatePodDiagnosisResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'CreatePodDiagnosisResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeContainerLogsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeContainerLogsResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeGroupAnnotationsResultShape' => [
            'type' => 'structure',
            'members' => [
                'data' => [ 'type' => 'list', 'member' => [ 'shape' => 'GroupTagResult', ], ],
                'totalCount' => [ 'type' => 'long', 'locationName' => 'totalCount', ],
            ],
        ],
        'DescribeGroupVolumesResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeGroupVolumesResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'PodResult' => [
            'type' => 'structure',
            'members' => [
                'podName' => [ 'type' => 'string', 'locationName' => 'podName', ],
                'reversion' => [ 'type' => 'string', 'locationName' => 'reversion', ],
                'podIp' => [ 'type' => 'string', 'locationName' => 'podIp', ],
                'hostIp' => [ 'type' => 'string', 'locationName' => 'hostIp', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'hostName' => [ 'type' => 'string', 'locationName' => 'hostName', ],
                'conditions' => [ 'type' => 'list', 'member' => [ 'shape' => 'PodConditionSpec', ], ],
                'metrics' =>  [ 'shape' => 'PodMetricsSpec', ],
                'events' => [ 'type' => 'list', 'member' => [ 'shape' => 'PodEventSpec', ], ],
                'createTime' => [ 'type' => 'long', 'locationName' => 'createTime', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
            ],
        ],
        'ModifyGroupTagsResultShape' => [
            'type' => 'structure',
            'members' => [
                'success' => [ 'type' => 'boolean', 'locationName' => 'success', ],
            ],
        ],
        'ModifyGroupAnnotationsResultShape' => [
            'type' => 'structure',
            'members' => [
                'success' => [ 'type' => 'boolean', 'locationName' => 'success', ],
            ],
        ],
        'ContainerLogResult' => [
            'type' => 'structure',
            'members' => [
                'timestamp' => [ 'type' => 'string', 'locationName' => 'timestamp', ],
                'content' => [ 'type' => 'string', 'locationName' => 'content', ],
            ],
        ],
        'DescribeContainerLogsResultShape' => [
            'type' => 'structure',
            'members' => [
                'data' => [ 'type' => 'list', 'member' => [ 'shape' => 'ContainerLogResult', ], ],
                'totalCount' => [ 'type' => 'long', 'locationName' => 'totalCount', ],
            ],
        ],
        'GroupVolumeResult' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'integer', 'locationName' => 'id', ],
                'groupId' => [ 'type' => 'string', 'locationName' => 'groupId', ],
                'createTime' => [ 'type' => 'long', 'locationName' => 'createTime', ],
                'updateTime' => [ 'type' => 'long', 'locationName' => 'updateTime', ],
                'volumeType' => [ 'type' => 'string', 'locationName' => 'volumeType', ],
                'mountPath' => [ 'type' => 'string', 'locationName' => 'mountPath', ],
                'subpath' => [ 'type' => 'string', 'locationName' => 'subpath', ],
                'accessMode' => [ 'type' => 'string', 'locationName' => 'accessMode', ],
                'disk' => [ 'type' => 'double', 'locationName' => 'disk', ],
                'pvcName' => [ 'type' => 'string', 'locationName' => 'pvcName', ],
                'hpPath' => [ 'type' => 'string', 'locationName' => 'hpPath', ],
                'hpType' => [ 'type' => 'string', 'locationName' => 'hpType', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
            ],
        ],
        'DescribeGroupAnnotationsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'groupId' => [ 'type' => 'string', 'locationName' => 'groupId', ],
            ],
        ],
        'ModifyGroupTagRequest' => [
            'type' => 'structure',
            'members' => [
                'tags' => [ 'type' => 'list', 'member' => [ 'shape' => 'GroupTagSpec', ], ],
            ],
        ],
        'DescribeContainerLogsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNum' => [ 'type' => 'integer', 'locationName' => 'pageNum', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'groupId' => [ 'type' => 'string', 'locationName' => 'groupId', ],
                'podName' => [ 'type' => 'string', 'locationName' => 'podName', ],
                'containerName' => [ 'type' => 'string', 'locationName' => 'containerName', ],
            ],
        ],
        'DescribePodDiagnosisRequestShape' => [
            'type' => 'structure',
            'members' => [
                'diagnosisId' => [ 'type' => 'string', 'locationName' => 'diagnosisId', ],
            ],
        ],
        'DescribePodDiagnosisResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribePodDiagnosisResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'CreatePodDiagnosisResultShape' => [
            'type' => 'structure',
            'members' => [
                'diagnosisId' => [ 'type' => 'string', 'locationName' => 'diagnosisId', ],
                'expiresAt' => [ 'type' => 'long', 'locationName' => 'expiresAt', ],
                'pollIntervalSeconds' => [ 'type' => 'integer', 'locationName' => 'pollIntervalSeconds', ],
            ],
        ],
        'DescribeGroupAnnotationsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeGroupAnnotationsResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ModifyGroupVolumeResultShape' => [
            'type' => 'structure',
            'members' => [
                'data' => [ 'type' => 'list', 'member' => [ 'shape' => 'GroupVolumeResult', ], ],
                'totalCount' => [ 'type' => 'long', 'locationName' => 'totalCount', ],
            ],
        ],
        'DescribeGroupVolumesResultShape' => [
            'type' => 'structure',
            'members' => [
                'data' => [ 'type' => 'list', 'member' => [ 'shape' => 'GroupVolumeResult', ], ],
                'totalCount' => [ 'type' => 'long', 'locationName' => 'totalCount', ],
            ],
        ],
        'DescribeGroupTagsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'groupId' => [ 'type' => 'string', 'locationName' => 'groupId', ],
            ],
        ],
        'CreatePodDiagnosisRequest' => [
            'type' => 'structure',
            'members' => [
                'podName' => [ 'type' => 'string', 'locationName' => 'podName', ],
                'taskId' => [ 'type' => 'long', 'locationName' => 'taskId', ],
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
        'CreateAppGroupRequest' => [
            'type' => 'structure',
            'members' => [
                'groupKey' => [ 'type' => 'string', 'locationName' => 'groupKey', ],
                'groupName' => [ 'type' => 'string', 'locationName' => 'groupName', ],
                'env' => [ 'type' => 'string', 'locationName' => 'env', ],
                'clusterId' => [ 'type' => 'long', 'locationName' => 'clusterId', ],
                'podCount' => [ 'type' => 'integer', 'locationName' => 'podCount', ],
                'cpu' => [ 'type' => 'double', 'locationName' => 'cpu', ],
                'memory' => [ 'type' => 'double', 'locationName' => 'memory', ],
                'requestCpu' => [ 'type' => 'double', 'locationName' => 'requestCpu', ],
                'requestMemory' => [ 'type' => 'double', 'locationName' => 'requestMemory', ],
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
                'groupKey' => [ 'type' => 'string', 'locationName' => 'groupKey', ],
                'groupName' => [ 'type' => 'string', 'locationName' => 'groupName', ],
                'env' => [ 'type' => 'string', 'locationName' => 'env', ],
                'clusterId' => [ 'type' => 'long', 'locationName' => 'clusterId', ],
                'podCount' => [ 'type' => 'integer', 'locationName' => 'podCount', ],
                'cpu' => [ 'type' => 'double', 'locationName' => 'cpu', ],
                'memory' => [ 'type' => 'double', 'locationName' => 'memory', ],
                'requestCpu' => [ 'type' => 'double', 'locationName' => 'requestCpu', ],
                'requestMemory' => [ 'type' => 'double', 'locationName' => 'requestMemory', ],
                'appId' => [ 'type' => 'string', 'locationName' => 'appId', ],
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
                'groupId' => [ 'type' => 'string', 'locationName' => 'groupId', ],
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
        'ModifyContainerPortResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'ModifyContainerPortResultShape', ],
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
        'ModifyContainerPortResultShape' => [
            'type' => 'structure',
            'members' => [
                'success' => [ 'type' => 'boolean', 'locationName' => 'success', ],
            ],
        ],
        'UpdateHealthCheckRequestShape' => [
            'type' => 'structure',
            'members' => [
                'groupName' => [ 'type' => 'string', 'locationName' => 'groupName', ],
                'cpu' => [ 'type' => 'double', 'locationName' => 'cpu', ],
                'memory' => [ 'type' => 'double', 'locationName' => 'memory', ],
                'requestCpu' => [ 'type' => 'double', 'locationName' => 'requestCpu', ],
                'requestMemory' => [ 'type' => 'double', 'locationName' => 'requestMemory', ],
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
                'cpu' => [ 'type' => 'double', 'locationName' => 'cpu', ],
                'memory' => [ 'type' => 'double', 'locationName' => 'memory', ],
                'requestCpu' => [ 'type' => 'double', 'locationName' => 'requestCpu', ],
                'requestMemory' => [ 'type' => 'double', 'locationName' => 'requestMemory', ],
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
                'podAntiAffinity' =>  [ 'shape' => 'PodAntiAffinity', ],
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
                'groupKey' => [ 'type' => 'string', 'locationName' => 'groupKey', ],
                'groupName' => [ 'type' => 'string', 'locationName' => 'groupName', ],
                'env' => [ 'type' => 'string', 'locationName' => 'env', ],
                'clusterId' => [ 'type' => 'long', 'locationName' => 'clusterId', ],
                'podCount' => [ 'type' => 'integer', 'locationName' => 'podCount', ],
                'cpu' => [ 'type' => 'double', 'locationName' => 'cpu', ],
                'memory' => [ 'type' => 'double', 'locationName' => 'memory', ],
                'requestCpu' => [ 'type' => 'double', 'locationName' => 'requestCpu', ],
                'requestMemory' => [ 'type' => 'double', 'locationName' => 'requestMemory', ],
                'appId' => [ 'type' => 'string', 'locationName' => 'appId', ],
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
                'cpu' => [ 'type' => 'double', 'locationName' => 'cpu', ],
                'memory' => [ 'type' => 'double', 'locationName' => 'memory', ],
                'requestCpu' => [ 'type' => 'double', 'locationName' => 'requestCpu', ],
                'requestMemory' => [ 'type' => 'double', 'locationName' => 'requestMemory', ],
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
        'ModifyContainerPortRequestShape' => [
            'type' => 'structure',
            'members' => [
                'ports' => [ 'type' => 'list', 'member' => [ 'shape' => 'ContainerPortSpec', ], ],
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
                'groupId' => [ 'type' => 'string', 'locationName' => 'groupId', ],
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
                'cpu' => [ 'type' => 'double', 'locationName' => 'cpu', ],
                'memory' => [ 'type' => 'double', 'locationName' => 'memory', ],
                'requestCpu' => [ 'type' => 'double', 'locationName' => 'requestCpu', ],
                'requestMemory' => [ 'type' => 'double', 'locationName' => 'requestMemory', ],
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
        'PodVolumeResult' => [
            'type' => 'structure',
            'members' => [
                'volumeType' => [ 'type' => 'string', 'locationName' => 'volumeType', ],
                'volumeName' => [ 'type' => 'string', 'locationName' => 'volumeName', ],
                'podName' => [ 'type' => 'string', 'locationName' => 'podName', ],
            ],
        ],
        'DescribeZfsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'clusterId' => [ 'type' => 'long', 'locationName' => 'clusterId', ],
            ],
        ],
        'DeletePvcResultShape' => [
            'type' => 'structure',
            'members' => [
                'success' => [ 'type' => 'boolean', 'locationName' => 'success', ],
            ],
        ],
        'DescribePodVolumesResultShape' => [
            'type' => 'structure',
            'members' => [
                'data' => [ 'type' => 'list', 'member' => [ 'shape' => 'PodVolumeResult', ], ],
                'totalCount' => [ 'type' => 'long', 'locationName' => 'totalCount', ],
            ],
        ],
        'DescribePvcsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'appId' => [ 'type' => 'string', 'locationName' => 'appId', ],
                'groupId' => [ 'type' => 'string', 'locationName' => 'groupId', ],
            ],
        ],
        'DeletePvcRequestShape' => [
            'type' => 'structure',
            'members' => [
                'appId' => [ 'type' => 'string', 'locationName' => 'appId', ],
                'groupId' => [ 'type' => 'string', 'locationName' => 'groupId', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
            ],
        ],
        'CreatePvcRequestShape' => [
            'type' => 'structure',
            'members' => [
                'appId' => [ 'type' => 'string', 'locationName' => 'appId', ],
                'groupId' => [ 'type' => 'string', 'locationName' => 'groupId', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'fileSystemId' => [ 'type' => 'string', 'locationName' => 'fileSystemId', ],
                'mountTargetId' => [ 'type' => 'string', 'locationName' => 'mountTargetId', ],
                'ipAddress' => [ 'type' => 'string', 'locationName' => 'ipAddress', ],
                'storageGi' => [ 'type' => 'double', 'locationName' => 'storageGi', ],
                'path' => [ 'type' => 'string', 'locationName' => 'path', ],
            ],
        ],
        'CreatePvcResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'CreatePvcResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeZfsResultShape' => [
            'type' => 'structure',
            'members' => [
                'data' => [ 'type' => 'list', 'member' => [ 'shape' => 'ZfsAvailableListVo', ], ],
                'totalCount' => [ 'type' => 'long', 'locationName' => 'totalCount', ],
            ],
        ],
        'DescribeZfsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeZfsResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribePvcRequestShape' => [
            'type' => 'structure',
            'members' => [
                'appId' => [ 'type' => 'string', 'locationName' => 'appId', ],
                'groupId' => [ 'type' => 'string', 'locationName' => 'groupId', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
            ],
        ],
        'DescribePvcResultShape' => [
            'type' => 'structure',
            'members' => [
                'mountId' => [ 'type' => 'string', 'locationName' => 'mountId', ],
                'cfsId' => [ 'type' => 'string', 'locationName' => 'cfsId', ],
                'mountIp' => [ 'type' => 'string', 'locationName' => 'mountIp', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'storageGi' => [ 'type' => 'double', 'locationName' => 'storageGi', ],
                'phase' => [ 'type' => 'string', 'locationName' => 'phase', ],
                'createTime' => [ 'type' => 'long', 'locationName' => 'createTime', ],
                'path' => [ 'type' => 'string', 'locationName' => 'path', ],
            ],
        ],
        'DeletePvcResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DeletePvcResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribePvcsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribePvcsResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribePodVolumesResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribePodVolumesResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribePvcResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribePvcResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'PvcDetailResult' => [
            'type' => 'structure',
            'members' => [
                'mountId' => [ 'type' => 'string', 'locationName' => 'mountId', ],
                'cfsId' => [ 'type' => 'string', 'locationName' => 'cfsId', ],
                'mountIp' => [ 'type' => 'string', 'locationName' => 'mountIp', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'storageGi' => [ 'type' => 'double', 'locationName' => 'storageGi', ],
                'phase' => [ 'type' => 'string', 'locationName' => 'phase', ],
                'createTime' => [ 'type' => 'long', 'locationName' => 'createTime', ],
                'path' => [ 'type' => 'string', 'locationName' => 'path', ],
            ],
        ],
        'DescribePodVolumesRequestShape' => [
            'type' => 'structure',
            'members' => [
                'appId' => [ 'type' => 'string', 'locationName' => 'appId', ],
                'groupId' => [ 'type' => 'string', 'locationName' => 'groupId', ],
            ],
        ],
        'DescribePvcsResultShape' => [
            'type' => 'structure',
            'members' => [
                'data' => [ 'type' => 'list', 'member' => [ 'shape' => 'PvcDetailResult', ], ],
                'totalCount' => [ 'type' => 'long', 'locationName' => 'totalCount', ],
            ],
        ],
        'CreatePvcResultShape' => [
            'type' => 'structure',
            'members' => [
                'success' => [ 'type' => 'boolean', 'locationName' => 'success', ],
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
                'data' => [ 'type' => 'list', 'member' => [ 'shape' => 'SystemResult', ], ],
                'totalCount' => [ 'type' => 'long', 'locationName' => 'totalCount', ],
            ],
        ],
        'ModifySystemResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'ModifySystemResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'CreateSystemResultShape' => [
            'type' => 'structure',
            'members' => [
                'systemId' => [ 'type' => 'string', 'locationName' => 'systemId', ],
                'vpcId' => [ 'type' => 'string', 'locationName' => 'vpcId', ],
                'systemKey' => [ 'type' => 'string', 'locationName' => 'systemKey', ],
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
        'ModifySystemResultShape' => [
            'type' => 'structure',
            'members' => [
                'value' => [ 'type' => 'string', 'locationName' => 'value', ],
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
        'ModifySystemRequestShape' => [
            'type' => 'structure',
            'members' => [
                'systemName' => [ 'type' => 'string', 'locationName' => 'systemName', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'systemId' => [ 'type' => 'string', 'locationName' => 'systemId', ],
            ],
        ],
        'ListSystemsRequest' => [
            'type' => 'structure',
            'members' => [
                'pageNum' => [ 'type' => 'integer', 'locationName' => 'pageNum', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
            ],
        ],
        'SystemResult' => [
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
                'apps' => [ 'type' => 'list', 'member' => [ 'shape' => 'JosAppSpec', ], ],
            ],
        ],
    ],
];
