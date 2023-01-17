<?php
// This file was auto-generated
return [
//    'version' => '',
    'metadata' =>
    [
//        'apiVersion' => '',
//        'endpointPrefix' => 'dh',
        'protocol' => 'json',
//        'serviceFullName' => 'dh',
//        'serviceId' => 'dh',
    ],
    'operations' => [
        'DescribeDedicatedHosts' => [
            'name' => 'DescribeDedicatedHosts',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/dedicatedHosts',
            ],
            'input' => [ 'shape' => 'DescribeDedicatedHostsRequestShape', ],
            'output' => [ 'shape' => 'DescribeDedicatedHostsResponseShape', ],
        ],
        'AllocDedicatedHosts' => [
            'name' => 'AllocDedicatedHosts',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/dedicatedHosts',
            ],
            'input' => [ 'shape' => 'AllocDedicatedHostsRequestShape', ],
            'output' => [ 'shape' => 'AllocDedicatedHostsResponseShape', ],
        ],
        'ReleaseDedicatedHost' => [
            'name' => 'ReleaseDedicatedHost',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/regions/{regionId}/dedicatedHost/{dedicatedHostId}',
            ],
            'input' => [ 'shape' => 'ReleaseDedicatedHostRequestShape', ],
            'output' => [ 'shape' => 'ReleaseDedicatedHostResponseShape', ],
        ],
        'ModifyDedicatedHostAttribute' => [
            'name' => 'ModifyDedicatedHostAttribute',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/dedicatedHost/{dedicatedHostId}:modifyAttribute',
            ],
            'input' => [ 'shape' => 'ModifyDedicatedHostAttributeRequestShape', ],
            'output' => [ 'shape' => 'ModifyDedicatedHostAttributeResponseShape', ],
        ],
        'DescribeDedicatedHostType' => [
            'name' => 'DescribeDedicatedHostType',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/dedicatedHostType',
            ],
            'input' => [ 'shape' => 'DescribeDedicatedHostTypeRequestShape', ],
            'output' => [ 'shape' => 'DescribeDedicatedHostTypeResponseShape', ],
        ],
        'DescribeDedicatedPools' => [
            'name' => 'DescribeDedicatedPools',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/dedicatedPools',
            ],
            'input' => [ 'shape' => 'DescribeDedicatedPoolsRequestShape', ],
            'output' => [ 'shape' => 'DescribeDedicatedPoolsResponseShape', ],
        ],
        'AllocDedicatedPool' => [
            'name' => 'AllocDedicatedPool',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/dedicatedPools',
            ],
            'input' => [ 'shape' => 'AllocDedicatedPoolRequestShape', ],
            'output' => [ 'shape' => 'AllocDedicatedPoolResponseShape', ],
        ],
        'ModifyDedicatedPoolAttribute' => [
            'name' => 'ModifyDedicatedPoolAttribute',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/dedicatedPool/{dedicatedPoolId}:modifyAttribute',
            ],
            'input' => [ 'shape' => 'ModifyDedicatedPoolAttributeRequestShape', ],
            'output' => [ 'shape' => 'ModifyDedicatedPoolAttributeResponseShape', ],
        ],
        'ReleaseDedicatedPool' => [
            'name' => 'ReleaseDedicatedPool',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/regions/{regionId}/dedicatedPool/{dedicatedPoolId}',
            ],
            'input' => [ 'shape' => 'ReleaseDedicatedPoolRequestShape', ],
            'output' => [ 'shape' => 'ReleaseDedicatedPoolResponseShape', ],
        ],
        'DescribeQuotas' => [
            'name' => 'DescribeQuotas',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/dhQuotas',
            ],
            'input' => [ 'shape' => 'DescribeQuotasRequestShape', ],
            'output' => [ 'shape' => 'DescribeQuotasResponseShape', ],
        ],
    ],
    'shapes' => [
        'BindInfo' => [
            'type' => 'structure',
            'members' => [
                'resourceId' => [ 'type' => 'string', 'locationName' => 'resourceId', ],
                'resourceName' => [ 'type' => 'string', 'locationName' => 'resourceName', ],
                'remark' => [ 'type' => 'string', 'locationName' => 'remark', ],
            ],
        ],
        'Socket' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'integer', 'locationName' => 'id', ],
                'cores' => [ 'type' => 'list', 'member' => [ 'shape' => 'Core', ], ],
            ],
        ],
        'Thread' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'integer', 'locationName' => 'id', ],
                'alloced' => [ 'type' => 'boolean', 'locationName' => 'alloced', ],
            ],
        ],
        'Numa' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'integer', 'locationName' => 'id', ],
                'cores' => [ 'type' => 'list', 'member' => [ 'shape' => 'Core', ], ],
            ],
        ],
        'Core' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'integer', 'locationName' => 'id', ],
                'threads' => [ 'type' => 'list', 'member' => [ 'shape' => 'Thread', ], ],
            ],
        ],
        'CpuTopology' => [
            'type' => 'structure',
            'members' => [
                'sockets' => [ 'type' => 'list', 'member' => [ 'shape' => 'Socket', ], ],
                'numas' => [ 'type' => 'list', 'member' => [ 'shape' => 'Numa', ], ],
            ],
        ],
        'LocalDevice' => [
            'type' => 'structure',
            'members' => [
                'deviceType' => [ 'type' => 'string', 'locationName' => 'deviceType', ],
                'productModel' => [ 'type' => 'string', 'locationName' => 'productModel', ],
                'deviceId' => [ 'type' => 'string', 'locationName' => 'deviceId', ],
                'setting' => [ 'type' => 'object', 'locationName' => 'setting', ],
                'deviceInfo' => [ 'type' => 'string', 'locationName' => 'deviceInfo', ],
                'state' => [ 'type' => 'string', 'locationName' => 'state', ],
                'resourceId' => [ 'type' => 'string', 'locationName' => 'resourceId', ],
            ],
        ],
        'Tag' => [
            'type' => 'structure',
            'members' => [
                'key' => [ 'type' => 'string', 'locationName' => 'key', ],
                'value' => [ 'type' => 'string', 'locationName' => 'value', ],
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
        'DedicatedHost' => [
            'type' => 'structure',
            'members' => [
                'dedicatedHostId' => [ 'type' => 'string', 'locationName' => 'dedicatedHostId', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'az' => [ 'type' => 'string', 'locationName' => 'az', ],
                'dedicatedHostType' => [ 'type' => 'string', 'locationName' => 'dedicatedHostType', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'dedicatedPoolId' => [ 'type' => 'string', 'locationName' => 'dedicatedPoolId', ],
                'logicRack' => [ 'type' => 'integer', 'locationName' => 'logicRack', ],
                'supportedInstanceType' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'capacity' =>  [ 'shape' => 'ResourceCapacity', ],
                'instanceIds' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'charge' =>  [ 'shape' => 'Charge', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'cpuTopology' =>  [ 'shape' => 'CpuTopology', ],
                'tags' => [ 'type' => 'list', 'member' => [ 'shape' => 'Tag', ], ],
                'resourceGroupId' => [ 'type' => 'string', 'locationName' => 'resourceGroupId', ],
            ],
        ],
        'ResourceCapacity' => [
            'type' => 'structure',
            'members' => [
                'totalVCPUs' => [ 'type' => 'integer', 'locationName' => 'totalVCPUs', ],
                'totalMemoryMB' => [ 'type' => 'integer', 'locationName' => 'totalMemoryMB', ],
                'totalDiskGB' => [ 'type' => 'integer', 'locationName' => 'totalDiskGB', ],
                'totalGPUs' => [ 'type' => 'integer', 'locationName' => 'totalGPUs', ],
                'usedVCPUs' => [ 'type' => 'integer', 'locationName' => 'usedVCPUs', ],
                'usedMemoryMB' => [ 'type' => 'integer', 'locationName' => 'usedMemoryMB', ],
                'usedDiskGB' => [ 'type' => 'integer', 'locationName' => 'usedDiskGB', ],
                'usedGPUs' => [ 'type' => 'integer', 'locationName' => 'usedGPUs', ],
                'localDiskType' => [ 'type' => 'string', 'locationName' => 'localDiskType', ],
                'instanceCount' => [ 'type' => 'integer', 'locationName' => 'instanceCount', ],
            ],
        ],
        'DedicatedHostBreif' => [
            'type' => 'structure',
            'members' => [
                'dedicatedHostId' => [ 'type' => 'string', 'locationName' => 'dedicatedHostId', ],
                'az' => [ 'type' => 'string', 'locationName' => 'az', ],
                'logicRack' => [ 'type' => 'integer', 'locationName' => 'logicRack', ],
            ],
        ],
        'DedicatedHostsBreif' => [
            'type' => 'structure',
            'members' => [
                'count' => [ 'type' => 'integer', 'locationName' => 'count', ],
                'dedicatedHost' => [ 'type' => 'list', 'member' => [ 'shape' => 'DedicatedHostBreif', ], ],
            ],
        ],
        'DedicatedHostInternal' => [
            'type' => 'structure',
            'members' => [
                'dedicatedHostId' => [ 'type' => 'string', 'locationName' => 'dedicatedHostId', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'az' => [ 'type' => 'string', 'locationName' => 'az', ],
                'dedicatedHostType' => [ 'type' => 'string', 'locationName' => 'dedicatedHostType', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'dedicatedPoolId' => [ 'type' => 'string', 'locationName' => 'dedicatedPoolId', ],
                'logicRack' => [ 'type' => 'integer', 'locationName' => 'logicRack', ],
                'supportedInstanceType' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'capacity' =>  [ 'shape' => 'ResourceCapacity', ],
                'instanceIds' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'localDevices' => [ 'type' => 'list', 'member' => [ 'shape' => 'LocalDevice', ], ],
                'cpuTopology' =>  [ 'shape' => 'CpuTopology', ],
                'rack' => [ 'type' => 'string', 'locationName' => 'rack', ],
            ],
        ],
        'DedicatedHostSpec' => [
            'type' => 'structure',
            'members' => [
                'dedicatedPoolId' => [ 'type' => 'string', 'locationName' => 'dedicatedPoolId', ],
                'az' => [ 'type' => 'string', 'locationName' => 'az', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'charge' =>  [ 'shape' => 'ChargeSpec', ],
                'userTags' => [ 'type' => 'list', 'member' => [ 'shape' => 'Tag', ], ],
                'resourceGroupId' => [ 'type' => 'string', 'locationName' => 'resourceGroupId', ],
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
        'HostType' => [
            'type' => 'structure',
            'members' => [
                'dedicatedHostType' => [ 'type' => 'string', 'locationName' => 'dedicatedHostType', ],
                'state' => [ 'type' => 'list', 'member' => [ 'shape' => 'HostTypeState', ], ],
                'totalVCPUs' => [ 'type' => 'integer', 'locationName' => 'totalVCPUs', ],
                'totalMemoryMB' => [ 'type' => 'integer', 'locationName' => 'totalMemoryMB', ],
                'totalDiskGB' => [ 'type' => 'integer', 'locationName' => 'totalDiskGB', ],
                'totalGPUs' => [ 'type' => 'integer', 'locationName' => 'totalGPUs', ],
                'supportedInstanceType' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'HostTypeState' => [
            'type' => 'structure',
            'members' => [
                'az' => [ 'type' => 'string', 'locationName' => 'az', ],
                'inStock' => [ 'type' => 'boolean', 'locationName' => 'inStock', ],
                'online' => [ 'type' => 'boolean', 'locationName' => 'online', ],
            ],
        ],
        'DedicatedPool' => [
            'type' => 'structure',
            'members' => [
                'dedicatedPoolId' => [ 'type' => 'string', 'locationName' => 'dedicatedPoolId', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'dedicatedHostType' => [ 'type' => 'string', 'locationName' => 'dedicatedHostType', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'az' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'capacity' =>  [ 'shape' => 'ResourceCapacity', ],
                'supportedInstanceType' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'dedicatedHosts' =>  [ 'shape' => 'DedicatedHostsBreif', ],
                'instanceIds' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
            ],
        ],
        'InstanceInfo' => [
            'type' => 'structure',
            'members' => [
                'resourceId' => [ 'type' => 'string', 'locationName' => 'resourceId', ],
                'resourceName' => [ 'type' => 'string', 'locationName' => 'resourceName', ],
                'remark' => [ 'type' => 'string', 'locationName' => 'remark', ],
                'bind' => [ 'type' => 'list', 'member' => [ 'shape' => 'BindInfo', ], ],
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
        'TagFilter' => [
            'type' => 'structure',
            'members' => [
                'key' => [ 'type' => 'string', 'locationName' => 'key', ],
                'values' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'Status' => [
            'type' => 'structure',
            'members' => [
                'resourceId' => [ 'type' => 'string', 'locationName' => 'resourceId', ],
                'validity' => [ 'type' => 'boolean', 'locationName' => 'validity', ],
            ],
        ],
        'ModifyDedicatedHostAttributeResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'ReleaseDedicatedHostResponseShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'ReleaseDedicatedHostRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'dedicatedHostId' => [ 'type' => 'string', 'locationName' => 'dedicatedHostId', ],
            ],
        ],
        'AllocDedicatedHostsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'dedicatedHostSpec' =>  [ 'shape' => 'DedicatedHostSpec', ],
                'deployPolicy' => [ 'type' => 'string', 'locationName' => 'deployPolicy', ],
                'maxCount' => [ 'type' => 'integer', 'locationName' => 'maxCount', ],
                'clientToken' => [ 'type' => 'string', 'locationName' => 'clientToken', ],
                'enableCpuTopology' => [ 'type' => 'boolean', 'locationName' => 'enableCpuTopology', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'AllocDedicatedHostsResultShape' => [
            'type' => 'structure',
            'members' => [
                'dedicatedHostIds' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'DescribeDedicatedHostsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'tags' => [ 'type' => 'list', 'member' => [ 'shape' => 'TagFilter', ], ],
                'filters' => [ 'type' => 'list', 'member' => [ 'shape' => 'Filter', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DescribeDedicatedHostTypeRequestShape' => [
            'type' => 'structure',
            'members' => [
                'filters' => [ 'type' => 'list', 'member' => [ 'shape' => 'Filter', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DescribeDedicatedHostTypeResultShape' => [
            'type' => 'structure',
            'members' => [
                'dedicatedHostTypes' => [ 'type' => 'list', 'member' => [ 'shape' => 'HostType', ], ],
                'totalCount' => [ 'type' => 'double', 'locationName' => 'totalCount', ],
            ],
        ],
        'ReleaseDedicatedHostResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DescribeDedicatedHostsResultShape' => [
            'type' => 'structure',
            'members' => [
                'dedicatedHosts' => [ 'type' => 'list', 'member' => [ 'shape' => 'DedicatedHost', ], ],
                'totalCount' => [ 'type' => 'double', 'locationName' => 'totalCount', ],
            ],
        ],
        'DescribeDedicatedHostTypeResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeDedicatedHostTypeResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeDedicatedHostsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeDedicatedHostsResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'AllocDedicatedHostsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'AllocDedicatedHostsResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ModifyDedicatedHostAttributeRequestShape' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'enableCpuTopology' => [ 'type' => 'boolean', 'locationName' => 'enableCpuTopology', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'dedicatedHostId' => [ 'type' => 'string', 'locationName' => 'dedicatedHostId', ],
            ],
        ],
        'ModifyDedicatedHostAttributeResponseShape' => [
            'type' => 'structure',
            'members' => [
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
        'DescribeDedicatedPoolsResultShape' => [
            'type' => 'structure',
            'members' => [
                'dedicatedPools' => [ 'type' => 'list', 'member' => [ 'shape' => 'DedicatedPool', ], ],
                'totalCount' => [ 'type' => 'double', 'locationName' => 'totalCount', ],
            ],
        ],
        'ModifyDedicatedPoolAttributeRequestShape' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'az' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'dedicatedPoolId' => [ 'type' => 'string', 'locationName' => 'dedicatedPoolId', ],
            ],
        ],
        'ModifyDedicatedPoolAttributeResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'ReleaseDedicatedPoolResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DescribeDedicatedPoolsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeDedicatedPoolsResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'AllocDedicatedPoolResultShape' => [
            'type' => 'structure',
            'members' => [
                'dedicatedPoolId' => [ 'type' => 'string', 'locationName' => 'dedicatedPoolId', ],
            ],
        ],
        'ModifyDedicatedPoolAttributeResponseShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'AllocDedicatedPoolResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'AllocDedicatedPoolResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'AllocDedicatedPoolRequestShape' => [
            'type' => 'structure',
            'members' => [
                'dedicatedHostType' => [ 'type' => 'string', 'locationName' => 'dedicatedHostType', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'az' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'ReleaseDedicatedPoolRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'dedicatedPoolId' => [ 'type' => 'string', 'locationName' => 'dedicatedPoolId', ],
            ],
        ],
        'ReleaseDedicatedPoolResponseShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DescribeDedicatedPoolsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'filters' => [ 'type' => 'list', 'member' => [ 'shape' => 'Filter', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DescribeQuotasRequestShape' => [
            'type' => 'structure',
            'members' => [
                'filters' => [ 'type' => 'list', 'member' => [ 'shape' => 'Filter', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DescribeQuotasResultShape' => [
            'type' => 'structure',
            'members' => [
                'quotas' => [ 'type' => 'list', 'member' => [ 'shape' => 'Quota', ], ],
            ],
        ],
        'DescribeQuotasResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeQuotasResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
    ],
];
