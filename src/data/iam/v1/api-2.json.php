<?php
// This file was auto-generated
return [
//    'version' => '',
    'metadata' =>
    [
//        'apiVersion' => '',
//        'endpointPrefix' => 'iam',
        'protocol' => 'json',
//        'serviceFullName' => 'iam',
//        'serviceId' => 'iam',
    ],
    'operations' => [
        'CreatePermission' => [
            'name' => 'CreatePermission',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/permission',
            ],
            'input' => [ 'shape' => 'CreatePermissionRequestShape', ],
            'output' => [ 'shape' => 'CreatePermissionResponseShape', ],
        ],
        'DescribePermissionDetail' => [
            'name' => 'DescribePermissionDetail',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/permission/{permissionId}',
            ],
            'input' => [ 'shape' => 'DescribePermissionDetailRequestShape', ],
            'output' => [ 'shape' => 'DescribePermissionDetailResponseShape', ],
        ],
        'UpdatePermission' => [
            'name' => 'UpdatePermission',
            'http' => [
                'method' => 'PUT',
                'requestUri' => '/v1/regions/{regionId}/permission/{permissionId}',
            ],
            'input' => [ 'shape' => 'UpdatePermissionRequestShape', ],
            'output' => [ 'shape' => 'UpdatePermissionResponseShape', ],
        ],
        'DescribePermissions' => [
            'name' => 'DescribePermissions',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/permissions',
            ],
            'input' => [ 'shape' => 'DescribePermissionsRequestShape', ],
            'output' => [ 'shape' => 'DescribePermissionsResponseShape', ],
        ],
        'DescribeSubUserPermissions' => [
            'name' => 'DescribeSubUserPermissions',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/subUser/{subUser}/permisssions',
            ],
            'input' => [ 'shape' => 'DescribeSubUserPermissionsRequestShape', ],
            'output' => [ 'shape' => 'DescribeSubUserPermissionsResponseShape', ],
        ],
        'AddPermissionsToSubUser' => [
            'name' => 'AddPermissionsToSubUser',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/subUser/{subUser}/permisssions',
            ],
            'input' => [ 'shape' => 'AddPermissionsToSubUserRequestShape', ],
            'output' => [ 'shape' => 'AddPermissionsToSubUserResponseShape', ],
        ],
        'RemovePermissionOfSubUser' => [
            'name' => 'RemovePermissionOfSubUser',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/regions/{regionId}/subUser/{subUser}/permissions/{permissionId}',
            ],
            'input' => [ 'shape' => 'RemovePermissionOfSubUserRequestShape', ],
            'output' => [ 'shape' => 'RemovePermissionOfSubUserResponseShape', ],
        ],
        'GetSessionToken' => [
            'name' => 'GetSessionToken',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/securityToken:getSessionToken',
            ],
            'input' => [ 'shape' => 'GetSessionTokenRequestShape', ],
            'output' => [ 'shape' => 'GetSessionTokenResponseShape', ],
        ],
        'VerifySessionToken' => [
            'name' => 'VerifySessionToken',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/securityToken:verifySessionToken',
            ],
            'input' => [ 'shape' => 'VerifySessionTokenRequestShape', ],
            'output' => [ 'shape' => 'VerifySessionTokenResponseShape', ],
        ],
        'CreateSubuser' => [
            'name' => 'CreateSubuser',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/subUser',
            ],
            'input' => [ 'shape' => 'CreateSubuserRequestShape', ],
            'output' => [ 'shape' => 'CreateSubuserResponseShape', ],
        ],
        'DescribeUserAccessKeys' => [
            'name' => 'DescribeUserAccessKeys',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/userAccessKeys',
            ],
            'input' => [ 'shape' => 'DescribeUserAccessKeysRequestShape', ],
            'output' => [ 'shape' => 'DescribeUserAccessKeysResponseShape', ],
        ],
        'CreateUserAccessKey' => [
            'name' => 'CreateUserAccessKey',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/userAccessKey',
            ],
            'input' => [ 'shape' => 'CreateUserAccessKeyRequestShape', ],
            'output' => [ 'shape' => 'CreateUserAccessKeyResponseShape', ],
        ],
        'EnabledUserAccessKey' => [
            'name' => 'EnabledUserAccessKey',
            'http' => [
                'method' => 'PUT',
                'requestUri' => '/v1/regions/{regionId}/userAccessKey/{accessKey}:enabled',
            ],
            'input' => [ 'shape' => 'EnabledUserAccessKeyRequestShape', ],
            'output' => [ 'shape' => 'EnabledUserAccessKeyResponseShape', ],
        ],
        'DisabledUserAccessKey' => [
            'name' => 'DisabledUserAccessKey',
            'http' => [
                'method' => 'PUT',
                'requestUri' => '/v1/regions/{regionId}/userAccessKey/{accessKey}:disabled',
            ],
            'input' => [ 'shape' => 'DisabledUserAccessKeyRequestShape', ],
            'output' => [ 'shape' => 'DisabledUserAccessKeyResponseShape', ],
        ],
        'DeleteUserAccessKey' => [
            'name' => 'DeleteUserAccessKey',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/regions/{regionId}/userAccessKey/{accessKey}',
            ],
            'input' => [ 'shape' => 'DeleteUserAccessKeyRequestShape', ],
            'output' => [ 'shape' => 'DeleteUserAccessKeyResponseShape', ],
        ],
    ],
    'shapes' => [
        'AddPermissionsInfo' => [
            'type' => 'structure',
            'members' => [
                'permissionIds' => [ 'type' => 'list', 'member' => [ 'type' => 'integer', ], ],
            ],
        ],
        'Resource' => [
            'type' => 'structure',
            'members' => [
                'ids' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'type' => [ 'type' => 'string', 'locationName' => 'type', ],
            ],
        ],
        'PermissionDetail' => [
            'type' => 'structure',
            'members' => [
                'permission' => [ 'type' => 'string', 'locationName' => 'permission', ],
                'resource' => [ 'type' => 'list', 'member' => [ 'shape' => 'Resource', ], ],
            ],
        ],
        'CreatePermissionInfo' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'content' => [ 'type' => 'list', 'member' => [ 'shape' => 'PermissionDetail', ], ],
            ],
        ],
        'CreateSubUserInfo' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'password' => [ 'type' => 'string', 'locationName' => 'password', ],
                'phone' => [ 'type' => 'string', 'locationName' => 'phone', ],
                'email' => [ 'type' => 'string', 'locationName' => 'email', ],
                'passwordConfirm' => [ 'type' => 'string', 'locationName' => 'passwordConfirm', ],
                'createAk' => [ 'type' => 'boolean', 'locationName' => 'createAk', ],
            ],
        ],
        'GetSessionTokenInfo' => [
            'type' => 'structure',
            'members' => [
                'type' => [ 'type' => 'integer', 'locationName' => 'type', ],
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'businessAction' => [ 'type' => 'string', 'locationName' => 'businessAction', ],
                'durationSeconds' => [ 'type' => 'integer', 'locationName' => 'durationSeconds', ],
            ],
        ],
        'Permission' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'integer', 'locationName' => 'id', ],
                'account' => [ 'type' => 'string', 'locationName' => 'account', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'permissionType' => [ 'type' => 'string', 'locationName' => 'permissionType', ],
                'version' => [ 'type' => 'string', 'locationName' => 'version', ],
                'content' => [ 'type' => 'string', 'locationName' => 'content', ],
                'permissionDetailList' => [ 'type' => 'list', 'member' => [ 'shape' => 'PermissionDetail', ], ],
            ],
        ],
        'RemovePermissionInfo' => [
            'type' => 'structure',
            'members' => [
                'permissionId' => [ 'type' => 'integer', 'locationName' => 'permissionId', ],
            ],
        ],
        'UpdatePermissionInfo' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'content' => [ 'type' => 'list', 'member' => [ 'shape' => 'PermissionDetail', ], ],
            ],
        ],
        'UserAccessKey' => [
            'type' => 'structure',
            'members' => [
                'accessKey' => [ 'type' => 'string', 'locationName' => 'accessKey', ],
                'accessKeySecret' => [ 'type' => 'string', 'locationName' => 'accessKeySecret', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'state' => [ 'type' => 'integer', 'locationName' => 'state', ],
                'yn' => [ 'type' => 'integer', 'locationName' => 'yn', ],
            ],
        ],
        'VerifySessionTokenInfo' => [
            'type' => 'structure',
            'members' => [
                'businessAction' => [ 'type' => 'string', 'locationName' => 'businessAction', ],
            ],
        ],
        'DescribeSubUserPermissionsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeSubUserPermissionsResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'RemovePermissionOfSubUserRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'permissionId' => [ 'type' => 'integer', 'locationName' => 'permissionId', ],
                'subUser' => [ 'type' => 'string', 'locationName' => 'subUser', ],
            ],
        ],
        'DescribePermissionsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribePermissionsResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'UpdatePermissionResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DescribeSubUserPermissionsResultShape' => [
            'type' => 'structure',
            'members' => [
                'total' => [ 'type' => 'integer', 'locationName' => 'total', ],
                'permissions' => [ 'type' => 'list', 'member' => [ 'shape' => 'Permission', ], ],
            ],
        ],
        'DescribeSubUserPermissionsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'subUser' => [ 'type' => 'string', 'locationName' => 'subUser', ],
            ],
        ],
        'UpdatePermissionResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribePermissionsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'keyword' => [ 'type' => 'string', 'locationName' => 'keyword', ],
                'queryType' => [ 'type' => 'integer', 'locationName' => 'queryType', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DescribePermissionDetailResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribePermissionDetailResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribePermissionDetailResultShape' => [
            'type' => 'structure',
            'members' => [
                'permission' =>  [ 'shape' => 'Permission', ],
            ],
        ],
        'DescribePermissionDetailRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'permissionId' => [ 'type' => 'integer', 'locationName' => 'permissionId', ],
            ],
        ],
        'DescribePermissionsResultShape' => [
            'type' => 'structure',
            'members' => [
                'total' => [ 'type' => 'integer', 'locationName' => 'total', ],
                'permissions' => [ 'type' => 'list', 'member' => [ 'shape' => 'Permission', ], ],
            ],
        ],
        'AddPermissionsToSubUserResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'AddPermissionsToSubUserRequestShape' => [
            'type' => 'structure',
            'members' => [
                'addPermissionsInfo' =>  [ 'shape' => 'AddPermissionsInfo', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'subUser' => [ 'type' => 'string', 'locationName' => 'subUser', ],
            ],
        ],
        'CreatePermissionResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'RemovePermissionOfSubUserResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'RemovePermissionOfSubUserResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'CreatePermissionResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'CreatePermissionRequestShape' => [
            'type' => 'structure',
            'members' => [
                'createPermissionInfo' =>  [ 'shape' => 'CreatePermissionInfo', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'AddPermissionsToSubUserResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'UpdatePermissionRequestShape' => [
            'type' => 'structure',
            'members' => [
                'updatePermissionInfo' =>  [ 'shape' => 'UpdatePermissionInfo', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'permissionId' => [ 'type' => 'integer', 'locationName' => 'permissionId', ],
            ],
        ],
        'GetSessionTokenResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GetSessionTokenResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'GetSessionTokenResultShape' => [
            'type' => 'structure',
            'members' => [
                'sessionToken' => [ 'type' => 'string', 'locationName' => 'sessionToken', ],
            ],
        ],
        'GetSessionTokenRequestShape' => [
            'type' => 'structure',
            'members' => [
                'getSessionTokenInfo' =>  [ 'shape' => 'GetSessionTokenInfo', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'VerifySessionTokenResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'VerifySessionTokenResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'VerifySessionTokenRequestShape' => [
            'type' => 'structure',
            'members' => [
                'verifySessionTokenInfo' =>  [ 'shape' => 'VerifySessionTokenInfo', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DeleteUserAccessKeyResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeUserAccessKeysResultShape' => [
            'type' => 'structure',
            'members' => [
                'userAccessKeys' => [ 'type' => 'list', 'member' => [ 'shape' => 'UserAccessKey', ], ],
            ],
        ],
        'CreateSubuserResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DeleteUserAccessKeyResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'CreateUserAccessKeyResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DeleteUserAccessKeyRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'accessKey' => [ 'type' => 'string', 'locationName' => 'accessKey', ],
            ],
        ],
        'DisabledUserAccessKeyResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DescribeUserAccessKeysRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'EnabledUserAccessKeyResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'EnabledUserAccessKeyResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'CreateSubuserResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DisabledUserAccessKeyResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DisabledUserAccessKeyRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'accessKey' => [ 'type' => 'string', 'locationName' => 'accessKey', ],
            ],
        ],
        'CreateSubuserRequestShape' => [
            'type' => 'structure',
            'members' => [
                'createSubUserInfo' =>  [ 'shape' => 'CreateSubUserInfo', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'EnabledUserAccessKeyRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'accessKey' => [ 'type' => 'string', 'locationName' => 'accessKey', ],
            ],
        ],
        'CreateUserAccessKeyResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'CreateUserAccessKeyRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DescribeUserAccessKeysResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeUserAccessKeysResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
    ],
];
