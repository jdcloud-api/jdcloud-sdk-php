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
    ],
    'shapes' => [
        'AddTopic' => [
            'type' => 'structure',
            'members' => [
                'topic' => [ 'type' => 'object', 'locationName' => 'topic', ],
                'target' => [ 'type' => 'object', 'locationName' => 'target', ],
                'parameterList' => [ 'type' => 'list', 'member' => [ 'type' => 'object', ], ],
            ],
        ],
        'TopicListInfo' => [
            'type' => 'structure',
            'members' => [
                'archived' => [ 'type' => 'integer', 'locationName' => 'archived', ],
                'createdTime' => [ 'type' => 'integer', 'locationName' => 'createdTime', ],
                'deleted' => [ 'type' => 'integer', 'locationName' => 'deleted', ],
                'id' => [ 'type' => 'integer', 'locationName' => 'id', ],
                'lifecycle' => [ 'type' => 'integer', 'locationName' => 'lifecycle', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'partitionNum' => [ 'type' => 'string', 'locationName' => 'partitionNum', ],
                'remark' => [ 'type' => 'string', 'locationName' => 'remark', ],
                'shardNum' => [ 'type' => 'string', 'locationName' => 'shardNum', ],
                'status' => [ 'type' => 'integer', 'locationName' => 'status', ],
                'topicName' => [ 'type' => 'string', 'locationName' => 'topicName', ],
                'uid' => [ 'type' => 'string', 'locationName' => 'uid', ],
                'updatedTime' => [ 'type' => 'integer', 'locationName' => 'updatedTime', ],
                'userPin' => [ 'type' => 'string', 'locationName' => 'userPin', ],
            ],
        ],
        'AddTopicResultShape' => [
            'type' => 'structure',
            'members' => [
                'status' => [ 'type' => 'boolean', 'locationName' => 'status', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
            ],
        ],
        'GetTopicListResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GetTopicListResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'GetTopicListRequestShape' => [
            'type' => 'structure',
            'members' => [
                'keyword' => [ 'type' => 'string', 'locationName' => 'keyword', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'UpdateTopicResultShape' => [
            'type' => 'structure',
            'members' => [
                'status' => [ 'type' => 'boolean', 'locationName' => 'status', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
            ],
        ],
        'UpdateTopicResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'UpdateTopicResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'GetTopicListResultShape' => [
            'type' => 'structure',
            'members' => [
                'topic' => [ 'type' => 'list', 'member' => [ 'shape' => 'TopicListInfo', ], ],
            ],
        ],
        'UpdateTopicRequestShape' => [
            'type' => 'structure',
            'members' => [
                'topicModel' =>  [ 'shape' => 'AddTopic', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'AddTopicResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'AddTopicResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'AddTopicRequestShape' => [
            'type' => 'structure',
            'members' => [
                'topicModel' =>  [ 'shape' => 'AddTopic', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
    ],
];
