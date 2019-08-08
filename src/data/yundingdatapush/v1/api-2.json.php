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
    ],
    'shapes' => [
        'RdsInstance' => [
            'type' => 'structure',
            'members' => [
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'vpcId' => [ 'type' => 'string', 'locationName' => 'vpcId', ],
                'vpcName' => [ 'type' => 'string', 'locationName' => 'vpcName', ],
                'instanceName' => [ 'type' => 'string', 'locationName' => 'instanceName', ],
                'instanceStatus' => [ 'type' => 'string', 'locationName' => 'instanceStatus', ],
                'instanceType' => [ 'type' => 'string', 'locationName' => 'instanceType', ],
                'instanceClass' => [ 'type' => 'string', 'locationName' => 'instanceClass', ],
            ],
        ],
        'Vender' => [
            'type' => 'structure',
            'members' => [
                'appkey' => [ 'type' => 'string', 'locationName' => 'appkey', ],
                'ydRdsInstanceId' => [ 'type' => 'string', 'locationName' => 'ydRdsInstanceId', ],
                'venderId' => [ 'type' => 'string', 'locationName' => 'venderId', ],
            ],
        ],
        'VenderShow' => [
            'type' => 'structure',
            'members' => [
                'appkey' => [ 'type' => 'string', 'locationName' => 'appkey', ],
                'ydRdsInstanceId' => [ 'type' => 'string', 'locationName' => 'ydRdsInstanceId', ],
                'venderId' => [ 'type' => 'string', 'locationName' => 'venderId', ],
                'venderName' => [ 'type' => 'string', 'locationName' => 'venderName', ],
            ],
        ],
        'AddDatapushVenderResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeDatapushVendersRequestShape' => [
            'type' => 'structure',
            'members' => [
                'appkey' => [ 'type' => 'string', 'locationName' => 'appkey', ],
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'ydRdsInstanceId' => [ 'type' => 'string', 'locationName' => 'ydRdsInstanceId', ],
                'rdsInstanceName' => [ 'type' => 'string', 'locationName' => 'rdsInstanceName', ],
                'venderId' => [ 'type' => 'string', 'locationName' => 'venderId', ],
                'venderName' => [ 'type' => 'string', 'locationName' => 'venderName', ],
            ],
        ],
        'DeleteDatapushVenderResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeDatapushVendersResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeDatapushVendersResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'AddDatapushVenderRequestShape' => [
            'type' => 'structure',
            'members' => [
                'datapushVender' =>  [ 'shape' => 'Vender', ],
            ],
        ],
        'DescribeRdsInstancesResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeRdsInstancesResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeRdsInstancesResultShape' => [
            'type' => 'structure',
            'members' => [
                'venders' => [ 'type' => 'list', 'member' => [ 'shape' => 'RdsInstance', ], ],
            ],
        ],
        'DescribeRdsInstancesRequestShape' => [
            'type' => 'structure',
            'members' => [
                'appkey' => [ 'type' => 'string', 'locationName' => 'appkey', ],
            ],
        ],
        'DescribeDatapushVendersResultShape' => [
            'type' => 'structure',
            'members' => [
                'venders' => [ 'type' => 'list', 'member' => [ 'shape' => 'VenderShow', ], ],
            ],
        ],
        'AddDatapushVenderResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DeleteDatapushVenderRequestShape' => [
            'type' => 'structure',
            'members' => [
                'appkey' => [ 'type' => 'string', 'locationName' => 'appkey', ],
                'ydRdsInstanceId' => [ 'type' => 'string', 'locationName' => 'ydRdsInstanceId', ],
                'venderId' => [ 'type' => 'string', 'locationName' => 'venderId', ],
            ],
        ],
        'DeleteDatapushVenderResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
    ],
];
