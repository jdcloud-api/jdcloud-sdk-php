<?php
/**
 * Ydapp
 *
 * @category Jdcloud
 * @package  Jdcloud\Ydapp
 * @author   Jdcloud <jdcloud-api@jd.com>
 * @license  Apache-2.0 http://www.apache.org/licenses/LICENSE-2.0
 * @link     https://www.jdcloud.com/help/faq
 */

namespace Jdcloud\Ydapp;

use Jdcloud\JdCloudClient;
use Jdcloud\Api\Service;
use Jdcloud\Api\DocModel;
use Jdcloud\Api\ApiProvider;
use Jdcloud\PresignUrlMiddleware;

/**
 * Client used to interact with ydapp.
 *
 * @method \Jdcloud\Result describeApps(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeAppsAsync(array $args = [])
 * @method \Jdcloud\Result deleteCustomImage(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteCustomImageAsync(array $args = [])
 * @method \Jdcloud\Result describeCustomImages(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeCustomImagesAsync(array $args = [])
 * @method \Jdcloud\Result describeCustomRegistryToken(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeCustomRegistryTokenAsync(array $args = [])
 * @method \Jdcloud\Result deploy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deployAsync(array $args = [])
 * @method \Jdcloud\Result describeDeployTask(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeDeployTaskAsync(array $args = [])
 * @method \Jdcloud\Result stopDeployTask(array $args = [])
 * @method \GuzzleHttp\Promise\Promise stopDeployTaskAsync(array $args = [])
 * @method \Jdcloud\Result describeGroups(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeGroupsAsync(array $args = [])
 */
class YdappClient extends JdCloudClient
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
                        'service' => 'ydapp',
                        'presign_param' => 'PresignedUrl',
                    ]
                ),
                'ydapp'
            );
        };

        parent::__construct($args);
    }
}