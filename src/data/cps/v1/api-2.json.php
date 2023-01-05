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
        'Az' => [
            'type' => 'structure',
            'members' => [
                'region' => [ 'type' => 'string', 'locationName' => 'region', ],
                'az' => [ 'type' => 'string', 'locationName' => 'az', ],
                'azName' => [ 'type' => 'string', 'locationName' => 'azName', ],
            ],
        ],
        'AliasIp' => [
            'type' => 'structure',
            'members' => [
                'region' => [ 'type' => 'string', 'locationName' => 'region', ],
                'az' => [ 'type' => 'string', 'locationName' => 'az', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'subnetId' => [ 'type' => 'string', 'locationName' => 'subnetId', ],
                'secondaryCidrId' => [ 'type' => 'string', 'locationName' => 'secondaryCidrId', ],
                'aliasIpId' => [ 'type' => 'string', 'locationName' => 'aliasIpId', ],
                'cidr' => [ 'type' => 'string', 'locationName' => 'cidr', ],
                'isBondEip' => [ 'type' => 'boolean', 'locationName' => 'isBondEip', ],
            ],
        ],
        'AliasIpErrorInfo' => [
            'type' => 'structure',
            'members' => [
                'cidr' => [ 'type' => 'string', 'locationName' => 'cidr', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
            ],
        ],
        'AliasIpInfo' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
                'cidr' => [ 'type' => 'string', 'locationName' => 'cidr', ],
            ],
        ],
        'AliasIpSpec' => [
            'type' => 'structure',
            'members' => [
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'aliasIps' => [ 'type' => 'list', 'member' => [ 'shape' => 'AliasIpInfo', ], ],
            ],
        ],
        'AliasIpSuccessInfo' => [
            'type' => 'structure',
            'members' => [
                'aliasIpId' => [ 'type' => 'string', 'locationName' => 'aliasIpId', ],
                'cidr' => [ 'type' => 'string', 'locationName' => 'cidr', ],
            ],
        ],
        'Cert' => [
            'type' => 'structure',
            'members' => [
                'certId' => [ 'type' => 'string', 'locationName' => 'certId', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'certificate' => [ 'type' => 'string', 'locationName' => 'certificate', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'listenerCount' => [ 'type' => 'integer', 'locationName' => 'listenerCount', ],
            ],
        ],
        'CertSpec' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'certificate' => [ 'type' => 'string', 'locationName' => 'certificate', ],
                'privateKey' => [ 'type' => 'string', 'locationName' => 'privateKey', ],
            ],
        ],
        'DeviceType' => [
            'type' => 'structure',
            'members' => [
                'deviceType' => [ 'type' => 'string', 'locationName' => 'deviceType', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'family' => [ 'type' => 'string', 'locationName' => 'family', ],
                'region' => [ 'type' => 'string', 'locationName' => 'region', ],
                'cpuConcise' => [ 'type' => 'string', 'locationName' => 'cpuConcise', ],
                'cpuDetail' => [ 'type' => 'string', 'locationName' => 'cpuDetail', ],
                'memConcise' => [ 'type' => 'string', 'locationName' => 'memConcise', ],
                'memDetail' => [ 'type' => 'string', 'locationName' => 'memDetail', ],
                'ifConcise' => [ 'type' => 'string', 'locationName' => 'ifConcise', ],
                'ifDetail' => [ 'type' => 'string', 'locationName' => 'ifDetail', ],
                'gpuConcise' => [ 'type' => 'string', 'locationName' => 'gpuConcise', ],
                'gpuDetail' => [ 'type' => 'string', 'locationName' => 'gpuDetail', ],
                'systemDiskAmount' => [ 'type' => 'integer', 'locationName' => 'systemDiskAmount', ],
                'systemDiskSize' => [ 'type' => 'integer', 'locationName' => 'systemDiskSize', ],
                'systemDiskModel' => [ 'type' => 'string', 'locationName' => 'systemDiskModel', ],
                'dataDiskAmount' => [ 'type' => 'integer', 'locationName' => 'dataDiskAmount', ],
                'dataDiskSize' => [ 'type' => 'integer', 'locationName' => 'dataDiskSize', ],
                'dataDiskModel' => [ 'type' => 'string', 'locationName' => 'dataDiskModel', ],
                'isSoldOut' => [ 'type' => 'boolean', 'locationName' => 'isSoldOut', ],
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
        'ElasticIp' => [
            'type' => 'structure',
            'members' => [
                'region' => [ 'type' => 'string', 'locationName' => 'region', ],
                'elasticIpId' => [ 'type' => 'string', 'locationName' => 'elasticIpId', ],
                'elasticIp' => [ 'type' => 'string', 'locationName' => 'elasticIp', ],
                'bandwidth' => [ 'type' => 'integer', 'locationName' => 'bandwidth', ],
                'lineType' => [ 'type' => 'string', 'locationName' => 'lineType', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'instanceType' => [ 'type' => 'string', 'locationName' => 'instanceType', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'targetIp' => [ 'type' => 'string', 'locationName' => 'targetIp', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'charge' =>  [ 'shape' => 'Charge', ],
            ],
        ],
        'ElasticIpSpec' => [
            'type' => 'structure',
            'members' => [
                'bandwidth' => [ 'type' => 'integer', 'locationName' => 'bandwidth', ],
                'count' => [ 'type' => 'integer', 'locationName' => 'count', ],
                'charge' =>  [ 'shape' => 'ChargeSpec', ],
                'resourceTags' => [ 'type' => 'list', 'member' => [ 'shape' => 'Tag', ], ],
            ],
        ],
        'Tag' => [
            'type' => 'structure',
            'members' => [
                'key' => [ 'type' => 'string', 'locationName' => 'key', ],
                'value' => [ 'type' => 'string', 'locationName' => 'value', ],
            ],
        ],
        'ChargeSpec' => [
            'type' => 'structure',
            'members' => [
                'chargeMode' => [ 'type' => 'string', 'locationName' => 'chargeMode', ],
                'chargeUnit' => [ 'type' => 'string', 'locationName' => 'chargeUnit', ],
                'chargeDuration' => [ 'type' => 'integer', 'locationName' => 'chargeDuration', ],
                'autoRenew' => [ 'type' => 'boolean', 'locationName' => 'autoRenew', ],
                'autoChangeChargeMode' => [ 'type' => 'boolean', 'locationName' => 'autoChangeChargeMode', ],
                'autoChangeChargeModeDate' => [ 'type' => 'string', 'locationName' => 'autoChangeChargeModeDate', ],
                'buyScenario' => [ 'type' => 'string', 'locationName' => 'buyScenario', ],
            ],
        ],
        'EventLog' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'integer', 'locationName' => 'id', ],
                'timestamp' => [ 'type' => 'string', 'locationName' => 'timestamp', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
            ],
        ],
        'Instance' => [
            'type' => 'structure',
            'members' => [
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'region' => [ 'type' => 'string', 'locationName' => 'region', ],
                'az' => [ 'type' => 'string', 'locationName' => 'az', ],
                'deviceType' => [ 'type' => 'string', 'locationName' => 'deviceType', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'enableInternet' => [ 'type' => 'string', 'locationName' => 'enableInternet', ],
                'enableIpv6' => [ 'type' => 'string', 'locationName' => 'enableIpv6', ],
                'bandwidth' => [ 'type' => 'integer', 'locationName' => 'bandwidth', ],
                'imageType' => [ 'type' => 'string', 'locationName' => 'imageType', ],
                'cabinet' => [ 'type' => 'string', 'locationName' => 'cabinet', ],
                'iloIp' => [ 'type' => 'string', 'locationName' => 'iloIp', ],
                'osTypeId' => [ 'type' => 'string', 'locationName' => 'osTypeId', ],
                'osName' => [ 'type' => 'string', 'locationName' => 'osName', ],
                'osType' => [ 'type' => 'string', 'locationName' => 'osType', ],
                'osVersion' => [ 'type' => 'string', 'locationName' => 'osVersion', ],
                'sysRaidTypeId' => [ 'type' => 'string', 'locationName' => 'sysRaidTypeId', ],
                'sysRaidType' => [ 'type' => 'string', 'locationName' => 'sysRaidType', ],
                'dataRaidTypeId' => [ 'type' => 'string', 'locationName' => 'dataRaidTypeId', ],
                'dataRaidType' => [ 'type' => 'string', 'locationName' => 'dataRaidType', ],
                'networkType' => [ 'type' => 'string', 'locationName' => 'networkType', ],
                'vpcId' => [ 'type' => 'string', 'locationName' => 'vpcId', ],
                'vpcName' => [ 'type' => 'string', 'locationName' => 'vpcName', ],
                'vpcIpv4Cidr' => [ 'type' => 'string', 'locationName' => 'vpcIpv4Cidr', ],
                'vpcIpv6Cidr' => [ 'type' => 'string', 'locationName' => 'vpcIpv6Cidr', ],
                'ipv6GatewayId' => [ 'type' => 'string', 'locationName' => 'ipv6GatewayId', ],
                'podName' => [ 'type' => 'string', 'locationName' => 'podName', ],
                'podRoom' => [ 'type' => 'string', 'locationName' => 'podRoom', ],
                'subnetId' => [ 'type' => 'string', 'locationName' => 'subnetId', ],
                'subnetName' => [ 'type' => 'string', 'locationName' => 'subnetName', ],
                'subnetIpv4Cidr' => [ 'type' => 'string', 'locationName' => 'subnetIpv4Cidr', ],
                'subnetIpv6Cidr' => [ 'type' => 'string', 'locationName' => 'subnetIpv6Cidr', ],
                'privateIp' => [ 'type' => 'string', 'locationName' => 'privateIp', ],
                'lineType' => [ 'type' => 'string', 'locationName' => 'lineType', ],
                'elasticIpId' => [ 'type' => 'string', 'locationName' => 'elasticIpId', ],
                'publicIp' => [ 'type' => 'string', 'locationName' => 'publicIp', ],
                'ipv6Address' => [ 'type' => 'string', 'locationName' => 'ipv6Address', ],
                'ipv6AddressId' => [ 'type' => 'string', 'locationName' => 'ipv6AddressId', ],
                'ipv6AddressBandwidth' => [ 'type' => 'integer', 'locationName' => 'ipv6AddressBandwidth', ],
                'interfaceMode' => [ 'type' => 'string', 'locationName' => 'interfaceMode', ],
                'extensionVpcId' => [ 'type' => 'string', 'locationName' => 'extensionVpcId', ],
                'extensionVpcName' => [ 'type' => 'string', 'locationName' => 'extensionVpcName', ],
                'extensionVpcIpv4Cidr' => [ 'type' => 'string', 'locationName' => 'extensionVpcIpv4Cidr', ],
                'extensionVpcIpv6Cidr' => [ 'type' => 'string', 'locationName' => 'extensionVpcIpv6Cidr', ],
                'extensionSubnetId' => [ 'type' => 'string', 'locationName' => 'extensionSubnetId', ],
                'extensionSubnetName' => [ 'type' => 'string', 'locationName' => 'extensionSubnetName', ],
                'extensionSubnetIpv4Cidr' => [ 'type' => 'string', 'locationName' => 'extensionSubnetIpv4Cidr', ],
                'extensionSubnetIpv6Cidr' => [ 'type' => 'string', 'locationName' => 'extensionSubnetIpv6Cidr', ],
                'extensionPrivateIp' => [ 'type' => 'string', 'locationName' => 'extensionPrivateIp', ],
                'extensionEnableInternet' => [ 'type' => 'string', 'locationName' => 'extensionEnableInternet', ],
                'extensionElasticIpId' => [ 'type' => 'string', 'locationName' => 'extensionElasticIpId', ],
                'extensionPublicIp' => [ 'type' => 'string', 'locationName' => 'extensionPublicIp', ],
                'extensionBandwidth' => [ 'type' => 'integer', 'locationName' => 'extensionBandwidth', ],
                'extensionEnableIpv6' => [ 'type' => 'string', 'locationName' => 'extensionEnableIpv6', ],
                'extensionIpv6Address' => [ 'type' => 'string', 'locationName' => 'extensionIpv6Address', ],
                'extensionIpv6AddressId' => [ 'type' => 'string', 'locationName' => 'extensionIpv6AddressId', ],
                'extensionIpv6AddressBandwidth' => [ 'type' => 'integer', 'locationName' => 'extensionIpv6AddressBandwidth', ],
                'extensionIpv6GatewayId' => [ 'type' => 'string', 'locationName' => 'extensionIpv6GatewayId', ],
                'keypairId' => [ 'type' => 'string', 'locationName' => 'keypairId', ],
                'agentStatus' => [ 'type' => 'string', 'locationName' => 'agentStatus', ],
                'charge' =>  [ 'shape' => 'Charge', ],
            ],
        ],
        'InstanceSpec' => [
            'type' => 'structure',
            'members' => [
                'az' => [ 'type' => 'string', 'locationName' => 'az', ],
                'deviceType' => [ 'type' => 'string', 'locationName' => 'deviceType', ],
                'hostname' => [ 'type' => 'string', 'locationName' => 'hostname', ],
                'imageType' => [ 'type' => 'string', 'locationName' => 'imageType', ],
                'osTypeId' => [ 'type' => 'string', 'locationName' => 'osTypeId', ],
                'sysRaidTypeId' => [ 'type' => 'string', 'locationName' => 'sysRaidTypeId', ],
                'dataRaidTypeId' => [ 'type' => 'string', 'locationName' => 'dataRaidTypeId', ],
                'subnetId' => [ 'type' => 'string', 'locationName' => 'subnetId', ],
                'enableInternet' => [ 'type' => 'string', 'locationName' => 'enableInternet', ],
                'internetChargeMode' => [ 'type' => 'string', 'locationName' => 'internetChargeMode', ],
                'enableIpv6' => [ 'type' => 'string', 'locationName' => 'enableIpv6', ],
                'ipv6Address' => [ 'type' => 'string', 'locationName' => 'ipv6Address', ],
                'networkType' => [ 'type' => 'string', 'locationName' => 'networkType', ],
                'cidr' => [ 'type' => 'string', 'locationName' => 'cidr', ],
                'privateIp' => [ 'type' => 'string', 'locationName' => 'privateIp', ],
                'aliasIps' => [ 'type' => 'list', 'member' => [ 'shape' => 'AliasIpInfo', ], ],
                'lineType' => [ 'type' => 'string', 'locationName' => 'lineType', ],
                'bandwidth' => [ 'type' => 'integer', 'locationName' => 'bandwidth', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'password' => [ 'type' => 'string', 'locationName' => 'password', ],
                'count' => [ 'type' => 'integer', 'locationName' => 'count', ],
                'userData' => [ 'type' => 'string', 'locationName' => 'userData', ],
                'keypairId' => [ 'type' => 'string', 'locationName' => 'keypairId', ],
                'charge' =>  [ 'shape' => 'ChargeSpec', ],
                'interfaceMode' => [ 'type' => 'string', 'locationName' => 'interfaceMode', ],
                'extensionEnableIpv6' => [ 'type' => 'string', 'locationName' => 'extensionEnableIpv6', ],
                'extensionIpv6Address' => [ 'type' => 'string', 'locationName' => 'extensionIpv6Address', ],
                'extensionSubnetId' => [ 'type' => 'string', 'locationName' => 'extensionSubnetId', ],
                'extensionPrivateIp' => [ 'type' => 'string', 'locationName' => 'extensionPrivateIp', ],
                'extensionAliasIps' => [ 'type' => 'list', 'member' => [ 'shape' => 'AliasIpInfo', ], ],
                'extensionEnableInternet' => [ 'type' => 'string', 'locationName' => 'extensionEnableInternet', ],
                'extensionLineType' => [ 'type' => 'string', 'locationName' => 'extensionLineType', ],
                'extensionBandwidth' => [ 'type' => 'integer', 'locationName' => 'extensionBandwidth', ],
                'extensionInternetChargeMode' => [ 'type' => 'string', 'locationName' => 'extensionInternetChargeMode', ],
                'resourceTags' => [ 'type' => 'list', 'member' => [ 'shape' => 'Tag', ], ],
            ],
        ],
        'Ipv6Address' => [
            'type' => 'structure',
            'members' => [
                'region' => [ 'type' => 'string', 'locationName' => 'region', ],
                'ipv6AddressId' => [ 'type' => 'string', 'locationName' => 'ipv6AddressId', ],
                'ipv6Address' => [ 'type' => 'string', 'locationName' => 'ipv6Address', ],
                'ipv6GatewayId' => [ 'type' => 'string', 'locationName' => 'ipv6GatewayId', ],
                'bandwidth' => [ 'type' => 'integer', 'locationName' => 'bandwidth', ],
                'vpcId' => [ 'type' => 'string', 'locationName' => 'vpcId', ],
                'vpcName' => [ 'type' => 'string', 'locationName' => 'vpcName', ],
                'instanceType' => [ 'type' => 'string', 'locationName' => 'instanceType', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'instanceName' => [ 'type' => 'string', 'locationName' => 'instanceName', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'charge' =>  [ 'shape' => 'Charge', ],
            ],
        ],
        'Ipv6AddressSpec' => [
            'type' => 'structure',
            'members' => [
                'bandwidth' => [ 'type' => 'integer', 'locationName' => 'bandwidth', ],
                'ipv6Addresses' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'charge' =>  [ 'shape' => 'ChargeSpec', ],
            ],
        ],
        'Ipv6Gateway' => [
            'type' => 'structure',
            'members' => [
                'region' => [ 'type' => 'string', 'locationName' => 'region', ],
                'ipv6GatewayId' => [ 'type' => 'string', 'locationName' => 'ipv6GatewayId', ],
                'ipv6GatewayName' => [ 'type' => 'string', 'locationName' => 'ipv6GatewayName', ],
                'vpcId' => [ 'type' => 'string', 'locationName' => 'vpcId', ],
                'vpcName' => [ 'type' => 'string', 'locationName' => 'vpcName', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
            ],
        ],
        'Keypair' => [
            'type' => 'structure',
            'members' => [
                'keypairId' => [ 'type' => 'string', 'locationName' => 'keypairId', ],
                'region' => [ 'type' => 'string', 'locationName' => 'region', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'publicKey' => [ 'type' => 'string', 'locationName' => 'publicKey', ],
                'fingerPrint' => [ 'type' => 'string', 'locationName' => 'fingerPrint', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'updateTime' => [ 'type' => 'string', 'locationName' => 'updateTime', ],
            ],
        ],
        'Listener' => [
            'type' => 'structure',
            'members' => [
                'listenerId' => [ 'type' => 'string', 'locationName' => 'listenerId', ],
                'loadBalancerId' => [ 'type' => 'string', 'locationName' => 'loadBalancerId', ],
                'protocol' => [ 'type' => 'string', 'locationName' => 'protocol', ],
                'port' => [ 'type' => 'integer', 'locationName' => 'port', ],
                'algorithm' => [ 'type' => 'string', 'locationName' => 'algorithm', ],
                'stickySession' => [ 'type' => 'string', 'locationName' => 'stickySession', ],
                'realIp' => [ 'type' => 'string', 'locationName' => 'realIp', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'healthCheck' => [ 'type' => 'string', 'locationName' => 'healthCheck', ],
                'healthCheckTimeout' => [ 'type' => 'integer', 'locationName' => 'healthCheckTimeout', ],
                'healthCheckInterval' => [ 'type' => 'integer', 'locationName' => 'healthCheckInterval', ],
                'healthyThreshold' => [ 'type' => 'integer', 'locationName' => 'healthyThreshold', ],
                'unhealthyThreshold' => [ 'type' => 'integer', 'locationName' => 'unhealthyThreshold', ],
                'healthCheckIp' => [ 'type' => 'string', 'locationName' => 'healthCheckIp', ],
                'serverGroupId' => [ 'type' => 'string', 'locationName' => 'serverGroupId', ],
                'stickySessionTimeout' => [ 'type' => 'integer', 'locationName' => 'stickySessionTimeout', ],
                'cookieType' => [ 'type' => 'string', 'locationName' => 'cookieType', ],
                'healthCheckUri' => [ 'type' => 'string', 'locationName' => 'healthCheckUri', ],
                'healthCheckHttpCode' => [ 'type' => 'string', 'locationName' => 'healthCheckHttpCode', ],
                'certificateId' => [ 'type' => 'string', 'locationName' => 'certificateId', ],
                'headers' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'ListenerSpec' => [
            'type' => 'structure',
            'members' => [
                'loadBalancerId' => [ 'type' => 'string', 'locationName' => 'loadBalancerId', ],
                'protocol' => [ 'type' => 'string', 'locationName' => 'protocol', ],
                'port' => [ 'type' => 'integer', 'locationName' => 'port', ],
                'algorithm' => [ 'type' => 'string', 'locationName' => 'algorithm', ],
                'stickySession' => [ 'type' => 'string', 'locationName' => 'stickySession', ],
                'realIp' => [ 'type' => 'string', 'locationName' => 'realIp', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'healthCheck' => [ 'type' => 'string', 'locationName' => 'healthCheck', ],
                'healthCheckTimeout' => [ 'type' => 'integer', 'locationName' => 'healthCheckTimeout', ],
                'healthCheckInterval' => [ 'type' => 'integer', 'locationName' => 'healthCheckInterval', ],
                'healthyThreshold' => [ 'type' => 'integer', 'locationName' => 'healthyThreshold', ],
                'unhealthyThreshold' => [ 'type' => 'integer', 'locationName' => 'unhealthyThreshold', ],
                'serverGroupId' => [ 'type' => 'string', 'locationName' => 'serverGroupId', ],
                'stickySessionTimeout' => [ 'type' => 'integer', 'locationName' => 'stickySessionTimeout', ],
                'cookieType' => [ 'type' => 'string', 'locationName' => 'cookieType', ],
                'healthCheckUri' => [ 'type' => 'string', 'locationName' => 'healthCheckUri', ],
                'healthCheckHttpCode' => [ 'type' => 'string', 'locationName' => 'healthCheckHttpCode', ],
                'certificateId' => [ 'type' => 'string', 'locationName' => 'certificateId', ],
                'headers' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'LoadBalancer' => [
            'type' => 'structure',
            'members' => [
                'loadBalancerId' => [ 'type' => 'string', 'locationName' => 'loadBalancerId', ],
                'region' => [ 'type' => 'string', 'locationName' => 'region', ],
                'ipAddressType' => [ 'type' => 'string', 'locationName' => 'ipAddressType', ],
                'netType' => [ 'type' => 'string', 'locationName' => 'netType', ],
                'vpcId' => [ 'type' => 'string', 'locationName' => 'vpcId', ],
                'elasticIpId' => [ 'type' => 'string', 'locationName' => 'elasticIpId', ],
                'publicIp' => [ 'type' => 'string', 'locationName' => 'publicIp', ],
                'bandwidth' => [ 'type' => 'integer', 'locationName' => 'bandwidth', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'charge' =>  [ 'shape' => 'Charge', ],
            ],
        ],
        'LoadBalancerSpec' => [
            'type' => 'structure',
            'members' => [
                'netType' => [ 'type' => 'string', 'locationName' => 'netType', ],
                'ipAddressType' => [ 'type' => 'string', 'locationName' => 'ipAddressType', ],
                'vpcId' => [ 'type' => 'string', 'locationName' => 'vpcId', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'applyElasticIp' => [ 'type' => 'boolean', 'locationName' => 'applyElasticIp', ],
                'bandwidth' => [ 'type' => 'integer', 'locationName' => 'bandwidth', ],
                'charge' =>  [ 'shape' => 'ChargeSpec', ],
                'resourceTags' => [ 'type' => 'list', 'member' => [ 'shape' => 'Tag', ], ],
            ],
        ],
        'MetricData' => [
            'type' => 'structure',
            'members' => [
                'data' => [ 'type' => 'list', 'member' => [ 'shape' => 'MetricValue', ], ],
                'tags' => [ 'type' => 'list', 'member' => [ 'shape' => 'MetricTag', ], ],
                'metric' =>  [ 'shape' => 'MetricInfo', ],
            ],
        ],
        'MetricInfo' => [
            'type' => 'structure',
            'members' => [
                'calculateUnit' => [ 'type' => 'string', 'locationName' => 'calculateUnit', ],
                'metirc' => [ 'type' => 'string', 'locationName' => 'metirc', ],
                'metricName' => [ 'type' => 'string', 'locationName' => 'metricName', ],
                'aggregator' => [ 'type' => 'string', 'locationName' => 'aggregator', ],
                'period' => [ 'type' => 'string', 'locationName' => 'period', ],
            ],
        ],
        'MetricValue' => [
            'type' => 'structure',
            'members' => [
                'timestamp' => [ 'type' => 'long', 'locationName' => 'timestamp', ],
                'value' => [ 'type' => 'string', 'locationName' => 'value', ],
            ],
        ],
        'MetricTag' => [
            'type' => 'structure',
            'members' => [
                'tagKey' => [ 'type' => 'string', 'locationName' => 'tagKey', ],
                'tagValue' => [ 'type' => 'string', 'locationName' => 'tagValue', ],
            ],
        ],
        'Os' => [
            'type' => 'structure',
            'members' => [
                'osTypeId' => [ 'type' => 'string', 'locationName' => 'osTypeId', ],
                'osName' => [ 'type' => 'string', 'locationName' => 'osName', ],
                'osType' => [ 'type' => 'string', 'locationName' => 'osType', ],
                'osVersion' => [ 'type' => 'string', 'locationName' => 'osVersion', ],
                'deviceType' => [ 'type' => 'string', 'locationName' => 'deviceType', ],
            ],
        ],
        'Raid' => [
            'type' => 'structure',
            'members' => [
                'volumeType' => [ 'type' => 'string', 'locationName' => 'volumeType', ],
                'volumeDetail' => [ 'type' => 'string', 'locationName' => 'volumeDetail', ],
                'raidTypeId' => [ 'type' => 'string', 'locationName' => 'raidTypeId', ],
                'raidType' => [ 'type' => 'string', 'locationName' => 'raidType', ],
                'deviceType' => [ 'type' => 'string', 'locationName' => 'deviceType', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
            ],
        ],
        'Region' => [
            'type' => 'structure',
            'members' => [
                'region' => [ 'type' => 'string', 'locationName' => 'region', ],
                'regionName' => [ 'type' => 'string', 'locationName' => 'regionName', ],
                'azs' => [ 'type' => 'list', 'member' => [ 'shape' => 'Az', ], ],
            ],
        ],
        'ReinstallInstanceSpec' => [
            'type' => 'structure',
            'members' => [
                'az' => [ 'type' => 'string', 'locationName' => 'az', ],
                'imageType' => [ 'type' => 'string', 'locationName' => 'imageType', ],
                'osTypeId' => [ 'type' => 'string', 'locationName' => 'osTypeId', ],
                'sysRaidTypeId' => [ 'type' => 'string', 'locationName' => 'sysRaidTypeId', ],
                'keepData' => [ 'type' => 'string', 'locationName' => 'keepData', ],
                'dataRaidTypeId' => [ 'type' => 'string', 'locationName' => 'dataRaidTypeId', ],
                'password' => [ 'type' => 'string', 'locationName' => 'password', ],
                'hostname' => [ 'type' => 'string', 'locationName' => 'hostname', ],
                'userData' => [ 'type' => 'string', 'locationName' => 'userData', ],
                'keypairId' => [ 'type' => 'string', 'locationName' => 'keypairId', ],
            ],
        ],
        'RenewalResource' => [
            'type' => 'structure',
            'members' => [
                'resourceId' => [ 'type' => 'string', 'locationName' => 'resourceId', ],
                'resourceName' => [ 'type' => 'string', 'locationName' => 'resourceName', ],
                'remark' => [ 'type' => 'string', 'locationName' => 'remark', ],
                'bind' => [ 'type' => 'list', 'member' => [ 'shape' => 'RenewalResource', ], ],
            ],
        ],
        'Route' => [
            'type' => 'structure',
            'members' => [
                'destinationCidr' => [ 'type' => 'string', 'locationName' => 'destinationCidr', ],
                'nextHopType' => [ 'type' => 'string', 'locationName' => 'nextHopType', ],
                'nextHop' => [ 'type' => 'string', 'locationName' => 'nextHop', ],
            ],
        ],
        'RouteTable' => [
            'type' => 'structure',
            'members' => [
                'routeTableId' => [ 'type' => 'string', 'locationName' => 'routeTableId', ],
                'region' => [ 'type' => 'string', 'locationName' => 'region', ],
                'vpcId' => [ 'type' => 'string', 'locationName' => 'vpcId', ],
                'vpcName' => [ 'type' => 'string', 'locationName' => 'vpcName', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'routes' => [ 'type' => 'list', 'member' => [ 'shape' => 'Route', ], ],
            ],
        ],
        'SecondaryCidr' => [
            'type' => 'structure',
            'members' => [
                'secondaryCidrId' => [ 'type' => 'string', 'locationName' => 'secondaryCidrId', ],
                'cidr' => [ 'type' => 'string', 'locationName' => 'cidr', ],
                'region' => [ 'type' => 'string', 'locationName' => 'region', ],
                'az' => [ 'type' => 'string', 'locationName' => 'az', ],
                'subnetId' => [ 'type' => 'string', 'locationName' => 'subnetId', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'vpcId' => [ 'type' => 'string', 'locationName' => 'vpcId', ],
                'vpcName' => [ 'type' => 'string', 'locationName' => 'vpcName', ],
                'vpcCidr' => [ 'type' => 'string', 'locationName' => 'vpcCidr', ],
                'availableIpCount' => [ 'type' => 'integer', 'locationName' => 'availableIpCount', ],
                'totalIpCount' => [ 'type' => 'integer', 'locationName' => 'totalIpCount', ],
            ],
        ],
        'SecondaryCidrSpec' => [
            'type' => 'structure',
            'members' => [
                'subnetId' => [ 'type' => 'string', 'locationName' => 'subnetId', ],
                'cidr' => [ 'type' => 'string', 'locationName' => 'cidr', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
            ],
        ],
        'Server' => [
            'type' => 'structure',
            'members' => [
                'serverId' => [ 'type' => 'string', 'locationName' => 'serverId', ],
                'instanceType' => [ 'type' => 'string', 'locationName' => 'instanceType', ],
                'instanceName' => [ 'type' => 'string', 'locationName' => 'instanceName', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'az' => [ 'type' => 'string', 'locationName' => 'az', ],
                'privateIp' => [ 'type' => 'string', 'locationName' => 'privateIp', ],
                'port' => [ 'type' => 'integer', 'locationName' => 'port', ],
                'weight' => [ 'type' => 'integer', 'locationName' => 'weight', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'healthyStatus' => [ 'type' => 'string', 'locationName' => 'healthyStatus', ],
                'aliasip' => [ 'type' => 'string', 'locationName' => 'aliasip', ],
                'iptype' => [ 'type' => 'string', 'locationName' => 'iptype', ],
            ],
        ],
        'ServerGroup' => [
            'type' => 'structure',
            'members' => [
                'loadBalancerId' => [ 'type' => 'string', 'locationName' => 'loadBalancerId', ],
                'serverGroupId' => [ 'type' => 'string', 'locationName' => 'serverGroupId', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
            ],
        ],
        'ServerGroupSpec' => [
            'type' => 'structure',
            'members' => [
                'loadBalancerId' => [ 'type' => 'string', 'locationName' => 'loadBalancerId', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
            ],
        ],
        'ServerSpec' => [
            'type' => 'structure',
            'members' => [
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'port' => [ 'type' => 'integer', 'locationName' => 'port', ],
                'weight' => [ 'type' => 'integer', 'locationName' => 'weight', ],
                'aliasip' => [ 'type' => 'string', 'locationName' => 'aliasip', ],
                'rip' => [ 'type' => 'string', 'locationName' => 'rip', ],
                'networkPort' => [ 'type' => 'string', 'locationName' => 'networkPort', ],
            ],
        ],
        'Subnet' => [
            'type' => 'structure',
            'members' => [
                'region' => [ 'type' => 'string', 'locationName' => 'region', ],
                'az' => [ 'type' => 'string', 'locationName' => 'az', ],
                'subnetId' => [ 'type' => 'string', 'locationName' => 'subnetId', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'cidr' => [ 'type' => 'string', 'locationName' => 'cidr', ],
                'ipv6Cidr' => [ 'type' => 'string', 'locationName' => 'ipv6Cidr', ],
                'vpcId' => [ 'type' => 'string', 'locationName' => 'vpcId', ],
                'vpcName' => [ 'type' => 'string', 'locationName' => 'vpcName', ],
                'vpcCidr' => [ 'type' => 'string', 'locationName' => 'vpcCidr', ],
                'vpcIpv6Cidr' => [ 'type' => 'string', 'locationName' => 'vpcIpv6Cidr', ],
                'availableIpCount' => [ 'type' => 'integer', 'locationName' => 'availableIpCount', ],
                'totalIpCount' => [ 'type' => 'integer', 'locationName' => 'totalIpCount', ],
                'usedIpv6IpCount' => [ 'type' => 'integer', 'locationName' => 'usedIpv6IpCount', ],
                'totalIpv6IpCount' => [ 'type' => 'string', 'locationName' => 'totalIpv6IpCount', ],
                'secondaryCidrName' => [ 'type' => 'string', 'locationName' => 'secondaryCidrName', ],
                'secondaryCidr' => [ 'type' => 'string', 'locationName' => 'secondaryCidr', ],
                'secondaryCidrId' => [ 'type' => 'string', 'locationName' => 'secondaryCidrId', ],
                'networkType' => [ 'type' => 'string', 'locationName' => 'networkType', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
            ],
        ],
        'SubnetSpec' => [
            'type' => 'structure',
            'members' => [
                'az' => [ 'type' => 'string', 'locationName' => 'az', ],
                'vpcId' => [ 'type' => 'string', 'locationName' => 'vpcId', ],
                'cidr' => [ 'type' => 'string', 'locationName' => 'cidr', ],
                'ipv6Cidr' => [ 'type' => 'string', 'locationName' => 'ipv6Cidr', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'secondaryCidr' => [ 'type' => 'string', 'locationName' => 'secondaryCidr', ],
                'secondaryCidrName' => [ 'type' => 'string', 'locationName' => 'secondaryCidrName', ],
            ],
        ],
        'Vpc' => [
            'type' => 'structure',
            'members' => [
                'region' => [ 'type' => 'string', 'locationName' => 'region', ],
                'vpcId' => [ 'type' => 'string', 'locationName' => 'vpcId', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'cidr' => [ 'type' => 'string', 'locationName' => 'cidr', ],
                'ipv6Cidr' => [ 'type' => 'string', 'locationName' => 'ipv6Cidr', ],
                'ipv6GatewayId' => [ 'type' => 'string', 'locationName' => 'ipv6GatewayId', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
            ],
        ],
        'VpcSpec' => [
            'type' => 'structure',
            'members' => [
                'cidr' => [ 'type' => 'string', 'locationName' => 'cidr', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'enableIpv6' => [ 'type' => 'string', 'locationName' => 'enableIpv6', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
            ],
        ],
        'DeleteAliasIpResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DeleteAliasIpResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeAliasIpsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'subnetId' => [ 'type' => 'string', 'locationName' => 'subnetId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'cidr' => [ 'type' => 'string', 'locationName' => 'cidr', ],
                'filters' => [ 'type' => 'list', 'member' => [ 'shape' => 'Filter', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DescribeAliasIpsResultShape' => [
            'type' => 'structure',
            'members' => [
                'aliasIps' => [ 'type' => 'list', 'member' => [ 'shape' => 'AliasIp', ], ],
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
            ],
        ],
        'CreateAliasIpRequestShape' => [
            'type' => 'structure',
            'members' => [
                'clientToken' => [ 'type' => 'string', 'locationName' => 'clientToken', ],
                'aliasIpSpec' =>  [ 'shape' => 'AliasIpSpec', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
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
        'DeleteAliasIpRequestShape' => [
            'type' => 'structure',
            'members' => [
                'clientToken' => [ 'type' => 'string', 'locationName' => 'clientToken', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'aliasIpId' => [ 'type' => 'string', 'locationName' => 'aliasIpId', ],
            ],
        ],
        'DescribeAliasIpsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeAliasIpsResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'CreateAliasIpResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'CreateAliasIpResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DeleteAliasIpResultShape' => [
            'type' => 'structure',
            'members' => [
                'success' => [ 'type' => 'boolean', 'locationName' => 'success', ],
            ],
        ],
        'CreateAliasIpResultShape' => [
            'type' => 'structure',
            'members' => [
                'successList' => [ 'type' => 'list', 'member' => [ 'shape' => 'AliasIpSuccessInfo', ], ],
                'errorList' => [ 'type' => 'list', 'member' => [ 'shape' => 'AliasIpErrorInfo', ], ],
            ],
        ],
        'DescribeCertResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeCertResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeCertsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'filters' => [ 'type' => 'list', 'member' => [ 'shape' => 'Filter', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'RemoveCertRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'certId' => [ 'type' => 'string', 'locationName' => 'certId', ],
            ],
        ],
        'ModifyCertRequestShape' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'certId' => [ 'type' => 'string', 'locationName' => 'certId', ],
            ],
        ],
        'ModifyCertResultShape' => [
            'type' => 'structure',
            'members' => [
                'certId' => [ 'type' => 'string', 'locationName' => 'certId', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'certificate' => [ 'type' => 'string', 'locationName' => 'certificate', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'listenerCount' => [ 'type' => 'integer', 'locationName' => 'listenerCount', ],
            ],
        ],
        'ModifyCertResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'ModifyCertResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'CreateCertRequestShape' => [
            'type' => 'structure',
            'members' => [
                'clientToken' => [ 'type' => 'string', 'locationName' => 'clientToken', ],
                'certSpec' =>  [ 'shape' => 'CertSpec', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'RemoveCertResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'RemoveCertResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeCertsResultShape' => [
            'type' => 'structure',
            'members' => [
                'certs' => [ 'type' => 'list', 'member' => [ 'shape' => 'Cert', ], ],
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
            ],
        ],
        'CreateCertResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'CreateCertResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeCertResultShape' => [
            'type' => 'structure',
            'members' => [
                'cert' =>  [ 'shape' => 'Cert', ],
            ],
        ],
        'RemoveCertResultShape' => [
            'type' => 'structure',
            'members' => [
                'success' => [ 'type' => 'boolean', 'locationName' => 'success', ],
            ],
        ],
        'DescribeCertsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeCertsResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeCertRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'certId' => [ 'type' => 'string', 'locationName' => 'certId', ],
            ],
        ],
        'CreateCertResultShape' => [
            'type' => 'structure',
            'members' => [
                'certId' => [ 'type' => 'string', 'locationName' => 'certId', ],
            ],
        ],
        'DescribeElasticIpsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeElasticIpsResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeElasticIpsResultShape' => [
            'type' => 'structure',
            'members' => [
                'elasticIps' => [ 'type' => 'list', 'member' => [ 'shape' => 'ElasticIp', ], ],
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
            ],
        ],
        'ApplyElasticIpsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'clientToken' => [ 'type' => 'string', 'locationName' => 'clientToken', ],
                'elasticIpSpec' =>  [ 'shape' => 'ElasticIpSpec', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'ModifyElasticIpBandwidthRequestShape' => [
            'type' => 'structure',
            'members' => [
                'clientToken' => [ 'type' => 'string', 'locationName' => 'clientToken', ],
                'bandwidth' => [ 'type' => 'integer', 'locationName' => 'bandwidth', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'elasticIpId' => [ 'type' => 'string', 'locationName' => 'elasticIpId', ],
            ],
        ],
        'DescribeElasticIpResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeElasticIpResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ApplyElasticIpsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'ApplyElasticIpsResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeElasticIpNameRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'elasticIpId' => [ 'type' => 'string', 'locationName' => 'elasticIpId', ],
            ],
        ],
        'DescribeElasticIpResultShape' => [
            'type' => 'structure',
            'members' => [
                'elasticIp' =>  [ 'shape' => 'ElasticIp', ],
            ],
        ],
        'DescribeElasticIpNameResultShape' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
            ],
        ],
        'ApplyElasticIpsResultShape' => [
            'type' => 'structure',
            'members' => [
                'elasticIpIds' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'ModifyElasticIpBandwidthResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'ModifyElasticIpBandwidthResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ModifyElasticIpBandwidthResultShape' => [
            'type' => 'structure',
            'members' => [
                'success' => [ 'type' => 'boolean', 'locationName' => 'success', ],
            ],
        ],
        'DescribeElasticIpNameResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeElasticIpNameResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeElasticIpRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'elasticIpId' => [ 'type' => 'string', 'locationName' => 'elasticIpId', ],
            ],
        ],
        'DescribeElasticIpsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'includeLB' => [ 'type' => 'string', 'locationName' => 'includeLB', ],
                'chargeMode' => [ 'type' => 'string', 'locationName' => 'chargeMode', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'subnetId' => [ 'type' => 'string', 'locationName' => 'subnetId', ],
                'filters' => [ 'type' => 'list', 'member' => [ 'shape' => 'Filter', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'ModifyInstanceResultShape' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
            ],
        ],
        'ModifyBandwidthResultShape' => [
            'type' => 'structure',
            'members' => [
                'success' => [ 'type' => 'boolean', 'locationName' => 'success', ],
            ],
        ],
        'StopInstancesResultShape' => [
            'type' => 'structure',
            'members' => [
                'success' => [ 'type' => 'boolean', 'locationName' => 'success', ],
            ],
        ],
        'DescribeDeviceTypesResultShape' => [
            'type' => 'structure',
            'members' => [
                'deviceTypes' => [ 'type' => 'list', 'member' => [ 'shape' => 'DeviceType', ], ],
            ],
        ],
        'DescribeInstanceRaidResultShape' => [
            'type' => 'structure',
            'members' => [
                'sysRaidTypeId' => [ 'type' => 'string', 'locationName' => 'sysRaidTypeId', ],
                'sysRaidType' => [ 'type' => 'string', 'locationName' => 'sysRaidType', ],
                'dataRaidTypeId' => [ 'type' => 'string', 'locationName' => 'dataRaidTypeId', ],
                'dataRaidType' => [ 'type' => 'string', 'locationName' => 'dataRaidType', ],
            ],
        ],
        'DescribeInstancesResultShape' => [
            'type' => 'structure',
            'members' => [
                'instances' => [ 'type' => 'list', 'member' => [ 'shape' => 'Instance', ], ],
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
            ],
        ],
        'RestartInstanceResultShape' => [
            'type' => 'structure',
            'members' => [
                'success' => [ 'type' => 'boolean', 'locationName' => 'success', ],
            ],
        ],
        'DescribeOSRequestShape' => [
            'type' => 'structure',
            'members' => [
                'deviceType' => [ 'type' => 'string', 'locationName' => 'deviceType', ],
                'osType' => [ 'type' => 'string', 'locationName' => 'osType', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DisassociateElasticIpResultShape' => [
            'type' => 'structure',
            'members' => [
                'success' => [ 'type' => 'boolean', 'locationName' => 'success', ],
            ],
        ],
        'DescribeInstanceRaidRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'DescribeInstanceNameResultShape' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
            ],
        ],
        'DescribeAvailablePrivateIpRequestShape' => [
            'type' => 'structure',
            'members' => [
                'subnetId' => [ 'type' => 'string', 'locationName' => 'subnetId', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'AssociateElasticIpResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'AssociateElasticIpResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeInstanceStatusResultShape' => [
            'type' => 'structure',
            'members' => [
                'cpus' => [ 'type' => 'boolean', 'locationName' => 'cpus', ],
                'mems' => [ 'type' => 'boolean', 'locationName' => 'mems', ],
                'disks' => [ 'type' => 'boolean', 'locationName' => 'disks', ],
                'nics' => [ 'type' => 'boolean', 'locationName' => 'nics', ],
            ],
        ],
        'RestartInstanceResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'RestartInstanceResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeInstancesRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'az' => [ 'type' => 'string', 'locationName' => 'az', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'networkType' => [ 'type' => 'string', 'locationName' => 'networkType', ],
                'deviceType' => [ 'type' => 'string', 'locationName' => 'deviceType', ],
                'subnetId' => [ 'type' => 'string', 'locationName' => 'subnetId', ],
                'keypairId' => [ 'type' => 'string', 'locationName' => 'keypairId', ],
                'enableInternet' => [ 'type' => 'string', 'locationName' => 'enableInternet', ],
                'privateIp' => [ 'type' => 'string', 'locationName' => 'privateIp', ],
                'interfaceMode' => [ 'type' => 'string', 'locationName' => 'interfaceMode', ],
                'filters' => [ 'type' => 'list', 'member' => [ 'shape' => 'Filter', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DescribeDeviceTypesRequestShape' => [
            'type' => 'structure',
            'members' => [
                'az' => [ 'type' => 'string', 'locationName' => 'az', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DisassociateElasticIpResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DisassociateElasticIpResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'StartInstancesResultShape' => [
            'type' => 'structure',
            'members' => [
                'success' => [ 'type' => 'boolean', 'locationName' => 'success', ],
            ],
        ],
        'StartInstancesRequestShape' => [
            'type' => 'structure',
            'members' => [
                'clientToken' => [ 'type' => 'string', 'locationName' => 'clientToken', ],
                'instanceIds' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DescribeInstanceRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'RestartInstancesResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'RestartInstancesResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'StopInstanceRequestShape' => [
            'type' => 'structure',
            'members' => [
                'clientToken' => [ 'type' => 'string', 'locationName' => 'clientToken', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'AssignIpv6AddressResultShape' => [
            'type' => 'structure',
            'members' => [
                'ipv6Address' => [ 'type' => 'string', 'locationName' => 'ipv6Address', ],
            ],
        ],
        'DescribeInstanceResultShape' => [
            'type' => 'structure',
            'members' => [
                'instance' =>  [ 'shape' => 'Instance', ],
            ],
        ],
        'ModifyInstanceResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'ModifyInstanceResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeEventLogsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'DescribeEventLogsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeEventLogsResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeDeviceRaidsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeDeviceRaidsResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ResetPasswordResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'ResetPasswordResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeOSResultShape' => [
            'type' => 'structure',
            'members' => [
                'oss' => [ 'type' => 'list', 'member' => [ 'shape' => 'Os', ], ],
            ],
        ],
        'AssociateElasticIpResultShape' => [
            'type' => 'structure',
            'members' => [
                'success' => [ 'type' => 'boolean', 'locationName' => 'success', ],
            ],
        ],
        'ReinstallInstanceResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'ReinstallInstanceResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'RestartInstancesResultShape' => [
            'type' => 'structure',
            'members' => [
                'success' => [ 'type' => 'boolean', 'locationName' => 'success', ],
            ],
        ],
        'DescribeInstanceNameRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'ResetPasswordRequestShape' => [
            'type' => 'structure',
            'members' => [
                'clientToken' => [ 'type' => 'string', 'locationName' => 'clientToken', ],
                'password' => [ 'type' => 'string', 'locationName' => 'password', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'DescribeInstanceResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeInstanceResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeEventLogsResultShape' => [
            'type' => 'structure',
            'members' => [
                'eventLogs' => [ 'type' => 'list', 'member' => [ 'shape' => 'EventLog', ], ],
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
            ],
        ],
        'AssociateElasticIpRequestShape' => [
            'type' => 'structure',
            'members' => [
                'clientToken' => [ 'type' => 'string', 'locationName' => 'clientToken', ],
                'elasticIpId' => [ 'type' => 'string', 'locationName' => 'elasticIpId', ],
                'targetIp' => [ 'type' => 'string', 'locationName' => 'targetIp', ],
                'subnetId' => [ 'type' => 'string', 'locationName' => 'subnetId', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'StartInstanceRequestShape' => [
            'type' => 'structure',
            'members' => [
                'clientToken' => [ 'type' => 'string', 'locationName' => 'clientToken', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'StartInstanceResultShape' => [
            'type' => 'structure',
            'members' => [
                'success' => [ 'type' => 'boolean', 'locationName' => 'success', ],
            ],
        ],
        'CreateInstancesRequestShape' => [
            'type' => 'structure',
            'members' => [
                'clientToken' => [ 'type' => 'string', 'locationName' => 'clientToken', ],
                'instanceSpec' =>  [ 'shape' => 'InstanceSpec', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'ReinstallInstanceResultShape' => [
            'type' => 'structure',
            'members' => [
                'success' => [ 'type' => 'boolean', 'locationName' => 'success', ],
            ],
        ],
        'DescribeDeviceTypesResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeDeviceTypesResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'StopInstancesRequestShape' => [
            'type' => 'structure',
            'members' => [
                'clientToken' => [ 'type' => 'string', 'locationName' => 'clientToken', ],
                'instanceIds' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DescribeInstanceMonitorInfoResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeInstanceMonitorInfoResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeInstanceNameResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeInstanceNameResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeInstanceMonitorInfoResultShape' => [
            'type' => 'structure',
            'members' => [
                'metricDatas' => [ 'type' => 'list', 'member' => [ 'shape' => 'MetricData', ], ],
            ],
        ],
        'CreateInstancesResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'CreateInstancesResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'StartInstancesResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'StartInstancesResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeInstanceMonitorInfoRequestShape' => [
            'type' => 'structure',
            'members' => [
                'startTime' => [ 'type' => 'long', 'locationName' => 'startTime', ],
                'endTime' => [ 'type' => 'long', 'locationName' => 'endTime', ],
                'filters' => [ 'type' => 'list', 'member' => [ 'shape' => 'Filter', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'DescribeInstanceRaidResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeInstanceRaidResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeInstancesResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeInstancesResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'StartInstanceResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'StartInstanceResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'AssignIpv6AddressRequestShape' => [
            'type' => 'structure',
            'members' => [
                'clientToken' => [ 'type' => 'string', 'locationName' => 'clientToken', ],
                'ipv6Address' => [ 'type' => 'string', 'locationName' => 'ipv6Address', ],
                'subnetId' => [ 'type' => 'string', 'locationName' => 'subnetId', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'DescribeInstanceStatusRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'AssignIpv6AddressResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'AssignIpv6AddressResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeAvailablePrivateIpResultShape' => [
            'type' => 'structure',
            'members' => [
                'availablePrivateIps' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'ModifyBandwidthResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'ModifyBandwidthResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'StopInstanceResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'StopInstanceResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeDeviceRaidsResultShape' => [
            'type' => 'structure',
            'members' => [
                'raids' => [ 'type' => 'list', 'member' => [ 'shape' => 'Raid', ], ],
            ],
        ],
        'DescribeInstanceStatusResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeInstanceStatusResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'CreateInstancesResultShape' => [
            'type' => 'structure',
            'members' => [
                'instanceIds' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'ModifyBandwidthRequestShape' => [
            'type' => 'structure',
            'members' => [
                'clientToken' => [ 'type' => 'string', 'locationName' => 'clientToken', ],
                'bandwidth' => [ 'type' => 'integer', 'locationName' => 'bandwidth', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'StopInstancesResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'StopInstancesResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ResetPasswordResultShape' => [
            'type' => 'structure',
            'members' => [
                'success' => [ 'type' => 'boolean', 'locationName' => 'success', ],
            ],
        ],
        'DescribeOSResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeOSResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ModifyInstanceRequestShape' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'RestartInstancesRequestShape' => [
            'type' => 'structure',
            'members' => [
                'clientToken' => [ 'type' => 'string', 'locationName' => 'clientToken', ],
                'instanceIds' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DescribeDeviceRaidsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'deviceType' => [ 'type' => 'string', 'locationName' => 'deviceType', ],
                'volumeType' => [ 'type' => 'string', 'locationName' => 'volumeType', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'ReinstallInstanceRequestShape' => [
            'type' => 'structure',
            'members' => [
                'clientToken' => [ 'type' => 'string', 'locationName' => 'clientToken', ],
                'instanceSpec' =>  [ 'shape' => 'ReinstallInstanceSpec', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'DescribeAvailablePrivateIpResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeAvailablePrivateIpResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'RestartInstanceRequestShape' => [
            'type' => 'structure',
            'members' => [
                'clientToken' => [ 'type' => 'string', 'locationName' => 'clientToken', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'StopInstanceResultShape' => [
            'type' => 'structure',
            'members' => [
                'success' => [ 'type' => 'boolean', 'locationName' => 'success', ],
            ],
        ],
        'DisassociateElasticIpRequestShape' => [
            'type' => 'structure',
            'members' => [
                'clientToken' => [ 'type' => 'string', 'locationName' => 'clientToken', ],
                'elasticIpId' => [ 'type' => 'string', 'locationName' => 'elasticIpId', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'AssignIpv6AddressesBandwidthResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'AssignIpv6AddressesBandwidthResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeIpv6AddressesRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'ipv6GatewayId' => [ 'type' => 'string', 'locationName' => 'ipv6GatewayId', ],
                'ipv6Address' => [ 'type' => 'string', 'locationName' => 'ipv6Address', ],
                'enableInternet' => [ 'type' => 'boolean', 'locationName' => 'enableInternet', ],
                'filters' => [ 'type' => 'list', 'member' => [ 'shape' => 'Filter', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'AssignIpv6AddressesBandwidthResultShape' => [
            'type' => 'structure',
            'members' => [
                'ipv6AddressIds' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'ModifyIpv6AddressBandwidthRequestShape' => [
            'type' => 'structure',
            'members' => [
                'clientToken' => [ 'type' => 'string', 'locationName' => 'clientToken', ],
                'bandwidth' => [ 'type' => 'integer', 'locationName' => 'bandwidth', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'ipv6AddressId' => [ 'type' => 'string', 'locationName' => 'ipv6AddressId', ],
            ],
        ],
        'DescribeIpv6AddressesResultShape' => [
            'type' => 'structure',
            'members' => [
                'ipv6Addresses' => [ 'type' => 'list', 'member' => [ 'shape' => 'Ipv6Address', ], ],
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
            ],
        ],
        'ModifyIpv6AddressBandwidthResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'ModifyIpv6AddressBandwidthResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeIpv6AddressRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'ipv6AddressId' => [ 'type' => 'string', 'locationName' => 'ipv6AddressId', ],
            ],
        ],
        'AssignIpv6AddressesBandwidthRequestShape' => [
            'type' => 'structure',
            'members' => [
                'clientToken' => [ 'type' => 'string', 'locationName' => 'clientToken', ],
                'ipv6AddressSpec' =>  [ 'shape' => 'Ipv6AddressSpec', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DescribeIpv6AddressResultShape' => [
            'type' => 'structure',
            'members' => [
                'ipv6Address' =>  [ 'shape' => 'Ipv6Address', ],
            ],
        ],
        'DescribeIpv6AddressResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeIpv6AddressResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeIpv6AddressesResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeIpv6AddressesResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ModifyIpv6AddressBandwidthResultShape' => [
            'type' => 'structure',
            'members' => [
                'success' => [ 'type' => 'boolean', 'locationName' => 'success', ],
            ],
        ],
        'DescribeIpv6GatewaysResultShape' => [
            'type' => 'structure',
            'members' => [
                'ipv6Gateways' => [ 'type' => 'list', 'member' => [ 'shape' => 'Ipv6Gateway', ], ],
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
            ],
        ],
        'DescribeIpv6GatewayResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeIpv6GatewayResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ModifyIpv6GatewayRequestShape' => [
            'type' => 'structure',
            'members' => [
                'clientToken' => [ 'type' => 'string', 'locationName' => 'clientToken', ],
                'ipv6GatewayName' => [ 'type' => 'string', 'locationName' => 'ipv6GatewayName', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'ipv6GatewayId' => [ 'type' => 'string', 'locationName' => 'ipv6GatewayId', ],
            ],
        ],
        'DescribeIpv6GatewayRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'ipv6GatewayId' => [ 'type' => 'string', 'locationName' => 'ipv6GatewayId', ],
            ],
        ],
        'ModifyIpv6GatewayResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'ModifyIpv6GatewayResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeIpv6GatewaysResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeIpv6GatewaysResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeIpv6GatewaysRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'ipv6GatewayName' => [ 'type' => 'string', 'locationName' => 'ipv6GatewayName', ],
                'filters' => [ 'type' => 'list', 'member' => [ 'shape' => 'Filter', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DescribeIpv6GatewayResultShape' => [
            'type' => 'structure',
            'members' => [
                'ipv6Gateway' =>  [ 'shape' => 'Ipv6Gateway', ],
            ],
        ],
        'ModifyIpv6GatewayResultShape' => [
            'type' => 'structure',
            'members' => [
                'ipv6Gateway' =>  [ 'shape' => 'Ipv6Gateway', ],
            ],
        ],
        'CreateKeypairsResultShape' => [
            'type' => 'structure',
            'members' => [
                'keypairId' => [ 'type' => 'string', 'locationName' => 'keypairId', ],
                'region' => [ 'type' => 'string', 'locationName' => 'region', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'publicKey' => [ 'type' => 'string', 'locationName' => 'publicKey', ],
                'fingerPrint' => [ 'type' => 'string', 'locationName' => 'fingerPrint', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'updateTime' => [ 'type' => 'string', 'locationName' => 'updateTime', ],
                'privateKey' => [ 'type' => 'string', 'locationName' => 'privateKey', ],
            ],
        ],
        'DeleteKeypairsResultShape' => [
            'type' => 'structure',
            'members' => [
                'success' => [ 'type' => 'boolean', 'locationName' => 'success', ],
            ],
        ],
        'DeleteKeypairsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DeleteKeypairsResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeKeypairsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeKeypairsResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ImportKeypairsResultShape' => [
            'type' => 'structure',
            'members' => [
                'keypairId' => [ 'type' => 'string', 'locationName' => 'keypairId', ],
                'region' => [ 'type' => 'string', 'locationName' => 'region', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'publicKey' => [ 'type' => 'string', 'locationName' => 'publicKey', ],
                'fingerPrint' => [ 'type' => 'string', 'locationName' => 'fingerPrint', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'updateTime' => [ 'type' => 'string', 'locationName' => 'updateTime', ],
            ],
        ],
        'DescribeKeypairsResultShape' => [
            'type' => 'structure',
            'members' => [
                'keypairs' => [ 'type' => 'list', 'member' => [ 'shape' => 'Keypair', ], ],
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
            ],
        ],
        'ImportKeypairsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'ImportKeypairsResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'CreateKeypairsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'CreateKeypairsResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeKeypairResultShape' => [
            'type' => 'structure',
            'members' => [
                'keypair' =>  [ 'shape' => 'Keypair', ],
            ],
        ],
        'DescribeKeypairsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'filters' => [ 'type' => 'list', 'member' => [ 'shape' => 'Filter', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DescribeKeypairRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'keypairId' => [ 'type' => 'string', 'locationName' => 'keypairId', ],
            ],
        ],
        'DeleteKeypairsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'keypairId' => [ 'type' => 'string', 'locationName' => 'keypairId', ],
            ],
        ],
        'DescribeKeypairResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeKeypairResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'CreateKeypairsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'clientToken' => [ 'type' => 'string', 'locationName' => 'clientToken', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'ImportKeypairsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'clientToken' => [ 'type' => 'string', 'locationName' => 'clientToken', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'publicKey' => [ 'type' => 'string', 'locationName' => 'publicKey', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DescribeListenerRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'listenerId' => [ 'type' => 'string', 'locationName' => 'listenerId', ],
            ],
        ],
        'StartListenerResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'StartListenerResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ModifyListenerResultShape' => [
            'type' => 'structure',
            'members' => [
                'listener' =>  [ 'shape' => 'Listener', ],
            ],
        ],
        'DeleteListenerResultShape' => [
            'type' => 'structure',
            'members' => [
                'success' => [ 'type' => 'boolean', 'locationName' => 'success', ],
            ],
        ],
        'DeleteListenerResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DeleteListenerResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'CreateListenerResultShape' => [
            'type' => 'structure',
            'members' => [
                'listenerId' => [ 'type' => 'string', 'locationName' => 'listenerId', ],
            ],
        ],
        'StartListenerRequestShape' => [
            'type' => 'structure',
            'members' => [
                'clientToken' => [ 'type' => 'string', 'locationName' => 'clientToken', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'listenerId' => [ 'type' => 'string', 'locationName' => 'listenerId', ],
            ],
        ],
        'StopListenerRequestShape' => [
            'type' => 'structure',
            'members' => [
                'clientToken' => [ 'type' => 'string', 'locationName' => 'clientToken', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'listenerId' => [ 'type' => 'string', 'locationName' => 'listenerId', ],
            ],
        ],
        'DescribeListenersResultShape' => [
            'type' => 'structure',
            'members' => [
                'listeners' => [ 'type' => 'list', 'member' => [ 'shape' => 'Listener', ], ],
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
            ],
        ],
        'CreateListenerRequestShape' => [
            'type' => 'structure',
            'members' => [
                'clientToken' => [ 'type' => 'string', 'locationName' => 'clientToken', ],
                'listenerSpec' =>  [ 'shape' => 'ListenerSpec', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'StartListenerResultShape' => [
            'type' => 'structure',
            'members' => [
                'success' => [ 'type' => 'boolean', 'locationName' => 'success', ],
            ],
        ],
        'DeleteListenerRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'listenerId' => [ 'type' => 'string', 'locationName' => 'listenerId', ],
            ],
        ],
        'ModifyListenerRequestShape' => [
            'type' => 'structure',
            'members' => [
                'algorithm' => [ 'type' => 'string', 'locationName' => 'algorithm', ],
                'stickySession' => [ 'type' => 'string', 'locationName' => 'stickySession', ],
                'realIp' => [ 'type' => 'string', 'locationName' => 'realIp', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'healthCheck' => [ 'type' => 'string', 'locationName' => 'healthCheck', ],
                'healthCheckTimeout' => [ 'type' => 'integer', 'locationName' => 'healthCheckTimeout', ],
                'healthCheckInterval' => [ 'type' => 'integer', 'locationName' => 'healthCheckInterval', ],
                'healthyThreshold' => [ 'type' => 'integer', 'locationName' => 'healthyThreshold', ],
                'unhealthyThreshold' => [ 'type' => 'integer', 'locationName' => 'unhealthyThreshold', ],
                'serverGroupId' => [ 'type' => 'string', 'locationName' => 'serverGroupId', ],
                'stickySessionTimeout' => [ 'type' => 'integer', 'locationName' => 'stickySessionTimeout', ],
                'cookieType' => [ 'type' => 'string', 'locationName' => 'cookieType', ],
                'healthCheckUri' => [ 'type' => 'string', 'locationName' => 'healthCheckUri', ],
                'healthCheckHttpCode' => [ 'type' => 'string', 'locationName' => 'healthCheckHttpCode', ],
                'certificateId' => [ 'type' => 'string', 'locationName' => 'certificateId', ],
                'headers' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'listenerId' => [ 'type' => 'string', 'locationName' => 'listenerId', ],
            ],
        ],
        'StopListenerResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'StopListenerResultShape', ],
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
        'DescribeListenersRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'loadBalancerId' => [ 'type' => 'string', 'locationName' => 'loadBalancerId', ],
                'filters' => [ 'type' => 'list', 'member' => [ 'shape' => 'Filter', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DescribeListenerResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeListenerResultShape', ],
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
        'ModifyListenerResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'ModifyListenerResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeListenerResultShape' => [
            'type' => 'structure',
            'members' => [
                'listener' =>  [ 'shape' => 'Listener', ],
            ],
        ],
        'StopListenerResultShape' => [
            'type' => 'structure',
            'members' => [
                'success' => [ 'type' => 'boolean', 'locationName' => 'success', ],
            ],
        ],
        'DescribeLoadBalancersRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'vpcId' => [ 'type' => 'string', 'locationName' => 'vpcId', ],
                'bindEip' => [ 'type' => 'boolean', 'locationName' => 'bindEip', ],
                'filters' => [ 'type' => 'list', 'member' => [ 'shape' => 'Filter', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'AssociateElasticIpLBResultShape' => [
            'type' => 'structure',
            'members' => [
                'success' => [ 'type' => 'boolean', 'locationName' => 'success', ],
            ],
        ],
        'StopLoadBalancerResultShape' => [
            'type' => 'structure',
            'members' => [
                'success' => [ 'type' => 'boolean', 'locationName' => 'success', ],
            ],
        ],
        'DisassociateElasticIpLBRequestShape' => [
            'type' => 'structure',
            'members' => [
                'clientToken' => [ 'type' => 'string', 'locationName' => 'clientToken', ],
                'elasticIpId' => [ 'type' => 'string', 'locationName' => 'elasticIpId', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'loadBalancerId' => [ 'type' => 'string', 'locationName' => 'loadBalancerId', ],
            ],
        ],
        'DescribeSlbsNameRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'loadBalancerId' => [ 'type' => 'string', 'locationName' => 'loadBalancerId', ],
            ],
        ],
        'DisassociateElasticIpLBResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DisassociateElasticIpLBResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeLoadBalancerRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'loadBalancerId' => [ 'type' => 'string', 'locationName' => 'loadBalancerId', ],
            ],
        ],
        'AssociateElasticIpLBResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'AssociateElasticIpLBResultShape', ],
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
        'DisassociateElasticIpLBResultShape' => [
            'type' => 'structure',
            'members' => [
                'success' => [ 'type' => 'boolean', 'locationName' => 'success', ],
            ],
        ],
        'ModifyLoadBalancerResultShape' => [
            'type' => 'structure',
            'members' => [
                'loadBalancer' =>  [ 'shape' => 'LoadBalancer', ],
            ],
        ],
        'CreateLoadBalancerRequestShape' => [
            'type' => 'structure',
            'members' => [
                'clientToken' => [ 'type' => 'string', 'locationName' => 'clientToken', ],
                'loadBalancerSpec' =>  [ 'shape' => 'LoadBalancerSpec', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'ModifyLoadBalancerResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'ModifyLoadBalancerResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'StopLoadBalancerRequestShape' => [
            'type' => 'structure',
            'members' => [
                'clientToken' => [ 'type' => 'string', 'locationName' => 'clientToken', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'loadBalancerId' => [ 'type' => 'string', 'locationName' => 'loadBalancerId', ],
            ],
        ],
        'StartLoadBalancerRequestShape' => [
            'type' => 'structure',
            'members' => [
                'clientToken' => [ 'type' => 'string', 'locationName' => 'clientToken', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'loadBalancerId' => [ 'type' => 'string', 'locationName' => 'loadBalancerId', ],
            ],
        ],
        'ModifyLoadBalancerRequestShape' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'loadBalancerId' => [ 'type' => 'string', 'locationName' => 'loadBalancerId', ],
            ],
        ],
        'DescribeLoadBalancerResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeLoadBalancerResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'CreateLoadBalancerResultShape' => [
            'type' => 'structure',
            'members' => [
                'loadBalancerId' => [ 'type' => 'string', 'locationName' => 'loadBalancerId', ],
            ],
        ],
        'StartLoadBalancerResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'StartLoadBalancerResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeLoadBalancersResultShape' => [
            'type' => 'structure',
            'members' => [
                'loadBalancers' => [ 'type' => 'list', 'member' => [ 'shape' => 'LoadBalancer', ], ],
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
            ],
        ],
        'DescribeSlbsNameResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeSlbsNameResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'StopLoadBalancerResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'StopLoadBalancerResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'AssociateElasticIpLBRequestShape' => [
            'type' => 'structure',
            'members' => [
                'clientToken' => [ 'type' => 'string', 'locationName' => 'clientToken', ],
                'elasticIpId' => [ 'type' => 'string', 'locationName' => 'elasticIpId', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'loadBalancerId' => [ 'type' => 'string', 'locationName' => 'loadBalancerId', ],
            ],
        ],
        'DescribeLoadBalancerResultShape' => [
            'type' => 'structure',
            'members' => [
                'loadBalancer' =>  [ 'shape' => 'LoadBalancer', ],
            ],
        ],
        'StartLoadBalancerResultShape' => [
            'type' => 'structure',
            'members' => [
                'success' => [ 'type' => 'boolean', 'locationName' => 'success', ],
            ],
        ],
        'CreateLoadBalancerResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'CreateLoadBalancerResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeSlbsNameResultShape' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
            ],
        ],
        'DescribeRegionesResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeRegionesResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeCPSLBRegionsResultShape' => [
            'type' => 'structure',
            'members' => [
                'regions' => [ 'type' => 'list', 'member' => [ 'shape' => 'Region', ], ],
            ],
        ],
        'DescribeCPSLBRegionsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeCPSLBRegionsResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeRegionesRequestShape' => [
            'type' => 'structure',
            'members' => [
                'networkType' => [ 'type' => 'string', 'locationName' => 'networkType', ],
            ],
        ],
        'DescribeRegionesResultShape' => [
            'type' => 'structure',
            'members' => [
                'regions' => [ 'type' => 'list', 'member' => [ 'shape' => 'Region', ], ],
            ],
        ],
        'DescribeCPSLBRegionsRequestShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DescribeRouteTableResultShape' => [
            'type' => 'structure',
            'members' => [
                'routeTable' =>  [ 'shape' => 'RouteTable', ],
            ],
        ],
        'DescribeRouteTablesResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeRouteTablesResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeRouteTablesRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'vpcId' => [ 'type' => 'string', 'locationName' => 'vpcId', ],
                'filters' => [ 'type' => 'list', 'member' => [ 'shape' => 'Filter', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DescribeRouteTablesResultShape' => [
            'type' => 'structure',
            'members' => [
                'routeTables' => [ 'type' => 'list', 'member' => [ 'shape' => 'RouteTable', ], ],
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
            ],
        ],
        'DescribeRouteTableRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'routeTableId' => [ 'type' => 'string', 'locationName' => 'routeTableId', ],
            ],
        ],
        'DescribeRouteTableResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeRouteTableResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DeleteSecondaryCidrResultShape' => [
            'type' => 'structure',
            'members' => [
                'success' => [ 'type' => 'boolean', 'locationName' => 'success', ],
            ],
        ],
        'DeleteSecondaryCidrRequestShape' => [
            'type' => 'structure',
            'members' => [
                'clientToken' => [ 'type' => 'string', 'locationName' => 'clientToken', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'secondaryCidrId' => [ 'type' => 'string', 'locationName' => 'secondaryCidrId', ],
            ],
        ],
        'CreateSecondaryCidrResultShape' => [
            'type' => 'structure',
            'members' => [
                'secondaryCidrId' => [ 'type' => 'string', 'locationName' => 'secondaryCidrId', ],
            ],
        ],
        'CreateSecondaryCidrResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'CreateSecondaryCidrResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'CreateSecondaryCidrRequestShape' => [
            'type' => 'structure',
            'members' => [
                'clientToken' => [ 'type' => 'string', 'locationName' => 'clientToken', ],
                'secondaryCidrSpec' =>  [ 'shape' => 'SecondaryCidrSpec', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DescribeSecondaryCidrsResultShape' => [
            'type' => 'structure',
            'members' => [
                'secondaryCidrs' => [ 'type' => 'list', 'member' => [ 'shape' => 'SecondaryCidr', ], ],
            ],
        ],
        'DeleteSecondaryCidrResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DeleteSecondaryCidrResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeSecondaryCidrsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'subnetId' => [ 'type' => 'string', 'locationName' => 'subnetId', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DescribeSecondaryCidrsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeSecondaryCidrsResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'AddServersResultShape' => [
            'type' => 'structure',
            'members' => [
                'serverIds' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'AddServersResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'AddServersResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ModifyServerResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'ModifyServerResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeServersResultShape' => [
            'type' => 'structure',
            'members' => [
                'servers' => [ 'type' => 'list', 'member' => [ 'shape' => 'Server', ], ],
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
            ],
        ],
        'ModifyServerRequestShape' => [
            'type' => 'structure',
            'members' => [
                'weight' => [ 'type' => 'integer', 'locationName' => 'weight', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'serverGroupId' => [ 'type' => 'string', 'locationName' => 'serverGroupId', ],
                'serverId' => [ 'type' => 'string', 'locationName' => 'serverId', ],
            ],
        ],
        'DescribeServersResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeServersResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'RemoveServerResultShape' => [
            'type' => 'structure',
            'members' => [
                'success' => [ 'type' => 'boolean', 'locationName' => 'success', ],
            ],
        ],
        'ModifyServerResultShape' => [
            'type' => 'structure',
            'members' => [
                'serverId' => [ 'type' => 'string', 'locationName' => 'serverId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'privateIp' => [ 'type' => 'string', 'locationName' => 'privateIp', ],
                'port' => [ 'type' => 'integer', 'locationName' => 'port', ],
                'weight' => [ 'type' => 'integer', 'locationName' => 'weight', ],
            ],
        ],
        'DescribeServersRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'listenerId' => [ 'type' => 'string', 'locationName' => 'listenerId', ],
                'filters' => [ 'type' => 'list', 'member' => [ 'shape' => 'Filter', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'serverGroupId' => [ 'type' => 'string', 'locationName' => 'serverGroupId', ],
            ],
        ],
        'RemoveServerResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'RemoveServerResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'AddServersRequestShape' => [
            'type' => 'structure',
            'members' => [
                'clientToken' => [ 'type' => 'string', 'locationName' => 'clientToken', ],
                'serverSpec' => [ 'type' => 'list', 'member' => [ 'shape' => 'ServerSpec', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'serverGroupId' => [ 'type' => 'string', 'locationName' => 'serverGroupId', ],
            ],
        ],
        'RemoveServerRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'serverGroupId' => [ 'type' => 'string', 'locationName' => 'serverGroupId', ],
                'serverId' => [ 'type' => 'string', 'locationName' => 'serverId', ],
            ],
        ],
        'DescribeServerGroupsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeServerGroupsResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DeleteServerGroupResultShape' => [
            'type' => 'structure',
            'members' => [
                'success' => [ 'type' => 'boolean', 'locationName' => 'success', ],
            ],
        ],
        'DescribeServerGroupResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeServerGroupResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeServerGroupsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'loadBalancerId' => [ 'type' => 'string', 'locationName' => 'loadBalancerId', ],
                'filters' => [ 'type' => 'list', 'member' => [ 'shape' => 'Filter', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'CreateServerGroupResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'CreateServerGroupResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ModifyServerGroupResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'ModifyServerGroupResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeServerGroupsResultShape' => [
            'type' => 'structure',
            'members' => [
                'serverGroups' => [ 'type' => 'list', 'member' => [ 'shape' => 'ServerGroup', ], ],
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
            ],
        ],
        'DeleteServerGroupResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DeleteServerGroupResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeServerGroupRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'serverGroupId' => [ 'type' => 'string', 'locationName' => 'serverGroupId', ],
            ],
        ],
        'ModifyServerGroupRequestShape' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'serverGroupId' => [ 'type' => 'string', 'locationName' => 'serverGroupId', ],
            ],
        ],
        'ModifyServerGroupResultShape' => [
            'type' => 'structure',
            'members' => [
                'loadBalancerId' => [ 'type' => 'string', 'locationName' => 'loadBalancerId', ],
                'serverGroupId' => [ 'type' => 'string', 'locationName' => 'serverGroupId', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
            ],
        ],
        'CreateServerGroupRequestShape' => [
            'type' => 'structure',
            'members' => [
                'clientToken' => [ 'type' => 'string', 'locationName' => 'clientToken', ],
                'serverGroupSpec' =>  [ 'shape' => 'ServerGroupSpec', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DescribeServerGroupResultShape' => [
            'type' => 'structure',
            'members' => [
                'serverGroup' =>  [ 'shape' => 'ServerGroup', ],
            ],
        ],
        'DeleteServerGroupRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'serverGroupId' => [ 'type' => 'string', 'locationName' => 'serverGroupId', ],
            ],
        ],
        'CreateServerGroupResultShape' => [
            'type' => 'structure',
            'members' => [
                'serverGroupId' => [ 'type' => 'string', 'locationName' => 'serverGroupId', ],
            ],
        ],
        'CreateSubnetResultShape' => [
            'type' => 'structure',
            'members' => [
                'subnetId' => [ 'type' => 'string', 'locationName' => 'subnetId', ],
            ],
        ],
        'AssignIpv6CidrRequestShape' => [
            'type' => 'structure',
            'members' => [
                'clientToken' => [ 'type' => 'string', 'locationName' => 'clientToken', ],
                'ipv6Cidr' => [ 'type' => 'string', 'locationName' => 'ipv6Cidr', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'subnetId' => [ 'type' => 'string', 'locationName' => 'subnetId', ],
            ],
        ],
        'DeleteSubnetResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DeleteSubnetResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ModifySubnetResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'ModifySubnetResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeSubnetsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeSubnetsResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeBasicSubnetResultShape' => [
            'type' => 'structure',
            'members' => [
                'subnet' =>  [ 'shape' => 'Subnet', ],
            ],
        ],
        'ModifySubnetRequestShape' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'subnetId' => [ 'type' => 'string', 'locationName' => 'subnetId', ],
            ],
        ],
        'DeleteSubnetResultShape' => [
            'type' => 'structure',
            'members' => [
                'success' => [ 'type' => 'boolean', 'locationName' => 'success', ],
            ],
        ],
        'DescribeSubnetsResultShape' => [
            'type' => 'structure',
            'members' => [
                'subnets' => [ 'type' => 'list', 'member' => [ 'shape' => 'Subnet', ], ],
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
            ],
        ],
        'ModifySubnetResultShape' => [
            'type' => 'structure',
            'members' => [
                'subnet' =>  [ 'shape' => 'Subnet', ],
            ],
        ],
        'DescribeSubnetsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'az' => [ 'type' => 'string', 'locationName' => 'az', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'vpcId' => [ 'type' => 'string', 'locationName' => 'vpcId', ],
                'filters' => [ 'type' => 'list', 'member' => [ 'shape' => 'Filter', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DescribeSubnetResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeSubnetResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DeleteSubnetRequestShape' => [
            'type' => 'structure',
            'members' => [
                'clientToken' => [ 'type' => 'string', 'locationName' => 'clientToken', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'subnetId' => [ 'type' => 'string', 'locationName' => 'subnetId', ],
            ],
        ],
        'AssignIpv6CidrResultShape' => [
            'type' => 'structure',
            'members' => [
                'success' => [ 'type' => 'boolean', 'locationName' => 'success', ],
            ],
        ],
        'AssignIpv6CidrResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'AssignIpv6CidrResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeSubnetResultShape' => [
            'type' => 'structure',
            'members' => [
                'subnet' =>  [ 'shape' => 'Subnet', ],
            ],
        ],
        'DescribeSubnetRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'subnetId' => [ 'type' => 'string', 'locationName' => 'subnetId', ],
            ],
        ],
        'DescribeBasicSubnetRequestShape' => [
            'type' => 'structure',
            'members' => [
                'az' => [ 'type' => 'string', 'locationName' => 'az', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'CreateSubnetResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'CreateSubnetResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'CreateSubnetRequestShape' => [
            'type' => 'structure',
            'members' => [
                'clientToken' => [ 'type' => 'string', 'locationName' => 'clientToken', ],
                'subnetSpec' =>  [ 'shape' => 'SubnetSpec', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DescribeBasicSubnetResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeBasicSubnetResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'AssignIpv6GatewayResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'AssignIpv6GatewayResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DeleteVpcRequestShape' => [
            'type' => 'structure',
            'members' => [
                'clientToken' => [ 'type' => 'string', 'locationName' => 'clientToken', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'vpcId' => [ 'type' => 'string', 'locationName' => 'vpcId', ],
            ],
        ],
        'ModifyVpcRequestShape' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'vpcId' => [ 'type' => 'string', 'locationName' => 'vpcId', ],
            ],
        ],
        'DeleteVpcResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DeleteVpcResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeVpcsResultShape' => [
            'type' => 'structure',
            'members' => [
                'vpcs' => [ 'type' => 'list', 'member' => [ 'shape' => 'Vpc', ], ],
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
            ],
        ],
        'DeleteVpcResultShape' => [
            'type' => 'structure',
            'members' => [
                'success' => [ 'type' => 'boolean', 'locationName' => 'success', ],
            ],
        ],
        'CreateVpcRequestShape' => [
            'type' => 'structure',
            'members' => [
                'clientToken' => [ 'type' => 'string', 'locationName' => 'clientToken', ],
                'vpcSpec' =>  [ 'shape' => 'VpcSpec', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DescribeVpcsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeVpcsResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeVpcResultShape' => [
            'type' => 'structure',
            'members' => [
                'vpc' =>  [ 'shape' => 'Vpc', ],
            ],
        ],
        'ModifyVpcResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'ModifyVpcResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'CreateVpcResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'CreateVpcResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeVpcsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'filters' => [ 'type' => 'list', 'member' => [ 'shape' => 'Filter', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DescribeVpcResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeVpcResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'AssignIpv6GatewayResultShape' => [
            'type' => 'structure',
            'members' => [
                'success' => [ 'type' => 'boolean', 'locationName' => 'success', ],
            ],
        ],
        'AssignIpv6GatewayRequestShape' => [
            'type' => 'structure',
            'members' => [
                'clientToken' => [ 'type' => 'string', 'locationName' => 'clientToken', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'vpcId' => [ 'type' => 'string', 'locationName' => 'vpcId', ],
            ],
        ],
        'CreateVpcResultShape' => [
            'type' => 'structure',
            'members' => [
                'vpcId' => [ 'type' => 'string', 'locationName' => 'vpcId', ],
            ],
        ],
        'DescribeVpcRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'vpcId' => [ 'type' => 'string', 'locationName' => 'vpcId', ],
            ],
        ],
        'ModifyVpcResultShape' => [
            'type' => 'structure',
            'members' => [
                'vpc' =>  [ 'shape' => 'Vpc', ],
            ],
        ],
    ],
];
