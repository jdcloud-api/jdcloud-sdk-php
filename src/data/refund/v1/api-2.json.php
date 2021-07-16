<?php
// This file was auto-generated
return [
//    'version' => '',
    'metadata' =>
    [
//        'apiVersion' => '',
//        'endpointPrefix' => 'refund',
        'protocol' => 'json',
//        'serviceFullName' => 'refund',
//        'serviceId' => 'refund',
    ],
    'operations' => [
        'SubmitResourceRefund' => [
            'name' => 'SubmitResourceRefund',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/refund:resource',
            ],
            'input' => [ 'shape' => 'SubmitResourceRefundRequestShape', ],
            'output' => [ 'shape' => 'SubmitResourceRefundResponseShape', ],
        ],
        'DescirbeRefundStatus' => [
            'name' => 'DescirbeRefundStatus',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/refund:status',
            ],
            'input' => [ 'shape' => 'DescirbeRefundStatusRequestShape', ],
            'output' => [ 'shape' => 'DescirbeRefundStatusResponseShape', ],
        ],
    ],
    'shapes' => [
        'PageInfos' => [
            'type' => 'structure',
            'members' => [
                'currentPage' => [ 'type' => 'integer', 'locationName' => 'currentPage', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'totalRecord' => [ 'type' => 'long', 'locationName' => 'totalRecord', ],
            ],
        ],
        'RefundRecordResp' => [
            'type' => 'structure',
            'members' => [
                'isSuccess' => [ 'type' => 'boolean', 'locationName' => 'isSuccess', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'data' => [ 'type' => 'object', 'locationName' => 'data', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
            ],
        ],
        'RefundRecordOrderItemVo' => [
            'type' => 'structure',
            'members' => [
                'refundId' => [ 'type' => 'string', 'locationName' => 'refundId', ],
                'resourceId' => [ 'type' => 'string', 'locationName' => 'resourceId', ],
                'resourceName' => [ 'type' => 'string', 'locationName' => 'resourceName', ],
                'orderNumber' => [ 'type' => 'string', 'locationName' => 'orderNumber', ],
                'orderSubNumber' => [ 'type' => 'string', 'locationName' => 'orderSubNumber', ],
                'orderItemNumber' => [ 'type' => 'string', 'locationName' => 'orderItemNumber', ],
                'totalFee' => [ 'type' => 'double', 'locationName' => 'totalFee', ],
                'discountFee' => [ 'type' => 'double', 'locationName' => 'discountFee', ],
                'actualFee' => [ 'type' => 'double', 'locationName' => 'actualFee', ],
                'couponFee' => [ 'type' => 'double', 'locationName' => 'couponFee', ],
                'balanceFee' => [ 'type' => 'double', 'locationName' => 'balanceFee', ],
                'cashFee' => [ 'type' => 'double', 'locationName' => 'cashFee', ],
                'couponRefundFee' => [ 'type' => 'double', 'locationName' => 'couponRefundFee', ],
                'balanceRefundFee' => [ 'type' => 'double', 'locationName' => 'balanceRefundFee', ],
                'cashRefundFee' => [ 'type' => 'double', 'locationName' => 'cashRefundFee', ],
                'refundFee' => [ 'type' => 'double', 'locationName' => 'refundFee', ],
                'chooseFlag' => [ 'type' => 'integer', 'locationName' => 'chooseFlag', ],
                'orderType' => [ 'type' => 'integer', 'locationName' => 'orderType', ],
                'chargeMode' => [ 'type' => 'integer', 'locationName' => 'chargeMode', ],
                'merchantId' => [ 'type' => 'integer', 'locationName' => 'merchantId', ],
                'cashRefundChannel' => [ 'type' => 'integer', 'locationName' => 'cashRefundChannel', ],
                'serviceCode' => [ 'type' => 'string', 'locationName' => 'serviceCode', ],
                'appCode' => [ 'type' => 'string', 'locationName' => 'appCode', ],
            ],
        ],
        'RefundsStrategyDTO' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'integer', 'locationName' => 'id', ],
                'strategyType' => [ 'type' => 'integer', 'locationName' => 'strategyType', ],
                'refundChannelSwitch' => [ 'type' => 'integer', 'locationName' => 'refundChannelSwitch', ],
                'refundWaySwitch' => [ 'type' => 'integer', 'locationName' => 'refundWaySwitch', ],
                'refundAreaSwitch' => [ 'type' => 'integer', 'locationName' => 'refundAreaSwitch', ],
                'invoiceStatusSwitch' => [ 'type' => 'integer', 'locationName' => 'invoiceStatusSwitch', ],
                'approveSwitch' => [ 'type' => 'integer', 'locationName' => 'approveSwitch', ],
                'refundOrderSwitch' => [ 'type' => 'integer', 'locationName' => 'refundOrderSwitch', ],
                'serviceCode' => [ 'type' => 'string', 'locationName' => 'serviceCode', ],
                'priority' => [ 'type' => 'integer', 'locationName' => 'priority', ],
                'status' => [ 'type' => 'integer', 'locationName' => 'status', ],
                'refundType' => [ 'type' => 'integer', 'locationName' => 'refundType', ],
                'permissionList' => [ 'type' => 'string', 'locationName' => 'permissionList', ],
            ],
        ],
        'RefundsStrategyVo' => [
            'type' => 'structure',
            'members' => [
                'strategyId' => [ 'type' => 'integer', 'locationName' => 'strategyId', ],
                'strategyType' => [ 'type' => 'integer', 'locationName' => 'strategyType', ],
                'refundChannelSwitch' => [ 'type' => 'integer', 'locationName' => 'refundChannelSwitch', ],
                'refundWaySwitch' => [ 'type' => 'integer', 'locationName' => 'refundWaySwitch', ],
                'refundAreaSwitch' => [ 'type' => 'integer', 'locationName' => 'refundAreaSwitch', ],
                'invoiceStatusSwitch' => [ 'type' => 'integer', 'locationName' => 'invoiceStatusSwitch', ],
                'approveSwitch' => [ 'type' => 'integer', 'locationName' => 'approveSwitch', ],
                'refundOrderSwitch' => [ 'type' => 'integer', 'locationName' => 'refundOrderSwitch', ],
                'serviceCode' => [ 'type' => 'string', 'locationName' => 'serviceCode', ],
                'priority' => [ 'type' => 'integer', 'locationName' => 'priority', ],
                'status' => [ 'type' => 'integer', 'locationName' => 'status', ],
                'refundType' => [ 'type' => 'integer', 'locationName' => 'refundType', ],
            ],
        ],
        'ResourceRefundResp' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'data' => [ 'type' => 'string', 'locationName' => 'data', ],
                'page' => [ 'type' => 'string', 'locationName' => 'page', ],
            ],
        ],
        'ResourceRefundReq' => [
            'type' => 'structure',
            'members' => [
                'refundType' => [ 'type' => 'object', 'locationName' => 'refundType', ],
                'resourceId' => [ 'type' => 'string', 'locationName' => 'resourceId', ],
                'refundChannel' => [ 'type' => 'integer', 'locationName' => 'refundChannel', ],
                'refundWay' => [ 'type' => 'integer', 'locationName' => 'refundWay', ],
                'refundReason' => [ 'type' => 'integer', 'locationName' => 'refundReason', ],
                'refundReasonOther' => [ 'type' => 'string', 'locationName' => 'refundReasonOther', ],
                'refundArea' => [ 'type' => 'integer', 'locationName' => 'refundArea', ],
            ],
        ],
        'SubmitResourceRefundResultShape' => [
            'type' => 'structure',
            'members' => [
                'success' => [ 'type' => 'boolean', 'locationName' => 'success', ],
                'code' => [ 'type' => 'integer', 'locationName' => 'code', ],
                'data' => [ 'type' => 'string', 'locationName' => 'data', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
            ],
        ],
        'DescirbeRefundStatusResultShape' => [
            'type' => 'structure',
            'members' => [
                'pageInfos' =>  [ 'shape' => 'PageInfos', ],
                'data' => [ 'type' => 'list', 'member' => [ 'shape' => 'RefundResult', ], ],
            ],
        ],
        'RefundResult' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'long', 'locationName' => 'id', ],
                'pin' => [ 'type' => 'string', 'locationName' => 'pin', ],
                'refundId' => [ 'type' => 'string', 'locationName' => 'refundId', ],
                'resourceId' => [ 'type' => 'string', 'locationName' => 'resourceId', ],
                'recordNumberList' => [ 'type' => 'string', 'locationName' => 'recordNumberList', ],
                'refundAmount' => [ 'type' => 'string', 'locationName' => 'refundAmount', ],
                'status' => [ 'type' => 'byte', 'locationName' => 'status', ],
                'createTime' => [ 'type' => 'date', 'locationName' => 'createTime', ],
                'updateTime' => [ 'type' => 'date', 'locationName' => 'updateTime', ],
            ],
        ],
        'SubmitResourceRefundRequestShape' => [
            'type' => 'structure',
            'members' => [
                'jsonBody' =>  [ 'shape' => 'ResourceRefundReq', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DescirbeRefundStatusResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescirbeRefundStatusResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescirbeRefundStatusRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pin' => [ 'type' => 'string', 'locationName' => 'pin', ],
                'refundId' => [ 'type' => 'string', 'locationName' => 'refundId', ],
                'resourceId' => [ 'type' => 'string', 'locationName' => 'resourceId', ],
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'SubmitResourceRefundResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'SubmitResourceRefundResultShape', ],
            ],
        ],
    ],
];
