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
        'DescribeVersions' => [
            'name' => 'DescribeVersions',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/versions',
            ],
            'input' => [ 'shape' => 'DescribeVersionsRequestShape', ],
            'output' => [ 'shape' => 'DescribeVersionsResponseShape', ],
        ],
        'DescribeServerlessClusters' => [
            'name' => 'DescribeServerlessClusters',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/serverless-clusters',
            ],
            'input' => [ 'shape' => 'DescribeServerlessClustersRequestShape', ],
            'output' => [ 'shape' => 'DescribeServerlessClustersResponseShape', ],
        ],
        'CreateServerlessCluster' => [
            'name' => 'CreateServerlessCluster',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/serverless-clusters',
            ],
            'input' => [ 'shape' => 'CreateServerlessClusterRequestShape', ],
            'output' => [ 'shape' => 'CreateServerlessClusterResponseShape', ],
        ],
        'DescribeServerlessCluster' => [
            'name' => 'DescribeServerlessCluster',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/serverless-clusters/{clusterId}',
            ],
            'input' => [ 'shape' => 'DescribeServerlessClusterRequestShape', ],
            'output' => [ 'shape' => 'DescribeServerlessClusterResponseShape', ],
        ],
        'ModifyServerlessCluster' => [
            'name' => 'ModifyServerlessCluster',
            'http' => [
                'method' => 'PATCH',
                'requestUri' => '/v1/regions/{regionId}/serverless-clusters/{clusterId}',
            ],
            'input' => [ 'shape' => 'ModifyServerlessClusterRequestShape', ],
            'output' => [ 'shape' => 'ModifyServerlessClusterResponseShape', ],
        ],
        'DeleteServerlessCluster' => [
            'name' => 'DeleteServerlessCluster',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/regions/{regionId}/serverless-clusters/{clusterId}',
            ],
            'input' => [ 'shape' => 'DeleteServerlessClusterRequestShape', ],
            'output' => [ 'shape' => 'DeleteServerlessClusterResponseShape', ],
        ],
        'DescribeServerlessVersions' => [
            'name' => 'DescribeServerlessVersions',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/serverless-versions',
            ],
            'input' => [ 'shape' => 'DescribeServerlessVersionsRequestShape', ],
            'output' => [ 'shape' => 'DescribeServerlessVersionsResponseShape', ],
        ],
    ],
    'shapes' => [
        'StringKeyValuePair' => [
            'type' => 'structure',
            'members' => [
                'key' => [ 'type' => 'string', 'locationName' => 'key', ],
                'value' => [ 'type' => 'string', 'locationName' => 'value', ],
            ],
        ],
        'AddonConfig' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'version' => [ 'type' => 'string', 'locationName' => 'version', ],
                'enabled' => [ 'type' => 'boolean', 'locationName' => 'enabled', ],
                'state' => [ 'type' => 'string', 'locationName' => 'state', ],
                'params' => [ 'type' => 'object', 'locationName' => 'params', ],
                'parameters' => [ 'type' => 'list', 'member' => [ 'shape' => 'StringKeyValuePair', ], ],
                'addonDetail' =>  [ 'shape' => 'ClusterAddon', ],
            ],
        ],
        'ClusterAddon' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'required' => [ 'type' => 'boolean', 'locationName' => 'required', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'availableVersions' => [ 'type' => 'list', 'member' => [ 'shape' => 'ClusterAddonVersion', ], ],
            ],
        ],
        'ClusterAddonVersion' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'version' => [ 'type' => 'string', 'locationName' => 'version', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'releaseNote' => [ 'type' => 'string', 'locationName' => 'releaseNote', ],
                'minAdaptedK8sVersion' => [ 'type' => 'string', 'locationName' => 'minAdaptedK8sVersion', ],
                'maxAdaptedK8sVersion' => [ 'type' => 'string', 'locationName' => 'maxAdaptedK8sVersion', ],
            ],
        ],
        'AddonConfigSpec' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'version' => [ 'type' => 'string', 'locationName' => 'version', ],
                'enabled' => [ 'type' => 'boolean', 'locationName' => 'enabled', ],
                'params' => [ 'type' => 'object', 'locationName' => 'params', ],
                'parameters' => [ 'type' => 'list', 'member' => [ 'shape' => 'StringKeyValuePair', ], ],
            ],
        ],
        'NodeElasticIpSpec' => [
            'type' => 'structure',
            'members' => [
                'bandWidthMbps' => [ 'type' => 'integer', 'locationName' => 'bandWidthMbps', ],
                'provider' => [ 'type' => 'string', 'locationName' => 'provider', ],
                'chargeMode' => [ 'type' => 'string', 'locationName' => 'chargeMode', ],
            ],
        ],
        'NatGatewaySpec' => [
            'type' => 'structure',
            'members' => [
                'natType' => [ 'type' => 'string', 'locationName' => 'natType', ],
                'natId' => [ 'type' => 'string', 'locationName' => 'natId', ],
                'elasticIpSpec' =>  [ 'shape' => 'NodeElasticIpSpec', ],
            ],
        ],
        'AutoClusterNetworkSpec' => [
            'type' => 'structure',
            'members' => [
                'publicApiServer' => [ 'type' => 'boolean', 'locationName' => 'publicApiServer', ],
                'masterCidr' => [ 'type' => 'string', 'locationName' => 'masterCidr', ],
                'nodeNetworkCidr' => [ 'type' => 'string', 'locationName' => 'nodeNetworkCidr', ],
                'vpcId' => [ 'type' => 'string', 'locationName' => 'vpcId', ],
                'dualStack' => [ 'type' => 'boolean', 'locationName' => 'dualStack', ],
                'masterNatEnabled' => [ 'type' => 'boolean', 'locationName' => 'masterNatEnabled', ],
                'natGateway' =>  [ 'shape' => 'NatGatewaySpec', ],
                'nodeElasticIpSpec' =>  [ 'shape' => 'NodeElasticIpSpec', ],
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
                'podSubnets' => [ 'type' => 'list', 'member' => [ 'shape' => 'ClusterNetworkPodSubnet', ], ],
                'clusterSubnets' => [ 'type' => 'list', 'member' => [ 'shape' => 'ClusterNetworkSubnet', ], ],
                'natGateway' => [ 'type' => 'list', 'member' => [ 'shape' => 'NatGateway', ], ],
                'nodeElasticIpSpec' =>  [ 'shape' => 'NodeElasticIpSpec', ],
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
                'privateEndpoint' => [ 'type' => 'string', 'locationName' => 'privateEndpoint', ],
                'endpoint' => [ 'type' => 'string', 'locationName' => 'endpoint', ],
                'endpointIPV6' => [ 'type' => 'string', 'locationName' => 'endpointIPV6', ],
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
                'clusterEnvironments' => [ 'type' => 'list', 'member' => [ 'shape' => 'StringKeyValuePair', ], ],
                'isEdge' => [ 'type' => 'boolean', 'locationName' => 'isEdge', ],
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
                'nodeSubnetId' => [ 'type' => 'string', 'locationName' => 'nodeSubnetId', ],
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
        'DataDiskSpec' => [
            'type' => 'structure',
            'members' => [
                'diskType' => [ 'type' => 'string', 'locationName' => 'diskType', ],
                'diskSizeGB' => [ 'type' => 'integer', 'locationName' => 'diskSizeGB', ],
                'iops' => [ 'type' => 'integer', 'locationName' => 'iops', ],
                'snapshotId' => [ 'type' => 'string', 'locationName' => 'snapshotId', ],
                'autoDelete' => [ 'type' => 'boolean', 'locationName' => 'autoDelete', ],
                'autoFormat' => [ 'type' => 'boolean', 'locationName' => 'autoFormat', ],
                'fsType' => [ 'type' => 'string', 'locationName' => 'fsType', ],
                'mountPoint' => [ 'type' => 'string', 'locationName' => 'mountPoint', ],
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
        'ClusterNetworkPodSubnet' => [
            'type' => 'structure',
            'members' => [
                'subnetId' => [ 'type' => 'string', 'locationName' => 'subnetId', ],
                'subnetType' => [ 'type' => 'string', 'locationName' => 'subnetType', ],
                'enabled' => [ 'type' => 'boolean', 'locationName' => 'enabled', ],
                'autoDelete' => [ 'type' => 'boolean', 'locationName' => 'autoDelete', ],
                'ipMaskLen' => [ 'type' => 'integer', 'locationName' => 'ipMaskLen', ],
                'availableCidrCount' => [ 'type' => 'integer', 'locationName' => 'availableCidrCount', ],
                'eniLen' => [ 'type' => 'integer', 'locationName' => 'eniLen', ],
                'ipamPolicy' => [ 'type' => 'string', 'locationName' => 'ipamPolicy', ],
                'runtimeError' => [ 'type' => 'string', 'locationName' => 'runtimeError', ],
            ],
        ],
        'UserScriptSpec' => [
            'type' => 'structure',
            'members' => [
                'key' => [ 'type' => 'string', 'locationName' => 'key', ],
                'value' => [ 'type' => 'string', 'locationName' => 'value', ],
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
                'userScripts' => [ 'type' => 'list', 'member' => [ 'shape' => 'UserScriptSpec', ], ],
                'dataDiskSpec' => [ 'type' => 'list', 'member' => [ 'shape' => 'DataDiskSpec', ], ],
                'systemDiskSpec' =>  [ 'shape' => 'DiskSpec', ],
                'securityGroup' => [ 'type' => 'string', 'locationName' => 'securityGroup', ],
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
        'ClusterPodSubnet' => [
            'type' => 'structure',
            'members' => [
                'subnetId' => [ 'type' => 'string', 'locationName' => 'subnetId', ],
                'subnetType' => [ 'type' => 'string', 'locationName' => 'subnetType', ],
                'enabled' => [ 'type' => 'boolean', 'locationName' => 'enabled', ],
                'autoDelete' => [ 'type' => 'boolean', 'locationName' => 'autoDelete', ],
                'ipMaskLen' => [ 'type' => 'integer', 'locationName' => 'ipMaskLen', ],
                'availableCidrCount' => [ 'type' => 'integer', 'locationName' => 'availableCidrCount', ],
                'eniLen' => [ 'type' => 'integer', 'locationName' => 'eniLen', ],
                'ipamPolicy' => [ 'type' => 'string', 'locationName' => 'ipamPolicy', ],
                'runtimeError' => [ 'type' => 'string', 'locationName' => 'runtimeError', ],
                'cidr' => [ 'type' => 'string', 'locationName' => 'cidr', ],
                'availableIpNum' => [ 'type' => 'integer', 'locationName' => 'availableIpNum', ],
                'subnetName' => [ 'type' => 'string', 'locationName' => 'subnetName', ],
            ],
        ],
        'ClusterSubnet' => [
            'type' => 'structure',
            'members' => [
                'subnetId' => [ 'type' => 'string', 'locationName' => 'subnetId', ],
                'subnetType' => [ 'type' => 'string', 'locationName' => 'subnetType', ],
                'enabled' => [ 'type' => 'boolean', 'locationName' => 'enabled', ],
                'autoDelete' => [ 'type' => 'boolean', 'locationName' => 'autoDelete', ],
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
                'caConfig' =>  [ 'shape' => 'CAConfigSpec', ],
            ],
        ],
        'NodeConfigSpec' => [
            'type' => 'structure',
            'members' => [
                'instanceType' => [ 'type' => 'string', 'locationName' => 'instanceType', ],
                'password' => [ 'type' => 'string', 'locationName' => 'password', ],
                'keyNames' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'systemDisk' =>  [ 'shape' => 'DiskSpec', ],
                'labels' => [ 'type' => 'list', 'member' => [ 'shape' => 'LabelSpec', ], ],
                'userScripts' => [ 'type' => 'list', 'member' => [ 'shape' => 'UserScriptSpec', ], ],
                'dataDiskSpec' => [ 'type' => 'list', 'member' => [ 'shape' => 'DataDiskSpec', ], ],
                'securityGroup' => [ 'type' => 'string', 'locationName' => 'securityGroup', ],
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
        'CustomizedClusterNetworkSpec' => [
            'type' => 'structure',
            'members' => [
                'publicApiServer' => [ 'type' => 'boolean', 'locationName' => 'publicApiServer', ],
                'masterCidr' => [ 'type' => 'string', 'locationName' => 'masterCidr', ],
                'serviceCidr' => [ 'type' => 'string', 'locationName' => 'serviceCidr', ],
                'vpcId' => [ 'type' => 'string', 'locationName' => 'vpcId', ],
                'podSubnetId' => [ 'type' => 'string', 'locationName' => 'podSubnetId', ],
                'lbSubnetId' => [ 'type' => 'string', 'locationName' => 'lbSubnetId', ],
                'nodeSubnetId' => [ 'type' => 'string', 'locationName' => 'nodeSubnetId', ],
                'dualStack' => [ 'type' => 'boolean', 'locationName' => 'dualStack', ],
                'masterNatEnabled' => [ 'type' => 'boolean', 'locationName' => 'masterNatEnabled', ],
                'natGateway' =>  [ 'shape' => 'NatGatewaySpec', ],
                'nodeElasticIpSpec' =>  [ 'shape' => 'NodeElasticIpSpec', ],
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
        'GpuInstaller' => [
            'type' => 'structure',
            'members' => [
                'installerName' => [ 'type' => 'string', 'locationName' => 'installerName', ],
                'imageName' => [ 'type' => 'string', 'locationName' => 'imageName', ],
                'imageVersion' => [ 'type' => 'string', 'locationName' => 'imageVersion', ],
                'deviceType' => [ 'type' => 'string', 'locationName' => 'deviceType', ],
                'driverVersion' => [ 'type' => 'string', 'locationName' => 'driverVersion', ],
                'cudaVersion' => [ 'type' => 'string', 'locationName' => 'cudaVersion', ],
                'status' => [ 'type' => 'integer', 'locationName' => 'status', ],
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
        'MasterVersion' => [
            'type' => 'structure',
            'members' => [
                'version' => [ 'type' => 'string', 'locationName' => 'version', ],
                'isDefault' => [ 'type' => 'boolean', 'locationName' => 'isDefault', ],
                'defaultNodeVersion' => [ 'type' => 'string', 'locationName' => 'defaultNodeVersion', ],
                'versionStatus' => [ 'type' => 'string', 'locationName' => 'versionStatus', ],
                'nodeOsTypes' => [ 'type' => 'string', 'locationName' => 'nodeOsTypes', ],
                'clusterAddons' => [ 'type' => 'list', 'member' => [ 'shape' => 'ClusterAddon', ], ],
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
        'NodeVersion' => [
            'type' => 'structure',
            'members' => [
                'version' => [ 'type' => 'string', 'locationName' => 'version', ],
                'imageOs' => [ 'type' => 'string', 'locationName' => 'imageOs', ],
                'versionStatus' => [ 'type' => 'string', 'locationName' => 'versionStatus', ],
            ],
        ],
        'Param' => [
            'type' => 'structure',
            'members' => [
                'key' => [ 'type' => 'string', 'locationName' => 'key', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
            ],
        ],
        'ParamSpec' => [
            'type' => 'structure',
            'members' => [
                'key' => [ 'type' => 'string', 'locationName' => 'key', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
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
        'ServerlessClusterNetworkConfig' => [
            'type' => 'structure',
            'members' => [
                'publicApiServer' => [ 'type' => 'boolean', 'locationName' => 'publicApiServer', ],
                'masterCidr' => [ 'type' => 'string', 'locationName' => 'masterCidr', ],
                'serviceCidr' => [ 'type' => 'string', 'locationName' => 'serviceCidr', ],
                'vpcId' => [ 'type' => 'string', 'locationName' => 'vpcId', ],
                'podSubnets' => [ 'type' => 'list', 'member' => [ 'shape' => 'ClusterNetworkPodSubnet', ], ],
                'lbSubnets' => [ 'type' => 'list', 'member' => [ 'shape' => 'ClusterNetworkSubnet', ], ],
                'natGateways' => [ 'type' => 'list', 'member' => [ 'shape' => 'NatGateway', ], ],
            ],
        ],
        'ServerlessCluster' => [
            'type' => 'structure',
            'members' => [
                'clusterId' => [ 'type' => 'string', 'locationName' => 'clusterId', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'version' => [ 'type' => 'string', 'locationName' => 'version', ],
                'azs' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'clusterCidr' => [ 'type' => 'string', 'locationName' => 'clusterCidr', ],
                'masterAuth' =>  [ 'shape' => 'MasterAuth', ],
                'clusterState' => [ 'type' => 'string', 'locationName' => 'clusterState', ],
                'stateMessage' => [ 'type' => 'string', 'locationName' => 'stateMessage', ],
                'accessKey' => [ 'type' => 'string', 'locationName' => 'accessKey', ],
                'basicAuth' => [ 'type' => 'boolean', 'locationName' => 'basicAuth', ],
                'clientCertificate' => [ 'type' => 'boolean', 'locationName' => 'clientCertificate', ],
                'privateEndpoint' => [ 'type' => 'string', 'locationName' => 'privateEndpoint', ],
                'endpoint' => [ 'type' => 'string', 'locationName' => 'endpoint', ],
                'endpointIPV6' => [ 'type' => 'string', 'locationName' => 'endpointIPV6', ],
                'endpointPort' => [ 'type' => 'string', 'locationName' => 'endpointPort', ],
                'dashboardPort' => [ 'type' => 'string', 'locationName' => 'dashboardPort', ],
                'userMetrics' => [ 'type' => 'boolean', 'locationName' => 'userMetrics', ],
                'addonsConfig' => [ 'type' => 'list', 'member' => [ 'shape' => 'AddonConfig', ], ],
                'masterProgress' =>  [ 'shape' => 'MaintenanceWindow', ],
                'clusterNetwork' =>  [ 'shape' => 'ServerlessClusterNetworkConfig', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'networkMode' => [ 'type' => 'string', 'locationName' => 'networkMode', ],
                'clusterEnvironments' => [ 'type' => 'list', 'member' => [ 'shape' => 'StringKeyValuePair', ], ],
                'isEdge' => [ 'type' => 'boolean', 'locationName' => 'isEdge', ],
            ],
        ],
        'ServerlessClusterNetworkSpec' => [
            'type' => 'structure',
            'members' => [
                'publicApiServer' => [ 'type' => 'boolean', 'locationName' => 'publicApiServer', ],
                'masterCidr' => [ 'type' => 'string', 'locationName' => 'masterCidr', ],
                'vpcId' => [ 'type' => 'string', 'locationName' => 'vpcId', ],
                'natGateway' =>  [ 'shape' => 'NatGatewaySpec', ],
                'serviceCidr' => [ 'type' => 'string', 'locationName' => 'serviceCidr', ],
                'podSubnetId' => [ 'type' => 'string', 'locationName' => 'podSubnetId', ],
                'lbSubnetId' => [ 'type' => 'string', 'locationName' => 'lbSubnetId', ],
                'dualStack' => [ 'type' => 'boolean', 'locationName' => 'dualStack', ],
                'masterNatEnabled' => [ 'type' => 'boolean', 'locationName' => 'masterNatEnabled', ],
            ],
        ],
        'ServerlessMasterVersion' => [
            'type' => 'structure',
            'members' => [
                'version' => [ 'type' => 'string', 'locationName' => 'version', ],
                'isDefault' => [ 'type' => 'boolean', 'locationName' => 'isDefault', ],
                'versionStatus' => [ 'type' => 'string', 'locationName' => 'versionStatus', ],
                'clusterAddons' => [ 'type' => 'list', 'member' => [ 'shape' => 'ClusterAddon', ], ],
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
                'version' => [ 'type' => 'string', 'locationName' => 'version', ],
                'isEdge' => [ 'type' => 'boolean', 'locationName' => 'isEdge', ],
                'azs' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'nodeGroup' =>  [ 'shape' => 'NodeGroupSpec', ],
                'accessKey' => [ 'type' => 'string', 'locationName' => 'accessKey', ],
                'secretKey' => [ 'type' => 'string', 'locationName' => 'secretKey', ],
                'addonsConfig' => [ 'type' => 'list', 'member' => [ 'shape' => 'AddonConfigSpec', ], ],
                'clusterNetworkType' => [ 'type' => 'string', 'locationName' => 'clusterNetworkType', ],
                'autoClusterNetworkSpec' =>  [ 'shape' => 'AutoClusterNetworkSpec', ],
                'customizedClusterNetworkSpec' =>  [ 'shape' => 'CustomizedClusterNetworkSpec', ],
                'clusterEnvironments' => [ 'type' => 'list', 'member' => [ 'shape' => 'StringKeyValuePair', ], ],
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
        'CreateClusterResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'CreateClusterResultShape', ],
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
                'routeTableId' => [ 'type' => 'string', 'locationName' => 'routeTableId', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'clusterId' => [ 'type' => 'string', 'locationName' => 'clusterId', ],
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
        'CreateClusterResultShape' => [
            'type' => 'structure',
            'members' => [
                'clusterId' => [ 'type' => 'string', 'locationName' => 'clusterId', ],
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
        'DeleteClusterResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
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
        'DescribeVersionsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeVersionsResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeVersionsResultShape' => [
            'type' => 'structure',
            'members' => [
                'masterVersions' => [ 'type' => 'list', 'member' => [ 'shape' => 'MasterVersion', ], ],
            ],
        ],
        'DescribeVersionsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'masterVersion' => [ 'type' => 'string', 'locationName' => 'masterVersion', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DeleteServerlessClusterResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DeleteServerlessClusterResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DescribeServerlessVersionsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'masterVersion' => [ 'type' => 'string', 'locationName' => 'masterVersion', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DescribeServerlessClusterResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeServerlessClusterResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'CreateServerlessClusterResultShape' => [
            'type' => 'structure',
            'members' => [
                'clusterId' => [ 'type' => 'string', 'locationName' => 'clusterId', ],
            ],
        ],
        'DescribeServerlessVersionsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeServerlessVersionsResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ModifyServerlessClusterResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeServerlessClustersResultShape' => [
            'type' => 'structure',
            'members' => [
                'clusters' => [ 'type' => 'list', 'member' => [ 'shape' => 'ServerlessCluster', ], ],
                'totalCount' => [ 'type' => 'double', 'locationName' => 'totalCount', ],
            ],
        ],
        'DescribeServerlessVersionsResultShape' => [
            'type' => 'structure',
            'members' => [
                'masterVersions' => [ 'type' => 'list', 'member' => [ 'shape' => 'ServerlessMasterVersion', ], ],
            ],
        ],
        'CreateServerlessClusterRequestShape' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'version' => [ 'type' => 'string', 'locationName' => 'version', ],
                'azs' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'accessKey' => [ 'type' => 'string', 'locationName' => 'accessKey', ],
                'secretKey' => [ 'type' => 'string', 'locationName' => 'secretKey', ],
                'addonsConfig' => [ 'type' => 'list', 'member' => [ 'shape' => 'AddonConfigSpec', ], ],
                'clusterNetworkSpec' =>  [ 'shape' => 'ServerlessClusterNetworkSpec', ],
                'clusterEnvironments' => [ 'type' => 'list', 'member' => [ 'shape' => 'StringKeyValuePair', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DescribeServerlessClustersResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeServerlessClustersResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeServerlessClusterResultShape' => [
            'type' => 'structure',
            'members' => [
                'cluster' =>  [ 'shape' => 'ServerlessCluster', ],
            ],
        ],
        'DescribeServerlessClustersRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'filters' => [ 'type' => 'list', 'member' => [ 'shape' => 'Filter', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DeleteServerlessClusterRequestShape' => [
            'type' => 'structure',
            'members' => [
                'routeTableId' => [ 'type' => 'string', 'locationName' => 'routeTableId', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'clusterId' => [ 'type' => 'string', 'locationName' => 'clusterId', ],
            ],
        ],
        'DescribeServerlessClusterRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'clusterId' => [ 'type' => 'string', 'locationName' => 'clusterId', ],
            ],
        ],
        'ModifyServerlessClusterRequestShape' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'clusterId' => [ 'type' => 'string', 'locationName' => 'clusterId', ],
            ],
        ],
        'ModifyServerlessClusterResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'CreateServerlessClusterResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'CreateServerlessClusterResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
    ],
];
