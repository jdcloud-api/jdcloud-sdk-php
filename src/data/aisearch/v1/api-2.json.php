<?php
// This file was auto-generated
return [
//    'version' => '',
    'metadata' =>
    [
//        'apiVersion' => '',
//        'endpointPrefix' => 'aisearch',
        'protocol' => 'json',
//        'serviceFullName' => 'aisearch',
//        'serviceId' => 'aisearch',
    ],
    'operations' => [
        'ExternalWebSearch' => [
            'name' => 'ExternalWebSearch',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/external:webSearch',
            ],
            'input' => [ 'shape' => 'ExternalWebSearchRequestShape', ],
            'output' => [ 'shape' => 'ExternalWebSearchResponseShape', ],
        ],
    ],
    'shapes' => [
        'AccountUsageStatisticsRespVo' => [
            'type' => 'structure',
            'members' => [
                'totalCallCount' => [ 'type' => 'long', 'locationName' => 'totalCallCount', ],
                'todayCallCount' => [ 'type' => 'long', 'locationName' => 'todayCallCount', ],
                'yesterdayCallCount' => [ 'type' => 'long', 'locationName' => 'yesterdayCallCount', ],
                'thisMonthCallCount' => [ 'type' => 'long', 'locationName' => 'thisMonthCallCount', ],
            ],
        ],
        'CallCountDataVo' => [
            'type' => 'structure',
            'members' => [
                'date' => [ 'type' => 'string', 'locationName' => 'date', ],
                'callCount' => [ 'type' => 'long', 'locationName' => 'callCount', ],
            ],
        ],
        'AccountUsageSearchRespVo' => [
            'type' => 'structure',
            'members' => [
                'callCountDataList' => [ 'type' => 'list', 'member' => [ 'shape' => 'CallCountDataVo', ], ],
            ],
        ],
        'AccountBalanceRespVo' => [
            'type' => 'structure',
            'members' => [
                'totalResourcePackageCount' => [ 'type' => 'long', 'locationName' => 'totalResourcePackageCount', ],
                'validResourcePackageCount' => [ 'type' => 'long', 'locationName' => 'validResourcePackageCount', ],
                'invalidResourcePackageCount' => [ 'type' => 'long', 'locationName' => 'invalidResourcePackageCount', ],
                'remainCallTimes' => [ 'type' => 'long', 'locationName' => 'remainCallTimes', ],
            ],
        ],
        'UserApiKeyVo' => [
            'type' => 'structure',
            'members' => [
                'keyNo' => [ 'type' => 'string', 'locationName' => 'keyNo', ],
                'apiKey' => [ 'type' => 'string', 'locationName' => 'apiKey', ],
                'pin' => [ 'type' => 'string', 'locationName' => 'pin', ],
                'userType' => [ 'type' => 'string', 'locationName' => 'userType', ],
                'apiKeyName' => [ 'type' => 'string', 'locationName' => 'apiKeyName', ],
                'createdDate' => [ 'type' => 'string', 'locationName' => 'createdDate', ],
                'deletedFlag' => [ 'type' => 'integer', 'locationName' => 'deletedFlag', ],
            ],
        ],
        'ImageItemVo' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'datePublished' => [ 'type' => 'string', 'locationName' => 'datePublished', ],
                'hostPageUrl' => [ 'type' => 'string', 'locationName' => 'hostPageUrl', ],
                'contentUrl' => [ 'type' => 'string', 'locationName' => 'contentUrl', ],
                'contentSize' => [ 'type' => 'string', 'locationName' => 'contentSize', ],
                'encodingFormat' => [ 'type' => 'string', 'locationName' => 'encodingFormat', ],
                'width' => [ 'type' => 'integer', 'locationName' => 'width', ],
                'height' => [ 'type' => 'integer', 'locationName' => 'height', ],
                'thumbnailUrl' => [ 'type' => 'string', 'locationName' => 'thumbnailUrl', ],
                'thumbnailWidth' => [ 'type' => 'integer', 'locationName' => 'thumbnailWidth', ],
                'thumbnailHeight' => [ 'type' => 'integer', 'locationName' => 'thumbnailHeight', ],
            ],
        ],
        'QueryContextVo' => [
            'type' => 'structure',
            'members' => [
                'query' => [ 'type' => 'string', 'locationName' => 'query', ],
            ],
        ],
        'CloudWebSearchResponseVo' => [
            'type' => 'structure',
            'members' => [
                'queryContext' =>  [ 'shape' => 'QueryContextVo', ],
                'pageItems' => [ 'type' => 'list', 'member' => [ 'shape' => 'PageItemVo', ], ],
                'imageItems' => [ 'type' => 'list', 'member' => [ 'shape' => 'ImageItemVo', ], ],
            ],
        ],
        'PageItemVo' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
                'title' => [ 'type' => 'string', 'locationName' => 'title', ],
                'url' => [ 'type' => 'string', 'locationName' => 'url', ],
                'icon' => [ 'type' => 'string', 'locationName' => 'icon', ],
                'siteName' => [ 'type' => 'string', 'locationName' => 'siteName', ],
                'snippet' => [ 'type' => 'string', 'locationName' => 'snippet', ],
                'summary' => [ 'type' => 'string', 'locationName' => 'summary', ],
                'dateLastCrawled' => [ 'type' => 'string', 'locationName' => 'dateLastCrawled', ],
            ],
        ],
        'ExternalWebSearchResultShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'msg' => [ 'type' => 'string', 'locationName' => 'msg', ],
                'data' =>  [ 'shape' => 'CloudWebSearchResponseVo', ],
            ],
        ],
        'ExternalWebSearchResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'ExternalWebSearchResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ExternalWebSearchRequestShape' => [
            'type' => 'structure',
            'members' => [
                'apiKey' => [ 'type' => 'string', 'locationName' => 'apiKey', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'query' => [ 'type' => 'string', 'locationName' => 'query', ],
                'page' => [ 'type' => 'integer', 'locationName' => 'page', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
            ],
        ],
    ],
];
