<?php
// This file was auto-generated
return [
//    'version' => '',
    'metadata' =>
    [
//        'apiVersion' => '',
//        'endpointPrefix' => 'portal',
        'protocol' => 'json',
//        'serviceFullName' => 'portal',
//        'serviceId' => 'portal',
    ],
    'operations' => [
        'DescribeProducts' => [
            'name' => 'DescribeProducts',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/products',
            ],
            'input' => [ 'shape' => 'DescribeProductsRequestShape', ],
            'output' => [ 'shape' => 'DescribeProductsResponseShape', ],
        ],
        'DescribeProduct' => [
            'name' => 'DescribeProduct',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/product',
            ],
            'input' => [ 'shape' => 'DescribeProductRequestShape', ],
            'output' => [ 'shape' => 'DescribeProductResponseShape', ],
        ],
        'DescribeProductsById' => [
            'name' => 'DescribeProductsById',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/getProductsById',
            ],
            'input' => [ 'shape' => 'DescribeProductsByIdRequestShape', ],
            'output' => [ 'shape' => 'DescribeProductsByIdResponseShape', ],
        ],
    ],
    'shapes' => [
        'LinkVo' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'integer', 'locationName' => 'id', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'linkUrl' => [ 'type' => 'string', 'locationName' => 'linkUrl', ],
                'clstag' => [ 'type' => 'string', 'locationName' => 'clstag', ],
                'sort' => [ 'type' => 'integer', 'locationName' => 'sort', ],
                'operator' => [ 'type' => 'string', 'locationName' => 'operator', ],
                'status' => [ 'type' => 'byte', 'locationName' => 'status', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'modifyTime' => [ 'type' => 'string', 'locationName' => 'modifyTime', ],
            ],
        ],
        'Navigation' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'integer', 'locationName' => 'id', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'iconUrl' => [ 'type' => 'string', 'locationName' => 'iconUrl', ],
                'iconClass' => [ 'type' => 'string', 'locationName' => 'iconClass', ],
                'webUrl' => [ 'type' => 'string', 'locationName' => 'webUrl', ],
                'url' => [ 'type' => 'string', 'locationName' => 'url', ],
                'productStatus' => [ 'type' => 'integer', 'locationName' => 'productStatus', ],
                'sort' => [ 'type' => 'integer', 'locationName' => 'sort', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'parentId' => [ 'type' => 'integer', 'locationName' => 'parentId', ],
                'updateTime' => [ 'type' => 'string', 'locationName' => 'updateTime', ],
                'level' => [ 'type' => 'integer', 'locationName' => 'level', ],
                'label' => [ 'type' => 'string', 'locationName' => 'label', ],
                'helpUrl' => [ 'type' => 'string', 'locationName' => 'helpUrl', ],
                'selfRun' => [ 'type' => 'string', 'locationName' => 'selfRun', ],
                'lang' => [ 'type' => 'string', 'locationName' => 'lang', ],
                'extChildren' => [ 'type' => 'list', 'member' => [ 'shape' => 'Navigation', ], ],
            ],
        ],
        'NoticeVo' => [
            'type' => 'structure',
            'members' => [
                'uuid' => [ 'type' => 'integer', 'locationName' => 'uuid', ],
                'id' => [ 'type' => 'integer', 'locationName' => 'id', ],
                'title' => [ 'type' => 'string', 'locationName' => 'title', ],
                'type' => [ 'type' => 'byte', 'locationName' => 'type', ],
                'goTop' => [ 'type' => 'byte', 'locationName' => 'goTop', ],
                'inlet' => [ 'type' => 'byte', 'locationName' => 'inlet', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'updateTime' => [ 'type' => 'string', 'locationName' => 'updateTime', ],
                'createPin' => [ 'type' => 'string', 'locationName' => 'createPin', ],
                'yn' => [ 'type' => 'byte', 'locationName' => 'yn', ],
                'content' => [ 'type' => 'string', 'locationName' => 'content', ],
                'startTime' => [ 'type' => 'string', 'locationName' => 'startTime', ],
                'endTime' => [ 'type' => 'string', 'locationName' => 'endTime', ],
                'site' => [ 'type' => 'integer', 'locationName' => 'site', ],
                'pageNum' => [ 'type' => 'integer', 'locationName' => 'pageNum', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'lang' => [ 'type' => 'string', 'locationName' => 'lang', ],
                'langId' => [ 'type' => 'integer', 'locationName' => 'langId', ],
                'ts' => [ 'type' => 'string', 'locationName' => 'ts', ],
            ],
        ],
        'ProductTxt' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'integer', 'locationName' => 'id', ],
                'productId' => [ 'type' => 'integer', 'locationName' => 'productId', ],
                'templet' => [ 'type' => 'string', 'locationName' => 'templet', ],
                'txt' => [ 'type' => 'string', 'locationName' => 'txt', ],
                'sort' => [ 'type' => 'integer', 'locationName' => 'sort', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'updateTime' => [ 'type' => 'string', 'locationName' => 'updateTime', ],
                'lang' => [ 'type' => 'string', 'locationName' => 'lang', ],
            ],
        ],
        'Product' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'integer', 'locationName' => 'id', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'url' => [ 'type' => 'string', 'locationName' => 'url', ],
                'parentNavigationId' => [ 'type' => 'integer', 'locationName' => 'parentNavigationId', ],
                'navigationId' => [ 'type' => 'integer', 'locationName' => 'navigationId', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'updateTime' => [ 'type' => 'string', 'locationName' => 'updateTime', ],
                'lang' => [ 'type' => 'string', 'locationName' => 'lang', ],
                'txtVoList' => [ 'type' => 'list', 'member' => [ 'shape' => 'ProductTxt', ], ],
            ],
        ],
        'DescribeProductsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeProductsResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeProductsByIdRequestShape' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'integer', 'locationName' => 'id', ],
                'ak' => [ 'type' => 'string', 'locationName' => 'ak', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DescribeProductRequestShape' => [
            'type' => 'structure',
            'members' => [
                'url' => [ 'type' => 'string', 'locationName' => 'url', ],
                'lang' => [ 'type' => 'string', 'locationName' => 'lang', ],
                'ak' => [ 'type' => 'string', 'locationName' => 'ak', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DescribeProductResultShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'Product', ],
            ],
        ],
        'DescribeProductResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeProductResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeProductsByIdResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeProductsByIdResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeProductsByIdResultShape' => [
            'type' => 'structure',
            'members' => [
                'result' => [ 'type' => 'list', 'member' => [ 'shape' => 'Navigation', ], ],
            ],
        ],
        'DescribeProductsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'lang' => [ 'type' => 'string', 'locationName' => 'lang', ],
                'ak' => [ 'type' => 'string', 'locationName' => 'ak', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DescribeProductsResultShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'Navigation', ],
            ],
        ],
    ],
];
