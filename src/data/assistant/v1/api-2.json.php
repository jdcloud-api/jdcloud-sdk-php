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
        'DescribeAssistants' => [
            'name' => 'DescribeAssistants',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/describeAssistants',
            ],
            'input' => [ 'shape' => 'DescribeAssistantsRequestShape', ],
            'output' => [ 'shape' => 'DescribeAssistantsResponseShape', ],
        ],
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
        'ModifyCommand' => [
            'name' => 'ModifyCommand',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/modifyCommand',
            ],
            'input' => [ 'shape' => 'ModifyCommandRequestShape', ],
            'output' => [ 'shape' => 'ModifyCommandResponseShape', ],
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
        'RunCommand' => [
            'name' => 'RunCommand',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/runCommand',
            ],
            'input' => [ 'shape' => 'RunCommandRequestShape', ],
            'output' => [ 'shape' => 'RunCommandResponseShape', ],
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
        'StopInvocation' => [
            'name' => 'StopInvocation',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/stopInvocation',
            ],
            'input' => [ 'shape' => 'StopInvocationRequestShape', ],
            'output' => [ 'shape' => 'StopInvocationResponseShape', ],
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
        'ModifyLogConfig' => [
            'name' => 'ModifyLogConfig',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/modifyLogConfig',
            ],
            'input' => [ 'shape' => 'ModifyLogConfigRequestShape', ],
            'output' => [ 'shape' => 'ModifyLogConfigResponseShape', ],
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
                'invokeId' => [ 'type' => 'string', 'locationName' => 'invokeId', ],
                'commandType' => [ 'type' => 'string', 'locationName' => 'commandType', ],
                'commandContent' => [ 'type' => 'string', 'locationName' => 'commandContent', ],
                'commandDescription' => [ 'type' => 'string', 'locationName' => 'commandDescription', ],
                'invocationInstances' => [ 'type' => 'list', 'member' => [ 'shape' => 'InvocationInstance', ], ],
                'parameters' => [ 'type' => 'string', 'locationName' => 'parameters', ],
                'timeout' => [ 'type' => 'string', 'locationName' => 'timeout', ],
                'username' => [ 'type' => 'string', 'locationName' => 'username', ],
                'workdir' => [ 'type' => 'string', 'locationName' => 'workdir', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
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
        'DescribeAssistantsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeAssistantsResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeAssistantsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'instances' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DescribeAssistantsResultShape' => [
            'type' => 'structure',
            'members' => [
                'assistants' => [ 'type' => 'list', 'member' => [ 'shape' => 'Assistant', ], ],
            ],
        ],
        'InvokeCommandRequestShape' => [
            'type' => 'structure',
            'members' => [
                'commandId' => [ 'type' => 'string', 'locationName' => 'commandId', ],
                'instances' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
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
        'ModifyCommandResultShape' => [
            'type' => 'structure',
            'members' => [
                'commandId' => [ 'type' => 'string', 'locationName' => 'commandId', ],
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
        'RunCommandResultShape' => [
            'type' => 'structure',
            'members' => [
                'commandId' => [ 'type' => 'string', 'locationName' => 'commandId', ],
                'invokeId' => [ 'type' => 'string', 'locationName' => 'invokeId', ],
            ],
        ],
        'DeleteCommandsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DeleteCommandsResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'RunCommandResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'RunCommandResultShape', ],
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
        'ModifyCommandRequestShape' => [
            'type' => 'structure',
            'members' => [
                'commandId' => [ 'type' => 'string', 'locationName' => 'commandId', ],
                'commandName' => [ 'type' => 'string', 'locationName' => 'commandName', ],
                'commandType' => [ 'type' => 'string', 'locationName' => 'commandType', ],
                'commandContent' => [ 'type' => 'string', 'locationName' => 'commandContent', ],
                'commandDescription' => [ 'type' => 'string', 'locationName' => 'commandDescription', ],
                'workdir' => [ 'type' => 'string', 'locationName' => 'workdir', ],
                'timeout' => [ 'type' => 'integer', 'locationName' => 'timeout', ],
                'username' => [ 'type' => 'string', 'locationName' => 'username', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'RunCommandRequestShape' => [
            'type' => 'structure',
            'members' => [
                'commandName' => [ 'type' => 'string', 'locationName' => 'commandName', ],
                'commandType' => [ 'type' => 'string', 'locationName' => 'commandType', ],
                'commandContent' => [ 'type' => 'string', 'locationName' => 'commandContent', ],
                'windowsPassword' => [ 'type' => 'string', 'locationName' => 'windowsPassword', ],
                'instances' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'timeout' => [ 'type' => 'integer', 'locationName' => 'timeout', ],
                'username' => [ 'type' => 'string', 'locationName' => 'username', ],
                'workdir' => [ 'type' => 'string', 'locationName' => 'workdir', ],
                'enableParameter' => [ 'type' => 'boolean', 'locationName' => 'enableParameter', ],
                'keepCommand' => [ 'type' => 'boolean', 'locationName' => 'keepCommand', ],
                'commandDescription' => [ 'type' => 'string', 'locationName' => 'commandDescription', ],
                'parameters' => [ 'type' => 'list', 'member' => [ 'shape' => 'Parameter', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'ModifyCommandResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'ModifyCommandResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeInvocationsResultShape' => [
            'type' => 'structure',
            'members' => [
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
                'invocations' => [ 'type' => 'list', 'member' => [ 'shape' => 'Invocation', ], ],
            ],
        ],
        'StopInvocationResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'StopInvocationResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'StopInvocationRequestShape' => [
            'type' => 'structure',
            'members' => [
                'invokeId' => [ 'type' => 'string', 'locationName' => 'invokeId', ],
                'instances' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'StopInvocationResultShape' => [
            'type' => 'structure',
            'members' => [
                'invokeId' => [ 'type' => 'string', 'locationName' => 'invokeId', ],
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
        'ModifyLogConfigResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'ModifyLogConfigRequestShape' => [
            'type' => 'structure',
            'members' => [
                'logset' => [ 'type' => 'string', 'locationName' => 'logset', ],
                'logtopic' => [ 'type' => 'string', 'locationName' => 'logtopic', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
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
        'ModifyLogConfigResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
    ],
];
