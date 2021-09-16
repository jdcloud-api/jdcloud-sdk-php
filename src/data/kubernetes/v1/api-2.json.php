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
        'AbortUpgrade' => [
            'name' => 'AbortUpgrade',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/clusters/{clusterId}:abortUpgrade',
            ],
            'input' => [ 'shape' => 'AbortUpgradeRequestShape', ],
            'output' => [ 'shape' => 'AbortUpgradeResponseShape', ],
        ],
        'DescribeProgress' => [
            'name' => 'DescribeProgress',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/clusters/{clusterId}/progress',
            ],
            'input' => [ 'shape' => 'DescribeProgressRequestShape', ],
            'output' => [ 'shape' => 'DescribeProgressResponseShape', ],
        ],
        'SetAutoUpgrade' => [
            'name' => 'SetAutoUpgrade',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/clusters/{clusterId}:setAutoUpgrade',
            ],
            'input' => [ 'shape' => 'SetAutoUpgradeRequestShape', ],
            'output' => [ 'shape' => 'SetAutoUpgradeResponseShape', ],
        ],
        'UpgradeCluster' => [
            'name' => 'UpgradeCluster',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/clusters/{clusterId}:upgradeCluster',
            ],
            'input' => [ 'shape' => 'UpgradeClusterRequestShape', ],
            'output' => [ 'shape' => 'UpgradeClusterResponseShape', ],
        ],
        'SetAddons' => [
            'name' => 'SetAddons',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/clusters/{clusterId}:setAddons',
            ],
            'input' => [ 'shape' => 'SetAddonsRequestShape', ],
            'output' => [ 'shape' => 'SetAddonsResponseShape', ],
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
        'RollbackNodeGroupUpgrade' => [
            'name' => 'RollbackNodeGroupUpgrade',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/nodeGroups/{nodeGroupId}:rollbackNodeGroupUpgrade',
            ],
            'input' => [ 'shape' => 'RollbackNodeGroupUpgradeRequestShape', ],
            'output' => [ 'shape' => 'RollbackNodeGroupUpgradeResponseShape', ],
        ],
        'SetNodeGroupCA' => [
            'name' => 'SetNodeGroupCA',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/nodeGroups/{nodeGroupId}:setNodeGroupCA',
            ],
            'input' => [ 'shape' => 'SetNodeGroupCARequestShape', ],
            'output' => [ 'shape' => 'SetNodeGroupCAResponseShape', ],
        ],
        'DeleteNodeInstances' => [
            'name' => 'DeleteNodeInstances',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/nodeGroups/{nodeGroupId}:deleteNodeInstances',
            ],
            'input' => [ 'shape' => 'DeleteNodeInstancesRequestShape', ],
            'output' => [ 'shape' => 'DeleteNodeInstancesResponseShape', ],
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
        'DescribeVersions' => [
            'name' => 'DescribeVersions',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/versions',
            ],
            'input' => [ 'shape' => 'DescribeVersionsRequestShape', ],
            'output' => [ 'shape' => 'DescribeVersionsResponseShape', ],
        ],
        'DescribeNodeVersion' => [
            'name' => 'DescribeNodeVersion',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/nodeVersions/{nodeVersion}',
            ],
            'input' => [ 'shape' => 'DescribeNodeVersionRequestShape', ],
            'output' => [ 'shape' => 'DescribeNodeVersionResponseShape', ],
        ],
        'DescribeUpgradableMasterVersions' => [
            'name' => 'DescribeUpgradableMasterVersions',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/clusters/{clusterId}/upgradableMasterVersions',
            ],
            'input' => [ 'shape' => 'DescribeUpgradableMasterVersionsRequestShape', ],
            'output' => [ 'shape' => 'DescribeUpgradableMasterVersionsResponseShape', ],
        ],
        'DescribeUpgradableNodeVersions' => [
            'name' => 'DescribeUpgradableNodeVersions',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/clusters/{clusterId}/upgradableNodeVersions',
            ],
            'input' => [ 'shape' => 'DescribeUpgradableNodeVersionsRequestShape', ],
            'output' => [ 'shape' => 'DescribeUpgradableNodeVersionsResponseShape', ],
        ],
    ],
    'shapes' => [
    ],
];
