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
        'DescribeInstanceMonitorInfo' => [
            'name' => 'DescribeInstanceMonitorInfo',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}/monitor',
            ],
            'input' => [ 'shape' => 'DescribeInstanceMonitorInfoRequestShape', ],
            'output' => [ 'shape' => 'DescribeInstanceMonitorInfoResponseShape', ],
        ],
        'QueryListeners' => [
            'name' => 'QueryListeners',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/listeners',
            ],
            'input' => [ 'shape' => 'QueryListenersRequestShape', ],
            'output' => [ 'shape' => 'QueryListenersResponseShape', ],
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
                'requestUri' => '/v1/regions/{regionId}/listeners/{listenerId}:modifylistenerAttributes',
            ],
            'input' => [ 'shape' => 'ModifyListenerRequestShape', ],
            'output' => [ 'shape' => 'ModifyListenerResponseShape', ],
        ],
        'QueryListener' => [
            'name' => 'QueryListener',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/listeners/{listenerId}',
            ],
            'input' => [ 'shape' => 'QueryListenerRequestShape', ],
            'output' => [ 'shape' => 'QueryListenerResponseShape', ],
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
        'QueryLoadBalancers' => [
            'name' => 'QueryLoadBalancers',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/slbs',
            ],
            'input' => [ 'shape' => 'QueryLoadBalancersRequestShape', ],
            'output' => [ 'shape' => 'QueryLoadBalancersResponseShape', ],
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
        'QueryLoadBalancer' => [
            'name' => 'QueryLoadBalancer',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/slbs/{loadBalancerId}',
            ],
            'input' => [ 'shape' => 'QueryLoadBalancerRequestShape', ],
            'output' => [ 'shape' => 'QueryLoadBalancerResponseShape', ],
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
        'DescribeRegiones' => [
            'name' => 'DescribeRegiones',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions',
            ],
            'input' => [ 'shape' => 'DescribeRegionesRequestShape', ],
            'output' => [ 'shape' => 'DescribeRegionesResponseShape', ],
        ],
        'QueryCPSLBRegions' => [
            'name' => 'QueryCPSLBRegions',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/cpslbRegions',
            ],
            'input' => [ 'shape' => 'QueryCPSLBRegionsRequestShape', ],
            'output' => [ 'shape' => 'QueryCPSLBRegionsResponseShape', ],
        ],
        'QueryRouteTable' => [
            'name' => 'QueryRouteTable',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/routeTables/{routeTableId}',
            ],
            'input' => [ 'shape' => 'QueryRouteTableRequestShape', ],
            'output' => [ 'shape' => 'QueryRouteTableResponseShape', ],
        ],
        'QueryRouteTables' => [
            'name' => 'QueryRouteTables',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/routeTables',
            ],
            'input' => [ 'shape' => 'QueryRouteTablesRequestShape', ],
            'output' => [ 'shape' => 'QueryRouteTablesResponseShape', ],
        ],
        'QueryServers' => [
            'name' => 'QueryServers',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/serverGroups/{serverGroupId}/servers',
            ],
            'input' => [ 'shape' => 'QueryServersRequestShape', ],
            'output' => [ 'shape' => 'QueryServersResponseShape', ],
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
        'QueryServerGroups' => [
            'name' => 'QueryServerGroups',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/serverGroups',
            ],
            'input' => [ 'shape' => 'QueryServerGroupsRequestShape', ],
            'output' => [ 'shape' => 'QueryServerGroupsResponseShape', ],
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
        'QueryServerGroup' => [
            'name' => 'QueryServerGroup',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/serverGroups/{serverGroupId}',
            ],
            'input' => [ 'shape' => 'QueryServerGroupRequestShape', ],
            'output' => [ 'shape' => 'QueryServerGroupResponseShape', ],
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
                'subnetId' => [ 'type' => 'string', 'locationName' => 'subnetId', ],
                'subnetName' => [ 'type' => 'string', 'locationName' => 'subnetName', ],
                'privateIp' => [ 'type' => 'string', 'locationName' => 'privateIp', ],
                'lineType' => [ 'type' => 'string', 'locationName' => 'lineType', ],
                'elasticIpId' => [ 'type' => 'string', 'locationName' => 'elasticIpId', ],
                'publicIp' => [ 'type' => 'string', 'locationName' => 'publicIp', ],
                'publicIpv6' => [ 'type' => 'string', 'locationName' => 'publicIpv6', ],
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
                'enableIpv6' => [ 'type' => 'string', 'locationName' => 'enableIpv6', ],
                'networkType' => [ 'type' => 'string', 'locationName' => 'networkType', ],
                'cidr' => [ 'type' => 'string', 'locationName' => 'cidr', ],
                'privateIp' => [ 'type' => 'string', 'locationName' => 'privateIp', ],
                'lineType' => [ 'type' => 'string', 'locationName' => 'lineType', ],
                'bandwidth' => [ 'type' => 'integer', 'locationName' => 'bandwidth', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'password' => [ 'type' => 'string', 'locationName' => 'password', ],
                'count' => [ 'type' => 'integer', 'locationName' => 'count', ],
                'charge' =>  [ 'shape' => 'ChargeSpec', ],
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
                'stickySessionTimeout' => [ 'type' => 'integer', 'locationName' => 'stickySessionTimeout', ],
                'cookieType' => [ 'type' => 'string', 'locationName' => 'cookieType', ],
                'realIp' => [ 'type' => 'string', 'locationName' => 'realIp', ],
                'certificateId' => [ 'type' => 'string', 'locationName' => 'certificateId', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'headers' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'healthCheck' => [ 'type' => 'string', 'locationName' => 'healthCheck', ],
                'healthCheckTimeout' => [ 'type' => 'integer', 'locationName' => 'healthCheckTimeout', ],
                'healthCheckInterval' => [ 'type' => 'integer', 'locationName' => 'healthCheckInterval', ],
                'healthyThreshold' => [ 'type' => 'integer', 'locationName' => 'healthyThreshold', ],
                'unhealthyThreshold' => [ 'type' => 'integer', 'locationName' => 'unhealthyThreshold', ],
                'healthCheckUri' => [ 'type' => 'string', 'locationName' => 'healthCheckUri', ],
                'healthCheckHttpCode' => [ 'type' => 'string', 'locationName' => 'healthCheckHttpCode', ],
                'healthCheckIp' => [ 'type' => 'string', 'locationName' => 'healthCheckIp', ],
                'serverGroupId' => [ 'type' => 'string', 'locationName' => 'serverGroupId', ],
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
                'stickySessionTimeout' => [ 'type' => 'integer', 'locationName' => 'stickySessionTimeout', ],
                'cookieType' => [ 'type' => 'string', 'locationName' => 'cookieType', ],
                'realIp' => [ 'type' => 'string', 'locationName' => 'realIp', ],
                'certificateId' => [ 'type' => 'string', 'locationName' => 'certificateId', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'headers' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'healthCheck' => [ 'type' => 'string', 'locationName' => 'healthCheck', ],
                'healthCheckTimeout' => [ 'type' => 'integer', 'locationName' => 'healthCheckTimeout', ],
                'healthCheckInterval' => [ 'type' => 'integer', 'locationName' => 'healthCheckInterval', ],
                'healthyThreshold' => [ 'type' => 'integer', 'locationName' => 'healthyThreshold', ],
                'unhealthyThreshold' => [ 'type' => 'integer', 'locationName' => 'unhealthyThreshold', ],
                'healthCheckUri' => [ 'type' => 'string', 'locationName' => 'healthCheckUri', ],
                'healthCheckHttpCode' => [ 'type' => 'string', 'locationName' => 'healthCheckHttpCode', ],
                'healthCheckIp' => [ 'type' => 'string', 'locationName' => 'healthCheckIp', ],
                'serverGroupId' => [ 'type' => 'string', 'locationName' => 'serverGroupId', ],
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
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'routes' => [ 'type' => 'list', 'member' => [ 'shape' => 'Route', ], ],
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
                'vpcId' => [ 'type' => 'string', 'locationName' => 'vpcId', ],
                'vpcName' => [ 'type' => 'string', 'locationName' => 'vpcName', ],
                'availableIpCount' => [ 'type' => 'integer', 'locationName' => 'availableIpCount', ],
                'totalIpCount' => [ 'type' => 'integer', 'locationName' => 'totalIpCount', ],
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
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
            ],
        ],
        'Vpc' => [
            'type' => 'structure',
            'members' => [
                'region' => [ 'type' => 'string', 'locationName' => 'region', ],
                'vpcId' => [ 'type' => 'string', 'locationName' => 'vpcId', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'cidr' => [ 'type' => 'string', 'locationName' => 'cidr', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
            ],
        ],
        'VpcSpec' => [
            'type' => 'structure',
            'members' => [
                'cidr' => [ 'type' => 'string', 'locationName' => 'cidr', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
            ],
        ],
        'DescribeElasticIpsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeElasticIpsResultShape', ],
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
        'DescribeElasticIpResultShape' => [
            'type' => 'structure',
            'members' => [
                'elasticIp' =>  [ 'shape' => 'ElasticIp', ],
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
                'enableInternet' => [ 'type' => 'string', 'locationName' => 'enableInternet', ],
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
        'DescribeInstanceRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
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
        'DescribeDeviceRaidsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeDeviceRaidsResultShape', ],
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
        'DescribeInstanceNameRequestShape' => [
            'type' => 'structure',
            'members' => [
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
        'AssociateElasticIpRequestShape' => [
            'type' => 'structure',
            'members' => [
                'clientToken' => [ 'type' => 'string', 'locationName' => 'clientToken', ],
                'elasticIpId' => [ 'type' => 'string', 'locationName' => 'elasticIpId', ],
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
                'metricDatas' =>  [ 'shape' => 'MetricData', ],
            ],
        ],
        'CreateInstancesResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'CreateInstancesResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeInstanceMonitorInfoRequestShape' => [
            'type' => 'structure',
            'members' => [
                'startTime' => [ 'type' => 'long', 'locationName' => 'startTime', ],
                'endTime' => [ 'type' => 'long', 'locationName' => 'endTime', ],
                'metrics' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
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
        'DescribeInstanceStatusRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
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
        'QueryListenersResultShape' => [
            'type' => 'structure',
            'members' => [
                'listeners' => [ 'type' => 'list', 'member' => [ 'shape' => 'Listener', ], ],
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
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
                'loadBalancer' =>  [ 'shape' => 'Listener', ],
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
        'QueryListenersRequestShape' => [
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
        'CreateListenerRequestShape' => [
            'type' => 'structure',
            'members' => [
                'clientToken' => [ 'type' => 'string', 'locationName' => 'clientToken', ],
                'loadBalancerSpec' =>  [ 'shape' => 'ListenerSpec', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'QueryListenerRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'listenerId' => [ 'type' => 'string', 'locationName' => 'listenerId', ],
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
                'stickySessionTimeout' => [ 'type' => 'integer', 'locationName' => 'stickySessionTimeout', ],
                'cookieType' => [ 'type' => 'string', 'locationName' => 'cookieType', ],
                'realIp' => [ 'type' => 'string', 'locationName' => 'realIp', ],
                'certificateId' => [ 'type' => 'string', 'locationName' => 'certificateId', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'headers' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'healthCheck' => [ 'type' => 'string', 'locationName' => 'healthCheck', ],
                'healthCheckTimeout' => [ 'type' => 'integer', 'locationName' => 'healthCheckTimeout', ],
                'healthCheckInterval' => [ 'type' => 'integer', 'locationName' => 'healthCheckInterval', ],
                'healthyThreshold' => [ 'type' => 'integer', 'locationName' => 'healthyThreshold', ],
                'unhealthyThreshold' => [ 'type' => 'integer', 'locationName' => 'unhealthyThreshold', ],
                'healthCheckUri' => [ 'type' => 'string', 'locationName' => 'healthCheckUri', ],
                'healthCheckHttpCode' => [ 'type' => 'string', 'locationName' => 'healthCheckHttpCode', ],
                'healthCheckIp' => [ 'type' => 'string', 'locationName' => 'healthCheckIp', ],
                'serverGroupId' => [ 'type' => 'string', 'locationName' => 'serverGroupId', ],
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
        'QueryListenersResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'QueryListenersResultShape', ],
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
        'QueryListenerResultShape' => [
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
        'QueryListenerResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'QueryListenerResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
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
        'QueryLoadBalancerResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'QueryLoadBalancerResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
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
        'DisassociateElasticIpLBResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DisassociateElasticIpLBResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'AssociateElasticIpLBResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'AssociateElasticIpLBResultShape', ],
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
        'QueryLoadBalancersResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'QueryLoadBalancersResultShape', ],
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
        'QueryLoadBalancerRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'loadBalancerId' => [ 'type' => 'string', 'locationName' => 'loadBalancerId', ],
            ],
        ],
        'QueryLoadBalancersRequestShape' => [
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
        'StopLoadBalancerResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'StopLoadBalancerResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'QueryLoadBalancersResultShape' => [
            'type' => 'structure',
            'members' => [
                'loadBalancers' => [ 'type' => 'list', 'member' => [ 'shape' => 'LoadBalancer', ], ],
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
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
        'QueryLoadBalancerResultShape' => [
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
        'DescribeRegionesResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeRegionesResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'QueryCPSLBRegionsRequestShape' => [
            'type' => 'structure',
            'members' => [
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
        'QueryCPSLBRegionsResultShape' => [
            'type' => 'structure',
            'members' => [
                'regions' => [ 'type' => 'list', 'member' => [ 'shape' => 'Region', ], ],
            ],
        ],
        'QueryCPSLBRegionsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'QueryCPSLBRegionsResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'QueryRouteTableResultShape' => [
            'type' => 'structure',
            'members' => [
                'routeTable' =>  [ 'shape' => 'RouteTable', ],
            ],
        ],
        'QueryRouteTablesResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'QueryRouteTablesResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'QueryRouteTableRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'routeTableId' => [ 'type' => 'string', 'locationName' => 'routeTableId', ],
            ],
        ],
        'QueryRouteTablesRequestShape' => [
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
        'QueryRouteTablesResultShape' => [
            'type' => 'structure',
            'members' => [
                'routeTables' => [ 'type' => 'list', 'member' => [ 'shape' => 'RouteTable', ], ],
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
            ],
        ],
        'QueryRouteTableResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'QueryRouteTableResultShape', ],
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
        'ModifyServerRequestShape' => [
            'type' => 'structure',
            'members' => [
                'weight' => [ 'type' => 'integer', 'locationName' => 'weight', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'serverGroupId' => [ 'type' => 'string', 'locationName' => 'serverGroupId', ],
                'serverId' => [ 'type' => 'string', 'locationName' => 'serverId', ],
            ],
        ],
        'QueryServersResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'QueryServersResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'RemoveServerResultShape' => [
            'type' => 'structure',
            'members' => [
                'success' => [ 'type' => 'boolean', 'locationName' => 'success', ],
            ],
        ],
        'QueryServersResultShape' => [
            'type' => 'structure',
            'members' => [
                'servers' => [ 'type' => 'list', 'member' => [ 'shape' => 'Server', ], ],
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
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
        'QueryServersRequestShape' => [
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
        'DeleteServerGroupResultShape' => [
            'type' => 'structure',
            'members' => [
                'success' => [ 'type' => 'boolean', 'locationName' => 'success', ],
            ],
        ],
        'QueryServerGroupRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'serverGroupId' => [ 'type' => 'string', 'locationName' => 'serverGroupId', ],
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
        'DeleteServerGroupResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DeleteServerGroupResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'QueryServerGroupsResultShape' => [
            'type' => 'structure',
            'members' => [
                'servers' => [ 'type' => 'list', 'member' => [ 'shape' => 'ServerGroup', ], ],
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
            ],
        ],
        'QueryServerGroupsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'QueryServerGroupsResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'QueryServerGroupResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'QueryServerGroupResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'QueryServerGroupResultShape' => [
            'type' => 'structure',
            'members' => [
                'serverGroup' =>  [ 'shape' => 'ServerGroup', ],
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
        'DeleteServerGroupRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'serverGroupId' => [ 'type' => 'string', 'locationName' => 'serverGroupId', ],
            ],
        ],
        'QueryServerGroupsRequestShape' => [
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
