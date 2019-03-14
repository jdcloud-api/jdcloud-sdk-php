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
        'CreateSubUser' => [
            'name' => 'CreateSubUser',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/subUser',
            ],
            'input' => [ 'shape' => 'CreateSubUserRequestShape', ],
            'output' => [ 'shape' => 'CreateSubUserResponseShape', ],
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
        'APIInfo' => [
            'type' => 'structure',
            'members' => [
                'accessLevel' => [ 'type' => 'integer', 'locationName' => 'accessLevel', ],
                'actionName' => [ 'type' => 'string', 'locationName' => 'actionName', ],
                'actionType' => [ 'type' => 'string', 'locationName' => 'actionType', ],
                'resource' => [ 'type' => 'string', 'locationName' => 'resource', ],
                'resourceType' => [ 'type' => 'string', 'locationName' => 'resourceType', ],
                'subResourceType' => [ 'type' => 'string', 'locationName' => 'subResourceType', ],
                'terResourceType' => [ 'type' => 'string', 'locationName' => 'terResourceType', ],
            ],
        ],
        'AddPermissionsInfo' => [
            'type' => 'structure',
            'members' => [
                'permissionIds' => [ 'type' => 'list', 'member' => [ 'type' => 'integer', ], ],
            ],
        ],
        'AuthenticationInfo' => [
            'type' => 'structure',
            'members' => [
                'account' => [ 'type' => 'string', 'locationName' => 'account', ],
                'subUser' => [ 'type' => 'string', 'locationName' => 'subUser', ],
                'action' => [ 'type' => 'string', 'locationName' => 'action', ],
                'resource' => [ 'type' => 'string', 'locationName' => 'resource', ],
            ],
        ],
        'AzMappingVo' => [
            'type' => 'structure',
            'members' => [
                'laz' => [ 'type' => 'string', 'locationName' => 'laz', ],
                'paz' => [ 'type' => 'string', 'locationName' => 'paz', ],
            ],
        ],
        'AzSaleStatusVo' => [
            'type' => 'structure',
            'members' => [
                'az' => [ 'type' => 'string', 'locationName' => 'az', ],
                'canSale' => [ 'type' => 'integer', 'locationName' => 'canSale', ],
                'visible' => [ 'type' => 'integer', 'locationName' => 'visible', ],
            ],
        ],
        'BaseProductRegionVo' => [
            'type' => 'structure',
            'members' => [
                'serviceCode' => [ 'type' => 'string', 'locationName' => 'serviceCode', ],
                'regionAzVos' => [ 'type' => 'list', 'member' => [ 'shape' => 'RegionAzVo', ], ],
            ],
        ],
        'RegionAzVo' => [
            'type' => 'structure',
            'members' => [
                'alias' => [ 'type' => 'string', 'locationName' => 'alias', ],
                'region' => [ 'type' => 'string', 'locationName' => 'region', ],
                'visible' => [ 'type' => 'integer', 'locationName' => 'visible', ],
                'azStatusList' => [ 'type' => 'list', 'member' => [ 'shape' => 'AzSaleStatusVo', ], ],
            ],
        ],
        'SubUserInfo' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
            ],
        ],
        'ConditionMappingVo' => [
            'type' => 'structure',
            'members' => [
                'conditionKey' => [ 'type' => 'string', 'locationName' => 'conditionKey', ],
                'values' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'ConditionStatement' => [
            'type' => 'structure',
            'members' => [
                'conditionMappings' => [ 'type' => 'list', 'member' => [ 'shape' => 'ConditionMappingVo', ], ],
            ],
        ],
        'CreateGroupInfo' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
            ],
        ],
        'CreateGroupRes' => [
            'type' => 'structure',
            'members' => [
                'groupId' => [ 'type' => 'string', 'locationName' => 'groupId', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'jrn' => [ 'type' => 'string', 'locationName' => 'jrn', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'updateTime' => [ 'type' => 'string', 'locationName' => 'updateTime', ],
            ],
        ],
        'CreateLoginProfileInfo' => [
            'type' => 'structure',
            'members' => [
                'passwordResetRequired' => [ 'type' => 'boolean', 'locationName' => 'passwordResetRequired', ],
                'password' => [ 'type' => 'string', 'locationName' => 'password', ],
                'autoGeneratePassword' => [ 'type' => 'boolean', 'locationName' => 'autoGeneratePassword', ],
                'mFABindRequired' => [ 'type' => 'boolean', 'locationName' => 'mFABindRequired', ],
            ],
        ],
        'PermissionDetail' => [
            'type' => 'structure',
            'members' => [
                'permission' => [ 'type' => 'string', 'locationName' => 'permission', ],
                'resource' => [ 'type' => 'list', 'member' => [ 'shape' => 'Resource', ], ],
            ],
        ],
        'Resource' => [
            'type' => 'structure',
            'members' => [
                'ids' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'type' => [ 'type' => 'string', 'locationName' => 'type', ],
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
        'CreatePolicyEditionInfo' => [
            'type' => 'structure',
            'members' => [
                'policyDocument' => [ 'type' => 'string', 'locationName' => 'policyDocument', ],
                'setAsDefault' => [ 'type' => 'boolean', 'locationName' => 'setAsDefault', ],
            ],
        ],
        'CreatePolicyInfo' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'content' => [ 'type' => 'string', 'locationName' => 'content', ],
            ],
        ],
        'CreateRoleInfo' => [
            'type' => 'structure',
            'members' => [
                'path' => [ 'type' => 'string', 'locationName' => 'path', ],
                'roleName' => [ 'type' => 'string', 'locationName' => 'roleName', ],
                'type' => [ 'type' => 'integer', 'locationName' => 'type', ],
                'assumeRolePolicyDocument' => [ 'type' => 'string', 'locationName' => 'assumeRolePolicyDocument', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'maxSessionDuration' => [ 'type' => 'integer', 'locationName' => 'maxSessionDuration', ],
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
                'createAk' => [ 'type' => 'boolean', 'locationName' => 'createAk', ],
                'needResetPassword' => [ 'type' => 'boolean', 'locationName' => 'needResetPassword', ],
                'consoleLogin' => [ 'type' => 'boolean', 'locationName' => 'consoleLogin', ],
                'autoGeneratePassword' => [ 'type' => 'boolean', 'locationName' => 'autoGeneratePassword', ],
            ],
        ],
        'CreateSubUserRes' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'password' => [ 'type' => 'string', 'locationName' => 'password', ],
                'email' => [ 'type' => 'string', 'locationName' => 'email', ],
                'accessKey' => [ 'type' => 'string', 'locationName' => 'accessKey', ],
                'secretAccessKey' => [ 'type' => 'string', 'locationName' => 'secretAccessKey', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'updateTime' => [ 'type' => 'string', 'locationName' => 'updateTime', ],
            ],
        ],
        'EmailSmsInfo' => [
            'type' => 'structure',
            'members' => [
                'createPin' => [ 'type' => 'string', 'locationName' => 'createPin', ],
                'title' => [ 'type' => 'string', 'locationName' => 'title', ],
                'sendType' => [ 'type' => 'integer', 'locationName' => 'sendType', ],
                'content' => [ 'type' => 'string', 'locationName' => 'content', ],
                'receives' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'templateId' => [ 'type' => 'integer', 'locationName' => 'templateId', ],
                'templateParam' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'smsMessageSource' => [ 'type' => 'string', 'locationName' => 'smsMessageSource', ],
            ],
        ],
        'Flags' => [
            'type' => 'structure',
            'members' => [
                'value' => [ 'type' => 'integer', 'locationName' => 'value', ],
            ],
        ],
        'GlobalAzMappingVo' => [
            'type' => 'structure',
            'members' => [
                'alias' => [ 'type' => 'string', 'locationName' => 'alias', ],
                'region' => [ 'type' => 'string', 'locationName' => 'region', ],
                'mapping' => [ 'type' => 'list', 'member' => [ 'shape' => 'AzMappingVo', ], ],
            ],
        ],
        'Group' => [
            'type' => 'structure',
            'members' => [
                'groupId' => [ 'type' => 'string', 'locationName' => 'groupId', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'jrn' => [ 'type' => 'string', 'locationName' => 'jrn', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'subUserSum' => [ 'type' => 'integer', 'locationName' => 'subUserSum', ],
                'policySum' => [ 'type' => 'integer', 'locationName' => 'policySum', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'updateTime' => [ 'type' => 'string', 'locationName' => 'updateTime', ],
            ],
        ],
        'GroupDetail' => [
            'type' => 'structure',
            'members' => [
                'groupId' => [ 'type' => 'string', 'locationName' => 'groupId', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'jrn' => [ 'type' => 'string', 'locationName' => 'jrn', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'updateTime' => [ 'type' => 'string', 'locationName' => 'updateTime', ],
            ],
        ],
        'GroupInfo' => [
            'type' => 'structure',
            'members' => [
                'groupId' => [ 'type' => 'string', 'locationName' => 'groupId', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'jrn' => [ 'type' => 'string', 'locationName' => 'jrn', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'updateTime' => [ 'type' => 'string', 'locationName' => 'updateTime', ],
                'policies' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'ListRoleInfo' => [
            'type' => 'structure',
            'members' => [
                'roleName' => [ 'type' => 'string', 'locationName' => 'roleName', ],
                'type' => [ 'type' => 'integer', 'locationName' => 'type', ],
                'assumeRolePolicyDocument' => [ 'type' => 'string', 'locationName' => 'assumeRolePolicyDocument', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
            ],
        ],
        'LoginProfile' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'passwordResetRequired' => [ 'type' => 'boolean', 'locationName' => 'passwordResetRequired', ],
                'mFABindRequired' => [ 'type' => 'boolean', 'locationName' => 'mFABindRequired', ],
            ],
        ],
        'LoginProfileInfo' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'password' => [ 'type' => 'string', 'locationName' => 'password', ],
                'passwordResetRequired' => [ 'type' => 'boolean', 'locationName' => 'passwordResetRequired', ],
                'mFABindRequired' => [ 'type' => 'boolean', 'locationName' => 'mFABindRequired', ],
            ],
        ],
        'MFAInfo' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'secret' => [ 'type' => 'string', 'locationName' => 'secret', ],
            ],
        ],
        'PasswordPolicyRule' => [
            'type' => 'structure',
            'members' => [
                'requireUppercaseCharacters' => [ 'type' => 'boolean', 'locationName' => 'requireUppercaseCharacters', ],
                'requireLowercaseCharacters' => [ 'type' => 'boolean', 'locationName' => 'requireLowercaseCharacters', ],
                'requireNumbers' => [ 'type' => 'boolean', 'locationName' => 'requireNumbers', ],
                'requireSpecialCharacters' => [ 'type' => 'boolean', 'locationName' => 'requireSpecialCharacters', ],
            ],
        ],
        'PasswordPolicy' => [
            'type' => 'structure',
            'members' => [
                'length' => [ 'type' => 'integer', 'locationName' => 'length', ],
                'age' => [ 'type' => 'integer', 'locationName' => 'age', ],
                'expirationOperation' => [ 'type' => 'integer', 'locationName' => 'expirationOperation', ],
                'reusePrevention' => [ 'type' => 'integer', 'locationName' => 'reusePrevention', ],
                'retryTimes' => [ 'type' => 'integer', 'locationName' => 'retryTimes', ],
                'validLoginDuration' => [ 'type' => 'integer', 'locationName' => 'validLoginDuration', ],
                'rule' =>  [ 'shape' => 'PasswordPolicyRule', ],
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
        'Policy' => [
            'type' => 'structure',
            'members' => [
                'policyId' => [ 'type' => 'string', 'locationName' => 'policyId', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'jrn' => [ 'type' => 'string', 'locationName' => 'jrn', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'policyType' => [ 'type' => 'string', 'locationName' => 'policyType', ],
                'version' => [ 'type' => 'string', 'locationName' => 'version', ],
                'defaultEdition' => [ 'type' => 'integer', 'locationName' => 'defaultEdition', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'updateTime' => [ 'type' => 'string', 'locationName' => 'updateTime', ],
            ],
        ],
        'PolicyDetail' => [
            'type' => 'structure',
            'members' => [
                'policyId' => [ 'type' => 'string', 'locationName' => 'policyId', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'jrn' => [ 'type' => 'string', 'locationName' => 'jrn', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'policyType' => [ 'type' => 'string', 'locationName' => 'policyType', ],
                'version' => [ 'type' => 'string', 'locationName' => 'version', ],
                'defaultEdition' => [ 'type' => 'integer', 'locationName' => 'defaultEdition', ],
                'content' => [ 'type' => 'string', 'locationName' => 'content', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'updateTime' => [ 'type' => 'string', 'locationName' => 'updateTime', ],
            ],
        ],
        'PolicyEdition' => [
            'type' => 'structure',
            'members' => [
                'isDefaultEdition' => [ 'type' => 'boolean', 'locationName' => 'isDefaultEdition', ],
                'edition' => [ 'type' => 'integer', 'locationName' => 'edition', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
            ],
        ],
        'PolicyEditionDetail' => [
            'type' => 'structure',
            'members' => [
                'document' => [ 'type' => 'string', 'locationName' => 'document', ],
                'isDefaultEdition' => [ 'type' => 'boolean', 'locationName' => 'isDefaultEdition', ],
                'edition' => [ 'type' => 'integer', 'locationName' => 'edition', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
            ],
        ],
        'RemovePermissionInfo' => [
            'type' => 'structure',
            'members' => [
                'permissionId' => [ 'type' => 'integer', 'locationName' => 'permissionId', ],
            ],
        ],
        'ResultMsg' => [
            'type' => 'structure',
            'members' => [
                'errorCode' => [ 'type' => 'string', 'locationName' => 'errorCode', ],
                'errorMsg' => [ 'type' => 'string', 'locationName' => 'errorMsg', ],
            ],
        ],
        'RoleInfo' => [
            'type' => 'structure',
            'members' => [
                'path' => [ 'type' => 'string', 'locationName' => 'path', ],
                'roleId' => [ 'type' => 'string', 'locationName' => 'roleId', ],
                'roleName' => [ 'type' => 'string', 'locationName' => 'roleName', ],
                'type' => [ 'type' => 'integer', 'locationName' => 'type', ],
                'assumeRolePolicyDocument' => [ 'type' => 'string', 'locationName' => 'assumeRolePolicyDocument', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'maxSessionDuration' => [ 'type' => 'integer', 'locationName' => 'maxSessionDuration', ],
                'jrn' => [ 'type' => 'string', 'locationName' => 'jrn', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'account' => [ 'type' => 'string', 'locationName' => 'account', ],
            ],
        ],
        'RolePolicy' => [
            'type' => 'structure',
            'members' => [
                'policyName' => [ 'type' => 'string', 'locationName' => 'policyName', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'type' => [ 'type' => 'string', 'locationName' => 'type', ],
                'policyJrn' => [ 'type' => 'string', 'locationName' => 'policyJrn', ],
            ],
        ],
        'SendBatchMsg' => [
            'type' => 'structure',
            'members' => [
                'templateId' => [ 'type' => 'integer', 'locationName' => 'templateId', ],
                'templateParam' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'smsMessageSource' => [ 'type' => 'string', 'locationName' => 'smsMessageSource', ],
                'pin' => [ 'type' => 'string', 'locationName' => 'pin', ],
                'mobileNumSet' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'SendOutSiteNotice' => [
            'type' => 'structure',
            'members' => [
                'pin' => [ 'type' => 'string', 'locationName' => 'pin', ],
                'emailSubject' => [ 'type' => 'string', 'locationName' => 'emailSubject', ],
                'emailContent' => [ 'type' => 'string', 'locationName' => 'emailContent', ],
                'notifyBusinessTypeEnum' => [ 'type' => 'string', 'locationName' => 'notifyBusinessTypeEnum', ],
                'templateId' => [ 'type' => 'integer', 'locationName' => 'templateId', ],
                'templateParam' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'smsMessageSource' => [ 'type' => 'string', 'locationName' => 'smsMessageSource', ],
            ],
        ],
        'SendSingleMsg' => [
            'type' => 'structure',
            'members' => [
                'templateId' => [ 'type' => 'integer', 'locationName' => 'templateId', ],
                'templateParam' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'smsMessageSource' => [ 'type' => 'string', 'locationName' => 'smsMessageSource', ],
                'pin' => [ 'type' => 'string', 'locationName' => 'pin', ],
                'mobileNum' => [ 'type' => 'string', 'locationName' => 'mobileNum', ],
            ],
        ],
        'ServiceDetail' => [
            'type' => 'structure',
            'members' => [
                'serviceName' => [ 'type' => 'string', 'locationName' => 'serviceName', ],
                'apiList' => [ 'type' => 'list', 'member' => [ 'shape' => 'APIInfo', ], ],
                'resourceList' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'SubUser' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'phone' => [ 'type' => 'string', 'locationName' => 'phone', ],
                'email' => [ 'type' => 'string', 'locationName' => 'email', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'account' => [ 'type' => 'string', 'locationName' => 'account', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'updateTime' => [ 'type' => 'string', 'locationName' => 'updateTime', ],
            ],
        ],
        'SubUserAccessKey' => [
            'type' => 'structure',
            'members' => [
                'accessKey' => [ 'type' => 'string', 'locationName' => 'accessKey', ],
                'secretAccessKey' => [ 'type' => 'string', 'locationName' => 'secretAccessKey', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'status' => [ 'type' => 'integer', 'locationName' => 'status', ],
                'yn' => [ 'type' => 'integer', 'locationName' => 'yn', ],
            ],
        ],
        'UpdateAssumeRolePolicyInfo' => [
            'type' => 'structure',
            'members' => [
                'assumeRolePolicyDocument' => [ 'type' => 'string', 'locationName' => 'assumeRolePolicyDocument', ],
            ],
        ],
        'UpdateGroupInfo' => [
            'type' => 'structure',
            'members' => [
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
            ],
        ],
        'UpdateLoginProfileInfo' => [
            'type' => 'structure',
            'members' => [
                'passwordResetRequired' => [ 'type' => 'boolean', 'locationName' => 'passwordResetRequired', ],
                'password' => [ 'type' => 'string', 'locationName' => 'password', ],
                'autoGeneratePassword' => [ 'type' => 'boolean', 'locationName' => 'autoGeneratePassword', ],
                'mFABindRequired' => [ 'type' => 'boolean', 'locationName' => 'mFABindRequired', ],
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
        'UpdatePolicyDescriptionInfo' => [
            'type' => 'structure',
            'members' => [
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
            ],
        ],
        'UpdatePolicyInfo' => [
            'type' => 'structure',
            'members' => [
                'content' => [ 'type' => 'string', 'locationName' => 'content', ],
            ],
        ],
        'UpdateRoleInfo' => [
            'type' => 'structure',
            'members' => [
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'maxSessionDuration' => [ 'type' => 'integer', 'locationName' => 'maxSessionDuration', ],
            ],
        ],
        'UpdateSubUserInfo' => [
            'type' => 'structure',
            'members' => [
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'phone' => [ 'type' => 'string', 'locationName' => 'phone', ],
                'email' => [ 'type' => 'string', 'locationName' => 'email', ],
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
        'UserAttachment' => [
            'type' => 'structure',
            'members' => [
                'remark' => [ 'type' => 'string', 'locationName' => 'remark', ],
                'industry' => [ 'type' => 'string', 'locationName' => 'industry', ],
                'subIndustry' => [ 'type' => 'string', 'locationName' => 'subIndustry', ],
                'business' => [ 'type' => 'string', 'locationName' => 'business', ],
                'website' => [ 'type' => 'string', 'locationName' => 'website', ],
                'cpState' => [ 'type' => 'string', 'locationName' => 'cpState', ],
                'cpProvince' => [ 'type' => 'string', 'locationName' => 'cpProvince', ],
                'cpCity' => [ 'type' => 'string', 'locationName' => 'cpCity', ],
                'cpCountry' => [ 'type' => 'string', 'locationName' => 'cpCountry', ],
                'cpAddress' => [ 'type' => 'string', 'locationName' => 'cpAddress', ],
                'cpTelphone' => [ 'type' => 'string', 'locationName' => 'cpTelphone', ],
            ],
        ],
        'UserReqVo' => [
            'type' => 'structure',
            'members' => [
                'pin' => [ 'type' => 'string', 'locationName' => 'pin', ],
                'cscPhone' => [ 'type' => 'string', 'locationName' => 'cscPhone', ],
                'cscEmail' => [ 'type' => 'string', 'locationName' => 'cscEmail', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'userType' => [ 'type' => 'integer', 'locationName' => 'userType', ],
                'companyName' => [ 'type' => 'string', 'locationName' => 'companyName', ],
                'createTimeStart' => [ 'type' => 'string', 'locationName' => 'createTimeStart', ],
                'createTimeEnd' => [ 'type' => 'string', 'locationName' => 'createTimeEnd', ],
                'arrearageStatus' => [ 'type' => 'integer', 'locationName' => 'arrearageStatus', ],
                'groups' => [ 'type' => 'string', 'locationName' => 'groups', ],
                'group' => [ 'type' => 'integer', 'locationName' => 'group', ],
                'billingWhite' => [ 'type' => 'integer', 'locationName' => 'billingWhite', ],
                'tag' => [ 'type' => 'integer', 'locationName' => 'tag', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'currentPage' => [ 'type' => 'integer', 'locationName' => 'currentPage', ],
            ],
        ],
        'UserResVo' => [
            'type' => 'structure',
            'members' => [
                'pin' => [ 'type' => 'string', 'locationName' => 'pin', ],
                'cscPhone' => [ 'type' => 'string', 'locationName' => 'cscPhone', ],
                'cscEmail' => [ 'type' => 'string', 'locationName' => 'cscEmail', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'userType' => [ 'type' => 'integer', 'locationName' => 'userType', ],
                'companyName' => [ 'type' => 'string', 'locationName' => 'companyName', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'arrearageTime' => [ 'type' => 'string', 'locationName' => 'arrearageTime', ],
                'userTagObject' =>  [ 'shape' => 'Flags', ],
                'attachment' =>  [ 'shape' => 'UserAttachment', ],
            ],
        ],
        'VirtualMFADevice' => [
            'type' => 'structure',
            'members' => [
                'base64Qr' => [ 'type' => 'string', 'locationName' => 'base64Qr', ],
                'mFAInfos' => [ 'type' => 'list', 'member' => [ 'shape' => 'MFAInfo', ], ],
            ],
        ],
        'RemovePermissionOfSubUserResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'CreatePermissionResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'AddPermissionsToSubUserResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribePermissionDetailResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribePermissionDetailResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribePermissionsResultShape' => [
            'type' => 'structure',
            'members' => [
                'total' => [ 'type' => 'integer', 'locationName' => 'total', ],
                'permissions' => [ 'type' => 'list', 'member' => [ 'shape' => 'Permission', ], ],
            ],
        ],
        'DescribeSubUserPermissionsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeSubUserPermissionsResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
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
        'DescribePermissionDetailRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'permissionId' => [ 'type' => 'integer', 'locationName' => 'permissionId', ],
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
        'RemovePermissionOfSubUserResultShape' => [
            'type' => 'structure',
            'members' => [
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
        'AddPermissionsToSubUserRequestShape' => [
            'type' => 'structure',
            'members' => [
                'addPermissionsInfo' =>  [ 'shape' => 'AddPermissionsInfo', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'subUser' => [ 'type' => 'string', 'locationName' => 'subUser', ],
            ],
        ],
        'CreatePermissionRequestShape' => [
            'type' => 'structure',
            'members' => [
                'createPermissionInfo' =>  [ 'shape' => 'CreatePermissionInfo', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
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
        'UpdatePermissionRequestShape' => [
            'type' => 'structure',
            'members' => [
                'updatePermissionInfo' =>  [ 'shape' => 'UpdatePermissionInfo', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'permissionId' => [ 'type' => 'integer', 'locationName' => 'permissionId', ],
            ],
        ],
        'UpdatePermissionResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'AddPermissionsToSubUserResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DescribePermissionDetailResultShape' => [
            'type' => 'structure',
            'members' => [
                'permission' =>  [ 'shape' => 'Permission', ],
            ],
        ],
        'DescribeSubUserPermissionsResultShape' => [
            'type' => 'structure',
            'members' => [
                'total' => [ 'type' => 'integer', 'locationName' => 'total', ],
                'permissions' => [ 'type' => 'list', 'member' => [ 'shape' => 'Permission', ], ],
            ],
        ],
        'CreatePermissionResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'CreateSubUserResultShape' => [
            'type' => 'structure',
            'members' => [
                'subUser' =>  [ 'shape' => 'CreateSubUserRes', ],
            ],
        ],
        'CreateSubUserRequestShape' => [
            'type' => 'structure',
            'members' => [
                'createSubUserInfo' =>  [ 'shape' => 'CreateSubUserInfo', ],
            ],
        ],
        'CreateSubUserResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'CreateSubUserResultShape', ],
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
        'DeleteUserAccessKeyResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'EnabledUserAccessKeyResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DeleteUserAccessKeyRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'accessKey' => [ 'type' => 'string', 'locationName' => 'accessKey', ],
            ],
        ],
        'DescribeUserAccessKeysRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DescribeUserAccessKeysResultShape' => [
            'type' => 'structure',
            'members' => [
                'userAccessKeys' => [ 'type' => 'list', 'member' => [ 'shape' => 'UserAccessKey', ], ],
            ],
        ],
        'CreateUserAccessKeyRequestShape' => [
            'type' => 'structure',
            'members' => [
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
        'DescribeUserAccessKeysResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeUserAccessKeysResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'CreateUserAccessKeyResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DisabledUserAccessKeyResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'CreateUserAccessKeyResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DeleteUserAccessKeyResponseShape' => [
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
        'EnabledUserAccessKeyResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
    ],
];
