<?php
/**
 * Videosurveillance
 *
 * @category Jdcloud
 * @package  Jdcloud\Videosurveillance
 * @author   Jdcloud <jdcloud-api@jd.com>
 * @license  Apache-2.0 http://www.apache.org/licenses/LICENSE-2.0
 * @link     https://www.jdcloud.com/help/faq
 */

namespace Jdcloud\Videosurveillance;

use Jdcloud\JdCloudClient;
use Jdcloud\Api\Service;
use Jdcloud\Api\DocModel;
use Jdcloud\Api\ApiProvider;
use Jdcloud\PresignUrlMiddleware;

/**
 * Client used to interact with videosurveillance.
 *
 * @method \Jdcloud\Result captureImage(array $args = [])
 * @method \GuzzleHttp\Promise\Promise captureImageAsync(array $args = [])
 * @method \Jdcloud\Result describeCaptureImageByFileId(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeCaptureImageByFileIdAsync(array $args = [])
 * @method \Jdcloud\Result describeDeviceInfo(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeDeviceInfoAsync(array $args = [])
 * @method \Jdcloud\Result describeDevicePageList(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeDevicePageListAsync(array $args = [])
 * @method \Jdcloud\Result startRecord(array $args = [])
 * @method \GuzzleHttp\Promise\Promise startRecordAsync(array $args = [])
 * @method \Jdcloud\Result describeRecordResultByTaskId(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeRecordResultByTaskIdAsync(array $args = [])
 */
class VideosurveillanceClient extends JdCloudClient
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
                        'service' => 'videosurveillance',
                        'presign_param' => 'PresignedUrl',
                    ]
                ),
                'videosurveillance'
            );
        };

        parent::__construct($args);
    }
}