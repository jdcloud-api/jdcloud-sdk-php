<?php
/**
 * Cps
 *
 * @category Jdcloud
 * @package  Jdcloud\Cps
 * @author   Jdcloud <jdcloud-api@jd.com>
 * @license  Apache-2.0 http://www.apache.org/licenses/LICENSE-2.0
 * @link     https://www.jdcloud.com/help/faq
 */

namespace Jdcloud\Cps;

use Jdcloud\JdCloudClient;
use Jdcloud\Api\Service;
use Jdcloud\Api\DocModel;
use Jdcloud\Api\ApiProvider;
use Jdcloud\PresignUrlMiddleware;

/**
 * Client used to interact with cps.
 *
 * @method \Jdcloud\Result describeAliasIps(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeAliasIpsAsync(array $args = [])
 * @method \Jdcloud\Result createAliasIp(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createAliasIpAsync(array $args = [])
 * @method \Jdcloud\Result deleteAliasIp(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteAliasIpAsync(array $args = [])
 * @method \Jdcloud\Result describeElasticIps(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeElasticIpsAsync(array $args = [])
 * @method \Jdcloud\Result applyElasticIps(array $args = [])
 * @method \GuzzleHttp\Promise\Promise applyElasticIpsAsync(array $args = [])
 * @method \Jdcloud\Result describeElasticIp(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeElasticIpAsync(array $args = [])
 * @method \Jdcloud\Result modifyElasticIpBandwidth(array $args = [])
 * @method \GuzzleHttp\Promise\Promise modifyElasticIpBandwidthAsync(array $args = [])
 * @method \Jdcloud\Result describeDeviceTypes(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeDeviceTypesAsync(array $args = [])
 * @method \Jdcloud\Result describeOS(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeOSAsync(array $args = [])
 * @method \Jdcloud\Result describeDeviceRaids(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeDeviceRaidsAsync(array $args = [])
 * @method \Jdcloud\Result describeInstance(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeInstanceAsync(array $args = [])
 * @method \Jdcloud\Result describeInstances(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeInstancesAsync(array $args = [])
 * @method \Jdcloud\Result createInstances(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createInstancesAsync(array $args = [])
 * @method \Jdcloud\Result describeInstanceName(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeInstanceNameAsync(array $args = [])
 * @method \Jdcloud\Result assignIpv6Address(array $args = [])
 * @method \GuzzleHttp\Promise\Promise assignIpv6AddressAsync(array $args = [])
 * @method \Jdcloud\Result modifyInstance(array $args = [])
 * @method \GuzzleHttp\Promise\Promise modifyInstanceAsync(array $args = [])
 * @method \Jdcloud\Result describeInstanceRaid(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeInstanceRaidAsync(array $args = [])
 * @method \Jdcloud\Result describeInstanceStatus(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeInstanceStatusAsync(array $args = [])
 * @method \Jdcloud\Result restartInstance(array $args = [])
 * @method \GuzzleHttp\Promise\Promise restartInstanceAsync(array $args = [])
 * @method \Jdcloud\Result stopInstance(array $args = [])
 * @method \GuzzleHttp\Promise\Promise stopInstanceAsync(array $args = [])
 * @method \Jdcloud\Result startInstance(array $args = [])
 * @method \GuzzleHttp\Promise\Promise startInstanceAsync(array $args = [])
 * @method \Jdcloud\Result reinstallInstance(array $args = [])
 * @method \GuzzleHttp\Promise\Promise reinstallInstanceAsync(array $args = [])
 * @method \Jdcloud\Result modifyBandwidth(array $args = [])
 * @method \GuzzleHttp\Promise\Promise modifyBandwidthAsync(array $args = [])
 * @method \Jdcloud\Result associateElasticIp(array $args = [])
 * @method \GuzzleHttp\Promise\Promise associateElasticIpAsync(array $args = [])
 * @method \Jdcloud\Result disassociateElasticIp(array $args = [])
 * @method \GuzzleHttp\Promise\Promise disassociateElasticIpAsync(array $args = [])
 * @method \Jdcloud\Result resetPassword(array $args = [])
 * @method \GuzzleHttp\Promise\Promise resetPasswordAsync(array $args = [])
 * @method \Jdcloud\Result describeAvailablePrivateIp(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeAvailablePrivateIpAsync(array $args = [])
 * @method \Jdcloud\Result describeInstanceMonitorInfo(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeInstanceMonitorInfoAsync(array $args = [])
 * @method \Jdcloud\Result describeEventLogs(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeEventLogsAsync(array $args = [])
 * @method \Jdcloud\Result describeIpv6Address(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeIpv6AddressAsync(array $args = [])
 * @method \Jdcloud\Result describeIpv6Addresses(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeIpv6AddressesAsync(array $args = [])
 * @method \Jdcloud\Result assignIpv6AddressesBandwidth(array $args = [])
 * @method \GuzzleHttp\Promise\Promise assignIpv6AddressesBandwidthAsync(array $args = [])
 * @method \Jdcloud\Result modifyIpv6AddressBandwidth(array $args = [])
 * @method \GuzzleHttp\Promise\Promise modifyIpv6AddressBandwidthAsync(array $args = [])
 * @method \Jdcloud\Result describeIpv6Gateways(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeIpv6GatewaysAsync(array $args = [])
 * @method \Jdcloud\Result describeIpv6Gateway(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeIpv6GatewayAsync(array $args = [])
 * @method \Jdcloud\Result modifyIpv6Gateway(array $args = [])
 * @method \GuzzleHttp\Promise\Promise modifyIpv6GatewayAsync(array $args = [])
 * @method \Jdcloud\Result describeKeypairs(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeKeypairsAsync(array $args = [])
 * @method \Jdcloud\Result createKeypairs(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createKeypairsAsync(array $args = [])
 * @method \Jdcloud\Result importKeypairs(array $args = [])
 * @method \GuzzleHttp\Promise\Promise importKeypairsAsync(array $args = [])
 * @method \Jdcloud\Result describeKeypair(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeKeypairAsync(array $args = [])
 * @method \Jdcloud\Result deleteKeypairs(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteKeypairsAsync(array $args = [])
 * @method \Jdcloud\Result describeListeners(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeListenersAsync(array $args = [])
 * @method \Jdcloud\Result createListener(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createListenerAsync(array $args = [])
 * @method \Jdcloud\Result modifyListener(array $args = [])
 * @method \GuzzleHttp\Promise\Promise modifyListenerAsync(array $args = [])
 * @method \Jdcloud\Result describeListener(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeListenerAsync(array $args = [])
 * @method \Jdcloud\Result deleteListener(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteListenerAsync(array $args = [])
 * @method \Jdcloud\Result startListener(array $args = [])
 * @method \GuzzleHttp\Promise\Promise startListenerAsync(array $args = [])
 * @method \Jdcloud\Result stopListener(array $args = [])
 * @method \GuzzleHttp\Promise\Promise stopListenerAsync(array $args = [])
 * @method \Jdcloud\Result describeLoadBalancers(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeLoadBalancersAsync(array $args = [])
 * @method \Jdcloud\Result createLoadBalancer(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createLoadBalancerAsync(array $args = [])
 * @method \Jdcloud\Result modifyLoadBalancer(array $args = [])
 * @method \GuzzleHttp\Promise\Promise modifyLoadBalancerAsync(array $args = [])
 * @method \Jdcloud\Result describeLoadBalancer(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeLoadBalancerAsync(array $args = [])
 * @method \Jdcloud\Result startLoadBalancer(array $args = [])
 * @method \GuzzleHttp\Promise\Promise startLoadBalancerAsync(array $args = [])
 * @method \Jdcloud\Result stopLoadBalancer(array $args = [])
 * @method \GuzzleHttp\Promise\Promise stopLoadBalancerAsync(array $args = [])
 * @method \Jdcloud\Result associateElasticIpLB(array $args = [])
 * @method \GuzzleHttp\Promise\Promise associateElasticIpLBAsync(array $args = [])
 * @method \Jdcloud\Result disassociateElasticIpLB(array $args = [])
 * @method \GuzzleHttp\Promise\Promise disassociateElasticIpLBAsync(array $args = [])
 * @method \Jdcloud\Result describeRegiones(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeRegionesAsync(array $args = [])
 * @method \Jdcloud\Result describeCPSLBRegions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeCPSLBRegionsAsync(array $args = [])
 * @method \Jdcloud\Result describeRouteTable(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeRouteTableAsync(array $args = [])
 * @method \Jdcloud\Result describeRouteTables(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeRouteTablesAsync(array $args = [])
 * @method \Jdcloud\Result describeSecondaryCidrs(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeSecondaryCidrsAsync(array $args = [])
 * @method \Jdcloud\Result createSecondaryCidr(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createSecondaryCidrAsync(array $args = [])
 * @method \Jdcloud\Result deleteSecondaryCidr(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteSecondaryCidrAsync(array $args = [])
 * @method \Jdcloud\Result describeServers(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeServersAsync(array $args = [])
 * @method \Jdcloud\Result addServers(array $args = [])
 * @method \GuzzleHttp\Promise\Promise addServersAsync(array $args = [])
 * @method \Jdcloud\Result modifyServer(array $args = [])
 * @method \GuzzleHttp\Promise\Promise modifyServerAsync(array $args = [])
 * @method \Jdcloud\Result removeServer(array $args = [])
 * @method \GuzzleHttp\Promise\Promise removeServerAsync(array $args = [])
 * @method \Jdcloud\Result describeServerGroups(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeServerGroupsAsync(array $args = [])
 * @method \Jdcloud\Result createServerGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createServerGroupAsync(array $args = [])
 * @method \Jdcloud\Result describeServerGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeServerGroupAsync(array $args = [])
 * @method \Jdcloud\Result modifyServerGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise modifyServerGroupAsync(array $args = [])
 * @method \Jdcloud\Result deleteServerGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteServerGroupAsync(array $args = [])
 * @method \Jdcloud\Result describeBasicSubnet(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeBasicSubnetAsync(array $args = [])
 * @method \Jdcloud\Result describeSubnets(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeSubnetsAsync(array $args = [])
 * @method \Jdcloud\Result createSubnet(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createSubnetAsync(array $args = [])
 * @method \Jdcloud\Result assignIpv6Cidr(array $args = [])
 * @method \GuzzleHttp\Promise\Promise assignIpv6CidrAsync(array $args = [])
 * @method \Jdcloud\Result describeSubnet(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeSubnetAsync(array $args = [])
 * @method \Jdcloud\Result modifySubnet(array $args = [])
 * @method \GuzzleHttp\Promise\Promise modifySubnetAsync(array $args = [])
 * @method \Jdcloud\Result deleteSubnet(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteSubnetAsync(array $args = [])
 * @method \Jdcloud\Result describeVpc(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeVpcAsync(array $args = [])
 * @method \Jdcloud\Result modifyVpc(array $args = [])
 * @method \GuzzleHttp\Promise\Promise modifyVpcAsync(array $args = [])
 * @method \Jdcloud\Result deleteVpc(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteVpcAsync(array $args = [])
 * @method \Jdcloud\Result describeVpcs(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeVpcsAsync(array $args = [])
 * @method \Jdcloud\Result createVpc(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createVpcAsync(array $args = [])
 * @method \Jdcloud\Result assignIpv6Gateway(array $args = [])
 * @method \GuzzleHttp\Promise\Promise assignIpv6GatewayAsync(array $args = [])
 */
class CpsClient extends JdCloudClient
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
                        'service' => 'cps',
                        'presign_param' => 'PresignedUrl',
                    ]
                ),
                'cps'
            );
        };

        parent::__construct($args);
    }
}