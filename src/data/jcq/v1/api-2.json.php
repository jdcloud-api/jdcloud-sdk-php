<?php
// This file was auto-generated
return [
//    'version' => '',
    'metadata' =>
    [
//        'apiVersion' => '',
//        'endpointPrefix' => 'jcq',
        'protocol' => 'json',
//        'serviceFullName' => 'jcq',
//        'serviceId' => 'jcq',
    ],
    'operations' => [
        'DescribeAccessPoint' => [
            'name' => 'DescribeAccessPoint',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/topics/{topicName}/accessPoints',
            ],
            'input' => [ 'shape' => 'DescribeAccessPointRequestShape', ],
            'output' => [ 'shape' => 'DescribeAccessPointResponseShape', ],
        ],
        'DescribeConsumerGroupIds' => [
            'name' => 'DescribeConsumerGroupIds',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/consumerGroupIds',
            ],
            'input' => [ 'shape' => 'DescribeConsumerGroupIdsRequestShape', ],
            'output' => [ 'shape' => 'DescribeConsumerGroupIdsResponseShape', ],
        ],
        'DescribeDeadLetterNumbers' => [
            'name' => 'DescribeDeadLetterNumbers',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/deadLetterNumbers',
            ],
            'input' => [ 'shape' => 'DescribeDeadLetterNumbersRequestShape', ],
            'output' => [ 'shape' => 'DescribeDeadLetterNumbersResponseShape', ],
        ],
        'DescribeDeadLetterNumbersWithTopic' => [
            'name' => 'DescribeDeadLetterNumbersWithTopic',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/topics/{topicName}/deadLetterNumbers',
            ],
            'input' => [ 'shape' => 'DescribeDeadLetterNumbersWithTopicRequestShape', ],
            'output' => [ 'shape' => 'DescribeDeadLetterNumbersWithTopicResponseShape', ],
        ],
        'ListDeadLetters' => [
            'name' => 'ListDeadLetters',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/topics/{topicName}/subscriptions/{consumerGroupId}:listDeadLetters',
            ],
            'input' => [ 'shape' => 'ListDeadLettersRequestShape', ],
            'output' => [ 'shape' => 'ListDeadLettersResponseShape', ],
        ],
        'DeleteDeadLetters' => [
            'name' => 'DeleteDeadLetters',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/regions/{regionId}/topics/{topicName}/subscriptions/{consumerGroupId}:deleteDeadLetters',
            ],
            'input' => [ 'shape' => 'DeleteDeadLettersRequestShape', ],
            'output' => [ 'shape' => 'DeleteDeadLettersResponseShape', ],
        ],
        'ResendDeadLetters' => [
            'name' => 'ResendDeadLetters',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/topics/{topicName}/subscriptions/{consumerGroupId}:resendDeadLetters',
            ],
            'input' => [ 'shape' => 'ResendDeadLettersRequestShape', ],
            'output' => [ 'shape' => 'ResendDeadLettersResponseShape', ],
        ],
        'DescribeMessages' => [
            'name' => 'DescribeMessages',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/topics/{topicName}/messages',
            ],
            'input' => [ 'shape' => 'DescribeMessagesRequestShape', ],
            'output' => [ 'shape' => 'DescribeMessagesResponseShape', ],
        ],
        'DescribeMessage' => [
            'name' => 'DescribeMessage',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/topics/{topicName}/messages/{messageId}',
            ],
            'input' => [ 'shape' => 'DescribeMessageRequestShape', ],
            'output' => [ 'shape' => 'DescribeMessageResponseShape', ],
        ],
        'DescribeMessageTrace' => [
            'name' => 'DescribeMessageTrace',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/topics/{topicName}/messageTrace/{messageId}',
            ],
            'input' => [ 'shape' => 'DescribeMessageTraceRequestShape', ],
            'output' => [ 'shape' => 'DescribeMessageTraceResponseShape', ],
        ],
        'DescribeMessagesByBusinessId' => [
            'name' => 'DescribeMessagesByBusinessId',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/topics/{topicName}/messagesWithBusinessId',
            ],
            'input' => [ 'shape' => 'DescribeMessagesByBusinessIdRequestShape', ],
            'output' => [ 'shape' => 'DescribeMessagesByBusinessIdResponseShape', ],
        ],
        'DescribePermission' => [
            'name' => 'DescribePermission',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/topics/{topicName}/iam',
            ],
            'input' => [ 'shape' => 'DescribePermissionRequestShape', ],
            'output' => [ 'shape' => 'DescribePermissionResponseShape', ],
        ],
        'AddPermission' => [
            'name' => 'AddPermission',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/topics/{topicName}/iam',
            ],
            'input' => [ 'shape' => 'AddPermissionRequestShape', ],
            'output' => [ 'shape' => 'AddPermissionResponseShape', ],
        ],
        'RemovePermission' => [
            'name' => 'RemovePermission',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/regions/{regionId}/topics/{topicName}/iam',
            ],
            'input' => [ 'shape' => 'RemovePermissionRequestShape', ],
            'output' => [ 'shape' => 'RemovePermissionResponseShape', ],
        ],
        'DescribeSubscriptions' => [
            'name' => 'DescribeSubscriptions',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/topics/{topicName}/subscriptions',
            ],
            'input' => [ 'shape' => 'DescribeSubscriptionsRequestShape', ],
            'output' => [ 'shape' => 'DescribeSubscriptionsResponseShape', ],
        ],
        'CreateSubscription' => [
            'name' => 'CreateSubscription',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/topics/{topicName}/subscriptions',
            ],
            'input' => [ 'shape' => 'CreateSubscriptionRequestShape', ],
            'output' => [ 'shape' => 'CreateSubscriptionResponseShape', ],
        ],
        'DescribeSubscription' => [
            'name' => 'DescribeSubscription',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/topics/{topicName}/subscriptions/{consumerGroupId}',
            ],
            'input' => [ 'shape' => 'DescribeSubscriptionRequestShape', ],
            'output' => [ 'shape' => 'DescribeSubscriptionResponseShape', ],
        ],
        'ModifySubscriptionAttribute' => [
            'name' => 'ModifySubscriptionAttribute',
            'http' => [
                'method' => 'PATCH',
                'requestUri' => '/v1/regions/{regionId}/topics/{topicName}/subscriptions/{consumerGroupId}',
            ],
            'input' => [ 'shape' => 'ModifySubscriptionAttributeRequestShape', ],
            'output' => [ 'shape' => 'ModifySubscriptionAttributeResponseShape', ],
        ],
        'DeleteSubscription' => [
            'name' => 'DeleteSubscription',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/regions/{regionId}/topics/{topicName}/subscriptions/{consumerGroupId}',
            ],
            'input' => [ 'shape' => 'DeleteSubscriptionRequestShape', ],
            'output' => [ 'shape' => 'DeleteSubscriptionResponseShape', ],
        ],
        'CleanMessages' => [
            'name' => 'CleanMessages',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/topics/{topicName}/subscriptions/{consumerGroupId}:cleanMessages',
            ],
            'input' => [ 'shape' => 'CleanMessagesRequestShape', ],
            'output' => [ 'shape' => 'CleanMessagesResponseShape', ],
        ],
        'ResetConsumeOffset' => [
            'name' => 'ResetConsumeOffset',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/topics/{topicName}/subscriptions/{consumerGroupId}:resetConsumeOffset',
            ],
            'input' => [ 'shape' => 'ResetConsumeOffsetRequestShape', ],
            'output' => [ 'shape' => 'ResetConsumeOffsetResponseShape', ],
        ],
        'DescribeTopics' => [
            'name' => 'DescribeTopics',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/topics',
            ],
            'input' => [ 'shape' => 'DescribeTopicsRequestShape', ],
            'output' => [ 'shape' => 'DescribeTopicsResponseShape', ],
        ],
        'CreateTopic' => [
            'name' => 'CreateTopic',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/topics',
            ],
            'input' => [ 'shape' => 'CreateTopicRequestShape', ],
            'output' => [ 'shape' => 'CreateTopicResponseShape', ],
        ],
        'DescribeTopic' => [
            'name' => 'DescribeTopic',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/topics/{topicName}',
            ],
            'input' => [ 'shape' => 'DescribeTopicRequestShape', ],
            'output' => [ 'shape' => 'DescribeTopicResponseShape', ],
        ],
        'DeleteTopic' => [
            'name' => 'DeleteTopic',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/regions/{regionId}/topics/{topicName}',
            ],
            'input' => [ 'shape' => 'DeleteTopicRequestShape', ],
            'output' => [ 'shape' => 'DeleteTopicResponseShape', ],
        ],
    ],
    'shapes' => [
    ],
];
