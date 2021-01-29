<?php
// This file was auto-generated
return [
//    'version' => '',
    'metadata' =>
    [
//        'apiVersion' => '',
//        'endpointPrefix' => 'iv',
        'protocol' => 'json',
//        'serviceFullName' => 'iv',
//        'serviceId' => 'iv',
    ],
    'operations' => [
        'SubmitViJob' => [
            'name' => 'SubmitViJob',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/viJobs:submit',
            ],
            'input' => [ 'shape' => 'SubmitViJobRequestShape', ],
            'output' => [ 'shape' => 'SubmitViJobResponseShape', ],
        ],
        'GetViJobSummary' => [
            'name' => 'GetViJobSummary',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/viJobs/{jobId}',
            ],
            'input' => [ 'shape' => 'GetViJobSummaryRequestShape', ],
            'output' => [ 'shape' => 'GetViJobSummaryResponseShape', ],
        ],
        'ListViTemplates' => [
            'name' => 'ListViTemplates',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/viTemplates',
            ],
            'input' => [ 'shape' => 'ListViTemplatesRequestShape', ],
            'output' => [ 'shape' => 'ListViTemplatesResponseShape', ],
        ],
        'CreateViTemplate' => [
            'name' => 'CreateViTemplate',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/viTemplates',
            ],
            'input' => [ 'shape' => 'CreateViTemplateRequestShape', ],
            'output' => [ 'shape' => 'CreateViTemplateResponseShape', ],
        ],
        'GetViTemplate' => [
            'name' => 'GetViTemplate',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/viTemplates/{templateId}',
            ],
            'input' => [ 'shape' => 'GetViTemplateRequestShape', ],
            'output' => [ 'shape' => 'GetViTemplateResponseShape', ],
        ],
        'UpdateViTemplate' => [
            'name' => 'UpdateViTemplate',
            'http' => [
                'method' => 'PUT',
                'requestUri' => '/v1/viTemplates/{templateId}',
            ],
            'input' => [ 'shape' => 'UpdateViTemplateRequestShape', ],
            'output' => [ 'shape' => 'UpdateViTemplateResponseShape', ],
        ],
        'DeleteViTemplate' => [
            'name' => 'DeleteViTemplate',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/viTemplates/{templateId}',
            ],
            'input' => [ 'shape' => 'DeleteViTemplateRequestShape', ],
            'output' => [ 'shape' => 'DeleteViTemplateResponseShape', ],
        ],
    ],
    'shapes' => [
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
        'ViJobSummary' => [
            'type' => 'structure',
            'members' => [
                'jobId' => [ 'type' => 'string', 'locationName' => 'jobId', ],
                'templateId' => [ 'type' => 'string', 'locationName' => 'templateId', ],
                'region' => [ 'type' => 'string', 'locationName' => 'region', ],
                'inputBucket' => [ 'type' => 'string', 'locationName' => 'inputBucket', ],
                'inputFileKey' => [ 'type' => 'string', 'locationName' => 'inputFileKey', ],
                'outputBucket' => [ 'type' => 'string', 'locationName' => 'outputBucket', ],
                'outputFilePath' => [ 'type' => 'string', 'locationName' => 'outputFilePath', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'updateTime' => [ 'type' => 'string', 'locationName' => 'updateTime', ],
            ],
        ],
        'SubmitViJobRequestInfo' => [
            'type' => 'structure',
            'members' => [
                'templateId' => [ 'type' => 'string', 'locationName' => 'templateId', ],
                'region' => [ 'type' => 'string', 'locationName' => 'region', ],
                'inputBucket' => [ 'type' => 'string', 'locationName' => 'inputBucket', ],
                'inputFileKey' => [ 'type' => 'string', 'locationName' => 'inputFileKey', ],
                'outputBucket' => [ 'type' => 'string', 'locationName' => 'outputBucket', ],
                'outputFilePath' => [ 'type' => 'string', 'locationName' => 'outputFilePath', ],
            ],
        ],
        'UpdateViTemplateRequestInfo' => [
            'type' => 'structure',
            'members' => [
                'templateName' => [ 'type' => 'string', 'locationName' => 'templateName', ],
                'shotInterval' => [ 'type' => 'integer', 'locationName' => 'shotInterval', ],
                'shotIntervalType' => [ 'type' => 'string', 'locationName' => 'shotIntervalType', ],
                'shotFormat' => [ 'type' => 'string', 'locationName' => 'shotFormat', ],
                'shotFrameType' => [ 'type' => 'string', 'locationName' => 'shotFrameType', ],
                'shotWidth' => [ 'type' => 'integer', 'locationName' => 'shotWidth', ],
                'shotHeight' => [ 'type' => 'integer', 'locationName' => 'shotHeight', ],
                'shotFillType' => [ 'type' => 'string', 'locationName' => 'shotFillType', ],
                'inspectItems' => [ 'type' => 'string', 'locationName' => 'inspectItems', ],
            ],
        ],
        'ViTemplateInfo' => [
            'type' => 'structure',
            'members' => [
                'templateId' => [ 'type' => 'string', 'locationName' => 'templateId', ],
                'templateName' => [ 'type' => 'string', 'locationName' => 'templateName', ],
                'shotInterval' => [ 'type' => 'integer', 'locationName' => 'shotInterval', ],
                'shotIntervalType' => [ 'type' => 'string', 'locationName' => 'shotIntervalType', ],
                'shotFormat' => [ 'type' => 'string', 'locationName' => 'shotFormat', ],
                'shotFrameType' => [ 'type' => 'string', 'locationName' => 'shotFrameType', ],
                'shotWidth' => [ 'type' => 'integer', 'locationName' => 'shotWidth', ],
                'shotHeight' => [ 'type' => 'integer', 'locationName' => 'shotHeight', ],
                'shotFillType' => [ 'type' => 'string', 'locationName' => 'shotFillType', ],
                'inspectItems' => [ 'type' => 'string', 'locationName' => 'inspectItems', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'updateTime' => [ 'type' => 'string', 'locationName' => 'updateTime', ],
            ],
        ],
        'CreateViTemplateRequestInfo' => [
            'type' => 'structure',
            'members' => [
                'templateName' => [ 'type' => 'string', 'locationName' => 'templateName', ],
                'shotInterval' => [ 'type' => 'integer', 'locationName' => 'shotInterval', ],
                'shotIntervalType' => [ 'type' => 'string', 'locationName' => 'shotIntervalType', ],
                'shotFormat' => [ 'type' => 'string', 'locationName' => 'shotFormat', ],
                'shotFrameType' => [ 'type' => 'string', 'locationName' => 'shotFrameType', ],
                'shotWidth' => [ 'type' => 'integer', 'locationName' => 'shotWidth', ],
                'shotHeight' => [ 'type' => 'integer', 'locationName' => 'shotHeight', ],
                'shotFillType' => [ 'type' => 'string', 'locationName' => 'shotFillType', ],
                'inspectItems' => [ 'type' => 'string', 'locationName' => 'inspectItems', ],
            ],
        ],
        'ViTemplatePageInfo' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'totalElements' => [ 'type' => 'integer', 'locationName' => 'totalElements', ],
                'totalPages' => [ 'type' => 'integer', 'locationName' => 'totalPages', ],
                'content' => [ 'type' => 'list', 'member' => [ 'shape' => 'ViTemplateInfo', ], ],
            ],
        ],
        'SubmitViJobRequestShape' => [
            'type' => 'structure',
            'members' => [
                'templateId' => [ 'type' => 'string', 'locationName' => 'templateId', ],
                'region' => [ 'type' => 'string', 'locationName' => 'region', ],
                'inputBucket' => [ 'type' => 'string', 'locationName' => 'inputBucket', ],
                'inputFileKey' => [ 'type' => 'string', 'locationName' => 'inputFileKey', ],
                'outputBucket' => [ 'type' => 'string', 'locationName' => 'outputBucket', ],
                'outputFilePath' => [ 'type' => 'string', 'locationName' => 'outputFilePath', ],
            ],
        ],
        'GetViJobSummaryResultShape' => [
            'type' => 'structure',
            'members' => [
                'jobId' => [ 'type' => 'string', 'locationName' => 'jobId', ],
                'templateId' => [ 'type' => 'string', 'locationName' => 'templateId', ],
                'region' => [ 'type' => 'string', 'locationName' => 'region', ],
                'inputBucket' => [ 'type' => 'string', 'locationName' => 'inputBucket', ],
                'inputFileKey' => [ 'type' => 'string', 'locationName' => 'inputFileKey', ],
                'outputBucket' => [ 'type' => 'string', 'locationName' => 'outputBucket', ],
                'outputFilePath' => [ 'type' => 'string', 'locationName' => 'outputFilePath', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'updateTime' => [ 'type' => 'string', 'locationName' => 'updateTime', ],
            ],
        ],
        'GetViJobSummaryRequestShape' => [
            'type' => 'structure',
            'members' => [
                'jobId' => [ 'type' => 'string', 'locationName' => 'jobId', ],
            ],
        ],
        'SubmitViJobResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'SubmitViJobResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'SubmitViJobResultShape' => [
            'type' => 'structure',
            'members' => [
                'jobId' => [ 'type' => 'string', 'locationName' => 'jobId', ],
                'templateId' => [ 'type' => 'string', 'locationName' => 'templateId', ],
                'region' => [ 'type' => 'string', 'locationName' => 'region', ],
                'inputBucket' => [ 'type' => 'string', 'locationName' => 'inputBucket', ],
                'inputFileKey' => [ 'type' => 'string', 'locationName' => 'inputFileKey', ],
                'outputBucket' => [ 'type' => 'string', 'locationName' => 'outputBucket', ],
                'outputFilePath' => [ 'type' => 'string', 'locationName' => 'outputFilePath', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'updateTime' => [ 'type' => 'string', 'locationName' => 'updateTime', ],
            ],
        ],
        'GetViJobSummaryResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GetViJobSummaryResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'UpdateViTemplateResultShape' => [
            'type' => 'structure',
            'members' => [
                'templateId' => [ 'type' => 'string', 'locationName' => 'templateId', ],
                'templateName' => [ 'type' => 'string', 'locationName' => 'templateName', ],
                'shotInterval' => [ 'type' => 'integer', 'locationName' => 'shotInterval', ],
                'shotIntervalType' => [ 'type' => 'string', 'locationName' => 'shotIntervalType', ],
                'shotFormat' => [ 'type' => 'string', 'locationName' => 'shotFormat', ],
                'shotFrameType' => [ 'type' => 'string', 'locationName' => 'shotFrameType', ],
                'shotWidth' => [ 'type' => 'integer', 'locationName' => 'shotWidth', ],
                'shotHeight' => [ 'type' => 'integer', 'locationName' => 'shotHeight', ],
                'shotFillType' => [ 'type' => 'string', 'locationName' => 'shotFillType', ],
                'inspectItems' => [ 'type' => 'string', 'locationName' => 'inspectItems', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'updateTime' => [ 'type' => 'string', 'locationName' => 'updateTime', ],
            ],
        ],
        'CreateViTemplateResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'CreateViTemplateResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DeleteViTemplateResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ListViTemplatesResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'ListViTemplatesResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'CreateViTemplateResultShape' => [
            'type' => 'structure',
            'members' => [
                'templateId' => [ 'type' => 'string', 'locationName' => 'templateId', ],
                'templateName' => [ 'type' => 'string', 'locationName' => 'templateName', ],
                'shotInterval' => [ 'type' => 'integer', 'locationName' => 'shotInterval', ],
                'shotIntervalType' => [ 'type' => 'string', 'locationName' => 'shotIntervalType', ],
                'shotFormat' => [ 'type' => 'string', 'locationName' => 'shotFormat', ],
                'shotFrameType' => [ 'type' => 'string', 'locationName' => 'shotFrameType', ],
                'shotWidth' => [ 'type' => 'integer', 'locationName' => 'shotWidth', ],
                'shotHeight' => [ 'type' => 'integer', 'locationName' => 'shotHeight', ],
                'shotFillType' => [ 'type' => 'string', 'locationName' => 'shotFillType', ],
                'inspectItems' => [ 'type' => 'string', 'locationName' => 'inspectItems', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'updateTime' => [ 'type' => 'string', 'locationName' => 'updateTime', ],
            ],
        ],
        'GetViTemplateResultShape' => [
            'type' => 'structure',
            'members' => [
                'templateId' => [ 'type' => 'string', 'locationName' => 'templateId', ],
                'templateName' => [ 'type' => 'string', 'locationName' => 'templateName', ],
                'shotInterval' => [ 'type' => 'integer', 'locationName' => 'shotInterval', ],
                'shotIntervalType' => [ 'type' => 'string', 'locationName' => 'shotIntervalType', ],
                'shotFormat' => [ 'type' => 'string', 'locationName' => 'shotFormat', ],
                'shotFrameType' => [ 'type' => 'string', 'locationName' => 'shotFrameType', ],
                'shotWidth' => [ 'type' => 'integer', 'locationName' => 'shotWidth', ],
                'shotHeight' => [ 'type' => 'integer', 'locationName' => 'shotHeight', ],
                'shotFillType' => [ 'type' => 'string', 'locationName' => 'shotFillType', ],
                'inspectItems' => [ 'type' => 'string', 'locationName' => 'inspectItems', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'updateTime' => [ 'type' => 'string', 'locationName' => 'updateTime', ],
            ],
        ],
        'UpdateViTemplateResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'UpdateViTemplateResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'GetViTemplateRequestShape' => [
            'type' => 'structure',
            'members' => [
                'templateId' => [ 'type' => 'string', 'locationName' => 'templateId', ],
            ],
        ],
        'DeleteViTemplateRequestShape' => [
            'type' => 'structure',
            'members' => [
                'templateId' => [ 'type' => 'string', 'locationName' => 'templateId', ],
            ],
        ],
        'GetViTemplateResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GetViTemplateResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DeleteViTemplateResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'ListViTemplatesRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'filters' => [ 'type' => 'list', 'member' => [ 'shape' => 'Filter', ], ],
            ],
        ],
        'ListViTemplatesResultShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'totalElements' => [ 'type' => 'integer', 'locationName' => 'totalElements', ],
                'totalPages' => [ 'type' => 'integer', 'locationName' => 'totalPages', ],
                'content' => [ 'type' => 'list', 'member' => [ 'shape' => 'ViTemplateInfo', ], ],
            ],
        ],
        'CreateViTemplateRequestShape' => [
            'type' => 'structure',
            'members' => [
                'templateName' => [ 'type' => 'string', 'locationName' => 'templateName', ],
                'shotInterval' => [ 'type' => 'integer', 'locationName' => 'shotInterval', ],
                'shotIntervalType' => [ 'type' => 'string', 'locationName' => 'shotIntervalType', ],
                'shotFormat' => [ 'type' => 'string', 'locationName' => 'shotFormat', ],
                'shotFrameType' => [ 'type' => 'string', 'locationName' => 'shotFrameType', ],
                'shotWidth' => [ 'type' => 'integer', 'locationName' => 'shotWidth', ],
                'shotHeight' => [ 'type' => 'integer', 'locationName' => 'shotHeight', ],
                'shotFillType' => [ 'type' => 'string', 'locationName' => 'shotFillType', ],
                'inspectItems' => [ 'type' => 'string', 'locationName' => 'inspectItems', ],
            ],
        ],
        'UpdateViTemplateRequestShape' => [
            'type' => 'structure',
            'members' => [
                'templateName' => [ 'type' => 'string', 'locationName' => 'templateName', ],
                'shotInterval' => [ 'type' => 'integer', 'locationName' => 'shotInterval', ],
                'shotIntervalType' => [ 'type' => 'string', 'locationName' => 'shotIntervalType', ],
                'shotFormat' => [ 'type' => 'string', 'locationName' => 'shotFormat', ],
                'shotFrameType' => [ 'type' => 'string', 'locationName' => 'shotFrameType', ],
                'shotWidth' => [ 'type' => 'integer', 'locationName' => 'shotWidth', ],
                'shotHeight' => [ 'type' => 'integer', 'locationName' => 'shotHeight', ],
                'shotFillType' => [ 'type' => 'string', 'locationName' => 'shotFillType', ],
                'inspectItems' => [ 'type' => 'string', 'locationName' => 'inspectItems', ],
                'templateId' => [ 'type' => 'string', 'locationName' => 'templateId', ],
            ],
        ],
    ],
];
