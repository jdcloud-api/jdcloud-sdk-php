<?php
/**
 * Order
 *
 * @category Jdcloud
 * @package  Jdcloud\Order
 * @author   Jdcloud <jdcloud-api@jd.com>
 * @license  Apache-2.0 http://www.apache.org/licenses/LICENSE-2.0
 * @link     https://www.jdcloud.com/help/faq
 */

namespace Jdcloud\Order;

use Jdcloud\JdCloudClient;
use Jdcloud\Api\Service;
use Jdcloud\Api\DocModel;
use Jdcloud\Api\ApiProvider;
use Jdcloud\PresignUrlMiddleware;

/**
 * Client used to interact with order.
 *
 * @method \Jdcloud\Result payOrder(array $args = [])
 * @method \GuzzleHttp\Promise\Promise payOrderAsync(array $args = [])
 * @method \Jdcloud\Result queryOrders(array $args = [])
 * @method \GuzzleHttp\Promise\Promise queryOrdersAsync(array $args = [])
 * @method \Jdcloud\Result queryOrder(array $args = [])
 * @method \GuzzleHttp\Promise\Promise queryOrderAsync(array $args = [])
 */
class OrderClient extends JdCloudClient
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
                        'service' => 'order',
                        'presign_param' => 'PresignedUrl',
                    ]
                ),
                'order'
            );
        };

        parent::__construct($args);
    }
}