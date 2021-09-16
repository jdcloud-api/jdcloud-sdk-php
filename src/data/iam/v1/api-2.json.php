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
        'EnableSubUserAccessKey' => [
            'name' => 'EnableSubUserAccessKey',
            'http' => [
                'method' => 'PUT',
                'requestUri' => '/v1/subUser/{subUser}/accessKey/{accessKey}:enable',
            ],
            'input' => [ 'shape' => 'EnableSubUserAccessKeyRequestShape', ],
            'output' => [ 'shape' => 'EnableSubUserAccessKeyResponseShape', ],
        ],
        'DisableSubUserAccessKey' => [
            'name' => 'DisableSubUserAccessKey',
            'http' => [
                'method' => 'PUT',
                'requestUri' => '/v1/subUser/{subUser}/accessKey/{accessKey}:disable',
            ],
            'input' => [ 'shape' => 'DisableSubUserAccessKeyRequestShape', ],
            'output' => [ 'shape' => 'DisableSubUserAccessKeyResponseShape', ],
        ],
        'DeleteSubUserAccessKey' => [
            'name' => 'DeleteSubUserAccessKey',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/subUser/{subUser}/accessKey/{accessKey}',
            ],
            'input' => [ 'shape' => 'DeleteSubUserAccessKeyRequestShape', ],
            'output' => [ 'shape' => 'DeleteSubUserAccessKeyResponseShape', ],
        ],
        'CreateGroup' => [
            'name' => 'CreateGroup',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/group',
            ],
            'input' => [ 'shape' => 'CreateGroupRequestShape', ],
            'output' => [ 'shape' => 'CreateGroupResponseShape', ],
        ],
        'DescribeGroup' => [
            'name' => 'DescribeGroup',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/group/{groupName}',
            ],
            'input' => [ 'shape' => 'DescribeGroupRequestShape', ],
            'output' => [ 'shape' => 'DescribeGroupResponseShape', ],
        ],
        'UpdateGroup' => [
            'name' => 'UpdateGroup',
            'http' => [
                'method' => 'PUT',
                'requestUri' => '/v1/group/{groupName}',
            ],
            'input' => [ 'shape' => 'UpdateGroupRequestShape', ],
            'output' => [ 'shape' => 'UpdateGroupResponseShape', ],
        ],
        'DeleteGroup' => [
            'name' => 'DeleteGroup',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/group/{groupName}',
            ],
            'input' => [ 'shape' => 'DeleteGroupRequestShape', ],
            'output' => [ 'shape' => 'DeleteGroupResponseShape', ],
        ],
        'DescribeGroupSubUsers' => [
            'name' => 'DescribeGroupSubUsers',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/group/{groupName}/subUsers',
            ],
            'input' => [ 'shape' => 'DescribeGroupSubUsersRequestShape', ],
            'output' => [ 'shape' => 'DescribeGroupSubUsersResponseShape', ],
        ],
        'DescribeGroups' => [
            'name' => 'DescribeGroups',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/groups',
            ],
            'input' => [ 'shape' => 'DescribeGroupsRequestShape', ],
            'output' => [ 'shape' => 'DescribeGroupsResponseShape', ],
        ],
        'DescribeAttachedGroupPolicies' => [
            'name' => 'DescribeAttachedGroupPolicies',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/group/{groupName}/policies',
            ],
            'input' => [ 'shape' => 'DescribeAttachedGroupPoliciesRequestShape', ],
            'output' => [ 'shape' => 'DescribeAttachedGroupPoliciesResponseShape', ],
        ],
        'DetachGroupPolicy' => [
            'name' => 'DetachGroupPolicy',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/group/{groupName}:detachGroupPolicy',
            ],
            'input' => [ 'shape' => 'DetachGroupPolicyRequestShape', ],
            'output' => [ 'shape' => 'DetachGroupPolicyResponseShape', ],
        ],
        'AttachGroupPolicy' => [
            'name' => 'AttachGroupPolicy',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/group/{groupName}:attachGroupPolicy',
            ],
            'input' => [ 'shape' => 'AttachGroupPolicyRequestShape', ],
            'output' => [ 'shape' => 'AttachGroupPolicyResponseShape', ],
        ],
        'RemoveSubUserFromGroup' => [
            'name' => 'RemoveSubUserFromGroup',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/group/{groupName}:removeSubUserFromGroup',
            ],
            'input' => [ 'shape' => 'RemoveSubUserFromGroupRequestShape', ],
            'output' => [ 'shape' => 'RemoveSubUserFromGroupResponseShape', ],
        ],
        'AddSubUserToGroup' => [
            'name' => 'AddSubUserToGroup',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/group/{groupName}:addSubUserToGroup',
            ],
            'input' => [ 'shape' => 'AddSubUserToGroupRequestShape', ],
            'output' => [ 'shape' => 'AddSubUserToGroupResponseShape', ],
        ],
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
        'CreatePolicy' => [
            'name' => 'CreatePolicy',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/policy',
            ],
            'input' => [ 'shape' => 'CreatePolicyRequestShape', ],
            'output' => [ 'shape' => 'CreatePolicyResponseShape', ],
        ],
        'DescribePolicy' => [
            'name' => 'DescribePolicy',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/policy/{policyName}',
            ],
            'input' => [ 'shape' => 'DescribePolicyRequestShape', ],
            'output' => [ 'shape' => 'DescribePolicyResponseShape', ],
        ],
        'UpdatePolicy' => [
            'name' => 'UpdatePolicy',
            'http' => [
                'method' => 'PUT',
                'requestUri' => '/v1/policy/{policyName}',
            ],
            'input' => [ 'shape' => 'UpdatePolicyRequestShape', ],
            'output' => [ 'shape' => 'UpdatePolicyResponseShape', ],
        ],
        'DeletePolicy' => [
            'name' => 'DeletePolicy',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/policy/{policyName}',
            ],
            'input' => [ 'shape' => 'DeletePolicyRequestShape', ],
            'output' => [ 'shape' => 'DeletePolicyResponseShape', ],
        ],
        'UpdatePolicyDescription' => [
            'name' => 'UpdatePolicyDescription',
            'http' => [
                'method' => 'PUT',
                'requestUri' => '/v1/policy/{policyName}/description',
            ],
            'input' => [ 'shape' => 'UpdatePolicyDescriptionRequestShape', ],
            'output' => [ 'shape' => 'UpdatePolicyDescriptionResponseShape', ],
        ],
        'DescribePolicies' => [
            'name' => 'DescribePolicies',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/policies',
            ],
            'input' => [ 'shape' => 'DescribePoliciesRequestShape', ],
            'output' => [ 'shape' => 'DescribePoliciesResponseShape', ],
        ],
        'CreateRole' => [
            'name' => 'CreateRole',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/role',
            ],
            'input' => [ 'shape' => 'CreateRoleRequestShape', ],
            'output' => [ 'shape' => 'CreateRoleResponseShape', ],
        ],
        'DescribeRole' => [
            'name' => 'DescribeRole',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/role/{roleName}',
            ],
            'input' => [ 'shape' => 'DescribeRoleRequestShape', ],
            'output' => [ 'shape' => 'DescribeRoleResponseShape', ],
        ],
        'DeleteRole' => [
            'name' => 'DeleteRole',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/role/{roleName}',
            ],
            'input' => [ 'shape' => 'DeleteRoleRequestShape', ],
            'output' => [ 'shape' => 'DeleteRoleResponseShape', ],
        ],
        'UpdateAssumeRolePolicy' => [
            'name' => 'UpdateAssumeRolePolicy',
            'http' => [
                'method' => 'PUT',
                'requestUri' => '/v1/role/{roleName}/assumeRolePolicy',
            ],
            'input' => [ 'shape' => 'UpdateAssumeRolePolicyRequestShape', ],
            'output' => [ 'shape' => 'UpdateAssumeRolePolicyResponseShape', ],
        ],
        'DescribeRoles' => [
            'name' => 'DescribeRoles',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/roles',
            ],
            'input' => [ 'shape' => 'DescribeRolesRequestShape', ],
            'output' => [ 'shape' => 'DescribeRolesResponseShape', ],
        ],
        'AttachRolePolicy' => [
            'name' => 'AttachRolePolicy',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/role/{roleName}:attachRolePolicy',
            ],
            'input' => [ 'shape' => 'AttachRolePolicyRequestShape', ],
            'output' => [ 'shape' => 'AttachRolePolicyResponseShape', ],
        ],
        'DetachRolePolicy' => [
            'name' => 'DetachRolePolicy',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/role/{roleName}:detachRolePolicy',
            ],
            'input' => [ 'shape' => 'DetachRolePolicyRequestShape', ],
            'output' => [ 'shape' => 'DetachRolePolicyResponseShape', ],
        ],
        'DescribeRolePolicies' => [
            'name' => 'DescribeRolePolicies',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/role/{roleName}/policies',
            ],
            'input' => [ 'shape' => 'DescribeRolePoliciesRequestShape', ],
            'output' => [ 'shape' => 'DescribeRolePoliciesResponseShape', ],
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
        'DescribeSubUser' => [
            'name' => 'DescribeSubUser',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/subUser/{subUser}',
            ],
            'input' => [ 'shape' => 'DescribeSubUserRequestShape', ],
            'output' => [ 'shape' => 'DescribeSubUserResponseShape', ],
        ],
        'UpdateSubUser' => [
            'name' => 'UpdateSubUser',
            'http' => [
                'method' => 'PUT',
                'requestUri' => '/v1/subUser/{subUser}',
            ],
            'input' => [ 'shape' => 'UpdateSubUserRequestShape', ],
            'output' => [ 'shape' => 'UpdateSubUserResponseShape', ],
        ],
        'DeleteSubUser' => [
            'name' => 'DeleteSubUser',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/subUser/{subUser}',
            ],
            'input' => [ 'shape' => 'DeleteSubUserRequestShape', ],
            'output' => [ 'shape' => 'DeleteSubUserResponseShape', ],
        ],
        'DescribeSubUsers' => [
            'name' => 'DescribeSubUsers',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/subUsers',
            ],
            'input' => [ 'shape' => 'DescribeSubUsersRequestShape', ],
            'output' => [ 'shape' => 'DescribeSubUsersResponseShape', ],
        ],
        'DescribeSubUserGroups' => [
            'name' => 'DescribeSubUserGroups',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/subUser/{subUser}/groups',
            ],
            'input' => [ 'shape' => 'DescribeSubUserGroupsRequestShape', ],
            'output' => [ 'shape' => 'DescribeSubUserGroupsResponseShape', ],
        ],
        'DescribeAttachedSubUserPolicies' => [
            'name' => 'DescribeAttachedSubUserPolicies',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/subUser/{subUser}/policies',
            ],
            'input' => [ 'shape' => 'DescribeAttachedSubUserPoliciesRequestShape', ],
            'output' => [ 'shape' => 'DescribeAttachedSubUserPoliciesResponseShape', ],
        ],
        'DetachSubUserPolicy' => [
            'name' => 'DetachSubUserPolicy',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/subUser/{subUser}:detachSubUserPolicy',
            ],
            'input' => [ 'shape' => 'DetachSubUserPolicyRequestShape', ],
            'output' => [ 'shape' => 'DetachSubUserPolicyResponseShape', ],
        ],
        'AttachSubUserPolicy' => [
            'name' => 'AttachSubUserPolicy',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/subUser/{subUser}:attachSubUserPolicy',
            ],
            'input' => [ 'shape' => 'AttachSubUserPolicyRequestShape', ],
            'output' => [ 'shape' => 'AttachSubUserPolicyResponseShape', ],
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
    ],
];
