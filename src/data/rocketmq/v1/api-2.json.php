<?php
// This file was auto-generated
return [
//    'version' => '',
    'metadata' =>
    [
//        'apiVersion' => '',
//        'endpointPrefix' => 'rocketmq',
        'protocol' => 'json',
//        'serviceFullName' => 'rocketmq',
//        'serviceId' => 'rocketmq',
    ],
    'operations' => [
        'DescribeConsumerGroups' => [
            'name' => 'DescribeConsumerGroups',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}/consumerGroups',
            ],
            'input' => [ 'shape' => 'DescribeConsumerGroupsRequestShape', ],
            'output' => [ 'shape' => 'DescribeConsumerGroupsResponseShape', ],
        ],
        'CreateConsumerGroup' => [
            'name' => 'CreateConsumerGroup',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}/consumerGroups',
            ],
            'input' => [ 'shape' => 'CreateConsumerGroupRequestShape', ],
            'output' => [ 'shape' => 'CreateConsumerGroupResponseShape', ],
        ],
        'UpdateConsumerGroup' => [
            'name' => 'UpdateConsumerGroup',
            'http' => [
                'method' => 'PATCH',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}/consumerGroups',
            ],
            'input' => [ 'shape' => 'UpdateConsumerGroupRequestShape', ],
            'output' => [ 'shape' => 'UpdateConsumerGroupResponseShape', ],
        ],
        'DescribeConsumerGroupNames' => [
            'name' => 'DescribeConsumerGroupNames',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}/consumerGroupNames',
            ],
            'input' => [ 'shape' => 'DescribeConsumerGroupNamesRequestShape', ],
            'output' => [ 'shape' => 'DescribeConsumerGroupNamesResponseShape', ],
        ],
        'DeleteConsumerGroup' => [
            'name' => 'DeleteConsumerGroup',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}/consumerGroups/{consumerGroup}',
            ],
            'input' => [ 'shape' => 'DeleteConsumerGroupRequestShape', ],
            'output' => [ 'shape' => 'DeleteConsumerGroupResponseShape', ],
        ],
        'DescribeConsumerAllTopics' => [
            'name' => 'DescribeConsumerAllTopics',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}/consumerGroups/{consumerGroup}/allTopics',
            ],
            'input' => [ 'shape' => 'DescribeConsumerAllTopicsRequestShape', ],
            'output' => [ 'shape' => 'DescribeConsumerAllTopicsResponseShape', ],
        ],
        'DescribeConsumerGroupStatus' => [
            'name' => 'DescribeConsumerGroupStatus',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}/consumerGroups/{consumerGroup}/status',
            ],
            'input' => [ 'shape' => 'DescribeConsumerGroupStatusRequestShape', ],
            'output' => [ 'shape' => 'DescribeConsumerGroupStatusResponseShape', ],
        ],
        'DescribeConsumerSubTopics' => [
            'name' => 'DescribeConsumerSubTopics',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}/consumerGroups/{consumerGroup}/subTopics',
            ],
            'input' => [ 'shape' => 'DescribeConsumerSubTopicsRequestShape', ],
            'output' => [ 'shape' => 'DescribeConsumerSubTopicsResponseShape', ],
        ],
        'ResetOffset' => [
            'name' => 'ResetOffset',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}/consumerGroups/{consumerGroup}/resetOffset',
            ],
            'input' => [ 'shape' => 'ResetOffsetRequestShape', ],
            'output' => [ 'shape' => 'ResetOffsetResponseShape', ],
        ],
        'DescribeMessages' => [
            'name' => 'DescribeMessages',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}/topics/{topic}/messages',
            ],
            'input' => [ 'shape' => 'DescribeMessagesRequestShape', ],
            'output' => [ 'shape' => 'DescribeMessagesResponseShape', ],
        ],
        'SendMessage' => [
            'name' => 'SendMessage',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}/topics/{topic}/messages',
            ],
            'input' => [ 'shape' => 'SendMessageRequestShape', ],
            'output' => [ 'shape' => 'SendMessageResponseShape', ],
        ],
        'DescribeMessageByMsgId' => [
            'name' => 'DescribeMessageByMsgId',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}/topics/{topic}/messages/{messageId}',
            ],
            'input' => [ 'shape' => 'DescribeMessageByMsgIdRequestShape', ],
            'output' => [ 'shape' => 'DescribeMessageByMsgIdResponseShape', ],
        ],
        'DescribeProduceTrace' => [
            'name' => 'DescribeProduceTrace',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}/topics/{topic}/produceTrace/{messageId}',
            ],
            'input' => [ 'shape' => 'DescribeProduceTraceRequestShape', ],
            'output' => [ 'shape' => 'DescribeProduceTraceResponseShape', ],
        ],
        'DescribeConsumeTrace' => [
            'name' => 'DescribeConsumeTrace',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}/topics/{topic}/consumeTrace/{messageId}',
            ],
            'input' => [ 'shape' => 'DescribeConsumeTraceRequestShape', ],
            'output' => [ 'shape' => 'DescribeConsumeTraceResponseShape', ],
        ],
        'DescribeConsumeTraceDetail' => [
            'name' => 'DescribeConsumeTraceDetail',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}/topics/{topic}/consumeTraceDetail/{messageId}',
            ],
            'input' => [ 'shape' => 'DescribeConsumeTraceDetailRequestShape', ],
            'output' => [ 'shape' => 'DescribeConsumeTraceDetailResponseShape', ],
        ],
        'DescribeTopics' => [
            'name' => 'DescribeTopics',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}/topics',
            ],
            'input' => [ 'shape' => 'DescribeTopicsRequestShape', ],
            'output' => [ 'shape' => 'DescribeTopicsResponseShape', ],
        ],
        'CreateTopic' => [
            'name' => 'CreateTopic',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}/topics',
            ],
            'input' => [ 'shape' => 'CreateTopicRequestShape', ],
            'output' => [ 'shape' => 'CreateTopicResponseShape', ],
        ],
        'DescribeTopicNames' => [
            'name' => 'DescribeTopicNames',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}/topicNames',
            ],
            'input' => [ 'shape' => 'DescribeTopicNamesRequestShape', ],
            'output' => [ 'shape' => 'DescribeTopicNamesResponseShape', ],
        ],
        'DescribeTopic' => [
            'name' => 'DescribeTopic',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}/topics/{topic}',
            ],
            'input' => [ 'shape' => 'DescribeTopicRequestShape', ],
            'output' => [ 'shape' => 'DescribeTopicResponseShape', ],
        ],
        'UpdateTopicDescription' => [
            'name' => 'UpdateTopicDescription',
            'http' => [
                'method' => 'PATCH',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}/topics/{topic}',
            ],
            'input' => [ 'shape' => 'UpdateTopicDescriptionRequestShape', ],
            'output' => [ 'shape' => 'UpdateTopicDescriptionResponseShape', ],
        ],
        'DeleteTopic' => [
            'name' => 'DeleteTopic',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}/topics/{topic}',
            ],
            'input' => [ 'shape' => 'DeleteTopicRequestShape', ],
            'output' => [ 'shape' => 'DeleteTopicResponseShape', ],
        ],
        'DescribeConsumersByTopic' => [
            'name' => 'DescribeConsumersByTopic',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}/topics/{topic}/subscriptions',
            ],
            'input' => [ 'shape' => 'DescribeConsumersByTopicRequestShape', ],
            'output' => [ 'shape' => 'DescribeConsumersByTopicResponseShape', ],
        ],
    ],
    'shapes' => [
        'AclUser' => [
            'type' => 'structure',
            'members' => [
                'userName' => [ 'type' => 'string', 'locationName' => 'userName', ],
                'password' => [ 'type' => 'string', 'locationName' => 'password', ],
                'whiteRemoteAddress' => [ 'type' => 'string', 'locationName' => 'whiteRemoteAddress', ],
            ],
        ],
        'AclPermission' => [
            'type' => 'structure',
            'members' => [
                'userName' => [ 'type' => 'string', 'locationName' => 'userName', ],
                'resourceType' => [ 'type' => 'string', 'locationName' => 'resourceType', ],
                'resourceName' => [ 'type' => 'string', 'locationName' => 'resourceName', ],
                'permission' => [ 'type' => 'string', 'locationName' => 'permission', ],
            ],
        ],
        'ConfigItem' => [
            'type' => 'structure',
            'members' => [
                'attributeName' => [ 'type' => 'string', 'locationName' => 'attributeName', ],
                'attributeDesc' => [ 'type' => 'string', 'locationName' => 'attributeDesc', ],
            ],
        ],
        'AdvancedConfig' => [
            'type' => 'structure',
            'members' => [
                'configName' => [ 'type' => 'string', 'locationName' => 'configName', ],
                'configDesc' => [ 'type' => 'string', 'locationName' => 'configDesc', ],
                'configItems' => [ 'type' => 'list', 'member' => [ 'shape' => 'ConfigItem', ], ],
            ],
        ],
        'AzSpecConfig2' => [
            'type' => 'structure',
            'members' => [
                'onSale' => [ 'type' => 'boolean', 'locationName' => 'onSale', ],
                'azId' => [ 'type' => 'string', 'locationName' => 'azId', ],
                'archSpecConfig' => [ 'type' => 'list', 'member' => [ 'shape' => 'ArchSpecConfig', ], ],
            ],
        ],
        'NodeSpecConfig' => [
            'type' => 'structure',
            'members' => [
                'nodeType' => [ 'type' => 'string', 'locationName' => 'nodeType', ],
                'storageType' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'storageConfig' => [ 'type' => 'list', 'member' => [ 'shape' => 'StorageConfig', ], ],
            ],
        ],
        'FlexibleStorageLimit' => [
            'type' => 'structure',
            'members' => [
                'minStorage' => [ 'type' => 'integer', 'locationName' => 'minStorage', ],
                'maxStorage' => [ 'type' => 'integer', 'locationName' => 'maxStorage', ],
                'defaultStorage' => [ 'type' => 'integer', 'locationName' => 'defaultStorage', ],
                'stepStorage' => [ 'type' => 'integer', 'locationName' => 'stepStorage', ],
            ],
        ],
        'ConstantStorageLimit' => [
            'type' => 'structure',
            'members' => [
                'diskGB' => [ 'type' => 'integer', 'locationName' => 'diskGB', ],
            ],
        ],
        'FlavorConfig' => [
            'type' => 'structure',
            'members' => [
                'onSale' => [ 'type' => 'boolean', 'locationName' => 'onSale', ],
                'instanceClassCode' => [ 'type' => 'string', 'locationName' => 'instanceClassCode', ],
                'cpu' => [ 'type' => 'integer', 'locationName' => 'cpu', ],
                'memoryGB' => [ 'type' => 'integer', 'locationName' => 'memoryGB', ],
                'storageLimit' =>  [ 'shape' => 'StorageLimit', ],
                'nodeCountLimit' =>  [ 'shape' => 'NodeCountLimit', ],
                'replicaPeGroupLimit' =>  [ 'shape' => 'ReplicaPeGroupLimit', ],
            ],
        ],
        'SupportCrossAzNumber' => [
            'type' => 'structure',
            'members' => [
                'isSupportCross2Azs' => [ 'type' => 'boolean', 'locationName' => 'isSupportCross2Azs', ],
                'isSupportCross3Azs' => [ 'type' => 'boolean', 'locationName' => 'isSupportCross3Azs', ],
            ],
        ],
        'StorageLimit' => [
            'type' => 'structure',
            'members' => [
                'storageScale' => [ 'type' => 'boolean', 'locationName' => 'storageScale', ],
                'constantStorageLimit' =>  [ 'shape' => 'ConstantStorageLimit', ],
                'flexibleStorageLimit' =>  [ 'shape' => 'FlexibleStorageLimit', ],
            ],
        ],
        'NodeCountLimit' => [
            'type' => 'structure',
            'members' => [
                'availableCount' => [ 'type' => 'integer', 'locationName' => 'availableCount', ],
                'minCount' => [ 'type' => 'integer', 'locationName' => 'minCount', ],
                'defaultCount' => [ 'type' => 'integer', 'locationName' => 'defaultCount', ],
                'stepCount' => [ 'type' => 'integer', 'locationName' => 'stepCount', ],
            ],
        ],
        'ReplicaPeGroupLimit' => [
            'type' => 'structure',
            'members' => [
                'availableCount' => [ 'type' => 'integer', 'locationName' => 'availableCount', ],
                'minCount' => [ 'type' => 'integer', 'locationName' => 'minCount', ],
                'defaultCount' => [ 'type' => 'integer', 'locationName' => 'defaultCount', ],
                'stepCount' => [ 'type' => 'integer', 'locationName' => 'stepCount', ],
            ],
        ],
        'StorageConfig' => [
            'type' => 'structure',
            'members' => [
                'onSale' => [ 'type' => 'boolean', 'locationName' => 'onSale', ],
                'storageType' => [ 'type' => 'string', 'locationName' => 'storageType', ],
                'flavorConfig' => [ 'type' => 'list', 'member' => [ 'shape' => 'FlavorConfig', ], ],
            ],
        ],
        'AzSpecConf2' => [
            'type' => 'structure',
            'members' => [
                'version' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'azSpecConfig' =>  [ 'shape' => 'AzSpecConfig2', ],
            ],
        ],
        'ArchSpecConfig' => [
            'type' => 'structure',
            'members' => [
                'archType' => [ 'type' => 'string', 'locationName' => 'archType', ],
                'onSale' => [ 'type' => 'boolean', 'locationName' => 'onSale', ],
                'nodeSpecConfig' => [ 'type' => 'list', 'member' => [ 'shape' => 'NodeSpecConfig', ], ],
            ],
        ],
        'Broker' => [
            'type' => 'structure',
            'members' => [
                'cluster' => [ 'type' => 'string', 'locationName' => 'cluster', ],
                'brokerName' => [ 'type' => 'string', 'locationName' => 'brokerName', ],
                'brokerAddr' => [ 'type' => 'string', 'locationName' => 'brokerAddr', ],
                'brokerId' => [ 'type' => 'string', 'locationName' => 'brokerId', ],
                'brokerRole' => [ 'type' => 'string', 'locationName' => 'brokerRole', ],
                'proMsgTps' => [ 'type' => 'string', 'locationName' => 'proMsgTps', ],
                'cusMsgTps' => [ 'type' => 'string', 'locationName' => 'cusMsgTps', ],
                'todayProCount' => [ 'type' => 'string', 'locationName' => 'todayProCount', ],
                'todayCusCount' => [ 'type' => 'string', 'locationName' => 'todayCusCount', ],
                'runtimeStats' => [ 'type' => 'list', 'member' => [ 'shape' => 'Attribute', ], ],
            ],
        ],
        'Attribute' => [
            'type' => 'structure',
            'members' => [
                'key' => [ 'type' => 'string', 'locationName' => 'key', ],
                'value' => [ 'type' => 'string', 'locationName' => 'value', ],
            ],
        ],
        'BrokerAddr' => [
            'type' => 'structure',
            'members' => [
                'brokerId' => [ 'type' => 'integer', 'locationName' => 'brokerId', ],
                'addr' => [ 'type' => 'string', 'locationName' => 'addr', ],
            ],
        ],
        'SubTopic' => [
            'type' => 'structure',
            'members' => [
                'topic' => [ 'type' => 'string', 'locationName' => 'topic', ],
                'subscriptionRule' => [ 'type' => 'string', 'locationName' => 'subscriptionRule', ],
            ],
        ],
        'SubscriptionByConsumer' => [
            'type' => 'structure',
            'members' => [
                'clientIp' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'clientId' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'subscription' => [ 'type' => 'list', 'member' => [ 'shape' => 'SubTopic', ], ],
            ],
        ],
        'Connection' => [
            'type' => 'structure',
            'members' => [
                'clientId' => [ 'type' => 'string', 'locationName' => 'clientId', ],
                'clientIp' => [ 'type' => 'string', 'locationName' => 'clientIp', ],
                'clientAddr' => [ 'type' => 'string', 'locationName' => 'clientAddr', ],
                'language' => [ 'type' => 'string', 'locationName' => 'language', ],
                'versionDesc' => [ 'type' => 'string', 'locationName' => 'versionDesc', ],
            ],
        ],
        'ResultMap' => [
            'type' => 'structure',
            'members' => [
                'waiting' => [ 'type' => 'integer', 'locationName' => 'waiting', ],
                'error' => [ 'type' => 'integer', 'locationName' => 'error', ],
                'exists' => [ 'type' => 'integer', 'locationName' => 'exists', ],
                'imported' => [ 'type' => 'integer', 'locationName' => 'imported', ],
                'total' => [ 'type' => 'integer', 'locationName' => 'total', ],
            ],
        ],
        'ConsumerGroupInfo' => [
            'type' => 'structure',
            'members' => [
                'consumerGroup' => [ 'type' => 'string', 'locationName' => 'consumerGroup', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
            ],
        ],
        'ConsumerGroupStatus' => [
            'type' => 'structure',
            'members' => [
                'group' => [ 'type' => 'string', 'locationName' => 'group', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'enableDlq' => [ 'type' => 'boolean', 'locationName' => 'enableDlq', ],
                'retryMaxTimes' => [ 'type' => 'integer', 'locationName' => 'retryMaxTimes', ],
                'online' => [ 'type' => 'boolean', 'locationName' => 'online', ],
                'count' => [ 'type' => 'integer', 'locationName' => 'count', ],
                'messageModel' => [ 'type' => 'string', 'locationName' => 'messageModel', ],
                'diffTotol' => [ 'type' => 'double', 'locationName' => 'diffTotol', ],
                'enableConsume' => [ 'type' => 'boolean', 'locationName' => 'enableConsume', ],
            ],
        ],
        'ConsumerInfoDetail' => [
            'type' => 'structure',
            'members' => [
                'consumerAddress' => [ 'type' => 'string', 'locationName' => 'consumerAddress', ],
                'consumeBeginTime' => [ 'type' => 'string', 'locationName' => 'consumeBeginTime', ],
                'consumeEndTime' => [ 'type' => 'string', 'locationName' => 'consumeEndTime', ],
                'costTime' => [ 'type' => 'integer', 'locationName' => 'costTime', ],
                'retryTimes' => [ 'type' => 'integer', 'locationName' => 'retryTimes', ],
                'consumerStatus' => [ 'type' => 'string', 'locationName' => 'consumerStatus', ],
            ],
        ],
        'ConsumerSubTopics' => [
            'type' => 'structure',
            'members' => [
                'topic' => [ 'type' => 'string', 'locationName' => 'topic', ],
                'subscriptionRule' => [ 'type' => 'string', 'locationName' => 'subscriptionRule', ],
            ],
        ],
        'DlqMessage' => [
            'type' => 'structure',
            'members' => [
                'msgId' => [ 'type' => 'string', 'locationName' => 'msgId', ],
                'topic' => [ 'type' => 'string', 'locationName' => 'topic', ],
                'tags' => [ 'type' => 'string', 'locationName' => 'tags', ],
                'key' => [ 'type' => 'string', 'locationName' => 'key', ],
                'storeTime' => [ 'type' => 'string', 'locationName' => 'storeTime', ],
                'bornTime' => [ 'type' => 'string', 'locationName' => 'bornTime', ],
                'reconsumeTimes' => [ 'type' => 'integer', 'locationName' => 'reconsumeTimes', ],
                'originalMsgId' => [ 'type' => 'string', 'locationName' => 'originalMsgId', ],
            ],
        ],
        'EndpointEntry' => [
            'type' => 'structure',
            'members' => [
                'protocol' => [ 'type' => 'string', 'locationName' => 'protocol', ],
                'address' => [ 'type' => 'string', 'locationName' => 'address', ],
            ],
        ],
        'ExternalEndpoint' => [
            'type' => 'structure',
            'members' => [
                'external' => [ 'type' => 'list', 'member' => [ 'shape' => 'EndpointEntry', ], ],
                'internal' => [ 'type' => 'list', 'member' => [ 'shape' => 'EndpointEntry', ], ],
                'publicNetwork' => [ 'type' => 'list', 'member' => [ 'shape' => 'EndpointEntry', ], ],
            ],
        ],
        'InstanceClass' => [
            'type' => 'structure',
            'members' => [
                'role' => [ 'type' => 'string', 'locationName' => 'role', ],
                'nodeClassCode' => [ 'type' => 'string', 'locationName' => 'nodeClassCode', ],
                'nodeCpu' => [ 'type' => 'integer', 'locationName' => 'nodeCpu', ],
                'nodeMemoryGB' => [ 'type' => 'integer', 'locationName' => 'nodeMemoryGB', ],
                'nodeCount' => [ 'type' => 'integer', 'locationName' => 'nodeCount', ],
                'nodeDiskType' => [ 'type' => 'string', 'locationName' => 'nodeDiskType', ],
                'nodeDiskGB' => [ 'type' => 'integer', 'locationName' => 'nodeDiskGB', ],
                'replicaPerGroup' => [ 'type' => 'integer', 'locationName' => 'replicaPerGroup', ],
            ],
        ],
        'Charge' => [
            'type' => 'structure',
            'members' => [
                'chargeMode' => [ 'type' => 'string', 'locationName' => 'chargeMode', ],
                'chargeStatus' => [ 'type' => 'string', 'locationName' => 'chargeStatus', ],
                'chargeStartTime' => [ 'type' => 'string', 'locationName' => 'chargeStartTime', ],
                'chargeExpiredTime' => [ 'type' => 'string', 'locationName' => 'chargeExpiredTime', ],
                'chargeRetireTime' => [ 'type' => 'string', 'locationName' => 'chargeRetireTime', ],
            ],
        ],
        'Instance' => [
            'type' => 'structure',
            'members' => [
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'instanceName' => [ 'type' => 'string', 'locationName' => 'instanceName', ],
                'instanceVersion' => [ 'type' => 'string', 'locationName' => 'instanceVersion', ],
                'instanceStatus' => [ 'type' => 'string', 'locationName' => 'instanceStatus', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'vpcId' => [ 'type' => 'string', 'locationName' => 'vpcId', ],
                'subnetId' => [ 'type' => 'string', 'locationName' => 'subnetId', ],
                'azId' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'instanceClass' => [ 'type' => 'list', 'member' => [ 'shape' => 'InstanceClass', ], ],
                'charge' =>  [ 'shape' => 'Charge', ],
                'tags' => [ 'type' => 'list', 'member' => [ 'shape' => 'Tag', ], ],
                'extension' =>  [ 'shape' => 'RespExtension', ],
            ],
        ],
        'ServiceExposure' => [
            'type' => 'structure',
            'members' => [
                'enabled' => [ 'type' => 'boolean', 'locationName' => 'enabled', ],
                'serviceType' => [ 'type' => 'string', 'locationName' => 'serviceType', ],
            ],
        ],
        'RespExtension' => [
            'type' => 'structure',
            'members' => [
                'endpoints' =>  [ 'shape' => 'ExternalEndpoint', ],
                'serviceExposure' =>  [ 'shape' => 'ServiceExposure', ],
                'publicExposure' =>  [ 'shape' => 'PublicExposure', ],
                'fipExposure' =>  [ 'shape' => 'FipExposure', ],
                'webUI' => [ 'type' => 'string', 'locationName' => 'webUI', ],
                'deployMode' => [ 'type' => 'string', 'locationName' => 'deployMode', ],
                'aclMode' => [ 'type' => 'string', 'locationName' => 'aclMode', ],
                'supportAcl' => [ 'type' => 'boolean', 'locationName' => 'supportAcl', ],
            ],
        ],
        'PublicExposure' => [
            'type' => 'structure',
            'members' => [
                'enablePublicExposure' => [ 'type' => 'boolean', 'locationName' => 'enablePublicExposure', ],
                'bandwidthMbps' => [ 'type' => 'integer', 'locationName' => 'bandwidthMbps', ],
            ],
        ],
        'Tag' => [
            'type' => 'structure',
            'members' => [
                'key' => [ 'type' => 'string', 'locationName' => 'key', ],
                'value' => [ 'type' => 'string', 'locationName' => 'value', ],
            ],
        ],
        'FipExposure' => [
            'type' => 'structure',
            'members' => [
                'enableFipExposure' => [ 'type' => 'boolean', 'locationName' => 'enableFipExposure', ],
                'bandwidthMbps' => [ 'type' => 'integer', 'locationName' => 'bandwidthMbps', ],
            ],
        ],
        'InstanceClassSpec' => [
            'type' => 'structure',
            'members' => [
                'role' => [ 'type' => 'string', 'locationName' => 'role', ],
                'nodeClassCode' => [ 'type' => 'string', 'locationName' => 'nodeClassCode', ],
                'nodeCount' => [ 'type' => 'integer', 'locationName' => 'nodeCount', ],
                'nodeDiskType' => [ 'type' => 'string', 'locationName' => 'nodeDiskType', ],
                'nodeDiskGB' => [ 'type' => 'integer', 'locationName' => 'nodeDiskGB', ],
                'replicaPerGroup' => [ 'type' => 'integer', 'locationName' => 'replicaPerGroup', ],
            ],
        ],
        'InstanceName' => [
            'type' => 'structure',
            'members' => [
                'resourceId' => [ 'type' => 'string', 'locationName' => 'resourceId', ],
                'resourceName' => [ 'type' => 'string', 'locationName' => 'resourceName', ],
            ],
        ],
        'ReqExtension' => [
            'type' => 'structure',
            'members' => [
                'serviceExposure' =>  [ 'shape' => 'ServiceExposure', ],
                'deployMode' => [ 'type' => 'string', 'locationName' => 'deployMode', ],
                'advancedConfigs' => [ 'type' => 'object', 'locationName' => 'advancedConfigs', ],
                'aclMode' => [ 'type' => 'string', 'locationName' => 'aclMode', ],
            ],
        ],
        'InstanceSpec' => [
            'type' => 'structure',
            'members' => [
                'vpcId' => [ 'type' => 'string', 'locationName' => 'vpcId', ],
                'subnetId' => [ 'type' => 'string', 'locationName' => 'subnetId', ],
                'instanceVersion' => [ 'type' => 'string', 'locationName' => 'instanceVersion', ],
                'instanceName' => [ 'type' => 'string', 'locationName' => 'instanceName', ],
                'azId' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'instanceClassSpec' => [ 'type' => 'list', 'member' => [ 'shape' => 'InstanceClassSpec', ], ],
                'extension' =>  [ 'shape' => 'ReqExtension', ],
                'cpuArch' => [ 'type' => 'string', 'locationName' => 'cpuArch', ],
                'opsTags' => [ 'type' => 'list', 'member' => [ 'shape' => 'Tag', ], ],
                'userTags' => [ 'type' => 'list', 'member' => [ 'shape' => 'Tag', ], ],
            ],
        ],
        'Message' => [
            'type' => 'structure',
            'members' => [
                'msgId' => [ 'type' => 'string', 'locationName' => 'msgId', ],
                'topic' => [ 'type' => 'string', 'locationName' => 'topic', ],
                'messageBody' => [ 'type' => 'string', 'locationName' => 'messageBody', ],
                'tags' => [ 'type' => 'string', 'locationName' => 'tags', ],
                'key' => [ 'type' => 'string', 'locationName' => 'key', ],
                'storeTime' => [ 'type' => 'string', 'locationName' => 'storeTime', ],
                'bornTime' => [ 'type' => 'string', 'locationName' => 'bornTime', ],
            ],
        ],
        'UserPermission' => [
            'type' => 'structure',
            'members' => [
                'userId' => [ 'type' => 'string', 'locationName' => 'userId', ],
                'resourceType' => [ 'type' => 'string', 'locationName' => 'resourceType', ],
                'resourceName' => [ 'type' => 'string', 'locationName' => 'resourceName', ],
                'permission' => [ 'type' => 'string', 'locationName' => 'permission', ],
            ],
        ],
        'ProduceInfo' => [
            'type' => 'structure',
            'members' => [
                'produceAddress' => [ 'type' => 'string', 'locationName' => 'produceAddress', ],
                'sendBeginTime' => [ 'type' => 'string', 'locationName' => 'sendBeginTime', ],
                'sendEndTime' => [ 'type' => 'string', 'locationName' => 'sendEndTime', ],
                'costTime' => [ 'type' => 'integer', 'locationName' => 'costTime', ],
                'messageSendStatus' => [ 'type' => 'string', 'locationName' => 'messageSendStatus', ],
                'retryTimes' => [ 'type' => 'integer', 'locationName' => 'retryTimes', ],
                'messageType' => [ 'type' => 'string', 'locationName' => 'messageType', ],
            ],
        ],
        'RegionSpecConfig2' => [
            'type' => 'structure',
            'members' => [
                'version' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'azSpecConfig' => [ 'type' => 'list', 'member' => [ 'shape' => 'AzSpecConfig2', ], ],
            ],
        ],
        'ResendDlqResults' => [
            'type' => 'structure',
            'members' => [
                'msgId' => [ 'type' => 'string', 'locationName' => 'msgId', ],
                'sendStatus' => [ 'type' => 'string', 'locationName' => 'sendStatus', ],
            ],
        ],
        'TaskTypeListItem' => [
            'type' => 'structure',
            'members' => [
                'taskTypeEnglishName' => [ 'type' => 'string', 'locationName' => 'taskTypeEnglishName', ],
                'taskTypeChineseName' => [ 'type' => 'string', 'locationName' => 'taskTypeChineseName', ],
            ],
        ],
        'TaskBasicInfo' => [
            'type' => 'structure',
            'members' => [
                'taskStartTime' => [ 'type' => 'string', 'locationName' => 'taskStartTime', ],
                'taskEndTime' => [ 'type' => 'string', 'locationName' => 'taskEndTime', ],
                'user' => [ 'type' => 'string', 'locationName' => 'user', ],
                'subUser' => [ 'type' => 'string', 'locationName' => 'subUser', ],
                'taskStatus' => [ 'type' => 'string', 'locationName' => 'taskStatus', ],
            ],
        ],
        'DiffItem' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'value' => [ 'type' => 'string', 'locationName' => 'value', ],
            ],
        ],
        'TaskListItem' => [
            'type' => 'structure',
            'members' => [
                'taskId' => [ 'type' => 'integer', 'locationName' => 'taskId', ],
                'taskStartTime' => [ 'type' => 'string', 'locationName' => 'taskStartTime', ],
                'taskType' => [ 'type' => 'string', 'locationName' => 'taskType', ],
                'taskOpType' => [ 'type' => 'integer', 'locationName' => 'taskOpType', ],
                'user' => [ 'type' => 'string', 'locationName' => 'user', ],
                'subUser' => [ 'type' => 'string', 'locationName' => 'subUser', ],
                'taskStatus' => [ 'type' => 'string', 'locationName' => 'taskStatus', ],
                'taskProgress' => [ 'type' => 'integer', 'locationName' => 'taskProgress', ],
                'taskTimeConsuming' => [ 'type' => 'integer', 'locationName' => 'taskTimeConsuming', ],
                'isTaskTimeConsumeContinueIncrease' => [ 'type' => 'boolean', 'locationName' => 'isTaskTimeConsumeContinueIncrease', ],
                'taskErrorInfo' => [ 'type' => 'string', 'locationName' => 'taskErrorInfo', ],
                'taskEndTime' => [ 'type' => 'string', 'locationName' => 'taskEndTime', ],
                'canInterruptTask' => [ 'type' => 'boolean', 'locationName' => 'canInterruptTask', ],
                'canRetryTask' => [ 'type' => 'boolean', 'locationName' => 'canRetryTask', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'Step' => [
            'type' => 'structure',
            'members' => [
                'stepSeqId' => [ 'type' => 'integer', 'locationName' => 'stepSeqId', ],
                'stepName' => [ 'type' => 'string', 'locationName' => 'stepName', ],
                'stepStartTime' => [ 'type' => 'string', 'locationName' => 'stepStartTime', ],
                'stepEndTime' => [ 'type' => 'string', 'locationName' => 'stepEndTime', ],
                'stepStatus' => [ 'type' => 'string', 'locationName' => 'stepStatus', ],
                'stepDetailInfo' => [ 'type' => 'string', 'locationName' => 'stepDetailInfo', ],
            ],
        ],
        'TaskDetail' => [
            'type' => 'structure',
            'members' => [
                'taskBasicInfo' =>  [ 'shape' => 'TaskBasicInfo', ],
                'taskModifyInfo' =>  [ 'shape' => 'TaskModifyInfo', ],
                'steps' => [ 'type' => 'list', 'member' => [ 'shape' => 'Step', ], ],
            ],
        ],
        'TaskModifyInfo' => [
            'type' => 'structure',
            'members' => [
                'taskType' => [ 'type' => 'string', 'locationName' => 'taskType', ],
                'modifyDiffs' => [ 'type' => 'object', 'locationName' => 'modifyDiffs', ],
            ],
        ],
        'Topic' => [
            'type' => 'structure',
            'members' => [
                'topic' => [ 'type' => 'string', 'locationName' => 'topic', ],
                'topicType' => [ 'type' => 'string', 'locationName' => 'topicType', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'queueNums' => [ 'type' => 'integer', 'locationName' => 'queueNums', ],
            ],
        ],
        'TopicBrokerData' => [
            'type' => 'structure',
            'members' => [
                'cluster' => [ 'type' => 'string', 'locationName' => 'cluster', ],
                'brokerName' => [ 'type' => 'string', 'locationName' => 'brokerName', ],
                'brokerAddrs' => [ 'type' => 'map', 'key' => [ 'type' => 'string', ], 'value' => [ 'type' => 'string', ], ],
            ],
        ],
        'TopicConsumersInfo' => [
            'type' => 'structure',
            'members' => [
                'topic' => [ 'type' => 'string', 'locationName' => 'topic', ],
                'consumerGroup' => [ 'type' => 'string', 'locationName' => 'consumerGroup', ],
                'diffTotal' => [ 'type' => 'double', 'locationName' => 'diffTotal', ],
                'online' => [ 'type' => 'boolean', 'locationName' => 'online', ],
                'queueStatInfoList' => [ 'type' => 'list', 'member' => [ 'shape' => 'ConsumeQueueInfo', ], ],
            ],
        ],
        'ConsumeQueueInfo' => [
            'type' => 'structure',
            'members' => [
                'brokerName' => [ 'type' => 'string', 'locationName' => 'brokerName', ],
                'queueId' => [ 'type' => 'integer', 'locationName' => 'queueId', ],
                'brokerOffset' => [ 'type' => 'double', 'locationName' => 'brokerOffset', ],
                'pullOffset' => [ 'type' => 'double', 'locationName' => 'pullOffset', ],
                'consumerOffset' => [ 'type' => 'double', 'locationName' => 'consumerOffset', ],
                'clientInfo' => [ 'type' => 'string', 'locationName' => 'clientInfo', ],
            ],
        ],
        'TopicQueueData' => [
            'type' => 'structure',
            'members' => [
                'brokerName' => [ 'type' => 'string', 'locationName' => 'brokerName', ],
                'writeQueueNums' => [ 'type' => 'integer', 'locationName' => 'writeQueueNums', ],
                'readQueueNums' => [ 'type' => 'integer', 'locationName' => 'readQueueNums', ],
                'perm' => [ 'type' => 'integer', 'locationName' => 'perm', ],
            ],
        ],
        'TopicRoute' => [
            'type' => 'structure',
            'members' => [
                'queueDatas' => [ 'type' => 'list', 'member' => [ 'shape' => 'TopicQueueData', ], ],
                'brokerDatas' => [ 'type' => 'list', 'member' => [ 'shape' => 'TopicBrokerData', ], ],
            ],
        ],
        'TopicSubscription' => [
            'type' => 'structure',
            'members' => [
                'consumerGroup' => [ 'type' => 'string', 'locationName' => 'consumerGroup', ],
                'online' => [ 'type' => 'boolean', 'locationName' => 'online', ],
                'messageModel' => [ 'type' => 'string', 'locationName' => 'messageModel', ],
                'subscriptionRule' => [ 'type' => 'string', 'locationName' => 'subscriptionRule', ],
            ],
        ],
        'DescribeConsumerGroupNamesRequestShape' => [
            'type' => 'structure',
            'members' => [
                'consumerFilter' => [ 'type' => 'string', 'locationName' => 'consumerFilter', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'DescribeConsumerGroupStatusRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'consumerGroup' => [ 'type' => 'string', 'locationName' => 'consumerGroup', ],
            ],
        ],
        'DescribeConsumerAllTopicsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeConsumerAllTopicsResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DeleteConsumerGroupResultShape' => [
            'type' => 'structure',
            'members' => [
                'consumerGroup' => [ 'type' => 'string', 'locationName' => 'consumerGroup', ],
            ],
        ],
        'DescribeConsumerGroupsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeConsumerGroupsResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeConsumerGroupNamesResultShape' => [
            'type' => 'structure',
            'members' => [
                'consumerGroupNameList' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'ResetOffsetResultShape' => [
            'type' => 'structure',
            'members' => [
                'result' => [ 'type' => 'boolean', 'locationName' => 'result', ],
            ],
        ],
        'DescribeConsumerAllTopicsResultShape' => [
            'type' => 'structure',
            'members' => [
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
                'topicNameList' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'UpdateConsumerGroupResultShape' => [
            'type' => 'structure',
            'members' => [
                'consumerGroup' => [ 'type' => 'string', 'locationName' => 'consumerGroup', ],
            ],
        ],
        'DeleteConsumerGroupResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'DeleteConsumerGroupResultShape', ],
            ],
        ],
        'CreateConsumerGroupResultShape' => [
            'type' => 'structure',
            'members' => [
                'consumerGroup' => [ 'type' => 'string', 'locationName' => 'consumerGroup', ],
            ],
        ],
        'DescribeConsumerAllTopicsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'topicFilter' => [ 'type' => 'string', 'locationName' => 'topicFilter', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'consumerGroup' => [ 'type' => 'string', 'locationName' => 'consumerGroup', ],
            ],
        ],
        'DescribeConsumerSubTopicsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeConsumerSubTopicsResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'CreateConsumerGroupResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'CreateConsumerGroupResultShape', ],
            ],
        ],
        'ResetOffsetResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'ResetOffsetResultShape', ],
            ],
        ],
        'CreateConsumerGroupRequestShape' => [
            'type' => 'structure',
            'members' => [
                'consumerGroup' => [ 'type' => 'string', 'locationName' => 'consumerGroup', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'retryMaxTimes' => [ 'type' => 'integer', 'locationName' => 'retryMaxTimes', ],
                'enableDlq' => [ 'type' => 'boolean', 'locationName' => 'enableDlq', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'DescribeConsumerSubTopicsResultShape' => [
            'type' => 'structure',
            'members' => [
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
                'consumerGroupSubTopicList' => [ 'type' => 'list', 'member' => [ 'shape' => 'ConsumerSubTopics', ], ],
            ],
        ],
        'DescribeConsumerGroupStatusResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeConsumerGroupStatusResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeConsumerGroupStatusResultShape' => [
            'type' => 'structure',
            'members' => [
                'consumerGroupStatus' =>  [ 'shape' => 'ConsumerGroupStatus', ],
            ],
        ],
        'UpdateConsumerGroupResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'UpdateConsumerGroupResultShape', ],
            ],
        ],
        'ResetOffsetRequestShape' => [
            'type' => 'structure',
            'members' => [
                'topic' => [ 'type' => 'string', 'locationName' => 'topic', ],
                'resetTime' => [ 'type' => 'string', 'locationName' => 'resetTime', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'consumerGroup' => [ 'type' => 'string', 'locationName' => 'consumerGroup', ],
            ],
        ],
        'DescribeConsumerGroupNamesResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeConsumerGroupNamesResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeConsumerGroupsResultShape' => [
            'type' => 'structure',
            'members' => [
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
                'consumerGroupList' => [ 'type' => 'list', 'member' => [ 'shape' => 'ConsumerGroupInfo', ], ],
            ],
        ],
        'DescribeConsumerGroupsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'consumerFilter' => [ 'type' => 'string', 'locationName' => 'consumerFilter', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'DeleteConsumerGroupRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'consumerGroup' => [ 'type' => 'string', 'locationName' => 'consumerGroup', ],
            ],
        ],
        'ConsumerGroupCheckResult' => [
            'type' => 'structure',
            'members' => [
                'consumerGroup' => [ 'type' => 'string', 'locationName' => 'consumerGroup', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'enableDlq' => [ 'type' => 'boolean', 'locationName' => 'enableDlq', ],
                'retryMaxTimes' => [ 'type' => 'integer', 'locationName' => 'retryMaxTimes', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'errorMsg' => [ 'type' => 'string', 'locationName' => 'errorMsg', ],
            ],
        ],
        'UpdateConsumerGroupRequestShape' => [
            'type' => 'structure',
            'members' => [
                'consumerGroup' => [ 'type' => 'string', 'locationName' => 'consumerGroup', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'retryMaxTimes' => [ 'type' => 'integer', 'locationName' => 'retryMaxTimes', ],
                'enableDlq' => [ 'type' => 'boolean', 'locationName' => 'enableDlq', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'DescribeConsumerSubTopicsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'topicFilter' => [ 'type' => 'string', 'locationName' => 'topicFilter', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'consumerGroup' => [ 'type' => 'string', 'locationName' => 'consumerGroup', ],
            ],
        ],
        'ChargeSpec' => [
            'type' => 'structure',
            'members' => [
                'chargeMode' => [ 'type' => 'string', 'locationName' => 'chargeMode', ],
                'chargeUnit' => [ 'type' => 'string', 'locationName' => 'chargeUnit', ],
                'chargeDuration' => [ 'type' => 'integer', 'locationName' => 'chargeDuration', ],
                'autoRenew' => [ 'type' => 'boolean', 'locationName' => 'autoRenew', ],
                'autoChangeChargeMode' => [ 'type' => 'boolean', 'locationName' => 'autoChangeChargeMode', ],
                'autoChangeChargeModeDate' => [ 'type' => 'string', 'locationName' => 'autoChangeChargeModeDate', ],
                'buyScenario' => [ 'type' => 'string', 'locationName' => 'buyScenario', ],
            ],
        ],
        'Filter' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'operator' => [ 'type' => 'string', 'locationName' => 'operator', ],
                'values' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'TagFilter' => [
            'type' => 'structure',
            'members' => [
                'key' => [ 'type' => 'string', 'locationName' => 'key', ],
                'values' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'VerifyConsumeResult' => [
            'type' => 'structure',
            'members' => [
                'consumeResult' => [ 'type' => 'string', 'locationName' => 'consumeResult', ],
                'spentTimeMills' => [ 'type' => 'double', 'locationName' => 'spentTimeMills', ],
                'autoCommit' => [ 'type' => 'boolean', 'locationName' => 'autoCommit', ],
                'order' => [ 'type' => 'boolean', 'locationName' => 'order', ],
            ],
        ],
        'DescribeMessageByMsgIdRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'topic' => [ 'type' => 'string', 'locationName' => 'topic', ],
                'messageId' => [ 'type' => 'string', 'locationName' => 'messageId', ],
            ],
        ],
        'DescribeMessagesRequestShape' => [
            'type' => 'structure',
            'members' => [
                'topic' => [ 'type' => 'string', 'locationName' => 'topic', ],
                'messageId' => [ 'type' => 'string', 'locationName' => 'messageId', ],
                'key' => [ 'type' => 'string', 'locationName' => 'key', ],
                'begin' => [ 'type' => 'string', 'locationName' => 'begin', ],
                'end' => [ 'type' => 'string', 'locationName' => 'end', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'SendMessageResultShape' => [
            'type' => 'structure',
            'members' => [
                'msgId' => [ 'type' => 'string', 'locationName' => 'msgId', ],
                'sendStatus' => [ 'type' => 'string', 'locationName' => 'sendStatus', ],
            ],
        ],
        'DescribeConsumeTraceRequestShape' => [
            'type' => 'structure',
            'members' => [
                'traceTopic' => [ 'type' => 'string', 'locationName' => 'traceTopic', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'topic' => [ 'type' => 'string', 'locationName' => 'topic', ],
                'messageId' => [ 'type' => 'string', 'locationName' => 'messageId', ],
            ],
        ],
        'SendMessageResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'SendMessageResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeConsumeTraceDetailResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeConsumeTraceDetailResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeMessageByMsgIdResultShape' => [
            'type' => 'structure',
            'members' => [
                'message' =>  [ 'shape' => 'Message', ],
            ],
        ],
        'DescribeProduceTraceResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeProduceTraceResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeMessagesResultShape' => [
            'type' => 'structure',
            'members' => [
                'messageList' => [ 'type' => 'list', 'member' => [ 'shape' => 'Message', ], ],
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
            ],
        ],
        'DescribeProduceTraceRequestShape' => [
            'type' => 'structure',
            'members' => [
                'traceTopic' => [ 'type' => 'string', 'locationName' => 'traceTopic', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'topic' => [ 'type' => 'string', 'locationName' => 'topic', ],
                'messageId' => [ 'type' => 'string', 'locationName' => 'messageId', ],
            ],
        ],
        'DescribeMessageByMsgIdResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeMessageByMsgIdResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeConsumeTraceResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeConsumeTraceResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeProduceTraceResultShape' => [
            'type' => 'structure',
            'members' => [
                'produceInfo' =>  [ 'shape' => 'ProduceInfo', ],
            ],
        ],
        'DescribeConsumeTraceDetailRequestShape' => [
            'type' => 'structure',
            'members' => [
                'traceTopic' => [ 'type' => 'string', 'locationName' => 'traceTopic', ],
                'consumerGroup' => [ 'type' => 'string', 'locationName' => 'consumerGroup', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'topic' => [ 'type' => 'string', 'locationName' => 'topic', ],
                'messageId' => [ 'type' => 'string', 'locationName' => 'messageId', ],
            ],
        ],
        'SendMessageRequestShape' => [
            'type' => 'structure',
            'members' => [
                'messageBody' => [ 'type' => 'string', 'locationName' => 'messageBody', ],
                'tag' => [ 'type' => 'string', 'locationName' => 'tag', ],
                'key' => [ 'type' => 'string', 'locationName' => 'key', ],
                'enableDelay' => [ 'type' => 'boolean', 'locationName' => 'enableDelay', ],
                'delaySecond' => [ 'type' => 'integer', 'locationName' => 'delaySecond', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'topic' => [ 'type' => 'string', 'locationName' => 'topic', ],
            ],
        ],
        'DescribeMessagesResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeMessagesResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeConsumeTraceResultShape' => [
            'type' => 'structure',
            'members' => [
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
                'consumerGroupList' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'DescribeConsumeTraceDetailResultShape' => [
            'type' => 'structure',
            'members' => [
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
                'consumerList' => [ 'type' => 'list', 'member' => [ 'shape' => 'ConsumerInfoDetail', ], ],
            ],
        ],
        'TopicCheckResult' => [
            'type' => 'structure',
            'members' => [
                'topic' => [ 'type' => 'string', 'locationName' => 'topic', ],
                'topicType' => [ 'type' => 'string', 'locationName' => 'topicType', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'errorMsg' => [ 'type' => 'string', 'locationName' => 'errorMsg', ],
            ],
        ],
        'DescribeTopicResultShape' => [
            'type' => 'structure',
            'members' => [
                'topic' =>  [ 'shape' => 'Topic', ],
            ],
        ],
        'DescribeConsumersByTopicResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeConsumersByTopicResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeTopicResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeTopicResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeTopicsResultShape' => [
            'type' => 'structure',
            'members' => [
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
                'topicList' => [ 'type' => 'list', 'member' => [ 'shape' => 'Topic', ], ],
            ],
        ],
        'DescribeTopicNamesResultShape' => [
            'type' => 'structure',
            'members' => [
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
                'topicNameList' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'CreateTopicResultShape' => [
            'type' => 'structure',
            'members' => [
                'topic' => [ 'type' => 'string', 'locationName' => 'topic', ],
            ],
        ],
        'DescribeTopicRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'topic' => [ 'type' => 'string', 'locationName' => 'topic', ],
            ],
        ],
        'DeleteTopicResultShape' => [
            'type' => 'structure',
            'members' => [
                'topic' => [ 'type' => 'string', 'locationName' => 'topic', ],
            ],
        ],
        'DeleteTopicRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'topic' => [ 'type' => 'string', 'locationName' => 'topic', ],
            ],
        ],
        'DescribeConsumersByTopicResultShape' => [
            'type' => 'structure',
            'members' => [
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
                'topicSubscriptionList' => [ 'type' => 'list', 'member' => [ 'shape' => 'TopicSubscription', ], ],
            ],
        ],
        'UpdateTopicDescriptionResultShape' => [
            'type' => 'structure',
            'members' => [
                'topic' => [ 'type' => 'string', 'locationName' => 'topic', ],
            ],
        ],
        'UpdateTopicDescriptionResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'UpdateTopicDescriptionResultShape', ],
            ],
        ],
        'DescribeTopicsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'topicFilter' => [ 'type' => 'string', 'locationName' => 'topicFilter', ],
                'typeFilter' => [ 'type' => 'string', 'locationName' => 'typeFilter', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'DescribeTopicsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeTopicsResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'CreateTopicRequestShape' => [
            'type' => 'structure',
            'members' => [
                'topic' => [ 'type' => 'string', 'locationName' => 'topic', ],
                'topicType' => [ 'type' => 'string', 'locationName' => 'topicType', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'queueNums' => [ 'type' => 'integer', 'locationName' => 'queueNums', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'DescribeConsumersByTopicRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'consumerGroup' => [ 'type' => 'string', 'locationName' => 'consumerGroup', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'topic' => [ 'type' => 'string', 'locationName' => 'topic', ],
            ],
        ],
        'DescribeTopicNamesRequestShape' => [
            'type' => 'structure',
            'members' => [
                'topicFilter' => [ 'type' => 'string', 'locationName' => 'topicFilter', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'DeleteTopicResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'DeleteTopicResultShape', ],
            ],
        ],
        'UpdateTopicDescriptionRequestShape' => [
            'type' => 'structure',
            'members' => [
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'topic' => [ 'type' => 'string', 'locationName' => 'topic', ],
            ],
        ],
        'DescribeTopicNamesResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeTopicNamesResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'CreateTopicResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'CreateTopicResultShape', ],
            ],
        ],
    ],
];
