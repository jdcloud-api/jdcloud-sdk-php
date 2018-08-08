<?php
/**
 * Baseanti
 *
 * @category Jdcloud
 * @package  Jdcloud\Baseanti
 * @author   Jdcloud <jdcloud-api@jd.com>
 * @license  Apache-2.0 http://www.apache.org/licenses/LICENSE-2.0
 * @link     https://www.jdcloud.com/help/faq
 */

namespace Jdcloud\Baseanti;

use Jdcloud\JdCloudClient;
use Jdcloud\Api\Service;
use Jdcloud\Api\DocModel;
use Jdcloud\Api\ApiProvider;
use Jdcloud\PresignUrlMiddleware;

/**
 * Client used to interact with baseanti.
 *
 * @method \Jdcloud\Result describeIpResources(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeIpResourcesAsync(array $args = [])
 * @method \Jdcloud\Result describeIpResourceInfo(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeIpResourceInfoAsync(array $args = [])
 * @method \Jdcloud\Result setCleanThreshold(array $args = [])
 * @method \GuzzleHttp\Promise\Promise setCleanThresholdAsync(array $args = [])
 * @method \Jdcloud\Result describeIpResourceProtectInfo(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeIpResourceProtectInfoAsync(array $args = [])
 * @method \Jdcloud\Result describeIpResourceFlow(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeIpResourceFlowAsync(array $args = [])
 */
class BaseantiClient extends JdCloudClient
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
                        'service' => 'baseanti',
                        'presign_param' => 'PresignedUrl',
                    ]
                ),
                'baseanti'
            );
        };

        parent::__construct($args);
    }
}