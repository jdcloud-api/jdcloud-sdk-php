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
        'BucketCapacityStatistic' => [
            'type' => 'structure',
            'members' => [
                'bucketName' => [ 'type' => 'string', 'locationName' => 'bucketName', ],
                'value' => [ 'type' => 'long', 'locationName' => 'value', ],
                'time' => [ 'type' => 'string', 'locationName' => 'time', ],
                'capacityType' => [ 'type' => 'integer', 'locationName' => 'capacityType', ],
            ],
        ],
        'GetSingleBucketCapacityRequestShape' => [
            'type' => 'structure',
            'members' => [
                'capacityTypes' => [ 'type' => 'list', 'member' => [ 'type' => 'integer', ], ],
                'beginTime' => [ 'type' => 'string', 'locationName' => 'beginTime', ],
                'endTime' => [ 'type' => 'string', 'locationName' => 'endTime', ],
                'periodType' => [ 'type' => 'integer', 'locationName' => 'periodType', ],
                'method' => [ 'type' => 'integer', 'locationName' => 'method', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'bucketName' => [ 'type' => 'string', 'locationName' => 'bucketName', ],
            ],
        ],
        'GetSingleBucketCapacityResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'GetSingleBucketCapacityResultShape', ],
            ],
        ],
        'SingleBucketCapacityRequestCondition' => [
            'type' => 'structure',
            'members' => [
                'capacityTypes' => [ 'type' => 'list', 'member' => [ 'type' => 'integer', ], ],
                'beginTime' => [ 'type' => 'string', 'locationName' => 'beginTime', ],
                'endTime' => [ 'type' => 'string', 'locationName' => 'endTime', ],
                'periodType' => [ 'type' => 'integer', 'locationName' => 'periodType', ],
                'method' => [ 'type' => 'integer', 'locationName' => 'method', ],
            ],
        ],
        'BucketCapacityCondition' => [
            'type' => 'structure',
            'members' => [
                'capacityTypes' => [ 'type' => 'list', 'member' => [ 'type' => 'integer', ], ],
                'beginTime' => [ 'type' => 'string', 'locationName' => 'beginTime', ],
                'endTime' => [ 'type' => 'string', 'locationName' => 'endTime', ],
                'periodType' => [ 'type' => 'integer', 'locationName' => 'periodType', ],
                'method' => [ 'type' => 'integer', 'locationName' => 'method', ],
                'bucketNames' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'BucketCapacityQueryResult' => [
            'type' => 'structure',
            'members' => [
                'resultList' => [ 'type' => 'list', 'member' => [ 'shape' => 'BucketCapacityStatistic', ], ],
            ],
        ],
        'GetSingleBucketCapacityResultShape' => [
            'type' => 'structure',
            'members' => [
                'resultList' => [ 'type' => 'list', 'member' => [ 'shape' => 'BucketCapacityStatistic', ], ],
            ],
        ],
        'BucketSpaceStatisticQueryResult' => [
            'type' => 'structure',
            'members' => [
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
                'queryList' => [ 'type' => 'list', 'member' => [ 'shape' => 'BucketSpaceStatistic', ], ],
            ],
        ],
        'BucketMonitorStatistic' => [
            'type' => 'structure',
            'members' => [
                'bucketName' => [ 'type' => 'string', 'locationName' => 'bucketName', ],
                'count' => [ 'type' => 'long', 'locationName' => 'count', ],
                'time' => [ 'type' => 'string', 'locationName' => 'time', ],
            ],
        ],
        'BucketSpaceStatistic' => [
            'type' => 'structure',
            'members' => [
                'bucketName' => [ 'type' => 'string', 'locationName' => 'bucketName', ],
                'space' => [ 'type' => 'long', 'locationName' => 'space', ],
            ],
        ],
        'BucketMonitorStatisticQueryResult' => [
            'type' => 'structure',
            'members' => [
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
                'queryList' => [ 'type' => 'list', 'member' => [ 'shape' => 'BucketMonitorStatistic', ], ],
            ],
        ],
        'GetBucketsTaggingInfoResult' => [
            'type' => 'structure',
            'members' => [
                'bucketTaggingInfoList' => [ 'type' => 'list', 'member' => [ 'shape' => 'BucketTaggingInfo', ], ],
            ],
        ],
        'BucketInfo' => [
            'type' => 'structure',
            'members' => [
                'bucketId' => [ 'type' => 'long', 'locationName' => 'bucketId', ],
                'bucketName' => [ 'type' => 'string', 'locationName' => 'bucketName', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'pin' => [ 'type' => 'string', 'locationName' => 'pin', ],
            ],
        ],
        'BucketTaggingInfo' => [
            'type' => 'structure',
            'members' => [
                'bucketId' => [ 'type' => 'long', 'locationName' => 'bucketId', ],
                'bucketName' => [ 'type' => 'string', 'locationName' => 'bucketName', ],
                'allowTagging' => [ 'type' => 'boolean', 'locationName' => 'allowTagging', ],
            ],
        ],
        'BackSourceAddress' => [
            'type' => 'structure',
            'members' => [
                'protocol' => [ 'type' => 'string', 'locationName' => 'protocol', ],
                'hostName' => [ 'type' => 'string', 'locationName' => 'hostName', ],
                'replaceKeyPrefixWith' => [ 'type' => 'string', 'locationName' => 'replaceKeyPrefixWith', ],
                'replaceKeyWith' => [ 'type' => 'string', 'locationName' => 'replaceKeyWith', ],
                'replaceKeySuffixWith' => [ 'type' => 'string', 'locationName' => 'replaceKeySuffixWith', ],
            ],
        ],
        'GetBackSourceConfigurationResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'GetBackSourceConfigurationResultShape', ],
            ],
        ],
        'GetBackSourceConfigurationRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'bucketName' => [ 'type' => 'string', 'locationName' => 'bucketName', ],
            ],
        ],
        'DeleteBackSourceConfigurationResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'BackSourceRule' => [
            'type' => 'structure',
            'members' => [
                'backSourceType' => [ 'type' => 'string', 'locationName' => 'backSourceType', ],
                'condition' =>  [ 'shape' => 'BackSourceRuleCondition', ],
                'address' =>  [ 'shape' => 'BackSourceAddress', ],
                'allowQueryString' => [ 'type' => 'boolean', 'locationName' => 'allowQueryString', ],
                'followRedirects' => [ 'type' => 'boolean', 'locationName' => 'followRedirects', ],
                'headerRule' =>  [ 'shape' => 'BackSourceHeaderRule', ],
            ],
        ],
        'BucketBackSourceConfiguration' => [
            'type' => 'structure',
            'members' => [
                'backSourceRules' => [ 'type' => 'list', 'member' => [ 'shape' => 'BackSourceRule', ], ],
            ],
        ],
        'PutBackSourceConfigurationRequestShape' => [
            'type' => 'structure',
            'members' => [
                'backSourceRules' => [ 'type' => 'list', 'member' => [ 'shape' => 'BackSourceRule', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'bucketName' => [ 'type' => 'string', 'locationName' => 'bucketName', ],
            ],
        ],
        'BackSourceHeaderRule' => [
            'type' => 'structure',
            'members' => [
                'allowAllHeaders' => [ 'type' => 'boolean', 'locationName' => 'allowAllHeaders', ],
                'allowHeaders' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'notAllowHeaders' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'setHeaders' => [ 'type' => 'map', 'key' => [ 'type' => 'string', ], 'value' => [ 'type' => 'string', ], ],
            ],
        ],
        'GetBackSourceConfigurationResultShape' => [
            'type' => 'structure',
            'members' => [
                'backSourceRules' => [ 'type' => 'list', 'member' => [ 'shape' => 'BackSourceRule', ], ],
            ],
        ],
        'DeleteBackSourceConfigurationResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'PutBackSourceConfigurationResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DeleteBackSourceConfigurationRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'bucketName' => [ 'type' => 'string', 'locationName' => 'bucketName', ],
            ],
        ],
        'BackSourceRuleCondition' => [
            'type' => 'structure',
            'members' => [
                'keyPrefixEquals' => [ 'type' => 'string', 'locationName' => 'keyPrefixEquals', ],
                'httpErrorCodeReturnedEquals' => [ 'type' => 'integer', 'locationName' => 'httpErrorCodeReturnedEquals', ],
            ],
        ],
        'PutBackSourceConfigurationResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'CNameQueryResult' => [
            'type' => 'structure',
            'members' => [
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
                'resultList' => [ 'type' => 'list', 'member' => [ 'shape' => 'CName', ], ],
            ],
        ],
        'CName' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'integer', 'locationName' => 'id', ],
                'pin' => [ 'type' => 'string', 'locationName' => 'pin', ],
                'originDomain' => [ 'type' => 'string', 'locationName' => 'originDomain', ],
                'cname' => [ 'type' => 'string', 'locationName' => 'cname', ],
                'status' => [ 'type' => 'integer', 'locationName' => 'status', ],
                'bucketName' => [ 'type' => 'string', 'locationName' => 'bucketName', ],
                'isCName' => [ 'type' => 'integer', 'locationName' => 'isCName', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'protoType' => [ 'type' => 'integer', 'locationName' => 'protoType', ],
            ],
        ],
        'CNameInfo' => [
            'type' => 'structure',
            'members' => [
                'cname' => [ 'type' => 'string', 'locationName' => 'cname', ],
                'protoType' => [ 'type' => 'integer', 'locationName' => 'protoType', ],
                'endPoint' => [ 'type' => 'string', 'locationName' => 'endPoint', ],
                'internal' => [ 'type' => 'string', 'locationName' => 'internal', ],
            ],
        ],
        'ListHistoricalReplicatTasksResultShape' => [
            'type' => 'structure',
            'members' => [
                'historyReplicationTaskInfoList' => [ 'type' => 'list', 'member' => [ 'shape' => 'HistoryReplicationTaskInfo', ], ],
                'nextMarker' => [ 'type' => 'string', 'locationName' => 'nextMarker', ],
            ],
        ],
        'AbortHistoricalReplicatTaskResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'ListHistoricalReplicatTasksResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'ListHistoricalReplicatTasksResultShape', ],
            ],
        ],
        'ListResult' => [
            'type' => 'structure',
            'members' => [
                'historyReplicationTaskInfoList' => [ 'type' => 'list', 'member' => [ 'shape' => 'HistoryReplicationTaskInfo', ], ],
                'nextMarker' => [ 'type' => 'string', 'locationName' => 'nextMarker', ],
            ],
        ],
        'GetHistoricalReplicatTaskResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'GetHistoricalReplicatTaskResultShape', ],
            ],
        ],
        'CreateHistoricalReplicatTaskResultShape' => [
            'type' => 'structure',
            'members' => [
                'taskId' => [ 'type' => 'long', 'locationName' => 'taskId', ],
            ],
        ],
        'AbortHistoricalReplicatTaskResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'CreateReplicationTaskCondition' => [
            'type' => 'structure',
            'members' => [
                'action' => [ 'type' => 'string', 'locationName' => 'action', ],
                'bucketName' => [ 'type' => 'string', 'locationName' => 'bucketName', ],
                'bucketRegion' => [ 'type' => 'string', 'locationName' => 'bucketRegion', ],
                'targetBucketName' => [ 'type' => 'string', 'locationName' => 'targetBucketName', ],
                'targetBucketRegion' => [ 'type' => 'string', 'locationName' => 'targetBucketRegion', ],
                'storageClass' => [ 'type' => 'string', 'locationName' => 'storageClass', ],
                'prefixSet' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'HistoryReplicationTask' => [
            'type' => 'structure',
            'members' => [
                'taskId' => [ 'type' => 'long', 'locationName' => 'taskId', ],
            ],
        ],
        'GetHistoricalReplicatTaskRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'bucketName' => [ 'type' => 'string', 'locationName' => 'bucketName', ],
                'taskId' => [ 'type' => 'string', 'locationName' => 'taskId', ],
            ],
        ],
        'GetHistoricalReplicatTaskResultShape' => [
            'type' => 'structure',
            'members' => [
                'taskId' => [ 'type' => 'long', 'locationName' => 'taskId', ],
                'action' => [ 'type' => 'string', 'locationName' => 'action', ],
                'bucketName' => [ 'type' => 'string', 'locationName' => 'bucketName', ],
                'bucketRegion' => [ 'type' => 'string', 'locationName' => 'bucketRegion', ],
                'targetBucketName' => [ 'type' => 'string', 'locationName' => 'targetBucketName', ],
                'targetBucketRegion' => [ 'type' => 'string', 'locationName' => 'targetBucketRegion', ],
                'storageClass' => [ 'type' => 'string', 'locationName' => 'storageClass', ],
                'prefixSet' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'createdTime' => [ 'type' => 'string', 'locationName' => 'createdTime', ],
                'progress' => [ 'type' => 'double', 'locationName' => 'progress', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
            ],
        ],
        'CreateHistoricalReplicatTaskResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'CreateHistoricalReplicatTaskResultShape', ],
            ],
        ],
        'AbortHistoricalReplicatTaskRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'bucketName' => [ 'type' => 'string', 'locationName' => 'bucketName', ],
                'taskId' => [ 'type' => 'string', 'locationName' => 'taskId', ],
            ],
        ],
        'ListHistoricalReplicatTasksRequestShape' => [
            'type' => 'structure',
            'members' => [
                'marker' => [ 'type' => 'string', 'locationName' => 'marker', ],
                'limit' => [ 'type' => 'integer', 'locationName' => 'limit', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'bucketName' => [ 'type' => 'string', 'locationName' => 'bucketName', ],
            ],
        ],
        'HistoryReplicationTaskInfo' => [
            'type' => 'structure',
            'members' => [
                'taskId' => [ 'type' => 'long', 'locationName' => 'taskId', ],
                'action' => [ 'type' => 'string', 'locationName' => 'action', ],
                'bucketName' => [ 'type' => 'string', 'locationName' => 'bucketName', ],
                'bucketRegion' => [ 'type' => 'string', 'locationName' => 'bucketRegion', ],
                'targetBucketName' => [ 'type' => 'string', 'locationName' => 'targetBucketName', ],
                'targetBucketRegion' => [ 'type' => 'string', 'locationName' => 'targetBucketRegion', ],
                'storageClass' => [ 'type' => 'string', 'locationName' => 'storageClass', ],
                'prefixSet' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'createdTime' => [ 'type' => 'string', 'locationName' => 'createdTime', ],
                'progress' => [ 'type' => 'double', 'locationName' => 'progress', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
            ],
        ],
        'CreateHistoricalReplicatTaskRequestShape' => [
            'type' => 'structure',
            'members' => [
                'action' => [ 'type' => 'string', 'locationName' => 'action', ],
                'bucketName' => [ 'type' => 'string', 'locationName' => 'bucketName', ],
                'bucketRegion' => [ 'type' => 'string', 'locationName' => 'bucketRegion', ],
                'targetBucketName' => [ 'type' => 'string', 'locationName' => 'targetBucketName', ],
                'targetBucketRegion' => [ 'type' => 'string', 'locationName' => 'targetBucketRegion', ],
                'storageClass' => [ 'type' => 'string', 'locationName' => 'storageClass', ],
                'prefixSet' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'ICP' => [
            'type' => 'structure',
            'members' => [
                'icp' => [ 'type' => 'boolean', 'locationName' => 'icp', ],
            ],
        ],
        'ImageExtensions' => [
            'type' => 'structure',
            'members' => [
                'imageExtensions' => [ 'type' => 'string', 'locationName' => 'imageExtensions', ],
            ],
        ],
        'SignatureInfo' => [
            'type' => 'structure',
            'members' => [
                'endpoint' => [ 'type' => 'string', 'locationName' => 'endpoint', ],
                'httpMethod' => [ 'type' => 'string', 'locationName' => 'httpMethod', ],
                'resourcePath' => [ 'type' => 'string', 'locationName' => 'resourcePath', ],
                'xAmzContentSha256' => [ 'type' => 'string', 'locationName' => 'xAmzContentSha256', ],
                'additionalSignatureHeaders' => [ 'type' => 'map', 'key' => [ 'type' => 'string', ], 'value' => [ 'type' => 'string', ], ],
                'signatureParameters' => [ 'type' => 'map', 'key' => [ 'type' => 'string', ], 'value' => [ 'type' => 'string', ], ],
            ],
        ],
        'SignatureResult' => [
            'type' => 'structure',
            'members' => [
                'endpoint' => [ 'type' => 'string', 'locationName' => 'endpoint', ],
                'httpMethod' => [ 'type' => 'string', 'locationName' => 'httpMethod', ],
                'resourcePath' => [ 'type' => 'string', 'locationName' => 'resourcePath', ],
                'xAmzDate' => [ 'type' => 'string', 'locationName' => 'xAmzDate', ],
                'xAmzContentSha256' => [ 'type' => 'string', 'locationName' => 'xAmzContentSha256', ],
                'xAmzMetaRequesterPin' => [ 'type' => 'string', 'locationName' => 'xAmzMetaRequesterPin', ],
                'xAmzMetaRequesterId' => [ 'type' => 'string', 'locationName' => 'xAmzMetaRequesterId', ],
                'additionalSignatureHeaders' => [ 'type' => 'map', 'key' => [ 'type' => 'string', ], 'value' => [ 'type' => 'string', ], ],
                'signatureParameters' => [ 'type' => 'map', 'key' => [ 'type' => 'string', ], 'value' => [ 'type' => 'string', ], ],
                'authorization' => [ 'type' => 'string', 'locationName' => 'authorization', ],
            ],
        ],
        'UserBillCode' => [
            'type' => 'structure',
            'members' => [
                'appCode' => [ 'type' => 'string', 'locationName' => 'appCode', ],
                'serviceCode' => [ 'type' => 'string', 'locationName' => 'serviceCode', ],
                'storageResourceType' => [ 'type' => 'string', 'locationName' => 'storageResourceType', ],
                'processResourceType' => [ 'type' => 'string', 'locationName' => 'processResourceType', ],
            ],
        ],
    ],
];
