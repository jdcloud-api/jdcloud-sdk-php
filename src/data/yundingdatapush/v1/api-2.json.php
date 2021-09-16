<?php
// This file was auto-generated
return [
//    'version' => '',
    'metadata' =>
    [
//        'apiVersion' => '',
//        'endpointPrefix' => 'yundingdatapush',
        'protocol' => 'json',
//        'serviceFullName' => 'yundingdatapush',
//        'serviceId' => 'yundingdatapush',
    ],
    'operations' => [
        'DescribeDatapushVenders' => [
            'name' => 'DescribeDatapushVenders',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/datapushVenders',
            ],
            'input' => [ 'shape' => 'DescribeDatapushVendersRequestShape', ],
            'output' => [ 'shape' => 'DescribeDatapushVendersResponseShape', ],
        ],
        'AddDatapushVender' => [
            'name' => 'AddDatapushVender',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/datapushVenders',
            ],
            'input' => [ 'shape' => 'AddDatapushVenderRequestShape', ],
            'output' => [ 'shape' => 'AddDatapushVenderResponseShape', ],
        ],
        'DeleteDatapushVender' => [
            'name' => 'DeleteDatapushVender',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/datapushVenders',
            ],
            'input' => [ 'shape' => 'DeleteDatapushVenderRequestShape', ],
            'output' => [ 'shape' => 'DeleteDatapushVenderResponseShape', ],
        ],
        'DescribeRdsInstances' => [
            'name' => 'DescribeRdsInstances',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/describeRdsInstances',
            ],
            'input' => [ 'shape' => 'DescribeRdsInstancesRequestShape', ],
            'output' => [ 'shape' => 'DescribeRdsInstancesResponseShape', ],
        ],
        'CreateOrderSync' => [
            'name' => 'CreateOrderSync',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/createOrderSync',
            ],
            'input' => [ 'shape' => 'CreateOrderSyncRequestShape', ],
            'output' => [ 'shape' => 'CreateOrderSyncResponseShape', ],
        ],
    ],
    'shapes' => [
    ],
];
