<?php
/**
 * Elite
 *
 * @category Jdcloud
 * @package  Jdcloud\Elite
 * @author   Jdcloud <jdcloud-api@jd.com>
 * @license  Apache-2.0 http://www.apache.org/licenses/LICENSE-2.0
 * @link     https://www.jdcloud.com/help/faq
 */

namespace Jdcloud\Elite;

use Jdcloud\JdCloudClient;
use Jdcloud\Api\Service;
use Jdcloud\Api\DocModel;
use Jdcloud\Api\ApiProvider;
use Jdcloud\PresignUrlMiddleware;

/**
 * Client used to interact with elite.
 *
 * @method \Jdcloud\Result listSaleService(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listSaleServiceAsync(array $args = [])
 * @method \Jdcloud\Result getSaleServiceByDeliverNumber(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getSaleServiceByDeliverNumberAsync(array $args = [])
 * @method \Jdcloud\Result confirmSaleServiceDelivery(array $args = [])
 * @method \GuzzleHttp\Promise\Promise confirmSaleServiceDeliveryAsync(array $args = [])
 * @method \Jdcloud\Result getStoreService(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getStoreServiceAsync(array $args = [])
 */
class EliteClient extends JdCloudClient
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
                        'service' => 'elite',
                        'presign_param' => 'PresignedUrl',
                    ]
                ),
                'elite'
            );
        };

        parent::__construct($args);
    }
}