<?php
// This file was auto-generated
return [
//    'version' => '',
    'metadata' =>
    [
//        'apiVersion' => '',
//        'endpointPrefix' => 'asset',
        'protocol' => 'json',
//        'serviceFullName' => 'asset',
//        'serviceId' => 'asset',
    ],
    'operations' => [
        'DescribeAccountAmount' => [
            'name' => 'DescribeAccountAmount',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/assets:describeAccountAmount',
            ],
            'input' => [ 'shape' => 'DescribeAccountAmountRequestShape', ],
            'output' => [ 'shape' => 'DescribeAccountAmountResponseShape', ],
        ],
        'ModifyBalanceWarningInfo' => [
            'name' => 'ModifyBalanceWarningInfo',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/assets:modifyBalanceWarningInfo',
            ],
            'input' => [ 'shape' => 'ModifyBalanceWarningInfoRequestShape', ],
            'output' => [ 'shape' => 'ModifyBalanceWarningInfoResponseShape', ],
        ],
    ],
    'shapes' => [
    ],
];
