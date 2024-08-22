<?php
// This file was auto-generated
return [
//    'version' => '',
    'metadata' =>
    [
//        'apiVersion' => '',
//        'endpointPrefix' => 'invoice',
        'protocol' => 'json',
//        'serviceFullName' => 'invoice',
//        'serviceId' => 'invoice',
    ],
    'operations' => [
        'DescribeAddresses' => [
            'name' => 'DescribeAddresses',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v2/regions/{regionId}/addresses',
            ],
            'input' => [ 'shape' => 'DescribeAddressesRequestShape', ],
            'output' => [ 'shape' => 'DescribeAddressesResponseShape', ],
        ],
        'DescribeChildrenArea' => [
            'name' => 'DescribeChildrenArea',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v2/regions/{regionId}/areas/{parentId}',
            ],
            'input' => [ 'shape' => 'DescribeChildrenAreaRequestShape', ],
            'output' => [ 'shape' => 'DescribeChildrenAreaResponseShape', ],
        ],
        'DescribeAddress' => [
            'name' => 'DescribeAddress',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v2/regions/{regionId}/address/{id}',
            ],
            'input' => [ 'shape' => 'DescribeAddressRequestShape', ],
            'output' => [ 'shape' => 'DescribeAddressResponseShape', ],
        ],
        'ModifyAddress' => [
            'name' => 'ModifyAddress',
            'http' => [
                'method' => 'PUT',
                'requestUri' => '/v2/regions/{regionId}/address/{id}',
            ],
            'input' => [ 'shape' => 'ModifyAddressRequestShape', ],
            'output' => [ 'shape' => 'ModifyAddressResponseShape', ],
        ],
        'DeleteAddress' => [
            'name' => 'DeleteAddress',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v2/regions/{regionId}/address/{id}',
            ],
            'input' => [ 'shape' => 'DeleteAddressRequestShape', ],
            'output' => [ 'shape' => 'DeleteAddressResponseShape', ],
        ],
        'CreateAddress' => [
            'name' => 'CreateAddress',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v2/regions/{regionId}/address:add',
            ],
            'input' => [ 'shape' => 'CreateAddressRequestShape', ],
            'output' => [ 'shape' => 'CreateAddressResponseShape', ],
        ],
        'DescribeInvoiceOrderList' => [
            'name' => 'DescribeInvoiceOrderList',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v2/regions/{regionId}/describeInvoiceOrderList',
            ],
            'input' => [ 'shape' => 'DescribeInvoiceOrderListRequestShape', ],
            'output' => [ 'shape' => 'DescribeInvoiceOrderListResponseShape', ],
        ],
        'CreateInvoiceAgent' => [
            'name' => 'CreateInvoiceAgent',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v2/regions/{regionId}/createInvoiceAgent',
            ],
            'input' => [ 'shape' => 'CreateInvoiceAgentRequestShape', ],
            'output' => [ 'shape' => 'CreateInvoiceAgentResponseShape', ],
        ],
        'EditInvoiceTemplate' => [
            'name' => 'EditInvoiceTemplate',
            'http' => [
                'method' => 'PUT',
                'requestUri' => '/v2/regions/{regionId}/editInvoiceTemplate',
            ],
            'input' => [ 'shape' => 'EditInvoiceTemplateRequestShape', ],
            'output' => [ 'shape' => 'EditInvoiceTemplateResponseShape', ],
        ],
        'DecribeInvoicedChildOrders' => [
            'name' => 'DecribeInvoicedChildOrders',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v2/regions/{regionId}/invoices:decribeInvoicedChildOrders',
            ],
            'input' => [ 'shape' => 'DecribeInvoicedChildOrdersRequestShape', ],
            'output' => [ 'shape' => 'DecribeInvoicedChildOrdersResponseShape', ],
        ],
        'DescribeInvoices' => [
            'name' => 'DescribeInvoices',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v2/regions/{regionId}/invoices',
            ],
            'input' => [ 'shape' => 'DescribeInvoicesRequestShape', ],
            'output' => [ 'shape' => 'DescribeInvoicesResponseShape', ],
        ],
        'DescribeInvoice' => [
            'name' => 'DescribeInvoice',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v2/regions/{regionId}/invoice/{invoiceNumber}',
            ],
            'input' => [ 'shape' => 'DescribeInvoiceRequestShape', ],
            'output' => [ 'shape' => 'DescribeInvoiceResponseShape', ],
        ],
        'BillDetail' => [
            'name' => 'BillDetail',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v2/regions/{regionId}/billDetail/{billId}',
            ],
            'input' => [ 'shape' => 'BillDetailRequestShape', ],
            'output' => [ 'shape' => 'BillDetailResponseShape', ],
        ],
        'GetCompanyCreditInfo' => [
            'name' => 'GetCompanyCreditInfo',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v2/regions/{regionId}/getCompanyCreditInfo',
            ],
            'input' => [ 'shape' => 'GetCompanyCreditInfoRequestShape', ],
            'output' => [ 'shape' => 'GetCompanyCreditInfoResponseShape', ],
        ],
        'GetOrderRelateInvoice' => [
            'name' => 'GetOrderRelateInvoice',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v2/regions/{regionId}/getOrderRelateInvoice',
            ],
            'input' => [ 'shape' => 'GetOrderRelateInvoiceRequestShape', ],
            'output' => [ 'shape' => 'GetOrderRelateInvoiceResponseShape', ],
        ],
        'GetOrderRelateInfo' => [
            'name' => 'GetOrderRelateInfo',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v2/regions/{regionId}/getOrderRelateInfo',
            ],
            'input' => [ 'shape' => 'GetOrderRelateInfoRequestShape', ],
            'output' => [ 'shape' => 'GetOrderRelateInfoResponseShape', ],
        ],
        'CreateInvoice' => [
            'name' => 'CreateInvoice',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v2/regions/{regionId}/invoice',
            ],
            'input' => [ 'shape' => 'CreateInvoiceRequestShape', ],
            'output' => [ 'shape' => 'CreateInvoiceResponseShape', ],
        ],
        'RefundInvoice' => [
            'name' => 'RefundInvoice',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v2/regions/{regionId}/invoice/{invoiceNumber}:refund',
            ],
            'input' => [ 'shape' => 'RefundInvoiceRequestShape', ],
            'output' => [ 'shape' => 'RefundInvoiceResponseShape', ],
        ],
        'ArtificialRefund' => [
            'name' => 'ArtificialRefund',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v2/regions/{regionId}/invoiceorder:artificialRefund',
            ],
            'input' => [ 'shape' => 'ArtificialRefundRequestShape', ],
            'output' => [ 'shape' => 'ArtificialRefundResponseShape', ],
        ],
        'CancelInvoice' => [
            'name' => 'CancelInvoice',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v2/regions/{regionId}/invoice/{invoiceNumber}:cancel',
            ],
            'input' => [ 'shape' => 'CancelInvoiceRequestShape', ],
            'output' => [ 'shape' => 'CancelInvoiceResponseShape', ],
        ],
        'DescribeInvoiceUrl' => [
            'name' => 'DescribeInvoiceUrl',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v2/regions/{regionId}/invoice:downloadurl',
            ],
            'input' => [ 'shape' => 'DescribeInvoiceUrlRequestShape', ],
            'output' => [ 'shape' => 'DescribeInvoiceUrlResponseShape', ],
        ],
        'DescribeInvoiceOrders' => [
            'name' => 'DescribeInvoiceOrders',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v2/regions/{regionId}/invoiceorder:list',
            ],
            'input' => [ 'shape' => 'DescribeInvoiceOrdersRequestShape', ],
            'output' => [ 'shape' => 'DescribeInvoiceOrdersResponseShape', ],
        ],
        'InvoiceOweList' => [
            'name' => 'InvoiceOweList',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v2/regions/{regionId}/invoiceOweList',
            ],
            'input' => [ 'shape' => 'InvoiceOweListRequestShape', ],
            'output' => [ 'shape' => 'InvoiceOweListResponseShape', ],
        ],
        'DeductOweFee' => [
            'name' => 'DeductOweFee',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v2/regions/{regionId}/deductOweFee',
            ],
            'input' => [ 'shape' => 'DeductOweFeeRequestShape', ],
            'output' => [ 'shape' => 'DeductOweFeeResponseShape', ],
        ],
        'GetTaxInfo' => [
            'name' => 'GetTaxInfo',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v2/regions/{regionId}/getTaxInfo',
            ],
            'input' => [ 'shape' => 'GetTaxInfoRequestShape', ],
            'output' => [ 'shape' => 'GetTaxInfoResponseShape', ],
        ],
        'GetInvoicePreview' => [
            'name' => 'GetInvoicePreview',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v2/regions/{regionId}/getInvoicePreview',
            ],
            'input' => [ 'shape' => 'GetInvoicePreviewRequestShape', ],
            'output' => [ 'shape' => 'GetInvoicePreviewResponseShape', ],
        ],
        'CalculateInvoicePrice' => [
            'name' => 'CalculateInvoicePrice',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v2/regions/{regionId}/calculateInvoicePrice',
            ],
            'input' => [ 'shape' => 'CalculateInvoicePriceRequestShape', ],
            'output' => [ 'shape' => 'CalculateInvoicePriceResponseShape', ],
        ],
        'DescribeMonthDetail' => [
            'name' => 'DescribeMonthDetail',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v2/regions/{regionId}/invoiceorder/{month}',
            ],
            'input' => [ 'shape' => 'DescribeMonthDetailRequestShape', ],
            'output' => [ 'shape' => 'DescribeMonthDetailResponseShape', ],
        ],
        'DescribeInvoiceTemplate' => [
            'name' => 'DescribeInvoiceTemplate',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v2/regions/{regionId}/invoiceTemplate',
            ],
            'input' => [ 'shape' => 'DescribeInvoiceTemplateRequestShape', ],
            'output' => [ 'shape' => 'DescribeInvoiceTemplateResponseShape', ],
        ],
        'CreateInvoiceTemplate' => [
            'name' => 'CreateInvoiceTemplate',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v2/regions/{regionId}/invoiceTemplate',
            ],
            'input' => [ 'shape' => 'CreateInvoiceTemplateRequestShape', ],
            'output' => [ 'shape' => 'CreateInvoiceTemplateResponseShape', ],
        ],
        'ModifyInvoiceTemplate' => [
            'name' => 'ModifyInvoiceTemplate',
            'http' => [
                'method' => 'PUT',
                'requestUri' => '/v2/regions/{regionId}/invoiceTemplate',
            ],
            'input' => [ 'shape' => 'ModifyInvoiceTemplateRequestShape', ],
            'output' => [ 'shape' => 'ModifyInvoiceTemplateResponseShape', ],
        ],
        'DeleteInvoiceTemplate' => [
            'name' => 'DeleteInvoiceTemplate',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v2/regions/{regionId}/invoiceTemplate',
            ],
            'input' => [ 'shape' => 'DeleteInvoiceTemplateRequestShape', ],
            'output' => [ 'shape' => 'DeleteInvoiceTemplateResponseShape', ],
        ],
        'CheckInvoiceOwedInfo' => [
            'name' => 'CheckInvoiceOwedInfo',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v2/regions/{regionId}/checkInvoiceOwedInfo',
            ],
            'input' => [ 'shape' => 'CheckInvoiceOwedInfoRequestShape', ],
            'output' => [ 'shape' => 'CheckInvoiceOwedInfoResponseShape', ],
        ],
        'BatchUpdateInvoiceRefundOrder' => [
            'name' => 'BatchUpdateInvoiceRefundOrder',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v2/regions/{regionId}/batchUpdateInvoiceRefundOrder',
            ],
            'input' => [ 'shape' => 'BatchUpdateInvoiceRefundOrderRequestShape', ],
            'output' => [ 'shape' => 'BatchUpdateInvoiceRefundOrderResponseShape', ],
        ],
        'RefundOwedInvoice' => [
            'name' => 'RefundOwedInvoice',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v2/regions/{regionId}/refundOwedInvoice',
            ],
            'input' => [ 'shape' => 'RefundOwedInvoiceRequestShape', ],
            'output' => [ 'shape' => 'RefundOwedInvoiceResponseShape', ],
        ],
        'DescribeOrderInvoice' => [
            'name' => 'DescribeOrderInvoice',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v2/regions/{regionId}/describeOrderInvoice',
            ],
            'input' => [ 'shape' => 'DescribeOrderInvoiceRequestShape', ],
            'output' => [ 'shape' => 'DescribeOrderInvoiceResponseShape', ],
        ],
        'UpdateInvoiceRefundAmount' => [
            'name' => 'UpdateInvoiceRefundAmount',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v2/regions/{regionId}/updateInvoiceRefundAmount',
            ],
            'input' => [ 'shape' => 'UpdateInvoiceRefundAmountRequestShape', ],
            'output' => [ 'shape' => 'UpdateInvoiceRefundAmountResponseShape', ],
        ],
    ],
    'shapes' => [
        'Area' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'integer', 'locationName' => 'id', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'parentId' => [ 'type' => 'integer', 'locationName' => 'parentId', ],
                'sortId' => [ 'type' => 'integer', 'locationName' => 'sortId', ],
            ],
        ],
        'BillDataList' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'integer', 'locationName' => 'id', ],
                'invoiceOrderId' => [ 'type' => 'integer', 'locationName' => 'invoiceOrderId', ],
                'childOrderId' => [ 'type' => 'integer', 'locationName' => 'childOrderId', ],
                'serviceCode' => [ 'type' => 'string', 'locationName' => 'serviceCode', ],
                'amount' => [ 'type' => 'double', 'locationName' => 'amount', ],
                'actualAmount' => [ 'type' => 'double', 'locationName' => 'actualAmount', ],
                'refundAmount' => [ 'type' => 'double', 'locationName' => 'refundAmount', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'updateTime' => [ 'type' => 'string', 'locationName' => 'updateTime', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'owner' => [ 'type' => 'string', 'locationName' => 'owner', ],
                'payType' => [ 'type' => 'integer', 'locationName' => 'payType', ],
                'payTypeDesc' => [ 'type' => 'string', 'locationName' => 'payTypeDesc', ],
            ],
        ],
        'Reason' => [
            'type' => 'structure',
            'members' => [
                'status' => [ 'type' => 'integer', 'locationName' => 'status', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
            ],
        ],
        'DeductInfo' => [
            'type' => 'structure',
            'members' => [
                'orderId' => [ 'type' => 'string', 'locationName' => 'orderId', ],
                'fee' => [ 'type' => 'double', 'locationName' => 'fee', ],
            ],
        ],
        'InvoiceOrder' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'integer', 'locationName' => 'id', ],
                'pin' => [ 'type' => 'string', 'locationName' => 'pin', ],
                'orderId' => [ 'type' => 'string', 'locationName' => 'orderId', ],
                'receiptType' => [ 'type' => 'integer', 'locationName' => 'receiptType', ],
                'typeDesc' => [ 'type' => 'string', 'locationName' => 'typeDesc', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'amount' => [ 'type' => 'double', 'locationName' => 'amount', ],
                'invoicedAmount' => [ 'type' => 'double', 'locationName' => 'invoicedAmount', ],
                'enableAmount' => [ 'type' => 'double', 'locationName' => 'enableAmount', ],
                'useAmount' => [ 'type' => 'double', 'locationName' => 'useAmount', ],
                'refundAmount' => [ 'type' => 'double', 'locationName' => 'refundAmount', ],
                'status' => [ 'type' => 'integer', 'locationName' => 'status', ],
                'finishTime' => [ 'type' => 'string', 'locationName' => 'finishTime', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'updateTime' => [ 'type' => 'string', 'locationName' => 'updateTime', ],
                'chargeSubject' => [ 'type' => 'string', 'locationName' => 'chargeSubject', ],
                'batch' => [ 'type' => 'string', 'locationName' => 'batch', ],
                'searchStartTime' => [ 'type' => 'string', 'locationName' => 'searchStartTime', ],
                'searchEndTime' => [ 'type' => 'string', 'locationName' => 'searchEndTime', ],
                'owner' => [ 'type' => 'string', 'locationName' => 'owner', ],
                'payType' => [ 'type' => 'integer', 'locationName' => 'payType', ],
                'payTypeDesc' => [ 'type' => 'string', 'locationName' => 'payTypeDesc', ],
                'monthGroup' => [ 'type' => 'string', 'locationName' => 'monthGroup', ],
            ],
        ],
        'PostAddress' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'integer', 'locationName' => 'id', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'phone' => [ 'type' => 'string', 'locationName' => 'phone', ],
                'province' => [ 'type' => 'string', 'locationName' => 'province', ],
                'city' => [ 'type' => 'string', 'locationName' => 'city', ],
                'county' => [ 'type' => 'string', 'locationName' => 'county', ],
                'town' => [ 'type' => 'string', 'locationName' => 'town', ],
                'address' => [ 'type' => 'string', 'locationName' => 'address', ],
                'isDefault' => [ 'type' => 'integer', 'locationName' => 'isDefault', ],
                'updateTime' => [ 'type' => 'string', 'locationName' => 'updateTime', ],
                'pin' => [ 'type' => 'string', 'locationName' => 'pin', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'zipCode' => [ 'type' => 'string', 'locationName' => 'zipCode', ],
                'provinceId' => [ 'type' => 'integer', 'locationName' => 'provinceId', ],
                'cityId' => [ 'type' => 'integer', 'locationName' => 'cityId', ],
                'countyId' => [ 'type' => 'integer', 'locationName' => 'countyId', ],
                'townId' => [ 'type' => 'integer', 'locationName' => 'townId', ],
            ],
        ],
        'Invoice' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'integer', 'locationName' => 'id', ],
                'invoiceNumber' => [ 'type' => 'string', 'locationName' => 'invoiceNumber', ],
                'pin' => [ 'type' => 'string', 'locationName' => 'pin', ],
                'invoiceType' => [ 'type' => 'string', 'locationName' => 'invoiceType', ],
                'invoiceTitle' => [ 'type' => 'string', 'locationName' => 'invoiceTitle', ],
                'taxNo' => [ 'type' => 'string', 'locationName' => 'taxNo', ],
                'totalPrice' => [ 'type' => 'double', 'locationName' => 'totalPrice', ],
                'remark' => [ 'type' => 'string', 'locationName' => 'remark', ],
                'invoiceContent' => [ 'type' => 'string', 'locationName' => 'invoiceContent', ],
                'userType' => [ 'type' => 'integer', 'locationName' => 'userType', ],
                'addressId' => [ 'type' => 'integer', 'locationName' => 'addressId', ],
                'transportId' => [ 'type' => 'integer', 'locationName' => 'transportId', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'updateTime' => [ 'type' => 'string', 'locationName' => 'updateTime', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'billingTime' => [ 'type' => 'string', 'locationName' => 'billingTime', ],
                'reason' => [ 'type' => 'string', 'locationName' => 'reason', ],
                'invoiceOrg' => [ 'type' => 'string', 'locationName' => 'invoiceOrg', ],
                'registerAddress' => [ 'type' => 'string', 'locationName' => 'registerAddress', ],
                'accountBank' => [ 'type' => 'string', 'locationName' => 'accountBank', ],
                'account' => [ 'type' => 'string', 'locationName' => 'account', ],
                'applyType' => [ 'type' => 'integer', 'locationName' => 'applyType', ],
                'mediumType' => [ 'type' => 'string', 'locationName' => 'mediumType', ],
                'pdfUrl' => [ 'type' => 'string', 'locationName' => 'pdfUrl', ],
                'fileUrl' => [ 'type' => 'string', 'locationName' => 'fileUrl', ],
                'postAddress' =>  [ 'shape' => 'PostAddress', ],
                'invoiceOrders' => [ 'type' => 'list', 'member' => [ 'shape' => 'InvoiceOrder', ], ],
            ],
        ],
        'Logistics' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'integer', 'locationName' => 'id', ],
                'logisticsCompany' => [ 'type' => 'string', 'locationName' => 'logisticsCompany', ],
                'orderNo' => [ 'type' => 'string', 'locationName' => 'orderNo', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'updateTime' => [ 'type' => 'string', 'locationName' => 'updateTime', ],
                'pin' => [ 'type' => 'string', 'locationName' => 'pin', ],
                'invoiceId' => [ 'type' => 'integer', 'locationName' => 'invoiceId', ],
            ],
        ],
        'InvoiceRemarkInfo' => [
            'type' => 'structure',
            'members' => [
                'uuid' => [ 'type' => 'string', 'locationName' => 'uuid', ],
                'content' => [ 'type' => 'string', 'locationName' => 'content', ],
            ],
        ],
        'InvoiceCreate' => [
            'type' => 'structure',
            'members' => [
                'orderIds' => [ 'type' => 'string', 'locationName' => 'orderIds', ],
                'deductOrderIds' => [ 'type' => 'string', 'locationName' => 'deductOrderIds', ],
                'mediumType' => [ 'type' => 'string', 'locationName' => 'mediumType', ],
                'createInvoiceType' => [ 'type' => 'string', 'locationName' => 'createInvoiceType', ],
                'remark' => [ 'type' => 'list', 'member' => [ 'shape' => 'InvoiceRemarkInfo', ], ],
                'invoiceAll' => [ 'type' => 'integer', 'locationName' => 'invoiceAll', ],
                'orderStartTime' => [ 'type' => 'string', 'locationName' => 'orderStartTime', ],
                'orderEndTime' => [ 'type' => 'string', 'locationName' => 'orderEndTime', ],
                'monthGroups' => [ 'type' => 'string', 'locationName' => 'monthGroups', ],
                'amount' => [ 'type' => 'double', 'locationName' => 'amount', ],
            ],
        ],
        'InvoiceDetails' => [
            'type' => 'structure',
            'members' => [
                'pin' => [ 'type' => 'string', 'locationName' => 'pin', ],
                'serviceCode' => [ 'type' => 'string', 'locationName' => 'serviceCode', ],
                'serviceName' => [ 'type' => 'string', 'locationName' => 'serviceName', ],
                'amount' => [ 'type' => 'double', 'locationName' => 'amount', ],
                'enableAmount' => [ 'type' => 'double', 'locationName' => 'enableAmount', ],
            ],
        ],
        'InvoiceList' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'totalCount' => [ 'type' => 'long', 'locationName' => 'totalCount', ],
                'totalPage' => [ 'type' => 'integer', 'locationName' => 'totalPage', ],
                'resultList' => [ 'type' => 'list', 'member' => [ 'shape' => 'Invoice', ], ],
            ],
        ],
        'InvoiceMsgTemplate' => [
            'type' => 'structure',
            'members' => [
                'pin' => [ 'type' => 'string', 'locationName' => 'pin', ],
                'invoiceType' => [ 'type' => 'string', 'locationName' => 'invoiceType', ],
                'invoiceTitle' => [ 'type' => 'string', 'locationName' => 'invoiceTitle', ],
                'invoiceContent' => [ 'type' => 'string', 'locationName' => 'invoiceContent', ],
                'taxNo' => [ 'type' => 'string', 'locationName' => 'taxNo', ],
                'personalInvoiceTitle' => [ 'type' => 'string', 'locationName' => 'personalInvoiceTitle', ],
                'mediumType' => [ 'type' => 'string', 'locationName' => 'mediumType', ],
                'email' => [ 'type' => 'string', 'locationName' => 'email', ],
                'phone' => [ 'type' => 'string', 'locationName' => 'phone', ],
            ],
        ],
        'InvoiceOrderItem' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'totalCount' => [ 'type' => 'long', 'locationName' => 'totalCount', ],
                'totalPage' => [ 'type' => 'integer', 'locationName' => 'totalPage', ],
                'resultList' => [ 'type' => 'list', 'member' => [ 'shape' => 'InvoiceOrder', ], ],
            ],
        ],
        'InvoiceOrderList' => [
            'type' => 'structure',
            'members' => [
                'searchStartTime' => [ 'type' => 'string', 'locationName' => 'searchStartTime', ],
                'searchEndTime' => [ 'type' => 'string', 'locationName' => 'searchEndTime', ],
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'receiptType' => [ 'type' => 'string', 'locationName' => 'receiptType', ],
                'payType' => [ 'type' => 'integer', 'locationName' => 'payType', ],
            ],
        ],
        'OrderInfo' => [
            'type' => 'structure',
            'members' => [
                'amount' => [ 'type' => 'double', 'locationName' => 'amount', ],
                'orderId' => [ 'type' => 'string', 'locationName' => 'orderId', ],
            ],
        ],
        'InvoiceOrderPrice' => [
            'type' => 'structure',
            'members' => [
                'amount' => [ 'type' => 'double', 'locationName' => 'amount', ],
                'orderInfo' => [ 'type' => 'list', 'member' => [ 'shape' => 'OrderInfo', ], ],
            ],
        ],
        'InvoiceOweDeductReqVo' => [
            'type' => 'structure',
            'members' => [
                'orderIds' => [ 'type' => 'string', 'locationName' => 'orderIds', ],
            ],
        ],
        'InvoiceOweInfo' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'integer', 'locationName' => 'id', ],
                'pin' => [ 'type' => 'string', 'locationName' => 'pin', ],
                'oweOrderId' => [ 'type' => 'string', 'locationName' => 'oweOrderId', ],
                'deductOrderId' => [ 'type' => 'string', 'locationName' => 'deductOrderId', ],
                'productName' => [ 'type' => 'string', 'locationName' => 'productName', ],
                'receiptType' => [ 'type' => 'integer', 'locationName' => 'receiptType', ],
                'amount' => [ 'type' => 'double', 'locationName' => 'amount', ],
                'oweAmount' => [ 'type' => 'double', 'locationName' => 'oweAmount', ],
                'nonDeductAmount' => [ 'type' => 'double', 'locationName' => 'nonDeductAmount', ],
                'deductAmount' => [ 'type' => 'double', 'locationName' => 'deductAmount', ],
                'status' => [ 'type' => 'integer', 'locationName' => 'status', ],
                'recordType' => [ 'type' => 'integer', 'locationName' => 'recordType', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'updateTime' => [ 'type' => 'string', 'locationName' => 'updateTime', ],
                'comment' => [ 'type' => 'string', 'locationName' => 'comment', ],
            ],
        ],
        'InvoiceOweList' => [
            'type' => 'structure',
            'members' => [
                'pageIndex' => [ 'type' => 'integer', 'locationName' => 'pageIndex', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'totalCount' => [ 'type' => 'long', 'locationName' => 'totalCount', ],
                'totalPage' => [ 'type' => 'integer', 'locationName' => 'totalPage', ],
                'resultList' => [ 'type' => 'list', 'member' => [ 'shape' => 'InvoiceOweInfo', ], ],
            ],
        ],
        'InvoiceOweReq' => [
            'type' => 'structure',
            'members' => [
                'pin' => [ 'type' => 'string', 'locationName' => 'pin', ],
                'pageIndex' => [ 'type' => 'integer', 'locationName' => 'pageIndex', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
            ],
        ],
        'InvoicePreviewReqVo' => [
            'type' => 'structure',
            'members' => [
                'pin' => [ 'type' => 'string', 'locationName' => 'pin', ],
                'orderIds' => [ 'type' => 'string', 'locationName' => 'orderIds', ],
                'deductInfoList' => [ 'type' => 'list', 'member' => [ 'shape' => 'DeductInfo', ], ],
                'amount' => [ 'type' => 'double', 'locationName' => 'amount', ],
                'monthGroups' => [ 'type' => 'string', 'locationName' => 'monthGroups', ],
                'mediumType' => [ 'type' => 'string', 'locationName' => 'mediumType', ],
                'invoiceAll' => [ 'type' => 'integer', 'locationName' => 'invoiceAll', ],
                'orderStartTime' => [ 'type' => 'string', 'locationName' => 'orderStartTime', ],
                'orderEndTime' => [ 'type' => 'string', 'locationName' => 'orderEndTime', ],
            ],
        ],
        'InvoicePreviewRespVo' => [
            'type' => 'structure',
            'members' => [
                'companyName' => [ 'type' => 'string', 'locationName' => 'companyName', ],
                'companyTaxCode' => [ 'type' => 'string', 'locationName' => 'companyTaxCode', ],
                'companyAddress' => [ 'type' => 'string', 'locationName' => 'companyAddress', ],
                'companyTelphone' => [ 'type' => 'string', 'locationName' => 'companyTelphone', ],
                'companyBank' => [ 'type' => 'string', 'locationName' => 'companyBank', ],
                'companyBankAccount' => [ 'type' => 'string', 'locationName' => 'companyBankAccount', ],
                'serviceName' => [ 'type' => 'string', 'locationName' => 'serviceName', ],
                'specification' => [ 'type' => 'string', 'locationName' => 'specification', ],
                'totalAmount' => [ 'type' => 'double', 'locationName' => 'totalAmount', ],
                'amount' => [ 'type' => 'double', 'locationName' => 'amount', ],
                'taxRate' => [ 'type' => 'double', 'locationName' => 'taxRate', ],
                'taxAmount' => [ 'type' => 'double', 'locationName' => 'taxAmount', ],
                'taxAmountCnStr' => [ 'type' => 'string', 'locationName' => 'taxAmountCnStr', ],
                'chargeSubject' => [ 'type' => 'string', 'locationName' => 'chargeSubject', ],
                'chargeSubjectTaxCode' => [ 'type' => 'string', 'locationName' => 'chargeSubjectTaxCode', ],
                'chargeSubjectAddress' => [ 'type' => 'string', 'locationName' => 'chargeSubjectAddress', ],
                'chargeSubjectTelephone' => [ 'type' => 'string', 'locationName' => 'chargeSubjectTelephone', ],
                'chargeSubjectBank' => [ 'type' => 'string', 'locationName' => 'chargeSubjectBank', ],
                'chargeSubjectBankAccount' => [ 'type' => 'string', 'locationName' => 'chargeSubjectBankAccount', ],
                'content' => [ 'type' => 'string', 'locationName' => 'content', ],
                'uuid' => [ 'type' => 'string', 'locationName' => 'uuid', ],
            ],
        ],
        'InvoiceQuery' => [
            'type' => 'structure',
            'members' => [
                'businessId' => [ 'type' => 'string', 'locationName' => 'businessId', ],
                'ivcCode' => [ 'type' => 'string', 'locationName' => 'ivcCode', ],
                'ivcNo' => [ 'type' => 'string', 'locationName' => 'ivcNo', ],
                'wid' => [ 'type' => 'string', 'locationName' => 'wid', ],
            ],
        ],
        'InvoiceRefund' => [
            'type' => 'structure',
            'members' => [
                'refundReason' => [ 'type' => 'string', 'locationName' => 'refundReason', ],
                'remark' => [ 'type' => 'string', 'locationName' => 'remark', ],
                'logisticsCompany' => [ 'type' => 'string', 'locationName' => 'logisticsCompany', ],
                'logisticsOrderNumber' => [ 'type' => 'string', 'locationName' => 'logisticsOrderNumber', ],
                'mediumType' => [ 'type' => 'string', 'locationName' => 'mediumType', ],
            ],
        ],
        'InvoiceRefundInfo' => [
            'type' => 'structure',
            'members' => [
                'refundInfoList' => [ 'type' => 'list', 'member' => [ 'shape' => 'RefundInfo', ], ],
            ],
        ],
        'RefundInfo' => [
            'type' => 'structure',
            'members' => [
                'pin' => [ 'type' => 'string', 'locationName' => 'pin', ],
                'subOrderNumber' => [ 'type' => 'string', 'locationName' => 'subOrderNumber', ],
                'refundAmount' => [ 'type' => 'double', 'locationName' => 'refundAmount', ],
            ],
        ],
        'InvoiceTemplate' => [
            'type' => 'structure',
            'members' => [
                'invoiceType' => [ 'type' => 'string', 'locationName' => 'invoiceType', ],
                'invoiceTitle' => [ 'type' => 'string', 'locationName' => 'invoiceTitle', ],
                'invoiceContent' => [ 'type' => 'string', 'locationName' => 'invoiceContent', ],
                'taxId' => [ 'type' => 'string', 'locationName' => 'taxId', ],
                'company' => [ 'type' => 'string', 'locationName' => 'company', ],
                'phone' => [ 'type' => 'string', 'locationName' => 'phone', ],
                'bank' => [ 'type' => 'string', 'locationName' => 'bank', ],
                'account' => [ 'type' => 'string', 'locationName' => 'account', ],
                'address' => [ 'type' => 'string', 'locationName' => 'address', ],
                'email' => [ 'type' => 'string', 'locationName' => 'email', ],
                'mediumType' => [ 'type' => 'string', 'locationName' => 'mediumType', ],
            ],
        ],
        'InvoicedRenewChildOrder' => [
            'type' => 'structure',
            'members' => [
                'pin' => [ 'type' => 'string', 'locationName' => 'pin', ],
                'childOrderList' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'Invoices' => [
            'type' => 'structure',
            'members' => [
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'searchStartDate' => [ 'type' => 'string', 'locationName' => 'searchStartDate', ],
                'searchEndDate' => [ 'type' => 'string', 'locationName' => 'searchEndDate', ],
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'invoiceType' => [ 'type' => 'integer', 'locationName' => 'invoiceType', ],
            ],
        ],
        'ModifiedInvoiceInfo' => [
            'type' => 'structure',
            'members' => [
                'pin' => [ 'type' => 'string', 'locationName' => 'pin', ],
                'invoiceNumber' => [ 'type' => 'string', 'locationName' => 'invoiceNumber', ],
                'orderNumberList' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'invoiceFee' => [ 'type' => 'double', 'locationName' => 'invoiceFee', ],
                'invoiceStatus' => [ 'type' => 'integer', 'locationName' => 'invoiceStatus', ],
                'action' => [ 'type' => 'integer', 'locationName' => 'action', ],
            ],
        ],
        'MonthGroupOrder' => [
            'type' => 'structure',
            'members' => [
                'monthGroup' => [ 'type' => 'string', 'locationName' => 'monthGroup', ],
                'monthGroupDesc' => [ 'type' => 'string', 'locationName' => 'monthGroupDesc', ],
                'enableAmount' => [ 'type' => 'double', 'locationName' => 'enableAmount', ],
                'useAmount' => [ 'type' => 'double', 'locationName' => 'useAmount', ],
                'amount' => [ 'type' => 'double', 'locationName' => 'amount', ],
                'nowAmount' => [ 'type' => 'double', 'locationName' => 'nowAmount', ],
                'invoiceMonthDetailVos' => [ 'type' => 'list', 'member' => [ 'shape' => 'InvoiceDetails', ], ],
            ],
        ],
        'OrderInfoRes' => [
            'type' => 'structure',
            'members' => [
                'amount' => [ 'type' => 'double', 'locationName' => 'amount', ],
                'orderInfo' => [ 'type' => 'list', 'member' => [ 'shape' => 'OrderInfo', ], ],
            ],
        ],
        'OrderInvoiceDetail' => [
            'type' => 'structure',
            'members' => [
                'invoiceAmount' => [ 'type' => 'double', 'locationName' => 'invoiceAmount', ],
                'orderNumber' => [ 'type' => 'string', 'locationName' => 'orderNumber', ],
                'status' => [ 'type' => 'integer', 'locationName' => 'status', ],
            ],
        ],
        'OrderInvoiceInfo' => [
            'type' => 'structure',
            'members' => [
                'invoiceTotalAmount' => [ 'type' => 'double', 'locationName' => 'invoiceTotalAmount', ],
                'orderInvoiceDetailList' => [ 'type' => 'list', 'member' => [ 'shape' => 'OrderInvoiceDetail', ], ],
                'invoiceStatus' => [ 'type' => 'integer', 'locationName' => 'invoiceStatus', ],
            ],
        ],
        'OrderInvoiceReq' => [
            'type' => 'structure',
            'members' => [
                'pin' => [ 'type' => 'string', 'locationName' => 'pin', ],
                'orderNumberList' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'OwedInvoiceReq' => [
            'type' => 'structure',
            'members' => [
                'pin' => [ 'type' => 'string', 'locationName' => 'pin', ],
                'refundInfoList' => [ 'type' => 'list', 'member' => [ 'shape' => 'RefundOweInvoice', ], ],
            ],
        ],
        'RefundOweInvoice' => [
            'type' => 'structure',
            'members' => [
                'pin' => [ 'type' => 'string', 'locationName' => 'pin', ],
                'orderNumber' => [ 'type' => 'string', 'locationName' => 'orderNumber', ],
                'amount' => [ 'type' => 'double', 'locationName' => 'amount', ],
            ],
        ],
        'PageInfo' => [
            'type' => 'structure',
            'members' => [
                'pageIndex' => [ 'type' => 'integer', 'locationName' => 'pageIndex', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'totalCount' => [ 'type' => 'long', 'locationName' => 'totalCount', ],
                'totalPage' => [ 'type' => 'integer', 'locationName' => 'totalPage', ],
            ],
        ],
        'RefundInvoiceReq' => [
            'type' => 'structure',
            'members' => [
                'pin' => [ 'type' => 'string', 'locationName' => 'pin', ],
                'refundOrderInfoList' => [ 'type' => 'list', 'member' => [ 'shape' => 'RefundOrderInfo', ], ],
            ],
        ],
        'RefundOrderInfo' => [
            'type' => 'structure',
            'members' => [
                'orderNumber' => [ 'type' => 'string', 'locationName' => 'orderNumber', ],
                'childOrderNumber' => [ 'type' => 'string', 'locationName' => 'childOrderNumber', ],
                'childRefundAmount' => [ 'type' => 'double', 'locationName' => 'childRefundAmount', ],
            ],
        ],
        'RefundOrder' => [
            'type' => 'structure',
            'members' => [
                'orderId' => [ 'type' => 'string', 'locationName' => 'orderId', ],
                'refundAmount' => [ 'type' => 'string', 'locationName' => 'refundAmount', ],
            ],
        ],
        'RefundOweInvoiceReq' => [
            'type' => 'structure',
            'members' => [
                'invoiceOweInfoList' => [ 'type' => 'list', 'member' => [ 'shape' => 'RefundOweInvoice', ], ],
            ],
        ],
        'TaxInfo' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'integer', 'locationName' => 'id', ],
                'serviceCode' => [ 'type' => 'string', 'locationName' => 'serviceCode', ],
                'serviceName' => [ 'type' => 'string', 'locationName' => 'serviceName', ],
                'taxRa' => [ 'type' => 'double', 'locationName' => 'taxRa', ],
                'taxCode' => [ 'type' => 'string', 'locationName' => 'taxCode', ],
                'content' => [ 'type' => 'string', 'locationName' => 'content', ],
                'chargeSubject' => [ 'type' => 'string', 'locationName' => 'chargeSubject', ],
            ],
        ],
        'Vat' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'integer', 'locationName' => 'id', ],
                'taxId' => [ 'type' => 'string', 'locationName' => 'taxId', ],
                'company' => [ 'type' => 'string', 'locationName' => 'company', ],
                'phone' => [ 'type' => 'string', 'locationName' => 'phone', ],
                'bank' => [ 'type' => 'string', 'locationName' => 'bank', ],
                'account' => [ 'type' => 'string', 'locationName' => 'account', ],
                'address' => [ 'type' => 'string', 'locationName' => 'address', ],
                'startTime' => [ 'type' => 'string', 'locationName' => 'startTime', ],
                'endTime' => [ 'type' => 'string', 'locationName' => 'endTime', ],
            ],
        ],
        'ModifyAddressResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'integer', 'locationName' => 'code', ],
                'msg' => [ 'type' => 'string', 'locationName' => 'msg', ],
            ],
        ],
        'DescribeAddressesResultShape' => [
            'type' => 'structure',
            'members' => [
                'addresses' => [ 'type' => 'list', 'member' => [ 'shape' => 'PostAddress', ], ],
            ],
        ],
        'DescribeAddressesResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeAddressesResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeAddressesRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pin' => [ 'type' => 'string', 'locationName' => 'pin', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DescribeAddressRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pin' => [ 'type' => 'string', 'locationName' => 'pin', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'id' => [ 'type' => 'integer', 'locationName' => 'id', ],
            ],
        ],
        'DescribeChildrenAreaResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeChildrenAreaResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeAddressResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeAddressResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeChildrenAreaResultShape' => [
            'type' => 'structure',
            'members' => [
                'addresses' => [ 'type' => 'list', 'member' => [ 'shape' => 'Area', ], ],
            ],
        ],
        'DescribeAddressResultShape' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'integer', 'locationName' => 'id', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'phone' => [ 'type' => 'string', 'locationName' => 'phone', ],
                'province' => [ 'type' => 'string', 'locationName' => 'province', ],
                'city' => [ 'type' => 'string', 'locationName' => 'city', ],
                'county' => [ 'type' => 'string', 'locationName' => 'county', ],
                'town' => [ 'type' => 'string', 'locationName' => 'town', ],
                'address' => [ 'type' => 'string', 'locationName' => 'address', ],
                'isDefault' => [ 'type' => 'integer', 'locationName' => 'isDefault', ],
                'updateTime' => [ 'type' => 'string', 'locationName' => 'updateTime', ],
                'pin' => [ 'type' => 'string', 'locationName' => 'pin', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'zipCode' => [ 'type' => 'string', 'locationName' => 'zipCode', ],
                'provinceId' => [ 'type' => 'integer', 'locationName' => 'provinceId', ],
                'cityId' => [ 'type' => 'integer', 'locationName' => 'cityId', ],
                'countyId' => [ 'type' => 'integer', 'locationName' => 'countyId', ],
                'townId' => [ 'type' => 'integer', 'locationName' => 'townId', ],
            ],
        ],
        'DeleteAddressResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DeleteAddressResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'CreateAddressResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'integer', 'locationName' => 'code', ],
                'msg' => [ 'type' => 'string', 'locationName' => 'msg', ],
            ],
        ],
        'ModifyAddressResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'ModifyAddressResultShape', ],
            ],
        ],
        'DeleteAddressRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pin' => [ 'type' => 'string', 'locationName' => 'pin', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'id' => [ 'type' => 'integer', 'locationName' => 'id', ],
            ],
        ],
        'CreateAddressRequestShape' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'integer', 'locationName' => 'id', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'phone' => [ 'type' => 'string', 'locationName' => 'phone', ],
                'province' => [ 'type' => 'string', 'locationName' => 'province', ],
                'city' => [ 'type' => 'string', 'locationName' => 'city', ],
                'county' => [ 'type' => 'string', 'locationName' => 'county', ],
                'town' => [ 'type' => 'string', 'locationName' => 'town', ],
                'address' => [ 'type' => 'string', 'locationName' => 'address', ],
                'isDefault' => [ 'type' => 'integer', 'locationName' => 'isDefault', ],
                'updateTime' => [ 'type' => 'string', 'locationName' => 'updateTime', ],
                'pin' => [ 'type' => 'string', 'locationName' => 'pin', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'zipCode' => [ 'type' => 'string', 'locationName' => 'zipCode', ],
                'provinceId' => [ 'type' => 'integer', 'locationName' => 'provinceId', ],
                'cityId' => [ 'type' => 'integer', 'locationName' => 'cityId', ],
                'countyId' => [ 'type' => 'integer', 'locationName' => 'countyId', ],
                'townId' => [ 'type' => 'integer', 'locationName' => 'townId', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DeleteAddressResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'integer', 'locationName' => 'code', ],
                'msg' => [ 'type' => 'string', 'locationName' => 'msg', ],
            ],
        ],
        'DescribeChildrenAreaRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pin' => [ 'type' => 'string', 'locationName' => 'pin', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'parentId' => [ 'type' => 'long', 'locationName' => 'parentId', ],
            ],
        ],
        'ModifyAddressRequestShape' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'integer', 'locationName' => 'id', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'phone' => [ 'type' => 'string', 'locationName' => 'phone', ],
                'province' => [ 'type' => 'string', 'locationName' => 'province', ],
                'city' => [ 'type' => 'string', 'locationName' => 'city', ],
                'county' => [ 'type' => 'string', 'locationName' => 'county', ],
                'town' => [ 'type' => 'string', 'locationName' => 'town', ],
                'address' => [ 'type' => 'string', 'locationName' => 'address', ],
                'isDefault' => [ 'type' => 'integer', 'locationName' => 'isDefault', ],
                'updateTime' => [ 'type' => 'string', 'locationName' => 'updateTime', ],
                'pin' => [ 'type' => 'string', 'locationName' => 'pin', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'zipCode' => [ 'type' => 'string', 'locationName' => 'zipCode', ],
                'provinceId' => [ 'type' => 'integer', 'locationName' => 'provinceId', ],
                'cityId' => [ 'type' => 'integer', 'locationName' => 'cityId', ],
                'countyId' => [ 'type' => 'integer', 'locationName' => 'countyId', ],
                'townId' => [ 'type' => 'integer', 'locationName' => 'townId', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'CreateAddressResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'CreateAddressResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'CreateInvoiceAgentResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'CreateInvoiceAgentResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'CreateInvoiceAgentRequestShape' => [
            'type' => 'structure',
            'members' => [
                'orderIds' => [ 'type' => 'string', 'locationName' => 'orderIds', ],
                'deductOrderIds' => [ 'type' => 'string', 'locationName' => 'deductOrderIds', ],
                'mediumType' => [ 'type' => 'string', 'locationName' => 'mediumType', ],
                'createInvoiceType' => [ 'type' => 'string', 'locationName' => 'createInvoiceType', ],
                'invoiceAll' => [ 'type' => 'integer', 'locationName' => 'invoiceAll', ],
                'orderStartTime' => [ 'type' => 'string', 'locationName' => 'orderStartTime', ],
                'orderEndTime' => [ 'type' => 'string', 'locationName' => 'orderEndTime', ],
                'monthGroups' => [ 'type' => 'string', 'locationName' => 'monthGroups', ],
                'amount' => [ 'type' => 'double', 'locationName' => 'amount', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'CreateInvoiceAgentResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'integer', 'locationName' => 'code', ],
                'msg' => [ 'type' => 'string', 'locationName' => 'msg', ],
            ],
        ],
        'EditInvoiceTemplateResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'integer', 'locationName' => 'code', ],
                'msg' => [ 'type' => 'string', 'locationName' => 'msg', ],
            ],
        ],
        'EditInvoiceTemplateRequestShape' => [
            'type' => 'structure',
            'members' => [
                'invoiceType' => [ 'type' => 'string', 'locationName' => 'invoiceType', ],
                'invoiceTitle' => [ 'type' => 'string', 'locationName' => 'invoiceTitle', ],
                'invoiceContent' => [ 'type' => 'string', 'locationName' => 'invoiceContent', ],
                'taxId' => [ 'type' => 'string', 'locationName' => 'taxId', ],
                'company' => [ 'type' => 'string', 'locationName' => 'company', ],
                'phone' => [ 'type' => 'string', 'locationName' => 'phone', ],
                'bank' => [ 'type' => 'string', 'locationName' => 'bank', ],
                'account' => [ 'type' => 'string', 'locationName' => 'account', ],
                'address' => [ 'type' => 'string', 'locationName' => 'address', ],
                'email' => [ 'type' => 'string', 'locationName' => 'email', ],
                'mediumType' => [ 'type' => 'string', 'locationName' => 'mediumType', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DescribeInvoiceOrderListRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pin' => [ 'type' => 'string', 'locationName' => 'pin', ],
                'orderNumber' => [ 'type' => 'string', 'locationName' => 'orderNumber', ],
                'pageIndex' => [ 'type' => 'integer', 'locationName' => 'pageIndex', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DescribeInvoiceOrderListResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeInvoiceOrderListResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'EditInvoiceTemplateResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'EditInvoiceTemplateResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeInvoiceOrderListResultShape' => [
            'type' => 'structure',
            'members' => [
                'enableInvoiceFee' => [ 'type' => 'double', 'locationName' => 'enableInvoiceFee', ],
                'oweInvoiceFee' => [ 'type' => 'double', 'locationName' => 'oweInvoiceFee', ],
                'isSetInvoiceMSGTemplate' => [ 'type' => 'boolean', 'locationName' => 'isSetInvoiceMSGTemplate', ],
                'invoiceOrderList' =>  [ 'shape' => 'InvoiceOrderItem', ],
            ],
        ],
        'DecribeInvoicedChildOrdersResultShape' => [
            'type' => 'structure',
            'members' => [
                'result' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'DecribeInvoicedChildOrdersResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DecribeInvoicedChildOrdersResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DecribeInvoicedChildOrdersRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pin' => [ 'type' => 'string', 'locationName' => 'pin', ],
                'childOrderList' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DescribeInvoiceUrlRequestShape' => [
            'type' => 'structure',
            'members' => [
                'businessId' => [ 'type' => 'string', 'locationName' => 'businessId', ],
                'ivcCode' => [ 'type' => 'string', 'locationName' => 'ivcCode', ],
                'ivcNo' => [ 'type' => 'string', 'locationName' => 'ivcNo', ],
                'wid' => [ 'type' => 'string', 'locationName' => 'wid', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DescribeInvoiceUrlResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeInvoiceUrlResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'GetOrderRelateInfoResultShape' => [
            'type' => 'structure',
            'members' => [
                'hasInvoice' => [ 'type' => 'boolean', 'locationName' => 'hasInvoice', ],
                'invoiceNumbers' => [ 'type' => 'string', 'locationName' => 'invoiceNumbers', ],
                'hasOweTicket' => [ 'type' => 'boolean', 'locationName' => 'hasOweTicket', ],
            ],
        ],
        'DescribeInvoiceOrdersResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeInvoiceOrdersResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'GetOrderRelateInvoiceResultShape' => [
            'type' => 'structure',
            'members' => [
                'existed' => [ 'type' => 'boolean', 'locationName' => 'existed', ],
                'invoiceNumbers' => [ 'type' => 'string', 'locationName' => 'invoiceNumbers', ],
            ],
        ],
        'RefundInvoiceRequestShape' => [
            'type' => 'structure',
            'members' => [
                'refundReason' => [ 'type' => 'string', 'locationName' => 'refundReason', ],
                'remark' => [ 'type' => 'string', 'locationName' => 'remark', ],
                'logisticsCompany' => [ 'type' => 'string', 'locationName' => 'logisticsCompany', ],
                'logisticsOrderNumber' => [ 'type' => 'string', 'locationName' => 'logisticsOrderNumber', ],
                'mediumType' => [ 'type' => 'string', 'locationName' => 'mediumType', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'invoiceNumber' => [ 'type' => 'string', 'locationName' => 'invoiceNumber', ],
            ],
        ],
        'BillDetailRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'billId' => [ 'type' => 'string', 'locationName' => 'billId', ],
            ],
        ],
        'GetOrderRelateInvoiceResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GetOrderRelateInvoiceResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'GetOrderRelateInvoiceRequestShape' => [
            'type' => 'structure',
            'members' => [
                'orderId' => [ 'type' => 'string', 'locationName' => 'orderId', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DescribeMonthDetailRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pin' => [ 'type' => 'string', 'locationName' => 'pin', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'month' => [ 'type' => 'string', 'locationName' => 'month', ],
            ],
        ],
        'DescribeMonthDetailResultShape' => [
            'type' => 'structure',
            'members' => [
                'result' => [ 'type' => 'list', 'member' => [ 'shape' => 'InvoiceDetails', ], ],
            ],
        ],
        'BillDetailResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'BillDetailResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeInvoicesResultShape' => [
            'type' => 'structure',
            'members' => [
                'enableInvoiceFee' => [ 'type' => 'double', 'locationName' => 'enableInvoiceFee', ],
                'invoicedFee' => [ 'type' => 'double', 'locationName' => 'invoicedFee', ],
                'isSetInvoiceMSGTemplate' => [ 'type' => 'boolean', 'locationName' => 'isSetInvoiceMSGTemplate', ],
                'invoiceList' =>  [ 'shape' => 'InvoiceList', ],
                'isApplyInvoice' => [ 'type' => 'boolean', 'locationName' => 'isApplyInvoice', ],
                'invoiceSearch' =>  [ 'shape' => 'Invoices', ],
            ],
        ],
        'DescribeMonthDetailResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeMonthDetailResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'RefundInvoiceResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'integer', 'locationName' => 'code', ],
                'msg' => [ 'type' => 'string', 'locationName' => 'msg', ],
            ],
        ],
        'CalculateInvoicePriceResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'CalculateInvoicePriceResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'GetTaxInfoRequestShape' => [
            'type' => 'structure',
            'members' => [
                'serviceCode' => [ 'type' => 'string', 'locationName' => 'serviceCode', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'GetOrderRelateInfoResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GetOrderRelateInfoResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'CalculateInvoicePriceResultShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'OrderInfoRes', ],
            ],
        ],
        'ArtificialRefundResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'integer', 'locationName' => 'code', ],
                'msg' => [ 'type' => 'string', 'locationName' => 'msg', ],
            ],
        ],
        'GetInvoicePreviewRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pin' => [ 'type' => 'string', 'locationName' => 'pin', ],
                'orderIds' => [ 'type' => 'string', 'locationName' => 'orderIds', ],
                'deductInfoList' => [ 'type' => 'list', 'member' => [ 'shape' => 'DeductInfo', ], ],
                'amount' => [ 'type' => 'double', 'locationName' => 'amount', ],
                'monthGroups' => [ 'type' => 'string', 'locationName' => 'monthGroups', ],
                'mediumType' => [ 'type' => 'string', 'locationName' => 'mediumType', ],
                'invoiceAll' => [ 'type' => 'integer', 'locationName' => 'invoiceAll', ],
                'orderStartTime' => [ 'type' => 'string', 'locationName' => 'orderStartTime', ],
                'orderEndTime' => [ 'type' => 'string', 'locationName' => 'orderEndTime', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'CreateInvoiceResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'integer', 'locationName' => 'code', ],
                'msg' => [ 'type' => 'string', 'locationName' => 'msg', ],
            ],
        ],
        'BillDetailResultShape' => [
            'type' => 'structure',
            'members' => [
                'billDataList' => [ 'type' => 'list', 'member' => [ 'shape' => 'BillDataList', ], ],
            ],
        ],
        'InvoiceOweListRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pin' => [ 'type' => 'string', 'locationName' => 'pin', ],
                'pageIndex' => [ 'type' => 'integer', 'locationName' => 'pageIndex', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DeductOweFeeResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'integer', 'locationName' => 'code', ],
                'msg' => [ 'type' => 'string', 'locationName' => 'msg', ],
            ],
        ],
        'DescribeInvoicesRequestShape' => [
            'type' => 'structure',
            'members' => [
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'searchStartDate' => [ 'type' => 'string', 'locationName' => 'searchStartDate', ],
                'searchEndDate' => [ 'type' => 'string', 'locationName' => 'searchEndDate', ],
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'invoiceType' => [ 'type' => 'integer', 'locationName' => 'invoiceType', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'CancelInvoiceRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'invoiceNumber' => [ 'type' => 'string', 'locationName' => 'invoiceNumber', ],
            ],
        ],
        'DescribeInvoiceRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageIndex' => [ 'type' => 'integer', 'locationName' => 'pageIndex', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'invoiceType' => [ 'type' => 'integer', 'locationName' => 'invoiceType', ],
                'pin' => [ 'type' => 'string', 'locationName' => 'pin', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'invoiceNumber' => [ 'type' => 'string', 'locationName' => 'invoiceNumber', ],
            ],
        ],
        'ArtificialRefundRequestShape' => [
            'type' => 'structure',
            'members' => [
                'orderId' => [ 'type' => 'string', 'locationName' => 'orderId', ],
                'refundAmount' => [ 'type' => 'string', 'locationName' => 'refundAmount', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'InvoiceOweListResultShape' => [
            'type' => 'structure',
            'members' => [
                'oweFee' => [ 'type' => 'double', 'locationName' => 'oweFee', ],
                'invoiceOweList' =>  [ 'shape' => 'InvoiceOweList', ],
            ],
        ],
        'GetOrderRelateInfoRequestShape' => [
            'type' => 'structure',
            'members' => [
                'orderId' => [ 'type' => 'string', 'locationName' => 'orderId', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'GetCompanyCreditInfoRequestShape' => [
            'type' => 'structure',
            'members' => [
                'enterpriseName' => [ 'type' => 'string', 'locationName' => 'enterpriseName', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'CreateInvoiceResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'CreateInvoiceResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DeductOweFeeRequestShape' => [
            'type' => 'structure',
            'members' => [
                'orderIds' => [ 'type' => 'string', 'locationName' => 'orderIds', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'GetCompanyCreditInfoResultShape' => [
            'type' => 'structure',
            'members' => [
                'creditCode' => [ 'type' => 'string', 'locationName' => 'creditCode', ],
                'registerAddress' => [ 'type' => 'string', 'locationName' => 'registerAddress', ],
                'registerPhone' => [ 'type' => 'string', 'locationName' => 'registerPhone', ],
                'entName' => [ 'type' => 'string', 'locationName' => 'entName', ],
                'entType' => [ 'type' => 'string', 'locationName' => 'entType', ],
            ],
        ],
        'CreateInvoiceRequestShape' => [
            'type' => 'structure',
            'members' => [
                'orderIds' => [ 'type' => 'string', 'locationName' => 'orderIds', ],
                'deductOrderIds' => [ 'type' => 'string', 'locationName' => 'deductOrderIds', ],
                'mediumType' => [ 'type' => 'string', 'locationName' => 'mediumType', ],
                'createInvoiceType' => [ 'type' => 'string', 'locationName' => 'createInvoiceType', ],
                'invoiceAll' => [ 'type' => 'integer', 'locationName' => 'invoiceAll', ],
                'orderStartTime' => [ 'type' => 'string', 'locationName' => 'orderStartTime', ],
                'orderEndTime' => [ 'type' => 'string', 'locationName' => 'orderEndTime', ],
                'monthGroups' => [ 'type' => 'string', 'locationName' => 'monthGroups', ],
                'amount' => [ 'type' => 'double', 'locationName' => 'amount', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DescribeInvoicesResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeInvoicesResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'GetInvoicePreviewResultShape' => [
            'type' => 'structure',
            'members' => [
                'result' => [ 'type' => 'list', 'member' => [ 'shape' => 'InvoicePreviewRespVo', ], ],
            ],
        ],
        'GetInvoicePreviewResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GetInvoicePreviewResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'CancelInvoiceResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'CancelInvoiceResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeInvoiceOrdersRequestShape' => [
            'type' => 'structure',
            'members' => [
                'searchStartTime' => [ 'type' => 'string', 'locationName' => 'searchStartTime', ],
                'searchEndTime' => [ 'type' => 'string', 'locationName' => 'searchEndTime', ],
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'receiptType' => [ 'type' => 'string', 'locationName' => 'receiptType', ],
                'payType' => [ 'type' => 'integer', 'locationName' => 'payType', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DescribeInvoiceResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeInvoiceResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'CalculateInvoicePriceRequestShape' => [
            'type' => 'structure',
            'members' => [
                'amount' => [ 'type' => 'double', 'locationName' => 'amount', ],
                'orderInfo' => [ 'type' => 'list', 'member' => [ 'shape' => 'OrderInfo', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DescribeInvoiceUrlResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'integer', 'locationName' => 'code', ],
                'msg' => [ 'type' => 'string', 'locationName' => 'msg', ],
                'result' => [ 'type' => 'string', 'locationName' => 'result', ],
            ],
        ],
        'GetCompanyCreditInfoResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GetCompanyCreditInfoResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'RefundInvoiceResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'RefundInvoiceResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'CancelInvoiceResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'integer', 'locationName' => 'code', ],
                'msg' => [ 'type' => 'string', 'locationName' => 'msg', ],
            ],
        ],
        'DeductOweFeeResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DeductOweFeeResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeInvoiceOrdersResultShape' => [
            'type' => 'structure',
            'members' => [
                'enableInvoiceFee' => [ 'type' => 'double', 'locationName' => 'enableInvoiceFee', ],
                'enableAllInvoiceFee' => [ 'type' => 'double', 'locationName' => 'enableAllInvoiceFee', ],
                'oweInvoiceFee' => [ 'type' => 'double', 'locationName' => 'oweInvoiceFee', ],
                'isSetInvoiceMSGTemplate' => [ 'type' => 'boolean', 'locationName' => 'isSetInvoiceMSGTemplate', ],
                'invoiceOrderList' =>  [ 'shape' => 'InvoiceOrderItem', ],
            ],
        ],
        'InvoiceOweListResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'InvoiceOweListResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'GetTaxInfoResultShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'TaxInfo', ],
            ],
        ],
        'GetTaxInfoResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GetTaxInfoResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeInvoiceResultShape' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'integer', 'locationName' => 'id', ],
                'invoiceNumber' => [ 'type' => 'string', 'locationName' => 'invoiceNumber', ],
                'pin' => [ 'type' => 'string', 'locationName' => 'pin', ],
                'invoiceType' => [ 'type' => 'string', 'locationName' => 'invoiceType', ],
                'invoiceTitle' => [ 'type' => 'string', 'locationName' => 'invoiceTitle', ],
                'taxNo' => [ 'type' => 'string', 'locationName' => 'taxNo', ],
                'totalPrice' => [ 'type' => 'double', 'locationName' => 'totalPrice', ],
                'remark' => [ 'type' => 'string', 'locationName' => 'remark', ],
                'invoiceContent' => [ 'type' => 'string', 'locationName' => 'invoiceContent', ],
                'userType' => [ 'type' => 'integer', 'locationName' => 'userType', ],
                'addressId' => [ 'type' => 'integer', 'locationName' => 'addressId', ],
                'transportId' => [ 'type' => 'integer', 'locationName' => 'transportId', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'updateTime' => [ 'type' => 'string', 'locationName' => 'updateTime', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'billingTime' => [ 'type' => 'string', 'locationName' => 'billingTime', ],
                'reason' => [ 'type' => 'string', 'locationName' => 'reason', ],
                'invoiceOrg' => [ 'type' => 'string', 'locationName' => 'invoiceOrg', ],
                'registerAddress' => [ 'type' => 'string', 'locationName' => 'registerAddress', ],
                'registerPhone' => [ 'type' => 'string', 'locationName' => 'registerPhone', ],
                'accountBank' => [ 'type' => 'string', 'locationName' => 'accountBank', ],
                'account' => [ 'type' => 'string', 'locationName' => 'account', ],
                'mediumType' => [ 'type' => 'string', 'locationName' => 'mediumType', ],
                'pdfUrl' => [ 'type' => 'string', 'locationName' => 'pdfUrl', ],
                'xmlUrl' => [ 'type' => 'string', 'locationName' => 'xmlUrl', ],
                'ofdUrl' => [ 'type' => 'string', 'locationName' => 'ofdUrl', ],
                'logistics' =>  [ 'shape' => 'Logistics', ],
                'postAddress' =>  [ 'shape' => 'PostAddress', ],
                'invoiceOrders' => [ 'type' => 'list', 'member' => [ 'shape' => 'InvoiceOrder', ], ],
                'monthGroupOrders' => [ 'type' => 'list', 'member' => [ 'shape' => 'MonthGroupOrder', ], ],
                'isHistoryData' => [ 'type' => 'integer', 'locationName' => 'isHistoryData', ],
            ],
        ],
        'ArtificialRefundResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'ArtificialRefundResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ModifyInvoiceTemplateRequestShape' => [
            'type' => 'structure',
            'members' => [
                'invoiceType' => [ 'type' => 'string', 'locationName' => 'invoiceType', ],
                'invoiceTitle' => [ 'type' => 'string', 'locationName' => 'invoiceTitle', ],
                'invoiceContent' => [ 'type' => 'string', 'locationName' => 'invoiceContent', ],
                'taxId' => [ 'type' => 'string', 'locationName' => 'taxId', ],
                'company' => [ 'type' => 'string', 'locationName' => 'company', ],
                'phone' => [ 'type' => 'string', 'locationName' => 'phone', ],
                'bank' => [ 'type' => 'string', 'locationName' => 'bank', ],
                'account' => [ 'type' => 'string', 'locationName' => 'account', ],
                'address' => [ 'type' => 'string', 'locationName' => 'address', ],
                'email' => [ 'type' => 'string', 'locationName' => 'email', ],
                'mediumType' => [ 'type' => 'string', 'locationName' => 'mediumType', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'ModifyInvoiceTemplateResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'ModifyInvoiceTemplateResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeInvoiceTemplateResultShape' => [
            'type' => 'structure',
            'members' => [
                'vat' =>  [ 'shape' => 'Vat', ],
                'invoiceMsgTemplate' =>  [ 'shape' => 'InvoiceMsgTemplate', ],
            ],
        ],
        'DeleteInvoiceTemplateRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'CreateInvoiceTemplateResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'integer', 'locationName' => 'code', ],
                'msg' => [ 'type' => 'string', 'locationName' => 'msg', ],
            ],
        ],
        'ModifyInvoiceTemplateResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'integer', 'locationName' => 'code', ],
                'msg' => [ 'type' => 'string', 'locationName' => 'msg', ],
            ],
        ],
        'CreateInvoiceTemplateResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'CreateInvoiceTemplateResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'CreateInvoiceTemplateRequestShape' => [
            'type' => 'structure',
            'members' => [
                'invoiceType' => [ 'type' => 'string', 'locationName' => 'invoiceType', ],
                'invoiceTitle' => [ 'type' => 'string', 'locationName' => 'invoiceTitle', ],
                'invoiceContent' => [ 'type' => 'string', 'locationName' => 'invoiceContent', ],
                'taxId' => [ 'type' => 'string', 'locationName' => 'taxId', ],
                'company' => [ 'type' => 'string', 'locationName' => 'company', ],
                'phone' => [ 'type' => 'string', 'locationName' => 'phone', ],
                'bank' => [ 'type' => 'string', 'locationName' => 'bank', ],
                'account' => [ 'type' => 'string', 'locationName' => 'account', ],
                'address' => [ 'type' => 'string', 'locationName' => 'address', ],
                'email' => [ 'type' => 'string', 'locationName' => 'email', ],
                'mediumType' => [ 'type' => 'string', 'locationName' => 'mediumType', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DeleteInvoiceTemplateResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'integer', 'locationName' => 'code', ],
                'msg' => [ 'type' => 'string', 'locationName' => 'msg', ],
            ],
        ],
        'DescribeInvoiceTemplateRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pin' => [ 'type' => 'string', 'locationName' => 'pin', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DeleteInvoiceTemplateResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DeleteInvoiceTemplateResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeInvoiceTemplateResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeInvoiceTemplateResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'CheckResult' => [
            'type' => 'structure',
            'members' => [
                'result' => [ 'type' => 'boolean', 'locationName' => 'result', ],
                'reason' => [ 'type' => 'list', 'member' => [ 'shape' => 'Reason', ], ],
            ],
        ],
        'DescribeOrderInvoiceResultShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'OrderInvoiceInfo', ],
            ],
        ],
        'RefundOwedInvoiceResultShape' => [
            'type' => 'structure',
            'members' => [
                'result' => [ 'type' => 'boolean', 'locationName' => 'result', ],
            ],
        ],
        'BatchUpdateInvoiceRefundOrderResultShape' => [
            'type' => 'structure',
            'members' => [
                'result' => [ 'type' => 'boolean', 'locationName' => 'result', ],
            ],
        ],
        'RefundOwedInvoiceResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'RefundOwedInvoiceResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'BatchUpdateInvoiceRefundOrderRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pin' => [ 'type' => 'string', 'locationName' => 'pin', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'BatchUpdateInvoiceRefundOrderResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'BatchUpdateInvoiceRefundOrderResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeOrderInvoiceRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pin' => [ 'type' => 'string', 'locationName' => 'pin', ],
                'orderNumberList' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'CheckInvoiceOwedInfoResultShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'CheckResult', ],
            ],
        ],
        'UpdateInvoiceRefundAmountRequestShape' => [
            'type' => 'structure',
            'members' => [
                'refundInfoList' => [ 'type' => 'list', 'member' => [ 'shape' => 'RefundInfo', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DescribeOrderInvoiceResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeOrderInvoiceResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'UpdateInvoiceRefundAmountResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'UpdateInvoiceRefundAmountResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'RefundOwedInvoiceRequestShape' => [
            'type' => 'structure',
            'members' => [
                'invoiceOweInfoList' => [ 'type' => 'list', 'member' => [ 'shape' => 'RefundOweInvoice', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'UpdateInvoiceRefundAmountResultShape' => [
            'type' => 'structure',
            'members' => [
                'result' => [ 'type' => 'boolean', 'locationName' => 'result', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
            ],
        ],
        'CheckInvoiceOwedInfoRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pin' => [ 'type' => 'string', 'locationName' => 'pin', ],
                'refundInfoList' => [ 'type' => 'list', 'member' => [ 'shape' => 'RefundOweInvoice', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'CheckInvoiceOwedInfoResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'CheckInvoiceOwedInfoResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
    ],
];
