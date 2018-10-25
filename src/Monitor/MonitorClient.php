<?php
/**
 * Monitor
 *
 * @category Jdcloud
 * @package  Jdcloud\Monitor
 * @author   Jdcloud <jdcloud-api@jd.com>
 * @license  Apache-2.0 http://www.apache.org/licenses/LICENSE-2.0
 * @link     https://www.jdcloud.com/help/faq
 */

namespace Jdcloud\Monitor;

use Jdcloud\JdCloudClient;
use Jdcloud\Api\Service;
use Jdcloud\Api\DocModel;
use Jdcloud\Api\ApiProvider;
use Jdcloud\PresignUrlMiddleware;

/**
 * Client used to interact with monitor.
 *
 * @method \Jdcloud\Result describeAlarmContacts(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeAlarmContactsAsync(array $args = [])
 * @method \Jdcloud\Result describeAlarmHistory(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeAlarmHistoryAsync(array $args = [])
 * @method \Jdcloud\Result describeAlarms(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeAlarmsAsync(array $args = [])
 * @method \Jdcloud\Result createAlarm(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createAlarmAsync(array $args = [])
 * @method \Jdcloud\Result batchDeleteAlarms(array $args = [])
 * @method \GuzzleHttp\Promise\Promise batchDeleteAlarmsAsync(array $args = [])
 * @method \Jdcloud\Result describeAlarmsByID(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeAlarmsByIDAsync(array $args = [])
 * @method \Jdcloud\Result updateAlarm(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateAlarmAsync(array $args = [])
 * @method \Jdcloud\Result disableAlarm(array $args = [])
 * @method \GuzzleHttp\Promise\Promise disableAlarmAsync(array $args = [])
 * @method \Jdcloud\Result enableAlarm(array $args = [])
 * @method \GuzzleHttp\Promise\Promise enableAlarmAsync(array $args = [])
 * @method \Jdcloud\Result batchCreateAlarms(array $args = [])
 * @method \GuzzleHttp\Promise\Promise batchCreateAlarmsAsync(array $args = [])
 * @method \Jdcloud\Result batchDisableAlarms(array $args = [])
 * @method \GuzzleHttp\Promise\Promise batchDisableAlarmsAsync(array $args = [])
 * @method \Jdcloud\Result batchEnableAlarms(array $args = [])
 * @method \GuzzleHttp\Promise\Promise batchEnableAlarmsAsync(array $args = [])
 * @method \Jdcloud\Result describeMetrics(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeMetricsAsync(array $args = [])
 * @method \Jdcloud\Result describeMetricsForCreateAlarm(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeMetricsForCreateAlarmAsync(array $args = [])
 * @method \Jdcloud\Result lastDownsample(array $args = [])
 * @method \GuzzleHttp\Promise\Promise lastDownsampleAsync(array $args = [])
 * @method \Jdcloud\Result describeMetricData(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeMetricDataAsync(array $args = [])
 * @method \Jdcloud\Result batchDescribeMetricData(array $args = [])
 * @method \GuzzleHttp\Promise\Promise batchDescribeMetricDataAsync(array $args = [])
 * @method \Jdcloud\Result putMetricData(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putMetricDataAsync(array $args = [])
 */
class MonitorClient extends JdCloudClient
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
                        'service' => 'monitor',
                        'presign_param' => 'PresignedUrl',
                    ]
                ),
                'monitor'
            );
        };

        parent::__construct($args);
    }
}