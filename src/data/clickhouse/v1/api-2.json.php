<?php
// This file was auto-generated
return [
//    'version' => '',
    'metadata' =>
    [
//        'apiVersion' => '',
//        'endpointPrefix' => 'clickhouse',
        'protocol' => 'json',
//        'serviceFullName' => 'clickhouse',
//        'serviceId' => 'clickhouse',
    ],
    'operations' => [
        'DescribeAccounts' => [
            'name' => 'DescribeAccounts',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}/accounts',
            ],
            'input' => [ 'shape' => 'DescribeAccountsRequestShape', ],
            'output' => [ 'shape' => 'DescribeAccountsResponseShape', ],
        ],
        'CreateAccount' => [
            'name' => 'CreateAccount',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}/accounts',
            ],
            'input' => [ 'shape' => 'CreateAccountRequestShape', ],
            'output' => [ 'shape' => 'CreateAccountResponseShape', ],
        ],
        'DeleteAccount' => [
            'name' => 'DeleteAccount',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}/accounts/{accountName}',
            ],
            'input' => [ 'shape' => 'DeleteAccountRequestShape', ],
            'output' => [ 'shape' => 'DeleteAccountResponseShape', ],
        ],
        'ModifyPrivilege' => [
            'name' => 'ModifyPrivilege',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}/accounts/{accountName}:modifyPrivilege',
            ],
            'input' => [ 'shape' => 'ModifyPrivilegeRequestShape', ],
            'output' => [ 'shape' => 'ModifyPrivilegeResponseShape', ],
        ],
        'ResetPassword' => [
            'name' => 'ResetPassword',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}/accounts/{accountName}:resetPassword',
            ],
            'input' => [ 'shape' => 'ResetPasswordRequestShape', ],
            'output' => [ 'shape' => 'ResetPasswordResponseShape', ],
        ],
        'Azs' => [
            'name' => 'Azs',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/azs',
            ],
            'input' => [ 'shape' => 'AzsRequestShape', ],
            'output' => [ 'shape' => 'AzsResponseShape', ],
        ],
        'OrderableInstanceType' => [
            'name' => 'OrderableInstanceType',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/OrderableInstanceType',
            ],
            'input' => [ 'shape' => 'OrderableInstanceTypeRequestShape', ],
            'output' => [ 'shape' => 'OrderableInstanceTypeResponseShape', ],
        ],
        'CreateInstance' => [
            'name' => 'CreateInstance',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/instances',
            ],
            'input' => [ 'shape' => 'CreateInstanceRequestShape', ],
            'output' => [ 'shape' => 'CreateInstanceResponseShape', ],
        ],
        'ModifyInstanceSpec' => [
            'name' => 'ModifyInstanceSpec',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}:modifyInstanceSpec',
            ],
            'input' => [ 'shape' => 'ModifyInstanceSpecRequestShape', ],
            'output' => [ 'shape' => 'ModifyInstanceSpecResponseShape', ],
        ],
        'DescribeInstanceAttributes' => [
            'name' => 'DescribeInstanceAttributes',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}',
            ],
            'input' => [ 'shape' => 'DescribeInstanceAttributesRequestShape', ],
            'output' => [ 'shape' => 'DescribeInstanceAttributesResponseShape', ],
        ],
        'DeleteInstance' => [
            'name' => 'DeleteInstance',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}',
            ],
            'input' => [ 'shape' => 'DeleteInstanceRequestShape', ],
            'output' => [ 'shape' => 'DeleteInstanceResponseShape', ],
        ],
        'DescribeInstances' => [
            'name' => 'DescribeInstances',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/instances:describeInstances',
            ],
            'input' => [ 'shape' => 'DescribeInstancesRequestShape', ],
            'output' => [ 'shape' => 'DescribeInstancesResponseShape', ],
        ],
        'DescribeAvailableDBInfoInternel' => [
            'name' => 'DescribeAvailableDBInfoInternel',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/instances:describeAvailableDBInfoInternel',
            ],
            'input' => [ 'shape' => 'DescribeAvailableDBInfoInternelRequestShape', ],
            'output' => [ 'shape' => 'DescribeAvailableDBInfoInternelResponseShape', ],
        ],
        'DescribeNodeClasses' => [
            'name' => 'DescribeNodeClasses',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/instances:describeNodeClasses',
            ],
            'input' => [ 'shape' => 'DescribeNodeClassesRequestShape', ],
            'output' => [ 'shape' => 'DescribeNodeClassesResponseShape', ],
        ],
        'DescribeDefaultConfig' => [
            'name' => 'DescribeDefaultConfig',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/instances:describeDefaultConfig',
            ],
            'input' => [ 'shape' => 'DescribeDefaultConfigRequestShape', ],
            'output' => [ 'shape' => 'DescribeDefaultConfigResponseShape', ],
        ],
        'DescribePodMap' => [
            'name' => 'DescribePodMap',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}:describePodMap',
            ],
            'input' => [ 'shape' => 'DescribePodMapRequestShape', ],
            'output' => [ 'shape' => 'DescribePodMapResponseShape', ],
        ],
        'DescribeDomainNames' => [
            'name' => 'DescribeDomainNames',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}:describeDomainNames',
            ],
            'input' => [ 'shape' => 'DescribeDomainNamesRequestShape', ],
            'output' => [ 'shape' => 'DescribeDomainNamesResponseShape', ],
        ],
        'ModifyInstanceName' => [
            'name' => 'ModifyInstanceName',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}:modifyInstanceName',
            ],
            'input' => [ 'shape' => 'ModifyInstanceNameRequestShape', ],
            'output' => [ 'shape' => 'ModifyInstanceNameResponseShape', ],
        ],
        'ModifyReplicaNum' => [
            'name' => 'ModifyReplicaNum',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}:modifyReplicaNum',
            ],
            'input' => [ 'shape' => 'ModifyReplicaNumRequestShape', ],
            'output' => [ 'shape' => 'ModifyReplicaNumResponseShape', ],
        ],
        'UpgradeEngineVersion' => [
            'name' => 'UpgradeEngineVersion',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}:upgradeEngineVersion',
            ],
            'input' => [ 'shape' => 'UpgradeEngineVersionRequestShape', ],
            'output' => [ 'shape' => 'UpgradeEngineVersionResponseShape', ],
        ],
        'DisableInternetAccess' => [
            'name' => 'DisableInternetAccess',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}:disableInternetAccess',
            ],
            'input' => [ 'shape' => 'DisableInternetAccessRequestShape', ],
            'output' => [ 'shape' => 'DisableInternetAccessResponseShape', ],
        ],
        'EnableInternetAccess' => [
            'name' => 'EnableInternetAccess',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}:enableInternetAccess',
            ],
            'input' => [ 'shape' => 'EnableInternetAccessRequestShape', ],
            'output' => [ 'shape' => 'EnableInternetAccessResponseShape', ],
        ],
        'DescribeNodes' => [
            'name' => 'DescribeNodes',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}/nodes',
            ],
            'input' => [ 'shape' => 'DescribeNodesRequestShape', ],
            'output' => [ 'shape' => 'DescribeNodesResponseShape', ],
        ],
        'DescribeProgress' => [
            'name' => 'DescribeProgress',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}/progress',
            ],
            'input' => [ 'shape' => 'DescribeProgressRequestShape', ],
            'output' => [ 'shape' => 'DescribeProgressResponseShape', ],
        ],
        'SelectDetailList' => [
            'name' => 'SelectDetailList',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/instances:selectDetailList',
            ],
            'input' => [ 'shape' => 'SelectDetailListRequestShape', ],
            'output' => [ 'shape' => 'SelectDetailListResponseShape', ],
        ],
        'InternalDescribeInstance' => [
            'name' => 'InternalDescribeInstance',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}:internalDescribeInstance',
            ],
            'input' => [ 'shape' => 'InternalDescribeInstanceRequestShape', ],
            'output' => [ 'shape' => 'InternalDescribeInstanceResponseShape', ],
        ],
        'DescribeAuditResult' => [
            'name' => 'DescribeAuditResult',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}/audit:describeAuditResult',
            ],
            'input' => [ 'shape' => 'DescribeAuditResultRequestShape', ],
            'output' => [ 'shape' => 'DescribeAuditResultResponseShape', ],
        ],
        'DescribeSlowlogResult' => [
            'name' => 'DescribeSlowlogResult',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}/slowlog:describeSlowlogResult',
            ],
            'input' => [ 'shape' => 'DescribeSlowlogResultRequestShape', ],
            'output' => [ 'shape' => 'DescribeSlowlogResultResponseShape', ],
        ],
        'DescribeParameters' => [
            'name' => 'DescribeParameters',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}/parameters',
            ],
            'input' => [ 'shape' => 'DescribeParametersRequestShape', ],
            'output' => [ 'shape' => 'DescribeParametersResponseShape', ],
        ],
        'ModifyParameters' => [
            'name' => 'ModifyParameters',
            'http' => [
                'method' => 'PUT',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}/parameters',
            ],
            'input' => [ 'shape' => 'ModifyParametersRequestShape', ],
            'output' => [ 'shape' => 'ModifyParametersResponseShape', ],
        ],
        'DescribeWhiteList' => [
            'name' => 'DescribeWhiteList',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}/whiteList',
            ],
            'input' => [ 'shape' => 'DescribeWhiteListRequestShape', ],
            'output' => [ 'shape' => 'DescribeWhiteListResponseShape', ],
        ],
        'ModifyWhiteList' => [
            'name' => 'ModifyWhiteList',
            'http' => [
                'method' => 'PUT',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}/whiteList',
            ],
            'input' => [ 'shape' => 'ModifyWhiteListRequestShape', ],
            'output' => [ 'shape' => 'ModifyWhiteListResponseShape', ],
        ],
        'DeleteWhiteListGroup' => [
            'name' => 'DeleteWhiteListGroup',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}/whiteList',
            ],
            'input' => [ 'shape' => 'DeleteWhiteListGroupRequestShape', ],
            'output' => [ 'shape' => 'DeleteWhiteListGroupResponseShape', ],
        ],
        'AddWhiteListGroup' => [
            'name' => 'AddWhiteListGroup',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}/whiteList:addWhiteListGroup',
            ],
            'input' => [ 'shape' => 'AddWhiteListGroupRequestShape', ],
            'output' => [ 'shape' => 'AddWhiteListGroupResponseShape', ],
        ],
    ],
    'shapes' => [
        'AuditLog' => [
            'type' => 'structure',
            'members' => [
                'ip' => [ 'type' => 'string', 'locationName' => 'ip', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'segmentName' => [ 'type' => 'string', 'locationName' => 'segmentName', ],
                'sql' => [ 'type' => 'string', 'locationName' => 'sql', ],
                'accountName' => [ 'type' => 'string', 'locationName' => 'accountName', ],
                'startTime' => [ 'type' => 'string', 'locationName' => 'startTime', ],
            ],
        ],
        'Flavor' => [
            'type' => 'structure',
            'members' => [
                'nodeClass' => [ 'type' => 'string', 'locationName' => 'nodeClass', ],
                'cpu' => [ 'type' => 'integer', 'locationName' => 'cpu', ],
                'memoryGB' => [ 'type' => 'integer', 'locationName' => 'memoryGB', ],
                'storageGBRange' => [ 'type' => 'string', 'locationName' => 'storageGBRange', ],
            ],
        ],
        'ChSpec' => [
            'type' => 'structure',
            'members' => [
                'flavors' => [ 'type' => 'list', 'member' => [ 'shape' => 'Flavor', ], ],
                'partitionMaxNum' => [ 'type' => 'integer', 'locationName' => 'partitionMaxNum', ],
                'replicaMaxNum' => [ 'type' => 'integer', 'locationName' => 'replicaMaxNum', ],
            ],
        ],
        'Account' => [
            'type' => 'structure',
            'members' => [
                'accountName' => [ 'type' => 'string', 'locationName' => 'accountName', ],
                'privileges' => [ 'type' => 'string', 'locationName' => 'privileges', ],
                'accountStatus' => [ 'type' => 'string', 'locationName' => 'accountStatus', ],
                'createTime' => [ 'type' => 'integer', 'locationName' => 'createTime', ],
            ],
        ],
        'Tag' => [
            'type' => 'structure',
            'members' => [
                'key' => [ 'type' => 'string', 'locationName' => 'key', ],
                'value' => [ 'type' => 'string', 'locationName' => 'value', ],
            ],
        ],
        'Instance' => [
            'type' => 'structure',
            'members' => [
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'resourceId' => [ 'type' => 'string', 'locationName' => 'resourceId', ],
                'instanceName' => [ 'type' => 'string', 'locationName' => 'instanceName', ],
                'engineVersion' => [ 'type' => 'string', 'locationName' => 'engineVersion', ],
                'replicaNum' => [ 'type' => 'integer', 'locationName' => 'replicaNum', ],
                'shardNum' => [ 'type' => 'integer', 'locationName' => 'shardNum', ],
                'chNodeClass' => [ 'type' => 'string', 'locationName' => 'chNodeClass', ],
                'chNodeStorageType' => [ 'type' => 'string', 'locationName' => 'chNodeStorageType', ],
                'chNodeStorageGB' => [ 'type' => 'integer', 'locationName' => 'chNodeStorageGB', ],
                'chNodeCPU' => [ 'type' => 'integer', 'locationName' => 'chNodeCPU', ],
                'chNodeMemoryGB' => [ 'type' => 'integer', 'locationName' => 'chNodeMemoryGB', ],
                'zkNodeClass' => [ 'type' => 'string', 'locationName' => 'zkNodeClass', ],
                'zkNodeNum' => [ 'type' => 'integer', 'locationName' => 'zkNodeNum', ],
                'zkNodeCPU' => [ 'type' => 'integer', 'locationName' => 'zkNodeCPU', ],
                'zkNodeMemoryGB' => [ 'type' => 'integer', 'locationName' => 'zkNodeMemoryGB', ],
                'zkNodeStorageGB' => [ 'type' => 'integer', 'locationName' => 'zkNodeStorageGB', ],
                'monitorNodeClass' => [ 'type' => 'string', 'locationName' => 'monitorNodeClass', ],
                'monitorNodeNum' => [ 'type' => 'integer', 'locationName' => 'monitorNodeNum', ],
                'monitorNodeCPU' => [ 'type' => 'integer', 'locationName' => 'monitorNodeCPU', ],
                'monitorNodeMemoryGB' => [ 'type' => 'integer', 'locationName' => 'monitorNodeMemoryGB', ],
                'monitorNodeStorageGB' => [ 'type' => 'integer', 'locationName' => 'monitorNodeStorageGB', ],
                'totalCPU' => [ 'type' => 'integer', 'locationName' => 'totalCPU', ],
                'totalMemoryGB' => [ 'type' => 'integer', 'locationName' => 'totalMemoryGB', ],
                'totalStorageGB' => [ 'type' => 'integer', 'locationName' => 'totalStorageGB', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'azId' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'vpcId' => [ 'type' => 'string', 'locationName' => 'vpcId', ],
                'subnetId' => [ 'type' => 'string', 'locationName' => 'subnetId', ],
                'instanceStatus' => [ 'type' => 'string', 'locationName' => 'instanceStatus', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'charge' =>  [ 'shape' => 'Charge', ],
                'tags' => [ 'type' => 'list', 'member' => [ 'shape' => 'Tag', ], ],
                'resourceGroupId' => [ 'type' => 'string', 'locationName' => 'resourceGroupId', ],
                'resourceGroupName' => [ 'type' => 'string', 'locationName' => 'resourceGroupName', ],
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
        'ClickhouseInstanceAttributes' => [
            'type' => 'structure',
            'members' => [
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'instanceName' => [ 'type' => 'string', 'locationName' => 'instanceName', ],
                'engineVersion' => [ 'type' => 'string', 'locationName' => 'engineVersion', ],
                'replicaNum' => [ 'type' => 'integer', 'locationName' => 'replicaNum', ],
                'shardNum' => [ 'type' => 'integer', 'locationName' => 'shardNum', ],
                'chNodeClass' => [ 'type' => 'string', 'locationName' => 'chNodeClass', ],
                'chNodeStorageType' => [ 'type' => 'string', 'locationName' => 'chNodeStorageType', ],
                'chNodeStorageGB' => [ 'type' => 'integer', 'locationName' => 'chNodeStorageGB', ],
                'chNodeCPU' => [ 'type' => 'integer', 'locationName' => 'chNodeCPU', ],
                'chNodeMemoryGB' => [ 'type' => 'integer', 'locationName' => 'chNodeMemoryGB', ],
                'zkNodeClass' => [ 'type' => 'string', 'locationName' => 'zkNodeClass', ],
                'zkNodeNum' => [ 'type' => 'integer', 'locationName' => 'zkNodeNum', ],
                'zkNodeCPU' => [ 'type' => 'integer', 'locationName' => 'zkNodeCPU', ],
                'zkNodeMemoryGB' => [ 'type' => 'integer', 'locationName' => 'zkNodeMemoryGB', ],
                'zkNodeStorageGB' => [ 'type' => 'integer', 'locationName' => 'zkNodeStorageGB', ],
                'monitorNodeClass' => [ 'type' => 'string', 'locationName' => 'monitorNodeClass', ],
                'monitorNodeNum' => [ 'type' => 'integer', 'locationName' => 'monitorNodeNum', ],
                'monitorNodeCPU' => [ 'type' => 'integer', 'locationName' => 'monitorNodeCPU', ],
                'monitorNodeMemoryGB' => [ 'type' => 'integer', 'locationName' => 'monitorNodeMemoryGB', ],
                'monitorNodeStorageGB' => [ 'type' => 'integer', 'locationName' => 'monitorNodeStorageGB', ],
                'totalCPU' => [ 'type' => 'integer', 'locationName' => 'totalCPU', ],
                'totalMemoryGB' => [ 'type' => 'integer', 'locationName' => 'totalMemoryGB', ],
                'totalStorageGB' => [ 'type' => 'integer', 'locationName' => 'totalStorageGB', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'azId' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'vpcId' => [ 'type' => 'string', 'locationName' => 'vpcId', ],
                'subnetId' => [ 'type' => 'string', 'locationName' => 'subnetId', ],
                'internalDomainName' => [ 'type' => 'string', 'locationName' => 'internalDomainName', ],
                'publicDomainName' => [ 'type' => 'string', 'locationName' => 'publicDomainName', ],
                'monitorInternalDomainName' => [ 'type' => 'string', 'locationName' => 'monitorInternalDomainName', ],
                'monitorPublicDomainName' => [ 'type' => 'string', 'locationName' => 'monitorPublicDomainName', ],
                'monitorPort' => [ 'type' => 'string', 'locationName' => 'monitorPort', ],
                'tcpPort' => [ 'type' => 'string', 'locationName' => 'tcpPort', ],
                'httpPort' => [ 'type' => 'string', 'locationName' => 'httpPort', ],
                'instanceStatus' => [ 'type' => 'string', 'locationName' => 'instanceStatus', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'supersetInternalDomainName' => [ 'type' => 'string', 'locationName' => 'supersetInternalDomainName', ],
                'supersetPublicDomainName' => [ 'type' => 'string', 'locationName' => 'supersetPublicDomainName', ],
                'supersetPort' => [ 'type' => 'string', 'locationName' => 'supersetPort', ],
                'openHotCold' => [ 'type' => 'integer', 'locationName' => 'openHotCold', ],
                'aeStatus' => [ 'type' => 'integer', 'locationName' => 'aeStatus', ],
                'architecture' => [ 'type' => 'string', 'locationName' => 'architecture', ],
                'osType' => [ 'type' => 'string', 'locationName' => 'osType', ],
                'charge' =>  [ 'shape' => 'Charge', ],
                'tags' => [ 'type' => 'list', 'member' => [ 'shape' => 'Tag', ], ],
            ],
        ],
        'ClickhouseInstanceSpec' => [
            'type' => 'structure',
            'members' => [
                'instanceName' => [ 'type' => 'string', 'locationName' => 'instanceName', ],
                'engineVersion' => [ 'type' => 'string', 'locationName' => 'engineVersion', ],
                'chNodeClass' => [ 'type' => 'string', 'locationName' => 'chNodeClass', ],
                'replicaNum' => [ 'type' => 'integer', 'locationName' => 'replicaNum', ],
                'shardNum' => [ 'type' => 'integer', 'locationName' => 'shardNum', ],
                'chNodeStorageGB' => [ 'type' => 'integer', 'locationName' => 'chNodeStorageGB', ],
                'chNodeStorageType' => [ 'type' => 'string', 'locationName' => 'chNodeStorageType', ],
                'zkNodeClass' => [ 'type' => 'string', 'locationName' => 'zkNodeClass', ],
                'monitorNodeClass' => [ 'type' => 'string', 'locationName' => 'monitorNodeClass', ],
                'zkNodeNum' => [ 'type' => 'integer', 'locationName' => 'zkNodeNum', ],
                'azId' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'vpcId' => [ 'type' => 'string', 'locationName' => 'vpcId', ],
                'subnetId' => [ 'type' => 'string', 'locationName' => 'subnetId', ],
                'zkNodeStorageGB' => [ 'type' => 'integer', 'locationName' => 'zkNodeStorageGB', ],
                'architecture' => [ 'type' => 'string', 'locationName' => 'architecture', ],
                'osType' => [ 'type' => 'string', 'locationName' => 'osType', ],
                'openHotCold' => [ 'type' => 'integer', 'locationName' => 'openHotCold', ],
                'chargeSpec' =>  [ 'shape' => 'ChargeSpec', ],
                'tagSpec' => [ 'type' => 'list', 'member' => [ 'shape' => 'Tag', ], ],
                'resourceGroupId' => [ 'type' => 'string', 'locationName' => 'resourceGroupId', ],
                'resourceGroupName' => [ 'type' => 'string', 'locationName' => 'resourceGroupName', ],
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
        'Node' => [
            'type' => 'structure',
            'members' => [
                'nodeId' => [ 'type' => 'string', 'locationName' => 'nodeId', ],
                'nodeSeqNo' => [ 'type' => 'string', 'locationName' => 'nodeSeqNo', ],
                'nodeStatus' => [ 'type' => 'string', 'locationName' => 'nodeStatus', ],
                'cpuUtil' => [ 'type' => 'float', 'locationName' => 'cpuUtil', ],
                'memeryUtil' => [ 'type' => 'float', 'locationName' => 'memeryUtil', ],
                'diskUsage' => [ 'type' => 'float', 'locationName' => 'diskUsage', ],
            ],
        ],
        'ArchitectureVersion' => [
            'type' => 'structure',
            'members' => [
                'engineVersion' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'arch' => [ 'type' => 'string', 'locationName' => 'arch', ],
                'version' => [ 'type' => 'string', 'locationName' => 'version', ],
            ],
        ],
        'Shards' => [
            'type' => 'structure',
            'members' => [
                'index' => [ 'type' => 'integer', 'locationName' => 'index', ],
                'replicaDomainNames' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'replicaDmsDomainName' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'Domains' => [
            'type' => 'structure',
            'members' => [
                'shards' => [ 'type' => 'list', 'member' => [ 'shape' => 'Shards', ], ],
                'shardNum' => [ 'type' => 'integer', 'locationName' => 'shardNum', ],
                'replicaNum' => [ 'type' => 'integer', 'locationName' => 'replicaNum', ],
                'publicDomainName' => [ 'type' => 'string', 'locationName' => 'publicDomainName', ],
                'internalDomainName' => [ 'type' => 'string', 'locationName' => 'internalDomainName', ],
                'monitorDomainName' => [ 'type' => 'string', 'locationName' => 'monitorDomainName', ],
            ],
        ],
        'FilterGroup' => [
            'type' => 'structure',
            'members' => [
                'filters' => [ 'type' => 'list', 'member' => [ 'shape' => 'Filter', ], ],
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
        'K8sServiceAddr' => [
            'type' => 'structure',
            'members' => [
                'addrType' => [ 'type' => 'string', 'locationName' => 'addrType', ],
                'accessType' => [ 'type' => 'string', 'locationName' => 'accessType', ],
                'addr' => [ 'type' => 'string', 'locationName' => 'addr', ],
                'port' => [ 'type' => 'string', 'locationName' => 'port', ],
            ],
        ],
        'MonitorSpec' => [
            'type' => 'structure',
            'members' => [
                'flavors' => [ 'type' => 'list', 'member' => [ 'shape' => 'Flavor', ], ],
            ],
        ],
        'Parameters' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'value' => [ 'type' => 'string', 'locationName' => 'value', ],
            ],
        ],
        'InstanceParameter' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'currentValue' => [ 'type' => 'string', 'locationName' => 'currentValue', ],
                'defaultValue' => [ 'type' => 'string', 'locationName' => 'defaultValue', ],
                'needRestart' => [ 'type' => 'boolean', 'locationName' => 'needRestart', ],
            ],
        ],
        'ResourceInfo' => [
            'type' => 'structure',
            'members' => [
                'resourceId' => [ 'type' => 'string', 'locationName' => 'resourceId', ],
                'resourceName' => [ 'type' => 'string', 'locationName' => 'resourceName', ],
            ],
        ],
        'SlowLog' => [
            'type' => 'structure',
            'members' => [
                'ip' => [ 'type' => 'string', 'locationName' => 'ip', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'segmentName' => [ 'type' => 'string', 'locationName' => 'segmentName', ],
                'startTime' => [ 'type' => 'string', 'locationName' => 'startTime', ],
                'queryTime' => [ 'type' => 'string', 'locationName' => 'queryTime', ],
                'sql' => [ 'type' => 'string', 'locationName' => 'sql', ],
                'lineNumber' => [ 'type' => 'integer', 'locationName' => 'lineNumber', ],
                'dataSize' => [ 'type' => 'string', 'locationName' => 'dataSize', ],
                'executingResult' => [ 'type' => 'string', 'locationName' => 'executingResult', ],
                'memoryUsage' => [ 'type' => 'string', 'locationName' => 'memoryUsage', ],
            ],
        ],
        'Disk' => [
            'type' => 'structure',
            'members' => [
                'storageType' => [ 'type' => 'string', 'locationName' => 'storageType', ],
                'storageTypeStatus' => [ 'type' => 'integer', 'locationName' => 'storageTypeStatus', ],
                'orderableinstanceClasses' => [ 'type' => 'list', 'member' => [ 'shape' => 'Flavor', ], ],
            ],
        ],
        'Az' => [
            'type' => 'structure',
            'members' => [
                'azId' => [ 'type' => 'string', 'locationName' => 'azId', ],
                'azStatus' => [ 'type' => 'integer', 'locationName' => 'azStatus', ],
                'orderableStorageTypes' => [ 'type' => 'list', 'member' => [ 'shape' => 'Disk', ], ],
            ],
        ],
        'WhiteList' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'ips' => [ 'type' => 'string', 'locationName' => 'ips', ],
            ],
        ],
        'ZkSpec' => [
            'type' => 'structure',
            'members' => [
                'flavors' => [ 'type' => 'list', 'member' => [ 'shape' => 'Flavor', ], ],
                'minNum' => [ 'type' => 'integer', 'locationName' => 'minNum', ],
                'maxNum' => [ 'type' => 'integer', 'locationName' => 'maxNum', ],
            ],
        ],
        'DeleteAccountResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'ResetPasswordRequestShape' => [
            'type' => 'structure',
            'members' => [
                'accountPassword' => [ 'type' => 'string', 'locationName' => 'accountPassword', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'accountName' => [ 'type' => 'string', 'locationName' => 'accountName', ],
            ],
        ],
        'ModifyPrivilegeRequestShape' => [
            'type' => 'structure',
            'members' => [
                'privileges' => [ 'type' => 'string', 'locationName' => 'privileges', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'accountName' => [ 'type' => 'string', 'locationName' => 'accountName', ],
            ],
        ],
        'CreateAccountResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'ModifyPrivilegeResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeAccountsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'filters' => [ 'type' => 'list', 'member' => [ 'shape' => 'Filter', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'DeleteAccountRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'accountName' => [ 'type' => 'string', 'locationName' => 'accountName', ],
            ],
        ],
        'CreateAccountRequestShape' => [
            'type' => 'structure',
            'members' => [
                'accountName' => [ 'type' => 'string', 'locationName' => 'accountName', ],
                'accountPassword' => [ 'type' => 'string', 'locationName' => 'accountPassword', ],
                'privilege' => [ 'type' => 'string', 'locationName' => 'privilege', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'ResetPasswordResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ModifyPrivilegeResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'CreateAccountResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeAccountsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeAccountsResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ResetPasswordResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DescribeAccountsResultShape' => [
            'type' => 'structure',
            'members' => [
                'accounts' => [ 'type' => 'list', 'member' => [ 'shape' => 'Account', ], ],
                'totalCount' => [ 'type' => 'double', 'locationName' => 'totalCount', ],
            ],
        ],
        'DeleteAccountResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'OrderableInstanceTypeResultShape' => [
            'type' => 'structure',
            'members' => [
                'engineStatus' => [ 'type' => 'integer', 'locationName' => 'engineStatus', ],
                'orderableAZs' => [ 'type' => 'list', 'member' => [ 'shape' => 'Az', ], ],
            ],
        ],
        'OrderableInstanceTypeResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'OrderableInstanceTypeResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'AzsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'AzsResultShape' => [
            'type' => 'structure',
            'members' => [
                'azs' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'OrderableInstanceTypeRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'AzsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'AzsResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'SelectDetailListRequestShape' => [
            'type' => 'structure',
            'members' => [
                'resourceList' => [ 'type' => 'string', 'locationName' => 'resourceList', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'UpgradeEngineVersionResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DisableInternetAccessRequestShape' => [
            'type' => 'structure',
            'members' => [
                'serviceType' => [ 'type' => 'string', 'locationName' => 'serviceType', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'ModifyInstanceNameResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DescribeDefaultConfigRequestShape' => [
            'type' => 'structure',
            'members' => [
                'chNodeClass' => [ 'type' => 'string', 'locationName' => 'chNodeClass', ],
                'shardNum' => [ 'type' => 'integer', 'locationName' => 'shardNum', ],
                'replicaNum' => [ 'type' => 'integer', 'locationName' => 'replicaNum', ],
                'archType' => [ 'type' => 'string', 'locationName' => 'archType', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'ModifyInstanceSpecResultShape' => [
            'type' => 'structure',
            'members' => [
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'orderId' => [ 'type' => 'string', 'locationName' => 'orderId', ],
                'buyId' => [ 'type' => 'string', 'locationName' => 'buyId', ],
            ],
        ],
        'DescribeInstancesRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'filters' => [ 'type' => 'list', 'member' => [ 'shape' => 'Filter', ], ],
                'tagFilters' => [ 'type' => 'list', 'member' => [ 'shape' => 'TagFilter', ], ],
                'resourceGroupIds' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'ModifyInstanceSpecRequestShape' => [
            'type' => 'structure',
            'members' => [
                'chNodeClass' => [ 'type' => 'string', 'locationName' => 'chNodeClass', ],
                'zkNodeClass' => [ 'type' => 'string', 'locationName' => 'zkNodeClass', ],
                'chNodeStorageGB' => [ 'type' => 'integer', 'locationName' => 'chNodeStorageGB', ],
                'monitorNodeClass' => [ 'type' => 'string', 'locationName' => 'monitorNodeClass', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'ModifyInstanceSpecResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'ModifyInstanceSpecResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeInstanceAttributesResultShape' => [
            'type' => 'structure',
            'members' => [
                'clickhouseInstanceAttributes' =>  [ 'shape' => 'ClickhouseInstanceAttributes', ],
            ],
        ],
        'DescribeAvailableDBInfoInternelResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeAvailableDBInfoInternelResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'EnableInternetAccessResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'SelectDetailListResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'SelectDetailListResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ModifyReplicaNumRequestShape' => [
            'type' => 'structure',
            'members' => [
                'newReplicaNum' => [ 'type' => 'string', 'locationName' => 'newReplicaNum', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'ModifyReplicaNumResultShape' => [
            'type' => 'structure',
            'members' => [
                'orderId' => [ 'type' => 'string', 'locationName' => 'orderId', ],
            ],
        ],
        'DescribeDomainNamesResultShape' => [
            'type' => 'structure',
            'members' => [
                'instance' =>  [ 'shape' => 'Domains', ],
            ],
        ],
        'DeleteInstanceResponseShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DescribePodMapResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribePodMapResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'TagFilter' => [
            'type' => 'structure',
            'members' => [
                'key' => [ 'type' => 'string', 'locationName' => 'key', ],
                'values' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'DescribeProgressRequestShape' => [
            'type' => 'structure',
            'members' => [
                'backendProgress' => [ 'type' => 'integer', 'locationName' => 'backendProgress', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'SelectDetailListResultShape' => [
            'type' => 'structure',
            'members' => [
                'data' => [ 'type' => 'list', 'member' => [ 'shape' => 'ResourceInfo', ], ],
            ],
        ],
        'CreateInstanceResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'CreateInstanceResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeInstanceAttributesResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeInstanceAttributesResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeNodesResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeNodesResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ModifyInstanceNameResponseShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DescribeProgressResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeProgressResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeInstancesResultShape' => [
            'type' => 'structure',
            'members' => [
                'instances' => [ 'type' => 'list', 'member' => [ 'shape' => 'Instance', ], ],
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
            ],
        ],
        'DescribeNodeClassesResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeNodeClassesResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribePodMapResultShape' => [
            'type' => 'structure',
            'members' => [
                'podIds' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'ModifyInstanceNameRequestShape' => [
            'type' => 'structure',
            'members' => [
                'instanceName' => [ 'type' => 'string', 'locationName' => 'instanceName', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'DescribeNodeClassesRequestShape' => [
            'type' => 'structure',
            'members' => [
                'nodeType' => [ 'type' => 'string', 'locationName' => 'nodeType', ],
                'nodeStorageType' => [ 'type' => 'string', 'locationName' => 'nodeStorageType', ],
                'archType' => [ 'type' => 'string', 'locationName' => 'archType', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DescribeInstancesResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeInstancesResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ModifyReplicaNumResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'ModifyReplicaNumResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeNodesRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'sorts' => [ 'type' => 'list', 'member' => [ 'shape' => 'Sort', ], ],
                'filters' => [ 'type' => 'list', 'member' => [ 'shape' => 'Filter', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'DescribeDomainNamesRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'DisableInternetAccessResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'InternalDescribeInstanceResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'InternalDescribeInstanceResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'Sort' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'direction' => [ 'type' => 'string', 'locationName' => 'direction', ],
            ],
        ],
        'CreateInstanceRequestShape' => [
            'type' => 'structure',
            'members' => [
                'instanceSpec' =>  [ 'shape' => 'ClickhouseInstanceSpec', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DisableInternetAccessResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DeleteInstanceResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DescribeDefaultConfigResultShape' => [
            'type' => 'structure',
            'members' => [
                'zkNodeClass' => [ 'type' => 'string', 'locationName' => 'zkNodeClass', ],
                'zkNodeNum' => [ 'type' => 'integer', 'locationName' => 'zkNodeNum', ],
                'zkNodeCPU' => [ 'type' => 'integer', 'locationName' => 'zkNodeCPU', ],
                'zkNodeMemoryGB' => [ 'type' => 'integer', 'locationName' => 'zkNodeMemoryGB', ],
                'zkNodeStorageGB' => [ 'type' => 'integer', 'locationName' => 'zkNodeStorageGB', ],
                'monitorNodeClass' => [ 'type' => 'string', 'locationName' => 'monitorNodeClass', ],
                'monitorNodeCPU' => [ 'type' => 'integer', 'locationName' => 'monitorNodeCPU', ],
                'monitorNodeMemoryGB' => [ 'type' => 'integer', 'locationName' => 'monitorNodeMemoryGB', ],
                'monitorNodeStorageGB' => [ 'type' => 'integer', 'locationName' => 'monitorNodeStorageGB', ],
            ],
        ],
        'DescribeNodesResultShape' => [
            'type' => 'structure',
            'members' => [
                'nodes' =>  [ 'shape' => 'Node', ],
                'totalCount' => [ 'type' => 'double', 'locationName' => 'totalCount', ],
            ],
        ],
        'DescribeNodeClassesResultShape' => [
            'type' => 'structure',
            'members' => [
                'chSpec' =>  [ 'shape' => 'ChSpec', ],
                'zkSpec' =>  [ 'shape' => 'ZkSpec', ],
                'monitorSpec' =>  [ 'shape' => 'MonitorSpec', ],
            ],
        ],
        'UpgradeEngineVersionRequestShape' => [
            'type' => 'structure',
            'members' => [
                'targetVersion' => [ 'type' => 'string', 'locationName' => 'targetVersion', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'InternalDescribeInstanceResultShape' => [
            'type' => 'structure',
            'members' => [
                'cloudStorageLock' => [ 'type' => 'boolean', 'locationName' => 'cloudStorageLock', ],
                'parametersGroupLock' => [ 'type' => 'boolean', 'locationName' => 'parametersGroupLock', ],
            ],
        ],
        'DescribeProgressResultShape' => [
            'type' => 'structure',
            'members' => [
                'instanceReadyDomain' => [ 'type' => 'integer', 'locationName' => 'instanceReadyDomain', ],
                'instanceTotalDomain' => [ 'type' => 'integer', 'locationName' => 'instanceTotalDomain', ],
                'instanceReadyNode' => [ 'type' => 'integer', 'locationName' => 'instanceReadyNode', ],
                'instanceTotalNode' => [ 'type' => 'integer', 'locationName' => 'instanceTotalNode', ],
            ],
        ],
        'DescribeDomainNamesResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeDomainNamesResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeAvailableDBInfoInternelRequestShape' => [
            'type' => 'structure',
            'members' => [
                'azs' => [ 'type' => 'string', 'locationName' => 'azs', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DescribeDefaultConfigResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeDefaultConfigResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'EnableInternetAccessResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'EnableInternetAccessRequestShape' => [
            'type' => 'structure',
            'members' => [
                'serviceType' => [ 'type' => 'string', 'locationName' => 'serviceType', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'InternalDescribeInstanceRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'DescribeAvailableDBInfoInternelResultShape' => [
            'type' => 'structure',
            'members' => [
                'engineVersion' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'architectureType' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'architectureVersion' => [ 'type' => 'list', 'member' => [ 'shape' => 'ArchitectureVersion', ], ],
            ],
        ],
        'DescribeInstanceAttributesRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'DescribePodMapRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'CreateInstanceResultShape' => [
            'type' => 'structure',
            'members' => [
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'orderId' => [ 'type' => 'string', 'locationName' => 'orderId', ],
                'buyId' => [ 'type' => 'string', 'locationName' => 'buyId', ],
            ],
        ],
        'DeleteInstanceRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'UpgradeEngineVersionResponseShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DescribeAuditResultResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeAuditResultResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeAuditResultRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'startTime' => [ 'type' => 'string', 'locationName' => 'startTime', ],
                'endTime' => [ 'type' => 'string', 'locationName' => 'endTime', ],
                'segmentName' => [ 'type' => 'string', 'locationName' => 'segmentName', ],
                'filters' => [ 'type' => 'list', 'member' => [ 'shape' => 'Filter', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'DescribeAuditResultResultShape' => [
            'type' => 'structure',
            'members' => [
                'auditResult' =>  [ 'shape' => 'AuditLog', ],
                'totalCount' => [ 'type' => 'double', 'locationName' => 'totalCount', ],
            ],
        ],
        'DescribeSlowlogResultRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'startTime' => [ 'type' => 'string', 'locationName' => 'startTime', ],
                'endTime' => [ 'type' => 'string', 'locationName' => 'endTime', ],
                'segmentName' => [ 'type' => 'string', 'locationName' => 'segmentName', ],
                'queryTime' => [ 'type' => 'string', 'locationName' => 'queryTime', ],
                'filters' => [ 'type' => 'list', 'member' => [ 'shape' => 'Filter', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'DescribeSlowlogResultResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeSlowlogResultResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeSlowlogResultResultShape' => [
            'type' => 'structure',
            'members' => [
                'slowlogResult' =>  [ 'shape' => 'SlowLog', ],
                'totalCount' => [ 'type' => 'double', 'locationName' => 'totalCount', ],
            ],
        ],
        'ModifyParametersResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DescribeParametersResultShape' => [
            'type' => 'structure',
            'members' => [
                'parameters' => [ 'type' => 'list', 'member' => [ 'shape' => 'InstanceParameter', ], ],
            ],
        ],
        'ModifyParametersRequestShape' => [
            'type' => 'structure',
            'members' => [
                'parameters' => [ 'type' => 'list', 'member' => [ 'shape' => 'Parameters', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'ModifyParametersResponseShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DescribeParametersRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'DescribeParametersResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeParametersResultShape', ],
            ],
        ],
        'AddWhiteListGroupResponseShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'ModifyWhiteListResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DeleteWhiteListGroupRequestShape' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'DeleteWhiteListGroupResponseShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'ModifyWhiteListRequestShape' => [
            'type' => 'structure',
            'members' => [
                'ips' => [ 'type' => 'string', 'locationName' => 'ips', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'AddWhiteListGroupRequestShape' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'DescribeWhiteListResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeWhiteListResultShape', ],
            ],
        ],
        'DescribeWhiteListResultShape' => [
            'type' => 'structure',
            'members' => [
                'whiteLists' => [ 'type' => 'list', 'member' => [ 'shape' => 'WhiteList', ], ],
            ],
        ],
        'AddWhiteListGroupResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'ModifyWhiteListResponseShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DeleteWhiteListGroupResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DescribeWhiteListRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
    ],
];
