<?php
/**
 * Monitor
 *
 * @category Jdcloud
 * @package  Jdcloud\Monitor
 * @author   Jdcloud <jdcloud-api@jd.com>
 * @license  Apache-2.0 http://www.apache.org/licenses/LICENSE-2.0
 * @link     https://www.jdcloud.com/help/faq
 */

namespace Jdcloud\Monitor;

use Jdcloud\JdCloudClient;
use Jdcloud\Api\Service;
use Jdcloud\Api\DocModel;
use Jdcloud\Api\ApiProvider;
use Jdcloud\PresignUrlMiddleware;

/**
 * Client used to interact with monitor.
 *
 * @method \Jdcloud\Result describeAlarmHistory(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeAlarmHistoryAsync(array $args = [])
 * @method \Jdcloud\Result describeAlarms(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeAlarmsAsync(array $args = [])
 * @method \Jdcloud\Result createAlarm(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createAlarmAsync(array $args = [])
 * @method \Jdcloud\Result batchDeleteAlarms(array $args = [])
 * @method \GuzzleHttp\Promise\Promise batchDeleteAlarmsAsync(array $args = [])
 * @method \Jdcloud\Result describeAlarmsByID(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeAlarmsByIDAsync(array $args = [])
 * @method \Jdcloud\Result updateAlarm(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateAlarmAsync(array $args = [])
 * @method \Jdcloud\Result describeAlarmContacts(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeAlarmContactsAsync(array $args = [])
 * @method \Jdcloud\Result disableAlarm(array $args = [])
 * @method \GuzzleHttp\Promise\Promise disableAlarmAsync(array $args = [])
 * @method \Jdcloud\Result enableAlarm(array $args = [])
 * @method \GuzzleHttp\Promise\Promise enableAlarmAsync(array $args = [])
 * @method \Jdcloud\Result batchCreateAlarms(array $args = [])
 * @method \GuzzleHttp\Promise\Promise batchCreateAlarmsAsync(array $args = [])
 * @method \Jdcloud\Result batchDisableAlarms(array $args = [])
 * @method \GuzzleHttp\Promise\Promise batchDisableAlarmsAsync(array $args = [])
 * @method \Jdcloud\Result batchEnableAlarms(array $args = [])
 * @method \GuzzleHttp\Promise\Promise batchEnableAlarmsAsync(array $args = [])
 * @method \Jdcloud\Result describeAlarmHistoryAllRegion(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeAlarmHistoryAllRegionAsync(array $args = [])
 * @method \Jdcloud\Result describeMetricsForCreateTemplate(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeMetricsForCreateTemplateAsync(array $args = [])
 * @method \Jdcloud\Result describeTemplates(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeTemplatesAsync(array $args = [])
 * @method \Jdcloud\Result createTemplate(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createTemplateAsync(array $args = [])
 * @method \Jdcloud\Result updateTemplate(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateTemplateAsync(array $args = [])
 * @method \Jdcloud\Result deleteTemplates(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteTemplatesAsync(array $args = [])
 * @method \Jdcloud\Result describeTemplatesByTemplateID(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeTemplatesByTemplateIDAsync(array $args = [])
 * @method \Jdcloud\Result applyTemplate(array $args = [])
 * @method \GuzzleHttp\Promise\Promise applyTemplateAsync(array $args = [])
 * @method \Jdcloud\Result describeMetricDataAm(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeMetricDataAmAsync(array $args = [])
 * @method \Jdcloud\Result describeProbeTasks(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeProbeTasksAsync(array $args = [])
 * @method \Jdcloud\Result createProbeTask(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createProbeTaskAsync(array $args = [])
 * @method \Jdcloud\Result deleteProbeTask(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteProbeTaskAsync(array $args = [])
 * @method \Jdcloud\Result describeProbeTask(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeProbeTaskAsync(array $args = [])
 * @method \Jdcloud\Result updateProbeTask(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateProbeTaskAsync(array $args = [])
 * @method \Jdcloud\Result describeProbeHistory(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeProbeHistoryAsync(array $args = [])
 * @method \Jdcloud\Result discribeProbes(array $args = [])
 * @method \GuzzleHttp\Promise\Promise discribeProbesAsync(array $args = [])
 * @method \Jdcloud\Result probeTaskEnable(array $args = [])
 * @method \GuzzleHttp\Promise\Promise probeTaskEnableAsync(array $args = [])
 * @method \Jdcloud\Result describeAlarmHistoryAllRegionCm(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeAlarmHistoryAllRegionCmAsync(array $args = [])
 * @method \Jdcloud\Result describeAllRegionAlarmsCm(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeAllRegionAlarmsCmAsync(array $args = [])
 * @method \Jdcloud\Result describeIsUserNew(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeIsUserNewAsync(array $args = [])
 * @method \Jdcloud\Result describeAlarmHistoryCm(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeAlarmHistoryCmAsync(array $args = [])
 * @method \Jdcloud\Result describeAlarmsCm(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeAlarmsCmAsync(array $args = [])
 * @method \Jdcloud\Result createAlarmCm(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createAlarmCmAsync(array $args = [])
 * @method \Jdcloud\Result deleteAlarmsCm(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteAlarmsCmAsync(array $args = [])
 * @method \Jdcloud\Result describeAlarmsByID(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeAlarmsByIDAsync(array $args = [])
 * @method \Jdcloud\Result updateAlarmCm(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateAlarmCmAsync(array $args = [])
 * @method \Jdcloud\Result describeNamespaces(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeNamespacesAsync(array $args = [])
 * @method \Jdcloud\Result deleteNamespace(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteNamespaceAsync(array $args = [])
 * @method \Jdcloud\Result describeObjsByNsUID(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeObjsByNsUIDAsync(array $args = [])
 * @method \Jdcloud\Result deleteObj(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteObjAsync(array $args = [])
 * @method \Jdcloud\Result describeObj(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeObjAsync(array $args = [])
 * @method \Jdcloud\Result describeMetricDataCm(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeMetricDataCmAsync(array $args = [])
 * @method \Jdcloud\Result describeCmMetricDataByTagSpec(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeCmMetricDataByTagSpecAsync(array $args = [])
 * @method \Jdcloud\Result describeMetricsCm(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeMetricsCmAsync(array $args = [])
 * @method \Jdcloud\Result describeMetrics(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeMetricsAsync(array $args = [])
 * @method \Jdcloud\Result describeMetricsForCreateAlarm(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeMetricsForCreateAlarmAsync(array $args = [])
 * @method \Jdcloud\Result describeSqlserverBlockProcess(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeSqlserverBlockProcessAsync(array $args = [])
 * @method \Jdcloud\Result lastDownsample(array $args = [])
 * @method \GuzzleHttp\Promise\Promise lastDownsampleAsync(array $args = [])
 * @method \Jdcloud\Result describeMetricData(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeMetricDataAsync(array $args = [])
 * @method \Jdcloud\Result batchDescribeMetricData(array $args = [])
 * @method \GuzzleHttp\Promise\Promise batchDescribeMetricDataAsync(array $args = [])
 * @method \Jdcloud\Result putMetricData(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putMetricDataAsync(array $args = [])
 * @method \Jdcloud\Result describeAlarmingRules(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeAlarmingRulesAsync(array $args = [])
 * @method \Jdcloud\Result describeRuleCounting(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeRuleCountingAsync(array $args = [])
 * @method \Jdcloud\Result describeTopNSlowSql(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeTopNSlowSqlAsync(array $args = [])
 */
class MonitorClient extends JdCloudClient
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
                        'service' => 'monitor',
                        'presign_param' => 'PresignedUrl',
                    ]
                ),
                'monitor'
            );
        };

        parent::__construct($args);
    }
}