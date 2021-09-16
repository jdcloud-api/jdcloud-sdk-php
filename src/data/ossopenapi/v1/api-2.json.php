<?php
// This file was auto-generated
return [
//    'version' => '',
    'metadata' =>
    [
//        'apiVersion' => '',
//        'endpointPrefix' => 'ossopenapi',
        'protocol' => 'json',
//        'serviceFullName' => 'ossopenapi',
//        'serviceId' => 'ossopenapi',
    ],
    'operations' => [
        'GetSingleBucketCapacity' => [
            'name' => 'GetSingleBucketCapacity',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/capacity/{bucketName}',
            ],
            'input' => [ 'shape' => 'GetSingleBucketCapacityRequestShape', ],
            'output' => [ 'shape' => 'GetSingleBucketCapacityResponseShape', ],
        ],
        'GetBackSourceConfiguration' => [
            'name' => 'GetBackSourceConfiguration',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/buckets/{bucketName}/backSource',
            ],
            'input' => [ 'shape' => 'GetBackSourceConfigurationRequestShape', ],
            'output' => [ 'shape' => 'GetBackSourceConfigurationResponseShape', ],
        ],
        'PutBackSourceConfiguration' => [
            'name' => 'PutBackSourceConfiguration',
            'http' => [
                'method' => 'PUT',
                'requestUri' => '/v1/regions/{regionId}/buckets/{bucketName}/backSource',
            ],
            'input' => [ 'shape' => 'PutBackSourceConfigurationRequestShape', ],
            'output' => [ 'shape' => 'PutBackSourceConfigurationResponseShape', ],
        ],
        'DeleteBackSourceConfiguration' => [
            'name' => 'DeleteBackSourceConfiguration',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/regions/{regionId}/buckets/{bucketName}/backSource',
            ],
            'input' => [ 'shape' => 'DeleteBackSourceConfigurationRequestShape', ],
            'output' => [ 'shape' => 'DeleteBackSourceConfigurationResponseShape', ],
        ],
        'GetHistoricalReplicatTask' => [
            'name' => 'GetHistoricalReplicatTask',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/buckets/{bucketName}/historical_replicat_task/{taskId}',
            ],
            'input' => [ 'shape' => 'GetHistoricalReplicatTaskRequestShape', ],
            'output' => [ 'shape' => 'GetHistoricalReplicatTaskResponseShape', ],
        ],
        'AbortHistoricalReplicatTask' => [
            'name' => 'AbortHistoricalReplicatTask',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/buckets/{bucketName}/historical_replicat_task/{taskId}/abort',
            ],
            'input' => [ 'shape' => 'AbortHistoricalReplicatTaskRequestShape', ],
            'output' => [ 'shape' => 'AbortHistoricalReplicatTaskResponseShape', ],
        ],
        'ListHistoricalReplicatTasks' => [
            'name' => 'ListHistoricalReplicatTasks',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/buckets/{bucketName}/historical_replicat_task/',
            ],
            'input' => [ 'shape' => 'ListHistoricalReplicatTasksRequestShape', ],
            'output' => [ 'shape' => 'ListHistoricalReplicatTasksResponseShape', ],
        ],
        'CreateHistoricalReplicatTask' => [
            'name' => 'CreateHistoricalReplicatTask',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/buckets/{bucketName}/historical_replicat_task/',
            ],
            'input' => [ 'shape' => 'CreateHistoricalReplicatTaskRequestShape', ],
            'output' => [ 'shape' => 'CreateHistoricalReplicatTaskResponseShape', ],
        ],
    ],
    'shapes' => [
    ],
];
