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
        'CreateUserPool' => [
            'name' => 'CreateUserPool',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/pool',
            ],
            'input' => [ 'shape' => 'CreateUserPoolRequestShape', ],
            'output' => [ 'shape' => 'CreateUserPoolResponseShape', ],
        ],
        'AssociateUserPoolClient' => [
            'name' => 'AssociateUserPoolClient',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/poolName/{poolName}/client/{clientId}',
            ],
            'input' => [ 'shape' => 'AssociateUserPoolClientRequestShape', ],
            'output' => [ 'shape' => 'AssociateUserPoolClientResponseShape', ],
        ],
        'DisassociateUserPoolClient' => [
            'name' => 'DisassociateUserPoolClient',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/poolName/{poolName}/client/{clientId}',
            ],
            'input' => [ 'shape' => 'DisassociateUserPoolClientRequestShape', ],
            'output' => [ 'shape' => 'DisassociateUserPoolClientResponseShape', ],
        ],
        'ListUserPoolClients' => [
            'name' => 'ListUserPoolClients',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/poolName/{poolName}/clients',
            ],
            'input' => [ 'shape' => 'ListUserPoolClientsRequestShape', ],
            'output' => [ 'shape' => 'ListUserPoolClientsResponseShape', ],
        ],
        'AdminCreateUser' => [
            'name' => 'AdminCreateUser',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/poolName/{poolName}/user:create',
            ],
            'input' => [ 'shape' => 'AdminCreateUserRequestShape', ],
            'output' => [ 'shape' => 'AdminCreateUserResponseShape', ],
        ],
        'AdminGetUser' => [
            'name' => 'AdminGetUser',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/poolName/{poolName}/user/{userName}',
            ],
            'input' => [ 'shape' => 'AdminGetUserRequestShape', ],
            'output' => [ 'shape' => 'AdminGetUserResponseShape', ],
        ],
        'AdminUpdateUserAttribute' => [
            'name' => 'AdminUpdateUserAttribute',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/poolName/{poolName}/user/{userName}',
            ],
            'input' => [ 'shape' => 'AdminUpdateUserAttributeRequestShape', ],
            'output' => [ 'shape' => 'AdminUpdateUserAttributeResponseShape', ],
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
        'AdminEnableUser' => [
            'name' => 'AdminEnableUser',
            'http' => [
                'method' => 'PATCH',
                'requestUri' => '/v1/poolName/{poolName}/user/{userName}:enable',
            ],
            'input' => [ 'shape' => 'AdminEnableUserRequestShape', ],
            'output' => [ 'shape' => 'AdminEnableUserResponseShape', ],
        ],
        'AdminDisableUser' => [
            'name' => 'AdminDisableUser',
            'http' => [
                'method' => 'PATCH',
                'requestUri' => '/v1/poolName/{poolName}/user/{userName}:disable',
            ],
            'input' => [ 'shape' => 'AdminDisableUserRequestShape', ],
            'output' => [ 'shape' => 'AdminDisableUserResponseShape', ],
        ],
        'AdminDeleteUser' => [
            'name' => 'AdminDeleteUser',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/poolName/{poolName}/user/{userName}:delete',
            ],
            'input' => [ 'shape' => 'AdminDeleteUserRequestShape', ],
            'output' => [ 'shape' => 'AdminDeleteUserResponseShape', ],
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
        'PoolConfig' => [
            'type' => 'structure',
            'members' => [
                'poolName' => [ 'type' => 'string', 'locationName' => 'poolName', ],
                'schema' => [ 'type' => 'list', 'member' => [ 'shape' => 'PoolFieldAttribute', ], ],
            ],
        ],
        'PoolFieldAttribute' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'required' => [ 'type' => 'boolean', 'locationName' => 'required', ],
                'unique' => [ 'type' => 'boolean', 'locationName' => 'unique', ],
            ],
        ],
        'PoolInfo' => [
            'type' => 'structure',
            'members' => [
                'poolUid' => [ 'type' => 'string', 'locationName' => 'poolUid', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'schema' => [ 'type' => 'list', 'member' => [ 'shape' => 'PoolFieldAttribute', ], ],
            ],
        ],
        'PoolUser' => [
            'type' => 'structure',
            'members' => [
                'userName' => [ 'type' => 'string', 'locationName' => 'userName', ],
                'nickName' => [ 'type' => 'string', 'locationName' => 'nickName', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'profile' => [ 'type' => 'string', 'locationName' => 'profile', ],
                'password' => [ 'type' => 'string', 'locationName' => 'password', ],
                'mobile' => [ 'type' => 'string', 'locationName' => 'mobile', ],
                'email' => [ 'type' => 'string', 'locationName' => 'email', ],
                'customRole' => [ 'type' => 'string', 'locationName' => 'customRole', ],
                'meta' => [ 'type' => 'string', 'locationName' => 'meta', ],
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
        'User' => [
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
                'email' => [ 'type' => 'string', 'locationName' => 'email', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'updateTime' => [ 'type' => 'string', 'locationName' => 'updateTime', ],
                'meta' => [ 'type' => 'string', 'locationName' => 'meta', ],
                'enabled' => [ 'type' => 'boolean', 'locationName' => 'enabled', ],
                'loginAttributes' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'UserAttribute' => [
            'type' => 'structure',
            'members' => [
                'mobile' => [ 'type' => 'string', 'locationName' => 'mobile', ],
                'email' => [ 'type' => 'string', 'locationName' => 'email', ],
                'loginAttributes' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'UserPassword' => [
            'type' => 'structure',
            'members' => [
                'userName' => [ 'type' => 'string', 'locationName' => 'userName', ],
                'password' => [ 'type' => 'string', 'locationName' => 'password', ],
            ],
        ],
        'UserPoolClient' => [
            'type' => 'structure',
            'members' => [
                'clientId' => [ 'type' => 'string', 'locationName' => 'clientId', ],
                'clientName' => [ 'type' => 'string', 'locationName' => 'clientName', ],
                'poolUid' => [ 'type' => 'string', 'locationName' => 'poolUid', ],
            ],
        ],
        'CreateUserPoolRequestShape' => [
            'type' => 'structure',
            'members' => [
                'poolConfig' =>  [ 'shape' => 'PoolConfig', ],
            ],
        ],
        'CreateUserPoolResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'CreateUserPoolResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'CreateUserPoolResultShape' => [
            'type' => 'structure',
            'members' => [
                'poolInfo' =>  [ 'shape' => 'PoolInfo', ],
            ],
        ],
        'DisassociateUserPoolClientResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'AssociateUserPoolClientRequestShape' => [
            'type' => 'structure',
            'members' => [
                'poolName' => [ 'type' => 'string', 'locationName' => 'poolName', ],
                'clientId' => [ 'type' => 'string', 'locationName' => 'clientId', ],
            ],
        ],
        'AssociateUserPoolClientResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DisassociateUserPoolClientResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'ListUserPoolClientsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'ListUserPoolClientsResultShape', ],
            ],
        ],
        'ListUserPoolClientsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'poolName' => [ 'type' => 'string', 'locationName' => 'poolName', ],
            ],
        ],
        'ListUserPoolClientsResultShape' => [
            'type' => 'structure',
            'members' => [
                'userPoolClients' => [ 'type' => 'list', 'member' => [ 'shape' => 'UserPoolClient', ], ],
            ],
        ],
        'AssociateUserPoolClientResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DisassociateUserPoolClientRequestShape' => [
            'type' => 'structure',
            'members' => [
                'poolName' => [ 'type' => 'string', 'locationName' => 'poolName', ],
                'clientId' => [ 'type' => 'string', 'locationName' => 'clientId', ],
            ],
        ],
        'AdminDeleteUserResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'AdminUpdateUserAttributeRequestShape' => [
            'type' => 'structure',
            'members' => [
                'userAttribute' =>  [ 'shape' => 'UserAttribute', ],
                'poolName' => [ 'type' => 'string', 'locationName' => 'poolName', ],
                'userName' => [ 'type' => 'string', 'locationName' => 'userName', ],
            ],
        ],
        'AdminGetUserResultShape' => [
            'type' => 'structure',
            'members' => [
                'poolUsers' => [ 'type' => 'list', 'member' => [ 'shape' => 'User', ], ],
            ],
        ],
        'ListUsersRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'createTimeStart' => [ 'type' => 'string', 'locationName' => 'createTimeStart', ],
                'createTimeEnd' => [ 'type' => 'string', 'locationName' => 'createTimeEnd', ],
                'status' => [ 'type' => 'integer', 'locationName' => 'status', ],
                'sort' => [ 'type' => 'integer', 'locationName' => 'sort', ],
                'poolName' => [ 'type' => 'string', 'locationName' => 'poolName', ],
            ],
        ],
        'AdminDeleteUserResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ListUsersResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'ListUsersResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'AdminUpdateUserAttributeResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'AdminEnableUserResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'AdminDisableUserRequestShape' => [
            'type' => 'structure',
            'members' => [
                'poolName' => [ 'type' => 'string', 'locationName' => 'poolName', ],
                'userName' => [ 'type' => 'string', 'locationName' => 'userName', ],
            ],
        ],
        'AdminEnableUserResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'AdminSetUsersPasswordResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'AdminCreateUserResultShape' => [
            'type' => 'structure',
            'members' => [
                'user' =>  [ 'shape' => 'User', ],
            ],
        ],
        'AdminSetUsersPasswordRequestShape' => [
            'type' => 'structure',
            'members' => [
                'userPasswords' => [ 'type' => 'list', 'member' => [ 'shape' => 'UserPassword', ], ],
                'poolName' => [ 'type' => 'string', 'locationName' => 'poolName', ],
            ],
        ],
        'AdminGetUserResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'AdminGetUserResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'AdminEnableUserRequestShape' => [
            'type' => 'structure',
            'members' => [
                'poolName' => [ 'type' => 'string', 'locationName' => 'poolName', ],
                'userName' => [ 'type' => 'string', 'locationName' => 'userName', ],
            ],
        ],
        'AdminDisableUserResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'ListUsersResultShape' => [
            'type' => 'structure',
            'members' => [
                'pageInfo' =>  [ 'shape' => 'PageInfo', ],
                'poolUsers' => [ 'type' => 'list', 'member' => [ 'shape' => 'User', ], ],
            ],
        ],
        'AdminDisableUserResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'AdminUpdateUserAttributeResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'AdminCreateUserRequestShape' => [
            'type' => 'structure',
            'members' => [
                'poolUser' =>  [ 'shape' => 'PoolUser', ],
                'poolName' => [ 'type' => 'string', 'locationName' => 'poolName', ],
            ],
        ],
        'AdminDeleteUserRequestShape' => [
            'type' => 'structure',
            'members' => [
                'poolName' => [ 'type' => 'string', 'locationName' => 'poolName', ],
                'userName' => [ 'type' => 'string', 'locationName' => 'userName', ],
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
        'AdminGetUserRequestShape' => [
            'type' => 'structure',
            'members' => [
                'poolName' => [ 'type' => 'string', 'locationName' => 'poolName', ],
                'userName' => [ 'type' => 'string', 'locationName' => 'userName', ],
            ],
        ],
    ],
];
