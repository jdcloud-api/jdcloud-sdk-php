<?php
// This file was auto-generated
return [
//    'version' => '',
    'metadata' =>
    [
//        'apiVersion' => '',
//        'endpointPrefix' => 'jke',
        'protocol' => 'json',
//        'serviceFullName' => 'jke',
//        'serviceId' => 'jke',
    ],
    'operations' => [
        'DescribeQuotas' => [
            'name' => 'DescribeQuotas',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/quotas',
            ],
            'input' => [ 'shape' => 'DescribeQuotasRequestShape', ],
            'output' => [ 'shape' => 'DescribeQuotasResponseShape', ],
        ],
    ],
    'shapes' => [
        'Quota' => [
            'type' => 'structure',
            'members' => [
                'resourceType' => [ 'type' => 'string', 'locationName' => 'resourceType', ],
                'limit' => [ 'type' => 'integer', 'locationName' => 'limit', ],
                'used' => [ 'type' => 'integer', 'locationName' => 'used', ],
            ],
        ],
        'DescribeQuotasResultShape' => [
            'type' => 'structure',
            'members' => [
                'quotas' => [ 'type' => 'list', 'member' => [ 'shape' => 'Quota', ], ],
            ],
        ],
        'DescribeQuotasResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeQuotasResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeQuotasRequestShape' => [
            'type' => 'structure',
            'members' => [
                'filters' => [ 'type' => 'list', 'member' => [ 'shape' => 'Filter', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
    ],
];
