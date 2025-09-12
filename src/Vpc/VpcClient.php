<?php
/**
 * Vpc
 *
 * @category Jdcloud
 * @package  Jdcloud\Vpc
 * @author   Jdcloud <jdcloud-api@jd.com>
 * @license  Apache-2.0 http://www.apache.org/licenses/LICENSE-2.0
 * @link     https://www.jdcloud.com/help/faq
 */

namespace Jdcloud\Vpc;

use Jdcloud\JdCloudClient;
use Jdcloud\Api\Service;
use Jdcloud\Api\DocModel;
use Jdcloud\Api\ApiProvider;
use Jdcloud\PresignUrlMiddleware;

/**
 * Client used to interact with vpc.
 *
 * @method \Jdcloud\Result describeBandwidthPackages(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeBandwidthPackagesAsync(array $args = [])
 * @method \Jdcloud\Result createBandwidthPackage(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createBandwidthPackageAsync(array $args = [])
 * @method \Jdcloud\Result describeBandwidthPackage(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeBandwidthPackageAsync(array $args = [])
 * @method \Jdcloud\Result modifyBandwidthPackage(array $args = [])
 * @method \GuzzleHttp\Promise\Promise modifyBandwidthPackageAsync(array $args = [])
 * @method \Jdcloud\Result deleteBandwidthPackage(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteBandwidthPackageAsync(array $args = [])
 * @method \Jdcloud\Result addBandwidthPackageIP(array $args = [])
 * @method \GuzzleHttp\Promise\Promise addBandwidthPackageIPAsync(array $args = [])
 * @method \Jdcloud\Result removeBandwidthPackageIP(array $args = [])
 * @method \GuzzleHttp\Promise\Promise removeBandwidthPackageIPAsync(array $args = [])
 * @method \Jdcloud\Result modifyBandwidthPackageIpBandwidth(array $args = [])
 * @method \GuzzleHttp\Promise\Promise modifyBandwidthPackageIpBandwidthAsync(array $args = [])
 * @method \Jdcloud\Result describeElasticIpPools(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeElasticIpPoolsAsync(array $args = [])
 * @method \Jdcloud\Result createElasticIpPool(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createElasticIpPoolAsync(array $args = [])
 * @method \Jdcloud\Result describeElasticIpPool(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeElasticIpPoolAsync(array $args = [])
 * @method \Jdcloud\Result modifyElasticIpPool(array $args = [])
 * @method \GuzzleHttp\Promise\Promise modifyElasticIpPoolAsync(array $args = [])
 * @method \Jdcloud\Result deleteElasticIpPool(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteElasticIpPoolAsync(array $args = [])
 * @method \Jdcloud\Result describeElasticIps(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeElasticIpsAsync(array $args = [])
 * @method \Jdcloud\Result createElasticIps(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createElasticIpsAsync(array $args = [])
 * @method \Jdcloud\Result describeElasticIp(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeElasticIpAsync(array $args = [])
 * @method \Jdcloud\Result modifyElasticIp(array $args = [])
 * @method \GuzzleHttp\Promise\Promise modifyElasticIpAsync(array $args = [])
 * @method \Jdcloud\Result deleteElasticIp(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteElasticIpAsync(array $args = [])
 * @method \Jdcloud\Result exportElasticIps(array $args = [])
 * @method \GuzzleHttp\Promise\Promise exportElasticIpsAsync(array $args = [])
 * @method \Jdcloud\Result describeNatGateways(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeNatGatewaysAsync(array $args = [])
 * @method \Jdcloud\Result createNatGateway(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createNatGatewayAsync(array $args = [])
 * @method \Jdcloud\Result describeNatGateway(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeNatGatewayAsync(array $args = [])
 * @method \Jdcloud\Result modifyNatGateway(array $args = [])
 * @method \GuzzleHttp\Promise\Promise modifyNatGatewayAsync(array $args = [])
 * @method \Jdcloud\Result deleteNatGateway(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteNatGatewayAsync(array $args = [])
 * @method \Jdcloud\Result startNatGateway(array $args = [])
 * @method \GuzzleHttp\Promise\Promise startNatGatewayAsync(array $args = [])
 * @method \Jdcloud\Result stopNatGateway(array $args = [])
 * @method \GuzzleHttp\Promise\Promise stopNatGatewayAsync(array $args = [])
 * @method \Jdcloud\Result associateElasticIps(array $args = [])
 * @method \GuzzleHttp\Promise\Promise associateElasticIpsAsync(array $args = [])
 * @method \Jdcloud\Result disassociateElasticIps(array $args = [])
 * @method \GuzzleHttp\Promise\Promise disassociateElasticIpsAsync(array $args = [])
 * @method \Jdcloud\Result describeNetworkAcls(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeNetworkAclsAsync(array $args = [])
 * @method \Jdcloud\Result createNetworkAcl(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createNetworkAclAsync(array $args = [])
 * @method \Jdcloud\Result describeNetworkAcl(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeNetworkAclAsync(array $args = [])
 * @method \Jdcloud\Result modifyNetworkAcl(array $args = [])
 * @method \GuzzleHttp\Promise\Promise modifyNetworkAclAsync(array $args = [])
 * @method \Jdcloud\Result deleteNetworkAcl(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteNetworkAclAsync(array $args = [])
 * @method \Jdcloud\Result associateNetworkAcl(array $args = [])
 * @method \GuzzleHttp\Promise\Promise associateNetworkAclAsync(array $args = [])
 * @method \Jdcloud\Result disassociateNetworkAcl(array $args = [])
 * @method \GuzzleHttp\Promise\Promise disassociateNetworkAclAsync(array $args = [])
 * @method \Jdcloud\Result addNetworkAclRules(array $args = [])
 * @method \GuzzleHttp\Promise\Promise addNetworkAclRulesAsync(array $args = [])
 * @method \Jdcloud\Result removeNetworkAclRules(array $args = [])
 * @method \GuzzleHttp\Promise\Promise removeNetworkAclRulesAsync(array $args = [])
 * @method \Jdcloud\Result modifyNetworkAclRules(array $args = [])
 * @method \GuzzleHttp\Promise\Promise modifyNetworkAclRulesAsync(array $args = [])
 * @method \Jdcloud\Result describeNetworkAclRules(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeNetworkAclRulesAsync(array $args = [])
 * @method \Jdcloud\Result describeNetworkInterfaces(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeNetworkInterfacesAsync(array $args = [])
 * @method \Jdcloud\Result createNetworkInterface(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createNetworkInterfaceAsync(array $args = [])
 * @method \Jdcloud\Result describeNetworkInterface(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeNetworkInterfaceAsync(array $args = [])
 * @method \Jdcloud\Result modifyNetworkInterface(array $args = [])
 * @method \GuzzleHttp\Promise\Promise modifyNetworkInterfaceAsync(array $args = [])
 * @method \Jdcloud\Result deleteNetworkInterface(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteNetworkInterfaceAsync(array $args = [])
 * @method \Jdcloud\Result describeNetworkInterfaceCidrIps(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeNetworkInterfaceCidrIpsAsync(array $args = [])
 * @method \Jdcloud\Result associateElasticIp(array $args = [])
 * @method \GuzzleHttp\Promise\Promise associateElasticIpAsync(array $args = [])
 * @method \Jdcloud\Result disassociateElasticIp(array $args = [])
 * @method \GuzzleHttp\Promise\Promise disassociateElasticIpAsync(array $args = [])
 * @method \Jdcloud\Result assignSecondaryIps(array $args = [])
 * @method \GuzzleHttp\Promise\Promise assignSecondaryIpsAsync(array $args = [])
 * @method \Jdcloud\Result unassignSecondaryIps(array $args = [])
 * @method \GuzzleHttp\Promise\Promise unassignSecondaryIpsAsync(array $args = [])
 * @method \Jdcloud\Result describeNetworkSecurityGroups(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeNetworkSecurityGroupsAsync(array $args = [])
 * @method \Jdcloud\Result createNetworkSecurityGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createNetworkSecurityGroupAsync(array $args = [])
 * @method \Jdcloud\Result describeNetworkSecurityGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeNetworkSecurityGroupAsync(array $args = [])
 * @method \Jdcloud\Result modifyNetworkSecurityGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise modifyNetworkSecurityGroupAsync(array $args = [])
 * @method \Jdcloud\Result deleteNetworkSecurityGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteNetworkSecurityGroupAsync(array $args = [])
 * @method \Jdcloud\Result addNetworkSecurityGroupRules(array $args = [])
 * @method \GuzzleHttp\Promise\Promise addNetworkSecurityGroupRulesAsync(array $args = [])
 * @method \Jdcloud\Result removeNetworkSecurityGroupRules(array $args = [])
 * @method \GuzzleHttp\Promise\Promise removeNetworkSecurityGroupRulesAsync(array $args = [])
 * @method \Jdcloud\Result modifyNetworkSecurityGroupRules(array $args = [])
 * @method \GuzzleHttp\Promise\Promise modifyNetworkSecurityGroupRulesAsync(array $args = [])
 * @method \Jdcloud\Result describeNetworkSecurityGroupRules(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeNetworkSecurityGroupRulesAsync(array $args = [])
 * @method \Jdcloud\Result describeQuota(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeQuotaAsync(array $args = [])
 * @method \Jdcloud\Result describeRouteTables(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeRouteTablesAsync(array $args = [])
 * @method \Jdcloud\Result createRouteTable(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createRouteTableAsync(array $args = [])
 * @method \Jdcloud\Result describeRouteTable(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeRouteTableAsync(array $args = [])
 * @method \Jdcloud\Result modifyRouteTable(array $args = [])
 * @method \GuzzleHttp\Promise\Promise modifyRouteTableAsync(array $args = [])
 * @method \Jdcloud\Result deleteRouteTable(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteRouteTableAsync(array $args = [])
 * @method \Jdcloud\Result addRouteTableRules(array $args = [])
 * @method \GuzzleHttp\Promise\Promise addRouteTableRulesAsync(array $args = [])
 * @method \Jdcloud\Result removeRouteTableRules(array $args = [])
 * @method \GuzzleHttp\Promise\Promise removeRouteTableRulesAsync(array $args = [])
 * @method \Jdcloud\Result modifyRouteTableRules(array $args = [])
 * @method \GuzzleHttp\Promise\Promise modifyRouteTableRulesAsync(array $args = [])
 * @method \Jdcloud\Result associateRouteTable(array $args = [])
 * @method \GuzzleHttp\Promise\Promise associateRouteTableAsync(array $args = [])
 * @method \Jdcloud\Result disassociateRouteTable(array $args = [])
 * @method \GuzzleHttp\Promise\Promise disassociateRouteTableAsync(array $args = [])
 * @method \Jdcloud\Result describeRouteTableRules(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeRouteTableRulesAsync(array $args = [])
 * @method \Jdcloud\Result describeEdgeIpProviders(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeEdgeIpProvidersAsync(array $args = [])
 * @method \Jdcloud\Result describeSubnets(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeSubnetsAsync(array $args = [])
 * @method \Jdcloud\Result createSubnet(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createSubnetAsync(array $args = [])
 * @method \Jdcloud\Result describeSubnet(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeSubnetAsync(array $args = [])
 * @method \Jdcloud\Result modifySubnet(array $args = [])
 * @method \GuzzleHttp\Promise\Promise modifySubnetAsync(array $args = [])
 * @method \Jdcloud\Result deleteSubnet(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteSubnetAsync(array $args = [])
 * @method \Jdcloud\Result describeSubnetCidrIps(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeSubnetCidrIpsAsync(array $args = [])
 * @method \Jdcloud\Result describeVpcs(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeVpcsAsync(array $args = [])
 * @method \Jdcloud\Result createVpc(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createVpcAsync(array $args = [])
 * @method \Jdcloud\Result describeVpc(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeVpcAsync(array $args = [])
 * @method \Jdcloud\Result modifyVpc(array $args = [])
 * @method \GuzzleHttp\Promise\Promise modifyVpcAsync(array $args = [])
 * @method \Jdcloud\Result deleteVpc(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteVpcAsync(array $args = [])
 * @method \Jdcloud\Result describeVpcPeerings(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeVpcPeeringsAsync(array $args = [])
 * @method \Jdcloud\Result createVpcPeering(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createVpcPeeringAsync(array $args = [])
 * @method \Jdcloud\Result describeVpcPeering(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeVpcPeeringAsync(array $args = [])
 * @method \Jdcloud\Result modifyVpcPeering(array $args = [])
 * @method \GuzzleHttp\Promise\Promise modifyVpcPeeringAsync(array $args = [])
 * @method \Jdcloud\Result deleteVpcPeering(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteVpcPeeringAsync(array $args = [])
 * @method \Jdcloud\Result createVpcPolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createVpcPolicyAsync(array $args = [])
 * @method \Jdcloud\Result describeVpcPolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeVpcPolicyAsync(array $args = [])
 * @method \Jdcloud\Result modifyVpcPolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise modifyVpcPolicyAsync(array $args = [])
 * @method \Jdcloud\Result deleteVpcPolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteVpcPolicyAsync(array $args = [])
 */
class VpcClient extends JdCloudClient
{
    public function __construct(array $args)
    {
        $args['with_resolved'] = function (array $args) {
            $this->getHandlerList()->appendInit(
                PresignUrlMiddleware::wrap(
                    $this,
                    $args['endpoint_provider'],
                    [
                        'operations' => [
                        ],
                        'service' => 'vpc',
                        'presign_param' => 'PresignedUrl',
                    ]
                ),
                'vpc'
            );
        };

        parent::__construct($args);
    }
}