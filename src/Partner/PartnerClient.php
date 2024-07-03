<?php
/**
 * Partner
 *
 * @category Jdcloud
 * @package  Jdcloud\Partner
 * @author   Jdcloud <jdcloud-api@jd.com>
 * @license  Apache-2.0 http://www.apache.org/licenses/LICENSE-2.0
 * @link     https://www.jdcloud.com/help/faq
 */

namespace Jdcloud\Partner;

use Jdcloud\JdCloudClient;
use Jdcloud\Api\Service;
use Jdcloud\Api\DocModel;
use Jdcloud\Api\ApiProvider;
use Jdcloud\PresignUrlMiddleware;

/**
 * Client used to interact with partner.
 *
 * @method \Jdcloud\Result describeCoProducts(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeCoProductsAsync(array $args = [])
 * @method \Jdcloud\Result exportCoProducts(array $args = [])
 * @method \GuzzleHttp\Promise\Promise exportCoProductsAsync(array $args = [])
 * @method \Jdcloud\Result describeCoProduct(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeCoProductAsync(array $args = [])
 * @method \Jdcloud\Result modifyCoProduct(array $args = [])
 * @method \GuzzleHttp\Promise\Promise modifyCoProductAsync(array $args = [])
 * @method \Jdcloud\Result addCoProduct(array $args = [])
 * @method \GuzzleHttp\Promise\Promise addCoProductAsync(array $args = [])
 * @method \Jdcloud\Result deleteFile(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteFileAsync(array $args = [])
 * @method \Jdcloud\Result addContract(array $args = [])
 * @method \GuzzleHttp\Promise\Promise addContractAsync(array $args = [])
 * @method \Jdcloud\Result modifyContract(array $args = [])
 * @method \GuzzleHttp\Promise\Promise modifyContractAsync(array $args = [])
 * @method \Jdcloud\Result queryMyCustomerList(array $args = [])
 * @method \GuzzleHttp\Promise\Promise queryMyCustomerListAsync(array $args = [])
 * @method \Jdcloud\Result getPartnerUserList(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getPartnerUserListAsync(array $args = [])
 * @method \Jdcloud\Result modifyDicDetail(array $args = [])
 * @method \GuzzleHttp\Promise\Promise modifyDicDetailAsync(array $args = [])
 * @method \Jdcloud\Result describePartnerBills(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describePartnerBillsAsync(array $args = [])
 * @method \Jdcloud\Result getTotalConsumption(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getTotalConsumptionAsync(array $args = [])
 * @method \Jdcloud\Result getEachConsumption(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getEachConsumptionAsync(array $args = [])
 * @method \Jdcloud\Result describeCustomerBillByProduct(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeCustomerBillByProductAsync(array $args = [])
 */
class PartnerClient extends JdCloudClient
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
                        'service' => 'partner',
                        'presign_param' => 'PresignedUrl',
                    ]
                ),
                'partner'
            );
        };

        parent::__construct($args);
    }
}