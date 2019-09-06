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
        'VideoUploadTaskObject' => [
            'type' => 'structure',
            'members' => [
                'videoId' => [ 'type' => 'string', 'locationName' => 'videoId', ],
                'uploadUrl' => [ 'type' => 'string', 'locationName' => 'uploadUrl', ],
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
                'transcodeTemplateIds' => [ 'type' => 'list', 'member' => [ 'type' => 'long', ], ],
                'watermarkIds' => [ 'type' => 'list', 'member' => [ 'type' => 'long', ], ],
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
                'templateIds' => [ 'type' => 'list', 'member' => [ 'type' => 'long', ], ],
                'watermarkIds' => [ 'type' => 'list', 'member' => [ 'type' => 'long', ], ],
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
        'SubmittedTranscodeTask' => [
            'type' => 'structure',
            'members' => [
                'taskId' => [ 'type' => 'long', 'locationName' => 'taskId', ],
                'videoId' => [ 'type' => 'string', 'locationName' => 'videoId', ],
                'templateId' => [ 'type' => 'long', 'locationName' => 'templateId', ],
                'watermarkIds' => [ 'type' => 'list', 'member' => [ 'type' => 'long', ], ],
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
                'definition' => [ 'type' => 'string', 'locationName' => 'definition', ],
                'templateType' => [ 'type' => 'string', 'locationName' => 'templateType', ],
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
                'transcodeTemplateIds' => [ 'type' => 'list', 'member' => [ 'type' => 'long', ], ],
                'watermarkIds' => [ 'type' => 'list', 'member' => [ 'type' => 'long', ], ],
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
            ],
        ],
        'CreateVideoUploadTaskResultShape' => [
            'type' => 'structure',
            'members' => [
                'videoId' => [ 'type' => 'string', 'locationName' => 'videoId', ],
                'uploadUrl' => [ 'type' => 'string', 'locationName' => 'uploadUrl', ],
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
                'templateIds' => [ 'type' => 'list', 'member' => [ 'type' => 'long', ], ],
                'watermarkIds' => [ 'type' => 'list', 'member' => [ 'type' => 'long', ], ],
            ],
        ],
        'BatchSubmitTranscodeJobsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'bulkItems' => [ 'type' => 'list', 'member' => [ 'shape' => 'SubmitTranscodeJobRequestObject', ], ],
            ],
        ],
        'BatchSubmitTranscodeJobsResultShape' => [
            'type' => 'structure',
            'members' => [
                'tasks' => [ 'type' => 'list', 'member' => [ 'shape' => 'SubmittedTranscodeTask', ], ],
            ],
        ],
        'SubmitTranscodeJobResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'SubmitTranscodeJobResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'BatchSubmitTranscodeJobsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'BatchSubmitTranscodeJobsResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
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
        'GetVideoPlayInfoResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GetVideoPlayInfoResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
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
        'UpdateVideoResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'UpdateVideoResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
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
        'BatchDeleteVideosRequestShape' => [
            'type' => 'structure',
            'members' => [
                'videoIds' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
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
        'ListVideosRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'filters' => [ 'type' => 'list', 'member' => [ 'shape' => 'Filter', ], ],
                'sorts' => [ 'type' => 'list', 'member' => [ 'shape' => 'Sort', ], ],
            ],
        ],
        'ListVideosResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'ListVideosResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DeleteVideoStreamsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DeleteVideoStreamsResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
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
        'DeleteVideoResultShape' => [
            'type' => 'structure',
            'members' => [
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
