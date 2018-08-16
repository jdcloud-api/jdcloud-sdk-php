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
 * @method \Jdcloud\Result describeElasticIps(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeElasticIpsAsync(array $args = [])
 * @method \Jdcloud\Result createElasticIps(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createElasticIpsAsync(array $args = [])
 * @method \Jdcloud\Result describeElasticIp(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeElasticIpAsync(array $args = [])
 * @method \Jdcloud\Result deleteElasticIp(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteElasticIpAsync(array $args = [])
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
 * @method \Jdcloud\Result disassociateRouteTable(array $args = [])
 * @method \GuzzleHttp\Promise\Promise disassociateRouteTableAsync(array $args = [])
 * @method \Jdcloud\Result describeSubnets(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeSubnetsAsync(array $args = [])
 * @method \Jdcloud\Result describeSubnet(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeSubnetAsync(array $args = [])
 * @method \Jdcloud\Result describeVpcs(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeVpcsAsync(array $args = [])
 * @method \Jdcloud\Result createVpc(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createVpcAsync(array $args = [])
 * @method \Jdcloud\Result describeVpc(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeVpcAsync(array $args = [])
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