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
    ],
];
