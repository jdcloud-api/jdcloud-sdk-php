<?php
// This file was auto-generated
return [
//    'version' => '',
    'metadata' =>
    [
//        'apiVersion' => '',
//        'endpointPrefix' => 'billing',
        'protocol' => 'json',
//        'serviceFullName' => 'billing',
//        'serviceId' => 'billing',
    ],
    'operations' => [
        'QueryBillSummary' => [
            'name' => 'QueryBillSummary',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/billSummary:list',
            ],
            'input' => [ 'shape' => 'QueryBillSummaryRequestShape', ],
            'output' => [ 'shape' => 'QueryBillSummaryResponseShape', ],
        ],
        'QueryBillDetail' => [
            'name' => 'QueryBillDetail',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/billDetail:list',
            ],
            'input' => [ 'shape' => 'QueryBillDetailRequestShape', ],
            'output' => [ 'shape' => 'QueryBillDetailResponseShape', ],
        ],
        'CalculateTotalPrice' => [
            'name' => 'CalculateTotalPrice',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/calculateTotalPrice',
            ],
            'input' => [ 'shape' => 'CalculateTotalPriceRequestShape', ],
            'output' => [ 'shape' => 'CalculateTotalPriceResponseShape', ],
        ],
    ],
    'shapes' => [
    ],
];
