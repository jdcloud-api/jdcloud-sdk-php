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
 * @method \Jdcloud\Result getBucketCapacity(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getBucketCapacityAsync(array $args = [])
 * @method \Jdcloud\Result getSingleBucketCapacity(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getSingleBucketCapacityAsync(array $args = [])
 * @method \Jdcloud\Result getBackSourceConfiguration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getBackSourceConfigurationAsync(array $args = [])
 * @method \Jdcloud\Result putBackSourceConfiguration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putBackSourceConfigurationAsync(array $args = [])
 * @method \Jdcloud\Result deleteBackSourceConfiguration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteBackSourceConfigurationAsync(array $args = [])
 * @method \Jdcloud\Result listClouds(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listCloudsAsync(array $args = [])
 * @method \Jdcloud\Result createCloud(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createCloudAsync(array $args = [])
 * @method \Jdcloud\Result getCloud(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getCloudAsync(array $args = [])
 * @method \Jdcloud\Result updateCloud(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateCloudAsync(array $args = [])
 * @method \Jdcloud\Result deleteCloud(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteCloudAsync(array $args = [])
 * @method \Jdcloud\Result listCNames(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listCNamesAsync(array $args = [])
 * @method \Jdcloud\Result getHistoricalReplicatTask(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getHistoricalReplicatTaskAsync(array $args = [])
 * @method \Jdcloud\Result abortHistoricalReplicatTask(array $args = [])
 * @method \GuzzleHttp\Promise\Promise abortHistoricalReplicatTaskAsync(array $args = [])
 * @method \Jdcloud\Result listHistoricalReplicatTasks(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listHistoricalReplicatTasksAsync(array $args = [])
 * @method \Jdcloud\Result createHistoricalReplicatTask(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createHistoricalReplicatTaskAsync(array $args = [])
 * @method \Jdcloud\Result openService(array $args = [])
 * @method \GuzzleHttp\Promise\Promise openServiceAsync(array $args = [])
 * @method \Jdcloud\Result getBucketMaxCount(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getBucketMaxCountAsync(array $args = [])
 * @method \Jdcloud\Result putBucketMaxCount(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putBucketMaxCountAsync(array $args = [])
 * @method \Jdcloud\Result deleteBucketMaxCount(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteBucketMaxCountAsync(array $args = [])
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