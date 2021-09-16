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
    ],
];
