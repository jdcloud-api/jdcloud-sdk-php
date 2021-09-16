<?php
// This file was auto-generated
return [
//    'version' => '',
    'metadata' =>
    [
//        'apiVersion' => '',
//        'endpointPrefix' => 'streambus',
        'protocol' => 'json',
//        'serviceFullName' => 'streambus',
//        'serviceId' => 'streambus',
    ],
    'operations' => [
        'GetTopicList' => [
            'name' => 'GetTopicList',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/topicList',
            ],
            'input' => [ 'shape' => 'GetTopicListRequestShape', ],
            'output' => [ 'shape' => 'GetTopicListResponseShape', ],
        ],
        'DescribeTopic' => [
            'name' => 'DescribeTopic',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/topic',
            ],
            'input' => [ 'shape' => 'DescribeTopicRequestShape', ],
            'output' => [ 'shape' => 'DescribeTopicResponseShape', ],
        ],
        'AddTopic' => [
            'name' => 'AddTopic',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/topic',
            ],
            'input' => [ 'shape' => 'AddTopicRequestShape', ],
            'output' => [ 'shape' => 'AddTopicResponseShape', ],
        ],
        'UpdateTopic' => [
            'name' => 'UpdateTopic',
            'http' => [
                'method' => 'PUT',
                'requestUri' => '/v1/regions/{regionId}/topic',
            ],
            'input' => [ 'shape' => 'UpdateTopicRequestShape', ],
            'output' => [ 'shape' => 'UpdateTopicResponseShape', ],
        ],
        'DeleteTopic' => [
            'name' => 'DeleteTopic',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/regions/{regionId}/topic',
            ],
            'input' => [ 'shape' => 'DeleteTopicRequestShape', ],
            'output' => [ 'shape' => 'DeleteTopicResponseShape', ],
        ],
        'GetConsumerGroupList' => [
            'name' => 'GetConsumerGroupList',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/consumerGroupList',
            ],
            'input' => [ 'shape' => 'GetConsumerGroupListRequestShape', ],
            'output' => [ 'shape' => 'GetConsumerGroupListResponseShape', ],
        ],
        'CreateConsumerGroup' => [
            'name' => 'CreateConsumerGroup',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/consumerGroup',
            ],
            'input' => [ 'shape' => 'CreateConsumerGroupRequestShape', ],
            'output' => [ 'shape' => 'CreateConsumerGroupResponseShape', ],
        ],
        'DeleteConsumerGroup' => [
            'name' => 'DeleteConsumerGroup',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/regions/{regionId}/consumerGroup',
            ],
            'input' => [ 'shape' => 'DeleteConsumerGroupRequestShape', ],
            'output' => [ 'shape' => 'DeleteConsumerGroupResponseShape', ],
        ],
    ],
    'shapes' => [
    ],
];
