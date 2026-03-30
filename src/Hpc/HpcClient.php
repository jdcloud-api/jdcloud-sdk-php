<?php
/**
 * Hpc
 *
 * @category Jdcloud
 * @package  Jdcloud\Hpc
 * @author   Jdcloud <jdcloud-api@jd.com>
 * @license  Apache-2.0 http://www.apache.org/licenses/LICENSE-2.0
 * @link     https://www.jdcloud.com/help/faq
 */

namespace Jdcloud\Hpc;

use Jdcloud\JdCloudClient;
use Jdcloud\Api\Service;
use Jdcloud\Api\DocModel;
use Jdcloud\Api\ApiProvider;
use Jdcloud\PresignUrlMiddleware;

/**
 * Client used to interact with hpc.
 *
 * @method \Jdcloud\Result describeDiagnosticResults(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeDiagnosticResultsAsync(array $args = [])
 * @method \Jdcloud\Result createDiagnosticTask(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createDiagnosticTaskAsync(array $args = [])
 * @method \Jdcloud\Result describeDiagnosticResult(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeDiagnosticResultAsync(array $args = [])
 * @method \Jdcloud\Result describeInstanceTypes(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeInstanceTypesAsync(array $args = [])
 * @method \Jdcloud\Result describeInstances(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeInstancesAsync(array $args = [])
 * @method \Jdcloud\Result createInstances(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createInstancesAsync(array $args = [])
 * @method \Jdcloud\Result describeInstance(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeInstanceAsync(array $args = [])
 * @method \Jdcloud\Result startInstance(array $args = [])
 * @method \GuzzleHttp\Promise\Promise startInstanceAsync(array $args = [])
 * @method \Jdcloud\Result stopInstance(array $args = [])
 * @method \GuzzleHttp\Promise\Promise stopInstanceAsync(array $args = [])
 * @method \Jdcloud\Result rebootInstance(array $args = [])
 * @method \GuzzleHttp\Promise\Promise rebootInstanceAsync(array $args = [])
 * @method \Jdcloud\Result rebuildInstance(array $args = [])
 * @method \GuzzleHttp\Promise\Promise rebuildInstanceAsync(array $args = [])
 * @method \Jdcloud\Result recoverInstance(array $args = [])
 * @method \GuzzleHttp\Promise\Promise recoverInstanceAsync(array $args = [])
 * @method \Jdcloud\Result modifyInstancePassword(array $args = [])
 * @method \GuzzleHttp\Promise\Promise modifyInstancePasswordAsync(array $args = [])
 * @method \Jdcloud\Result associateElasticIp(array $args = [])
 * @method \GuzzleHttp\Promise\Promise associateElasticIpAsync(array $args = [])
 * @method \Jdcloud\Result disassociateElasticIp(array $args = [])
 * @method \GuzzleHttp\Promise\Promise disassociateElasticIpAsync(array $args = [])
 * @method \Jdcloud\Result modifyInstanceAttribute(array $args = [])
 * @method \GuzzleHttp\Promise\Promise modifyInstanceAttributeAsync(array $args = [])
 * @method \Jdcloud\Result describeChargeDuration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeChargeDurationAsync(array $args = [])
 * @method \Jdcloud\Result exportInstancesData(array $args = [])
 * @method \GuzzleHttp\Promise\Promise exportInstancesDataAsync(array $args = [])
 * @method \Jdcloud\Result describeNetworkTopology(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeNetworkTopologyAsync(array $args = [])
 * @method \Jdcloud\Result describeNetworkRelationship(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeNetworkRelationshipAsync(array $args = [])
 * @method \Jdcloud\Result describeCommunicationRange(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeCommunicationRangeAsync(array $args = [])
 * @method \Jdcloud\Result deleteCluster(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteClusterAsync(array $args = [])
 * @method \Jdcloud\Result modifyCluster(array $args = [])
 * @method \GuzzleHttp\Promise\Promise modifyClusterAsync(array $args = [])
 * @method \Jdcloud\Result createCluster(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createClusterAsync(array $args = [])
 * @method \Jdcloud\Result describePackages(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describePackagesAsync(array $args = [])
 * @method \Jdcloud\Result describePackage(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describePackageAsync(array $args = [])
 * @method \Jdcloud\Result taskFinished(array $args = [])
 * @method \GuzzleHttp\Promise\Promise taskFinishedAsync(array $args = [])
 * @method \Jdcloud\Result taskHeartbeat(array $args = [])
 * @method \GuzzleHttp\Promise\Promise taskHeartbeatAsync(array $args = [])
 * @method \Jdcloud\Result describeTasks(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeTasksAsync(array $args = [])
 * @method \Jdcloud\Result describeQuota(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeQuotaAsync(array $args = [])
 * @method \Jdcloud\Result describeAvailableClusters(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeAvailableClustersAsync(array $args = [])
 * @method \Jdcloud\Result eventRemoteWrite(array $args = [])
 * @method \GuzzleHttp\Promise\Promise eventRemoteWriteAsync(array $args = [])
 */
class HpcClient extends JdCloudClient
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
                        'service' => 'hpc',
                        'presign_param' => 'PresignedUrl',
                    ]
                ),
                'hpc'
            );
        };

        parent::__construct($args);
    }
}