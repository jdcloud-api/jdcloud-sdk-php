<?php
// This file was auto-generated
return [
//    'version' => '',
    'metadata' =>
    [
//        'apiVersion' => '',
//        'endpointPrefix' => 'yunding',
        'protocol' => 'json',
//        'serviceFullName' => 'yunding',
//        'serviceId' => 'yunding',
    ],
    'operations' => [
        'DescribeTasks' => [
            'name' => 'DescribeTasks',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v2/agentTasks/{instanceId}',
            ],
            'input' => [ 'shape' => 'DescribeTasksRequestShape', ],
            'output' => [ 'shape' => 'DescribeTasksResponseShape', ],
        ],
        'Put' => [
            'name' => 'Put',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v2/regions/{regionId}/put',
            ],
            'input' => [ 'shape' => 'PutRequestShape', ],
            'output' => [ 'shape' => 'PutResponseShape', ],
        ],
        'PutProductMetricData' => [
            'name' => 'PutProductMetricData',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v2/regions/{regionId}/put',
            ],
            'input' => [ 'shape' => 'PutProductMetricDataRequestShape', ],
            'output' => [ 'shape' => 'PutProductMetricDataResponseShape', ],
        ],
        'AssignSecondaryIps' => [
            'name' => 'AssignSecondaryIps',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v2/regions/{regionId}/ydNetworkInterfaces/{networkInterfaceId}:assignSecondaryIps',
            ],
            'input' => [ 'shape' => 'AssignSecondaryIpsRequestShape', ],
            'output' => [ 'shape' => 'AssignSecondaryIpsResponseShape', ],
        ],
        'UnassignSecondaryIps' => [
            'name' => 'UnassignSecondaryIps',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v2/regions/{regionId}/ydNetworkInterfaces/{networkInterfaceId}:unassignSecondaryIps',
            ],
            'input' => [ 'shape' => 'UnassignSecondaryIpsRequestShape', ],
            'output' => [ 'shape' => 'UnassignSecondaryIpsResponseShape', ],
        ],
        'DescribeNetworkInterface' => [
            'name' => 'DescribeNetworkInterface',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v2/regions/{regionId}/ydNetworkInterfaces/{networkInterfaceId}',
            ],
            'input' => [ 'shape' => 'DescribeNetworkInterfaceRequestShape', ],
            'output' => [ 'shape' => 'DescribeNetworkInterfaceResponseShape', ],
        ],
        'DeleteNetworkInterface' => [
            'name' => 'DeleteNetworkInterface',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v2/regions/{regionId}/ydNetworkInterfaces/{networkInterfaceId}',
            ],
            'input' => [ 'shape' => 'DeleteNetworkInterfaceRequestShape', ],
            'output' => [ 'shape' => 'DeleteNetworkInterfaceResponseShape', ],
        ],
        'DescribeNetworkInterfaces' => [
            'name' => 'DescribeNetworkInterfaces',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v2/regions/{regionId}/ydNetworkInterfaces',
            ],
            'input' => [ 'shape' => 'DescribeNetworkInterfacesRequestShape', ],
            'output' => [ 'shape' => 'DescribeNetworkInterfacesResponseShape', ],
        ],
        'CreateNetworkInterface' => [
            'name' => 'CreateNetworkInterface',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v2/regions/{regionId}/ydNetworkInterfaces',
            ],
            'input' => [ 'shape' => 'CreateNetworkInterfaceRequestShape', ],
            'output' => [ 'shape' => 'CreateNetworkInterfaceResponseShape', ],
        ],
        'DescribeRdsInstances' => [
            'name' => 'DescribeRdsInstances',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v2/regions/{regionId}/ydRdsInstances',
            ],
            'input' => [ 'shape' => 'DescribeRdsInstancesRequestShape', ],
            'output' => [ 'shape' => 'DescribeRdsInstancesResponseShape', ],
        ],
        'DescribeRdsInstance' => [
            'name' => 'DescribeRdsInstance',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v2/regions/{regionId}/ydRdsInstances/{instanceId}',
            ],
            'input' => [ 'shape' => 'DescribeRdsInstanceRequestShape', ],
            'output' => [ 'shape' => 'DescribeRdsInstanceResponseShape', ],
        ],
        'DescribeInstanceInfo' => [
            'name' => 'DescribeInstanceInfo',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v2/regions/{regionId}/ydRdsInstances/{instanceId}:describeInstanceInfo',
            ],
            'input' => [ 'shape' => 'DescribeInstanceInfoRequestShape', ],
            'output' => [ 'shape' => 'DescribeInstanceInfoResponseShape', ],
        ],
        'DescribeRdsWhiteList' => [
            'name' => 'DescribeRdsWhiteList',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v2/regions/{regionId}/ydRdsInstances/{instanceId}/whiteList',
            ],
            'input' => [ 'shape' => 'DescribeRdsWhiteListRequestShape', ],
            'output' => [ 'shape' => 'DescribeRdsWhiteListResponseShape', ],
        ],
        'ModifyRdsWhiteList' => [
            'name' => 'ModifyRdsWhiteList',
            'http' => [
                'method' => 'PUT',
                'requestUri' => '/v2/regions/{regionId}/ydRdsInstances/{instanceId}/whiteList',
            ],
            'input' => [ 'shape' => 'ModifyRdsWhiteListRequestShape', ],
            'output' => [ 'shape' => 'ModifyRdsWhiteListResponseShape', ],
        ],
        'DescribeRdsAccounts' => [
            'name' => 'DescribeRdsAccounts',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v2/regions/{regionId}/ydRdsInstances/{instanceId}/accounts',
            ],
            'input' => [ 'shape' => 'DescribeRdsAccountsRequestShape', ],
            'output' => [ 'shape' => 'DescribeRdsAccountsResponseShape', ],
        ],
        'CreateRdsAccount' => [
            'name' => 'CreateRdsAccount',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v2/regions/{regionId}/ydRdsInstances/{instanceId}/accounts',
            ],
            'input' => [ 'shape' => 'CreateRdsAccountRequestShape', ],
            'output' => [ 'shape' => 'CreateRdsAccountResponseShape', ],
        ],
        'DeleteRdsAccount' => [
            'name' => 'DeleteRdsAccount',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v2/regions/{regionId}/ydRdsInstances/{instanceId}/accounts/{accountName}',
            ],
            'input' => [ 'shape' => 'DeleteRdsAccountRequestShape', ],
            'output' => [ 'shape' => 'DeleteRdsAccountResponseShape', ],
        ],
        'GrantRdsPrivilege' => [
            'name' => 'GrantRdsPrivilege',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v2/regions/{regionId}/ydRdsInstances/{instanceId}/accounts/{accountName}:grantPrivilege',
            ],
            'input' => [ 'shape' => 'GrantRdsPrivilegeRequestShape', ],
            'output' => [ 'shape' => 'GrantRdsPrivilegeResponseShape', ],
        ],
        'RevokePrivilege' => [
            'name' => 'RevokePrivilege',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v2/regions/{regionId}/ydRdsInstances/{instanceId}/accounts/{accountName}:revokePrivilege',
            ],
            'input' => [ 'shape' => 'RevokePrivilegeRequestShape', ],
            'output' => [ 'shape' => 'RevokePrivilegeResponseShape', ],
        ],
        'DescribeRdsDatabases' => [
            'name' => 'DescribeRdsDatabases',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v2/regions/{regionId}/ydRdsInstances/{instanceId}/databases',
            ],
            'input' => [ 'shape' => 'DescribeRdsDatabasesRequestShape', ],
            'output' => [ 'shape' => 'DescribeRdsDatabasesResponseShape', ],
        ],
        'CreateRdsDatabase' => [
            'name' => 'CreateRdsDatabase',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v2/regions/{regionId}/ydRdsInstances/{instanceId}/databases',
            ],
            'input' => [ 'shape' => 'CreateRdsDatabaseRequestShape', ],
            'output' => [ 'shape' => 'CreateRdsDatabaseResponseShape', ],
        ],
        'DeleteRdsDatabase' => [
            'name' => 'DeleteRdsDatabase',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v2/regions/{regionId}/ydRdsInstances/{instanceId}/databases/{dbName}',
            ],
            'input' => [ 'shape' => 'DeleteRdsDatabaseRequestShape', ],
            'output' => [ 'shape' => 'DeleteRdsDatabaseResponseShape', ],
        ],
        'DescribeYdRdsInstances' => [
            'name' => 'DescribeYdRdsInstances',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v2/regions/{regionId}/rdsInstances',
            ],
            'input' => [ 'shape' => 'DescribeYdRdsInstancesRequestShape', ],
            'output' => [ 'shape' => 'DescribeYdRdsInstancesResponseShape', ],
        ],
        'DescribeSubnets' => [
            'name' => 'DescribeSubnets',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v2/regions/{regionId}/ydSubnets/',
            ],
            'input' => [ 'shape' => 'DescribeSubnetsRequestShape', ],
            'output' => [ 'shape' => 'DescribeSubnetsResponseShape', ],
        ],
        'CreateSubnet' => [
            'name' => 'CreateSubnet',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v2/regions/{regionId}/ydSubnets/',
            ],
            'input' => [ 'shape' => 'CreateSubnetRequestShape', ],
            'output' => [ 'shape' => 'CreateSubnetResponseShape', ],
        ],
        'DescribeSubnet' => [
            'name' => 'DescribeSubnet',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v2/regions/{regionId}/ydSubnets/{subnetId}',
            ],
            'input' => [ 'shape' => 'DescribeSubnetRequestShape', ],
            'output' => [ 'shape' => 'DescribeSubnetResponseShape', ],
        ],
        'DeleteSubnet' => [
            'name' => 'DeleteSubnet',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v2/regions/{regionId}/ydSubnets/{subnetId}',
            ],
            'input' => [ 'shape' => 'DeleteSubnetRequestShape', ],
            'output' => [ 'shape' => 'DeleteSubnetResponseShape', ],
        ],
    ],
    'shapes' => [
        'Application' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
                'typeId' => [ 'type' => 'integer', 'locationName' => 'typeId', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'jdcloudPin' => [ 'type' => 'string', 'locationName' => 'jdcloudPin', ],
            ],
        ],
        'Cluster' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'dataCenter' => [ 'type' => 'string', 'locationName' => 'dataCenter', ],
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
                'connectionPort' => [ 'type' => 'string', 'locationName' => 'connectionPort', ],
                'dbEngine' => [ 'type' => 'string', 'locationName' => 'dbEngine', ],
                'dbVersion' => [ 'type' => 'string', 'locationName' => 'dbVersion', ],
            ],
        ],
        'DBInstance' => [
            'type' => 'structure',
            'members' => [
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'instanceName' => [ 'type' => 'string', 'locationName' => 'instanceName', ],
                'instanceType' => [ 'type' => 'string', 'locationName' => 'instanceType', ],
                'engine' => [ 'type' => 'string', 'locationName' => 'engine', ],
                'engineVersion' => [ 'type' => 'string', 'locationName' => 'engineVersion', ],
                'instanceClass' => [ 'type' => 'string', 'locationName' => 'instanceClass', ],
                'instanceStorageGB' => [ 'type' => 'integer', 'locationName' => 'instanceStorageGB', ],
                'instanceCPU' => [ 'type' => 'integer', 'locationName' => 'instanceCPU', ],
                'instanceMemoryMB' => [ 'type' => 'integer', 'locationName' => 'instanceMemoryMB', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'azId' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'vpcId' => [ 'type' => 'string', 'locationName' => 'vpcId', ],
                'subnetId' => [ 'type' => 'string', 'locationName' => 'subnetId', ],
                'instanceStatus' => [ 'type' => 'string', 'locationName' => 'instanceStatus', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'backupSynchronicity' => [ 'type' => 'list', 'member' => [ 'shape' => 'BackupSynchronicityAbstract', ], ],
                'charge' =>  [ 'shape' => 'Charge', ],
                'tags' => [ 'type' => 'list', 'member' => [ 'shape' => 'Tag', ], ],
                'sourceInstanceId' => [ 'type' => 'string', 'locationName' => 'sourceInstanceId', ],
                'vpcName' => [ 'type' => 'string', 'locationName' => 'vpcName', ],
                'dbUrl' => [ 'type' => 'string', 'locationName' => 'dbUrl', ],
            ],
        ],
        'DBInstanceAttribute' => [
            'type' => 'structure',
            'members' => [
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'instanceName' => [ 'type' => 'string', 'locationName' => 'instanceName', ],
                'instanceType' => [ 'type' => 'string', 'locationName' => 'instanceType', ],
                'engine' => [ 'type' => 'string', 'locationName' => 'engine', ],
                'engineVersion' => [ 'type' => 'string', 'locationName' => 'engineVersion', ],
                'instanceClass' => [ 'type' => 'string', 'locationName' => 'instanceClass', ],
                'instanceStorageType' => [ 'type' => 'string', 'locationName' => 'instanceStorageType', ],
                'storageEncrypted' => [ 'type' => 'boolean', 'locationName' => 'storageEncrypted', ],
                'instanceStorageGB' => [ 'type' => 'integer', 'locationName' => 'instanceStorageGB', ],
                'instanceCPU' => [ 'type' => 'integer', 'locationName' => 'instanceCPU', ],
                'instanceMemoryMB' => [ 'type' => 'integer', 'locationName' => 'instanceMemoryMB', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'azId' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'vpcId' => [ 'type' => 'string', 'locationName' => 'vpcId', ],
                'subnetId' => [ 'type' => 'string', 'locationName' => 'subnetId', ],
                'parameterGroupId' => [ 'type' => 'string', 'locationName' => 'parameterGroupId', ],
                'parameterGroupName' => [ 'type' => 'string', 'locationName' => 'parameterGroupName', ],
                'parameterStatus' => [ 'type' => 'string', 'locationName' => 'parameterStatus', ],
                'internalDomainName' => [ 'type' => 'string', 'locationName' => 'internalDomainName', ],
                'publicDomainName' => [ 'type' => 'string', 'locationName' => 'publicDomainName', ],
                'instancePort' => [ 'type' => 'string', 'locationName' => 'instancePort', ],
                'connectionMode' => [ 'type' => 'string', 'locationName' => 'connectionMode', ],
                'auditStatus' => [ 'type' => 'string', 'locationName' => 'auditStatus', ],
                'instanceStatus' => [ 'type' => 'string', 'locationName' => 'instanceStatus', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'charge' =>  [ 'shape' => 'Charge', ],
                'sourceInstanceId' => [ 'type' => 'string', 'locationName' => 'sourceInstanceId', ],
                'roInstanceIds' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'primaryNode' =>  [ 'shape' => 'DBInstanceNode', ],
                'secondaryNode' =>  [ 'shape' => 'DBInstanceNode', ],
                'tags' => [ 'type' => 'list', 'member' => [ 'shape' => 'Tag', ], ],
                'vpcName' => [ 'type' => 'string', 'locationName' => 'vpcName', ],
            ],
        ],
        'RdsInstance' => [
            'type' => 'structure',
            'members' => [
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'instanceName' => [ 'type' => 'string', 'locationName' => 'instanceName', ],
                'instanceType' => [ 'type' => 'string', 'locationName' => 'instanceType', ],
                'engine' => [ 'type' => 'string', 'locationName' => 'engine', ],
                'engineVersion' => [ 'type' => 'string', 'locationName' => 'engineVersion', ],
                'instanceClass' => [ 'type' => 'string', 'locationName' => 'instanceClass', ],
                'instanceStorageGB' => [ 'type' => 'integer', 'locationName' => 'instanceStorageGB', ],
                'instanceCPU' => [ 'type' => 'integer', 'locationName' => 'instanceCPU', ],
                'instanceMemoryMB' => [ 'type' => 'integer', 'locationName' => 'instanceMemoryMB', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'azId' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'vpcId' => [ 'type' => 'string', 'locationName' => 'vpcId', ],
                'vpcName' => [ 'type' => 'string', 'locationName' => 'vpcName', ],
                'subnetId' => [ 'type' => 'string', 'locationName' => 'subnetId', ],
                'instanceStatus' => [ 'type' => 'string', 'locationName' => 'instanceStatus', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'sourceInstanceId' => [ 'type' => 'string', 'locationName' => 'sourceInstanceId', ],
            ],
        ],
        'UrlApp' => [
            'type' => 'structure',
            'members' => [
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
                'jdcloudPin' => [ 'type' => 'string', 'locationName' => 'jdcloudPin', ],
            ],
        ],
        'VmImageOverview' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'platform' => [ 'type' => 'string', 'locationName' => 'platform', ],
            ],
        ],
        'Instance' => [
            'type' => 'structure',
            'members' => [
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'instanceName' => [ 'type' => 'string', 'locationName' => 'instanceName', ],
                'instanceType' => [ 'type' => 'string', 'locationName' => 'instanceType', ],
                'vpcId' => [ 'type' => 'string', 'locationName' => 'vpcId', ],
                'subnetId' => [ 'type' => 'string', 'locationName' => 'subnetId', ],
                'privateIpAddress' => [ 'type' => 'string', 'locationName' => 'privateIpAddress', ],
                'elasticIpId' => [ 'type' => 'string', 'locationName' => 'elasticIpId', ],
                'elasticIpAddress' => [ 'type' => 'string', 'locationName' => 'elasticIpAddress', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'imageId' => [ 'type' => 'string', 'locationName' => 'imageId', ],
                'systemDisk' =>  [ 'shape' => 'InstanceDiskAttachment', ],
                'dataDisks' => [ 'type' => 'list', 'member' => [ 'shape' => 'InstanceDiskAttachment', ], ],
                'primaryNetworkInterface' =>  [ 'shape' => 'InstanceNetworkInterfaceAttachment', ],
                'secondaryNetworkInterfaces' => [ 'type' => 'list', 'member' => [ 'shape' => 'InstanceNetworkInterfaceAttachment', ], ],
                'launchTime' => [ 'type' => 'string', 'locationName' => 'launchTime', ],
                'az' => [ 'type' => 'string', 'locationName' => 'az', ],
                'keyNames' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'charge' =>  [ 'shape' => 'Charge', ],
                'ag' =>  [ 'shape' => 'Ag', ],
                'faultDomain' => [ 'type' => 'string', 'locationName' => 'faultDomain', ],
                'tags' => [ 'type' => 'list', 'member' => [ 'shape' => 'Tag', ], ],
                'vpcName' => [ 'type' => 'string', 'locationName' => 'vpcName', ],
                'subnetName' => [ 'type' => 'string', 'locationName' => 'subnetName', ],
                'imageOverview' =>  [ 'shape' => 'VmImageOverview', ],
            ],
        ],
        'Vpc' => [
            'type' => 'structure',
            'members' => [
                'vpcId' => [ 'type' => 'string', 'locationName' => 'vpcId', ],
                'addressPrefix' => [ 'type' => 'string', 'locationName' => 'addressPrefix', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'vpcName' => [ 'type' => 'string', 'locationName' => 'vpcName', ],
                'aclIds' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'routeTableIds' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'subnets' => [ 'type' => 'list', 'member' => [ 'shape' => 'Subnet', ], ],
                'createdTime' => [ 'type' => 'string', 'locationName' => 'createdTime', ],
                'resourceId' => [ 'type' => 'string', 'locationName' => 'resourceId', ],
                'version' => [ 'type' => 'string', 'locationName' => 'version', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'typeId' => [ 'type' => 'integer', 'locationName' => 'typeId', ],
                'typeName' => [ 'type' => 'integer', 'locationName' => 'typeName', ],
                'appType' => [ 'type' => 'string', 'locationName' => 'appType', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
                'appKey' => [ 'type' => 'string', 'locationName' => 'appKey', ],
            ],
        ],
        'YdUser' => [
            'type' => 'structure',
            'members' => [
                'ydPin' => [ 'type' => 'string', 'locationName' => 'ydPin', ],
                'jdcloudPin' => [ 'type' => 'string', 'locationName' => 'jdcloudPin', ],
            ],
        ],
        'DescribeTasksResultShape' => [
            'type' => 'structure',
            'members' => [
                'tasks' => [ 'type' => 'list', 'member' => [ 'shape' => 'TasksInfo', ], ],
            ],
        ],
        'DescribeTasksResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'DescribeTasksResultShape', ],
            ],
        ],
        'DescribeTasksRequestShape' => [
            'type' => 'structure',
            'members' => [
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'PutProductMetricDataResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'PutProductMetricDataResultShape', ],
            ],
        ],
        'PutResultShape' => [
            'type' => 'structure',
            'members' => [
                'failed' => [ 'type' => 'integer', 'locationName' => 'failed', ],
                'success' => [ 'type' => 'integer', 'locationName' => 'success', ],
            ],
        ],
        'PutRequestShape' => [
            'type' => 'structure',
            'members' => [
                'appCode' => [ 'type' => 'string', 'locationName' => 'appCode', ],
                'serviceCode' => [ 'type' => 'string', 'locationName' => 'serviceCode', ],
                'region' => [ 'type' => 'string', 'locationName' => 'region', ],
                'resourceId' => [ 'type' => 'string', 'locationName' => 'resourceId', ],
                'dataPoints' => [ 'type' => 'list', 'member' => [ 'shape' => 'DataPointX', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'PutProductMetricDataRequestShape' => [
            'type' => 'structure',
            'members' => [
                'appCode' => [ 'type' => 'string', 'locationName' => 'appCode', ],
                'serviceCode' => [ 'type' => 'string', 'locationName' => 'serviceCode', ],
                'region' => [ 'type' => 'string', 'locationName' => 'region', ],
                'resourceId' => [ 'type' => 'string', 'locationName' => 'resourceId', ],
                'dataPoints' => [ 'type' => 'list', 'member' => [ 'shape' => 'DataPointX', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'PutResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'PutResultShape', ],
            ],
        ],
        'PutProductMetricDataResultShape' => [
            'type' => 'structure',
            'members' => [
                'failed' => [ 'type' => 'integer', 'locationName' => 'failed', ],
                'success' => [ 'type' => 'integer', 'locationName' => 'success', ],
            ],
        ],
        'UnassignSecondaryIpsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'secondaryIps' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'networkInterfaceId' => [ 'type' => 'string', 'locationName' => 'networkInterfaceId', ],
            ],
        ],
        'CreateNetworkInterfaceRequestShape' => [
            'type' => 'structure',
            'members' => [
                'subnetId' => [ 'type' => 'string', 'locationName' => 'subnetId', ],
                'az' => [ 'type' => 'string', 'locationName' => 'az', ],
                'networkInterfaceName' => [ 'type' => 'string', 'locationName' => 'networkInterfaceName', ],
                'primaryIpAddress' => [ 'type' => 'string', 'locationName' => 'primaryIpAddress', ],
                'secondaryIpAddresses' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'secondaryIpCount' => [ 'type' => 'integer', 'locationName' => 'secondaryIpCount', ],
                'securityGroups' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'sanityCheck' => [ 'type' => 'integer', 'locationName' => 'sanityCheck', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'AssignSecondaryIpsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeNetworkInterfaceResultShape' => [
            'type' => 'structure',
            'members' => [
                'networkInterface' =>  [ 'shape' => 'NetworkInterface', ],
            ],
        ],
        'UnassignSecondaryIpsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DeleteNetworkInterfaceResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'AssignSecondaryIpsResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'UnassignSecondaryIpsResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'CreateNetworkInterfaceResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'CreateNetworkInterfaceResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeNetworkInterfacesRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'filters' => [ 'type' => 'list', 'member' => [ 'shape' => 'Filter', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'AssignSecondaryIpsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'force' => [ 'type' => 'boolean', 'locationName' => 'force', ],
                'secondaryIps' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'secondaryIpCount' => [ 'type' => 'double', 'locationName' => 'secondaryIpCount', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'networkInterfaceId' => [ 'type' => 'string', 'locationName' => 'networkInterfaceId', ],
            ],
        ],
        'DeleteNetworkInterfaceRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'networkInterfaceId' => [ 'type' => 'string', 'locationName' => 'networkInterfaceId', ],
            ],
        ],
        'DescribeNetworkInterfacesResultShape' => [
            'type' => 'structure',
            'members' => [
                'networkInterfaces' => [ 'type' => 'list', 'member' => [ 'shape' => 'NetworkInterface', ], ],
                'totalCount' => [ 'type' => 'double', 'locationName' => 'totalCount', ],
            ],
        ],
        'DescribeNetworkInterfaceRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'networkInterfaceId' => [ 'type' => 'string', 'locationName' => 'networkInterfaceId', ],
            ],
        ],
        'DescribeNetworkInterfacesResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeNetworkInterfacesResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeNetworkInterfaceResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeNetworkInterfaceResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DeleteNetworkInterfaceResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'CreateNetworkInterfaceResultShape' => [
            'type' => 'structure',
            'members' => [
                'networkInterfaceId' => [ 'type' => 'string', 'locationName' => 'networkInterfaceId', ],
            ],
        ],
        'CreateRdsDatabaseResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DeleteRdsAccountResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DescribeInstanceInfoResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeInstanceInfoResultShape', ],
            ],
        ],
        'DeleteRdsAccountRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'accountName' => [ 'type' => 'string', 'locationName' => 'accountName', ],
            ],
        ],
        'GrantRdsPrivilegeResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DescribeYdRdsInstancesResultShape' => [
            'type' => 'structure',
            'members' => [
                'clusters' => [ 'type' => 'list', 'member' => [ 'shape' => 'RdsInstance', ], ],
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
            ],
        ],
        'DescribeRdsInstanceResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeRdsInstanceResultShape', ],
            ],
        ],
        'GrantRdsPrivilegeRequestShape' => [
            'type' => 'structure',
            'members' => [
                'accountPrivileges' => [ 'type' => 'list', 'member' => [ 'shape' => 'AccountPrivilege', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'accountName' => [ 'type' => 'string', 'locationName' => 'accountName', ],
            ],
        ],
        'DescribeRdsDatabasesResultShape' => [
            'type' => 'structure',
            'members' => [
                'databases' => [ 'type' => 'list', 'member' => [ 'shape' => 'Database', ], ],
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
            ],
        ],
        'DescribeRdsInstanceResultShape' => [
            'type' => 'structure',
            'members' => [
                'dbInstanceAttributes' =>  [ 'shape' => 'DBInstanceAttribute', ],
            ],
        ],
        'DescribeYdRdsInstancesResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeYdRdsInstancesResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeRdsInstanceRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'DeleteRdsDatabaseResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DeleteRdsDatabaseResponseShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'RevokePrivilegeResponseShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'ModifyRdsWhiteListRequestShape' => [
            'type' => 'structure',
            'members' => [
                'ips' => [ 'type' => 'string', 'locationName' => 'ips', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'CreateRdsDatabaseResponseShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DescribeRdsInstancesResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeRdsInstancesResultShape', ],
            ],
        ],
        'DescribeRdsWhiteListRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'DescribeRdsAccountsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeRdsAccountsResultShape', ],
            ],
        ],
        'DescribeYdRdsInstancesRequestShape' => [
            'type' => 'structure',
            'members' => [
                'appKey' => [ 'type' => 'string', 'locationName' => 'appKey', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DescribeInstanceInfoResultShape' => [
            'type' => 'structure',
            'members' => [
                'instanceStatus' => [ 'type' => 'string', 'locationName' => 'instanceStatus', ],
                'internalDns' => [ 'type' => 'string', 'locationName' => 'internalDns', ],
            ],
        ],
        'ModifyRdsWhiteListResponseShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DescribeRdsAccountsResultShape' => [
            'type' => 'structure',
            'members' => [
                'accounts' => [ 'type' => 'list', 'member' => [ 'shape' => 'Account', ], ],
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
            ],
        ],
        'DescribeRdsDatabasesResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeRdsDatabasesResultShape', ],
            ],
        ],
        'ModifyRdsWhiteListResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DescribeRdsWhiteListResultShape' => [
            'type' => 'structure',
            'members' => [
                'whiteLists' => [ 'type' => 'list', 'member' => [ 'shape' => 'WhiteList', ], ],
            ],
        ],
        'DescribeInstanceInfoRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'DescribeRdsInstancesRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'filters' => [ 'type' => 'list', 'member' => [ 'shape' => 'Filter', ], ],
                'type' => [ 'type' => 'integer', 'locationName' => 'type', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DescribeRdsDatabasesRequestShape' => [
            'type' => 'structure',
            'members' => [
                'dbName' => [ 'type' => 'string', 'locationName' => 'dbName', ],
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'GrantRdsPrivilegeResponseShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'CreateRdsAccountResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'RevokePrivilegeResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DescribeRdsAccountsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'DescribeRdsWhiteListResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeRdsWhiteListResultShape', ],
            ],
        ],
        'CreateRdsAccountResponseShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DeleteRdsAccountResponseShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'RevokePrivilegeRequestShape' => [
            'type' => 'structure',
            'members' => [
                'dbNames' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'accountName' => [ 'type' => 'string', 'locationName' => 'accountName', ],
            ],
        ],
        'DescribeRdsInstancesResultShape' => [
            'type' => 'structure',
            'members' => [
                'dbInstances' => [ 'type' => 'list', 'member' => [ 'shape' => 'DBInstance', ], ],
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
            ],
        ],
        'CreateRdsAccountRequestShape' => [
            'type' => 'structure',
            'members' => [
                'accountName' => [ 'type' => 'string', 'locationName' => 'accountName', ],
                'accountPassword' => [ 'type' => 'string', 'locationName' => 'accountPassword', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'CreateRdsDatabaseRequestShape' => [
            'type' => 'structure',
            'members' => [
                'dbName' => [ 'type' => 'string', 'locationName' => 'dbName', ],
                'characterSetName' => [ 'type' => 'string', 'locationName' => 'characterSetName', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'DeleteRdsDatabaseRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'dbName' => [ 'type' => 'string', 'locationName' => 'dbName', ],
            ],
        ],
        'DescribeSubnetRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'subnetId' => [ 'type' => 'string', 'locationName' => 'subnetId', ],
            ],
        ],
        'DescribeSubnetsResultShape' => [
            'type' => 'structure',
            'members' => [
                'subnets' => [ 'type' => 'list', 'member' => [ 'shape' => 'Subnet', ], ],
                'totalCount' => [ 'type' => 'double', 'locationName' => 'totalCount', ],
            ],
        ],
        'CreateSubnetResultShape' => [
            'type' => 'structure',
            'members' => [
                'subnetId' => [ 'type' => 'string', 'locationName' => 'subnetId', ],
            ],
        ],
        'DeleteSubnetResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DeleteSubnetRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'subnetId' => [ 'type' => 'string', 'locationName' => 'subnetId', ],
            ],
        ],
        'DeleteSubnetResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeSubnetsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'type' => [ 'type' => 'integer', 'locationName' => 'type', ],
                'filters' => [ 'type' => 'list', 'member' => [ 'shape' => 'Filter', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DescribeSubnetResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeSubnetResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeSubnetsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeSubnetsResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'CreateSubnetRequestShape' => [
            'type' => 'structure',
            'members' => [
                'vpcId' => [ 'type' => 'string', 'locationName' => 'vpcId', ],
                'subnetName' => [ 'type' => 'string', 'locationName' => 'subnetName', ],
                'addressPrefix' => [ 'type' => 'string', 'locationName' => 'addressPrefix', ],
                'routeTableId' => [ 'type' => 'string', 'locationName' => 'routeTableId', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'subnetType' => [ 'type' => 'string', 'locationName' => 'subnetType', ],
                'az' => [ 'type' => 'string', 'locationName' => 'az', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'CreateSubnetResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'CreateSubnetResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeSubnetResultShape' => [
            'type' => 'structure',
            'members' => [
                'subnet' =>  [ 'shape' => 'Subnet', ],
            ],
        ],
    ],
];
