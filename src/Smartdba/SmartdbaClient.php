<?php
/**
 * Smartdba
 *
 * @category Jdcloud
 * @package  Jdcloud\Smartdba
 * @author   Jdcloud <jdcloud-api@jd.com>
 * @license  Apache-2.0 http://www.apache.org/licenses/LICENSE-2.0
 * @link     https://www.jdcloud.com/help/faq
 */

namespace Jdcloud\Smartdba;

use Jdcloud\JdCloudClient;
use Jdcloud\Api\Service;
use Jdcloud\Api\DocModel;
use Jdcloud\Api\ApiProvider;
use Jdcloud\PresignUrlMiddleware;

/**
 * Client used to interact with smartdba.
 *
 * @method \Jdcloud\Result describeAlarmResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeAlarmResourceAsync(array $args = [])
 * @method \Jdcloud\Result describeAlarmHistory(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeAlarmHistoryAsync(array $args = [])
 * @method \Jdcloud\Result describeAlarmStatistic(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeAlarmStatisticAsync(array $args = [])
 * @method \Jdcloud\Result describeslowLogStatistic(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeslowLogStatisticAsync(array $args = [])
 * @method \Jdcloud\Result describeAlarmTrend(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeAlarmTrendAsync(array $args = [])
 * @method \Jdcloud\Result getTopResourceByMetric(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getTopResourceByMetricAsync(array $args = [])
 * @method \Jdcloud\Result describeDiagnoseTopResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeDiagnoseTopResourceAsync(array $args = [])
 * @method \Jdcloud\Result describeDiagnoseTrend(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeDiagnoseTrendAsync(array $args = [])
 * @method \Jdcloud\Result createDiagnose(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createDiagnoseAsync(array $args = [])
 * @method \Jdcloud\Result describeDiagnoseList(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeDiagnoseListAsync(array $args = [])
 * @method \Jdcloud\Result describeDiagnose(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeDiagnoseAsync(array $args = [])
 * @method \Jdcloud\Result describeInspectList(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeInspectListAsync(array $args = [])
 * @method \Jdcloud\Result describeInspect(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeInspectAsync(array $args = [])
 * @method \Jdcloud\Result toBeConnectClusters(array $args = [])
 * @method \GuzzleHttp\Promise\Promise toBeConnectClustersAsync(array $args = [])
 * @method \Jdcloud\Result describeClusterList(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeClusterListAsync(array $args = [])
 * @method \Jdcloud\Result createCluster(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createClusterAsync(array $args = [])
 * @method \Jdcloud\Result cancleConnect(array $args = [])
 * @method \GuzzleHttp\Promise\Promise cancleConnectAsync(array $args = [])
 * @method \Jdcloud\Result describeClusterDetail(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeClusterDetailAsync(array $args = [])
 * @method \Jdcloud\Result describeLockAnalyse(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeLockAnalyseAsync(array $args = [])
 * @method \Jdcloud\Result createLockAnalyse(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createLockAnalyseAsync(array $args = [])
 * @method \Jdcloud\Result describeAnalyseList(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeAnalyseListAsync(array $args = [])
 * @method \Jdcloud\Result createPanel(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createPanelAsync(array $args = [])
 * @method \Jdcloud\Result describePanelList(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describePanelListAsync(array $args = [])
 * @method \Jdcloud\Result getPanelRelateClusters(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getPanelRelateClustersAsync(array $args = [])
 * @method \Jdcloud\Result updatePanelClusters(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updatePanelClustersAsync(array $args = [])
 * @method \Jdcloud\Result deletePanel(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deletePanelAsync(array $args = [])
 * @method \Jdcloud\Result describePanelMetricValueByGid(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describePanelMetricValueByGidAsync(array $args = [])
 * @method \Jdcloud\Result describeSupportMetrics(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeSupportMetricsAsync(array $args = [])
 * @method \Jdcloud\Result getBindMetrics(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getBindMetricsAsync(array $args = [])
 * @method \Jdcloud\Result bindMetrics(array $args = [])
 * @method \GuzzleHttp\Promise\Promise bindMetricsAsync(array $args = [])
 * @method \Jdcloud\Result describeMetricValueByGid(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeMetricValueByGidAsync(array $args = [])
 * @method \Jdcloud\Result describeSessions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeSessionsAsync(array $args = [])
 * @method \Jdcloud\Result describeNowSessions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeNowSessionsAsync(array $args = [])
 * @method \Jdcloud\Result describeTrxLocks(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeTrxLocksAsync(array $args = [])
 * @method \Jdcloud\Result describeUntrxLocks(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeUntrxLocksAsync(array $args = [])
 * @method \Jdcloud\Result describeUnCommitTrxs(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeUnCommitTrxsAsync(array $args = [])
 * @method \Jdcloud\Result killSession(array $args = [])
 * @method \GuzzleHttp\Promise\Promise killSessionAsync(array $args = [])
 * @method \Jdcloud\Result describeSlowLog(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeSlowLogAsync(array $args = [])
 * @method \Jdcloud\Result describeSlowDigestLog(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeSlowDigestLogAsync(array $args = [])
 * @method \Jdcloud\Result describeSlowLogDimensionsStatistic(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeSlowLogDimensionsStatisticAsync(array $args = [])
 * @method \Jdcloud\Result explainSql(array $args = [])
 * @method \GuzzleHttp\Promise\Promise explainSqlAsync(array $args = [])
 * @method \Jdcloud\Result turningSql(array $args = [])
 * @method \GuzzleHttp\Promise\Promise turningSqlAsync(array $args = [])
 * @method \Jdcloud\Result describeSlowSqlMetric(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeSlowSqlMetricAsync(array $args = [])
 * @method \Jdcloud\Result describeIndexs(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeIndexsAsync(array $args = [])
 * @method \Jdcloud\Result describeStorages(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeStoragesAsync(array $args = [])
 * @method \Jdcloud\Result describeStorageTrend(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeStorageTrendAsync(array $args = [])
 * @method \Jdcloud\Result describeTableSpaceTop(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeTableSpaceTopAsync(array $args = [])
 * @method \Jdcloud\Result describeSchemaSpaceTop(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeSchemaSpaceTopAsync(array $args = [])
 * @method \Jdcloud\Result describeTableSpaceDetail(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeTableSpaceDetailAsync(array $args = [])
 * @method \Jdcloud\Result describeAllDbInfo(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeAllDbInfoAsync(array $args = [])
 * @method \Jdcloud\Result describeAllTableInfoForDb(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeAllTableInfoForDbAsync(array $args = [])
 * @method \Jdcloud\Result describeSystemInfo(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeSystemInfoAsync(array $args = [])
 * @method \Jdcloud\Result checkTableTypes(array $args = [])
 * @method \GuzzleHttp\Promise\Promise checkTableTypesAsync(array $args = [])
 * @method \Jdcloud\Result checkTableByType(array $args = [])
 * @method \GuzzleHttp\Promise\Promise checkTableByTypeAsync(array $args = [])
 */
class SmartdbaClient extends JdCloudClient
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
                        'service' => 'smartdba',
                        'presign_param' => 'PresignedUrl',
                    ]
                ),
                'smartdba'
            );
        };

        parent::__construct($args);
    }
}