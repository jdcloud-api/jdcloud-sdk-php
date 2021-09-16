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
        'OkInfo' => [
            'type' => 'structure',
            'members' => [
                'status' => [ 'type' => 'boolean', 'locationName' => 'status', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
            ],
        ],
        'StorageParameter' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'integer', 'locationName' => 'id', ],
                'uid' => [ 'type' => 'string', 'locationName' => 'uid', ],
                'pKey' => [ 'type' => 'string', 'locationName' => 'pKey', ],
                'pValue' => [ 'type' => 'string', 'locationName' => 'pValue', ],
                'storageId' => [ 'type' => 'integer', 'locationName' => 'storageId', ],
                'deleted' => [ 'type' => 'byte', 'locationName' => 'deleted', ],
                'createTime' => [ 'type' => 'date', 'locationName' => 'createTime', ],
                'updateTime' => [ 'type' => 'date', 'locationName' => 'updateTime', ],
            ],
        ],
        'JobStr' => [
            'type' => 'structure',
            'members' => [
                'namespaceId' => [ 'type' => 'string', 'locationName' => 'namespaceId', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'resourceConsume' => [ 'type' => 'integer', 'locationName' => 'resourceConsume', ],
                'id' => [ 'type' => 'integer', 'locationName' => 'id', ],
                'uid' => [ 'type' => 'string', 'locationName' => 'uid', ],
                'status' => [ 'type' => 'byte', 'locationName' => 'status', ],
                'duration' => [ 'type' => 'integer', 'locationName' => 'duration', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
                'deleted' => [ 'type' => 'byte', 'locationName' => 'deleted', ],
                'createTime' => [ 'type' => 'date', 'locationName' => 'createTime', ],
                'updateTime' => [ 'type' => 'date', 'locationName' => 'updateTime', ],
                'userName' => [ 'type' => 'string', 'locationName' => 'userName', ],
                'sqlStatement' => [ 'type' => 'string', 'locationName' => 'sqlStatement', ],
                'jobType' => [ 'type' => 'string', 'locationName' => 'jobType', ],
            ],
        ],
        'Namespace' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'integer', 'locationName' => 'id', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'pods' => [ 'type' => 'string', 'locationName' => 'pods', ],
                'type' => [ 'type' => 'byte', 'locationName' => 'type', ],
                'typeValue' => [ 'type' => 'string', 'locationName' => 'typeValue', ],
                'deleted' => [ 'type' => 'byte', 'locationName' => 'deleted', ],
                'createTime' => [ 'type' => 'date', 'locationName' => 'createTime', ],
                'updateTime' => [ 'type' => 'date', 'locationName' => 'updateTime', ],
                'userName' => [ 'type' => 'string', 'locationName' => 'userName', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'sourceId' => [ 'type' => 'string', 'locationName' => 'sourceId', ],
                'resourceId' => [ 'type' => 'string', 'locationName' => 'resourceId', ],
                'podsUpdateTime' => [ 'type' => 'date', 'locationName' => 'podsUpdateTime', ],
            ],
        ],
        'Storage' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'integer', 'locationName' => 'id', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'uid' => [ 'type' => 'string', 'locationName' => 'uid', ],
                'type' => [ 'type' => 'string', 'locationName' => 'type', ],
                'storageType' => [ 'type' => 'string', 'locationName' => 'storageType', ],
                'userName' => [ 'type' => 'string', 'locationName' => 'userName', ],
                'createTime' => [ 'type' => 'date', 'locationName' => 'createTime', ],
                'updateTime' => [ 'type' => 'date', 'locationName' => 'updateTime', ],
                'namespaceId' => [ 'type' => 'string', 'locationName' => 'namespaceId', ],
                'deleted' => [ 'type' => 'byte', 'locationName' => 'deleted', ],
                'storageParameterList' => [ 'type' => 'list', 'member' => [ 'shape' => 'StorageParameter', ], ],
            ],
        ],
        'DeleteJobRequestShape' => [
            'type' => 'structure',
            'members' => [
                'namespaceId' => [ 'type' => 'string', 'locationName' => 'namespaceId', ],
                'jobId' => [ 'type' => 'integer', 'locationName' => 'jobId', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'GetJobListRequestShape' => [
            'type' => 'structure',
            'members' => [
                'namespaceId' => [ 'type' => 'string', 'locationName' => 'namespaceId', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'AddOrUpdateJobResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'AddOrUpdateJobResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeJobRequestShape' => [
            'type' => 'structure',
            'members' => [
                'jobId' => [ 'type' => 'integer', 'locationName' => 'jobId', ],
                'namespaceId' => [ 'type' => 'integer', 'locationName' => 'namespaceId', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'GetJobListResultShape' => [
            'type' => 'structure',
            'members' => [
                'data' => [ 'type' => 'list', 'member' => [ 'shape' => 'JobStr', ], ],
            ],
        ],
        'StopJobResultShape' => [
            'type' => 'structure',
            'members' => [
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
            ],
        ],
        'StopJobRequestShape' => [
            'type' => 'structure',
            'members' => [
                'namespaceId' => [ 'type' => 'string', 'locationName' => 'namespaceId', ],
                'jobId' => [ 'type' => 'integer', 'locationName' => 'jobId', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'AddOrUpdateJobRequestShape' => [
            'type' => 'structure',
            'members' => [
                'jobStr' =>  [ 'shape' => 'JobStr', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'GetJobListResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'GetJobListResultShape', ],
            ],
        ],
        'StartJobResponseShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'result' =>  [ 'shape' => 'StartJobResultShape', ],
            ],
        ],
        'StartJobResultShape' => [
            'type' => 'structure',
            'members' => [
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
            ],
        ],
        'DescribeJobResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeJobResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'AddOrUpdateJobResultShape' => [
            'type' => 'structure',
            'members' => [
                'okInfo' =>  [ 'shape' => 'OkInfo', ],
            ],
        ],
        'DescribeJobResultShape' => [
            'type' => 'structure',
            'members' => [
                'jobStr' =>  [ 'shape' => 'JobStr', ],
            ],
        ],
        'DeleteJobResultShape' => [
            'type' => 'structure',
            'members' => [
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'status' => [ 'type' => 'boolean', 'locationName' => 'status', ],
            ],
        ],
        'StartJobRequestShape' => [
            'type' => 'structure',
            'members' => [
                'namespaceId' => [ 'type' => 'string', 'locationName' => 'namespaceId', ],
                'jobId' => [ 'type' => 'integer', 'locationName' => 'jobId', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'StopJobResponseShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'result' =>  [ 'shape' => 'StopJobResultShape', ],
            ],
        ],
        'DeleteJobResponseShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'result' =>  [ 'shape' => 'DeleteJobResultShape', ],
            ],
        ],
        'QueryNamespacesResultShape' => [
            'type' => 'structure',
            'members' => [
                'namespaces' => [ 'type' => 'list', 'member' => [ 'shape' => 'Namespace', ], ],
            ],
        ],
        'CreateNamespaceResultShape' => [
            'type' => 'structure',
            'members' => [
                'status' => [ 'type' => 'boolean', 'locationName' => 'status', ],
            ],
        ],
        'QueryNamespaceDetailResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'QueryNamespaceDetailResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'QueryNamespaceDetailRequestShape' => [
            'type' => 'structure',
            'members' => [
                'namespaceId' => [ 'type' => 'integer', 'locationName' => 'namespaceId', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'UpdateNamespaceResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'UpdateNamespaceResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'QueryNamespaceDetailResultShape' => [
            'type' => 'structure',
            'members' => [
                'namespace' =>  [ 'shape' => 'Namespace', ],
            ],
        ],
        'DeleteNamespaceResultShape' => [
            'type' => 'structure',
            'members' => [
                'status' => [ 'type' => 'boolean', 'locationName' => 'status', ],
            ],
        ],
        'CreateNamespaceRequestShape' => [
            'type' => 'structure',
            'members' => [
                'namespaceStr' =>  [ 'shape' => 'Namespace', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'QueryNamespacesResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'QueryNamespacesResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'UpdateNamespaceRequestShape' => [
            'type' => 'structure',
            'members' => [
                'namespaceStr' =>  [ 'shape' => 'Namespace', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DeleteNamespaceResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DeleteNamespaceResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'UpdateNamespaceResultShape' => [
            'type' => 'structure',
            'members' => [
                'status' => [ 'type' => 'boolean', 'locationName' => 'status', ],
            ],
        ],
        'QueryNamespacesRequestShape' => [
            'type' => 'structure',
            'members' => [
                'keyword' => [ 'type' => 'string', 'locationName' => 'keyword', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DeleteNamespaceRequestShape' => [
            'type' => 'structure',
            'members' => [
                'namespaceId' => [ 'type' => 'integer', 'locationName' => 'namespaceId', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'CreateNamespaceResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'CreateNamespaceResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DeleteStorageResultShape' => [
            'type' => 'structure',
            'members' => [
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
            ],
        ],
        'GetStorageListRequestShape' => [
            'type' => 'structure',
            'members' => [
                'storageType' => [ 'type' => 'string', 'locationName' => 'storageType', ],
                'namespaceId' => [ 'type' => 'string', 'locationName' => 'namespaceId', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DescribeStorageResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeStorageResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'GetStorageListResultShape' => [
            'type' => 'structure',
            'members' => [
                'storageList' => [ 'type' => 'list', 'member' => [ 'shape' => 'Storage', ], ],
            ],
        ],
        'AddOrUpdateStorageRequestShape' => [
            'type' => 'structure',
            'members' => [
                'storageStr' =>  [ 'shape' => 'Storage', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DeleteStorageResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DeleteStorageResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeStorageRequestShape' => [
            'type' => 'structure',
            'members' => [
                'storageId' => [ 'type' => 'integer', 'locationName' => 'storageId', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'GetStorageListResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GetStorageListResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DeleteStorageRequestShape' => [
            'type' => 'structure',
            'members' => [
                'storageId' => [ 'type' => 'integer', 'locationName' => 'storageId', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'AddOrUpdateStorageResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'AddOrUpdateStorageResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeStorageResultShape' => [
            'type' => 'structure',
            'members' => [
                'data' =>  [ 'shape' => 'Storage', ],
            ],
        ],
        'AddOrUpdateStorageResultShape' => [
            'type' => 'structure',
            'members' => [
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'status' => [ 'type' => 'boolean', 'locationName' => 'status', ],
            ],
        ],
    ],
];
