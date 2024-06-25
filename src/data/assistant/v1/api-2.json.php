<?php
// This file was auto-generated
return [
//    'version' => '',
    'metadata' =>
    [
//        'apiVersion' => '',
//        'endpointPrefix' => 'assistant',
        'protocol' => 'json',
//        'serviceFullName' => 'assistant',
//        'serviceId' => 'assistant',
    ],
    'operations' => [
        'CreateCommand' => [
            'name' => 'CreateCommand',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/createCommand',
            ],
            'input' => [ 'shape' => 'CreateCommandRequestShape', ],
            'output' => [ 'shape' => 'CreateCommandResponseShape', ],
        ],
        'DescribeCommands' => [
            'name' => 'DescribeCommands',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/describeCommands',
            ],
            'input' => [ 'shape' => 'DescribeCommandsRequestShape', ],
            'output' => [ 'shape' => 'DescribeCommandsResponseShape', ],
        ],
        'DeleteCommands' => [
            'name' => 'DeleteCommands',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/deleteCommands',
            ],
            'input' => [ 'shape' => 'DeleteCommandsRequestShape', ],
            'output' => [ 'shape' => 'DeleteCommandsResponseShape', ],
        ],
        'InvokeCommand' => [
            'name' => 'InvokeCommand',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/invokeCommand',
            ],
            'input' => [ 'shape' => 'InvokeCommandRequestShape', ],
            'output' => [ 'shape' => 'InvokeCommandResponseShape', ],
        ],
        'DescribeInvocations' => [
            'name' => 'DescribeInvocations',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/describeInvocations',
            ],
            'input' => [ 'shape' => 'DescribeInvocationsRequestShape', ],
            'output' => [ 'shape' => 'DescribeInvocationsResponseShape', ],
        ],
        'AddLogConfig' => [
            'name' => 'AddLogConfig',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/addLogConfig',
            ],
            'input' => [ 'shape' => 'AddLogConfigRequestShape', ],
            'output' => [ 'shape' => 'AddLogConfigResponseShape', ],
        ],
    ],
    'shapes' => [
        'Assistant' => [
            'type' => 'structure',
            'members' => [
                'version' => [ 'type' => 'string', 'locationName' => 'version', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'osType' => [ 'type' => 'string', 'locationName' => 'osType', ],
                'osVersion' => [ 'type' => 'string', 'locationName' => 'osVersion', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'lastHeartBeat' => [ 'type' => 'string', 'locationName' => 'lastHeartBeat', ],
            ],
        ],
        'Command' => [
            'type' => 'structure',
            'members' => [
                'commandId' => [ 'type' => 'string', 'locationName' => 'commandId', ],
                'commandName' => [ 'type' => 'string', 'locationName' => 'commandName', ],
                'commandType' => [ 'type' => 'string', 'locationName' => 'commandType', ],
                'commandContent' => [ 'type' => 'string', 'locationName' => 'commandContent', ],
                'timeout' => [ 'type' => 'integer', 'locationName' => 'timeout', ],
                'username' => [ 'type' => 'string', 'locationName' => 'username', ],
                'workdir' => [ 'type' => 'string', 'locationName' => 'workdir', ],
                'commandDescription' => [ 'type' => 'string', 'locationName' => 'commandDescription', ],
                'enableParameter' => [ 'type' => 'boolean', 'locationName' => 'enableParameter', ],
                'parameters' => [ 'type' => 'list', 'member' => [ 'shape' => 'Parameter', ], ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'updateTime' => [ 'type' => 'string', 'locationName' => 'updateTime', ],
            ],
        ],
        'Parameter' => [
            'type' => 'structure',
            'members' => [
                'key' => [ 'type' => 'string', 'locationName' => 'key', ],
                'value' => [ 'type' => 'string', 'locationName' => 'value', ],
            ],
        ],
        'Invocation' => [
            'type' => 'structure',
            'members' => [
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'commandId' => [ 'type' => 'string', 'locationName' => 'commandId', ],
                'commandName' => [ 'type' => 'string', 'locationName' => 'commandName', ],
                'sourceType' => [ 'type' => 'string', 'locationName' => 'sourceType', ],
                'invokeId' => [ 'type' => 'string', 'locationName' => 'invokeId', ],
                'instances' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'tags' => [ 'type' => 'list', 'member' => [ 'shape' => 'TagFilter', ], ],
                'invokeInstances' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'commandType' => [ 'type' => 'string', 'locationName' => 'commandType', ],
                'commandContent' => [ 'type' => 'string', 'locationName' => 'commandContent', ],
                'commandDescription' => [ 'type' => 'string', 'locationName' => 'commandDescription', ],
                'invocationInstances' => [ 'type' => 'list', 'member' => [ 'shape' => 'InvocationInstance', ], ],
                'parameters' => [ 'type' => 'string', 'locationName' => 'parameters', ],
                'timeout' => [ 'type' => 'string', 'locationName' => 'timeout', ],
                'username' => [ 'type' => 'string', 'locationName' => 'username', ],
                'workdir' => [ 'type' => 'string', 'locationName' => 'workdir', ],
                'errorInfo' => [ 'type' => 'string', 'locationName' => 'errorInfo', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'execTime' => [ 'type' => 'string', 'locationName' => 'execTime', ],
            ],
        ],
        'InvocationInstance' => [
            'type' => 'structure',
            'members' => [
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'instanceName' => [ 'type' => 'string', 'locationName' => 'instanceName', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'exitCode' => [ 'type' => 'string', 'locationName' => 'exitCode', ],
                'errorInfo' => [ 'type' => 'string', 'locationName' => 'errorInfo', ],
                'startTime' => [ 'type' => 'string', 'locationName' => 'startTime', ],
                'endTime' => [ 'type' => 'string', 'locationName' => 'endTime', ],
                'output' => [ 'type' => 'string', 'locationName' => 'output', ],
                'invokeTimes' => [ 'type' => 'string', 'locationName' => 'invokeTimes', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'updateTime' => [ 'type' => 'string', 'locationName' => 'updateTime', ],
            ],
        ],
        'TagFilter' => [
            'type' => 'structure',
            'members' => [
                'key' => [ 'type' => 'string', 'locationName' => 'key', ],
                'values' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'InvokeCommandRequestShape' => [
            'type' => 'structure',
            'members' => [
                'commandId' => [ 'type' => 'string', 'locationName' => 'commandId', ],
                'instances' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'tags' => [ 'type' => 'list', 'member' => [ 'shape' => 'TagFilter', ], ],
                'execTime' => [ 'type' => 'string', 'locationName' => 'execTime', ],
                'timeout' => [ 'type' => 'integer', 'locationName' => 'timeout', ],
                'username' => [ 'type' => 'string', 'locationName' => 'username', ],
                'workdir' => [ 'type' => 'string', 'locationName' => 'workdir', ],
                'windowsPassword' => [ 'type' => 'string', 'locationName' => 'windowsPassword', ],
                'enableParameter' => [ 'type' => 'boolean', 'locationName' => 'enableParameter', ],
                'parameters' => [ 'type' => 'list', 'member' => [ 'shape' => 'Parameter', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'InvokeCommandResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'InvokeCommandResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'InvokeCommandResultShape' => [
            'type' => 'structure',
            'members' => [
                'invokeId' => [ 'type' => 'string', 'locationName' => 'invokeId', ],
            ],
        ],
        'DeleteCommandsResultShape' => [
            'type' => 'structure',
            'members' => [
                'commandId' => [ 'type' => 'string', 'locationName' => 'commandId', ],
            ],
        ],
        'DescribeCommandsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'commandIds' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'commandNames' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'commandTypes' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'sourceType' => [ 'type' => 'string', 'locationName' => 'sourceType', ],
                'usernames' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'CreateCommandResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'CreateCommandResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeCommandsResultShape' => [
            'type' => 'structure',
            'members' => [
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
                'commands' => [ 'type' => 'list', 'member' => [ 'shape' => 'Command', ], ],
            ],
        ],
        'DeleteCommandsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DeleteCommandsResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeCommandsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeCommandsResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'CreateCommandRequestShape' => [
            'type' => 'structure',
            'members' => [
                'commandName' => [ 'type' => 'string', 'locationName' => 'commandName', ],
                'commandType' => [ 'type' => 'string', 'locationName' => 'commandType', ],
                'commandContent' => [ 'type' => 'string', 'locationName' => 'commandContent', ],
                'timeout' => [ 'type' => 'integer', 'locationName' => 'timeout', ],
                'username' => [ 'type' => 'string', 'locationName' => 'username', ],
                'workdir' => [ 'type' => 'string', 'locationName' => 'workdir', ],
                'commandDescription' => [ 'type' => 'string', 'locationName' => 'commandDescription', ],
                'enableParameter' => [ 'type' => 'boolean', 'locationName' => 'enableParameter', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DeleteCommandsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'commandIds' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'CreateCommandResultShape' => [
            'type' => 'structure',
            'members' => [
                'commandId' => [ 'type' => 'string', 'locationName' => 'commandId', ],
            ],
        ],
        'DescribeInvocationsResultShape' => [
            'type' => 'structure',
            'members' => [
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
                'invocations' => [ 'type' => 'list', 'member' => [ 'shape' => 'Invocation', ], ],
            ],
        ],
        'DescribeInvocationsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'invokeIds' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'commandIds' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'status' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'commandNames' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'commandTypes' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'userNames' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DescribeInvocationsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeInvocationsResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'AddLogConfigResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'AddLogConfigRequestShape' => [
            'type' => 'structure',
            'members' => [
                'logset' => [ 'type' => 'string', 'locationName' => 'logset', ],
                'logtopic' => [ 'type' => 'string', 'locationName' => 'logtopic', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'AddLogConfigResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
    ],
];
