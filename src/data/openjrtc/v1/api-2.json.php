<?php
// This file was auto-generated
return [
//    'version' => '',
    'metadata' =>
    [
//        'apiVersion' => '',
//        'endpointPrefix' => 'openjrtc',
        'protocol' => 'json',
//        'serviceFullName' => 'openjrtc',
//        'serviceId' => 'openjrtc',
    ],
    'operations' => [
        'CreateRoom' => [
            'name' => 'CreateRoom',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/createRoom',
            ],
            'input' => [ 'shape' => 'CreateRoomRequestShape', ],
            'output' => [ 'shape' => 'CreateRoomResponseShape', ],
        ],
        'DescribeRoomOnlineUserNum' => [
            'name' => 'DescribeRoomOnlineUserNum',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/describeRoomOnlineUserNum/{roomId}',
            ],
            'input' => [ 'shape' => 'DescribeRoomOnlineUserNumRequestShape', ],
            'output' => [ 'shape' => 'DescribeRoomOnlineUserNumResponseShape', ],
        ],
        'CreateUser' => [
            'name' => 'CreateUser',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/createUser',
            ],
            'input' => [ 'shape' => 'CreateUserRequestShape', ],
            'output' => [ 'shape' => 'CreateUserResponseShape', ],
        ],
    ],
    'shapes' => [
        'AppConentObject' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'totalElements' => [ 'type' => 'integer', 'locationName' => 'totalElements', ],
                'totalPages' => [ 'type' => 'integer', 'locationName' => 'totalPages', ],
                'content' => [ 'type' => 'list', 'member' => [ 'shape' => 'AppInfoObject', ], ],
            ],
        ],
        'AppKeyInfoObject' => [
            'type' => 'structure',
            'members' => [
                'appId' => [ 'type' => 'string', 'locationName' => 'appId', ],
                'appKey' => [ 'type' => 'string', 'locationName' => 'appKey', ],
            ],
        ],
        'ModifyAppStatusRequestObject' => [
            'type' => 'structure',
            'members' => [
                'appId' => [ 'type' => 'string', 'locationName' => 'appId', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
            ],
        ],
        'CreateAppResultObject' => [
            'type' => 'structure',
            'members' => [
                'appId' => [ 'type' => 'string', 'locationName' => 'appId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'AppInfoObject' => [
            'type' => 'structure',
            'members' => [
                'appId' => [ 'type' => 'string', 'locationName' => 'appId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'billType' => [ 'type' => 'string', 'locationName' => 'billType', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
            ],
        ],
        'CreateAppRequestObject' => [
            'type' => 'structure',
            'members' => [
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'ModifyAppNameRequestObject' => [
            'type' => 'structure',
            'members' => [
                'appId' => [ 'type' => 'string', 'locationName' => 'appId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
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
        'Sort' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'direction' => [ 'type' => 'string', 'locationName' => 'direction', ],
            ],
        ],
        'CreateRoomResultObj' => [
            'type' => 'structure',
            'members' => [
                'roomId' => [ 'type' => 'long', 'locationName' => 'roomId', ],
                'roomName' => [ 'type' => 'string', 'locationName' => 'roomName', ],
                'appId' => [ 'type' => 'string', 'locationName' => 'appId', ],
                'peerId' => [ 'type' => 'long', 'locationName' => 'peerId', ],
            ],
        ],
        'CreateRoomRequestObj' => [
            'type' => 'structure',
            'members' => [
                'roomName' => [ 'type' => 'string', 'locationName' => 'roomName', ],
                'appId' => [ 'type' => 'string', 'locationName' => 'appId', ],
                'peerId' => [ 'type' => 'long', 'locationName' => 'peerId', ],
            ],
        ],
        'RoomUserNumInfos' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'totalElements' => [ 'type' => 'integer', 'locationName' => 'totalElements', ],
                'totalPages' => [ 'type' => 'integer', 'locationName' => 'totalPages', ],
                'content' => [ 'type' => 'list', 'member' => [ 'shape' => 'UserNumInfoObj', ], ],
            ],
        ],
        'UserNumInfoObj' => [
            'type' => 'structure',
            'members' => [
                'appId' => [ 'type' => 'string', 'locationName' => 'appId', ],
                'roomId' => [ 'type' => 'long', 'locationName' => 'roomId', ],
                'number' => [ 'type' => 'integer', 'locationName' => 'number', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
            ],
        ],
        'GenerateTokenAuthInfo' => [
            'type' => 'structure',
            'members' => [
                'appId' => [ 'type' => 'string', 'locationName' => 'appId', ],
                'appKey' => [ 'type' => 'string', 'locationName' => 'appKey', ],
                'userId' => [ 'type' => 'string', 'locationName' => 'userId', ],
                'roomId' => [ 'type' => 'long', 'locationName' => 'roomId', ],
                'timestamp' => [ 'type' => 'long', 'locationName' => 'timestamp', ],
            ],
        ],
        'CheckAuthInfo' => [
            'type' => 'structure',
            'members' => [
                'appId' => [ 'type' => 'string', 'locationName' => 'appId', ],
                'appKey' => [ 'type' => 'string', 'locationName' => 'appKey', ],
                'userId' => [ 'type' => 'string', 'locationName' => 'userId', ],
                'roomId' => [ 'type' => 'long', 'locationName' => 'roomId', ],
                'nonce' => [ 'type' => 'string', 'locationName' => 'nonce', ],
                'timestamp' => [ 'type' => 'long', 'locationName' => 'timestamp', ],
                'token' => [ 'type' => 'string', 'locationName' => 'token', ],
            ],
        ],
        'JRTCAuthInfo' => [
            'type' => 'structure',
            'members' => [
                'appId' => [ 'type' => 'string', 'locationName' => 'appId', ],
                'appKey' => [ 'type' => 'string', 'locationName' => 'appKey', ],
                'userId' => [ 'type' => 'string', 'locationName' => 'userId', ],
                'roomId' => [ 'type' => 'long', 'locationName' => 'roomId', ],
                'nonce' => [ 'type' => 'string', 'locationName' => 'nonce', ],
                'timestamp' => [ 'type' => 'long', 'locationName' => 'timestamp', ],
                'token' => [ 'type' => 'string', 'locationName' => 'token', ],
                'available' => [ 'type' => 'boolean', 'locationName' => 'available', ],
            ],
        ],
        'CreateUserResultObj' => [
            'type' => 'structure',
            'members' => [
                'peerId' => [ 'type' => 'long', 'locationName' => 'peerId', ],
                'appId' => [ 'type' => 'string', 'locationName' => 'appId', ],
                'userId' => [ 'type' => 'string', 'locationName' => 'userId', ],
            ],
        ],
        'CreateUserRequestObj' => [
            'type' => 'structure',
            'members' => [
                'appId' => [ 'type' => 'string', 'locationName' => 'appId', ],
                'userName' => [ 'type' => 'string', 'locationName' => 'userName', ],
                'userId' => [ 'type' => 'string', 'locationName' => 'userId', ],
                'temporary' => [ 'type' => 'boolean', 'locationName' => 'temporary', ],
            ],
        ],
        'CreateRoomRequestShape' => [
            'type' => 'structure',
            'members' => [
                'roomName' => [ 'type' => 'string', 'locationName' => 'roomName', ],
                'appId' => [ 'type' => 'string', 'locationName' => 'appId', ],
                'peerId' => [ 'type' => 'long', 'locationName' => 'peerId', ],
            ],
        ],
        'CreateRoomResultShape' => [
            'type' => 'structure',
            'members' => [
                'roomId' => [ 'type' => 'long', 'locationName' => 'roomId', ],
                'roomName' => [ 'type' => 'string', 'locationName' => 'roomName', ],
                'appId' => [ 'type' => 'string', 'locationName' => 'appId', ],
                'peerId' => [ 'type' => 'long', 'locationName' => 'peerId', ],
            ],
        ],
        'CreateRoomResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'CreateRoomResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeRoomOnlineUserNumRequestShape' => [
            'type' => 'structure',
            'members' => [
                'roomId' => [ 'type' => 'long', 'locationName' => 'roomId', ],
            ],
        ],
        'DescribeRoomOnlineUserNumResultShape' => [
            'type' => 'structure',
            'members' => [
                'appId' => [ 'type' => 'string', 'locationName' => 'appId', ],
                'roomId' => [ 'type' => 'long', 'locationName' => 'roomId', ],
                'number' => [ 'type' => 'integer', 'locationName' => 'number', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
            ],
        ],
        'DescribeRoomOnlineUserNumResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'DescribeRoomOnlineUserNumResultShape', ],
            ],
        ],
        'CreateUserResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'CreateUserResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'CreateUserResultShape' => [
            'type' => 'structure',
            'members' => [
                'peerId' => [ 'type' => 'long', 'locationName' => 'peerId', ],
                'appId' => [ 'type' => 'string', 'locationName' => 'appId', ],
                'userId' => [ 'type' => 'string', 'locationName' => 'userId', ],
            ],
        ],
        'CreateUserRequestShape' => [
            'type' => 'structure',
            'members' => [
                'appId' => [ 'type' => 'string', 'locationName' => 'appId', ],
                'userName' => [ 'type' => 'string', 'locationName' => 'userName', ],
                'userId' => [ 'type' => 'string', 'locationName' => 'userId', ],
                'temporary' => [ 'type' => 'boolean', 'locationName' => 'temporary', ],
            ],
        ],
    ],
];
