<?php
// This file was auto-generated
return [
//    'version' => '',
    'metadata' =>
    [
//        'apiVersion' => '',
//        'endpointPrefix' => 'vpc',
        'protocol' => 'json',
//        'serviceFullName' => 'vpc',
//        'serviceId' => 'vpc',
    ],
    'operations' => [
        'DescribeElasticIps' => [
            'name' => 'DescribeElasticIps',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/elasticIps/',
            ],
            'input' => [ 'shape' => 'DescribeElasticIpsRequestShape', ],
            'output' => [ 'shape' => 'DescribeElasticIpsResponseShape', ],
        ],
        'CreateElasticIps' => [
            'name' => 'CreateElasticIps',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/elasticIps/',
            ],
            'input' => [ 'shape' => 'CreateElasticIpsRequestShape', ],
            'output' => [ 'shape' => 'CreateElasticIpsResponseShape', ],
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
        'ModifyElasticIp' => [
            'name' => 'ModifyElasticIp',
            'http' => [
                'method' => 'PATCH',
                'requestUri' => '/v1/regions/{regionId}/elasticIps/{elasticIpId}',
            ],
            'input' => [ 'shape' => 'ModifyElasticIpRequestShape', ],
            'output' => [ 'shape' => 'ModifyElasticIpResponseShape', ],
        ],
        'DeleteElasticIp' => [
            'name' => 'DeleteElasticIp',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/regions/{regionId}/elasticIps/{elasticIpId}',
            ],
            'input' => [ 'shape' => 'DeleteElasticIpRequestShape', ],
            'output' => [ 'shape' => 'DeleteElasticIpResponseShape', ],
        ],
        'DescribeNetworkAcls' => [
            'name' => 'DescribeNetworkAcls',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/networkAcls/',
            ],
            'input' => [ 'shape' => 'DescribeNetworkAclsRequestShape', ],
            'output' => [ 'shape' => 'DescribeNetworkAclsResponseShape', ],
        ],
        'CreateNetworkAcl' => [
            'name' => 'CreateNetworkAcl',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/networkAcls/',
            ],
            'input' => [ 'shape' => 'CreateNetworkAclRequestShape', ],
            'output' => [ 'shape' => 'CreateNetworkAclResponseShape', ],
        ],
        'DescribeNetworkAcl' => [
            'name' => 'DescribeNetworkAcl',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/networkAcls/{networkAclId}',
            ],
            'input' => [ 'shape' => 'DescribeNetworkAclRequestShape', ],
            'output' => [ 'shape' => 'DescribeNetworkAclResponseShape', ],
        ],
        'ModifyNetworkAcl' => [
            'name' => 'ModifyNetworkAcl',
            'http' => [
                'method' => 'PATCH',
                'requestUri' => '/v1/regions/{regionId}/networkAcls/{networkAclId}',
            ],
            'input' => [ 'shape' => 'ModifyNetworkAclRequestShape', ],
            'output' => [ 'shape' => 'ModifyNetworkAclResponseShape', ],
        ],
        'DeleteNetworkAcl' => [
            'name' => 'DeleteNetworkAcl',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/regions/{regionId}/networkAcls/{networkAclId}',
            ],
            'input' => [ 'shape' => 'DeleteNetworkAclRequestShape', ],
            'output' => [ 'shape' => 'DeleteNetworkAclResponseShape', ],
        ],
        'AssociateNetworkAcl' => [
            'name' => 'AssociateNetworkAcl',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/networkAcls/{networkAclId}:associateNetworkAcl',
            ],
            'input' => [ 'shape' => 'AssociateNetworkAclRequestShape', ],
            'output' => [ 'shape' => 'AssociateNetworkAclResponseShape', ],
        ],
        'DisassociateNetworkAcl' => [
            'name' => 'DisassociateNetworkAcl',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/networkAcls/{networkAclId}:disassociateNetworkAcl',
            ],
            'input' => [ 'shape' => 'DisassociateNetworkAclRequestShape', ],
            'output' => [ 'shape' => 'DisassociateNetworkAclResponseShape', ],
        ],
        'AddNetworkAclRules' => [
            'name' => 'AddNetworkAclRules',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/networkAcls/{networkAclId}:addNetworkAclRules',
            ],
            'input' => [ 'shape' => 'AddNetworkAclRulesRequestShape', ],
            'output' => [ 'shape' => 'AddNetworkAclRulesResponseShape', ],
        ],
        'RemoveNetworkAclRules' => [
            'name' => 'RemoveNetworkAclRules',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/networkAcls/{networkAclId}:removeNetworkAclRules',
            ],
            'input' => [ 'shape' => 'RemoveNetworkAclRulesRequestShape', ],
            'output' => [ 'shape' => 'RemoveNetworkAclRulesResponseShape', ],
        ],
        'ModifyNetworkAclRules' => [
            'name' => 'ModifyNetworkAclRules',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/networkAcls/{networkAclId}:modifyNetworkAclRules',
            ],
            'input' => [ 'shape' => 'ModifyNetworkAclRulesRequestShape', ],
            'output' => [ 'shape' => 'ModifyNetworkAclRulesResponseShape', ],
        ],
        'DescribeNetworkInterfaces' => [
            'name' => 'DescribeNetworkInterfaces',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/networkInterfaces/',
            ],
            'input' => [ 'shape' => 'DescribeNetworkInterfacesRequestShape', ],
            'output' => [ 'shape' => 'DescribeNetworkInterfacesResponseShape', ],
        ],
        'CreateNetworkInterface' => [
            'name' => 'CreateNetworkInterface',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/networkInterfaces/',
            ],
            'input' => [ 'shape' => 'CreateNetworkInterfaceRequestShape', ],
            'output' => [ 'shape' => 'CreateNetworkInterfaceResponseShape', ],
        ],
        'DescribeNetworkInterface' => [
            'name' => 'DescribeNetworkInterface',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/networkInterfaces/{networkInterfaceId}',
            ],
            'input' => [ 'shape' => 'DescribeNetworkInterfaceRequestShape', ],
            'output' => [ 'shape' => 'DescribeNetworkInterfaceResponseShape', ],
        ],
        'ModifyNetworkInterface' => [
            'name' => 'ModifyNetworkInterface',
            'http' => [
                'method' => 'PATCH',
                'requestUri' => '/v1/regions/{regionId}/networkInterfaces/{networkInterfaceId}',
            ],
            'input' => [ 'shape' => 'ModifyNetworkInterfaceRequestShape', ],
            'output' => [ 'shape' => 'ModifyNetworkInterfaceResponseShape', ],
        ],
        'DeleteNetworkInterface' => [
            'name' => 'DeleteNetworkInterface',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/regions/{regionId}/networkInterfaces/{networkInterfaceId}',
            ],
            'input' => [ 'shape' => 'DeleteNetworkInterfaceRequestShape', ],
            'output' => [ 'shape' => 'DeleteNetworkInterfaceResponseShape', ],
        ],
        'AssociateElasticIp' => [
            'name' => 'AssociateElasticIp',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/networkInterfaces/{networkInterfaceId}:associateElasticIp',
            ],
            'input' => [ 'shape' => 'AssociateElasticIpRequestShape', ],
            'output' => [ 'shape' => 'AssociateElasticIpResponseShape', ],
        ],
        'DisassociateElasticIp' => [
            'name' => 'DisassociateElasticIp',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/networkInterfaces/{networkInterfaceId}:disassociateElasticIp',
            ],
            'input' => [ 'shape' => 'DisassociateElasticIpRequestShape', ],
            'output' => [ 'shape' => 'DisassociateElasticIpResponseShape', ],
        ],
        'AssignSecondaryIps' => [
            'name' => 'AssignSecondaryIps',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/networkInterfaces/{networkInterfaceId}:assignSecondaryIps',
            ],
            'input' => [ 'shape' => 'AssignSecondaryIpsRequestShape', ],
            'output' => [ 'shape' => 'AssignSecondaryIpsResponseShape', ],
        ],
        'UnassignSecondaryIps' => [
            'name' => 'UnassignSecondaryIps',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/networkInterfaces/{networkInterfaceId}:unassignSecondaryIps',
            ],
            'input' => [ 'shape' => 'UnassignSecondaryIpsRequestShape', ],
            'output' => [ 'shape' => 'UnassignSecondaryIpsResponseShape', ],
        ],
        'DescribeNetworkSecurityGroups' => [
            'name' => 'DescribeNetworkSecurityGroups',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/networkSecurityGroups/',
            ],
            'input' => [ 'shape' => 'DescribeNetworkSecurityGroupsRequestShape', ],
            'output' => [ 'shape' => 'DescribeNetworkSecurityGroupsResponseShape', ],
        ],
        'CreateNetworkSecurityGroup' => [
            'name' => 'CreateNetworkSecurityGroup',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/networkSecurityGroups/',
            ],
            'input' => [ 'shape' => 'CreateNetworkSecurityGroupRequestShape', ],
            'output' => [ 'shape' => 'CreateNetworkSecurityGroupResponseShape', ],
        ],
        'DescribeNetworkSecurityGroup' => [
            'name' => 'DescribeNetworkSecurityGroup',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/networkSecurityGroups/{networkSecurityGroupId}',
            ],
            'input' => [ 'shape' => 'DescribeNetworkSecurityGroupRequestShape', ],
            'output' => [ 'shape' => 'DescribeNetworkSecurityGroupResponseShape', ],
        ],
        'ModifyNetworkSecurityGroup' => [
            'name' => 'ModifyNetworkSecurityGroup',
            'http' => [
                'method' => 'PATCH',
                'requestUri' => '/v1/regions/{regionId}/networkSecurityGroups/{networkSecurityGroupId}',
            ],
            'input' => [ 'shape' => 'ModifyNetworkSecurityGroupRequestShape', ],
            'output' => [ 'shape' => 'ModifyNetworkSecurityGroupResponseShape', ],
        ],
        'DeleteNetworkSecurityGroup' => [
            'name' => 'DeleteNetworkSecurityGroup',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/regions/{regionId}/networkSecurityGroups/{networkSecurityGroupId}',
            ],
            'input' => [ 'shape' => 'DeleteNetworkSecurityGroupRequestShape', ],
            'output' => [ 'shape' => 'DeleteNetworkSecurityGroupResponseShape', ],
        ],
        'AddNetworkSecurityGroupRules' => [
            'name' => 'AddNetworkSecurityGroupRules',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/networkSecurityGroups/{networkSecurityGroupId}:addNetworkSecurityGroupRules',
            ],
            'input' => [ 'shape' => 'AddNetworkSecurityGroupRulesRequestShape', ],
            'output' => [ 'shape' => 'AddNetworkSecurityGroupRulesResponseShape', ],
        ],
        'RemoveNetworkSecurityGroupRules' => [
            'name' => 'RemoveNetworkSecurityGroupRules',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/networkSecurityGroups/{networkSecurityGroupId}:removeNetworkSecurityGroupRules',
            ],
            'input' => [ 'shape' => 'RemoveNetworkSecurityGroupRulesRequestShape', ],
            'output' => [ 'shape' => 'RemoveNetworkSecurityGroupRulesResponseShape', ],
        ],
        'ModifyNetworkSecurityGroupRules' => [
            'name' => 'ModifyNetworkSecurityGroupRules',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/networkSecurityGroups/{networkSecurityGroupId}:modifyNetworkSecurityGroupRules',
            ],
            'input' => [ 'shape' => 'ModifyNetworkSecurityGroupRulesRequestShape', ],
            'output' => [ 'shape' => 'ModifyNetworkSecurityGroupRulesResponseShape', ],
        ],
        'DescribeQuota' => [
            'name' => 'DescribeQuota',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/quotas/',
            ],
            'input' => [ 'shape' => 'DescribeQuotaRequestShape', ],
            'output' => [ 'shape' => 'DescribeQuotaResponseShape', ],
        ],
        'DescribeRouteTables' => [
            'name' => 'DescribeRouteTables',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/routeTables/',
            ],
            'input' => [ 'shape' => 'DescribeRouteTablesRequestShape', ],
            'output' => [ 'shape' => 'DescribeRouteTablesResponseShape', ],
        ],
        'CreateRouteTable' => [
            'name' => 'CreateRouteTable',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/routeTables/',
            ],
            'input' => [ 'shape' => 'CreateRouteTableRequestShape', ],
            'output' => [ 'shape' => 'CreateRouteTableResponseShape', ],
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
        'ModifyRouteTable' => [
            'name' => 'ModifyRouteTable',
            'http' => [
                'method' => 'PATCH',
                'requestUri' => '/v1/regions/{regionId}/routeTables/{routeTableId}',
            ],
            'input' => [ 'shape' => 'ModifyRouteTableRequestShape', ],
            'output' => [ 'shape' => 'ModifyRouteTableResponseShape', ],
        ],
        'DeleteRouteTable' => [
            'name' => 'DeleteRouteTable',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/regions/{regionId}/routeTables/{routeTableId}',
            ],
            'input' => [ 'shape' => 'DeleteRouteTableRequestShape', ],
            'output' => [ 'shape' => 'DeleteRouteTableResponseShape', ],
        ],
        'AddRouteTableRules' => [
            'name' => 'AddRouteTableRules',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/routeTables/{routeTableId}:addRouteTableRules',
            ],
            'input' => [ 'shape' => 'AddRouteTableRulesRequestShape', ],
            'output' => [ 'shape' => 'AddRouteTableRulesResponseShape', ],
        ],
        'RemoveRouteTableRules' => [
            'name' => 'RemoveRouteTableRules',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/routeTables/{routeTableId}:removeRouteTableRules',
            ],
            'input' => [ 'shape' => 'RemoveRouteTableRulesRequestShape', ],
            'output' => [ 'shape' => 'RemoveRouteTableRulesResponseShape', ],
        ],
        'ModifyRouteTableRules' => [
            'name' => 'ModifyRouteTableRules',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/routeTables/{routeTableId}:modifyRouteTableRules',
            ],
            'input' => [ 'shape' => 'ModifyRouteTableRulesRequestShape', ],
            'output' => [ 'shape' => 'ModifyRouteTableRulesResponseShape', ],
        ],
        'AssociateRouteTable' => [
            'name' => 'AssociateRouteTable',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/routeTables/{routeTableId}:associateRouteTable',
            ],
            'input' => [ 'shape' => 'AssociateRouteTableRequestShape', ],
            'output' => [ 'shape' => 'AssociateRouteTableResponseShape', ],
        ],
        'DisassociateRouteTable' => [
            'name' => 'DisassociateRouteTable',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/routeTables/{routeTableId}:disassociateRouteTable',
            ],
            'input' => [ 'shape' => 'DisassociateRouteTableRequestShape', ],
            'output' => [ 'shape' => 'DisassociateRouteTableResponseShape', ],
        ],
        'DescribeEdgeIpProviders' => [
            'name' => 'DescribeEdgeIpProviders',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/edgeIpProviders/',
            ],
            'input' => [ 'shape' => 'DescribeEdgeIpProvidersRequestShape', ],
            'output' => [ 'shape' => 'DescribeEdgeIpProvidersResponseShape', ],
        ],
        'DescribeSubnets' => [
            'name' => 'DescribeSubnets',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/subnets/',
            ],
            'input' => [ 'shape' => 'DescribeSubnetsRequestShape', ],
            'output' => [ 'shape' => 'DescribeSubnetsResponseShape', ],
        ],
        'CreateSubnet' => [
            'name' => 'CreateSubnet',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/subnets/',
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
                'method' => 'PATCH',
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
        'DescribeVpcs' => [
            'name' => 'DescribeVpcs',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/vpcs/',
            ],
            'input' => [ 'shape' => 'DescribeVpcsRequestShape', ],
            'output' => [ 'shape' => 'DescribeVpcsResponseShape', ],
        ],
        'CreateVpc' => [
            'name' => 'CreateVpc',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/vpcs/',
            ],
            'input' => [ 'shape' => 'CreateVpcRequestShape', ],
            'output' => [ 'shape' => 'CreateVpcResponseShape', ],
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
                'method' => 'PATCH',
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
        'DescribeVpcPeerings' => [
            'name' => 'DescribeVpcPeerings',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/vpcPeerings/',
            ],
            'input' => [ 'shape' => 'DescribeVpcPeeringsRequestShape', ],
            'output' => [ 'shape' => 'DescribeVpcPeeringsResponseShape', ],
        ],
        'CreateVpcPeering' => [
            'name' => 'CreateVpcPeering',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/vpcPeerings/',
            ],
            'input' => [ 'shape' => 'CreateVpcPeeringRequestShape', ],
            'output' => [ 'shape' => 'CreateVpcPeeringResponseShape', ],
        ],
        'DescribeVpcPeering' => [
            'name' => 'DescribeVpcPeering',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/vpcPeerings/{vpcPeeringId}',
            ],
            'input' => [ 'shape' => 'DescribeVpcPeeringRequestShape', ],
            'output' => [ 'shape' => 'DescribeVpcPeeringResponseShape', ],
        ],
        'ModifyVpcPeering' => [
            'name' => 'ModifyVpcPeering',
            'http' => [
                'method' => 'PUT',
                'requestUri' => '/v1/regions/{regionId}/vpcPeerings/{vpcPeeringId}',
            ],
            'input' => [ 'shape' => 'ModifyVpcPeeringRequestShape', ],
            'output' => [ 'shape' => 'ModifyVpcPeeringResponseShape', ],
        ],
        'DeleteVpcPeering' => [
            'name' => 'DeleteVpcPeering',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/regions/{regionId}/vpcPeerings/{vpcPeeringId}',
            ],
            'input' => [ 'shape' => 'DeleteVpcPeeringRequestShape', ],
            'output' => [ 'shape' => 'DeleteVpcPeeringResponseShape', ],
        ],
    ],
    'shapes' => [
    ],
];
