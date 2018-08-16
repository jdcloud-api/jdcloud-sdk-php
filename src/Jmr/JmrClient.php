<?php
/**
 * Jmr
 *
 * @category Jdcloud
 * @package  Jdcloud\Jmr
 * @author   Jdcloud <jdcloud-api@jd.com>
 * @license  Apache-2.0 http://www.apache.org/licenses/LICENSE-2.0
 * @link     https://www.jdcloud.com/help/faq
 */

namespace Jdcloud\Jmr;

use Jdcloud\JdCloudClient;
use Jdcloud\Api\Service;
use Jdcloud\Api\DocModel;
use Jdcloud\Api\ApiProvider;
use Jdcloud\PresignUrlMiddleware;

/**
 * Client used to interact with jmr.
 *
 * @method \Jdcloud\Result createClusterInNewNetwork(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createClusterInNewNetworkAsync(array $args = [])
 * @method \Jdcloud\Result showClusterDetails(array $args = [])
 * @method \GuzzleHttp\Promise\Promise showClusterDetailsAsync(array $args = [])
 * @method \Jdcloud\Result releaseCluster(array $args = [])
 * @method \GuzzleHttp\Promise\Promise releaseClusterAsync(array $args = [])
 * @method \Jdcloud\Result getKey(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getKeyAsync(array $args = [])
 * @method \Jdcloud\Result getPropertyValue(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getPropertyValueAsync(array $args = [])
 * @method \Jdcloud\Result getHardwareStack(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getHardwareStackAsync(array $args = [])
 * @method \Jdcloud\Result getInstanceList(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getInstanceListAsync(array $args = [])
 * @method \Jdcloud\Result idataCluster(array $args = [])
 * @method \GuzzleHttp\Promise\Promise idataClusterAsync(array $args = [])
 * @method \Jdcloud\Result getSoftwareInfo(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getSoftwareInfoAsync(array $args = [])
 * @method \Jdcloud\Result getSoftwareAndVersionInfo(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getSoftwareAndVersionInfoAsync(array $args = [])
 * @method \Jdcloud\Result getJmrVersionList(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getJmrVersionListAsync(array $args = [])
 * @method \Jdcloud\Result calculateClusterPrice(array $args = [])
 * @method \GuzzleHttp\Promise\Promise calculateClusterPriceAsync(array $args = [])
 * @method \Jdcloud\Result getAvaliableNum(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getAvaliableNumAsync(array $args = [])
 * @method \Jdcloud\Result queryServerQuota(array $args = [])
 * @method \GuzzleHttp\Promise\Promise queryServerQuotaAsync(array $args = [])
 * @method \Jdcloud\Result queryVpcs(array $args = [])
 * @method \GuzzleHttp\Promise\Promise queryVpcsAsync(array $args = [])
 * @method \Jdcloud\Result queryVpcSubnets(array $args = [])
 * @method \GuzzleHttp\Promise\Promise queryVpcSubnetsAsync(array $args = [])
 * @method \Jdcloud\Result deleteCluster(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteClusterAsync(array $args = [])
 * @method \Jdcloud\Result queryFloatingIp(array $args = [])
 * @method \GuzzleHttp\Promise\Promise queryFloatingIpAsync(array $args = [])
 * @method \Jdcloud\Result validateUser(array $args = [])
 * @method \GuzzleHttp\Promise\Promise validateUserAsync(array $args = [])
 * @method \Jdcloud\Result renewBillingOrder(array $args = [])
 * @method \GuzzleHttp\Promise\Promise renewBillingOrderAsync(array $args = [])
 * @method \Jdcloud\Result validateName(array $args = [])
 * @method \GuzzleHttp\Promise\Promise validateNameAsync(array $args = [])
 * @method \Jdcloud\Result getAccessKeys(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getAccessKeysAsync(array $args = [])
 * @method \Jdcloud\Result clusterExpansion(array $args = [])
 * @method \GuzzleHttp\Promise\Promise clusterExpansionAsync(array $args = [])
 * @method \Jdcloud\Result calculateExpansionPrice(array $args = [])
 * @method \GuzzleHttp\Promise\Promise calculateExpansionPriceAsync(array $args = [])
 * @method \Jdcloud\Result getClusterDetailInfo(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getClusterDetailInfoAsync(array $args = [])
 * @method \Jdcloud\Result monitorServiceList(array $args = [])
 * @method \GuzzleHttp\Promise\Promise monitorServiceListAsync(array $args = [])
 * @method \Jdcloud\Result monitorDetails(array $args = [])
 * @method \GuzzleHttp\Promise\Promise monitorDetailsAsync(array $args = [])
 * @method \Jdcloud\Result getFirstServerVncUrl(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getFirstServerVncUrlAsync(array $args = [])
 * @method \Jdcloud\Result getJobTypeList(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getJobTypeListAsync(array $args = [])
 * @method \Jdcloud\Result getJobList(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getJobListAsync(array $args = [])
 * @method \Jdcloud\Result isValidJobName(array $args = [])
 * @method \GuzzleHttp\Promise\Promise isValidJobNameAsync(array $args = [])
 * @method \Jdcloud\Result createJob(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createJobAsync(array $args = [])
 * @method \Jdcloud\Result modifyJob(array $args = [])
 * @method \GuzzleHttp\Promise\Promise modifyJobAsync(array $args = [])
 * @method \Jdcloud\Result deleteJob(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteJobAsync(array $args = [])
 * @method \Jdcloud\Result createAndExcuteJob(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createAndExcuteJobAsync(array $args = [])
 * @method \Jdcloud\Result executeJob(array $args = [])
 * @method \GuzzleHttp\Promise\Promise executeJobAsync(array $args = [])
 * @method \Jdcloud\Result showJobDetails(array $args = [])
 * @method \GuzzleHttp\Promise\Promise showJobDetailsAsync(array $args = [])
 * @method \Jdcloud\Result getTaskList(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getTaskListAsync(array $args = [])
 * @method \Jdcloud\Result deleteHdfsFile(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteHdfsFileAsync(array $args = [])
 * @method \Jdcloud\Result getClusterJobCount(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getClusterJobCountAsync(array $args = [])
 * @method \Jdcloud\Result getClusterCronJobCount(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getClusterCronJobCountAsync(array $args = [])
 * @method \Jdcloud\Result getCronJobList(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getCronJobListAsync(array $args = [])
 * @method \Jdcloud\Result isValidPlanName(array $args = [])
 * @method \GuzzleHttp\Promise\Promise isValidPlanNameAsync(array $args = [])
 * @method \Jdcloud\Result createCronJob(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createCronJobAsync(array $args = [])
 * @method \Jdcloud\Result getCronJobDetail(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getCronJobDetailAsync(array $args = [])
 * @method \Jdcloud\Result modifyCronJob(array $args = [])
 * @method \GuzzleHttp\Promise\Promise modifyCronJobAsync(array $args = [])
 * @method \Jdcloud\Result pauseCronJob(array $args = [])
 * @method \GuzzleHttp\Promise\Promise pauseCronJobAsync(array $args = [])
 * @method \Jdcloud\Result resumeCronJob(array $args = [])
 * @method \GuzzleHttp\Promise\Promise resumeCronJobAsync(array $args = [])
 * @method \Jdcloud\Result deleteCronJob(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteCronJobAsync(array $args = [])
 * @method \Jdcloud\Result getCronJobTaskList(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getCronJobTaskListAsync(array $args = [])
 * @method \Jdcloud\Result getCronJobTaskListByJobId(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getCronJobTaskListByJobIdAsync(array $args = [])
 * @method \Jdcloud\Result runCronJobOnce(array $args = [])
 * @method \GuzzleHttp\Promise\Promise runCronJobOnceAsync(array $args = [])
 * @method \Jdcloud\Result getLastCronJobTask(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getLastCronJobTaskAsync(array $args = [])
 * @method \Jdcloud\Result queryExecutingJobList(array $args = [])
 * @method \GuzzleHttp\Promise\Promise queryExecutingJobListAsync(array $args = [])
 * @method \Jdcloud\Result getWorkFlowList(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getWorkFlowListAsync(array $args = [])
 * @method \Jdcloud\Result saveWorkFlow(array $args = [])
 * @method \GuzzleHttp\Promise\Promise saveWorkFlowAsync(array $args = [])
 * @method \Jdcloud\Result deleteWorkFlow(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteWorkFlowAsync(array $args = [])
 * @method \Jdcloud\Result runWorkFlow(array $args = [])
 * @method \GuzzleHttp\Promise\Promise runWorkFlowAsync(array $args = [])
 * @method \Jdcloud\Result wfInstanceDetail(array $args = [])
 * @method \GuzzleHttp\Promise\Promise wfInstanceDetailAsync(array $args = [])
 * @method \Jdcloud\Result getWorkFlowTrackerList(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getWorkFlowTrackerListAsync(array $args = [])
 * @method \Jdcloud\Result deleteWorkFlowTracker(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteWorkFlowTrackerAsync(array $args = [])
 */
class JmrClient extends JdCloudClient
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
                        'service' => 'jmr',
                        'presign_param' => 'PresignedUrl',
                    ]
                ),
                'jmr'
            );
        };

        parent::__construct($args);
    }
}