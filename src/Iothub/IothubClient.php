<?php
/**
 * Iothub
 *
 * @category Jdcloud
 * @package  Jdcloud\Iothub
 * @author   Jdcloud <jdcloud-api@jd.com>
 * @license  Apache-2.0 http://www.apache.org/licenses/LICENSE-2.0
 * @link     https://www.jdcloud.com/help/faq
 */

namespace Jdcloud\Iothub;

use Jdcloud\JdCloudClient;
use Jdcloud\Api\Service;
use Jdcloud\Api\DocModel;
use Jdcloud\Api\ApiProvider;
use Jdcloud\PresignUrlMiddleware;

/**
 * Client used to interact with iothub.
 *
 * @method \Jdcloud\Result deviceActivate(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deviceActivateAsync(array $args = [])
 * @method \Jdcloud\Result devicesEnroll(array $args = [])
 * @method \GuzzleHttp\Promise\Promise devicesEnrollAsync(array $args = [])
 * @method \Jdcloud\Result deviceCommand(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deviceCommandAsync(array $args = [])
 * @method \Jdcloud\Result deviceState(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deviceStateAsync(array $args = [])
 * @method \Jdcloud\Result moduleEnroll(array $args = [])
 * @method \GuzzleHttp\Promise\Promise moduleEnrollAsync(array $args = [])
 * @method \Jdcloud\Result moduleState(array $args = [])
 * @method \GuzzleHttp\Promise\Promise moduleStateAsync(array $args = [])
 * @method \Jdcloud\Result omEnroll(array $args = [])
 * @method \GuzzleHttp\Promise\Promise omEnrollAsync(array $args = [])
 */
class IothubClient extends JdCloudClient
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
                        'service' => 'iothub',
                        'presign_param' => 'PresignedUrl',
                    ]
                ),
                'iothub'
            );
        };

        parent::__construct($args);
    }
}