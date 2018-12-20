<?php
// This file was auto-generated
return [
//    'version' => '',
    'metadata' =>
    [
//        'apiVersion' => '',
//        'endpointPrefix' => 'function',
        'protocol' => 'json',
//        'serviceFullName' => 'function',
//        'serviceId' => 'function',
    ],
    'operations' => [
        'GetTrigger' => [
            'name' => 'GetTrigger',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/functions/{functionName}/versions/{versionName}:gettrigger',
            ],
            'input' => [ 'shape' => 'GetTriggerRequestShape', ],
            'output' => [ 'shape' => 'GetTriggerResponseShape', ],
        ],
        'ListTrigger' => [
            'name' => 'ListTrigger',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/functions/{functionName}/versions/{versionName}:innerlisttriggers',
            ],
            'input' => [ 'shape' => 'ListTriggerRequestShape', ],
            'output' => [ 'shape' => 'ListTriggerResponseShape', ],
        ],
    ],
    'shapes' => [
        'Alias' => [
            'type' => 'structure',
            'members' => [
                'aliasId' => [ 'type' => 'string', 'locationName' => 'aliasId', ],
                'aliasName' => [ 'type' => 'string', 'locationName' => 'aliasName', ],
                'functionName' => [ 'type' => 'string', 'locationName' => 'functionName', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'version' => [ 'type' => 'string', 'locationName' => 'version', ],
            ],
        ],
        'Flavor' => [
            'type' => 'structure',
            'members' => [
                'flavorKey' => [ 'type' => 'string', 'locationName' => 'flavorKey', ],
                'cpu' => [ 'type' => 'integer', 'locationName' => 'cpu', ],
                'memory' => [ 'type' => 'integer', 'locationName' => 'memory', ],
                'disk' => [ 'type' => 'integer', 'locationName' => 'disk', ],
            ],
        ],
        'Env' => [
            'type' => 'structure',
            'members' => [
                'data' => [ 'type' => 'object', 'locationName' => 'data', ],
            ],
        ],
        'FunctionSpec' => [
            'type' => 'structure',
            'members' => [
                'functionId' => [ 'type' => 'string', 'locationName' => 'functionId', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'runtime' => [ 'type' => 'string', 'locationName' => 'runtime', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'updateTime' => [ 'type' => 'string', 'locationName' => 'updateTime', ],
                'version' => [ 'type' => 'string', 'locationName' => 'version', ],
                'downloadUrl' => [ 'type' => 'string', 'locationName' => 'downloadUrl', ],
            ],
        ],
        'Function' => [
            'type' => 'structure',
            'members' => [
                'functionId' => [ 'type' => 'string', 'locationName' => 'functionId', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'entrance' => [ 'type' => 'string', 'locationName' => 'entrance', ],
                'memory' => [ 'type' => 'integer', 'locationName' => 'memory', ],
                'runTime' => [ 'type' => 'string', 'locationName' => 'runTime', ],
                'overTime' => [ 'type' => 'integer', 'locationName' => 'overTime', ],
                'version' => [ 'type' => 'string', 'locationName' => 'version', ],
                'code' =>  [ 'shape' => 'Code', ],
                'environment' =>  [ 'shape' => 'Env', ],
                'logSetId' => [ 'type' => 'string', 'locationName' => 'logSetId', ],
                'logTopicId' => [ 'type' => 'string', 'locationName' => 'logTopicId', ],
                'codeCheckSum' => [ 'type' => 'string', 'locationName' => 'codeCheckSum', ],
                'codeSize' => [ 'type' => 'integer', 'locationName' => 'codeSize', ],
                'downloadUrl' => [ 'type' => 'string', 'locationName' => 'downloadUrl', ],
                'vpcId' => [ 'type' => 'string', 'locationName' => 'vpcId', ],
                'subnetId' => [ 'type' => 'string', 'locationName' => 'subnetId', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'updateTime' => [ 'type' => 'string', 'locationName' => 'updateTime', ],
            ],
        ],
        'Code' => [
            'type' => 'structure',
            'members' => [
                'zipFile' => [ 'type' => 'string', 'locationName' => 'zipFile', ],
                'onlineCode' => [ 'type' => 'string', 'locationName' => 'onlineCode', ],
                'bucketName' => [ 'type' => 'string', 'locationName' => 'bucketName', ],
                'objectName' => [ 'type' => 'string', 'locationName' => 'objectName', ],
            ],
        ],
        'Statistics' => [
            'type' => 'structure',
            'members' => [
                'currentFunctionNumber' => [ 'type' => 'integer', 'locationName' => 'currentFunctionNumber', ],
                'maxFunctionNumber' => [ 'type' => 'integer', 'locationName' => 'maxFunctionNumber', ],
                'currentCodeSize' => [ 'type' => 'float', 'locationName' => 'currentCodeSize', ],
                'maxCodeSize' => [ 'type' => 'integer', 'locationName' => 'maxCodeSize', ],
            ],
        ],
        'Trigger' => [
            'type' => 'structure',
            'members' => [
                'triggerId' => [ 'type' => 'string', 'locationName' => 'triggerId', ],
                'functionName' => [ 'type' => 'string', 'locationName' => 'functionName', ],
                'versionName' => [ 'type' => 'string', 'locationName' => 'versionName', ],
                'eventSource' => [ 'type' => 'string', 'locationName' => 'eventSource', ],
                'eventSourceId' => [ 'type' => 'string', 'locationName' => 'eventSourceId', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'updateTime' => [ 'type' => 'string', 'locationName' => 'updateTime', ],
            ],
        ],
        'FunctionInvokeResult' => [
            'type' => 'structure',
            'members' => [
                'result' => [ 'type' => 'string', 'locationName' => 'result', ],
                'codeCheckSum' => [ 'type' => 'string', 'locationName' => 'codeCheckSum', ],
                'invokeTime' => [ 'type' => 'double', 'locationName' => 'invokeTime', ],
                'billingTime' => [ 'type' => 'double', 'locationName' => 'billingTime', ],
                'setupMem' => [ 'type' => 'double', 'locationName' => 'setupMem', ],
                'realMem' => [ 'type' => 'double', 'locationName' => 'realMem', ],
                'logStr' => [ 'type' => 'string', 'locationName' => 'logStr', ],
            ],
        ],
        'ListTriggerResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'ListTriggerResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'GetTriggerResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GetTriggerResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'GetTriggerRequestShape' => [
            'type' => 'structure',
            'members' => [
                'triggerId' => [ 'type' => 'string', 'locationName' => 'triggerId', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'functionName' => [ 'type' => 'string', 'locationName' => 'functionName', ],
                'versionName' => [ 'type' => 'string', 'locationName' => 'versionName', ],
            ],
        ],
        'ListTriggerRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'functionName' => [ 'type' => 'string', 'locationName' => 'functionName', ],
                'versionName' => [ 'type' => 'string', 'locationName' => 'versionName', ],
            ],
        ],
        'GetTriggerResultShape' => [
            'type' => 'structure',
            'members' => [
                'data' =>  [ 'shape' => 'Trigger', ],
            ],
        ],
        'ListTriggerResultShape' => [
            'type' => 'structure',
            'members' => [
                'data' => [ 'type' => 'list', 'member' => [ 'shape' => 'Trigger', ], ],
            ],
        ],
    ],
];
