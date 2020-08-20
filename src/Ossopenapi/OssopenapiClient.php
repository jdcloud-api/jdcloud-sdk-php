<?php
/**
 * Ossopenapi
 *
 * @category Jdcloud
 * @package  Jdcloud\Ossopenapi
 * @author   Jdcloud <jdcloud-api@jd.com>
 * @license  Apache-2.0 http://www.apache.org/licenses/LICENSE-2.0
 * @link     https://www.jdcloud.com/help/faq
 */

namespace Jdcloud\Ossopenapi;

use Jdcloud\JdCloudClient;
use Jdcloud\Api\Service;
use Jdcloud\Api\DocModel;
use Jdcloud\Api\ApiProvider;
use Jdcloud\PresignUrlMiddleware;

/**
 * Client used to interact with ossopenapi.
 *
 * @method \Jdcloud\Result getSingleBucketCapacity(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getSingleBucketCapacityAsync(array $args = [])
 * @method \Jdcloud\Result getBackSourceConfiguration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getBackSourceConfigurationAsync(array $args = [])
 * @method \Jdcloud\Result putBackSourceConfiguration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putBackSourceConfigurationAsync(array $args = [])
 * @method \Jdcloud\Result deleteBackSourceConfiguration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteBackSourceConfigurationAsync(array $args = [])
 * @method \Jdcloud\Result getHistoricalReplicatTask(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getHistoricalReplicatTaskAsync(array $args = [])
 * @method \Jdcloud\Result abortHistoricalReplicatTask(array $args = [])
 * @method \GuzzleHttp\Promise\Promise abortHistoricalReplicatTaskAsync(array $args = [])
 * @method \Jdcloud\Result listHistoricalReplicatTasks(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listHistoricalReplicatTasksAsync(array $args = [])
 * @method \Jdcloud\Result createHistoricalReplicatTask(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createHistoricalReplicatTaskAsync(array $args = [])
 */
class OssopenapiClient extends JdCloudClient
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
                        'service' => 'ossopenapi',
                        'presign_param' => 'PresignedUrl',
                    ]
                ),
                'ossopenapi'
            );
        };

        parent::__construct($args);
    }
}