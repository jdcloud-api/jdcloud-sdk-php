<?php
/**
 * Live
 *
 * @category Jdcloud
 * @package  Jdcloud\Live
 * @author   Jdcloud <jdcloud-api@jd.com>
 * @license  Apache-2.0 http://www.apache.org/licenses/LICENSE-2.0
 * @link     https://www.jdcloud.com/help/faq
 */

namespace Jdcloud\Live;

use Jdcloud\JdCloudClient;
use Jdcloud\Api\Service;
use Jdcloud\Api\DocModel;
use Jdcloud\Api\ApiProvider;
use Jdcloud\PresignUrlMiddleware;

/**
 * Client used to interact with live.
 *
 * @method \Jdcloud\Result describeLiveApp(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeLiveAppAsync(array $args = [])
 * @method \Jdcloud\Result addLiveApp(array $args = [])
 * @method \GuzzleHttp\Promise\Promise addLiveAppAsync(array $args = [])
 * @method \Jdcloud\Result startLiveApp(array $args = [])
 * @method \GuzzleHttp\Promise\Promise startLiveAppAsync(array $args = [])
 * @method \Jdcloud\Result stopLiveApp(array $args = [])
 * @method \GuzzleHttp\Promise\Promise stopLiveAppAsync(array $args = [])
 * @method \Jdcloud\Result deleteLiveApp(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteLiveAppAsync(array $args = [])
 * @method \Jdcloud\Result describeLivePlayAuthKey(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeLivePlayAuthKeyAsync(array $args = [])
 * @method \Jdcloud\Result setLivePlayAuthKey(array $args = [])
 * @method \GuzzleHttp\Promise\Promise setLivePlayAuthKeyAsync(array $args = [])
 * @method \Jdcloud\Result describeLiveDomains(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeLiveDomainsAsync(array $args = [])
 * @method \Jdcloud\Result addLiveDomain(array $args = [])
 * @method \GuzzleHttp\Promise\Promise addLiveDomainAsync(array $args = [])
 * @method \Jdcloud\Result startLiveDomain(array $args = [])
 * @method \GuzzleHttp\Promise\Promise startLiveDomainAsync(array $args = [])
 * @method \Jdcloud\Result stopLiveDomain(array $args = [])
 * @method \GuzzleHttp\Promise\Promise stopLiveDomainAsync(array $args = [])
 * @method \Jdcloud\Result describeLiveDomainDetail(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeLiveDomainDetailAsync(array $args = [])
 * @method \Jdcloud\Result deleteLiveDomain(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteLiveDomainAsync(array $args = [])
 * @method \Jdcloud\Result describeCustomLiveStreamRecordTemplates(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeCustomLiveStreamRecordTemplatesAsync(array $args = [])
 * @method \Jdcloud\Result addCustomLiveStreamRecordTemplate(array $args = [])
 * @method \GuzzleHttp\Promise\Promise addCustomLiveStreamRecordTemplateAsync(array $args = [])
 * @method \Jdcloud\Result addLiveStreamAppRecord(array $args = [])
 * @method \GuzzleHttp\Promise\Promise addLiveStreamAppRecordAsync(array $args = [])
 * @method \Jdcloud\Result addLiveStreamDomainRecord(array $args = [])
 * @method \GuzzleHttp\Promise\Promise addLiveStreamDomainRecordAsync(array $args = [])
 * @method \Jdcloud\Result describeCustomLiveStreamRecordConfig(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeCustomLiveStreamRecordConfigAsync(array $args = [])
 * @method \Jdcloud\Result setLiveStreamRecordNotifyConfig(array $args = [])
 * @method \GuzzleHttp\Promise\Promise setLiveStreamRecordNotifyConfigAsync(array $args = [])
 * @method \Jdcloud\Result deleteCustomLiveStreamRecordTemplate(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteCustomLiveStreamRecordTemplateAsync(array $args = [])
 * @method \Jdcloud\Result deleteLiveStreamAppRecord(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteLiveStreamAppRecordAsync(array $args = [])
 * @method \Jdcloud\Result deleteLiveStreamDomainRecord(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteLiveStreamDomainRecordAsync(array $args = [])
 * @method \Jdcloud\Result describeLiveStreamRecordNotifyConfig(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeLiveStreamRecordNotifyConfigAsync(array $args = [])
 * @method \Jdcloud\Result deleteLiveStreamRecordNotifyConfig(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteLiveStreamRecordNotifyConfigAsync(array $args = [])
 * @method \Jdcloud\Result addLiveRecordTask(array $args = [])
 * @method \GuzzleHttp\Promise\Promise addLiveRecordTaskAsync(array $args = [])
 * @method \Jdcloud\Result describePublishStreamInfoData(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describePublishStreamInfoDataAsync(array $args = [])
 * @method \Jdcloud\Result describeLiveStreamHistoryUserNum(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeLiveStreamHistoryUserNumAsync(array $args = [])
 * @method \Jdcloud\Result describeLivePublishStreamNum(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeLivePublishStreamNumAsync(array $args = [])
 * @method \Jdcloud\Result describeLiveStreamPlayerRankingData(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeLiveStreamPlayerRankingDataAsync(array $args = [])
 * @method \Jdcloud\Result describeLiveTranscodeStreamList(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeLiveTranscodeStreamListAsync(array $args = [])
 * @method \Jdcloud\Result describeLiveTranscodeStreamNum(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeLiveTranscodeStreamNumAsync(array $args = [])
 * @method \Jdcloud\Result describeLiveTranscodeStreamPlayerUserNum(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeLiveTranscodeStreamPlayerUserNumAsync(array $args = [])
 * @method \Jdcloud\Result describeLiveTranscodeStreamBandwidth(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeLiveTranscodeStreamBandwidthAsync(array $args = [])
 * @method \Jdcloud\Result describeLiveTranscodingDurationData(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeLiveTranscodingDurationDataAsync(array $args = [])
 * @method \Jdcloud\Result describeLiveStreamBandwidthData(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeLiveStreamBandwidthDataAsync(array $args = [])
 * @method \Jdcloud\Result describeLiveStreamPublishBandwidthData(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeLiveStreamPublishBandwidthDataAsync(array $args = [])
 * @method \Jdcloud\Result describeLiveStreamTrafficData(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeLiveStreamTrafficDataAsync(array $args = [])
 * @method \Jdcloud\Result describeLiveStreamPublishTrafficData(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeLiveStreamPublishTrafficDataAsync(array $args = [])
 * @method \Jdcloud\Result describeLiveSnapshotData(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeLiveSnapshotDataAsync(array $args = [])
 * @method \Jdcloud\Result describeLivePornData(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeLivePornDataAsync(array $args = [])
 * @method \Jdcloud\Result addCustomLiveStreamSnapshotTemplate(array $args = [])
 * @method \GuzzleHttp\Promise\Promise addCustomLiveStreamSnapshotTemplateAsync(array $args = [])
 * @method \Jdcloud\Result describeCustomLiveStreamSnapshotConfig(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeCustomLiveStreamSnapshotConfigAsync(array $args = [])
 * @method \Jdcloud\Result describeCustomLiveStreamSnapshotTemplates(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeCustomLiveStreamSnapshotTemplatesAsync(array $args = [])
 * @method \Jdcloud\Result addLiveStreamAppSnapshot(array $args = [])
 * @method \GuzzleHttp\Promise\Promise addLiveStreamAppSnapshotAsync(array $args = [])
 * @method \Jdcloud\Result addLiveStreamDomainSnapshot(array $args = [])
 * @method \GuzzleHttp\Promise\Promise addLiveStreamDomainSnapshotAsync(array $args = [])
 * @method \Jdcloud\Result setLiveStreamSnapshotNotifyConfig(array $args = [])
 * @method \GuzzleHttp\Promise\Promise setLiveStreamSnapshotNotifyConfigAsync(array $args = [])
 * @method \Jdcloud\Result deleteCustomLiveStreamSnapshotTemplate(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteCustomLiveStreamSnapshotTemplateAsync(array $args = [])
 * @method \Jdcloud\Result deleteLiveStreamAppSnapshot(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteLiveStreamAppSnapshotAsync(array $args = [])
 * @method \Jdcloud\Result deleteLiveStreamDomainSnapshot(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteLiveStreamDomainSnapshotAsync(array $args = [])
 * @method \Jdcloud\Result describeLiveStreamSnapshotNotifyConfig(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeLiveStreamSnapshotNotifyConfigAsync(array $args = [])
 * @method \Jdcloud\Result deleteLiveStreamSnapshotNotifyConfig(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteLiveStreamSnapshotNotifyConfigAsync(array $args = [])
 * @method \Jdcloud\Result forbidLiveStream(array $args = [])
 * @method \GuzzleHttp\Promise\Promise forbidLiveStreamAsync(array $args = [])
 * @method \Jdcloud\Result resumeLiveStream(array $args = [])
 * @method \GuzzleHttp\Promise\Promise resumeLiveStreamAsync(array $args = [])
 * @method \Jdcloud\Result describeLiveStreamInfo(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeLiveStreamInfoAsync(array $args = [])
 * @method \Jdcloud\Result setLiveStreamNotifyConfig(array $args = [])
 * @method \GuzzleHttp\Promise\Promise setLiveStreamNotifyConfigAsync(array $args = [])
 * @method \Jdcloud\Result describeLiveStreamNotifyConfig(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeLiveStreamNotifyConfigAsync(array $args = [])
 * @method \Jdcloud\Result deleteLiveStreamNotifyConfig(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteLiveStreamNotifyConfigAsync(array $args = [])
 * @method \Jdcloud\Result describeLiveStreamOnlineList(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeLiveStreamOnlineListAsync(array $args = [])
 * @method \Jdcloud\Result describeLiveStreamPublishList(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeLiveStreamPublishListAsync(array $args = [])
 * @method \Jdcloud\Result openLiveTimeshift(array $args = [])
 * @method \GuzzleHttp\Promise\Promise openLiveTimeshiftAsync(array $args = [])
 * @method \Jdcloud\Result closeLiveTimeshift(array $args = [])
 * @method \GuzzleHttp\Promise\Promise closeLiveTimeshiftAsync(array $args = [])
 * @method \Jdcloud\Result describeLiveTimeshiftConfigs(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeLiveTimeshiftConfigsAsync(array $args = [])
 * @method \Jdcloud\Result addLiveStreamDomainTranscode(array $args = [])
 * @method \GuzzleHttp\Promise\Promise addLiveStreamDomainTranscodeAsync(array $args = [])
 * @method \Jdcloud\Result addLiveStreamAppTranscode(array $args = [])
 * @method \GuzzleHttp\Promise\Promise addLiveStreamAppTranscodeAsync(array $args = [])
 * @method \Jdcloud\Result addCustomLiveStreamTranscodeTemplate(array $args = [])
 * @method \GuzzleHttp\Promise\Promise addCustomLiveStreamTranscodeTemplateAsync(array $args = [])
 * @method \Jdcloud\Result describeCustomLiveStreamTranscodeTemplates(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeCustomLiveStreamTranscodeTemplatesAsync(array $args = [])
 * @method \Jdcloud\Result describeLiveStreamTranscodeConfig(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeLiveStreamTranscodeConfigAsync(array $args = [])
 * @method \Jdcloud\Result deleteLiveStreamDomainTranscode(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteLiveStreamDomainTranscodeAsync(array $args = [])
 * @method \Jdcloud\Result deleteLiveStreamAppTranscode(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteLiveStreamAppTranscodeAsync(array $args = [])
 * @method \Jdcloud\Result describeCustomLiveStreamTranscodeTemplate(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeCustomLiveStreamTranscodeTemplateAsync(array $args = [])
 * @method \Jdcloud\Result deleteCustomLiveStreamTranscodeTemplate(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteCustomLiveStreamTranscodeTemplateAsync(array $args = [])
 * @method \Jdcloud\Result addCustomLiveStreamWatermarkTemplate(array $args = [])
 * @method \GuzzleHttp\Promise\Promise addCustomLiveStreamWatermarkTemplateAsync(array $args = [])
 * @method \Jdcloud\Result describeCustomLiveStreamWatermarkTemplates(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeCustomLiveStreamWatermarkTemplatesAsync(array $args = [])
 * @method \Jdcloud\Result addLiveStreamAppWatermark(array $args = [])
 * @method \GuzzleHttp\Promise\Promise addLiveStreamAppWatermarkAsync(array $args = [])
 * @method \Jdcloud\Result addLiveStreamDomainWatermark(array $args = [])
 * @method \GuzzleHttp\Promise\Promise addLiveStreamDomainWatermarkAsync(array $args = [])
 * @method \Jdcloud\Result describeCustomLiveStreamWatermarkConfig(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeCustomLiveStreamWatermarkConfigAsync(array $args = [])
 * @method \Jdcloud\Result deleteCustomLiveStreamWatermarkTemplate(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteCustomLiveStreamWatermarkTemplateAsync(array $args = [])
 * @method \Jdcloud\Result deleteLiveStreamAppWatermark(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteLiveStreamAppWatermarkAsync(array $args = [])
 * @method \Jdcloud\Result deleteLiveStreamDomainWatermark(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteLiveStreamDomainWatermarkAsync(array $args = [])
 */
class LiveClient extends JdCloudClient
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
                        'service' => 'live',
                        'presign_param' => 'PresignedUrl',
                    ]
                ),
                'live'
            );
        };

        parent::__construct($args);
    }
}