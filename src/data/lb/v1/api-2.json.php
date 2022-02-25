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
        'RuleSpec' => [
            'type' => 'structure',
            'members' => [
                'host' => [ 'type' => 'string', 'locationName' => 'host', ],
                'path' => [ 'type' => 'string', 'locationName' => 'path', ],
                'action' => [ 'type' => 'string', 'locationName' => 'action', ],
                'backendId' => [ 'type' => 'string', 'locationName' => 'backendId', ],
                'redirectActionSpec' =>  [ 'shape' => 'RedirectActionSpec', ],
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
        'AddRulesSpec' => [
            'type' => 'structure',
            'members' => [
                'ruleSpecs' => [ 'type' => 'list', 'member' => [ 'shape' => 'RuleSpec', ], ],
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
                'healthCheck' => [ 'type' => 'object', 'locationName' => 'healthCheck', ],
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
        'HealthCheckSpec' => [
            'type' => 'structure',
            'members' => [
                'protocol' => [ 'type' => 'string', 'locationName' => 'protocol', ],
                'healthyThresholdCount' => [ 'type' => 'integer', 'locationName' => 'healthyThresholdCount', ],
                'unhealthyThresholdCount' => [ 'type' => 'integer', 'locationName' => 'unhealthyThresholdCount', ],
                'checkTimeoutSeconds' => [ 'type' => 'integer', 'locationName' => 'checkTimeoutSeconds', ],
                'intervalSeconds' => [ 'type' => 'integer', 'locationName' => 'intervalSeconds', ],
                'port' => [ 'type' => 'integer', 'locationName' => 'port', ],
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
                'connectionIdleTimeSeconds' => [ 'type' => 'integer', 'locationName' => 'connectionIdleTimeSeconds', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
            ],
        ],
        'Tag' => [
            'type' => 'structure',
            'members' => [
                'key' => [ 'type' => 'string', 'locationName' => 'key', ],
                'value' => [ 'type' => 'string', 'locationName' => 'value', ],
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
                'domainEnable' => [ 'type' => 'boolean', 'locationName' => 'domainEnable', ],
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
        'ElasticIpSpec' => [
            'type' => 'structure',
            'members' => [
                'bandwidth' => [ 'type' => 'integer', 'locationName' => 'bandwidth', ],
                'provider' => [ 'type' => 'string', 'locationName' => 'provider', ],
                'chargeSpec' =>  [ 'shape' => 'ChargeSpec', ],
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
        'HealthCheck' => [
            'type' => 'structure',
            'members' => [
                'protocol' => [ 'type' => 'string', 'locationName' => 'protocol', ],
                'healthyThresholdCount' => [ 'type' => 'integer', 'locationName' => 'healthyThresholdCount', ],
                'unhealthyThresholdCount' => [ 'type' => 'integer', 'locationName' => 'unhealthyThresholdCount', ],
                'checkTimeoutSeconds' => [ 'type' => 'integer', 'locationName' => 'checkTimeoutSeconds', ],
                'intervalSeconds' => [ 'type' => 'integer', 'locationName' => 'intervalSeconds', ],
                'port' => [ 'type' => 'integer', 'locationName' => 'port', ],
                'httpDomain' => [ 'type' => 'string', 'locationName' => 'httpDomain', ],
                'httpPath' => [ 'type' => 'string', 'locationName' => 'httpPath', ],
                'httpCode' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
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
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'createdTime' => [ 'type' => 'string', 'locationName' => 'createdTime', ],
                'extensionCertificateSpecs' => [ 'type' => 'list', 'member' => [ 'shape' => 'ExtensionCertificateSpec', ], ],
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
                'domainEnable' => [ 'type' => 'boolean', 'locationName' => 'domainEnable', ],
                'internalDomain' => [ 'type' => 'string', 'locationName' => 'internalDomain', ],
                'internetDomain' => [ 'type' => 'string', 'locationName' => 'internetDomain', ],
                'deleteProtection' => [ 'type' => 'boolean', 'locationName' => 'deleteProtection', ],
                'createdTime' => [ 'type' => 'string', 'locationName' => 'createdTime', ],
                'azType' => [ 'type' => 'string', 'locationName' => 'azType', ],
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
        'TargetUpdateSpec' => [
            'type' => 'structure',
            'members' => [
                'targetId' => [ 'type' => 'string', 'locationName' => 'targetId', ],
                'port' => [ 'type' => 'integer', 'locationName' => 'port', ],
                'weight' => [ 'type' => 'integer', 'locationName' => 'weight', ],
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
                'connectionIdleTimeSeconds' => [ 'type' => 'integer', 'locationName' => 'connectionIdleTimeSeconds', ],
                'backendId' => [ 'type' => 'string', 'locationName' => 'backendId', ],
                'urlMapId' => [ 'type' => 'string', 'locationName' => 'urlMapId', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
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
        'DescribeBackendResultShape' => [
            'type' => 'structure',
            'members' => [
                'backend' =>  [ 'shape' => 'Backend', ],
            ],
        ],
        'DeleteBackendRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'backendId' => [ 'type' => 'string', 'locationName' => 'backendId', ],
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
        'UpdateBackendRequestShape' => [
            'type' => 'structure',
            'members' => [
                'backendName' => [ 'type' => 'string', 'locationName' => 'backendName', ],
                'healthCheckSpec' =>  [ 'shape' => 'HealthCheckSpec', ],
                'algorithm' => [ 'type' => 'string', 'locationName' => 'algorithm', ],
                'targetGroupIds' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'agIds' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
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
        'UpdateBackendResultShape' => [
            'type' => 'structure',
            'members' => [
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
        'UpdateBackendResponseShape' => [
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
        'DescribeBackendsResultShape' => [
            'type' => 'structure',
            'members' => [
                'backends' => [ 'type' => 'list', 'member' => [ 'shape' => 'Backend', ], ],
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
            ],
        ],
        'DescribeBackendResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeBackendResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeTargetHealthRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'backendId' => [ 'type' => 'string', 'locationName' => 'backendId', ],
            ],
        ],
        'DescribeTargetHealthResultShape' => [
            'type' => 'structure',
            'members' => [
                'targetHealths' => [ 'type' => 'list', 'member' => [ 'shape' => 'TargetHealth', ], ],
            ],
        ],
        'DeleteBackendResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
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
                'connectionIdleTimeSeconds' => [ 'type' => 'integer', 'locationName' => 'connectionIdleTimeSeconds', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
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
                'connectionIdleTimeSeconds' => [ 'type' => 'integer', 'locationName' => 'connectionIdleTimeSeconds', ],
                'backendId' => [ 'type' => 'string', 'locationName' => 'backendId', ],
                'urlMapId' => [ 'type' => 'string', 'locationName' => 'urlMapId', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
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
                'domainEnable' => [ 'type' => 'boolean', 'locationName' => 'domainEnable', ],
                'deleteProtection' => [ 'type' => 'boolean', 'locationName' => 'deleteProtection', ],
                'userTags' => [ 'type' => 'list', 'member' => [ 'shape' => 'Tag', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DisassociateElasticIpRequestShape' => [
            'type' => 'structure',
            'members' => [
                'elasticIpId' => [ 'type' => 'string', 'locationName' => 'elasticIpId', ],
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
        'AssociateElasticIpRequestShape' => [
            'type' => 'structure',
            'members' => [
                'elasticIpId' => [ 'type' => 'string', 'locationName' => 'elasticIpId', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'loadBalancerId' => [ 'type' => 'string', 'locationName' => 'loadBalancerId', ],
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
