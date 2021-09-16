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
        'DescribeBandwidthPackages' => [
            'name' => 'DescribeBandwidthPackages',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/bandwidthPackages',
            ],
            'input' => [ 'shape' => 'DescribeBandwidthPackagesRequestShape', ],
            'output' => [ 'shape' => 'DescribeBandwidthPackagesResponseShape', ],
        ],
        'ApplyBandwidthPackages' => [
            'name' => 'ApplyBandwidthPackages',
            'http' => [
                'method' => 'PUT',
                'requestUri' => '/v1/regions/{regionId}/bandwidthPackages',
            ],
            'input' => [ 'shape' => 'ApplyBandwidthPackagesRequestShape', ],
            'output' => [ 'shape' => 'ApplyBandwidthPackagesResponseShape', ],
        ],
        'DescribeBandwidthPackage' => [
            'name' => 'DescribeBandwidthPackage',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/bandwidthPackages/{bandwidthPackageId}',
            ],
            'input' => [ 'shape' => 'DescribeBandwidthPackageRequestShape', ],
            'output' => [ 'shape' => 'DescribeBandwidthPackageResponseShape', ],
        ],
        'ModifyBandwidthPackage' => [
            'name' => 'ModifyBandwidthPackage',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/bandwidthPackages/{bandwidthPackageId}',
            ],
            'input' => [ 'shape' => 'ModifyBandwidthPackageRequestShape', ],
            'output' => [ 'shape' => 'ModifyBandwidthPackageResponseShape', ],
        ],
        'DeleteBandwidthPackage' => [
            'name' => 'DeleteBandwidthPackage',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/regions/{regionId}/bandwidthPackages/{bandwidthPackageId}',
            ],
            'input' => [ 'shape' => 'DeleteBandwidthPackageRequestShape', ],
            'output' => [ 'shape' => 'DeleteBandwidthPackageResponseShape', ],
        ],
        'ModifyBandwidthPackageBandwidth' => [
            'name' => 'ModifyBandwidthPackageBandwidth',
            'http' => [
                'method' => 'PUT',
                'requestUri' => '/v1/regions/{regionId}/bandwidthPackages/{bandwidthPackageId}:modifyBandwidthPackageBandwidth',
            ],
            'input' => [ 'shape' => 'ModifyBandwidthPackageBandwidthRequestShape', ],
            'output' => [ 'shape' => 'ModifyBandwidthPackageBandwidthResponseShape', ],
        ],
        'AddBandwidthPackageIp' => [
            'name' => 'AddBandwidthPackageIp',
            'http' => [
                'method' => 'PUT',
                'requestUri' => '/v1/regions/{regionId}/bandwidthPackages/{bandwidthPackageId}:addBandwidthPackageIp',
            ],
            'input' => [ 'shape' => 'AddBandwidthPackageIpRequestShape', ],
            'output' => [ 'shape' => 'AddBandwidthPackageIpResponseShape', ],
        ],
        'RemoveBandwidthPackageIp' => [
            'name' => 'RemoveBandwidthPackageIp',
            'http' => [
                'method' => 'PUT',
                'requestUri' => '/v1/regions/{regionId}/bandwidthPackages/{bandwidthPackageId}:removeBandwidthPackageIp',
            ],
            'input' => [ 'shape' => 'RemoveBandwidthPackageIpRequestShape', ],
            'output' => [ 'shape' => 'RemoveBandwidthPackageIpResponseShape', ],
        ],
        'DescribeBandwidthPackageStock' => [
            'name' => 'DescribeBandwidthPackageStock',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/bandwidthPackageStock',
            ],
            'input' => [ 'shape' => 'DescribeBandwidthPackageStockRequestShape', ],
            'output' => [ 'shape' => 'DescribeBandwidthPackageStockResponseShape', ],
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
        'DeleteelasticIp' => [
            'name' => 'DeleteelasticIp',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/regions/{regionId}/elasticIps/{elasticIpId}',
            ],
            'input' => [ 'shape' => 'DeleteelasticIpRequestShape', ],
            'output' => [ 'shape' => 'DeleteelasticIpResponseShape', ],
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
        'DeleteInstance' => [
            'name' => 'DeleteInstance',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}',
            ],
            'input' => [ 'shape' => 'DeleteInstanceRequestShape', ],
            'output' => [ 'shape' => 'DeleteInstanceResponseShape', ],
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
    ],
];
