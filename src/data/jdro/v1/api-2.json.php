<?php
// This file was auto-generated
return [
//    'version' => '',
    'metadata' =>
    [
//        'apiVersion' => '',
//        'endpointPrefix' => 'jdro',
        'protocol' => 'json',
//        'serviceFullName' => 'jdro',
//        'serviceId' => 'jdro',
    ],
    'operations' => [
        'DescribeResourceTypeList' => [
            'name' => 'DescribeResourceTypeList',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/resourcetypes',
            ],
            'input' => [ 'shape' => 'DescribeResourceTypeListRequestShape', ],
            'output' => [ 'shape' => 'DescribeResourceTypeListResponseShape', ],
        ],
        'DescribeResourceTypeSpecification' => [
            'name' => 'DescribeResourceTypeSpecification',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/resourcetypes/{resourceType}',
            ],
            'input' => [ 'shape' => 'DescribeResourceTypeSpecificationRequestShape', ],
            'output' => [ 'shape' => 'DescribeResourceTypeSpecificationResponseShape', ],
        ],
        'DescribeStacks' => [
            'name' => 'DescribeStacks',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/stacks',
            ],
            'input' => [ 'shape' => 'DescribeStacksRequestShape', ],
            'output' => [ 'shape' => 'DescribeStacksResponseShape', ],
        ],
        'CreateStack' => [
            'name' => 'CreateStack',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/stacks',
            ],
            'input' => [ 'shape' => 'CreateStackRequestShape', ],
            'output' => [ 'shape' => 'CreateStackResponseShape', ],
        ],
        'DescribeStack' => [
            'name' => 'DescribeStack',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/stacks/{stackId}',
            ],
            'input' => [ 'shape' => 'DescribeStackRequestShape', ],
            'output' => [ 'shape' => 'DescribeStackResponseShape', ],
        ],
        'DeleteStack' => [
            'name' => 'DeleteStack',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/regions/{regionId}/stacks/{stackId}',
            ],
            'input' => [ 'shape' => 'DeleteStackRequestShape', ],
            'output' => [ 'shape' => 'DeleteStackResponseShape', ],
        ],
        'CreateChangeSet' => [
            'name' => 'CreateChangeSet',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/stacks/{stackId}/changesets',
            ],
            'input' => [ 'shape' => 'CreateChangeSetRequestShape', ],
            'output' => [ 'shape' => 'CreateChangeSetResponseShape', ],
        ],
        'ExecuteChangeSet' => [
            'name' => 'ExecuteChangeSet',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/stacks/{stackId}/changesets/{changesetId}',
            ],
            'input' => [ 'shape' => 'ExecuteChangeSetRequestShape', ],
            'output' => [ 'shape' => 'ExecuteChangeSetResponseShape', ],
        ],
        'DescribeStackEvents' => [
            'name' => 'DescribeStackEvents',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/stacks/{stackId}/events',
            ],
            'input' => [ 'shape' => 'DescribeStackEventsRequestShape', ],
            'output' => [ 'shape' => 'DescribeStackEventsResponseShape', ],
        ],
        'DescribeStackResources' => [
            'name' => 'DescribeStackResources',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/stacks/{stackId}/resources',
            ],
            'input' => [ 'shape' => 'DescribeStackResourcesRequestShape', ],
            'output' => [ 'shape' => 'DescribeStackResourcesResponseShape', ],
        ],
        'DescribeStackTemplate' => [
            'name' => 'DescribeStackTemplate',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/stacks/{stackId}/template',
            ],
            'input' => [ 'shape' => 'DescribeStackTemplateRequestShape', ],
            'output' => [ 'shape' => 'DescribeStackTemplateResponseShape', ],
        ],
        'ValidateTemplate' => [
            'name' => 'ValidateTemplate',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/templateValidate',
            ],
            'input' => [ 'shape' => 'ValidateTemplateRequestShape', ],
            'output' => [ 'shape' => 'ValidateTemplateResponseShape', ],
        ],
    ],
    'shapes' => [
    ],
];
