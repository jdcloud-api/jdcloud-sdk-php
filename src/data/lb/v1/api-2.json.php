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
    ],
];
