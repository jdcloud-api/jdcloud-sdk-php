<?php
/**
 * Mps
 *
 * @category Jdcloud
 * @package  Jdcloud\Mps
 * @author   Jdcloud <jdcloud-api@jd.com>
 * @license  Apache-2.0 http://www.apache.org/licenses/LICENSE-2.0
 * @link     https://www.jdcloud.com/help/faq
 */

namespace Jdcloud\Mps;

use Jdcloud\JdCloudClient;
use Jdcloud\Api\Service;
use Jdcloud\Api\DocModel;
use Jdcloud\Api\ApiProvider;
use Jdcloud\PresignUrlMiddleware;

/**
 * Client used to interact with mps.
 *
 * @method \Jdcloud\Result submitTranscodeJob(array $args = [])
 * @method \GuzzleHttp\Promise\Promise submitTranscodeJobAsync(array $args = [])
 * @method \Jdcloud\Result listTranscodeJobs(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listTranscodeJobsAsync(array $args = [])
 * @method \Jdcloud\Result getTranscodeJob(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getTranscodeJobAsync(array $args = [])
 * @method \Jdcloud\Result listTranscodeTemplates(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listTranscodeTemplatesAsync(array $args = [])
 * @method \Jdcloud\Result createTranscodeTemplate(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createTranscodeTemplateAsync(array $args = [])
 * @method \Jdcloud\Result getTranscodeTemplate(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getTranscodeTemplateAsync(array $args = [])
 * @method \Jdcloud\Result updateTranscodeTemplate(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateTranscodeTemplateAsync(array $args = [])
 * @method \Jdcloud\Result modifyTranscodeTemplate(array $args = [])
 * @method \GuzzleHttp\Promise\Promise modifyTranscodeTemplateAsync(array $args = [])
 * @method \Jdcloud\Result deleteTranscodeTemplate(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteTranscodeTemplateAsync(array $args = [])
 * @method \Jdcloud\Result getStyleDelimiter(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getStyleDelimiterAsync(array $args = [])
 * @method \Jdcloud\Result setStyleDelimiter(array $args = [])
 * @method \GuzzleHttp\Promise\Promise setStyleDelimiterAsync(array $args = [])
 * @method \Jdcloud\Result deleteStyleDelimiter(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteStyleDelimiterAsync(array $args = [])
 * @method \Jdcloud\Result listImageStyle(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listImageStyleAsync(array $args = [])
 * @method \Jdcloud\Result createImageStyle(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createImageStyleAsync(array $args = [])
 * @method \Jdcloud\Result getImageStyle(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getImageStyleAsync(array $args = [])
 * @method \Jdcloud\Result updateImageStyle(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateImageStyleAsync(array $args = [])
 * @method \Jdcloud\Result deleteImageStyle(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteImageStyleAsync(array $args = [])
 * @method \Jdcloud\Result countImageStyle(array $args = [])
 * @method \GuzzleHttp\Promise\Promise countImageStyleAsync(array $args = [])
 * @method \Jdcloud\Result listThumbnailTask(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listThumbnailTaskAsync(array $args = [])
 * @method \Jdcloud\Result createThumbnailTask(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createThumbnailTaskAsync(array $args = [])
 * @method \Jdcloud\Result getThumbnailTask(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getThumbnailTaskAsync(array $args = [])
 * @method \Jdcloud\Result getNotification(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getNotificationAsync(array $args = [])
 * @method \Jdcloud\Result setNotification(array $args = [])
 * @method \GuzzleHttp\Promise\Promise setNotificationAsync(array $args = [])
 */
class MpsClient extends JdCloudClient
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
                        'service' => 'mps',
                        'presign_param' => 'PresignedUrl',
                    ]
                ),
                'mps'
            );
        };

        parent::__construct($args);
    }
}