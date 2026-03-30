<?php
// This file was auto-generated
return [
//    'version' => '',
    'metadata' =>
    [
//        'apiVersion' => '',
//        'endpointPrefix' => 'conversationalai',
        'protocol' => 'json',
//        'serviceFullName' => 'conversationalai',
//        'serviceId' => 'conversationalai',
    ],
    'operations' => [
        'QueryConvoAgentStatus' => [
            'name' => 'QueryConvoAgentStatus',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/queryConvoAgentStatus',
            ],
            'input' => [ 'shape' => 'QueryConvoAgentStatusRequestShape', ],
            'output' => [ 'shape' => 'QueryConvoAgentStatusResponseShape', ],
        ],
        'QueryConvoAgentList' => [
            'name' => 'QueryConvoAgentList',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/queryConvoAgentList',
            ],
            'input' => [ 'shape' => 'QueryConvoAgentListRequestShape', ],
            'output' => [ 'shape' => 'QueryConvoAgentListResponseShape', ],
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
        'AgentJoinRoomParams' => [
            'type' => 'structure',
            'members' => [
                'appId' => [ 'type' => 'string', 'locationName' => 'appId', ],
                'userRoomId' => [ 'type' => 'string', 'locationName' => 'userRoomId', ],
                'userId' => [ 'type' => 'string', 'locationName' => 'userId', ],
                'timestamp' => [ 'type' => 'long', 'locationName' => 'timestamp', ],
                'nonce' => [ 'type' => 'string', 'locationName' => 'nonce', ],
                'token' => [ 'type' => 'string', 'locationName' => 'token', ],
            ],
        ],
        'SilenceParams' => [
            'type' => 'structure',
            'members' => [
                'silentDurationThreshold' => [ 'type' => 'integer', 'locationName' => 'silentDurationThreshold', ],
                'action' => [ 'type' => 'string', 'locationName' => 'action', ],
                'content' => [ 'type' => 'string', 'locationName' => 'content', ],
            ],
        ],
        'QueryConvoAgentListContent' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'totalElements' => [ 'type' => 'integer', 'locationName' => 'totalElements', ],
                'totalPages' => [ 'type' => 'integer', 'locationName' => 'totalPages', ],
                'content' => [ 'type' => 'list', 'member' => [ 'shape' => 'ConvoAgentStatusInfo', ], ],
            ],
        ],
        'SpeakCustomeText' => [
            'type' => 'structure',
            'members' => [
                'priority' => [ 'type' => 'string', 'locationName' => 'priority', ],
                'content' => [ 'type' => 'string', 'locationName' => 'content', ],
            ],
        ],
        'VadParams' => [
            'type' => 'structure',
            'members' => [
                'volumeDb' => [ 'type' => 'integer', 'locationName' => 'volumeDb', ],
                'paddingMs' => [ 'type' => 'integer', 'locationName' => 'paddingMs', ],
                'silenceDurationMs' => [ 'type' => 'integer', 'locationName' => 'silenceDurationMs', ],
                'threshold' => [ 'type' => 'float', 'locationName' => 'threshold', ],
            ],
        ],
        'StopConvoAgent' => [
            'type' => 'structure',
            'members' => [
                'appId' => [ 'type' => 'string', 'locationName' => 'appId', ],
                'agentId' => [ 'type' => 'string', 'locationName' => 'agentId', ],
            ],
        ],
        'StartConvoAgent' => [
            'type' => 'structure',
            'members' => [
                'agentName' => [ 'type' => 'string', 'locationName' => 'agentName', ],
                'agentJoinRoomParams' =>  [ 'shape' => 'AgentJoinRoomParams', ],
                'greetingMessage' => [ 'type' => 'string', 'locationName' => 'greetingMessage', ],
                'enableAsr' => [ 'type' => 'integer', 'locationName' => 'enableAsr', ],
                'asrVendor' => [ 'type' => 'string', 'locationName' => 'asrVendor', ],
                'asrParams' => [ 'type' => 'map', 'key' => [ 'type' => 'string', ], 'value' => [ 'type' => 'string', ], ],
                'enableLlm' => [ 'type' => 'integer', 'locationName' => 'enableLlm', ],
                'llmVendor' => [ 'type' => 'string', 'locationName' => 'llmVendor', ],
                'llmParams' => [ 'type' => 'map', 'key' => [ 'type' => 'string', ], 'value' => [ 'type' => 'string', ], ],
                'enableTts' => [ 'type' => 'integer', 'locationName' => 'enableTts', ],
                'ttsVendor' => [ 'type' => 'string', 'locationName' => 'ttsVendor', ],
                'ttsParams' => [ 'type' => 'map', 'key' => [ 'type' => 'string', ], 'value' => [ 'type' => 'string', ], ],
                'vadParams' =>  [ 'shape' => 'VadParams', ],
                'silenceParams' =>  [ 'shape' => 'SilenceParams', ],
                'agentParams' => [ 'type' => 'object', 'locationName' => 'agentParams', ],
            ],
        ],
        'ConvoAgentStatusInfo' => [
            'type' => 'structure',
            'members' => [
                'agentName' => [ 'type' => 'string', 'locationName' => 'agentName', ],
                'agentId' => [ 'type' => 'string', 'locationName' => 'agentId', ],
                'appId' => [ 'type' => 'string', 'locationName' => 'appId', ],
                'userPin' => [ 'type' => 'string', 'locationName' => 'userPin', ],
                'userRoomId' => [ 'type' => 'string', 'locationName' => 'userRoomId', ],
                'userId' => [ 'type' => 'string', 'locationName' => 'userId', ],
                'status' => [ 'type' => 'integer', 'locationName' => 'status', ],
                'errorMsg' => [ 'type' => 'string', 'locationName' => 'errorMsg', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'updateTime' => [ 'type' => 'string', 'locationName' => 'updateTime', ],
            ],
        ],
        'QueryConvoAgentStatusResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'QueryConvoAgentStatusResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'QueryConvoAgentListResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'QueryConvoAgentListResultShape', ],
            ],
        ],
        'QueryConvoAgentListRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'filters' => [ 'type' => 'list', 'member' => [ 'shape' => 'Filter', ], ],
            ],
        ],
        'QueryConvoAgentListResultShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'totalElements' => [ 'type' => 'integer', 'locationName' => 'totalElements', ],
                'totalPages' => [ 'type' => 'integer', 'locationName' => 'totalPages', ],
                'content' => [ 'type' => 'list', 'member' => [ 'shape' => 'ConvoAgentStatusInfo', ], ],
            ],
        ],
        'QueryConvoAgentStatusRequestShape' => [
            'type' => 'structure',
            'members' => [
                'agentId' => [ 'type' => 'string', 'locationName' => 'agentId', ],
            ],
        ],
        'QueryConvoAgentStatusResultShape' => [
            'type' => 'structure',
            'members' => [
                'agentName' => [ 'type' => 'string', 'locationName' => 'agentName', ],
                'agentId' => [ 'type' => 'string', 'locationName' => 'agentId', ],
                'appId' => [ 'type' => 'string', 'locationName' => 'appId', ],
                'userPin' => [ 'type' => 'string', 'locationName' => 'userPin', ],
                'userRoomId' => [ 'type' => 'string', 'locationName' => 'userRoomId', ],
                'userId' => [ 'type' => 'string', 'locationName' => 'userId', ],
                'status' => [ 'type' => 'integer', 'locationName' => 'status', ],
                'errorMsg' => [ 'type' => 'string', 'locationName' => 'errorMsg', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'updateTime' => [ 'type' => 'string', 'locationName' => 'updateTime', ],
            ],
        ],
        'StartConvoAgentResult' => [
            'type' => 'structure',
            'members' => [
                'agentId' => [ 'type' => 'string', 'locationName' => 'agentId', ],
                'status' => [ 'type' => 'integer', 'locationName' => 'status', ],
            ],
        ],
    ],
];
