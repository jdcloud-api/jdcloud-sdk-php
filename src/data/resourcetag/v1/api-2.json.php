<?php
// This file was auto-generated
return [
//    'version' => '',
    'metadata' =>
    [
//        'apiVersion' => '',
//        'endpointPrefix' => 'resourcetag',
        'protocol' => 'json',
//        'serviceFullName' => 'resourcetag',
//        'serviceId' => 'resourcetag',
    ],
    'operations' => [
        'DescribeResources' => [
            'name' => 'DescribeResources',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/tags:describeResources',
            ],
            'input' => [ 'shape' => 'DescribeResourcesRequestShape', ],
            'output' => [ 'shape' => 'DescribeResourcesResponseShape', ],
        ],
        'DescribeTags' => [
            'name' => 'DescribeTags',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/describeTags',
            ],
            'input' => [ 'shape' => 'DescribeTagsRequestShape', ],
            'output' => [ 'shape' => 'DescribeTagsResponseShape', ],
        ],
        'DescribeKeys' => [
            'name' => 'DescribeKeys',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/tags:describeKeys',
            ],
            'input' => [ 'shape' => 'DescribeKeysRequestShape', ],
            'output' => [ 'shape' => 'DescribeKeysResponseShape', ],
        ],
        'DescribeValues' => [
            'name' => 'DescribeValues',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/tags:describeValues',
            ],
            'input' => [ 'shape' => 'DescribeValuesRequestShape', ],
            'output' => [ 'shape' => 'DescribeValuesResponseShape', ],
        ],
        'TagResources' => [
            'name' => 'TagResources',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/tags:tagResources',
            ],
            'input' => [ 'shape' => 'TagResourcesRequestShape', ],
            'output' => [ 'shape' => 'TagResourcesResponseShape', ],
        ],
        'UnTagResources' => [
            'name' => 'UnTagResources',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/tags:unTagResources',
            ],
            'input' => [ 'shape' => 'UnTagResourcesRequestShape', ],
            'output' => [ 'shape' => 'UnTagResourcesResponseShape', ],
        ],
        'QueryResource' => [
            'name' => 'QueryResource',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/queryResource',
            ],
            'input' => [ 'shape' => 'QueryResourceRequestShape', ],
            'output' => [ 'shape' => 'QueryResourceResponseShape', ],
        ],
    ],
    'shapes' => [
    ],
];
