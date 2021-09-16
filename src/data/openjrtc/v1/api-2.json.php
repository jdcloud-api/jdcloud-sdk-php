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
        'DescribeUserByPeer' => [
            'name' => 'DescribeUserByPeer',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/describeUserByPeer',
            ],
            'input' => [ 'shape' => 'DescribeUserByPeerRequestShape', ],
            'output' => [ 'shape' => 'DescribeUserByPeerResponseShape', ],
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
        'RegisterUser' => [
            'name' => 'RegisterUser',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/registerUser',
            ],
            'input' => [ 'shape' => 'RegisterUserRequestShape', ],
            'output' => [ 'shape' => 'RegisterUserResponseShape', ],
        ],
        'DescribeRegisterUser' => [
            'name' => 'DescribeRegisterUser',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/describeRegisterUser/{appId}',
            ],
            'input' => [ 'shape' => 'DescribeRegisterUserRequestShape', ],
            'output' => [ 'shape' => 'DescribeRegisterUserResponseShape', ],
        ],
        'DescribeRegisterUsers' => [
            'name' => 'DescribeRegisterUsers',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/describeRegisterUsers/{appId}',
            ],
            'input' => [ 'shape' => 'DescribeRegisterUsersRequestShape', ],
            'output' => [ 'shape' => 'DescribeRegisterUsersResponseShape', ],
        ],
        'RemoveUserByUserRoomId' => [
            'name' => 'RemoveUserByUserRoomId',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/removeUserByUserRoomId/{appId}',
            ],
            'input' => [ 'shape' => 'RemoveUserByUserRoomIdRequestShape', ],
            'output' => [ 'shape' => 'RemoveUserByUserRoomIdResponseShape', ],
        ],
        'RemoveAllUsersByUserRoomId' => [
            'name' => 'RemoveAllUsersByUserRoomId',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/removeAllUsersByUserRoomId/{appId}',
            ],
            'input' => [ 'shape' => 'RemoveAllUsersByUserRoomIdRequestShape', ],
            'output' => [ 'shape' => 'RemoveAllUsersByUserRoomIdResponseShape', ],
        ],
        'DescribeRoomUsers' => [
            'name' => 'DescribeRoomUsers',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/describeRoomUsers/{appId}',
            ],
            'input' => [ 'shape' => 'DescribeRoomUsersRequestShape', ],
            'output' => [ 'shape' => 'DescribeRoomUsersResponseShape', ],
        ],
        'DescribeRoomUsersNum' => [
            'name' => 'DescribeRoomUsersNum',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/describeRoomUsersNum/{appId}',
            ],
            'input' => [ 'shape' => 'DescribeRoomUsersNumRequestShape', ],
            'output' => [ 'shape' => 'DescribeRoomUsersNumResponseShape', ],
        ],
        'CreateToken' => [
            'name' => 'CreateToken',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/createToken',
            ],
            'input' => [ 'shape' => 'CreateTokenRequestShape', ],
            'output' => [ 'shape' => 'CreateTokenResponseShape', ],
        ],
        'PostMessageToUserRoom' => [
            'name' => 'PostMessageToUserRoom',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/postMessageToUserRoom',
            ],
            'input' => [ 'shape' => 'PostMessageToUserRoomRequestShape', ],
            'output' => [ 'shape' => 'PostMessageToUserRoomResponseShape', ],
        ],
        'PostMessageToUser' => [
            'name' => 'PostMessageToUser',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/postMessageToUser',
            ],
            'input' => [ 'shape' => 'PostMessageToUserRequestShape', ],
            'output' => [ 'shape' => 'PostMessageToUserResponseShape', ],
        ],
        'RegisterUserRoom' => [
            'name' => 'RegisterUserRoom',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/registerUserRoom',
            ],
            'input' => [ 'shape' => 'RegisterUserRoomRequestShape', ],
            'output' => [ 'shape' => 'RegisterUserRoomResponseShape', ],
        ],
        'UpdateUserRoom' => [
            'name' => 'UpdateUserRoom',
            'http' => [
                'method' => 'PUT',
                'requestUri' => '/v1/updateUserRoom/{appId}',
            ],
            'input' => [ 'shape' => 'UpdateUserRoomRequestShape', ],
            'output' => [ 'shape' => 'UpdateUserRoomResponseShape', ],
        ],
        'DescribeUserRoom' => [
            'name' => 'DescribeUserRoom',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/describeUserRoom/{appId}',
            ],
            'input' => [ 'shape' => 'DescribeUserRoomRequestShape', ],
            'output' => [ 'shape' => 'DescribeUserRoomResponseShape', ],
        ],
        'DescribeUserRooms' => [
            'name' => 'DescribeUserRooms',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/describeUserRooms/{appId}',
            ],
            'input' => [ 'shape' => 'DescribeUserRoomsRequestShape', ],
            'output' => [ 'shape' => 'DescribeUserRoomsResponseShape', ],
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
        'ModifyAppRequestObject' => [
            'type' => 'structure',
            'members' => [
                'appId' => [ 'type' => 'string', 'locationName' => 'appId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
                'roomType' => [ 'type' => 'integer', 'locationName' => 'roomType', ],
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
                'roomType' => [ 'type' => 'integer', 'locationName' => 'roomType', ],
                'billType' => [ 'type' => 'string', 'locationName' => 'billType', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
            ],
        ],
        'CreateAppRequestObject' => [
            'type' => 'structure',
            'members' => [
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
                'roomType' => [ 'type' => 'integer', 'locationName' => 'roomType', ],
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
                'roomType' => [ 'type' => 'integer', 'locationName' => 'roomType', ],
                'peerId' => [ 'type' => 'long', 'locationName' => 'peerId', ],
            ],
        ],
        'RoomInfoObj' => [
            'type' => 'structure',
            'members' => [
                'roomId' => [ 'type' => 'long', 'locationName' => 'roomId', ],
                'roomName' => [ 'type' => 'string', 'locationName' => 'roomName', ],
                'roomType' => [ 'type' => 'integer', 'locationName' => 'roomType', ],
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
        'UserInfoObj' => [
            'type' => 'structure',
            'members' => [
                'peerId' => [ 'type' => 'long', 'locationName' => 'peerId', ],
                'appId' => [ 'type' => 'string', 'locationName' => 'appId', ],
                'userId' => [ 'type' => 'string', 'locationName' => 'userId', ],
                'temporary' => [ 'type' => 'boolean', 'locationName' => 'temporary', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
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
        'NotifyConfigRequestObj' => [
            'type' => 'structure',
            'members' => [
                'content' => [ 'type' => 'list', 'member' => [ 'shape' => 'NotifyConfigObj', ], ],
            ],
        ],
        'NotifyConfigObj' => [
            'type' => 'structure',
            'members' => [
                'configId' => [ 'type' => 'long', 'locationName' => 'configId', ],
                'notifyType' => [ 'type' => 'integer', 'locationName' => 'notifyType', ],
                'url' => [ 'type' => 'string', 'locationName' => 'url', ],
            ],
        ],
        'RoomUserInfoObj' => [
            'type' => 'structure',
            'members' => [
                'appId' => [ 'type' => 'string', 'locationName' => 'appId', ],
                'userRoomId' => [ 'type' => 'string', 'locationName' => 'userRoomId', ],
                'userId' => [ 'type' => 'string', 'locationName' => 'userId', ],
                'nickName' => [ 'type' => 'string', 'locationName' => 'nickName', ],
                'connectId' => [ 'type' => 'string', 'locationName' => 'connectId', ],
                'status' => [ 'type' => 'integer', 'locationName' => 'status', ],
                'joinTime' => [ 'type' => 'string', 'locationName' => 'joinTime', ],
                'updateTime' => [ 'type' => 'string', 'locationName' => 'updateTime', ],
            ],
        ],
        'RoomUsersNumInfoObj' => [
            'type' => 'structure',
            'members' => [
                'appId' => [ 'type' => 'string', 'locationName' => 'appId', ],
                'userRoomId' => [ 'type' => 'string', 'locationName' => 'userRoomId', ],
                'onlineNumber' => [ 'type' => 'integer', 'locationName' => 'onlineNumber', ],
                'offlineNumber' => [ 'type' => 'integer', 'locationName' => 'offlineNumber', ],
                'total' => [ 'type' => 'integer', 'locationName' => 'total', ],
            ],
        ],
        'RoomUserInfosObj' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'totalElements' => [ 'type' => 'integer', 'locationName' => 'totalElements', ],
                'totalPages' => [ 'type' => 'integer', 'locationName' => 'totalPages', ],
                'content' => [ 'type' => 'list', 'member' => [ 'shape' => 'RoomUserInfoObj', ], ],
            ],
        ],
        'RemoveRoomUsersObj' => [
            'type' => 'structure',
            'members' => [
                'userRoomId' => [ 'type' => 'string', 'locationName' => 'userRoomId', ],
                'userIds' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'RemoveAllRoomUsersObj' => [
            'type' => 'structure',
            'members' => [
                'userRoomId' => [ 'type' => 'string', 'locationName' => 'userRoomId', ],
            ],
        ],
        'ValidateTokenInfo' => [
            'type' => 'structure',
            'members' => [
                'appId' => [ 'type' => 'string', 'locationName' => 'appId', ],
                'appKey' => [ 'type' => 'string', 'locationName' => 'appKey', ],
                'userId' => [ 'type' => 'string', 'locationName' => 'userId', ],
                'userRoomId' => [ 'type' => 'string', 'locationName' => 'userRoomId', ],
                'nonce' => [ 'type' => 'string', 'locationName' => 'nonce', ],
                'timestamp' => [ 'type' => 'long', 'locationName' => 'timestamp', ],
                'token' => [ 'type' => 'string', 'locationName' => 'token', ],
            ],
        ],
        'CreateTokenInfo' => [
            'type' => 'structure',
            'members' => [
                'appId' => [ 'type' => 'string', 'locationName' => 'appId', ],
                'appKey' => [ 'type' => 'string', 'locationName' => 'appKey', ],
                'userId' => [ 'type' => 'string', 'locationName' => 'userId', ],
                'userRoomId' => [ 'type' => 'string', 'locationName' => 'userRoomId', ],
                'timestamp' => [ 'type' => 'long', 'locationName' => 'timestamp', ],
            ],
        ],
        'TokenInfo' => [
            'type' => 'structure',
            'members' => [
                'appId' => [ 'type' => 'string', 'locationName' => 'appId', ],
                'appKey' => [ 'type' => 'string', 'locationName' => 'appKey', ],
                'userId' => [ 'type' => 'string', 'locationName' => 'userId', ],
                'userRoomId' => [ 'type' => 'string', 'locationName' => 'userRoomId', ],
                'nonce' => [ 'type' => 'string', 'locationName' => 'nonce', ],
                'timestamp' => [ 'type' => 'long', 'locationName' => 'timestamp', ],
                'token' => [ 'type' => 'string', 'locationName' => 'token', ],
                'available' => [ 'type' => 'boolean', 'locationName' => 'available', ],
            ],
        ],
        'RegisterUserInfoObj' => [
            'type' => 'structure',
            'members' => [
                'appId' => [ 'type' => 'string', 'locationName' => 'appId', ],
                'peerId' => [ 'type' => 'long', 'locationName' => 'peerId', ],
                'userId' => [ 'type' => 'string', 'locationName' => 'userId', ],
                'userName' => [ 'type' => 'string', 'locationName' => 'userName', ],
                'temporary' => [ 'type' => 'boolean', 'locationName' => 'temporary', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
            ],
        ],
        'RegisterUserResultObj' => [
            'type' => 'structure',
            'members' => [
                'appId' => [ 'type' => 'string', 'locationName' => 'appId', ],
                'userId' => [ 'type' => 'string', 'locationName' => 'userId', ],
                'peerId' => [ 'type' => 'long', 'locationName' => 'peerId', ],
            ],
        ],
        'RegisterUserInfosObj' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'totalElements' => [ 'type' => 'integer', 'locationName' => 'totalElements', ],
                'totalPages' => [ 'type' => 'integer', 'locationName' => 'totalPages', ],
                'content' => [ 'type' => 'list', 'member' => [ 'shape' => 'RegisterUserInfoObj', ], ],
            ],
        ],
        'RegisterUserRequestObj' => [
            'type' => 'structure',
            'members' => [
                'appId' => [ 'type' => 'string', 'locationName' => 'appId', ],
                'userName' => [ 'type' => 'string', 'locationName' => 'userName', ],
                'userId' => [ 'type' => 'string', 'locationName' => 'userId', ],
                'temporary' => [ 'type' => 'boolean', 'locationName' => 'temporary', ],
            ],
        ],
        'MessageToUserRoom' => [
            'type' => 'structure',
            'members' => [
                'appId' => [ 'type' => 'string', 'locationName' => 'appId', ],
                'userRoomId' => [ 'type' => 'string', 'locationName' => 'userRoomId', ],
                'eventName' => [ 'type' => 'string', 'locationName' => 'eventName', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
            ],
        ],
        'MessageToRoomUser' => [
            'type' => 'structure',
            'members' => [
                'appId' => [ 'type' => 'string', 'locationName' => 'appId', ],
                'userRoomId' => [ 'type' => 'string', 'locationName' => 'userRoomId', ],
                'userId' => [ 'type' => 'string', 'locationName' => 'userId', ],
                'eventName' => [ 'type' => 'string', 'locationName' => 'eventName', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
            ],
        ],
        'RegisterUserRoomRequestObj' => [
            'type' => 'structure',
            'members' => [
                'userRoomId' => [ 'type' => 'string', 'locationName' => 'userRoomId', ],
                'roomName' => [ 'type' => 'string', 'locationName' => 'roomName', ],
                'appId' => [ 'type' => 'string', 'locationName' => 'appId', ],
                'roomType' => [ 'type' => 'integer', 'locationName' => 'roomType', ],
            ],
        ],
        'UserRoomInfosObj' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'totalElements' => [ 'type' => 'integer', 'locationName' => 'totalElements', ],
                'totalPages' => [ 'type' => 'integer', 'locationName' => 'totalPages', ],
                'content' => [ 'type' => 'list', 'member' => [ 'shape' => 'UserRoomInfoObj', ], ],
            ],
        ],
        'UpdateUserRoomRequestObj' => [
            'type' => 'structure',
            'members' => [
                'userRoomId' => [ 'type' => 'string', 'locationName' => 'userRoomId', ],
                'roomName' => [ 'type' => 'string', 'locationName' => 'roomName', ],
                'roomType' => [ 'type' => 'integer', 'locationName' => 'roomType', ],
            ],
        ],
        'UserRoomInfoObj' => [
            'type' => 'structure',
            'members' => [
                'roomId' => [ 'type' => 'long', 'locationName' => 'roomId', ],
                'userRoomId' => [ 'type' => 'string', 'locationName' => 'userRoomId', ],
                'roomName' => [ 'type' => 'string', 'locationName' => 'roomName', ],
                'roomType' => [ 'type' => 'integer', 'locationName' => 'roomType', ],
                'appId' => [ 'type' => 'string', 'locationName' => 'appId', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'updateTime' => [ 'type' => 'string', 'locationName' => 'updateTime', ],
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
                'roomType' => [ 'type' => 'integer', 'locationName' => 'roomType', ],
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
                'roomType' => [ 'type' => 'integer', 'locationName' => 'roomType', ],
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
                'roomType' => [ 'type' => 'integer', 'locationName' => 'roomType', ],
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
                'roomType' => [ 'type' => 'integer', 'locationName' => 'roomType', ],
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
                'roomType' => [ 'type' => 'integer', 'locationName' => 'roomType', ],
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
        'DescribeUserByPeerResultShape' => [
            'type' => 'structure',
            'members' => [
                'peerId' => [ 'type' => 'long', 'locationName' => 'peerId', ],
                'appId' => [ 'type' => 'string', 'locationName' => 'appId', ],
                'userId' => [ 'type' => 'string', 'locationName' => 'userId', ],
                'temporary' => [ 'type' => 'boolean', 'locationName' => 'temporary', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
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
        'DescribeUserByPeerRequestShape' => [
            'type' => 'structure',
            'members' => [
                'peerId' => [ 'type' => 'long', 'locationName' => 'peerId', ],
            ],
        ],
        'DescribeUserByPeerResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'DescribeUserByPeerResultShape', ],
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
        'DescribeRegisterUserResultShape' => [
            'type' => 'structure',
            'members' => [
                'appId' => [ 'type' => 'string', 'locationName' => 'appId', ],
                'peerId' => [ 'type' => 'long', 'locationName' => 'peerId', ],
                'userId' => [ 'type' => 'string', 'locationName' => 'userId', ],
                'userName' => [ 'type' => 'string', 'locationName' => 'userName', ],
                'temporary' => [ 'type' => 'boolean', 'locationName' => 'temporary', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
            ],
        ],
        'DescribeRegisterUsersResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'DescribeRegisterUsersResultShape', ],
            ],
        ],
        'DescribeRegisterUsersRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'filters' => [ 'type' => 'list', 'member' => [ 'shape' => 'Filter', ], ],
                'appId' => [ 'type' => 'string', 'locationName' => 'appId', ],
            ],
        ],
        'RegisterUserResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'RegisterUserResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeRegisterUsersResultShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'totalElements' => [ 'type' => 'integer', 'locationName' => 'totalElements', ],
                'totalPages' => [ 'type' => 'integer', 'locationName' => 'totalPages', ],
                'content' => [ 'type' => 'list', 'member' => [ 'shape' => 'RegisterUserInfoObj', ], ],
            ],
        ],
        'DescribeRegisterUserRequestShape' => [
            'type' => 'structure',
            'members' => [
                'userId' => [ 'type' => 'string', 'locationName' => 'userId', ],
                'appId' => [ 'type' => 'string', 'locationName' => 'appId', ],
            ],
        ],
        'RegisterUserRequestShape' => [
            'type' => 'structure',
            'members' => [
                'appId' => [ 'type' => 'string', 'locationName' => 'appId', ],
                'userName' => [ 'type' => 'string', 'locationName' => 'userName', ],
                'userId' => [ 'type' => 'string', 'locationName' => 'userId', ],
                'temporary' => [ 'type' => 'boolean', 'locationName' => 'temporary', ],
            ],
        ],
        'DescribeRegisterUserResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'DescribeRegisterUserResultShape', ],
            ],
        ],
        'RegisterUserResultShape' => [
            'type' => 'structure',
            'members' => [
                'appId' => [ 'type' => 'string', 'locationName' => 'appId', ],
                'userId' => [ 'type' => 'string', 'locationName' => 'userId', ],
                'peerId' => [ 'type' => 'long', 'locationName' => 'peerId', ],
            ],
        ],
        'RemoveAllUsersByUserRoomIdResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DescribeRoomUsersResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'DescribeRoomUsersResultShape', ],
            ],
        ],
        'RemoveUserByUserRoomIdResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'RemoveUserByUserRoomIdResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DescribeRoomUsersNumResultShape' => [
            'type' => 'structure',
            'members' => [
                'appId' => [ 'type' => 'string', 'locationName' => 'appId', ],
                'userRoomId' => [ 'type' => 'string', 'locationName' => 'userRoomId', ],
                'onlineNumber' => [ 'type' => 'integer', 'locationName' => 'onlineNumber', ],
                'offlineNumber' => [ 'type' => 'integer', 'locationName' => 'offlineNumber', ],
                'total' => [ 'type' => 'integer', 'locationName' => 'total', ],
            ],
        ],
        'DescribeRoomUsersNumResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'DescribeRoomUsersNumResultShape', ],
            ],
        ],
        'DescribeRoomUsersRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'userRoomId' => [ 'type' => 'string', 'locationName' => 'userRoomId', ],
                'filters' => [ 'type' => 'list', 'member' => [ 'shape' => 'Filter', ], ],
                'appId' => [ 'type' => 'string', 'locationName' => 'appId', ],
            ],
        ],
        'RemoveAllUsersByUserRoomIdRequestShape' => [
            'type' => 'structure',
            'members' => [
                'userRoomId' => [ 'type' => 'string', 'locationName' => 'userRoomId', ],
                'appId' => [ 'type' => 'string', 'locationName' => 'appId', ],
            ],
        ],
        'RemoveUserByUserRoomIdRequestShape' => [
            'type' => 'structure',
            'members' => [
                'userRoomId' => [ 'type' => 'string', 'locationName' => 'userRoomId', ],
                'userIds' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'appId' => [ 'type' => 'string', 'locationName' => 'appId', ],
            ],
        ],
        'RemoveAllUsersByUserRoomIdResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeRoomUsersNumRequestShape' => [
            'type' => 'structure',
            'members' => [
                'userRoomId' => [ 'type' => 'string', 'locationName' => 'userRoomId', ],
                'appId' => [ 'type' => 'string', 'locationName' => 'appId', ],
            ],
        ],
        'DescribeRoomUsersResultShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'totalElements' => [ 'type' => 'integer', 'locationName' => 'totalElements', ],
                'totalPages' => [ 'type' => 'integer', 'locationName' => 'totalPages', ],
                'content' => [ 'type' => 'list', 'member' => [ 'shape' => 'RoomUserInfoObj', ], ],
            ],
        ],
        'CreateTokenResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'CreateTokenResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'CreateTokenResultShape' => [
            'type' => 'structure',
            'members' => [
                'appId' => [ 'type' => 'string', 'locationName' => 'appId', ],
                'appKey' => [ 'type' => 'string', 'locationName' => 'appKey', ],
                'userId' => [ 'type' => 'string', 'locationName' => 'userId', ],
                'userRoomId' => [ 'type' => 'string', 'locationName' => 'userRoomId', ],
                'nonce' => [ 'type' => 'string', 'locationName' => 'nonce', ],
                'timestamp' => [ 'type' => 'long', 'locationName' => 'timestamp', ],
                'token' => [ 'type' => 'string', 'locationName' => 'token', ],
                'available' => [ 'type' => 'boolean', 'locationName' => 'available', ],
            ],
        ],
        'CreateTokenRequestShape' => [
            'type' => 'structure',
            'members' => [
                'appId' => [ 'type' => 'string', 'locationName' => 'appId', ],
                'appKey' => [ 'type' => 'string', 'locationName' => 'appKey', ],
                'userId' => [ 'type' => 'string', 'locationName' => 'userId', ],
                'userRoomId' => [ 'type' => 'string', 'locationName' => 'userRoomId', ],
                'timestamp' => [ 'type' => 'long', 'locationName' => 'timestamp', ],
            ],
        ],
        'PostMessageToUserRoomRequestShape' => [
            'type' => 'structure',
            'members' => [
                'appId' => [ 'type' => 'string', 'locationName' => 'appId', ],
                'userRoomId' => [ 'type' => 'string', 'locationName' => 'userRoomId', ],
                'eventName' => [ 'type' => 'string', 'locationName' => 'eventName', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
            ],
        ],
        'PostMessageToUserRequestShape' => [
            'type' => 'structure',
            'members' => [
                'appId' => [ 'type' => 'string', 'locationName' => 'appId', ],
                'userRoomId' => [ 'type' => 'string', 'locationName' => 'userRoomId', ],
                'userId' => [ 'type' => 'string', 'locationName' => 'userId', ],
                'eventName' => [ 'type' => 'string', 'locationName' => 'eventName', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
            ],
        ],
        'PostMessageToUserRoomResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'PostMessageToUserRoomResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'PostMessageToUserResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'PostMessageToUserResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'RegisterUserRoomResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'RegisterUserRoomResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeUserRoomResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeUserRoomResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeUserRoomResultShape' => [
            'type' => 'structure',
            'members' => [
                'roomId' => [ 'type' => 'long', 'locationName' => 'roomId', ],
                'userRoomId' => [ 'type' => 'string', 'locationName' => 'userRoomId', ],
                'roomName' => [ 'type' => 'string', 'locationName' => 'roomName', ],
                'roomType' => [ 'type' => 'integer', 'locationName' => 'roomType', ],
                'appId' => [ 'type' => 'string', 'locationName' => 'appId', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'updateTime' => [ 'type' => 'string', 'locationName' => 'updateTime', ],
            ],
        ],
        'DescribeUserRoomRequestShape' => [
            'type' => 'structure',
            'members' => [
                'userRoomId' => [ 'type' => 'string', 'locationName' => 'userRoomId', ],
                'appId' => [ 'type' => 'string', 'locationName' => 'appId', ],
            ],
        ],
        'UpdateUserRoomResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'UpdateUserRoomResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeUserRoomsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'filters' => [ 'type' => 'list', 'member' => [ 'shape' => 'Filter', ], ],
                'appId' => [ 'type' => 'string', 'locationName' => 'appId', ],
            ],
        ],
        'UpdateUserRoomRequestShape' => [
            'type' => 'structure',
            'members' => [
                'userRoomId' => [ 'type' => 'string', 'locationName' => 'userRoomId', ],
                'roomName' => [ 'type' => 'string', 'locationName' => 'roomName', ],
                'roomType' => [ 'type' => 'integer', 'locationName' => 'roomType', ],
                'appId' => [ 'type' => 'string', 'locationName' => 'appId', ],
            ],
        ],
        'UpdateUserRoomResultShape' => [
            'type' => 'structure',
            'members' => [
                'roomId' => [ 'type' => 'long', 'locationName' => 'roomId', ],
                'userRoomId' => [ 'type' => 'string', 'locationName' => 'userRoomId', ],
                'roomName' => [ 'type' => 'string', 'locationName' => 'roomName', ],
                'roomType' => [ 'type' => 'integer', 'locationName' => 'roomType', ],
                'appId' => [ 'type' => 'string', 'locationName' => 'appId', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'updateTime' => [ 'type' => 'string', 'locationName' => 'updateTime', ],
            ],
        ],
        'DescribeUserRoomsResultShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'totalElements' => [ 'type' => 'integer', 'locationName' => 'totalElements', ],
                'totalPages' => [ 'type' => 'integer', 'locationName' => 'totalPages', ],
                'content' => [ 'type' => 'list', 'member' => [ 'shape' => 'UserRoomInfoObj', ], ],
            ],
        ],
        'DescribeUserRoomsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'DescribeUserRoomsResultShape', ],
            ],
        ],
        'RegisterUserRoomResultShape' => [
            'type' => 'structure',
            'members' => [
                'roomId' => [ 'type' => 'long', 'locationName' => 'roomId', ],
                'userRoomId' => [ 'type' => 'string', 'locationName' => 'userRoomId', ],
                'roomName' => [ 'type' => 'string', 'locationName' => 'roomName', ],
                'roomType' => [ 'type' => 'integer', 'locationName' => 'roomType', ],
                'appId' => [ 'type' => 'string', 'locationName' => 'appId', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'updateTime' => [ 'type' => 'string', 'locationName' => 'updateTime', ],
            ],
        ],
        'RegisterUserRoomRequestShape' => [
            'type' => 'structure',
            'members' => [
                'userRoomId' => [ 'type' => 'string', 'locationName' => 'userRoomId', ],
                'roomName' => [ 'type' => 'string', 'locationName' => 'roomName', ],
                'appId' => [ 'type' => 'string', 'locationName' => 'appId', ],
                'roomType' => [ 'type' => 'integer', 'locationName' => 'roomType', ],
            ],
        ],
    ],
];
