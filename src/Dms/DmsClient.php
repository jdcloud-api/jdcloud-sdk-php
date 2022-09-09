<?php
/**
 * Dms
 *
 * @category Jdcloud
 * @package  Jdcloud\Dms
 * @author   Jdcloud <jdcloud-api@jd.com>
 * @license  Apache-2.0 http://www.apache.org/licenses/LICENSE-2.0
 * @link     https://www.jdcloud.com/help/faq
 */

namespace Jdcloud\Dms;

use Jdcloud\JdCloudClient;
use Jdcloud\Api\Service;
use Jdcloud\Api\DocModel;
use Jdcloud\Api\ApiProvider;
use Jdcloud\PresignUrlMiddleware;

/**
 * Client used to interact with dms.
 *
 * @method \Jdcloud\Result generalCreateEvent(array $args = [])
 * @method \GuzzleHttp\Promise\Promise generalCreateEventAsync(array $args = [])
 * @method \Jdcloud\Result generalAlterEvent(array $args = [])
 * @method \GuzzleHttp\Promise\Promise generalAlterEventAsync(array $args = [])
 * @method \Jdcloud\Result generalDropEvent(array $args = [])
 * @method \GuzzleHttp\Promise\Promise generalDropEventAsync(array $args = [])
 * @method \Jdcloud\Result eventInfo(array $args = [])
 * @method \GuzzleHttp\Promise\Promise eventInfoAsync(array $args = [])
 * @method \Jdcloud\Result createImportFileTask(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createImportFileTaskAsync(array $args = [])
 * @method \Jdcloud\Result uploadImportFileTask(array $args = [])
 * @method \GuzzleHttp\Promise\Promise uploadImportFileTaskAsync(array $args = [])
 * @method \Jdcloud\Result createDataFlow(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createDataFlowAsync(array $args = [])
 * @method \Jdcloud\Result createStructureFlow(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createStructureFlowAsync(array $args = [])
 * @method \Jdcloud\Result createExportFlow(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createExportFlowAsync(array $args = [])
 * @method \Jdcloud\Result startFlow(array $args = [])
 * @method \GuzzleHttp\Promise\Promise startFlowAsync(array $args = [])
 * @method \Jdcloud\Result generalCreateFunction(array $args = [])
 * @method \GuzzleHttp\Promise\Promise generalCreateFunctionAsync(array $args = [])
 * @method \Jdcloud\Result generalAlterFunction(array $args = [])
 * @method \GuzzleHttp\Promise\Promise generalAlterFunctionAsync(array $args = [])
 * @method \Jdcloud\Result generalDropFunction(array $args = [])
 * @method \GuzzleHttp\Promise\Promise generalDropFunctionAsync(array $args = [])
 * @method \Jdcloud\Result functionList(array $args = [])
 * @method \GuzzleHttp\Promise\Promise functionListAsync(array $args = [])
 * @method \Jdcloud\Result functionInfo(array $args = [])
 * @method \GuzzleHttp\Promise\Promise functionInfoAsync(array $args = [])
 * @method \Jdcloud\Result functionInvoke(array $args = [])
 * @method \GuzzleHttp\Promise\Promise functionInvokeAsync(array $args = [])
 * @method \Jdcloud\Result generalCreateTableSql(array $args = [])
 * @method \GuzzleHttp\Promise\Promise generalCreateTableSqlAsync(array $args = [])
 * @method \Jdcloud\Result generalAlterTableSql(array $args = [])
 * @method \GuzzleHttp\Promise\Promise generalAlterTableSqlAsync(array $args = [])
 * @method \Jdcloud\Result historySql(array $args = [])
 * @method \GuzzleHttp\Promise\Promise historySqlAsync(array $args = [])
 * @method \Jdcloud\Result historyImportData(array $args = [])
 * @method \GuzzleHttp\Promise\Promise historyImportDataAsync(array $args = [])
 * @method \Jdcloud\Result queryInstance(array $args = [])
 * @method \GuzzleHttp\Promise\Promise queryInstanceAsync(array $args = [])
 * @method \Jdcloud\Result open(array $args = [])
 * @method \GuzzleHttp\Promise\Promise openAsync(array $args = [])
 * @method \Jdcloud\Result login(array $args = [])
 * @method \GuzzleHttp\Promise\Promise loginAsync(array $args = [])
 * @method \Jdcloud\Result logout(array $args = [])
 * @method \GuzzleHttp\Promise\Promise logoutAsync(array $args = [])
 * @method \Jdcloud\Result queryTypeInstance(array $args = [])
 * @method \GuzzleHttp\Promise\Promise queryTypeInstanceAsync(array $args = [])
 * @method \Jdcloud\Result tableInfo(array $args = [])
 * @method \GuzzleHttp\Promise\Promise tableInfoAsync(array $args = [])
 * @method \Jdcloud\Result databaseList(array $args = [])
 * @method \GuzzleHttp\Promise\Promise databaseListAsync(array $args = [])
 * @method \Jdcloud\Result tableList(array $args = [])
 * @method \GuzzleHttp\Promise\Promise tableListAsync(array $args = [])
 * @method \Jdcloud\Result sqlTableInfo(array $args = [])
 * @method \GuzzleHttp\Promise\Promise sqlTableInfoAsync(array $args = [])
 * @method \Jdcloud\Result getDmsDomain(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getDmsDomainAsync(array $args = [])
 * @method \Jdcloud\Result queryPersonalSqls(array $args = [])
 * @method \GuzzleHttp\Promise\Promise queryPersonalSqlsAsync(array $args = [])
 * @method \Jdcloud\Result addPersonalSql(array $args = [])
 * @method \GuzzleHttp\Promise\Promise addPersonalSqlAsync(array $args = [])
 * @method \Jdcloud\Result deletePersonalSql(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deletePersonalSqlAsync(array $args = [])
 * @method \Jdcloud\Result updatePersonalSql(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updatePersonalSqlAsync(array $args = [])
 * @method \Jdcloud\Result generalCreateProcedure(array $args = [])
 * @method \GuzzleHttp\Promise\Promise generalCreateProcedureAsync(array $args = [])
 * @method \Jdcloud\Result generalAlterProcedure(array $args = [])
 * @method \GuzzleHttp\Promise\Promise generalAlterProcedureAsync(array $args = [])
 * @method \Jdcloud\Result generalDropProcedure(array $args = [])
 * @method \GuzzleHttp\Promise\Promise generalDropProcedureAsync(array $args = [])
 * @method \Jdcloud\Result procedureList(array $args = [])
 * @method \GuzzleHttp\Promise\Promise procedureListAsync(array $args = [])
 * @method \Jdcloud\Result procedureInfo(array $args = [])
 * @method \GuzzleHttp\Promise\Promise procedureInfoAsync(array $args = [])
 * @method \Jdcloud\Result procedureInvoke(array $args = [])
 * @method \GuzzleHttp\Promise\Promise procedureInvokeAsync(array $args = [])
 * @method \Jdcloud\Result programList(array $args = [])
 * @method \GuzzleHttp\Promise\Promise programListAsync(array $args = [])
 * @method \Jdcloud\Result exeProgram(array $args = [])
 * @method \GuzzleHttp\Promise\Promise exeProgramAsync(array $args = [])
 * @method \Jdcloud\Result consoleExplain(array $args = [])
 * @method \GuzzleHttp\Promise\Promise consoleExplainAsync(array $args = [])
 * @method \Jdcloud\Result consoleSql(array $args = [])
 * @method \GuzzleHttp\Promise\Promise consoleSqlAsync(array $args = [])
 * @method \Jdcloud\Result consoleGeneralData(array $args = [])
 * @method \GuzzleHttp\Promise\Promise consoleGeneralDataAsync(array $args = [])
 * @method \Jdcloud\Result formatSql(array $args = [])
 * @method \GuzzleHttp\Promise\Promise formatSqlAsync(array $args = [])
 * @method \Jdcloud\Result createTableBatch(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createTableBatchAsync(array $args = [])
 * @method \Jdcloud\Result getCreateTableBatchSql(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getCreateTableBatchSqlAsync(array $args = [])
 * @method \Jdcloud\Result generalCreateTrigger(array $args = [])
 * @method \GuzzleHttp\Promise\Promise generalCreateTriggerAsync(array $args = [])
 * @method \Jdcloud\Result generalAlterTrigger(array $args = [])
 * @method \GuzzleHttp\Promise\Promise generalAlterTriggerAsync(array $args = [])
 * @method \Jdcloud\Result generalDropTrigger(array $args = [])
 * @method \GuzzleHttp\Promise\Promise generalDropTriggerAsync(array $args = [])
 * @method \Jdcloud\Result triggerList(array $args = [])
 * @method \GuzzleHttp\Promise\Promise triggerListAsync(array $args = [])
 * @method \Jdcloud\Result triggerInfo(array $args = [])
 * @method \GuzzleHttp\Promise\Promise triggerInfoAsync(array $args = [])
 * @method \Jdcloud\Result generalCreateView(array $args = [])
 * @method \GuzzleHttp\Promise\Promise generalCreateViewAsync(array $args = [])
 * @method \Jdcloud\Result generalAlterView(array $args = [])
 * @method \GuzzleHttp\Promise\Promise generalAlterViewAsync(array $args = [])
 * @method \Jdcloud\Result generalDropView(array $args = [])
 * @method \GuzzleHttp\Promise\Promise generalDropViewAsync(array $args = [])
 * @method \Jdcloud\Result viewInfo(array $args = [])
 * @method \GuzzleHttp\Promise\Promise viewInfoAsync(array $args = [])
 */
class DmsClient extends JdCloudClient
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
                        'service' => 'dms',
                        'presign_param' => 'PresignedUrl',
                    ]
                ),
                'dms'
            );
        };

        parent::__construct($args);
    }
}