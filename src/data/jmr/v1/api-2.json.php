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
        'CreateClusterInNewNetwork' => [
            'name' => 'CreateClusterInNewNetwork',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/v1/regions/{regionId}/create',
            ],
            'input' => [ 'shape' => 'CreateClusterInNewNetworkRequestShape', ],
            'output' => [ 'shape' => 'CreateClusterInNewNetworkResponseShape', ],
        ],
        'ShowClusterDetails' => [
            'name' => 'ShowClusterDetails',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/v1/regions/{regionId}/detail',
            ],
            'input' => [ 'shape' => 'ShowClusterDetailsRequestShape', ],
            'output' => [ 'shape' => 'ShowClusterDetailsResponseShape', ],
        ],
        'ReleaseCluster' => [
            'name' => 'ReleaseCluster',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/v1/regions/{regionId}/release',
            ],
            'input' => [ 'shape' => 'ReleaseClusterRequestShape', ],
            'output' => [ 'shape' => 'ReleaseClusterResponseShape', ],
        ],
    ],
    'shapes' => [
        'HardwareInfo' => [
            'type' => 'structure',
            'members' => [
                'nodeName' => [ 'type' => 'string', 'locationName' => 'nodeName', ],
                'nodeType' => [ 'type' => 'string', 'locationName' => 'nodeType', ],
                'nodeStatus' => [ 'type' => 'string', 'locationName' => 'nodeStatus', ],
                'innerIp' => [ 'type' => 'string', 'locationName' => 'innerIp', ],
                'outerIp' => [ 'type' => 'string', 'locationName' => 'outerIp', ],
                'firewall' => [ 'type' => 'string', 'locationName' => 'firewall', ],
                'nodeCoreNum' => [ 'type' => 'integer', 'locationName' => 'nodeCoreNum', ],
                'nodeMemoryNum' => [ 'type' => 'integer', 'locationName' => 'nodeMemoryNum', ],
                'nodeSystemInfo' => [ 'type' => 'string', 'locationName' => 'nodeSystemInfo', ],
                'nodeDiskType' => [ 'type' => 'string', 'locationName' => 'nodeDiskType', ],
                'nodeDiskVolume' => [ 'type' => 'integer', 'locationName' => 'nodeDiskVolume', ],
                'serverId' => [ 'type' => 'string', 'locationName' => 'serverId', ],
                'msg' => [ 'type' => 'string', 'locationName' => 'msg', ],
                'instanceType' => [ 'type' => 'string', 'locationName' => 'instanceType', ],
                'instanceInfo' => [ 'type' => 'string', 'locationName' => 'instanceInfo', ],
            ],
        ],
        'ClusterDetailModel' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'clusterPrimaryId' => [ 'type' => 'int64', 'locationName' => 'clusterPrimaryId', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'nodeCount' => [ 'type' => 'integer', 'locationName' => 'nodeCount', ],
                'payType' => [ 'type' => 'string', 'locationName' => 'payType', ],
                'payPrice' => [ 'type' => 'string', 'locationName' => 'payPrice', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'duration' => [ 'type' => 'string', 'locationName' => 'duration', ],
                'hardware' => [ 'type' => 'list', 'member' => [ 'shape' => 'HardwareInfo', ], ],
                'softwareStack' => [ 'type' => 'object', 'locationName' => 'softwareStack', ],
                'dataCenter' => [ 'type' => 'string', 'locationName' => 'dataCenter', ],
                'jssFlag' => [ 'type' => 'boolean', 'locationName' => 'jssFlag', ],
                'haFlag' => [ 'type' => 'boolean', 'locationName' => 'haFlag', ],
                'vpcName' => [ 'type' => 'string', 'locationName' => 'vpcName', ],
                'vpcSubnetName' => [ 'type' => 'string', 'locationName' => 'vpcSubnetName', ],
                'bandwidthOut' => [ 'type' => 'integer', 'locationName' => 'bandwidthOut', ],
            ],
        ],
        'ClusterModel' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'password' => [ 'type' => 'string', 'locationName' => 'password', ],
                'version' => [ 'type' => 'string', 'locationName' => 'version', ],
                'payType' => [ 'type' => 'string', 'locationName' => 'payType', ],
                'masterNodeNumber' => [ 'type' => 'integer', 'locationName' => 'masterNodeNumber', ],
                'masterNodeDiskType' => [ 'type' => 'string', 'locationName' => 'masterNodeDiskType', ],
                'masterNodeDiskVolume' => [ 'type' => 'integer', 'locationName' => 'masterNodeDiskVolume', ],
                'masterInstanceType' => [ 'type' => 'string', 'locationName' => 'masterInstanceType', ],
                'slaveNodeNumber' => [ 'type' => 'integer', 'locationName' => 'slaveNodeNumber', ],
                'slaveNodeDiskType' => [ 'type' => 'string', 'locationName' => 'slaveNodeDiskType', ],
                'slaveNodeDiskVolume' => [ 'type' => 'integer', 'locationName' => 'slaveNodeDiskVolume', ],
                'coreInstanceType' => [ 'type' => 'string', 'locationName' => 'coreInstanceType', ],
                'dataCenter' => [ 'type' => 'string', 'locationName' => 'dataCenter', ],
                'softwareList' => [ 'type' => 'string', 'locationName' => 'softwareList', ],
                'jssFlag' => [ 'type' => 'boolean', 'locationName' => 'jssFlag', ],
                'haFlag' => [ 'type' => 'boolean', 'locationName' => 'haFlag', ],
                'vpcId' => [ 'type' => 'string', 'locationName' => 'vpcId', ],
                'vpcSubnetId' => [ 'type' => 'string', 'locationName' => 'vpcSubnetId', ],
                'bandwidth' => [ 'type' => 'integer', 'locationName' => 'bandwidth', ],
            ],
        ],
        'ShowClusterDetailsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'ReleaseClusterResultShape' => [
            'type' => 'structure',
            'members' => [
                'status' => [ 'type' => 'boolean', 'locationName' => 'status', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
            ],
        ],
        'ShowClusterDetailsResultShape' => [
            'type' => 'structure',
            'members' => [
                'status' => [ 'type' => 'boolean', 'locationName' => 'status', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'data' =>  [ 'shape' => 'ClusterDetailModel', ],
            ],
        ],
        'ReleaseClusterResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'ReleaseClusterResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ShowClusterDetailsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'ShowClusterDetailsResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'CreateClusterInNewNetworkRequestShape' => [
            'type' => 'structure',
            'members' => [
                'clusterModel' =>  [ 'shape' => 'ClusterModel', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'CreateClusterInNewNetworkResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'CreateClusterInNewNetworkResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'CreateClusterInNewNetworkResultShape' => [
            'type' => 'structure',
            'members' => [
                'status' => [ 'type' => 'boolean', 'locationName' => 'status', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
            ],
        ],
        'ReleaseClusterRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
            ],
        ],
    ],
];
