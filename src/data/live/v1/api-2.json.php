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
        'DescribeLiveBillData' => [
            'name' => 'DescribeLiveBillData',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/liveBillDatas',
            ],
            'input' => [ 'shape' => 'DescribeLiveBillDataRequestShape', ],
            'output' => [ 'shape' => 'DescribeLiveBillDataResponseShape', ],
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
        'DescribeLiveRestartDomainCertificate' => [
            'name' => 'DescribeLiveRestartDomainCertificate',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/liveRestartDomainCertificate',
            ],
            'input' => [ 'shape' => 'DescribeLiveRestartDomainCertificateRequestShape', ],
            'output' => [ 'shape' => 'DescribeLiveRestartDomainCertificateResponseShape', ],
        ],
        'SetLiveRestartDomainCertificate' => [
            'name' => 'SetLiveRestartDomainCertificate',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/liveRestartDomainCertificate',
            ],
            'input' => [ 'shape' => 'SetLiveRestartDomainCertificateRequestShape', ],
            'output' => [ 'shape' => 'SetLiveRestartDomainCertificateResponseShape', ],
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
        'AddCustomLiveStreamQualityDetectionTemplate' => [
            'name' => 'AddCustomLiveStreamQualityDetectionTemplate',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/qualityDetectionCustoms:template',
            ],
            'input' => [ 'shape' => 'AddCustomLiveStreamQualityDetectionTemplateRequestShape', ],
            'output' => [ 'shape' => 'AddCustomLiveStreamQualityDetectionTemplateResponseShape', ],
        ],
        'DescribeCustomLiveStreamQualityDetectionTemplates' => [
            'name' => 'DescribeCustomLiveStreamQualityDetectionTemplates',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/qualityDetectionCustoms',
            ],
            'input' => [ 'shape' => 'DescribeCustomLiveStreamQualityDetectionTemplatesRequestShape', ],
            'output' => [ 'shape' => 'DescribeCustomLiveStreamQualityDetectionTemplatesResponseShape', ],
        ],
        'AddLiveStreamAppQualityDetection' => [
            'name' => 'AddLiveStreamAppQualityDetection',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/qualityDetectionApps:template',
            ],
            'input' => [ 'shape' => 'AddLiveStreamAppQualityDetectionRequestShape', ],
            'output' => [ 'shape' => 'AddLiveStreamAppQualityDetectionResponseShape', ],
        ],
        'AddLiveStreamDomainQualityDetection' => [
            'name' => 'AddLiveStreamDomainQualityDetection',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/qualityDetectionDomains:template',
            ],
            'input' => [ 'shape' => 'AddLiveStreamDomainQualityDetectionRequestShape', ],
            'output' => [ 'shape' => 'AddLiveStreamDomainQualityDetectionResponseShape', ],
        ],
        'SetLiveStreamQualityDetectionNotifyConfig' => [
            'name' => 'SetLiveStreamQualityDetectionNotifyConfig',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/qualityDetectionNotifys:config',
            ],
            'input' => [ 'shape' => 'SetLiveStreamQualityDetectionNotifyConfigRequestShape', ],
            'output' => [ 'shape' => 'SetLiveStreamQualityDetectionNotifyConfigResponseShape', ],
        ],
        'DeleteCustomLiveStreamQualityDetectionTemplate' => [
            'name' => 'DeleteCustomLiveStreamQualityDetectionTemplate',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/qualityDetectionCustoms/{template}',
            ],
            'input' => [ 'shape' => 'DeleteCustomLiveStreamQualityDetectionTemplateRequestShape', ],
            'output' => [ 'shape' => 'DeleteCustomLiveStreamQualityDetectionTemplateResponseShape', ],
        ],
        'DeleteLiveStreamAppQualityDetection' => [
            'name' => 'DeleteLiveStreamAppQualityDetection',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/qualityDetectionApps/{publishDomain}/appNames/{appName}/templates/{template}',
            ],
            'input' => [ 'shape' => 'DeleteLiveStreamAppQualityDetectionRequestShape', ],
            'output' => [ 'shape' => 'DeleteLiveStreamAppQualityDetectionResponseShape', ],
        ],
        'DeleteLiveStreamDomainQualityDetection' => [
            'name' => 'DeleteLiveStreamDomainQualityDetection',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/qualityDetectionDomains/{publishDomain}/templates/{template}',
            ],
            'input' => [ 'shape' => 'DeleteLiveStreamDomainQualityDetectionRequestShape', ],
            'output' => [ 'shape' => 'DeleteLiveStreamDomainQualityDetectionResponseShape', ],
        ],
        'DescribeLiveStreamQualityDetectionNotifyConfig' => [
            'name' => 'DescribeLiveStreamQualityDetectionNotifyConfig',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/qualityDetectionNotifys/{publishDomain}:config',
            ],
            'input' => [ 'shape' => 'DescribeLiveStreamQualityDetectionNotifyConfigRequestShape', ],
            'output' => [ 'shape' => 'DescribeLiveStreamQualityDetectionNotifyConfigResponseShape', ],
        ],
        'DeleteLiveStreamQualityDetectionNotifyConfig' => [
            'name' => 'DeleteLiveStreamQualityDetectionNotifyConfig',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/qualityDetectionNotifys/{publishDomain}:config',
            ],
            'input' => [ 'shape' => 'DeleteLiveStreamQualityDetectionNotifyConfigRequestShape', ],
            'output' => [ 'shape' => 'DeleteLiveStreamQualityDetectionNotifyConfigResponseShape', ],
        ],
        'DescribeQualityDetectionBinding' => [
            'name' => 'DescribeQualityDetectionBinding',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/qualityDetectionTemplates/{template}:binding',
            ],
            'input' => [ 'shape' => 'DescribeQualityDetectionBindingRequestShape', ],
            'output' => [ 'shape' => 'DescribeQualityDetectionBindingResponseShape', ],
        ],
        'DeleteLiveRecordings' => [
            'name' => 'DeleteLiveRecordings',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/recordings:delete',
            ],
            'input' => [ 'shape' => 'DeleteLiveRecordingsRequestShape', ],
            'output' => [ 'shape' => 'DeleteLiveRecordingsResponseShape', ],
        ],
        'OpenLiveP2p' => [
            'name' => 'OpenLiveP2p',
            'http' => [
                'method' => 'PUT',
                'requestUri' => '/v1/liveP2p:open',
            ],
            'input' => [ 'shape' => 'OpenLiveP2pRequestShape', ],
            'output' => [ 'shape' => 'OpenLiveP2pResponseShape', ],
        ],
        'CloseLiveP2p' => [
            'name' => 'CloseLiveP2p',
            'http' => [
                'method' => 'PUT',
                'requestUri' => '/v1/liveP2p:close',
            ],
            'input' => [ 'shape' => 'CloseLiveP2pRequestShape', ],
            'output' => [ 'shape' => 'CloseLiveP2pResponseShape', ],
        ],
        'DescribeLiveP2pConfigs' => [
            'name' => 'DescribeLiveP2pConfigs',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/liveP2p:configs',
            ],
            'input' => [ 'shape' => 'DescribeLiveP2pConfigsRequestShape', ],
            'output' => [ 'shape' => 'DescribeLiveP2pConfigsResponseShape', ],
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
        'DescribeLivePublishStatisticGroupByStream' => [
            'name' => 'DescribeLivePublishStatisticGroupByStream',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/describeLivePublishStatisticGroupByStream',
            ],
            'input' => [ 'shape' => 'DescribeLivePublishStatisticGroupByStreamRequestShape', ],
            'output' => [ 'shape' => 'DescribeLivePublishStatisticGroupByStreamResponseShape', ],
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
        'DescribeLiveStreamPublishInfoByPage' => [
            'name' => 'DescribeLiveStreamPublishInfoByPage',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/describeLiveStreamPublishInfoByPage',
            ],
            'input' => [ 'shape' => 'DescribeLiveStreamPublishInfoByPageRequestShape', ],
            'output' => [ 'shape' => 'DescribeLiveStreamPublishInfoByPageResponseShape', ],
        ],
        'DescribeLiveStreamPlayInfoByPage' => [
            'name' => 'DescribeLiveStreamPlayInfoByPage',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/describeLiveStreamPlayInfoByPage',
            ],
            'input' => [ 'shape' => 'DescribeLiveStreamPlayInfoByPageRequestShape', ],
            'output' => [ 'shape' => 'DescribeLiveStreamPlayInfoByPageResponseShape', ],
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
        'AddLiveStreamDomainTranslate' => [
            'name' => 'AddLiveStreamDomainTranslate',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/translateDomains:config',
            ],
            'input' => [ 'shape' => 'AddLiveStreamDomainTranslateRequestShape', ],
            'output' => [ 'shape' => 'AddLiveStreamDomainTranslateResponseShape', ],
        ],
        'AddLiveStreamAppTranslate' => [
            'name' => 'AddLiveStreamAppTranslate',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/translateApps:config',
            ],
            'input' => [ 'shape' => 'AddLiveStreamAppTranslateRequestShape', ],
            'output' => [ 'shape' => 'AddLiveStreamAppTranslateResponseShape', ],
        ],
        'AddLiveStreamTranslate' => [
            'name' => 'AddLiveStreamTranslate',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/translateStream:config',
            ],
            'input' => [ 'shape' => 'AddLiveStreamTranslateRequestShape', ],
            'output' => [ 'shape' => 'AddLiveStreamTranslateResponseShape', ],
        ],
        'DescribeSystemLiveStreamTranslateTemplates' => [
            'name' => 'DescribeSystemLiveStreamTranslateTemplates',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/translateSystem',
            ],
            'input' => [ 'shape' => 'DescribeSystemLiveStreamTranslateTemplatesRequestShape', ],
            'output' => [ 'shape' => 'DescribeSystemLiveStreamTranslateTemplatesResponseShape', ],
        ],
        'DescribeLiveStreamTranslateConfig' => [
            'name' => 'DescribeLiveStreamTranslateConfig',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/translates:config',
            ],
            'input' => [ 'shape' => 'DescribeLiveStreamTranslateConfigRequestShape', ],
            'output' => [ 'shape' => 'DescribeLiveStreamTranslateConfigResponseShape', ],
        ],
        'DescribeLiveDomainTranslateConfig' => [
            'name' => 'DescribeLiveDomainTranslateConfig',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/translateTemplates:domain',
            ],
            'input' => [ 'shape' => 'DescribeLiveDomainTranslateConfigRequestShape', ],
            'output' => [ 'shape' => 'DescribeLiveDomainTranslateConfigResponseShape', ],
        ],
        'DeleteLiveStreamDomainTranslate' => [
            'name' => 'DeleteLiveStreamDomainTranslate',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/translateDomains/{publishDomain}/templates/{template}:config',
            ],
            'input' => [ 'shape' => 'DeleteLiveStreamDomainTranslateRequestShape', ],
            'output' => [ 'shape' => 'DeleteLiveStreamDomainTranslateResponseShape', ],
        ],
        'DeleteLiveStreamAppTranslate' => [
            'name' => 'DeleteLiveStreamAppTranslate',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/translateApps/{publishDomain}/appNames/{appName}/templates/{template}',
            ],
            'input' => [ 'shape' => 'DeleteLiveStreamAppTranslateRequestShape', ],
            'output' => [ 'shape' => 'DeleteLiveStreamAppTranslateResponseShape', ],
        ],
        'DeleteLiveStreamTranslate' => [
            'name' => 'DeleteLiveStreamTranslate',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/translateStream/{publishDomain}/appNames/{appName}/streams/{streamName}/templates/{template}',
            ],
            'input' => [ 'shape' => 'DeleteLiveStreamTranslateRequestShape', ],
            'output' => [ 'shape' => 'DeleteLiveStreamTranslateResponseShape', ],
        ],
        'DescribeTranslateBinding' => [
            'name' => 'DescribeTranslateBinding',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/translateTemplates/{template}:binding',
            ],
            'input' => [ 'shape' => 'DescribeTranslateBindingRequestShape', ],
            'output' => [ 'shape' => 'DescribeTranslateBindingResponseShape', ],
        ],
        'PauseLiveStreamTranslate' => [
            'name' => 'PauseLiveStreamTranslate',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/translate:pause',
            ],
            'input' => [ 'shape' => 'PauseLiveStreamTranslateRequestShape', ],
            'output' => [ 'shape' => 'PauseLiveStreamTranslateResponseShape', ],
        ],
        'ResumeLiveStreamTranslate' => [
            'name' => 'ResumeLiveStreamTranslate',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/translate:resume',
            ],
            'input' => [ 'shape' => 'ResumeLiveStreamTranslateRequestShape', ],
            'output' => [ 'shape' => 'ResumeLiveStreamTranslateResponseShape', ],
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
    ],
];
