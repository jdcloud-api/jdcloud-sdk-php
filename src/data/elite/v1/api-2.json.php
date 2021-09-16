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
        'JdxQueryDeliveryInfo' => [
            'name' => 'JdxQueryDeliveryInfo',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/jdxQueryDeliveryInfo',
            ],
            'input' => [ 'shape' => 'JdxQueryDeliveryInfoRequestShape', ],
            'output' => [ 'shape' => 'JdxQueryDeliveryInfoResponseShape', ],
        ],
        'JdxReportOrder' => [
            'name' => 'JdxReportOrder',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/jdxReportOrder',
            ],
            'input' => [ 'shape' => 'JdxReportOrderRequestShape', ],
            'output' => [ 'shape' => 'JdxReportOrderResponseShape', ],
        ],
        'JdxCreateOrder' => [
            'name' => 'JdxCreateOrder',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/jdxCreateOrder',
            ],
            'input' => [ 'shape' => 'JdxCreateOrderRequestShape', ],
            'output' => [ 'shape' => 'JdxCreateOrderResponseShape', ],
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
        'JdxQueryProduct' => [
            'name' => 'JdxQueryProduct',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/jdxQueryProduct',
            ],
            'input' => [ 'shape' => 'JdxQueryProductRequestShape', ],
            'output' => [ 'shape' => 'JdxQueryProductResponseShape', ],
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
    ],
];
