<?php
// This file was auto-generated
return [
//    'version' => '',
    'metadata' =>
    [
//        'apiVersion' => '',
//        'endpointPrefix' => 'jmr',
        'protocol' => 'json',
//        'serviceFullName' => 'jmr',
//        'serviceId' => 'jmr',
    ],
    'operations' => [
        'IdataCluster' => [
            'name' => 'IdataCluster',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/idata',
            ],
            'input' => [ 'shape' => 'IdataClusterRequestShape', ],
            'output' => [ 'shape' => 'IdataClusterResponseShape', ],
        ],
        'GetSoftwareInfo' => [
            'name' => 'GetSoftwareInfo',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/softwareInfo',
            ],
            'input' => [ 'shape' => 'GetSoftwareInfoRequestShape', ],
            'output' => [ 'shape' => 'GetSoftwareInfoResponseShape', ],
        ],
        'GetJmrVersionList' => [
            'name' => 'GetJmrVersionList',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/jmrVersions',
            ],
            'input' => [ 'shape' => 'GetJmrVersionListRequestShape', ],
            'output' => [ 'shape' => 'GetJmrVersionListResponseShape', ],
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
        'DescribeClusters' => [
            'name' => 'DescribeClusters',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/clusters',
            ],
            'input' => [ 'shape' => 'DescribeClustersRequestShape', ],
            'output' => [ 'shape' => 'DescribeClustersResponseShape', ],
        ],
        'ReleaseCluster' => [
            'name' => 'ReleaseCluster',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/clusters/{clusterId}:release',
            ],
            'input' => [ 'shape' => 'ReleaseClusterRequestShape', ],
            'output' => [ 'shape' => 'ReleaseClusterResponseShape', ],
        ],
        'ClusterExpansion' => [
            'name' => 'ClusterExpansion',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/cluster:expansion',
            ],
            'input' => [ 'shape' => 'ClusterExpansionRequestShape', ],
            'output' => [ 'shape' => 'ClusterExpansionResponseShape', ],
        ],
        'CreateCluster' => [
            'name' => 'CreateCluster',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/cluster:create',
            ],
            'input' => [ 'shape' => 'CreateClusterRequestShape', ],
            'output' => [ 'shape' => 'CreateClusterResponseShape', ],
        ],
    ],
    'shapes' => [
        'SoftwareStack' => [
            'type' => 'structure',
            'members' => [
                'software' => [ 'type' => 'string', 'locationName' => 'software', ],
                'version' => [ 'type' => 'string', 'locationName' => 'version', ],
            ],
        ],
        'Cluster' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'dataCenter' => [ 'type' => 'string', 'locationName' => 'dataCenter', ],
                'clusterPrimaryId' => [ 'type' => 'string', 'locationName' => 'clusterPrimaryId', ],
                'monitorResourceId' => [ 'type' => 'string', 'locationName' => 'monitorResourceId', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'softwareStack' =>  [ 'shape' => 'SoftwareStack', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'haFlag' => [ 'type' => 'boolean', 'locationName' => 'haFlag', ],
                'jssFlag' => [ 'type' => 'boolean', 'locationName' => 'jssFlag', ],
                'payPrice' => [ 'type' => 'double', 'locationName' => 'payPrice', ],
                'payType' => [ 'type' => 'string', 'locationName' => 'payType', ],
                'duration' => [ 'type' => 'string', 'locationName' => 'duration', ],
                'nodeCount' => [ 'type' => 'integer', 'locationName' => 'nodeCount', ],
                'hardware' => [ 'type' => 'list', 'member' => [ 'shape' => 'ClusterNode', ], ],
            ],
        ],
        'ClusterNode' => [
            'type' => 'structure',
            'members' => [
                'serverId' => [ 'type' => 'string', 'locationName' => 'serverId', ],
                'instanceInfo' => [ 'type' => 'string', 'locationName' => 'instanceInfo', ],
                'nodeName' => [ 'type' => 'string', 'locationName' => 'nodeName', ],
                'nodeSystemDiskType' => [ 'type' => 'string', 'locationName' => 'nodeSystemDiskType', ],
                'instanceType' => [ 'type' => 'string', 'locationName' => 'instanceType', ],
                'nodeStatus' => [ 'type' => 'string', 'locationName' => 'nodeStatus', ],
                'nodeDiskType' => [ 'type' => 'string', 'locationName' => 'nodeDiskType', ],
                'nodeType' => [ 'type' => 'string', 'locationName' => 'nodeType', ],
                'outerIp' => [ 'type' => 'string', 'locationName' => 'outerIp', ],
                'innerIp' => [ 'type' => 'string', 'locationName' => 'innerIp', ],
                'nodeSystemDiskVolume' => [ 'type' => 'integer', 'locationName' => 'nodeSystemDiskVolume', ],
                'nodeDiskVolume' => [ 'type' => 'integer', 'locationName' => 'nodeDiskVolume', ],
                'msg' => [ 'type' => 'string', 'locationName' => 'msg', ],
                'nodeSystemInfo' => [ 'type' => 'string', 'locationName' => 'nodeSystemInfo', ],
                'nodeDiskCategory' => [ 'type' => 'string', 'locationName' => 'nodeDiskCategory', ],
                'nodeSystemDiskCategory' => [ 'type' => 'string', 'locationName' => 'nodeSystemDiskCategory', ],
                'nodeCoreNum' => [ 'type' => 'integer', 'locationName' => 'nodeCoreNum', ],
                'nodeMemoryNum' => [ 'type' => 'integer', 'locationName' => 'nodeMemoryNum', ],
            ],
        ],
        'ClusterExpansion' => [
            'type' => 'structure',
            'members' => [
                'clusterId' => [ 'type' => 'string', 'locationName' => 'clusterId', ],
                'expansionNum' => [ 'type' => 'string', 'locationName' => 'expansionNum', ],
                'nodeType' => [ 'type' => 'string', 'locationName' => 'nodeType', ],
            ],
        ],
        'ClusterListNode' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'dataCenter' => [ 'type' => 'string', 'locationName' => 'dataCenter', ],
                'recordId' => [ 'type' => 'integer', 'locationName' => 'recordId', ],
                'monitorResourceId' => [ 'type' => 'string', 'locationName' => 'monitorResourceId', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'errorMessage' => [ 'type' => 'string', 'locationName' => 'errorMessage', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'payType' => [ 'type' => 'string', 'locationName' => 'payType', ],
                'duration' => [ 'type' => 'string', 'locationName' => 'duration', ],
                'outerIp' => [ 'type' => 'string', 'locationName' => 'outerIp', ],
            ],
        ],
        'ClusterNodeDisk' => [
            'type' => 'structure',
            'members' => [
                'clusterNodeDiskId' => [ 'type' => 'string', 'locationName' => 'clusterNodeDiskId', ],
                'clusterNodeDiskType' => [ 'type' => 'string', 'locationName' => 'clusterNodeDiskType', ],
                'clusterNodeDiskSize' => [ 'type' => 'integer', 'locationName' => 'clusterNodeDiskSize', ],
            ],
        ],
        'ClusterSpec' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'password' => [ 'type' => 'string', 'locationName' => 'password', ],
                'version' => [ 'type' => 'string', 'locationName' => 'version', ],
                'payType' => [ 'type' => 'string', 'locationName' => 'payType', ],
                'masterNodeCount' => [ 'type' => 'integer', 'locationName' => 'masterNodeCount', ],
                'masterSystemDiskType' => [ 'type' => 'string', 'locationName' => 'masterSystemDiskType', ],
                'masterSystemDiskVolume' => [ 'type' => 'integer', 'locationName' => 'masterSystemDiskVolume', ],
                'masterSystemDiskIops' => [ 'type' => 'integer', 'locationName' => 'masterSystemDiskIops', ],
                'masterDiskType' => [ 'type' => 'string', 'locationName' => 'masterDiskType', ],
                'masterDiskVolume' => [ 'type' => 'integer', 'locationName' => 'masterDiskVolume', ],
                'masterDiskIops' => [ 'type' => 'integer', 'locationName' => 'masterDiskIops', ],
                'masterInstanceType' => [ 'type' => 'string', 'locationName' => 'masterInstanceType', ],
                'slaveNodeCount' => [ 'type' => 'integer', 'locationName' => 'slaveNodeCount', ],
                'slaveSystemDiskType' => [ 'type' => 'string', 'locationName' => 'slaveSystemDiskType', ],
                'slaveSystemDiskVolume' => [ 'type' => 'integer', 'locationName' => 'slaveSystemDiskVolume', ],
                'slaveSystemDiskIops' => [ 'type' => 'integer', 'locationName' => 'slaveSystemDiskIops', ],
                'slaveDiskType' => [ 'type' => 'string', 'locationName' => 'slaveDiskType', ],
                'slaveDiskVolume' => [ 'type' => 'integer', 'locationName' => 'slaveDiskVolume', ],
                'slaveDiskIops' => [ 'type' => 'integer', 'locationName' => 'slaveDiskIops', ],
                'coreInstanceType' => [ 'type' => 'string', 'locationName' => 'coreInstanceType', ],
                'jssFlag' => [ 'type' => 'boolean', 'locationName' => 'jssFlag', ],
                'dataCenter' => [ 'type' => 'string', 'locationName' => 'dataCenter', ],
                'softwareList' => [ 'type' => 'string', 'locationName' => 'softwareList', ],
                'haFlag' => [ 'type' => 'boolean', 'locationName' => 'haFlag', ],
                'vpcId' => [ 'type' => 'string', 'locationName' => 'vpcId', ],
                'vpcSubnetId' => [ 'type' => 'string', 'locationName' => 'vpcSubnetId', ],
                'az' => [ 'type' => 'string', 'locationName' => 'az', ],
                'createOuterIpFlag' => [ 'type' => 'boolean', 'locationName' => 'createOuterIpFlag', ],
                'createSecurityGroupFlag' => [ 'type' => 'boolean', 'locationName' => 'createSecurityGroupFlag', ],
                'securityGroupId' => [ 'type' => 'string', 'locationName' => 'securityGroupId', ],
            ],
        ],
        'DescribeClustersResultShape' => [
            'type' => 'structure',
            'members' => [
                'totalNum' => [ 'type' => 'integer', 'locationName' => 'totalNum', ],
                'clusters' => [ 'type' => 'list', 'member' => [ 'shape' => 'ClusterListNode', ], ],
                'status' => [ 'type' => 'boolean', 'locationName' => 'status', ],
            ],
        ],
        'DescribeClusterResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeClusterResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'GetJmrVersionListResultShape' => [
            'type' => 'structure',
            'members' => [
                'data' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'status' => [ 'type' => 'boolean', 'locationName' => 'status', ],
            ],
        ],
        'ReleaseClusterResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'ReleaseClusterResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'IdataClusterResultShape' => [
            'type' => 'structure',
            'members' => [
                'data' => [ 'type' => 'object', 'locationName' => 'data', ],
                'status' => [ 'type' => 'boolean', 'locationName' => 'status', ],
            ],
        ],
        'CreateClusterResultShape' => [
            'type' => 'structure',
            'members' => [
                'status' => [ 'type' => 'boolean', 'locationName' => 'status', ],
                'clusterId' => [ 'type' => 'string', 'locationName' => 'clusterId', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
            ],
        ],
        'IdataClusterResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'IdataClusterResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeClusterResultShape' => [
            'type' => 'structure',
            'members' => [
                'cluster' =>  [ 'shape' => 'Cluster', ],
                'status' => [ 'type' => 'boolean', 'locationName' => 'status', ],
            ],
        ],
        'GetJmrVersionListRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'GetJmrVersionListResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GetJmrVersionListResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'GetSoftwareInfoResultShape' => [
            'type' => 'structure',
            'members' => [
                'data' => [ 'type' => 'string', 'locationName' => 'data', ],
                'status' => [ 'type' => 'boolean', 'locationName' => 'status', ],
            ],
        ],
        'IdataClusterRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'dataCenter' => [ 'type' => 'string', 'locationName' => 'dataCenter', ],
            ],
        ],
        'CreateClusterRequestShape' => [
            'type' => 'structure',
            'members' => [
                'clusterSpec' =>  [ 'shape' => 'ClusterSpec', ],
                'clientToken' => [ 'type' => 'string', 'locationName' => 'clientToken', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'ReleaseClusterResultShape' => [
            'type' => 'structure',
            'members' => [
                'status' => [ 'type' => 'boolean', 'locationName' => 'status', ],
            ],
        ],
        'DescribeClustersRequestShape' => [
            'type' => 'structure',
            'members' => [
                'dataCenter' => [ 'type' => 'string', 'locationName' => 'dataCenter', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'clusterName' => [ 'type' => 'string', 'locationName' => 'clusterName', ],
                'orderBy' => [ 'type' => 'string', 'locationName' => 'orderBy', ],
                'pageNum' => [ 'type' => 'integer', 'locationName' => 'pageNum', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'ClusterExpansionResultShape' => [
            'type' => 'structure',
            'members' => [
                'status' => [ 'type' => 'boolean', 'locationName' => 'status', ],
                'clusterId' => [ 'type' => 'string', 'locationName' => 'clusterId', ],
            ],
        ],
        'ClusterExpansionRequestShape' => [
            'type' => 'structure',
            'members' => [
                'clusterExpansion' =>  [ 'shape' => 'ClusterExpansion', ],
                'clientToken' => [ 'type' => 'string', 'locationName' => 'clientToken', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'ReleaseClusterRequestShape' => [
            'type' => 'structure',
            'members' => [
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
        'ClusterExpansionResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'ClusterExpansionResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'GetSoftwareInfoResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GetSoftwareInfoResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'GetSoftwareInfoRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'ver' => [ 'type' => 'string', 'locationName' => 'ver', ],
            ],
        ],
    ],
];
