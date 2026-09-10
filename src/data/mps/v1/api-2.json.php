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
        'CreateAiChatConv' => [
            'name' => 'CreateAiChatConv',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/aiChat:conv',
            ],
            'input' => [ 'shape' => 'CreateAiChatConvRequestShape', ],
            'output' => [ 'shape' => 'CreateAiChatConvResponseShape', ],
        ],
        'CreateRealtimeASRTask' => [
            'name' => 'CreateRealtimeASRTask',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/asrTask',
            ],
            'input' => [ 'shape' => 'CreateRealtimeASRTaskRequestShape', ],
            'output' => [ 'shape' => 'CreateRealtimeASRTaskResponseShape', ],
        ],
        'UpdateAsrTask' => [
            'name' => 'UpdateAsrTask',
            'http' => [
                'method' => 'PUT',
                'requestUri' => '/v1/asrTask',
            ],
            'input' => [ 'shape' => 'UpdateAsrTaskRequestShape', ],
            'output' => [ 'shape' => 'UpdateAsrTaskResponseShape', ],
        ],
        'AccessRealtimeASRTaskToken' => [
            'name' => 'AccessRealtimeASRTaskToken',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/asrTaskToken',
            ],
            'input' => [ 'shape' => 'AccessRealtimeASRTaskTokenRequestShape', ],
            'output' => [ 'shape' => 'AccessRealtimeASRTaskTokenResponseShape', ],
        ],
        'DescribeASRTask' => [
            'name' => 'DescribeASRTask',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/asrTask/{taskId}',
            ],
            'input' => [ 'shape' => 'DescribeASRTaskRequestShape', ],
            'output' => [ 'shape' => 'DescribeASRTaskResponseShape', ],
        ],
        'DeleteASRTask' => [
            'name' => 'DeleteASRTask',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/asrTask/{taskId}',
            ],
            'input' => [ 'shape' => 'DeleteASRTaskRequestShape', ],
            'output' => [ 'shape' => 'DeleteASRTaskResponseShape', ],
        ],
        'DescribeASRTasks' => [
            'name' => 'DescribeASRTasks',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/asrTasks',
            ],
            'input' => [ 'shape' => 'DescribeASRTasksRequestShape', ],
            'output' => [ 'shape' => 'DescribeASRTasksResponseShape', ],
        ],
        'CreateNonRealtimeASRTasks' => [
            'name' => 'CreateNonRealtimeASRTasks',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/asrTasks',
            ],
            'input' => [ 'shape' => 'CreateNonRealtimeASRTasksRequestShape', ],
            'output' => [ 'shape' => 'CreateNonRealtimeASRTasksResponseShape', ],
        ],
        'RegenerateASRTask' => [
            'name' => 'RegenerateASRTask',
            'http' => [
                'method' => 'PUT',
                'requestUri' => '/v1/asrTask/{taskId}/regenerate',
            ],
            'input' => [ 'shape' => 'RegenerateASRTaskRequestShape', ],
            'output' => [ 'shape' => 'RegenerateASRTaskResponseShape', ],
        ],
        'ImportKnowledgeByASRTask' => [
            'name' => 'ImportKnowledgeByASRTask',
            'http' => [
                'method' => 'PUT',
                'requestUri' => '/v1/asrTask/{taskId}/importKnowledge',
            ],
            'input' => [ 'shape' => 'ImportKnowledgeByASRTaskRequestShape', ],
            'output' => [ 'shape' => 'ImportKnowledgeByASRTaskResponseShape', ],
        ],
        'DescribeMyMinutesText' => [
            'name' => 'DescribeMyMinutesText',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/asrTask/{taskId}/myMinutesText',
            ],
            'input' => [ 'shape' => 'DescribeMyMinutesTextRequestShape', ],
            'output' => [ 'shape' => 'DescribeMyMinutesTextResponseShape', ],
        ],
        'SaveMyMinutesText' => [
            'name' => 'SaveMyMinutesText',
            'http' => [
                'method' => 'PUT',
                'requestUri' => '/v1/asrTask/{taskId}/myMinutesText',
            ],
            'input' => [ 'shape' => 'SaveMyMinutesTextRequestShape', ],
            'output' => [ 'shape' => 'SaveMyMinutesTextResponseShape', ],
        ],
        'DescribeASRTaskContent' => [
            'name' => 'DescribeASRTaskContent',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/asrTask/{taskId}/content',
            ],
            'input' => [ 'shape' => 'DescribeASRTaskContentRequestShape', ],
            'output' => [ 'shape' => 'DescribeASRTaskContentResponseShape', ],
        ],
        'DescribeASRMinutesText' => [
            'name' => 'DescribeASRMinutesText',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/asrTask/{taskId}/asrMinutesText',
            ],
            'input' => [ 'shape' => 'DescribeASRMinutesTextRequestShape', ],
            'output' => [ 'shape' => 'DescribeASRMinutesTextResponseShape', ],
        ],
        'SaveASRMinutesText' => [
            'name' => 'SaveASRMinutesText',
            'http' => [
                'method' => 'PUT',
                'requestUri' => '/v1/asrTask/{taskId}/asrMinutesText',
            ],
            'input' => [ 'shape' => 'SaveASRMinutesTextRequestShape', ],
            'output' => [ 'shape' => 'SaveASRMinutesTextResponseShape', ],
        ],
        'DescribeASRTaskTemplate' => [
            'name' => 'DescribeASRTaskTemplate',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/asrTask/{taskId}/template',
            ],
            'input' => [ 'shape' => 'DescribeASRTaskTemplateRequestShape', ],
            'output' => [ 'shape' => 'DescribeASRTaskTemplateResponseShape', ],
        ],
        'SaveAsrTaskTemplate' => [
            'name' => 'SaveAsrTaskTemplate',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/asrTask/{taskId}/template',
            ],
            'input' => [ 'shape' => 'SaveAsrTaskTemplateRequestShape', ],
            'output' => [ 'shape' => 'SaveAsrTaskTemplateResponseShape', ],
        ],
        'ExportMinutesSummaryToWord' => [
            'name' => 'ExportMinutesSummaryToWord',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/exportSummary/{taskId}/word',
            ],
            'input' => [ 'shape' => 'ExportMinutesSummaryToWordRequestShape', ],
            'output' => [ 'shape' => 'ExportMinutesSummaryToWordResponseShape', ],
        ],
        'ExportMinutesTextToWord' => [
            'name' => 'ExportMinutesTextToWord',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/exportText/{taskId}/word',
            ],
            'input' => [ 'shape' => 'ExportMinutesTextToWordRequestShape', ],
            'output' => [ 'shape' => 'ExportMinutesTextToWordResponseShape', ],
        ],
        'ExportAsrContentToWord' => [
            'name' => 'ExportAsrContentToWord',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/exportContent/{taskId}/word',
            ],
            'input' => [ 'shape' => 'ExportAsrContentToWordRequestShape', ],
            'output' => [ 'shape' => 'ExportAsrContentToWordResponseShape', ],
        ],
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
        'StartProcessInstance' => [
            'name' => 'StartProcessInstance',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/startProcessInstance',
            ],
            'input' => [ 'shape' => 'StartProcessInstanceRequestShape', ],
            'output' => [ 'shape' => 'StartProcessInstanceResponseShape', ],
        ],
        'CreateGlobalHotWords' => [
            'name' => 'CreateGlobalHotWords',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/hotWords',
            ],
            'input' => [ 'shape' => 'CreateGlobalHotWordsRequestShape', ],
            'output' => [ 'shape' => 'CreateGlobalHotWordsResponseShape', ],
        ],
        'DescribeASRTaskHotWords' => [
            'name' => 'DescribeASRTaskHotWords',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/asrTask:hotWords',
            ],
            'input' => [ 'shape' => 'DescribeASRTaskHotWordsRequestShape', ],
            'output' => [ 'shape' => 'DescribeASRTaskHotWordsResponseShape', ],
        ],
        'CreateASRTaskHotWords' => [
            'name' => 'CreateASRTaskHotWords',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/asrTask:hotWords',
            ],
            'input' => [ 'shape' => 'CreateASRTaskHotWordsRequestShape', ],
            'output' => [ 'shape' => 'CreateASRTaskHotWordsResponseShape', ],
        ],
        'UpdateASRTaskHotWords' => [
            'name' => 'UpdateASRTaskHotWords',
            'http' => [
                'method' => 'PUT',
                'requestUri' => '/v1/asrTask:hotWords',
            ],
            'input' => [ 'shape' => 'UpdateASRTaskHotWordsRequestShape', ],
            'output' => [ 'shape' => 'UpdateASRTaskHotWordsResponseShape', ],
        ],
        'DeleteASRTaskHotWords' => [
            'name' => 'DeleteASRTaskHotWords',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/asrTask:hotWords',
            ],
            'input' => [ 'shape' => 'DeleteASRTaskHotWordsRequestShape', ],
            'output' => [ 'shape' => 'DeleteASRTaskHotWordsResponseShape', ],
        ],
        'DescribeASRTaskHotWordsDetails' => [
            'name' => 'DescribeASRTaskHotWordsDetails',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/asrTask:hotWordsDetails',
            ],
            'input' => [ 'shape' => 'DescribeASRTaskHotWordsDetailsRequestShape', ],
            'output' => [ 'shape' => 'DescribeASRTaskHotWordsDetailsResponseShape', ],
        ],
        'UpdateASRTaskHotWordStatus' => [
            'name' => 'UpdateASRTaskHotWordStatus',
            'http' => [
                'method' => 'PUT',
                'requestUri' => '/v1/asrTask:hotWordsStatus',
            ],
            'input' => [ 'shape' => 'UpdateASRTaskHotWordStatusRequestShape', ],
            'output' => [ 'shape' => 'UpdateASRTaskHotWordStatusResponseShape', ],
        ],
        'SubmitImageDetectionTask' => [
            'name' => 'SubmitImageDetectionTask',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/imageDetectionTask:submit',
            ],
            'input' => [ 'shape' => 'SubmitImageDetectionTaskRequestShape', ],
            'output' => [ 'shape' => 'SubmitImageDetectionTaskResponseShape', ],
        ],
        'UploadFileToKnowledgeBase' => [
            'name' => 'UploadFileToKnowledgeBase',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/knowledgeBase:upload',
            ],
            'input' => [ 'shape' => 'UploadFileToKnowledgeBaseRequestShape', ],
            'output' => [ 'shape' => 'UploadFileToKnowledgeBaseResponseShape', ],
        ],
        'BatchUploadFileToKnowledgeBase' => [
            'name' => 'BatchUploadFileToKnowledgeBase',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/knowledgeBase:batchUpload',
            ],
            'input' => [ 'shape' => 'BatchUploadFileToKnowledgeBaseRequestShape', ],
            'output' => [ 'shape' => 'BatchUploadFileToKnowledgeBaseResponseShape', ],
        ],
        'DescribeKnowledgeBaseFileDownloadUrl' => [
            'name' => 'DescribeKnowledgeBaseFileDownloadUrl',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/knowledgeBase/{knowledgeId}/download',
            ],
            'input' => [ 'shape' => 'DescribeKnowledgeBaseFileDownloadUrlRequestShape', ],
            'output' => [ 'shape' => 'DescribeKnowledgeBaseFileDownloadUrlResponseShape', ],
        ],
        'DescribeKnowledgeBaseFileRecords' => [
            'name' => 'DescribeKnowledgeBaseFileRecords',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/knowledgeBase',
            ],
            'input' => [ 'shape' => 'DescribeKnowledgeBaseFileRecordsRequestShape', ],
            'output' => [ 'shape' => 'DescribeKnowledgeBaseFileRecordsResponseShape', ],
        ],
        'UpdateKnowledgeBaseFileStatus' => [
            'name' => 'UpdateKnowledgeBaseFileStatus',
            'http' => [
                'method' => 'PUT',
                'requestUri' => '/v1/knowledgeBase:status',
            ],
            'input' => [ 'shape' => 'UpdateKnowledgeBaseFileStatusRequestShape', ],
            'output' => [ 'shape' => 'UpdateKnowledgeBaseFileStatusResponseShape', ],
        ],
        'DeleteKnowledgeBaseFileRecord' => [
            'name' => 'DeleteKnowledgeBaseFileRecord',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/knowledgeBase/{knowledgeId}',
            ],
            'input' => [ 'shape' => 'DeleteKnowledgeBaseFileRecordRequestShape', ],
            'output' => [ 'shape' => 'DeleteKnowledgeBaseFileRecordResponseShape', ],
        ],
        'BatchDeleteKnowledgeFileRecord' => [
            'name' => 'BatchDeleteKnowledgeFileRecord',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/knowledgeBase:batch',
            ],
            'input' => [ 'shape' => 'BatchDeleteKnowledgeFileRecordRequestShape', ],
            'output' => [ 'shape' => 'BatchDeleteKnowledgeFileRecordResponseShape', ],
        ],
        'QueryProcessDefinitionListPaging' => [
            'name' => 'QueryProcessDefinitionListPaging',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/process-definition',
            ],
            'input' => [ 'shape' => 'QueryProcessDefinitionListPagingRequestShape', ],
            'output' => [ 'shape' => 'QueryProcessDefinitionListPagingResponseShape', ],
        ],
        'CreateProcessDefinition' => [
            'name' => 'CreateProcessDefinition',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/process-definition',
            ],
            'input' => [ 'shape' => 'CreateProcessDefinitionRequestShape', ],
            'output' => [ 'shape' => 'CreateProcessDefinitionResponseShape', ],
        ],
        'QueryProcessDefinitionByCode' => [
            'name' => 'QueryProcessDefinitionByCode',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/process-definition/{code}',
            ],
            'input' => [ 'shape' => 'QueryProcessDefinitionByCodeRequestShape', ],
            'output' => [ 'shape' => 'QueryProcessDefinitionByCodeResponseShape', ],
        ],
        'DeleteProcessDefinitionByCode' => [
            'name' => 'DeleteProcessDefinitionByCode',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/process-definition/{code}',
            ],
            'input' => [ 'shape' => 'DeleteProcessDefinitionByCodeRequestShape', ],
            'output' => [ 'shape' => 'DeleteProcessDefinitionByCodeResponseShape', ],
        ],
        'QueryProcessInstanceList' => [
            'name' => 'QueryProcessInstanceList',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/process-instances',
            ],
            'input' => [ 'shape' => 'QueryProcessInstanceListRequestShape', ],
            'output' => [ 'shape' => 'QueryProcessInstanceListResponseShape', ],
        ],
        'QueryProcessInstanceById' => [
            'name' => 'QueryProcessInstanceById',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/process-instances/{id}',
            ],
            'input' => [ 'shape' => 'QueryProcessInstanceByIdRequestShape', ],
            'output' => [ 'shape' => 'QueryProcessInstanceByIdResponseShape', ],
        ],
        'DeleteProcessInstanceById' => [
            'name' => 'DeleteProcessInstanceById',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/process-instances/{id}',
            ],
            'input' => [ 'shape' => 'DeleteProcessInstanceByIdRequestShape', ],
            'output' => [ 'shape' => 'DeleteProcessInstanceByIdResponseShape', ],
        ],
        'QueryTaskListByProcessId' => [
            'name' => 'QueryTaskListByProcessId',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/process-instances/{id}/tasks',
            ],
            'input' => [ 'shape' => 'QueryTaskListByProcessIdRequestShape', ],
            'output' => [ 'shape' => 'QueryTaskListByProcessIdResponseShape', ],
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
        'GenTaskCodeList' => [
            'name' => 'GenTaskCodeList',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/genTaskCodes',
            ],
            'input' => [ 'shape' => 'GenTaskCodeListRequestShape', ],
            'output' => [ 'shape' => 'GenTaskCodeListResponseShape', ],
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
        'DescribeVoiceprint' => [
            'name' => 'DescribeVoiceprint',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/voiceprint',
            ],
            'input' => [ 'shape' => 'DescribeVoiceprintRequestShape', ],
            'output' => [ 'shape' => 'DescribeVoiceprintResponseShape', ],
        ],
        'SaveVoiceprint' => [
            'name' => 'SaveVoiceprint',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/voiceprint',
            ],
            'input' => [ 'shape' => 'SaveVoiceprintRequestShape', ],
            'output' => [ 'shape' => 'SaveVoiceprintResponseShape', ],
        ],
        'DeleteVoiceprint' => [
            'name' => 'DeleteVoiceprint',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/voiceprint',
            ],
            'input' => [ 'shape' => 'DeleteVoiceprintRequestShape', ],
            'output' => [ 'shape' => 'DeleteVoiceprintResponseShape', ],
        ],
        'DescribeVoiceprints' => [
            'name' => 'DescribeVoiceprints',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/voiceprints',
            ],
            'input' => [ 'shape' => 'DescribeVoiceprintsRequestShape', ],
            'output' => [ 'shape' => 'DescribeVoiceprintsResponseShape', ],
        ],
        'ListWatermarkTemplates' => [
            'name' => 'ListWatermarkTemplates',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/watermarkTemplates',
            ],
            'input' => [ 'shape' => 'ListWatermarkTemplatesRequestShape', ],
            'output' => [ 'shape' => 'ListWatermarkTemplatesResponseShape', ],
        ],
        'CreateWatermarkTemplate' => [
            'name' => 'CreateWatermarkTemplate',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/watermarkTemplates',
            ],
            'input' => [ 'shape' => 'CreateWatermarkTemplateRequestShape', ],
            'output' => [ 'shape' => 'CreateWatermarkTemplateResponseShape', ],
        ],
        'GetWatermarkTemplate' => [
            'name' => 'GetWatermarkTemplate',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/watermarkTemplates/{templateId}',
            ],
            'input' => [ 'shape' => 'GetWatermarkTemplateRequestShape', ],
            'output' => [ 'shape' => 'GetWatermarkTemplateResponseShape', ],
        ],
        'UpdateWatermarkTemplate' => [
            'name' => 'UpdateWatermarkTemplate',
            'http' => [
                'method' => 'PUT',
                'requestUri' => '/v1/watermarkTemplates/{templateId}',
            ],
            'input' => [ 'shape' => 'UpdateWatermarkTemplateRequestShape', ],
            'output' => [ 'shape' => 'UpdateWatermarkTemplateResponseShape', ],
        ],
        'DeleteWatermarkTemplate' => [
            'name' => 'DeleteWatermarkTemplate',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/watermarkTemplates/{templateId}',
            ],
            'input' => [ 'shape' => 'DeleteWatermarkTemplateRequestShape', ],
            'output' => [ 'shape' => 'DeleteWatermarkTemplateResponseShape', ],
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
        'AiChatConversationInfo' => [
            'type' => 'structure',
            'members' => [
                'conversationId' => [ 'type' => 'string', 'locationName' => 'conversationId', ],
                'timestamp' => [ 'type' => 'string', 'locationName' => 'timestamp', ],
                'conversationToken' => [ 'type' => 'string', 'locationName' => 'conversationToken', ],
            ],
        ],
        'MinutesTextReqData' => [
            'type' => 'structure',
            'members' => [
                'minutesText' => [ 'type' => 'string', 'locationName' => 'minutesText', ],
            ],
        ],
        'MinutesTextData' => [
            'type' => 'structure',
            'members' => [
                'taskId' => [ 'type' => 'string', 'locationName' => 'taskId', ],
                'minutesText' => [ 'type' => 'string', 'locationName' => 'minutesText', ],
            ],
        ],
        'CreateNonRealtimeASRTaskReqData' => [
            'type' => 'structure',
            'members' => [
                'translateFlag' => [ 'type' => 'integer', 'locationName' => 'translateFlag', ],
                'srcLanguage' => [ 'type' => 'string', 'locationName' => 'srcLanguage', ],
                'destLanguage' => [ 'type' => 'string', 'locationName' => 'destLanguage', ],
                'outputFilePath' => [ 'type' => 'string', 'locationName' => 'outputFilePath', ],
                'hotWords' => [ 'type' => 'string', 'locationName' => 'hotWords', ],
                'modeType' => [ 'type' => 'integer', 'locationName' => 'modeType', ],
                'uploadMediaUrls' => [ 'type' => 'list', 'member' => [ 'shape' => 'MediaInfo', ], ],
            ],
        ],
        'AccessRealtimeASRTaskTokenResultData' => [
            'type' => 'structure',
            'members' => [
                'taskId' => [ 'type' => 'string', 'locationName' => 'taskId', ],
                'userId' => [ 'type' => 'string', 'locationName' => 'userId', ],
                'nonce' => [ 'type' => 'string', 'locationName' => 'nonce', ],
                'token' => [ 'type' => 'string', 'locationName' => 'token', ],
                'timestamp' => [ 'type' => 'long', 'locationName' => 'timestamp', ],
                'available' => [ 'type' => 'boolean', 'locationName' => 'available', ],
                'webSocketUrl' => [ 'type' => 'string', 'locationName' => 'webSocketUrl', ],
            ],
        ],
        'ASRTaskTemplate' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'long', 'locationName' => 'id', ],
                'taskId' => [ 'type' => 'string', 'locationName' => 'taskId', ],
                'templateName' => [ 'type' => 'string', 'locationName' => 'templateName', ],
                'prompt' => [ 'type' => 'string', 'locationName' => 'prompt', ],
            ],
        ],
        'ASRTaskContentData' => [
            'type' => 'structure',
            'members' => [
                'taskId' => [ 'type' => 'string', 'locationName' => 'taskId', ],
                'status' => [ 'type' => 'integer', 'locationName' => 'status', ],
                'taskDealDurMs' => [ 'type' => 'long', 'locationName' => 'taskDealDurMs', ],
                'mediaDurationMs' => [ 'type' => 'long', 'locationName' => 'mediaDurationMs', ],
                'mediaUrl' => [ 'type' => 'string', 'locationName' => 'mediaUrl', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'contents' => [ 'type' => 'list', 'member' => [ 'shape' => 'Content', ], ],
            ],
        ],
        'UpdateAsrTaskReqData' => [
            'type' => 'structure',
            'members' => [
                'taskId' => [ 'type' => 'string', 'locationName' => 'taskId', ],
                'subject' => [ 'type' => 'string', 'locationName' => 'subject', ],
            ],
        ],
        'CreateRealtimeASRTaskReqData' => [
            'type' => 'structure',
            'members' => [
                'subject' => [ 'type' => 'string', 'locationName' => 'subject', ],
                'translateFlag' => [ 'type' => 'integer', 'locationName' => 'translateFlag', ],
                'srcLanguage' => [ 'type' => 'string', 'locationName' => 'srcLanguage', ],
                'modeType' => [ 'type' => 'integer', 'locationName' => 'modeType', ],
                'destLanguage' => [ 'type' => 'string', 'locationName' => 'destLanguage', ],
                'outputFilePath' => [ 'type' => 'string', 'locationName' => 'outputFilePath', ],
            ],
        ],
        'AccessRealtimeASRTaskTokenReqData' => [
            'type' => 'structure',
            'members' => [
                'taskId' => [ 'type' => 'string', 'locationName' => 'taskId', ],
                'timestamp' => [ 'type' => 'long', 'locationName' => 'timestamp', ],
            ],
        ],
        'MediaInfo' => [
            'type' => 'structure',
            'members' => [
                'url' => [ 'type' => 'string', 'locationName' => 'url', ],
                'subject' => [ 'type' => 'string', 'locationName' => 'subject', ],
            ],
        ],
        'SaveAsrTaskTemplateReqData' => [
            'type' => 'structure',
            'members' => [
                'prompt' => [ 'type' => 'string', 'locationName' => 'prompt', ],
            ],
        ],
        'Content' => [
            'type' => 'structure',
            'members' => [
                'userId' => [ 'type' => 'string', 'locationName' => 'userId', ],
                'username' => [ 'type' => 'string', 'locationName' => 'username', ],
                'text' => [ 'type' => 'string', 'locationName' => 'text', ],
                'beginMs' => [ 'type' => 'long', 'locationName' => 'beginMs', ],
                'endMs' => [ 'type' => 'long', 'locationName' => 'endMs', ],
                'absBeginMs' => [ 'type' => 'long', 'locationName' => 'absBeginMs', ],
                'absEndMs' => [ 'type' => 'long', 'locationName' => 'absEndMs', ],
                'absBegin' => [ 'type' => 'string', 'locationName' => 'absBegin', ],
                'absEnd' => [ 'type' => 'string', 'locationName' => 'absEnd', ],
                'correctedBeginMs' => [ 'type' => 'long', 'locationName' => 'correctedBeginMs', ],
                'correctedEndMs' => [ 'type' => 'long', 'locationName' => 'correctedEndMs', ],
                'score' => [ 'type' => 'double', 'locationName' => 'score', ],
            ],
        ],
        'ASRTask' => [
            'type' => 'structure',
            'members' => [
                'taskId' => [ 'type' => 'string', 'locationName' => 'taskId', ],
                'subject' => [ 'type' => 'string', 'locationName' => 'subject', ],
                'status' => [ 'type' => 'integer', 'locationName' => 'status', ],
                'taskType' => [ 'type' => 'integer', 'locationName' => 'taskType', ],
                'translateFlag' => [ 'type' => 'integer', 'locationName' => 'translateFlag', ],
                'srcLanguage' => [ 'type' => 'string', 'locationName' => 'srcLanguage', ],
                'destLanguage' => [ 'type' => 'string', 'locationName' => 'destLanguage', ],
                'outputFilePath' => [ 'type' => 'string', 'locationName' => 'outputFilePath', ],
                'modeType' => [ 'type' => 'integer', 'locationName' => 'modeType', ],
            ],
        ],
        'CreateNonRealtimeASRTasksData' => [
            'type' => 'structure',
            'members' => [
                'content' => [ 'type' => 'list', 'member' => [ 'shape' => 'ASRTask', ], ],
            ],
        ],
        'ASRTaskPageData' => [
            'type' => 'structure',
            'members' => [
                'totalElements' => [ 'type' => 'integer', 'locationName' => 'totalElements', ],
                'totalPages' => [ 'type' => 'integer', 'locationName' => 'totalPages', ],
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'content' => [ 'type' => 'list', 'member' => [ 'shape' => 'ASRTask', ], ],
            ],
        ],
        'DocumentExportData' => [
            'type' => 'structure',
            'members' => [
                'content' => [ 'type' => 'string', 'locationName' => 'content', ],
                'fileName' => [ 'type' => 'string', 'locationName' => 'fileName', ],
                'contentType' => [ 'type' => 'string', 'locationName' => 'contentType', ],
                'size' => [ 'type' => 'long', 'locationName' => 'size', ],
            ],
        ],
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
        'CommandParam' => [
            'type' => 'structure',
            'members' => [
                'region' => [ 'type' => 'string', 'locationName' => 'region', ],
                'bucket' => [ 'type' => 'string', 'locationName' => 'bucket', ],
                'objectKey' => [ 'type' => 'string', 'locationName' => 'objectKey', ],
            ],
        ],
        'CreateGlobalHotWordsReqData' => [
            'type' => 'structure',
            'members' => [
                'hotWord' => [ 'type' => 'string', 'locationName' => 'hotWord', ],
            ],
        ],
        'UpdateHotWordStatusReqData' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'long', 'locationName' => 'id', ],
                'status' => [ 'type' => 'integer', 'locationName' => 'status', ],
            ],
        ],
        'HotWordResultData' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'long', 'locationName' => 'id', ],
                'hotWord' => [ 'type' => 'string', 'locationName' => 'hotWord', ],
                'status' => [ 'type' => 'integer', 'locationName' => 'status', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'updateTime' => [ 'type' => 'string', 'locationName' => 'updateTime', ],
            ],
        ],
        'HotWordPageData' => [
            'type' => 'structure',
            'members' => [
                'totalElements' => [ 'type' => 'integer', 'locationName' => 'totalElements', ],
                'totalPages' => [ 'type' => 'integer', 'locationName' => 'totalPages', ],
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'content' => [ 'type' => 'list', 'member' => [ 'shape' => 'HotWord', ], ],
            ],
        ],
        'UpdateHotWordReqData' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'long', 'locationName' => 'id', ],
                'hotWord' => [ 'type' => 'string', 'locationName' => 'hotWord', ],
            ],
        ],
        'QueryHotWordPageReqData' => [
            'type' => 'structure',
            'members' => [
                'hotWord' => [ 'type' => 'string', 'locationName' => 'hotWord', ],
                'taskId' => [ 'type' => 'string', 'locationName' => 'taskId', ],
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
            ],
        ],
        'HotWord' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'long', 'locationName' => 'id', ],
                'taskId' => [ 'type' => 'string', 'locationName' => 'taskId', ],
                'hotWord' => [ 'type' => 'string', 'locationName' => 'hotWord', ],
                'status' => [ 'type' => 'integer', 'locationName' => 'status', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'updateTime' => [ 'type' => 'string', 'locationName' => 'updateTime', ],
            ],
        ],
        'CreateHotWordReqData' => [
            'type' => 'structure',
            'members' => [
                'hotWord' => [ 'type' => 'string', 'locationName' => 'hotWord', ],
                'taskId' => [ 'type' => 'string', 'locationName' => 'taskId', ],
            ],
        ],
        'ImageDetectionInput' => [
            'type' => 'structure',
            'members' => [
                'bucket' => [ 'type' => 'string', 'locationName' => 'bucket', ],
                'objectKey' => [ 'type' => 'string', 'locationName' => 'objectKey', ],
            ],
        ],
        'ImageDetectionTaskObject' => [
            'type' => 'structure',
            'members' => [
                'taskId' => [ 'type' => 'string', 'locationName' => 'taskId', ],
                'detectionType' => [ 'type' => 'string', 'locationName' => 'detectionType', ],
                'input' =>  [ 'shape' => 'ImageDetectionInput', ],
                'output' =>  [ 'shape' => 'ImageDetectionOutput', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'resultData' => [ 'type' => 'string', 'locationName' => 'resultData', ],
                'errorMessage' => [ 'type' => 'string', 'locationName' => 'errorMessage', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'updateTime' => [ 'type' => 'string', 'locationName' => 'updateTime', ],
                'finishTime' => [ 'type' => 'string', 'locationName' => 'finishTime', ],
            ],
        ],
        'ImageDetectionOutput' => [
            'type' => 'structure',
            'members' => [
                'bucket' => [ 'type' => 'string', 'locationName' => 'bucket', ],
                'objectKey' => [ 'type' => 'string', 'locationName' => 'objectKey', ],
            ],
        ],
        'SubmitImageDetectionTaskRequestObject' => [
            'type' => 'structure',
            'members' => [
                'input' =>  [ 'shape' => 'ImageDetectionInput', ],
                'output' =>  [ 'shape' => 'ImageDetectionOutput', ],
                'detectionType' => [ 'type' => 'string', 'locationName' => 'detectionType', ],
            ],
        ],
        'SubmitImageDetectionTaskResultObject' => [
            'type' => 'structure',
            'members' => [
                'taskId' => [ 'type' => 'string', 'locationName' => 'taskId', ],
            ],
        ],
        'ListImageDetectionTaskResultObject' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'totalElements' => [ 'type' => 'integer', 'locationName' => 'totalElements', ],
                'totalPages' => [ 'type' => 'integer', 'locationName' => 'totalPages', ],
                'content' => [ 'type' => 'list', 'member' => [ 'shape' => 'ImageDetectionTaskObject', ], ],
            ],
        ],
        'BatchUploadFileToKnowledgeBaseReqData' => [
            'type' => 'structure',
            'members' => [
                'content' => [ 'type' => 'list', 'member' => [ 'shape' => 'UploadFileToKnowledgeBaseReqData', ], ],
            ],
        ],
        'BatchUploadFileToKnowledgeBaseResultData' => [
            'type' => 'structure',
            'members' => [
                'content' => [ 'type' => 'list', 'member' => [ 'shape' => 'UploadKnowledgeData', ], ],
            ],
        ],
        'KnowledgeFileRecordPageData' => [
            'type' => 'structure',
            'members' => [
                'totalElements' => [ 'type' => 'integer', 'locationName' => 'totalElements', ],
                'totalPages' => [ 'type' => 'integer', 'locationName' => 'totalPages', ],
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'content' => [ 'type' => 'list', 'member' => [ 'shape' => 'KnowledgeFileRecord', ], ],
            ],
        ],
        'UploadKnowledgeFileStatus' => [
            'type' => 'structure',
            'members' => [
                'knowledgeId' => [ 'type' => 'string', 'locationName' => 'knowledgeId', ],
                'status' => [ 'type' => 'integer', 'locationName' => 'status', ],
            ],
        ],
        'UploadFileToKnowledgeBaseReqData' => [
            'type' => 'structure',
            'members' => [
                'bucket' => [ 'type' => 'string', 'locationName' => 'bucket', ],
                'objectKey' => [ 'type' => 'string', 'locationName' => 'objectKey', ],
                'fileName' => [ 'type' => 'string', 'locationName' => 'fileName', ],
                'fileMd5' => [ 'type' => 'string', 'locationName' => 'fileMd5', ],
            ],
        ],
        'KnowledgeFileRecord' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'long', 'locationName' => 'id', ],
                'knowledgeId' => [ 'type' => 'string', 'locationName' => 'knowledgeId', ],
                'fileName' => [ 'type' => 'string', 'locationName' => 'fileName', ],
                'fileSize' => [ 'type' => 'integer', 'locationName' => 'fileSize', ],
                'fileType' => [ 'type' => 'string', 'locationName' => 'fileType', ],
                'status' => [ 'type' => 'integer', 'locationName' => 'status', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'updateTime' => [ 'type' => 'string', 'locationName' => 'updateTime', ],
            ],
        ],
        'UploadKnowledgeData' => [
            'type' => 'structure',
            'members' => [
                'fileName' => [ 'type' => 'string', 'locationName' => 'fileName', ],
                'status' => [ 'type' => 'integer', 'locationName' => 'status', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
            ],
        ],
        'TaskDefinition' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'integer', 'locationName' => 'id', ],
                'code' => [ 'type' => 'long', 'locationName' => 'code', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'taskType' => [ 'type' => 'string', 'locationName' => 'taskType', ],
                'taskParams' => [ 'type' => 'map', 'key' => [ 'type' => 'string', ], 'value' => [ 'type' => 'string', ], ],
            ],
        ],
        'DagData' => [
            'type' => 'structure',
            'members' => [
                'processDefinition' =>  [ 'shape' => 'ProcessDefinition', ],
                'taskDefinitionList' => [ 'type' => 'list', 'member' => [ 'shape' => 'TaskDefinition', ], ],
                'taskRelationList' => [ 'type' => 'list', 'member' => [ 'shape' => 'ProcessTaskRelation', ], ],
            ],
        ],
        'ProcessTaskRelation' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'integer', 'locationName' => 'id', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'processDefinitionCode' => [ 'type' => 'long', 'locationName' => 'processDefinitionCode', ],
                'preTaskCode' => [ 'type' => 'long', 'locationName' => 'preTaskCode', ],
                'postTaskCode' => [ 'type' => 'long', 'locationName' => 'postTaskCode', ],
            ],
        ],
        'SnapshotNodeParam' => [
            'type' => 'structure',
            'members' => [
                'templateId' => [ 'type' => 'string', 'locationName' => 'templateId', ],
                'output' =>  [ 'shape' => 'Output', ],
                'spriteOutput' =>  [ 'shape' => 'Output', ],
            ],
        ],
        'TranscodeNodeParam' => [
            'type' => 'structure',
            'members' => [
                'accessKey' => [ 'type' => 'string', 'locationName' => 'accessKey', ],
                'secretKey' => [ 'type' => 'string', 'locationName' => 'secretKey', ],
                'endpoint' => [ 'type' => 'string', 'locationName' => 'endpoint', ],
                'title' => [ 'type' => 'string', 'locationName' => 'title', ],
                'templateId' => [ 'type' => 'string', 'locationName' => 'templateId', ],
                'outputConfig' =>  [ 'shape' => 'TranscodeOutputParam', ],
                'additionalProperties' => [ 'type' => 'string', 'locationName' => 'additionalProperties', ],
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
        'ProcessDefinition' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'integer', 'locationName' => 'id', ],
                'code' => [ 'type' => 'long', 'locationName' => 'code', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
            ],
        ],
        'CreateProcessDefinitionReq' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'taskDefinitionList' => [ 'type' => 'list', 'member' => [ 'shape' => 'TaskDefinition', ], ],
                'taskRelationList' => [ 'type' => 'list', 'member' => [ 'shape' => 'ProcessTaskRelation', ], ],
            ],
        ],
        'InputNodeParam' => [
            'type' => 'structure',
            'members' => [
                'region' => [ 'type' => 'string', 'locationName' => 'region', ],
                'bucket' => [ 'type' => 'string', 'locationName' => 'bucket', ],
                'path' => [ 'type' => 'string', 'locationName' => 'path', ],
            ],
        ],
        'TranscodeOutputObject' => [
            'type' => 'structure',
            'members' => [
                'objectKey' => [ 'type' => 'string', 'locationName' => 'objectKey', ],
                'templateId' => [ 'type' => 'string', 'locationName' => 'templateId', ],
                'watermarkIds' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'TranscodeOutputParam' => [
            'type' => 'structure',
            'members' => [
                'accessKey' => [ 'type' => 'string', 'locationName' => 'accessKey', ],
                'secretKey' => [ 'type' => 'string', 'locationName' => 'secretKey', ],
                'endpoint' => [ 'type' => 'string', 'locationName' => 'endpoint', ],
                'bucket' => [ 'type' => 'string', 'locationName' => 'bucket', ],
                'output' =>  [ 'shape' => 'TranscodeOutputObject', ],
            ],
        ],
        'ProcessInstanceDetail' => [
            'type' => 'structure',
            'members' => [
                'taskList' => [ 'type' => 'list', 'member' => [ 'shape' => 'TaskInstance', ], ],
            ],
        ],
        'ProcessInstance' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'integer', 'locationName' => 'id', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'processDefinitionCode' => [ 'type' => 'long', 'locationName' => 'processDefinitionCode', ],
                'state' => [ 'type' => 'string', 'locationName' => 'state', ],
                'startTime' => [ 'type' => 'string', 'locationName' => 'startTime', ],
                'endTime' => [ 'type' => 'string', 'locationName' => 'endTime', ],
                'dagData' =>  [ 'shape' => 'DagData', ],
            ],
        ],
        'TaskInstance' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'integer', 'locationName' => 'id', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'taskType' => [ 'type' => 'string', 'locationName' => 'taskType', ],
                'taskCode' => [ 'type' => 'long', 'locationName' => 'taskCode', ],
                'processInstanceId' => [ 'type' => 'integer', 'locationName' => 'processInstanceId', ],
                'state' => [ 'type' => 'string', 'locationName' => 'state', ],
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
                'configData' => [ 'type' => 'string', 'locationName' => 'configData', ],
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
                'configData' => [ 'type' => 'string', 'locationName' => 'configData', ],
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
                'configData' => [ 'type' => 'string', 'locationName' => 'configData', ],
            ],
        ],
        'TaskCodeList' => [
            'type' => 'structure',
            'members' => [
                'codes' => [ 'type' => 'list', 'member' => [ 'type' => 'long', ], ],
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
                'encoding' => [ 'type' => 'string', 'locationName' => 'encoding', ],
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
                'frameRate' => [ 'type' => 'string', 'locationName' => 'frameRate', ],
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
        'ClipOperation' => [
            'type' => 'structure',
            'members' => [
                'opType' => [ 'type' => 'string', 'locationName' => 'opType', ],
                'params' => [ 'type' => 'object', 'locationName' => 'params', ],
            ],
        ],
        'FontFace' => [
            'type' => 'structure',
            'members' => [
                'bold' => [ 'type' => 'boolean', 'locationName' => 'bold', ],
                'italic' => [ 'type' => 'boolean', 'locationName' => 'italic', ],
                'underline' => [ 'type' => 'boolean', 'locationName' => 'underline', ],
                'strikeOut' => [ 'type' => 'boolean', 'locationName' => 'strikeOut', ],
            ],
        ],
        'VeditJobSubmitReqData' => [
            'type' => 'structure',
            'members' => [
                'projectId' => [ 'type' => 'long', 'locationName' => 'projectId', ],
                'mediaMetadata' =>  [ 'shape' => 'MediaMetadata', ],
                'userData' => [ 'type' => 'string', 'locationName' => 'userData', ],
            ],
        ],
        'VeditJobCreateReqData' => [
            'type' => 'structure',
            'members' => [
                'projectName' => [ 'type' => 'string', 'locationName' => 'projectName', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'timeline' =>  [ 'shape' => 'Timeline', ],
                'mediaMetadata' =>  [ 'shape' => 'MediaMetadata', ],
                'userData' => [ 'type' => 'string', 'locationName' => 'userData', ],
            ],
        ],
        'MediaOutput' => [
            'type' => 'structure',
            'members' => [
                'region' => [ 'type' => 'string', 'locationName' => 'region', ],
                'bucket' => [ 'type' => 'string', 'locationName' => 'bucket', ],
                'objectPath' => [ 'type' => 'string', 'locationName' => 'objectPath', ],
            ],
        ],
        'Timeline' => [
            'type' => 'structure',
            'members' => [
                'trackList' => [ 'type' => 'list', 'member' => [ 'shape' => 'MediaTrack', ], ],
            ],
        ],
        'MediaClip' => [
            'type' => 'structure',
            'members' => [
                'mediaType' => [ 'type' => 'string', 'locationName' => 'mediaType', ],
                'subType' => [ 'type' => 'string', 'locationName' => 'subType', ],
                'mediaUrl' => [ 'type' => 'string', 'locationName' => 'mediaUrl', ],
                'mediaIn' => [ 'type' => 'integer', 'locationName' => 'mediaIn', ],
                'mediaOut' => [ 'type' => 'integer', 'locationName' => 'mediaOut', ],
                'timelineIn' => [ 'type' => 'integer', 'locationName' => 'timelineIn', ],
                'timelineOut' => [ 'type' => 'integer', 'locationName' => 'timelineOut', ],
                'duration' => [ 'type' => 'integer', 'locationName' => 'duration', ],
                'posX' => [ 'type' => 'integer', 'locationName' => 'posX', ],
                'posY' => [ 'type' => 'integer', 'locationName' => 'posY', ],
                'alignment' => [ 'type' => 'integer', 'locationName' => 'alignment', ],
                'marginL' => [ 'type' => 'integer', 'locationName' => 'marginL', ],
                'marginR' => [ 'type' => 'integer', 'locationName' => 'marginR', ],
                'marginV' => [ 'type' => 'integer', 'locationName' => 'marginV', ],
                'content' => [ 'type' => 'string', 'locationName' => 'content', ],
                'font' => [ 'type' => 'string', 'locationName' => 'font', ],
                'fontSize' => [ 'type' => 'integer', 'locationName' => 'fontSize', ],
                'fontColor' => [ 'type' => 'string', 'locationName' => 'fontColor', ],
                'fontColorOpacity' => [ 'type' => 'double', 'locationName' => 'fontColorOpacity', ],
                'spacing' => [ 'type' => 'integer', 'locationName' => 'spacing', ],
                'angle' => [ 'type' => 'integer', 'locationName' => 'angle', ],
                'borderStyle' => [ 'type' => 'integer', 'locationName' => 'borderStyle', ],
                'outline' => [ 'type' => 'integer', 'locationName' => 'outline', ],
                'outlineColor' => [ 'type' => 'string', 'locationName' => 'outlineColor', ],
                'shadow' => [ 'type' => 'integer', 'locationName' => 'shadow', ],
                'backColor' => [ 'type' => 'string', 'locationName' => 'backColor', ],
                'fontFace' =>  [ 'shape' => 'FontFace', ],
                'operations' => [ 'type' => 'list', 'member' => [ 'shape' => 'ClipOperation', ], ],
            ],
        ],
        'SubmittedVeditJob' => [
            'type' => 'structure',
            'members' => [
                'jobId' => [ 'type' => 'long', 'locationName' => 'jobId', ],
                'projectId' => [ 'type' => 'long', 'locationName' => 'projectId', ],
            ],
        ],
        'MediaMetadata' => [
            'type' => 'structure',
            'members' => [
                'output' =>  [ 'shape' => 'MediaOutput', ],
            ],
        ],
        'MediaTrack' => [
            'type' => 'structure',
            'members' => [
                'trackType' => [ 'type' => 'string', 'locationName' => 'trackType', ],
                'clips' => [ 'type' => 'list', 'member' => [ 'shape' => 'MediaClip', ], ],
            ],
        ],
        'VeditProjectPageData' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'totalElements' => [ 'type' => 'integer', 'locationName' => 'totalElements', ],
                'totalPages' => [ 'type' => 'integer', 'locationName' => 'totalPages', ],
                'content' => [ 'type' => 'list', 'member' => [ 'shape' => 'VeditProjectData', ], ],
            ],
        ],
        'VeditProjectCreateReqData' => [
            'type' => 'structure',
            'members' => [
                'projectName' => [ 'type' => 'string', 'locationName' => 'projectName', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'timeline' =>  [ 'shape' => 'Timeline', ],
            ],
        ],
        'VeditProjectData' => [
            'type' => 'structure',
            'members' => [
                'projectId' => [ 'type' => 'long', 'locationName' => 'projectId', ],
                'projectName' => [ 'type' => 'string', 'locationName' => 'projectName', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'timeline' =>  [ 'shape' => 'Timeline', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'updateTime' => [ 'type' => 'string', 'locationName' => 'updateTime', ],
            ],
        ],
        'VeditProjectUpdateReqData' => [
            'type' => 'structure',
            'members' => [
                'projectName' => [ 'type' => 'string', 'locationName' => 'projectName', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'timeline' =>  [ 'shape' => 'Timeline', ],
            ],
        ],
        'VoiceprintResultData' => [
            'type' => 'structure',
            'members' => [
                'taskId' => [ 'type' => 'string', 'locationName' => 'taskId', ],
                'userId' => [ 'type' => 'string', 'locationName' => 'userId', ],
                'username' => [ 'type' => 'string', 'locationName' => 'username', ],
            ],
        ],
        'VoiceprintListResultData' => [
            'type' => 'structure',
            'members' => [
                'contents' => [ 'type' => 'list', 'member' => [ 'shape' => 'VoiceprintResultData', ], ],
            ],
        ],
        'VoiceprintReqData' => [
            'type' => 'structure',
            'members' => [
                'taskId' => [ 'type' => 'string', 'locationName' => 'taskId', ],
                'userId' => [ 'type' => 'string', 'locationName' => 'userId', ],
                'username' => [ 'type' => 'string', 'locationName' => 'username', ],
            ],
        ],
        'CreateWatermarkTemplateRequestInfo' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'type' => [ 'type' => 'string', 'locationName' => 'type', ],
                'imageUrl' => [ 'type' => 'string', 'locationName' => 'imageUrl', ],
                'text' => [ 'type' => 'string', 'locationName' => 'text', ],
                'fontFile' => [ 'type' => 'string', 'locationName' => 'fontFile', ],
                'fontSize' => [ 'type' => 'integer', 'locationName' => 'fontSize', ],
                'fontColor' => [ 'type' => 'string', 'locationName' => 'fontColor', ],
                'fontOpacity' => [ 'type' => 'integer', 'locationName' => 'fontOpacity', ],
                'position' => [ 'type' => 'string', 'locationName' => 'position', ],
                'offsetX' => [ 'type' => 'integer', 'locationName' => 'offsetX', ],
                'offsetY' => [ 'type' => 'integer', 'locationName' => 'offsetY', ],
                'width' => [ 'type' => 'integer', 'locationName' => 'width', ],
                'height' => [ 'type' => 'integer', 'locationName' => 'height', ],
                'widthRef' => [ 'type' => 'string', 'locationName' => 'widthRef', ],
                'heightRef' => [ 'type' => 'string', 'locationName' => 'heightRef', ],
                'sizeUnit' => [ 'type' => 'string', 'locationName' => 'sizeUnit', ],
                'offsetUnit' => [ 'type' => 'string', 'locationName' => 'offsetUnit', ],
                'rotation' => [ 'type' => 'integer', 'locationName' => 'rotation', ],
                'shadow' => [ 'type' => 'integer', 'locationName' => 'shadow', ],
                'shadowColor' => [ 'type' => 'string', 'locationName' => 'shadowColor', ],
                'tile' => [ 'type' => 'boolean', 'locationName' => 'tile', ],
                'tileSpacing' => [ 'type' => 'integer', 'locationName' => 'tileSpacing', ],
            ],
        ],
        'ListWatermarkTemplatesResultInfo' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'totalElements' => [ 'type' => 'integer', 'locationName' => 'totalElements', ],
                'totalPages' => [ 'type' => 'integer', 'locationName' => 'totalPages', ],
                'content' => [ 'type' => 'list', 'member' => [ 'shape' => 'WatermarkTemplateInfo', ], ],
            ],
        ],
        'WatermarkTemplateInfo' => [
            'type' => 'structure',
            'members' => [
                'watermarkId' => [ 'type' => 'string', 'locationName' => 'watermarkId', ],
                'userPin' => [ 'type' => 'string', 'locationName' => 'userPin', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'type' => [ 'type' => 'string', 'locationName' => 'type', ],
                'imageUrl' => [ 'type' => 'string', 'locationName' => 'imageUrl', ],
                'text' => [ 'type' => 'string', 'locationName' => 'text', ],
                'fontFile' => [ 'type' => 'string', 'locationName' => 'fontFile', ],
                'fontSize' => [ 'type' => 'integer', 'locationName' => 'fontSize', ],
                'fontColor' => [ 'type' => 'string', 'locationName' => 'fontColor', ],
                'fontOpacity' => [ 'type' => 'integer', 'locationName' => 'fontOpacity', ],
                'position' => [ 'type' => 'string', 'locationName' => 'position', ],
                'offsetX' => [ 'type' => 'integer', 'locationName' => 'offsetX', ],
                'offsetY' => [ 'type' => 'integer', 'locationName' => 'offsetY', ],
                'width' => [ 'type' => 'integer', 'locationName' => 'width', ],
                'height' => [ 'type' => 'integer', 'locationName' => 'height', ],
                'widthRef' => [ 'type' => 'string', 'locationName' => 'widthRef', ],
                'heightRef' => [ 'type' => 'string', 'locationName' => 'heightRef', ],
                'sizeUnit' => [ 'type' => 'string', 'locationName' => 'sizeUnit', ],
                'offsetUnit' => [ 'type' => 'string', 'locationName' => 'offsetUnit', ],
                'rotation' => [ 'type' => 'integer', 'locationName' => 'rotation', ],
                'shadow' => [ 'type' => 'integer', 'locationName' => 'shadow', ],
                'shadowColor' => [ 'type' => 'string', 'locationName' => 'shadowColor', ],
                'tile' => [ 'type' => 'boolean', 'locationName' => 'tile', ],
                'tileSpacing' => [ 'type' => 'integer', 'locationName' => 'tileSpacing', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'updateTime' => [ 'type' => 'string', 'locationName' => 'updateTime', ],
            ],
        ],
        'UpdateWatermarkTemplateRequestInfo' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'type' => [ 'type' => 'string', 'locationName' => 'type', ],
                'imageUrl' => [ 'type' => 'string', 'locationName' => 'imageUrl', ],
                'text' => [ 'type' => 'string', 'locationName' => 'text', ],
                'fontFile' => [ 'type' => 'string', 'locationName' => 'fontFile', ],
                'fontSize' => [ 'type' => 'integer', 'locationName' => 'fontSize', ],
                'fontColor' => [ 'type' => 'string', 'locationName' => 'fontColor', ],
                'fontOpacity' => [ 'type' => 'integer', 'locationName' => 'fontOpacity', ],
                'position' => [ 'type' => 'string', 'locationName' => 'position', ],
                'offsetX' => [ 'type' => 'integer', 'locationName' => 'offsetX', ],
                'offsetY' => [ 'type' => 'integer', 'locationName' => 'offsetY', ],
                'width' => [ 'type' => 'integer', 'locationName' => 'width', ],
                'height' => [ 'type' => 'integer', 'locationName' => 'height', ],
                'widthRef' => [ 'type' => 'string', 'locationName' => 'widthRef', ],
                'heightRef' => [ 'type' => 'string', 'locationName' => 'heightRef', ],
                'sizeUnit' => [ 'type' => 'string', 'locationName' => 'sizeUnit', ],
                'offsetUnit' => [ 'type' => 'string', 'locationName' => 'offsetUnit', ],
                'rotation' => [ 'type' => 'integer', 'locationName' => 'rotation', ],
                'shadow' => [ 'type' => 'integer', 'locationName' => 'shadow', ],
                'shadowColor' => [ 'type' => 'string', 'locationName' => 'shadowColor', ],
                'tile' => [ 'type' => 'boolean', 'locationName' => 'tile', ],
                'tileSpacing' => [ 'type' => 'integer', 'locationName' => 'tileSpacing', ],
            ],
        ],
        'CreateAiChatConvResultShape' => [
            'type' => 'structure',
            'members' => [
                'conversationId' => [ 'type' => 'string', 'locationName' => 'conversationId', ],
                'timestamp' => [ 'type' => 'string', 'locationName' => 'timestamp', ],
                'conversationToken' => [ 'type' => 'string', 'locationName' => 'conversationToken', ],
            ],
        ],
        'CreateAiChatConvResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'CreateAiChatConvResultShape', ],
            ],
        ],
        'CreateAiChatConvRequestShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DescribeASRTasksRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'filters' => [ 'type' => 'list', 'member' => [ 'shape' => 'Filter', ], ],
            ],
        ],
        'CreateRealtimeASRTaskResultShape' => [
            'type' => 'structure',
            'members' => [
                'taskId' => [ 'type' => 'string', 'locationName' => 'taskId', ],
                'subject' => [ 'type' => 'string', 'locationName' => 'subject', ],
                'status' => [ 'type' => 'integer', 'locationName' => 'status', ],
                'taskType' => [ 'type' => 'integer', 'locationName' => 'taskType', ],
                'translateFlag' => [ 'type' => 'integer', 'locationName' => 'translateFlag', ],
                'srcLanguage' => [ 'type' => 'string', 'locationName' => 'srcLanguage', ],
                'destLanguage' => [ 'type' => 'string', 'locationName' => 'destLanguage', ],
                'outputFilePath' => [ 'type' => 'string', 'locationName' => 'outputFilePath', ],
                'modeType' => [ 'type' => 'integer', 'locationName' => 'modeType', ],
            ],
        ],
        'SaveMyMinutesTextRequestShape' => [
            'type' => 'structure',
            'members' => [
                'minutesText' => [ 'type' => 'string', 'locationName' => 'minutesText', ],
                'taskId' => [ 'type' => 'string', 'locationName' => 'taskId', ],
            ],
        ],
        'SaveASRMinutesTextResultShape' => [
            'type' => 'structure',
            'members' => [
                'taskId' => [ 'type' => 'string', 'locationName' => 'taskId', ],
                'minutesText' => [ 'type' => 'string', 'locationName' => 'minutesText', ],
            ],
        ],
        'ImportKnowledgeByASRTaskRequestShape' => [
            'type' => 'structure',
            'members' => [
                'taskId' => [ 'type' => 'string', 'locationName' => 'taskId', ],
            ],
        ],
        'CreateNonRealtimeASRTasksResultShape' => [
            'type' => 'structure',
            'members' => [
                'content' => [ 'type' => 'list', 'member' => [ 'shape' => 'ASRTask', ], ],
            ],
        ],
        'DescribeASRMinutesTextRequestShape' => [
            'type' => 'structure',
            'members' => [
                'taskId' => [ 'type' => 'string', 'locationName' => 'taskId', ],
            ],
        ],
        'ImportKnowledgeByASRTaskResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeASRTaskResultShape' => [
            'type' => 'structure',
            'members' => [
                'taskId' => [ 'type' => 'string', 'locationName' => 'taskId', ],
                'subject' => [ 'type' => 'string', 'locationName' => 'subject', ],
                'status' => [ 'type' => 'integer', 'locationName' => 'status', ],
                'taskType' => [ 'type' => 'integer', 'locationName' => 'taskType', ],
                'translateFlag' => [ 'type' => 'integer', 'locationName' => 'translateFlag', ],
                'srcLanguage' => [ 'type' => 'string', 'locationName' => 'srcLanguage', ],
                'destLanguage' => [ 'type' => 'string', 'locationName' => 'destLanguage', ],
                'outputFilePath' => [ 'type' => 'string', 'locationName' => 'outputFilePath', ],
                'modeType' => [ 'type' => 'integer', 'locationName' => 'modeType', ],
            ],
        ],
        'DescribeASRTasksResultShape' => [
            'type' => 'structure',
            'members' => [
                'totalElements' => [ 'type' => 'integer', 'locationName' => 'totalElements', ],
                'totalPages' => [ 'type' => 'integer', 'locationName' => 'totalPages', ],
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'content' => [ 'type' => 'list', 'member' => [ 'shape' => 'ASRTask', ], ],
            ],
        ],
        'SaveMyMinutesTextResultShape' => [
            'type' => 'structure',
            'members' => [
                'taskId' => [ 'type' => 'string', 'locationName' => 'taskId', ],
                'minutesText' => [ 'type' => 'string', 'locationName' => 'minutesText', ],
            ],
        ],
        'SaveMyMinutesTextResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'SaveMyMinutesTextResultShape', ],
            ],
        ],
        'DescribeASRTaskContentResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'DescribeASRTaskContentResultShape', ],
            ],
        ],
        'DescribeASRTaskResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'DescribeASRTaskResultShape', ],
            ],
        ],
        'CreateNonRealtimeASRTasksResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'CreateNonRealtimeASRTasksResultShape', ],
            ],
        ],
        'SaveAsrTaskTemplateResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeASRMinutesTextResultShape' => [
            'type' => 'structure',
            'members' => [
                'taskId' => [ 'type' => 'string', 'locationName' => 'taskId', ],
                'minutesText' => [ 'type' => 'string', 'locationName' => 'minutesText', ],
            ],
        ],
        'AccessRealtimeASRTaskTokenResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'AccessRealtimeASRTaskTokenResultShape', ],
            ],
        ],
        'AccessRealtimeASRTaskTokenResultShape' => [
            'type' => 'structure',
            'members' => [
                'taskId' => [ 'type' => 'string', 'locationName' => 'taskId', ],
                'userId' => [ 'type' => 'string', 'locationName' => 'userId', ],
                'nonce' => [ 'type' => 'string', 'locationName' => 'nonce', ],
                'token' => [ 'type' => 'string', 'locationName' => 'token', ],
                'timestamp' => [ 'type' => 'long', 'locationName' => 'timestamp', ],
                'available' => [ 'type' => 'boolean', 'locationName' => 'available', ],
                'webSocketUrl' => [ 'type' => 'string', 'locationName' => 'webSocketUrl', ],
            ],
        ],
        'DescribeASRTaskTemplateResultShape' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'long', 'locationName' => 'id', ],
                'taskId' => [ 'type' => 'string', 'locationName' => 'taskId', ],
                'templateName' => [ 'type' => 'string', 'locationName' => 'templateName', ],
                'prompt' => [ 'type' => 'string', 'locationName' => 'prompt', ],
            ],
        ],
        'RegenerateASRTaskResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DescribeASRTasksResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'DescribeASRTasksResultShape', ],
            ],
        ],
        'DeleteASRTaskResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeASRTaskContentRequestShape' => [
            'type' => 'structure',
            'members' => [
                'taskId' => [ 'type' => 'string', 'locationName' => 'taskId', ],
            ],
        ],
        'DescribeASRMinutesTextResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'DescribeASRMinutesTextResultShape', ],
            ],
        ],
        'DeleteASRTaskRequestShape' => [
            'type' => 'structure',
            'members' => [
                'taskId' => [ 'type' => 'string', 'locationName' => 'taskId', ],
            ],
        ],
        'DescribeMyMinutesTextResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'DescribeMyMinutesTextResultShape', ],
            ],
        ],
        'SaveAsrTaskTemplateRequestShape' => [
            'type' => 'structure',
            'members' => [
                'prompt' => [ 'type' => 'string', 'locationName' => 'prompt', ],
                'taskId' => [ 'type' => 'string', 'locationName' => 'taskId', ],
            ],
        ],
        'DescribeASRTaskContentResultShape' => [
            'type' => 'structure',
            'members' => [
                'taskId' => [ 'type' => 'string', 'locationName' => 'taskId', ],
                'status' => [ 'type' => 'integer', 'locationName' => 'status', ],
                'taskDealDurMs' => [ 'type' => 'long', 'locationName' => 'taskDealDurMs', ],
                'mediaDurationMs' => [ 'type' => 'long', 'locationName' => 'mediaDurationMs', ],
                'mediaUrl' => [ 'type' => 'string', 'locationName' => 'mediaUrl', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'contents' => [ 'type' => 'list', 'member' => [ 'shape' => 'Content', ], ],
            ],
        ],
        'DescribeMyMinutesTextRequestShape' => [
            'type' => 'structure',
            'members' => [
                'taskId' => [ 'type' => 'string', 'locationName' => 'taskId', ],
            ],
        ],
        'UpdateAsrTaskRequestShape' => [
            'type' => 'structure',
            'members' => [
                'taskId' => [ 'type' => 'string', 'locationName' => 'taskId', ],
                'subject' => [ 'type' => 'string', 'locationName' => 'subject', ],
            ],
        ],
        'SaveASRMinutesTextRequestShape' => [
            'type' => 'structure',
            'members' => [
                'minutesText' => [ 'type' => 'string', 'locationName' => 'minutesText', ],
                'taskId' => [ 'type' => 'string', 'locationName' => 'taskId', ],
            ],
        ],
        'ImportKnowledgeByASRTaskResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'UpdateAsrTaskResultShape' => [
            'type' => 'structure',
            'members' => [
                'taskId' => [ 'type' => 'string', 'locationName' => 'taskId', ],
                'subject' => [ 'type' => 'string', 'locationName' => 'subject', ],
                'status' => [ 'type' => 'integer', 'locationName' => 'status', ],
                'taskType' => [ 'type' => 'integer', 'locationName' => 'taskType', ],
                'translateFlag' => [ 'type' => 'integer', 'locationName' => 'translateFlag', ],
                'srcLanguage' => [ 'type' => 'string', 'locationName' => 'srcLanguage', ],
                'destLanguage' => [ 'type' => 'string', 'locationName' => 'destLanguage', ],
                'outputFilePath' => [ 'type' => 'string', 'locationName' => 'outputFilePath', ],
                'modeType' => [ 'type' => 'integer', 'locationName' => 'modeType', ],
            ],
        ],
        'DescribeASRTaskRequestShape' => [
            'type' => 'structure',
            'members' => [
                'taskId' => [ 'type' => 'string', 'locationName' => 'taskId', ],
            ],
        ],
        'DeleteASRTaskResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'UpdateAsrTaskResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'UpdateAsrTaskResultShape', ],
            ],
        ],
        'CreateRealtimeASRTaskResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'CreateRealtimeASRTaskResultShape', ],
            ],
        ],
        'SaveASRMinutesTextResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'SaveASRMinutesTextResultShape', ],
            ],
        ],
        'DescribeASRTaskTemplateResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'DescribeASRTaskTemplateResultShape', ],
            ],
        ],
        'CreateNonRealtimeASRTasksRequestShape' => [
            'type' => 'structure',
            'members' => [
                'translateFlag' => [ 'type' => 'integer', 'locationName' => 'translateFlag', ],
                'srcLanguage' => [ 'type' => 'string', 'locationName' => 'srcLanguage', ],
                'destLanguage' => [ 'type' => 'string', 'locationName' => 'destLanguage', ],
                'outputFilePath' => [ 'type' => 'string', 'locationName' => 'outputFilePath', ],
                'hotWords' => [ 'type' => 'string', 'locationName' => 'hotWords', ],
                'modeType' => [ 'type' => 'integer', 'locationName' => 'modeType', ],
                'uploadMediaUrls' => [ 'type' => 'list', 'member' => [ 'shape' => 'MediaInfo', ], ],
            ],
        ],
        'AccessRealtimeASRTaskTokenRequestShape' => [
            'type' => 'structure',
            'members' => [
                'taskId' => [ 'type' => 'string', 'locationName' => 'taskId', ],
                'timestamp' => [ 'type' => 'long', 'locationName' => 'timestamp', ],
            ],
        ],
        'DescribeASRTaskTemplateRequestShape' => [
            'type' => 'structure',
            'members' => [
                'taskId' => [ 'type' => 'string', 'locationName' => 'taskId', ],
            ],
        ],
        'SaveAsrTaskTemplateResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'CreateRealtimeASRTaskRequestShape' => [
            'type' => 'structure',
            'members' => [
                'subject' => [ 'type' => 'string', 'locationName' => 'subject', ],
                'translateFlag' => [ 'type' => 'integer', 'locationName' => 'translateFlag', ],
                'srcLanguage' => [ 'type' => 'string', 'locationName' => 'srcLanguage', ],
                'modeType' => [ 'type' => 'integer', 'locationName' => 'modeType', ],
                'destLanguage' => [ 'type' => 'string', 'locationName' => 'destLanguage', ],
                'outputFilePath' => [ 'type' => 'string', 'locationName' => 'outputFilePath', ],
            ],
        ],
        'RegenerateASRTaskRequestShape' => [
            'type' => 'structure',
            'members' => [
                'taskId' => [ 'type' => 'string', 'locationName' => 'taskId', ],
            ],
        ],
        'RegenerateASRTaskResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeMyMinutesTextResultShape' => [
            'type' => 'structure',
            'members' => [
                'taskId' => [ 'type' => 'string', 'locationName' => 'taskId', ],
                'minutesText' => [ 'type' => 'string', 'locationName' => 'minutesText', ],
            ],
        ],
        'ExportMinutesTextToWordRequestShape' => [
            'type' => 'structure',
            'members' => [
                'taskId' => [ 'type' => 'string', 'locationName' => 'taskId', ],
            ],
        ],
        'ExportMinutesSummaryToWordRequestShape' => [
            'type' => 'structure',
            'members' => [
                'taskId' => [ 'type' => 'string', 'locationName' => 'taskId', ],
            ],
        ],
        'ExportMinutesSummaryToWordResultShape' => [
            'type' => 'structure',
            'members' => [
                'content' => [ 'type' => 'string', 'locationName' => 'content', ],
                'fileName' => [ 'type' => 'string', 'locationName' => 'fileName', ],
                'contentType' => [ 'type' => 'string', 'locationName' => 'contentType', ],
                'size' => [ 'type' => 'long', 'locationName' => 'size', ],
            ],
        ],
        'ExportAsrContentToWordRequestShape' => [
            'type' => 'structure',
            'members' => [
                'taskId' => [ 'type' => 'string', 'locationName' => 'taskId', ],
            ],
        ],
        'ExportAsrContentToWordResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'ExportAsrContentToWordResultShape', ],
            ],
        ],
        'ExportMinutesTextToWordResultShape' => [
            'type' => 'structure',
            'members' => [
                'content' => [ 'type' => 'string', 'locationName' => 'content', ],
                'fileName' => [ 'type' => 'string', 'locationName' => 'fileName', ],
                'contentType' => [ 'type' => 'string', 'locationName' => 'contentType', ],
                'size' => [ 'type' => 'long', 'locationName' => 'size', ],
            ],
        ],
        'ExportMinutesSummaryToWordResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'ExportMinutesSummaryToWordResultShape', ],
            ],
        ],
        'ExportMinutesTextToWordResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'ExportMinutesTextToWordResultShape', ],
            ],
        ],
        'ExportAsrContentToWordResultShape' => [
            'type' => 'structure',
            'members' => [
                'content' => [ 'type' => 'string', 'locationName' => 'content', ],
                'fileName' => [ 'type' => 'string', 'locationName' => 'fileName', ],
                'contentType' => [ 'type' => 'string', 'locationName' => 'contentType', ],
                'size' => [ 'type' => 'long', 'locationName' => 'size', ],
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
        'StartProcessInstanceResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'StartProcessInstanceResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'StartProcessInstanceRequestShape' => [
            'type' => 'structure',
            'members' => [
                'processDefinitionCode' => [ 'type' => 'long', 'locationName' => 'processDefinitionCode', ],
                'region' => [ 'type' => 'string', 'locationName' => 'region', ],
                'bucket' => [ 'type' => 'string', 'locationName' => 'bucket', ],
                'objectKey' => [ 'type' => 'string', 'locationName' => 'objectKey', ],
            ],
        ],
        'StartProcessInstanceResultShape' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'integer', 'locationName' => 'id', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'processDefinitionCode' => [ 'type' => 'long', 'locationName' => 'processDefinitionCode', ],
                'state' => [ 'type' => 'string', 'locationName' => 'state', ],
                'startTime' => [ 'type' => 'string', 'locationName' => 'startTime', ],
                'endTime' => [ 'type' => 'string', 'locationName' => 'endTime', ],
                'dagData' =>  [ 'shape' => 'DagData', ],
            ],
        ],
        'DescribeASRTaskHotWordsResultShape' => [
            'type' => 'structure',
            'members' => [
                'totalElements' => [ 'type' => 'integer', 'locationName' => 'totalElements', ],
                'totalPages' => [ 'type' => 'integer', 'locationName' => 'totalPages', ],
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'content' => [ 'type' => 'list', 'member' => [ 'shape' => 'HotWord', ], ],
            ],
        ],
        'UpdateASRTaskHotWordStatusResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'CreateGlobalHotWordsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'hotWord' => [ 'type' => 'string', 'locationName' => 'hotWord', ],
            ],
        ],
        'UpdateASRTaskHotWordsResultShape' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'long', 'locationName' => 'id', ],
                'taskId' => [ 'type' => 'string', 'locationName' => 'taskId', ],
                'hotWord' => [ 'type' => 'string', 'locationName' => 'hotWord', ],
                'status' => [ 'type' => 'integer', 'locationName' => 'status', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'updateTime' => [ 'type' => 'string', 'locationName' => 'updateTime', ],
            ],
        ],
        'DescribeASRTaskHotWordsDetailsResultShape' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'long', 'locationName' => 'id', ],
                'taskId' => [ 'type' => 'string', 'locationName' => 'taskId', ],
                'hotWord' => [ 'type' => 'string', 'locationName' => 'hotWord', ],
                'status' => [ 'type' => 'integer', 'locationName' => 'status', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'updateTime' => [ 'type' => 'string', 'locationName' => 'updateTime', ],
            ],
        ],
        'DeleteASRTaskHotWordsResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DeleteASRTaskHotWordsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'UpdateASRTaskHotWordStatusResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'CreateASRTaskHotWordsResultShape' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'long', 'locationName' => 'id', ],
                'taskId' => [ 'type' => 'string', 'locationName' => 'taskId', ],
                'hotWord' => [ 'type' => 'string', 'locationName' => 'hotWord', ],
                'status' => [ 'type' => 'integer', 'locationName' => 'status', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'updateTime' => [ 'type' => 'string', 'locationName' => 'updateTime', ],
            ],
        ],
        'DeleteASRTaskHotWordsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'ids' => [ 'type' => 'string', 'locationName' => 'ids', ],
            ],
        ],
        'DescribeASRTaskHotWordsDetailsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'DescribeASRTaskHotWordsDetailsResultShape', ],
            ],
        ],
        'CreateGlobalHotWordsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'CreateGlobalHotWordsResultShape', ],
            ],
        ],
        'CreateGlobalHotWordsResultShape' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'long', 'locationName' => 'id', ],
                'hotWord' => [ 'type' => 'string', 'locationName' => 'hotWord', ],
                'status' => [ 'type' => 'integer', 'locationName' => 'status', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'updateTime' => [ 'type' => 'string', 'locationName' => 'updateTime', ],
            ],
        ],
        'UpdateASRTaskHotWordStatusRequestShape' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'long', 'locationName' => 'id', ],
                'status' => [ 'type' => 'integer', 'locationName' => 'status', ],
            ],
        ],
        'DescribeASRTaskHotWordsDetailsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'long', 'locationName' => 'id', ],
            ],
        ],
        'UpdateASRTaskHotWordsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'UpdateASRTaskHotWordsResultShape', ],
            ],
        ],
        'CreateASRTaskHotWordsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'hotWord' => [ 'type' => 'string', 'locationName' => 'hotWord', ],
                'taskId' => [ 'type' => 'string', 'locationName' => 'taskId', ],
            ],
        ],
        'DescribeASRTaskHotWordsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'filters' => [ 'type' => 'list', 'member' => [ 'shape' => 'Filter', ], ],
            ],
        ],
        'CreateASRTaskHotWordsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'CreateASRTaskHotWordsResultShape', ],
            ],
        ],
        'DescribeASRTaskHotWordsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'DescribeASRTaskHotWordsResultShape', ],
            ],
        ],
        'UpdateASRTaskHotWordsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'long', 'locationName' => 'id', ],
                'hotWord' => [ 'type' => 'string', 'locationName' => 'hotWord', ],
            ],
        ],
        'SubmitImageDetectionTaskResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'SubmitImageDetectionTaskResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'SubmitImageDetectionTaskResultShape' => [
            'type' => 'structure',
            'members' => [
                'taskId' => [ 'type' => 'string', 'locationName' => 'taskId', ],
            ],
        ],
        'SubmitImageDetectionTaskRequestShape' => [
            'type' => 'structure',
            'members' => [
                'input' =>  [ 'shape' => 'ImageDetectionInput', ],
                'output' =>  [ 'shape' => 'ImageDetectionOutput', ],
                'detectionType' => [ 'type' => 'string', 'locationName' => 'detectionType', ],
            ],
        ],
        'DescribeKnowledgeBaseFileRecordsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'filters' => [ 'type' => 'list', 'member' => [ 'shape' => 'Filter', ], ],
            ],
        ],
        'UpdateKnowledgeBaseFileStatusRequestShape' => [
            'type' => 'structure',
            'members' => [
                'knowledgeId' => [ 'type' => 'string', 'locationName' => 'knowledgeId', ],
                'status' => [ 'type' => 'integer', 'locationName' => 'status', ],
            ],
        ],
        'BatchDeleteKnowledgeFileRecordRequestShape' => [
            'type' => 'structure',
            'members' => [
                'ids' => [ 'type' => 'list', 'member' => [ 'type' => 'long', ], ],
            ],
        ],
        'BatchUploadFileToKnowledgeBaseResultShape' => [
            'type' => 'structure',
            'members' => [
                'content' => [ 'type' => 'list', 'member' => [ 'shape' => 'UploadKnowledgeData', ], ],
            ],
        ],
        'DeleteKnowledgeBaseFileRecordResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'UpdateKnowledgeBaseFileStatusResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'UpdateKnowledgeBaseFileStatusResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeKnowledgeBaseFileRecordsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeKnowledgeBaseFileRecordsResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'BatchDeleteKnowledgeFileRecordResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'UpdateKnowledgeBaseFileStatusResultShape' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'long', 'locationName' => 'id', ],
                'knowledgeId' => [ 'type' => 'string', 'locationName' => 'knowledgeId', ],
                'fileName' => [ 'type' => 'string', 'locationName' => 'fileName', ],
                'fileSize' => [ 'type' => 'integer', 'locationName' => 'fileSize', ],
                'fileType' => [ 'type' => 'string', 'locationName' => 'fileType', ],
                'status' => [ 'type' => 'integer', 'locationName' => 'status', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'updateTime' => [ 'type' => 'string', 'locationName' => 'updateTime', ],
            ],
        ],
        'DescribeKnowledgeBaseFileDownloadUrlRequestShape' => [
            'type' => 'structure',
            'members' => [
                'knowledgeId' => [ 'type' => 'string', 'locationName' => 'knowledgeId', ],
            ],
        ],
        'UploadFileToKnowledgeBaseResultShape' => [
            'type' => 'structure',
            'members' => [
                'fileName' => [ 'type' => 'string', 'locationName' => 'fileName', ],
                'status' => [ 'type' => 'integer', 'locationName' => 'status', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
            ],
        ],
        'BatchUploadFileToKnowledgeBaseRequestShape' => [
            'type' => 'structure',
            'members' => [
                'content' => [ 'type' => 'list', 'member' => [ 'shape' => 'UploadFileToKnowledgeBaseReqData', ], ],
            ],
        ],
        'BatchUploadFileToKnowledgeBaseResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'BatchUploadFileToKnowledgeBaseResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeKnowledgeBaseFileRecordsResultShape' => [
            'type' => 'structure',
            'members' => [
                'totalElements' => [ 'type' => 'integer', 'locationName' => 'totalElements', ],
                'totalPages' => [ 'type' => 'integer', 'locationName' => 'totalPages', ],
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'content' => [ 'type' => 'list', 'member' => [ 'shape' => 'KnowledgeFileRecord', ], ],
            ],
        ],
        'UploadFileToKnowledgeBaseResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'UploadFileToKnowledgeBaseResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeKnowledgeBaseFileDownloadUrlResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' => [ 'type' => 'string', 'locationName' => 'result', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'BatchDeleteKnowledgeFileRecordResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DescribeKnowledgeBaseFileDownloadUrlResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DeleteKnowledgeBaseFileRecordRequestShape' => [
            'type' => 'structure',
            'members' => [
                'knowledgeId' => [ 'type' => 'string', 'locationName' => 'knowledgeId', ],
            ],
        ],
        'UploadFileToKnowledgeBaseRequestShape' => [
            'type' => 'structure',
            'members' => [
                'bucket' => [ 'type' => 'string', 'locationName' => 'bucket', ],
                'objectKey' => [ 'type' => 'string', 'locationName' => 'objectKey', ],
                'fileName' => [ 'type' => 'string', 'locationName' => 'fileName', ],
                'fileMd5' => [ 'type' => 'string', 'locationName' => 'fileMd5', ],
            ],
        ],
        'DeleteKnowledgeBaseFileRecordResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'CreateProcessDefinitionResultShape' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'integer', 'locationName' => 'id', ],
                'code' => [ 'type' => 'long', 'locationName' => 'code', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
            ],
        ],
        'DeleteProcessDefinitionByCodeRequestShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
            ],
        ],
        'QueryProcessDefinitionListPagingRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNum' => [ 'type' => 'integer', 'locationName' => 'pageNum', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
            ],
        ],
        'CreateProcessDefinitionRequestShape' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'taskDefinitionList' => [ 'type' => 'list', 'member' => [ 'shape' => 'TaskDefinition', ], ],
                'taskRelationList' => [ 'type' => 'list', 'member' => [ 'shape' => 'ProcessTaskRelation', ], ],
            ],
        ],
        'ProcessDefinitionPageResult' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'totalElements' => [ 'type' => 'integer', 'locationName' => 'totalElements', ],
                'content' => [ 'type' => 'list', 'member' => [ 'shape' => 'ProcessDefinition', ], ],
            ],
        ],
        'QueryProcessDefinitionListPagingResultShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'totalElements' => [ 'type' => 'integer', 'locationName' => 'totalElements', ],
                'content' => [ 'type' => 'list', 'member' => [ 'shape' => 'ProcessDefinition', ], ],
            ],
        ],
        'QueryProcessDefinitionListPagingResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'QueryProcessDefinitionListPagingResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'CreateProcessDefinitionResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'CreateProcessDefinitionResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'QueryProcessDefinitionByCodeRequestShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
            ],
        ],
        'DeleteProcessDefinitionByCodeResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'QueryProcessDefinitionByCodeResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'QueryProcessDefinitionByCodeResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'QueryProcessDefinitionByCodeResultShape' => [
            'type' => 'structure',
            'members' => [
                'processDefinition' =>  [ 'shape' => 'ProcessDefinition', ],
                'taskDefinitionList' => [ 'type' => 'list', 'member' => [ 'shape' => 'TaskDefinition', ], ],
                'taskRelationList' => [ 'type' => 'list', 'member' => [ 'shape' => 'ProcessTaskRelation', ], ],
            ],
        ],
        'DeleteProcessDefinitionByCodeResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'QueryProcessInstanceByIdRequestShape' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'integer', 'locationName' => 'id', ],
            ],
        ],
        'DeleteProcessInstanceByIdResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'QueryProcessInstanceListRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNum' => [ 'type' => 'integer', 'locationName' => 'pageNum', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
            ],
        ],
        'QueryTaskListByProcessIdResultShape' => [
            'type' => 'structure',
            'members' => [
                'taskList' => [ 'type' => 'list', 'member' => [ 'shape' => 'TaskInstance', ], ],
            ],
        ],
        'QueryProcessInstanceListResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'QueryProcessInstanceListResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'QueryTaskListByProcessIdRequestShape' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'integer', 'locationName' => 'id', ],
            ],
        ],
        'QueryProcessInstanceByIdResultShape' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'integer', 'locationName' => 'id', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'processDefinitionCode' => [ 'type' => 'long', 'locationName' => 'processDefinitionCode', ],
                'state' => [ 'type' => 'string', 'locationName' => 'state', ],
                'startTime' => [ 'type' => 'string', 'locationName' => 'startTime', ],
                'endTime' => [ 'type' => 'string', 'locationName' => 'endTime', ],
                'dagData' =>  [ 'shape' => 'DagData', ],
            ],
        ],
        'DeleteProcessInstanceByIdResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'ProcessInstancePageResult' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'totalElements' => [ 'type' => 'integer', 'locationName' => 'totalElements', ],
                'content' => [ 'type' => 'list', 'member' => [ 'shape' => 'ProcessInstance', ], ],
            ],
        ],
        'QueryProcessInstanceByIdResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'QueryProcessInstanceByIdResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DeleteProcessInstanceByIdRequestShape' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'integer', 'locationName' => 'id', ],
            ],
        ],
        'QueryProcessInstanceListResultShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'totalElements' => [ 'type' => 'integer', 'locationName' => 'totalElements', ],
                'content' => [ 'type' => 'list', 'member' => [ 'shape' => 'ProcessInstance', ], ],
            ],
        ],
        'QueryTaskListByProcessIdResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'QueryTaskListByProcessIdResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
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
                'configData' => [ 'type' => 'string', 'locationName' => 'configData', ],
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
                'configData' => [ 'type' => 'string', 'locationName' => 'configData', ],
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
                'configData' => [ 'type' => 'string', 'locationName' => 'configData', ],
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
                'configData' => [ 'type' => 'string', 'locationName' => 'configData', ],
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
                'configData' => [ 'type' => 'string', 'locationName' => 'configData', ],
            ],
        ],
        'GenTaskCodeListResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GenTaskCodeListResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'GenTaskCodeListResultShape' => [
            'type' => 'structure',
            'members' => [
                'codes' => [ 'type' => 'list', 'member' => [ 'type' => 'long', ], ],
            ],
        ],
        'GenTaskCodeListRequestShape' => [
            'type' => 'structure',
            'members' => [
                'genNum' => [ 'type' => 'integer', 'locationName' => 'genNum', ],
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
        'SubmitVeditJobRequestShape' => [
            'type' => 'structure',
            'members' => [
                'projectId' => [ 'type' => 'long', 'locationName' => 'projectId', ],
                'mediaMetadata' =>  [ 'shape' => 'MediaMetadata', ],
                'userData' => [ 'type' => 'string', 'locationName' => 'userData', ],
            ],
        ],
        'CreateVeditJobResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'CreateVeditJobResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'CreateVeditJobRequestShape' => [
            'type' => 'structure',
            'members' => [
                'projectName' => [ 'type' => 'string', 'locationName' => 'projectName', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'timeline' =>  [ 'shape' => 'Timeline', ],
                'mediaMetadata' =>  [ 'shape' => 'MediaMetadata', ],
                'userData' => [ 'type' => 'string', 'locationName' => 'userData', ],
            ],
        ],
        'SubmitVeditJobResultShape' => [
            'type' => 'structure',
            'members' => [
                'jobId' => [ 'type' => 'long', 'locationName' => 'jobId', ],
                'projectId' => [ 'type' => 'long', 'locationName' => 'projectId', ],
            ],
        ],
        'CreateVeditJobResultShape' => [
            'type' => 'structure',
            'members' => [
                'jobId' => [ 'type' => 'long', 'locationName' => 'jobId', ],
                'projectId' => [ 'type' => 'long', 'locationName' => 'projectId', ],
            ],
        ],
        'SubmitVeditJobResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'SubmitVeditJobResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'UpdateVeditProjectRequestShape' => [
            'type' => 'structure',
            'members' => [
                'projectName' => [ 'type' => 'string', 'locationName' => 'projectName', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'timeline' =>  [ 'shape' => 'Timeline', ],
                'projectId' => [ 'type' => 'long', 'locationName' => 'projectId', ],
            ],
        ],
        'DeleteVeditProjectResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'UpdateVeditProjectResultShape' => [
            'type' => 'structure',
            'members' => [
                'projectId' => [ 'type' => 'long', 'locationName' => 'projectId', ],
                'projectName' => [ 'type' => 'string', 'locationName' => 'projectName', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'timeline' =>  [ 'shape' => 'Timeline', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'updateTime' => [ 'type' => 'string', 'locationName' => 'updateTime', ],
            ],
        ],
        'DeleteVeditProjectRequestShape' => [
            'type' => 'structure',
            'members' => [
                'projectId' => [ 'type' => 'long', 'locationName' => 'projectId', ],
            ],
        ],
        'ListVeditProjectsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'filters' => [ 'type' => 'list', 'member' => [ 'shape' => 'Filter', ], ],
            ],
        ],
        'GetVeditProjectResultShape' => [
            'type' => 'structure',
            'members' => [
                'projectId' => [ 'type' => 'long', 'locationName' => 'projectId', ],
                'projectName' => [ 'type' => 'string', 'locationName' => 'projectName', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'timeline' =>  [ 'shape' => 'Timeline', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'updateTime' => [ 'type' => 'string', 'locationName' => 'updateTime', ],
            ],
        ],
        'DeleteVeditProjectResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'CreateVeditProjectResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'CreateVeditProjectResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'GetVeditProjectResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GetVeditProjectResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'GetVeditProjectRequestShape' => [
            'type' => 'structure',
            'members' => [
                'projectId' => [ 'type' => 'long', 'locationName' => 'projectId', ],
            ],
        ],
        'ListVeditProjectsResultShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'totalElements' => [ 'type' => 'integer', 'locationName' => 'totalElements', ],
                'totalPages' => [ 'type' => 'integer', 'locationName' => 'totalPages', ],
                'content' => [ 'type' => 'list', 'member' => [ 'shape' => 'VeditProjectData', ], ],
            ],
        ],
        'CreateVeditProjectRequestShape' => [
            'type' => 'structure',
            'members' => [
                'projectName' => [ 'type' => 'string', 'locationName' => 'projectName', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'timeline' =>  [ 'shape' => 'Timeline', ],
            ],
        ],
        'CreateVeditProjectResultShape' => [
            'type' => 'structure',
            'members' => [
                'projectId' => [ 'type' => 'long', 'locationName' => 'projectId', ],
                'projectName' => [ 'type' => 'string', 'locationName' => 'projectName', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'timeline' =>  [ 'shape' => 'Timeline', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'updateTime' => [ 'type' => 'string', 'locationName' => 'updateTime', ],
            ],
        ],
        'UpdateVeditProjectResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'UpdateVeditProjectResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ListVeditProjectsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'ListVeditProjectsResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeVoiceprintsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'taskId' => [ 'type' => 'string', 'locationName' => 'taskId', ],
            ],
        ],
        'SaveVoiceprintResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'SaveVoiceprintResultShape', ],
            ],
        ],
        'DeleteVoiceprintResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeVoiceprintResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'DescribeVoiceprintResultShape', ],
            ],
        ],
        'DeleteVoiceprintRequestShape' => [
            'type' => 'structure',
            'members' => [
                'taskId' => [ 'type' => 'string', 'locationName' => 'taskId', ],
                'userId' => [ 'type' => 'string', 'locationName' => 'userId', ],
            ],
        ],
        'SaveVoiceprintResultShape' => [
            'type' => 'structure',
            'members' => [
                'taskId' => [ 'type' => 'string', 'locationName' => 'taskId', ],
                'userId' => [ 'type' => 'string', 'locationName' => 'userId', ],
                'username' => [ 'type' => 'string', 'locationName' => 'username', ],
            ],
        ],
        'DescribeVoiceprintResultShape' => [
            'type' => 'structure',
            'members' => [
                'taskId' => [ 'type' => 'string', 'locationName' => 'taskId', ],
                'userId' => [ 'type' => 'string', 'locationName' => 'userId', ],
                'username' => [ 'type' => 'string', 'locationName' => 'username', ],
            ],
        ],
        'DescribeVoiceprintRequestShape' => [
            'type' => 'structure',
            'members' => [
                'taskId' => [ 'type' => 'string', 'locationName' => 'taskId', ],
                'userId' => [ 'type' => 'string', 'locationName' => 'userId', ],
            ],
        ],
        'SaveVoiceprintRequestShape' => [
            'type' => 'structure',
            'members' => [
                'taskId' => [ 'type' => 'string', 'locationName' => 'taskId', ],
                'userId' => [ 'type' => 'string', 'locationName' => 'userId', ],
                'username' => [ 'type' => 'string', 'locationName' => 'username', ],
            ],
        ],
        'DescribeVoiceprintsResultShape' => [
            'type' => 'structure',
            'members' => [
                'contents' => [ 'type' => 'list', 'member' => [ 'shape' => 'VoiceprintResultData', ], ],
            ],
        ],
        'DeleteVoiceprintResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DescribeVoiceprintsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'DescribeVoiceprintsResultShape', ],
            ],
        ],
        'CreateWatermarkTemplateRequestShape' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'type' => [ 'type' => 'string', 'locationName' => 'type', ],
                'imageUrl' => [ 'type' => 'string', 'locationName' => 'imageUrl', ],
                'text' => [ 'type' => 'string', 'locationName' => 'text', ],
                'fontFile' => [ 'type' => 'string', 'locationName' => 'fontFile', ],
                'fontSize' => [ 'type' => 'integer', 'locationName' => 'fontSize', ],
                'fontColor' => [ 'type' => 'string', 'locationName' => 'fontColor', ],
                'fontOpacity' => [ 'type' => 'integer', 'locationName' => 'fontOpacity', ],
                'position' => [ 'type' => 'string', 'locationName' => 'position', ],
                'offsetX' => [ 'type' => 'integer', 'locationName' => 'offsetX', ],
                'offsetY' => [ 'type' => 'integer', 'locationName' => 'offsetY', ],
                'width' => [ 'type' => 'integer', 'locationName' => 'width', ],
                'height' => [ 'type' => 'integer', 'locationName' => 'height', ],
                'widthRef' => [ 'type' => 'string', 'locationName' => 'widthRef', ],
                'heightRef' => [ 'type' => 'string', 'locationName' => 'heightRef', ],
                'sizeUnit' => [ 'type' => 'string', 'locationName' => 'sizeUnit', ],
                'offsetUnit' => [ 'type' => 'string', 'locationName' => 'offsetUnit', ],
                'rotation' => [ 'type' => 'integer', 'locationName' => 'rotation', ],
                'shadow' => [ 'type' => 'integer', 'locationName' => 'shadow', ],
                'shadowColor' => [ 'type' => 'string', 'locationName' => 'shadowColor', ],
                'tile' => [ 'type' => 'boolean', 'locationName' => 'tile', ],
                'tileSpacing' => [ 'type' => 'integer', 'locationName' => 'tileSpacing', ],
            ],
        ],
        'GetWatermarkTemplateResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GetWatermarkTemplateResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'CreateWatermarkTemplateResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'CreateWatermarkTemplateResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ListWatermarkTemplatesResultShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'totalElements' => [ 'type' => 'integer', 'locationName' => 'totalElements', ],
                'totalPages' => [ 'type' => 'integer', 'locationName' => 'totalPages', ],
                'content' => [ 'type' => 'list', 'member' => [ 'shape' => 'WatermarkTemplateInfo', ], ],
            ],
        ],
        'GetWatermarkTemplateRequestShape' => [
            'type' => 'structure',
            'members' => [
                'templateId' => [ 'type' => 'string', 'locationName' => 'templateId', ],
            ],
        ],
        'ListWatermarkTemplatesResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'ListWatermarkTemplatesResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'UpdateWatermarkTemplateResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'UpdateWatermarkTemplateResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'CreateWatermarkTemplateResultShape' => [
            'type' => 'structure',
            'members' => [
                'watermarkId' => [ 'type' => 'string', 'locationName' => 'watermarkId', ],
                'userPin' => [ 'type' => 'string', 'locationName' => 'userPin', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'type' => [ 'type' => 'string', 'locationName' => 'type', ],
                'imageUrl' => [ 'type' => 'string', 'locationName' => 'imageUrl', ],
                'text' => [ 'type' => 'string', 'locationName' => 'text', ],
                'fontFile' => [ 'type' => 'string', 'locationName' => 'fontFile', ],
                'fontSize' => [ 'type' => 'integer', 'locationName' => 'fontSize', ],
                'fontColor' => [ 'type' => 'string', 'locationName' => 'fontColor', ],
                'fontOpacity' => [ 'type' => 'integer', 'locationName' => 'fontOpacity', ],
                'position' => [ 'type' => 'string', 'locationName' => 'position', ],
                'offsetX' => [ 'type' => 'integer', 'locationName' => 'offsetX', ],
                'offsetY' => [ 'type' => 'integer', 'locationName' => 'offsetY', ],
                'width' => [ 'type' => 'integer', 'locationName' => 'width', ],
                'height' => [ 'type' => 'integer', 'locationName' => 'height', ],
                'widthRef' => [ 'type' => 'string', 'locationName' => 'widthRef', ],
                'heightRef' => [ 'type' => 'string', 'locationName' => 'heightRef', ],
                'sizeUnit' => [ 'type' => 'string', 'locationName' => 'sizeUnit', ],
                'offsetUnit' => [ 'type' => 'string', 'locationName' => 'offsetUnit', ],
                'rotation' => [ 'type' => 'integer', 'locationName' => 'rotation', ],
                'shadow' => [ 'type' => 'integer', 'locationName' => 'shadow', ],
                'shadowColor' => [ 'type' => 'string', 'locationName' => 'shadowColor', ],
                'tile' => [ 'type' => 'boolean', 'locationName' => 'tile', ],
                'tileSpacing' => [ 'type' => 'integer', 'locationName' => 'tileSpacing', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'updateTime' => [ 'type' => 'string', 'locationName' => 'updateTime', ],
            ],
        ],
        'UpdateWatermarkTemplateRequestShape' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'type' => [ 'type' => 'string', 'locationName' => 'type', ],
                'imageUrl' => [ 'type' => 'string', 'locationName' => 'imageUrl', ],
                'text' => [ 'type' => 'string', 'locationName' => 'text', ],
                'fontFile' => [ 'type' => 'string', 'locationName' => 'fontFile', ],
                'fontSize' => [ 'type' => 'integer', 'locationName' => 'fontSize', ],
                'fontColor' => [ 'type' => 'string', 'locationName' => 'fontColor', ],
                'fontOpacity' => [ 'type' => 'integer', 'locationName' => 'fontOpacity', ],
                'position' => [ 'type' => 'string', 'locationName' => 'position', ],
                'offsetX' => [ 'type' => 'integer', 'locationName' => 'offsetX', ],
                'offsetY' => [ 'type' => 'integer', 'locationName' => 'offsetY', ],
                'width' => [ 'type' => 'integer', 'locationName' => 'width', ],
                'height' => [ 'type' => 'integer', 'locationName' => 'height', ],
                'widthRef' => [ 'type' => 'string', 'locationName' => 'widthRef', ],
                'heightRef' => [ 'type' => 'string', 'locationName' => 'heightRef', ],
                'sizeUnit' => [ 'type' => 'string', 'locationName' => 'sizeUnit', ],
                'offsetUnit' => [ 'type' => 'string', 'locationName' => 'offsetUnit', ],
                'rotation' => [ 'type' => 'integer', 'locationName' => 'rotation', ],
                'shadow' => [ 'type' => 'integer', 'locationName' => 'shadow', ],
                'shadowColor' => [ 'type' => 'string', 'locationName' => 'shadowColor', ],
                'tile' => [ 'type' => 'boolean', 'locationName' => 'tile', ],
                'tileSpacing' => [ 'type' => 'integer', 'locationName' => 'tileSpacing', ],
                'templateId' => [ 'type' => 'string', 'locationName' => 'templateId', ],
            ],
        ],
        'GetWatermarkTemplateResultShape' => [
            'type' => 'structure',
            'members' => [
                'watermarkId' => [ 'type' => 'string', 'locationName' => 'watermarkId', ],
                'userPin' => [ 'type' => 'string', 'locationName' => 'userPin', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'type' => [ 'type' => 'string', 'locationName' => 'type', ],
                'imageUrl' => [ 'type' => 'string', 'locationName' => 'imageUrl', ],
                'text' => [ 'type' => 'string', 'locationName' => 'text', ],
                'fontFile' => [ 'type' => 'string', 'locationName' => 'fontFile', ],
                'fontSize' => [ 'type' => 'integer', 'locationName' => 'fontSize', ],
                'fontColor' => [ 'type' => 'string', 'locationName' => 'fontColor', ],
                'fontOpacity' => [ 'type' => 'integer', 'locationName' => 'fontOpacity', ],
                'position' => [ 'type' => 'string', 'locationName' => 'position', ],
                'offsetX' => [ 'type' => 'integer', 'locationName' => 'offsetX', ],
                'offsetY' => [ 'type' => 'integer', 'locationName' => 'offsetY', ],
                'width' => [ 'type' => 'integer', 'locationName' => 'width', ],
                'height' => [ 'type' => 'integer', 'locationName' => 'height', ],
                'widthRef' => [ 'type' => 'string', 'locationName' => 'widthRef', ],
                'heightRef' => [ 'type' => 'string', 'locationName' => 'heightRef', ],
                'sizeUnit' => [ 'type' => 'string', 'locationName' => 'sizeUnit', ],
                'offsetUnit' => [ 'type' => 'string', 'locationName' => 'offsetUnit', ],
                'rotation' => [ 'type' => 'integer', 'locationName' => 'rotation', ],
                'shadow' => [ 'type' => 'integer', 'locationName' => 'shadow', ],
                'shadowColor' => [ 'type' => 'string', 'locationName' => 'shadowColor', ],
                'tile' => [ 'type' => 'boolean', 'locationName' => 'tile', ],
                'tileSpacing' => [ 'type' => 'integer', 'locationName' => 'tileSpacing', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'updateTime' => [ 'type' => 'string', 'locationName' => 'updateTime', ],
            ],
        ],
        'DeleteWatermarkTemplateResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'ListWatermarkTemplatesRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'filters' => [ 'type' => 'list', 'member' => [ 'shape' => 'Filter', ], ],
            ],
        ],
        'UpdateWatermarkTemplateResultShape' => [
            'type' => 'structure',
            'members' => [
                'watermarkId' => [ 'type' => 'string', 'locationName' => 'watermarkId', ],
                'userPin' => [ 'type' => 'string', 'locationName' => 'userPin', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'type' => [ 'type' => 'string', 'locationName' => 'type', ],
                'imageUrl' => [ 'type' => 'string', 'locationName' => 'imageUrl', ],
                'text' => [ 'type' => 'string', 'locationName' => 'text', ],
                'fontFile' => [ 'type' => 'string', 'locationName' => 'fontFile', ],
                'fontSize' => [ 'type' => 'integer', 'locationName' => 'fontSize', ],
                'fontColor' => [ 'type' => 'string', 'locationName' => 'fontColor', ],
                'fontOpacity' => [ 'type' => 'integer', 'locationName' => 'fontOpacity', ],
                'position' => [ 'type' => 'string', 'locationName' => 'position', ],
                'offsetX' => [ 'type' => 'integer', 'locationName' => 'offsetX', ],
                'offsetY' => [ 'type' => 'integer', 'locationName' => 'offsetY', ],
                'width' => [ 'type' => 'integer', 'locationName' => 'width', ],
                'height' => [ 'type' => 'integer', 'locationName' => 'height', ],
                'widthRef' => [ 'type' => 'string', 'locationName' => 'widthRef', ],
                'heightRef' => [ 'type' => 'string', 'locationName' => 'heightRef', ],
                'sizeUnit' => [ 'type' => 'string', 'locationName' => 'sizeUnit', ],
                'offsetUnit' => [ 'type' => 'string', 'locationName' => 'offsetUnit', ],
                'rotation' => [ 'type' => 'integer', 'locationName' => 'rotation', ],
                'shadow' => [ 'type' => 'integer', 'locationName' => 'shadow', ],
                'shadowColor' => [ 'type' => 'string', 'locationName' => 'shadowColor', ],
                'tile' => [ 'type' => 'boolean', 'locationName' => 'tile', ],
                'tileSpacing' => [ 'type' => 'integer', 'locationName' => 'tileSpacing', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'updateTime' => [ 'type' => 'string', 'locationName' => 'updateTime', ],
            ],
        ],
        'DeleteWatermarkTemplateRequestShape' => [
            'type' => 'structure',
            'members' => [
                'templateId' => [ 'type' => 'string', 'locationName' => 'templateId', ],
            ],
        ],
        'DeleteWatermarkTemplateResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
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
