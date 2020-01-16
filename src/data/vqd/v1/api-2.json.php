<?php
// This file was auto-generated
return [
//    'version' => '',
    'metadata' =>
    [
//        'apiVersion' => '',
//        'endpointPrefix' => 'vqd',
        'protocol' => 'json',
//        'serviceFullName' => 'vqd',
//        'serviceId' => 'vqd',
    ],
    'operations' => [
        'SetCallback' => [
            'name' => 'SetCallback',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/settings:setCallback',
            ],
            'input' => [ 'shape' => 'SetCallbackRequestShape', ],
            'output' => [ 'shape' => 'SetCallbackResponseShape', ],
        ],
        'QueryCallback' => [
            'name' => 'QueryCallback',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/settings:queryCallback',
            ],
            'input' => [ 'shape' => 'QueryCallbackRequestShape', ],
            'output' => [ 'shape' => 'QueryCallbackResponseShape', ],
        ],
        'SubmitVqdTask' => [
            'name' => 'SubmitVqdTask',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/vqdTasks:submit',
            ],
            'input' => [ 'shape' => 'SubmitVqdTaskRequestShape', ],
            'output' => [ 'shape' => 'SubmitVqdTaskResponseShape', ],
        ],
        'BatchSubmitVqdTasks' => [
            'name' => 'BatchSubmitVqdTasks',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/vqdTasks:batchSubmit',
            ],
            'input' => [ 'shape' => 'BatchSubmitVqdTasksRequestShape', ],
            'output' => [ 'shape' => 'BatchSubmitVqdTasksResponseShape', ],
        ],
        'ListVqdTasks' => [
            'name' => 'ListVqdTasks',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/vqdTasks',
            ],
            'input' => [ 'shape' => 'ListVqdTasksRequestShape', ],
            'output' => [ 'shape' => 'ListVqdTasksResponseShape', ],
        ],
        'GetVqdTask' => [
            'name' => 'GetVqdTask',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/vqdTasks/{taskId}',
            ],
            'input' => [ 'shape' => 'GetVqdTaskRequestShape', ],
            'output' => [ 'shape' => 'GetVqdTaskResponseShape', ],
        ],
        'DeleteVqdTask' => [
            'name' => 'DeleteVqdTask',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/vqdTasks/{taskId}',
            ],
            'input' => [ 'shape' => 'DeleteVqdTaskRequestShape', ],
            'output' => [ 'shape' => 'DeleteVqdTaskResponseShape', ],
        ],
        'QueryVqdTaskResult' => [
            'name' => 'QueryVqdTaskResult',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/vqdTasks/{taskId}:queryResult',
            ],
            'input' => [ 'shape' => 'QueryVqdTaskResultRequestShape', ],
            'output' => [ 'shape' => 'QueryVqdTaskResultResponseShape', ],
        ],
        'BatchDeleteVqdTasks' => [
            'name' => 'BatchDeleteVqdTasks',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/vqdTasks:batchDelete',
            ],
            'input' => [ 'shape' => 'BatchDeleteVqdTasksRequestShape', ],
            'output' => [ 'shape' => 'BatchDeleteVqdTasksResponseShape', ],
        ],
        'ListVqdTemplates' => [
            'name' => 'ListVqdTemplates',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/vqdTemplates',
            ],
            'input' => [ 'shape' => 'ListVqdTemplatesRequestShape', ],
            'output' => [ 'shape' => 'ListVqdTemplatesResponseShape', ],
        ],
        'CreateVqdTemplate' => [
            'name' => 'CreateVqdTemplate',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/vqdTemplates',
            ],
            'input' => [ 'shape' => 'CreateVqdTemplateRequestShape', ],
            'output' => [ 'shape' => 'CreateVqdTemplateResponseShape', ],
        ],
        'GetVqdTemplate' => [
            'name' => 'GetVqdTemplate',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/vqdTemplates/{templateId}',
            ],
            'input' => [ 'shape' => 'GetVqdTemplateRequestShape', ],
            'output' => [ 'shape' => 'GetVqdTemplateResponseShape', ],
        ],
        'UpdateVqdTemplate' => [
            'name' => 'UpdateVqdTemplate',
            'http' => [
                'method' => 'PUT',
                'requestUri' => '/v1/vqdTemplates/{templateId}',
            ],
            'input' => [ 'shape' => 'UpdateVqdTemplateRequestShape', ],
            'output' => [ 'shape' => 'UpdateVqdTemplateResponseShape', ],
        ],
        'DeleteVqdTemplate' => [
            'name' => 'DeleteVqdTemplate',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/vqdTemplates/{templateId}',
            ],
            'input' => [ 'shape' => 'DeleteVqdTemplateRequestShape', ],
            'output' => [ 'shape' => 'DeleteVqdTemplateResponseShape', ],
        ],
    ],
    'shapes' => [
        'QueryCallbackResultObject' => [
            'type' => 'structure',
            'members' => [
                'callbackType' => [ 'type' => 'string', 'locationName' => 'callbackType', ],
                'httpUrl' => [ 'type' => 'string', 'locationName' => 'httpUrl', ],
                'callbackEvents' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'updateTime' => [ 'type' => 'string', 'locationName' => 'updateTime', ],
            ],
        ],
        'SetCallbackRequestObject' => [
            'type' => 'structure',
            'members' => [
                'callbackType' => [ 'type' => 'string', 'locationName' => 'callbackType', ],
                'httpUrl' => [ 'type' => 'string', 'locationName' => 'httpUrl', ],
                'callbackEvents' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
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
        'SubmitVqdTaskRequestObject' => [
            'type' => 'structure',
            'members' => [
                'media' =>  [ 'shape' => 'VqdMediaObject', ],
                'templateId' => [ 'type' => 'string', 'locationName' => 'templateId', ],
            ],
        ],
        'ListVqdTasksResultObject' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'totalElements' => [ 'type' => 'integer', 'locationName' => 'totalElements', ],
                'totalPages' => [ 'type' => 'integer', 'locationName' => 'totalPages', ],
                'content' => [ 'type' => 'list', 'member' => [ 'shape' => 'VqdTaskObject', ], ],
            ],
        ],
        'VqdDefectObject' => [
            'type' => 'structure',
            'members' => [
                'item' => [ 'type' => 'string', 'locationName' => 'item', ],
                'start' => [ 'type' => 'string', 'locationName' => 'start', ],
                'end' => [ 'type' => 'string', 'locationName' => 'end', ],
                'value' => [ 'type' => 'string', 'locationName' => 'value', ],
                'info' => [ 'type' => 'string', 'locationName' => 'info', ],
            ],
        ],
        'VqdTaskResultObject' => [
            'type' => 'structure',
            'members' => [
                'taskId' => [ 'type' => 'string', 'locationName' => 'taskId', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'defects' => [ 'type' => 'list', 'member' => [ 'shape' => 'VqdDefectObject', ], ],
                'errorCode' => [ 'type' => 'string', 'locationName' => 'errorCode', ],
            ],
        ],
        'VqdTaskObject' => [
            'type' => 'structure',
            'members' => [
                'taskId' => [ 'type' => 'string', 'locationName' => 'taskId', ],
                'templateId' => [ 'type' => 'string', 'locationName' => 'templateId', ],
                'mediaName' => [ 'type' => 'string', 'locationName' => 'mediaName', ],
                'threshold' => [ 'type' => 'double', 'locationName' => 'threshold', ],
                'detections' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'updateTime' => [ 'type' => 'string', 'locationName' => 'updateTime', ],
            ],
        ],
        'SubmitVqdTaskResultObject' => [
            'type' => 'structure',
            'members' => [
                'taskId' => [ 'type' => 'string', 'locationName' => 'taskId', ],
            ],
        ],
        'BatchDeleteVqdTaskRequestObject' => [
            'type' => 'structure',
            'members' => [
                'taskIds' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'BatchSubmitVqdTaskRequestObject' => [
            'type' => 'structure',
            'members' => [
                'mediaList' => [ 'type' => 'list', 'member' => [ 'shape' => 'VqdMediaObject', ], ],
                'templateId' => [ 'type' => 'string', 'locationName' => 'templateId', ],
            ],
        ],
        'VqdMediaObject' => [
            'type' => 'structure',
            'members' => [
                'mediaUrl' => [ 'type' => 'string', 'locationName' => 'mediaUrl', ],
                'mediaName' => [ 'type' => 'string', 'locationName' => 'mediaName', ],
            ],
        ],
        'BatchSubmitVqdTaskResultObject' => [
            'type' => 'structure',
            'members' => [
                'taskIds' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'CreateVqdTemplateRequestObject' => [
            'type' => 'structure',
            'members' => [
                'templateName' => [ 'type' => 'string', 'locationName' => 'templateName', ],
                'threshold' => [ 'type' => 'double', 'locationName' => 'threshold', ],
                'detections' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'UpdateVqdTemplateRequestObject' => [
            'type' => 'structure',
            'members' => [
                'templateName' => [ 'type' => 'string', 'locationName' => 'templateName', ],
                'threshold' => [ 'type' => 'double', 'locationName' => 'threshold', ],
                'detections' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'ListVqdTemplatesResultObject' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'totalElements' => [ 'type' => 'integer', 'locationName' => 'totalElements', ],
                'totalPages' => [ 'type' => 'integer', 'locationName' => 'totalPages', ],
                'content' => [ 'type' => 'list', 'member' => [ 'shape' => 'VqdTemplateObject', ], ],
            ],
        ],
        'VqdTemplateObject' => [
            'type' => 'structure',
            'members' => [
                'templateId' => [ 'type' => 'string', 'locationName' => 'templateId', ],
                'templateName' => [ 'type' => 'string', 'locationName' => 'templateName', ],
                'threshold' => [ 'type' => 'double', 'locationName' => 'threshold', ],
                'detections' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'updateTime' => [ 'type' => 'string', 'locationName' => 'updateTime', ],
            ],
        ],
        'SetCallbackRequestShape' => [
            'type' => 'structure',
            'members' => [
                'callbackType' => [ 'type' => 'string', 'locationName' => 'callbackType', ],
                'httpUrl' => [ 'type' => 'string', 'locationName' => 'httpUrl', ],
                'callbackEvents' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'SetCallbackResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'QueryCallbackRequestShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'QueryCallbackResultShape' => [
            'type' => 'structure',
            'members' => [
                'callbackType' => [ 'type' => 'string', 'locationName' => 'callbackType', ],
                'httpUrl' => [ 'type' => 'string', 'locationName' => 'httpUrl', ],
                'callbackEvents' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'updateTime' => [ 'type' => 'string', 'locationName' => 'updateTime', ],
            ],
        ],
        'QueryCallbackResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'QueryCallbackResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'SetCallbackResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'GetVqdTaskResultShape' => [
            'type' => 'structure',
            'members' => [
                'taskId' => [ 'type' => 'string', 'locationName' => 'taskId', ],
                'templateId' => [ 'type' => 'string', 'locationName' => 'templateId', ],
                'mediaName' => [ 'type' => 'string', 'locationName' => 'mediaName', ],
                'threshold' => [ 'type' => 'double', 'locationName' => 'threshold', ],
                'detections' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'updateTime' => [ 'type' => 'string', 'locationName' => 'updateTime', ],
            ],
        ],
        'DeleteVqdTaskResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'GetVqdTaskRequestShape' => [
            'type' => 'structure',
            'members' => [
                'taskId' => [ 'type' => 'string', 'locationName' => 'taskId', ],
            ],
        ],
        'QueryVqdTaskResultResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'QueryVqdTaskResultResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'BatchDeleteVqdTasksResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DeleteVqdTaskResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'BatchDeleteVqdTasksResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'BatchSubmitVqdTasksResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'BatchSubmitVqdTasksResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'GetVqdTaskResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GetVqdTaskResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'SubmitVqdTaskResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'SubmitVqdTaskResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'QueryVqdTaskResultRequestShape' => [
            'type' => 'structure',
            'members' => [
                'taskId' => [ 'type' => 'string', 'locationName' => 'taskId', ],
            ],
        ],
        'DeleteVqdTaskRequestShape' => [
            'type' => 'structure',
            'members' => [
                'taskId' => [ 'type' => 'string', 'locationName' => 'taskId', ],
            ],
        ],
        'SubmitVqdTaskRequestShape' => [
            'type' => 'structure',
            'members' => [
                'media' =>  [ 'shape' => 'VqdMediaObject', ],
                'templateId' => [ 'type' => 'string', 'locationName' => 'templateId', ],
            ],
        ],
        'BatchSubmitVqdTasksRequestShape' => [
            'type' => 'structure',
            'members' => [
                'mediaList' => [ 'type' => 'list', 'member' => [ 'shape' => 'VqdMediaObject', ], ],
                'templateId' => [ 'type' => 'string', 'locationName' => 'templateId', ],
            ],
        ],
        'BatchDeleteVqdTasksRequestShape' => [
            'type' => 'structure',
            'members' => [
                'taskIds' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'ListVqdTasksRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'filters' => [ 'type' => 'list', 'member' => [ 'shape' => 'Filter', ], ],
            ],
        ],
        'ListVqdTasksResultShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'totalElements' => [ 'type' => 'integer', 'locationName' => 'totalElements', ],
                'totalPages' => [ 'type' => 'integer', 'locationName' => 'totalPages', ],
                'content' => [ 'type' => 'list', 'member' => [ 'shape' => 'VqdTaskObject', ], ],
            ],
        ],
        'ListVqdTasksResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'ListVqdTasksResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'BatchSubmitVqdTasksResultShape' => [
            'type' => 'structure',
            'members' => [
                'taskIds' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'SubmitVqdTaskResultShape' => [
            'type' => 'structure',
            'members' => [
                'taskId' => [ 'type' => 'string', 'locationName' => 'taskId', ],
            ],
        ],
        'QueryVqdTaskResultResultShape' => [
            'type' => 'structure',
            'members' => [
                'taskId' => [ 'type' => 'string', 'locationName' => 'taskId', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'defects' => [ 'type' => 'list', 'member' => [ 'shape' => 'VqdDefectObject', ], ],
                'errorCode' => [ 'type' => 'string', 'locationName' => 'errorCode', ],
            ],
        ],
        'UpdateVqdTemplateRequestShape' => [
            'type' => 'structure',
            'members' => [
                'templateName' => [ 'type' => 'string', 'locationName' => 'templateName', ],
                'threshold' => [ 'type' => 'double', 'locationName' => 'threshold', ],
                'detections' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'templateId' => [ 'type' => 'string', 'locationName' => 'templateId', ],
            ],
        ],
        'UpdateVqdTemplateResultShape' => [
            'type' => 'structure',
            'members' => [
                'templateId' => [ 'type' => 'string', 'locationName' => 'templateId', ],
                'templateName' => [ 'type' => 'string', 'locationName' => 'templateName', ],
                'threshold' => [ 'type' => 'double', 'locationName' => 'threshold', ],
                'detections' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'updateTime' => [ 'type' => 'string', 'locationName' => 'updateTime', ],
            ],
        ],
        'GetVqdTemplateRequestShape' => [
            'type' => 'structure',
            'members' => [
                'templateId' => [ 'type' => 'string', 'locationName' => 'templateId', ],
            ],
        ],
        'ListVqdTemplatesResultShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'totalElements' => [ 'type' => 'integer', 'locationName' => 'totalElements', ],
                'totalPages' => [ 'type' => 'integer', 'locationName' => 'totalPages', ],
                'content' => [ 'type' => 'list', 'member' => [ 'shape' => 'VqdTemplateObject', ], ],
            ],
        ],
        'GetVqdTemplateResultShape' => [
            'type' => 'structure',
            'members' => [
                'templateId' => [ 'type' => 'string', 'locationName' => 'templateId', ],
                'templateName' => [ 'type' => 'string', 'locationName' => 'templateName', ],
                'threshold' => [ 'type' => 'double', 'locationName' => 'threshold', ],
                'detections' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'updateTime' => [ 'type' => 'string', 'locationName' => 'updateTime', ],
            ],
        ],
        'DeleteVqdTemplateResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DeleteVqdTemplateRequestShape' => [
            'type' => 'structure',
            'members' => [
                'templateId' => [ 'type' => 'string', 'locationName' => 'templateId', ],
            ],
        ],
        'DeleteVqdTemplateResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'CreateVqdTemplateRequestShape' => [
            'type' => 'structure',
            'members' => [
                'templateName' => [ 'type' => 'string', 'locationName' => 'templateName', ],
                'threshold' => [ 'type' => 'double', 'locationName' => 'threshold', ],
                'detections' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'CreateVqdTemplateResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'CreateVqdTemplateResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ListVqdTemplatesRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'filters' => [ 'type' => 'list', 'member' => [ 'shape' => 'Filter', ], ],
            ],
        ],
        'CreateVqdTemplateResultShape' => [
            'type' => 'structure',
            'members' => [
                'templateId' => [ 'type' => 'string', 'locationName' => 'templateId', ],
                'templateName' => [ 'type' => 'string', 'locationName' => 'templateName', ],
                'threshold' => [ 'type' => 'double', 'locationName' => 'threshold', ],
                'detections' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'updateTime' => [ 'type' => 'string', 'locationName' => 'updateTime', ],
            ],
        ],
        'UpdateVqdTemplateResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'UpdateVqdTemplateResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'GetVqdTemplateResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GetVqdTemplateResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ListVqdTemplatesResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'ListVqdTemplatesResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
    ],
];
