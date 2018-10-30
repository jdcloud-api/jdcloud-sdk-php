<?php
// This file was auto-generated
return [
//    'version' => '',
    'metadata' =>
    [
//        'apiVersion' => '',
//        'endpointPrefix' => 'cr',
        'protocol' => 'json',
//        'serviceFullName' => 'cr',
//        'serviceId' => 'cr',
    ],
    'operations' => [
        'GetAuthorizationToken' => [
            'name' => 'GetAuthorizationToken',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/registries/{registryName}:getAuthorizationToken',
            ],
            'input' => [ 'shape' => 'GetAuthorizationTokenRequestShape', ],
            'output' => [ 'shape' => 'GetAuthorizationTokenResponseShape', ],
        ],
        'DescribeAuthorizationTokens' => [
            'name' => 'DescribeAuthorizationTokens',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/registries/{registryName}/tokens',
            ],
            'input' => [ 'shape' => 'DescribeAuthorizationTokensRequestShape', ],
            'output' => [ 'shape' => 'DescribeAuthorizationTokensResponseShape', ],
        ],
        'ReleaseAuthorizationToken' => [
            'name' => 'ReleaseAuthorizationToken',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/registries/{registryName}:releaseAuthorizationToken',
            ],
            'input' => [ 'shape' => 'ReleaseAuthorizationTokenRequestShape', ],
            'output' => [ 'shape' => 'ReleaseAuthorizationTokenResponseShape', ],
        ],
        'DescribeImages' => [
            'name' => 'DescribeImages',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/images',
            ],
            'input' => [ 'shape' => 'DescribeImagesRequestShape', ],
            'output' => [ 'shape' => 'DescribeImagesResponseShape', ],
        ],
        'DeleteImage' => [
            'name' => 'DeleteImage',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/registries/{registryName}/repositories/{repositoryName}:deleteImage',
            ],
            'input' => [ 'shape' => 'DeleteImageRequestShape', ],
            'output' => [ 'shape' => 'DeleteImageResponseShape', ],
        ],
        'DescribeQuotas' => [
            'name' => 'DescribeQuotas',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/quotas',
            ],
            'input' => [ 'shape' => 'DescribeQuotasRequestShape', ],
            'output' => [ 'shape' => 'DescribeQuotasResponseShape', ],
        ],
        'DescribeRegistries' => [
            'name' => 'DescribeRegistries',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/registries',
            ],
            'input' => [ 'shape' => 'DescribeRegistriesRequestShape', ],
            'output' => [ 'shape' => 'DescribeRegistriesResponseShape', ],
        ],
        'CreateRegistry' => [
            'name' => 'CreateRegistry',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/registries',
            ],
            'input' => [ 'shape' => 'CreateRegistryRequestShape', ],
            'output' => [ 'shape' => 'CreateRegistryResponseShape', ],
        ],
        'DescribeRegistry' => [
            'name' => 'DescribeRegistry',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/registries/{registryName}',
            ],
            'input' => [ 'shape' => 'DescribeRegistryRequestShape', ],
            'output' => [ 'shape' => 'DescribeRegistryResponseShape', ],
        ],
        'DeleteRegistry' => [
            'name' => 'DeleteRegistry',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/regions/{regionId}/registries/{registryName}',
            ],
            'input' => [ 'shape' => 'DeleteRegistryRequestShape', ],
            'output' => [ 'shape' => 'DeleteRegistryResponseShape', ],
        ],
        'CheckRegistryName' => [
            'name' => 'CheckRegistryName',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/registries:checkRegistryName',
            ],
            'input' => [ 'shape' => 'CheckRegistryNameRequestShape', ],
            'output' => [ 'shape' => 'CheckRegistryNameResponseShape', ],
        ],
        'CreateRepository' => [
            'name' => 'CreateRepository',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/registries/{registryName}/repositories',
            ],
            'input' => [ 'shape' => 'CreateRepositoryRequestShape', ],
            'output' => [ 'shape' => 'CreateRepositoryResponseShape', ],
        ],
        'DescribeRepositories' => [
            'name' => 'DescribeRepositories',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/listRepositories',
            ],
            'input' => [ 'shape' => 'DescribeRepositoriesRequestShape', ],
            'output' => [ 'shape' => 'DescribeRepositoriesResponseShape', ],
        ],
        'DeleteRepository' => [
            'name' => 'DeleteRepository',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/regions/{regionId}/registries/{registryName}/repositories/{repositoryName}',
            ],
            'input' => [ 'shape' => 'DeleteRepositoryRequestShape', ],
            'output' => [ 'shape' => 'DeleteRepositoryResponseShape', ],
        ],
        'CheckRepositoryName' => [
            'name' => 'CheckRepositoryName',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/repositories:checkRepositoryName',
            ],
            'input' => [ 'shape' => 'CheckRepositoryNameRequestShape', ],
            'output' => [ 'shape' => 'CheckRepositoryNameResponseShape', ],
        ],
    ],
    'shapes' => [
        'AuthorizationData' => [
            'type' => 'structure',
            'members' => [
                'authorizationToken' => [ 'type' => 'string', 'locationName' => 'authorizationToken', ],
                'loginCmdLine' => [ 'type' => 'string', 'locationName' => 'loginCmdLine', ],
                'expiresAt' => [ 'type' => 'string', 'locationName' => 'expiresAt', ],
            ],
        ],
        'ImageDetail' => [
            'type' => 'structure',
            'members' => [
                'registryName' => [ 'type' => 'string', 'locationName' => 'registryName', ],
                'repositoryName' => [ 'type' => 'string', 'locationName' => 'repositoryName', ],
                'imageDigest' => [ 'type' => 'string', 'locationName' => 'imageDigest', ],
                'imageManifest' => [ 'type' => 'string', 'locationName' => 'imageManifest', ],
                'imagePushedAt' => [ 'type' => 'string', 'locationName' => 'imagePushedAt', ],
                'imageSizeMB' => [ 'type' => 'double', 'locationName' => 'imageSizeMB', ],
                'imageTags' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'lastPullAt' => [ 'type' => 'string', 'locationName' => 'lastPullAt', ],
                'totalPullTimes' => [ 'type' => 'integer', 'locationName' => 'totalPullTimes', ],
            ],
        ],
        'Quota' => [
            'type' => 'structure',
            'members' => [
                'resourceType' => [ 'type' => 'string', 'locationName' => 'resourceType', ],
                'limit' => [ 'type' => 'integer', 'locationName' => 'limit', ],
                'used' => [ 'type' => 'integer', 'locationName' => 'used', ],
            ],
        ],
        'Registry' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'registryUri' => [ 'type' => 'string', 'locationName' => 'registryUri', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'totalSpaceUsedMB' => [ 'type' => 'double', 'locationName' => 'totalSpaceUsedMB', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
            ],
        ],
        'Repository' => [
            'type' => 'structure',
            'members' => [
                'createdAt' => [ 'type' => 'string', 'locationName' => 'createdAt', ],
                'updatedAt' => [ 'type' => 'string', 'locationName' => 'updatedAt', ],
                'registryName' => [ 'type' => 'string', 'locationName' => 'registryName', ],
                'repositoryName' => [ 'type' => 'string', 'locationName' => 'repositoryName', ],
                'repositoryUri' => [ 'type' => 'string', 'locationName' => 'repositoryUri', ],
                'totalSpaceUsedMB' => [ 'type' => 'double', 'locationName' => 'totalSpaceUsedMB', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
            ],
        ],
        'RepositoryShort' => [
            'type' => 'structure',
            'members' => [
                'createdAt' => [ 'type' => 'string', 'locationName' => 'createdAt', ],
                'repositoryName' => [ 'type' => 'string', 'locationName' => 'repositoryName', ],
                'repositoryUri' => [ 'type' => 'string', 'locationName' => 'repositoryUri', ],
            ],
        ],
        'DescribeAuthorizationTokensRequestShape' => [
            'type' => 'structure',
            'members' => [
                'filters' => [ 'type' => 'list', 'member' => [ 'shape' => 'Filter', ], ],
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'registryName' => [ 'type' => 'string', 'locationName' => 'registryName', ],
            ],
        ],
        'ReleaseAuthorizationTokenResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ReleaseAuthorizationTokenRequestShape' => [
            'type' => 'structure',
            'members' => [
                'authorizationToken' => [ 'type' => 'string', 'locationName' => 'authorizationToken', ],
                'forceAll' => [ 'type' => 'boolean', 'locationName' => 'forceAll', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'registryName' => [ 'type' => 'string', 'locationName' => 'registryName', ],
            ],
        ],
        'GetAuthorizationTokenRequestShape' => [
            'type' => 'structure',
            'members' => [
                'expiredAfterHours' => [ 'type' => 'integer', 'locationName' => 'expiredAfterHours', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'registryName' => [ 'type' => 'string', 'locationName' => 'registryName', ],
            ],
        ],
        'GetAuthorizationTokenResultShape' => [
            'type' => 'structure',
            'members' => [
                'authorizationToken' => [ 'type' => 'string', 'locationName' => 'authorizationToken', ],
                'loginCmdLine' => [ 'type' => 'string', 'locationName' => 'loginCmdLine', ],
                'expiresAt' => [ 'type' => 'string', 'locationName' => 'expiresAt', ],
            ],
        ],
        'GetAuthorizationTokenResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GetAuthorizationTokenResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeAuthorizationTokensResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeAuthorizationTokensResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeAuthorizationTokensResultShape' => [
            'type' => 'structure',
            'members' => [
                'authorizationTokens' => [ 'type' => 'list', 'member' => [ 'shape' => 'AuthorizationData', ], ],
                'totalCount' => [ 'type' => 'double', 'locationName' => 'totalCount', ],
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
        'ReleaseAuthorizationTokenResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DescribeImagesRequestShape' => [
            'type' => 'structure',
            'members' => [
                'filters' => [ 'type' => 'list', 'member' => [ 'shape' => 'Filter', ], ],
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DeleteImageRequestShape' => [
            'type' => 'structure',
            'members' => [
                'imageDigest' => [ 'type' => 'string', 'locationName' => 'imageDigest', ],
                'imageTag' => [ 'type' => 'string', 'locationName' => 'imageTag', ],
                'imageTagStatus' => [ 'type' => 'string', 'locationName' => 'imageTagStatus', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'registryName' => [ 'type' => 'string', 'locationName' => 'registryName', ],
                'repositoryName' => [ 'type' => 'string', 'locationName' => 'repositoryName', ],
            ],
        ],
        'DeleteImageResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeImagesResultShape' => [
            'type' => 'structure',
            'members' => [
                'imageDetails' => [ 'type' => 'list', 'member' => [ 'shape' => 'ImageDetail', ], ],
                'totalCount' => [ 'type' => 'double', 'locationName' => 'totalCount', ],
            ],
        ],
        'DescribeImagesResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeImagesResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DeleteImageResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DescribeQuotasResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeQuotasResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeQuotasResultShape' => [
            'type' => 'structure',
            'members' => [
                'quotas' => [ 'type' => 'list', 'member' => [ 'shape' => 'Quota', ], ],
            ],
        ],
        'DescribeQuotasRequestShape' => [
            'type' => 'structure',
            'members' => [
                'filters' => [ 'type' => 'list', 'member' => [ 'shape' => 'Filter', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DeleteRegistryResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'CheckRegistryNameResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'CheckRegistryNameResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DeleteRegistryResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DeleteRegistryRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'registryName' => [ 'type' => 'string', 'locationName' => 'registryName', ],
            ],
        ],
        'CheckRegistryNameResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'integer', 'locationName' => 'code', ],
                'reason' => [ 'type' => 'string', 'locationName' => 'reason', ],
            ],
        ],
        'DescribeRegistriesResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeRegistriesResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'CheckRegistryNameRequestShape' => [
            'type' => 'structure',
            'members' => [
                'registryName' => [ 'type' => 'string', 'locationName' => 'registryName', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DescribeRegistryResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeRegistryResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeRegistriesResultShape' => [
            'type' => 'structure',
            'members' => [
                'registries' => [ 'type' => 'list', 'member' => [ 'shape' => 'Registry', ], ],
            ],
        ],
        'DescribeRegistryRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'registryName' => [ 'type' => 'string', 'locationName' => 'registryName', ],
            ],
        ],
        'CreateRegistryResultShape' => [
            'type' => 'structure',
            'members' => [
                'registry' =>  [ 'shape' => 'Registry', ],
            ],
        ],
        'CreateRegistryRequestShape' => [
            'type' => 'structure',
            'members' => [
                'registryName' => [ 'type' => 'string', 'locationName' => 'registryName', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DescribeRegistriesRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'CreateRegistryResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'CreateRegistryResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeRegistryResultShape' => [
            'type' => 'structure',
            'members' => [
                'registry' =>  [ 'shape' => 'Registry', ],
            ],
        ],
        'DescribeRepositoriesResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeRepositoriesResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DeleteRepositoryResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'CreateRepositoryResultShape' => [
            'type' => 'structure',
            'members' => [
                'repository' =>  [ 'shape' => 'RepositoryShort', ],
            ],
        ],
        'CheckRepositoryNameResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'integer', 'locationName' => 'code', ],
                'reason' => [ 'type' => 'string', 'locationName' => 'reason', ],
            ],
        ],
        'CreateRepositoryResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'CreateRepositoryResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeRepositoriesRequestShape' => [
            'type' => 'structure',
            'members' => [
                'filters' => [ 'type' => 'list', 'member' => [ 'shape' => 'Filter', ], ],
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DeleteRepositoryRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'registryName' => [ 'type' => 'string', 'locationName' => 'registryName', ],
                'repositoryName' => [ 'type' => 'string', 'locationName' => 'repositoryName', ],
            ],
        ],
        'CheckRepositoryNameRequestShape' => [
            'type' => 'structure',
            'members' => [
                'registryName' => [ 'type' => 'string', 'locationName' => 'registryName', ],
                'repositoryName' => [ 'type' => 'string', 'locationName' => 'repositoryName', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'CheckRepositoryNameResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'CheckRepositoryNameResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeRepositoriesResultShape' => [
            'type' => 'structure',
            'members' => [
                'repositories' => [ 'type' => 'list', 'member' => [ 'shape' => 'Repository', ], ],
                'totalCount' => [ 'type' => 'double', 'locationName' => 'totalCount', ],
            ],
        ],
        'CreateRepositoryRequestShape' => [
            'type' => 'structure',
            'members' => [
                'repositoryName' => [ 'type' => 'string', 'locationName' => 'repositoryName', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'registryName' => [ 'type' => 'string', 'locationName' => 'registryName', ],
            ],
        ],
        'DeleteRepositoryResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
    ],
];
