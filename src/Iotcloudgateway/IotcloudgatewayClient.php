<?php
/**
 * Iotcloudgateway
 *
 * @category Jdcloud
 * @package  Jdcloud\Iotcloudgateway
 * @author   Jdcloud <jdcloud-api@jd.com>
 * @license  Apache-2.0 http://www.apache.org/licenses/LICENSE-2.0
 * @link     https://www.jdcloud.com/help/faq
 */

namespace Jdcloud\Iotcloudgateway;

use Jdcloud\JdCloudClient;
use Jdcloud\Api\Service;
use Jdcloud\Api\DocModel;
use Jdcloud\Api\ApiProvider;
use Jdcloud\PresignUrlMiddleware;

/**
 * Client used to interact with iotcloudgateway.
 *
 * @method \Jdcloud\Result describeInstances(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeInstancesAsync(array $args = [])
 * @method \Jdcloud\Result describeInstance(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeInstanceAsync(array $args = [])
 * @method \Jdcloud\Result queryInstanceExposeDomain(array $args = [])
 * @method \GuzzleHttp\Promise\Promise queryInstanceExposeDomainAsync(array $args = [])
 * @method \Jdcloud\Result queryInstanceStatus(array $args = [])
 * @method \GuzzleHttp\Promise\Promise queryInstanceStatusAsync(array $args = [])
 * @method \Jdcloud\Result deviceControl(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deviceControlAsync(array $args = [])
 */
class IotcloudgatewayClient extends JdCloudClient
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
                        'service' => 'iotcloudgateway',
                        'presign_param' => 'PresignedUrl',
                    ]
                ),
                'iotcloudgateway'
            );
        };

        parent::__construct($args);
    }
}