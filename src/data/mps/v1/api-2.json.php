<?php
// This file was auto-generated
return [
//    'version' => '',
    'metadata' =>
    [
//        'apiVersion' => '',
//        'endpointPrefix' => 'mps',
        'protocol' => 'json',
//        'serviceFullName' => 'mps',
//        'serviceId' => 'mps',
    ],
    'operations' => [
        'SetCallbackSettings' => [
            'name' => 'SetCallbackSettings',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/settings:setCallbackSettings',
            ],
            'input' => [ 'shape' => 'SetCallbackSettingsRequestShape', ],
            'output' => [ 'shape' => 'SetCallbackSettingsResponseShape', ],
        ],
        'QueryCallbackSettings' => [
            'name' => 'QueryCallbackSettings',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/settings:queryCallbackSettings',
            ],
            'input' => [ 'shape' => 'QueryCallbackSettingsRequestShape', ],
            'output' => [ 'shape' => 'QueryCallbackSettingsResponseShape', ],
        ],
        'SubmitSnapshotTask' => [
            'name' => 'SubmitSnapshotTask',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/snapshotTasks:submit',
            ],
            'input' => [ 'shape' => 'SubmitSnapshotTaskRequestShape', ],
            'output' => [ 'shape' => 'SubmitSnapshotTaskResponseShape', ],
        ],
        'ListSnapshotTasks' => [
            'name' => 'ListSnapshotTasks',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/snapshotTasks',
            ],
            'input' => [ 'shape' => 'ListSnapshotTasksRequestShape', ],
            'output' => [ 'shape' => 'ListSnapshotTasksResponseShape', ],
        ],
        'GetSnapshotTask' => [
            'name' => 'GetSnapshotTask',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/snapshotTasks/{taskId}',
            ],
            'input' => [ 'shape' => 'GetSnapshotTaskRequestShape', ],
            'output' => [ 'shape' => 'GetSnapshotTaskResponseShape', ],
        ],
        'DeleteSnapshotTask' => [
            'name' => 'DeleteSnapshotTask',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/snapshotTasks/{taskId}',
            ],
            'input' => [ 'shape' => 'DeleteSnapshotTaskRequestShape', ],
            'output' => [ 'shape' => 'DeleteSnapshotTaskResponseShape', ],
        ],
        'QuerySnapshotTaskResult' => [
            'name' => 'QuerySnapshotTaskResult',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/snapshotTasks/{taskId}:queryResult',
            ],
            'input' => [ 'shape' => 'QuerySnapshotTaskResultRequestShape', ],
            'output' => [ 'shape' => 'QuerySnapshotTaskResultResponseShape', ],
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
        'ModifySnapshotTemplate' => [
            'name' => 'ModifySnapshotTemplate',
            'http' => [
                'method' => 'PATCH',
                'requestUri' => '/v1/snapshotTemplates/{templateId}',
            ],
            'input' => [ 'shape' => 'ModifySnapshotTemplateRequestShape', ],
            'output' => [ 'shape' => 'ModifySnapshotTemplateResponseShape', ],
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
                'requestUri' => '/v1/transcodeJobs:submit',
            ],
            'input' => [ 'shape' => 'SubmitTranscodeJobRequestShape', ],
            'output' => [ 'shape' => 'SubmitTranscodeJobResponseShape', ],
        ],
        'ListTranscodeJobs' => [
            'name' => 'ListTranscodeJobs',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/transcodeJobs',
            ],
            'input' => [ 'shape' => 'ListTranscodeJobsRequestShape', ],
            'output' => [ 'shape' => 'ListTranscodeJobsResponseShape', ],
        ],
        'GetTranscodeJob' => [
            'name' => 'GetTranscodeJob',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/transcodeJobs/{jobId}',
            ],
            'input' => [ 'shape' => 'GetTranscodeJobRequestShape', ],
            'output' => [ 'shape' => 'GetTranscodeJobResponseShape', ],
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
        'ModifyTranscodeTemplate' => [
            'name' => 'ModifyTranscodeTemplate',
            'http' => [
                'method' => 'PATCH',
                'requestUri' => '/v1/transcodeTemplates/{templateId}',
            ],
            'input' => [ 'shape' => 'ModifyTranscodeTemplateRequestShape', ],
            'output' => [ 'shape' => 'ModifyTranscodeTemplateResponseShape', ],
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
        'GetStyleDelimiter' => [
            'name' => 'GetStyleDelimiter',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/buckets/{bucketName}/styleDelimiter/',
            ],
            'input' => [ 'shape' => 'GetStyleDelimiterRequestShape', ],
            'output' => [ 'shape' => 'GetStyleDelimiterResponseShape', ],
        ],
        'SetStyleDelimiter' => [
            'name' => 'SetStyleDelimiter',
            'http' => [
                'method' => 'PUT',
                'requestUri' => '/v1/regions/{regionId}/buckets/{bucketName}/styleDelimiter/',
            ],
            'input' => [ 'shape' => 'SetStyleDelimiterRequestShape', ],
            'output' => [ 'shape' => 'SetStyleDelimiterResponseShape', ],
        ],
        'DeleteStyleDelimiter' => [
            'name' => 'DeleteStyleDelimiter',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/regions/{regionId}/buckets/{bucketName}/styleDelimiter/',
            ],
            'input' => [ 'shape' => 'DeleteStyleDelimiterRequestShape', ],
            'output' => [ 'shape' => 'DeleteStyleDelimiterResponseShape', ],
        ],
        'ListImageStyle' => [
            'name' => 'ListImageStyle',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/buckets/{bucketName}/imageStyles',
            ],
            'input' => [ 'shape' => 'ListImageStyleRequestShape', ],
            'output' => [ 'shape' => 'ListImageStyleResponseShape', ],
        ],
        'CreateImageStyle' => [
            'name' => 'CreateImageStyle',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/buckets/{bucketName}/imageStyles',
            ],
            'input' => [ 'shape' => 'CreateImageStyleRequestShape', ],
            'output' => [ 'shape' => 'CreateImageStyleResponseShape', ],
        ],
        'GetImageStyle' => [
            'name' => 'GetImageStyle',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/buckets/{bucketName}/imageStyles/{id}',
            ],
            'input' => [ 'shape' => 'GetImageStyleRequestShape', ],
            'output' => [ 'shape' => 'GetImageStyleResponseShape', ],
        ],
        'UpdateImageStyle' => [
            'name' => 'UpdateImageStyle',
            'http' => [
                'method' => 'PUT',
                'requestUri' => '/v1/regions/{regionId}/buckets/{bucketName}/imageStyles/{id}',
            ],
            'input' => [ 'shape' => 'UpdateImageStyleRequestShape', ],
            'output' => [ 'shape' => 'UpdateImageStyleResponseShape', ],
        ],
        'DeleteImageStyle' => [
            'name' => 'DeleteImageStyle',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/regions/{regionId}/buckets/{bucketName}/imageStyles/{id}',
            ],
            'input' => [ 'shape' => 'DeleteImageStyleRequestShape', ],
            'output' => [ 'shape' => 'DeleteImageStyleResponseShape', ],
        ],
        'CountImageStyle' => [
            'name' => 'CountImageStyle',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/buckets/{bucketName}/imageStyles/count',
            ],
            'input' => [ 'shape' => 'CountImageStyleRequestShape', ],
            'output' => [ 'shape' => 'CountImageStyleResponseShape', ],
        ],
        'ListThumbnailTask' => [
            'name' => 'ListThumbnailTask',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/thumbnail',
            ],
            'input' => [ 'shape' => 'ListThumbnailTaskRequestShape', ],
            'output' => [ 'shape' => 'ListThumbnailTaskResponseShape', ],
        ],
        'CreateThumbnailTask' => [
            'name' => 'CreateThumbnailTask',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/thumbnail',
            ],
            'input' => [ 'shape' => 'CreateThumbnailTaskRequestShape', ],
            'output' => [ 'shape' => 'CreateThumbnailTaskResponseShape', ],
        ],
        'GetThumbnailTask' => [
            'name' => 'GetThumbnailTask',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/thumbnail/{taskId}',
            ],
            'input' => [ 'shape' => 'GetThumbnailTaskRequestShape', ],
            'output' => [ 'shape' => 'GetThumbnailTaskResponseShape', ],
        ],
        'GetNotification' => [
            'name' => 'GetNotification',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/notification',
            ],
            'input' => [ 'shape' => 'GetNotificationRequestShape', ],
            'output' => [ 'shape' => 'GetNotificationResponseShape', ],
        ],
        'SetNotification' => [
            'name' => 'SetNotification',
            'http' => [
                'method' => 'PUT',
                'requestUri' => '/v1/regions/{regionId}/notification',
            ],
            'input' => [ 'shape' => 'SetNotificationRequestShape', ],
            'output' => [ 'shape' => 'SetNotificationResponseShape', ],
        ],
    ],
    'shapes' => [
        'CallbackSettings' => [
            'type' => 'structure',
            'members' => [
                'callbackEvents' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'callbackType' => [ 'type' => 'string', 'locationName' => 'callbackType', ],
                'httpUrl' => [ 'type' => 'string', 'locationName' => 'httpUrl', ],
                'disabled' => [ 'type' => 'string', 'locationName' => 'disabled', ],
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
        'Sort' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'direction' => [ 'type' => 'string', 'locationName' => 'direction', ],
            ],
        ],
        'Input' => [
            'type' => 'structure',
            'members' => [
                'region' => [ 'type' => 'string', 'locationName' => 'region', ],
                'bucket' => [ 'type' => 'string', 'locationName' => 'bucket', ],
                'objectKey' => [ 'type' => 'string', 'locationName' => 'objectKey', ],
            ],
        ],
        'Output' => [
            'type' => 'structure',
            'members' => [
                'region' => [ 'type' => 'string', 'locationName' => 'region', ],
                'bucket' => [ 'type' => 'string', 'locationName' => 'bucket', ],
                'objectPath' => [ 'type' => 'string', 'locationName' => 'objectPath', ],
            ],
        ],
        'SnapshotTaskResultObject' => [
            'type' => 'structure',
            'members' => [
                'taskId' => [ 'type' => 'string', 'locationName' => 'taskId', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'errorCode' => [ 'type' => 'string', 'locationName' => 'errorCode', ],
                'shotResult' =>  [ 'shape' => 'ShotResult', ],
                'spriteResult' =>  [ 'shape' => 'SpriteResult', ],
            ],
        ],
        'SubmitSnapshotTaskRequestObject' => [
            'type' => 'structure',
            'members' => [
                'templateId' => [ 'type' => 'string', 'locationName' => 'templateId', ],
                'input' =>  [ 'shape' => 'Input', ],
                'output' =>  [ 'shape' => 'Output', ],
                'spriteOutput' =>  [ 'shape' => 'Output', ],
            ],
        ],
        'SubmitSnapshotTaskResultObject' => [
            'type' => 'structure',
            'members' => [
                'submitResult' => [ 'type' => 'list', 'member' => [ 'shape' => 'SnapshotTaskObject', ], ],
            ],
        ],
        'SnapshotTaskObject' => [
            'type' => 'structure',
            'members' => [
                'taskId' => [ 'type' => 'string', 'locationName' => 'taskId', ],
                'startTime' => [ 'type' => 'integer', 'locationName' => 'startTime', ],
                'frameType' => [ 'type' => 'string', 'locationName' => 'frameType', ],
                'format' => [ 'type' => 'string', 'locationName' => 'format', ],
                'number' => [ 'type' => 'integer', 'locationName' => 'number', ],
                'interval' => [ 'type' => 'integer', 'locationName' => 'interval', ],
                'width' => [ 'type' => 'integer', 'locationName' => 'width', ],
                'height' => [ 'type' => 'integer', 'locationName' => 'height', ],
                'fillType' => [ 'type' => 'string', 'locationName' => 'fillType', ],
                'input' =>  [ 'shape' => 'Input', ],
                'output' =>  [ 'shape' => 'Output', ],
                'spriteConfig' =>  [ 'shape' => 'SpriteConfig', ],
                'spriteOutput' =>  [ 'shape' => 'Output', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'finishTime' => [ 'type' => 'string', 'locationName' => 'finishTime', ],
            ],
        ],
        'ListSnapshotTasksResultObject' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'totalElements' => [ 'type' => 'integer', 'locationName' => 'totalElements', ],
                'totalPages' => [ 'type' => 'integer', 'locationName' => 'totalPages', ],
                'content' => [ 'type' => 'list', 'member' => [ 'shape' => 'SnapshotTaskObject', ], ],
            ],
        ],
        'SpriteConfig' => [
            'type' => 'structure',
            'members' => [
                'rows' => [ 'type' => 'integer', 'locationName' => 'rows', ],
                'columns' => [ 'type' => 'integer', 'locationName' => 'columns', ],
                'cellWidth' => [ 'type' => 'integer', 'locationName' => 'cellWidth', ],
                'cellHeight' => [ 'type' => 'integer', 'locationName' => 'cellHeight', ],
                'doKeepShots' => [ 'type' => 'boolean', 'locationName' => 'doKeepShots', ],
            ],
        ],
        'SnapshotTemplateInfo' => [
            'type' => 'structure',
            'members' => [
                'templateId' => [ 'type' => 'string', 'locationName' => 'templateId', ],
                'title' => [ 'type' => 'string', 'locationName' => 'title', ],
                'startTime' => [ 'type' => 'integer', 'locationName' => 'startTime', ],
                'frameType' => [ 'type' => 'string', 'locationName' => 'frameType', ],
                'format' => [ 'type' => 'string', 'locationName' => 'format', ],
                'number' => [ 'type' => 'integer', 'locationName' => 'number', ],
                'interval' => [ 'type' => 'integer', 'locationName' => 'interval', ],
                'width' => [ 'type' => 'integer', 'locationName' => 'width', ],
                'height' => [ 'type' => 'integer', 'locationName' => 'height', ],
                'fillType' => [ 'type' => 'string', 'locationName' => 'fillType', ],
                'spriteConfig' =>  [ 'shape' => 'SpriteConfig', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'updateTime' => [ 'type' => 'string', 'locationName' => 'updateTime', ],
            ],
        ],
        'ListSnapshotTemplatesResultInfo' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'totalElements' => [ 'type' => 'integer', 'locationName' => 'totalElements', ],
                'totalPages' => [ 'type' => 'integer', 'locationName' => 'totalPages', ],
                'content' => [ 'type' => 'list', 'member' => [ 'shape' => 'SnapshotTemplateInfo', ], ],
            ],
        ],
        'UpdateSnapshotTemplateRequestInfo' => [
            'type' => 'structure',
            'members' => [
                'title' => [ 'type' => 'string', 'locationName' => 'title', ],
                'startTime' => [ 'type' => 'integer', 'locationName' => 'startTime', ],
                'frameType' => [ 'type' => 'string', 'locationName' => 'frameType', ],
                'format' => [ 'type' => 'string', 'locationName' => 'format', ],
                'number' => [ 'type' => 'integer', 'locationName' => 'number', ],
                'interval' => [ 'type' => 'integer', 'locationName' => 'interval', ],
                'width' => [ 'type' => 'integer', 'locationName' => 'width', ],
                'height' => [ 'type' => 'integer', 'locationName' => 'height', ],
                'fillType' => [ 'type' => 'string', 'locationName' => 'fillType', ],
                'spriteConfig' =>  [ 'shape' => 'SpriteConfig', ],
            ],
        ],
        'CreateSnapshotTemplateRequestInfo' => [
            'type' => 'structure',
            'members' => [
                'title' => [ 'type' => 'string', 'locationName' => 'title', ],
                'startTime' => [ 'type' => 'integer', 'locationName' => 'startTime', ],
                'frameType' => [ 'type' => 'string', 'locationName' => 'frameType', ],
                'format' => [ 'type' => 'string', 'locationName' => 'format', ],
                'number' => [ 'type' => 'integer', 'locationName' => 'number', ],
                'interval' => [ 'type' => 'integer', 'locationName' => 'interval', ],
                'width' => [ 'type' => 'integer', 'locationName' => 'width', ],
                'height' => [ 'type' => 'integer', 'locationName' => 'height', ],
                'fillType' => [ 'type' => 'string', 'locationName' => 'fillType', ],
                'spriteConfig' =>  [ 'shape' => 'SpriteConfig', ],
            ],
        ],
        'SubmitTranscodeJobRequestInfo' => [
            'type' => 'structure',
            'members' => [
                'accessKey' => [ 'type' => 'string', 'locationName' => 'accessKey', ],
                'secretKey' => [ 'type' => 'string', 'locationName' => 'secretKey', ],
                'endpoint' => [ 'type' => 'string', 'locationName' => 'endpoint', ],
                'bucket' => [ 'type' => 'string', 'locationName' => 'bucket', ],
                'objectKey' => [ 'type' => 'string', 'locationName' => 'objectKey', ],
                'title' => [ 'type' => 'string', 'locationName' => 'title', ],
                'templateIds' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'outputConfig' =>  [ 'shape' => 'TranscodeOutputConfig', ],
                'additionalProperties' => [ 'type' => 'string', 'locationName' => 'additionalProperties', ],
            ],
        ],
        'TranscodeOutputConfig' => [
            'type' => 'structure',
            'members' => [
                'accessKey' => [ 'type' => 'string', 'locationName' => 'accessKey', ],
                'secretKey' => [ 'type' => 'string', 'locationName' => 'secretKey', ],
                'endpoint' => [ 'type' => 'string', 'locationName' => 'endpoint', ],
                'bucket' => [ 'type' => 'string', 'locationName' => 'bucket', ],
                'outputList' => [ 'type' => 'list', 'member' => [ 'shape' => 'TranscodeOutputObject', ], ],
            ],
        ],
        'SubmitTranscodeJobResultInfo' => [
            'type' => 'structure',
            'members' => [
                'jobId' => [ 'type' => 'string', 'locationName' => 'jobId', ],
                'taskIds' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'TranscodeJobInfo' => [
            'type' => 'structure',
            'members' => [
                'jobId' => [ 'type' => 'string', 'locationName' => 'jobId', ],
                'title' => [ 'type' => 'string', 'locationName' => 'title', ],
                'tasks' => [ 'type' => 'list', 'member' => [ 'shape' => 'TranscodeTaskInfo', ], ],
            ],
        ],
        'ListTranscodeJobsResultInfo' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'totalElements' => [ 'type' => 'integer', 'locationName' => 'totalElements', ],
                'totalPages' => [ 'type' => 'integer', 'locationName' => 'totalPages', ],
                'content' => [ 'type' => 'list', 'member' => [ 'shape' => 'TranscodeJobInfo', ], ],
            ],
        ],
        'TranscodeOutputObject' => [
            'type' => 'structure',
            'members' => [
                'objectKey' => [ 'type' => 'string', 'locationName' => 'objectKey', ],
                'templateId' => [ 'type' => 'string', 'locationName' => 'templateId', ],
            ],
        ],
        'TranscodeTaskInfo' => [
            'type' => 'structure',
            'members' => [
                'jobId' => [ 'type' => 'string', 'locationName' => 'jobId', ],
                'taskId' => [ 'type' => 'string', 'locationName' => 'taskId', ],
                'objectKey' => [ 'type' => 'string', 'locationName' => 'objectKey', ],
                'format' => [ 'type' => 'string', 'locationName' => 'format', ],
                'width' => [ 'type' => 'string', 'locationName' => 'width', ],
                'height' => [ 'type' => 'string', 'locationName' => 'height', ],
                'bitrate' => [ 'type' => 'string', 'locationName' => 'bitrate', ],
                'framerate' => [ 'type' => 'string', 'locationName' => 'framerate', ],
                'definition' => [ 'type' => 'string', 'locationName' => 'definition', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'finishTime' => [ 'type' => 'string', 'locationName' => 'finishTime', ],
            ],
        ],
        'CreateTranscodeTemplateRequestInfo' => [
            'type' => 'structure',
            'members' => [
                'title' => [ 'type' => 'string', 'locationName' => 'title', ],
                'video' =>  [ 'shape' => 'VideoStreamSettings', ],
                'audio' =>  [ 'shape' => 'AudioStreamSettings', ],
                'container' =>  [ 'shape' => 'ContainerSettings', ],
                'encryption' =>  [ 'shape' => 'EncryptionSettings', ],
                'definition' => [ 'type' => 'string', 'locationName' => 'definition', ],
                'transcodeType' => [ 'type' => 'string', 'locationName' => 'transcodeType', ],
            ],
        ],
        'UpdateTranscodeTemplateRequestInfo' => [
            'type' => 'structure',
            'members' => [
                'title' => [ 'type' => 'string', 'locationName' => 'title', ],
                'video' =>  [ 'shape' => 'VideoStreamSettings', ],
                'audio' =>  [ 'shape' => 'AudioStreamSettings', ],
                'container' =>  [ 'shape' => 'ContainerSettings', ],
                'encryption' =>  [ 'shape' => 'EncryptionSettings', ],
                'definition' => [ 'type' => 'string', 'locationName' => 'definition', ],
                'transcodeType' => [ 'type' => 'string', 'locationName' => 'transcodeType', ],
            ],
        ],
        'AudioStreamSettings' => [
            'type' => 'structure',
            'members' => [
                'codec' => [ 'type' => 'string', 'locationName' => 'codec', ],
                'bitrate' => [ 'type' => 'integer', 'locationName' => 'bitrate', ],
                'sampleRate' => [ 'type' => 'integer', 'locationName' => 'sampleRate', ],
                'channels' => [ 'type' => 'integer', 'locationName' => 'channels', ],
                'comfortable' => [ 'type' => 'boolean', 'locationName' => 'comfortable', ],
            ],
        ],
        'EncryptionSettings' => [
            'type' => 'structure',
            'members' => [
                'hlsKey' => [ 'type' => 'string', 'locationName' => 'hlsKey', ],
                'hlsKeyUrl' => [ 'type' => 'string', 'locationName' => 'hlsKeyUrl', ],
                'hlsKeyEncodeType' => [ 'type' => 'string', 'locationName' => 'hlsKeyEncodeType', ],
            ],
        ],
        'ListTranscodeTemplatesResultInfo' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'totalElements' => [ 'type' => 'integer', 'locationName' => 'totalElements', ],
                'totalPages' => [ 'type' => 'integer', 'locationName' => 'totalPages', ],
                'content' => [ 'type' => 'list', 'member' => [ 'shape' => 'TranscodeTemplateInfo', ], ],
            ],
        ],
        'VideoStreamSettings' => [
            'type' => 'structure',
            'members' => [
                'codec' => [ 'type' => 'string', 'locationName' => 'codec', ],
                'rcmode' => [ 'type' => 'string', 'locationName' => 'rcmode', ],
                'rateFactor' => [ 'type' => 'string', 'locationName' => 'rateFactor', ],
                'bitrate' => [ 'type' => 'integer', 'locationName' => 'bitrate', ],
                'frameRate' => [ 'type' => 'integer', 'locationName' => 'frameRate', ],
                'width' => [ 'type' => 'integer', 'locationName' => 'width', ],
                'height' => [ 'type' => 'integer', 'locationName' => 'height', ],
            ],
        ],
        'TranscodeTemplateInfo' => [
            'type' => 'structure',
            'members' => [
                'templateId' => [ 'type' => 'string', 'locationName' => 'templateId', ],
                'title' => [ 'type' => 'string', 'locationName' => 'title', ],
                'video' =>  [ 'shape' => 'VideoStreamSettings', ],
                'audio' =>  [ 'shape' => 'AudioStreamSettings', ],
                'container' =>  [ 'shape' => 'ContainerSettings', ],
                'encryption' =>  [ 'shape' => 'EncryptionSettings', ],
                'definition' => [ 'type' => 'string', 'locationName' => 'definition', ],
                'transcodeType' => [ 'type' => 'string', 'locationName' => 'transcodeType', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'updateTime' => [ 'type' => 'string', 'locationName' => 'updateTime', ],
            ],
        ],
        'ContainerSettings' => [
            'type' => 'structure',
            'members' => [
                'format' => [ 'type' => 'string', 'locationName' => 'format', ],
            ],
        ],
        'SetCallbackSettingsResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'SetCallbackSettingsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'QueryCallbackSettingsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'QueryCallbackSettingsResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'QueryCallbackSettingsRequestShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'QueryCallbackSettingsResultShape' => [
            'type' => 'structure',
            'members' => [
                'callbackEvents' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'callbackType' => [ 'type' => 'string', 'locationName' => 'callbackType', ],
                'httpUrl' => [ 'type' => 'string', 'locationName' => 'httpUrl', ],
                'disabled' => [ 'type' => 'string', 'locationName' => 'disabled', ],
            ],
        ],
        'SetCallbackSettingsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'callbackEvents' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'callbackType' => [ 'type' => 'string', 'locationName' => 'callbackType', ],
                'httpUrl' => [ 'type' => 'string', 'locationName' => 'httpUrl', ],
                'disabled' => [ 'type' => 'string', 'locationName' => 'disabled', ],
            ],
        ],
        'ListSnapshotTasksRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'filters' => [ 'type' => 'list', 'member' => [ 'shape' => 'Filter', ], ],
            ],
        ],
        'GetSnapshotTaskRequestShape' => [
            'type' => 'structure',
            'members' => [
                'taskId' => [ 'type' => 'string', 'locationName' => 'taskId', ],
            ],
        ],
        'SubmitSnapshotTaskResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'SubmitSnapshotTaskResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'QuerySnapshotTaskResultRequestShape' => [
            'type' => 'structure',
            'members' => [
                'taskId' => [ 'type' => 'string', 'locationName' => 'taskId', ],
            ],
        ],
        'ListSnapshotTasksResultShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'totalElements' => [ 'type' => 'integer', 'locationName' => 'totalElements', ],
                'totalPages' => [ 'type' => 'integer', 'locationName' => 'totalPages', ],
                'content' => [ 'type' => 'list', 'member' => [ 'shape' => 'SnapshotTaskObject', ], ],
            ],
        ],
        'DeleteSnapshotTaskResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'QuerySnapshotTaskResultResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'QuerySnapshotTaskResultResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'SubmitSnapshotTaskRequestShape' => [
            'type' => 'structure',
            'members' => [
                'templateId' => [ 'type' => 'string', 'locationName' => 'templateId', ],
                'input' =>  [ 'shape' => 'Input', ],
                'output' =>  [ 'shape' => 'Output', ],
                'spriteOutput' =>  [ 'shape' => 'Output', ],
            ],
        ],
        'GetSnapshotTaskResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GetSnapshotTaskResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ListSnapshotTasksResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'ListSnapshotTasksResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'SubmitSnapshotTaskResultShape' => [
            'type' => 'structure',
            'members' => [
                'submitResult' => [ 'type' => 'list', 'member' => [ 'shape' => 'SnapshotTaskObject', ], ],
            ],
        ],
        'QuerySnapshotTaskResultResultShape' => [
            'type' => 'structure',
            'members' => [
                'taskId' => [ 'type' => 'string', 'locationName' => 'taskId', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'errorCode' => [ 'type' => 'string', 'locationName' => 'errorCode', ],
                'shotResult' =>  [ 'shape' => 'ShotResult', ],
                'spriteResult' =>  [ 'shape' => 'SpriteResult', ],
            ],
        ],
        'ShotResult' => [
            'type' => 'structure',
            'members' => [
                'region' => [ 'type' => 'string', 'locationName' => 'region', ],
                'bucket' => [ 'type' => 'string', 'locationName' => 'bucket', ],
                'objectKeys' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'DeleteSnapshotTaskRequestShape' => [
            'type' => 'structure',
            'members' => [
                'taskId' => [ 'type' => 'string', 'locationName' => 'taskId', ],
            ],
        ],
        'SpriteResult' => [
            'type' => 'structure',
            'members' => [
                'region' => [ 'type' => 'string', 'locationName' => 'region', ],
                'bucket' => [ 'type' => 'string', 'locationName' => 'bucket', ],
                'objectKey' => [ 'type' => 'string', 'locationName' => 'objectKey', ],
            ],
        ],
        'GetSnapshotTaskResultShape' => [
            'type' => 'structure',
            'members' => [
                'taskId' => [ 'type' => 'string', 'locationName' => 'taskId', ],
                'startTime' => [ 'type' => 'integer', 'locationName' => 'startTime', ],
                'frameType' => [ 'type' => 'string', 'locationName' => 'frameType', ],
                'format' => [ 'type' => 'string', 'locationName' => 'format', ],
                'number' => [ 'type' => 'integer', 'locationName' => 'number', ],
                'interval' => [ 'type' => 'integer', 'locationName' => 'interval', ],
                'width' => [ 'type' => 'integer', 'locationName' => 'width', ],
                'height' => [ 'type' => 'integer', 'locationName' => 'height', ],
                'fillType' => [ 'type' => 'string', 'locationName' => 'fillType', ],
                'input' =>  [ 'shape' => 'Input', ],
                'output' =>  [ 'shape' => 'Output', ],
                'spriteConfig' =>  [ 'shape' => 'SpriteConfig', ],
                'spriteOutput' =>  [ 'shape' => 'Output', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'finishTime' => [ 'type' => 'string', 'locationName' => 'finishTime', ],
            ],
        ],
        'DeleteSnapshotTaskResponseShape' => [
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
        'ModifySnapshotTemplateRequestShape' => [
            'type' => 'structure',
            'members' => [
                'title' => [ 'type' => 'string', 'locationName' => 'title', ],
                'startTime' => [ 'type' => 'integer', 'locationName' => 'startTime', ],
                'frameType' => [ 'type' => 'string', 'locationName' => 'frameType', ],
                'format' => [ 'type' => 'string', 'locationName' => 'format', ],
                'number' => [ 'type' => 'integer', 'locationName' => 'number', ],
                'interval' => [ 'type' => 'integer', 'locationName' => 'interval', ],
                'width' => [ 'type' => 'integer', 'locationName' => 'width', ],
                'height' => [ 'type' => 'integer', 'locationName' => 'height', ],
                'fillType' => [ 'type' => 'string', 'locationName' => 'fillType', ],
                'spriteConfig' =>  [ 'shape' => 'SpriteConfig', ],
                'templateId' => [ 'type' => 'string', 'locationName' => 'templateId', ],
            ],
        ],
        'GetSnapshotTemplateResultShape' => [
            'type' => 'structure',
            'members' => [
                'templateId' => [ 'type' => 'string', 'locationName' => 'templateId', ],
                'title' => [ 'type' => 'string', 'locationName' => 'title', ],
                'startTime' => [ 'type' => 'integer', 'locationName' => 'startTime', ],
                'frameType' => [ 'type' => 'string', 'locationName' => 'frameType', ],
                'format' => [ 'type' => 'string', 'locationName' => 'format', ],
                'number' => [ 'type' => 'integer', 'locationName' => 'number', ],
                'interval' => [ 'type' => 'integer', 'locationName' => 'interval', ],
                'width' => [ 'type' => 'integer', 'locationName' => 'width', ],
                'height' => [ 'type' => 'integer', 'locationName' => 'height', ],
                'fillType' => [ 'type' => 'string', 'locationName' => 'fillType', ],
                'spriteConfig' =>  [ 'shape' => 'SpriteConfig', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'updateTime' => [ 'type' => 'string', 'locationName' => 'updateTime', ],
            ],
        ],
        'ModifySnapshotTemplateResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'ModifySnapshotTemplateResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DeleteSnapshotTemplateRequestShape' => [
            'type' => 'structure',
            'members' => [
                'templateId' => [ 'type' => 'string', 'locationName' => 'templateId', ],
            ],
        ],
        'GetSnapshotTemplateRequestShape' => [
            'type' => 'structure',
            'members' => [
                'templateId' => [ 'type' => 'string', 'locationName' => 'templateId', ],
            ],
        ],
        'ModifySnapshotTemplateResultShape' => [
            'type' => 'structure',
            'members' => [
                'templateId' => [ 'type' => 'string', 'locationName' => 'templateId', ],
                'title' => [ 'type' => 'string', 'locationName' => 'title', ],
                'startTime' => [ 'type' => 'integer', 'locationName' => 'startTime', ],
                'frameType' => [ 'type' => 'string', 'locationName' => 'frameType', ],
                'format' => [ 'type' => 'string', 'locationName' => 'format', ],
                'number' => [ 'type' => 'integer', 'locationName' => 'number', ],
                'interval' => [ 'type' => 'integer', 'locationName' => 'interval', ],
                'width' => [ 'type' => 'integer', 'locationName' => 'width', ],
                'height' => [ 'type' => 'integer', 'locationName' => 'height', ],
                'fillType' => [ 'type' => 'string', 'locationName' => 'fillType', ],
                'spriteConfig' =>  [ 'shape' => 'SpriteConfig', ],
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
        'GetSnapshotTemplateResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GetSnapshotTemplateResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'CreateSnapshotTemplateResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'CreateSnapshotTemplateResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
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
        'CreateSnapshotTemplateResultShape' => [
            'type' => 'structure',
            'members' => [
                'templateId' => [ 'type' => 'string', 'locationName' => 'templateId', ],
                'title' => [ 'type' => 'string', 'locationName' => 'title', ],
                'startTime' => [ 'type' => 'integer', 'locationName' => 'startTime', ],
                'frameType' => [ 'type' => 'string', 'locationName' => 'frameType', ],
                'format' => [ 'type' => 'string', 'locationName' => 'format', ],
                'number' => [ 'type' => 'integer', 'locationName' => 'number', ],
                'interval' => [ 'type' => 'integer', 'locationName' => 'interval', ],
                'width' => [ 'type' => 'integer', 'locationName' => 'width', ],
                'height' => [ 'type' => 'integer', 'locationName' => 'height', ],
                'fillType' => [ 'type' => 'string', 'locationName' => 'fillType', ],
                'spriteConfig' =>  [ 'shape' => 'SpriteConfig', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'updateTime' => [ 'type' => 'string', 'locationName' => 'updateTime', ],
            ],
        ],
        'DeleteSnapshotTemplateResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'CreateSnapshotTemplateRequestShape' => [
            'type' => 'structure',
            'members' => [
                'title' => [ 'type' => 'string', 'locationName' => 'title', ],
                'startTime' => [ 'type' => 'integer', 'locationName' => 'startTime', ],
                'frameType' => [ 'type' => 'string', 'locationName' => 'frameType', ],
                'format' => [ 'type' => 'string', 'locationName' => 'format', ],
                'number' => [ 'type' => 'integer', 'locationName' => 'number', ],
                'interval' => [ 'type' => 'integer', 'locationName' => 'interval', ],
                'width' => [ 'type' => 'integer', 'locationName' => 'width', ],
                'height' => [ 'type' => 'integer', 'locationName' => 'height', ],
                'fillType' => [ 'type' => 'string', 'locationName' => 'fillType', ],
                'spriteConfig' =>  [ 'shape' => 'SpriteConfig', ],
            ],
        ],
        'SubmitTranscodeJobRequestShape' => [
            'type' => 'structure',
            'members' => [
                'accessKey' => [ 'type' => 'string', 'locationName' => 'accessKey', ],
                'secretKey' => [ 'type' => 'string', 'locationName' => 'secretKey', ],
                'endpoint' => [ 'type' => 'string', 'locationName' => 'endpoint', ],
                'bucket' => [ 'type' => 'string', 'locationName' => 'bucket', ],
                'objectKey' => [ 'type' => 'string', 'locationName' => 'objectKey', ],
                'title' => [ 'type' => 'string', 'locationName' => 'title', ],
                'templateIds' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'outputConfig' =>  [ 'shape' => 'TranscodeOutputConfig', ],
                'additionalProperties' => [ 'type' => 'string', 'locationName' => 'additionalProperties', ],
            ],
        ],
        'GetTranscodeJobResultShape' => [
            'type' => 'structure',
            'members' => [
                'jobId' => [ 'type' => 'string', 'locationName' => 'jobId', ],
                'title' => [ 'type' => 'string', 'locationName' => 'title', ],
                'tasks' => [ 'type' => 'list', 'member' => [ 'shape' => 'TranscodeTaskInfo', ], ],
            ],
        ],
        'SubmitTranscodeJobResultShape' => [
            'type' => 'structure',
            'members' => [
                'jobId' => [ 'type' => 'string', 'locationName' => 'jobId', ],
                'taskIds' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'GetTranscodeJobResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GetTranscodeJobResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ListTranscodeJobsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'ListTranscodeJobsResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'GetTranscodeJobRequestShape' => [
            'type' => 'structure',
            'members' => [
                'jobId' => [ 'type' => 'string', 'locationName' => 'jobId', ],
            ],
        ],
        'ListTranscodeJobsResultShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'totalElements' => [ 'type' => 'integer', 'locationName' => 'totalElements', ],
                'totalPages' => [ 'type' => 'integer', 'locationName' => 'totalPages', ],
                'content' => [ 'type' => 'list', 'member' => [ 'shape' => 'TranscodeJobInfo', ], ],
            ],
        ],
        'ListTranscodeJobsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'filters' => [ 'type' => 'list', 'member' => [ 'shape' => 'Filter', ], ],
            ],
        ],
        'SubmitTranscodeJobResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'SubmitTranscodeJobResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'CreateTranscodeTemplateResultShape' => [
            'type' => 'structure',
            'members' => [
                'templateId' => [ 'type' => 'string', 'locationName' => 'templateId', ],
                'title' => [ 'type' => 'string', 'locationName' => 'title', ],
                'video' =>  [ 'shape' => 'VideoStreamSettings', ],
                'audio' =>  [ 'shape' => 'AudioStreamSettings', ],
                'container' =>  [ 'shape' => 'ContainerSettings', ],
                'encryption' =>  [ 'shape' => 'EncryptionSettings', ],
                'definition' => [ 'type' => 'string', 'locationName' => 'definition', ],
                'transcodeType' => [ 'type' => 'string', 'locationName' => 'transcodeType', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'updateTime' => [ 'type' => 'string', 'locationName' => 'updateTime', ],
            ],
        ],
        'UpdateTranscodeTemplateRequestShape' => [
            'type' => 'structure',
            'members' => [
                'title' => [ 'type' => 'string', 'locationName' => 'title', ],
                'video' =>  [ 'shape' => 'VideoStreamSettings', ],
                'audio' =>  [ 'shape' => 'AudioStreamSettings', ],
                'container' =>  [ 'shape' => 'ContainerSettings', ],
                'encryption' =>  [ 'shape' => 'EncryptionSettings', ],
                'definition' => [ 'type' => 'string', 'locationName' => 'definition', ],
                'transcodeType' => [ 'type' => 'string', 'locationName' => 'transcodeType', ],
                'templateId' => [ 'type' => 'long', 'locationName' => 'templateId', ],
            ],
        ],
        'ModifyTranscodeTemplateResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'ModifyTranscodeTemplateResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'GetTranscodeTemplateRequestShape' => [
            'type' => 'structure',
            'members' => [
                'templateId' => [ 'type' => 'long', 'locationName' => 'templateId', ],
            ],
        ],
        'DeleteTranscodeTemplateResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'UpdateTranscodeTemplateResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'UpdateTranscodeTemplateResultShape', ],
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
        'ListTranscodeTemplatesResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'ListTranscodeTemplatesResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'CreateTranscodeTemplateResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'CreateTranscodeTemplateResultShape', ],
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
        'DeleteTranscodeTemplateRequestShape' => [
            'type' => 'structure',
            'members' => [
                'templateId' => [ 'type' => 'long', 'locationName' => 'templateId', ],
            ],
        ],
        'ModifyTranscodeTemplateResultShape' => [
            'type' => 'structure',
            'members' => [
                'templateId' => [ 'type' => 'string', 'locationName' => 'templateId', ],
                'title' => [ 'type' => 'string', 'locationName' => 'title', ],
                'video' =>  [ 'shape' => 'VideoStreamSettings', ],
                'audio' =>  [ 'shape' => 'AudioStreamSettings', ],
                'container' =>  [ 'shape' => 'ContainerSettings', ],
                'encryption' =>  [ 'shape' => 'EncryptionSettings', ],
                'definition' => [ 'type' => 'string', 'locationName' => 'definition', ],
                'transcodeType' => [ 'type' => 'string', 'locationName' => 'transcodeType', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'updateTime' => [ 'type' => 'string', 'locationName' => 'updateTime', ],
            ],
        ],
        'GetTranscodeTemplateResultShape' => [
            'type' => 'structure',
            'members' => [
                'templateId' => [ 'type' => 'string', 'locationName' => 'templateId', ],
                'title' => [ 'type' => 'string', 'locationName' => 'title', ],
                'video' =>  [ 'shape' => 'VideoStreamSettings', ],
                'audio' =>  [ 'shape' => 'AudioStreamSettings', ],
                'container' =>  [ 'shape' => 'ContainerSettings', ],
                'encryption' =>  [ 'shape' => 'EncryptionSettings', ],
                'definition' => [ 'type' => 'string', 'locationName' => 'definition', ],
                'transcodeType' => [ 'type' => 'string', 'locationName' => 'transcodeType', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'updateTime' => [ 'type' => 'string', 'locationName' => 'updateTime', ],
            ],
        ],
        'ModifyTranscodeTemplateRequestShape' => [
            'type' => 'structure',
            'members' => [
                'title' => [ 'type' => 'string', 'locationName' => 'title', ],
                'video' =>  [ 'shape' => 'VideoStreamSettings', ],
                'audio' =>  [ 'shape' => 'AudioStreamSettings', ],
                'container' =>  [ 'shape' => 'ContainerSettings', ],
                'encryption' =>  [ 'shape' => 'EncryptionSettings', ],
                'definition' => [ 'type' => 'string', 'locationName' => 'definition', ],
                'transcodeType' => [ 'type' => 'string', 'locationName' => 'transcodeType', ],
                'templateId' => [ 'type' => 'long', 'locationName' => 'templateId', ],
            ],
        ],
        'UpdateTranscodeTemplateResultShape' => [
            'type' => 'structure',
            'members' => [
                'templateId' => [ 'type' => 'string', 'locationName' => 'templateId', ],
                'title' => [ 'type' => 'string', 'locationName' => 'title', ],
                'video' =>  [ 'shape' => 'VideoStreamSettings', ],
                'audio' =>  [ 'shape' => 'AudioStreamSettings', ],
                'container' =>  [ 'shape' => 'ContainerSettings', ],
                'encryption' =>  [ 'shape' => 'EncryptionSettings', ],
                'definition' => [ 'type' => 'string', 'locationName' => 'definition', ],
                'transcodeType' => [ 'type' => 'string', 'locationName' => 'transcodeType', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'updateTime' => [ 'type' => 'string', 'locationName' => 'updateTime', ],
            ],
        ],
        'ListTranscodeTemplatesResultShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'totalElements' => [ 'type' => 'integer', 'locationName' => 'totalElements', ],
                'totalPages' => [ 'type' => 'integer', 'locationName' => 'totalPages', ],
                'content' => [ 'type' => 'list', 'member' => [ 'shape' => 'TranscodeTemplateInfo', ], ],
            ],
        ],
        'CreateTranscodeTemplateRequestShape' => [
            'type' => 'structure',
            'members' => [
                'title' => [ 'type' => 'string', 'locationName' => 'title', ],
                'video' =>  [ 'shape' => 'VideoStreamSettings', ],
                'audio' =>  [ 'shape' => 'AudioStreamSettings', ],
                'container' =>  [ 'shape' => 'ContainerSettings', ],
                'encryption' =>  [ 'shape' => 'EncryptionSettings', ],
                'definition' => [ 'type' => 'string', 'locationName' => 'definition', ],
                'transcodeType' => [ 'type' => 'string', 'locationName' => 'transcodeType', ],
            ],
        ],
        'SetStyleDelimiterResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'SetStyleDelimiterResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DeleteStyleDelimiterResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'GetStyleDelimiterRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'bucketName' => [ 'type' => 'string', 'locationName' => 'bucketName', ],
            ],
        ],
        'DeleteStyleDelimiterRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'bucketName' => [ 'type' => 'string', 'locationName' => 'bucketName', ],
            ],
        ],
        'StyleDelimiterConf' => [
            'type' => 'structure',
            'members' => [
                'delimiters' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'SetStyleDelimiterRequestShape' => [
            'type' => 'structure',
            'members' => [
                'delimiters' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'bucketName' => [ 'type' => 'string', 'locationName' => 'bucketName', ],
            ],
        ],
        'GetStyleDelimiterResultShape' => [
            'type' => 'structure',
            'members' => [
                'delimiters' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'GetStyleDelimiterResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'GetStyleDelimiterResultShape', ],
            ],
        ],
        'DeleteStyleDelimiterResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DeleteImageStyleRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'bucketName' => [ 'type' => 'string', 'locationName' => 'bucketName', ],
                'id' => [ 'type' => 'long', 'locationName' => 'id', ],
            ],
        ],
        'ImageStyleID' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'long', 'locationName' => 'id', ],
            ],
        ],
        'CountImageStyleResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'CountImageStyleResultShape', ],
            ],
        ],
        'ImageStyleQueryResult' => [
            'type' => 'structure',
            'members' => [
                'styleName' => [ 'type' => 'string', 'locationName' => 'styleName', ],
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'imageStyleList' => [ 'type' => 'list', 'member' => [ 'shape' => 'ImageStyle', ], ],
            ],
        ],
        'GetImageStyleResultShape' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'long', 'locationName' => 'id', ],
                'userId' => [ 'type' => 'string', 'locationName' => 'userId', ],
                'styleName' => [ 'type' => 'string', 'locationName' => 'styleName', ],
                'params' => [ 'type' => 'string', 'locationName' => 'params', ],
                'paramAlias' => [ 'type' => 'string', 'locationName' => 'paramAlias', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'bucketName' => [ 'type' => 'string', 'locationName' => 'bucketName', ],
                'status' => [ 'type' => 'byte', 'locationName' => 'status', ],
                'modifyTime' => [ 'type' => 'date', 'locationName' => 'modifyTime', ],
                'createdTime' => [ 'type' => 'date', 'locationName' => 'createdTime', ],
            ],
        ],
        'UpdateImageStyleRequestShape' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'long', 'locationName' => 'id', ],
                'userId' => [ 'type' => 'string', 'locationName' => 'userId', ],
                'styleName' => [ 'type' => 'string', 'locationName' => 'styleName', ],
                'params' => [ 'type' => 'string', 'locationName' => 'params', ],
                'paramAlias' => [ 'type' => 'string', 'locationName' => 'paramAlias', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'bucketName' => [ 'type' => 'string', 'locationName' => 'bucketName', ],
                'status' => [ 'type' => 'byte', 'locationName' => 'status', ],
                'modifyTime' => [ 'type' => 'date', 'locationName' => 'modifyTime', ],
                'createdTime' => [ 'type' => 'date', 'locationName' => 'createdTime', ],
            ],
        ],
        'CountImageStyleResultShape' => [
            'type' => 'structure',
            'members' => [
                'styleCount' => [ 'type' => 'integer', 'locationName' => 'styleCount', ],
            ],
        ],
        'ImageStyle' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'long', 'locationName' => 'id', ],
                'userId' => [ 'type' => 'string', 'locationName' => 'userId', ],
                'styleName' => [ 'type' => 'string', 'locationName' => 'styleName', ],
                'params' => [ 'type' => 'string', 'locationName' => 'params', ],
                'paramAlias' => [ 'type' => 'string', 'locationName' => 'paramAlias', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'bucketName' => [ 'type' => 'string', 'locationName' => 'bucketName', ],
                'status' => [ 'type' => 'byte', 'locationName' => 'status', ],
                'modifyTime' => [ 'type' => 'date', 'locationName' => 'modifyTime', ],
                'createdTime' => [ 'type' => 'date', 'locationName' => 'createdTime', ],
            ],
        ],
        'ListImageStyleResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'ListImageStyleResultShape', ],
            ],
        ],
        'CreateImageStyleRequestShape' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'long', 'locationName' => 'id', ],
                'userId' => [ 'type' => 'string', 'locationName' => 'userId', ],
                'styleName' => [ 'type' => 'string', 'locationName' => 'styleName', ],
                'params' => [ 'type' => 'string', 'locationName' => 'params', ],
                'paramAlias' => [ 'type' => 'string', 'locationName' => 'paramAlias', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'bucketName' => [ 'type' => 'string', 'locationName' => 'bucketName', ],
                'status' => [ 'type' => 'byte', 'locationName' => 'status', ],
                'modifyTime' => [ 'type' => 'date', 'locationName' => 'modifyTime', ],
                'createdTime' => [ 'type' => 'date', 'locationName' => 'createdTime', ],
            ],
        ],
        'DeleteImageStyleResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'ListImageStyleResultShape' => [
            'type' => 'structure',
            'members' => [
                'styleName' => [ 'type' => 'string', 'locationName' => 'styleName', ],
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'imageStyleList' => [ 'type' => 'list', 'member' => [ 'shape' => 'ImageStyle', ], ],
            ],
        ],
        'UpdateImageStyleResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ImageStyleCount' => [
            'type' => 'structure',
            'members' => [
                'styleCount' => [ 'type' => 'integer', 'locationName' => 'styleCount', ],
            ],
        ],
        'GetImageStyleRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'bucketName' => [ 'type' => 'string', 'locationName' => 'bucketName', ],
                'id' => [ 'type' => 'long', 'locationName' => 'id', ],
            ],
        ],
        'CreateImageStyleResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'CreateImageStyleResultShape', ],
            ],
        ],
        'DeleteImageStyleResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'GetImageStyleResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'GetImageStyleResultShape', ],
            ],
        ],
        'CreateImageStyleResultShape' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'long', 'locationName' => 'id', ],
            ],
        ],
        'ListImageStyleRequestShape' => [
            'type' => 'structure',
            'members' => [
                'styleName' => [ 'type' => 'string', 'locationName' => 'styleName', ],
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'bucketName' => [ 'type' => 'string', 'locationName' => 'bucketName', ],
            ],
        ],
        'UpdateImageStyleResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'CountImageStyleRequestShape' => [
            'type' => 'structure',
            'members' => [
                'styleName' => [ 'type' => 'string', 'locationName' => 'styleName', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'bucketName' => [ 'type' => 'string', 'locationName' => 'bucketName', ],
            ],
        ],
        'GetThumbnailTaskRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'taskId' => [ 'type' => 'string', 'locationName' => 'taskId', ],
            ],
        ],
        'ListThumbnailTaskResultShape' => [
            'type' => 'structure',
            'members' => [
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'begin' => [ 'type' => 'string', 'locationName' => 'begin', ],
                'end' => [ 'type' => 'string', 'locationName' => 'end', ],
                'marker' => [ 'type' => 'string', 'locationName' => 'marker', ],
                'limit' => [ 'type' => 'integer', 'locationName' => 'limit', ],
                'nextMarker' => [ 'type' => 'string', 'locationName' => 'nextMarker', ],
                'truncated' => [ 'type' => 'boolean', 'locationName' => 'truncated', ],
                'taskList' => [ 'type' => 'list', 'member' => [ 'shape' => 'ThumbnailTask', ], ],
            ],
        ],
        'ThumbnailTaskRule' => [
            'type' => 'structure',
            'members' => [
                'mode' => [ 'type' => 'string', 'locationName' => 'mode', ],
                'keyFrame' => [ 'type' => 'boolean', 'locationName' => 'keyFrame', ],
                'startTimeInSecond' => [ 'type' => 'integer', 'locationName' => 'startTimeInSecond', ],
                'endTimeInSecond' => [ 'type' => 'integer', 'locationName' => 'endTimeInSecond', ],
                'count' => [ 'type' => 'integer', 'locationName' => 'count', ],
            ],
        ],
        'ThumbnailTaskSource' => [
            'type' => 'structure',
            'members' => [
                'bucket' => [ 'type' => 'string', 'locationName' => 'bucket', ],
                'key' => [ 'type' => 'string', 'locationName' => 'key', ],
            ],
        ],
        'ThumbnailStatus' => [
            'type' => 'structure',
            'members' => [
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'errorCode' => [ 'type' => 'integer', 'locationName' => 'errorCode', ],
                'count' => [ 'type' => 'integer', 'locationName' => 'count', ],
            ],
        ],
        'CreateThumbnailTaskRequestShape' => [
            'type' => 'structure',
            'members' => [
                'taskID' => [ 'type' => 'string', 'locationName' => 'taskID', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'errorCode' => [ 'type' => 'integer', 'locationName' => 'errorCode', ],
                'createdTime' => [ 'type' => 'string', 'locationName' => 'createdTime', ],
                'lastUpdatedTime' => [ 'type' => 'string', 'locationName' => 'lastUpdatedTime', ],
                'source' =>  [ 'shape' => 'ThumbnailTaskSource', ],
                'target' =>  [ 'shape' => 'ThumbnailTaskTarget', ],
                'rule' =>  [ 'shape' => 'ThumbnailTaskRule', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'Notification' => [
            'type' => 'structure',
            'members' => [
                'enabled' => [ 'type' => 'boolean', 'locationName' => 'enabled', ],
                'endpoint' => [ 'type' => 'string', 'locationName' => 'endpoint', ],
                'events' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'notifyStrategy' => [ 'type' => 'string', 'locationName' => 'notifyStrategy', ],
                'notifyContentFormat' => [ 'type' => 'string', 'locationName' => 'notifyContentFormat', ],
            ],
        ],
        'ThumbnailTask' => [
            'type' => 'structure',
            'members' => [
                'taskID' => [ 'type' => 'string', 'locationName' => 'taskID', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'errorCode' => [ 'type' => 'integer', 'locationName' => 'errorCode', ],
                'createdTime' => [ 'type' => 'string', 'locationName' => 'createdTime', ],
                'lastUpdatedTime' => [ 'type' => 'string', 'locationName' => 'lastUpdatedTime', ],
                'source' =>  [ 'shape' => 'ThumbnailTaskSource', ],
                'target' =>  [ 'shape' => 'ThumbnailTaskTarget', ],
                'rule' =>  [ 'shape' => 'ThumbnailTaskRule', ],
            ],
        ],
        'CreateThumbnailTaskResultShape' => [
            'type' => 'structure',
            'members' => [
                'taskID' => [ 'type' => 'string', 'locationName' => 'taskID', ],
            ],
        ],
        'GetNotificationResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'GetNotificationResultShape', ],
            ],
        ],
        'SetNotificationResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'CreateThumbnailTaskResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'CreateThumbnailTaskResultShape', ],
            ],
        ],
        'GetThumbnailTaskResultShape' => [
            'type' => 'structure',
            'members' => [
                'taskID' => [ 'type' => 'string', 'locationName' => 'taskID', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'errorCode' => [ 'type' => 'integer', 'locationName' => 'errorCode', ],
                'createdTime' => [ 'type' => 'string', 'locationName' => 'createdTime', ],
                'lastUpdatedTime' => [ 'type' => 'string', 'locationName' => 'lastUpdatedTime', ],
                'source' =>  [ 'shape' => 'ThumbnailTaskSource', ],
                'target' =>  [ 'shape' => 'ThumbnailTaskTarget', ],
                'rule' =>  [ 'shape' => 'ThumbnailTaskRule', ],
            ],
        ],
        'ThumbnailTaskTarget' => [
            'type' => 'structure',
            'members' => [
                'destBucket' => [ 'type' => 'string', 'locationName' => 'destBucket', ],
                'destKeyPrefix' => [ 'type' => 'string', 'locationName' => 'destKeyPrefix', ],
                'format' => [ 'type' => 'string', 'locationName' => 'format', ],
                'widthInPixel' => [ 'type' => 'integer', 'locationName' => 'widthInPixel', ],
                'heightInPixel' => [ 'type' => 'integer', 'locationName' => 'heightInPixel', ],
                'keys' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'ThumbnailQuery' => [
            'type' => 'structure',
            'members' => [
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'begin' => [ 'type' => 'string', 'locationName' => 'begin', ],
                'end' => [ 'type' => 'string', 'locationName' => 'end', ],
                'marker' => [ 'type' => 'string', 'locationName' => 'marker', ],
                'limit' => [ 'type' => 'integer', 'locationName' => 'limit', ],
                'nextMarker' => [ 'type' => 'string', 'locationName' => 'nextMarker', ],
                'truncated' => [ 'type' => 'boolean', 'locationName' => 'truncated', ],
                'taskList' => [ 'type' => 'list', 'member' => [ 'shape' => 'ThumbnailTask', ], ],
            ],
        ],
        'TranscodeStatus' => [
            'type' => 'structure',
            'members' => [
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'errorCode' => [ 'type' => 'integer', 'locationName' => 'errorCode', ],
                'notifyMessage' => [ 'type' => 'string', 'locationName' => 'notifyMessage', ],
            ],
        ],
        'SetNotificationRequestShape' => [
            'type' => 'structure',
            'members' => [
                'enabled' => [ 'type' => 'boolean', 'locationName' => 'enabled', ],
                'endpoint' => [ 'type' => 'string', 'locationName' => 'endpoint', ],
                'events' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'notifyStrategy' => [ 'type' => 'string', 'locationName' => 'notifyStrategy', ],
                'notifyContentFormat' => [ 'type' => 'string', 'locationName' => 'notifyContentFormat', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'ListThumbnailTaskRequestShape' => [
            'type' => 'structure',
            'members' => [
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'begin' => [ 'type' => 'string', 'locationName' => 'begin', ],
                'end' => [ 'type' => 'string', 'locationName' => 'end', ],
                'marker' => [ 'type' => 'string', 'locationName' => 'marker', ],
                'limit' => [ 'type' => 'integer', 'locationName' => 'limit', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'ListThumbnailTaskResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'ListThumbnailTaskResultShape', ],
            ],
        ],
        'ThumbnailTaskID' => [
            'type' => 'structure',
            'members' => [
                'taskID' => [ 'type' => 'string', 'locationName' => 'taskID', ],
            ],
        ],
        'GetThumbnailTaskResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'GetThumbnailTaskResultShape', ],
            ],
        ],
        'GetNotificationResultShape' => [
            'type' => 'structure',
            'members' => [
                'enabled' => [ 'type' => 'boolean', 'locationName' => 'enabled', ],
                'endpoint' => [ 'type' => 'string', 'locationName' => 'endpoint', ],
                'events' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'notifyStrategy' => [ 'type' => 'string', 'locationName' => 'notifyStrategy', ],
                'notifyContentFormat' => [ 'type' => 'string', 'locationName' => 'notifyContentFormat', ],
            ],
        ],
        'GetNotificationRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'SetNotificationResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
    ],
];
