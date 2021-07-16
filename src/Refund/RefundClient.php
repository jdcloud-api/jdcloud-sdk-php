<?php
/**
 * Refund
 *
 * @category Jdcloud
 * @package  Jdcloud\Refund
 * @author   Jdcloud <jdcloud-api@jd.com>
 * @license  Apache-2.0 http://www.apache.org/licenses/LICENSE-2.0
 * @link     https://www.jdcloud.com/help/faq
 */

namespace Jdcloud\Refund;

use Jdcloud\JdCloudClient;
use Jdcloud\Api\Service;
use Jdcloud\Api\DocModel;
use Jdcloud\Api\ApiProvider;
use Jdcloud\PresignUrlMiddleware;

/**
 * Client used to interact with refund.
 *
 * @method \Jdcloud\Result submitResourceRefund(array $args = [])
 * @method \GuzzleHttp\Promise\Promise submitResourceRefundAsync(array $args = [])
 * @method \Jdcloud\Result descirbeRefundStatus(array $args = [])
 * @method \GuzzleHttp\Promise\Promise descirbeRefundStatusAsync(array $args = [])
 */
class RefundClient extends JdCloudClient
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
                        'service' => 'refund',
                        'presign_param' => 'PresignedUrl',
                    ]
                ),
                'refund'
            );
        };

        parent::__construct($args);
    }
}