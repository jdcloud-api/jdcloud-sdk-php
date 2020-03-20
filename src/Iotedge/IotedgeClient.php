<?php
/**
 * Iotedge
 *
 * @category Jdcloud
 * @package  Jdcloud\Iotedge
 * @author   Jdcloud <jdcloud-api@jd.com>
 * @license  Apache-2.0 http://www.apache.org/licenses/LICENSE-2.0
 * @link     https://www.jdcloud.com/help/faq
 */

namespace Jdcloud\Iotedge;

use Jdcloud\JdCloudClient;
use Jdcloud\Api\Service;
use Jdcloud\Api\DocModel;
use Jdcloud\Api\ApiProvider;
use Jdcloud\PresignUrlMiddleware;

/**
 * Client used to interact with iotedge.
 *
 * @method \Jdcloud\Result deployApp(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deployAppAsync(array $args = [])
 * @method \Jdcloud\Result describeDeployApp(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeDeployAppAsync(array $args = [])
 * @method \Jdcloud\Result describeDeployDetails(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeDeployDetailsAsync(array $args = [])
 * @method \Jdcloud\Result unInstallApp(array $args = [])
 * @method \GuzzleHttp\Promise\Promise unInstallAppAsync(array $args = [])
 * @method \Jdcloud\Result setAppStatus(array $args = [])
 * @method \GuzzleHttp\Promise\Promise setAppStatusAsync(array $args = [])
 * @method \Jdcloud\Result describeConfig(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeConfigAsync(array $args = [])
 * @method \Jdcloud\Result deleteEdgeWithCore(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteEdgeWithCoreAsync(array $args = [])
 * @method \Jdcloud\Result addEdgeWithCore(array $args = [])
 * @method \GuzzleHttp\Promise\Promise addEdgeWithCoreAsync(array $args = [])
 * @method \Jdcloud\Result addSubDeviceWithCore(array $args = [])
 * @method \GuzzleHttp\Promise\Promise addSubDeviceWithCoreAsync(array $args = [])
 * @method \Jdcloud\Result delSubDeviceWithCore(array $args = [])
 * @method \GuzzleHttp\Promise\Promise delSubDeviceWithCoreAsync(array $args = [])
 */
class IotedgeClient extends JdCloudClient
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
                        'service' => 'iotedge',
                        'presign_param' => 'PresignedUrl',
                    ]
                ),
                'iotedge'
            );
        };

        parent::__construct($args);
    }
}