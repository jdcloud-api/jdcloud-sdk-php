<?php
// This file was auto-generated
return [
//    'version' => '',
    'metadata' =>
    [
//        'apiVersion' => '',
//        'endpointPrefix' => 'jdrabbitmq',
        'protocol' => 'json',
//        'serviceFullName' => 'jdrabbitmq',
//        'serviceId' => 'jdrabbitmq',
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
        'StorageLimit' => [
            'type' => 'structure',
            'members' => [
                'storageScale' => [ 'type' => 'boolean', 'locationName' => 'storageScale', ],
                'constantStorageLimit' =>  [ 'shape' => 'ConstantStorageLimit', ],
                'flexibleStorageLimit' =>  [ 'shape' => 'FlexibleStorageLimit', ],
            ],
        ],
        'AzSpecConfig2' => [
            'type' => 'structure',
            'members' => [
                'onSale' => [ 'type' => 'boolean', 'locationName' => 'onSale', ],
                'azId' => [ 'type' => 'string', 'locationName' => 'azId', ],
                'archSpecConfig' => [ 'type' => 'list', 'member' => [ 'shape' => 'ArchSpecConfig', ], ],
            ],
        ],
        'ConstantStorageLimit' => [
            'type' => 'structure',
            'members' => [
                'diskGB' => [ 'type' => 'integer', 'locationName' => 'diskGB', ],
            ],
        ],
        'ArchSpecConfig' => [
            'type' => 'structure',
            'members' => [
                'archType' => [ 'type' => 'string', 'locationName' => 'archType', ],
                'onSale' => [ 'type' => 'boolean', 'locationName' => 'onSale', ],
                'nodeSpecConfig' => [ 'type' => 'list', 'member' => [ 'shape' => 'NodeSpecConfig', ], ],
            ],
        ],
        'NodeSpecConfig' => [
            'type' => 'structure',
            'members' => [
                'nodeType' => [ 'type' => 'string', 'locationName' => 'nodeType', ],
                'storageType' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'storageConfig' => [ 'type' => 'list', 'member' => [ 'shape' => 'StorageConfig', ], ],
            ],
        ],
        'StorageConfig' => [
            'type' => 'structure',
            'members' => [
                'onSale' => [ 'type' => 'boolean', 'locationName' => 'onSale', ],
                'storageType' => [ 'type' => 'string', 'locationName' => 'storageType', ],
                'flavorConfig' => [ 'type' => 'list', 'member' => [ 'shape' => 'FlavorConfig', ], ],
            ],
        ],
        'NodeCountLimit' => [
            'type' => 'structure',
            'members' => [
                'availableCount' => [ 'type' => 'integer', 'locationName' => 'availableCount', ],
                'minCount' => [ 'type' => 'integer', 'locationName' => 'minCount', ],
                'defaultCount' => [ 'type' => 'integer', 'locationName' => 'defaultCount', ],
                'stepCount' => [ 'type' => 'integer', 'locationName' => 'stepCount', ],
            ],
        ],
        'FlavorConfig' => [
            'type' => 'structure',
            'members' => [
                'onSale' => [ 'type' => 'boolean', 'locationName' => 'onSale', ],
                'instanceClassCode' => [ 'type' => 'string', 'locationName' => 'instanceClassCode', ],
                'cpu' => [ 'type' => 'integer', 'locationName' => 'cpu', ],
                'memoryGB' => [ 'type' => 'integer', 'locationName' => 'memoryGB', ],
                'storageLimit' =>  [ 'shape' => 'StorageLimit', ],
                'nodeCountLimit' =>  [ 'shape' => 'NodeCountLimit', ],
            ],
        ],
        'AzSpecConf2' => [
            'type' => 'structure',
            'members' => [
                'version' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'azSpecConfig' =>  [ 'shape' => 'AzSpecConfig2', ],
            ],
        ],
        'AzSpecConfig' => [
            'type' => 'structure',
            'members' => [
                'onSale' => [ 'type' => 'boolean', 'locationName' => 'onSale', ],
                'azId' => [ 'type' => 'string', 'locationName' => 'azId', ],
                'nodeSpecConfig' => [ 'type' => 'list', 'member' => [ 'shape' => 'NodeSpecConfig', ], ],
            ],
        ],
        'FlexibleStorageLimit' => [
            'type' => 'structure',
            'members' => [
                'minStorage' => [ 'type' => 'integer', 'locationName' => 'minStorage', ],
                'maxStorage' => [ 'type' => 'integer', 'locationName' => 'maxStorage', ],
                'defaultStorage' => [ 'type' => 'integer', 'locationName' => 'defaultStorage', ],
                'stepStorage' => [ 'type' => 'integer', 'locationName' => 'stepStorage', ],
            ],
        ],
        'AzSpecConf' => [
            'type' => 'structure',
            'members' => [
                'version' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'azSpecConfig' =>  [ 'shape' => 'AzSpecConfig', ],
            ],
        ],
        'SupportCrossAzNumber' => [
            'type' => 'structure',
            'members' => [
                'isSupportCross2Azs' => [ 'type' => 'boolean', 'locationName' => 'isSupportCross2Azs', ],
                'isSupportCross3Azs' => [ 'type' => 'boolean', 'locationName' => 'isSupportCross3Azs', ],
            ],
        ],
        'EndpointEntry' => [
            'type' => 'structure',
            'members' => [
                'protocol' => [ 'type' => 'string', 'locationName' => 'protocol', ],
                'address' => [ 'type' => 'string', 'locationName' => 'address', ],
            ],
        ],
        'ExternalEndpoint' => [
            'type' => 'structure',
            'members' => [
                'external' => [ 'type' => 'list', 'member' => [ 'shape' => 'EndpointEntry', ], ],
                'internal' => [ 'type' => 'list', 'member' => [ 'shape' => 'EndpointEntry', ], ],
            ],
        ],
        'ServiceSpec' => [
            'type' => 'structure',
            'members' => [
                'externalServiceType' => [ 'type' => 'string', 'locationName' => 'externalServiceType', ],
                'tls' => [ 'type' => 'boolean', 'locationName' => 'tls', ],
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
                'instanceDiskGB' => [ 'type' => 'integer', 'locationName' => 'instanceDiskGB', ],
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
        'RespExtension' => [
            'type' => 'structure',
            'members' => [
                'endpoints' =>  [ 'shape' => 'ExternalEndpoint', ],
                'serviceExposure' =>  [ 'shape' => 'ServiceExposure', ],
                'adminUrl' => [ 'type' => 'string', 'locationName' => 'adminUrl', ],
                'tlsEnabled' => [ 'type' => 'boolean', 'locationName' => 'tlsEnabled', ],
                'supportResetUser' => [ 'type' => 'boolean', 'locationName' => 'supportResetUser', ],
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
                'groupCode' => [ 'type' => 'string', 'locationName' => 'groupCode', ],
                'extension' =>  [ 'shape' => 'RespExtension', ],
            ],
        ],
        'ServiceExposure' => [
            'type' => 'structure',
            'members' => [
                'enabled' => [ 'type' => 'boolean', 'locationName' => 'enabled', ],
                'serviceType' => [ 'type' => 'string', 'locationName' => 'serviceType', ],
            ],
        ],
        'InstanceClassDetailListModel' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'integer', 'locationName' => 'id', ],
                'instanceClassCode' => [ 'type' => 'string', 'locationName' => 'instanceClassCode', ],
                'iaasFlavorCode' => [ 'type' => 'string', 'locationName' => 'iaasFlavorCode', ],
                'cpu' => [ 'type' => 'integer', 'locationName' => 'cpu', ],
                'memoryGb' => [ 'type' => 'integer', 'locationName' => 'memoryGb', ],
                'diskGb' => [ 'type' => 'integer', 'locationName' => 'diskGb', ],
                'storageType' => [ 'type' => 'string', 'locationName' => 'storageType', ],
                'nodeCount' => [ 'type' => 'integer', 'locationName' => 'nodeCount', ],
                'throughputMB' => [ 'type' => 'integer', 'locationName' => 'throughputMB', ],
                'version' => [ 'type' => 'string', 'locationName' => 'version', ],
                'cpuArch' => [ 'type' => 'string', 'locationName' => 'cpuArch', ],
                'createdAt' => [ 'type' => 'string', 'locationName' => 'createdAt', ],
                'updatedAt' => [ 'type' => 'string', 'locationName' => 'updatedAt', ],
            ],
        ],
        'InstanceClassDetail' => [
            'type' => 'structure',
            'members' => [
                'instanceClassCode' => [ 'type' => 'string', 'locationName' => 'instanceClassCode', ],
                'cpu' => [ 'type' => 'integer', 'locationName' => 'cpu', ],
                'memoryGB' => [ 'type' => 'integer', 'locationName' => 'memoryGB', ],
                'diskGB' => [ 'type' => 'integer', 'locationName' => 'diskGB', ],
                'throughputMB' => [ 'type' => 'integer', 'locationName' => 'throughputMB', ],
                'version' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'cpuArch' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
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
        'DefaultUser' => [
            'type' => 'structure',
            'members' => [
                'userName' => [ 'type' => 'string', 'locationName' => 'userName', ],
                'password' => [ 'type' => 'string', 'locationName' => 'password', ],
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
                'cpuArch' => [ 'type' => 'string', 'locationName' => 'cpuArch', ],
                'opsTags' => [ 'type' => 'list', 'member' => [ 'shape' => 'Tag', ], ],
                'userTags' => [ 'type' => 'list', 'member' => [ 'shape' => 'Tag', ], ],
            ],
        ],
        'ReqExtension' => [
            'type' => 'structure',
            'members' => [
                'defaultUser' =>  [ 'shape' => 'DefaultUser', ],
                'serviceExposure' =>  [ 'shape' => 'ServiceExposure', ],
                'tlsEnable' => [ 'type' => 'boolean', 'locationName' => 'tlsEnable', ],
            ],
        ],
        'InstanceSpecConfig' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'integer', 'locationName' => 'id', ],
                'resourceType' => [ 'type' => 'string', 'locationName' => 'resourceType', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'azId' => [ 'type' => 'string', 'locationName' => 'azId', ],
                'nodeType' => [ 'type' => 'string', 'locationName' => 'nodeType', ],
                'storageType' => [ 'type' => 'string', 'locationName' => 'storageType', ],
                'instanceClassCode' => [ 'type' => 'string', 'locationName' => 'instanceClassCode', ],
                'maxCount' => [ 'type' => 'integer', 'locationName' => 'maxCount', ],
                'minCount' => [ 'type' => 'integer', 'locationName' => 'minCount', ],
                'defaultCount' => [ 'type' => 'integer', 'locationName' => 'defaultCount', ],
                'countStep' => [ 'type' => 'integer', 'locationName' => 'countStep', ],
                'storageScale' => [ 'type' => 'boolean', 'locationName' => 'storageScale', ],
                'maxStorage' => [ 'type' => 'integer', 'locationName' => 'maxStorage', ],
                'minStorage' => [ 'type' => 'integer', 'locationName' => 'minStorage', ],
                'defaultStorage' => [ 'type' => 'integer', 'locationName' => 'defaultStorage', ],
                'storageStep' => [ 'type' => 'integer', 'locationName' => 'storageStep', ],
                'onSale' => [ 'type' => 'boolean', 'locationName' => 'onSale', ],
                'remark' => [ 'type' => 'string', 'locationName' => 'remark', ],
                'cpuArch' => [ 'type' => 'string', 'locationName' => 'cpuArch', ],
                'createdAt' => [ 'type' => 'string', 'locationName' => 'createdAt', ],
                'updatedAt' => [ 'type' => 'string', 'locationName' => 'updatedAt', ],
            ],
        ],
        'PluginChangeItem' => [
            'type' => 'structure',
            'members' => [
                'pluginName' => [ 'type' => 'string', 'locationName' => 'pluginName', ],
                'pluginEnabled' => [ 'type' => 'boolean', 'locationName' => 'pluginEnabled', ],
            ],
        ],
        'PluginListItem' => [
            'type' => 'structure',
            'members' => [
                'pluginName' => [ 'type' => 'string', 'locationName' => 'pluginName', ],
                'pluginEnabled' => [ 'type' => 'boolean', 'locationName' => 'pluginEnabled', ],
                'pluginDescription' => [ 'type' => 'string', 'locationName' => 'pluginDescription', ],
            ],
        ],
        'RegionSpecConfig' => [
            'type' => 'structure',
            'members' => [
                'version' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'azSpecConfig' => [ 'type' => 'list', 'member' => [ 'shape' => 'AzSpecConfig', ], ],
            ],
        ],
        'RegionSpecConfig2' => [
            'type' => 'structure',
            'members' => [
                'version' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'azSpecConfig' => [ 'type' => 'list', 'member' => [ 'shape' => 'AzSpecConfig2', ], ],
            ],
        ],
        'DiffItem' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'value' => [ 'type' => 'string', 'locationName' => 'value', ],
            ],
        ],
        'Step' => [
            'type' => 'structure',
            'members' => [
                'stepSeqId' => [ 'type' => 'integer', 'locationName' => 'stepSeqId', ],
                'stepName' => [ 'type' => 'string', 'locationName' => 'stepName', ],
                'stepStartTime' => [ 'type' => 'string', 'locationName' => 'stepStartTime', ],
                'stepEndTime' => [ 'type' => 'string', 'locationName' => 'stepEndTime', ],
                'stepStatus' => [ 'type' => 'string', 'locationName' => 'stepStatus', ],
                'stepDetailInfo' => [ 'type' => 'string', 'locationName' => 'stepDetailInfo', ],
            ],
        ],
        'TaskTypeListItem' => [
            'type' => 'structure',
            'members' => [
                'taskTypeEnglishName' => [ 'type' => 'string', 'locationName' => 'taskTypeEnglishName', ],
                'taskTypeChineseName' => [ 'type' => 'string', 'locationName' => 'taskTypeChineseName', ],
            ],
        ],
        'TaskBasicInfo' => [
            'type' => 'structure',
            'members' => [
                'taskStartTime' => [ 'type' => 'string', 'locationName' => 'taskStartTime', ],
                'taskEndTime' => [ 'type' => 'string', 'locationName' => 'taskEndTime', ],
                'user' => [ 'type' => 'string', 'locationName' => 'user', ],
                'subUser' => [ 'type' => 'string', 'locationName' => 'subUser', ],
                'taskStatus' => [ 'type' => 'string', 'locationName' => 'taskStatus', ],
            ],
        ],
        'TaskModifyInfo' => [
            'type' => 'structure',
            'members' => [
                'taskType' => [ 'type' => 'string', 'locationName' => 'taskType', ],
                'modifyDiffs' => [ 'type' => 'object', 'locationName' => 'modifyDiffs', ],
            ],
        ],
        'TaskDetail' => [
            'type' => 'structure',
            'members' => [
                'taskBasicInfo' =>  [ 'shape' => 'TaskBasicInfo', ],
                'taskModifyInfo' =>  [ 'shape' => 'TaskModifyInfo', ],
                'steps' => [ 'type' => 'list', 'member' => [ 'shape' => 'Step', ], ],
            ],
        ],
        'TaskListItem' => [
            'type' => 'structure',
            'members' => [
                'taskId' => [ 'type' => 'integer', 'locationName' => 'taskId', ],
                'taskStartTime' => [ 'type' => 'string', 'locationName' => 'taskStartTime', ],
                'taskType' => [ 'type' => 'string', 'locationName' => 'taskType', ],
                'taskOpType' => [ 'type' => 'integer', 'locationName' => 'taskOpType', ],
                'user' => [ 'type' => 'string', 'locationName' => 'user', ],
                'subUser' => [ 'type' => 'string', 'locationName' => 'subUser', ],
                'taskStatus' => [ 'type' => 'string', 'locationName' => 'taskStatus', ],
                'taskProgress' => [ 'type' => 'integer', 'locationName' => 'taskProgress', ],
                'taskTimeConsuming' => [ 'type' => 'integer', 'locationName' => 'taskTimeConsuming', ],
                'isTaskTimeConsumeContinueIncrease' => [ 'type' => 'boolean', 'locationName' => 'isTaskTimeConsumeContinueIncrease', ],
                'taskErrorInfo' => [ 'type' => 'string', 'locationName' => 'taskErrorInfo', ],
                'taskEndTime' => [ 'type' => 'string', 'locationName' => 'taskEndTime', ],
                'canInterruptTask' => [ 'type' => 'boolean', 'locationName' => 'canInterruptTask', ],
                'canRetryTask' => [ 'type' => 'boolean', 'locationName' => 'canRetryTask', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DescribeInstanceResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeInstanceResultShape', ],
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
        'CreateInstanceResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'CreateInstanceResultShape', ],
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
        'DescribeInstancesResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeInstancesResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'CreateInstanceResultShape' => [
            'type' => 'structure',
            'members' => [
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'buyId' => [ 'type' => 'string', 'locationName' => 'buyId', ],
            ],
        ],
        'DeleteInstanceResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DescribeInstanceRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
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
                'resourceGroupIds' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
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
        'ModifyInstanceSpecResultShape' => [
            'type' => 'structure',
            'members' => [
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'buyId' => [ 'type' => 'string', 'locationName' => 'buyId', ],
            ],
        ],
        'ModifyInstanceSpecResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'ModifyInstanceSpecResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DeleteInstanceRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'DescribeInstancesResultShape' => [
            'type' => 'structure',
            'members' => [
                'instances' => [ 'type' => 'list', 'member' => [ 'shape' => 'Instance', ], ],
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
            ],
        ],
        'DeleteInstanceResponseShape' => [
            'type' => 'structure',
            'members' => [
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
    ],
];
