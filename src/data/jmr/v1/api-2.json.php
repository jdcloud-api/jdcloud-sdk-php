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
                'method' => 'GET',
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
        'DescribeProgressStatus' => [
            'name' => 'DescribeProgressStatus',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/clustersProgressStatus',
            ],
            'input' => [ 'shape' => 'DescribeProgressStatusRequestShape', ],
            'output' => [ 'shape' => 'DescribeProgressStatusResponseShape', ],
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
        'ClusterReduction' => [
            'name' => 'ClusterReduction',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/cluster:reduction',
            ],
            'input' => [ 'shape' => 'ClusterReductionRequestShape', ],
            'output' => [ 'shape' => 'ClusterReductionResponseShape', ],
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
        'DescribeClusterConfigs' => [
            'name' => 'DescribeClusterConfigs',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/clusters/{clusterId}/configs',
            ],
            'input' => [ 'shape' => 'DescribeClusterConfigsRequestShape', ],
            'output' => [ 'shape' => 'DescribeClusterConfigsResponseShape', ],
        ],
        'ListHivePermissions' => [
            'name' => 'ListHivePermissions',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/clusters/{clusterId}/hivePermissions',
            ],
            'input' => [ 'shape' => 'ListHivePermissionsRequestShape', ],
            'output' => [ 'shape' => 'ListHivePermissionsResponseShape', ],
        ],
        'GrantHivePermission' => [
            'name' => 'GrantHivePermission',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/clusters/{clusterId}/hivePermissions:grant',
            ],
            'input' => [ 'shape' => 'GrantHivePermissionRequestShape', ],
            'output' => [ 'shape' => 'GrantHivePermissionResponseShape', ],
        ],
        'RevokeHivePermission' => [
            'name' => 'RevokeHivePermission',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/clusters/{clusterId}/hivePermissions:revoke',
            ],
            'input' => [ 'shape' => 'RevokeHivePermissionRequestShape', ],
            'output' => [ 'shape' => 'RevokeHivePermissionResponseShape', ],
        ],
        'ListDatabases' => [
            'name' => 'ListDatabases',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/clusters/{clusterId}/databases',
            ],
            'input' => [ 'shape' => 'ListDatabasesRequestShape', ],
            'output' => [ 'shape' => 'ListDatabasesResponseShape', ],
        ],
        'CreateDatabase' => [
            'name' => 'CreateDatabase',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/clusters/{clusterId}/databases',
            ],
            'input' => [ 'shape' => 'CreateDatabaseRequestShape', ],
            'output' => [ 'shape' => 'CreateDatabaseResponseShape', ],
        ],
        'GetDatabase' => [
            'name' => 'GetDatabase',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/clusters/{clusterId}/databases/{dbName}',
            ],
            'input' => [ 'shape' => 'GetDatabaseRequestShape', ],
            'output' => [ 'shape' => 'GetDatabaseResponseShape', ],
        ],
        'ListTables' => [
            'name' => 'ListTables',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/clusters/{clusterId}/databases/{dbName}/tables',
            ],
            'input' => [ 'shape' => 'ListTablesRequestShape', ],
            'output' => [ 'shape' => 'ListTablesResponseShape', ],
        ],
        'CreateTable' => [
            'name' => 'CreateTable',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/clusters/{clusterId}/databases/{dbName}/tables',
            ],
            'input' => [ 'shape' => 'CreateTableRequestShape', ],
            'output' => [ 'shape' => 'CreateTableResponseShape', ],
        ],
        'GetTable' => [
            'name' => 'GetTable',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/clusters/{clusterId}/databases/{dbName}/tables/{tableName}',
            ],
            'input' => [ 'shape' => 'GetTableRequestShape', ],
            'output' => [ 'shape' => 'GetTableResponseShape', ],
        ],
        'ListPartitions' => [
            'name' => 'ListPartitions',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/clusters/{clusterId}/databases/{dbName}/tables/{tableName}/partitions',
            ],
            'input' => [ 'shape' => 'ListPartitionsRequestShape', ],
            'output' => [ 'shape' => 'ListPartitionsResponseShape', ],
        ],
        'DropDatabase' => [
            'name' => 'DropDatabase',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/clusters/{clusterId}/databases/{dbName}:drop',
            ],
            'input' => [ 'shape' => 'DropDatabaseRequestShape', ],
            'output' => [ 'shape' => 'DropDatabaseResponseShape', ],
        ],
        'DropTable' => [
            'name' => 'DropTable',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/clusters/{clusterId}/databases/{dbName}/tables/{tableName}:drop',
            ],
            'input' => [ 'shape' => 'DropTableRequestShape', ],
            'output' => [ 'shape' => 'DropTableResponseShape', ],
        ],
        'AlterTable' => [
            'name' => 'AlterTable',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/clusters/{clusterId}/databases/{dbName}/tables/{tableName}:alter',
            ],
            'input' => [ 'shape' => 'AlterTableRequestShape', ],
            'output' => [ 'shape' => 'AlterTableResponseShape', ],
        ],
        'CreateOpenLdapUser' => [
            'name' => 'CreateOpenLdapUser',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/clusters/{clusterId}/ldapUsers:create',
            ],
            'input' => [ 'shape' => 'CreateOpenLdapUserRequestShape', ],
            'output' => [ 'shape' => 'CreateOpenLdapUserResponseShape', ],
        ],
        'DescribeScalingGroups' => [
            'name' => 'DescribeScalingGroups',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/clusters/{clusterId}/scalingGroups',
            ],
            'input' => [ 'shape' => 'DescribeScalingGroupsRequestShape', ],
            'output' => [ 'shape' => 'DescribeScalingGroupsResponseShape', ],
        ],
        'CreateScalingGroup' => [
            'name' => 'CreateScalingGroup',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/clusters/{clusterId}/scalingGroups',
            ],
            'input' => [ 'shape' => 'CreateScalingGroupRequestShape', ],
            'output' => [ 'shape' => 'CreateScalingGroupResponseShape', ],
        ],
        'DescribeScalingGroup' => [
            'name' => 'DescribeScalingGroup',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/clusters/{clusterId}/scalingGroups/{configGroupId}',
            ],
            'input' => [ 'shape' => 'DescribeScalingGroupRequestShape', ],
            'output' => [ 'shape' => 'DescribeScalingGroupResponseShape', ],
        ],
        'ModifyScalingGroup' => [
            'name' => 'ModifyScalingGroup',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/clusters/{clusterId}/scalingGroups/{configGroupId}:update',
            ],
            'input' => [ 'shape' => 'ModifyScalingGroupRequestShape', ],
            'output' => [ 'shape' => 'ModifyScalingGroupResponseShape', ],
        ],
        'CopyScalingGroup' => [
            'name' => 'CopyScalingGroup',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/clusters/{clusterId}/scalingGroups/{configGroupId}:copy',
            ],
            'input' => [ 'shape' => 'CopyScalingGroupRequestShape', ],
            'output' => [ 'shape' => 'CopyScalingGroupResponseShape', ],
        ],
        'DeleteScalingGroup' => [
            'name' => 'DeleteScalingGroup',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/clusters/{clusterId}/scalingGroups/{configGroupId}:delete',
            ],
            'input' => [ 'shape' => 'DeleteScalingGroupRequestShape', ],
            'output' => [ 'shape' => 'DeleteScalingGroupResponseShape', ],
        ],
        'ExecuteScalingManually' => [
            'name' => 'ExecuteScalingManually',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/clusters/{clusterId}/scalingGroups/{configGroupId}:execute',
            ],
            'input' => [ 'shape' => 'ExecuteScalingManuallyRequestShape', ],
            'output' => [ 'shape' => 'ExecuteScalingManuallyResponseShape', ],
        ],
        'DescribeScalableNodeGroups' => [
            'name' => 'DescribeScalableNodeGroups',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/clusters/{clusterId}/scalableNodeGroups',
            ],
            'input' => [ 'shape' => 'DescribeScalableNodeGroupsRequestShape', ],
            'output' => [ 'shape' => 'DescribeScalableNodeGroupsResponseShape', ],
        ],
        'DescribeScalingMetrics' => [
            'name' => 'DescribeScalingMetrics',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/clusters/{clusterId}/scalingMetrics',
            ],
            'input' => [ 'shape' => 'DescribeScalingMetricsRequestShape', ],
            'output' => [ 'shape' => 'DescribeScalingMetricsResponseShape', ],
        ],
        'DescribeScalingActivities' => [
            'name' => 'DescribeScalingActivities',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/clusters/{clusterId}/scalingActivities',
            ],
            'input' => [ 'shape' => 'DescribeScalingActivitiesRequestShape', ],
            'output' => [ 'shape' => 'DescribeScalingActivitiesResponseShape', ],
        ],
        'ExportScalingActivities' => [
            'name' => 'ExportScalingActivities',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/clusters/{clusterId}/scalingActivities:export',
            ],
            'input' => [ 'shape' => 'ExportScalingActivitiesRequestShape', ],
            'output' => [ 'shape' => 'ExportScalingActivitiesResponseShape', ],
        ],
        'DescribeScalingActivityLog' => [
            'name' => 'DescribeScalingActivityLog',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/clusters/{clusterId}/scalingActivities/{activityId}',
            ],
            'input' => [ 'shape' => 'DescribeScalingActivityLogRequestShape', ],
            'output' => [ 'shape' => 'DescribeScalingActivityLogResponseShape', ],
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
                'rdsInstanceId' => [ 'type' => 'string', 'locationName' => 'rdsInstanceId', ],
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
                'nodeDiskNumber' => [ 'type' => 'integer', 'locationName' => 'nodeDiskNumber', ],
                'msg' => [ 'type' => 'string', 'locationName' => 'msg', ],
                'nodeSystemInfo' => [ 'type' => 'string', 'locationName' => 'nodeSystemInfo', ],
                'nodeDiskCategory' => [ 'type' => 'string', 'locationName' => 'nodeDiskCategory', ],
                'nodeSystemDiskCategory' => [ 'type' => 'string', 'locationName' => 'nodeSystemDiskCategory', ],
                'nodeCoreNum' => [ 'type' => 'integer', 'locationName' => 'nodeCoreNum', ],
                'nodeMemoryNum' => [ 'type' => 'integer', 'locationName' => 'nodeMemoryNum', ],
                'configGroupId' => [ 'type' => 'string', 'locationName' => 'configGroupId', ],
                'configGroupName' => [ 'type' => 'string', 'locationName' => 'configGroupName', ],
                'nodeNumber' => [ 'type' => 'integer', 'locationName' => 'nodeNumber', ],
                'nodeSystemDiskIops' => [ 'type' => 'integer', 'locationName' => 'nodeSystemDiskIops', ],
                'nodeDiskIops' => [ 'type' => 'integer', 'locationName' => 'nodeDiskIops', ],
            ],
        ],
        'ClusterExpansion' => [
            'type' => 'structure',
            'members' => [
                'clusterId' => [ 'type' => 'string', 'locationName' => 'clusterId', ],
                'expansionNum' => [ 'type' => 'string', 'locationName' => 'expansionNum', ],
                'nodeType' => [ 'type' => 'string', 'locationName' => 'nodeType', ],
                'expandTypeId' => [ 'type' => 'string', 'locationName' => 'expandTypeId', ],
                'expandServices' => [ 'type' => 'string', 'locationName' => 'expandServices', ],
                'configGroupId' => [ 'type' => 'string', 'locationName' => 'configGroupId', ],
                'taskNodesByGroup' => [ 'type' => 'list', 'member' => [ 'shape' => 'ClusterNode', ], ],
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
                'createTime' => [ 'type' => 'long', 'locationName' => 'createTime', ],
                'payType' => [ 'type' => 'string', 'locationName' => 'payType', ],
                'duration' => [ 'type' => 'string', 'locationName' => 'duration', ],
                'outerIp' => [ 'type' => 'string', 'locationName' => 'outerIp', ],
                'controlMethod' => [ 'type' => 'string', 'locationName' => 'controlMethod', ],
                'nodeTypeSummary' => [ 'type' => 'string', 'locationName' => 'nodeTypeSummary', ],
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
        'ClusterReduction' => [
            'type' => 'structure',
            'members' => [
                'clusterId' => [ 'type' => 'string', 'locationName' => 'clusterId', ],
                'reserveNum' => [ 'type' => 'string', 'locationName' => 'reserveNum', ],
                'nodeType' => [ 'type' => 'string', 'locationName' => 'nodeType', ],
                'configGroupId' => [ 'type' => 'string', 'locationName' => 'configGroupId', ],
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
                'slaveDiskNumber' => [ 'type' => 'integer', 'locationName' => 'slaveDiskNumber', ],
                'slaveDiskIops' => [ 'type' => 'integer', 'locationName' => 'slaveDiskIops', ],
                'coreInstanceType' => [ 'type' => 'string', 'locationName' => 'coreInstanceType', ],
                'taskNodeCount' => [ 'type' => 'integer', 'locationName' => 'taskNodeCount', ],
                'taskSystemDiskType' => [ 'type' => 'string', 'locationName' => 'taskSystemDiskType', ],
                'taskSystemDiskVolume' => [ 'type' => 'integer', 'locationName' => 'taskSystemDiskVolume', ],
                'taskSystemDiskIops' => [ 'type' => 'integer', 'locationName' => 'taskSystemDiskIops', ],
                'taskDiskType' => [ 'type' => 'string', 'locationName' => 'taskDiskType', ],
                'taskDiskVolume' => [ 'type' => 'integer', 'locationName' => 'taskDiskVolume', ],
                'taskDiskNumber' => [ 'type' => 'integer', 'locationName' => 'taskDiskNumber', ],
                'taskDiskIops' => [ 'type' => 'integer', 'locationName' => 'taskDiskIops', ],
                'taskInstanceType' => [ 'type' => 'string', 'locationName' => 'taskInstanceType', ],
                'coordNodeCount' => [ 'type' => 'integer', 'locationName' => 'coordNodeCount', ],
                'coordSystemDiskType' => [ 'type' => 'string', 'locationName' => 'coordSystemDiskType', ],
                'coordSystemDiskVolume' => [ 'type' => 'integer', 'locationName' => 'coordSystemDiskVolume', ],
                'coordSystemDiskIops' => [ 'type' => 'integer', 'locationName' => 'coordSystemDiskIops', ],
                'coordDiskType' => [ 'type' => 'string', 'locationName' => 'coordDiskType', ],
                'coordDiskVolume' => [ 'type' => 'integer', 'locationName' => 'coordDiskVolume', ],
                'coordDiskNumber' => [ 'type' => 'integer', 'locationName' => 'coordDiskNumber', ],
                'coordDiskIops' => [ 'type' => 'integer', 'locationName' => 'coordDiskIops', ],
                'coordInstanceType' => [ 'type' => 'string', 'locationName' => 'coordInstanceType', ],
                'jssFlag' => [ 'type' => 'boolean', 'locationName' => 'jssFlag', ],
                'dataCenter' => [ 'type' => 'string', 'locationName' => 'dataCenter', ],
                'softwareList' => [ 'type' => 'string', 'locationName' => 'softwareList', ],
                'haFlag' => [ 'type' => 'boolean', 'locationName' => 'haFlag', ],
                'rdsMetaFlag' => [ 'type' => 'boolean', 'locationName' => 'rdsMetaFlag', ],
                'isKerberos' => [ 'type' => 'boolean', 'locationName' => 'isKerberos', ],
                'vpcId' => [ 'type' => 'string', 'locationName' => 'vpcId', ],
                'vpcSubnetId' => [ 'type' => 'string', 'locationName' => 'vpcSubnetId', ],
                'az' => [ 'type' => 'string', 'locationName' => 'az', ],
                'createOuterIpFlag' => [ 'type' => 'boolean', 'locationName' => 'createOuterIpFlag', ],
                'createSecurityGroupFlag' => [ 'type' => 'boolean', 'locationName' => 'createSecurityGroupFlag', ],
                'securityGroupId' => [ 'type' => 'string', 'locationName' => 'securityGroupId', ],
                'userDefinedConf' => [ 'type' => 'string', 'locationName' => 'userDefinedConf', ],
                'sshKeyName' => [ 'type' => 'string', 'locationName' => 'sshKeyName', ],
                'taskNodesByGroup' => [ 'type' => 'list', 'member' => [ 'shape' => 'ClusterNode', ], ],
            ],
        ],
        'DatabaseDetail' => [
            'type' => 'structure',
            'members' => [
                'dbName' => [ 'type' => 'string', 'locationName' => 'dbName', ],
                'comment' => [ 'type' => 'string', 'locationName' => 'comment', ],
                'location' => [ 'type' => 'string', 'locationName' => 'location', ],
                'ownerName' => [ 'type' => 'string', 'locationName' => 'ownerName', ],
                'ownerType' => [ 'type' => 'string', 'locationName' => 'ownerType', ],
                'parameters' => [ 'type' => 'map', 'key' => [ 'type' => 'string', ], 'value' => [ 'type' => 'string', ], ],
            ],
        ],
        'HivePermission' => [
            'type' => 'structure',
            'members' => [
                'database' => [ 'type' => 'string', 'locationName' => 'database', ],
                'table' => [ 'type' => 'string', 'locationName' => 'table', ],
                'principalType' => [ 'type' => 'string', 'locationName' => 'principalType', ],
                'principalName' => [ 'type' => 'string', 'locationName' => 'principalName', ],
                'privileges' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'MonitorLabelDetail' => [
            'type' => 'structure',
            'members' => [
                'label' => [ 'type' => 'string', 'locationName' => 'label', ],
                'serviceCode' => [ 'type' => 'string', 'locationName' => 'serviceCode', ],
                'resourceId' => [ 'type' => 'string', 'locationName' => 'resourceId', ],
                'filters' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'nodes' => [ 'type' => 'list', 'member' => [ 'shape' => 'MonitorLabelNodeDetail', ], ],
            ],
        ],
        'MonitorLabelNodeDetail' => [
            'type' => 'structure',
            'members' => [
                'label' => [ 'type' => 'string', 'locationName' => 'label', ],
                'serviceCode' => [ 'type' => 'string', 'locationName' => 'serviceCode', ],
                'resourceId' => [ 'type' => 'string', 'locationName' => 'resourceId', ],
                'filters' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'OpenLdapUser' => [
            'type' => 'structure',
            'members' => [
                'userName' => [ 'type' => 'string', 'locationName' => 'userName', ],
                'password' => [ 'type' => 'string', 'locationName' => 'password', ],
            ],
        ],
        'StepInfo' => [
            'type' => 'structure',
            'members' => [
                'step' => [ 'type' => 'string', 'locationName' => 'step', ],
                'state' => [ 'type' => 'string', 'locationName' => 'state', ],
                'startTime' => [ 'type' => 'string', 'locationName' => 'startTime', ],
            ],
        ],
        'ProgressStatus' => [
            'type' => 'structure',
            'members' => [
                'clusterId' => [ 'type' => 'string', 'locationName' => 'clusterId', ],
                'operationName' => [ 'type' => 'string', 'locationName' => 'operationName', ],
                'processPercent' => [ 'type' => 'integer', 'locationName' => 'processPercent', ],
                'startTime' => [ 'type' => 'string', 'locationName' => 'startTime', ],
                'stepList' => [ 'type' => 'list', 'member' => [ 'shape' => 'StepInfo', ], ],
            ],
        ],
        'ScalingExecution' => [
            'type' => 'structure',
            'members' => [
                'activityId' => [ 'type' => 'string', 'locationName' => 'activityId', ],
                'dryRun' => [ 'type' => 'boolean', 'locationName' => 'dryRun', ],
                'scaleType' => [ 'type' => 'string', 'locationName' => 'scaleType', ],
                'beforeNum' => [ 'type' => 'integer', 'locationName' => 'beforeNum', ],
                'targetNum' => [ 'type' => 'integer', 'locationName' => 'targetNum', ],
                'rejectReason' => [ 'type' => 'string', 'locationName' => 'rejectReason', ],
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
            ],
        ],
        'ScalingActivity' => [
            'type' => 'structure',
            'members' => [
                'activityId' => [ 'type' => 'string', 'locationName' => 'activityId', ],
                'clusterId' => [ 'type' => 'string', 'locationName' => 'clusterId', ],
                'configGroupId' => [ 'type' => 'string', 'locationName' => 'configGroupId', ],
                'configGroupName' => [ 'type' => 'string', 'locationName' => 'configGroupName', ],
                'triggerType' => [ 'type' => 'string', 'locationName' => 'triggerType', ],
                'triggerRuleName' => [ 'type' => 'string', 'locationName' => 'triggerRuleName', ],
                'scaleType' => [ 'type' => 'string', 'locationName' => 'scaleType', ],
                'ruleType' => [ 'type' => 'string', 'locationName' => 'ruleType', ],
                'beforeNum' => [ 'type' => 'integer', 'locationName' => 'beforeNum', ],
                'targetNum' => [ 'type' => 'integer', 'locationName' => 'targetNum', ],
                'expectedDelta' => [ 'type' => 'integer', 'locationName' => 'expectedDelta', ],
                'actualNum' => [ 'type' => 'integer', 'locationName' => 'actualNum', ],
                'specAndCount' => [ 'type' => 'string', 'locationName' => 'specAndCount', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'rejectReason' => [ 'type' => 'string', 'locationName' => 'rejectReason', ],
                'errorMsg' => [ 'type' => 'string', 'locationName' => 'errorMsg', ],
                'metricSnapshot' => [ 'type' => 'string', 'locationName' => 'metricSnapshot', ],
                'startTime' => [ 'type' => 'string', 'locationName' => 'startTime', ],
                'endTime' => [ 'type' => 'string', 'locationName' => 'endTime', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
            ],
        ],
        'ScalingSpec' => [
            'type' => 'structure',
            'members' => [
                'expandTypeId' => [ 'type' => 'integer', 'locationName' => 'expandTypeId', ],
                'instanceType' => [ 'type' => 'string', 'locationName' => 'instanceType', ],
                'coreNum' => [ 'type' => 'integer', 'locationName' => 'coreNum', ],
                'memoryNum' => [ 'type' => 'integer', 'locationName' => 'memoryNum', ],
            ],
        ],
        'ScalingCondition' => [
            'type' => 'structure',
            'members' => [
                'metricKey' => [ 'type' => 'string', 'locationName' => 'metricKey', ],
                'attribute' => [ 'type' => 'string', 'locationName' => 'attribute', ],
                'operator' => [ 'type' => 'string', 'locationName' => 'operator', ],
                'threshold' => [ 'type' => 'double', 'locationName' => 'threshold', ],
                'actualValue' => [ 'type' => 'double', 'locationName' => 'actualValue', ],
            ],
        ],
        'ScalingRule' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'integer', 'locationName' => 'id', ],
                'ruleName' => [ 'type' => 'string', 'locationName' => 'ruleName', ],
                'ruleType' => [ 'type' => 'string', 'locationName' => 'ruleType', ],
                'scaleType' => [ 'type' => 'string', 'locationName' => 'scaleType', ],
                'enable' => [ 'type' => 'boolean', 'locationName' => 'enable', ],
                'conditions' => [ 'type' => 'list', 'member' => [ 'shape' => 'ScalingCondition', ], ],
                'logicOperator' => [ 'type' => 'string', 'locationName' => 'logicOperator', ],
                'statisticsPeriod' => [ 'type' => 'integer', 'locationName' => 'statisticsPeriod', ],
                'triggerCount' => [ 'type' => 'integer', 'locationName' => 'triggerCount', ],
                'cooldown' => [ 'type' => 'integer', 'locationName' => 'cooldown', ],
                'stepNum' => [ 'type' => 'integer', 'locationName' => 'stepNum', ],
                'gracefulScaleIn' => [ 'type' => 'boolean', 'locationName' => 'gracefulScaleIn', ],
                'cronExpression' => [ 'type' => 'string', 'locationName' => 'cronExpression', ],
                'targetNum' => [ 'type' => 'integer', 'locationName' => 'targetNum', ],
            ],
        ],
        'ScalingNodeGroup' => [
            'type' => 'structure',
            'members' => [
                'configGroupId' => [ 'type' => 'string', 'locationName' => 'configGroupId', ],
                'configGroupName' => [ 'type' => 'string', 'locationName' => 'configGroupName', ],
                'nodeType' => [ 'type' => 'string', 'locationName' => 'nodeType', ],
                'nodeNum' => [ 'type' => 'integer', 'locationName' => 'nodeNum', ],
                'scalable' => [ 'type' => 'boolean', 'locationName' => 'scalable', ],
                'reason' => [ 'type' => 'string', 'locationName' => 'reason', ],
                'hasRule' => [ 'type' => 'boolean', 'locationName' => 'hasRule', ],
                'enable' => [ 'type' => 'boolean', 'locationName' => 'enable', ],
            ],
        ],
        'ScalingMetric' => [
            'type' => 'structure',
            'members' => [
                'key' => [ 'type' => 'string', 'locationName' => 'key', ],
                'metricName' => [ 'type' => 'string', 'locationName' => 'metricName', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'recommended' => [ 'type' => 'boolean', 'locationName' => 'recommended', ],
                'recommendedScaleType' => [ 'type' => 'string', 'locationName' => 'recommendedScaleType', ],
                'derived' => [ 'type' => 'boolean', 'locationName' => 'derived', ],
            ],
        ],
        'ScalingGroup' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'integer', 'locationName' => 'id', ],
                'clusterId' => [ 'type' => 'string', 'locationName' => 'clusterId', ],
                'configGroupId' => [ 'type' => 'string', 'locationName' => 'configGroupId', ],
                'configGroupName' => [ 'type' => 'string', 'locationName' => 'configGroupName', ],
                'nodeType' => [ 'type' => 'string', 'locationName' => 'nodeType', ],
                'minNodes' => [ 'type' => 'integer', 'locationName' => 'minNodes', ],
                'maxNodes' => [ 'type' => 'integer', 'locationName' => 'maxNodes', ],
                'currentNodes' => [ 'type' => 'integer', 'locationName' => 'currentNodes', ],
                'expandSpecs' => [ 'type' => 'list', 'member' => [ 'shape' => 'ScalingSpec', ], ],
                'expandSpecsJson' => [ 'type' => 'string', 'locationName' => 'expandSpecsJson', ],
                'billingType' => [ 'type' => 'integer', 'locationName' => 'billingType', ],
                'enable' => [ 'type' => 'boolean', 'locationName' => 'enable', ],
                'dryRun' => [ 'type' => 'boolean', 'locationName' => 'dryRun', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'suspendReason' => [ 'type' => 'string', 'locationName' => 'suspendReason', ],
                'dailyScaleLimit' => [ 'type' => 'integer', 'locationName' => 'dailyScaleLimit', ],
                'version' => [ 'type' => 'integer', 'locationName' => 'version', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'updateTime' => [ 'type' => 'string', 'locationName' => 'updateTime', ],
                'scaleOutRule' =>  [ 'shape' => 'ScalingRule', ],
                'scaleInRule' =>  [ 'shape' => 'ScalingRule', ],
            ],
        ],
        'ServiceConfig' => [
            'type' => 'structure',
            'members' => [
                'type' => [ 'type' => 'string', 'locationName' => 'type', ],
                'tag' => [ 'type' => 'string', 'locationName' => 'tag', ],
                'version' => [ 'type' => 'integer', 'locationName' => 'version', ],
                'properties' => [ 'type' => 'map', 'key' => [ 'type' => 'string', ], 'value' => [ 'type' => 'string', ], ],
            ],
        ],
        'TableColumn' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'type' => [ 'type' => 'string', 'locationName' => 'type', ],
                'comment' => [ 'type' => 'string', 'locationName' => 'comment', ],
            ],
        ],
        'TableDetail' => [
            'type' => 'structure',
            'members' => [
                'dbName' => [ 'type' => 'string', 'locationName' => 'dbName', ],
                'tableName' => [ 'type' => 'string', 'locationName' => 'tableName', ],
                'owner' => [ 'type' => 'string', 'locationName' => 'owner', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'location' => [ 'type' => 'string', 'locationName' => 'location', ],
                'tableType' => [ 'type' => 'string', 'locationName' => 'tableType', ],
                'serDeLibrary' => [ 'type' => 'string', 'locationName' => 'serDeLibrary', ],
                'inputFormat' => [ 'type' => 'string', 'locationName' => 'inputFormat', ],
                'outputFormat' => [ 'type' => 'string', 'locationName' => 'outputFormat', ],
                'compressed' => [ 'type' => 'string', 'locationName' => 'compressed', ],
                'numBuckets' => [ 'type' => 'string', 'locationName' => 'numBuckets', ],
                'retention' => [ 'type' => 'string', 'locationName' => 'retention', ],
                'lastAccessTime' => [ 'type' => 'string', 'locationName' => 'lastAccessTime', ],
                'protectMode' => [ 'type' => 'string', 'locationName' => 'protectMode', ],
                'columns' => [ 'type' => 'list', 'member' => [ 'shape' => 'TableColumn', ], ],
                'parameters' => [ 'type' => 'map', 'key' => [ 'type' => 'string', ], 'value' => [ 'type' => 'string', ], ],
            ],
        ],
        'TagFilter' => [
            'type' => 'structure',
            'members' => [
                'key' => [ 'type' => 'string', 'locationName' => 'key', ],
                'values' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'ClusterReductionResultShape' => [
            'type' => 'structure',
            'members' => [
                'status' => [ 'type' => 'boolean', 'locationName' => 'status', ],
                'clusterId' => [ 'type' => 'string', 'locationName' => 'clusterId', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
            ],
        ],
        'DescribeProgressStatusRequestShape' => [
            'type' => 'structure',
            'members' => [
                'clusterIds' => [ 'type' => 'string', 'locationName' => 'clusterIds', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
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
        'ClusterReductionResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'ClusterReductionResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
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
        'ClusterReductionRequestShape' => [
            'type' => 'structure',
            'members' => [
                'clusterReduction' =>  [ 'shape' => 'ClusterReduction', ],
                'clientToken' => [ 'type' => 'string', 'locationName' => 'clientToken', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
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
        'DescribeProgressStatusResultShape' => [
            'type' => 'structure',
            'members' => [
                'progressStatus' => [ 'type' => 'list', 'member' => [ 'shape' => 'ProgressStatus', ], ],
                'status' => [ 'type' => 'boolean', 'locationName' => 'status', ],
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
                'clusterId' => [ 'type' => 'string', 'locationName' => 'clusterId', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
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
                'filters' => [ 'type' => 'list', 'member' => [ 'shape' => 'Filter', ], ],
                'tagFilters' => [ 'type' => 'list', 'member' => [ 'shape' => 'TagFilter', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'ClusterExpansionResultShape' => [
            'type' => 'structure',
            'members' => [
                'status' => [ 'type' => 'boolean', 'locationName' => 'status', ],
                'clusterId' => [ 'type' => 'string', 'locationName' => 'clusterId', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
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
        'DescribeProgressStatusResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeProgressStatusResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
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
                'softVer' => [ 'type' => 'string', 'locationName' => 'softVer', ],
                'template' => [ 'type' => 'string', 'locationName' => 'template', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DescribeClusterConfigsResultShape' => [
            'type' => 'structure',
            'members' => [
                'status' => [ 'type' => 'boolean', 'locationName' => 'status', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'data' => [ 'type' => 'list', 'member' => [ 'shape' => 'ServiceConfig', ], ],
            ],
        ],
        'DescribeClusterConfigsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeClusterConfigsResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeClusterConfigsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'serviceName' => [ 'type' => 'string', 'locationName' => 'serviceName', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'clusterId' => [ 'type' => 'string', 'locationName' => 'clusterId', ],
            ],
        ],
        'RevokeHivePermissionResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'RevokeHivePermissionResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'RevokeHivePermissionResultShape' => [
            'type' => 'structure',
            'members' => [
                'status' => [ 'type' => 'boolean', 'locationName' => 'status', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'data' => [ 'type' => 'object', 'locationName' => 'data', ],
            ],
        ],
        'GrantHivePermissionResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GrantHivePermissionResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ListHivePermissionsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'database' => [ 'type' => 'string', 'locationName' => 'database', ],
                'table' => [ 'type' => 'string', 'locationName' => 'table', ],
                'principalType' => [ 'type' => 'string', 'locationName' => 'principalType', ],
                'principalName' => [ 'type' => 'string', 'locationName' => 'principalName', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'clusterId' => [ 'type' => 'string', 'locationName' => 'clusterId', ],
            ],
        ],
        'GrantHivePermissionRequestShape' => [
            'type' => 'structure',
            'members' => [
                'hivePermission' =>  [ 'shape' => 'HivePermission', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'clusterId' => [ 'type' => 'string', 'locationName' => 'clusterId', ],
            ],
        ],
        'RevokeHivePermissionRequestShape' => [
            'type' => 'structure',
            'members' => [
                'hivePermission' =>  [ 'shape' => 'HivePermission', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'clusterId' => [ 'type' => 'string', 'locationName' => 'clusterId', ],
            ],
        ],
        'ListHivePermissionsResultShape' => [
            'type' => 'structure',
            'members' => [
                'status' => [ 'type' => 'boolean', 'locationName' => 'status', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'data' => [ 'type' => 'object', 'locationName' => 'data', ],
            ],
        ],
        'ListHivePermissionsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'ListHivePermissionsResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'GrantHivePermissionResultShape' => [
            'type' => 'structure',
            'members' => [
                'status' => [ 'type' => 'boolean', 'locationName' => 'status', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'data' => [ 'type' => 'object', 'locationName' => 'data', ],
            ],
        ],
        'DropDatabaseRequestShape' => [
            'type' => 'structure',
            'members' => [
                'sql' => [ 'type' => '', 'locationName' => 'sql', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'clusterId' => [ 'type' => 'string', 'locationName' => 'clusterId', ],
                'dbName' => [ 'type' => 'string', 'locationName' => 'dbName', ],
            ],
        ],
        'GetDatabaseRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'clusterId' => [ 'type' => 'string', 'locationName' => 'clusterId', ],
                'dbName' => [ 'type' => 'string', 'locationName' => 'dbName', ],
            ],
        ],
        'GetTableRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'clusterId' => [ 'type' => 'string', 'locationName' => 'clusterId', ],
                'dbName' => [ 'type' => 'string', 'locationName' => 'dbName', ],
                'tableName' => [ 'type' => 'string', 'locationName' => 'tableName', ],
            ],
        ],
        'AlterTableResultShape' => [
            'type' => 'structure',
            'members' => [
                'status' => [ 'type' => 'boolean', 'locationName' => 'status', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'data' => [ 'type' => 'string', 'locationName' => 'data', ],
            ],
        ],
        'CreateTableResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'CreateTableResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'GetDatabaseResultShape' => [
            'type' => 'structure',
            'members' => [
                'status' => [ 'type' => 'boolean', 'locationName' => 'status', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'data' =>  [ 'shape' => 'DatabaseDetail', ],
            ],
        ],
        'CreateDatabaseResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'CreateDatabaseResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'GetDatabaseResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GetDatabaseResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DropDatabaseResultShape' => [
            'type' => 'structure',
            'members' => [
                'status' => [ 'type' => 'boolean', 'locationName' => 'status', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'data' => [ 'type' => 'string', 'locationName' => 'data', ],
            ],
        ],
        'ListTablesRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pattern' => [ 'type' => 'string', 'locationName' => 'pattern', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'clusterId' => [ 'type' => 'string', 'locationName' => 'clusterId', ],
                'dbName' => [ 'type' => 'string', 'locationName' => 'dbName', ],
            ],
        ],
        'ListTablesResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'ListTablesResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'GetTableResultShape' => [
            'type' => 'structure',
            'members' => [
                'status' => [ 'type' => 'boolean', 'locationName' => 'status', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'data' =>  [ 'shape' => 'TableDetail', ],
            ],
        ],
        'DropTableResultShape' => [
            'type' => 'structure',
            'members' => [
                'status' => [ 'type' => 'boolean', 'locationName' => 'status', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'data' => [ 'type' => 'string', 'locationName' => 'data', ],
            ],
        ],
        'ListTablesResultShape' => [
            'type' => 'structure',
            'members' => [
                'status' => [ 'type' => 'boolean', 'locationName' => 'status', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'data' => [ 'type' => 'object', 'locationName' => 'data', ],
            ],
        ],
        'CreateTableRequestShape' => [
            'type' => 'structure',
            'members' => [
                'sql' => [ 'type' => '', 'locationName' => 'sql', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'clusterId' => [ 'type' => 'string', 'locationName' => 'clusterId', ],
                'dbName' => [ 'type' => 'string', 'locationName' => 'dbName', ],
            ],
        ],
        'ListDatabasesResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'ListDatabasesResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ListPartitionsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'ListPartitionsResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'CreateDatabaseRequestShape' => [
            'type' => 'structure',
            'members' => [
                'sql' => [ 'type' => '', 'locationName' => 'sql', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'clusterId' => [ 'type' => 'string', 'locationName' => 'clusterId', ],
            ],
        ],
        'ListPartitionsResultShape' => [
            'type' => 'structure',
            'members' => [
                'status' => [ 'type' => 'boolean', 'locationName' => 'status', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'data' => [ 'type' => 'object', 'locationName' => 'data', ],
            ],
        ],
        'AlterTableRequestShape' => [
            'type' => 'structure',
            'members' => [
                'sql' => [ 'type' => '', 'locationName' => 'sql', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'clusterId' => [ 'type' => 'string', 'locationName' => 'clusterId', ],
                'dbName' => [ 'type' => 'string', 'locationName' => 'dbName', ],
                'tableName' => [ 'type' => 'string', 'locationName' => 'tableName', ],
            ],
        ],
        'DropTableRequestShape' => [
            'type' => 'structure',
            'members' => [
                'sql' => [ 'type' => '', 'locationName' => 'sql', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'clusterId' => [ 'type' => 'string', 'locationName' => 'clusterId', ],
                'dbName' => [ 'type' => 'string', 'locationName' => 'dbName', ],
                'tableName' => [ 'type' => 'string', 'locationName' => 'tableName', ],
            ],
        ],
        'ListPartitionsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'maxParts' => [ 'type' => 'integer', 'locationName' => 'maxParts', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'clusterId' => [ 'type' => 'string', 'locationName' => 'clusterId', ],
                'dbName' => [ 'type' => 'string', 'locationName' => 'dbName', ],
                'tableName' => [ 'type' => 'string', 'locationName' => 'tableName', ],
            ],
        ],
        'GetTableResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GetTableResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DropDatabaseResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DropDatabaseResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'AlterTableResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'AlterTableResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'CreateTableResultShape' => [
            'type' => 'structure',
            'members' => [
                'status' => [ 'type' => 'boolean', 'locationName' => 'status', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'data' => [ 'type' => 'string', 'locationName' => 'data', ],
            ],
        ],
        'CreateDatabaseResultShape' => [
            'type' => 'structure',
            'members' => [
                'status' => [ 'type' => 'boolean', 'locationName' => 'status', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'data' => [ 'type' => 'string', 'locationName' => 'data', ],
            ],
        ],
        'ListDatabasesResultShape' => [
            'type' => 'structure',
            'members' => [
                'status' => [ 'type' => 'boolean', 'locationName' => 'status', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'data' => [ 'type' => 'object', 'locationName' => 'data', ],
            ],
        ],
        'DropTableResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DropTableResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ListDatabasesRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'clusterId' => [ 'type' => 'string', 'locationName' => 'clusterId', ],
            ],
        ],
        'CreateOpenLdapUserRequestShape' => [
            'type' => 'structure',
            'members' => [
                'openLdapUser' =>  [ 'shape' => 'OpenLdapUser', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'clusterId' => [ 'type' => 'string', 'locationName' => 'clusterId', ],
            ],
        ],
        'CreateOpenLdapUserResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'CreateOpenLdapUserResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'CreateOpenLdapUserResultShape' => [
            'type' => 'structure',
            'members' => [
                'status' => [ 'type' => 'boolean', 'locationName' => 'status', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'data' => [ 'type' => 'string', 'locationName' => 'data', ],
            ],
        ],
        'ExecuteScalingManuallyResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'ExecuteScalingManuallyResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ExportScalingActivitiesResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'ExportScalingActivitiesResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ExecuteScalingManuallyResultShape' => [
            'type' => 'structure',
            'members' => [
                'status' => [ 'type' => 'boolean', 'locationName' => 'status', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'data' =>  [ 'shape' => 'ScalingExecution', ],
            ],
        ],
        'DescribeScalingActivityLogResultShape' => [
            'type' => 'structure',
            'members' => [
                'status' => [ 'type' => 'boolean', 'locationName' => 'status', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'data' => [ 'type' => 'object', 'locationName' => 'data', ],
            ],
        ],
        'DescribeScalingGroupsResultShape' => [
            'type' => 'structure',
            'members' => [
                'status' => [ 'type' => 'boolean', 'locationName' => 'status', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'data' => [ 'type' => 'object', 'locationName' => 'data', ],
            ],
        ],
        'ModifyScalingGroupResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'ModifyScalingGroupResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'CreateScalingGroupResultShape' => [
            'type' => 'structure',
            'members' => [
                'status' => [ 'type' => 'boolean', 'locationName' => 'status', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'data' => [ 'type' => 'object', 'locationName' => 'data', ],
            ],
        ],
        'ExportScalingActivitiesRequestShape' => [
            'type' => 'structure',
            'members' => [
                'configGroupId' => [ 'type' => 'string', 'locationName' => 'configGroupId', ],
                'configGroupName' => [ 'type' => 'string', 'locationName' => 'configGroupName', ],
                'ruleName' => [ 'type' => 'string', 'locationName' => 'ruleName', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'startTime' => [ 'type' => 'string', 'locationName' => 'startTime', ],
                'endTime' => [ 'type' => 'string', 'locationName' => 'endTime', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'clusterId' => [ 'type' => 'string', 'locationName' => 'clusterId', ],
            ],
        ],
        'ScalingCopyRequest' => [
            'type' => 'structure',
            'members' => [
                'toConfigGroupId' => [ 'type' => 'string', 'locationName' => 'toConfigGroupId', ],
                'isCover' => [ 'type' => 'boolean', 'locationName' => 'isCover', ],
            ],
        ],
        'DescribeScalingGroupsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeScalingGroupsResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ScalingGroupRequest' => [
            'type' => 'structure',
            'members' => [
                'configGroupId' => [ 'type' => 'string', 'locationName' => 'configGroupId', ],
                'minNodes' => [ 'type' => 'integer', 'locationName' => 'minNodes', ],
                'maxNodes' => [ 'type' => 'integer', 'locationName' => 'maxNodes', ],
                'expandSpecs' => [ 'type' => 'list', 'member' => [ 'shape' => 'ScalingSpec', ], ],
                'billingType' => [ 'type' => 'integer', 'locationName' => 'billingType', ],
                'enable' => [ 'type' => 'boolean', 'locationName' => 'enable', ],
                'dryRun' => [ 'type' => 'boolean', 'locationName' => 'dryRun', ],
                'dailyScaleLimit' => [ 'type' => 'integer', 'locationName' => 'dailyScaleLimit', ],
                'enableScaleOut' => [ 'type' => 'boolean', 'locationName' => 'enableScaleOut', ],
                'enableScaleIn' => [ 'type' => 'boolean', 'locationName' => 'enableScaleIn', ],
                'scaleOutRule' =>  [ 'shape' => 'ScalingRule', ],
                'scaleInRule' =>  [ 'shape' => 'ScalingRule', ],
                'version' => [ 'type' => 'integer', 'locationName' => 'version', ],
            ],
        ],
        'CopyScalingGroupResultShape' => [
            'type' => 'structure',
            'members' => [
                'status' => [ 'type' => 'boolean', 'locationName' => 'status', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'data' => [ 'type' => 'object', 'locationName' => 'data', ],
            ],
        ],
        'DescribeScalingActivityLogResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeScalingActivityLogResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ExecuteScalingManuallyRequestShape' => [
            'type' => 'structure',
            'members' => [
                'scalingExecution' =>  [ 'shape' => 'ScalingExecutionRequest', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'clusterId' => [ 'type' => 'string', 'locationName' => 'clusterId', ],
                'configGroupId' => [ 'type' => 'string', 'locationName' => 'configGroupId', ],
            ],
        ],
        'DescribeScalingActivitiesResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeScalingActivitiesResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ScalingExecutionRequest' => [
            'type' => 'structure',
            'members' => [
                'scaleType' => [ 'type' => 'string', 'locationName' => 'scaleType', ],
                'targetNum' => [ 'type' => 'integer', 'locationName' => 'targetNum', ],
            ],
        ],
        'DescribeScalingGroupRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'clusterId' => [ 'type' => 'string', 'locationName' => 'clusterId', ],
                'configGroupId' => [ 'type' => 'string', 'locationName' => 'configGroupId', ],
            ],
        ],
        'DescribeScalingGroupResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeScalingGroupResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ModifyScalingGroupResultShape' => [
            'type' => 'structure',
            'members' => [
                'status' => [ 'type' => 'boolean', 'locationName' => 'status', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'data' => [ 'type' => 'object', 'locationName' => 'data', ],
            ],
        ],
        'DeleteScalingGroupResultShape' => [
            'type' => 'structure',
            'members' => [
                'status' => [ 'type' => 'boolean', 'locationName' => 'status', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'data' => [ 'type' => 'object', 'locationName' => 'data', ],
            ],
        ],
        'DescribeScalingMetricsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeScalingMetricsResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'CopyScalingGroupRequestShape' => [
            'type' => 'structure',
            'members' => [
                'scalingCopy' =>  [ 'shape' => 'ScalingCopyRequest', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'clusterId' => [ 'type' => 'string', 'locationName' => 'clusterId', ],
                'configGroupId' => [ 'type' => 'string', 'locationName' => 'configGroupId', ],
            ],
        ],
        'ModifyScalingGroupRequestShape' => [
            'type' => 'structure',
            'members' => [
                'scalingGroup' =>  [ 'shape' => 'ScalingGroupRequest', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'clusterId' => [ 'type' => 'string', 'locationName' => 'clusterId', ],
                'configGroupId' => [ 'type' => 'string', 'locationName' => 'configGroupId', ],
            ],
        ],
        'CopyScalingGroupResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'CopyScalingGroupResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DeleteScalingGroupRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'clusterId' => [ 'type' => 'string', 'locationName' => 'clusterId', ],
                'configGroupId' => [ 'type' => 'string', 'locationName' => 'configGroupId', ],
            ],
        ],
        'DescribeScalingActivityLogRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'clusterId' => [ 'type' => 'string', 'locationName' => 'clusterId', ],
                'activityId' => [ 'type' => 'string', 'locationName' => 'activityId', ],
            ],
        ],
        'DescribeScalableNodeGroupsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'clusterId' => [ 'type' => 'string', 'locationName' => 'clusterId', ],
            ],
        ],
        'DeleteScalingGroupResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DeleteScalingGroupResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeScalingActivitiesResultShape' => [
            'type' => 'structure',
            'members' => [
                'status' => [ 'type' => 'boolean', 'locationName' => 'status', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'data' => [ 'type' => 'object', 'locationName' => 'data', ],
            ],
        ],
        'DescribeScalableNodeGroupsResultShape' => [
            'type' => 'structure',
            'members' => [
                'status' => [ 'type' => 'boolean', 'locationName' => 'status', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'data' => [ 'type' => 'object', 'locationName' => 'data', ],
            ],
        ],
        'DescribeScalingMetricsResultShape' => [
            'type' => 'structure',
            'members' => [
                'status' => [ 'type' => 'boolean', 'locationName' => 'status', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'data' => [ 'type' => 'object', 'locationName' => 'data', ],
            ],
        ],
        'DescribeScalingActivitiesRequestShape' => [
            'type' => 'structure',
            'members' => [
                'configGroupId' => [ 'type' => 'string', 'locationName' => 'configGroupId', ],
                'configGroupName' => [ 'type' => 'string', 'locationName' => 'configGroupName', ],
                'ruleName' => [ 'type' => 'string', 'locationName' => 'ruleName', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'startTime' => [ 'type' => 'string', 'locationName' => 'startTime', ],
                'endTime' => [ 'type' => 'string', 'locationName' => 'endTime', ],
                'pageNum' => [ 'type' => 'integer', 'locationName' => 'pageNum', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'clusterId' => [ 'type' => 'string', 'locationName' => 'clusterId', ],
            ],
        ],
        'CreateScalingGroupRequestShape' => [
            'type' => 'structure',
            'members' => [
                'scalingGroup' =>  [ 'shape' => 'ScalingGroupRequest', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'clusterId' => [ 'type' => 'string', 'locationName' => 'clusterId', ],
            ],
        ],
        'CreateScalingGroupResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'CreateScalingGroupResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeScalingMetricsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'clusterId' => [ 'type' => 'string', 'locationName' => 'clusterId', ],
            ],
        ],
        'ExportScalingActivitiesResultShape' => [
            'type' => 'structure',
            'members' => [
                'status' => [ 'type' => 'boolean', 'locationName' => 'status', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'data' => [ 'type' => 'object', 'locationName' => 'data', ],
            ],
        ],
        'DescribeScalingGroupResultShape' => [
            'type' => 'structure',
            'members' => [
                'status' => [ 'type' => 'boolean', 'locationName' => 'status', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'data' =>  [ 'shape' => 'ScalingGroup', ],
            ],
        ],
        'DescribeScalableNodeGroupsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeScalableNodeGroupsResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeScalingGroupsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'configGroupId' => [ 'type' => 'string', 'locationName' => 'configGroupId', ],
                'configGroupName' => [ 'type' => 'string', 'locationName' => 'configGroupName', ],
                'pageNum' => [ 'type' => 'integer', 'locationName' => 'pageNum', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'clusterId' => [ 'type' => 'string', 'locationName' => 'clusterId', ],
            ],
        ],
    ],
];
