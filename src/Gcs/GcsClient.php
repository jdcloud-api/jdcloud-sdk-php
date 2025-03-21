<?php
/**
 * Gcs
 *
 * @category Jdcloud
 * @package  Jdcloud\Gcs
 * @author   Jdcloud <jdcloud-api@jd.com>
 * @license  Apache-2.0 http://www.apache.org/licenses/LICENSE-2.0
 * @link     https://www.jdcloud.com/help/faq
 */

namespace Jdcloud\Gcs;

use Jdcloud\JdCloudClient;
use Jdcloud\Api\Service;
use Jdcloud\Api\DocModel;
use Jdcloud\Api\ApiProvider;
use Jdcloud\PresignUrlMiddleware;

/**
 * Client used to interact with gcs.
 *
 * @method \Jdcloud\Result describeArts(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeArtsAsync(array $args = [])
 * @method \Jdcloud\Result describeArt(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeArtAsync(array $args = [])
 * @method \Jdcloud\Result modifyInstance(array $args = [])
 * @method \GuzzleHttp\Promise\Promise modifyInstanceAsync(array $args = [])
 * @method \Jdcloud\Result createInstances(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createInstancesAsync(array $args = [])
 * @method \Jdcloud\Result describeInstances(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeInstancesAsync(array $args = [])
 * @method \Jdcloud\Result describeInstance(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeInstanceAsync(array $args = [])
 * @method \Jdcloud\Result deleteInstance(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteInstanceAsync(array $args = [])
 * @method \Jdcloud\Result startInstance(array $args = [])
 * @method \GuzzleHttp\Promise\Promise startInstanceAsync(array $args = [])
 * @method \Jdcloud\Result stopInstance(array $args = [])
 * @method \GuzzleHttp\Promise\Promise stopInstanceAsync(array $args = [])
 * @method \Jdcloud\Result modifyInstanceSpec(array $args = [])
 * @method \GuzzleHttp\Promise\Promise modifyInstanceSpecAsync(array $args = [])
 * @method \Jdcloud\Result stopInstanceTimer(array $args = [])
 * @method \GuzzleHttp\Promise\Promise stopInstanceTimerAsync(array $args = [])
 * @method \Jdcloud\Result stopInstanceTimerCancle(array $args = [])
 * @method \GuzzleHttp\Promise\Promise stopInstanceTimerCancleAsync(array $args = [])
 * @method \Jdcloud\Result modifyInstanceSecret(array $args = [])
 * @method \GuzzleHttp\Promise\Promise modifyInstanceSecretAsync(array $args = [])
 * @method \Jdcloud\Result modifyInstanceImage(array $args = [])
 * @method \GuzzleHttp\Promise\Promise modifyInstanceImageAsync(array $args = [])
 * @method \Jdcloud\Result describeOrderInfos(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeOrderInfosAsync(array $args = [])
 * @method \Jdcloud\Result describeRegions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeRegionsAsync(array $args = [])
 * @method \Jdcloud\Result describeStock(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeStockAsync(array $args = [])
 * @method \Jdcloud\Result modifyNetDisk(array $args = [])
 * @method \GuzzleHttp\Promise\Promise modifyNetDiskAsync(array $args = [])
 * @method \Jdcloud\Result describeNetDisk(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeNetDiskAsync(array $args = [])
 */
class GcsClient extends JdCloudClient
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
                        'service' => 'gcs',
                        'presign_param' => 'PresignedUrl',
                    ]
                ),
                'gcs'
            );
        };

        parent::__construct($args);
    }
}