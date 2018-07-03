<?php
namespace Jdcloud\Vpc;

use Jdcloud\JdcloudClient;
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
 * @method \Jdcloud\Result describeNetworkSecurityGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeNetworkSecurityGroupAsync(array $args = [])
 * @method \Jdcloud\Result describeSubnets(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeSubnetsAsync(array $args = [])
 * @method \Jdcloud\Result describeSubnet(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeSubnetAsync(array $args = [])
 * @method \Jdcloud\Result describeVpcs(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeVpcsAsync(array $args = [])
 * @method \Jdcloud\Result describeVpc(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeVpcAsync(array $args = [])
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
class VpcClient extends JdcloudClient
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