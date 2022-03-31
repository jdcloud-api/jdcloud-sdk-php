<?php
/**
 * Logs
 *
 * @category Jdcloud
 * @package  Jdcloud\Logs
 * @author   Jdcloud <jdcloud-api@jd.com>
 * @license  Apache-2.0 http://www.apache.org/licenses/LICENSE-2.0
 * @link     https://www.jdcloud.com/help/faq
 */

namespace Jdcloud\Logs;

use Jdcloud\JdCloudClient;
use Jdcloud\Api\Service;
use Jdcloud\Api\DocModel;
use Jdcloud\Api\ApiProvider;
use Jdcloud\PresignUrlMiddleware;

/**
 * Client used to interact with logs.
 *
 * @method \Jdcloud\Result describeCollectInfo(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeCollectInfoAsync(array $args = [])
 * @method \Jdcloud\Result updateCollectInfo(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateCollectInfoAsync(array $args = [])
 * @method \Jdcloud\Result describeCollectResources(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeCollectResourcesAsync(array $args = [])
 * @method \Jdcloud\Result updateCollectResources(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateCollectResourcesAsync(array $args = [])
 * @method \Jdcloud\Result createCollectInfo(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createCollectInfoAsync(array $args = [])
 * @method \Jdcloud\Result createParser(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createParserAsync(array $args = [])
 * @method \Jdcloud\Result describeParser(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeParserAsync(array $args = [])
 * @method \Jdcloud\Result updateParser(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateParserAsync(array $args = [])
 * @method \Jdcloud\Result validateParser(array $args = [])
 * @method \GuzzleHttp\Promise\Promise validateParserAsync(array $args = [])
 * @method \Jdcloud\Result createParser(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createParserAsync(array $args = [])
 * @method \Jdcloud\Result describeLogsets(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeLogsetsAsync(array $args = [])
 * @method \Jdcloud\Result createLogset(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createLogsetAsync(array $args = [])
 * @method \Jdcloud\Result describeLogset(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeLogsetAsync(array $args = [])
 * @method \Jdcloud\Result updateLogset(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateLogsetAsync(array $args = [])
 * @method \Jdcloud\Result deleteLogset(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteLogsetAsync(array $args = [])
 * @method \Jdcloud\Result describeLogtopics(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeLogtopicsAsync(array $args = [])
 * @method \Jdcloud\Result createLogtopic(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createLogtopicAsync(array $args = [])
 * @method \Jdcloud\Result deleteLogtopic(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteLogtopicAsync(array $args = [])
 * @method \Jdcloud\Result describeLogtopic(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeLogtopicAsync(array $args = [])
 * @method \Jdcloud\Result updateLogtopic(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateLogtopicAsync(array $args = [])
 * @method \Jdcloud\Result testMetricTask(array $args = [])
 * @method \GuzzleHttp\Promise\Promise testMetricTaskAsync(array $args = [])
 * @method \Jdcloud\Result describeMetricTasks(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeMetricTasksAsync(array $args = [])
 * @method \Jdcloud\Result createMetricTask(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createMetricTaskAsync(array $args = [])
 * @method \Jdcloud\Result describeMetricTask(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeMetricTaskAsync(array $args = [])
 * @method \Jdcloud\Result updateMetricTask(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateMetricTaskAsync(array $args = [])
 * @method \Jdcloud\Result deleteMetricTask(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteMetricTaskAsync(array $args = [])
 * @method \Jdcloud\Result histograms(array $args = [])
 * @method \GuzzleHttp\Promise\Promise histogramsAsync(array $args = [])
 * @method \Jdcloud\Result getLogs(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getLogsAsync(array $args = [])
 * @method \Jdcloud\Result search(array $args = [])
 * @method \GuzzleHttp\Promise\Promise searchAsync(array $args = [])
 * @method \Jdcloud\Result describeSubscribe(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeSubscribeAsync(array $args = [])
 * @method \Jdcloud\Result createSubscribe(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createSubscribeAsync(array $args = [])
 * @method \Jdcloud\Result updateSubscribe(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateSubscribeAsync(array $args = [])
 */
class LogsClient extends JdCloudClient
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
                        'service' => 'logs',
                        'presign_param' => 'PresignedUrl',
                    ]
                ),
                'logs'
            );
        };

        parent::__construct($args);
    }
}