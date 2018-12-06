<?php
/**
 * Cdn
 *
 * @category Jdcloud
 * @package  Jdcloud\Cdn
 * @author   Jdcloud <jdcloud-api@jd.com>
 * @license  Apache-2.0 http://www.apache.org/licenses/LICENSE-2.0
 * @link     https://www.jdcloud.com/help/faq
 */

namespace Jdcloud\Cdn;

use Jdcloud\JdCloudClient;
use Jdcloud\Api\Service;
use Jdcloud\Api\DocModel;
use Jdcloud\Api\ApiProvider;
use Jdcloud\PresignUrlMiddleware;

/**
 * Client used to interact with cdn.
 *
 * @method \Jdcloud\Result getDomainList(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getDomainListAsync(array $args = [])
 * @method \Jdcloud\Result getDomainDetail(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getDomainDetailAsync(array $args = [])
 * @method \Jdcloud\Result deleteDomain(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteDomainAsync(array $args = [])
 * @method \Jdcloud\Result startDomain(array $args = [])
 * @method \GuzzleHttp\Promise\Promise startDomainAsync(array $args = [])
 * @method \Jdcloud\Result stopDomain(array $args = [])
 * @method \GuzzleHttp\Promise\Promise stopDomainAsync(array $args = [])
 * @method \Jdcloud\Result queryStatisticsData(array $args = [])
 * @method \GuzzleHttp\Promise\Promise queryStatisticsDataAsync(array $args = [])
 * @method \Jdcloud\Result queryStatisticsDataGroupByArea(array $args = [])
 * @method \GuzzleHttp\Promise\Promise queryStatisticsDataGroupByAreaAsync(array $args = [])
 * @method \Jdcloud\Result queryStatisticsDataGroupSum(array $args = [])
 * @method \GuzzleHttp\Promise\Promise queryStatisticsDataGroupSumAsync(array $args = [])
 * @method \Jdcloud\Result queryStatisticsTopIp(array $args = [])
 * @method \GuzzleHttp\Promise\Promise queryStatisticsTopIpAsync(array $args = [])
 * @method \Jdcloud\Result queryStatisticsTopUrl(array $args = [])
 * @method \GuzzleHttp\Promise\Promise queryStatisticsTopUrlAsync(array $args = [])
 */
class CdnClient extends JdCloudClient
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
                        'service' => 'cdn',
                        'presign_param' => 'PresignedUrl',
                    ]
                ),
                'cdn'
            );
        };

        parent::__construct($args);
    }
}