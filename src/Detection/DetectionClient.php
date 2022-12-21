<?php
/**
 * Detection
 *
 * @category Jdcloud
 * @package  Jdcloud\Detection
 * @author   Jdcloud <jdcloud-api@jd.com>
 * @license  Apache-2.0 http://www.apache.org/licenses/LICENSE-2.0
 * @link     https://www.jdcloud.com/help/faq
 */

namespace Jdcloud\Detection;

use Jdcloud\JdCloudClient;
use Jdcloud\Api\Service;
use Jdcloud\Api\DocModel;
use Jdcloud\Api\ApiProvider;
use Jdcloud\PresignUrlMiddleware;

/**
 * Client used to interact with detection.
 *
 * @method \Jdcloud\Result queryTasks(array $args = [])
 * @method \GuzzleHttp\Promise\Promise queryTasksAsync(array $args = [])
 * @method \Jdcloud\Result queryNetworkMonitorResults(array $args = [])
 * @method \GuzzleHttp\Promise\Promise queryNetworkMonitorResultsAsync(array $args = [])
 * @method \Jdcloud\Result queryProtocolMonitorResults(array $args = [])
 * @method \GuzzleHttp\Promise\Promise queryProtocolMonitorResultsAsync(array $args = [])
 * @method \Jdcloud\Result queryProtocolAvgMetrics(array $args = [])
 * @method \GuzzleHttp\Promise\Promise queryProtocolAvgMetricsAsync(array $args = [])
 * @method \Jdcloud\Result queryNetworkAvgMetrics(array $args = [])
 * @method \GuzzleHttp\Promise\Promise queryNetworkAvgMetricsAsync(array $args = [])
 * @method \Jdcloud\Result querySuccessRateMetric(array $args = [])
 * @method \GuzzleHttp\Promise\Promise querySuccessRateMetricAsync(array $args = [])
 */
class DetectionClient extends JdCloudClient
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
                        'service' => 'detection',
                        'presign_param' => 'PresignedUrl',
                    ]
                ),
                'detection'
            );
        };

        parent::__construct($args);
    }
}