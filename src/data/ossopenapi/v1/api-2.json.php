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
        'GetBucketCapacity' => [
            'name' => 'GetBucketCapacity',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/capacity/',
            ],
            'input' => [ 'shape' => 'GetBucketCapacityRequestShape', ],
            'output' => [ 'shape' => 'GetBucketCapacityResponseShape', ],
        ],
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
        'ListClouds' => [
            'name' => 'ListClouds',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/clouds',
            ],
            'input' => [ 'shape' => 'ListCloudsRequestShape', ],
            'output' => [ 'shape' => 'ListCloudsResponseShape', ],
        ],
        'CreateCloud' => [
            'name' => 'CreateCloud',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/clouds',
            ],
            'input' => [ 'shape' => 'CreateCloudRequestShape', ],
            'output' => [ 'shape' => 'CreateCloudResponseShape', ],
        ],
        'GetCloud' => [
            'name' => 'GetCloud',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/clouds/{cloudName}/region/{regionName}',
            ],
            'input' => [ 'shape' => 'GetCloudRequestShape', ],
            'output' => [ 'shape' => 'GetCloudResponseShape', ],
        ],
        'UpdateCloud' => [
            'name' => 'UpdateCloud',
            'http' => [
                'method' => 'PUT',
                'requestUri' => '/v1/regions/{regionId}/clouds/{cloudName}/region/{regionName}',
            ],
            'input' => [ 'shape' => 'UpdateCloudRequestShape', ],
            'output' => [ 'shape' => 'UpdateCloudResponseShape', ],
        ],
        'DeleteCloud' => [
            'name' => 'DeleteCloud',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/regions/{regionId}/clouds/{cloudName}/region/{regionName}',
            ],
            'input' => [ 'shape' => 'DeleteCloudRequestShape', ],
            'output' => [ 'shape' => 'DeleteCloudResponseShape', ],
        ],
        'ListCNames' => [
            'name' => 'ListCNames',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/buckets/{bucketName}/cname/',
            ],
            'input' => [ 'shape' => 'ListCNamesRequestShape', ],
            'output' => [ 'shape' => 'ListCNamesResponseShape', ],
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
        'OpenService' => [
            'name' => 'OpenService',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/users/{userId}/appCodes/{appCode}/serviceCodes/{serviceCode}/openService',
            ],
            'input' => [ 'shape' => 'OpenServiceRequestShape', ],
            'output' => [ 'shape' => 'OpenServiceResponseShape', ],
        ],
        'GetBucketMaxCount' => [
            'name' => 'GetBucketMaxCount',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/users/{userId}/bucketMaxCount',
            ],
            'input' => [ 'shape' => 'GetBucketMaxCountRequestShape', ],
            'output' => [ 'shape' => 'GetBucketMaxCountResponseShape', ],
        ],
        'PutBucketMaxCount' => [
            'name' => 'PutBucketMaxCount',
            'http' => [
                'method' => 'PUT',
                'requestUri' => '/v1/regions/{regionId}/users/{userId}/bucketMaxCount',
            ],
            'input' => [ 'shape' => 'PutBucketMaxCountRequestShape', ],
            'output' => [ 'shape' => 'PutBucketMaxCountResponseShape', ],
        ],
        'DeleteBucketMaxCount' => [
            'name' => 'DeleteBucketMaxCount',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/regions/{regionId}/users/{userId}/bucketMaxCount',
            ],
            'input' => [ 'shape' => 'DeleteBucketMaxCountRequestShape', ],
            'output' => [ 'shape' => 'DeleteBucketMaxCountResponseShape', ],
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
        'GetBucketCapacityRequestShape' => [
            'type' => 'structure',
            'members' => [
                'capacityTypes' => [ 'type' => 'list', 'member' => [ 'type' => 'integer', ], ],
                'beginTime' => [ 'type' => 'string', 'locationName' => 'beginTime', ],
                'endTime' => [ 'type' => 'string', 'locationName' => 'endTime', ],
                'periodType' => [ 'type' => 'integer', 'locationName' => 'periodType', ],
                'method' => [ 'type' => 'integer', 'locationName' => 'method', ],
                'bucketNames' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'GetBucketCapacityResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'GetBucketCapacityResultShape', ],
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
        'GetBucketCapacityResultShape' => [
            'type' => 'structure',
            'members' => [
                'resultList' => [ 'type' => 'list', 'member' => [ 'shape' => 'BucketCapacityStatistic', ], ],
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
        'SetQuotaInfo' => [
            'type' => 'structure',
            'members' => [
                'bucketName' => [ 'type' => 'string', 'locationName' => 'bucketName', ],
                'quotaType' => [ 'type' => 'integer', 'locationName' => 'quotaType', ],
                'quotaValue' => [ 'type' => 'long', 'locationName' => 'quotaValue', ],
            ],
        ],
        'QuotaInfo' => [
            'type' => 'structure',
            'members' => [
                'pin' => [ 'type' => 'string', 'locationName' => 'pin', ],
                'bucketId' => [ 'type' => 'integer', 'locationName' => 'bucketId', ],
                'bucketName' => [ 'type' => 'string', 'locationName' => 'bucketName', ],
                'bucketRange' => [ 'type' => 'string', 'locationName' => 'bucketRange', ],
                'quotaType' => [ 'type' => 'integer', 'locationName' => 'quotaType', ],
                'quotaValue' => [ 'type' => 'long', 'locationName' => 'quotaValue', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'modifyTime' => [ 'type' => 'string', 'locationName' => 'modifyTime', ],
            ],
        ],
        'CommonResult' => [
            'type' => 'structure',
            'members' => [
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
        'BucketDedicatedZoneInfoResult' => [
            'type' => 'structure',
            'members' => [
                'bucketDedicatedZoneInfoList' => [ 'type' => 'list', 'member' => [ 'shape' => 'BucketDedicatedZoneInfo', ], ],
            ],
        ],
        'BucketDedicatedZoneInfo' => [
            'type' => 'structure',
            'members' => [
                'bucketName' => [ 'type' => 'string', 'locationName' => 'bucketName', ],
                'bucketId' => [ 'type' => 'string', 'locationName' => 'bucketId', ],
                'dedicatedZoneName' => [ 'type' => 'string', 'locationName' => 'dedicatedZoneName', ],
                'dedicatedResourceName' => [ 'type' => 'string', 'locationName' => 'dedicatedResourceName', ],
                'creationDate' => [ 'type' => 'string', 'locationName' => 'creationDate', ],
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
        'GetAuthorizedBuckets' => [
            'type' => 'structure',
            'members' => [
                'bucketInfoList' => [ 'type' => 'list', 'member' => [ 'shape' => 'BucketInfo', ], ],
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
        'CertificateBind' => [
            'type' => 'structure',
            'members' => [
                'certId' => [ 'type' => 'string', 'locationName' => 'certId', ],
            ],
        ],
        'CertificateReplace' => [
            'type' => 'structure',
            'members' => [
                'oldCertId' => [ 'type' => 'string', 'locationName' => 'oldCertId', ],
                'newCertId' => [ 'type' => 'string', 'locationName' => 'newCertId', ],
            ],
        ],
        'DeleteCloudRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'cloudName' => [ 'type' => 'string', 'locationName' => 'cloudName', ],
                'regionName' => [ 'type' => 'string', 'locationName' => 'regionName', ],
            ],
        ],
        'CreateCloudResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'CreateCloudResultShape', ],
            ],
        ],
        'UpdateCloudResultShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'RemoteCloud', ],
                'error' =>  [ 'shape' => 'Error', ],
            ],
        ],
        'RemoteCloudUpdate' => [
            'type' => 'structure',
            'members' => [
                'cloudNameCn' => [ 'type' => 'string', 'locationName' => 'cloudNameCn', ],
                's3Domain' => [ 'type' => 'string', 'locationName' => 's3Domain', ],
                'proxyAk' => [ 'type' => 'string', 'locationName' => 'proxyAk', ],
                'proxySk' => [ 'type' => 'string', 'locationName' => 'proxySk', ],
            ],
        ],
        'ListCloudsResultShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' => [ 'type' => 'list', 'member' => [ 'shape' => 'RemoteCloud', ], ],
                'error' =>  [ 'shape' => 'Error', ],
            ],
        ],
        'RemoteCloud' => [
            'type' => 'structure',
            'members' => [
                'cloudName' => [ 'type' => 'string', 'locationName' => 'cloudName', ],
                'regionName' => [ 'type' => 'string', 'locationName' => 'regionName', ],
                'cloudNameCn' => [ 'type' => 'string', 'locationName' => 'cloudNameCn', ],
                's3Domain' => [ 'type' => 'string', 'locationName' => 's3Domain', ],
                'proxyAk' => [ 'type' => 'string', 'locationName' => 'proxyAk', ],
                'proxySk' => [ 'type' => 'string', 'locationName' => 'proxySk', ],
            ],
        ],
        'UpdateCloudResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'UpdateCloudResultShape', ],
            ],
        ],
        'CreateCloudResultShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'RemoteCloud', ],
                'error' =>  [ 'shape' => 'Error', ],
            ],
        ],
        'ResponseMessageBoolean' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' => [ 'type' => 'boolean', 'locationName' => 'result', ],
                'error' =>  [ 'shape' => 'Error', ],
            ],
        ],
        'GetCloudResultShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'RemoteCloud', ],
                'error' =>  [ 'shape' => 'Error', ],
            ],
        ],
        'DeleteCloudResultShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' => [ 'type' => 'boolean', 'locationName' => 'result', ],
                'error' =>  [ 'shape' => 'Error', ],
            ],
        ],
        'CreateCloudRequestShape' => [
            'type' => 'structure',
            'members' => [
                'remoteCloud' =>  [ 'shape' => 'RemoteCloud', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'GetCloudResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'GetCloudResultShape', ],
            ],
        ],
        'UpdateCloudRequestShape' => [
            'type' => 'structure',
            'members' => [
                'remoteCloud' =>  [ 'shape' => 'RemoteCloudUpdate', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'cloudName' => [ 'type' => 'string', 'locationName' => 'cloudName', ],
                'regionName' => [ 'type' => 'string', 'locationName' => 'regionName', ],
            ],
        ],
        'ResponseMessageRemoteCloud' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'RemoteCloud', ],
                'error' =>  [ 'shape' => 'Error', ],
            ],
        ],
        'ListCloudsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'ListCloudsResultShape', ],
            ],
        ],
        'GetCloudRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'cloudName' => [ 'type' => 'string', 'locationName' => 'cloudName', ],
                'regionName' => [ 'type' => 'string', 'locationName' => 'regionName', ],
            ],
        ],
        'ResponseMessageRemoteCloudList' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' => [ 'type' => 'list', 'member' => [ 'shape' => 'RemoteCloud', ], ],
                'error' =>  [ 'shape' => 'Error', ],
            ],
        ],
        'ListCloudsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'Error' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'integer', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'details' => [ 'type' => 'list', 'member' => [ 'type' => 'object', ], ],
            ],
        ],
        'DeleteCloudResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'DeleteCloudResultShape', ],
            ],
        ],
        'ListCNamesRequestShape' => [
            'type' => 'structure',
            'members' => [
                'status' => [ 'type' => 'integer', 'locationName' => 'status', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'bucketName' => [ 'type' => 'string', 'locationName' => 'bucketName', ],
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
                'certId' => [ 'type' => 'string', 'locationName' => 'certId', ],
                'certStatus' => [ 'type' => 'string', 'locationName' => 'certStatus', ],
                'domainOperationStatus' => [ 'type' => 'string', 'locationName' => 'domainOperationStatus', ],
            ],
        ],
        'ListCNamesResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'ListCNamesResultShape', ],
            ],
        ],
        'CNameInfo' => [
            'type' => 'structure',
            'members' => [
                'cname' => [ 'type' => 'string', 'locationName' => 'cname', ],
                'protoType' => [ 'type' => 'integer', 'locationName' => 'protoType', ],
                'endPoint' => [ 'type' => 'string', 'locationName' => 'endPoint', ],
                'internal' => [ 'type' => 'string', 'locationName' => 'internal', ],
                'certId' => [ 'type' => 'string', 'locationName' => 'certId', ],
            ],
        ],
        'ListCNamesResultShape' => [
            'type' => 'structure',
            'members' => [
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
                'resultList' => [ 'type' => 'list', 'member' => [ 'shape' => 'CName', ], ],
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
                'sourceBucketCloud' => [ 'type' => 'string', 'locationName' => 'sourceBucketCloud', ],
                'targetBucketCloudEndpoint' => [ 'type' => 'string', 'locationName' => 'targetBucketCloudEndpoint', ],
                'targetBucketCloudAk' => [ 'type' => 'string', 'locationName' => 'targetBucketCloudAk', ],
                'targetBucketCloudSk' => [ 'type' => 'string', 'locationName' => 'targetBucketCloudSk', ],
                'targetBucketUserPin' => [ 'type' => 'string', 'locationName' => 'targetBucketUserPin', ],
                'targetBucketUserId' => [ 'type' => 'string', 'locationName' => 'targetBucketUserId', ],
                'targetBucketCloud' => [ 'type' => 'string', 'locationName' => 'targetBucketCloud', ],
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
                'sourceBucketCloud' => [ 'type' => 'string', 'locationName' => 'sourceBucketCloud', ],
                'targetBucketCloudEndpoint' => [ 'type' => 'string', 'locationName' => 'targetBucketCloudEndpoint', ],
                'targetBucketCloudAk' => [ 'type' => 'string', 'locationName' => 'targetBucketCloudAk', ],
                'targetBucketCloudSk' => [ 'type' => 'string', 'locationName' => 'targetBucketCloudSk', ],
                'targetBucketUserPin' => [ 'type' => 'string', 'locationName' => 'targetBucketUserPin', ],
                'targetBucketUserId' => [ 'type' => 'string', 'locationName' => 'targetBucketUserId', ],
                'targetBucketCloud' => [ 'type' => 'string', 'locationName' => 'targetBucketCloud', ],
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
        'BucketQosLimitInfo' => [
            'type' => 'structure',
            'members' => [
                'bucketName' => [ 'type' => 'string', 'locationName' => 'bucketName', ],
                'rate' => [ 'type' => 'long', 'locationName' => 'rate', ],
            ],
        ],
        'BucketQosInfo' => [
            'type' => 'structure',
            'members' => [
                'bucketName' => [ 'type' => 'string', 'locationName' => 'bucketName', ],
                'readBucketQps' => [ 'type' => 'long', 'locationName' => 'readBucketQps', ],
                'writeBucketQps' => [ 'type' => 'long', 'locationName' => 'writeBucketQps', ],
                'bandwidthUploadBps' => [ 'type' => 'long', 'locationName' => 'bandwidthUploadBps', ],
                'bandwidthDownloadBps' => [ 'type' => 'long', 'locationName' => 'bandwidthDownloadBps', ],
                'bandwidthUploadExternalBps' => [ 'type' => 'long', 'locationName' => 'bandwidthUploadExternalBps', ],
                'bandwidthDownloadExternalBps' => [ 'type' => 'long', 'locationName' => 'bandwidthDownloadExternalBps', ],
            ],
        ],
        'QosPinQueryResult' => [
            'type' => 'structure',
            'members' => [
                'pin' => [ 'type' => 'string', 'locationName' => 'pin', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'bucketNum' => [ 'type' => 'integer', 'locationName' => 'bucketNum', ],
                'bandwidthUploadBps' => [ 'type' => 'long', 'locationName' => 'bandwidthUploadBps', ],
                'bandwidthDownloadBps' => [ 'type' => 'long', 'locationName' => 'bandwidthDownloadBps', ],
                'bandwidthUploadExternalBps' => [ 'type' => 'long', 'locationName' => 'bandwidthUploadExternalBps', ],
                'bandwidthDownloadExternalBps' => [ 'type' => 'long', 'locationName' => 'bandwidthDownloadExternalBps', ],
            ],
        ],
        'QosBucketQueryResult' => [
            'type' => 'structure',
            'members' => [
                'pin' => [ 'type' => 'string', 'locationName' => 'pin', ],
                'bucketNum' => [ 'type' => 'integer', 'locationName' => 'bucketNum', ],
                'bucketQosInfos' => [ 'type' => 'list', 'member' => [ 'shape' => 'BucketQosInfo', ], ],
            ],
        ],
        'QosInfo' => [
            'type' => 'structure',
            'members' => [
                'bandwidthUploadPinGbps' => [ 'type' => 'long', 'locationName' => 'bandwidthUploadPinGbps', ],
                'bandwidthDownloadPinGbps' => [ 'type' => 'long', 'locationName' => 'bandwidthDownloadPinGbps', ],
                'bandwidthUploadExternalPinGbps' => [ 'type' => 'long', 'locationName' => 'bandwidthUploadExternalPinGbps', ],
                'bandwidthDownloadExternalPinGbps' => [ 'type' => 'long', 'locationName' => 'bandwidthDownloadExternalPinGbps', ],
                'bandwidthUploadBucketGbps' =>  [ 'shape' => 'BucketQosLimitInfo', ],
                'bandwidthDownloadBucketGbps' =>  [ 'shape' => 'BucketQosLimitInfo', ],
                'bandwidthUploadExternalBucketGbps' =>  [ 'shape' => 'BucketQosLimitInfo', ],
                'bandwidthDownloadExternalBucketGbps' =>  [ 'shape' => 'BucketQosLimitInfo', ],
                'readBucketQps' =>  [ 'shape' => 'BucketQosLimitInfo', ],
                'writeBucketQps' =>  [ 'shape' => 'BucketQosLimitInfo', ],
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
        'PutBucketMaxCountResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'PutBucketMaxCountResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'GetBucketMaxCountResultShape' => [
            'type' => 'structure',
            'members' => [
                'bucketMaxCount' => [ 'type' => 'integer', 'locationName' => 'bucketMaxCount', ],
            ],
        ],
        'OpenServiceResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'SetBucketMaxCount' => [
            'type' => 'structure',
            'members' => [
                'bucketMaxCount' => [ 'type' => 'integer', 'locationName' => 'bucketMaxCount', ],
            ],
        ],
        'DeleteBucketMaxCountResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'PutBucketMaxCountRequestShape' => [
            'type' => 'structure',
            'members' => [
                'bucketMaxCount' => [ 'type' => 'integer', 'locationName' => 'bucketMaxCount', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'userId' => [ 'type' => 'string', 'locationName' => 'userId', ],
            ],
        ],
        'OpenServiceRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'userId' => [ 'type' => 'string', 'locationName' => 'userId', ],
                'appCode' => [ 'type' => 'string', 'locationName' => 'appCode', ],
                'serviceCode' => [ 'type' => 'string', 'locationName' => 'serviceCode', ],
            ],
        ],
        'DeleteBucketMaxCountRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'userId' => [ 'type' => 'string', 'locationName' => 'userId', ],
            ],
        ],
        'GetBucketMaxCountRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'userId' => [ 'type' => 'string', 'locationName' => 'userId', ],
            ],
        ],
        'DeleteBucketMaxCountResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'GetBucketMaxCountResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'GetBucketMaxCountResultShape', ],
            ],
        ],
        'OpenServiceResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
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
        'VpcInfo' => [
            'type' => 'structure',
            'members' => [
                'updateType' => [ 'type' => 'integer', 'locationName' => 'updateType', ],
            ],
        ],
    ],
];
