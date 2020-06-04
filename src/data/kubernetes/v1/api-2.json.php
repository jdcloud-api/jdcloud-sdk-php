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
        'AddonConfig' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'enabled' => [ 'type' => 'boolean', 'locationName' => 'enabled', ],
            ],
        ],
        'AddonConfigSpec' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'enabled' => [ 'type' => 'boolean', 'locationName' => 'enabled', ],
            ],
        ],
        'CAConfig' => [
            'type' => 'structure',
            'members' => [
                'enable' => [ 'type' => 'boolean', 'locationName' => 'enable', ],
                'maxNode' => [ 'type' => 'integer', 'locationName' => 'maxNode', ],
                'minNode' => [ 'type' => 'integer', 'locationName' => 'minNode', ],
            ],
        ],
        'CAConfigSpec' => [
            'type' => 'structure',
            'members' => [
                'enable' => [ 'type' => 'boolean', 'locationName' => 'enable', ],
                'maxNode' => [ 'type' => 'integer', 'locationName' => 'maxNode', ],
                'minNode' => [ 'type' => 'integer', 'locationName' => 'minNode', ],
            ],
        ],
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
        'ClusterNetwork' => [
            'type' => 'structure',
            'members' => [
                'publicApiServer' => [ 'type' => 'boolean', 'locationName' => 'publicApiServer', ],
                'masterCidr' => [ 'type' => 'string', 'locationName' => 'masterCidr', ],
                'serviceCidr' => [ 'type' => 'string', 'locationName' => 'serviceCidr', ],
                'vpcId' => [ 'type' => 'string', 'locationName' => 'vpcId', ],
                'clusterSubnets' => [ 'type' => 'list', 'member' => [ 'shape' => 'ClusterNetworkSubnet', ], ],
                'natGateway' => [ 'type' => 'list', 'member' => [ 'shape' => 'NatGateway', ], ],
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
                'addonsConfig' => [ 'type' => 'list', 'member' => [ 'shape' => 'AddonConfig', ], ],
                'autoUpgrade' => [ 'type' => 'boolean', 'locationName' => 'autoUpgrade', ],
                'maintenanceWindow' =>  [ 'shape' => 'MaintenanceWindow', ],
                'upgradePlan' =>  [ 'shape' => 'UpgradePlan', ],
                'masterProgress' =>  [ 'shape' => 'MaintenanceWindow', ],
                'clusterNetwork' =>  [ 'shape' => 'ClusterNetwork', ],
                'networkMode' => [ 'type' => 'string', 'locationName' => 'networkMode', ],
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
                'azs' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'instanceTemplateId' => [ 'type' => 'string', 'locationName' => 'instanceTemplateId', ],
                'state' => [ 'type' => 'string', 'locationName' => 'state', ],
                'tags' => [ 'type' => 'list', 'member' => [ 'shape' => 'Tag', ], ],
                'updateTime' => [ 'type' => 'string', 'locationName' => 'updateTime', ],
                'stateMessage' => [ 'type' => 'string', 'locationName' => 'stateMessage', ],
                'autoRepair' => [ 'type' => 'boolean', 'locationName' => 'autoRepair', ],
                'progress' =>  [ 'shape' => 'NodeGroupProgress', ],
                'caConfig' =>  [ 'shape' => 'CAConfig', ],
                'createdTime' => [ 'type' => 'string', 'locationName' => 'createdTime', ],
            ],
        ],
        'UpgradePlan' => [
            'type' => 'structure',
            'members' => [
                'mode' => [ 'type' => 'string', 'locationName' => 'mode', ],
                'scope' => [ 'type' => 'string', 'locationName' => 'scope', ],
                'state' => [ 'type' => 'string', 'locationName' => 'state', ],
                'masterExpectedVersion' => [ 'type' => 'string', 'locationName' => 'masterExpectedVersion', ],
                'nodeExpectedVersion' => [ 'type' => 'string', 'locationName' => 'nodeExpectedVersion', ],
                'startTime' => [ 'type' => 'string', 'locationName' => 'startTime', ],
                'duration' => [ 'type' => 'integer', 'locationName' => 'duration', ],
            ],
        ],
        'Tag' => [
            'type' => 'structure',
            'members' => [
                'key' => [ 'type' => 'string', 'locationName' => 'key', ],
                'value' => [ 'type' => 'string', 'locationName' => 'value', ],
            ],
        ],
        'ClusterNetworkSubnet' => [
            'type' => 'structure',
            'members' => [
                'subnetId' => [ 'type' => 'string', 'locationName' => 'subnetId', ],
                'subnetType' => [ 'type' => 'string', 'locationName' => 'subnetType', ],
                'enabled' => [ 'type' => 'boolean', 'locationName' => 'enabled', ],
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
        'NodeGroupProgress' => [
            'type' => 'structure',
            'members' => [
                'nodeGroupId' => [ 'type' => 'string', 'locationName' => 'nodeGroupId', ],
                'action' => [ 'type' => 'string', 'locationName' => 'action', ],
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
                'updatedCount' => [ 'type' => 'integer', 'locationName' => 'updatedCount', ],
            ],
        ],
        'NatGateway' => [
            'type' => 'structure',
            'members' => [
                'natType' => [ 'type' => 'string', 'locationName' => 'natType', ],
                'natId' => [ 'type' => 'string', 'locationName' => 'natId', ],
            ],
        ],
        'MaintenanceWindow' => [
            'type' => 'structure',
            'members' => [
                'periodType' => [ 'type' => 'string', 'locationName' => 'periodType', ],
                'startDay' => [ 'type' => 'integer', 'locationName' => 'startDay', ],
                'startTime' => [ 'type' => 'string', 'locationName' => 'startTime', ],
                'duration' => [ 'type' => 'integer', 'locationName' => 'duration', ],
            ],
        ],
        'NodeConfig' => [
            'type' => 'structure',
            'members' => [
                'instanceType' => [ 'type' => 'string', 'locationName' => 'instanceType', ],
                'imageId' => [ 'type' => 'string', 'locationName' => 'imageId', ],
                'keyNames' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'systemDiskCategory' => [ 'type' => 'string', 'locationName' => 'systemDiskCategory', ],
                'systemDiskSize' => [ 'type' => 'integer', 'locationName' => 'systemDiskSize', ],
                'systemDiskType' => [ 'type' => 'string', 'locationName' => 'systemDiskType', ],
                'systemDiskIops' => [ 'type' => 'integer', 'locationName' => 'systemDiskIops', ],
                'labels' => [ 'type' => 'list', 'member' => [ 'shape' => 'LabelSpec', ], ],
            ],
        ],
        'NatGatewaySpec' => [
            'type' => 'structure',
            'members' => [
                'natType' => [ 'type' => 'string', 'locationName' => 'natType', ],
                'natId' => [ 'type' => 'string', 'locationName' => 'natId', ],
            ],
        ],
        'ClusterNetworkSpec' => [
            'type' => 'structure',
            'members' => [
                'publicApiServer' => [ 'type' => 'boolean', 'locationName' => 'publicApiServer', ],
                'masterCidr' => [ 'type' => 'string', 'locationName' => 'masterCidr', ],
                'serviceCidr' => [ 'type' => 'string', 'locationName' => 'serviceCidr', ],
                'vpcId' => [ 'type' => 'string', 'locationName' => 'vpcId', ],
                'podSubnetId' => [ 'type' => 'string', 'locationName' => 'podSubnetId', ],
                'lbSubnetId' => [ 'type' => 'string', 'locationName' => 'lbSubnetId', ],
                'nodeSubnetId' => [ 'type' => 'string', 'locationName' => 'nodeSubnetId', ],
                'natGateway' =>  [ 'shape' => 'NatGatewaySpec', ],
            ],
        ],
        'ClusterSubnet' => [
            'type' => 'structure',
            'members' => [
                'subnetId' => [ 'type' => 'string', 'locationName' => 'subnetId', ],
                'subnetType' => [ 'type' => 'string', 'locationName' => 'subnetType', ],
                'enabled' => [ 'type' => 'boolean', 'locationName' => 'enabled', ],
                'cidr' => [ 'type' => 'string', 'locationName' => 'cidr', ],
                'availableIpNum' => [ 'type' => 'integer', 'locationName' => 'availableIpNum', ],
                'subnetName' => [ 'type' => 'string', 'locationName' => 'subnetName', ],
            ],
        ],
        'NodeGroupSpec' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'nodeConfig' =>  [ 'shape' => 'NodeConfigSpec', ],
                'azs' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'initialNodeCount' => [ 'type' => 'integer', 'locationName' => 'initialNodeCount', ],
                'vpcId' => [ 'type' => 'string', 'locationName' => 'vpcId', ],
                'nodeCidr' => [ 'type' => 'string', 'locationName' => 'nodeCidr', ],
                'autoRepair' => [ 'type' => 'boolean', 'locationName' => 'autoRepair', ],
                'caConfig' =>  [ 'shape' => 'CAConfigSpec', ],
            ],
        ],
        'NodeConfigSpec' => [
            'type' => 'structure',
            'members' => [
                'instanceType' => [ 'type' => 'string', 'locationName' => 'instanceType', ],
                'version' => [ 'type' => 'string', 'locationName' => 'version', ],
                'password' => [ 'type' => 'string', 'locationName' => 'password', ],
                'keyNames' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'systemDisk' =>  [ 'shape' => 'DiskSpec', ],
                'labels' => [ 'type' => 'list', 'member' => [ 'shape' => 'LabelSpec', ], ],
            ],
        ],
        'DiskSpec' => [
            'type' => 'structure',
            'members' => [
                'systemDiskCategory' => [ 'type' => 'string', 'locationName' => 'systemDiskCategory', ],
                'systemDiskSize' => [ 'type' => 'integer', 'locationName' => 'systemDiskSize', ],
                'systemDiskType' => [ 'type' => 'string', 'locationName' => 'systemDiskType', ],
                'systemDiskIops' => [ 'type' => 'integer', 'locationName' => 'systemDiskIops', ],
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
        'CustomizedNodeGroupSpec' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'nodeConfig' =>  [ 'shape' => 'NodeConfigSpec', ],
                'azs' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'initialNodeCount' => [ 'type' => 'integer', 'locationName' => 'initialNodeCount', ],
                'autoRepair' => [ 'type' => 'boolean', 'locationName' => 'autoRepair', ],
                'caConfig' =>  [ 'shape' => 'CAConfigSpec', ],
            ],
        ],
        'Label' => [
            'type' => 'structure',
            'members' => [
                'key' => [ 'type' => 'string', 'locationName' => 'key', ],
                'value' => [ 'type' => 'string', 'locationName' => 'value', ],
            ],
        ],
        'MaintenanceWindowSpec' => [
            'type' => 'structure',
            'members' => [
                'periodType' => [ 'type' => 'string', 'locationName' => 'periodType', ],
                'startDay' => [ 'type' => 'integer', 'locationName' => 'startDay', ],
                'startTime' => [ 'type' => 'string', 'locationName' => 'startTime', ],
                'timeZone' => [ 'type' => 'string', 'locationName' => 'timeZone', ],
                'duration' => [ 'type' => 'integer', 'locationName' => 'duration', ],
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
        'MasterProgress' => [
            'type' => 'structure',
            'members' => [
                'action' => [ 'type' => 'string', 'locationName' => 'action', ],
                'progress' => [ 'type' => 'string', 'locationName' => 'progress', ],
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
                'nodeOsTypes' => [ 'type' => 'string', 'locationName' => 'nodeOsTypes', ],
            ],
        ],
        'NodeGroupNetworkSpec' => [
            'type' => 'structure',
            'members' => [
                'subnetId' => [ 'type' => 'string', 'locationName' => 'subnetId', ],
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
        'TagFilter' => [
            'type' => 'structure',
            'members' => [
                'key' => [ 'type' => 'string', 'locationName' => 'key', ],
                'values' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
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
                'addonsConfig' => [ 'type' => 'list', 'member' => [ 'shape' => 'AddonConfigSpec', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DescribeClustersResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeClustersResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'AbortUpgradeResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'SetAddonsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'UpgradeClusterResponseShape' => [
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
        'DescribeProgressRequestShape' => [
            'type' => 'structure',
            'members' => [
                'nodeGroupIds' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'clusterId' => [ 'type' => 'string', 'locationName' => 'clusterId', ],
            ],
        ],
        'DescribeClustersResultShape' => [
            'type' => 'structure',
            'members' => [
                'clusters' => [ 'type' => 'list', 'member' => [ 'shape' => 'Cluster', ], ],
                'totalCount' => [ 'type' => 'double', 'locationName' => 'totalCount', ],
            ],
        ],
        'SetAddonsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'addonsConfig' => [ 'type' => 'list', 'member' => [ 'shape' => 'AddonConfigSpec', ], ],
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
        'SetAutoUpgradeResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeClusterResultShape' => [
            'type' => 'structure',
            'members' => [
                'cluster' =>  [ 'shape' => 'Cluster', ],
            ],
        ],
        'SetAutoUpgradeRequestShape' => [
            'type' => 'structure',
            'members' => [
                'autoUpgrade' => [ 'type' => 'boolean', 'locationName' => 'autoUpgrade', ],
                'maintenanceWindow' =>  [ 'shape' => 'MaintenanceWindowSpec', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'clusterId' => [ 'type' => 'string', 'locationName' => 'clusterId', ],
            ],
        ],
        'DescribeClusterRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'clusterId' => [ 'type' => 'string', 'locationName' => 'clusterId', ],
            ],
        ],
        'DescribeProgressResultShape' => [
            'type' => 'structure',
            'members' => [
                'masterProgress' =>  [ 'shape' => 'MasterProgress', ],
                'nodeGroupProgresses' => [ 'type' => 'list', 'member' => [ 'shape' => 'NodeGroupProgress', ], ],
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
        'DescribeProgressResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeProgressResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'SetAutoUpgradeResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'SetAddonsResultShape' => [
            'type' => 'structure',
            'members' => [
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
        'SetUserMetricsResponseShape' => [
            'type' => 'structure',
            'members' => [
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
        'ModifyClusterRequestShape' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'clusterId' => [ 'type' => 'string', 'locationName' => 'clusterId', ],
            ],
        ],
        'AbortUpgradeResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DeleteClusterResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'UpgradeClusterRequestShape' => [
            'type' => 'structure',
            'members' => [
                'scope' => [ 'type' => 'string', 'locationName' => 'scope', ],
                'nodeGroupIds' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'version' => [ 'type' => 'string', 'locationName' => 'version', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'clusterId' => [ 'type' => 'string', 'locationName' => 'clusterId', ],
            ],
        ],
        'ModifyClusterResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'AbortUpgradeRequestShape' => [
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
        'UpgradeClusterResultShape' => [
            'type' => 'structure',
            'members' => [
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
        'RollbackNodeGroupUpgradeResponseShape' => [
            'type' => 'structure',
            'members' => [
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
        'DeleteNodeInstancesResultShape' => [
            'type' => 'structure',
            'members' => [
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
        'DeleteNodeInstancesRequestShape' => [
            'type' => 'structure',
            'members' => [
                'instanceIds' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'nodeGroupId' => [ 'type' => 'string', 'locationName' => 'nodeGroupId', ],
            ],
        ],
        'SetNodeGroupCAResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
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
        'SetNodeGroupCARequestShape' => [
            'type' => 'structure',
            'members' => [
                'caConfig' =>  [ 'shape' => 'CAConfigSpec', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'nodeGroupId' => [ 'type' => 'string', 'locationName' => 'nodeGroupId', ],
            ],
        ],
        'DescribeNodeGroupsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'tags' => [ 'type' => 'list', 'member' => [ 'shape' => 'TagFilter', ], ],
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
        'RollbackNodeGroupUpgradeResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'SetNodeGroupCAResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DeleteNodeInstancesResponseShape' => [
            'type' => 'structure',
            'members' => [
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
                'azs' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'initialNodeCount' => [ 'type' => 'integer', 'locationName' => 'initialNodeCount', ],
                'vpcId' => [ 'type' => 'string', 'locationName' => 'vpcId', ],
                'nodeCidr' => [ 'type' => 'string', 'locationName' => 'nodeCidr', ],
                'autoRepair' => [ 'type' => 'boolean', 'locationName' => 'autoRepair', ],
                'caConfig' =>  [ 'shape' => 'CAConfigSpec', ],
                'nodeGroupNetwork' =>  [ 'shape' => 'NodeGroupNetworkSpec', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'ModifyNodeGroupResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'RollbackNodeGroupUpgradeRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'nodeGroupId' => [ 'type' => 'string', 'locationName' => 'nodeGroupId', ],
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
        'DescribeUpgradableNodeVersionsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'nodeGroupIds' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'clusterId' => [ 'type' => 'string', 'locationName' => 'clusterId', ],
            ],
        ],
        'DescribeNodeVersionResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeNodeVersionResultShape', ],
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
        'DescribeUpgradableMasterVersionsResultShape' => [
            'type' => 'structure',
            'members' => [
                'masterVersions' => [ 'type' => 'list', 'member' => [ 'shape' => 'MasterVersion', ], ],
            ],
        ],
        'DescribeUpgradableMasterVersionsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'clusterId' => [ 'type' => 'string', 'locationName' => 'clusterId', ],
            ],
        ],
        'DescribeUpgradableNodeVersionsResultShape' => [
            'type' => 'structure',
            'members' => [
                'ndoeVersions' => [ 'type' => 'list', 'member' => [ 'shape' => 'NodeVersion', ], ],
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
        'DescribeUpgradableNodeVersionsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeUpgradableNodeVersionsResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeVersionsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeVersionsResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeNodeVersionRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'nodeVersion' => [ 'type' => 'string', 'locationName' => 'nodeVersion', ],
            ],
        ],
        'DescribeServerConfigRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DescribeNodeVersionResultShape' => [
            'type' => 'structure',
            'members' => [
                'nodeVersion' =>  [ 'shape' => 'NodeVersion', ],
            ],
        ],
        'DescribeUpgradableMasterVersionsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeUpgradableMasterVersionsResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
    ],
];
