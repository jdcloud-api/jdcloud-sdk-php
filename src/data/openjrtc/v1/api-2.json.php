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
    ],
];
