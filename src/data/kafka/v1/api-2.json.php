<?php
// This file was auto-generated
return [
//    'version' => '',
    'metadata' =>
    [
//        'apiVersion' => '',
//        'endpointPrefix' => 'kafka',
        'protocol' => 'json',
//        'serviceFullName' => 'kafka',
//        'serviceId' => 'kafka',
    ],
    'operations' => [
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
        'AzConf' => [
            'type' => 'structure',
            'members' => [
                'azId' => [ 'type' => 'string', 'locationName' => 'azId', ],
                'role' => [ 'type' => 'string', 'locationName' => 'role', ],
                'nodeConf' =>  [ 'shape' => 'NodeConf', ],
            ],
        ],
        'NodeConf' => [
            'type' => 'structure',
            'members' => [
                'storageType' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'constraints' =>  [ 'shape' => 'ConstraintsConf', ],
            ],
        ],
        'Broker' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
            ],
        ],
        'ConsumerGroup' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
            ],
        ],
        'Instance' => [
            'type' => 'structure',
            'members' => [
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'instanceName' => [ 'type' => 'string', 'locationName' => 'instanceName', ],
                'instanceVersion' => [ 'type' => 'string', 'locationName' => 'instanceVersion', ],
                'instanceStatus' => [ 'type' => 'string', 'locationName' => 'instanceStatus', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'vpcId' => [ 'type' => 'string', 'locationName' => 'vpcId', ],
                'subnetId' => [ 'type' => 'string', 'locationName' => 'subnetId', ],
                'azId' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'instanceClass' => [ 'type' => 'list', 'member' => [ 'shape' => 'InstanceClass', ], ],
                'charge' =>  [ 'shape' => 'Charge', ],
                'tags' => [ 'type' => 'list', 'member' => [ 'shape' => 'Tag', ], ],
                'extension' =>  [ 'shape' => 'RespExtension', ],
            ],
        ],
        'InstanceClass' => [
            'type' => 'structure',
            'members' => [
                'role' => [ 'type' => 'string', 'locationName' => 'role', ],
                'nodeClassCode' => [ 'type' => 'string', 'locationName' => 'nodeClassCode', ],
                'nodeCpu' => [ 'type' => 'integer', 'locationName' => 'nodeCpu', ],
                'nodeMemoryGB' => [ 'type' => 'integer', 'locationName' => 'nodeMemoryGB', ],
                'nodeCount' => [ 'type' => 'integer', 'locationName' => 'nodeCount', ],
                'nodeDiskType' => [ 'type' => 'string', 'locationName' => 'nodeDiskType', ],
                'nodeDiskGB' => [ 'type' => 'integer', 'locationName' => 'nodeDiskGB', ],
            ],
        ],
        'InternalEndpoint' => [
            'type' => 'structure',
            'members' => [
                'brokerEndpoint' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'zkEndpoint' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
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
        'RespExtension' => [
            'type' => 'structure',
            'members' => [
                'internalEndpoint' =>  [ 'shape' => 'InternalEndpoint', ],
            ],
        ],
        'Tag' => [
            'type' => 'structure',
            'members' => [
                'key' => [ 'type' => 'string', 'locationName' => 'key', ],
                'value' => [ 'type' => 'string', 'locationName' => 'value', ],
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
                'role' => [ 'type' => 'string', 'locationName' => 'role', ],
                'nodeClassCode' => [ 'type' => 'string', 'locationName' => 'nodeClassCode', ],
                'nodeCount' => [ 'type' => 'integer', 'locationName' => 'nodeCount', ],
                'nodeDiskType' => [ 'type' => 'string', 'locationName' => 'nodeDiskType', ],
                'nodeDiskGB' => [ 'type' => 'integer', 'locationName' => 'nodeDiskGB', ],
            ],
        ],
        'InstanceName' => [
            'type' => 'structure',
            'members' => [
                'resourceId' => [ 'type' => 'string', 'locationName' => 'resourceId', ],
                'resourceName' => [ 'type' => 'string', 'locationName' => 'resourceName', ],
            ],
        ],
        'ReqExtension' => [
            'type' => 'structure',
            'members' => [
                'msgRetain' => [ 'type' => 'integer', 'locationName' => 'msgRetain', ],
            ],
        ],
        'InstanceSpec' => [
            'type' => 'structure',
            'members' => [
                'vpcId' => [ 'type' => 'string', 'locationName' => 'vpcId', ],
                'subnetId' => [ 'type' => 'string', 'locationName' => 'subnetId', ],
                'instanceVersion' => [ 'type' => 'string', 'locationName' => 'instanceVersion', ],
                'instanceName' => [ 'type' => 'string', 'locationName' => 'instanceName', ],
                'azId' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'instanceClassSpec' => [ 'type' => 'list', 'member' => [ 'shape' => 'InstanceClassSpec', ], ],
                'extension' =>  [ 'shape' => 'ReqExtension', ],
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
        'Topic' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
            ],
        ],
        'CreateInstanceResultShape' => [
            'type' => 'structure',
            'members' => [
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
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
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'ModifyInstanceSpecResultShape' => [
            'type' => 'structure',
            'members' => [
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
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
        'DescribeInstanceResultShape' => [
            'type' => 'structure',
            'members' => [
                'instance' =>  [ 'shape' => 'Instance', ],
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
        'ModifyInstanceSpecRequestShape' => [
            'type' => 'structure',
            'members' => [
                'instanceClassSpec' => [ 'type' => 'list', 'member' => [ 'shape' => 'InstanceClassSpec', ], ],
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
        'TagFilter' => [
            'type' => 'structure',
            'members' => [
                'key' => [ 'type' => 'string', 'locationName' => 'key', ],
                'values' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'DescribeInstancesResultShape' => [
            'type' => 'structure',
            'members' => [
                'instances' => [ 'type' => 'list', 'member' => [ 'shape' => 'Instance', ], ],
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
            ],
        ],
        'DeleteInstanceResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'CreateInstanceResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'CreateInstanceResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeInstanceResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeInstanceResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DeleteInstanceResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeInstanceRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
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
        'Filter' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'operator' => [ 'type' => 'string', 'locationName' => 'operator', ],
                'values' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
    ],
];
