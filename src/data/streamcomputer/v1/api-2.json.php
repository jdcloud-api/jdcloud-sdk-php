<?php
// This file was auto-generated
return [
//    'version' => '',
    'metadata' =>
    [
//        'apiVersion' => '',
//        'endpointPrefix' => 'streamcomputer',
        'protocol' => 'json',
//        'serviceFullName' => 'streamcomputer',
//        'serviceId' => 'streamcomputer',
    ],
    'operations' => [
        'DescribeJob' => [
            'name' => 'DescribeJob',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/job',
            ],
            'input' => [ 'shape' => 'DescribeJobRequestShape', ],
            'output' => [ 'shape' => 'DescribeJobResponseShape', ],
        ],
        'AddOrUpdateJob' => [
            'name' => 'AddOrUpdateJob',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/job',
            ],
            'input' => [ 'shape' => 'AddOrUpdateJobRequestShape', ],
            'output' => [ 'shape' => 'AddOrUpdateJobResponseShape', ],
        ],
        'DeleteJob' => [
            'name' => 'DeleteJob',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/regions/{regionId}/job',
            ],
            'input' => [ 'shape' => 'DeleteJobRequestShape', ],
            'output' => [ 'shape' => 'DeleteJobResponseShape', ],
        ],
        'GetJobList' => [
            'name' => 'GetJobList',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/jobList',
            ],
            'input' => [ 'shape' => 'GetJobListRequestShape', ],
            'output' => [ 'shape' => 'GetJobListResponseShape', ],
        ],
        'StartJob' => [
            'name' => 'StartJob',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/job:start',
            ],
            'input' => [ 'shape' => 'StartJobRequestShape', ],
            'output' => [ 'shape' => 'StartJobResponseShape', ],
        ],
        'StopJob' => [
            'name' => 'StopJob',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/job:stop',
            ],
            'input' => [ 'shape' => 'StopJobRequestShape', ],
            'output' => [ 'shape' => 'StopJobResponseShape', ],
        ],
        'QueryNamespaces' => [
            'name' => 'QueryNamespaces',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/namespaces',
            ],
            'input' => [ 'shape' => 'QueryNamespacesRequestShape', ],
            'output' => [ 'shape' => 'QueryNamespacesResponseShape', ],
        ],
        'QueryNamespaceDetail' => [
            'name' => 'QueryNamespaceDetail',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/namespaceDetail',
            ],
            'input' => [ 'shape' => 'QueryNamespaceDetailRequestShape', ],
            'output' => [ 'shape' => 'QueryNamespaceDetailResponseShape', ],
        ],
        'CreateNamespace' => [
            'name' => 'CreateNamespace',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/namespace',
            ],
            'input' => [ 'shape' => 'CreateNamespaceRequestShape', ],
            'output' => [ 'shape' => 'CreateNamespaceResponseShape', ],
        ],
        'UpdateNamespace' => [
            'name' => 'UpdateNamespace',
            'http' => [
                'method' => 'PUT',
                'requestUri' => '/v1/regions/{regionId}/namespace',
            ],
            'input' => [ 'shape' => 'UpdateNamespaceRequestShape', ],
            'output' => [ 'shape' => 'UpdateNamespaceResponseShape', ],
        ],
        'DeleteNamespace' => [
            'name' => 'DeleteNamespace',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/regions/{regionId}/namespace',
            ],
            'input' => [ 'shape' => 'DeleteNamespaceRequestShape', ],
            'output' => [ 'shape' => 'DeleteNamespaceResponseShape', ],
        ],
        'DescribeStorage' => [
            'name' => 'DescribeStorage',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/storage',
            ],
            'input' => [ 'shape' => 'DescribeStorageRequestShape', ],
            'output' => [ 'shape' => 'DescribeStorageResponseShape', ],
        ],
        'AddOrUpdateStorage' => [
            'name' => 'AddOrUpdateStorage',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/storage',
            ],
            'input' => [ 'shape' => 'AddOrUpdateStorageRequestShape', ],
            'output' => [ 'shape' => 'AddOrUpdateStorageResponseShape', ],
        ],
        'DeleteStorage' => [
            'name' => 'DeleteStorage',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/regions/{regionId}/storage',
            ],
            'input' => [ 'shape' => 'DeleteStorageRequestShape', ],
            'output' => [ 'shape' => 'DeleteStorageResponseShape', ],
        ],
        'GetStorageList' => [
            'name' => 'GetStorageList',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/storageList',
            ],
            'input' => [ 'shape' => 'GetStorageListRequestShape', ],
            'output' => [ 'shape' => 'GetStorageListResponseShape', ],
        ],
    ],
    'shapes' => [
    ],
];
