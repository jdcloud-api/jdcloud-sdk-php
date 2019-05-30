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
 * @method \Jdcloud\Result verifyDomain(array $args = [])
 * @method \GuzzleHttp\Promise\Promise verifyDomainAsync(array $args = [])
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
 * @method \Jdcloud\Result submitTranscodeJob(array $args = [])
 * @method \GuzzleHttp\Promise\Promise submitTranscodeJobAsync(array $args = [])
 * @method \Jdcloud\Result batchSubmitTranscodeJobs(array $args = [])
 * @method \GuzzleHttp\Promise\Promise batchSubmitTranscodeJobsAsync(array $args = [])
 * @method \Jdcloud\Result getTranscodeTask(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getTranscodeTaskAsync(array $args = [])
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