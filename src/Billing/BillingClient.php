<?php
/**
 * Billing
 *
 * @category Jdcloud
 * @package  Jdcloud\Billing
 * @author   Jdcloud <jdcloud-api@jd.com>
 * @license  Apache-2.0 http://www.apache.org/licenses/LICENSE-2.0
 * @link     https://www.jdcloud.com/help/faq
 */

namespace Jdcloud\Billing;

use Jdcloud\JdCloudClient;
use Jdcloud\Api\Service;
use Jdcloud\Api\DocModel;
use Jdcloud\Api\ApiProvider;
use Jdcloud\PresignUrlMiddleware;

/**
 * Client used to interact with billing.
 *
 * @method \Jdcloud\Result queryBillSummary(array $args = [])
 * @method \GuzzleHttp\Promise\Promise queryBillSummaryAsync(array $args = [])
 * @method \Jdcloud\Result queryBillDetail(array $args = [])
 * @method \GuzzleHttp\Promise\Promise queryBillDetailAsync(array $args = [])
 * @method \Jdcloud\Result calculateTotalPrice(array $args = [])
 * @method \GuzzleHttp\Promise\Promise calculateTotalPriceAsync(array $args = [])
 */
class BillingClient extends JdCloudClient
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
                        'service' => 'billing',
                        'presign_param' => 'PresignedUrl',
                    ]
                ),
                'billing'
            );
        };

        parent::__construct($args);
    }
}