<?php
// This file was auto-generated
return [
//    'version' => '',
    'metadata' =>
    [
//        'apiVersion' => '',
//        'endpointPrefix' => 'vod',
        'protocol' => 'json',
//        'serviceFullName' => 'vod',
//        'serviceId' => 'vod',
    ],
    'operations' => [
        'ListCategories' => [
            'name' => 'ListCategories',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/categories',
            ],
            'input' => [ 'shape' => 'ListCategoriesRequestShape', ],
            'output' => [ 'shape' => 'ListCategoriesResponseShape', ],
        ],
        'CreateCategory' => [
            'name' => 'CreateCategory',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/categories',
            ],
            'input' => [ 'shape' => 'CreateCategoryRequestShape', ],
            'output' => [ 'shape' => 'CreateCategoryResponseShape', ],
        ],
        'GetCategoryWithChildren' => [
            'name' => 'GetCategoryWithChildren',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/categories/{categoryId}:getWithChildren',
            ],
            'input' => [ 'shape' => 'GetCategoryWithChildrenRequestShape', ],
            'output' => [ 'shape' => 'GetCategoryWithChildrenResponseShape', ],
        ],
        'GetCategory' => [
            'name' => 'GetCategory',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/categories/{categoryId}',
            ],
            'input' => [ 'shape' => 'GetCategoryRequestShape', ],
            'output' => [ 'shape' => 'GetCategoryResponseShape', ],
        ],
        'UpdateCategory' => [
            'name' => 'UpdateCategory',
            'http' => [
                'method' => 'PUT',
                'requestUri' => '/v1/categories/{categoryId}',
            ],
            'input' => [ 'shape' => 'UpdateCategoryRequestShape', ],
            'output' => [ 'shape' => 'UpdateCategoryResponseShape', ],
        ],
        'DeleteCategory' => [
            'name' => 'DeleteCategory',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/categories/{categoryId}',
            ],
            'input' => [ 'shape' => 'DeleteCategoryRequestShape', ],
            'output' => [ 'shape' => 'DeleteCategoryResponseShape', ],
        ],
        'ListDomains' => [
            'name' => 'ListDomains',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/domains',
            ],
            'input' => [ 'shape' => 'ListDomainsRequestShape', ],
            'output' => [ 'shape' => 'ListDomainsResponseShape', ],
        ],
        'CreateDomain' => [
            'name' => 'CreateDomain',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/domains',
            ],
            'input' => [ 'shape' => 'CreateDomainRequestShape', ],
            'output' => [ 'shape' => 'CreateDomainResponseShape', ],
        ],
        'GetDomain' => [
            'name' => 'GetDomain',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/domains/{domainId}',
            ],
            'input' => [ 'shape' => 'GetDomainRequestShape', ],
            'output' => [ 'shape' => 'GetDomainResponseShape', ],
        ],
        'DeleteDomain' => [
            'name' => 'DeleteDomain',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/domains/{domainId}',
            ],
            'input' => [ 'shape' => 'DeleteDomainRequestShape', ],
            'output' => [ 'shape' => 'DeleteDomainResponseShape', ],
        ],
        'EnableDomain' => [
            'name' => 'EnableDomain',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/domains/{domainId}:enable',
            ],
            'input' => [ 'shape' => 'EnableDomainRequestShape', ],
            'output' => [ 'shape' => 'EnableDomainResponseShape', ],
        ],
        'DisableDomain' => [
            'name' => 'DisableDomain',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/domains/{domainId}:disable',
            ],
            'input' => [ 'shape' => 'DisableDomainRequestShape', ],
            'output' => [ 'shape' => 'DisableDomainResponseShape', ],
        ],
        'SetDefaultDomain' => [
            'name' => 'SetDefaultDomain',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/domains/{domainId}:setDefault',
            ],
            'input' => [ 'shape' => 'SetDefaultDomainRequestShape', ],
            'output' => [ 'shape' => 'SetDefaultDomainResponseShape', ],
        ],
        'SetHeader' => [
            'name' => 'SetHeader',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/domains/{domainId}:setHeader',
            ],
            'input' => [ 'shape' => 'SetHeaderRequestShape', ],
            'output' => [ 'shape' => 'SetHeaderResponseShape', ],
        ],
        'ListHeaders' => [
            'name' => 'ListHeaders',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/domains/{domainId}:listHeaders',
            ],
            'input' => [ 'shape' => 'ListHeadersRequestShape', ],
            'output' => [ 'shape' => 'ListHeadersResponseShape', ],
        ],
        'DeleteHeader' => [
            'name' => 'DeleteHeader',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/domains/{domainId}:deleteHeader',
            ],
            'input' => [ 'shape' => 'DeleteHeaderRequestShape', ],
            'output' => [ 'shape' => 'DeleteHeaderResponseShape', ],
        ],
        'SetRefererRule' => [
            'name' => 'SetRefererRule',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/domains/{domainId}:setRefererRule',
            ],
            'input' => [ 'shape' => 'SetRefererRuleRequestShape', ],
            'output' => [ 'shape' => 'SetRefererRuleResponseShape', ],
        ],
        'GetRefererRule' => [
            'name' => 'GetRefererRule',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/domains/{domainId}:getRefererRule',
            ],
            'input' => [ 'shape' => 'GetRefererRuleRequestShape', ],
            'output' => [ 'shape' => 'GetRefererRuleResponseShape', ],
        ],
        'SetURLRule' => [
            'name' => 'SetURLRule',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/domains/{domainId}:setURLRule',
            ],
            'input' => [ 'shape' => 'SetURLRuleRequestShape', ],
            'output' => [ 'shape' => 'SetURLRuleResponseShape', ],
        ],
        'GetURLRule' => [
            'name' => 'GetURLRule',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/domains/{domainId}:getURLRule',
            ],
            'input' => [ 'shape' => 'GetURLRuleRequestShape', ],
            'output' => [ 'shape' => 'GetURLRuleResponseShape', ],
        ],
        'SetIPRule' => [
            'name' => 'SetIPRule',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/domains/{domainId}:setIPRule',
            ],
            'input' => [ 'shape' => 'SetIPRuleRequestShape', ],
            'output' => [ 'shape' => 'SetIPRuleResponseShape', ],
        ],
        'GetIPRule' => [
            'name' => 'GetIPRule',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/domains/{domainId}:getIPRule',
            ],
            'input' => [ 'shape' => 'GetIPRuleRequestShape', ],
            'output' => [ 'shape' => 'GetIPRuleResponseShape', ],
        ],
        'SetHttpSsl' => [
            'name' => 'SetHttpSsl',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/domains/{domainId}:setHttpSsl',
            ],
            'input' => [ 'shape' => 'SetHttpSslRequestShape', ],
            'output' => [ 'shape' => 'SetHttpSslResponseShape', ],
        ],
        'GetHttpSsl' => [
            'name' => 'GetHttpSsl',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/domains/{domainId}:getHttpSsl',
            ],
            'input' => [ 'shape' => 'GetHttpSslRequestShape', ],
            'output' => [ 'shape' => 'GetHttpSslResponseShape', ],
        ],
        'CreateLiveToVodTask' => [
            'name' => 'CreateLiveToVodTask',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/createLiveToVodTask',
            ],
            'input' => [ 'shape' => 'CreateLiveToVodTaskRequestShape', ],
            'output' => [ 'shape' => 'CreateLiveToVodTaskResponseShape', ],
        ],
        'CreateVideoUploadTask' => [
            'name' => 'CreateVideoUploadTask',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/videoUploadTask',
            ],
            'input' => [ 'shape' => 'CreateVideoUploadTaskRequestShape', ],
            'output' => [ 'shape' => 'CreateVideoUploadTaskResponseShape', ],
        ],
        'RefreshVideoUploadTask' => [
            'name' => 'RefreshVideoUploadTask',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/videoUploadTask:refresh',
            ],
            'input' => [ 'shape' => 'RefreshVideoUploadTaskRequestShape', ],
            'output' => [ 'shape' => 'RefreshVideoUploadTaskResponseShape', ],
        ],
        'CreateImageUploadTask' => [
            'name' => 'CreateImageUploadTask',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/imageUploadTask',
            ],
            'input' => [ 'shape' => 'CreateImageUploadTaskRequestShape', ],
            'output' => [ 'shape' => 'CreateImageUploadTaskResponseShape', ],
        ],
        'SubmitQualityDetectionJob' => [
            'name' => 'SubmitQualityDetectionJob',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/qualityDetectionJobs:submit',
            ],
            'input' => [ 'shape' => 'SubmitQualityDetectionJobRequestShape', ],
            'output' => [ 'shape' => 'SubmitQualityDetectionJobResponseShape', ],
        ],
        'BatchSubmitQualityDetectionJobs' => [
            'name' => 'BatchSubmitQualityDetectionJobs',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/qualityDetectionJobs:batchSubmit',
            ],
            'input' => [ 'shape' => 'BatchSubmitQualityDetectionJobsRequestShape', ],
            'output' => [ 'shape' => 'BatchSubmitQualityDetectionJobsResponseShape', ],
        ],
        'ListQualityDetectionTemplates' => [
            'name' => 'ListQualityDetectionTemplates',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/qualityDetectionTemplates',
            ],
            'input' => [ 'shape' => 'ListQualityDetectionTemplatesRequestShape', ],
            'output' => [ 'shape' => 'ListQualityDetectionTemplatesResponseShape', ],
        ],
        'CreateQualityDetectionTemplate' => [
            'name' => 'CreateQualityDetectionTemplate',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/qualityDetectionTemplates',
            ],
            'input' => [ 'shape' => 'CreateQualityDetectionTemplateRequestShape', ],
            'output' => [ 'shape' => 'CreateQualityDetectionTemplateResponseShape', ],
        ],
        'GetQualityDetectionTemplate' => [
            'name' => 'GetQualityDetectionTemplate',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/qualityDetectionTemplates/{templateId}',
            ],
            'input' => [ 'shape' => 'GetQualityDetectionTemplateRequestShape', ],
            'output' => [ 'shape' => 'GetQualityDetectionTemplateResponseShape', ],
        ],
        'UpdateQualityDetectionTemplate' => [
            'name' => 'UpdateQualityDetectionTemplate',
            'http' => [
                'method' => 'PUT',
                'requestUri' => '/v1/qualityDetectionTemplates/{templateId}',
            ],
            'input' => [ 'shape' => 'UpdateQualityDetectionTemplateRequestShape', ],
            'output' => [ 'shape' => 'UpdateQualityDetectionTemplateResponseShape', ],
        ],
        'DeleteQualityDetectionTemplate' => [
            'name' => 'DeleteQualityDetectionTemplate',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/qualityDetectionTemplates/{templateId}',
            ],
            'input' => [ 'shape' => 'DeleteQualityDetectionTemplateRequestShape', ],
            'output' => [ 'shape' => 'DeleteQualityDetectionTemplateResponseShape', ],
        ],
        'ListSnapshotTemplates' => [
            'name' => 'ListSnapshotTemplates',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/snapshotTemplates',
            ],
            'input' => [ 'shape' => 'ListSnapshotTemplatesRequestShape', ],
            'output' => [ 'shape' => 'ListSnapshotTemplatesResponseShape', ],
        ],
        'CreateSnapshotTemplate' => [
            'name' => 'CreateSnapshotTemplate',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/snapshotTemplates',
            ],
            'input' => [ 'shape' => 'CreateSnapshotTemplateRequestShape', ],
            'output' => [ 'shape' => 'CreateSnapshotTemplateResponseShape', ],
        ],
        'GetSnapshotTemplate' => [
            'name' => 'GetSnapshotTemplate',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/snapshotTemplates/{templateId}',
            ],
            'input' => [ 'shape' => 'GetSnapshotTemplateRequestShape', ],
            'output' => [ 'shape' => 'GetSnapshotTemplateResponseShape', ],
        ],
        'UpdateSnapshotTemplate' => [
            'name' => 'UpdateSnapshotTemplate',
            'http' => [
                'method' => 'PATCH',
                'requestUri' => '/v1/snapshotTemplates/{templateId}',
            ],
            'input' => [ 'shape' => 'UpdateSnapshotTemplateRequestShape', ],
            'output' => [ 'shape' => 'UpdateSnapshotTemplateResponseShape', ],
        ],
        'DeleteSnapshotTemplate' => [
            'name' => 'DeleteSnapshotTemplate',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/snapshotTemplates/{templateId}',
            ],
            'input' => [ 'shape' => 'DeleteSnapshotTemplateRequestShape', ],
            'output' => [ 'shape' => 'DeleteSnapshotTemplateResponseShape', ],
        ],
        'SubmitTranscodeJob' => [
            'name' => 'SubmitTranscodeJob',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/transcodeTasks:submitJob',
            ],
            'input' => [ 'shape' => 'SubmitTranscodeJobRequestShape', ],
            'output' => [ 'shape' => 'SubmitTranscodeJobResponseShape', ],
        ],
        'BatchSubmitTranscodeJobs' => [
            'name' => 'BatchSubmitTranscodeJobs',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/transcodeTasks:batchSubmitJobs',
            ],
            'input' => [ 'shape' => 'BatchSubmitTranscodeJobsRequestShape', ],
            'output' => [ 'shape' => 'BatchSubmitTranscodeJobsResponseShape', ],
        ],
        'GetTranscodeSummaries' => [
            'name' => 'GetTranscodeSummaries',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/transcode:summary',
            ],
            'input' => [ 'shape' => 'GetTranscodeSummariesRequestShape', ],
            'output' => [ 'shape' => 'GetTranscodeSummariesResponseShape', ],
        ],
        'GetTranscodeJobSummaries' => [
            'name' => 'GetTranscodeJobSummaries',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/transcodeJobs:summary',
            ],
            'input' => [ 'shape' => 'GetTranscodeJobSummariesRequestShape', ],
            'output' => [ 'shape' => 'GetTranscodeJobSummariesResponseShape', ],
        ],
        'GetTranscodeTaskSummaries' => [
            'name' => 'GetTranscodeTaskSummaries',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/transcodeTasks:summary',
            ],
            'input' => [ 'shape' => 'GetTranscodeTaskSummariesRequestShape', ],
            'output' => [ 'shape' => 'GetTranscodeTaskSummariesResponseShape', ],
        ],
        'SubmitTranscodeJob' => [
            'name' => 'SubmitTranscodeJob',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/transcodeTasks:submitJob',
            ],
            'input' => [ 'shape' => 'SubmitTranscodeJobRequestShape', ],
            'output' => [ 'shape' => 'SubmitTranscodeJobResponseShape', ],
        ],
        'BatchSubmitTranscodeJobs' => [
            'name' => 'BatchSubmitTranscodeJobs',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/transcodeTasks:batchSubmitJobs',
            ],
            'input' => [ 'shape' => 'BatchSubmitTranscodeJobsRequestShape', ],
            'output' => [ 'shape' => 'BatchSubmitTranscodeJobsResponseShape', ],
        ],
        'ListTranscodeTemplates' => [
            'name' => 'ListTranscodeTemplates',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/transcodeTemplates',
            ],
            'input' => [ 'shape' => 'ListTranscodeTemplatesRequestShape', ],
            'output' => [ 'shape' => 'ListTranscodeTemplatesResponseShape', ],
        ],
        'CreateTranscodeTemplate' => [
            'name' => 'CreateTranscodeTemplate',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/transcodeTemplates',
            ],
            'input' => [ 'shape' => 'CreateTranscodeTemplateRequestShape', ],
            'output' => [ 'shape' => 'CreateTranscodeTemplateResponseShape', ],
        ],
        'GetTranscodeTemplate' => [
            'name' => 'GetTranscodeTemplate',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/transcodeTemplates/{templateId}',
            ],
            'input' => [ 'shape' => 'GetTranscodeTemplateRequestShape', ],
            'output' => [ 'shape' => 'GetTranscodeTemplateResponseShape', ],
        ],
        'UpdateTranscodeTemplate' => [
            'name' => 'UpdateTranscodeTemplate',
            'http' => [
                'method' => 'PUT',
                'requestUri' => '/v1/transcodeTemplates/{templateId}',
            ],
            'input' => [ 'shape' => 'UpdateTranscodeTemplateRequestShape', ],
            'output' => [ 'shape' => 'UpdateTranscodeTemplateResponseShape', ],
        ],
        'DeleteTranscodeTemplate' => [
            'name' => 'DeleteTranscodeTemplate',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/transcodeTemplates/{templateId}',
            ],
            'input' => [ 'shape' => 'DeleteTranscodeTemplateRequestShape', ],
            'output' => [ 'shape' => 'DeleteTranscodeTemplateResponseShape', ],
        ],
        'ListTranscodeTemplateGroups' => [
            'name' => 'ListTranscodeTemplateGroups',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/transcodeTemplateGroups',
            ],
            'input' => [ 'shape' => 'ListTranscodeTemplateGroupsRequestShape', ],
            'output' => [ 'shape' => 'ListTranscodeTemplateGroupsResponseShape', ],
        ],
        'CreateTranscodeTemplateGroup' => [
            'name' => 'CreateTranscodeTemplateGroup',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/transcodeTemplateGroups',
            ],
            'input' => [ 'shape' => 'CreateTranscodeTemplateGroupRequestShape', ],
            'output' => [ 'shape' => 'CreateTranscodeTemplateGroupResponseShape', ],
        ],
        'GetTranscodeTemplateGroup' => [
            'name' => 'GetTranscodeTemplateGroup',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/transcodeTemplateGroups/{groupId}',
            ],
            'input' => [ 'shape' => 'GetTranscodeTemplateGroupRequestShape', ],
            'output' => [ 'shape' => 'GetTranscodeTemplateGroupResponseShape', ],
        ],
        'UpdateTranscodeTemplateGroup' => [
            'name' => 'UpdateTranscodeTemplateGroup',
            'http' => [
                'method' => 'PUT',
                'requestUri' => '/v1/transcodeTemplateGroups/{groupId}',
            ],
            'input' => [ 'shape' => 'UpdateTranscodeTemplateGroupRequestShape', ],
            'output' => [ 'shape' => 'UpdateTranscodeTemplateGroupResponseShape', ],
        ],
        'DeleteTranscodeTemplateGroup' => [
            'name' => 'DeleteTranscodeTemplateGroup',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/transcodeTemplateGroups/{groupId}',
            ],
            'input' => [ 'shape' => 'DeleteTranscodeTemplateGroupRequestShape', ],
            'output' => [ 'shape' => 'DeleteTranscodeTemplateGroupResponseShape', ],
        ],
        'DeleteGroupedTranscodeTemplates' => [
            'name' => 'DeleteGroupedTranscodeTemplates',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/transcodeTemplateGroups:deleteGroupedTranscodeTemplates',
            ],
            'input' => [ 'shape' => 'DeleteGroupedTranscodeTemplatesRequestShape', ],
            'output' => [ 'shape' => 'DeleteGroupedTranscodeTemplatesResponseShape', ],
        ],
        'ListVideos' => [
            'name' => 'ListVideos',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/videos',
            ],
            'input' => [ 'shape' => 'ListVideosRequestShape', ],
            'output' => [ 'shape' => 'ListVideosResponseShape', ],
        ],
        'GetVideo' => [
            'name' => 'GetVideo',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/videos/{videoId}',
            ],
            'input' => [ 'shape' => 'GetVideoRequestShape', ],
            'output' => [ 'shape' => 'GetVideoResponseShape', ],
        ],
        'UpdateVideo' => [
            'name' => 'UpdateVideo',
            'http' => [
                'method' => 'PUT',
                'requestUri' => '/v1/videos/{videoId}',
            ],
            'input' => [ 'shape' => 'UpdateVideoRequestShape', ],
            'output' => [ 'shape' => 'UpdateVideoResponseShape', ],
        ],
        'DeleteVideo' => [
            'name' => 'DeleteVideo',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/videos/{videoId}',
            ],
            'input' => [ 'shape' => 'DeleteVideoRequestShape', ],
            'output' => [ 'shape' => 'DeleteVideoResponseShape', ],
        ],
        'BatchDeleteVideos' => [
            'name' => 'BatchDeleteVideos',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/videos:batchDelete',
            ],
            'input' => [ 'shape' => 'BatchDeleteVideosRequestShape', ],
            'output' => [ 'shape' => 'BatchDeleteVideosResponseShape', ],
        ],
        'BatchUpdateVideos' => [
            'name' => 'BatchUpdateVideos',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/videos:batchUpdate',
            ],
            'input' => [ 'shape' => 'BatchUpdateVideosRequestShape', ],
            'output' => [ 'shape' => 'BatchUpdateVideosResponseShape', ],
        ],
        'GetVideoPlayInfo' => [
            'name' => 'GetVideoPlayInfo',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/videos/{videoId}:getPlayInfo',
            ],
            'input' => [ 'shape' => 'GetVideoPlayInfoRequestShape', ],
            'output' => [ 'shape' => 'GetVideoPlayInfoResponseShape', ],
        ],
        'DeleteVideoStreams' => [
            'name' => 'DeleteVideoStreams',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/videos/{videoId}:deleteStreams',
            ],
            'input' => [ 'shape' => 'DeleteVideoStreamsRequestShape', ],
            'output' => [ 'shape' => 'DeleteVideoStreamsResponseShape', ],
        ],
        'VideoAudit' => [
            'name' => 'VideoAudit',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/videos/{videoId}:audit',
            ],
            'input' => [ 'shape' => 'VideoAuditRequestShape', ],
            'output' => [ 'shape' => 'VideoAuditResponseShape', ],
        ],
        'GetVideoSourceInfo' => [
            'name' => 'GetVideoSourceInfo',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/videos/{videoId}:getSourceInfo',
            ],
            'input' => [ 'shape' => 'GetVideoSourceInfoRequestShape', ],
            'output' => [ 'shape' => 'GetVideoSourceInfoResponseShape', ],
        ],
        'ListWatermarks' => [
            'name' => 'ListWatermarks',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/watermarks',
            ],
            'input' => [ 'shape' => 'ListWatermarksRequestShape', ],
            'output' => [ 'shape' => 'ListWatermarksResponseShape', ],
        ],
        'CreateWatermark' => [
            'name' => 'CreateWatermark',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/watermarks',
            ],
            'input' => [ 'shape' => 'CreateWatermarkRequestShape', ],
            'output' => [ 'shape' => 'CreateWatermarkResponseShape', ],
        ],
        'GetWatermark' => [
            'name' => 'GetWatermark',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/watermarks/{watermarkId}',
            ],
            'input' => [ 'shape' => 'GetWatermarkRequestShape', ],
            'output' => [ 'shape' => 'GetWatermarkResponseShape', ],
        ],
        'UpdateWatermark' => [
            'name' => 'UpdateWatermark',
            'http' => [
                'method' => 'PUT',
                'requestUri' => '/v1/watermarks/{watermarkId}',
            ],
            'input' => [ 'shape' => 'UpdateWatermarkRequestShape', ],
            'output' => [ 'shape' => 'UpdateWatermarkResponseShape', ],
        ],
        'DeleteWatermark' => [
            'name' => 'DeleteWatermark',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/watermarks/{watermarkId}',
            ],
            'input' => [ 'shape' => 'DeleteWatermarkRequestShape', ],
            'output' => [ 'shape' => 'DeleteWatermarkResponseShape', ],
        ],
    ],
    'shapes' => [
        'CreateCategoryRequestObject' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'parentId' => [ 'type' => 'long', 'locationName' => 'parentId', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
            ],
        ],
        'UpdateCategoryRequestObject' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'parentId' => [ 'type' => 'long', 'locationName' => 'parentId', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
            ],
        ],
        'CategoryObject' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'long', 'locationName' => 'id', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'level' => [ 'type' => 'integer', 'locationName' => 'level', ],
                'parentId' => [ 'type' => 'long', 'locationName' => 'parentId', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'updateTime' => [ 'type' => 'string', 'locationName' => 'updateTime', ],
            ],
        ],
        'GetCategoryWithChildrenResultObject' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'long', 'locationName' => 'id', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'level' => [ 'type' => 'integer', 'locationName' => 'level', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'children' => [ 'type' => 'list', 'member' => [ 'shape' => 'SubCategory', ], ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'updateTime' => [ 'type' => 'string', 'locationName' => 'updateTime', ],
            ],
        ],
        'ListCategoriesResultObject' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'totalElements' => [ 'type' => 'integer', 'locationName' => 'totalElements', ],
                'totalPages' => [ 'type' => 'integer', 'locationName' => 'totalPages', ],
                'content' => [ 'type' => 'list', 'member' => [ 'shape' => 'CategoryObject', ], ],
            ],
        ],
        'CategoryTreeNode' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'long', 'locationName' => 'id', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'level' => [ 'type' => 'integer', 'locationName' => 'level', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'children' => [ 'type' => 'list', 'member' => [ 'shape' => 'CategoryTreeNode', ], ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'updateTime' => [ 'type' => 'string', 'locationName' => 'updateTime', ],
            ],
        ],
        'ListAllCategoriesResultObject' => [
            'type' => 'structure',
            'members' => [
                'flatResult' => [ 'type' => 'list', 'member' => [ 'shape' => 'CategoryObject', ], ],
                'treeResult' =>  [ 'shape' => 'CategoryTreeNode', ],
            ],
        ],
        'SubCategory' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'long', 'locationName' => 'id', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'level' => [ 'type' => 'integer', 'locationName' => 'level', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'updateTime' => [ 'type' => 'string', 'locationName' => 'updateTime', ],
            ],
        ],
        'Sort' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'direction' => [ 'type' => 'string', 'locationName' => 'direction', ],
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
        'CreateDomainRequestObject' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
            ],
        ],
        'SetRefererRuleRequestObject' => [
            'type' => 'structure',
            'members' => [
                'config' =>  [ 'shape' => 'RefererRuleConfigObject', ],
                'enabled' => [ 'type' => 'boolean', 'locationName' => 'enabled', ],
            ],
        ],
        'SetIPRuleRequestObject' => [
            'type' => 'structure',
            'members' => [
                'config' =>  [ 'shape' => 'IPRuleConfigObject', ],
                'enabled' => [ 'type' => 'boolean', 'locationName' => 'enabled', ],
            ],
        ],
        'DeleteHeaderRequestObject' => [
            'type' => 'structure',
            'members' => [
                'headerName' => [ 'type' => 'string', 'locationName' => 'headerName', ],
                'headerType' => [ 'type' => 'string', 'locationName' => 'headerType', ],
            ],
        ],
        'GetAllTypeRuleResultObject' => [
            'type' => 'structure',
            'members' => [
                'referer' =>  [ 'shape' => 'GetRefererRuleResultObject', ],
                'url' =>  [ 'shape' => 'GetURLRuleResultObject', ],
                'ip' =>  [ 'shape' => 'GetIPRuleResultObject', ],
            ],
        ],
        'VerifyDomainResultObject' => [
            'type' => 'structure',
            'members' => [
                'domainName' => [ 'type' => 'string', 'locationName' => 'domainName', ],
                'verified' => [ 'type' => 'boolean', 'locationName' => 'verified', ],
                'icpInfo' => [ 'type' => 'string', 'locationName' => 'icpInfo', ],
            ],
        ],
        'GetIPRuleResultObject' => [
            'type' => 'structure',
            'members' => [
                'ruleType' => [ 'type' => 'string', 'locationName' => 'ruleType', ],
                'config' =>  [ 'shape' => 'IPRuleConfigObject', ],
                'enabled' => [ 'type' => 'boolean', 'locationName' => 'enabled', ],
            ],
        ],
        'ListHeadersResultObject' => [
            'type' => 'structure',
            'members' => [
                'headers' => [ 'type' => 'list', 'member' => [ 'shape' => 'GetHeaderResultObject', ], ],
            ],
        ],
        'GetURLRuleResultObject' => [
            'type' => 'structure',
            'members' => [
                'ruleType' => [ 'type' => 'string', 'locationName' => 'ruleType', ],
                'config' =>  [ 'shape' => 'URLRuleConfigObject', ],
                'enabled' => [ 'type' => 'boolean', 'locationName' => 'enabled', ],
            ],
        ],
        'SetURLRuleRequestObject' => [
            'type' => 'structure',
            'members' => [
                'config' =>  [ 'shape' => 'URLRuleConfigObject', ],
                'enabled' => [ 'type' => 'boolean', 'locationName' => 'enabled', ],
            ],
        ],
        'IPRuleConfigObject' => [
            'type' => 'structure',
            'members' => [
                'ips' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'RefererRuleConfigObject' => [
            'type' => 'structure',
            'members' => [
                'strategy' => [ 'type' => 'string', 'locationName' => 'strategy', ],
                'domains' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'allowBlank' => [ 'type' => 'boolean', 'locationName' => 'allowBlank', ],
            ],
        ],
        'GetHeaderResultObject' => [
            'type' => 'structure',
            'members' => [
                'headerName' => [ 'type' => 'string', 'locationName' => 'headerName', ],
                'headerValue' => [ 'type' => 'string', 'locationName' => 'headerValue', ],
                'headerType' => [ 'type' => 'string', 'locationName' => 'headerType', ],
            ],
        ],
        'SetHttpSslRequestObject' => [
            'type' => 'structure',
            'members' => [
                'source' => [ 'type' => 'string', 'locationName' => 'source', ],
                'title' => [ 'type' => 'string', 'locationName' => 'title', ],
                'sslCert' => [ 'type' => 'string', 'locationName' => 'sslCert', ],
                'sslKey' => [ 'type' => 'string', 'locationName' => 'sslKey', ],
                'jumpType' => [ 'type' => 'string', 'locationName' => 'jumpType', ],
                'enabled' => [ 'type' => 'boolean', 'locationName' => 'enabled', ],
            ],
        ],
        'GetRefererRuleResultObject' => [
            'type' => 'structure',
            'members' => [
                'ruleType' => [ 'type' => 'string', 'locationName' => 'ruleType', ],
                'config' =>  [ 'shape' => 'RefererRuleConfigObject', ],
                'enabled' => [ 'type' => 'boolean', 'locationName' => 'enabled', ],
            ],
        ],
        'SetHeaderRequestObject' => [
            'type' => 'structure',
            'members' => [
                'headerName' => [ 'type' => 'string', 'locationName' => 'headerName', ],
                'headerValue' => [ 'type' => 'string', 'locationName' => 'headerValue', ],
                'headerType' => [ 'type' => 'string', 'locationName' => 'headerType', ],
            ],
        ],
        'ListDomainsResultObject' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'totalElements' => [ 'type' => 'integer', 'locationName' => 'totalElements', ],
                'totalPages' => [ 'type' => 'integer', 'locationName' => 'totalPages', ],
                'content' => [ 'type' => 'list', 'member' => [ 'shape' => 'DomainObject', ], ],
            ],
        ],
        'GetHttpSslResultObject' => [
            'type' => 'structure',
            'members' => [
                'source' => [ 'type' => 'string', 'locationName' => 'source', ],
                'title' => [ 'type' => 'string', 'locationName' => 'title', ],
                'sslCert' => [ 'type' => 'string', 'locationName' => 'sslCert', ],
                'sslKey' => [ 'type' => 'string', 'locationName' => 'sslKey', ],
                'jumpType' => [ 'type' => 'string', 'locationName' => 'jumpType', ],
                'enabled' => [ 'type' => 'boolean', 'locationName' => 'enabled', ],
            ],
        ],
        'DomainObject' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'cname' => [ 'type' => 'string', 'locationName' => 'cname', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'source' => [ 'type' => 'string', 'locationName' => 'source', ],
                'asDefault' => [ 'type' => 'boolean', 'locationName' => 'asDefault', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'updateTime' => [ 'type' => 'string', 'locationName' => 'updateTime', ],
            ],
        ],
        'URLRuleConfigObject' => [
            'type' => 'structure',
            'members' => [
                'authType' => [ 'type' => 'string', 'locationName' => 'authType', ],
                'authKey' => [ 'type' => 'string', 'locationName' => 'authKey', ],
            ],
        ],
        'UploadCallbackRequestObject' => [
            'type' => 'structure',
            'members' => [
                'status' => [ 'type' => 'integer', 'locationName' => 'status', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'format' => [ 'type' => 'string', 'locationName' => 'format', ],
                'size' => [ 'type' => 'long', 'locationName' => 'size', ],
                'categoryId' => [ 'type' => 'long', 'locationName' => 'categoryId', ],
                'coderateId' => [ 'type' => 'string', 'locationName' => 'coderateId', ],
                'logoId' => [ 'type' => 'string', 'locationName' => 'logoId', ],
                'url' => [ 'type' => 'string', 'locationName' => 'url', ],
                'endpoint' => [ 'type' => 'string', 'locationName' => 'endpoint', ],
                'bucket' => [ 'type' => 'string', 'locationName' => 'bucket', ],
            ],
        ],
        'UploadCallbackResultObject' => [
            'type' => 'structure',
            'members' => [
                'mid' => [ 'type' => 'string', 'locationName' => 'mid', ],
            ],
        ],
        'RecordTime' => [
            'type' => 'structure',
            'members' => [
                'startTime' => [ 'type' => 'string', 'locationName' => 'startTime', ],
                'endTime' => [ 'type' => 'string', 'locationName' => 'endTime', ],
            ],
        ],
        'CreateLiveToVodTaskRequestObject' => [
            'type' => 'structure',
            'members' => [
                'title' => [ 'type' => 'string', 'locationName' => 'title', ],
                'fileName' => [ 'type' => 'string', 'locationName' => 'fileName', ],
                'fileSize' => [ 'type' => 'long', 'locationName' => 'fileSize', ],
                'coverUrl' => [ 'type' => 'string', 'locationName' => 'coverUrl', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'categoryId' => [ 'type' => 'long', 'locationName' => 'categoryId', ],
                'tags' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'transcodeTemplateGroupId' => [ 'type' => 'string', 'locationName' => 'transcodeTemplateGroupId', ],
                'transcodeTemplateIds' => [ 'type' => 'list', 'member' => [ 'type' => 'long', ], ],
                'watermarkIds' => [ 'type' => 'list', 'member' => [ 'type' => 'long', ], ],
                'publishDomain' => [ 'type' => 'string', 'locationName' => 'publishDomain', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
                'streamName' => [ 'type' => 'string', 'locationName' => 'streamName', ],
                'recordTimes' => [ 'type' => 'list', 'member' => [ 'shape' => 'RecordTime', ], ],
                'recordFileType' => [ 'type' => 'string', 'locationName' => 'recordFileType', ],
                'taskExternalId' => [ 'type' => 'string', 'locationName' => 'taskExternalId', ],
                'priority' => [ 'type' => 'string', 'locationName' => 'priority', ],
            ],
        ],
        'VideoUploadTaskObject' => [
            'type' => 'structure',
            'members' => [
                'videoId' => [ 'type' => 'string', 'locationName' => 'videoId', ],
                'uploadUrl' => [ 'type' => 'string', 'locationName' => 'uploadUrl', ],
                'authToken' => [ 'type' => 'string', 'locationName' => 'authToken', ],
            ],
        ],
        'CreateVideoUploadTaskRequestObject' => [
            'type' => 'structure',
            'members' => [
                'httpMethod' => [ 'type' => 'string', 'locationName' => 'httpMethod', ],
                'title' => [ 'type' => 'string', 'locationName' => 'title', ],
                'fileName' => [ 'type' => 'string', 'locationName' => 'fileName', ],
                'fileSize' => [ 'type' => 'long', 'locationName' => 'fileSize', ],
                'coverUrl' => [ 'type' => 'string', 'locationName' => 'coverUrl', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'categoryId' => [ 'type' => 'long', 'locationName' => 'categoryId', ],
                'tags' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'transcodeTemplateGroupId' => [ 'type' => 'string', 'locationName' => 'transcodeTemplateGroupId', ],
                'transcodeTemplateIds' => [ 'type' => 'list', 'member' => [ 'type' => 'long', ], ],
                'watermarkIds' => [ 'type' => 'list', 'member' => [ 'type' => 'long', ], ],
                'userData' => [ 'type' => 'string', 'locationName' => 'userData', ],
            ],
        ],
        'CreateImageUploadTaskRequestObject' => [
            'type' => 'structure',
            'members' => [
                'httpMethod' => [ 'type' => 'string', 'locationName' => 'httpMethod', ],
                'fileName' => [ 'type' => 'string', 'locationName' => 'fileName', ],
                'fileSize' => [ 'type' => 'long', 'locationName' => 'fileSize', ],
            ],
        ],
        'ImageUploadTaskObject' => [
            'type' => 'structure',
            'members' => [
                'imageId' => [ 'type' => 'string', 'locationName' => 'imageId', ],
                'uploadUrl' => [ 'type' => 'string', 'locationName' => 'uploadUrl', ],
            ],
        ],
        'SubmitQualityDetectionJobRequestObject' => [
            'type' => 'structure',
            'members' => [
                'mediaId' => [ 'type' => 'string', 'locationName' => 'mediaId', ],
                'templateIds' => [ 'type' => 'list', 'member' => [ 'type' => 'long', ], ],
            ],
        ],
        'BatchSubmitQualityDetectionJobsRequestObject' => [
            'type' => 'structure',
            'members' => [
                'bulkItems' => [ 'type' => 'list', 'member' => [ 'shape' => 'SubmitQualityDetectionJobRequestObject', ], ],
            ],
        ],
        'QualityDetectionTemplateObject' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'long', 'locationName' => 'id', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'templateType' => [ 'type' => 'string', 'locationName' => 'templateType', ],
                'detections' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'updateTime' => [ 'type' => 'string', 'locationName' => 'updateTime', ],
            ],
        ],
        'UpdateQualityDetectionTemplateRequestObject' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'detections' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'ListQualityDetectionTemplatesResultObject' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'totalElements' => [ 'type' => 'integer', 'locationName' => 'totalElements', ],
                'totalPages' => [ 'type' => 'integer', 'locationName' => 'totalPages', ],
                'content' => [ 'type' => 'list', 'member' => [ 'shape' => 'QualityDetectionTemplateObject', ], ],
            ],
        ],
        'CreateQualityDetectionTemplateRequestObject' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'templateType' => [ 'type' => 'string', 'locationName' => 'templateType', ],
                'detections' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'CreateSnapshotTemplateRequestInfo' => [
            'type' => 'structure',
            'members' => [
                'templateName' => [ 'type' => 'string', 'locationName' => 'templateName', ],
                'templateType' => [ 'type' => 'string', 'locationName' => 'templateType', ],
                'templateConfig' => [ 'type' => 'string', 'locationName' => 'templateConfig', ],
            ],
        ],
        'SnapshotTemplateSampleConfigInfo' => [
            'type' => 'structure',
            'members' => [
                'startTime' => [ 'type' => 'long', 'locationName' => 'startTime', ],
                'intervalTime' => [ 'type' => 'long', 'locationName' => 'intervalTime', ],
                'number' => [ 'type' => 'integer', 'locationName' => 'number', ],
                'format' => [ 'type' => 'string', 'locationName' => 'format', ],
                'frameType' => [ 'type' => 'string', 'locationName' => 'frameType', ],
                'width' => [ 'type' => 'integer', 'locationName' => 'width', ],
                'height' => [ 'type' => 'integer', 'locationName' => 'height', ],
                'fillType' => [ 'type' => 'string', 'locationName' => 'fillType', ],
            ],
        ],
        'UpdateSnapshotTemplateRequestInfo' => [
            'type' => 'structure',
            'members' => [
                'templateName' => [ 'type' => 'string', 'locationName' => 'templateName', ],
                'templateConfig' => [ 'type' => 'string', 'locationName' => 'templateConfig', ],
            ],
        ],
        'SnapshotTemplatePageInfo' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'totalElements' => [ 'type' => 'integer', 'locationName' => 'totalElements', ],
                'totalPages' => [ 'type' => 'integer', 'locationName' => 'totalPages', ],
                'content' => [ 'type' => 'list', 'member' => [ 'shape' => 'SnapshotTemplateInfo', ], ],
            ],
        ],
        'SnapshotTemplateSpriteConfigInfo' => [
            'type' => 'structure',
            'members' => [
                'startTime' => [ 'type' => 'long', 'locationName' => 'startTime', ],
                'intervalTime' => [ 'type' => 'long', 'locationName' => 'intervalTime', ],
                'rows' => [ 'type' => 'integer', 'locationName' => 'rows', ],
                'columns' => [ 'type' => 'integer', 'locationName' => 'columns', ],
                'format' => [ 'type' => 'string', 'locationName' => 'format', ],
                'frameType' => [ 'type' => 'string', 'locationName' => 'frameType', ],
                'cellWidth' => [ 'type' => 'integer', 'locationName' => 'cellWidth', ],
                'cellHeight' => [ 'type' => 'integer', 'locationName' => 'cellHeight', ],
                'doKeepShots' => [ 'type' => 'boolean', 'locationName' => 'doKeepShots', ],
            ],
        ],
        'SnapshotTemplateInfo' => [
            'type' => 'structure',
            'members' => [
                'templateId' => [ 'type' => 'string', 'locationName' => 'templateId', ],
                'templateName' => [ 'type' => 'string', 'locationName' => 'templateName', ],
                'templateType' => [ 'type' => 'string', 'locationName' => 'templateType', ],
                'templateConfig' => [ 'type' => 'string', 'locationName' => 'templateConfig', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'updateTime' => [ 'type' => 'string', 'locationName' => 'updateTime', ],
            ],
        ],
        'QueryCDNBasicDataResultObject' => [
            'type' => 'structure',
            'members' => [
                'isps' => [ 'type' => 'list', 'member' => [ 'shape' => 'BasicItem', ], ],
                'areas' => [ 'type' => 'object', 'locationName' => 'areas', ],
            ],
        ],
        'DataItem' => [
            'type' => 'structure',
            'members' => [
                'startTime' => [ 'type' => 'string', 'locationName' => 'startTime', ],
                'endTime' => [ 'type' => 'string', 'locationName' => 'endTime', ],
                'data' => [ 'type' => 'object', 'locationName' => 'data', ],
            ],
        ],
        'BasicItem' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
            ],
        ],
        'QueryCDNStatsDataResultObject' => [
            'type' => 'structure',
            'members' => [
                'startTime' => [ 'type' => 'string', 'locationName' => 'startTime', ],
                'endTime' => [ 'type' => 'string', 'locationName' => 'endTime', ],
                'data' => [ 'type' => 'list', 'member' => [ 'shape' => 'DataItem', ], ],
            ],
        ],
        'BatchSubmitTranscodeJobsRequestObject' => [
            'type' => 'structure',
            'members' => [
                'bulkItems' => [ 'type' => 'list', 'member' => [ 'shape' => 'SubmitTranscodeJobRequestObject', ], ],
            ],
        ],
        'SubmitTranscodeJobRequestObject' => [
            'type' => 'structure',
            'members' => [
                'videoId' => [ 'type' => 'string', 'locationName' => 'videoId', ],
                'templateGroupId' => [ 'type' => 'string', 'locationName' => 'templateGroupId', ],
                'templateIds' => [ 'type' => 'list', 'member' => [ 'type' => 'long', ], ],
                'watermarkIds' => [ 'type' => 'list', 'member' => [ 'type' => 'long', ], ],
            ],
        ],
        'TransTask' => [
            'type' => 'structure',
            'members' => [
                'taskId' => [ 'type' => 'long', 'locationName' => 'taskId', ],
                'packageType' => [ 'type' => 'string', 'locationName' => 'packageType', ],
                'templateId' => [ 'type' => 'long', 'locationName' => 'templateId', ],
                'templateGroupId' => [ 'type' => 'string', 'locationName' => 'templateGroupId', ],
                'templateIds' => [ 'type' => 'list', 'member' => [ 'type' => 'long', ], ],
                'format' => [ 'type' => 'string', 'locationName' => 'format', ],
                'definition' => [ 'type' => 'string', 'locationName' => 'definition', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'progress' => [ 'type' => 'integer', 'locationName' => 'progress', ],
                'errorCode' => [ 'type' => 'string', 'locationName' => 'errorCode', ],
                'errorMessage' => [ 'type' => 'string', 'locationName' => 'errorMessage', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'completeTime' => [ 'type' => 'string', 'locationName' => 'completeTime', ],
            ],
        ],
        'TranscodeTaskSummaries' => [
            'type' => 'structure',
            'members' => [
                'taskSummaries' => [ 'type' => 'list', 'member' => [ 'shape' => 'TranscodeTaskSummary', ], ],
                'failedTaskIds' => [ 'type' => 'list', 'member' => [ 'type' => 'long', ], ],
            ],
        ],
        'SubmitTranscodeJobResultObject' => [
            'type' => 'structure',
            'members' => [
                'tasks' => [ 'type' => 'list', 'member' => [ 'shape' => 'SubmittedTranscodeTask', ], ],
            ],
        ],
        'BatchSubmitTranscodeJobsResultObject' => [
            'type' => 'structure',
            'members' => [
                'tasks' => [ 'type' => 'list', 'member' => [ 'shape' => 'SubmittedTranscodeTask', ], ],
            ],
        ],
        'TranscodeSummaries' => [
            'type' => 'structure',
            'members' => [
                'jobSummaries' => [ 'type' => 'list', 'member' => [ 'shape' => 'TranscodeJobSummary', ], ],
                'failedVideoIds' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'TranscodeJobSummaries' => [
            'type' => 'structure',
            'members' => [
                'jobSummaries' => [ 'type' => 'list', 'member' => [ 'shape' => 'TranscodeJobSummary', ], ],
                'failedJobIds' => [ 'type' => 'list', 'member' => [ 'type' => 'long', ], ],
            ],
        ],
        'SubmittedTranscodeTask' => [
            'type' => 'structure',
            'members' => [
                'taskId' => [ 'type' => 'long', 'locationName' => 'taskId', ],
                'videoId' => [ 'type' => 'string', 'locationName' => 'videoId', ],
                'packageType' => [ 'type' => 'string', 'locationName' => 'packageType', ],
                'templateId' => [ 'type' => 'long', 'locationName' => 'templateId', ],
                'templateGroupId' => [ 'type' => 'string', 'locationName' => 'templateGroupId', ],
                'templateIds' => [ 'type' => 'list', 'member' => [ 'type' => 'long', ], ],
                'watermarkIds' => [ 'type' => 'list', 'member' => [ 'type' => 'long', ], ],
            ],
        ],
        'TranscodeTaskSummary' => [
            'type' => 'structure',
            'members' => [
                'taskId' => [ 'type' => 'long', 'locationName' => 'taskId', ],
                'jobId' => [ 'type' => 'long', 'locationName' => 'jobId', ],
                'videoId' => [ 'type' => 'string', 'locationName' => 'videoId', ],
                'packageType' => [ 'type' => 'string', 'locationName' => 'packageType', ],
                'templateId' => [ 'type' => 'long', 'locationName' => 'templateId', ],
                'templateGroupId' => [ 'type' => 'string', 'locationName' => 'templateGroupId', ],
                'templateIds' => [ 'type' => 'list', 'member' => [ 'type' => 'long', ], ],
                'format' => [ 'type' => 'string', 'locationName' => 'format', ],
                'definition' => [ 'type' => 'string', 'locationName' => 'definition', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'progress' => [ 'type' => 'integer', 'locationName' => 'progress', ],
                'errorCode' => [ 'type' => 'string', 'locationName' => 'errorCode', ],
                'errorMessage' => [ 'type' => 'string', 'locationName' => 'errorMessage', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'completeTime' => [ 'type' => 'string', 'locationName' => 'completeTime', ],
            ],
        ],
        'TranscodeJobSummary' => [
            'type' => 'structure',
            'members' => [
                'jobId' => [ 'type' => 'long', 'locationName' => 'jobId', ],
                'videoId' => [ 'type' => 'string', 'locationName' => 'videoId', ],
                'templateIds' => [ 'type' => 'list', 'member' => [ 'type' => 'long', ], ],
                'templateGroupId' => [ 'type' => 'string', 'locationName' => 'templateGroupId', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'completeTime' => [ 'type' => 'string', 'locationName' => 'completeTime', ],
                'tasks' => [ 'type' => 'list', 'member' => [ 'shape' => 'TransTask', ], ],
            ],
        ],
        'TranscodeTaskObject' => [
            'type' => 'structure',
            'members' => [
                'taskId' => [ 'type' => 'long', 'locationName' => 'taskId', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'mediaType' => [ 'type' => 'integer', 'locationName' => 'mediaType', ],
                'status' => [ 'type' => 'integer', 'locationName' => 'status', ],
                'progress' => [ 'type' => 'string', 'locationName' => 'progress', ],
                'size' => [ 'type' => 'long', 'locationName' => 'size', ],
                'templateId' => [ 'type' => 'integer', 'locationName' => 'templateId', ],
                'bitrate' => [ 'type' => 'long', 'locationName' => 'bitrate', ],
                'codec' => [ 'type' => 'string', 'locationName' => 'codec', ],
                'format' => [ 'type' => 'string', 'locationName' => 'format', ],
                'width' => [ 'type' => 'integer', 'locationName' => 'width', ],
                'height' => [ 'type' => 'integer', 'locationName' => 'height', ],
                'fps' => [ 'type' => 'string', 'locationName' => 'fps', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'updateTime' => [ 'type' => 'string', 'locationName' => 'updateTime', ],
            ],
        ],
        'Encapsulation' => [
            'type' => 'structure',
            'members' => [
                'format' => [ 'type' => 'string', 'locationName' => 'format', ],
            ],
        ],
        'Video' => [
            'type' => 'structure',
            'members' => [
                'codec' => [ 'type' => 'string', 'locationName' => 'codec', ],
                'bitrate' => [ 'type' => 'integer', 'locationName' => 'bitrate', ],
                'fps' => [ 'type' => 'integer', 'locationName' => 'fps', ],
                'width' => [ 'type' => 'integer', 'locationName' => 'width', ],
                'height' => [ 'type' => 'integer', 'locationName' => 'height', ],
            ],
        ],
        'OutFile' => [
            'type' => 'structure',
            'members' => [
                'filePath' => [ 'type' => 'string', 'locationName' => 'filePath', ],
            ],
        ],
        'ListTranscodeTemplatesResultObject' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'totalElements' => [ 'type' => 'integer', 'locationName' => 'totalElements', ],
                'totalPages' => [ 'type' => 'integer', 'locationName' => 'totalPages', ],
                'content' => [ 'type' => 'list', 'member' => [ 'shape' => 'TranscodeTemplateObject', ], ],
            ],
        ],
        'TranscodeTemplateObject' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'long', 'locationName' => 'id', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'video' =>  [ 'shape' => 'Video', ],
                'audio' =>  [ 'shape' => 'Audio', ],
                'encapsulation' =>  [ 'shape' => 'Encapsulation', ],
                'outFile' =>  [ 'shape' => 'OutFile', ],
                'definition' => [ 'type' => 'string', 'locationName' => 'definition', ],
                'source' => [ 'type' => 'string', 'locationName' => 'source', ],
                'templateType' => [ 'type' => 'string', 'locationName' => 'templateType', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'updateTime' => [ 'type' => 'string', 'locationName' => 'updateTime', ],
            ],
        ],
        'Audio' => [
            'type' => 'structure',
            'members' => [
                'codec' => [ 'type' => 'string', 'locationName' => 'codec', ],
                'bitrate' => [ 'type' => 'integer', 'locationName' => 'bitrate', ],
                'sampleRate' => [ 'type' => 'integer', 'locationName' => 'sampleRate', ],
                'channels' => [ 'type' => 'integer', 'locationName' => 'channels', ],
                'comfortable' => [ 'type' => 'boolean', 'locationName' => 'comfortable', ],
            ],
        ],
        'UpdateTranscodeTemplateRequestObject' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'video' =>  [ 'shape' => 'Video', ],
                'audio' =>  [ 'shape' => 'Audio', ],
                'encapsulation' =>  [ 'shape' => 'Encapsulation', ],
                'outFile' =>  [ 'shape' => 'OutFile', ],
                'definition' => [ 'type' => 'string', 'locationName' => 'definition', ],
                'templateType' => [ 'type' => 'string', 'locationName' => 'templateType', ],
            ],
        ],
        'CreateTranscodeTemplateRequestObject' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'video' =>  [ 'shape' => 'Video', ],
                'audio' =>  [ 'shape' => 'Audio', ],
                'encapsulation' =>  [ 'shape' => 'Encapsulation', ],
                'outFile' =>  [ 'shape' => 'OutFile', ],
                'definition' => [ 'type' => 'string', 'locationName' => 'definition', ],
                'templateType' => [ 'type' => 'string', 'locationName' => 'templateType', ],
            ],
        ],
        'TranscodeTemplateGroupData' => [
            'type' => 'structure',
            'members' => [
                'groupId' => [ 'type' => 'string', 'locationName' => 'groupId', ],
                'groupName' => [ 'type' => 'string', 'locationName' => 'groupName', ],
                'templates' => [ 'type' => 'list', 'member' => [ 'shape' => 'GroupedTranscodeTemplateData', ], ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'updateTime' => [ 'type' => 'string', 'locationName' => 'updateTime', ],
            ],
        ],
        'GroupedTranscodeTemplateData' => [
            'type' => 'structure',
            'members' => [
                'templateId' => [ 'type' => 'long', 'locationName' => 'templateId', ],
                'templateName' => [ 'type' => 'string', 'locationName' => 'templateName', ],
                'video' =>  [ 'shape' => 'Video', ],
                'audio' =>  [ 'shape' => 'Audio', ],
                'container' =>  [ 'shape' => 'Container', ],
                'definition' => [ 'type' => 'string', 'locationName' => 'definition', ],
                'templateType' => [ 'type' => 'string', 'locationName' => 'templateType', ],
                'packageType' => [ 'type' => 'string', 'locationName' => 'packageType', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'updateTime' => [ 'type' => 'string', 'locationName' => 'updateTime', ],
            ],
        ],
        'DeleteGroupedTranscodeTemplatesReqData' => [
            'type' => 'structure',
            'members' => [
                'groupId' => [ 'type' => 'string', 'locationName' => 'groupId', ],
                'templateIds' => [ 'type' => 'long', 'locationName' => 'templateIds', ],
            ],
        ],
        'DeleteGroupedTranscodeTemplatesResData' => [
            'type' => 'structure',
            'members' => [
                'groupId' => [ 'type' => 'long', 'locationName' => 'groupId', ],
                'okTemplateIds' => [ 'type' => 'list', 'member' => [ 'type' => 'long', ], ],
                'notExistTemplateIds' => [ 'type' => 'list', 'member' => [ 'type' => 'long', ], ],
            ],
        ],
        'CreateTranscodeTemplateGroupReqData' => [
            'type' => 'structure',
            'members' => [
                'groupName' => [ 'type' => 'string', 'locationName' => 'groupName', ],
                'templates' => [ 'type' => 'list', 'member' => [ 'shape' => 'GroupedTranscodeTemplateData', ], ],
            ],
        ],
        'UpdateTranscodeTemplateGroupReqData' => [
            'type' => 'structure',
            'members' => [
                'groupName' => [ 'type' => 'string', 'locationName' => 'groupName', ],
                'templates' => [ 'type' => 'list', 'member' => [ 'shape' => 'GroupedTranscodeTemplateData', ], ],
            ],
        ],
        'Container' => [
            'type' => 'structure',
            'members' => [
                'format' => [ 'type' => 'string', 'locationName' => 'format', ],
            ],
        ],
        'TranscodeTemplateGroupPageData' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'totalElements' => [ 'type' => 'integer', 'locationName' => 'totalElements', ],
                'totalPages' => [ 'type' => 'integer', 'locationName' => 'totalPages', ],
                'content' => [ 'type' => 'list', 'member' => [ 'shape' => 'TranscodeTemplateGroupData', ], ],
            ],
        ],
        'UploadCallbackReq' => [
            'type' => 'structure',
            'members' => [
                'status' => [ 'type' => 'integer', 'locationName' => 'status', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'format' => [ 'type' => 'string', 'locationName' => 'format', ],
                'size' => [ 'type' => 'long', 'locationName' => 'size', ],
                'categoryId' => [ 'type' => 'long', 'locationName' => 'categoryId', ],
                'coderateId' => [ 'type' => 'string', 'locationName' => 'coderateId', ],
                'logoId' => [ 'type' => 'string', 'locationName' => 'logoId', ],
                'url' => [ 'type' => 'string', 'locationName' => 'url', ],
                'endpoint' => [ 'type' => 'string', 'locationName' => 'endpoint', ],
                'bucket' => [ 'type' => 'string', 'locationName' => 'bucket', ],
            ],
        ],
        'UploadCallbackResp' => [
            'type' => 'structure',
            'members' => [
                'mid' => [ 'type' => 'string', 'locationName' => 'mid', ],
            ],
        ],
        'BatchUpdateVideosResultObject' => [
            'type' => 'structure',
            'members' => [
                'okVideoIds' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'notFoundVideoIds' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'failedVideoIds' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'GetPlayInfoResultObject' => [
            'type' => 'structure',
            'members' => [
                'baseInfo' =>  [ 'shape' => 'VideoBaseInfo', ],
                'playInfoList' => [ 'type' => 'list', 'member' => [ 'shape' => 'VideoPlayInfo', ], ],
            ],
        ],
        'Snapshot' => [
            'type' => 'structure',
            'members' => [
                'imgId' => [ 'type' => 'long', 'locationName' => 'imgId', ],
                'imgUrl' => [ 'type' => 'string', 'locationName' => 'imgUrl', ],
                'width' => [ 'type' => 'integer', 'locationName' => 'width', ],
                'height' => [ 'type' => 'integer', 'locationName' => 'height', ],
            ],
        ],
        'VideoBaseInfo' => [
            'type' => 'structure',
            'members' => [
                'videoId' => [ 'type' => 'string', 'locationName' => 'videoId', ],
                'videoName' => [ 'type' => 'string', 'locationName' => 'videoName', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'categoryId' => [ 'type' => 'long', 'locationName' => 'categoryId', ],
                'categoryName' => [ 'type' => 'string', 'locationName' => 'categoryName', ],
                'tags' => [ 'type' => 'string', 'locationName' => 'tags', ],
                'duration' => [ 'type' => 'long', 'locationName' => 'duration', ],
                'coverUrl' => [ 'type' => 'string', 'locationName' => 'coverUrl', ],
            ],
        ],
        'BatchUpdateVideosRequestObject' => [
            'type' => 'structure',
            'members' => [
                'bulkItems' => [ 'type' => 'list', 'member' => [ 'shape' => 'BatchUpdateVideosBulkItem', ], ],
            ],
        ],
        'VideoObject' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'coverUrl' => [ 'type' => 'string', 'locationName' => 'coverUrl', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'fileSize' => [ 'type' => 'long', 'locationName' => 'fileSize', ],
                'checksum' => [ 'type' => 'string', 'locationName' => 'checksum', ],
                'duration' => [ 'type' => 'long', 'locationName' => 'duration', ],
                'tags' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'categoryId' => [ 'type' => 'long', 'locationName' => 'categoryId', ],
                'categoryName' => [ 'type' => 'string', 'locationName' => 'categoryName', ],
                'snapshots' => [ 'type' => 'list', 'member' => [ 'shape' => 'Snapshot', ], ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'updateTime' => [ 'type' => 'string', 'locationName' => 'updateTime', ],
            ],
        ],
        'UpdateVideoRequestObject' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'categoryId' => [ 'type' => 'long', 'locationName' => 'categoryId', ],
                'tags' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'coverUrl' => [ 'type' => 'string', 'locationName' => 'coverUrl', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
            ],
        ],
        'BatchChangeCategoryRequestObject' => [
            'type' => 'structure',
            'members' => [
                'categoryId' => [ 'type' => 'long', 'locationName' => 'categoryId', ],
                'videoIds' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'VideoSourceInfo' => [
            'type' => 'structure',
            'members' => [
                'videoId' => [ 'type' => 'string', 'locationName' => 'videoId', ],
                'fileName' => [ 'type' => 'string', 'locationName' => 'fileName', ],
                'fileUrl' => [ 'type' => 'string', 'locationName' => 'fileUrl', ],
                'md5' => [ 'type' => 'string', 'locationName' => 'md5', ],
            ],
        ],
        'BatchUpdateVideosBulkItem' => [
            'type' => 'structure',
            'members' => [
                'videoId' => [ 'type' => 'string', 'locationName' => 'videoId', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'categoryId' => [ 'type' => 'long', 'locationName' => 'categoryId', ],
                'tags' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'coverUrl' => [ 'type' => 'string', 'locationName' => 'coverUrl', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
            ],
        ],
        'VideoPlayInfo' => [
            'type' => 'structure',
            'members' => [
                'taskId' => [ 'type' => 'string', 'locationName' => 'taskId', ],
                'definition' => [ 'type' => 'string', 'locationName' => 'definition', ],
                'mediaType' => [ 'type' => 'integer', 'locationName' => 'mediaType', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'url' => [ 'type' => 'string', 'locationName' => 'url', ],
                'size' => [ 'type' => 'long', 'locationName' => 'size', ],
                'duration' => [ 'type' => 'long', 'locationName' => 'duration', ],
                'bitrate' => [ 'type' => 'long', 'locationName' => 'bitrate', ],
                'codec' => [ 'type' => 'string', 'locationName' => 'codec', ],
                'format' => [ 'type' => 'string', 'locationName' => 'format', ],
                'width' => [ 'type' => 'integer', 'locationName' => 'width', ],
                'height' => [ 'type' => 'integer', 'locationName' => 'height', ],
                'fps' => [ 'type' => 'string', 'locationName' => 'fps', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'updateTime' => [ 'type' => 'string', 'locationName' => 'updateTime', ],
            ],
        ],
        'DeleteVideoStreamsRequestObject' => [
            'type' => 'structure',
            'members' => [
                'taskIds' => [ 'type' => 'list', 'member' => [ 'type' => 'long', ], ],
            ],
        ],
        'DeleteVideoStreamsResultObject' => [
            'type' => 'structure',
            'members' => [
                'okTaskIds' => [ 'type' => 'list', 'member' => [ 'type' => 'long', ], ],
                'notFoundTaskIds' => [ 'type' => 'list', 'member' => [ 'type' => 'long', ], ],
                'failedTaskIds' => [ 'type' => 'list', 'member' => [ 'type' => 'long', ], ],
            ],
        ],
        'AuditVideoRequestObject' => [
            'type' => 'structure',
            'members' => [
                'auditResult' => [ 'type' => 'string', 'locationName' => 'auditResult', ],
            ],
        ],
        'ListVideosResultObject' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'totalElements' => [ 'type' => 'integer', 'locationName' => 'totalElements', ],
                'totalPages' => [ 'type' => 'integer', 'locationName' => 'totalPages', ],
                'content' => [ 'type' => 'list', 'member' => [ 'shape' => 'VideoObject', ], ],
            ],
        ],
        'BatchDeleteVideosRequestObject' => [
            'type' => 'structure',
            'members' => [
                'videoIds' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'BatchChangeCategoryResultObject' => [
            'type' => 'structure',
            'members' => [
                'okVideoIds' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'notFoundVideoIds' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'BatchDeleteVideosResultObject' => [
            'type' => 'structure',
            'members' => [
                'okVideoIds' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'notFoundVideoIds' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'failedVideoIds' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'NotifyConfig' => [
            'type' => 'structure',
            'members' => [
                'notifyId' => [ 'type' => 'long', 'locationName' => 'notifyId', ],
                'type' => [ 'type' => 'integer', 'locationName' => 'type', ],
                'notifyFlag' => [ 'type' => 'integer', 'locationName' => 'notifyFlag', ],
                'notifyUrl' => [ 'type' => 'string', 'locationName' => 'notifyUrl', ],
                'callType' => [ 'type' => 'string', 'locationName' => 'callType', ],
                'notifyKey' => [ 'type' => 'string', 'locationName' => 'notifyKey', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'updateTime' => [ 'type' => 'string', 'locationName' => 'updateTime', ],
            ],
        ],
        'EstimateData' => [
            'type' => 'structure',
            'members' => [
                'timestamp' => [ 'type' => 'long', 'locationName' => 'timestamp', ],
                'total' => [ 'type' => 'double', 'locationName' => 'total', ],
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
            ],
        ],
        'TranscodeData' => [
            'type' => 'structure',
            'members' => [
                'date' => [ 'type' => 'string', 'locationName' => 'date', ],
                'duration' => [ 'type' => 'double', 'locationName' => 'duration', ],
            ],
        ],
        'QueryStorageSizeResultObject' => [
            'type' => 'structure',
            'members' => [
                'data' =>  [ 'shape' => 'StorageSize', ],
            ],
        ],
        'StorageSize' => [
            'type' => 'structure',
            'members' => [
                'startTime' => [ 'type' => 'string', 'locationName' => 'startTime', ],
                'endTime' => [ 'type' => 'string', 'locationName' => 'endTime', ],
                'size' => [ 'type' => 'long', 'locationName' => 'size', ],
            ],
        ],
        'Task' => [
            'type' => 'structure',
            'members' => [
                'taskId' => [ 'type' => 'long', 'locationName' => 'taskId', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'categoryId' => [ 'type' => 'double', 'locationName' => 'categoryId', ],
                'category' => [ 'type' => 'string', 'locationName' => 'category', ],
                'format' => [ 'type' => 'string', 'locationName' => 'format', ],
                'size' => [ 'type' => 'double', 'locationName' => 'size', ],
                'status' => [ 'type' => 'integer', 'locationName' => 'status', ],
            ],
        ],
        'UploadTask' => [
            'type' => 'structure',
            'members' => [
                'taskId' => [ 'type' => 'long', 'locationName' => 'taskId', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'categoryId' => [ 'type' => 'long', 'locationName' => 'categoryId', ],
                'category' => [ 'type' => 'string', 'locationName' => 'category', ],
                'format' => [ 'type' => 'string', 'locationName' => 'format', ],
                'size' => [ 'type' => 'long', 'locationName' => 'size', ],
                'status' => [ 'type' => 'integer', 'locationName' => 'status', ],
            ],
        ],
        'CreateWatermarkRequestObject' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'imgUrl' => [ 'type' => 'string', 'locationName' => 'imgUrl', ],
                'width' => [ 'type' => 'string', 'locationName' => 'width', ],
                'height' => [ 'type' => 'string', 'locationName' => 'height', ],
                'sizeUnit' => [ 'type' => 'string', 'locationName' => 'sizeUnit', ],
                'widthRef' => [ 'type' => 'string', 'locationName' => 'widthRef', ],
                'heightRef' => [ 'type' => 'string', 'locationName' => 'heightRef', ],
                'position' => [ 'type' => 'string', 'locationName' => 'position', ],
                'offsetX' => [ 'type' => 'string', 'locationName' => 'offsetX', ],
                'offsetY' => [ 'type' => 'string', 'locationName' => 'offsetY', ],
                'offsetUnit' => [ 'type' => 'string', 'locationName' => 'offsetUnit', ],
            ],
        ],
        'UpdateWatermarkRequestObject' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'imgUrl' => [ 'type' => 'string', 'locationName' => 'imgUrl', ],
                'width' => [ 'type' => 'string', 'locationName' => 'width', ],
                'height' => [ 'type' => 'string', 'locationName' => 'height', ],
                'sizeUnit' => [ 'type' => 'string', 'locationName' => 'sizeUnit', ],
                'widthRef' => [ 'type' => 'string', 'locationName' => 'widthRef', ],
                'heightRef' => [ 'type' => 'string', 'locationName' => 'heightRef', ],
                'position' => [ 'type' => 'string', 'locationName' => 'position', ],
                'offsetX' => [ 'type' => 'string', 'locationName' => 'offsetX', ],
                'offsetY' => [ 'type' => 'string', 'locationName' => 'offsetY', ],
                'offsetUnit' => [ 'type' => 'string', 'locationName' => 'offsetUnit', ],
            ],
        ],
        'ListWatermarksResultObject' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'totalElements' => [ 'type' => 'integer', 'locationName' => 'totalElements', ],
                'totalPages' => [ 'type' => 'integer', 'locationName' => 'totalPages', ],
                'content' => [ 'type' => 'list', 'member' => [ 'shape' => 'WatermarkObject', ], ],
            ],
        ],
        'WatermarkObject' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'long', 'locationName' => 'id', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'imgUrl' => [ 'type' => 'string', 'locationName' => 'imgUrl', ],
                'width' => [ 'type' => 'string', 'locationName' => 'width', ],
                'height' => [ 'type' => 'string', 'locationName' => 'height', ],
                'sizeUnit' => [ 'type' => 'string', 'locationName' => 'sizeUnit', ],
                'widthRef' => [ 'type' => 'string', 'locationName' => 'widthRef', ],
                'heightRef' => [ 'type' => 'string', 'locationName' => 'heightRef', ],
                'position' => [ 'type' => 'string', 'locationName' => 'position', ],
                'offsetX' => [ 'type' => 'string', 'locationName' => 'offsetX', ],
                'offsetY' => [ 'type' => 'string', 'locationName' => 'offsetY', ],
                'offsetUnit' => [ 'type' => 'string', 'locationName' => 'offsetUnit', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'updateTime' => [ 'type' => 'string', 'locationName' => 'updateTime', ],
            ],
        ],
        'UpdateCategoryRequestShape' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'parentId' => [ 'type' => 'long', 'locationName' => 'parentId', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'categoryId' => [ 'type' => 'long', 'locationName' => 'categoryId', ],
            ],
        ],
        'DeleteCategoryResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DeleteCategoryResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ListCategoriesResultShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'totalElements' => [ 'type' => 'integer', 'locationName' => 'totalElements', ],
                'totalPages' => [ 'type' => 'integer', 'locationName' => 'totalPages', ],
                'content' => [ 'type' => 'list', 'member' => [ 'shape' => 'CategoryObject', ], ],
            ],
        ],
        'GetCategoryResultShape' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'long', 'locationName' => 'id', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'level' => [ 'type' => 'integer', 'locationName' => 'level', ],
                'parentId' => [ 'type' => 'long', 'locationName' => 'parentId', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'updateTime' => [ 'type' => 'string', 'locationName' => 'updateTime', ],
            ],
        ],
        'CreateCategoryResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'CreateCategoryResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DeleteCategoryRequestShape' => [
            'type' => 'structure',
            'members' => [
                'categoryId' => [ 'type' => 'long', 'locationName' => 'categoryId', ],
            ],
        ],
        'ListCategoriesRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'sorts' => [ 'type' => 'list', 'member' => [ 'shape' => 'Sort', ], ],
            ],
        ],
        'ListCategoriesResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'ListCategoriesResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'GetCategoryRequestShape' => [
            'type' => 'structure',
            'members' => [
                'categoryId' => [ 'type' => 'long', 'locationName' => 'categoryId', ],
            ],
        ],
        'GetCategoryWithChildrenRequestShape' => [
            'type' => 'structure',
            'members' => [
                'categoryId' => [ 'type' => 'long', 'locationName' => 'categoryId', ],
            ],
        ],
        'GetCategoryWithChildrenResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GetCategoryWithChildrenResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'CreateCategoryResultShape' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'long', 'locationName' => 'id', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'level' => [ 'type' => 'integer', 'locationName' => 'level', ],
                'parentId' => [ 'type' => 'long', 'locationName' => 'parentId', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'updateTime' => [ 'type' => 'string', 'locationName' => 'updateTime', ],
            ],
        ],
        'GetCategoryWithChildrenResultShape' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'long', 'locationName' => 'id', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'level' => [ 'type' => 'integer', 'locationName' => 'level', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'children' => [ 'type' => 'list', 'member' => [ 'shape' => 'SubCategory', ], ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'updateTime' => [ 'type' => 'string', 'locationName' => 'updateTime', ],
            ],
        ],
        'GetCategoryResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GetCategoryResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'UpdateCategoryResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'UpdateCategoryResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'UpdateCategoryResultShape' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'long', 'locationName' => 'id', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'level' => [ 'type' => 'integer', 'locationName' => 'level', ],
                'parentId' => [ 'type' => 'long', 'locationName' => 'parentId', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'updateTime' => [ 'type' => 'string', 'locationName' => 'updateTime', ],
            ],
        ],
        'CreateCategoryRequestShape' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'parentId' => [ 'type' => 'long', 'locationName' => 'parentId', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
            ],
        ],
        'SetRefererRuleResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'GetURLRuleResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GetURLRuleResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'GetIPRuleRequestShape' => [
            'type' => 'structure',
            'members' => [
                'domainId' => [ 'type' => 'long', 'locationName' => 'domainId', ],
            ],
        ],
        'EnableDomainResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'ListHeadersRequestShape' => [
            'type' => 'structure',
            'members' => [
                'domainId' => [ 'type' => 'long', 'locationName' => 'domainId', ],
            ],
        ],
        'DeleteHeaderResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'SetURLRuleRequestShape' => [
            'type' => 'structure',
            'members' => [
                'config' =>  [ 'shape' => 'URLRuleConfigObject', ],
                'enabled' => [ 'type' => 'boolean', 'locationName' => 'enabled', ],
                'domainId' => [ 'type' => 'long', 'locationName' => 'domainId', ],
            ],
        ],
        'SetRefererRuleRequestShape' => [
            'type' => 'structure',
            'members' => [
                'config' =>  [ 'shape' => 'RefererRuleConfigObject', ],
                'enabled' => [ 'type' => 'boolean', 'locationName' => 'enabled', ],
                'domainId' => [ 'type' => 'long', 'locationName' => 'domainId', ],
            ],
        ],
        'SetDefaultDomainRequestShape' => [
            'type' => 'structure',
            'members' => [
                'domainId' => [ 'type' => 'long', 'locationName' => 'domainId', ],
            ],
        ],
        'GetIPRuleResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GetIPRuleResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'GetHttpSslResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GetHttpSslResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ListDomainsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'ListDomainsResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'SetRefererRuleResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'EnableDomainResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ListDomainsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'sorts' => [ 'type' => 'list', 'member' => [ 'shape' => 'Sort', ], ],
            ],
        ],
        'SetHttpSslRequestShape' => [
            'type' => 'structure',
            'members' => [
                'source' => [ 'type' => 'string', 'locationName' => 'source', ],
                'title' => [ 'type' => 'string', 'locationName' => 'title', ],
                'sslCert' => [ 'type' => 'string', 'locationName' => 'sslCert', ],
                'sslKey' => [ 'type' => 'string', 'locationName' => 'sslKey', ],
                'jumpType' => [ 'type' => 'string', 'locationName' => 'jumpType', ],
                'enabled' => [ 'type' => 'boolean', 'locationName' => 'enabled', ],
                'domainId' => [ 'type' => 'long', 'locationName' => 'domainId', ],
            ],
        ],
        'GetURLRuleRequestShape' => [
            'type' => 'structure',
            'members' => [
                'domainId' => [ 'type' => 'long', 'locationName' => 'domainId', ],
            ],
        ],
        'DeleteDomainResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'CreateDomainRequestShape' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
            ],
        ],
        'SetIPRuleResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'GetDomainResultShape' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'cname' => [ 'type' => 'string', 'locationName' => 'cname', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'source' => [ 'type' => 'string', 'locationName' => 'source', ],
                'asDefault' => [ 'type' => 'boolean', 'locationName' => 'asDefault', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'updateTime' => [ 'type' => 'string', 'locationName' => 'updateTime', ],
            ],
        ],
        'GetDomainResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GetDomainResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'SetHeaderResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DeleteDomainResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'GetRefererRuleRequestShape' => [
            'type' => 'structure',
            'members' => [
                'domainId' => [ 'type' => 'long', 'locationName' => 'domainId', ],
            ],
        ],
        'SetHttpSslResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'EnableDomainRequestShape' => [
            'type' => 'structure',
            'members' => [
                'domainId' => [ 'type' => 'long', 'locationName' => 'domainId', ],
            ],
        ],
        'GetRefererRuleResultShape' => [
            'type' => 'structure',
            'members' => [
                'ruleType' => [ 'type' => 'string', 'locationName' => 'ruleType', ],
                'config' =>  [ 'shape' => 'RefererRuleConfigObject', ],
                'enabled' => [ 'type' => 'boolean', 'locationName' => 'enabled', ],
            ],
        ],
        'ListDomainsResultShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'totalElements' => [ 'type' => 'integer', 'locationName' => 'totalElements', ],
                'totalPages' => [ 'type' => 'integer', 'locationName' => 'totalPages', ],
                'content' => [ 'type' => 'list', 'member' => [ 'shape' => 'DomainObject', ], ],
            ],
        ],
        'SetHttpSslResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DisableDomainRequestShape' => [
            'type' => 'structure',
            'members' => [
                'domainId' => [ 'type' => 'long', 'locationName' => 'domainId', ],
            ],
        ],
        'DeleteDomainRequestShape' => [
            'type' => 'structure',
            'members' => [
                'domainId' => [ 'type' => 'long', 'locationName' => 'domainId', ],
            ],
        ],
        'SetDefaultDomainResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'CreateDomainResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'CreateDomainResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ListHeadersResultShape' => [
            'type' => 'structure',
            'members' => [
                'headers' => [ 'type' => 'list', 'member' => [ 'shape' => 'GetHeaderResultObject', ], ],
            ],
        ],
        'SetURLRuleResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'GetIPRuleResultShape' => [
            'type' => 'structure',
            'members' => [
                'ruleType' => [ 'type' => 'string', 'locationName' => 'ruleType', ],
                'config' =>  [ 'shape' => 'IPRuleConfigObject', ],
                'enabled' => [ 'type' => 'boolean', 'locationName' => 'enabled', ],
            ],
        ],
        'DeleteHeaderResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'GetRefererRuleResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GetRefererRuleResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DisableDomainResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'SetHeaderRequestShape' => [
            'type' => 'structure',
            'members' => [
                'headerName' => [ 'type' => 'string', 'locationName' => 'headerName', ],
                'headerValue' => [ 'type' => 'string', 'locationName' => 'headerValue', ],
                'headerType' => [ 'type' => 'string', 'locationName' => 'headerType', ],
                'domainId' => [ 'type' => 'long', 'locationName' => 'domainId', ],
            ],
        ],
        'SetIPRuleResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'GetURLRuleResultShape' => [
            'type' => 'structure',
            'members' => [
                'ruleType' => [ 'type' => 'string', 'locationName' => 'ruleType', ],
                'config' =>  [ 'shape' => 'URLRuleConfigObject', ],
                'enabled' => [ 'type' => 'boolean', 'locationName' => 'enabled', ],
            ],
        ],
        'CreateDomainResultShape' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'cname' => [ 'type' => 'string', 'locationName' => 'cname', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'source' => [ 'type' => 'string', 'locationName' => 'source', ],
                'asDefault' => [ 'type' => 'boolean', 'locationName' => 'asDefault', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'updateTime' => [ 'type' => 'string', 'locationName' => 'updateTime', ],
            ],
        ],
        'SetURLRuleResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'GetHttpSslRequestShape' => [
            'type' => 'structure',
            'members' => [
                'domainId' => [ 'type' => 'long', 'locationName' => 'domainId', ],
            ],
        ],
        'GetHttpSslResultShape' => [
            'type' => 'structure',
            'members' => [
                'source' => [ 'type' => 'string', 'locationName' => 'source', ],
                'title' => [ 'type' => 'string', 'locationName' => 'title', ],
                'sslCert' => [ 'type' => 'string', 'locationName' => 'sslCert', ],
                'sslKey' => [ 'type' => 'string', 'locationName' => 'sslKey', ],
                'jumpType' => [ 'type' => 'string', 'locationName' => 'jumpType', ],
                'enabled' => [ 'type' => 'boolean', 'locationName' => 'enabled', ],
            ],
        ],
        'ListHeadersResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'ListHeadersResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'SetIPRuleRequestShape' => [
            'type' => 'structure',
            'members' => [
                'config' =>  [ 'shape' => 'IPRuleConfigObject', ],
                'enabled' => [ 'type' => 'boolean', 'locationName' => 'enabled', ],
                'domainId' => [ 'type' => 'long', 'locationName' => 'domainId', ],
            ],
        ],
        'GetDomainRequestShape' => [
            'type' => 'structure',
            'members' => [
                'domainId' => [ 'type' => 'long', 'locationName' => 'domainId', ],
            ],
        ],
        'DeleteHeaderRequestShape' => [
            'type' => 'structure',
            'members' => [
                'headerName' => [ 'type' => 'string', 'locationName' => 'headerName', ],
                'headerType' => [ 'type' => 'string', 'locationName' => 'headerType', ],
                'domainId' => [ 'type' => 'long', 'locationName' => 'domainId', ],
            ],
        ],
        'DisableDomainResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'SetHeaderResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'SetDefaultDomainResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'CreateLiveToVodTaskRequestShape' => [
            'type' => 'structure',
            'members' => [
                'title' => [ 'type' => 'string', 'locationName' => 'title', ],
                'fileName' => [ 'type' => 'string', 'locationName' => 'fileName', ],
                'fileSize' => [ 'type' => 'long', 'locationName' => 'fileSize', ],
                'coverUrl' => [ 'type' => 'string', 'locationName' => 'coverUrl', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'categoryId' => [ 'type' => 'long', 'locationName' => 'categoryId', ],
                'tags' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'transcodeTemplateGroupId' => [ 'type' => 'string', 'locationName' => 'transcodeTemplateGroupId', ],
                'transcodeTemplateIds' => [ 'type' => 'list', 'member' => [ 'type' => 'long', ], ],
                'watermarkIds' => [ 'type' => 'list', 'member' => [ 'type' => 'long', ], ],
                'publishDomain' => [ 'type' => 'string', 'locationName' => 'publishDomain', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
                'streamName' => [ 'type' => 'string', 'locationName' => 'streamName', ],
                'recordTimes' => [ 'type' => 'list', 'member' => [ 'shape' => 'RecordTime', ], ],
                'recordFileType' => [ 'type' => 'string', 'locationName' => 'recordFileType', ],
                'taskExternalId' => [ 'type' => 'string', 'locationName' => 'taskExternalId', ],
                'priority' => [ 'type' => 'string', 'locationName' => 'priority', ],
            ],
        ],
        'CreateLiveToVodTaskResultShape' => [
            'type' => 'structure',
            'members' => [
                'flowId' => [ 'type' => 'string', 'locationName' => 'flowId', ],
            ],
        ],
        'CreateLiveToVodTaskResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'CreateLiveToVodTaskResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'CreateImageUploadTaskResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'CreateImageUploadTaskResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'RefreshVideoUploadTaskRequestShape' => [
            'type' => 'structure',
            'members' => [
                'videoId' => [ 'type' => 'string', 'locationName' => 'videoId', ],
            ],
        ],
        'CreateVideoUploadTaskResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'CreateVideoUploadTaskResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'CreateVideoUploadTaskRequestShape' => [
            'type' => 'structure',
            'members' => [
                'httpMethod' => [ 'type' => 'string', 'locationName' => 'httpMethod', ],
                'title' => [ 'type' => 'string', 'locationName' => 'title', ],
                'fileName' => [ 'type' => 'string', 'locationName' => 'fileName', ],
                'fileSize' => [ 'type' => 'long', 'locationName' => 'fileSize', ],
                'coverUrl' => [ 'type' => 'string', 'locationName' => 'coverUrl', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'categoryId' => [ 'type' => 'long', 'locationName' => 'categoryId', ],
                'tags' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'transcodeTemplateGroupId' => [ 'type' => 'string', 'locationName' => 'transcodeTemplateGroupId', ],
                'transcodeTemplateIds' => [ 'type' => 'list', 'member' => [ 'type' => 'long', ], ],
                'watermarkIds' => [ 'type' => 'list', 'member' => [ 'type' => 'long', ], ],
                'userData' => [ 'type' => 'string', 'locationName' => 'userData', ],
            ],
        ],
        'RefreshVideoUploadTaskResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'RefreshVideoUploadTaskResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'CreateImageUploadTaskResultShape' => [
            'type' => 'structure',
            'members' => [
                'imageId' => [ 'type' => 'string', 'locationName' => 'imageId', ],
                'uploadUrl' => [ 'type' => 'string', 'locationName' => 'uploadUrl', ],
            ],
        ],
        'CreateImageUploadTaskRequestShape' => [
            'type' => 'structure',
            'members' => [
                'httpMethod' => [ 'type' => 'string', 'locationName' => 'httpMethod', ],
                'fileName' => [ 'type' => 'string', 'locationName' => 'fileName', ],
                'fileSize' => [ 'type' => 'long', 'locationName' => 'fileSize', ],
            ],
        ],
        'RefreshVideoUploadTaskResultShape' => [
            'type' => 'structure',
            'members' => [
                'videoId' => [ 'type' => 'string', 'locationName' => 'videoId', ],
                'uploadUrl' => [ 'type' => 'string', 'locationName' => 'uploadUrl', ],
                'authToken' => [ 'type' => 'string', 'locationName' => 'authToken', ],
            ],
        ],
        'CreateVideoUploadTaskResultShape' => [
            'type' => 'structure',
            'members' => [
                'videoId' => [ 'type' => 'string', 'locationName' => 'videoId', ],
                'uploadUrl' => [ 'type' => 'string', 'locationName' => 'uploadUrl', ],
                'authToken' => [ 'type' => 'string', 'locationName' => 'authToken', ],
            ],
        ],
        'BatchSubmitQualityDetectionJobsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'bulkItems' => [ 'type' => 'list', 'member' => [ 'shape' => 'SubmitQualityDetectionJobRequestObject', ], ],
            ],
        ],
        'BatchSubmitQualityDetectionJobsResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'SubmitQualityDetectionJobResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'BatchSubmitQualityDetectionJobsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'SubmitQualityDetectionJobRequestShape' => [
            'type' => 'structure',
            'members' => [
                'mediaId' => [ 'type' => 'string', 'locationName' => 'mediaId', ],
                'templateIds' => [ 'type' => 'list', 'member' => [ 'type' => 'long', ], ],
            ],
        ],
        'SubmitQualityDetectionJobResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'UpdateQualityDetectionTemplateResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'UpdateQualityDetectionTemplateResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'GetQualityDetectionTemplateRequestShape' => [
            'type' => 'structure',
            'members' => [
                'templateId' => [ 'type' => 'long', 'locationName' => 'templateId', ],
            ],
        ],
        'GetQualityDetectionTemplateResultShape' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'long', 'locationName' => 'id', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'templateType' => [ 'type' => 'string', 'locationName' => 'templateType', ],
                'detections' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'updateTime' => [ 'type' => 'string', 'locationName' => 'updateTime', ],
            ],
        ],
        'GetQualityDetectionTemplateResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GetQualityDetectionTemplateResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ListQualityDetectionTemplatesRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
            ],
        ],
        'ListQualityDetectionTemplatesResultShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'totalElements' => [ 'type' => 'integer', 'locationName' => 'totalElements', ],
                'totalPages' => [ 'type' => 'integer', 'locationName' => 'totalPages', ],
                'content' => [ 'type' => 'list', 'member' => [ 'shape' => 'QualityDetectionTemplateObject', ], ],
            ],
        ],
        'CreateQualityDetectionTemplateRequestShape' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'templateType' => [ 'type' => 'string', 'locationName' => 'templateType', ],
                'detections' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'CreateQualityDetectionTemplateResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'CreateQualityDetectionTemplateResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'UpdateQualityDetectionTemplateRequestShape' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'detections' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'templateId' => [ 'type' => 'long', 'locationName' => 'templateId', ],
            ],
        ],
        'ListQualityDetectionTemplatesResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'ListQualityDetectionTemplatesResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'CreateQualityDetectionTemplateResultShape' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'long', 'locationName' => 'id', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'templateType' => [ 'type' => 'string', 'locationName' => 'templateType', ],
                'detections' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'updateTime' => [ 'type' => 'string', 'locationName' => 'updateTime', ],
            ],
        ],
        'UpdateQualityDetectionTemplateResultShape' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'long', 'locationName' => 'id', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'templateType' => [ 'type' => 'string', 'locationName' => 'templateType', ],
                'detections' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'updateTime' => [ 'type' => 'string', 'locationName' => 'updateTime', ],
            ],
        ],
        'DeleteQualityDetectionTemplateResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DeleteQualityDetectionTemplateResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DeleteQualityDetectionTemplateRequestShape' => [
            'type' => 'structure',
            'members' => [
                'templateId' => [ 'type' => 'long', 'locationName' => 'templateId', ],
            ],
        ],
        'DeleteSnapshotTemplateRequestShape' => [
            'type' => 'structure',
            'members' => [
                'templateId' => [ 'type' => 'long', 'locationName' => 'templateId', ],
            ],
        ],
        'DeleteSnapshotTemplateResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'ListSnapshotTemplatesResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'ListSnapshotTemplatesResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'UpdateSnapshotTemplateRequestShape' => [
            'type' => 'structure',
            'members' => [
                'templateName' => [ 'type' => 'string', 'locationName' => 'templateName', ],
                'templateConfig' => [ 'type' => 'string', 'locationName' => 'templateConfig', ],
                'templateId' => [ 'type' => 'long', 'locationName' => 'templateId', ],
            ],
        ],
        'GetSnapshotTemplateResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GetSnapshotTemplateResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'CreateSnapshotTemplateResultShape' => [
            'type' => 'structure',
            'members' => [
                'templateId' => [ 'type' => 'string', 'locationName' => 'templateId', ],
                'templateName' => [ 'type' => 'string', 'locationName' => 'templateName', ],
                'templateType' => [ 'type' => 'string', 'locationName' => 'templateType', ],
                'templateConfig' => [ 'type' => 'string', 'locationName' => 'templateConfig', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'updateTime' => [ 'type' => 'string', 'locationName' => 'updateTime', ],
            ],
        ],
        'GetSnapshotTemplateResultShape' => [
            'type' => 'structure',
            'members' => [
                'templateId' => [ 'type' => 'string', 'locationName' => 'templateId', ],
                'templateName' => [ 'type' => 'string', 'locationName' => 'templateName', ],
                'templateType' => [ 'type' => 'string', 'locationName' => 'templateType', ],
                'templateConfig' => [ 'type' => 'string', 'locationName' => 'templateConfig', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'updateTime' => [ 'type' => 'string', 'locationName' => 'updateTime', ],
            ],
        ],
        'UpdateSnapshotTemplateResultShape' => [
            'type' => 'structure',
            'members' => [
                'templateId' => [ 'type' => 'string', 'locationName' => 'templateId', ],
                'templateName' => [ 'type' => 'string', 'locationName' => 'templateName', ],
                'templateType' => [ 'type' => 'string', 'locationName' => 'templateType', ],
                'templateConfig' => [ 'type' => 'string', 'locationName' => 'templateConfig', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'updateTime' => [ 'type' => 'string', 'locationName' => 'updateTime', ],
            ],
        ],
        'ListSnapshotTemplatesResultShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'totalElements' => [ 'type' => 'integer', 'locationName' => 'totalElements', ],
                'totalPages' => [ 'type' => 'integer', 'locationName' => 'totalPages', ],
                'content' => [ 'type' => 'list', 'member' => [ 'shape' => 'SnapshotTemplateInfo', ], ],
            ],
        ],
        'UpdateSnapshotTemplateResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'UpdateSnapshotTemplateResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'CreateSnapshotTemplateRequestShape' => [
            'type' => 'structure',
            'members' => [
                'templateName' => [ 'type' => 'string', 'locationName' => 'templateName', ],
                'templateType' => [ 'type' => 'string', 'locationName' => 'templateType', ],
                'templateConfig' => [ 'type' => 'string', 'locationName' => 'templateConfig', ],
            ],
        ],
        'DeleteSnapshotTemplateResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ListSnapshotTemplatesRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'filters' => [ 'type' => 'list', 'member' => [ 'shape' => 'Filter', ], ],
            ],
        ],
        'CreateSnapshotTemplateResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'CreateSnapshotTemplateResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'GetSnapshotTemplateRequestShape' => [
            'type' => 'structure',
            'members' => [
                'templateId' => [ 'type' => 'long', 'locationName' => 'templateId', ],
            ],
        ],
        'GetTranscodeSummariesResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GetTranscodeSummariesResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'BatchSubmitTranscodeJobsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'bulkItems' => [ 'type' => 'list', 'member' => [ 'shape' => 'SubmitTranscodeJobRequestObject', ], ],
            ],
        ],
        'SubmitTranscodeJobResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'SubmitTranscodeJobResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'GetTranscodeJobSummariesResultShape' => [
            'type' => 'structure',
            'members' => [
                'jobSummaries' => [ 'type' => 'list', 'member' => [ 'shape' => 'TranscodeJobSummary', ], ],
                'failedJobIds' => [ 'type' => 'list', 'member' => [ 'type' => 'long', ], ],
            ],
        ],
        'SubmitTranscodeJobResultShape' => [
            'type' => 'structure',
            'members' => [
                'tasks' => [ 'type' => 'list', 'member' => [ 'shape' => 'SubmittedTranscodeTask', ], ],
            ],
        ],
        'SubmitTranscodeJobRequestShape' => [
            'type' => 'structure',
            'members' => [
                'videoId' => [ 'type' => 'string', 'locationName' => 'videoId', ],
                'templateGroupId' => [ 'type' => 'string', 'locationName' => 'templateGroupId', ],
                'templateIds' => [ 'type' => 'list', 'member' => [ 'type' => 'long', ], ],
                'watermarkIds' => [ 'type' => 'list', 'member' => [ 'type' => 'long', ], ],
            ],
        ],
        'BatchSubmitTranscodeJobsResultShape' => [
            'type' => 'structure',
            'members' => [
                'tasks' => [ 'type' => 'list', 'member' => [ 'shape' => 'SubmittedTranscodeTask', ], ],
            ],
        ],
        'BatchSubmitTranscodeJobsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'BatchSubmitTranscodeJobsResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'GetTranscodeTaskSummariesResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GetTranscodeTaskSummariesResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'GetTranscodeSummariesResultShape' => [
            'type' => 'structure',
            'members' => [
                'jobSummaries' => [ 'type' => 'list', 'member' => [ 'shape' => 'TranscodeJobSummary', ], ],
                'failedVideoIds' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'GetTranscodeJobSummariesRequestShape' => [
            'type' => 'structure',
            'members' => [
                'jobIds' => [ 'type' => 'list', 'member' => [ 'type' => 'long', ], ],
            ],
        ],
        'GetTranscodeSummariesRequestShape' => [
            'type' => 'structure',
            'members' => [
                'videoIds' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'GetTranscodeJobSummariesResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GetTranscodeJobSummariesResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'GetTranscodeTaskSummariesResultShape' => [
            'type' => 'structure',
            'members' => [
                'taskSummaries' => [ 'type' => 'list', 'member' => [ 'shape' => 'TranscodeTaskSummary', ], ],
                'failedTaskIds' => [ 'type' => 'list', 'member' => [ 'type' => 'long', ], ],
            ],
        ],
        'GetTranscodeTaskSummariesRequestShape' => [
            'type' => 'structure',
            'members' => [
                'taskIds' => [ 'type' => 'list', 'member' => [ 'type' => 'long', ], ],
            ],
        ],
        'ListTranscodeTemplatesRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'filters' => [ 'type' => 'list', 'member' => [ 'shape' => 'Filter', ], ],
            ],
        ],
        'DeleteTranscodeTemplateResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'UpdateTranscodeTemplateRequestShape' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'video' =>  [ 'shape' => 'Video', ],
                'audio' =>  [ 'shape' => 'Audio', ],
                'encapsulation' =>  [ 'shape' => 'Encapsulation', ],
                'outFile' =>  [ 'shape' => 'OutFile', ],
                'definition' => [ 'type' => 'string', 'locationName' => 'definition', ],
                'templateType' => [ 'type' => 'string', 'locationName' => 'templateType', ],
                'templateId' => [ 'type' => 'long', 'locationName' => 'templateId', ],
            ],
        ],
        'CreateTranscodeTemplateResultShape' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'long', 'locationName' => 'id', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'video' =>  [ 'shape' => 'Video', ],
                'audio' =>  [ 'shape' => 'Audio', ],
                'encapsulation' =>  [ 'shape' => 'Encapsulation', ],
                'outFile' =>  [ 'shape' => 'OutFile', ],
                'definition' => [ 'type' => 'string', 'locationName' => 'definition', ],
                'source' => [ 'type' => 'string', 'locationName' => 'source', ],
                'templateType' => [ 'type' => 'string', 'locationName' => 'templateType', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'updateTime' => [ 'type' => 'string', 'locationName' => 'updateTime', ],
            ],
        ],
        'DeleteTranscodeTemplateRequestShape' => [
            'type' => 'structure',
            'members' => [
                'templateId' => [ 'type' => 'long', 'locationName' => 'templateId', ],
            ],
        ],
        'ListTranscodeTemplatesResultShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'totalElements' => [ 'type' => 'integer', 'locationName' => 'totalElements', ],
                'totalPages' => [ 'type' => 'integer', 'locationName' => 'totalPages', ],
                'content' => [ 'type' => 'list', 'member' => [ 'shape' => 'TranscodeTemplateObject', ], ],
            ],
        ],
        'CreateTranscodeTemplateResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'CreateTranscodeTemplateResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'GetTranscodeTemplateRequestShape' => [
            'type' => 'structure',
            'members' => [
                'templateId' => [ 'type' => 'long', 'locationName' => 'templateId', ],
            ],
        ],
        'GetTranscodeTemplateResultShape' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'long', 'locationName' => 'id', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'video' =>  [ 'shape' => 'Video', ],
                'audio' =>  [ 'shape' => 'Audio', ],
                'encapsulation' =>  [ 'shape' => 'Encapsulation', ],
                'outFile' =>  [ 'shape' => 'OutFile', ],
                'definition' => [ 'type' => 'string', 'locationName' => 'definition', ],
                'source' => [ 'type' => 'string', 'locationName' => 'source', ],
                'templateType' => [ 'type' => 'string', 'locationName' => 'templateType', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'updateTime' => [ 'type' => 'string', 'locationName' => 'updateTime', ],
            ],
        ],
        'UpdateTranscodeTemplateResultShape' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'long', 'locationName' => 'id', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'video' =>  [ 'shape' => 'Video', ],
                'audio' =>  [ 'shape' => 'Audio', ],
                'encapsulation' =>  [ 'shape' => 'Encapsulation', ],
                'outFile' =>  [ 'shape' => 'OutFile', ],
                'definition' => [ 'type' => 'string', 'locationName' => 'definition', ],
                'source' => [ 'type' => 'string', 'locationName' => 'source', ],
                'templateType' => [ 'type' => 'string', 'locationName' => 'templateType', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'updateTime' => [ 'type' => 'string', 'locationName' => 'updateTime', ],
            ],
        ],
        'DeleteTranscodeTemplateResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'ListTranscodeTemplatesResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'ListTranscodeTemplatesResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'GetTranscodeTemplateResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GetTranscodeTemplateResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'CreateTranscodeTemplateRequestShape' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'video' =>  [ 'shape' => 'Video', ],
                'audio' =>  [ 'shape' => 'Audio', ],
                'encapsulation' =>  [ 'shape' => 'Encapsulation', ],
                'outFile' =>  [ 'shape' => 'OutFile', ],
                'definition' => [ 'type' => 'string', 'locationName' => 'definition', ],
                'templateType' => [ 'type' => 'string', 'locationName' => 'templateType', ],
            ],
        ],
        'UpdateTranscodeTemplateResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'UpdateTranscodeTemplateResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ListTranscodeTemplateGroupsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'ListTranscodeTemplateGroupsResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ListTranscodeTemplateGroupsResultShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'totalElements' => [ 'type' => 'integer', 'locationName' => 'totalElements', ],
                'totalPages' => [ 'type' => 'integer', 'locationName' => 'totalPages', ],
                'content' => [ 'type' => 'list', 'member' => [ 'shape' => 'TranscodeTemplateGroupData', ], ],
            ],
        ],
        'DeleteGroupedTranscodeTemplatesResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DeleteGroupedTranscodeTemplatesResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'CreateTranscodeTemplateGroupResultShape' => [
            'type' => 'structure',
            'members' => [
                'groupId' => [ 'type' => 'string', 'locationName' => 'groupId', ],
                'groupName' => [ 'type' => 'string', 'locationName' => 'groupName', ],
                'templates' => [ 'type' => 'list', 'member' => [ 'shape' => 'GroupedTranscodeTemplateData', ], ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'updateTime' => [ 'type' => 'string', 'locationName' => 'updateTime', ],
            ],
        ],
        'ListTranscodeTemplateGroupsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'filters' => [ 'type' => 'list', 'member' => [ 'shape' => 'Filter', ], ],
            ],
        ],
        'CreateTranscodeTemplateGroupRequestShape' => [
            'type' => 'structure',
            'members' => [
                'groupName' => [ 'type' => 'string', 'locationName' => 'groupName', ],
                'templates' => [ 'type' => 'list', 'member' => [ 'shape' => 'GroupedTranscodeTemplateData', ], ],
            ],
        ],
        'UpdateTranscodeTemplateGroupRequestShape' => [
            'type' => 'structure',
            'members' => [
                'groupName' => [ 'type' => 'string', 'locationName' => 'groupName', ],
                'templates' => [ 'type' => 'list', 'member' => [ 'shape' => 'GroupedTranscodeTemplateData', ], ],
                'groupId' => [ 'type' => 'string', 'locationName' => 'groupId', ],
            ],
        ],
        'GetTranscodeTemplateGroupResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GetTranscodeTemplateGroupResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DeleteGroupedTranscodeTemplatesResultShape' => [
            'type' => 'structure',
            'members' => [
                'groupId' => [ 'type' => 'long', 'locationName' => 'groupId', ],
                'okTemplateIds' => [ 'type' => 'list', 'member' => [ 'type' => 'long', ], ],
                'notExistTemplateIds' => [ 'type' => 'list', 'member' => [ 'type' => 'long', ], ],
            ],
        ],
        'GetTranscodeTemplateGroupResultShape' => [
            'type' => 'structure',
            'members' => [
                'groupId' => [ 'type' => 'string', 'locationName' => 'groupId', ],
                'groupName' => [ 'type' => 'string', 'locationName' => 'groupName', ],
                'templates' => [ 'type' => 'list', 'member' => [ 'shape' => 'GroupedTranscodeTemplateData', ], ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'updateTime' => [ 'type' => 'string', 'locationName' => 'updateTime', ],
            ],
        ],
        'UpdateTranscodeTemplateGroupResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'UpdateTranscodeTemplateGroupResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DeleteTranscodeTemplateGroupResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DeleteGroupedTranscodeTemplatesRequestShape' => [
            'type' => 'structure',
            'members' => [
                'groupId' => [ 'type' => 'string', 'locationName' => 'groupId', ],
                'templateIds' => [ 'type' => 'long', 'locationName' => 'templateIds', ],
            ],
        ],
        'CreateTranscodeTemplateGroupResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'CreateTranscodeTemplateGroupResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'GetTranscodeTemplateGroupRequestShape' => [
            'type' => 'structure',
            'members' => [
                'groupId' => [ 'type' => 'string', 'locationName' => 'groupId', ],
            ],
        ],
        'DeleteTranscodeTemplateGroupRequestShape' => [
            'type' => 'structure',
            'members' => [
                'groupId' => [ 'type' => 'string', 'locationName' => 'groupId', ],
            ],
        ],
        'UpdateTranscodeTemplateGroupResultShape' => [
            'type' => 'structure',
            'members' => [
                'groupId' => [ 'type' => 'string', 'locationName' => 'groupId', ],
                'groupName' => [ 'type' => 'string', 'locationName' => 'groupName', ],
                'templates' => [ 'type' => 'list', 'member' => [ 'shape' => 'GroupedTranscodeTemplateData', ], ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'updateTime' => [ 'type' => 'string', 'locationName' => 'updateTime', ],
            ],
        ],
        'DeleteTranscodeTemplateGroupResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'VideoAuditResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'GetVideoPlayInfoResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GetVideoPlayInfoResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'GetVideoSourceInfoResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GetVideoSourceInfoResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'VideoAuditResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'GetVideoResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GetVideoResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'GetVideoResultShape' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'coverUrl' => [ 'type' => 'string', 'locationName' => 'coverUrl', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'fileSize' => [ 'type' => 'long', 'locationName' => 'fileSize', ],
                'checksum' => [ 'type' => 'string', 'locationName' => 'checksum', ],
                'duration' => [ 'type' => 'long', 'locationName' => 'duration', ],
                'tags' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'categoryId' => [ 'type' => 'long', 'locationName' => 'categoryId', ],
                'categoryName' => [ 'type' => 'string', 'locationName' => 'categoryName', ],
                'snapshots' => [ 'type' => 'list', 'member' => [ 'shape' => 'Snapshot', ], ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'updateTime' => [ 'type' => 'string', 'locationName' => 'updateTime', ],
            ],
        ],
        'UpdateVideoResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'UpdateVideoResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'BatchDeleteVideosRequestShape' => [
            'type' => 'structure',
            'members' => [
                'videoIds' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'DeleteVideoResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'GetVideoPlayInfoRequestShape' => [
            'type' => 'structure',
            'members' => [
                'videoId' => [ 'type' => 'string', 'locationName' => 'videoId', ],
            ],
        ],
        'BatchDeleteVideosResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'BatchDeleteVideosResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ListVideosRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'filters' => [ 'type' => 'list', 'member' => [ 'shape' => 'Filter', ], ],
                'sorts' => [ 'type' => 'list', 'member' => [ 'shape' => 'Sort', ], ],
            ],
        ],
        'DeleteVideoStreamsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DeleteVideoStreamsResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'GetVideoSourceInfoRequestShape' => [
            'type' => 'structure',
            'members' => [
                'videoId' => [ 'type' => 'string', 'locationName' => 'videoId', ],
            ],
        ],
        'DeleteVideoResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'BatchDeleteVideosResultShape' => [
            'type' => 'structure',
            'members' => [
                'okVideoIds' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'notFoundVideoIds' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'failedVideoIds' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'GetVideoPlayInfoResultShape' => [
            'type' => 'structure',
            'members' => [
                'baseInfo' =>  [ 'shape' => 'VideoBaseInfo', ],
                'playInfoList' => [ 'type' => 'list', 'member' => [ 'shape' => 'VideoPlayInfo', ], ],
            ],
        ],
        'VideoAuditRequestShape' => [
            'type' => 'structure',
            'members' => [
                'auditResult' => [ 'type' => 'string', 'locationName' => 'auditResult', ],
                'videoId' => [ 'type' => 'string', 'locationName' => 'videoId', ],
            ],
        ],
        'DeleteVideoStreamsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'taskIds' => [ 'type' => 'list', 'member' => [ 'type' => 'long', ], ],
                'videoId' => [ 'type' => 'string', 'locationName' => 'videoId', ],
            ],
        ],
        'UpdateVideoResultShape' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'coverUrl' => [ 'type' => 'string', 'locationName' => 'coverUrl', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'fileSize' => [ 'type' => 'long', 'locationName' => 'fileSize', ],
                'checksum' => [ 'type' => 'string', 'locationName' => 'checksum', ],
                'duration' => [ 'type' => 'long', 'locationName' => 'duration', ],
                'tags' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'categoryId' => [ 'type' => 'long', 'locationName' => 'categoryId', ],
                'categoryName' => [ 'type' => 'string', 'locationName' => 'categoryName', ],
                'snapshots' => [ 'type' => 'list', 'member' => [ 'shape' => 'Snapshot', ], ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'updateTime' => [ 'type' => 'string', 'locationName' => 'updateTime', ],
            ],
        ],
        'BatchUpdateVideosResultShape' => [
            'type' => 'structure',
            'members' => [
                'okVideoIds' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'notFoundVideoIds' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'failedVideoIds' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'DeleteVideoStreamsResultShape' => [
            'type' => 'structure',
            'members' => [
                'okTaskIds' => [ 'type' => 'list', 'member' => [ 'type' => 'long', ], ],
                'notFoundTaskIds' => [ 'type' => 'list', 'member' => [ 'type' => 'long', ], ],
                'failedTaskIds' => [ 'type' => 'list', 'member' => [ 'type' => 'long', ], ],
            ],
        ],
        'GetVideoRequestShape' => [
            'type' => 'structure',
            'members' => [
                'videoId' => [ 'type' => 'string', 'locationName' => 'videoId', ],
            ],
        ],
        'DeleteVideoRequestShape' => [
            'type' => 'structure',
            'members' => [
                'videoId' => [ 'type' => 'string', 'locationName' => 'videoId', ],
            ],
        ],
        'BatchUpdateVideosRequestShape' => [
            'type' => 'structure',
            'members' => [
                'bulkItems' => [ 'type' => 'list', 'member' => [ 'shape' => 'BatchUpdateVideosBulkItem', ], ],
            ],
        ],
        'BatchUpdateVideosResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'BatchUpdateVideosResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'UpdateVideoRequestShape' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'categoryId' => [ 'type' => 'long', 'locationName' => 'categoryId', ],
                'tags' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'coverUrl' => [ 'type' => 'string', 'locationName' => 'coverUrl', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'videoId' => [ 'type' => 'string', 'locationName' => 'videoId', ],
            ],
        ],
        'ListVideosResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'ListVideosResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'GetVideoSourceInfoResultShape' => [
            'type' => 'structure',
            'members' => [
                'baseInfo' =>  [ 'shape' => 'VideoBaseInfo', ],
                'playInfoList' => [ 'type' => 'list', 'member' => [ 'shape' => 'VideoPlayInfo', ], ],
            ],
        ],
        'ListVideosResultShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'totalElements' => [ 'type' => 'integer', 'locationName' => 'totalElements', ],
                'totalPages' => [ 'type' => 'integer', 'locationName' => 'totalPages', ],
                'content' => [ 'type' => 'list', 'member' => [ 'shape' => 'VideoObject', ], ],
            ],
        ],
        'CreateWatermarkRequestShape' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'imgUrl' => [ 'type' => 'string', 'locationName' => 'imgUrl', ],
                'width' => [ 'type' => 'string', 'locationName' => 'width', ],
                'height' => [ 'type' => 'string', 'locationName' => 'height', ],
                'sizeUnit' => [ 'type' => 'string', 'locationName' => 'sizeUnit', ],
                'widthRef' => [ 'type' => 'string', 'locationName' => 'widthRef', ],
                'heightRef' => [ 'type' => 'string', 'locationName' => 'heightRef', ],
                'position' => [ 'type' => 'string', 'locationName' => 'position', ],
                'offsetX' => [ 'type' => 'string', 'locationName' => 'offsetX', ],
                'offsetY' => [ 'type' => 'string', 'locationName' => 'offsetY', ],
                'offsetUnit' => [ 'type' => 'string', 'locationName' => 'offsetUnit', ],
            ],
        ],
        'GetWatermarkRequestShape' => [
            'type' => 'structure',
            'members' => [
                'watermarkId' => [ 'type' => 'long', 'locationName' => 'watermarkId', ],
            ],
        ],
        'ListWatermarksResultShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'totalElements' => [ 'type' => 'integer', 'locationName' => 'totalElements', ],
                'totalPages' => [ 'type' => 'integer', 'locationName' => 'totalPages', ],
                'content' => [ 'type' => 'list', 'member' => [ 'shape' => 'WatermarkObject', ], ],
            ],
        ],
        'UpdateWatermarkResultShape' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'long', 'locationName' => 'id', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'imgUrl' => [ 'type' => 'string', 'locationName' => 'imgUrl', ],
                'width' => [ 'type' => 'string', 'locationName' => 'width', ],
                'height' => [ 'type' => 'string', 'locationName' => 'height', ],
                'sizeUnit' => [ 'type' => 'string', 'locationName' => 'sizeUnit', ],
                'widthRef' => [ 'type' => 'string', 'locationName' => 'widthRef', ],
                'heightRef' => [ 'type' => 'string', 'locationName' => 'heightRef', ],
                'position' => [ 'type' => 'string', 'locationName' => 'position', ],
                'offsetX' => [ 'type' => 'string', 'locationName' => 'offsetX', ],
                'offsetY' => [ 'type' => 'string', 'locationName' => 'offsetY', ],
                'offsetUnit' => [ 'type' => 'string', 'locationName' => 'offsetUnit', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'updateTime' => [ 'type' => 'string', 'locationName' => 'updateTime', ],
            ],
        ],
        'DeleteWatermarkResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'UpdateWatermarkResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'UpdateWatermarkResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'UpdateWatermarkRequestShape' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'imgUrl' => [ 'type' => 'string', 'locationName' => 'imgUrl', ],
                'width' => [ 'type' => 'string', 'locationName' => 'width', ],
                'height' => [ 'type' => 'string', 'locationName' => 'height', ],
                'sizeUnit' => [ 'type' => 'string', 'locationName' => 'sizeUnit', ],
                'widthRef' => [ 'type' => 'string', 'locationName' => 'widthRef', ],
                'heightRef' => [ 'type' => 'string', 'locationName' => 'heightRef', ],
                'position' => [ 'type' => 'string', 'locationName' => 'position', ],
                'offsetX' => [ 'type' => 'string', 'locationName' => 'offsetX', ],
                'offsetY' => [ 'type' => 'string', 'locationName' => 'offsetY', ],
                'offsetUnit' => [ 'type' => 'string', 'locationName' => 'offsetUnit', ],
                'watermarkId' => [ 'type' => 'long', 'locationName' => 'watermarkId', ],
            ],
        ],
        'GetWatermarkResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GetWatermarkResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ListWatermarksRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
            ],
        ],
        'CreateWatermarkResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'CreateWatermarkResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ListWatermarksResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'ListWatermarksResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DeleteWatermarkResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'CreateWatermarkResultShape' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'long', 'locationName' => 'id', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'imgUrl' => [ 'type' => 'string', 'locationName' => 'imgUrl', ],
                'width' => [ 'type' => 'string', 'locationName' => 'width', ],
                'height' => [ 'type' => 'string', 'locationName' => 'height', ],
                'sizeUnit' => [ 'type' => 'string', 'locationName' => 'sizeUnit', ],
                'widthRef' => [ 'type' => 'string', 'locationName' => 'widthRef', ],
                'heightRef' => [ 'type' => 'string', 'locationName' => 'heightRef', ],
                'position' => [ 'type' => 'string', 'locationName' => 'position', ],
                'offsetX' => [ 'type' => 'string', 'locationName' => 'offsetX', ],
                'offsetY' => [ 'type' => 'string', 'locationName' => 'offsetY', ],
                'offsetUnit' => [ 'type' => 'string', 'locationName' => 'offsetUnit', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'updateTime' => [ 'type' => 'string', 'locationName' => 'updateTime', ],
            ],
        ],
        'GetWatermarkResultShape' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'long', 'locationName' => 'id', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'imgUrl' => [ 'type' => 'string', 'locationName' => 'imgUrl', ],
                'width' => [ 'type' => 'string', 'locationName' => 'width', ],
                'height' => [ 'type' => 'string', 'locationName' => 'height', ],
                'sizeUnit' => [ 'type' => 'string', 'locationName' => 'sizeUnit', ],
                'widthRef' => [ 'type' => 'string', 'locationName' => 'widthRef', ],
                'heightRef' => [ 'type' => 'string', 'locationName' => 'heightRef', ],
                'position' => [ 'type' => 'string', 'locationName' => 'position', ],
                'offsetX' => [ 'type' => 'string', 'locationName' => 'offsetX', ],
                'offsetY' => [ 'type' => 'string', 'locationName' => 'offsetY', ],
                'offsetUnit' => [ 'type' => 'string', 'locationName' => 'offsetUnit', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'updateTime' => [ 'type' => 'string', 'locationName' => 'updateTime', ],
            ],
        ],
        'DeleteWatermarkRequestShape' => [
            'type' => 'structure',
            'members' => [
                'watermarkId' => [ 'type' => 'long', 'locationName' => 'watermarkId', ],
            ],
        ],
    ],
];
