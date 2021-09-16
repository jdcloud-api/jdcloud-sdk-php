<?php
// This file was auto-generated
return [
//    'version' => '',
    'metadata' =>
    [
//        'apiVersion' => '',
//        'endpointPrefix' => 'containerregistry',
        'protocol' => 'json',
//        'serviceFullName' => 'containerregistry',
//        'serviceId' => 'containerregistry',
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
    ],
];
