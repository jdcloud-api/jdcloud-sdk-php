<?php
/**
 * Tidb
 *
 * @category Jdcloud
 * @package  Jdcloud\Tidb
 * @author   Jdcloud <jdcloud-api@jd.com>
 * @license  Apache-2.0 http://www.apache.org/licenses/LICENSE-2.0
 * @link     https://www.jdcloud.com/help/faq
 */

namespace Jdcloud\Tidb;

use Jdcloud\JdCloudClient;
use Jdcloud\Api\Service;
use Jdcloud\Api\DocModel;
use Jdcloud\Api\ApiProvider;
use Jdcloud\PresignUrlMiddleware;

/**
 * Client used to interact with tidb.
 *
 * @method \Jdcloud\Result describeAccounts(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeAccountsAsync(array $args = [])
 * @method \Jdcloud\Result createAccount(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createAccountAsync(array $args = [])
 * @method \Jdcloud\Result resetPassword(array $args = [])
 * @method \GuzzleHttp\Promise\Promise resetPasswordAsync(array $args = [])
 * @method \Jdcloud\Result describeBackups(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeBackupsAsync(array $args = [])
 * @method \Jdcloud\Result createBackup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createBackupAsync(array $args = [])
 * @method \Jdcloud\Result deleteBackup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteBackupAsync(array $args = [])
 * @method \Jdcloud\Result describeAvailableZones(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeAvailableZonesAsync(array $args = [])
 * @method \Jdcloud\Result describeOrderableInstanceType(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeOrderableInstanceTypeAsync(array $args = [])
 * @method \Jdcloud\Result describeVersions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeVersionsAsync(array $args = [])
 * @method \Jdcloud\Result createInstance(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createInstanceAsync(array $args = [])
 * @method \Jdcloud\Result describeInstanceAttributes(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeInstanceAttributesAsync(array $args = [])
 * @method \Jdcloud\Result deleteInstance(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteInstanceAsync(array $args = [])
 * @method \Jdcloud\Result describeInstances(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeInstancesAsync(array $args = [])
 * @method \Jdcloud\Result describeInstanceClasses(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeInstanceClassesAsync(array $args = [])
 * @method \Jdcloud\Result createInstanceFromBackup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createInstanceFromBackupAsync(array $args = [])
 * @method \Jdcloud\Result describeBackupPolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeBackupPolicyAsync(array $args = [])
 * @method \Jdcloud\Result modifyBackupPolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise modifyBackupPolicyAsync(array $args = [])
 * @method \Jdcloud\Result modifyInstanceName(array $args = [])
 * @method \GuzzleHttp\Promise\Promise modifyInstanceNameAsync(array $args = [])
 * @method \Jdcloud\Result modifyNodeNum(array $args = [])
 * @method \GuzzleHttp\Promise\Promise modifyNodeNumAsync(array $args = [])
 * @method \Jdcloud\Result modifyInstanceSpec(array $args = [])
 * @method \GuzzleHttp\Promise\Promise modifyInstanceSpecAsync(array $args = [])
 * @method \Jdcloud\Result describeNodes(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeNodesAsync(array $args = [])
 * @method \Jdcloud\Result describeParameters(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeParametersAsync(array $args = [])
 * @method \Jdcloud\Result modifyParameters(array $args = [])
 * @method \GuzzleHttp\Promise\Promise modifyParametersAsync(array $args = [])
 * @method \Jdcloud\Result rebootPod(array $args = [])
 * @method \GuzzleHttp\Promise\Promise rebootPodAsync(array $args = [])
 * @method \Jdcloud\Result upgradeEngineVersion(array $args = [])
 * @method \GuzzleHttp\Promise\Promise upgradeEngineVersionAsync(array $args = [])
 * @method \Jdcloud\Result describeUpgradeVersions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeUpgradeVersionsAsync(array $args = [])
 * @method \Jdcloud\Result describeUpgradePlan(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeUpgradePlanAsync(array $args = [])
 * @method \Jdcloud\Result describeDataMigration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeDataMigrationAsync(array $args = [])
 * @method \Jdcloud\Result createDataMigration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createDataMigrationAsync(array $args = [])
 * @method \Jdcloud\Result verifyFilefromOSS(array $args = [])
 * @method \GuzzleHttp\Promise\Promise verifyFilefromOSSAsync(array $args = [])
 * @method \Jdcloud\Result describeWhiteList(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeWhiteListAsync(array $args = [])
 * @method \Jdcloud\Result addWhiteListGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise addWhiteListGroupAsync(array $args = [])
 * @method \Jdcloud\Result modifyWhiteList(array $args = [])
 * @method \GuzzleHttp\Promise\Promise modifyWhiteListAsync(array $args = [])
 * @method \Jdcloud\Result deleteWhiteListGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteWhiteListGroupAsync(array $args = [])
 */
class TidbClient extends JdCloudClient
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
                        'service' => 'tidb',
                        'presign_param' => 'PresignedUrl',
                    ]
                ),
                'tidb'
            );
        };

        parent::__construct($args);
    }
}