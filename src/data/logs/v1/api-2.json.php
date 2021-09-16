<?php
// This file was auto-generated
return [
//    'version' => '',
    'metadata' =>
    [
//        'apiVersion' => '',
//        'endpointPrefix' => 'logs',
        'protocol' => 'json',
//        'serviceFullName' => 'logs',
//        'serviceId' => 'logs',
    ],
    'operations' => [
        'DescribeCollectInfo' => [
            'name' => 'DescribeCollectInfo',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/collectinfos/{collectInfoUID}',
            ],
            'input' => [ 'shape' => 'DescribeCollectInfoRequestShape', ],
            'output' => [ 'shape' => 'DescribeCollectInfoResponseShape', ],
        ],
        'UpdateCollectInfo' => [
            'name' => 'UpdateCollectInfo',
            'http' => [
                'method' => 'PUT',
                'requestUri' => '/v1/regions/{regionId}/collectinfos/{collectInfoUID}',
            ],
            'input' => [ 'shape' => 'UpdateCollectInfoRequestShape', ],
            'output' => [ 'shape' => 'UpdateCollectInfoResponseShape', ],
        ],
        'DescribeCollectResources' => [
            'name' => 'DescribeCollectResources',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/collectinfos/{collectInfoUID}/resources',
            ],
            'input' => [ 'shape' => 'DescribeCollectResourcesRequestShape', ],
            'output' => [ 'shape' => 'DescribeCollectResourcesResponseShape', ],
        ],
        'UpdateCollectResources' => [
            'name' => 'UpdateCollectResources',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/collectinfos/{collectInfoUID}:updateResources',
            ],
            'input' => [ 'shape' => 'UpdateCollectResourcesRequestShape', ],
            'output' => [ 'shape' => 'UpdateCollectResourcesResponseShape', ],
        ],
        'CreateCollectInfo' => [
            'name' => 'CreateCollectInfo',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/logtopics/{logtopicUID}/collectinfos',
            ],
            'input' => [ 'shape' => 'CreateCollectInfoRequestShape', ],
            'output' => [ 'shape' => 'CreateCollectInfoResponseShape', ],
        ],
        'DescribeLogdCA' => [
            'name' => 'DescribeLogdCA',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}/ca',
            ],
            'input' => [ 'shape' => 'DescribeLogdCARequestShape', ],
            'output' => [ 'shape' => 'DescribeLogdCAResponseShape', ],
        ],
        'DescribeInstanceCollectConfs' => [
            'name' => 'DescribeInstanceCollectConfs',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}/collectconfs',
            ],
            'input' => [ 'shape' => 'DescribeInstanceCollectConfsRequestShape', ],
            'output' => [ 'shape' => 'DescribeInstanceCollectConfsResponseShape', ],
        ],
        'DescribeLogsets' => [
            'name' => 'DescribeLogsets',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/logsets',
            ],
            'input' => [ 'shape' => 'DescribeLogsetsRequestShape', ],
            'output' => [ 'shape' => 'DescribeLogsetsResponseShape', ],
        ],
        'CreateLogset' => [
            'name' => 'CreateLogset',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/logsets',
            ],
            'input' => [ 'shape' => 'CreateLogsetRequestShape', ],
            'output' => [ 'shape' => 'CreateLogsetResponseShape', ],
        ],
        'DescribeLogset' => [
            'name' => 'DescribeLogset',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/logsets/{logsetUID}',
            ],
            'input' => [ 'shape' => 'DescribeLogsetRequestShape', ],
            'output' => [ 'shape' => 'DescribeLogsetResponseShape', ],
        ],
        'UpdateLogset' => [
            'name' => 'UpdateLogset',
            'http' => [
                'method' => 'PUT',
                'requestUri' => '/v1/regions/{regionId}/logsets/{logsetUID}',
            ],
            'input' => [ 'shape' => 'UpdateLogsetRequestShape', ],
            'output' => [ 'shape' => 'UpdateLogsetResponseShape', ],
        ],
        'DeleteLogset' => [
            'name' => 'DeleteLogset',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/regions/{regionId}/logsets/{logsetUIDs}',
            ],
            'input' => [ 'shape' => 'DeleteLogsetRequestShape', ],
            'output' => [ 'shape' => 'DeleteLogsetResponseShape', ],
        ],
        'DescribeLogtopics' => [
            'name' => 'DescribeLogtopics',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/logsets/{logsetUID}/logtopics',
            ],
            'input' => [ 'shape' => 'DescribeLogtopicsRequestShape', ],
            'output' => [ 'shape' => 'DescribeLogtopicsResponseShape', ],
        ],
        'CreateLogtopic' => [
            'name' => 'CreateLogtopic',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/logsets/{logsetUID}/logtopics',
            ],
            'input' => [ 'shape' => 'CreateLogtopicRequestShape', ],
            'output' => [ 'shape' => 'CreateLogtopicResponseShape', ],
        ],
        'DeleteLogtopic' => [
            'name' => 'DeleteLogtopic',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/regions/{regionId}/logsets/{logsetUID}/logtopics/{logtopicUIDs}',
            ],
            'input' => [ 'shape' => 'DeleteLogtopicRequestShape', ],
            'output' => [ 'shape' => 'DeleteLogtopicResponseShape', ],
        ],
        'DescribeLogtopic' => [
            'name' => 'DescribeLogtopic',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/logtopics/{logtopicUID}',
            ],
            'input' => [ 'shape' => 'DescribeLogtopicRequestShape', ],
            'output' => [ 'shape' => 'DescribeLogtopicResponseShape', ],
        ],
        'UpdateLogtopic' => [
            'name' => 'UpdateLogtopic',
            'http' => [
                'method' => 'PUT',
                'requestUri' => '/v1/regions/{regionId}/logtopics/{logtopicUID}',
            ],
            'input' => [ 'shape' => 'UpdateLogtopicRequestShape', ],
            'output' => [ 'shape' => 'UpdateLogtopicResponseShape', ],
        ],
        'Put' => [
            'name' => 'Put',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/logtopics/{logtopicUID}:put',
            ],
            'input' => [ 'shape' => 'PutRequestShape', ],
            'output' => [ 'shape' => 'PutResponseShape', ],
        ],
        'SearchLogContext' => [
            'name' => 'SearchLogContext',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/logsets/{logsetUID}/logtopics/{logtopicUID}/logcontext',
            ],
            'input' => [ 'shape' => 'SearchLogContextRequestShape', ],
            'output' => [ 'shape' => 'SearchLogContextResponseShape', ],
        ],
        'Search' => [
            'name' => 'Search',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/logsets/{logsetUID}/logtopics/{logtopicUID}/search',
            ],
            'input' => [ 'shape' => 'SearchRequestShape', ],
            'output' => [ 'shape' => 'SearchResponseShape', ],
        ],
    ],
    'shapes' => [
    ],
];
