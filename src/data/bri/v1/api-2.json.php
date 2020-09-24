<?php
// This file was auto-generated
return [
//    'version' => '',
    'metadata' =>
    [
//        'apiVersion' => '',
//        'endpointPrefix' => 'bri',
        'protocol' => 'json',
//        'serviceFullName' => 'bri',
//        'serviceId' => 'bri',
    ],
    'operations' => [
        'DescribeBWList' => [
            'name' => 'DescribeBWList',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/blackwhite:list',
            ],
            'input' => [ 'shape' => 'DescribeBWListRequestShape', ],
            'output' => [ 'shape' => 'DescribeBWListResponseShape', ],
        ],
        'SetBWList' => [
            'name' => 'SetBWList',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/blackwhite:list',
            ],
            'input' => [ 'shape' => 'SetBWListRequestShape', ],
            'output' => [ 'shape' => 'SetBWListResponseShape', ],
        ],
        'DelBWList' => [
            'name' => 'DelBWList',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/regions/{regionId}/blackwhite:list',
            ],
            'input' => [ 'shape' => 'DelBWListRequestShape', ],
            'output' => [ 'shape' => 'DelBWListResponseShape', ],
        ],
        'CreditScore' => [
            'name' => 'CreditScore',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/creditScore:check',
            ],
            'input' => [ 'shape' => 'CreditScoreRequestShape', ],
            'output' => [ 'shape' => 'CreditScoreResponseShape', ],
        ],
    ],
    'shapes' => [
        'OrderReq' => [
            'type' => 'structure',
            'members' => [
                'region' => [ 'type' => 'string', 'locationName' => 'region', ],
                'buyType' => [ 'type' => 'integer', 'locationName' => 'buyType', ],
                'timeSpan' => [ 'type' => 'integer', 'locationName' => 'timeSpan', ],
                'timeUnit' => [ 'type' => 'string', 'locationName' => 'timeUnit', ],
                'startTime' => [ 'type' => 'integer', 'locationName' => 'startTime', ],
                'packageType' => [ 'type' => 'integer', 'locationName' => 'packageType', ],
                'returnURL' => [ 'type' => 'string', 'locationName' => 'returnURL', ],
            ],
        ],
        'GetPriceReq' => [
            'type' => 'structure',
            'members' => [
                'region' => [ 'type' => 'string', 'locationName' => 'region', ],
                'buyType' => [ 'type' => 'integer', 'locationName' => 'buyType', ],
                'timeSpan' => [ 'type' => 'integer', 'locationName' => 'timeSpan', ],
                'timeUnit' => [ 'type' => 'string', 'locationName' => 'timeUnit', ],
                'packageType' => [ 'type' => 'integer', 'locationName' => 'packageType', ],
            ],
        ],
        'BwcfgSet' => [
            'type' => 'structure',
            'members' => [
                'action' => [ 'type' => 'string', 'locationName' => 'action', ],
                'item' => [ 'type' => 'list', 'member' => [ 'shape' => 'Bwcfg', ], ],
            ],
        ],
        'Bwcfg' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'integer', 'locationName' => 'id', ],
                'content' => [ 'type' => 'string', 'locationName' => 'content', ],
                'bwType' => [ 'type' => 'string', 'locationName' => 'bwType', ],
                'resourceType' => [ 'type' => 'string', 'locationName' => 'resourceType', ],
            ],
        ],
        'CreditTask' => [
            'type' => 'structure',
            'members' => [
                'dataId' => [ 'type' => 'string', 'locationName' => 'dataId', ],
                'content' => [ 'type' => 'string', 'locationName' => 'content', ],
                'resourceType' => [ 'type' => 'string', 'locationName' => 'resourceType', ],
            ],
        ],
        'CreditScoreDetail' => [
            'type' => 'structure',
            'members' => [
                'riskTag' => [ 'type' => 'string', 'locationName' => 'riskTag', ],
                'riskCode' => [ 'type' => 'string', 'locationName' => 'riskCode', ],
                'riskClass' => [ 'type' => 'string', 'locationName' => 'riskClass', ],
                'score' => [ 'type' => 'string', 'locationName' => 'score', ],
                'scoreDesc' => [ 'type' => 'string', 'locationName' => 'scoreDesc', ],
            ],
        ],
        'OrderInfo' => [
            'type' => 'structure',
            'members' => [
                'pin' => [ 'type' => 'string', 'locationName' => 'pin', ],
                'packageType' => [ 'type' => 'string', 'locationName' => 'packageType', ],
                'validity' => [ 'type' => 'string', 'locationName' => 'validity', ],
                'specs' => [ 'type' => 'string', 'locationName' => 'specs', ],
                'quantity' => [ 'type' => 'integer', 'locationName' => 'quantity', ],
                'totalFee' => [ 'type' => 'string', 'locationName' => 'totalFee', ],
                'payTime' => [ 'type' => 'string', 'locationName' => 'payTime', ],
            ],
        ],
        'PackInfo' => [
            'type' => 'structure',
            'members' => [
                'packageType' => [ 'type' => 'string', 'locationName' => 'packageType', ],
                'from' => [ 'type' => 'integer', 'locationName' => 'from', ],
                'totalAmount' => [ 'type' => 'string', 'locationName' => 'totalAmount', ],
                'balanceAmount' => [ 'type' => 'string', 'locationName' => 'balanceAmount', ],
                'startTime' => [ 'type' => 'string', 'locationName' => 'startTime', ],
                'endTime' => [ 'type' => 'string', 'locationName' => 'endTime', ],
                'packId' => [ 'type' => 'string', 'locationName' => 'packId', ],
            ],
        ],
        'ApplicationInfo' => [
            'type' => 'structure',
            'members' => [
                'valid' => [ 'type' => 'integer', 'locationName' => 'valid', ],
            ],
        ],
        'DataStatement' => [
            'type' => 'structure',
            'members' => [
                'time' => [ 'type' => 'string', 'locationName' => 'time', ],
                'data' =>  [ 'shape' => 'DataOverview', ],
            ],
        ],
        'ResourceDataOverview' => [
            'type' => 'structure',
            'members' => [
                'total' => [ 'type' => 'integer', 'locationName' => 'total', ],
                'consume' => [ 'type' => 'integer', 'locationName' => 'consume', ],
                'detail' =>  [ 'shape' => 'ResourceDetail', ],
            ],
        ],
        'ResourceDetail' => [
            'type' => 'structure',
            'members' => [
                'ip' => [ 'type' => 'integer', 'locationName' => 'ip', ],
                'addr' => [ 'type' => 'integer', 'locationName' => 'addr', ],
                'eid' => [ 'type' => 'integer', 'locationName' => 'eid', ],
                'phone' => [ 'type' => 'integer', 'locationName' => 'phone', ],
                'pin' => [ 'type' => 'integer', 'locationName' => 'pin', ],
                'card' => [ 'type' => 'integer', 'locationName' => 'card', ],
            ],
        ],
        'DataOverview' => [
            'type' => 'structure',
            'members' => [
                'total' => [ 'type' => 'integer', 'locationName' => 'total', ],
                'consume' => [ 'type' => 'integer', 'locationName' => 'consume', ],
                'detail' =>  [ 'shape' => 'RiskDetail', ],
            ],
        ],
        'RiskDetail' => [
            'type' => 'structure',
            'members' => [
                'meRisk' => [ 'type' => 'integer', 'locationName' => 'meRisk', ],
                'lowRisk' => [ 'type' => 'integer', 'locationName' => 'lowRisk', ],
                'medLoRisk' => [ 'type' => 'integer', 'locationName' => 'medLoRisk', ],
                'medHiRisk' => [ 'type' => 'integer', 'locationName' => 'medHiRisk', ],
                'hiRisk' => [ 'type' => 'integer', 'locationName' => 'hiRisk', ],
                'unknown' => [ 'type' => 'integer', 'locationName' => 'unknown', ],
            ],
        ],
        'AmountStatistics' => [
            'type' => 'structure',
            'members' => [
                'free' => [ 'type' => 'integer', 'locationName' => 'free', ],
                'charge' => [ 'type' => 'integer', 'locationName' => 'charge', ],
                'total' => [ 'type' => 'integer', 'locationName' => 'total', ],
            ],
        ],
        'UserDetail' => [
            'type' => 'structure',
            'members' => [
                'pin' => [ 'type' => 'string', 'locationName' => 'pin', ],
                'updateTime' => [ 'type' => 'string', 'locationName' => 'updateTime', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'userType' => [ 'type' => 'string', 'locationName' => 'userType', ],
                'usedAmount' => [ 'type' => 'double', 'locationName' => 'usedAmount', ],
                'packagesAmount' => [ 'type' => 'integer', 'locationName' => 'packagesAmount', ],
                'tracking' => [ 'type' => 'string', 'locationName' => 'tracking', ],
            ],
        ],
        'DelBWListResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DescribeBWListResultShape' => [
            'type' => 'structure',
            'members' => [
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
                'index' => [ 'type' => 'integer', 'locationName' => 'index', ],
                'size' => [ 'type' => 'integer', 'locationName' => 'size', ],
                'list' => [ 'type' => 'list', 'member' => [ 'shape' => 'Bwcfg', ], ],
            ],
        ],
        'SetBWListResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'SetBWListRequestShape' => [
            'type' => 'structure',
            'members' => [
                'req' =>  [ 'shape' => 'BwcfgSet', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DelBWListResponseShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DescribeBWListRequestShape' => [
            'type' => 'structure',
            'members' => [
                'resourceType' => [ 'type' => 'string', 'locationName' => 'resourceType', ],
                'bwType' => [ 'type' => 'string', 'locationName' => 'bwType', ],
                'size' => [ 'type' => 'integer', 'locationName' => 'size', ],
                'index' => [ 'type' => 'integer', 'locationName' => 'index', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'SetBWListResponseShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DescribeBWListResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeBWListResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DelBWListRequestShape' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'CreditScoreResultShape' => [
            'type' => 'structure',
            'members' => [
                'data' => [ 'type' => 'list', 'member' => [ 'shape' => 'CreditResult', ], ],
            ],
        ],
        'CreditResult' => [
            'type' => 'structure',
            'members' => [
                'success' => [ 'type' => 'boolean', 'locationName' => 'success', ],
                'failMsg' => [ 'type' => 'string', 'locationName' => 'failMsg', ],
                'dataId' => [ 'type' => 'string', 'locationName' => 'dataId', ],
                'inBWList' => [ 'type' => 'string', 'locationName' => 'inBWList', ],
                'content' => [ 'type' => 'string', 'locationName' => 'content', ],
                'resourceType' => [ 'type' => 'string', 'locationName' => 'resourceType', ],
                'scoreDetail' =>  [ 'shape' => 'CreditScoreDetail', ],
            ],
        ],
        'CreditScoreResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'CreditScoreResultShape', ],
            ],
        ],
        'CreditScoreRequestShape' => [
            'type' => 'structure',
            'members' => [
                'tasks' => [ 'type' => 'list', 'member' => [ 'shape' => 'CreditTask', ], ],
            ],
        ],
        'DataResult' => [
            'type' => 'structure',
            'members' => [
                'timestamp' => [ 'type' => 'integer', 'locationName' => 'timestamp', ],
                'resourceType' => [ 'type' => 'string', 'locationName' => 'resourceType', ],
                'content' => [ 'type' => 'string', 'locationName' => 'content', ],
                'riskLevel' => [ 'type' => 'integer', 'locationName' => 'riskLevel', ],
                'riskTag' => [ 'type' => 'string', 'locationName' => 'riskTag', ],
            ],
        ],
    ],
];
