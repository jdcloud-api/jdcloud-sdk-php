<?php
/**
 * Domainservice
 *
 * @category Jdcloud
 * @package  Jdcloud\Domainservice
 * @author   Jdcloud <jdcloud-api@jd.com>
 * @license  Apache-2.0 http://www.apache.org/licenses/LICENSE-2.0
 * @link     https://www.jdcloud.com/help/faq
 */

namespace Jdcloud\Domainservice;

use Jdcloud\JdCloudClient;
use Jdcloud\Api\Service;
use Jdcloud\Api\DocModel;
use Jdcloud\Api\ApiProvider;
use Jdcloud\PresignUrlMiddleware;

/**
 * Client used to interact with domainservice.
 *
 * @method \Jdcloud\Result describeActionLog(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeActionLogAsync(array $args = [])
 * @method \Jdcloud\Result describeDomains(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeDomainsAsync(array $args = [])
 * @method \Jdcloud\Result createDomain(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createDomainAsync(array $args = [])
 * @method \Jdcloud\Result modifyDomain(array $args = [])
 * @method \GuzzleHttp\Promise\Promise modifyDomainAsync(array $args = [])
 * @method \Jdcloud\Result deleteDomain(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteDomainAsync(array $args = [])
 * @method \Jdcloud\Result describeDomainQueryCount(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeDomainQueryCountAsync(array $args = [])
 * @method \Jdcloud\Result describeDomainQueryTraffic(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeDomainQueryTrafficAsync(array $args = [])
 * @method \Jdcloud\Result describeResourceRecord(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeResourceRecordAsync(array $args = [])
 * @method \Jdcloud\Result createResourceRecord(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createResourceRecordAsync(array $args = [])
 * @method \Jdcloud\Result modifyResourceRecord(array $args = [])
 * @method \GuzzleHttp\Promise\Promise modifyResourceRecordAsync(array $args = [])
 * @method \Jdcloud\Result deleteResourceRecord(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteResourceRecordAsync(array $args = [])
 * @method \Jdcloud\Result modifyResourceRecordStatus(array $args = [])
 * @method \GuzzleHttp\Promise\Promise modifyResourceRecordStatusAsync(array $args = [])
 * @method \Jdcloud\Result describeViewTree(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeViewTreeAsync(array $args = [])
 * @method \Jdcloud\Result batchSetResourceRecords(array $args = [])
 * @method \GuzzleHttp\Promise\Promise batchSetResourceRecordsAsync(array $args = [])
 * @method \Jdcloud\Result describeUserView(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeUserViewAsync(array $args = [])
 * @method \Jdcloud\Result createUserView(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createUserViewAsync(array $args = [])
 * @method \Jdcloud\Result deleteUserView(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteUserViewAsync(array $args = [])
 * @method \Jdcloud\Result describeUserViewIP(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeUserViewIPAsync(array $args = [])
 * @method \Jdcloud\Result createUserViewIP(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createUserViewIPAsync(array $args = [])
 * @method \Jdcloud\Result deleteUserViewIP(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteUserViewIPAsync(array $args = [])
 * @method \Jdcloud\Result describeMonitor(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeMonitorAsync(array $args = [])
 * @method \Jdcloud\Result createMonitor(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createMonitorAsync(array $args = [])
 * @method \Jdcloud\Result modifyMonitor(array $args = [])
 * @method \GuzzleHttp\Promise\Promise modifyMonitorAsync(array $args = [])
 * @method \Jdcloud\Result describeMonitorTarget(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeMonitorTargetAsync(array $args = [])
 * @method \Jdcloud\Result createMonitorTarget(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createMonitorTargetAsync(array $args = [])
 * @method \Jdcloud\Result modifyMonitorStatus(array $args = [])
 * @method \GuzzleHttp\Promise\Promise modifyMonitorStatusAsync(array $args = [])
 * @method \Jdcloud\Result deleteMonitor(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteMonitorAsync(array $args = [])
 * @method \Jdcloud\Result describeMonitorAlarm(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeMonitorAlarmAsync(array $args = [])
 */
class DomainserviceClient extends JdCloudClient
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
                        'service' => 'domainservice',
                        'presign_param' => 'PresignedUrl',
                    ]
                ),
                'domainservice'
            );
        };

        parent::__construct($args);
    }
}