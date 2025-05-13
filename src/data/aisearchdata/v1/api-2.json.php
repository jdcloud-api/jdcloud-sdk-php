<?php
// This file was auto-generated
return [
//    'version' => '',
    'metadata' =>
    [
//        'apiVersion' => '',
//        'endpointPrefix' => 'aisearchdata',
        'protocol' => 'json',
//        'serviceFullName' => 'aisearchdata',
//        'serviceId' => 'aisearchdata',
    ],
    'operations' => [
        'FetchData' => [
            'name' => 'FetchData',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/fetchData',
            ],
            'input' => [ 'shape' => 'FetchDataRequestShape', ],
            'output' => [ 'shape' => 'FetchDataResponseShape', ],
        ],
        'PushData' => [
            'name' => 'PushData',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/pushData',
            ],
            'input' => [ 'shape' => 'PushDataRequestShape', ],
            'output' => [ 'shape' => 'PushDataResponseShape', ],
        ],
    ],
    'shapes' => [
        'FetchDataResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'FetchDataResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'PushDataResultShape' => [
            'type' => 'structure',
            'members' => [
                'data' => [ 'type' => 'integer', 'locationName' => 'data', ],
            ],
        ],
        'FetchDataRequestShape' => [
            'type' => 'structure',
            'members' => [
                'crawlerId' => [ 'type' => 'string', 'locationName' => 'crawlerId', ],
                'count' => [ 'type' => 'integer', 'locationName' => 'count', ],
            ],
        ],
        'PushDataResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'PushDataResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'FetchDataResultShape' => [
            'type' => 'structure',
            'members' => [
                'data' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'PushDataRequestShape' => [
            'type' => 'structure',
            'members' => [
                'crawlerId' => [ 'type' => 'string', 'locationName' => 'crawlerId', ],
                'taskId' => [ 'type' => 'string', 'locationName' => 'taskId', ],
                'title' => [ 'type' => 'string', 'locationName' => 'title', ],
                'url' => [ 'type' => 'string', 'locationName' => 'url', ],
                'content' => [ 'type' => 'string', 'locationName' => 'content', ],
                'publish_time' => [ 'type' => 'string', 'locationName' => 'publish_time', ],
                'category' => [ 'type' => 'string', 'locationName' => 'category', ],
                'language' => [ 'type' => 'string', 'locationName' => 'language', ],
                'author' => [ 'type' => 'string', 'locationName' => 'author', ],
                'location' => [ 'type' => 'string', 'locationName' => 'location', ],
            ],
        ],
    ],
];
