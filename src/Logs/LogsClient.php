<?php
/**
 * Logs
 *
 * @category Jdcloud
 * @package  Jdcloud\Logs
 * @author   Jdcloud <jdcloud-api@jd.com>
 * @license  Apache-2.0 http://www.apache.org/licenses/LICENSE-2.0
 * @link     https://www.jdcloud.com/help/faq
 */

namespace Jdcloud\Logs;

use Jdcloud\JdCloudClient;
use Jdcloud\Api\Service;
use Jdcloud\Api\DocModel;
use Jdcloud\Api\ApiProvider;
use Jdcloud\PresignUrlMiddleware;

/**
 * Client used to interact with logs.
 *
 * @method \Jdcloud\Result k8sAgentHeartbeat(array $args = [])
 * @method \GuzzleHttp\Promise\Promise k8sAgentHeartbeatAsync(array $args = [])
 * @method \Jdcloud\Result analysis(array $args = [])
 * @method \GuzzleHttp\Promise\Promise analysisAsync(array $args = [])
 * @method \Jdcloud\Result describeCollectInfo(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeCollectInfoAsync(array $args = [])
 * @method \Jdcloud\Result updateCollectInfo(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateCollectInfoAsync(array $args = [])
 * @method \Jdcloud\Result deleteCollectInfo(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteCollectInfoAsync(array $args = [])
 * @method \Jdcloud\Result describeCollectResources(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeCollectResourcesAsync(array $args = [])
 * @method \Jdcloud\Result updateCollectInfoStatus(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateCollectInfoStatusAsync(array $args = [])
 * @method \Jdcloud\Result updateCollectResources(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateCollectResourcesAsync(array $args = [])
 * @method \Jdcloud\Result describeCollectInfoBatch(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeCollectInfoBatchAsync(array $args = [])
 * @method \Jdcloud\Result describeCPCollectInfo(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeCPCollectInfoAsync(array $args = [])
 * @method \Jdcloud\Result updateCPCollectInfo(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateCPCollectInfoAsync(array $args = [])
 * @method \Jdcloud\Result deleteCPCollectInfo(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteCPCollectInfoAsync(array $args = [])
 * @method \Jdcloud\Result describeCPCollectInfoBatch(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeCPCollectInfoBatchAsync(array $args = [])
 * @method \Jdcloud\Result describeCollectInfos(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeCollectInfosAsync(array $args = [])
 * @method \Jdcloud\Result createCollectInfo(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createCollectInfoAsync(array $args = [])
 * @method \Jdcloud\Result describeCPCollectInfos(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeCPCollectInfosAsync(array $args = [])
 * @method \Jdcloud\Result createCPCollectInfo(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createCPCollectInfoAsync(array $args = [])
 * @method \Jdcloud\Result createParser(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createParserAsync(array $args = [])
 * @method \Jdcloud\Result describeParser(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeParserAsync(array $args = [])
 * @method \Jdcloud\Result updateParser(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateParserAsync(array $args = [])
 * @method \Jdcloud\Result validateParser(array $args = [])
 * @method \GuzzleHttp\Promise\Promise validateParserAsync(array $args = [])
 * @method \Jdcloud\Result search(array $args = [])
 * @method \GuzzleHttp\Promise\Promise searchAsync(array $args = [])
 * @method \Jdcloud\Result describeIndexOption(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeIndexOptionAsync(array $args = [])
 * @method \Jdcloud\Result createIndexOption(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createIndexOptionAsync(array $args = [])
 * @method \Jdcloud\Result updateIndexOption(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateIndexOptionAsync(array $args = [])
 * @method \Jdcloud\Result deleteIndexOption(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteIndexOptionAsync(array $args = [])
 * @method \Jdcloud\Result instanceCollectConfigList(array $args = [])
 * @method \GuzzleHttp\Promise\Promise instanceCollectConfigListAsync(array $args = [])
 * @method \Jdcloud\Result instanceCollectConfigModify(array $args = [])
 * @method \GuzzleHttp\Promise\Promise instanceCollectConfigModifyAsync(array $args = [])
 * @method \Jdcloud\Result k8sWatchHeartbeat(array $args = [])
 * @method \GuzzleHttp\Promise\Promise k8sWatchHeartbeatAsync(array $args = [])
 * @method \Jdcloud\Result logSearchId(array $args = [])
 * @method \GuzzleHttp\Promise\Promise logSearchIdAsync(array $args = [])
 * @method \Jdcloud\Result logSearch(array $args = [])
 * @method \GuzzleHttp\Promise\Promise logSearchAsync(array $args = [])
 * @method \Jdcloud\Result createLogDownloadTask(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createLogDownloadTaskAsync(array $args = [])
 * @method \Jdcloud\Result cancelLogDownloadTask(array $args = [])
 * @method \GuzzleHttp\Promise\Promise cancelLogDownloadTaskAsync(array $args = [])
 * @method \Jdcloud\Result getLogDownloadTasks(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getLogDownloadTasksAsync(array $args = [])
 * @method \Jdcloud\Result describeLogsetsGlobal(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeLogsetsGlobalAsync(array $args = [])
 * @method \Jdcloud\Result describeLogsets(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeLogsetsAsync(array $args = [])
 * @method \Jdcloud\Result createLogset(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createLogsetAsync(array $args = [])
 * @method \Jdcloud\Result describeLogset(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeLogsetAsync(array $args = [])
 * @method \Jdcloud\Result updateLogset(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateLogsetAsync(array $args = [])
 * @method \Jdcloud\Result deleteLogset(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteLogsetAsync(array $args = [])
 * @method \Jdcloud\Result describeLogtopicsGlobal(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeLogtopicsGlobalAsync(array $args = [])
 * @method \Jdcloud\Result hasArrearageStoppedLogtopic(array $args = [])
 * @method \GuzzleHttp\Promise\Promise hasArrearageStoppedLogtopicAsync(array $args = [])
 * @method \Jdcloud\Result describeLogtopics(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeLogtopicsAsync(array $args = [])
 * @method \Jdcloud\Result createLogtopic(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createLogtopicAsync(array $args = [])
 * @method \Jdcloud\Result deleteLogtopic(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteLogtopicAsync(array $args = [])
 * @method \Jdcloud\Result describeLogtopic(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeLogtopicAsync(array $args = [])
 * @method \Jdcloud\Result updateLogtopic(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateLogtopicAsync(array $args = [])
 * @method \Jdcloud\Result testMetricTask(array $args = [])
 * @method \GuzzleHttp\Promise\Promise testMetricTaskAsync(array $args = [])
 * @method \Jdcloud\Result describeMetricTasks(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeMetricTasksAsync(array $args = [])
 * @method \Jdcloud\Result createMetricTask(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createMetricTaskAsync(array $args = [])
 * @method \Jdcloud\Result describeMetricTask(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeMetricTaskAsync(array $args = [])
 * @method \Jdcloud\Result updateMetricTask(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateMetricTaskAsync(array $args = [])
 * @method \Jdcloud\Result deleteMetricTask(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteMetricTaskAsync(array $args = [])
 * @method \Jdcloud\Result k8sDispatchConf(array $args = [])
 * @method \GuzzleHttp\Promise\Promise k8sDispatchConfAsync(array $args = [])
 * @method \Jdcloud\Result k8sDispatchConfNew(array $args = [])
 * @method \GuzzleHttp\Promise\Promise k8sDispatchConfNewAsync(array $args = [])
 * @method \Jdcloud\Result k8sconfigNewV2(array $args = [])
 * @method \GuzzleHttp\Promise\Promise k8sconfigNewV2Async(array $args = [])
 * @method \Jdcloud\Result logDetailPublic(array $args = [])
 * @method \GuzzleHttp\Promise\Promise logDetailPublicAsync(array $args = [])
 * @method \Jdcloud\Result logDetail(array $args = [])
 * @method \GuzzleHttp\Promise\Promise logDetailAsync(array $args = [])
 * @method \Jdcloud\Result logAggregate(array $args = [])
 * @method \GuzzleHttp\Promise\Promise logAggregateAsync(array $args = [])
 * @method \Jdcloud\Result logCount(array $args = [])
 * @method \GuzzleHttp\Promise\Promise logCountAsync(array $args = [])
 * @method \Jdcloud\Result productPodChange(array $args = [])
 * @method \GuzzleHttp\Promise\Promise productPodChangeAsync(array $args = [])
 * @method \Jdcloud\Result productPodLabelSelect(array $args = [])
 * @method \GuzzleHttp\Promise\Promise productPodLabelSelectAsync(array $args = [])
 * @method \Jdcloud\Result push(array $args = [])
 * @method \GuzzleHttp\Promise\Promise pushAsync(array $args = [])
 * @method \Jdcloud\Result histograms(array $args = [])
 * @method \GuzzleHttp\Promise\Promise histogramsAsync(array $args = [])
 * @method \Jdcloud\Result getLogs(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getLogsAsync(array $args = [])
 * @method \Jdcloud\Result search(array $args = [])
 * @method \GuzzleHttp\Promise\Promise searchAsync(array $args = [])
 * @method \Jdcloud\Result describeSubscribe(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeSubscribeAsync(array $args = [])
 * @method \Jdcloud\Result createSubscribe(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createSubscribeAsync(array $args = [])
 * @method \Jdcloud\Result updateSubscribe(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateSubscribeAsync(array $args = [])
 * @method \Jdcloud\Result usageDailyDetail(array $args = [])
 * @method \GuzzleHttp\Promise\Promise usageDailyDetailAsync(array $args = [])
 * @method \Jdcloud\Result usageOverall(array $args = [])
 * @method \GuzzleHttp\Promise\Promise usageOverallAsync(array $args = [])
 * @method \Jdcloud\Result usageTopN(array $args = [])
 * @method \GuzzleHttp\Promise\Promise usageTopNAsync(array $args = [])
 * @method \Jdcloud\Result usageTrend(array $args = [])
 * @method \GuzzleHttp\Promise\Promise usageTrendAsync(array $args = [])
 */
class LogsClient extends JdCloudClient
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
                        'service' => 'logs',
                        'presign_param' => 'PresignedUrl',
                    ]
                ),
                'logs'
            );
        };

        parent::__construct($args);
    }
}