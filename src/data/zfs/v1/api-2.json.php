<?php
// This file was auto-generated
return [
//    'version' => '',
    'metadata' =>
    [
//        'apiVersion' => '',
//        'endpointPrefix' => 'zfs',
        'protocol' => 'json',
//        'serviceFullName' => 'zfs',
//        'serviceId' => 'zfs',
    ],
    'operations' => [
        'DescribeFileSystems' => [
            'name' => 'DescribeFileSystems',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/fileSystems',
            ],
            'input' => [ 'shape' => 'DescribeFileSystemsRequestShape', ],
            'output' => [ 'shape' => 'DescribeFileSystemsResponseShape', ],
        ],
        'CreateFileSystem' => [
            'name' => 'CreateFileSystem',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/fileSystems',
            ],
            'input' => [ 'shape' => 'CreateFileSystemRequestShape', ],
            'output' => [ 'shape' => 'CreateFileSystemResponseShape', ],
        ],
        'DescribeFileSystem' => [
            'name' => 'DescribeFileSystem',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/fileSystems/{fileSystemId}',
            ],
            'input' => [ 'shape' => 'DescribeFileSystemRequestShape', ],
            'output' => [ 'shape' => 'DescribeFileSystemResponseShape', ],
        ],
        'ModifyFileSystemAttribute' => [
            'name' => 'ModifyFileSystemAttribute',
            'http' => [
                'method' => 'PATCH',
                'requestUri' => '/v1/regions/{regionId}/fileSystems/{fileSystemId}',
            ],
            'input' => [ 'shape' => 'ModifyFileSystemAttributeRequestShape', ],
            'output' => [ 'shape' => 'ModifyFileSystemAttributeResponseShape', ],
        ],
        'DeleteFileSystem' => [
            'name' => 'DeleteFileSystem',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/regions/{regionId}/fileSystems/{fileSystemId}',
            ],
            'input' => [ 'shape' => 'DeleteFileSystemRequestShape', ],
            'output' => [ 'shape' => 'DeleteFileSystemResponseShape', ],
        ],
        'DescribeMountTargets' => [
            'name' => 'DescribeMountTargets',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/mountTargets',
            ],
            'input' => [ 'shape' => 'DescribeMountTargetsRequestShape', ],
            'output' => [ 'shape' => 'DescribeMountTargetsResponseShape', ],
        ],
        'CreateMountTarget' => [
            'name' => 'CreateMountTarget',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/mountTargets',
            ],
            'input' => [ 'shape' => 'CreateMountTargetRequestShape', ],
            'output' => [ 'shape' => 'CreateMountTargetResponseShape', ],
        ],
        'DescribeMountTarget' => [
            'name' => 'DescribeMountTarget',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/mountTargets/{mountTargetId}',
            ],
            'input' => [ 'shape' => 'DescribeMountTargetRequestShape', ],
            'output' => [ 'shape' => 'DescribeMountTargetResponseShape', ],
        ],
        'DeleteMountTarget' => [
            'name' => 'DeleteMountTarget',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/regions/{regionId}/mountTargets/{mountTargetId}',
            ],
            'input' => [ 'shape' => 'DeleteMountTargetRequestShape', ],
            'output' => [ 'shape' => 'DeleteMountTargetResponseShape', ],
        ],
    ],
    'shapes' => [
    ],
];
