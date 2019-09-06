<?php
/**
 * Resourcetag
 *
 * @category Jdcloud
 * @package  Jdcloud\Resourcetag
 * @author   Jdcloud <jdcloud-api@jd.com>
 * @license  Apache-2.0 http://www.apache.org/licenses/LICENSE-2.0
 * @link     https://www.jdcloud.com/help/faq
 */

namespace Jdcloud\Resourcetag;

use Jdcloud\JdCloudClient;
use Jdcloud\Api\Service;
use Jdcloud\Api\DocModel;
use Jdcloud\Api\ApiProvider;
use Jdcloud\PresignUrlMiddleware;

/**
 * Client used to interact with resourcetag.
 *
 * @method \Jdcloud\Result describeResources(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeResourcesAsync(array $args = [])
 * @method \Jdcloud\Result describeTags(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeTagsAsync(array $args = [])
 * @method \Jdcloud\Result tagResources(array $args = [])
 * @method \GuzzleHttp\Promise\Promise tagResourcesAsync(array $args = [])
 * @method \Jdcloud\Result unTagResources(array $args = [])
 * @method \GuzzleHttp\Promise\Promise unTagResourcesAsync(array $args = [])
 * @method \Jdcloud\Result queryResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise queryResourceAsync(array $args = [])
 */
class ResourcetagClient extends JdCloudClient
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
                        'service' => 'resourcetag',
                        'presign_param' => 'PresignedUrl',
                    ]
                ),
                'resourcetag'
            );
        };

        parent::__construct($args);
    }
}