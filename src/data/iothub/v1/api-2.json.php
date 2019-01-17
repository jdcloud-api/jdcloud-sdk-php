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
        'DeviceCommand' => [
            'name' => 'DeviceCommand',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/device/{deviceId}/command',
            ],
            'input' => [ 'shape' => 'DeviceCommandRequestShape', ],
            'output' => [ 'shape' => 'DeviceCommandResponseShape', ],
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
        'DeviceCommandVO' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'inputData' => [ 'type' => 'string', 'locationName' => 'inputData', ],
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
                'jcqAccessPoint' => [ 'type' => 'string', 'locationName' => 'jcqAccessPoint', ],
                'jcqTopicName' => [ 'type' => 'string', 'locationName' => 'jcqTopicName', ],
                'jcqTopicType' => [ 'type' => 'string', 'locationName' => 'jcqTopicType', ],
                'jcqRegion' => [ 'type' => 'string', 'locationName' => 'jcqRegion', ],
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
        'OmEnrollResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'OmEnrollResultShape', ],
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
        'OmEnrollResultShape' => [
            'type' => 'structure',
            'members' => [
                'data' => [ 'type' => 'string', 'locationName' => 'data', ],
            ],
        ],
    ],
];
