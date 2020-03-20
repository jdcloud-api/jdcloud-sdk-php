<?php
// This file was auto-generated
return [
//    'version' => '',
    'metadata' =>
    [
//        'apiVersion' => '',
//        'endpointPrefix' => 'es',
        'protocol' => 'json',
//        'serviceFullName' => 'es',
//        'serviceId' => 'es',
    ],
    'operations' => [
        'DisableDicts' => [
            'name' => 'DisableDicts',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}/dicts',
            ],
            'input' => [ 'shape' => 'DisableDictsRequestShape', ],
            'output' => [ 'shape' => 'DisableDictsResponseShape', ],
        ],
        'DescribeInstances' => [
            'name' => 'DescribeInstances',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/instances',
            ],
            'input' => [ 'shape' => 'DescribeInstancesRequestShape', ],
            'output' => [ 'shape' => 'DescribeInstancesResponseShape', ],
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
        'DescribeInstance' => [
            'name' => 'DescribeInstance',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}',
            ],
            'input' => [ 'shape' => 'DescribeInstanceRequestShape', ],
            'output' => [ 'shape' => 'DescribeInstanceResponseShape', ],
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
        'ModifyInstanceSpec' => [
            'name' => 'ModifyInstanceSpec',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}:modifyInstanceSpec',
            ],
            'input' => [ 'shape' => 'ModifyInstanceSpecRequestShape', ],
            'output' => [ 'shape' => 'ModifyInstanceSpecResponseShape', ],
        ],
    ],
    'shapes' => [
        'Assets' => [
            'type' => 'structure',
            'members' => [
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'instanceName' => [ 'type' => 'string', 'locationName' => 'instanceName', ],
                'instanceVersion' => [ 'type' => 'string', 'locationName' => 'instanceVersion', ],
                'endpoint' => [ 'type' => 'string', 'locationName' => 'endpoint', ],
                'resources' => [ 'type' => 'list', 'member' => [ 'shape' => 'Resource', ], ],
                'isAuth' => [ 'type' => 'boolean', 'locationName' => 'isAuth', ],
            ],
        ],
        'Resource' => [
            'type' => 'structure',
            'members' => [
                'resName' => [ 'type' => 'string', 'locationName' => 'resName', ],
                'hostIp' => [ 'type' => 'string', 'locationName' => 'hostIp', ],
                'ipPort' => [ 'type' => 'string', 'locationName' => 'ipPort', ],
            ],
        ],
        'AuthConfig' => [
            'type' => 'structure',
            'members' => [
                'authEnabled' => [ 'type' => 'boolean', 'locationName' => 'authEnabled', ],
                'username' => [ 'type' => 'string', 'locationName' => 'username', ],
                'password' => [ 'type' => 'string', 'locationName' => 'password', ],
            ],
        ],
        'AutoSnapshot' => [
            'type' => 'structure',
            'members' => [
                'open' => [ 'type' => 'boolean', 'locationName' => 'open', ],
                'hour' => [ 'type' => 'integer', 'locationName' => 'hour', ],
            ],
        ],
        'NodeConf' => [
            'type' => 'structure',
            'members' => [
                'storageType' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'constraints' =>  [ 'shape' => 'ConstraintsConf', ],
            ],
        ],
        'AzConf' => [
            'type' => 'structure',
            'members' => [
                'azId' => [ 'type' => 'string', 'locationName' => 'azId', ],
                'dataNode' =>  [ 'shape' => 'NodeConf', ],
                'masterNode' =>  [ 'shape' => 'NodeConf', ],
                'coordinatingNode' =>  [ 'shape' => 'NodeConf', ],
            ],
        ],
        'ConstraintsConf' => [
            'type' => 'structure',
            'members' => [
                'storageType' => [ 'type' => 'string', 'locationName' => 'storageType', ],
                'onSale' => [ 'type' => 'boolean', 'locationName' => 'onSale', ],
                'classCode' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'minCount' => [ 'type' => 'integer', 'locationName' => 'minCount', ],
                'maxCount' => [ 'type' => 'integer', 'locationName' => 'maxCount', ],
                'defaultCount' => [ 'type' => 'integer', 'locationName' => 'defaultCount', ],
                'stepCount' => [ 'type' => 'integer', 'locationName' => 'stepCount', ],
                'storageScale' => [ 'type' => 'boolean', 'locationName' => 'storageScale', ],
                'minStorageGB' => [ 'type' => 'integer', 'locationName' => 'minStorageGB', ],
                'maxStorageGB' => [ 'type' => 'integer', 'locationName' => 'maxStorageGB', ],
                'defaultStorageGB' => [ 'type' => 'integer', 'locationName' => 'defaultStorageGB', ],
                'stepStorageGB' => [ 'type' => 'integer', 'locationName' => 'stepStorageGB', ],
            ],
        ],
        'Features' => [
            'type' => 'structure',
            'members' => [
                'auth' => [ 'type' => 'boolean', 'locationName' => 'auth', ],
            ],
        ],
        'IndexTemplateCronConf' => [
            'type' => 'structure',
            'members' => [
                'templateName' => [ 'type' => 'string', 'locationName' => 'templateName', ],
                'beginTime' => [ 'type' => 'string', 'locationName' => 'beginTime', ],
                'cycle' => [ 'type' => 'string', 'locationName' => 'cycle', ],
                'indexPrefix' => [ 'type' => 'string', 'locationName' => 'indexPrefix', ],
                'indexSuffixFormat' => [ 'type' => 'string', 'locationName' => 'indexSuffixFormat', ],
                'aheadOfDay' => [ 'type' => 'integer', 'locationName' => 'aheadOfDay', ],
                'isAutoDelete' => [ 'type' => 'boolean', 'locationName' => 'isAutoDelete', ],
                'reserveOfDay' => [ 'type' => 'integer', 'locationName' => 'reserveOfDay', ],
            ],
        ],
        'IndexTemplateCron' => [
            'type' => 'structure',
            'members' => [
                'taskID' => [ 'type' => 'string', 'locationName' => 'taskID', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'settings' =>  [ 'shape' => 'IndexTemplateCronConf', ],
            ],
        ],
        'InstanceClass' => [
            'type' => 'structure',
            'members' => [
                'nodeClass' => [ 'type' => 'string', 'locationName' => 'nodeClass', ],
                'nodeCpu' => [ 'type' => 'integer', 'locationName' => 'nodeCpu', ],
                'nodeMemoryGB' => [ 'type' => 'integer', 'locationName' => 'nodeMemoryGB', ],
                'nodeDiskGB' => [ 'type' => 'integer', 'locationName' => 'nodeDiskGB', ],
                'nodeDiskType' => [ 'type' => 'string', 'locationName' => 'nodeDiskType', ],
                'nodeCount' => [ 'type' => 'integer', 'locationName' => 'nodeCount', ],
                'masterClass' => [ 'type' => 'string', 'locationName' => 'masterClass', ],
                'masterCpu' => [ 'type' => 'integer', 'locationName' => 'masterCpu', ],
                'masterMemoryGB' => [ 'type' => 'integer', 'locationName' => 'masterMemoryGB', ],
                'masterDiskGB' => [ 'type' => 'integer', 'locationName' => 'masterDiskGB', ],
                'masterDiskType' => [ 'type' => 'string', 'locationName' => 'masterDiskType', ],
                'masterCount' => [ 'type' => 'integer', 'locationName' => 'masterCount', ],
                'coordinatingClass' => [ 'type' => 'string', 'locationName' => 'coordinatingClass', ],
                'coordinatingCpu' => [ 'type' => 'integer', 'locationName' => 'coordinatingCpu', ],
                'coordinatingMemoryGB' => [ 'type' => 'integer', 'locationName' => 'coordinatingMemoryGB', ],
                'coordinatingDiskGB' => [ 'type' => 'integer', 'locationName' => 'coordinatingDiskGB', ],
                'coordinatingDiskType' => [ 'type' => 'string', 'locationName' => 'coordinatingDiskType', ],
                'coordinatingCount' => [ 'type' => 'integer', 'locationName' => 'coordinatingCount', ],
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
        'InternalEndpoint' => [
            'type' => 'structure',
            'members' => [
                'esHttpEndpoint' => [ 'type' => 'string', 'locationName' => 'esHttpEndpoint', ],
                'esTcpEndpoint' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'kibanaEndpoint' => [ 'type' => 'string', 'locationName' => 'kibanaEndpoint', ],
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
                'instanceName' => [ 'type' => 'string', 'locationName' => 'instanceName', ],
                'instanceVersion' => [ 'type' => 'string', 'locationName' => 'instanceVersion', ],
                'instanceStatus' => [ 'type' => 'string', 'locationName' => 'instanceStatus', ],
                'instanceClass' =>  [ 'shape' => 'InstanceClass', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'azId' => [ 'type' => 'string', 'locationName' => 'azId', ],
                'vpcId' => [ 'type' => 'string', 'locationName' => 'vpcId', ],
                'subnetId' => [ 'type' => 'string', 'locationName' => 'subnetId', ],
                'charge' =>  [ 'shape' => 'Charge', ],
                'internalEndpoint' =>  [ 'shape' => 'InternalEndpoint', ],
                'endpoint' => [ 'type' => 'string', 'locationName' => 'endpoint', ],
                'kibanaUrl' => [ 'type' => 'string', 'locationName' => 'kibanaUrl', ],
                'headUrl' => [ 'type' => 'string', 'locationName' => 'headUrl', ],
                'ipVersion' => [ 'type' => 'string', 'locationName' => 'ipVersion', ],
                'tags' => [ 'type' => 'list', 'member' => [ 'shape' => 'Tag', ], ],
                'dedicatedMaster' => [ 'type' => 'boolean', 'locationName' => 'dedicatedMaster', ],
                'coordinating' => [ 'type' => 'boolean', 'locationName' => 'coordinating', ],
                'kibanaFiUrl' => [ 'type' => 'string', 'locationName' => 'kibanaFiUrl', ],
            ],
        ],
        'InstanceClassDetail' => [
            'type' => 'structure',
            'members' => [
                'instanceClassCode' => [ 'type' => 'string', 'locationName' => 'instanceClassCode', ],
                'cpu' => [ 'type' => 'integer', 'locationName' => 'cpu', ],
                'memoryGB' => [ 'type' => 'integer', 'locationName' => 'memoryGB', ],
                'diskGB' => [ 'type' => 'integer', 'locationName' => 'diskGB', ],
            ],
        ],
        'InstanceClassSpec' => [
            'type' => 'structure',
            'members' => [
                'nodeClass' => [ 'type' => 'string', 'locationName' => 'nodeClass', ],
                'nodeDiskGB' => [ 'type' => 'integer', 'locationName' => 'nodeDiskGB', ],
                'nodeDiskType' => [ 'type' => 'string', 'locationName' => 'nodeDiskType', ],
                'nodeCount' => [ 'type' => 'integer', 'locationName' => 'nodeCount', ],
                'masterClass' => [ 'type' => 'string', 'locationName' => 'masterClass', ],
                'masterDiskGB' => [ 'type' => 'integer', 'locationName' => 'masterDiskGB', ],
                'masterDiskType' => [ 'type' => 'string', 'locationName' => 'masterDiskType', ],
                'masterCount' => [ 'type' => 'integer', 'locationName' => 'masterCount', ],
                'coordinatingClass' => [ 'type' => 'string', 'locationName' => 'coordinatingClass', ],
                'coordinatingDiskGB' => [ 'type' => 'integer', 'locationName' => 'coordinatingDiskGB', ],
                'coordinatingDiskType' => [ 'type' => 'string', 'locationName' => 'coordinatingDiskType', ],
                'coordinatingCount' => [ 'type' => 'integer', 'locationName' => 'coordinatingCount', ],
            ],
        ],
        'InstanceName' => [
            'type' => 'structure',
            'members' => [
                'resourceId' => [ 'type' => 'string', 'locationName' => 'resourceId', ],
                'resourceName' => [ 'type' => 'string', 'locationName' => 'resourceName', ],
            ],
        ],
        'InstanceNode' => [
            'type' => 'structure',
            'members' => [
                'nodeName' => [ 'type' => 'string', 'locationName' => 'nodeName', ],
            ],
        ],
        'InstanceSpec' => [
            'type' => 'structure',
            'members' => [
                'vpcId' => [ 'type' => 'string', 'locationName' => 'vpcId', ],
                'subnetId' => [ 'type' => 'string', 'locationName' => 'subnetId', ],
                'instanceVersion' => [ 'type' => 'string', 'locationName' => 'instanceVersion', ],
                'instanceName' => [ 'type' => 'string', 'locationName' => 'instanceName', ],
                'azId' => [ 'type' => 'string', 'locationName' => 'azId', ],
                'instanceClass' =>  [ 'shape' => 'InstanceClassSpec', ],
                'ipVersion' => [ 'type' => 'string', 'locationName' => 'ipVersion', ],
                'dedicatedMaster' => [ 'type' => 'boolean', 'locationName' => 'dedicatedMaster', ],
                'coordinating' => [ 'type' => 'boolean', 'locationName' => 'coordinating', ],
                'autoSnapshot' =>  [ 'shape' => 'AutoSnapshot', ],
                'authConfig' =>  [ 'shape' => 'AuthConfig', ],
            ],
        ],
        'InstanceSpecConf' => [
            'type' => 'structure',
            'members' => [
                'version' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'instanceClassDetail' => [ 'type' => 'list', 'member' => [ 'shape' => 'InstanceClassDetail', ], ],
                'azConf' => [ 'type' => 'list', 'member' => [ 'shape' => 'AzConf', ], ],
            ],
        ],
        'Snapshot' => [
            'type' => 'structure',
            'members' => [
                'snapshotId' => [ 'type' => 'string', 'locationName' => 'snapshotId', ],
                'type' => [ 'type' => 'string', 'locationName' => 'type', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'indices' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
            ],
        ],
        'DisableDictsResultShape' => [
            'type' => 'structure',
            'members' => [
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'DisableDictsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'DisableDictsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DisableDictsResultShape', ],
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
        'DescribeInstanceRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'CreateInstanceResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'CreateInstanceResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ModifyInstanceSpecRequestShape' => [
            'type' => 'structure',
            'members' => [
                'nodeClass' => [ 'type' => 'string', 'locationName' => 'nodeClass', ],
                'nodeDiskGB' => [ 'type' => 'integer', 'locationName' => 'nodeDiskGB', ],
                'nodeCount' => [ 'type' => 'integer', 'locationName' => 'nodeCount', ],
                'masterClass' => [ 'type' => 'string', 'locationName' => 'masterClass', ],
                'coordinatingClass' => [ 'type' => 'string', 'locationName' => 'coordinatingClass', ],
                'coordinatingCount' => [ 'type' => 'integer', 'locationName' => 'coordinatingCount', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'DescribeInstanceResultShape' => [
            'type' => 'structure',
            'members' => [
                'instance' =>  [ 'shape' => 'Instance', ],
            ],
        ],
        'ChargeSpec' => [
            'type' => 'structure',
            'members' => [
                'chargeMode' => [ 'type' => 'string', 'locationName' => 'chargeMode', ],
                'chargeUnit' => [ 'type' => 'string', 'locationName' => 'chargeUnit', ],
                'chargeDuration' => [ 'type' => 'integer', 'locationName' => 'chargeDuration', ],
                'autoRenew' => [ 'type' => 'boolean', 'locationName' => 'autoRenew', ],
                'buyScenario' => [ 'type' => 'string', 'locationName' => 'buyScenario', ],
            ],
        ],
        'DeleteInstanceRequestShape' => [
            'type' => 'structure',
            'members' => [
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
        'CreateInstanceResultShape' => [
            'type' => 'structure',
            'members' => [
                'orderNum' => [ 'type' => 'string', 'locationName' => 'orderNum', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'TagFilter' => [
            'type' => 'structure',
            'members' => [
                'key' => [ 'type' => 'string', 'locationName' => 'key', ],
                'values' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'DeleteInstanceResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'ModifyInstanceSpecResultShape' => [
            'type' => 'structure',
            'members' => [
                'orderNum' => [ 'type' => 'string', 'locationName' => 'orderNum', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'DescribeInstancesRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'filters' => [ 'type' => 'list', 'member' => [ 'shape' => 'Filter', ], ],
                'tagFilters' => [ 'type' => 'list', 'member' => [ 'shape' => 'TagFilter', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DeleteInstanceResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'CreateInstanceRequestShape' => [
            'type' => 'structure',
            'members' => [
                'instance' =>  [ 'shape' => 'InstanceSpec', ],
                'charge' =>  [ 'shape' => 'ChargeSpec', ],
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
        'DescribeInstancesResultShape' => [
            'type' => 'structure',
            'members' => [
                'instances' => [ 'type' => 'list', 'member' => [ 'shape' => 'Instance', ], ],
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
            ],
        ],
        'DescribeInstanceResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeInstanceResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
    ],
];
