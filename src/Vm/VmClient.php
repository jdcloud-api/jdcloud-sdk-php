<?php
/**
 * Vm
 *
 * @category Jdcloud
 * @package  Jdcloud\Vm
 * @author   Jdcloud <jdcloud-api@jd.com>
 * @license  Apache-2.0 http://www.apache.org/licenses/LICENSE-2.0
 * @link     https://www.jdcloud.com/help/faq
 */

namespace Jdcloud\Vm;

use Jdcloud\JdCloudClient;
use Jdcloud\Api\Service;
use Jdcloud\Api\DocModel;
use Jdcloud\Api\ApiProvider;
use Jdcloud\PresignUrlMiddleware;

/**
 * Client used to interact with vm.
 *
 * @method \Jdcloud\Result describeImage(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeImageAsync(array $args = [])
 * @method \Jdcloud\Result deleteImage(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteImageAsync(array $args = [])
 * @method \Jdcloud\Result describeImages(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeImagesAsync(array $args = [])
 * @method \Jdcloud\Result describeImageConstraints(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeImageConstraintsAsync(array $args = [])
 * @method \Jdcloud\Result describeImageConstraintsBatch(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeImageConstraintsBatchAsync(array $args = [])
 * @method \Jdcloud\Result shareImage(array $args = [])
 * @method \GuzzleHttp\Promise\Promise shareImageAsync(array $args = [])
 * @method \Jdcloud\Result unShareImage(array $args = [])
 * @method \GuzzleHttp\Promise\Promise unShareImageAsync(array $args = [])
 * @method \Jdcloud\Result releaseImage(array $args = [])
 * @method \GuzzleHttp\Promise\Promise releaseImageAsync(array $args = [])
 * @method \Jdcloud\Result unReleaseImage(array $args = [])
 * @method \GuzzleHttp\Promise\Promise unReleaseImageAsync(array $args = [])
 * @method \Jdcloud\Result describeImageMembers(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeImageMembersAsync(array $args = [])
 * @method \Jdcloud\Result copyImages(array $args = [])
 * @method \GuzzleHttp\Promise\Promise copyImagesAsync(array $args = [])
 * @method \Jdcloud\Result modifyImageAttribute(array $args = [])
 * @method \GuzzleHttp\Promise\Promise modifyImageAttributeAsync(array $args = [])
 * @method \Jdcloud\Result importImage(array $args = [])
 * @method \GuzzleHttp\Promise\Promise importImageAsync(array $args = [])
 * @method \Jdcloud\Result exportImage(array $args = [])
 * @method \GuzzleHttp\Promise\Promise exportImageAsync(array $args = [])
 * @method \Jdcloud\Result imageTasks(array $args = [])
 * @method \GuzzleHttp\Promise\Promise imageTasksAsync(array $args = [])
 * @method \Jdcloud\Result describeInstances(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeInstancesAsync(array $args = [])
 * @method \Jdcloud\Result createInstances(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createInstancesAsync(array $args = [])
 * @method \Jdcloud\Result describeBriefInstances(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeBriefInstancesAsync(array $args = [])
 * @method \Jdcloud\Result describeInstance(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeInstanceAsync(array $args = [])
 * @method \Jdcloud\Result deleteInstance(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteInstanceAsync(array $args = [])
 * @method \Jdcloud\Result describeInstanceStatus(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeInstanceStatusAsync(array $args = [])
 * @method \Jdcloud\Result describeInstancePrivateIpAddress(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeInstancePrivateIpAddressAsync(array $args = [])
 * @method \Jdcloud\Result stopInstance(array $args = [])
 * @method \GuzzleHttp\Promise\Promise stopInstanceAsync(array $args = [])
 * @method \Jdcloud\Result startInstance(array $args = [])
 * @method \GuzzleHttp\Promise\Promise startInstanceAsync(array $args = [])
 * @method \Jdcloud\Result rebootInstance(array $args = [])
 * @method \GuzzleHttp\Promise\Promise rebootInstanceAsync(array $args = [])
 * @method \Jdcloud\Result attachNetworkInterface(array $args = [])
 * @method \GuzzleHttp\Promise\Promise attachNetworkInterfaceAsync(array $args = [])
 * @method \Jdcloud\Result detachNetworkInterface(array $args = [])
 * @method \GuzzleHttp\Promise\Promise detachNetworkInterfaceAsync(array $args = [])
 * @method \Jdcloud\Result modifyInstanceNetworkAttribute(array $args = [])
 * @method \GuzzleHttp\Promise\Promise modifyInstanceNetworkAttributeAsync(array $args = [])
 * @method \Jdcloud\Result associateElasticIp(array $args = [])
 * @method \GuzzleHttp\Promise\Promise associateElasticIpAsync(array $args = [])
 * @method \Jdcloud\Result disassociateElasticIp(array $args = [])
 * @method \GuzzleHttp\Promise\Promise disassociateElasticIpAsync(array $args = [])
 * @method \Jdcloud\Result createImage(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createImageAsync(array $args = [])
 * @method \Jdcloud\Result attachDisk(array $args = [])
 * @method \GuzzleHttp\Promise\Promise attachDiskAsync(array $args = [])
 * @method \Jdcloud\Result detachDisk(array $args = [])
 * @method \GuzzleHttp\Promise\Promise detachDiskAsync(array $args = [])
 * @method \Jdcloud\Result modifyInstanceDiskAttribute(array $args = [])
 * @method \GuzzleHttp\Promise\Promise modifyInstanceDiskAttributeAsync(array $args = [])
 * @method \Jdcloud\Result modifyInstanceAttribute(array $args = [])
 * @method \GuzzleHttp\Promise\Promise modifyInstanceAttributeAsync(array $args = [])
 * @method \Jdcloud\Result modifyInstanceVpcAttribute(array $args = [])
 * @method \GuzzleHttp\Promise\Promise modifyInstanceVpcAttributeAsync(array $args = [])
 * @method \Jdcloud\Result modifyInstancePassword(array $args = [])
 * @method \GuzzleHttp\Promise\Promise modifyInstancePasswordAsync(array $args = [])
 * @method \Jdcloud\Result describeInstanceVncUrl(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeInstanceVncUrlAsync(array $args = [])
 * @method \Jdcloud\Result resizeInstance(array $args = [])
 * @method \GuzzleHttp\Promise\Promise resizeInstanceAsync(array $args = [])
 * @method \Jdcloud\Result rebuildInstance(array $args = [])
 * @method \GuzzleHttp\Promise\Promise rebuildInstanceAsync(array $args = [])
 * @method \Jdcloud\Result describeInstancesCustomData(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeInstancesCustomDataAsync(array $args = [])
 * @method \Jdcloud\Result modifyInstancePlacement(array $args = [])
 * @method \GuzzleHttp\Promise\Promise modifyInstancePlacementAsync(array $args = [])
 * @method \Jdcloud\Result describeInstanceTemplates(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeInstanceTemplatesAsync(array $args = [])
 * @method \Jdcloud\Result createInstanceTemplate(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createInstanceTemplateAsync(array $args = [])
 * @method \Jdcloud\Result describeInstanceTemplate(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeInstanceTemplateAsync(array $args = [])
 * @method \Jdcloud\Result updateInstanceTemplate(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateInstanceTemplateAsync(array $args = [])
 * @method \Jdcloud\Result deleteInstanceTemplate(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteInstanceTemplateAsync(array $args = [])
 * @method \Jdcloud\Result verifyInstanceTemplate(array $args = [])
 * @method \GuzzleHttp\Promise\Promise verifyInstanceTemplateAsync(array $args = [])
 * @method \Jdcloud\Result describeInstanceTemplatesCustomdata(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeInstanceTemplatesCustomdataAsync(array $args = [])
 * @method \Jdcloud\Result describeInstanceTypes(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeInstanceTypesAsync(array $args = [])
 * @method \Jdcloud\Result describeKeypairs(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeKeypairsAsync(array $args = [])
 * @method \Jdcloud\Result createKeypair(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createKeypairAsync(array $args = [])
 * @method \Jdcloud\Result importKeypair(array $args = [])
 * @method \GuzzleHttp\Promise\Promise importKeypairAsync(array $args = [])
 * @method \Jdcloud\Result deleteKeypair(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteKeypairAsync(array $args = [])
 * @method \Jdcloud\Result attachKeypair(array $args = [])
 * @method \GuzzleHttp\Promise\Promise attachKeypairAsync(array $args = [])
 * @method \Jdcloud\Result detachKeypair(array $args = [])
 * @method \GuzzleHttp\Promise\Promise detachKeypairAsync(array $args = [])
 * @method \Jdcloud\Result describeQuotas(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeQuotasAsync(array $args = [])
 */
class VmClient extends JdCloudClient
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
                        'service' => 'vm',
                        'presign_param' => 'PresignedUrl',
                    ]
                ),
                'vm'
            );
        };

        parent::__construct($args);
    }
}