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

use Jdcloud\JdCloudClient;
use Jdcloud\Api\Service;
use Jdcloud\Api\DocModel;
use Jdcloud\Api\ApiProvider;
use Jdcloud\PresignUrlMiddleware;

/**
 * Client used to interact with streambus.
 *
 * @method \Jdcloud\Result getTopicList(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getTopicListAsync(array $args = [])
 * @method \Jdcloud\Result describeTopic(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeTopicAsync(array $args = [])
 * @method \Jdcloud\Result addTopic(array $args = [])
 * @method \GuzzleHttp\Promise\Promise addTopicAsync(array $args = [])
 * @method \Jdcloud\Result updateTopic(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateTopicAsync(array $args = [])
 * @method \Jdcloud\Result deleteTopic(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteTopicAsync(array $args = [])
 * @method \Jdcloud\Result getConsumerGroupList(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getConsumerGroupListAsync(array $args = [])
 * @method \Jdcloud\Result createConsumerGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createConsumerGroupAsync(array $args = [])
 * @method \Jdcloud\Result deleteConsumerGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteConsumerGroupAsync(array $args = [])
 */
class StreambusClient extends JdCloudClient
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