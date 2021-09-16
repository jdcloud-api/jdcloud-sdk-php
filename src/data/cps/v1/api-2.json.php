<?php
// This file was auto-generated
return [
//    'version' => '',
    'metadata' =>
    [
//        'apiVersion' => '',
//        'endpointPrefix' => 'cps',
        'protocol' => 'json',
//        'serviceFullName' => 'cps',
//        'serviceId' => 'cps',
    ],
    'operations' => [
        'DescribeAliasIps' => [
            'name' => 'DescribeAliasIps',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/aliasIps',
            ],
            'input' => [ 'shape' => 'DescribeAliasIpsRequestShape', ],
            'output' => [ 'shape' => 'DescribeAliasIpsResponseShape', ],
        ],
        'CreateAliasIp' => [
            'name' => 'CreateAliasIp',
            'http' => [
                'method' => 'PUT',
                'requestUri' => '/v1/regions/{regionId}/aliasIps',
            ],
            'input' => [ 'shape' => 'CreateAliasIpRequestShape', ],
            'output' => [ 'shape' => 'CreateAliasIpResponseShape', ],
        ],
        'DeleteAliasIp' => [
            'name' => 'DeleteAliasIp',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/regions/{regionId}/aliasIps/{aliasIpId}',
            ],
            'input' => [ 'shape' => 'DeleteAliasIpRequestShape', ],
            'output' => [ 'shape' => 'DeleteAliasIpResponseShape', ],
        ],
        'DescribeCerts' => [
            'name' => 'DescribeCerts',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/certs',
            ],
            'input' => [ 'shape' => 'DescribeCertsRequestShape', ],
            'output' => [ 'shape' => 'DescribeCertsResponseShape', ],
        ],
        'CreateCert' => [
            'name' => 'CreateCert',
            'http' => [
                'method' => 'PUT',
                'requestUri' => '/v1/regions/{regionId}/certs',
            ],
            'input' => [ 'shape' => 'CreateCertRequestShape', ],
            'output' => [ 'shape' => 'CreateCertResponseShape', ],
        ],
        'DescribeCert' => [
            'name' => 'DescribeCert',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/certs/{certId}',
            ],
            'input' => [ 'shape' => 'DescribeCertRequestShape', ],
            'output' => [ 'shape' => 'DescribeCertResponseShape', ],
        ],
        'RemoveCert' => [
            'name' => 'RemoveCert',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/regions/{regionId}/certs/{certId}',
            ],
            'input' => [ 'shape' => 'RemoveCertRequestShape', ],
            'output' => [ 'shape' => 'RemoveCertResponseShape', ],
        ],
        'ModifyCert' => [
            'name' => 'ModifyCert',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/certs/{certId}:modifyCert',
            ],
            'input' => [ 'shape' => 'ModifyCertRequestShape', ],
            'output' => [ 'shape' => 'ModifyCertResponseShape', ],
        ],
        'DescribeElasticIps' => [
            'name' => 'DescribeElasticIps',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/elasticIps',
            ],
            'input' => [ 'shape' => 'DescribeElasticIpsRequestShape', ],
            'output' => [ 'shape' => 'DescribeElasticIpsResponseShape', ],
        ],
        'ApplyElasticIps' => [
            'name' => 'ApplyElasticIps',
            'http' => [
                'method' => 'PUT',
                'requestUri' => '/v1/regions/{regionId}/elasticIps',
            ],
            'input' => [ 'shape' => 'ApplyElasticIpsRequestShape', ],
            'output' => [ 'shape' => 'ApplyElasticIpsResponseShape', ],
        ],
        'DescribeElasticIp' => [
            'name' => 'DescribeElasticIp',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/elasticIps/{elasticIpId}',
            ],
            'input' => [ 'shape' => 'DescribeElasticIpRequestShape', ],
            'output' => [ 'shape' => 'DescribeElasticIpResponseShape', ],
        ],
        'ModifyElasticIpBandwidth' => [
            'name' => 'ModifyElasticIpBandwidth',
            'http' => [
                'method' => 'PUT',
                'requestUri' => '/v1/regions/{regionId}/elasticIps/{elasticIpId}:modifyElasticIpBandwidth',
            ],
            'input' => [ 'shape' => 'ModifyElasticIpBandwidthRequestShape', ],
            'output' => [ 'shape' => 'ModifyElasticIpBandwidthResponseShape', ],
        ],
        'DescribeElasticIpName' => [
            'name' => 'DescribeElasticIpName',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/elasticIp/{elasticIpId}:describeElasticIpName',
            ],
            'input' => [ 'shape' => 'DescribeElasticIpNameRequestShape', ],
            'output' => [ 'shape' => 'DescribeElasticIpNameResponseShape', ],
        ],
        'DescribeDeviceTypes' => [
            'name' => 'DescribeDeviceTypes',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/deviceTypes',
            ],
            'input' => [ 'shape' => 'DescribeDeviceTypesRequestShape', ],
            'output' => [ 'shape' => 'DescribeDeviceTypesResponseShape', ],
        ],
        'DescribeOS' => [
            'name' => 'DescribeOS',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/os',
            ],
            'input' => [ 'shape' => 'DescribeOSRequestShape', ],
            'output' => [ 'shape' => 'DescribeOSResponseShape', ],
        ],
        'DescribeDeviceRaids' => [
            'name' => 'DescribeDeviceRaids',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/raids',
            ],
            'input' => [ 'shape' => 'DescribeDeviceRaidsRequestShape', ],
            'output' => [ 'shape' => 'DescribeDeviceRaidsResponseShape', ],
        ],
        'DescribeInstance' => [
            'name' => 'DescribeInstance',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}',
            ],
            'input' => [ 'shape' => 'DescribeInstanceRequestShape', ],
            'output' => [ 'shape' => 'DescribeInstanceResponseShape', ],
        ],
        'DescribeInstances' => [
            'name' => 'DescribeInstances',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/instances',
            ],
            'input' => [ 'shape' => 'DescribeInstancesRequestShape', ],
            'output' => [ 'shape' => 'DescribeInstancesResponseShape', ],
        ],
        'CreateInstances' => [
            'name' => 'CreateInstances',
            'http' => [
                'method' => 'PUT',
                'requestUri' => '/v1/regions/{regionId}/instances',
            ],
            'input' => [ 'shape' => 'CreateInstancesRequestShape', ],
            'output' => [ 'shape' => 'CreateInstancesResponseShape', ],
        ],
        'DescribeInstanceName' => [
            'name' => 'DescribeInstanceName',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}:describeInstanceName',
            ],
            'input' => [ 'shape' => 'DescribeInstanceNameRequestShape', ],
            'output' => [ 'shape' => 'DescribeInstanceNameResponseShape', ],
        ],
        'AssignIpv6Address' => [
            'name' => 'AssignIpv6Address',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}:assignIpv6Address',
            ],
            'input' => [ 'shape' => 'AssignIpv6AddressRequestShape', ],
            'output' => [ 'shape' => 'AssignIpv6AddressResponseShape', ],
        ],
        'ModifyInstance' => [
            'name' => 'ModifyInstance',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}:modifyInstance',
            ],
            'input' => [ 'shape' => 'ModifyInstanceRequestShape', ],
            'output' => [ 'shape' => 'ModifyInstanceResponseShape', ],
        ],
        'DescribeInstanceRaid' => [
            'name' => 'DescribeInstanceRaid',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}:describeInstanceRaid',
            ],
            'input' => [ 'shape' => 'DescribeInstanceRaidRequestShape', ],
            'output' => [ 'shape' => 'DescribeInstanceRaidResponseShape', ],
        ],
        'DescribeInstanceStatus' => [
            'name' => 'DescribeInstanceStatus',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}:describeInstanceStatus',
            ],
            'input' => [ 'shape' => 'DescribeInstanceStatusRequestShape', ],
            'output' => [ 'shape' => 'DescribeInstanceStatusResponseShape', ],
        ],
        'RestartInstance' => [
            'name' => 'RestartInstance',
            'http' => [
                'method' => 'PUT',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}:restartInstance',
            ],
            'input' => [ 'shape' => 'RestartInstanceRequestShape', ],
            'output' => [ 'shape' => 'RestartInstanceResponseShape', ],
        ],
        'StopInstance' => [
            'name' => 'StopInstance',
            'http' => [
                'method' => 'PUT',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}:stopInstance',
            ],
            'input' => [ 'shape' => 'StopInstanceRequestShape', ],
            'output' => [ 'shape' => 'StopInstanceResponseShape', ],
        ],
        'StartInstance' => [
            'name' => 'StartInstance',
            'http' => [
                'method' => 'PUT',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}:startInstance',
            ],
            'input' => [ 'shape' => 'StartInstanceRequestShape', ],
            'output' => [ 'shape' => 'StartInstanceResponseShape', ],
        ],
        'RestartInstances' => [
            'name' => 'RestartInstances',
            'http' => [
                'method' => 'PUT',
                'requestUri' => '/v1/regions/{regionId}/instances:restartInstances',
            ],
            'input' => [ 'shape' => 'RestartInstancesRequestShape', ],
            'output' => [ 'shape' => 'RestartInstancesResponseShape', ],
        ],
        'StopInstances' => [
            'name' => 'StopInstances',
            'http' => [
                'method' => 'PUT',
                'requestUri' => '/v1/regions/{regionId}/instances:stopInstances',
            ],
            'input' => [ 'shape' => 'StopInstancesRequestShape', ],
            'output' => [ 'shape' => 'StopInstancesResponseShape', ],
        ],
        'StartInstances' => [
            'name' => 'StartInstances',
            'http' => [
                'method' => 'PUT',
                'requestUri' => '/v1/regions/{regionId}/instances:startInstances',
            ],
            'input' => [ 'shape' => 'StartInstancesRequestShape', ],
            'output' => [ 'shape' => 'StartInstancesResponseShape', ],
        ],
        'ReinstallInstance' => [
            'name' => 'ReinstallInstance',
            'http' => [
                'method' => 'PUT',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}:reinstallInstance',
            ],
            'input' => [ 'shape' => 'ReinstallInstanceRequestShape', ],
            'output' => [ 'shape' => 'ReinstallInstanceResponseShape', ],
        ],
        'ModifyBandwidth' => [
            'name' => 'ModifyBandwidth',
            'http' => [
                'method' => 'PUT',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}:modifyBandwidth',
            ],
            'input' => [ 'shape' => 'ModifyBandwidthRequestShape', ],
            'output' => [ 'shape' => 'ModifyBandwidthResponseShape', ],
        ],
        'AssociateElasticIp' => [
            'name' => 'AssociateElasticIp',
            'http' => [
                'method' => 'PUT',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}:associateElasticIp',
            ],
            'input' => [ 'shape' => 'AssociateElasticIpRequestShape', ],
            'output' => [ 'shape' => 'AssociateElasticIpResponseShape', ],
        ],
        'DisassociateElasticIp' => [
            'name' => 'DisassociateElasticIp',
            'http' => [
                'method' => 'PUT',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}:disassociateElasticIp',
            ],
            'input' => [ 'shape' => 'DisassociateElasticIpRequestShape', ],
            'output' => [ 'shape' => 'DisassociateElasticIpResponseShape', ],
        ],
        'ResetPassword' => [
            'name' => 'ResetPassword',
            'http' => [
                'method' => 'PUT',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}:resetPassword',
            ],
            'input' => [ 'shape' => 'ResetPasswordRequestShape', ],
            'output' => [ 'shape' => 'ResetPasswordResponseShape', ],
        ],
        'DescribeAvailablePrivateIp' => [
            'name' => 'DescribeAvailablePrivateIp',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}/availablePrivateIps',
            ],
            'input' => [ 'shape' => 'DescribeAvailablePrivateIpRequestShape', ],
            'output' => [ 'shape' => 'DescribeAvailablePrivateIpResponseShape', ],
        ],
        'DescribeInstanceMonitorInfo' => [
            'name' => 'DescribeInstanceMonitorInfo',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}/monitor',
            ],
            'input' => [ 'shape' => 'DescribeInstanceMonitorInfoRequestShape', ],
            'output' => [ 'shape' => 'DescribeInstanceMonitorInfoResponseShape', ],
        ],
        'DescribeEventLogs' => [
            'name' => 'DescribeEventLogs',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}/describeEventLogs',
            ],
            'input' => [ 'shape' => 'DescribeEventLogsRequestShape', ],
            'output' => [ 'shape' => 'DescribeEventLogsResponseShape', ],
        ],
        'DescribeIpv6Address' => [
            'name' => 'DescribeIpv6Address',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/ipv6Addresses/{ipv6AddressId}',
            ],
            'input' => [ 'shape' => 'DescribeIpv6AddressRequestShape', ],
            'output' => [ 'shape' => 'DescribeIpv6AddressResponseShape', ],
        ],
        'DescribeIpv6Addresses' => [
            'name' => 'DescribeIpv6Addresses',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/ipv6Addresses',
            ],
            'input' => [ 'shape' => 'DescribeIpv6AddressesRequestShape', ],
            'output' => [ 'shape' => 'DescribeIpv6AddressesResponseShape', ],
        ],
        'AssignIpv6AddressesBandwidth' => [
            'name' => 'AssignIpv6AddressesBandwidth',
            'http' => [
                'method' => 'PUT',
                'requestUri' => '/v1/regions/{regionId}/ipv6Addresses',
            ],
            'input' => [ 'shape' => 'AssignIpv6AddressesBandwidthRequestShape', ],
            'output' => [ 'shape' => 'AssignIpv6AddressesBandwidthResponseShape', ],
        ],
        'ModifyIpv6AddressBandwidth' => [
            'name' => 'ModifyIpv6AddressBandwidth',
            'http' => [
                'method' => 'PUT',
                'requestUri' => '/v1/regions/{regionId}/ipv6Addresses/{ipv6AddressId}:modifyIpv6AddressBandwidth',
            ],
            'input' => [ 'shape' => 'ModifyIpv6AddressBandwidthRequestShape', ],
            'output' => [ 'shape' => 'ModifyIpv6AddressBandwidthResponseShape', ],
        ],
        'DescribeIpv6Gateways' => [
            'name' => 'DescribeIpv6Gateways',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/ipv6Gateways',
            ],
            'input' => [ 'shape' => 'DescribeIpv6GatewaysRequestShape', ],
            'output' => [ 'shape' => 'DescribeIpv6GatewaysResponseShape', ],
        ],
        'DescribeIpv6Gateway' => [
            'name' => 'DescribeIpv6Gateway',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/ipv6Gateways/{ipv6GatewayId}',
            ],
            'input' => [ 'shape' => 'DescribeIpv6GatewayRequestShape', ],
            'output' => [ 'shape' => 'DescribeIpv6GatewayResponseShape', ],
        ],
        'ModifyIpv6Gateway' => [
            'name' => 'ModifyIpv6Gateway',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/ipv6Gateways/{ipv6GatewayId}',
            ],
            'input' => [ 'shape' => 'ModifyIpv6GatewayRequestShape', ],
            'output' => [ 'shape' => 'ModifyIpv6GatewayResponseShape', ],
        ],
        'DescribeKeypairs' => [
            'name' => 'DescribeKeypairs',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/keypairs',
            ],
            'input' => [ 'shape' => 'DescribeKeypairsRequestShape', ],
            'output' => [ 'shape' => 'DescribeKeypairsResponseShape', ],
        ],
        'CreateKeypairs' => [
            'name' => 'CreateKeypairs',
            'http' => [
                'method' => 'PUT',
                'requestUri' => '/v1/regions/{regionId}/keypairs',
            ],
            'input' => [ 'shape' => 'CreateKeypairsRequestShape', ],
            'output' => [ 'shape' => 'CreateKeypairsResponseShape', ],
        ],
        'ImportKeypairs' => [
            'name' => 'ImportKeypairs',
            'http' => [
                'method' => 'PUT',
                'requestUri' => '/v1/regions/{regionId}/keypairs:import',
            ],
            'input' => [ 'shape' => 'ImportKeypairsRequestShape', ],
            'output' => [ 'shape' => 'ImportKeypairsResponseShape', ],
        ],
        'DescribeKeypair' => [
            'name' => 'DescribeKeypair',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/keypairs/{keypairId}',
            ],
            'input' => [ 'shape' => 'DescribeKeypairRequestShape', ],
            'output' => [ 'shape' => 'DescribeKeypairResponseShape', ],
        ],
        'DeleteKeypairs' => [
            'name' => 'DeleteKeypairs',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/regions/{regionId}/keypairs/{keypairId}',
            ],
            'input' => [ 'shape' => 'DeleteKeypairsRequestShape', ],
            'output' => [ 'shape' => 'DeleteKeypairsResponseShape', ],
        ],
        'DescribeListeners' => [
            'name' => 'DescribeListeners',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/listeners',
            ],
            'input' => [ 'shape' => 'DescribeListenersRequestShape', ],
            'output' => [ 'shape' => 'DescribeListenersResponseShape', ],
        ],
        'CreateListener' => [
            'name' => 'CreateListener',
            'http' => [
                'method' => 'PUT',
                'requestUri' => '/v1/regions/{regionId}/listeners',
            ],
            'input' => [ 'shape' => 'CreateListenerRequestShape', ],
            'output' => [ 'shape' => 'CreateListenerResponseShape', ],
        ],
        'ModifyListener' => [
            'name' => 'ModifyListener',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/listeners/{listenerId}:modifyListenerAttributes',
            ],
            'input' => [ 'shape' => 'ModifyListenerRequestShape', ],
            'output' => [ 'shape' => 'ModifyListenerResponseShape', ],
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
        'DeleteListener' => [
            'name' => 'DeleteListener',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/regions/{regionId}/listeners/{listenerId}',
            ],
            'input' => [ 'shape' => 'DeleteListenerRequestShape', ],
            'output' => [ 'shape' => 'DeleteListenerResponseShape', ],
        ],
        'StartListener' => [
            'name' => 'StartListener',
            'http' => [
                'method' => 'PUT',
                'requestUri' => '/v1/regions/{regionId}/listeners/{listenerId}:startListener',
            ],
            'input' => [ 'shape' => 'StartListenerRequestShape', ],
            'output' => [ 'shape' => 'StartListenerResponseShape', ],
        ],
        'StopListener' => [
            'name' => 'StopListener',
            'http' => [
                'method' => 'PUT',
                'requestUri' => '/v1/regions/{regionId}/listeners/{listenerId}:stopListener',
            ],
            'input' => [ 'shape' => 'StopListenerRequestShape', ],
            'output' => [ 'shape' => 'StopListenerResponseShape', ],
        ],
        'DescribeLoadBalancers' => [
            'name' => 'DescribeLoadBalancers',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/slbs',
            ],
            'input' => [ 'shape' => 'DescribeLoadBalancersRequestShape', ],
            'output' => [ 'shape' => 'DescribeLoadBalancersResponseShape', ],
        ],
        'CreateLoadBalancer' => [
            'name' => 'CreateLoadBalancer',
            'http' => [
                'method' => 'PUT',
                'requestUri' => '/v1/regions/{regionId}/slbs',
            ],
            'input' => [ 'shape' => 'CreateLoadBalancerRequestShape', ],
            'output' => [ 'shape' => 'CreateLoadBalancerResponseShape', ],
        ],
        'ModifyLoadBalancer' => [
            'name' => 'ModifyLoadBalancer',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/slbs/{loadBalancerId}:modifyLoadBalancerAttributes',
            ],
            'input' => [ 'shape' => 'ModifyLoadBalancerRequestShape', ],
            'output' => [ 'shape' => 'ModifyLoadBalancerResponseShape', ],
        ],
        'DescribeLoadBalancer' => [
            'name' => 'DescribeLoadBalancer',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/slbs/{loadBalancerId}',
            ],
            'input' => [ 'shape' => 'DescribeLoadBalancerRequestShape', ],
            'output' => [ 'shape' => 'DescribeLoadBalancerResponseShape', ],
        ],
        'StartLoadBalancer' => [
            'name' => 'StartLoadBalancer',
            'http' => [
                'method' => 'PUT',
                'requestUri' => '/v1/regions/{regionId}/slbs/{loadBalancerId}:startLoadBalancer',
            ],
            'input' => [ 'shape' => 'StartLoadBalancerRequestShape', ],
            'output' => [ 'shape' => 'StartLoadBalancerResponseShape', ],
        ],
        'StopLoadBalancer' => [
            'name' => 'StopLoadBalancer',
            'http' => [
                'method' => 'PUT',
                'requestUri' => '/v1/regions/{regionId}/slbs/{loadBalancerId}:stopLoadBalancer',
            ],
            'input' => [ 'shape' => 'StopLoadBalancerRequestShape', ],
            'output' => [ 'shape' => 'StopLoadBalancerResponseShape', ],
        ],
        'AssociateElasticIpLB' => [
            'name' => 'AssociateElasticIpLB',
            'http' => [
                'method' => 'PUT',
                'requestUri' => '/v1/regions/{regionId}/slbs/{loadBalancerId}:associateElasticIp',
            ],
            'input' => [ 'shape' => 'AssociateElasticIpLBRequestShape', ],
            'output' => [ 'shape' => 'AssociateElasticIpLBResponseShape', ],
        ],
        'DisassociateElasticIpLB' => [
            'name' => 'DisassociateElasticIpLB',
            'http' => [
                'method' => 'PUT',
                'requestUri' => '/v1/regions/{regionId}/slbs/{loadBalancerId}:disassociateElasticIp',
            ],
            'input' => [ 'shape' => 'DisassociateElasticIpLBRequestShape', ],
            'output' => [ 'shape' => 'DisassociateElasticIpLBResponseShape', ],
        ],
        'DescribeSlbsName' => [
            'name' => 'DescribeSlbsName',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/slbs/{loadBalancerId}:describeSlbsName',
            ],
            'input' => [ 'shape' => 'DescribeSlbsNameRequestShape', ],
            'output' => [ 'shape' => 'DescribeSlbsNameResponseShape', ],
        ],
        'DescribeRegiones' => [
            'name' => 'DescribeRegiones',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions',
            ],
            'input' => [ 'shape' => 'DescribeRegionesRequestShape', ],
            'output' => [ 'shape' => 'DescribeRegionesResponseShape', ],
        ],
        'DescribeCPSLBRegions' => [
            'name' => 'DescribeCPSLBRegions',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/cpslbRegions',
            ],
            'input' => [ 'shape' => 'DescribeCPSLBRegionsRequestShape', ],
            'output' => [ 'shape' => 'DescribeCPSLBRegionsResponseShape', ],
        ],
        'DescribeRouteTable' => [
            'name' => 'DescribeRouteTable',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/routeTables/{routeTableId}',
            ],
            'input' => [ 'shape' => 'DescribeRouteTableRequestShape', ],
            'output' => [ 'shape' => 'DescribeRouteTableResponseShape', ],
        ],
        'DescribeRouteTables' => [
            'name' => 'DescribeRouteTables',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/routeTables',
            ],
            'input' => [ 'shape' => 'DescribeRouteTablesRequestShape', ],
            'output' => [ 'shape' => 'DescribeRouteTablesResponseShape', ],
        ],
        'DescribeSecondaryCidrs' => [
            'name' => 'DescribeSecondaryCidrs',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/secondaryCidrs',
            ],
            'input' => [ 'shape' => 'DescribeSecondaryCidrsRequestShape', ],
            'output' => [ 'shape' => 'DescribeSecondaryCidrsResponseShape', ],
        ],
        'CreateSecondaryCidr' => [
            'name' => 'CreateSecondaryCidr',
            'http' => [
                'method' => 'PUT',
                'requestUri' => '/v1/regions/{regionId}/secondaryCidrs',
            ],
            'input' => [ 'shape' => 'CreateSecondaryCidrRequestShape', ],
            'output' => [ 'shape' => 'CreateSecondaryCidrResponseShape', ],
        ],
        'DeleteSecondaryCidr' => [
            'name' => 'DeleteSecondaryCidr',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/regions/{regionId}/secondaryCidrs/{secondaryCidrId}',
            ],
            'input' => [ 'shape' => 'DeleteSecondaryCidrRequestShape', ],
            'output' => [ 'shape' => 'DeleteSecondaryCidrResponseShape', ],
        ],
        'DescribeServers' => [
            'name' => 'DescribeServers',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/serverGroups/{serverGroupId}/servers',
            ],
            'input' => [ 'shape' => 'DescribeServersRequestShape', ],
            'output' => [ 'shape' => 'DescribeServersResponseShape', ],
        ],
        'AddServers' => [
            'name' => 'AddServers',
            'http' => [
                'method' => 'PUT',
                'requestUri' => '/v1/regions/{regionId}/serverGroups/{serverGroupId}/servers',
            ],
            'input' => [ 'shape' => 'AddServersRequestShape', ],
            'output' => [ 'shape' => 'AddServersResponseShape', ],
        ],
        'ModifyServer' => [
            'name' => 'ModifyServer',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/serverGroups/{serverGroupId}/servers/{serverId}',
            ],
            'input' => [ 'shape' => 'ModifyServerRequestShape', ],
            'output' => [ 'shape' => 'ModifyServerResponseShape', ],
        ],
        'RemoveServer' => [
            'name' => 'RemoveServer',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/regions/{regionId}/serverGroups/{serverGroupId}/servers/{serverId}',
            ],
            'input' => [ 'shape' => 'RemoveServerRequestShape', ],
            'output' => [ 'shape' => 'RemoveServerResponseShape', ],
        ],
        'DescribeServerGroups' => [
            'name' => 'DescribeServerGroups',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/serverGroups',
            ],
            'input' => [ 'shape' => 'DescribeServerGroupsRequestShape', ],
            'output' => [ 'shape' => 'DescribeServerGroupsResponseShape', ],
        ],
        'CreateServerGroup' => [
            'name' => 'CreateServerGroup',
            'http' => [
                'method' => 'PUT',
                'requestUri' => '/v1/regions/{regionId}/serverGroups',
            ],
            'input' => [ 'shape' => 'CreateServerGroupRequestShape', ],
            'output' => [ 'shape' => 'CreateServerGroupResponseShape', ],
        ],
        'DescribeServerGroup' => [
            'name' => 'DescribeServerGroup',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/serverGroups/{serverGroupId}',
            ],
            'input' => [ 'shape' => 'DescribeServerGroupRequestShape', ],
            'output' => [ 'shape' => 'DescribeServerGroupResponseShape', ],
        ],
        'ModifyServerGroup' => [
            'name' => 'ModifyServerGroup',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/serverGroups/{serverGroupId}',
            ],
            'input' => [ 'shape' => 'ModifyServerGroupRequestShape', ],
            'output' => [ 'shape' => 'ModifyServerGroupResponseShape', ],
        ],
        'DeleteServerGroup' => [
            'name' => 'DeleteServerGroup',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/regions/{regionId}/serverGroups/{serverGroupId}',
            ],
            'input' => [ 'shape' => 'DeleteServerGroupRequestShape', ],
            'output' => [ 'shape' => 'DeleteServerGroupResponseShape', ],
        ],
        'DescribeBasicSubnet' => [
            'name' => 'DescribeBasicSubnet',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/subnet',
            ],
            'input' => [ 'shape' => 'DescribeBasicSubnetRequestShape', ],
            'output' => [ 'shape' => 'DescribeBasicSubnetResponseShape', ],
        ],
        'DescribeSubnets' => [
            'name' => 'DescribeSubnets',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/subnets',
            ],
            'input' => [ 'shape' => 'DescribeSubnetsRequestShape', ],
            'output' => [ 'shape' => 'DescribeSubnetsResponseShape', ],
        ],
        'CreateSubnet' => [
            'name' => 'CreateSubnet',
            'http' => [
                'method' => 'PUT',
                'requestUri' => '/v1/regions/{regionId}/subnets',
            ],
            'input' => [ 'shape' => 'CreateSubnetRequestShape', ],
            'output' => [ 'shape' => 'CreateSubnetResponseShape', ],
        ],
        'AssignIpv6Cidr' => [
            'name' => 'AssignIpv6Cidr',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/subnets/{subnetId}:assignIpv6Cidr',
            ],
            'input' => [ 'shape' => 'AssignIpv6CidrRequestShape', ],
            'output' => [ 'shape' => 'AssignIpv6CidrResponseShape', ],
        ],
        'DescribeSubnet' => [
            'name' => 'DescribeSubnet',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/subnets/{subnetId}',
            ],
            'input' => [ 'shape' => 'DescribeSubnetRequestShape', ],
            'output' => [ 'shape' => 'DescribeSubnetResponseShape', ],
        ],
        'ModifySubnet' => [
            'name' => 'ModifySubnet',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/subnets/{subnetId}',
            ],
            'input' => [ 'shape' => 'ModifySubnetRequestShape', ],
            'output' => [ 'shape' => 'ModifySubnetResponseShape', ],
        ],
        'DeleteSubnet' => [
            'name' => 'DeleteSubnet',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/regions/{regionId}/subnets/{subnetId}',
            ],
            'input' => [ 'shape' => 'DeleteSubnetRequestShape', ],
            'output' => [ 'shape' => 'DeleteSubnetResponseShape', ],
        ],
        'DescribeVpc' => [
            'name' => 'DescribeVpc',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/vpcs/{vpcId}',
            ],
            'input' => [ 'shape' => 'DescribeVpcRequestShape', ],
            'output' => [ 'shape' => 'DescribeVpcResponseShape', ],
        ],
        'ModifyVpc' => [
            'name' => 'ModifyVpc',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/vpcs/{vpcId}',
            ],
            'input' => [ 'shape' => 'ModifyVpcRequestShape', ],
            'output' => [ 'shape' => 'ModifyVpcResponseShape', ],
        ],
        'DeleteVpc' => [
            'name' => 'DeleteVpc',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/regions/{regionId}/vpcs/{vpcId}',
            ],
            'input' => [ 'shape' => 'DeleteVpcRequestShape', ],
            'output' => [ 'shape' => 'DeleteVpcResponseShape', ],
        ],
        'DescribeVpcs' => [
            'name' => 'DescribeVpcs',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/vpcs',
            ],
            'input' => [ 'shape' => 'DescribeVpcsRequestShape', ],
            'output' => [ 'shape' => 'DescribeVpcsResponseShape', ],
        ],
        'CreateVpc' => [
            'name' => 'CreateVpc',
            'http' => [
                'method' => 'PUT',
                'requestUri' => '/v1/regions/{regionId}/vpcs',
            ],
            'input' => [ 'shape' => 'CreateVpcRequestShape', ],
            'output' => [ 'shape' => 'CreateVpcResponseShape', ],
        ],
        'AssignIpv6Gateway' => [
            'name' => 'AssignIpv6Gateway',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/vpcs/{vpcId}:assignIpv6Gateway',
            ],
            'input' => [ 'shape' => 'AssignIpv6GatewayRequestShape', ],
            'output' => [ 'shape' => 'AssignIpv6GatewayResponseShape', ],
        ],
    ],
    'shapes' => [
    ],
];
