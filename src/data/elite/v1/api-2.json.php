<?php
// This file was auto-generated
return [
//    'version' => '',
    'metadata' =>
    [
//        'apiVersion' => '',
//        'endpointPrefix' => 'elite',
        'protocol' => 'json',
//        'serviceFullName' => 'elite',
//        'serviceId' => 'elite',
    ],
    'operations' => [
        'ListSaleService' => [
            'name' => 'ListSaleService',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/listSaleService',
            ],
            'input' => [ 'shape' => 'ListSaleServiceRequestShape', ],
            'output' => [ 'shape' => 'ListSaleServiceResponseShape', ],
        ],
        'GetSaleServiceByDeliverNumber' => [
            'name' => 'GetSaleServiceByDeliverNumber',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/getSaleServiceByDeliverNumber',
            ],
            'input' => [ 'shape' => 'GetSaleServiceByDeliverNumberRequestShape', ],
            'output' => [ 'shape' => 'GetSaleServiceByDeliverNumberResponseShape', ],
        ],
        'ConfirmSaleServiceDelivery' => [
            'name' => 'ConfirmSaleServiceDelivery',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/confirmSaleServiceDelivery',
            ],
            'input' => [ 'shape' => 'ConfirmSaleServiceDeliveryRequestShape', ],
            'output' => [ 'shape' => 'ConfirmSaleServiceDeliveryResponseShape', ],
        ],
    ],
    'shapes' => [
        'ConfirmDeliveryInfo' => [
            'type' => 'structure',
            'members' => [
                'deliverNumber' => [ 'type' => 'string', 'locationName' => 'deliverNumber', ],
                'remark' => [ 'type' => 'string', 'locationName' => 'remark', ],
            ],
        ],
        'ProductServiceVo' => [
            'type' => 'structure',
            'members' => [
                'deliverNumber' => [ 'type' => 'string', 'locationName' => 'deliverNumber', ],
                'orderNumber' => [ 'type' => 'string', 'locationName' => 'orderNumber', ],
                'productId' => [ 'type' => 'integer', 'locationName' => 'productId', ],
                'skuId' => [ 'type' => 'integer', 'locationName' => 'skuId', ],
                'skuName' => [ 'type' => 'string', 'locationName' => 'skuName', ],
                'serviceCode' => [ 'type' => 'string', 'locationName' => 'serviceCode', ],
                'num' => [ 'type' => 'integer', 'locationName' => 'num', ],
                'period' => [ 'type' => 'integer', 'locationName' => 'period', ],
                'periodType' => [ 'type' => 'integer', 'locationName' => 'periodType', ],
                'periodTypeName' => [ 'type' => 'string', 'locationName' => 'periodTypeName', ],
                'accountNum' => [ 'type' => 'integer', 'locationName' => 'accountNum', ],
                'deliverStatus' => [ 'type' => 'integer', 'locationName' => 'deliverStatus', ],
                'deliverStatusName' => [ 'type' => 'string', 'locationName' => 'deliverStatusName', ],
                'effectiveDt' => [ 'type' => 'string', 'locationName' => 'effectiveDt', ],
                'failureDt' => [ 'type' => 'string', 'locationName' => 'failureDt', ],
                'extraInfo' => [ 'type' => 'string', 'locationName' => 'extraInfo', ],
                'remark' => [ 'type' => 'string', 'locationName' => 'remark', ],
            ],
        ],
        'ProductServiceVoListData' => [
            'type' => 'structure',
            'members' => [
                'pageNo' => [ 'type' => 'integer', 'locationName' => 'pageNo', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'totalRecord' => [ 'type' => 'integer', 'locationName' => 'totalRecord', ],
                'totalPage' => [ 'type' => 'integer', 'locationName' => 'totalPage', ],
                'dataList' => [ 'type' => 'list', 'member' => [ 'shape' => 'ProductServiceVo', ], ],
            ],
        ],
        'GetSaleServiceByDeliverNumberResultShape' => [
            'type' => 'structure',
            'members' => [
                'status' => [ 'type' => 'boolean', 'locationName' => 'status', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'data' =>  [ 'shape' => 'ProductServiceVo', ],
            ],
        ],
        'GetSaleServiceByDeliverNumberResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GetSaleServiceByDeliverNumberResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ConfirmSaleServiceDeliveryResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'ConfirmSaleServiceDeliveryResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ConfirmSaleServiceDeliveryResultShape' => [
            'type' => 'structure',
            'members' => [
                'status' => [ 'type' => 'boolean', 'locationName' => 'status', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
            ],
        ],
        'ListSaleServiceRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNo' => [ 'type' => 'integer', 'locationName' => 'pageNo', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'deliverNumber' => [ 'type' => 'string', 'locationName' => 'deliverNumber', ],
                'deliverStatus' => [ 'type' => 'integer', 'locationName' => 'deliverStatus', ],
                'createDtStart' => [ 'type' => 'string', 'locationName' => 'createDtStart', ],
                'createDtEnd' => [ 'type' => 'string', 'locationName' => 'createDtEnd', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'ListSaleServiceResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'ListSaleServiceResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ConfirmSaleServiceDeliveryRequestShape' => [
            'type' => 'structure',
            'members' => [
                'confirmDeliveryInfo' =>  [ 'shape' => 'ConfirmDeliveryInfo', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'ListSaleServiceResultShape' => [
            'type' => 'structure',
            'members' => [
                'status' => [ 'type' => 'boolean', 'locationName' => 'status', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'data' =>  [ 'shape' => 'ProductServiceVoListData', ],
            ],
        ],
        'GetSaleServiceByDeliverNumberRequestShape' => [
            'type' => 'structure',
            'members' => [
                'deliverNumber' => [ 'type' => 'string', 'locationName' => 'deliverNumber', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
    ],
];
