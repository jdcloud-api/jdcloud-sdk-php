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
        'SendBatchSms' => [
            'name' => 'SendBatchSms',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/sendBatchSms',
            ],
            'input' => [ 'shape' => 'SendBatchSmsRequestShape', ],
            'output' => [ 'shape' => 'SendBatchSmsResponseShape', ],
        ],
        'PullMtMsgByMobile' => [
            'name' => 'PullMtMsgByMobile',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/pullMtMsgByMobile',
            ],
            'input' => [ 'shape' => 'PullMtMsgByMobileRequestShape', ],
            'output' => [ 'shape' => 'PullMtMsgByMobileResponseShape', ],
        ],
    ],
    'shapes' => [
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
        'SendBatchSmsResultShape' => [
            'type' => 'structure',
            'members' => [
                'data' => [ 'type' => 'list', 'member' => [ 'shape' => 'SendBatchSms', ], ],
            ],
        ],
        'SendBatchSmsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'SendBatchSmsResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'PullMtMsgByMobileRequestShape' => [
            'type' => 'structure',
            'members' => [
                'appId' => [ 'type' => 'string', 'locationName' => 'appId', ],
                'phone' => [ 'type' => 'string', 'locationName' => 'phone', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'PullMtMsgByMobileResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'PullMtMsgByMobileResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'SendBatchSmsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'appId' => [ 'type' => 'string', 'locationName' => 'appId', ],
                'signId' => [ 'type' => 'string', 'locationName' => 'signId', ],
                'templateId' => [ 'type' => 'string', 'locationName' => 'templateId', ],
                'phone' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'params' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'PullMtMsgByMobileResultShape' => [
            'type' => 'structure',
            'members' => [
                'data' => [ 'type' => 'list', 'member' => [ 'shape' => 'PullMtMsgByMobile', ], ],
            ],
        ],
    ],
];
