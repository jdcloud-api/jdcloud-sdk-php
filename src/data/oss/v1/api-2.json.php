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
        'Bucket' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'creationDate' => [ 'type' => 'string', 'locationName' => 'creationDate', ],
            ],
        ],
        'User' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
                'displayName' => [ 'type' => 'string', 'locationName' => 'displayName', ],
            ],
        ],
        'ListBucketsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'ListBucketsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'ListBucketsResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'PutBucketResponseShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DeleteBucketRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'bucketname' => [ 'type' => 'string', 'locationName' => 'bucketname', ],
            ],
        ],
        'DeleteBucketResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'HeadBucketRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'bucketname' => [ 'type' => 'string', 'locationName' => 'bucketname', ],
            ],
        ],
        'ListBucketsResultShape' => [
            'type' => 'structure',
            'members' => [
                'owner' =>  [ 'shape' => 'User', ],
                'buckets' => [ 'type' => 'list', 'member' => [ 'shape' => 'Bucket', ], ],
            ],
        ],
        'PutBucketRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'bucketname' => [ 'type' => 'string', 'locationName' => 'bucketname', ],
            ],
        ],
        'PutBucketResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'HeadBucketResponseShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'HeadBucketResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DeleteBucketResponseShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
    ],
];
