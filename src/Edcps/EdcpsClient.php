<?php
/**
 * Edcps
 *
 * @category Jdcloud
 * @package  Jdcloud\Edcps
 * @author   Jdcloud <jdcloud-api@jd.com>
 * @license  Apache-2.0 http://www.apache.org/licenses/LICENSE-2.0
 * @link     https://www.jdcloud.com/help/faq
 */

namespace Jdcloud\Edcps;

use Jdcloud\JdCloudClient;
use Jdcloud\Api\Service;
use Jdcloud\Api\DocModel;
use Jdcloud\Api\ApiProvider;
use Jdcloud\PresignUrlMiddleware;

/**
 * Client used to interact with edcps.
 *
 * @method \Jdcloud\Result describeAliasIps(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeAliasIpsAsync(array $args = [])
 * @method \Jdcloud\Result createAliasIp(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createAliasIpAsync(array $args = [])
 * @method \Jdcloud\Result deleteAliasIp(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteAliasIpAsync(array $args = [])
 * @method \Jdcloud\Result describeBandwidthPackages(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeBandwidthPackagesAsync(array $args = [])
 * @method \Jdcloud\Result applyBandwidthPackages(array $args = [])
 * @method \GuzzleHttp\Promise\Promise applyBandwidthPackagesAsync(array $args = [])
 * @method \Jdcloud\Result describeBandwidthPackage(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeBandwidthPackageAsync(array $args = [])
 * @method \Jdcloud\Result modifyBandwidthPackage(array $args = [])
 * @method \GuzzleHttp\Promise\Promise modifyBandwidthPackageAsync(array $args = [])
 * @method \Jdcloud\Result deleteBandwidthPackage(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteBandwidthPackageAsync(array $args = [])
 * @method \Jdcloud\Result modifyBandwidthPackageBandwidth(array $args = [])
 * @method \GuzzleHttp\Promise\Promise modifyBandwidthPackageBandwidthAsync(array $args = [])
 * @method \Jdcloud\Result addBandwidthPackageIp(array $args = [])
 * @method \GuzzleHttp\Promise\Promise addBandwidthPackageIpAsync(array $args = [])
 * @method \Jdcloud\Result removeBandwidthPackageIp(array $args = [])
 * @method \GuzzleHttp\Promise\Promise removeBandwidthPackageIpAsync(array $args = [])
 * @method \Jdcloud\Result describeBandwidthPackageStock(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeBandwidthPackageStockAsync(array $args = [])
 * @method \Jdcloud\Result describeElasticIps(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeElasticIpsAsync(array $args = [])
 * @method \Jdcloud\Result applyElasticIps(array $args = [])
 * @method \GuzzleHttp\Promise\Promise applyElasticIpsAsync(array $args = [])
 * @method \Jdcloud\Result describeElasticIp(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeElasticIpAsync(array $args = [])
 * @method \Jdcloud\Result deleteelasticIp(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteelasticIpAsync(array $args = [])
 * @method \Jdcloud\Result modifyElasticIpBandwidth(array $args = [])
 * @method \GuzzleHttp\Promise\Promise modifyElasticIpBandwidthAsync(array $args = [])
 * @method \Jdcloud\Result describeElasticIpStock(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeElasticIpStockAsync(array $args = [])
 * @method \Jdcloud\Result describeDeviceTypes(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeDeviceTypesAsync(array $args = [])
 * @method \Jdcloud\Result describeOS(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeOSAsync(array $args = [])
 * @method \Jdcloud\Result describeDeviceRaids(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeDeviceRaidsAsync(array $args = [])
 * @method \Jdcloud\Result describeDeviceStock(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeDeviceStockAsync(array $args = [])
 * @method \Jdcloud\Result describeInstance(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeInstanceAsync(array $args = [])
 * @method \Jdcloud\Result deleteInstance(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteInstanceAsync(array $args = [])
 * @method \Jdcloud\Result describeInstances(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeInstancesAsync(array $args = [])
 * @method \Jdcloud\Result createInstances(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createInstancesAsync(array $args = [])
 * @method \Jdcloud\Result describeInstanceName(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeInstanceNameAsync(array $args = [])
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
 * @method \Jdcloud\Result associateElasticIp(array $args = [])
 * @method \GuzzleHttp\Promise\Promise associateElasticIpAsync(array $args = [])
 * @method \Jdcloud\Result disassociateElasticIp(array $args = [])
 * @method \GuzzleHttp\Promise\Promise disassociateElasticIpAsync(array $args = [])
 * @method \Jdcloud\Result resetPassword(array $args = [])
 * @method \GuzzleHttp\Promise\Promise resetPasswordAsync(array $args = [])
 * @method \Jdcloud\Result describeAvailablePrivateIp(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeAvailablePrivateIpAsync(array $args = [])
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
 * @method \Jdcloud\Result describeLineTypes(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeLineTypesAsync(array $args = [])
 * @method \Jdcloud\Result describeEdCPSRegions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeEdCPSRegionsAsync(array $args = [])
 * @method \Jdcloud\Result describeSecondaryCidrs(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeSecondaryCidrsAsync(array $args = [])
 * @method \Jdcloud\Result createSecondaryCidr(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createSecondaryCidrAsync(array $args = [])
 * @method \Jdcloud\Result deleteSecondaryCidr(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteSecondaryCidrAsync(array $args = [])
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
 */
class EdcpsClient extends JdCloudClient
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
                        'service' => 'edcps',
                        'presign_param' => 'PresignedUrl',
                    ]
                ),
                'edcps'
            );
        };

        parent::__construct($args);
    }
}