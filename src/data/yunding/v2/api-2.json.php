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
        'DescribeVmInstances' => [
            'name' => 'DescribeVmInstances',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v2/regions/{regionId}/ydVmInstances',
            ],
            'input' => [ 'shape' => 'DescribeVmInstancesRequestShape', ],
            'output' => [ 'shape' => 'DescribeVmInstancesResponseShape', ],
        ],
        'DescribeVmInstance' => [
            'name' => 'DescribeVmInstance',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v2/regions/{regionId}/ydVmInstances/{instanceId}',
            ],
            'input' => [ 'shape' => 'DescribeVmInstanceRequestShape', ],
            'output' => [ 'shape' => 'DescribeVmInstanceResponseShape', ],
        ],
        'AttachNetworkInterface' => [
            'name' => 'AttachNetworkInterface',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v2/regions/{regionId}/ydVmInstances/{instanceId}:attachNetworkInterface',
            ],
            'input' => [ 'shape' => 'AttachNetworkInterfaceRequestShape', ],
            'output' => [ 'shape' => 'AttachNetworkInterfaceResponseShape', ],
        ],
        'DetachNetworkInterface' => [
            'name' => 'DetachNetworkInterface',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v2/regions/{regionId}/ydVmInstances/{instanceId}:detachNetworkInterface',
            ],
            'input' => [ 'shape' => 'DetachNetworkInterfaceRequestShape', ],
            'output' => [ 'shape' => 'DetachNetworkInterfaceResponseShape', ],
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
        'Charge' => [
            'type' => 'structure',
            'members' => [
                'chargeMode' => [ 'type' => 'string', 'locationName' => 'chargeMode', ],
                'chargeStatus' => [ 'type' => 'string', 'locationName' => 'chargeStatus', ],
                'chargeStartTime' => [ 'type' => 'string', 'locationName' => 'chargeStartTime', ],
                'chargeExpiredTime' => [ 'type' => 'string', 'locationName' => 'chargeExpiredTime', ],
                'chargeRetireTime' => [ 'type' => 'string', 'locationName' => 'chargeRetireTime', ],
            ],
        ],
        'BackupSynchronicityAbstract' => [
            'type' => 'structure',
            'members' => [
                'serviceId' => [ 'type' => 'string', 'locationName' => 'serviceId', ],
                'destRegion' => [ 'type' => 'string', 'locationName' => 'destRegion', ],
            ],
        ],
        'Tag' => [
            'type' => 'structure',
            'members' => [
                'key' => [ 'type' => 'string', 'locationName' => 'key', ],
                'value' => [ 'type' => 'string', 'locationName' => 'value', ],
            ],
        ],
        'DBInstanceNode' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
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
        'LocalDisk' => [
            'type' => 'structure',
            'members' => [
                'diskType' => [ 'type' => 'string', 'locationName' => 'diskType', ],
                'diskSizeGB' => [ 'type' => 'integer', 'locationName' => 'diskSizeGB', ],
            ],
        ],
        'SecurityGroupSimple' => [
            'type' => 'structure',
            'members' => [
                'groupId' => [ 'type' => 'string', 'locationName' => 'groupId', ],
                'groupName' => [ 'type' => 'string', 'locationName' => 'groupName', ],
            ],
        ],
        'InstanceDiskAttachment' => [
            'type' => 'structure',
            'members' => [
                'diskCategory' => [ 'type' => 'string', 'locationName' => 'diskCategory', ],
                'autoDelete' => [ 'type' => 'boolean', 'locationName' => 'autoDelete', ],
                'localDisk' =>  [ 'shape' => 'LocalDisk', ],
                'cloudDisk' =>  [ 'shape' => 'Disk', ],
                'deviceName' => [ 'type' => 'string', 'locationName' => 'deviceName', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
            ],
        ],
        'InstanceNetworkInterface' => [
            'type' => 'structure',
            'members' => [
                'networkInterfaceId' => [ 'type' => 'string', 'locationName' => 'networkInterfaceId', ],
                'macAddress' => [ 'type' => 'string', 'locationName' => 'macAddress', ],
                'vpcId' => [ 'type' => 'string', 'locationName' => 'vpcId', ],
                'subnetId' => [ 'type' => 'string', 'locationName' => 'subnetId', ],
                'securityGroups' => [ 'type' => 'list', 'member' => [ 'shape' => 'SecurityGroupSimple', ], ],
                'sanityCheck' => [ 'type' => 'integer', 'locationName' => 'sanityCheck', ],
                'primaryIp' =>  [ 'shape' => 'NetworkInterfacePrivateIp', ],
                'secondaryIps' => [ 'type' => 'list', 'member' => [ 'shape' => 'NetworkInterfacePrivateIp', ], ],
            ],
        ],
        'DiskAttachment' => [
            'type' => 'structure',
            'members' => [
                'attachmentId' => [ 'type' => 'string', 'locationName' => 'attachmentId', ],
                'diskId' => [ 'type' => 'string', 'locationName' => 'diskId', ],
                'instanceType' => [ 'type' => 'string', 'locationName' => 'instanceType', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'attachTime' => [ 'type' => 'string', 'locationName' => 'attachTime', ],
            ],
        ],
        'NetworkInterfaceIpv6Address' => [
            'type' => 'structure',
            'members' => [
                'ipv6Address' => [ 'type' => 'string', 'locationName' => 'ipv6Address', ],
            ],
        ],
        'NetworkInterfacePrivateIp' => [
            'type' => 'structure',
            'members' => [
                'privateIpAddress' => [ 'type' => 'string', 'locationName' => 'privateIpAddress', ],
                'elasticIpId' => [ 'type' => 'string', 'locationName' => 'elasticIpId', ],
                'elasticIpAddress' => [ 'type' => 'string', 'locationName' => 'elasticIpAddress', ],
            ],
        ],
        'Disk' => [
            'type' => 'structure',
            'members' => [
                'diskId' => [ 'type' => 'string', 'locationName' => 'diskId', ],
                'az' => [ 'type' => 'string', 'locationName' => 'az', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'diskType' => [ 'type' => 'string', 'locationName' => 'diskType', ],
                'diskSizeGB' => [ 'type' => 'integer', 'locationName' => 'diskSizeGB', ],
                'iops' => [ 'type' => 'integer', 'locationName' => 'iops', ],
                'throughput' => [ 'type' => 'integer', 'locationName' => 'throughput', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'attachments' => [ 'type' => 'list', 'member' => [ 'shape' => 'DiskAttachment', ], ],
                'snapshotId' => [ 'type' => 'string', 'locationName' => 'snapshotId', ],
                'multiAttachable' => [ 'type' => 'boolean', 'locationName' => 'multiAttachable', ],
                'encrypted' => [ 'type' => 'boolean', 'locationName' => 'encrypted', ],
                'enabled' => [ 'type' => 'boolean', 'locationName' => 'enabled', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'charge' =>  [ 'shape' => 'Charge', ],
                'tags' => [ 'type' => 'list', 'member' => [ 'shape' => 'Tag', ], ],
                'snapshotPolicies' => [ 'type' => 'list', 'member' => [ 'shape' => 'SnapshotPolicy', ], ],
                'resourceGroupId' => [ 'type' => 'string', 'locationName' => 'resourceGroupId', ],
                'canPutInRecycleBin' => [ 'type' => 'boolean', 'locationName' => 'canPutInRecycleBin', ],
                'trashTime' => [ 'type' => 'string', 'locationName' => 'trashTime', ],
            ],
        ],
        'SnapshotPolicy' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'pin' => [ 'type' => 'string', 'locationName' => 'pin', ],
                'interval' => [ 'type' => 'integer', 'locationName' => 'interval', ],
                'effectiveTime' => [ 'type' => 'string', 'locationName' => 'effectiveTime', ],
                'lastTriggerTime' => [ 'type' => 'string', 'locationName' => 'lastTriggerTime', ],
                'nextTriggerTime' => [ 'type' => 'string', 'locationName' => 'nextTriggerTime', ],
                'snapshotLifecycle' => [ 'type' => 'integer', 'locationName' => 'snapshotLifecycle', ],
                'contactInfo' =>  [ 'shape' => 'ContactInfo', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'updateTime' => [ 'type' => 'string', 'locationName' => 'updateTime', ],
                'status' => [ 'type' => 'integer', 'locationName' => 'status', ],
                'diskCount' => [ 'type' => 'integer', 'locationName' => 'diskCount', ],
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
        'ContactInfo' => [
            'type' => 'structure',
            'members' => [
                'sms' => [ 'type' => 'integer', 'locationName' => 'sms', ],
                'email' => [ 'type' => 'integer', 'locationName' => 'email', ],
                'personIds' => [ 'type' => 'list', 'member' => [ 'type' => 'integer', ], ],
                'groupIds' => [ 'type' => 'list', 'member' => [ 'type' => 'integer', ], ],
            ],
        ],
        'InstanceNetworkInterfaceAttachment' => [
            'type' => 'structure',
            'members' => [
                'deviceIndex' => [ 'type' => 'integer', 'locationName' => 'deviceIndex', ],
                'autoDelete' => [ 'type' => 'boolean', 'locationName' => 'autoDelete', ],
                'networkInterface' =>  [ 'shape' => 'InstanceNetworkInterface', ],
            ],
        ],
        'Ag' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
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
        'Subnet' => [
            'type' => 'structure',
            'members' => [
                'subnetId' => [ 'type' => 'string', 'locationName' => 'subnetId', ],
                'subnetName' => [ 'type' => 'string', 'locationName' => 'subnetName', ],
                'vpcId' => [ 'type' => 'string', 'locationName' => 'vpcId', ],
                'addressPrefix' => [ 'type' => 'string', 'locationName' => 'addressPrefix', ],
                'availableIpCount' => [ 'type' => 'double', 'locationName' => 'availableIpCount', ],
                'ipMaskLen' => [ 'type' => 'integer', 'locationName' => 'ipMaskLen', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'routeTableId' => [ 'type' => 'string', 'locationName' => 'routeTableId', ],
                'aclId' => [ 'type' => 'string', 'locationName' => 'aclId', ],
                'startIp' => [ 'type' => 'string', 'locationName' => 'startIp', ],
                'endIp' => [ 'type' => 'string', 'locationName' => 'endIp', ],
                'createdTime' => [ 'type' => 'string', 'locationName' => 'createdTime', ],
                'subnetType' => [ 'type' => 'string', 'locationName' => 'subnetType', ],
                'az' => [ 'type' => 'string', 'locationName' => 'az', ],
                'publicSubnet' => [ 'type' => 'boolean', 'locationName' => 'publicSubnet', ],
            ],
        ],
        'YdSnapfee' => [
            'type' => 'structure',
            'members' => [
                'jdcloudPin' => [ 'type' => 'string', 'locationName' => 'jdcloudPin', ],
                'resourceId' => [ 'type' => 'string', 'locationName' => 'resourceId', ],
                'ydPin' => [ 'type' => 'string', 'locationName' => 'ydPin', ],
                'ydResourceId' => [ 'type' => 'string', 'locationName' => 'ydResourceId', ],
            ],
        ],
        'YdSnapfeeState' => [
            'type' => 'structure',
            'members' => [
                'ydPin' => [ 'type' => 'string', 'locationName' => 'ydPin', ],
                'resourceId' => [ 'type' => 'string', 'locationName' => 'resourceId', ],
                'state' => [ 'type' => 'integer', 'locationName' => 'state', ],
            ],
        ],
        'YdUser' => [
            'type' => 'structure',
            'members' => [
                'ydPin' => [ 'type' => 'string', 'locationName' => 'ydPin', ],
                'jdcloudPin' => [ 'type' => 'string', 'locationName' => 'jdcloudPin', ],
                'ydSubPin' => [ 'type' => 'string', 'locationName' => 'ydSubPin', ],
                'jdcloudSubPin' => [ 'type' => 'string', 'locationName' => 'jdcloudSubPin', ],
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
        'TasksInfo' => [
            'type' => 'structure',
            'members' => [
                'confType' => [ 'type' => 'string', 'locationName' => 'confType', ],
                'confUID' => [ 'type' => 'string', 'locationName' => 'confUID', ],
                'content' => [ 'type' => 'object', 'locationName' => 'content', ],
                'interval' => [ 'type' => 'long', 'locationName' => 'interval', ],
                'meta' => [ 'type' => 'map', 'key' => [ 'type' => 'string', ], 'value' => [ 'type' => 'string', ], ],
            ],
        ],
        'DescribeTasksRequestShape' => [
            'type' => 'structure',
            'members' => [
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'LastDownsampleRespItem' => [
            'type' => 'structure',
            'members' => [
                'metric' => [ 'type' => 'string', 'locationName' => 'metric', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'tags' => [ 'type' => 'map', 'key' => [ 'type' => 'string', ], 'value' => [ 'type' => 'string', ], ],
                'unit' => [ 'type' => 'string', 'locationName' => 'unit', ],
                'value' => [ 'type' => 'object', 'locationName' => 'value', ],
            ],
        ],
        'PutProductMetricDataResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'PutProductMetricDataResultShape', ],
            ],
        ],
        'PutBody' => [
            'type' => 'structure',
            'members' => [
                'appCode' => [ 'type' => 'string', 'locationName' => 'appCode', ],
                'serviceCode' => [ 'type' => 'string', 'locationName' => 'serviceCode', ],
                'region' => [ 'type' => 'string', 'locationName' => 'region', ],
                'resourceId' => [ 'type' => 'string', 'locationName' => 'resourceId', ],
                'dataPoints' => [ 'type' => 'list', 'member' => [ 'shape' => 'DataPointX', ], ],
            ],
        ],
        'DataPointX' => [
            'type' => 'structure',
            'members' => [
                'metric' => [ 'type' => 'string', 'locationName' => 'metric', ],
                'tags' => [ 'type' => 'map', 'key' => [ 'type' => 'string', ], 'value' => [ 'type' => 'string', ], ],
                'timestamp' => [ 'type' => 'long', 'locationName' => 'timestamp', ],
                'value' => [ 'type' => 'object', 'locationName' => 'value', ],
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
        'TagFilter' => [
            'type' => 'structure',
            'members' => [
                'key' => [ 'type' => 'string', 'locationName' => 'key', ],
                'values' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'UnassignSecondaryIpsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'secondaryIps' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'secondaryCidrs' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
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
        'DescribeNetworkInterfaceResultShape' => [
            'type' => 'structure',
            'members' => [
                'networkInterface' =>  [ 'shape' => 'NetworkInterface', ],
            ],
        ],
        'NetworkInterface' => [
            'type' => 'structure',
            'members' => [
                'networkInterfaceName' => [ 'type' => 'string', 'locationName' => 'networkInterfaceName', ],
                'networkInterfaceId' => [ 'type' => 'string', 'locationName' => 'networkInterfaceId', ],
                'azType' => [ 'type' => 'string', 'locationName' => 'azType', ],
                'az' => [ 'type' => 'string', 'locationName' => 'az', ],
                'role' => [ 'type' => 'string', 'locationName' => 'role', ],
                'macAddress' => [ 'type' => 'string', 'locationName' => 'macAddress', ],
                'vpcId' => [ 'type' => 'string', 'locationName' => 'vpcId', ],
                'subnetId' => [ 'type' => 'string', 'locationName' => 'subnetId', ],
                'networkSecurityGroupIds' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'sanityCheck' => [ 'type' => 'integer', 'locationName' => 'sanityCheck', ],
                'primaryIp' =>  [ 'shape' => 'NetworkInterfacePrivateIp', ],
                'secondaryIps' => [ 'type' => 'list', 'member' => [ 'shape' => 'NetworkInterfacePrivateIp', ], ],
                'secondaryCidrs' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'instanceType' => [ 'type' => 'string', 'locationName' => 'instanceType', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'instanceOwnerId' => [ 'type' => 'string', 'locationName' => 'instanceOwnerId', ],
                'deviceIndex' => [ 'type' => 'integer', 'locationName' => 'deviceIndex', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'attachmentStatus' => [ 'type' => 'string', 'locationName' => 'attachmentStatus', ],
                'networkInterfaceStatus' => [ 'type' => 'string', 'locationName' => 'networkInterfaceStatus', ],
                'createdTime' => [ 'type' => 'string', 'locationName' => 'createdTime', ],
            ],
        ],
        'AssignSecondaryIpsResultShape' => [
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
        'DescribeNetworkInterfacesResultShape' => [
            'type' => 'structure',
            'members' => [
                'networkInterfaces' => [ 'type' => 'list', 'member' => [ 'shape' => 'NetworkInterface', ], ],
                'totalCount' => [ 'type' => 'double', 'locationName' => 'totalCount', ],
            ],
        ],
        'NetworkInterfaceSpec' => [
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
            ],
        ],
        'CreateNetworkInterfaceResultShape' => [
            'type' => 'structure',
            'members' => [
                'networkInterfaceId' => [ 'type' => 'string', 'locationName' => 'networkInterfaceId', ],
            ],
        ],
        'AssignSecondaryIpsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
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
        'AssignSecondaryIpsSpec' => [
            'type' => 'structure',
            'members' => [
                'force' => [ 'type' => 'boolean', 'locationName' => 'force', ],
                'secondaryIps' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'secondaryIpCount' => [ 'type' => 'double', 'locationName' => 'secondaryIpCount', ],
                'secondaryIpMaskLen' => [ 'type' => 'integer', 'locationName' => 'secondaryIpMaskLen', ],
                'secondaryIpAddress' => [ 'type' => 'string', 'locationName' => 'secondaryIpAddress', ],
            ],
        ],
        'UnassignSecondaryIpsResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'AssignSecondaryIpsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'force' => [ 'type' => 'boolean', 'locationName' => 'force', ],
                'secondaryIps' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'secondaryIpCount' => [ 'type' => 'double', 'locationName' => 'secondaryIpCount', ],
                'secondaryIpMaskLen' => [ 'type' => 'integer', 'locationName' => 'secondaryIpMaskLen', ],
                'secondaryIpAddress' => [ 'type' => 'string', 'locationName' => 'secondaryIpAddress', ],
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
        'UnassignSecondaryIpsSpec' => [
            'type' => 'structure',
            'members' => [
                'secondaryIps' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'secondaryCidrs' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
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
        'Filter' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'operator' => [ 'type' => 'string', 'locationName' => 'operator', ],
                'values' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'DeleteNetworkInterfaceResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'SecurityGroupRule' => [
            'type' => 'structure',
            'members' => [
                'ruleId' => [ 'type' => 'string', 'locationName' => 'ruleId', ],
                'direction' => [ 'type' => 'double', 'locationName' => 'direction', ],
                'protocol' => [ 'type' => 'double', 'locationName' => 'protocol', ],
                'addressPrefix' => [ 'type' => 'string', 'locationName' => 'addressPrefix', ],
                'ipVersion' => [ 'type' => 'double', 'locationName' => 'ipVersion', ],
                'fromPort' => [ 'type' => 'double', 'locationName' => 'fromPort', ],
                'toPort' => [ 'type' => 'double', 'locationName' => 'toPort', ],
                'createdTime' => [ 'type' => 'string', 'locationName' => 'createdTime', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'ruleType' => [ 'type' => 'string', 'locationName' => 'ruleType', ],
            ],
        ],
        'NetworkSecurityGroup' => [
            'type' => 'structure',
            'members' => [
                'networkSecurityGroupId' => [ 'type' => 'string', 'locationName' => 'networkSecurityGroupId', ],
                'networkSecurityGroupName' => [ 'type' => 'string', 'locationName' => 'networkSecurityGroupName', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'vpcId' => [ 'type' => 'string', 'locationName' => 'vpcId', ],
                'securityGroupRules' => [ 'type' => 'list', 'member' => [ 'shape' => 'SecurityGroupRule', ], ],
                'createdTime' => [ 'type' => 'string', 'locationName' => 'createdTime', ],
                'networkSecurityGroupType' => [ 'type' => 'string', 'locationName' => 'networkSecurityGroupType', ],
                'networkInterfaceIds' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
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
        'Database' => [
            'type' => 'structure',
            'members' => [
                'dbName' => [ 'type' => 'string', 'locationName' => 'dbName', ],
                'dbStatus' => [ 'type' => 'string', 'locationName' => 'dbStatus', ],
                'characterSetName' => [ 'type' => 'string', 'locationName' => 'characterSetName', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'comment' => [ 'type' => 'string', 'locationName' => 'comment', ],
                'accessPrivilege' => [ 'type' => 'list', 'member' => [ 'shape' => 'DBAccessPrivilege', ], ],
            ],
        ],
        'GrantRdsPrivilegeResultShape' => [
            'type' => 'structure',
            'members' => [
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
        'DeleteRdsDatabaseResponseShape' => [
            'type' => 'structure',
            'members' => [
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
        'DescribeRdsAccountsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeRdsAccountsResultShape', ],
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
        'AccountPrivilege' => [
            'type' => 'structure',
            'members' => [
                'dbName' => [ 'type' => 'string', 'locationName' => 'dbName', ],
                'privilege' => [ 'type' => 'string', 'locationName' => 'privilege', ],
            ],
        ],
        'ModifyRdsWhiteListResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DBAccessPrivilege' => [
            'type' => 'structure',
            'members' => [
                'accountName' => [ 'type' => 'string', 'locationName' => 'accountName', ],
                'privilege' => [ 'type' => 'string', 'locationName' => 'privilege', ],
            ],
        ],
        'GrantRdsPrivilegeResponseShape' => [
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
        'CreateRdsAccountResponseShape' => [
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
        'CreateRdsDatabaseResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'WhiteList' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'ips' => [ 'type' => 'string', 'locationName' => 'ips', ],
            ],
        ],
        'DescribeYdRdsInstancesResultShape' => [
            'type' => 'structure',
            'members' => [
                'clusters' => [ 'type' => 'list', 'member' => [ 'shape' => 'RdsInstance', ], ],
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
            ],
        ],
        'DeleteRdsDatabaseResultShape' => [
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
        'DescribeRdsWhiteListRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'DescribeYdRdsInstancesRequestShape' => [
            'type' => 'structure',
            'members' => [
                'appKey' => [ 'type' => 'string', 'locationName' => 'appKey', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
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
        'DescribeRdsWhiteListResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeRdsWhiteListResultShape', ],
            ],
        ],
        'DeleteRdsAccountResponseShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'Account' => [
            'type' => 'structure',
            'members' => [
                'accountName' => [ 'type' => 'string', 'locationName' => 'accountName', ],
                'accountStatus' => [ 'type' => 'string', 'locationName' => 'accountStatus', ],
                'accountType' => [ 'type' => 'string', 'locationName' => 'accountType', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'updateTime' => [ 'type' => 'string', 'locationName' => 'updateTime', ],
                'notes' => [ 'type' => 'string', 'locationName' => 'notes', ],
                'accountPrivileges' => [ 'type' => 'list', 'member' => [ 'shape' => 'AccountPrivilege', ], ],
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
        'SubnetSpec' => [
            'type' => 'structure',
            'members' => [
                'vpcId' => [ 'type' => 'string', 'locationName' => 'vpcId', ],
                'subnetName' => [ 'type' => 'string', 'locationName' => 'subnetName', ],
                'addressPrefix' => [ 'type' => 'string', 'locationName' => 'addressPrefix', ],
                'routeTableId' => [ 'type' => 'string', 'locationName' => 'routeTableId', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'ipMaskLen' => [ 'type' => 'integer', 'locationName' => 'ipMaskLen', ],
                'dryRun' => [ 'type' => 'boolean', 'locationName' => 'dryRun', ],
            ],
        ],
        'DescribeSubnetResultShape' => [
            'type' => 'structure',
            'members' => [
                'subnet' =>  [ 'shape' => 'Subnet', ],
            ],
        ],
        'CreateSubnetResultShape' => [
            'type' => 'structure',
            'members' => [
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
                'ipMaskLen' => [ 'type' => 'integer', 'locationName' => 'ipMaskLen', ],
                'dryRun' => [ 'type' => 'boolean', 'locationName' => 'dryRun', ],
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
        'Userdata' => [
            'type' => 'structure',
            'members' => [
                'key' => [ 'type' => 'string', 'locationName' => 'key', ],
                'value' => [ 'type' => 'string', 'locationName' => 'value', ],
            ],
        ],
        'CpuTopology' => [
            'type' => 'structure',
            'members' => [
                'sockets' => [ 'type' => 'list', 'member' => [ 'shape' => 'Socket', ], ],
                'numas' => [ 'type' => 'list', 'member' => [ 'shape' => 'Numa', ], ],
            ],
        ],
        'InstanceTypeBurstInfo' => [
            'type' => 'structure',
            'members' => [
                'creditsEarnedPerHour' => [ 'type' => 'float', 'locationName' => 'creditsEarnedPerHour', ],
                'basePerformance' => [ 'type' => 'float', 'locationName' => 'basePerformance', ],
            ],
        ],
        'DescribeVmInstancesRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'filters' => [ 'type' => 'list', 'member' => [ 'shape' => 'Filter', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'AttachNetworkInterfaceResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DiskSpec' => [
            'type' => 'structure',
            'members' => [
                'az' => [ 'type' => 'string', 'locationName' => 'az', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'diskType' => [ 'type' => 'string', 'locationName' => 'diskType', ],
                'diskSizeGB' => [ 'type' => 'integer', 'locationName' => 'diskSizeGB', ],
                'iops' => [ 'type' => 'integer', 'locationName' => 'iops', ],
                'snapshotId' => [ 'type' => 'string', 'locationName' => 'snapshotId', ],
                'policyId' => [ 'type' => 'string', 'locationName' => 'policyId', ],
                'charge' =>  [ 'shape' => 'ChargeSpec', ],
                'multiAttachable' => [ 'type' => 'boolean', 'locationName' => 'multiAttachable', ],
                'encrypt' => [ 'type' => 'boolean', 'locationName' => 'encrypt', ],
            ],
        ],
        'ElasticIpSpec' => [
            'type' => 'structure',
            'members' => [
                'bandwidthMbps' => [ 'type' => 'integer', 'locationName' => 'bandwidthMbps', ],
                'provider' => [ 'type' => 'string', 'locationName' => 'provider', ],
                'chargeSpec' =>  [ 'shape' => 'ChargeSpec', ],
            ],
        ],
        'InstanceSpec' => [
            'type' => 'structure',
            'members' => [
                'dedicatedPoolId' => [ 'type' => 'string', 'locationName' => 'dedicatedPoolId', ],
                'dedicatedHostId' => [ 'type' => 'string', 'locationName' => 'dedicatedHostId', ],
                'agId' => [ 'type' => 'string', 'locationName' => 'agId', ],
                'instanceTemplateId' => [ 'type' => 'string', 'locationName' => 'instanceTemplateId', ],
                'az' => [ 'type' => 'string', 'locationName' => 'az', ],
                'instanceType' => [ 'type' => 'string', 'locationName' => 'instanceType', ],
                'burstSpec' =>  [ 'shape' => 'BurstSpec', ],
                'imageId' => [ 'type' => 'string', 'locationName' => 'imageId', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'hostname' => [ 'type' => 'string', 'locationName' => 'hostname', ],
                'password' => [ 'type' => 'string', 'locationName' => 'password', ],
                'keyNames' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'elasticIp' =>  [ 'shape' => 'ElasticIpSpec', ],
                'primaryNetworkInterface' =>  [ 'shape' => 'InstanceNetworkInterfaceAttachmentSpec', ],
                'systemDisk' =>  [ 'shape' => 'InstanceDiskAttachmentSpec', ],
                'dataDisks' => [ 'type' => 'list', 'member' => [ 'shape' => 'InstanceDiskAttachmentSpec', ], ],
                'charge' =>  [ 'shape' => 'ChargeSpec', ],
                'metadata' => [ 'type' => 'list', 'member' => [ 'shape' => 'Metadata', ], ],
                'userdata' => [ 'type' => 'list', 'member' => [ 'shape' => 'Userdata', ], ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'noPassword' => [ 'type' => 'boolean', 'locationName' => 'noPassword', ],
                'noKeyNames' => [ 'type' => 'boolean', 'locationName' => 'noKeyNames', ],
                'noElasticIp' => [ 'type' => 'boolean', 'locationName' => 'noElasticIp', ],
                'noInstanceTags' => [ 'type' => 'boolean', 'locationName' => 'noInstanceTags', ],
                'userTags' => [ 'type' => 'list', 'member' => [ 'shape' => 'Tag', ], ],
                'chargeOnStopped' => [ 'type' => 'string', 'locationName' => 'chargeOnStopped', ],
                'autoImagePolicyId' => [ 'type' => 'string', 'locationName' => 'autoImagePolicyId', ],
                'passwordAuth' => [ 'type' => 'string', 'locationName' => 'passwordAuth', ],
                'imageInherit' => [ 'type' => 'string', 'locationName' => 'imageInherit', ],
                'resourceGroupId' => [ 'type' => 'string', 'locationName' => 'resourceGroupId', ],
                'cpuTopology' =>  [ 'shape' => 'CpuTopology', ],
            ],
        ],
        'InstanceType' => [
            'type' => 'structure',
            'members' => [
                'family' => [ 'type' => 'string', 'locationName' => 'family', ],
                'instanceType' => [ 'type' => 'string', 'locationName' => 'instanceType', ],
                'cpu' => [ 'type' => 'integer', 'locationName' => 'cpu', ],
                'architecture' => [ 'type' => 'string', 'locationName' => 'architecture', ],
                'memoryMB' => [ 'type' => 'integer', 'locationName' => 'memoryMB', ],
                'nicLimit' => [ 'type' => 'integer', 'locationName' => 'nicLimit', ],
                'cloudDiskCountLimit' => [ 'type' => 'integer', 'locationName' => 'cloudDiskCountLimit', ],
                'desc' => [ 'type' => 'string', 'locationName' => 'desc', ],
                'state' => [ 'type' => 'list', 'member' => [ 'shape' => 'InstanceTypeState', ], ],
                'gpu' =>  [ 'shape' => 'Gpu', ],
                'localDisks' => [ 'type' => 'list', 'member' => [ 'shape' => 'LocalDisk', ], ],
                'generation' => [ 'type' => 'integer', 'locationName' => 'generation', ],
                'burstInfo' =>  [ 'shape' => 'InstanceTypeBurstInfo', ],
                'cloudDiskTypes' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'AttachNetworkInterfaceResponseShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'Thread' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'integer', 'locationName' => 'id', ],
                'pin' => [ 'type' => 'integer', 'locationName' => 'pin', ],
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
        'ChargeSpec' => [
            'type' => 'structure',
            'members' => [
                'chargeMode' => [ 'type' => 'string', 'locationName' => 'chargeMode', ],
                'chargeUnit' => [ 'type' => 'string', 'locationName' => 'chargeUnit', ],
                'chargeDuration' => [ 'type' => 'integer', 'locationName' => 'chargeDuration', ],
                'autoRenew' => [ 'type' => 'boolean', 'locationName' => 'autoRenew', ],
                'autoChangeChargeMode' => [ 'type' => 'boolean', 'locationName' => 'autoChangeChargeMode', ],
                'autoChangeChargeModeDate' => [ 'type' => 'string', 'locationName' => 'autoChangeChargeModeDate', ],
                'buyScenario' => [ 'type' => 'string', 'locationName' => 'buyScenario', ],
            ],
        ],
        'Socket' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'integer', 'locationName' => 'id', ],
                'cores' => [ 'type' => 'list', 'member' => [ 'shape' => 'Core', ], ],
            ],
        ],
        'DescribeVmInstanceResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeVmInstanceResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeVmInstancesResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeVmInstancesResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DetachNetworkInterfaceResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'BurstSpec' => [
            'type' => 'structure',
            'members' => [
                'burstMode' => [ 'type' => 'string', 'locationName' => 'burstMode', ],
            ],
        ],
        'InstanceDiskAttachmentSpec' => [
            'type' => 'structure',
            'members' => [
                'diskCategory' => [ 'type' => 'string', 'locationName' => 'diskCategory', ],
                'autoDelete' => [ 'type' => 'boolean', 'locationName' => 'autoDelete', ],
                'cloudDiskSpec' =>  [ 'shape' => 'DiskSpec', ],
                'deviceName' => [ 'type' => 'string', 'locationName' => 'deviceName', ],
                'noDevice' => [ 'type' => 'boolean', 'locationName' => 'noDevice', ],
            ],
        ],
        'Metadata' => [
            'type' => 'structure',
            'members' => [
                'key' => [ 'type' => 'string', 'locationName' => 'key', ],
                'value' => [ 'type' => 'string', 'locationName' => 'value', ],
            ],
        ],
        'InstanceNetworkInterfaceAttachmentSpec' => [
            'type' => 'structure',
            'members' => [
                'deviceIndex' => [ 'type' => 'integer', 'locationName' => 'deviceIndex', ],
                'autoDelete' => [ 'type' => 'boolean', 'locationName' => 'autoDelete', ],
                'networkInterface' =>  [ 'shape' => 'NetworkInterfaceSpec', ],
            ],
        ],
        'DescribeVmInstanceRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'DescribeVmInstanceResultShape' => [
            'type' => 'structure',
            'members' => [
                'instance' =>  [ 'shape' => 'Instance', ],
            ],
        ],
        'DetachNetworkInterfaceRequestShape' => [
            'type' => 'structure',
            'members' => [
                'networkInterfaceId' => [ 'type' => 'string', 'locationName' => 'networkInterfaceId', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'Gpu' => [
            'type' => 'structure',
            'members' => [
                'model' => [ 'type' => 'string', 'locationName' => 'model', ],
                'number' => [ 'type' => 'integer', 'locationName' => 'number', ],
            ],
        ],
        'DetachNetworkInterfaceResponseShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'InstanceTypeState' => [
            'type' => 'structure',
            'members' => [
                'az' => [ 'type' => 'string', 'locationName' => 'az', ],
                'inStock' => [ 'type' => 'boolean', 'locationName' => 'inStock', ],
                'availableCount' => [ 'type' => 'integer', 'locationName' => 'availableCount', ],
            ],
        ],
        'AttachNetworkInterfaceRequestShape' => [
            'type' => 'structure',
            'members' => [
                'networkInterfaceId' => [ 'type' => 'string', 'locationName' => 'networkInterfaceId', ],
                'autoDelete' => [ 'type' => 'boolean', 'locationName' => 'autoDelete', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'Core' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'integer', 'locationName' => 'id', ],
                'threads' => [ 'type' => 'list', 'member' => [ 'shape' => 'Thread', ], ],
            ],
        ],
        'Numa' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'integer', 'locationName' => 'id', ],
                'cores' => [ 'type' => 'list', 'member' => [ 'shape' => 'Core', ], ],
            ],
        ],
        'DescribeVmInstancesResultShape' => [
            'type' => 'structure',
            'members' => [
                'instances' => [ 'type' => 'list', 'member' => [ 'shape' => 'Instance', ], ],
                'totalCount' => [ 'type' => 'double', 'locationName' => 'totalCount', ],
            ],
        ],
    ],
];
