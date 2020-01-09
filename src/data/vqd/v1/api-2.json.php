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
        'BatchSubmitVqdTasks' => [
            'name' => 'BatchSubmitVqdTasks',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/vqdTasks:batchSubmit',
            ],
            'input' => [ 'shape' => 'BatchSubmitVqdTasksRequestShape', ],
            'output' => [ 'shape' => 'BatchSubmitVqdTasksResponseShape', ],
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
        'BatchDeleteVqdTasksResponseShape' => [
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
        'BatchSubmitVqdTasksResultShape' => [
            'type' => 'structure',
            'members' => [
                'taskIds' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
    ],
];
