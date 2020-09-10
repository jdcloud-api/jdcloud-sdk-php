<?php
/**
 * Dbaudit
 *
 * @category Jdcloud
 * @package  Jdcloud\Dbaudit
 * @author   Jdcloud <jdcloud-api@jd.com>
 * @license  Apache-2.0 http://www.apache.org/licenses/LICENSE-2.0
 * @link     https://www.jdcloud.com/help/faq
 */

namespace Jdcloud\Dbaudit;

use Jdcloud\JdCloudClient;
use Jdcloud\Api\Service;
use Jdcloud\Api\DocModel;
use Jdcloud\Api\ApiProvider;
use Jdcloud\PresignUrlMiddleware;

/**
 * Client used to interact with dbaudit.
 *
 * @method \Jdcloud\Result describeAgentList(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeAgentListAsync(array $args = [])
 * @method \Jdcloud\Result installAgent(array $args = [])
 * @method \GuzzleHttp\Promise\Promise installAgentAsync(array $args = [])
 * @method \Jdcloud\Result setAuditConfig(array $args = [])
 * @method \GuzzleHttp\Promise\Promise setAuditConfigAsync(array $args = [])
 * @method \Jdcloud\Result describeAgentDatabases(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeAgentDatabasesAsync(array $args = [])
 * @method \Jdcloud\Result modyfyAgentLimits(array $args = [])
 * @method \GuzzleHttp\Promise\Promise modyfyAgentLimitsAsync(array $args = [])
 * @method \Jdcloud\Result uninstallAgent(array $args = [])
 * @method \GuzzleHttp\Promise\Promise uninstallAgentAsync(array $args = [])
 * @method \Jdcloud\Result modyfyAuditNetCards(array $args = [])
 * @method \GuzzleHttp\Promise\Promise modyfyAuditNetCardsAsync(array $args = [])
 * @method \Jdcloud\Result deleteAuditFromAgent(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteAuditFromAgentAsync(array $args = [])
 * @method \Jdcloud\Result describeDatabases(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeDatabasesAsync(array $args = [])
 * @method \Jdcloud\Result addDatabase(array $args = [])
 * @method \GuzzleHttp\Promise\Promise addDatabaseAsync(array $args = [])
 * @method \Jdcloud\Result enableAuditResponse(array $args = [])
 * @method \GuzzleHttp\Promise\Promise enableAuditResponseAsync(array $args = [])
 * @method \Jdcloud\Result disableAuditResponse(array $args = [])
 * @method \GuzzleHttp\Promise\Promise disableAuditResponseAsync(array $args = [])
 * @method \Jdcloud\Result describeDatabase(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeDatabaseAsync(array $args = [])
 * @method \Jdcloud\Result updateDatabase(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateDatabaseAsync(array $args = [])
 * @method \Jdcloud\Result deleteDatabase(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteDatabaseAsync(array $args = [])
 * @method \Jdcloud\Result describeInstanceList(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeInstanceListAsync(array $args = [])
 * @method \Jdcloud\Result describeInstance(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeInstanceAsync(array $args = [])
 * @method \Jdcloud\Result modifyInstance(array $args = [])
 * @method \GuzzleHttp\Promise\Promise modifyInstanceAsync(array $args = [])
 * @method \Jdcloud\Result describeIpWhiteList(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeIpWhiteListAsync(array $args = [])
 * @method \Jdcloud\Result addIpWhiteItem(array $args = [])
 * @method \GuzzleHttp\Promise\Promise addIpWhiteItemAsync(array $args = [])
 * @method \Jdcloud\Result deleteIpWhiteItem(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteIpWhiteItemAsync(array $args = [])
 * @method \Jdcloud\Result describeAuditLogList(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeAuditLogListAsync(array $args = [])
 * @method \Jdcloud\Result describeAuditLog(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeAuditLogAsync(array $args = [])
 * @method \Jdcloud\Result describeMaskRuleList(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeMaskRuleListAsync(array $args = [])
 * @method \Jdcloud\Result addMaskRule(array $args = [])
 * @method \GuzzleHttp\Promise\Promise addMaskRuleAsync(array $args = [])
 * @method \Jdcloud\Result modifyMask(array $args = [])
 * @method \GuzzleHttp\Promise\Promise modifyMaskAsync(array $args = [])
 * @method \Jdcloud\Result deleteMask(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteMaskAsync(array $args = [])
 * @method \Jdcloud\Result describeTaskList(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeTaskListAsync(array $args = [])
 * @method \Jdcloud\Result createTask(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createTaskAsync(array $args = [])
 * @method \Jdcloud\Result startTask(array $args = [])
 * @method \GuzzleHttp\Promise\Promise startTaskAsync(array $args = [])
 * @method \Jdcloud\Result stopTask(array $args = [])
 * @method \GuzzleHttp\Promise\Promise stopTaskAsync(array $args = [])
 * @method \Jdcloud\Result describeReportList(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeReportListAsync(array $args = [])
 * @method \Jdcloud\Result modifyTask(array $args = [])
 * @method \GuzzleHttp\Promise\Promise modifyTaskAsync(array $args = [])
 * @method \Jdcloud\Result deleteTask(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteTaskAsync(array $args = [])
 * @method \Jdcloud\Result downloadReport(array $args = [])
 * @method \GuzzleHttp\Promise\Promise downloadReportAsync(array $args = [])
 * @method \Jdcloud\Result deleteReport(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteReportAsync(array $args = [])
 * @method \Jdcloud\Result describeRuleGroups(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeRuleGroupsAsync(array $args = [])
 * @method \Jdcloud\Result addRuleGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise addRuleGroupAsync(array $args = [])
 * @method \Jdcloud\Result describeRuleGroupRules(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeRuleGroupRulesAsync(array $args = [])
 * @method \Jdcloud\Result addRule(array $args = [])
 * @method \GuzzleHttp\Promise\Promise addRuleAsync(array $args = [])
 * @method \Jdcloud\Result deleteRuleGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteRuleGroupAsync(array $args = [])
 * @method \Jdcloud\Result describeRule(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeRuleAsync(array $args = [])
 * @method \Jdcloud\Result modifyRule(array $args = [])
 * @method \GuzzleHttp\Promise\Promise modifyRuleAsync(array $args = [])
 * @method \Jdcloud\Result deleteRule(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteRuleAsync(array $args = [])
 * @method \Jdcloud\Result enableRuleGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise enableRuleGroupAsync(array $args = [])
 * @method \Jdcloud\Result disableRuleGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise disableRuleGroupAsync(array $args = [])
 * @method \Jdcloud\Result deployRuleGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deployRuleGroupAsync(array $args = [])
 */
class DbauditClient extends JdCloudClient
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
                        'service' => 'dbaudit',
                        'presign_param' => 'PresignedUrl',
                    ]
                ),
                'dbaudit'
            );
        };

        parent::__construct($args);
    }
}