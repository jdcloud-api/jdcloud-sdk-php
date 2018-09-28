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
 * @method \Jdcloud\Result queryBillStatisticsInfo(array $args = [])
 * @method \GuzzleHttp\Promise\Promise queryBillStatisticsInfoAsync(array $args = [])
 * @method \Jdcloud\Result queryConsumptionOverView(array $args = [])
 * @method \GuzzleHttp\Promise\Promise queryConsumptionOverViewAsync(array $args = [])
 * @method \Jdcloud\Result queryResourceBills(array $args = [])
 * @method \GuzzleHttp\Promise\Promise queryResourceBillsAsync(array $args = [])
 * @method \Jdcloud\Result queryConsumeRecords(array $args = [])
 * @method \GuzzleHttp\Promise\Promise queryConsumeRecordsAsync(array $args = [])
 * @method \Jdcloud\Result getResourceName(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getResourceNameAsync(array $args = [])
 * @method \Jdcloud\Result queryConsumeBills(array $args = [])
 * @method \GuzzleHttp\Promise\Promise queryConsumeBillsAsync(array $args = [])
 * @method \Jdcloud\Result getBillDetail(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getBillDetailAsync(array $args = [])
 * @method \Jdcloud\Result adminQueryBillStatisticsInfo(array $args = [])
 * @method \GuzzleHttp\Promise\Promise adminQueryBillStatisticsInfoAsync(array $args = [])
 * @method \Jdcloud\Result isArrear(array $args = [])
 * @method \GuzzleHttp\Promise\Promise isArrearAsync(array $args = [])
 * @method \Jdcloud\Result calculateTotalPrice(array $args = [])
 * @method \GuzzleHttp\Promise\Promise calculateTotalPriceAsync(array $args = [])
 * @method \Jdcloud\Result calculateCompensateFeeAndSendCoupons(array $args = [])
 * @method \GuzzleHttp\Promise\Promise calculateCompensateFeeAndSendCouponsAsync(array $args = [])
 * @method \Jdcloud\Result sendResourceOrderStatusMessage(array $args = [])
 * @method \GuzzleHttp\Promise\Promise sendResourceOrderStatusMessageAsync(array $args = [])
 * @method \Jdcloud\Result queryPageByCondition(array $args = [])
 * @method \GuzzleHttp\Promise\Promise queryPageByConditionAsync(array $args = [])
 * @method \Jdcloud\Result getExpiringOrders(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getExpiringOrdersAsync(array $args = [])
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