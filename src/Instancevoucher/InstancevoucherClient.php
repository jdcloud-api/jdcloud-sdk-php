<?php
/**
 * Instancevoucher
 *
 * @category Jdcloud
 * @package  Jdcloud\Instancevoucher
 * @author   Jdcloud <jdcloud-api@jd.com>
 * @license  Apache-2.0 http://www.apache.org/licenses/LICENSE-2.0
 * @link     https://www.jdcloud.com/help/faq
 */

namespace Jdcloud\Instancevoucher;

use Jdcloud\JdCloudClient;
use Jdcloud\Api\Service;
use Jdcloud\Api\DocModel;
use Jdcloud\Api\ApiProvider;
use Jdcloud\PresignUrlMiddleware;

/**
 * Client used to interact with instancevoucher.
 *
 * @method \Jdcloud\Result describeInstanceVoucherTypes(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeInstanceVoucherTypesAsync(array $args = [])
 * @method \Jdcloud\Result describeQuotas(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeQuotasAsync(array $args = [])
 * @method \Jdcloud\Result describeInstanceVouchers(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeInstanceVouchersAsync(array $args = [])
 * @method \Jdcloud\Result createInstanceVoucher(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createInstanceVoucherAsync(array $args = [])
 * @method \Jdcloud\Result describeInstanceVoucher(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeInstanceVoucherAsync(array $args = [])
 * @method \Jdcloud\Result deleteInstanceVoucher(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteInstanceVoucherAsync(array $args = [])
 * @method \Jdcloud\Result modifyInstanceVoucherAttribute(array $args = [])
 * @method \GuzzleHttp\Promise\Promise modifyInstanceVoucherAttributeAsync(array $args = [])
 */
class InstancevoucherClient extends JdCloudClient
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
                        'service' => 'instancevoucher',
                        'presign_param' => 'PresignedUrl',
                    ]
                ),
                'instancevoucher'
            );
        };

        parent::__construct($args);
    }
}