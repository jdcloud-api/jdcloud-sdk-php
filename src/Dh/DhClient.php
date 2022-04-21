<?php
/**
 * Dh
 *
 * @category Jdcloud
 * @package  Jdcloud\Dh
 * @author   Jdcloud <jdcloud-api@jd.com>
 * @license  Apache-2.0 http://www.apache.org/licenses/LICENSE-2.0
 * @link     https://www.jdcloud.com/help/faq
 */

namespace Jdcloud\Dh;

use Jdcloud\JdCloudClient;
use Jdcloud\Api\Service;
use Jdcloud\Api\DocModel;
use Jdcloud\Api\ApiProvider;
use Jdcloud\PresignUrlMiddleware;

/**
 * Client used to interact with dh.
 *
 * @method \Jdcloud\Result describeDedicatedHosts(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeDedicatedHostsAsync(array $args = [])
 * @method \Jdcloud\Result allocDedicatedHosts(array $args = [])
 * @method \GuzzleHttp\Promise\Promise allocDedicatedHostsAsync(array $args = [])
 * @method \Jdcloud\Result releaseDedicatedHost(array $args = [])
 * @method \GuzzleHttp\Promise\Promise releaseDedicatedHostAsync(array $args = [])
 * @method \Jdcloud\Result modifyDedicatedHostAttribute(array $args = [])
 * @method \GuzzleHttp\Promise\Promise modifyDedicatedHostAttributeAsync(array $args = [])
 * @method \Jdcloud\Result describeDedicatedHostType(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeDedicatedHostTypeAsync(array $args = [])
 * @method \Jdcloud\Result describeDedicatedPools(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeDedicatedPoolsAsync(array $args = [])
 * @method \Jdcloud\Result allocDedicatedPool(array $args = [])
 * @method \GuzzleHttp\Promise\Promise allocDedicatedPoolAsync(array $args = [])
 * @method \Jdcloud\Result modifyDedicatedPoolAttribute(array $args = [])
 * @method \GuzzleHttp\Promise\Promise modifyDedicatedPoolAttributeAsync(array $args = [])
 * @method \Jdcloud\Result releaseDedicatedPool(array $args = [])
 * @method \GuzzleHttp\Promise\Promise releaseDedicatedPoolAsync(array $args = [])
 * @method \Jdcloud\Result describeQuotas(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeQuotasAsync(array $args = [])
 */
class DhClient extends JdCloudClient
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
                        'service' => 'dh',
                        'presign_param' => 'PresignedUrl',
                    ]
                ),
                'dh'
            );
        };

        parent::__construct($args);
    }
}