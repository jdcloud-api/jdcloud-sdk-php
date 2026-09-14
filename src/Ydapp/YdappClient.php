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
 * @method \Jdcloud\Result createApp(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createAppAsync(array $args = [])
 * @method \Jdcloud\Result describeApp(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeAppAsync(array $args = [])
 * @method \Jdcloud\Result modifyApp(array $args = [])
 * @method \GuzzleHttp\Promise\Promise modifyAppAsync(array $args = [])
 * @method \Jdcloud\Result deleteApp(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteAppAsync(array $args = [])
 * @method \Jdcloud\Result linkPackage(array $args = [])
 * @method \GuzzleHttp\Promise\Promise linkPackageAsync(array $args = [])
 * @method \Jdcloud\Result scanPackage(array $args = [])
 * @method \GuzzleHttp\Promise\Promise scanPackageAsync(array $args = [])
 * @method \Jdcloud\Result generateUploadUrl(array $args = [])
 * @method \GuzzleHttp\Promise\Promise generateUploadUrlAsync(array $args = [])
 * @method \Jdcloud\Result getPackageDownloadInfo(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getPackageDownloadInfoAsync(array $args = [])
 * @method \Jdcloud\Result describePackages(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describePackagesAsync(array $args = [])
 * @method \Jdcloud\Result deletePackage(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deletePackageAsync(array $args = [])
 * @method \Jdcloud\Result describeAppImageAutoDeletePolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeAppImageAutoDeletePolicyAsync(array $args = [])
 * @method \Jdcloud\Result openAppImageAutoDelete(array $args = [])
 * @method \GuzzleHttp\Promise\Promise openAppImageAutoDeleteAsync(array $args = [])
 * @method \Jdcloud\Result closeAppImageAutoDelete(array $args = [])
 * @method \GuzzleHttp\Promise\Promise closeAppImageAutoDeleteAsync(array $args = [])
 * @method \Jdcloud\Result createPipelineTask(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createPipelineTaskAsync(array $args = [])
 * @method \Jdcloud\Result describeAppImages(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeAppImagesAsync(array $args = [])
 * @method \Jdcloud\Result deleteAppImage(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteAppImageAsync(array $args = [])
 * @method \Jdcloud\Result describeBaseImages(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeBaseImagesAsync(array $args = [])
 * @method \Jdcloud\Result describeClusters(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeClustersAsync(array $args = [])
 * @method \Jdcloud\Result installClusterAddon(array $args = [])
 * @method \GuzzleHttp\Promise\Promise installClusterAddonAsync(array $args = [])
 * @method \Jdcloud\Result describeClusterAddons(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeClusterAddonsAsync(array $args = [])
 * @method \Jdcloud\Result deleteCustomImage(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteCustomImageAsync(array $args = [])
 * @method \Jdcloud\Result describeCustomImages(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeCustomImagesAsync(array $args = [])
 * @method \Jdcloud\Result describeCustomRegistryToken(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeCustomRegistryTokenAsync(array $args = [])
 * @method \Jdcloud\Result describeContainerLogs(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeContainerLogsAsync(array $args = [])
 * @method \Jdcloud\Result createPodDiagnosis(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createPodDiagnosisAsync(array $args = [])
 * @method \Jdcloud\Result describePodDiagnosis(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describePodDiagnosisAsync(array $args = [])
 * @method \Jdcloud\Result describeGroupVolumes(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeGroupVolumesAsync(array $args = [])
 * @method \Jdcloud\Result modifyGroupVolume(array $args = [])
 * @method \GuzzleHttp\Promise\Promise modifyGroupVolumeAsync(array $args = [])
 * @method \Jdcloud\Result describeGroupTags(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeGroupTagsAsync(array $args = [])
 * @method \Jdcloud\Result modifyGroupTags(array $args = [])
 * @method \GuzzleHttp\Promise\Promise modifyGroupTagsAsync(array $args = [])
 * @method \Jdcloud\Result describeGroupAnnotations(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeGroupAnnotationsAsync(array $args = [])
 * @method \Jdcloud\Result modifyGroupAnnotations(array $args = [])
 * @method \GuzzleHttp\Promise\Promise modifyGroupAnnotationsAsync(array $args = [])
 * @method \Jdcloud\Result describeTaskPods(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeTaskPodsAsync(array $args = [])
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
 * @method \Jdcloud\Result createAppGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createAppGroupAsync(array $args = [])
 * @method \Jdcloud\Result deleteAppGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteAppGroupAsync(array $args = [])
 * @method \Jdcloud\Result copyAppGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise copyAppGroupAsync(array $args = [])
 * @method \Jdcloud\Result updateBaseInfo(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateBaseInfoAsync(array $args = [])
 * @method \Jdcloud\Result updateStartCmd(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateStartCmdAsync(array $args = [])
 * @method \Jdcloud\Result modifyContainerPort(array $args = [])
 * @method \GuzzleHttp\Promise\Promise modifyContainerPortAsync(array $args = [])
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
 * @method \Jdcloud\Result describePvcs(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describePvcsAsync(array $args = [])
 * @method \Jdcloud\Result describePvc(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describePvcAsync(array $args = [])
 * @method \Jdcloud\Result deletePvc(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deletePvcAsync(array $args = [])
 * @method \Jdcloud\Result createPvc(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createPvcAsync(array $args = [])
 * @method \Jdcloud\Result describeZfs(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeZfsAsync(array $args = [])
 * @method \Jdcloud\Result describePodVolumes(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describePodVolumesAsync(array $args = [])
 * @method \Jdcloud\Result createSystem(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createSystemAsync(array $args = [])
 * @method \Jdcloud\Result describeJosApps(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeJosAppsAsync(array $args = [])
 * @method \Jdcloud\Result describeSystems(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeSystemsAsync(array $args = [])
 * @method \Jdcloud\Result describeSystem(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeSystemAsync(array $args = [])
 * @method \Jdcloud\Result modifySystem(array $args = [])
 * @method \GuzzleHttp\Promise\Promise modifySystemAsync(array $args = [])
 * @method \Jdcloud\Result deleteSystem(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteSystemAsync(array $args = [])
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