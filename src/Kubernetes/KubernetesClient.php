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
 * @method \Jdcloud\Result describeMatchAzs(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeMatchAzsAsync(array $args = [])
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
 * @method \Jdcloud\Result addClusterNetworkDetail(array $args = [])
 * @method \GuzzleHttp\Promise\Promise addClusterNetworkDetailAsync(array $args = [])
 * @method \Jdcloud\Result describeClusterCheck(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeClusterCheckAsync(array $args = [])
 * @method \Jdcloud\Result describeClusterChecks(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeClusterChecksAsync(array $args = [])
 * @method \Jdcloud\Result describeProxyKubeConfig(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeProxyKubeConfigAsync(array $args = [])
 * @method \Jdcloud\Result deleteNodeInstances2(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteNodeInstances2Async(array $args = [])
 * @method \Jdcloud\Result describeLatestOperations(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeLatestOperationsAsync(array $args = [])
 * @method \Jdcloud\Result describeOperations(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeOperationsAsync(array $args = [])
 * @method \Jdcloud\Result describeLatestOperation(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeLatestOperationAsync(array $args = [])
 * @method \Jdcloud\Result describeOperation(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeOperationAsync(array $args = [])
 * @method \Jdcloud\Result describeOperationNodes(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeOperationNodesAsync(array $args = [])
 * @method \Jdcloud\Result describeClusterState(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeClusterStateAsync(array $args = [])
 * @method \Jdcloud\Result createHpcNodeGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createHpcNodeGroupAsync(array $args = [])
 * @method \Jdcloud\Result deleteHpcNodeGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteHpcNodeGroupAsync(array $args = [])
 * @method \Jdcloud\Result setHpcNodeGroupSize(array $args = [])
 * @method \GuzzleHttp\Promise\Promise setHpcNodeGroupSizeAsync(array $args = [])
 * @method \Jdcloud\Result importInstancesToHpcNodeGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise importInstancesToHpcNodeGroupAsync(array $args = [])
 * @method \Jdcloud\Result describeNodes(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeNodesAsync(array $args = [])
 * @method \Jdcloud\Result resetNode(array $args = [])
 * @method \GuzzleHttp\Promise\Promise resetNodeAsync(array $args = [])
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
 * @method \Jdcloud\Result setNodeGroupCA(array $args = [])
 * @method \GuzzleHttp\Promise\Promise setNodeGroupCAAsync(array $args = [])
 * @method \Jdcloud\Result deleteNodeInstances(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteNodeInstancesAsync(array $args = [])
 * @method \Jdcloud\Result modifyNodeGroupPassword(array $args = [])
 * @method \GuzzleHttp\Promise\Promise modifyNodeGroupPasswordAsync(array $args = [])
 * @method \Jdcloud\Result importInstancesToNodeGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise importInstancesToNodeGroupAsync(array $args = [])
 * @method \Jdcloud\Result describeQuotas(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeQuotasAsync(array $args = [])
 * @method \Jdcloud\Result describeVersions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeVersionsAsync(array $args = [])
 * @method \Jdcloud\Result describeInstanceTypeImages(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeInstanceTypeImagesAsync(array $args = [])
 * @method \Jdcloud\Result describeServerlessClusters(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeServerlessClustersAsync(array $args = [])
 * @method \Jdcloud\Result createServerlessCluster(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createServerlessClusterAsync(array $args = [])
 * @method \Jdcloud\Result describeServerlessCluster(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeServerlessClusterAsync(array $args = [])
 * @method \Jdcloud\Result modifyServerlessCluster(array $args = [])
 * @method \GuzzleHttp\Promise\Promise modifyServerlessClusterAsync(array $args = [])
 * @method \Jdcloud\Result deleteServerlessCluster(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteServerlessClusterAsync(array $args = [])
 * @method \Jdcloud\Result describeServerlessVersions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeServerlessVersionsAsync(array $args = [])
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