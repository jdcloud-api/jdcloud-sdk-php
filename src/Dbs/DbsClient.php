<?php
/**
 * Dbs
 *
 * @category Jdcloud
 * @package  Jdcloud\Dbs
 * @author   Jdcloud <jdcloud-api@jd.com>
 * @license  Apache-2.0 http://www.apache.org/licenses/LICENSE-2.0
 * @link     https://www.jdcloud.com/help/faq
 */

namespace Jdcloud\Dbs;

use Jdcloud\JdCloudClient;
use Jdcloud\Api\Service;
use Jdcloud\Api\DocModel;
use Jdcloud\Api\ApiProvider;
use Jdcloud\PresignUrlMiddleware;

/**
 * Client used to interact with dbs.
 *
 * @method \Jdcloud\Result agentRegister(array $args = [])
 * @method \GuzzleHttp\Promise\Promise agentRegisterAsync(array $args = [])
 * @method \Jdcloud\Result agentTasks(array $args = [])
 * @method \GuzzleHttp\Promise\Promise agentTasksAsync(array $args = [])
 * @method \Jdcloud\Result agentPlans(array $args = [])
 * @method \GuzzleHttp\Promise\Promise agentPlansAsync(array $args = [])
 * @method \Jdcloud\Result reportTask(array $args = [])
 * @method \GuzzleHttp\Promise\Promise reportTaskAsync(array $args = [])
 * @method \Jdcloud\Result modifyTask(array $args = [])
 * @method \GuzzleHttp\Promise\Promise modifyTaskAsync(array $args = [])
 * @method \Jdcloud\Result backupFile(array $args = [])
 * @method \GuzzleHttp\Promise\Promise backupFileAsync(array $args = [])
 * @method \Jdcloud\Result reportPrecheck(array $args = [])
 * @method \GuzzleHttp\Promise\Promise reportPrecheckAsync(array $args = [])
 * @method \Jdcloud\Result describeAgents(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeAgentsAsync(array $args = [])
 * @method \Jdcloud\Result describeAgentAttributes(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeAgentAttributesAsync(array $args = [])
 * @method \Jdcloud\Result describeBackupPlans(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeBackupPlansAsync(array $args = [])
 * @method \Jdcloud\Result createBackupPlan(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createBackupPlanAsync(array $args = [])
 * @method \Jdcloud\Result describeBackupPlanAttributes(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeBackupPlanAttributesAsync(array $args = [])
 * @method \Jdcloud\Result deleteBackupPlan(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteBackupPlanAsync(array $args = [])
 * @method \Jdcloud\Result describePreCheck(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describePreCheckAsync(array $args = [])
 * @method \Jdcloud\Result initBackupPlan(array $args = [])
 * @method \GuzzleHttp\Promise\Promise initBackupPlanAsync(array $args = [])
 * @method \Jdcloud\Result createLogicalBackup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createLogicalBackupAsync(array $args = [])
 * @method \Jdcloud\Result createPhysicalBackup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createPhysicalBackupAsync(array $args = [])
 * @method \Jdcloud\Result describeBinlogBackups(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeBinlogBackupsAsync(array $args = [])
 * @method \Jdcloud\Result describeLogicalBackups(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeLogicalBackupsAsync(array $args = [])
 * @method \Jdcloud\Result describePhysicalBackups(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describePhysicalBackupsAsync(array $args = [])
 * @method \Jdcloud\Result getShouldDelBackups(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getShouldDelBackupsAsync(array $args = [])
 * @method \Jdcloud\Result updateShouldDelBackups(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateShouldDelBackupsAsync(array $args = [])
 * @method \Jdcloud\Result getLastBackupBinlog(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getLastBackupBinlogAsync(array $args = [])
 * @method \Jdcloud\Result describeRestoreTasks(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeRestoreTasksAsync(array $args = [])
 * @method \Jdcloud\Result restoreLogicalBackup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise restoreLogicalBackupAsync(array $args = [])
 * @method \Jdcloud\Result restorePhysicalBackup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise restorePhysicalBackupAsync(array $args = [])
 * @method \Jdcloud\Result restoreToTime(array $args = [])
 * @method \GuzzleHttp\Promise\Promise restoreToTimeAsync(array $args = [])
 * @method \Jdcloud\Result deleteBackup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteBackupAsync(array $args = [])
 * @method \Jdcloud\Result modifyBackupObjects(array $args = [])
 * @method \GuzzleHttp\Promise\Promise modifyBackupObjectsAsync(array $args = [])
 * @method \Jdcloud\Result modifyBackupPolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise modifyBackupPolicyAsync(array $args = [])
 * @method \Jdcloud\Result modifySourceEndpoint(array $args = [])
 * @method \GuzzleHttp\Promise\Promise modifySourceEndpointAsync(array $args = [])
 * @method \Jdcloud\Result startBackupPlan(array $args = [])
 * @method \GuzzleHttp\Promise\Promise startBackupPlanAsync(array $args = [])
 * @method \Jdcloud\Result stopBackupPlan(array $args = [])
 * @method \GuzzleHttp\Promise\Promise stopBackupPlanAsync(array $args = [])
 */
class DbsClient extends JdCloudClient
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
                        'service' => 'dbs',
                        'presign_param' => 'PresignedUrl',
                    ]
                ),
                'dbs'
            );
        };

        parent::__construct($args);
    }
}