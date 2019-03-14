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
        'ModuleEnroll' => [
            'name' => 'ModuleEnroll',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/module/{moduleName}/enroll',
            ],
            'input' => [ 'shape' => 'ModuleEnrollRequestShape', ],
            'output' => [ 'shape' => 'ModuleEnrollResponseShape', ],
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
        'DevicePageVo' => [
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
        'OnlineInfo' => [
            'type' => 'structure',
            'members' => [
                'deviceId' => [ 'type' => 'string', 'locationName' => 'deviceId', ],
                'online' => [ 'type' => 'integer', 'locationName' => 'online', ],
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
        'QueryDeviceStatesRequestShape' => [
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
        'ModuleEnrollResultShape' => [
            'type' => 'structure',
            'members' => [
                'data' => [ 'type' => 'string', 'locationName' => 'data', ],
            ],
        ],
        'ModuleEnrollRequestShape' => [
            'type' => 'structure',
            'members' => [
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'modelName' => [ 'type' => 'string', 'locationName' => 'modelName', ],
                'parentDeviceName' => [ 'type' => 'string', 'locationName' => 'parentDeviceName', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'moduleName' => [ 'type' => 'string', 'locationName' => 'moduleName', ],
            ],
        ],
        'ModuleStateResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'ModuleStateResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ModuleEnrollResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'ModuleEnrollResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ModuleStateResultShape' => [
            'type' => 'structure',
            'members' => [
                'data' => [ 'type' => 'string', 'locationName' => 'data', ],
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
