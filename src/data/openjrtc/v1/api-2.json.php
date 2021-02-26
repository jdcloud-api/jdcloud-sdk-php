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
        'DescribeApps' => [
            'name' => 'DescribeApps',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/applications',
            ],
            'input' => [ 'shape' => 'DescribeAppsRequestShape', ],
            'output' => [ 'shape' => 'DescribeAppsResponseShape', ],
        ],
        'DescribeApp' => [
            'name' => 'DescribeApp',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/applications/{appId}',
            ],
            'input' => [ 'shape' => 'DescribeAppRequestShape', ],
            'output' => [ 'shape' => 'DescribeAppResponseShape', ],
        ],
        'DescribeAppKey' => [
            'name' => 'DescribeAppKey',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/applications/{appId}:describeAppKey',
            ],
            'input' => [ 'shape' => 'DescribeAppKeyRequestShape', ],
            'output' => [ 'shape' => 'DescribeAppKeyResponseShape', ],
        ],
        'CreateRoom' => [
            'name' => 'CreateRoom',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/createRoom',
            ],
            'input' => [ 'shape' => 'CreateRoomRequestShape', ],
            'output' => [ 'shape' => 'CreateRoomResponseShape', ],
        ],
        'DescribeRoomInfo' => [
            'name' => 'DescribeRoomInfo',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/rooms/{appId}',
            ],
            'input' => [ 'shape' => 'DescribeRoomInfoRequestShape', ],
            'output' => [ 'shape' => 'DescribeRoomInfoResponseShape', ],
        ],
        'UpdateRoom' => [
            'name' => 'UpdateRoom',
            'http' => [
                'method' => 'PUT',
                'requestUri' => '/v1/rooms/{appId}',
            ],
            'input' => [ 'shape' => 'UpdateRoomRequestShape', ],
            'output' => [ 'shape' => 'UpdateRoomResponseShape', ],
        ],
        'DeleteRoom' => [
            'name' => 'DeleteRoom',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/rooms/{appId}',
            ],
            'input' => [ 'shape' => 'DeleteRoomRequestShape', ],
            'output' => [ 'shape' => 'DeleteRoomResponseShape', ],
        ],
        'DescribeRooms' => [
            'name' => 'DescribeRooms',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/rooms',
            ],
            'input' => [ 'shape' => 'DescribeRoomsRequestShape', ],
            'output' => [ 'shape' => 'DescribeRoomsResponseShape', ],
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
        'RemoveRoomUser' => [
            'name' => 'RemoveRoomUser',
            'http' => [
                'method' => 'PUT',
                'requestUri' => '/v1/roomUser/{appId}/removeUser/{roomId}',
            ],
            'input' => [ 'shape' => 'RemoveRoomUserRequestShape', ],
            'output' => [ 'shape' => 'RemoveRoomUserResponseShape', ],
        ],
        'RemoveAllRoomUsers' => [
            'name' => 'RemoveAllRoomUsers',
            'http' => [
                'method' => 'PUT',
                'requestUri' => '/v1/roomUser/{appId}/removeAll/{roomId}',
            ],
            'input' => [ 'shape' => 'RemoveAllRoomUsersRequestShape', ],
            'output' => [ 'shape' => 'RemoveAllRoomUsersResponseShape', ],
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
        'SendMessageToUser' => [
            'name' => 'SendMessageToUser',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/message/{appId}/toUser/{roomId}',
            ],
            'input' => [ 'shape' => 'SendMessageToUserRequestShape', ],
            'output' => [ 'shape' => 'SendMessageToUserResponseShape', ],
        ],
        'SendMessageToRoom' => [
            'name' => 'SendMessageToRoom',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/message/{appId}/toRoom/{roomId}',
            ],
            'input' => [ 'shape' => 'SendMessageToRoomRequestShape', ],
            'output' => [ 'shape' => 'SendMessageToRoomResponseShape', ],
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
        'RoomInfosObj' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'totalElements' => [ 'type' => 'integer', 'locationName' => 'totalElements', ],
                'totalPages' => [ 'type' => 'integer', 'locationName' => 'totalPages', ],
                'content' => [ 'type' => 'list', 'member' => [ 'shape' => 'RoomInfoObj', ], ],
            ],
        ],
        'UpdateRoomRequestObj' => [
            'type' => 'structure',
            'members' => [
                'roomId' => [ 'type' => 'long', 'locationName' => 'roomId', ],
                'roomName' => [ 'type' => 'string', 'locationName' => 'roomName', ],
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
        'RoomInfoObj' => [
            'type' => 'structure',
            'members' => [
                'roomId' => [ 'type' => 'long', 'locationName' => 'roomId', ],
                'roomName' => [ 'type' => 'string', 'locationName' => 'roomName', ],
                'appId' => [ 'type' => 'string', 'locationName' => 'appId', ],
                'peerId' => [ 'type' => 'long', 'locationName' => 'peerId', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'updateTime' => [ 'type' => 'string', 'locationName' => 'updateTime', ],
            ],
        ],
        'RemoveRoomUsersInfo' => [
            'type' => 'structure',
            'members' => [
                'peerIds' => [ 'type' => 'list', 'member' => [ 'type' => 'long', ], ],
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
        'MessageToRoom' => [
            'type' => 'structure',
            'members' => [
                'eventName' => [ 'type' => 'string', 'locationName' => 'eventName', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
            ],
        ],
        'MessageToUser' => [
            'type' => 'structure',
            'members' => [
                'eventName' => [ 'type' => 'string', 'locationName' => 'eventName', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'peerId' => [ 'type' => 'long', 'locationName' => 'peerId', ],
            ],
        ],
        'DescribeAppsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
            ],
        ],
        'DescribeAppsResultShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'totalElements' => [ 'type' => 'integer', 'locationName' => 'totalElements', ],
                'totalPages' => [ 'type' => 'integer', 'locationName' => 'totalPages', ],
                'content' => [ 'type' => 'list', 'member' => [ 'shape' => 'AppInfoObject', ], ],
            ],
        ],
        'DescribeAppResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'DescribeAppResultShape', ],
            ],
        ],
        'DescribeAppResultShape' => [
            'type' => 'structure',
            'members' => [
                'appId' => [ 'type' => 'string', 'locationName' => 'appId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'billType' => [ 'type' => 'string', 'locationName' => 'billType', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
            ],
        ],
        'DescribeAppsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'DescribeAppsResultShape', ],
            ],
        ],
        'DescribeAppKeyResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'DescribeAppKeyResultShape', ],
            ],
        ],
        'DescribeAppRequestShape' => [
            'type' => 'structure',
            'members' => [
                'appId' => [ 'type' => 'string', 'locationName' => 'appId', ],
            ],
        ],
        'DescribeAppKeyRequestShape' => [
            'type' => 'structure',
            'members' => [
                'appId' => [ 'type' => 'string', 'locationName' => 'appId', ],
            ],
        ],
        'DescribeAppKeyResultShape' => [
            'type' => 'structure',
            'members' => [
                'appId' => [ 'type' => 'string', 'locationName' => 'appId', ],
                'appKey' => [ 'type' => 'string', 'locationName' => 'appKey', ],
            ],
        ],
        'DescribeRoomInfoResultShape' => [
            'type' => 'structure',
            'members' => [
                'roomId' => [ 'type' => 'long', 'locationName' => 'roomId', ],
                'roomName' => [ 'type' => 'string', 'locationName' => 'roomName', ],
                'appId' => [ 'type' => 'string', 'locationName' => 'appId', ],
                'peerId' => [ 'type' => 'long', 'locationName' => 'peerId', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'updateTime' => [ 'type' => 'string', 'locationName' => 'updateTime', ],
            ],
        ],
        'CreateRoomResultShape' => [
            'type' => 'structure',
            'members' => [
                'roomId' => [ 'type' => 'long', 'locationName' => 'roomId', ],
                'roomName' => [ 'type' => 'string', 'locationName' => 'roomName', ],
                'appId' => [ 'type' => 'string', 'locationName' => 'appId', ],
                'peerId' => [ 'type' => 'long', 'locationName' => 'peerId', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'updateTime' => [ 'type' => 'string', 'locationName' => 'updateTime', ],
            ],
        ],
        'DeleteRoomResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeRoomInfoResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeRoomInfoResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'UpdateRoomResultShape' => [
            'type' => 'structure',
            'members' => [
                'roomId' => [ 'type' => 'long', 'locationName' => 'roomId', ],
                'roomName' => [ 'type' => 'string', 'locationName' => 'roomName', ],
                'appId' => [ 'type' => 'string', 'locationName' => 'appId', ],
                'peerId' => [ 'type' => 'long', 'locationName' => 'peerId', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'updateTime' => [ 'type' => 'string', 'locationName' => 'updateTime', ],
            ],
        ],
        'UpdateRoomResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'UpdateRoomResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DeleteRoomResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'CreateRoomResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'CreateRoomResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
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
        'DescribeRoomsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'DescribeRoomsResultShape', ],
            ],
        ],
        'UpdateRoomRequestShape' => [
            'type' => 'structure',
            'members' => [
                'roomId' => [ 'type' => 'long', 'locationName' => 'roomId', ],
                'roomName' => [ 'type' => 'string', 'locationName' => 'roomName', ],
                'appId' => [ 'type' => 'string', 'locationName' => 'appId', ],
            ],
        ],
        'DeleteRoomRequestShape' => [
            'type' => 'structure',
            'members' => [
                'roomId' => [ 'type' => 'long', 'locationName' => 'roomId', ],
                'appId' => [ 'type' => 'string', 'locationName' => 'appId', ],
            ],
        ],
        'DescribeRoomsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'filters' => [ 'type' => 'list', 'member' => [ 'shape' => 'Filter', ], ],
            ],
        ],
        'DescribeRoomsResultShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'totalElements' => [ 'type' => 'integer', 'locationName' => 'totalElements', ],
                'totalPages' => [ 'type' => 'integer', 'locationName' => 'totalPages', ],
                'content' => [ 'type' => 'list', 'member' => [ 'shape' => 'RoomInfoObj', ], ],
            ],
        ],
        'DescribeRoomInfoRequestShape' => [
            'type' => 'structure',
            'members' => [
                'roomId' => [ 'type' => 'long', 'locationName' => 'roomId', ],
                'appId' => [ 'type' => 'string', 'locationName' => 'appId', ],
            ],
        ],
        'DescribeRoomOnlineUserNumRequestShape' => [
            'type' => 'structure',
            'members' => [
                'roomId' => [ 'type' => 'long', 'locationName' => 'roomId', ],
            ],
        ],
        'RemoveRoomUserRequestShape' => [
            'type' => 'structure',
            'members' => [
                'peerIds' => [ 'type' => 'list', 'member' => [ 'type' => 'long', ], ],
                'appId' => [ 'type' => 'string', 'locationName' => 'appId', ],
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
        'RemoveAllRoomUsersRequestShape' => [
            'type' => 'structure',
            'members' => [
                'appId' => [ 'type' => 'string', 'locationName' => 'appId', ],
                'roomId' => [ 'type' => 'long', 'locationName' => 'roomId', ],
            ],
        ],
        'RemoveRoomUserResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeRoomOnlineUserNumResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'DescribeRoomOnlineUserNumResultShape', ],
            ],
        ],
        'RemoveAllRoomUsersResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'RemoveAllRoomUsersResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'RemoveRoomUserResultShape' => [
            'type' => 'structure',
            'members' => [
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
        'SendMessageToUserResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'SendMessageToRoomResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'SendMessageToUserRequestShape' => [
            'type' => 'structure',
            'members' => [
                'eventName' => [ 'type' => 'string', 'locationName' => 'eventName', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'peerId' => [ 'type' => 'long', 'locationName' => 'peerId', ],
                'appId' => [ 'type' => 'string', 'locationName' => 'appId', ],
                'roomId' => [ 'type' => 'long', 'locationName' => 'roomId', ],
            ],
        ],
        'SendMessageToRoomResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'SendMessageToUserResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'SendMessageToRoomRequestShape' => [
            'type' => 'structure',
            'members' => [
                'eventName' => [ 'type' => 'string', 'locationName' => 'eventName', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'appId' => [ 'type' => 'string', 'locationName' => 'appId', ],
                'roomId' => [ 'type' => 'long', 'locationName' => 'roomId', ],
            ],
        ],
    ],
];
