<?php
/**
 * Vod
 *
 * @category Jdcloud
 * @package  Jdcloud\Vod
 * @author   Jdcloud <jdcloud-api@jd.com>
 * @license  Apache-2.0 http://www.apache.org/licenses/LICENSE-2.0
 * @link     https://www.jdcloud.com/help/faq
 */

namespace Jdcloud\Vod;

use Jdcloud\JdCloudClient;
use Jdcloud\Api\Service;
use Jdcloud\Api\DocModel;
use Jdcloud\Api\ApiProvider;
use Jdcloud\PresignUrlMiddleware;

/**
 * Client used to interact with vod.
 *
 * @method \Jdcloud\Result listCategories(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listCategoriesAsync(array $args = [])
 * @method \Jdcloud\Result createCategory(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createCategoryAsync(array $args = [])
 * @method \Jdcloud\Result getCategoryWithChildren(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getCategoryWithChildrenAsync(array $args = [])
 * @method \Jdcloud\Result getCategory(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getCategoryAsync(array $args = [])
 * @method \Jdcloud\Result updateCategory(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateCategoryAsync(array $args = [])
 * @method \Jdcloud\Result deleteCategory(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteCategoryAsync(array $args = [])
 * @method \Jdcloud\Result listDomains(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listDomainsAsync(array $args = [])
 * @method \Jdcloud\Result createDomain(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createDomainAsync(array $args = [])
 * @method \Jdcloud\Result getDomain(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getDomainAsync(array $args = [])
 * @method \Jdcloud\Result deleteDomain(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteDomainAsync(array $args = [])
 * @method \Jdcloud\Result enableDomain(array $args = [])
 * @method \GuzzleHttp\Promise\Promise enableDomainAsync(array $args = [])
 * @method \Jdcloud\Result disableDomain(array $args = [])
 * @method \GuzzleHttp\Promise\Promise disableDomainAsync(array $args = [])
 * @method \Jdcloud\Result setDefaultDomain(array $args = [])
 * @method \GuzzleHttp\Promise\Promise setDefaultDomainAsync(array $args = [])
 * @method \Jdcloud\Result setHeader(array $args = [])
 * @method \GuzzleHttp\Promise\Promise setHeaderAsync(array $args = [])
 * @method \Jdcloud\Result listHeaders(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listHeadersAsync(array $args = [])
 * @method \Jdcloud\Result deleteHeader(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteHeaderAsync(array $args = [])
 * @method \Jdcloud\Result setRefererRule(array $args = [])
 * @method \GuzzleHttp\Promise\Promise setRefererRuleAsync(array $args = [])
 * @method \Jdcloud\Result getRefererRule(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getRefererRuleAsync(array $args = [])
 * @method \Jdcloud\Result setURLRule(array $args = [])
 * @method \GuzzleHttp\Promise\Promise setURLRuleAsync(array $args = [])
 * @method \Jdcloud\Result getURLRule(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getURLRuleAsync(array $args = [])
 * @method \Jdcloud\Result setIPRule(array $args = [])
 * @method \GuzzleHttp\Promise\Promise setIPRuleAsync(array $args = [])
 * @method \Jdcloud\Result getIPRule(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getIPRuleAsync(array $args = [])
 * @method \Jdcloud\Result setHttpSsl(array $args = [])
 * @method \GuzzleHttp\Promise\Promise setHttpSslAsync(array $args = [])
 * @method \Jdcloud\Result getHttpSsl(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getHttpSslAsync(array $args = [])
 * @method \Jdcloud\Result createLiveToVodTask(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createLiveToVodTaskAsync(array $args = [])
 * @method \Jdcloud\Result createVideoUploadTask(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createVideoUploadTaskAsync(array $args = [])
 * @method \Jdcloud\Result refreshVideoUploadTask(array $args = [])
 * @method \GuzzleHttp\Promise\Promise refreshVideoUploadTaskAsync(array $args = [])
 * @method \Jdcloud\Result createImageUploadTask(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createImageUploadTaskAsync(array $args = [])
 * @method \Jdcloud\Result submitQualityDetectionJob(array $args = [])
 * @method \GuzzleHttp\Promise\Promise submitQualityDetectionJobAsync(array $args = [])
 * @method \Jdcloud\Result batchSubmitQualityDetectionJobs(array $args = [])
 * @method \GuzzleHttp\Promise\Promise batchSubmitQualityDetectionJobsAsync(array $args = [])
 * @method \Jdcloud\Result listQualityDetectionTemplates(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listQualityDetectionTemplatesAsync(array $args = [])
 * @method \Jdcloud\Result createQualityDetectionTemplate(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createQualityDetectionTemplateAsync(array $args = [])
 * @method \Jdcloud\Result getQualityDetectionTemplate(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getQualityDetectionTemplateAsync(array $args = [])
 * @method \Jdcloud\Result updateQualityDetectionTemplate(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateQualityDetectionTemplateAsync(array $args = [])
 * @method \Jdcloud\Result deleteQualityDetectionTemplate(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteQualityDetectionTemplateAsync(array $args = [])
 * @method \Jdcloud\Result listSnapshotTemplates(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listSnapshotTemplatesAsync(array $args = [])
 * @method \Jdcloud\Result createSnapshotTemplate(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createSnapshotTemplateAsync(array $args = [])
 * @method \Jdcloud\Result getSnapshotTemplate(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getSnapshotTemplateAsync(array $args = [])
 * @method \Jdcloud\Result updateSnapshotTemplate(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateSnapshotTemplateAsync(array $args = [])
 * @method \Jdcloud\Result deleteSnapshotTemplate(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteSnapshotTemplateAsync(array $args = [])
 * @method \Jdcloud\Result submitTranscodeJob(array $args = [])
 * @method \GuzzleHttp\Promise\Promise submitTranscodeJobAsync(array $args = [])
 * @method \Jdcloud\Result batchSubmitTranscodeJobs(array $args = [])
 * @method \GuzzleHttp\Promise\Promise batchSubmitTranscodeJobsAsync(array $args = [])
 * @method \Jdcloud\Result getTranscodeSummaries(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getTranscodeSummariesAsync(array $args = [])
 * @method \Jdcloud\Result getTranscodeJobSummaries(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getTranscodeJobSummariesAsync(array $args = [])
 * @method \Jdcloud\Result getTranscodeTaskSummaries(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getTranscodeTaskSummariesAsync(array $args = [])
 * @method \Jdcloud\Result submitTranscodeJob(array $args = [])
 * @method \GuzzleHttp\Promise\Promise submitTranscodeJobAsync(array $args = [])
 * @method \Jdcloud\Result batchSubmitTranscodeJobs(array $args = [])
 * @method \GuzzleHttp\Promise\Promise batchSubmitTranscodeJobsAsync(array $args = [])
 * @method \Jdcloud\Result listTranscodeTemplates(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listTranscodeTemplatesAsync(array $args = [])
 * @method \Jdcloud\Result createTranscodeTemplate(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createTranscodeTemplateAsync(array $args = [])
 * @method \Jdcloud\Result getTranscodeTemplate(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getTranscodeTemplateAsync(array $args = [])
 * @method \Jdcloud\Result updateTranscodeTemplate(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateTranscodeTemplateAsync(array $args = [])
 * @method \Jdcloud\Result deleteTranscodeTemplate(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteTranscodeTemplateAsync(array $args = [])
 * @method \Jdcloud\Result listTranscodeTemplateGroups(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listTranscodeTemplateGroupsAsync(array $args = [])
 * @method \Jdcloud\Result createTranscodeTemplateGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createTranscodeTemplateGroupAsync(array $args = [])
 * @method \Jdcloud\Result getTranscodeTemplateGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getTranscodeTemplateGroupAsync(array $args = [])
 * @method \Jdcloud\Result updateTranscodeTemplateGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateTranscodeTemplateGroupAsync(array $args = [])
 * @method \Jdcloud\Result deleteTranscodeTemplateGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteTranscodeTemplateGroupAsync(array $args = [])
 * @method \Jdcloud\Result deleteGroupedTranscodeTemplates(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteGroupedTranscodeTemplatesAsync(array $args = [])
 * @method \Jdcloud\Result listVideos(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listVideosAsync(array $args = [])
 * @method \Jdcloud\Result getVideo(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getVideoAsync(array $args = [])
 * @method \Jdcloud\Result updateVideo(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateVideoAsync(array $args = [])
 * @method \Jdcloud\Result deleteVideo(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteVideoAsync(array $args = [])
 * @method \Jdcloud\Result batchDeleteVideos(array $args = [])
 * @method \GuzzleHttp\Promise\Promise batchDeleteVideosAsync(array $args = [])
 * @method \Jdcloud\Result batchUpdateVideos(array $args = [])
 * @method \GuzzleHttp\Promise\Promise batchUpdateVideosAsync(array $args = [])
 * @method \Jdcloud\Result getVideoPlayInfo(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getVideoPlayInfoAsync(array $args = [])
 * @method \Jdcloud\Result deleteVideoStreams(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteVideoStreamsAsync(array $args = [])
 * @method \Jdcloud\Result videoAudit(array $args = [])
 * @method \GuzzleHttp\Promise\Promise videoAuditAsync(array $args = [])
 * @method \Jdcloud\Result getVideoSourceInfo(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getVideoSourceInfoAsync(array $args = [])
 * @method \Jdcloud\Result listWatermarks(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listWatermarksAsync(array $args = [])
 * @method \Jdcloud\Result createWatermark(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createWatermarkAsync(array $args = [])
 * @method \Jdcloud\Result getWatermark(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getWatermarkAsync(array $args = [])
 * @method \Jdcloud\Result updateWatermark(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateWatermarkAsync(array $args = [])
 * @method \Jdcloud\Result deleteWatermark(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteWatermarkAsync(array $args = [])
 */
class VodClient extends JdCloudClient
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
                        'service' => 'vod',
                        'presign_param' => 'PresignedUrl',
                    ]
                ),
                'vod'
            );
        };

        parent::__construct($args);
    }
}