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
        'StartLiveApp' => [
            'name' => 'StartLiveApp',
            'http' => [
                'method' => 'PUT',
                'requestUri' => '/v1/apps:start',
            ],
            'input' => [ 'shape' => 'StartLiveAppRequestShape', ],
            'output' => [ 'shape' => 'StartLiveAppResponseShape', ],
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
        'DeleteLiveApp' => [
            'name' => 'DeleteLiveApp',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/apps/{publishDomain}/appNames/{appName}',
            ],
            'input' => [ 'shape' => 'DeleteLiveAppRequestShape', ],
            'output' => [ 'shape' => 'DeleteLiveAppResponseShape', ],
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
        'PornData' => [
            'type' => 'structure',
            'members' => [
                'publishDomain' => [ 'type' => 'string', 'locationName' => 'publishDomain', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
                'streamName' => [ 'type' => 'string', 'locationName' => 'streamName', ],
                'date' => [ 'type' => 'string', 'locationName' => 'date', ],
                'total' => [ 'type' => 'integer', 'locationName' => 'total', ],
            ],
        ],
        'RecordDetail' => [
            'type' => 'structure',
            'members' => [
                'format' => [ 'type' => 'string', 'locationName' => 'format', ],
                'duration' => [ 'type' => 'double', 'locationName' => 'duration', ],
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
        'SnapshotData' => [
            'type' => 'structure',
            'members' => [
                'publishDomain' => [ 'type' => 'string', 'locationName' => 'publishDomain', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
                'streamName' => [ 'type' => 'string', 'locationName' => 'streamName', ],
                'date' => [ 'type' => 'string', 'locationName' => 'date', ],
                'total' => [ 'type' => 'integer', 'locationName' => 'total', ],
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
                'audioFrameRate' => [ 'type' => 'long', 'locationName' => 'audioFrameRate', ],
                'streamUrl' => [ 'type' => 'string', 'locationName' => 'streamUrl', ],
                'bitRate' => [ 'type' => 'long', 'locationName' => 'bitRate', ],
                'videoFrameRate' => [ 'type' => 'long', 'locationName' => 'videoFrameRate', ],
                'time' => [ 'type' => 'string', 'locationName' => 'time', ],
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
        'NotifyInfo' => [
            'type' => 'structure',
            'members' => [
                'publishDomain' => [ 'type' => 'string', 'locationName' => 'publishDomain', ],
                'notifyUrl' => [ 'type' => 'string', 'locationName' => 'notifyUrl', ],
            ],
        ],
        'RestartConfig' => [
            'type' => 'structure',
            'members' => [
                'publishDomains' => [ 'type' => 'list', 'member' => [ 'shape' => 'ShiftPublishDomain', ], ],
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
        'ShiftPlayDomain' => [
            'type' => 'structure',
            'members' => [
                'playDomain' => [ 'type' => 'string', 'locationName' => 'playDomain', ],
                'timeshiftStatus' => [ 'type' => 'string', 'locationName' => 'timeshiftStatus', ],
                'playType' => [ 'type' => 'string', 'locationName' => 'playType', ],
            ],
        ],
        'TimeshiftConfig' => [
            'type' => 'structure',
            'members' => [
                'publishDomains' => [ 'type' => 'list', 'member' => [ 'shape' => 'ShiftPublishDomain', ], ],
                'playDomains' => [ 'type' => 'list', 'member' => [ 'shape' => 'ShiftPlayDomain', ], ],
            ],
        ],
        'ShiftPublishDomain' => [
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
            ],
        ],
        'WatermarkTemplate' => [
            'type' => 'structure',
            'members' => [
                'offSetX' => [ 'type' => 'integer', 'locationName' => 'offSetX', ],
                'offSetY' => [ 'type' => 'integer', 'locationName' => 'offSetY', ],
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
        'DescribeLiveAppResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeLiveAppResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'StartLiveAppRequestShape' => [
            'type' => 'structure',
            'members' => [
                'publishDomain' => [ 'type' => 'string', 'locationName' => 'publishDomain', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'StartLiveAppResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'StopLiveAppResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DeleteLiveAppRequestShape' => [
            'type' => 'structure',
            'members' => [
                'publishDomain' => [ 'type' => 'string', 'locationName' => 'publishDomain', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
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
        'DeleteLiveAppResultShape' => [
            'type' => 'structure',
            'members' => [
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
        'StartLiveAppResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DeleteLiveAppResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
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
        'DescribeLivePlayAuthKeyRequestShape' => [
            'type' => 'structure',
            'members' => [
                'playDomain' => [ 'type' => 'string', 'locationName' => 'playDomain', ],
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
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
                'publishDomain' => [ 'type' => 'string', 'locationName' => 'publishDomain', ],
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
        'AddLiveRecordTaskResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
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
        'DescribeLivePornDataResultShape' => [
            'type' => 'structure',
            'members' => [
                'pornData' => [ 'type' => 'list', 'member' => [ 'shape' => 'PornData', ], ],
            ],
        ],
        'DescribeLivePornDataResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeLivePornDataResultShape', ],
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
        'DescribeLiveSnapshotDataResultShape' => [
            'type' => 'structure',
            'members' => [
                'snapshotData' => [ 'type' => 'list', 'member' => [ 'shape' => 'SnapshotData', ], ],
            ],
        ],
        'DescribeLiveSnapshotDataResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeLiveSnapshotDataResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
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
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
                'publishDomain' => [ 'type' => 'string', 'locationName' => 'publishDomain', ],
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
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
                'publishDomain' => [ 'type' => 'string', 'locationName' => 'publishDomain', ],
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
        'DescribeLiveStreamPublishListResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeLiveStreamPublishListResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeLiveStreamNotifyConfigResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeLiveStreamNotifyConfigResultShape', ],
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
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
                'publishDomain' => [ 'type' => 'string', 'locationName' => 'publishDomain', ],
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
        'DeleteLiveStreamNotifyConfigResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DescribeLiveStreamNotifyConfigResultShape' => [
            'type' => 'structure',
            'members' => [
                'publishDomain' => [ 'type' => 'string', 'locationName' => 'publishDomain', ],
                'notifyUrl' => [ 'type' => 'string', 'locationName' => 'notifyUrl', ],
            ],
        ],
        'SetLiveStreamNotifyConfigResultShape' => [
            'type' => 'structure',
            'members' => [
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
                'pageNum' => [ 'type' => 'integer', 'locationName' => 'pageNum', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'playDomain' => [ 'type' => 'string', 'locationName' => 'playDomain', ],
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
                'template' => [ 'type' => 'string', 'locationName' => 'template', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'DeleteLiveStreamDomainTranscodeResponseShape' => [
            'type' => 'structure',
            'members' => [
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
        'DescribeCustomLiveStreamTranscodeTemplateResultShape' => [
            'type' => 'structure',
            'members' => [
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
            ],
        ],
        'DeleteCustomLiveStreamTranscodeTemplateRequestShape' => [
            'type' => 'structure',
            'members' => [
                'template' => [ 'type' => 'string', 'locationName' => 'template', ],
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
        'DeleteCustomLiveStreamTranscodeTemplateResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'AddCustomLiveStreamTranscodeTemplateRequestShape' => [
            'type' => 'structure',
            'members' => [
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
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
                'publishDomain' => [ 'type' => 'string', 'locationName' => 'publishDomain', ],
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
        'AddCustomLiveStreamWatermarkTemplateRequestShape' => [
            'type' => 'structure',
            'members' => [
                'offsetX' => [ 'type' => 'integer', 'locationName' => 'offsetX', ],
                'offsetY' => [ 'type' => 'integer', 'locationName' => 'offsetY', ],
                'width' => [ 'type' => 'integer', 'locationName' => 'width', ],
                'height' => [ 'type' => 'integer', 'locationName' => 'height', ],
                'template' => [ 'type' => 'string', 'locationName' => 'template', ],
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
