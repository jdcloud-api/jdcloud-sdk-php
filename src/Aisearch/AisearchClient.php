<?php
/**
 * Aisearch
 *
 * @category Jdcloud
 * @package  Jdcloud\Aisearch
 * @author   Jdcloud <jdcloud-api@jd.com>
 * @license  Apache-2.0 http://www.apache.org/licenses/LICENSE-2.0
 * @link     https://www.jdcloud.com/help/faq
 */

namespace Jdcloud\Aisearch;

use Jdcloud\JdCloudClient;
use Jdcloud\Api\Service;
use Jdcloud\Api\DocModel;
use Jdcloud\Api\ApiProvider;
use Jdcloud\PresignUrlMiddleware;

/**
 * Client used to interact with aisearch.
 *
 * @method \Jdcloud\Result externalSubmitVirtualTryOnTaskBase64(array $args = [])
 * @method \GuzzleHttp\Promise\Promise externalSubmitVirtualTryOnTaskBase64Async(array $args = [])
 * @method \Jdcloud\Result externalSubmitSquareToLongTaskBase64(array $args = [])
 * @method \GuzzleHttp\Promise\Promise externalSubmitSquareToLongTaskBase64Async(array $args = [])
 * @method \Jdcloud\Result externalQueryTaskStatus(array $args = [])
 * @method \GuzzleHttp\Promise\Promise externalQueryTaskStatusAsync(array $args = [])
 * @method \Jdcloud\Result externalDownloadImage(array $args = [])
 * @method \GuzzleHttp\Promise\Promise externalDownloadImageAsync(array $args = [])
 * @method \Jdcloud\Result externalWebSearch(array $args = [])
 * @method \GuzzleHttp\Promise\Promise externalWebSearchAsync(array $args = [])
 */
class AisearchClient extends JdCloudClient
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
                        'service' => 'aisearch',
                        'presign_param' => 'PresignedUrl',
                    ]
                ),
                'aisearch'
            );
        };

        parent::__construct($args);
    }
}