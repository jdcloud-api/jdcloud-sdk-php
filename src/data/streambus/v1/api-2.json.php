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
        'Target' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'recordSize' => [ 'type' => 'integer', 'locationName' => 'recordSize', ],
                'cycle' => [ 'type' => 'integer', 'locationName' => 'cycle', ],
            ],
        ],
        'AddTopic' => [
            'type' => 'structure',
            'members' => [
                'topic' =>  [ 'shape' => 'Topic', ],
                'target' =>  [ 'shape' => 'Target', ],
                'parameterList' => [ 'type' => 'list', 'member' => [ 'shape' => 'ParameterList', ], ],
            ],
        ],
        'ParameterList' => [
            'type' => 'structure',
            'members' => [
                'pKey' => [ 'type' => 'string', 'locationName' => 'pKey', ],
                'pValue' => [ 'type' => 'string', 'locationName' => 'pValue', ],
            ],
        ],
        'Topic' => [
            'type' => 'structure',
            'members' => [
                'archived' => [ 'type' => 'integer', 'locationName' => 'archived', ],
                'lifecycle' => [ 'type' => 'integer', 'locationName' => 'lifecycle', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'shardNum' => [ 'type' => 'integer', 'locationName' => 'shardNum', ],
                'remark' => [ 'type' => 'string', 'locationName' => 'remark', ],
            ],
        ],
        'ConsumerGroup' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'integer', 'locationName' => 'id', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'createdTime' => [ 'type' => 'date', 'locationName' => 'createdTime', ],
                'delete' => [ 'type' => 'byte', 'locationName' => 'delete', ],
                'topicId' => [ 'type' => 'int64', 'locationName' => 'topicId', ],
            ],
        ],
        'TopicListInfo' => [
            'type' => 'structure',
            'members' => [
                'archived' => [ 'type' => 'integer', 'locationName' => 'archived', ],
                'createdTime' => [ 'type' => 'date', 'locationName' => 'createdTime', ],
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
                'updatedTime' => [ 'type' => 'date', 'locationName' => 'updatedTime', ],
                'userPin' => [ 'type' => 'string', 'locationName' => 'userPin', ],
                'dataSize' => [ 'type' => 'string', 'locationName' => 'dataSize', ],
            ],
        ],
        'DescribeTopicResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeTopicResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DeleteTopicResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DeleteTopicResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
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
        'UpdateTopicRequestShape' => [
            'type' => 'structure',
            'members' => [
                'topicModel' =>  [ 'shape' => 'AddTopic', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'AddTopicRequestShape' => [
            'type' => 'structure',
            'members' => [
                'topicModel' =>  [ 'shape' => 'AddTopic', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DescribeTopicRequestShape' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DescribeTopicResultShape' => [
            'type' => 'structure',
            'members' => [
                'topic' =>  [ 'shape' => 'AddTopic', ],
            ],
        ],
        'DeleteTopicResultShape' => [
            'type' => 'structure',
            'members' => [
                'status' => [ 'type' => 'boolean', 'locationName' => 'status', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
            ],
        ],
        'DeleteTopicRequestShape' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'GetTopicListResultShape' => [
            'type' => 'structure',
            'members' => [
                'topic' => [ 'type' => 'list', 'member' => [ 'shape' => 'TopicListInfo', ], ],
            ],
        ],
        'AddTopicResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'AddTopicResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'GetConsumerGroupListResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'GetConsumerGroupListResultShape', ],
            ],
        ],
        'GetConsumerGroupListRequestShape' => [
            'type' => 'structure',
            'members' => [
                'topicId' => [ 'type' => 'integer', 'locationName' => 'topicId', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'CreateConsumerGroupResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'CreateConsumerGroupResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'CreateConsumerGroupResultShape' => [
            'type' => 'structure',
            'members' => [
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'status' => [ 'type' => 'boolean', 'locationName' => 'status', ],
            ],
        ],
        'CreateConsumerGroupRequestShape' => [
            'type' => 'structure',
            'members' => [
                'consumerGroupStr' =>  [ 'shape' => 'ConsumerGroup', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DeleteConsumerGroupResultShape' => [
            'type' => 'structure',
            'members' => [
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'status' => [ 'type' => 'boolean', 'locationName' => 'status', ],
            ],
        ],
        'DeleteConsumerGroupResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DeleteConsumerGroupResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DeleteConsumerGroupRequestShape' => [
            'type' => 'structure',
            'members' => [
                'topicId' => [ 'type' => 'int64', 'locationName' => 'topicId', ],
                'consumerGroupId' => [ 'type' => 'int64', 'locationName' => 'consumerGroupId', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'GetConsumerGroupListResultShape' => [
            'type' => 'structure',
            'members' => [
                'consumerGroup' => [ 'type' => 'list', 'member' => [ 'shape' => 'ConsumerGroup', ], ],
            ],
        ],
    ],
];
