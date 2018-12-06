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
        'AddNetworkSecurityGroupRulesSpec' => [
            'type' => 'structure',
            'members' => [
                'networkSecurityGroupRuleSpecs' => [ 'type' => 'list', 'member' => [ 'shape' => 'AddSecurityGroupRules', ], ],
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
        'AddRouteTableRules' => [
            'type' => 'structure',
            'members' => [
                'nextHopType' => [ 'type' => 'string', 'locationName' => 'nextHopType', ],
                'nextHopId' => [ 'type' => 'string', 'locationName' => 'nextHopId', ],
                'addressPrefix' => [ 'type' => 'string', 'locationName' => 'addressPrefix', ],
                'priority' => [ 'type' => 'double', 'locationName' => 'priority', ],
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
        'ChargeSpec' => [
            'type' => 'structure',
            'members' => [
                'chargeMode' => [ 'type' => 'string', 'locationName' => 'chargeMode', ],
                'chargeUnit' => [ 'type' => 'string', 'locationName' => 'chargeUnit', ],
                'chargeDuration' => [ 'type' => 'integer', 'locationName' => 'chargeDuration', ],
            ],
        ],
        'CreateElasticIpSpec' => [
            'type' => 'structure',
            'members' => [
                'maxCount' => [ 'type' => 'integer', 'locationName' => 'maxCount', ],
                'elasticIpAddress' => [ 'type' => 'string', 'locationName' => 'elasticIpAddress', ],
                'elasticIpSpec' =>  [ 'shape' => 'ElasticIpSpec', ],
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
        'CreateVpcPeeringSpec' => [
            'type' => 'structure',
            'members' => [
                'vpcPeeringName' => [ 'type' => 'string', 'locationName' => 'vpcPeeringName', ],
                'vpcId' => [ 'type' => 'string', 'locationName' => 'vpcId', ],
                'remoteVpcId' => [ 'type' => 'string', 'locationName' => 'remoteVpcId', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
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
            ],
        ],
        'ModifyElasticIpSpec' => [
            'type' => 'structure',
            'members' => [
                'bandwidthMbps' => [ 'type' => 'integer', 'locationName' => 'bandwidthMbps', ],
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
        'ModifySecurityGroupRuleSpec' => [
            'type' => 'structure',
            'members' => [
                'modifySecurityGroupRuleSpecs' => [ 'type' => 'list', 'member' => [ 'shape' => 'ModifySecurityGroupRules', ], ],
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
        'ModifyRouteTableRules' => [
            'type' => 'structure',
            'members' => [
                'ruleId' => [ 'type' => 'string', 'locationName' => 'ruleId', ],
                'priority' => [ 'type' => 'double', 'locationName' => 'priority', ],
                'nextHopType' => [ 'type' => 'string', 'locationName' => 'nextHopType', ],
                'nextHopId' => [ 'type' => 'string', 'locationName' => 'nextHopId', ],
                'addressPrefix' => [ 'type' => 'string', 'locationName' => 'addressPrefix', ],
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
        'NetworkInterfacePrivateIp' => [
            'type' => 'structure',
            'members' => [
                'privateIpAddress' => [ 'type' => 'string', 'locationName' => 'privateIpAddress', ],
                'elasticIpId' => [ 'type' => 'string', 'locationName' => 'elasticIpId', ],
                'elasticIpAddress' => [ 'type' => 'string', 'locationName' => 'elasticIpAddress', ],
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
                'createdTime' => [ 'type' => 'string', 'locationName' => 'createdTime', ],
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
        'Quota' => [
            'type' => 'structure',
            'members' => [
                'type' => [ 'type' => 'string', 'locationName' => 'type', ],
                'parentResourceId' => [ 'type' => 'string', 'locationName' => 'parentResourceId', ],
                'maxLimit' => [ 'type' => 'double', 'locationName' => 'maxLimit', ],
                'count' => [ 'type' => 'double', 'locationName' => 'count', ],
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
                'subnetIds' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'createdTime' => [ 'type' => 'string', 'locationName' => 'createdTime', ],
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
        'DeleteElasticIpRequestShape' => [
            'type' => 'structure',
            'members' => [
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
        'ModifyElasticIpResponseShape' => [
            'type' => 'structure',
            'members' => [
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
        'CreateElasticIpsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'maxCount' => [ 'type' => 'integer', 'locationName' => 'maxCount', ],
                'elasticIpAddress' => [ 'type' => 'string', 'locationName' => 'elasticIpAddress', ],
                'elasticIpSpec' =>  [ 'shape' => 'ElasticIpSpec', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'CreateElasticIpsResultShape' => [
            'type' => 'structure',
            'members' => [
                'elasticIpIds' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ModifyElasticIpResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DescribeElasticIpRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'elasticIpId' => [ 'type' => 'string', 'locationName' => 'elasticIpId', ],
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
        'CreateElasticIpsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'CreateElasticIpsResultShape', ],
            ],
        ],
        'DescribeElasticIpsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'filters' => [ 'type' => 'list', 'member' => [ 'shape' => 'Filter', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DeleteElasticIpResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DeleteElasticIpResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeElasticIpResultShape' => [
            'type' => 'structure',
            'members' => [
                'elasticIp' =>  [ 'shape' => 'ElasticIp', ],
            ],
        ],
        'DescribeElasticIpsResultShape' => [
            'type' => 'structure',
            'members' => [
                'elasticIps' => [ 'type' => 'list', 'member' => [ 'shape' => 'ElasticIp', ], ],
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
            ],
        ],
        'DescribeElasticIpsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeElasticIpsResultShape', ],
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
        'DescribeNetworkAclResultShape' => [
            'type' => 'structure',
            'members' => [
                'networkAcl' =>  [ 'shape' => 'NetworkAcl', ],
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
        'AssociateNetworkAclResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DescribeNetworkAclResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeNetworkAclResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
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
        'ModifyNetworkAclRulesResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
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
        'CreateNetworkAclResultShape' => [
            'type' => 'structure',
            'members' => [
                'networkAclId' => [ 'type' => 'string', 'locationName' => 'networkAclId', ],
            ],
        ],
        'RemoveNetworkAclRulesResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'AssociateNetworkAclRequestShape' => [
            'type' => 'structure',
            'members' => [
                'subnetIds' => [ 'type' => 'list', 'member' => [ 'type' => '', ], ],
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
        'AddNetworkAclRulesResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'RemoveNetworkAclRulesRequestShape' => [
            'type' => 'structure',
            'members' => [
                'ruleIds' => [ 'type' => 'list', 'member' => [ 'type' => '', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'networkAclId' => [ 'type' => 'string', 'locationName' => 'networkAclId', ],
            ],
        ],
        'DisassociateNetworkAclResultShape' => [
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
        'ModifyNetworkAclRequestShape' => [
            'type' => 'structure',
            'members' => [
                'networkAclName' => [ 'type' => 'string', 'locationName' => 'networkAclName', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'networkAclId' => [ 'type' => 'string', 'locationName' => 'networkAclId', ],
            ],
        ],
        'CreateNetworkAclResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'CreateNetworkAclResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeNetworkAclRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'networkAclId' => [ 'type' => 'string', 'locationName' => 'networkAclId', ],
            ],
        ],
        'DeleteNetworkAclResultShape' => [
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
        'RemoveNetworkAclRulesResultShape' => [
            'type' => 'structure',
            'members' => [
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
        'ModifyNetworkAclResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'ModifyNetworkAclResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DisassociateNetworkAclResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeNetworkAclsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeNetworkAclsResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ModifyNetworkAclRulesResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DescribeNetworkInterfaceRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'networkInterfaceId' => [ 'type' => 'string', 'locationName' => 'networkInterfaceId', ],
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
        'DeleteNetworkInterfaceResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'AssignSecondaryIpsResponseShape' => [
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
        'DisassociateElasticIpResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ModifyNetworkInterfaceResponseShape' => [
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
        'DeleteNetworkInterfaceRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'networkInterfaceId' => [ 'type' => 'string', 'locationName' => 'networkInterfaceId', ],
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
        'DescribeNetworkInterfacesRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'filters' => [ 'type' => 'list', 'member' => [ 'shape' => 'Filter', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DescribeNetworkInterfaceResultShape' => [
            'type' => 'structure',
            'members' => [
                'networkInterface' =>  [ 'shape' => 'NetworkInterface', ],
            ],
        ],
        'DescribeNetworkInterfacesResultShape' => [
            'type' => 'structure',
            'members' => [
                'networkInterfaces' => [ 'type' => 'list', 'member' => [ 'shape' => 'NetworkInterface', ], ],
                'totalCount' => [ 'type' => 'double', 'locationName' => 'totalCount', ],
            ],
        ],
        'CreateNetworkInterfaceResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'CreateNetworkInterfaceResultShape', ],
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
        'DisassociateElasticIpResultShape' => [
            'type' => 'structure',
            'members' => [
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
        'UnassignSecondaryIpsResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DescribeNetworkInterfacesResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeNetworkInterfacesResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'AssignSecondaryIpsResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'ModifyNetworkInterfaceResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DescribeNetworkInterfaceResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeNetworkInterfaceResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
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
        'DescribeNetworkSecurityGroupsResultShape' => [
            'type' => 'structure',
            'members' => [
                'networkSecurityGroups' => [ 'type' => 'list', 'member' => [ 'shape' => 'NetworkSecurityGroup', ], ],
                'totalCount' => [ 'type' => 'double', 'locationName' => 'totalCount', ],
            ],
        ],
        'DescribeNetworkSecurityGroupRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'networkSecurityGroupId' => [ 'type' => 'string', 'locationName' => 'networkSecurityGroupId', ],
            ],
        ],
        'AddNetworkSecurityGroupRulesResultShape' => [
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
        'ModifyNetworkSecurityGroupRulesResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'RemoveNetworkSecurityGroupRulesRequestShape' => [
            'type' => 'structure',
            'members' => [
                'ruleIds' => [ 'type' => 'list', 'member' => [ 'type' => '', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'networkSecurityGroupId' => [ 'type' => 'string', 'locationName' => 'networkSecurityGroupId', ],
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
        'DescribeNetworkSecurityGroupsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'filters' => [ 'type' => 'list', 'member' => [ 'shape' => 'Filter', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'CreateNetworkSecurityGroupResultShape' => [
            'type' => 'structure',
            'members' => [
                'networkSecurityGroupId' => [ 'type' => 'string', 'locationName' => 'networkSecurityGroupId', ],
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
        'DeleteNetworkSecurityGroupResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'RemoveNetworkSecurityGroupRulesResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ModifyNetworkSecurityGroupResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'RemoveNetworkSecurityGroupRulesResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DescribeNetworkSecurityGroupResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeNetworkSecurityGroupResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'AddNetworkSecurityGroupRulesResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeNetworkSecurityGroupsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeNetworkSecurityGroupsResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
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
        'CreateNetworkSecurityGroupResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'CreateNetworkSecurityGroupResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ModifyNetworkSecurityGroupResultShape' => [
            'type' => 'structure',
            'members' => [
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
        'ModifyNetworkSecurityGroupRulesRequestShape' => [
            'type' => 'structure',
            'members' => [
                'modifySecurityGroupRuleSpecs' => [ 'type' => 'list', 'member' => [ 'shape' => 'ModifySecurityGroupRules', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'networkSecurityGroupId' => [ 'type' => 'string', 'locationName' => 'networkSecurityGroupId', ],
            ],
        ],
        'DescribeNetworkSecurityGroupResultShape' => [
            'type' => 'structure',
            'members' => [
                'networkSecurityGroup' =>  [ 'shape' => 'NetworkSecurityGroup', ],
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
        'DescribeQuotaResultShape' => [
            'type' => 'structure',
            'members' => [
                'quota' => [ 'type' => 'object', 'locationName' => 'quota', ],
            ],
        ],
        'DescribeQuotaResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeQuotaResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DeleteRouteTableResponseShape' => [
            'type' => 'structure',
            'members' => [
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
        'DescribeRouteTablesResultShape' => [
            'type' => 'structure',
            'members' => [
                'routeTables' => [ 'type' => 'list', 'member' => [ 'shape' => 'RouteTable', ], ],
                'totalCount' => [ 'type' => 'double', 'locationName' => 'totalCount', ],
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
        'AssociateRouteTableResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DisassociateRouteTableResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DisassociateRouteTableResultShape' => [
            'type' => 'structure',
            'members' => [
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
        'AddRouteTableRulesResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeRouteTableRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'routeTableId' => [ 'type' => 'string', 'locationName' => 'routeTableId', ],
            ],
        ],
        'ModifyRouteTableRulesResultShape' => [
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
        'DescribeRouteTableResultShape' => [
            'type' => 'structure',
            'members' => [
                'routeTable' =>  [ 'shape' => 'RouteTable', ],
            ],
        ],
        'ModifyRouteTableRulesResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ModifyRouteTableResultShape' => [
            'type' => 'structure',
            'members' => [
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
        'AddRouteTableRulesResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'ModifyRouteTableResponseShape' => [
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
        'DescribeRouteTableResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeRouteTableResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
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
        'RemoveRouteTableRulesRequestShape' => [
            'type' => 'structure',
            'members' => [
                'ruleIds' => [ 'type' => 'list', 'member' => [ 'type' => '', ], ],
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
        'AssociateRouteTableResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DeleteRouteTableResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'RemoveRouteTableRulesResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'RemoveRouteTableRulesResultShape' => [
            'type' => 'structure',
            'members' => [
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
        'CreateRouteTableResultShape' => [
            'type' => 'structure',
            'members' => [
                'routeTableId' => [ 'type' => 'string', 'locationName' => 'routeTableId', ],
            ],
        ],
        'DescribeRouteTablesResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeRouteTablesResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DeleteSubnetResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
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
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DescribeSubnetsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeSubnetsResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
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
        'ModifySubnetRequestShape' => [
            'type' => 'structure',
            'members' => [
                'subnetName' => [ 'type' => 'string', 'locationName' => 'subnetName', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
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
        'DescribeSubnetsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'filters' => [ 'type' => 'list', 'member' => [ 'shape' => 'Filter', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DescribeSubnetResultShape' => [
            'type' => 'structure',
            'members' => [
                'subnet' =>  [ 'shape' => 'Subnet', ],
            ],
        ],
        'DescribeSubnetsResultShape' => [
            'type' => 'structure',
            'members' => [
                'subnets' => [ 'type' => 'list', 'member' => [ 'shape' => 'Subnet', ], ],
                'totalCount' => [ 'type' => 'double', 'locationName' => 'totalCount', ],
            ],
        ],
        'DeleteSubnetRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'subnetId' => [ 'type' => 'string', 'locationName' => 'subnetId', ],
            ],
        ],
        'DescribeSubnetResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeSubnetResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'CreateVpcResultShape' => [
            'type' => 'structure',
            'members' => [
                'vpcId' => [ 'type' => 'string', 'locationName' => 'vpcId', ],
            ],
        ],
        'ModifyVpcResultShape' => [
            'type' => 'structure',
            'members' => [
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
        'DescribeVpcResultShape' => [
            'type' => 'structure',
            'members' => [
                'vpc' =>  [ 'shape' => 'Vpc', ],
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
        'DescribeVpcRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'vpcId' => [ 'type' => 'string', 'locationName' => 'vpcId', ],
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
        'DescribeVpcsResultShape' => [
            'type' => 'structure',
            'members' => [
                'vpcs' => [ 'type' => 'list', 'member' => [ 'shape' => 'Vpc', ], ],
                'totalCount' => [ 'type' => 'double', 'locationName' => 'totalCount', ],
            ],
        ],
        'CreateVpcResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'CreateVpcResultShape', ],
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
        'ModifyVpcResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
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
        'CreateVpcPeeringResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'CreateVpcPeeringResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeVpcPeeringsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeVpcPeeringsResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
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
                'vpcPeering' =>  [ 'shape' => 'VpcPeering', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DeleteVpcPeeringRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'vpcPeeringId' => [ 'type' => 'string', 'locationName' => 'vpcPeeringId', ],
            ],
        ],
        'ModifyVpcPeeringResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'CreateVpcPeeringResultShape' => [
            'type' => 'structure',
            'members' => [
                'vpcPeering' =>  [ 'shape' => 'VpcPeering', ],
            ],
        ],
        'DescribeVpcPeeringResultShape' => [
            'type' => 'structure',
            'members' => [
                'vpcPeering' =>  [ 'shape' => 'VpcPeering', ],
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
        'DeleteVpcPeeringResultShape' => [
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
        'DeleteVpcPeeringResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
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
        'DescribeVpcPeeringResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeVpcPeeringResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeVpcPeeringsResultShape' => [
            'type' => 'structure',
            'members' => [
                'vpcPeerings' => [ 'type' => 'list', 'member' => [ 'shape' => 'VpcPeering', ], ],
                'totalCount' => [ 'type' => 'double', 'locationName' => 'totalCount', ],
            ],
        ],
    ],
];
