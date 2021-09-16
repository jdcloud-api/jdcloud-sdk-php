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
    ],
];
