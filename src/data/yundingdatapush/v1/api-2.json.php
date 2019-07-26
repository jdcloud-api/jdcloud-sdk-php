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
                'venderPin' => [ 'type' => 'string', 'locationName' => 'venderPin', ],
            ],
        ],
    ],
];
