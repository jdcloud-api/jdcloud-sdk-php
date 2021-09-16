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
        'CreateVeditJob' => [
            'name' => 'CreateVeditJob',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/veditJobs',
            ],
            'input' => [ 'shape' => 'CreateVeditJobRequestShape', ],
            'output' => [ 'shape' => 'CreateVeditJobResponseShape', ],
        ],
        'SubmitVeditJob' => [
            'name' => 'SubmitVeditJob',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/veditJobs:submit',
            ],
            'input' => [ 'shape' => 'SubmitVeditJobRequestShape', ],
            'output' => [ 'shape' => 'SubmitVeditJobResponseShape', ],
        ],
        'ListVeditProjects' => [
            'name' => 'ListVeditProjects',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/veditProjects',
            ],
            'input' => [ 'shape' => 'ListVeditProjectsRequestShape', ],
            'output' => [ 'shape' => 'ListVeditProjectsResponseShape', ],
        ],
        'CreateVeditProject' => [
            'name' => 'CreateVeditProject',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/veditProjects',
            ],
            'input' => [ 'shape' => 'CreateVeditProjectRequestShape', ],
            'output' => [ 'shape' => 'CreateVeditProjectResponseShape', ],
        ],
        'GetVeditProject' => [
            'name' => 'GetVeditProject',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/veditProjects/{projectId}',
            ],
            'input' => [ 'shape' => 'GetVeditProjectRequestShape', ],
            'output' => [ 'shape' => 'GetVeditProjectResponseShape', ],
        ],
        'UpdateVeditProject' => [
            'name' => 'UpdateVeditProject',
            'http' => [
                'method' => 'PUT',
                'requestUri' => '/v1/veditProjects/{projectId}',
            ],
            'input' => [ 'shape' => 'UpdateVeditProjectRequestShape', ],
            'output' => [ 'shape' => 'UpdateVeditProjectResponseShape', ],
        ],
        'DeleteVeditProject' => [
            'name' => 'DeleteVeditProject',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/veditProjects/{projectId}',
            ],
            'input' => [ 'shape' => 'DeleteVeditProjectRequestShape', ],
            'output' => [ 'shape' => 'DeleteVeditProjectResponseShape', ],
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
    ],
];
