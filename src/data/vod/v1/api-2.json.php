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
        'VerifyDomain' => [
            'name' => 'VerifyDomain',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/domains:verify',
            ],
            'input' => [ 'shape' => 'VerifyDomainRequestShape', ],
            'output' => [ 'shape' => 'VerifyDomainResponseShape', ],
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
        'GetTranscodeTask' => [
            'name' => 'GetTranscodeTask',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/transcodeTasks/{taskId}',
            ],
            'input' => [ 'shape' => 'GetTranscodeTaskRequestShape', ],
            'output' => [ 'shape' => 'GetTranscodeTaskResponseShape', ],
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
        'ListAllCategoriesResp' => [
            'type' => 'structure',
            'members' => [
                'flatResult' => [ 'type' => 'list', 'member' => [ 'shape' => 'GetCategoryResp', ], ],
                'treeResult' =>  [ 'shape' => 'CategoryTreeNode', ],
            ],
        ],
        'CreateCategoryResp' => [
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
        'UpdateCategoryResp' => [
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
        'GetCategoryResp' => [
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
        'CreateCategoryReq' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'level' => [ 'type' => 'integer', 'locationName' => 'level', ],
                'parentId' => [ 'type' => 'long', 'locationName' => 'parentId', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
            ],
        ],
        'GetCategoryWithChildrenResp' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'long', 'locationName' => 'id', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'level' => [ 'type' => 'integer', 'locationName' => 'level', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'updateTime' => [ 'type' => 'string', 'locationName' => 'updateTime', ],
                'children' => [ 'type' => 'list', 'member' => [ 'type' => 'object', ], ],
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
        'UpdateCategoryReq' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'long', 'locationName' => 'id', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'level' => [ 'type' => 'integer', 'locationName' => 'level', ],
                'parentId' => [ 'type' => 'long', 'locationName' => 'parentId', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
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
        'PageProperties' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'totalElements' => [ 'type' => 'integer', 'locationName' => 'totalElements', ],
                'totalPages' => [ 'type' => 'integer', 'locationName' => 'totalPages', ],
            ],
        ],
        'DeleteHeaderReq' => [
            'type' => 'structure',
            'members' => [
                'headerName' => [ 'type' => 'string', 'locationName' => 'headerName', ],
                'headerType' => [ 'type' => 'string', 'locationName' => 'headerType', ],
            ],
        ],
        'SetHeaderReq' => [
            'type' => 'structure',
            'members' => [
                'headerName' => [ 'type' => 'string', 'locationName' => 'headerName', ],
                'headerValue' => [ 'type' => 'string', 'locationName' => 'headerValue', ],
                'headerType' => [ 'type' => 'string', 'locationName' => 'headerType', ],
            ],
        ],
        'VerifyDomainResp' => [
            'type' => 'structure',
            'members' => [
                'domainName' => [ 'type' => 'string', 'locationName' => 'domainName', ],
                'verified' => [ 'type' => 'boolean', 'locationName' => 'verified', ],
                'icpInfo' => [ 'type' => 'string', 'locationName' => 'icpInfo', ],
            ],
        ],
        'GetHeaderResp' => [
            'type' => 'structure',
            'members' => [
                'headerName' => [ 'type' => 'string', 'locationName' => 'headerName', ],
                'headerValue' => [ 'type' => 'string', 'locationName' => 'headerValue', ],
                'headerType' => [ 'type' => 'string', 'locationName' => 'headerType', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'updateTime' => [ 'type' => 'string', 'locationName' => 'updateTime', ],
            ],
        ],
        'SetRefererRuleReq' => [
            'type' => 'structure',
            'members' => [
                'ruleType' => [ 'type' => 'string', 'locationName' => 'ruleType', ],
                'config' => [ 'type' => 'object', 'locationName' => 'config', ],
                'enabled' => [ 'type' => 'boolean', 'locationName' => 'enabled', ],
            ],
        ],
        'SetURLRuleReq' => [
            'type' => 'structure',
            'members' => [
                'ruleType' => [ 'type' => 'string', 'locationName' => 'ruleType', ],
                'config' => [ 'type' => 'object', 'locationName' => 'config', ],
                'enabled' => [ 'type' => 'boolean', 'locationName' => 'enabled', ],
            ],
        ],
        'GetDomainResp' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'cname' => [ 'type' => 'string', 'locationName' => 'cname', ],
                'source' => [ 'type' => 'string', 'locationName' => 'source', ],
                'asDefault' => [ 'type' => 'boolean', 'locationName' => 'asDefault', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'updateTime' => [ 'type' => 'string', 'locationName' => 'updateTime', ],
            ],
        ],
        'GetURLRuleResp' => [
            'type' => 'structure',
            'members' => [
                'ruleType' => [ 'type' => 'string', 'locationName' => 'ruleType', ],
                'config' => [ 'type' => 'object', 'locationName' => 'config', ],
                'enabled' => [ 'type' => 'boolean', 'locationName' => 'enabled', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'updateTime' => [ 'type' => 'string', 'locationName' => 'updateTime', ],
            ],
        ],
        'GetAllTypeRuleResp' => [
            'type' => 'structure',
            'members' => [
                'referer' =>  [ 'shape' => 'GetRefererRuleResp', ],
                'url' =>  [ 'shape' => 'GetURLRuleResp', ],
                'ip' =>  [ 'shape' => 'GetIPRuleResp', ],
            ],
        ],
        'GetRefererRuleResp' => [
            'type' => 'structure',
            'members' => [
                'ruleType' => [ 'type' => 'string', 'locationName' => 'ruleType', ],
                'config' => [ 'type' => 'object', 'locationName' => 'config', ],
                'enabled' => [ 'type' => 'boolean', 'locationName' => 'enabled', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'updateTime' => [ 'type' => 'string', 'locationName' => 'updateTime', ],
            ],
        ],
        'CreateDomainResp' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'cname' => [ 'type' => 'string', 'locationName' => 'cname', ],
                'source' => [ 'type' => 'string', 'locationName' => 'source', ],
                'asDefault' => [ 'type' => 'boolean', 'locationName' => 'asDefault', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'updateTime' => [ 'type' => 'string', 'locationName' => 'updateTime', ],
            ],
        ],
        'CreateDomainReq' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
            ],
        ],
        'SetIPRuleReq' => [
            'type' => 'structure',
            'members' => [
                'ruleType' => [ 'type' => 'string', 'locationName' => 'ruleType', ],
                'config' => [ 'type' => 'object', 'locationName' => 'config', ],
                'enabled' => [ 'type' => 'boolean', 'locationName' => 'enabled', ],
            ],
        ],
        'GetIPRuleResp' => [
            'type' => 'structure',
            'members' => [
                'ruleType' => [ 'type' => 'string', 'locationName' => 'ruleType', ],
                'config' => [ 'type' => 'object', 'locationName' => 'config', ],
                'enabled' => [ 'type' => 'boolean', 'locationName' => 'enabled', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'updateTime' => [ 'type' => 'string', 'locationName' => 'updateTime', ],
            ],
        ],
        'SubmitTranscodeJobReq' => [
            'type' => 'structure',
            'members' => [
                'videoId' => [ 'type' => 'string', 'locationName' => 'videoId', ],
                'templateIds' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'watermarkIds' => [ 'type' => 'string', 'locationName' => 'watermarkIds', ],
            ],
        ],
        'GetTranscodeTaskResp' => [
            'type' => 'structure',
            'members' => [
                'taskId' => [ 'type' => 'long', 'locationName' => 'taskId', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'mediaType' => [ 'type' => 'integer', 'locationName' => 'mediaType', ],
                'status' => [ 'type' => 'integer', 'locationName' => 'status', ],
                'progress' => [ 'type' => 'string', 'locationName' => 'progress', ],
                'size' => [ 'type' => 'long', 'locationName' => 'size', ],
                'transcodeTemplateId' => [ 'type' => 'integer', 'locationName' => 'transcodeTemplateId', ],
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
        'TranscodeTask' => [
            'type' => 'structure',
            'members' => [
                'taskId' => [ 'type' => 'long', 'locationName' => 'taskId', ],
                'videoId' => [ 'type' => 'string', 'locationName' => 'videoId', ],
                'templateId' => [ 'type' => 'long', 'locationName' => 'templateId', ],
                'watermarkIds' => [ 'type' => 'list', 'member' => [ 'type' => 'integer', ], ],
            ],
        ],
        'Encapsulation' => [
            'type' => 'structure',
            'members' => [
                'format' => [ 'type' => 'string', 'locationName' => 'format', ],
            ],
        ],
        'CreateTranscodeTemplateReq' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'video' =>  [ 'shape' => 'Video', ],
                'audio' =>  [ 'shape' => 'Audio', ],
                'encapsulation' =>  [ 'shape' => 'Encapsulation', ],
                'definition' => [ 'type' => 'string', 'locationName' => 'definition', ],
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
        'GetTranscodeTemplateResp' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'long', 'locationName' => 'id', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'video' =>  [ 'shape' => 'Video', ],
                'audio' =>  [ 'shape' => 'Audio', ],
                'encapsulation' =>  [ 'shape' => 'Encapsulation', ],
                'definition' => [ 'type' => 'string', 'locationName' => 'definition', ],
                'source' => [ 'type' => 'string', 'locationName' => 'source', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'updateTime' => [ 'type' => 'string', 'locationName' => 'updateTime', ],
            ],
        ],
        'UpdateTranscodeTemplateReq' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'long', 'locationName' => 'id', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'video' =>  [ 'shape' => 'Video', ],
                'audio' =>  [ 'shape' => 'Audio', ],
                'encapsulation' =>  [ 'shape' => 'Encapsulation', ],
                'definition' => [ 'type' => 'string', 'locationName' => 'definition', ],
            ],
        ],
        'Audio' => [
            'type' => 'structure',
            'members' => [
                'codec' => [ 'type' => 'string', 'locationName' => 'codec', ],
                'bitrate' => [ 'type' => 'integer', 'locationName' => 'bitrate', ],
                'sampleRate' => [ 'type' => 'integer', 'locationName' => 'sampleRate', ],
                'channels' => [ 'type' => 'integer', 'locationName' => 'channels', ],
            ],
        ],
        'UpdateTranscodeTemplateResp' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'long', 'locationName' => 'id', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'video' =>  [ 'shape' => 'Video', ],
                'audio' =>  [ 'shape' => 'Audio', ],
                'encapsulation' =>  [ 'shape' => 'Encapsulation', ],
                'definition' => [ 'type' => 'string', 'locationName' => 'definition', ],
                'source' => [ 'type' => 'string', 'locationName' => 'source', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'updateTime' => [ 'type' => 'string', 'locationName' => 'updateTime', ],
            ],
        ],
        'CreateTranscodeTemplateResp' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'long', 'locationName' => 'id', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'video' =>  [ 'shape' => 'Video', ],
                'audio' =>  [ 'shape' => 'Audio', ],
                'encapsulation' =>  [ 'shape' => 'Encapsulation', ],
                'definition' => [ 'type' => 'string', 'locationName' => 'definition', ],
                'source' => [ 'type' => 'string', 'locationName' => 'source', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'updateTime' => [ 'type' => 'string', 'locationName' => 'updateTime', ],
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
        'BatchDeleteVideosReq' => [
            'type' => 'structure',
            'members' => [
                'videoIds' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'DeleteVideoStreamsReq' => [
            'type' => 'structure',
            'members' => [
                'taskIds' => [ 'type' => 'list', 'member' => [ 'type' => 'integer', ], ],
            ],
        ],
        'VideoPlayInfo' => [
            'type' => 'structure',
            'members' => [
                'taskId' => [ 'type' => 'string', 'locationName' => 'taskId', ],
                'definition' => [ 'type' => 'string', 'locationName' => 'definition', ],
                'mediaType' => [ 'type' => 'integer', 'locationName' => 'mediaType', ],
                'status' => [ 'type' => 'integer', 'locationName' => 'status', ],
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
        'GetVideoResp' => [
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
        'UpdateVideoReq' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'categoryId' => [ 'type' => 'long', 'locationName' => 'categoryId', ],
                'tags' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'coverUrl' => [ 'type' => 'string', 'locationName' => 'coverUrl', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
            ],
        ],
        'GetPlayInfoResp' => [
            'type' => 'structure',
            'members' => [
                'videoInfo' =>  [ 'shape' => 'VideoBaseInfo', ],
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
                'coverImgUrl' => [ 'type' => 'string', 'locationName' => 'coverImgUrl', ],
            ],
        ],
        'BatchUpdateVideosReq' => [
            'type' => 'structure',
            'members' => [
                'contents' => [ 'type' => 'list', 'member' => [ 'type' => 'object', ], ],
            ],
        ],
        'UpdateVideoResp' => [
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
        'BatchDeleteVideosResp' => [
            'type' => 'structure',
            'members' => [
                'deletedVideoIds' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'notFoundVideoIds' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'BatchUpdateVideosResp' => [
            'type' => 'structure',
            'members' => [
                'updateVideoIds' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'notFoundVideoIds' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
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
        'GetWatermarkResp' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'long', 'locationName' => 'id', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'imgUrl' => [ 'type' => 'string', 'locationName' => 'imgUrl', ],
                'width' => [ 'type' => 'integer', 'locationName' => 'width', ],
                'height' => [ 'type' => 'integer', 'locationName' => 'height', ],
                'position' => [ 'type' => 'string', 'locationName' => 'position', ],
                'unit' => [ 'type' => 'string', 'locationName' => 'unit', ],
                'offsetX' => [ 'type' => 'integer', 'locationName' => 'offsetX', ],
                'offsetY' => [ 'type' => 'integer', 'locationName' => 'offsetY', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'updateTime' => [ 'type' => 'string', 'locationName' => 'updateTime', ],
            ],
        ],
        'UpdateWatermarkReq' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'long', 'locationName' => 'id', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'imgUrl' => [ 'type' => 'string', 'locationName' => 'imgUrl', ],
                'width' => [ 'type' => 'integer', 'locationName' => 'width', ],
                'height' => [ 'type' => 'integer', 'locationName' => 'height', ],
                'position' => [ 'type' => 'string', 'locationName' => 'position', ],
                'unit' => [ 'type' => 'string', 'locationName' => 'unit', ],
                'offsetX' => [ 'type' => 'integer', 'locationName' => 'offsetX', ],
                'offsetY' => [ 'type' => 'integer', 'locationName' => 'offsetY', ],
            ],
        ],
        'CreateWatermarkReq' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'imgUrl' => [ 'type' => 'string', 'locationName' => 'imgUrl', ],
                'width' => [ 'type' => 'integer', 'locationName' => 'width', ],
                'height' => [ 'type' => 'integer', 'locationName' => 'height', ],
                'position' => [ 'type' => 'string', 'locationName' => 'position', ],
                'unit' => [ 'type' => 'string', 'locationName' => 'unit', ],
                'offsetX' => [ 'type' => 'integer', 'locationName' => 'offsetX', ],
                'offsetY' => [ 'type' => 'integer', 'locationName' => 'offsetY', ],
            ],
        ],
        'CreateWatermarkResp' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'long', 'locationName' => 'id', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'imgUrl' => [ 'type' => 'string', 'locationName' => 'imgUrl', ],
                'width' => [ 'type' => 'integer', 'locationName' => 'width', ],
                'height' => [ 'type' => 'integer', 'locationName' => 'height', ],
                'position' => [ 'type' => 'string', 'locationName' => 'position', ],
                'unit' => [ 'type' => 'string', 'locationName' => 'unit', ],
                'offsetX' => [ 'type' => 'integer', 'locationName' => 'offsetX', ],
                'offsetY' => [ 'type' => 'integer', 'locationName' => 'offsetY', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'updateTime' => [ 'type' => 'string', 'locationName' => 'updateTime', ],
            ],
        ],
        'UpdateWatermarkResp' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'long', 'locationName' => 'id', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'imgUrl' => [ 'type' => 'string', 'locationName' => 'imgUrl', ],
                'width' => [ 'type' => 'integer', 'locationName' => 'width', ],
                'height' => [ 'type' => 'integer', 'locationName' => 'height', ],
                'position' => [ 'type' => 'string', 'locationName' => 'position', ],
                'unit' => [ 'type' => 'string', 'locationName' => 'unit', ],
                'offsetX' => [ 'type' => 'integer', 'locationName' => 'offsetX', ],
                'offsetY' => [ 'type' => 'integer', 'locationName' => 'offsetY', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'updateTime' => [ 'type' => 'string', 'locationName' => 'updateTime', ],
            ],
        ],
        'UpdateCategoryRequestShape' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'long', 'locationName' => 'id', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'level' => [ 'type' => 'integer', 'locationName' => 'level', ],
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
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'updateTime' => [ 'type' => 'string', 'locationName' => 'updateTime', ],
                'children' => [ 'type' => 'list', 'member' => [ 'type' => 'object', ], ],
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
                'level' => [ 'type' => 'integer', 'locationName' => 'level', ],
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
        'VerifyDomainRequestShape' => [
            'type' => 'structure',
            'members' => [
                'domainName' => [ 'type' => 'string', 'locationName' => 'domainName', ],
            ],
        ],
        'SetURLRuleRequestShape' => [
            'type' => 'structure',
            'members' => [
                'ruleType' => [ 'type' => 'string', 'locationName' => 'ruleType', ],
                'config' => [ 'type' => 'object', 'locationName' => 'config', ],
                'enabled' => [ 'type' => 'boolean', 'locationName' => 'enabled', ],
                'domainId' => [ 'type' => 'long', 'locationName' => 'domainId', ],
            ],
        ],
        'SetRefererRuleRequestShape' => [
            'type' => 'structure',
            'members' => [
                'ruleType' => [ 'type' => 'string', 'locationName' => 'ruleType', ],
                'config' => [ 'type' => 'object', 'locationName' => 'config', ],
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
                'config' => [ 'type' => 'object', 'locationName' => 'config', ],
                'enabled' => [ 'type' => 'boolean', 'locationName' => 'enabled', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'updateTime' => [ 'type' => 'string', 'locationName' => 'updateTime', ],
            ],
        ],
        'ListDomainsResultShape' => [
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
                'config' => [ 'type' => 'object', 'locationName' => 'config', ],
                'enabled' => [ 'type' => 'boolean', 'locationName' => 'enabled', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'updateTime' => [ 'type' => 'string', 'locationName' => 'updateTime', ],
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
        'VerifyDomainResultShape' => [
            'type' => 'structure',
            'members' => [
                'domainName' => [ 'type' => 'string', 'locationName' => 'domainName', ],
                'verified' => [ 'type' => 'boolean', 'locationName' => 'verified', ],
                'icpInfo' => [ 'type' => 'string', 'locationName' => 'icpInfo', ],
            ],
        ],
        'VerifyDomainResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'VerifyDomainResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
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
                'config' => [ 'type' => 'object', 'locationName' => 'config', ],
                'enabled' => [ 'type' => 'boolean', 'locationName' => 'enabled', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'updateTime' => [ 'type' => 'string', 'locationName' => 'updateTime', ],
            ],
        ],
        'CreateDomainResultShape' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'cname' => [ 'type' => 'string', 'locationName' => 'cname', ],
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
                'ruleType' => [ 'type' => 'string', 'locationName' => 'ruleType', ],
                'config' => [ 'type' => 'object', 'locationName' => 'config', ],
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
                'headerValue' => [ 'type' => 'string', 'locationName' => 'headerValue', ],
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
        'SubmitTranscodeJobResultShape' => [
            'type' => 'structure',
            'members' => [
                'tasks' => [ 'type' => 'list', 'member' => [ 'shape' => 'TranscodeTask', ], ],
            ],
        ],
        'SubmitTranscodeJobRequestShape' => [
            'type' => 'structure',
            'members' => [
                'videoId' => [ 'type' => 'string', 'locationName' => 'videoId', ],
                'templateIds' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'watermarkIds' => [ 'type' => 'string', 'locationName' => 'watermarkIds', ],
            ],
        ],
        'BatchSubmitTranscodeJobsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'jobs' => [ 'type' => '', 'locationName' => 'jobs', ],
            ],
        ],
        'BatchSubmitTranscodeJobsResultShape' => [
            'type' => 'structure',
            'members' => [
                'tasks' => [ 'type' => 'list', 'member' => [ 'shape' => 'TranscodeTask', ], ],
            ],
        ],
        'GetTranscodeTaskResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GetTranscodeTaskResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
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
        'GetTranscodeTaskRequestShape' => [
            'type' => 'structure',
            'members' => [
                'taskId' => [ 'type' => 'long', 'locationName' => 'taskId', ],
            ],
        ],
        'GetTranscodeTaskResultShape' => [
            'type' => 'structure',
            'members' => [
                'taskId' => [ 'type' => 'long', 'locationName' => 'taskId', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'mediaType' => [ 'type' => 'integer', 'locationName' => 'mediaType', ],
                'status' => [ 'type' => 'integer', 'locationName' => 'status', ],
                'progress' => [ 'type' => 'string', 'locationName' => 'progress', ],
                'size' => [ 'type' => 'long', 'locationName' => 'size', ],
                'transcodeTemplateId' => [ 'type' => 'integer', 'locationName' => 'transcodeTemplateId', ],
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
        'ListTranscodeTemplatesRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
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
                'id' => [ 'type' => 'long', 'locationName' => 'id', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'video' =>  [ 'shape' => 'Video', ],
                'audio' =>  [ 'shape' => 'Audio', ],
                'encapsulation' =>  [ 'shape' => 'Encapsulation', ],
                'definition' => [ 'type' => 'string', 'locationName' => 'definition', ],
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
            ],
        ],
        'CreateTranscodeTemplateResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'CreateTranscodeTemplateResultShape', ],
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
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'ListTranscodeTemplatesResultShape', ],
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
            ],
        ],
        'UpdateTranscodeTemplateResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'UpdateTranscodeTemplateResultShape', ],
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
                'deletedVideoIds' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'notFoundVideoIds' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'GetVideoPlayInfoResultShape' => [
            'type' => 'structure',
            'members' => [
                'videoInfo' =>  [ 'shape' => 'VideoBaseInfo', ],
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
                'taskIds' => [ 'type' => 'list', 'member' => [ 'type' => 'integer', ], ],
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
                'updateVideoIds' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'notFoundVideoIds' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'DeleteVideoStreamsResultShape' => [
            'type' => 'structure',
            'members' => [
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
                'contents' => [ 'type' => 'list', 'member' => [ 'type' => 'object', ], ],
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
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
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
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ListVideosResultShape' => [
            'type' => 'structure',
            'members' => [
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
                'width' => [ 'type' => 'integer', 'locationName' => 'width', ],
                'height' => [ 'type' => 'integer', 'locationName' => 'height', ],
                'position' => [ 'type' => 'string', 'locationName' => 'position', ],
                'unit' => [ 'type' => 'string', 'locationName' => 'unit', ],
                'offsetX' => [ 'type' => 'integer', 'locationName' => 'offsetX', ],
                'offsetY' => [ 'type' => 'integer', 'locationName' => 'offsetY', ],
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
            ],
        ],
        'UpdateWatermarkResultShape' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'long', 'locationName' => 'id', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'imgUrl' => [ 'type' => 'string', 'locationName' => 'imgUrl', ],
                'width' => [ 'type' => 'integer', 'locationName' => 'width', ],
                'height' => [ 'type' => 'integer', 'locationName' => 'height', ],
                'position' => [ 'type' => 'string', 'locationName' => 'position', ],
                'unit' => [ 'type' => 'string', 'locationName' => 'unit', ],
                'offsetX' => [ 'type' => 'integer', 'locationName' => 'offsetX', ],
                'offsetY' => [ 'type' => 'integer', 'locationName' => 'offsetY', ],
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
                'id' => [ 'type' => 'long', 'locationName' => 'id', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'imgUrl' => [ 'type' => 'string', 'locationName' => 'imgUrl', ],
                'width' => [ 'type' => 'integer', 'locationName' => 'width', ],
                'height' => [ 'type' => 'integer', 'locationName' => 'height', ],
                'position' => [ 'type' => 'string', 'locationName' => 'position', ],
                'unit' => [ 'type' => 'string', 'locationName' => 'unit', ],
                'offsetX' => [ 'type' => 'integer', 'locationName' => 'offsetX', ],
                'offsetY' => [ 'type' => 'integer', 'locationName' => 'offsetY', ],
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
                'width' => [ 'type' => 'integer', 'locationName' => 'width', ],
                'height' => [ 'type' => 'integer', 'locationName' => 'height', ],
                'position' => [ 'type' => 'string', 'locationName' => 'position', ],
                'unit' => [ 'type' => 'string', 'locationName' => 'unit', ],
                'offsetX' => [ 'type' => 'integer', 'locationName' => 'offsetX', ],
                'offsetY' => [ 'type' => 'integer', 'locationName' => 'offsetY', ],
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
                'width' => [ 'type' => 'integer', 'locationName' => 'width', ],
                'height' => [ 'type' => 'integer', 'locationName' => 'height', ],
                'position' => [ 'type' => 'string', 'locationName' => 'position', ],
                'unit' => [ 'type' => 'string', 'locationName' => 'unit', ],
                'offsetX' => [ 'type' => 'integer', 'locationName' => 'offsetX', ],
                'offsetY' => [ 'type' => 'integer', 'locationName' => 'offsetY', ],
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
