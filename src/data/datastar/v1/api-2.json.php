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
        'GetPackageId' => [
            'name' => 'GetPackageId',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/dmp/getPackageId',
            ],
            'input' => [ 'shape' => 'GetPackageIdRequestShape', ],
            'output' => [ 'shape' => 'GetPackageIdResponseShape', ],
        ],
        'GetLargeScreenData' => [
            'name' => 'GetLargeScreenData',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/largeScreen/getData',
            ],
            'input' => [ 'shape' => 'GetLargeScreenDataRequestShape', ],
            'output' => [ 'shape' => 'GetLargeScreenDataResponseShape', ],
        ],
        'Create' => [
            'name' => 'Create',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/v1/regions/{regionId}/profileMultiLevel/create',
            ],
            'input' => [ 'shape' => 'CreateRequestShape', ],
            'output' => [ 'shape' => 'CreateResponseShape', ],
        ],
        'GetResult' => [
            'name' => 'GetResult',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/v1/regions/{regionId}/profileMultiLevel/getResult',
            ],
            'input' => [ 'shape' => 'GetResultRequestShape', ],
            'output' => [ 'shape' => 'GetResultResponseShape', ],
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
        'GetPackageIdRequestShape' => [
            'type' => 'structure',
            'members' => [
                'deviceIds' => [ 'type' => 'string', 'locationName' => 'deviceIds', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'GetPackageIdResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GetPackageIdResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'GetPackageIdResultShape' => [
            'type' => 'structure',
            'members' => [
                'status' => [ 'type' => 'boolean', 'locationName' => 'status', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'data' => [ 'type' => 'string', 'locationName' => 'data', ],
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
        'GetResultResultShape' => [
            'type' => 'structure',
            'members' => [
                'status' => [ 'type' => 'boolean', 'locationName' => 'status', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'data' => [ 'type' => 'string', 'locationName' => 'data', ],
            ],
        ],
        'CreateRequestShape' => [
            'type' => 'structure',
            'members' => [
                'mallId' => [ 'type' => 'string', 'locationName' => 'mallId', ],
                'profileId' => [ 'type' => 'string', 'locationName' => 'profileId', ],
                'dimensions' => [ 'type' => 'string', 'locationName' => 'dimensions', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'GetResultRequestShape' => [
            'type' => 'structure',
            'members' => [
                'profileSelectRecordId' => [ 'type' => 'string', 'locationName' => 'profileSelectRecordId', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'CreateResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'CreateResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'CreateResultShape' => [
            'type' => 'structure',
            'members' => [
                'status' => [ 'type' => 'boolean', 'locationName' => 'status', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'data' => [ 'type' => 'string', 'locationName' => 'data', ],
            ],
        ],
        'GetResultResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GetResultResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
    ],
];
