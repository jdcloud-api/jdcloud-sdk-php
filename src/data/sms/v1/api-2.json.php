<?php
// This file was auto-generated
return [
//    'version' => '',
    'metadata' =>
    [
//        'apiVersion' => '',
//        'endpointPrefix' => 'sms',
        'protocol' => 'json',
//        'serviceFullName' => 'sms',
//        'serviceId' => 'sms',
    ],
    'operations' => [
        'BatchSend' => [
            'name' => 'BatchSend',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/batchSend',
            ],
            'input' => [ 'shape' => 'BatchSendRequestShape', ],
            'output' => [ 'shape' => 'BatchSendResponseShape', ],
        ],
        'StatusReport' => [
            'name' => 'StatusReport',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/statusReport',
            ],
            'input' => [ 'shape' => 'StatusReportRequestShape', ],
            'output' => [ 'shape' => 'StatusReportResponseShape', ],
        ],
        'Reply' => [
            'name' => 'Reply',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/reply',
            ],
            'input' => [ 'shape' => 'ReplyRequestShape', ],
            'output' => [ 'shape' => 'ReplyResponseShape', ],
        ],
    ],
    'shapes' => [
        'CreateInstanceResp' => [
            'type' => 'structure',
            'members' => [
                'buyId' => [ 'type' => 'string', 'locationName' => 'buyId', ],
                'submit' => [ 'type' => 'boolean', 'locationName' => 'submit', ],
                'addAndSubmitBuyMessage' => [ 'type' => 'string', 'locationName' => 'addAndSubmitBuyMessage', ],
                'orderNumber' => [ 'type' => 'string', 'locationName' => 'orderNumber', ],
                'autoPay' => [ 'type' => 'boolean', 'locationName' => 'autoPay', ],
                'submitOrderMessage' => [ 'type' => 'string', 'locationName' => 'submitOrderMessage', ],
            ],
        ],
        'CreateInstanceNotPayResp' => [
            'type' => 'structure',
            'members' => [
                'buyId' => [ 'type' => 'string', 'locationName' => 'buyId', ],
                'forwardUrl' => [ 'type' => 'string', 'locationName' => 'forwardUrl', ],
            ],
        ],
        'MtSms' => [
            'type' => 'structure',
            'members' => [
                'pin' => [ 'type' => 'string', 'locationName' => 'pin', ],
                'expandNum' => [ 'type' => 'string', 'locationName' => 'expandNum', ],
                'mobileNum' => [ 'type' => 'string', 'locationName' => 'mobileNum', ],
                'appId' => [ 'type' => 'string', 'locationName' => 'appId', ],
                'packageId' => [ 'type' => 'string', 'locationName' => 'packageId', ],
                'signId' => [ 'type' => 'string', 'locationName' => 'signId', ],
                'templateId' => [ 'type' => 'string', 'locationName' => 'templateId', ],
                'msgContent' => [ 'type' => 'string', 'locationName' => 'msgContent', ],
                'orderId' => [ 'type' => 'string', 'locationName' => 'orderId', ],
                'code' => [ 'type' => 'integer', 'locationName' => 'code', ],
                'receiptNum' => [ 'type' => 'string', 'locationName' => 'receiptNum', ],
                'splitFlag' => [ 'type' => 'string', 'locationName' => 'splitFlag', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'type' => [ 'type' => 'string', 'locationName' => 'type', ],
            ],
        ],
        'PullMtMsgByMobile' => [
            'type' => 'structure',
            'members' => [
                'total' => [ 'type' => 'integer', 'locationName' => 'total', ],
                'size' => [ 'type' => 'integer', 'locationName' => 'size', ],
                'detailList' => [ 'type' => 'list', 'member' => [ 'shape' => 'MtSms', ], ],
            ],
        ],
        'SendBatchSms' => [
            'type' => 'structure',
            'members' => [
                'status' => [ 'type' => 'boolean', 'locationName' => 'status', ],
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
            ],
        ],
        'ReplyResp' => [
            'type' => 'structure',
            'members' => [
                'appId' => [ 'type' => 'string', 'locationName' => 'appId', ],
                'signId' => [ 'type' => 'string', 'locationName' => 'signId', ],
                'phoneNum' => [ 'type' => 'string', 'locationName' => 'phoneNum', ],
                'dataTime' => [ 'type' => 'string', 'locationName' => 'dataTime', ],
                'content' => [ 'type' => 'string', 'locationName' => 'content', ],
            ],
        ],
        'BatchSendResp' => [
            'type' => 'structure',
            'members' => [
                'sequenceNumber' => [ 'type' => 'string', 'locationName' => 'sequenceNumber', ],
            ],
        ],
        'StatusReportResp' => [
            'type' => 'structure',
            'members' => [
                'phoneNum' => [ 'type' => 'string', 'locationName' => 'phoneNum', ],
                'sequenceNumber' => [ 'type' => 'string', 'locationName' => 'sequenceNumber', ],
                'sendTime' => [ 'type' => 'string', 'locationName' => 'sendTime', ],
                'reportTime' => [ 'type' => 'string', 'locationName' => 'reportTime', ],
                'status' => [ 'type' => 'integer', 'locationName' => 'status', ],
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'splitNum' => [ 'type' => 'integer', 'locationName' => 'splitNum', ],
            ],
        ],
        'BatchSendRequestShape' => [
            'type' => 'structure',
            'members' => [
                'templateId' => [ 'type' => 'string', 'locationName' => 'templateId', ],
                'signId' => [ 'type' => 'string', 'locationName' => 'signId', ],
                'phoneList' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'params' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'StatusReportResultShape' => [
            'type' => 'structure',
            'members' => [
                'data' => [ 'type' => 'list', 'member' => [ 'shape' => 'StatusReportResp', ], ],
                'status' => [ 'type' => 'boolean', 'locationName' => 'status', ],
                'code' => [ 'type' => 'long', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
            ],
        ],
        'BatchSendResultShape' => [
            'type' => 'structure',
            'members' => [
                'data' =>  [ 'shape' => 'BatchSendResp', ],
                'status' => [ 'type' => 'boolean', 'locationName' => 'status', ],
                'code' => [ 'type' => 'long', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
            ],
        ],
        'StatusReportRequestShape' => [
            'type' => 'structure',
            'members' => [
                'sequenceNumber' => [ 'type' => 'string', 'locationName' => 'sequenceNumber', ],
                'phoneList' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'ReplyResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'ReplyResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'BatchSendResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'BatchSendResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ReplyRequestShape' => [
            'type' => 'structure',
            'members' => [
                'appId' => [ 'type' => 'string', 'locationName' => 'appId', ],
                'dataDate' => [ 'type' => 'string', 'locationName' => 'dataDate', ],
                'phoneList' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'ReplyResultShape' => [
            'type' => 'structure',
            'members' => [
                'data' => [ 'type' => 'list', 'member' => [ 'shape' => 'ReplyResp', ], ],
                'status' => [ 'type' => 'boolean', 'locationName' => 'status', ],
                'code' => [ 'type' => 'long', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
            ],
        ],
        'StatusReportResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'StatusReportResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
    ],
];
