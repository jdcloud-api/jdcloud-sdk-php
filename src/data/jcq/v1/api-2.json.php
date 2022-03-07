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
        'AccessPoint' => [
            'type' => 'structure',
            'members' => [
                'sdkAddress' => [ 'type' => 'string', 'locationName' => 'sdkAddress', ],
                'httpAddress' => [ 'type' => 'string', 'locationName' => 'httpAddress', ],
            ],
        ],
        'ConsumeInfo' => [
            'type' => 'structure',
            'members' => [
                'consumerGroupId' => [ 'type' => 'string', 'locationName' => 'consumerGroupId', ],
                'messageConsumeStatus' => [ 'type' => 'string', 'locationName' => 'messageConsumeStatus', ],
                'successTimes' => [ 'type' => 'integer', 'locationName' => 'successTimes', ],
                'failedTimes' => [ 'type' => 'integer', 'locationName' => 'failedTimes', ],
                'consumerInfoDetailList' => [ 'type' => 'list', 'member' => [ 'shape' => 'ConsumerInfoDetail', ], ],
            ],
        ],
        'ConsumerInfoDetail' => [
            'type' => 'structure',
            'members' => [
                'consumerIp' => [ 'type' => 'string', 'locationName' => 'consumerIp', ],
                'timeStamp' => [ 'type' => 'double', 'locationName' => 'timeStamp', ],
                'costTime' => [ 'type' => 'integer', 'locationName' => 'costTime', ],
                'consumeTimes' => [ 'type' => 'integer', 'locationName' => 'consumeTimes', ],
                'consumerStatus' => [ 'type' => 'string', 'locationName' => 'consumerStatus', ],
            ],
        ],
        'DeadLetter' => [
            'type' => 'structure',
            'members' => [
                'messageId' => [ 'type' => 'string', 'locationName' => 'messageId', ],
                'expireTime' => [ 'type' => 'string', 'locationName' => 'expireTime', ],
            ],
        ],
        'DeadLetterNumber' => [
            'type' => 'structure',
            'members' => [
                'topicId' => [ 'type' => 'string', 'locationName' => 'topicId', ],
                'topicName' => [ 'type' => 'string', 'locationName' => 'topicName', ],
                'consumerGroupId' => [ 'type' => 'string', 'locationName' => 'consumerGroupId', ],
                'deadLetterNumber' => [ 'type' => 'integer', 'locationName' => 'deadLetterNumber', ],
            ],
        ],
        'Message' => [
            'type' => 'structure',
            'members' => [
                'messageId' => [ 'type' => 'string', 'locationName' => 'messageId', ],
                'body' => [ 'type' => 'string', 'locationName' => 'body', ],
                'tags' => [ 'type' => 'string', 'locationName' => 'tags', ],
                'properties' => [ 'type' => 'string', 'locationName' => 'properties', ],
                'storeTime' => [ 'type' => 'double', 'locationName' => 'storeTime', ],
            ],
        ],
        'MessageTraceInfo' => [
            'type' => 'structure',
            'members' => [
                'produceInfo' =>  [ 'shape' => 'ProduceInfo', ],
                'consumeInfoList' => [ 'type' => 'list', 'member' => [ 'shape' => 'ConsumeInfo', ], ],
            ],
        ],
        'ProduceInfo' => [
            'type' => 'structure',
            'members' => [
                'address' => [ 'type' => 'string', 'locationName' => 'address', ],
                'timeStamp' => [ 'type' => 'double', 'locationName' => 'timeStamp', ],
                'costTime' => [ 'type' => 'integer', 'locationName' => 'costTime', ],
                'messageSendStatus' => [ 'type' => 'string', 'locationName' => 'messageSendStatus', ],
                'delayTime' => [ 'type' => 'double', 'locationName' => 'delayTime', ],
            ],
        ],
        'Permission' => [
            'type' => 'structure',
            'members' => [
                'userId' => [ 'type' => 'string', 'locationName' => 'userId', ],
                'permission' => [ 'type' => 'string', 'locationName' => 'permission', ],
            ],
        ],
        'Queue' => [
            'type' => 'structure',
            'members' => [
                'queueId' => [ 'type' => 'integer', 'locationName' => 'queueId', ],
                'queuePermission' => [ 'type' => 'string', 'locationName' => 'queuePermission', ],
            ],
        ],
        'Subscription' => [
            'type' => 'structure',
            'members' => [
                'consumerGroupId' => [ 'type' => 'string', 'locationName' => 'consumerGroupId', ],
                'endPoint' => [ 'type' => 'string', 'locationName' => 'endPoint', ],
                'messageInvisibleTimeInSeconds' => [ 'type' => 'integer', 'locationName' => 'messageInvisibleTimeInSeconds', ],
                'subscriptionType' => [ 'type' => 'string', 'locationName' => 'subscriptionType', ],
                'tags' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'dlqEnable' => [ 'type' => 'boolean', 'locationName' => 'dlqEnable', ],
                'maxRetryTimes' => [ 'type' => 'integer', 'locationName' => 'maxRetryTimes', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'lastUpdateTime' => [ 'type' => 'string', 'locationName' => 'lastUpdateTime', ],
                'consumerNumbers' => [ 'type' => 'integer', 'locationName' => 'consumerNumbers', ],
            ],
        ],
        'Tag' => [
            'type' => 'structure',
            'members' => [
                'key' => [ 'type' => 'string', 'locationName' => 'key', ],
                'value' => [ 'type' => 'string', 'locationName' => 'value', ],
            ],
        ],
        'Topic' => [
            'type' => 'structure',
            'members' => [
                'topicId' => [ 'type' => 'string', 'locationName' => 'topicId', ],
                'topicName' => [ 'type' => 'string', 'locationName' => 'topicName', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'lastUpdateTime' => [ 'type' => 'string', 'locationName' => 'lastUpdateTime', ],
                'topicStatus' => [ 'type' => 'string', 'locationName' => 'topicStatus', ],
                'subscriptionCount' => [ 'type' => 'integer', 'locationName' => 'subscriptionCount', ],
                'messageLifeTimeInHours' => [ 'type' => 'integer', 'locationName' => 'messageLifeTimeInHours', ],
                'topicConfig' =>  [ 'shape' => 'TopicConfig', ],
                'own' => [ 'type' => 'boolean', 'locationName' => 'own', ],
                'authorizedPermission' => [ 'type' => 'string', 'locationName' => 'authorizedPermission', ],
                'tags' => [ 'type' => 'list', 'member' => [ 'shape' => 'Tag', ], ],
            ],
        ],
        'TopicConfig' => [
            'type' => 'structure',
            'members' => [
                'maxMessageSizeKB' => [ 'type' => 'integer', 'locationName' => 'maxMessageSizeKB', ],
                'threshold' => [ 'type' => 'integer', 'locationName' => 'threshold', ],
                'topicPermission' => [ 'type' => 'string', 'locationName' => 'topicPermission', ],
                'topicType' => [ 'type' => 'string', 'locationName' => 'topicType', ],
            ],
        ],
        'TopicRouteInfo' => [
            'type' => 'structure',
            'members' => [
                'brokerAddress' => [ 'type' => 'string', 'locationName' => 'brokerAddress', ],
                'queues' => [ 'type' => 'list', 'member' => [ 'shape' => 'Queue', ], ],
            ],
        ],
        'TopicWrapper' => [
            'type' => 'structure',
            'members' => [
                'topic' =>  [ 'shape' => 'Topic', ],
                'routeInfos' => [ 'type' => 'list', 'member' => [ 'shape' => 'TopicRouteInfo', ], ],
            ],
        ],
        'DescribeAccessPointRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'topicName' => [ 'type' => 'string', 'locationName' => 'topicName', ],
            ],
        ],
        'DescribeAccessPointResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeAccessPointResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeAccessPointResultShape' => [
            'type' => 'structure',
            'members' => [
                'accessPoint' =>  [ 'shape' => 'AccessPoint', ],
            ],
        ],
        'DescribeConsumerGroupIdsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeConsumerGroupIdsResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeConsumerGroupIdsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DescribeConsumerGroupIdsResultShape' => [
            'type' => 'structure',
            'members' => [
                'consumerGroupIds' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'ListDeadLettersRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'startTime' => [ 'type' => 'string', 'locationName' => 'startTime', ],
                'endTime' => [ 'type' => 'string', 'locationName' => 'endTime', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'topicName' => [ 'type' => 'string', 'locationName' => 'topicName', ],
                'consumerGroupId' => [ 'type' => 'string', 'locationName' => 'consumerGroupId', ],
            ],
        ],
        'ListDeadLettersResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'ListDeadLettersResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeDeadLetterNumbersWithTopicRequestShape' => [
            'type' => 'structure',
            'members' => [
                'consumerGroupId' => [ 'type' => 'string', 'locationName' => 'consumerGroupId', ],
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'topicName' => [ 'type' => 'string', 'locationName' => 'topicName', ],
            ],
        ],
        'DescribeDeadLetterNumbersWithTopicResultShape' => [
            'type' => 'structure',
            'members' => [
                'deadLetterNumbers' => [ 'type' => 'list', 'member' => [ 'shape' => 'DeadLetterNumber', ], ],
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
            ],
        ],
        'ResendDeadLettersRequestShape' => [
            'type' => 'structure',
            'members' => [
                'messageIds' => [ 'type' => 'string', 'locationName' => 'messageIds', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'topicName' => [ 'type' => 'string', 'locationName' => 'topicName', ],
                'consumerGroupId' => [ 'type' => 'string', 'locationName' => 'consumerGroupId', ],
            ],
        ],
        'ResendDeadLettersResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'ResendDeadLettersResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeDeadLetterNumbersWithTopicResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeDeadLetterNumbersWithTopicResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeDeadLetterNumbersRequestShape' => [
            'type' => 'structure',
            'members' => [
                'consumerGroupId' => [ 'type' => 'string', 'locationName' => 'consumerGroupId', ],
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DeleteDeadLettersResultShape' => [
            'type' => 'structure',
            'members' => [
                'messageIds' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'DescribeDeadLetterNumbersResultShape' => [
            'type' => 'structure',
            'members' => [
                'deadLetterNumbers' => [ 'type' => 'list', 'member' => [ 'shape' => 'DeadLetterNumber', ], ],
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
            ],
        ],
        'DeleteDeadLettersRequestShape' => [
            'type' => 'structure',
            'members' => [
                'messageIds' => [ 'type' => 'string', 'locationName' => 'messageIds', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'topicName' => [ 'type' => 'string', 'locationName' => 'topicName', ],
                'consumerGroupId' => [ 'type' => 'string', 'locationName' => 'consumerGroupId', ],
            ],
        ],
        'ListDeadLettersResultShape' => [
            'type' => 'structure',
            'members' => [
                'deadLetters' => [ 'type' => 'list', 'member' => [ 'shape' => 'DeadLetter', ], ],
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
            ],
        ],
        'DescribeDeadLetterNumbersResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeDeadLetterNumbersResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DeleteDeadLettersResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DeleteDeadLettersResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ResendDeadLettersResultShape' => [
            'type' => 'structure',
            'members' => [
                'messageIds' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'DescribeMessagesByBusinessIdRequestShape' => [
            'type' => 'structure',
            'members' => [
                'businessId' => [ 'type' => 'string', 'locationName' => 'businessId', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'topicName' => [ 'type' => 'string', 'locationName' => 'topicName', ],
            ],
        ],
        'DescribeMessagesByBusinessIdResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeMessagesByBusinessIdResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeMessagesResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeMessagesResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeMessageTraceRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'topicName' => [ 'type' => 'string', 'locationName' => 'topicName', ],
                'messageId' => [ 'type' => 'string', 'locationName' => 'messageId', ],
            ],
        ],
        'DescribeMessageResultShape' => [
            'type' => 'structure',
            'members' => [
                'message' =>  [ 'shape' => 'Message', ],
            ],
        ],
        'DescribeMessagesResultShape' => [
            'type' => 'structure',
            'members' => [
                'messages' => [ 'type' => 'list', 'member' => [ 'shape' => 'Message', ], ],
            ],
        ],
        'DescribeMessagesRequestShape' => [
            'type' => 'structure',
            'members' => [
                'startTime' => [ 'type' => 'string', 'locationName' => 'startTime', ],
                'endTime' => [ 'type' => 'string', 'locationName' => 'endTime', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'topicName' => [ 'type' => 'string', 'locationName' => 'topicName', ],
            ],
        ],
        'DescribeMessageResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeMessageResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeMessagesByBusinessIdResultShape' => [
            'type' => 'structure',
            'members' => [
                'messages' => [ 'type' => 'list', 'member' => [ 'shape' => 'Message', ], ],
            ],
        ],
        'DescribeMessageTraceResultShape' => [
            'type' => 'structure',
            'members' => [
                'messageTraceInfo' =>  [ 'shape' => 'MessageTraceInfo', ],
            ],
        ],
        'DescribeMessageRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'topicName' => [ 'type' => 'string', 'locationName' => 'topicName', ],
                'messageId' => [ 'type' => 'string', 'locationName' => 'messageId', ],
            ],
        ],
        'DescribeMessageTraceResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeMessageTraceResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'RemovePermissionResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'RemovePermissionResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribePermissionResultShape' => [
            'type' => 'structure',
            'members' => [
                'permissions' => [ 'type' => 'list', 'member' => [ 'shape' => 'Permission', ], ],
            ],
        ],
        'DescribePermissionResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribePermissionResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'AddPermissionResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribePermissionRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'topicName' => [ 'type' => 'string', 'locationName' => 'topicName', ],
            ],
        ],
        'AddPermissionRequestShape' => [
            'type' => 'structure',
            'members' => [
                'permission' => [ 'type' => 'string', 'locationName' => 'permission', ],
                'targetUserId' => [ 'type' => 'string', 'locationName' => 'targetUserId', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'topicName' => [ 'type' => 'string', 'locationName' => 'topicName', ],
            ],
        ],
        'RemovePermissionRequestShape' => [
            'type' => 'structure',
            'members' => [
                'permission' => [ 'type' => 'string', 'locationName' => 'permission', ],
                'targetUserId' => [ 'type' => 'string', 'locationName' => 'targetUserId', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'topicName' => [ 'type' => 'string', 'locationName' => 'topicName', ],
            ],
        ],
        'AddPermissionResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'CleanMessagesResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DescribeSubscriptionsResultShape' => [
            'type' => 'structure',
            'members' => [
                'subscriptions' => [ 'type' => 'list', 'member' => [ 'shape' => 'Subscription', ], ],
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
            ],
        ],
        'DeleteSubscriptionResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DescribeSubscriptionsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'consumerGroupFilter' => [ 'type' => 'string', 'locationName' => 'consumerGroupFilter', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'topicName' => [ 'type' => 'string', 'locationName' => 'topicName', ],
            ],
        ],
        'CreateSubscriptionResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DescribeSubscriptionResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeSubscriptionResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ResetConsumeOffsetRequestShape' => [
            'type' => 'structure',
            'members' => [
                'time' => [ 'type' => 'string', 'locationName' => 'time', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'topicName' => [ 'type' => 'string', 'locationName' => 'topicName', ],
                'consumerGroupId' => [ 'type' => 'string', 'locationName' => 'consumerGroupId', ],
            ],
        ],
        'ResetConsumeOffsetResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ModifySubscriptionAttributeResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'CleanMessagesRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'topicName' => [ 'type' => 'string', 'locationName' => 'topicName', ],
                'consumerGroupId' => [ 'type' => 'string', 'locationName' => 'consumerGroupId', ],
            ],
        ],
        'ResetConsumeOffsetResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'CreateSubscriptionRequestShape' => [
            'type' => 'structure',
            'members' => [
                'consumerGroupId' => [ 'type' => 'string', 'locationName' => 'consumerGroupId', ],
                'messageInvisibleTimeInSeconds' => [ 'type' => 'integer', 'locationName' => 'messageInvisibleTimeInSeconds', ],
                'dlqEnable' => [ 'type' => 'boolean', 'locationName' => 'dlqEnable', ],
                'maxRetryTimes' => [ 'type' => 'integer', 'locationName' => 'maxRetryTimes', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'topicName' => [ 'type' => 'string', 'locationName' => 'topicName', ],
            ],
        ],
        'CleanMessagesResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'CreateSubscriptionResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeSubscriptionsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeSubscriptionsResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DeleteSubscriptionRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'topicName' => [ 'type' => 'string', 'locationName' => 'topicName', ],
                'consumerGroupId' => [ 'type' => 'string', 'locationName' => 'consumerGroupId', ],
            ],
        ],
        'DeleteSubscriptionResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ModifySubscriptionAttributeResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DescribeSubscriptionRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'topicName' => [ 'type' => 'string', 'locationName' => 'topicName', ],
                'consumerGroupId' => [ 'type' => 'string', 'locationName' => 'consumerGroupId', ],
            ],
        ],
        'DescribeSubscriptionResultShape' => [
            'type' => 'structure',
            'members' => [
                'subscription' =>  [ 'shape' => 'Subscription', ],
            ],
        ],
        'ModifySubscriptionAttributeRequestShape' => [
            'type' => 'structure',
            'members' => [
                'maxRetryTimes' => [ 'type' => 'integer', 'locationName' => 'maxRetryTimes', ],
                'messageInvisibleTimeInSeconds' => [ 'type' => 'integer', 'locationName' => 'messageInvisibleTimeInSeconds', ],
                'dlqEnable' => [ 'type' => 'boolean', 'locationName' => 'dlqEnable', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'topicName' => [ 'type' => 'string', 'locationName' => 'topicName', ],
                'consumerGroupId' => [ 'type' => 'string', 'locationName' => 'consumerGroupId', ],
            ],
        ],
        'TagFilter' => [
            'type' => 'structure',
            'members' => [
                'key' => [ 'type' => 'string', 'locationName' => 'key', ],
                'values' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'DeleteTopicRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'topicName' => [ 'type' => 'string', 'locationName' => 'topicName', ],
            ],
        ],
        'CreateTopicRequestShape' => [
            'type' => 'structure',
            'members' => [
                'topicName' => [ 'type' => 'string', 'locationName' => 'topicName', ],
                'type' => [ 'type' => 'string', 'locationName' => 'type', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DescribeTopicRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'topicName' => [ 'type' => 'string', 'locationName' => 'topicName', ],
            ],
        ],
        'DeleteTopicResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeTopicsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeTopicsResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'CreateTopicResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeTopicsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'topicFilter' => [ 'type' => 'string', 'locationName' => 'topicFilter', ],
                'tagFilters' => [ 'type' => 'list', 'member' => [ 'shape' => 'TagFilter', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DescribeTopicResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeTopicResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'CreateTopicResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DescribeTopicResultShape' => [
            'type' => 'structure',
            'members' => [
                'topic' =>  [ 'shape' => 'Topic', ],
            ],
        ],
        'DescribeTopicsResultShape' => [
            'type' => 'structure',
            'members' => [
                'topics' => [ 'type' => 'list', 'member' => [ 'shape' => 'Topic', ], ],
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
            ],
        ],
        'DeleteTopicResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
    ],
];
