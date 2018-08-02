<?php
/**
 * Streamcomputer
 *
 * @category Jdcloud
 * @package  Jdcloud\Streamcomputer
 * @author   Jdcloud <jdcloud-api@jd.com>
 * @license  Apache-2.0 http://www.apache.org/licenses/LICENSE-2.0
 * @link     https://www.jdcloud.com/help/faq
 */

namespace Jdcloud\Streamcomputer;

use Jdcloud\JdcloudClient;
use Jdcloud\Api\Service;
use Jdcloud\Api\DocModel;
use Jdcloud\Api\ApiProvider;
use Jdcloud\PresignUrlMiddleware;

/**
 * Client used to interact with streamcomputer.
 *
 * @method \Jdcloud\Result describeJob(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeJobAsync(array $args = [])
 * @method \Jdcloud\Result addOrUpdateJob(array $args = [])
 * @method \GuzzleHttp\Promise\Promise addOrUpdateJobAsync(array $args = [])
 * @method \Jdcloud\Result deleteJob(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteJobAsync(array $args = [])
 * @method \Jdcloud\Result getJobList(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getJobListAsync(array $args = [])
 * @method \Jdcloud\Result startJob(array $args = [])
 * @method \GuzzleHttp\Promise\Promise startJobAsync(array $args = [])
 * @method \Jdcloud\Result stopJob(array $args = [])
 * @method \GuzzleHttp\Promise\Promise stopJobAsync(array $args = [])
 * @method \Jdcloud\Result queryNamespaces(array $args = [])
 * @method \GuzzleHttp\Promise\Promise queryNamespacesAsync(array $args = [])
 * @method \Jdcloud\Result queryNamespaceDetail(array $args = [])
 * @method \GuzzleHttp\Promise\Promise queryNamespaceDetailAsync(array $args = [])
 * @method \Jdcloud\Result createNamespace(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createNamespaceAsync(array $args = [])
 * @method \Jdcloud\Result updateNamespace(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateNamespaceAsync(array $args = [])
 * @method \Jdcloud\Result deleteNamespace(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteNamespaceAsync(array $args = [])
 * @method \Jdcloud\Result describeStorage(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeStorageAsync(array $args = [])
 * @method \Jdcloud\Result addOrUpdateStorage(array $args = [])
 * @method \GuzzleHttp\Promise\Promise addOrUpdateStorageAsync(array $args = [])
 * @method \Jdcloud\Result deleteStorage(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteStorageAsync(array $args = [])
 * @method \Jdcloud\Result getStorageList(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getStorageListAsync(array $args = [])
 */
class StreamcomputerClient extends JdcloudClient
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
                        'service' => 'streamcomputer',
                        'presign_param' => 'PresignedUrl',
                    ]
                ),
                'streamcomputer'
            );
        };

        parent::__construct($args);
    }
}