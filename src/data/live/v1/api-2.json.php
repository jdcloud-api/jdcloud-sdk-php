<?php
// This file was auto-generated
return [
//    'version' => '',
    'metadata' =>
    [
//        'apiVersion' => '',
//        'endpointPrefix' => 'live',
        'protocol' => 'json',
//        'serviceFullName' => 'live',
//        'serviceId' => 'live',
    ],
    'operations' => [
        'DescribeLiveApp' => [
            'name' => 'DescribeLiveApp',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/apps',
            ],
            'input' => [ 'shape' => 'DescribeLiveAppRequestShape', ],
            'output' => [ 'shape' => 'DescribeLiveAppResponseShape', ],
        ],
        'AddLiveApp' => [
            'name' => 'AddLiveApp',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/apps',
            ],
            'input' => [ 'shape' => 'AddLiveAppRequestShape', ],
            'output' => [ 'shape' => 'AddLiveAppResponseShape', ],
        ],
        'StopLiveApp' => [
            'name' => 'StopLiveApp',
            'http' => [
                'method' => 'PUT',
                'requestUri' => '/v1/apps:stop',
            ],
            'input' => [ 'shape' => 'StopLiveAppRequestShape', ],
            'output' => [ 'shape' => 'StopLiveAppResponseShape', ],
        ],
        'DescribeLivePlayAuthKey' => [
            'name' => 'DescribeLivePlayAuthKey',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/livePlayAuthKey',
            ],
            'input' => [ 'shape' => 'DescribeLivePlayAuthKeyRequestShape', ],
            'output' => [ 'shape' => 'DescribeLivePlayAuthKeyResponseShape', ],
        ],
        'SetLivePlayAuthKey' => [
            'name' => 'SetLivePlayAuthKey',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/livePlayAuthKey',
            ],
            'input' => [ 'shape' => 'SetLivePlayAuthKeyRequestShape', ],
            'output' => [ 'shape' => 'SetLivePlayAuthKeyResponseShape', ],
        ],
        'DescribeLiveRestartAuthKey' => [
            'name' => 'DescribeLiveRestartAuthKey',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/liveRestartAuthKey',
            ],
            'input' => [ 'shape' => 'DescribeLiveRestartAuthKeyRequestShape', ],
            'output' => [ 'shape' => 'DescribeLiveRestartAuthKeyResponseShape', ],
        ],
        'SetLiveRestartAuthKey' => [
            'name' => 'SetLiveRestartAuthKey',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/liveRestartAuthKey',
            ],
            'input' => [ 'shape' => 'SetLiveRestartAuthKeyRequestShape', ],
            'output' => [ 'shape' => 'SetLiveRestartAuthKeyResponseShape', ],
        ],
        'DescribeLiveDomainCertificate' => [
            'name' => 'DescribeLiveDomainCertificate',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/liveDomainCertificate',
            ],
            'input' => [ 'shape' => 'DescribeLiveDomainCertificateRequestShape', ],
            'output' => [ 'shape' => 'DescribeLiveDomainCertificateResponseShape', ],
        ],
        'SetLiveDomainCertificate' => [
            'name' => 'SetLiveDomainCertificate',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/liveDomainCertificate',
            ],
            'input' => [ 'shape' => 'SetLiveDomainCertificateRequestShape', ],
            'output' => [ 'shape' => 'SetLiveDomainCertificateResponseShape', ],
        ],
        'DescribeLiveDomains' => [
            'name' => 'DescribeLiveDomains',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/domains',
            ],
            'input' => [ 'shape' => 'DescribeLiveDomainsRequestShape', ],
            'output' => [ 'shape' => 'DescribeLiveDomainsResponseShape', ],
        ],
        'AddLiveDomain' => [
            'name' => 'AddLiveDomain',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/domains',
            ],
            'input' => [ 'shape' => 'AddLiveDomainRequestShape', ],
            'output' => [ 'shape' => 'AddLiveDomainResponseShape', ],
        ],
        'StartLiveDomain' => [
            'name' => 'StartLiveDomain',
            'http' => [
                'method' => 'PUT',
                'requestUri' => '/v1/domains:start',
            ],
            'input' => [ 'shape' => 'StartLiveDomainRequestShape', ],
            'output' => [ 'shape' => 'StartLiveDomainResponseShape', ],
        ],
        'StopLiveDomain' => [
            'name' => 'StopLiveDomain',
            'http' => [
                'method' => 'PUT',
                'requestUri' => '/v1/domains:stop',
            ],
            'input' => [ 'shape' => 'StopLiveDomainRequestShape', ],
            'output' => [ 'shape' => 'StopLiveDomainResponseShape', ],
        ],
        'DescribeLiveDomainDetail' => [
            'name' => 'DescribeLiveDomainDetail',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/domains/{publishDomain}',
            ],
            'input' => [ 'shape' => 'DescribeLiveDomainDetailRequestShape', ],
            'output' => [ 'shape' => 'DescribeLiveDomainDetailResponseShape', ],
        ],
        'DeleteLiveDomain' => [
            'name' => 'DeleteLiveDomain',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/domains/{publishDomain}',
            ],
            'input' => [ 'shape' => 'DeleteLiveDomainRequestShape', ],
            'output' => [ 'shape' => 'DeleteLiveDomainResponseShape', ],
        ],
        'AddLiveRestartDomain' => [
            'name' => 'AddLiveRestartDomain',
            'http' => [
                'method' => 'PUT',
                'requestUri' => '/v1/domains:restart',
            ],
            'input' => [ 'shape' => 'AddLiveRestartDomainRequestShape', ],
            'output' => [ 'shape' => 'AddLiveRestartDomainResponseShape', ],
        ],
        'DescribeCustomLiveStreamRecordTemplates' => [
            'name' => 'DescribeCustomLiveStreamRecordTemplates',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/recordCustoms:template',
            ],
            'input' => [ 'shape' => 'DescribeCustomLiveStreamRecordTemplatesRequestShape', ],
            'output' => [ 'shape' => 'DescribeCustomLiveStreamRecordTemplatesResponseShape', ],
        ],
        'AddCustomLiveStreamRecordTemplate' => [
            'name' => 'AddCustomLiveStreamRecordTemplate',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/recordCustoms:template',
            ],
            'input' => [ 'shape' => 'AddCustomLiveStreamRecordTemplateRequestShape', ],
            'output' => [ 'shape' => 'AddCustomLiveStreamRecordTemplateResponseShape', ],
        ],
        'AddLiveStreamAppRecord' => [
            'name' => 'AddLiveStreamAppRecord',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/recordApps:config',
            ],
            'input' => [ 'shape' => 'AddLiveStreamAppRecordRequestShape', ],
            'output' => [ 'shape' => 'AddLiveStreamAppRecordResponseShape', ],
        ],
        'AddLiveStreamDomainRecord' => [
            'name' => 'AddLiveStreamDomainRecord',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/recordDomains:config',
            ],
            'input' => [ 'shape' => 'AddLiveStreamDomainRecordRequestShape', ],
            'output' => [ 'shape' => 'AddLiveStreamDomainRecordResponseShape', ],
        ],
        'DescribeCustomLiveStreamRecordConfig' => [
            'name' => 'DescribeCustomLiveStreamRecordConfig',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/records:config',
            ],
            'input' => [ 'shape' => 'DescribeCustomLiveStreamRecordConfigRequestShape', ],
            'output' => [ 'shape' => 'DescribeCustomLiveStreamRecordConfigResponseShape', ],
        ],
        'SetLiveStreamRecordNotifyConfig' => [
            'name' => 'SetLiveStreamRecordNotifyConfig',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/recordNotifys:config',
            ],
            'input' => [ 'shape' => 'SetLiveStreamRecordNotifyConfigRequestShape', ],
            'output' => [ 'shape' => 'SetLiveStreamRecordNotifyConfigResponseShape', ],
        ],
        'DeleteCustomLiveStreamRecordTemplate' => [
            'name' => 'DeleteCustomLiveStreamRecordTemplate',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/recordCustoms/{template}',
            ],
            'input' => [ 'shape' => 'DeleteCustomLiveStreamRecordTemplateRequestShape', ],
            'output' => [ 'shape' => 'DeleteCustomLiveStreamRecordTemplateResponseShape', ],
        ],
        'DeleteLiveStreamAppRecord' => [
            'name' => 'DeleteLiveStreamAppRecord',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/recordApps/{publishDomain}/appNames/{appName}/templates/{template}',
            ],
            'input' => [ 'shape' => 'DeleteLiveStreamAppRecordRequestShape', ],
            'output' => [ 'shape' => 'DeleteLiveStreamAppRecordResponseShape', ],
        ],
        'DeleteLiveStreamDomainRecord' => [
            'name' => 'DeleteLiveStreamDomainRecord',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/recordDomains/{publishDomain}/templates/{template}',
            ],
            'input' => [ 'shape' => 'DeleteLiveStreamDomainRecordRequestShape', ],
            'output' => [ 'shape' => 'DeleteLiveStreamDomainRecordResponseShape', ],
        ],
        'DescribeLiveStreamRecordNotifyConfig' => [
            'name' => 'DescribeLiveStreamRecordNotifyConfig',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/recordNotifys/{publishDomain}',
            ],
            'input' => [ 'shape' => 'DescribeLiveStreamRecordNotifyConfigRequestShape', ],
            'output' => [ 'shape' => 'DescribeLiveStreamRecordNotifyConfigResponseShape', ],
        ],
        'DeleteLiveStreamRecordNotifyConfig' => [
            'name' => 'DeleteLiveStreamRecordNotifyConfig',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/recordNotifys/{publishDomain}',
            ],
            'input' => [ 'shape' => 'DeleteLiveStreamRecordNotifyConfigRequestShape', ],
            'output' => [ 'shape' => 'DeleteLiveStreamRecordNotifyConfigResponseShape', ],
        ],
        'AddLiveRecordTask' => [
            'name' => 'AddLiveRecordTask',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/records/{publishDomain}/appNames/{appName}/streamNames/{streamName}/task',
            ],
            'input' => [ 'shape' => 'AddLiveRecordTaskRequestShape', ],
            'output' => [ 'shape' => 'AddLiveRecordTaskResponseShape', ],
        ],
        'DescribeRecordBinding' => [
            'name' => 'DescribeRecordBinding',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/recordTemplates/{template}:binding',
            ],
            'input' => [ 'shape' => 'DescribeRecordBindingRequestShape', ],
            'output' => [ 'shape' => 'DescribeRecordBindingResponseShape', ],
        ],
        'DescribeLiveStatisticGroupByStream' => [
            'name' => 'DescribeLiveStatisticGroupByStream',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/describeLiveStatisticGroupByStream',
            ],
            'input' => [ 'shape' => 'DescribeLiveStatisticGroupByStreamRequestShape', ],
            'output' => [ 'shape' => 'DescribeLiveStatisticGroupByStreamResponseShape', ],
        ],
        'DescribeLiveStatisticGroupByArea' => [
            'name' => 'DescribeLiveStatisticGroupByArea',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/describeLiveStatisticGroupByArea',
            ],
            'input' => [ 'shape' => 'DescribeLiveStatisticGroupByAreaRequestShape', ],
            'output' => [ 'shape' => 'DescribeLiveStatisticGroupByAreaResponseShape', ],
        ],
        'DescribeLiveStatisticGroupByAreaIsp' => [
            'name' => 'DescribeLiveStatisticGroupByAreaIsp',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/describeLiveStatisticGroupByAreaIsp',
            ],
            'input' => [ 'shape' => 'DescribeLiveStatisticGroupByAreaIspRequestShape', ],
            'output' => [ 'shape' => 'DescribeLiveStatisticGroupByAreaIspResponseShape', ],
        ],
        'DescribePublishStreamInfoData' => [
            'name' => 'DescribePublishStreamInfoData',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/describePublishStreamInfoData',
            ],
            'input' => [ 'shape' => 'DescribePublishStreamInfoDataRequestShape', ],
            'output' => [ 'shape' => 'DescribePublishStreamInfoDataResponseShape', ],
        ],
        'DescribeLiveStreamHistoryUserNum' => [
            'name' => 'DescribeLiveStreamHistoryUserNum',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/describeLiveStreamHistoryUserNum',
            ],
            'input' => [ 'shape' => 'DescribeLiveStreamHistoryUserNumRequestShape', ],
            'output' => [ 'shape' => 'DescribeLiveStreamHistoryUserNumResponseShape', ],
        ],
        'DescribeLivePublishStreamNum' => [
            'name' => 'DescribeLivePublishStreamNum',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/describeLivePublishStreamNum',
            ],
            'input' => [ 'shape' => 'DescribeLivePublishStreamNumRequestShape', ],
            'output' => [ 'shape' => 'DescribeLivePublishStreamNumResponseShape', ],
        ],
        'DescribeLiveStreamPlayerRankingData' => [
            'name' => 'DescribeLiveStreamPlayerRankingData',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/describeLiveStreamPlayerRankingData',
            ],
            'input' => [ 'shape' => 'DescribeLiveStreamPlayerRankingDataRequestShape', ],
            'output' => [ 'shape' => 'DescribeLiveStreamPlayerRankingDataResponseShape', ],
        ],
        'DescribeLiveTranscodeStreamList' => [
            'name' => 'DescribeLiveTranscodeStreamList',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/describeLiveTranscodeStreamList',
            ],
            'input' => [ 'shape' => 'DescribeLiveTranscodeStreamListRequestShape', ],
            'output' => [ 'shape' => 'DescribeLiveTranscodeStreamListResponseShape', ],
        ],
        'DescribeLiveTranscodeStreamNum' => [
            'name' => 'DescribeLiveTranscodeStreamNum',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/describeLiveTranscodeStreamNum',
            ],
            'input' => [ 'shape' => 'DescribeLiveTranscodeStreamNumRequestShape', ],
            'output' => [ 'shape' => 'DescribeLiveTranscodeStreamNumResponseShape', ],
        ],
        'DescribeLiveTranscodeStreamPlayerUserNum' => [
            'name' => 'DescribeLiveTranscodeStreamPlayerUserNum',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/describeLiveTranscodeStreamPlayerUserNum',
            ],
            'input' => [ 'shape' => 'DescribeLiveTranscodeStreamPlayerUserNumRequestShape', ],
            'output' => [ 'shape' => 'DescribeLiveTranscodeStreamPlayerUserNumResponseShape', ],
        ],
        'DescribeLiveTranscodeStreamBandwidth' => [
            'name' => 'DescribeLiveTranscodeStreamBandwidth',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/describeLiveTranscodeStreamBandwidth',
            ],
            'input' => [ 'shape' => 'DescribeLiveTranscodeStreamBandwidthRequestShape', ],
            'output' => [ 'shape' => 'DescribeLiveTranscodeStreamBandwidthResponseShape', ],
        ],
        'DescribeDomainOnlineStream' => [
            'name' => 'DescribeDomainOnlineStream',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/describeDomainOnlineStream',
            ],
            'input' => [ 'shape' => 'DescribeDomainOnlineStreamRequestShape', ],
            'output' => [ 'shape' => 'DescribeDomainOnlineStreamResponseShape', ],
        ],
        'DescribeDomainsLog' => [
            'name' => 'DescribeDomainsLog',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/describeDomainsLog',
            ],
            'input' => [ 'shape' => 'DescribeDomainsLogRequestShape', ],
            'output' => [ 'shape' => 'DescribeDomainsLogResponseShape', ],
        ],
        'DescribeUrlRanking' => [
            'name' => 'DescribeUrlRanking',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/describeUrlRanking',
            ],
            'input' => [ 'shape' => 'DescribeUrlRankingRequestShape', ],
            'output' => [ 'shape' => 'DescribeUrlRankingResponseShape', ],
        ],
        'DescribeLiveTranscodingDurationData' => [
            'name' => 'DescribeLiveTranscodingDurationData',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/describeLiveTranscodingDurationData',
            ],
            'input' => [ 'shape' => 'DescribeLiveTranscodingDurationDataRequestShape', ],
            'output' => [ 'shape' => 'DescribeLiveTranscodingDurationDataResponseShape', ],
        ],
        'DescribeLiveFileStorageData' => [
            'name' => 'DescribeLiveFileStorageData',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/describeLiveFileStorageData',
            ],
            'input' => [ 'shape' => 'DescribeLiveFileStorageDataRequestShape', ],
            'output' => [ 'shape' => 'DescribeLiveFileStorageDataResponseShape', ],
        ],
        'DescribeLiveStreamBandwidthData' => [
            'name' => 'DescribeLiveStreamBandwidthData',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/describeLiveStreamBandwidthData',
            ],
            'input' => [ 'shape' => 'DescribeLiveStreamBandwidthDataRequestShape', ],
            'output' => [ 'shape' => 'DescribeLiveStreamBandwidthDataResponseShape', ],
        ],
        'DescribeLiveStreamPublishBandwidthData' => [
            'name' => 'DescribeLiveStreamPublishBandwidthData',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/describeLiveStreamPublishBandwidthData',
            ],
            'input' => [ 'shape' => 'DescribeLiveStreamPublishBandwidthDataRequestShape', ],
            'output' => [ 'shape' => 'DescribeLiveStreamPublishBandwidthDataResponseShape', ],
        ],
        'DescribeLiveStreamTrafficData' => [
            'name' => 'DescribeLiveStreamTrafficData',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/describeLiveStreamTrafficData',
            ],
            'input' => [ 'shape' => 'DescribeLiveStreamTrafficDataRequestShape', ],
            'output' => [ 'shape' => 'DescribeLiveStreamTrafficDataResponseShape', ],
        ],
        'DescribeLiveStreamPublishTrafficData' => [
            'name' => 'DescribeLiveStreamPublishTrafficData',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/describeLiveStreamPublishTrafficData',
            ],
            'input' => [ 'shape' => 'DescribeLiveStreamPublishTrafficDataRequestShape', ],
            'output' => [ 'shape' => 'DescribeLiveStreamPublishTrafficDataResponseShape', ],
        ],
        'DescribeLiveSnapshotData' => [
            'name' => 'DescribeLiveSnapshotData',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/liveSnapshotData',
            ],
            'input' => [ 'shape' => 'DescribeLiveSnapshotDataRequestShape', ],
            'output' => [ 'shape' => 'DescribeLiveSnapshotDataResponseShape', ],
        ],
        'DescribeLivePornData' => [
            'name' => 'DescribeLivePornData',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/livePornData',
            ],
            'input' => [ 'shape' => 'DescribeLivePornDataRequestShape', ],
            'output' => [ 'shape' => 'DescribeLivePornDataResponseShape', ],
        ],
        'AddCustomLiveStreamSnapshotTemplate' => [
            'name' => 'AddCustomLiveStreamSnapshotTemplate',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/snapshotCustoms:template',
            ],
            'input' => [ 'shape' => 'AddCustomLiveStreamSnapshotTemplateRequestShape', ],
            'output' => [ 'shape' => 'AddCustomLiveStreamSnapshotTemplateResponseShape', ],
        ],
        'DescribeCustomLiveStreamSnapshotConfig' => [
            'name' => 'DescribeCustomLiveStreamSnapshotConfig',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/snapshotCustoms:config',
            ],
            'input' => [ 'shape' => 'DescribeCustomLiveStreamSnapshotConfigRequestShape', ],
            'output' => [ 'shape' => 'DescribeCustomLiveStreamSnapshotConfigResponseShape', ],
        ],
        'DescribeCustomLiveStreamSnapshotTemplates' => [
            'name' => 'DescribeCustomLiveStreamSnapshotTemplates',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/snapshotCustoms',
            ],
            'input' => [ 'shape' => 'DescribeCustomLiveStreamSnapshotTemplatesRequestShape', ],
            'output' => [ 'shape' => 'DescribeCustomLiveStreamSnapshotTemplatesResponseShape', ],
        ],
        'AddLiveStreamAppSnapshot' => [
            'name' => 'AddLiveStreamAppSnapshot',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/snapshotApps:template',
            ],
            'input' => [ 'shape' => 'AddLiveStreamAppSnapshotRequestShape', ],
            'output' => [ 'shape' => 'AddLiveStreamAppSnapshotResponseShape', ],
        ],
        'AddLiveStreamDomainSnapshot' => [
            'name' => 'AddLiveStreamDomainSnapshot',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/snapshotDomains:template',
            ],
            'input' => [ 'shape' => 'AddLiveStreamDomainSnapshotRequestShape', ],
            'output' => [ 'shape' => 'AddLiveStreamDomainSnapshotResponseShape', ],
        ],
        'SetLiveStreamSnapshotNotifyConfig' => [
            'name' => 'SetLiveStreamSnapshotNotifyConfig',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/snapshotNotifys:config',
            ],
            'input' => [ 'shape' => 'SetLiveStreamSnapshotNotifyConfigRequestShape', ],
            'output' => [ 'shape' => 'SetLiveStreamSnapshotNotifyConfigResponseShape', ],
        ],
        'DeleteCustomLiveStreamSnapshotTemplate' => [
            'name' => 'DeleteCustomLiveStreamSnapshotTemplate',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/snapshotCustoms/{template}',
            ],
            'input' => [ 'shape' => 'DeleteCustomLiveStreamSnapshotTemplateRequestShape', ],
            'output' => [ 'shape' => 'DeleteCustomLiveStreamSnapshotTemplateResponseShape', ],
        ],
        'DeleteLiveStreamAppSnapshot' => [
            'name' => 'DeleteLiveStreamAppSnapshot',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/snapshotApps/{publishDomain}/appNames/{appName}/templates/{template}',
            ],
            'input' => [ 'shape' => 'DeleteLiveStreamAppSnapshotRequestShape', ],
            'output' => [ 'shape' => 'DeleteLiveStreamAppSnapshotResponseShape', ],
        ],
        'DeleteLiveStreamDomainSnapshot' => [
            'name' => 'DeleteLiveStreamDomainSnapshot',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/snapshotDomains/{publishDomain}/templates/{template}',
            ],
            'input' => [ 'shape' => 'DeleteLiveStreamDomainSnapshotRequestShape', ],
            'output' => [ 'shape' => 'DeleteLiveStreamDomainSnapshotResponseShape', ],
        ],
        'DescribeLiveStreamSnapshotNotifyConfig' => [
            'name' => 'DescribeLiveStreamSnapshotNotifyConfig',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/snapshotNotifys/{publishDomain}:config',
            ],
            'input' => [ 'shape' => 'DescribeLiveStreamSnapshotNotifyConfigRequestShape', ],
            'output' => [ 'shape' => 'DescribeLiveStreamSnapshotNotifyConfigResponseShape', ],
        ],
        'DeleteLiveStreamSnapshotNotifyConfig' => [
            'name' => 'DeleteLiveStreamSnapshotNotifyConfig',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/snapshotNotifys/{publishDomain}:config',
            ],
            'input' => [ 'shape' => 'DeleteLiveStreamSnapshotNotifyConfigRequestShape', ],
            'output' => [ 'shape' => 'DeleteLiveStreamSnapshotNotifyConfigResponseShape', ],
        ],
        'DescribeSnapshotBinding' => [
            'name' => 'DescribeSnapshotBinding',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/snapshotTemplates/{template}:binding',
            ],
            'input' => [ 'shape' => 'DescribeSnapshotBindingRequestShape', ],
            'output' => [ 'shape' => 'DescribeSnapshotBindingResponseShape', ],
        ],
        'ForbidLiveStream' => [
            'name' => 'ForbidLiveStream',
            'http' => [
                'method' => 'PUT',
                'requestUri' => '/v1/streams:forbid',
            ],
            'input' => [ 'shape' => 'ForbidLiveStreamRequestShape', ],
            'output' => [ 'shape' => 'ForbidLiveStreamResponseShape', ],
        ],
        'ResumeLiveStream' => [
            'name' => 'ResumeLiveStream',
            'http' => [
                'method' => 'PUT',
                'requestUri' => '/v1/streams:resume',
            ],
            'input' => [ 'shape' => 'ResumeLiveStreamRequestShape', ],
            'output' => [ 'shape' => 'ResumeLiveStreamResponseShape', ],
        ],
        'InterruptLiveStream' => [
            'name' => 'InterruptLiveStream',
            'http' => [
                'method' => 'PUT',
                'requestUri' => '/v1/streams:interrupt',
            ],
            'input' => [ 'shape' => 'InterruptLiveStreamRequestShape', ],
            'output' => [ 'shape' => 'InterruptLiveStreamResponseShape', ],
        ],
        'DescribeLiveStreamInfo' => [
            'name' => 'DescribeLiveStreamInfo',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/streams/{publishDomain}/appNames/{appName}/streamNames/{streamName}/streamInfo',
            ],
            'input' => [ 'shape' => 'DescribeLiveStreamInfoRequestShape', ],
            'output' => [ 'shape' => 'DescribeLiveStreamInfoResponseShape', ],
        ],
        'SetLiveStreamNotifyConfig' => [
            'name' => 'SetLiveStreamNotifyConfig',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/streamNotifys',
            ],
            'input' => [ 'shape' => 'SetLiveStreamNotifyConfigRequestShape', ],
            'output' => [ 'shape' => 'SetLiveStreamNotifyConfigResponseShape', ],
        ],
        'DescribeLiveStreamNotifyConfig' => [
            'name' => 'DescribeLiveStreamNotifyConfig',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/streamNotifys/{publishDomain}',
            ],
            'input' => [ 'shape' => 'DescribeLiveStreamNotifyConfigRequestShape', ],
            'output' => [ 'shape' => 'DescribeLiveStreamNotifyConfigResponseShape', ],
        ],
        'DeleteLiveStreamNotifyConfig' => [
            'name' => 'DeleteLiveStreamNotifyConfig',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/streamNotifys/{publishDomain}',
            ],
            'input' => [ 'shape' => 'DeleteLiveStreamNotifyConfigRequestShape', ],
            'output' => [ 'shape' => 'DeleteLiveStreamNotifyConfigResponseShape', ],
        ],
        'DescribeLiveStreamOnlineList' => [
            'name' => 'DescribeLiveStreamOnlineList',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/streams/{publishDomain}/onlineList',
            ],
            'input' => [ 'shape' => 'DescribeLiveStreamOnlineListRequestShape', ],
            'output' => [ 'shape' => 'DescribeLiveStreamOnlineListResponseShape', ],
        ],
        'DescribeLiveStreamPublishList' => [
            'name' => 'DescribeLiveStreamPublishList',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/streams/{publishDomain}/publishList',
            ],
            'input' => [ 'shape' => 'DescribeLiveStreamPublishListRequestShape', ],
            'output' => [ 'shape' => 'DescribeLiveStreamPublishListResponseShape', ],
        ],
        'OpenLiveRestart' => [
            'name' => 'OpenLiveRestart',
            'http' => [
                'method' => 'PUT',
                'requestUri' => '/v1/liveRestart:open',
            ],
            'input' => [ 'shape' => 'OpenLiveRestartRequestShape', ],
            'output' => [ 'shape' => 'OpenLiveRestartResponseShape', ],
        ],
        'CloseLiveRestart' => [
            'name' => 'CloseLiveRestart',
            'http' => [
                'method' => 'PUT',
                'requestUri' => '/v1/liveRestart:close',
            ],
            'input' => [ 'shape' => 'CloseLiveRestartRequestShape', ],
            'output' => [ 'shape' => 'CloseLiveRestartResponseShape', ],
        ],
        'DescribeLiveRestartConfigs' => [
            'name' => 'DescribeLiveRestartConfigs',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/liveRestart:configs',
            ],
            'input' => [ 'shape' => 'DescribeLiveRestartConfigsRequestShape', ],
            'output' => [ 'shape' => 'DescribeLiveRestartConfigsResponseShape', ],
        ],
        'OpenLiveTimeshift' => [
            'name' => 'OpenLiveTimeshift',
            'http' => [
                'method' => 'PUT',
                'requestUri' => '/v1/liveTimeshift:open',
            ],
            'input' => [ 'shape' => 'OpenLiveTimeshiftRequestShape', ],
            'output' => [ 'shape' => 'OpenLiveTimeshiftResponseShape', ],
        ],
        'CloseLiveTimeshift' => [
            'name' => 'CloseLiveTimeshift',
            'http' => [
                'method' => 'PUT',
                'requestUri' => '/v1/liveTimeshift:close',
            ],
            'input' => [ 'shape' => 'CloseLiveTimeshiftRequestShape', ],
            'output' => [ 'shape' => 'CloseLiveTimeshiftResponseShape', ],
        ],
        'DescribeLiveTimeshiftConfigs' => [
            'name' => 'DescribeLiveTimeshiftConfigs',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/liveTimeshift:configs',
            ],
            'input' => [ 'shape' => 'DescribeLiveTimeshiftConfigsRequestShape', ],
            'output' => [ 'shape' => 'DescribeLiveTimeshiftConfigsResponseShape', ],
        ],
        'AddLiveStreamDomainTranscode' => [
            'name' => 'AddLiveStreamDomainTranscode',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/transcodeDomains:config',
            ],
            'input' => [ 'shape' => 'AddLiveStreamDomainTranscodeRequestShape', ],
            'output' => [ 'shape' => 'AddLiveStreamDomainTranscodeResponseShape', ],
        ],
        'AddLiveStreamAppTranscode' => [
            'name' => 'AddLiveStreamAppTranscode',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/transcodeApps:config',
            ],
            'input' => [ 'shape' => 'AddLiveStreamAppTranscodeRequestShape', ],
            'output' => [ 'shape' => 'AddLiveStreamAppTranscodeResponseShape', ],
        ],
        'AddCustomLiveStreamTranscodeTemplate' => [
            'name' => 'AddCustomLiveStreamTranscodeTemplate',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/transcodeCustoms:template',
            ],
            'input' => [ 'shape' => 'AddCustomLiveStreamTranscodeTemplateRequestShape', ],
            'output' => [ 'shape' => 'AddCustomLiveStreamTranscodeTemplateResponseShape', ],
        ],
        'DescribeCustomLiveStreamTranscodeTemplates' => [
            'name' => 'DescribeCustomLiveStreamTranscodeTemplates',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/transcodeCustoms',
            ],
            'input' => [ 'shape' => 'DescribeCustomLiveStreamTranscodeTemplatesRequestShape', ],
            'output' => [ 'shape' => 'DescribeCustomLiveStreamTranscodeTemplatesResponseShape', ],
        ],
        'DescribeSystemLiveStreamTranscodeTemplates' => [
            'name' => 'DescribeSystemLiveStreamTranscodeTemplates',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/transcodeSystem',
            ],
            'input' => [ 'shape' => 'DescribeSystemLiveStreamTranscodeTemplatesRequestShape', ],
            'output' => [ 'shape' => 'DescribeSystemLiveStreamTranscodeTemplatesResponseShape', ],
        ],
        'DescribeLiveStreamTranscodeConfig' => [
            'name' => 'DescribeLiveStreamTranscodeConfig',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/transcodes:config',
            ],
            'input' => [ 'shape' => 'DescribeLiveStreamTranscodeConfigRequestShape', ],
            'output' => [ 'shape' => 'DescribeLiveStreamTranscodeConfigResponseShape', ],
        ],
        'DeleteLiveStreamDomainTranscode' => [
            'name' => 'DeleteLiveStreamDomainTranscode',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/transcodeDomains/{publishDomain}/templates/{template}:config',
            ],
            'input' => [ 'shape' => 'DeleteLiveStreamDomainTranscodeRequestShape', ],
            'output' => [ 'shape' => 'DeleteLiveStreamDomainTranscodeResponseShape', ],
        ],
        'DeleteLiveStreamAppTranscode' => [
            'name' => 'DeleteLiveStreamAppTranscode',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/transcodeApps/{publishDomain}/appNames/{appName}/templates/{template}',
            ],
            'input' => [ 'shape' => 'DeleteLiveStreamAppTranscodeRequestShape', ],
            'output' => [ 'shape' => 'DeleteLiveStreamAppTranscodeResponseShape', ],
        ],
        'DescribeCustomLiveStreamTranscodeTemplate' => [
            'name' => 'DescribeCustomLiveStreamTranscodeTemplate',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/transcodeCustoms/{template}',
            ],
            'input' => [ 'shape' => 'DescribeCustomLiveStreamTranscodeTemplateRequestShape', ],
            'output' => [ 'shape' => 'DescribeCustomLiveStreamTranscodeTemplateResponseShape', ],
        ],
        'DeleteCustomLiveStreamTranscodeTemplate' => [
            'name' => 'DeleteCustomLiveStreamTranscodeTemplate',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/transcodeCustoms/{template}',
            ],
            'input' => [ 'shape' => 'DeleteCustomLiveStreamTranscodeTemplateRequestShape', ],
            'output' => [ 'shape' => 'DeleteCustomLiveStreamTranscodeTemplateResponseShape', ],
        ],
        'DescribeTranscodeBinding' => [
            'name' => 'DescribeTranscodeBinding',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/transcodeTemplates/{template}:binding',
            ],
            'input' => [ 'shape' => 'DescribeTranscodeBindingRequestShape', ],
            'output' => [ 'shape' => 'DescribeTranscodeBindingResponseShape', ],
        ],
        'AddCustomLiveStreamWatermarkTemplate' => [
            'name' => 'AddCustomLiveStreamWatermarkTemplate',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/watermarkCustoms:template',
            ],
            'input' => [ 'shape' => 'AddCustomLiveStreamWatermarkTemplateRequestShape', ],
            'output' => [ 'shape' => 'AddCustomLiveStreamWatermarkTemplateResponseShape', ],
        ],
        'DescribeCustomLiveStreamWatermarkTemplates' => [
            'name' => 'DescribeCustomLiveStreamWatermarkTemplates',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/watermarkCustoms',
            ],
            'input' => [ 'shape' => 'DescribeCustomLiveStreamWatermarkTemplatesRequestShape', ],
            'output' => [ 'shape' => 'DescribeCustomLiveStreamWatermarkTemplatesResponseShape', ],
        ],
        'AddLiveStreamAppWatermark' => [
            'name' => 'AddLiveStreamAppWatermark',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/watermarkApps:config',
            ],
            'input' => [ 'shape' => 'AddLiveStreamAppWatermarkRequestShape', ],
            'output' => [ 'shape' => 'AddLiveStreamAppWatermarkResponseShape', ],
        ],
        'AddLiveStreamDomainWatermark' => [
            'name' => 'AddLiveStreamDomainWatermark',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/watermarkDomains:config',
            ],
            'input' => [ 'shape' => 'AddLiveStreamDomainWatermarkRequestShape', ],
            'output' => [ 'shape' => 'AddLiveStreamDomainWatermarkResponseShape', ],
        ],
        'DescribeCustomLiveStreamWatermarkConfig' => [
            'name' => 'DescribeCustomLiveStreamWatermarkConfig',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/watermarks:config',
            ],
            'input' => [ 'shape' => 'DescribeCustomLiveStreamWatermarkConfigRequestShape', ],
            'output' => [ 'shape' => 'DescribeCustomLiveStreamWatermarkConfigResponseShape', ],
        ],
        'DeleteCustomLiveStreamWatermarkTemplate' => [
            'name' => 'DeleteCustomLiveStreamWatermarkTemplate',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/watermarkCustoms/{template}',
            ],
            'input' => [ 'shape' => 'DeleteCustomLiveStreamWatermarkTemplateRequestShape', ],
            'output' => [ 'shape' => 'DeleteCustomLiveStreamWatermarkTemplateResponseShape', ],
        ],
        'DeleteLiveStreamAppWatermark' => [
            'name' => 'DeleteLiveStreamAppWatermark',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/watermarkApps/{publishDomain}/appNames/{appName}/templates/{template}',
            ],
            'input' => [ 'shape' => 'DeleteLiveStreamAppWatermarkRequestShape', ],
            'output' => [ 'shape' => 'DeleteLiveStreamAppWatermarkResponseShape', ],
        ],
        'DeleteLiveStreamDomainWatermark' => [
            'name' => 'DeleteLiveStreamDomainWatermark',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/watermarkDomains/{publishDomain}/templates/{template}',
            ],
            'input' => [ 'shape' => 'DeleteLiveStreamDomainWatermarkRequestShape', ],
            'output' => [ 'shape' => 'DeleteLiveStreamDomainWatermarkResponseShape', ],
        ],
        'DescribeWatermarkBinding' => [
            'name' => 'DescribeWatermarkBinding',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/watermarkTemplates/{template}:binding',
            ],
            'input' => [ 'shape' => 'DescribeWatermarkBindingRequestShape', ],
            'output' => [ 'shape' => 'DescribeWatermarkBindingResponseShape', ],
        ],
    ],
    'shapes' => [
        'App' => [
            'type' => 'structure',
            'members' => [
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
                'appStatus' => [ 'type' => 'string', 'locationName' => 'appStatus', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'updateTime' => [ 'type' => 'string', 'locationName' => 'updateTime', ],
            ],
        ],
        'UserBucket' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
            ],
        ],
        'TemplateBinding' => [
            'type' => 'structure',
            'members' => [
                'publishDomain' => [ 'type' => 'string', 'locationName' => 'publishDomain', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
                'streamName' => [ 'type' => 'string', 'locationName' => 'streamName', ],
                'template' => [ 'type' => 'string', 'locationName' => 'template', ],
            ],
        ],
        'DomainDetails' => [
            'type' => 'structure',
            'members' => [
                'publishDomains' => [ 'type' => 'list', 'member' => [ 'shape' => 'PublishDomain', ], ],
                'playDomains' => [ 'type' => 'list', 'member' => [ 'shape' => 'PlayDomain', ], ],
            ],
        ],
        'PublishDomain' => [
            'type' => 'structure',
            'members' => [
                'publishDomain' => [ 'type' => 'string', 'locationName' => 'publishDomain', ],
                'publishDomainCname' => [ 'type' => 'string', 'locationName' => 'publishDomainCname', ],
                'domainStatus' => [ 'type' => 'string', 'locationName' => 'domainStatus', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'updateTime' => [ 'type' => 'string', 'locationName' => 'updateTime', ],
            ],
        ],
        'PlayDomain' => [
            'type' => 'structure',
            'members' => [
                'playDomain' => [ 'type' => 'string', 'locationName' => 'playDomain', ],
                'playDomainCname' => [ 'type' => 'string', 'locationName' => 'playDomainCname', ],
                'domainStatus' => [ 'type' => 'string', 'locationName' => 'domainStatus', ],
                'playType' => [ 'type' => 'string', 'locationName' => 'playType', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'updateTime' => [ 'type' => 'string', 'locationName' => 'updateTime', ],
            ],
        ],
        'RecordFile' => [
            'type' => 'structure',
            'members' => [
                'fileId' => [ 'type' => 'string', 'locationName' => 'fileId', ],
                'format' => [ 'type' => 'string', 'locationName' => 'format', ],
                'width' => [ 'type' => 'integer', 'locationName' => 'width', ],
                'height' => [ 'type' => 'integer', 'locationName' => 'height', ],
                'startTime' => [ 'type' => 'string', 'locationName' => 'startTime', ],
                'endTime' => [ 'type' => 'string', 'locationName' => 'endTime', ],
                'duration' => [ 'type' => 'integer', 'locationName' => 'duration', ],
                'size' => [ 'type' => 'integer', 'locationName' => 'size', ],
                'bitrate' => [ 'type' => 'integer', 'locationName' => 'bitrate', ],
                'fps' => [ 'type' => 'integer', 'locationName' => 'fps', ],
                'fileUrl' => [ 'type' => 'string', 'locationName' => 'fileUrl', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
            ],
        ],
        'DomainTemplateConfig' => [
            'type' => 'structure',
            'members' => [
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
                'streamName' => [ 'type' => 'string', 'locationName' => 'streamName', ],
                'templateId' => [ 'type' => 'long', 'locationName' => 'templateId', ],
                'templateName' => [ 'type' => 'string', 'locationName' => 'templateName', ],
                'recordPeriod' => [ 'type' => 'integer', 'locationName' => 'recordPeriod', ],
                'recordFileType' => [ 'type' => 'integer', 'locationName' => 'recordFileType', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
            ],
        ],
        'File' => [
            'type' => 'structure',
            'members' => [
                'publishDomain' => [ 'type' => 'string', 'locationName' => 'publishDomain', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
                'streamName' => [ 'type' => 'string', 'locationName' => 'streamName', ],
                'startTime' => [ 'type' => 'string', 'locationName' => 'startTime', ],
                'endTime' => [ 'type' => 'string', 'locationName' => 'endTime', ],
                'duration' => [ 'type' => 'long', 'locationName' => 'duration', ],
                'height' => [ 'type' => 'integer', 'locationName' => 'height', ],
                'width' => [ 'type' => 'integer', 'locationName' => 'width', ],
                'ossBucket' => [ 'type' => 'string', 'locationName' => 'ossBucket', ],
                'ossEndpoint' => [ 'type' => 'string', 'locationName' => 'ossEndpoint', ],
                'ossObject' => [ 'type' => 'string', 'locationName' => 'ossObject', ],
            ],
        ],
        'LiveRecordConfig' => [
            'type' => 'structure',
            'members' => [
                'publishDomain' => [ 'type' => 'string', 'locationName' => 'publishDomain', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
                'streamName' => [ 'type' => 'string', 'locationName' => 'streamName', ],
                'recordConfig' => [ 'type' => 'string', 'locationName' => 'recordConfig', ],
            ],
        ],
        'RecordTime' => [
            'type' => 'structure',
            'members' => [
                'startTime' => [ 'type' => 'string', 'locationName' => 'startTime', ],
                'endTime' => [ 'type' => 'string', 'locationName' => 'endTime', ],
            ],
        ],
        'RecordApp' => [
            'type' => 'structure',
            'members' => [
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
                'recordConfig' => [ 'type' => 'string', 'locationName' => 'recordConfig', ],
            ],
        ],
        'RecordTemplate' => [
            'type' => 'structure',
            'members' => [
                'recordPeriod' => [ 'type' => 'integer', 'locationName' => 'recordPeriod', ],
                'saveBucket' => [ 'type' => 'string', 'locationName' => 'saveBucket', ],
                'saveEndpoint' => [ 'type' => 'string', 'locationName' => 'saveEndpoint', ],
                'recordFileType' => [ 'type' => 'string', 'locationName' => 'recordFileType', ],
                'template' => [ 'type' => 'string', 'locationName' => 'template', ],
            ],
        ],
        'LiveStatisticGroupByStreamResultData' => [
            'type' => 'structure',
            'members' => [
                'streamName' => [ 'type' => 'string', 'locationName' => 'streamName', ],
                'playerCount' => [ 'type' => 'long', 'locationName' => 'playerCount', ],
                'bandwidth' => [ 'type' => 'long', 'locationName' => 'bandwidth', ],
                'maxBandwidthtime' => [ 'type' => 'long', 'locationName' => 'maxBandwidthtime', ],
                'flow' => [ 'type' => 'long', 'locationName' => 'flow', ],
            ],
        ],
        'LiveStatisticGroupByAreaResultData' => [
            'type' => 'structure',
            'members' => [
                'area' => [ 'type' => 'string', 'locationName' => 'area', ],
                'playerCount' => [ 'type' => 'long', 'locationName' => 'playerCount', ],
                'bandwidth' => [ 'type' => 'long', 'locationName' => 'bandwidth', ],
                'maxBandwidthtime' => [ 'type' => 'long', 'locationName' => 'maxBandwidthtime', ],
                'flow' => [ 'type' => 'long', 'locationName' => 'flow', ],
            ],
        ],
        'LiveStatisticGroupByAreaIspResultData' => [
            'type' => 'structure',
            'members' => [
                'area' => [ 'type' => 'string', 'locationName' => 'area', ],
                'ispData' => [ 'type' => 'list', 'member' => [ 'shape' => 'LiveStatisticGroupByAreaIspResultIspData', ], ],
            ],
        ],
        'LiveStatisticGroupByAreaIspResultIspData' => [
            'type' => 'structure',
            'members' => [
                'isp' => [ 'type' => 'string', 'locationName' => 'isp', ],
                'playerCount' => [ 'type' => 'long', 'locationName' => 'playerCount', ],
                'bandwidth' => [ 'type' => 'long', 'locationName' => 'bandwidth', ],
                'maxBandwidthtime' => [ 'type' => 'long', 'locationName' => 'maxBandwidthtime', ],
                'flow' => [ 'type' => 'long', 'locationName' => 'flow', ],
            ],
        ],
        'PlayDataStatisticResultData' => [
            'type' => 'structure',
            'members' => [
                'avgbandwidth' => [ 'type' => 'long', 'locationName' => 'avgbandwidth', ],
                'maxavgbandwidthtime' => [ 'type' => 'long', 'locationName' => 'maxavgbandwidthtime', ],
                'pv' => [ 'type' => 'long', 'locationName' => 'pv', ],
                'flow' => [ 'type' => 'long', 'locationName' => 'flow', ],
                'playercount' => [ 'type' => 'long', 'locationName' => 'playercount', ],
            ],
        ],
        'SnapshotCountStatisticData' => [
            'type' => 'structure',
            'members' => [
                'count' => [ 'type' => 'integer', 'locationName' => 'count', ],
            ],
        ],
        'FileStorageStatisticData' => [
            'type' => 'structure',
            'members' => [
                'size' => [ 'type' => 'long', 'locationName' => 'size', ],
            ],
        ],
        'BandwidthStatisticResultData' => [
            'type' => 'structure',
            'members' => [
                'value' => [ 'type' => 'long', 'locationName' => 'value', ],
                'maxValueTime' => [ 'type' => 'long', 'locationName' => 'maxValueTime', ],
            ],
        ],
        'RecordDetail' => [
            'type' => 'structure',
            'members' => [
                'format' => [ 'type' => 'string', 'locationName' => 'format', ],
                'duration' => [ 'type' => 'double', 'locationName' => 'duration', ],
            ],
        ],
        'TranscodeDurationStatisticData' => [
            'type' => 'structure',
            'members' => [
                'duration' => [ 'type' => 'string', 'locationName' => 'duration', ],
            ],
        ],
        'RecordData' => [
            'type' => 'structure',
            'members' => [
                'publishDomain' => [ 'type' => 'string', 'locationName' => 'publishDomain', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
                'streamName' => [ 'type' => 'string', 'locationName' => 'streamName', ],
                'date' => [ 'type' => 'string', 'locationName' => 'date', ],
                'total' => [ 'type' => 'double', 'locationName' => 'total', ],
                'detail' => [ 'type' => 'list', 'member' => [ 'shape' => 'RecordDetail', ], ],
            ],
        ],
        'PornCountStatisticData' => [
            'type' => 'structure',
            'members' => [
                'count' => [ 'type' => 'integer', 'locationName' => 'count', ],
            ],
        ],
        'TrafficStatisticResultData' => [
            'type' => 'structure',
            'members' => [
                'value' => [ 'type' => 'long', 'locationName' => 'value', ],
            ],
        ],
        'PublishOnlineStreamResultData' => [
            'type' => 'structure',
            'members' => [
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
                'streamName' => [ 'type' => 'string', 'locationName' => 'streamName', ],
                'clientIp' => [ 'type' => 'string', 'locationName' => 'clientIp', ],
                'serverIp' => [ 'type' => 'string', 'locationName' => 'serverIp', ],
                'frameRate' => [ 'type' => 'double', 'locationName' => 'frameRate', ],
                'frameLossRate' => [ 'type' => 'double', 'locationName' => 'frameLossRate', ],
                'lastActive' => [ 'type' => 'long', 'locationName' => 'lastActive', ],
                'realFps' => [ 'type' => 'double', 'locationName' => 'realFps', ],
                'uploadSpeed' => [ 'type' => 'long', 'locationName' => 'uploadSpeed', ],
                'videoCodec' => [ 'type' => 'long', 'locationName' => 'videoCodec', ],
                'videoDataRate' => [ 'type' => 'long', 'locationName' => 'videoDataRate', ],
                'audioCodec' => [ 'type' => 'long', 'locationName' => 'audioCodec', ],
            ],
        ],
        'RankingUrlResultData' => [
            'type' => 'structure',
            'members' => [
                'url' => [ 'type' => 'string', 'locationName' => 'url', ],
                'rank' => [ 'type' => 'integer', 'locationName' => 'rank', ],
                'md5' => [ 'type' => 'string', 'locationName' => 'md5', ],
                'value' => [ 'type' => 'long', 'locationName' => 'value', ],
                'data' => [ 'type' => 'list', 'member' => [ 'shape' => 'RankingUrlResultRankData', ], ],
            ],
        ],
        'PublishStreamInfoData' => [
            'type' => 'structure',
            'members' => [
                'streamName' => [ 'type' => 'string', 'locationName' => 'streamName', ],
                'fps' => [ 'type' => 'string', 'locationName' => 'fps', ],
                'bitrate' => [ 'type' => 'string', 'locationName' => 'bitrate', ],
                'pushEdgeNodeIps' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'anchorIps' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'flvBandWidth' => [ 'type' => 'long', 'locationName' => 'flvBandWidth', ],
                'flvPlayerCount' => [ 'type' => 'long', 'locationName' => 'flvPlayerCount', ],
                'hlsBandWidth' => [ 'type' => 'long', 'locationName' => 'hlsBandWidth', ],
                'hlsPlayerCount' => [ 'type' => 'long', 'locationName' => 'hlsPlayerCount', ],
            ],
        ],
        'DomainsLogResultData' => [
            'type' => 'structure',
            'members' => [
                'fileName' => [ 'type' => 'string', 'locationName' => 'fileName', ],
                'logUrl' => [ 'type' => 'string', 'locationName' => 'logUrl', ],
                'md5' => [ 'type' => 'string', 'locationName' => 'md5', ],
                'size' => [ 'type' => 'long', 'locationName' => 'size', ],
                'startTime' => [ 'type' => 'string', 'locationName' => 'startTime', ],
                'endTime' => [ 'type' => 'string', 'locationName' => 'endTime', ],
            ],
        ],
        'RankingUrlResultRankData' => [
            'type' => 'structure',
            'members' => [
                'uv' => [ 'type' => 'long', 'locationName' => 'uv', ],
                'bandwidth' => [ 'type' => 'long', 'locationName' => 'bandwidth', ],
                'pv' => [ 'type' => 'long', 'locationName' => 'pv', ],
                'flow' => [ 'type' => 'long', 'locationName' => 'flow', ],
            ],
        ],
        'LiveStreamUserNumResultData' => [
            'type' => 'structure',
            'members' => [
                'count' => [ 'type' => 'long', 'locationName' => 'count', ],
            ],
        ],
        'SnapshotTemplate' => [
            'type' => 'structure',
            'members' => [
                'format' => [ 'type' => 'string', 'locationName' => 'format', ],
                'width' => [ 'type' => 'integer', 'locationName' => 'width', ],
                'height' => [ 'type' => 'integer', 'locationName' => 'height', ],
                'fillType' => [ 'type' => 'integer', 'locationName' => 'fillType', ],
                'snapshotInterval' => [ 'type' => 'integer', 'locationName' => 'snapshotInterval', ],
                'saveMode' => [ 'type' => 'integer', 'locationName' => 'saveMode', ],
                'saveBucket' => [ 'type' => 'string', 'locationName' => 'saveBucket', ],
                'saveEndpoint' => [ 'type' => 'string', 'locationName' => 'saveEndpoint', ],
                'template' => [ 'type' => 'string', 'locationName' => 'template', ],
            ],
        ],
        'SnapshotConfig' => [
            'type' => 'structure',
            'members' => [
                'publishDomain' => [ 'type' => 'string', 'locationName' => 'publishDomain', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
                'streamName' => [ 'type' => 'string', 'locationName' => 'streamName', ],
                'snapshotConfig' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'Snapshot' => [
            'type' => 'structure',
            'members' => [
                'publishDomain' => [ 'type' => 'string', 'locationName' => 'publishDomain', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
                'streamName' => [ 'type' => 'string', 'locationName' => 'streamName', ],
                'snapshotTime' => [ 'type' => 'string', 'locationName' => 'snapshotTime', ],
                'height' => [ 'type' => 'integer', 'locationName' => 'height', ],
                'width' => [ 'type' => 'integer', 'locationName' => 'width', ],
                'ossBucket' => [ 'type' => 'string', 'locationName' => 'ossBucket', ],
                'ossEndpoint' => [ 'type' => 'string', 'locationName' => 'ossEndpoint', ],
                'ossObject' => [ 'type' => 'string', 'locationName' => 'ossObject', ],
            ],
        ],
        'StreamInfo' => [
            'type' => 'structure',
            'members' => [
                'publishDomain' => [ 'type' => 'string', 'locationName' => 'publishDomain', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
                'streamName' => [ 'type' => 'string', 'locationName' => 'streamName', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
            ],
        ],
        'OnlineStreamInfo' => [
            'type' => 'structure',
            'members' => [
                'publishDomain' => [ 'type' => 'string', 'locationName' => 'publishDomain', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
                'streamName' => [ 'type' => 'string', 'locationName' => 'streamName', ],
                'publishTime' => [ 'type' => 'string', 'locationName' => 'publishTime', ],
                'publishUrl' => [ 'type' => 'string', 'locationName' => 'publishUrl', ],
            ],
        ],
        'LiveStreamPublishInfo' => [
            'type' => 'structure',
            'members' => [
                'publishDomain' => [ 'type' => 'string', 'locationName' => 'publishDomain', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
                'streamName' => [ 'type' => 'string', 'locationName' => 'streamName', ],
                'publishUpTime' => [ 'type' => 'string', 'locationName' => 'publishUpTime', ],
                'publishDownTime' => [ 'type' => 'string', 'locationName' => 'publishDownTime', ],
            ],
        ],
        'ManageQueryStreamInfo' => [
            'type' => 'structure',
            'members' => [
                'publishDomain' => [ 'type' => 'string', 'locationName' => 'publishDomain', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
                'streamName' => [ 'type' => 'string', 'locationName' => 'streamName', ],
                'publishStartTime' => [ 'type' => 'string', 'locationName' => 'publishStartTime', ],
                'publishEndTime' => [ 'type' => 'string', 'locationName' => 'publishEndTime', ],
                'publishUrl' => [ 'type' => 'string', 'locationName' => 'publishUrl', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
            ],
        ],
        'NotifyInfo' => [
            'type' => 'structure',
            'members' => [
                'publishDomain' => [ 'type' => 'string', 'locationName' => 'publishDomain', ],
                'notifyUrl' => [ 'type' => 'string', 'locationName' => 'notifyUrl', ],
            ],
        ],
        'TimeshiftPlayDomain' => [
            'type' => 'structure',
            'members' => [
                'playDomain' => [ 'type' => 'string', 'locationName' => 'playDomain', ],
                'timeshiftStatus' => [ 'type' => 'string', 'locationName' => 'timeshiftStatus', ],
                'playType' => [ 'type' => 'string', 'locationName' => 'playType', ],
            ],
        ],
        'RestartConfig' => [
            'type' => 'structure',
            'members' => [
                'publishDomains' => [ 'type' => 'list', 'member' => [ 'shape' => 'RestartPublishDomain', ], ],
                'playDomains' => [ 'type' => 'list', 'member' => [ 'shape' => 'RestartPlayDomain', ], ],
            ],
        ],
        'RestartPlayDomain' => [
            'type' => 'structure',
            'members' => [
                'playDomain' => [ 'type' => 'string', 'locationName' => 'playDomain', ],
                'restartStatus' => [ 'type' => 'string', 'locationName' => 'restartStatus', ],
                'playType' => [ 'type' => 'string', 'locationName' => 'playType', ],
            ],
        ],
        'TimeshiftPublishDomain' => [
            'type' => 'structure',
            'members' => [
                'publishDomain' => [ 'type' => 'string', 'locationName' => 'publishDomain', ],
            ],
        ],
        'TimeshiftConfig' => [
            'type' => 'structure',
            'members' => [
                'publishDomains' => [ 'type' => 'list', 'member' => [ 'shape' => 'TimeshiftPublishDomain', ], ],
                'playDomains' => [ 'type' => 'list', 'member' => [ 'shape' => 'TimeshiftPlayDomain', ], ],
            ],
        ],
        'RestartPublishDomain' => [
            'type' => 'structure',
            'members' => [
                'publishDomain' => [ 'type' => 'string', 'locationName' => 'publishDomain', ],
            ],
        ],
        'TemplateConfig' => [
            'type' => 'structure',
            'members' => [
                'publishDomain' => [ 'type' => 'string', 'locationName' => 'publishDomain', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
                'streamName' => [ 'type' => 'string', 'locationName' => 'streamName', ],
                'transcodeConfig' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'TranscodeInfo' => [
            'type' => 'structure',
            'members' => [
                'videoCodec' => [ 'type' => 'string', 'locationName' => 'videoCodec', ],
                'videoCodeRate' => [ 'type' => 'integer', 'locationName' => 'videoCodeRate', ],
                'videoFrameRate' => [ 'type' => 'string', 'locationName' => 'videoFrameRate', ],
                'width' => [ 'type' => 'integer', 'locationName' => 'width', ],
                'height' => [ 'type' => 'integer', 'locationName' => 'height', ],
                'template' => [ 'type' => 'string', 'locationName' => 'template', ],
                'templateName' => [ 'type' => 'string', 'locationName' => 'templateName', ],
                'audioCodec' => [ 'type' => 'string', 'locationName' => 'audioCodec', ],
                'audioFormat' => [ 'type' => 'string', 'locationName' => 'audioFormat', ],
                'audioSampleRate' => [ 'type' => 'integer', 'locationName' => 'audioSampleRate', ],
                'audioChannel' => [ 'type' => 'integer', 'locationName' => 'audioChannel', ],
                'audioCodeRate' => [ 'type' => 'integer', 'locationName' => 'audioCodeRate', ],
                'jdchd' => [ 'type' => 'string', 'locationName' => 'jdchd', ],
                'audioComfort' => [ 'type' => 'string', 'locationName' => 'audioComfort', ],
            ],
        ],
        'WatermarkTemplate' => [
            'type' => 'structure',
            'members' => [
                'position' => [ 'type' => 'integer', 'locationName' => 'position', ],
                'offsetUnit' => [ 'type' => 'string', 'locationName' => 'offsetUnit', ],
                'offSetX' => [ 'type' => 'integer', 'locationName' => 'offSetX', ],
                'offSetY' => [ 'type' => 'integer', 'locationName' => 'offSetY', ],
                'sizeUnit' => [ 'type' => 'string', 'locationName' => 'sizeUnit', ],
                'width' => [ 'type' => 'integer', 'locationName' => 'width', ],
                'height' => [ 'type' => 'integer', 'locationName' => 'height', ],
                'url' => [ 'type' => 'string', 'locationName' => 'url', ],
                'template' => [ 'type' => 'string', 'locationName' => 'template', ],
            ],
        ],
        'LiveStreamRecordConfig' => [
            'type' => 'structure',
            'members' => [
                'publishDomain' => [ 'type' => 'string', 'locationName' => 'publishDomain', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
                'streamName' => [ 'type' => 'string', 'locationName' => 'streamName', ],
                'watermarkConfig' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'AddLiveAppResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'StopLiveAppRequestShape' => [
            'type' => 'structure',
            'members' => [
                'publishDomain' => [ 'type' => 'string', 'locationName' => 'publishDomain', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'DescribeLiveAppResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeLiveAppResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeLiveAppResultShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
                'apps' => [ 'type' => 'list', 'member' => [ 'shape' => 'App', ], ],
            ],
        ],
        'DescribeLiveAppRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNum' => [ 'type' => 'integer', 'locationName' => 'pageNum', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'filters' => [ 'type' => 'list', 'member' => [ 'shape' => 'Filter', ], ],
            ],
        ],
        'StopLiveAppResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'AddLiveAppRequestShape' => [
            'type' => 'structure',
            'members' => [
                'publishDomain' => [ 'type' => 'string', 'locationName' => 'publishDomain', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'AddLiveAppResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'Filter' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'operator' => [ 'type' => 'string', 'locationName' => 'operator', ],
                'values' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'StopLiveAppResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeLivePlayAuthKeyResultShape' => [
            'type' => 'structure',
            'members' => [
                'playDomain' => [ 'type' => 'string', 'locationName' => 'playDomain', ],
                'authStatus' => [ 'type' => 'string', 'locationName' => 'authStatus', ],
                'authKey' => [ 'type' => 'string', 'locationName' => 'authKey', ],
            ],
        ],
        'DescribeLiveRestartAuthKeyRequestShape' => [
            'type' => 'structure',
            'members' => [
                'restartDomain' => [ 'type' => 'string', 'locationName' => 'restartDomain', ],
            ],
        ],
        'SetLiveRestartAuthKeyResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DescribeLivePlayAuthKeyRequestShape' => [
            'type' => 'structure',
            'members' => [
                'playDomain' => [ 'type' => 'string', 'locationName' => 'playDomain', ],
            ],
        ],
        'DescribeLiveRestartAuthKeyResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeLiveRestartAuthKeyResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'SetLiveRestartAuthKeyResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'SetLivePlayAuthKeyRequestShape' => [
            'type' => 'structure',
            'members' => [
                'playDomain' => [ 'type' => 'string', 'locationName' => 'playDomain', ],
                'authStatus' => [ 'type' => 'string', 'locationName' => 'authStatus', ],
                'authKey' => [ 'type' => 'string', 'locationName' => 'authKey', ],
            ],
        ],
        'SetLivePlayAuthKeyResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeLiveRestartAuthKeyResultShape' => [
            'type' => 'structure',
            'members' => [
                'playDomain' => [ 'type' => 'string', 'locationName' => 'playDomain', ],
                'authStatus' => [ 'type' => 'string', 'locationName' => 'authStatus', ],
                'authKey' => [ 'type' => 'string', 'locationName' => 'authKey', ],
            ],
        ],
        'SetLiveRestartAuthKeyRequestShape' => [
            'type' => 'structure',
            'members' => [
                'restartDomain' => [ 'type' => 'string', 'locationName' => 'restartDomain', ],
                'authStatus' => [ 'type' => 'string', 'locationName' => 'authStatus', ],
                'authKey' => [ 'type' => 'string', 'locationName' => 'authKey', ],
            ],
        ],
        'DescribeLivePlayAuthKeyResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeLivePlayAuthKeyResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'SetLivePlayAuthKeyResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DescribeLiveDomainCertificateResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeLiveDomainCertificateResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeLiveDomainCertificateResultShape' => [
            'type' => 'structure',
            'members' => [
                'playDomain' => [ 'type' => 'string', 'locationName' => 'playDomain', ],
                'certStatus' => [ 'type' => 'string', 'locationName' => 'certStatus', ],
                'cert' => [ 'type' => 'string', 'locationName' => 'cert', ],
                'title' => [ 'type' => 'string', 'locationName' => 'title', ],
            ],
        ],
        'SetLiveDomainCertificateResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'SetLiveDomainCertificateRequestShape' => [
            'type' => 'structure',
            'members' => [
                'playDomain' => [ 'type' => 'string', 'locationName' => 'playDomain', ],
                'certStatus' => [ 'type' => 'string', 'locationName' => 'certStatus', ],
                'cert' => [ 'type' => 'string', 'locationName' => 'cert', ],
                'key' => [ 'type' => 'string', 'locationName' => 'key', ],
                'title' => [ 'type' => 'string', 'locationName' => 'title', ],
            ],
        ],
        'DescribeLiveDomainCertificateRequestShape' => [
            'type' => 'structure',
            'members' => [
                'playDomain' => [ 'type' => 'string', 'locationName' => 'playDomain', ],
            ],
        ],
        'SetLiveDomainCertificateResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeLiveDomainDetailRequestShape' => [
            'type' => 'structure',
            'members' => [
                'publishDomain' => [ 'type' => 'string', 'locationName' => 'publishDomain', ],
            ],
        ],
        'DeleteLiveDomainResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DescribeLiveDomainsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeLiveDomainsResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'StartLiveDomainResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeLiveDomainDetailResultShape' => [
            'type' => 'structure',
            'members' => [
                'sourceId' => [ 'type' => 'long', 'locationName' => 'sourceId', ],
                'publishDomains' => [ 'type' => 'list', 'member' => [ 'shape' => 'PublishDomain', ], ],
                'playDomains' => [ 'type' => 'list', 'member' => [ 'shape' => 'PlayDomain', ], ],
            ],
        ],
        'DeleteLiveDomainResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeLiveDomainsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNum' => [ 'type' => 'integer', 'locationName' => 'pageNum', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'publishDomain' => [ 'type' => 'string', 'locationName' => 'publishDomain', ],
            ],
        ],
        'AddLiveRestartDomainRequestShape' => [
            'type' => 'structure',
            'members' => [
                'playDomain' => [ 'type' => 'string', 'locationName' => 'playDomain', ],
                'restartDomain' => [ 'type' => 'string', 'locationName' => 'restartDomain', ],
            ],
        ],
        'AddLiveRestartDomainResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'StartLiveDomainRequestShape' => [
            'type' => 'structure',
            'members' => [
                'publishDomain' => [ 'type' => 'string', 'locationName' => 'publishDomain', ],
            ],
        ],
        'StopLiveDomainResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'AddLiveDomainResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'StopLiveDomainResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DescribeLiveDomainDetailResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeLiveDomainDetailResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'StopLiveDomainRequestShape' => [
            'type' => 'structure',
            'members' => [
                'publishDomain' => [ 'type' => 'string', 'locationName' => 'publishDomain', ],
            ],
        ],
        'AddLiveDomainResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeLiveDomainsResultShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
                'domainDetails' => [ 'type' => 'list', 'member' => [ 'shape' => 'DomainDetails', ], ],
            ],
        ],
        'DeleteLiveDomainRequestShape' => [
            'type' => 'structure',
            'members' => [
                'publishDomain' => [ 'type' => 'string', 'locationName' => 'publishDomain', ],
            ],
        ],
        'AddLiveRestartDomainResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'AddLiveDomainRequestShape' => [
            'type' => 'structure',
            'members' => [
                'publishDomain' => [ 'type' => 'string', 'locationName' => 'publishDomain', ],
                'playDomain' => [ 'type' => 'string', 'locationName' => 'playDomain', ],
            ],
        ],
        'StartLiveDomainResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DescribeLiveStreamRecordNotifyConfigResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeLiveStreamRecordNotifyConfigResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'AddLiveStreamAppRecordResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'AddLiveStreamAppRecordRequestShape' => [
            'type' => 'structure',
            'members' => [
                'publishDomain' => [ 'type' => 'string', 'locationName' => 'publishDomain', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
                'template' => [ 'type' => 'string', 'locationName' => 'template', ],
            ],
        ],
        'DescribeCustomLiveStreamRecordTemplatesResultShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
                'recordTemplates' => [ 'type' => 'list', 'member' => [ 'shape' => 'RecordTemplate', ], ],
            ],
        ],
        'DescribeLiveStreamRecordNotifyConfigResultShape' => [
            'type' => 'structure',
            'members' => [
                'publishDomain' => [ 'type' => 'string', 'locationName' => 'publishDomain', ],
                'notifyUrl' => [ 'type' => 'string', 'locationName' => 'notifyUrl', ],
            ],
        ],
        'DeleteCustomLiveStreamRecordTemplateResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DeleteLiveStreamAppRecordRequestShape' => [
            'type' => 'structure',
            'members' => [
                'publishDomain' => [ 'type' => 'string', 'locationName' => 'publishDomain', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
                'template' => [ 'type' => 'string', 'locationName' => 'template', ],
            ],
        ],
        'SetLiveStreamRecordNotifyConfigResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DeleteCustomLiveStreamRecordTemplateResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'AddLiveStreamDomainRecordResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'SetLiveStreamRecordNotifyConfigRequestShape' => [
            'type' => 'structure',
            'members' => [
                'publishDomain' => [ 'type' => 'string', 'locationName' => 'publishDomain', ],
                'notifyUrl' => [ 'type' => 'string', 'locationName' => 'notifyUrl', ],
            ],
        ],
        'AddLiveStreamDomainRecordResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DescribeCustomLiveStreamRecordConfigRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNum' => [ 'type' => 'integer', 'locationName' => 'pageNum', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'filters' => [ 'type' => 'list', 'member' => [ 'shape' => 'Filter', ], ],
            ],
        ],
        'DeleteLiveStreamRecordNotifyConfigResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DescribeRecordBindingResultShape' => [
            'type' => 'structure',
            'members' => [
                'bindingList' => [ 'type' => 'list', 'member' => [ 'shape' => 'TemplateBinding', ], ],
            ],
        ],
        'DescribeCustomLiveStreamRecordConfigResultShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
                'recordConfigs' => [ 'type' => 'list', 'member' => [ 'shape' => 'LiveRecordConfig', ], ],
            ],
        ],
        'DeleteLiveStreamRecordNotifyConfigResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeCustomLiveStreamRecordConfigResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeCustomLiveStreamRecordConfigResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DeleteLiveStreamDomainRecordResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeRecordBindingResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeRecordBindingResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'AddLiveStreamDomainRecordRequestShape' => [
            'type' => 'structure',
            'members' => [
                'publishDomain' => [ 'type' => 'string', 'locationName' => 'publishDomain', ],
                'template' => [ 'type' => 'string', 'locationName' => 'template', ],
            ],
        ],
        'AddCustomLiveStreamRecordTemplateResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DeleteLiveStreamAppRecordResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DeleteCustomLiveStreamRecordTemplateRequestShape' => [
            'type' => 'structure',
            'members' => [
                'template' => [ 'type' => 'string', 'locationName' => 'template', ],
            ],
        ],
        'AddLiveRecordTaskRequestShape' => [
            'type' => 'structure',
            'members' => [
                'recordTimes' => [ 'type' => 'list', 'member' => [ 'shape' => 'RecordTime', ], ],
                'saveBucket' => [ 'type' => 'string', 'locationName' => 'saveBucket', ],
                'saveEndpoint' => [ 'type' => 'string', 'locationName' => 'saveEndpoint', ],
                'recordFileType' => [ 'type' => 'string', 'locationName' => 'recordFileType', ],
                'saveObject' => [ 'type' => 'string', 'locationName' => 'saveObject', ],
                'taskExternalId' => [ 'type' => 'string', 'locationName' => 'taskExternalId', ],
                'publishDomain' => [ 'type' => 'string', 'locationName' => 'publishDomain', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
                'streamName' => [ 'type' => 'string', 'locationName' => 'streamName', ],
            ],
        ],
        'AddLiveRecordTaskResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DescribeLiveStreamRecordNotifyConfigRequestShape' => [
            'type' => 'structure',
            'members' => [
                'publishDomain' => [ 'type' => 'string', 'locationName' => 'publishDomain', ],
            ],
        ],
        'DeleteLiveStreamDomainRecordRequestShape' => [
            'type' => 'structure',
            'members' => [
                'publishDomain' => [ 'type' => 'string', 'locationName' => 'publishDomain', ],
                'template' => [ 'type' => 'string', 'locationName' => 'template', ],
            ],
        ],
        'DeleteLiveStreamAppRecordResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'SetLiveStreamRecordNotifyConfigResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'AddCustomLiveStreamRecordTemplateResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DeleteLiveStreamRecordNotifyConfigRequestShape' => [
            'type' => 'structure',
            'members' => [
                'publishDomain' => [ 'type' => 'string', 'locationName' => 'publishDomain', ],
            ],
        ],
        'AddLiveStreamAppRecordResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'AddCustomLiveStreamRecordTemplateRequestShape' => [
            'type' => 'structure',
            'members' => [
                'recordPeriod' => [ 'type' => 'integer', 'locationName' => 'recordPeriod', ],
                'saveBucket' => [ 'type' => 'string', 'locationName' => 'saveBucket', ],
                'saveEndpoint' => [ 'type' => 'string', 'locationName' => 'saveEndpoint', ],
                'recordFileType' => [ 'type' => 'string', 'locationName' => 'recordFileType', ],
                'template' => [ 'type' => 'string', 'locationName' => 'template', ],
            ],
        ],
        'DeleteLiveStreamDomainRecordResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DescribeCustomLiveStreamRecordTemplatesResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeCustomLiveStreamRecordTemplatesResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeCustomLiveStreamRecordTemplatesRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNum' => [ 'type' => 'integer', 'locationName' => 'pageNum', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'filters' => [ 'type' => 'list', 'member' => [ 'shape' => 'Filter', ], ],
            ],
        ],
        'DescribeRecordBindingRequestShape' => [
            'type' => 'structure',
            'members' => [
                'template' => [ 'type' => 'string', 'locationName' => 'template', ],
            ],
        ],
        'AddLiveRecordTaskResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'LiveStatisticGroupByStreamResult' => [
            'type' => 'structure',
            'members' => [
                'startTime' => [ 'type' => 'string', 'locationName' => 'startTime', ],
                'endTime' => [ 'type' => 'string', 'locationName' => 'endTime', ],
                'data' => [ 'type' => 'list', 'member' => [ 'shape' => 'LiveStatisticGroupByStreamResultData', ], ],
            ],
        ],
        'DescribeLiveStatisticGroupByAreaResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeLiveStatisticGroupByAreaResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeLiveStatisticGroupByStreamResultShape' => [
            'type' => 'structure',
            'members' => [
                'dataList' => [ 'type' => 'list', 'member' => [ 'shape' => 'LiveStatisticGroupByStreamResult', ], ],
            ],
        ],
        'DescribeLiveStatisticGroupByStreamResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeLiveStatisticGroupByStreamResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeLiveStatisticGroupByAreaIspResultShape' => [
            'type' => 'structure',
            'members' => [
                'dataList' => [ 'type' => 'list', 'member' => [ 'shape' => 'LiveStatisticGroupByAreaIspResult', ], ],
            ],
        ],
        'DescribeLiveStatisticGroupByAreaRequestShape' => [
            'type' => 'structure',
            'members' => [
                'domainName' => [ 'type' => 'string', 'locationName' => 'domainName', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
                'streamName' => [ 'type' => 'string', 'locationName' => 'streamName', ],
                'ispName' => [ 'type' => 'string', 'locationName' => 'ispName', ],
                'locationName' => [ 'type' => 'string', 'locationName' => 'locationName', ],
                'period' => [ 'type' => 'string', 'locationName' => 'period', ],
                'startTime' => [ 'type' => 'string', 'locationName' => 'startTime', ],
                'endTime' => [ 'type' => 'string', 'locationName' => 'endTime', ],
            ],
        ],
        'DescribeLiveStatisticGroupByAreaIspResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeLiveStatisticGroupByAreaIspResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeLiveStatisticGroupByAreaIspRequestShape' => [
            'type' => 'structure',
            'members' => [
                'domainName' => [ 'type' => 'string', 'locationName' => 'domainName', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
                'streamName' => [ 'type' => 'string', 'locationName' => 'streamName', ],
                'ispName' => [ 'type' => 'string', 'locationName' => 'ispName', ],
                'locationName' => [ 'type' => 'string', 'locationName' => 'locationName', ],
                'protocolType' => [ 'type' => 'string', 'locationName' => 'protocolType', ],
                'period' => [ 'type' => 'string', 'locationName' => 'period', ],
                'startTime' => [ 'type' => 'string', 'locationName' => 'startTime', ],
                'endTime' => [ 'type' => 'string', 'locationName' => 'endTime', ],
            ],
        ],
        'LiveStatisticGroupByAreaIspResult' => [
            'type' => 'structure',
            'members' => [
                'startTime' => [ 'type' => 'string', 'locationName' => 'startTime', ],
                'endTime' => [ 'type' => 'string', 'locationName' => 'endTime', ],
                'data' =>  [ 'shape' => 'LiveStatisticGroupByAreaIspResultData', ],
            ],
        ],
        'DescribeLiveStatisticGroupByAreaResultShape' => [
            'type' => 'structure',
            'members' => [
                'dataList' => [ 'type' => 'list', 'member' => [ 'shape' => 'LiveStatisticGroupByAreaResult', ], ],
            ],
        ],
        'DescribeLiveStatisticGroupByStreamRequestShape' => [
            'type' => 'structure',
            'members' => [
                'domainName' => [ 'type' => 'string', 'locationName' => 'domainName', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
                'streamName' => [ 'type' => 'string', 'locationName' => 'streamName', ],
                'ispName' => [ 'type' => 'string', 'locationName' => 'ispName', ],
                'locationName' => [ 'type' => 'string', 'locationName' => 'locationName', ],
                'period' => [ 'type' => 'string', 'locationName' => 'period', ],
                'startTime' => [ 'type' => 'string', 'locationName' => 'startTime', ],
                'endTime' => [ 'type' => 'string', 'locationName' => 'endTime', ],
            ],
        ],
        'LiveStatisticGroupByAreaResult' => [
            'type' => 'structure',
            'members' => [
                'startTime' => [ 'type' => 'string', 'locationName' => 'startTime', ],
                'endTime' => [ 'type' => 'string', 'locationName' => 'endTime', ],
                'data' => [ 'type' => 'list', 'member' => [ 'shape' => 'LiveStatisticGroupByAreaResultData', ], ],
            ],
        ],
        'DescribeLiveStreamPlayerRankingDataRequestShape' => [
            'type' => 'structure',
            'members' => [
                'domainName' => [ 'type' => 'string', 'locationName' => 'domainName', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
                'protocolType' => [ 'type' => 'string', 'locationName' => 'protocolType', ],
                'startTime' => [ 'type' => 'string', 'locationName' => 'startTime', ],
                'endTime' => [ 'type' => 'string', 'locationName' => 'endTime', ],
            ],
        ],
        'DescribeUrlRankingRequestShape' => [
            'type' => 'structure',
            'members' => [
                'domainName' => [ 'type' => 'string', 'locationName' => 'domainName', ],
                'size' => [ 'type' => 'integer', 'locationName' => 'size', ],
                'rankfield' => [ 'type' => 'string', 'locationName' => 'rankfield', ],
                'startTime' => [ 'type' => 'string', 'locationName' => 'startTime', ],
                'endTime' => [ 'type' => 'string', 'locationName' => 'endTime', ],
            ],
        ],
        'DescribeDomainOnlineStreamResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeDomainOnlineStreamResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeUrlRankingResultShape' => [
            'type' => 'structure',
            'members' => [
                'dataList' => [ 'type' => 'list', 'member' => [ 'shape' => 'RankingUrlResult', ], ],
            ],
        ],
        'DescribeLiveTranscodeStreamPlayerUserNumResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeLiveTranscodeStreamPlayerUserNumResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeLiveTranscodeStreamPlayerUserNumRequestShape' => [
            'type' => 'structure',
            'members' => [
                'domainName' => [ 'type' => 'string', 'locationName' => 'domainName', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
                'ispName' => [ 'type' => 'string', 'locationName' => 'ispName', ],
                'locationName' => [ 'type' => 'string', 'locationName' => 'locationName', ],
                'protocolType' => [ 'type' => 'string', 'locationName' => 'protocolType', ],
                'period' => [ 'type' => 'string', 'locationName' => 'period', ],
                'startTime' => [ 'type' => 'string', 'locationName' => 'startTime', ],
                'endTime' => [ 'type' => 'string', 'locationName' => 'endTime', ],
            ],
        ],
        'DescribePublishStreamInfoDataRequestShape' => [
            'type' => 'structure',
            'members' => [
                'domainName' => [ 'type' => 'string', 'locationName' => 'domainName', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
                'streamName' => [ 'type' => 'string', 'locationName' => 'streamName', ],
                'startTime' => [ 'type' => 'string', 'locationName' => 'startTime', ],
                'endTime' => [ 'type' => 'string', 'locationName' => 'endTime', ],
            ],
        ],
        'DescribePublishStreamInfoDataResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribePublishStreamInfoDataResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeDomainsLogResultShape' => [
            'type' => 'structure',
            'members' => [
                'dataList' => [ 'type' => 'list', 'member' => [ 'shape' => 'DomainsLogResult', ], ],
            ],
        ],
        'DomainsLogResult' => [
            'type' => 'structure',
            'members' => [
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
                'logList' => [ 'type' => 'list', 'member' => [ 'shape' => 'DomainsLogResultData', ], ],
            ],
        ],
        'DescribeDomainsLogRequestShape' => [
            'type' => 'structure',
            'members' => [
                'domains' => [ 'type' => 'string', 'locationName' => 'domains', ],
                'interval' => [ 'type' => 'string', 'locationName' => 'interval', ],
                'startTime' => [ 'type' => 'string', 'locationName' => 'startTime', ],
                'endTime' => [ 'type' => 'string', 'locationName' => 'endTime', ],
            ],
        ],
        'BandwidthStatisticResult' => [
            'type' => 'structure',
            'members' => [
                'startTime' => [ 'type' => 'string', 'locationName' => 'startTime', ],
                'endTime' => [ 'type' => 'string', 'locationName' => 'endTime', ],
                'data' =>  [ 'shape' => 'BandwidthStatisticResultData', ],
            ],
        ],
        'DescribeLivePublishStreamNumRequestShape' => [
            'type' => 'structure',
            'members' => [
                'domainName' => [ 'type' => 'string', 'locationName' => 'domainName', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
                'protocolType' => [ 'type' => 'string', 'locationName' => 'protocolType', ],
                'ispName' => [ 'type' => 'string', 'locationName' => 'ispName', ],
                'locationName' => [ 'type' => 'string', 'locationName' => 'locationName', ],
                'period' => [ 'type' => 'string', 'locationName' => 'period', ],
                'startTime' => [ 'type' => 'string', 'locationName' => 'startTime', ],
                'endTime' => [ 'type' => 'string', 'locationName' => 'endTime', ],
            ],
        ],
        'PublishStreamInfoResult' => [
            'type' => 'structure',
            'members' => [
                'startTime' => [ 'type' => 'string', 'locationName' => 'startTime', ],
                'endTime' => [ 'type' => 'string', 'locationName' => 'endTime', ],
                'data' =>  [ 'shape' => 'PublishStreamInfoData', ],
            ],
        ],
        'DescribeDomainOnlineStreamResultShape' => [
            'type' => 'structure',
            'members' => [
                'streamList' => [ 'type' => 'list', 'member' => [ 'shape' => 'PublishOnlineStreamResultData', ], ],
                'total' => [ 'type' => 'integer', 'locationName' => 'total', ],
            ],
        ],
        'DescribeLivePublishStreamNumResultShape' => [
            'type' => 'structure',
            'members' => [
                'dataList' => [ 'type' => 'list', 'member' => [ 'shape' => 'LiveStreamUserNumResult', ], ],
            ],
        ],
        'LiveStreamPlayerRankingResult' => [
            'type' => 'structure',
            'members' => [
                'startTime' => [ 'type' => 'string', 'locationName' => 'startTime', ],
                'endTime' => [ 'type' => 'string', 'locationName' => 'endTime', ],
                'ranking' => [ 'type' => 'long', 'locationName' => 'ranking', ],
                'streamName' => [ 'type' => 'string', 'locationName' => 'streamName', ],
                'playerCount' => [ 'type' => 'long', 'locationName' => 'playerCount', ],
            ],
        ],
        'DescribeLiveStreamHistoryUserNumResultShape' => [
            'type' => 'structure',
            'members' => [
                'dataList' => [ 'type' => 'list', 'member' => [ 'shape' => 'LiveStreamUserNumResult', ], ],
            ],
        ],
        'DescribeDomainsLogResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeDomainsLogResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeLiveTranscodeStreamListRequestShape' => [
            'type' => 'structure',
            'members' => [
                'domainName' => [ 'type' => 'string', 'locationName' => 'domainName', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
                'streamName' => [ 'type' => 'string', 'locationName' => 'streamName', ],
            ],
        ],
        'DescribeLiveTranscodeStreamPlayerUserNumResultShape' => [
            'type' => 'structure',
            'members' => [
                'dataList' => [ 'type' => 'list', 'member' => [ 'shape' => 'LiveStreamUserNumResult', ], ],
            ],
        ],
        'DescribeLiveStreamPlayerRankingDataResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeLiveStreamPlayerRankingDataResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'LiveStreamUserNumResult' => [
            'type' => 'structure',
            'members' => [
                'startTime' => [ 'type' => 'string', 'locationName' => 'startTime', ],
                'endTime' => [ 'type' => 'string', 'locationName' => 'endTime', ],
                'data' =>  [ 'shape' => 'LiveStreamUserNumResultData', ],
            ],
        ],
        'DescribeLiveStreamHistoryUserNumResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeLiveStreamHistoryUserNumResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeLiveTranscodeStreamNumResultShape' => [
            'type' => 'structure',
            'members' => [
                'datetime' => [ 'type' => 'string', 'locationName' => 'datetime', ],
                'streamCount' => [ 'type' => 'integer', 'locationName' => 'streamCount', ],
            ],
        ],
        'DescribeLiveTranscodeStreamListResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeLiveTranscodeStreamListResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeLiveStreamPlayerRankingDataResultShape' => [
            'type' => 'structure',
            'members' => [
                'dataList' => [ 'type' => 'list', 'member' => [ 'shape' => 'LiveStreamPlayerRankingResult', ], ],
            ],
        ],
        'DescribeLiveTranscodeStreamBandwidthRequestShape' => [
            'type' => 'structure',
            'members' => [
                'domainName' => [ 'type' => 'string', 'locationName' => 'domainName', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
                'ispName' => [ 'type' => 'string', 'locationName' => 'ispName', ],
                'locationName' => [ 'type' => 'string', 'locationName' => 'locationName', ],
                'protocolType' => [ 'type' => 'string', 'locationName' => 'protocolType', ],
                'period' => [ 'type' => 'string', 'locationName' => 'period', ],
                'startTime' => [ 'type' => 'string', 'locationName' => 'startTime', ],
                'endTime' => [ 'type' => 'string', 'locationName' => 'endTime', ],
            ],
        ],
        'DescribeLiveTranscodeStreamNumRequestShape' => [
            'type' => 'structure',
            'members' => [
                'domainName' => [ 'type' => 'string', 'locationName' => 'domainName', ],
            ],
        ],
        'DescribeLiveTranscodeStreamBandwidthResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeLiveTranscodeStreamBandwidthResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeLiveTranscodeStreamBandwidthResultShape' => [
            'type' => 'structure',
            'members' => [
                'dataList' => [ 'type' => 'list', 'member' => [ 'shape' => 'BandwidthStatisticResult', ], ],
            ],
        ],
        'DescribePublishStreamInfoDataResultShape' => [
            'type' => 'structure',
            'members' => [
                'dataList' => [ 'type' => 'list', 'member' => [ 'shape' => 'PublishStreamInfoResult', ], ],
            ],
        ],
        'LiveTranscodeStreamResult' => [
            'type' => 'structure',
            'members' => [
                'streamName' => [ 'type' => 'string', 'locationName' => 'streamName', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
            ],
        ],
        'DescribeLivePublishStreamNumResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeLivePublishStreamNumResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeLiveTranscodeStreamNumResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeLiveTranscodeStreamNumResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeUrlRankingResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeUrlRankingResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'RankingUrlResult' => [
            'type' => 'structure',
            'members' => [
                'rankingList' => [ 'type' => 'list', 'member' => [ 'shape' => 'RankingUrlResultData', ], ],
            ],
        ],
        'DescribeLiveStreamHistoryUserNumRequestShape' => [
            'type' => 'structure',
            'members' => [
                'domainName' => [ 'type' => 'string', 'locationName' => 'domainName', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
                'streamName' => [ 'type' => 'string', 'locationName' => 'streamName', ],
                'ispName' => [ 'type' => 'string', 'locationName' => 'ispName', ],
                'locationName' => [ 'type' => 'string', 'locationName' => 'locationName', ],
                'protocolType' => [ 'type' => 'string', 'locationName' => 'protocolType', ],
                'period' => [ 'type' => 'string', 'locationName' => 'period', ],
                'startTime' => [ 'type' => 'string', 'locationName' => 'startTime', ],
                'endTime' => [ 'type' => 'string', 'locationName' => 'endTime', ],
            ],
        ],
        'DescribeDomainOnlineStreamRequestShape' => [
            'type' => 'structure',
            'members' => [
                'domainName' => [ 'type' => 'string', 'locationName' => 'domainName', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
                'streamName' => [ 'type' => 'string', 'locationName' => 'streamName', ],
                'pageNum' => [ 'type' => 'integer', 'locationName' => 'pageNum', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'startTime' => [ 'type' => 'string', 'locationName' => 'startTime', ],
                'endTime' => [ 'type' => 'string', 'locationName' => 'endTime', ],
            ],
        ],
        'DescribeLiveTranscodeStreamListResultShape' => [
            'type' => 'structure',
            'members' => [
                'dataList' => [ 'type' => 'list', 'member' => [ 'shape' => 'LiveTranscodeStreamResult', ], ],
            ],
        ],
        'DescribeLivePornDataRequestShape' => [
            'type' => 'structure',
            'members' => [
                'publishDomain' => [ 'type' => 'string', 'locationName' => 'publishDomain', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
                'streamName' => [ 'type' => 'string', 'locationName' => 'streamName', ],
                'startTime' => [ 'type' => 'string', 'locationName' => 'startTime', ],
                'endTime' => [ 'type' => 'string', 'locationName' => 'endTime', ],
            ],
        ],
        'PornCountStatisticResult' => [
            'type' => 'structure',
            'members' => [
                'startTime' => [ 'type' => 'string', 'locationName' => 'startTime', ],
                'endTime' => [ 'type' => 'string', 'locationName' => 'endTime', ],
                'data' =>  [ 'shape' => 'PornCountStatisticData', ],
            ],
        ],
        'DescribeLiveTranscodingDurationDataRequestShape' => [
            'type' => 'structure',
            'members' => [
                'grade' => [ 'type' => 'string', 'locationName' => 'grade', ],
                'period' => [ 'type' => 'string', 'locationName' => 'period', ],
                'startTime' => [ 'type' => 'string', 'locationName' => 'startTime', ],
                'endTime' => [ 'type' => 'string', 'locationName' => 'endTime', ],
            ],
        ],
        'DescribeLiveStreamPublishTrafficDataRequestShape' => [
            'type' => 'structure',
            'members' => [
                'domainName' => [ 'type' => 'string', 'locationName' => 'domainName', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
                'streamName' => [ 'type' => 'string', 'locationName' => 'streamName', ],
                'ispName' => [ 'type' => 'string', 'locationName' => 'ispName', ],
                'locationName' => [ 'type' => 'string', 'locationName' => 'locationName', ],
                'protocolType' => [ 'type' => 'string', 'locationName' => 'protocolType', ],
                'period' => [ 'type' => 'string', 'locationName' => 'period', ],
                'startTime' => [ 'type' => 'string', 'locationName' => 'startTime', ],
                'endTime' => [ 'type' => 'string', 'locationName' => 'endTime', ],
            ],
        ],
        'DescribeLiveStreamTrafficDataResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeLiveStreamTrafficDataResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeLiveStreamPublishBandwidthDataResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeLiveStreamPublishBandwidthDataResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeLiveSnapshotDataRequestShape' => [
            'type' => 'structure',
            'members' => [
                'publishDomain' => [ 'type' => 'string', 'locationName' => 'publishDomain', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
                'streamName' => [ 'type' => 'string', 'locationName' => 'streamName', ],
                'startTime' => [ 'type' => 'string', 'locationName' => 'startTime', ],
                'endTime' => [ 'type' => 'string', 'locationName' => 'endTime', ],
            ],
        ],
        'DescribeLiveStreamBandwidthDataResultShape' => [
            'type' => 'structure',
            'members' => [
                'dataList' => [ 'type' => 'list', 'member' => [ 'shape' => 'BandwidthStatisticResult', ], ],
            ],
        ],
        'PlayDataStatisticResult' => [
            'type' => 'structure',
            'members' => [
                'startTime' => [ 'type' => 'string', 'locationName' => 'startTime', ],
                'endTime' => [ 'type' => 'string', 'locationName' => 'endTime', ],
                'data' =>  [ 'shape' => 'PlayDataStatisticResultData', ],
            ],
        ],
        'DescribeLiveSnapshotDataResultShape' => [
            'type' => 'structure',
            'members' => [
                'snapshotData' => [ 'type' => 'list', 'member' => [ 'shape' => 'SnapshotCountStatisticResult', ], ],
            ],
        ],
        'DescribeLiveSnapshotDataResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeLiveSnapshotDataResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'FileStorageStatisticResult' => [
            'type' => 'structure',
            'members' => [
                'startTime' => [ 'type' => 'string', 'locationName' => 'startTime', ],
                'endTime' => [ 'type' => 'string', 'locationName' => 'endTime', ],
                'data' =>  [ 'shape' => 'FileStorageStatisticData', ],
            ],
        ],
        'DescribeLiveTranscodingDurationDataResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeLiveTranscodingDurationDataResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeLiveStreamPublishBandwidthDataResultShape' => [
            'type' => 'structure',
            'members' => [
                'dataList' => [ 'type' => 'list', 'member' => [ 'shape' => 'BandwidthStatisticResult', ], ],
            ],
        ],
        'DescribeLivePornDataResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeLivePornDataResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeLiveStreamPublishTrafficDataResultShape' => [
            'type' => 'structure',
            'members' => [
                'dataList' => [ 'type' => 'list', 'member' => [ 'shape' => 'TrafficStatisticResult', ], ],
            ],
        ],
        'DescribeLiveFileStorageDataResultShape' => [
            'type' => 'structure',
            'members' => [
                'dataList' => [ 'type' => 'list', 'member' => [ 'shape' => 'FileStorageStatisticResult', ], ],
            ],
        ],
        'DescribeLiveStreamPublishTrafficDataResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeLiveStreamPublishTrafficDataResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeLiveFileStorageDataResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeLiveFileStorageDataResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeLiveTranscodingDurationDataResultShape' => [
            'type' => 'structure',
            'members' => [
                'dataList' => [ 'type' => 'list', 'member' => [ 'shape' => 'TranscodeDurationStatisticResult', ], ],
            ],
        ],
        'DescribeLivePornDataResultShape' => [
            'type' => 'structure',
            'members' => [
                'pornData' => [ 'type' => 'list', 'member' => [ 'shape' => 'PornCountStatisticResult', ], ],
            ],
        ],
        'TranscodeDurationStatisticResult' => [
            'type' => 'structure',
            'members' => [
                'startTime' => [ 'type' => 'string', 'locationName' => 'startTime', ],
                'endTime' => [ 'type' => 'string', 'locationName' => 'endTime', ],
                'data' =>  [ 'shape' => 'TranscodeDurationStatisticData', ],
            ],
        ],
        'DescribeLiveStreamPublishBandwidthDataRequestShape' => [
            'type' => 'structure',
            'members' => [
                'domainName' => [ 'type' => 'string', 'locationName' => 'domainName', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
                'streamName' => [ 'type' => 'string', 'locationName' => 'streamName', ],
                'ispName' => [ 'type' => 'string', 'locationName' => 'ispName', ],
                'locationName' => [ 'type' => 'string', 'locationName' => 'locationName', ],
                'protocolType' => [ 'type' => 'string', 'locationName' => 'protocolType', ],
                'period' => [ 'type' => 'string', 'locationName' => 'period', ],
                'startTime' => [ 'type' => 'string', 'locationName' => 'startTime', ],
                'endTime' => [ 'type' => 'string', 'locationName' => 'endTime', ],
            ],
        ],
        'DescribeLiveStreamTrafficDataRequestShape' => [
            'type' => 'structure',
            'members' => [
                'domainName' => [ 'type' => 'string', 'locationName' => 'domainName', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
                'streamName' => [ 'type' => 'string', 'locationName' => 'streamName', ],
                'ispName' => [ 'type' => 'string', 'locationName' => 'ispName', ],
                'locationName' => [ 'type' => 'string', 'locationName' => 'locationName', ],
                'protocolType' => [ 'type' => 'string', 'locationName' => 'protocolType', ],
                'period' => [ 'type' => 'string', 'locationName' => 'period', ],
                'startTime' => [ 'type' => 'string', 'locationName' => 'startTime', ],
                'endTime' => [ 'type' => 'string', 'locationName' => 'endTime', ],
            ],
        ],
        'DescribeLiveFileStorageDataRequestShape' => [
            'type' => 'structure',
            'members' => [
                'period' => [ 'type' => 'string', 'locationName' => 'period', ],
                'startTime' => [ 'type' => 'string', 'locationName' => 'startTime', ],
                'endTime' => [ 'type' => 'string', 'locationName' => 'endTime', ],
            ],
        ],
        'DescribeLiveStreamBandwidthDataResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeLiveStreamBandwidthDataResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'SnapshotCountStatisticResult' => [
            'type' => 'structure',
            'members' => [
                'startTime' => [ 'type' => 'string', 'locationName' => 'startTime', ],
                'endTime' => [ 'type' => 'string', 'locationName' => 'endTime', ],
                'data' =>  [ 'shape' => 'SnapshotCountStatisticData', ],
            ],
        ],
        'TrafficStatisticResult' => [
            'type' => 'structure',
            'members' => [
                'startTime' => [ 'type' => 'string', 'locationName' => 'startTime', ],
                'endTime' => [ 'type' => 'string', 'locationName' => 'endTime', ],
                'data' =>  [ 'shape' => 'TrafficStatisticResultData', ],
            ],
        ],
        'DescribeLiveStreamBandwidthDataRequestShape' => [
            'type' => 'structure',
            'members' => [
                'domainName' => [ 'type' => 'string', 'locationName' => 'domainName', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
                'streamName' => [ 'type' => 'string', 'locationName' => 'streamName', ],
                'ispName' => [ 'type' => 'string', 'locationName' => 'ispName', ],
                'locationName' => [ 'type' => 'string', 'locationName' => 'locationName', ],
                'protocolType' => [ 'type' => 'string', 'locationName' => 'protocolType', ],
                'period' => [ 'type' => 'string', 'locationName' => 'period', ],
                'startTime' => [ 'type' => 'string', 'locationName' => 'startTime', ],
                'endTime' => [ 'type' => 'string', 'locationName' => 'endTime', ],
            ],
        ],
        'DescribeLiveStreamTrafficDataResultShape' => [
            'type' => 'structure',
            'members' => [
                'dataList' => [ 'type' => 'list', 'member' => [ 'shape' => 'TrafficStatisticResult', ], ],
            ],
        ],
        'DeleteCustomLiveStreamSnapshotTemplateResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'AddCustomLiveStreamSnapshotTemplateRequestShape' => [
            'type' => 'structure',
            'members' => [
                'format' => [ 'type' => 'string', 'locationName' => 'format', ],
                'width' => [ 'type' => 'integer', 'locationName' => 'width', ],
                'height' => [ 'type' => 'integer', 'locationName' => 'height', ],
                'fillType' => [ 'type' => 'integer', 'locationName' => 'fillType', ],
                'snapshotInterval' => [ 'type' => 'integer', 'locationName' => 'snapshotInterval', ],
                'saveMode' => [ 'type' => 'integer', 'locationName' => 'saveMode', ],
                'saveBucket' => [ 'type' => 'string', 'locationName' => 'saveBucket', ],
                'saveEndpoint' => [ 'type' => 'string', 'locationName' => 'saveEndpoint', ],
                'template' => [ 'type' => 'string', 'locationName' => 'template', ],
            ],
        ],
        'AddLiveStreamAppSnapshotResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DescribeCustomLiveStreamSnapshotConfigResultShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
                'snapshotConfigs' => [ 'type' => 'list', 'member' => [ 'shape' => 'SnapshotConfig', ], ],
            ],
        ],
        'DeleteLiveStreamAppSnapshotResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeCustomLiveStreamSnapshotTemplatesResultShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
                'snapshotTemplates' => [ 'type' => 'list', 'member' => [ 'shape' => 'SnapshotTemplate', ], ],
            ],
        ],
        'AddLiveStreamDomainSnapshotResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DescribeCustomLiveStreamSnapshotConfigResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeCustomLiveStreamSnapshotConfigResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'AddLiveStreamDomainSnapshotResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeSnapshotBindingResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeSnapshotBindingResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DeleteLiveStreamDomainSnapshotResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DeleteLiveStreamSnapshotNotifyConfigResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'AddCustomLiveStreamSnapshotTemplateResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'SetLiveStreamSnapshotNotifyConfigResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DeleteLiveStreamDomainSnapshotResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeLiveStreamSnapshotNotifyConfigResultShape' => [
            'type' => 'structure',
            'members' => [
                'publishDomain' => [ 'type' => 'string', 'locationName' => 'publishDomain', ],
                'notifyUrl' => [ 'type' => 'string', 'locationName' => 'notifyUrl', ],
            ],
        ],
        'DescribeLiveStreamSnapshotNotifyConfigRequestShape' => [
            'type' => 'structure',
            'members' => [
                'publishDomain' => [ 'type' => 'string', 'locationName' => 'publishDomain', ],
            ],
        ],
        'AddLiveStreamAppSnapshotRequestShape' => [
            'type' => 'structure',
            'members' => [
                'publishDomain' => [ 'type' => 'string', 'locationName' => 'publishDomain', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
                'template' => [ 'type' => 'string', 'locationName' => 'template', ],
            ],
        ],
        'AddLiveStreamDomainSnapshotRequestShape' => [
            'type' => 'structure',
            'members' => [
                'publishDomain' => [ 'type' => 'string', 'locationName' => 'publishDomain', ],
                'template' => [ 'type' => 'string', 'locationName' => 'template', ],
            ],
        ],
        'DeleteLiveStreamAppSnapshotRequestShape' => [
            'type' => 'structure',
            'members' => [
                'publishDomain' => [ 'type' => 'string', 'locationName' => 'publishDomain', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
                'template' => [ 'type' => 'string', 'locationName' => 'template', ],
            ],
        ],
        'DeleteLiveStreamSnapshotNotifyConfigResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeSnapshotBindingRequestShape' => [
            'type' => 'structure',
            'members' => [
                'template' => [ 'type' => 'string', 'locationName' => 'template', ],
            ],
        ],
        'SetLiveStreamSnapshotNotifyConfigRequestShape' => [
            'type' => 'structure',
            'members' => [
                'publishDomain' => [ 'type' => 'string', 'locationName' => 'publishDomain', ],
                'notifyUrl' => [ 'type' => 'string', 'locationName' => 'notifyUrl', ],
            ],
        ],
        'DeleteLiveStreamDomainSnapshotRequestShape' => [
            'type' => 'structure',
            'members' => [
                'publishDomain' => [ 'type' => 'string', 'locationName' => 'publishDomain', ],
                'template' => [ 'type' => 'string', 'locationName' => 'template', ],
            ],
        ],
        'DeleteLiveStreamSnapshotNotifyConfigRequestShape' => [
            'type' => 'structure',
            'members' => [
                'publishDomain' => [ 'type' => 'string', 'locationName' => 'publishDomain', ],
            ],
        ],
        'AddCustomLiveStreamSnapshotTemplateResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DescribeCustomLiveStreamSnapshotTemplatesRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNum' => [ 'type' => 'integer', 'locationName' => 'pageNum', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'filters' => [ 'type' => 'list', 'member' => [ 'shape' => 'Filter', ], ],
            ],
        ],
        'DeleteLiveStreamAppSnapshotResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DescribeCustomLiveStreamSnapshotTemplatesResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeCustomLiveStreamSnapshotTemplatesResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeSnapshotBindingResultShape' => [
            'type' => 'structure',
            'members' => [
                'bindingList' => [ 'type' => 'list', 'member' => [ 'shape' => 'TemplateBinding', ], ],
            ],
        ],
        'DescribeCustomLiveStreamSnapshotConfigRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNum' => [ 'type' => 'integer', 'locationName' => 'pageNum', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'filters' => [ 'type' => 'list', 'member' => [ 'shape' => 'Filter', ], ],
            ],
        ],
        'DeleteCustomLiveStreamSnapshotTemplateResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeLiveStreamSnapshotNotifyConfigResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeLiveStreamSnapshotNotifyConfigResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'SetLiveStreamSnapshotNotifyConfigResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DeleteCustomLiveStreamSnapshotTemplateRequestShape' => [
            'type' => 'structure',
            'members' => [
                'template' => [ 'type' => 'string', 'locationName' => 'template', ],
            ],
        ],
        'AddLiveStreamAppSnapshotResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ForbidLiveStreamRequestShape' => [
            'type' => 'structure',
            'members' => [
                'publishDomain' => [ 'type' => 'string', 'locationName' => 'publishDomain', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
                'streamName' => [ 'type' => 'string', 'locationName' => 'streamName', ],
                'forbidTime' => [ 'type' => 'long', 'locationName' => 'forbidTime', ],
            ],
        ],
        'DescribeLiveStreamInfoRequestShape' => [
            'type' => 'structure',
            'members' => [
                'publishDomain' => [ 'type' => 'string', 'locationName' => 'publishDomain', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
                'streamName' => [ 'type' => 'string', 'locationName' => 'streamName', ],
            ],
        ],
        'DeleteLiveStreamNotifyConfigRequestShape' => [
            'type' => 'structure',
            'members' => [
                'publishDomain' => [ 'type' => 'string', 'locationName' => 'publishDomain', ],
            ],
        ],
        'DescribeLiveStreamOnlineListResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeLiveStreamOnlineListResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ResumeLiveStreamResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DescribeLiveStreamNotifyConfigRequestShape' => [
            'type' => 'structure',
            'members' => [
                'publishDomain' => [ 'type' => 'string', 'locationName' => 'publishDomain', ],
            ],
        ],
        'DescribeLiveStreamNotifyConfigResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeLiveStreamNotifyConfigResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'InterruptLiveStreamResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'SetLiveStreamNotifyConfigRequestShape' => [
            'type' => 'structure',
            'members' => [
                'publishDomain' => [ 'type' => 'string', 'locationName' => 'publishDomain', ],
                'notifyUrl' => [ 'type' => 'string', 'locationName' => 'notifyUrl', ],
            ],
        ],
        'DeleteLiveStreamNotifyConfigResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ForbidLiveStreamResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'InterruptLiveStreamResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DeleteLiveStreamNotifyConfigResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'SetLiveStreamNotifyConfigResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'InterruptLiveStreamRequestShape' => [
            'type' => 'structure',
            'members' => [
                'publishDomain' => [ 'type' => 'string', 'locationName' => 'publishDomain', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
                'streamName' => [ 'type' => 'string', 'locationName' => 'streamName', ],
            ],
        ],
        'ResumeLiveStreamResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeLiveStreamOnlineListRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNum' => [ 'type' => 'integer', 'locationName' => 'pageNum', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
                'publishDomain' => [ 'type' => 'string', 'locationName' => 'publishDomain', ],
            ],
        ],
        'ForbidLiveStreamResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeLiveStreamPublishListRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNum' => [ 'type' => 'integer', 'locationName' => 'pageNum', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
                'streamName' => [ 'type' => 'string', 'locationName' => 'streamName', ],
                'startTime' => [ 'type' => 'string', 'locationName' => 'startTime', ],
                'endTime' => [ 'type' => 'string', 'locationName' => 'endTime', ],
                'publishDomain' => [ 'type' => 'string', 'locationName' => 'publishDomain', ],
            ],
        ],
        'DescribeLiveStreamPublishListResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeLiveStreamPublishListResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeLiveStreamInfoResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeLiveStreamInfoResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'SetLiveStreamNotifyConfigResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ResumeLiveStreamRequestShape' => [
            'type' => 'structure',
            'members' => [
                'publishDomain' => [ 'type' => 'string', 'locationName' => 'publishDomain', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
                'streamName' => [ 'type' => 'string', 'locationName' => 'streamName', ],
            ],
        ],
        'DescribeLiveStreamOnlineListResultShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
                'onlineStreamInfos' => [ 'type' => 'list', 'member' => [ 'shape' => 'OnlineStreamInfo', ], ],
            ],
        ],
        'DescribeLiveStreamPublishListResultShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
                'liveStreamPublishInfos' => [ 'type' => 'list', 'member' => [ 'shape' => 'LiveStreamPublishInfo', ], ],
            ],
        ],
        'DescribeLiveStreamInfoResultShape' => [
            'type' => 'structure',
            'members' => [
                'publishDomain' => [ 'type' => 'string', 'locationName' => 'publishDomain', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
                'streamName' => [ 'type' => 'string', 'locationName' => 'streamName', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
            ],
        ],
        'DescribeLiveStreamNotifyConfigResultShape' => [
            'type' => 'structure',
            'members' => [
                'publishDomain' => [ 'type' => 'string', 'locationName' => 'publishDomain', ],
                'notifyUrl' => [ 'type' => 'string', 'locationName' => 'notifyUrl', ],
            ],
        ],
        'OpenLiveRestartResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DescribeLiveRestartConfigsResultShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
                'restartConfigs' => [ 'type' => 'list', 'member' => [ 'shape' => 'RestartConfig', ], ],
            ],
        ],
        'OpenLiveRestartRequestShape' => [
            'type' => 'structure',
            'members' => [
                'restartDomain' => [ 'type' => 'string', 'locationName' => 'restartDomain', ],
            ],
        ],
        'DescribeLiveRestartConfigsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNum' => [ 'type' => 'integer', 'locationName' => 'pageNum', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'restartDomain' => [ 'type' => 'string', 'locationName' => 'restartDomain', ],
            ],
        ],
        'DescribeLiveRestartConfigsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeLiveRestartConfigsResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'CloseLiveRestartResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'OpenLiveRestartResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'CloseLiveRestartResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'CloseLiveRestartRequestShape' => [
            'type' => 'structure',
            'members' => [
                'restartDomain' => [ 'type' => 'string', 'locationName' => 'restartDomain', ],
            ],
        ],
        'OpenLiveTimeshiftRequestShape' => [
            'type' => 'structure',
            'members' => [
                'playDomain' => [ 'type' => 'string', 'locationName' => 'playDomain', ],
            ],
        ],
        'CloseLiveTimeshiftResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeLiveTimeshiftConfigsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeLiveTimeshiftConfigsResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'OpenLiveTimeshiftResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DescribeLiveTimeshiftConfigsResultShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
                'timeshiftConfigs' => [ 'type' => 'list', 'member' => [ 'shape' => 'TimeshiftConfig', ], ],
            ],
        ],
        'CloseLiveTimeshiftResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'OpenLiveTimeshiftResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'CloseLiveTimeshiftRequestShape' => [
            'type' => 'structure',
            'members' => [
                'playDomain' => [ 'type' => 'string', 'locationName' => 'playDomain', ],
            ],
        ],
        'DescribeLiveTimeshiftConfigsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'playDomain' => [ 'type' => 'string', 'locationName' => 'playDomain', ],
            ],
        ],
        'DescribeSystemLiveStreamTranscodeTemplatesRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNum' => [ 'type' => 'integer', 'locationName' => 'pageNum', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'filters' => [ 'type' => 'list', 'member' => [ 'shape' => 'Filter', ], ],
            ],
        ],
        'DeleteLiveStreamDomainTranscodeRequestShape' => [
            'type' => 'structure',
            'members' => [
                'publishDomain' => [ 'type' => 'string', 'locationName' => 'publishDomain', ],
                'template' => [ 'type' => 'string', 'locationName' => 'template', ],
            ],
        ],
        'AddLiveStreamAppTranscodeRequestShape' => [
            'type' => 'structure',
            'members' => [
                'publishDomain' => [ 'type' => 'string', 'locationName' => 'publishDomain', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
                'template' => [ 'type' => 'string', 'locationName' => 'template', ],
            ],
        ],
        'DeleteLiveStreamDomainTranscodeResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeTranscodeBindingResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeTranscodeBindingResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'AddLiveStreamAppTranscodeResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeCustomLiveStreamTranscodeTemplatesResultShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
                'transcodeTemplates' => [ 'type' => 'list', 'member' => [ 'shape' => 'TranscodeInfo', ], ],
            ],
        ],
        'AddLiveStreamDomainTranscodeResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'AddCustomLiveStreamTranscodeTemplateResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DescribeTranscodeBindingRequestShape' => [
            'type' => 'structure',
            'members' => [
                'template' => [ 'type' => 'string', 'locationName' => 'template', ],
            ],
        ],
        'DescribeCustomLiveStreamTranscodeTemplateResultShape' => [
            'type' => 'structure',
            'members' => [
                'videoCodec' => [ 'type' => 'string', 'locationName' => 'videoCodec', ],
                'videoCodeRate' => [ 'type' => 'integer', 'locationName' => 'videoCodeRate', ],
                'videoFrameRate' => [ 'type' => 'string', 'locationName' => 'videoFrameRate', ],
                'width' => [ 'type' => 'integer', 'locationName' => 'width', ],
                'height' => [ 'type' => 'integer', 'locationName' => 'height', ],
                'template' => [ 'type' => 'string', 'locationName' => 'template', ],
                'audioCodec' => [ 'type' => 'string', 'locationName' => 'audioCodec', ],
                'audioFormat' => [ 'type' => 'string', 'locationName' => 'audioFormat', ],
                'audioSampleRate' => [ 'type' => 'integer', 'locationName' => 'audioSampleRate', ],
                'audioChannel' => [ 'type' => 'integer', 'locationName' => 'audioChannel', ],
                'audioCodeRate' => [ 'type' => 'integer', 'locationName' => 'audioCodeRate', ],
                'jdchd' => [ 'type' => 'string', 'locationName' => 'jdchd', ],
                'audioComfort' => [ 'type' => 'string', 'locationName' => 'audioComfort', ],
            ],
        ],
        'DeleteCustomLiveStreamTranscodeTemplateRequestShape' => [
            'type' => 'structure',
            'members' => [
                'template' => [ 'type' => 'string', 'locationName' => 'template', ],
            ],
        ],
        'DescribeTranscodeBindingResultShape' => [
            'type' => 'structure',
            'members' => [
                'bindingList' => [ 'type' => 'list', 'member' => [ 'shape' => 'TemplateBinding', ], ],
            ],
        ],
        'DescribeCustomLiveStreamTranscodeTemplatesResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeCustomLiveStreamTranscodeTemplatesResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'AddCustomLiveStreamTranscodeTemplateResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'AddLiveStreamDomainTranscodeResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeLiveStreamTranscodeConfigRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNum' => [ 'type' => 'integer', 'locationName' => 'pageNum', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'filters' => [ 'type' => 'list', 'member' => [ 'shape' => 'Filter', ], ],
            ],
        ],
        'DescribeSystemLiveStreamTranscodeTemplatesResultShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
                'transcodeTemplates' => [ 'type' => 'list', 'member' => [ 'shape' => 'TranscodeInfo', ], ],
            ],
        ],
        'AddLiveStreamAppTranscodeResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DeleteLiveStreamAppTranscodeResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DeleteLiveStreamAppTranscodeRequestShape' => [
            'type' => 'structure',
            'members' => [
                'publishDomain' => [ 'type' => 'string', 'locationName' => 'publishDomain', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
                'template' => [ 'type' => 'string', 'locationName' => 'template', ],
            ],
        ],
        'AddLiveStreamDomainTranscodeRequestShape' => [
            'type' => 'structure',
            'members' => [
                'publishDomain' => [ 'type' => 'string', 'locationName' => 'publishDomain', ],
                'template' => [ 'type' => 'string', 'locationName' => 'template', ],
            ],
        ],
        'DescribeCustomLiveStreamTranscodeTemplateRequestShape' => [
            'type' => 'structure',
            'members' => [
                'template' => [ 'type' => 'string', 'locationName' => 'template', ],
            ],
        ],
        'DescribeCustomLiveStreamTranscodeTemplatesRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNum' => [ 'type' => 'integer', 'locationName' => 'pageNum', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'filters' => [ 'type' => 'list', 'member' => [ 'shape' => 'Filter', ], ],
            ],
        ],
        'DescribeSystemLiveStreamTranscodeTemplatesResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeSystemLiveStreamTranscodeTemplatesResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DeleteCustomLiveStreamTranscodeTemplateResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'AddCustomLiveStreamTranscodeTemplateRequestShape' => [
            'type' => 'structure',
            'members' => [
                'templateName' => [ 'type' => 'string', 'locationName' => 'templateName', ],
                'videoCodec' => [ 'type' => 'string', 'locationName' => 'videoCodec', ],
                'videoCodeRate' => [ 'type' => 'integer', 'locationName' => 'videoCodeRate', ],
                'videoFrameRate' => [ 'type' => 'string', 'locationName' => 'videoFrameRate', ],
                'width' => [ 'type' => 'integer', 'locationName' => 'width', ],
                'height' => [ 'type' => 'integer', 'locationName' => 'height', ],
                'template' => [ 'type' => 'string', 'locationName' => 'template', ],
                'audioCodec' => [ 'type' => 'string', 'locationName' => 'audioCodec', ],
                'audioFormat' => [ 'type' => 'string', 'locationName' => 'audioFormat', ],
                'audioSampleRate' => [ 'type' => 'integer', 'locationName' => 'audioSampleRate', ],
                'audioChannel' => [ 'type' => 'integer', 'locationName' => 'audioChannel', ],
                'audioCodeRate' => [ 'type' => 'integer', 'locationName' => 'audioCodeRate', ],
                'jdchd' => [ 'type' => 'string', 'locationName' => 'jdchd', ],
                'audioComfort' => [ 'type' => 'string', 'locationName' => 'audioComfort', ],
            ],
        ],
        'DeleteLiveStreamDomainTranscodeResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DescribeCustomLiveStreamTranscodeTemplateResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeCustomLiveStreamTranscodeTemplateResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeLiveStreamTranscodeConfigResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeLiveStreamTranscodeConfigResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DeleteLiveStreamAppTranscodeResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeLiveStreamTranscodeConfigResultShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
                'transcodeConfigs' => [ 'type' => 'list', 'member' => [ 'shape' => 'TemplateConfig', ], ],
            ],
        ],
        'DeleteCustomLiveStreamTranscodeTemplateResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DeleteLiveStreamAppWatermarkResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DeleteLiveStreamDomainWatermarkResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'AddCustomLiveStreamWatermarkTemplateResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'AddLiveStreamAppWatermarkResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'AddLiveStreamAppWatermarkRequestShape' => [
            'type' => 'structure',
            'members' => [
                'publishDomain' => [ 'type' => 'string', 'locationName' => 'publishDomain', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
                'template' => [ 'type' => 'string', 'locationName' => 'template', ],
            ],
        ],
        'AddLiveStreamDomainWatermarkResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DescribeCustomLiveStreamWatermarkConfigResultShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
                'watermarkConfigs' => [ 'type' => 'list', 'member' => [ 'shape' => 'LiveStreamRecordConfig', ], ],
            ],
        ],
        'AddLiveStreamDomainWatermarkRequestShape' => [
            'type' => 'structure',
            'members' => [
                'publishDomain' => [ 'type' => 'string', 'locationName' => 'publishDomain', ],
                'template' => [ 'type' => 'string', 'locationName' => 'template', ],
            ],
        ],
        'DeleteLiveStreamAppWatermarkRequestShape' => [
            'type' => 'structure',
            'members' => [
                'publishDomain' => [ 'type' => 'string', 'locationName' => 'publishDomain', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
                'template' => [ 'type' => 'string', 'locationName' => 'template', ],
            ],
        ],
        'DeleteLiveStreamDomainWatermarkRequestShape' => [
            'type' => 'structure',
            'members' => [
                'publishDomain' => [ 'type' => 'string', 'locationName' => 'publishDomain', ],
                'template' => [ 'type' => 'string', 'locationName' => 'template', ],
            ],
        ],
        'DeleteCustomLiveStreamWatermarkTemplateResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DescribeCustomLiveStreamWatermarkTemplatesResultShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
                'watermarkTemplates' => [ 'type' => 'list', 'member' => [ 'shape' => 'WatermarkTemplate', ], ],
            ],
        ],
        'DescribeCustomLiveStreamWatermarkConfigRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNum' => [ 'type' => 'integer', 'locationName' => 'pageNum', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'filters' => [ 'type' => 'list', 'member' => [ 'shape' => 'Filter', ], ],
            ],
        ],
        'DescribeWatermarkBindingResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeWatermarkBindingResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'AddLiveStreamAppWatermarkResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'AddLiveStreamDomainWatermarkResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DeleteCustomLiveStreamWatermarkTemplateRequestShape' => [
            'type' => 'structure',
            'members' => [
                'template' => [ 'type' => 'string', 'locationName' => 'template', ],
            ],
        ],
        'DeleteLiveStreamDomainWatermarkResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'AddCustomLiveStreamWatermarkTemplateResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DescribeCustomLiveStreamWatermarkTemplatesResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeCustomLiveStreamWatermarkTemplatesResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeWatermarkBindingResultShape' => [
            'type' => 'structure',
            'members' => [
                'bindingList' => [ 'type' => 'list', 'member' => [ 'shape' => 'TemplateBinding', ], ],
            ],
        ],
        'DescribeCustomLiveStreamWatermarkTemplatesRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNum' => [ 'type' => 'integer', 'locationName' => 'pageNum', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'filters' => [ 'type' => 'list', 'member' => [ 'shape' => 'Filter', ], ],
            ],
        ],
        'DescribeCustomLiveStreamWatermarkConfigResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeCustomLiveStreamWatermarkConfigResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DeleteLiveStreamAppWatermarkResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DescribeWatermarkBindingRequestShape' => [
            'type' => 'structure',
            'members' => [
                'template' => [ 'type' => 'string', 'locationName' => 'template', ],
            ],
        ],
        'AddCustomLiveStreamWatermarkTemplateRequestShape' => [
            'type' => 'structure',
            'members' => [
                'position' => [ 'type' => 'integer', 'locationName' => 'position', ],
                'offsetUnit' => [ 'type' => 'string', 'locationName' => 'offsetUnit', ],
                'offsetX' => [ 'type' => 'integer', 'locationName' => 'offsetX', ],
                'offsetY' => [ 'type' => 'integer', 'locationName' => 'offsetY', ],
                'sizeUnit' => [ 'type' => 'string', 'locationName' => 'sizeUnit', ],
                'width' => [ 'type' => 'integer', 'locationName' => 'width', ],
                'height' => [ 'type' => 'integer', 'locationName' => 'height', ],
                'template' => [ 'type' => 'string', 'locationName' => 'template', ],
                'uploadId' => [ 'type' => 'string', 'locationName' => 'uploadId', ],
                'url' => [ 'type' => 'string', 'locationName' => 'url', ],
            ],
        ],
        'DeleteCustomLiveStreamWatermarkTemplateResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
    ],
];
