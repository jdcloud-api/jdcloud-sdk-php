<?php
/**
 * Streambus
 *
 * @category Jdcloud
 * @package  Jdcloud\Streambus
 * @author   Jdcloud <jdcloud-api@jd.com>
 * @license  Apache-2.0 http://www.apache.org/licenses/LICENSE-2.0
 * @link     https://www.jdcloud.com/help/faq
 */

namespace Jdcloud\Streambus;

use Jdcloud\JdcloudClient;
use Jdcloud\Api\Service;
use Jdcloud\Api\DocModel;
use Jdcloud\Api\ApiProvider;
use Jdcloud\PresignUrlMiddleware;

/**
 * Client used to interact with streambus.
 *
 * @method \Jdcloud\Result getTopicList(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getTopicListAsync(array $args = [])
 * @method \Jdcloud\Result addTopic(array $args = [])
 * @method \GuzzleHttp\Promise\Promise addTopicAsync(array $args = [])
 * @method \Jdcloud\Result updateTopic(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateTopicAsync(array $args = [])
 */
class StreambusClient extends JdcloudClient
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
                        'service' => 'streambus',
                        'presign_param' => 'PresignedUrl',
                    ]
                ),
                'streambus'
            );
        };

        parent::__construct($args);
    }
}