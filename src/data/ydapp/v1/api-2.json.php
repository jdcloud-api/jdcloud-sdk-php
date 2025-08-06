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
        'DescribeGroups' => [
            'name' => 'DescribeGroups',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/app/{appId}/groups',
            ],
            'input' => [ 'shape' => 'DescribeGroupsRequestShape', ],
            'output' => [ 'shape' => 'DescribeGroupsResponseShape', ],
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
        'DescribeDeployTaskResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeDeployTaskResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
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
        'DescribeDeployTaskRequestShape' => [
            'type' => 'structure',
            'members' => [
                'appId' => [ 'type' => 'string', 'locationName' => 'appId', ],
                'deployId' => [ 'type' => 'long', 'locationName' => 'deployId', ],
                'groupId' => [ 'type' => 'string', 'locationName' => 'groupId', ],
            ],
        ],
        'StopDeployTaskResultShape' => [
            'type' => 'structure',
            'members' => [
                'success' => [ 'type' => 'boolean', 'locationName' => 'success', ],
            ],
        ],
        'DeployResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DeployResultShape', ],
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
        'DescribeGroupsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeGroupsResultShape', ],
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
        'DescribeGroupsResultShape' => [
            'type' => 'structure',
            'members' => [
                'data' => [ 'type' => 'list', 'member' => [ 'shape' => 'Group', ], ],
                'totalCount' => [ 'type' => 'long', 'locationName' => 'totalCount', ],
            ],
        ],
    ],
];
