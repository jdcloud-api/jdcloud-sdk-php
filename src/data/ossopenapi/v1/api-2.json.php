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
    ],
    'shapes' => [
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
                'setHeaders' => [ 'type' => 'object', 'locationName' => 'setHeaders', ],
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
    ],
];
