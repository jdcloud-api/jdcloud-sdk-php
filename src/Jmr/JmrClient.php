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
 * @method \Jdcloud\Result idataCluster(array $args = [])
 * @method \GuzzleHttp\Promise\Promise idataClusterAsync(array $args = [])
 * @method \Jdcloud\Result getSoftwareInfo(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getSoftwareInfoAsync(array $args = [])
 * @method \Jdcloud\Result getJmrVersionList(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getJmrVersionListAsync(array $args = [])
 * @method \Jdcloud\Result monitorLabelList(array $args = [])
 * @method \GuzzleHttp\Promise\Promise monitorLabelListAsync(array $args = [])
 * @method \Jdcloud\Result describeCluster(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeClusterAsync(array $args = [])
 * @method \Jdcloud\Result describeClusters(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeClustersAsync(array $args = [])
 * @method \Jdcloud\Result releaseCluster(array $args = [])
 * @method \GuzzleHttp\Promise\Promise releaseClusterAsync(array $args = [])
 * @method \Jdcloud\Result clusterExpansion(array $args = [])
 * @method \GuzzleHttp\Promise\Promise clusterExpansionAsync(array $args = [])
 * @method \Jdcloud\Result clusterReduction(array $args = [])
 * @method \GuzzleHttp\Promise\Promise clusterReductionAsync(array $args = [])
 * @method \Jdcloud\Result createCluster(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createClusterAsync(array $args = [])
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