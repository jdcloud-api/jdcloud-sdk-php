<?php
/**
 * Reservedinstance
 *
 * @category Jdcloud
 * @package  Jdcloud\Reservedinstance
 * @author   Jdcloud <jdcloud-api@jd.com>
 * @license  Apache-2.0 http://www.apache.org/licenses/LICENSE-2.0
 * @link     https://www.jdcloud.com/help/faq
 */

namespace Jdcloud\Reservedinstance;

use Jdcloud\JdCloudClient;
use Jdcloud\Api\Service;
use Jdcloud\Api\DocModel;
use Jdcloud\Api\ApiProvider;
use Jdcloud\PresignUrlMiddleware;

/**
 * Client used to interact with reservedinstance.
 *
 * @method \Jdcloud\Result describeDeductionDetails(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeDeductionDetailsAsync(array $args = [])
 * @method \Jdcloud\Result describeConsoleInstanceVouchers(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeConsoleInstanceVouchersAsync(array $args = [])
 */
class ReservedinstanceClient extends JdCloudClient
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
                        'service' => 'reservedinstance',
                        'presign_param' => 'PresignedUrl',
                    ]
                ),
                'reservedinstance'
            );
        };

        parent::__construct($args);
    }
}