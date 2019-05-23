<?php
// This file was auto-generated
return [
//    'version' => '',
    'metadata' =>
    [
//        'apiVersion' => '',
//        'endpointPrefix' => 'iothub',
        'protocol' => 'json',
//        'serviceFullName' => 'iothub',
//        'serviceId' => 'iothub',
    ],
    'operations' => [
        'DeleteDevice' => [
            'name' => 'DeleteDevice',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/device',
            ],
            'input' => [ 'shape' => 'DeleteDeviceRequestShape', ],
            'output' => [ 'shape' => 'DeleteDeviceResponseShape', ],
        ],
        'QueryDeviceOnlineInfos' => [
            'name' => 'QueryDeviceOnlineInfos',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/device:queryOnlineInfos',
            ],
            'input' => [ 'shape' => 'QueryDeviceOnlineInfosRequestShape', ],
            'output' => [ 'shape' => 'QueryDeviceOnlineInfosResponseShape', ],
        ],
        'DeviceActivate' => [
            'name' => 'DeviceActivate',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/device/{deviceId}/activate',
            ],
            'input' => [ 'shape' => 'DeviceActivateRequestShape', ],
            'output' => [ 'shape' => 'DeviceActivateResponseShape', ],
        ],
        'DevicesEnroll' => [
            'name' => 'DevicesEnroll',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/device',
            ],
            'input' => [ 'shape' => 'DevicesEnrollRequestShape', ],
            'output' => [ 'shape' => 'DevicesEnrollResponseShape', ],
        ],
        'QueryDeviceCommands' => [
            'name' => 'QueryDeviceCommands',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/device/{deviceId}/command',
            ],
            'input' => [ 'shape' => 'QueryDeviceCommandsRequestShape', ],
            'output' => [ 'shape' => 'QueryDeviceCommandsResponseShape', ],
        ],
        'DeviceCommand' => [
            'name' => 'DeviceCommand',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/device/{deviceId}/command',
            ],
            'input' => [ 'shape' => 'DeviceCommandRequestShape', ],
            'output' => [ 'shape' => 'DeviceCommandResponseShape', ],
        ],
        'QueryDeviceStates' => [
            'name' => 'QueryDeviceStates',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/device/{deviceId}/state',
            ],
            'input' => [ 'shape' => 'QueryDeviceStatesRequestShape', ],
            'output' => [ 'shape' => 'QueryDeviceStatesResponseShape', ],
        ],
        'DeviceState' => [
            'name' => 'DeviceState',
            'http' => [
                'method' => 'PUT',
                'requestUri' => '/v1/device/{deviceId}/state',
            ],
            'input' => [ 'shape' => 'DeviceStateRequestShape', ],
            'output' => [ 'shape' => 'DeviceStateResponseShape', ],
        ],
        'CheckDeviceId' => [
            'name' => 'CheckDeviceId',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/device/{deviceId}:check',
            ],
            'input' => [ 'shape' => 'CheckDeviceIdRequestShape', ],
            'output' => [ 'shape' => 'CheckDeviceIdResponseShape', ],
        ],
        'EdgeEnroll' => [
            'name' => 'EdgeEnroll',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/edge/{edgeId}',
            ],
            'input' => [ 'shape' => 'EdgeEnrollRequestShape', ],
            'output' => [ 'shape' => 'EdgeEnrollResponseShape', ],
        ],
        'DeleteEdge' => [
            'name' => 'DeleteEdge',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/edge/{edgeId}',
            ],
            'input' => [ 'shape' => 'DeleteEdgeRequestShape', ],
            'output' => [ 'shape' => 'DeleteEdgeResponseShape', ],
        ],
        'DeleteModule' => [
            'name' => 'DeleteModule',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/edge/{edgeId}/module/{moduleId}',
            ],
            'input' => [ 'shape' => 'DeleteModuleRequestShape', ],
            'output' => [ 'shape' => 'DeleteModuleResponseShape', ],
        ],
        'DeployModule' => [
            'name' => 'DeployModule',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/edge/{edgeId}/module/{moduleId}:deploy',
            ],
            'input' => [ 'shape' => 'DeployModuleRequestShape', ],
            'output' => [ 'shape' => 'DeployModuleResponseShape', ],
        ],
        'ModuleEnroll' => [
            'name' => 'ModuleEnroll',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/edge/{edgeId}/module:enroll',
            ],
            'input' => [ 'shape' => 'ModuleEnrollRequestShape', ],
            'output' => [ 'shape' => 'ModuleEnrollResponseShape', ],
        ],
        'ModuleEnrollment' => [
            'name' => 'ModuleEnrollment',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/module/{moduleName}/enroll',
            ],
            'input' => [ 'shape' => 'ModuleEnrollmentRequestShape', ],
            'output' => [ 'shape' => 'ModuleEnrollmentResponseShape', ],
        ],
        'ModuleState' => [
            'name' => 'ModuleState',
            'http' => [
                'method' => 'PUT',
                'requestUri' => '/v1/module/{moduleName}/state',
            ],
            'input' => [ 'shape' => 'ModuleStateRequestShape', ],
            'output' => [ 'shape' => 'ModuleStateResponseShape', ],
        ],
        'GetOMPrivateURL' => [
            'name' => 'GetOMPrivateURL',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/om/{deviceId}/privateurl',
            ],
            'input' => [ 'shape' => 'GetOMPrivateURLRequestShape', ],
            'output' => [ 'shape' => 'GetOMPrivateURLResponseShape', ],
        ],
        'OmEnrollbyFile' => [
            'name' => 'OmEnrollbyFile',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/file/{fileName}/om',
            ],
            'input' => [ 'shape' => 'OmEnrollbyFileRequestShape', ],
            'output' => [ 'shape' => 'OmEnrollbyFileResponseShape', ],
        ],
        'OmEnroll' => [
            'name' => 'OmEnroll',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/om/{omName}',
            ],
            'input' => [ 'shape' => 'OmEnrollRequestShape', ],
            'output' => [ 'shape' => 'OmEnrollResponseShape', ],
        ],
    ],
    'shapes' => [
        'BatchData' => [
            'type' => 'structure',
            'members' => [
                'method' => [ 'type' => 'string', 'locationName' => 'method', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'DeviceCommandVO' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'inputData' => [ 'type' => 'string', 'locationName' => 'inputData', ],
            ],
        ],
        'OnlineInfo' => [
            'type' => 'structure',
            'members' => [
                'deviceId' => [ 'type' => 'string', 'locationName' => 'deviceId', ],
                'online' => [ 'type' => 'integer', 'locationName' => 'online', ],
                'lastConnectTime' => [ 'type' => 'string', 'locationName' => 'lastConnectTime', ],
            ],
        ],
        'DescribeDevicePageVo' => [
            'type' => 'structure',
            'members' => [
                'uuid' => [ 'type' => 'string', 'locationName' => 'uuid', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'deviceId' => [ 'type' => 'string', 'locationName' => 'deviceId', ],
                'displayName' => [ 'type' => 'string', 'locationName' => 'displayName', ],
                'deviceType' => [ 'type' => 'string', 'locationName' => 'deviceType', ],
                'deviceState' => [ 'type' => 'string', 'locationName' => 'deviceState', ],
                'omId' => [ 'type' => 'string', 'locationName' => 'omId', ],
                'deviceFilePath' => [ 'type' => 'string', 'locationName' => 'deviceFilePath', ],
                'omName' => [ 'type' => 'string', 'locationName' => 'omName', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'userPin' => [ 'type' => 'string', 'locationName' => 'userPin', ],
                'parentUuid' => [ 'type' => 'string', 'locationName' => 'parentUuid', ],
                'parentName' => [ 'type' => 'string', 'locationName' => 'parentName', ],
                'lastConnectTime' => [ 'type' => 'string', 'locationName' => 'lastConnectTime', ],
            ],
        ],
        'DeviceEnrollVO' => [
            'type' => 'structure',
            'members' => [
                'deviceIds' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'modelName' => [ 'type' => 'string', 'locationName' => 'modelName', ],
                'deviceType' => [ 'type' => 'integer', 'locationName' => 'deviceType', ],
                'parentDeviceName' => [ 'type' => 'string', 'locationName' => 'parentDeviceName', ],
            ],
        ],
        'ChildDevices' => [
            'type' => 'structure',
            'members' => [
                'deviceId' => [ 'type' => 'string', 'locationName' => 'deviceId', ],
                'deviceName' => [ 'type' => 'string', 'locationName' => 'deviceName', ],
                'deviceServiceName' => [ 'type' => 'string', 'locationName' => 'deviceServiceName', ],
                'online' => [ 'type' => 'string', 'locationName' => 'online', ],
            ],
        ],
        'ChildModules' => [
            'type' => 'structure',
            'members' => [
                'moduleId' => [ 'type' => 'string', 'locationName' => 'moduleId', ],
                'moduleName' => [ 'type' => 'string', 'locationName' => 'moduleName', ],
                'moduleTypeVersion' => [ 'type' => 'string', 'locationName' => 'moduleTypeVersion', ],
                'omName' => [ 'type' => 'string', 'locationName' => 'omName', ],
                'omDesc' => [ 'type' => 'string', 'locationName' => 'omDesc', ],
                'moduleState' => [ 'type' => 'string', 'locationName' => 'moduleState', ],
            ],
        ],
        'EdgeInfoVO' => [
            'type' => 'structure',
            'members' => [
                'uuid' => [ 'type' => 'string', 'locationName' => 'uuid', ],
                'edgeId' => [ 'type' => 'string', 'locationName' => 'edgeId', ],
                'edgeName' => [ 'type' => 'string', 'locationName' => 'edgeName', ],
                'edgeStatus' => [ 'type' => 'integer', 'locationName' => 'edgeStatus', ],
                'edgeDesc' => [ 'type' => 'string', 'locationName' => 'edgeDesc', ],
                'edgeVersion' => [ 'type' => 'string', 'locationName' => 'edgeVersion', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'lastOnlineTime' => [ 'type' => 'string', 'locationName' => 'lastOnlineTime', ],
                'lastTurnOnTime' => [ 'type' => 'string', 'locationName' => 'lastTurnOnTime', ],
                'iothubInstanceId' => [ 'type' => 'string', 'locationName' => 'iothubInstanceId', ],
                'iothubInstanceName' => [ 'type' => 'string', 'locationName' => 'iothubInstanceName', ],
            ],
        ],
        'EdgePageVo' => [
            'type' => 'structure',
            'members' => [
                'edgeId' => [ 'type' => 'string', 'locationName' => 'edgeId', ],
                'edgeName' => [ 'type' => 'string', 'locationName' => 'edgeName', ],
                'edgeState' => [ 'type' => 'string', 'locationName' => 'edgeState', ],
                'omName' => [ 'type' => 'string', 'locationName' => 'omName', ],
                'lastOnlineTime' => [ 'type' => 'string', 'locationName' => 'lastOnlineTime', ],
            ],
        ],
        'ModulePageVo' => [
            'type' => 'structure',
            'members' => [
                'uuid' => [ 'type' => 'string', 'locationName' => 'uuid', ],
                'moduleId' => [ 'type' => 'string', 'locationName' => 'moduleId', ],
                'moduleName' => [ 'type' => 'string', 'locationName' => 'moduleName', ],
                'deviceId' => [ 'type' => 'string', 'locationName' => 'deviceId', ],
                'deviceName' => [ 'type' => 'string', 'locationName' => 'deviceName', ],
                'deviceType' => [ 'type' => 'integer', 'locationName' => 'deviceType', ],
                'moduleStatus' => [ 'type' => 'integer', 'locationName' => 'moduleStatus', ],
                'moduleTypeVersion' => [ 'type' => 'string', 'locationName' => 'moduleTypeVersion', ],
            ],
        ],
        'OmPropVo' => [
            'type' => 'structure',
            'members' => [
                'uuid' => [ 'type' => 'string', 'locationName' => 'uuid', ],
                'omId' => [ 'type' => 'string', 'locationName' => 'omId', ],
                'omName' => [ 'type' => 'string', 'locationName' => 'omName', ],
                'attrName' => [ 'type' => 'string', 'locationName' => 'attrName', ],
                'attrText' => [ 'type' => 'string', 'locationName' => 'attrText', ],
                'attrType' => [ 'type' => 'string', 'locationName' => 'attrType', ],
                'userPin' => [ 'type' => 'string', 'locationName' => 'userPin', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'InstanceDetailVO' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'subNetId' => [ 'type' => 'string', 'locationName' => 'subNetId', ],
                'subNetName' => [ 'type' => 'string', 'locationName' => 'subNetName', ],
                'vpcId' => [ 'type' => 'string', 'locationName' => 'vpcId', ],
                'vpcName' => [ 'type' => 'string', 'locationName' => 'vpcName', ],
                'azName' => [ 'type' => 'string', 'locationName' => 'azName', ],
                'pubDomain' => [ 'type' => 'string', 'locationName' => 'pubDomain', ],
                'priDomain' => [ 'type' => 'string', 'locationName' => 'priDomain', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'region' => [ 'type' => 'string', 'locationName' => 'region', ],
                'rdsInstanceId' => [ 'type' => 'string', 'locationName' => 'rdsInstanceId', ],
                'rdsDatabase' => [ 'type' => 'string', 'locationName' => 'rdsDatabase', ],
                'rdsHostName' => [ 'type' => 'string', 'locationName' => 'rdsHostName', ],
                'rdsUserName' => [ 'type' => 'string', 'locationName' => 'rdsUserName', ],
                'jcqId' => [ 'type' => 'string', 'locationName' => 'jcqId', ],
                'jcqAccessPoint' => [ 'type' => 'string', 'locationName' => 'jcqAccessPoint', ],
                'jcqTopicName' => [ 'type' => 'string', 'locationName' => 'jcqTopicName', ],
                'jcqTopicType' => [ 'type' => 'string', 'locationName' => 'jcqTopicType', ],
                'jcqRegion' => [ 'type' => 'string', 'locationName' => 'jcqRegion', ],
                'ak' => [ 'type' => 'string', 'locationName' => 'ak', ],
                'sk' => [ 'type' => 'string', 'locationName' => 'sk', ],
            ],
        ],
        'PageinfoVO' => [
            'type' => 'structure',
            'members' => [
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'nowPage' => [ 'type' => 'integer', 'locationName' => 'nowPage', ],
                'totalSize' => [ 'type' => 'integer', 'locationName' => 'totalSize', ],
                'totalPage' => [ 'type' => 'integer', 'locationName' => 'totalPage', ],
            ],
        ],
        'HubInstanceBo' => [
            'type' => 'structure',
            'members' => [
                'instanceUuid' => [ 'type' => 'string', 'locationName' => 'instanceUuid', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'instanceName' => [ 'type' => 'string', 'locationName' => 'instanceName', ],
                'region' => [ 'type' => 'string', 'locationName' => 'region', ],
            ],
        ],
        'DataVO' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'subNetId' => [ 'type' => 'string', 'locationName' => 'subNetId', ],
                'subNetName' => [ 'type' => 'string', 'locationName' => 'subNetName', ],
                'vpcId' => [ 'type' => 'string', 'locationName' => 'vpcId', ],
                'vpcName' => [ 'type' => 'string', 'locationName' => 'vpcName', ],
                'azName' => [ 'type' => 'string', 'locationName' => 'azName', ],
                'pubDomain' => [ 'type' => 'string', 'locationName' => 'pubDomain', ],
                'priDomain' => [ 'type' => 'string', 'locationName' => 'priDomain', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'feetype' => [ 'type' => 'string', 'locationName' => 'feetype', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'RuleBaseInfo' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'desc' => [ 'type' => 'string', 'locationName' => 'desc', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'createdTime' => [ 'type' => 'string', 'locationName' => 'createdTime', ],
            ],
        ],
        'Action' => [
            'type' => 'structure',
            'members' => [
                'actionId' => [ 'type' => 'string', 'locationName' => 'actionId', ],
                'actionType' => [ 'type' => 'string', 'locationName' => 'actionType', ],
                'operationType' => [ 'type' => 'string', 'locationName' => 'operationType', ],
                'configuration' => [ 'type' => 'object', 'locationName' => 'configuration', ],
            ],
        ],
        'DevicePageVo' => [
            'type' => 'structure',
            'members' => [
                'uuid' => [ 'type' => 'string', 'locationName' => 'uuid', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'resourceId' => [ 'type' => 'string', 'locationName' => 'resourceId', ],
                'edgeId' => [ 'type' => 'string', 'locationName' => 'edgeId', ],
                'edgeName' => [ 'type' => 'string', 'locationName' => 'edgeName', ],
                'edgeState' => [ 'type' => 'string', 'locationName' => 'edgeState', ],
                'omId' => [ 'type' => 'string', 'locationName' => 'omId', ],
                'omName' => [ 'type' => 'string', 'locationName' => 'omName', ],
                'lastOnlineTime' => [ 'type' => 'string', 'locationName' => 'lastOnlineTime', ],
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
        'QueryDeviceOnlineInfosRequestShape' => [
            'type' => 'structure',
            'members' => [
                'deviceIds' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'DeleteDeviceResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DeleteDeviceResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'QueryDeviceOnlineInfosResultShape' => [
            'type' => 'structure',
            'members' => [
                'onlineInfos' => [ 'type' => 'list', 'member' => [ 'shape' => 'OnlineInfo', ], ],
            ],
        ],
        'DeleteDeviceRequestShape' => [
            'type' => 'structure',
            'members' => [
                'deviceId' => [ 'type' => 'string', 'locationName' => 'deviceId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'QueryDeviceOnlineInfosResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'QueryDeviceOnlineInfosResultShape', ],
            ],
        ],
        'DevicesEnrollRequestShape' => [
            'type' => 'structure',
            'members' => [
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'device' =>  [ 'shape' => 'DeviceEnrollVO', ],
            ],
        ],
        'DeviceCommandResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DeviceCommandResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'CheckDeviceIdResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'QueryDeviceStatesRequestShape' => [
            'type' => 'structure',
            'members' => [
                'deviceId' => [ 'type' => 'string', 'locationName' => 'deviceId', ],
            ],
        ],
        'CheckDeviceIdRequestShape' => [
            'type' => 'structure',
            'members' => [
                'deviceId' => [ 'type' => 'string', 'locationName' => 'deviceId', ],
            ],
        ],
        'DevicesEnrollResultShape' => [
            'type' => 'structure',
            'members' => [
                'data' => [ 'type' => 'string', 'locationName' => 'data', ],
            ],
        ],
        'CheckDeviceIdResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DeviceCommandRequestShape' => [
            'type' => 'structure',
            'members' => [
                'commands' =>  [ 'shape' => 'DeviceCommandVO', ],
                'deviceId' => [ 'type' => 'string', 'locationName' => 'deviceId', ],
            ],
        ],
        'DevicesEnrollResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DevicesEnrollResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'QueryDeviceCommandsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'deviceId' => [ 'type' => 'string', 'locationName' => 'deviceId', ],
            ],
        ],
        'DeviceStateRequestShape' => [
            'type' => 'structure',
            'members' => [
                'states' => [ 'type' => 'string', 'locationName' => 'states', ],
                'deviceId' => [ 'type' => 'string', 'locationName' => 'deviceId', ],
            ],
        ],
        'DeviceActivateRequestShape' => [
            'type' => 'structure',
            'members' => [
                'deviceId' => [ 'type' => 'string', 'locationName' => 'deviceId', ],
            ],
        ],
        'DeviceStateResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DeviceStateResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'QueryDeviceStatesResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'QueryDeviceStatesResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DeviceActivateResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DeviceActivateResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DeviceCommandResultShape' => [
            'type' => 'structure',
            'members' => [
                'data' => [ 'type' => 'string', 'locationName' => 'data', ],
            ],
        ],
        'DeviceActivateResultShape' => [
            'type' => 'structure',
            'members' => [
                'data' => [ 'type' => 'string', 'locationName' => 'data', ],
            ],
        ],
        'QueryDeviceCommandsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'QueryDeviceCommandsResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'QueryDeviceCommandsResultShape' => [
            'type' => 'structure',
            'members' => [
                'commands' => [ 'type' => 'string', 'locationName' => 'commands', ],
            ],
        ],
        'QueryDeviceStatesResultShape' => [
            'type' => 'structure',
            'members' => [
                'state' => [ 'type' => 'string', 'locationName' => 'state', ],
            ],
        ],
        'DeviceStateResultShape' => [
            'type' => 'structure',
            'members' => [
                'data' => [ 'type' => 'string', 'locationName' => 'data', ],
            ],
        ],
        'DeleteModuleRequestShape' => [
            'type' => 'structure',
            'members' => [
                'edgeId' => [ 'type' => 'string', 'locationName' => 'edgeId', ],
                'moduleId' => [ 'type' => 'string', 'locationName' => 'moduleId', ],
            ],
        ],
        'DeployModuleRequestShape' => [
            'type' => 'structure',
            'members' => [
                'edgeId' => [ 'type' => 'string', 'locationName' => 'edgeId', ],
                'moduleId' => [ 'type' => 'string', 'locationName' => 'moduleId', ],
            ],
        ],
        'DeployModuleResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ModuleEnrollResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ModuleEnrollResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DeployModuleResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'EdgeEnrollResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DeleteEdgeRequestShape' => [
            'type' => 'structure',
            'members' => [
                'edgeId' => [ 'type' => 'string', 'locationName' => 'edgeId', ],
            ],
        ],
        'DeleteModuleResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ModuleEnrollRequestShape' => [
            'type' => 'structure',
            'members' => [
                'deviceId' => [ 'type' => 'string', 'locationName' => 'deviceId', ],
                'moduleId' => [ 'type' => 'string', 'locationName' => 'moduleId', ],
                'moduleTypeId' => [ 'type' => 'string', 'locationName' => 'moduleTypeId', ],
                'moduleConfId' => [ 'type' => 'string', 'locationName' => 'moduleConfId', ],
                'isDeploy' => [ 'type' => 'integer', 'locationName' => 'isDeploy', ],
                'edgeId' => [ 'type' => 'string', 'locationName' => 'edgeId', ],
            ],
        ],
        'EdgeEnrollRequestShape' => [
            'type' => 'structure',
            'members' => [
                'edgeName' => [ 'type' => 'string', 'locationName' => 'edgeName', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'os' => [ 'type' => 'string', 'locationName' => 'os', ],
                'hardware' => [ 'type' => 'string', 'locationName' => 'hardware', ],
                'edgeDesc' => [ 'type' => 'string', 'locationName' => 'edgeDesc', ],
                'edgeId' => [ 'type' => 'string', 'locationName' => 'edgeId', ],
            ],
        ],
        'DeleteEdgeResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DeleteEdgeResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'EdgeEnrollResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DeleteModuleResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'ModuleEnrollmentResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'ModuleEnrollmentResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ModuleEnrollmentResultShape' => [
            'type' => 'structure',
            'members' => [
                'data' => [ 'type' => 'string', 'locationName' => 'data', ],
            ],
        ],
        'ModuleStateResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'ModuleStateResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ModuleStateResultShape' => [
            'type' => 'structure',
            'members' => [
                'data' => [ 'type' => 'string', 'locationName' => 'data', ],
            ],
        ],
        'ModuleEnrollmentRequestShape' => [
            'type' => 'structure',
            'members' => [
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'modelName' => [ 'type' => 'string', 'locationName' => 'modelName', ],
                'parentDeviceName' => [ 'type' => 'string', 'locationName' => 'parentDeviceName', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'moduleName' => [ 'type' => 'string', 'locationName' => 'moduleName', ],
            ],
        ],
        'ModuleStateRequestShape' => [
            'type' => 'structure',
            'members' => [
                'states' => [ 'type' => 'string', 'locationName' => 'states', ],
                'moduleName' => [ 'type' => 'string', 'locationName' => 'moduleName', ],
            ],
        ],
        'OmEnrollbyFileRequestShape' => [
            'type' => 'structure',
            'members' => [
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'fileName' => [ 'type' => 'string', 'locationName' => 'fileName', ],
            ],
        ],
        'OmEnrollbyFileResultShape' => [
            'type' => 'structure',
            'members' => [
                'data' => [ 'type' => 'string', 'locationName' => 'data', ],
            ],
        ],
        'OmEnrollResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'OmEnrollResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'GetOMPrivateURLResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GetOMPrivateURLResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'OmEnrollbyFileResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'OmEnrollbyFileResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'OmEnrollRequestShape' => [
            'type' => 'structure',
            'members' => [
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'payload' => [ 'type' => 'string', 'locationName' => 'payload', ],
                'omName' => [ 'type' => 'string', 'locationName' => 'omName', ],
            ],
        ],
        'GetOMPrivateURLResultShape' => [
            'type' => 'structure',
            'members' => [
                'privateUrl' => [ 'type' => 'string', 'locationName' => 'privateUrl', ],
            ],
        ],
        'GetOMPrivateURLRequestShape' => [
            'type' => 'structure',
            'members' => [
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'deviceId' => [ 'type' => 'string', 'locationName' => 'deviceId', ],
            ],
        ],
        'OmEnrollResultShape' => [
            'type' => 'structure',
            'members' => [
                'data' => [ 'type' => 'string', 'locationName' => 'data', ],
            ],
        ],
    ],
];
