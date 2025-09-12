<?php
/**
 * Aicvm
 *
 * @category Jdcloud
 * @package  Jdcloud\Aicvm
 * @author   Jdcloud <jdcloud-api@jd.com>
 * @license  Apache-2.0 http://www.apache.org/licenses/LICENSE-2.0
 * @link     https://www.jdcloud.com/help/faq
 */

namespace Jdcloud\Aicvm;

use Jdcloud\JdCloudClient;
use Jdcloud\Api\Service;
use Jdcloud\Api\DocModel;
use Jdcloud\Api\ApiProvider;
use Jdcloud\PresignUrlMiddleware;

/**
 * Client used to interact with aicvm.
 *
 * @method \Jdcloud\Result describeFlavors(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeFlavorsAsync(array $args = [])
 * @method \Jdcloud\Result createInstance(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createInstanceAsync(array $args = [])
 * @method \Jdcloud\Result describeInstancesGPU(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeInstancesGPUAsync(array $args = [])
 * @method \Jdcloud\Result describeInstances(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeInstancesAsync(array $args = [])
 * @method \Jdcloud\Result describeInstance(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeInstanceAsync(array $args = [])
 * @method \Jdcloud\Result modifyInstance(array $args = [])
 * @method \GuzzleHttp\Promise\Promise modifyInstanceAsync(array $args = [])
 * @method \Jdcloud\Result deleteInstance(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteInstanceAsync(array $args = [])
 * @method \Jdcloud\Result describeInstancesHardwareFault(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeInstancesHardwareFaultAsync(array $args = [])
 * @method \Jdcloud\Result modifyPassword(array $args = [])
 * @method \GuzzleHttp\Promise\Promise modifyPasswordAsync(array $args = [])
 * @method \Jdcloud\Result rebootInstance(array $args = [])
 * @method \GuzzleHttp\Promise\Promise rebootInstanceAsync(array $args = [])
 * @method \Jdcloud\Result rebuildInstance(array $args = [])
 * @method \GuzzleHttp\Promise\Promise rebuildInstanceAsync(array $args = [])
 * @method \Jdcloud\Result startInstance(array $args = [])
 * @method \GuzzleHttp\Promise\Promise startInstanceAsync(array $args = [])
 * @method \Jdcloud\Result stopInstance(array $args = [])
 * @method \GuzzleHttp\Promise\Promise stopInstanceAsync(array $args = [])
 * @method \Jdcloud\Result createKeypair(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createKeypairAsync(array $args = [])
 * @method \Jdcloud\Result deleteKeypair(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteKeypairAsync(array $args = [])
 * @method \Jdcloud\Result attachKeypair(array $args = [])
 * @method \GuzzleHttp\Promise\Promise attachKeypairAsync(array $args = [])
 * @method \Jdcloud\Result detachKeypair(array $args = [])
 * @method \GuzzleHttp\Promise\Promise detachKeypairAsync(array $args = [])
 * @method \Jdcloud\Result describeKeypairs(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeKeypairsAsync(array $args = [])
 * @method \Jdcloud\Result describeImages(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeImagesAsync(array $args = [])
 * @method \Jdcloud\Result describeStocks(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeStocksAsync(array $args = [])
 */
class AicvmClient extends JdCloudClient
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
                        'service' => 'aicvm',
                        'presign_param' => 'PresignedUrl',
                    ]
                ),
                'aicvm'
            );
        };

        parent::__construct($args);
    }
}