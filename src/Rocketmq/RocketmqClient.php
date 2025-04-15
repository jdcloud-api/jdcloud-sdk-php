<?php
/**
 * Rocketmq
 *
 * @category Jdcloud
 * @package  Jdcloud\Rocketmq
 * @author   Jdcloud <jdcloud-api@jd.com>
 * @license  Apache-2.0 http://www.apache.org/licenses/LICENSE-2.0
 * @link     https://www.jdcloud.com/help/faq
 */

namespace Jdcloud\Rocketmq;

use Jdcloud\JdCloudClient;
use Jdcloud\Api\Service;
use Jdcloud\Api\DocModel;
use Jdcloud\Api\ApiProvider;
use Jdcloud\PresignUrlMiddleware;

/**
 * Client used to interact with rocketmq.
 *
 * @method \Jdcloud\Result describeConsumerGroups(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeConsumerGroupsAsync(array $args = [])
 * @method \Jdcloud\Result createConsumerGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createConsumerGroupAsync(array $args = [])
 * @method \Jdcloud\Result updateConsumerGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateConsumerGroupAsync(array $args = [])
 * @method \Jdcloud\Result describeConsumerGroupNames(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeConsumerGroupNamesAsync(array $args = [])
 * @method \Jdcloud\Result deleteConsumerGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteConsumerGroupAsync(array $args = [])
 * @method \Jdcloud\Result describeConsumerAllTopics(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeConsumerAllTopicsAsync(array $args = [])
 * @method \Jdcloud\Result describeConsumerGroupStatus(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeConsumerGroupStatusAsync(array $args = [])
 * @method \Jdcloud\Result describeConsumerSubTopics(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeConsumerSubTopicsAsync(array $args = [])
 * @method \Jdcloud\Result resetOffset(array $args = [])
 * @method \GuzzleHttp\Promise\Promise resetOffsetAsync(array $args = [])
 * @method \Jdcloud\Result describeMessages(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeMessagesAsync(array $args = [])
 * @method \Jdcloud\Result sendMessage(array $args = [])
 * @method \GuzzleHttp\Promise\Promise sendMessageAsync(array $args = [])
 * @method \Jdcloud\Result describeMessageByMsgId(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeMessageByMsgIdAsync(array $args = [])
 * @method \Jdcloud\Result describeProduceTrace(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeProduceTraceAsync(array $args = [])
 * @method \Jdcloud\Result describeConsumeTrace(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeConsumeTraceAsync(array $args = [])
 * @method \Jdcloud\Result describeConsumeTraceDetail(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeConsumeTraceDetailAsync(array $args = [])
 * @method \Jdcloud\Result describeTopics(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeTopicsAsync(array $args = [])
 * @method \Jdcloud\Result createTopic(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createTopicAsync(array $args = [])
 * @method \Jdcloud\Result describeTopicNames(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeTopicNamesAsync(array $args = [])
 * @method \Jdcloud\Result describeTopic(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeTopicAsync(array $args = [])
 * @method \Jdcloud\Result updateTopicDescription(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateTopicDescriptionAsync(array $args = [])
 * @method \Jdcloud\Result deleteTopic(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteTopicAsync(array $args = [])
 * @method \Jdcloud\Result describeConsumersByTopic(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeConsumersByTopicAsync(array $args = [])
 */
class RocketmqClient extends JdCloudClient
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
                        'service' => 'rocketmq',
                        'presign_param' => 'PresignedUrl',
                    ]
                ),
                'rocketmq'
            );
        };

        parent::__construct($args);
    }
}