<?php
/**
 * Jdccs
 *
 * @category Jdcloud
 * @package  Jdcloud\Jdccs
 * @author   Jdcloud <jdcloud-api@jd.com>
 * @license  Apache-2.0 http://www.apache.org/licenses/LICENSE-2.0
 * @link     https://www.jdcloud.com/help/faq
 */

namespace Jdcloud\Jdccs;

use Jdcloud\JdCloudClient;
use Jdcloud\Api\Service;
use Jdcloud\Api\DocModel;
use Jdcloud\Api\ApiProvider;
use Jdcloud\PresignUrlMiddleware;

/**
 * Client used to interact with jdccs.
 *
 * @method \Jdcloud\Result describeAlarms(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeAlarmsAsync(array $args = [])
 * @method \Jdcloud\Result createAlarm(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createAlarmAsync(array $args = [])
 * @method \Jdcloud\Result describeAlarm(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeAlarmAsync(array $args = [])
 * @method \Jdcloud\Result updateAlarm(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateAlarmAsync(array $args = [])
 * @method \Jdcloud\Result deleteAlarm(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteAlarmAsync(array $args = [])
 * @method \Jdcloud\Result describeAlarmHistory(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeAlarmHistoryAsync(array $args = [])
 * @method \Jdcloud\Result switchAlarm(array $args = [])
 * @method \GuzzleHttp\Promise\Promise switchAlarmAsync(array $args = [])
 * @method \Jdcloud\Result describeMetrics(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeMetricsAsync(array $args = [])
 * @method \Jdcloud\Result describeMetricData(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeMetricDataAsync(array $args = [])
 * @method \Jdcloud\Result lastDownsample(array $args = [])
 * @method \GuzzleHttp\Promise\Promise lastDownsampleAsync(array $args = [])
 * @method \Jdcloud\Result describeBandwidthTraffics(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeBandwidthTrafficsAsync(array $args = [])
 * @method \Jdcloud\Result describeBandwidthTraffic(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeBandwidthTrafficAsync(array $args = [])
 * @method \Jdcloud\Result describeTrafficSampling(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeTrafficSamplingAsync(array $args = [])
 * @method \Jdcloud\Result describeOpenDevices(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeOpenDevicesAsync(array $args = [])
 * @method \Jdcloud\Result describeOpenDevicesData(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeOpenDevicesDataAsync(array $args = [])
 * @method \Jdcloud\Result describeRangetimeCabinetCurrent(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeRangetimeCabinetCurrentAsync(array $args = [])
 * @method \Jdcloud\Result describeRealtimeCabinetCurrent(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeRealtimeCabinetCurrentAsync(array $args = [])
 * @method \Jdcloud\Result describeRangetimeCabinetOriCurrent(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeRangetimeCabinetOriCurrentAsync(array $args = [])
 * @method \Jdcloud\Result describeIdcs(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeIdcsAsync(array $args = [])
 * @method \Jdcloud\Result describeRooms(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeRoomsAsync(array $args = [])
 * @method \Jdcloud\Result describeCabinets(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeCabinetsAsync(array $args = [])
 * @method \Jdcloud\Result describeCabinet(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeCabinetAsync(array $args = [])
 * @method \Jdcloud\Result describeDevices(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeDevicesAsync(array $args = [])
 * @method \Jdcloud\Result describeDevice(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeDeviceAsync(array $args = [])
 * @method \Jdcloud\Result describeIps(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeIpsAsync(array $args = [])
 * @method \Jdcloud\Result describeBandwidths(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeBandwidthsAsync(array $args = [])
 * @method \Jdcloud\Result describeBandwidth(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeBandwidthAsync(array $args = [])
 * @method \Jdcloud\Result describeIdcOverview(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeIdcOverviewAsync(array $args = [])
 * @method \Jdcloud\Result describeTickets(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeTicketsAsync(array $args = [])
 * @method \Jdcloud\Result describeTicket(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeTicketAsync(array $args = [])
 * @method \Jdcloud\Result createGeneralServicesTicket(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createGeneralServicesTicketAsync(array $args = [])
 */
class JdccsClient extends JdCloudClient
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
                        'service' => 'jdccs',
                        'presign_param' => 'PresignedUrl',
                    ]
                ),
                'jdccs'
            );
        };

        parent::__construct($args);
    }
}