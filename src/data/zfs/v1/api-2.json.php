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
        'FileSystem' => [
            'type' => 'structure',
            'members' => [
                'fileSystemId' => [ 'type' => 'string', 'locationName' => 'fileSystemId', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'numberOfMountTargets' => [ 'type' => 'integer', 'locationName' => 'numberOfMountTargets', ],
                'sizeByte' =>  [ 'shape' => 'SizeByte', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'dnsName' => [ 'type' => 'string', 'locationName' => 'dnsName', ],
            ],
        ],
        'SizeByte' => [
            'type' => 'structure',
            'members' => [
                'timestamp' => [ 'type' => 'string', 'locationName' => 'timestamp', ],
                'value' => [ 'type' => 'uint64', 'locationName' => 'value', ],
            ],
        ],
        'MountTarget' => [
            'type' => 'structure',
            'members' => [
                'fileSystemId' => [ 'type' => 'string', 'locationName' => 'fileSystemId', ],
                'ipAddress' => [ 'type' => 'string', 'locationName' => 'ipAddress', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'mountTargetId' => [ 'type' => 'string', 'locationName' => 'mountTargetId', ],
                'subnetId' => [ 'type' => 'string', 'locationName' => 'subnetId', ],
                'vpcId' => [ 'type' => 'string', 'locationName' => 'vpcId', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'dnsName' => [ 'type' => 'string', 'locationName' => 'dnsName', ],
            ],
        ],
        'Tag' => [
            'type' => 'structure',
            'members' => [
                'key' => [ 'type' => 'string', 'locationName' => 'key', ],
                'value' => [ 'type' => 'string', 'locationName' => 'value', ],
            ],
        ],
        'TagFilter' => [
            'type' => 'structure',
            'members' => [
                'key' => [ 'type' => 'string', 'locationName' => 'key', ],
                'values' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'CreateFileSystemResultShape' => [
            'type' => 'structure',
            'members' => [
                'fileSystemId' => [ 'type' => 'string', 'locationName' => 'fileSystemId', ],
            ],
        ],
        'DescribeFileSystemsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeFileSystemsResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'CreateFileSystemResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'CreateFileSystemResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DeleteFileSystemResponseShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DescribeFileSystemResultShape' => [
            'type' => 'structure',
            'members' => [
                'fileSystem' =>  [ 'shape' => 'FileSystem', ],
            ],
        ],
        'ModifyFileSystemAttributeResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'ModifyFileSystemAttributeRequestShape' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'fileSystemId' => [ 'type' => 'string', 'locationName' => 'fileSystemId', ],
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
        'DescribeFileSystemResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeFileSystemResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DeleteFileSystemResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'ModifyFileSystemAttributeResponseShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DescribeFileSystemRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'fileSystemId' => [ 'type' => 'string', 'locationName' => 'fileSystemId', ],
            ],
        ],
        'DeleteFileSystemRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'fileSystemId' => [ 'type' => 'string', 'locationName' => 'fileSystemId', ],
            ],
        ],
        'CreateFileSystemRequestShape' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'clientToken' => [ 'type' => 'string', 'locationName' => 'clientToken', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DescribeFileSystemsResultShape' => [
            'type' => 'structure',
            'members' => [
                'fileSystems' => [ 'type' => 'list', 'member' => [ 'shape' => 'FileSystem', ], ],
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
            ],
        ],
        'DescribeFileSystemsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'filters' => [ 'type' => 'list', 'member' => [ 'shape' => 'Filter', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'CreateMountTargetResultShape' => [
            'type' => 'structure',
            'members' => [
                'mountTargetId' => [ 'type' => 'string', 'locationName' => 'mountTargetId', ],
            ],
        ],
        'DeleteMountTargetResponseShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DescribeMountTargetResultShape' => [
            'type' => 'structure',
            'members' => [
                'mountTarget' =>  [ 'shape' => 'MountTarget', ],
            ],
        ],
        'DescribeMountTargetsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'filters' => [ 'type' => 'list', 'member' => [ 'shape' => 'Filter', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DescribeMountTargetsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeMountTargetsResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DeleteMountTargetResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DescribeMountTargetResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeMountTargetResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeMountTargetsResultShape' => [
            'type' => 'structure',
            'members' => [
                'mountTargets' => [ 'type' => 'list', 'member' => [ 'shape' => 'MountTarget', ], ],
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
            ],
        ],
        'CreateMountTargetRequestShape' => [
            'type' => 'structure',
            'members' => [
                'fileSystemId' => [ 'type' => 'string', 'locationName' => 'fileSystemId', ],
                'subnetId' => [ 'type' => 'string', 'locationName' => 'subnetId', ],
                'vpcId' => [ 'type' => 'string', 'locationName' => 'vpcId', ],
                'securityGroupId' => [ 'type' => 'string', 'locationName' => 'securityGroupId', ],
                'clientToken' => [ 'type' => 'string', 'locationName' => 'clientToken', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DeleteMountTargetRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'mountTargetId' => [ 'type' => 'string', 'locationName' => 'mountTargetId', ],
            ],
        ],
        'DescribeMountTargetRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'mountTargetId' => [ 'type' => 'string', 'locationName' => 'mountTargetId', ],
            ],
        ],
        'CreateMountTargetResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'CreateMountTargetResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
    ],
];
