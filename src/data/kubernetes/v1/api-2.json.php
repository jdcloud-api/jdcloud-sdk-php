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
        'DescribeMatchAzs' => [
            'name' => 'DescribeMatchAzs',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/azs',
            ],
            'input' => [ 'shape' => 'DescribeMatchAzsRequestShape', ],
            'output' => [ 'shape' => 'DescribeMatchAzsResponseShape', ],
        ],
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
        'AddClusterNetworkDetail' => [
            'name' => 'AddClusterNetworkDetail',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/clusters/{clusterId}:networks',
            ],
            'input' => [ 'shape' => 'AddClusterNetworkDetailRequestShape', ],
            'output' => [ 'shape' => 'AddClusterNetworkDetailResponseShape', ],
        ],
        'DescribeClusterCheck' => [
            'name' => 'DescribeClusterCheck',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/clusters/{clusterId}:describeClusterCheck',
            ],
            'input' => [ 'shape' => 'DescribeClusterCheckRequestShape', ],
            'output' => [ 'shape' => 'DescribeClusterCheckResponseShape', ],
        ],
        'DescribeClusterChecks' => [
            'name' => 'DescribeClusterChecks',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/clusters/{clusterId}:describeClusterChecks',
            ],
            'input' => [ 'shape' => 'DescribeClusterChecksRequestShape', ],
            'output' => [ 'shape' => 'DescribeClusterChecksResponseShape', ],
        ],
        'DescribeProxyKubeConfig' => [
            'name' => 'DescribeProxyKubeConfig',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/clusters/{clusterId}/proxy-kubeconfig',
            ],
            'input' => [ 'shape' => 'DescribeProxyKubeConfigRequestShape', ],
            'output' => [ 'shape' => 'DescribeProxyKubeConfigResponseShape', ],
        ],
        'DeleteNodeInstances2' => [
            'name' => 'DeleteNodeInstances2',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/clusters/{clusterId}:deleteNodeInstances',
            ],
            'input' => [ 'shape' => 'DeleteNodeInstances2RequestShape', ],
            'output' => [ 'shape' => 'DeleteNodeInstances2ResponseShape', ],
        ],
        'DescribeLatestOperations' => [
            'name' => 'DescribeLatestOperations',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/operations:latest',
            ],
            'input' => [ 'shape' => 'DescribeLatestOperationsRequestShape', ],
            'output' => [ 'shape' => 'DescribeLatestOperationsResponseShape', ],
        ],
        'DescribeOperations' => [
            'name' => 'DescribeOperations',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/operations',
            ],
            'input' => [ 'shape' => 'DescribeOperationsRequestShape', ],
            'output' => [ 'shape' => 'DescribeOperationsResponseShape', ],
        ],
        'DescribeLatestOperation' => [
            'name' => 'DescribeLatestOperation',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/clusters/{clusterId}/operations:latest',
            ],
            'input' => [ 'shape' => 'DescribeLatestOperationRequestShape', ],
            'output' => [ 'shape' => 'DescribeLatestOperationResponseShape', ],
        ],
        'DescribeOperation' => [
            'name' => 'DescribeOperation',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/clusters/{clusterId}/operations/{operationId}',
            ],
            'input' => [ 'shape' => 'DescribeOperationRequestShape', ],
            'output' => [ 'shape' => 'DescribeOperationResponseShape', ],
        ],
        'DescribeOperationNodes' => [
            'name' => 'DescribeOperationNodes',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/clusters/{clusterId}/operations/{operationId}/nodes',
            ],
            'input' => [ 'shape' => 'DescribeOperationNodesRequestShape', ],
            'output' => [ 'shape' => 'DescribeOperationNodesResponseShape', ],
        ],
        'DescribeClusterState' => [
            'name' => 'DescribeClusterState',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/clusters/{clusterId}:state',
            ],
            'input' => [ 'shape' => 'DescribeClusterStateRequestShape', ],
            'output' => [ 'shape' => 'DescribeClusterStateResponseShape', ],
        ],
        'CreateHpcNodeGroup' => [
            'name' => 'CreateHpcNodeGroup',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/hpcNodeGroups',
            ],
            'input' => [ 'shape' => 'CreateHpcNodeGroupRequestShape', ],
            'output' => [ 'shape' => 'CreateHpcNodeGroupResponseShape', ],
        ],
        'DeleteHpcNodeGroup' => [
            'name' => 'DeleteHpcNodeGroup',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/regions/{regionId}/hpcNodeGroups/{nodeGroupId}',
            ],
            'input' => [ 'shape' => 'DeleteHpcNodeGroupRequestShape', ],
            'output' => [ 'shape' => 'DeleteHpcNodeGroupResponseShape', ],
        ],
        'SetHpcNodeGroupSize' => [
            'name' => 'SetHpcNodeGroupSize',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/hpcNodeGroups/{nodeGroupId}:setHpcNodeGroupSize',
            ],
            'input' => [ 'shape' => 'SetHpcNodeGroupSizeRequestShape', ],
            'output' => [ 'shape' => 'SetHpcNodeGroupSizeResponseShape', ],
        ],
        'ImportInstancesToHpcNodeGroup' => [
            'name' => 'ImportInstancesToHpcNodeGroup',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/hpcNodeGroups/{nodeGroupId}:importInstancesToHpcNodeGroup',
            ],
            'input' => [ 'shape' => 'ImportInstancesToHpcNodeGroupRequestShape', ],
            'output' => [ 'shape' => 'ImportInstancesToHpcNodeGroupResponseShape', ],
        ],
        'DescribeNodes' => [
            'name' => 'DescribeNodes',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/clusters/{clusterId}/nodes',
            ],
            'input' => [ 'shape' => 'DescribeNodesRequestShape', ],
            'output' => [ 'shape' => 'DescribeNodesResponseShape', ],
        ],
        'ResetNode' => [
            'name' => 'ResetNode',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/clusters/{clusterId}/nodes/{instanceId}:reset',
            ],
            'input' => [ 'shape' => 'ResetNodeRequestShape', ],
            'output' => [ 'shape' => 'ResetNodeResponseShape', ],
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
        'ModifyNodeGroupPassword' => [
            'name' => 'ModifyNodeGroupPassword',
            'http' => [
                'method' => 'PATCH',
                'requestUri' => '/v1/regions/{regionId}/nodeGroups/{nodeGroupId}:modifyNodeGroupPassword',
            ],
            'input' => [ 'shape' => 'ModifyNodeGroupPasswordRequestShape', ],
            'output' => [ 'shape' => 'ModifyNodeGroupPasswordResponseShape', ],
        ],
        'ImportInstancesToNodeGroup' => [
            'name' => 'ImportInstancesToNodeGroup',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/nodeGroups/{nodeGroupId}:importInstancesToNodeGroup',
            ],
            'input' => [ 'shape' => 'ImportInstancesToNodeGroupRequestShape', ],
            'output' => [ 'shape' => 'ImportInstancesToNodeGroupResponseShape', ],
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
        'DescribeInstanceTypeImages' => [
            'name' => 'DescribeInstanceTypeImages',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/instance-type-images',
            ],
            'input' => [ 'shape' => 'DescribeInstanceTypeImagesRequestShape', ],
            'output' => [ 'shape' => 'DescribeInstanceTypeImagesResponseShape', ],
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
        'ApiServerWhiteList' => [
            'type' => 'structure',
            'members' => [
                'enabled' => [ 'type' => 'boolean', 'locationName' => 'enabled', ],
                'apiServerWhiteList' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
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
        'ChargeConfigSpec' => [
            'type' => 'structure',
            'members' => [
                'chargeMode' => [ 'type' => 'string', 'locationName' => 'chargeMode', ],
                'chargeUnit' => [ 'type' => 'string', 'locationName' => 'chargeUnit', ],
                'chargeDuration' => [ 'type' => 'integer', 'locationName' => 'chargeDuration', ],
                'autoRenew' => [ 'type' => 'boolean', 'locationName' => 'autoRenew', ],
            ],
        ],
        'Summary' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'normalCount' => [ 'type' => 'integer', 'locationName' => 'normalCount', ],
                'infoCount' => [ 'type' => 'integer', 'locationName' => 'infoCount', ],
                'warningCount' => [ 'type' => 'integer', 'locationName' => 'warningCount', ],
                'fatalCount' => [ 'type' => 'integer', 'locationName' => 'fatalCount', ],
                'unknownCount' => [ 'type' => 'integer', 'locationName' => 'unknownCount', ],
            ],
        ],
        'ExtensionSpec' => [
            'type' => 'structure',
            'members' => [
                'key' => [ 'type' => 'string', 'locationName' => 'key', ],
                'value' => [ 'type' => 'string', 'locationName' => 'value', ],
            ],
        ],
        'Check' => [
            'type' => 'structure',
            'members' => [
                'checkId' => [ 'type' => 'string', 'locationName' => 'checkId', ],
                'state' => [ 'type' => 'string', 'locationName' => 'state', ],
                'type' => [ 'type' => 'string', 'locationName' => 'type', ],
                'startTime' => [ 'type' => 'string', 'locationName' => 'startTime', ],
                'finishTime' => [ 'type' => 'string', 'locationName' => 'finishTime', ],
                'summary' =>  [ 'shape' => 'Summary', ],
                'checkItemResults' => [ 'type' => 'list', 'member' => [ 'shape' => 'CheckItem', ], ],
            ],
        ],
        'CheckItem' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'group' => [ 'type' => 'string', 'locationName' => 'group', ],
                'category' => [ 'type' => 'string', 'locationName' => 'category', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'repairSuggestion' => [ 'type' => 'string', 'locationName' => 'repairSuggestion', ],
                'resource' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'level' => [ 'type' => 'string', 'locationName' => 'level', ],
                'extension' => [ 'type' => 'list', 'member' => [ 'shape' => 'ExtensionSpec', ], ],
            ],
        ],
        'CheckConfigSpec' => [
            'type' => 'structure',
            'members' => [
                'upgradeVersion' => [ 'type' => 'string', 'locationName' => 'upgradeVersion', ],
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
        'NodeGroup' => [
            'type' => 'structure',
            'members' => [
                'diskInitialize' =>  [ 'shape' => 'DiskInitializeSpec', ],
                'clusterId' => [ 'type' => 'string', 'locationName' => 'clusterId', ],
                'nodeGroupId' => [ 'type' => 'string', 'locationName' => 'nodeGroupId', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'nodeConfig' =>  [ 'shape' => 'NodeConfig', ],
                'version' => [ 'type' => 'string', 'locationName' => 'version', ],
                'upgradeVersion' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'nodeNetwork' =>  [ 'shape' => 'NodeNetwork', ],
                'currentCount' => [ 'type' => 'integer', 'locationName' => 'currentCount', ],
                'expectCount' => [ 'type' => 'integer', 'locationName' => 'expectCount', ],
                'agId' => [ 'type' => 'string', 'locationName' => 'agId', ],
                'azs' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'instanceTemplateId' => [ 'type' => 'string', 'locationName' => 'instanceTemplateId', ],
                'state' => [ 'type' => 'string', 'locationName' => 'state', ],
                'tags' => [ 'type' => 'list', 'member' => [ 'shape' => 'Tag', ], ],
                'resourceGroupId' => [ 'type' => 'string', 'locationName' => 'resourceGroupId', ],
                'updateTime' => [ 'type' => 'string', 'locationName' => 'updateTime', ],
                'stateMessage' => [ 'type' => 'string', 'locationName' => 'stateMessage', ],
                'progress' =>  [ 'shape' => 'NodeGroupProgress', ],
                'caConfig' =>  [ 'shape' => 'CAConfig', ],
                'createdTime' => [ 'type' => 'string', 'locationName' => 'createdTime', ],
                'instanceIds' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'nodeGroupType' => [ 'type' => 'string', 'locationName' => 'nodeGroupType', ],
                'hpcClusterId' => [ 'type' => 'string', 'locationName' => 'hpcClusterId', ],
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
                'options' => [ 'type' => 'object', 'locationName' => 'options', ],
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
        'DiskInitializeSpec' => [
            'type' => 'structure',
            'members' => [
                'layoutMode' => [ 'type' => 'string', 'locationName' => 'layoutMode', ],
                'csiReservedCapGB' => [ 'type' => 'long', 'locationName' => 'csiReservedCapGB', ],
                'diskPriority' => [ 'type' => 'string', 'locationName' => 'diskPriority', ],
                'splitStrategy' => [ 'type' => 'string', 'locationName' => 'splitStrategy', ],
                'containerWeight' => [ 'type' => 'integer', 'locationName' => 'containerWeight', ],
                'containerCapGB' => [ 'type' => 'integer', 'locationName' => 'containerCapGB', ],
                'rootfsQuotaGB' => [ 'type' => 'integer', 'locationName' => 'rootfsQuotaGB', ],
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
        'TaintSpec' => [
            'type' => 'structure',
            'members' => [
                'key' => [ 'type' => 'string', 'locationName' => 'key', ],
                'value' => [ 'type' => 'string', 'locationName' => 'value', ],
                'effect' => [ 'type' => 'string', 'locationName' => 'effect', ],
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
        'UserScriptSpec' => [
            'type' => 'structure',
            'members' => [
                'key' => [ 'type' => 'string', 'locationName' => 'key', ],
                'value' => [ 'type' => 'string', 'locationName' => 'value', ],
            ],
        ],
        'ClusterDnsZoneSpec' => [
            'type' => 'structure',
            'members' => [
                'zone' => [ 'type' => 'string', 'locationName' => 'zone', ],
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
                'taints' => [ 'type' => 'list', 'member' => [ 'shape' => 'TaintSpec', ], ],
                'updateExistNode' => [ 'type' => 'boolean', 'locationName' => 'updateExistNode', ],
                'userScripts' => [ 'type' => 'list', 'member' => [ 'shape' => 'UserScriptSpec', ], ],
                'dataDiskSpec' => [ 'type' => 'list', 'member' => [ 'shape' => 'DataDiskSpec', ], ],
                'systemDiskSpec' =>  [ 'shape' => 'DiskSpec', ],
                'securityGroup' => [ 'type' => 'string', 'locationName' => 'securityGroup', ],
                'chargeConfig' =>  [ 'shape' => 'ChargeConfigSpec', ],
            ],
        ],
        'LabelSpec' => [
            'type' => 'structure',
            'members' => [
                'key' => [ 'type' => 'string', 'locationName' => 'key', ],
                'value' => [ 'type' => 'string', 'locationName' => 'value', ],
            ],
        ],
        'ClusterDnsSpec' => [
            'type' => 'structure',
            'members' => [
                'hosts' => [ 'type' => 'map', 'key' => [ 'type' => 'string', ], 'value' => [ 'type' => 'string', ], ],
                'customizedZones' => [ 'type' => 'list', 'member' => [ 'shape' => 'ClusterDnsServerSpec', ], ],
            ],
        ],
        'Cluster' => [
            'type' => 'structure',
            'members' => [
                'clusterId' => [ 'type' => 'string', 'locationName' => 'clusterId', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'version' => [ 'type' => 'string', 'locationName' => 'version', ],
                'upgradeVersion' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
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
                'deleteProtected' => [ 'type' => 'boolean', 'locationName' => 'deleteProtected', ],
                'tags' => [ 'type' => 'list', 'member' => [ 'shape' => 'Tag', ], ],
                'resourceGroupId' => [ 'type' => 'string', 'locationName' => 'resourceGroupId', ],
                'isCreditNic' => [ 'type' => 'boolean', 'locationName' => 'isCreditNic', ],
                'clusterDnsSpec' =>  [ 'shape' => 'ClusterDnsSpec', ],
                'kubeApiserverDomains' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'Tag' => [
            'type' => 'structure',
            'members' => [
                'key' => [ 'type' => 'string', 'locationName' => 'key', ],
                'value' => [ 'type' => 'string', 'locationName' => 'value', ],
            ],
        ],
        'ClusterDnsServerSpec' => [
            'type' => 'structure',
            'members' => [
                'port' => [ 'type' => 'integer', 'locationName' => 'port', ],
                'zones' => [ 'type' => 'list', 'member' => [ 'shape' => 'ClusterDnsZoneSpec', ], ],
                'plugins' => [ 'type' => 'list', 'member' => [ 'shape' => 'ClusterDnsPlugin', ], ],
            ],
        ],
        'ClusterDnsPlugin' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'parameters' => [ 'type' => 'string', 'locationName' => 'parameters', ],
                'configBlock' => [ 'type' => 'string', 'locationName' => 'configBlock', ],
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
                'namespace' => [ 'type' => 'string', 'locationName' => 'namespace', ],
            ],
        ],
        'ClusterAddonVersionInfo' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'version' => [ 'type' => 'string', 'locationName' => 'version', ],
                'kubeVersion' => [ 'type' => 'string', 'locationName' => 'kubeVersion', ],
            ],
        ],
        'ClusterAddonRespStatus' => [
            'type' => 'structure',
            'members' => [
                'phase' => [ 'type' => 'string', 'locationName' => 'phase', ],
                'version' => [ 'type' => 'string', 'locationName' => 'version', ],
                'lastAddonVersion' => [ 'type' => 'string', 'locationName' => 'lastAddonVersion', ],
            ],
        ],
        'ClusterAddonInfo' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'displayName' => [ 'type' => 'string', 'locationName' => 'displayName', ],
                'catalog' => [ 'type' => 'string', 'locationName' => 'catalog', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'type' => [ 'type' => 'string', 'locationName' => 'type', ],
                'params' => [ 'type' => 'object', 'locationName' => 'params', ],
                'status' =>  [ 'shape' => 'ClusterAddonRespStatus', ],
            ],
        ],
        'ClusterAddonSpec' => [
            'type' => 'structure',
            'members' => [
                'version' => [ 'type' => 'string', 'locationName' => 'version', ],
                'params' => [ 'type' => 'object', 'locationName' => 'params', ],
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
        'ClusterOperationMeta' => [
            'type' => 'structure',
            'members' => [
                'resourceId' => [ 'type' => 'string', 'locationName' => 'resourceId', ],
                'resourceName' => [ 'type' => 'string', 'locationName' => 'resourceName', ],
                'operationId' => [ 'type' => 'string', 'locationName' => 'operationId', ],
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
                'namespace' => [ 'type' => 'string', 'locationName' => 'namespace', ],
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
        'LbConfig' => [
            'type' => 'structure',
            'members' => [
                'lbType' => [ 'type' => 'string', 'locationName' => 'lbType', ],
                'lbSubnetId' => [ 'type' => 'string', 'locationName' => 'lbSubnetId', ],
                'elasticIpSpec' =>  [ 'shape' => 'LbElasticIpSpec', ],
            ],
        ],
        'LbElasticIpSpec' => [
            'type' => 'structure',
            'members' => [
                'bandWidthMbps' => [ 'type' => 'integer', 'locationName' => 'bandWidthMbps', ],
                'provider' => [ 'type' => 'string', 'locationName' => 'provider', ],
                'chargeMode' => [ 'type' => 'string', 'locationName' => 'chargeMode', ],
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
                'lbConfig' =>  [ 'shape' => 'LbConfig', ],
                'hpcNodeSubnetId' => [ 'type' => 'string', 'locationName' => 'hpcNodeSubnetId', ],
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
        'HpcNodeConfig' => [
            'type' => 'structure',
            'members' => [
                'instanceType' => [ 'type' => 'string', 'locationName' => 'instanceType', ],
                'packageId' => [ 'type' => 'string', 'locationName' => 'packageId', ],
                'labels' => [ 'type' => 'list', 'member' => [ 'shape' => 'LabelSpec', ], ],
                'userScripts' => [ 'type' => 'list', 'member' => [ 'shape' => 'UserScriptSpec', ], ],
                'chargeConfig' =>  [ 'shape' => 'ChargeConfigSpec', ],
            ],
        ],
        'HpcNodeConfigSpec' => [
            'type' => 'structure',
            'members' => [
                'instanceType' => [ 'type' => 'string', 'locationName' => 'instanceType', ],
                'password' => [ 'type' => 'string', 'locationName' => 'password', ],
                'labels' => [ 'type' => 'list', 'member' => [ 'shape' => 'LabelSpec', ], ],
                'taints' => [ 'type' => 'list', 'member' => [ 'shape' => 'TaintSpec', ], ],
                'userScripts' => [ 'type' => 'list', 'member' => [ 'shape' => 'UserScriptSpec', ], ],
                'chargeConfig' =>  [ 'shape' => 'ChargeConfigSpec', ],
                'customizedImageId' => [ 'type' => 'string', 'locationName' => 'customizedImageId', ],
            ],
        ],
        'HpcNodeGroup' => [
            'type' => 'structure',
            'members' => [
                'diskInitialize' =>  [ 'shape' => 'DiskInitializeSpec', ],
                'clusterId' => [ 'type' => 'string', 'locationName' => 'clusterId', ],
                'nodeGroupId' => [ 'type' => 'string', 'locationName' => 'nodeGroupId', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'nodeConfig' =>  [ 'shape' => 'HpcNodeConfig', ],
                'version' => [ 'type' => 'string', 'locationName' => 'version', ],
                'nodeNetwork' =>  [ 'shape' => 'NodeNetwork', ],
                'currentCount' => [ 'type' => 'integer', 'locationName' => 'currentCount', ],
                'expectCount' => [ 'type' => 'integer', 'locationName' => 'expectCount', ],
                'azs' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'state' => [ 'type' => 'string', 'locationName' => 'state', ],
                'updateTime' => [ 'type' => 'string', 'locationName' => 'updateTime', ],
                'stateMessage' => [ 'type' => 'string', 'locationName' => 'stateMessage', ],
                'progress' =>  [ 'shape' => 'NodeGroupProgress', ],
                'createdTime' => [ 'type' => 'string', 'locationName' => 'createdTime', ],
                'instanceIds' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'HpcNodeGroupSpec' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'nodeConfig' =>  [ 'shape' => 'HpcNodeConfigSpec', ],
                'azs' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'initialNodeCount' => [ 'type' => 'integer', 'locationName' => 'initialNodeCount', ],
                'secondaryIpMaskLen' => [ 'type' => 'integer', 'locationName' => 'secondaryIpMaskLen', ],
                'diskInitialize' =>  [ 'shape' => 'DiskInitializeSpec', ],
                'resourceGroupId' => [ 'type' => 'string', 'locationName' => 'resourceGroupId', ],
                'tags' => [ 'type' => 'list', 'member' => [ 'shape' => 'Tag', ], ],
                'hpcClusterId' => [ 'type' => 'string', 'locationName' => 'hpcClusterId', ],
            ],
        ],
        'HpcNodeOsVersion' => [
            'type' => 'structure',
            'members' => [
                'packageId' => [ 'type' => 'string', 'locationName' => 'packageId', ],
                'osVersion' => [ 'type' => 'string', 'locationName' => 'osVersion', ],
            ],
        ],
        'InstanceSpec' => [
            'type' => 'structure',
            'members' => [
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'state' => [ 'type' => 'string', 'locationName' => 'state', ],
                'az' => [ 'type' => 'string', 'locationName' => 'az', ],
                'createdTime' => [ 'type' => 'string', 'locationName' => 'createdTime', ],
                'privateIpAddress' => [ 'type' => 'string', 'locationName' => 'privateIpAddress', ],
                'elasticIpAddress' => [ 'type' => 'string', 'locationName' => 'elasticIpAddress', ],
                'version' => [ 'type' => 'string', 'locationName' => 'version', ],
            ],
        ],
        'InstanceTypeImage' => [
            'type' => 'structure',
            'members' => [
                'serviceCode' => [ 'type' => 'string', 'locationName' => 'serviceCode', ],
                'imageId' => [ 'type' => 'string', 'locationName' => 'imageId', ],
                'imageName' => [ 'type' => 'string', 'locationName' => 'imageName', ],
                'driverVersion' => [ 'type' => 'string', 'locationName' => 'driverVersion', ],
                'cudaVersion' => [ 'type' => 'string', 'locationName' => 'cudaVersion', ],
                'diskCategory' => [ 'type' => 'string', 'locationName' => 'diskCategory', ],
                'architecture' => [ 'type' => 'string', 'locationName' => 'architecture', ],
                'osType' => [ 'type' => 'string', 'locationName' => 'osType', ],
                'platform' => [ 'type' => 'string', 'locationName' => 'platform', ],
                'osVersion' => [ 'type' => 'string', 'locationName' => 'osVersion', ],
                'kernelVersion' => [ 'type' => 'string', 'locationName' => 'kernelVersion', ],
                'containerRuntime' => [ 'type' => 'string', 'locationName' => 'containerRuntime', ],
                'systemDiskSizeGB' => [ 'type' => 'integer', 'locationName' => 'systemDiskSizeGB', ],
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
                'hpcNodeOsVersions' => [ 'type' => 'list', 'member' => [ 'shape' => 'HpcNodeOsVersion', ], ],
                'clusterAddons' => [ 'type' => 'list', 'member' => [ 'shape' => 'ClusterAddon', ], ],
            ],
        ],
        'NodeChargeConfig' => [
            'type' => 'structure',
            'members' => [
                'chargeMode' => [ 'type' => 'string', 'locationName' => 'chargeMode', ],
                'chargeUnit' => [ 'type' => 'string', 'locationName' => 'chargeUnit', ],
                'chargeDuration' => [ 'type' => 'integer', 'locationName' => 'chargeDuration', ],
                'autoRenew' => [ 'type' => 'boolean', 'locationName' => 'autoRenew', ],
            ],
        ],
        'NodeCondition' => [
            'type' => 'structure',
            'members' => [
                'type' => [ 'type' => 'string', 'locationName' => 'type', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'reason' => [ 'type' => 'string', 'locationName' => 'reason', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'lastTransitionTime' => [ 'type' => 'string', 'locationName' => 'lastTransitionTime', ],
            ],
        ],
        'NodeConfigSpec' => [
            'type' => 'structure',
            'members' => [
                'instanceType' => [ 'type' => 'string', 'locationName' => 'instanceType', ],
                'password' => [ 'type' => 'string', 'locationName' => 'password', ],
                'keyNames' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'passWordAuth' => [ 'type' => 'string', 'locationName' => 'passWordAuth', ],
                'systemDisk' =>  [ 'shape' => 'DiskSpec', ],
                'labels' => [ 'type' => 'list', 'member' => [ 'shape' => 'LabelSpec', ], ],
                'taints' => [ 'type' => 'list', 'member' => [ 'shape' => 'TaintSpec', ], ],
                'userScripts' => [ 'type' => 'list', 'member' => [ 'shape' => 'UserScriptSpec', ], ],
                'customizedImageId' => [ 'type' => 'string', 'locationName' => 'customizedImageId', ],
                'dataDiskSpec' => [ 'type' => 'list', 'member' => [ 'shape' => 'DataDiskSpec', ], ],
                'securityGroup' => [ 'type' => 'string', 'locationName' => 'securityGroup', ],
                'chargeConfig' =>  [ 'shape' => 'ChargeConfigSpec', ],
            ],
        ],
        'NodeDiskSpec' => [
            'type' => 'structure',
            'members' => [
                'diskType' => [ 'type' => 'string', 'locationName' => 'diskType', ],
                'diskSize' => [ 'type' => 'integer', 'locationName' => 'diskSize', ],
                'diskCategory' => [ 'type' => 'string', 'locationName' => 'diskCategory', ],
                'iops' => [ 'type' => 'integer', 'locationName' => 'iops', ],
                'autoDelete' => [ 'type' => 'boolean', 'locationName' => 'autoDelete', ],
                'deviceName' => [ 'type' => 'string', 'locationName' => 'deviceName', ],
            ],
        ],
        'NodeFilter' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'operator' => [ 'type' => 'string', 'locationName' => 'operator', ],
                'values' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'NodeGroupDataDiskSpec' => [
            'type' => 'structure',
            'members' => [
                'diskType' => [ 'type' => 'string', 'locationName' => 'diskType', ],
                'diskSize' => [ 'type' => 'integer', 'locationName' => 'diskSize', ],
                'fsType' => [ 'type' => 'string', 'locationName' => 'fsType', ],
            ],
        ],
        'NodeGroupNetworkSpec' => [
            'type' => 'structure',
            'members' => [
                'subnetId' => [ 'type' => 'string', 'locationName' => 'subnetId', ],
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
                'resourceGroupId' => [ 'type' => 'string', 'locationName' => 'resourceGroupId', ],
                'diskInitialize' =>  [ 'shape' => 'DiskInitializeSpec', ],
                'tags' => [ 'type' => 'list', 'member' => [ 'shape' => 'Tag', ], ],
                'containerRuntime' => [ 'type' => 'string', 'locationName' => 'containerRuntime', ],
            ],
        ],
        'NodeGroupSystemDiskSpec' => [
            'type' => 'structure',
            'members' => [
                'diskType' => [ 'type' => 'string', 'locationName' => 'diskType', ],
            ],
        ],
        'NodeMeta' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'instanceType' => [ 'type' => 'string', 'locationName' => 'instanceType', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'nodeConditions' => [ 'type' => 'list', 'member' => [ 'shape' => 'NodeCondition', ], ],
                'privateIpAddress' => [ 'type' => 'string', 'locationName' => 'privateIpAddress', ],
                'subnetId' => [ 'type' => 'string', 'locationName' => 'subnetId', ],
                'az' => [ 'type' => 'string', 'locationName' => 'az', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'imageId' => [ 'type' => 'string', 'locationName' => 'imageId', ],
                'systemDisk' =>  [ 'shape' => 'NodeDiskSpec', ],
                'dataDisk' => [ 'type' => 'list', 'member' => [ 'shape' => 'NodeDiskSpec', ], ],
                'chargeConfig' =>  [ 'shape' => 'NodeChargeConfig', ],
                'tags' => [ 'type' => 'map', 'key' => [ 'type' => 'string', ], 'value' => [ 'type' => 'string', ], ],
                'keyNames' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'securityGroup' => [ 'type' => 'string', 'locationName' => 'securityGroup', ],
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
        'OperationResource' => [
            'type' => 'structure',
            'members' => [
                'resourceType' => [ 'type' => 'string', 'locationName' => 'resourceType', ],
                'resourceId' => [ 'type' => 'string', 'locationName' => 'resourceId', ],
                'resourceName' => [ 'type' => 'string', 'locationName' => 'resourceName', ],
                'quantity' => [ 'type' => 'integer', 'locationName' => 'quantity', ],
            ],
        ],
        'OperationMetric' => [
            'type' => 'structure',
            'members' => [
                'total' => [ 'type' => 'integer', 'locationName' => 'total', ],
                'completed' => [ 'type' => 'integer', 'locationName' => 'completed', ],
                'running' => [ 'type' => 'integer', 'locationName' => 'running', ],
                'failed' => [ 'type' => 'integer', 'locationName' => 'failed', ],
                'pending' => [ 'type' => 'integer', 'locationName' => 'pending', ],
                'skipped' => [ 'type' => 'integer', 'locationName' => 'skipped', ],
                'percent' => [ 'type' => 'integer', 'locationName' => 'percent', ],
            ],
        ],
        'Operation' => [
            'type' => 'structure',
            'members' => [
                'operationId' => [ 'type' => 'string', 'locationName' => 'operationId', ],
                'operationType' => [ 'type' => 'string', 'locationName' => 'operationType', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'target' =>  [ 'shape' => 'OperationResource', ],
                'progress' =>  [ 'shape' => 'OperationMetric', ],
                'currentStageId' => [ 'type' => 'string', 'locationName' => 'currentStageId', ],
                'startedTime' => [ 'type' => 'string', 'locationName' => 'startedTime', ],
                'updatedTime' => [ 'type' => 'string', 'locationName' => 'updatedTime', ],
                'finishedTime' => [ 'type' => 'string', 'locationName' => 'finishedTime', ],
                'error' =>  [ 'shape' => 'OperationError', ],
                'capabilities' =>  [ 'shape' => 'OperationCapabilities', ],
            ],
        ],
        'OperationLatestSummary' => [
            'type' => 'structure',
            'members' => [
                'clusterId' => [ 'type' => 'string', 'locationName' => 'clusterId', ],
                'resourceType' => [ 'type' => 'string', 'locationName' => 'resourceType', ],
                'resourceId' => [ 'type' => 'string', 'locationName' => 'resourceId', ],
                'operationId' => [ 'type' => 'string', 'locationName' => 'operationId', ],
                'operationType' => [ 'type' => 'string', 'locationName' => 'operationType', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'progress' =>  [ 'shape' => 'OperationMetric', ],
                'currentStageId' => [ 'type' => 'string', 'locationName' => 'currentStageId', ],
                'error' =>  [ 'shape' => 'OperationError', ],
                'errorCode' => [ 'type' => 'string', 'locationName' => 'errorCode', ],
                'errorMessage' => [ 'type' => 'string', 'locationName' => 'errorMessage', ],
            ],
        ],
        'OperationCapabilities' => [
            'type' => 'structure',
            'members' => [
                'cancellable' => [ 'type' => 'boolean', 'locationName' => 'cancellable', ],
                'retryable' => [ 'type' => 'boolean', 'locationName' => 'retryable', ],
            ],
        ],
        'OperationStep' => [
            'type' => 'structure',
            'members' => [
                'stepId' => [ 'type' => 'string', 'locationName' => 'stepId', ],
                'title' => [ 'type' => 'string', 'locationName' => 'title', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'progress' =>  [ 'shape' => 'OperationMetric', ],
                'resources' => [ 'type' => 'list', 'member' => [ 'shape' => 'OperationResource', ], ],
                'error' =>  [ 'shape' => 'OperationError', ],
            ],
        ],
        'OperationError' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'reason' => [ 'type' => 'string', 'locationName' => 'reason', ],
                'suggestion' => [ 'type' => 'string', 'locationName' => 'suggestion', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ChildOperationSummary' => [
            'type' => 'structure',
            'members' => [
                'operationId' => [ 'type' => 'string', 'locationName' => 'operationId', ],
                'operationType' => [ 'type' => 'string', 'locationName' => 'operationType', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'target' =>  [ 'shape' => 'OperationResource', ],
                'progress' =>  [ 'shape' => 'OperationMetric', ],
            ],
        ],
        'OperationStage' => [
            'type' => 'structure',
            'members' => [
                'stageId' => [ 'type' => 'string', 'locationName' => 'stageId', ],
                'title' => [ 'type' => 'string', 'locationName' => 'title', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'progress' =>  [ 'shape' => 'OperationMetric', ],
                'steps' => [ 'type' => 'list', 'member' => [ 'shape' => 'OperationStep', ], ],
            ],
        ],
        'OperationDetailItem' => [
            'type' => 'structure',
            'members' => [
                'operationId' => [ 'type' => 'string', 'locationName' => 'operationId', ],
                'operation' =>  [ 'shape' => 'Operation', ],
                'stages' => [ 'type' => 'list', 'member' => [ 'shape' => 'OperationStage', ], ],
                'childOperations' => [ 'type' => 'list', 'member' => [ 'shape' => 'ChildOperationSummary', ], ],
                'revision' => [ 'type' => 'string', 'locationName' => 'revision', ],
                'nextPollIntervalSeconds' => [ 'type' => 'integer', 'locationName' => 'nextPollIntervalSeconds', ],
                'errorCode' => [ 'type' => 'string', 'locationName' => 'errorCode', ],
                'errorMessage' => [ 'type' => 'string', 'locationName' => 'errorMessage', ],
            ],
        ],
        'OperationNode' => [
            'type' => 'structure',
            'members' => [
                'nodeName' => [ 'type' => 'string', 'locationName' => 'nodeName', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'OperationResourceKey' => [
            'type' => 'structure',
            'members' => [
                'clusterId' => [ 'type' => 'string', 'locationName' => 'clusterId', ],
                'nodeGroupId' => [ 'type' => 'string', 'locationName' => 'nodeGroupId', ],
                'operationType' => [ 'type' => 'string', 'locationName' => 'operationType', ],
            ],
        ],
        'OperationSummary' => [
            'type' => 'structure',
            'members' => [
                'operationId' => [ 'type' => 'string', 'locationName' => 'operationId', ],
                'operationType' => [ 'type' => 'string', 'locationName' => 'operationType', ],
                'operationStatus' => [ 'type' => 'string', 'locationName' => 'operationStatus', ],
                'expectedAdd' => [ 'type' => 'integer', 'locationName' => 'expectedAdd', ],
                'capturedCount' => [ 'type' => 'integer', 'locationName' => 'capturedCount', ],
                'createdTime' => [ 'type' => 'string', 'locationName' => 'createdTime', ],
                'finishedAt' => [ 'type' => 'string', 'locationName' => 'finishedAt', ],
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
        'CidrConfig' => [
            'type' => 'structure',
            'members' => [
                'cidr' => [ 'type' => 'string', 'locationName' => 'cidr', ],
                'nodeCount' => [ 'type' => 'integer', 'locationName' => 'nodeCount', ],
                'serviceCount' => [ 'type' => 'string', 'locationName' => 'serviceCount', ],
                'serviceLbCount' => [ 'type' => 'string', 'locationName' => 'serviceLbCount', ],
                'podCount' => [ 'type' => 'string', 'locationName' => 'podCount', ],
            ],
        ],
        'RecommendNetConfig' => [
            'type' => 'structure',
            'members' => [
                'masterCidr' => [ 'type' => 'string', 'locationName' => 'masterCidr', ],
                'maskTypes' => [ 'type' => 'list', 'member' => [ 'type' => 'integer', ], ],
                'cidrConfigs' => [ 'type' => 'object', 'locationName' => 'cidrConfigs', ],
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
        'UpgradeConfigSpec' => [
            'type' => 'structure',
            'members' => [
                'options' => [ 'type' => 'object', 'locationName' => 'options', ],
            ],
        ],
        'UpgradeHistory' => [
            'type' => 'structure',
            'members' => [
                'clusterId' => [ 'type' => 'string', 'locationName' => 'clusterId', ],
                'nodeGroupId' => [ 'type' => 'string', 'locationName' => 'nodeGroupId', ],
                'upgradeVersion' => [ 'type' => 'string', 'locationName' => 'upgradeVersion', ],
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
                'updatedCount' => [ 'type' => 'integer', 'locationName' => 'updatedCount', ],
                'upgradeResult' => [ 'type' => 'string', 'locationName' => 'upgradeResult', ],
                'startTime' => [ 'type' => 'string', 'locationName' => 'startTime', ],
                'finishTime' => [ 'type' => 'string', 'locationName' => 'finishTime', ],
            ],
        ],
        'DescribeMatchAzsResultShape' => [
            'type' => 'structure',
            'members' => [
                'azs' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'DescribeMatchAzsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeMatchAzsResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeMatchAzsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'clusterId' => [ 'type' => 'string', 'locationName' => 'clusterId', ],
                'azs' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DescribeClusterStateResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeClusterStateResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeClusterChecksResultShape' => [
            'type' => 'structure',
            'members' => [
                'clusterId' => [ 'type' => 'string', 'locationName' => 'clusterId', ],
                'checks' => [ 'type' => 'list', 'member' => [ 'shape' => 'Check', ], ],
            ],
        ],
        'DescribeClusterCheckResultShape' => [
            'type' => 'structure',
            'members' => [
                'clusterId' => [ 'type' => 'string', 'locationName' => 'clusterId', ],
                'check' =>  [ 'shape' => 'Check', ],
            ],
        ],
        'DescribeClusterChecksRequestShape' => [
            'type' => 'structure',
            'members' => [
                'type' => [ 'type' => 'string', 'locationName' => 'type', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'clusterId' => [ 'type' => 'string', 'locationName' => 'clusterId', ],
            ],
        ],
        'CreateClusterResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'CreateClusterResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeOperationNodesResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeOperationNodesResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeClusterCheckResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeClusterCheckResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DeleteNodeInstances2RequestShape' => [
            'type' => 'structure',
            'members' => [
                'instanceIds' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'realDeleteInstance' => [ 'type' => 'boolean', 'locationName' => 'realDeleteInstance', ],
                'diskAutoDelete' => [ 'type' => 'boolean', 'locationName' => 'diskAutoDelete', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'clusterId' => [ 'type' => 'string', 'locationName' => 'clusterId', ],
            ],
        ],
        'DescribeClusterCheckRequestShape' => [
            'type' => 'structure',
            'members' => [
                'checkId' => [ 'type' => 'string', 'locationName' => 'checkId', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'clusterId' => [ 'type' => 'string', 'locationName' => 'clusterId', ],
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
        'DescribeProxyKubeConfigRequestShape' => [
            'type' => 'structure',
            'members' => [
                'asGroup' => [ 'type' => 'string', 'locationName' => 'asGroup', ],
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
        'DescribeProxyKubeConfigResultShape' => [
            'type' => 'structure',
            'members' => [
                'kubeconfigDetail' => [ 'type' => 'string', 'locationName' => 'kubeconfigDetail', ],
            ],
        ],
        'DescribeProxyKubeConfigResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeProxyKubeConfigResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeOperationNodesResultShape' => [
            'type' => 'structure',
            'members' => [
                'operation' =>  [ 'shape' => 'OperationSummary', ],
                'nodes' => [ 'type' => 'list', 'member' => [ 'shape' => 'OperationNode', ], ],
                'totalCount' => [ 'type' => 'double', 'locationName' => 'totalCount', ],
            ],
        ],
        'DescribeLatestOperationsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeLatestOperationsResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeOperationResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeOperationResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeOperationRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'clusterId' => [ 'type' => 'string', 'locationName' => 'clusterId', ],
                'operationId' => [ 'type' => 'string', 'locationName' => 'operationId', ],
            ],
        ],
        'DescribeOperationResultShape' => [
            'type' => 'structure',
            'members' => [
                'operation' =>  [ 'shape' => 'Operation', ],
                'stages' => [ 'type' => 'list', 'member' => [ 'shape' => 'OperationStage', ], ],
                'childOperations' => [ 'type' => 'list', 'member' => [ 'shape' => 'ChildOperationSummary', ], ],
                'revision' => [ 'type' => 'string', 'locationName' => 'revision', ],
                'nextPollIntervalSeconds' => [ 'type' => 'integer', 'locationName' => 'nextPollIntervalSeconds', ],
            ],
        ],
        'DeleteNodeInstances2ResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DescribeLatestOperationsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'resources' => [ 'type' => 'list', 'member' => [ 'shape' => 'OperationResourceKey', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DescribeClusterResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeClusterResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeOperationsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeOperationsResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ModifyClusterRequestShape' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'deleteProtected' => [ 'type' => 'boolean', 'locationName' => 'deleteProtected', ],
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
        'ModifyClusterResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'CreateClusterRequestShape' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'version' => [ 'type' => 'string', 'locationName' => 'version', ],
                'resourceGroupId' => [ 'type' => 'string', 'locationName' => 'resourceGroupId', ],
                'tags' => [ 'type' => 'list', 'member' => [ 'shape' => 'Tag', ], ],
                'isEdge' => [ 'type' => 'boolean', 'locationName' => 'isEdge', ],
                'deleteProtected' => [ 'type' => 'boolean', 'locationName' => 'deleteProtected', ],
                'isCreditNic' => [ 'type' => 'boolean', 'locationName' => 'isCreditNic', ],
                'azs' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'nodeGroup' =>  [ 'shape' => 'NodeGroupSpec', ],
                'hpcNodeGroup' =>  [ 'shape' => 'HpcNodeGroupSpec', ],
                'accessKey' => [ 'type' => 'string', 'locationName' => 'accessKey', ],
                'secretKey' => [ 'type' => 'string', 'locationName' => 'secretKey', ],
                'addonsConfig' => [ 'type' => 'list', 'member' => [ 'shape' => 'AddonConfigSpec', ], ],
                'clusterNetworkType' => [ 'type' => 'string', 'locationName' => 'clusterNetworkType', ],
                'autoClusterNetworkSpec' =>  [ 'shape' => 'AutoClusterNetworkSpec', ],
                'customizedClusterNetworkSpec' =>  [ 'shape' => 'CustomizedClusterNetworkSpec', ],
                'clusterEnvironments' => [ 'type' => 'list', 'member' => [ 'shape' => 'StringKeyValuePair', ], ],
                'clusterDnsSpec' =>  [ 'shape' => 'ClusterDnsSpec', ],
                'kubeApiserverDomains' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
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
        'AddClusterNetworkDetailRequestShape' => [
            'type' => 'structure',
            'members' => [
                'resourceType' => [ 'type' => 'string', 'locationName' => 'resourceType', ],
                'resourceId' => [ 'type' => 'string', 'locationName' => 'resourceId', ],
                'enabled' => [ 'type' => 'boolean', 'locationName' => 'enabled', ],
                'namespace' => [ 'type' => 'string', 'locationName' => 'namespace', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'clusterId' => [ 'type' => 'string', 'locationName' => 'clusterId', ],
            ],
        ],
        'DescribeOperationNodesRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'clusterId' => [ 'type' => 'string', 'locationName' => 'clusterId', ],
                'operationId' => [ 'type' => 'string', 'locationName' => 'operationId', ],
            ],
        ],
        'DescribeClustersResultShape' => [
            'type' => 'structure',
            'members' => [
                'clusters' => [ 'type' => 'list', 'member' => [ 'shape' => 'Cluster', ], ],
                'totalCount' => [ 'type' => 'double', 'locationName' => 'totalCount', ],
            ],
        ],
        'DescribeOperationsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'operationIds' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DescribeLatestOperationRequestShape' => [
            'type' => 'structure',
            'members' => [
                'nodeGroupId' => [ 'type' => 'string', 'locationName' => 'nodeGroupId', ],
                'operationType' => [ 'type' => 'string', 'locationName' => 'operationType', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'clusterId' => [ 'type' => 'string', 'locationName' => 'clusterId', ],
            ],
        ],
        'AddClusterNetworkDetailResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DescribeClusterStateResultShape' => [
            'type' => 'structure',
            'members' => [
                'clusterState' => [ 'type' => 'string', 'locationName' => 'clusterState', ],
                'stateMessage' => [ 'type' => 'string', 'locationName' => 'stateMessage', ],
            ],
        ],
        'DescribeClustersRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'tags' => [ 'type' => 'list', 'member' => [ 'shape' => 'TagFilter', ], ],
                'filters' => [ 'type' => 'list', 'member' => [ 'shape' => 'Filter', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DescribeClusterRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'clusterId' => [ 'type' => 'string', 'locationName' => 'clusterId', ],
            ],
        ],
        'DeleteNodeInstances2ResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'AddClusterNetworkDetailResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeClusterChecksResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeClusterChecksResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'CreateClusterResultShape' => [
            'type' => 'structure',
            'members' => [
                'clusterId' => [ 'type' => 'string', 'locationName' => 'clusterId', ],
                'operations' => [ 'type' => 'list', 'member' => [ 'shape' => 'ClusterOperationMeta', ], ],
            ],
        ],
        'DescribeLatestOperationsResultShape' => [
            'type' => 'structure',
            'members' => [
                'items' => [ 'type' => 'list', 'member' => [ 'shape' => 'OperationLatestSummary', ], ],
                'nextPollIntervalSeconds' => [ 'type' => 'integer', 'locationName' => 'nextPollIntervalSeconds', ],
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
        'DescribeLatestOperationResultShape' => [
            'type' => 'structure',
            'members' => [
                'clusterId' => [ 'type' => 'string', 'locationName' => 'clusterId', ],
                'resourceType' => [ 'type' => 'string', 'locationName' => 'resourceType', ],
                'resourceId' => [ 'type' => 'string', 'locationName' => 'resourceId', ],
                'operationId' => [ 'type' => 'string', 'locationName' => 'operationId', ],
                'operationType' => [ 'type' => 'string', 'locationName' => 'operationType', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'progress' =>  [ 'shape' => 'OperationMetric', ],
                'currentStageId' => [ 'type' => 'string', 'locationName' => 'currentStageId', ],
                'error' =>  [ 'shape' => 'OperationError', ],
                'errorCode' => [ 'type' => 'string', 'locationName' => 'errorCode', ],
                'errorMessage' => [ 'type' => 'string', 'locationName' => 'errorMessage', ],
                'nextPollIntervalSeconds' => [ 'type' => 'integer', 'locationName' => 'nextPollIntervalSeconds', ],
            ],
        ],
        'DescribeLatestOperationResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeLatestOperationResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeOperationsResultShape' => [
            'type' => 'structure',
            'members' => [
                'items' => [ 'type' => 'list', 'member' => [ 'shape' => 'OperationDetailItem', ], ],
            ],
        ],
        'DeleteClusterResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeClusterStateRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'clusterId' => [ 'type' => 'string', 'locationName' => 'clusterId', ],
            ],
        ],
        'SetHpcNodeGroupSizeResultShape' => [
            'type' => 'structure',
            'members' => [
                'taskId' => [ 'type' => 'long', 'locationName' => 'taskId', ],
                'operationId' => [ 'type' => 'string', 'locationName' => 'operationId', ],
            ],
        ],
        'ImportInstancesToHpcNodeGroupResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'ImportInstancesToHpcNodeGroupResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ImportInstancesToHpcNodeGroupRequestShape' => [
            'type' => 'structure',
            'members' => [
                'instances' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'password' => [ 'type' => 'string', 'locationName' => 'password', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'nodeGroupId' => [ 'type' => 'string', 'locationName' => 'nodeGroupId', ],
            ],
        ],
        'CreateHpcNodeGroupRequestShape' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'clusterId' => [ 'type' => 'string', 'locationName' => 'clusterId', ],
                'nodeConfig' =>  [ 'shape' => 'HpcNodeConfigSpec', ],
                'azs' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'initialNodeCount' => [ 'type' => 'integer', 'locationName' => 'initialNodeCount', ],
                'secondaryIpMaskLen' => [ 'type' => 'integer', 'locationName' => 'secondaryIpMaskLen', ],
                'diskInitialize' =>  [ 'shape' => 'DiskInitializeSpec', ],
                'hpcClusterId' => [ 'type' => 'string', 'locationName' => 'hpcClusterId', ],
                'resourceGroupId' => [ 'type' => 'string', 'locationName' => 'resourceGroupId', ],
                'tags' => [ 'type' => 'list', 'member' => [ 'shape' => 'Tag', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'CreateHpcNodeGroupResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'CreateHpcNodeGroupResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'SetHpcNodeGroupSizeResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'SetHpcNodeGroupSizeResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DeleteHpcNodeGroupRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'nodeGroupId' => [ 'type' => 'string', 'locationName' => 'nodeGroupId', ],
            ],
        ],
        'DeleteHpcNodeGroupResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'CreateHpcNodeGroupResultShape' => [
            'type' => 'structure',
            'members' => [
                'nodeGroupId' => [ 'type' => 'string', 'locationName' => 'nodeGroupId', ],
                'operationId' => [ 'type' => 'string', 'locationName' => 'operationId', ],
            ],
        ],
        'SetHpcNodeGroupSizeRequestShape' => [
            'type' => 'structure',
            'members' => [
                'expectCount' => [ 'type' => 'integer', 'locationName' => 'expectCount', ],
                'secondaryIpMaskLen' => [ 'type' => 'integer', 'locationName' => 'secondaryIpMaskLen', ],
                'diskInitialize' =>  [ 'shape' => 'DiskInitializeSpec', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'nodeGroupId' => [ 'type' => 'string', 'locationName' => 'nodeGroupId', ],
            ],
        ],
        'DescribeNodesResultShape' => [
            'type' => 'structure',
            'members' => [
                'nodes' => [ 'type' => 'list', 'member' => [ 'shape' => 'NodeMeta', ], ],
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
            ],
        ],
        'DescribeNodesRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'filters' => [ 'type' => 'list', 'member' => [ 'shape' => 'Filter', ], ],
                'orderBy' => [ 'type' => 'string', 'locationName' => 'orderBy', ],
                'orderDirection' => [ 'type' => 'string', 'locationName' => 'orderDirection', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'clusterId' => [ 'type' => 'string', 'locationName' => 'clusterId', ],
            ],
        ],
        'ResetNodeResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'ResetNodeResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ResetNodeRequestShape' => [
            'type' => 'structure',
            'members' => [
                'imageId' => [ 'type' => 'string', 'locationName' => 'imageId', ],
                'autoStop' => [ 'type' => 'boolean', 'locationName' => 'autoStop', ],
                'password' => [ 'type' => 'string', 'locationName' => 'password', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'clusterId' => [ 'type' => 'string', 'locationName' => 'clusterId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'DescribeNodesResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeNodesResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
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
                'taskId' => [ 'type' => 'double', 'locationName' => 'taskId', ],
                'operationId' => [ 'type' => 'string', 'locationName' => 'operationId', ],
            ],
        ],
        'ImportInstancesToNodeGroupResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
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
        'DescribeNodeGroupResultShape' => [
            'type' => 'structure',
            'members' => [
                'nodeGroup' =>  [ 'shape' => 'NodeGroup', ],
            ],
        ],
        'ImportInstancesToNodeGroupRequestShape' => [
            'type' => 'structure',
            'members' => [
                'instances' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'password' => [ 'type' => 'string', 'locationName' => 'password', ],
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
        'ImportInstancesToNodeGroupResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'SetNodeGroupCAResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'ModifyNodeGroupPasswordResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'CreateNodeGroupRequestShape' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'clusterId' => [ 'type' => 'string', 'locationName' => 'clusterId', ],
                'resourceGroupId' => [ 'type' => 'string', 'locationName' => 'resourceGroupId', ],
                'nodeConfig' =>  [ 'shape' => 'NodeConfigSpec', ],
                'azs' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'initialNodeCount' => [ 'type' => 'integer', 'locationName' => 'initialNodeCount', ],
                'caConfig' =>  [ 'shape' => 'CAConfigSpec', ],
                'nodeGroupNetwork' =>  [ 'shape' => 'NodeGroupNetworkSpec', ],
                'diskInitialize' =>  [ 'shape' => 'DiskInitializeSpec', ],
                'tags' => [ 'type' => 'list', 'member' => [ 'shape' => 'Tag', ], ],
                'containerRuntime' => [ 'type' => 'string', 'locationName' => 'containerRuntime', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'CreateNodeGroupResultShape' => [
            'type' => 'structure',
            'members' => [
                'nodeGroupId' => [ 'type' => 'string', 'locationName' => 'nodeGroupId', ],
                'operationId' => [ 'type' => 'string', 'locationName' => 'operationId', ],
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
                'result' =>  [ 'shape' => 'SetNodeGroupSizeResultShape', ],
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
        'ModifyNodeGroupPasswordResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ModifyNodeGroupRequestShape' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'labels' => [ 'type' => 'list', 'member' => [ 'shape' => 'LabelSpec', ], ],
                'taints' => [ 'type' => 'list', 'member' => [ 'shape' => 'TaintSpec', ], ],
                'updateExistNode' => [ 'type' => 'boolean', 'locationName' => 'updateExistNode', ],
                'diskInitialize' =>  [ 'shape' => 'DiskInitializeSpec', ],
                'systemDisk' =>  [ 'shape' => 'NodeGroupSystemDiskSpec', ],
                'dataDisks' => [ 'type' => 'list', 'member' => [ 'shape' => 'NodeGroupDataDiskSpec', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'nodeGroupId' => [ 'type' => 'string', 'locationName' => 'nodeGroupId', ],
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
                'realDeleteInstance' => [ 'type' => 'boolean', 'locationName' => 'realDeleteInstance', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'nodeGroupId' => [ 'type' => 'string', 'locationName' => 'nodeGroupId', ],
            ],
        ],
        'SetNodeGroupSizeRequestShape' => [
            'type' => 'structure',
            'members' => [
                'expectCount' => [ 'type' => 'integer', 'locationName' => 'expectCount', ],
                'diskInitialize' =>  [ 'shape' => 'DiskInitializeSpec', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'nodeGroupId' => [ 'type' => 'string', 'locationName' => 'nodeGroupId', ],
            ],
        ],
        'ModifyNodeGroupPasswordRequestShape' => [
            'type' => 'structure',
            'members' => [
                'password' => [ 'type' => 'string', 'locationName' => 'password', ],
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
        'DeleteNodeInstancesResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
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
        'DescribeInstanceTypeImagesRequestShape' => [
            'type' => 'structure',
            'members' => [
                'kubernetesVersion' => [ 'type' => 'string', 'locationName' => 'kubernetesVersion', ],
                'instanceType' => [ 'type' => 'string', 'locationName' => 'instanceType', ],
                'includeDisabledImages' => [ 'type' => 'boolean', 'locationName' => 'includeDisabledImages', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DescribeInstanceTypeImagesResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeInstanceTypeImagesResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeVersionsResultShape' => [
            'type' => 'structure',
            'members' => [
                'masterVersions' => [ 'type' => 'list', 'member' => [ 'shape' => 'MasterVersion', ], ],
            ],
        ],
        'DescribeInstanceTypeImagesResultShape' => [
            'type' => 'structure',
            'members' => [
                'images' => [ 'type' => 'list', 'member' => [ 'shape' => 'InstanceTypeImage', ], ],
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
