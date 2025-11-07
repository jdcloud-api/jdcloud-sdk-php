<?php
// This file was auto-generated
return [
//    'version' => '',
    'metadata' =>
    [
//        'apiVersion' => '',
//        'endpointPrefix' => 'joygrid',
        'protocol' => 'json',
//        'serviceFullName' => 'joygrid',
//        'serviceId' => 'joygrid',
    ],
    'operations' => [
        'DescribeCodeInterpreters' => [
            'name' => 'DescribeCodeInterpreters',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/codeinterpreters',
            ],
            'input' => [ 'shape' => 'DescribeCodeInterpretersRequestShape', ],
            'output' => [ 'shape' => 'DescribeCodeInterpretersResponseShape', ],
        ],
        'CreateCodeInterpreter' => [
            'name' => 'CreateCodeInterpreter',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/codeinterpreters',
            ],
            'input' => [ 'shape' => 'CreateCodeInterpreterRequestShape', ],
            'output' => [ 'shape' => 'CreateCodeInterpreterResponseShape', ],
        ],
        'DescribeCodeInterpreter' => [
            'name' => 'DescribeCodeInterpreter',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/codeinterpreters/{codeInterpreterId}',
            ],
            'input' => [ 'shape' => 'DescribeCodeInterpreterRequestShape', ],
            'output' => [ 'shape' => 'DescribeCodeInterpreterResponseShape', ],
        ],
        'UpdateCodeInterpreter' => [
            'name' => 'UpdateCodeInterpreter',
            'http' => [
                'method' => 'PUT',
                'requestUri' => '/v1/regions/{regionId}/codeinterpreters/{codeInterpreterId}',
            ],
            'input' => [ 'shape' => 'UpdateCodeInterpreterRequestShape', ],
            'output' => [ 'shape' => 'UpdateCodeInterpreterResponseShape', ],
        ],
        'DeleteCodeInterpreter' => [
            'name' => 'DeleteCodeInterpreter',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/regions/{regionId}/codeinterpreters/{codeInterpreterId}',
            ],
            'input' => [ 'shape' => 'DeleteCodeInterpreterRequestShape', ],
            'output' => [ 'shape' => 'DeleteCodeInterpreterResponseShape', ],
        ],
        'DescribeCodeInterpreterSessions' => [
            'name' => 'DescribeCodeInterpreterSessions',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/codeinterpreters/{codeInterpreterId}/sessions',
            ],
            'input' => [ 'shape' => 'DescribeCodeInterpreterSessionsRequestShape', ],
            'output' => [ 'shape' => 'DescribeCodeInterpreterSessionsResponseShape', ],
        ],
        'StartCodeInterpreterSession' => [
            'name' => 'StartCodeInterpreterSession',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/codeinterpreters/{codeInterpreterId}/sessions',
            ],
            'input' => [ 'shape' => 'StartCodeInterpreterSessionRequestShape', ],
            'output' => [ 'shape' => 'StartCodeInterpreterSessionResponseShape', ],
        ],
        'StopCodeInterpreterSession' => [
            'name' => 'StopCodeInterpreterSession',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/regions/{regionId}/codeinterpreters/{codeInterpreterId}/sessions/{sessionId}',
            ],
            'input' => [ 'shape' => 'StopCodeInterpreterSessionRequestShape', ],
            'output' => [ 'shape' => 'StopCodeInterpreterSessionResponseShape', ],
        ],
        'InvokeCodeInterpreter' => [
            'name' => 'InvokeCodeInterpreter',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/codeinterpreters/{codeInterpreterId}/sessions/{sessionId}/invoke',
            ],
            'input' => [ 'shape' => 'InvokeCodeInterpreterRequestShape', ],
            'output' => [ 'shape' => 'InvokeCodeInterpreterResponseShape', ],
        ],
        'DescribeMemories' => [
            'name' => 'DescribeMemories',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/memories',
            ],
            'input' => [ 'shape' => 'DescribeMemoriesRequestShape', ],
            'output' => [ 'shape' => 'DescribeMemoriesResponseShape', ],
        ],
        'CreateMemory' => [
            'name' => 'CreateMemory',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/memories',
            ],
            'input' => [ 'shape' => 'CreateMemoryRequestShape', ],
            'output' => [ 'shape' => 'CreateMemoryResponseShape', ],
        ],
        'DescribeMemory' => [
            'name' => 'DescribeMemory',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/memories/{memoryId}',
            ],
            'input' => [ 'shape' => 'DescribeMemoryRequestShape', ],
            'output' => [ 'shape' => 'DescribeMemoryResponseShape', ],
        ],
        'UpdateMemory' => [
            'name' => 'UpdateMemory',
            'http' => [
                'method' => 'PUT',
                'requestUri' => '/v1/regions/{regionId}/memories/{memoryId}',
            ],
            'input' => [ 'shape' => 'UpdateMemoryRequestShape', ],
            'output' => [ 'shape' => 'UpdateMemoryResponseShape', ],
        ],
        'DeleteMemory' => [
            'name' => 'DeleteMemory',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/regions/{regionId}/memories/{memoryId}',
            ],
            'input' => [ 'shape' => 'DeleteMemoryRequestShape', ],
            'output' => [ 'shape' => 'DeleteMemoryResponseShape', ],
        ],
        'DescribeEvents' => [
            'name' => 'DescribeEvents',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/memories/{memoryId}/events',
            ],
            'input' => [ 'shape' => 'DescribeEventsRequestShape', ],
            'output' => [ 'shape' => 'DescribeEventsResponseShape', ],
        ],
        'DescribeEvent' => [
            'name' => 'DescribeEvent',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/memories/{memoryId}/events/{eventId}',
            ],
            'input' => [ 'shape' => 'DescribeEventRequestShape', ],
            'output' => [ 'shape' => 'DescribeEventResponseShape', ],
        ],
        'DeleteEvent' => [
            'name' => 'DeleteEvent',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/regions/{regionId}/memories/{memoryId}/events/{eventId}',
            ],
            'input' => [ 'shape' => 'DeleteEventRequestShape', ],
            'output' => [ 'shape' => 'DeleteEventResponseShape', ],
        ],
        'SearchEvents' => [
            'name' => 'SearchEvents',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/memories/{memoryId}/eventssearch',
            ],
            'input' => [ 'shape' => 'SearchEventsRequestShape', ],
            'output' => [ 'shape' => 'SearchEventsResponseShape', ],
        ],
        'DescribeRuntimes' => [
            'name' => 'DescribeRuntimes',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/runtimes',
            ],
            'input' => [ 'shape' => 'DescribeRuntimesRequestShape', ],
            'output' => [ 'shape' => 'DescribeRuntimesResponseShape', ],
        ],
        'CreateRuntime' => [
            'name' => 'CreateRuntime',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/runtimes',
            ],
            'input' => [ 'shape' => 'CreateRuntimeRequestShape', ],
            'output' => [ 'shape' => 'CreateRuntimeResponseShape', ],
        ],
        'DescribeRuntime' => [
            'name' => 'DescribeRuntime',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/runtimes/{agentRuntimeId}',
            ],
            'input' => [ 'shape' => 'DescribeRuntimeRequestShape', ],
            'output' => [ 'shape' => 'DescribeRuntimeResponseShape', ],
        ],
        'UpdateRuntime' => [
            'name' => 'UpdateRuntime',
            'http' => [
                'method' => 'PUT',
                'requestUri' => '/v1/regions/{regionId}/runtimes/{agentRuntimeId}',
            ],
            'input' => [ 'shape' => 'UpdateRuntimeRequestShape', ],
            'output' => [ 'shape' => 'UpdateRuntimeResponseShape', ],
        ],
        'DeleteRuntime' => [
            'name' => 'DeleteRuntime',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/regions/{regionId}/runtimes/{agentRuntimeId}',
            ],
            'input' => [ 'shape' => 'DeleteRuntimeRequestShape', ],
            'output' => [ 'shape' => 'DeleteRuntimeResponseShape', ],
        ],
        'InvokeRuntime' => [
            'name' => 'InvokeRuntime',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/runtimes/{agentRuntimeId}/invocations/{proxyPath}',
            ],
            'input' => [ 'shape' => 'InvokeRuntimeRequestShape', ],
            'output' => [ 'shape' => 'InvokeRuntimeResponseShape', ],
        ],
    ],
    'shapes' => [
        'ContainerConfiguration' => [
            'type' => 'structure',
            'members' => [
                'args' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'cmd' => [ 'type' => 'string', 'locationName' => 'cmd', ],
                'containerUri' => [ 'type' => 'string', 'locationName' => 'containerUri', ],
                'environmentVariables' => [ 'type' => 'map', 'key' => [ 'type' => 'string', ], 'value' => [ 'type' => 'string', ], ],
                'port' => [ 'type' => 'long', 'locationName' => 'port', ],
            ],
        ],
        'AgentRuntimeArtifact' => [
            'type' => 'structure',
            'members' => [
                'containerConfiguration' =>  [ 'shape' => 'ContainerConfiguration', ],
            ],
        ],
        'AgentRuntimeRespSpec' => [
            'type' => 'structure',
            'members' => [
                'agentRuntimeId' => [ 'type' => 'string', 'locationName' => 'agentRuntimeId', ],
                'agentRuntimeName' => [ 'type' => 'string', 'locationName' => 'agentRuntimeName', ],
                'agentRuntimeVersion' => [ 'type' => 'string', 'locationName' => 'agentRuntimeVersion', ],
                'createdAt' => [ 'type' => 'string', 'locationName' => 'createdAt', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'lastUpdatedAt' => [ 'type' => 'string', 'locationName' => 'lastUpdatedAt', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
            ],
        ],
        'CodeInterpreterOut' => [
            'type' => 'structure',
            'members' => [
                'codeInterpreterId' => [ 'type' => 'string', 'locationName' => 'codeInterpreterId', ],
            ],
        ],
        'CodeInterpreterSessionOut' => [
            'type' => 'structure',
            'members' => [
                'createdAt' => [ 'type' => 'string', 'locationName' => 'createdAt', ],
                'sessionId' => [ 'type' => 'string', 'locationName' => 'sessionId', ],
            ],
        ],
        'CreateCodeInterpreterSpec' => [
            'type' => 'structure',
            'members' => [
                'erpAccount' => [ 'type' => 'string', 'locationName' => 'erpAccount', ],
                'pin' => [ 'type' => 'string', 'locationName' => 'pin', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'CreateEventSpec' => [
            'type' => 'structure',
            'members' => [
                'erpAccount' => [ 'type' => 'string', 'locationName' => 'erpAccount', ],
                'pin' => [ 'type' => 'string', 'locationName' => 'pin', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'actor' => [ 'type' => 'string', 'locationName' => 'actor', ],
                'infer' => [ 'type' => 'boolean', 'locationName' => 'infer', ],
                'memoryId' => [ 'type' => 'string', 'locationName' => 'memoryId', ],
                'messages' => [ 'type' => 'list', 'member' => [ 'shape' => 'Message', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'sessionId' => [ 'type' => 'string', 'locationName' => 'sessionId', ],
            ],
        ],
        'Message' => [
            'type' => 'structure',
            'members' => [
                'content' => [ 'type' => 'string', 'locationName' => 'content', ],
                'role' => [ 'type' => 'string', 'locationName' => 'role', ],
            ],
        ],
        'CreateMemorySpec' => [
            'type' => 'structure',
            'members' => [
                'erpAccount' => [ 'type' => 'string', 'locationName' => 'erpAccount', ],
                'pin' => [ 'type' => 'string', 'locationName' => 'pin', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'CreateRuntimeSpec' => [
            'type' => 'structure',
            'members' => [
                'agentRuntimeArtifact' =>  [ 'shape' => 'AgentRuntimeArtifact', ],
                'agentRuntimeName' => [ 'type' => 'string', 'locationName' => 'agentRuntimeName', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
            ],
        ],
        'DescribeCodeInterpreterOut' => [
            'type' => 'structure',
            'members' => [
                'codeInterpreterId' => [ 'type' => 'string', 'locationName' => 'codeInterpreterId', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
            ],
        ],
        'DescribeCodeInterpreterSessionsOut' => [
            'type' => 'structure',
            'members' => [
                'sessions' => [ 'type' => 'list', 'member' => [ 'shape' => 'CodeInterpreterSessionOut', ], ],
                'totalCount' => [ 'type' => 'long', 'locationName' => 'totalCount', ],
            ],
        ],
        'DescribeCodeInterpretersOut' => [
            'type' => 'structure',
            'members' => [
                'codeInterpreters' => [ 'type' => 'list', 'member' => [ 'shape' => 'DescribeCodeInterpreterOut', ], ],
                'numberPages' => [ 'type' => 'long', 'locationName' => 'numberPages', ],
                'numberRecords' => [ 'type' => 'long', 'locationName' => 'numberRecords', ],
                'pageNumber' => [ 'type' => 'long', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'long', 'locationName' => 'pageSize', ],
            ],
        ],
        'DescribeMemoriesOut' => [
            'type' => 'structure',
            'members' => [
                'memories' => [ 'type' => 'list', 'member' => [ 'shape' => 'DescribeMemoryOut', ], ],
                'numberPages' => [ 'type' => 'long', 'locationName' => 'numberPages', ],
                'numberRecords' => [ 'type' => 'long', 'locationName' => 'numberRecords', ],
                'pageNumber' => [ 'type' => 'long', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'long', 'locationName' => 'pageSize', ],
            ],
        ],
        'DescribeMemoryOut' => [
            'type' => 'structure',
            'members' => [
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'memoryId' => [ 'type' => 'string', 'locationName' => 'memoryId', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
            ],
        ],
        'EventIDOut' => [
            'type' => 'structure',
            'members' => [
                'eventId' => [ 'type' => 'string', 'locationName' => 'eventId', ],
            ],
        ],
        'EventOut' => [
            'type' => 'structure',
            'members' => [
                'actor' => [ 'type' => 'string', 'locationName' => 'actor', ],
                'content' => [ 'type' => 'string', 'locationName' => 'content', ],
                'createdAt' => [ 'type' => 'string', 'locationName' => 'createdAt', ],
                'eventId' => [ 'type' => 'string', 'locationName' => 'eventId', ],
            ],
        ],
        'EventResponseSpec' => [
            'type' => 'structure',
            'members' => [
                'actor' => [ 'type' => 'string', 'locationName' => 'actor', ],
                'content' => [ 'type' => 'string', 'locationName' => 'content', ],
                'createdAt' => [ 'type' => 'string', 'locationName' => 'createdAt', ],
                'eventId' => [ 'type' => 'string', 'locationName' => 'eventId', ],
            ],
        ],
        'EventsOut' => [
            'type' => 'structure',
            'members' => [
                'events' => [ 'type' => 'list', 'member' => [ 'shape' => 'EventResponseSpec', ], ],
            ],
        ],
        'MemoryOut' => [
            'type' => 'structure',
            'members' => [
                'memoryId' => [ 'type' => 'string', 'locationName' => 'memoryId', ],
            ],
        ],
        'PageEventsOut' => [
            'type' => 'structure',
            'members' => [
                'events' => [ 'type' => 'list', 'member' => [ 'shape' => 'EventResponseSpec', ], ],
                'numberPages' => [ 'type' => 'long', 'locationName' => 'numberPages', ],
                'numberRecords' => [ 'type' => 'long', 'locationName' => 'numberRecords', ],
                'pageNumber' => [ 'type' => 'long', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'long', 'locationName' => 'pageSize', ],
            ],
        ],
        'SearchEventsSpec' => [
            'type' => 'structure',
            'members' => [
                'actor' => [ 'type' => 'string', 'locationName' => 'actor', ],
                'query' => [ 'type' => 'string', 'locationName' => 'query', ],
                'sessionId' => [ 'type' => 'string', 'locationName' => 'sessionId', ],
            ],
        ],
        'UpdateCodeInterpreterSpec' => [
            'type' => 'structure',
            'members' => [
                'erpAccount' => [ 'type' => 'string', 'locationName' => 'erpAccount', ],
                'pin' => [ 'type' => 'string', 'locationName' => 'pin', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'codeInterpreterId' => [ 'type' => 'string', 'locationName' => 'codeInterpreterId', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'UpdateMemorySpec' => [
            'type' => 'structure',
            'members' => [
                'erpAccount' => [ 'type' => 'string', 'locationName' => 'erpAccount', ],
                'pin' => [ 'type' => 'string', 'locationName' => 'pin', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'memoryId' => [ 'type' => 'string', 'locationName' => 'memoryId', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'CreateCodeInterpreterResultShape' => [
            'type' => 'structure',
            'members' => [
                'codeInterpreterId' => [ 'type' => 'string', 'locationName' => 'codeInterpreterId', ],
            ],
        ],
        'CreateCodeInterpreterRequestShape' => [
            'type' => 'structure',
            'members' => [
                'body' =>  [ 'shape' => 'CreateCodeInterpreterSpec', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DescribeCodeInterpreterRequestShape' => [
            'type' => 'structure',
            'members' => [
                'codeInterpreterId' => [ 'type' => 'string', 'locationName' => 'codeInterpreterId', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'UpdateCodeInterpreterRequestShape' => [
            'type' => 'structure',
            'members' => [
                'codeInterpreterId' => [ 'type' => 'string', 'locationName' => 'codeInterpreterId', ],
                'body' =>  [ 'shape' => 'UpdateCodeInterpreterSpec', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DescribeCodeInterpretersRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'long', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'long', 'locationName' => 'pageSize', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DeleteCodeInterpreterResultShape' => [
            'type' => 'structure',
            'members' => [
                'codeInterpreterId' => [ 'type' => 'string', 'locationName' => 'codeInterpreterId', ],
            ],
        ],
        'DescribeCodeInterpreterResultShape' => [
            'type' => 'structure',
            'members' => [
                'codeInterpreterId' => [ 'type' => 'string', 'locationName' => 'codeInterpreterId', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
            ],
        ],
        'DescribeCodeInterpretersResultShape' => [
            'type' => 'structure',
            'members' => [
                'codeInterpreters' => [ 'type' => 'list', 'member' => [ 'shape' => 'DescribeCodeInterpreterOut', ], ],
                'numberPages' => [ 'type' => 'long', 'locationName' => 'numberPages', ],
                'numberRecords' => [ 'type' => 'long', 'locationName' => 'numberRecords', ],
                'pageNumber' => [ 'type' => 'long', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'long', 'locationName' => 'pageSize', ],
            ],
        ],
        'UpdateCodeInterpreterResultShape' => [
            'type' => 'structure',
            'members' => [
                'codeInterpreterId' => [ 'type' => 'string', 'locationName' => 'codeInterpreterId', ],
            ],
        ],
        'DeleteCodeInterpreterRequestShape' => [
            'type' => 'structure',
            'members' => [
                'codeInterpreterId' => [ 'type' => 'string', 'locationName' => 'codeInterpreterId', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DescribeCodeInterpreterSessionsResultShape' => [
            'type' => 'structure',
            'members' => [
                'sessions' => [ 'type' => 'list', 'member' => [ 'shape' => 'CodeInterpreterSessionOut', ], ],
                'totalCount' => [ 'type' => 'long', 'locationName' => 'totalCount', ],
            ],
        ],
        'StopCodeInterpreterSessionResultShape' => [
            'type' => 'structure',
            'members' => [
                'createdAt' => [ 'type' => 'string', 'locationName' => 'createdAt', ],
                'sessionId' => [ 'type' => 'string', 'locationName' => 'sessionId', ],
            ],
        ],
        'DescribeCodeInterpreterSessionsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'codeInterpreterId' => [ 'type' => 'string', 'locationName' => 'codeInterpreterId', ],
                'pageNumber' => [ 'type' => 'long', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'long', 'locationName' => 'pageSize', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'StartCodeInterpreterSessionRequestShape' => [
            'type' => 'structure',
            'members' => [
                'codeInterpreterId' => [ 'type' => 'string', 'locationName' => 'codeInterpreterId', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'StopCodeInterpreterSessionRequestShape' => [
            'type' => 'structure',
            'members' => [
                'codeInterpreterId' => [ 'type' => 'string', 'locationName' => 'codeInterpreterId', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'sessionId' => [ 'type' => 'string', 'locationName' => 'sessionId', ],
            ],
        ],
        'StartCodeInterpreterSessionResultShape' => [
            'type' => 'structure',
            'members' => [
                'createdAt' => [ 'type' => 'string', 'locationName' => 'createdAt', ],
                'sessionId' => [ 'type' => 'string', 'locationName' => 'sessionId', ],
            ],
        ],
        'InvokeCodeInterpreterRequestShape' => [
            'type' => 'structure',
            'members' => [
                'codeInterpreterId' => [ 'type' => 'string', 'locationName' => 'codeInterpreterId', ],
                'sessionId' => [ 'type' => 'string', 'locationName' => 'sessionId', ],
                'body' => [ 'type' => '', 'locationName' => 'body', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'proxyPath' => [ 'type' => 'string', 'locationName' => 'proxyPath', ],
            ],
        ],
        'InvokeCodeInterpreterResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DescribeEventsResultShape' => [
            'type' => 'structure',
            'members' => [
                'events' => [ 'type' => 'list', 'member' => [ 'shape' => 'EventResponseSpec', ], ],
                'numberPages' => [ 'type' => 'long', 'locationName' => 'numberPages', ],
                'numberRecords' => [ 'type' => 'long', 'locationName' => 'numberRecords', ],
                'pageNumber' => [ 'type' => 'long', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'long', 'locationName' => 'pageSize', ],
            ],
        ],
        'DescribeMemoryRequestShape' => [
            'type' => 'structure',
            'members' => [
                'memoryId' => [ 'type' => 'string', 'locationName' => 'memoryId', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'CreateMemoryRequestShape' => [
            'type' => 'structure',
            'members' => [
                'body' =>  [ 'shape' => 'CreateMemorySpec', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DescribeEventResultShape' => [
            'type' => 'structure',
            'members' => [
                'actor' => [ 'type' => 'string', 'locationName' => 'actor', ],
                'content' => [ 'type' => 'string', 'locationName' => 'content', ],
                'createdAt' => [ 'type' => 'string', 'locationName' => 'createdAt', ],
                'eventId' => [ 'type' => 'string', 'locationName' => 'eventId', ],
            ],
        ],
        'DeleteMemoryResultShape' => [
            'type' => 'structure',
            'members' => [
                'memoryId' => [ 'type' => 'string', 'locationName' => 'memoryId', ],
            ],
        ],
        'DescribeMemoriesRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'long', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'long', 'locationName' => 'pageSize', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DeleteEventRequestShape' => [
            'type' => 'structure',
            'members' => [
                'memoryId' => [ 'type' => 'string', 'locationName' => 'memoryId', ],
                'actor' => [ 'type' => 'string', 'locationName' => 'actor', ],
                'sessionId' => [ 'type' => 'string', 'locationName' => 'sessionId', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'eventId' => [ 'type' => 'string', 'locationName' => 'eventId', ],
            ],
        ],
        'DeleteMemoryRequestShape' => [
            'type' => 'structure',
            'members' => [
                'memoryId' => [ 'type' => 'string', 'locationName' => 'memoryId', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'SearchEventsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'memoryId' => [ 'type' => 'string', 'locationName' => 'memoryId', ],
                'body' =>  [ 'shape' => 'SearchEventsSpec', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'UpdateMemoryResultShape' => [
            'type' => 'structure',
            'members' => [
                'memoryId' => [ 'type' => 'string', 'locationName' => 'memoryId', ],
            ],
        ],
        'DescribeEventsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'long', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'long', 'locationName' => 'pageSize', ],
                'memoryId' => [ 'type' => 'string', 'locationName' => 'memoryId', ],
                'actor' => [ 'type' => 'string', 'locationName' => 'actor', ],
                'sessionId' => [ 'type' => 'string', 'locationName' => 'sessionId', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'UpdateMemoryRequestShape' => [
            'type' => 'structure',
            'members' => [
                'memoryId' => [ 'type' => 'string', 'locationName' => 'memoryId', ],
                'body' =>  [ 'shape' => 'UpdateMemorySpec', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DescribeMemoryResultShape' => [
            'type' => 'structure',
            'members' => [
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'memoryId' => [ 'type' => 'string', 'locationName' => 'memoryId', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
            ],
        ],
        'SearchEventsResultShape' => [
            'type' => 'structure',
            'members' => [
                'events' => [ 'type' => 'list', 'member' => [ 'shape' => 'EventResponseSpec', ], ],
            ],
        ],
        'DescribeMemoriesResultShape' => [
            'type' => 'structure',
            'members' => [
                'memories' => [ 'type' => 'list', 'member' => [ 'shape' => 'DescribeMemoryOut', ], ],
                'numberPages' => [ 'type' => 'long', 'locationName' => 'numberPages', ],
                'numberRecords' => [ 'type' => 'long', 'locationName' => 'numberRecords', ],
                'pageNumber' => [ 'type' => 'long', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'long', 'locationName' => 'pageSize', ],
            ],
        ],
        'DeleteEventResultShape' => [
            'type' => 'structure',
            'members' => [
                'eventId' => [ 'type' => 'string', 'locationName' => 'eventId', ],
            ],
        ],
        'DescribeEventRequestShape' => [
            'type' => 'structure',
            'members' => [
                'memoryId' => [ 'type' => 'string', 'locationName' => 'memoryId', ],
                'actor' => [ 'type' => 'string', 'locationName' => 'actor', ],
                'sessionId' => [ 'type' => 'string', 'locationName' => 'sessionId', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'eventId' => [ 'type' => 'string', 'locationName' => 'eventId', ],
            ],
        ],
        'CreateMemoryResultShape' => [
            'type' => 'structure',
            'members' => [
                'memoryId' => [ 'type' => 'string', 'locationName' => 'memoryId', ],
            ],
        ],
        'DeleteRuntimeResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'DeleteRuntimeResultShape', ],
            ],
        ],
        'DescribeRuntimeResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'DescribeRuntimeResultShape', ],
            ],
        ],
        'DescribeRuntimesResultShape' => [
            'type' => 'structure',
            'members' => [
                'agentRuntimes' => [ 'type' => 'list', 'member' => [ 'shape' => 'AgentRuntimeRespSpec', ], ],
            ],
        ],
        'InvokeRuntimeResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'CreateRuntimeResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'CreateRuntimeResultShape', ],
            ],
        ],
        'UpdateRuntimeResultShape' => [
            'type' => 'structure',
            'members' => [
                'agentRuntimeId' => [ 'type' => 'string', 'locationName' => 'agentRuntimeId', ],
                'agentRuntimeVersion' => [ 'type' => 'long', 'locationName' => 'agentRuntimeVersion', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
            ],
        ],
        'DescribeRuntimesRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'long', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'long', 'locationName' => 'pageSize', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'CreateRuntimeRequestShape' => [
            'type' => 'structure',
            'members' => [
                'body' =>  [ 'shape' => 'CreateRuntimeSpec', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DescribeRuntimeResultShape' => [
            'type' => 'structure',
            'members' => [
                'agentRuntimeArtifact' =>  [ 'shape' => 'AgentRuntimeArtifact', ],
                'agentRuntimeId' => [ 'type' => 'string', 'locationName' => 'agentRuntimeId', ],
                'agentRuntimeName' => [ 'type' => 'string', 'locationName' => 'agentRuntimeName', ],
                'agentRuntimeVersion' => [ 'type' => 'string', 'locationName' => 'agentRuntimeVersion', ],
                'createdAt' => [ 'type' => 'string', 'locationName' => 'createdAt', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'lastUpdatedAt' => [ 'type' => 'string', 'locationName' => 'lastUpdatedAt', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
            ],
        ],
        'UpdateRuntimeRequestShape' => [
            'type' => 'structure',
            'members' => [
                'body' =>  [ 'shape' => 'CreateRuntimeSpec', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'agentRuntimeId' => [ 'type' => 'string', 'locationName' => 'agentRuntimeId', ],
            ],
        ],
        'CreateRuntimeResultShape' => [
            'type' => 'structure',
            'members' => [
                'agentRuntimeId' => [ 'type' => 'string', 'locationName' => 'agentRuntimeId', ],
                'agentRuntimeVersion' => [ 'type' => 'long', 'locationName' => 'agentRuntimeVersion', ],
                'createdAt' => [ 'type' => 'string', 'locationName' => 'createdAt', ],
                'state' => [ 'type' => 'string', 'locationName' => 'state', ],
            ],
        ],
        'DeleteRuntimeRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'agentRuntimeId' => [ 'type' => 'string', 'locationName' => 'agentRuntimeId', ],
            ],
        ],
        'UpdateRuntimeResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'UpdateRuntimeResultShape', ],
            ],
        ],
        'DescribeRuntimeRequestShape' => [
            'type' => 'structure',
            'members' => [
                'version' => [ 'type' => 'string', 'locationName' => 'version', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'agentRuntimeId' => [ 'type' => 'string', 'locationName' => 'agentRuntimeId', ],
            ],
        ],
        'DescribeRuntimesResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'DescribeRuntimesResultShape', ],
            ],
        ],
        'DeleteRuntimeResultShape' => [
            'type' => 'structure',
            'members' => [
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
            ],
        ],
        'InvokeRuntimeRequestShape' => [
            'type' => 'structure',
            'members' => [
                'sessionId' => [ 'type' => 'string', 'locationName' => 'sessionId', ],
                'body' => [ 'type' => '', 'locationName' => 'body', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'agentRuntimeId' => [ 'type' => 'string', 'locationName' => 'agentRuntimeId', ],
                'proxyPath' => [ 'type' => 'string', 'locationName' => 'proxyPath', ],
            ],
        ],
    ],
];
