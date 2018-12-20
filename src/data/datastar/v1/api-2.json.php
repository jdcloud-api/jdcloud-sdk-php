<?php
// This file was auto-generated
return [
//    'version' => '',
    'metadata' =>
    [
//        'apiVersion' => '',
//        'endpointPrefix' => 'datastar',
        'protocol' => 'json',
//        'serviceFullName' => 'datastar',
//        'serviceId' => 'datastar',
    ],
    'operations' => [
        'GetLargeScreenData' => [
            'name' => 'GetLargeScreenData',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/largeScreen/getData',
            ],
            'input' => [ 'shape' => 'GetLargeScreenDataRequestShape', ],
            'output' => [ 'shape' => 'GetLargeScreenDataResponseShape', ],
        ],
    ],
    'shapes' => [
        'RegionIndustryData' => [
            'type' => 'structure',
            'members' => [
                'region' => [ 'type' => 'string', 'locationName' => 'region', ],
                'industry' => [ 'type' => 'string', 'locationName' => 'industry', ],
                'firstIndex' => [ 'type' => 'string', 'locationName' => 'firstIndex', ],
                'secondIndex' => [ 'type' => 'string', 'locationName' => 'secondIndex', ],
                'dateTime' => [ 'type' => 'string', 'locationName' => 'dateTime', ],
                'dateType' => [ 'type' => 'string', 'locationName' => 'dateType', ],
                'indexValue' => [ 'type' => 'string', 'locationName' => 'indexValue', ],
                'valueUnit' => [ 'type' => 'string', 'locationName' => 'valueUnit', ],
                'attrType' => [ 'type' => 'string', 'locationName' => 'attrType', ],
                'attrValue' => [ 'type' => 'string', 'locationName' => 'attrValue', ],
                'attrValueExt' => [ 'type' => 'string', 'locationName' => 'attrValueExt', ],
            ],
        ],
        'RegionIndustryDataList' => [
            'type' => 'structure',
            'members' => [
                'dataList' => [ 'type' => 'list', 'member' => [ 'shape' => 'RegionIndustryData', ], ],
            ],
        ],
        'TestOpenApiReq' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
            ],
        ],
        'GetLargeScreenDataRequestShape' => [
            'type' => 'structure',
            'members' => [
                'region' => [ 'type' => 'string', 'locationName' => 'region', ],
                'industry' => [ 'type' => 'string', 'locationName' => 'industry', ],
                'startDate' => [ 'type' => 'string', 'locationName' => 'startDate', ],
                'endDate' => [ 'type' => 'string', 'locationName' => 'endDate', ],
                'firstIndex' => [ 'type' => 'string', 'locationName' => 'firstIndex', ],
                'secondIndex' => [ 'type' => 'string', 'locationName' => 'secondIndex', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'GetLargeScreenDataResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GetLargeScreenDataResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'GetLargeScreenDataResultShape' => [
            'type' => 'structure',
            'members' => [
                'status' => [ 'type' => 'boolean', 'locationName' => 'status', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'data' =>  [ 'shape' => 'RegionIndustryDataList', ],
            ],
        ],
    ],
];
