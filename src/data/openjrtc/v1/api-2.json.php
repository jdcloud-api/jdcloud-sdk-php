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
        'StartAsrTask' => [
            'name' => 'StartAsrTask',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/startAsrTask',
            ],
            'input' => [ 'shape' => 'StartAsrTaskRequestShape', ],
            'output' => [ 'shape' => 'StartAsrTaskResponseShape', ],
        ],
        'StopAsrTask' => [
            'name' => 'StopAsrTask',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/stopAsrTask',
            ],
            'input' => [ 'shape' => 'StopAsrTaskRequestShape', ],
            'output' => [ 'shape' => 'StopAsrTaskResponseShape', ],
        ],
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
        'DescribeOnlineUserNum' => [
            'name' => 'DescribeOnlineUserNum',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/describeOnlineUserNum',
            ],
            'input' => [ 'shape' => 'DescribeOnlineUserNumRequestShape', ],
            'output' => [ 'shape' => 'DescribeOnlineUserNumResponseShape', ],
        ],
        'DescribeUserRecordByRoom' => [
            'name' => 'DescribeUserRecordByRoom',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/describeUserRecordByRoom',
            ],
            'input' => [ 'shape' => 'DescribeUserRecordByRoomRequestShape', ],
            'output' => [ 'shape' => 'DescribeUserRecordByRoomResponseShape', ],
        ],
        'DescribeP2pStreamBitRate' => [
            'name' => 'DescribeP2pStreamBitRate',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/describeP2pStreamBitRate',
            ],
            'input' => [ 'shape' => 'DescribeP2pStreamBitRateRequestShape', ],
            'output' => [ 'shape' => 'DescribeP2pStreamBitRateResponseShape', ],
        ],
        'DescribeCallDurationByCodeRate' => [
            'name' => 'DescribeCallDurationByCodeRate',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/describeCallDurationByCodeRate',
            ],
            'input' => [ 'shape' => 'DescribeCallDurationByCodeRateRequestShape', ],
            'output' => [ 'shape' => 'DescribeCallDurationByCodeRateResponseShape', ],
        ],
        'DescribeDailyCallDuration' => [
            'name' => 'DescribeDailyCallDuration',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/describeDailyCallDuration',
            ],
            'input' => [ 'shape' => 'DescribeDailyCallDurationRequestShape', ],
            'output' => [ 'shape' => 'DescribeDailyCallDurationResponseShape', ],
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
        'StartMcuTranscode' => [
            'name' => 'StartMcuTranscode',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/startMcuTranscode',
            ],
            'input' => [ 'shape' => 'StartMcuTranscodeRequestShape', ],
            'output' => [ 'shape' => 'StartMcuTranscodeResponseShape', ],
        ],
        'StopMcuTranscode' => [
            'name' => 'StopMcuTranscode',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/stopMcuTask',
            ],
            'input' => [ 'shape' => 'StopMcuTranscodeRequestShape', ],
            'output' => [ 'shape' => 'StopMcuTranscodeResponseShape', ],
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
        'AddPushStreamRule' => [
            'name' => 'AddPushStreamRule',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/addPushStreamRule',
            ],
            'input' => [ 'shape' => 'AddPushStreamRuleRequestShape', ],
            'output' => [ 'shape' => 'AddPushStreamRuleResponseShape', ],
        ],
        'AddRecordRule' => [
            'name' => 'AddRecordRule',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/addRecordRule',
            ],
            'input' => [ 'shape' => 'AddRecordRuleRequestShape', ],
            'output' => [ 'shape' => 'AddRecordRuleResponseShape', ],
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
        'DescribeStreamInfosByUserRoomId' => [
            'name' => 'DescribeStreamInfosByUserRoomId',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/describeStreamInfosByUserRoomId/{appId}',
            ],
            'input' => [ 'shape' => 'DescribeStreamInfosByUserRoomIdRequestShape', ],
            'output' => [ 'shape' => 'DescribeStreamInfosByUserRoomIdResponseShape', ],
        ],
        'DescribeStreamInfosByUserId' => [
            'name' => 'DescribeStreamInfosByUserId',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/describeStreamInfosByUserId/{appId}',
            ],
            'input' => [ 'shape' => 'DescribeStreamInfosByUserIdRequestShape', ],
            'output' => [ 'shape' => 'DescribeStreamInfosByUserIdResponseShape', ],
        ],
        'DescribeStreamInfoByStreamId' => [
            'name' => 'DescribeStreamInfoByStreamId',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/describeStreamInfoByStreamId/{appId}',
            ],
            'input' => [ 'shape' => 'DescribeStreamInfoByStreamIdRequestShape', ],
            'output' => [ 'shape' => 'DescribeStreamInfoByStreamIdResponseShape', ],
        ],
        'DescribeStreamRecordsByUserId' => [
            'name' => 'DescribeStreamRecordsByUserId',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/describeStreamRecordsByUserId/{appId}',
            ],
            'input' => [ 'shape' => 'DescribeStreamRecordsByUserIdRequestShape', ],
            'output' => [ 'shape' => 'DescribeStreamRecordsByUserIdResponseShape', ],
        ],
        'DescribeStreamRecordsByStreamId' => [
            'name' => 'DescribeStreamRecordsByStreamId',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/describeStreamRecordsByStreamId/{appId}',
            ],
            'input' => [ 'shape' => 'DescribeStreamRecordsByStreamIdRequestShape', ],
            'output' => [ 'shape' => 'DescribeStreamRecordsByStreamIdResponseShape', ],
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
        'DescribeRoomUser' => [
            'name' => 'DescribeRoomUser',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/describeRoomUser/{appId}',
            ],
            'input' => [ 'shape' => 'DescribeRoomUserRequestShape', ],
            'output' => [ 'shape' => 'DescribeRoomUserResponseShape', ],
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
        'CloseRoomUserStream' => [
            'name' => 'CloseRoomUserStream',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/closeRoomUserStream/{appId}',
            ],
            'input' => [ 'shape' => 'CloseRoomUserStreamRequestShape', ],
            'output' => [ 'shape' => 'CloseRoomUserStreamResponseShape', ],
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
        'StopAsrTask' => [
            'type' => 'structure',
            'members' => [
                'appId' => [ 'type' => 'string', 'locationName' => 'appId', ],
                'userRoomId' => [ 'type' => 'string', 'locationName' => 'userRoomId', ],
                'asrTaskType' => [ 'type' => 'integer', 'locationName' => 'asrTaskType', ],
            ],
        ],
        'StartAsrTask' => [
            'type' => 'structure',
            'members' => [
                'appId' => [ 'type' => 'string', 'locationName' => 'appId', ],
                'userRoomId' => [ 'type' => 'string', 'locationName' => 'userRoomId', ],
                'asrTaskType' => [ 'type' => 'integer', 'locationName' => 'asrTaskType', ],
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
                'meetingType' => [ 'type' => 'integer', 'locationName' => 'meetingType', ],
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
        'UserOnlineNumInfo' => [
            'type' => 'structure',
            'members' => [
                'appId' => [ 'type' => 'string', 'locationName' => 'appId', ],
                'roomId' => [ 'type' => 'long', 'locationName' => 'roomId', ],
                'number' => [ 'type' => 'integer', 'locationName' => 'number', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
            ],
        ],
        'UserNumInfo' => [
            'type' => 'structure',
            'members' => [
                'appId' => [ 'type' => 'string', 'locationName' => 'appId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
                'userRoomId' => [ 'type' => 'string', 'locationName' => 'userRoomId', ],
                'number' => [ 'type' => 'integer', 'locationName' => 'number', ],
                'duration' => [ 'type' => 'long', 'locationName' => 'duration', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
            ],
        ],
        'BaseDataOverview' => [
            'type' => 'structure',
            'members' => [
                'activeUserNumber' => [ 'type' => 'long', 'locationName' => 'activeUserNumber', ],
                'duration' => [ 'type' => 'long', 'locationName' => 'duration', ],
            ],
        ],
        'PushStreamUserId' => [
            'type' => 'structure',
            'members' => [
                'appId' => [ 'type' => 'string', 'locationName' => 'appId', ],
                'userId' => [ 'type' => 'string', 'locationName' => 'userId', ],
            ],
        ],
        'RoomUserNumInfos' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'totalElements' => [ 'type' => 'integer', 'locationName' => 'totalElements', ],
                'totalPages' => [ 'type' => 'integer', 'locationName' => 'totalPages', ],
                'content' => [ 'type' => 'list', 'member' => [ 'shape' => 'UserNumInfo', ], ],
            ],
        ],
        'CallDurationByCodeRate' => [
            'type' => 'structure',
            'members' => [
                'appId' => [ 'type' => 'string', 'locationName' => 'appId', ],
                'date' => [ 'type' => 'long', 'locationName' => 'date', ],
                'audio' => [ 'type' => 'long', 'locationName' => 'audio', ],
                'lte_480' => [ 'type' => 'long', 'locationName' => 'lte_480', ],
                'gt_480_lte_720' => [ 'type' => 'long', 'locationName' => 'gt_480_lte_720', ],
                'gte_720' => [ 'type' => 'long', 'locationName' => 'gte_720', ],
            ],
        ],
        'StreamBitRate' => [
            'type' => 'structure',
            'members' => [
                'date' => [ 'type' => 'long', 'locationName' => 'date', ],
                'bitrate' => [ 'type' => 'long', 'locationName' => 'bitrate', ],
            ],
        ],
        'RoomUserRecordInfo' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'totalElements' => [ 'type' => 'integer', 'locationName' => 'totalElements', ],
                'totalPages' => [ 'type' => 'integer', 'locationName' => 'totalPages', ],
                'content' => [ 'type' => 'list', 'member' => [ 'shape' => 'RoomUserRecord', ], ],
            ],
        ],
        'CallDuration' => [
            'type' => 'structure',
            'members' => [
                'appId' => [ 'type' => 'string', 'locationName' => 'appId', ],
                'date' => [ 'type' => 'long', 'locationName' => 'date', ],
                'duration' => [ 'type' => 'long', 'locationName' => 'duration', ],
            ],
        ],
        'RoomUserRecord' => [
            'type' => 'structure',
            'members' => [
                'appId' => [ 'type' => 'string', 'locationName' => 'appId', ],
                'userId' => [ 'type' => 'string', 'locationName' => 'userId', ],
                'nickName' => [ 'type' => 'string', 'locationName' => 'nickName', ],
                'deviceName' => [ 'type' => 'string', 'locationName' => 'deviceName', ],
                'deviceType' => [ 'type' => 'string', 'locationName' => 'deviceType', ],
                'deviceMode' => [ 'type' => 'string', 'locationName' => 'deviceMode', ],
                'osVersion' => [ 'type' => 'string', 'locationName' => 'osVersion', ],
                'duration' => [ 'type' => 'long', 'locationName' => 'duration', ],
                'joinTime' => [ 'type' => 'string', 'locationName' => 'joinTime', ],
                'leaveTime' => [ 'type' => 'string', 'locationName' => 'leaveTime', ],
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
        'LiveDomainObj' => [
            'type' => 'structure',
            'members' => [
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
                'cname' => [ 'type' => 'string', 'locationName' => 'cname', ],
            ],
        ],
        'StopMcuTranscode' => [
            'type' => 'structure',
            'members' => [
                'appId' => [ 'type' => 'string', 'locationName' => 'appId', ],
                'userRoomId' => [ 'type' => 'string', 'locationName' => 'userRoomId', ],
            ],
        ],
        'StartMcuTranscode' => [
            'type' => 'structure',
            'members' => [
                'appId' => [ 'type' => 'string', 'locationName' => 'appId', ],
                'userRoomId' => [ 'type' => 'string', 'locationName' => 'userRoomId', ],
                'layoutTemplate' => [ 'type' => 'integer', 'locationName' => 'layoutTemplate', ],
                'mainUserId' => [ 'type' => 'string', 'locationName' => 'mainUserId', ],
                'outputType' => [ 'type' => 'integer', 'locationName' => 'outputType', ],
                'outputName' => [ 'type' => 'string', 'locationName' => 'outputName', ],
                'mcuUserInfos' => [ 'type' => 'list', 'member' => [ 'shape' => 'McuUser', ], ],
                'outputEncode' =>  [ 'shape' => 'OutputEncode', ],
            ],
        ],
        'McuUser' => [
            'type' => 'structure',
            'members' => [
                'userId' => [ 'type' => 'string', 'locationName' => 'userId', ],
            ],
        ],
        'OutputEncode' => [
            'type' => 'structure',
            'members' => [
                'outputKind' => [ 'type' => 'integer', 'locationName' => 'outputKind', ],
                'audioSampleRate' => [ 'type' => 'integer', 'locationName' => 'audioSampleRate', ],
                'audioBitrate' => [ 'type' => 'integer', 'locationName' => 'audioBitrate', ],
                'audioChannels' => [ 'type' => 'integer', 'locationName' => 'audioChannels', ],
                'videoBitrate' => [ 'type' => 'integer', 'locationName' => 'videoBitrate', ],
                'videoFrame' => [ 'type' => 'integer', 'locationName' => 'videoFrame', ],
                'videoWidth' => [ 'type' => 'integer', 'locationName' => 'videoWidth', ],
                'videoHeight' => [ 'type' => 'integer', 'locationName' => 'videoHeight', ],
                'videoGop' => [ 'type' => 'integer', 'locationName' => 'videoGop', ],
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
        'UpdatePushStreamConfigReqObj' => [
            'type' => 'structure',
            'members' => [
                'appId' => [ 'type' => 'string', 'locationName' => 'appId', ],
                'pushType' => [ 'type' => 'integer', 'locationName' => 'pushType', ],
                'pushDomain' => [ 'type' => 'string', 'locationName' => 'pushDomain', ],
            ],
        ],
        'PushStreamConfigInfo' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'long', 'locationName' => 'id', ],
                'appId' => [ 'type' => 'string', 'locationName' => 'appId', ],
                'pushStatus' => [ 'type' => 'integer', 'locationName' => 'pushStatus', ],
                'pushType' => [ 'type' => 'integer', 'locationName' => 'pushType', ],
                'pushDomain' => [ 'type' => 'string', 'locationName' => 'pushDomain', ],
            ],
        ],
        'AddPushStreamConfigReqObj' => [
            'type' => 'structure',
            'members' => [
                'appId' => [ 'type' => 'string', 'locationName' => 'appId', ],
                'pushType' => [ 'type' => 'integer', 'locationName' => 'pushType', ],
                'pushDomain' => [ 'type' => 'string', 'locationName' => 'pushDomain', ],
            ],
        ],
        'PushStreamRule' => [
            'type' => 'structure',
            'members' => [
                'userRoomId' => [ 'type' => 'string', 'locationName' => 'userRoomId', ],
                'mcuUsers' => [ 'type' => 'string', 'locationName' => 'mcuUsers', ],
            ],
        ],
        'AddPushStreamRuleObj' => [
            'type' => 'structure',
            'members' => [
                'appId' => [ 'type' => 'string', 'locationName' => 'appId', ],
                'rules' => [ 'type' => 'list', 'member' => [ 'shape' => 'PushStreamRule', ], ],
            ],
        ],
        'RecordBucketObj' => [
            'type' => 'structure',
            'members' => [
                'bucket' => [ 'type' => 'string', 'locationName' => 'bucket', ],
            ],
        ],
        'RecordConfigInfo' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'long', 'locationName' => 'id', ],
                'appId' => [ 'type' => 'string', 'locationName' => 'appId', ],
                'recordStatus' => [ 'type' => 'integer', 'locationName' => 'recordStatus', ],
                'recordType' => [ 'type' => 'integer', 'locationName' => 'recordType', ],
                'bucket' => [ 'type' => 'string', 'locationName' => 'bucket', ],
                'fileType' => [ 'type' => 'string', 'locationName' => 'fileType', ],
                'callbackUrl' => [ 'type' => 'string', 'locationName' => 'callbackUrl', ],
                'callbackToken' => [ 'type' => 'string', 'locationName' => 'callbackToken', ],
            ],
        ],
        'AddRecordConfigReqObj' => [
            'type' => 'structure',
            'members' => [
                'appId' => [ 'type' => 'string', 'locationName' => 'appId', ],
                'recordType' => [ 'type' => 'integer', 'locationName' => 'recordType', ],
                'bucket' => [ 'type' => 'string', 'locationName' => 'bucket', ],
                'fileType' => [ 'type' => 'string', 'locationName' => 'fileType', ],
                'callbackUrl' => [ 'type' => 'string', 'locationName' => 'callbackUrl', ],
                'callbackToken' => [ 'type' => 'string', 'locationName' => 'callbackToken', ],
            ],
        ],
        'UpdateRecordConfigReqObj' => [
            'type' => 'structure',
            'members' => [
                'appId' => [ 'type' => 'string', 'locationName' => 'appId', ],
                'recordType' => [ 'type' => 'integer', 'locationName' => 'recordType', ],
                'bucket' => [ 'type' => 'string', 'locationName' => 'bucket', ],
                'fileType' => [ 'type' => 'string', 'locationName' => 'fileType', ],
                'callbackUrl' => [ 'type' => 'string', 'locationName' => 'callbackUrl', ],
                'callbackToken' => [ 'type' => 'string', 'locationName' => 'callbackToken', ],
            ],
        ],
        'RecordRule' => [
            'type' => 'structure',
            'members' => [
                'userRoomId' => [ 'type' => 'string', 'locationName' => 'userRoomId', ],
                'mcuUsers' => [ 'type' => 'string', 'locationName' => 'mcuUsers', ],
                'filePrefix' => [ 'type' => 'string', 'locationName' => 'filePrefix', ],
            ],
        ],
        'AddRecordRuleObj' => [
            'type' => 'structure',
            'members' => [
                'appId' => [ 'type' => 'string', 'locationName' => 'appId', ],
                'rules' => [ 'type' => 'list', 'member' => [ 'shape' => 'RecordRule', ], ],
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
        'CloseRoomUserStreamObj' => [
            'type' => 'structure',
            'members' => [
                'userRoomId' => [ 'type' => 'string', 'locationName' => 'userRoomId', ],
                'userId' => [ 'type' => 'string', 'locationName' => 'userId', ],
                'streamId' => [ 'type' => 'string', 'locationName' => 'streamId', ],
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
        'RoomStreamContent' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'totalElements' => [ 'type' => 'integer', 'locationName' => 'totalElements', ],
                'totalPages' => [ 'type' => 'integer', 'locationName' => 'totalPages', ],
                'content' => [ 'type' => 'list', 'member' => [ 'shape' => 'StreamInfo', ], ],
            ],
        ],
        'StreamRecordInfo' => [
            'type' => 'structure',
            'members' => [
                'appId' => [ 'type' => 'string', 'locationName' => 'appId', ],
                'userRoomId' => [ 'type' => 'string', 'locationName' => 'userRoomId', ],
                'roomName' => [ 'type' => 'string', 'locationName' => 'roomName', ],
                'userId' => [ 'type' => 'string', 'locationName' => 'userId', ],
                'userName' => [ 'type' => 'string', 'locationName' => 'userName', ],
                'nickName' => [ 'type' => 'string', 'locationName' => 'nickName', ],
                'streamId' => [ 'type' => 'string', 'locationName' => 'streamId', ],
                'streamName' => [ 'type' => 'string', 'locationName' => 'streamName', ],
                'kind' => [ 'type' => 'integer', 'locationName' => 'kind', ],
                'status' => [ 'type' => 'integer', 'locationName' => 'status', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'updateTime' => [ 'type' => 'string', 'locationName' => 'updateTime', ],
            ],
        ],
        'StreamInfo' => [
            'type' => 'structure',
            'members' => [
                'appId' => [ 'type' => 'string', 'locationName' => 'appId', ],
                'userRoomId' => [ 'type' => 'string', 'locationName' => 'userRoomId', ],
                'roomName' => [ 'type' => 'string', 'locationName' => 'roomName', ],
                'userId' => [ 'type' => 'string', 'locationName' => 'userId', ],
                'userName' => [ 'type' => 'string', 'locationName' => 'userName', ],
                'nickName' => [ 'type' => 'string', 'locationName' => 'nickName', ],
                'streamId' => [ 'type' => 'string', 'locationName' => 'streamId', ],
                'streamName' => [ 'type' => 'string', 'locationName' => 'streamName', ],
                'kind' => [ 'type' => 'integer', 'locationName' => 'kind', ],
                'status' => [ 'type' => 'integer', 'locationName' => 'status', ],
                'deviceType' => [ 'type' => 'integer', 'locationName' => 'deviceType', ],
                'publishCount' => [ 'type' => 'integer', 'locationName' => 'publishCount', ],
                'publishTime' => [ 'type' => 'string', 'locationName' => 'publishTime', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
            ],
        ],
        'StreamRecordContent' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'totalElements' => [ 'type' => 'integer', 'locationName' => 'totalElements', ],
                'totalPages' => [ 'type' => 'integer', 'locationName' => 'totalPages', ],
                'content' => [ 'type' => 'list', 'member' => [ 'shape' => 'StreamRecordInfo', ], ],
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
        'StartAsrTaskResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'StartAsrTaskResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'StopAsrTaskRequestShape' => [
            'type' => 'structure',
            'members' => [
                'appId' => [ 'type' => 'string', 'locationName' => 'appId', ],
                'userRoomId' => [ 'type' => 'string', 'locationName' => 'userRoomId', ],
                'asrTaskType' => [ 'type' => 'integer', 'locationName' => 'asrTaskType', ],
            ],
        ],
        'StartAsrTaskRequestShape' => [
            'type' => 'structure',
            'members' => [
                'appId' => [ 'type' => 'string', 'locationName' => 'appId', ],
                'userRoomId' => [ 'type' => 'string', 'locationName' => 'userRoomId', ],
                'asrTaskType' => [ 'type' => 'integer', 'locationName' => 'asrTaskType', ],
            ],
        ],
        'StopAsrTaskResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'StopAsrTaskResultShape' => [
            'type' => 'structure',
            'members' => [
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
                'meetingType' => [ 'type' => 'integer', 'locationName' => 'meetingType', ],
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
        'RemoveAllRoomUsersResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'RemoveRoomUserResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
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
        'DescribeRoomOnlineUserNumResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'DescribeRoomOnlineUserNumResultShape', ],
            ],
        ],
        'DescribeP2pStreamBitRateRequestShape' => [
            'type' => 'structure',
            'members' => [
                'appId' => [ 'type' => 'string', 'locationName' => 'appId', ],
                'userRoomId' => [ 'type' => 'string', 'locationName' => 'userRoomId', ],
                'userId' => [ 'type' => 'string', 'locationName' => 'userId', ],
                'kind' => [ 'type' => 'string', 'locationName' => 'kind', ],
                'type' => [ 'type' => 'string', 'locationName' => 'type', ],
                'joinTime' => [ 'type' => 'string', 'locationName' => 'joinTime', ],
                'leaveTime' => [ 'type' => 'string', 'locationName' => 'leaveTime', ],
                'fromUserId' => [ 'type' => 'string', 'locationName' => 'fromUserId', ],
                'period' => [ 'type' => 'string', 'locationName' => 'period', ],
            ],
        ],
        'DescribeOnlineUserNumResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'DescribeOnlineUserNumResultShape', ],
            ],
        ],
        'DescribeCallDurationByCodeRateRequestShape' => [
            'type' => 'structure',
            'members' => [
                'appId' => [ 'type' => 'string', 'locationName' => 'appId', ],
                'startTime' => [ 'type' => 'string', 'locationName' => 'startTime', ],
                'endTime' => [ 'type' => 'string', 'locationName' => 'endTime', ],
            ],
        ],
        'DescribeUserRecordByRoomResultShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'totalElements' => [ 'type' => 'integer', 'locationName' => 'totalElements', ],
                'totalPages' => [ 'type' => 'integer', 'locationName' => 'totalPages', ],
                'content' => [ 'type' => 'list', 'member' => [ 'shape' => 'RoomUserRecord', ], ],
            ],
        ],
        'DescribeUserRecordByRoomResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'DescribeUserRecordByRoomResultShape', ],
            ],
        ],
        'DescribeP2pStreamBitRateResultShape' => [
            'type' => 'structure',
            'members' => [
                'content' => [ 'type' => 'list', 'member' => [ 'shape' => 'StreamBitRate', ], ],
            ],
        ],
        'DescribeCallDurationByCodeRateResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeCallDurationByCodeRateResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeDailyCallDurationResultShape' => [
            'type' => 'structure',
            'members' => [
                'content' => [ 'type' => 'list', 'member' => [ 'shape' => 'CallDuration', ], ],
            ],
        ],
        'DescribeOnlineUserNumResultShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'totalElements' => [ 'type' => 'integer', 'locationName' => 'totalElements', ],
                'totalPages' => [ 'type' => 'integer', 'locationName' => 'totalPages', ],
                'content' => [ 'type' => 'list', 'member' => [ 'shape' => 'UserNumInfo', ], ],
            ],
        ],
        'DescribeP2pStreamBitRateResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeP2pStreamBitRateResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeCallDurationByCodeRateResultShape' => [
            'type' => 'structure',
            'members' => [
                'content' => [ 'type' => 'list', 'member' => [ 'shape' => 'CallDurationByCodeRate', ], ],
            ],
        ],
        'DescribeDailyCallDurationResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeDailyCallDurationResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeOnlineUserNumRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'filters' => [ 'type' => 'list', 'member' => [ 'shape' => 'Filter', ], ],
            ],
        ],
        'DescribeUserRecordByRoomRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'filters' => [ 'type' => 'list', 'member' => [ 'shape' => 'Filter', ], ],
            ],
        ],
        'DescribeDailyCallDurationRequestShape' => [
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
        'StartMcuTranscodeRequestShape' => [
            'type' => 'structure',
            'members' => [
                'appId' => [ 'type' => 'string', 'locationName' => 'appId', ],
                'userRoomId' => [ 'type' => 'string', 'locationName' => 'userRoomId', ],
                'layoutTemplate' => [ 'type' => 'integer', 'locationName' => 'layoutTemplate', ],
                'mainUserId' => [ 'type' => 'string', 'locationName' => 'mainUserId', ],
                'outputType' => [ 'type' => 'integer', 'locationName' => 'outputType', ],
                'outputName' => [ 'type' => 'string', 'locationName' => 'outputName', ],
                'mcuUserInfos' => [ 'type' => 'list', 'member' => [ 'shape' => 'McuUser', ], ],
                'outputEncode' =>  [ 'shape' => 'OutputEncode', ],
            ],
        ],
        'StopMcuTranscodeRequestShape' => [
            'type' => 'structure',
            'members' => [
                'appId' => [ 'type' => 'string', 'locationName' => 'appId', ],
                'userRoomId' => [ 'type' => 'string', 'locationName' => 'userRoomId', ],
            ],
        ],
        'StopMcuTranscodeResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'StartMcuTranscodeResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'StartMcuTranscodeResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'StopMcuTranscodeResultShape' => [
            'type' => 'structure',
            'members' => [
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
        'AddPushStreamRuleRequestShape' => [
            'type' => 'structure',
            'members' => [
                'appId' => [ 'type' => 'string', 'locationName' => 'appId', ],
                'rules' => [ 'type' => 'list', 'member' => [ 'shape' => 'PushStreamRule', ], ],
            ],
        ],
        'AddPushStreamRuleResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'AddPushStreamRuleResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'AddRecordRuleRequestShape' => [
            'type' => 'structure',
            'members' => [
                'appId' => [ 'type' => 'string', 'locationName' => 'appId', ],
                'rules' => [ 'type' => 'list', 'member' => [ 'shape' => 'RecordRule', ], ],
            ],
        ],
        'AddRecordRuleResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'AddRecordRuleResultShape' => [
            'type' => 'structure',
            'members' => [
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
        'DescribeStreamInfosByUserRoomIdResultShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'totalElements' => [ 'type' => 'integer', 'locationName' => 'totalElements', ],
                'totalPages' => [ 'type' => 'integer', 'locationName' => 'totalPages', ],
                'content' => [ 'type' => 'list', 'member' => [ 'shape' => 'StreamInfo', ], ],
            ],
        ],
        'DescribeStreamInfosByUserIdRequestShape' => [
            'type' => 'structure',
            'members' => [
                'userRoomId' => [ 'type' => 'string', 'locationName' => 'userRoomId', ],
                'userId' => [ 'type' => 'string', 'locationName' => 'userId', ],
                'appId' => [ 'type' => 'string', 'locationName' => 'appId', ],
            ],
        ],
        'DescribeStreamInfosByUserIdResultShape' => [
            'type' => 'structure',
            'members' => [
                'content' => [ 'type' => 'list', 'member' => [ 'shape' => 'StreamInfo', ], ],
            ],
        ],
        'DescribeStreamRecordsByUserIdResultShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'totalElements' => [ 'type' => 'integer', 'locationName' => 'totalElements', ],
                'totalPages' => [ 'type' => 'integer', 'locationName' => 'totalPages', ],
                'content' => [ 'type' => 'list', 'member' => [ 'shape' => 'StreamRecordInfo', ], ],
            ],
        ],
        'DescribeStreamRecordsByUserIdResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'DescribeStreamRecordsByUserIdResultShape', ],
            ],
        ],
        'DescribeStreamInfosByUserIdResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'DescribeStreamInfosByUserIdResultShape', ],
            ],
        ],
        'DescribeStreamInfoByStreamIdRequestShape' => [
            'type' => 'structure',
            'members' => [
                'streamId' => [ 'type' => 'string', 'locationName' => 'streamId', ],
                'appId' => [ 'type' => 'string', 'locationName' => 'appId', ],
            ],
        ],
        'DescribeStreamInfoByStreamIdResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'DescribeStreamInfoByStreamIdResultShape', ],
            ],
        ],
        'DescribeStreamRecordsByStreamIdResultShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'totalElements' => [ 'type' => 'integer', 'locationName' => 'totalElements', ],
                'totalPages' => [ 'type' => 'integer', 'locationName' => 'totalPages', ],
                'content' => [ 'type' => 'list', 'member' => [ 'shape' => 'StreamRecordInfo', ], ],
            ],
        ],
        'DescribeStreamRecordsByStreamIdRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'streamId' => [ 'type' => 'string', 'locationName' => 'streamId', ],
                'filters' => [ 'type' => 'list', 'member' => [ 'shape' => 'Filter', ], ],
                'appId' => [ 'type' => 'string', 'locationName' => 'appId', ],
            ],
        ],
        'DescribeStreamInfosByUserRoomIdRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'userRoomId' => [ 'type' => 'string', 'locationName' => 'userRoomId', ],
                'filters' => [ 'type' => 'list', 'member' => [ 'shape' => 'Filter', ], ],
                'appId' => [ 'type' => 'string', 'locationName' => 'appId', ],
            ],
        ],
        'DescribeStreamRecordsByStreamIdResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'DescribeStreamRecordsByStreamIdResultShape', ],
            ],
        ],
        'DescribeStreamInfosByUserRoomIdResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'DescribeStreamInfosByUserRoomIdResultShape', ],
            ],
        ],
        'DescribeStreamInfoByStreamIdResultShape' => [
            'type' => 'structure',
            'members' => [
                'appId' => [ 'type' => 'string', 'locationName' => 'appId', ],
                'userRoomId' => [ 'type' => 'string', 'locationName' => 'userRoomId', ],
                'roomName' => [ 'type' => 'string', 'locationName' => 'roomName', ],
                'userId' => [ 'type' => 'string', 'locationName' => 'userId', ],
                'userName' => [ 'type' => 'string', 'locationName' => 'userName', ],
                'nickName' => [ 'type' => 'string', 'locationName' => 'nickName', ],
                'streamId' => [ 'type' => 'string', 'locationName' => 'streamId', ],
                'streamName' => [ 'type' => 'string', 'locationName' => 'streamName', ],
                'kind' => [ 'type' => 'integer', 'locationName' => 'kind', ],
                'status' => [ 'type' => 'integer', 'locationName' => 'status', ],
                'deviceType' => [ 'type' => 'integer', 'locationName' => 'deviceType', ],
                'publishCount' => [ 'type' => 'integer', 'locationName' => 'publishCount', ],
                'publishTime' => [ 'type' => 'string', 'locationName' => 'publishTime', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
            ],
        ],
        'DescribeStreamRecordsByUserIdRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'userRoomId' => [ 'type' => 'string', 'locationName' => 'userRoomId', ],
                'userId' => [ 'type' => 'string', 'locationName' => 'userId', ],
                'filters' => [ 'type' => 'list', 'member' => [ 'shape' => 'Filter', ], ],
                'appId' => [ 'type' => 'string', 'locationName' => 'appId', ],
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
        'DescribeRoomUserRequestShape' => [
            'type' => 'structure',
            'members' => [
                'userRoomId' => [ 'type' => 'string', 'locationName' => 'userRoomId', ],
                'userId' => [ 'type' => 'string', 'locationName' => 'userId', ],
                'appId' => [ 'type' => 'string', 'locationName' => 'appId', ],
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
        'DescribeRoomUserResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'DescribeRoomUserResultShape', ],
            ],
        ],
        'CloseRoomUserStreamRequestShape' => [
            'type' => 'structure',
            'members' => [
                'userRoomId' => [ 'type' => 'string', 'locationName' => 'userRoomId', ],
                'userId' => [ 'type' => 'string', 'locationName' => 'userId', ],
                'streamId' => [ 'type' => 'string', 'locationName' => 'streamId', ],
                'appId' => [ 'type' => 'string', 'locationName' => 'appId', ],
            ],
        ],
        'CloseRoomUserStreamResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DescribeRoomUserResultShape' => [
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
        'RemoveAllUsersByUserRoomIdResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'CloseRoomUserStreamResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
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
