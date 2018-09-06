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
        'DescribeImages' => [
            'name' => 'DescribeImages',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/images',
            ],
            'input' => [ 'shape' => 'DescribeImagesRequestShape', ],
            'output' => [ 'shape' => 'DescribeImagesResponseShape', ],
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
        'CreateRegistry' => [
            'name' => 'CreateRegistry',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/registries',
            ],
            'input' => [ 'shape' => 'CreateRegistryRequestShape', ],
            'output' => [ 'shape' => 'CreateRegistryResponseShape', ],
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
                'imageSizeMB' => [ 'type' => 'integer', 'locationName' => 'imageSizeMB', ],
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
                'totalSpaceUsedMB' => [ 'type' => 'integer', 'locationName' => 'totalSpaceUsedMB', ],
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
                'totalSpaceUsedMB' => [ 'type' => 'integer', 'locationName' => 'totalSpaceUsedMB', ],
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
                'authorizationData' =>  [ 'shape' => 'AuthorizationData', ],
            ],
        ],
        'GetAuthorizationTokenResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'AuthorizationData', ],
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
        'DescribeImagesRequestShape' => [
            'type' => 'structure',
            'members' => [
                'filters' => [ 'type' => 'list', 'member' => [ 'shape' => 'Filter', ], ],
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
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
        'CreateRegistryResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'CreateRegistryResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'CreateRepositoryResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'CreateRepositoryResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'CreateRepositoryResultShape' => [
            'type' => 'structure',
            'members' => [
                'repository' =>  [ 'shape' => 'RepositoryShort', ],
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
    ],
];
