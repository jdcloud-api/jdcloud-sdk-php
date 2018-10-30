<?php
/**
 * Clouddnsservice
 *
 * @category Jdcloud
 * @package  Jdcloud\Clouddnsservice
 * @author   Jdcloud <jdcloud-api@jd.com>
 * @license  Apache-2.0 http://www.apache.org/licenses/LICENSE-2.0
 * @link     https://www.jdcloud.com/help/faq
 */

namespace Jdcloud\Clouddnsservice;

use Jdcloud\JdCloudClient;
use Jdcloud\Api\Service;
use Jdcloud\Api\DocModel;
use Jdcloud\Api\ApiProvider;
use Jdcloud\PresignUrlMiddleware;

/**
 * Client used to interact with clouddnsservice.
 *
 * @method \Jdcloud\Result getActionLog(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getActionLogAsync(array $args = [])
 * @method \Jdcloud\Result getDomains(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getDomainsAsync(array $args = [])
 * @method \Jdcloud\Result addDomain(array $args = [])
 * @method \GuzzleHttp\Promise\Promise addDomainAsync(array $args = [])
 * @method \Jdcloud\Result delDomain(array $args = [])
 * @method \GuzzleHttp\Promise\Promise delDomainAsync(array $args = [])
 * @method \Jdcloud\Result updateDomain(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateDomainAsync(array $args = [])
 * @method \Jdcloud\Result getDomainQueryCount(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getDomainQueryCountAsync(array $args = [])
 * @method \Jdcloud\Result getDomainQueryTraffic(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getDomainQueryTrafficAsync(array $args = [])
 * @method \Jdcloud\Result searchRR(array $args = [])
 * @method \GuzzleHttp\Promise\Promise searchRRAsync(array $args = [])
 * @method \Jdcloud\Result getViewTree(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getViewTreeAsync(array $args = [])
 * @method \Jdcloud\Result addRR(array $args = [])
 * @method \GuzzleHttp\Promise\Promise addRRAsync(array $args = [])
 * @method \Jdcloud\Result updateRR(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateRRAsync(array $args = [])
 * @method \Jdcloud\Result operateRR(array $args = [])
 * @method \GuzzleHttp\Promise\Promise operateRRAsync(array $args = [])
 * @method \Jdcloud\Result addUserView(array $args = [])
 * @method \GuzzleHttp\Promise\Promise addUserViewAsync(array $args = [])
 * @method \Jdcloud\Result delUserView(array $args = [])
 * @method \GuzzleHttp\Promise\Promise delUserViewAsync(array $args = [])
 * @method \Jdcloud\Result getUserView(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getUserViewAsync(array $args = [])
 * @method \Jdcloud\Result addUserViewIP(array $args = [])
 * @method \GuzzleHttp\Promise\Promise addUserViewIPAsync(array $args = [])
 * @method \Jdcloud\Result delUserViewIP(array $args = [])
 * @method \GuzzleHttp\Promise\Promise delUserViewIPAsync(array $args = [])
 * @method \Jdcloud\Result getUserViewIP(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getUserViewIPAsync(array $args = [])
 * @method \Jdcloud\Result getMonitor(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getMonitorAsync(array $args = [])
 * @method \Jdcloud\Result addMonitor(array $args = [])
 * @method \GuzzleHttp\Promise\Promise addMonitorAsync(array $args = [])
 * @method \Jdcloud\Result getTargets(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getTargetsAsync(array $args = [])
 * @method \Jdcloud\Result addMonitorTarget(array $args = [])
 * @method \GuzzleHttp\Promise\Promise addMonitorTargetAsync(array $args = [])
 * @method \Jdcloud\Result operateMonitor(array $args = [])
 * @method \GuzzleHttp\Promise\Promise operateMonitorAsync(array $args = [])
 * @method \Jdcloud\Result updateMonitor(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateMonitorAsync(array $args = [])
 * @method \Jdcloud\Result getMonitorAlarmInfo(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getMonitorAlarmInfoAsync(array $args = [])
 */
class ClouddnsserviceClient extends JdCloudClient
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
                        'service' => 'clouddnsservice',
                        'presign_param' => 'PresignedUrl',
                    ]
                ),
                'clouddnsservice'
            );
        };

        parent::__construct($args);
    }
}