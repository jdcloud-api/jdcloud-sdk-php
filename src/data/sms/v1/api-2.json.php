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
    ],
];
