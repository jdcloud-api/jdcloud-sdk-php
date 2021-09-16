<?php
// This file was auto-generated
return [
//    'version' => '',
    'metadata' =>
    [
//        'apiVersion' => '',
//        'endpointPrefix' => 'partner',
        'protocol' => 'json',
//        'serviceFullName' => 'partner',
//        'serviceId' => 'partner',
    ],
    'operations' => [
        'QueryMyCustomerList' => [
            'name' => 'QueryMyCustomerList',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/customerManage:queryMyCustomerList',
            ],
            'input' => [ 'shape' => 'QueryMyCustomerListRequestShape', ],
            'output' => [ 'shape' => 'QueryMyCustomerListResponseShape', ],
        ],
        'GetTotalConsumption' => [
            'name' => 'GetTotalConsumption',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/accountingBill:getTotalConsumption',
            ],
            'input' => [ 'shape' => 'GetTotalConsumptionRequestShape', ],
            'output' => [ 'shape' => 'GetTotalConsumptionResponseShape', ],
        ],
        'GetEachConsumption' => [
            'name' => 'GetEachConsumption',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/accountingBill:getEachConsumption',
            ],
            'input' => [ 'shape' => 'GetEachConsumptionRequestShape', ],
            'output' => [ 'shape' => 'GetEachConsumptionResponseShape', ],
        ],
        'DescribeCustomerBillByProduct' => [
            'name' => 'DescribeCustomerBillByProduct',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/accountingBill:describeCustomerBillByProduct',
            ],
            'input' => [ 'shape' => 'DescribeCustomerBillByProductRequestShape', ],
            'output' => [ 'shape' => 'DescribeCustomerBillByProductResponseShape', ],
        ],
    ],
    'shapes' => [
    ],
];
