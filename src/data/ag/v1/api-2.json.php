<?php
// This file was auto-generated
return [
//    'version' => '',
    'metadata' =>
    [
//        'apiVersion' => '',
//        'endpointPrefix' => 'ag',
        'protocol' => 'json',
//        'serviceFullName' => 'ag',
//        'serviceId' => 'ag',
    ],
    'operations' => [
        'DescribeAgs' => [
            'name' => 'DescribeAgs',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/availabilityGroups',
            ],
            'input' => [ 'shape' => 'DescribeAgsRequestShape', ],
            'output' => [ 'shape' => 'DescribeAgsResponseShape', ],
        ],
        'CreateAg' => [
            'name' => 'CreateAg',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/availabilityGroups',
            ],
            'input' => [ 'shape' => 'CreateAgRequestShape', ],
            'output' => [ 'shape' => 'CreateAgResponseShape', ],
        ],
        'DescribeAg' => [
            'name' => 'DescribeAg',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/availabilityGroups/{agId}',
            ],
            'input' => [ 'shape' => 'DescribeAgRequestShape', ],
            'output' => [ 'shape' => 'DescribeAgResponseShape', ],
        ],
        'UpdateAg' => [
            'name' => 'UpdateAg',
            'http' => [
                'method' => 'PATCH',
                'requestUri' => '/v1/regions/{regionId}/availabilityGroups/{agId}',
            ],
            'input' => [ 'shape' => 'UpdateAgRequestShape', ],
            'output' => [ 'shape' => 'UpdateAgResponseShape', ],
        ],
        'DeleteAg' => [
            'name' => 'DeleteAg',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/regions/{regionId}/availabilityGroups/{agId}',
            ],
            'input' => [ 'shape' => 'DeleteAgRequestShape', ],
            'output' => [ 'shape' => 'DeleteAgResponseShape', ],
        ],
        'AbandonInstances' => [
            'name' => 'AbandonInstances',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/availabilityGroups/{agId}:abandonInstances',
            ],
            'input' => [ 'shape' => 'AbandonInstancesRequestShape', ],
            'output' => [ 'shape' => 'AbandonInstancesResponseShape', ],
        ],
        'SetInstanceTemplate' => [
            'name' => 'SetInstanceTemplate',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/availabilityGroups/{agId}:setInstanceTemplate',
            ],
            'input' => [ 'shape' => 'SetInstanceTemplateRequestShape', ],
            'output' => [ 'shape' => 'SetInstanceTemplateResponseShape', ],
        ],
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
    ],
];
