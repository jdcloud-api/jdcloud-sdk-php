<?php
/**
 * Kubernetes
 *
 * @category Jdcloud
 * @package  Jdcloud\Kubernetes
 * @author   Jdcloud <jdcloud-api@jd.com>
 * @license  Apache-2.0 http://www.apache.org/licenses/LICENSE-2.0
 * @link     https://www.jdcloud.com/help/faq
 */

namespace Jdcloud\Kubernetes;

use Jdcloud\JdCloudClient;
use Jdcloud\Api\Service;
use Jdcloud\Api\DocModel;
use Jdcloud\Api\ApiProvider;
use Jdcloud\PresignUrlMiddleware;

/**
 * Client used to interact with kubernetes.
 *
 * @method \Jdcloud\Result describeClusters(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeClustersAsync(array $args = [])
 * @method \Jdcloud\Result createCluster(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createClusterAsync(array $args = [])
 * @method \Jdcloud\Result describeCluster(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeClusterAsync(array $args = [])
 * @method \Jdcloud\Result modifyCluster(array $args = [])
 * @method \GuzzleHttp\Promise\Promise modifyClusterAsync(array $args = [])
 * @method \Jdcloud\Result deleteCluster(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteClusterAsync(array $args = [])
 * @method \Jdcloud\Result setUserMetrics(array $args = [])
 * @method \GuzzleHttp\Promise\Promise setUserMetricsAsync(array $args = [])
 * @method \Jdcloud\Result describeNodeGroups(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeNodeGroupsAsync(array $args = [])
 * @method \Jdcloud\Result createNodeGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createNodeGroupAsync(array $args = [])
 * @method \Jdcloud\Result describeNodeGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeNodeGroupAsync(array $args = [])
 * @method \Jdcloud\Result modifyNodeGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise modifyNodeGroupAsync(array $args = [])
 * @method \Jdcloud\Result deleteNodeGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteNodeGroupAsync(array $args = [])
 * @method \Jdcloud\Result setNodeGroupSize(array $args = [])
 * @method \GuzzleHttp\Promise\Promise setNodeGroupSizeAsync(array $args = [])
 * @method \Jdcloud\Result setAutoRepair(array $args = [])
 * @method \GuzzleHttp\Promise\Promise setAutoRepairAsync(array $args = [])
 * @method \Jdcloud\Result describeQuotas(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeQuotasAsync(array $args = [])
 * @method \Jdcloud\Result describeServerConfig(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeServerConfigAsync(array $args = [])
 * @method \Jdcloud\Result describeImages(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeImagesAsync(array $args = [])
 * @method \Jdcloud\Result describeVersions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeVersionsAsync(array $args = [])
 */
class KubernetesClient extends JdCloudClient
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
                        'service' => 'kubernetes',
                        'presign_param' => 'PresignedUrl',
                    ]
                ),
                'kubernetes'
            );
        };

        parent::__construct($args);
    }
}