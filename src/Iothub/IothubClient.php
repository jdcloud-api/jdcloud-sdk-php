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
 * @method \Jdcloud\Result deleteDevice(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteDeviceAsync(array $args = [])
 * @method \Jdcloud\Result queryDeviceOnlineInfos(array $args = [])
 * @method \GuzzleHttp\Promise\Promise queryDeviceOnlineInfosAsync(array $args = [])
 * @method \Jdcloud\Result deviceActivate(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deviceActivateAsync(array $args = [])
 * @method \Jdcloud\Result devicesEnroll(array $args = [])
 * @method \GuzzleHttp\Promise\Promise devicesEnrollAsync(array $args = [])
 * @method \Jdcloud\Result queryDeviceCommands(array $args = [])
 * @method \GuzzleHttp\Promise\Promise queryDeviceCommandsAsync(array $args = [])
 * @method \Jdcloud\Result deviceCommand(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deviceCommandAsync(array $args = [])
 * @method \Jdcloud\Result queryDeviceStates(array $args = [])
 * @method \GuzzleHttp\Promise\Promise queryDeviceStatesAsync(array $args = [])
 * @method \Jdcloud\Result deviceState(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deviceStateAsync(array $args = [])
 * @method \Jdcloud\Result checkDeviceId(array $args = [])
 * @method \GuzzleHttp\Promise\Promise checkDeviceIdAsync(array $args = [])
 * @method \Jdcloud\Result edgeEnroll(array $args = [])
 * @method \GuzzleHttp\Promise\Promise edgeEnrollAsync(array $args = [])
 * @method \Jdcloud\Result deleteEdge(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteEdgeAsync(array $args = [])
 * @method \Jdcloud\Result deleteModule(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteModuleAsync(array $args = [])
 * @method \Jdcloud\Result deployModule(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deployModuleAsync(array $args = [])
 * @method \Jdcloud\Result moduleEnroll(array $args = [])
 * @method \GuzzleHttp\Promise\Promise moduleEnrollAsync(array $args = [])
 * @method \Jdcloud\Result moduleEnrollment(array $args = [])
 * @method \GuzzleHttp\Promise\Promise moduleEnrollmentAsync(array $args = [])
 * @method \Jdcloud\Result moduleState(array $args = [])
 * @method \GuzzleHttp\Promise\Promise moduleStateAsync(array $args = [])
 * @method \Jdcloud\Result getOMPrivateURL(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getOMPrivateURLAsync(array $args = [])
 * @method \Jdcloud\Result omEnrollbyFile(array $args = [])
 * @method \GuzzleHttp\Promise\Promise omEnrollbyFileAsync(array $args = [])
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