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
        'DescribeLiveDomain' => [
            'name' => 'DescribeLiveDomain',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/domains',
            ],
            'input' => [ 'shape' => 'DescribeLiveDomainRequestShape', ],
            'output' => [ 'shape' => 'DescribeLiveDomainResponseShape', ],
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
        'AddLiveStreamRecordNotifyConfig' => [
            'name' => 'AddLiveStreamRecordNotifyConfig',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/recordNotifys:config',
            ],
            'input' => [ 'shape' => 'AddLiveStreamRecordNotifyConfigRequestShape', ],
            'output' => [ 'shape' => 'AddLiveStreamRecordNotifyConfigResponseShape', ],
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
        'AddLiveDomain' => [
            'name' => 'AddLiveDomain',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/liveDomainNetworks',
            ],
            'input' => [ 'shape' => 'AddLiveDomainRequestShape', ],
            'output' => [ 'shape' => 'AddLiveDomainResponseShape', ],
        ],
        'AddLiveRecord' => [
            'name' => 'AddLiveRecord',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/liveDomainRecords',
            ],
            'input' => [ 'shape' => 'AddLiveRecordRequestShape', ],
            'output' => [ 'shape' => 'AddLiveRecordResponseShape', ],
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
        'AddLiveStreamSnapshotNotifyConfig' => [
            'name' => 'AddLiveStreamSnapshotNotifyConfig',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/snapshotNotifys:config',
            ],
            'input' => [ 'shape' => 'AddLiveStreamSnapshotNotifyConfigRequestShape', ],
            'output' => [ 'shape' => 'AddLiveStreamSnapshotNotifyConfigResponseShape', ],
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
        'SetLiveStreamNotifyUrlConfig' => [
            'name' => 'SetLiveStreamNotifyUrlConfig',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/streamNotifys',
            ],
            'input' => [ 'shape' => 'SetLiveStreamNotifyUrlConfigRequestShape', ],
            'output' => [ 'shape' => 'SetLiveStreamNotifyUrlConfigResponseShape', ],
        ],
        'DescribeLiveStreamNotifyUrlConfig' => [
            'name' => 'DescribeLiveStreamNotifyUrlConfig',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/streamNotifys/{publishDomain}',
            ],
            'input' => [ 'shape' => 'DescribeLiveStreamNotifyUrlConfigRequestShape', ],
            'output' => [ 'shape' => 'DescribeLiveStreamNotifyUrlConfigResponseShape', ],
        ],
        'DeleteLiveStreamNotifyUrlConfig' => [
            'name' => 'DeleteLiveStreamNotifyUrlConfig',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/streamNotifys/{publishDomain}',
            ],
            'input' => [ 'shape' => 'DeleteLiveStreamNotifyUrlConfigRequestShape', ],
            'output' => [ 'shape' => 'DeleteLiveStreamNotifyUrlConfigResponseShape', ],
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
        'AddCustomLiveStreamTranscode' => [
            'name' => 'AddCustomLiveStreamTranscode',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/transcodeCustoms:template',
            ],
            'input' => [ 'shape' => 'AddCustomLiveStreamTranscodeRequestShape', ],
            'output' => [ 'shape' => 'AddCustomLiveStreamTranscodeResponseShape', ],
        ],
        'DescribeCustomLiveStreamTranscodes' => [
            'name' => 'DescribeCustomLiveStreamTranscodes',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/transcodeCustoms',
            ],
            'input' => [ 'shape' => 'DescribeCustomLiveStreamTranscodesRequestShape', ],
            'output' => [ 'shape' => 'DescribeCustomLiveStreamTranscodesResponseShape', ],
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
        'DescribeCustomLiveStreamTranscode' => [
            'name' => 'DescribeCustomLiveStreamTranscode',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/transcodeCustoms/{template}',
            ],
            'input' => [ 'shape' => 'DescribeCustomLiveStreamTranscodeRequestShape', ],
            'output' => [ 'shape' => 'DescribeCustomLiveStreamTranscodeResponseShape', ],
        ],
        'DeleteCustomLiveStreamTranscode' => [
            'name' => 'DeleteCustomLiveStreamTranscode',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/transcodeCustoms/{template}',
            ],
            'input' => [ 'shape' => 'DeleteCustomLiveStreamTranscodeRequestShape', ],
            'output' => [ 'shape' => 'DeleteCustomLiveStreamTranscodeResponseShape', ],
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
        'AppList' => [
            'type' => 'structure',
            'members' => [
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
                'appStatus' => [ 'type' => 'string', 'locationName' => 'appStatus', ],
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
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'updateTime' => [ 'type' => 'string', 'locationName' => 'updateTime', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DomainList' => [
            'type' => 'structure',
            'members' => [
                'publishDomain' => [ 'type' => 'list', 'member' => [ 'shape' => 'PublishDomain', ], ],
                'playDomain' => [ 'type' => 'list', 'member' => [ 'shape' => 'PlayDomain', ], ],
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
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'RecordApp' => [
            'type' => 'structure',
            'members' => [
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
                'recordConfig' => [ 'type' => 'string', 'locationName' => 'recordConfig', ],
            ],
        ],
        'LiveRecordConfig' => [
            'type' => 'structure',
            'members' => [
                'publishDomain' => [ 'type' => 'string', 'locationName' => 'publishDomain', ],
                'recordConfig' => [ 'type' => 'string', 'locationName' => 'recordConfig', ],
                'app' => [ 'type' => 'list', 'member' => [ 'shape' => 'RecordApp', ], ],
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
        'FileList' => [
            'type' => 'structure',
            'members' => [
                'publishDomain' => [ 'type' => 'string', 'locationName' => 'publishDomain', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
                'streamName' => [ 'type' => 'string', 'locationName' => 'streamName', ],
                'startTime' => [ 'type' => 'string', 'locationName' => 'startTime', ],
                'endTime' => [ 'type' => 'string', 'locationName' => 'endTime', ],
                'duration' => [ 'type' => 'double', 'locationName' => 'duration', ],
                'height' => [ 'type' => 'integer', 'locationName' => 'height', ],
                'width' => [ 'type' => 'integer', 'locationName' => 'width', ],
                'ossBucket' => [ 'type' => 'string', 'locationName' => 'ossBucket', ],
                'ossEndpoint' => [ 'type' => 'string', 'locationName' => 'ossEndpoint', ],
                'ossObject' => [ 'type' => 'string', 'locationName' => 'ossObject', ],
            ],
        ],
        'RecordConfig' => [
            'type' => 'structure',
            'members' => [
                'mytemplate1' => [ 'type' => 'string', 'locationName' => 'mytemplate1', ],
            ],
        ],
        'SnapshotList' => [
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
        'StreamInfo' => [
            'type' => 'structure',
            'members' => [
                'audioFrameRate' => [ 'type' => 'double', 'locationName' => 'audioFrameRate', ],
                'streamUrl' => [ 'type' => 'string', 'locationName' => 'streamUrl', ],
                'bitRate' => [ 'type' => 'double', 'locationName' => 'bitRate', ],
                'videoFrameRate' => [ 'type' => 'double', 'locationName' => 'videoFrameRate', ],
                'time' => [ 'type' => 'string', 'locationName' => 'time', ],
            ],
        ],
        'NotifyInfo' => [
            'type' => 'structure',
            'members' => [
                'publishDoamin' => [ 'type' => 'string', 'locationName' => 'publishDoamin', ],
                'notifyUrl' => [ 'type' => 'string', 'locationName' => 'notifyUrl', ],
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
        'App' => [
            'type' => 'structure',
            'members' => [
                'publishDomain' => [ 'type' => 'string', 'locationName' => 'publishDomain', ],
                'transcodeConfig' => [ 'type' => 'list', 'member' => [ 'shape' => 'Config', ], ],
            ],
        ],
        'Config' => [
            'type' => 'structure',
            'members' => [
                'hd' => [ 'type' => 'string', 'locationName' => 'hd', ],
                'mytemplate' => [ 'type' => 'string', 'locationName' => 'mytemplate', ],
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
        'StartLiveAppResultShape' => [
            'type' => 'structure',
            'members' => [
                'publishDomain' => [ 'type' => 'string', 'locationName' => 'publishDomain', ],
            ],
        ],
        'DescribeLiveAppResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeLiveAppResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'StopLiveAppResultShape' => [
            'type' => 'structure',
            'members' => [
                'publishDomain' => [ 'type' => 'string', 'locationName' => 'publishDomain', ],
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
        'StartLiveAppRequestShape' => [
            'type' => 'structure',
            'members' => [
                'publishDomain' => [ 'type' => 'string', 'locationName' => 'publishDomain', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'DeleteLiveAppResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DeleteLiveAppResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'AddLiveAppResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'AddLiveAppResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
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
                'result' =>  [ 'shape' => 'StartLiveAppResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
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
                'publishDomain' => [ 'type' => 'string', 'locationName' => 'publishDomain', ],
            ],
        ],
        'StopLiveAppResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'StopLiveAppResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DeleteLiveAppRequestShape' => [
            'type' => 'structure',
            'members' => [
                'publishDomain' => [ 'type' => 'string', 'locationName' => 'publishDomain', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'DeleteLiveAppResultShape' => [
            'type' => 'structure',
            'members' => [
                'publishDomain' => [ 'type' => 'string', 'locationName' => 'publishDomain', ],
            ],
        ],
        'DescribeLiveAppResultShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'totalCount' => [ 'type' => 'double', 'locationName' => 'totalCount', ],
                'appList' => [ 'type' => 'list', 'member' => [ 'shape' => 'AppList', ], ],
            ],
        ],
        'StopLiveAppRequestShape' => [
            'type' => 'structure',
            'members' => [
                'publishDomain' => [ 'type' => 'string', 'locationName' => 'publishDomain', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'DescribeLiveDomainRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNum' => [ 'type' => 'integer', 'locationName' => 'pageNum', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'filters' => [ 'type' => 'list', 'member' => [ 'shape' => 'Filter', ], ],
            ],
        ],
        'DescribeLiveDomainResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeLiveDomainResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeLiveDomainDetailRequestShape' => [
            'type' => 'structure',
            'members' => [
                'publishDomain' => [ 'type' => 'string', 'locationName' => 'publishDomain', ],
            ],
        ],
        'DescribeLiveDomainDetailResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeLiveDomainDetailResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'StopLiveDomainResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'StopLiveDomainResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DeleteLiveDomainResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DeleteLiveDomainResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'StartLiveDomainRequestShape' => [
            'type' => 'structure',
            'members' => [
                'publishDomain' => [ 'type' => 'string', 'locationName' => 'publishDomain', ],
            ],
        ],
        'DescribeLiveDomainResultShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'totalCount' => [ 'type' => 'double', 'locationName' => 'totalCount', ],
                'domainList' => [ 'type' => 'list', 'member' => [ 'shape' => 'DomainList', ], ],
            ],
        ],
        'AddLiveDomainResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'AddLiveDomainResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
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
                'region' => [ 'type' => 'string', 'locationName' => 'region', ],
            ],
        ],
        'DescribeLiveDomainDetailResultShape' => [
            'type' => 'structure',
            'members' => [
                'publishDomain' => [ 'type' => 'list', 'member' => [ 'shape' => 'PublishDomain', ], ],
                'playDomain' => [ 'type' => 'list', 'member' => [ 'shape' => 'PlayDomain', ], ],
            ],
        ],
        'StopLiveDomainResultShape' => [
            'type' => 'structure',
            'members' => [
                'publishDomain' => [ 'type' => 'string', 'locationName' => 'publishDomain', ],
            ],
        ],
        'AddLiveDomainResultShape' => [
            'type' => 'structure',
            'members' => [
                'publishDomain' => [ 'type' => 'string', 'locationName' => 'publishDomain', ],
            ],
        ],
        'DeleteLiveDomainResultShape' => [
            'type' => 'structure',
            'members' => [
                'publishDomain' => [ 'type' => 'string', 'locationName' => 'publishDomain', ],
            ],
        ],
        'StartLiveDomainResultShape' => [
            'type' => 'structure',
            'members' => [
                'publishDomain' => [ 'type' => 'string', 'locationName' => 'publishDomain', ],
            ],
        ],
        'StartLiveDomainResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'StartLiveDomainResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'StopLiveDomainRequestShape' => [
            'type' => 'structure',
            'members' => [
                'publishDomain' => [ 'type' => 'string', 'locationName' => 'publishDomain', ],
            ],
        ],
        'AddCustomLiveStreamRecordTemplateResultShape' => [
            'type' => 'structure',
            'members' => [
                'feedback' => [ 'type' => 'boolean', 'locationName' => 'feedback', ],
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
        'AddLiveStreamDomainRecordResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'AddLiveStreamDomainRecordResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DeleteLiveStreamAppRecordResultShape' => [
            'type' => 'structure',
            'members' => [
                'publishDomain' => [ 'type' => 'string', 'locationName' => 'publishDomain', ],
            ],
        ],
        'DeleteLiveStreamRecordNotifyConfigRequestShape' => [
            'type' => 'structure',
            'members' => [
                'publishDomain' => [ 'type' => 'string', 'locationName' => 'publishDomain', ],
            ],
        ],
        'DeleteLiveStreamDomainRecordResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DeleteLiveStreamDomainRecordResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DeleteCustomLiveStreamRecordTemplateResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DeleteCustomLiveStreamRecordTemplateResultShape', ],
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
        'DescribeCustomLiveStreamRecordTemplatesResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeCustomLiveStreamRecordTemplatesResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeLiveStreamRecordNotifyConfigResultShape' => [
            'type' => 'structure',
            'members' => [
                'publishDomain' => [ 'type' => 'string', 'locationName' => 'publishDomain', ],
                'notifyUrl' => [ 'type' => 'string', 'locationName' => 'notifyUrl', ],
            ],
        ],
        'AddLiveStreamRecordNotifyConfigResultShape' => [
            'type' => 'structure',
            'members' => [
                'publishDomain' => [ 'type' => 'string', 'locationName' => 'publishDomain', ],
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
        'AddLiveStreamAppRecordResultShape' => [
            'type' => 'structure',
            'members' => [
                'publishDomain' => [ 'type' => 'string', 'locationName' => 'publishDomain', ],
            ],
        ],
        'DeleteLiveStreamRecordNotifyConfigResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DeleteLiveStreamRecordNotifyConfigResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'AddLiveStreamRecordNotifyConfigRequestShape' => [
            'type' => 'structure',
            'members' => [
                'publishDomain' => [ 'type' => 'string', 'locationName' => 'publishDomain', ],
                'notifyUrl' => [ 'type' => 'string', 'locationName' => 'notifyUrl', ],
            ],
        ],
        'DeleteLiveStreamRecordNotifyConfigResultShape' => [
            'type' => 'structure',
            'members' => [
                'publishDomain' => [ 'type' => 'string', 'locationName' => 'publishDomain', ],
            ],
        ],
        'DeleteLiveStreamDomainRecordResultShape' => [
            'type' => 'structure',
            'members' => [
                'publishDomain' => [ 'type' => 'string', 'locationName' => 'publishDomain', ],
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
        'AddLiveStreamAppRecordResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'AddLiveStreamAppRecordResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DeleteCustomLiveStreamRecordTemplateResultShape' => [
            'type' => 'structure',
            'members' => [
                'template' => [ 'type' => 'string', 'locationName' => 'template', ],
            ],
        ],
        'DescribeLiveStreamRecordNotifyConfigRequestShape' => [
            'type' => 'structure',
            'members' => [
                'publishDomain' => [ 'type' => 'string', 'locationName' => 'publishDomain', ],
            ],
        ],
        'DescribeCustomLiveStreamRecordConfigResultShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'totalCount' => [ 'type' => 'double', 'locationName' => 'totalCount', ],
                'recordConfigs' => [ 'type' => 'list', 'member' => [ 'shape' => 'LiveRecordConfig', ], ],
            ],
        ],
        'DescribeLiveStreamRecordNotifyConfigResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeLiveStreamRecordNotifyConfigResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
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
        'AddCustomLiveStreamRecordTemplateResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'AddCustomLiveStreamRecordTemplateResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
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
        'AddLiveStreamDomainRecordRequestShape' => [
            'type' => 'structure',
            'members' => [
                'publishDomain' => [ 'type' => 'string', 'locationName' => 'publishDomain', ],
                'template' => [ 'type' => 'string', 'locationName' => 'template', ],
            ],
        ],
        'DescribeCustomLiveStreamRecordTemplatesResultShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'totalCount' => [ 'type' => 'double', 'locationName' => 'totalCount', ],
                'recordTemplates' => [ 'type' => 'list', 'member' => [ 'shape' => 'RecordTemplate', ], ],
            ],
        ],
        'DeleteCustomLiveStreamRecordTemplateRequestShape' => [
            'type' => 'structure',
            'members' => [
                'template' => [ 'type' => 'string', 'locationName' => 'template', ],
            ],
        ],
        'AddLiveStreamRecordNotifyConfigResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'AddLiveStreamRecordNotifyConfigResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
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
                'result' =>  [ 'shape' => 'DeleteLiveStreamAppRecordResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'AddLiveStreamDomainRecordResultShape' => [
            'type' => 'structure',
            'members' => [
                'publishDomain' => [ 'type' => 'string', 'locationName' => 'publishDomain', ],
            ],
        ],
        'AddLiveRecordRequestShape' => [
            'type' => 'structure',
            'members' => [
                'publishDomain' => [ 'type' => 'string', 'locationName' => 'publishDomain', ],
            ],
        ],
        'AddLiveRecordResultShape' => [
            'type' => 'structure',
            'members' => [
                'feedback' => [ 'type' => 'boolean', 'locationName' => 'feedback', ],
            ],
        ],
        'AddLiveRecordResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'AddLiveRecordResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeCustomLiveStreamSnapshotConfigResultShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'totalCount' => [ 'type' => 'double', 'locationName' => 'totalCount', ],
                'snapshotConfigs' => [ 'type' => 'list', 'member' => [ 'shape' => 'SnapshotConfig', ], ],
            ],
        ],
        'DescribeLiveStreamSnapshotNotifyConfigRequestShape' => [
            'type' => 'structure',
            'members' => [
                'publishDomain' => [ 'type' => 'string', 'locationName' => 'publishDomain', ],
            ],
        ],
        'AddLiveStreamSnapshotNotifyConfigResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'AddLiveStreamSnapshotNotifyConfigResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeCustomLiveStreamSnapshotConfigResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeCustomLiveStreamSnapshotConfigResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DeleteCustomLiveStreamSnapshotTemplateResultShape' => [
            'type' => 'structure',
            'members' => [
                'feedback' => [ 'type' => 'boolean', 'locationName' => 'feedback', ],
            ],
        ],
        'DeleteLiveStreamDomainSnapshotResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'AddCustomLiveStreamSnapshotTemplateResultShape' => [
            'type' => 'structure',
            'members' => [
                'feedback' => [ 'type' => 'boolean', 'locationName' => 'feedback', ],
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
        'DeleteLiveStreamSnapshotNotifyConfigResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DeleteLiveStreamSnapshotNotifyConfigResultShape', ],
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
        'DescribeCustomLiveStreamSnapshotConfigRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNum' => [ 'type' => 'integer', 'locationName' => 'pageNum', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'filters' => [ 'type' => 'list', 'member' => [ 'shape' => 'Filter', ], ],
            ],
        ],
        'AddLiveStreamSnapshotNotifyConfigRequestShape' => [
            'type' => 'structure',
            'members' => [
                'publishDomain' => [ 'type' => 'string', 'locationName' => 'publishDomain', ],
                'notifyUrl' => [ 'type' => 'string', 'locationName' => 'notifyUrl', ],
            ],
        ],
        'DeleteLiveStreamSnapshotNotifyConfigResultShape' => [
            'type' => 'structure',
            'members' => [
                'feedback' => [ 'type' => 'boolean', 'locationName' => 'feedback', ],
            ],
        ],
        'DescribeLiveStreamSnapshotNotifyConfigResultShape' => [
            'type' => 'structure',
            'members' => [
                'publishDomain' => [ 'type' => 'string', 'locationName' => 'publishDomain', ],
                'notifyUrl' => [ 'type' => 'string', 'locationName' => 'notifyUrl', ],
            ],
        ],
        'DescribeCustomLiveStreamSnapshotTemplatesResultShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'totalCount' => [ 'type' => 'double', 'locationName' => 'totalCount', ],
                'snapshotTemplates' => [ 'type' => 'list', 'member' => [ 'shape' => 'SnapshotTemplate', ], ],
            ],
        ],
        'DeleteLiveStreamAppSnapshotResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DeleteLiveStreamAppSnapshotResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
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
        'AddLiveStreamDomainSnapshotResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'AddLiveStreamDomainSnapshotResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DeleteCustomLiveStreamSnapshotTemplateResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DeleteCustomLiveStreamSnapshotTemplateResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DeleteLiveStreamDomainSnapshotResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DeleteLiveStreamDomainSnapshotRequestShape' => [
            'type' => 'structure',
            'members' => [
                'publishDomain' => [ 'type' => 'string', 'locationName' => 'publishDomain', ],
                'template' => [ 'type' => 'string', 'locationName' => 'template', ],
            ],
        ],
        'DescribeCustomLiveStreamSnapshotTemplatesResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeCustomLiveStreamSnapshotTemplatesResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'AddLiveStreamDomainSnapshotRequestShape' => [
            'type' => 'structure',
            'members' => [
                'publishDomain' => [ 'type' => 'string', 'locationName' => 'publishDomain', ],
                'template' => [ 'type' => 'string', 'locationName' => 'template', ],
            ],
        ],
        'AddLiveStreamAppSnapshotResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'AddLiveStreamAppSnapshotResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'AddLiveStreamDomainSnapshotResultShape' => [
            'type' => 'structure',
            'members' => [
                'feedback' => [ 'type' => 'boolean', 'locationName' => 'feedback', ],
            ],
        ],
        'DeleteLiveStreamSnapshotNotifyConfigRequestShape' => [
            'type' => 'structure',
            'members' => [
                'publishDomain' => [ 'type' => 'string', 'locationName' => 'publishDomain', ],
            ],
        ],
        'DeleteCustomLiveStreamSnapshotTemplateRequestShape' => [
            'type' => 'structure',
            'members' => [
                'template' => [ 'type' => 'string', 'locationName' => 'template', ],
            ],
        ],
        'AddLiveStreamSnapshotNotifyConfigResultShape' => [
            'type' => 'structure',
            'members' => [
                'feedback' => [ 'type' => 'boolean', 'locationName' => 'feedback', ],
            ],
        ],
        'DeleteLiveStreamAppSnapshotResultShape' => [
            'type' => 'structure',
            'members' => [
                'feedback' => [ 'type' => 'boolean', 'locationName' => 'feedback', ],
            ],
        ],
        'AddCustomLiveStreamSnapshotTemplateResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'AddCustomLiveStreamSnapshotTemplateResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
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
        'AddLiveStreamAppSnapshotResultShape' => [
            'type' => 'structure',
            'members' => [
                'feedback' => [ 'type' => 'boolean', 'locationName' => 'feedback', ],
            ],
        ],
        'ResumeLiveStreamResultShape' => [
            'type' => 'structure',
            'members' => [
                'publishDomain' => [ 'type' => 'string', 'locationName' => 'publishDomain', ],
            ],
        ],
        'ForbidLiveStreamResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'ForbidLiveStreamResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ForbidLiveStreamResultShape' => [
            'type' => 'structure',
            'members' => [
                'publishDomain' => [ 'type' => 'string', 'locationName' => 'publishDomain', ],
            ],
        ],
        'DeleteLiveStreamNotifyUrlConfigResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DeleteLiveStreamNotifyUrlConfigResultShape', ],
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
        'SetLiveStreamNotifyUrlConfigRequestShape' => [
            'type' => 'structure',
            'members' => [
                'publishDomain' => [ 'type' => 'string', 'locationName' => 'publishDomain', ],
                'notifyUrl' => [ 'type' => 'string', 'locationName' => 'notifyUrl', ],
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
        'DeleteLiveStreamNotifyUrlConfigRequestShape' => [
            'type' => 'structure',
            'members' => [
                'publishDomain' => [ 'type' => 'string', 'locationName' => 'publishDomain', ],
            ],
        ],
        'DescribeLiveStreamNotifyUrlConfigRequestShape' => [
            'type' => 'structure',
            'members' => [
                'publishDomain' => [ 'type' => 'string', 'locationName' => 'publishDomain', ],
            ],
        ],
        'ResumeLiveStreamResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'ResumeLiveStreamResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeLiveStreamNotifyUrlConfigResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeLiveStreamNotifyUrlConfigResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'SetLiveStreamNotifyUrlConfigResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'SetLiveStreamNotifyUrlConfigResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DeleteLiveStreamNotifyUrlConfigResultShape' => [
            'type' => 'structure',
            'members' => [
                'publishDomain' => [ 'type' => 'string', 'locationName' => 'publishDomain', ],
            ],
        ],
        'DescribeLiveStreamNotifyUrlConfigResultShape' => [
            'type' => 'structure',
            'members' => [
                'publishDoamin' => [ 'type' => 'string', 'locationName' => 'publishDoamin', ],
                'notifyUrl' => [ 'type' => 'string', 'locationName' => 'notifyUrl', ],
            ],
        ],
        'SetLiveStreamNotifyUrlConfigResultShape' => [
            'type' => 'structure',
            'members' => [
                'publishDomain' => [ 'type' => 'string', 'locationName' => 'publishDomain', ],
            ],
        ],
        'DeleteLiveStreamAppTranscodeResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DeleteLiveStreamAppTranscodeResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DeleteCustomLiveStreamTranscodeResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DeleteCustomLiveStreamTranscodeResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeCustomLiveStreamTranscodesResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeCustomLiveStreamTranscodesResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
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
        'AddCustomLiveStreamTranscodeResultShape' => [
            'type' => 'structure',
            'members' => [
                'templateId' => [ 'type' => 'double', 'locationName' => 'templateId', ],
            ],
        ],
        'DescribeCustomLiveStreamTranscodeRequestShape' => [
            'type' => 'structure',
            'members' => [
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
        'DescribeCustomLiveStreamTranscodesResultShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'totalCount' => [ 'type' => 'double', 'locationName' => 'totalCount', ],
                'transcodeTemplateList' => [ 'type' => 'list', 'member' => [ 'shape' => 'TranscodeInfo', ], ],
            ],
        ],
        'DescribeLiveStreamTranscodeConfigResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeLiveStreamTranscodeConfigResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'AddCustomLiveStreamTranscodeResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'AddCustomLiveStreamTranscodeResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'AddLiveStreamAppTranscodeResultShape' => [
            'type' => 'structure',
            'members' => [
                'publishDomain' => [ 'type' => 'string', 'locationName' => 'publishDomain', ],
            ],
        ],
        'DescribeLiveStreamTranscodeConfigResultShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'totalCount' => [ 'type' => 'double', 'locationName' => 'totalCount', ],
                'transcodeConfigs' => [ 'type' => 'list', 'member' => [ 'shape' => 'TemplateConfig', ], ],
            ],
        ],
        'DeleteLiveStreamDomainTranscodeResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DeleteLiveStreamDomainTranscodeResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeCustomLiveStreamTranscodeResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeCustomLiveStreamTranscodeResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'AddLiveStreamAppTranscodeResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'AddLiveStreamAppTranscodeResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'AddLiveStreamDomainTranscodeResultShape' => [
            'type' => 'structure',
            'members' => [
                'publishDomain' => [ 'type' => 'string', 'locationName' => 'publishDomain', ],
            ],
        ],
        'DeleteLiveStreamDomainTranscodeRequestShape' => [
            'type' => 'structure',
            'members' => [
                'publishDomain' => [ 'type' => 'string', 'locationName' => 'publishDomain', ],
                'template' => [ 'type' => 'string', 'locationName' => 'template', ],
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
        'AddLiveStreamAppTranscodeRequestShape' => [
            'type' => 'structure',
            'members' => [
                'publishDomain' => [ 'type' => 'string', 'locationName' => 'publishDomain', ],
                'template' => [ 'type' => 'string', 'locationName' => 'template', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'DeleteCustomLiveStreamTranscodeResultShape' => [
            'type' => 'structure',
            'members' => [
                'template' => [ 'type' => 'string', 'locationName' => 'template', ],
            ],
        ],
        'DescribeCustomLiveStreamTranscodesRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNum' => [ 'type' => 'integer', 'locationName' => 'pageNum', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'filters' => [ 'type' => 'list', 'member' => [ 'shape' => 'Filter', ], ],
            ],
        ],
        'DescribeCustomLiveStreamTranscodeResultShape' => [
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
        'DeleteLiveStreamAppTranscodeResultShape' => [
            'type' => 'structure',
            'members' => [
                'publishDomain' => [ 'type' => 'string', 'locationName' => 'publishDomain', ],
            ],
        ],
        'DeleteCustomLiveStreamTranscodeRequestShape' => [
            'type' => 'structure',
            'members' => [
                'template' => [ 'type' => 'string', 'locationName' => 'template', ],
            ],
        ],
        'AddLiveStreamDomainTranscodeResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'AddLiveStreamDomainTranscodeResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DeleteLiveStreamDomainTranscodeResultShape' => [
            'type' => 'structure',
            'members' => [
                'publishDomain' => [ 'type' => 'string', 'locationName' => 'publishDomain', ],
            ],
        ],
        'AddCustomLiveStreamTranscodeRequestShape' => [
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
        'AddLiveStreamDomainWatermarkResultShape' => [
            'type' => 'structure',
            'members' => [
                'feedback' => [ 'type' => 'boolean', 'locationName' => 'feedback', ],
            ],
        ],
        'DescribeCustomLiveStreamWatermarkConfigResultShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'totalCount' => [ 'type' => 'double', 'locationName' => 'totalCount', ],
                'watermarkConfigs' => [ 'type' => 'list', 'member' => [ 'shape' => 'LiveStreamRecordConfig', ], ],
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
        'AddLiveStreamAppWatermarkRequestShape' => [
            'type' => 'structure',
            'members' => [
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
                'publishDomain' => [ 'type' => 'string', 'locationName' => 'publishDomain', ],
                'template' => [ 'type' => 'string', 'locationName' => 'template', ],
            ],
        ],
        'AddLiveStreamAppWatermarkResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'AddLiveStreamAppWatermarkResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DeleteLiveStreamDomainWatermarkResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DeleteLiveStreamDomainWatermarkResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeCustomLiveStreamWatermarkTemplatesResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeCustomLiveStreamWatermarkTemplatesResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'AddLiveStreamAppWatermarkResultShape' => [
            'type' => 'structure',
            'members' => [
                'feedback' => [ 'type' => 'boolean', 'locationName' => 'feedback', ],
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
        'DeleteLiveStreamDomainWatermarkResultShape' => [
            'type' => 'structure',
            'members' => [
                'feedback' => [ 'type' => 'boolean', 'locationName' => 'feedback', ],
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
        'AddCustomLiveStreamWatermarkTemplateResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'AddCustomLiveStreamWatermarkTemplateResultShape', ],
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
        'DeleteCustomLiveStreamWatermarkTemplateResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DeleteCustomLiveStreamWatermarkTemplateResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DeleteLiveStreamAppWatermarkResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DeleteLiveStreamAppWatermarkResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DeleteLiveStreamAppWatermarkResultShape' => [
            'type' => 'structure',
            'members' => [
                'feedback' => [ 'type' => 'boolean', 'locationName' => 'feedback', ],
            ],
        ],
        'DescribeCustomLiveStreamWatermarkConfigResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeCustomLiveStreamWatermarkConfigResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'AddLiveStreamDomainWatermarkRequestShape' => [
            'type' => 'structure',
            'members' => [
                'publishDomain' => [ 'type' => 'string', 'locationName' => 'publishDomain', ],
                'template' => [ 'type' => 'string', 'locationName' => 'template', ],
            ],
        ],
        'DeleteCustomLiveStreamWatermarkTemplateRequestShape' => [
            'type' => 'structure',
            'members' => [
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
        'AddLiveStreamDomainWatermarkResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'AddLiveStreamDomainWatermarkResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeCustomLiveStreamWatermarkTemplatesResultShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'totalCount' => [ 'type' => 'double', 'locationName' => 'totalCount', ],
                'watermarkTemplates' => [ 'type' => 'list', 'member' => [ 'shape' => 'WatermarkTemplate', ], ],
            ],
        ],
        'DeleteCustomLiveStreamWatermarkTemplateResultShape' => [
            'type' => 'structure',
            'members' => [
                'template' => [ 'type' => 'string', 'locationName' => 'template', ],
            ],
        ],
        'AddCustomLiveStreamWatermarkTemplateResultShape' => [
            'type' => 'structure',
            'members' => [
                'feedback' => [ 'type' => 'boolean', 'locationName' => 'feedback', ],
            ],
        ],
    ],
];
