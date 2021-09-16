<?php
// This file was auto-generated
return [
//    'version' => '',
    'metadata' =>
    [
//        'apiVersion' => '',
//        'endpointPrefix' => 'refund',
        'protocol' => 'json',
//        'serviceFullName' => 'refund',
//        'serviceId' => 'refund',
    ],
    'operations' => [
        'SubmitResourceRefund' => [
            'name' => 'SubmitResourceRefund',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/refund:resource',
            ],
            'input' => [ 'shape' => 'SubmitResourceRefundRequestShape', ],
            'output' => [ 'shape' => 'SubmitResourceRefundResponseShape', ],
        ],
        'DescirbeRefundStatus' => [
            'name' => 'DescirbeRefundStatus',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/refund:status',
            ],
            'input' => [ 'shape' => 'DescirbeRefundStatusRequestShape', ],
            'output' => [ 'shape' => 'DescirbeRefundStatusResponseShape', ],
        ],
    ],
    'shapes' => [
    ],
];
