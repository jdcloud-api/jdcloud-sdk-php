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
 * @method \Jdcloud\Result describeAgentStatus(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeAgentStatusAsync(array $args = [])
 * @method \Jdcloud\Result describeMetricDataAm(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeMetricDataAmAsync(array $args = [])
 * @method \Jdcloud\Result createProbeTask(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createProbeTaskAsync(array $args = [])
 * @method \Jdcloud\Result deleteProbeTask(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteProbeTaskAsync(array $args = [])
 * @method \Jdcloud\Result describeProbeTask(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeProbeTaskAsync(array $args = [])
 * @method \Jdcloud\Result updateProbeTask(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateProbeTaskAsync(array $args = [])
 * @method \Jdcloud\Result describeProbeHistory(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeProbeHistoryAsync(array $args = [])
 * @method \Jdcloud\Result discribeProbes(array $args = [])
 * @method \GuzzleHttp\Promise\Promise discribeProbesAsync(array $args = [])
 * @method \Jdcloud\Result probeTaskEnable(array $args = [])
 * @method \GuzzleHttp\Promise\Promise probeTaskEnableAsync(array $args = [])
 * @method \Jdcloud\Result describeProbeTasks(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeProbeTasksAsync(array $args = [])
 * @method \Jdcloud\Result getSiteMonitor(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getSiteMonitorAsync(array $args = [])
 * @method \Jdcloud\Result createSiteMonitor(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createSiteMonitorAsync(array $args = [])
 * @method \Jdcloud\Result updateSiteMonitor(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateSiteMonitorAsync(array $args = [])
 * @method \Jdcloud\Result deleteSiteMonitor(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteSiteMonitorAsync(array $args = [])
 * @method \Jdcloud\Result enableSiteMonitor(array $args = [])
 * @method \GuzzleHttp\Promise\Promise enableSiteMonitorAsync(array $args = [])
 * @method \Jdcloud\Result validateSiteMonitorAddress(array $args = [])
 * @method \GuzzleHttp\Promise\Promise validateSiteMonitorAddressAsync(array $args = [])
 * @method \Jdcloud\Result getSiteMonitorDataPoints(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getSiteMonitorDataPointsAsync(array $args = [])
 * @method \Jdcloud\Result getSiteMonitorSource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getSiteMonitorSourceAsync(array $args = [])
 * @method \Jdcloud\Result testSiteMonitor(array $args = [])
 * @method \GuzzleHttp\Promise\Promise testSiteMonitorAsync(array $args = [])
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