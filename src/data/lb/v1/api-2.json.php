<?php
// This file was auto-generated
return [
//    'version' => '',
    'metadata' =>
    [
//        'apiVersion' => '',
//        'endpointPrefix' => 'lb',
        'protocol' => 'json',
//        'serviceFullName' => 'lb',
//        'serviceId' => 'lb',
    ],
    'operations' => [
        'DescribeBackends' => [
            'name' => 'DescribeBackends',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/backends/',
            ],
            'input' => [ 'shape' => 'DescribeBackendsRequestShape', ],
            'output' => [ 'shape' => 'DescribeBackendsResponseShape', ],
        ],
        'CreateBackend' => [
            'name' => 'CreateBackend',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/backends/',
            ],
            'input' => [ 'shape' => 'CreateBackendRequestShape', ],
            'output' => [ 'shape' => 'CreateBackendResponseShape', ],
        ],
        'DescribeBackend' => [
            'name' => 'DescribeBackend',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/backends/{backendId}',
            ],
            'input' => [ 'shape' => 'DescribeBackendRequestShape', ],
            'output' => [ 'shape' => 'DescribeBackendResponseShape', ],
        ],
        'UpdateBackend' => [
            'name' => 'UpdateBackend',
            'http' => [
                'method' => 'PATCH',
                'requestUri' => '/v1/regions/{regionId}/backends/{backendId}',
            ],
            'input' => [ 'shape' => 'UpdateBackendRequestShape', ],
            'output' => [ 'shape' => 'UpdateBackendResponseShape', ],
        ],
        'DeleteBackend' => [
            'name' => 'DeleteBackend',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/regions/{regionId}/backends/{backendId}',
            ],
            'input' => [ 'shape' => 'DeleteBackendRequestShape', ],
            'output' => [ 'shape' => 'DeleteBackendResponseShape', ],
        ],
        'DescribeTargetHealth' => [
            'name' => 'DescribeTargetHealth',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/backends/{backendId}/health',
            ],
            'input' => [ 'shape' => 'DescribeTargetHealthRequestShape', ],
            'output' => [ 'shape' => 'DescribeTargetHealthResponseShape', ],
        ],
        'UpdateAgTargets' => [
            'name' => 'UpdateAgTargets',
            'http' => [
                'method' => 'PATCH',
                'requestUri' => '/v1/regions/{regionId}/backends/{backendId}:updateAgTargets',
            ],
            'input' => [ 'shape' => 'UpdateAgTargetsRequestShape', ],
            'output' => [ 'shape' => 'UpdateAgTargetsResponseShape', ],
        ],
        'DescribeAgTargets' => [
            'name' => 'DescribeAgTargets',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/backends/{backendId}/agTargets',
            ],
            'input' => [ 'shape' => 'DescribeAgTargetsRequestShape', ],
            'output' => [ 'shape' => 'DescribeAgTargetsResponseShape', ],
        ],
        'DescribeCustomizedConfigurations' => [
            'name' => 'DescribeCustomizedConfigurations',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/customizedConfigurations/',
            ],
            'input' => [ 'shape' => 'DescribeCustomizedConfigurationsRequestShape', ],
            'output' => [ 'shape' => 'DescribeCustomizedConfigurationsResponseShape', ],
        ],
        'CreateCustomizedConfiguration' => [
            'name' => 'CreateCustomizedConfiguration',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/customizedConfigurations/',
            ],
            'input' => [ 'shape' => 'CreateCustomizedConfigurationRequestShape', ],
            'output' => [ 'shape' => 'CreateCustomizedConfigurationResponseShape', ],
        ],
        'DescribeCustomizedConfiguration' => [
            'name' => 'DescribeCustomizedConfiguration',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/customizedConfigurations/{customizedConfigurationId}',
            ],
            'input' => [ 'shape' => 'DescribeCustomizedConfigurationRequestShape', ],
            'output' => [ 'shape' => 'DescribeCustomizedConfigurationResponseShape', ],
        ],
        'UpdateCustomizedConfiguration' => [
            'name' => 'UpdateCustomizedConfiguration',
            'http' => [
                'method' => 'PATCH',
                'requestUri' => '/v1/regions/{regionId}/customizedConfigurations/{customizedConfigurationId}',
            ],
            'input' => [ 'shape' => 'UpdateCustomizedConfigurationRequestShape', ],
            'output' => [ 'shape' => 'UpdateCustomizedConfigurationResponseShape', ],
        ],
        'DeleteCustomizedConfiguration' => [
            'name' => 'DeleteCustomizedConfiguration',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/regions/{regionId}/customizedConfigurations/{customizedConfigurationId}',
            ],
            'input' => [ 'shape' => 'DeleteCustomizedConfigurationRequestShape', ],
            'output' => [ 'shape' => 'DeleteCustomizedConfigurationResponseShape', ],
        ],
        'AssociateCustomizedConfiguration' => [
            'name' => 'AssociateCustomizedConfiguration',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/customizedConfigurations/{customizedConfigurationId}:associateCustomizedConfiguration',
            ],
            'input' => [ 'shape' => 'AssociateCustomizedConfigurationRequestShape', ],
            'output' => [ 'shape' => 'AssociateCustomizedConfigurationResponseShape', ],
        ],
        'DisassociateCustomizedConfiguration' => [
            'name' => 'DisassociateCustomizedConfiguration',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/customizedConfigurations/{customizedConfigurationId}:disassociateCustomizedConfiguration',
            ],
            'input' => [ 'shape' => 'DisassociateCustomizedConfigurationRequestShape', ],
            'output' => [ 'shape' => 'DisassociateCustomizedConfigurationResponseShape', ],
        ],
        'DescribeListeners' => [
            'name' => 'DescribeListeners',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/listeners/',
            ],
            'input' => [ 'shape' => 'DescribeListenersRequestShape', ],
            'output' => [ 'shape' => 'DescribeListenersResponseShape', ],
        ],
        'CreateListener' => [
            'name' => 'CreateListener',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/listeners/',
            ],
            'input' => [ 'shape' => 'CreateListenerRequestShape', ],
            'output' => [ 'shape' => 'CreateListenerResponseShape', ],
        ],
        'DescribeListener' => [
            'name' => 'DescribeListener',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/listeners/{listenerId}',
            ],
            'input' => [ 'shape' => 'DescribeListenerRequestShape', ],
            'output' => [ 'shape' => 'DescribeListenerResponseShape', ],
        ],
        'UpdateListener' => [
            'name' => 'UpdateListener',
            'http' => [
                'method' => 'PATCH',
                'requestUri' => '/v1/regions/{regionId}/listeners/{listenerId}',
            ],
            'input' => [ 'shape' => 'UpdateListenerRequestShape', ],
            'output' => [ 'shape' => 'UpdateListenerResponseShape', ],
        ],
        'DeleteListener' => [
            'name' => 'DeleteListener',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/regions/{regionId}/listeners/{listenerId}',
            ],
            'input' => [ 'shape' => 'DeleteListenerRequestShape', ],
            'output' => [ 'shape' => 'DeleteListenerResponseShape', ],
        ],
        'AddListenerCertificates' => [
            'name' => 'AddListenerCertificates',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/listeners/{listenerId}:addListenerCertificates',
            ],
            'input' => [ 'shape' => 'AddListenerCertificatesRequestShape', ],
            'output' => [ 'shape' => 'AddListenerCertificatesResponseShape', ],
        ],
        'UpdateListenerCertificates' => [
            'name' => 'UpdateListenerCertificates',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/listeners/{listenerId}:updateListenerCertificates',
            ],
            'input' => [ 'shape' => 'UpdateListenerCertificatesRequestShape', ],
            'output' => [ 'shape' => 'UpdateListenerCertificatesResponseShape', ],
        ],
        'DeleteListenerCertificates' => [
            'name' => 'DeleteListenerCertificates',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/listeners/{listenerId}:deleteListenerCertificates',
            ],
            'input' => [ 'shape' => 'DeleteListenerCertificatesRequestShape', ],
            'output' => [ 'shape' => 'DeleteListenerCertificatesResponseShape', ],
        ],
        'DescribeLoadBalancers' => [
            'name' => 'DescribeLoadBalancers',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/loadBalancers/',
            ],
            'input' => [ 'shape' => 'DescribeLoadBalancersRequestShape', ],
            'output' => [ 'shape' => 'DescribeLoadBalancersResponseShape', ],
        ],
        'CreateLoadBalancer' => [
            'name' => 'CreateLoadBalancer',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/loadBalancers/',
            ],
            'input' => [ 'shape' => 'CreateLoadBalancerRequestShape', ],
            'output' => [ 'shape' => 'CreateLoadBalancerResponseShape', ],
        ],
        'DescribeLoadBalancer' => [
            'name' => 'DescribeLoadBalancer',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/loadBalancers/{loadBalancerId}',
            ],
            'input' => [ 'shape' => 'DescribeLoadBalancerRequestShape', ],
            'output' => [ 'shape' => 'DescribeLoadBalancerResponseShape', ],
        ],
        'UpdateLoadBalancer' => [
            'name' => 'UpdateLoadBalancer',
            'http' => [
                'method' => 'PATCH',
                'requestUri' => '/v1/regions/{regionId}/loadBalancers/{loadBalancerId}',
            ],
            'input' => [ 'shape' => 'UpdateLoadBalancerRequestShape', ],
            'output' => [ 'shape' => 'UpdateLoadBalancerResponseShape', ],
        ],
        'DeleteLoadBalancer' => [
            'name' => 'DeleteLoadBalancer',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/regions/{regionId}/loadBalancers/{loadBalancerId}',
            ],
            'input' => [ 'shape' => 'DeleteLoadBalancerRequestShape', ],
            'output' => [ 'shape' => 'DeleteLoadBalancerResponseShape', ],
        ],
        'DescribeLoadBalancersBySecurityGroup' => [
            'name' => 'DescribeLoadBalancersBySecurityGroup',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/loadBalancers/{securityGroupId}:describeLoadBalancersBySecurityGroup',
            ],
            'input' => [ 'shape' => 'DescribeLoadBalancersBySecurityGroupRequestShape', ],
            'output' => [ 'shape' => 'DescribeLoadBalancersBySecurityGroupResponseShape', ],
        ],
        'AssociateElasticIp' => [
            'name' => 'AssociateElasticIp',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/loadBalancers/{loadBalancerId}:associateElasticIp',
            ],
            'input' => [ 'shape' => 'AssociateElasticIpRequestShape', ],
            'output' => [ 'shape' => 'AssociateElasticIpResponseShape', ],
        ],
        'DisassociateElasticIp' => [
            'name' => 'DisassociateElasticIp',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/loadBalancers/{loadBalancerId}:disassociateElasticIp',
            ],
            'input' => [ 'shape' => 'DisassociateElasticIpRequestShape', ],
            'output' => [ 'shape' => 'DisassociateElasticIpResponseShape', ],
        ],
        'AssociateSecurityGroup' => [
            'name' => 'AssociateSecurityGroup',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/loadBalancers/{loadBalancerId}:associateSecurityGroup',
            ],
            'input' => [ 'shape' => 'AssociateSecurityGroupRequestShape', ],
            'output' => [ 'shape' => 'AssociateSecurityGroupResponseShape', ],
        ],
        'DisassociateSecurityGroup' => [
            'name' => 'DisassociateSecurityGroup',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/loadBalancers/{loadBalancerId}:disassociateSecurityGroup',
            ],
            'input' => [ 'shape' => 'DisassociateSecurityGroupRequestShape', ],
            'output' => [ 'shape' => 'DisassociateSecurityGroupResponseShape', ],
        ],
        'DescribeSecurityPolicies' => [
            'name' => 'DescribeSecurityPolicies',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/securityPolicies/',
            ],
            'input' => [ 'shape' => 'DescribeSecurityPoliciesRequestShape', ],
            'output' => [ 'shape' => 'DescribeSecurityPoliciesResponseShape', ],
        ],
        'CreateSecurityPolicy' => [
            'name' => 'CreateSecurityPolicy',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/securityPolicies/',
            ],
            'input' => [ 'shape' => 'CreateSecurityPolicyRequestShape', ],
            'output' => [ 'shape' => 'CreateSecurityPolicyResponseShape', ],
        ],
        'DescribeSecurityPolicy' => [
            'name' => 'DescribeSecurityPolicy',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/securityPolicies/{securityPolicyId}',
            ],
            'input' => [ 'shape' => 'DescribeSecurityPolicyRequestShape', ],
            'output' => [ 'shape' => 'DescribeSecurityPolicyResponseShape', ],
        ],
        'UpdateSecurityPolicy' => [
            'name' => 'UpdateSecurityPolicy',
            'http' => [
                'method' => 'PATCH',
                'requestUri' => '/v1/regions/{regionId}/securityPolicies/{securityPolicyId}',
            ],
            'input' => [ 'shape' => 'UpdateSecurityPolicyRequestShape', ],
            'output' => [ 'shape' => 'UpdateSecurityPolicyResponseShape', ],
        ],
        'DeleteSecurityPolicy' => [
            'name' => 'DeleteSecurityPolicy',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/regions/{regionId}/securityPolicies/{securityPolicyId}',
            ],
            'input' => [ 'shape' => 'DeleteSecurityPolicyRequestShape', ],
            'output' => [ 'shape' => 'DeleteSecurityPolicyResponseShape', ],
        ],
        'DescribeSupportedCiphers' => [
            'name' => 'DescribeSupportedCiphers',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/supportedCiphers/',
            ],
            'input' => [ 'shape' => 'DescribeSupportedCiphersRequestShape', ],
            'output' => [ 'shape' => 'DescribeSupportedCiphersResponseShape', ],
        ],
        'DescribeTargetGroups' => [
            'name' => 'DescribeTargetGroups',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/targetGroups/',
            ],
            'input' => [ 'shape' => 'DescribeTargetGroupsRequestShape', ],
            'output' => [ 'shape' => 'DescribeTargetGroupsResponseShape', ],
        ],
        'CreateTargetGroup' => [
            'name' => 'CreateTargetGroup',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/targetGroups/',
            ],
            'input' => [ 'shape' => 'CreateTargetGroupRequestShape', ],
            'output' => [ 'shape' => 'CreateTargetGroupResponseShape', ],
        ],
        'DescribeTargetGroup' => [
            'name' => 'DescribeTargetGroup',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/targetGroups/{targetGroupId}',
            ],
            'input' => [ 'shape' => 'DescribeTargetGroupRequestShape', ],
            'output' => [ 'shape' => 'DescribeTargetGroupResponseShape', ],
        ],
        'UpdateTargetGroup' => [
            'name' => 'UpdateTargetGroup',
            'http' => [
                'method' => 'PATCH',
                'requestUri' => '/v1/regions/{regionId}/targetGroups/{targetGroupId}',
            ],
            'input' => [ 'shape' => 'UpdateTargetGroupRequestShape', ],
            'output' => [ 'shape' => 'UpdateTargetGroupResponseShape', ],
        ],
        'DeleteTargetGroup' => [
            'name' => 'DeleteTargetGroup',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/regions/{regionId}/targetGroups/{targetGroupId}',
            ],
            'input' => [ 'shape' => 'DeleteTargetGroupRequestShape', ],
            'output' => [ 'shape' => 'DeleteTargetGroupResponseShape', ],
        ],
        'RegisterTargets' => [
            'name' => 'RegisterTargets',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/targetGroups/{targetGroupId}:registerTargets',
            ],
            'input' => [ 'shape' => 'RegisterTargetsRequestShape', ],
            'output' => [ 'shape' => 'RegisterTargetsResponseShape', ],
        ],
        'DeRegisterTargets' => [
            'name' => 'DeRegisterTargets',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/targetGroups/{targetGroupId}:deregisterTargets',
            ],
            'input' => [ 'shape' => 'DeRegisterTargetsRequestShape', ],
            'output' => [ 'shape' => 'DeRegisterTargetsResponseShape', ],
        ],
        'UpdateTargets' => [
            'name' => 'UpdateTargets',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/targetGroups/{targetGroupId}:updateTargets',
            ],
            'input' => [ 'shape' => 'UpdateTargetsRequestShape', ],
            'output' => [ 'shape' => 'UpdateTargetsResponseShape', ],
        ],
        'DescribeTargets' => [
            'name' => 'DescribeTargets',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/targetGroups/{targetGroupId}:describeTargets',
            ],
            'input' => [ 'shape' => 'DescribeTargetsRequestShape', ],
            'output' => [ 'shape' => 'DescribeTargetsResponseShape', ],
        ],
        'DescribeUrlMaps' => [
            'name' => 'DescribeUrlMaps',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/urlMaps/',
            ],
            'input' => [ 'shape' => 'DescribeUrlMapsRequestShape', ],
            'output' => [ 'shape' => 'DescribeUrlMapsResponseShape', ],
        ],
        'CreateUrlMap' => [
            'name' => 'CreateUrlMap',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/urlMaps/',
            ],
            'input' => [ 'shape' => 'CreateUrlMapRequestShape', ],
            'output' => [ 'shape' => 'CreateUrlMapResponseShape', ],
        ],
        'DescribeUrlMap' => [
            'name' => 'DescribeUrlMap',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/urlMaps/{urlMapId}',
            ],
            'input' => [ 'shape' => 'DescribeUrlMapRequestShape', ],
            'output' => [ 'shape' => 'DescribeUrlMapResponseShape', ],
        ],
        'UpdateUrlMap' => [
            'name' => 'UpdateUrlMap',
            'http' => [
                'method' => 'PATCH',
                'requestUri' => '/v1/regions/{regionId}/urlMaps/{urlMapId}',
            ],
            'input' => [ 'shape' => 'UpdateUrlMapRequestShape', ],
            'output' => [ 'shape' => 'UpdateUrlMapResponseShape', ],
        ],
        'DeleteUrlMap' => [
            'name' => 'DeleteUrlMap',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/regions/{regionId}/urlMaps/{urlMapId}',
            ],
            'input' => [ 'shape' => 'DeleteUrlMapRequestShape', ],
            'output' => [ 'shape' => 'DeleteUrlMapResponseShape', ],
        ],
        'AddRules' => [
            'name' => 'AddRules',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/urlMaps/{urlMapId}:addRules',
            ],
            'input' => [ 'shape' => 'AddRulesRequestShape', ],
            'output' => [ 'shape' => 'AddRulesResponseShape', ],
        ],
        'UpdateRules' => [
            'name' => 'UpdateRules',
            'http' => [
                'method' => 'PATCH',
                'requestUri' => '/v1/regions/{regionId}/urlMaps/{urlMapId}:updateRules',
            ],
            'input' => [ 'shape' => 'UpdateRulesRequestShape', ],
            'output' => [ 'shape' => 'UpdateRulesResponseShape', ],
        ],
        'DeleteRules' => [
            'name' => 'DeleteRules',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/urlMaps/{urlMapId}:deleteRules',
            ],
            'input' => [ 'shape' => 'DeleteRulesRequestShape', ],
            'output' => [ 'shape' => 'DeleteRulesResponseShape', ],
        ],
    ],
    'shapes' => [
        'ExtCertificateSpec' => [
            'type' => 'structure',
            'members' => [
                'certificateId' => [ 'type' => 'string', 'locationName' => 'certificateId', ],
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
            ],
        ],
        'AddListenerCertificatesSpec' => [
            'type' => 'structure',
            'members' => [
                'certificates' => [ 'type' => 'list', 'member' => [ 'shape' => 'ExtCertificateSpec', ], ],
            ],
        ],
        'PreActionSpec' => [
            'type' => 'structure',
            'members' => [
                'extendActionType' => [ 'type' => 'integer', 'locationName' => 'extendActionType', ],
                'mirrorBackendId' => [ 'type' => 'string', 'locationName' => 'mirrorBackendId', ],
                'insertHeaderSpec' =>  [ 'shape' => 'InsertHeaderSpec', ],
                'deleteHeaderSpec' =>  [ 'shape' => 'DeleteHeaderSpec', ],
                'rewriteSpec' =>  [ 'shape' => 'RewriteSpec', ],
            ],
        ],
        'InsertHeaderSpec' => [
            'type' => 'structure',
            'members' => [
                'valueType' => [ 'type' => 'integer', 'locationName' => 'valueType', ],
                'key' => [ 'type' => 'string', 'locationName' => 'key', ],
                'value' => [ 'type' => 'string', 'locationName' => 'value', ],
            ],
        ],
        'RuleSpec' => [
            'type' => 'structure',
            'members' => [
                'host' => [ 'type' => 'string', 'locationName' => 'host', ],
                'path' => [ 'type' => 'string', 'locationName' => 'path', ],
                'action' => [ 'type' => 'string', 'locationName' => 'action', ],
                'backendId' => [ 'type' => 'string', 'locationName' => 'backendId', ],
                'redirectActionSpec' =>  [ 'shape' => 'RedirectActionSpec', ],
                'preActions' => [ 'type' => 'list', 'member' => [ 'shape' => 'PreActionSpec', ], ],
                'postActions' => [ 'type' => 'list', 'member' => [ 'shape' => 'PostActionSpec', ], ],
            ],
        ],
        'RedirectActionSpec' => [
            'type' => 'structure',
            'members' => [
                'protocol' => [ 'type' => 'string', 'locationName' => 'protocol', ],
                'port' => [ 'type' => 'integer', 'locationName' => 'port', ],
                'host' => [ 'type' => 'string', 'locationName' => 'host', ],
                'path' => [ 'type' => 'string', 'locationName' => 'path', ],
                'query' => [ 'type' => 'string', 'locationName' => 'query', ],
                'statusCode' => [ 'type' => 'string', 'locationName' => 'statusCode', ],
            ],
        ],
        'DeleteHeaderSpec' => [
            'type' => 'structure',
            'members' => [
                'key' => [ 'type' => 'string', 'locationName' => 'key', ],
            ],
        ],
        'RewriteSpec' => [
            'type' => 'structure',
            'members' => [
                'host' => [ 'type' => 'string', 'locationName' => 'host', ],
                'path' => [ 'type' => 'string', 'locationName' => 'path', ],
                'query' => [ 'type' => 'string', 'locationName' => 'query', ],
            ],
        ],
        'AddRulesSpec' => [
            'type' => 'structure',
            'members' => [
                'ruleSpecs' => [ 'type' => 'list', 'member' => [ 'shape' => 'RuleSpec', ], ],
            ],
        ],
        'PostActionSpec' => [
            'type' => 'structure',
            'members' => [
                'extendActionType' => [ 'type' => 'integer', 'locationName' => 'extendActionType', ],
                'insertHeaderSpec' =>  [ 'shape' => 'InsertHeaderSpec', ],
                'deleteHeaderSpec' =>  [ 'shape' => 'DeleteHeaderSpec', ],
            ],
        ],
        'AgInfo' => [
            'type' => 'structure',
            'members' => [
                'agId' => [ 'type' => 'string', 'locationName' => 'agId', ],
                'defaultWeight' => [ 'type' => 'integer', 'locationName' => 'defaultWeight', ],
            ],
        ],
        'AgInfoSpec' => [
            'type' => 'structure',
            'members' => [
                'agId' => [ 'type' => 'string', 'locationName' => 'agId', ],
                'defaultWeight' => [ 'type' => 'integer', 'locationName' => 'defaultWeight', ],
            ],
        ],
        'AgTarget' => [
            'type' => 'structure',
            'members' => [
                'targetId' => [ 'type' => 'string', 'locationName' => 'targetId', ],
                'targetGroupId' => [ 'type' => 'string', 'locationName' => 'targetGroupId', ],
                'agId' => [ 'type' => 'string', 'locationName' => 'agId', ],
                'type' => [ 'type' => 'string', 'locationName' => 'type', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'port' => [ 'type' => 'integer', 'locationName' => 'port', ],
                'weight' => [ 'type' => 'integer', 'locationName' => 'weight', ],
                'privateIpAddress' => [ 'type' => 'string', 'locationName' => 'privateIpAddress', ],
                'ipAddress' => [ 'type' => 'string', 'locationName' => 'ipAddress', ],
            ],
        ],
        'TargetUpdateSpec' => [
            'type' => 'structure',
            'members' => [
                'targetId' => [ 'type' => 'string', 'locationName' => 'targetId', ],
                'weight' => [ 'type' => 'integer', 'locationName' => 'weight', ],
            ],
        ],
        'AssAndDisassElasticIpSpec' => [
            'type' => 'structure',
            'members' => [
                'elasticIpId' => [ 'type' => 'string', 'locationName' => 'elasticIpId', ],
            ],
        ],
        'AssAndDisassSecurityGroupsSpec' => [
            'type' => 'structure',
            'members' => [
                'securityGroupIds' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'AssElasticIpSpec' => [
            'type' => 'structure',
            'members' => [
                'elasticIpId' => [ 'type' => 'string', 'locationName' => 'elasticIpId', ],
            ],
        ],
        'HealthCheck' => [
            'type' => 'structure',
            'members' => [
                'protocol' => [ 'type' => 'string', 'locationName' => 'protocol', ],
                'healthyThresholdCount' => [ 'type' => 'integer', 'locationName' => 'healthyThresholdCount', ],
                'unhealthyThresholdCount' => [ 'type' => 'integer', 'locationName' => 'unhealthyThresholdCount', ],
                'checkTimeoutSeconds' => [ 'type' => 'integer', 'locationName' => 'checkTimeoutSeconds', ],
                'intervalSeconds' => [ 'type' => 'integer', 'locationName' => 'intervalSeconds', ],
                'port' => [ 'type' => 'integer', 'locationName' => 'port', ],
                'httpVersion' => [ 'type' => 'string', 'locationName' => 'httpVersion', ],
                'httpDomain' => [ 'type' => 'string', 'locationName' => 'httpDomain', ],
                'httpPath' => [ 'type' => 'string', 'locationName' => 'httpPath', ],
                'httpCode' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'Backend' => [
            'type' => 'structure',
            'members' => [
                'backendId' => [ 'type' => 'string', 'locationName' => 'backendId', ],
                'backendName' => [ 'type' => 'string', 'locationName' => 'backendName', ],
                'loadBalancerId' => [ 'type' => 'string', 'locationName' => 'loadBalancerId', ],
                'loadBalancerType' => [ 'type' => 'string', 'locationName' => 'loadBalancerType', ],
                'protocol' => [ 'type' => 'string', 'locationName' => 'protocol', ],
                'port' => [ 'type' => 'integer', 'locationName' => 'port', ],
                'algorithm' => [ 'type' => 'string', 'locationName' => 'algorithm', ],
                'targetGroupIds' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'agIds' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'agInfos' => [ 'type' => 'list', 'member' => [ 'shape' => 'AgInfo', ], ],
                'proxyProtocol' => [ 'type' => 'boolean', 'locationName' => 'proxyProtocol', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'connectionDrainingSeconds' => [ 'type' => 'integer', 'locationName' => 'connectionDrainingSeconds', ],
                'sessionStickiness' => [ 'type' => 'boolean', 'locationName' => 'sessionStickiness', ],
                'sessionStickyTimeout' => [ 'type' => 'integer', 'locationName' => 'sessionStickyTimeout', ],
                'httpCookieExpireSeconds' => [ 'type' => 'integer', 'locationName' => 'httpCookieExpireSeconds', ],
                'httpForwardedProtocol' => [ 'type' => 'boolean', 'locationName' => 'httpForwardedProtocol', ],
                'httpForwardedPort' => [ 'type' => 'boolean', 'locationName' => 'httpForwardedPort', ],
                'httpForwardedHost' => [ 'type' => 'boolean', 'locationName' => 'httpForwardedHost', ],
                'httpForwardedVip' => [ 'type' => 'boolean', 'locationName' => 'httpForwardedVip', ],
                'httpForwardedClientPort' => [ 'type' => 'boolean', 'locationName' => 'httpForwardedClientPort', ],
                'healthCheck' =>  [ 'shape' => 'HealthCheck', ],
                'createdTime' => [ 'type' => 'string', 'locationName' => 'createdTime', ],
            ],
        ],
        'CertificateSpec' => [
            'type' => 'structure',
            'members' => [
                'certificateId' => [ 'type' => 'string', 'locationName' => 'certificateId', ],
                'isDefault' => [ 'type' => 'boolean', 'locationName' => 'isDefault', ],
            ],
        ],
        'ChargeSpec' => [
            'type' => 'structure',
            'members' => [
                'chargeMode' => [ 'type' => 'string', 'locationName' => 'chargeMode', ],
                'chargeUnit' => [ 'type' => 'string', 'locationName' => 'chargeUnit', ],
                'chargeDuration' => [ 'type' => 'integer', 'locationName' => 'chargeDuration', ],
            ],
        ],
        'HealthCheckSpec' => [
            'type' => 'structure',
            'members' => [
                'protocol' => [ 'type' => 'string', 'locationName' => 'protocol', ],
                'healthyThresholdCount' => [ 'type' => 'integer', 'locationName' => 'healthyThresholdCount', ],
                'unhealthyThresholdCount' => [ 'type' => 'integer', 'locationName' => 'unhealthyThresholdCount', ],
                'checkTimeoutSeconds' => [ 'type' => 'integer', 'locationName' => 'checkTimeoutSeconds', ],
                'intervalSeconds' => [ 'type' => 'integer', 'locationName' => 'intervalSeconds', ],
                'port' => [ 'type' => 'integer', 'locationName' => 'port', ],
                'httpVersion' => [ 'type' => 'string', 'locationName' => 'httpVersion', ],
                'httpDomain' => [ 'type' => 'string', 'locationName' => 'httpDomain', ],
                'httpPath' => [ 'type' => 'string', 'locationName' => 'httpPath', ],
                'httpCode' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'CreateBackendSpec' => [
            'type' => 'structure',
            'members' => [
                'backendName' => [ 'type' => 'string', 'locationName' => 'backendName', ],
                'loadBalancerId' => [ 'type' => 'string', 'locationName' => 'loadBalancerId', ],
                'protocol' => [ 'type' => 'string', 'locationName' => 'protocol', ],
                'port' => [ 'type' => 'integer', 'locationName' => 'port', ],
                'healthCheckSpec' =>  [ 'shape' => 'HealthCheckSpec', ],
                'algorithm' => [ 'type' => 'string', 'locationName' => 'algorithm', ],
                'targetGroupIds' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'agIds' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'agInfoSpec' => [ 'type' => 'list', 'member' => [ 'shape' => 'AgInfoSpec', ], ],
                'proxyProtocol' => [ 'type' => 'boolean', 'locationName' => 'proxyProtocol', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'sessionStickiness' => [ 'type' => 'boolean', 'locationName' => 'sessionStickiness', ],
                'sessionStickyTimeout' => [ 'type' => 'integer', 'locationName' => 'sessionStickyTimeout', ],
                'connectionDrainingSeconds' => [ 'type' => 'integer', 'locationName' => 'connectionDrainingSeconds', ],
                'httpCookieExpireSeconds' => [ 'type' => 'integer', 'locationName' => 'httpCookieExpireSeconds', ],
                'httpForwardedProtocol' => [ 'type' => 'boolean', 'locationName' => 'httpForwardedProtocol', ],
                'httpForwardedPort' => [ 'type' => 'boolean', 'locationName' => 'httpForwardedPort', ],
                'httpForwardedHost' => [ 'type' => 'boolean', 'locationName' => 'httpForwardedHost', ],
                'httpForwardedVip' => [ 'type' => 'boolean', 'locationName' => 'httpForwardedVip', ],
                'httpForwardedClientPort' => [ 'type' => 'boolean', 'locationName' => 'httpForwardedClientPort', ],
            ],
        ],
        'LimitationSpec' => [
            'type' => 'structure',
            'members' => [
                'qps' => [ 'type' => 'integer', 'locationName' => 'qps', ],
                'activeConnections' => [ 'type' => 'integer', 'locationName' => 'activeConnections', ],
            ],
        ],
        'CreateListenerSpec' => [
            'type' => 'structure',
            'members' => [
                'listenerName' => [ 'type' => 'string', 'locationName' => 'listenerName', ],
                'protocol' => [ 'type' => 'string', 'locationName' => 'protocol', ],
                'hstsEnable' => [ 'type' => 'boolean', 'locationName' => 'hstsEnable', ],
                'hstsMaxAge' => [ 'type' => 'integer', 'locationName' => 'hstsMaxAge', ],
                'port' => [ 'type' => 'integer', 'locationName' => 'port', ],
                'backendId' => [ 'type' => 'string', 'locationName' => 'backendId', ],
                'loadBalancerId' => [ 'type' => 'string', 'locationName' => 'loadBalancerId', ],
                'urlMapId' => [ 'type' => 'string', 'locationName' => 'urlMapId', ],
                'action' => [ 'type' => 'string', 'locationName' => 'action', ],
                'certificateSpecs' => [ 'type' => 'list', 'member' => [ 'shape' => 'CertificateSpec', ], ],
                'limitation' =>  [ 'shape' => 'LimitationSpec', ],
                'connectionIdleTimeSeconds' => [ 'type' => 'integer', 'locationName' => 'connectionIdleTimeSeconds', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'securityPolicyId' => [ 'type' => 'string', 'locationName' => 'securityPolicyId', ],
            ],
        ],
        'Tag' => [
            'type' => 'structure',
            'members' => [
                'key' => [ 'type' => 'string', 'locationName' => 'key', ],
                'value' => [ 'type' => 'string', 'locationName' => 'value', ],
            ],
        ],
        'ElasticIpSpec' => [
            'type' => 'structure',
            'members' => [
                'bandwidthMbps' => [ 'type' => 'integer', 'locationName' => 'bandwidthMbps', ],
                'provider' => [ 'type' => 'string', 'locationName' => 'provider', ],
                'chargeSpec' =>  [ 'shape' => 'ChargeSpec', ],
            ],
        ],
        'CreateLoadBalancerSpec' => [
            'type' => 'structure',
            'members' => [
                'loadBalancerName' => [ 'type' => 'string', 'locationName' => 'loadBalancerName', ],
                'subnetId' => [ 'type' => 'string', 'locationName' => 'subnetId', ],
                'type' => [ 'type' => 'string', 'locationName' => 'type', ],
                'azs' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'chargeSpec' =>  [ 'shape' => 'ChargeSpec', ],
                'elasticIp' =>  [ 'shape' => 'ElasticIpSpec', ],
                'privateIpAddress' => [ 'type' => 'string', 'locationName' => 'privateIpAddress', ],
                'securityGroupIds' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'deleteProtection' => [ 'type' => 'boolean', 'locationName' => 'deleteProtection', ],
                'userTags' => [ 'type' => 'list', 'member' => [ 'shape' => 'Tag', ], ],
            ],
        ],
        'CreateTargetGroupSpec' => [
            'type' => 'structure',
            'members' => [
                'targetGroupName' => [ 'type' => 'string', 'locationName' => 'targetGroupName', ],
                'loadBalancerId' => [ 'type' => 'string', 'locationName' => 'loadBalancerId', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'type' => [ 'type' => 'string', 'locationName' => 'type', ],
            ],
        ],
        'CreateUrlMapSpec' => [
            'type' => 'structure',
            'members' => [
                'urlMapName' => [ 'type' => 'string', 'locationName' => 'urlMapName', ],
                'loadBalancerId' => [ 'type' => 'string', 'locationName' => 'loadBalancerId', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
            ],
        ],
        'CustomizedConfiguration' => [
            'type' => 'structure',
            'members' => [
                'customizedConfigurationId' => [ 'type' => 'string', 'locationName' => 'customizedConfigurationId', ],
                'customizedConfigurationName' => [ 'type' => 'string', 'locationName' => 'customizedConfigurationName', ],
                'resourceIds' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'createdTime' => [ 'type' => 'string', 'locationName' => 'createdTime', ],
                'customizedConfigurationContent' =>  [ 'shape' => 'CustomizedConfigurationContent', ],
            ],
        ],
        'CustomizedConfigurationContent' => [
            'type' => 'structure',
            'members' => [
                'sessionTicket' => [ 'type' => 'string', 'locationName' => 'sessionTicket', ],
            ],
        ],
        'CustomizedConfigurationContentSpec' => [
            'type' => 'structure',
            'members' => [
                'sessionTicket' => [ 'type' => 'string', 'locationName' => 'sessionTicket', ],
            ],
        ],
        'CustomizedConfigurationSpec' => [
            'type' => 'structure',
            'members' => [
                'customizedConfigurationName' => [ 'type' => 'string', 'locationName' => 'customizedConfigurationName', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'customizedConfigurationContent' =>  [ 'shape' => 'CustomizedConfigurationContentSpec', ],
            ],
        ],
        'CustomizedConfigurationUpdateSpec' => [
            'type' => 'structure',
            'members' => [
                'customizedConfigurationName' => [ 'type' => 'string', 'locationName' => 'customizedConfigurationName', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'customizedConfigurationContent' =>  [ 'shape' => 'CustomizedConfigurationContentSpec', ],
            ],
        ],
        'DeleteHeader' => [
            'type' => 'structure',
            'members' => [
                'key' => [ 'type' => 'string', 'locationName' => 'key', ],
            ],
        ],
        'DeleteListenerCertificatesSpec' => [
            'type' => 'structure',
            'members' => [
                'certificateBindIds' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'DeleteRulesSpec' => [
            'type' => 'structure',
            'members' => [
                'ruleIds' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'DisassElasticIpSpec' => [
            'type' => 'structure',
            'members' => [
                'elasticIpId' => [ 'type' => 'string', 'locationName' => 'elasticIpId', ],
                'deleteElasticIp' => [ 'type' => 'boolean', 'locationName' => 'deleteElasticIp', ],
            ],
        ],
        'ExportTask' => [
            'type' => 'structure',
            'members' => [
                'region' => [ 'type' => 'string', 'locationName' => 'region', ],
                'loadBalancerType' => [ 'type' => 'string', 'locationName' => 'loadBalancerType', ],
                'taskId' => [ 'type' => 'string', 'locationName' => 'taskId', ],
                'fileName' => [ 'type' => 'string', 'locationName' => 'fileName', ],
                'status' => [ 'type' => 'integer', 'locationName' => 'status', ],
                'createdTime' => [ 'type' => 'string', 'locationName' => 'createdTime', ],
                'downloadUrl' => [ 'type' => 'string', 'locationName' => 'downloadUrl', ],
            ],
        ],
        'ExtensionCertificateSpec' => [
            'type' => 'structure',
            'members' => [
                'certificateId' => [ 'type' => 'string', 'locationName' => 'certificateId', ],
                'certificateBindId' => [ 'type' => 'string', 'locationName' => 'certificateBindId', ],
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
            ],
        ],
        'UnhealthReason' => [
            'type' => 'structure',
            'members' => [
                'reason' => [ 'type' => 'string', 'locationName' => 'reason', ],
                'detail' => [ 'type' => 'string', 'locationName' => 'detail', ],
            ],
        ],
        'InsertHeader' => [
            'type' => 'structure',
            'members' => [
                'valueType' => [ 'type' => 'integer', 'locationName' => 'valueType', ],
                'key' => [ 'type' => 'string', 'locationName' => 'key', ],
                'value' => [ 'type' => 'string', 'locationName' => 'value', ],
            ],
        ],
        'Listener' => [
            'type' => 'structure',
            'members' => [
                'listenerId' => [ 'type' => 'string', 'locationName' => 'listenerId', ],
                'listenerName' => [ 'type' => 'string', 'locationName' => 'listenerName', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'loadBalancerId' => [ 'type' => 'string', 'locationName' => 'loadBalancerId', ],
                'loadBalancerType' => [ 'type' => 'string', 'locationName' => 'loadBalancerType', ],
                'protocol' => [ 'type' => 'string', 'locationName' => 'protocol', ],
                'hstsEnable' => [ 'type' => 'boolean', 'locationName' => 'hstsEnable', ],
                'hstsMaxAge' => [ 'type' => 'integer', 'locationName' => 'hstsMaxAge', ],
                'port' => [ 'type' => 'integer', 'locationName' => 'port', ],
                'action' => [ 'type' => 'string', 'locationName' => 'action', ],
                'backendId' => [ 'type' => 'string', 'locationName' => 'backendId', ],
                'urlMapId' => [ 'type' => 'string', 'locationName' => 'urlMapId', ],
                'connectionIdleTimeSeconds' => [ 'type' => 'integer', 'locationName' => 'connectionIdleTimeSeconds', ],
                'certificateSpecs' => [ 'type' => 'list', 'member' => [ 'shape' => 'CertificateSpec', ], ],
                'limitation' =>  [ 'shape' => 'LimitationSpec', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'createdTime' => [ 'type' => 'string', 'locationName' => 'createdTime', ],
                'extensionCertificateSpecs' => [ 'type' => 'list', 'member' => [ 'shape' => 'ExtensionCertificateSpec', ], ],
                'securityPolicyId' => [ 'type' => 'string', 'locationName' => 'securityPolicyId', ],
            ],
        ],
        'LoadBalancerState' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'reason' => [ 'type' => 'string', 'locationName' => 'reason', ],
            ],
        ],
        'PrivateIpAddress' => [
            'type' => 'structure',
            'members' => [
                'privateIpAddress' => [ 'type' => 'string', 'locationName' => 'privateIpAddress', ],
                'elasticIpId' => [ 'type' => 'string', 'locationName' => 'elasticIpId', ],
                'elasticIpAddress' => [ 'type' => 'string', 'locationName' => 'elasticIpAddress', ],
            ],
        ],
        'LoadBalancer' => [
            'type' => 'structure',
            'members' => [
                'loadBalancerId' => [ 'type' => 'string', 'locationName' => 'loadBalancerId', ],
                'loadBalancerName' => [ 'type' => 'string', 'locationName' => 'loadBalancerName', ],
                'subnetId' => [ 'type' => 'string', 'locationName' => 'subnetId', ],
                'vpcId' => [ 'type' => 'string', 'locationName' => 'vpcId', ],
                'type' => [ 'type' => 'string', 'locationName' => 'type', ],
                'state' =>  [ 'shape' => 'LoadBalancerState', ],
                'azs' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'securityGroupIds' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'privateIp' =>  [ 'shape' => 'PrivateIpAddress', ],
                'charge' =>  [ 'shape' => 'Charge', ],
                'tags' => [ 'type' => 'list', 'member' => [ 'shape' => 'Tag', ], ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'deleteProtection' => [ 'type' => 'boolean', 'locationName' => 'deleteProtection', ],
                'createdTime' => [ 'type' => 'string', 'locationName' => 'createdTime', ],
                'azType' => [ 'type' => 'string', 'locationName' => 'azType', ],
                'customizedConfigurationId' => [ 'type' => 'string', 'locationName' => 'customizedConfigurationId', ],
            ],
        ],
        'Charge' => [
            'type' => 'structure',
            'members' => [
                'chargeMode' => [ 'type' => 'string', 'locationName' => 'chargeMode', ],
                'chargeStatus' => [ 'type' => 'string', 'locationName' => 'chargeStatus', ],
                'chargeStartTime' => [ 'type' => 'string', 'locationName' => 'chargeStartTime', ],
                'chargeExpiredTime' => [ 'type' => 'string', 'locationName' => 'chargeExpiredTime', ],
                'chargeRetireTime' => [ 'type' => 'string', 'locationName' => 'chargeRetireTime', ],
            ],
        ],
        'ModifyQuotaSpec' => [
            'type' => 'structure',
            'members' => [
                'lbType' => [ 'type' => 'string', 'locationName' => 'lbType', ],
                'type' => [ 'type' => 'string', 'locationName' => 'type', ],
                'parentResourceId' => [ 'type' => 'string', 'locationName' => 'parentResourceId', ],
                'maxLimit' => [ 'type' => 'integer', 'locationName' => 'maxLimit', ],
            ],
        ],
        'PostAction' => [
            'type' => 'structure',
            'members' => [
                'extendActionType' => [ 'type' => 'integer', 'locationName' => 'extendActionType', ],
                'insertHeader' =>  [ 'shape' => 'InsertHeader', ],
                'deleteHeader' =>  [ 'shape' => 'DeleteHeader', ],
            ],
        ],
        'PostActionUpdateSpec' => [
            'type' => 'structure',
            'members' => [
                'extendActionType' => [ 'type' => 'integer', 'locationName' => 'extendActionType', ],
                'insertHeaderSpec' =>  [ 'shape' => 'InsertHeaderSpec', ],
                'deleteHeaderSpec' =>  [ 'shape' => 'DeleteHeaderSpec', ],
            ],
        ],
        'PreAction' => [
            'type' => 'structure',
            'members' => [
                'extendActionType' => [ 'type' => 'integer', 'locationName' => 'extendActionType', ],
                'mirrorBackendId' => [ 'type' => 'string', 'locationName' => 'mirrorBackendId', ],
                'insertHeader' =>  [ 'shape' => 'InsertHeader', ],
                'deleteHeader' =>  [ 'shape' => 'DeleteHeader', ],
                'rewrite' =>  [ 'shape' => 'Rewrite', ],
            ],
        ],
        'Rewrite' => [
            'type' => 'structure',
            'members' => [
                'host' => [ 'type' => 'string', 'locationName' => 'host', ],
                'path' => [ 'type' => 'string', 'locationName' => 'path', ],
                'query' => [ 'type' => 'string', 'locationName' => 'query', ],
            ],
        ],
        'PreActionUpdateSpec' => [
            'type' => 'structure',
            'members' => [
                'extendActionType' => [ 'type' => 'integer', 'locationName' => 'extendActionType', ],
                'mirrorBackendId' => [ 'type' => 'string', 'locationName' => 'mirrorBackendId', ],
                'insertHeaderSpec' =>  [ 'shape' => 'InsertHeaderSpec', ],
                'deleteHeaderSpec' =>  [ 'shape' => 'DeleteHeaderSpec', ],
                'rewriteSpec' =>  [ 'shape' => 'RewriteSpec', ],
            ],
        ],
        'Quota' => [
            'type' => 'structure',
            'members' => [
                'type' => [ 'type' => 'string', 'locationName' => 'type', ],
                'parentResourceId' => [ 'type' => 'string', 'locationName' => 'parentResourceId', ],
                'maxLimit' => [ 'type' => 'integer', 'locationName' => 'maxLimit', ],
                'count' => [ 'type' => 'integer', 'locationName' => 'count', ],
            ],
        ],
        'RedirectAction' => [
            'type' => 'structure',
            'members' => [
                'protocol' => [ 'type' => 'string', 'locationName' => 'protocol', ],
                'port' => [ 'type' => 'integer', 'locationName' => 'port', ],
                'host' => [ 'type' => 'string', 'locationName' => 'host', ],
                'path' => [ 'type' => 'string', 'locationName' => 'path', ],
                'query' => [ 'type' => 'string', 'locationName' => 'query', ],
                'statusCode' => [ 'type' => 'string', 'locationName' => 'statusCode', ],
            ],
        ],
        'Rule' => [
            'type' => 'structure',
            'members' => [
                'ruleId' => [ 'type' => 'string', 'locationName' => 'ruleId', ],
                'host' => [ 'type' => 'string', 'locationName' => 'host', ],
                'path' => [ 'type' => 'string', 'locationName' => 'path', ],
                'action' => [ 'type' => 'string', 'locationName' => 'action', ],
                'backendId' => [ 'type' => 'string', 'locationName' => 'backendId', ],
                'redirectAction' =>  [ 'shape' => 'RedirectAction', ],
                'preActions' => [ 'type' => 'list', 'member' => [ 'shape' => 'PreAction', ], ],
                'postActions' => [ 'type' => 'list', 'member' => [ 'shape' => 'PostAction', ], ],
            ],
        ],
        'RuleUpdateSpec' => [
            'type' => 'structure',
            'members' => [
                'ruleId' => [ 'type' => 'string', 'locationName' => 'ruleId', ],
                'host' => [ 'type' => 'string', 'locationName' => 'host', ],
                'path' => [ 'type' => 'string', 'locationName' => 'path', ],
                'action' => [ 'type' => 'string', 'locationName' => 'action', ],
                'backendId' => [ 'type' => 'string', 'locationName' => 'backendId', ],
                'redirectActionSpec' =>  [ 'shape' => 'RedirectActionSpec', ],
                'preActions' => [ 'type' => 'list', 'member' => [ 'shape' => 'PreActionUpdateSpec', ], ],
                'postActions' => [ 'type' => 'list', 'member' => [ 'shape' => 'PostActionUpdateSpec', ], ],
            ],
        ],
        'SecurityPolicy' => [
            'type' => 'structure',
            'members' => [
                'securityPolicyId' => [ 'type' => 'string', 'locationName' => 'securityPolicyId', ],
                'securityPolicyName' => [ 'type' => 'string', 'locationName' => 'securityPolicyName', ],
                'securityPolicyType' => [ 'type' => 'string', 'locationName' => 'securityPolicyType', ],
                'listenerIds' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'protocols' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'ciphers' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'createdTime' => [ 'type' => 'string', 'locationName' => 'createdTime', ],
            ],
        ],
        'SecurityPolicySpec' => [
            'type' => 'structure',
            'members' => [
                'securityPolicyName' => [ 'type' => 'string', 'locationName' => 'securityPolicyName', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'protocols' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'ciphers' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'SecurityPolicyUpdateSpec' => [
            'type' => 'structure',
            'members' => [
                'securityPolicyName' => [ 'type' => 'string', 'locationName' => 'securityPolicyName', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'protocols' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'ciphers' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'SupportedCipher' => [
            'type' => 'structure',
            'members' => [
                'cipher' => [ 'type' => 'string', 'locationName' => 'cipher', ],
                'protocols' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'TagFilter' => [
            'type' => 'structure',
            'members' => [
                'key' => [ 'type' => 'string', 'locationName' => 'key', ],
                'values' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'Target' => [
            'type' => 'structure',
            'members' => [
                'targetId' => [ 'type' => 'string', 'locationName' => 'targetId', ],
                'targetGroupId' => [ 'type' => 'string', 'locationName' => 'targetGroupId', ],
                'agId' => [ 'type' => 'string', 'locationName' => 'agId', ],
                'type' => [ 'type' => 'string', 'locationName' => 'type', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'port' => [ 'type' => 'integer', 'locationName' => 'port', ],
                'weight' => [ 'type' => 'integer', 'locationName' => 'weight', ],
                'privateIpAddress' => [ 'type' => 'string', 'locationName' => 'privateIpAddress', ],
                'ipAddress' => [ 'type' => 'string', 'locationName' => 'ipAddress', ],
            ],
        ],
        'TargetGroup' => [
            'type' => 'structure',
            'members' => [
                'targetGroupId' => [ 'type' => 'string', 'locationName' => 'targetGroupId', ],
                'targetGroupName' => [ 'type' => 'string', 'locationName' => 'targetGroupName', ],
                'loadBalancerId' => [ 'type' => 'string', 'locationName' => 'loadBalancerId', ],
                'loadBalancerType' => [ 'type' => 'string', 'locationName' => 'loadBalancerType', ],
                'loadBalancerName' => [ 'type' => 'string', 'locationName' => 'loadBalancerName', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'createdTime' => [ 'type' => 'string', 'locationName' => 'createdTime', ],
                'targets' => [ 'type' => 'list', 'member' => [ 'shape' => 'Target', ], ],
                'type' => [ 'type' => 'string', 'locationName' => 'type', ],
            ],
        ],
        'TargetHealth' => [
            'type' => 'structure',
            'members' => [
                'targetGroupId' => [ 'type' => 'string', 'locationName' => 'targetGroupId', ],
                'agId' => [ 'type' => 'string', 'locationName' => 'agId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'type' => [ 'type' => 'string', 'locationName' => 'type', ],
                'port' => [ 'type' => 'integer', 'locationName' => 'port', ],
                'weight' => [ 'type' => 'integer', 'locationName' => 'weight', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'ipAddress' => [ 'type' => 'string', 'locationName' => 'ipAddress', ],
                'unhealthReason' =>  [ 'shape' => 'UnhealthReason', ],
            ],
        ],
        'TargetSpec' => [
            'type' => 'structure',
            'members' => [
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'type' => [ 'type' => 'string', 'locationName' => 'type', ],
                'port' => [ 'type' => 'integer', 'locationName' => 'port', ],
                'weight' => [ 'type' => 'integer', 'locationName' => 'weight', ],
                'ipAddress' => [ 'type' => 'string', 'locationName' => 'ipAddress', ],
            ],
        ],
        'UpdateBackendSpec' => [
            'type' => 'structure',
            'members' => [
                'backendName' => [ 'type' => 'string', 'locationName' => 'backendName', ],
                'healthCheckSpec' =>  [ 'shape' => 'HealthCheckSpec', ],
                'algorithm' => [ 'type' => 'string', 'locationName' => 'algorithm', ],
                'targetGroupIds' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'agIds' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'agInfoSpec' => [ 'type' => 'list', 'member' => [ 'shape' => 'AgInfoSpec', ], ],
                'proxyProtocol' => [ 'type' => 'boolean', 'locationName' => 'proxyProtocol', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'sessionStickiness' => [ 'type' => 'boolean', 'locationName' => 'sessionStickiness', ],
                'sessionStickyTimeout' => [ 'type' => 'integer', 'locationName' => 'sessionStickyTimeout', ],
                'connectionDrainingSeconds' => [ 'type' => 'integer', 'locationName' => 'connectionDrainingSeconds', ],
                'httpCookieExpireSeconds' => [ 'type' => 'integer', 'locationName' => 'httpCookieExpireSeconds', ],
                'httpForwardedProtocol' => [ 'type' => 'boolean', 'locationName' => 'httpForwardedProtocol', ],
                'httpForwardedPort' => [ 'type' => 'boolean', 'locationName' => 'httpForwardedPort', ],
                'httpForwardedHost' => [ 'type' => 'boolean', 'locationName' => 'httpForwardedHost', ],
                'httpForwardedVip' => [ 'type' => 'boolean', 'locationName' => 'httpForwardedVip', ],
                'httpForwardedClientPort' => [ 'type' => 'boolean', 'locationName' => 'httpForwardedClientPort', ],
                'closeHealthCheck' => [ 'type' => 'boolean', 'locationName' => 'closeHealthCheck', ],
            ],
        ],
        'ExtCertificateUpdateSpec' => [
            'type' => 'structure',
            'members' => [
                'certificateBindId' => [ 'type' => 'string', 'locationName' => 'certificateBindId', ],
                'certificateId' => [ 'type' => 'string', 'locationName' => 'certificateId', ],
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
            ],
        ],
        'UpdateListenerCertificatesSpec' => [
            'type' => 'structure',
            'members' => [
                'certificates' => [ 'type' => 'list', 'member' => [ 'shape' => 'ExtCertificateUpdateSpec', ], ],
            ],
        ],
        'UpdateListenerSpec' => [
            'type' => 'structure',
            'members' => [
                'listenerName' => [ 'type' => 'string', 'locationName' => 'listenerName', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'hstsEnable' => [ 'type' => 'boolean', 'locationName' => 'hstsEnable', ],
                'hstsMaxAge' => [ 'type' => 'integer', 'locationName' => 'hstsMaxAge', ],
                'certificateSpecs' => [ 'type' => 'list', 'member' => [ 'shape' => 'CertificateSpec', ], ],
                'limitation' =>  [ 'shape' => 'LimitationSpec', ],
                'connectionIdleTimeSeconds' => [ 'type' => 'integer', 'locationName' => 'connectionIdleTimeSeconds', ],
                'backendId' => [ 'type' => 'string', 'locationName' => 'backendId', ],
                'urlMapId' => [ 'type' => 'string', 'locationName' => 'urlMapId', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'securityPolicyId' => [ 'type' => 'string', 'locationName' => 'securityPolicyId', ],
            ],
        ],
        'UpdateLoadBalancerSpec' => [
            'type' => 'structure',
            'members' => [
                'loadBalancerName' => [ 'type' => 'string', 'locationName' => 'loadBalancerName', ],
                'action' => [ 'type' => 'string', 'locationName' => 'action', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'domainEnable' => [ 'type' => 'boolean', 'locationName' => 'domainEnable', ],
                'deleteProtection' => [ 'type' => 'boolean', 'locationName' => 'deleteProtection', ],
                'privateIpAddress' => [ 'type' => 'string', 'locationName' => 'privateIpAddress', ],
            ],
        ],
        'UpdateRulesSpec' => [
            'type' => 'structure',
            'members' => [
                'ruleUpdateSpecs' => [ 'type' => 'list', 'member' => [ 'shape' => 'RuleUpdateSpec', ], ],
            ],
        ],
        'UpdateTargetGroupSpec' => [
            'type' => 'structure',
            'members' => [
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'targetGroupName' => [ 'type' => 'string', 'locationName' => 'targetGroupName', ],
            ],
        ],
        'UpdateUrlMapSpec' => [
            'type' => 'structure',
            'members' => [
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'urlMapName' => [ 'type' => 'string', 'locationName' => 'urlMapName', ],
            ],
        ],
        'UrlMap' => [
            'type' => 'structure',
            'members' => [
                'urlMapId' => [ 'type' => 'string', 'locationName' => 'urlMapId', ],
                'urlMapName' => [ 'type' => 'string', 'locationName' => 'urlMapName', ],
                'loadBalancerId' => [ 'type' => 'string', 'locationName' => 'loadBalancerId', ],
                'listenerIds' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'createdTime' => [ 'type' => 'string', 'locationName' => 'createdTime', ],
                'rules' => [ 'type' => 'list', 'member' => [ 'shape' => 'Rule', ], ],
            ],
        ],
        'DeleteBackendResultShape' => [
            'type' => 'structure',
            'members' => [
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
        'DescribeBackendsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'filters' => [ 'type' => 'list', 'member' => [ 'shape' => 'Filter', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'Sort' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'direction' => [ 'type' => 'string', 'locationName' => 'direction', ],
            ],
        ],
        'UpdateBackendResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'CreateBackendRequestShape' => [
            'type' => 'structure',
            'members' => [
                'backendName' => [ 'type' => 'string', 'locationName' => 'backendName', ],
                'loadBalancerId' => [ 'type' => 'string', 'locationName' => 'loadBalancerId', ],
                'protocol' => [ 'type' => 'string', 'locationName' => 'protocol', ],
                'port' => [ 'type' => 'integer', 'locationName' => 'port', ],
                'healthCheckSpec' =>  [ 'shape' => 'HealthCheckSpec', ],
                'algorithm' => [ 'type' => 'string', 'locationName' => 'algorithm', ],
                'targetGroupIds' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'agIds' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'agInfoSpec' => [ 'type' => 'list', 'member' => [ 'shape' => 'AgInfoSpec', ], ],
                'proxyProtocol' => [ 'type' => 'boolean', 'locationName' => 'proxyProtocol', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'sessionStickiness' => [ 'type' => 'boolean', 'locationName' => 'sessionStickiness', ],
                'sessionStickyTimeout' => [ 'type' => 'integer', 'locationName' => 'sessionStickyTimeout', ],
                'connectionDrainingSeconds' => [ 'type' => 'integer', 'locationName' => 'connectionDrainingSeconds', ],
                'httpCookieExpireSeconds' => [ 'type' => 'integer', 'locationName' => 'httpCookieExpireSeconds', ],
                'httpForwardedProtocol' => [ 'type' => 'boolean', 'locationName' => 'httpForwardedProtocol', ],
                'httpForwardedPort' => [ 'type' => 'boolean', 'locationName' => 'httpForwardedPort', ],
                'httpForwardedHost' => [ 'type' => 'boolean', 'locationName' => 'httpForwardedHost', ],
                'httpForwardedVip' => [ 'type' => 'boolean', 'locationName' => 'httpForwardedVip', ],
                'httpForwardedClientPort' => [ 'type' => 'boolean', 'locationName' => 'httpForwardedClientPort', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'UpdateAgTargetsResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'UpdateAgTargetsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'targetUpdateSpecs' => [ 'type' => 'list', 'member' => [ 'shape' => 'TargetUpdateSpec', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'backendId' => [ 'type' => 'string', 'locationName' => 'backendId', ],
            ],
        ],
        'DescribeBackendsResultShape' => [
            'type' => 'structure',
            'members' => [
                'backends' => [ 'type' => 'list', 'member' => [ 'shape' => 'Backend', ], ],
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
            ],
        ],
        'DescribeTargetHealthRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'backendId' => [ 'type' => 'string', 'locationName' => 'backendId', ],
            ],
        ],
        'DescribeAgTargetsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeAgTargetsResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DeleteBackendResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeAgTargetsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'filters' => [ 'type' => 'list', 'member' => [ 'shape' => 'Filter', ], ],
                'sorts' => [ 'type' => 'list', 'member' => [ 'shape' => 'Sort', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'backendId' => [ 'type' => 'string', 'locationName' => 'backendId', ],
            ],
        ],
        'DescribeBackendResultShape' => [
            'type' => 'structure',
            'members' => [
                'backend' =>  [ 'shape' => 'Backend', ],
            ],
        ],
        'DescribeAgTargetsResultShape' => [
            'type' => 'structure',
            'members' => [
                'targets' => [ 'type' => 'list', 'member' => [ 'shape' => 'AgTarget', ], ],
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
            ],
        ],
        'DeleteBackendRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'backendId' => [ 'type' => 'string', 'locationName' => 'backendId', ],
            ],
        ],
        'UpdateBackendRequestShape' => [
            'type' => 'structure',
            'members' => [
                'backendName' => [ 'type' => 'string', 'locationName' => 'backendName', ],
                'healthCheckSpec' =>  [ 'shape' => 'HealthCheckSpec', ],
                'algorithm' => [ 'type' => 'string', 'locationName' => 'algorithm', ],
                'targetGroupIds' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'agIds' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'agInfoSpec' => [ 'type' => 'list', 'member' => [ 'shape' => 'AgInfoSpec', ], ],
                'proxyProtocol' => [ 'type' => 'boolean', 'locationName' => 'proxyProtocol', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'sessionStickiness' => [ 'type' => 'boolean', 'locationName' => 'sessionStickiness', ],
                'sessionStickyTimeout' => [ 'type' => 'integer', 'locationName' => 'sessionStickyTimeout', ],
                'connectionDrainingSeconds' => [ 'type' => 'integer', 'locationName' => 'connectionDrainingSeconds', ],
                'httpCookieExpireSeconds' => [ 'type' => 'integer', 'locationName' => 'httpCookieExpireSeconds', ],
                'httpForwardedProtocol' => [ 'type' => 'boolean', 'locationName' => 'httpForwardedProtocol', ],
                'httpForwardedPort' => [ 'type' => 'boolean', 'locationName' => 'httpForwardedPort', ],
                'httpForwardedHost' => [ 'type' => 'boolean', 'locationName' => 'httpForwardedHost', ],
                'httpForwardedVip' => [ 'type' => 'boolean', 'locationName' => 'httpForwardedVip', ],
                'httpForwardedClientPort' => [ 'type' => 'boolean', 'locationName' => 'httpForwardedClientPort', ],
                'closeHealthCheck' => [ 'type' => 'boolean', 'locationName' => 'closeHealthCheck', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'backendId' => [ 'type' => 'string', 'locationName' => 'backendId', ],
            ],
        ],
        'CreateBackendResultShape' => [
            'type' => 'structure',
            'members' => [
                'backendId' => [ 'type' => 'string', 'locationName' => 'backendId', ],
            ],
        ],
        'DescribeBackendsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeBackendsResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'UpdateBackendResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'UpdateAgTargetsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeTargetHealthResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeTargetHealthResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeBackendResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeBackendResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeTargetHealthResultShape' => [
            'type' => 'structure',
            'members' => [
                'targetHealths' => [ 'type' => 'list', 'member' => [ 'shape' => 'TargetHealth', ], ],
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
            ],
        ],
        'CreateBackendResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'CreateBackendResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeBackendRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'backendId' => [ 'type' => 'string', 'locationName' => 'backendId', ],
            ],
        ],
        'DescribeCustomizedConfigurationResultShape' => [
            'type' => 'structure',
            'members' => [
                'customizedConfiguration' =>  [ 'shape' => 'CustomizedConfiguration', ],
            ],
        ],
        'DescribeCustomizedConfigurationsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeCustomizedConfigurationsResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'CreateCustomizedConfigurationResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'CreateCustomizedConfigurationResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DisassociateCustomizedConfigurationResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeCustomizedConfigurationsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'filters' => [ 'type' => 'list', 'member' => [ 'shape' => 'Filter', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'CreateCustomizedConfigurationResultShape' => [
            'type' => 'structure',
            'members' => [
                'customizedConfigurationId' => [ 'type' => 'string', 'locationName' => 'customizedConfigurationId', ],
            ],
        ],
        'UpdateCustomizedConfigurationRequestShape' => [
            'type' => 'structure',
            'members' => [
                'customizedConfigurationName' => [ 'type' => 'string', 'locationName' => 'customizedConfigurationName', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'customizedConfigurationContent' =>  [ 'shape' => 'CustomizedConfigurationContentSpec', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'customizedConfigurationId' => [ 'type' => 'string', 'locationName' => 'customizedConfigurationId', ],
            ],
        ],
        'AssociateCustomizedConfigurationResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeCustomizedConfigurationRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'customizedConfigurationId' => [ 'type' => 'string', 'locationName' => 'customizedConfigurationId', ],
            ],
        ],
        'DeleteCustomizedConfigurationResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DeleteCustomizedConfigurationRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'customizedConfigurationId' => [ 'type' => 'string', 'locationName' => 'customizedConfigurationId', ],
            ],
        ],
        'CreateCustomizedConfigurationRequestShape' => [
            'type' => 'structure',
            'members' => [
                'customizedConfigurationName' => [ 'type' => 'string', 'locationName' => 'customizedConfigurationName', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'customizedConfigurationContent' =>  [ 'shape' => 'CustomizedConfigurationContentSpec', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DeleteCustomizedConfigurationResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DisassociateCustomizedConfigurationResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DescribeCustomizedConfigurationResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeCustomizedConfigurationResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DisassociateCustomizedConfigurationRequestShape' => [
            'type' => 'structure',
            'members' => [
                'resourceIds' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'customizedConfigurationId' => [ 'type' => 'string', 'locationName' => 'customizedConfigurationId', ],
            ],
        ],
        'UpdateCustomizedConfigurationResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'AssociateCustomizedConfigurationResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'UpdateCustomizedConfigurationResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeCustomizedConfigurationsResultShape' => [
            'type' => 'structure',
            'members' => [
                'customizedConfigurations' => [ 'type' => 'list', 'member' => [ 'shape' => 'CustomizedConfiguration', ], ],
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
            ],
        ],
        'AssociateCustomizedConfigurationRequestShape' => [
            'type' => 'structure',
            'members' => [
                'resourceIds' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'customizedConfigurationId' => [ 'type' => 'string', 'locationName' => 'customizedConfigurationId', ],
            ],
        ],
        'UpdateListenerResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DeleteListenerResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'AddListenerCertificatesResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DescribeListenersRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'filters' => [ 'type' => 'list', 'member' => [ 'shape' => 'Filter', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DescribeListenerResultShape' => [
            'type' => 'structure',
            'members' => [
                'listener' =>  [ 'shape' => 'Listener', ],
            ],
        ],
        'DeleteListenerCertificatesResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DescribeListenerResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeListenerResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DeleteListenerCertificatesResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'UpdateListenerCertificatesResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'AddListenerCertificatesRequestShape' => [
            'type' => 'structure',
            'members' => [
                'certificates' => [ 'type' => 'list', 'member' => [ 'shape' => 'ExtCertificateSpec', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'listenerId' => [ 'type' => 'string', 'locationName' => 'listenerId', ],
            ],
        ],
        'DescribeListenerRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'listenerId' => [ 'type' => 'string', 'locationName' => 'listenerId', ],
            ],
        ],
        'DeleteListenerResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'CreateListenerResultShape' => [
            'type' => 'structure',
            'members' => [
                'listenerId' => [ 'type' => 'string', 'locationName' => 'listenerId', ],
            ],
        ],
        'CreateListenerRequestShape' => [
            'type' => 'structure',
            'members' => [
                'listenerName' => [ 'type' => 'string', 'locationName' => 'listenerName', ],
                'protocol' => [ 'type' => 'string', 'locationName' => 'protocol', ],
                'hstsEnable' => [ 'type' => 'boolean', 'locationName' => 'hstsEnable', ],
                'hstsMaxAge' => [ 'type' => 'integer', 'locationName' => 'hstsMaxAge', ],
                'port' => [ 'type' => 'integer', 'locationName' => 'port', ],
                'backendId' => [ 'type' => 'string', 'locationName' => 'backendId', ],
                'loadBalancerId' => [ 'type' => 'string', 'locationName' => 'loadBalancerId', ],
                'urlMapId' => [ 'type' => 'string', 'locationName' => 'urlMapId', ],
                'action' => [ 'type' => 'string', 'locationName' => 'action', ],
                'certificateSpecs' => [ 'type' => 'list', 'member' => [ 'shape' => 'CertificateSpec', ], ],
                'limitation' =>  [ 'shape' => 'LimitationSpec', ],
                'connectionIdleTimeSeconds' => [ 'type' => 'integer', 'locationName' => 'connectionIdleTimeSeconds', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'securityPolicyId' => [ 'type' => 'string', 'locationName' => 'securityPolicyId', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DeleteListenerRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'listenerId' => [ 'type' => 'string', 'locationName' => 'listenerId', ],
            ],
        ],
        'DescribeListenersResultShape' => [
            'type' => 'structure',
            'members' => [
                'listeners' => [ 'type' => 'list', 'member' => [ 'shape' => 'Listener', ], ],
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
            ],
        ],
        'UpdateListenerCertificatesResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'UpdateListenerCertificatesRequestShape' => [
            'type' => 'structure',
            'members' => [
                'certificates' => [ 'type' => 'list', 'member' => [ 'shape' => 'ExtCertificateUpdateSpec', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'listenerId' => [ 'type' => 'string', 'locationName' => 'listenerId', ],
            ],
        ],
        'UpdateListenerResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'CreateListenerResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'CreateListenerResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'AddListenerCertificatesResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeListenersResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeListenersResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'UpdateListenerRequestShape' => [
            'type' => 'structure',
            'members' => [
                'listenerName' => [ 'type' => 'string', 'locationName' => 'listenerName', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'hstsEnable' => [ 'type' => 'boolean', 'locationName' => 'hstsEnable', ],
                'hstsMaxAge' => [ 'type' => 'integer', 'locationName' => 'hstsMaxAge', ],
                'certificateSpecs' => [ 'type' => 'list', 'member' => [ 'shape' => 'CertificateSpec', ], ],
                'limitation' =>  [ 'shape' => 'LimitationSpec', ],
                'connectionIdleTimeSeconds' => [ 'type' => 'integer', 'locationName' => 'connectionIdleTimeSeconds', ],
                'backendId' => [ 'type' => 'string', 'locationName' => 'backendId', ],
                'urlMapId' => [ 'type' => 'string', 'locationName' => 'urlMapId', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'securityPolicyId' => [ 'type' => 'string', 'locationName' => 'securityPolicyId', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'listenerId' => [ 'type' => 'string', 'locationName' => 'listenerId', ],
            ],
        ],
        'DeleteListenerCertificatesRequestShape' => [
            'type' => 'structure',
            'members' => [
                'certificateBindIds' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'listenerId' => [ 'type' => 'string', 'locationName' => 'listenerId', ],
            ],
        ],
        'DescribeLoadBalancersResultShape' => [
            'type' => 'structure',
            'members' => [
                'loadBalancers' => [ 'type' => 'list', 'member' => [ 'shape' => 'LoadBalancer', ], ],
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
            ],
        ],
        'CreateLoadBalancerRequestShape' => [
            'type' => 'structure',
            'members' => [
                'loadBalancerName' => [ 'type' => 'string', 'locationName' => 'loadBalancerName', ],
                'subnetId' => [ 'type' => 'string', 'locationName' => 'subnetId', ],
                'type' => [ 'type' => 'string', 'locationName' => 'type', ],
                'azs' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'chargeSpec' =>  [ 'shape' => 'ChargeSpec', ],
                'elasticIp' =>  [ 'shape' => 'ElasticIpSpec', ],
                'privateIpAddress' => [ 'type' => 'string', 'locationName' => 'privateIpAddress', ],
                'securityGroupIds' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'deleteProtection' => [ 'type' => 'boolean', 'locationName' => 'deleteProtection', ],
                'userTags' => [ 'type' => 'list', 'member' => [ 'shape' => 'Tag', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DisassociateElasticIpRequestShape' => [
            'type' => 'structure',
            'members' => [
                'elasticIpId' => [ 'type' => 'string', 'locationName' => 'elasticIpId', ],
                'deleteElasticIp' => [ 'type' => 'boolean', 'locationName' => 'deleteElasticIp', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'loadBalancerId' => [ 'type' => 'string', 'locationName' => 'loadBalancerId', ],
            ],
        ],
        'CreateLoadBalancerResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'CreateLoadBalancerResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeLoadBalancersResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeLoadBalancersResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeLoadBalancerResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeLoadBalancerResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'UpdateLoadBalancerResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DisassociateSecurityGroupRequestShape' => [
            'type' => 'structure',
            'members' => [
                'securityGroupIds' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'loadBalancerId' => [ 'type' => 'string', 'locationName' => 'loadBalancerId', ],
            ],
        ],
        'DescribeLoadBalancersBySecurityGroupResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeLoadBalancersBySecurityGroupResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'AssociateElasticIpResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DisassociateSecurityGroupResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DeleteLoadBalancerResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'CreateLoadBalancerResultShape' => [
            'type' => 'structure',
            'members' => [
                'loadBalancerId' => [ 'type' => 'string', 'locationName' => 'loadBalancerId', ],
            ],
        ],
        'DescribeLoadBalancerResultShape' => [
            'type' => 'structure',
            'members' => [
                'loadBalancer' =>  [ 'shape' => 'LoadBalancer', ],
            ],
        ],
        'DescribeLoadBalancersRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'filters' => [ 'type' => 'list', 'member' => [ 'shape' => 'Filter', ], ],
                'tags' => [ 'type' => 'list', 'member' => [ 'shape' => 'TagFilter', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DescribeLoadBalancerRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'loadBalancerId' => [ 'type' => 'string', 'locationName' => 'loadBalancerId', ],
            ],
        ],
        'UpdateLoadBalancerResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'AssociateSecurityGroupRequestShape' => [
            'type' => 'structure',
            'members' => [
                'securityGroupIds' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'loadBalancerId' => [ 'type' => 'string', 'locationName' => 'loadBalancerId', ],
            ],
        ],
        'DeleteLoadBalancerRequestShape' => [
            'type' => 'structure',
            'members' => [
                'deleteElasticIp' => [ 'type' => 'boolean', 'locationName' => 'deleteElasticIp', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'loadBalancerId' => [ 'type' => 'string', 'locationName' => 'loadBalancerId', ],
            ],
        ],
        'DeleteLoadBalancerResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'AssociateSecurityGroupResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DisassociateElasticIpResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DisassociateElasticIpResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'AssociateElasticIpResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DisassociateSecurityGroupResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DescribeLoadBalancersBySecurityGroupRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'securityGroupId' => [ 'type' => 'string', 'locationName' => 'securityGroupId', ],
            ],
        ],
        'UpdateLoadBalancerRequestShape' => [
            'type' => 'structure',
            'members' => [
                'loadBalancerName' => [ 'type' => 'string', 'locationName' => 'loadBalancerName', ],
                'action' => [ 'type' => 'string', 'locationName' => 'action', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'domainEnable' => [ 'type' => 'boolean', 'locationName' => 'domainEnable', ],
                'deleteProtection' => [ 'type' => 'boolean', 'locationName' => 'deleteProtection', ],
                'privateIpAddress' => [ 'type' => 'string', 'locationName' => 'privateIpAddress', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'loadBalancerId' => [ 'type' => 'string', 'locationName' => 'loadBalancerId', ],
            ],
        ],
        'AssociateSecurityGroupResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeLoadBalancersBySecurityGroupResultShape' => [
            'type' => 'structure',
            'members' => [
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
                'loadBalancers' => [ 'type' => 'list', 'member' => [ 'shape' => 'LoadBalancer', ], ],
            ],
        ],
        'AssociateElasticIpRequestShape' => [
            'type' => 'structure',
            'members' => [
                'elasticIpId' => [ 'type' => 'string', 'locationName' => 'elasticIpId', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'loadBalancerId' => [ 'type' => 'string', 'locationName' => 'loadBalancerId', ],
            ],
        ],
        'DescribeSecurityPoliciesResultShape' => [
            'type' => 'structure',
            'members' => [
                'securityPolicies' => [ 'type' => 'list', 'member' => [ 'shape' => 'SecurityPolicy', ], ],
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
            ],
        ],
        'DeleteSecurityPolicyResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'CreateSecurityPolicyRequestShape' => [
            'type' => 'structure',
            'members' => [
                'securityPolicyName' => [ 'type' => 'string', 'locationName' => 'securityPolicyName', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'protocols' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'ciphers' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'UpdateSecurityPolicyRequestShape' => [
            'type' => 'structure',
            'members' => [
                'securityPolicyName' => [ 'type' => 'string', 'locationName' => 'securityPolicyName', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'protocols' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'ciphers' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'securityPolicyId' => [ 'type' => 'string', 'locationName' => 'securityPolicyId', ],
            ],
        ],
        'UpdateSecurityPolicyResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeSupportedCiphersResultShape' => [
            'type' => 'structure',
            'members' => [
                'supportedCiphers' => [ 'type' => 'list', 'member' => [ 'shape' => 'SupportedCipher', ], ],
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
            ],
        ],
        'DescribeSecurityPolicyResultShape' => [
            'type' => 'structure',
            'members' => [
                'securityPolicy' =>  [ 'shape' => 'SecurityPolicy', ],
            ],
        ],
        'DescribeSupportedCiphersResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeSupportedCiphersResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'CreateSecurityPolicyResultShape' => [
            'type' => 'structure',
            'members' => [
                'securityPolicyId' => [ 'type' => 'string', 'locationName' => 'securityPolicyId', ],
            ],
        ],
        'DescribeSecurityPoliciesResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeSecurityPoliciesResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeSecurityPolicyRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'securityPolicyId' => [ 'type' => 'string', 'locationName' => 'securityPolicyId', ],
            ],
        ],
        'DescribeSecurityPoliciesRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'filters' => [ 'type' => 'list', 'member' => [ 'shape' => 'Filter', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DescribeSupportedCiphersRequestShape' => [
            'type' => 'structure',
            'members' => [
                'filters' => [ 'type' => 'list', 'member' => [ 'shape' => 'Filter', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'CreateSecurityPolicyResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'CreateSecurityPolicyResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeSecurityPolicyResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeSecurityPolicyResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DeleteSecurityPolicyRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'securityPolicyId' => [ 'type' => 'string', 'locationName' => 'securityPolicyId', ],
            ],
        ],
        'DeleteSecurityPolicyResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'UpdateSecurityPolicyResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'CreateTargetGroupResultShape' => [
            'type' => 'structure',
            'members' => [
                'targetGroupId' => [ 'type' => 'string', 'locationName' => 'targetGroupId', ],
            ],
        ],
        'RegisterTargetsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeTargetsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeTargetsResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'CreateTargetGroupResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'CreateTargetGroupResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'UpdateTargetsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'targetUpdateSpecs' => [ 'type' => 'list', 'member' => [ 'shape' => 'TargetUpdateSpec', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'targetGroupId' => [ 'type' => 'string', 'locationName' => 'targetGroupId', ],
            ],
        ],
        'DescribeTargetGroupsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'filters' => [ 'type' => 'list', 'member' => [ 'shape' => 'Filter', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DeleteTargetGroupResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DescribeTargetGroupsResultShape' => [
            'type' => 'structure',
            'members' => [
                'targetGroups' => [ 'type' => 'list', 'member' => [ 'shape' => 'TargetGroup', ], ],
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
            ],
        ],
        'RegisterTargetsResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'UpdateTargetGroupResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'UpdateTargetsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DeRegisterTargetsResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'UpdateTargetsResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'UpdateTargetGroupResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DeRegisterTargetsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'targetIds' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'targetGroupId' => [ 'type' => 'string', 'locationName' => 'targetGroupId', ],
            ],
        ],
        'DeRegisterTargetsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeTargetGroupRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'targetGroupId' => [ 'type' => 'string', 'locationName' => 'targetGroupId', ],
            ],
        ],
        'DeleteTargetGroupResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeTargetGroupResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeTargetGroupResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'CreateTargetGroupRequestShape' => [
            'type' => 'structure',
            'members' => [
                'targetGroupName' => [ 'type' => 'string', 'locationName' => 'targetGroupName', ],
                'loadBalancerId' => [ 'type' => 'string', 'locationName' => 'loadBalancerId', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'type' => [ 'type' => 'string', 'locationName' => 'type', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DescribeTargetGroupResultShape' => [
            'type' => 'structure',
            'members' => [
                'targetGroup' =>  [ 'shape' => 'TargetGroup', ],
            ],
        ],
        'DescribeTargetsResultShape' => [
            'type' => 'structure',
            'members' => [
                'targets' => [ 'type' => 'list', 'member' => [ 'shape' => 'Target', ], ],
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
            ],
        ],
        'RegisterTargetsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'targetSpecs' => [ 'type' => 'list', 'member' => [ 'shape' => 'TargetSpec', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'targetGroupId' => [ 'type' => 'string', 'locationName' => 'targetGroupId', ],
            ],
        ],
        'DescribeTargetsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'filters' => [ 'type' => 'list', 'member' => [ 'shape' => 'Filter', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'targetGroupId' => [ 'type' => 'string', 'locationName' => 'targetGroupId', ],
            ],
        ],
        'DeleteTargetGroupRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'targetGroupId' => [ 'type' => 'string', 'locationName' => 'targetGroupId', ],
            ],
        ],
        'UpdateTargetGroupRequestShape' => [
            'type' => 'structure',
            'members' => [
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'targetGroupName' => [ 'type' => 'string', 'locationName' => 'targetGroupName', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'targetGroupId' => [ 'type' => 'string', 'locationName' => 'targetGroupId', ],
            ],
        ],
        'DescribeTargetGroupsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeTargetGroupsResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'UpdateUrlMapRequestShape' => [
            'type' => 'structure',
            'members' => [
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'urlMapName' => [ 'type' => 'string', 'locationName' => 'urlMapName', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'urlMapId' => [ 'type' => 'string', 'locationName' => 'urlMapId', ],
            ],
        ],
        'DeleteRulesRequestShape' => [
            'type' => 'structure',
            'members' => [
                'ruleIds' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'urlMapId' => [ 'type' => 'string', 'locationName' => 'urlMapId', ],
            ],
        ],
        'AddRulesRequestShape' => [
            'type' => 'structure',
            'members' => [
                'ruleSpecs' => [ 'type' => 'list', 'member' => [ 'shape' => 'RuleSpec', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'urlMapId' => [ 'type' => 'string', 'locationName' => 'urlMapId', ],
            ],
        ],
        'DeleteUrlMapResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DescribeUrlMapsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeUrlMapsResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DeleteRulesResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'AddRulesResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'CreateUrlMapResultShape' => [
            'type' => 'structure',
            'members' => [
                'urlMapId' => [ 'type' => 'string', 'locationName' => 'urlMapId', ],
            ],
        ],
        'DescribeUrlMapResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeUrlMapResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeUrlMapRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'urlMapId' => [ 'type' => 'string', 'locationName' => 'urlMapId', ],
            ],
        ],
        'DeleteRulesResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeUrlMapResultShape' => [
            'type' => 'structure',
            'members' => [
                'urlMap' =>  [ 'shape' => 'UrlMap', ],
            ],
        ],
        'UpdateUrlMapResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DeleteUrlMapResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'UpdateRulesRequestShape' => [
            'type' => 'structure',
            'members' => [
                'ruleUpdateSpecs' => [ 'type' => 'list', 'member' => [ 'shape' => 'RuleUpdateSpec', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'urlMapId' => [ 'type' => 'string', 'locationName' => 'urlMapId', ],
            ],
        ],
        'AddRulesResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DescribeUrlMapsResultShape' => [
            'type' => 'structure',
            'members' => [
                'urlMaps' => [ 'type' => 'list', 'member' => [ 'shape' => 'UrlMap', ], ],
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
            ],
        ],
        'DeleteUrlMapRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'urlMapId' => [ 'type' => 'string', 'locationName' => 'urlMapId', ],
            ],
        ],
        'UpdateRulesResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'CreateUrlMapResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'CreateUrlMapResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeUrlMapsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'filters' => [ 'type' => 'list', 'member' => [ 'shape' => 'Filter', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'UpdateUrlMapResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'UpdateRulesResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'CreateUrlMapRequestShape' => [
            'type' => 'structure',
            'members' => [
                'urlMapName' => [ 'type' => 'string', 'locationName' => 'urlMapName', ],
                'loadBalancerId' => [ 'type' => 'string', 'locationName' => 'loadBalancerId', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
    ],
];
