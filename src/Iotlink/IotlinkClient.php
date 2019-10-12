<?php
/**
 * Iotlink
 *
 * @category Jdcloud
 * @package  Jdcloud\Iotlink
 * @author   Jdcloud <jdcloud-api@jd.com>
 * @license  Apache-2.0 http://www.apache.org/licenses/LICENSE-2.0
 * @link     https://www.jdcloud.com/help/faq
 */

namespace Jdcloud\Iotlink;

use Jdcloud\JdCloudClient;
use Jdcloud\Api\Service;
use Jdcloud\Api\DocModel;
use Jdcloud\Api\ApiProvider;
use Jdcloud\PresignUrlMiddleware;

/**
 * Client used to interact with iotlink.
 *
 * @method \Jdcloud\Result gprsStatus(array $args = [])
 * @method \GuzzleHttp\Promise\Promise gprsStatusAsync(array $args = [])
 * @method \Jdcloud\Result onOffStatus(array $args = [])
 * @method \GuzzleHttp\Promise\Promise onOffStatusAsync(array $args = [])
 * @method \Jdcloud\Result lifeStatus(array $args = [])
 * @method \GuzzleHttp\Promise\Promise lifeStatusAsync(array $args = [])
 * @method \Jdcloud\Result gprsRealtimeInfo(array $args = [])
 * @method \GuzzleHttp\Promise\Promise gprsRealtimeInfoAsync(array $args = [])
 * @method \Jdcloud\Result openIotCard(array $args = [])
 * @method \GuzzleHttp\Promise\Promise openIotCardAsync(array $args = [])
 * @method \Jdcloud\Result closeIotCard(array $args = [])
 * @method \GuzzleHttp\Promise\Promise closeIotCardAsync(array $args = [])
 * @method \Jdcloud\Result openIotFlow(array $args = [])
 * @method \GuzzleHttp\Promise\Promise openIotFlowAsync(array $args = [])
 * @method \Jdcloud\Result closeIotFlow(array $args = [])
 * @method \GuzzleHttp\Promise\Promise closeIotFlowAsync(array $args = [])
 */
class IotlinkClient extends JdCloudClient
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
                        'service' => 'iotlink',
                        'presign_param' => 'PresignedUrl',
                    ]
                ),
                'iotlink'
            );
        };

        parent::__construct($args);
    }
}