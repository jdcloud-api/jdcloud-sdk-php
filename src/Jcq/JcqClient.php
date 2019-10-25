<?php
/**
 * Jcq
 *
 * @category Jdcloud
 * @package  Jdcloud\Jcq
 * @author   Jdcloud <jdcloud-api@jd.com>
 * @license  Apache-2.0 http://www.apache.org/licenses/LICENSE-2.0
 * @link     https://www.jdcloud.com/help/faq
 */

namespace Jdcloud\Jcq;

use Jdcloud\JdCloudClient;
use Jdcloud\Api\Service;
use Jdcloud\Api\DocModel;
use Jdcloud\Api\ApiProvider;
use Jdcloud\PresignUrlMiddleware;

/**
 * Client used to interact with jcq.
 *
 * @method \Jdcloud\Result describeAccessPoint(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeAccessPointAsync(array $args = [])
 * @method \Jdcloud\Result describeConsumerGroupIds(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeConsumerGroupIdsAsync(array $args = [])
 * @method \Jdcloud\Result describeDeadLetterNumbers(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeDeadLetterNumbersAsync(array $args = [])
 * @method \Jdcloud\Result describeDeadLetterNumbersWithTopic(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeDeadLetterNumbersWithTopicAsync(array $args = [])
 * @method \Jdcloud\Result listDeadLetters(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listDeadLettersAsync(array $args = [])
 * @method \Jdcloud\Result deleteDeadLetters(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteDeadLettersAsync(array $args = [])
 * @method \Jdcloud\Result resendDeadLetters(array $args = [])
 * @method \GuzzleHttp\Promise\Promise resendDeadLettersAsync(array $args = [])
 * @method \Jdcloud\Result describeMessages(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeMessagesAsync(array $args = [])
 * @method \Jdcloud\Result describeMessage(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeMessageAsync(array $args = [])
 * @method \Jdcloud\Result describeMessageTrace(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeMessageTraceAsync(array $args = [])
 * @method \Jdcloud\Result describeMessagesByBusinessId(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeMessagesByBusinessIdAsync(array $args = [])
 * @method \Jdcloud\Result describePermission(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describePermissionAsync(array $args = [])
 * @method \Jdcloud\Result addPermission(array $args = [])
 * @method \GuzzleHttp\Promise\Promise addPermissionAsync(array $args = [])
 * @method \Jdcloud\Result removePermission(array $args = [])
 * @method \GuzzleHttp\Promise\Promise removePermissionAsync(array $args = [])
 * @method \Jdcloud\Result describeSubscriptions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeSubscriptionsAsync(array $args = [])
 * @method \Jdcloud\Result createSubscription(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createSubscriptionAsync(array $args = [])
 * @method \Jdcloud\Result describeSubscription(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeSubscriptionAsync(array $args = [])
 * @method \Jdcloud\Result modifySubscriptionAttribute(array $args = [])
 * @method \GuzzleHttp\Promise\Promise modifySubscriptionAttributeAsync(array $args = [])
 * @method \Jdcloud\Result deleteSubscription(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteSubscriptionAsync(array $args = [])
 * @method \Jdcloud\Result cleanMessages(array $args = [])
 * @method \GuzzleHttp\Promise\Promise cleanMessagesAsync(array $args = [])
 * @method \Jdcloud\Result resetConsumeOffset(array $args = [])
 * @method \GuzzleHttp\Promise\Promise resetConsumeOffsetAsync(array $args = [])
 * @method \Jdcloud\Result describeTopics(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeTopicsAsync(array $args = [])
 * @method \Jdcloud\Result createTopic(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createTopicAsync(array $args = [])
 * @method \Jdcloud\Result describeTopic(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeTopicAsync(array $args = [])
 * @method \Jdcloud\Result deleteTopic(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteTopicAsync(array $args = [])
 */
class JcqClient extends JdCloudClient
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
                        'service' => 'jcq',
                        'presign_param' => 'PresignedUrl',
                    ]
                ),
                'jcq'
            );
        };

        parent::__construct($args);
    }
}