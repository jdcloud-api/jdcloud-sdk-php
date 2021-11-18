<?php
/**
 * Privatezone
 *
 * @category Jdcloud
 * @package  Jdcloud\Privatezone
 * @author   Jdcloud <jdcloud-api@jd.com>
 * @license  Apache-2.0 http://www.apache.org/licenses/LICENSE-2.0
 * @link     https://www.jdcloud.com/help/faq
 */

namespace Jdcloud\Privatezone;

use Jdcloud\JdCloudClient;
use Jdcloud\Api\Service;
use Jdcloud\Api\DocModel;
use Jdcloud\Api\ApiProvider;
use Jdcloud\PresignUrlMiddleware;

/**
 * Client used to interact with privatezone.
 *
 * @method \Jdcloud\Result describeActionLogs(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeActionLogsAsync(array $args = [])
 * @method \Jdcloud\Result describeInstances(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeInstancesAsync(array $args = [])
 * @method \Jdcloud\Result describeResourceRecords(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeResourceRecordsAsync(array $args = [])
 * @method \Jdcloud\Result createResourceRecord(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createResourceRecordAsync(array $args = [])
 * @method \Jdcloud\Result modifyResourceRecord(array $args = [])
 * @method \GuzzleHttp\Promise\Promise modifyResourceRecordAsync(array $args = [])
 * @method \Jdcloud\Result deleteResourceRecords(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteResourceRecordsAsync(array $args = [])
 * @method \Jdcloud\Result setResourceRecordsStatus(array $args = [])
 * @method \GuzzleHttp\Promise\Promise setResourceRecordsStatusAsync(array $args = [])
 * @method \Jdcloud\Result exportResourceRecords(array $args = [])
 * @method \GuzzleHttp\Promise\Promise exportResourceRecordsAsync(array $args = [])
 * @method \Jdcloud\Result importResourceRecords(array $args = [])
 * @method \GuzzleHttp\Promise\Promise importResourceRecordsAsync(array $args = [])
 * @method \Jdcloud\Result zoneResolveCount(array $args = [])
 * @method \GuzzleHttp\Promise\Promise zoneResolveCountAsync(array $args = [])
 * @method \Jdcloud\Result zoneFlowCount(array $args = [])
 * @method \GuzzleHttp\Promise\Promise zoneFlowCountAsync(array $args = [])
 * @method \Jdcloud\Result describeZones(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeZonesAsync(array $args = [])
 * @method \Jdcloud\Result createZone(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createZoneAsync(array $args = [])
 * @method \Jdcloud\Result deleteZone(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteZoneAsync(array $args = [])
 * @method \Jdcloud\Result retryRecurse(array $args = [])
 * @method \GuzzleHttp\Promise\Promise retryRecurseAsync(array $args = [])
 * @method \Jdcloud\Result bindVpc(array $args = [])
 * @method \GuzzleHttp\Promise\Promise bindVpcAsync(array $args = [])
 */
class PrivatezoneClient extends JdCloudClient
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
                        'service' => 'privatezone',
                        'presign_param' => 'PresignedUrl',
                    ]
                ),
                'privatezone'
            );
        };

        parent::__construct($args);
    }
}