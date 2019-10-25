<?php
// This file was auto-generated
return [
//    'version' => '',
    'metadata' =>
    [
//        'apiVersion' => '',
//        'endpointPrefix' => 'edcps',
        'protocol' => 'json',
//        'serviceFullName' => 'edcps',
//        'serviceId' => 'edcps',
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
        'DescribeElasticIpStock' => [
            'name' => 'DescribeElasticIpStock',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/elasticIpStock',
            ],
            'input' => [ 'shape' => 'DescribeElasticIpStockRequestShape', ],
            'output' => [ 'shape' => 'DescribeElasticIpStockResponseShape', ],
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
        'DescribeDeviceStock' => [
            'name' => 'DescribeDeviceStock',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/deviceStock',
            ],
            'input' => [ 'shape' => 'DescribeDeviceStockRequestShape', ],
            'output' => [ 'shape' => 'DescribeDeviceStockResponseShape', ],
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
        'DescribeLineTypes' => [
            'name' => 'DescribeLineTypes',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/lineTypes',
            ],
            'input' => [ 'shape' => 'DescribeLineTypesRequestShape', ],
            'output' => [ 'shape' => 'DescribeLineTypesResponseShape', ],
        ],
        'DescribeEdCPSRegions' => [
            'name' => 'DescribeEdCPSRegions',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/edgeRegions',
            ],
            'input' => [ 'shape' => 'DescribeEdCPSRegionsRequestShape', ],
            'output' => [ 'shape' => 'DescribeEdCPSRegionsResponseShape', ],
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
        'ElasticIp' => [
            'type' => 'structure',
            'members' => [
                'region' => [ 'type' => 'string', 'locationName' => 'region', ],
                'elasticIpId' => [ 'type' => 'string', 'locationName' => 'elasticIpId', ],
                'elasticIp' => [ 'type' => 'string', 'locationName' => 'elasticIp', ],
                'bandwidth' => [ 'type' => 'integer', 'locationName' => 'bandwidth', ],
                'extraUplinkBandwidth' => [ 'type' => 'integer', 'locationName' => 'extraUplinkBandwidth', ],
                'lineType' => [ 'type' => 'string', 'locationName' => 'lineType', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'instanceType' => [ 'type' => 'string', 'locationName' => 'instanceType', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'charge' =>  [ 'shape' => 'Charge', ],
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
        'ChargeSpec' => [
            'type' => 'structure',
            'members' => [
                'chargeMode' => [ 'type' => 'string', 'locationName' => 'chargeMode', ],
                'chargeUnit' => [ 'type' => 'string', 'locationName' => 'chargeUnit', ],
                'chargeDuration' => [ 'type' => 'integer', 'locationName' => 'chargeDuration', ],
                'autoRenew' => [ 'type' => 'boolean', 'locationName' => 'autoRenew', ],
                'buyScenario' => [ 'type' => 'string', 'locationName' => 'buyScenario', ],
            ],
        ],
        'ElasticIpSpec' => [
            'type' => 'structure',
            'members' => [
                'bandwidth' => [ 'type' => 'integer', 'locationName' => 'bandwidth', ],
                'extraUplinkBandwidth' => [ 'type' => 'integer', 'locationName' => 'extraUplinkBandwidth', ],
                'count' => [ 'type' => 'integer', 'locationName' => 'count', ],
                'charge' =>  [ 'shape' => 'ChargeSpec', ],
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
                'extraUplinkBandwidth' => [ 'type' => 'integer', 'locationName' => 'extraUplinkBandwidth', ],
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
                'networkType' => [ 'type' => 'string', 'locationName' => 'networkType', ],
                'cidr' => [ 'type' => 'string', 'locationName' => 'cidr', ],
                'privateIp' => [ 'type' => 'string', 'locationName' => 'privateIp', ],
                'lineType' => [ 'type' => 'string', 'locationName' => 'lineType', ],
                'bandwidth' => [ 'type' => 'integer', 'locationName' => 'bandwidth', ],
                'extraUplinkBandwidth' => [ 'type' => 'integer', 'locationName' => 'extraUplinkBandwidth', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'password' => [ 'type' => 'string', 'locationName' => 'password', ],
                'count' => [ 'type' => 'integer', 'locationName' => 'count', ],
                'userData' => [ 'type' => 'string', 'locationName' => 'userData', ],
                'keypairId' => [ 'type' => 'string', 'locationName' => 'keypairId', ],
                'charge' =>  [ 'shape' => 'ChargeSpec', ],
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
        'LineType' => [
            'type' => 'structure',
            'members' => [
                'lineType' => [ 'type' => 'string', 'locationName' => 'lineType', ],
                'region' => [ 'type' => 'string', 'locationName' => 'region', ],
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
        'ResourceStock' => [
            'type' => 'structure',
            'members' => [
                'deviceType' => [ 'type' => 'string', 'locationName' => 'deviceType', ],
                'region' => [ 'type' => 'string', 'locationName' => 'region', ],
                'available' => [ 'type' => 'integer', 'locationName' => 'available', ],
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
        'ModifyElasticIpBandwidthRequestShape' => [
            'type' => 'structure',
            'members' => [
                'clientToken' => [ 'type' => 'string', 'locationName' => 'clientToken', ],
                'bandwidth' => [ 'type' => 'integer', 'locationName' => 'bandwidth', ],
                'extraUplinkBandwidth' => [ 'type' => 'integer', 'locationName' => 'extraUplinkBandwidth', ],
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
        'DescribeElasticIpStockResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeElasticIpStockResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeElasticIpResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeElasticIpResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeElasticIpStockResultShape' => [
            'type' => 'structure',
            'members' => [
                'region' => [ 'type' => 'string', 'locationName' => 'region', ],
                'available' => [ 'type' => 'integer', 'locationName' => 'available', ],
                'availableBandwidth' => [ 'type' => 'integer', 'locationName' => 'availableBandwidth', ],
                'availableExtraUplinkBandwidth' => [ 'type' => 'integer', 'locationName' => 'availableExtraUplinkBandwidth', ],
            ],
        ],
        'DescribeElasticIpsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeElasticIpsResultShape', ],
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
        'DescribeElasticIpStockRequestShape' => [
            'type' => 'structure',
            'members' => [
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
        'ApplyElasticIpsResultShape' => [
            'type' => 'structure',
            'members' => [
                'elasticIpIds' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
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
        'DescribeElasticIpsResultShape' => [
            'type' => 'structure',
            'members' => [
                'elasticIps' => [ 'type' => 'list', 'member' => [ 'shape' => 'ElasticIp', ], ],
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
            ],
        ],
        'ApplyElasticIpsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'ApplyElasticIpsResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ReinstallInstanceResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'ReinstallInstanceResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'StartInstanceResultShape' => [
            'type' => 'structure',
            'members' => [
                'success' => [ 'type' => 'boolean', 'locationName' => 'success', ],
            ],
        ],
        'ReinstallInstanceResultShape' => [
            'type' => 'structure',
            'members' => [
                'success' => [ 'type' => 'boolean', 'locationName' => 'success', ],
            ],
        ],
        'DescribeInstanceResultShape' => [
            'type' => 'structure',
            'members' => [
                'instance' =>  [ 'shape' => 'Instance', ],
            ],
        ],
        'DescribeInstanceStatusResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeInstanceStatusResultShape', ],
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
        'DescribeAvailablePrivateIpRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
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
        'DescribeInstanceResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeInstanceResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'AssociateElasticIpResultShape' => [
            'type' => 'structure',
            'members' => [
                'success' => [ 'type' => 'boolean', 'locationName' => 'success', ],
            ],
        ],
        'DisassociateElasticIpResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DisassociateElasticIpResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'RestartInstanceResultShape' => [
            'type' => 'structure',
            'members' => [
                'success' => [ 'type' => 'boolean', 'locationName' => 'success', ],
            ],
        ],
        'ModifyInstanceResultShape' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
            ],
        ],
        'DescribeInstanceRaidRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'AssociateElasticIpRequestShape' => [
            'type' => 'structure',
            'members' => [
                'clientToken' => [ 'type' => 'string', 'locationName' => 'clientToken', ],
                'elasticIpId' => [ 'type' => 'string', 'locationName' => 'elasticIpId', ],
                'targetIp' => [ 'type' => 'string', 'locationName' => 'targetIp', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'CreateInstancesResultShape' => [
            'type' => 'structure',
            'members' => [
                'instanceIds' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'DescribeOSResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeOSResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
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
        'DisassociateElasticIpResultShape' => [
            'type' => 'structure',
            'members' => [
                'success' => [ 'type' => 'boolean', 'locationName' => 'success', ],
            ],
        ],
        'ModifyInstanceResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'ModifyInstanceResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'StopInstanceResultShape' => [
            'type' => 'structure',
            'members' => [
                'success' => [ 'type' => 'boolean', 'locationName' => 'success', ],
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
                'keypairId' => [ 'type' => 'string', 'locationName' => 'keypairId', ],
                'filters' => [ 'type' => 'list', 'member' => [ 'shape' => 'Filter', ], ],
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
        'DescribeInstanceRaidResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeInstanceRaidResultShape', ],
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
        'DescribeAvailablePrivateIpResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
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
        'DescribeAvailablePrivateIpResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'RestartInstanceResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'RestartInstanceResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeDeviceTypesResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeDeviceTypesResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
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
        'DescribeInstanceNameRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'DescribeDeviceTypesResultShape' => [
            'type' => 'structure',
            'members' => [
                'deviceTypes' => [ 'type' => 'list', 'member' => [ 'shape' => 'DeviceType', ], ],
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
        'DescribeDeviceTypesRequestShape' => [
            'type' => 'structure',
            'members' => [
                'az' => [ 'type' => 'string', 'locationName' => 'az', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
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
        'StartInstanceRequestShape' => [
            'type' => 'structure',
            'members' => [
                'clientToken' => [ 'type' => 'string', 'locationName' => 'clientToken', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
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
        'DescribeDeviceStockResultShape' => [
            'type' => 'structure',
            'members' => [
                'devicesStock' => [ 'type' => 'list', 'member' => [ 'shape' => 'ResourceStock', ], ],
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
        'DescribeDeviceRaidsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'deviceType' => [ 'type' => 'string', 'locationName' => 'deviceType', ],
                'volumeType' => [ 'type' => 'string', 'locationName' => 'volumeType', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
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
        'DescribeOSResultShape' => [
            'type' => 'structure',
            'members' => [
                'oss' => [ 'type' => 'list', 'member' => [ 'shape' => 'Os', ], ],
            ],
        ],
        'ResetPasswordResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'ResetPasswordResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeInstanceNameResultShape' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
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
        'ResetPasswordResultShape' => [
            'type' => 'structure',
            'members' => [
                'success' => [ 'type' => 'boolean', 'locationName' => 'success', ],
            ],
        ],
        'DescribeInstanceNameResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeInstanceNameResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'AssociateElasticIpResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'AssociateElasticIpResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeDeviceRaidsResultShape' => [
            'type' => 'structure',
            'members' => [
                'raids' => [ 'type' => 'list', 'member' => [ 'shape' => 'Raid', ], ],
            ],
        ],
        'DescribeInstanceStatusRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
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
        'DescribeDeviceStockRequestShape' => [
            'type' => 'structure',
            'members' => [
                'deviceType' => [ 'type' => 'string', 'locationName' => 'deviceType', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'CreateInstancesResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'CreateInstancesResultShape', ],
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
        'DescribeDeviceStockResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeDeviceStockResultShape', ],
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
        'DeleteKeypairsResultShape' => [
            'type' => 'structure',
            'members' => [
                'success' => [ 'type' => 'boolean', 'locationName' => 'success', ],
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
        'CreateKeypairsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'clientToken' => [ 'type' => 'string', 'locationName' => 'clientToken', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'CreateKeypairsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'CreateKeypairsResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
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
        'DescribeKeypairsResultShape' => [
            'type' => 'structure',
            'members' => [
                'servers' => [ 'type' => 'list', 'member' => [ 'shape' => 'Keypair', ], ],
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
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
        'DescribeKeypairsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeKeypairsResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeKeypairResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeKeypairResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ImportKeypairsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'ImportKeypairsResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeKeypairResultShape' => [
            'type' => 'structure',
            'members' => [
                'server' =>  [ 'shape' => 'Keypair', ],
            ],
        ],
        'DeleteKeypairsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DeleteKeypairsResultShape', ],
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
        'DescribeLineTypesResultShape' => [
            'type' => 'structure',
            'members' => [
                'lineTypes' => [ 'type' => 'list', 'member' => [ 'shape' => 'LineType', ], ],
            ],
        ],
        'DescribeLineTypesRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DescribeLineTypesResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeLineTypesResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeEdCPSRegionsResultShape' => [
            'type' => 'structure',
            'members' => [
                'regions' => [ 'type' => 'list', 'member' => [ 'shape' => 'Region', ], ],
            ],
        ],
        'DescribeEdCPSRegionsRequestShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DescribeEdCPSRegionsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeEdCPSRegionsResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
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
        'DescribeSubnetsResultShape' => [
            'type' => 'structure',
            'members' => [
                'subnets' => [ 'type' => 'list', 'member' => [ 'shape' => 'Subnet', ], ],
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
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
        'CreateSubnetResultShape' => [
            'type' => 'structure',
            'members' => [
                'subnetId' => [ 'type' => 'string', 'locationName' => 'subnetId', ],
            ],
        ],
        'DescribeSubnetRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'subnetId' => [ 'type' => 'string', 'locationName' => 'subnetId', ],
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
        'DeleteSubnetResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DeleteSubnetResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'CreateSubnetResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'CreateSubnetResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ModifySubnetResultShape' => [
            'type' => 'structure',
            'members' => [
                'subnet' =>  [ 'shape' => 'Subnet', ],
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
        'DescribeSubnetResultShape' => [
            'type' => 'structure',
            'members' => [
                'subnet' =>  [ 'shape' => 'Subnet', ],
            ],
        ],
        'DeleteSubnetResultShape' => [
            'type' => 'structure',
            'members' => [
                'success' => [ 'type' => 'boolean', 'locationName' => 'success', ],
            ],
        ],
        'ModifyVpcResultShape' => [
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
        'CreateVpcRequestShape' => [
            'type' => 'structure',
            'members' => [
                'clientToken' => [ 'type' => 'string', 'locationName' => 'clientToken', ],
                'vpcSpec' =>  [ 'shape' => 'VpcSpec', ],
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
        'DeleteVpcRequestShape' => [
            'type' => 'structure',
            'members' => [
                'clientToken' => [ 'type' => 'string', 'locationName' => 'clientToken', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
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
        'ModifyVpcRequestShape' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'vpcId' => [ 'type' => 'string', 'locationName' => 'vpcId', ],
            ],
        ],
        'DeleteVpcResultShape' => [
            'type' => 'structure',
            'members' => [
                'success' => [ 'type' => 'boolean', 'locationName' => 'success', ],
            ],
        ],
        'DeleteVpcResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DeleteVpcResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeVpcResultShape' => [
            'type' => 'structure',
            'members' => [
                'vpc' =>  [ 'shape' => 'Vpc', ],
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
        'DescribeVpcsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeVpcsResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'CreateVpcResultShape' => [
            'type' => 'structure',
            'members' => [
                'vpcId' => [ 'type' => 'string', 'locationName' => 'vpcId', ],
            ],
        ],
    ],
];
