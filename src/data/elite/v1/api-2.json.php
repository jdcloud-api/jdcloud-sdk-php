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
        'JdxReportOrder' => [
            'name' => 'JdxReportOrder',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/jdxReportOrder',
            ],
            'input' => [ 'shape' => 'JdxReportOrderRequestShape', ],
            'output' => [ 'shape' => 'JdxReportOrderResponseShape', ],
        ],
        'JdxQueryPrice' => [
            'name' => 'JdxQueryPrice',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/jdxQueryPrice',
            ],
            'input' => [ 'shape' => 'JdxQueryPriceRequestShape', ],
            'output' => [ 'shape' => 'JdxQueryPriceResponseShape', ],
        ],
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
        'GetStoreService' => [
            'name' => 'GetStoreService',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/getStoreService',
            ],
            'input' => [ 'shape' => 'GetStoreServiceRequestShape', ],
            'output' => [ 'shape' => 'GetStoreServiceResponseShape', ],
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
        'OrderItemExtraChargeInfo' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'unit' => [ 'type' => 'string', 'locationName' => 'unit', ],
                'buyNum' => [ 'type' => 'integer', 'locationName' => 'buyNum', ],
                'sellingPrice' => [ 'type' => 'string', 'locationName' => 'sellingPrice', ],
                'settlementPrice' => [ 'type' => 'string', 'locationName' => 'settlementPrice', ],
            ],
        ],
        'OrderPriceProtocolVo' => [
            'type' => 'structure',
            'members' => [
                'resourceId' => [ 'type' => 'string', 'locationName' => 'resourceId', ],
                'serviceCode' => [ 'type' => 'string', 'locationName' => 'serviceCode', ],
                'region' => [ 'type' => 'string', 'locationName' => 'region', ],
                'billingType' => [ 'type' => 'integer', 'locationName' => 'billingType', ],
                'formula' => [ 'type' => 'list', 'member' => [ 'shape' => 'OrderResourceFormulaVo', ], ],
                'count' => [ 'type' => 'integer', 'locationName' => 'count', ],
                'timeSpan' => [ 'type' => 'integer', 'locationName' => 'timeSpan', ],
                'timeUnit' => [ 'type' => 'integer', 'locationName' => 'timeUnit', ],
                'networkOperator' => [ 'type' => 'integer', 'locationName' => 'networkOperator', ],
                'pin' => [ 'type' => 'string', 'locationName' => 'pin', ],
                'startTime' => [ 'type' => 'string', 'locationName' => 'startTime', ],
                'endTime' => [ 'type' => 'string', 'locationName' => 'endTime', ],
            ],
        ],
        'OrderResourceFormulaVo' => [
            'type' => 'structure',
            'members' => [
                'key' => [ 'type' => 'string', 'locationName' => 'key', ],
                'value' => [ 'type' => 'double', 'locationName' => 'value', ],
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
                'orderTotalFee' => [ 'type' => 'string', 'locationName' => 'orderTotalFee', ],
                'orderActualFee' => [ 'type' => 'string', 'locationName' => 'orderActualFee', ],
                'paymentDt' => [ 'type' => 'string', 'locationName' => 'paymentDt', ],
                'extraChargeInfo' => [ 'type' => 'string', 'locationName' => 'extraChargeInfo', ],
                'orderItemExtraChargeInfos' => [ 'type' => 'list', 'member' => [ 'shape' => 'OrderItemExtraChargeInfo', ], ],
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
        'QueryPriceParam' => [
            'type' => 'structure',
            'members' => [
                'cmd' => [ 'type' => 'integer', 'locationName' => 'cmd', ],
                'packageCount' => [ 'type' => 'integer', 'locationName' => 'packageCount', ],
                'orderList' => [ 'type' => 'list', 'member' => [ 'shape' => 'OrderPriceProtocolVo', ], ],
            ],
        ],
        'QueryPriceResultVo' => [
            'type' => 'structure',
            'members' => [
                'totalPrice' => [ 'type' => 'double', 'locationName' => 'totalPrice', ],
                'totalPriceScale4' => [ 'type' => 'double', 'locationName' => 'totalPriceScale4', ],
                'discountedTotalPrice' => [ 'type' => 'double', 'locationName' => 'discountedTotalPrice', ],
                'totalDiscount' => [ 'type' => 'double', 'locationName' => 'totalDiscount', ],
                'totalOriginalPrice' => [ 'type' => 'double', 'locationName' => 'totalOriginalPrice', ],
                'remark' => [ 'type' => 'string', 'locationName' => 'remark', ],
            ],
        ],
        'ReportOrderInfo' => [
            'type' => 'structure',
            'members' => [
                'orderNumber' => [ 'type' => 'string', 'locationName' => 'orderNumber', ],
                'distributorAccount' => [ 'type' => 'string', 'locationName' => 'distributorAccount', ],
                'distributorName' => [ 'type' => 'string', 'locationName' => 'distributorName', ],
                'extraInfo' => [ 'type' => 'string', 'locationName' => 'extraInfo', ],
            ],
        ],
        'StoreServiceDetailVo' => [
            'type' => 'structure',
            'members' => [
                'spuId' => [ 'type' => 'integer', 'locationName' => 'spuId', ],
                'skuId' => [ 'type' => 'integer', 'locationName' => 'skuId', ],
                'storeDays' => [ 'type' => 'integer', 'locationName' => 'storeDays', ],
                'startTime' => [ 'type' => 'string', 'locationName' => 'startTime', ],
                'endTime' => [ 'type' => 'string', 'locationName' => 'endTime', ],
            ],
        ],
        'StoreServiceVo' => [
            'type' => 'structure',
            'members' => [
                'buyerPin' => [ 'type' => 'string', 'locationName' => 'buyerPin', ],
                'businessData' => [ 'type' => 'string', 'locationName' => 'businessData', ],
                'storeServiceDetails' => [ 'type' => 'list', 'member' => [ 'shape' => 'StoreServiceDetailVo', ], ],
                'orderNum' => [ 'type' => 'integer', 'locationName' => 'orderNum', ],
                'updateTime' => [ 'type' => 'string', 'locationName' => 'updateTime', ],
            ],
        ],
        'JdxReportOrderResultShape' => [
            'type' => 'structure',
            'members' => [
                'status' => [ 'type' => 'boolean', 'locationName' => 'status', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
            ],
        ],
        'JdxReportOrderRequestShape' => [
            'type' => 'structure',
            'members' => [
                'reportOrderInfo' =>  [ 'shape' => 'ReportOrderInfo', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'JdxReportOrderResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'JdxReportOrderResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'JdxQueryPriceRequestShape' => [
            'type' => 'structure',
            'members' => [
                'queryPriceParam' =>  [ 'shape' => 'QueryPriceParam', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'JdxQueryPriceResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'JdxQueryPriceResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'JdxQueryPriceResultShape' => [
            'type' => 'structure',
            'members' => [
                'status' => [ 'type' => 'boolean', 'locationName' => 'status', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'data' =>  [ 'shape' => 'QueryPriceResultVo', ],
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
        'GetStoreServiceResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GetStoreServiceResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'GetStoreServiceResultShape' => [
            'type' => 'structure',
            'members' => [
                'status' => [ 'type' => 'boolean', 'locationName' => 'status', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'data' =>  [ 'shape' => 'StoreServiceVo', ],
            ],
        ],
        'GetStoreServiceRequestShape' => [
            'type' => 'structure',
            'members' => [
                'buyerPin' => [ 'type' => 'string', 'locationName' => 'buyerPin', ],
                'businessData' => [ 'type' => 'string', 'locationName' => 'businessData', ],
                'queryAll' => [ 'type' => 'boolean', 'locationName' => 'queryAll', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
    ],
];
