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
        'QueryPackageRemainder' => [
            'name' => 'QueryPackageRemainder',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v2/regions/{regionId}/queryPackageRemainder',
            ],
            'input' => [ 'shape' => 'QueryPackageRemainderRequestShape', ],
            'output' => [ 'shape' => 'QueryPackageRemainderResponseShape', ],
        ],
        'SendBatchMsg' => [
            'name' => 'SendBatchMsg',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v2/regions/{regionId}/sendBatchMsg',
            ],
            'input' => [ 'shape' => 'SendBatchMsgRequestShape', ],
            'output' => [ 'shape' => 'SendBatchMsgResponseShape', ],
        ],
        'QuerySendStatus' => [
            'name' => 'QuerySendStatus',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v2/regions/{regionId}/querySendStatus',
            ],
            'input' => [ 'shape' => 'QuerySendStatusRequestShape', ],
            'output' => [ 'shape' => 'QuerySendStatusResponseShape', ],
        ],
        'AddTemplate' => [
            'name' => 'AddTemplate',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v2/regions/{regionId}/addTemplate',
            ],
            'input' => [ 'shape' => 'AddTemplateRequestShape', ],
            'output' => [ 'shape' => 'AddTemplateResponseShape', ],
        ],
        'QueryTemplateById' => [
            'name' => 'QueryTemplateById',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v2/regions/{regionId}/queryTemplateById',
            ],
            'input' => [ 'shape' => 'QueryTemplateByIdRequestShape', ],
            'output' => [ 'shape' => 'QueryTemplateByIdResponseShape', ],
        ],
        'QueryTemplateList' => [
            'name' => 'QueryTemplateList',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v2/regions/{regionId}/queryTemplateList',
            ],
            'input' => [ 'shape' => 'QueryTemplateListRequestShape', ],
            'output' => [ 'shape' => 'QueryTemplateListResponseShape', ],
        ],
    ],
    'shapes' => [
        'RespQueryTemplateListData' => [
            'type' => 'structure',
            'members' => [
                'templateId' => [ 'type' => 'string', 'locationName' => 'templateId', ],
                'title' => [ 'type' => 'string', 'locationName' => 'title', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'reason' => [ 'type' => 'string', 'locationName' => 'reason', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'contentSize' => [ 'type' => 'string', 'locationName' => 'contentSize', ],
                'aptitudesId' => [ 'type' => 'string', 'locationName' => 'aptitudesId', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
            ],
        ],
        'RespTemplateData' => [
            'type' => 'structure',
            'members' => [
                'templateId' => [ 'type' => 'string', 'locationName' => 'templateId', ],
            ],
        ],
        'SendStatus' => [
            'type' => 'structure',
            'members' => [
                'pin' => [ 'type' => 'string', 'locationName' => 'pin', ],
                'appId' => [ 'type' => 'string', 'locationName' => 'appId', ],
                'sequenceNumber' => [ 'type' => 'string', 'locationName' => 'sequenceNumber', ],
                'templateId' => [ 'type' => 'string', 'locationName' => 'templateId', ],
                'mobileNum' => [ 'type' => 'string', 'locationName' => 'mobileNum', ],
                'stateFlag' => [ 'type' => 'integer', 'locationName' => 'stateFlag', ],
                'sendTime' => [ 'type' => 'string', 'locationName' => 'sendTime', ],
            ],
        ],
        'SendBatchMsg' => [
            'type' => 'structure',
            'members' => [
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
        'TemplateContent' => [
            'type' => 'structure',
            'members' => [
                'fileType' => [ 'type' => 'string', 'locationName' => 'fileType', ],
                'value' => [ 'type' => 'string', 'locationName' => 'value', ],
            ],
        ],
        'QueryPackageRemainderRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'QueryPackageRemainderResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'QueryPackageRemainderResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'RespPackageResult' => [
            'type' => 'structure',
            'members' => [
                'remainder' => [ 'type' => 'long', 'locationName' => 'remainder', ],
            ],
        ],
        'QueryPackageRemainderResultShape' => [
            'type' => 'structure',
            'members' => [
                'data' =>  [ 'shape' => 'RespPackageResult', ],
                'status' => [ 'type' => 'boolean', 'locationName' => 'status', ],
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
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
                'appId' => [ 'type' => 'string', 'locationName' => 'appId', ],
                'sequenceNumber' => [ 'type' => 'string', 'locationName' => 'sequenceNumber', ],
                'phone' => [ 'type' => 'string', 'locationName' => 'phone', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'QuerySendStatusResultShape' => [
            'type' => 'structure',
            'members' => [
                'data' => [ 'type' => 'list', 'member' => [ 'shape' => 'QuerySendStatus', ], ],
                'status' => [ 'type' => 'boolean', 'locationName' => 'status', ],
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
            ],
        ],
        'SendBatchMsgRequestShape' => [
            'type' => 'structure',
            'members' => [
                'appId' => [ 'type' => 'string', 'locationName' => 'appId', ],
                'templateId' => [ 'type' => 'string', 'locationName' => 'templateId', ],
                'phone' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'params' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'SendBatchMsgResultShape' => [
            'type' => 'structure',
            'members' => [
                'data' =>  [ 'shape' => 'SendBatchMsg', ],
                'status' => [ 'type' => 'boolean', 'locationName' => 'status', ],
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
            ],
        ],
        'AddTemplateResultShape' => [
            'type' => 'structure',
            'members' => [
                'data' =>  [ 'shape' => 'RespTemplateData', ],
                'status' => [ 'type' => 'boolean', 'locationName' => 'status', ],
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
            ],
        ],
        'QueryTemplateByIdResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'QueryTemplateByIdResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'QueryTemplateListRequestShape' => [
            'type' => 'structure',
            'members' => [
                'appId' => [ 'type' => 'string', 'locationName' => 'appId', ],
                'title' => [ 'type' => 'string', 'locationName' => 'title', ],
                'pageNum' => [ 'type' => 'integer', 'locationName' => 'pageNum', ],
                'pageLimit' => [ 'type' => 'integer', 'locationName' => 'pageLimit', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'startTime' => [ 'type' => 'string', 'locationName' => 'startTime', ],
                'endTime' => [ 'type' => 'string', 'locationName' => 'endTime', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'RespTemplatePageResult' => [
            'type' => 'structure',
            'members' => [
                'count' => [ 'type' => 'long', 'locationName' => 'count', ],
                'pageNum' => [ 'type' => 'integer', 'locationName' => 'pageNum', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'pageCount' => [ 'type' => 'integer', 'locationName' => 'pageCount', ],
                'list' => [ 'type' => 'list', 'member' => [ 'shape' => 'RespQueryTemplateListData', ], ],
            ],
        ],
        'QueryTemplateByIdResultShape' => [
            'type' => 'structure',
            'members' => [
                'data' =>  [ 'shape' => 'RespQueryTemplateListData', ],
                'status' => [ 'type' => 'boolean', 'locationName' => 'status', ],
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
            ],
        ],
        'QueryTemplateByIdRequestShape' => [
            'type' => 'structure',
            'members' => [
                'templateId' => [ 'type' => 'string', 'locationName' => 'templateId', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
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
                'unsubscribe' => [ 'type' => 'string', 'locationName' => 'unsubscribe', ],
                'content' => [ 'type' => 'list', 'member' => [ 'shape' => 'TemplateContent', ], ],
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
        'QueryTemplateListResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'QueryTemplateListResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'QueryTemplateListResultShape' => [
            'type' => 'structure',
            'members' => [
                'data' =>  [ 'shape' => 'RespTemplatePageResult', ],
                'status' => [ 'type' => 'boolean', 'locationName' => 'status', ],
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
            ],
        ],
    ],
];
