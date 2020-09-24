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
        'DescribeClusters' => [
            'name' => 'DescribeClusters',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/cluster:create',
            ],
            'input' => [ 'shape' => 'DescribeClustersRequestShape', ],
            'output' => [ 'shape' => 'DescribeClustersResponseShape', ],
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
        'Cluster' => [
            'type' => 'structure',
            'members' => [
                'clusterId' => [ 'type' => 'string', 'locationName' => 'clusterId', ],
                'clusterName' => [ 'type' => 'string', 'locationName' => 'clusterName', ],
                'clusterCreateTime' => [ 'type' => 'string', 'locationName' => 'clusterCreateTime', ],
                'clusterHa' => [ 'type' => 'boolean', 'locationName' => 'clusterHa', ],
                'clusterStatus' => [ 'type' => 'string', 'locationName' => 'clusterStatus', ],
                'clusterVersion' => [ 'type' => 'string', 'locationName' => 'clusterVersion', ],
                'clusterService' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'clusterRegion' => [ 'type' => 'string', 'locationName' => 'clusterRegion', ],
                'clusterAz' => [ 'type' => 'string', 'locationName' => 'clusterAz', ],
                'clusterPrice' => [ 'type' => 'double', 'locationName' => 'clusterPrice', ],
                'clusterPaymentType' => [ 'type' => 'string', 'locationName' => 'clusterPaymentType', ],
                'clusterOss' => [ 'type' => 'boolean', 'locationName' => 'clusterOss', ],
                'clusterVpc' => [ 'type' => 'string', 'locationName' => 'clusterVpc', ],
                'clusterVpcSubnet' => [ 'type' => 'string', 'locationName' => 'clusterVpcSubnet', ],
                'clusterBandwidth' => [ 'type' => 'integer', 'locationName' => 'clusterBandwidth', ],
                'clusterNodes' => [ 'type' => 'list', 'member' => [ 'shape' => 'ClusterNode', ], ],
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
        'ClusterNode' => [
            'type' => 'structure',
            'members' => [
                'clusterNodeId' => [ 'type' => 'string', 'locationName' => 'clusterNodeId', ],
                'clusterNodeHostName' => [ 'type' => 'string', 'locationName' => 'clusterNodeHostName', ],
                'clusterNodeIntranetIp' => [ 'type' => 'string', 'locationName' => 'clusterNodeIntranetIp', ],
                'clusterNodeConnectionIp' => [ 'type' => 'string', 'locationName' => 'clusterNodeConnectionIp', ],
                'clusterNodeRole' => [ 'type' => 'string', 'locationName' => 'clusterNodeRole', ],
                'clusterNodeDisk' => [ 'type' => 'list', 'member' => [ 'shape' => 'ClusterNodeDisk', ], ],
                'clusterNodeModel' => [ 'type' => 'string', 'locationName' => 'clusterNodeModel', ],
            ],
        ],
        'ClusterExpansion' => [
            'type' => 'structure',
            'members' => [
                'clusterId' => [ 'type' => 'string', 'locationName' => 'clusterId', ],
                'expansionNum' => [ 'type' => 'string', 'locationName' => 'expansionNum', ],
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
                'masterCore' => [ 'type' => 'integer', 'locationName' => 'masterCore', ],
                'masterMemory' => [ 'type' => 'integer', 'locationName' => 'masterMemory', ],
                'masterSystemDiskType' => [ 'type' => 'string', 'locationName' => 'masterSystemDiskType', ],
                'masterSystemDiskVolume' => [ 'type' => 'integer', 'locationName' => 'masterSystemDiskVolume', ],
                'masterSystemDiskIops' => [ 'type' => 'integer', 'locationName' => 'masterSystemDiskIops', ],
                'masterDiskType' => [ 'type' => 'string', 'locationName' => 'masterDiskType', ],
                'masterDiskVolume' => [ 'type' => 'integer', 'locationName' => 'masterDiskVolume', ],
                'masterDiskIops' => [ 'type' => 'integer', 'locationName' => 'masterDiskIops', ],
                'masterInstanceType' => [ 'type' => 'string', 'locationName' => 'masterInstanceType', ],
                'slaveNodeCount' => [ 'type' => 'integer', 'locationName' => 'slaveNodeCount', ],
                'slaveCore' => [ 'type' => 'integer', 'locationName' => 'slaveCore', ],
                'slaveMemory' => [ 'type' => 'integer', 'locationName' => 'slaveMemory', ],
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
            ],
        ],
        'DescribeClustersResultShape' => [
            'type' => 'structure',
            'members' => [
                'clusters' => [ 'type' => 'list', 'member' => [ 'shape' => 'Cluster', ], ],
                'totalCount' => [ 'type' => 'double', 'locationName' => 'totalCount', ],
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
                'clusterId' => [ 'type' => 'string', 'locationName' => 'clusterId', ],
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
        'ClusterExpansionResultShape' => [
            'type' => 'structure',
            'members' => [
                'status' => [ 'type' => 'boolean', 'locationName' => 'status', ],
                'clusterId' => [ 'type' => 'string', 'locationName' => 'clusterId', ],
            ],
        ],
        'DescribeClustersRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'ClusterExpansionRequestShape' => [
            'type' => 'structure',
            'members' => [
                'clusterSpec' =>  [ 'shape' => 'ClusterExpansion', ],
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
