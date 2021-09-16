<?php
// This file was auto-generated
return [
//    'version' => '',
    'metadata' =>
    [
//        'apiVersion' => '',
//        'endpointPrefix' => 'nc',
        'protocol' => 'json',
//        'serviceFullName' => 'nc',
//        'serviceId' => 'nc',
    ],
    'operations' => [
        'DescribeContainers' => [
            'name' => 'DescribeContainers',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/containers',
            ],
            'input' => [ 'shape' => 'DescribeContainersRequestShape', ],
            'output' => [ 'shape' => 'DescribeContainersResponseShape', ],
        ],
        'CreateContainers' => [
            'name' => 'CreateContainers',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/containers',
            ],
            'input' => [ 'shape' => 'CreateContainersRequestShape', ],
            'output' => [ 'shape' => 'CreateContainersResponseShape', ],
        ],
        'DescribeContainer' => [
            'name' => 'DescribeContainer',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/containers/{containerId}',
            ],
            'input' => [ 'shape' => 'DescribeContainerRequestShape', ],
            'output' => [ 'shape' => 'DescribeContainerResponseShape', ],
        ],
        'DeleteContainer' => [
            'name' => 'DeleteContainer',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/regions/{regionId}/containers/{containerId}',
            ],
            'input' => [ 'shape' => 'DeleteContainerRequestShape', ],
            'output' => [ 'shape' => 'DeleteContainerResponseShape', ],
        ],
        'StartContainer' => [
            'name' => 'StartContainer',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/containers/{containerId}:startContainer',
            ],
            'input' => [ 'shape' => 'StartContainerRequestShape', ],
            'output' => [ 'shape' => 'StartContainerResponseShape', ],
        ],
        'StopContainer' => [
            'name' => 'StopContainer',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/containers/{containerId}:stopContainer',
            ],
            'input' => [ 'shape' => 'StopContainerRequestShape', ],
            'output' => [ 'shape' => 'StopContainerResponseShape', ],
        ],
        'ModifyContainerAttribute' => [
            'name' => 'ModifyContainerAttribute',
            'http' => [
                'method' => 'PATCH',
                'requestUri' => '/v1/regions/{regionId}/containers/{containerId}:modifyContainerAttribute',
            ],
            'input' => [ 'shape' => 'ModifyContainerAttributeRequestShape', ],
            'output' => [ 'shape' => 'ModifyContainerAttributeResponseShape', ],
        ],
        'AssociateElasticIp' => [
            'name' => 'AssociateElasticIp',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/containers/{containerId}:associateElasticIp',
            ],
            'input' => [ 'shape' => 'AssociateElasticIpRequestShape', ],
            'output' => [ 'shape' => 'AssociateElasticIpResponseShape', ],
        ],
        'DisassociateElasticIp' => [
            'name' => 'DisassociateElasticIp',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/containers/{containerId}:disassociateElasticIp',
            ],
            'input' => [ 'shape' => 'DisassociateElasticIpRequestShape', ],
            'output' => [ 'shape' => 'DisassociateElasticIpResponseShape', ],
        ],
        'GetLogs' => [
            'name' => 'GetLogs',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/containers/{containerId}:getLogs',
            ],
            'input' => [ 'shape' => 'GetLogsRequestShape', ],
            'output' => [ 'shape' => 'GetLogsResponseShape', ],
        ],
        'DescribeQuota' => [
            'name' => 'DescribeQuota',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/quotas',
            ],
            'input' => [ 'shape' => 'DescribeQuotaRequestShape', ],
            'output' => [ 'shape' => 'DescribeQuotaResponseShape', ],
        ],
        'DescribeSecrets' => [
            'name' => 'DescribeSecrets',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/secrets',
            ],
            'input' => [ 'shape' => 'DescribeSecretsRequestShape', ],
            'output' => [ 'shape' => 'DescribeSecretsResponseShape', ],
        ],
        'CreateSecret' => [
            'name' => 'CreateSecret',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/secrets',
            ],
            'input' => [ 'shape' => 'CreateSecretRequestShape', ],
            'output' => [ 'shape' => 'CreateSecretResponseShape', ],
        ],
        'DescribeSecret' => [
            'name' => 'DescribeSecret',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/secrets/{name}',
            ],
            'input' => [ 'shape' => 'DescribeSecretRequestShape', ],
            'output' => [ 'shape' => 'DescribeSecretResponseShape', ],
        ],
        'DeleteSecret' => [
            'name' => 'DeleteSecret',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/regions/{regionId}/secrets/{name}',
            ],
            'input' => [ 'shape' => 'DeleteSecretRequestShape', ],
            'output' => [ 'shape' => 'DeleteSecretResponseShape', ],
        ],
    ],
    'shapes' => [
    ],
];
