<?php
// This file was auto-generated
return [
//    'version' => '',
    'metadata' =>
    [
//        'apiVersion' => '',
//        'endpointPrefix' => 'jdworkspace',
        'protocol' => 'json',
//        'serviceFullName' => 'jdworkspace',
//        'serviceId' => 'jdworkspace',
    ],
    'operations' => [
    ],
    'shapes' => [
        'ResourceInfo' => [
            'type' => 'structure',
            'members' => [
                'resourceId' => [ 'type' => 'string', 'locationName' => 'resourceId', ],
                'resourceName' => [ 'type' => 'string', 'locationName' => 'resourceName', ],
                'remark' => [ 'type' => 'string', 'locationName' => 'remark', ],
                'serviceCode' => [ 'type' => 'string', 'locationName' => 'serviceCode', ],
                'bind' => [ 'type' => 'list', 'member' => [ 'shape' => 'ResourceInfo', ], ],
            ],
        ],
    ],
];
