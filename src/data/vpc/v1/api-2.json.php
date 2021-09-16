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
        'AddNetworkAclRuleSpec' => [
            'type' => 'structure',
            'members' => [
                'protocol' => [ 'type' => 'string', 'locationName' => 'protocol', ],
                'fromPort' => [ 'type' => 'integer', 'locationName' => 'fromPort', ],
                'toPort' => [ 'type' => 'integer', 'locationName' => 'toPort', ],
                'direction' => [ 'type' => 'string', 'locationName' => 'direction', ],
                'addressPrefix' => [ 'type' => 'string', 'locationName' => 'addressPrefix', ],
                'ruleAction' => [ 'type' => 'string', 'locationName' => 'ruleAction', ],
                'priority' => [ 'type' => 'integer', 'locationName' => 'priority', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
            ],
        ],
        'AddNetworkAclRulesSpec' => [
            'type' => 'structure',
            'members' => [
                'networkAclRuleSpecs' => [ 'type' => 'list', 'member' => [ 'shape' => 'AddNetworkAclRuleSpec', ], ],
            ],
        ],
        'AddSecurityGroupRules' => [
            'type' => 'structure',
            'members' => [
                'protocol' => [ 'type' => 'double', 'locationName' => 'protocol', ],
                'direction' => [ 'type' => 'double', 'locationName' => 'direction', ],
                'addressPrefix' => [ 'type' => 'string', 'locationName' => 'addressPrefix', ],
                'fromPort' => [ 'type' => 'double', 'locationName' => 'fromPort', ],
                'toPort' => [ 'type' => 'double', 'locationName' => 'toPort', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
            ],
        ],
        'AddNetworkSecurityGroupRulesSpec' => [
            'type' => 'structure',
            'members' => [
                'networkSecurityGroupRuleSpecs' => [ 'type' => 'list', 'member' => [ 'shape' => 'AddSecurityGroupRules', ], ],
            ],
        ],
        'AddRoutePropagationSpec' => [
            'type' => 'structure',
            'members' => [
                'propagationCidrs' => [ 'type' => 'string', 'locationName' => 'propagationCidrs', ],
                'bgwId' => [ 'type' => 'string', 'locationName' => 'bgwId', ],
            ],
        ],
        'AddRouteTableRules' => [
            'type' => 'structure',
            'members' => [
                'nextHopType' => [ 'type' => 'string', 'locationName' => 'nextHopType', ],
                'nextHopId' => [ 'type' => 'string', 'locationName' => 'nextHopId', ],
                'addressPrefix' => [ 'type' => 'string', 'locationName' => 'addressPrefix', ],
                'priority' => [ 'type' => 'double', 'locationName' => 'priority', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
            ],
        ],
        'AddRouteTableRulesSpec' => [
            'type' => 'structure',
            'members' => [
                'routeTableRuleSpecs' => [ 'type' => 'list', 'member' => [ 'shape' => 'AddRouteTableRules', ], ],
            ],
        ],
        'AssignSecondaryIpsSpec' => [
            'type' => 'structure',
            'members' => [
                'force' => [ 'type' => 'boolean', 'locationName' => 'force', ],
                'secondaryIps' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'secondaryIpCount' => [ 'type' => 'double', 'locationName' => 'secondaryIpCount', ],
            ],
        ],
        'AssociateElasticIpSpec' => [
            'type' => 'structure',
            'members' => [
                'elasticIpId' => [ 'type' => 'string', 'locationName' => 'elasticIpId', ],
                'privateIpAddress' => [ 'type' => 'string', 'locationName' => 'privateIpAddress', ],
                'elasticIpAddress' => [ 'type' => 'string', 'locationName' => 'elasticIpAddress', ],
            ],
        ],
        'AssociateRouteTableSpec' => [
            'type' => 'structure',
            'members' => [
                'subnetIds' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'PublicIp' => [
            'type' => 'structure',
            'members' => [
                'publicIpId' => [ 'type' => 'string', 'locationName' => 'publicIpId', ],
                'publicIpAddress' => [ 'type' => 'string', 'locationName' => 'publicIpAddress', ],
                'ipCharge' =>  [ 'shape' => 'Charge', ],
            ],
        ],
        'AzIp' => [
            'type' => 'structure',
            'members' => [
                'privateIpAddress' => [ 'type' => 'string', 'locationName' => 'privateIpAddress', ],
                'publicIps' => [ 'type' => 'list', 'member' => [ 'shape' => 'PublicIp', ], ],
                'az' => [ 'type' => 'string', 'locationName' => 'az', ],
                'bandwidthMbps' => [ 'type' => 'integer', 'locationName' => 'bandwidthMbps', ],
            ],
        ],
        'AzIpSpec' => [
            'type' => 'structure',
            'members' => [
                'provider' => [ 'type' => 'string', 'locationName' => 'provider', ],
                'az' => [ 'type' => 'string', 'locationName' => 'az', ],
                'bandwidthMbps' => [ 'type' => 'integer', 'locationName' => 'bandwidthMbps', ],
                'ipCharge' =>  [ 'shape' => 'ChargeSpec', ],
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
        'CreateElasticIpSpec' => [
            'type' => 'structure',
            'members' => [
                'maxCount' => [ 'type' => 'integer', 'locationName' => 'maxCount', ],
                'elasticIpAddress' => [ 'type' => 'string', 'locationName' => 'elasticIpAddress', ],
                'elasticIpSpec' =>  [ 'shape' => 'ElasticIpSpec', ],
                'userTags' => [ 'type' => 'list', 'member' => [ 'shape' => 'Tag', ], ],
                'ipType' => [ 'type' => 'string', 'locationName' => 'ipType', ],
            ],
        ],
        'CreateVpcPeeringSpec' => [
            'type' => 'structure',
            'members' => [
                'vpcPeeringName' => [ 'type' => 'string', 'locationName' => 'vpcPeeringName', ],
                'vpcId' => [ 'type' => 'string', 'locationName' => 'vpcId', ],
                'remoteVpcId' => [ 'type' => 'string', 'locationName' => 'remoteVpcId', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
            ],
        ],
        'DeletePropagationSpec' => [
            'type' => 'structure',
            'members' => [
                'routePropagationId' => [ 'type' => 'string', 'locationName' => 'routePropagationId', ],
            ],
        ],
        'DisassociateElasticIpSpec' => [
            'type' => 'structure',
            'members' => [
                'elasticIpId' => [ 'type' => 'string', 'locationName' => 'elasticIpId', ],
                'elasticIpAddress' => [ 'type' => 'string', 'locationName' => 'elasticIpAddress', ],
            ],
        ],
        'DisassociateRouteTableSpec' => [
            'type' => 'structure',
            'members' => [
                'subnetId' => [ 'type' => 'string', 'locationName' => 'subnetId', ],
            ],
        ],
        'EdgeIpProvider' => [
            'type' => 'structure',
            'members' => [
                'provider' => [ 'type' => 'string', 'locationName' => 'provider', ],
                'pointOfAccess' => [ 'type' => 'string', 'locationName' => 'pointOfAccess', ],
                'associationScope' => [ 'type' => 'string', 'locationName' => 'associationScope', ],
                'serviceType' => [ 'type' => 'string', 'locationName' => 'serviceType', ],
                'az' => [ 'type' => 'string', 'locationName' => 'az', ],
            ],
        ],
        'ElasticIp' => [
            'type' => 'structure',
            'members' => [
                'elasticIpId' => [ 'type' => 'string', 'locationName' => 'elasticIpId', ],
                'elasticIpAddress' => [ 'type' => 'string', 'locationName' => 'elasticIpAddress', ],
                'bandwidthMbps' => [ 'type' => 'integer', 'locationName' => 'bandwidthMbps', ],
                'provider' => [ 'type' => 'string', 'locationName' => 'provider', ],
                'privateIpAddress' => [ 'type' => 'string', 'locationName' => 'privateIpAddress', ],
                'networkInterfaceId' => [ 'type' => 'string', 'locationName' => 'networkInterfaceId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'instanceType' => [ 'type' => 'string', 'locationName' => 'instanceType', ],
                'charge' =>  [ 'shape' => 'Charge', ],
                'createdTime' => [ 'type' => 'string', 'locationName' => 'createdTime', ],
                'az' => [ 'type' => 'string', 'locationName' => 'az', ],
                'tags' => [ 'type' => 'list', 'member' => [ 'shape' => 'Tag', ], ],
                'ipType' => [ 'type' => 'string', 'locationName' => 'ipType', ],
            ],
        ],
        'ModifyElasticIpSpec' => [
            'type' => 'structure',
            'members' => [
                'bandwidthMbps' => [ 'type' => 'integer', 'locationName' => 'bandwidthMbps', ],
            ],
        ],
        'ModifyNatGatewaySpec' => [
            'type' => 'structure',
            'members' => [
                'natGatewayName' => [ 'type' => 'string', 'locationName' => 'natGatewayName', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'bandwidthMbps' => [ 'type' => 'integer', 'locationName' => 'bandwidthMbps', ],
                'natGatewaySpec' => [ 'type' => 'string', 'locationName' => 'natGatewaySpec', ],
            ],
        ],
        'ModifyNetworkAclRuleSpec' => [
            'type' => 'structure',
            'members' => [
                'ruleId' => [ 'type' => 'string', 'locationName' => 'ruleId', ],
                'protocol' => [ 'type' => 'string', 'locationName' => 'protocol', ],
                'fromPort' => [ 'type' => 'integer', 'locationName' => 'fromPort', ],
                'toPort' => [ 'type' => 'integer', 'locationName' => 'toPort', ],
                'addressPrefix' => [ 'type' => 'string', 'locationName' => 'addressPrefix', ],
                'ruleAction' => [ 'type' => 'string', 'locationName' => 'ruleAction', ],
                'priority' => [ 'type' => 'integer', 'locationName' => 'priority', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
            ],
        ],
        'ModifyNetworkAclRulesSpec' => [
            'type' => 'structure',
            'members' => [
                'modifyNetworkAclRuleSpecs' => [ 'type' => 'list', 'member' => [ 'shape' => 'ModifyNetworkAclRuleSpec', ], ],
            ],
        ],
        'ModifyNetworkAclSpec' => [
            'type' => 'structure',
            'members' => [
                'networkAclName' => [ 'type' => 'string', 'locationName' => 'networkAclName', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
            ],
        ],
        'ModifyNetworkInterfaceSpec' => [
            'type' => 'structure',
            'members' => [
                'networkInterfaceName' => [ 'type' => 'string', 'locationName' => 'networkInterfaceName', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'securityGroups' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'ModifySecurityGroupRuleSpec' => [
            'type' => 'structure',
            'members' => [
                'modifySecurityGroupRuleSpecs' => [ 'type' => 'list', 'member' => [ 'shape' => 'ModifySecurityGroupRules', ], ],
            ],
        ],
        'ModifySecurityGroupRules' => [
            'type' => 'structure',
            'members' => [
                'ruleId' => [ 'type' => 'string', 'locationName' => 'ruleId', ],
                'protocol' => [ 'type' => 'double', 'locationName' => 'protocol', ],
                'fromPort' => [ 'type' => 'integer', 'locationName' => 'fromPort', ],
                'toPort' => [ 'type' => 'integer', 'locationName' => 'toPort', ],
                'addressPrefix' => [ 'type' => 'string', 'locationName' => 'addressPrefix', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
            ],
        ],
        'ModifyNetworkSecurityGroupSpec' => [
            'type' => 'structure',
            'members' => [
                'networkSecurityGroupName' => [ 'type' => 'string', 'locationName' => 'networkSecurityGroupName', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
            ],
        ],
        'ModifyQuotaSpec' => [
            'type' => 'structure',
            'members' => [
                'type' => [ 'type' => 'string', 'locationName' => 'type', ],
                'parentResourceId' => [ 'type' => 'string', 'locationName' => 'parentResourceId', ],
                'maxLimit' => [ 'type' => 'integer', 'locationName' => 'maxLimit', ],
            ],
        ],
        'ModifyRoutePropagationSpec' => [
            'type' => 'structure',
            'members' => [
                'routePropagationId' => [ 'type' => 'string', 'locationName' => 'routePropagationId', ],
                'propagationCidrs' => [ 'type' => 'string', 'locationName' => 'propagationCidrs', ],
                'bgwId' => [ 'type' => 'string', 'locationName' => 'bgwId', ],
            ],
        ],
        'ModifyRouteTableRules' => [
            'type' => 'structure',
            'members' => [
                'ruleId' => [ 'type' => 'string', 'locationName' => 'ruleId', ],
                'priority' => [ 'type' => 'double', 'locationName' => 'priority', ],
                'nextHopType' => [ 'type' => 'string', 'locationName' => 'nextHopType', ],
                'nextHopId' => [ 'type' => 'string', 'locationName' => 'nextHopId', ],
                'addressPrefix' => [ 'type' => 'string', 'locationName' => 'addressPrefix', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
            ],
        ],
        'ModifyRouteTableRulesSpec' => [
            'type' => 'structure',
            'members' => [
                'modifyRouteTableRuleSpecs' => [ 'type' => 'list', 'member' => [ 'shape' => 'ModifyRouteTableRules', ], ],
            ],
        ],
        'ModifyRouteTableSpec' => [
            'type' => 'structure',
            'members' => [
                'routeTableName' => [ 'type' => 'string', 'locationName' => 'routeTableName', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
            ],
        ],
        'ModifySubnetSpec' => [
            'type' => 'structure',
            'members' => [
                'subnetName' => [ 'type' => 'string', 'locationName' => 'subnetName', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
            ],
        ],
        'ModifyVpcPeeringSpec' => [
            'type' => 'structure',
            'members' => [
                'vpcPeeringName' => [ 'type' => 'string', 'locationName' => 'vpcPeeringName', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
            ],
        ],
        'ModifyVpcSpec' => [
            'type' => 'structure',
            'members' => [
                'vpcName' => [ 'type' => 'string', 'locationName' => 'vpcName', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
            ],
        ],
        'NatGateway' => [
            'type' => 'structure',
            'members' => [
                'natGatewayId' => [ 'type' => 'string', 'locationName' => 'natGatewayId', ],
                'natGatewayName' => [ 'type' => 'string', 'locationName' => 'natGatewayName', ],
                'natGatewaySpec' => [ 'type' => 'string', 'locationName' => 'natGatewaySpec', ],
                'state' =>  [ 'shape' => 'NatGatewayState', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'natGatewayCharge' =>  [ 'shape' => 'Charge', ],
                'azs' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'vpcId' => [ 'type' => 'string', 'locationName' => 'vpcId', ],
                'subnetId' => [ 'type' => 'string', 'locationName' => 'subnetId', ],
                'azIp' => [ 'type' => 'list', 'member' => [ 'shape' => 'AzIp', ], ],
                'createdTime' => [ 'type' => 'string', 'locationName' => 'createdTime', ],
            ],
        ],
        'NatGatewayState' => [
            'type' => 'structure',
            'members' => [
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'adminStatus' => [ 'type' => 'string', 'locationName' => 'adminStatus', ],
            ],
        ],
        'NatGatewaySpec' => [
            'type' => 'structure',
            'members' => [
                'natGatewayName' => [ 'type' => 'string', 'locationName' => 'natGatewayName', ],
                'natGatewaySpec' => [ 'type' => 'string', 'locationName' => 'natGatewaySpec', ],
                'vpcId' => [ 'type' => 'string', 'locationName' => 'vpcId', ],
                'subnetId' => [ 'type' => 'string', 'locationName' => 'subnetId', ],
                'azIpSpecs' => [ 'type' => 'list', 'member' => [ 'shape' => 'AzIpSpec', ], ],
                'natGatewayCharge' =>  [ 'shape' => 'ChargeSpec', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
            ],
        ],
        'NetworkAclRule' => [
            'type' => 'structure',
            'members' => [
                'ruleId' => [ 'type' => 'string', 'locationName' => 'ruleId', ],
                'protocol' => [ 'type' => 'string', 'locationName' => 'protocol', ],
                'fromPort' => [ 'type' => 'integer', 'locationName' => 'fromPort', ],
                'toPort' => [ 'type' => 'integer', 'locationName' => 'toPort', ],
                'direction' => [ 'type' => 'string', 'locationName' => 'direction', ],
                'addressPrefix' => [ 'type' => 'string', 'locationName' => 'addressPrefix', ],
                'ruleAction' => [ 'type' => 'string', 'locationName' => 'ruleAction', ],
                'priority' => [ 'type' => 'integer', 'locationName' => 'priority', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'createdTime' => [ 'type' => 'string', 'locationName' => 'createdTime', ],
                'ruleType' => [ 'type' => 'string', 'locationName' => 'ruleType', ],
            ],
        ],
        'NetworkAcl' => [
            'type' => 'structure',
            'members' => [
                'networkAclId' => [ 'type' => 'string', 'locationName' => 'networkAclId', ],
                'networkAclName' => [ 'type' => 'string', 'locationName' => 'networkAclName', ],
                'vpcId' => [ 'type' => 'string', 'locationName' => 'vpcId', ],
                'networkAclRules' => [ 'type' => 'list', 'member' => [ 'shape' => 'NetworkAclRule', ], ],
                'subnetIds' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'createdTime' => [ 'type' => 'string', 'locationName' => 'createdTime', ],
            ],
        ],
        'NetworkAclSpec' => [
            'type' => 'structure',
            'members' => [
                'vpcId' => [ 'type' => 'string', 'locationName' => 'vpcId', ],
                'networkAclName' => [ 'type' => 'string', 'locationName' => 'networkAclName', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
            ],
        ],
        'NetworkInterface' => [
            'type' => 'structure',
            'members' => [
                'networkInterfaceName' => [ 'type' => 'string', 'locationName' => 'networkInterfaceName', ],
                'networkInterfaceId' => [ 'type' => 'string', 'locationName' => 'networkInterfaceId', ],
                'az' => [ 'type' => 'string', 'locationName' => 'az', ],
                'role' => [ 'type' => 'string', 'locationName' => 'role', ],
                'macAddress' => [ 'type' => 'string', 'locationName' => 'macAddress', ],
                'vpcId' => [ 'type' => 'string', 'locationName' => 'vpcId', ],
                'subnetId' => [ 'type' => 'string', 'locationName' => 'subnetId', ],
                'networkSecurityGroupIds' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'sanityCheck' => [ 'type' => 'integer', 'locationName' => 'sanityCheck', ],
                'primaryIp' =>  [ 'shape' => 'NetworkInterfacePrivateIp', ],
                'secondaryIps' => [ 'type' => 'list', 'member' => [ 'shape' => 'NetworkInterfacePrivateIp', ], ],
                'instanceType' => [ 'type' => 'string', 'locationName' => 'instanceType', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'instanceOwnerId' => [ 'type' => 'string', 'locationName' => 'instanceOwnerId', ],
                'deviceIndex' => [ 'type' => 'integer', 'locationName' => 'deviceIndex', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'attachmentStatus' => [ 'type' => 'string', 'locationName' => 'attachmentStatus', ],
                'networkInterfaceStatus' => [ 'type' => 'string', 'locationName' => 'networkInterfaceStatus', ],
                'createdTime' => [ 'type' => 'string', 'locationName' => 'createdTime', ],
            ],
        ],
        'NetworkInterfacePrivateIp' => [
            'type' => 'structure',
            'members' => [
                'privateIpAddress' => [ 'type' => 'string', 'locationName' => 'privateIpAddress', ],
                'elasticIpId' => [ 'type' => 'string', 'locationName' => 'elasticIpId', ],
                'elasticIpAddress' => [ 'type' => 'string', 'locationName' => 'elasticIpAddress', ],
            ],
        ],
        'NetworkInterfacePermission' => [
            'type' => 'structure',
            'members' => [
                'networkInterfacePermissionId' => [ 'type' => 'string', 'locationName' => 'networkInterfacePermissionId', ],
                'networkInterfaceOwner' => [ 'type' => 'string', 'locationName' => 'networkInterfaceOwner', ],
                'trustUser' => [ 'type' => 'string', 'locationName' => 'trustUser', ],
                'networkInterfaceId' => [ 'type' => 'string', 'locationName' => 'networkInterfaceId', ],
                'policy' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'createdTime' => [ 'type' => 'string', 'locationName' => 'createdTime', ],
            ],
        ],
        'NetworkInterfacePermissionSpec' => [
            'type' => 'structure',
            'members' => [
                'networkInterfaceId' => [ 'type' => 'string', 'locationName' => 'networkInterfaceId', ],
                'trustUser' => [ 'type' => 'string', 'locationName' => 'trustUser', ],
                'policy' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'NetworkInterfaceSpec' => [
            'type' => 'structure',
            'members' => [
                'subnetId' => [ 'type' => 'string', 'locationName' => 'subnetId', ],
                'az' => [ 'type' => 'string', 'locationName' => 'az', ],
                'networkInterfaceName' => [ 'type' => 'string', 'locationName' => 'networkInterfaceName', ],
                'primaryIpAddress' => [ 'type' => 'string', 'locationName' => 'primaryIpAddress', ],
                'secondaryIpAddresses' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'secondaryIpCount' => [ 'type' => 'integer', 'locationName' => 'secondaryIpCount', ],
                'securityGroups' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'sanityCheck' => [ 'type' => 'integer', 'locationName' => 'sanityCheck', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
            ],
        ],
        'SecurityGroupRule' => [
            'type' => 'structure',
            'members' => [
                'ruleId' => [ 'type' => 'string', 'locationName' => 'ruleId', ],
                'direction' => [ 'type' => 'double', 'locationName' => 'direction', ],
                'protocol' => [ 'type' => 'double', 'locationName' => 'protocol', ],
                'addressPrefix' => [ 'type' => 'string', 'locationName' => 'addressPrefix', ],
                'ipVersion' => [ 'type' => 'double', 'locationName' => 'ipVersion', ],
                'fromPort' => [ 'type' => 'double', 'locationName' => 'fromPort', ],
                'toPort' => [ 'type' => 'double', 'locationName' => 'toPort', ],
                'createdTime' => [ 'type' => 'string', 'locationName' => 'createdTime', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'ruleType' => [ 'type' => 'string', 'locationName' => 'ruleType', ],
            ],
        ],
        'NetworkSecurityGroup' => [
            'type' => 'structure',
            'members' => [
                'networkSecurityGroupId' => [ 'type' => 'string', 'locationName' => 'networkSecurityGroupId', ],
                'networkSecurityGroupName' => [ 'type' => 'string', 'locationName' => 'networkSecurityGroupName', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'vpcId' => [ 'type' => 'string', 'locationName' => 'vpcId', ],
                'securityGroupRules' => [ 'type' => 'list', 'member' => [ 'shape' => 'SecurityGroupRule', ], ],
                'createdTime' => [ 'type' => 'string', 'locationName' => 'createdTime', ],
                'networkSecurityGroupType' => [ 'type' => 'string', 'locationName' => 'networkSecurityGroupType', ],
                'networkInterfaceIds' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'NetworkSecurityGroupSpec' => [
            'type' => 'structure',
            'members' => [
                'vpcId' => [ 'type' => 'string', 'locationName' => 'vpcId', ],
                'networkSecurityGroupName' => [ 'type' => 'string', 'locationName' => 'networkSecurityGroupName', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
            ],
        ],
        'OpEipTagSpec' => [
            'type' => 'structure',
            'members' => [
                'resourceIds' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'userTags' => [ 'type' => 'list', 'member' => [ 'shape' => 'Tag', ], ],
            ],
        ],
        'OpModifyElasticIpSpec' => [
            'type' => 'structure',
            'members' => [
                'bandwidthMbps' => [ 'type' => 'integer', 'locationName' => 'bandwidthMbps', ],
                'userPin' => [ 'type' => 'string', 'locationName' => 'userPin', ],
            ],
        ],
        'OpModifyNatGatewaySpec' => [
            'type' => 'structure',
            'members' => [
                'bandwidthMbps' => [ 'type' => 'integer', 'locationName' => 'bandwidthMbps', ],
                'userPin' => [ 'type' => 'string', 'locationName' => 'userPin', ],
            ],
        ],
        'OpTagResResultsInfo' => [
            'type' => 'structure',
            'members' => [
                'resourceId' => [ 'type' => 'string', 'locationName' => 'resourceId', ],
                'success' => [ 'type' => 'integer', 'locationName' => 'success', ],
                'msg' => [ 'type' => 'string', 'locationName' => 'msg', ],
            ],
        ],
        'Quota' => [
            'type' => 'structure',
            'members' => [
                'type' => [ 'type' => 'string', 'locationName' => 'type', ],
                'parentResourceId' => [ 'type' => 'string', 'locationName' => 'parentResourceId', ],
                'maxLimit' => [ 'type' => 'double', 'locationName' => 'maxLimit', ],
                'count' => [ 'type' => 'double', 'locationName' => 'count', ],
            ],
        ],
        'RoutePropagation' => [
            'type' => 'structure',
            'members' => [
                'propagationId' => [ 'type' => 'string', 'locationName' => 'propagationId', ],
                'bgwId' => [ 'type' => 'string', 'locationName' => 'bgwId', ],
                'propagationCidrs' => [ 'type' => 'string', 'locationName' => 'propagationCidrs', ],
            ],
        ],
        'RouteTable' => [
            'type' => 'structure',
            'members' => [
                'routeTableId' => [ 'type' => 'string', 'locationName' => 'routeTableId', ],
                'routeTableName' => [ 'type' => 'string', 'locationName' => 'routeTableName', ],
                'routeTableType' => [ 'type' => 'string', 'locationName' => 'routeTableType', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'vpcId' => [ 'type' => 'string', 'locationName' => 'vpcId', ],
                'routeTableRules' => [ 'type' => 'list', 'member' => [ 'shape' => 'RouteTableRule', ], ],
                'routePropagations' => [ 'type' => 'list', 'member' => [ 'shape' => 'RoutePropagation', ], ],
                'subnetIds' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'createdTime' => [ 'type' => 'string', 'locationName' => 'createdTime', ],
            ],
        ],
        'RouteTableRule' => [
            'type' => 'structure',
            'members' => [
                'ruleId' => [ 'type' => 'string', 'locationName' => 'ruleId', ],
                'priority' => [ 'type' => 'double', 'locationName' => 'priority', ],
                'nextHopType' => [ 'type' => 'string', 'locationName' => 'nextHopType', ],
                'nextHopId' => [ 'type' => 'string', 'locationName' => 'nextHopId', ],
                'addressPrefix' => [ 'type' => 'string', 'locationName' => 'addressPrefix', ],
                'routeType' => [ 'type' => 'string', 'locationName' => 'routeType', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
            ],
        ],
        'RouteTableSpec' => [
            'type' => 'structure',
            'members' => [
                'vpcId' => [ 'type' => 'string', 'locationName' => 'vpcId', ],
                'routeTableName' => [ 'type' => 'string', 'locationName' => 'routeTableName', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
            ],
        ],
        'Segment' => [
            'type' => 'structure',
            'members' => [
                'segmentId' => [ 'type' => 'string', 'locationName' => 'segmentId', ],
                'segmentName' => [ 'type' => 'string', 'locationName' => 'segmentName', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'addressPrefix' => [ 'type' => 'string', 'locationName' => 'addressPrefix', ],
                'availableIpCount' => [ 'type' => 'integer', 'locationName' => 'availableIpCount', ],
                'provider' => [ 'type' => 'string', 'locationName' => 'provider', ],
                'startIp' => [ 'type' => 'string', 'locationName' => 'startIp', ],
                'endIp' => [ 'type' => 'string', 'locationName' => 'endIp', ],
            ],
        ],
        'Subnet' => [
            'type' => 'structure',
            'members' => [
                'subnetId' => [ 'type' => 'string', 'locationName' => 'subnetId', ],
                'subnetName' => [ 'type' => 'string', 'locationName' => 'subnetName', ],
                'vpcId' => [ 'type' => 'string', 'locationName' => 'vpcId', ],
                'addressPrefix' => [ 'type' => 'string', 'locationName' => 'addressPrefix', ],
                'availableIpCount' => [ 'type' => 'double', 'locationName' => 'availableIpCount', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'routeTableId' => [ 'type' => 'string', 'locationName' => 'routeTableId', ],
                'aclId' => [ 'type' => 'string', 'locationName' => 'aclId', ],
                'startIp' => [ 'type' => 'string', 'locationName' => 'startIp', ],
                'endIp' => [ 'type' => 'string', 'locationName' => 'endIp', ],
                'createdTime' => [ 'type' => 'string', 'locationName' => 'createdTime', ],
                'subnetType' => [ 'type' => 'string', 'locationName' => 'subnetType', ],
                'az' => [ 'type' => 'string', 'locationName' => 'az', ],
            ],
        ],
        'SubnetSpec' => [
            'type' => 'structure',
            'members' => [
                'vpcId' => [ 'type' => 'string', 'locationName' => 'vpcId', ],
                'subnetName' => [ 'type' => 'string', 'locationName' => 'subnetName', ],
                'addressPrefix' => [ 'type' => 'string', 'locationName' => 'addressPrefix', ],
                'routeTableId' => [ 'type' => 'string', 'locationName' => 'routeTableId', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'subnetType' => [ 'type' => 'string', 'locationName' => 'subnetType', ],
                'az' => [ 'type' => 'string', 'locationName' => 'az', ],
            ],
        ],
        'TagFilter' => [
            'type' => 'structure',
            'members' => [
                'key' => [ 'type' => 'string', 'locationName' => 'key', ],
                'values' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'UnassignSecondaryIpsSpec' => [
            'type' => 'structure',
            'members' => [
                'secondaryIps' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'Vpc' => [
            'type' => 'structure',
            'members' => [
                'vpcId' => [ 'type' => 'string', 'locationName' => 'vpcId', ],
                'addressPrefix' => [ 'type' => 'string', 'locationName' => 'addressPrefix', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'vpcName' => [ 'type' => 'string', 'locationName' => 'vpcName', ],
                'aclIds' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'routeTableIds' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'subnets' => [ 'type' => 'list', 'member' => [ 'shape' => 'Subnet', ], ],
                'createdTime' => [ 'type' => 'string', 'locationName' => 'createdTime', ],
            ],
        ],
        'VpcPeering' => [
            'type' => 'structure',
            'members' => [
                'vpcPeeringId' => [ 'type' => 'string', 'locationName' => 'vpcPeeringId', ],
                'vpcPeeringName' => [ 'type' => 'string', 'locationName' => 'vpcPeeringName', ],
                'vpcPeeringState' => [ 'type' => 'string', 'locationName' => 'vpcPeeringState', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'vpcInfo' =>  [ 'shape' => 'VpcPeeringVpcInfo', ],
                'remoteVpcInfo' =>  [ 'shape' => 'VpcPeeringVpcInfo', ],
                'createdTime' => [ 'type' => 'string', 'locationName' => 'createdTime', ],
            ],
        ],
        'VpcPeeringVpcInfo' => [
            'type' => 'structure',
            'members' => [
                'vpcId' => [ 'type' => 'string', 'locationName' => 'vpcId', ],
                'vpcName' => [ 'type' => 'string', 'locationName' => 'vpcName', ],
                'addressPrefix' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'VpcSpec' => [
            'type' => 'structure',
            'members' => [
                'vpcName' => [ 'type' => 'string', 'locationName' => 'vpcName', ],
                'addressPrefix' => [ 'type' => 'string', 'locationName' => 'addressPrefix', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
            ],
        ],
        'DescribeElasticIpResultShape' => [
            'type' => 'structure',
            'members' => [
                'elasticIp' =>  [ 'shape' => 'ElasticIp', ],
            ],
        ],
        'DescribeElasticIpResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeElasticIpResultShape', ],
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
        'DeleteElasticIpResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeElasticIpsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'filters' => [ 'type' => 'list', 'member' => [ 'shape' => 'Filter', ], ],
                'tags' => [ 'type' => 'list', 'member' => [ 'shape' => 'TagFilter', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'CreateElasticIpsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'CreateElasticIpsResultShape', ],
            ],
        ],
        'DescribeElasticIpsResultShape' => [
            'type' => 'structure',
            'members' => [
                'elasticIps' => [ 'type' => 'list', 'member' => [ 'shape' => 'ElasticIp', ], ],
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
            ],
        ],
        'CreateElasticIpsResultShape' => [
            'type' => 'structure',
            'members' => [
                'elasticIpIds' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ModifyElasticIpRequestShape' => [
            'type' => 'structure',
            'members' => [
                'bandwidthMbps' => [ 'type' => 'integer', 'locationName' => 'bandwidthMbps', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'elasticIpId' => [ 'type' => 'string', 'locationName' => 'elasticIpId', ],
            ],
        ],
        'DescribeElasticIpsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeElasticIpsResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ModifyElasticIpResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DeleteElasticIpResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DeleteElasticIpRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'elasticIpId' => [ 'type' => 'string', 'locationName' => 'elasticIpId', ],
            ],
        ],
        'ModifyElasticIpResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'CreateElasticIpsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'maxCount' => [ 'type' => 'integer', 'locationName' => 'maxCount', ],
                'elasticIpAddress' => [ 'type' => 'string', 'locationName' => 'elasticIpAddress', ],
                'elasticIpSpec' =>  [ 'shape' => 'ElasticIpSpec', ],
                'userTags' => [ 'type' => 'list', 'member' => [ 'shape' => 'Tag', ], ],
                'ipType' => [ 'type' => 'string', 'locationName' => 'ipType', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'ModifyNetworkAclRequestShape' => [
            'type' => 'structure',
            'members' => [
                'networkAclName' => [ 'type' => 'string', 'locationName' => 'networkAclName', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'networkAclId' => [ 'type' => 'string', 'locationName' => 'networkAclId', ],
            ],
        ],
        'DisassociateNetworkAclResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'RemoveNetworkAclRulesResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeNetworkAclResultShape' => [
            'type' => 'structure',
            'members' => [
                'networkAcl' =>  [ 'shape' => 'NetworkAcl', ],
            ],
        ],
        'RemoveNetworkAclRulesResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'AddNetworkAclRulesResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DisassociateNetworkAclResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DescribeNetworkAclsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeNetworkAclsResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DeleteNetworkAclResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeNetworkAclsResultShape' => [
            'type' => 'structure',
            'members' => [
                'networkAcls' => [ 'type' => 'list', 'member' => [ 'shape' => 'NetworkAcl', ], ],
                'totalCount' => [ 'type' => 'double', 'locationName' => 'totalCount', ],
            ],
        ],
        'CreateNetworkAclResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'CreateNetworkAclResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ModifyNetworkAclRulesResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DisassociateNetworkAclRequestShape' => [
            'type' => 'structure',
            'members' => [
                'subnetId' => [ 'type' => 'string', 'locationName' => 'subnetId', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'networkAclId' => [ 'type' => 'string', 'locationName' => 'networkAclId', ],
            ],
        ],
        'DeleteNetworkAclResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'ModifyNetworkAclRulesResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeNetworkAclResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeNetworkAclResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'AssociateNetworkAclRequestShape' => [
            'type' => 'structure',
            'members' => [
                'subnetIds' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'networkAclId' => [ 'type' => 'string', 'locationName' => 'networkAclId', ],
            ],
        ],
        'CreateNetworkAclRequestShape' => [
            'type' => 'structure',
            'members' => [
                'vpcId' => [ 'type' => 'string', 'locationName' => 'vpcId', ],
                'networkAclName' => [ 'type' => 'string', 'locationName' => 'networkAclName', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'RemoveNetworkAclRulesRequestShape' => [
            'type' => 'structure',
            'members' => [
                'ruleIds' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'networkAclId' => [ 'type' => 'string', 'locationName' => 'networkAclId', ],
            ],
        ],
        'AddNetworkAclRulesResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'AssociateNetworkAclResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'AssociateNetworkAclResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeNetworkAclsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'filters' => [ 'type' => 'list', 'member' => [ 'shape' => 'Filter', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DescribeNetworkAclRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'networkAclId' => [ 'type' => 'string', 'locationName' => 'networkAclId', ],
            ],
        ],
        'AddNetworkAclRulesRequestShape' => [
            'type' => 'structure',
            'members' => [
                'networkAclRuleSpecs' => [ 'type' => 'list', 'member' => [ 'shape' => 'AddNetworkAclRuleSpec', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'networkAclId' => [ 'type' => 'string', 'locationName' => 'networkAclId', ],
            ],
        ],
        'DeleteNetworkAclRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'networkAclId' => [ 'type' => 'string', 'locationName' => 'networkAclId', ],
            ],
        ],
        'CreateNetworkAclResultShape' => [
            'type' => 'structure',
            'members' => [
                'networkAclId' => [ 'type' => 'string', 'locationName' => 'networkAclId', ],
            ],
        ],
        'ModifyNetworkAclResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ModifyNetworkAclResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'ModifyNetworkAclRulesRequestShape' => [
            'type' => 'structure',
            'members' => [
                'modifyNetworkAclRuleSpecs' => [ 'type' => 'list', 'member' => [ 'shape' => 'ModifyNetworkAclRuleSpec', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'networkAclId' => [ 'type' => 'string', 'locationName' => 'networkAclId', ],
            ],
        ],
        'DescribeNetworkInterfacesResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeNetworkInterfacesResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'AssignSecondaryIpsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'force' => [ 'type' => 'boolean', 'locationName' => 'force', ],
                'secondaryIps' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'secondaryIpCount' => [ 'type' => 'double', 'locationName' => 'secondaryIpCount', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'networkInterfaceId' => [ 'type' => 'string', 'locationName' => 'networkInterfaceId', ],
            ],
        ],
        'ModifyNetworkInterfaceResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'UnassignSecondaryIpsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'secondaryIps' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'networkInterfaceId' => [ 'type' => 'string', 'locationName' => 'networkInterfaceId', ],
            ],
        ],
        'DescribeNetworkInterfaceResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeNetworkInterfaceResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'AssociateElasticIpResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeNetworkInterfaceRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'networkInterfaceId' => [ 'type' => 'string', 'locationName' => 'networkInterfaceId', ],
            ],
        ],
        'CreateNetworkInterfaceRequestShape' => [
            'type' => 'structure',
            'members' => [
                'subnetId' => [ 'type' => 'string', 'locationName' => 'subnetId', ],
                'az' => [ 'type' => 'string', 'locationName' => 'az', ],
                'networkInterfaceName' => [ 'type' => 'string', 'locationName' => 'networkInterfaceName', ],
                'primaryIpAddress' => [ 'type' => 'string', 'locationName' => 'primaryIpAddress', ],
                'secondaryIpAddresses' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'secondaryIpCount' => [ 'type' => 'integer', 'locationName' => 'secondaryIpCount', ],
                'securityGroups' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'sanityCheck' => [ 'type' => 'integer', 'locationName' => 'sanityCheck', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DisassociateElasticIpRequestShape' => [
            'type' => 'structure',
            'members' => [
                'elasticIpId' => [ 'type' => 'string', 'locationName' => 'elasticIpId', ],
                'elasticIpAddress' => [ 'type' => 'string', 'locationName' => 'elasticIpAddress', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'networkInterfaceId' => [ 'type' => 'string', 'locationName' => 'networkInterfaceId', ],
            ],
        ],
        'DisassociateElasticIpResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeNetworkInterfacesResultShape' => [
            'type' => 'structure',
            'members' => [
                'networkInterfaces' => [ 'type' => 'list', 'member' => [ 'shape' => 'NetworkInterface', ], ],
                'totalCount' => [ 'type' => 'double', 'locationName' => 'totalCount', ],
            ],
        ],
        'UnassignSecondaryIpsResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DescribeNetworkInterfaceResultShape' => [
            'type' => 'structure',
            'members' => [
                'networkInterface' =>  [ 'shape' => 'NetworkInterface', ],
            ],
        ],
        'CreateNetworkInterfaceResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'CreateNetworkInterfaceResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DisassociateElasticIpResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'AssociateElasticIpRequestShape' => [
            'type' => 'structure',
            'members' => [
                'elasticIpId' => [ 'type' => 'string', 'locationName' => 'elasticIpId', ],
                'privateIpAddress' => [ 'type' => 'string', 'locationName' => 'privateIpAddress', ],
                'elasticIpAddress' => [ 'type' => 'string', 'locationName' => 'elasticIpAddress', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'networkInterfaceId' => [ 'type' => 'string', 'locationName' => 'networkInterfaceId', ],
            ],
        ],
        'DescribeNetworkInterfacesRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'filters' => [ 'type' => 'list', 'member' => [ 'shape' => 'Filter', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'AssignSecondaryIpsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ModifyNetworkInterfaceResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DeleteNetworkInterfaceResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'ModifyNetworkInterfaceRequestShape' => [
            'type' => 'structure',
            'members' => [
                'networkInterfaceName' => [ 'type' => 'string', 'locationName' => 'networkInterfaceName', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'securityGroups' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'networkInterfaceId' => [ 'type' => 'string', 'locationName' => 'networkInterfaceId', ],
            ],
        ],
        'UnassignSecondaryIpsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'CreateNetworkInterfaceResultShape' => [
            'type' => 'structure',
            'members' => [
                'networkInterfaceId' => [ 'type' => 'string', 'locationName' => 'networkInterfaceId', ],
            ],
        ],
        'DeleteNetworkInterfaceResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'AssociateElasticIpResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DeleteNetworkInterfaceRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'networkInterfaceId' => [ 'type' => 'string', 'locationName' => 'networkInterfaceId', ],
            ],
        ],
        'AssignSecondaryIpsResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'ModifyNetworkSecurityGroupResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'AddNetworkSecurityGroupRulesResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'RemoveNetworkSecurityGroupRulesRequestShape' => [
            'type' => 'structure',
            'members' => [
                'ruleIds' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'networkSecurityGroupId' => [ 'type' => 'string', 'locationName' => 'networkSecurityGroupId', ],
            ],
        ],
        'DescribeNetworkSecurityGroupRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'networkSecurityGroupId' => [ 'type' => 'string', 'locationName' => 'networkSecurityGroupId', ],
            ],
        ],
        'RemoveNetworkSecurityGroupRulesResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'ModifyNetworkSecurityGroupRequestShape' => [
            'type' => 'structure',
            'members' => [
                'networkSecurityGroupName' => [ 'type' => 'string', 'locationName' => 'networkSecurityGroupName', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'networkSecurityGroupId' => [ 'type' => 'string', 'locationName' => 'networkSecurityGroupId', ],
            ],
        ],
        'ModifyNetworkSecurityGroupRulesResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DeleteNetworkSecurityGroupResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'CreateNetworkSecurityGroupResultShape' => [
            'type' => 'structure',
            'members' => [
                'networkSecurityGroupId' => [ 'type' => 'string', 'locationName' => 'networkSecurityGroupId', ],
            ],
        ],
        'DescribeNetworkSecurityGroupResultShape' => [
            'type' => 'structure',
            'members' => [
                'networkSecurityGroup' =>  [ 'shape' => 'NetworkSecurityGroup', ],
            ],
        ],
        'AddNetworkSecurityGroupRulesResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'ModifyNetworkSecurityGroupRulesRequestShape' => [
            'type' => 'structure',
            'members' => [
                'modifySecurityGroupRuleSpecs' => [ 'type' => 'list', 'member' => [ 'shape' => 'ModifySecurityGroupRules', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'networkSecurityGroupId' => [ 'type' => 'string', 'locationName' => 'networkSecurityGroupId', ],
            ],
        ],
        'CreateNetworkSecurityGroupResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'CreateNetworkSecurityGroupResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DeleteNetworkSecurityGroupResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'ModifyNetworkSecurityGroupResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'CreateNetworkSecurityGroupRequestShape' => [
            'type' => 'structure',
            'members' => [
                'vpcId' => [ 'type' => 'string', 'locationName' => 'vpcId', ],
                'networkSecurityGroupName' => [ 'type' => 'string', 'locationName' => 'networkSecurityGroupName', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DescribeNetworkSecurityGroupsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeNetworkSecurityGroupsResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeNetworkSecurityGroupResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeNetworkSecurityGroupResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'RemoveNetworkSecurityGroupRulesResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeNetworkSecurityGroupsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'filters' => [ 'type' => 'list', 'member' => [ 'shape' => 'Filter', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DescribeNetworkSecurityGroupsResultShape' => [
            'type' => 'structure',
            'members' => [
                'networkSecurityGroups' => [ 'type' => 'list', 'member' => [ 'shape' => 'NetworkSecurityGroup', ], ],
                'totalCount' => [ 'type' => 'double', 'locationName' => 'totalCount', ],
            ],
        ],
        'AddNetworkSecurityGroupRulesRequestShape' => [
            'type' => 'structure',
            'members' => [
                'networkSecurityGroupRuleSpecs' => [ 'type' => 'list', 'member' => [ 'shape' => 'AddSecurityGroupRules', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'networkSecurityGroupId' => [ 'type' => 'string', 'locationName' => 'networkSecurityGroupId', ],
            ],
        ],
        'DeleteNetworkSecurityGroupRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'networkSecurityGroupId' => [ 'type' => 'string', 'locationName' => 'networkSecurityGroupId', ],
            ],
        ],
        'ModifyNetworkSecurityGroupRulesResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeQuotaRequestShape' => [
            'type' => 'structure',
            'members' => [
                'type' => [ 'type' => 'string', 'locationName' => 'type', ],
                'parentResourceId' => [ 'type' => 'string', 'locationName' => 'parentResourceId', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DescribeQuotaResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeQuotaResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeQuotaResultShape' => [
            'type' => 'structure',
            'members' => [
                'quota' => [ 'type' => 'object', 'locationName' => 'quota', ],
            ],
        ],
        'DescribeRouteTablesResultShape' => [
            'type' => 'structure',
            'members' => [
                'routeTables' => [ 'type' => 'list', 'member' => [ 'shape' => 'RouteTable', ], ],
                'totalCount' => [ 'type' => 'double', 'locationName' => 'totalCount', ],
            ],
        ],
        'ModifyRouteTableRulesRequestShape' => [
            'type' => 'structure',
            'members' => [
                'modifyRouteTableRuleSpecs' => [ 'type' => 'list', 'member' => [ 'shape' => 'ModifyRouteTableRules', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'routeTableId' => [ 'type' => 'string', 'locationName' => 'routeTableId', ],
            ],
        ],
        'AssociateRouteTableRequestShape' => [
            'type' => 'structure',
            'members' => [
                'subnetIds' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'routeTableId' => [ 'type' => 'string', 'locationName' => 'routeTableId', ],
            ],
        ],
        'RemoveRouteTableRulesRequestShape' => [
            'type' => 'structure',
            'members' => [
                'ruleIds' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'routeTableId' => [ 'type' => 'string', 'locationName' => 'routeTableId', ],
            ],
        ],
        'ModifyRouteTableResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'ModifyRouteTableRulesResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DisassociateRouteTableRequestShape' => [
            'type' => 'structure',
            'members' => [
                'subnetId' => [ 'type' => 'string', 'locationName' => 'subnetId', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'routeTableId' => [ 'type' => 'string', 'locationName' => 'routeTableId', ],
            ],
        ],
        'RemoveRouteTableRulesResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'ModifyRouteTableRulesResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'AssociateRouteTableResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DescribeRouteTablesRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'filters' => [ 'type' => 'list', 'member' => [ 'shape' => 'Filter', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DisassociateRouteTableResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DeleteRouteTableResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DescribeRouteTablesResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeRouteTablesResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'CreateRouteTableRequestShape' => [
            'type' => 'structure',
            'members' => [
                'vpcId' => [ 'type' => 'string', 'locationName' => 'vpcId', ],
                'routeTableName' => [ 'type' => 'string', 'locationName' => 'routeTableName', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'ModifyRouteTableResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'AssociateRouteTableResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'AddRouteTableRulesResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ModifyRouteTableRequestShape' => [
            'type' => 'structure',
            'members' => [
                'routeTableName' => [ 'type' => 'string', 'locationName' => 'routeTableName', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'routeTableId' => [ 'type' => 'string', 'locationName' => 'routeTableId', ],
            ],
        ],
        'DescribeRouteTableResultShape' => [
            'type' => 'structure',
            'members' => [
                'routeTable' =>  [ 'shape' => 'RouteTable', ],
            ],
        ],
        'AddRouteTableRulesResultShape' => [
            'type' => 'structure',
            'members' => [
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
        'DeleteRouteTableRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'routeTableId' => [ 'type' => 'string', 'locationName' => 'routeTableId', ],
            ],
        ],
        'DisassociateRouteTableResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'CreateRouteTableResultShape' => [
            'type' => 'structure',
            'members' => [
                'routeTableId' => [ 'type' => 'string', 'locationName' => 'routeTableId', ],
            ],
        ],
        'RemoveRouteTableRulesResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'AddRouteTableRulesRequestShape' => [
            'type' => 'structure',
            'members' => [
                'routeTableRuleSpecs' => [ 'type' => 'list', 'member' => [ 'shape' => 'AddRouteTableRules', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'routeTableId' => [ 'type' => 'string', 'locationName' => 'routeTableId', ],
            ],
        ],
        'CreateRouteTableResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'CreateRouteTableResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DeleteRouteTableResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeEdgeIpProvidersResultShape' => [
            'type' => 'structure',
            'members' => [
                'edgeIpProviders' => [ 'type' => 'list', 'member' => [ 'shape' => 'EdgeIpProvider', ], ],
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
            ],
        ],
        'DescribeEdgeIpProvidersRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'filters' => [ 'type' => 'list', 'member' => [ 'shape' => 'Filter', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DescribeEdgeIpProvidersResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeEdgeIpProvidersResultShape', ],
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
        'ModifySubnetResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ModifySubnetResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DeleteSubnetResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ModifySubnetRequestShape' => [
            'type' => 'structure',
            'members' => [
                'subnetName' => [ 'type' => 'string', 'locationName' => 'subnetName', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'subnetId' => [ 'type' => 'string', 'locationName' => 'subnetId', ],
            ],
        ],
        'CreateSubnetRequestShape' => [
            'type' => 'structure',
            'members' => [
                'vpcId' => [ 'type' => 'string', 'locationName' => 'vpcId', ],
                'subnetName' => [ 'type' => 'string', 'locationName' => 'subnetName', ],
                'addressPrefix' => [ 'type' => 'string', 'locationName' => 'addressPrefix', ],
                'routeTableId' => [ 'type' => 'string', 'locationName' => 'routeTableId', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'subnetType' => [ 'type' => 'string', 'locationName' => 'subnetType', ],
                'az' => [ 'type' => 'string', 'locationName' => 'az', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'CreateSubnetResultShape' => [
            'type' => 'structure',
            'members' => [
                'subnetId' => [ 'type' => 'string', 'locationName' => 'subnetId', ],
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
            ],
        ],
        'DescribeSubnetRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'subnetId' => [ 'type' => 'string', 'locationName' => 'subnetId', ],
            ],
        ],
        'DescribeSubnetsResultShape' => [
            'type' => 'structure',
            'members' => [
                'subnets' => [ 'type' => 'list', 'member' => [ 'shape' => 'Subnet', ], ],
                'totalCount' => [ 'type' => 'double', 'locationName' => 'totalCount', ],
            ],
        ],
        'DescribeSubnetsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
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
        'DescribeSubnetsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeSubnetsResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DeleteSubnetRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'subnetId' => [ 'type' => 'string', 'locationName' => 'subnetId', ],
            ],
        ],
        'DescribeVpcsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
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
        'DeleteVpcRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'vpcId' => [ 'type' => 'string', 'locationName' => 'vpcId', ],
            ],
        ],
        'CreateVpcRequestShape' => [
            'type' => 'structure',
            'members' => [
                'vpcName' => [ 'type' => 'string', 'locationName' => 'vpcName', ],
                'addressPrefix' => [ 'type' => 'string', 'locationName' => 'addressPrefix', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
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
                'totalCount' => [ 'type' => 'double', 'locationName' => 'totalCount', ],
            ],
        ],
        'ModifyVpcResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeVpcsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeVpcsResultShape', ],
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
        'DeleteVpcResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DeleteVpcResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ModifyVpcRequestShape' => [
            'type' => 'structure',
            'members' => [
                'vpcName' => [ 'type' => 'string', 'locationName' => 'vpcName', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
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
        'ModifyVpcResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'CreateVpcResultShape' => [
            'type' => 'structure',
            'members' => [
                'vpcId' => [ 'type' => 'string', 'locationName' => 'vpcId', ],
            ],
        ],
        'DescribeVpcPeeringsResultShape' => [
            'type' => 'structure',
            'members' => [
                'vpcPeerings' => [ 'type' => 'list', 'member' => [ 'shape' => 'VpcPeering', ], ],
                'totalCount' => [ 'type' => 'double', 'locationName' => 'totalCount', ],
            ],
        ],
        'ModifyVpcPeeringResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DescribeVpcPeeringRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'vpcPeeringId' => [ 'type' => 'string', 'locationName' => 'vpcPeeringId', ],
            ],
        ],
        'DeleteVpcPeeringRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'vpcPeeringId' => [ 'type' => 'string', 'locationName' => 'vpcPeeringId', ],
            ],
        ],
        'DeleteVpcPeeringResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DescribeVpcPeeringResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeVpcPeeringResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeVpcPeeringsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'filters' => [ 'type' => 'list', 'member' => [ 'shape' => 'Filter', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'ModifyVpcPeeringRequestShape' => [
            'type' => 'structure',
            'members' => [
                'vpcPeeringName' => [ 'type' => 'string', 'locationName' => 'vpcPeeringName', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'vpcPeeringId' => [ 'type' => 'string', 'locationName' => 'vpcPeeringId', ],
            ],
        ],
        'CreateVpcPeeringRequestShape' => [
            'type' => 'structure',
            'members' => [
                'vpcPeeringName' => [ 'type' => 'string', 'locationName' => 'vpcPeeringName', ],
                'vpcId' => [ 'type' => 'string', 'locationName' => 'vpcId', ],
                'remoteVpcId' => [ 'type' => 'string', 'locationName' => 'remoteVpcId', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'ModifyVpcPeeringResponseShape' => [
            'type' => 'structure',
            'members' => [
                'vpcPeering' =>  [ 'shape' => 'ModifyVpcPeeringResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DeleteVpcPeeringResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'CreateVpcPeeringResultShape' => [
            'type' => 'structure',
            'members' => [
                'vpcPeering' =>  [ 'shape' => 'VpcPeering', ],
            ],
        ],
        'CreateVpcPeeringResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'CreateVpcPeeringResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeVpcPeeringResultShape' => [
            'type' => 'structure',
            'members' => [
                'vpcPeering' =>  [ 'shape' => 'VpcPeering', ],
            ],
        ],
        'DescribeVpcPeeringsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeVpcPeeringsResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
    ],
];
