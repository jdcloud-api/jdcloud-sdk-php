<?php
/**
 * Jdfusion
 *
 * @category Jdcloud
 * @package  Jdcloud\Jdfusion
 * @author   Jdcloud <jdcloud-api@jd.com>
 * @license  Apache-2.0 http://www.apache.org/licenses/LICENSE-2.0
 * @link     https://www.jdcloud.com/help/faq
 */

namespace Jdcloud\Jdfusion;

use Jdcloud\JdCloudClient;
use Jdcloud\Api\Service;
use Jdcloud\Api\DocModel;
use Jdcloud\Api\ApiProvider;
use Jdcloud\PresignUrlMiddleware;

/**
 * Client used to interact with jdfusion.
 *
 * @method \Jdcloud\Result getCloudInfos(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getCloudInfosAsync(array $args = [])
 * @method \Jdcloud\Result registCloudInfo(array $args = [])
 * @method \GuzzleHttp\Promise\Promise registCloudInfoAsync(array $args = [])
 * @method \Jdcloud\Result getCloudInfoById(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getCloudInfoByIdAsync(array $args = [])
 * @method \Jdcloud\Result unregistCloudInfo(array $args = [])
 * @method \GuzzleHttp\Promise\Promise unregistCloudInfoAsync(array $args = [])
 * @method \Jdcloud\Result getDisks(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getDisksAsync(array $args = [])
 * @method \Jdcloud\Result createDisk(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createDiskAsync(array $args = [])
 * @method \Jdcloud\Result getDiskById(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getDiskByIdAsync(array $args = [])
 * @method \Jdcloud\Result removeDiskById(array $args = [])
 * @method \GuzzleHttp\Promise\Promise removeDiskByIdAsync(array $args = [])
 * @method \Jdcloud\Result attachDiskToVmInstanceByDiskId(array $args = [])
 * @method \GuzzleHttp\Promise\Promise attachDiskToVmInstanceByDiskIdAsync(array $args = [])
 * @method \Jdcloud\Result detachDiskToVmInstanceByDiskId(array $args = [])
 * @method \GuzzleHttp\Promise\Promise detachDiskToVmInstanceByDiskIdAsync(array $args = [])
 * @method \Jdcloud\Result getTaskInfoHistoryById(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getTaskInfoHistoryByIdAsync(array $args = [])
 * @method \Jdcloud\Result getTaskInfoById(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getTaskInfoByIdAsync(array $args = [])
 * @method \Jdcloud\Result getVmImages(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getVmImagesAsync(array $args = [])
 * @method \Jdcloud\Result getVmInstancesById(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getVmInstancesByIdAsync(array $args = [])
 * @method \Jdcloud\Result deleteVmInstanceById(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteVmInstanceByIdAsync(array $args = [])
 * @method \Jdcloud\Result getVmInstances(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getVmInstancesAsync(array $args = [])
 * @method \Jdcloud\Result createVmInstance(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createVmInstanceAsync(array $args = [])
 * @method \Jdcloud\Result stopVmInstanceById(array $args = [])
 * @method \GuzzleHttp\Promise\Promise stopVmInstanceByIdAsync(array $args = [])
 * @method \Jdcloud\Result startVmInstanceById(array $args = [])
 * @method \GuzzleHttp\Promise\Promise startVmInstanceByIdAsync(array $args = [])
 * @method \Jdcloud\Result rebootVmInstanceById(array $args = [])
 * @method \GuzzleHttp\Promise\Promise rebootVmInstanceByIdAsync(array $args = [])
 * @method \Jdcloud\Result getVmInstanceTypes(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getVmInstanceTypesAsync(array $args = [])
 * @method \Jdcloud\Result getVmKeypairsByName(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getVmKeypairsByNameAsync(array $args = [])
 * @method \Jdcloud\Result deleteVmKeypairByName(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteVmKeypairByNameAsync(array $args = [])
 * @method \Jdcloud\Result getVmKeypairs(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getVmKeypairsAsync(array $args = [])
 * @method \Jdcloud\Result createVmKeypair(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createVmKeypairAsync(array $args = [])
 * @method \Jdcloud\Result getVpcEips(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getVpcEipsAsync(array $args = [])
 * @method \Jdcloud\Result createVpcEip(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createVpcEipAsync(array $args = [])
 * @method \Jdcloud\Result getVpcEipById(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getVpcEipByIdAsync(array $args = [])
 * @method \Jdcloud\Result deleteVpcEipById(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteVpcEipByIdAsync(array $args = [])
 * @method \Jdcloud\Result associateVpcEipById(array $args = [])
 * @method \GuzzleHttp\Promise\Promise associateVpcEipByIdAsync(array $args = [])
 * @method \Jdcloud\Result disassociateVpcEipById(array $args = [])
 * @method \GuzzleHttp\Promise\Promise disassociateVpcEipByIdAsync(array $args = [])
 * @method \Jdcloud\Result createVpcLBHttpListener(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createVpcLBHttpListenerAsync(array $args = [])
 * @method \Jdcloud\Result getVpcNetworkInterfaceById(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getVpcNetworkInterfaceByIdAsync(array $args = [])
 * @method \Jdcloud\Result deleteVpcNetworkInterfaceById(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteVpcNetworkInterfaceByIdAsync(array $args = [])
 * @method \Jdcloud\Result getVpcNetworkInterfaces(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getVpcNetworkInterfacesAsync(array $args = [])
 * @method \Jdcloud\Result createVpcNetworkInterface(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createVpcNetworkInterfaceAsync(array $args = [])
 * @method \Jdcloud\Result attachVpcNetworkInterfaceById(array $args = [])
 * @method \GuzzleHttp\Promise\Promise attachVpcNetworkInterfaceByIdAsync(array $args = [])
 * @method \Jdcloud\Result detachVpcNetworkInterfaceById(array $args = [])
 * @method \GuzzleHttp\Promise\Promise detachVpcNetworkInterfaceByIdAsync(array $args = [])
 * @method \Jdcloud\Result getVpcSecurityGroupById(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getVpcSecurityGroupByIdAsync(array $args = [])
 * @method \Jdcloud\Result deleteVpcSecurityGroupById(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteVpcSecurityGroupByIdAsync(array $args = [])
 * @method \Jdcloud\Result getVpcSecurityGroups(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getVpcSecurityGroupsAsync(array $args = [])
 * @method \Jdcloud\Result createVpcSecurityGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createVpcSecurityGroupAsync(array $args = [])
 * @method \Jdcloud\Result getVpcSlbById(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getVpcSlbByIdAsync(array $args = [])
 * @method \Jdcloud\Result deleteVpcSlbById(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteVpcSlbByIdAsync(array $args = [])
 * @method \Jdcloud\Result getVpcSlbs(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getVpcSlbsAsync(array $args = [])
 * @method \Jdcloud\Result createVpcSlb(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createVpcSlbAsync(array $args = [])
 * @method \Jdcloud\Result getVpcSubnetById(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getVpcSubnetByIdAsync(array $args = [])
 * @method \Jdcloud\Result deleteVpcSubnetById(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteVpcSubnetByIdAsync(array $args = [])
 * @method \Jdcloud\Result getVpcSubnets(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getVpcSubnetsAsync(array $args = [])
 * @method \Jdcloud\Result createVpcSubnet(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createVpcSubnetAsync(array $args = [])
 * @method \Jdcloud\Result getVpcById(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getVpcByIdAsync(array $args = [])
 * @method \Jdcloud\Result deleteVpcById(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteVpcByIdAsync(array $args = [])
 * @method \Jdcloud\Result getVpcs(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getVpcsAsync(array $args = [])
 * @method \Jdcloud\Result createVpc(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createVpcAsync(array $args = [])
 * @method \Jdcloud\Result getVpcVServerGroups(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getVpcVServerGroupsAsync(array $args = [])
 * @method \Jdcloud\Result createVpcVServerGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createVpcVServerGroupAsync(array $args = [])
 */
class JdfusionClient extends JdCloudClient
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
                        'service' => 'jdfusion',
                        'presign_param' => 'PresignedUrl',
                    ]
                ),
                'jdfusion'
            );
        };

        parent::__construct($args);
    }
}