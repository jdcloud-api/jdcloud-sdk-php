<?php
// This file was auto-generated
return [
//    'version' => '',
    'metadata' =>
    [
//        'apiVersion' => '',
//        'endpointPrefix' => 'kubernetes',
        'protocol' => 'json',
//        'serviceFullName' => 'kubernetes',
//        'serviceId' => 'kubernetes',
    ],
    'operations' => [
        'DescribeClusters' => [
            'name' => 'DescribeClusters',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/clusters',
            ],
            'input' => [ 'shape' => 'DescribeClustersRequestShape', ],
            'output' => [ 'shape' => 'DescribeClustersResponseShape', ],
        ],
        'CreateCluster' => [
            'name' => 'CreateCluster',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/clusters',
            ],
            'input' => [ 'shape' => 'CreateClusterRequestShape', ],
            'output' => [ 'shape' => 'CreateClusterResponseShape', ],
        ],
        'DescribeCluster' => [
            'name' => 'DescribeCluster',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/clusters/{clusterId}',
            ],
            'input' => [ 'shape' => 'DescribeClusterRequestShape', ],
            'output' => [ 'shape' => 'DescribeClusterResponseShape', ],
        ],
        'ModifyCluster' => [
            'name' => 'ModifyCluster',
            'http' => [
                'method' => 'PATCH',
                'requestUri' => '/v1/regions/{regionId}/clusters/{clusterId}',
            ],
            'input' => [ 'shape' => 'ModifyClusterRequestShape', ],
            'output' => [ 'shape' => 'ModifyClusterResponseShape', ],
        ],
        'DeleteCluster' => [
            'name' => 'DeleteCluster',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/regions/{regionId}/clusters/{clusterId}',
            ],
            'input' => [ 'shape' => 'DeleteClusterRequestShape', ],
            'output' => [ 'shape' => 'DeleteClusterResponseShape', ],
        ],
        'SetUserMetrics' => [
            'name' => 'SetUserMetrics',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/clusters/{clusterId}:setUserMetrics',
            ],
            'input' => [ 'shape' => 'SetUserMetricsRequestShape', ],
            'output' => [ 'shape' => 'SetUserMetricsResponseShape', ],
        ],
        'DescribeNodeGroups' => [
            'name' => 'DescribeNodeGroups',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/nodeGroups',
            ],
            'input' => [ 'shape' => 'DescribeNodeGroupsRequestShape', ],
            'output' => [ 'shape' => 'DescribeNodeGroupsResponseShape', ],
        ],
        'CreateNodeGroup' => [
            'name' => 'CreateNodeGroup',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/nodeGroups',
            ],
            'input' => [ 'shape' => 'CreateNodeGroupRequestShape', ],
            'output' => [ 'shape' => 'CreateNodeGroupResponseShape', ],
        ],
        'DescribeNodeGroup' => [
            'name' => 'DescribeNodeGroup',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/nodeGroups/{nodeGroupId}',
            ],
            'input' => [ 'shape' => 'DescribeNodeGroupRequestShape', ],
            'output' => [ 'shape' => 'DescribeNodeGroupResponseShape', ],
        ],
        'ModifyNodeGroup' => [
            'name' => 'ModifyNodeGroup',
            'http' => [
                'method' => 'PATCH',
                'requestUri' => '/v1/regions/{regionId}/nodeGroups/{nodeGroupId}',
            ],
            'input' => [ 'shape' => 'ModifyNodeGroupRequestShape', ],
            'output' => [ 'shape' => 'ModifyNodeGroupResponseShape', ],
        ],
        'DeleteNodeGroup' => [
            'name' => 'DeleteNodeGroup',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/regions/{regionId}/nodeGroups/{nodeGroupId}',
            ],
            'input' => [ 'shape' => 'DeleteNodeGroupRequestShape', ],
            'output' => [ 'shape' => 'DeleteNodeGroupResponseShape', ],
        ],
        'SetNodeGroupSize' => [
            'name' => 'SetNodeGroupSize',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/nodeGroups/{nodeGroupId}:setNodeGroupSize',
            ],
            'input' => [ 'shape' => 'SetNodeGroupSizeRequestShape', ],
            'output' => [ 'shape' => 'SetNodeGroupSizeResponseShape', ],
        ],
        'SetAutoRepair' => [
            'name' => 'SetAutoRepair',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/nodeGroups/{nodeGroupId}:setAutoRepair',
            ],
            'input' => [ 'shape' => 'SetAutoRepairRequestShape', ],
            'output' => [ 'shape' => 'SetAutoRepairResponseShape', ],
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
        'DescribeServerConfig' => [
            'name' => 'DescribeServerConfig',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/serverConfig',
            ],
            'input' => [ 'shape' => 'DescribeServerConfigRequestShape', ],
            'output' => [ 'shape' => 'DescribeServerConfigResponseShape', ],
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
        'DescribeVersions' => [
            'name' => 'DescribeVersions',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/versions',
            ],
            'input' => [ 'shape' => 'DescribeVersionsRequestShape', ],
            'output' => [ 'shape' => 'DescribeVersionsResponseShape', ],
        ],
    ],
    'shapes' => [
        'LabelSpec' => [
            'type' => 'structure',
            'members' => [
                'key' => [ 'type' => 'string', 'locationName' => 'key', ],
                'value' => [ 'type' => 'string', 'locationName' => 'value', ],
            ],
        ],
        'MasterAuth' => [
            'type' => 'structure',
            'members' => [
                'clusterCaCertificate' => [ 'type' => 'string', 'locationName' => 'clusterCaCertificate', ],
                'clientCertificate' => [ 'type' => 'string', 'locationName' => 'clientCertificate', ],
                'clientKey' => [ 'type' => 'string', 'locationName' => 'clientKey', ],
                'user' => [ 'type' => 'string', 'locationName' => 'user', ],
                'password' => [ 'type' => 'string', 'locationName' => 'password', ],
            ],
        ],
        'NodeNetwork' => [
            'type' => 'structure',
            'members' => [
                'podSubnetId' => [ 'type' => 'string', 'locationName' => 'podSubnetId', ],
                'nodeSubnetId' => [ 'type' => 'string', 'locationName' => 'nodeSubnetId', ],
                'serviceSubnetId' => [ 'type' => 'string', 'locationName' => 'serviceSubnetId', ],
                'servicePublicSubnetId' => [ 'type' => 'string', 'locationName' => 'servicePublicSubnetId', ],
                'nodeNetworkCidr' => [ 'type' => 'string', 'locationName' => 'nodeNetworkCidr', ],
                'vpcId' => [ 'type' => 'string', 'locationName' => 'vpcId', ],
            ],
        ],
        'Cluster' => [
            'type' => 'structure',
            'members' => [
                'clusterId' => [ 'type' => 'string', 'locationName' => 'clusterId', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'version' => [ 'type' => 'string', 'locationName' => 'version', ],
                'azs' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'nodeGroups' => [ 'type' => 'list', 'member' => [ 'shape' => 'NodeGroup', ], ],
                'clusterCidr' => [ 'type' => 'string', 'locationName' => 'clusterCidr', ],
                'masterAuth' =>  [ 'shape' => 'MasterAuth', ],
                'clusterState' => [ 'type' => 'string', 'locationName' => 'clusterState', ],
                'stateMessage' => [ 'type' => 'string', 'locationName' => 'stateMessage', ],
                'updateTime' => [ 'type' => 'string', 'locationName' => 'updateTime', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'accessKey' => [ 'type' => 'string', 'locationName' => 'accessKey', ],
                'basicAuth' => [ 'type' => 'boolean', 'locationName' => 'basicAuth', ],
                'clientCertificate' => [ 'type' => 'boolean', 'locationName' => 'clientCertificate', ],
                'endpoint' => [ 'type' => 'string', 'locationName' => 'endpoint', ],
                'endpointPort' => [ 'type' => 'string', 'locationName' => 'endpointPort', ],
                'dashboardPort' => [ 'type' => 'string', 'locationName' => 'dashboardPort', ],
                'userMetrics' => [ 'type' => 'boolean', 'locationName' => 'userMetrics', ],
            ],
        ],
        'NodeGroup' => [
            'type' => 'structure',
            'members' => [
                'clusterId' => [ 'type' => 'string', 'locationName' => 'clusterId', ],
                'nodeGroupId' => [ 'type' => 'string', 'locationName' => 'nodeGroupId', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'nodeConfig' =>  [ 'shape' => 'NodeConfig', ],
                'version' => [ 'type' => 'string', 'locationName' => 'version', ],
                'nodeNetwork' =>  [ 'shape' => 'NodeNetwork', ],
                'currentCount' => [ 'type' => 'integer', 'locationName' => 'currentCount', ],
                'expectCount' => [ 'type' => 'integer', 'locationName' => 'expectCount', ],
                'agId' => [ 'type' => 'string', 'locationName' => 'agId', ],
                'instanceTemplateId' => [ 'type' => 'string', 'locationName' => 'instanceTemplateId', ],
                'state' => [ 'type' => 'string', 'locationName' => 'state', ],
                'updateTime' => [ 'type' => 'string', 'locationName' => 'updateTime', ],
                'stateMessage' => [ 'type' => 'string', 'locationName' => 'stateMessage', ],
                'autoRepair' => [ 'type' => 'string', 'locationName' => 'autoRepair', ],
                'createdTime' => [ 'type' => 'string', 'locationName' => 'createdTime', ],
            ],
        ],
        'NodeConfig' => [
            'type' => 'structure',
            'members' => [
                'instanceType' => [ 'type' => 'string', 'locationName' => 'instanceType', ],
                'imageId' => [ 'type' => 'string', 'locationName' => 'imageId', ],
                'systemDiskSize' => [ 'type' => 'integer', 'locationName' => 'systemDiskSize', ],
                'systemDiskType' => [ 'type' => 'string', 'locationName' => 'systemDiskType', ],
                'labels' => [ 'type' => 'list', 'member' => [ 'shape' => 'LabelSpec', ], ],
            ],
        ],
        'NodeGroupSpec' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'nodeConfig' =>  [ 'shape' => 'NodeConfigSpec', ],
                'initialNodeCount' => [ 'type' => 'integer', 'locationName' => 'initialNodeCount', ],
                'vpcId' => [ 'type' => 'string', 'locationName' => 'vpcId', ],
                'nodeCidr' => [ 'type' => 'string', 'locationName' => 'nodeCidr', ],
                'autoRepair' => [ 'type' => 'boolean', 'locationName' => 'autoRepair', ],
            ],
        ],
        'NodeConfigSpec' => [
            'type' => 'structure',
            'members' => [
                'instanceType' => [ 'type' => 'string', 'locationName' => 'instanceType', ],
                'version' => [ 'type' => 'string', 'locationName' => 'version', ],
                'systemDiskSize' => [ 'type' => 'integer', 'locationName' => 'systemDiskSize', ],
                'systemDiskType' => [ 'type' => 'string', 'locationName' => 'systemDiskType', ],
                'labels' => [ 'type' => 'list', 'member' => [ 'shape' => 'LabelSpec', ], ],
            ],
        ],
        'ClusterSpec' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'basicAuth' => [ 'type' => 'boolean', 'locationName' => 'basicAuth', ],
                'clientCertificate' => [ 'type' => 'boolean', 'locationName' => 'clientCertificate', ],
                'version' => [ 'type' => 'string', 'locationName' => 'version', ],
                'azs' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'nodeGroup' =>  [ 'shape' => 'NodeGroupSpec', ],
                'masterCIDR' => [ 'type' => 'string', 'locationName' => 'masterCIDR', ],
                'accessKey' => [ 'type' => 'string', 'locationName' => 'accessKey', ],
                'secretKey' => [ 'type' => 'string', 'locationName' => 'secretKey', ],
            ],
        ],
        'Label' => [
            'type' => 'structure',
            'members' => [
                'key' => [ 'type' => 'string', 'locationName' => 'key', ],
                'value' => [ 'type' => 'string', 'locationName' => 'value', ],
            ],
        ],
        'NodeImage' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'imageId' => [ 'type' => 'string', 'locationName' => 'imageId', ],
                'imageOs' => [ 'type' => 'string', 'locationName' => 'imageOs', ],
                'mainVersion' => [ 'type' => 'string', 'locationName' => 'mainVersion', ],
                'innerVersion' => [ 'type' => 'string', 'locationName' => 'innerVersion', ],
                'visibility' => [ 'type' => 'integer', 'locationName' => 'visibility', ],
            ],
        ],
        'MasterImage' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'imageId' => [ 'type' => 'string', 'locationName' => 'imageId', ],
                'mainVersion' => [ 'type' => 'string', 'locationName' => 'mainVersion', ],
                'innerVersion' => [ 'type' => 'string', 'locationName' => 'innerVersion', ],
                'isDefault' => [ 'type' => 'boolean', 'locationName' => 'isDefault', ],
                'visibility' => [ 'type' => 'integer', 'locationName' => 'visibility', ],
                'defaultNodeImageCode' => [ 'type' => 'string', 'locationName' => 'defaultNodeImageCode', ],
                'nodeImages' => [ 'type' => 'list', 'member' => [ 'shape' => 'NodeImage', ], ],
            ],
        ],
        'NodeVersion' => [
            'type' => 'structure',
            'members' => [
                'version' => [ 'type' => 'string', 'locationName' => 'version', ],
                'imageOs' => [ 'type' => 'string', 'locationName' => 'imageOs', ],
                'versionStatus' => [ 'type' => 'string', 'locationName' => 'versionStatus', ],
            ],
        ],
        'MasterVersion' => [
            'type' => 'structure',
            'members' => [
                'version' => [ 'type' => 'string', 'locationName' => 'version', ],
                'isDefault' => [ 'type' => 'boolean', 'locationName' => 'isDefault', ],
                'defaultNodeVersion' => [ 'type' => 'string', 'locationName' => 'defaultNodeVersion', ],
                'versionStatus' => [ 'type' => 'string', 'locationName' => 'versionStatus', ],
                'nodeVersions' => [ 'type' => 'list', 'member' => [ 'shape' => 'NodeVersion', ], ],
            ],
        ],
        'ValidNodeConfig' => [
            'type' => 'structure',
            'members' => [
                'nodeVersion' => [ 'type' => 'string', 'locationName' => 'nodeVersion', ],
                'imageId' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
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
        'ServerConfig' => [
            'type' => 'structure',
            'members' => [
                'validMasterVersions' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'defaultMasterVersion' => [ 'type' => 'string', 'locationName' => 'defaultMasterVersion', ],
                'validNodeConfig' => [ 'type' => 'list', 'member' => [ 'shape' => 'ValidNodeConfig', ], ],
            ],
        ],
        'CreateClusterRequestShape' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'basicAuth' => [ 'type' => 'boolean', 'locationName' => 'basicAuth', ],
                'clientCertificate' => [ 'type' => 'boolean', 'locationName' => 'clientCertificate', ],
                'version' => [ 'type' => 'string', 'locationName' => 'version', ],
                'azs' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'nodeGroup' =>  [ 'shape' => 'NodeGroupSpec', ],
                'masterCidr' => [ 'type' => 'string', 'locationName' => 'masterCidr', ],
                'accessKey' => [ 'type' => 'string', 'locationName' => 'accessKey', ],
                'secretKey' => [ 'type' => 'string', 'locationName' => 'secretKey', ],
                'userMetrics' => [ 'type' => 'boolean', 'locationName' => 'userMetrics', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'CreateClusterResultShape' => [
            'type' => 'structure',
            'members' => [
                'clusterId' => [ 'type' => 'string', 'locationName' => 'clusterId', ],
            ],
        ],
        'SetUserMetricsResultShape' => [
            'type' => 'structure',
            'members' => [
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
        'DescribeClustersResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeClustersResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'SetUserMetricsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'CreateClusterResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'CreateClusterResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeClusterResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeClusterResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeClustersResultShape' => [
            'type' => 'structure',
            'members' => [
                'clusters' => [ 'type' => 'list', 'member' => [ 'shape' => 'Cluster', ], ],
                'totalCount' => [ 'type' => 'double', 'locationName' => 'totalCount', ],
            ],
        ],
        'ModifyClusterRequestShape' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'clusterId' => [ 'type' => 'string', 'locationName' => 'clusterId', ],
            ],
        ],
        'DescribeClustersRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'filters' => [ 'type' => 'list', 'member' => [ 'shape' => 'Filter', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DeleteClusterRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'clusterId' => [ 'type' => 'string', 'locationName' => 'clusterId', ],
            ],
        ],
        'DeleteClusterResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'ModifyClusterResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DescribeClusterResultShape' => [
            'type' => 'structure',
            'members' => [
                'cluster' =>  [ 'shape' => 'Cluster', ],
            ],
        ],
        'DescribeClusterRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'clusterId' => [ 'type' => 'string', 'locationName' => 'clusterId', ],
            ],
        ],
        'DeleteClusterResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'SetUserMetricsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'enabled' => [ 'type' => 'boolean', 'locationName' => 'enabled', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'clusterId' => [ 'type' => 'string', 'locationName' => 'clusterId', ],
            ],
        ],
        'ModifyClusterResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'CreateNodeGroupResultShape' => [
            'type' => 'structure',
            'members' => [
                'nodeGroupId' => [ 'type' => 'string', 'locationName' => 'nodeGroupId', ],
            ],
        ],
        'DeleteNodeGroupResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'SetNodeGroupSizeResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeNodeGroupRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'nodeGroupId' => [ 'type' => 'string', 'locationName' => 'nodeGroupId', ],
            ],
        ],
        'CreateNodeGroupResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'CreateNodeGroupResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'SetNodeGroupSizeResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'SetAutoRepairResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'SetAutoRepairRequestShape' => [
            'type' => 'structure',
            'members' => [
                'enabled' => [ 'type' => 'boolean', 'locationName' => 'enabled', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'nodeGroupId' => [ 'type' => 'string', 'locationName' => 'nodeGroupId', ],
            ],
        ],
        'DescribeNodeGroupResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeNodeGroupResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ModifyNodeGroupRequestShape' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'nodeGroupId' => [ 'type' => 'string', 'locationName' => 'nodeGroupId', ],
            ],
        ],
        'SetAutoRepairResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DescribeNodeGroupResultShape' => [
            'type' => 'structure',
            'members' => [
                'nodeGroup' =>  [ 'shape' => 'NodeGroup', ],
            ],
        ],
        'DeleteNodeGroupRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'nodeGroupId' => [ 'type' => 'string', 'locationName' => 'nodeGroupId', ],
            ],
        ],
        'ModifyNodeGroupResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'SetNodeGroupSizeRequestShape' => [
            'type' => 'structure',
            'members' => [
                'expectCount' => [ 'type' => 'integer', 'locationName' => 'expectCount', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'nodeGroupId' => [ 'type' => 'string', 'locationName' => 'nodeGroupId', ],
            ],
        ],
        'DescribeNodeGroupsResultShape' => [
            'type' => 'structure',
            'members' => [
                'nodeGroups' => [ 'type' => 'list', 'member' => [ 'shape' => 'NodeGroup', ], ],
                'totalCount' => [ 'type' => 'double', 'locationName' => 'totalCount', ],
            ],
        ],
        'DescribeNodeGroupsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'filters' => [ 'type' => 'list', 'member' => [ 'shape' => 'Filter', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DescribeNodeGroupsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeNodeGroupsResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'CreateNodeGroupRequestShape' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'clusterId' => [ 'type' => 'string', 'locationName' => 'clusterId', ],
                'nodeConfig' =>  [ 'shape' => 'NodeConfigSpec', ],
                'initialNodeCount' => [ 'type' => 'integer', 'locationName' => 'initialNodeCount', ],
                'vpcId' => [ 'type' => 'string', 'locationName' => 'vpcId', ],
                'nodeCidr' => [ 'type' => 'string', 'locationName' => 'nodeCidr', ],
                'autoRepair' => [ 'type' => 'boolean', 'locationName' => 'autoRepair', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'ModifyNodeGroupResponseShape' => [
            'type' => 'structure',
            'members' => [
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
        'DescribeQuotasResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeQuotasResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeServerConfigResultShape' => [
            'type' => 'structure',
            'members' => [
                'serverConfig' =>  [ 'shape' => 'ServerConfig', ],
            ],
        ],
        'DescribeVersionsResultShape' => [
            'type' => 'structure',
            'members' => [
                'masterVersions' => [ 'type' => 'list', 'member' => [ 'shape' => 'MasterVersion', ], ],
            ],
        ],
        'DescribeImagesRequestShape' => [
            'type' => 'structure',
            'members' => [
                'masterVersion' => [ 'type' => 'string', 'locationName' => 'masterVersion', ],
                'masterImageCode' => [ 'type' => 'string', 'locationName' => 'masterImageCode', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DescribeVersionsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'masterVersion' => [ 'type' => 'string', 'locationName' => 'masterVersion', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DescribeServerConfigResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeServerConfigResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeImagesResultShape' => [
            'type' => 'structure',
            'members' => [
                'masterImages' => [ 'type' => 'list', 'member' => [ 'shape' => 'MasterImage', ], ],
            ],
        ],
        'DescribeVersionsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeVersionsResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeImagesResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeImagesResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeServerConfigRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
    ],
];
