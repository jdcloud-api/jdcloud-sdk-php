<?php
// This file was auto-generated
return [
//    'version' => '',
    'metadata' =>
    [
//        'apiVersion' => '',
//        'endpointPrefix' => 'rms',
        'protocol' => 'json',
//        'serviceFullName' => 'rms',
//        'serviceId' => 'rms',
    ],
    'operations' => [
        'SendBatchMsg' => [
            'name' => 'SendBatchMsg',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/sendBatchMsg',
            ],
            'input' => [ 'shape' => 'SendBatchMsgRequestShape', ],
            'output' => [ 'shape' => 'SendBatchMsgResponseShape', ],
        ],
        'QuerySendStatus' => [
            'name' => 'QuerySendStatus',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/querySendStatus',
            ],
            'input' => [ 'shape' => 'QuerySendStatusRequestShape', ],
            'output' => [ 'shape' => 'QuerySendStatusResponseShape', ],
        ],
        'AddTemplate' => [
            'name' => 'AddTemplate',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/addTemplate',
            ],
            'input' => [ 'shape' => 'AddTemplateRequestShape', ],
            'output' => [ 'shape' => 'AddTemplateResponseShape', ],
        ],
        'QueryOneTemplate' => [
            'name' => 'QueryOneTemplate',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/queryOneTemplate',
            ],
            'input' => [ 'shape' => 'QueryOneTemplateRequestShape', ],
            'output' => [ 'shape' => 'QueryOneTemplateResponseShape', ],
        ],
        'QueryTemplateList' => [
            'name' => 'QueryTemplateList',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/queryTemplateList',
            ],
            'input' => [ 'shape' => 'QueryTemplateListRequestShape', ],
            'output' => [ 'shape' => 'QueryTemplateListResponseShape', ],
        ],
    ],
    'shapes' => [
        'RespAddTemplateData' => [
            'type' => 'structure',
            'members' => [
                'templateId' => [ 'type' => 'string', 'locationName' => 'templateId', ],
            ],
        ],
        'RespQueryOneTemplateResourceList' => [
            'type' => 'structure',
            'members' => [
                'size' => [ 'type' => 'string', 'locationName' => 'size', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'type' => [ 'type' => 'string', 'locationName' => 'type', ],
                'url' => [ 'type' => 'string', 'locationName' => 'url', ],
                'content' => [ 'type' => 'string', 'locationName' => 'content', ],
            ],
        ],
        'RespQueryTemplateListData' => [
            'type' => 'structure',
            'members' => [
                'reason' => [ 'type' => 'string', 'locationName' => 'reason', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'contentSize' => [ 'type' => 'string', 'locationName' => 'contentSize', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'templateId' => [ 'type' => 'string', 'locationName' => 'templateId', ],
                'title' => [ 'type' => 'string', 'locationName' => 'title', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
            ],
        ],
        'SendStatus' => [
            'type' => 'structure',
            'members' => [
                'pin' => [ 'type' => 'string', 'locationName' => 'pin', ],
                'appId' => [ 'type' => 'string', 'locationName' => 'appId', ],
                'taskId' => [ 'type' => 'string', 'locationName' => 'taskId', ],
                'templateId' => [ 'type' => 'string', 'locationName' => 'templateId', ],
                'mobileNum' => [ 'type' => 'string', 'locationName' => 'mobileNum', ],
                'stateFlag' => [ 'type' => 'integer', 'locationName' => 'stateFlag', ],
                'sendTime' => [ 'type' => 'string', 'locationName' => 'sendTime', ],
            ],
        ],
        'SendBatchMsg' => [
            'type' => 'structure',
            'members' => [
                'status' => [ 'type' => 'boolean', 'locationName' => 'status', ],
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'sequenceNumber' => [ 'type' => 'string', 'locationName' => 'sequenceNumber', ],
            ],
        ],
        'QuerySendStatus' => [
            'type' => 'structure',
            'members' => [
                'total' => [ 'type' => 'integer', 'locationName' => 'total', ],
                'detailList' => [ 'type' => 'list', 'member' => [ 'shape' => 'SendStatus', ], ],
            ],
        ],
        'QuerySendStatusSpec' => [
            'type' => 'structure',
            'members' => [
                'appId' => [ 'type' => 'string', 'locationName' => 'appId', ],
                'taskId' => [ 'type' => 'string', 'locationName' => 'taskId', ],
            ],
        ],
        'SendBatchMsgSpec' => [
            'type' => 'structure',
            'members' => [
                'appId' => [ 'type' => 'string', 'locationName' => 'appId', ],
                'messageId' => [ 'type' => 'string', 'locationName' => 'messageId', ],
                'phone' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'params' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'QueryAddTemplateContent' => [
            'type' => 'structure',
            'members' => [
                'type' => [ 'type' => 'string', 'locationName' => 'type', ],
                'txt' => [ 'type' => 'string', 'locationName' => 'txt', ],
                'file' => [ 'type' => 'string', 'locationName' => 'file', ],
            ],
        ],
        'QuerySendStatusResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'QuerySendStatusResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'SendBatchMsgResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'SendBatchMsgResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'QuerySendStatusRequestShape' => [
            'type' => 'structure',
            'members' => [
                'querySendStatusSpec' =>  [ 'shape' => 'QuerySendStatusSpec', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'QuerySendStatusResultShape' => [
            'type' => 'structure',
            'members' => [
                'data' => [ 'type' => 'list', 'member' => [ 'shape' => 'QuerySendStatus', ], ],
            ],
        ],
        'SendBatchMsgRequestShape' => [
            'type' => 'structure',
            'members' => [
                'sendBatchMsgSpec' =>  [ 'shape' => 'SendBatchMsgSpec', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'SendBatchMsgResultShape' => [
            'type' => 'structure',
            'members' => [
                'data' =>  [ 'shape' => 'SendBatchMsg', ],
            ],
        ],
        'AddTemplateResultShape' => [
            'type' => 'structure',
            'members' => [
                'data' => [ 'type' => 'list', 'member' => [ 'shape' => 'RespAddTemplateData', ], ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
            ],
        ],
        'QueryTemplateListRequestShape' => [
            'type' => 'structure',
            'members' => [
                'appId' => [ 'type' => 'string', 'locationName' => 'appId', ],
                'searchKey' => [ 'type' => 'string', 'locationName' => 'searchKey', ],
                'pageNum' => [ 'type' => 'string', 'locationName' => 'pageNum', ],
                'pageLimit' => [ 'type' => 'string', 'locationName' => 'pageLimit', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'title' => [ 'type' => 'string', 'locationName' => 'title', ],
                'startTime' => [ 'type' => 'string', 'locationName' => 'startTime', ],
                'endTime' => [ 'type' => 'string', 'locationName' => 'endTime', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'QueryOneTemplateResultShape' => [
            'type' => 'structure',
            'members' => [
                'data' => [ 'type' => 'list', 'member' => [ 'shape' => 'RespQueryOneTemplateResourceList', ], ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'mediaLength' => [ 'type' => 'string', 'locationName' => 'mediaLength', ],
                'type' => [ 'type' => 'string', 'locationName' => 'type', ],
                'title' => [ 'type' => 'string', 'locationName' => 'title', ],
                'isTuiding' => [ 'type' => 'string', 'locationName' => 'isTuiding', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
            ],
        ],
        'AddTemplateRequestShape' => [
            'type' => 'structure',
            'members' => [
                'appId' => [ 'type' => 'string', 'locationName' => 'appId', ],
                'signType' => [ 'type' => 'string', 'locationName' => 'signType', ],
                'purpose' => [ 'type' => 'string', 'locationName' => 'purpose', ],
                'signCardType' => [ 'type' => 'string', 'locationName' => 'signCardType', ],
                'aptitudes' => [ 'type' => 'string', 'locationName' => 'aptitudes', ],
                'title' => [ 'type' => 'string', 'locationName' => 'title', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'isTuiding' => [ 'type' => 'string', 'locationName' => 'isTuiding', ],
                'content' => [ 'type' => 'list', 'member' => [ 'shape' => 'QueryAddTemplateContent', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'AddTemplateResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'AddTemplateResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'QueryOneTemplateRequestShape' => [
            'type' => 'structure',
            'members' => [
                'templateId' => [ 'type' => 'string', 'locationName' => 'templateId', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'QueryTemplateListResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'QueryTemplateListResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'QueryOneTemplateResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'QueryOneTemplateResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'QueryTemplateListResultShape' => [
            'type' => 'structure',
            'members' => [
                'data' => [ 'type' => 'list', 'member' => [ 'shape' => 'RespQueryTemplateListData', ], ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'totalElements' => [ 'type' => 'string', 'locationName' => 'totalElements', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
            ],
        ],
    ],
];
