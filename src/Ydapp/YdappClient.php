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
 * @method \Jdcloud\Result restart(array $args = [])
 * @method \GuzzleHttp\Promise\Promise restartAsync(array $args = [])
 * @method \Jdcloud\Result scale(array $args = [])
 * @method \GuzzleHttp\Promise\Promise scaleAsync(array $args = [])
 * @method \Jdcloud\Result rollback(array $args = [])
 * @method \GuzzleHttp\Promise\Promise rollbackAsync(array $args = [])
 * @method \Jdcloud\Result describeDeploys(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeDeploysAsync(array $args = [])
 * @method \Jdcloud\Result describeGroups(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeGroupsAsync(array $args = [])
 * @method \Jdcloud\Result describeGroupConfig(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeGroupConfigAsync(array $args = [])
 * @method \Jdcloud\Result updateBaseInfo(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateBaseInfoAsync(array $args = [])
 * @method \Jdcloud\Result updateStartCmd(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateStartCmdAsync(array $args = [])
 * @method \Jdcloud\Result updateHealthCheck(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateHealthCheckAsync(array $args = [])
 * @method \Jdcloud\Result updateLifeCycle(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateLifeCycleAsync(array $args = [])
 * @method \Jdcloud\Result describeGroupEnvironments(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeGroupEnvironmentsAsync(array $args = [])
 * @method \Jdcloud\Result updateGroupEnvironment(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateGroupEnvironmentAsync(array $args = [])
 * @method \Jdcloud\Result describeGroupConfigFiles(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeGroupConfigFilesAsync(array $args = [])
 * @method \Jdcloud\Result updateConfigFile(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateConfigFileAsync(array $args = [])
 * @method \Jdcloud\Result deleteConfigFile(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteConfigFileAsync(array $args = [])
 * @method \Jdcloud\Result containerAntiAffinity(array $args = [])
 * @method \GuzzleHttp\Promise\Promise containerAntiAffinityAsync(array $args = [])
 * @method \Jdcloud\Result describePods(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describePodsAsync(array $args = [])
 * @method \Jdcloud\Result rebuild(array $args = [])
 * @method \GuzzleHttp\Promise\Promise rebuildAsync(array $args = [])
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