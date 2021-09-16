<?php
// This file was auto-generated
return [
//    'version' => '',
    'metadata' =>
    [
//        'apiVersion' => '',
//        'endpointPrefix' => 'apigateway',
        'protocol' => 'json',
//        'serviceFullName' => 'apigateway',
//        'serviceId' => 'apigateway',
    ],
    'operations' => [
        'QueryAccessAuths' => [
            'name' => 'QueryAccessAuths',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/accessAuths',
            ],
            'input' => [ 'shape' => 'QueryAccessAuthsRequestShape', ],
            'output' => [ 'shape' => 'QueryAccessAuthsResponseShape', ],
        ],
        'CreateAccessAuth' => [
            'name' => 'CreateAccessAuth',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/accessAuths',
            ],
            'input' => [ 'shape' => 'CreateAccessAuthRequestShape', ],
            'output' => [ 'shape' => 'CreateAccessAuthResponseShape', ],
        ],
        'CheckAuthExist' => [
            'name' => 'CheckAuthExist',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/accessAuths:checkAccessKeyExist',
            ],
            'input' => [ 'shape' => 'CheckAuthExistRequestShape', ],
            'output' => [ 'shape' => 'CheckAuthExistResponseShape', ],
        ],
        'QueryAccessAuth' => [
            'name' => 'QueryAccessAuth',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/accessAuths/{accessAuthId}',
            ],
            'input' => [ 'shape' => 'QueryAccessAuthRequestShape', ],
            'output' => [ 'shape' => 'QueryAccessAuthResponseShape', ],
        ],
        'UpdateAccessAuth' => [
            'name' => 'UpdateAccessAuth',
            'http' => [
                'method' => 'PATCH',
                'requestUri' => '/v1/regions/{regionId}/accessAuths/{accessAuthId}',
            ],
            'input' => [ 'shape' => 'UpdateAccessAuthRequestShape', ],
            'output' => [ 'shape' => 'UpdateAccessAuthResponseShape', ],
        ],
        'DeleteAccessAuth' => [
            'name' => 'DeleteAccessAuth',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/regions/{regionId}/accessAuths/{accessAuthId}',
            ],
            'input' => [ 'shape' => 'DeleteAccessAuthRequestShape', ],
            'output' => [ 'shape' => 'DeleteAccessAuthResponseShape', ],
        ],
        'QueryBindGroupAuth' => [
            'name' => 'QueryBindGroupAuth',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/accessAuths/{accessAuthId}:bindGroup',
            ],
            'input' => [ 'shape' => 'QueryBindGroupAuthRequestShape', ],
            'output' => [ 'shape' => 'QueryBindGroupAuthResponseShape', ],
        ],
        'BindGroupAuth' => [
            'name' => 'BindGroupAuth',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/accessAuths/{accessAuthId}:bindGroup',
            ],
            'input' => [ 'shape' => 'BindGroupAuthRequestShape', ],
            'output' => [ 'shape' => 'BindGroupAuthResponseShape', ],
        ],
        'QueryAuthGroupList' => [
            'name' => 'QueryAuthGroupList',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/accessAuths:groupList',
            ],
            'input' => [ 'shape' => 'QueryAuthGroupListRequestShape', ],
            'output' => [ 'shape' => 'QueryAuthGroupListResponseShape', ],
        ],
        'AuthorizedApiGroupList' => [
            'name' => 'AuthorizedApiGroupList',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/accessAuths:authorizedApiGroupList',
            ],
            'input' => [ 'shape' => 'AuthorizedApiGroupListRequestShape', ],
            'output' => [ 'shape' => 'AuthorizedApiGroupListResponseShape', ],
        ],
        'QueryAccessKeys' => [
            'name' => 'QueryAccessKeys',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/accessKeys',
            ],
            'input' => [ 'shape' => 'QueryAccessKeysRequestShape', ],
            'output' => [ 'shape' => 'QueryAccessKeysResponseShape', ],
        ],
        'CreateAccessKey' => [
            'name' => 'CreateAccessKey',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/accessKeys',
            ],
            'input' => [ 'shape' => 'CreateAccessKeyRequestShape', ],
            'output' => [ 'shape' => 'CreateAccessKeyResponseShape', ],
        ],
        'CheckKeyExist' => [
            'name' => 'CheckKeyExist',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/accessKeys:checkAccessKeyExist',
            ],
            'input' => [ 'shape' => 'CheckKeyExistRequestShape', ],
            'output' => [ 'shape' => 'CheckKeyExistResponseShape', ],
        ],
        'QueryAccessKey' => [
            'name' => 'QueryAccessKey',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/accessKeys/{accessKeyId}',
            ],
            'input' => [ 'shape' => 'QueryAccessKeyRequestShape', ],
            'output' => [ 'shape' => 'QueryAccessKeyResponseShape', ],
        ],
        'UpdateAccessKey' => [
            'name' => 'UpdateAccessKey',
            'http' => [
                'method' => 'PATCH',
                'requestUri' => '/v1/regions/{regionId}/accessKeys/{accessKeyId}',
            ],
            'input' => [ 'shape' => 'UpdateAccessKeyRequestShape', ],
            'output' => [ 'shape' => 'UpdateAccessKeyResponseShape', ],
        ],
        'DeleteAccessKey' => [
            'name' => 'DeleteAccessKey',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/regions/{regionId}/accessKeys/{accessKeyId}',
            ],
            'input' => [ 'shape' => 'DeleteAccessKeyRequestShape', ],
            'output' => [ 'shape' => 'DeleteAccessKeyResponseShape', ],
        ],
        'QueryBindGroupKey' => [
            'name' => 'QueryBindGroupKey',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/accessKeys/{accessKeyId}:bindGroup',
            ],
            'input' => [ 'shape' => 'QueryBindGroupKeyRequestShape', ],
            'output' => [ 'shape' => 'QueryBindGroupKeyResponseShape', ],
        ],
        'BindGroupKey' => [
            'name' => 'BindGroupKey',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/accessKeys/{accessKeyId}:bindGroup',
            ],
            'input' => [ 'shape' => 'BindGroupKeyRequestShape', ],
            'output' => [ 'shape' => 'BindGroupKeyResponseShape', ],
        ],
        'QueryKeyGroupList' => [
            'name' => 'QueryKeyGroupList',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/accessKeys/{accessKeyId}:groupList',
            ],
            'input' => [ 'shape' => 'QueryKeyGroupListRequestShape', ],
            'output' => [ 'shape' => 'QueryKeyGroupListResponseShape', ],
        ],
        'QueryApis' => [
            'name' => 'QueryApis',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/apiGroups/{apiGroupId}/revision/{revision}/apis',
            ],
            'input' => [ 'shape' => 'QueryApisRequestShape', ],
            'output' => [ 'shape' => 'QueryApisResponseShape', ],
        ],
        'CreateApis' => [
            'name' => 'CreateApis',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/apiGroups/{apiGroupId}/revision/{revision}/apis',
            ],
            'input' => [ 'shape' => 'CreateApisRequestShape', ],
            'output' => [ 'shape' => 'CreateApisResponseShape', ],
        ],
        'CheckApiNameExist' => [
            'name' => 'CheckApiNameExist',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/apiGroups/{apiGroupId}/revision/{revision}/apis:checkApiNameExist',
            ],
            'input' => [ 'shape' => 'CheckApiNameExistRequestShape', ],
            'output' => [ 'shape' => 'CheckApiNameExistResponseShape', ],
        ],
        'QueryApi' => [
            'name' => 'QueryApi',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/apiGroups/{apiGroupId}/revision/{revision}/apis/{apiId}',
            ],
            'input' => [ 'shape' => 'QueryApiRequestShape', ],
            'output' => [ 'shape' => 'QueryApiResponseShape', ],
        ],
        'UpdateApi' => [
            'name' => 'UpdateApi',
            'http' => [
                'method' => 'PUT',
                'requestUri' => '/v1/regions/{regionId}/apiGroups/{apiGroupId}/revision/{revision}/apis/{apiId}',
            ],
            'input' => [ 'shape' => 'UpdateApiRequestShape', ],
            'output' => [ 'shape' => 'UpdateApiResponseShape', ],
        ],
        'DeleteApi' => [
            'name' => 'DeleteApi',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/regions/{regionId}/apiGroups/{apiGroupId}/revision/{revision}/apis/{apiId}',
            ],
            'input' => [ 'shape' => 'DeleteApiRequestShape', ],
            'output' => [ 'shape' => 'DeleteApiResponseShape', ],
        ],
        'UpdateApiByName' => [
            'name' => 'UpdateApiByName',
            'http' => [
                'method' => 'PUT',
                'requestUri' => '/v1/regions/{regionId}/apiGroups/{apiGroupId}/revision/{revision}/apisName/{apiName}',
            ],
            'input' => [ 'shape' => 'UpdateApiByNameRequestShape', ],
            'output' => [ 'shape' => 'UpdateApiByNameResponseShape', ],
        ],
        'DeleteApiByName' => [
            'name' => 'DeleteApiByName',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/regions/{regionId}/apiGroups/{apiGroupId}/revision/{revision}/apisName/{apiName}',
            ],
            'input' => [ 'shape' => 'DeleteApiByNameRequestShape', ],
            'output' => [ 'shape' => 'DeleteApiByNameResponseShape', ],
        ],
        'DescribeApiGroups' => [
            'name' => 'DescribeApiGroups',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/apiGroups',
            ],
            'input' => [ 'shape' => 'DescribeApiGroupsRequestShape', ],
            'output' => [ 'shape' => 'DescribeApiGroupsResponseShape', ],
        ],
        'CreateApiGroup' => [
            'name' => 'CreateApiGroup',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/apiGroups',
            ],
            'input' => [ 'shape' => 'CreateApiGroupRequestShape', ],
            'output' => [ 'shape' => 'CreateApiGroupResponseShape', ],
        ],
        'CheckGroupNameExist' => [
            'name' => 'CheckGroupNameExist',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/apiGroups:checkGroupNameExist',
            ],
            'input' => [ 'shape' => 'CheckGroupNameExistRequestShape', ],
            'output' => [ 'shape' => 'CheckGroupNameExistResponseShape', ],
        ],
        'DescribeApiGroup' => [
            'name' => 'DescribeApiGroup',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/apiGroups/{apiGroupId}',
            ],
            'input' => [ 'shape' => 'DescribeApiGroupRequestShape', ],
            'output' => [ 'shape' => 'DescribeApiGroupResponseShape', ],
        ],
        'ModifyApiGroupAttribute' => [
            'name' => 'ModifyApiGroupAttribute',
            'http' => [
                'method' => 'PUT',
                'requestUri' => '/v1/regions/{regionId}/apiGroups/{apiGroupId}',
            ],
            'input' => [ 'shape' => 'ModifyApiGroupAttributeRequestShape', ],
            'output' => [ 'shape' => 'ModifyApiGroupAttributeResponseShape', ],
        ],
        'DeleteApiGroup' => [
            'name' => 'DeleteApiGroup',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/regions/{regionId}/apiGroups/{apiGroupId}',
            ],
            'input' => [ 'shape' => 'DeleteApiGroupRequestShape', ],
            'output' => [ 'shape' => 'DeleteApiGroupResponseShape', ],
        ],
        'DescribeIsDeployApiGroups' => [
            'name' => 'DescribeIsDeployApiGroups',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/apiGroups:isDeploy',
            ],
            'input' => [ 'shape' => 'DescribeIsDeployApiGroupsRequestShape', ],
            'output' => [ 'shape' => 'DescribeIsDeployApiGroupsResponseShape', ],
        ],
        'CreateBackendConfig' => [
            'name' => 'CreateBackendConfig',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/apiGroups/{apiGroupId}/backendConfig',
            ],
            'input' => [ 'shape' => 'CreateBackendConfigRequestShape', ],
            'output' => [ 'shape' => 'CreateBackendConfigResponseShape', ],
        ],
        'DescribeBackendConfigs' => [
            'name' => 'DescribeBackendConfigs',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/apiGroups/{apiGroupId}/environment/{environment}/backendConfigs',
            ],
            'input' => [ 'shape' => 'DescribeBackendConfigsRequestShape', ],
            'output' => [ 'shape' => 'DescribeBackendConfigsResponseShape', ],
        ],
        'DescribeBackendConfig' => [
            'name' => 'DescribeBackendConfig',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/apiGroups/{apiGroupId}/backendConfig/{backendConfigId}',
            ],
            'input' => [ 'shape' => 'DescribeBackendConfigRequestShape', ],
            'output' => [ 'shape' => 'DescribeBackendConfigResponseShape', ],
        ],
        'UpdateBackendConfig' => [
            'name' => 'UpdateBackendConfig',
            'http' => [
                'method' => 'PATCH',
                'requestUri' => '/v1/regions/{regionId}/apiGroups/{apiGroupId}/backendConfig/{backendConfigId}',
            ],
            'input' => [ 'shape' => 'UpdateBackendConfigRequestShape', ],
            'output' => [ 'shape' => 'UpdateBackendConfigResponseShape', ],
        ],
        'DeleteBackendConfig' => [
            'name' => 'DeleteBackendConfig',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/regions/{regionId}/apiGroups/{apiGroupId}/backendConfig/{backendConfigId}',
            ],
            'input' => [ 'shape' => 'DeleteBackendConfigRequestShape', ],
            'output' => [ 'shape' => 'DeleteBackendConfigResponseShape', ],
        ],
        'DescribeDeployments' => [
            'name' => 'DescribeDeployments',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/apiGroups/{apiGroupId}/deployments',
            ],
            'input' => [ 'shape' => 'DescribeDeploymentsRequestShape', ],
            'output' => [ 'shape' => 'DescribeDeploymentsResponseShape', ],
        ],
        'Deploy' => [
            'name' => 'Deploy',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/apiGroups/{apiGroupId}/deployments',
            ],
            'input' => [ 'shape' => 'DeployRequestShape', ],
            'output' => [ 'shape' => 'DeployResponseShape', ],
        ],
        'DescribeDeployment' => [
            'name' => 'DescribeDeployment',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/apiGroups/{apiGroupId}/deployments/{deploymentId}',
            ],
            'input' => [ 'shape' => 'DescribeDeploymentRequestShape', ],
            'output' => [ 'shape' => 'DescribeDeploymentResponseShape', ],
        ],
        'Offline' => [
            'name' => 'Offline',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/apiGroups/{apiGroupId}/deployments/{deploymentId}:offline',
            ],
            'input' => [ 'shape' => 'OfflineRequestShape', ],
            'output' => [ 'shape' => 'OfflineResponseShape', ],
        ],
        'BatchOffline' => [
            'name' => 'BatchOffline',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/apiGroups/{apiGroupId}/deployments:offline',
            ],
            'input' => [ 'shape' => 'BatchOfflineRequestShape', ],
            'output' => [ 'shape' => 'BatchOfflineResponseShape', ],
        ],
        'QueryKeys' => [
            'name' => 'QueryKeys',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/kms',
            ],
            'input' => [ 'shape' => 'QueryKeysRequestShape', ],
            'output' => [ 'shape' => 'QueryKeysResponseShape', ],
        ],
        'CreateKey' => [
            'name' => 'CreateKey',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/kms',
            ],
            'input' => [ 'shape' => 'CreateKeyRequestShape', ],
            'output' => [ 'shape' => 'CreateKeyResponseShape', ],
        ],
        'ResetKey' => [
            'name' => 'ResetKey',
            'http' => [
                'method' => 'PUT',
                'requestUri' => '/v1/regions/{regionId}/kms',
            ],
            'input' => [ 'shape' => 'ResetKeyRequestShape', ],
            'output' => [ 'shape' => 'ResetKeyResponseShape', ],
        ],
        'UpdateKey' => [
            'name' => 'UpdateKey',
            'http' => [
                'method' => 'PATCH',
                'requestUri' => '/v1/regions/{regionId}/kms',
            ],
            'input' => [ 'shape' => 'UpdateKeyRequestShape', ],
            'output' => [ 'shape' => 'UpdateKeyResponseShape', ],
        ],
        'QueryKeyInfo' => [
            'name' => 'QueryKeyInfo',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/kms/{keyId}',
            ],
            'input' => [ 'shape' => 'QueryKeyInfoRequestShape', ],
            'output' => [ 'shape' => 'QueryKeyInfoResponseShape', ],
        ],
        'QueryRateLimitPolicies' => [
            'name' => 'QueryRateLimitPolicies',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/rateLimitPolicies',
            ],
            'input' => [ 'shape' => 'QueryRateLimitPoliciesRequestShape', ],
            'output' => [ 'shape' => 'QueryRateLimitPoliciesResponseShape', ],
        ],
        'CreateRateLimitPolicy' => [
            'name' => 'CreateRateLimitPolicy',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/rateLimitPolicies',
            ],
            'input' => [ 'shape' => 'CreateRateLimitPolicyRequestShape', ],
            'output' => [ 'shape' => 'CreateRateLimitPolicyResponseShape', ],
        ],
        'CheckPolicyName' => [
            'name' => 'CheckPolicyName',
            'http' => [
                'method' => 'PATCH',
                'requestUri' => '/v1/regions/{regionId}/rateLimitPolicies:checkPolicyNameExist',
            ],
            'input' => [ 'shape' => 'CheckPolicyNameRequestShape', ],
            'output' => [ 'shape' => 'CheckPolicyNameResponseShape', ],
        ],
        'QueryRateLimitPolicy' => [
            'name' => 'QueryRateLimitPolicy',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/rateLimitPolicies/{policyId}',
            ],
            'input' => [ 'shape' => 'QueryRateLimitPolicyRequestShape', ],
            'output' => [ 'shape' => 'QueryRateLimitPolicyResponseShape', ],
        ],
        'UpdateRateLimitPolicy' => [
            'name' => 'UpdateRateLimitPolicy',
            'http' => [
                'method' => 'PATCH',
                'requestUri' => '/v1/regions/{regionId}/rateLimitPolicies/{policyId}',
            ],
            'input' => [ 'shape' => 'UpdateRateLimitPolicyRequestShape', ],
            'output' => [ 'shape' => 'UpdateRateLimitPolicyResponseShape', ],
        ],
        'DeleteRateLimitPolicy' => [
            'name' => 'DeleteRateLimitPolicy',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/regions/{regionId}/rateLimitPolicies/{policyId}',
            ],
            'input' => [ 'shape' => 'DeleteRateLimitPolicyRequestShape', ],
            'output' => [ 'shape' => 'DeleteRateLimitPolicyResponseShape', ],
        ],
        'QueryBindGroupPolicy' => [
            'name' => 'QueryBindGroupPolicy',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/rateLimitPolicies/{policyId}:bindGroup',
            ],
            'input' => [ 'shape' => 'QueryBindGroupPolicyRequestShape', ],
            'output' => [ 'shape' => 'QueryBindGroupPolicyResponseShape', ],
        ],
        'BindGroupPolicy' => [
            'name' => 'BindGroupPolicy',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/rateLimitPolicies/{policyId}:bindGroup',
            ],
            'input' => [ 'shape' => 'BindGroupPolicyRequestShape', ],
            'output' => [ 'shape' => 'BindGroupPolicyResponseShape', ],
        ],
        'QueryPolicyGroupList' => [
            'name' => 'QueryPolicyGroupList',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/rateLimitPolicies/{policyId}:groupList',
            ],
            'input' => [ 'shape' => 'QueryPolicyGroupListRequestShape', ],
            'output' => [ 'shape' => 'QueryPolicyGroupListResponseShape', ],
        ],
        'DescribeRevisions' => [
            'name' => 'DescribeRevisions',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/apiGroups/{apiGroupId}/revision',
            ],
            'input' => [ 'shape' => 'DescribeRevisionsRequestShape', ],
            'output' => [ 'shape' => 'DescribeRevisionsResponseShape', ],
        ],
        'CreateRevision' => [
            'name' => 'CreateRevision',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/apiGroups/{apiGroupId}/revision',
            ],
            'input' => [ 'shape' => 'CreateRevisionRequestShape', ],
            'output' => [ 'shape' => 'CreateRevisionResponseShape', ],
        ],
        'GetRevisionIds' => [
            'name' => 'GetRevisionIds',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/apiGroups/{apiGroupId}/revisions',
            ],
            'input' => [ 'shape' => 'GetRevisionIdsRequestShape', ],
            'output' => [ 'shape' => 'GetRevisionIdsResponseShape', ],
        ],
        'CheckRevisionExist' => [
            'name' => 'CheckRevisionExist',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/apiGroups/{apiGroupId}/revision:checkExist',
            ],
            'input' => [ 'shape' => 'CheckRevisionExistRequestShape', ],
            'output' => [ 'shape' => 'CheckRevisionExistResponseShape', ],
        ],
        'QueryRevision' => [
            'name' => 'QueryRevision',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/apiGroups/{apiGroupId}/revision/{revisionId}',
            ],
            'input' => [ 'shape' => 'QueryRevisionRequestShape', ],
            'output' => [ 'shape' => 'QueryRevisionResponseShape', ],
        ],
        'ModifyRevision' => [
            'name' => 'ModifyRevision',
            'http' => [
                'method' => 'PATCH',
                'requestUri' => '/v1/regions/{regionId}/apiGroups/{apiGroupId}/revision/{revisionId}',
            ],
            'input' => [ 'shape' => 'ModifyRevisionRequestShape', ],
            'output' => [ 'shape' => 'ModifyRevisionResponseShape', ],
        ],
        'DeleteRevision' => [
            'name' => 'DeleteRevision',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/regions/{regionId}/apiGroups/{apiGroupId}/revision/{revisionId}',
            ],
            'input' => [ 'shape' => 'DeleteRevisionRequestShape', ],
            'output' => [ 'shape' => 'DeleteRevisionResponseShape', ],
        ],
        'QuerySubscriptionKeys' => [
            'name' => 'QuerySubscriptionKeys',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/subscriptionKeys',
            ],
            'input' => [ 'shape' => 'QuerySubscriptionKeysRequestShape', ],
            'output' => [ 'shape' => 'QuerySubscriptionKeysResponseShape', ],
        ],
        'CreateSubscriptionKey' => [
            'name' => 'CreateSubscriptionKey',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/subscriptionKeys',
            ],
            'input' => [ 'shape' => 'CreateSubscriptionKeyRequestShape', ],
            'output' => [ 'shape' => 'CreateSubscriptionKeyResponseShape', ],
        ],
        'QuerySubscriptionKey' => [
            'name' => 'QuerySubscriptionKey',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/subscriptionKeys/{subscriptionKeyId}',
            ],
            'input' => [ 'shape' => 'QuerySubscriptionKeyRequestShape', ],
            'output' => [ 'shape' => 'QuerySubscriptionKeyResponseShape', ],
        ],
        'UpdateSubscriptionKey' => [
            'name' => 'UpdateSubscriptionKey',
            'http' => [
                'method' => 'PATCH',
                'requestUri' => '/v1/regions/{regionId}/subscriptionKeys/{subscriptionKeyId}',
            ],
            'input' => [ 'shape' => 'UpdateSubscriptionKeyRequestShape', ],
            'output' => [ 'shape' => 'UpdateSubscriptionKeyResponseShape', ],
        ],
        'DeleteSubscriptionKey' => [
            'name' => 'DeleteSubscriptionKey',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/regions/{regionId}/subscriptionKeys/{subscriptionKeyId}',
            ],
            'input' => [ 'shape' => 'DeleteSubscriptionKeyRequestShape', ],
            'output' => [ 'shape' => 'DeleteSubscriptionKeyResponseShape', ],
        ],
        'QueryUcAccessKeys' => [
            'name' => 'QueryUcAccessKeys',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/ucAccessKeys',
            ],
            'input' => [ 'shape' => 'QueryUcAccessKeysRequestShape', ],
            'output' => [ 'shape' => 'QueryUcAccessKeysResponseShape', ],
        ],
        'CheckPin' => [
            'name' => 'CheckPin',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/pins/{pin}:checkPin',
            ],
            'input' => [ 'shape' => 'CheckPinRequestShape', ],
            'output' => [ 'shape' => 'CheckPinResponseShape', ],
        ],
        'QueryUserDomains' => [
            'name' => 'QueryUserDomains',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/userdomain',
            ],
            'input' => [ 'shape' => 'QueryUserDomainsRequestShape', ],
            'output' => [ 'shape' => 'QueryUserDomainsResponseShape', ],
        ],
        'CreateUserDomain' => [
            'name' => 'CreateUserDomain',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/userdomain',
            ],
            'input' => [ 'shape' => 'CreateUserDomainRequestShape', ],
            'output' => [ 'shape' => 'CreateUserDomainResponseShape', ],
        ],
        'DeleteUserDomain' => [
            'name' => 'DeleteUserDomain',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/regions/{regionId}/userdomain',
            ],
            'input' => [ 'shape' => 'DeleteUserDomainRequestShape', ],
            'output' => [ 'shape' => 'DeleteUserDomainResponseShape', ],
        ],
    ],
    'shapes' => [
        'AccessAuth' => [
            'type' => 'structure',
            'members' => [
                'accessAuthId' => [ 'type' => 'string', 'locationName' => 'accessAuthId', ],
                'authUserType' => [ 'type' => 'string', 'locationName' => 'authUserType', ],
                'accessKey' => [ 'type' => 'string', 'locationName' => 'accessKey', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'bindGroups' => [ 'type' => 'string', 'locationName' => 'bindGroups', ],
                'appId' => [ 'type' => 'string', 'locationName' => 'appId', ],
            ],
        ],
        'UserBindedGroups' => [
            'type' => 'structure',
            'members' => [
                'apiGroupId' => [ 'type' => 'string', 'locationName' => 'apiGroupId', ],
                'groupName' => [ 'type' => 'string', 'locationName' => 'groupName', ],
                'region' => [ 'type' => 'string', 'locationName' => 'region', ],
                'authtime' => [ 'type' => 'string', 'locationName' => 'authtime', ],
                'authUserType' => [ 'type' => 'string', 'locationName' => 'authUserType', ],
                'accessKey' => [ 'type' => 'string', 'locationName' => 'accessKey', ],
                'appId' => [ 'type' => 'string', 'locationName' => 'appId', ],
                'environment' => [ 'type' => 'string', 'locationName' => 'environment', ],
                'revision' => [ 'type' => 'string', 'locationName' => 'revision', ],
            ],
        ],
        'AccessAuthView' => [
            'type' => 'structure',
            'members' => [
                'authUserType' => [ 'type' => 'string', 'locationName' => 'authUserType', ],
                'accessKey' => [ 'type' => 'string', 'locationName' => 'accessKey', ],
                'deploymentIds' => [ 'type' => 'string', 'locationName' => 'deploymentIds', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
            ],
        ],
        'CreateAccessKey' => [
            'type' => 'structure',
            'members' => [
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'accessKeyType' => [ 'type' => 'string', 'locationName' => 'accessKeyType', ],
                'accessKey' => [ 'type' => 'string', 'locationName' => 'accessKey', ],
            ],
        ],
        'AccessKey' => [
            'type' => 'structure',
            'members' => [
                'accessKeyId' => [ 'type' => 'string', 'locationName' => 'accessKeyId', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'accessKeyType' => [ 'type' => 'string', 'locationName' => 'accessKeyType', ],
                'accessKey' => [ 'type' => 'string', 'locationName' => 'accessKey', ],
                'bindGroups' => [ 'type' => 'list', 'member' => [ 'shape' => 'BindGroups', ], ],
            ],
        ],
        'BindGroups' => [
            'type' => 'structure',
            'members' => [
                'deploymentId' => [ 'type' => 'string', 'locationName' => 'deploymentId', ],
                'groupName' => [ 'type' => 'string', 'locationName' => 'groupName', ],
                'environment' => [ 'type' => 'string', 'locationName' => 'environment', ],
            ],
        ],
        'ImportApi' => [
            'type' => 'structure',
            'members' => [
                'apiDefine' => [ 'type' => 'binary', 'locationName' => 'apiDefine', ],
            ],
        ],
        'Api' => [
            'type' => 'structure',
            'members' => [
                'apiId' => [ 'type' => 'string', 'locationName' => 'apiId', ],
                'apiGroupId' => [ 'type' => 'string', 'locationName' => 'apiGroupId', ],
                'apiName' => [ 'type' => 'string', 'locationName' => 'apiName', ],
                'action' => [ 'type' => 'string', 'locationName' => 'action', ],
                'path' => [ 'type' => 'string', 'locationName' => 'path', ],
                'matchType' => [ 'type' => 'string', 'locationName' => 'matchType', ],
                'backServiceType' => [ 'type' => 'string', 'locationName' => 'backServiceType', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'reqParams' => [ 'type' => 'list', 'member' => [ 'shape' => 'Parameter', ], ],
                'reqBody' => [ 'type' => 'string', 'locationName' => 'reqBody', ],
                'resBody' => [ 'type' => 'string', 'locationName' => 'resBody', ],
                'reqBodyType' => [ 'type' => 'integer', 'locationName' => 'reqBodyType', ],
                'resBodyType' => [ 'type' => 'integer', 'locationName' => 'resBodyType', ],
                'apiBackendConfig' =>  [ 'shape' => 'ApiBackendConfig', ],
                'hufuAppTypeId' => [ 'type' => 'integer', 'locationName' => 'hufuAppTypeId', ],
                'deploymentEnvironment' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'editableReqBodyType' => [ 'type' => 'string', 'locationName' => 'editableReqBodyType', ],
                'editableResBodyType' => [ 'type' => 'string', 'locationName' => 'editableResBodyType', ],
                'wafStatus' => [ 'type' => 'string', 'locationName' => 'wafStatus', ],
            ],
        ],
        'CreateApi' => [
            'type' => 'structure',
            'members' => [
                'apiGroupId' => [ 'type' => 'string', 'locationName' => 'apiGroupId', ],
                'apiName' => [ 'type' => 'string', 'locationName' => 'apiName', ],
                'action' => [ 'type' => 'string', 'locationName' => 'action', ],
                'path' => [ 'type' => 'string', 'locationName' => 'path', ],
                'matchType' => [ 'type' => 'string', 'locationName' => 'matchType', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'reqParams' => [ 'type' => 'list', 'member' => [ 'shape' => 'Parameter', ], ],
                'reqBody' => [ 'type' => 'string', 'locationName' => 'reqBody', ],
                'resBody' => [ 'type' => 'string', 'locationName' => 'resBody', ],
                'reqBodyType' => [ 'type' => 'integer', 'locationName' => 'reqBodyType', ],
                'resBodyType' => [ 'type' => 'integer', 'locationName' => 'resBodyType', ],
                'apiBackendConfig' =>  [ 'shape' => 'ApiBackendConfig', ],
                'backServiceType' => [ 'type' => 'string', 'locationName' => 'backServiceType', ],
                'backServicePath' => [ 'type' => 'string', 'locationName' => 'backServicePath', ],
                'backServiceId' => [ 'type' => 'string', 'locationName' => 'backServiceId', ],
                'backServiceName' => [ 'type' => 'string', 'locationName' => 'backServiceName', ],
                'backUrl' => [ 'type' => 'string', 'locationName' => 'backUrl', ],
                'backServiceConfig' => [ 'type' => 'boolean', 'locationName' => 'backServiceConfig', ],
                'backServiceVersion' => [ 'type' => 'string', 'locationName' => 'backServiceVersion', ],
                'hufuAppTypeId' => [ 'type' => 'integer', 'locationName' => 'hufuAppTypeId', ],
                'editableReqBodyType' => [ 'type' => 'string', 'locationName' => 'editableReqBodyType', ],
                'editableResBodyType' => [ 'type' => 'string', 'locationName' => 'editableResBodyType', ],
            ],
        ],
        'BackendParameter' => [
            'type' => 'structure',
            'members' => [
                'backendName' => [ 'type' => 'string', 'locationName' => 'backendName', ],
                'backendParamLocation' => [ 'type' => 'string', 'locationName' => 'backendParamLocation', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'paramLocation' => [ 'type' => 'string', 'locationName' => 'paramLocation', ],
                'paramType' => [ 'type' => 'string', 'locationName' => 'paramType', ],
            ],
        ],
        'ApiBackendConfig' => [
            'type' => 'structure',
            'members' => [
                'backendPath' => [ 'type' => 'string', 'locationName' => 'backendPath', ],
                'backendAction' => [ 'type' => 'string', 'locationName' => 'backendAction', ],
                'backendParams' => [ 'type' => 'list', 'member' => [ 'shape' => 'BackendParameter', ], ],
                'backendConstParams' => [ 'type' => 'list', 'member' => [ 'shape' => 'Parameter', ], ],
            ],
        ],
        'DebugReturnMessage' => [
            'type' => 'structure',
            'members' => [
                'requestUrl' => [ 'type' => 'string', 'locationName' => 'requestUrl', ],
                'requestHeader' => [ 'type' => 'string', 'locationName' => 'requestHeader', ],
                'requestBody' => [ 'type' => 'string', 'locationName' => 'requestBody', ],
                'responseCodeStatus' => [ 'type' => 'string', 'locationName' => 'responseCodeStatus', ],
                'responseHeaderValue' => [ 'type' => 'string', 'locationName' => 'responseHeaderValue', ],
                'responseBody' => [ 'type' => 'string', 'locationName' => 'responseBody', ],
            ],
        ],
        'ModifyApi' => [
            'type' => 'structure',
            'members' => [
                'wafStatus' => [ 'type' => 'string', 'locationName' => 'wafStatus', ],
            ],
        ],
        'Parameter' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'paramLocation' => [ 'type' => 'string', 'locationName' => 'paramLocation', ],
                'paramType' => [ 'type' => 'string', 'locationName' => 'paramType', ],
                'defaultValue' => [ 'type' => 'string', 'locationName' => 'defaultValue', ],
                'isRequired' => [ 'type' => 'boolean', 'locationName' => 'isRequired', ],
            ],
        ],
        'HufuApi' => [
            'type' => 'structure',
            'members' => [
                'apiId' => [ 'type' => 'string', 'locationName' => 'apiId', ],
                'apiGroupId' => [ 'type' => 'string', 'locationName' => 'apiGroupId', ],
                'apiStatus' => [ 'type' => 'string', 'locationName' => 'apiStatus', ],
                'apiName' => [ 'type' => 'string', 'locationName' => 'apiName', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'hufuAppTypeId' => [ 'type' => 'integer', 'locationName' => 'hufuAppTypeId', ],
            ],
        ],
        'DebugApi' => [
            'type' => 'structure',
            'members' => [
                'assessKey' => [ 'type' => 'string', 'locationName' => 'assessKey', ],
                'secretKey' => [ 'type' => 'string', 'locationName' => 'secretKey', ],
                'host' => [ 'type' => 'string', 'locationName' => 'host', ],
                'uri' => [ 'type' => 'string', 'locationName' => 'uri', ],
                'method' => [ 'type' => 'string', 'locationName' => 'method', ],
                'authType' => [ 'type' => 'string', 'locationName' => 'authType', ],
                'region' => [ 'type' => 'string', 'locationName' => 'region', ],
                'queryString' => [ 'type' => 'string', 'locationName' => 'queryString', ],
                'body' => [ 'type' => 'string', 'locationName' => 'body', ],
                'reqBodyType' => [ 'type' => 'string', 'locationName' => 'reqBodyType', ],
                'editableReqBodyType' => [ 'type' => 'string', 'locationName' => 'editableReqBodyType', ],
                'headerString' => [ 'type' => 'string', 'locationName' => 'headerString', ],
                'environment' => [ 'type' => 'string', 'locationName' => 'environment', ],
                'isApiProduct' => [ 'type' => 'string', 'locationName' => 'isApiProduct', ],
            ],
        ],
        'Formula' => [
            'type' => 'structure',
            'members' => [
                'key' => [ 'type' => 'string', 'locationName' => 'key', ],
                'value' => [ 'type' => 'string', 'locationName' => 'value', ],
                'unit' => [ 'type' => 'string', 'locationName' => 'unit', ],
            ],
        ],
        'ApiChargeSpec' => [
            'type' => 'structure',
            'members' => [
                'apiId' => [ 'type' => 'string', 'locationName' => 'apiId', ],
                'formulas' => [ 'type' => 'list', 'member' => [ 'shape' => 'Formula', ], ],
            ],
        ],
        'ApiChargeSpecView' => [
            'type' => 'structure',
            'members' => [
                'appCode' => [ 'type' => 'string', 'locationName' => 'appCode', ],
                'serviceCode' => [ 'type' => 'string', 'locationName' => 'serviceCode', ],
                'showStatus' => [ 'type' => 'integer', 'locationName' => 'showStatus', ],
                'chargeType' => [ 'type' => 'integer', 'locationName' => 'chargeType', ],
                'accessSuccessType' => [ 'type' => 'integer', 'locationName' => 'accessSuccessType', ],
                'apiChargeSpecs' => [ 'type' => 'list', 'member' => [ 'shape' => 'ApiChargeSpec', ], ],
            ],
        ],
        'CreateApiGroup' => [
            'type' => 'structure',
            'members' => [
                'groupName' => [ 'type' => 'string', 'locationName' => 'groupName', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'prefix' => [ 'type' => 'string', 'locationName' => 'prefix', ],
                'keyCheck' => [ 'type' => 'string', 'locationName' => 'keyCheck', ],
                'authType' => [ 'type' => 'string', 'locationName' => 'authType', ],
                'prefixStrip' => [ 'type' => 'integer', 'locationName' => 'prefixStrip', ],
                'groupType' => [ 'type' => 'string', 'locationName' => 'groupType', ],
                'jdsfName' => [ 'type' => 'string', 'locationName' => 'jdsfName', ],
                'jdsfRegistryName' => [ 'type' => 'string', 'locationName' => 'jdsfRegistryName', ],
                'jdsfId' => [ 'type' => 'string', 'locationName' => 'jdsfId', ],
            ],
        ],
        'ApiGroupMonitor' => [
            'type' => 'structure',
            'members' => [
                'apiGroupId' => [ 'type' => 'string', 'locationName' => 'apiGroupId', ],
                'groupName' => [ 'type' => 'string', 'locationName' => 'groupName', ],
                'backendUrl' => [ 'type' => 'string', 'locationName' => 'backendUrl', ],
                'groupPath' => [ 'type' => 'string', 'locationName' => 'groupPath', ],
                'version' => [ 'type' => 'string', 'locationName' => 'version', ],
                'apiCount' => [ 'type' => 'string', 'locationName' => 'apiCount', ],
                'deploymentDate' => [ 'type' => 'long', 'locationName' => 'deploymentDate', ],
            ],
        ],
        'ApiGroupMonitorDetail' => [
            'type' => 'structure',
            'members' => [
                'groupName' => [ 'type' => 'string', 'locationName' => 'groupName', ],
                'backendUrl' => [ 'type' => 'string', 'locationName' => 'backendUrl', ],
                'groupPath' => [ 'type' => 'string', 'locationName' => 'groupPath', ],
                'version' => [ 'type' => 'string', 'locationName' => 'version', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'deploymentDate' => [ 'type' => 'long', 'locationName' => 'deploymentDate', ],
            ],
        ],
        'UpdateApiGroup' => [
            'type' => 'structure',
            'members' => [
                'groupName' => [ 'type' => 'string', 'locationName' => 'groupName', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'prefix' => [ 'type' => 'string', 'locationName' => 'prefix', ],
                'keyCheck' => [ 'type' => 'string', 'locationName' => 'keyCheck', ],
                'authType' => [ 'type' => 'string', 'locationName' => 'authType', ],
                'prefixStrip' => [ 'type' => 'integer', 'locationName' => 'prefixStrip', ],
                'groupType' => [ 'type' => 'string', 'locationName' => 'groupType', ],
                'jdsfName' => [ 'type' => 'string', 'locationName' => 'jdsfName', ],
                'jdsfRegistryName' => [ 'type' => 'string', 'locationName' => 'jdsfRegistryName', ],
                'jdsfId' => [ 'type' => 'string', 'locationName' => 'jdsfId', ],
            ],
        ],
        'ApiGroupCount' => [
            'type' => 'structure',
            'members' => [
                'gatewayId' => [ 'type' => 'string', 'locationName' => 'gatewayId', ],
                'count' => [ 'type' => 'integer', 'locationName' => 'count', ],
            ],
        ],
        'BindApiGroup' => [
            'type' => 'structure',
            'members' => [
                'apiGroupId' => [ 'type' => 'string', 'locationName' => 'apiGroupId', ],
                'groupName' => [ 'type' => 'string', 'locationName' => 'groupName', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'prefix' => [ 'type' => 'string', 'locationName' => 'prefix', ],
                'version' => [ 'type' => 'string', 'locationName' => 'version', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
                'environment' => [ 'type' => 'string', 'locationName' => 'environment', ],
                'keyCheck' => [ 'type' => 'string', 'locationName' => 'keyCheck', ],
                'authType' => [ 'type' => 'string', 'locationName' => 'authType', ],
                'prefixStrip' => [ 'type' => 'integer', 'locationName' => 'prefixStrip', ],
                'groupType' => [ 'type' => 'string', 'locationName' => 'groupType', ],
                'jdsfName' => [ 'type' => 'string', 'locationName' => 'jdsfName', ],
                'jdsfRegistryName' => [ 'type' => 'string', 'locationName' => 'jdsfRegistryName', ],
                'jdsfId' => [ 'type' => 'string', 'locationName' => 'jdsfId', ],
                'deploy' => [ 'type' => 'integer', 'locationName' => 'deploy', ],
            ],
        ],
        'GenerateInfo' => [
            'type' => 'structure',
            'members' => [
                'language' => [ 'type' => 'string', 'locationName' => 'language', ],
                'fileStatus' => [ 'type' => 'integer', 'locationName' => 'fileStatus', ],
                'fileUrl' => [ 'type' => 'string', 'locationName' => 'fileUrl', ],
            ],
        ],
        'BindedGroup' => [
            'type' => 'structure',
            'members' => [
                'apiGroupId' => [ 'type' => 'string', 'locationName' => 'apiGroupId', ],
                'groupName' => [ 'type' => 'string', 'locationName' => 'groupName', ],
                'region' => [ 'type' => 'string', 'locationName' => 'region', ],
                'environment' => [ 'type' => 'string', 'locationName' => 'environment', ],
                'bindedTime' => [ 'type' => 'string', 'locationName' => 'bindedTime', ],
            ],
        ],
        'ApiGroupEx' => [
            'type' => 'structure',
            'members' => [
                'apiGroupId' => [ 'type' => 'string', 'locationName' => 'apiGroupId', ],
                'groupName' => [ 'type' => 'string', 'locationName' => 'groupName', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'ApiGroup' => [
            'type' => 'structure',
            'members' => [
                'apiGroupId' => [ 'type' => 'string', 'locationName' => 'apiGroupId', ],
                'groupName' => [ 'type' => 'string', 'locationName' => 'groupName', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'prefix' => [ 'type' => 'string', 'locationName' => 'prefix', ],
                'version' => [ 'type' => 'string', 'locationName' => 'version', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
                'environment' => [ 'type' => 'string', 'locationName' => 'environment', ],
                'keyCheck' => [ 'type' => 'string', 'locationName' => 'keyCheck', ],
                'authType' => [ 'type' => 'string', 'locationName' => 'authType', ],
                'prefixStrip' => [ 'type' => 'integer', 'locationName' => 'prefixStrip', ],
                'groupType' => [ 'type' => 'string', 'locationName' => 'groupType', ],
                'jdsfName' => [ 'type' => 'string', 'locationName' => 'jdsfName', ],
                'jdsfRegistryName' => [ 'type' => 'string', 'locationName' => 'jdsfRegistryName', ],
                'jdsfId' => [ 'type' => 'string', 'locationName' => 'jdsfId', ],
                'deploy' => [ 'type' => 'integer', 'locationName' => 'deploy', ],
            ],
        ],
        'UpdateGroupVpcPathModel' => [
            'type' => 'structure',
            'members' => [
                'jdsfGwId' => [ 'type' => 'string', 'locationName' => 'jdsfGwId', ],
                'vpcPath' => [ 'type' => 'string', 'locationName' => 'vpcPath', ],
            ],
        ],
        'BindJdsfGroup' => [
            'type' => 'structure',
            'members' => [
                'jdsfName' => [ 'type' => 'string', 'locationName' => 'jdsfName', ],
                'jdsfRegistryName' => [ 'type' => 'string', 'locationName' => 'jdsfRegistryName', ],
                'environment' => [ 'type' => 'string', 'locationName' => 'environment', ],
                'jdsfId' => [ 'type' => 'string', 'locationName' => 'jdsfId', ],
                'jdsfParam' => [ 'type' => 'string', 'locationName' => 'jdsfParam', ],
                'jdsfRegion' => [ 'type' => 'string', 'locationName' => 'jdsfRegion', ],
                'groupType' => [ 'type' => 'string', 'locationName' => 'groupType', ],
            ],
        ],
        'ApiProduct' => [
            'type' => 'structure',
            'members' => [
                'apiGroupId' => [ 'type' => 'string', 'locationName' => 'apiGroupId', ],
                'groupName' => [ 'type' => 'string', 'locationName' => 'groupName', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'version' => [ 'type' => 'string', 'locationName' => 'version', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'price' => [ 'type' => 'string', 'locationName' => 'price', ],
                'deploymentDate' => [ 'type' => 'long', 'locationName' => 'deploymentDate', ],
                'isBuyed' => [ 'type' => 'integer', 'locationName' => 'isBuyed', ],
                'buyDate' => [ 'type' => 'long', 'locationName' => 'buyDate', ],
            ],
        ],
        'SimpleParameter' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'value' => [ 'type' => 'string', 'locationName' => 'value', ],
            ],
        ],
        'UpdatebackendConfig' => [
            'type' => 'structure',
            'members' => [
                'baseGroupId' => [ 'type' => 'string', 'locationName' => 'baseGroupId', ],
                'environment' => [ 'type' => 'string', 'locationName' => 'environment', ],
                'backendUrl' => [ 'type' => 'string', 'locationName' => 'backendUrl', ],
                'backendServiceType' => [ 'type' => 'string', 'locationName' => 'backendServiceType', ],
                'headerParams' => [ 'type' => 'list', 'member' => [ 'shape' => 'SimpleParameter', ], ],
                'queryParams' => [ 'type' => 'list', 'member' => [ 'shape' => 'SimpleParameter', ], ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'createTime' => [ 'type' => 'long', 'locationName' => 'createTime', ],
                'sort' => [ 'type' => 'integer', 'locationName' => 'sort', ],
                'userSort' => [ 'type' => 'integer', 'locationName' => 'userSort', ],
                'jdsfId' => [ 'type' => 'string', 'locationName' => 'jdsfId', ],
                'jdsfParam' => [ 'type' => 'string', 'locationName' => 'jdsfParam', ],
                'jdsfRegion' => [ 'type' => 'string', 'locationName' => 'jdsfRegion', ],
                'jdsfPin' => [ 'type' => 'string', 'locationName' => 'jdsfPin', ],
            ],
        ],
        'BackendConfig' => [
            'type' => 'structure',
            'members' => [
                'backendConfigId' => [ 'type' => 'string', 'locationName' => 'backendConfigId', ],
                'baseGroupId' => [ 'type' => 'string', 'locationName' => 'baseGroupId', ],
                'environment' => [ 'type' => 'string', 'locationName' => 'environment', ],
                'backendUrl' => [ 'type' => 'string', 'locationName' => 'backendUrl', ],
                'backendServiceType' => [ 'type' => 'string', 'locationName' => 'backendServiceType', ],
                'headerParams' => [ 'type' => 'list', 'member' => [ 'shape' => 'SimpleParameter', ], ],
                'queryParams' => [ 'type' => 'list', 'member' => [ 'shape' => 'SimpleParameter', ], ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'createTime' => [ 'type' => 'long', 'locationName' => 'createTime', ],
                'sort' => [ 'type' => 'integer', 'locationName' => 'sort', ],
                'userSort' => [ 'type' => 'integer', 'locationName' => 'userSort', ],
                'jdsfId' => [ 'type' => 'string', 'locationName' => 'jdsfId', ],
                'jdsfParam' => [ 'type' => 'string', 'locationName' => 'jdsfParam', ],
                'jdsfRegion' => [ 'type' => 'string', 'locationName' => 'jdsfRegion', ],
                'jdsfPin' => [ 'type' => 'string', 'locationName' => 'jdsfPin', ],
            ],
        ],
        'ChargeAuth' => [
            'type' => 'structure',
            'members' => [
                'userPin' => [ 'type' => 'string', 'locationName' => 'userPin', ],
                'resourceId' => [ 'type' => 'string', 'locationName' => 'resourceId', ],
            ],
        ],
        'Deploy' => [
            'type' => 'structure',
            'members' => [
                'revision' => [ 'type' => 'string', 'locationName' => 'revision', ],
                'environment' => [ 'type' => 'string', 'locationName' => 'environment', ],
                'backendServiceType' => [ 'type' => 'string', 'locationName' => 'backendServiceType', ],
                'backendUrl' => [ 'type' => 'string', 'locationName' => 'backendUrl', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'jdsfName' => [ 'type' => 'string', 'locationName' => 'jdsfName', ],
                'jdsfRegistryName' => [ 'type' => 'string', 'locationName' => 'jdsfRegistryName', ],
                'jdsfId' => [ 'type' => 'string', 'locationName' => 'jdsfId', ],
            ],
        ],
        'Deployment' => [
            'type' => 'structure',
            'members' => [
                'deploymentId' => [ 'type' => 'string', 'locationName' => 'deploymentId', ],
                'revision' => [ 'type' => 'string', 'locationName' => 'revision', ],
                'path' => [ 'type' => 'string', 'locationName' => 'path', ],
                'environment' => [ 'type' => 'string', 'locationName' => 'environment', ],
                'backendServiceType' => [ 'type' => 'string', 'locationName' => 'backendServiceType', ],
                'backendUrl' => [ 'type' => 'string', 'locationName' => 'backendUrl', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'createTime' => [ 'type' => 'long', 'locationName' => 'createTime', ],
                'jdsfName' => [ 'type' => 'string', 'locationName' => 'jdsfName', ],
                'jdsfRegistryName' => [ 'type' => 'string', 'locationName' => 'jdsfRegistryName', ],
                'jdsfId' => [ 'type' => 'string', 'locationName' => 'jdsfId', ],
            ],
        ],
        'Function' => [
            'type' => 'structure',
            'members' => [
                'functionName' => [ 'type' => 'string', 'locationName' => 'functionName', ],
                'versionName' => [ 'type' => 'string', 'locationName' => 'versionName', ],
            ],
        ],
        'FuntionApi' => [
            'type' => 'structure',
            'members' => [
                'apiId' => [ 'type' => 'string', 'locationName' => 'apiId', ],
                'apiGroupId' => [ 'type' => 'string', 'locationName' => 'apiGroupId', ],
                'groupName' => [ 'type' => 'string', 'locationName' => 'groupName', ],
                'revision' => [ 'type' => 'string', 'locationName' => 'revision', ],
                'apiName' => [ 'type' => 'string', 'locationName' => 'apiName', ],
                'action' => [ 'type' => 'string', 'locationName' => 'action', ],
                'path' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'deploymentStatus' => [ 'type' => 'integer', 'locationName' => 'deploymentStatus', ],
            ],
        ],
        'ServiceError' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'integer', 'locationName' => 'code', ],
                'details' => [ 'type' => 'string', 'locationName' => 'details', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
            ],
        ],
        'KeyInfo' => [
            'type' => 'structure',
            'members' => [
                'userId' => [ 'type' => 'string', 'locationName' => 'userId', ],
                'keyId' => [ 'type' => 'string', 'locationName' => 'keyId', ],
                'keyName' => [ 'type' => 'string', 'locationName' => 'keyName', ],
                'accessKey' => [ 'type' => 'string', 'locationName' => 'accessKey', ],
                'secretKey' => [ 'type' => 'string', 'locationName' => 'secretKey', ],
                'keyDesc' => [ 'type' => 'string', 'locationName' => 'keyDesc', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
            ],
        ],
        'PinAuthManage' => [
            'type' => 'structure',
            'members' => [
                'subordinatesName' => [ 'type' => 'string', 'locationName' => 'subordinatesName', ],
                'subordinatesPin' => [ 'type' => 'string', 'locationName' => 'subordinatesPin', ],
            ],
        ],
        'RateLimitPolicy' => [
            'type' => 'structure',
            'members' => [
                'policyId' => [ 'type' => 'string', 'locationName' => 'policyId', ],
                'policyName' => [ 'type' => 'string', 'locationName' => 'policyName', ],
                'timeUnit' => [ 'type' => 'string', 'locationName' => 'timeUnit', ],
                'apiLimitCount' => [ 'type' => 'integer', 'locationName' => 'apiLimitCount', ],
                'userLimitCount' => [ 'type' => 'integer', 'locationName' => 'userLimitCount', ],
                'appLimitCount' => [ 'type' => 'integer', 'locationName' => 'appLimitCount', ],
                'userId' => [ 'type' => 'string', 'locationName' => 'userId', ],
                'pin' => [ 'type' => 'string', 'locationName' => 'pin', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'bindGroups' => [ 'type' => 'string', 'locationName' => 'bindGroups', ],
            ],
        ],
        'RateLimitPolicyView' => [
            'type' => 'structure',
            'members' => [
                'policyName' => [ 'type' => 'string', 'locationName' => 'policyName', ],
                'timeUnit' => [ 'type' => 'string', 'locationName' => 'timeUnit', ],
                'apiLimitCount' => [ 'type' => 'integer', 'locationName' => 'apiLimitCount', ],
                'userLimitCount' => [ 'type' => 'integer', 'locationName' => 'userLimitCount', ],
                'appLimitCount' => [ 'type' => 'integer', 'locationName' => 'appLimitCount', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
            ],
        ],
        'RevisionList' => [
            'type' => 'structure',
            'members' => [
                'revisionId' => [ 'type' => 'string', 'locationName' => 'revisionId', ],
                'revision' => [ 'type' => 'string', 'locationName' => 'revision', ],
                'baseRevision' => [ 'type' => 'string', 'locationName' => 'baseRevision', ],
                'environment' => [ 'type' => 'string', 'locationName' => 'environment', ],
                'createdAt' => [ 'type' => 'string', 'locationName' => 'createdAt', ],
                'revisionNote' => [ 'type' => 'string', 'locationName' => 'revisionNote', ],
            ],
        ],
        'CreateRevision' => [
            'type' => 'structure',
            'members' => [
                'revision' => [ 'type' => 'string', 'locationName' => 'revision', ],
                'baseRevision' => [ 'type' => 'string', 'locationName' => 'baseRevision', ],
                'revisionNote' => [ 'type' => 'string', 'locationName' => 'revisionNote', ],
            ],
        ],
        'UpdateRevision' => [
            'type' => 'structure',
            'members' => [
                'revisionNote' => [ 'type' => 'string', 'locationName' => 'revisionNote', ],
            ],
        ],
        'SubscriptionKey' => [
            'type' => 'structure',
            'members' => [
                'subscriptionKeyId' => [ 'type' => 'string', 'locationName' => 'subscriptionKeyId', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'subscriptionKey' => [ 'type' => 'string', 'locationName' => 'subscriptionKey', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'bindGroups' => [ 'type' => 'list', 'member' => [ 'shape' => 'BindGroups', ], ],
            ],
        ],
        'CreateSubscriptionKey' => [
            'type' => 'structure',
            'members' => [
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
            ],
        ],
        'UcAccessKey' => [
            'type' => 'structure',
            'members' => [
                'accessKeyStatus' => [ 'type' => 'string', 'locationName' => 'accessKeyStatus', ],
                'accessKey' => [ 'type' => 'string', 'locationName' => 'accessKey', ],
            ],
        ],
        'DomainInfo' => [
            'type' => 'structure',
            'members' => [
                'apiGroupId' => [ 'type' => 'string', 'locationName' => 'apiGroupId', ],
                'domainId' => [ 'type' => 'string', 'locationName' => 'domainId', ],
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
                'cname' => [ 'type' => 'string', 'locationName' => 'cname', ],
                'protocol' => [ 'type' => 'string', 'locationName' => 'protocol', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
            ],
        ],
        'AuthorizedApiGroupListResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'AuthorizedApiGroupListResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'BindGroupAuthResultShape' => [
            'type' => 'structure',
            'members' => [
                'bindGroups' => [ 'type' => 'list', 'member' => [ 'shape' => 'BindGroups', ], ],
            ],
        ],
        'QueryAuthGroupListResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'QueryAuthGroupListResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'UpdateAccessAuthResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'UpdateAccessAuthResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'AuthorizedApiGroupListRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'filters' => [ 'type' => 'list', 'member' => [ 'shape' => 'Filter', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'QueryAccessAuthRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'accessAuthId' => [ 'type' => 'string', 'locationName' => 'accessAuthId', ],
            ],
        ],
        'QueryAccessAuthsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'QueryAccessAuthsResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'QueryAuthGroupListRequestShape' => [
            'type' => 'structure',
            'members' => [
                'authUserType' => [ 'type' => 'string', 'locationName' => 'authUserType', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'CreateAccessAuthResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'CreateAccessAuthResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'QueryAccessAuthResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'QueryAccessAuthResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DeleteAccessAuthResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DeleteAccessAuthResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'QueryBindGroupAuthResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'QueryBindGroupAuthResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'CheckAuthExistResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'CheckAuthExistResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'UpdateAccessAuthRequestShape' => [
            'type' => 'structure',
            'members' => [
                'accessAuthView' =>  [ 'shape' => 'AccessAuthView', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'accessAuthId' => [ 'type' => 'string', 'locationName' => 'accessAuthId', ],
            ],
        ],
        'DeleteAccessAuthResultShape' => [
            'type' => 'structure',
            'members' => [
                'accessAuthId' => [ 'type' => 'string', 'locationName' => 'accessAuthId', ],
            ],
        ],
        'QueryBindGroupAuthResultShape' => [
            'type' => 'structure',
            'members' => [
                'bindGroups' => [ 'type' => 'list', 'member' => [ 'shape' => 'BindGroups', ], ],
            ],
        ],
        'QueryAuthGroupListResultShape' => [
            'type' => 'structure',
            'members' => [
                'bindGroups' => [ 'type' => 'list', 'member' => [ 'shape' => 'BindGroups', ], ],
            ],
        ],
        'AuthorizedApiGroupListResultShape' => [
            'type' => 'structure',
            'members' => [
                'apiGroups' => [ 'type' => 'list', 'member' => [ 'shape' => 'UserBindedGroups', ], ],
            ],
        ],
        'QueryAccessAuthsResultShape' => [
            'type' => 'structure',
            'members' => [
                'accessAuths' => [ 'type' => 'list', 'member' => [ 'shape' => 'AccessAuth', ], ],
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
            ],
        ],
        'BindGroupAuthResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'BindGroupAuthResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'CreateAccessAuthRequestShape' => [
            'type' => 'structure',
            'members' => [
                'accessAuthView' =>  [ 'shape' => 'AccessAuthView', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'CheckAuthExistRequestShape' => [
            'type' => 'structure',
            'members' => [
                'accessKey' => [ 'type' => 'string', 'locationName' => 'accessKey', ],
                'authUserType' => [ 'type' => 'string', 'locationName' => 'authUserType', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'CreateAccessAuthResultShape' => [
            'type' => 'structure',
            'members' => [
                'accessAuthId' => [ 'type' => 'string', 'locationName' => 'accessAuthId', ],
            ],
        ],
        'BindGroupAuthRequestShape' => [
            'type' => 'structure',
            'members' => [
                'deploymentIds' => [ 'type' => 'string', 'locationName' => 'deploymentIds', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'accessAuthId' => [ 'type' => 'string', 'locationName' => 'accessAuthId', ],
            ],
        ],
        'UpdateAccessAuthResultShape' => [
            'type' => 'structure',
            'members' => [
                'accessAuthId' => [ 'type' => 'string', 'locationName' => 'accessAuthId', ],
            ],
        ],
        'DeleteAccessAuthRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'accessAuthId' => [ 'type' => 'string', 'locationName' => 'accessAuthId', ],
            ],
        ],
        'QueryAccessAuthResultShape' => [
            'type' => 'structure',
            'members' => [
                'accessAuth' =>  [ 'shape' => 'AccessAuth', ],
            ],
        ],
        'QueryBindGroupAuthRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'accessAuthId' => [ 'type' => 'string', 'locationName' => 'accessAuthId', ],
            ],
        ],
        'QueryAccessAuthsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'filters' => [ 'type' => 'list', 'member' => [ 'shape' => 'Filter', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'CheckAuthExistResultShape' => [
            'type' => 'structure',
            'members' => [
                'accessAuthId' => [ 'type' => 'string', 'locationName' => 'accessAuthId', ],
            ],
        ],
        'CreateAccessKeyResultShape' => [
            'type' => 'structure',
            'members' => [
                'accessKeyId' => [ 'type' => 'string', 'locationName' => 'accessKeyId', ],
            ],
        ],
        'BindGroupKeyResultShape' => [
            'type' => 'structure',
            'members' => [
                'bindGroups' => [ 'type' => 'list', 'member' => [ 'shape' => 'BindGroups', ], ],
            ],
        ],
        'CheckKeyExistResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'CheckKeyExistResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'UpdateAccessKeyResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'UpdateAccessKeyResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'QueryAccessKeyRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'accessKeyId' => [ 'type' => 'string', 'locationName' => 'accessKeyId', ],
            ],
        ],
        'QueryAccessKeyResultShape' => [
            'type' => 'structure',
            'members' => [
                'accessKey' =>  [ 'shape' => 'AccessKey', ],
            ],
        ],
        'QueryAccessKeysResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'QueryAccessKeysResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'CheckKeyExistResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'QueryBindGroupKeyRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'accessKeyId' => [ 'type' => 'string', 'locationName' => 'accessKeyId', ],
            ],
        ],
        'QueryAccessKeyResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'QueryAccessKeyResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'BindGroupKeyResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'BindGroupKeyResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DeleteAccessKeyRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'accessKeyId' => [ 'type' => 'string', 'locationName' => 'accessKeyId', ],
            ],
        ],
        'QueryKeyGroupListRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'accessKeyId' => [ 'type' => 'string', 'locationName' => 'accessKeyId', ],
            ],
        ],
        'UpdateAccessKeyResultShape' => [
            'type' => 'structure',
            'members' => [
                'accessKeyId' => [ 'type' => 'string', 'locationName' => 'accessKeyId', ],
            ],
        ],
        'QueryBindGroupKeyResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'QueryBindGroupKeyResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'QueryAccessKeysResultShape' => [
            'type' => 'structure',
            'members' => [
                'accessKeys' => [ 'type' => 'list', 'member' => [ 'shape' => 'AccessKey', ], ],
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
            ],
        ],
        'CheckKeyExistRequestShape' => [
            'type' => 'structure',
            'members' => [
                'accessKey' => [ 'type' => 'string', 'locationName' => 'accessKey', ],
                'accessKeyType' => [ 'type' => 'string', 'locationName' => 'accessKeyType', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'QueryBindGroupKeyResultShape' => [
            'type' => 'structure',
            'members' => [
                'bindGroups' => [ 'type' => 'list', 'member' => [ 'shape' => 'BindGroups', ], ],
            ],
        ],
        'CreateAccessKeyResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'CreateAccessKeyResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'UpdateAccessKeyRequestShape' => [
            'type' => 'structure',
            'members' => [
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'accessKeyType' => [ 'type' => 'string', 'locationName' => 'accessKeyType', ],
                'accessKey' => [ 'type' => 'string', 'locationName' => 'accessKey', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'accessKeyId' => [ 'type' => 'string', 'locationName' => 'accessKeyId', ],
            ],
        ],
        'QueryKeyGroupListResultShape' => [
            'type' => 'structure',
            'members' => [
                'bindGroups' => [ 'type' => 'list', 'member' => [ 'shape' => 'BindGroups', ], ],
            ],
        ],
        'QueryKeyGroupListResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'QueryKeyGroupListResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'CreateAccessKeyRequestShape' => [
            'type' => 'structure',
            'members' => [
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'accessKeyType' => [ 'type' => 'string', 'locationName' => 'accessKeyType', ],
                'accessKey' => [ 'type' => 'string', 'locationName' => 'accessKey', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'QueryAccessKeysRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'filters' => [ 'type' => 'list', 'member' => [ 'shape' => 'Filter', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DeleteAccessKeyResultShape' => [
            'type' => 'structure',
            'members' => [
                'accessKeyId' => [ 'type' => 'string', 'locationName' => 'accessKeyId', ],
            ],
        ],
        'DeleteAccessKeyResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DeleteAccessKeyResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'BindGroupKeyRequestShape' => [
            'type' => 'structure',
            'members' => [
                'deploymentIds' => [ 'type' => 'string', 'locationName' => 'deploymentIds', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'accessKeyId' => [ 'type' => 'string', 'locationName' => 'accessKeyId', ],
            ],
        ],
        'QueryApisResultShape' => [
            'type' => 'structure',
            'members' => [
                'apis' => [ 'type' => 'list', 'member' => [ 'shape' => 'Api', ], ],
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
            ],
        ],
        'DeleteApiRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'apiGroupId' => [ 'type' => 'string', 'locationName' => 'apiGroupId', ],
                'revision' => [ 'type' => 'string', 'locationName' => 'revision', ],
                'apiId' => [ 'type' => 'string', 'locationName' => 'apiId', ],
            ],
        ],
        'UpdateApiByNameResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'UpdateApiByNameRequestShape' => [
            'type' => 'structure',
            'members' => [
                'api' =>  [ 'shape' => 'CreateApi', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'apiGroupId' => [ 'type' => 'string', 'locationName' => 'apiGroupId', ],
                'revision' => [ 'type' => 'string', 'locationName' => 'revision', ],
                'apiName' => [ 'type' => 'string', 'locationName' => 'apiName', ],
            ],
        ],
        'DeleteApiByNameRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'apiGroupId' => [ 'type' => 'string', 'locationName' => 'apiGroupId', ],
                'revision' => [ 'type' => 'string', 'locationName' => 'revision', ],
                'apiName' => [ 'type' => 'string', 'locationName' => 'apiName', ],
            ],
        ],
        'QueryApisRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'filters' => [ 'type' => 'list', 'member' => [ 'shape' => 'Filter', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'apiGroupId' => [ 'type' => 'string', 'locationName' => 'apiGroupId', ],
                'revision' => [ 'type' => 'string', 'locationName' => 'revision', ],
            ],
        ],
        'CreateApisResultShape' => [
            'type' => 'structure',
            'members' => [
                'apiId' => [ 'type' => 'string', 'locationName' => 'apiId', ],
            ],
        ],
        'CreateApisResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'CreateApisResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'UpdateApiByNameResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'QueryApiResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'QueryApiResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'QueryApiResultShape' => [
            'type' => 'structure',
            'members' => [
                'api' =>  [ 'shape' => 'Api', ],
            ],
        ],
        'UpdateApiResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'UpdateApiResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'CheckApiNameExistResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'CheckApiNameExistResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'UpdateApiRequestShape' => [
            'type' => 'structure',
            'members' => [
                'api' =>  [ 'shape' => 'CreateApi', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'apiGroupId' => [ 'type' => 'string', 'locationName' => 'apiGroupId', ],
                'revision' => [ 'type' => 'string', 'locationName' => 'revision', ],
                'apiId' => [ 'type' => 'string', 'locationName' => 'apiId', ],
            ],
        ],
        'DeleteApiResponseShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DeleteApiByNameResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'QueryApiRequestShape' => [
            'type' => 'structure',
            'members' => [
                'filters' => [ 'type' => 'list', 'member' => [ 'shape' => 'Filter', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'apiGroupId' => [ 'type' => 'string', 'locationName' => 'apiGroupId', ],
                'revision' => [ 'type' => 'string', 'locationName' => 'revision', ],
                'apiId' => [ 'type' => 'string', 'locationName' => 'apiId', ],
            ],
        ],
        'CheckApiNameExistResultShape' => [
            'type' => 'structure',
            'members' => [
                'apiId' => [ 'type' => 'string', 'locationName' => 'apiId', ],
            ],
        ],
        'CreateApisRequestShape' => [
            'type' => 'structure',
            'members' => [
                'api' =>  [ 'shape' => 'CreateApi', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'apiGroupId' => [ 'type' => 'string', 'locationName' => 'apiGroupId', ],
                'revision' => [ 'type' => 'string', 'locationName' => 'revision', ],
            ],
        ],
        'QueryApisResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'QueryApisResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DeleteApiResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DeleteApiByNameResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'UpdateApiResultShape' => [
            'type' => 'structure',
            'members' => [
                'apiId' => [ 'type' => 'string', 'locationName' => 'apiId', ],
            ],
        ],
        'CheckApiNameExistRequestShape' => [
            'type' => 'structure',
            'members' => [
                'apiName' => [ 'type' => 'string', 'locationName' => 'apiName', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'apiGroupId' => [ 'type' => 'string', 'locationName' => 'apiGroupId', ],
                'revision' => [ 'type' => 'string', 'locationName' => 'revision', ],
            ],
        ],
        'CreateApiGroupRequestShape' => [
            'type' => 'structure',
            'members' => [
                'groupName' => [ 'type' => 'string', 'locationName' => 'groupName', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'prefix' => [ 'type' => 'string', 'locationName' => 'prefix', ],
                'keyCheck' => [ 'type' => 'string', 'locationName' => 'keyCheck', ],
                'authType' => [ 'type' => 'string', 'locationName' => 'authType', ],
                'prefixStrip' => [ 'type' => 'integer', 'locationName' => 'prefixStrip', ],
                'groupType' => [ 'type' => 'string', 'locationName' => 'groupType', ],
                'jdsfName' => [ 'type' => 'string', 'locationName' => 'jdsfName', ],
                'jdsfRegistryName' => [ 'type' => 'string', 'locationName' => 'jdsfRegistryName', ],
                'jdsfId' => [ 'type' => 'string', 'locationName' => 'jdsfId', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'CreateApiGroupResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'CreateApiGroupResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeApiGroupRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'apiGroupId' => [ 'type' => 'string', 'locationName' => 'apiGroupId', ],
            ],
        ],
        'DeleteApiGroupRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'apiGroupId' => [ 'type' => 'string', 'locationName' => 'apiGroupId', ],
            ],
        ],
        'ModifyApiGroupAttributeResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'CheckGroupNameExistRequestShape' => [
            'type' => 'structure',
            'members' => [
                'groupName' => [ 'type' => 'string', 'locationName' => 'groupName', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'ModifyApiGroupAttributeResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeApiGroupResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeApiGroupResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeIsDeployApiGroupsResultShape' => [
            'type' => 'structure',
            'members' => [
                'apiGroups' => [ 'type' => 'list', 'member' => [ 'shape' => 'ApiGroup', ], ],
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
            ],
        ],
        'ModifyApiGroupAttributeRequestShape' => [
            'type' => 'structure',
            'members' => [
                'groupName' => [ 'type' => 'string', 'locationName' => 'groupName', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'prefix' => [ 'type' => 'string', 'locationName' => 'prefix', ],
                'keyCheck' => [ 'type' => 'string', 'locationName' => 'keyCheck', ],
                'authType' => [ 'type' => 'string', 'locationName' => 'authType', ],
                'prefixStrip' => [ 'type' => 'integer', 'locationName' => 'prefixStrip', ],
                'groupType' => [ 'type' => 'string', 'locationName' => 'groupType', ],
                'jdsfName' => [ 'type' => 'string', 'locationName' => 'jdsfName', ],
                'jdsfRegistryName' => [ 'type' => 'string', 'locationName' => 'jdsfRegistryName', ],
                'jdsfId' => [ 'type' => 'string', 'locationName' => 'jdsfId', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'apiGroupId' => [ 'type' => 'string', 'locationName' => 'apiGroupId', ],
            ],
        ],
        'CheckGroupNameExistResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'CheckGroupNameExistResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeApiGroupResultShape' => [
            'type' => 'structure',
            'members' => [
                'apiGroup' =>  [ 'shape' => 'ApiGroup', ],
            ],
        ],
        'DescribeApiGroupsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'filters' => [ 'type' => 'list', 'member' => [ 'shape' => 'Filter', ], ],
                'tagFilters' => [ 'type' => 'list', 'member' => [ 'shape' => 'TagFilter', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DescribeApiGroupsResultShape' => [
            'type' => 'structure',
            'members' => [
                'apiGroups' => [ 'type' => 'list', 'member' => [ 'shape' => 'ApiGroup', ], ],
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
            ],
        ],
        'DescribeApiGroupsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeApiGroupsResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DeleteApiGroupResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'CheckGroupNameExistResultShape' => [
            'type' => 'structure',
            'members' => [
                'apiGroupId' => [ 'type' => 'string', 'locationName' => 'apiGroupId', ],
            ],
        ],
        'DescribeIsDeployApiGroupsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'filters' => [ 'type' => 'list', 'member' => [ 'shape' => 'Filter', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'CreateApiGroupResultShape' => [
            'type' => 'structure',
            'members' => [
                'apiGroupId' => [ 'type' => 'string', 'locationName' => 'apiGroupId', ],
                'revision' => [ 'type' => 'string', 'locationName' => 'revision', ],
            ],
        ],
        'DeleteApiGroupResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DescribeIsDeployApiGroupsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeIsDeployApiGroupsResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'CreateBackendConfigResultShape' => [
            'type' => 'structure',
            'members' => [
                'backendConfigId' => [ 'type' => 'string', 'locationName' => 'backendConfigId', ],
            ],
        ],
        'UpdateBackendConfigRequestShape' => [
            'type' => 'structure',
            'members' => [
                'baseGroupId' => [ 'type' => 'string', 'locationName' => 'baseGroupId', ],
                'environment' => [ 'type' => 'string', 'locationName' => 'environment', ],
                'backendUrl' => [ 'type' => 'string', 'locationName' => 'backendUrl', ],
                'backendServiceType' => [ 'type' => 'string', 'locationName' => 'backendServiceType', ],
                'headerParams' => [ 'type' => 'list', 'member' => [ 'shape' => 'SimpleParameter', ], ],
                'queryParams' => [ 'type' => 'list', 'member' => [ 'shape' => 'SimpleParameter', ], ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'createTime' => [ 'type' => 'long', 'locationName' => 'createTime', ],
                'sort' => [ 'type' => 'integer', 'locationName' => 'sort', ],
                'userSort' => [ 'type' => 'integer', 'locationName' => 'userSort', ],
                'jdsfId' => [ 'type' => 'string', 'locationName' => 'jdsfId', ],
                'jdsfParam' => [ 'type' => 'string', 'locationName' => 'jdsfParam', ],
                'jdsfRegion' => [ 'type' => 'string', 'locationName' => 'jdsfRegion', ],
                'jdsfPin' => [ 'type' => 'string', 'locationName' => 'jdsfPin', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'apiGroupId' => [ 'type' => 'string', 'locationName' => 'apiGroupId', ],
                'backendConfigId' => [ 'type' => 'string', 'locationName' => 'backendConfigId', ],
            ],
        ],
        'DeleteBackendConfigRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'apiGroupId' => [ 'type' => 'string', 'locationName' => 'apiGroupId', ],
                'backendConfigId' => [ 'type' => 'string', 'locationName' => 'backendConfigId', ],
            ],
        ],
        'DescribeBackendConfigRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'apiGroupId' => [ 'type' => 'string', 'locationName' => 'apiGroupId', ],
                'backendConfigId' => [ 'type' => 'string', 'locationName' => 'backendConfigId', ],
            ],
        ],
        'UpdateBackendConfigResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'CreateBackendConfigRequestShape' => [
            'type' => 'structure',
            'members' => [
                'backendConfigId' => [ 'type' => 'string', 'locationName' => 'backendConfigId', ],
                'baseGroupId' => [ 'type' => 'string', 'locationName' => 'baseGroupId', ],
                'environment' => [ 'type' => 'string', 'locationName' => 'environment', ],
                'backendUrl' => [ 'type' => 'string', 'locationName' => 'backendUrl', ],
                'backendServiceType' => [ 'type' => 'string', 'locationName' => 'backendServiceType', ],
                'headerParams' => [ 'type' => 'list', 'member' => [ 'shape' => 'SimpleParameter', ], ],
                'queryParams' => [ 'type' => 'list', 'member' => [ 'shape' => 'SimpleParameter', ], ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'createTime' => [ 'type' => 'long', 'locationName' => 'createTime', ],
                'sort' => [ 'type' => 'integer', 'locationName' => 'sort', ],
                'userSort' => [ 'type' => 'integer', 'locationName' => 'userSort', ],
                'jdsfId' => [ 'type' => 'string', 'locationName' => 'jdsfId', ],
                'jdsfParam' => [ 'type' => 'string', 'locationName' => 'jdsfParam', ],
                'jdsfRegion' => [ 'type' => 'string', 'locationName' => 'jdsfRegion', ],
                'jdsfPin' => [ 'type' => 'string', 'locationName' => 'jdsfPin', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'apiGroupId' => [ 'type' => 'string', 'locationName' => 'apiGroupId', ],
            ],
        ],
        'DescribeBackendConfigsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'filters' => [ 'type' => 'list', 'member' => [ 'shape' => 'Filter', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'apiGroupId' => [ 'type' => 'string', 'locationName' => 'apiGroupId', ],
                'environment' => [ 'type' => 'string', 'locationName' => 'environment', ],
            ],
        ],
        'DescribeBackendConfigsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeBackendConfigsResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeBackendConfigsResultShape' => [
            'type' => 'structure',
            'members' => [
                'backendConfigs' => [ 'type' => 'list', 'member' => [ 'shape' => 'BackendConfig', ], ],
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
            ],
        ],
        'DeleteBackendConfigResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeBackendConfigResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeBackendConfigResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DeleteBackendConfigResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'UpdateBackendConfigResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DescribeBackendConfigResultShape' => [
            'type' => 'structure',
            'members' => [
                'backendConfig' =>  [ 'shape' => 'BackendConfig', ],
            ],
        ],
        'CreateBackendConfigResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'CreateBackendConfigResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeDeploymentsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'filters' => [ 'type' => 'list', 'member' => [ 'shape' => 'Filter', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'apiGroupId' => [ 'type' => 'string', 'locationName' => 'apiGroupId', ],
            ],
        ],
        'DeployRequestShape' => [
            'type' => 'structure',
            'members' => [
                'revision' => [ 'type' => 'string', 'locationName' => 'revision', ],
                'environment' => [ 'type' => 'string', 'locationName' => 'environment', ],
                'backendServiceType' => [ 'type' => 'string', 'locationName' => 'backendServiceType', ],
                'backendUrl' => [ 'type' => 'string', 'locationName' => 'backendUrl', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'jdsfName' => [ 'type' => 'string', 'locationName' => 'jdsfName', ],
                'jdsfRegistryName' => [ 'type' => 'string', 'locationName' => 'jdsfRegistryName', ],
                'jdsfId' => [ 'type' => 'string', 'locationName' => 'jdsfId', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'apiGroupId' => [ 'type' => 'string', 'locationName' => 'apiGroupId', ],
            ],
        ],
        'DescribeDeploymentResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeDeploymentResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeDeploymentRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'apiGroupId' => [ 'type' => 'string', 'locationName' => 'apiGroupId', ],
                'deploymentId' => [ 'type' => 'string', 'locationName' => 'deploymentId', ],
            ],
        ],
        'BatchOfflineResultShape' => [
            'type' => 'structure',
            'members' => [
                'successCount' => [ 'type' => 'integer', 'locationName' => 'successCount', ],
                'failed' => [ 'type' => 'list', 'member' => [ 'shape' => 'ErrorItem', ], ],
            ],
        ],
        'DeployResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'OfflineResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DeployResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'BatchOfflineResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'BatchOfflineResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'OfflineResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DescribeDeploymentsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeDeploymentsResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeDeploymentResultShape' => [
            'type' => 'structure',
            'members' => [
                'deploymentId' => [ 'type' => 'string', 'locationName' => 'deploymentId', ],
                'revision' => [ 'type' => 'string', 'locationName' => 'revision', ],
                'path' => [ 'type' => 'string', 'locationName' => 'path', ],
                'environment' => [ 'type' => 'string', 'locationName' => 'environment', ],
                'backendServiceType' => [ 'type' => 'string', 'locationName' => 'backendServiceType', ],
                'backendUrl' => [ 'type' => 'string', 'locationName' => 'backendUrl', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'createTime' => [ 'type' => 'long', 'locationName' => 'createTime', ],
                'jdsfName' => [ 'type' => 'string', 'locationName' => 'jdsfName', ],
                'jdsfRegistryName' => [ 'type' => 'string', 'locationName' => 'jdsfRegistryName', ],
                'jdsfId' => [ 'type' => 'string', 'locationName' => 'jdsfId', ],
            ],
        ],
        'DescribeDeploymentsResultShape' => [
            'type' => 'structure',
            'members' => [
                'deployments' => [ 'type' => 'list', 'member' => [ 'shape' => 'Deployment', ], ],
            ],
        ],
        'BatchOfflineRequestShape' => [
            'type' => 'structure',
            'members' => [
                'deploymentIds' => [ 'type' => 'string', 'locationName' => 'deploymentIds', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'apiGroupId' => [ 'type' => 'string', 'locationName' => 'apiGroupId', ],
            ],
        ],
        'OfflineRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'apiGroupId' => [ 'type' => 'string', 'locationName' => 'apiGroupId', ],
                'deploymentId' => [ 'type' => 'string', 'locationName' => 'deploymentId', ],
            ],
        ],
        'UpdateKeyResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'ResetKeyRequestShape' => [
            'type' => 'structure',
            'members' => [
                'keyId' => [ 'type' => 'string', 'locationName' => 'keyId', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'QueryKeyInfoResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'QueryKeyInfoResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'QueryKeysResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'QueryKeysResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'QueryKeysResultShape' => [
            'type' => 'structure',
            'members' => [
                'total' => [ 'type' => 'integer', 'locationName' => 'total', ],
                'data' => [ 'type' => 'list', 'member' => [ 'shape' => 'KeyInfo', ], ],
            ],
        ],
        'ResetKeyResultShape' => [
            'type' => 'structure',
            'members' => [
                'keyInfo' =>  [ 'shape' => 'KeyInfo', ],
            ],
        ],
        'QueryKeysRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'orderBy' => [ 'type' => 'string', 'locationName' => 'orderBy', ],
                'userType' => [ 'type' => 'string', 'locationName' => 'userType', ],
                'keyId' => [ 'type' => 'string', 'locationName' => 'keyId', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'QueryKeyInfoResultShape' => [
            'type' => 'structure',
            'members' => [
                'keyInfo' =>  [ 'shape' => 'KeyInfo', ],
            ],
        ],
        'CreateKeyResultShape' => [
            'type' => 'structure',
            'members' => [
                'accessKey' => [ 'type' => 'string', 'locationName' => 'accessKey', ],
                'secretKey' => [ 'type' => 'string', 'locationName' => 'secretKey', ],
            ],
        ],
        'CreateKeyRequestShape' => [
            'type' => 'structure',
            'members' => [
                'keyName' => [ 'type' => 'string', 'locationName' => 'keyName', ],
                'keyDesc' => [ 'type' => 'string', 'locationName' => 'keyDesc', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'QueryKeyInfoRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'keyId' => [ 'type' => 'string', 'locationName' => 'keyId', ],
            ],
        ],
        'UpdateKeyRequestShape' => [
            'type' => 'structure',
            'members' => [
                'keyId' => [ 'type' => 'string', 'locationName' => 'keyId', ],
                'keyName' => [ 'type' => 'string', 'locationName' => 'keyName', ],
                'keyDesc' => [ 'type' => 'string', 'locationName' => 'keyDesc', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'CreateKeyResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'CreateKeyResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ResetKeyResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'ResetKeyResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'UpdateKeyResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'QueryPolicyGroupListRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'policyId' => [ 'type' => 'string', 'locationName' => 'policyId', ],
            ],
        ],
        'CreateRateLimitPolicyRequestShape' => [
            'type' => 'structure',
            'members' => [
                'rateLimitPolicyView' =>  [ 'shape' => 'RateLimitPolicyView', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DeleteRateLimitPolicyRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'policyId' => [ 'type' => 'string', 'locationName' => 'policyId', ],
            ],
        ],
        'QueryBindGroupPolicyResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'QueryBindGroupPolicyResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'QueryRateLimitPolicyResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'QueryRateLimitPolicyResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'BindGroupPolicyResultShape' => [
            'type' => 'structure',
            'members' => [
                'bindGroups' => [ 'type' => 'list', 'member' => [ 'shape' => 'BindGroups', ], ],
            ],
        ],
        'QueryRateLimitPoliciesResultShape' => [
            'type' => 'structure',
            'members' => [
                'rateLimitPolicys' => [ 'type' => 'list', 'member' => [ 'shape' => 'RateLimitPolicy', ], ],
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
            ],
        ],
        'DeleteRateLimitPolicyResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DeleteRateLimitPolicyResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'UpdateRateLimitPolicyResultShape' => [
            'type' => 'structure',
            'members' => [
                'policyId' => [ 'type' => 'string', 'locationName' => 'policyId', ],
            ],
        ],
        'CreateRateLimitPolicyResultShape' => [
            'type' => 'structure',
            'members' => [
                'policyId' => [ 'type' => 'string', 'locationName' => 'policyId', ],
            ],
        ],
        'CheckPolicyNameRequestShape' => [
            'type' => 'structure',
            'members' => [
                'policyName' => [ 'type' => 'string', 'locationName' => 'policyName', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'QueryPolicyGroupListResultShape' => [
            'type' => 'structure',
            'members' => [
                'bindGroups' => [ 'type' => 'list', 'member' => [ 'shape' => 'BindGroups', ], ],
            ],
        ],
        'BindGroupPolicyRequestShape' => [
            'type' => 'structure',
            'members' => [
                'deploymentIds' => [ 'type' => 'string', 'locationName' => 'deploymentIds', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'policyId' => [ 'type' => 'string', 'locationName' => 'policyId', ],
            ],
        ],
        'DeleteRateLimitPolicyResultShape' => [
            'type' => 'structure',
            'members' => [
                'policyId' => [ 'type' => 'string', 'locationName' => 'policyId', ],
            ],
        ],
        'UpdateRateLimitPolicyResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'UpdateRateLimitPolicyResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'QueryBindGroupPolicyResultShape' => [
            'type' => 'structure',
            'members' => [
                'bindGroups' => [ 'type' => 'list', 'member' => [ 'shape' => 'BindGroups', ], ],
            ],
        ],
        'QueryPolicyGroupListResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'QueryPolicyGroupListResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'QueryRateLimitPoliciesRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'filters' => [ 'type' => 'list', 'member' => [ 'shape' => 'Filter', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'QueryRateLimitPoliciesResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'QueryRateLimitPoliciesResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'QueryRateLimitPolicyRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'policyId' => [ 'type' => 'string', 'locationName' => 'policyId', ],
            ],
        ],
        'UpdateRateLimitPolicyRequestShape' => [
            'type' => 'structure',
            'members' => [
                'rateLimitPolicyView' =>  [ 'shape' => 'RateLimitPolicyView', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'policyId' => [ 'type' => 'string', 'locationName' => 'policyId', ],
            ],
        ],
        'CheckPolicyNameResultShape' => [
            'type' => 'structure',
            'members' => [
                'policyId' => [ 'type' => 'string', 'locationName' => 'policyId', ],
            ],
        ],
        'CheckPolicyNameResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'CheckPolicyNameResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'QueryRateLimitPolicyResultShape' => [
            'type' => 'structure',
            'members' => [
                'rateLimitPolicy' =>  [ 'shape' => 'RateLimitPolicy', ],
            ],
        ],
        'QueryBindGroupPolicyRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'policyId' => [ 'type' => 'string', 'locationName' => 'policyId', ],
            ],
        ],
        'CreateRateLimitPolicyResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'CreateRateLimitPolicyResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'BindGroupPolicyResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'BindGroupPolicyResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'CreateRevisionRequestShape' => [
            'type' => 'structure',
            'members' => [
                'revision' => [ 'type' => 'string', 'locationName' => 'revision', ],
                'baseRevision' => [ 'type' => 'string', 'locationName' => 'baseRevision', ],
                'revisionNote' => [ 'type' => 'string', 'locationName' => 'revisionNote', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'apiGroupId' => [ 'type' => 'string', 'locationName' => 'apiGroupId', ],
            ],
        ],
        'DescribeRevisionsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeRevisionsResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'GetRevisionIdsResultShape' => [
            'type' => 'structure',
            'members' => [
                'revisions' => [ 'type' => 'list', 'member' => [ 'shape' => 'RevisionList', ], ],
            ],
        ],
        'ModifyRevisionResultShape' => [
            'type' => 'structure',
            'members' => [
                'updateRevision' => [ 'type' => 'boolean', 'locationName' => 'updateRevision', ],
            ],
        ],
        'QueryRevisionResultShape' => [
            'type' => 'structure',
            'members' => [
                'apis' => [ 'type' => 'list', 'member' => [ 'shape' => 'Api', ], ],
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
            ],
        ],
        'GetRevisionIdsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'apiGroupId' => [ 'type' => 'string', 'locationName' => 'apiGroupId', ],
            ],
        ],
        'GetRevisionIdsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GetRevisionIdsResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'CheckRevisionExistResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'CheckRevisionExistResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DeleteRevisionResultShape' => [
            'type' => 'structure',
            'members' => [
                'deleteRevision' => [ 'type' => 'boolean', 'locationName' => 'deleteRevision', ],
            ],
        ],
        'QueryRevisionRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'filters' => [ 'type' => 'list', 'member' => [ 'shape' => 'Filter', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'apiGroupId' => [ 'type' => 'string', 'locationName' => 'apiGroupId', ],
                'revisionId' => [ 'type' => 'string', 'locationName' => 'revisionId', ],
            ],
        ],
        'DescribeRevisionsResultShape' => [
            'type' => 'structure',
            'members' => [
                'revisions' => [ 'type' => 'list', 'member' => [ 'shape' => 'RevisionList', ], ],
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
            ],
        ],
        'ModifyRevisionRequestShape' => [
            'type' => 'structure',
            'members' => [
                'revisionNote' => [ 'type' => 'string', 'locationName' => 'revisionNote', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'apiGroupId' => [ 'type' => 'string', 'locationName' => 'apiGroupId', ],
                'revisionId' => [ 'type' => 'string', 'locationName' => 'revisionId', ],
            ],
        ],
        'DeleteRevisionResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DeleteRevisionResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'CreateRevisionResultShape' => [
            'type' => 'structure',
            'members' => [
                'revision' => [ 'type' => 'string', 'locationName' => 'revision', ],
            ],
        ],
        'CheckRevisionExistResultShape' => [
            'type' => 'structure',
            'members' => [
                'isRepeate' => [ 'type' => 'boolean', 'locationName' => 'isRepeate', ],
            ],
        ],
        'DescribeRevisionsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'filters' => [ 'type' => 'list', 'member' => [ 'shape' => 'Filter', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'apiGroupId' => [ 'type' => 'string', 'locationName' => 'apiGroupId', ],
            ],
        ],
        'ModifyRevisionResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'ModifyRevisionResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'CheckRevisionExistRequestShape' => [
            'type' => 'structure',
            'members' => [
                'revision' => [ 'type' => 'string', 'locationName' => 'revision', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'apiGroupId' => [ 'type' => 'string', 'locationName' => 'apiGroupId', ],
            ],
        ],
        'CreateRevisionResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'CreateRevisionResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DeleteRevisionRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'apiGroupId' => [ 'type' => 'string', 'locationName' => 'apiGroupId', ],
                'revisionId' => [ 'type' => 'string', 'locationName' => 'revisionId', ],
            ],
        ],
        'QueryRevisionResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'QueryRevisionResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'CreateSubscriptionKeyRequestShape' => [
            'type' => 'structure',
            'members' => [
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DeleteSubscriptionKeyResultShape' => [
            'type' => 'structure',
            'members' => [
                'subscriptionKeyId' => [ 'type' => 'string', 'locationName' => 'subscriptionKeyId', ],
            ],
        ],
        'CreateSubscriptionKeyResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'CreateSubscriptionKeyResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'QuerySubscriptionKeysResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'QuerySubscriptionKeysResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DeleteSubscriptionKeyRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'subscriptionKeyId' => [ 'type' => 'string', 'locationName' => 'subscriptionKeyId', ],
            ],
        ],
        'UpdateSubscriptionKeyResultShape' => [
            'type' => 'structure',
            'members' => [
                'subscriptionKeyId' => [ 'type' => 'string', 'locationName' => 'subscriptionKeyId', ],
            ],
        ],
        'QuerySubscriptionKeysRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'filters' => [ 'type' => 'list', 'member' => [ 'shape' => 'Filter', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'QuerySubscriptionKeyRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'subscriptionKeyId' => [ 'type' => 'string', 'locationName' => 'subscriptionKeyId', ],
            ],
        ],
        'QuerySubscriptionKeyResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'QuerySubscriptionKeyResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'QuerySubscriptionKeyResultShape' => [
            'type' => 'structure',
            'members' => [
                'subscriptionKey' =>  [ 'shape' => 'SubscriptionKey', ],
            ],
        ],
        'UpdateSubscriptionKeyRequestShape' => [
            'type' => 'structure',
            'members' => [
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'subscriptionKeyId' => [ 'type' => 'string', 'locationName' => 'subscriptionKeyId', ],
            ],
        ],
        'QuerySubscriptionKeysResultShape' => [
            'type' => 'structure',
            'members' => [
                'subscriptionKeys' => [ 'type' => 'list', 'member' => [ 'shape' => 'SubscriptionKey', ], ],
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
            ],
        ],
        'DeleteSubscriptionKeyResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DeleteSubscriptionKeyResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'CreateSubscriptionKeyResultShape' => [
            'type' => 'structure',
            'members' => [
                'subscriptionKeyId' => [ 'type' => 'string', 'locationName' => 'subscriptionKeyId', ],
            ],
        ],
        'UpdateSubscriptionKeyResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'UpdateSubscriptionKeyResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'QueryUcAccessKeysRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'filters' => [ 'type' => 'list', 'member' => [ 'shape' => 'Filter', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'QueryUcAccessKeysResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'QueryUcAccessKeysResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'QueryUcAccessKeysResultShape' => [
            'type' => 'structure',
            'members' => [
                'accessKeys' => [ 'type' => 'list', 'member' => [ 'shape' => 'UcAccessKey', ], ],
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
            ],
        ],
        'CheckPinResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'CheckPinRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'pin' => [ 'type' => 'string', 'locationName' => 'pin', ],
            ],
        ],
        'CheckPinResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'CreateUserDomainRequestShape' => [
            'type' => 'structure',
            'members' => [
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
                'protocol' => [ 'type' => 'string', 'locationName' => 'protocol', ],
                'apiGroupId' => [ 'type' => 'string', 'locationName' => 'apiGroupId', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'QueryUserDomainsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'QueryUserDomainsResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'CreateUserDomainResultShape' => [
            'type' => 'structure',
            'members' => [
                'domainId' => [ 'type' => 'string', 'locationName' => 'domainId', ],
            ],
        ],
        'QueryUserDomainsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'orderBy' => [ 'type' => 'string', 'locationName' => 'orderBy', ],
                'apiGroupId' => [ 'type' => 'string', 'locationName' => 'apiGroupId', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DeleteUserDomainRequestShape' => [
            'type' => 'structure',
            'members' => [
                'domainIds' => [ 'type' => 'string', 'locationName' => 'domainIds', ],
                'apiGroupId' => [ 'type' => 'string', 'locationName' => 'apiGroupId', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DeleteUserDomainResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DeleteUserDomainResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'CreateUserDomainResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'CreateUserDomainResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'QueryUserDomainsResultShape' => [
            'type' => 'structure',
            'members' => [
                'total' => [ 'type' => 'integer', 'locationName' => 'total', ],
                'data' => [ 'type' => 'list', 'member' => [ 'shape' => 'DomainInfo', ], ],
            ],
        ],
    ],
];
