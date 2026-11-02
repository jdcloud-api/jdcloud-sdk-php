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
 * @method \Jdcloud\Result describeProgressStatus(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeProgressStatusAsync(array $args = [])
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
 * @method \Jdcloud\Result describeClusterConfigs(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeClusterConfigsAsync(array $args = [])
 * @method \Jdcloud\Result listHivePermissions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listHivePermissionsAsync(array $args = [])
 * @method \Jdcloud\Result grantHivePermission(array $args = [])
 * @method \GuzzleHttp\Promise\Promise grantHivePermissionAsync(array $args = [])
 * @method \Jdcloud\Result revokeHivePermission(array $args = [])
 * @method \GuzzleHttp\Promise\Promise revokeHivePermissionAsync(array $args = [])
 * @method \Jdcloud\Result listDatabases(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listDatabasesAsync(array $args = [])
 * @method \Jdcloud\Result createDatabase(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createDatabaseAsync(array $args = [])
 * @method \Jdcloud\Result getDatabase(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getDatabaseAsync(array $args = [])
 * @method \Jdcloud\Result listTables(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listTablesAsync(array $args = [])
 * @method \Jdcloud\Result createTable(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createTableAsync(array $args = [])
 * @method \Jdcloud\Result getTable(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getTableAsync(array $args = [])
 * @method \Jdcloud\Result listPartitions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listPartitionsAsync(array $args = [])
 * @method \Jdcloud\Result dropDatabase(array $args = [])
 * @method \GuzzleHttp\Promise\Promise dropDatabaseAsync(array $args = [])
 * @method \Jdcloud\Result dropTable(array $args = [])
 * @method \GuzzleHttp\Promise\Promise dropTableAsync(array $args = [])
 * @method \Jdcloud\Result alterTable(array $args = [])
 * @method \GuzzleHttp\Promise\Promise alterTableAsync(array $args = [])
 * @method \Jdcloud\Result createOpenLdapUser(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createOpenLdapUserAsync(array $args = [])
 * @method \Jdcloud\Result describeScalingGroups(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeScalingGroupsAsync(array $args = [])
 * @method \Jdcloud\Result createScalingGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createScalingGroupAsync(array $args = [])
 * @method \Jdcloud\Result describeScalingGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeScalingGroupAsync(array $args = [])
 * @method \Jdcloud\Result modifyScalingGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise modifyScalingGroupAsync(array $args = [])
 * @method \Jdcloud\Result copyScalingGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise copyScalingGroupAsync(array $args = [])
 * @method \Jdcloud\Result deleteScalingGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteScalingGroupAsync(array $args = [])
 * @method \Jdcloud\Result executeScalingManually(array $args = [])
 * @method \GuzzleHttp\Promise\Promise executeScalingManuallyAsync(array $args = [])
 * @method \Jdcloud\Result describeScalableNodeGroups(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeScalableNodeGroupsAsync(array $args = [])
 * @method \Jdcloud\Result describeScalingMetrics(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeScalingMetricsAsync(array $args = [])
 * @method \Jdcloud\Result describeScalingActivities(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeScalingActivitiesAsync(array $args = [])
 * @method \Jdcloud\Result exportScalingActivities(array $args = [])
 * @method \GuzzleHttp\Promise\Promise exportScalingActivitiesAsync(array $args = [])
 * @method \Jdcloud\Result describeScalingActivityLog(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeScalingActivityLogAsync(array $args = [])
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