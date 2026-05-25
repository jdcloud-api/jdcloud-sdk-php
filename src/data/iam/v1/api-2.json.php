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
        'DescribeAttachedGroupPoliciesScope' => [
            'name' => 'DescribeAttachedGroupPoliciesScope',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/group/{groupName}/policiesScope',
            ],
            'input' => [ 'shape' => 'DescribeAttachedGroupPoliciesScopeRequestShape', ],
            'output' => [ 'shape' => 'DescribeAttachedGroupPoliciesScopeResponseShape', ],
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
        'CreateVirtualMFADevice' => [
            'name' => 'CreateVirtualMFADevice',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/virtualMFADevice',
            ],
            'input' => [ 'shape' => 'CreateVirtualMFADeviceRequestShape', ],
            'output' => [ 'shape' => 'CreateVirtualMFADeviceResponseShape', ],
        ],
        'DescribeVirtualMFA' => [
            'name' => 'DescribeVirtualMFA',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/virtualMFA',
            ],
            'input' => [ 'shape' => 'DescribeVirtualMFARequestShape', ],
            'output' => [ 'shape' => 'DescribeVirtualMFAResponseShape', ],
        ],
        'BindMFADevice' => [
            'name' => 'BindMFADevice',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/virtualMFADevice:bind',
            ],
            'input' => [ 'shape' => 'BindMFADeviceRequestShape', ],
            'output' => [ 'shape' => 'BindMFADeviceResponseShape', ],
        ],
        'BindMFADeviceByOneCode' => [
            'name' => 'BindMFADeviceByOneCode',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/virtualMFADevice:bindByOneCode',
            ],
            'input' => [ 'shape' => 'BindMFADeviceByOneCodeRequestShape', ],
            'output' => [ 'shape' => 'BindMFADeviceByOneCodeResponseShape', ],
        ],
        'UnbindMFADevice' => [
            'name' => 'UnbindMFADevice',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/virtualMFADevice:unbind',
            ],
            'input' => [ 'shape' => 'UnbindMFADeviceRequestShape', ],
            'output' => [ 'shape' => 'UnbindMFADeviceResponseShape', ],
        ],
        'AddOrganizationUserRelation' => [
            'name' => 'AddOrganizationUserRelation',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/organization/{orgId}/userRelation:add',
            ],
            'input' => [ 'shape' => 'AddOrganizationUserRelationRequestShape', ],
            'output' => [ 'shape' => 'AddOrganizationUserRelationResponseShape', ],
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
        'CopyRole' => [
            'name' => 'CopyRole',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/copyRole',
            ],
            'input' => [ 'shape' => 'CopyRoleRequestShape', ],
            'output' => [ 'shape' => 'CopyRoleResponseShape', ],
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
        'DescribeRolePoliciesScope' => [
            'name' => 'DescribeRolePoliciesScope',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/role/{roleName}/policiesScope',
            ],
            'input' => [ 'shape' => 'DescribeRolePoliciesScopeRequestShape', ],
            'output' => [ 'shape' => 'DescribeRolePoliciesScopeResponseShape', ],
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
        'DescribeAttachedSubUserPoliciesScope' => [
            'name' => 'DescribeAttachedSubUserPoliciesScope',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/subUser/{subUser}/policiesScope',
            ],
            'input' => [ 'shape' => 'DescribeAttachedSubUserPoliciesScopeRequestShape', ],
            'output' => [ 'shape' => 'DescribeAttachedSubUserPoliciesScopeResponseShape', ],
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
        'CreateSubUserInner' => [
            'name' => 'CreateSubUserInner',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/subUserInner',
            ],
            'input' => [ 'shape' => 'CreateSubUserInnerRequestShape', ],
            'output' => [ 'shape' => 'CreateSubUserInnerResponseShape', ],
        ],
        'QueryDeletedSubUsers' => [
            'name' => 'QueryDeletedSubUsers',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/subUsers:deleted',
            ],
            'input' => [ 'shape' => 'QueryDeletedSubUsersRequestShape', ],
            'output' => [ 'shape' => 'QueryDeletedSubUsersResponseShape', ],
        ],
        'RestoreSubUser' => [
            'name' => 'RestoreSubUser',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/subUser:restore',
            ],
            'input' => [ 'shape' => 'RestoreSubUserRequestShape', ],
            'output' => [ 'shape' => 'RestoreSubUserResponseShape', ],
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
        'DescribeUserPin' => [
            'name' => 'DescribeUserPin',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/user:describeUserPin',
            ],
            'input' => [ 'shape' => 'DescribeUserPinRequestShape', ],
            'output' => [ 'shape' => 'DescribeUserPinResponseShape', ],
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
        'AccessKeyRecentStatus' => [
            'type' => 'structure',
            'members' => [
                'hasAccessInSevenDays' => [ 'type' => 'boolean', 'locationName' => 'hasAccessInSevenDays', ],
                'lastAccessTime' => [ 'type' => 'string', 'locationName' => 'lastAccessTime', ],
                'latestAccessAk' => [ 'type' => 'string', 'locationName' => 'latestAccessAk', ],
            ],
        ],
        'AccessKeyRemarkInfo' => [
            'type' => 'structure',
            'members' => [
                'remark' => [ 'type' => 'string', 'locationName' => 'remark', ],
            ],
        ],
        'ActionConditionVo' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'integer', 'locationName' => 'id', ],
                'serviceName' => [ 'type' => 'string', 'locationName' => 'serviceName', ],
                'action' => [ 'type' => 'string', 'locationName' => 'action', ],
                'conditionName' => [ 'type' => 'string', 'locationName' => 'conditionName', ],
                'postProcess' => [ 'type' => 'integer', 'locationName' => 'postProcess', ],
                'type' => [ 'type' => 'integer', 'locationName' => 'type', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'updateTime' => [ 'type' => 'string', 'locationName' => 'updateTime', ],
            ],
        ],
        'AddActionCondition' => [
            'type' => 'structure',
            'members' => [
                'serviceName' => [ 'type' => 'string', 'locationName' => 'serviceName', ],
                'actions' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'conditionNames' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'postProcess' => [ 'type' => 'integer', 'locationName' => 'postProcess', ],
            ],
        ],
        'AddApiInfos' => [
            'type' => 'structure',
            'members' => [
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'success' => [ 'type' => 'boolean', 'locationName' => 'success', ],
            ],
        ],
        'ApiInfoShowRule' => [
            'type' => 'structure',
            'members' => [
                'showCreateByPolicy' => [ 'type' => 'boolean', 'locationName' => 'showCreateByPolicy', ],
                'showCreateByTag' => [ 'type' => 'boolean', 'locationName' => 'showCreateByTag', ],
                'showCreateByBusiness' => [ 'type' => 'boolean', 'locationName' => 'showCreateByBusiness', ],
            ],
        ],
        'ApiInfoVo' => [
            'type' => 'structure',
            'members' => [
                'serviceNameCN' => [ 'type' => 'string', 'locationName' => 'serviceNameCN', ],
                'serviceName' => [ 'type' => 'string', 'locationName' => 'serviceName', ],
                'serviceOldCode' => [ 'type' => 'string', 'locationName' => 'serviceOldCode', ],
                'resourceType' => [ 'type' => 'string', 'locationName' => 'resourceType', ],
                'subResourceType' => [ 'type' => 'string', 'locationName' => 'subResourceType', ],
                'actionName' => [ 'type' => 'string', 'locationName' => 'actionName', ],
                'actionDescription' => [ 'type' => 'string', 'locationName' => 'actionDescription', ],
                'actionType' => [ 'type' => 'string', 'locationName' => 'actionType', ],
                'method' => [ 'type' => 'string', 'locationName' => 'method', ],
                'region' => [ 'type' => 'integer', 'locationName' => 'region', ],
                'version' => [ 'type' => 'integer', 'locationName' => 'version', ],
                'accessLevel' => [ 'type' => 'integer', 'locationName' => 'accessLevel', ],
                'showRule' => [ 'type' => 'list', 'member' => [ 'shape' => 'ApiInfoShowRule', ], ],
                'supply' => [ 'type' => 'integer', 'locationName' => 'supply', ],
                'ignoreDeny' => [ 'type' => 'integer', 'locationName' => 'ignoreDeny', ],
                'tagResourceLevel' => [ 'type' => 'integer', 'locationName' => 'tagResourceLevel', ],
            ],
        ],
        'AddCondition' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'operator' => [ 'type' => 'string', 'locationName' => 'operator', ],
                'qualifier' => [ 'type' => 'integer', 'locationName' => 'qualifier', ],
                'exists' => [ 'type' => 'integer', 'locationName' => 'exists', ],
                'type' => [ 'type' => 'integer', 'locationName' => 'type', ],
            ],
        ],
        'AddPermissionsInfo' => [
            'type' => 'structure',
            'members' => [
                'permissionIds' => [ 'type' => 'list', 'member' => [ 'type' => 'integer', ], ],
            ],
        ],
        'AddPolicyCollection' => [
            'type' => 'structure',
            'members' => [
                'policyCollection' => [ 'type' => 'list', 'member' => [ 'shape' => 'PolicyCollection', ], ],
            ],
        ],
        'PolicyCollection' => [
            'type' => 'structure',
            'members' => [
                'serviceName' => [ 'type' => 'string', 'locationName' => 'serviceName', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'content' => [ 'type' => 'string', 'locationName' => 'content', ],
            ],
        ],
        'AddSysPermission' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'integer', 'locationName' => 'id', ],
                'success' => [ 'type' => 'boolean', 'locationName' => 'success', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
            ],
        ],
        'AttachSystemAccessKeyPolicy' => [
            'type' => 'structure',
            'members' => [
                'systemAccessKey' => [ 'type' => 'string', 'locationName' => 'systemAccessKey', ],
                'policyName' => [ 'type' => 'string', 'locationName' => 'policyName', ],
            ],
        ],
        'AttachedPolicyInfo' => [
            'type' => 'structure',
            'members' => [
                'policyId' => [ 'type' => 'string', 'locationName' => 'policyId', ],
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
                'zoneType' => [ 'type' => 'string', 'locationName' => 'zoneType', ],
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
        'BaseResponseVo' => [
            'type' => 'structure',
            'members' => [
                'isSuccess' => [ 'type' => 'boolean', 'locationName' => 'isSuccess', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'errorCode' => [ 'type' => 'integer', 'locationName' => 'errorCode', ],
                'data' => [ 'type' => 'integer', 'locationName' => 'data', ],
                'errStrSet' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'PageInfo' => [
            'type' => 'structure',
            'members' => [
                'currentPage' => [ 'type' => 'integer', 'locationName' => 'currentPage', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'totalRecord' => [ 'type' => 'integer', 'locationName' => 'totalRecord', ],
                'totalPage' => [ 'type' => 'integer', 'locationName' => 'totalPage', ],
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
        'CheckApiInfo' => [
            'type' => 'structure',
            'members' => [
                'serviceCode' => [ 'type' => 'string', 'locationName' => 'serviceCode', ],
                'actionName' => [ 'type' => 'string', 'locationName' => 'actionName', ],
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
        'CopyRoleInfo' => [
            'type' => 'structure',
            'members' => [
                'oldRoleName' => [ 'type' => 'string', 'locationName' => 'oldRoleName', ],
                'newRoleName' => [ 'type' => 'string', 'locationName' => 'newRoleName', ],
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
        'CreateIdentityProviderInfo' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'protocolType' => [ 'type' => 'string', 'locationName' => 'protocolType', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'metadata' => [ 'type' => 'string', 'locationName' => 'metadata', ],
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
                'rotateStrategy' => [ 'type' => 'string', 'locationName' => 'rotateStrategy', ],
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
                'roleName' => [ 'type' => 'string', 'locationName' => 'roleName', ],
                'type' => [ 'type' => 'integer', 'locationName' => 'type', ],
                'assumeRolePolicyDocument' => [ 'type' => 'string', 'locationName' => 'assumeRolePolicyDocument', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'maxSessionDuration' => [ 'type' => 'integer', 'locationName' => 'maxSessionDuration', ],
            ],
        ],
        'CreateSensitiveAction' => [
            'type' => 'structure',
            'members' => [
                'serviceName' => [ 'type' => 'string', 'locationName' => 'serviceName', ],
                'action' => [ 'type' => 'string', 'locationName' => 'action', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
            ],
        ],
        'CreateServiceInfo' => [
            'type' => 'structure',
            'members' => [
                'serviceInfoVo' =>  [ 'shape' => 'ServiceInfoVo', ],
            ],
        ],
        'ServiceInfoVo' => [
            'type' => 'structure',
            'members' => [
                'serviceCode' => [ 'type' => 'string', 'locationName' => 'serviceCode', ],
                'cnName' => [ 'type' => 'string', 'locationName' => 'cnName', ],
                'enName' => [ 'type' => 'string', 'locationName' => 'enName', ],
                'region' => [ 'type' => 'string', 'locationName' => 'region', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'createUser' => [ 'type' => 'string', 'locationName' => 'createUser', ],
                'updateTime' => [ 'type' => 'string', 'locationName' => 'updateTime', ],
                'updateUser' => [ 'type' => 'string', 'locationName' => 'updateUser', ],
            ],
        ],
        'ReateServiceLinkedRoleTemplate' => [
            'type' => 'structure',
            'members' => [
                'path' => [ 'type' => 'string', 'locationName' => 'path', ],
                'roleName' => [ 'type' => 'string', 'locationName' => 'roleName', ],
                'assumeRolePolicyDocument' => [ 'type' => 'string', 'locationName' => 'assumeRolePolicyDocument', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'maxSessionDuration' => [ 'type' => 'integer', 'locationName' => 'maxSessionDuration', ],
                'invisible' => [ 'type' => 'boolean', 'locationName' => 'invisible', ],
            ],
        ],
        'CreateSubUserWithOrgInfo' => [
            'type' => 'structure',
            'members' => [
                'orgId' => [ 'type' => 'string', 'locationName' => 'orgId', ],
                'orgUserId' => [ 'type' => 'string', 'locationName' => 'orgUserId', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'createAk' => [ 'type' => 'boolean', 'locationName' => 'createAk', ],
                'consoleLogin' => [ 'type' => 'boolean', 'locationName' => 'consoleLogin', ],
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
                'nickName' => [ 'type' => 'string', 'locationName' => 'nickName', ],
                'createAk' => [ 'type' => 'boolean', 'locationName' => 'createAk', ],
                'needResetPassword' => [ 'type' => 'boolean', 'locationName' => 'needResetPassword', ],
                'consoleLogin' => [ 'type' => 'boolean', 'locationName' => 'consoleLogin', ],
                'autoGeneratePassword' => [ 'type' => 'boolean', 'locationName' => 'autoGeneratePassword', ],
                'contactTag' => [ 'type' => 'boolean', 'locationName' => 'contactTag', ],
            ],
        ],
        'CreateSubUserInfoInner' => [
            'type' => 'structure',
            'members' => [
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'password' => [ 'type' => 'string', 'locationName' => 'password', ],
                'phone' => [ 'type' => 'string', 'locationName' => 'phone', ],
                'email' => [ 'type' => 'string', 'locationName' => 'email', ],
                'nickName' => [ 'type' => 'string', 'locationName' => 'nickName', ],
                'createAk' => [ 'type' => 'boolean', 'locationName' => 'createAk', ],
                'needResetPassword' => [ 'type' => 'boolean', 'locationName' => 'needResetPassword', ],
                'consoleLogin' => [ 'type' => 'boolean', 'locationName' => 'consoleLogin', ],
                'autoGeneratePassword' => [ 'type' => 'boolean', 'locationName' => 'autoGeneratePassword', ],
                'account' => [ 'type' => 'string', 'locationName' => 'account', ],
                'subUser' => [ 'type' => 'string', 'locationName' => 'subUser', ],
                'createType' => [ 'type' => 'integer', 'locationName' => 'createType', ],
            ],
        ],
        'CreateSubUserRes' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'password' => [ 'type' => 'string', 'locationName' => 'password', ],
                'email' => [ 'type' => 'string', 'locationName' => 'email', ],
                'phone' => [ 'type' => 'string', 'locationName' => 'phone', ],
                'accessKey' => [ 'type' => 'string', 'locationName' => 'accessKey', ],
                'secretAccessKey' => [ 'type' => 'string', 'locationName' => 'secretAccessKey', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'updateTime' => [ 'type' => 'string', 'locationName' => 'updateTime', ],
                'nickName' => [ 'type' => 'string', 'locationName' => 'nickName', ],
                'pin' => [ 'type' => 'string', 'locationName' => 'pin', ],
            ],
        ],
        'DeleteActionCondition' => [
            'type' => 'structure',
            'members' => [
                'ids' => [ 'type' => 'list', 'member' => [ 'type' => 'integer', ], ],
            ],
        ],
        'DeleteCondition' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'integer', 'locationName' => 'id', ],
            ],
        ],
        'DeletePolicyCollection' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'integer', 'locationName' => 'id', ],
            ],
        ],
        'DescribeByPinsInfo' => [
            'type' => 'structure',
            'members' => [
                'pin' => [ 'type' => 'string', 'locationName' => 'pin', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'phone' => [ 'type' => 'string', 'locationName' => 'phone', ],
                'email' => [ 'type' => 'string', 'locationName' => 'email', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'account' => [ 'type' => 'string', 'locationName' => 'account', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'updateTime' => [ 'type' => 'string', 'locationName' => 'updateTime', ],
                'nickName' => [ 'type' => 'string', 'locationName' => 'nickName', ],
                'createType' => [ 'type' => 'string', 'locationName' => 'createType', ],
                'orgId' => [ 'type' => 'string', 'locationName' => 'orgId', ],
                'orgName' => [ 'type' => 'string', 'locationName' => 'orgName', ],
                'orgPath' => [ 'type' => 'string', 'locationName' => 'orgPath', ],
            ],
        ],
        'DetachSystemAccessKeyPolicy' => [
            'type' => 'structure',
            'members' => [
                'systemAccessKey' => [ 'type' => 'string', 'locationName' => 'systemAccessKey', ],
                'policyName' => [ 'type' => 'string', 'locationName' => 'policyName', ],
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
        'EntityObjectLimits' => [
            'type' => 'structure',
            'members' => [
                'userCountLimit' => [ 'type' => 'integer', 'locationName' => 'userCountLimit', ],
                'policyCountLimit' => [ 'type' => 'integer', 'locationName' => 'policyCountLimit', ],
                'roleCountLimit' => [ 'type' => 'integer', 'locationName' => 'roleCountLimit', ],
                'groupCountLimit' => [ 'type' => 'integer', 'locationName' => 'groupCountLimit', ],
                'userAttachedPolicyCountLimit' => [ 'type' => 'integer', 'locationName' => 'userAttachedPolicyCountLimit', ],
                'groupAttachedPolicyCountLimit' => [ 'type' => 'integer', 'locationName' => 'groupAttachedPolicyCountLimit', ],
                'roleAttachedPolicyCountLimit' => [ 'type' => 'integer', 'locationName' => 'roleAttachedPolicyCountLimit', ],
                'userAttachToGroupCountLimit' => [ 'type' => 'integer', 'locationName' => 'userAttachToGroupCountLimit', ],
                'groupAttachedUserCountLimit' => [ 'type' => 'integer', 'locationName' => 'groupAttachedUserCountLimit', ],
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
        'GroupGenVo' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'long', 'locationName' => 'id', ],
                'groupId' => [ 'type' => 'string', 'locationName' => 'groupId', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'jrn' => [ 'type' => 'string', 'locationName' => 'jrn', ],
                'account' => [ 'type' => 'string', 'locationName' => 'account', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'createBy' => [ 'type' => 'long', 'locationName' => 'createBy', ],
                'updateTime' => [ 'type' => 'string', 'locationName' => 'updateTime', ],
                'updateBy' => [ 'type' => 'long', 'locationName' => 'updateBy', ],
                'status' => [ 'type' => 'integer', 'locationName' => 'status', ],
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
        'IdentityProviderInfo' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'protocolType' => [ 'type' => 'string', 'locationName' => 'protocolType', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'metadata' => [ 'type' => 'string', 'locationName' => 'metadata', ],
                'jrn' => [ 'type' => 'string', 'locationName' => 'jrn', ],
                'forwardIdPUrl' => [ 'type' => 'string', 'locationName' => 'forwardIdPUrl', ],
            ],
        ],
        'CrossTenantInviteConfigRes' => [
            'type' => 'structure',
            'members' => [
                'loginType' => [ 'type' => 'string', 'locationName' => 'loginType', ],
                'accoutId' => [ 'type' => 'string', 'locationName' => 'accoutId', ],
                'accountPin' => [ 'type' => 'string', 'locationName' => 'accountPin', ],
                'accountName' => [ 'type' => 'string', 'locationName' => 'accountName', ],
                'permissionDetails' => [ 'type' => 'list', 'member' => [ 'shape' => 'ConfigDetailsPermissionDetail', ], ],
            ],
        ],
        'CreateInviteShortUrlReq' => [
            'type' => 'structure',
            'members' => [
                'realUrl' => [ 'type' => 'string', 'locationName' => 'realUrl', ],
            ],
        ],
        'ConfigDetailsPermissionDetail' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
            ],
        ],
        'UpdateInviteConfigStatusReq' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
                'inviteConfigStatus' => [ 'type' => 'string', 'locationName' => 'inviteConfigStatus', ],
            ],
        ],
        'CreateInviteShortUrlRes' => [
            'type' => 'structure',
            'members' => [
                'shortUrl' => [ 'type' => 'string', 'locationName' => 'shortUrl', ],
                'inviteCode' => [ 'type' => 'string', 'locationName' => 'inviteCode', ],
                'loginType' => [ 'type' => 'string', 'locationName' => 'loginType', ],
            ],
        ],
        'InviteConfig' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
                'inviteCode' => [ 'type' => 'string', 'locationName' => 'inviteCode', ],
                'shortUrl' => [ 'type' => 'string', 'locationName' => 'shortUrl', ],
                'realUrl' => [ 'type' => 'string', 'locationName' => 'realUrl', ],
                'userLimit' => [ 'type' => 'integer', 'locationName' => 'userLimit', ],
                'inviteDuration' => [ 'type' => 'integer', 'locationName' => 'inviteDuration', ],
                'loginType' => [ 'type' => 'string', 'locationName' => 'loginType', ],
                'expireAt' => [ 'type' => 'string', 'locationName' => 'expireAt', ],
                'inviteConfigStatus' => [ 'type' => 'string', 'locationName' => 'inviteConfigStatus', ],
                'deleted' => [ 'type' => 'integer', 'locationName' => 'deleted', ],
                'accountPin' => [ 'type' => 'string', 'locationName' => 'accountPin', ],
                'createUser' => [ 'type' => 'string', 'locationName' => 'createUser', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'updateUser' => [ 'type' => 'string', 'locationName' => 'updateUser', ],
                'updateTime' => [ 'type' => 'string', 'locationName' => 'updateTime', ],
                'createDisplayName' => [ 'type' => 'string', 'locationName' => 'createDisplayName', ],
                'configDetails' =>  [ 'shape' => 'ConfigDetails', ],
            ],
        ],
        'InviteConfigExt' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
                'inviteCode' => [ 'type' => 'string', 'locationName' => 'inviteCode', ],
                'shortUrl' => [ 'type' => 'string', 'locationName' => 'shortUrl', ],
                'realUrl' => [ 'type' => 'string', 'locationName' => 'realUrl', ],
                'userLimit' => [ 'type' => 'integer', 'locationName' => 'userLimit', ],
                'inviteDuration' => [ 'type' => 'integer', 'locationName' => 'inviteDuration', ],
                'loginType' => [ 'type' => 'string', 'locationName' => 'loginType', ],
                'expireAt' => [ 'type' => 'string', 'locationName' => 'expireAt', ],
                'inviteConfigStatus' => [ 'type' => 'string', 'locationName' => 'inviteConfigStatus', ],
                'deleted' => [ 'type' => 'integer', 'locationName' => 'deleted', ],
                'accountPin' => [ 'type' => 'string', 'locationName' => 'accountPin', ],
                'createUser' => [ 'type' => 'string', 'locationName' => 'createUser', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'updateUser' => [ 'type' => 'string', 'locationName' => 'updateUser', ],
                'updateTime' => [ 'type' => 'string', 'locationName' => 'updateTime', ],
                'createDisplayName' => [ 'type' => 'string', 'locationName' => 'createDisplayName', ],
                'configDetails' =>  [ 'shape' => 'ConfigDetails', ],
                'approvedCount' => [ 'type' => 'integer', 'locationName' => 'approvedCount', ],
            ],
        ],
        'ConfigDetails' => [
            'type' => 'structure',
            'members' => [
                'accessTypes' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'permissionDetails' => [ 'type' => 'list', 'member' => [ 'shape' => 'ConfigDetailsPermissionDetail', ], ],
            ],
        ],
        'ApplyJoinSubUserReq' => [
            'type' => 'structure',
            'members' => [
                'subUserName' => [ 'type' => 'string', 'locationName' => 'subUserName', ],
                'subUserNickname' => [ 'type' => 'string', 'locationName' => 'subUserNickname', ],
                'subUserPhone' => [ 'type' => 'string', 'locationName' => 'subUserPhone', ],
                'nickname' => [ 'type' => 'string', 'locationName' => 'nickname', ],
                'loginType' => [ 'type' => 'string', 'locationName' => 'loginType', ],
                'loginId' => [ 'type' => 'string', 'locationName' => 'loginId', ],
                'inviteCode' => [ 'type' => 'string', 'locationName' => 'inviteCode', ],
            ],
        ],
        'UpdateInviteRequestStatusRes' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'nickName' => [ 'type' => 'string', 'locationName' => 'nickName', ],
                'password' => [ 'type' => 'string', 'locationName' => 'password', ],
                'accessKey' => [ 'type' => 'string', 'locationName' => 'accessKey', ],
                'secretAccessKey' => [ 'type' => 'string', 'locationName' => 'secretAccessKey', ],
                'phone' => [ 'type' => 'string', 'locationName' => 'phone', ],
                'email' => [ 'type' => 'string', 'locationName' => 'email', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'updateTime' => [ 'type' => 'string', 'locationName' => 'updateTime', ],
            ],
        ],
        'IpRule' => [
            'type' => 'structure',
            'members' => [
                'type' => [ 'type' => 'string', 'locationName' => 'type', ],
                'whitelist' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'blacklist' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'LinkedLoginBinding' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'long', 'locationName' => 'id', ],
                'loginType' => [ 'type' => 'string', 'locationName' => 'loginType', ],
                'loginId' => [ 'type' => 'string', 'locationName' => 'loginId', ],
                'accountPin' => [ 'type' => 'string', 'locationName' => 'accountPin', ],
                'subUserPin' => [ 'type' => 'string', 'locationName' => 'subUserPin', ],
                'subUserName' => [ 'type' => 'string', 'locationName' => 'subUserName', ],
                'nickname' => [ 'type' => 'string', 'locationName' => 'nickname', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'updateTime' => [ 'type' => 'string', 'locationName' => 'updateTime', ],
            ],
        ],
        'LinkedLoginBindingVo' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'long', 'locationName' => 'id', ],
                'loginType' => [ 'type' => 'string', 'locationName' => 'loginType', ],
                'loginId' => [ 'type' => 'string', 'locationName' => 'loginId', ],
                'accountPin' => [ 'type' => 'string', 'locationName' => 'accountPin', ],
                'subUserPin' => [ 'type' => 'string', 'locationName' => 'subUserPin', ],
                'subUserName' => [ 'type' => 'string', 'locationName' => 'subUserName', ],
                'nickname' => [ 'type' => 'string', 'locationName' => 'nickname', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'updateTime' => [ 'type' => 'string', 'locationName' => 'updateTime', ],
                'subUserNickname' => [ 'type' => 'string', 'locationName' => 'subUserNickname', ],
            ],
        ],
        'PageResultExt' => [
            'type' => 'structure',
            'members' => [
                'paged' => [ 'type' => 'boolean', 'locationName' => 'paged', ],
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'total' => [ 'type' => 'long', 'locationName' => 'total', ],
                'list' => [ 'type' => 'list', 'member' => [ 'shape' => 'LinkedLoginBindingVo', ], ],
            ],
        ],
        'LinkedLoginConfig' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'long', 'locationName' => 'id', ],
                'wxDisabled' => [ 'type' => 'boolean', 'locationName' => 'wxDisabled', ],
                'jdDisabled' => [ 'type' => 'boolean', 'locationName' => 'jdDisabled', ],
                'accountPin' => [ 'type' => 'string', 'locationName' => 'accountPin', ],
                'createUser' => [ 'type' => 'string', 'locationName' => 'createUser', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'updateUser' => [ 'type' => 'string', 'locationName' => 'updateUser', ],
                'updateTime' => [ 'type' => 'string', 'locationName' => 'updateTime', ],
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
        'LoginSetting' => [
            'type' => 'structure',
            'members' => [
                'accountPin' => [ 'type' => 'string', 'locationName' => 'accountPin', ],
                'loginExpireSeconds' => [ 'type' => 'integer', 'locationName' => 'loginExpireSeconds', ],
                'maxConcurrentDevices' => [ 'type' => 'integer', 'locationName' => 'maxConcurrentDevices', ],
                'allowedStartDate' => [ 'type' => 'string', 'locationName' => 'allowedStartDate', ],
                'allowedEndDate' => [ 'type' => 'string', 'locationName' => 'allowedEndDate', ],
                'allowedStartTime' => [ 'type' => 'string', 'locationName' => 'allowedStartTime', ],
                'allowedEndTime' => [ 'type' => 'string', 'locationName' => 'allowedEndTime', ],
                'ipRule' =>  [ 'shape' => 'IpRule', ],
            ],
        ],
        'MFAInfo' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'secret' => [ 'type' => 'string', 'locationName' => 'secret', ],
            ],
        ],
        'MfaConfig' => [
            'type' => 'structure',
            'members' => [
                'accountPin' => [ 'type' => 'string', 'locationName' => 'accountPin', ],
                'mfaDevice' => [ 'type' => 'string', 'locationName' => 'mfaDevice', ],
                'loginMfaRequirementMode' => [ 'type' => 'string', 'locationName' => 'loginMfaRequirementMode', ],
                'operationProtectionMode' => [ 'type' => 'string', 'locationName' => 'operationProtectionMode', ],
            ],
        ],
        'MfaConfigReq' => [
            'type' => 'structure',
            'members' => [
                'mfaDevice' => [ 'type' => 'string', 'locationName' => 'mfaDevice', ],
                'loginMfaRequirementMode' => [ 'type' => 'string', 'locationName' => 'loginMfaRequirementMode', ],
                'operationProtectionMode' => [ 'type' => 'string', 'locationName' => 'operationProtectionMode', ],
            ],
        ],
        'OpenApiVo' => [
            'type' => 'structure',
            'members' => [
                'serviceName' => [ 'type' => 'string', 'locationName' => 'serviceName', ],
                'version' => [ 'type' => 'string', 'locationName' => 'version', ],
                'hasRegion' => [ 'type' => 'boolean', 'locationName' => 'hasRegion', ],
                'path' => [ 'type' => 'string', 'locationName' => 'path', ],
                'actionName' => [ 'type' => 'string', 'locationName' => 'actionName', ],
                'actionDescription' => [ 'type' => 'string', 'locationName' => 'actionDescription', ],
                'actionType' => [ 'type' => 'string', 'locationName' => 'actionType', ],
                'resourceLevel' => [ 'type' => 'integer', 'locationName' => 'resourceLevel', ],
                'method' => [ 'type' => 'string', 'locationName' => 'method', ],
                'imported' => [ 'type' => 'boolean', 'locationName' => 'imported', ],
            ],
        ],
        'RemoveOrganizationUserRelationInfo' => [
            'type' => 'structure',
            'members' => [
                'subUserName' => [ 'type' => 'string', 'locationName' => 'subUserName', ],
                'userId' => [ 'type' => 'string', 'locationName' => 'userId', ],
            ],
        ],
        'OrganizationUserRelation' => [
            'type' => 'structure',
            'members' => [
                'orgId' => [ 'type' => 'string', 'locationName' => 'orgId', ],
                'userId' => [ 'type' => 'string', 'locationName' => 'userId', ],
                'subUserName' => [ 'type' => 'string', 'locationName' => 'subUserName', ],
                'departmentPathName' => [ 'type' => 'string', 'locationName' => 'departmentPathName', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
            ],
        ],
        'OrganizationUser' => [
            'type' => 'structure',
            'members' => [
                'orgId' => [ 'type' => 'string', 'locationName' => 'orgId', ],
                'userId' => [ 'type' => 'string', 'locationName' => 'userId', ],
                'departmentPathName' => [ 'type' => 'string', 'locationName' => 'departmentPathName', ],
                'phone' => [ 'type' => 'string', 'locationName' => 'phone', ],
                'email' => [ 'type' => 'string', 'locationName' => 'email', ],
                'validateState' => [ 'type' => 'integer', 'locationName' => 'validateState', ],
            ],
        ],
        'AddOrganizationUserRelationInfo' => [
            'type' => 'structure',
            'members' => [
                'subUserName' => [ 'type' => 'string', 'locationName' => 'subUserName', ],
                'userId' => [ 'type' => 'string', 'locationName' => 'userId', ],
            ],
        ],
        'Organization' => [
            'type' => 'structure',
            'members' => [
                'orgId' => [ 'type' => 'string', 'locationName' => 'orgId', ],
                'loginUrl' => [ 'type' => 'string', 'locationName' => 'loginUrl', ],
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
        'PermissionGenVo' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'long', 'locationName' => 'id', ],
                'type' => [ 'type' => 'integer', 'locationName' => 'type', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'jrn' => [ 'type' => 'string', 'locationName' => 'jrn', ],
                'account' => [ 'type' => 'string', 'locationName' => 'account', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'content' => [ 'type' => 'string', 'locationName' => 'content', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'createBy' => [ 'type' => 'long', 'locationName' => 'createBy', ],
                'updateTime' => [ 'type' => 'string', 'locationName' => 'updateTime', ],
                'updateBy' => [ 'type' => 'long', 'locationName' => 'updateBy', ],
                'status' => [ 'type' => 'integer', 'locationName' => 'status', ],
                'version' => [ 'type' => 'integer', 'locationName' => 'version', ],
                'ext' => [ 'type' => 'string', 'locationName' => 'ext', ],
                'defaultEdition' => [ 'type' => 'integer', 'locationName' => 'defaultEdition', ],
                'serviceCode' => [ 'type' => 'string', 'locationName' => 'serviceCode', ],
                'scope' => [ 'type' => 'int8', 'locationName' => 'scope', ],
                'scopeTypeStr' => [ 'type' => 'string', 'locationName' => 'scopeTypeStr', ],
                'scopeId' => [ 'type' => 'string', 'locationName' => 'scopeId', ],
                'creator' => [ 'type' => 'string', 'locationName' => 'creator', ],
                'updater' => [ 'type' => 'string', 'locationName' => 'updater', ],
                'selected' => [ 'type' => 'boolean', 'locationName' => 'selected', ],
            ],
        ],
        'Policy' => [
            'type' => 'structure',
            'members' => [
                'policyId' => [ 'type' => 'string', 'locationName' => 'policyId', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'jrn' => [ 'type' => 'string', 'locationName' => 'jrn', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'policyType' => [ 'type' => 'integer', 'locationName' => 'policyType', ],
                'version' => [ 'type' => 'string', 'locationName' => 'version', ],
                'currentDefaultEdition' => [ 'type' => 'string', 'locationName' => 'currentDefaultEdition', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'updateTime' => [ 'type' => 'string', 'locationName' => 'updateTime', ],
                'scopeType' => [ 'type' => 'integer', 'locationName' => 'scopeType', ],
            ],
        ],
        'ClonePoliciesInfo' => [
            'type' => 'structure',
            'members' => [
                'sourceSubUser' => [ 'type' => 'string', 'locationName' => 'sourceSubUser', ],
                'targetSubUser' => [ 'type' => 'string', 'locationName' => 'targetSubUser', ],
            ],
        ],
        'PolicyAttachedEntity' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'entityType' => [ 'type' => 'string', 'locationName' => 'entityType', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
            ],
        ],
        'PolicyDetail' => [
            'type' => 'structure',
            'members' => [
                'policyId' => [ 'type' => 'string', 'locationName' => 'policyId', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'jrn' => [ 'type' => 'string', 'locationName' => 'jrn', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'policyType' => [ 'type' => 'integer', 'locationName' => 'policyType', ],
                'version' => [ 'type' => 'string', 'locationName' => 'version', ],
                'currentDefaultEdition' => [ 'type' => 'string', 'locationName' => 'currentDefaultEdition', ],
                'content' => [ 'type' => 'string', 'locationName' => 'content', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'updateTime' => [ 'type' => 'string', 'locationName' => 'updateTime', ],
            ],
        ],
        'PolicyEdition' => [
            'type' => 'structure',
            'members' => [
                'isDefaultEdition' => [ 'type' => 'boolean', 'locationName' => 'isDefaultEdition', ],
                'edition' => [ 'type' => 'string', 'locationName' => 'edition', ],
                'policyDocument' => [ 'type' => 'string', 'locationName' => 'policyDocument', ],
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
        'QueryApiInfoByConditions' => [
            'type' => 'structure',
            'members' => [
                'apiInfos' => [ 'type' => 'list', 'member' => [ 'shape' => 'ApiInfoVo', ], ],
                'totalRecord' => [ 'type' => 'integer', 'locationName' => 'totalRecord', ],
                'success' => [ 'type' => 'boolean', 'locationName' => 'success', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
            ],
        ],
        'QueryApiInfoByConditionsInfo' => [
            'type' => 'structure',
            'members' => [
                'serviceNameCNs' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'serviceNames' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'actionTypes' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'actionDescription' => [ 'type' => 'string', 'locationName' => 'actionDescription', ],
                'actionName' => [ 'type' => 'string', 'locationName' => 'actionName', ],
                'actionNames' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'accessLevels' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'page' => [ 'type' => 'integer', 'locationName' => 'page', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
            ],
        ],
        'RemovePermissionInfo' => [
            'type' => 'structure',
            'members' => [
                'permissionId' => [ 'type' => 'integer', 'locationName' => 'permissionId', ],
            ],
        ],
        'ResourceGroup' => [
            'type' => 'structure',
            'members' => [
                'scopeId' => [ 'type' => 'string', 'locationName' => 'scopeId', ],
                'scopeName' => [ 'type' => 'string', 'locationName' => 'scopeName', ],
            ],
        ],
        'Response' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'simpleInfo' => [ 'type' => 'list', 'member' => [ 'shape' => 'SimpleInfo', ], ],
            ],
        ],
        'SimpleInfo' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'integer', 'locationName' => 'id', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
            ],
        ],
        'ResultMsg' => [
            'type' => 'structure',
            'members' => [
                'errorCode' => [ 'type' => 'string', 'locationName' => 'errorCode', ],
                'errorMsg' => [ 'type' => 'string', 'locationName' => 'errorMsg', ],
            ],
        ],
        'RoleGenVo' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'long', 'locationName' => 'id', ],
                'roleId' => [ 'type' => 'string', 'locationName' => 'roleId', ],
                'roleName' => [ 'type' => 'string', 'locationName' => 'roleName', ],
                'type' => [ 'type' => 'integer', 'locationName' => 'type', ],
                'path' => [ 'type' => 'string', 'locationName' => 'path', ],
                'jrn' => [ 'type' => 'string', 'locationName' => 'jrn', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'updateTime' => [ 'type' => 'string', 'locationName' => 'updateTime', ],
                'serviceCode' => [ 'type' => 'string', 'locationName' => 'serviceCode', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'trustedEntity' => [ 'type' => 'string', 'locationName' => 'trustedEntity', ],
                'assumeRolePolicyDocument' => [ 'type' => 'string', 'locationName' => 'assumeRolePolicyDocument', ],
                'maxSessionDuration' => [ 'type' => 'integer', 'locationName' => 'maxSessionDuration', ],
                'status' => [ 'type' => 'integer', 'locationName' => 'status', ],
                'externalId' => [ 'type' => 'string', 'locationName' => 'externalId', ],
                'account' => [ 'type' => 'string', 'locationName' => 'account', ],
                'consoleLogin' => [ 'type' => 'integer', 'locationName' => 'consoleLogin', ],
                'creator' => [ 'type' => 'string', 'locationName' => 'creator', ],
                'updater' => [ 'type' => 'string', 'locationName' => 'updater', ],
                'scopeTypeStr' => [ 'type' => 'string', 'locationName' => 'scopeTypeStr', ],
                'scopeId' => [ 'type' => 'string', 'locationName' => 'scopeId', ],
                'selected' => [ 'type' => 'boolean', 'locationName' => 'selected', ],
            ],
        ],
        'RoleInfo' => [
            'type' => 'structure',
            'members' => [
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
                'policyId' => [ 'type' => 'string', 'locationName' => 'policyId', ],
                'policyName' => [ 'type' => 'string', 'locationName' => 'policyName', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'type' => [ 'type' => 'integer', 'locationName' => 'type', ],
                'policyJrn' => [ 'type' => 'string', 'locationName' => 'policyJrn', ],
                'scopeType' => [ 'type' => 'integer', 'locationName' => 'scopeType', ],
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
        'SendDetails' => [
            'type' => 'structure',
            'members' => [
                'success' => [ 'type' => 'boolean', 'locationName' => 'success', ],
                'retryAfterSeconds' => [ 'type' => 'integer', 'locationName' => 'retryAfterSeconds', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'verificationSessionId' => [ 'type' => 'string', 'locationName' => 'verificationSessionId', ],
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
        'ServiceInfo' => [
            'type' => 'structure',
            'members' => [
                'serviceCode' => [ 'type' => 'string', 'locationName' => 'serviceCode', ],
                'cnName' => [ 'type' => 'string', 'locationName' => 'cnName', ],
                'enName' => [ 'type' => 'string', 'locationName' => 'enName', ],
                'region' => [ 'type' => 'string', 'locationName' => 'region', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'createUser' => [ 'type' => 'string', 'locationName' => 'createUser', ],
                'canDelete' => [ 'type' => 'boolean', 'locationName' => 'canDelete', ],
            ],
        ],
        'ServiceInfoGenVo' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'long', 'locationName' => 'id', ],
                'serviceCode' => [ 'type' => 'string', 'locationName' => 'serviceCode', ],
                'cnName' => [ 'type' => 'string', 'locationName' => 'cnName', ],
                'enName' => [ 'type' => 'string', 'locationName' => 'enName', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'updateTime' => [ 'type' => 'string', 'locationName' => 'updateTime', ],
                'region' => [ 'type' => 'string', 'locationName' => 'region', ],
                'status' => [ 'type' => 'integer', 'locationName' => 'status', ],
                'createUser' => [ 'type' => 'string', 'locationName' => 'createUser', ],
                'updateUser' => [ 'type' => 'string', 'locationName' => 'updateUser', ],
                'apiCount' => [ 'type' => 'integer', 'locationName' => 'apiCount', ],
                'policyCount' => [ 'type' => 'integer', 'locationName' => 'policyCount', ],
                'systemAkCount' => [ 'type' => 'integer', 'locationName' => 'systemAkCount', ],
                'serviceLinkRoleTemplateCount' => [ 'type' => 'integer', 'locationName' => 'serviceLinkRoleTemplateCount', ],
            ],
        ],
        'SimpleServiceInfoGenVo' => [
            'type' => 'structure',
            'members' => [
                'serviceCode' => [ 'type' => 'string', 'locationName' => 'serviceCode', ],
                'cnName' => [ 'type' => 'string', 'locationName' => 'cnName', ],
            ],
        ],
        'SubUser' => [
            'type' => 'structure',
            'members' => [
                'pin' => [ 'type' => 'string', 'locationName' => 'pin', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'phone' => [ 'type' => 'string', 'locationName' => 'phone', ],
                'email' => [ 'type' => 'string', 'locationName' => 'email', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'account' => [ 'type' => 'string', 'locationName' => 'account', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'updateTime' => [ 'type' => 'string', 'locationName' => 'updateTime', ],
                'nickName' => [ 'type' => 'string', 'locationName' => 'nickName', ],
                'createType' => [ 'type' => 'string', 'locationName' => 'createType', ],
                'orgId' => [ 'type' => 'string', 'locationName' => 'orgId', ],
                'orgName' => [ 'type' => 'string', 'locationName' => 'orgName', ],
                'orgPath' => [ 'type' => 'string', 'locationName' => 'orgPath', ],
            ],
        ],
        'SubUserAccessKey' => [
            'type' => 'structure',
            'members' => [
                'accessKey' => [ 'type' => 'string', 'locationName' => 'accessKey', ],
                'secretAccessKey' => [ 'type' => 'string', 'locationName' => 'secretAccessKey', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'lastVisitTime' => [ 'type' => 'string', 'locationName' => 'lastVisitTime', ],
                'lastVisitEvent' => [ 'type' => 'string', 'locationName' => 'lastVisitEvent', ],
                'status' => [ 'type' => 'integer', 'locationName' => 'status', ],
                'yn' => [ 'type' => 'integer', 'locationName' => 'yn', ],
                'remark' => [ 'type' => 'string', 'locationName' => 'remark', ],
            ],
        ],
        'SubUserAuditRecord' => [
            'type' => 'structure',
            'members' => [
                'lastVisitTime' => [ 'type' => 'string', 'locationName' => 'lastVisitTime', ],
                'lastVisitEvent' => [ 'type' => 'string', 'locationName' => 'lastVisitEvent', ],
            ],
        ],
        'DescribeSubUserListByPinsResInfo' => [
            'type' => 'structure',
            'members' => [
                'subAccountPin' => [ 'type' => 'string', 'locationName' => 'subAccountPin', ],
                'masterAccountPin' => [ 'type' => 'string', 'locationName' => 'masterAccountPin', ],
                'phone' => [ 'type' => 'string', 'locationName' => 'phone', ],
                'email' => [ 'type' => 'string', 'locationName' => 'email', ],
                'nickName' => [ 'type' => 'string', 'locationName' => 'nickName', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
            ],
        ],
        'DescribeSubUserListByPinsReqInfo' => [
            'type' => 'structure',
            'members' => [
                'subAccountPinList' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'DescribePinListByAnyPermIdsReqInfo' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'masterAccountPin' => [ 'type' => 'string', 'locationName' => 'masterAccountPin', ],
                'subAccountPinList' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'permissionIdList' => [ 'type' => 'list', 'member' => [ 'type' => 'integer', ], ],
            ],
        ],
        'SysPermissionMenuVo' => [
            'type' => 'structure',
            'members' => [
                'menuId' => [ 'type' => 'string', 'locationName' => 'menuId', ],
                'autoMountChildMenu' => [ 'type' => 'string', 'locationName' => 'autoMountChildMenu', ],
            ],
        ],
        'SysPermission' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'integer', 'locationName' => 'id', ],
                'policyId' => [ 'type' => 'string', 'locationName' => 'policyId', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'status' => [ 'type' => 'integer', 'locationName' => 'status', ],
                'version' => [ 'type' => 'integer', 'locationName' => 'version', ],
                'content' => [ 'type' => 'string', 'locationName' => 'content', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'createBy' => [ 'type' => 'integer', 'locationName' => 'createBy', ],
                'createByErp' => [ 'type' => 'string', 'locationName' => 'createByErp', ],
                'updateTime' => [ 'type' => 'string', 'locationName' => 'updateTime', ],
                'updateBy' => [ 'type' => 'integer', 'locationName' => 'updateBy', ],
                'updateByErp' => [ 'type' => 'string', 'locationName' => 'updateByErp', ],
                'menuInfo' => [ 'type' => 'list', 'member' => [ 'shape' => 'SysPermissionMenuVo', ], ],
                'erp' => [ 'type' => 'string', 'locationName' => 'erp', ],
            ],
        ],
        'SystemAccessKey' => [
            'type' => 'structure',
            'members' => [
                'akType' => [ 'type' => 'string', 'locationName' => 'akType', ],
                'erp' => [ 'type' => 'string', 'locationName' => 'erp', ],
                'serviceCode' => [ 'type' => 'string', 'locationName' => 'serviceCode', ],
                'policyContent' => [ 'type' => 'string', 'locationName' => 'policyContent', ],
                'systemAccessKey' => [ 'type' => 'string', 'locationName' => 'systemAccessKey', ],
                'attachDefaultPolicy' => [ 'type' => 'boolean', 'locationName' => 'attachDefaultPolicy', ],
            ],
        ],
        'SystemAccessKeyPolicy' => [
            'type' => 'structure',
            'members' => [
                'systemAccessKey' => [ 'type' => 'string', 'locationName' => 'systemAccessKey', ],
                'permissionId' => [ 'type' => 'long', 'locationName' => 'permissionId', ],
            ],
        ],
        'SystemAkGenVo' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'integer', 'locationName' => 'id', ],
                'serviceCode' => [ 'type' => 'string', 'locationName' => 'serviceCode', ],
                'type' => [ 'type' => 'string', 'locationName' => 'type', ],
                'systemCode' => [ 'type' => 'string', 'locationName' => 'systemCode', ],
                'accessKey' => [ 'type' => 'string', 'locationName' => 'accessKey', ],
                'createUser' => [ 'type' => 'string', 'locationName' => 'createUser', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'updateUser' => [ 'type' => 'string', 'locationName' => 'updateUser', ],
                'updateTime' => [ 'type' => 'string', 'locationName' => 'updateTime', ],
                'version' => [ 'type' => 'integer', 'locationName' => 'version', ],
                'source' => [ 'type' => 'string', 'locationName' => 'source', ],
                'selected' => [ 'type' => 'boolean', 'locationName' => 'selected', ],
                'statusCode' => [ 'type' => 'string', 'locationName' => 'statusCode', ],
                'deleteFlag' => [ 'type' => 'string', 'locationName' => 'deleteFlag', ],
                'trustRelationship' => [ 'type' => 'string', 'locationName' => 'trustRelationship', ],
            ],
        ],
        'TPaasUser' => [
            'type' => 'structure',
            'members' => [
                'pin' => [ 'type' => 'string', 'locationName' => 'pin', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'phone' => [ 'type' => 'string', 'locationName' => 'phone', ],
                'email' => [ 'type' => 'string', 'locationName' => 'email', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'account' => [ 'type' => 'integer', 'locationName' => 'account', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'updateTime' => [ 'type' => 'string', 'locationName' => 'updateTime', ],
                'nickName' => [ 'type' => 'string', 'locationName' => 'nickName', ],
            ],
        ],
        'UpdateActionCondition' => [
            'type' => 'structure',
            'members' => [
                'actionCondition' => [ 'type' => 'list', 'member' => [ 'shape' => 'ActionConditionVo', ], ],
            ],
        ],
        'UpdateApiInfo' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'integer', 'locationName' => 'id', ],
                'serviceName' => [ 'type' => 'string', 'locationName' => 'serviceName', ],
                'serviceNameCN' => [ 'type' => 'string', 'locationName' => 'serviceNameCN', ],
                'serviceOldCode' => [ 'type' => 'string', 'locationName' => 'serviceOldCode', ],
                'resourceType' => [ 'type' => 'string', 'locationName' => 'resourceType', ],
                'actionName' => [ 'type' => 'string', 'locationName' => 'actionName', ],
                'actionType' => [ 'type' => 'string', 'locationName' => 'actionType', ],
                'actionDescription' => [ 'type' => 'string', 'locationName' => 'actionDescription', ],
                'region' => [ 'type' => 'integer', 'locationName' => 'region', ],
                'method' => [ 'type' => 'string', 'locationName' => 'method', ],
                'accessLevel' => [ 'type' => 'integer', 'locationName' => 'accessLevel', ],
                'version' => [ 'type' => 'integer', 'locationName' => 'version', ],
                'status' => [ 'type' => 'integer', 'locationName' => 'status', ],
                'showRule' => [ 'type' => 'list', 'member' => [ 'shape' => 'ApiInfoShowRule', ], ],
                'supply' => [ 'type' => 'integer', 'locationName' => 'supply', ],
                'ignoreDeny' => [ 'type' => 'integer', 'locationName' => 'ignoreDeny', ],
                'tagResourceLevel' => [ 'type' => 'integer', 'locationName' => 'tagResourceLevel', ],
                'showType' => [ 'type' => 'integer', 'locationName' => 'showType', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'createUser' => [ 'type' => 'string', 'locationName' => 'createUser', ],
                'updateTime' => [ 'type' => 'string', 'locationName' => 'updateTime', ],
                'updateUser' => [ 'type' => 'string', 'locationName' => 'updateUser', ],
            ],
        ],
        'UpdateAssumeRolePolicyInfo' => [
            'type' => 'structure',
            'members' => [
                'assumeRolePolicyDocument' => [ 'type' => 'string', 'locationName' => 'assumeRolePolicyDocument', ],
            ],
        ],
        'UpdateCondition' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'integer', 'locationName' => 'id', ],
                'operator' => [ 'type' => 'string', 'locationName' => 'operator', ],
                'qualifier' => [ 'type' => 'integer', 'locationName' => 'qualifier', ],
                'exists' => [ 'type' => 'integer', 'locationName' => 'exists', ],
                'type' => [ 'type' => 'integer', 'locationName' => 'type', ],
            ],
        ],
        'UpdateEntityObjectLimits' => [
            'type' => 'structure',
            'members' => [
                'entityObjectLimits' => [ 'type' => 'list', 'member' => [ 'shape' => 'EntityObjectLimits', ], ],
            ],
        ],
        'UpdateGroupInfo' => [
            'type' => 'structure',
            'members' => [
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
            ],
        ],
        'UpdateIdentityProviderInfo' => [
            'type' => 'structure',
            'members' => [
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'metadata' => [ 'type' => 'string', 'locationName' => 'metadata', ],
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
        'UpdateSensitiveAction' => [
            'type' => 'structure',
            'members' => [
                'serviceName' => [ 'type' => 'string', 'locationName' => 'serviceName', ],
                'action' => [ 'type' => 'string', 'locationName' => 'action', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
            ],
        ],
        'UpdateServiceLinkedRoleTemplate' => [
            'type' => 'structure',
            'members' => [
                'roleId' => [ 'type' => 'string', 'locationName' => 'roleId', ],
                'roleName' => [ 'type' => 'string', 'locationName' => 'roleName', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'assumeRolePolicyDocument' => [ 'type' => 'string', 'locationName' => 'assumeRolePolicyDocument', ],
                'maxSessionDuration' => [ 'type' => 'integer', 'locationName' => 'maxSessionDuration', ],
            ],
        ],
        'UpdateSubUserInfo' => [
            'type' => 'structure',
            'members' => [
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'phone' => [ 'type' => 'string', 'locationName' => 'phone', ],
                'email' => [ 'type' => 'string', 'locationName' => 'email', ],
                'nickName' => [ 'type' => 'string', 'locationName' => 'nickName', ],
            ],
        ],
        'UserAccessKey' => [
            'type' => 'structure',
            'members' => [
                'accessKey' => [ 'type' => 'string', 'locationName' => 'accessKey', ],
                'accessKeySecret' => [ 'type' => 'string', 'locationName' => 'accessKeySecret', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'modified' => [ 'type' => 'string', 'locationName' => 'modified', ],
                'lastVisitTime' => [ 'type' => 'string', 'locationName' => 'lastVisitTime', ],
                'lastVisitEvent' => [ 'type' => 'string', 'locationName' => 'lastVisitEvent', ],
                'state' => [ 'type' => 'integer', 'locationName' => 'state', ],
                'yn' => [ 'type' => 'integer', 'locationName' => 'yn', ],
                'remark' => [ 'type' => 'string', 'locationName' => 'remark', ],
            ],
        ],
        'UserAccountGenVo' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'long', 'locationName' => 'id', ],
                'pin' => [ 'type' => 'string', 'locationName' => 'pin', ],
                'account' => [ 'type' => 'string', 'locationName' => 'account', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'createBy' => [ 'type' => 'long', 'locationName' => 'createBy', ],
                'updateTime' => [ 'type' => 'string', 'locationName' => 'updateTime', ],
                'updateBy' => [ 'type' => 'long', 'locationName' => 'updateBy', ],
                'status' => [ 'type' => 'integer', 'locationName' => 'status', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'password' => [ 'type' => 'string', 'locationName' => 'password', ],
                'salt' => [ 'type' => 'string', 'locationName' => 'salt', ],
                'phone' => [ 'type' => 'string', 'locationName' => 'phone', ],
                'email' => [ 'type' => 'string', 'locationName' => 'email', ],
                'referId' => [ 'type' => 'string', 'locationName' => 'referId', ],
                'createType' => [ 'type' => 'integer', 'locationName' => 'createType', ],
                'nickName' => [ 'type' => 'string', 'locationName' => 'nickName', ],
                'identification' => [ 'type' => 'string', 'locationName' => 'identification', ],
                'orgPath' => [ 'type' => 'string', 'locationName' => 'orgPath', ],
                'orgPathName' => [ 'type' => 'string', 'locationName' => 'orgPathName', ],
                'orgId' => [ 'type' => 'string', 'locationName' => 'orgId', ],
                'orgName' => [ 'type' => 'string', 'locationName' => 'orgName', ],
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
        'UserAuditRecord' => [
            'type' => 'structure',
            'members' => [
                'lastVisitTime' => [ 'type' => 'string', 'locationName' => 'lastVisitTime', ],
                'lastVisitEvent' => [ 'type' => 'string', 'locationName' => 'lastVisitEvent', ],
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
        'VerifyDetails' => [
            'type' => 'structure',
            'members' => [
                'verified' => [ 'type' => 'boolean', 'locationName' => 'verified', ],
            ],
        ],
        'VirtualMFADevice' => [
            'type' => 'structure',
            'members' => [
                'base64Qr' => [ 'type' => 'string', 'locationName' => 'base64Qr', ],
                'mFAInfos' => [ 'type' => 'list', 'member' => [ 'shape' => 'MFAInfo', ], ],
            ],
        ],
        'DeleteSubUserAccessKeyRequestShape' => [
            'type' => 'structure',
            'members' => [
                'subUser' => [ 'type' => 'string', 'locationName' => 'subUser', ],
                'accessKey' => [ 'type' => 'string', 'locationName' => 'accessKey', ],
            ],
        ],
        'EnableSubUserAccessKeyResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DeleteSubUserAccessKeyResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DisableSubUserAccessKeyResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DisableSubUserAccessKeyRequestShape' => [
            'type' => 'structure',
            'members' => [
                'subUser' => [ 'type' => 'string', 'locationName' => 'subUser', ],
                'accessKey' => [ 'type' => 'string', 'locationName' => 'accessKey', ],
            ],
        ],
        'DeleteSubUserAccessKeyResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DisableSubUserAccessKeyResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'EnableSubUserAccessKeyRequestShape' => [
            'type' => 'structure',
            'members' => [
                'subUser' => [ 'type' => 'string', 'locationName' => 'subUser', ],
                'accessKey' => [ 'type' => 'string', 'locationName' => 'accessKey', ],
            ],
        ],
        'EnableSubUserAccessKeyResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'PageResult' => [
            'type' => 'structure',
            'members' => [
                'paged' => [ 'type' => 'boolean', 'locationName' => 'paged', ],
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'total' => [ 'type' => 'long', 'locationName' => 'total', ],
                'list' => [ 'type' => 'list', 'member' => [ 'shape' => 'PermissionGenVo', ], ],
            ],
        ],
        'DescribeAttachedGroupPoliciesScopeResultShape' => [
            'type' => 'structure',
            'members' => [
                'total' => [ 'type' => 'integer', 'locationName' => 'total', ],
                'policies' => [ 'type' => 'list', 'member' => [ 'shape' => 'ResourceGroup', ], ],
            ],
        ],
        'DetachGroupPolicyResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'RemoveSubUserFromGroupResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DeleteGroupRequestShape' => [
            'type' => 'structure',
            'members' => [
                'groupName' => [ 'type' => 'string', 'locationName' => 'groupName', ],
            ],
        ],
        'DetachGroupPolicyResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'AttachGroupPolicyResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'AttachGroupPolicyResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DeleteGroupResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DescribeGroupSubUsersRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'groupName' => [ 'type' => 'string', 'locationName' => 'groupName', ],
            ],
        ],
        'AttachGroupPolicyRequestShape' => [
            'type' => 'structure',
            'members' => [
                'policyName' => [ 'type' => 'string', 'locationName' => 'policyName', ],
                'scopeId' => [ 'type' => 'string', 'locationName' => 'scopeId', ],
                'allowAddPolicy' => [ 'type' => 'string', 'locationName' => 'allowAddPolicy', ],
                'groupName' => [ 'type' => 'string', 'locationName' => 'groupName', ],
            ],
        ],
        'DeleteGroupResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'RemoveSubUserFromGroupResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DescribeGroupsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeGroupsResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeAttachedGroupPoliciesResultShape' => [
            'type' => 'structure',
            'members' => [
                'total' => [ 'type' => 'integer', 'locationName' => 'total', ],
                'policies' => [ 'type' => 'list', 'member' => [ 'shape' => 'Policy', ], ],
            ],
        ],
        'DescribeGroupSubUsersResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeGroupSubUsersResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'CreateGroupResultShape' => [
            'type' => 'structure',
            'members' => [
                'group' =>  [ 'shape' => 'CreateGroupRes', ],
            ],
        ],
        'CreateGroupResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'CreateGroupResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'UpdateGroupResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'AddSubUserToGroupRequestShape' => [
            'type' => 'structure',
            'members' => [
                'subUser' => [ 'type' => 'string', 'locationName' => 'subUser', ],
                'groupName' => [ 'type' => 'string', 'locationName' => 'groupName', ],
            ],
        ],
        'DescribeGroupsResultShape' => [
            'type' => 'structure',
            'members' => [
                'total' => [ 'type' => 'integer', 'locationName' => 'total', ],
                'groups' => [ 'type' => 'list', 'member' => [ 'shape' => 'Group', ], ],
            ],
        ],
        'AddSubUserToGroupResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeAttachedGroupPoliciesRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'groupName' => [ 'type' => 'string', 'locationName' => 'groupName', ],
            ],
        ],
        'DescribeGroupResultShape' => [
            'type' => 'structure',
            'members' => [
                'group' =>  [ 'shape' => 'GroupDetail', ],
            ],
        ],
        'UpdateGroupRequestShape' => [
            'type' => 'structure',
            'members' => [
                'updateGroupInfo' =>  [ 'shape' => 'UpdateGroupInfo', ],
                'groupName' => [ 'type' => 'string', 'locationName' => 'groupName', ],
            ],
        ],
        'DescribeGroupsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'keyword' => [ 'type' => 'string', 'locationName' => 'keyword', ],
                'sort' => [ 'type' => 'integer', 'locationName' => 'sort', ],
            ],
        ],
        'DescribeAttachedGroupPoliciesScopeRequestShape' => [
            'type' => 'structure',
            'members' => [
                'policyID' => [ 'type' => 'string', 'locationName' => 'policyID', ],
                'filterBindResGroup' => [ 'type' => 'string', 'locationName' => 'filterBindResGroup', ],
                'groupName' => [ 'type' => 'string', 'locationName' => 'groupName', ],
            ],
        ],
        'DescribeGroupRequestShape' => [
            'type' => 'structure',
            'members' => [
                'groupName' => [ 'type' => 'string', 'locationName' => 'groupName', ],
            ],
        ],
        'CreateGroupRequestShape' => [
            'type' => 'structure',
            'members' => [
                'createGroupInfo' =>  [ 'shape' => 'CreateGroupInfo', ],
            ],
        ],
        'DescribeAttachedGroupPoliciesResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeAttachedGroupPoliciesResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DetachGroupPolicyRequestShape' => [
            'type' => 'structure',
            'members' => [
                'policyName' => [ 'type' => 'string', 'locationName' => 'policyName', ],
                'scopeId' => [ 'type' => 'string', 'locationName' => 'scopeId', ],
                'allowDetachAddPolicy' => [ 'type' => 'string', 'locationName' => 'allowDetachAddPolicy', ],
                'groupName' => [ 'type' => 'string', 'locationName' => 'groupName', ],
            ],
        ],
        'RemoveSubUserFromGroupRequestShape' => [
            'type' => 'structure',
            'members' => [
                'subUser' => [ 'type' => 'string', 'locationName' => 'subUser', ],
                'groupName' => [ 'type' => 'string', 'locationName' => 'groupName', ],
            ],
        ],
        'DescribeGroupResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeGroupResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeAttachedGroupPoliciesScopeResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeAttachedGroupPoliciesScopeResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeGroupSubUsersResultShape' => [
            'type' => 'structure',
            'members' => [
                'total' => [ 'type' => 'integer', 'locationName' => 'total', ],
                'subUsers' => [ 'type' => 'list', 'member' => [ 'shape' => 'SubUserInfo', ], ],
            ],
        ],
        'AddSubUserToGroupResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'UpdateGroupResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'InviteRequest' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
                'inviteCode' => [ 'type' => 'string', 'locationName' => 'inviteCode', ],
                'loginType' => [ 'type' => 'string', 'locationName' => 'loginType', ],
                'loginId' => [ 'type' => 'string', 'locationName' => 'loginId', ],
                'accountPin' => [ 'type' => 'string', 'locationName' => 'accountPin', ],
                'subUserPin' => [ 'type' => 'string', 'locationName' => 'subUserPin', ],
                'subUserName' => [ 'type' => 'string', 'locationName' => 'subUserName', ],
                'subUserNickname' => [ 'type' => 'string', 'locationName' => 'subUserNickname', ],
                'subUserPhone' => [ 'type' => 'string', 'locationName' => 'subUserPhone', ],
                'nickname' => [ 'type' => 'string', 'locationName' => 'nickname', ],
                'inviteStatus' => [ 'type' => 'string', 'locationName' => 'inviteStatus', ],
                'inviteResult' => [ 'type' => 'string', 'locationName' => 'inviteResult', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'updateTime' => [ 'type' => 'string', 'locationName' => 'updateTime', ],
            ],
        ],
        'DescribeVirtualMFARequestShape' => [
            'type' => 'structure',
            'members' => [
                'queriedAccount' => [ 'type' => 'string', 'locationName' => 'queriedAccount', ],
            ],
        ],
        'DescribeVirtualMFAResultShape' => [
            'type' => 'structure',
            'members' => [
                'status' => [ 'type' => 'integer', 'locationName' => 'status', ],
            ],
        ],
        'BindMFADeviceResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'BindMFADeviceByOneCodeResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'BindMFADeviceByOneCodeRequestShape' => [
            'type' => 'structure',
            'members' => [
                'boundAccount' => [ 'type' => 'string', 'locationName' => 'boundAccount', ],
                'authenticationCode' => [ 'type' => 'string', 'locationName' => 'authenticationCode', ],
            ],
        ],
        'BindMFADeviceRequestShape' => [
            'type' => 'structure',
            'members' => [
                'boundAccount' => [ 'type' => 'string', 'locationName' => 'boundAccount', ],
                'authenticationCode1' => [ 'type' => 'string', 'locationName' => 'authenticationCode1', ],
                'authenticationCode2' => [ 'type' => 'string', 'locationName' => 'authenticationCode2', ],
            ],
        ],
        'UnbindMFADeviceResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'UnbindMFADeviceResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'BindMFADeviceByOneCodeResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'CreateVirtualMFADeviceResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'CreateVirtualMFADeviceResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeVirtualMFAResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeVirtualMFAResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'CreateVirtualMFADeviceResultShape' => [
            'type' => 'structure',
            'members' => [
                'virtualMFADevice' =>  [ 'shape' => 'VirtualMFADevice', ],
            ],
        ],
        'CreateVirtualMFADeviceRequestShape' => [
            'type' => 'structure',
            'members' => [
                'boundAccount' => [ 'type' => 'string', 'locationName' => 'boundAccount', ],
            ],
        ],
        'UnbindMFADeviceRequestShape' => [
            'type' => 'structure',
            'members' => [
                'unboundAccount' => [ 'type' => 'string', 'locationName' => 'unboundAccount', ],
            ],
        ],
        'BindMFADeviceResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'AddOrganizationUserRelationResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'AddOrganizationUserRelationResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'AddOrganizationUserRelationRequestShape' => [
            'type' => 'structure',
            'members' => [
                'addOrganizationUserRelationInfo' =>  [ 'shape' => 'AddOrganizationUserRelationInfo', ],
                'orgId' => [ 'type' => 'string', 'locationName' => 'orgId', ],
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
        'DeletePolicyResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DeletePolicyRequestShape' => [
            'type' => 'structure',
            'members' => [
                'policyName' => [ 'type' => 'string', 'locationName' => 'policyName', ],
            ],
        ],
        'CreatePolicyResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'CreatePolicyResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribePolicyResultShape' => [
            'type' => 'structure',
            'members' => [
                'policy' =>  [ 'shape' => 'PolicyDetail', ],
                'defaultPolicyEdition' =>  [ 'shape' => 'PolicyEdition', ],
            ],
        ],
        'UpdatePolicyRequestShape' => [
            'type' => 'structure',
            'members' => [
                'updatePolicyInfo' =>  [ 'shape' => 'UpdatePolicyInfo', ],
                'policyName' => [ 'type' => 'string', 'locationName' => 'policyName', ],
            ],
        ],
        'CreatePolicyRequestShape' => [
            'type' => 'structure',
            'members' => [
                'createPolicyInfo' =>  [ 'shape' => 'CreatePolicyInfo', ],
            ],
        ],
        'DeletePolicyResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'UpdatePolicyResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'UpdatePolicyDescriptionResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'CreatePolicyResultShape' => [
            'type' => 'structure',
            'members' => [
                'policy' =>  [ 'shape' => 'Policy', ],
            ],
        ],
        'UpdatePolicyDescriptionRequestShape' => [
            'type' => 'structure',
            'members' => [
                'updatePolicyDescriptionInfo' =>  [ 'shape' => 'UpdatePolicyDescriptionInfo', ],
                'policyName' => [ 'type' => 'string', 'locationName' => 'policyName', ],
            ],
        ],
        'DescribePolicyRequestShape' => [
            'type' => 'structure',
            'members' => [
                'policyName' => [ 'type' => 'string', 'locationName' => 'policyName', ],
            ],
        ],
        'DescribePoliciesResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribePoliciesResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'UpdatePolicyDescriptionResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'UpdatePolicyResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DescribePoliciesRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'keyword' => [ 'type' => 'string', 'locationName' => 'keyword', ],
                'queryType' => [ 'type' => 'integer', 'locationName' => 'queryType', ],
                'types' => [ 'type' => 'string', 'locationName' => 'types', ],
                'sort' => [ 'type' => 'integer', 'locationName' => 'sort', ],
            ],
        ],
        'DescribePoliciesResultShape' => [
            'type' => 'structure',
            'members' => [
                'total' => [ 'type' => 'integer', 'locationName' => 'total', ],
                'policies' => [ 'type' => 'list', 'member' => [ 'shape' => 'Policy', ], ],
            ],
        ],
        'DescribePolicyResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribePolicyResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'UpdateAssumeRolePolicyResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DetachRolePolicyResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DescribeRolePoliciesScopeResultShape' => [
            'type' => 'structure',
            'members' => [
                'total' => [ 'type' => 'integer', 'locationName' => 'total', ],
                'policies' => [ 'type' => 'list', 'member' => [ 'shape' => 'RolePolicy', ], ],
            ],
        ],
        'DescribeRolePoliciesResultShape' => [
            'type' => 'structure',
            'members' => [
                'total' => [ 'type' => 'integer', 'locationName' => 'total', ],
                'policies' => [ 'type' => 'list', 'member' => [ 'shape' => 'RolePolicy', ], ],
            ],
        ],
        'DescribeRoleResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeRoleResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'CopyRoleResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'CopyRoleResultShape', ],
            ],
        ],
        'CopyRoleResultShape' => [
            'type' => 'structure',
            'members' => [
                'roleInfo' =>  [ 'shape' => 'RoleInfo', ],
            ],
        ],
        'DescribeRoleRequestShape' => [
            'type' => 'structure',
            'members' => [
                'roleName' => [ 'type' => 'string', 'locationName' => 'roleName', ],
            ],
        ],
        'AttachRolePolicyResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DeleteRoleResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DetachRolePolicyResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DeleteRoleRequestShape' => [
            'type' => 'structure',
            'members' => [
                'roleName' => [ 'type' => 'string', 'locationName' => 'roleName', ],
            ],
        ],
        'UpdateAssumeRolePolicyRequestShape' => [
            'type' => 'structure',
            'members' => [
                'updateAssumeRolePolicyInfo' =>  [ 'shape' => 'UpdateAssumeRolePolicyInfo', ],
                'roleName' => [ 'type' => 'string', 'locationName' => 'roleName', ],
            ],
        ],
        'AttachRolePolicyResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DeleteRoleResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DetachRolePolicyRequestShape' => [
            'type' => 'structure',
            'members' => [
                'policyName' => [ 'type' => 'string', 'locationName' => 'policyName', ],
                'scopeId' => [ 'type' => 'string', 'locationName' => 'scopeId', ],
                'allowDetachAddPolicy' => [ 'type' => 'string', 'locationName' => 'allowDetachAddPolicy', ],
                'roleName' => [ 'type' => 'string', 'locationName' => 'roleName', ],
            ],
        ],
        'DescribeRolePoliciesResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeRolePoliciesResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'AttachRolePolicyRequestShape' => [
            'type' => 'structure',
            'members' => [
                'policyName' => [ 'type' => 'string', 'locationName' => 'policyName', ],
                'scopeId' => [ 'type' => 'string', 'locationName' => 'scopeId', ],
                'allowAddPolicy' => [ 'type' => 'string', 'locationName' => 'allowAddPolicy', ],
                'roleName' => [ 'type' => 'string', 'locationName' => 'roleName', ],
            ],
        ],
        'CreateRoleResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'CreateRoleResultShape', ],
            ],
        ],
        'DescribeRolesRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'roleName' => [ 'type' => 'string', 'locationName' => 'roleName', ],
                'type' => [ 'type' => 'integer', 'locationName' => 'type', ],
                'sort' => [ 'type' => 'integer', 'locationName' => 'sort', ],
            ],
        ],
        'DescribeRolePoliciesScopeResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeRolePoliciesScopeResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeRoleResultShape' => [
            'type' => 'structure',
            'members' => [
                'roleInfo' =>  [ 'shape' => 'RoleInfo', ],
            ],
        ],
        'CreateRoleResultShape' => [
            'type' => 'structure',
            'members' => [
                'roleInfo' =>  [ 'shape' => 'RoleInfo', ],
            ],
        ],
        'CopyRoleRequestShape' => [
            'type' => 'structure',
            'members' => [
                'copyRoleInfo' =>  [ 'shape' => 'CopyRoleInfo', ],
            ],
        ],
        'DescribeRolesResultShape' => [
            'type' => 'structure',
            'members' => [
                'total' => [ 'type' => 'integer', 'locationName' => 'total', ],
                'roles' => [ 'type' => 'list', 'member' => [ 'shape' => 'ListRoleInfo', ], ],
            ],
        ],
        'DescribeRolePoliciesRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'keyword' => [ 'type' => 'string', 'locationName' => 'keyword', ],
                'sort' => [ 'type' => 'integer', 'locationName' => 'sort', ],
                'roleName' => [ 'type' => 'string', 'locationName' => 'roleName', ],
            ],
        ],
        'DescribeRolePoliciesScopeRequestShape' => [
            'type' => 'structure',
            'members' => [
                'policyID' => [ 'type' => 'string', 'locationName' => 'policyID', ],
                'filterBindResGroup' => [ 'type' => 'string', 'locationName' => 'filterBindResGroup', ],
                'roleName' => [ 'type' => 'string', 'locationName' => 'roleName', ],
            ],
        ],
        'CreateRoleRequestShape' => [
            'type' => 'structure',
            'members' => [
                'createRoleInfo' =>  [ 'shape' => 'CreateRoleInfo', ],
            ],
        ],
        'DescribeRolesResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeRolesResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'UpdateAssumeRolePolicyResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DescribeSubUserGroupsResultShape' => [
            'type' => 'structure',
            'members' => [
                'groups' => [ 'type' => 'list', 'member' => [ 'shape' => 'GroupInfo', ], ],
                'total' => [ 'type' => 'integer', 'locationName' => 'total', ],
            ],
        ],
        'DetachSubUserPolicyResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DescribeSubUsersRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'keyword' => [ 'type' => 'string', 'locationName' => 'keyword', ],
                'sort' => [ 'type' => 'integer', 'locationName' => 'sort', ],
                'phone' => [ 'type' => 'string', 'locationName' => 'phone', ],
                'email' => [ 'type' => 'string', 'locationName' => 'email', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'nickName' => [ 'type' => 'string', 'locationName' => 'nickName', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'pin' => [ 'type' => 'string', 'locationName' => 'pin', ],
            ],
        ],
        'QueryDeletedSubUsersRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'account' => [ 'type' => 'string', 'locationName' => 'account', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
            ],
        ],
        'DescribeSubUserResultShape' => [
            'type' => 'structure',
            'members' => [
                'subUser' =>  [ 'shape' => 'SubUser', ],
            ],
        ],
        'CreateSubUserInnerResultShape' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'password' => [ 'type' => 'string', 'locationName' => 'password', ],
                'email' => [ 'type' => 'string', 'locationName' => 'email', ],
                'phone' => [ 'type' => 'string', 'locationName' => 'phone', ],
                'accessKey' => [ 'type' => 'string', 'locationName' => 'accessKey', ],
                'secretAccessKey' => [ 'type' => 'string', 'locationName' => 'secretAccessKey', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'updateTime' => [ 'type' => 'string', 'locationName' => 'updateTime', ],
                'nickName' => [ 'type' => 'string', 'locationName' => 'nickName', ],
                'pin' => [ 'type' => 'string', 'locationName' => 'pin', ],
            ],
        ],
        'CreateSubUserResultShape' => [
            'type' => 'structure',
            'members' => [
                'subUser' =>  [ 'shape' => 'CreateSubUserRes', ],
            ],
        ],
        'DescribeSubUsersResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeSubUsersResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeAttachedSubUserPoliciesResultShape' => [
            'type' => 'structure',
            'members' => [
                'total' => [ 'type' => 'integer', 'locationName' => 'total', ],
                'policies' => [ 'type' => 'list', 'member' => [ 'shape' => 'Policy', ], ],
            ],
        ],
        'DescribeSubUsersResultShape' => [
            'type' => 'structure',
            'members' => [
                'subUsers' => [ 'type' => 'list', 'member' => [ 'shape' => 'SubUser', ], ],
                'total' => [ 'type' => 'integer', 'locationName' => 'total', ],
            ],
        ],
        'QueryDeletedSubUsersResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'QueryDeletedSubUsersResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeSubUserRequestShape' => [
            'type' => 'structure',
            'members' => [
                'subUser' => [ 'type' => 'string', 'locationName' => 'subUser', ],
            ],
        ],
        'CreateSubUserResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'CreateSubUserResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'UpdateSubUserRequestShape' => [
            'type' => 'structure',
            'members' => [
                'updateSubUserInfo' =>  [ 'shape' => 'UpdateSubUserInfo', ],
                'subUser' => [ 'type' => 'string', 'locationName' => 'subUser', ],
            ],
        ],
        'DeleteSubUserResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'QueryDeletedSubUsersResultShape' => [
            'type' => 'structure',
            'members' => [
                'subUsers' => [ 'type' => 'list', 'member' => [ 'shape' => 'SubUser', ], ],
                'total' => [ 'type' => 'integer', 'locationName' => 'total', ],
            ],
        ],
        'AttachSubUserPolicyRequestShape' => [
            'type' => 'structure',
            'members' => [
                'policyName' => [ 'type' => 'string', 'locationName' => 'policyName', ],
                'scopeId' => [ 'type' => 'string', 'locationName' => 'scopeId', ],
                'allowAddPolicy' => [ 'type' => 'string', 'locationName' => 'allowAddPolicy', ],
                'subUser' => [ 'type' => 'string', 'locationName' => 'subUser', ],
            ],
        ],
        'AttachSubUserPolicyResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'CreateSubUserInnerResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'CreateSubUserInnerResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'RestoreSubUserResultShape' => [
            'type' => 'structure',
            'members' => [
                'subUser' =>  [ 'shape' => 'SubUser', ],
            ],
        ],
        'DescribeAttachedSubUserPoliciesRequestShape' => [
            'type' => 'structure',
            'members' => [
                'subUser' => [ 'type' => 'string', 'locationName' => 'subUser', ],
            ],
        ],
        'DetachSubUserPolicyRequestShape' => [
            'type' => 'structure',
            'members' => [
                'policyName' => [ 'type' => 'string', 'locationName' => 'policyName', ],
                'scopeId' => [ 'type' => 'string', 'locationName' => 'scopeId', ],
                'allowDetachAddPolicy' => [ 'type' => 'string', 'locationName' => 'allowDetachAddPolicy', ],
                'subUser' => [ 'type' => 'string', 'locationName' => 'subUser', ],
            ],
        ],
        'AttachSubUserPolicyResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'CreateSubUserRequestShape' => [
            'type' => 'structure',
            'members' => [
                'createSubUserInfo' =>  [ 'shape' => 'CreateSubUserInfo', ],
            ],
        ],
        'DescribeAttachedSubUserPoliciesScopeResultShape' => [
            'type' => 'structure',
            'members' => [
                'total' => [ 'type' => 'integer', 'locationName' => 'total', ],
                'policies' => [ 'type' => 'list', 'member' => [ 'shape' => 'ResourceGroup', ], ],
            ],
        ],
        'RestoreSubUserRequestShape' => [
            'type' => 'structure',
            'members' => [
                'account' => [ 'type' => 'string', 'locationName' => 'account', ],
                'subUserPin' => [ 'type' => 'string', 'locationName' => 'subUserPin', ],
            ],
        ],
        'DescribeAttachedSubUserPoliciesScopeResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeAttachedSubUserPoliciesScopeResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeAttachedSubUserPoliciesResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeAttachedSubUserPoliciesResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'UpdateSubUserResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'UpdateSubUserResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'UpdateSubUserResultShape' => [
            'type' => 'structure',
            'members' => [
                'subUser' =>  [ 'shape' => 'CreateSubUserRes', ],
            ],
        ],
        'DeleteSubUserResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeAttachedSubUserPoliciesScopeRequestShape' => [
            'type' => 'structure',
            'members' => [
                'policyID' => [ 'type' => 'string', 'locationName' => 'policyID', ],
                'filterBindResGroup' => [ 'type' => 'string', 'locationName' => 'filterBindResGroup', ],
                'subUser' => [ 'type' => 'string', 'locationName' => 'subUser', ],
            ],
        ],
        'DescribeSubUserGroupsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'subUser' => [ 'type' => 'string', 'locationName' => 'subUser', ],
            ],
        ],
        'DeleteSubUserRequestShape' => [
            'type' => 'structure',
            'members' => [
                'subUser' => [ 'type' => 'string', 'locationName' => 'subUser', ],
            ],
        ],
        'DescribeSubUserResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeSubUserResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DetachSubUserPolicyResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'CreateSubUserInnerRequestShape' => [
            'type' => 'structure',
            'members' => [
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'password' => [ 'type' => 'string', 'locationName' => 'password', ],
                'phone' => [ 'type' => 'string', 'locationName' => 'phone', ],
                'email' => [ 'type' => 'string', 'locationName' => 'email', ],
                'nickName' => [ 'type' => 'string', 'locationName' => 'nickName', ],
                'createAk' => [ 'type' => 'boolean', 'locationName' => 'createAk', ],
                'needResetPassword' => [ 'type' => 'boolean', 'locationName' => 'needResetPassword', ],
                'consoleLogin' => [ 'type' => 'boolean', 'locationName' => 'consoleLogin', ],
                'autoGeneratePassword' => [ 'type' => 'boolean', 'locationName' => 'autoGeneratePassword', ],
                'account' => [ 'type' => 'string', 'locationName' => 'account', ],
                'subUser' => [ 'type' => 'string', 'locationName' => 'subUser', ],
                'createType' => [ 'type' => 'integer', 'locationName' => 'createType', ],
            ],
        ],
        'RestoreSubUserResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'RestoreSubUserResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeSubUserGroupsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeSubUserGroupsResultShape', ],
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
        'DeleteUserAccessKeyRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'accessKey' => [ 'type' => 'string', 'locationName' => 'accessKey', ],
            ],
        ],
        'DescribeUserPinResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeUserPinResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
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
        'EnabledUserAccessKeyResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
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
        'DescribeUserPinRequestShape' => [
            'type' => 'structure',
            'members' => [
                'accessKey' => [ 'type' => 'string', 'locationName' => 'accessKey', ],
                'accountId' => [ 'type' => 'string', 'locationName' => 'accountId', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
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
        'DescribeUserPinResultShape' => [
            'type' => 'structure',
            'members' => [
                'pin' => [ 'type' => 'string', 'locationName' => 'pin', ],
            ],
        ],
        'DisabledUserAccessKeyResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'EnabledUserAccessKeyResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
    ],
];
