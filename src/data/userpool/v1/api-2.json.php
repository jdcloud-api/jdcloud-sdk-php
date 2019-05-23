<?php
// This file was auto-generated
return [
//    'version' => '',
    'metadata' =>
    [
//        'apiVersion' => '',
//        'endpointPrefix' => 'userpool',
        'protocol' => 'json',
//        'serviceFullName' => 'userpool',
//        'serviceId' => 'userpool',
    ],
    'operations' => [
        'AdminGetUsers' => [
            'name' => 'AdminGetUsers',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/poolName/{poolName}/user',
            ],
            'input' => [ 'shape' => 'AdminGetUsersRequestShape', ],
            'output' => [ 'shape' => 'AdminGetUsersResponseShape', ],
        ],
        'AdminCreateUser' => [
            'name' => 'AdminCreateUser',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/poolName/{poolName}/user',
            ],
            'input' => [ 'shape' => 'AdminCreateUserRequestShape', ],
            'output' => [ 'shape' => 'AdminCreateUserResponseShape', ],
        ],
        'ListUsers' => [
            'name' => 'ListUsers',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/poolName/{poolName}/user:list',
            ],
            'input' => [ 'shape' => 'ListUsersRequestShape', ],
            'output' => [ 'shape' => 'ListUsersResponseShape', ],
        ],
        'AdminSetUsersPassword' => [
            'name' => 'AdminSetUsersPassword',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/poolName/{poolName}/user:adminSetUsersPassword',
            ],
            'input' => [ 'shape' => 'AdminSetUsersPasswordRequestShape', ],
            'output' => [ 'shape' => 'AdminSetUsersPasswordResponseShape', ],
        ],
    ],
    'shapes' => [
        'FailedMsg' => [
            'type' => 'structure',
            'members' => [
                'userName' => [ 'type' => 'string', 'locationName' => 'userName', ],
                'msg' => [ 'type' => 'string', 'locationName' => 'msg', ],
            ],
        ],
        'PageInfo' => [
            'type' => 'structure',
            'members' => [
                'currentPage' => [ 'type' => 'integer', 'locationName' => 'currentPage', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'totalRecord' => [ 'type' => 'long', 'locationName' => 'totalRecord', ],
                'totalPage' => [ 'type' => 'string', 'locationName' => 'totalPage', ],
            ],
        ],
        'PoolUser' => [
            'type' => 'structure',
            'members' => [
                'userName' => [ 'type' => 'string', 'locationName' => 'userName', ],
                'poolUid' => [ 'type' => 'string', 'locationName' => 'poolUid', ],
                'nickName' => [ 'type' => 'string', 'locationName' => 'nickName', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'profile' => [ 'type' => 'string', 'locationName' => 'profile', ],
                'password' => [ 'type' => 'string', 'locationName' => 'password', ],
                'mobile' => [ 'type' => 'string', 'locationName' => 'mobile', ],
                'customRole' => [ 'type' => 'string', 'locationName' => 'customRole', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'updateTime' => [ 'type' => 'string', 'locationName' => 'updateTime', ],
            ],
        ],
        'PoolUserResVo' => [
            'type' => 'structure',
            'members' => [
                'poolUid' => [ 'type' => 'string', 'locationName' => 'poolUid', ],
                'uid' => [ 'type' => 'string', 'locationName' => 'uid', ],
                'userName' => [ 'type' => 'string', 'locationName' => 'userName', ],
                'nickName' => [ 'type' => 'string', 'locationName' => 'nickName', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'profile' => [ 'type' => 'string', 'locationName' => 'profile', ],
                'customRole' => [ 'type' => 'string', 'locationName' => 'customRole', ],
                'mobile' => [ 'type' => 'string', 'locationName' => 'mobile', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'updateTime' => [ 'type' => 'string', 'locationName' => 'updateTime', ],
            ],
        ],
        'UserPassword' => [
            'type' => 'structure',
            'members' => [
                'userName' => [ 'type' => 'string', 'locationName' => 'userName', ],
                'password' => [ 'type' => 'string', 'locationName' => 'password', ],
            ],
        ],
        'AdminCreateUserResultShape' => [
            'type' => 'structure',
            'members' => [
                'failedList' => [ 'type' => 'list', 'member' => [ 'shape' => 'FailedMsg', ], ],
                'users' => [ 'type' => 'list', 'member' => [ 'shape' => 'PoolUserResVo', ], ],
            ],
        ],
        'AdminSetUsersPasswordRequestShape' => [
            'type' => 'structure',
            'members' => [
                'userPasswords' => [ 'type' => 'list', 'member' => [ 'type' => '', ], ],
                'poolName' => [ 'type' => 'string', 'locationName' => 'poolName', ],
            ],
        ],
        'AdminGetUsersResultShape' => [
            'type' => 'structure',
            'members' => [
                'poolUsers' => [ 'type' => 'list', 'member' => [ 'shape' => 'PoolUserResVo', ], ],
            ],
        ],
        'AdminGetUsersRequestShape' => [
            'type' => 'structure',
            'members' => [
                'userNames' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'poolName' => [ 'type' => 'string', 'locationName' => 'poolName', ],
            ],
        ],
        'ListUsersRequestShape' => [
            'type' => 'structure',
            'members' => [
                'currentPage' => [ 'type' => 'integer', 'locationName' => 'currentPage', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'poolName' => [ 'type' => 'string', 'locationName' => 'poolName', ],
            ],
        ],
        'ListUsersResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'ListUsersResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ListUsersResultShape' => [
            'type' => 'structure',
            'members' => [
                'pageInfo' =>  [ 'shape' => 'PageInfo', ],
                'poolUsers' => [ 'type' => 'list', 'member' => [ 'shape' => 'PoolUserResVo', ], ],
            ],
        ],
        'AdminGetUsersResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'AdminGetUsersResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'AdminCreateUserRequestShape' => [
            'type' => 'structure',
            'members' => [
                'poolUsers' => [ 'type' => 'list', 'member' => [ 'type' => '', ], ],
                'poolName' => [ 'type' => 'string', 'locationName' => 'poolName', ],
            ],
        ],
        'AdminSetUsersPasswordResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'AdminCreateUserResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'AdminCreateUserResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'AdminSetUsersPasswordResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
    ],
];
