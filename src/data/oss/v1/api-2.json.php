<?php
// This file was auto-generated
return [
//    'version' => '',
    'metadata' =>
    [
//        'apiVersion' => '',
//        'endpointPrefix' => 'oss',
        'protocol' => 'json',
//        'serviceFullName' => 'oss',
//        'serviceId' => 'oss',
    ],
    'operations' => [
        'ListBuckets' => [
            'name' => 'ListBuckets',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/buckets',
            ],
            'input' => [ 'shape' => 'ListBucketsRequestShape', ],
            'output' => [ 'shape' => 'ListBucketsResponseShape', ],
        ],
        'PutBucket' => [
            'name' => 'PutBucket',
            'http' => [
                'method' => 'PUT',
                'requestUri' => '/v1/regions/{regionId}/buckets/{bucketname}',
            ],
            'input' => [ 'shape' => 'PutBucketRequestShape', ],
            'output' => [ 'shape' => 'PutBucketResponseShape', ],
        ],
        'DeleteBucket' => [
            'name' => 'DeleteBucket',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/regions/{regionId}/buckets/{bucketname}',
            ],
            'input' => [ 'shape' => 'DeleteBucketRequestShape', ],
            'output' => [ 'shape' => 'DeleteBucketResponseShape', ],
        ],
        'HeadBucket' => [
            'name' => 'HeadBucket',
            'http' => [
                'method' => 'HEAD',
                'requestUri' => '/v1/regions/{regionId}/buckets/{bucketname}',
            ],
            'input' => [ 'shape' => 'HeadBucketRequestShape', ],
            'output' => [ 'shape' => 'HeadBucketResponseShape', ],
        ],
    ],
    'shapes' => [
    ],
];
