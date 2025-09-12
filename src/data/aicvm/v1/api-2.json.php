<?php
// This file was auto-generated
return [
//    'version' => '',
    'metadata' =>
    [
//        'apiVersion' => '',
//        'endpointPrefix' => 'aicvm',
        'protocol' => 'json',
//        'serviceFullName' => 'aicvm',
//        'serviceId' => 'aicvm',
    ],
    'operations' => [
        'DescribeFlavors' => [
            'name' => 'DescribeFlavors',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/flavor',
            ],
            'input' => [ 'shape' => 'DescribeFlavorsRequestShape', ],
            'output' => [ 'shape' => 'DescribeFlavorsResponseShape', ],
        ],
        'CreateInstance' => [
            'name' => 'CreateInstance',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/instance',
            ],
            'input' => [ 'shape' => 'CreateInstanceRequestShape', ],
            'output' => [ 'shape' => 'CreateInstanceResponseShape', ],
        ],
        'DescribeInstancesGPU' => [
            'name' => 'DescribeInstancesGPU',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/instanceGpus',
            ],
            'input' => [ 'shape' => 'DescribeInstancesGPURequestShape', ],
            'output' => [ 'shape' => 'DescribeInstancesGPUResponseShape', ],
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
        'DescribeInstance' => [
            'name' => 'DescribeInstance',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}',
            ],
            'input' => [ 'shape' => 'DescribeInstanceRequestShape', ],
            'output' => [ 'shape' => 'DescribeInstanceResponseShape', ],
        ],
        'ModifyInstance' => [
            'name' => 'ModifyInstance',
            'http' => [
                'method' => 'PUT',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}',
            ],
            'input' => [ 'shape' => 'ModifyInstanceRequestShape', ],
            'output' => [ 'shape' => 'ModifyInstanceResponseShape', ],
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
        'DescribeInstancesHardwareFault' => [
            'name' => 'DescribeInstancesHardwareFault',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}:hardwareFault',
            ],
            'input' => [ 'shape' => 'DescribeInstancesHardwareFaultRequestShape', ],
            'output' => [ 'shape' => 'DescribeInstancesHardwareFaultResponseShape', ],
        ],
        'ModifyPassword' => [
            'name' => 'ModifyPassword',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}:modifyInstancePassword',
            ],
            'input' => [ 'shape' => 'ModifyPasswordRequestShape', ],
            'output' => [ 'shape' => 'ModifyPasswordResponseShape', ],
        ],
        'RebootInstance' => [
            'name' => 'RebootInstance',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}:reboot',
            ],
            'input' => [ 'shape' => 'RebootInstanceRequestShape', ],
            'output' => [ 'shape' => 'RebootInstanceResponseShape', ],
        ],
        'RebuildInstance' => [
            'name' => 'RebuildInstance',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}:rebuild',
            ],
            'input' => [ 'shape' => 'RebuildInstanceRequestShape', ],
            'output' => [ 'shape' => 'RebuildInstanceResponseShape', ],
        ],
        'StartInstance' => [
            'name' => 'StartInstance',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}:start',
            ],
            'input' => [ 'shape' => 'StartInstanceRequestShape', ],
            'output' => [ 'shape' => 'StartInstanceResponseShape', ],
        ],
        'StopInstance' => [
            'name' => 'StopInstance',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}:stop',
            ],
            'input' => [ 'shape' => 'StopInstanceRequestShape', ],
            'output' => [ 'shape' => 'StopInstanceResponseShape', ],
        ],
        'CreateKeypair' => [
            'name' => 'CreateKeypair',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/keypair',
            ],
            'input' => [ 'shape' => 'CreateKeypairRequestShape', ],
            'output' => [ 'shape' => 'CreateKeypairResponseShape', ],
        ],
        'DeleteKeypair' => [
            'name' => 'DeleteKeypair',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/regions/{regionId}/keypair/{keyName}',
            ],
            'input' => [ 'shape' => 'DeleteKeypairRequestShape', ],
            'output' => [ 'shape' => 'DeleteKeypairResponseShape', ],
        ],
        'AttachKeypair' => [
            'name' => 'AttachKeypair',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/keypair/{keyName}:attach',
            ],
            'input' => [ 'shape' => 'AttachKeypairRequestShape', ],
            'output' => [ 'shape' => 'AttachKeypairResponseShape', ],
        ],
        'DetachKeypair' => [
            'name' => 'DetachKeypair',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/keypair/{keyName}:detach',
            ],
            'input' => [ 'shape' => 'DetachKeypairRequestShape', ],
            'output' => [ 'shape' => 'DetachKeypairResponseShape', ],
        ],
        'DescribeKeypairs' => [
            'name' => 'DescribeKeypairs',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/keypairs',
            ],
            'input' => [ 'shape' => 'DescribeKeypairsRequestShape', ],
            'output' => [ 'shape' => 'DescribeKeypairsResponseShape', ],
        ],
        'DescribeImages' => [
            'name' => 'DescribeImages',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/osImage',
            ],
            'input' => [ 'shape' => 'DescribeImagesRequestShape', ],
            'output' => [ 'shape' => 'DescribeImagesResponseShape', ],
        ],
        'DescribeStocks' => [
            'name' => 'DescribeStocks',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/resource:stocks',
            ],
            'input' => [ 'shape' => 'DescribeStocksRequestShape', ],
            'output' => [ 'shape' => 'DescribeStocksResponseShape', ],
        ],
    ],
    'shapes' => [
        'Filter' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'operator' => [ 'type' => 'string', 'locationName' => 'operator', ],
                'values' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'DescribeSubnetsReply' => [
            'type' => 'structure',
            'members' => [
                'list' => [ 'type' => 'list', 'member' => [ 'shape' => 'DescribeSubnetReply', ], ],
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
            ],
        ],
        'DescribeSubnetReply' => [
            'type' => 'structure',
            'members' => [
                'cidr' => [ 'type' => 'string', 'locationName' => 'cidr', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'gateway' => [ 'type' => 'string', 'locationName' => 'gateway', ],
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
                'instanceIds' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'ipVersion' => [ 'type' => 'string', 'locationName' => 'ipVersion', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'type' => [ 'type' => 'string', 'locationName' => 'type', ],
            ],
        ],
        'Err' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'long', 'locationName' => 'code', ],
                'details' => [ 'type' => 'object', 'locationName' => 'details', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
            ],
        ],
        'DescribesReply' => [
            'type' => 'structure',
            'members' => [
                'content' => [ 'type' => 'list', 'member' => [ 'type' => 'long', ], ],
            ],
        ],
        'DescribeFlavorsResultShape' => [
            'type' => 'structure',
            'members' => [
                'list' => [ 'type' => 'list', 'member' => [ 'shape' => 'DescribeReply', ], ],
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
            ],
        ],
        'DescribeReply' => [
            'type' => 'structure',
            'members' => [
                'category' => [ 'type' => 'string', 'locationName' => 'category', ],
                'createdAt' => [ 'type' => 'string', 'locationName' => 'createdAt', ],
                'detail' => [ 'type' => 'string', 'locationName' => 'detail', ],
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'nameCn' => [ 'type' => 'string', 'locationName' => 'nameCn', ],
                'updatedAt' => [ 'type' => 'string', 'locationName' => 'updatedAt', ],
            ],
        ],
        'DescribeFlavorsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'error' =>  [ 'shape' => 'DescribeFlavorsResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'DescribeFlavorsResultShape', ],
            ],
        ],
        'DescribeFlavorsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'filters' => [ 'type' => 'list', 'member' => [ 'shape' => 'Filter', ], ],
            ],
        ],
        'ModifyInstanceRequestShape' => [
            'type' => 'structure',
            'members' => [
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'manageDetail' =>  [ 'shape' => 'ModifyInstanceManageDetail', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'DescribesGPUReply' => [
            'type' => 'structure',
            'members' => [
                'gpus' => [ 'type' => 'list', 'member' => [ 'shape' => 'GpuDetail', ], ],
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
            ],
        ],
        'DescribeInstancesResultShape' => [
            'type' => 'structure',
            'members' => [
                'instances' => [ 'type' => 'list', 'member' => [ 'shape' => 'InstanceDetail', ], ],
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
            ],
        ],
        'ModifyInstanceResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'ProbeHostingLevelReply' => [
            'type' => 'structure',
            'members' => [
                'hostingLevel' => [ 'type' => 'string', 'locationName' => 'hostingLevel', ],
                'notSupportReasons' => [ 'type' => 'list', 'member' => [ 'shape' => 'NotSupportReason', ], ],
                'supportFeatures' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'StartInstanceResponseShape' => [
            'type' => 'structure',
            'members' => [
                'error' =>  [ 'shape' => 'StartInstanceResultShape', ],
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
        'RebootInstanceResponseShape' => [
            'type' => 'structure',
            'members' => [
                'error' =>  [ 'shape' => 'RebootInstanceResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeInstanceResponseShape' => [
            'type' => 'structure',
            'members' => [
                'error' =>  [ 'shape' => 'DescribeInstanceResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'DescribeInstanceResultShape', ],
            ],
        ],
        'InstanceDetail' => [
            'type' => 'structure',
            'members' => [
                'azId' => [ 'type' => 'string', 'locationName' => 'azId', ],
                'cpuSummary' => [ 'type' => 'string', 'locationName' => 'cpuSummary', ],
                'createdAt' => [ 'type' => 'string', 'locationName' => 'createdAt', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'diskSummary' => [ 'type' => 'string', 'locationName' => 'diskSummary', ],
                'flavorId' => [ 'type' => 'string', 'locationName' => 'flavorId', ],
                'gpuSummary' => [ 'type' => 'string', 'locationName' => 'gpuSummary', ],
                'gpus' => [ 'type' => 'list', 'member' => [ 'shape' => 'GpuDetail', ], ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'ipmiPassword' => [ 'type' => 'string', 'locationName' => 'ipmiPassword', ],
                'ipmiUser' => [ 'type' => 'string', 'locationName' => 'ipmiUser', ],
                'jupyterUrl' => [ 'type' => 'string', 'locationName' => 'jupyterUrl', ],
                'keyId' => [ 'type' => 'string', 'locationName' => 'keyId', ],
                'manageIp' => [ 'type' => 'string', 'locationName' => 'manageIp', ],
                'memorySummary' => [ 'type' => 'string', 'locationName' => 'memorySummary', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'networkSummary' => [ 'type' => 'string', 'locationName' => 'networkSummary', ],
                'nics' => [ 'type' => 'list', 'member' => [ 'shape' => 'NicDetail', ], ],
                'osImageId' => [ 'type' => 'string', 'locationName' => 'osImageId', ],
                'osSummary' => [ 'type' => 'string', 'locationName' => 'osSummary', ],
                'pin' => [ 'type' => 'string', 'locationName' => 'pin', ],
                'rack' => [ 'type' => 'string', 'locationName' => 'rack', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'resourceGroupId' => [ 'type' => 'string', 'locationName' => 'resourceGroupId', ],
                'resourceId' => [ 'type' => 'string', 'locationName' => 'resourceId', ],
                'resourceType' => [ 'type' => 'string', 'locationName' => 'resourceType', ],
                'serialNumber' => [ 'type' => 'string', 'locationName' => 'serialNumber', ],
                'state' => [ 'type' => 'string', 'locationName' => 'state', ],
                'subnetId' => [ 'type' => 'string', 'locationName' => 'subnetId', ],
                'supportFeatures' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'tags' => [ 'type' => 'list', 'member' => [ 'shape' => 'InstanceTag', ], ],
                'vpcId' => [ 'type' => 'string', 'locationName' => 'vpcId', ],
            ],
        ],
        'DescribeInstancesResponseShape' => [
            'type' => 'structure',
            'members' => [
                'error' =>  [ 'shape' => 'DescribeInstancesResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'DescribeInstancesResultShape', ],
            ],
        ],
        'DescribeInstancesHardwareFaultRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'filters' => [ 'type' => 'list', 'member' => [ 'shape' => 'Filter', ], ],
                'sorts' => [ 'type' => 'list', 'member' => [ 'shape' => 'Sort', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'DescribeInstanceRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'ModifyPasswordResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'RebootInstanceResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'CreateInstanceManageDetail' => [
            'type' => 'structure',
            'members' => [
                'ipmiPassword' => [ 'type' => 'string', 'locationName' => 'ipmiPassword', ],
                'ipmiUser' => [ 'type' => 'string', 'locationName' => 'ipmiUser', ],
                'manageIp' => [ 'type' => 'string', 'locationName' => 'manageIp', ],
                'systemIp' => [ 'type' => 'string', 'locationName' => 'systemIp', ],
            ],
        ],
        'GpuDetail' => [
            'type' => 'structure',
            'members' => [
                'gpuBrand' => [ 'type' => 'string', 'locationName' => 'gpuBrand', ],
                'gpuDriverVer' => [ 'type' => 'string', 'locationName' => 'gpuDriverVer', ],
                'gpuFirmwareVer' => [ 'type' => 'string', 'locationName' => 'gpuFirmwareVer', ],
                'gpuId' => [ 'type' => 'string', 'locationName' => 'gpuId', ],
                'gpuIndexNumber' => [ 'type' => 'string', 'locationName' => 'gpuIndexNumber', ],
                'gpuMemoryTotal' => [ 'type' => 'float', 'locationName' => 'gpuMemoryTotal', ],
                'gpuMemoryUsed' => [ 'type' => 'float', 'locationName' => 'gpuMemoryUsed', ],
                'gpuPerformance' =>  [ 'shape' => 'GpuPerformance', ],
                'gpuPlat' => [ 'type' => 'string', 'locationName' => 'gpuPlat', ],
                'gpuSN' => [ 'type' => 'string', 'locationName' => 'gpuSN', ],
                'gpuSlot' => [ 'type' => 'string', 'locationName' => 'gpuSlot', ],
                'id' => [ 'type' => 'integer', 'locationName' => 'id', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'instanceName' => [ 'type' => 'string', 'locationName' => 'instanceName', ],
                'model' => [ 'type' => 'string', 'locationName' => 'model', ],
                'pin' => [ 'type' => 'string', 'locationName' => 'pin', ],
            ],
        ],
        'DescribeInstancesGPUResultShape' => [
            'type' => 'structure',
            'members' => [
                'gpus' => [ 'type' => 'list', 'member' => [ 'shape' => 'GpuDetail', ], ],
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
            ],
        ],
        'ModifyPasswordRequestShape' => [
            'type' => 'structure',
            'members' => [
                'password' => [ 'type' => 'string', 'locationName' => 'password', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'InstanceTag' => [
            'type' => 'structure',
            'members' => [
                'key' => [ 'type' => 'string', 'locationName' => 'key', ],
                'value' => [ 'type' => 'string', 'locationName' => 'value', ],
            ],
        ],
        'DeleteInstanceRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'CreateInstanceResponseShape' => [
            'type' => 'structure',
            'members' => [
                'error' =>  [ 'shape' => 'CreateInstanceResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'CreateInstanceResultShape', ],
            ],
        ],
        'ModifyPasswordResponseShape' => [
            'type' => 'structure',
            'members' => [
                'error' =>  [ 'shape' => 'ModifyPasswordResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'RebuildInstanceResponseShape' => [
            'type' => 'structure',
            'members' => [
                'error' =>  [ 'shape' => 'RebuildInstanceResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'StopInstanceRequestShape' => [
            'type' => 'structure',
            'members' => [
                'body' => [ 'type' => '', 'locationName' => 'body', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'ModifyInstanceManageDetail' => [
            'type' => 'structure',
            'members' => [
                'ipmiPassword' => [ 'type' => 'string', 'locationName' => 'ipmiPassword', ],
                'ipmiUser' => [ 'type' => 'string', 'locationName' => 'ipmiUser', ],
                'manageIp' => [ 'type' => 'string', 'locationName' => 'manageIp', ],
                'password' => [ 'type' => 'string', 'locationName' => 'password', ],
                'systemIp' => [ 'type' => 'string', 'locationName' => 'systemIp', ],
                'user' => [ 'type' => 'string', 'locationName' => 'user', ],
            ],
        ],
        'DescribeInstancesGPUResponseShape' => [
            'type' => 'structure',
            'members' => [
                'error' =>  [ 'shape' => 'DescribeInstancesGPUResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'DescribeInstancesGPUResultShape', ],
            ],
        ],
        'DeleteInstanceResponseShape' => [
            'type' => 'structure',
            'members' => [
                'error' =>  [ 'shape' => 'DeleteInstanceResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeInstancesHardwareFaultResponseShape' => [
            'type' => 'structure',
            'members' => [
                'error' =>  [ 'shape' => 'DescribeInstancesHardwareFaultResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'DescribeInstancesHardwareFaultResultShape', ],
            ],
        ],
        'CreateInnerInstanceReply' => [
            'type' => 'structure',
            'members' => [
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'StartInstanceResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DescribeHardwareFaultReply' => [
            'type' => 'structure',
            'members' => [
                'currentTime' => [ 'type' => 'string', 'locationName' => 'currentTime', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'deviceSn' => [ 'type' => 'string', 'locationName' => 'deviceSn', ],
                'faultInfo' => [ 'type' => 'string', 'locationName' => 'faultInfo', ],
                'faultLevel' => [ 'type' => 'string', 'locationName' => 'faultLevel', ],
                'faultName' => [ 'type' => 'string', 'locationName' => 'faultName', ],
                'faultPart' => [ 'type' => 'string', 'locationName' => 'faultPart', ],
                'faultStatus' => [ 'type' => 'string', 'locationName' => 'faultStatus', ],
                'faultType' => [ 'type' => 'string', 'locationName' => 'faultType', ],
                'firstTime' => [ 'type' => 'string', 'locationName' => 'firstTime', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'lastTime' => [ 'type' => 'string', 'locationName' => 'lastTime', ],
                'nums' => [ 'type' => 'integer', 'locationName' => 'nums', ],
                'partsSn' => [ 'type' => 'string', 'locationName' => 'partsSn', ],
                'systemIp' => [ 'type' => 'string', 'locationName' => 'systemIp', ],
            ],
        ],
        'NotSupportReason' => [
            'type' => 'structure',
            'members' => [
                'feature' => [ 'type' => 'string', 'locationName' => 'feature', ],
                'reason' => [ 'type' => 'string', 'locationName' => 'reason', ],
            ],
        ],
        'RebootInstanceRequestShape' => [
            'type' => 'structure',
            'members' => [
                'body' => [ 'type' => '', 'locationName' => 'body', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'StartInstanceRequestShape' => [
            'type' => 'structure',
            'members' => [
                'body' => [ 'type' => '', 'locationName' => 'body', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'CreateInstanceRequestShape' => [
            'type' => 'structure',
            'members' => [
                'azId' => [ 'type' => 'string', 'locationName' => 'azId', ],
                'chargeSpec' =>  [ 'shape' => 'ChargeSpec', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'flavorId' => [ 'type' => 'string', 'locationName' => 'flavorId', ],
                'imageId' => [ 'type' => 'string', 'locationName' => 'imageId', ],
                'keyName' => [ 'type' => 'string', 'locationName' => 'keyName', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'password' => [ 'type' => 'string', 'locationName' => 'password', ],
                'resourceGroupId' => [ 'type' => 'string', 'locationName' => 'resourceGroupId', ],
                'subnetId' => [ 'type' => 'string', 'locationName' => 'subnetId', ],
                'tags' => [ 'type' => 'list', 'member' => [ 'shape' => 'InstanceTag', ], ],
                'user' => [ 'type' => 'string', 'locationName' => 'user', ],
                'userData' => [ 'type' => 'string', 'locationName' => 'userData', ],
                'vpcId' => [ 'type' => 'string', 'locationName' => 'vpcId', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'ChargeSpec' => [
            'type' => 'structure',
            'members' => [
                'autoRenew' => [ 'type' => 'boolean', 'locationName' => 'autoRenew', ],
                'chargeDuration' => [ 'type' => 'integer', 'locationName' => 'chargeDuration', ],
                'chargeMode' => [ 'type' => 'string', 'locationName' => 'chargeMode', ],
                'chargeUnit' => [ 'type' => 'string', 'locationName' => 'chargeUnit', ],
                'startTime' => [ 'type' => 'string', 'locationName' => 'startTime', ],
            ],
        ],
        'RebuildInstanceResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'CreateInstanceResultShape' => [
            'type' => 'structure',
            'members' => [
                'buyId' => [ 'type' => 'string', 'locationName' => 'buyId', ],
            ],
        ],
        'StopInstanceResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'NicDetail' => [
            'type' => 'structure',
            'members' => [
                'category' => [ 'type' => 'string', 'locationName' => 'category', ],
                'driver' => [ 'type' => 'string', 'locationName' => 'driver', ],
                'firmwareVer' => [ 'type' => 'string', 'locationName' => 'firmwareVer', ],
                'ip' => [ 'type' => 'string', 'locationName' => 'ip', ],
                'mac' => [ 'type' => 'string', 'locationName' => 'mac', ],
                'manufacturer' => [ 'type' => 'string', 'locationName' => 'manufacturer', ],
                'model' => [ 'type' => 'string', 'locationName' => 'model', ],
                'nicInterface' => [ 'type' => 'string', 'locationName' => 'nicInterface', ],
                'portIndex' => [ 'type' => 'integer', 'locationName' => 'portIndex', ],
                'portName' => [ 'type' => 'string', 'locationName' => 'portName', ],
                'portType' => [ 'type' => 'string', 'locationName' => 'portType', ],
                'role' => [ 'type' => 'string', 'locationName' => 'role', ],
                'segment' => [ 'type' => 'string', 'locationName' => 'segment', ],
                'slot' => [ 'type' => 'string', 'locationName' => 'slot', ],
                'speed' => [ 'type' => 'string', 'locationName' => 'speed', ],
                'subnetId' => [ 'type' => 'string', 'locationName' => 'subnetId', ],
                'type' => [ 'type' => 'string', 'locationName' => 'type', ],
            ],
        ],
        'DescribeInstancesHardwareFaultResultShape' => [
            'type' => 'structure',
            'members' => [
                'list' => [ 'type' => 'list', 'member' => [ 'shape' => 'DescribeHardwareFaultReply', ], ],
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
            ],
        ],
        'ModifyInstanceResponseShape' => [
            'type' => 'structure',
            'members' => [
                'error' =>  [ 'shape' => 'ModifyInstanceResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeInstanceResultShape' => [
            'type' => 'structure',
            'members' => [
                'instance' =>  [ 'shape' => 'InstanceDetail', ],
            ],
        ],
        'DeleteInstanceResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'RebuildInstanceRequestShape' => [
            'type' => 'structure',
            'members' => [
                'imageId' => [ 'type' => 'string', 'locationName' => 'imageId', ],
                'keyName' => [ 'type' => 'string', 'locationName' => 'keyName', ],
                'password' => [ 'type' => 'string', 'locationName' => 'password', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'DescribesHardwareFaultReply' => [
            'type' => 'structure',
            'members' => [
                'list' => [ 'type' => 'list', 'member' => [ 'shape' => 'DescribeHardwareFaultReply', ], ],
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
            ],
        ],
        'StopInstanceResponseShape' => [
            'type' => 'structure',
            'members' => [
                'error' =>  [ 'shape' => 'StopInstanceResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeInstancesGPURequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'filters' => [ 'type' => 'list', 'member' => [ 'shape' => 'Filter', ], ],
                'sorts' => [ 'type' => 'list', 'member' => [ 'shape' => 'Sort', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'CreateInstanceReply' => [
            'type' => 'structure',
            'members' => [
                'buyId' => [ 'type' => 'string', 'locationName' => 'buyId', ],
            ],
        ],
        'DescribeInstancesRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'filters' => [ 'type' => 'list', 'member' => [ 'shape' => 'Filter', ], ],
                'sorts' => [ 'type' => 'list', 'member' => [ 'shape' => 'Sort', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'GpuPerformance' => [
            'type' => 'structure',
            'members' => [
                'fp8Total' => [ 'type' => 'float', 'locationName' => 'fp8Total', ],
                'fp8Used' => [ 'type' => 'float', 'locationName' => 'fp8Used', ],
                'fp16Total' => [ 'type' => 'float', 'locationName' => 'fp16Total', ],
                'fp16Used' => [ 'type' => 'float', 'locationName' => 'fp16Used', ],
            ],
        ],
        'Keypair' => [
            'type' => 'structure',
            'members' => [
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'instanceIds' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'keyFingerprint' => [ 'type' => 'string', 'locationName' => 'keyFingerprint', ],
                'keyName' => [ 'type' => 'string', 'locationName' => 'keyName', ],
                'serviceCode' => [ 'type' => 'string', 'locationName' => 'serviceCode', ],
            ],
        ],
        'DescribeKeypairsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'filters' => [ 'type' => 'list', 'member' => [ 'shape' => 'Filter', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DetachKeypairResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'CreateKeypairReply' => [
            'type' => 'structure',
            'members' => [
                'keyFingerprint' => [ 'type' => 'string', 'locationName' => 'keyFingerprint', ],
                'keyName' => [ 'type' => 'string', 'locationName' => 'keyName', ],
                'privateKey' => [ 'type' => 'string', 'locationName' => 'privateKey', ],
            ],
        ],
        'DescribeKeypairsResultShape' => [
            'type' => 'structure',
            'members' => [
                'keypairs' => [ 'type' => 'list', 'member' => [ 'shape' => 'Keypair', ], ],
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
            ],
        ],
        'DescribeKeypairsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'error' =>  [ 'shape' => 'DescribeKeypairsResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'DescribeKeypairsResultShape', ],
            ],
        ],
        'DetachKeypairRequestShape' => [
            'type' => 'structure',
            'members' => [
                'instanceIds' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'keyName' => [ 'type' => 'string', 'locationName' => 'keyName', ],
            ],
        ],
        'DeleteKeypairResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DeleteKeypairResponseShape' => [
            'type' => 'structure',
            'members' => [
                'error' =>  [ 'shape' => 'DeleteKeypairResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeKeypairsReply' => [
            'type' => 'structure',
            'members' => [
                'keypairs' => [ 'type' => 'list', 'member' => [ 'shape' => 'Keypair', ], ],
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
            ],
        ],
        'DeleteKeypairRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'keyName' => [ 'type' => 'string', 'locationName' => 'keyName', ],
            ],
        ],
        'AttachKeypairResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'CreateKeypairResponseShape' => [
            'type' => 'structure',
            'members' => [
                'error' =>  [ 'shape' => 'CreateKeypairResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'CreateKeypairResultShape', ],
            ],
        ],
        'AttachKeypairResponseShape' => [
            'type' => 'structure',
            'members' => [
                'error' =>  [ 'shape' => 'AttachKeypairResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'CreateKeypairRequestShape' => [
            'type' => 'structure',
            'members' => [
                'keyName' => [ 'type' => 'string', 'locationName' => 'keyName', ],
                'publicKey' => [ 'type' => 'string', 'locationName' => 'publicKey', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'CreateKeypairResultShape' => [
            'type' => 'structure',
            'members' => [
                'keyFingerprint' => [ 'type' => 'string', 'locationName' => 'keyFingerprint', ],
                'keyName' => [ 'type' => 'string', 'locationName' => 'keyName', ],
                'privateKey' => [ 'type' => 'string', 'locationName' => 'privateKey', ],
            ],
        ],
        'DetachKeypairResponseShape' => [
            'type' => 'structure',
            'members' => [
                'error' =>  [ 'shape' => 'DetachKeypairResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'AttachKeypairRequestShape' => [
            'type' => 'structure',
            'members' => [
                'instanceIds' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'passwordAuth' => [ 'type' => 'string', 'locationName' => 'passwordAuth', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'keyName' => [ 'type' => 'string', 'locationName' => 'keyName', ],
            ],
        ],
        'DescribeSubnetsUsedReply' => [
            'type' => 'structure',
            'members' => [
                'list' => [ 'type' => 'list', 'member' => [ 'shape' => 'DescribeSubnetUsedReply', ], ],
            ],
        ],
        'DescribeCIDRIpsReply' => [
            'type' => 'structure',
            'members' => [
                'cidr' => [ 'type' => 'string', 'locationName' => 'cidr', ],
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
                'ipAddresses' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
            ],
        ],
        'DescribeSubnetUsedReply' => [
            'type' => 'structure',
            'members' => [
                'cidr' => [ 'type' => 'string', 'locationName' => 'cidr', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'gateway' => [ 'type' => 'string', 'locationName' => 'gateway', ],
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
                'instanceIds' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'ipVersion' => [ 'type' => 'string', 'locationName' => 'ipVersion', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'pin' => [ 'type' => 'string', 'locationName' => 'pin', ],
                'totalIP' => [ 'type' => 'integer', 'locationName' => 'totalIP', ],
                'type' => [ 'type' => 'string', 'locationName' => 'type', ],
                'usedIP' => [ 'type' => 'integer', 'locationName' => 'usedIP', ],
            ],
        ],
        'DescribeVpcsReply' => [
            'type' => 'structure',
            'members' => [
                'list' => [ 'type' => 'list', 'member' => [ 'shape' => 'DescribeVpcReply', ], ],
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
            ],
        ],
        'DescribeVpcReply' => [
            'type' => 'structure',
            'members' => [
                'az' => [ 'type' => 'string', 'locationName' => 'az', ],
                'cidr' => [ 'type' => 'string', 'locationName' => 'cidr', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
                'ipVersion' => [ 'type' => 'string', 'locationName' => 'ipVersion', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'subnets' => [ 'type' => 'list', 'member' => [ 'shape' => 'DescribeSubnetUsedReply', ], ],
                'type' => [ 'type' => 'string', 'locationName' => 'type', ],
                'vlan' => [ 'type' => 'long', 'locationName' => 'vlan', ],
            ],
        ],
        'CreateReply' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
            ],
        ],
        'FavorDetail' => [
            'type' => 'structure',
            'members' => [
                'arch' => [ 'type' => 'string', 'locationName' => 'arch', ],
                'cpu' =>  [ 'shape' => 'Cpu', ],
                'disk' =>  [ 'shape' => 'Disk', ],
                'gpu' =>  [ 'shape' => 'Gpu', ],
                'memory' => [ 'type' => 'string', 'locationName' => 'memory', ],
                'networkInterface' => [ 'type' => 'list', 'member' => [ 'shape' => 'NetworkInterface', ], ],
            ],
        ],
        'CreateReq' => [
            'type' => 'structure',
            'members' => [
                'detail' =>  [ 'shape' => 'FavorDetail', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
            ],
        ],
        'Gpu' => [
            'type' => 'structure',
            'members' => [
                'displayMemory' => [ 'type' => 'string', 'locationName' => 'displayMemory', ],
                'fp8' => [ 'type' => 'string', 'locationName' => 'fp8', ],
                'fp16' => [ 'type' => 'string', 'locationName' => 'fp16', ],
                'gpuNum' => [ 'type' => 'string', 'locationName' => 'gpuNum', ],
                'gpuType' => [ 'type' => 'string', 'locationName' => 'gpuType', ],
            ],
        ],
        'Cpu' => [
            'type' => 'structure',
            'members' => [
                'cpuNum' => [ 'type' => 'string', 'locationName' => 'cpuNum', ],
                'cpuType' => [ 'type' => 'string', 'locationName' => 'cpuType', ],
            ],
        ],
        'Disk' => [
            'type' => 'structure',
            'members' => [
                'dataDisk' => [ 'type' => 'string', 'locationName' => 'dataDisk', ],
                'systemDisk' => [ 'type' => 'string', 'locationName' => 'systemDisk', ],
            ],
        ],
        'NetworkInterface' => [
            'type' => 'structure',
            'members' => [
                'category' => [ 'type' => 'string', 'locationName' => 'category', ],
                'interNum' => [ 'type' => 'string', 'locationName' => 'interNum', ],
                'portNum' => [ 'type' => 'string', 'locationName' => 'portNum', ],
                'speed' => [ 'type' => 'string', 'locationName' => 'speed', ],
            ],
        ],
        'InstanceDescribesReply' => [
            'type' => 'structure',
            'members' => [
                'instances' => [ 'type' => 'list', 'member' => [ 'shape' => 'InstanceDetail', ], ],
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
            ],
        ],
        'CreatesReq' => [
            'type' => 'structure',
            'members' => [
                'azId' => [ 'type' => 'string', 'locationName' => 'azId', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'resources' => [ 'type' => 'list', 'member' => [ 'shape' => 'BatchResource', ], ],
            ],
        ],
        'NicDevice' => [
            'type' => 'structure',
            'members' => [
                'category' => [ 'type' => 'string', 'locationName' => 'category', ],
                'guid' => [ 'type' => 'string', 'locationName' => 'guid', ],
                'ip' => [ 'type' => 'string', 'locationName' => 'ip', ],
                'mac' => [ 'type' => 'string', 'locationName' => 'mac', ],
                'portIndex' => [ 'type' => 'integer', 'locationName' => 'portIndex', ],
                'role' => [ 'type' => 'string', 'locationName' => 'role', ],
                'segment' => [ 'type' => 'string', 'locationName' => 'segment', ],
                'speed' => [ 'type' => 'string', 'locationName' => 'speed', ],
                'subnetId' => [ 'type' => 'string', 'locationName' => 'subnetId', ],
            ],
        ],
        'BatchResource' => [
            'type' => 'structure',
            'members' => [
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'flavorName' => [ 'type' => 'string', 'locationName' => 'flavorName', ],
                'ipmiPassword' => [ 'type' => 'string', 'locationName' => 'ipmiPassword', ],
                'ipmiUser' => [ 'type' => 'string', 'locationName' => 'ipmiUser', ],
                'manageIp' => [ 'type' => 'string', 'locationName' => 'manageIp', ],
                'nicDevices' => [ 'type' => 'list', 'member' => [ 'shape' => 'NicDevice', ], ],
                'rackId' => [ 'type' => 'string', 'locationName' => 'rackId', ],
                'serialNumber' => [ 'type' => 'string', 'locationName' => 'serialNumber', ],
                'systemGateway' => [ 'type' => 'string', 'locationName' => 'systemGateway', ],
                'systemIp' => [ 'type' => 'string', 'locationName' => 'systemIp', ],
                'systemMac' => [ 'type' => 'string', 'locationName' => 'systemMac', ],
                'systemMask' => [ 'type' => 'string', 'locationName' => 'systemMask', ],
            ],
        ],
        'ModifiesReq' => [
            'type' => 'structure',
            'members' => [
                'azId' => [ 'type' => 'string', 'locationName' => 'azId', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'resources' => [ 'type' => 'list', 'member' => [ 'shape' => 'BatchResource', ], ],
            ],
        ],
        'DescribeImagesRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'filters' => [ 'type' => 'list', 'member' => [ 'shape' => 'Filter', ], ],
            ],
        ],
        'DescribeImagesResponseShape' => [
            'type' => 'structure',
            'members' => [
                'error' =>  [ 'shape' => 'DescribeImagesResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'DescribeImagesResultShape', ],
            ],
        ],
        'DescribeImagesResultShape' => [
            'type' => 'structure',
            'members' => [
                'list' => [ 'type' => 'list', 'member' => [ 'shape' => 'DescribeReply', ], ],
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
            ],
        ],
        'DescribeStocksResultShape' => [
            'type' => 'structure',
            'members' => [
                'stockInfoList' => [ 'type' => 'list', 'member' => [ 'shape' => 'StockInfo', ], ],
            ],
        ],
        'StockInfo' => [
            'type' => 'structure',
            'members' => [
                'availableCount' => [ 'type' => 'integer', 'locationName' => 'availableCount', ],
                'azId' => [ 'type' => 'string', 'locationName' => 'azId', ],
                'flavorName' => [ 'type' => 'string', 'locationName' => 'flavorName', ],
                'opsState' => [ 'type' => 'string', 'locationName' => 'opsState', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'scheduleState' => [ 'type' => 'string', 'locationName' => 'scheduleState', ],
            ],
        ],
        'DescribeStocksRequestShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DescribeStockReply' => [
            'type' => 'structure',
            'members' => [
                'stockInfoList' => [ 'type' => 'list', 'member' => [ 'shape' => 'StockInfo', ], ],
            ],
        ],
        'DescribeStocksResponseShape' => [
            'type' => 'structure',
            'members' => [
                'error' =>  [ 'shape' => 'DescribeStocksResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'DescribeStocksResultShape', ],
            ],
        ],
    ],
];
